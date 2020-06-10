<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class AddIpControlPolicyItemRequest extends Model
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
     * @description ipControlId
     *
     * @var string
     */
    public $ipControlId;

    /**
     * @description appId
     *
     * @var string
     */
    public $appId;

    /**
     * @description ip
     *
     * @var string
     */
    public $cidrIp;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'accessKeyId'   => 'AccessKeyId',
        'ipControlId'   => 'IpControlId',
        'appId'         => 'AppId',
        'cidrIp'        => 'CidrIp',
    ];

    public function validate()
    {
        Model::validateRequired('ipControlId', $this->ipControlId, true);
        Model::validateRequired('cidrIp', $this->cidrIp, true);
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
        if (null !== $this->ipControlId) {
            $res['IpControlId'] = $this->ipControlId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cidrIp) {
            $res['CidrIp'] = $this->cidrIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddIpControlPolicyItemRequest
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
        if (isset($map['IpControlId'])) {
            $model->ipControlId = $map['IpControlId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CidrIp'])) {
            $model->cidrIp = $map['CidrIp'];
        }

        return $model;
    }
}
