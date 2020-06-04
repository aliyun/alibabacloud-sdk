<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetCategoriesRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'cateId' => 'CateId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'sortBy' => 'SortBy',
        'type' => 'Type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['CateId'] = $this->cateId;
        $res['PageNo'] = $this->pageNo;
        $res['PageSize'] = $this->pageSize;
        $res['SortBy'] = $this->sortBy;
        $res['Type'] = $this->type;
        return $res;
    }
    /**
     * @param array $map
     * @return GetCategoriesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['SortBy'])){
            $model->sortBy = $map['SortBy'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var string
     */
    public $ownerId;

    /**
     * @description resourceOwnerId
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description cateId
     * @var integer
     */
    public $cateId;

    /**
     * @description pageNo
     * @var integer
     */
    public $pageNo;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description sortBy
     * @var string
     */
    public $sortBy;

    /**
     * @description type
     * @var string
     */
    public $type;

}
