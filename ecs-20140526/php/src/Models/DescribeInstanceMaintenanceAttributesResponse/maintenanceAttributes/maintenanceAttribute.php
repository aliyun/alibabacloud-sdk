<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponse\maintenanceAttributes;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponse\maintenanceAttributes\maintenanceAttribute\actionOnMaintenance;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponse\maintenanceAttributes\maintenanceAttribute\maintenanceWindows;
use AlibabaCloud\Tea\Model;

class maintenanceAttribute extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var maintenanceWindows
     */
    public $maintenanceWindows;

    /**
     * @var actionOnMaintenance
     */
    public $actionOnMaintenance;
    protected $_name = [
        'instanceId'          => 'InstanceId',
        'maintenanceWindows'  => 'MaintenanceWindows',
        'actionOnMaintenance' => 'ActionOnMaintenance',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('maintenanceWindows', $this->maintenanceWindows, true);
        Model::validateRequired('actionOnMaintenance', $this->actionOnMaintenance, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maintenanceWindows) {
            $res['MaintenanceWindows'] = null !== $this->maintenanceWindows ? $this->maintenanceWindows->toMap() : null;
        }
        if (null !== $this->actionOnMaintenance) {
            $res['ActionOnMaintenance'] = null !== $this->actionOnMaintenance ? $this->actionOnMaintenance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return maintenanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaintenanceWindows'])) {
            $model->maintenanceWindows = maintenanceWindows::fromMap($map['MaintenanceWindows']);
        }
        if (isset($map['ActionOnMaintenance'])) {
            $model->actionOnMaintenance = actionOnMaintenance::fromMap($map['ActionOnMaintenance']);
        }

        return $model;
    }
}
