<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponse\securityGroupReferences;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponse\securityGroupReferences\securityGroupReference\referencingSecurityGroups;
use AlibabaCloud\Tea\Model;

class securityGroupReference extends Model
{
    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var referencingSecurityGroups
     */
    public $referencingSecurityGroups;
    protected $_name = [
        'securityGroupId'           => 'SecurityGroupId',
        'referencingSecurityGroups' => 'ReferencingSecurityGroups',
    ];

    public function validate()
    {
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('referencingSecurityGroups', $this->referencingSecurityGroups, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->referencingSecurityGroups) {
            $res['ReferencingSecurityGroups'] = null !== $this->referencingSecurityGroups ? $this->referencingSecurityGroups->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroupReference
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['ReferencingSecurityGroups'])) {
            $model->referencingSecurityGroups = referencingSecurityGroups::fromMap($map['ReferencingSecurityGroups']);
        }

        return $model;
    }
}
