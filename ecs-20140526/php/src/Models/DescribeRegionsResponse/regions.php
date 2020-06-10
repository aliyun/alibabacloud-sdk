<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRegionsResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRegionsResponse\regions\region;
use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @description Region
     *
     * @var array
     */
    public $region;
    protected $_name = [
        'region' => 'Region',
    ];

    public function validate()
    {
        Model::validateRequired('region', $this->region, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = [];
            if (null !== $this->region && \is_array($this->region)) {
                $n = 0;
                foreach ($this->region as $item) {
                    $res['Region'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            if (!empty($map['Region'])) {
                $model->region = [];
                $n             = 0;
                foreach ($map['Region'] as $item) {
                    $model->region[$n++] = null !== $item ? region::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
