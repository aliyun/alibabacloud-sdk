<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi;

use AlibabaCloud\Tea\Model;

class UnbindNumberAndVoipIdRequest extends Model
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
     * @description phoneNumber
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description voipId
     *
     * @var string
     */
    public $voipId;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'phoneNumber'          => 'PhoneNumber',
        'voipId'               => 'VoipId',
    ];

    public function validate()
    {
        Model::validateRequired('phoneNumber', $this->phoneNumber, true);
        Model::validateRequired('voipId', $this->voipId, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['AccessKeyId']          = $this->accessKeyId;
        $res['OwnerId']              = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId']      = $this->resourceOwnerId;
        $res['PhoneNumber']          = $this->phoneNumber;
        $res['VoipId']               = $this->voipId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindNumberAndVoipIdRequest
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
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['VoipId'])) {
            $model->voipId = $map['VoipId'];
        }

        return $model;
    }
}
