<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class DetectKneeXRayAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $urlObject;

    /**
     * @var string
     */
    public $dataFormat;
    protected $_name = [
        'urlObject'  => 'UrlObject',
        'dataFormat' => 'DataFormat',
    ];

    public function validate()
    {
        Model::validateRequired('urlObject', $this->urlObject, true);
        Model::validateRequired('dataFormat', $this->dataFormat, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->urlObject) {
            $res['UrlObject'] = $this->urlObject;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectKneeXRayAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UrlObject'])) {
            $model->urlObject = $map['UrlObject'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }

        return $model;
    }
}
