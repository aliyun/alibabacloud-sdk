<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\networkStats;

use AlibabaCloud\Tea\Model;

class tcp6 extends Model
{
    /**
     * @description established
     *
     * @var int
     */
    public $established;

    /**
     * @description synSent
     *
     * @var int
     */
    public $synSent;

    /**
     * @description synRecv
     *
     * @var int
     */
    public $synRecv;

    /**
     * @description finWait1
     *
     * @var int
     */
    public $finWait1;

    /**
     * @description finWait2
     *
     * @var int
     */
    public $finWait2;

    /**
     * @description timeWait
     *
     * @var int
     */
    public $timeWait;

    /**
     * @description close
     *
     * @var int
     */
    public $close;

    /**
     * @description closeWait
     *
     * @var int
     */
    public $closeWait;

    /**
     * @description lastAck
     *
     * @var int
     */
    public $lastAck;

    /**
     * @description listen
     *
     * @var int
     */
    public $listen;

    /**
     * @description closing
     *
     * @var int
     */
    public $closing;
    protected $_name = [
        'established' => 'Established',
        'synSent'     => 'SynSent',
        'synRecv'     => 'SynRecv',
        'finWait1'    => 'FinWait1',
        'finWait2'    => 'FinWait2',
        'timeWait'    => 'TimeWait',
        'close'       => 'Close',
        'closeWait'   => 'CloseWait',
        'lastAck'     => 'LastAck',
        'listen'      => 'Listen',
        'closing'     => 'Closing',
    ];

    public function validate()
    {
        Model::validateRequired('established', $this->established, true);
        Model::validateRequired('synSent', $this->synSent, true);
        Model::validateRequired('synRecv', $this->synRecv, true);
        Model::validateRequired('finWait1', $this->finWait1, true);
        Model::validateRequired('finWait2', $this->finWait2, true);
        Model::validateRequired('timeWait', $this->timeWait, true);
        Model::validateRequired('close', $this->close, true);
        Model::validateRequired('closeWait', $this->closeWait, true);
        Model::validateRequired('lastAck', $this->lastAck, true);
        Model::validateRequired('listen', $this->listen, true);
        Model::validateRequired('closing', $this->closing, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->established) {
            $res['Established'] = $this->established;
        }
        if (null !== $this->synSent) {
            $res['SynSent'] = $this->synSent;
        }
        if (null !== $this->synRecv) {
            $res['SynRecv'] = $this->synRecv;
        }
        if (null !== $this->finWait1) {
            $res['FinWait1'] = $this->finWait1;
        }
        if (null !== $this->finWait2) {
            $res['FinWait2'] = $this->finWait2;
        }
        if (null !== $this->timeWait) {
            $res['TimeWait'] = $this->timeWait;
        }
        if (null !== $this->close) {
            $res['Close'] = $this->close;
        }
        if (null !== $this->closeWait) {
            $res['CloseWait'] = $this->closeWait;
        }
        if (null !== $this->lastAck) {
            $res['LastAck'] = $this->lastAck;
        }
        if (null !== $this->listen) {
            $res['Listen'] = $this->listen;
        }
        if (null !== $this->closing) {
            $res['Closing'] = $this->closing;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tcp6
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Established'])) {
            $model->established = $map['Established'];
        }
        if (isset($map['SynSent'])) {
            $model->synSent = $map['SynSent'];
        }
        if (isset($map['SynRecv'])) {
            $model->synRecv = $map['SynRecv'];
        }
        if (isset($map['FinWait1'])) {
            $model->finWait1 = $map['FinWait1'];
        }
        if (isset($map['FinWait2'])) {
            $model->finWait2 = $map['FinWait2'];
        }
        if (isset($map['TimeWait'])) {
            $model->timeWait = $map['TimeWait'];
        }
        if (isset($map['Close'])) {
            $model->close = $map['Close'];
        }
        if (isset($map['CloseWait'])) {
            $model->closeWait = $map['CloseWait'];
        }
        if (isset($map['LastAck'])) {
            $model->lastAck = $map['LastAck'];
        }
        if (isset($map['Listen'])) {
            $model->listen = $map['Listen'];
        }
        if (isset($map['Closing'])) {
            $model->closing = $map['Closing'];
        }

        return $model;
    }
}
