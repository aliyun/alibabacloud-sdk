<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan;

use AlibabaCloud\Tea\Model;

class RemoveImageSubtitlesAdvanceRequest extends Model
{
    /**
     * @description ImageURLObject
     *
     * @var Stream
     */
    public $imageURLObject;
    /**
     * @description bx
     *
     * @var float
     */
    public $BX;
    /**
     * @description by
     *
     * @var float
     */
    public $BY;
    /**
     * @description bw
     *
     * @var float
     */
    public $BW;
    /**
     * @description bh
     *
     * @var float
     */
    public $BH;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'BX'             => 'BX',
        'BY'             => 'BY',
        'BW'             => 'BW',
        'BH'             => 'BH',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['ImageURLObject'] = $this->imageURLObject;
        $res['BX']             = $this->BX;
        $res['BY']             = $this->BY;
        $res['BW']             = $this->BW;
        $res['BH']             = $this->BH;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveImageSubtitlesAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['BX'])) {
            $model->BX = $map['BX'];
        }
        if (isset($map['BY'])) {
            $model->BY = $map['BY'];
        }
        if (isset($map['BW'])) {
            $model->BW = $map['BW'];
        }
        if (isset($map['BH'])) {
            $model->BH = $map['BH'];
        }

        return $model;
    }
}
