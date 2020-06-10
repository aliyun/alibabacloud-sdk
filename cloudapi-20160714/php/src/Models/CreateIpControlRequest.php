<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIpControlRequest\ipControlPolicys;
use AlibabaCloud\Tea\Model;

class CreateIpControlRequest extends Model
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
     * @description ipControlName
     *
     * @var string
     */
    public $ipControlName;

    /**
     * @description controlType
     *
     * @var string
     */
    public $ipControlType;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description controlPolicyList
     *
     * @var array
     */
    public $ipControlPolicys;
    protected $_name = [
        'securityToken'    => 'SecurityToken',
        'accessKeyId'      => 'AccessKeyId',
        'ipControlName'    => 'IpControlName',
        'ipControlType'    => 'IpControlType',
        'description'      => 'Description',
        'ipControlPolicys' => 'IpControlPolicys',
    ];

    public function validate()
    {
        Model::validateRequired('ipControlName', $this->ipControlName, true);
        Model::validateRequired('ipControlType', $this->ipControlType, true);
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
        if (null !== $this->ipControlName) {
            $res['IpControlName'] = $this->ipControlName;
        }
        if (null !== $this->ipControlType) {
            $res['IpControlType'] = $this->ipControlType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ipControlPolicys) {
            $res['IpControlPolicys'] = [];
            if (null !== $this->ipControlPolicys && \is_array($this->ipControlPolicys)) {
                $n = 0;
                foreach ($this->ipControlPolicys as $item) {
                    $res['IpControlPolicys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpControlRequest
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
        if (isset($map['IpControlName'])) {
            $model->ipControlName = $map['IpControlName'];
        }
        if (isset($map['IpControlType'])) {
            $model->ipControlType = $map['IpControlType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IpControlPolicys'])) {
            if (!empty($map['IpControlPolicys'])) {
                $model->ipControlPolicys = [];
                $n                       = 0;
                foreach ($map['IpControlPolicys'] as $item) {
                    $model->ipControlPolicys[$n++] = null !== $item ? ipControlPolicys::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
