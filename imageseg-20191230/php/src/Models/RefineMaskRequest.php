<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RefineMaskRequest extends Model
{
    /**
     * @var string
     */
    public $maskImageURL;

    /**
     * @var string
     */
    public $imageURL;
    protected $_name = [
        'maskImageURL' => 'MaskImageURL',
        'imageURL'     => 'ImageURL',
    ];

    public function validate()
    {
        Model::validateRequired('maskImageURL', $this->maskImageURL, true);
        Model::validateRequired('imageURL', $this->imageURL, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maskImageURL) {
            $res['MaskImageURL'] = $this->maskImageURL;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefineMaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaskImageURL'])) {
            $model->maskImageURL = $map['MaskImageURL'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        return $model;
    }
}
