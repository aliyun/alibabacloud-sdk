<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class MoveAppResourceResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.nonExistIds
     *
     * @var array
     */
    public $nonExistResourceIds;

    /**
     * @description data.failedIds
     *
     * @var array
     */
    public $failedResourceIds;
    protected $_name = [
        'requestId'           => 'RequestId',
        'nonExistResourceIds' => 'NonExistResourceIds',
        'failedResourceIds'   => 'FailedResourceIds',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nonExistResourceIds', $this->nonExistResourceIds, true);
        Model::validateRequired('failedResourceIds', $this->failedResourceIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nonExistResourceIds) {
            $res['NonExistResourceIds'] = [];
            if (null !== $this->nonExistResourceIds) {
                $res['NonExistResourceIds'] = $this->nonExistResourceIds;
            }
        }
        if (null !== $this->failedResourceIds) {
            $res['FailedResourceIds'] = [];
            if (null !== $this->failedResourceIds) {
                $res['FailedResourceIds'] = $this->failedResourceIds;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveAppResourceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NonExistResourceIds'])) {
            if (!empty($map['NonExistResourceIds'])) {
                $model->nonExistResourceIds = [];
                $model->nonExistResourceIds = $map['NonExistResourceIds'];
            }
        }
        if (isset($map['FailedResourceIds'])) {
            if (!empty($map['FailedResourceIds'])) {
                $model->failedResourceIds = [];
                $model->failedResourceIds = $map['FailedResourceIds'];
            }
        }

        return $model;
    }
}
