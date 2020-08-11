<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponse\physicalConnectionSet;
use AlibabaCloud\Tea\Model;

class DescribePhysicalConnectionsResponse extends Model
{
    /**
     * @description description: The ID of the request ;
     *
     * @var string
     */
    public $requestId;

    /**
     * @description description: The current page number ;
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description description: The number of items per page;
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description description: The number of items in a list;
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description description: Details of physical connections
     *
     * @var physicalConnectionSet
     */
    public $physicalConnectionSet;
    protected $_name = [
        'requestId'             => 'RequestId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'totalCount'            => 'TotalCount',
        'physicalConnectionSet' => 'PhysicalConnectionSet',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('physicalConnectionSet', $this->physicalConnectionSet, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->physicalConnectionSet) {
            $res['PhysicalConnectionSet'] = null !== $this->physicalConnectionSet ? $this->physicalConnectionSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePhysicalConnectionsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PhysicalConnectionSet'])) {
            $model->physicalConnectionSet = physicalConnectionSet::fromMap($map['PhysicalConnectionSet']);
        }

        return $model;
    }
}
