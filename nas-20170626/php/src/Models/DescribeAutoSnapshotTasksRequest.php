<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoSnapshotTasksRequest extends Model
{
    /**
     * @var string
     */
    public $fileSystemIds;

    /**
     * @var string
     */
    public $autoSnapshotPolicyIds;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'fileSystemIds'         => 'FileSystemIds',
        'autoSnapshotPolicyIds' => 'AutoSnapshotPolicyIds',
        'fileSystemType'        => 'FileSystemType',
        'pageSize'              => 'PageSize',
        'pageNumber'            => 'PageNumber',
    ];

    public function validate()
    {
        Model::validateRequired('fileSystemType', $this->fileSystemType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemIds) {
            $res['FileSystemIds'] = $this->fileSystemIds;
        }
        if (null !== $this->autoSnapshotPolicyIds) {
            $res['AutoSnapshotPolicyIds'] = $this->autoSnapshotPolicyIds;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
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
     * @return DescribeAutoSnapshotTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemIds'])) {
            $model->fileSystemIds = $map['FileSystemIds'];
        }
        if (isset($map['AutoSnapshotPolicyIds'])) {
            $model->autoSnapshotPolicyIds = $map['AutoSnapshotPolicyIds'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
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
