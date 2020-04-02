<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class FaceTidyupRequest extends Model
{
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;
    /**
     * @description shapeType
     *
     * @var int
     */
    public $shapeType;
    /**
     * @description strength
     *
     * @var float
     */
    public $strength;
    protected $_name = [
        'imageURL'  => 'ImageURL',
        'shapeType' => 'ShapeType',
        'strength'  => 'Strength',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('shapeType', $this->shapeType, true);
        Model::validateRequired('strength', $this->strength, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['ImageURL']  = $this->imageURL;
        $res['ShapeType'] = $this->shapeType;
        $res['Strength']  = $this->strength;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceTidyupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['ShapeType'])) {
            $model->shapeType = $map['ShapeType'];
        }
        if (isset($map['Strength'])) {
            $model->strength = $map['Strength'];
        }

        return $model;
    }
}
