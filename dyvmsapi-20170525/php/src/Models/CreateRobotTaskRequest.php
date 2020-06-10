<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateRobotTaskRequest extends Model
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
     * @description taskName
     *
     * @var string
     */
    public $taskName;

    /**
     * @description dialogId
     *
     * @var int
     */
    public $dialogId;

    /**
     * @description corpName
     *
     * @var string
     */
    public $corpName;

    /**
     * @description caller
     *
     * @var string
     */
    public $caller;

    /**
     * @description numberStatusIdent
     *
     * @var bool
     */
    public $numberStatusIdent;

    /**
     * @description retryType
     *
     * @var int
     */
    public $retryType;

    /**
     * @description recallStateCodes
     *
     * @var string
     */
    public $recallStateCodes;

    /**
     * @description recallTimes
     *
     * @var int
     */
    public $recallTimes;

    /**
     * @description recallInterval
     *
     * @var int
     */
    public $recallInterval;

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
        'taskName'             => 'TaskName',
        'dialogId'             => 'DialogId',
        'corpName'             => 'CorpName',
        'caller'               => 'Caller',
        'numberStatusIdent'    => 'NumberStatusIdent',
        'retryType'            => 'RetryType',
        'recallStateCodes'     => 'RecallStateCodes',
        'recallTimes'          => 'RecallTimes',
        'recallInterval'       => 'RecallInterval',
        'isSelfLine'           => 'IsSelfLine',
    ];

    public function validate()
    {
        Model::validateRequired('taskName', $this->taskName, true);
        Model::validateRequired('dialogId', $this->dialogId, true);
        Model::validateRequired('caller', $this->caller, true);
        Model::validateRequired('numberStatusIdent', $this->numberStatusIdent, true);
        Model::validateRequired('retryType', $this->retryType, true);
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
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->corpName) {
            $res['CorpName'] = $this->corpName;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->numberStatusIdent) {
            $res['NumberStatusIdent'] = $this->numberStatusIdent;
        }
        if (null !== $this->retryType) {
            $res['RetryType'] = $this->retryType;
        }
        if (null !== $this->recallStateCodes) {
            $res['RecallStateCodes'] = $this->recallStateCodes;
        }
        if (null !== $this->recallTimes) {
            $res['RecallTimes'] = $this->recallTimes;
        }
        if (null !== $this->recallInterval) {
            $res['RecallInterval'] = $this->recallInterval;
        }
        if (null !== $this->isSelfLine) {
            $res['IsSelfLine'] = $this->isSelfLine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRobotTaskRequest
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
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['CorpName'])) {
            $model->corpName = $map['CorpName'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['NumberStatusIdent'])) {
            $model->numberStatusIdent = $map['NumberStatusIdent'];
        }
        if (isset($map['RetryType'])) {
            $model->retryType = $map['RetryType'];
        }
        if (isset($map['RecallStateCodes'])) {
            $model->recallStateCodes = $map['RecallStateCodes'];
        }
        if (isset($map['RecallTimes'])) {
            $model->recallTimes = $map['RecallTimes'];
        }
        if (isset($map['RecallInterval'])) {
            $model->recallInterval = $map['RecallInterval'];
        }
        if (isset($map['IsSelfLine'])) {
            $model->isSelfLine = $map['IsSelfLine'];
        }

        return $model;
    }
}
