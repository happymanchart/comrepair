<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "engineers".
 *
 * @property integer $id
 * @property string $name
 * @property string $position
 * @property string $speciallist
 */
class Engineers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'engineers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'position', 'speciallist'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่อ-สกุล',
            'position' => 'ตำแหน่ง',
            'speciallist' => 'สาขา',
        ];
    }
}
