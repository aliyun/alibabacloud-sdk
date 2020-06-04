<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ProduceEditingProjectVideoRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'projectId' => 'ProjectId',
        'timeline' => 'Timeline',
        'title' => 'Title',
        'description' => 'Description',
        'coverURL' => 'CoverURL',
        'mediaMetadata' => 'MediaMetadata',
        'produceConfig' => 'ProduceConfig',
        'userData' => 'UserData',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ProjectId'] = $this->projectId;
        $res['Timeline'] = $this->timeline;
        $res['Title'] = $this->title;
        $res['Description'] = $this->description;
        $res['CoverURL'] = $this->coverURL;
        $res['MediaMetadata'] = $this->mediaMetadata;
        $res['ProduceConfig'] = $this->produceConfig;
        $res['UserData'] = $this->userData;
        return $res;
    }
    /**
     * @param array $map
     * @return ProduceEditingProjectVideoRequest
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
        if(isset($map['ProjectId'])){
            $model->projectId = $map['ProjectId'];
        }
        if(isset($map['Timeline'])){
            $model->timeline = $map['Timeline'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['CoverURL'])){
            $model->coverURL = $map['CoverURL'];
        }
        if(isset($map['MediaMetadata'])){
            $model->mediaMetadata = $map['MediaMetadata'];
        }
        if(isset($map['ProduceConfig'])){
            $model->produceConfig = $map['ProduceConfig'];
        }
        if(isset($map['UserData'])){
            $model->userData = $map['UserData'];
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
     * @description projectId
     * @var string
     */
    public $projectId;

    /**
     * @description timeline
     * @var string
     */
    public $timeline;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description coverUrl
     * @var string
     */
    public $coverURL;

    /**
     * @description mediaMetadata
     * @var string
     */
    public $mediaMetadata;

    /**
     * @description produceConfig
     * @var string
     */
    public $produceConfig;

    /**
     * @description userData
     * @var string
     */
    public $userData;

}
