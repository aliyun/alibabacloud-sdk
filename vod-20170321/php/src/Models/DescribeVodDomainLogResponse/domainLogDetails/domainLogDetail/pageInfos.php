<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponse\domainLogDetails\domainLogDetail;

use AlibabaCloud\Tea\Model;

class pageInfos extends Model {
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'total' => 'Total',
    ];
    public function validate() {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('total', $this->total, true);
    }
    public function toMap() {
        $res = [];
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['Total'] = $this->total;
        return $res;
    }
    /**
     * @param array $map
     * @return pageInfos
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['Total'])){
            $model->total = $map['Total'];
        }
        return $model;
    }
    /**
     * @description pageIndex
     * @var integer
     */
    public $pageNumber;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description total
     * @var integer
     */
    public $total;

}
