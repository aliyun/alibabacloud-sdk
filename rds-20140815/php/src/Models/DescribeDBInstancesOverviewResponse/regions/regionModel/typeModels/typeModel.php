<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesOverviewResponse\regions\regionModel\typeModels;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesOverviewResponse\regions\regionModel\typeModels\typeModel\instanceModels;
use AlibabaCloud\Tea\Model;

class typeModel extends Model
{
    /**
     * @description instanceDateType
     *
     * @var string
     */
    public $instanceDateType;

    /**
     * @description count
     *
     * @var int
     */
    public $count;

    /**
     * @description instanceModels
     *
     * @var instanceModels
     */
    public $instanceModels;
    protected $_name = [
        'instanceDateType' => 'InstanceDateType',
        'count'            => 'Count',
        'instanceModels'   => 'InstanceModels',
    ];

    public function validate()
    {
        Model::validateRequired('instanceDateType', $this->instanceDateType, true);
        Model::validateRequired('count', $this->count, true);
        Model::validateRequired('instanceModels', $this->instanceModels, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceDateType) {
            $res['InstanceDateType'] = $this->instanceDateType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->instanceModels) {
            $res['InstanceModels'] = null !== $this->instanceModels ? $this->instanceModels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return typeModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceDateType'])) {
            $model->instanceDateType = $map['InstanceDateType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['InstanceModels'])) {
            $model->instanceModels = instanceModels::fromMap($map['InstanceModels']);
        }

        return $model;
    }
}
