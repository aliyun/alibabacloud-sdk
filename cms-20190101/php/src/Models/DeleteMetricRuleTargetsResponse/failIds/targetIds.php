<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMetricRuleTargetsResponse\failIds;

use AlibabaCloud\Tea\Model;

class targetIds extends Model
{
    /**
     * @description TargetId
     *
     * @var array
     */
    public $targetId;
    protected $_name = [
        'targetId' => 'TargetId',
    ];

    public function validate()
    {
        Model::validateRequired('targetId', $this->targetId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetId) {
            $res['TargetId'] = [];
            if (null !== $this->targetId) {
                $res['TargetId'] = $this->targetId;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetId'])) {
            if (!empty($map['TargetId'])) {
                $model->targetId = [];
                $model->targetId = $map['TargetId'];
            }
        }

        return $model;
    }
}
