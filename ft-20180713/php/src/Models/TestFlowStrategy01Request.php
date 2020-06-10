<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class TestFlowStrategy01Request extends Model
{
    /**
     * @description names
     *
     * @var array
     */
    public $names;
    protected $_name = [
        'names' => 'Names',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestFlowStrategy01Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }

        return $model;
    }
}
