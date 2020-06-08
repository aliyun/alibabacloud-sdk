<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceProxyConfigurationRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'proxyConfigurationKey' => 'ProxyConfigurationKey',
        'proxyConfigurationValue' => 'ProxyConfigurationValue',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('proxyConfigurationKey', $this->proxyConfigurationKey, true);
        Model::validateRequired('proxyConfigurationValue', $this->proxyConfigurationValue, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['ProxyConfigurationKey'] = $this->proxyConfigurationKey;
        $res['ProxyConfigurationValue'] = $this->proxyConfigurationValue;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyDBInstanceProxyConfigurationRequest
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
        if(isset($map['ProxyConfigurationKey'])){
            $model->proxyConfigurationKey = $map['ProxyConfigurationKey'];
        }
        if(isset($map['ProxyConfigurationValue'])){
            $model->proxyConfigurationValue = $map['ProxyConfigurationValue'];
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
     * @description proxyConfigurationKey
     * @var string
     */
    public $proxyConfigurationKey;

    /**
     * @description proxyConfigurationValue
     * @var string
     */
    public $proxyConfigurationValue;

}
