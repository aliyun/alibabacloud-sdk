<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponse\assignedPrivateIpAddressesSet\privateIpSet;
use AlibabaCloud\Tea\Model;

class assignedPrivateIpAddressesSet extends Model
{
    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var privateIpSet
     */
    public $privateIpSet;
    protected $_name = [
        'networkInterfaceId' => 'NetworkInterfaceId',
        'privateIpSet'       => 'PrivateIpSet',
    ];

    public function validate()
    {
        Model::validateRequired('networkInterfaceId', $this->networkInterfaceId, true);
        Model::validateRequired('privateIpSet', $this->privateIpSet, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->privateIpSet) {
            $res['PrivateIpSet'] = null !== $this->privateIpSet ? $this->privateIpSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assignedPrivateIpAddressesSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['PrivateIpSet'])) {
            $model->privateIpSet = privateIpSet::fromMap($map['PrivateIpSet']);
        }

        return $model;
    }
}
