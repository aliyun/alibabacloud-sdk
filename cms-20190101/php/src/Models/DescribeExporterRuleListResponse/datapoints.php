<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponse\datapoints\datapoint;
use AlibabaCloud\Tea\Model;

class datapoints extends Model
{
    /**
     * @description Datapoint
     *
     * @var array
     */
    public $datapoint;
    protected $_name = [
        'datapoint' => 'Datapoint',
    ];

    public function validate()
    {
        Model::validateRequired('datapoint', $this->datapoint, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datapoint) {
            $res['Datapoint'] = [];
            if (null !== $this->datapoint && \is_array($this->datapoint)) {
                $n = 0;
                foreach ($this->datapoint as $item) {
                    $res['Datapoint'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datapoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Datapoint'])) {
            if (!empty($map['Datapoint'])) {
                $model->datapoint = [];
                $n                = 0;
                foreach ($map['Datapoint'] as $item) {
                    $model->datapoint[$n++] = null !== $item ? datapoint::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
