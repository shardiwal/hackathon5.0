<?php
	Yii::app()->clientscript
	->registerScriptFile( Yii::app()->theme->baseUrl . '/bootstrap/js/bootstrap.min.js', CClientScript::POS_BEGIN )
	->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery-ui.js', CClientScript::POS_END )
	->registerCssFile( Yii::app()->theme->baseUrl . '/bootstrap/css/bootstrap.min.css' )
	->registerCssFile( Yii::app()->theme->baseUrl . '/css/jquery-ui.css' )
	->registerCoreScript( 'jquery' )
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="language" content="en" />
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Le styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
	<link rel="stylesheet" media="print" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" />
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/site.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>
	<script src="https://leaflet.github.io/Leaflet.markercluster/dist/leaflet.markercluster-src.js"></script>
	<link rel="stylesheet" href="https://leaflet.github.io/Leaflet.markercluster/dist/MarkerCluster.Default.css" />

	<!-- Le fav and touch icons -->
</head>

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
