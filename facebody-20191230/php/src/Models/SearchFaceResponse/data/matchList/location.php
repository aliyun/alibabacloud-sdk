<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceResponse\data\matchList;

use AlibabaCloud\Tea\Model;

class location extends Model {
    protected $_name = [
        'x' => 'X',
        'y' => 'Y',
        'width' => 'Width',
        'height' => 'Height',
    ];
    public function validate() {
        Model::validateRequired('x', $this->x, true);
        Model::validateRequired('y', $this->y, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
    }
    public function toMap() {
        $res = [];
        $res['X'] = $this->x;
        $res['Y'] = $this->y;
        $res['Width'] = $this->width;
        $res['Height'] = $this->height;
        return $res;
    }
    /**
     * @param array $map
     * @return location
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['X'])){
            $model->x = $map['X'];
        }
        if(isset($map['Y'])){
            $model->y = $map['Y'];
        }
        if(isset($map['Width'])){
            $model->width = $map['Width'];
        }
        if(isset($map['Height'])){
            $model->height = $map['Height'];
        }
        return $model;
    }
    /**
     * @description x
     * @var integer
     */
    public $x;

    /**
     * @description y
     * @var integer
     */
    public $y;

    /**
     * @description width
     * @var integer
     */
    public $width;

    /**
     * @description height
     * @var integer
     */
    public $height;

}
