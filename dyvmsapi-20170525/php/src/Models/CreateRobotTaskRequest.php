<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateRobotTaskRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'taskName' => 'TaskName',
        'dialogId' => 'DialogId',
        'corpName' => 'CorpName',
        'caller' => 'Caller',
        'numberStatusIdent' => 'NumberStatusIdent',
        'retryType' => 'RetryType',
        'recallStateCodes' => 'RecallStateCodes',
        'recallTimes' => 'RecallTimes',
        'recallInterval' => 'RecallInterval',
        'isSelfLine' => 'IsSelfLine',
    ];
    public function validate() {
        Model::validateRequired('taskName', $this->taskName, true);
        Model::validateRequired('dialogId', $this->dialogId, true);
        Model::validateRequired('caller', $this->caller, true);
        Model::validateRequired('numberStatusIdent', $this->numberStatusIdent, true);
        Model::validateRequired('retryType', $this->retryType, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['TaskName'] = $this->taskName;
        $res['DialogId'] = $this->dialogId;
        $res['CorpName'] = $this->corpName;
        $res['Caller'] = $this->caller;
        $res['NumberStatusIdent'] = $this->numberStatusIdent;
        $res['RetryType'] = $this->retryType;
        $res['RecallStateCodes'] = $this->recallStateCodes;
        $res['RecallTimes'] = $this->recallTimes;
        $res['RecallInterval'] = $this->recallInterval;
        $res['IsSelfLine'] = $this->isSelfLine;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateRobotTaskRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['TaskName'])){
            $model->taskName = $map['TaskName'];
        }
        if(isset($map['DialogId'])){
            $model->dialogId = $map['DialogId'];
        }
        if(isset($map['CorpName'])){
            $model->corpName = $map['CorpName'];
        }
        if(isset($map['Caller'])){
            $model->caller = $map['Caller'];
        }
        if(isset($map['NumberStatusIdent'])){
            $model->numberStatusIdent = $map['NumberStatusIdent'];
        }
        if(isset($map['RetryType'])){
            $model->retryType = $map['RetryType'];
        }
        if(isset($map['RecallStateCodes'])){
            $model->recallStateCodes = $map['RecallStateCodes'];
        }
        if(isset($map['RecallTimes'])){
            $model->recallTimes = $map['RecallTimes'];
        }
        if(isset($map['RecallInterval'])){
            $model->recallInterval = $map['RecallInterval'];
        }
        if(isset($map['IsSelfLine'])){
            $model->isSelfLine = $map['IsSelfLine'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description taskName
     * @var string
     */
    public $taskName;

    /**
     * @description dialogId
     * @var integer
     */
    public $dialogId;

    /**
     * @description corpName
     * @var string
     */
    public $corpName;

    /**
     * @description caller
     * @var string
     */
    public $caller;

    /**
     * @description numberStatusIdent
     * @var bool
     */
    public $numberStatusIdent;

    /**
     * @description retryType
     * @var integer
     */
    public $retryType;

    /**
     * @description recallStateCodes
     * @var string
     */
    public $recallStateCodes;

    /**
     * @description recallTimes
     * @var integer
     */
    public $recallTimes;

    /**
     * @description recallInterval
     * @var integer
     */
    public $recallInterval;

    /**
     * @description isSelfLine
     * @var bool
     */
    public $isSelfLine;

}
