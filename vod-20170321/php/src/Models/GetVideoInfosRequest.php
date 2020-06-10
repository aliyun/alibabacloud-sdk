<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetVideoInfosRequest extends Model
{
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
     * @description mediaIds
     *
     * @var string
     */
    public $videoIds;

    /**
     * @description additionType
     *
     * @var string
     */
    public $additionType;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'videoIds'             => 'VideoIds',
        'additionType'         => 'AdditionType',
    ];

    public function validate()
    {
        Model::validateRequired('videoIds', $this->videoIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->videoIds) {
            $res['VideoIds'] = $this->videoIds;
        }
        if (null !== $this->additionType) {
            $res['AdditionType'] = $this->additionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['VideoIds'])) {
            $model->videoIds = $map['VideoIds'];
        }
        if (isset($map['AdditionType'])) {
            $model->additionType = $map['AdditionType'];
        }

        return $model;
    }
}
