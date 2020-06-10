<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstanceStatusResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.addrNotAvailableNum
     *
     * @var int
     */
    public $addrNotAvailableNum;

    /**
     * @description module.addrPoolNotAvailableNum
     *
     * @var int
     */
    public $addrPoolNotAvailableNum;

    /**
     * @description module.switchToFailoverStrategyNum
     *
     * @var int
     */
    public $switchToFailoverStrategyNum;

    /**
     * @description module.strategyNotAvailableNum
     *
     * @var int
     */
    public $strategyNotAvailableNum;

    /**
     * @description module.status
     *
     * @var string
     */
    public $status;

    /**
     * @description module.statusReasons
     *
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'requestId'                   => 'RequestId',
        'addrNotAvailableNum'         => 'AddrNotAvailableNum',
        'addrPoolNotAvailableNum'     => 'AddrPoolNotAvailableNum',
        'switchToFailoverStrategyNum' => 'SwitchToFailoverStrategyNum',
        'strategyNotAvailableNum'     => 'StrategyNotAvailableNum',
        'status'                      => 'Status',
        'statusReason'                => 'StatusReason',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('addrNotAvailableNum', $this->addrNotAvailableNum, true);
        Model::validateRequired('addrPoolNotAvailableNum', $this->addrPoolNotAvailableNum, true);
        Model::validateRequired('switchToFailoverStrategyNum', $this->switchToFailoverStrategyNum, true);
        Model::validateRequired('strategyNotAvailableNum', $this->strategyNotAvailableNum, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('statusReason', $this->statusReason, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->addrNotAvailableNum) {
            $res['AddrNotAvailableNum'] = $this->addrNotAvailableNum;
        }
        if (null !== $this->addrPoolNotAvailableNum) {
            $res['AddrPoolNotAvailableNum'] = $this->addrPoolNotAvailableNum;
        }
        if (null !== $this->switchToFailoverStrategyNum) {
            $res['SwitchToFailoverStrategyNum'] = $this->switchToFailoverStrategyNum;
        }
        if (null !== $this->strategyNotAvailableNum) {
            $res['StrategyNotAvailableNum'] = $this->strategyNotAvailableNum;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmInstanceStatusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AddrNotAvailableNum'])) {
            $model->addrNotAvailableNum = $map['AddrNotAvailableNum'];
        }
        if (isset($map['AddrPoolNotAvailableNum'])) {
            $model->addrPoolNotAvailableNum = $map['AddrPoolNotAvailableNum'];
        }
        if (isset($map['SwitchToFailoverStrategyNum'])) {
            $model->switchToFailoverStrategyNum = $map['SwitchToFailoverStrategyNum'];
        }
        if (isset($map['StrategyNotAvailableNum'])) {
            $model->strategyNotAvailableNum = $map['StrategyNotAvailableNum'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        return $model;
    }
}
