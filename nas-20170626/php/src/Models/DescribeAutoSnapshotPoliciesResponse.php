<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotPoliciesResponse\autoSnapshotPolicies;
use AlibabaCloud\Tea\Model;

class DescribeAutoSnapshotPoliciesResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description totalCount
     *
     * @var int
     */
    public $totalCount;

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

    /**
     * @description data
     *
     * @var autoSnapshotPolicies
     */
    public $autoSnapshotPolicies;
    protected $_name = [
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
        'pageSize'             => 'PageSize',
        'pageNumber'           => 'PageNumber',
        'autoSnapshotPolicies' => 'AutoSnapshotPolicies',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('autoSnapshotPolicies', $this->autoSnapshotPolicies, true);
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->autoSnapshotPolicies) {
            $res['AutoSnapshotPolicies'] = null !== $this->autoSnapshotPolicies ? $this->autoSnapshotPolicies->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoSnapshotPoliciesResponse
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['AutoSnapshotPolicies'])) {
            $model->autoSnapshotPolicies = autoSnapshotPolicies::fromMap($map['AutoSnapshotPolicies']);
        }

        return $model;
    }
}
