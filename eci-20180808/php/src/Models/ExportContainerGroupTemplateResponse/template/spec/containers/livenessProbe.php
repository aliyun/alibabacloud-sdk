<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\containers;

use AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\containers\livenessProbe\exec;
use AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\containers\livenessProbe\httpGet;
use AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\containers\livenessProbe\tcpSocket;
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
     * @description timeoutSeconds
     *
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @description exec
     *
     * @var exec
     */
    public $exec;

    /**
     * @description tcpSocket
     *
     * @var tcpSocket
     */
    public $tcpSocket;

    /**
     * @description httpGet
     *
     * @var httpGet
     */
    public $httpGet;
    protected $_name = [
        'initialDelaySeconds' => 'InitialDelaySeconds',
        'periodSeconds'       => 'PeriodSeconds',
        'successThreshold'    => 'SuccessThreshold',
        'failureThreshold'    => 'FailureThreshold',
        'timeoutSeconds'      => 'TimeoutSeconds',
        'exec'                => 'Exec',
        'tcpSocket'           => 'TcpSocket',
        'httpGet'             => 'HttpGet',
    ];

    public function validate()
    {
        Model::validateRequired('initialDelaySeconds', $this->initialDelaySeconds, true);
        Model::validateRequired('periodSeconds', $this->periodSeconds, true);
        Model::validateRequired('successThreshold', $this->successThreshold, true);
        Model::validateRequired('failureThreshold', $this->failureThreshold, true);
        Model::validateRequired('timeoutSeconds', $this->timeoutSeconds, true);
        Model::validateRequired('exec', $this->exec, true);
        Model::validateRequired('tcpSocket', $this->tcpSocket, true);
        Model::validateRequired('httpGet', $this->httpGet, true);
    }

    public function toMap()
    {
        $res                        = [];
        $res['InitialDelaySeconds'] = $this->initialDelaySeconds;
        $res['PeriodSeconds']       = $this->periodSeconds;
        $res['SuccessThreshold']    = $this->successThreshold;
        $res['FailureThreshold']    = $this->failureThreshold;
        $res['TimeoutSeconds']      = $this->timeoutSeconds;
        $res['Exec']                = null !== $this->exec ? $this->exec->toMap() : null;
        $res['TcpSocket']           = null !== $this->tcpSocket ? $this->tcpSocket->toMap() : null;
        $res['HttpGet']             = null !== $this->httpGet ? $this->httpGet->toMap() : null;

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
        if (isset($map['HttpGet'])) {
            $model->httpGet = httpGet::fromMap($map['HttpGet']);
        }

        return $model;
    }
}
