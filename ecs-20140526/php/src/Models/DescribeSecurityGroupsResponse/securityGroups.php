<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponse\securityGroups\securityGroup;
use AlibabaCloud\Tea\Model;

class securityGroups extends Model
{
    /**
     * @var array
     */
    public $securityGroup;
    protected $_name = [
        'securityGroup' => 'SecurityGroup',
    ];

    public function validate()
    {
        Model::validateRequired('securityGroup', $this->securityGroup, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = [];
            if (null !== $this->securityGroup && \is_array($this->securityGroup)) {
                $n = 0;
                foreach ($this->securityGroup as $item) {
                    $res['SecurityGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroup'])) {
            if (!empty($map['SecurityGroup'])) {
                $model->securityGroup = [];
                $n                    = 0;
                foreach ($map['SecurityGroup'] as $item) {
                    $model->securityGroup[$n++] = null !== $item ? securityGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
