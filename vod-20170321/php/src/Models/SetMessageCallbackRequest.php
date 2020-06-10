<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SetMessageCallbackRequest extends Model
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
     * @var string
     */
    public $ownerId;

    /**
     * @description resourceOwnerId
     *
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description callbackType
     *
     * @var string
     */
    public $callbackType;

    /**
     * @description callbackURL
     *
     * @var string
     */
    public $callbackURL;

    /**
     * @description eventTypeList
     *
     * @var string
     */
    public $eventTypeList;

    /**
     * @description authSwitch
     *
     * @var string
     */
    public $authSwitch;

    /**
     * @description authKey
     *
     * @var string
     */
    public $authKey;

    /**
     * @description resourceRealOwnerId
     *
     * @var int
     */
    public $resourceRealOwnerId;

    /**
     * @description mnsEndpoint
     *
     * @var string
     */
    public $mnsEndpoint;

    /**
     * @description mnsQueueName
     *
     * @var string
     */
    public $mnsQueueName;

    /**
     * @description appId
     *
     * @var string
     */
    public $appId;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount'         => 'OwnerAccount',
        'callbackType'         => 'CallbackType',
        'callbackURL'          => 'CallbackURL',
        'eventTypeList'        => 'EventTypeList',
        'authSwitch'           => 'AuthSwitch',
        'authKey'              => 'AuthKey',
        'resourceRealOwnerId'  => 'ResourceRealOwnerId',
        'mnsEndpoint'          => 'MnsEndpoint',
        'mnsQueueName'         => 'MnsQueueName',
        'appId'                => 'AppId',
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
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->callbackType) {
            $res['CallbackType'] = $this->callbackType;
        }
        if (null !== $this->callbackURL) {
            $res['CallbackURL'] = $this->callbackURL;
        }
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = $this->eventTypeList;
        }
        if (null !== $this->authSwitch) {
            $res['AuthSwitch'] = $this->authSwitch;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->resourceRealOwnerId) {
            $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        }
        if (null !== $this->mnsEndpoint) {
            $res['MnsEndpoint'] = $this->mnsEndpoint;
        }
        if (null !== $this->mnsQueueName) {
            $res['MnsQueueName'] = $this->mnsQueueName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetMessageCallbackRequest
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
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['CallbackType'])) {
            $model->callbackType = $map['CallbackType'];
        }
        if (isset($map['CallbackURL'])) {
            $model->callbackURL = $map['CallbackURL'];
        }
        if (isset($map['EventTypeList'])) {
            $model->eventTypeList = $map['EventTypeList'];
        }
        if (isset($map['AuthSwitch'])) {
            $model->authSwitch = $map['AuthSwitch'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['ResourceRealOwnerId'])) {
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }
        if (isset($map['MnsEndpoint'])) {
            $model->mnsEndpoint = $map['MnsEndpoint'];
        }
        if (isset($map['MnsQueueName'])) {
            $model->mnsQueueName = $map['MnsQueueName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
