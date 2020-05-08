<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeFurnitureSpuRequest extends Model
{
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;

    /**
     * @description xLength
     *
     * @var float
     */
    public $XLength;

    /**
     * @description yLength
     *
     * @var float
     */
    public $YLength;

    /**
     * @description zLength
     *
     * @var float
     */
    public $ZLength;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'XLength'  => 'XLength',
        'YLength'  => 'YLength',
        'ZLength'  => 'ZLength',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('XLength', $this->XLength, true);
        Model::validateRequired('YLength', $this->YLength, true);
        Model::validateRequired('ZLength', $this->ZLength, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['ImageURL'] = $this->imageURL;
        $res['XLength']  = $this->XLength;
        $res['YLength']  = $this->YLength;
        $res['ZLength']  = $this->ZLength;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeFurnitureSpuRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['XLength'])) {
            $model->XLength = $map['XLength'];
        }
        if (isset($map['YLength'])) {
            $model->YLength = $map['YLength'];
        }
        if (isset($map['ZLength'])) {
            $model->ZLength = $map['ZLength'];
        }

        return $model;
    }
}
