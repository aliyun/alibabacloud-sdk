<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBProxyEndpointAddressRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'DBProxyEndpointId' => 'DBProxyEndpointId',
        'DBProxyNewConnectString' => 'DBProxyNewConnectString',
        'DBProxyNewConnectStringPort' => 'DBProxyNewConnectStringPort',
        'DBProxyConnectStringNetType' => 'DBProxyConnectStringNetType',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('DBProxyEndpointId', $this->DBProxyEndpointId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        $res['DBProxyNewConnectString'] = $this->DBProxyNewConnectString;
        $res['DBProxyNewConnectStringPort'] = $this->DBProxyNewConnectStringPort;
        $res['DBProxyConnectStringNetType'] = $this->DBProxyConnectStringNetType;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyDBProxyEndpointAddressRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['DBProxyEndpointId'])){
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if(isset($map['DBProxyNewConnectString'])){
            $model->DBProxyNewConnectString = $map['DBProxyNewConnectString'];
        }
        if(isset($map['DBProxyNewConnectStringPort'])){
            $model->DBProxyNewConnectStringPort = $map['DBProxyNewConnectStringPort'];
        }
        if(isset($map['DBProxyConnectStringNetType'])){
            $model->DBProxyConnectStringNetType = $map['DBProxyConnectStringNetType'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description dbProxyEndpointId
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @description dbProxyNewConnectString
     * @var string
     */
    public $DBProxyNewConnectString;

    /**
     * @description dbProxyNewConnectStringPort
     * @var string
     */
    public $DBProxyNewConnectStringPort;

    /**
     * @description dbProxyConnectStringNetType
     * @var string
     */
    public $DBProxyConnectStringNetType;

}
