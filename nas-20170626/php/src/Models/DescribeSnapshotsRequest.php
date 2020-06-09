<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnapshotsRequest extends Model {
    protected $_name = [
        'fileSystemType' => 'FileSystemType',
        'fileSystemId' => 'FileSystemId',
        'snapshotIds' => 'SnapshotIds',
        'snapshotName' => 'SnapshotName',
        'snapshotType' => 'SnapshotType',
        'status' => 'Status',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
    ];
    public function validate() {
        Model::validateRequired('fileSystemType', $this->fileSystemType, true);
    }
    public function toMap() {
        $res = [];
        $res['FileSystemType'] = $this->fileSystemType;
        $res['FileSystemId'] = $this->fileSystemId;
        $res['SnapshotIds'] = $this->snapshotIds;
        $res['SnapshotName'] = $this->snapshotName;
        $res['SnapshotType'] = $this->snapshotType;
        $res['Status'] = $this->status;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeSnapshotsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileSystemType'])){
            $model->fileSystemType = $map['FileSystemType'];
        }
        if(isset($map['FileSystemId'])){
            $model->fileSystemId = $map['FileSystemId'];
        }
        if(isset($map['SnapshotIds'])){
            $model->snapshotIds = $map['SnapshotIds'];
        }
        if(isset($map['SnapshotName'])){
            $model->snapshotName = $map['SnapshotName'];
        }
        if(isset($map['SnapshotType'])){
            $model->snapshotType = $map['SnapshotType'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        return $model;
    }
    /**
     * @description fileSystemType
     * @var string
     */
    public $fileSystemType;

    /**
     * @description volume
     * @var string
     */
    public $fileSystemId;

    /**
     * @description snapshotIds
     * @var string
     */
    public $snapshotIds;

    /**
     * @description snapshotName
     * @var string
     */
    public $snapshotName;

    /**
     * @description snapshotType
     * @var string
     */
    public $snapshotType;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

}
