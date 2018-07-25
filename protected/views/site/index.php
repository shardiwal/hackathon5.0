<div class="filterhead noprint">
	<?php $this->renderPartial('//patients/_filter'); ?>
</div>
<div class="diseaselist noprint">
    <?php $this->renderPartial('//patients/_disease_filter'); ?>
</div>

<?php
    $criteria = new CDbCriteria;
    $criteria->with = array('disease', 'patient');
    $activeprodiver = new CActiveDataProvider(PatientDisease, array(
        'criteria'=>$criteria,
        'pagination'=> false,
        'sort'=>array(
            'defaultOrder'=> 'added_on DESC',
        ),
    ));
?>

<div id="progress"><div id="progress-bar">&nbsp;Loading...</div></div>
<div id="propmap" style="width: 100%; height: 400px"></div>

<script type="text/javascript">
$('document').ready( function(){

    $('#propmap').css('height', window.innerHeight + 'px');

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

    var map = L.map('propmap', {
    	center: [25.36, 77.53],
    	zoom: 6
    });

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: '',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: mapboxAccessToken
    }).addTo(map);

    var progress = document.getElementById('progress');
    var progressBar = document.getElementById('progress-bar');
    var markers = L.markerClusterGroup({ chunkedLoading: true, chunkProgress: updateProgressBar });

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
    var dengue     = new LeafIcon({iconUrl:'<?php echo Yii::app()->baseUrl; ?>/images/danger.png'});
    var dengueIcon = new LeafIcon({iconUrl:'<?php echo Yii::app()->baseUrl; ?>/images/dengue.png'});

    var markerList = [];

    var disease_icon = function(disease) {
        var theme_url = '<?php echo Yii::app()->baseUrl; ?>/images/';
        return new LeafIcon({iconUrl: theme_url + disease + '-icon.png'});
    }
    <?php
        foreach ($activeprodiver->getData() as $patient) {
            $disease_icon = strtolower($patient->disease->disease);
            $disease_icon = str_replace(' ', '_', $disease_icon);
            $patient_id = $patient->patient->patient_id;
            $tooltip = "Patient Id: ". $patient_id .'<br/>';
        	$tooltip .= "Disease: ". $patient->disease->disease .'<br/>';
        	$tooltip .= "Tehsil: ". $patient->patient->tehsil() .'<br/>';
        	$tooltip .= "District: ". $patient->patient->tehsil().'<br/><br/>';
            $tooltip .= "<a class=\"btn-sm btn-info view_patient\" pid=\"$patient_id\" href=\"#\" role=\"button\">Details</a>";
        	// $lat = $patient->patient->lat;
        	// $lan = $patient->patient->lan;
    		$lat = $patient->patient->lat ? $patient->patient->lat : $patient->patient->regiond->lat;
    		$lan = $patient->patient->lan ? $patient->patient->lan : $patient->patient->regiond->lan;
    		echo "
    		markerList.push(
    			L.marker(
    				L.latLng(
    					$lat,
    					$lan
    				),
    				{
                        icon: disease_icon('$disease_icon'),
                        title: '$tooltip'
                    }
    			).bindPopup( '$tooltip' )
    		);
    		";
    	}
    ?>

    $.getJSON('<?php echo Yii::app()->theme->baseUrl; ?>/js/rajasthanGeoJSON.json').then(function(geoJSON) {
        var osm = new L.TileLayer.BoundaryCanvas("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            boundary: geoJSON,
            attribution: ''
        });
        map.addLayer(osm);
        var rajLayer = L.geoJSON(geoJSON);
        map.fitBounds(rajLayer.getBounds());
    });
    markers.addLayers(markerList);
    map.addLayer(markers);

})
</script>
