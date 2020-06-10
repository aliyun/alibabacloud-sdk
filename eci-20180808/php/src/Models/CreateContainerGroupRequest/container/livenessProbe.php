<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\livenessProbe\exec;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\livenessProbe\httpGet;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\livenessProbe\tcpSocket;
use AlibabaCloud\Tea\Model;

class livenessProbe extends Model
{
    /**
     * @description HttpGet
     *
     * @var httpGet
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
     * @var exec
     */
    public $exec;

    /**
     * @description TcpSocket
     *
     * @var tcpSocket
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
        $res = [];
        if (null !== $this->httpGet) {
            $res['HttpGet'] = null !== $this->httpGet ? $this->httpGet->toMap() : null;
        }
        if (null !== $this->initialDelaySeconds) {
            $res['InitialDelaySeconds'] = $this->initialDelaySeconds;
        }
        if (null !== $this->periodSeconds) {
            $res['PeriodSeconds'] = $this->periodSeconds;
        }
        if (null !== $this->successThreshold) {
            $res['SuccessThreshold'] = $this->successThreshold;
        }
        if (null !== $this->failureThreshold) {
            $res['FailureThreshold'] = $this->failureThreshold;
        }
        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }
        if (null !== $this->exec) {
            $res['Exec'] = null !== $this->exec ? $this->exec->toMap() : null;
        }
        if (null !== $this->tcpSocket) {
            $res['TcpSocket'] = null !== $this->tcpSocket ? $this->tcpSocket->toMap() : null;
        }

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
            $model->httpGet = httpGet::fromMap($map['HttpGet']);
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
            $model->exec = exec::fromMap($map['Exec']);
        }
        if (isset($map['TcpSocket'])) {
            $model->tcpSocket = tcpSocket::fromMap($map['TcpSocket']);
        }

        return $model;
    }
}
