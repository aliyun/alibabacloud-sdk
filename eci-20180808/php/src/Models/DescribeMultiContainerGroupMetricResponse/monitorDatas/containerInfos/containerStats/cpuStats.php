<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\cpuStats\cpuUsage;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\cpuStats\cpuCFS;

class cpuStats extends Model {
    protected $_name = [
        'loadAverage' => 'LoadAverage',
        'cpuUsage' => 'CpuUsage',
        'cpuCFS' => 'CpuCFS',
    ];
    public function validate() {
        Model::validateRequired('loadAverage', $this->loadAverage, true);
        Model::validateRequired('cpuUsage', $this->cpuUsage, true);
        Model::validateRequired('cpuCFS', $this->cpuCFS, true);
    }
    public function toMap() {
        $res = [];
        $res['LoadAverage'] = $this->loadAverage;
        $res['CpuUsage'] = null !== $this->cpuUsage ? $this->cpuUsage->toMap() : null;
        $res['CpuCFS'] = null !== $this->cpuCFS ? $this->cpuCFS->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return cpuStats
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['LoadAverage'])){
            $model->loadAverage = $map['LoadAverage'];
        }
        if(isset($map['CpuUsage'])){
            $model->cpuUsage = cpuUsage::fromMap($map['CpuUsage']);
        }
        if(isset($map['CpuCFS'])){
            $model->cpuCFS = cpuCFS::fromMap($map['CpuCFS']);
        }
        return $model;
    }
    /**
     * @description loadAverage
     * @var integer
     */
    public $loadAverage;

    /**
     * @description usage
     * @var cpuUsage
     */
    public $cpuUsage;

    /**
     * @description cfs
     * @var cpuCFS
     */
    public $cpuCFS;

}
