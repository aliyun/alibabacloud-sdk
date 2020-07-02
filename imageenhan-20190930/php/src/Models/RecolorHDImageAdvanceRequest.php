<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorHDImageAdvanceRequest\colorTemplate;
use AlibabaCloud\Tea\Model;

class RecolorHDImageAdvanceRequest extends Model
{
    /**
     * @description UrlObject
     *
     * @var Stream
     */
    public $urlObject;

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
        'urlObject'     => 'UrlObject',
        'mode'          => 'Mode',
        'refUrl'        => 'RefUrl',
        'colorCount'    => 'ColorCount',
        'colorTemplate' => 'ColorTemplate',
        'degree'        => 'Degree',
    ];

    public function validate()
    {
        Model::validateRequired('urlObject', $this->urlObject, true);
        Model::validateRequired('degree', $this->degree, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->urlObject) {
            $res['UrlObject'] = $this->urlObject;
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
     * @return RecolorHDImageAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UrlObject'])) {
            $model->urlObject = $map['UrlObject'];
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
