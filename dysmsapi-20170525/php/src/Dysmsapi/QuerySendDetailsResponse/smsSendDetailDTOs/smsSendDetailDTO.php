<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi\QuerySendDetailsResponse\smsSendDetailDTOs;

use AlibabaCloud\Tea\Model;

class smsSendDetailDTO extends Model
{
    /**
     * @description phoneNum
     *
     * @var string
     */
    public $phoneNum;

    /**
     * @description sendStatus
     *
     * @var int
     */
    public $sendStatus;

    /**
     * @description errCode
     *
     * @var string
     */
    public $errCode;

    /**
     * @description templateCode
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description content
     *
     * @var string
     */
    public $content;

    /**
     * @description sendDate
     *
     * @var string
     */
    public $sendDate;

    /**
     * @description receiveDate
     *
     * @var string
     */
    public $receiveDate;

    /**
     * @description outId
     *
     * @var string
     */
    public $outId;
    protected $_name = [
        'phoneNum'     => 'PhoneNum',
        'sendStatus'   => 'SendStatus',
        'errCode'      => 'ErrCode',
        'templateCode' => 'TemplateCode',
        'content'      => 'Content',
        'sendDate'     => 'SendDate',
        'receiveDate'  => 'ReceiveDate',
        'outId'        => 'OutId',
    ];

    public function validate()
    {
        Model::validateRequired('phoneNum', $this->phoneNum, true);
        Model::validateRequired('sendStatus', $this->sendStatus, true);
        Model::validateRequired('errCode', $this->errCode, true);
        Model::validateRequired('templateCode', $this->templateCode, true);
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('sendDate', $this->sendDate, true);
        Model::validateRequired('receiveDate', $this->receiveDate, true);
        Model::validateRequired('outId', $this->outId, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['PhoneNum']     = $this->phoneNum;
        $res['SendStatus']   = $this->sendStatus;
        $res['ErrCode']      = $this->errCode;
        $res['TemplateCode'] = $this->templateCode;
        $res['Content']      = $this->content;
        $res['SendDate']     = $this->sendDate;
        $res['ReceiveDate']  = $this->receiveDate;
        $res['OutId']        = $this->outId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smsSendDetailDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }
        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['SendDate'])) {
            $model->sendDate = $map['SendDate'];
        }
        if (isset($map['ReceiveDate'])) {
            $model->receiveDate = $map['ReceiveDate'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        return $model;
    }
}
