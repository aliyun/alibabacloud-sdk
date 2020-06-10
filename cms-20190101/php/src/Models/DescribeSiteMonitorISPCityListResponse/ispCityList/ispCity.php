<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListResponse\ispCityList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListResponse\ispCityList\ispCity\cityName;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListResponse\ispCityList\ispCity\ispName;
use AlibabaCloud\Tea\Model;

class ispCity extends Model
{
    /**
     * @description cityIspCode.isp
     *
     * @var string
     */
    public $isp;

    /**
     * @description cityIspCode.city
     *
     * @var string
     */
    public $city;

    /**
     * @description regionCode
     *
     * @var string
     */
    public $region;

    /**
     * @description countryCode
     *
     * @var string
     */
    public $country;

    /**
     * @description IspName
     *
     * @var ispName
     */
    public $ispName;

    /**
     * @description CityName
     *
     * @var cityName
     */
    public $cityName;
    protected $_name = [
        'isp'      => 'Isp',
        'city'     => 'City',
        'region'   => 'Region',
        'country'  => 'Country',
        'ispName'  => 'IspName',
        'cityName' => 'CityName',
    ];

    public function validate()
    {
        Model::validateRequired('isp', $this->isp, true);
        Model::validateRequired('city', $this->city, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('country', $this->country, true);
        Model::validateRequired('ispName', $this->ispName, true);
        Model::validateRequired('cityName', $this->cityName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = null !== $this->ispName ? $this->ispName->toMap() : null;
        }
        if (null !== $this->cityName) {
            $res['CityName'] = null !== $this->cityName ? $this->cityName->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ispCity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = ispName::fromMap($map['IspName']);
        }
        if (isset($map['CityName'])) {
            $model->cityName = cityName::fromMap($map['CityName']);
        }

        return $model;
    }
}
