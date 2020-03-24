<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class initContainer extends Model
{
    public $name;

    public $image;

    public $cpu;

    public $memory;

    public $workingDir;

    public $imagePullPolicy;

    public $command;

    public $arg;

    public $volumeMount;

    public $port;

    public $environmentVar;

    public $securityContext;

    public $gpu;
    protected $_name = [
        'name'            => 'Name',
        'image'           => 'Image',
        'cpu'             => 'Cpu',
        'memory'          => 'Memory',
        'workingDir'      => 'WorkingDir',
        'imagePullPolicy' => 'ImagePullPolicy',
        'command'         => 'Command',
        'arg'             => 'Arg',
        'volumeMount'     => 'VolumeMount',
        'port'            => 'Port',
        'environmentVar'  => 'EnvironmentVar',
        'securityContext' => 'SecurityContext',
        'gpu'             => 'Gpu',
    ];
}
