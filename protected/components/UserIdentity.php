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
	
	//Yii::app()->user->getState('username')
	private $id;

	public function authenticate()
	{
		$username = $this->username;
		$password = $this->password;
		
		$record = User::model()->findByAttributes(
			array('user_name'=>$username)
		);

        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(!isset($record->user_name))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($record->password!==$password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else {
			// Login successfull, let's update last login timestamp

			$this->id=$record->user_id;
			$this->setState('roles', $record->role);
            Yii::app()->user->setState('user', $record);
            Yii::app()->user->setState('username', $record->user_name);

			$record->update_date = date('Y-m-d H:i:s');
			$record->update();

			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

    public function getId(){
        return $this->id;
    }
}
