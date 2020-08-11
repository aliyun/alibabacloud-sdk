<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVSwitchesResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVSwitchesResponse\vSwitches\vSwitch;
use AlibabaCloud\Tea\Model;

class vSwitches extends Model
{
    /**
     * @var array
     */
    public $vSwitch;
    protected $_name = [
        'vSwitch' => 'VSwitch',
    ];

    public function validate()
    {
        Model::validateRequired('vSwitch', $this->vSwitch, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vSwitch) {
            $res['VSwitch'] = [];
            if (null !== $this->vSwitch && \is_array($this->vSwitch)) {
                $n = 0;
                foreach ($this->vSwitch as $item) {
                    $res['VSwitch'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vSwitches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VSwitch'])) {
            if (!empty($map['VSwitch'])) {
                $model->vSwitch = [];
                $n              = 0;
                foreach ($map['VSwitch'] as $item) {
                    $model->vSwitch[$n++] = null !== $item ? vSwitch::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
