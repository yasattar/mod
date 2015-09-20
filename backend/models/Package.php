<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "package".
 *
 * @property integer $id
 * @property string $package_name
 * @property string $controller
 * @property string $default_permission_set
 * @property string $created_date
 */
class Package extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'package';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_date'], 'safe'],
            [['package_name'], 'string', 'max' => 60],
            [['controller'], 'string', 'max' => 100],
            [['default_permission_set'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'package_name' => 'Package Name',
            'controller' => 'Controller',
            'default_permission_set' => 'Default Permission Set',
            'created_date' => 'Created Date',
        ];
    }
}
