<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $fname
 * @property string $lname
 * @property string $email
 * @property integer $phonenumber
 * @property string $userid
 * @property integer $password
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fname', 'lname', 'email', 'phonenumber', 'userid', 'password'], 'required'],
            [['phonenumber', 'password'], 'integer'],
            [['fname', 'lname'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 200],
            [['userid'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'email' => 'Email',
            'phonenumber' => 'Phonenumber',
            'userid' => 'Userid',
            'password' => 'Password',
        ];
    }
}
