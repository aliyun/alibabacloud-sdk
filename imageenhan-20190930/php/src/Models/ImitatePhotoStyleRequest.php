<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class ImitatePhotoStyleRequest extends Model
{
    /**
     * @description styleUrl
     *
     * @var string
     */
    public $styleUrl;

    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'styleUrl' => 'StyleUrl',
        'imageURL' => 'ImageURL',
    ];

    public function validate()
    {
        Model::validateRequired('styleUrl', $this->styleUrl, true);
        Model::validateRequired('imageURL', $this->imageURL, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->styleUrl) {
            $res['StyleUrl'] = $this->styleUrl;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImitatePhotoStyleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StyleUrl'])) {
            $model->styleUrl = $map['StyleUrl'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
