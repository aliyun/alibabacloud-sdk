<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupsResponse\purchasedApiGroupAttributes;
use AlibabaCloud\Tea\Model;

class DescribePurchasedApiGroupsResponse extends Model
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
     * @var purchasedApiGroupAttributes
     */
    public $purchasedApiGroupAttributes;
    protected $_name = [
        'requestId'                   => 'RequestId',
        'totalCount'                  => 'TotalCount',
        'pageSize'                    => 'PageSize',
        'pageNumber'                  => 'PageNumber',
        'purchasedApiGroupAttributes' => 'PurchasedApiGroupAttributes',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('purchasedApiGroupAttributes', $this->purchasedApiGroupAttributes, true);
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
        if (null !== $this->purchasedApiGroupAttributes) {
            $res['PurchasedApiGroupAttributes'] = null !== $this->purchasedApiGroupAttributes ? $this->purchasedApiGroupAttributes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePurchasedApiGroupsResponse
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
        if (isset($map['PurchasedApiGroupAttributes'])) {
            $model->purchasedApiGroupAttributes = purchasedApiGroupAttributes::fromMap($map['PurchasedApiGroupAttributes']);
        }

        return $model;
    }
}
