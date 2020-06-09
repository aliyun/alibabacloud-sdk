<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterPerformanceResponse\performanceKeys\performanceItem\points;

use AlibabaCloud\Tea\Model;

class performanceItemValue extends Model {
    protected $_name = [
        'value' => 'Value',
        'timestamp' => 'Timestamp',
    ];
    public function validate() {
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('timestamp', $this->timestamp, true);
    }
    public function toMap() {
        $res = [];
        $res['Value'] = $this->value;
        $res['Timestamp'] = $this->timestamp;
        return $res;
    }
    /**
     * @param array $map
     * @return performanceItemValue
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        if(isset($map['Timestamp'])){
            $model->timestamp = $map['Timestamp'];
        }
        return $model;
    }
    /**
     * @description value
     * @var string
     */
    public $value;

    /**
     * @description timestamp
     * @var integer
     */
    public $timestamp;

}
