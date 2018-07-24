<?php
/* @var $this DiseaseController */
/* @var $data Disease */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('disease_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->disease_id), array('view', 'id'=>$data->disease_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disease')); ?>:</b>
	<?php echo CHtml::encode($data->disease); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>