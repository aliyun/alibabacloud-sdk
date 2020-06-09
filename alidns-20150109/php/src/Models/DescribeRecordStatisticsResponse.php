<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsResponse\statistics;

class DescribeRecordStatisticsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'statistics' => 'Statistics',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('statistics', $this->statistics, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Statistics'] = null !== $this->statistics ? $this->statistics->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeRecordStatisticsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Statistics'])){
            $model->statistics = statistics::fromMap($map['Statistics']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module
     * @var statistics
     */
    public $statistics;

}
