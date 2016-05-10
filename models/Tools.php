<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tools".
 *
 * @property integer $id
 * @property string $name
 * @property integer $tooltype_id
 */
class Tools extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tools';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tooltype_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'อุปกรณ์',
            'tooltype_id' => 'ประเภทอุปกรณ์',
        ];
    }
}
