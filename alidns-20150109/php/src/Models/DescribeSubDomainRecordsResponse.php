<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSubDomainRecordsResponse\domainRecords;

class DescribeSubDomainRecordsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'domainRecords' => 'DomainRecords',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('domainRecords', $this->domainRecords, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TotalCount'] = $this->totalCount;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['DomainRecords'] = null !== $this->domainRecords ? $this->domainRecords->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeSubDomainRecordsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['DomainRecords'])){
            $model->domainRecords = domainRecords::fromMap($map['DomainRecords']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.totalItems
     * @var integer
     */
    public $totalCount;

    /**
     * @description module.pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description module.pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description module.data
     * @var domainRecords
     */
    public $domainRecords;

}
