<?php

/**
 * This is the model class for table "patients".
 *
 * The followings are the available columns in table 'patients':
 * @property integer $patient_id
 * @property string $photo
 * @property string $name
 * @property integer $age
 * @property string $gender
 * @property string $aadhar_no
 * @property string $mobile_no
 * @property string $reported_on
 * @property string $reported_from
 * @property string $address
 * @property integer $region
 * @property string $lat
 * @property string $lan
 */
class Patients extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'patients';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, mobile_no, reported_on, region', 'required'),
			array('age, region', 'numerical', 'integerOnly'=>true),
			array('name, gender, mobile_no, reported_from, lat, lan', 'length', 'max'=>255),
			array('aadhar_no', 'length', 'max'=>14),
			array('photo, address', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('patient_id, photo, name, age, gender, aadhar_no, mobile_no, reported_on, reported_from, address, region, lat, lan', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'regiond' => array(self::BELONGS_TO, 'Region', 'region'),
			'patientdesise' => array(self::BELONGS_TO, 'PatientDisease', 'disease_id'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'patient_id' => 'Patient',
			'photo' => 'Photo',
			'name' => 'Name',
			'age' => 'Age',
			'gender' => 'Gender',
			'aadhar_no' => 'Aadhar No',
			'mobile_no' => 'Mobile No',
			'reported_on' => 'Reported On',
			'reported_from' => 'Reported From',
			'address' => 'Address',
			'region' => 'Region',
			'lat' => 'Lat',
			'lan' => 'Lan',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		if ( $this->patient_id ) {
			if ( strpos($this->patient_id, ',') !== false ){
				$patient_ids = explode(',', $this->patient_id);
				$criteria->addInCondition('patient_id',$patient_ids);
			}
			else {
				$criteria->compare('patient_id',$this->patient_id);
			}
		}
		if ( $this->region ) {
			if ( strpos($this->region, ',') !== false ){
				$regions = explode(',', $this->region);
				$criteria->addInCondition('region',$regions);
			}
			else {
				$criteria->compare('region',$this->region);
			}
		}

		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('aadhar_no',$this->aadhar_no,true);
		$criteria->compare('mobile_no',$this->mobile_no,true);
		$criteria->compare('reported_on',$this->reported_on,true);
		$criteria->compare('reported_from',$this->reported_from,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lan',$this->lan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=> $limit ? array('pageSize'=> $limit) : false,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Patients the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tehsil(){
		$region = $this->regiond;
		if ( $region ) {
			if ( $region->type == 'Tehsil' ) {
				return $region->label;
			}
		}
		return null;
	}

	public function district(){
		$region = $this->regiond;
		if ( $region ) {
			if ( $region->type == 'District' ) {
				return $region->label;
			}
			else {
				if ( $region->parent ){
					$district = Region::model()->findByPk($region->parent);
					return $district->label;
				}
			}
		}
		return null;
	}
	public function photo(){
		   if($this->gender=='Male'){
		return Yii::app()->request->baseUrl ."/images/men.png";
		}
	   elseif($this->gender=='Female'){
	   	return Yii::app()->request->baseUrl ."/images/women.png";
	   }		
	}

	public function disease(){
			$data=Patients::model()->findByPk($this->patient_id); 
			  $pad = PatientDisease::model()->findAllByAttributes(array('patient_id'=>$data->patient_id));
                    foreach ($pad as $padie) {
                    	 $die = Disease::model()->findAllByAttributes(array('disease_id'=>$padie->disease_id));
                    	foreach ($die as  $dies) {
                    		$class=$dies->disease;
                    	}
                    }
		        return $class;
		    }
}
