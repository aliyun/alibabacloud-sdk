<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse\networkInterfaceSets\networkInterfaceSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse\networkInterfaceSets\networkInterfaceSet\privateIpSets\privateIpSet;
use AlibabaCloud\Tea\Model;

class privateIpSets extends Model
{
    /**
     * @var array
     */
    public $privateIpSet;
    protected $_name = [
        'privateIpSet' => 'PrivateIpSet',
    ];

    public function validate()
    {
        Model::validateRequired('privateIpSet', $this->privateIpSet, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateIpSet) {
            $res['PrivateIpSet'] = [];
            if (null !== $this->privateIpSet && \is_array($this->privateIpSet)) {
                $n = 0;
                foreach ($this->privateIpSet as $item) {
                    $res['PrivateIpSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateIpSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateIpSet'])) {
            if (!empty($map['PrivateIpSet'])) {
                $model->privateIpSet = [];
                $n                   = 0;
                foreach ($map['PrivateIpSet'] as $item) {
                    $model->privateIpSet[$n++] = null !== $item ? privateIpSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
