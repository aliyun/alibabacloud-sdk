<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class SwitchDBInstanceNetTypeRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'clientToken' => 'ClientToken',
        'DBInstanceId' => 'DBInstanceId',
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'port' => 'Port',
        'connectionStringType' => 'ConnectionStringType',
        'ownerAccount' => 'OwnerAccount',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('connectionStringPrefix', $this->connectionStringPrefix, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ClientToken'] = $this->clientToken;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        $res['Port'] = $this->port;
        $res['ConnectionStringType'] = $this->connectionStringType;
        $res['OwnerAccount'] = $this->ownerAccount;
        return $res;
    }
    /**
     * @param array $map
     * @return SwitchDBInstanceNetTypeRequest
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
        if(isset($map['ClientToken'])){
            $model->clientToken = $map['ClientToken'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['ConnectionStringPrefix'])){
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if(isset($map['Port'])){
            $model->port = $map['Port'];
        }
        if(isset($map['ConnectionStringType'])){
            $model->connectionStringType = $map['ConnectionStringType'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
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
     * @description token
     * @var string
     */
    public $clientToken;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description connectionString
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description port
     * @var string
     */
    public $port;

    /**
     * @description connectionStringType
     * @var string
     */
    public $connectionStringType;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

}
