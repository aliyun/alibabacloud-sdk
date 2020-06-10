<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorImageRequest;

use AlibabaCloud\Tea\Model;

class colorTemplate extends Model
{
    /**
     * @description color
     *
     * @var string
     */
    public $color;
    protected $_name = [
        'color' => 'Color',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return colorTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }

        return $model;
    }
}
