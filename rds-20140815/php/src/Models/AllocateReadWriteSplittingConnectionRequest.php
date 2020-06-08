<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class AllocateReadWriteSplittingConnectionRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'DBInstanceId' => 'DBInstanceId',
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'port' => 'Port',
        'maxDelayTime' => 'MaxDelayTime',
        'netType' => 'NetType',
        'distributionType' => 'DistributionType',
        'weight' => 'Weight',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        $res['Port'] = $this->port;
        $res['MaxDelayTime'] = $this->maxDelayTime;
        $res['NetType'] = $this->netType;
        $res['DistributionType'] = $this->distributionType;
        $res['Weight'] = $this->weight;
        return $res;
    }
    /**
     * @param array $map
     * @return AllocateReadWriteSplittingConnectionRequest
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
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['ConnectionStringPrefix'])){
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if(isset($map['Port'])){
            $model->port = $map['Port'];
        }
        if(isset($map['MaxDelayTime'])){
            $model->maxDelayTime = $map['MaxDelayTime'];
        }
        if(isset($map['NetType'])){
            $model->netType = $map['NetType'];
        }
        if(isset($map['DistributionType'])){
            $model->distributionType = $map['DistributionType'];
        }
        if(isset($map['Weight'])){
            $model->weight = $map['Weight'];
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
     * @description maxDelayTime
     * @var string
     */
    public $maxDelayTime;

    /**
     * @description dbInstanceNetType
     * @var string
     */
    public $netType;

    /**
     * @description distributionType
     * @var string
     */
    public $distributionType;

    /**
     * @description weight
     * @var string
     */
    public $weight;

}
