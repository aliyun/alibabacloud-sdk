<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Tea\Model;

class supportedCustomInstanceTypeFamilies extends Model
{
    /**
     * @description SupportedCustomInstanceTypeFamily
     *
     * @var array
     */
    public $supportedCustomInstanceTypeFamily;
    protected $_name = [
        'supportedCustomInstanceTypeFamily' => 'SupportedCustomInstanceTypeFamily',
    ];

    public function validate()
    {
        Model::validateRequired('supportedCustomInstanceTypeFamily', $this->supportedCustomInstanceTypeFamily, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedCustomInstanceTypeFamily) {
            $res['SupportedCustomInstanceTypeFamily'] = [];
            if (null !== $this->supportedCustomInstanceTypeFamily) {
                $res['SupportedCustomInstanceTypeFamily'] = $this->supportedCustomInstanceTypeFamily;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedCustomInstanceTypeFamilies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedCustomInstanceTypeFamily'])) {
            if (!empty($map['SupportedCustomInstanceTypeFamily'])) {
                $model->supportedCustomInstanceTypeFamily = [];
                $model->supportedCustomInstanceTypeFamily = $map['SupportedCustomInstanceTypeFamily'];
            }
        }

        return $model;
    }
}
