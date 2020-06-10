<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventRuleAttributeRequest extends Model
{
    /**
     * @description ruleName
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
        Model::validateRequired('ruleName', $this->ruleName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventRuleAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
