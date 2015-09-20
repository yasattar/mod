<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_user".
 *
 * @property integer $id
 * @property string $name
 * @property integer $age
 * @property string $blood_group
 * @property string $alegrie
 * @property string $created_at
 * @property string $updated_at
 */
class AppUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'app_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['age', 'created_at', 'updated_at'], 'required'],
            [['age'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 60],
            [['blood_group'], 'string', 'max' => 10],
            [['alegrie'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
            'blood_group' => 'Blood Group',
            'alegrie' => 'Alegrie',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
