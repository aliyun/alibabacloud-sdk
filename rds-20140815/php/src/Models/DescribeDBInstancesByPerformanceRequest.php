<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByPerformanceRequest\tag;

class DescribeDBInstancesByPerformanceRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'clientToken' => 'ClientToken',
        'proxyId' => 'proxyId',
        'DBInstanceId' => 'DBInstanceId',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'sortMethod' => 'SortMethod',
        'sortKey' => 'SortKey',
        'tags' => 'Tags',
        'tag' => 'Tag',
        'ownerAccount' => 'OwnerAccount',
        'regionId' => 'RegionId',
    ];
    public function validate() {
        Model::validateRequired('tag', $this->tag, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ClientToken'] = $this->clientToken;
        $res['proxyId'] = $this->proxyId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['SortMethod'] = $this->sortMethod;
        $res['SortKey'] = $this->sortKey;
        $res['Tags'] = $this->tags;
        $res['Tag'] = [];
        if(null !== $this->tag && is_array($this->tag)){
            $n = 0;
            foreach($this->tag as $item){
                $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['RegionId'] = $this->regionId;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBInstancesByPerformanceRequest
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
        if(isset($map['proxyId'])){
            $model->proxyId = $map['proxyId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['SortMethod'])){
            $model->sortMethod = $map['SortMethod'];
        }
        if(isset($map['SortKey'])){
            $model->sortKey = $map['SortKey'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        if(isset($map['Tag'])){
            if(!empty($map['Tag'])){
                $model->tag = [];
                $n = 0;
                foreach($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
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
     * @description proxyId
     * @var string
     */
    public $proxyId;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description page
     * @var integer
     */
    public $pageNumber;

    /**
     * @description sortMethod
     * @var string
     */
    public $sortMethod;

    /**
     * @description sortKey
     * @var string
     */
    public $sortKey;

    /**
     * @description tags
     * @var string
     */
    public $tags;

    /**
     * @description Tag
     * @var array
     */
    public $tag;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

}
