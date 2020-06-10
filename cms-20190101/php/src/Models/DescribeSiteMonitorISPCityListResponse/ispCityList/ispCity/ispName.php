<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorISPCityListResponse\ispCityList\ispCity;

use AlibabaCloud\Tea\Model;

class ispName extends Model
{
    /**
     * @description ispEn
     *
     * @var string
     */
    public $en;

    /**
     * @description isp
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
     * @return ispName
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
