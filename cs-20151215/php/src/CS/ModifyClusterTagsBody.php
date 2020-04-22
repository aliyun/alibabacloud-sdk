<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS;

use AlibabaCloud\Tea\Model;

class ModifyClusterTagsBody extends Model
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
    protected $_name = [
        'key'   => 'key',
        'value' => 'value',
    ];

    public function validate()
    {
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('value', $this->value, true);
    }

    public function toMap()
    {
        $res          = [];
        $res['key']   = $this->key;
        $res['value'] = $this->value;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterTagsBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
