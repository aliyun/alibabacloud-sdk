<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\EraseVideoLogoRequest;

use AlibabaCloud\Tea\Model;

class boxes extends Model
{
    /**
     * @description h
     *
     * @var float
     */
    public $h;

    /**
     * @description w
     *
     * @var float
     */
    public $w;

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
        'h' => 'H',
        'w' => 'W',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate()
    {
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
     * @return boxes
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
