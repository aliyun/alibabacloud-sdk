<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordStatisticsRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'startDate' => 'StartDate',
        'endDate' => 'EndDate',
        'domainName' => 'DomainName',
        'rr' => 'Rr',
    ];
    public function validate() {
        Model::validateRequired('startDate', $this->startDate, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('rr', $this->rr, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['StartDate'] = $this->startDate;
        $res['EndDate'] = $this->endDate;
        $res['DomainName'] = $this->domainName;
        $res['Rr'] = $this->rr;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeRecordStatisticsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['StartDate'])){
            $model->startDate = $map['StartDate'];
        }
        if(isset($map['EndDate'])){
            $model->endDate = $map['EndDate'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['Rr'])){
            $model->rr = $map['Rr'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

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
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description rr
     * @var string
     */
    public $rr;

}
