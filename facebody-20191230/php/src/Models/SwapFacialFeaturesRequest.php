<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class SwapFacialFeaturesRequest extends Model
{
    /**
     * @var string
     */
    public $sourceImageURL;

    /**
     * @var string
     */
    public $editPart;

    /**
     * @var string
     */
    public $targetImageURL;
    protected $_name = [
        'sourceImageURL' => 'SourceImageURL',
        'editPart'       => 'EditPart',
        'targetImageURL' => 'TargetImageURL',
    ];

    public function validate()
    {
        Model::validateRequired('sourceImageURL', $this->sourceImageURL, true);
        Model::validateRequired('editPart', $this->editPart, true);
        Model::validateRequired('targetImageURL', $this->targetImageURL, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceImageURL) {
            $res['SourceImageURL'] = $this->sourceImageURL;
        }
        if (null !== $this->editPart) {
            $res['EditPart'] = $this->editPart;
        }
        if (null !== $this->targetImageURL) {
            $res['TargetImageURL'] = $this->targetImageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwapFacialFeaturesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceImageURL'])) {
            $model->sourceImageURL = $map['SourceImageURL'];
        }
        if (isset($map['EditPart'])) {
            $model->editPart = $map['EditPart'];
        }
        if (isset($map['TargetImageURL'])) {
            $model->targetImageURL = $map['TargetImageURL'];
        }

        return $model;
    }
}
