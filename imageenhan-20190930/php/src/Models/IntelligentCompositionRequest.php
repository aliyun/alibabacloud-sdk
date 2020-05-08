<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class IntelligentCompositionRequest extends Model
{
    /**
     * @description numBoxes
     *
     * @var int
     */
    public $numBoxes;

    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'numBoxes' => 'NumBoxes',
        'imageURL' => 'ImageURL',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['NumBoxes'] = $this->numBoxes;
        $res['ImageURL'] = $this->imageURL;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IntelligentCompositionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NumBoxes'])) {
            $model->numBoxes = $map['NumBoxes'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
