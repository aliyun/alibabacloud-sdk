<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizeExpressionResponse\data\elements;

use AlibabaCloud\Tea\Model;

class faceRectangle extends Model
{
    /**
     * @description height
     *
     * @var int
     */
    public $height;
    /**
     * @description left
     *
     * @var int
     */
    public $left;
    /**
     * @description top
     *
     * @var int
     */
    public $top;
    /**
     * @description width
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'height' => 'Height',
        'left'   => 'Left',
        'top'    => 'Top',
        'width'  => 'Width',
    ];

    public function validate()
    {
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('left', $this->left, true);
        Model::validateRequired('top', $this->top, true);
        Model::validateRequired('width', $this->width, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['Height'] = $this->height;
        $res['Left']   = $this->left;
        $res['Top']    = $this->top;
        $res['Width']  = $this->width;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceRectangle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Left'])) {
            $model->left = $map['Left'];
        }
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
