<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNatGatewaysResponse\natGateways\natGateway;

use AlibabaCloud\Tea\Model;

class forwardTableIds extends Model
{
    /**
     * @description ForwardTableId
     *
     * @var array
     */
    public $forwardTableId;
    protected $_name = [
        'forwardTableId' => 'ForwardTableId',
    ];

    public function validate()
    {
        Model::validateRequired('forwardTableId', $this->forwardTableId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardTableId) {
            $res['ForwardTableId'] = [];
            if (null !== $this->forwardTableId) {
                $res['ForwardTableId'] = $this->forwardTableId;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return forwardTableIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardTableId'])) {
            if (!empty($map['ForwardTableId'])) {
                $model->forwardTableId = [];
                $model->forwardTableId = $map['ForwardTableId'];
            }
        }

        return $model;
    }
}
