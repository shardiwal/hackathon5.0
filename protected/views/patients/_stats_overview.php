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
                'disease' => $disease
            );
        }
        $disease_wise[$disease_id]['count']++;

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

<?php $form=$this->beginWidget('CActiveForm', array(
    'action' => Yii::app()->createUrl('site/index'),
    'method' => 'GET',
    'enableAjaxValidation'=>false,
)); ?>

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          TimeLine
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
            DATE FILTER
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Demographic
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul>
        <li>
            <label>
                <input type='radio' name='selected_gender' <?php if(!$selected_gender){ echo 'checked'; } ?> value=''>
                All
            </label>
        </li>
        <?php
            foreach ($gender_wise as $key => $value) {
                $selected = '';
                if ( $key == $selected_gender ) {
                    $selected = 'checked';
                }
                echo "<li>
                    <label>
                        <input type='radio' $selected name='selected_gender' value='$key'>
                        $key:
                    </label>
                    <span class='badge badge-primary'>$value</span>
                </li>";
            }
        ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Age Groups
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="age_s">
        <li>
            <label>
                <input type='radio' name='selected_age_group' <?php if(!$selected_age_group){ echo 'checked'; } ?> value=''>
                All
            </label>
        </li>
        <?php
            foreach ($age_wise as $v) {
                $age_  = $v['age'];
                $label = $age_ .' '. $v['label'];
                $count = $v['count'];

                $selected = '';
                if ( $age_ == $selected_age_group ) {
                    $selected = 'checked';
                }
                echo "<li>
                    <label>
                        <input type='radio' $selected name='selected_age_group' value='$age_'>
                        $label:
                    </label>
                    <span class='badge badge-primary'>$count</span>
                </li>";
            }
        ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Disease Stat
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="disease_filter">
        <?php

            $disesae_list = Disease::model()->findAll("", array('order' => "disease ASC"));
            foreach ($disesae_list as $d) {
                $disease_id = $d->disease_id;
                $stat = '';
                if ( array_key_exists($disease_id, $disease_wise) ) {
                    $stat = $disease_wise[$disease_id];
                }
                $disease    = $d->disease;
                $count      = 0;

                if ( $stat ) {
                    $disease    = $stat['disease'];
                    $count      = $stat['count'];
                }

                $disease_icon = strtolower($disease);
                $disease_icon = str_replace(' ', '_', $disease_icon);
                $path = Yii::app()->baseUrl . '/images/' . $disease_icon. '-icon.png';

                $confirm_selection = '';
                if ( sizeof($selected_diseases) ) {
                    $is_selected = in_array($disease_id, $selected_diseases);
                    if ( $is_selected ) {
                        $confirm_selection = ' checked ';
                    }
                }
                else {
                    $confirm_selection = 'checked';
                }

                echo "<li>
                    <span><img src='$path'></span>
                    <input type='checkbox' $confirm_selection name='disease_selected[]' value='$disease_id'>
                    <label>$disease:</label><span class='badge badge-primary'>$count</span>
                </li>";
            }
        ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Regional Stat
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <ul class="regional">
        <?php
            if ( $district_selected ) {
                foreach ($region_wise as $district => $tehsils) {
                    echo "<li class='dist'><label>District: <b>$district</b></label><br/><b>Tehsil</b><ul class='tehsil'>";
                    foreach ($tehsils as $key => $value) {
                        echo "<li><label>$key:</label><span class='badge badge-primary'>$value</span></li>";
                    }
                    echo "</ul></li>";
                }
            }
            else {
                foreach ($district_wise as $district => $count) {
                    echo "<li><label>$district:</label><span class='badge badge-primary'>$value</span></li>";
                }
            }
        ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php $this->endWidget(); ?>

<script type="text/javascript">
    $('#stat_overview input[type="checkbox"],#stat_overview input[type="radio"]').click( function(e){
        $(this).closest('form').trigger('submit');
    });
</script>