<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class initContainer extends Model
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
        'securityContext' => 'SecurityContext',
        'gpu'             => 'Gpu',
    ];
    protected $_description = [
        'name'            => 'name',
        'image'           => 'image',
        'cpu'             => 'cpu',
        'memory'          => 'mem',
        'workingDir'      => 'workingDir',
        'imagePullPolicy' => 'imagePullPolicy',
        'stdin'           => 'stdin',
        'stdinOnce'       => 'stdinOnce',
        'tty'             => 'tty',
        'command'         => 'command',
        'arg'             => 'args',
        'environmentVar'  => 'env',
        'port'            => 'ports',
        'volumeMount'     => 'volumeMounts',
        'securityContext' => 'SecurityContext',
        'gpu'             => 'gpu',
    ];
    protected $_required = [
        'command'         => true,
        'arg'             => true,
        'environmentVar'  => true,
        'port'            => true,
        'volumeMount'     => true,
        'securityContext' => true,
    ];
}
