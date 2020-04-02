<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanImageResponse\data\results\subResults;

use AlibabaCloud\Tea\Model;

class programCodeDataList extends Model
{
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
    /**
     * @description width
     *
     * @var float
     */
    public $width;
    /**
     * @description height
     *
     * @var float
     */
    public $height;
    protected $_name = [
        'x'      => 'X',
        'y'      => 'Y',
        'width'  => 'Width',
        'height' => 'Height',
    ];

    public function validate()
    {
        Model::validateRequired('x', $this->x, true);
        Model::validateRequired('y', $this->y, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['X']      = $this->x;
        $res['Y']      = $this->y;
        $res['Width']  = $this->width;
        $res['Height'] = $this->height;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return programCodeDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
