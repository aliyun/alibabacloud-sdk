<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorHDImageRequest\colorTemplate;
use AlibabaCloud\Tea\Model;

class RecolorHDImageRequest extends Model
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

    /**
     * @description degree
     *
     * @var string
     */
    public $degree;
    protected $_name = [
        'url'           => 'Url',
        'mode'          => 'Mode',
        'refUrl'        => 'RefUrl',
        'colorCount'    => 'ColorCount',
        'colorTemplate' => 'ColorTemplate',
        'degree'        => 'Degree',
    ];

    public function validate()
    {
        Model::validateRequired('url', $this->url, true);
        Model::validateRequired('degree', $this->degree, true);
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
        if (null !== $this->degree) {
            $res['Degree'] = $this->degree;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecolorHDImageRequest
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
        if (isset($map['Degree'])) {
            $model->degree = $map['Degree'];
        }

        return $model;
    }
}
