<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\networkStats;

use AlibabaCloud\Tea\Model;

class interfaceStats extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description rxBytes
     *
     * @var int
     */
    public $rxBytes;

    /**
     * @description rxPackets
     *
     * @var int
     */
    public $rxPackets;

    /**
     * @description rxErrors
     *
     * @var int
     */
    public $rxErrors;

    /**
     * @description rxDropped
     *
     * @var int
     */
    public $rxDropped;

    /**
     * @description txBytes
     *
     * @var int
     */
    public $txBytes;

    /**
     * @description txPackets
     *
     * @var int
     */
    public $txPackets;

    /**
     * @description txDropped
     *
     * @var int
     */
    public $txDropped;

    /**
     * @description txErrors
     *
     * @var int
     */
    public $txErrors;
    protected $_name = [
        'name'      => 'Name',
        'rxBytes'   => 'RxBytes',
        'rxPackets' => 'RxPackets',
        'rxErrors'  => 'RxErrors',
        'rxDropped' => 'RxDropped',
        'txBytes'   => 'TxBytes',
        'txPackets' => 'TxPackets',
        'txDropped' => 'TxDropped',
        'txErrors'  => 'TxErrors',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('rxBytes', $this->rxBytes, true);
        Model::validateRequired('rxPackets', $this->rxPackets, true);
        Model::validateRequired('rxErrors', $this->rxErrors, true);
        Model::validateRequired('rxDropped', $this->rxDropped, true);
        Model::validateRequired('txBytes', $this->txBytes, true);
        Model::validateRequired('txPackets', $this->txPackets, true);
        Model::validateRequired('txDropped', $this->txDropped, true);
        Model::validateRequired('txErrors', $this->txErrors, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rxBytes) {
            $res['RxBytes'] = $this->rxBytes;
        }
        if (null !== $this->rxPackets) {
            $res['RxPackets'] = $this->rxPackets;
        }
        if (null !== $this->rxErrors) {
            $res['RxErrors'] = $this->rxErrors;
        }
        if (null !== $this->rxDropped) {
            $res['RxDropped'] = $this->rxDropped;
        }
        if (null !== $this->txBytes) {
            $res['TxBytes'] = $this->txBytes;
        }
        if (null !== $this->txPackets) {
            $res['TxPackets'] = $this->txPackets;
        }
        if (null !== $this->txDropped) {
            $res['TxDropped'] = $this->txDropped;
        }
        if (null !== $this->txErrors) {
            $res['TxErrors'] = $this->txErrors;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interfaceStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RxBytes'])) {
            $model->rxBytes = $map['RxBytes'];
        }
        if (isset($map['RxPackets'])) {
            $model->rxPackets = $map['RxPackets'];
        }
        if (isset($map['RxErrors'])) {
            $model->rxErrors = $map['RxErrors'];
        }
        if (isset($map['RxDropped'])) {
            $model->rxDropped = $map['RxDropped'];
        }
        if (isset($map['TxBytes'])) {
            $model->txBytes = $map['TxBytes'];
        }
        if (isset($map['TxPackets'])) {
            $model->txPackets = $map['TxPackets'];
        }
        if (isset($map['TxDropped'])) {
            $model->txDropped = $map['TxDropped'];
        }
        if (isset($map['TxErrors'])) {
            $model->txErrors = $map['TxErrors'];
        }

        return $model;
    }
}
