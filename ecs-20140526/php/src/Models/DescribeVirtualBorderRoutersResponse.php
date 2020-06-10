<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersResponse\virtualBorderRouterSet;
use AlibabaCloud\Tea\Model;

class DescribeVirtualBorderRoutersResponse extends Model
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
     * @description data.virtualBorderRouterSet
     *
     * @var virtualBorderRouterSet
     */
    public $virtualBorderRouterSet;
    protected $_name = [
        'requestId'              => 'RequestId',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'totalCount'             => 'TotalCount',
        'virtualBorderRouterSet' => 'VirtualBorderRouterSet',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('virtualBorderRouterSet', $this->virtualBorderRouterSet, true);
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
        if (null !== $this->virtualBorderRouterSet) {
            $res['VirtualBorderRouterSet'] = null !== $this->virtualBorderRouterSet ? $this->virtualBorderRouterSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVirtualBorderRoutersResponse
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
        if (isset($map['VirtualBorderRouterSet'])) {
            $model->virtualBorderRouterSet = virtualBorderRouterSet::fromMap($map['VirtualBorderRouterSet']);
        }

        return $model;
    }
}
