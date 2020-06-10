<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBProxyInstanceRequest extends Model
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
     * @description dbProxyInstanceType
     *
     * @var string
     */
    public $DBProxyInstanceType;

    /**
     * @description dbProxyInstanceNum
     *
     * @var string
     */
    public $DBProxyInstanceNum;

    /**
     * @description effectiveTime
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description effectiveSpecificTime
     *
     * @var string
     */
    public $effectiveSpecificTime;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accessKeyId'           => 'AccessKeyId',
        'ownerId'               => 'OwnerId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'DBInstanceId'          => 'DBInstanceId',
        'DBProxyInstanceType'   => 'DBProxyInstanceType',
        'DBProxyInstanceNum'    => 'DBProxyInstanceNum',
        'effectiveTime'         => 'EffectiveTime',
        'effectiveSpecificTime' => 'EffectiveSpecificTime',
        'regionId'              => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBProxyInstanceType', $this->DBProxyInstanceType, true);
        Model::validateRequired('DBProxyInstanceNum', $this->DBProxyInstanceNum, true);
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
        if (null !== $this->DBProxyInstanceType) {
            $res['DBProxyInstanceType'] = $this->DBProxyInstanceType;
        }
        if (null !== $this->DBProxyInstanceNum) {
            $res['DBProxyInstanceNum'] = $this->DBProxyInstanceNum;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->effectiveSpecificTime) {
            $res['EffectiveSpecificTime'] = $this->effectiveSpecificTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBProxyInstanceRequest
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
        if (isset($map['DBProxyInstanceType'])) {
            $model->DBProxyInstanceType = $map['DBProxyInstanceType'];
        }
        if (isset($map['DBProxyInstanceNum'])) {
            $model->DBProxyInstanceNum = $map['DBProxyInstanceNum'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['EffectiveSpecificTime'])) {
            $model->effectiveSpecificTime = $map['EffectiveSpecificTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
