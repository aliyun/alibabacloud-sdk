<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePhysicalConnectionsResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePhysicalConnectionsResponse\physicalConnectionSet\physicalConnectionType;
use AlibabaCloud\Tea\Model;

class physicalConnectionSet extends Model
{
    /**
     * @description PhysicalConnectionType
     *
     * @var array
     */
    public $physicalConnectionType;
    protected $_name = [
        'physicalConnectionType' => 'PhysicalConnectionType',
    ];

    public function validate()
    {
        Model::validateRequired('physicalConnectionType', $this->physicalConnectionType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->physicalConnectionType) {
            $res['PhysicalConnectionType'] = [];
            if (null !== $this->physicalConnectionType && \is_array($this->physicalConnectionType)) {
                $n = 0;
                foreach ($this->physicalConnectionType as $item) {
                    $res['PhysicalConnectionType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return physicalConnectionSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhysicalConnectionType'])) {
            if (!empty($map['PhysicalConnectionType'])) {
                $model->physicalConnectionType = [];
                $n                             = 0;
                foreach ($map['PhysicalConnectionType'] as $item) {
                    $model->physicalConnectionType[$n++] = null !== $item ? physicalConnectionType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
