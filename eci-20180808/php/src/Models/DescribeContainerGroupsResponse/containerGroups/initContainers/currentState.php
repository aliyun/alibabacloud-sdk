<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\initContainers;

use AlibabaCloud\Tea\Model;

class currentState extends Model
{
    /**
     * @description state
     *
     * @var string
     */
    public $state;

    /**
     * @description detailStatus
     *
     * @var string
     */
    public $detailStatus;

    /**
     * @description exitCode
     *
     * @var int
     */
    public $exitCode;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description finishTime
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description reason
     *
     * @var string
     */
    public $reason;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description signal
     *
     * @var int
     */
    public $signal;
    protected $_name = [
        'state'        => 'State',
        'detailStatus' => 'DetailStatus',
        'exitCode'     => 'ExitCode',
        'startTime'    => 'StartTime',
        'finishTime'   => 'FinishTime',
        'reason'       => 'Reason',
        'message'      => 'Message',
        'signal'       => 'Signal',
    ];

    public function validate()
    {
        Model::validateRequired('state', $this->state, true);
        Model::validateRequired('detailStatus', $this->detailStatus, true);
        Model::validateRequired('exitCode', $this->exitCode, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('finishTime', $this->finishTime, true);
        Model::validateRequired('reason', $this->reason, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('signal', $this->signal, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['State']        = $this->state;
        $res['DetailStatus'] = $this->detailStatus;
        $res['ExitCode']     = $this->exitCode;
        $res['StartTime']    = $this->startTime;
        $res['FinishTime']   = $this->finishTime;
        $res['Reason']       = $this->reason;
        $res['Message']      = $this->message;
        $res['Signal']       = $this->signal;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return currentState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['DetailStatus'])) {
            $model->detailStatus = $map['DetailStatus'];
        }
        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Signal'])) {
            $model->signal = $map['Signal'];
        }

        return $model;
    }
}
