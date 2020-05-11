<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateTriggerHookBody extends Model
{
    /**
     * @description region_id
     *
     * @var string
     */
    public $regionId;

    /**
     * @description cluster_id
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description project_id
     *
     * @var string
     */
    public $projectId;

    /**
     * @description action
     *
     * @var string
     */
    public $action;

    /**
     * @description trigger_url
     *
     * @var string
     */
    public $triggerUrl;
    protected $_name = [
        'regionId'   => 'region_id',
        'clusterId'  => 'cluster_id',
        'projectId'  => 'project_id',
        'action'     => 'action',
        'triggerUrl' => 'trigger_url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res                = [];
        $res['region_id']   = $this->regionId;
        $res['cluster_id']  = $this->clusterId;
        $res['project_id']  = $this->projectId;
        $res['action']      = $this->action;
        $res['trigger_url'] = $this->triggerUrl;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTriggerHookBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['project_id'])) {
            $model->projectId = $map['project_id'];
        }
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['trigger_url'])) {
            $model->triggerUrl = $map['trigger_url'];
        }

        return $model;
    }
}
