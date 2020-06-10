<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class SmartCallRequest extends Model
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
     * @description recordFlag
     *
     * @var bool
     */
    public $recordFlag;

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
     * @description asrModelId
     *
     * @var string
     */
    public $asrModelId;

    /**
     * @description pauseTime
     *
     * @var int
     */
    public $pauseTime;

    /**
     * @description muteTime
     *
     * @var int
     */
    public $muteTime;

    /**
     * @description actionCodeBreak
     *
     * @var bool
     */
    public $actionCodeBreak;

    /**
     * @description outId
     *
     * @var string
     */
    public $outId;

    /**
     * @description dynamicId
     *
     * @var string
     */
    public $dynamicId;

    /**
     * @description earlyMediaAsr
     *
     * @var bool
     */
    public $earlyMediaAsr;

    /**
     * @description voiceCodeParam
     *
     * @var string
     */
    public $voiceCodeParam;

    /**
     * @description sessionTimeout
     *
     * @var int
     */
    public $sessionTimeout;

    /**
     * @description actionCodeTimeBreak
     *
     * @var int
     */
    public $actionCodeTimeBreak;

    /**
     * @description ttsStyle
     *
     * @var string
     */
    public $ttsStyle;

    /**
     * @description ttsVolume
     *
     * @var int
     */
    public $ttsVolume;

    /**
     * @description ttsSpeed
     *
     * @var int
     */
    public $ttsSpeed;

    /**
     * @description ttsConf
     *
     * @var bool
     */
    public $ttsConf;

    /**
     * @description asrBaseId
     *
     * @var string
     */
    public $asrBaseId;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'calledShowNumber'     => 'CalledShowNumber',
        'calledNumber'         => 'CalledNumber',
        'voiceCode'            => 'VoiceCode',
        'recordFlag'           => 'RecordFlag',
        'volume'               => 'Volume',
        'speed'                => 'Speed',
        'asrModelId'           => 'AsrModelId',
        'pauseTime'            => 'PauseTime',
        'muteTime'             => 'MuteTime',
        'actionCodeBreak'      => 'ActionCodeBreak',
        'outId'                => 'OutId',
        'dynamicId'            => 'DynamicId',
        'earlyMediaAsr'        => 'EarlyMediaAsr',
        'voiceCodeParam'       => 'VoiceCodeParam',
        'sessionTimeout'       => 'SessionTimeout',
        'actionCodeTimeBreak'  => 'ActionCodeTimeBreak',
        'ttsStyle'             => 'TtsStyle',
        'ttsVolume'            => 'TtsVolume',
        'ttsSpeed'             => 'TtsSpeed',
        'ttsConf'              => 'TtsConf',
        'asrBaseId'            => 'AsrBaseId',
    ];

    public function validate()
    {
        Model::validateRequired('calledShowNumber', $this->calledShowNumber, true);
        Model::validateRequired('calledNumber', $this->calledNumber, true);
        Model::validateRequired('voiceCode', $this->voiceCode, true);
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
        if (null !== $this->calledShowNumber) {
            $res['CalledShowNumber'] = $this->calledShowNumber;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->voiceCode) {
            $res['VoiceCode'] = $this->voiceCode;
        }
        if (null !== $this->recordFlag) {
            $res['RecordFlag'] = $this->recordFlag;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->asrModelId) {
            $res['AsrModelId'] = $this->asrModelId;
        }
        if (null !== $this->pauseTime) {
            $res['PauseTime'] = $this->pauseTime;
        }
        if (null !== $this->muteTime) {
            $res['MuteTime'] = $this->muteTime;
        }
        if (null !== $this->actionCodeBreak) {
            $res['ActionCodeBreak'] = $this->actionCodeBreak;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->dynamicId) {
            $res['DynamicId'] = $this->dynamicId;
        }
        if (null !== $this->earlyMediaAsr) {
            $res['EarlyMediaAsr'] = $this->earlyMediaAsr;
        }
        if (null !== $this->voiceCodeParam) {
            $res['VoiceCodeParam'] = $this->voiceCodeParam;
        }
        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }
        if (null !== $this->actionCodeTimeBreak) {
            $res['ActionCodeTimeBreak'] = $this->actionCodeTimeBreak;
        }
        if (null !== $this->ttsStyle) {
            $res['TtsStyle'] = $this->ttsStyle;
        }
        if (null !== $this->ttsVolume) {
            $res['TtsVolume'] = $this->ttsVolume;
        }
        if (null !== $this->ttsSpeed) {
            $res['TtsSpeed'] = $this->ttsSpeed;
        }
        if (null !== $this->ttsConf) {
            $res['TtsConf'] = $this->ttsConf;
        }
        if (null !== $this->asrBaseId) {
            $res['AsrBaseId'] = $this->asrBaseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SmartCallRequest
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
        if (isset($map['RecordFlag'])) {
            $model->recordFlag = $map['RecordFlag'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['AsrModelId'])) {
            $model->asrModelId = $map['AsrModelId'];
        }
        if (isset($map['PauseTime'])) {
            $model->pauseTime = $map['PauseTime'];
        }
        if (isset($map['MuteTime'])) {
            $model->muteTime = $map['MuteTime'];
        }
        if (isset($map['ActionCodeBreak'])) {
            $model->actionCodeBreak = $map['ActionCodeBreak'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['DynamicId'])) {
            $model->dynamicId = $map['DynamicId'];
        }
        if (isset($map['EarlyMediaAsr'])) {
            $model->earlyMediaAsr = $map['EarlyMediaAsr'];
        }
        if (isset($map['VoiceCodeParam'])) {
            $model->voiceCodeParam = $map['VoiceCodeParam'];
        }
        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }
        if (isset($map['ActionCodeTimeBreak'])) {
            $model->actionCodeTimeBreak = $map['ActionCodeTimeBreak'];
        }
        if (isset($map['TtsStyle'])) {
            $model->ttsStyle = $map['TtsStyle'];
        }
        if (isset($map['TtsVolume'])) {
            $model->ttsVolume = $map['TtsVolume'];
        }
        if (isset($map['TtsSpeed'])) {
            $model->ttsSpeed = $map['TtsSpeed'];
        }
        if (isset($map['TtsConf'])) {
            $model->ttsConf = $map['TtsConf'];
        }
        if (isset($map['AsrBaseId'])) {
            $model->asrBaseId = $map['AsrBaseId'];
        }

        return $model;
    }
}
