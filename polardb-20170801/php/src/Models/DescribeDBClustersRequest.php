<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersRequest\tag;

class DescribeDBClustersRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'regionId' => 'RegionId',
        'DBClusterIds' => 'DBClusterIds',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterStatus' => 'DBClusterStatus',
        'DBType' => 'DBType',
        'tag' => 'Tag',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'resourceGroupId' => 'ResourceGroupId',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['RegionId'] = $this->regionId;
        $res['DBClusterIds'] = $this->DBClusterIds;
        $res['DBClusterDescription'] = $this->DBClusterDescription;
        $res['DBClusterStatus'] = $this->DBClusterStatus;
        $res['DBType'] = $this->DBType;
        $res['Tag'] = [];
        if(null !== $this->tag && is_array($this->tag)){
            $n = 0;
            foreach($this->tag as $item){
                $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['ResourceGroupId'] = $this->resourceGroupId;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBClustersRequest
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
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['DBClusterIds'])){
            $model->DBClusterIds = $map['DBClusterIds'];
        }
        if(isset($map['DBClusterDescription'])){
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if(isset($map['DBClusterStatus'])){
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }
        if(isset($map['DBType'])){
            $model->DBType = $map['DBType'];
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
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['ResourceGroupId'])){
            $model->resourceGroupId = $map['ResourceGroupId'];
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
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description dbClusterIds
     * @var string
     */
    public $DBClusterIds;

    /**
     * @description dbClusterDescription
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description dbClusterStatus
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @description dbType
     * @var string
     */
    public $DBType;

    /**
     * @description tags
     * @var array
     */
    public $tag;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description resourceGroupId
     * @var string
     */
    public $resourceGroupId;

}
