<?php

/**
 * This is the model class for table "patient_disease".
 *
 * The followings are the available columns in table 'patient_disease':
 * @property integer $pd_id
 * @property integer $patient_id
 * @property integer $disease_id
 * @property string $added_on
 * @property string $treated_on
 * @property integer $cured
 */
class PatientDisease extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'patient_disease';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('patient_id, disease_id, added_on', 'required'),
			array('patient_id, disease_id, cured', 'numerical', 'integerOnly'=>true),
			array('treated_on', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pd_id, patient_id, disease_id, added_on, treated_on, cured', 'safe', 'on'=>'search'),
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
			'patient' => array(self::BELONGS_TO, 'Patients', 'patient_id'),
			'disease' => array(self::BELONGS_TO, 'Disease', 'disease_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pd_id' => 'Pd',
			'patient_id' => 'Patient',
			'disease_id' => 'Disease',
			'added_on' => 'Added On',
			'treated_on' => 'Treated On',
			'cured' => 'Cured',
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

		$criteria->compare('pd_id',$this->pd_id);
		$criteria->compare('patient_id',$this->patient_id);
		$criteria->compare('disease_id',$this->disease_id);
		$criteria->compare('added_on',$this->added_on,true);
		$criteria->compare('treated_on',$this->treated_on,true);
		$criteria->compare('cured',$this->cured);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PatientDisease the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
