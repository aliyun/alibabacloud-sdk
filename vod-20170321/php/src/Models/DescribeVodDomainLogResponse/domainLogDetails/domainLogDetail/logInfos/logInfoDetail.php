<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponse\domainLogDetails\domainLogDetail\logInfos;

use AlibabaCloud\Tea\Model;

class logInfoDetail extends Model {
    protected $_name = [
        'logName' => 'LogName',
        'logPath' => 'LogPath',
        'logSize' => 'LogSize',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
    ];
    public function validate() {
        Model::validateRequired('logName', $this->logName, true);
        Model::validateRequired('logPath', $this->logPath, true);
        Model::validateRequired('logSize', $this->logSize, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }
    public function toMap() {
        $res = [];
        $res['LogName'] = $this->logName;
        $res['LogPath'] = $this->logPath;
        $res['LogSize'] = $this->logSize;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        return $res;
    }
    /**
     * @param array $map
     * @return logInfoDetail
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['LogName'])){
            $model->logName = $map['LogName'];
        }
        if(isset($map['LogPath'])){
            $model->logPath = $map['LogPath'];
        }
        if(isset($map['LogSize'])){
            $model->logSize = $map['LogSize'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        return $model;
    }
    /**
     * @description logName
     * @var string
     */
    public $logName;

    /**
     * @description logPath
     * @var string
     */
    public $logPath;

    /**
     * @description logSize
     * @var integer
     */
    public $logSize;

    /**
     * @description logDate
     * @var string
     */
    public $startTime;

    /**
     * @description logEndDate
     * @var string
     */
    public $endTime;

}
