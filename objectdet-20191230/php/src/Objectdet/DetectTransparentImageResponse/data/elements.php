<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Objectdet\DetectTransparentImageResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @description transparentImage
     *
     * @var int
     */
    public $transparentImage;
    protected $_name = [
        'transparentImage' => 'TransparentImage',
    ];

    public function validate()
    {
        Model::validateRequired('transparentImage', $this->transparentImage, true);
    }

    public function toMap()
    {
        $res                     = [];
        $res['TransparentImage'] = $this->transparentImage;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TransparentImage'])) {
            $model->transparentImage = $map['TransparentImage'];
        }

        return $model;
    }
}
