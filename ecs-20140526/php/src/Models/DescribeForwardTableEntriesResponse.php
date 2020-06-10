<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeForwardTableEntriesResponse\forwardTableEntries;
use AlibabaCloud\Tea\Model;

class DescribeForwardTableEntriesResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.totalCount
     *
     * @var int
     */
    public $totalCount;

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
     * @description data.forwardTableEntries
     *
     * @var forwardTableEntries
     */
    public $forwardTableEntries;
    protected $_name = [
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'forwardTableEntries' => 'ForwardTableEntries',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('forwardTableEntries', $this->forwardTableEntries, true);
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
        if (null !== $this->forwardTableEntries) {
            $res['ForwardTableEntries'] = null !== $this->forwardTableEntries ? $this->forwardTableEntries->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeForwardTableEntriesResponse
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
        if (isset($map['ForwardTableEntries'])) {
            $model->forwardTableEntries = forwardTableEntries::fromMap($map['ForwardTableEntries']);
        }

        return $model;
    }
}
