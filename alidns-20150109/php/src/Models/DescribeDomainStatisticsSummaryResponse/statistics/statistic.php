<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsSummaryResponse\statistics;

use AlibabaCloud\Tea\Model;

class statistic extends Model {
    protected $_name = [
        'domainName' => 'DomainName',
        'count' => 'Count',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('count', $this->count, true);
    }
    public function toMap() {
        $res = [];
        $res['DomainName'] = $this->domainName;
        $res['Count'] = $this->count;
        return $res;
    }
    /**
     * @param array $map
     * @return statistic
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['Count'])){
            $model->count = $map['Count'];
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $domainName;

    /**
     * @description count
     * @var integer
     */
    public $count;

}
