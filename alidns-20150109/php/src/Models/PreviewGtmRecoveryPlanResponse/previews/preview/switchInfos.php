<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponse\previews\preview;

use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponse\previews\preview\switchInfos\switchInfo;
use AlibabaCloud\Tea\Model;

class switchInfos extends Model
{
    /**
     * @description SwitchInfo
     *
     * @var array
     */
    public $switchInfo;
    protected $_name = [
        'switchInfo' => 'SwitchInfo',
    ];

    public function validate()
    {
        Model::validateRequired('switchInfo', $this->switchInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->switchInfo) {
            $res['SwitchInfo'] = [];
            if (null !== $this->switchInfo && \is_array($this->switchInfo)) {
                $n = 0;
                foreach ($this->switchInfo as $item) {
                    $res['SwitchInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return switchInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SwitchInfo'])) {
            if (!empty($map['SwitchInfo'])) {
                $model->switchInfo = [];
                $n                 = 0;
                foreach ($map['SwitchInfo'] as $item) {
                    $model->switchInfo[$n++] = null !== $item ? switchInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
