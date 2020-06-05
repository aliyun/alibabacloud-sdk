<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureResponse\data;

use AlibabaCloud\Tea\Model;

class metaObject extends Model {
    protected $_name = [
        'height' => 'Height',
        'width' => 'Width',
    ];
    public function validate() {
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('width', $this->width, true);
    }
    public function toMap() {
        $res = [];
        $res['Height'] = $this->height;
        $res['Width'] = $this->width;
        return $res;
    }
    /**
     * @param array $map
     * @return metaObject
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Height'])){
            $model->height = $map['Height'];
        }
        if(isset($map['Width'])){
            $model->width = $map['Width'];
        }
        return $model;
    }
    /**
     * @description height
     * @var integer
     */
    public $height;

    /**
     * @description width
     * @var integer
     */
    public $width;

}
