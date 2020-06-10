<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class EnableMetricRulesRequest extends Model
{
    /**
     * @description ids
     *
     * @var array
     */
    public $ruleId;
    protected $_name = [
        'ruleId' => 'RuleId',
    ];

    public function validate()
    {
        Model::validateRequired('ruleId', $this->ruleId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = [];
            if (null !== $this->ruleId) {
                $res['RuleId'] = $this->ruleId;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableMetricRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            if (!empty($map['RuleId'])) {
                $model->ruleId = [];
                $model->ruleId = $map['RuleId'];
            }
        }

        return $model;
    }
}
