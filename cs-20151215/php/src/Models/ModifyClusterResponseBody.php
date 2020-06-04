<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterResponseBody extends Model {
    protected $_name = [
        'clusterId' => 'cluster_id',
        'requestId' => 'request_id',
        'taskId' => 'task_id',
        'instanceId' => 'instanceId',
    ];
    public function validate() {
        Model::validateRequired('clusterId', $this->clusterId, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['cluster_id'] = $this->clusterId;
        $res['request_id'] = $this->requestId;
        $res['task_id'] = $this->taskId;
        $res['instanceId'] = $this->instanceId;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyClusterResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cluster_id'])){
            $model->clusterId = $map['cluster_id'];
        }
        if(isset($map['request_id'])){
            $model->requestId = $map['request_id'];
        }
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        if(isset($map['instanceId'])){
            $model->instanceId = $map['instanceId'];
        }
        return $model;
    }
    /**
     * @description cluster_id
     * @var string
     */
    public $clusterId;

    /**
     * @description request_id
     * @var string
     */
    public $requestId;

    /**
     * @description task_id
     * @var string
     */
    public $taskId;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

}
