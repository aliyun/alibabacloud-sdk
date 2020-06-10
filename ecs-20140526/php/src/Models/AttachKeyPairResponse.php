<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AttachKeyPairResponse\results;
use AlibabaCloud\Tea\Model;

class AttachKeyPairResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.totalCount
     *
     * @var string
     */
    public $totalCount;

    /**
     * @description data.failCount
     *
     * @var string
     */
    public $failCount;

    /**
     * @description data.keyPairId
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description data.results
     *
     * @var results
     */
    public $results;
    protected $_name = [
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
        'failCount'   => 'FailCount',
        'keyPairName' => 'KeyPairName',
        'results'     => 'Results',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('failCount', $this->failCount, true);
        Model::validateRequired('keyPairName', $this->keyPairName, true);
        Model::validateRequired('results', $this->results, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachKeyPairResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }

        return $model;
    }
}
