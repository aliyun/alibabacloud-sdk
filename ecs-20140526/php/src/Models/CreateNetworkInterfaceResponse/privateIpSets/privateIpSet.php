<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceResponse\privateIpSets;

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
    protected $_name = [
        'privateIpAddress' => 'PrivateIpAddress',
        'primary'          => 'Primary',
    ];

    public function validate()
    {
        Model::validateRequired('privateIpAddress', $this->privateIpAddress, true);
        Model::validateRequired('primary', $this->primary, true);
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

        return $model;
    }
}
