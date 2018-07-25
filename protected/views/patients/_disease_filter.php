<?php

?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'method' => 'GET',
	'enableAjaxValidation'=>false,
)); ?>

<div class="disease_filter">
<ul>
<?php
	$disesae_list = Disease::model()->findAll("", array('order' => "disease ASC"));
	foreach ($disesae_list as $d) {
		$disease_id   = $d->disease_id;
        $disease_icon = strtolower($d->disease);
        $disease_icon = str_replace(' ', '_', $disease_icon);
        $path = Yii::app()->baseUrl . '/images/' . $disease_icon. '-icon.png';
		echo "<li>
			<label>
			<span><img src='$path'></span>
			<input type='checkbox' name='disease_selected' value='$disease_id'>
			$d->disease
			</label>
		</li>";
	}
?>
</ul>

<?php $this->endWidget(); ?>
</div>