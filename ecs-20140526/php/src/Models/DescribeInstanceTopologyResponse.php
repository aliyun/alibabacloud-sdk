<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyResponse\topologys;
use AlibabaCloud\Tea\Model;

class DescribeInstanceTopologyResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var topologys
     */
    public $topologys;
    protected $_name = [
        'requestId' => 'RequestId',
        'topologys' => 'Topologys',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('topologys', $this->topologys, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->topologys) {
            $res['Topologys'] = null !== $this->topologys ? $this->topologys->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceTopologyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Topologys'])) {
            $model->topologys = topologys::fromMap($map['Topologys']);
        }

        return $model;
    }
}
