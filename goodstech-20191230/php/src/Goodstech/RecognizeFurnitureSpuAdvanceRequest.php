<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Goodstech;

use AlibabaCloud\Tea\Model;

class RecognizeFurnitureSpuAdvanceRequest extends Model
{
    /**
     * @description ImageURLObject
     *
     * @var Stream
     */
    public $imageURLObject;

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
        'imageURLObject' => 'ImageURLObject',
        'XLength'        => 'XLength',
        'YLength'        => 'YLength',
        'ZLength'        => 'ZLength',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
        Model::validateRequired('XLength', $this->XLength, true);
        Model::validateRequired('YLength', $this->YLength, true);
        Model::validateRequired('ZLength', $this->ZLength, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['ImageURLObject'] = $this->imageURLObject;
        $res['XLength']        = $this->XLength;
        $res['YLength']        = $this->YLength;
        $res['ZLength']        = $this->ZLength;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeFurnitureSpuAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
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
