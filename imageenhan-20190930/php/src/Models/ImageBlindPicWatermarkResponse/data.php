<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\ImageBlindPicWatermarkResponse;

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
     * @description logoUrl
     *
     * @var string
     */
    public $logoURL;
    protected $_name = [
        'watermarkImageURL' => 'WatermarkImageURL',
        'logoURL'           => 'LogoURL',
    ];

    public function validate()
    {
        Model::validateRequired('watermarkImageURL', $this->watermarkImageURL, true);
        Model::validateRequired('logoURL', $this->logoURL, true);
    }

    public function toMap()
    {
        $res                      = [];
        $res['WatermarkImageURL'] = $this->watermarkImageURL;
        $res['LogoURL']           = $this->logoURL;

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
        if (isset($map['LogoURL'])) {
            $model->logoURL = $map['LogoURL'];
        }

        return $model;
    }
}
