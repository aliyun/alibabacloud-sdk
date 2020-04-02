<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\ParseFaceResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'name'     => 'Name',
        'imageURL' => 'ImageURL',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('imageURL', $this->imageURL, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['Name']     = $this->name;
        $res['ImageURL'] = $this->imageURL;

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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
