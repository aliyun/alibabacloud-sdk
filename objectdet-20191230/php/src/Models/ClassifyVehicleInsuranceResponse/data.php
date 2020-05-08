<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\ClassifyVehicleInsuranceResponse;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\ClassifyVehicleInsuranceResponse\data\labels;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description threshold
     *
     * @var float
     */
    public $threshold;

    /**
     * @description labels
     *
     * @var array
     */
    public $labels;
    protected $_name = [
        'threshold' => 'Threshold',
        'labels'    => 'Labels',
    ];

    public function validate()
    {
        Model::validateRequired('threshold', $this->threshold, true);
        Model::validateRequired('labels', $this->labels, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['Threshold'] = $this->threshold;
        $res['Labels']    = [];
        if (null !== $this->labels && \is_array($this->labels)) {
            $n = 0;
            foreach ($this->labels as $item) {
                $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
