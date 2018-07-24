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
       $names = array(
            array( "name" => "Aditi Musunur", "gender" => 'F', "age" => "25" ),
            array( "name" => "Advitiya Sujeet", "gender" => 'F', "age" => "24" ),
            array( "name" => "Alagesan Poduri", "gender" => 'M', "age" => "30" ),
            array( "name" => "Amrish Ilyas", "gender" => 'M', "age" => "32" ),
            array( "name" => "Aprativirya Seshan", "gender" => 'M', "age" => "31" ),
            array( "name" => "Asvathama Ponnada", "gender" => 'M', "age" => "28" ),
            array( "name" => "Avantas Ghosal", "gender" => 'M', "age" => "25" ),
            array( "name" => "Avidosa Vaisakhi", "gender" => 'M', "age" => "27" ),
            array( "name" => "Barsati Sandipa", "gender" => 'M', "age" => "38" ),
            array( "name" => "Debasis Sundhararajan", "gender" => 'M', "age" => "30" ),
            array( "name" => "Devasru Subramanyan", "gender" => 'M', "age" => "30" ),
            array( "name" => "Dharmadhrt Ramila", "gender" => 'F', "age" => "34" ),
            array( "name" => "Dhritiman Salim", "gender" => 'M', "age" => "35" ),
            array( "name" => "Gopa Trilochana", "gender" => 'M', "age" => "36" ),
            array( "name" => "Hardeep Suksma", "gender" => 'M', "age" => "38" ),
            array( "name" => "Jayadev Mitali", "gender" => 'M', "age" => "40" ),
            array( "name" => "Jitendra Choudhary", "gender" => 'M', "age" => "40" ),
            array( "name" => "Kalyanavata Veerender", "gender" => 'F', "age" => "42" ),
            array( "name" => "Naveen Tikaram", "gender" => 'M', "age" => "30" ),
            array( "name" => "Vijai Sritharan", "gender" => 'M', "age" => "32" ),
        );

          $criteria = new CDbCriteria;
            $activeprodiver = new CActiveDataProvider('Data', array(
                'criteria'=>$criteria,
                'pagination'=> false,
                'sort'=>array(
                    'defaultOrder'=> 'RAND()',
                ),
            ));

            foreach ($activeprodiver->getData() as $datas) {

           $address = urlencode("$datas->address,Rajasthan");     

           $json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=india");

             $json = json_decode($json);

      if(!empty($json->results))
           {
            $lat = $json->results[0]->geometry->location->lat;
            $long = $json->results[0]->geometry->location->lng;
            $city = $json->results[0]->address_components['1']->long_name;
           }else{
            echo "sorry data is not fetch";
            print_r($json); die;
           }

            $p = new Patients;
            $p->name = $datas->name;
            $p->gender = $datas->gender;
            $p->age = $datas->age;
            $p->address = $datas->address;
           $p->city = $city;
            $p->state = 'Rajasthan';
            $p->lat = $lat;
            $p->lan = $long;
            $p->reported_on = date('Y-m-d H:i:s');
           $p->reported_from = $city." - dispensary";
            $p->save();    
        }
    }
}
        foreach ($names as $person) {

            $criteria = new CDbCriteria;
            $criteria->limit = 1;
            $activeprodiver = new CActiveDataProvider(CityCord, array(
                'criteria'=>$criteria,
                'pagination'=> false,
                'sort'=>array(
                    'defaultOrder'=> 'RAND()',
                ),
            ));

            $city = $activeprodiver->getData();
            $city = $city[0];

            $p = new Patients;
            $p->name = $person['name'];
            $p->gender = $person['gender'];
            $p->age = rand(25, 45);
            $p->address = "xyz road ". $city->city . ", Rajasthan";
            $p->city = $city->city;
            $p->state = 'Rajasthan';
            $p->lat = $city->lat;
            $p->lan = $city->lan;
            $p->reported_on = date('Y-m-d H:i:s');
            $p->reported_from = $city->city ." - dispensary";
            $p->save();
        }

            // Add Patient disease
            $criteria = new CDbCriteria;
            $activeprodiver = new CActiveDataProvider(Patients, array(
                'criteria'=>$criteria,
                'pagination'=> false,
                'sort'=>array(
                    'defaultOrder'=> 'RAND()',
                ),
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
*/
}


}