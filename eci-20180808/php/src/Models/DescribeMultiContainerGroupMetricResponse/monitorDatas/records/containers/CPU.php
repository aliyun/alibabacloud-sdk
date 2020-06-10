<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\records\containers;

use AlibabaCloud\Tea\Model;

class CPU extends Model
{
    /**
     * @description limit
     *
     * @var int
     */
    public $limit;

    /**
     * @description load
     *
     * @var int
     */
    public $load;

    /**
     * @description usageCoreNanoSeconds
     *
     * @var int
     */
    public $usageCoreNanoSeconds;

    /**
     * @description usageNanoCores
     *
     * @var int
     */
    public $usageNanoCores;
    protected $_name = [
        'limit'                => 'Limit',
        'load'                 => 'Load',
        'usageCoreNanoSeconds' => 'UsageCoreNanoSeconds',
        'usageNanoCores'       => 'UsageNanoCores',
    ];

    public function validate()
    {
        Model::validateRequired('limit', $this->limit, true);
        Model::validateRequired('load', $this->load, true);
        Model::validateRequired('usageCoreNanoSeconds', $this->usageCoreNanoSeconds, true);
        Model::validateRequired('usageNanoCores', $this->usageNanoCores, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->load) {
            $res['Load'] = $this->load;
        }
        if (null !== $this->usageCoreNanoSeconds) {
            $res['UsageCoreNanoSeconds'] = $this->usageCoreNanoSeconds;
        }
        if (null !== $this->usageNanoCores) {
            $res['UsageNanoCores'] = $this->usageNanoCores;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CPU
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Load'])) {
            $model->load = $map['Load'];
        }
        if (isset($map['UsageCoreNanoSeconds'])) {
            $model->usageCoreNanoSeconds = $map['UsageCoreNanoSeconds'];
        }
        if (isset($map['UsageNanoCores'])) {
            $model->usageNanoCores = $map['UsageNanoCores'];
        }

        return $model;
    }
}
