<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponse\data\attachAlertResult;

use AlibabaCloud\Tea\Model;

class contact extends Model
{
    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description httpStatusCode
     *
     * @var string
     */
    public $code;

    /**
     * @description success
     *
     * @var string
     */
    public $success;

    /**
     * @description ruleId
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'code'      => 'Code',
        'success'   => 'Success',
        'ruleId'    => 'RuleId',
    ];

    public function validate()
    {
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('ruleId', $this->ruleId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
