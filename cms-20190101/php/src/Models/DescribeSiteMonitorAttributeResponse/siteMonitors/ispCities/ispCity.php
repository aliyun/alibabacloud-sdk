<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponse\siteMonitors\ispCities;

use AlibabaCloud\Tea\Model;

class ispCity extends Model
{
    /**
     * @description city
     *
     * @var string
     */
    public $cityName;

    /**
     * @description isp
     *
     * @var string
     */
    public $ispName;

    /**
     * @description cityCode
     *
     * @var string
     */
    public $city;

    /**
     * @description ispCode
     *
     * @var string
     */
    public $isp;
    protected $_name = [
        'cityName' => 'CityName',
        'ispName'  => 'IspName',
        'city'     => 'City',
        'isp'      => 'Isp',
    ];

    public function validate()
    {
        Model::validateRequired('cityName', $this->cityName, true);
        Model::validateRequired('ispName', $this->ispName, true);
        Model::validateRequired('city', $this->city, true);
        Model::validateRequired('isp', $this->isp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->ispName) {
            $res['IspName'] = $this->ispName;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
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
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['IspName'])) {
            $model->ispName = $map['IspName'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        return $model;
    }
}
