<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property integer $staff_id
 * @property integer $position_id
 * @property integer $department_id
 * @property string $name
 *
 * @property RequestDic[] $requestDics
 * @property RequestDic[] $requestDics0
 * @property Department $department
 * @property Position $position
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position_id', 'department_id', 'name'], 'required'],
            [['position_id', 'department_id'], 'integer'],
            [['name'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'staff_id' => 'Staff ID',
            'position_id' => 'Position ID',
            'department_id' => 'Department ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequestDics()
    {
        return $this->hasMany(RequestDic::className(), ['assg_to' => 'staff_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequestDics0()
    {
        return $this->hasMany(RequestDic::className(), ['req_by' => 'staff_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['department_id' => 'department_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['positio_id' => 'position_id']);
    }
}
