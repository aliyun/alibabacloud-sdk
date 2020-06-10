<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\environmentVar;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\lifecyclePostStartHandlerHttpGetHttpHeader;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\lifecyclePreStopHandlerHttpGetHttpHeader;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\livenessProbe;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\port;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\readinessProbe;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\volumeMount;
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
     * @var readinessProbe
     */
    public $readinessProbe;

    /**
     * @description LivenessProbe
     *
     * @var livenessProbe
     */
    public $livenessProbe;

    /**
     * @description SecurityContext
     *
     * @var securityContext
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

    /**
     * @description terminationMessagePath
     *
     * @var string
     */
    public $terminationMessagePath;

    /**
     * @description terminationMessagePolicy
     *
     * @var string
     */
    public $terminationMessagePolicy;
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
        'terminationMessagePath'                     => 'TerminationMessagePath',
        'terminationMessagePolicy'                   => 'TerminationMessagePolicy',
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
        $res = [];
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }
        if (null !== $this->imagePullPolicy) {
            $res['ImagePullPolicy'] = $this->imagePullPolicy;
        }
        if (null !== $this->command) {
            $res['Command'] = [];
            if (null !== $this->command) {
                $res['Command'] = $this->command;
            }
        }
        if (null !== $this->arg) {
            $res['Arg'] = [];
            if (null !== $this->arg) {
                $res['Arg'] = $this->arg;
            }
        }
        if (null !== $this->volumeMount) {
            $res['VolumeMount'] = [];
            if (null !== $this->volumeMount && \is_array($this->volumeMount)) {
                $n = 0;
                foreach ($this->volumeMount as $item) {
                    $res['VolumeMount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->port) {
            $res['Port'] = [];
            if (null !== $this->port && \is_array($this->port)) {
                $n = 0;
                foreach ($this->port as $item) {
                    $res['Port'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->environmentVar) {
            $res['EnvironmentVar'] = [];
            if (null !== $this->environmentVar && \is_array($this->environmentVar)) {
                $n = 0;
                foreach ($this->environmentVar as $item) {
                    $res['EnvironmentVar'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->readinessProbe) {
            $res['ReadinessProbe'] = null !== $this->readinessProbe ? $this->readinessProbe->toMap() : null;
        }
        if (null !== $this->livenessProbe) {
            $res['LivenessProbe'] = null !== $this->livenessProbe ? $this->livenessProbe->toMap() : null;
        }
        if (null !== $this->securityContext) {
            $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toMap() : null;
        }
        if (null !== $this->stdin) {
            $res['Stdin'] = $this->stdin;
        }
        if (null !== $this->stdinOnce) {
            $res['StdinOnce'] = $this->stdinOnce;
        }
        if (null !== $this->tty) {
            $res['Tty'] = $this->tty;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->lifecyclePostStartHandlerHttpGetHost) {
            $res['LifecyclePostStartHandlerHttpGetHost'] = $this->lifecyclePostStartHandlerHttpGetHost;
        }
        if (null !== $this->lifecyclePostStartHandlerHttpGetPort) {
            $res['LifecyclePostStartHandlerHttpGetPort'] = $this->lifecyclePostStartHandlerHttpGetPort;
        }
        if (null !== $this->lifecyclePostStartHandlerHttpGetPath) {
            $res['LifecyclePostStartHandlerHttpGetPath'] = $this->lifecyclePostStartHandlerHttpGetPath;
        }
        if (null !== $this->lifecyclePostStartHandlerHttpGetScheme) {
            $res['LifecyclePostStartHandlerHttpGetScheme'] = $this->lifecyclePostStartHandlerHttpGetScheme;
        }
        if (null !== $this->lifecyclePostStartHandlerHttpGetHttpHeader) {
            $res['LifecyclePostStartHandlerHttpGetHttpHeader'] = [];
            if (null !== $this->lifecyclePostStartHandlerHttpGetHttpHeader && \is_array($this->lifecyclePostStartHandlerHttpGetHttpHeader)) {
                $n = 0;
                foreach ($this->lifecyclePostStartHandlerHttpGetHttpHeader as $item) {
                    $res['LifecyclePostStartHandlerHttpGetHttpHeader'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lifecyclePostStartHandlerExec) {
            $res['LifecyclePostStartHandlerExec'] = [];
            if (null !== $this->lifecyclePostStartHandlerExec) {
                $res['LifecyclePostStartHandlerExec'] = $this->lifecyclePostStartHandlerExec;
            }
        }
        if (null !== $this->lifecyclePostStartHandlerTcpSocketHost) {
            $res['LifecyclePostStartHandlerTcpSocketHost'] = $this->lifecyclePostStartHandlerTcpSocketHost;
        }
        if (null !== $this->lifecyclePostStartHandlerTcpSocketPort) {
            $res['LifecyclePostStartHandlerTcpSocketPort'] = $this->lifecyclePostStartHandlerTcpSocketPort;
        }
        if (null !== $this->lifecyclePreStopHandlerHttpGetHost) {
            $res['LifecyclePreStopHandlerHttpGetHost'] = $this->lifecyclePreStopHandlerHttpGetHost;
        }
        if (null !== $this->lifecyclePreStopHandlerHttpGetPort) {
            $res['LifecyclePreStopHandlerHttpGetPort'] = $this->lifecyclePreStopHandlerHttpGetPort;
        }
        if (null !== $this->lifecyclePreStopHandlerHttpGetPath) {
            $res['LifecyclePreStopHandlerHttpGetPath'] = $this->lifecyclePreStopHandlerHttpGetPath;
        }
        if (null !== $this->lifecyclePreStopHandlerHttpGetScheme) {
            $res['LifecyclePreStopHandlerHttpGetScheme'] = $this->lifecyclePreStopHandlerHttpGetScheme;
        }
        if (null !== $this->lifecyclePreStopHandlerHttpGetHttpHeader) {
            $res['LifecyclePreStopHandlerHttpGetHttpHeader'] = [];
            if (null !== $this->lifecyclePreStopHandlerHttpGetHttpHeader && \is_array($this->lifecyclePreStopHandlerHttpGetHttpHeader)) {
                $n = 0;
                foreach ($this->lifecyclePreStopHandlerHttpGetHttpHeader as $item) {
                    $res['LifecyclePreStopHandlerHttpGetHttpHeader'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lifecyclePreStopHandlerExec) {
            $res['LifecyclePreStopHandlerExec'] = [];
            if (null !== $this->lifecyclePreStopHandlerExec) {
                $res['LifecyclePreStopHandlerExec'] = $this->lifecyclePreStopHandlerExec;
            }
        }
        if (null !== $this->lifecyclePreStopHandlerTcpSocketHost) {
            $res['LifecyclePreStopHandlerTcpSocketHost'] = $this->lifecyclePreStopHandlerTcpSocketHost;
        }
        if (null !== $this->lifecyclePreStopHandlerTcpSocketPort) {
            $res['LifecyclePreStopHandlerTcpSocketPort'] = $this->lifecyclePreStopHandlerTcpSocketPort;
        }
        if (null !== $this->terminationMessagePath) {
            $res['TerminationMessagePath'] = $this->terminationMessagePath;
        }
        if (null !== $this->terminationMessagePolicy) {
            $res['TerminationMessagePolicy'] = $this->terminationMessagePolicy;
        }

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
                    $model->volumeMount[$n++] = null !== $item ? volumeMount::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Port'])) {
            if (!empty($map['Port'])) {
                $model->port = [];
                $n           = 0;
                foreach ($map['Port'] as $item) {
                    $model->port[$n++] = null !== $item ? port::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnvironmentVar'])) {
            if (!empty($map['EnvironmentVar'])) {
                $model->environmentVar = [];
                $n                     = 0;
                foreach ($map['EnvironmentVar'] as $item) {
                    $model->environmentVar[$n++] = null !== $item ? environmentVar::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReadinessProbe'])) {
            $model->readinessProbe = readinessProbe::fromMap($map['ReadinessProbe']);
        }
        if (isset($map['LivenessProbe'])) {
            $model->livenessProbe = livenessProbe::fromMap($map['LivenessProbe']);
        }
        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
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
                    $model->lifecyclePostStartHandlerHttpGetHttpHeader[$n++] = null !== $item ? lifecyclePostStartHandlerHttpGetHttpHeader::fromMap($item) : $item;
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
                    $model->lifecyclePreStopHandlerHttpGetHttpHeader[$n++] = null !== $item ? lifecyclePreStopHandlerHttpGetHttpHeader::fromMap($item) : $item;
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
        if (isset($map['TerminationMessagePath'])) {
            $model->terminationMessagePath = $map['TerminationMessagePath'];
        }
        if (isset($map['TerminationMessagePolicy'])) {
            $model->terminationMessagePolicy = $map['TerminationMessagePolicy'];
        }

        return $model;
    }
}
