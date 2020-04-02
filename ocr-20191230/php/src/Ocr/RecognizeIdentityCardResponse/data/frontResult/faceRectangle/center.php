<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeIdentityCardResponse\data\frontResult\faceRectangle;

use AlibabaCloud\Tea\Model;

class center extends Model
{
    /**
     * @description x
     *
     * @var float
     */
    public $x;
    /**
     * @description y
     *
     * @var float
     */
    public $y;
    protected $_name = [
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate()
    {
        Model::validateRequired('x', $this->x, true);
        Model::validateRequired('y', $this->y, true);
    }

    public function toMap()
    {
        $res      = [];
        $res['X'] = $this->x;
        $res['Y'] = $this->y;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return center
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
