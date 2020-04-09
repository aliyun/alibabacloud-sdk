<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS\DescribeClusterAddonUpgradeStatusResponseBody;

use AlibabaCloud\SDK\CS\V20151215\CS\componentId\addonInfo;
use AlibabaCloud\SDK\CS\V20151215\CS\componentId\tasks;
use AlibabaCloud\Tea\Model;

class componentId extends Model
{
    /**
     * @description template
     *
     * @var string
     */
    public $template;
    /**
     * @description can_upgrade
     *
     * @var bool
     */
    public $canUpgrade;
    /**
     * @description changed
     *
     * @var string
     */
    public $changed;
    /**
     * @description addon_info
     *
     * @var componentId.addonInfo
     */
    public $addonInfo;
    /**
     * @description tasks
     *
     * @var componentId.tasks
     */
    public $tasks;
    protected $_name = [
        'template'   => 'template',
        'canUpgrade' => 'can_upgrade',
        'changed'    => 'changed',
        'addonInfo'  => 'addon_info',
        'tasks'      => 'tasks',
    ];

    public function validate()
    {
        Model::validateRequired('template', $this->template, true);
        Model::validateRequired('canUpgrade', $this->canUpgrade, true);
        Model::validateRequired('changed', $this->changed, true);
        Model::validateRequired('addonInfo', $this->addonInfo, true);
        Model::validateRequired('tasks', $this->tasks, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['template']    = $this->template;
        $res['can_upgrade'] = $this->canUpgrade;
        $res['changed']     = $this->changed;
        $res['addon_info']  = null !== $this->addonInfo ? $this->addonInfo->toMap() : null;
        $res['tasks']       = null !== $this->tasks ? $this->tasks->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }
        if (isset($map['can_upgrade'])) {
            $model->canUpgrade = $map['can_upgrade'];
        }
        if (isset($map['changed'])) {
            $model->changed = $map['changed'];
        }
        if (isset($map['addon_info'])) {
            $model->addonInfo = componentId\addonInfo::fromMap($map['addon_info']);
        }
        if (isset($map['tasks'])) {
            $model->tasks = componentId\tasks::fromMap($map['tasks']);
        }

        return $model;
    }
}
