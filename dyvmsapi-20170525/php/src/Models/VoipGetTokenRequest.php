<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class VoipGetTokenRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description voipId
     *
     * @var string
     */
    public $voipId;

    /**
     * @description deviceId
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description isCustomAccount
     *
     * @var bool
     */
    public $isCustomAccount;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'voipId'               => 'VoipId',
        'deviceId'             => 'DeviceId',
        'isCustomAccount'      => 'IsCustomAccount',
    ];

    public function validate()
    {
        Model::validateRequired('voipId', $this->voipId, true);
        Model::validateRequired('deviceId', $this->deviceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->voipId) {
            $res['VoipId'] = $this->voipId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->isCustomAccount) {
            $res['IsCustomAccount'] = $this->isCustomAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VoipGetTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['VoipId'])) {
            $model->voipId = $map['VoipId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['IsCustomAccount'])) {
            $model->isCustomAccount = $map['IsCustomAccount'];
        }

        return $model;
    }
}
