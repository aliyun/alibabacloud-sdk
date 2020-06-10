<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmLogsResponse\logs;

use AlibabaCloud\Tea\Model;

class log extends Model
{
    /**
     * @description createTime
     *
     * @var string
     */
    public $operTime;

    /**
     * @description action
     *
     * @var string
     */
    public $operAction;

    /**
     * @description entityType
     *
     * @var string
     */
    public $entityType;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $entityId;

    /**
     * @description entityKey
     *
     * @var string
     */
    public $entityName;

    /**
     * @description userClientIp
     *
     * @var string
     */
    public $operIp;

    /**
     * @description createTimestamp
     *
     * @var int
     */
    public $operTimestamp;

    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description content
     *
     * @var string
     */
    public $content;
    protected $_name = [
        'operTime'      => 'OperTime',
        'operAction'    => 'OperAction',
        'entityType'    => 'EntityType',
        'entityId'      => 'EntityId',
        'entityName'    => 'EntityName',
        'operIp'        => 'OperIp',
        'operTimestamp' => 'OperTimestamp',
        'id'            => 'Id',
        'content'       => 'Content',
    ];

    public function validate()
    {
        Model::validateRequired('operTime', $this->operTime, true);
        Model::validateRequired('operAction', $this->operAction, true);
        Model::validateRequired('entityType', $this->entityType, true);
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('entityName', $this->entityName, true);
        Model::validateRequired('operIp', $this->operIp, true);
        Model::validateRequired('operTimestamp', $this->operTimestamp, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('content', $this->content, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operTime) {
            $res['OperTime'] = $this->operTime;
        }
        if (null !== $this->operAction) {
            $res['OperAction'] = $this->operAction;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->operIp) {
            $res['OperIp'] = $this->operIp;
        }
        if (null !== $this->operTimestamp) {
            $res['OperTimestamp'] = $this->operTimestamp;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return log
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperTime'])) {
            $model->operTime = $map['OperTime'];
        }
        if (isset($map['OperAction'])) {
            $model->operAction = $map['OperAction'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['OperIp'])) {
            $model->operIp = $map['OperIp'];
        }
        if (isset($map['OperTimestamp'])) {
            $model->operTimestamp = $map['OperTimestamp'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
