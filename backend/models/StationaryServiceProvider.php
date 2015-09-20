<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stationary_service_provider".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $pin_code
 * @property string $status
 * @property string $address
 * @property string $speciality
 * @property string $authority
 * @property integer $no_of_ambulances
 * @property string $created_at
 * @property string $lat_long
 * @property string $updated_at
 */
class StationaryServiceProvider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stationary_service_provider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'email', 'phone', 'pin_code', 'address', 'speciality', 'authority', 'no_of_ambulances', 'created_at', 'lat_long'], 'required'],
            [['user_id', 'no_of_ambulances'], 'integer'],
            [['status', 'address'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'speciality', 'authority', 'lat_long'], 'string', 'max' => 250],
            [['email'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 15],
            [['pin_code'], 'string', 'max' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'pin_code' => 'Pin Code',
            'status' => 'Status',
            'address' => 'Address',
            'speciality' => 'Speciality',
            'authority' => 'Authority',
            'no_of_ambulances' => 'No Of Ambulances',
            'created_at' => 'Created At',
            'lat_long' => 'Lat Long',
            'updated_at' => 'Updated At',
        ];
    }
}
