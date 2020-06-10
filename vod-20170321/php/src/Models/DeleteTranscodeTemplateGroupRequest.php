<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteTranscodeTemplateGroupRequest extends Model
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
     * @description transcodeTemplateGroupId
     *
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description transcodeTemplateIdList
     *
     * @var string
     */
    public $transcodeTemplateIds;

    /**
     * @description forceDelGroup
     *
     * @var string
     */
    public $forceDelGroup;
    protected $_name = [
        'accessKeyId'              => 'AccessKeyId',
        'ownerId'                  => 'OwnerId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeTemplateIds'     => 'TranscodeTemplateIds',
        'forceDelGroup'            => 'ForceDelGroup',
    ];

    public function validate()
    {
        Model::validateRequired('transcodeTemplateGroupId', $this->transcodeTemplateGroupId, true);
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
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }
        if (null !== $this->transcodeTemplateIds) {
            $res['TranscodeTemplateIds'] = $this->transcodeTemplateIds;
        }
        if (null !== $this->forceDelGroup) {
            $res['ForceDelGroup'] = $this->forceDelGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTranscodeTemplateGroupRequest
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
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if (isset($map['TranscodeTemplateIds'])) {
            $model->transcodeTemplateIds = $map['TranscodeTemplateIds'];
        }
        if (isset($map['ForceDelGroup'])) {
            $model->forceDelGroup = $map['ForceDelGroup'];
        }

        return $model;
    }
}
