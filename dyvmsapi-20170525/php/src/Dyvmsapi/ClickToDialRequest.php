<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi;

use AlibabaCloud\Tea\Model;

class ClickToDialRequest extends Model
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
     * @description callerShowNumber
     *
     * @var string
     */
    public $callerShowNumber;

    /**
     * @description callerNumber
     *
     * @var string
     */
    public $callerNumber;

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
     * @description recordFlag
     *
     * @var bool
     */
    public $recordFlag;

    /**
     * @description asrFlag
     *
     * @var bool
     */
    public $asrFlag;

    /**
     * @description sessionTimeout
     *
     * @var int
     */
    public $sessionTimeout;

    /**
     * @description asrModelId
     *
     * @var string
     */
    public $asrModelId;

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
        'callerShowNumber'     => 'CallerShowNumber',
        'callerNumber'         => 'CallerNumber',
        'calledShowNumber'     => 'CalledShowNumber',
        'calledNumber'         => 'CalledNumber',
        'recordFlag'           => 'RecordFlag',
        'asrFlag'              => 'AsrFlag',
        'sessionTimeout'       => 'SessionTimeout',
        'asrModelId'           => 'AsrModelId',
        'outId'                => 'OutId',
    ];

    public function validate()
    {
        Model::validateRequired('callerShowNumber', $this->callerShowNumber, true);
        Model::validateRequired('callerNumber', $this->callerNumber, true);
        Model::validateRequired('calledShowNumber', $this->calledShowNumber, true);
        Model::validateRequired('calledNumber', $this->calledNumber, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['AccessKeyId']          = $this->accessKeyId;
        $res['OwnerId']              = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId']      = $this->resourceOwnerId;
        $res['CallerShowNumber']     = $this->callerShowNumber;
        $res['CallerNumber']         = $this->callerNumber;
        $res['CalledShowNumber']     = $this->calledShowNumber;
        $res['CalledNumber']         = $this->calledNumber;
        $res['RecordFlag']           = $this->recordFlag;
        $res['AsrFlag']              = $this->asrFlag;
        $res['SessionTimeout']       = $this->sessionTimeout;
        $res['AsrModelId']           = $this->asrModelId;
        $res['OutId']                = $this->outId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ClickToDialRequest
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
        if (isset($map['CallerShowNumber'])) {
            $model->callerShowNumber = $map['CallerShowNumber'];
        }
        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }
        if (isset($map['CalledShowNumber'])) {
            $model->calledShowNumber = $map['CalledShowNumber'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['RecordFlag'])) {
            $model->recordFlag = $map['RecordFlag'];
        }
        if (isset($map['AsrFlag'])) {
            $model->asrFlag = $map['AsrFlag'];
        }
        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }
        if (isset($map['AsrModelId'])) {
            $model->asrModelId = $map['AsrModelId'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        return $model;
    }
}
