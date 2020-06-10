<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVSwitchesResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVSwitchesResponse\VSwitches\VSwitch;
use AlibabaCloud\Tea\Model;

class VSwitches extends Model
{
    /**
     * @description VSwitch
     *
     * @var array
     */
    public $VSwitch;
    protected $_name = [
        'VSwitch' => 'VSwitch',
    ];

    public function validate()
    {
        Model::validateRequired('VSwitch', $this->VSwitch, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VSwitch) {
            $res['VSwitch'] = [];
            if (null !== $this->VSwitch && \is_array($this->VSwitch)) {
                $n = 0;
                foreach ($this->VSwitch as $item) {
                    $res['VSwitch'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VSwitches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VSwitch'])) {
            if (!empty($map['VSwitch'])) {
                $model->VSwitch = [];
                $n              = 0;
                foreach ($map['VSwitch'] as $item) {
                    $model->VSwitch[$n++] = null !== $item ? VSwitch::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
