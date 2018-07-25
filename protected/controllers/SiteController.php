<?php

class SiteController extends Controller
{
    public function filters()
    {
        return array(
            'accessControl'
        );
    }
    
    
    public function accessRules()
    {
        return array(
        );
    }
    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction'
            )
        );
    }

    public function actionTehsil($id)
    {
        if (!$id){
            return;
        }
        $data = Region::model()->findAll( "type like 'Tehsil' AND parent =$id", array('order' => "label ASC"));
        $results = array();
        foreach ($data as $d) {
            array_push($results, array( 'value' => $d->region_id, 'text' => $d->label ));
        }
        echo json_encode ( $results );
        Yii::app()->end();
    }

    public function actionDistricts($id)
    {
        if (!$id){
            return;
        }
        $data = Region::model()->findAll( "type like 'District' AND parent =$id", array('order' => "label ASC"));
        $results = array();
        foreach ($data as $d) {
            array_push($results, array( 'value' => $d->region_id, 'text' => $d->label ));
        }
        echo json_encode ( $results );
        Yii::app()->end();
    }

    public function actionGetpatientInfo($id)
    {
        if (!$id){
            return;
        }
        $patient = Region::model()->findByPk($value);
        $html = $this->renderPartial('index',array('patient' => $patient));
        echo json_encode( $html );
        Yii::app()->end();
    }

    public function actionGetpatient($id)
    {
        if (!$id){
            return;
        }
        echo json_encode( Region::model()->findByPk($value) );
        Yii::app()->end();
    }

    public function actionsetSelection(){
        Yii::app()->user->setState('tehsil_id', '');
        if ( array_key_exists('Finder', $_GET) ) {
            foreach ($_GET['Finder'] as $key => $value) {

                if ( $key == 'state_id' ) {
                    $division = Region::model()->findByPk($value);
                    Yii::app()->user->setState($key, $division);
                }
                if ( $key == 'tehsil_id' ) {
                    $tehsil = Region::model()->findByPk($value);
                    Yii::app()->user->setState($key, $tehsil);
                }
                if ( $key == 'district_id' ) {
                    $district = Region::model()->findByPk($value);
                    Yii::app()->user->setState($key, $district);
                }
            }
        }
        $this->redirect($_GET['redirect']);
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        $this->render('index',array(
        ));
    }

    public function actionPopulatePatient($count){

/*
        $criteria = new CDbCriteria;
        $criteria->addCondition('lat is NULL AND lan is NULL');
        $activeprodiver = new CActiveDataProvider(Region, array(
            'criteria'=>$criteria,
            'pagination'=> false,
        ));

        foreach ($activeprodiver->getData() as $r) {

            if ( $r->type == 'State' ) {
                $address = urldecode("Rajasthan");
            }            

            if ( $r->type == 'District' ) {
                $address = urldecode("$r->label,Rajasthan");
            }

            if ( $r->type == 'Tehsil' ) {
                $district = Region::model()->findByAttributes(array('type'=>'District','region_id'=>$r->parent));
                $address = urlencode("$district->label,$r->label,Rajasthan");
            }

            $url = "https://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=india&key=AIzaSyDo-a36fpsL1ZOYULv0A7hzhOuiW9-0Kew";

            $result = json_decode( file_get_contents($url), true);
            if ( $result ) {
                $location = $result['results'][0]['geometry']['location'];
                var_dump( $address );
                echo '<br/>';
                $r->lat = $location['lat'];
                $r->lan = $location['lng'];
                $r->save();
            }
            sleep(2);
        }
*/


        $criteria = new CDbCriteria;
        $criteria->addCondition('lat is NULL AND lan is NULL');
        $activeprodiver = new CActiveDataProvider(Patients, array(
            'criteria'=>$criteria,
            'pagination'=> false,
        ));

        $prev_address = '';
        $prev_lat = '';
        $prev_lan = '';
        foreach ($activeprodiver->getData() as $r) {

            $address = urlencode($r->address .', '. $r->tehsil() . ', '. $r->tehsil() .', Rajasthan');

            if ( $prev_address == $address ) {
                $r->lat = $prev_lat;
                $r->lan = $prev_lan;
                $r->update();
            }
            else {
                echo " $address <br/>";

                $url = "https://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=india&key=AIzaSyDo-a36fpsL1ZOYULv0A7hzhOuiW9-0Kew";

                $result = json_decode( file_get_contents($url), true);
                if ( $result ) {
                    $location = $result['results'][0]['geometry']['location'];
                    $r->lat = $location['lat'];
                    $r->lan = $location['lng'];
                    $r->save();

                    $prev_address = $address;
                    $prev_lan = $r->lan;
                    $prev_lat = $r->lat;
                }
                sleep(2);
            }
        }


/*
            // Add Patient disease
            $criteria = new CDbCriteria;
            $activeprodiver = new CActiveDataProvider(Patients, array(
                'criteria'=>$criteria,
                'pagination'=> false,
            ));

            foreach ($activeprodiver->getData() as $p) {
                $criteria = new CDbCriteria;
                $criteria->limit = 1;
                $activeprodiver = new CActiveDataProvider(Disease, array(
                    'criteria'=>$criteria,
                    'pagination'=> false,
                    'sort'=>array(
                        'defaultOrder'=> 'RAND()',
                    ),
                ));
                $disease = $activeprodiver->getData();
                $disease = $disease[0];

                $pd = new PatientDisease;
                $pd->patient_id = $p->patient_id;
                $pd->disease_id = $disease->disease_id;
                $pd->added_on = date('Y-m-d H:i:s');
                $pd->save();
            }
*/

    }

    public function actionAssignDiseasePatient(){

        // Add Patient disease
        $criteria = new CDbCriteria;
        $activeprodiver = new CActiveDataProvider(Patients, array(
            'criteria'=>$criteria,
            'pagination'=> false,
        ));

        foreach ($activeprodiver->getData() as $p) {
            $criteria = new CDbCriteria;
            $criteria->limit = 1;
            $activeprodiver = new CActiveDataProvider(Disease, array(
                'criteria'=>$criteria,
                'pagination'=> false,
                'sort'=>array(
                    'defaultOrder'=> 'RAND()',
                ),
            ));
            $disease = $activeprodiver->getData();
            $disease = $disease[0];

            $pd = new PatientDisease;
            $pd->patient_id = $p->patient_id;
            $pd->disease_id = $disease->disease_id;
            $pd->added_on = date('Y-m-d H:i:s');
            $pd->save();
        }

    }


}
