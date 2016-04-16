<?php

/**
 * This is the model class for table "user_table".
 *
 * The followings are the available columns in table 'user_table':
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $user_name
 * @property string $password
 * @property string $role
 * @property string $create_time
 * @property string $update_time
 * @property string $email
 */
class UserTable extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_table';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, user_name, password,email', 'required'),
			array('first_name, last_name, user_name,role', 'length', 'max'=>45),
			array('email', 'length', 'max'=>200),
			array('email',  'match', 'pattern'=>'/^\S+@\S+\.\S+$/','message'=>'Invalid Email.'),
			array('user_name',  'match', 'pattern'=>'/^\S*$/','message'=>'Username cannot have spaces.'),
			array('email', 'unique', 'className' => 'UserTable', 'message' =>'Email already exists.'),
			array('user_name', 'unique', 'className' => 'UserTable', 'message' =>'User Name already exists.'),
			array('create_time', 'default','value' => new CDbExpression('NOW()'),'setOnEmpty' => false,'on' => 'createUser'),
			array('update_time', 'default','value' => new CDbExpression('NOW()'),'setOnEmpty' => false,'on' => 'updateUser'),
			array('password', 'length', 'max'=>200),
			array('password', 'length', 'min' => 8,'message'=>'Password should contain at least 8 characters.'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, first_name, last_name, user_name, password, role', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'user_name' => 'User Name',
			'password' => 'Password',
			'email' => 'Email',
			'role' => 'Role',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('role',$this->role,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function validatePassword($password)
	{
		return $password===$this->password;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserTable the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
