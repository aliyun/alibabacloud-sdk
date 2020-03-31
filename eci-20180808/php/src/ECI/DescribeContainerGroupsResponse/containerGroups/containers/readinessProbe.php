<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups\containers;

use AlibabaCloud\Tea\Model;

class readinessProbe extends Model
{
    public $initialDelaySeconds;
    public $periodSeconds;
    public $timeoutSeconds;
    public $successThreshold;
    public $failureThreshold;
    public $httpGet;
    public $tcpSocket;
    public $execs;
    protected $_required = [
        'initialDelaySeconds' => true,
        'periodSeconds'       => true,
        'timeoutSeconds'      => true,
        'successThreshold'    => true,
        'failureThreshold'    => true,
        'httpGet'             => true,
        'tcpSocket'           => true,
        'execs'               => true,
    ];
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
    protected $_description = [
        'initialDelaySeconds' => 'initialDelaySeconds',
        'periodSeconds'       => 'periodSeconds',
        'timeoutSeconds'      => 'timeoutSeconds',
        'successThreshold'    => 'successThreshold',
        'failureThreshold'    => 'failureThreshold',
        'httpGet'             => 'httpGet',
        'tcpSocket'           => 'tcpSocket',
        'execs'               => 'exec',
    ];
}
