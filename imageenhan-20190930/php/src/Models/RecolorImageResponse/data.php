<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorImageResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description imageList
     *
     * @var array
     */
    public $imageList;
    protected $_name = [
        'imageList' => 'ImageList',
    ];

    public function validate()
    {
        Model::validateRequired('imageList', $this->imageList, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['ImageList'] = [];
        if (null !== $this->imageList) {
            $res['ImageList'] = $this->imageList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageList'])) {
            if (!empty($map['ImageList'])) {
                $model->imageList = [];
                $model->imageList = $map['ImageList'];
            }
        }

        return $model;
    }
}
