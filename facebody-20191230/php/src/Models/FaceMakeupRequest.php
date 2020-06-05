<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class FaceMakeupRequest extends Model {
    protected $_name = [
        'imageURL' => 'ImageURL',
        'makeupType' => 'MakeupType',
        'resourceType' => 'ResourceType',
        'strength' => 'Strength',
    ];
    public function validate() {
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('makeupType', $this->makeupType, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('strength', $this->strength, true);
    }
    public function toMap() {
        $res = [];
        $res['ImageURL'] = $this->imageURL;
        $res['MakeupType'] = $this->makeupType;
        $res['ResourceType'] = $this->resourceType;
        $res['Strength'] = $this->strength;
        return $res;
    }
    /**
     * @param array $map
     * @return FaceMakeupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ImageURL'])){
            $model->imageURL = $map['ImageURL'];
        }
        if(isset($map['MakeupType'])){
            $model->makeupType = $map['MakeupType'];
        }
        if(isset($map['ResourceType'])){
            $model->resourceType = $map['ResourceType'];
        }
        if(isset($map['Strength'])){
            $model->strength = $map['Strength'];
        }
        return $model;
    }
    /**
     * @description imageUrl
     * @var string
     */
    public $imageURL;

    /**
     * @description makeupType
     * @var string
     */
    public $makeupType;

    /**
     * @description resourceType
     * @var string
     */
    public $resourceType;

    /**
     * @description strength
     * @var float
     */
    public $strength;

}
