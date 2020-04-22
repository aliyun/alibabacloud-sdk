<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\SDK\ECI\V20180808\ECI\networkStats\tcp;
use AlibabaCloud\SDK\ECI\V20180808\ECI\networkStats\tcp6;
use AlibabaCloud\SDK\ECI\V20180808\ECI\networkStats\udp;
use AlibabaCloud\SDK\ECI\V20180808\ECI\networkStats\udp6;
use AlibabaCloud\Tea\Model;

class networkStats extends Model
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

    /**
     * @description interfaceStats
     *
     * @var array
     */
    public $interfaceStats;

    /**
     * @description tcp
     *
     * @var networkStats.tcp
     */
    public $tcp;

    /**
     * @description tcp6
     *
     * @var networkStats.tcp6
     */
    public $tcp6;

    /**
     * @description udp
     *
     * @var networkStats.udp
     */
    public $udp;

    /**
     * @description udp6
     *
     * @var networkStats.udp6
     */
    public $udp6;
    protected $_name = [
        'name'           => 'Name',
        'rxBytes'        => 'RxBytes',
        'rxPackets'      => 'RxPackets',
        'rxErrors'       => 'RxErrors',
        'rxDropped'      => 'RxDropped',
        'txBytes'        => 'TxBytes',
        'txPackets'      => 'TxPackets',
        'txDropped'      => 'TxDropped',
        'txErrors'       => 'TxErrors',
        'interfaceStats' => 'InterfaceStats',
        'tcp'            => 'Tcp',
        'tcp6'           => 'Tcp6',
        'udp'            => 'Udp',
        'udp6'           => 'Udp6',
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
        Model::validateRequired('interfaceStats', $this->interfaceStats, true);
        Model::validateRequired('tcp', $this->tcp, true);
        Model::validateRequired('tcp6', $this->tcp6, true);
        Model::validateRequired('udp', $this->udp, true);
        Model::validateRequired('udp6', $this->udp6, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['Name']           = $this->name;
        $res['RxBytes']        = $this->rxBytes;
        $res['RxPackets']      = $this->rxPackets;
        $res['RxErrors']       = $this->rxErrors;
        $res['RxDropped']      = $this->rxDropped;
        $res['TxBytes']        = $this->txBytes;
        $res['TxPackets']      = $this->txPackets;
        $res['TxDropped']      = $this->txDropped;
        $res['TxErrors']       = $this->txErrors;
        $res['InterfaceStats'] = [];
        if (null !== $this->interfaceStats && \is_array($this->interfaceStats)) {
            $n = 0;
            foreach ($this->interfaceStats as $item) {
                $res['InterfaceStats'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Tcp']  = null !== $this->tcp ? $this->tcp->toMap() : null;
        $res['Tcp6'] = null !== $this->tcp6 ? $this->tcp6->toMap() : null;
        $res['Udp']  = null !== $this->udp ? $this->udp->toMap() : null;
        $res['Udp6'] = null !== $this->udp6 ? $this->udp6->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkStats
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
        if (isset($map['InterfaceStats'])) {
            if (!empty($map['InterfaceStats'])) {
                $model->interfaceStats = [];
                $n                     = 0;
                foreach ($map['InterfaceStats'] as $item) {
                    $model->interfaceStats[$n++] = null !== $item ? DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\networkStats\interfaceStats::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tcp'])) {
            $model->tcp = networkStats\tcp::fromMap($map['Tcp']);
        }
        if (isset($map['Tcp6'])) {
            $model->tcp6 = networkStats\tcp6::fromMap($map['Tcp6']);
        }
        if (isset($map['Udp'])) {
            $model->udp = networkStats\udp::fromMap($map['Udp']);
        }
        if (isset($map['Udp6'])) {
            $model->udp6 = networkStats\udp6::fromMap($map['Udp6']);
        }

        return $model;
    }
}
