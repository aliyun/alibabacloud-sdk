<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeStampResponse\data\results;

use AlibabaCloud\Tea\Model;

class roi extends Model
{
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
        'left'   => 'Left',
        'top'    => 'Top',
        'width'  => 'Width',
        'height' => 'Height',
    ];

    public function validate()
    {
        Model::validateRequired('left', $this->left, true);
        Model::validateRequired('top', $this->top, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
    }

    public function toMap()
    {
        $res = [];
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
     * @return roi
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
