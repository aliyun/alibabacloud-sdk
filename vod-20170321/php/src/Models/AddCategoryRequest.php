<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddCategoryRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'cateName' => 'CateName',
        'parentId' => 'ParentId',
        'type' => 'Type',
    ];
    public function validate() {
        Model::validateRequired('cateName', $this->cateName, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['CateName'] = $this->cateName;
        $res['ParentId'] = $this->parentId;
        $res['Type'] = $this->type;
        return $res;
    }
    /**
     * @param array $map
     * @return AddCategoryRequest
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
        if(isset($map['CateName'])){
            $model->cateName = $map['CateName'];
        }
        if(isset($map['ParentId'])){
            $model->parentId = $map['ParentId'];
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
     * @description cateName
     * @var string
     */
    public $cateName;

    /**
     * @description parentId
     * @var integer
     */
    public $parentId;

    /**
     * @description type
     * @var string
     */
    public $type;

}
