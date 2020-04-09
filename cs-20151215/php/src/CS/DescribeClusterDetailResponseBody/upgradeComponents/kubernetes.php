<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterDetailResponseBody\upgradeComponents;

use AlibabaCloud\Tea\Model;

class kubernetes extends Model
{
    /**
     * @description component_name
     *
     * @var string
     */
    public $componentName;
    /**
     * @description version
     *
     * @var string
     */
    public $version;
    /**
     * @description next_version
     *
     * @var string
     */
    public $nextVersion;
    /**
     * @description changed
     *
     * @var string
     */
    public $changed;
    /**
     * @description can_upgrade
     *
     * @var bool
     */
    public $canUpgrade;
    /**
     * @description force
     *
     * @var bool
     */
    public $force;
    /**
     * @description policy
     *
     * @var string
     */
    public $policy;
    /**
     * @description ExtraVars
     *
     * @var string
     */
    public $extraVars;
    /**
     * @description ready_to_upgrade
     *
     * @var string
     */
    public $readyToUpgrade;
    /**
     * @description message
     *
     * @var string
     */
    public $message;
    /**
     * @description exist
     *
     * @var bool
     */
    public $exist;
    /**
     * @description required
     *
     * @var bool
     */
    public $required;
    /**
     * @description template
     *
     * @var string
     */
    public $template;
    protected $_name = [
        'componentName'  => 'component_name',
        'version'        => 'version',
        'nextVersion'    => 'next_version',
        'changed'        => 'changed',
        'canUpgrade'     => 'can_upgrade',
        'force'          => 'force',
        'policy'         => 'policy',
        'extraVars'      => 'ExtraVars',
        'readyToUpgrade' => 'ready_to_upgrade',
        'message'        => 'message',
        'exist'          => 'exist',
        'required'       => 'required',
        'template'       => 'template',
    ];

    public function validate()
    {
        Model::validateRequired('componentName', $this->componentName, true);
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('nextVersion', $this->nextVersion, true);
        Model::validateRequired('changed', $this->changed, true);
        Model::validateRequired('canUpgrade', $this->canUpgrade, true);
        Model::validateRequired('force', $this->force, true);
        Model::validateRequired('policy', $this->policy, true);
        Model::validateRequired('extraVars', $this->extraVars, true);
        Model::validateRequired('readyToUpgrade', $this->readyToUpgrade, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('exist', $this->exist, true);
        Model::validateRequired('required', $this->required, true);
        Model::validateRequired('template', $this->template, true);
    }

    public function toMap()
    {
        $res                     = [];
        $res['component_name']   = $this->componentName;
        $res['version']          = $this->version;
        $res['next_version']     = $this->nextVersion;
        $res['changed']          = $this->changed;
        $res['can_upgrade']      = $this->canUpgrade;
        $res['force']            = $this->force;
        $res['policy']           = $this->policy;
        $res['ExtraVars']        = $this->extraVars;
        $res['ready_to_upgrade'] = $this->readyToUpgrade;
        $res['message']          = $this->message;
        $res['exist']            = $this->exist;
        $res['required']         = $this->required;
        $res['template']         = $this->template;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kubernetes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['component_name'])) {
            $model->componentName = $map['component_name'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['next_version'])) {
            $model->nextVersion = $map['next_version'];
        }
        if (isset($map['changed'])) {
            $model->changed = $map['changed'];
        }
        if (isset($map['can_upgrade'])) {
            $model->canUpgrade = $map['can_upgrade'];
        }
        if (isset($map['force'])) {
            $model->force = $map['force'];
        }
        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }
        if (isset($map['ExtraVars'])) {
            $model->extraVars = $map['ExtraVars'];
        }
        if (isset($map['ready_to_upgrade'])) {
            $model->readyToUpgrade = $map['ready_to_upgrade'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['exist'])) {
            $model->exist = $map['exist'];
        }
        if (isset($map['required'])) {
            $model->required = $map['required'];
        }
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }

        return $model;
    }
}
