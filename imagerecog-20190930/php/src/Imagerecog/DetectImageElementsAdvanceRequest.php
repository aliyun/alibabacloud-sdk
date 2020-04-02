<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog;

use AlibabaCloud\Tea\Model;

class DetectImageElementsAdvanceRequest extends Model
{
    /**
     * @description UrlObject
     *
     * @var Stream
     */
    public $urlObject;
    protected $_name = [
        'urlObject' => 'UrlObject',
    ];

    public function validate()
    {
        Model::validateRequired('urlObject', $this->urlObject, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['UrlObject'] = $this->urlObject;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectImageElementsAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UrlObject'])) {
            $model->urlObject = $map['UrlObject'];
        }

        return $model;
    }
}
