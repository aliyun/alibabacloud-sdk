<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template;

use AlibabaCloud\Tea\Model;

class spec extends Model
{
    public $restartPolicy;
    public $dnsPolicy;
    public $volumes;
    public $initContainers;
    public $containers;
    public $dnsConfig;
    public $securityContext;
    protected $_required = [
        'restartPolicy'   => true,
        'dnsPolicy'       => true,
        'volumes'         => true,
        'initContainers'  => true,
        'containers'      => true,
        'dnsConfig'       => true,
        'securityContext' => true,
    ];
    protected $_name = [
        'restartPolicy'   => 'RestartPolicy',
        'dnsPolicy'       => 'DnsPolicy',
        'volumes'         => 'Volumes',
        'initContainers'  => 'InitContainers',
        'containers'      => 'Containers',
        'dnsConfig'       => 'DnsConfig',
        'securityContext' => 'SecurityContext',
    ];
    protected $_description = [
        'restartPolicy'   => 'restartPolicy',
        'dnsPolicy'       => 'dnsPolicy',
        'volumes'         => 'volumes',
        'initContainers'  => 'initContainers',
        'containers'      => 'containers',
        'dnsConfig'       => 'dnsConfig',
        'securityContext' => 'podSecurityContext',
    ];
}
