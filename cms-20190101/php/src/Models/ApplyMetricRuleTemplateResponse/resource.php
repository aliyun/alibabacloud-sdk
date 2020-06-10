<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ApplyMetricRuleTemplateResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\ApplyMetricRuleTemplateResponse\resource\alertResults;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description groupId
     *
     * @var int
     */
    public $groupId;

    /**
     * @description alertResults
     *
     * @var array
     */
    public $alertResults;
    protected $_name = [
        'groupId'      => 'GroupId',
        'alertResults' => 'AlertResults',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('alertResults', $this->alertResults, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->alertResults) {
            $res['AlertResults'] = [];
            if (null !== $this->alertResults && \is_array($this->alertResults)) {
                $n = 0;
                foreach ($this->alertResults as $item) {
                    $res['AlertResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['AlertResults'])) {
            if (!empty($map['AlertResults'])) {
                $model->alertResults = [];
                $n                   = 0;
                foreach ($map['AlertResults'] as $item) {
                    $model->alertResults[$n++] = null !== $item ? alertResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
