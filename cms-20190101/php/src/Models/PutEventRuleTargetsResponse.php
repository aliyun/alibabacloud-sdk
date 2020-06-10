<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponse\failedContactParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponse\failedFcParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponse\failedMnsParameters;
use AlibabaCloud\Tea\Model;

class PutEventRuleTargetsResponse extends Model
{
    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description msg
     *
     * @var string
     */
    public $message;

    /**
     * @description traceId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description failedParameterCount
     *
     * @var string
     */
    public $failedParameterCount;

    /**
     * @description failedContactParameters
     *
     * @var failedContactParameters
     */
    public $failedContactParameters;

    /**
     * @description failedMnsParameters
     *
     * @var failedMnsParameters
     */
    public $failedMnsParameters;

    /**
     * @description failedFcParameters
     *
     * @var failedFcParameters
     */
    public $failedFcParameters;
    protected $_name = [
        'success'                 => 'Success',
        'code'                    => 'Code',
        'message'                 => 'Message',
        'requestId'               => 'RequestId',
        'failedParameterCount'    => 'FailedParameterCount',
        'failedContactParameters' => 'FailedContactParameters',
        'failedMnsParameters'     => 'FailedMnsParameters',
        'failedFcParameters'      => 'FailedFcParameters',
    ];

    public function validate()
    {
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('failedParameterCount', $this->failedParameterCount, true);
        Model::validateRequired('failedContactParameters', $this->failedContactParameters, true);
        Model::validateRequired('failedMnsParameters', $this->failedMnsParameters, true);
        Model::validateRequired('failedFcParameters', $this->failedFcParameters, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->failedParameterCount) {
            $res['FailedParameterCount'] = $this->failedParameterCount;
        }
        if (null !== $this->failedContactParameters) {
            $res['FailedContactParameters'] = null !== $this->failedContactParameters ? $this->failedContactParameters->toMap() : null;
        }
        if (null !== $this->failedMnsParameters) {
            $res['FailedMnsParameters'] = null !== $this->failedMnsParameters ? $this->failedMnsParameters->toMap() : null;
        }
        if (null !== $this->failedFcParameters) {
            $res['FailedFcParameters'] = null !== $this->failedFcParameters ? $this->failedFcParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutEventRuleTargetsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FailedParameterCount'])) {
            $model->failedParameterCount = $map['FailedParameterCount'];
        }
        if (isset($map['FailedContactParameters'])) {
            $model->failedContactParameters = failedContactParameters::fromMap($map['FailedContactParameters']);
        }
        if (isset($map['FailedMnsParameters'])) {
            $model->failedMnsParameters = failedMnsParameters::fromMap($map['FailedMnsParameters']);
        }
        if (isset($map['FailedFcParameters'])) {
            $model->failedFcParameters = failedFcParameters::fromMap($map['FailedFcParameters']);
        }

        return $model;
    }
}
