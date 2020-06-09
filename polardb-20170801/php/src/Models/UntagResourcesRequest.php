<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'resourceId' => 'ResourceId',
        'tagKey' => 'TagKey',
        'all' => 'All',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['RegionId'] = $this->regionId;
        $res['ResourceType'] = $this->resourceType;
        $res['ResourceId'] = [];
        if(null !== $this->resourceId){
            $res['ResourceId'] = $this->resourceId;
        }
        $res['TagKey'] = [];
        if(null !== $this->tagKey){
            $res['TagKey'] = $this->tagKey;
        }
        $res['All'] = $this->all;
        return $res;
    }
    /**
     * @param array $map
     * @return UntagResourcesRequest
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
        if(isset($map['ResourceType'])){
            $model->resourceType = $map['ResourceType'];
        }
        if(isset($map['ResourceId'])){
            if(!empty($map['ResourceId'])){
                $model->resourceId = [];
                $model->resourceId = $map['ResourceId'];
            }
        }
        if(isset($map['TagKey'])){
            if(!empty($map['TagKey'])){
                $model->tagKey = [];
                $model->tagKey = $map['TagKey'];
            }
        }
        if(isset($map['All'])){
            $model->all = $map['All'];
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
     * @description resourceType
     * @var string
     */
    public $resourceType;

    /**
     * @description resourceIds
     * @var array
     */
    public $resourceId;

    /**
     * @description tagKeys
     * @var array
     */
    public $tagKey;

    /**
     * @description all
     * @var bool
     */
    public $all;

}
