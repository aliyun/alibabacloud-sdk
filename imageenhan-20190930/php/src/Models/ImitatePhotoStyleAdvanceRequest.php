<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class ImitatePhotoStyleAdvanceRequest extends Model
{
    /**
     * @description ImageURLObject
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @description styleUrl
     *
     * @var string
     */
    public $styleUrl;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'styleUrl'       => 'StyleUrl',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
        Model::validateRequired('styleUrl', $this->styleUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->styleUrl) {
            $res['StyleUrl'] = $this->styleUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImitatePhotoStyleAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['StyleUrl'])) {
            $model->styleUrl = $map['StyleUrl'];
        }

        return $model;
    }
}
