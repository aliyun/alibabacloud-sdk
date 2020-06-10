<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponse\trafficControls\trafficControl\specialPolicies;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponse\trafficControls\trafficControl\specialPolicies\specialPolicy\specials;
use AlibabaCloud\Tea\Model;

class specialPolicy extends Model
{
    /**
     * @description specialType
     *
     * @var string
     */
    public $specialType;

    /**
     * @description specialPolicies
     *
     * @var specials
     */
    public $specials;
    protected $_name = [
        'specialType' => 'SpecialType',
        'specials'    => 'Specials',
    ];

    public function validate()
    {
        Model::validateRequired('specialType', $this->specialType, true);
        Model::validateRequired('specials', $this->specials, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->specialType) {
            $res['SpecialType'] = $this->specialType;
        }
        if (null !== $this->specials) {
            $res['Specials'] = null !== $this->specials ? $this->specials->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specialPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpecialType'])) {
            $model->specialType = $map['SpecialType'];
        }
        if (isset($map['Specials'])) {
            $model->specials = specials::fromMap($map['Specials']);
        }

        return $model;
    }
}
