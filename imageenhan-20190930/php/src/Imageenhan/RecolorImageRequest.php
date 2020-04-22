<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan;

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
        $res                  = [];
        $res['Url']           = $this->url;
        $res['Mode']          = $this->mode;
        $res['RefUrl']        = $this->refUrl;
        $res['ColorCount']    = $this->colorCount;
        $res['ColorTemplate'] = [];
        if (null !== $this->colorTemplate && \is_array($this->colorTemplate)) {
            $n = 0;
            foreach ($this->colorTemplate as $item) {
                $res['ColorTemplate'][$n++] = null !== $item ? $item->toMap() : $item;
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
                    $model->colorTemplate[$n++] = null !== $item ? RecolorImageRequest\colorTemplate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
