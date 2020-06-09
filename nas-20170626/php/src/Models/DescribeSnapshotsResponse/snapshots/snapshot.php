<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeSnapshotsResponse\snapshots;

use AlibabaCloud\Tea\Model;

class snapshot extends Model {
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'progress' => 'Progress',
        'remainTime' => 'RemainTime',
        'retentionDays' => 'RetentionDays',
        'snapshotId' => 'SnapshotId',
        'snapshotName' => 'SnapshotName',
        'sourceFileSystemId' => 'SourceFileSystemId',
        'sourceFileSystemSize' => 'SourceFileSystemSize',
        'status' => 'Status',
        'encryptType' => 'EncryptType',
        'sourceFileSystemVersion' => 'SourceFileSystemVersion',
    ];
    public function validate() {
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
    public function toMap() {
        $res = [];
        $res['CreateTime'] = $this->createTime;
        $res['Description'] = $this->description;
        $res['Progress'] = $this->progress;
        $res['RemainTime'] = $this->remainTime;
        $res['RetentionDays'] = $this->retentionDays;
        $res['SnapshotId'] = $this->snapshotId;
        $res['SnapshotName'] = $this->snapshotName;
        $res['SourceFileSystemId'] = $this->sourceFileSystemId;
        $res['SourceFileSystemSize'] = $this->sourceFileSystemSize;
        $res['Status'] = $this->status;
        $res['EncryptType'] = $this->encryptType;
        $res['SourceFileSystemVersion'] = $this->sourceFileSystemVersion;
        return $res;
    }
    /**
     * @param array $map
     * @return snapshot
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['Progress'])){
            $model->progress = $map['Progress'];
        }
        if(isset($map['RemainTime'])){
            $model->remainTime = $map['RemainTime'];
        }
        if(isset($map['RetentionDays'])){
            $model->retentionDays = $map['RetentionDays'];
        }
        if(isset($map['SnapshotId'])){
            $model->snapshotId = $map['SnapshotId'];
        }
        if(isset($map['SnapshotName'])){
            $model->snapshotName = $map['SnapshotName'];
        }
        if(isset($map['SourceFileSystemId'])){
            $model->sourceFileSystemId = $map['SourceFileSystemId'];
        }
        if(isset($map['SourceFileSystemSize'])){
            $model->sourceFileSystemSize = $map['SourceFileSystemSize'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['EncryptType'])){
            $model->encryptType = $map['EncryptType'];
        }
        if(isset($map['SourceFileSystemVersion'])){
            $model->sourceFileSystemVersion = $map['SourceFileSystemVersion'];
        }
        return $model;
    }
    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description progress
     * @var string
     */
    public $progress;

    /**
     * @description remainTime
     * @var integer
     */
    public $remainTime;

    /**
     * @description retentionDays
     * @var integer
     */
    public $retentionDays;

    /**
     * @description snapshotId
     * @var string
     */
    public $snapshotId;

    /**
     * @description snapshotName
     * @var string
     */
    public $snapshotName;

    /**
     * @description sourceFileSystemId
     * @var string
     */
    public $sourceFileSystemId;

    /**
     * @description sourceFileSystemSize
     * @var integer
     */
    public $sourceFileSystemSize;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description encryptType
     * @var integer
     */
    public $encryptType;

    /**
     * @description sourceFileSystemVersion
     * @var string
     */
    public $sourceFileSystemVersion;

}
