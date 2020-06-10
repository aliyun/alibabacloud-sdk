<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\initContainers\currentState;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\initContainers\environmentVars;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\initContainers\ports;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\initContainers\previousState;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\initContainers\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse\containerGroups\initContainers\volumeMounts;
use AlibabaCloud\Tea\Model;

class initContainers extends Model
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
     * @description bigCpuForPop
     *
     * @var float
     */
    public $cpu;

    /**
     * @description bigMemForPop
     *
     * @var float
     */
    public $memory;

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
    public $command;

    /**
     * @description args
     *
     * @var array
     */
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

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('image', $this->image, true);
        Model::validateRequired('cpu', $this->cpu, true);
        Model::validateRequired('memory', $this->memory, true);
        Model::validateRequired('restartCount', $this->restartCount, true);
        Model::validateRequired('workingDir', $this->workingDir, true);
        Model::validateRequired('imagePullPolicy', $this->imagePullPolicy, true);
        Model::validateRequired('ready', $this->ready, true);
        Model::validateRequired('gpu', $this->gpu, true);
        Model::validateRequired('volumeMounts', $this->volumeMounts, true);
        Model::validateRequired('ports', $this->ports, true);
        Model::validateRequired('environmentVars', $this->environmentVars, true);
        Model::validateRequired('previousState', $this->previousState, true);
        Model::validateRequired('currentState', $this->currentState, true);
        Model::validateRequired('securityContext', $this->securityContext, true);
        Model::validateRequired('command', $this->command, true);
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
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
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
        if (null !== $this->securityContext) {
            $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toMap() : null;
        }
        if (null !== $this->command) {
            $res['Command'] = [];
            if (null !== $this->command) {
                $res['Command'] = $this->command;
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
     * @return initContainers
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
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
        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
        }
        if (isset($map['Command'])) {
            if (!empty($map['Command'])) {
                $model->command = [];
                $model->command = $map['Command'];
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
