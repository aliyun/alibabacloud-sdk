<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterMonitorResponse extends Model {
    protected $_name = [
        'period' => 'Period',
        'requestId' => 'RequestId',
    ];
    public function validate() {
        Model::validateRequired('period', $this->period, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }
    public function toMap() {
        $res = [];
        $res['Period'] = $this->period;
        $res['RequestId'] = $this->requestId;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBClusterMonitorResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Period'])){
            $model->period = $map['Period'];
        }
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        return $model;
    }
    /**
     * @description data.configValue
     * @var string
     */
    public $period;

    /**
     * @description requestId
     * @var string
     */
    public $requestId;

}
