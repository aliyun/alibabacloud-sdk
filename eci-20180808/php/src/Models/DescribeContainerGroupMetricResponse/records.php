<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponse;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponse\records\containers;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponse\records\CPU;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponse\records\memory;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponse\records\network;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description timestamp
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description containerStatss
     *
     * @var array
     */
    public $containers;

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

    /**
     * @description networkStats
     *
     * @var network
     */
    public $network;
    protected $_name = [
        'timestamp'  => 'Timestamp',
        'containers' => 'Containers',
        'CPU'        => 'CPU',
        'memory'     => 'Memory',
        'network'    => 'Network',
    ];

    public function validate()
    {
        Model::validateRequired('timestamp', $this->timestamp, true);
        Model::validateRequired('containers', $this->containers, true);
        Model::validateRequired('CPU', $this->CPU, true);
        Model::validateRequired('memory', $this->memory, true);
        Model::validateRequired('network', $this->network, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->containers) {
            $res['Containers'] = [];
            if (null !== $this->containers && \is_array($this->containers)) {
                $n = 0;
                foreach ($this->containers as $item) {
                    $res['Containers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->CPU) {
            $res['CPU'] = null !== $this->CPU ? $this->CPU->toMap() : null;
        }
        if (null !== $this->memory) {
            $res['Memory'] = null !== $this->memory ? $this->memory->toMap() : null;
        }
        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n                 = 0;
                foreach ($map['Containers'] as $item) {
                    $model->containers[$n++] = null !== $item ? containers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CPU'])) {
            $model->CPU = CPU::fromMap($map['CPU']);
        }
        if (isset($map['Memory'])) {
            $model->memory = memory::fromMap($map['Memory']);
        }
        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        return $model;
    }
}
