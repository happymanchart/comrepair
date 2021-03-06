<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tooltypes".
 *
 * @property integer $id
 * @property string $name
 */
class Tooltypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tooltypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'name' => 'ประเภทอุปกรณ์',
        ];
    }
}
