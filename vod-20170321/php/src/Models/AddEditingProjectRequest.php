<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddEditingProjectRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount' => 'OwnerAccount',
        'title' => 'Title',
        'description' => 'Description',
        'timeline' => 'Timeline',
        'coverURL' => 'CoverURL',
        'division' => 'Division',
    ];
    public function validate() {
        Model::validateRequired('title', $this->title, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['Title'] = $this->title;
        $res['Description'] = $this->description;
        $res['Timeline'] = $this->timeline;
        $res['CoverURL'] = $this->coverURL;
        $res['Division'] = $this->division;
        return $res;
    }
    /**
     * @param array $map
     * @return AddEditingProjectRequest
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
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['Timeline'])){
            $model->timeline = $map['Timeline'];
        }
        if(isset($map['CoverURL'])){
            $model->coverURL = $map['CoverURL'];
        }
        if(isset($map['Division'])){
            $model->division = $map['Division'];
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
     * @description timeline
     * @var string
     */
    public $timeline;

    /**
     * @description coverUrl
     * @var string
     */
    public $coverURL;

    /**
     * @description projectRegion
     * @var string
     */
    public $division;

}
