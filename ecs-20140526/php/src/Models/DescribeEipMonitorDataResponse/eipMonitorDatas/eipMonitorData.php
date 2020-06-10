<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipMonitorDataResponse\eipMonitorDatas;

use AlibabaCloud\Tea\Model;

class eipMonitorData extends Model
{
    /**
     * @description eipRx
     *
     * @var int
     */
    public $eipRX;

    /**
     * @description eipTx
     *
     * @var int
     */
    public $eipTX;

    /**
     * @description eipFlow
     *
     * @var int
     */
    public $eipFlow;

    /**
     * @description eipBandwidth
     *
     * @var int
     */
    public $eipBandwidth;

    /**
     * @description eipPackets
     *
     * @var int
     */
    public $eipPackets;

    /**
     * @description timeStamp
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'eipRX'        => 'EipRX',
        'eipTX'        => 'EipTX',
        'eipFlow'      => 'EipFlow',
        'eipBandwidth' => 'EipBandwidth',
        'eipPackets'   => 'EipPackets',
        'timeStamp'    => 'TimeStamp',
    ];

    public function validate()
    {
        Model::validateRequired('eipRX', $this->eipRX, true);
        Model::validateRequired('eipTX', $this->eipTX, true);
        Model::validateRequired('eipFlow', $this->eipFlow, true);
        Model::validateRequired('eipBandwidth', $this->eipBandwidth, true);
        Model::validateRequired('eipPackets', $this->eipPackets, true);
        Model::validateRequired('timeStamp', $this->timeStamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipRX) {
            $res['EipRX'] = $this->eipRX;
        }
        if (null !== $this->eipTX) {
            $res['EipTX'] = $this->eipTX;
        }
        if (null !== $this->eipFlow) {
            $res['EipFlow'] = $this->eipFlow;
        }
        if (null !== $this->eipBandwidth) {
            $res['EipBandwidth'] = $this->eipBandwidth;
        }
        if (null !== $this->eipPackets) {
            $res['EipPackets'] = $this->eipPackets;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipMonitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipRX'])) {
            $model->eipRX = $map['EipRX'];
        }
        if (isset($map['EipTX'])) {
            $model->eipTX = $map['EipTX'];
        }
        if (isset($map['EipFlow'])) {
            $model->eipFlow = $map['EipFlow'];
        }
        if (isset($map['EipBandwidth'])) {
            $model->eipBandwidth = $map['EipBandwidth'];
        }
        if (isset($map['EipPackets'])) {
            $model->eipPackets = $map['EipPackets'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
