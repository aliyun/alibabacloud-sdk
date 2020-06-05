<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class SwapFacialFeaturesAdvanceRequest extends Model {
    protected $_name = [
        'sourceImageURLObject' => 'SourceImageURLObject',
        'editPart' => 'EditPart',
        'targetImageURL' => 'TargetImageURL',
    ];
    public function validate() {
        Model::validateRequired('sourceImageURLObject', $this->sourceImageURLObject, true);
        Model::validateRequired('editPart', $this->editPart, true);
        Model::validateRequired('targetImageURL', $this->targetImageURL, true);
    }
    public function toMap() {
        $res = [];
        $res['SourceImageURLObject'] = $this->sourceImageURLObject;
        $res['EditPart'] = $this->editPart;
        $res['TargetImageURL'] = $this->targetImageURL;
        return $res;
    }
    /**
     * @param array $map
     * @return SwapFacialFeaturesAdvanceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SourceImageURLObject'])){
            $model->sourceImageURLObject = $map['SourceImageURLObject'];
        }
        if(isset($map['EditPart'])){
            $model->editPart = $map['EditPart'];
        }
        if(isset($map['TargetImageURL'])){
            $model->targetImageURL = $map['TargetImageURL'];
        }
        return $model;
    }
    /**
     * @description SourceImageURLObject
     * @var Stream
     */
    public $sourceImageURLObject;

    /**
     * @description editPart
     * @var string
     */
    public $editPart;

    /**
     * @description targetImageUrl
     * @var string
     */
    public $targetImageURL;

}
