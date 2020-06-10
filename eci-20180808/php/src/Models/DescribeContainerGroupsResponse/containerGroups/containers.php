<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers\currentState;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers\environmentVars;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers\livenessProbe;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers\ports;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers\previousState;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers\readinessProbe;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\containers\volumeMounts;
use AlibabaCloud\Tea\Model;

class containers extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description image
     *
     * @var string
     */
    public $image;

    /**
     * @description bigMemForPop
     *
     * @var float
     */
    public $memory;

    /**
     * @description bigCpuForPop
     *
     * @var float
     */
    public $cpu;

    /**
     * @description restartCount
     *
     * @var int
     */
    public $restartCount;

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
     * @description ready
     *
     * @var bool
     */
    public $ready;

    /**
     * @description gpu
     *
     * @var int
     */
    public $gpu;

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
     * @description volumeMounts
     *
     * @var array
     */
    public $volumeMounts;

    /**
     * @description ports
     *
     * @var array
     */
    public $ports;

    /**
     * @description env
     *
     * @var array
     */
    public $environmentVars;

    /**
     * @description previousState
     *
     * @var previousState
     */
    public $previousState;

    /**
     * @description currentState
     *
     * @var currentState
     */
    public $currentState;

    /**
     * @description innerReadinessProbe
     *
     * @var readinessProbe
     */
    public $readinessProbe;

    /**
     * @description innerLivenessProbe
     *
     * @var livenessProbe
     */
    public $livenessProbe;

    /**
     * @description securityContext
     *
     * @var securityContext
     */
    public $securityContext;

    /**
     * @description command
     *
     * @var array
     */
    public $commands;

    /**
     * @description args
     *
     * @var array
     */
    public $args;
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

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('image', $this->image, true);
        Model::validateRequired('memory', $this->memory, true);
        Model::validateRequired('cpu', $this->cpu, true);
        Model::validateRequired('restartCount', $this->restartCount, true);
        Model::validateRequired('workingDir', $this->workingDir, true);
        Model::validateRequired('imagePullPolicy', $this->imagePullPolicy, true);
        Model::validateRequired('ready', $this->ready, true);
        Model::validateRequired('gpu', $this->gpu, true);
        Model::validateRequired('stdin', $this->stdin, true);
        Model::validateRequired('stdinOnce', $this->stdinOnce, true);
        Model::validateRequired('tty', $this->tty, true);
        Model::validateRequired('volumeMounts', $this->volumeMounts, true);
        Model::validateRequired('ports', $this->ports, true);
        Model::validateRequired('environmentVars', $this->environmentVars, true);
        Model::validateRequired('previousState', $this->previousState, true);
        Model::validateRequired('currentState', $this->currentState, true);
        Model::validateRequired('readinessProbe', $this->readinessProbe, true);
        Model::validateRequired('livenessProbe', $this->livenessProbe, true);
        Model::validateRequired('securityContext', $this->securityContext, true);
        Model::validateRequired('commands', $this->commands, true);
        Model::validateRequired('args', $this->args, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->restartCount) {
            $res['RestartCount'] = $this->restartCount;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }
        if (null !== $this->imagePullPolicy) {
            $res['ImagePullPolicy'] = $this->imagePullPolicy;
        }
        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
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
        if (null !== $this->volumeMounts) {
            $res['VolumeMounts'] = [];
            if (null !== $this->volumeMounts && \is_array($this->volumeMounts)) {
                $n = 0;
                foreach ($this->volumeMounts as $item) {
                    $res['VolumeMounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ports) {
            $res['Ports'] = [];
            if (null !== $this->ports && \is_array($this->ports)) {
                $n = 0;
                foreach ($this->ports as $item) {
                    $res['Ports'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->environmentVars) {
            $res['EnvironmentVars'] = [];
            if (null !== $this->environmentVars && \is_array($this->environmentVars)) {
                $n = 0;
                foreach ($this->environmentVars as $item) {
                    $res['EnvironmentVars'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->previousState) {
            $res['PreviousState'] = null !== $this->previousState ? $this->previousState->toMap() : null;
        }
        if (null !== $this->currentState) {
            $res['CurrentState'] = null !== $this->currentState ? $this->currentState->toMap() : null;
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
        if (null !== $this->commands) {
            $res['Commands'] = [];
            if (null !== $this->commands) {
                $res['Commands'] = $this->commands;
            }
        }
        if (null !== $this->args) {
            $res['Args'] = [];
            if (null !== $this->args) {
                $res['Args'] = $this->args;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['RestartCount'])) {
            $model->restartCount = $map['RestartCount'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }
        if (isset($map['ImagePullPolicy'])) {
            $model->imagePullPolicy = $map['ImagePullPolicy'];
        }
        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
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
        if (isset($map['VolumeMounts'])) {
            if (!empty($map['VolumeMounts'])) {
                $model->volumeMounts = [];
                $n                   = 0;
                foreach ($map['VolumeMounts'] as $item) {
                    $model->volumeMounts[$n++] = null !== $item ? volumeMounts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = [];
                $n            = 0;
                foreach ($map['Ports'] as $item) {
                    $model->ports[$n++] = null !== $item ? ports::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnvironmentVars'])) {
            if (!empty($map['EnvironmentVars'])) {
                $model->environmentVars = [];
                $n                      = 0;
                foreach ($map['EnvironmentVars'] as $item) {
                    $model->environmentVars[$n++] = null !== $item ? environmentVars::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PreviousState'])) {
            $model->previousState = previousState::fromMap($map['PreviousState']);
        }
        if (isset($map['CurrentState'])) {
            $model->currentState = currentState::fromMap($map['CurrentState']);
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
        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = [];
                $model->commands = $map['Commands'];
            }
        }
        if (isset($map['Args'])) {
            if (!empty($map['Args'])) {
                $model->args = [];
                $model->args = $map['Args'];
            }
        }

        return $model;
    }
}
