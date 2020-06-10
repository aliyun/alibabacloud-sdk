<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponse\videoPlayStatisDetails\videoPlayStatisDetail;
use AlibabaCloud\Tea\Model;

class videoPlayStatisDetails extends Model
{
    /**
     * @description VideoPlayStatisDetail
     *
     * @var array
     */
    public $videoPlayStatisDetail;
    protected $_name = [
        'videoPlayStatisDetail' => 'VideoPlayStatisDetail',
    ];

    public function validate()
    {
        Model::validateRequired('videoPlayStatisDetail', $this->videoPlayStatisDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoPlayStatisDetail) {
            $res['VideoPlayStatisDetail'] = [];
            if (null !== $this->videoPlayStatisDetail && \is_array($this->videoPlayStatisDetail)) {
                $n = 0;
                foreach ($this->videoPlayStatisDetail as $item) {
                    $res['VideoPlayStatisDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoPlayStatisDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoPlayStatisDetail'])) {
            if (!empty($map['VideoPlayStatisDetail'])) {
                $model->videoPlayStatisDetail = [];
                $n                            = 0;
                foreach ($map['VideoPlayStatisDetail'] as $item) {
                    $model->videoPlayStatisDetail[$n++] = null !== $item ? videoPlayStatisDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
