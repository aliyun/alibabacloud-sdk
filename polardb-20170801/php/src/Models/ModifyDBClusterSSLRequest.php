<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterSSLRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'DBClusterId' => 'DBClusterId',
        'SSLEnabled' => 'SSLEnabled',
        'DBEndpointId' => 'DBEndpointId',
        'netType' => 'NetType',
    ];
    public function validate() {
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
        Model::validateRequired('SSLEnabled', $this->SSLEnabled, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['DBClusterId'] = $this->DBClusterId;
        $res['SSLEnabled'] = $this->SSLEnabled;
        $res['DBEndpointId'] = $this->DBEndpointId;
        $res['NetType'] = $this->netType;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyDBClusterSSLRequest
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
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['DBClusterId'])){
            $model->DBClusterId = $map['DBClusterId'];
        }
        if(isset($map['SSLEnabled'])){
            $model->SSLEnabled = $map['SSLEnabled'];
        }
        if(isset($map['DBEndpointId'])){
            $model->DBEndpointId = $map['DBEndpointId'];
        }
        if(isset($map['NetType'])){
            $model->netType = $map['NetType'];
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
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description dbClusterId
     * @var string
     */
    public $DBClusterId;

    /**
     * @description sslEnabled
     * @var string
     */
    public $SSLEnabled;

    /**
     * @description endpointId
     * @var string
     */
    public $DBEndpointId;

    /**
     * @description netType
     * @var string
     */
    public $netType;

}
