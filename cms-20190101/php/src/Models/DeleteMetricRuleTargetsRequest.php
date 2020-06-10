<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteMetricRuleTargetsRequest extends Model
{
    /**
     * @description ruleName
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description targetIds
     *
     * @var array
     */
    public $targetIds;
    protected $_name = [
        'ruleId'    => 'RuleId',
        'targetIds' => 'TargetIds',
    ];

    public function validate()
    {
        Model::validateRequired('ruleId', $this->ruleId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->targetIds) {
            $res['TargetIds'] = [];
            if (null !== $this->targetIds) {
                $res['TargetIds'] = $this->targetIds;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMetricRuleTargetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['TargetIds'])) {
            if (!empty($map['TargetIds'])) {
                $model->targetIds = [];
                $model->targetIds = $map['TargetIds'];
            }
        }

        return $model;
    }
}
