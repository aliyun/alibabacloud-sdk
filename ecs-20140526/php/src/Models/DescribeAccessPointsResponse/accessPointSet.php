<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccessPointsResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccessPointsResponse\accessPointSet\accessPointType;
use AlibabaCloud\Tea\Model;

class accessPointSet extends Model
{
    /**
     * @var array
     */
    public $accessPointType;
    protected $_name = [
        'accessPointType' => 'AccessPointType',
    ];

    public function validate()
    {
        Model::validateRequired('accessPointType', $this->accessPointType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointType) {
            $res['AccessPointType'] = [];
            if (null !== $this->accessPointType && \is_array($this->accessPointType)) {
                $n = 0;
                foreach ($this->accessPointType as $item) {
                    $res['AccessPointType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessPointSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointType'])) {
            if (!empty($map['AccessPointType'])) {
                $model->accessPointType = [];
                $n                      = 0;
                foreach ($map['AccessPointType'] as $item) {
                    $model->accessPointType[$n++] = null !== $item ? accessPointType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
