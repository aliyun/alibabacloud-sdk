<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class SwapFacialFeaturesRequest extends Model {
    protected $_name = [
        'sourceImageURL' => 'SourceImageURL',
        'editPart' => 'EditPart',
        'targetImageURL' => 'TargetImageURL',
    ];
    public function validate() {
        Model::validateRequired('sourceImageURL', $this->sourceImageURL, true);
        Model::validateRequired('editPart', $this->editPart, true);
        Model::validateRequired('targetImageURL', $this->targetImageURL, true);
    }
    public function toMap() {
        $res = [];
        $res['SourceImageURL'] = $this->sourceImageURL;
        $res['EditPart'] = $this->editPart;
        $res['TargetImageURL'] = $this->targetImageURL;
        return $res;
    }
    /**
     * @param array $map
     * @return SwapFacialFeaturesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SourceImageURL'])){
            $model->sourceImageURL = $map['SourceImageURL'];
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
     * @description sourceImageUrl
     * @var string
     */
    public $sourceImageURL;

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
