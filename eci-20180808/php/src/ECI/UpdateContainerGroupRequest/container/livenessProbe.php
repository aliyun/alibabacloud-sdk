<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest\container;

use AlibabaCloud\Tea\Model;

class livenessProbe extends Model
{
    public $tcpSocket;
    public $exec;
    public $httpGet;
    public $initialDelaySeconds;
    public $periodSeconds;
    public $successThreshold;
    public $failureThreshold;
    public $timeoutSeconds;
    protected $_required = [
        'tcpSocket'        => true,
        'exec'             => true,
        'httpGet'          => true,
        'failureThreshold' => true,
    ];
    protected $_name = [
        'tcpSocket'           => 'TcpSocket',
        'exec'                => 'Exec',
        'httpGet'             => 'HttpGet',
        'initialDelaySeconds' => 'InitialDelaySeconds',
        'periodSeconds'       => 'PeriodSeconds',
        'successThreshold'    => 'SuccessThreshold',
        'failureThreshold'    => 'FailureThreshold',
        'timeoutSeconds'      => 'TimeoutSeconds',
    ];
    protected $_description = [
        'tcpSocket'           => 'TcpSocket',
        'exec'                => 'Exec',
        'httpGet'             => 'HttpGet',
        'initialDelaySeconds' => 'livenessProbeInitialDelaySeconds',
        'periodSeconds'       => 'livenessProbePeriodSeconds',
        'successThreshold'    => 'livenessProbeSuccessThreshold',
        'failureThreshold'    => 'livenessProbeFailureThreshold',
        'timeoutSeconds'      => 'livenessProbeTimeoutSeconds',
    ];
}
