<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponse\virtualBorderRouterForPhysicalConnectionSet;
use AlibabaCloud\Tea\Model;

class DescribeVirtualBorderRoutersForPhysicalConnectionResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.pageNumber
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
     * @description data.totalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description data.virtualBorderRouterForPhysicalConnectionSet
     *
     * @var virtualBorderRouterForPhysicalConnectionSet
     */
    public $virtualBorderRouterForPhysicalConnectionSet;
    protected $_name = [
        'requestId'                                   => 'RequestId',
        'pageNumber'                                  => 'PageNumber',
        'pageSize'                                    => 'PageSize',
        'totalCount'                                  => 'TotalCount',
        'virtualBorderRouterForPhysicalConnectionSet' => 'VirtualBorderRouterForPhysicalConnectionSet',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('virtualBorderRouterForPhysicalConnectionSet', $this->virtualBorderRouterForPhysicalConnectionSet, true);
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
        if (null !== $this->virtualBorderRouterForPhysicalConnectionSet) {
            $res['VirtualBorderRouterForPhysicalConnectionSet'] = null !== $this->virtualBorderRouterForPhysicalConnectionSet ? $this->virtualBorderRouterForPhysicalConnectionSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVirtualBorderRoutersForPhysicalConnectionResponse
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
        if (isset($map['VirtualBorderRouterForPhysicalConnectionSet'])) {
            $model->virtualBorderRouterForPhysicalConnectionSet = virtualBorderRouterForPhysicalConnectionSet::fromMap($map['VirtualBorderRouterForPhysicalConnectionSet']);
        }

        return $model;
    }
}
