<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS\ScaleOutClusterBody;

use AlibabaCloud\Tea\Model;

class taints extends Model
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
     * @description effect
     *
     * @var string
     */
    public $effect;
    protected $_name = [
        'key'    => 'key',
        'value'  => 'value',
        'effect' => 'effect',
    ];

    public function validate()
    {
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('effect', $this->effect, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['key']    = $this->key;
        $res['value']  = $this->value;
        $res['effect'] = $this->effect;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taints
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
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }

        return $model;
    }
}
