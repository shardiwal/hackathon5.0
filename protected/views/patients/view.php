<br>
<div class="col-12">
<h1>Patient Info</h1>
 <div class="col-6">
<?php 
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$patient,
	'htmlOptions'=>array(
	 'class'=>'table mg-b-0'
					),
	'attributes'=>array(
	     array(
			'label'=>'',
			'type'=>'raw',
			'value' => function($data){
     			return CHtml::image(
			$data->photo(), '', array('style' => ' height: 100px ;text-align:center')
			);
			  }
		         ),
		'name',
		'gender',
		'age',
		'address',
		array(
		    'name'=>'reported_on',
		    'value'=>date("d F Y"),
		),
		'reported_from',
		array(
			'label'=>'Disease',
			'value' => function($data){
				return $data->disease();
			},
	      ),
		array(
			'label'=>'District',
			'value' => function($data){
			return $data->district();
			},
		),
		array(
			'label'=>'Tehsil',
			'value' => function($data){
			return $data->tehsil();
			},
		),
	),
)); ?>
</div>
</div>
