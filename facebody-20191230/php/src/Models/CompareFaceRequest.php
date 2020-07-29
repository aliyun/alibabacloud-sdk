<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class CompareFaceRequest extends Model
{
    /**
     * @var string
     */
    public $imageURLA;

    /**
     * @var string
     */
    public $imageURLB;
    protected $_name = [
        'imageURLA' => 'ImageURLA',
        'imageURLB' => 'ImageURLB',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLA', $this->imageURLA, true);
        Model::validateRequired('imageURLB', $this->imageURLB, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLA) {
            $res['ImageURLA'] = $this->imageURLA;
        }
        if (null !== $this->imageURLB) {
            $res['ImageURLB'] = $this->imageURLB;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompareFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLA'])) {
            $model->imageURLA = $map['ImageURLA'];
        }
        if (isset($map['ImageURLB'])) {
            $model->imageURLB = $map['ImageURLB'];
        }

        return $model;
    }
}
