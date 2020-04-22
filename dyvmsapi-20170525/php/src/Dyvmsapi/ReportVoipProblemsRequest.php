<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi;

use AlibabaCloud\Tea\Model;

class ReportVoipProblemsRequest extends Model
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
     * @description channelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @description voipId
     *
     * @var string
     */
    public $voipId;

    /**
     * @description title
     *
     * @var string
     */
    public $title;

    /**
     * @description desc
     *
     * @var string
     */
    public $desc;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'channelId'            => 'ChannelId',
        'voipId'               => 'VoipId',
        'title'                => 'Title',
        'desc'                 => 'Desc',
    ];

    public function validate()
    {
        Model::validateRequired('voipId', $this->voipId, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('desc', $this->desc, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['AccessKeyId']          = $this->accessKeyId;
        $res['OwnerId']              = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId']      = $this->resourceOwnerId;
        $res['ChannelId']            = $this->channelId;
        $res['VoipId']               = $this->voipId;
        $res['Title']                = $this->title;
        $res['Desc']                 = $this->desc;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportVoipProblemsRequest
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
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['VoipId'])) {
            $model->voipId = $map['VoipId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
