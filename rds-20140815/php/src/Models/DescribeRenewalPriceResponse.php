<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponse\rules;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponse\priceInfo;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponse\priceInfo\coupons;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponse\priceInfo\activityInfo;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponse\priceInfo\ruleIds;

class DescribeRenewalPriceResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'rules' => 'Rules',
        'priceInfo' => 'PriceInfo',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('rules', $this->rules, true);
        Model::validateRequired('priceInfo', $this->priceInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        $res['PriceInfo'] = null !== $this->priceInfo ? $this->priceInfo->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeRenewalPriceResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Rules'])){
            $model->rules = rules::fromMap($map['Rules']);
        }
        if(isset($map['PriceInfo'])){
            $model->priceInfo = priceInfo::fromMap($map['PriceInfo']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.rules
     * @var rules
     */
    public $rules;

    /**
     * @description data.orderResult
     * @var priceInfo
     */
    public $priceInfo;

}
