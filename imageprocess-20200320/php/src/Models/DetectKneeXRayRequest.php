<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Tea\Model;

class DetectKneeXRayRequest extends Model
{
    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $dataFormat;
    protected $_name = [
        'url'        => 'Url',
        'dataFormat' => 'DataFormat',
    ];

    public function validate()
    {
        Model::validateRequired('url', $this->url, true);
        Model::validateRequired('dataFormat', $this->dataFormat, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectKneeXRayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }

        return $model;
    }
}
