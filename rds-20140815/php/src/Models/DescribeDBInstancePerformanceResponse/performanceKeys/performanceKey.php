<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancePerformanceResponse\performanceKeys;

use AlibabaCloud\Tea\Model;

class performanceKey extends Model {
    protected $_name = [
        'key' => 'Key',
        'unit' => 'Unit',
        'valueFormat' => 'ValueFormat',
    ];
    public function validate() {
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('unit', $this->unit, true);
        Model::validateRequired('valueFormat', $this->valueFormat, true);
    }
    public function toMap() {
        $res = [];
        $res['Key'] = $this->key;
        $res['Unit'] = $this->unit;
        $res['ValueFormat'] = $this->valueFormat;
        return $res;
    }
    /**
     * @param array $map
     * @return performanceKey
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Key'])){
            $model->key = $map['Key'];
        }
        if(isset($map['Unit'])){
            $model->unit = $map['Unit'];
        }
        if(isset($map['ValueFormat'])){
            $model->valueFormat = $map['ValueFormat'];
        }
        return $model;
    }
    /**
     * @description key
     * @var string
     */
    public $key;

    /**
     * @description unit
     * @var string
     */
    public $unit;

    /**
     * @description valueFormat
     * @var string
     */
    public $valueFormat;

}
