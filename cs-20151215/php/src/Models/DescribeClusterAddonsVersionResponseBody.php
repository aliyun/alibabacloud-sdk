<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterAddonsVersionResponseBody extends Model
{
    /**
     * @description template
     *
     * @var string
     */
    public $template;

    /**
     * @description next_version
     *
     * @var string
     */
    public $nextVersion;

    /**
     * @description can_upgrade
     *
     * @var bool
     */
    public $canUpgrade;

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
     * @description changed
     *
     * @var string
     */
    public $changed;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description required
     *
     * @var bool
     */
    public $required;
    protected $_name = [
        'template'      => 'template',
        'nextVersion'   => 'next_version',
        'canUpgrade'    => 'can_upgrade',
        'componentName' => 'component_name',
        'version'       => 'version',
        'changed'       => 'changed',
        'message'       => 'message',
        'required'      => 'required',
    ];

    public function validate()
    {
        Model::validateRequired('template', $this->template, true);
        Model::validateRequired('nextVersion', $this->nextVersion, true);
        Model::validateRequired('canUpgrade', $this->canUpgrade, true);
        Model::validateRequired('componentName', $this->componentName, true);
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('changed', $this->changed, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('required', $this->required, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['template']       = $this->template;
        $res['next_version']   = $this->nextVersion;
        $res['can_upgrade']    = $this->canUpgrade;
        $res['component_name'] = $this->componentName;
        $res['version']        = $this->version;
        $res['changed']        = $this->changed;
        $res['message']        = $this->message;
        $res['required']       = $this->required;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterAddonsVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }
        if (isset($map['next_version'])) {
            $model->nextVersion = $map['next_version'];
        }
        if (isset($map['can_upgrade'])) {
            $model->canUpgrade = $map['can_upgrade'];
        }
        if (isset($map['component_name'])) {
            $model->componentName = $map['component_name'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['changed'])) {
            $model->changed = $map['changed'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['required'])) {
            $model->required = $map['required'];
        }

        return $model;
    }
}
