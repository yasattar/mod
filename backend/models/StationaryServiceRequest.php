<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stationary_service_request".
 *
 * @property integer $id
 * @property integer $request_id
 * @property integer $ssp_id
 * @property string $request_type
 * @property double $distance
 * @property string $accept
 * @property string $reject
 * @property string $created_at
 */
class StationaryServiceRequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stationary_service_request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['request_id', 'ssp_id', 'request_type', 'distance'], 'required'],
            [['request_id', 'ssp_id'], 'integer'],
            [['request_type', 'accept', 'reject'], 'string'],
            [['distance'], 'number'],
            [['created_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'request_id' => 'Request ID',
            'ssp_id' => 'Ssp ID',
            'request_type' => 'Request Type',
            'distance' => 'Distance',
            'accept' => 'Accept',
            'reject' => 'Reject',
            'created_at' => 'Created At',
        ];
    }
}
