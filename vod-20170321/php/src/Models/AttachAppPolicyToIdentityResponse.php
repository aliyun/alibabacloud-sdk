<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AttachAppPolicyToIdentityResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.nonExistPolicyNames
     *
     * @var array
     */
    public $nonExistPolicyNames;

    /**
     * @description data.failedPolicyNames
     *
     * @var array
     */
    public $failedPolicyNames;
    protected $_name = [
        'requestId'           => 'RequestId',
        'nonExistPolicyNames' => 'NonExistPolicyNames',
        'failedPolicyNames'   => 'FailedPolicyNames',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nonExistPolicyNames', $this->nonExistPolicyNames, true);
        Model::validateRequired('failedPolicyNames', $this->failedPolicyNames, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nonExistPolicyNames) {
            $res['NonExistPolicyNames'] = [];
            if (null !== $this->nonExistPolicyNames) {
                $res['NonExistPolicyNames'] = $this->nonExistPolicyNames;
            }
        }
        if (null !== $this->failedPolicyNames) {
            $res['FailedPolicyNames'] = [];
            if (null !== $this->failedPolicyNames) {
                $res['FailedPolicyNames'] = $this->failedPolicyNames;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachAppPolicyToIdentityResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NonExistPolicyNames'])) {
            if (!empty($map['NonExistPolicyNames'])) {
                $model->nonExistPolicyNames = [];
                $model->nonExistPolicyNames = $map['NonExistPolicyNames'];
            }
        }
        if (isset($map['FailedPolicyNames'])) {
            if (!empty($map['FailedPolicyNames'])) {
                $model->failedPolicyNames = [];
                $model->failedPolicyNames = $map['FailedPolicyNames'];
            }
        }

        return $model;
    }
}
