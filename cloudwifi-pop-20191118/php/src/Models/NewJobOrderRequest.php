<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class NewJobOrderRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $appName;

    /**
     * @description appSecret
     *
     * @var string
     */
    public $appCode;

    /**
     * @description callback_url
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description client_sys
     *
     * @var string
     */
    public $clientSystem;

    /**
     * @description creator
     *
     * @var string
     */
    public $creator;

    /**
     * @description client_unique_id
     *
     * @var string
     */
    public $clientUniqueId;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description refer_url
     *
     * @var string
     */
    public $referUrl;

    /**
     * @description change_type
     *
     * @var string
     */
    public $changeType;

    /**
     * @description title
     *
     * @var string
     */
    public $title;

    /**
     * @description params
     *
     * @var array
     */
    public $params;
    protected $_name = [
        'appName'        => 'AppName',
        'appCode'        => 'AppCode',
        'callbackUrl'    => 'CallbackUrl',
        'clientSystem'   => 'ClientSystem',
        'creator'        => 'Creator',
        'clientUniqueId' => 'ClientUniqueId',
        'requestId'      => 'RequestId',
        'referUrl'       => 'ReferUrl',
        'changeType'     => 'ChangeType',
        'title'          => 'Title',
        'params'         => 'Params',
    ];

    public function validate()
    {
        Model::validateRequired('clientSystem', $this->clientSystem, true);
        Model::validateRequired('clientUniqueId', $this->clientUniqueId, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('changeType', $this->changeType, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('params', $this->params, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->clientSystem) {
            $res['ClientSystem'] = $this->clientSystem;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->clientUniqueId) {
            $res['ClientUniqueId'] = $this->clientUniqueId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->referUrl) {
            $res['ReferUrl'] = $this->referUrl;
        }
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NewJobOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['ClientSystem'])) {
            $model->clientSystem = $map['ClientSystem'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['ClientUniqueId'])) {
            $model->clientUniqueId = $map['ClientUniqueId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReferUrl'])) {
            $model->referUrl = $map['ReferUrl'];
        }
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        return $model;
    }
}
