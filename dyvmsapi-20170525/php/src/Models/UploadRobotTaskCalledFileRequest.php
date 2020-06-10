<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class UploadRobotTaskCalledFileRequest extends Model
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
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description calledNumber
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @description ttsParam
     *
     * @var string
     */
    public $ttsParam;

    /**
     * @description ttsParamHead
     *
     * @var string
     */
    public $ttsParamHead;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'id'                   => 'Id',
        'calledNumber'         => 'CalledNumber',
        'ttsParam'             => 'TtsParam',
        'ttsParamHead'         => 'TtsParamHead',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('calledNumber', $this->calledNumber, true);
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->ttsParam) {
            $res['TtsParam'] = $this->ttsParam;
        }
        if (null !== $this->ttsParamHead) {
            $res['TtsParamHead'] = $this->ttsParamHead;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadRobotTaskCalledFileRequest
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['TtsParam'])) {
            $model->ttsParam = $map['TtsParam'];
        }
        if (isset($map['TtsParamHead'])) {
            $model->ttsParamHead = $map['TtsParamHead'];
        }

        return $model;
    }
}
