<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponse\trafficControls\trafficControl\specialPolicies\specialPolicy;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponse\trafficControls\trafficControl\specialPolicies\specialPolicy\specials\special;
use AlibabaCloud\Tea\Model;

class specials extends Model
{
    /**
     * @description Special
     *
     * @var array
     */
    public $special;
    protected $_name = [
        'special' => 'Special',
    ];

    public function validate()
    {
        Model::validateRequired('special', $this->special, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->special) {
            $res['Special'] = [];
            if (null !== $this->special && \is_array($this->special)) {
                $n = 0;
                foreach ($this->special as $item) {
                    $res['Special'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specials
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Special'])) {
            if (!empty($map['Special'])) {
                $model->special = [];
                $n              = 0;
                foreach ($map['Special'] as $item) {
                    $model->special[$n++] = null !== $item ? special::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
