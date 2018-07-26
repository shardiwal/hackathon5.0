<?php
	$values = array(
		'district_id' => Yii::app()->user->getState('district_id') ? Yii::app()->user->getState('district_id')->region_id : 0,
		'tehsil_id'   => Yii::app()->user->getState('tehsil_id') ? Yii::app()->user->getState('tehsil_id')->region_id : 0,
		'state_id' => Yii::app()->user->getState('state_id') ? Yii::app()->user->getState('state_id')->region_id : 415,
		
	);
	if ( array_key_exists('Finder', $_GET) ) {
		foreach ($_GET['Finder'] as $key => $value) {
			$values[$key] = $value;
		}
	}
?>
<div class="container">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action' => Yii::app()->createUrl('site/setSelection'),
	'method' => 'GET',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data', 'class'=>'form-horizontal'),
)); ?>

<div class="card-header">
  <h6 class="mb-0">
      Choose Your Region
  </h6>
</div>

<div class="row">

	<div class="col-sm">
		<?php //echo CHtml::label('District','',array('class'=>'control-label')); ?>
		<?php
			$this->widget('ext.yii-selectize.YiiSelectize', array(
				'id'     => 'division_dropdown',
				'value'     => $values['state_id'],
				'name'      => 'Finder[state_id]',
				'data'      => CHtml::listdata(Region::model()->findAll( "type='State'", array('order' => "label ASC")),
				'region_id', 'label'),
				'cssTheme'  => 'default',
				'fullWidth' => false,
				'placeholder'=>'Select State',
				'callbacks' => array(
					'onChange' => 'onDivisionSelect',
				),
			));
	    ?>
	</div>
	<div class="col-sm">
		<?php //echo CHtml::label('District','',array('class'=>'control-label')); ?>
		<?php
			$this->widget('ext.yii-selectize.YiiSelectize', array(
				'id'     => 'district_dropdown',
				'value'     => $values['district_id'],
				'name'      => 'Finder[district_id]',
				'data'      => array(),
				'cssTheme'  => 'default',
				'fullWidth' => false,
				'placeholder'=>'Select District',
				'callbacks' => array(
					'onChange' => 'onDistrictSelect',
					'onOptionAdd' => 'onDistrictLoad'
				),
			));
	    ?>
	</div>

	<div class="col-sm">
		<?php //echo CHtml::label('Tehsil','',array('class'=>'control-label')); ?>
		<?php
			$this->widget('ext.yii-selectize.YiiSelectize', array(
				'id'     => 'tehsil_dropdown',
				'value'     => $values['tehsil_id'],
				'name'      => 'Finder[tehsil_id]',
				'data'      => array(),
				'cssTheme'  => 'default',
				'fullWidth' => false,
				'placeholder'=>'Select Tehsil',
				'callbacks' => array(
					'onChange' => 'onTehsilSelect',
					'onOptionAdd' => 'onTehsilLoad'
				),
			));
		?>
	</div>

	<div class="col-sm">
		<?php echo CHtml::hiddenField('redirect', Yii::app()->request->url ); ?>
		<?php echo CHtml::submitButton('Set Region',array('class'=>'btn btn-primary')); ?>
	</div>

	<div class="clear clearfix"></div>

	<br/>
	<br/>
	<br/>
</div>

<?php $this->endWidget(); ?>

<div class="">
	<b>Your Selection:</b> <br/>
	State: <?php echo Yii::app()->user->getState('state_id') ? Yii::app()->user->getState('state_id')->label : '...'; ?>,<br/>
	District: <?php echo Yii::app()->user->getState('district_id') ? Yii::app()->user->getState('district_id')->label : '...'; ?>,<br/>
	Tehsil: <?php echo Yii::app()->user->getState('tehsil_id') ? Yii::app()->user->getState('tehsil_id')->label : '...'; ?> <br/>
</div>

	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
</div>

<script type="text/javascript">
var xhr;
var onDivisionSelect = function(value){
	if (!value) { value = <?php echo $values['state_id']; ?> || ''; }
	var tehsil = $('#district_dropdown')[0].selectize;
	tehsil.clearOptions();
    tehsil.load(function(callback) {
        xhr && xhr.abort();
        xhr = $.ajax({
            url: "<?php echo CController::createUrl('site/districts'); ?>",
            dataType : 'json',
            data: {
            	'id' : value
            },
            success: function(results) {
                callback(results);
            },
            error: function() {
                callback();
            }
        })
    });
};
var onDistrictSelect = function(value){
	if (!value) { value = <?php echo $values['district_id']; ?> || ''; }
	var tehsil = $('#tehsil_dropdown')[0].selectize;
	tehsil.clearOptions();
    tehsil.load(function(callback) {
        xhr && xhr.abort();
        xhr = $.ajax({
            url: "<?php echo CController::createUrl('site/tehsil'); ?>",
            dataType : 'json',
            data: {
            	'id' : value
            },
            success: function(results) {
                callback(results);
            },
            error: function() {
                callback();
            }
        })
    });
};
var onDistrictLoad = function(){
	$('#district_dropdown')[0].selectize.setValue(<?php echo $values['district_id']; ?>, 0);
};
var onTehsilLoad = function(){
	$('#tehsil_dropdown')[0].selectize.setValue(<?php echo $values['tehsil_id']; ?>, 0);
};
var onTehsilSelect = function(value){
	//var s = window.location.search;
	//var params = {
	//	'Finder[district_id]' : $('#district_dropdown').val(),
	//	'Finder[tehsil_id]' : value
	//};
	//window.location.href += (s.substring(0,1) == "?") ? "&" + $.param( params ) : "?" + $.param( params );
};
<?php if($values['state_id']): ?>
	setTimeout(function(){
		$('#division_dropdown')[0].selectize.trigger( "change" );
	}, 500);
<?php endif; ?>
</script>