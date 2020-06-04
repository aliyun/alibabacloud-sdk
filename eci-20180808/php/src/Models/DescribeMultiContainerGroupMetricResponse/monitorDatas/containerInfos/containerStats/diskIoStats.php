<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\diskIoStats\ioServiceBytes;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\diskIoStats\ioServiced;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\diskIoStats\ioQueued;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\diskIoStats\sectors;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\diskIoStats\ioServiceTime;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\diskIoStats\ioWaitTime;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\diskIoStats\ioMerged;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\diskIoStats\ioTime;

class diskIoStats extends Model {
    protected $_name = [
        'ioServiceBytes' => 'IoServiceBytes',
        'ioServiced' => 'IoServiced',
        'ioQueued' => 'IoQueued',
        'sectors' => 'Sectors',
        'ioServiceTime' => 'IoServiceTime',
        'ioWaitTime' => 'IoWaitTime',
        'ioMerged' => 'IoMerged',
        'ioTime' => 'IoTime',
    ];
    public function validate() {
        Model::validateRequired('ioServiceBytes', $this->ioServiceBytes, true);
        Model::validateRequired('ioServiced', $this->ioServiced, true);
        Model::validateRequired('ioQueued', $this->ioQueued, true);
        Model::validateRequired('sectors', $this->sectors, true);
        Model::validateRequired('ioServiceTime', $this->ioServiceTime, true);
        Model::validateRequired('ioWaitTime', $this->ioWaitTime, true);
        Model::validateRequired('ioMerged', $this->ioMerged, true);
        Model::validateRequired('ioTime', $this->ioTime, true);
    }
    public function toMap() {
        $res = [];
        $res['IoServiceBytes'] = [];
        if(null !== $this->ioServiceBytes && is_array($this->ioServiceBytes)){
            $n = 0;
            foreach($this->ioServiceBytes as $item){
                $res['IoServiceBytes'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['IoServiced'] = [];
        if(null !== $this->ioServiced && is_array($this->ioServiced)){
            $n = 0;
            foreach($this->ioServiced as $item){
                $res['IoServiced'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['IoQueued'] = [];
        if(null !== $this->ioQueued && is_array($this->ioQueued)){
            $n = 0;
            foreach($this->ioQueued as $item){
                $res['IoQueued'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Sectors'] = [];
        if(null !== $this->sectors && is_array($this->sectors)){
            $n = 0;
            foreach($this->sectors as $item){
                $res['Sectors'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['IoServiceTime'] = [];
        if(null !== $this->ioServiceTime && is_array($this->ioServiceTime)){
            $n = 0;
            foreach($this->ioServiceTime as $item){
                $res['IoServiceTime'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['IoWaitTime'] = [];
        if(null !== $this->ioWaitTime && is_array($this->ioWaitTime)){
            $n = 0;
            foreach($this->ioWaitTime as $item){
                $res['IoWaitTime'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['IoMerged'] = [];
        if(null !== $this->ioMerged && is_array($this->ioMerged)){
            $n = 0;
            foreach($this->ioMerged as $item){
                $res['IoMerged'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['IoTime'] = [];
        if(null !== $this->ioTime && is_array($this->ioTime)){
            $n = 0;
            foreach($this->ioTime as $item){
                $res['IoTime'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return diskIoStats
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['IoServiceBytes'])){
            if(!empty($map['IoServiceBytes'])){
                $model->ioServiceBytes = [];
                $n = 0;
                foreach($map['IoServiceBytes'] as $item) {
                    $model->ioServiceBytes[$n++] = null !== $item ? ioServiceBytes::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['IoServiced'])){
            if(!empty($map['IoServiced'])){
                $model->ioServiced = [];
                $n = 0;
                foreach($map['IoServiced'] as $item) {
                    $model->ioServiced[$n++] = null !== $item ? ioServiced::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['IoQueued'])){
            if(!empty($map['IoQueued'])){
                $model->ioQueued = [];
                $n = 0;
                foreach($map['IoQueued'] as $item) {
                    $model->ioQueued[$n++] = null !== $item ? ioQueued::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['Sectors'])){
            if(!empty($map['Sectors'])){
                $model->sectors = [];
                $n = 0;
                foreach($map['Sectors'] as $item) {
                    $model->sectors[$n++] = null !== $item ? sectors::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['IoServiceTime'])){
            if(!empty($map['IoServiceTime'])){
                $model->ioServiceTime = [];
                $n = 0;
                foreach($map['IoServiceTime'] as $item) {
                    $model->ioServiceTime[$n++] = null !== $item ? ioServiceTime::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['IoWaitTime'])){
            if(!empty($map['IoWaitTime'])){
                $model->ioWaitTime = [];
                $n = 0;
                foreach($map['IoWaitTime'] as $item) {
                    $model->ioWaitTime[$n++] = null !== $item ? ioWaitTime::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['IoMerged'])){
            if(!empty($map['IoMerged'])){
                $model->ioMerged = [];
                $n = 0;
                foreach($map['IoMerged'] as $item) {
                    $model->ioMerged[$n++] = null !== $item ? ioMerged::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['IoTime'])){
            if(!empty($map['IoTime'])){
                $model->ioTime = [];
                $n = 0;
                foreach($map['IoTime'] as $item) {
                    $model->ioTime[$n++] = null !== $item ? ioTime::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description ioServiceBytes
     * @var array
     */
    public $ioServiceBytes;

    /**
     * @description ioServiced
     * @var array
     */
    public $ioServiced;

    /**
     * @description ioQueued
     * @var array
     */
    public $ioQueued;

    /**
     * @description sectors
     * @var array
     */
    public $sectors;

    /**
     * @description ioServiceTime
     * @var array
     */
    public $ioServiceTime;

    /**
     * @description ioWaitTime
     * @var array
     */
    public $ioWaitTime;

    /**
     * @description ioMerged
     * @var array
     */
    public $ioMerged;

    /**
     * @description ioTime
     * @var array
     */
    public $ioTime;

}
