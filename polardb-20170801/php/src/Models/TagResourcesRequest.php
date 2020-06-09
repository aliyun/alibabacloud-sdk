<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\TagResourcesRequest\tag;

class TagResourcesRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ownerAccount' => 'OwnerAccount',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'resourceId' => 'ResourceId',
        'tag' => 'Tag',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('tag', $this->tag, true);
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
        $res['Tag'] = [];
        if(null !== $this->tag && is_array($this->tag)){
            $n = 0;
            foreach($this->tag as $item){
                $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return TagResourcesRequest
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
        if(isset($map['Tag'])){
            if(!empty($map['Tag'])){
                $model->tag = [];
                $n = 0;
                foreach($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
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
     * @description tags
     * @var array
     */
    public $tag;

}
