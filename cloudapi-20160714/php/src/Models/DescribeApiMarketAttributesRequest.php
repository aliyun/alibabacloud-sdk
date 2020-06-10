<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeApiMarketAttributesRequest extends Model
{
    /**
     * @description accessKeyId
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description apiUid
     *
     * @var string
     */
    public $apiId;
    protected $_name = [
        'accessKeyId'   => 'AccessKeyId',
        'securityToken' => 'SecurityToken',
        'groupId'       => 'GroupId',
        'apiId'         => 'ApiId',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('apiId', $this->apiId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiMarketAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        return $model;
    }
}
