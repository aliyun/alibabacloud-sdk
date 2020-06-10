<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateMetricRuleResourcesRequest extends Model
{
    /**
     * @description alertName
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description overwrite
     *
     * @var string
     */
    public $overwrite;

    /**
     * @description resources
     *
     * @var string
     */
    public $resources;
    protected $_name = [
        'ruleId'    => 'RuleId',
        'overwrite' => 'Overwrite',
        'resources' => 'Resources',
    ];

    public function validate()
    {
        Model::validateRequired('resources', $this->resources, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMetricRuleResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }

        return $model;
    }
}
