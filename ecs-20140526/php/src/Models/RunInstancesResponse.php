<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesResponse\instanceIdSets;
use AlibabaCloud\Tea\Model;

class RunInstancesResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.lxOrderResult.tradeAmount
     *
     * @var float
     */
    public $tradePrice;

    /**
     * @description data.instanceIdSet
     *
     * @var instanceIdSets
     */
    public $instanceIdSets;
    protected $_name = [
        'requestId'      => 'RequestId',
        'tradePrice'     => 'TradePrice',
        'instanceIdSets' => 'InstanceIdSets',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('tradePrice', $this->tradePrice, true);
        Model::validateRequired('instanceIdSets', $this->instanceIdSets, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->instanceIdSets) {
            $res['InstanceIdSets'] = null !== $this->instanceIdSets ? $this->instanceIdSets->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunInstancesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['InstanceIdSets'])) {
            $model->instanceIdSets = instanceIdSets::fromMap($map['InstanceIdSets']);
        }

        return $model;
    }
}
