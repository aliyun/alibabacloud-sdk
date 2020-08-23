<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSnapshotsResponse\snapshots;

use AlibabaCloud\Tea\Model;

class snapshot extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var int
     */
    public $remainTime;

    /**
     * @var int
     */
    public $retentionDays;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $snapshotName;

    /**
     * @var string
     */
    public $sourceFileSystemId;

    /**
     * @var int
     */
    public $sourceFileSystemSize;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $encryptType;

    /**
     * @var string
     */
    public $sourceFileSystemVersion;
    protected $_name = [
        'createTime'              => 'CreateTime',
        'description'             => 'Description',
        'progress'                => 'Progress',
        'remainTime'              => 'RemainTime',
        'retentionDays'           => 'RetentionDays',
        'snapshotId'              => 'SnapshotId',
        'snapshotName'            => 'SnapshotName',
        'sourceFileSystemId'      => 'SourceFileSystemId',
        'sourceFileSystemSize'    => 'SourceFileSystemSize',
        'status'                  => 'Status',
        'encryptType'             => 'EncryptType',
        'sourceFileSystemVersion' => 'SourceFileSystemVersion',
    ];

    public function validate()
    {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('progress', $this->progress, true);
        Model::validateRequired('remainTime', $this->remainTime, true);
        Model::validateRequired('retentionDays', $this->retentionDays, true);
        Model::validateRequired('snapshotId', $this->snapshotId, true);
        Model::validateRequired('snapshotName', $this->snapshotName, true);
        Model::validateRequired('sourceFileSystemId', $this->sourceFileSystemId, true);
        Model::validateRequired('sourceFileSystemSize', $this->sourceFileSystemSize, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('encryptType', $this->encryptType, true);
        Model::validateRequired('sourceFileSystemVersion', $this->sourceFileSystemVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->sourceFileSystemId) {
            $res['SourceFileSystemId'] = $this->sourceFileSystemId;
        }
        if (null !== $this->sourceFileSystemSize) {
            $res['SourceFileSystemSize'] = $this->sourceFileSystemSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->sourceFileSystemVersion) {
            $res['SourceFileSystemVersion'] = $this->sourceFileSystemVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SourceFileSystemId'])) {
            $model->sourceFileSystemId = $map['SourceFileSystemId'];
        }
        if (isset($map['SourceFileSystemSize'])) {
            $model->sourceFileSystemSize = $map['SourceFileSystemSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['SourceFileSystemVersion'])) {
            $model->sourceFileSystemVersion = $map['SourceFileSystemVersion'];
        }

        return $model;
    }
}
