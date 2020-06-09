<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddGtmAccessStrategyResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'strategyId' => 'StrategyId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('strategyId', $this->strategyId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['StrategyId'] = $this->strategyId;
        return $res;
    }
    /**
     * @param array $map
     * @return AddGtmAccessStrategyResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['StrategyId'])){
            $model->strategyId = $map['StrategyId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.id
     * @var string
     */
    public $strategyId;

}
