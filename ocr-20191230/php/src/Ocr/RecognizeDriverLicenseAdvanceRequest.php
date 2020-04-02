<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\Tea\Model;

class RecognizeDriverLicenseAdvanceRequest extends Model
{
    /**
     * @description ImageURLObject
     *
     * @var Stream
     */
    public $imageURLObject;
    /**
     * @description side
     *
     * @var string
     */
    public $side;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'side'           => 'Side',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
        Model::validateRequired('side', $this->side, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['ImageURLObject'] = $this->imageURLObject;
        $res['Side']           = $this->side;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeDriverLicenseAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['Side'])) {
            $model->side = $map['Side'];
        }

        return $model;
    }
}
