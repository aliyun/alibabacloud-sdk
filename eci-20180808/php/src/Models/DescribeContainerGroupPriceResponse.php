<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo\rules;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo\spotPrices;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo\price;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo\price\detailInfos;

class DescribeContainerGroupPriceResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'priceInfo' => 'PriceInfo',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('priceInfo', $this->priceInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PriceInfo'] = null !== $this->priceInfo ? $this->priceInfo->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeContainerGroupPriceResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
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
     * @description data
     * @var priceInfo
     */
    public $priceInfo;

}
