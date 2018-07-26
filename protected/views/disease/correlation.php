<?php
    $district_selected = Yii::app()->user->getState('district_id');

    $region_wise = array();
    $district_wise = array();
    $gender_wise = array(
        'Male' => 0,
        'Female' => 0,
    );

    $disease_wise = array();
    $age_wise = array(
        array( 'count' => 0, 'age' => '0-14', 'label' => '(children)' ), 
        array( 'count' => 0, 'age' => '15-24', 'label' => '(early working age)' ), 
        array( 'count' => 0, 'age' => '25-54', 'label' => '(prime working age)' ), 
        array( 'count' => 0, 'age' => '55-64', 'label' => '(mature working age)' ), 
        array( 'count' => 0, 'age' => '65-110', 'label' => '(elderly)' )
    );

    foreach ($activeprodiver->getData() as $data) {
        $disease = $data->disease->disease;
        $disease_id = $data->disease_id;
        if ( !array_key_exists($disease_id, $disease_wise) ) {
            $disease_wise[$disease_id] = array(
                'count' => 0,
                'disease' => $disease,
                'season_count' => 0
            );
        }
        $disease_wise[$disease_id]['count']++;

        $reported_month = date("m", strtotime($data->added_on));
        $season_month = explode(',',$data->disease->season_month);
        if ( in_array($reported_month, $season_month) ) {
            $disease_wise[$disease_id]['season_count']++;            
        }


        if ( !array_key_exists($data->patient->gender, $gender_wise) ) {
            $gender_wise[$data->patient->gender] = 0;
        }
        $gender_wise[$data->patient->gender]++;

        $patient_age = $data->patient->age;
        foreach ($age_wise as &$ageg) {
            $age_range = explode('-', $ageg['age']);
            if ( $patient_age > $age_range[0] && $patient_age < $age_range[1] ) {
                $ageg['count']++;
            }
        }

        $district = $data->patient->district();
        $tehsil   = $data->patient->tehsil();

        if ( !array_key_exists($district, $district_wise) ) {
            $district_wise[$district] = 0;
        }
        $district_wise[$district]++;

        if ( !array_key_exists($district, $region_wise) ) {
            $region_wise[$district] = array();
        }
        if ( !array_key_exists($tehsil, $region_wise[$district]) ) {
            $region_wise[$district][$tehsil] = 0;
        }
        $region_wise[$district][$tehsil]++;
    }
?>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg ">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title"><?php echo $district_obj->label; ?> - Analysis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
    	<div>
    		<table class="table">
    			<tr>
    				<th scope="col">Disease</th>
    				<th scope="col">Count</th>
    				<th scope="col">Possible Correlation Disease</th>
    			</tr>
    		<?php
    			foreach ($disease_wise as $disease_id => $value) {
    				$found_correlation = array();
    				$allcorrelation = DiseaseCorrelation::model()->findAll("disease_id=$disease_id");
    				foreach ($allcorrelation as $c) {
						$link = CHtml::link($c->codisease->disease, '#', array(
                            'class'=>'discore',
                            'disease_id'=>$c->dco_id,
                            'session' => json_encode($disease_wise[$disease_id])
                        ));
    					array_push($found_correlation, $link);
    				}
    				$found_correlation_str = implode(', ', $found_correlation);
    				echo "
    				<tr>
    					<td>$value[disease]</td>
    					<td>$value[count]</td>
    					<td>$found_correlation_str</td>
    				</tr>";
    			}
    		?>
    		</table>
    	</div>
    	<div id="analysis">

    	</div>
    </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	$('.discore').click( function(e){
		var doc_id = $(this).attr('disease_id');
		e.preventDefault();
		$.ajax({
			url: "<?php echo Yii::app()->createUrl('/disease/coorid'); ?>",
			data: {
				'doc_id' : doc_id,
                'session': $(this).attr('session')
			},
			success: function(data){
				$('#analysis').html(data);
			}
		})
	});
</script>