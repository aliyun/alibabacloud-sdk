<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedHostRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId' => 'RegionId',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'hostName' => 'HostName',
        'zoneId' => 'ZoneId',
        'VSwitchId' => 'VSwitchId',
        'hostClass' => 'HostClass',
        'payType' => 'PayType',
        'period' => 'Period',
        'usedTime' => 'UsedTime',
        'clientToken' => 'ClientToken',
        'autoRenew' => 'AutoRenew',
    ];
    public function validate() {
        Model::validateRequired('dedicatedHostGroupId', $this->dedicatedHostGroupId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('hostClass', $this->hostClass, true);
        Model::validateRequired('payType', $this->payType, true);
        Model::validateRequired('clientToken', $this->clientToken, true);
        Model::validateRequired('autoRenew', $this->autoRenew, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['RegionId'] = $this->regionId;
        $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        $res['HostName'] = $this->hostName;
        $res['ZoneId'] = $this->zoneId;
        $res['VSwitchId'] = $this->VSwitchId;
        $res['HostClass'] = $this->hostClass;
        $res['PayType'] = $this->payType;
        $res['Period'] = $this->period;
        $res['UsedTime'] = $this->usedTime;
        $res['ClientToken'] = $this->clientToken;
        $res['AutoRenew'] = $this->autoRenew;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateDedicatedHostRequest
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
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['DedicatedHostGroupId'])){
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if(isset($map['HostName'])){
            $model->hostName = $map['HostName'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        if(isset($map['VSwitchId'])){
            $model->VSwitchId = $map['VSwitchId'];
        }
        if(isset($map['HostClass'])){
            $model->hostClass = $map['HostClass'];
        }
        if(isset($map['PayType'])){
            $model->payType = $map['PayType'];
        }
        if(isset($map['Period'])){
            $model->period = $map['Period'];
        }
        if(isset($map['UsedTime'])){
            $model->usedTime = $map['UsedTime'];
        }
        if(isset($map['ClientToken'])){
            $model->clientToken = $map['ClientToken'];
        }
        if(isset($map['AutoRenew'])){
            $model->autoRenew = $map['AutoRenew'];
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
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description dedicatedHostGroupId
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description hostName
     * @var string
     */
    public $hostName;

    /**
     * @description zoneId
     * @var string
     */
    public $zoneId;

    /**
     * @description vswitchId
     * @var string
     */
    public $VSwitchId;

    /**
     * @description hostClass
     * @var string
     */
    public $hostClass;

    /**
     * @description payType
     * @var string
     */
    public $payType;

    /**
     * @description period
     * @var string
     */
    public $period;

    /**
     * @description usedTime
     * @var string
     */
    public $usedTime;

    /**
     * @description clientToken
     * @var string
     */
    public $clientToken;

    /**
     * @description autoRenew
     * @var string
     */
    public $autoRenew;

}
