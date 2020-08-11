<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\RebootInstancesResponse\instanceResponses;
use AlibabaCloud\Tea\Model;

class RebootInstancesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceResponses
     */
    public $instanceResponses;
    protected $_name = [
        'requestId'         => 'RequestId',
        'instanceResponses' => 'InstanceResponses',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('instanceResponses', $this->instanceResponses, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceResponses) {
            $res['InstanceResponses'] = null !== $this->instanceResponses ? $this->instanceResponses->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RebootInstancesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceResponses'])) {
            $model->instanceResponses = instanceResponses::fromMap($map['InstanceResponses']);
        }

        return $model;
    }
}
