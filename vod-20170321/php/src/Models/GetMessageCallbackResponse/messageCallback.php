<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMessageCallbackResponse;

use AlibabaCloud\Tea\Model;

class messageCallback extends Model
{
    /**
     * @description callbackType
     *
     * @var string
     */
    public $callbackType;

    /**
     * @description uri
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
     * @description httpAuthKey
     *
     * @var string
     */
    public $authKey;

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
        'callbackType'  => 'CallbackType',
        'callbackURL'   => 'CallbackURL',
        'eventTypeList' => 'EventTypeList',
        'authSwitch'    => 'AuthSwitch',
        'authKey'       => 'AuthKey',
        'mnsEndpoint'   => 'MnsEndpoint',
        'mnsQueueName'  => 'MnsQueueName',
        'appId'         => 'AppId',
    ];

    public function validate()
    {
        Model::validateRequired('callbackType', $this->callbackType, true);
        Model::validateRequired('callbackURL', $this->callbackURL, true);
        Model::validateRequired('eventTypeList', $this->eventTypeList, true);
        Model::validateRequired('authSwitch', $this->authSwitch, true);
        Model::validateRequired('authKey', $this->authKey, true);
        Model::validateRequired('mnsEndpoint', $this->mnsEndpoint, true);
        Model::validateRequired('mnsQueueName', $this->mnsQueueName, true);
        Model::validateRequired('appId', $this->appId, true);
    }

    public function toMap()
    {
        $res = [];
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
     * @return messageCallback
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
