<?php
/* @var $this PatientsController */
/* @var $model Patients */

$this->breadcrumbs=array(
	'Patients'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Patients', 'url'=>array('index')),
	array('label'=>'Create Patients', 'url'=>array('create')),
	array('label'=>'Update Patients', 'url'=>array('update', 'id'=>$model->patient_id)),
	array('label'=>'Delete Patients', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->patient_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patients', 'url'=>array('admin')),
);
?>

<h1>View Patients #<?php echo $model->patient_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'patient_id',
		'name',
		'gender',
		'age',
		'address',
		'city',
		'state',
		'lat',
		'lan',
		'reported_on',
		'reported_from',
	),
)); ?>
