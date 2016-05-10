<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "repairs".
 *
 * @property integer $id
 * @property integer $department_id
 * @property integer $tool_id
 * @property string $problem
 * @property string $stage
 * @property string $startdate
 * @property string $satatus
 * @property string $remark
 * @property string $answer
 * @property integer $engineer_id
 * @property string $enddate
 * @property integer $user_id
 * @property string $createDate
 * @property string $updateDate
 */
class Repairs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'repairs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['department_id', 'problem', 'user_id'], 'required'],
            [['department_id', 'tool_id', 'engineer_id', 'user_id'], 'integer'],
            [['problem', 'stage', 'satatus', 'remark', 'answer'], 'string'],
            [['startdate', 'enddate', 'createDate', 'updateDate'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department_id' => 'ฝ่าย/งาน',
            'tool_id' => 'อุปกรณ์',
            'problem' => 'ปัญหาที่ซ่อม',
            'stage' => 'ระยะรอคอย',
            'startdate' => 'วันที่รับซ่อม',
            'satatus' => 'สถานะการแจ้ง',
            'remark' => 'ช่างอธิบาย',
            'answer' => 'ช่างสรุปงาน',
            'engineer_id' => 'ช่าง',
            'enddate' => 'วันซ่อมเสร็จ',
            'user_id' => 'ผู้บันทึก',
            'createDate' => 'วันส่งซ่อม',
            'updateDate' => 'Update Date',
        ];
    }
}
