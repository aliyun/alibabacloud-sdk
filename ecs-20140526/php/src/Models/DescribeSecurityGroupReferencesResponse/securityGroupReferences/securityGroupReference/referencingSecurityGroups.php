<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponse\securityGroupReferences\securityGroupReference;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponse\securityGroupReferences\securityGroupReference\referencingSecurityGroups\referencingSecurityGroup;
use AlibabaCloud\Tea\Model;

class referencingSecurityGroups extends Model
{
    /**
     * @description ReferencingSecurityGroup
     *
     * @var array
     */
    public $referencingSecurityGroup;
    protected $_name = [
        'referencingSecurityGroup' => 'ReferencingSecurityGroup',
    ];

    public function validate()
    {
        Model::validateRequired('referencingSecurityGroup', $this->referencingSecurityGroup, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->referencingSecurityGroup) {
            $res['ReferencingSecurityGroup'] = [];
            if (null !== $this->referencingSecurityGroup && \is_array($this->referencingSecurityGroup)) {
                $n = 0;
                foreach ($this->referencingSecurityGroup as $item) {
                    $res['ReferencingSecurityGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return referencingSecurityGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReferencingSecurityGroup'])) {
            if (!empty($map['ReferencingSecurityGroup'])) {
                $model->referencingSecurityGroup = [];
                $n                               = 0;
                foreach ($map['ReferencingSecurityGroup'] as $item) {
                    $model->referencingSecurityGroup[$n++] = null !== $item ? referencingSecurityGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
