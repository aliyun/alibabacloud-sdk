<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorImageRequest\colorTemplate;
use AlibabaCloud\Tea\Model;

class RecolorImageRequest extends Model
{
    /**
     * @description url
     *
     * @var string
     */
    public $url;

    /**
     * @description mode
     *
     * @var string
     */
    public $mode;

    /**
     * @description refUrl
     *
     * @var string
     */
    public $refUrl;

    /**
     * @description colorCount
     *
     * @var int
     */
    public $colorCount;

    /**
     * @description colorTemplate
     *
     * @var array
     */
    public $colorTemplate;
    protected $_name = [
        'url'           => 'Url',
        'mode'          => 'Mode',
        'refUrl'        => 'RefUrl',
        'colorCount'    => 'ColorCount',
        'colorTemplate' => 'ColorTemplate',
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
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->refUrl) {
            $res['RefUrl'] = $this->refUrl;
        }
        if (null !== $this->colorCount) {
            $res['ColorCount'] = $this->colorCount;
        }
        if (null !== $this->colorTemplate) {
            $res['ColorTemplate'] = [];
            if (null !== $this->colorTemplate && \is_array($this->colorTemplate)) {
                $n = 0;
                foreach ($this->colorTemplate as $item) {
                    $res['ColorTemplate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecolorImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['RefUrl'])) {
            $model->refUrl = $map['RefUrl'];
        }
        if (isset($map['ColorCount'])) {
            $model->colorCount = $map['ColorCount'];
        }
        if (isset($map['ColorTemplate'])) {
            if (!empty($map['ColorTemplate'])) {
                $model->colorTemplate = [];
                $n                    = 0;
                foreach ($map['ColorTemplate'] as $item) {
                    $model->colorTemplate[$n++] = null !== $item ? colorTemplate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
