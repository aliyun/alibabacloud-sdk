<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\networkStats;

use AlibabaCloud\Tea\Model;

class udp extends Model
{
    /**
     * @description listen
     *
     * @var int
     */
    public $listen;

    /**
     * @description dropped
     *
     * @var int
     */
    public $dropped;

    /**
     * @description rxQueued
     *
     * @var int
     */
    public $rxQueued;

    /**
     * @description txQueued
     *
     * @var int
     */
    public $txQueued;
    protected $_name = [
        'listen'   => 'Listen',
        'dropped'  => 'Dropped',
        'rxQueued' => 'RxQueued',
        'txQueued' => 'TxQueued',
    ];

    public function validate()
    {
        Model::validateRequired('listen', $this->listen, true);
        Model::validateRequired('dropped', $this->dropped, true);
        Model::validateRequired('rxQueued', $this->rxQueued, true);
        Model::validateRequired('txQueued', $this->txQueued, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listen) {
            $res['Listen'] = $this->listen;
        }
        if (null !== $this->dropped) {
            $res['Dropped'] = $this->dropped;
        }
        if (null !== $this->rxQueued) {
            $res['RxQueued'] = $this->rxQueued;
        }
        if (null !== $this->txQueued) {
            $res['TxQueued'] = $this->txQueued;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return udp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Listen'])) {
            $model->listen = $map['Listen'];
        }
        if (isset($map['Dropped'])) {
            $model->dropped = $map['Dropped'];
        }
        if (isset($map['RxQueued'])) {
            $model->rxQueued = $map['RxQueued'];
        }
        if (isset($map['TxQueued'])) {
            $model->txQueued = $map['TxQueued'];
        }

        return $model;
    }
}
