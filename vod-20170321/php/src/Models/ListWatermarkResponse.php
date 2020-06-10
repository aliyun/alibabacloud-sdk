<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListWatermarkResponse\watermarkInfos;
use AlibabaCloud\Tea\Model;

class ListWatermarkResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.watermarkDtos
     *
     * @var array
     */
    public $watermarkInfos;
    protected $_name = [
        'requestId'      => 'RequestId',
        'watermarkInfos' => 'WatermarkInfos',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('watermarkInfos', $this->watermarkInfos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->watermarkInfos) {
            $res['WatermarkInfos'] = [];
            if (null !== $this->watermarkInfos && \is_array($this->watermarkInfos)) {
                $n = 0;
                foreach ($this->watermarkInfos as $item) {
                    $res['WatermarkInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWatermarkResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WatermarkInfos'])) {
            if (!empty($map['WatermarkInfos'])) {
                $model->watermarkInfos = [];
                $n                     = 0;
                foreach ($map['WatermarkInfos'] as $item) {
                    $model->watermarkInfos[$n++] = null !== $item ? watermarkInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
