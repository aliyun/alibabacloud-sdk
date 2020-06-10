<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\initContainer\environmentVar;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\initContainer\port;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\initContainer\securityContext;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\initContainer\volumeMount;
use AlibabaCloud\Tea\Model;

class initContainer extends Model
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
     * @description SecurityContext
     *
     * @var securityContext
     */
    public $securityContext;

    /**
     * @description gpu
     *
     * @var int
     */
    public $gpu;

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
        'name'                     => 'Name',
        'image'                    => 'Image',
        'cpu'                      => 'Cpu',
        'memory'                   => 'Memory',
        'workingDir'               => 'WorkingDir',
        'imagePullPolicy'          => 'ImagePullPolicy',
        'command'                  => 'Command',
        'arg'                      => 'Arg',
        'volumeMount'              => 'VolumeMount',
        'port'                     => 'Port',
        'environmentVar'           => 'EnvironmentVar',
        'securityContext'          => 'SecurityContext',
        'gpu'                      => 'Gpu',
        'terminationMessagePath'   => 'TerminationMessagePath',
        'terminationMessagePolicy' => 'TerminationMessagePolicy',
    ];

    public function validate()
    {
        Model::validateRequired('command', $this->command, true);
        Model::validateRequired('arg', $this->arg, true);
        Model::validateRequired('volumeMount', $this->volumeMount, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('environmentVar', $this->environmentVar, true);
        Model::validateRequired('securityContext', $this->securityContext, true);
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
        if (null !== $this->securityContext) {
            $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toMap() : null;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
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
     * @return initContainer
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
        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
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
