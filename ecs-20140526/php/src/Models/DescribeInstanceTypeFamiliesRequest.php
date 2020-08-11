<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceTypeFamiliesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $generation;
    protected $_name = [
        'regionId'   => 'RegionId',
        'generation' => 'Generation',
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
        if (null !== $this->generation) {
            $res['Generation'] = $this->generation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceTypeFamiliesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Generation'])) {
            $model->generation = $map['Generation'];
        }

        return $model;
    }
}
