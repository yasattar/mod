<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medical_request".
 *
 * @property integer $id
 * @property integer $requester_id
 * @property integer $attendent_id
 * @property string $latitude
 * @property string $longitude
 * @property string $created_at
 */
class MedicalRequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'medical_request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['requester_id', 'attendent_id', 'latitude', 'longitude'], 'required'],
            [['requester_id', 'attendent_id'], 'integer'],
            [['created_at'], 'safe'],
            [['latitude', 'longitude'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'requester_id' => 'Requester ID',
            'attendent_id' => 'Attendent ID',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'created_at' => 'Created At',
        ];
    }
}
