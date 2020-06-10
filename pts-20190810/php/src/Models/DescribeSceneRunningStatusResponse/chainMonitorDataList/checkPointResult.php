<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneRunningStatusResponse\chainMonitorDataList;

use AlibabaCloud\Tea\Model;

class checkPointResult extends Model
{
    /**
     * @description hitCount
     *
     * @var int
     */
    public $succeedBusinessCount;

    /**
     * @description missCount
     *
     * @var int
     */
    public $failedBusinessCount;

    /**
     * @description hitQps
     *
     * @var float
     */
    public $succeedBusinessQps;

    /**
     * @description missQps
     *
     * @var float
     */
    public $failedBusinessQps;
    protected $_name = [
        'succeedBusinessCount' => 'SucceedBusinessCount',
        'failedBusinessCount'  => 'FailedBusinessCount',
        'succeedBusinessQps'   => 'SucceedBusinessQps',
        'failedBusinessQps'    => 'FailedBusinessQps',
    ];

    public function validate()
    {
        Model::validateRequired('succeedBusinessCount', $this->succeedBusinessCount, true);
        Model::validateRequired('failedBusinessCount', $this->failedBusinessCount, true);
        Model::validateRequired('succeedBusinessQps', $this->succeedBusinessQps, true);
        Model::validateRequired('failedBusinessQps', $this->failedBusinessQps, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->succeedBusinessCount) {
            $res['SucceedBusinessCount'] = $this->succeedBusinessCount;
        }
        if (null !== $this->failedBusinessCount) {
            $res['FailedBusinessCount'] = $this->failedBusinessCount;
        }
        if (null !== $this->succeedBusinessQps) {
            $res['SucceedBusinessQps'] = $this->succeedBusinessQps;
        }
        if (null !== $this->failedBusinessQps) {
            $res['FailedBusinessQps'] = $this->failedBusinessQps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkPointResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SucceedBusinessCount'])) {
            $model->succeedBusinessCount = $map['SucceedBusinessCount'];
        }
        if (isset($map['FailedBusinessCount'])) {
            $model->failedBusinessCount = $map['FailedBusinessCount'];
        }
        if (isset($map['SucceedBusinessQps'])) {
            $model->succeedBusinessQps = $map['SucceedBusinessQps'];
        }
        if (isset($map['FailedBusinessQps'])) {
            $model->failedBusinessQps = $map['FailedBusinessQps'];
        }

        return $model;
    }
}
