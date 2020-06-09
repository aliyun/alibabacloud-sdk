<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainStatisticsRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'domainName' => 'DomainName',
        'startDate' => 'StartDate',
        'endDate' => 'EndDate',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('startDate', $this->startDate, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['DomainName'] = $this->domainName;
        $res['StartDate'] = $this->startDate;
        $res['EndDate'] = $this->endDate;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDomainStatisticsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['StartDate'])){
            $model->startDate = $map['StartDate'];
        }
        if(isset($map['EndDate'])){
            $model->endDate = $map['EndDate'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

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

}
