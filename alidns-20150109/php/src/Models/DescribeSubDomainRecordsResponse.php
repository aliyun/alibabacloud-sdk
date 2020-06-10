<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSubDomainRecordsResponse\domainRecords;
use AlibabaCloud\Tea\Model;

class DescribeSubDomainRecordsResponse extends Model
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
     * @var domainRecords
     */
    public $domainRecords;
    protected $_name = [
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'domainRecords' => 'DomainRecords',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('domainRecords', $this->domainRecords, true);
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
        if (null !== $this->domainRecords) {
            $res['DomainRecords'] = null !== $this->domainRecords ? $this->domainRecords->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubDomainRecordsResponse
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
        if (isset($map['DomainRecords'])) {
            $model->domainRecords = domainRecords::fromMap($map['DomainRecords']);
        }

        return $model;
    }
}
