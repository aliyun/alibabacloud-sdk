<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsSummaryResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsSummaryResponse\statistics\statistic;

class statistics extends Model {
    protected $_name = [
        'statistic' => 'Statistic',
    ];
    public function validate() {
        Model::validateRequired('statistic', $this->statistic, true);
    }
    public function toMap() {
        $res = [];
        $res['Statistic'] = [];
        if(null !== $this->statistic && is_array($this->statistic)){
            $n = 0;
            foreach($this->statistic as $item){
                $res['Statistic'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return statistics
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Statistic'])){
            if(!empty($map['Statistic'])){
                $model->statistic = [];
                $n = 0;
                foreach($map['Statistic'] as $item) {
                    $model->statistic[$n++] = null !== $item ? statistic::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Statistic
     * @var array
     */
    public $statistic;

}
