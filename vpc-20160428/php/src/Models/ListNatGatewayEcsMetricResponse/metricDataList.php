<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatGatewayEcsMetricResponse;

use AlibabaCloud\Tea\Model;

class metricDataList extends Model
{
    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var int
     */
    public $activeSessionNum;

    /**
     * @var int
     */
    public $newSessionRate;

    /**
     * @var int
     */
    public $rxBps;

    /**
     * @var int
     */
    public $txBps;

    /**
     * @var int
     */
    public $rxPps;

    /**
     * @var int
     */
    public $txPps;
    protected $_name = [
        'natGatewayId'     => 'NatGatewayId',
        'privateIpAddress' => 'PrivateIpAddress',
        'timestamp'        => 'Timestamp',
        'activeSessionNum' => 'ActiveSessionNum',
        'newSessionRate'   => 'NewSessionRate',
        'rxBps'            => 'RxBps',
        'txBps'            => 'TxBps',
        'rxPps'            => 'RxPps',
        'txPps'            => 'TxPps',
    ];

    public function validate()
    {
        Model::validateRequired('natGatewayId', $this->natGatewayId, true);
        Model::validateRequired('privateIpAddress', $this->privateIpAddress, true);
        Model::validateRequired('timestamp', $this->timestamp, true);
        Model::validateRequired('activeSessionNum', $this->activeSessionNum, true);
        Model::validateRequired('newSessionRate', $this->newSessionRate, true);
        Model::validateRequired('rxBps', $this->rxBps, true);
        Model::validateRequired('txBps', $this->txBps, true);
        Model::validateRequired('rxPps', $this->rxPps, true);
        Model::validateRequired('txPps', $this->txPps, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->activeSessionNum) {
            $res['ActiveSessionNum'] = $this->activeSessionNum;
        }
        if (null !== $this->newSessionRate) {
            $res['NewSessionRate'] = $this->newSessionRate;
        }
        if (null !== $this->rxBps) {
            $res['RxBps'] = $this->rxBps;
        }
        if (null !== $this->txBps) {
            $res['TxBps'] = $this->txBps;
        }
        if (null !== $this->rxPps) {
            $res['RxPps'] = $this->rxPps;
        }
        if (null !== $this->txPps) {
            $res['TxPps'] = $this->txPps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['ActiveSessionNum'])) {
            $model->activeSessionNum = $map['ActiveSessionNum'];
        }
        if (isset($map['NewSessionRate'])) {
            $model->newSessionRate = $map['NewSessionRate'];
        }
        if (isset($map['RxBps'])) {
            $model->rxBps = $map['RxBps'];
        }
        if (isset($map['TxBps'])) {
            $model->txBps = $map['TxBps'];
        }
        if (isset($map['RxPps'])) {
            $model->rxPps = $map['RxPps'];
        }
        if (isset($map['TxPps'])) {
            $model->txPps = $map['TxPps'];
        }

        return $model;
    }
}
