<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupRequest\tag;
use AlibabaCloud\Tea\Model;

class ModifyApiGroupRequest extends Model
{
    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description accessKeyId
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description groupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description userLogConfig
     *
     * @var string
     */
    public $userLogConfig;

    /**
     * @description customTraceConfig
     *
     * @var string
     */
    public $customTraceConfig;

    /**
     * @description compatibleFlags
     *
     * @var string
     */
    public $compatibleFlags;

    /**
     * @description passthroughHeaders
     *
     * @var string
     */
    public $passthroughHeaders;

    /**
     * @description rpcPattern
     *
     * @var string
     */
    public $rpcPattern;

    /**
     * @description tags
     *
     * @var array
     */
    public $tag;
    protected $_name = [
        'securityToken'      => 'SecurityToken',
        'accessKeyId'        => 'AccessKeyId',
        'groupId'            => 'GroupId',
        'groupName'          => 'GroupName',
        'description'        => 'Description',
        'userLogConfig'      => 'UserLogConfig',
        'customTraceConfig'  => 'CustomTraceConfig',
        'compatibleFlags'    => 'CompatibleFlags',
        'passthroughHeaders' => 'PassthroughHeaders',
        'rpcPattern'         => 'RpcPattern',
        'tag'                => 'Tag',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->userLogConfig) {
            $res['UserLogConfig'] = $this->userLogConfig;
        }
        if (null !== $this->customTraceConfig) {
            $res['CustomTraceConfig'] = $this->customTraceConfig;
        }
        if (null !== $this->compatibleFlags) {
            $res['CompatibleFlags'] = $this->compatibleFlags;
        }
        if (null !== $this->passthroughHeaders) {
            $res['PassthroughHeaders'] = $this->passthroughHeaders;
        }
        if (null !== $this->rpcPattern) {
            $res['RpcPattern'] = $this->rpcPattern;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApiGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UserLogConfig'])) {
            $model->userLogConfig = $map['UserLogConfig'];
        }
        if (isset($map['CustomTraceConfig'])) {
            $model->customTraceConfig = $map['CustomTraceConfig'];
        }
        if (isset($map['CompatibleFlags'])) {
            $model->compatibleFlags = $map['CompatibleFlags'];
        }
        if (isset($map['PassthroughHeaders'])) {
            $model->passthroughHeaders = $map['PassthroughHeaders'];
        }
        if (isset($map['RpcPattern'])) {
            $model->rpcPattern = $map['RpcPattern'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
