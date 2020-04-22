<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog\DetectImageElementsResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @description type
     *
     * @var string
     */
    public $type;

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

    /**
     * @description width
     *
     * @var int
     */
    public $width;

    /**
     * @description height
     *
     * @var int
     */
    public $height;

    /**
     * @description score
     *
     * @var float
     */
    public $score;
    protected $_name = [
        'type'   => 'Type',
        'x'      => 'X',
        'y'      => 'Y',
        'width'  => 'Width',
        'height' => 'Height',
        'score'  => 'Score',
    ];

    public function validate()
    {
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('x', $this->x, true);
        Model::validateRequired('y', $this->y, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('score', $this->score, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['Type']   = $this->type;
        $res['X']      = $this->x;
        $res['Y']      = $this->y;
        $res['Width']  = $this->width;
        $res['Height'] = $this->height;
        $res['Score']  = $this->score;

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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
