<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models;

use AlibabaCloud\Tea\Model;

class RecognizeImageColorRequest extends Model
{
    /**
     * @description url
     *
     * @var string
     */
    public $url;

    /**
     * @description colorCount
     *
     * @var int
     */
    public $colorCount;
    protected $_name = [
        'url'        => 'Url',
        'colorCount' => 'ColorCount',
    ];

    public function validate()
    {
        Model::validateRequired('url', $this->url, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->colorCount) {
            $res['ColorCount'] = $this->colorCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeImageColorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['ColorCount'])) {
            $model->colorCount = $map['ColorCount'];
        }

        return $model;
    }
}
