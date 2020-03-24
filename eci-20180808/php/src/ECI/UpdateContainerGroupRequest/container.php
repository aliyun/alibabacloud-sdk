<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class container extends Model
{
    public $name;

    public $image;

    public $cpu;

    public $memory;

    public $workingDir;

    public $imagePullPolicy;

    public $stdin;

    public $stdinOnce;

    public $tty;

    public $command;

    public $arg;

    public $environmentVar;

    public $port;

    public $volumeMount;

    public $readinessProbe;

    public $livenessProbe;

    public $securityContext;

    public $gpu;
    protected $_name = [
        'name'            => 'Name',
        'image'           => 'Image',
        'cpu'             => 'Cpu',
        'memory'          => 'Memory',
        'workingDir'      => 'WorkingDir',
        'imagePullPolicy' => 'ImagePullPolicy',
        'stdin'           => 'Stdin',
        'stdinOnce'       => 'StdinOnce',
        'tty'             => 'Tty',
        'command'         => 'Command',
        'arg'             => 'Arg',
        'environmentVar'  => 'EnvironmentVar',
        'port'            => 'Port',
        'volumeMount'     => 'VolumeMount',
        'readinessProbe'  => 'ReadinessProbe',
        'livenessProbe'   => 'LivenessProbe',
        'securityContext' => 'SecurityContext',
        'gpu'             => 'Gpu',
    ];
}
