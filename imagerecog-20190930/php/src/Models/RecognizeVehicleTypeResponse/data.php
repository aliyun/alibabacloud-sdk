<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeVehicleTypeResponse;

use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeVehicleTypeResponse\data\elements;
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
     * @description elements
     *
     * @var array
     */
    public $elements;
    protected $_name = [
        'threshold' => 'Threshold',
        'elements'  => 'Elements',
    ];

    public function validate()
    {
        Model::validateRequired('threshold', $this->threshold, true);
        Model::validateRequired('elements', $this->elements, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->elements) {
            $res['Elements'] = [];
            if (null !== $this->elements && \is_array($this->elements)) {
                $n = 0;
                foreach ($this->elements as $item) {
                    $res['Elements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
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
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n               = 0;
                foreach ($map['Elements'] as $item) {
                    $model->elements[$n++] = null !== $item ? elements::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
