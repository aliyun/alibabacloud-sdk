<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class MoveAppResourceRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'targetAppId' => 'TargetAppId',
        'resourceType' => 'ResourceType',
        'resourceIds' => 'ResourceIds',
    ];
    public function validate() {
        Model::validateRequired('targetAppId', $this->targetAppId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('resourceIds', $this->resourceIds, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['TargetAppId'] = $this->targetAppId;
        $res['ResourceType'] = $this->resourceType;
        $res['ResourceIds'] = $this->resourceIds;
        return $res;
    }
    /**
     * @param array $map
     * @return MoveAppResourceRequest
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
        if(isset($map['TargetAppId'])){
            $model->targetAppId = $map['TargetAppId'];
        }
        if(isset($map['ResourceType'])){
            $model->resourceType = $map['ResourceType'];
        }
        if(isset($map['ResourceIds'])){
            $model->resourceIds = $map['ResourceIds'];
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
     * @description targetAppId
     * @var string
     */
    public $targetAppId;

    /**
     * @description resourceType
     * @var string
     */
    public $resourceType;

    /**
     * @description resourceIds
     * @var string
     */
    public $resourceIds;

}
