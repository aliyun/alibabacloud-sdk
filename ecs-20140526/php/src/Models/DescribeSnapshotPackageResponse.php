<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotPackageResponse\snapshotPackages;
use AlibabaCloud\Tea\Model;

class DescribeSnapshotPackageResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.total
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description data.pageNo
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description data.pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description data.data
     *
     * @var snapshotPackages
     */
    public $snapshotPackages;
    protected $_name = [
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'snapshotPackages' => 'SnapshotPackages',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('snapshotPackages', $this->snapshotPackages, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->snapshotPackages) {
            $res['SnapshotPackages'] = null !== $this->snapshotPackages ? $this->snapshotPackages->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnapshotPackageResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SnapshotPackages'])) {
            $model->snapshotPackages = snapshotPackages::fromMap($map['SnapshotPackages']);
        }

        return $model;
    }
}
