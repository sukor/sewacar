<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "position".
 *
 * @property integer $positio_id
 * @property string $position_name
 * @property string $position_code
 *
 * @property Staff[] $staff
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position_name'], 'required'],
            [['position_name'], 'string', 'max' => 50],
            [['position_code'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'positio_id' => 'Positio ID',
            'position_name' => 'Position Name',
            'position_code' => 'Position Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasMany(Staff::className(), ['position_id' => 'positio_id']);
    }
}
