<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "social_request".
 *
 * @property integer $id
 * @property integer $requester_id
 * @property integer $attendent_id
 * @property string $latitude
 * @property string $longitude
 * @property string $title
 * @property string $short_description
 * @property string $description
 * @property string $image
 * @property string $created_at
 */
class SocialRequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'social_request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['requester_id', 'attendent_id', 'latitude', 'longitude', 'title', 'short_description', 'description', 'image'], 'required'],
            [['requester_id', 'attendent_id'], 'integer'],
            [['short_description', 'description'], 'string'],
            [['created_at'], 'safe'],
            [['latitude', 'longitude'], 'string', 'max' => 60],
            [['title'], 'string', 'max' => 200],
            [['image'], 'string', 'max' => 250]
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
            'title' => 'Title',
            'short_description' => 'Short Description',
            'description' => 'Description',
            'image' => 'Image',
            'created_at' => 'Created At',
        ];
    }
}
