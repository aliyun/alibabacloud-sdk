<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class taskStats extends Model
{
    /**
     * @description nrSleeping
     *
     * @var int
     */
    public $nrSleeping;

    /**
     * @description nrRunning
     *
     * @var int
     */
    public $nrRunning;

    /**
     * @description nrStopped
     *
     * @var int
     */
    public $nrStopped;

    /**
     * @description nrUninterruptible
     *
     * @var int
     */
    public $nrUninterruptible;

    /**
     * @description nrIoWait
     *
     * @var int
     */
    public $nrIoWait;
    protected $_name = [
        'nrSleeping'        => 'NrSleeping',
        'nrRunning'         => 'NrRunning',
        'nrStopped'         => 'NrStopped',
        'nrUninterruptible' => 'NrUninterruptible',
        'nrIoWait'          => 'NrIoWait',
    ];

    public function validate()
    {
        Model::validateRequired('nrSleeping', $this->nrSleeping, true);
        Model::validateRequired('nrRunning', $this->nrRunning, true);
        Model::validateRequired('nrStopped', $this->nrStopped, true);
        Model::validateRequired('nrUninterruptible', $this->nrUninterruptible, true);
        Model::validateRequired('nrIoWait', $this->nrIoWait, true);
    }

    public function toMap()
    {
        $res                      = [];
        $res['NrSleeping']        = $this->nrSleeping;
        $res['NrRunning']         = $this->nrRunning;
        $res['NrStopped']         = $this->nrStopped;
        $res['NrUninterruptible'] = $this->nrUninterruptible;
        $res['NrIoWait']          = $this->nrIoWait;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NrSleeping'])) {
            $model->nrSleeping = $map['NrSleeping'];
        }
        if (isset($map['NrRunning'])) {
            $model->nrRunning = $map['NrRunning'];
        }
        if (isset($map['NrStopped'])) {
            $model->nrStopped = $map['NrStopped'];
        }
        if (isset($map['NrUninterruptible'])) {
            $model->nrUninterruptible = $map['NrUninterruptible'];
        }
        if (isset($map['NrIoWait'])) {
            $model->nrIoWait = $map['NrIoWait'];
        }

        return $model;
    }
}
