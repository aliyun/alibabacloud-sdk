<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class IntelligentCompositionAdvanceRequest extends Model
{
    /**
     * @description ImageURLObject
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @description numBoxes
     *
     * @var int
     */
    public $numBoxes;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'numBoxes'       => 'NumBoxes',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->numBoxes) {
            $res['NumBoxes'] = $this->numBoxes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IntelligentCompositionAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['NumBoxes'])) {
            $model->numBoxes = $map['NumBoxes'];
        }

        return $model;
    }
}
