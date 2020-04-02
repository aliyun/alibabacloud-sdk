<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups\containers\environmentVars;

use AlibabaCloud\SDK\ECI\V20180808\ECI\valueFrom\fieldRef;
use AlibabaCloud\Tea\Model;

class valueFrom extends Model
{
    /**
     * @description fieldRef
     *
     * @var valueFrom.fieldRef
     */
    public $fieldRef;
    protected $_name = [
        'fieldRef' => 'FieldRef',
    ];

    public function validate()
    {
        Model::validateRequired('fieldRef', $this->fieldRef, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['FieldRef'] = null !== $this->fieldRef ? $this->fieldRef->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return valueFrom
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldRef'])) {
            $model->fieldRef = valueFrom\fieldRef::fromMap($map['FieldRef']);
        }

        return $model;
    }
}
