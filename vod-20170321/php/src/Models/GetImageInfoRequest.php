<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetImageInfoRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'imageId' => 'ImageId',
        'authTimeout' => 'AuthTimeout',
        'outputType' => 'OutputType',
    ];
    public function validate() {
        Model::validateRequired('imageId', $this->imageId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ImageId'] = $this->imageId;
        $res['AuthTimeout'] = $this->authTimeout;
        $res['OutputType'] = $this->outputType;
        return $res;
    }
    /**
     * @param array $map
     * @return GetImageInfoRequest
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
        if(isset($map['ImageId'])){
            $model->imageId = $map['ImageId'];
        }
        if(isset($map['AuthTimeout'])){
            $model->authTimeout = $map['AuthTimeout'];
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
     * @description mediaId
     * @var string
     */
    public $imageId;

    /**
     * @description authTimeout
     * @var integer
     */
    public $authTimeout;

    /**
     * @description outputType
     * @var string
     */
    public $outputType;

}
