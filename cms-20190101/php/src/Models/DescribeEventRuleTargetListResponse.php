<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse\contactParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse\fcParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse\mnsParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse\slsParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse\webhookParameters;
use AlibabaCloud\Tea\Model;

class DescribeEventRuleTargetListResponse extends Model
{
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
     * @description contactParameters
     *
     * @var contactParameters
     */
    public $contactParameters;

    /**
     * @description fcParameters
     *
     * @var fcParameters
     */
    public $fcParameters;

    /**
     * @description mnsParameters
     *
     * @var mnsParameters
     */
    public $mnsParameters;

    /**
     * @description webhookParameters
     *
     * @var webhookParameters
     */
    public $webhookParameters;

    /**
     * @description slsParameters
     *
     * @var slsParameters
     */
    public $slsParameters;
    protected $_name = [
        'code'              => 'Code',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'contactParameters' => 'ContactParameters',
        'fcParameters'      => 'FcParameters',
        'mnsParameters'     => 'MnsParameters',
        'webhookParameters' => 'WebhookParameters',
        'slsParameters'     => 'SlsParameters',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('contactParameters', $this->contactParameters, true);
        Model::validateRequired('fcParameters', $this->fcParameters, true);
        Model::validateRequired('mnsParameters', $this->mnsParameters, true);
        Model::validateRequired('webhookParameters', $this->webhookParameters, true);
        Model::validateRequired('slsParameters', $this->slsParameters, true);
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->contactParameters) {
            $res['ContactParameters'] = null !== $this->contactParameters ? $this->contactParameters->toMap() : null;
        }
        if (null !== $this->fcParameters) {
            $res['FcParameters'] = null !== $this->fcParameters ? $this->fcParameters->toMap() : null;
        }
        if (null !== $this->mnsParameters) {
            $res['MnsParameters'] = null !== $this->mnsParameters ? $this->mnsParameters->toMap() : null;
        }
        if (null !== $this->webhookParameters) {
            $res['WebhookParameters'] = null !== $this->webhookParameters ? $this->webhookParameters->toMap() : null;
        }
        if (null !== $this->slsParameters) {
            $res['SlsParameters'] = null !== $this->slsParameters ? $this->slsParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventRuleTargetListResponse
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ContactParameters'])) {
            $model->contactParameters = contactParameters::fromMap($map['ContactParameters']);
        }
        if (isset($map['FcParameters'])) {
            $model->fcParameters = fcParameters::fromMap($map['FcParameters']);
        }
        if (isset($map['MnsParameters'])) {
            $model->mnsParameters = mnsParameters::fromMap($map['MnsParameters']);
        }
        if (isset($map['WebhookParameters'])) {
            $model->webhookParameters = webhookParameters::fromMap($map['WebhookParameters']);
        }
        if (isset($map['SlsParameters'])) {
            $model->slsParameters = slsParameters::fromMap($map['SlsParameters']);
        }

        return $model;
    }
}
