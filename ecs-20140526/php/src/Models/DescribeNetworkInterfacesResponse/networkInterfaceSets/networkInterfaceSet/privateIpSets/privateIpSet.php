<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse\networkInterfaceSets\networkInterfaceSet\privateIpSets;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse\networkInterfaceSets\networkInterfaceSet\privateIpSets\privateIpSet\associatedPublicIp;
use AlibabaCloud\Tea\Model;

class privateIpSet extends Model
{
    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var bool
     */
    public $primary;

    /**
     * @var associatedPublicIp
     */
    public $associatedPublicIp;
    protected $_name = [
        'privateIpAddress'   => 'PrivateIpAddress',
        'primary'            => 'Primary',
        'associatedPublicIp' => 'AssociatedPublicIp',
    ];

    public function validate()
    {
        Model::validateRequired('privateIpAddress', $this->privateIpAddress, true);
        Model::validateRequired('primary', $this->primary, true);
        Model::validateRequired('associatedPublicIp', $this->associatedPublicIp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
        }
        if (null !== $this->associatedPublicIp) {
            $res['AssociatedPublicIp'] = null !== $this->associatedPublicIp ? $this->associatedPublicIp->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateIpSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }
        if (isset($map['AssociatedPublicIp'])) {
            $model->associatedPublicIp = associatedPublicIp::fromMap($map['AssociatedPublicIp']);
        }

        return $model;
    }
}
