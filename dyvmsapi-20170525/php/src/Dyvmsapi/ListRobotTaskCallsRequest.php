<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi;

use AlibabaCloud\Tea\Model;

class ListRobotTaskCallsRequest extends Model
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
     * @description pageNo
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description taskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description durationFrom
     *
     * @var string
     */
    public $durationFrom;

    /**
     * @description durationTo
     *
     * @var string
     */
    public $durationTo;

    /**
     * @description dialogCountFrom
     *
     * @var string
     */
    public $dialogCountFrom;

    /**
     * @description dialogCountTo
     *
     * @var string
     */
    public $dialogCountTo;

    /**
     * @description hangupDirection
     *
     * @var string
     */
    public $hangupDirection;

    /**
     * @description callResult
     *
     * @var string
     */
    public $callResult;

    /**
     * @description called
     *
     * @var string
     */
    public $called;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
        'taskId'               => 'TaskId',
        'durationFrom'         => 'DurationFrom',
        'durationTo'           => 'DurationTo',
        'dialogCountFrom'      => 'DialogCountFrom',
        'dialogCountTo'        => 'DialogCountTo',
        'hangupDirection'      => 'HangupDirection',
        'callResult'           => 'CallResult',
        'called'               => 'Called',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res                         = [];
        $res['AccessKeyId']          = $this->accessKeyId;
        $res['OwnerId']              = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId']      = $this->resourceOwnerId;
        $res['PageNo']               = $this->pageNo;
        $res['PageSize']             = $this->pageSize;
        $res['TaskId']               = $this->taskId;
        $res['DurationFrom']         = $this->durationFrom;
        $res['DurationTo']           = $this->durationTo;
        $res['DialogCountFrom']      = $this->dialogCountFrom;
        $res['DialogCountTo']        = $this->dialogCountTo;
        $res['HangupDirection']      = $this->hangupDirection;
        $res['CallResult']           = $this->callResult;
        $res['Called']               = $this->called;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRobotTaskCallsRequest
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['DurationFrom'])) {
            $model->durationFrom = $map['DurationFrom'];
        }
        if (isset($map['DurationTo'])) {
            $model->durationTo = $map['DurationTo'];
        }
        if (isset($map['DialogCountFrom'])) {
            $model->dialogCountFrom = $map['DialogCountFrom'];
        }
        if (isset($map['DialogCountTo'])) {
            $model->dialogCountTo = $map['DialogCountTo'];
        }
        if (isset($map['HangupDirection'])) {
            $model->hangupDirection = $map['HangupDirection'];
        }
        if (isset($map['CallResult'])) {
            $model->callResult = $map['CallResult'];
        }
        if (isset($map['Called'])) {
            $model->called = $map['Called'];
        }

        return $model;
    }
}
