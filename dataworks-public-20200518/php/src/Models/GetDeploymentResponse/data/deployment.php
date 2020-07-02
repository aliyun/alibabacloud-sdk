<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentResponse\data;

use AlibabaCloud\Tea\Model;

class deployment extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description creatorId
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description handlerId
     *
     * @var string
     */
    public $handlerId;

    /**
     * @description createTime
     *
     * @var int
     */
    public $createTime;

    /**
     * @description executeTime
     *
     * @var int
     */
    public $executeTime;

    /**
     * @description status
     *
     * @var int
     */
    public $status;

    /**
     * @description fromEnv
     *
     * @var int
     */
    public $fromEnvironment;

    /**
     * @description toEnv
     *
     * @var int
     */
    public $toEnvironment;

    /**
     * @description errMsg
     *
     * @var string
     */
    public $errorMessage;
    protected $_name = [
        'name'            => 'Name',
        'creatorId'       => 'CreatorId',
        'handlerId'       => 'HandlerId',
        'createTime'      => 'CreateTime',
        'executeTime'     => 'ExecuteTime',
        'status'          => 'Status',
        'fromEnvironment' => 'FromEnvironment',
        'toEnvironment'   => 'ToEnvironment',
        'errorMessage'    => 'ErrorMessage',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('creatorId', $this->creatorId, true);
        Model::validateRequired('handlerId', $this->handlerId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('executeTime', $this->executeTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('fromEnvironment', $this->fromEnvironment, true);
        Model::validateRequired('toEnvironment', $this->toEnvironment, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->handlerId) {
            $res['HandlerId'] = $this->handlerId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->fromEnvironment) {
            $res['FromEnvironment'] = $this->fromEnvironment;
        }
        if (null !== $this->toEnvironment) {
            $res['ToEnvironment'] = $this->toEnvironment;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['HandlerId'])) {
            $model->handlerId = $map['HandlerId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FromEnvironment'])) {
            $model->fromEnvironment = $map['FromEnvironment'];
        }
        if (isset($map['ToEnvironment'])) {
            $model->toEnvironment = $map['ToEnvironment'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        return $model;
    }
}
