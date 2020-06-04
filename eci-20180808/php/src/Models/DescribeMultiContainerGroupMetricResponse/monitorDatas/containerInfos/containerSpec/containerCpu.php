<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerSpec;

use AlibabaCloud\Tea\Model;

class containerCpu extends Model {
    protected $_name = [
        'limit' => 'Limit',
        'maxLimit' => 'MaxLimit',
        'mask' => 'Mask',
        'quota' => 'Quota',
        'period' => 'Period',
    ];
    public function validate() {
        Model::validateRequired('limit', $this->limit, true);
        Model::validateRequired('maxLimit', $this->maxLimit, true);
        Model::validateRequired('mask', $this->mask, true);
        Model::validateRequired('quota', $this->quota, true);
        Model::validateRequired('period', $this->period, true);
    }
    public function toMap() {
        $res = [];
        $res['Limit'] = $this->limit;
        $res['MaxLimit'] = $this->maxLimit;
        $res['Mask'] = $this->mask;
        $res['Quota'] = $this->quota;
        $res['Period'] = $this->period;
        return $res;
    }
    /**
     * @param array $map
     * @return containerCpu
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Limit'])){
            $model->limit = $map['Limit'];
        }
        if(isset($map['MaxLimit'])){
            $model->maxLimit = $map['MaxLimit'];
        }
        if(isset($map['Mask'])){
            $model->mask = $map['Mask'];
        }
        if(isset($map['Quota'])){
            $model->quota = $map['Quota'];
        }
        if(isset($map['Period'])){
            $model->period = $map['Period'];
        }
        return $model;
    }
    /**
     * @description limit
     * @var integer
     */
    public $limit;

    /**
     * @description maxLimit
     * @var integer
     */
    public $maxLimit;

    /**
     * @description mask
     * @var string
     */
    public $mask;

    /**
     * @description quota
     * @var integer
     */
    public $quota;

    /**
     * @description period
     * @var integer
     */
    public $period;

}
