<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBProxyEndpointAddressRequest extends Model
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
     * @description dbProxyEndpointId
     *
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @description dbProxyNewConnectString
     *
     * @var string
     */
    public $DBProxyNewConnectString;

    /**
     * @description dbProxyNewConnectStringPort
     *
     * @var string
     */
    public $DBProxyNewConnectStringPort;

    /**
     * @description dbProxyConnectStringNetType
     *
     * @var string
     */
    public $DBProxyConnectStringNetType;
    protected $_name = [
        'accessKeyId'                 => 'AccessKeyId',
        'ownerId'                     => 'OwnerId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'DBInstanceId'                => 'DBInstanceId',
        'DBProxyEndpointId'           => 'DBProxyEndpointId',
        'DBProxyNewConnectString'     => 'DBProxyNewConnectString',
        'DBProxyNewConnectStringPort' => 'DBProxyNewConnectStringPort',
        'DBProxyConnectStringNetType' => 'DBProxyConnectStringNetType',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBProxyEndpointId', $this->DBProxyEndpointId, true);
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
        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }
        if (null !== $this->DBProxyNewConnectString) {
            $res['DBProxyNewConnectString'] = $this->DBProxyNewConnectString;
        }
        if (null !== $this->DBProxyNewConnectStringPort) {
            $res['DBProxyNewConnectStringPort'] = $this->DBProxyNewConnectStringPort;
        }
        if (null !== $this->DBProxyConnectStringNetType) {
            $res['DBProxyConnectStringNetType'] = $this->DBProxyConnectStringNetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBProxyEndpointAddressRequest
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
        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if (isset($map['DBProxyNewConnectString'])) {
            $model->DBProxyNewConnectString = $map['DBProxyNewConnectString'];
        }
        if (isset($map['DBProxyNewConnectStringPort'])) {
            $model->DBProxyNewConnectStringPort = $map['DBProxyNewConnectStringPort'];
        }
        if (isset($map['DBProxyConnectStringNetType'])) {
            $model->DBProxyConnectStringNetType = $map['DBProxyConnectStringNetType'];
        }

        return $model;
    }
}
