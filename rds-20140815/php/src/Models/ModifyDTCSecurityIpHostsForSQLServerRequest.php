<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDTCSecurityIpHostsForSQLServerRequest extends Model
{
    /**
     * @description description: 阿里云颁发给用户的访问服务所用的密钥ID。;
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description stsSecurityToken
     *
     * @var string
     */
    public $securityToken;

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
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description description: RDS实例ID。;
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description description: ECS实例的IP地址和Windows系统的计算机名。格式：ip,hostname。多个实例之间以英文分号（;）隔开。>计算机名查看方式请参见[设置分布式事务白名单](~~124321~~)。;
     *
     * @var string
     */
    public $securityIpHosts;

    /**
     * @description description: 白名单分组名称。;
     *
     * @var string
     */
    public $whiteListGroupName;

    /**
     * @description description: RDS实例的地域ID，可以通过接口[DescribeRegions](~~26243~~)查看。;
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'securityToken'        => 'SecurityToken',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'DBInstanceId'         => 'DBInstanceId',
        'securityIpHosts'      => 'SecurityIpHosts',
        'whiteListGroupName'   => 'WhiteListGroupName',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('securityIpHosts', $this->securityIpHosts, true);
        Model::validateRequired('whiteListGroupName', $this->whiteListGroupName, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->securityIpHosts) {
            $res['SecurityIpHosts'] = $this->securityIpHosts;
        }
        if (null !== $this->whiteListGroupName) {
            $res['WhiteListGroupName'] = $this->whiteListGroupName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDTCSecurityIpHostsForSQLServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
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
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['SecurityIpHosts'])) {
            $model->securityIpHosts = $map['SecurityIpHosts'];
        }
        if (isset($map['WhiteListGroupName'])) {
            $model->whiteListGroupName = $map['WhiteListGroupName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
