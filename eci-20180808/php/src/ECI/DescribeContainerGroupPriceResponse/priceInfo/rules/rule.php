<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupPriceResponse\priceInfo\rules;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @description ruleId
     *
     * @var int
     */
    public $ruleId;
    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'ruleId'      => 'RuleId',
        'description' => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['RuleId']      = $this->ruleId;
        $res['Description'] = $this->description;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
