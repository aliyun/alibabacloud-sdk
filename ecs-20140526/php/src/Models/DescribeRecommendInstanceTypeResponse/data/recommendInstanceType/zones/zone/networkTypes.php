<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponse\data\recommendInstanceType\zones\zone;

use AlibabaCloud\Tea\Model;

class networkTypes extends Model
{
    /**
     * @description NetworkType
     *
     * @var array
     */
    public $networkType;
    protected $_name = [
        'networkType' => 'NetworkType',
    ];

    public function validate()
    {
        Model::validateRequired('networkType', $this->networkType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkType) {
            $res['NetworkType'] = [];
            if (null !== $this->networkType) {
                $res['NetworkType'] = $this->networkType;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkType'])) {
            if (!empty($map['NetworkType'])) {
                $model->networkType = [];
                $model->networkType = $map['NetworkType'];
            }
        }

        return $model;
    }
}
