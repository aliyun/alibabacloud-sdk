<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse\scene\relations;

use AlibabaCloud\Tea\Model;

class relationTestConfig extends Model
{
    /**
     * @description beginStep
     *
     * @var int
     */
    public $beginStep;

    /**
     * @description increment
     *
     * @var int
     */
    public $increment;

    /**
     * @description endStep
     *
     * @var int
     */
    public $endStep;
    protected $_name = [
        'beginStep' => 'BeginStep',
        'increment' => 'Increment',
        'endStep'   => 'EndStep',
    ];

    public function validate()
    {
        Model::validateRequired('beginStep', $this->beginStep, true);
        Model::validateRequired('increment', $this->increment, true);
        Model::validateRequired('endStep', $this->endStep, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginStep) {
            $res['BeginStep'] = $this->beginStep;
        }
        if (null !== $this->increment) {
            $res['Increment'] = $this->increment;
        }
        if (null !== $this->endStep) {
            $res['EndStep'] = $this->endStep;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relationTestConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginStep'])) {
            $model->beginStep = $map['BeginStep'];
        }
        if (isset($map['Increment'])) {
            $model->increment = $map['Increment'];
        }
        if (isset($map['EndStep'])) {
            $model->endStep = $map['EndStep'];
        }

        return $model;
    }
}
