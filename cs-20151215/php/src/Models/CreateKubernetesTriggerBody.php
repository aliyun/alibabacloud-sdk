<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateKubernetesTriggerBody extends Model
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
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description trigger_url
     *
     * @var string
     */
    public $triggerUrl;
    protected $_name = [
        'regionId'   => 'RegionId',
        'clusterId'  => 'ClusterId',
        'projectId'  => 'ProjectId',
        'type'       => 'Type',
        'triggerUrl' => 'TriggerUrl',
    ];

    public function validate()
    {
        Model::validateRequired('clusterId', $this->clusterId, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('type', $this->type, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->triggerUrl) {
            $res['TriggerUrl'] = $this->triggerUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKubernetesTriggerBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TriggerUrl'])) {
            $model->triggerUrl = $map['TriggerUrl'];
        }

        return $model;
    }
}
