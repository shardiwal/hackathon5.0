<?php
/* @var $this PatientsController */
/* @var $model Patients */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patients-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lat'); ?>
		<?php echo $form->textField($model,'lat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lan'); ?>
		<?php echo $form->textField($model,'lan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reported_on'); ?>
		<?php echo $form->textField($model,'reported_on'); ?>
		<?php echo $form->error($model,'reported_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reported_from'); ?>
		<?php echo $form->textField($model,'reported_from',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'reported_from'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->