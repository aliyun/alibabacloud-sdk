<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListResponse\ispCityList\ispCity;

use AlibabaCloud\Tea\Model;

class cityName extends Model
{
    /**
     * @description cityEn
     *
     * @var string
     */
    public $en;

    /**
     * @description city
     *
     * @var string
     */
    public $zhCN;
    protected $_name = [
        'en'   => 'en',
        'zhCN' => 'zh_CN',
    ];

    public function validate()
    {
        Model::validateRequired('en', $this->en, true);
        Model::validateRequired('zhCN', $this->zhCN, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->en) {
            $res['en'] = $this->en;
        }
        if (null !== $this->zhCN) {
            $res['zh_CN'] = $this->zhCN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cityName
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['en'])) {
            $model->en = $map['en'];
        }
        if (isset($map['zh_CN'])) {
            $model->zhCN = $map['zh_CN'];
        }

        return $model;
    }
}
