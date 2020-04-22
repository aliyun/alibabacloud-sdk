<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest;

use AlibabaCloud\SDK\ECI\V20180808\ECI\container\livenessProbe;
use AlibabaCloud\SDK\ECI\V20180808\ECI\container\readinessProbe;
use AlibabaCloud\SDK\ECI\V20180808\ECI\container\securityContext;
use AlibabaCloud\Tea\Model;

class container extends Model
{
    /**
     * @description image
     *
     * @var string
     */
    public $image;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description cpu
     *
     * @var float
     */
    public $cpu;

    /**
     * @description mem
     *
     * @var float
     */
    public $memory;

    /**
     * @description workingDir
     *
     * @var string
     */
    public $workingDir;

    /**
     * @description imagePullPolicy
     *
     * @var string
     */
    public $imagePullPolicy;

    /**
     * @description command
     *
     * @var array
     */
    public $command;

    /**
     * @description args
     *
     * @var array
     */
    public $arg;

    /**
     * @description volumeMounts
     *
     * @var array
     */
    public $volumeMount;

    /**
     * @description ports
     *
     * @var array
     */
    public $port;

    /**
     * @description env
     *
     * @var array
     */
    public $environmentVar;

    /**
     * @description ReadinessProbe
     *
     * @var container.readinessProbe
     */
    public $readinessProbe;

    /**
     * @description LivenessProbe
     *
     * @var container.livenessProbe
     */
    public $livenessProbe;

    /**
     * @description SecurityContext
     *
     * @var container.securityContext
     */
    public $securityContext;

    /**
     * @description stdin
     *
     * @var bool
     */
    public $stdin;

    /**
     * @description stdinOnce
     *
     * @var bool
     */
    public $stdinOnce;

    /**
     * @description tty
     *
     * @var bool
     */
    public $tty;

    /**
     * @description gpu
     *
     * @var int
     */
    public $gpu;

    /**
     * @description lifecyclePostStartHandlerHttpGetHost
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetHost;

    /**
     * @description lifecyclePostStartHandlerHttpGetPort
     *
     * @var int
     */
    public $lifecyclePostStartHandlerHttpGetPort;

    /**
     * @description lifecyclePostStartHandlerHttpGetPath
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetPath;

    /**
     * @description lifecyclePostStartHandlerHttpGetScheme
     *
     * @var string
     */
    public $lifecyclePostStartHandlerHttpGetScheme;

    /**
     * @description lifecyclePostStartHandlerHttpGetHttpHeaders
     *
     * @var array
     */
    public $lifecyclePostStartHandlerHttpGetHttpHeader;

    /**
     * @description lifecyclePostStartHandlerExec
     *
     * @var array
     */
    public $lifecyclePostStartHandlerExec;

    /**
     * @description lifecyclePostStartHandlerTcpSocketHost
     *
     * @var string
     */
    public $lifecyclePostStartHandlerTcpSocketHost;

    /**
     * @description lifecyclePostStartHandlerTcpSocketPort
     *
     * @var int
     */
    public $lifecyclePostStartHandlerTcpSocketPort;

    /**
     * @description lifecyclePreStopHandlerHttpGetHost
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetHost;

    /**
     * @description lifecyclePreStopHandlerHttpGetPort
     *
     * @var int
     */
    public $lifecyclePreStopHandlerHttpGetPort;

    /**
     * @description lifecyclePreStopHandlerHttpGetPath
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetPath;

    /**
     * @description lifecyclePreStopHandlerHttpGetScheme
     *
     * @var string
     */
    public $lifecyclePreStopHandlerHttpGetScheme;

    /**
     * @description lifecyclePreStopHandlerHttpGetHttpHeaders
     *
     * @var array
     */
    public $lifecyclePreStopHandlerHttpGetHttpHeader;

    /**
     * @description lifecyclePreStopHandlerExec
     *
     * @var array
     */
    public $lifecyclePreStopHandlerExec;

    /**
     * @description lifecyclePreStopHandlerTcpSocketHost
     *
     * @var string
     */
    public $lifecyclePreStopHandlerTcpSocketHost;

    /**
     * @description lifecyclePreStopHandlerTcpSocketPort
     *
     * @var int
     */
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

    public function validate()
    {
        Model::validateRequired('image', $this->image, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('readinessProbe', $this->readinessProbe, true);
        Model::validateRequired('livenessProbe', $this->livenessProbe, true);
        Model::validateRequired('securityContext', $this->securityContext, true);
    }

    public function toMap()
    {
        $res                    = [];
        $res['Image']           = $this->image;
        $res['Name']            = $this->name;
        $res['Cpu']             = $this->cpu;
        $res['Memory']          = $this->memory;
        $res['WorkingDir']      = $this->workingDir;
        $res['ImagePullPolicy'] = $this->imagePullPolicy;
        $res['Command']         = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        $res['Arg'] = [];
        if (null !== $this->arg) {
            $res['Arg'] = $this->arg;
        }
        $res['VolumeMount'] = [];
        if (null !== $this->volumeMount && \is_array($this->volumeMount)) {
            $n = 0;
            foreach ($this->volumeMount as $item) {
                $res['VolumeMount'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Port'] = [];
        if (null !== $this->port && \is_array($this->port)) {
            $n = 0;
            foreach ($this->port as $item) {
                $res['Port'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['EnvironmentVar'] = [];
        if (null !== $this->environmentVar && \is_array($this->environmentVar)) {
            $n = 0;
            foreach ($this->environmentVar as $item) {
                $res['EnvironmentVar'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['ReadinessProbe']                             = null !== $this->readinessProbe ? $this->readinessProbe->toMap() : null;
        $res['LivenessProbe']                              = null !== $this->livenessProbe ? $this->livenessProbe->toMap() : null;
        $res['SecurityContext']                            = null !== $this->securityContext ? $this->securityContext->toMap() : null;
        $res['Stdin']                                      = $this->stdin;
        $res['StdinOnce']                                  = $this->stdinOnce;
        $res['Tty']                                        = $this->tty;
        $res['Gpu']                                        = $this->gpu;
        $res['LifecyclePostStartHandlerHttpGetHost']       = $this->lifecyclePostStartHandlerHttpGetHost;
        $res['LifecyclePostStartHandlerHttpGetPort']       = $this->lifecyclePostStartHandlerHttpGetPort;
        $res['LifecyclePostStartHandlerHttpGetPath']       = $this->lifecyclePostStartHandlerHttpGetPath;
        $res['LifecyclePostStartHandlerHttpGetScheme']     = $this->lifecyclePostStartHandlerHttpGetScheme;
        $res['LifecyclePostStartHandlerHttpGetHttpHeader'] = [];
        if (null !== $this->lifecyclePostStartHandlerHttpGetHttpHeader && \is_array($this->lifecyclePostStartHandlerHttpGetHttpHeader)) {
            $n = 0;
            foreach ($this->lifecyclePostStartHandlerHttpGetHttpHeader as $item) {
                $res['LifecyclePostStartHandlerHttpGetHttpHeader'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['LifecyclePostStartHandlerExec'] = [];
        if (null !== $this->lifecyclePostStartHandlerExec) {
            $res['LifecyclePostStartHandlerExec'] = $this->lifecyclePostStartHandlerExec;
        }
        $res['LifecyclePostStartHandlerTcpSocketHost']   = $this->lifecyclePostStartHandlerTcpSocketHost;
        $res['LifecyclePostStartHandlerTcpSocketPort']   = $this->lifecyclePostStartHandlerTcpSocketPort;
        $res['LifecyclePreStopHandlerHttpGetHost']       = $this->lifecyclePreStopHandlerHttpGetHost;
        $res['LifecyclePreStopHandlerHttpGetPort']       = $this->lifecyclePreStopHandlerHttpGetPort;
        $res['LifecyclePreStopHandlerHttpGetPath']       = $this->lifecyclePreStopHandlerHttpGetPath;
        $res['LifecyclePreStopHandlerHttpGetScheme']     = $this->lifecyclePreStopHandlerHttpGetScheme;
        $res['LifecyclePreStopHandlerHttpGetHttpHeader'] = [];
        if (null !== $this->lifecyclePreStopHandlerHttpGetHttpHeader && \is_array($this->lifecyclePreStopHandlerHttpGetHttpHeader)) {
            $n = 0;
            foreach ($this->lifecyclePreStopHandlerHttpGetHttpHeader as $item) {
                $res['LifecyclePreStopHandlerHttpGetHttpHeader'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['LifecyclePreStopHandlerExec'] = [];
        if (null !== $this->lifecyclePreStopHandlerExec) {
            $res['LifecyclePreStopHandlerExec'] = $this->lifecyclePreStopHandlerExec;
        }
        $res['LifecyclePreStopHandlerTcpSocketHost'] = $this->lifecyclePreStopHandlerTcpSocketHost;
        $res['LifecyclePreStopHandlerTcpSocketPort'] = $this->lifecyclePreStopHandlerTcpSocketPort;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return container
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }
        if (isset($map['ImagePullPolicy'])) {
            $model->imagePullPolicy = $map['ImagePullPolicy'];
        }
        if (isset($map['Command'])) {
            if (!empty($map['Command'])) {
                $model->command = [];
                $model->command = $map['Command'];
            }
        }
        if (isset($map['Arg'])) {
            if (!empty($map['Arg'])) {
                $model->arg = [];
                $model->arg = $map['Arg'];
            }
        }
        if (isset($map['VolumeMount'])) {
            if (!empty($map['VolumeMount'])) {
                $model->volumeMount = [];
                $n                  = 0;
                foreach ($map['VolumeMount'] as $item) {
                    $model->volumeMount[$n++] = null !== $item ? CreateContainerGroupRequest\container\volumeMount::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Port'])) {
            if (!empty($map['Port'])) {
                $model->port = [];
                $n           = 0;
                foreach ($map['Port'] as $item) {
                    $model->port[$n++] = null !== $item ? CreateContainerGroupRequest\container\port::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnvironmentVar'])) {
            if (!empty($map['EnvironmentVar'])) {
                $model->environmentVar = [];
                $n                     = 0;
                foreach ($map['EnvironmentVar'] as $item) {
                    $model->environmentVar[$n++] = null !== $item ? CreateContainerGroupRequest\container\environmentVar::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReadinessProbe'])) {
            $model->readinessProbe = container\readinessProbe::fromMap($map['ReadinessProbe']);
        }
        if (isset($map['LivenessProbe'])) {
            $model->livenessProbe = container\livenessProbe::fromMap($map['LivenessProbe']);
        }
        if (isset($map['SecurityContext'])) {
            $model->securityContext = container\securityContext::fromMap($map['SecurityContext']);
        }
        if (isset($map['Stdin'])) {
            $model->stdin = $map['Stdin'];
        }
        if (isset($map['StdinOnce'])) {
            $model->stdinOnce = $map['StdinOnce'];
        }
        if (isset($map['Tty'])) {
            $model->tty = $map['Tty'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['LifecyclePostStartHandlerHttpGetHost'])) {
            $model->lifecyclePostStartHandlerHttpGetHost = $map['LifecyclePostStartHandlerHttpGetHost'];
        }
        if (isset($map['LifecyclePostStartHandlerHttpGetPort'])) {
            $model->lifecyclePostStartHandlerHttpGetPort = $map['LifecyclePostStartHandlerHttpGetPort'];
        }
        if (isset($map['LifecyclePostStartHandlerHttpGetPath'])) {
            $model->lifecyclePostStartHandlerHttpGetPath = $map['LifecyclePostStartHandlerHttpGetPath'];
        }
        if (isset($map['LifecyclePostStartHandlerHttpGetScheme'])) {
            $model->lifecyclePostStartHandlerHttpGetScheme = $map['LifecyclePostStartHandlerHttpGetScheme'];
        }
        if (isset($map['LifecyclePostStartHandlerHttpGetHttpHeader'])) {
            if (!empty($map['LifecyclePostStartHandlerHttpGetHttpHeader'])) {
                $model->lifecyclePostStartHandlerHttpGetHttpHeader = [];
                $n                                                 = 0;
                foreach ($map['LifecyclePostStartHandlerHttpGetHttpHeader'] as $item) {
                    $model->lifecyclePostStartHandlerHttpGetHttpHeader[$n++] = null !== $item ? CreateContainerGroupRequest\container\lifecyclePostStartHandlerHttpGetHttpHeader::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LifecyclePostStartHandlerExec'])) {
            if (!empty($map['LifecyclePostStartHandlerExec'])) {
                $model->lifecyclePostStartHandlerExec = [];
                $model->lifecyclePostStartHandlerExec = $map['LifecyclePostStartHandlerExec'];
            }
        }
        if (isset($map['LifecyclePostStartHandlerTcpSocketHost'])) {
            $model->lifecyclePostStartHandlerTcpSocketHost = $map['LifecyclePostStartHandlerTcpSocketHost'];
        }
        if (isset($map['LifecyclePostStartHandlerTcpSocketPort'])) {
            $model->lifecyclePostStartHandlerTcpSocketPort = $map['LifecyclePostStartHandlerTcpSocketPort'];
        }
        if (isset($map['LifecyclePreStopHandlerHttpGetHost'])) {
            $model->lifecyclePreStopHandlerHttpGetHost = $map['LifecyclePreStopHandlerHttpGetHost'];
        }
        if (isset($map['LifecyclePreStopHandlerHttpGetPort'])) {
            $model->lifecyclePreStopHandlerHttpGetPort = $map['LifecyclePreStopHandlerHttpGetPort'];
        }
        if (isset($map['LifecyclePreStopHandlerHttpGetPath'])) {
            $model->lifecyclePreStopHandlerHttpGetPath = $map['LifecyclePreStopHandlerHttpGetPath'];
        }
        if (isset($map['LifecyclePreStopHandlerHttpGetScheme'])) {
            $model->lifecyclePreStopHandlerHttpGetScheme = $map['LifecyclePreStopHandlerHttpGetScheme'];
        }
        if (isset($map['LifecyclePreStopHandlerHttpGetHttpHeader'])) {
            if (!empty($map['LifecyclePreStopHandlerHttpGetHttpHeader'])) {
                $model->lifecyclePreStopHandlerHttpGetHttpHeader = [];
                $n                                               = 0;
                foreach ($map['LifecyclePreStopHandlerHttpGetHttpHeader'] as $item) {
                    $model->lifecyclePreStopHandlerHttpGetHttpHeader[$n++] = null !== $item ? CreateContainerGroupRequest\container\lifecyclePreStopHandlerHttpGetHttpHeader::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LifecyclePreStopHandlerExec'])) {
            if (!empty($map['LifecyclePreStopHandlerExec'])) {
                $model->lifecyclePreStopHandlerExec = [];
                $model->lifecyclePreStopHandlerExec = $map['LifecyclePreStopHandlerExec'];
            }
        }
        if (isset($map['LifecyclePreStopHandlerTcpSocketHost'])) {
            $model->lifecyclePreStopHandlerTcpSocketHost = $map['LifecyclePreStopHandlerTcpSocketHost'];
        }
        if (isset($map['LifecyclePreStopHandlerTcpSocketPort'])) {
            $model->lifecyclePreStopHandlerTcpSocketPort = $map['LifecyclePreStopHandlerTcpSocketPort'];
        }

        return $model;
    }
}
