<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan;

use AlibabaCloud\Tea\Model;

class MakeSuperResolutionImageRequest extends Model
{
    /**
     * @description url
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'url' => 'Url',
    ];

    public function validate()
    {
        Model::validateRequired('url', $this->url, true);
    }

    public function toMap()
    {
        $res        = [];
        $res['Url'] = $this->url;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MakeSuperResolutionImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
