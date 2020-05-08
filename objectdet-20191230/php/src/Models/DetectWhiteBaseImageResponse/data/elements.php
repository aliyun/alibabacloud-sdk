<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWhiteBaseImageResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @description whiteBase
     *
     * @var int
     */
    public $whiteBase;
    protected $_name = [
        'whiteBase' => 'WhiteBase',
    ];

    public function validate()
    {
        Model::validateRequired('whiteBase', $this->whiteBase, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['WhiteBase'] = $this->whiteBase;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WhiteBase'])) {
            $model->whiteBase = $map['WhiteBase'];
        }

        return $model;
    }
}
