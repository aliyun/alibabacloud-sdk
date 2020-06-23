<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetConsistencySnapshotResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data
     *
     * @var string
     */
    public $consistencyResultJsonStr;
    protected $_name = [
        'requestId'                => 'RequestId',
        'consistencyResultJsonStr' => 'ConsistencyResultJsonStr',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('consistencyResultJsonStr', $this->consistencyResultJsonStr, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->consistencyResultJsonStr) {
            $res['ConsistencyResultJsonStr'] = $this->consistencyResultJsonStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConsistencySnapshotResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConsistencyResultJsonStr'])) {
            $model->consistencyResultJsonStr = $map['ConsistencyResultJsonStr'];
        }

        return $model;
    }
}
