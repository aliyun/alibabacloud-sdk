<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Tea\Model;

class instanceTypes extends Model
{
    /**
     * @description supportedInstanceType
     *
     * @var array
     */
    public $supportedInstanceType;
    protected $_name = [
        'supportedInstanceType' => 'supportedInstanceType',
    ];

    public function validate()
    {
        Model::validateRequired('supportedInstanceType', $this->supportedInstanceType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedInstanceType) {
            $res['supportedInstanceType'] = $this->supportedInstanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['supportedInstanceType'])) {
            if (!empty($map['supportedInstanceType'])) {
                $model->supportedInstanceType = $map['supportedInstanceType'];
            }
        }

        return $model;
    }
}
