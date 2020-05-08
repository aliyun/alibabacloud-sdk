<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\SDK\Videoenhan\V20200320\Models\EraseVideoLogoRequest\boxes;
use AlibabaCloud\Tea\Model;

class EraseVideoLogoRequest extends Model
{
    /**
     * @description videoUrl
     *
     * @var string
     */
    public $videoUrl;

    /**
     * @description boxes
     *
     * @var array
     */
    public $boxes;
    protected $_name = [
        'videoUrl' => 'VideoUrl',
        'boxes'    => 'Boxes',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrl', $this->videoUrl, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['VideoUrl'] = $this->videoUrl;
        $res['Boxes']    = [];
        if (null !== $this->boxes && \is_array($this->boxes)) {
            $n = 0;
            foreach ($this->boxes as $item) {
                $res['Boxes'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EraseVideoLogoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = [];
                $n            = 0;
                foreach ($map['Boxes'] as $item) {
                    $model->boxes[$n++] = null !== $item ? boxes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
