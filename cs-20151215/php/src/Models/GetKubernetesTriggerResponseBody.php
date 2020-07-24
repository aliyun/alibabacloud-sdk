<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class GetKubernetesTriggerResponseBody extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description id
     *
     * @var string
     */
    public $id;

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
     * @description token
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'requestId' => 'RequestId',
        'id'        => 'id',
        'clusterId' => 'cluster_id',
        'projectId' => 'project_id',
        'action'    => 'action',
        'token'     => 'token',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('clusterId', $this->clusterId, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('action', $this->action, true);
        Model::validateRequired('token', $this->token, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->projectId) {
            $res['project_id'] = $this->projectId;
        }
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKubernetesTriggerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
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
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
