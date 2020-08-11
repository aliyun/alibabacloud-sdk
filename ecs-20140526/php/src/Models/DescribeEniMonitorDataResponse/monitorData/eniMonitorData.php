<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEniMonitorDataResponse\monitorData;

use AlibabaCloud\Tea\Model;

class eniMonitorData extends Model
{
    /**
     * @var string
     */
    public $eniId;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $packetTx;

    /**
     * @var string
     */
    public $packetRx;

    /**
     * @var string
     */
    public $intranetTx;

    /**
     * @var string
     */
    public $intranetRx;

    /**
     * @var string
     */
    public $dropPacketTx;

    /**
     * @var string
     */
    public $dropPacketRx;
    protected $_name = [
        'eniId'        => 'EniId',
        'timeStamp'    => 'TimeStamp',
        'packetTx'     => 'PacketTx',
        'packetRx'     => 'PacketRx',
        'intranetTx'   => 'IntranetTx',
        'intranetRx'   => 'IntranetRx',
        'dropPacketTx' => 'DropPacketTx',
        'dropPacketRx' => 'DropPacketRx',
    ];

    public function validate()
    {
        Model::validateRequired('eniId', $this->eniId, true);
        Model::validateRequired('timeStamp', $this->timeStamp, true);
        Model::validateRequired('packetTx', $this->packetTx, true);
        Model::validateRequired('packetRx', $this->packetRx, true);
        Model::validateRequired('intranetTx', $this->intranetTx, true);
        Model::validateRequired('intranetRx', $this->intranetRx, true);
        Model::validateRequired('dropPacketTx', $this->dropPacketTx, true);
        Model::validateRequired('dropPacketRx', $this->dropPacketRx, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eniId) {
            $res['EniId'] = $this->eniId;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->packetTx) {
            $res['PacketTx'] = $this->packetTx;
        }
        if (null !== $this->packetRx) {
            $res['PacketRx'] = $this->packetRx;
        }
        if (null !== $this->intranetTx) {
            $res['IntranetTx'] = $this->intranetTx;
        }
        if (null !== $this->intranetRx) {
            $res['IntranetRx'] = $this->intranetRx;
        }
        if (null !== $this->dropPacketTx) {
            $res['DropPacketTx'] = $this->dropPacketTx;
        }
        if (null !== $this->dropPacketRx) {
            $res['DropPacketRx'] = $this->dropPacketRx;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eniMonitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EniId'])) {
            $model->eniId = $map['EniId'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['PacketTx'])) {
            $model->packetTx = $map['PacketTx'];
        }
        if (isset($map['PacketRx'])) {
            $model->packetRx = $map['PacketRx'];
        }
        if (isset($map['IntranetTx'])) {
            $model->intranetTx = $map['IntranetTx'];
        }
        if (isset($map['IntranetRx'])) {
            $model->intranetRx = $map['IntranetRx'];
        }
        if (isset($map['DropPacketTx'])) {
            $model->dropPacketTx = $map['DropPacketTx'];
        }
        if (isset($map['DropPacketRx'])) {
            $model->dropPacketRx = $map['DropPacketRx'];
        }

        return $model;
    }
}
