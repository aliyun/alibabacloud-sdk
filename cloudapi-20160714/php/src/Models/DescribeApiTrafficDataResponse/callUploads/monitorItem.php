<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficDataResponse\callUploads;

use AlibabaCloud\Tea\Model;

class monitorItem extends Model
{
    /**
     * @description key
     *
     * @var string
     */
    public $itemTime;

    /**
     * @description value
     *
     * @var string
     */
    public $itemValue;
    protected $_name = [
        'itemTime'  => 'ItemTime',
        'itemValue' => 'ItemValue',
    ];

    public function validate()
    {
        Model::validateRequired('itemTime', $this->itemTime, true);
        Model::validateRequired('itemValue', $this->itemValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemTime) {
            $res['ItemTime'] = $this->itemTime;
        }
        if (null !== $this->itemValue) {
            $res['ItemValue'] = $this->itemValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemTime'])) {
            $model->itemTime = $map['ItemTime'];
        }
        if (isset($map['ItemValue'])) {
            $model->itemValue = $map['ItemValue'];
        }

        return $model;
    }
}
