<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class BatchRobotSmartCallRequest extends Model
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
     * @description corpName
     *
     * @var string
     */
    public $corpName;

    /**
     * @description calledNumber
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @description dialogId
     *
     * @var string
     */
    public $dialogId;

    /**
     * @description earlyMediaAsr
     *
     * @var bool
     */
    public $earlyMediaAsr;

    /**
     * @description taskName
     *
     * @var string
     */
    public $taskName;

    /**
     * @description scheduleTime
     *
     * @var int
     */
    public $scheduleTime;

    /**
     * @description scheduleCall
     *
     * @var bool
     */
    public $scheduleCall;

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

    /**
     * @description isSelfLine
     *
     * @var bool
     */
    public $isSelfLine;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'calledShowNumber'     => 'CalledShowNumber',
        'corpName'             => 'CorpName',
        'calledNumber'         => 'CalledNumber',
        'dialogId'             => 'DialogId',
        'earlyMediaAsr'        => 'EarlyMediaAsr',
        'taskName'             => 'TaskName',
        'scheduleTime'         => 'ScheduleTime',
        'scheduleCall'         => 'ScheduleCall',
        'ttsParam'             => 'TtsParam',
        'ttsParamHead'         => 'TtsParamHead',
        'isSelfLine'           => 'IsSelfLine',
    ];

    public function validate()
    {
        Model::validateRequired('calledShowNumber', $this->calledShowNumber, true);
        Model::validateRequired('calledNumber', $this->calledNumber, true);
        Model::validateRequired('dialogId', $this->dialogId, true);
        Model::validateRequired('taskName', $this->taskName, true);
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
        if (null !== $this->corpName) {
            $res['CorpName'] = $this->corpName;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->earlyMediaAsr) {
            $res['EarlyMediaAsr'] = $this->earlyMediaAsr;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->scheduleCall) {
            $res['ScheduleCall'] = $this->scheduleCall;
        }
        if (null !== $this->ttsParam) {
            $res['TtsParam'] = $this->ttsParam;
        }
        if (null !== $this->ttsParamHead) {
            $res['TtsParamHead'] = $this->ttsParamHead;
        }
        if (null !== $this->isSelfLine) {
            $res['IsSelfLine'] = $this->isSelfLine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchRobotSmartCallRequest
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
        if (isset($map['CorpName'])) {
            $model->corpName = $map['CorpName'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['EarlyMediaAsr'])) {
            $model->earlyMediaAsr = $map['EarlyMediaAsr'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['ScheduleCall'])) {
            $model->scheduleCall = $map['ScheduleCall'];
        }
        if (isset($map['TtsParam'])) {
            $model->ttsParam = $map['TtsParam'];
        }
        if (isset($map['TtsParamHead'])) {
            $model->ttsParamHead = $map['TtsParamHead'];
        }
        if (isset($map['IsSelfLine'])) {
            $model->isSelfLine = $map['IsSelfLine'];
        }

        return $model;
    }
}
