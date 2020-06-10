<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleTargetsResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleTargetsResponse\failIds\targetIds;
use AlibabaCloud\Tea\Model;

class failIds extends Model
{
    /**
     * @description targetIds
     *
     * @var targetIds
     */
    public $targetIds;
    protected $_name = [
        'targetIds' => 'TargetIds',
    ];

    public function validate()
    {
        Model::validateRequired('targetIds', $this->targetIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetIds) {
            $res['TargetIds'] = null !== $this->targetIds ? $this->targetIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetIds'])) {
            $model->targetIds = targetIds::fromMap($map['TargetIds']);
        }

        return $model;
    }
}
