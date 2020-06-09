<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClustersWithBackupsRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'regionId' => 'RegionId',
        'DBClusterIds' => 'DBClusterIds',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBType' => 'DBType',
        'isDeleted' => 'IsDeleted',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'DBVersion' => 'DBVersion',
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
        $res['DBType'] = $this->DBType;
        $res['IsDeleted'] = $this->isDeleted;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['DBVersion'] = $this->DBVersion;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBClustersWithBackupsRequest
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
        if(isset($map['DBType'])){
            $model->DBType = $map['DBType'];
        }
        if(isset($map['IsDeleted'])){
            $model->isDeleted = $map['IsDeleted'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['DBVersion'])){
            $model->DBVersion = $map['DBVersion'];
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
     * @description dbType
     * @var string
     */
    public $DBType;

    /**
     * @description isDeleted
     * @var integer
     */
    public $isDeleted;

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
     * @description dbVersion
     * @var string
     */
    public $DBVersion;

}
