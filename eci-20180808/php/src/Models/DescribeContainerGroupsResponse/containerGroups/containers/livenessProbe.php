<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers\livenessProbe\httpGet;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers\livenessProbe\tcpSocket;
use AlibabaCloud\Tea\Model;

class livenessProbe extends Model
{
    /**
     * @description initialDelaySeconds
     *
     * @var int
     */
    public $initialDelaySeconds;

    /**
     * @description periodSeconds
     *
     * @var int
     */
    public $periodSeconds;

    /**
     * @description timeoutSeconds
     *
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @description successThreshold
     *
     * @var int
     */
    public $successThreshold;

    /**
     * @description failureThreshold
     *
     * @var int
     */
    public $failureThreshold;

    /**
     * @description httpGet
     *
     * @var httpGet
     */
    public $httpGet;

    /**
     * @description tcpSocket
     *
     * @var tcpSocket
     */
    public $tcpSocket;

    /**
     * @description exec
     *
     * @var array
     */
    public $execs;
    protected $_name = [
        'initialDelaySeconds' => 'InitialDelaySeconds',
        'periodSeconds'       => 'PeriodSeconds',
        'timeoutSeconds'      => 'TimeoutSeconds',
        'successThreshold'    => 'SuccessThreshold',
        'failureThreshold'    => 'FailureThreshold',
        'httpGet'             => 'HttpGet',
        'tcpSocket'           => 'TcpSocket',
        'execs'               => 'Execs',
    ];

    public function validate()
    {
        Model::validateRequired('initialDelaySeconds', $this->initialDelaySeconds, true);
        Model::validateRequired('periodSeconds', $this->periodSeconds, true);
        Model::validateRequired('timeoutSeconds', $this->timeoutSeconds, true);
        Model::validateRequired('successThreshold', $this->successThreshold, true);
        Model::validateRequired('failureThreshold', $this->failureThreshold, true);
        Model::validateRequired('httpGet', $this->httpGet, true);
        Model::validateRequired('tcpSocket', $this->tcpSocket, true);
        Model::validateRequired('execs', $this->execs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->initialDelaySeconds) {
            $res['InitialDelaySeconds'] = $this->initialDelaySeconds;
        }
        if (null !== $this->periodSeconds) {
            $res['PeriodSeconds'] = $this->periodSeconds;
        }
        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }
        if (null !== $this->successThreshold) {
            $res['SuccessThreshold'] = $this->successThreshold;
        }
        if (null !== $this->failureThreshold) {
            $res['FailureThreshold'] = $this->failureThreshold;
        }
        if (null !== $this->httpGet) {
            $res['HttpGet'] = null !== $this->httpGet ? $this->httpGet->toMap() : null;
        }
        if (null !== $this->tcpSocket) {
            $res['TcpSocket'] = null !== $this->tcpSocket ? $this->tcpSocket->toMap() : null;
        }
        if (null !== $this->execs) {
            $res['Execs'] = [];
            if (null !== $this->execs) {
                $res['Execs'] = $this->execs;
            }
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
        if (isset($map['InitialDelaySeconds'])) {
            $model->initialDelaySeconds = $map['InitialDelaySeconds'];
        }
        if (isset($map['PeriodSeconds'])) {
            $model->periodSeconds = $map['PeriodSeconds'];
        }
        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }
        if (isset($map['SuccessThreshold'])) {
            $model->successThreshold = $map['SuccessThreshold'];
        }
        if (isset($map['FailureThreshold'])) {
            $model->failureThreshold = $map['FailureThreshold'];
        }
        if (isset($map['HttpGet'])) {
            $model->httpGet = httpGet::fromMap($map['HttpGet']);
        }
        if (isset($map['TcpSocket'])) {
            $model->tcpSocket = tcpSocket::fromMap($map['TcpSocket']);
        }
        if (isset($map['Execs'])) {
            if (!empty($map['Execs'])) {
                $model->execs = [];
                $model->execs = $map['Execs'];
            }
        }

        return $model;
    }
}
