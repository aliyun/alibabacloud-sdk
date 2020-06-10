<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

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
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->durationFrom) {
            $res['DurationFrom'] = $this->durationFrom;
        }
        if (null !== $this->durationTo) {
            $res['DurationTo'] = $this->durationTo;
        }
        if (null !== $this->dialogCountFrom) {
            $res['DialogCountFrom'] = $this->dialogCountFrom;
        }
        if (null !== $this->dialogCountTo) {
            $res['DialogCountTo'] = $this->dialogCountTo;
        }
        if (null !== $this->hangupDirection) {
            $res['HangupDirection'] = $this->hangupDirection;
        }
        if (null !== $this->callResult) {
            $res['CallResult'] = $this->callResult;
        }
        if (null !== $this->called) {
            $res['Called'] = $this->called;
        }

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
