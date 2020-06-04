<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse\priceInfo\spotPrices;

use AlibabaCloud\Tea\Model;

class spotPrice extends Model {
    protected $_name = [
        'zoneId' => 'ZoneId',
        'instanceType' => 'InstanceType',
        'spotPrice' => 'SpotPrice',
        'originPrice' => 'OriginPrice',
    ];
    public function validate() {
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('spotPrice', $this->spotPrice, true);
        Model::validateRequired('originPrice', $this->originPrice, true);
    }
    public function toMap() {
        $res = [];
        $res['ZoneId'] = $this->zoneId;
        $res['InstanceType'] = $this->instanceType;
        $res['SpotPrice'] = $this->spotPrice;
        $res['OriginPrice'] = $this->originPrice;
        return $res;
    }
    /**
     * @param array $map
     * @return spotPrice
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        if(isset($map['InstanceType'])){
            $model->instanceType = $map['InstanceType'];
        }
        if(isset($map['SpotPrice'])){
            $model->spotPrice = $map['SpotPrice'];
        }
        if(isset($map['OriginPrice'])){
            $model->originPrice = $map['OriginPrice'];
        }
        return $model;
    }
    /**
     * @description zoneId
     * @var string
     */
    public $zoneId;

    /**
     * @description instanceType
     * @var string
     */
    public $instanceType;

    /**
     * @description spotPrice
     * @var float
     */
    public $spotPrice;

    /**
     * @description originPrice
     * @var float
     */
    public $originPrice;

}
