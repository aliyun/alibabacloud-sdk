<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\records\containers;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\records\CPU;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\records\memory;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\records\network;

class records extends Model {
    protected $_name = [
        'timestamp' => 'Timestamp',
        'containers' => 'Containers',
        'CPU' => 'CPU',
        'memory' => 'Memory',
        'network' => 'Network',
    ];
    public function validate() {
        Model::validateRequired('timestamp', $this->timestamp, true);
        Model::validateRequired('containers', $this->containers, true);
        Model::validateRequired('CPU', $this->CPU, true);
        Model::validateRequired('memory', $this->memory, true);
        Model::validateRequired('network', $this->network, true);
    }
    public function toMap() {
        $res = [];
        $res['Timestamp'] = $this->timestamp;
        $res['Containers'] = [];
        if(null !== $this->containers && is_array($this->containers)){
            $n = 0;
            foreach($this->containers as $item){
                $res['Containers'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['CPU'] = null !== $this->CPU ? $this->CPU->toMap() : null;
        $res['Memory'] = null !== $this->memory ? $this->memory->toMap() : null;
        $res['Network'] = null !== $this->network ? $this->network->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return records
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Timestamp'])){
            $model->timestamp = $map['Timestamp'];
        }
        if(isset($map['Containers'])){
            if(!empty($map['Containers'])){
                $model->containers = [];
                $n = 0;
                foreach($map['Containers'] as $item) {
                    $model->containers[$n++] = null !== $item ? containers::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['CPU'])){
            $model->CPU = CPU::fromMap($map['CPU']);
        }
        if(isset($map['Memory'])){
            $model->memory = memory::fromMap($map['Memory']);
        }
        if(isset($map['Network'])){
            $model->network = network::fromMap($map['Network']);
        }
        return $model;
    }
    /**
     * @description timestamp
     * @var string
     */
    public $timestamp;

    /**
     * @description containerStatss
     * @var array
     */
    public $containers;

    /**
     * @description cpuStats
     * @var CPU
     */
    public $CPU;

    /**
     * @description memoryStats
     * @var memory
     */
    public $memory;

    /**
     * @description networkStats
     * @var network
     */
    public $network;

}
