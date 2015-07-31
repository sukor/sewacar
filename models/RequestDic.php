<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request_dic".
 *
 * @property integer $req_id
 * @property integer $request_status
 * @property string $date_log
 * @property string $date_done
 * @property integer $req_type_id
 * @property string $detail_request
 * @property integer $assg_to
 * @property integer $req_by
 * @property string $date_due
 * @property integer $quantity
 * @property string $special_request
 * @property string $other
 *
 * @property RequestType $reqType
 * @property Staff $assgTo
 * @property Staff $reqBy
 */
class RequestDic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'request_dic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['request_status', 'req_type_id', 'assg_to', 'req_by', 'quantity'], 'integer'],
            [['req_type_id', 'detail_request', 'assg_to', 'req_by'], 'required'],
            [['detail_request', 'special_request'], 'string'],
            [['date_log', 'date_done'], 'string', 'max' => 20],
            [['date_due'], 'string', 'max' => 10],
            [['other'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'req_id' => 'Req ID',
            'request_status' => 'Request Status',
            'date_log' => 'Date Log',
            'date_done' => 'Date Done',
            'req_type_id' => 'Req Type ID',
            'detail_request' => 'Detail Request',
            'assg_to' => 'Kepada',
            'req_by' => 'Req By',
            'date_due' => 'Date Due',
            'quantity' => 'Quantity',
            'special_request' => 'Special Request',
            'other' => 'Other',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReqType()
    {
        return $this->hasOne(RequestType::className(), ['type_id' => 'req_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssgTo()
    {
        return $this->hasOne(Staff::className(), ['staff_id' => 'assg_to']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReqBy()
    {
        return $this->hasOne(Staff::className(), ['staff_id' => 'req_by']);
    }
}
