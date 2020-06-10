<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponse\domainLogDetails\domainLogDetail\logInfos;

use AlibabaCloud\Tea\Model;

class logInfoDetail extends Model
{
    /**
     * @description logName
     *
     * @var string
     */
    public $logName;

    /**
     * @description logPath
     *
     * @var string
     */
    public $logPath;

    /**
     * @description logSize
     *
     * @var int
     */
    public $logSize;

    /**
     * @description logDate
     *
     * @var string
     */
    public $startTime;

    /**
     * @description logEndDate
     *
     * @var string
     */
    public $endTime;
    protected $_name = [
        'logName'   => 'LogName',
        'logPath'   => 'LogPath',
        'logSize'   => 'LogSize',
        'startTime' => 'StartTime',
        'endTime'   => 'EndTime',
    ];

    public function validate()
    {
        Model::validateRequired('logName', $this->logName, true);
        Model::validateRequired('logPath', $this->logPath, true);
        Model::validateRequired('logSize', $this->logSize, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logName) {
            $res['LogName'] = $this->logName;
        }
        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logInfoDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogName'])) {
            $model->logName = $map['LogName'];
        }
        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
