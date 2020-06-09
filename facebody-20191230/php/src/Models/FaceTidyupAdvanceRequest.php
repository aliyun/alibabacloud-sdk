<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class FaceTidyupAdvanceRequest extends Model {
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'shapeType' => 'ShapeType',
        'strength' => 'Strength',
    ];
    public function validate() {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
        Model::validateRequired('shapeType', $this->shapeType, true);
        Model::validateRequired('strength', $this->strength, true);
    }
    public function toMap() {
        $res = [];
        $res['ImageURLObject'] = $this->imageURLObject;
        $res['ShapeType'] = $this->shapeType;
        $res['Strength'] = $this->strength;
        return $res;
    }
    /**
     * @param array $map
     * @return FaceTidyupAdvanceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ImageURLObject'])){
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if(isset($map['ShapeType'])){
            $model->shapeType = $map['ShapeType'];
        }
        if(isset($map['Strength'])){
            $model->strength = $map['Strength'];
        }
        return $model;
    }
    /**
     * @description ImageURLObject
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @description shapeType
     * @var integer
     */
    public $shapeType;

    /**
     * @description strength
     * @var float
     */
    public $strength;

}
