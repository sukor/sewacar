<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request_type".
 *
 * @property integer $type_id
 * @property string $request_name
 * @property string $req_type
 * @property string $date_in
 *
 * @property RequestDic[] $requestDics
 */
class RequestType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'request_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['request_name', 'req_type', 'date_in'], 'required'],
            [['request_name', 'date_in'], 'string', 'max' => 30],
            [['req_type'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_id' => 'Type ID',
            'request_name' => 'Request Name',
            'req_type' => 'Req Type',
            'date_in' => 'Date In',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequestDics()
    {
        return $this->hasMany(RequestDic::className(), ['req_type_id' => 'type_id']);
    }
}
