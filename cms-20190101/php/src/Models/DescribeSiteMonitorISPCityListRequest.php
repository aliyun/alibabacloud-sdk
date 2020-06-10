<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorISPCityListRequest extends Model
{
    /**
     * @description isp
     *
     * @var string
     */
    public $isp;

    /**
     * @description city
     *
     * @var string
     */
    public $city;
    protected $_name = [
        'isp'  => 'Isp',
        'city' => 'City',
    ];

    public function validate()
    {
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSiteMonitorISPCityListRequest
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

        return $model;
    }
}
