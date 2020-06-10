<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventHistogramResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventHistogramResponse\systemEventHistograms\systemEventHistogram;
use AlibabaCloud\Tea\Model;

class systemEventHistograms extends Model
{
    /**
     * @description SystemEventHistogram
     *
     * @var array
     */
    public $systemEventHistogram;
    protected $_name = [
        'systemEventHistogram' => 'SystemEventHistogram',
    ];

    public function validate()
    {
        Model::validateRequired('systemEventHistogram', $this->systemEventHistogram, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemEventHistogram) {
            $res['SystemEventHistogram'] = [];
            if (null !== $this->systemEventHistogram && \is_array($this->systemEventHistogram)) {
                $n = 0;
                foreach ($this->systemEventHistogram as $item) {
                    $res['SystemEventHistogram'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemEventHistograms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemEventHistogram'])) {
            if (!empty($map['SystemEventHistogram'])) {
                $model->systemEventHistogram = [];
                $n                           = 0;
                foreach ($map['SystemEventHistogram'] as $item) {
                    $model->systemEventHistogram[$n++] = null !== $item ? systemEventHistogram::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
