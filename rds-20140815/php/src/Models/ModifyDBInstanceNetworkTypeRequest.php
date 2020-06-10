<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceNetworkTypeRequest extends Model
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
     * @description retainClassic
     *
     * @var string
     */
    public $retainClassic;

    /**
     * @description classicExpiredDays
     *
     * @var string
     */
    public $classicExpiredDays;

    /**
     * @description instanceNetworkType
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description rwSplitClassicExpiredDays
     *
     * @var int
     */
    public $readWriteSplittingClassicExpiredDays;

    /**
     * @description vpcId
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description vswitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description cloudInstanceIp
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description ReadWriteSplittingPrivateIpAddress
     *
     * @var string
     */
    public $readWriteSplittingPrivateIpAddress;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'accessKeyId'                          => 'AccessKeyId',
        'ownerId'                              => 'OwnerId',
        'resourceOwnerAccount'                 => 'ResourceOwnerAccount',
        'resourceOwnerId'                      => 'ResourceOwnerId',
        'DBInstanceId'                         => 'DBInstanceId',
        'retainClassic'                        => 'RetainClassic',
        'classicExpiredDays'                   => 'ClassicExpiredDays',
        'instanceNetworkType'                  => 'InstanceNetworkType',
        'readWriteSplittingClassicExpiredDays' => 'ReadWriteSplittingClassicExpiredDays',
        'VPCId'                                => 'VPCId',
        'VSwitchId'                            => 'VSwitchId',
        'privateIpAddress'                     => 'PrivateIpAddress',
        'readWriteSplittingPrivateIpAddress'   => 'ReadWriteSplittingPrivateIpAddress',
        'ownerAccount'                         => 'OwnerAccount',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('instanceNetworkType', $this->instanceNetworkType, true);
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
        if (null !== $this->retainClassic) {
            $res['RetainClassic'] = $this->retainClassic;
        }
        if (null !== $this->classicExpiredDays) {
            $res['ClassicExpiredDays'] = $this->classicExpiredDays;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->readWriteSplittingClassicExpiredDays) {
            $res['ReadWriteSplittingClassicExpiredDays'] = $this->readWriteSplittingClassicExpiredDays;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->readWriteSplittingPrivateIpAddress) {
            $res['ReadWriteSplittingPrivateIpAddress'] = $this->readWriteSplittingPrivateIpAddress;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceNetworkTypeRequest
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
        if (isset($map['RetainClassic'])) {
            $model->retainClassic = $map['RetainClassic'];
        }
        if (isset($map['ClassicExpiredDays'])) {
            $model->classicExpiredDays = $map['ClassicExpiredDays'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['ReadWriteSplittingClassicExpiredDays'])) {
            $model->readWriteSplittingClassicExpiredDays = $map['ReadWriteSplittingClassicExpiredDays'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['ReadWriteSplittingPrivateIpAddress'])) {
            $model->readWriteSplittingPrivateIpAddress = $map['ReadWriteSplittingPrivateIpAddress'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
