<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';

?>

<div style="font-size: 19px;">
	<h2>Error <?php echo $code; ?></h2>
	<div class="error">
		<?php echo CHtml::encode($message); ?>
	</div>
	<br>
	<button class="btn btn-primary" onclick="goBack()">Go Back</button>
</div>

<script>
function goBack() {
    window.history.back()
}
</script>