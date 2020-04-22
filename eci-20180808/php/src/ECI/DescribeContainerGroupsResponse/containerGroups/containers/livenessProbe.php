<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups\containers;

use AlibabaCloud\SDK\ECI\V20180808\ECI\livenessProbe\httpGet;
use AlibabaCloud\SDK\ECI\V20180808\ECI\livenessProbe\tcpSocket;
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
     * @var livenessProbe.httpGet
     */
    public $httpGet;

    /**
     * @description tcpSocket
     *
     * @var livenessProbe.tcpSocket
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
        $res                        = [];
        $res['InitialDelaySeconds'] = $this->initialDelaySeconds;
        $res['PeriodSeconds']       = $this->periodSeconds;
        $res['TimeoutSeconds']      = $this->timeoutSeconds;
        $res['SuccessThreshold']    = $this->successThreshold;
        $res['FailureThreshold']    = $this->failureThreshold;
        $res['HttpGet']             = null !== $this->httpGet ? $this->httpGet->toMap() : null;
        $res['TcpSocket']           = null !== $this->tcpSocket ? $this->tcpSocket->toMap() : null;
        $res['Execs']               = [];
        if (null !== $this->execs) {
            $res['Execs'] = $this->execs;
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
            $model->httpGet = livenessProbe\httpGet::fromMap($map['HttpGet']);
        }
        if (isset($map['TcpSocket'])) {
            $model->tcpSocket = livenessProbe\tcpSocket::fromMap($map['TcpSocket']);
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
