<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeAccountPageResponse\data;

use AlibabaCloud\Tea\Model;

class invalidStampAreas extends Model
{
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
     * @description height
     *
     * @var int
     */
    public $height;

    /**
     * @description width
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'left'   => 'Left',
        'top'    => 'Top',
        'height' => 'Height',
        'width'  => 'Width',
    ];

    public function validate()
    {
        Model::validateRequired('left', $this->left, true);
        Model::validateRequired('top', $this->top, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('width', $this->width, true);
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
     * @return invalidStampAreas
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
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
