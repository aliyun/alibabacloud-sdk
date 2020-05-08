<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\cpuStats;

use AlibabaCloud\Tea\Model;

class cpuUsage extends Model
{
    /**
     * @description total
     *
     * @var int
     */
    public $total;

    /**
     * @description user
     *
     * @var int
     */
    public $user;

    /**
     * @description system
     *
     * @var int
     */
    public $system;

    /**
     * @description perCpuUsages
     *
     * @var array
     */
    public $perCpuUsages;
    protected $_name = [
        'total'        => 'Total',
        'user'         => 'User',
        'system'       => 'System',
        'perCpuUsages' => 'PerCpuUsages',
    ];

    public function validate()
    {
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('user', $this->user, true);
        Model::validateRequired('system', $this->system, true);
        Model::validateRequired('perCpuUsages', $this->perCpuUsages, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['Total']        = $this->total;
        $res['User']         = $this->user;
        $res['System']       = $this->system;
        $res['PerCpuUsages'] = [];
        if (null !== $this->perCpuUsages) {
            $res['PerCpuUsages'] = $this->perCpuUsages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cpuUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['System'])) {
            $model->system = $map['System'];
        }
        if (isset($map['PerCpuUsages'])) {
            if (!empty($map['PerCpuUsages'])) {
                $model->perCpuUsages = [];
                $model->perCpuUsages = $map['PerCpuUsages'];
            }
        }

        return $model;
    }
}
