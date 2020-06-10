<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponse\maintenanceAttributes\maintenanceAttribute;
use AlibabaCloud\Tea\Model;

class maintenanceAttributes extends Model
{
    /**
     * @description MaintenanceAttribute
     *
     * @var array
     */
    public $maintenanceAttribute;
    protected $_name = [
        'maintenanceAttribute' => 'MaintenanceAttribute',
    ];

    public function validate()
    {
        Model::validateRequired('maintenanceAttribute', $this->maintenanceAttribute, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maintenanceAttribute) {
            $res['MaintenanceAttribute'] = [];
            if (null !== $this->maintenanceAttribute && \is_array($this->maintenanceAttribute)) {
                $n = 0;
                foreach ($this->maintenanceAttribute as $item) {
                    $res['MaintenanceAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return maintenanceAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaintenanceAttribute'])) {
            if (!empty($map['MaintenanceAttribute'])) {
                $model->maintenanceAttribute = [];
                $n                           = 0;
                foreach ($map['MaintenanceAttribute'] as $item) {
                    $model->maintenanceAttribute[$n++] = null !== $item ? maintenanceAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
