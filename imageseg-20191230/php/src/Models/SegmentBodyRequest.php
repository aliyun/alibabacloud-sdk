<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Tea\Model;

class SegmentBodyRequest extends Model
{
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;

    /**
     * @description async
     *
     * @var bool
     */
    public $async;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'async'    => 'Async',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['ImageURL'] = $this->imageURL;
        $res['Async']    = $this->async;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SegmentBodyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }

        return $model;
    }
}
