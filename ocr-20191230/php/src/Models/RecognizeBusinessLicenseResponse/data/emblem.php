<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeBusinessLicenseResponse\data;

use AlibabaCloud\Tea\Model;

class emblem extends Model
{
    /**
     * @var int
     */
    public $top;

    /**
     * @var int
     */
    public $left;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'top'    => 'Top',
        'left'   => 'Left',
        'height' => 'Height',
        'width'  => 'Width',
    ];

    public function validate()
    {
        Model::validateRequired('top', $this->top, true);
        Model::validateRequired('left', $this->left, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('width', $this->width, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }
        if (null !== $this->left) {
            $res['Left'] = $this->left;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emblem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }
        if (isset($map['Left'])) {
            $model->left = $map['Left'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
