<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponse\data\plates;

use AlibabaCloud\Tea\Model;

class roi extends Model
{
    /**
     * @description h
     *
     * @var int
     */
    public $h;

    /**
     * @description w
     *
     * @var int
     */
    public $w;

    /**
     * @description x
     *
     * @var int
     */
    public $x;

    /**
     * @description y
     *
     * @var int
     */
    public $y;
    protected $_name = [
        'h' => 'H',
        'w' => 'W',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate()
    {
        Model::validateRequired('h', $this->h, true);
        Model::validateRequired('w', $this->w, true);
        Model::validateRequired('x', $this->x, true);
        Model::validateRequired('y', $this->y, true);
    }

    public function toMap()
    {
        $res      = [];
        $res['H'] = $this->h;
        $res['W'] = $this->w;
        $res['X'] = $this->x;
        $res['Y'] = $this->y;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roi
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['H'])) {
            $model->h = $map['H'];
        }
        if (isset($map['W'])) {
            $model->w = $map['W'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
