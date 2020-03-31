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
    protected $_required = [
        'name'            => true,
        'image'           => true,
        'imagePullPolicy' => true,
        'stdin'           => true,
        'stdinOnce'       => true,
        'tty'             => true,
        'workingDir'      => true,
        'env'             => true,
        'ports'           => true,
        'volumeMounts'    => true,
        'securityContext' => true,
        'resources'       => true,
        'command'         => true,
        'args'            => true,
    ];
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
    protected $_description = [
        'name'            => 'name',
        'image'           => 'image',
        'imagePullPolicy' => 'imagePullPolicy',
        'stdin'           => 'stdin',
        'stdinOnce'       => 'stdinOnce',
        'tty'             => 'tty',
        'workingDir'      => 'workingDir',
        'env'             => 'env',
        'ports'           => 'ports',
        'volumeMounts'    => 'volumeMounts',
        'securityContext' => 'securityContext',
        'resources'       => 'resources',
        'command'         => 'command',
        'args'            => 'args',
    ];
}
