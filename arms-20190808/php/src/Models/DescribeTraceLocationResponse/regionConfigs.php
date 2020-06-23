<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeTraceLocationResponse;

use AlibabaCloud\Tea\Model;

class regionConfigs extends Model
{
    /**
     * @description regionNo
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description url
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'regionNo' => 'RegionNo',
        'url'      => 'Url',
    ];

    public function validate()
    {
        Model::validateRequired('regionNo', $this->regionNo, true);
        Model::validateRequired('url', $this->url, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
