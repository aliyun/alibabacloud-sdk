<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateDBClusterEndpointRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'DBClusterId' => 'DBClusterId',
        'endpointType' => 'EndpointType',
        'nodes' => 'Nodes',
        'readWriteMode' => 'ReadWriteMode',
        'autoAddNewNodes' => 'AutoAddNewNodes',
        'endpointConfig' => 'EndpointConfig',
        'clientToken' => 'ClientToken',
    ];
    public function validate() {
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
        Model::validateRequired('endpointType', $this->endpointType, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['DBClusterId'] = $this->DBClusterId;
        $res['EndpointType'] = $this->endpointType;
        $res['Nodes'] = $this->nodes;
        $res['ReadWriteMode'] = $this->readWriteMode;
        $res['AutoAddNewNodes'] = $this->autoAddNewNodes;
        $res['EndpointConfig'] = $this->endpointConfig;
        $res['ClientToken'] = $this->clientToken;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateDBClusterEndpointRequest
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
        if(isset($map['EndpointType'])){
            $model->endpointType = $map['EndpointType'];
        }
        if(isset($map['Nodes'])){
            $model->nodes = $map['Nodes'];
        }
        if(isset($map['ReadWriteMode'])){
            $model->readWriteMode = $map['ReadWriteMode'];
        }
        if(isset($map['AutoAddNewNodes'])){
            $model->autoAddNewNodes = $map['AutoAddNewNodes'];
        }
        if(isset($map['EndpointConfig'])){
            $model->endpointConfig = $map['EndpointConfig'];
        }
        if(isset($map['ClientToken'])){
            $model->clientToken = $map['ClientToken'];
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
     * @description endpointType
     * @var string
     */
    public $endpointType;

    /**
     * @description nodes
     * @var string
     */
    public $nodes;

    /**
     * @description readWriteMode
     * @var string
     */
    public $readWriteMode;

    /**
     * @description autoAddNewNodes
     * @var string
     */
    public $autoAddNewNodes;

    /**
     * @description endpointConfig
     * @var string
     */
    public $endpointConfig;

    /**
     * @description token
     * @var string
     */
    public $clientToken;

}
