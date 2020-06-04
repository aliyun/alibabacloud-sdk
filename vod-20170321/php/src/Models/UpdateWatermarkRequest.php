<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateWatermarkRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'name' => 'Name',
        'watermarkId' => 'WatermarkId',
        'watermarkConfig' => 'WatermarkConfig',
    ];
    public function validate() {
        Model::validateRequired('watermarkId', $this->watermarkId, true);
        Model::validateRequired('watermarkConfig', $this->watermarkConfig, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['Name'] = $this->name;
        $res['WatermarkId'] = $this->watermarkId;
        $res['WatermarkConfig'] = $this->watermarkConfig;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateWatermarkRequest
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
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['WatermarkId'])){
            $model->watermarkId = $map['WatermarkId'];
        }
        if(isset($map['WatermarkConfig'])){
            $model->watermarkConfig = $map['WatermarkConfig'];
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
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description watertempId
     * @var string
     */
    public $watermarkId;

    /**
     * @description watermarkConfig
     * @var string
     */
    public $watermarkConfig;

}
