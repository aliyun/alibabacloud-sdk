<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteEventRuleTargetsRequest extends Model
{
    /**
     * @description ruleName
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description ids
     *
     * @var array
     */
    public $ids;
    protected $_name = [
        'ruleName' => 'RuleName',
        'ids'      => 'Ids',
    ];

    public function validate()
    {
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('ids', $this->ids, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ids) {
            $res['Ids'] = [];
            if (null !== $this->ids) {
                $res['Ids'] = $this->ids;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEventRuleTargetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = [];
                $model->ids = $map['Ids'];
            }
        }

        return $model;
    }
}
