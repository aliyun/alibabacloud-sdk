<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesResponse\failedListResult;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesResponse\failedListResult\target\result;
use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @description ruleId
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description result
     *
     * @var result
     */
    public $result;
    protected $_name = [
        'ruleId' => 'RuleId',
        'result' => 'Result',
    ];

    public function validate()
    {
        Model::validateRequired('ruleId', $this->ruleId, true);
        Model::validateRequired('result', $this->result, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return target
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        return $model;
    }
}
