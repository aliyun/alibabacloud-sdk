<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetGtmAccessModeRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'strategyId' => 'StrategyId',
        'accessMode' => 'AccessMode',
    ];
    public function validate() {
        Model::validateRequired('strategyId', $this->strategyId, true);
        Model::validateRequired('accessMode', $this->accessMode, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['StrategyId'] = $this->strategyId;
        $res['AccessMode'] = $this->accessMode;
        return $res;
    }
    /**
     * @param array $map
     * @return SetGtmAccessModeRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['StrategyId'])){
            $model->strategyId = $map['StrategyId'];
        }
        if(isset($map['AccessMode'])){
            $model->accessMode = $map['AccessMode'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description strategyId
     * @var string
     */
    public $strategyId;

    /**
     * @description accessMode
     * @var string
     */
    public $accessMode;

}
