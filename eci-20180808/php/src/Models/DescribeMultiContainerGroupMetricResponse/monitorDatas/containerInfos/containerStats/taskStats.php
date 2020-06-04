<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class taskStats extends Model {
    protected $_name = [
        'nrSleeping' => 'NrSleeping',
        'nrRunning' => 'NrRunning',
        'nrStopped' => 'NrStopped',
        'nrUninterruptible' => 'NrUninterruptible',
        'nrIoWait' => 'NrIoWait',
    ];
    public function validate() {
        Model::validateRequired('nrSleeping', $this->nrSleeping, true);
        Model::validateRequired('nrRunning', $this->nrRunning, true);
        Model::validateRequired('nrStopped', $this->nrStopped, true);
        Model::validateRequired('nrUninterruptible', $this->nrUninterruptible, true);
        Model::validateRequired('nrIoWait', $this->nrIoWait, true);
    }
    public function toMap() {
        $res = [];
        $res['NrSleeping'] = $this->nrSleeping;
        $res['NrRunning'] = $this->nrRunning;
        $res['NrStopped'] = $this->nrStopped;
        $res['NrUninterruptible'] = $this->nrUninterruptible;
        $res['NrIoWait'] = $this->nrIoWait;
        return $res;
    }
    /**
     * @param array $map
     * @return taskStats
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['NrSleeping'])){
            $model->nrSleeping = $map['NrSleeping'];
        }
        if(isset($map['NrRunning'])){
            $model->nrRunning = $map['NrRunning'];
        }
        if(isset($map['NrStopped'])){
            $model->nrStopped = $map['NrStopped'];
        }
        if(isset($map['NrUninterruptible'])){
            $model->nrUninterruptible = $map['NrUninterruptible'];
        }
        if(isset($map['NrIoWait'])){
            $model->nrIoWait = $map['NrIoWait'];
        }
        return $model;
    }
    /**
     * @description nrSleeping
     * @var integer
     */
    public $nrSleeping;

    /**
     * @description nrRunning
     * @var integer
     */
    public $nrRunning;

    /**
     * @description nrStopped
     * @var integer
     */
    public $nrStopped;

    /**
     * @description nrUninterruptible
     * @var integer
     */
    public $nrUninterruptible;

    /**
     * @description nrIoWait
     * @var integer
     */
    public $nrIoWait;

}
