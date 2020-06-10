<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RestoreDdrTableRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description dbInstanceId
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description restoreType
     *
     * @var string
     */
    public $restoreType;

    /**
     * @description backupId
     *
     * @var string
     */
    public $backupId;

    /**
     * @description restoreTime
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description sourceRegion
     *
     * @var string
     */
    public $sourceRegion;

    /**
     * @description sourceDBInstanceName
     *
     * @var string
     */
    public $sourceDBInstanceName;

    /**
     * @description tableMeta
     *
     * @var string
     */
    public $tableMeta;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'DBInstanceId'         => 'DBInstanceId',
        'regionId'             => 'RegionId',
        'clientToken'          => 'ClientToken',
        'restoreType'          => 'RestoreType',
        'backupId'             => 'BackupId',
        'restoreTime'          => 'RestoreTime',
        'sourceRegion'         => 'SourceRegion',
        'sourceDBInstanceName' => 'SourceDBInstanceName',
        'tableMeta'            => 'TableMeta',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('restoreType', $this->restoreType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->sourceDBInstanceName) {
            $res['SourceDBInstanceName'] = $this->sourceDBInstanceName;
        }
        if (null !== $this->tableMeta) {
            $res['TableMeta'] = $this->tableMeta;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestoreDdrTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['SourceDBInstanceName'])) {
            $model->sourceDBInstanceName = $map['SourceDBInstanceName'];
        }
        if (isset($map['TableMeta'])) {
            $model->tableMeta = $map['TableMeta'];
        }

        return $model;
    }
}
