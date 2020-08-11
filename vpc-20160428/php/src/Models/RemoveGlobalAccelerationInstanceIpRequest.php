<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class RemoveGlobalAccelerationInstanceIpRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $globalAccelerationInstanceId;

    /**
     * @var string
     */
    public $ipInstanceId;
    protected $_name = [
        'regionId'                     => 'RegionId',
        'globalAccelerationInstanceId' => 'GlobalAccelerationInstanceId',
        'ipInstanceId'                 => 'IpInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('globalAccelerationInstanceId', $this->globalAccelerationInstanceId, true);
        Model::validateRequired('ipInstanceId', $this->ipInstanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->globalAccelerationInstanceId) {
            $res['GlobalAccelerationInstanceId'] = $this->globalAccelerationInstanceId;
        }
        if (null !== $this->ipInstanceId) {
            $res['IpInstanceId'] = $this->ipInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveGlobalAccelerationInstanceIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['GlobalAccelerationInstanceId'])) {
            $model->globalAccelerationInstanceId = $map['GlobalAccelerationInstanceId'];
        }
        if (isset($map['IpInstanceId'])) {
            $model->ipInstanceId = $map['IpInstanceId'];
        }

        return $model;
    }
}
