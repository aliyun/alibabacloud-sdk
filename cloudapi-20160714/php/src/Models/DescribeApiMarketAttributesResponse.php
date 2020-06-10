<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeApiMarketAttributesResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.apiUid
     *
     * @var string
     */
    public $apiId;

    /**
     * @description data.needCharging
     *
     * @var string
     */
    public $needCharging;

    /**
     * @description data.marketChargingMode
     *
     * @var string
     */
    public $marketChargingMode;
    protected $_name = [
        'requestId'          => 'RequestId',
        'apiId'              => 'ApiId',
        'needCharging'       => 'NeedCharging',
        'marketChargingMode' => 'MarketChargingMode',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('needCharging', $this->needCharging, true);
        Model::validateRequired('marketChargingMode', $this->marketChargingMode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->needCharging) {
            $res['NeedCharging'] = $this->needCharging;
        }
        if (null !== $this->marketChargingMode) {
            $res['MarketChargingMode'] = $this->marketChargingMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiMarketAttributesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['NeedCharging'])) {
            $model->needCharging = $map['NeedCharging'];
        }
        if (isset($map['MarketChargingMode'])) {
            $model->marketChargingMode = $map['MarketChargingMode'];
        }

        return $model;
    }
}
