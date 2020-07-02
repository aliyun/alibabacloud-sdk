<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\SearchMetaTablesResponse\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $tableName;

    /**
     * @description tableGuid
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description ownerId
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description tenantId
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description envType
     *
     * @var int
     */
    public $envType;

    /**
     * @description entityType
     *
     * @var int
     */
    public $entityType;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description projectName
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'tableName'   => 'TableName',
        'tableGuid'   => 'TableGuid',
        'ownerId'     => 'OwnerId',
        'tenantId'    => 'TenantId',
        'envType'     => 'EnvType',
        'entityType'  => 'EntityType',
        'projectId'   => 'ProjectId',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
        Model::validateRequired('tableName', $this->tableName, true);
        Model::validateRequired('tableGuid', $this->tableGuid, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('envType', $this->envType, true);
        Model::validateRequired('entityType', $this->entityType, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('projectName', $this->projectName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
