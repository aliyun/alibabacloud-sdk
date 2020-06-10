<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Tea\Model;

class instanceTypeFamilies extends Model
{
    /**
     * @description supportedInstanceTypeFamily
     *
     * @var array
     */
    public $supportedInstanceTypeFamily;
    protected $_name = [
        'supportedInstanceTypeFamily' => 'supportedInstanceTypeFamily',
    ];

    public function validate()
    {
        Model::validateRequired('supportedInstanceTypeFamily', $this->supportedInstanceTypeFamily, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedInstanceTypeFamily) {
            $res['supportedInstanceTypeFamily'] = [];
            if (null !== $this->supportedInstanceTypeFamily) {
                $res['supportedInstanceTypeFamily'] = $this->supportedInstanceTypeFamily;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeFamilies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['supportedInstanceTypeFamily'])) {
            if (!empty($map['supportedInstanceTypeFamily'])) {
                $model->supportedInstanceTypeFamily = [];
                $model->supportedInstanceTypeFamily = $map['supportedInstanceTypeFamily'];
            }
        }

        return $model;
    }
}
