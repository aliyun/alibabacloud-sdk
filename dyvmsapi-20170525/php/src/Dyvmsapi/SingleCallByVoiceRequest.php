<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi;

use AlibabaCloud\Tea\Model;

class SingleCallByVoiceRequest extends Model
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
     * @description calledShowNumber
     *
     * @var string
     */
    public $calledShowNumber;

    /**
     * @description calledNumber
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @description voiceCode
     *
     * @var string
     */
    public $voiceCode;

    /**
     * @description playTimes
     *
     * @var int
     */
    public $playTimes;

    /**
     * @description volume
     *
     * @var int
     */
    public $volume;

    /**
     * @description speed
     *
     * @var int
     */
    public $speed;

    /**
     * @description outId
     *
     * @var string
     */
    public $outId;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'calledShowNumber'     => 'CalledShowNumber',
        'calledNumber'         => 'CalledNumber',
        'voiceCode'            => 'VoiceCode',
        'playTimes'            => 'PlayTimes',
        'volume'               => 'Volume',
        'speed'                => 'Speed',
        'outId'                => 'OutId',
    ];

    public function validate()
    {
        Model::validateRequired('calledShowNumber', $this->calledShowNumber, true);
        Model::validateRequired('calledNumber', $this->calledNumber, true);
        Model::validateRequired('voiceCode', $this->voiceCode, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['AccessKeyId']          = $this->accessKeyId;
        $res['OwnerId']              = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId']      = $this->resourceOwnerId;
        $res['CalledShowNumber']     = $this->calledShowNumber;
        $res['CalledNumber']         = $this->calledNumber;
        $res['VoiceCode']            = $this->voiceCode;
        $res['PlayTimes']            = $this->playTimes;
        $res['Volume']               = $this->volume;
        $res['Speed']                = $this->speed;
        $res['OutId']                = $this->outId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SingleCallByVoiceRequest
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
        if (isset($map['CalledShowNumber'])) {
            $model->calledShowNumber = $map['CalledShowNumber'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['VoiceCode'])) {
            $model->voiceCode = $map['VoiceCode'];
        }
        if (isset($map['PlayTimes'])) {
            $model->playTimes = $map['PlayTimes'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        return $model;
    }
}
