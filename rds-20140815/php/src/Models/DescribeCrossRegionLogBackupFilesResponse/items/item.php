<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionLogBackupFilesResponse\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description description: 跨地域日志备份文件ID。;
     *
     * @var int
     */
    public $crossLogBackupId;

    /**
     * @description description: 跨地域备份目的地域ID。;
     *
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @description description: 跨地域日志备份文件大小，单位：Byte。;
     *
     * @var int
     */
    public $crossLogBackupSize;

    /**
     * @description description: 跨地域日志备份文件记录的开始时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。;
     *
     * @var string
     */
    public $logBeginTime;

    /**
     * @description description: 跨地域日志备份文件记录的结束时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。;
     *
     * @var string
     */
    public $logEndTime;

    /**
     * @description description: 跨地域日志备份外网下载链接。;
     *
     * @var string
     */
    public $crossDownloadLink;

    /**
     * @description description: 跨地域日志备份内网下载链接。;
     *
     * @var string
     */
    public $crossIntranetDownloadLink;

    /**
     * @description description: 下载链接过期时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。;
     *
     * @var string
     */
    public $linkExpiredTime;

    /**
     * @description description: 跨地域日志备份文件名称。;
     *
     * @var string
     */
    public $logFileName;

    /**
     * @description description: 实例编号。;
     *
     * @var int
     */
    public $instanceId;
    protected $_name = [
        'crossLogBackupId'          => 'CrossLogBackupId',
        'crossBackupRegion'         => 'CrossBackupRegion',
        'crossLogBackupSize'        => 'CrossLogBackupSize',
        'logBeginTime'              => 'LogBeginTime',
        'logEndTime'                => 'LogEndTime',
        'crossDownloadLink'         => 'CrossDownloadLink',
        'crossIntranetDownloadLink' => 'CrossIntranetDownloadLink',
        'linkExpiredTime'           => 'LinkExpiredTime',
        'logFileName'               => 'LogFileName',
        'instanceId'                => 'InstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('crossLogBackupId', $this->crossLogBackupId, true);
        Model::validateRequired('crossBackupRegion', $this->crossBackupRegion, true);
        Model::validateRequired('crossLogBackupSize', $this->crossLogBackupSize, true);
        Model::validateRequired('logBeginTime', $this->logBeginTime, true);
        Model::validateRequired('logEndTime', $this->logEndTime, true);
        Model::validateRequired('crossDownloadLink', $this->crossDownloadLink, true);
        Model::validateRequired('crossIntranetDownloadLink', $this->crossIntranetDownloadLink, true);
        Model::validateRequired('linkExpiredTime', $this->linkExpiredTime, true);
        Model::validateRequired('logFileName', $this->logFileName, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crossLogBackupId) {
            $res['CrossLogBackupId'] = $this->crossLogBackupId;
        }
        if (null !== $this->crossBackupRegion) {
            $res['CrossBackupRegion'] = $this->crossBackupRegion;
        }
        if (null !== $this->crossLogBackupSize) {
            $res['CrossLogBackupSize'] = $this->crossLogBackupSize;
        }
        if (null !== $this->logBeginTime) {
            $res['LogBeginTime'] = $this->logBeginTime;
        }
        if (null !== $this->logEndTime) {
            $res['LogEndTime'] = $this->logEndTime;
        }
        if (null !== $this->crossDownloadLink) {
            $res['CrossDownloadLink'] = $this->crossDownloadLink;
        }
        if (null !== $this->crossIntranetDownloadLink) {
            $res['CrossIntranetDownloadLink'] = $this->crossIntranetDownloadLink;
        }
        if (null !== $this->linkExpiredTime) {
            $res['LinkExpiredTime'] = $this->linkExpiredTime;
        }
        if (null !== $this->logFileName) {
            $res['LogFileName'] = $this->logFileName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrossLogBackupId'])) {
            $model->crossLogBackupId = $map['CrossLogBackupId'];
        }
        if (isset($map['CrossBackupRegion'])) {
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if (isset($map['CrossLogBackupSize'])) {
            $model->crossLogBackupSize = $map['CrossLogBackupSize'];
        }
        if (isset($map['LogBeginTime'])) {
            $model->logBeginTime = $map['LogBeginTime'];
        }
        if (isset($map['LogEndTime'])) {
            $model->logEndTime = $map['LogEndTime'];
        }
        if (isset($map['CrossDownloadLink'])) {
            $model->crossDownloadLink = $map['CrossDownloadLink'];
        }
        if (isset($map['CrossIntranetDownloadLink'])) {
            $model->crossIntranetDownloadLink = $map['CrossIntranetDownloadLink'];
        }
        if (isset($map['LinkExpiredTime'])) {
            $model->linkExpiredTime = $map['LinkExpiredTime'];
        }
        if (isset($map['LogFileName'])) {
            $model->logFileName = $map['LogFileName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
