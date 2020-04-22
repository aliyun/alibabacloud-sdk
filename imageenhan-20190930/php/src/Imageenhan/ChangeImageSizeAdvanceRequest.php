<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan;

use AlibabaCloud\Tea\Model;

class ChangeImageSizeAdvanceRequest extends Model
{
    /**
     * @description UrlObject
     *
     * @var Stream
     */
    public $urlObject;

    /**
     * @description width
     *
     * @var int
     */
    public $width;

    /**
     * @description height
     *
     * @var int
     */
    public $height;
    protected $_name = [
        'urlObject' => 'UrlObject',
        'width'     => 'Width',
        'height'    => 'Height',
    ];

    public function validate()
    {
        Model::validateRequired('urlObject', $this->urlObject, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['UrlObject'] = $this->urlObject;
        $res['Width']     = $this->width;
        $res['Height']    = $this->height;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeImageSizeAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UrlObject'])) {
            $model->urlObject = $map['UrlObject'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        return $model;
    }
}
