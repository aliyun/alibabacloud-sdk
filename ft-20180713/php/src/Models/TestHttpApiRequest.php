<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class TestHttpApiRequest extends Model
{
    /**
     * @description stringValue
     *
     * @var array
     */
    public $stringValue;

    /**
     * @description defaultValue
     *
     * @var array
     */
    public $defaultValue;

    /**
     * @description otherParam
     *
     * @var array
     */
    public $otherParam;

    /**
     * @description booleanParam
     *
     * @var bool
     */
    public $booleanParam;
    protected $_name = [
        'stringValue'  => 'StringValue',
        'defaultValue' => 'DefaultValue',
        'otherParam'   => 'OtherParam',
        'booleanParam' => 'BooleanParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stringValue) {
            $res['StringValue'] = $this->stringValue;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->otherParam) {
            $res['OtherParam'] = $this->otherParam;
        }
        if (null !== $this->booleanParam) {
            $res['BooleanParam'] = $this->booleanParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestHttpApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StringValue'])) {
            $model->stringValue = $map['StringValue'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['OtherParam'])) {
            $model->otherParam = $map['OtherParam'];
        }
        if (isset($map['BooleanParam'])) {
            $model->booleanParam = $map['BooleanParam'];
        }

        return $model;
    }
}
