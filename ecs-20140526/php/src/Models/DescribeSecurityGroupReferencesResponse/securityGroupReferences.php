<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponse\securityGroupReferences\securityGroupReference;
use AlibabaCloud\Tea\Model;

class securityGroupReferences extends Model
{
    /**
     * @description SecurityGroupReference
     *
     * @var array
     */
    public $securityGroupReference;
    protected $_name = [
        'securityGroupReference' => 'SecurityGroupReference',
    ];

    public function validate()
    {
        Model::validateRequired('securityGroupReference', $this->securityGroupReference, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupReference) {
            $res['SecurityGroupReference'] = [];
            if (null !== $this->securityGroupReference && \is_array($this->securityGroupReference)) {
                $n = 0;
                foreach ($this->securityGroupReference as $item) {
                    $res['SecurityGroupReference'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroupReferences
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupReference'])) {
            if (!empty($map['SecurityGroupReference'])) {
                $model->securityGroupReference = [];
                $n                             = 0;
                foreach ($map['SecurityGroupReference'] as $item) {
                    $model->securityGroupReference[$n++] = null !== $item ? securityGroupReference::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
