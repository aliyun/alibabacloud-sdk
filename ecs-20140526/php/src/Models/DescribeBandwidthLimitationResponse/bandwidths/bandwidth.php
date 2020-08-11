<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponse\bandwidths;

use AlibabaCloud\Tea\Model;

class bandwidth extends Model
{
    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $min;

    /**
     * @var int
     */
    public $max;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'internetChargeType' => 'InternetChargeType',
        'min'                => 'Min',
        'max'                => 'Max',
        'unit'               => 'Unit',
    ];

    public function validate()
    {
        Model::validateRequired('internetChargeType', $this->internetChargeType, true);
        Model::validateRequired('min', $this->min, true);
        Model::validateRequired('max', $this->max, true);
        Model::validateRequired('unit', $this->unit, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidth
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
