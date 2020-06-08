<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeRenewalPriceRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'clientToken' => 'ClientToken',
        'ownerAccount' => 'OwnerAccount',
        'DBInstanceId' => 'DBInstanceId',
        'regionId' => 'RegionId',
        'payType' => 'PayType',
        'DBInstanceClass' => 'DBInstanceClass',
        'usedTime' => 'UsedTime',
        'timeType' => 'TimeType',
        'quantity' => 'Quantity',
        'orderType' => 'OrderType',
        'businessInfo' => 'BusinessInfo',
    ];
    public function validate() {
        Model::validateRequired('usedTime', $this->usedTime, true);
        Model::validateRequired('timeType', $this->timeType, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ClientToken'] = $this->clientToken;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['RegionId'] = $this->regionId;
        $res['PayType'] = $this->payType;
        $res['DBInstanceClass'] = $this->DBInstanceClass;
        $res['UsedTime'] = $this->usedTime;
        $res['TimeType'] = $this->timeType;
        $res['Quantity'] = $this->quantity;
        $res['OrderType'] = $this->orderType;
        $res['BusinessInfo'] = $this->businessInfo;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeRenewalPriceRequest
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
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['PayType'])){
            $model->payType = $map['PayType'];
        }
        if(isset($map['DBInstanceClass'])){
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if(isset($map['UsedTime'])){
            $model->usedTime = $map['UsedTime'];
        }
        if(isset($map['TimeType'])){
            $model->timeType = $map['TimeType'];
        }
        if(isset($map['Quantity'])){
            $model->quantity = $map['Quantity'];
        }
        if(isset($map['OrderType'])){
            $model->orderType = $map['OrderType'];
        }
        if(isset($map['BusinessInfo'])){
            $model->businessInfo = $map['BusinessInfo'];
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
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description payType
     * @var string
     */
    public $payType;

    /**
     * @description dbInstanceClass
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description usedTime
     * @var integer
     */
    public $usedTime;

    /**
     * @description timeType
     * @var string
     */
    public $timeType;

    /**
     * @description quantity
     * @var integer
     */
    public $quantity;

    /**
     * @description orderType
     * @var string
     */
    public $orderType;

    /**
     * @description businessInfo
     * @var string
     */
    public $businessInfo;

}
