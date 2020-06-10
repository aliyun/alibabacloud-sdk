<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLReportsResponse\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLReportsResponse\items\item\latencyTopNItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLReportsResponse\items\item\QPSTopNItems;
use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description reportTime
     *
     * @var string
     */
    public $reportTime;

    /**
     * @description latencyTopNItems
     *
     * @var latencyTopNItems
     */
    public $latencyTopNItems;

    /**
     * @description qpsTopNItems
     *
     * @var QPSTopNItems
     */
    public $QPSTopNItems;
    protected $_name = [
        'reportTime'       => 'ReportTime',
        'latencyTopNItems' => 'LatencyTopNItems',
        'QPSTopNItems'     => 'QPSTopNItems',
    ];

    public function validate()
    {
        Model::validateRequired('reportTime', $this->reportTime, true);
        Model::validateRequired('latencyTopNItems', $this->latencyTopNItems, true);
        Model::validateRequired('QPSTopNItems', $this->QPSTopNItems, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }
        if (null !== $this->latencyTopNItems) {
            $res['LatencyTopNItems'] = null !== $this->latencyTopNItems ? $this->latencyTopNItems->toMap() : null;
        }
        if (null !== $this->QPSTopNItems) {
            $res['QPSTopNItems'] = null !== $this->QPSTopNItems ? $this->QPSTopNItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }
        if (isset($map['LatencyTopNItems'])) {
            $model->latencyTopNItems = latencyTopNItems::fromMap($map['LatencyTopNItems']);
        }
        if (isset($map['QPSTopNItems'])) {
            $model->QPSTopNItems = QPSTopNItems::fromMap($map['QPSTopNItems']);
        }

        return $model;
    }
}
