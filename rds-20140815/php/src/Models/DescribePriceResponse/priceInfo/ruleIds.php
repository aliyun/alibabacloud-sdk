<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponse\priceInfo;

use AlibabaCloud\Tea\Model;

class ruleIds extends Model {
    protected $_name = [
        'ruleId' => 'RuleId',
    ];
    public function validate() {
        Model::validateRequired('ruleId', $this->ruleId, true);
    }
    public function toMap() {
        $res = [];
        $res['RuleId'] = [];
        if(null !== $this->ruleId){
            $res['RuleId'] = $this->ruleId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ruleIds
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RuleId'])){
            if(!empty($map['RuleId'])){
                $model->ruleId = [];
                $model->ruleId = $map['RuleId'];
            }
        }
        return $model;
    }
    /**
     * @description RuleId
     * @var array
     */
    public $ruleId;

}
