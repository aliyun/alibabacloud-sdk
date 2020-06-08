<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceMonitorResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'period' => 'Period',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('period', $this->period, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Period'] = $this->period;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBInstanceMonitorResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Period'])){
            $model->period = $map['Period'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.configValue
     * @var string
     */
    public $period;

}
