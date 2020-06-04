<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateEditingProjectRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount' => 'OwnerAccount',
        'projectId' => 'ProjectId',
        'title' => 'Title',
        'timeline' => 'Timeline',
        'description' => 'Description',
        'coverURL' => 'CoverURL',
    ];
    public function validate() {
        Model::validateRequired('projectId', $this->projectId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['ProjectId'] = $this->projectId;
        $res['Title'] = $this->title;
        $res['Timeline'] = $this->timeline;
        $res['Description'] = $this->description;
        $res['CoverURL'] = $this->coverURL;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateEditingProjectRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['ProjectId'])){
            $model->projectId = $map['ProjectId'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Timeline'])){
            $model->timeline = $map['Timeline'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['CoverURL'])){
            $model->coverURL = $map['CoverURL'];
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
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description projectId
     * @var string
     */
    public $projectId;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description timeline
     * @var string
     */
    public $timeline;

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

}
