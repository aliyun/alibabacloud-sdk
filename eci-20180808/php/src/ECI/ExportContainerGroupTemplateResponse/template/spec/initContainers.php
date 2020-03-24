<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template\spec;

use AlibabaCloud\Tea\Model;

class initContainers extends Model
{
    public $name;

    public $image;

    public $imagePullPolicy;

    public $stdin;

    public $stdinOnce;

    public $tty;

    public $workingDir;

    public $env;

    public $ports;

    public $volumeMounts;

    public $securityContext;

    public $resources;

    public $command;

    public $args;
    protected $_name = [
        'name'            => 'Name',
        'image'           => 'Image',
        'imagePullPolicy' => 'ImagePullPolicy',
        'stdin'           => 'Stdin',
        'stdinOnce'       => 'StdinOnce',
        'tty'             => 'Tty',
        'workingDir'      => 'WorkingDir',
        'env'             => 'Env',
        'ports'           => 'Ports',
        'volumeMounts'    => 'VolumeMounts',
        'securityContext' => 'SecurityContext',
        'resources'       => 'Resources',
        'command'         => 'Command',
        'args'            => 'Args',
    ];
}
