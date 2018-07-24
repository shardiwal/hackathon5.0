<?php

/**
 * This is the model class for table "patients".
 *
 * The followings are the available columns in table 'patients':
 * @property integer $patient_id
 * @property string $name
 * @property string $gender
 * @property integer $age
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $lat
 * @property string $lan
 * @property string $reported_on
 * @property string $reported_from
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
			array('reported_on', 'required'),
			array('age', 'numerical', 'integerOnly'=>true),
			array('name, gender, address, city, state, lat, lan, reported_from', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('patient_id, name, gender, age, address, city, state, lat, lan, reported_on, reported_from', 'safe', 'on'=>'search'),
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
			'patientDisease' => array(self::BELONGS_TO, 'PatientDisease', 'patient_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'patient_id' => 'ID',
			'name' => 'Name',
			'gender' => 'Gender',
			'age' => 'Age',
			'address' => 'Address',
			'city' => 'City',
			'state' => 'State',
			'lat' => 'Lat',
			'lan' => 'Lan',
			'reported_on' => 'Reported On',
			'reported_from' => 'Reported From',
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

		$criteria->compare('patient_id',$this->patient_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lan',$this->lan,true);
		$criteria->compare('reported_on',$this->reported_on,true);
		$criteria->compare('reported_from',$this->reported_from,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
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
}
