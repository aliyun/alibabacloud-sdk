<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponse\records;

use AlibabaCloud\Tea\Model;

class CPU extends Model {
    protected $_name = [
        'usageNanoCores' => 'UsageNanoCores',
        'usageCoreNanoSeconds' => 'UsageCoreNanoSeconds',
        'load' => 'Load',
        'limit' => 'Limit',
    ];
    public function validate() {
        Model::validateRequired('usageNanoCores', $this->usageNanoCores, true);
        Model::validateRequired('usageCoreNanoSeconds', $this->usageCoreNanoSeconds, true);
        Model::validateRequired('load', $this->load, true);
        Model::validateRequired('limit', $this->limit, true);
    }
    public function toMap() {
        $res = [];
        $res['UsageNanoCores'] = $this->usageNanoCores;
        $res['UsageCoreNanoSeconds'] = $this->usageCoreNanoSeconds;
        $res['Load'] = $this->load;
        $res['Limit'] = $this->limit;
        return $res;
    }
    /**
     * @param array $map
     * @return CPU
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UsageNanoCores'])){
            $model->usageNanoCores = $map['UsageNanoCores'];
        }
        if(isset($map['UsageCoreNanoSeconds'])){
            $model->usageCoreNanoSeconds = $map['UsageCoreNanoSeconds'];
        }
        if(isset($map['Load'])){
            $model->load = $map['Load'];
        }
        if(isset($map['Limit'])){
            $model->limit = $map['Limit'];
        }
        return $model;
    }
    /**
     * @description usageNanoCores
     * @var integer
     */
    public $usageNanoCores;

    /**
     * @description usageCoreNanoSeconds
     * @var integer
     */
    public $usageCoreNanoSeconds;

    /**
     * @description load
     * @var integer
     */
    public $load;

    /**
     * @description limit
     * @var integer
     */
    public $limit;

}
