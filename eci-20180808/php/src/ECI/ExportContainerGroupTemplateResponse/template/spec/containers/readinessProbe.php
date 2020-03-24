<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template\spec\containers;

use AlibabaCloud\Tea\Model;

class readinessProbe extends Model
{
    public $initialDelaySeconds;

    public $periodSeconds;

    public $successThreshold;

    public $failureThreshold;

    public $timeoutSeconds;

    public $exec;

    public $tcpSocket;

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
}
