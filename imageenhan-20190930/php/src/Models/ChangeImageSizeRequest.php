<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class ChangeImageSizeRequest extends Model
{
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

    /**
     * @description url
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'width'  => 'Width',
        'height' => 'Height',
        'url'    => 'Url',
    ];

    public function validate()
    {
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('url', $this->url, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['Width']  = $this->width;
        $res['Height'] = $this->height;
        $res['Url']    = $this->url;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeImageSizeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
