<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserBusinessBehaviorRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $statusKey;
    protected $_name = [
        'regionId'  => 'RegionId',
        'statusKey' => 'statusKey',
    ];

    public function validate()
    {
        Model::validateRequired('statusKey', $this->statusKey, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->statusKey) {
            $res['statusKey'] = $this->statusKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserBusinessBehaviorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['statusKey'])) {
            $model->statusKey = $map['statusKey'];
        }

        return $model;
    }
}
