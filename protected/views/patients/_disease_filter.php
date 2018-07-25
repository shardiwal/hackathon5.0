<?php

?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action' => Yii::app()->createUrl('site/index'),
	'method' => 'GET',
	'enableAjaxValidation'=>false,
)); ?>

<div class="disease_filter">
<ul>
<?php
	$selected_diseases = array();
	if ( array_key_exists('disease_selected', $_GET) ) {
		$selected_diseases = $_GET['disease_selected'];
	}

	$disesae_list = Disease::model()->findAll("", array('order' => "disease ASC"));
	foreach ($disesae_list as $d) {
		$disease_id   = $d->disease_id;
        $disease_icon = strtolower($d->disease);
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
			<label>
			<span><img src='$path'></span>
			<input type='checkbox' $confirm_selection name='disease_selected[]' value='$disease_id'>
			$d->disease
			</label>
		</li>";
	}
?>
</ul>

<?php $this->endWidget(); ?>
</div>

<script type="text/javascript">
	$('.disease_filter input[type="checkbox"]').click( function(e){
		$(this).closest('form').trigger('submit');
	});
</script>