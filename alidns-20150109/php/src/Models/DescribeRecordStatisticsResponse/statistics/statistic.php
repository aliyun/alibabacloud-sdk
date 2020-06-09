<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsResponse\statistics;

use AlibabaCloud\Tea\Model;

class statistic extends Model {
    protected $_name = [
        'timestamp' => 'Timestamp',
        'count' => 'Count',
    ];
    public function validate() {
        Model::validateRequired('timestamp', $this->timestamp, true);
        Model::validateRequired('count', $this->count, true);
    }
    public function toMap() {
        $res = [];
        $res['Timestamp'] = $this->timestamp;
        $res['Count'] = $this->count;
        return $res;
    }
    /**
     * @param array $map
     * @return statistic
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Timestamp'])){
            $model->timestamp = $map['Timestamp'];
        }
        if(isset($map['Count'])){
            $model->count = $map['Count'];
        }
        return $model;
    }
    /**
     * @description timestamp
     * @var integer
     */
    public $timestamp;

    /**
     * @description count
     * @var integer
     */
    public $count;

}
