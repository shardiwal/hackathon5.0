<?php

/**
 * This is the model class for table "disease".
 *
 * The followings are the available columns in table 'disease':
 * @property integer $disease_id
 * @property string $disease
 * @property string $description
 * @property string $type
 * @property string $symptoms
 * @property string $factors
 * @property string $season_month
 */
class Disease extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'disease';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('disease', 'required'),
			array('disease, type, season_month', 'length', 'max'=>255),
			array('description, symptoms, factors', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('disease_id, disease, description, type, symptoms, factors, season_month', 'safe', 'on'=>'search'),
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
			'relateddisease' => array(self::BELONGS_TO, 'DiseaseCorrelation', 'disease_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'disease_id' => 'Disease',
			'disease' => 'Disease',
			'description' => 'Description',
			'type' => 'Type',
			'symptoms' => 'Symptoms',
			'factors' => 'Factors',
			'season_month' => 'Season Month',
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

		$criteria->compare('disease_id',$this->disease_id);
		$criteria->compare('disease',$this->disease,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('symptoms',$this->symptoms,true);
		$criteria->compare('factors',$this->factors,true);
		$criteria->compare('season_month',$this->season_month,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Disease the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
