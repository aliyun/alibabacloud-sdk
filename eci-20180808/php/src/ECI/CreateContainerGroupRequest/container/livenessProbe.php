<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest\container;

use AlibabaCloud\Tea\Model;

class livenessProbe extends Model
{
    public $httpGet;
    public $initialDelaySeconds;
    public $periodSeconds;
    public $successThreshold;
    public $failureThreshold;
    public $timeoutSeconds;
    public $exec;
    public $tcpSocket;
    protected $_required = [
        'httpGet'   => true,
        'exec'      => true,
        'tcpSocket' => true,
    ];
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
    protected $_description = [
        'httpGet'             => 'HttpGet',
        'initialDelaySeconds' => 'livenessProbeInitialDelaySeconds',
        'periodSeconds'       => 'livenessProbePeriodSeconds',
        'successThreshold'    => 'livenessProbeSuccessThreshold',
        'failureThreshold'    => 'livenessProbeFailureThreshold',
        'timeoutSeconds'      => 'livenessProbeTimeoutSeconds',
        'exec'                => 'Exec',
        'tcpSocket'           => 'TcpSocket',
    ];
}
