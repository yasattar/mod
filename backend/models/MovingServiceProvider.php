<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "moving_service_provider".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $owner_name
 * @property string $email
 * @property string $phone
 * @property integer $pin_code
 * @property string $area
 * @property string $address
 * @property integer $no_of_ambulances
 * @property string $status
 * @property string $created_at
 * @property string $lat_long
 * @property string $updated_at
 */
class MovingServiceProvider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'moving_service_provider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'owner_name', 'email', 'phone', 'pin_code', 'area', 'address', 'no_of_ambulances', 'created_at', 'lat_long'], 'required'],
            [['user_id', 'pin_code', 'no_of_ambulances'], 'integer'],
            [['status'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'owner_name', 'area', 'lat_long'], 'string', 'max' => 250],
            [['email'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 15],
            [['address'], 'string', 'max' => 500]
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
            'owner_name' => 'Owner Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'pin_code' => 'Pin Code',
            'area' => 'Area',
            'address' => 'Address',
            'no_of_ambulances' => 'No Of Ambulances',
            'status' => 'Status',
            'created_at' => 'Created At',
            'lat_long' => 'Lat Long',
            'updated_at' => 'Updated At',
        ];
    }
}
