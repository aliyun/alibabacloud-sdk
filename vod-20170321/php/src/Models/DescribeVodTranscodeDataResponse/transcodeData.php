<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponse\transcodeData\transcodeDataItem;
use AlibabaCloud\Tea\Model;

class transcodeData extends Model
{
    /**
     * @description TranscodeDataItem
     *
     * @var array
     */
    public $transcodeDataItem;
    protected $_name = [
        'transcodeDataItem' => 'TranscodeDataItem',
    ];

    public function validate()
    {
        Model::validateRequired('transcodeDataItem', $this->transcodeDataItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transcodeDataItem) {
            $res['TranscodeDataItem'] = [];
            if (null !== $this->transcodeDataItem && \is_array($this->transcodeDataItem)) {
                $n = 0;
                foreach ($this->transcodeDataItem as $item) {
                    $res['TranscodeDataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TranscodeDataItem'])) {
            if (!empty($map['TranscodeDataItem'])) {
                $model->transcodeDataItem = [];
                $n                        = 0;
                foreach ($map['TranscodeDataItem'] as $item) {
                    $model->transcodeDataItem[$n++] = null !== $item ? transcodeDataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
