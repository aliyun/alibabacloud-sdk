<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateGtmAccessStrategyRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'strategyId' => 'StrategyId',
        'strategyName' => 'StrategyName',
        'defaultAddrPoolId' => 'DefaultAddrPoolId',
        'failoverAddrPoolId' => 'FailoverAddrPoolId',
        'accessLines' => 'AccessLines',
    ];
    public function validate() {
        Model::validateRequired('strategyId', $this->strategyId, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['StrategyId'] = $this->strategyId;
        $res['StrategyName'] = $this->strategyName;
        $res['DefaultAddrPoolId'] = $this->defaultAddrPoolId;
        $res['FailoverAddrPoolId'] = $this->failoverAddrPoolId;
        $res['AccessLines'] = $this->accessLines;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateGtmAccessStrategyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['StrategyId'])){
            $model->strategyId = $map['StrategyId'];
        }
        if(isset($map['StrategyName'])){
            $model->strategyName = $map['StrategyName'];
        }
        if(isset($map['DefaultAddrPoolId'])){
            $model->defaultAddrPoolId = $map['DefaultAddrPoolId'];
        }
        if(isset($map['FailoverAddrPoolId'])){
            $model->failoverAddrPoolId = $map['FailoverAddrPoolId'];
        }
        if(isset($map['AccessLines'])){
            $model->accessLines = $map['AccessLines'];
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
     * @description strategyName
     * @var string
     */
    public $strategyName;

    /**
     * @description defaultAddrPoolId
     * @var string
     */
    public $defaultAddrPoolId;

    /**
     * @description failoverAddrPoolId
     * @var string
     */
    public $failoverAddrPoolId;

    /**
     * @description accessLines
     * @var string
     */
    public $accessLines;

}
