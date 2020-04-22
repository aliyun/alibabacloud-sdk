<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupMetricResponse\records\containers;

use AlibabaCloud\Tea\Model;

class CPU extends Model
{
    /**
     * @description usageNanoCores
     *
     * @var int
     */
    public $usageNanoCores;

    /**
     * @description usageCoreNanoSeconds
     *
     * @var int
     */
    public $usageCoreNanoSeconds;

    /**
     * @description load
     *
     * @var int
     */
    public $load;

    /**
     * @description limit
     *
     * @var int
     */
    public $limit;
    protected $_name = [
        'usageNanoCores'       => 'UsageNanoCores',
        'usageCoreNanoSeconds' => 'UsageCoreNanoSeconds',
        'load'                 => 'Load',
        'limit'                => 'Limit',
    ];

    public function validate()
    {
        Model::validateRequired('usageNanoCores', $this->usageNanoCores, true);
        Model::validateRequired('usageCoreNanoSeconds', $this->usageCoreNanoSeconds, true);
        Model::validateRequired('load', $this->load, true);
        Model::validateRequired('limit', $this->limit, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['UsageNanoCores']       = $this->usageNanoCores;
        $res['UsageCoreNanoSeconds'] = $this->usageCoreNanoSeconds;
        $res['Load']                 = $this->load;
        $res['Limit']                = $this->limit;

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
        if (isset($map['UsageNanoCores'])) {
            $model->usageNanoCores = $map['UsageNanoCores'];
        }
        if (isset($map['UsageCoreNanoSeconds'])) {
            $model->usageCoreNanoSeconds = $map['UsageCoreNanoSeconds'];
        }
        if (isset($map['Load'])) {
            $model->load = $map['Load'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        return $model;
    }
}
