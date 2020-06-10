<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\ExtendImageStyleResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description url
     *
     * @var string
     */
    public $url;

    /**
     * @description majorUrl
     *
     * @var string
     */
    public $majorUrl;
    protected $_name = [
        'url'      => 'Url',
        'majorUrl' => 'MajorUrl',
    ];

    public function validate()
    {
        Model::validateRequired('url', $this->url, true);
        Model::validateRequired('majorUrl', $this->majorUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->majorUrl) {
            $res['MajorUrl'] = $this->majorUrl;
        }

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
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['MajorUrl'])) {
            $model->majorUrl = $map['MajorUrl'];
        }

        return $model;
    }
}
