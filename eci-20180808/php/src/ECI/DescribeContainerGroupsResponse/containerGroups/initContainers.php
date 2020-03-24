<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups;

use AlibabaCloud\Tea\Model;

class initContainers extends Model
{
    public $name;

    public $image;

    public $cpu;

    public $memory;

    public $restartCount;

    public $workingDir;

    public $imagePullPolicy;

    public $ready;

    public $gpu;

    public $volumeMounts;

    public $ports;

    public $environmentVars;

    public $previousState;

    public $currentState;

    public $securityContext;

    public $command;

    public $args;
    protected $_name = [
        'name'            => 'Name',
        'image'           => 'Image',
        'cpu'             => 'Cpu',
        'memory'          => 'Memory',
        'restartCount'    => 'RestartCount',
        'workingDir'      => 'WorkingDir',
        'imagePullPolicy' => 'ImagePullPolicy',
        'ready'           => 'Ready',
        'gpu'             => 'Gpu',
        'volumeMounts'    => 'VolumeMounts',
        'ports'           => 'Ports',
        'environmentVars' => 'EnvironmentVars',
        'previousState'   => 'PreviousState',
        'currentState'    => 'CurrentState',
        'securityContext' => 'SecurityContext',
        'command'         => 'Command',
        'args'            => 'Args',
    ];
}
