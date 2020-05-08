<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec;

use AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\initContainers\env;
use AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\initContainers\ports;
use AlibabaCloud\SDK\ECI\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\initContainers\volumeMounts;
use AlibabaCloud\SDK\ECI\V20180808\Models\initContainers\resources;
use AlibabaCloud\SDK\ECI\V20180808\Models\initContainers\securityContext;
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
     * @description imagePullPolicy
     *
     * @var string
     */
    public $imagePullPolicy;

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
     * @description workingDir
     *
     * @var string
     */
    public $workingDir;

    /**
     * @description env
     *
     * @var array
     */
    public $env;

    /**
     * @description ports
     *
     * @var array
     */
    public $ports;

    /**
     * @description volumeMounts
     *
     * @var array
     */
    public $volumeMounts;

    /**
     * @description securityContext
     *
     * @var initContainers.securityContext
     */
    public $securityContext;

    /**
     * @description resources
     *
     * @var initContainers.resources
     */
    public $resources;

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

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('image', $this->image, true);
        Model::validateRequired('imagePullPolicy', $this->imagePullPolicy, true);
        Model::validateRequired('stdin', $this->stdin, true);
        Model::validateRequired('stdinOnce', $this->stdinOnce, true);
        Model::validateRequired('tty', $this->tty, true);
        Model::validateRequired('workingDir', $this->workingDir, true);
        Model::validateRequired('env', $this->env, true);
        Model::validateRequired('ports', $this->ports, true);
        Model::validateRequired('volumeMounts', $this->volumeMounts, true);
        Model::validateRequired('securityContext', $this->securityContext, true);
        Model::validateRequired('resources', $this->resources, true);
        Model::validateRequired('command', $this->command, true);
        Model::validateRequired('args', $this->args, true);
    }

    public function toMap()
    {
        $res                    = [];
        $res['Name']            = $this->name;
        $res['Image']           = $this->image;
        $res['ImagePullPolicy'] = $this->imagePullPolicy;
        $res['Stdin']           = $this->stdin;
        $res['StdinOnce']       = $this->stdinOnce;
        $res['Tty']             = $this->tty;
        $res['WorkingDir']      = $this->workingDir;
        $res['Env']             = [];
        if (null !== $this->env && \is_array($this->env)) {
            $n = 0;
            foreach ($this->env as $item) {
                $res['Env'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Ports'] = [];
        if (null !== $this->ports && \is_array($this->ports)) {
            $n = 0;
            foreach ($this->ports as $item) {
                $res['Ports'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['VolumeMounts'] = [];
        if (null !== $this->volumeMounts && \is_array($this->volumeMounts)) {
            $n = 0;
            foreach ($this->volumeMounts as $item) {
                $res['VolumeMounts'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['SecurityContext'] = null !== $this->securityContext ? $this->securityContext->toMap() : null;
        $res['Resources']       = null !== $this->resources ? $this->resources->toMap() : null;
        $res['Command']         = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        $res['Args'] = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
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
        if (isset($map['ImagePullPolicy'])) {
            $model->imagePullPolicy = $map['ImagePullPolicy'];
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
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }
        if (isset($map['Env'])) {
            if (!empty($map['Env'])) {
                $model->env = [];
                $n          = 0;
                foreach ($map['Env'] as $item) {
                    $model->env[$n++] = null !== $item ? env::fromMap($item) : $item;
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
        if (isset($map['VolumeMounts'])) {
            if (!empty($map['VolumeMounts'])) {
                $model->volumeMounts = [];
                $n                   = 0;
                foreach ($map['VolumeMounts'] as $item) {
                    $model->volumeMounts[$n++] = null !== $item ? volumeMounts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityContext'])) {
            $model->securityContext = securityContext::fromMap($map['SecurityContext']);
        }
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
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
