<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponse\data\recommendInstanceType\zones;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponse\data\recommendInstanceType\zones\zone\networkTypes;
use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @var string
     */
    public $zoneNo;

    /**
     * @var networkTypes
     */
    public $networkTypes;
    protected $_name = [
        'zoneNo'       => 'ZoneNo',
        'networkTypes' => 'NetworkTypes',
    ];

    public function validate()
    {
        Model::validateRequired('zoneNo', $this->zoneNo, true);
        Model::validateRequired('networkTypes', $this->networkTypes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneNo) {
            $res['ZoneNo'] = $this->zoneNo;
        }
        if (null !== $this->networkTypes) {
            $res['NetworkTypes'] = null !== $this->networkTypes ? $this->networkTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneNo'])) {
            $model->zoneNo = $map['ZoneNo'];
        }
        if (isset($map['NetworkTypes'])) {
            $model->networkTypes = networkTypes::fromMap($map['NetworkTypes']);
        }

        return $model;
    }
}
