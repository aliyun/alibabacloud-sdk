<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RenewInstanceResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'orderId' => 'OrderId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('orderId', $this->orderId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['OrderId'] = $this->orderId;
        return $res;
    }
    /**
     * @param array $map
     * @return RenewInstanceResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['OrderId'])){
            $model->orderId = $map['OrderId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.orderId
     * @var integer
     */
    public $orderId;

}
