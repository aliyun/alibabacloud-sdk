<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\Tea\Model;

class RecognizeDrivingLicenseRequest extends Model
{
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;

    /**
     * @description side
     *
     * @var string
     */
    public $side;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'side'     => 'Side',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('side', $this->side, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['ImageURL'] = $this->imageURL;
        $res['Side']     = $this->side;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeDrivingLicenseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Side'])) {
            $model->side = $map['Side'];
        }

        return $model;
    }
}
