<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class StartMicroOutboundResponse extends Model
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
     * @description data.customerInfo
     *
     * @var string
     */
    public $customerInfo;

    /**
     * @description data.invokeCmdId
     *
     * @var string
     */
    public $invokeCmdId;

    /**
     * @description data.invokeCreateTime
     *
     * @var string
     */
    public $invokeCreateTime;
    protected $_name = [
        'requestId'        => 'RequestId',
        'code'             => 'Code',
        'message'          => 'Message',
        'customerInfo'     => 'CustomerInfo',
        'invokeCmdId'      => 'InvokeCmdId',
        'invokeCreateTime' => 'InvokeCreateTime',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('customerInfo', $this->customerInfo, true);
        Model::validateRequired('invokeCmdId', $this->invokeCmdId, true);
        Model::validateRequired('invokeCreateTime', $this->invokeCreateTime, true);
    }

    public function toMap()
    {
        $res                     = [];
        $res['RequestId']        = $this->requestId;
        $res['Code']             = $this->code;
        $res['Message']          = $this->message;
        $res['CustomerInfo']     = $this->customerInfo;
        $res['InvokeCmdId']      = $this->invokeCmdId;
        $res['InvokeCreateTime'] = $this->invokeCreateTime;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartMicroOutboundResponse
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
        if (isset($map['CustomerInfo'])) {
            $model->customerInfo = $map['CustomerInfo'];
        }
        if (isset($map['InvokeCmdId'])) {
            $model->invokeCmdId = $map['InvokeCmdId'];
        }
        if (isset($map['InvokeCreateTime'])) {
            $model->invokeCreateTime = $map['InvokeCreateTime'];
        }

        return $model;
    }
}
