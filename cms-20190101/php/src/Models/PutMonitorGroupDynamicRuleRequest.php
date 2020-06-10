<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitorGroupDynamicRuleRequest\groupRules;
use AlibabaCloud\Tea\Model;

class PutMonitorGroupDynamicRuleRequest extends Model
{
    /**
     * @description groupId
     *
     * @var int
     */
    public $groupId;

    /**
     * @description groupRuleArrayJson
     *
     * @var array
     */
    public $groupRules;
    protected $_name = [
        'groupId'    => 'GroupId',
        'groupRules' => 'GroupRules',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupRules', $this->groupRules, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupRules) {
            $res['GroupRules'] = [];
            if (null !== $this->groupRules && \is_array($this->groupRules)) {
                $n = 0;
                foreach ($this->groupRules as $item) {
                    $res['GroupRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutMonitorGroupDynamicRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupRules'])) {
            if (!empty($map['GroupRules'])) {
                $model->groupRules = [];
                $n                 = 0;
                foreach ($map['GroupRules'] as $item) {
                    $model->groupRules[$n++] = null !== $item ? groupRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
