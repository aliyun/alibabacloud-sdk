<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmAddressPoolRequest;

use AlibabaCloud\Tea\Model;

class addr extends Model
{
    /**
     * @description value
     *
     * @var string
     */
    public $value;

    /**
     * @description lbaWeight
     *
     * @var int
     */
    public $lbaWeight;

    /**
     * @description mode
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'value'     => 'Value',
        'lbaWeight' => 'LbaWeight',
        'mode'      => 'Mode',
    ];

    public function validate()
    {
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('lbaWeight', $this->lbaWeight, true);
        Model::validateRequired('mode', $this->mode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->lbaWeight) {
            $res['LbaWeight'] = $this->lbaWeight;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addr
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['LbaWeight'])) {
            $model->lbaWeight = $map['LbaWeight'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
