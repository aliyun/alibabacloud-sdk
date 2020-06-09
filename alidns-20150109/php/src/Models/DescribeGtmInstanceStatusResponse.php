<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstanceStatusResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'addrNotAvailableNum' => 'AddrNotAvailableNum',
        'addrPoolNotAvailableNum' => 'AddrPoolNotAvailableNum',
        'switchToFailoverStrategyNum' => 'SwitchToFailoverStrategyNum',
        'strategyNotAvailableNum' => 'StrategyNotAvailableNum',
        'status' => 'Status',
        'statusReason' => 'StatusReason',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('addrNotAvailableNum', $this->addrNotAvailableNum, true);
        Model::validateRequired('addrPoolNotAvailableNum', $this->addrPoolNotAvailableNum, true);
        Model::validateRequired('switchToFailoverStrategyNum', $this->switchToFailoverStrategyNum, true);
        Model::validateRequired('strategyNotAvailableNum', $this->strategyNotAvailableNum, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('statusReason', $this->statusReason, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AddrNotAvailableNum'] = $this->addrNotAvailableNum;
        $res['AddrPoolNotAvailableNum'] = $this->addrPoolNotAvailableNum;
        $res['SwitchToFailoverStrategyNum'] = $this->switchToFailoverStrategyNum;
        $res['StrategyNotAvailableNum'] = $this->strategyNotAvailableNum;
        $res['Status'] = $this->status;
        $res['StatusReason'] = $this->statusReason;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeGtmInstanceStatusResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AddrNotAvailableNum'])){
            $model->addrNotAvailableNum = $map['AddrNotAvailableNum'];
        }
        if(isset($map['AddrPoolNotAvailableNum'])){
            $model->addrPoolNotAvailableNum = $map['AddrPoolNotAvailableNum'];
        }
        if(isset($map['SwitchToFailoverStrategyNum'])){
            $model->switchToFailoverStrategyNum = $map['SwitchToFailoverStrategyNum'];
        }
        if(isset($map['StrategyNotAvailableNum'])){
            $model->strategyNotAvailableNum = $map['StrategyNotAvailableNum'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['StatusReason'])){
            $model->statusReason = $map['StatusReason'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.addrNotAvailableNum
     * @var integer
     */
    public $addrNotAvailableNum;

    /**
     * @description module.addrPoolNotAvailableNum
     * @var integer
     */
    public $addrPoolNotAvailableNum;

    /**
     * @description module.switchToFailoverStrategyNum
     * @var integer
     */
    public $switchToFailoverStrategyNum;

    /**
     * @description module.strategyNotAvailableNum
     * @var integer
     */
    public $strategyNotAvailableNum;

    /**
     * @description module.status
     * @var string
     */
    public $status;

    /**
     * @description module.statusReasons
     * @var string
     */
    public $statusReason;

}
