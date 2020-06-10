<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitDynamicImageJobRequest extends Model
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
     * @description videoId
     *
     * @var string
     */
    public $videoId;

    /**
     * @description dynamicImageTemplateId
     *
     * @var string
     */
    public $dynamicImageTemplateId;

    /**
     * @description overrideParams
     *
     * @var string
     */
    public $overrideParams;
    protected $_name = [
        'accessKeyId'            => 'AccessKeyId',
        'ownerId'                => 'OwnerId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'videoId'                => 'VideoId',
        'dynamicImageTemplateId' => 'DynamicImageTemplateId',
        'overrideParams'         => 'OverrideParams',
    ];

    public function validate()
    {
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('dynamicImageTemplateId', $this->dynamicImageTemplateId, true);
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
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->dynamicImageTemplateId) {
            $res['DynamicImageTemplateId'] = $this->dynamicImageTemplateId;
        }
        if (null !== $this->overrideParams) {
            $res['OverrideParams'] = $this->overrideParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDynamicImageJobRequest
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
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['DynamicImageTemplateId'])) {
            $model->dynamicImageTemplateId = $map['DynamicImageTemplateId'];
        }
        if (isset($map['OverrideParams'])) {
            $model->overrideParams = $map['OverrideParams'];
        }

        return $model;
    }
}
