<?php
/* @var $this DiseaseController */
/* @var $model Disease */

$this->breadcrumbs=array(
	'Diseases'=>array('index'),
	$model->disease_id=>array('view','id'=>$model->disease_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Disease', 'url'=>array('index')),
	array('label'=>'Create Disease', 'url'=>array('create')),
	array('label'=>'View Disease', 'url'=>array('view', 'id'=>$model->disease_id)),
	array('label'=>'Manage Disease', 'url'=>array('admin')),
);
?>

<h1>Update Disease <?php echo $model->disease_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>