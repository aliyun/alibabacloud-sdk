<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class CompareFaceRequest extends Model
{
    /**
     * @description imageUrlA
     *
     * @var string
     */
    public $imageURLA;
    /**
     * @description imageUrlB
     *
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
        $res              = [];
        $res['ImageURLA'] = $this->imageURLA;
        $res['ImageURLB'] = $this->imageURLB;

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
