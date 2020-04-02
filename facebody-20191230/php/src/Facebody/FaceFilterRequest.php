<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class FaceFilterRequest extends Model
{
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;
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
        'imageURL'     => 'ImageURL',
        'resourceType' => 'ResourceType',
        'strength'     => 'Strength',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('strength', $this->strength, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['ImageURL']     = $this->imageURL;
        $res['ResourceType'] = $this->resourceType;
        $res['Strength']     = $this->strength;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceFilterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
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
