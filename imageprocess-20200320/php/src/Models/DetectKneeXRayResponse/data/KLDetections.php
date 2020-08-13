<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeXRayResponse\data;

use AlibabaCloud\Tea\Model;

class KLDetections extends Model
{
    /**
     * @var array
     */
    public $detections;
    protected $_name = [
        'detections' => 'Detections',
    ];

    public function validate()
    {
        Model::validateRequired('detections', $this->detections, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detections) {
            $res['Detections'] = $this->detections;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KLDetections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detections'])) {
            if (!empty($map['Detections'])) {
                $model->detections = $map['Detections'];
            }
        }

        return $model;
    }
}
