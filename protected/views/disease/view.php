<?php
/* @var $this DiseaseController */
/* @var $model Disease */

$this->breadcrumbs=array(
	'Diseases'=>array('index'),
	$model->disease_id,
);

$this->menu=array(
	array('label'=>'List Disease', 'url'=>array('index')),
	array('label'=>'Create Disease', 'url'=>array('create')),
	array('label'=>'Update Disease', 'url'=>array('update', 'id'=>$model->disease_id)),
	array('label'=>'Delete Disease', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->disease_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Disease', 'url'=>array('admin')),
);
?>

<h1>View Disease #<?php echo $model->disease_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'disease_id',
		'disease',
		'description',
	),
)); ?>
