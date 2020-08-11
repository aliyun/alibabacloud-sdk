<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse\networkInterfaceSets\networkInterfaceSet\privateIpSets\privateIpSet;

use AlibabaCloud\Tea\Model;

class associatedPublicIp extends Model
{
    /**
     * @var string
     */
    public $publicIpAddress;

    /**
     * @var string
     */
    public $allocationId;
    protected $_name = [
        'publicIpAddress' => 'PublicIpAddress',
        'allocationId'    => 'AllocationId',
    ];

    public function validate()
    {
        Model::validateRequired('publicIpAddress', $this->publicIpAddress, true);
        Model::validateRequired('allocationId', $this->allocationId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedPublicIp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }

        return $model;
    }
}
