<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance;

use AlibabaCloud\Tea\Model;

class securityGroupIds extends Model
{
    /**
     * @description SecurityGroupId
     *
     * @var array
     */
    public $securityGroupId;
    protected $_name = [
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = [];
            if (null !== $this->securityGroupId) {
                $res['SecurityGroupId'] = $this->securityGroupId;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroupIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupId'])) {
            if (!empty($map['SecurityGroupId'])) {
                $model->securityGroupId = [];
                $model->securityGroupId = $map['SecurityGroupId'];
            }
        }

        return $model;
    }
}
