<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressCloudConnectionsResponse\expressCloudConnectionSet;
use AlibabaCloud\Tea\Model;

class DescribeExpressCloudConnectionsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var expressCloudConnectionSet
     */
    public $expressCloudConnectionSet;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
        'totalCount'                => 'TotalCount',
        'expressCloudConnectionSet' => 'ExpressCloudConnectionSet',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('expressCloudConnectionSet', $this->expressCloudConnectionSet, true);
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
        if (null !== $this->expressCloudConnectionSet) {
            $res['ExpressCloudConnectionSet'] = null !== $this->expressCloudConnectionSet ? $this->expressCloudConnectionSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExpressCloudConnectionsResponse
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
        if (isset($map['ExpressCloudConnectionSet'])) {
            $model->expressCloudConnectionSet = expressCloudConnectionSet::fromMap($map['ExpressCloudConnectionSet']);
        }

        return $model;
    }
}
