<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class container extends Model
{
    public $image;

    public $name;

    public $cpu;

    public $memory;

    public $workingDir;

    public $imagePullPolicy;

    public $command;

    public $arg;

    public $volumeMount;

    public $port;

    public $environmentVar;

    public $readinessProbe;

    public $livenessProbe;

    public $securityContext;

    public $stdin;

    public $stdinOnce;

    public $tty;

    public $gpu;

    public $lifecyclePostStartHandlerHttpGetHost;

    public $lifecyclePostStartHandlerHttpGetPort;

    public $lifecyclePostStartHandlerHttpGetPath;

    public $lifecyclePostStartHandlerHttpGetScheme;

    public $lifecyclePostStartHandlerHttpGetHttpHeader;

    public $lifecyclePostStartHandlerExec;

    public $lifecyclePostStartHandlerTcpSocketHost;

    public $lifecyclePostStartHandlerTcpSocketPort;

    public $lifecyclePreStopHandlerHttpGetHost;

    public $lifecyclePreStopHandlerHttpGetPort;

    public $lifecyclePreStopHandlerHttpGetPath;

    public $lifecyclePreStopHandlerHttpGetScheme;

    public $lifecyclePreStopHandlerHttpGetHttpHeader;

    public $lifecyclePreStopHandlerExec;

    public $lifecyclePreStopHandlerTcpSocketHost;

    public $lifecyclePreStopHandlerTcpSocketPort;
    protected $_name = [
        'image'                                      => 'Image',
        'name'                                       => 'Name',
        'cpu'                                        => 'Cpu',
        'memory'                                     => 'Memory',
        'workingDir'                                 => 'WorkingDir',
        'imagePullPolicy'                            => 'ImagePullPolicy',
        'command'                                    => 'Command',
        'arg'                                        => 'Arg',
        'volumeMount'                                => 'VolumeMount',
        'port'                                       => 'Port',
        'environmentVar'                             => 'EnvironmentVar',
        'readinessProbe'                             => 'ReadinessProbe',
        'livenessProbe'                              => 'LivenessProbe',
        'securityContext'                            => 'SecurityContext',
        'stdin'                                      => 'Stdin',
        'stdinOnce'                                  => 'StdinOnce',
        'tty'                                        => 'Tty',
        'gpu'                                        => 'Gpu',
        'lifecyclePostStartHandlerHttpGetHost'       => 'LifecyclePostStartHandlerHttpGetHost',
        'lifecyclePostStartHandlerHttpGetPort'       => 'LifecyclePostStartHandlerHttpGetPort',
        'lifecyclePostStartHandlerHttpGetPath'       => 'LifecyclePostStartHandlerHttpGetPath',
        'lifecyclePostStartHandlerHttpGetScheme'     => 'LifecyclePostStartHandlerHttpGetScheme',
        'lifecyclePostStartHandlerHttpGetHttpHeader' => 'LifecyclePostStartHandlerHttpGetHttpHeader',
        'lifecyclePostStartHandlerExec'              => 'LifecyclePostStartHandlerExec',
        'lifecyclePostStartHandlerTcpSocketHost'     => 'LifecyclePostStartHandlerTcpSocketHost',
        'lifecyclePostStartHandlerTcpSocketPort'     => 'LifecyclePostStartHandlerTcpSocketPort',
        'lifecyclePreStopHandlerHttpGetHost'         => 'LifecyclePreStopHandlerHttpGetHost',
        'lifecyclePreStopHandlerHttpGetPort'         => 'LifecyclePreStopHandlerHttpGetPort',
        'lifecyclePreStopHandlerHttpGetPath'         => 'LifecyclePreStopHandlerHttpGetPath',
        'lifecyclePreStopHandlerHttpGetScheme'       => 'LifecyclePreStopHandlerHttpGetScheme',
        'lifecyclePreStopHandlerHttpGetHttpHeader'   => 'LifecyclePreStopHandlerHttpGetHttpHeader',
        'lifecyclePreStopHandlerExec'                => 'LifecyclePreStopHandlerExec',
        'lifecyclePreStopHandlerTcpSocketHost'       => 'LifecyclePreStopHandlerTcpSocketHost',
        'lifecyclePreStopHandlerTcpSocketPort'       => 'LifecyclePreStopHandlerTcpSocketPort',
    ];
}
