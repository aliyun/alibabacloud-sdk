<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneRunningStatusResponse\chainMonitorDataList;

use AlibabaCloud\Tea\Model;

class qpsSummary extends Model
{
    /**
     * @description statusCode
     *
     * @var int
     */
    public $statusCode;

    /**
     * @description qps
     *
     * @var float
     */
    public $qps;

    /**
     * @description totalCount
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'statusCode' => 'StatusCode',
        'qps'        => 'Qps',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        Model::validateRequired('statusCode', $this->statusCode, true);
        Model::validateRequired('qps', $this->qps, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qpsSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
