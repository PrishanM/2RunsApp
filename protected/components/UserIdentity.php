<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	 private $_id;
	 
	public function authenticate()
	{
		$user=UserTable::model()->find('LOWER(user_name)=?',array(strtolower($this->username)));
		
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		
		else
		{
			$this->_id=$user->user_id;
			$this->username=$user->user_name;
			Yii::app()->session['user_id'] = $user->user_id;
			Yii::app()->session['role']=$user->role;
			Yii::app()->session['user_name']=$user->user_name;
			//Yii::app()->session['website'] = $user->website;
			//Yii::app()->session['ConfirmPassword'] = $user->confirmpassword;
			$this->errorCode=self::ERROR_NONE;
		}
	
		/*$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			Yii::app()->session['username']=$this->username;
			$this->errorCode=self::ERROR_NONE;
		}*/
		return $this->errorCode==self::ERROR_NONE;
	}
}