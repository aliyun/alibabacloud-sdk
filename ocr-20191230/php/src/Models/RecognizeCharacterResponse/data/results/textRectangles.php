<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeCharacterResponse\data\results;

use AlibabaCloud\Tea\Model;

class textRectangles extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var int
     */
    public $left;

    /**
     * @var int
     */
    public $top;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;
    protected $_name = [
        'angle'  => 'Angle',
        'left'   => 'Left',
        'top'    => 'Top',
        'width'  => 'Width',
        'height' => 'Height',
    ];

    public function validate()
    {
        Model::validateRequired('angle', $this->angle, true);
        Model::validateRequired('left', $this->left, true);
        Model::validateRequired('top', $this->top, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->left) {
            $res['Left'] = $this->left;
        }
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textRectangles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
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
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        return $model;
    }
}
