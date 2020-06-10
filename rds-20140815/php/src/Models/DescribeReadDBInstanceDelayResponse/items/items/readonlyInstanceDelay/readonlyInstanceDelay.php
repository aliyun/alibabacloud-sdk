<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse\items\items\readonlyInstanceDelay;

use AlibabaCloud\Tea\Model;

class readonlyInstanceDelay extends Model
{
    /**
     * @description replayLatency
     *
     * @var string
     */
    public $replayLatency;

    /**
     * @description flushLag
     *
     * @var string
     */
    public $flushLag;

    /**
     * @description flushLatency
     *
     * @var string
     */
    public $flushLatency;

    /**
     * @description sendLatency
     *
     * @var string
     */
    public $sendLatency;

    /**
     * @description writeLag
     *
     * @var string
     */
    public $writeLag;

    /**
     * @description replayLag
     *
     * @var string
     */
    public $replayLag;

    /**
     * @description writeLatency
     *
     * @var string
     */
    public $writeLatency;

    /**
     * @description readDBInstanceName
     *
     * @var string
     */
    public $readDBInstanceName;
    protected $_name = [
        'replayLatency'      => 'ReplayLatency',
        'flushLag'           => 'FlushLag',
        'flushLatency'       => 'FlushLatency',
        'sendLatency'        => 'SendLatency',
        'writeLag'           => 'WriteLag',
        'replayLag'          => 'ReplayLag',
        'writeLatency'       => 'WriteLatency',
        'readDBInstanceName' => 'ReadDBInstanceName',
    ];

    public function validate()
    {
        Model::validateRequired('replayLatency', $this->replayLatency, true);
        Model::validateRequired('flushLag', $this->flushLag, true);
        Model::validateRequired('flushLatency', $this->flushLatency, true);
        Model::validateRequired('sendLatency', $this->sendLatency, true);
        Model::validateRequired('writeLag', $this->writeLag, true);
        Model::validateRequired('replayLag', $this->replayLag, true);
        Model::validateRequired('writeLatency', $this->writeLatency, true);
        Model::validateRequired('readDBInstanceName', $this->readDBInstanceName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->replayLatency) {
            $res['ReplayLatency'] = $this->replayLatency;
        }
        if (null !== $this->flushLag) {
            $res['FlushLag'] = $this->flushLag;
        }
        if (null !== $this->flushLatency) {
            $res['FlushLatency'] = $this->flushLatency;
        }
        if (null !== $this->sendLatency) {
            $res['SendLatency'] = $this->sendLatency;
        }
        if (null !== $this->writeLag) {
            $res['WriteLag'] = $this->writeLag;
        }
        if (null !== $this->replayLag) {
            $res['ReplayLag'] = $this->replayLag;
        }
        if (null !== $this->writeLatency) {
            $res['WriteLatency'] = $this->writeLatency;
        }
        if (null !== $this->readDBInstanceName) {
            $res['ReadDBInstanceName'] = $this->readDBInstanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return readonlyInstanceDelay
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReplayLatency'])) {
            $model->replayLatency = $map['ReplayLatency'];
        }
        if (isset($map['FlushLag'])) {
            $model->flushLag = $map['FlushLag'];
        }
        if (isset($map['FlushLatency'])) {
            $model->flushLatency = $map['FlushLatency'];
        }
        if (isset($map['SendLatency'])) {
            $model->sendLatency = $map['SendLatency'];
        }
        if (isset($map['WriteLag'])) {
            $model->writeLag = $map['WriteLag'];
        }
        if (isset($map['ReplayLag'])) {
            $model->replayLag = $map['ReplayLag'];
        }
        if (isset($map['WriteLatency'])) {
            $model->writeLatency = $map['WriteLatency'];
        }
        if (isset($map['ReadDBInstanceName'])) {
            $model->readDBInstanceName = $map['ReadDBInstanceName'];
        }

        return $model;
    }
}
