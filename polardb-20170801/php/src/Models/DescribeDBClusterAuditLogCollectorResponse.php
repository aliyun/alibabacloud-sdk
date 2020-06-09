<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterAuditLogCollectorResponse extends Model {
    protected $_name = [
        'collectorStatus' => 'CollectorStatus',
        'requestId' => 'RequestId',
    ];
    public function validate() {
        Model::validateRequired('collectorStatus', $this->collectorStatus, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }
    public function toMap() {
        $res = [];
        $res['CollectorStatus'] = $this->collectorStatus;
        $res['RequestId'] = $this->requestId;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBClusterAuditLogCollectorResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CollectorStatus'])){
            $model->collectorStatus = $map['CollectorStatus'];
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
    public $collectorStatus;

    /**
     * @description requestId
     * @var string
     */
    public $requestId;

}
