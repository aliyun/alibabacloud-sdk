<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventHistogramResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventHistogramResponse\eventHistograms\eventHistogram;
use AlibabaCloud\Tea\Model;

class eventHistograms extends Model
{
    /**
     * @description EventHistogram
     *
     * @var array
     */
    public $eventHistogram;
    protected $_name = [
        'eventHistogram' => 'EventHistogram',
    ];

    public function validate()
    {
        Model::validateRequired('eventHistogram', $this->eventHistogram, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventHistogram) {
            $res['EventHistogram'] = [];
            if (null !== $this->eventHistogram && \is_array($this->eventHistogram)) {
                $n = 0;
                foreach ($this->eventHistogram as $item) {
                    $res['EventHistogram'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventHistograms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventHistogram'])) {
            if (!empty($map['EventHistogram'])) {
                $model->eventHistogram = [];
                $n                     = 0;
                foreach ($map['EventHistogram'] as $item) {
                    $model->eventHistogram[$n++] = null !== $item ? eventHistogram::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
