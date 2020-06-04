<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SetMessageCallbackRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount' => 'OwnerAccount',
        'callbackType' => 'CallbackType',
        'callbackURL' => 'CallbackURL',
        'eventTypeList' => 'EventTypeList',
        'authSwitch' => 'AuthSwitch',
        'authKey' => 'AuthKey',
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'mnsEndpoint' => 'MnsEndpoint',
        'mnsQueueName' => 'MnsQueueName',
        'appId' => 'AppId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['CallbackType'] = $this->callbackType;
        $res['CallbackURL'] = $this->callbackURL;
        $res['EventTypeList'] = $this->eventTypeList;
        $res['AuthSwitch'] = $this->authSwitch;
        $res['AuthKey'] = $this->authKey;
        $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        $res['MnsEndpoint'] = $this->mnsEndpoint;
        $res['MnsQueueName'] = $this->mnsQueueName;
        $res['AppId'] = $this->appId;
        return $res;
    }
    /**
     * @param array $map
     * @return SetMessageCallbackRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['CallbackType'])){
            $model->callbackType = $map['CallbackType'];
        }
        if(isset($map['CallbackURL'])){
            $model->callbackURL = $map['CallbackURL'];
        }
        if(isset($map['EventTypeList'])){
            $model->eventTypeList = $map['EventTypeList'];
        }
        if(isset($map['AuthSwitch'])){
            $model->authSwitch = $map['AuthSwitch'];
        }
        if(isset($map['AuthKey'])){
            $model->authKey = $map['AuthKey'];
        }
        if(isset($map['ResourceRealOwnerId'])){
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }
        if(isset($map['MnsEndpoint'])){
            $model->mnsEndpoint = $map['MnsEndpoint'];
        }
        if(isset($map['MnsQueueName'])){
            $model->mnsQueueName = $map['MnsQueueName'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
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
     * @var string
     */
    public $ownerId;

    /**
     * @description resourceOwnerId
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description callbackType
     * @var string
     */
    public $callbackType;

    /**
     * @description callbackURL
     * @var string
     */
    public $callbackURL;

    /**
     * @description eventTypeList
     * @var string
     */
    public $eventTypeList;

    /**
     * @description authSwitch
     * @var string
     */
    public $authSwitch;

    /**
     * @description authKey
     * @var string
     */
    public $authKey;

    /**
     * @description resourceRealOwnerId
     * @var integer
     */
    public $resourceRealOwnerId;

    /**
     * @description mnsEndpoint
     * @var string
     */
    public $mnsEndpoint;

    /**
     * @description mnsQueueName
     * @var string
     */
    public $mnsQueueName;

    /**
     * @description appId
     * @var string
     */
    public $appId;

}
