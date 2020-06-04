<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class VoipGetTokenRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'voipId' => 'VoipId',
        'deviceId' => 'DeviceId',
        'isCustomAccount' => 'IsCustomAccount',
    ];
    public function validate() {
        Model::validateRequired('voipId', $this->voipId, true);
        Model::validateRequired('deviceId', $this->deviceId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['VoipId'] = $this->voipId;
        $res['DeviceId'] = $this->deviceId;
        $res['IsCustomAccount'] = $this->isCustomAccount;
        return $res;
    }
    /**
     * @param array $map
     * @return VoipGetTokenRequest
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
        if(isset($map['VoipId'])){
            $model->voipId = $map['VoipId'];
        }
        if(isset($map['DeviceId'])){
            $model->deviceId = $map['DeviceId'];
        }
        if(isset($map['IsCustomAccount'])){
            $model->isCustomAccount = $map['IsCustomAccount'];
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
     * @description voipId
     * @var string
     */
    public $voipId;

    /**
     * @description deviceId
     * @var string
     */
    public $deviceId;

    /**
     * @description isCustomAccount
     * @var bool
     */
    public $isCustomAccount;

}
