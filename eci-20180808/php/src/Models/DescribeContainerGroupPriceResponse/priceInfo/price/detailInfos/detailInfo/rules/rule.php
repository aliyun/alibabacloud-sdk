<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo\price\detailInfos\detailInfo\rules;

use AlibabaCloud\Tea\Model;

class rule extends Model {
    protected $_name = [
        'ruleId' => 'RuleId',
        'description' => 'Description',
    ];
    public function validate() {
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('description', $this->description, true);
    }
    public function toMap() {
        $res = [];
        $res['RuleId'] = $this->ruleId;
        $res['Description'] = $this->description;
        return $res;
    }
    /**
     * @param array $map
     * @return rule
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RuleId'])){
            $model->ruleId = $map['RuleId'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        return $model;
    }
    /**
     * @description ruleId
     * @var integer
     */
    public $ruleId;

    /**
     * @description description
     * @var string
     */
    public $description;

}
