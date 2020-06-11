<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeReusableSlbResponse;

use AlibabaCloud\Tea\Model;

class reusableSlbList extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description name
     *
     * @var string
     */
    public $loadBalancerName;
    protected $_name = [
        'loadBalancerId'   => 'LoadBalancerId',
        'loadBalancerName' => 'LoadBalancerName',
    ];

    public function validate()
    {
        Model::validateRequired('loadBalancerId', $this->loadBalancerId, true);
        Model::validateRequired('loadBalancerName', $this->loadBalancerName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reusableSlbList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }

        return $model;
    }
}
