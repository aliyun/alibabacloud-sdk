<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupLogsResponse\items;

use AlibabaCloud\Tea\Model;

class backupLog extends Model
{
    /**
     * @description backupLogId
     *
     * @var string
     */
    public $backupLogId;

    /**
     * @description logName
     *
     * @var string
     */
    public $backupLogName;

    /**
     * @description logStartTime
     *
     * @var string
     */
    public $backupLogStartTime;

    /**
     * @description logEndTime
     *
     * @var string
     */
    public $backupLogEndTime;

    /**
     * @description backupLogSize
     *
     * @var string
     */
    public $backupLogSize;

    /**
     * @description logDownloadURL
     *
     * @var string
     */
    public $downloadLink;

    /**
     * @description logIntranetDownloadURL
     *
     * @var string
     */
    public $intranetDownloadLink;

    /**
     * @description urlExpireTime
     *
     * @var string
     */
    public $linkExpiredTime;
    protected $_name = [
        'backupLogId'          => 'BackupLogId',
        'backupLogName'        => 'BackupLogName',
        'backupLogStartTime'   => 'BackupLogStartTime',
        'backupLogEndTime'     => 'BackupLogEndTime',
        'backupLogSize'        => 'BackupLogSize',
        'downloadLink'         => 'DownloadLink',
        'intranetDownloadLink' => 'IntranetDownloadLink',
        'linkExpiredTime'      => 'LinkExpiredTime',
    ];

    public function validate()
    {
        Model::validateRequired('backupLogId', $this->backupLogId, true);
        Model::validateRequired('backupLogName', $this->backupLogName, true);
        Model::validateRequired('backupLogStartTime', $this->backupLogStartTime, true);
        Model::validateRequired('backupLogEndTime', $this->backupLogEndTime, true);
        Model::validateRequired('backupLogSize', $this->backupLogSize, true);
        Model::validateRequired('downloadLink', $this->downloadLink, true);
        Model::validateRequired('intranetDownloadLink', $this->intranetDownloadLink, true);
        Model::validateRequired('linkExpiredTime', $this->linkExpiredTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupLogId) {
            $res['BackupLogId'] = $this->backupLogId;
        }
        if (null !== $this->backupLogName) {
            $res['BackupLogName'] = $this->backupLogName;
        }
        if (null !== $this->backupLogStartTime) {
            $res['BackupLogStartTime'] = $this->backupLogStartTime;
        }
        if (null !== $this->backupLogEndTime) {
            $res['BackupLogEndTime'] = $this->backupLogEndTime;
        }
        if (null !== $this->backupLogSize) {
            $res['BackupLogSize'] = $this->backupLogSize;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupLogId'])) {
            $model->backupLogId = $map['BackupLogId'];
        }
        if (isset($map['BackupLogName'])) {
            $model->backupLogName = $map['BackupLogName'];
        }
        if (isset($map['BackupLogStartTime'])) {
            $model->backupLogStartTime = $map['BackupLogStartTime'];
        }
        if (isset($map['BackupLogEndTime'])) {
            $model->backupLogEndTime = $map['BackupLogEndTime'];
        }
        if (isset($map['BackupLogSize'])) {
            $model->backupLogSize = $map['BackupLogSize'];
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

        return $model;
    }
}
