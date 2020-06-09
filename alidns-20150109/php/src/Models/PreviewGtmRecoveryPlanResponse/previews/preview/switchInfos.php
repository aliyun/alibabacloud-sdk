<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponse\previews\preview;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponse\previews\preview\switchInfos\switchInfo;

class switchInfos extends Model {
    protected $_name = [
        'switchInfo' => 'SwitchInfo',
    ];
    public function validate() {
        Model::validateRequired('switchInfo', $this->switchInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['SwitchInfo'] = [];
        if(null !== $this->switchInfo && is_array($this->switchInfo)){
            $n = 0;
            foreach($this->switchInfo as $item){
                $res['SwitchInfo'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return switchInfos
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SwitchInfo'])){
            if(!empty($map['SwitchInfo'])){
                $model->switchInfo = [];
                $n = 0;
                foreach($map['SwitchInfo'] as $item) {
                    $model->switchInfo[$n++] = null !== $item ? switchInfo::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description SwitchInfo
     * @var array
     */
    public $switchInfo;

}
