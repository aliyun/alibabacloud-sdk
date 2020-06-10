<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponse\data;
use AlibabaCloud\Tea\Model;

class CreateSiteMonitorResponse extends Model
{
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
     * @description success
     *
     * @var string
     */
    public $success;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description alertRule
     *
     * @var string
     */
    public $alertRule;

    /**
     * @description data
     *
     * @var data
     */
    public $data;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'success'   => 'Success',
        'requestId' => 'RequestId',
        'alertRule' => 'AlertRule',
        'data'      => 'Data',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('alertRule', $this->alertRule, true);
        Model::validateRequired('data', $this->data, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->alertRule) {
            $res['AlertRule'] = $this->alertRule;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSiteMonitorResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AlertRule'])) {
            $model->alertRule = $map['AlertRule'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }

        return $model;
    }
}
