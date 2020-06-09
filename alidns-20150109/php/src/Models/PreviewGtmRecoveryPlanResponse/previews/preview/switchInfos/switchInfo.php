<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponse\previews\preview\switchInfos;

use AlibabaCloud\Tea\Model;

class switchInfo extends Model {
    protected $_name = [
        'strategyName' => 'StrategyName',
        'content' => 'Content',
    ];
    public function validate() {
        Model::validateRequired('strategyName', $this->strategyName, true);
        Model::validateRequired('content', $this->content, true);
    }
    public function toMap() {
        $res = [];
        $res['StrategyName'] = $this->strategyName;
        $res['Content'] = $this->content;
        return $res;
    }
    /**
     * @param array $map
     * @return switchInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['StrategyName'])){
            $model->strategyName = $map['StrategyName'];
        }
        if(isset($map['Content'])){
            $model->content = $map['Content'];
        }
        return $model;
    }
    /**
     * @description strategyName
     * @var string
     */
    public $strategyName;

    /**
     * @description content
     * @var string
     */
    public $content;

}
