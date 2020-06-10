<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RefreshVodObjectCachesResponse extends Model
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
    public $refreshTaskId;
    protected $_name = [
        'requestId'     => 'RequestId',
        'refreshTaskId' => 'RefreshTaskId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('refreshTaskId', $this->refreshTaskId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->refreshTaskId) {
            $res['RefreshTaskId'] = $this->refreshTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshVodObjectCachesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RefreshTaskId'])) {
            $model->refreshTaskId = $map['RefreshTaskId'];
        }

        return $model;
    }
}
