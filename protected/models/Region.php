<?php

/**
 * This is the model class for table "region".
 *
 * The followings are the available columns in table 'region':
 * @property integer $region_id
 * @property string $label
 * @property integer $parent
 * @property string $type
 * @property string $lat
 * @property string $lan
 */
class Region extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'region';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('label, type', 'required'),
			array('parent', 'numerical', 'integerOnly'=>true),
			array('label, type, lat, lan', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('region_id, label, parent, type, lat, lan', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'region_id' => 'Region',
			'label' => 'Label',
			'parent' => 'Parent',
			'type' => 'Type',
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

		$criteria->compare('region_id',$this->region_id);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('parent',$this->parent);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lan',$this->lan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Region the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function division_all_tehsils(){
		$criteria=new CDbCriteria;
		$criteria->compare('type','District');
		$criteria->compare('parent',$this->region_id);
		$dp = new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => false,
            'sort'=>array(
                'defaultOrder'=> 'label ASC',
            ),
		));

		$all_tehsils = array();
		foreach ($dp->getData() as $b) {
			array_push( $all_tehsils, $b->region_id );
			$all_tehsils = array_merge( $all_tehsils, $this->all_tehsils($b->region_id) );
		}
		return $all_tehsils;
	}

	public function all_tehsils($id=false){
		$criteria=new CDbCriteria;
		$criteria->compare('type','Tehsil');
		if ( $id ) {
			$criteria->compare('parent',$id);
		}
		else {
			$criteria->compare('parent',$this->region_id);
		}
		$dp = new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => false,
            'sort'=>array(
                'defaultOrder'=> 'label ASC',
            ),
		));

		$all_tehsils = array();
		foreach ($dp->getData() as $b) {
			array_push($all_tehsils, $b->region_id);
		}
		return $all_tehsils;
	}

}
