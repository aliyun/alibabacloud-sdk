<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class RemoveIpControlPolicyItemRequest extends Model
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
     * @description policyIds
     *
     * @var string
     */
    public $policyItemIds;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'accessKeyId'   => 'AccessKeyId',
        'ipControlId'   => 'IpControlId',
        'policyItemIds' => 'PolicyItemIds',
    ];

    public function validate()
    {
        Model::validateRequired('ipControlId', $this->ipControlId, true);
        Model::validateRequired('policyItemIds', $this->policyItemIds, true);
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
        if (null !== $this->policyItemIds) {
            $res['PolicyItemIds'] = $this->policyItemIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveIpControlPolicyItemRequest
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
        if (isset($map['PolicyItemIds'])) {
            $model->policyItemIds = $map['PolicyItemIds'];
        }

        return $model;
    }
}
