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
        $res                         = [];
        $res['AccessKeyId']          = $this->accessKeyId;
        $res['OwnerId']              = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId']      = $this->resourceOwnerId;
        $res['CalledShowNumber']     = $this->calledShowNumber;
        $res['CorpName']             = $this->corpName;
        $res['CalledNumber']         = $this->calledNumber;
        $res['DialogId']             = $this->dialogId;
        $res['EarlyMediaAsr']        = $this->earlyMediaAsr;
        $res['TaskName']             = $this->taskName;
        $res['ScheduleTime']         = $this->scheduleTime;
        $res['ScheduleCall']         = $this->scheduleCall;
        $res['TtsParam']             = $this->ttsParam;
        $res['TtsParamHead']         = $this->ttsParamHead;
        $res['IsSelfLine']           = $this->isSelfLine;

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
