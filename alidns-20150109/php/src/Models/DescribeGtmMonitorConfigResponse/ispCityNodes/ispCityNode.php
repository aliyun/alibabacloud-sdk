<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorConfigResponse\ispCityNodes;

use AlibabaCloud\Tea\Model;

class ispCityNode extends Model
{
    /**
     * @description countryName
     *
     * @var string
     */
    public $countryName;

    /**
     * @description countryCode
     *
     * @var string
     */
    public $countryCode;

    /**
     * @description cityName
     *
     * @var string
     */
    public $cityName;

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

    /**
     * @description ispName
     *
     * @var string
     */
    public $ispName;
    protected $_name = [
        'countryName' => 'CountryName',
        'countryCode' => 'CountryCode',
        'cityName'    => 'CityName',
        'cityCode'    => 'CityCode',
        'ispCode'     => 'IspCode',
        'ispName'     => 'IspName',
    ];

    public function validate()
    {
        Model::validateRequired('countryName', $this->countryName, true);
        Model::validateRequired('countryCode', $this->countryCode, true);
        Model::validateRequired('cityName', $this->cityName, true);
        Model::validateRequired('cityCode', $this->cityCode, true);
        Model::validateRequired('ispCode', $this->ispCode, true);
        Model::validateRequired('ispName', $this->ispName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->countryName) {
            $res['CountryName'] = $this->countryName;
        }
        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->cityCode) {
            $res['CityCode'] = $this->cityCode;
        }
        if (null !== $this->ispCode) {
            $res['IspCode'] = $this->ispCode;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
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
        if (isset($map['CountryName'])) {
            $model->countryName = $map['CountryName'];
        }
        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['IspCode'])) {
            $model->ispCode = $map['IspCode'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }

        return $model;
    }
}
