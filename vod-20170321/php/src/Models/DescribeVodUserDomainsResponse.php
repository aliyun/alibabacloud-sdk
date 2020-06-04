<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponse\domains;

class DescribeVodUserDomainsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'domains' => 'Domains',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('domains', $this->domains, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['TotalCount'] = $this->totalCount;
        $res['Domains'] = null !== $this->domains ? $this->domains->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodUserDomainsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['Domains'])){
            $model->domains = domains::fromMap($map['Domains']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description data.pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description data.totalCount
     * @var integer
     */
    public $totalCount;

    /**
     * @description data.data
     * @var domains
     */
    public $domains;

}
