<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskMonitorDataResponse\monitorData;

use AlibabaCloud\Tea\Model;

class diskMonitorData extends Model
{
    /**
     * @description resourceId
     *
     * @var string
     */
    public $diskId;

    /**
     * @description item2Value.IOPSRead
     *
     * @var int
     */
    public $IOPSRead;

    /**
     * @description item2Value.IOPSWrite
     *
     * @var int
     */
    public $IOPSWrite;

    /**
     * @description item2Value.IOPSTotal
     *
     * @var int
     */
    public $IOPSTotal;

    /**
     * @description item2Value.BPSRead
     *
     * @var int
     */
    public $BPSRead;

    /**
     * @description item2Value.BPSWrite
     *
     * @var int
     */
    public $BPSWrite;

    /**
     * @description item2Value.BPSTotal
     *
     * @var int
     */
    public $BPSTotal;

    /**
     * @description item2Value.LatencyRead
     *
     * @var int
     */
    public $latencyRead;

    /**
     * @description item2Value.LatencyWrite
     *
     * @var int
     */
    public $latencyWrite;

    /**
     * @description timeStamp
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'diskId'       => 'DiskId',
        'IOPSRead'     => 'IOPSRead',
        'IOPSWrite'    => 'IOPSWrite',
        'IOPSTotal'    => 'IOPSTotal',
        'BPSRead'      => 'BPSRead',
        'BPSWrite'     => 'BPSWrite',
        'BPSTotal'     => 'BPSTotal',
        'latencyRead'  => 'LatencyRead',
        'latencyWrite' => 'LatencyWrite',
        'timeStamp'    => 'TimeStamp',
    ];

    public function validate()
    {
        Model::validateRequired('diskId', $this->diskId, true);
        Model::validateRequired('IOPSRead', $this->IOPSRead, true);
        Model::validateRequired('IOPSWrite', $this->IOPSWrite, true);
        Model::validateRequired('IOPSTotal', $this->IOPSTotal, true);
        Model::validateRequired('BPSRead', $this->BPSRead, true);
        Model::validateRequired('BPSWrite', $this->BPSWrite, true);
        Model::validateRequired('BPSTotal', $this->BPSTotal, true);
        Model::validateRequired('latencyRead', $this->latencyRead, true);
        Model::validateRequired('latencyWrite', $this->latencyWrite, true);
        Model::validateRequired('timeStamp', $this->timeStamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->IOPSRead) {
            $res['IOPSRead'] = $this->IOPSRead;
        }
        if (null !== $this->IOPSWrite) {
            $res['IOPSWrite'] = $this->IOPSWrite;
        }
        if (null !== $this->IOPSTotal) {
            $res['IOPSTotal'] = $this->IOPSTotal;
        }
        if (null !== $this->BPSRead) {
            $res['BPSRead'] = $this->BPSRead;
        }
        if (null !== $this->BPSWrite) {
            $res['BPSWrite'] = $this->BPSWrite;
        }
        if (null !== $this->BPSTotal) {
            $res['BPSTotal'] = $this->BPSTotal;
        }
        if (null !== $this->latencyRead) {
            $res['LatencyRead'] = $this->latencyRead;
        }
        if (null !== $this->latencyWrite) {
            $res['LatencyWrite'] = $this->latencyWrite;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskMonitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['IOPSRead'])) {
            $model->IOPSRead = $map['IOPSRead'];
        }
        if (isset($map['IOPSWrite'])) {
            $model->IOPSWrite = $map['IOPSWrite'];
        }
        if (isset($map['IOPSTotal'])) {
            $model->IOPSTotal = $map['IOPSTotal'];
        }
        if (isset($map['BPSRead'])) {
            $model->BPSRead = $map['BPSRead'];
        }
        if (isset($map['BPSWrite'])) {
            $model->BPSWrite = $map['BPSWrite'];
        }
        if (isset($map['BPSTotal'])) {
            $model->BPSTotal = $map['BPSTotal'];
        }
        if (isset($map['LatencyRead'])) {
            $model->latencyRead = $map['LatencyRead'];
        }
        if (isset($map['LatencyWrite'])) {
            $model->latencyWrite = $map['LatencyWrite'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
