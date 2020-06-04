<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetAttachedMediaInfoRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'mediaIds' => 'MediaIds',
        'authTimeout' => 'AuthTimeout',
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'outputType' => 'OutputType',
    ];
    public function validate() {
        Model::validateRequired('mediaIds', $this->mediaIds, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['MediaIds'] = $this->mediaIds;
        $res['AuthTimeout'] = $this->authTimeout;
        $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        $res['OutputType'] = $this->outputType;
        return $res;
    }
    /**
     * @param array $map
     * @return GetAttachedMediaInfoRequest
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
        if(isset($map['MediaIds'])){
            $model->mediaIds = $map['MediaIds'];
        }
        if(isset($map['AuthTimeout'])){
            $model->authTimeout = $map['AuthTimeout'];
        }
        if(isset($map['ResourceRealOwnerId'])){
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }
        if(isset($map['OutputType'])){
            $model->outputType = $map['OutputType'];
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
     * @description mediaIds
     * @var string
     */
    public $mediaIds;

    /**
     * @description authTimeout
     * @var integer
     */
    public $authTimeout;

    /**
     * @description resourceRealOwnerId
     * @var integer
     */
    public $resourceRealOwnerId;

    /**
     * @description outputType
     * @var string
     */
    public $outputType;

}
