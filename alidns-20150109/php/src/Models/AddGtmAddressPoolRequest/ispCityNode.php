<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAddressPoolRequest;

use AlibabaCloud\Tea\Model;

class ispCityNode extends Model {
    protected $_name = [
        'cityCode' => 'CityCode',
        'ispCode' => 'IspCode',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['CityCode'] = $this->cityCode;
        $res['IspCode'] = $this->ispCode;
        return $res;
    }
    /**
     * @param array $map
     * @return ispCityNode
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CityCode'])){
            $model->cityCode = $map['CityCode'];
        }
        if(isset($map['IspCode'])){
            $model->ispCode = $map['IspCode'];
        }
        return $model;
    }
    /**
     * @description cityCode
     * @var string
     */
    public $cityCode;

    /**
     * @description ispCode
     * @var string
     */
    public $ispCode;

}
