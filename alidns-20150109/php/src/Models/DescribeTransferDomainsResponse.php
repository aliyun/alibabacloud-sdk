<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTransferDomainsResponse\domainTransfers;
use AlibabaCloud\Tea\Model;

class DescribeTransferDomainsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.totalItems
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description module.pageNumber
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
     * @var domainTransfers
     */
    public $domainTransfers;
    protected $_name = [
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'domainTransfers' => 'DomainTransfers',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('domainTransfers', $this->domainTransfers, true);
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
        if (null !== $this->domainTransfers) {
            $res['DomainTransfers'] = null !== $this->domainTransfers ? $this->domainTransfers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTransferDomainsResponse
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
        if (isset($map['DomainTransfers'])) {
            $model->domainTransfers = domainTransfers::fromMap($map['DomainTransfers']);
        }

        return $model;
    }
}
