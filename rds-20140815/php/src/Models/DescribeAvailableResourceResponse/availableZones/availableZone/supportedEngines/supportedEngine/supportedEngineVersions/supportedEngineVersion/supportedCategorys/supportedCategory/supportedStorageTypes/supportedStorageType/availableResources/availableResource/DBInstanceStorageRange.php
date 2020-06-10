<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategorys\supportedCategory\supportedStorageTypes\supportedStorageType\availableResources\availableResource;

use AlibabaCloud\Tea\Model;

class DBInstanceStorageRange extends Model
{
    /**
     * @description max
     *
     * @var int
     */
    public $max;

    /**
     * @description min
     *
     * @var int
     */
    public $min;

    /**
     * @description step
     *
     * @var int
     */
    public $step;
    protected $_name = [
        'max'  => 'Max',
        'min'  => 'Min',
        'step' => 'Step',
    ];

    public function validate()
    {
        Model::validateRequired('max', $this->max, true);
        Model::validateRequired('min', $this->min, true);
        Model::validateRequired('step', $this->step, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
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
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        return $model;
    }
}
