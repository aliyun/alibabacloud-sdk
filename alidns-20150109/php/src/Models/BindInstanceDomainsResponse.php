<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class BindInstanceDomainsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.successCount
     *
     * @var int
     */
    public $successCount;

    /**
     * @description module.failedCount
     *
     * @var int
     */
    public $failedCount;
    protected $_name = [
        'requestId'    => 'RequestId',
        'successCount' => 'SuccessCount',
        'failedCount'  => 'FailedCount',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('successCount', $this->successCount, true);
        Model::validateRequired('failedCount', $this->failedCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindInstanceDomainsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        return $model;
    }
}
