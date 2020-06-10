<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnapshotsRequest extends Model
{
    /**
     * @description fileSystemType
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description volume
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description snapshotIds
     *
     * @var string
     */
    public $snapshotIds;

    /**
     * @description snapshotName
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description snapshotType
     *
     * @var string
     */
    public $snapshotType;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'fileSystemType' => 'FileSystemType',
        'fileSystemId'   => 'FileSystemId',
        'snapshotIds'    => 'SnapshotIds',
        'snapshotName'   => 'SnapshotName',
        'snapshotType'   => 'SnapshotType',
        'status'         => 'Status',
        'pageSize'       => 'PageSize',
        'pageNumber'     => 'PageNumber',
    ];

    public function validate()
    {
        Model::validateRequired('fileSystemType', $this->fileSystemType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->snapshotIds) {
            $res['SnapshotIds'] = $this->snapshotIds;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->snapshotType) {
            $res['SnapshotType'] = $this->snapshotType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnapshotsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['SnapshotIds'])) {
            $model->snapshotIds = $map['SnapshotIds'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SnapshotType'])) {
            $model->snapshotType = $map['SnapshotType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
