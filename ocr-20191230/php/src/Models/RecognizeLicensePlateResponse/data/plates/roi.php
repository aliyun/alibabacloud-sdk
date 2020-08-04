<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponse\data\plates;

use AlibabaCloud\Tea\Model;

class roi extends Model
{
    /**
     * @var int
     */
    public $h;

    /**
     * @var int
     */
    public $w;

    /**
     * @var int
     */
    public $x;

    /**
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
        $res = [];
        if (null !== $this->h) {
            $res['H'] = $this->h;
        }
        if (null !== $this->w) {
            $res['W'] = $this->w;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }

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
