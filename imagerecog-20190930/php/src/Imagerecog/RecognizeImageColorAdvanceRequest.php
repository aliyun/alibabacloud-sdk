<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog;

use AlibabaCloud\Tea\Model;

class RecognizeImageColorAdvanceRequest extends Model
{
    /**
     * @description UrlObject
     *
     * @var Stream
     */
    public $urlObject;
    /**
     * @description colorCount
     *
     * @var int
     */
    public $colorCount;
    protected $_name = [
        'urlObject'  => 'UrlObject',
        'colorCount' => 'ColorCount',
    ];

    public function validate()
    {
        Model::validateRequired('urlObject', $this->urlObject, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['UrlObject']  = $this->urlObject;
        $res['ColorCount'] = $this->colorCount;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeImageColorAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UrlObject'])) {
            $model->urlObject = $map['UrlObject'];
        }
        if (isset($map['ColorCount'])) {
            $model->colorCount = $map['ColorCount'];
        }

        return $model;
    }
}
