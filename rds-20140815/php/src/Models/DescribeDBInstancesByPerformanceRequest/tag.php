<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByPerformanceRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model {
    protected $_name = [
        'key' => 'key',
        'value' => 'value',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['key'] = $this->key;
        $res['value'] = $this->value;
        return $res;
    }
    /**
     * @param array $map
     * @return tag
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['key'])){
            $model->key = $map['key'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        return $model;
    }
    /**
     * @description tagKey1
     * @var string
     */
    public $key;

    /**
     * @description tagValue1
     * @var string
     */
    public $value;

}
