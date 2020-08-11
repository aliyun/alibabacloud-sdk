<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstancesRequest\configuration;
use AlibabaCloud\Tea\Model;

class ModifyReservedInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var array
     */
    public $reservedInstanceId;

    /**
     * @var array
     */
    public $configuration;
    protected $_name = [
        'regionId'           => 'RegionId',
        'reservedInstanceId' => 'ReservedInstanceId',
        'configuration'      => 'Configuration',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('reservedInstanceId', $this->reservedInstanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reservedInstanceId) {
            $res['ReservedInstanceId'] = $this->reservedInstanceId;
        }
        if (null !== $this->configuration) {
            $res['Configuration'] = [];
            if (null !== $this->configuration && \is_array($this->configuration)) {
                $n = 0;
                foreach ($this->configuration as $item) {
                    $res['Configuration'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyReservedInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReservedInstanceId'])) {
            if (!empty($map['ReservedInstanceId'])) {
                $model->reservedInstanceId = $map['ReservedInstanceId'];
            }
        }
        if (isset($map['Configuration'])) {
            if (!empty($map['Configuration'])) {
                $model->configuration = [];
                $n                    = 0;
                foreach ($map['Configuration'] as $item) {
                    $model->configuration[$n++] = null !== $item ? configuration::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
