<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitDynamicImageJobRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'videoId' => 'VideoId',
        'dynamicImageTemplateId' => 'DynamicImageTemplateId',
        'overrideParams' => 'OverrideParams',
    ];
    public function validate() {
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('dynamicImageTemplateId', $this->dynamicImageTemplateId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['VideoId'] = $this->videoId;
        $res['DynamicImageTemplateId'] = $this->dynamicImageTemplateId;
        $res['OverrideParams'] = $this->overrideParams;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitDynamicImageJobRequest
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
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['DynamicImageTemplateId'])){
            $model->dynamicImageTemplateId = $map['DynamicImageTemplateId'];
        }
        if(isset($map['OverrideParams'])){
            $model->overrideParams = $map['OverrideParams'];
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
     * @description videoId
     * @var string
     */
    public $videoId;

    /**
     * @description dynamicImageTemplateId
     * @var string
     */
    public $dynamicImageTemplateId;

    /**
     * @description overrideParams
     * @var string
     */
    public $overrideParams;

}
