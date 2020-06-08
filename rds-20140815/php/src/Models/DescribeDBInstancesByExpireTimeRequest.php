<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstancesByExpireTimeRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId' => 'RegionId',
        'proxyId' => 'proxyId',
        'expirePeriod' => 'ExpirePeriod',
        'expired' => 'Expired',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'tags' => 'Tags',
        'ownerAccount' => 'OwnerAccount',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['RegionId'] = $this->regionId;
        $res['proxyId'] = $this->proxyId;
        $res['ExpirePeriod'] = $this->expirePeriod;
        $res['Expired'] = $this->expired;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['Tags'] = $this->tags;
        $res['OwnerAccount'] = $this->ownerAccount;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBInstancesByExpireTimeRequest
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
        if(isset($map['proxyId'])){
            $model->proxyId = $map['proxyId'];
        }
        if(isset($map['ExpirePeriod'])){
            $model->expirePeriod = $map['ExpirePeriod'];
        }
        if(isset($map['Expired'])){
            $model->expired = $map['Expired'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
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
     * @description region
     * @var string
     */
    public $regionId;

    /**
     * @description proxyId
     * @var string
     */
    public $proxyId;

    /**
     * @description availableDays
     * @var integer
     */
    public $expirePeriod;

    /**
     * @description hasExpiredRes
     * @var bool
     */
    public $expired;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description currPage
     * @var integer
     */
    public $pageNumber;

    /**
     * @description tags
     * @var string
     */
    public $tags;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

}
