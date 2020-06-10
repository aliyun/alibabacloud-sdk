<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailResponse\batchResultDetails;
use AlibabaCloud\Tea\Model;

class DescribeBatchResultDetailResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.totalItemNum
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description module.currentPageNum
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description module.pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description module.data
     *
     * @var batchResultDetails
     */
    public $batchResultDetails;
    protected $_name = [
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'batchResultDetails' => 'BatchResultDetails',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('batchResultDetails', $this->batchResultDetails, true);
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
        if (null !== $this->batchResultDetails) {
            $res['BatchResultDetails'] = null !== $this->batchResultDetails ? $this->batchResultDetails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBatchResultDetailResponse
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
        if (isset($map['BatchResultDetails'])) {
            $model->batchResultDetails = batchResultDetails::fromMap($map['BatchResultDetails']);
        }

        return $model;
    }
}
