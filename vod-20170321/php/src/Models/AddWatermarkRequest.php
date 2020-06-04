<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddWatermarkRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'type' => 'Type',
        'name' => 'Name',
        'watermarkConfig' => 'WatermarkConfig',
        'fileUrl' => 'FileUrl',
        'appId' => 'AppId',
    ];
    public function validate() {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('watermarkConfig', $this->watermarkConfig, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['Type'] = $this->type;
        $res['Name'] = $this->name;
        $res['WatermarkConfig'] = $this->watermarkConfig;
        $res['FileUrl'] = $this->fileUrl;
        $res['AppId'] = $this->appId;
        return $res;
    }
    /**
     * @param array $map
     * @return AddWatermarkRequest
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
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['WatermarkConfig'])){
            $model->watermarkConfig = $map['WatermarkConfig'];
        }
        if(isset($map['FileUrl'])){
            $model->fileUrl = $map['FileUrl'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
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
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description watermarkConfig
     * @var string
     */
    public $watermarkConfig;

    /**
     * @description fileUrl
     * @var string
     */
    public $fileUrl;

    /**
     * @description appId
     * @var string
     */
    public $appId;

}
