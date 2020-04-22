<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest\container;

use AlibabaCloud\SDK\ECI\V20180808\ECI\livenessProbe\exec;
use AlibabaCloud\SDK\ECI\V20180808\ECI\livenessProbe\httpGet;
use AlibabaCloud\SDK\ECI\V20180808\ECI\livenessProbe\tcpSocket;
use AlibabaCloud\Tea\Model;

class livenessProbe extends Model
{
    /**
     * @description HttpGet
     *
     * @var livenessProbe.httpGet
     */
    public $httpGet;

    /**
     * @description livenessProbeInitialDelaySeconds
     *
     * @var int
     */
    public $initialDelaySeconds;

    /**
     * @description livenessProbePeriodSeconds
     *
     * @var int
     */
    public $periodSeconds;

    /**
     * @description livenessProbeSuccessThreshold
     *
     * @var int
     */
    public $successThreshold;

    /**
     * @description livenessProbeFailureThreshold
     *
     * @var int
     */
    public $failureThreshold;

    /**
     * @description livenessProbeTimeoutSeconds
     *
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @description Exec
     *
     * @var livenessProbe.exec
     */
    public $exec;

    /**
     * @description TcpSocket
     *
     * @var livenessProbe.tcpSocket
     */
    public $tcpSocket;
    protected $_name = [
        'httpGet'             => 'HttpGet',
        'initialDelaySeconds' => 'InitialDelaySeconds',
        'periodSeconds'       => 'PeriodSeconds',
        'successThreshold'    => 'SuccessThreshold',
        'failureThreshold'    => 'FailureThreshold',
        'timeoutSeconds'      => 'TimeoutSeconds',
        'exec'                => 'Exec',
        'tcpSocket'           => 'TcpSocket',
    ];

    public function validate()
    {
        Model::validateRequired('httpGet', $this->httpGet, true);
        Model::validateRequired('exec', $this->exec, true);
        Model::validateRequired('tcpSocket', $this->tcpSocket, true);
    }

    public function toMap()
    {
        $res                        = [];
        $res['HttpGet']             = null !== $this->httpGet ? $this->httpGet->toMap() : null;
        $res['InitialDelaySeconds'] = $this->initialDelaySeconds;
        $res['PeriodSeconds']       = $this->periodSeconds;
        $res['SuccessThreshold']    = $this->successThreshold;
        $res['FailureThreshold']    = $this->failureThreshold;
        $res['TimeoutSeconds']      = $this->timeoutSeconds;
        $res['Exec']                = null !== $this->exec ? $this->exec->toMap() : null;
        $res['TcpSocket']           = null !== $this->tcpSocket ? $this->tcpSocket->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return livenessProbe
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpGet'])) {
            $model->httpGet = livenessProbe\httpGet::fromMap($map['HttpGet']);
        }
        if (isset($map['InitialDelaySeconds'])) {
            $model->initialDelaySeconds = $map['InitialDelaySeconds'];
        }
        if (isset($map['PeriodSeconds'])) {
            $model->periodSeconds = $map['PeriodSeconds'];
        }
        if (isset($map['SuccessThreshold'])) {
            $model->successThreshold = $map['SuccessThreshold'];
        }
        if (isset($map['FailureThreshold'])) {
            $model->failureThreshold = $map['FailureThreshold'];
        }
        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }
        if (isset($map['Exec'])) {
            $model->exec = livenessProbe\exec::fromMap($map['Exec']);
        }
        if (isset($map['TcpSocket'])) {
            $model->tcpSocket = livenessProbe\tcpSocket::fromMap($map['TcpSocket']);
        }

        return $model;
    }
}
