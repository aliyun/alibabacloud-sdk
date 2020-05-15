<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\records;

use AlibabaCloud\SDK\ECI\V20180808\Models\containers\CPU;
use AlibabaCloud\SDK\ECI\V20180808\Models\containers\memory;
use AlibabaCloud\Tea\Model;

class containers extends Model
{
    /**
     * @description containerName
     *
     * @var string
     */
    public $name;

    /**
     * @description cpuStats
     *
     * @var CPU
     */
    public $CPU;

    /**
     * @description memoryStats
     *
     * @var memory
     */
    public $memory;
    protected $_name = [
        'name'   => 'Name',
        'CPU'    => 'CPU',
        'memory' => 'Memory',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('CPU', $this->CPU, true);
        Model::validateRequired('memory', $this->memory, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['Name']   = $this->name;
        $res['CPU']    = null !== $this->CPU ? $this->CPU->toMap() : null;
        $res['Memory'] = null !== $this->memory ? $this->memory->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CPU'])) {
            $model->CPU = CPU::fromMap($map['CPU']);
        }
        if (isset($map['Memory'])) {
            $model->memory = memory::fromMap($map['Memory']);
        }

        return $model;
    }
}
