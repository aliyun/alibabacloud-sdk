<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostTypesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $dedicatedHostType;

    /**
     * @var string
     */
    public $supportedInstanceTypeFamily;
    protected $_name = [
        'regionId'                    => 'RegionId',
        'dedicatedHostType'           => 'DedicatedHostType',
        'supportedInstanceTypeFamily' => 'SupportedInstanceTypeFamily',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }
        if (null !== $this->supportedInstanceTypeFamily) {
            $res['SupportedInstanceTypeFamily'] = $this->supportedInstanceTypeFamily;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DedicatedHostType'])) {
            $model->dedicatedHostType = $map['DedicatedHostType'];
        }
        if (isset($map['SupportedInstanceTypeFamily'])) {
            $model->supportedInstanceTypeFamily = $map['SupportedInstanceTypeFamily'];
        }

        return $model;
    }
}
