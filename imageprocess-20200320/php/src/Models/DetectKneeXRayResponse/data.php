<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeXRayResponse;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeXRayResponse\data\KLDetections;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var array
     */
    public $KLDetections;
    protected $_name = [
        'KLDetections' => 'KLDetections',
    ];

    public function validate()
    {
        Model::validateRequired('KLDetections', $this->KLDetections, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->KLDetections) {
            $res['KLDetections'] = [];
            if (null !== $this->KLDetections && \is_array($this->KLDetections)) {
                $n = 0;
                foreach ($this->KLDetections as $item) {
                    $res['KLDetections'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['KLDetections'])) {
            if (!empty($map['KLDetections'])) {
                $model->KLDetections = [];
                $n                   = 0;
                foreach ($map['KLDetections'] as $item) {
                    $model->KLDetections[$n++] = null !== $item ? KLDetections::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
