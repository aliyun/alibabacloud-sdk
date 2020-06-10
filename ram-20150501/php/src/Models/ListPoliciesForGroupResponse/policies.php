<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForGroupResponse;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForGroupResponse\policies\policy;
use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description Policy
     *
     * @var array
     */
    public $policy;
    protected $_name = [
        'policy' => 'Policy',
    ];

    public function validate()
    {
        Model::validateRequired('policy', $this->policy, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = [];
            if (null !== $this->policy && \is_array($this->policy)) {
                $n = 0;
                foreach ($this->policy as $item) {
                    $res['Policy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            if (!empty($map['Policy'])) {
                $model->policy = [];
                $n             = 0;
                foreach ($map['Policy'] as $item) {
                    $model->policy[$n++] = null !== $item ? policy::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
