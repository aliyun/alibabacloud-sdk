<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainStatisticsSummaryRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'startDate' => 'StartDate',
        'endDate' => 'EndDate',
        'searchMode' => 'SearchMode',
        'keyword' => 'Keyword',
        'threshold' => 'Threshold',
    ];
    public function validate() {
        Model::validateRequired('startDate', $this->startDate, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['StartDate'] = $this->startDate;
        $res['EndDate'] = $this->endDate;
        $res['SearchMode'] = $this->searchMode;
        $res['Keyword'] = $this->keyword;
        $res['Threshold'] = $this->threshold;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDomainStatisticsSummaryRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['StartDate'])){
            $model->startDate = $map['StartDate'];
        }
        if(isset($map['EndDate'])){
            $model->endDate = $map['EndDate'];
        }
        if(isset($map['SearchMode'])){
            $model->searchMode = $map['SearchMode'];
        }
        if(isset($map['Keyword'])){
            $model->keyword = $map['Keyword'];
        }
        if(isset($map['Threshold'])){
            $model->threshold = $map['Threshold'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description startDate
     * @var string
     */
    public $startDate;

    /**
     * @description endDate
     * @var string
     */
    public $endDate;

    /**
     * @description searchMode
     * @var string
     */
    public $searchMode;

    /**
     * @description keyword
     * @var string
     */
    public $keyword;

    /**
     * @description threshold
     * @var integer
     */
    public $threshold;

}
