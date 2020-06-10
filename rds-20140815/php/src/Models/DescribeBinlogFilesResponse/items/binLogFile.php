<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBinlogFilesResponse\items;

use AlibabaCloud\Tea\Model;

class binLogFile extends Model
{
    /**
     * @description fileSize
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description logBeginTime
     *
     * @var string
     */
    public $logBeginTime;

    /**
     * @description logEndTime
     *
     * @var string
     */
    public $logEndTime;

    /**
     * @description downloadLink
     *
     * @var string
     */
    public $downloadLink;

    /**
     * @description intranetDownloadLink
     *
     * @var string
     */
    public $intranetDownloadLink;

    /**
     * @description linkExpiredTime
     *
     * @var string
     */
    public $linkExpiredTime;

    /**
     * @description checksum
     *
     * @var string
     */
    public $checksum;

    /**
     * @description instanceID
     *
     * @var string
     */
    public $hostInstanceID;

    /**
     * @description logname
     *
     * @var string
     */
    public $logFileName;
    protected $_name = [
        'fileSize'             => 'FileSize',
        'logBeginTime'         => 'LogBeginTime',
        'logEndTime'           => 'LogEndTime',
        'downloadLink'         => 'DownloadLink',
        'intranetDownloadLink' => 'IntranetDownloadLink',
        'linkExpiredTime'      => 'LinkExpiredTime',
        'checksum'             => 'Checksum',
        'hostInstanceID'       => 'HostInstanceID',
        'logFileName'          => 'LogFileName',
    ];

    public function validate()
    {
        Model::validateRequired('fileSize', $this->fileSize, true);
        Model::validateRequired('logBeginTime', $this->logBeginTime, true);
        Model::validateRequired('logEndTime', $this->logEndTime, true);
        Model::validateRequired('downloadLink', $this->downloadLink, true);
        Model::validateRequired('intranetDownloadLink', $this->intranetDownloadLink, true);
        Model::validateRequired('linkExpiredTime', $this->linkExpiredTime, true);
        Model::validateRequired('checksum', $this->checksum, true);
        Model::validateRequired('hostInstanceID', $this->hostInstanceID, true);
        Model::validateRequired('logFileName', $this->logFileName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->logBeginTime) {
            $res['LogBeginTime'] = $this->logBeginTime;
        }
        if (null !== $this->logEndTime) {
            $res['LogEndTime'] = $this->logEndTime;
        }
        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }
        if (null !== $this->intranetDownloadLink) {
            $res['IntranetDownloadLink'] = $this->intranetDownloadLink;
        }
        if (null !== $this->linkExpiredTime) {
            $res['LinkExpiredTime'] = $this->linkExpiredTime;
        }
        if (null !== $this->checksum) {
            $res['Checksum'] = $this->checksum;
        }
        if (null !== $this->hostInstanceID) {
            $res['HostInstanceID'] = $this->hostInstanceID;
        }
        if (null !== $this->logFileName) {
            $res['LogFileName'] = $this->logFileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return binLogFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['LogBeginTime'])) {
            $model->logBeginTime = $map['LogBeginTime'];
        }
        if (isset($map['LogEndTime'])) {
            $model->logEndTime = $map['LogEndTime'];
        }
        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }
        if (isset($map['IntranetDownloadLink'])) {
            $model->intranetDownloadLink = $map['IntranetDownloadLink'];
        }
        if (isset($map['LinkExpiredTime'])) {
            $model->linkExpiredTime = $map['LinkExpiredTime'];
        }
        if (isset($map['Checksum'])) {
            $model->checksum = $map['Checksum'];
        }
        if (isset($map['HostInstanceID'])) {
            $model->hostInstanceID = $map['HostInstanceID'];
        }
        if (isset($map['LogFileName'])) {
            $model->logFileName = $map['LogFileName'];
        }

        return $model;
    }
}
