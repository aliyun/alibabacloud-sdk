<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups;

use AlibabaCloud\Tea\Model;

class containers extends Model
{
    public $name;
    public $image;
    public $memory;
    public $cpu;
    public $restartCount;
    public $workingDir;
    public $imagePullPolicy;
    public $ready;
    public $gpu;
    public $stdin;
    public $stdinOnce;
    public $tty;
    public $volumeMounts;
    public $ports;
    public $environmentVars;
    public $previousState;
    public $currentState;
    public $readinessProbe;
    public $livenessProbe;
    public $securityContext;
    public $commands;
    public $args;
    protected $_required = [
        'name'            => true,
        'image'           => true,
        'memory'          => true,
        'cpu'             => true,
        'restartCount'    => true,
        'workingDir'      => true,
        'imagePullPolicy' => true,
        'ready'           => true,
        'gpu'             => true,
        'stdin'           => true,
        'stdinOnce'       => true,
        'tty'             => true,
        'volumeMounts'    => true,
        'ports'           => true,
        'environmentVars' => true,
        'previousState'   => true,
        'currentState'    => true,
        'readinessProbe'  => true,
        'livenessProbe'   => true,
        'securityContext' => true,
        'commands'        => true,
        'args'            => true,
    ];
    protected $_name = [
        'name'            => 'Name',
        'image'           => 'Image',
        'memory'          => 'Memory',
        'cpu'             => 'Cpu',
        'restartCount'    => 'RestartCount',
        'workingDir'      => 'WorkingDir',
        'imagePullPolicy' => 'ImagePullPolicy',
        'ready'           => 'Ready',
        'gpu'             => 'Gpu',
        'stdin'           => 'Stdin',
        'stdinOnce'       => 'StdinOnce',
        'tty'             => 'Tty',
        'volumeMounts'    => 'VolumeMounts',
        'ports'           => 'Ports',
        'environmentVars' => 'EnvironmentVars',
        'previousState'   => 'PreviousState',
        'currentState'    => 'CurrentState',
        'readinessProbe'  => 'ReadinessProbe',
        'livenessProbe'   => 'LivenessProbe',
        'securityContext' => 'SecurityContext',
        'commands'        => 'Commands',
        'args'            => 'Args',
    ];
    protected $_description = [
        'name'            => 'name',
        'image'           => 'image',
        'memory'          => 'bigMemForPop',
        'cpu'             => 'bigCpuForPop',
        'restartCount'    => 'restartCount',
        'workingDir'      => 'workingDir',
        'imagePullPolicy' => 'imagePullPolicy',
        'ready'           => 'ready',
        'gpu'             => 'gpu',
        'stdin'           => 'stdin',
        'stdinOnce'       => 'stdinOnce',
        'tty'             => 'tty',
        'volumeMounts'    => 'volumeMounts',
        'ports'           => 'ports',
        'environmentVars' => 'env',
        'previousState'   => 'previousState',
        'currentState'    => 'currentState',
        'readinessProbe'  => 'innerReadinessProbe',
        'livenessProbe'   => 'innerLivenessProbe',
        'securityContext' => 'securityContext',
        'commands'        => 'command',
        'args'            => 'args',
    ];
}
