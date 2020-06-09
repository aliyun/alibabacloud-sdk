<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponse\rules;

use AlibabaCloud\Tea\Model;

class rule extends Model {
    protected $_name = [
        'ruleId' => 'RuleId',
        'name' => 'Name',
        'description' => 'Description',
    ];
    public function validate() {
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
    }
    public function toMap() {
        $res = [];
        $res['RuleId'] = $this->ruleId;
        $res['Name'] = $this->name;
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
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        return $model;
    }
    /**
     * @description ruleDescId
     * @var integer
     */
    public $ruleId;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description title
     * @var string
     */
    public $description;

}
