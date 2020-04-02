<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class FaceFilterAdvanceRequest extends Model
{
    /**
     * @description ImageURLObject
     *
     * @var Stream
     */
    public $imageURLObject;
    /**
     * @description resourceType
     *
     * @var string
     */
    public $resourceType;
    /**
     * @description strength
     *
     * @var float
     */
    public $strength;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'resourceType'   => 'ResourceType',
        'strength'       => 'Strength',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('strength', $this->strength, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['ImageURLObject'] = $this->imageURLObject;
        $res['ResourceType']   = $this->resourceType;
        $res['Strength']       = $this->strength;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceFilterAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Strength'])) {
            $model->strength = $map['Strength'];
        }

        return $model;
    }
}
