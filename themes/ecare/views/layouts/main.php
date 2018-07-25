<?php
	Yii::app()->clientscript
	->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery-3.3.1.slim.min.js', CClientScript::POS_BEGIN )
	->registerScriptFile( Yii::app()->theme->baseUrl . '/js/popper.min.js', CClientScript::POS_BEGIN )
	->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap.min.js', CClientScript::POS_BEGIN )
	->registerScriptFile( Yii::app()->theme->baseUrl . '/js/google_map.js', CClientScript::POS_BEGIN )
	->registerScriptFile( Yii::app()->theme->baseUrl . '/js/leaflet.js', CClientScript::POS_BEGIN )
	->registerScriptFile( Yii::app()->theme->baseUrl . '/js/leaflet.markercluster-src.js', CClientScript::POS_BEGIN )
	->registerScriptFile( Yii::app()->theme->baseUrl . '/js/BoundaryCanvas.js', CClientScript::POS_BEGIN )
	->registerScriptFile( Yii::app()->theme->baseUrl . '/js/selectize.min.js', CClientScript::POS_END )
	->registerScriptFile( Yii::app()->theme->baseUrl . '/js/site.js', CClientScript::POS_END )

	->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.min.css' )
	->registerCssFile( Yii::app()->theme->baseUrl . '/css/selectize.bootstrap3.css' )
	->registerCssFile( Yii::app()->theme->baseUrl . '/css/leaflet.css' )
	->registerCssFile( Yii::app()->theme->baseUrl . '/css/MarkerCluster.Default.css' )
	->registerCssFile( Yii::app()->theme->baseUrl . '/css/style.css' )
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="language" content="en" />
	<!-- Le fav and touch icons -->
</head>
<!-- http://geojson.io -->
<?php
$bclass = 'authenticated';
if(Yii::app()->user->isGuest){
	$bclass = 'unauthenticated';
} ?>
<body class="<?php echo $bclass; ?>">

	<?php echo $content ?>
	<div class="clearfix"></div>

</body>
</html>
