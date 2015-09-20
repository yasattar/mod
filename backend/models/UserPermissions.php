<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_permissions".
 *
 * @property integer $id
 * @property integer $package_id
 * @property integer $user_id
 * @property string $permission_field
 * @property string $permission_value
 * @property string $updated_date
 * @property string $created_date
 */
class UserPermissions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_permissions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['package_id', 'user_id', 'created_date'], 'required'],
            [['package_id', 'user_id'], 'integer'],
            [['permission_value'], 'string'],
            [['updated_date', 'created_date'], 'safe'],
            [['permission_field'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'package_id' => 'Package ID',
            'user_id' => 'User ID',
            'permission_field' => 'Permission Field',
            'permission_value' => 'Permission Value',
            'updated_date' => 'Updated Date',
            'created_date' => 'Created Date',
        ];
    }
}
