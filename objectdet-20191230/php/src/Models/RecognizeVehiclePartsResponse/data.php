<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\RecognizeVehiclePartsResponse;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\RecognizeVehiclePartsResponse\data\elements;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description elements
     *
     * @var array
     */
    public $elements;

    /**
     * @description originShapes
     *
     * @var array
     */
    public $originShapes;
    protected $_name = [
        'elements'     => 'Elements',
        'originShapes' => 'OriginShapes',
    ];

    public function validate()
    {
        Model::validateRequired('elements', $this->elements, true);
        Model::validateRequired('originShapes', $this->originShapes, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['Elements'] = [];
        if (null !== $this->elements && \is_array($this->elements)) {
            $n = 0;
            foreach ($this->elements as $item) {
                $res['Elements'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['OriginShapes'] = [];
        if (null !== $this->originShapes) {
            $res['OriginShapes'] = $this->originShapes;
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
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n               = 0;
                foreach ($map['Elements'] as $item) {
                    $model->elements[$n++] = null !== $item ? elements::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OriginShapes'])) {
            if (!empty($map['OriginShapes'])) {
                $model->originShapes = [];
                $model->originShapes = $map['OriginShapes'];
            }
        }

        return $model;
    }
}
