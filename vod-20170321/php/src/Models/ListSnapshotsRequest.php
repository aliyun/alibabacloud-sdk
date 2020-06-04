<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListSnapshotsRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'videoId' => 'VideoId',
        'snapshotType' => 'SnapshotType',
        'authTimeout' => 'AuthTimeout',
        'pageSize' => 'PageSize',
        'pageNo' => 'PageNo',
    ];
    public function validate() {
        Model::validateRequired('videoId', $this->videoId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['VideoId'] = $this->videoId;
        $res['SnapshotType'] = $this->snapshotType;
        $res['AuthTimeout'] = $this->authTimeout;
        $res['PageSize'] = $this->pageSize;
        $res['PageNo'] = $this->pageNo;
        return $res;
    }
    /**
     * @param array $map
     * @return ListSnapshotsRequest
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
        if(isset($map['SnapshotType'])){
            $model->snapshotType = $map['SnapshotType'];
        }
        if(isset($map['AuthTimeout'])){
            $model->authTimeout = $map['AuthTimeout'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
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
     * @description snapshotType
     * @var string
     */
    public $snapshotType;

    /**
     * @description authTimeout
     * @var string
     */
    public $authTimeout;

    /**
     * @description pageSize
     * @var string
     */
    public $pageSize;

    /**
     * @description pageNo
     * @var string
     */
    public $pageNo;

}
