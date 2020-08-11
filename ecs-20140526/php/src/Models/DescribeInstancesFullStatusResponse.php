<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet;
use AlibabaCloud\Tea\Model;

class DescribeInstancesFullStatusResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var instanceFullStatusSet
     */
    public $instanceFullStatusSet;
    protected $_name = [
        'requestId'             => 'RequestId',
        'totalCount'            => 'TotalCount',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'instanceFullStatusSet' => 'InstanceFullStatusSet',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('instanceFullStatusSet', $this->instanceFullStatusSet, true);
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
        if (null !== $this->instanceFullStatusSet) {
            $res['InstanceFullStatusSet'] = null !== $this->instanceFullStatusSet ? $this->instanceFullStatusSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancesFullStatusResponse
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
        if (isset($map['InstanceFullStatusSet'])) {
            $model->instanceFullStatusSet = instanceFullStatusSet::fromMap($map['InstanceFullStatusSet']);
        }

        return $model;
    }
}
