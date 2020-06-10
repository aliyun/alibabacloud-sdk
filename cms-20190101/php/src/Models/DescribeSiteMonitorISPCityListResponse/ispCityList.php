<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListResponse\ispCityList\ispCity;
use AlibabaCloud\Tea\Model;

class ispCityList extends Model
{
    /**
     * @description IspCity
     *
     * @var array
     */
    public $ispCity;
    protected $_name = [
        'ispCity' => 'IspCity',
    ];

    public function validate()
    {
        Model::validateRequired('ispCity', $this->ispCity, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ispCity) {
            $res['IspCity'] = [];
            if (null !== $this->ispCity && \is_array($this->ispCity)) {
                $n = 0;
                foreach ($this->ispCity as $item) {
                    $res['IspCity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ispCityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IspCity'])) {
            if (!empty($map['IspCity'])) {
                $model->ispCity = [];
                $n              = 0;
                foreach ($map['IspCity'] as $item) {
                    $model->ispCity[$n++] = null !== $item ? ispCity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
