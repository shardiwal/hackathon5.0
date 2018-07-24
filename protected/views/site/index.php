<?php

    $criteria = new CDbCriteria;
    $activeprodiver = new CActiveDataProvider('PatientDisease', array(
        'criteria'=>$criteria,
        'pagination'=> false,
        'sort'=>array(
            'defaultOrder'=> 'added_on DESC',
        ),
    ));
?>

<?php
	$by_disease = array();
    foreach ($activeprodiver->getData() as $patient) {
    	$disease = $patient->disease->disease;
    	$tooltip = "Disease: ". $disease .'<br/>';
    	$tooltip .= "City: ". $patient->patient->city;
    	$lat = $patient->patient->lat;
    	$lan = $patient->patient->lan;
    	if ( !array_key_exists($disease, $by_disease) ) {
    		$by_disease[$disease] = array();
    	}
    	$by_disease[$disease][] = $patient;
	}
?>

<script src="/geomap/themes/ecare/js/us-states.js"></script>

<div id="progress"><div id="progress-bar">&nbsp;Loading...</div></div>
<div id="propmap" style="width: 100%; height: 400px"></div>

<script type="text/javascript">
var height = ( window.innerHeight - $('.navbar').height() );
$('#propmap').css('height',height);

function updateProgressBar(processed, total, elapsed, layersArray) {
	if (elapsed > 1000) {
		// if it takes more than a second to load, display the progress bar:
		progress.style.display = 'block';
		progressBar.style.width = Math.round(processed/total*100) + '%';
	}

	if (processed === total) {
		// all markers processed - hide the progress bar:
		progress.style.display = 'none';
	}
}

var mapboxAccessToken = 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
		'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=' + mapboxAccessToken;

L.icon = function (options) {
    return new L.Icon(options);
};
var LeafIcon = L.Icon.extend({
    options: {
        shadowUrl: '/images/marker-icon.png',
        iconSize:     [25, 40],
        shadowAnchor: [4, 62],
        popupAnchor:  [1, -34]
    }
});
var defaultIcon = new LeafIcon({iconUrl:'<?php echo Yii::app()->baseUrl; ?>/images/marker-icon.png'});
var tyfiedIcon = new LeafIcon({iconUrl:'<?php echo Yii::app()->baseUrl; ?>/images/tyfied.png'});
var tbIcon = new LeafIcon({iconUrl:'<?php echo Yii::app()->baseUrl; ?>/images/tb.png'});
var mosqIcon = new LeafIcon({iconUrl:'<?php echo Yii::app()->baseUrl; ?>/images/mosq.png'});
var cancerIcon = new LeafIcon({iconUrl:'<?php echo Yii::app()->baseUrl; ?>/images/cancer.png'});
var hivIcon = new LeafIcon({iconUrl:'<?php echo Yii::app()->baseUrl; ?>/images/hiv.png'});
var flueIcon = new LeafIcon({iconUrl:'<?php echo Yii::app()->baseUrl; ?>/images/swiine flu.png'});
var hepatitiesIcon = new LeafIcon({iconUrl:'<?php echo Yii::app()->baseUrl; ?>/images/hepatities.png'});
var diabitiesIcon = new LeafIcon({iconUrl:'<?php echo Yii::app()->baseUrl; ?>/images/diabities.png'});
var asthmaIcon = new LeafIcon({iconUrl:'<?php echo Yii::app()->baseUrl; ?>/images/asthma.png'});
var arthritiesIcon = new LeafIcon({iconUrl:'<?php echo Yii::app()->baseUrl; ?>/images/arthrities.png'});
var jaundiseIcon = new LeafIcon({iconUrl:'<?php echo Yii::app()->baseUrl; ?>/images/jaundise.png'});
var diseases = [];
<?php
    foreach ($by_disease as $disease => $data) {
    	echo "
    	var marker_icon = defaultIcon;
    	if ( '$disease' == 'HIV' ){
    		marker_icon = hivIcon;
    	}
        if ( '$disease' == 'Chikungunya' ){
            marker_icon = mosqIcon;
        }
         if ( '$disease' == 'Dengue' ){
            marker_icon = mosqIcon;
        }
        if ( '$disease' == 'Cancer' ){
            marker_icon = cancerIcon;
        }
        if ( '$disease' == 'Swine Flu' ){
            marker_icon = flueIcon;
        }
        if ( '$disease' == 'Diabetes' ){
            marker_icon = diabitiesIcon;
        }
        if ( '$disease' == 'Asthma' ){
            marker_icon = asthmaIcon;
        }
        if ( '$disease' == 'Arthritis' ){
            marker_icon = arthritiesIcon;
        }
        if ( '$disease' == 'Jaundice' ){
            marker_icon = jaundiseIcon;
        }
        if ( '$disease' == 'Polio' ){
            marker_icon = hepatitiesIcon;
        }
        if ( '$disease' == 'Tuberculosis (TB)' ){
            marker_icon = tbIcon;
        }
        if ( '$disease' == 'Typhoid' ){
            marker_icon = tyfiedIcon;
        }
    	";
    	echo "var da = [];";
    	foreach ($data as $patient) {
	    	$tooltip = $patient->disease->disease;
	    	// $tooltip .= "<br/>City: ". $patient->patient->city;
	    	$lat = $patient->patient->lat;
	    	$lan = $patient->patient->lan;
	    	echo "
				da.push(L.marker([$lat, $lan], {icon: marker_icon}).bindPopup('$tooltip'));
	    	";
    	}
    	echo "
    		diseases.push(da);
    	";
	}
?>

var baseMaps = {};
var overlayMaps = {};
var alldisease_layers = [];
$.each( diseases, function(i,e) {
	var layer = L.layerGroup(e);
	alldisease_layers.push( layer );
	overlayMaps[e[0]._popup._content] = layer;
})

var disease_layer = L.layerGroup(diseases[0]);


var map = L.map('propmap', {
	center: [25.36, 77.53],
	zoom: 6,
	layers: alldisease_layers
});

L.control.layers(baseMaps, overlayMaps).addTo(map);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: mapboxAccessToken
}).addTo(map);

var progress = document.getElementById('progress');
var progressBar = document.getElementById('progress-bar');
var markers = L.markerClusterGroup({ chunkedLoading: true, chunkProgress: updateProgressBar });

var markerList = [];
<?php
    foreach ($activeprodiver->getData() as $patient) {
    	$tooltip = "Disease: ". $patient->disease->disease .'<br/>';
    	$tooltip .= "City: ". $patient->patient->city;
    	$lat = $patient->patient->lat;
    	$lan = $patient->patient->lan;
		echo "
		markerList.push(
			L.marker(
				L.latLng(
					$lat,
					$lan
				),
				{ title: '$tooltip' }
			).bindPopup( '$tooltip' )
		);
		";
	}
?>
markers.addLayers(markerList);
map.addLayer(markers);


</script>