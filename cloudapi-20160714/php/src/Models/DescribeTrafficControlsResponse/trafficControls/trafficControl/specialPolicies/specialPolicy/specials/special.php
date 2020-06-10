<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponse\trafficControls\trafficControl\specialPolicies\specialPolicy\specials;

use AlibabaCloud\Tea\Model;

class special extends Model
{
    /**
     * @description specialKey
     *
     * @var string
     */
    public $specialKey;

    /**
     * @description trafficValue
     *
     * @var int
     */
    public $trafficValue;
    protected $_name = [
        'specialKey'   => 'SpecialKey',
        'trafficValue' => 'TrafficValue',
    ];

    public function validate()
    {
        Model::validateRequired('specialKey', $this->specialKey, true);
        Model::validateRequired('trafficValue', $this->trafficValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->specialKey) {
            $res['SpecialKey'] = $this->specialKey;
        }
        if (null !== $this->trafficValue) {
            $res['TrafficValue'] = $this->trafficValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return special
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpecialKey'])) {
            $model->specialKey = $map['SpecialKey'];
        }
        if (isset($map['TrafficValue'])) {
            $model->trafficValue = $map['TrafficValue'];
        }

        return $model;
    }
}
