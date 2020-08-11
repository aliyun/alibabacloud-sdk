<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponse\maintenanceAttributes\maintenanceAttribute;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMaintenanceAttributesResponse\maintenanceAttributes\maintenanceAttribute\maintenanceWindows\maintenanceWindow;
use AlibabaCloud\Tea\Model;

class maintenanceWindows extends Model
{
    /**
     * @var array
     */
    public $maintenanceWindow;
    protected $_name = [
        'maintenanceWindow' => 'MaintenanceWindow',
    ];

    public function validate()
    {
        Model::validateRequired('maintenanceWindow', $this->maintenanceWindow, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maintenanceWindow) {
            $res['MaintenanceWindow'] = [];
            if (null !== $this->maintenanceWindow && \is_array($this->maintenanceWindow)) {
                $n = 0;
                foreach ($this->maintenanceWindow as $item) {
                    $res['MaintenanceWindow'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return maintenanceWindows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaintenanceWindow'])) {
            if (!empty($map['MaintenanceWindow'])) {
                $model->maintenanceWindow = [];
                $n                        = 0;
                foreach ($map['MaintenanceWindow'] as $item) {
                    $model->maintenanceWindow[$n++] = null !== $item ? maintenanceWindow::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
