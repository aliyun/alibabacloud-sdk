<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogFilesResponse\items;

use AlibabaCloud\Tea\Model;

class logFile extends Model
{
    /**
     * @description fileName
     *
     * @var string
     */
    public $fileID;

    /**
     * @description status
     *
     * @var string
     */
    public $logStatus;

    /**
     * @description downloadLink
     *
     * @var string
     */
    public $logDownloadURL;

    /**
     * @description fileSize
     *
     * @var string
     */
    public $logSize;

    /**
     * @description startTime
     *
     * @var string
     */
    public $logStartTime;

    /**
     * @description endTime
     *
     * @var string
     */
    public $logEndTime;
    protected $_name = [
        'fileID'         => 'FileID',
        'logStatus'      => 'LogStatus',
        'logDownloadURL' => 'LogDownloadURL',
        'logSize'        => 'LogSize',
        'logStartTime'   => 'LogStartTime',
        'logEndTime'     => 'LogEndTime',
    ];

    public function validate()
    {
        Model::validateRequired('fileID', $this->fileID, true);
        Model::validateRequired('logStatus', $this->logStatus, true);
        Model::validateRequired('logDownloadURL', $this->logDownloadURL, true);
        Model::validateRequired('logSize', $this->logSize, true);
        Model::validateRequired('logStartTime', $this->logStartTime, true);
        Model::validateRequired('logEndTime', $this->logEndTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileID) {
            $res['FileID'] = $this->fileID;
        }
        if (null !== $this->logStatus) {
            $res['LogStatus'] = $this->logStatus;
        }
        if (null !== $this->logDownloadURL) {
            $res['LogDownloadURL'] = $this->logDownloadURL;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }
        if (null !== $this->logStartTime) {
            $res['LogStartTime'] = $this->logStartTime;
        }
        if (null !== $this->logEndTime) {
            $res['LogEndTime'] = $this->logEndTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileID'])) {
            $model->fileID = $map['FileID'];
        }
        if (isset($map['LogStatus'])) {
            $model->logStatus = $map['LogStatus'];
        }
        if (isset($map['LogDownloadURL'])) {
            $model->logDownloadURL = $map['LogDownloadURL'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }
        if (isset($map['LogStartTime'])) {
            $model->logStartTime = $map['LogStartTime'];
        }
        if (isset($map['LogEndTime'])) {
            $model->logEndTime = $map['LogEndTime'];
        }

        return $model;
    }
}
