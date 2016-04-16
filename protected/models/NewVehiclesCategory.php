<?php

/**
 * This is the model class for table "vehicle_category".
 *
 * The followings are the available columns in table 'vehicle_category':
 * @property integer $id_category
 * @property integer $Mode_id
 * @property string $Category
 * @property string $first_10KM_price
 * @property string $additional_KM
 * @property string $waiting_charges_half_hour
 *
 * The followings are the available model relations:
 * @property TransportMode $mode
 */
class NewVehiclesCategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vehicle_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Mode_id, Category, first_10KM_price, additional_KM', 'required'),
			array('Mode_id', 'numerical', 'integerOnly'=>true),
			array('Category', 'length', 'max'=>50),
			array('first_10KM_price, additional_KM, waiting_charges_half_hour', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_category, Mode_id, Category, first_10KM_price, additional_KM, waiting_charges_half_hour', 'safe', 'on'=>'search'),
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
			'mode' => array(self::BELONGS_TO, 'TransportMode', 'Mode_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_category' => 'Id Category',
			'Mode_id' => 'Mode',
			'Category' => 'Category',
			'first_10KM_price' => 'First 10 Km Price',
			'additional_KM' => 'Additional Km',
			'waiting_charges_half_hour' => 'Waiting Charges Half Hour',
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

		$criteria->compare('id_category',$this->id_category);
		$criteria->compare('Mode_id',$this->Mode_id);
		$criteria->compare('Category',$this->Category,true);
		$criteria->compare('first_10KM_price',$this->first_10KM_price,true);
		$criteria->compare('additional_KM',$this->additional_KM,true);
		$criteria->compare('waiting_charges_half_hour',$this->waiting_charges_half_hour,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NewVehiclesCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
