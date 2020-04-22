<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan\ImageBlindCharacterWatermarkResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description watermarkImageUrl
     *
     * @var string
     */
    public $watermarkImageURL;

    /**
     * @description textImageUrl
     *
     * @var string
     */
    public $textImageURL;
    protected $_name = [
        'watermarkImageURL' => 'WatermarkImageURL',
        'textImageURL'      => 'TextImageURL',
    ];

    public function validate()
    {
        Model::validateRequired('watermarkImageURL', $this->watermarkImageURL, true);
        Model::validateRequired('textImageURL', $this->textImageURL, true);
    }

    public function toMap()
    {
        $res                      = [];
        $res['WatermarkImageURL'] = $this->watermarkImageURL;
        $res['TextImageURL']      = $this->textImageURL;

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
        if (isset($map['WatermarkImageURL'])) {
            $model->watermarkImageURL = $map['WatermarkImageURL'];
        }
        if (isset($map['TextImageURL'])) {
            $model->textImageURL = $map['TextImageURL'];
        }

        return $model;
    }
}
