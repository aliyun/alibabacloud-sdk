<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;

class MakeSuperResolutionImageAdvanceRequest extends Model
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
        $res = [];
        if (null !== $this->urlObject) {
            $res['UrlObject'] = $this->urlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MakeSuperResolutionImageAdvanceRequest
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
