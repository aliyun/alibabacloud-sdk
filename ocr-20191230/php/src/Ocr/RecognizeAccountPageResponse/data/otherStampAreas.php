<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeAccountPageResponse\data;

use AlibabaCloud\Tea\Model;

class otherStampAreas extends Model
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
        $res           = [];
        $res['Left']   = $this->left;
        $res['Top']    = $this->top;
        $res['Height'] = $this->height;
        $res['Width']  = $this->width;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return otherStampAreas
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
