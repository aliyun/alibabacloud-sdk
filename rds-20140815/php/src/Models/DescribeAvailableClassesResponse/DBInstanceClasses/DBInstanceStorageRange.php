<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesResponse\DBInstanceClasses;

use AlibabaCloud\Tea\Model;

class DBInstanceStorageRange extends Model
{
    /**
     * @description max
     *
     * @var int
     */
    public $maxValue;

    /**
     * @description min
     *
     * @var int
     */
    public $minValue;

    /**
     * @description step
     *
     * @var int
     */
    public $step;
    protected $_name = [
        'maxValue' => 'MaxValue',
        'minValue' => 'MinValue',
        'step'     => 'Step',
    ];

    public function validate()
    {
        Model::validateRequired('maxValue', $this->maxValue, true);
        Model::validateRequired('minValue', $this->minValue, true);
        Model::validateRequired('step', $this->step, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }
        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceStorageRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }
        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        return $model;
    }
}
