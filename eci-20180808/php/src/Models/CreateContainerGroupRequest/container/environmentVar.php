<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container\environmentVar\fieldRef;
use AlibabaCloud\Tea\Model;

class environmentVar extends Model
{
    /**
     * @description key
     *
     * @var string
     */
    public $key;

    /**
     * @description value
     *
     * @var string
     */
    public $value;

    /**
     * @description FieldRef
     *
     * @var fieldRef
     */
    public $fieldRef;
    protected $_name = [
        'key'      => 'Key',
        'value'    => 'Value',
        'fieldRef' => 'FieldRef',
    ];

    public function validate()
    {
        Model::validateRequired('fieldRef', $this->fieldRef, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->fieldRef) {
            $res['FieldRef'] = null !== $this->fieldRef ? $this->fieldRef->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return environmentVar
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['FieldRef'])) {
            $model->fieldRef = fieldRef::fromMap($map['FieldRef']);
        }

        return $model;
    }
}
