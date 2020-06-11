<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeRelatedResourcesReuseResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description reuseInfo
     *
     * @var array
     */
    public $reuseInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'reuseInfo' => 'ReuseInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('reuseInfo', $this->reuseInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reuseInfo) {
            $res['ReuseInfo'] = [];
            if (null !== $this->reuseInfo) {
                $res['ReuseInfo'] = $this->reuseInfo;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRelatedResourcesReuseResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReuseInfo'])) {
            if (!empty($map['ReuseInfo'])) {
                $model->reuseInfo = [];
                $model->reuseInfo = $map['ReuseInfo'];
            }
        }

        return $model;
    }
}
