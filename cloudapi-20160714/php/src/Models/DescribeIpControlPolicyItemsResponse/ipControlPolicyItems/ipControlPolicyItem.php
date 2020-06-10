<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlPolicyItemsResponse\ipControlPolicyItems;

use AlibabaCloud\Tea\Model;

class ipControlPolicyItem extends Model
{
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

    /**
     * @description policyId
     *
     * @var string
     */
    public $policyItemId;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description modifiedTime
     *
     * @var string
     */
    public $modifiedTime;
    protected $_name = [
        'appId'        => 'AppId',
        'cidrIp'       => 'CidrIp',
        'policyItemId' => 'PolicyItemId',
        'createTime'   => 'CreateTime',
        'modifiedTime' => 'ModifiedTime',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('cidrIp', $this->cidrIp, true);
        Model::validateRequired('policyItemId', $this->policyItemId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cidrIp) {
            $res['CidrIp'] = $this->cidrIp;
        }
        if (null !== $this->policyItemId) {
            $res['PolicyItemId'] = $this->policyItemId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipControlPolicyItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CidrIp'])) {
            $model->cidrIp = $map['CidrIp'];
        }
        if (isset($map['PolicyItemId'])) {
            $model->policyItemId = $map['PolicyItemId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        return $model;
    }
}
