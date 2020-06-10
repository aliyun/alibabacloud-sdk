<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponse\trafficControls\trafficControl;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponse\trafficControls\trafficControl\specialPolicies\specialPolicy;
use AlibabaCloud\Tea\Model;

class specialPolicies extends Model
{
    /**
     * @description SpecialPolicy
     *
     * @var array
     */
    public $specialPolicy;
    protected $_name = [
        'specialPolicy' => 'SpecialPolicy',
    ];

    public function validate()
    {
        Model::validateRequired('specialPolicy', $this->specialPolicy, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->specialPolicy) {
            $res['SpecialPolicy'] = [];
            if (null !== $this->specialPolicy && \is_array($this->specialPolicy)) {
                $n = 0;
                foreach ($this->specialPolicy as $item) {
                    $res['SpecialPolicy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specialPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpecialPolicy'])) {
            if (!empty($map['SpecialPolicy'])) {
                $model->specialPolicy = [];
                $n                    = 0;
                foreach ($map['SpecialPolicy'] as $item) {
                    $model->specialPolicy[$n++] = null !== $item ? specialPolicy::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
