<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi;

use AlibabaCloud\Tea\Model;

class QuerySmsSignResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;
    /**
     * @description code
     *
     * @var string
     */
    public $code;
    /**
     * @description message
     *
     * @var string
     */
    public $message;
    /**
     * @description module.signStatus
     *
     * @var int
     */
    public $signStatus;
    /**
     * @description module.reason
     *
     * @var string
     */
    public $reason;
    /**
     * @description module.signName
     *
     * @var string
     */
    public $signName;
    /**
     * @description module.createDate
     *
     * @var string
     */
    public $createDate;
    protected $_name = [
        'requestId'  => 'RequestId',
        'code'       => 'Code',
        'message'    => 'Message',
        'signStatus' => 'SignStatus',
        'reason'     => 'Reason',
        'signName'   => 'SignName',
        'createDate' => 'CreateDate',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('signStatus', $this->signStatus, true);
        Model::validateRequired('reason', $this->reason, true);
        Model::validateRequired('signName', $this->signName, true);
        Model::validateRequired('createDate', $this->createDate, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['RequestId']  = $this->requestId;
        $res['Code']       = $this->code;
        $res['Message']    = $this->message;
        $res['SignStatus'] = $this->signStatus;
        $res['Reason']     = $this->reason;
        $res['SignName']   = $this->signName;
        $res['CreateDate'] = $this->createDate;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySmsSignResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['SignStatus'])) {
            $model->signStatus = $map['SignStatus'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        return $model;
    }
}
