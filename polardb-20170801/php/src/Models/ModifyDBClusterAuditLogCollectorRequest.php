<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterAuditLogCollectorRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBClusterId' => 'DBClusterId',
        'collectorStatus' => 'CollectorStatus',
        'ownerAccount' => 'OwnerAccount',
    ];
    public function validate() {
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
        Model::validateRequired('collectorStatus', $this->collectorStatus, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBClusterId'] = $this->DBClusterId;
        $res['CollectorStatus'] = $this->collectorStatus;
        $res['OwnerAccount'] = $this->ownerAccount;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyDBClusterAuditLogCollectorRequest
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
        if(isset($map['DBClusterId'])){
            $model->DBClusterId = $map['DBClusterId'];
        }
        if(isset($map['CollectorStatus'])){
            $model->collectorStatus = $map['CollectorStatus'];
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
     * @description dbClusterId
     * @var string
     */
    public $DBClusterId;

    /**
     * @description status
     * @var string
     */
    public $collectorStatus;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

}
