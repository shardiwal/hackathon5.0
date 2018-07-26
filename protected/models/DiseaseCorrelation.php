<?php

/**
 * This is the model class for table "disease_correlation".
 *
 * The followings are the available columns in table 'disease_correlation':
 * @property integer $dco_id
 * @property integer $disease_id
 * @property integer $co_disease_id
 * @property double $symptoms_score
 * @property double $area_score
 * @property double $career_score
 * @property double $factor_score
 * @property double $session_score
 * @property string $reference
 * @property string $suggestion
 */
class DiseaseCorrelation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'disease_correlation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('disease_id, co_disease_id', 'required'),
			array('disease_id, co_disease_id', 'numerical', 'integerOnly'=>true),
			array('symptoms_score, area_score, career_score, factor_score, session_score', 'numerical'),
			array('reference, suggestion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('dco_id, disease_id, co_disease_id, symptoms_score, area_score, career_score, factor_score, session_score, reference, suggestion', 'safe', 'on'=>'search'),
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
			'codisease' => array(self::BELONGS_TO, 'Disease', 'co_disease_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'dco_id' => 'Dco',
			'disease_id' => 'Disease',
			'co_disease_id' => 'Co Disease',
			'symptoms_score' => 'Symptoms Score',
			'area_score' => 'Area Score',
			'career_score' => 'Career Score',
			'factor_score' => 'Factor Score',
			'session_score' => 'Session Score',
			'reference' => 'Reference',
			'suggestion' => 'Suggestion',
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

		$criteria->compare('dco_id',$this->dco_id);
		$criteria->compare('disease_id',$this->disease_id);
		$criteria->compare('co_disease_id',$this->co_disease_id);
		$criteria->compare('symptoms_score',$this->symptoms_score);
		$criteria->compare('area_score',$this->area_score);
		$criteria->compare('career_score',$this->career_score);
		$criteria->compare('factor_score',$this->factor_score);
		$criteria->compare('session_score',$this->session_score);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('suggestion',$this->suggestion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DiseaseCorrelation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
