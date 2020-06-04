<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetMezzanineInfoRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'videoId' => 'VideoId',
        'authTimeout' => 'AuthTimeout',
        'previewSegment' => 'PreviewSegment',
        'outputType' => 'OutputType',
        'additionType' => 'AdditionType',
    ];
    public function validate() {
        Model::validateRequired('videoId', $this->videoId, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['VideoId'] = $this->videoId;
        $res['AuthTimeout'] = $this->authTimeout;
        $res['PreviewSegment'] = $this->previewSegment;
        $res['OutputType'] = $this->outputType;
        $res['AdditionType'] = $this->additionType;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMezzanineInfoRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
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
        if(isset($map['AuthTimeout'])){
            $model->authTimeout = $map['AuthTimeout'];
        }
        if(isset($map['PreviewSegment'])){
            $model->previewSegment = $map['PreviewSegment'];
        }
        if(isset($map['OutputType'])){
            $model->outputType = $map['OutputType'];
        }
        if(isset($map['AdditionType'])){
            $model->additionType = $map['AdditionType'];
        }
        return $model;
    }
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
     * @description authTimeout
     * @var integer
     */
    public $authTimeout;

    /**
     * @description previewSegment
     * @var bool
     */
    public $previewSegment;

    /**
     * @description outputType
     * @var string
     */
    public $outputType;

    /**
     * @description additionType
     * @var string
     */
    public $additionType;

}
