<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Tea\Model;

class supportedInstanceTypeFamilies extends Model
{
    /**
     * @description SupportedInstanceTypeFamily
     *
     * @var array
     */
    public $supportedInstanceTypeFamily;
    protected $_name = [
        'supportedInstanceTypeFamily' => 'SupportedInstanceTypeFamily',
    ];

    public function validate()
    {
        Model::validateRequired('supportedInstanceTypeFamily', $this->supportedInstanceTypeFamily, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedInstanceTypeFamily) {
            $res['SupportedInstanceTypeFamily'] = $this->supportedInstanceTypeFamily;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedInstanceTypeFamilies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedInstanceTypeFamily'])) {
            if (!empty($map['SupportedInstanceTypeFamily'])) {
                $model->supportedInstanceTypeFamily = $map['SupportedInstanceTypeFamily'];
            }
        }

        return $model;
    }
}
