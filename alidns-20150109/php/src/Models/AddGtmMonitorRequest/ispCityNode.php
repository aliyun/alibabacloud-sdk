<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmMonitorRequest;

use AlibabaCloud\Tea\Model;

class ispCityNode extends Model
{
    /**
     * @description cityCode
     *
     * @var string
     */
    public $cityCode;

    /**
     * @description ispCode
     *
     * @var string
     */
    public $ispCode;
    protected $_name = [
        'cityCode' => 'CityCode',
        'ispCode'  => 'IspCode',
    ];

    public function validate()
    {
        Model::validateRequired('cityCode', $this->cityCode, true);
        Model::validateRequired('ispCode', $this->ispCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityCode) {
            $res['CityCode'] = $this->cityCode;
        }
        if (null !== $this->ispCode) {
            $res['IspCode'] = $this->ispCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ispCityNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['IspCode'])) {
            $model->ispCode = $map['IspCode'];
        }

        return $model;
    }
}
