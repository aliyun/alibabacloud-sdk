<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteDynamicTagGroupRequest extends Model
{
    /**
     * @description uuid
     *
     * @var string
     */
    public $dynamicTagRuleId;
    protected $_name = [
        'dynamicTagRuleId' => 'DynamicTagRuleId',
    ];

    public function validate()
    {
        Model::validateRequired('dynamicTagRuleId', $this->dynamicTagRuleId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicTagRuleId) {
            $res['DynamicTagRuleId'] = $this->dynamicTagRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDynamicTagGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicTagRuleId'])) {
            $model->dynamicTagRuleId = $map['DynamicTagRuleId'];
        }

        return $model;
    }
}
