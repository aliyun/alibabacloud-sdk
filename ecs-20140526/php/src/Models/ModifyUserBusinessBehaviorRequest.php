<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserBusinessBehaviorRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $statusKey;

    /**
     * @var string
     */
    public $statusValue;
    protected $_name = [
        'regionId'    => 'RegionId',
        'statusKey'   => 'statusKey',
        'statusValue' => 'statusValue',
    ];

    public function validate()
    {
        Model::validateRequired('statusKey', $this->statusKey, true);
        Model::validateRequired('statusValue', $this->statusValue, true);
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
        if (null !== $this->statusValue) {
            $res['statusValue'] = $this->statusValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUserBusinessBehaviorRequest
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
        if (isset($map['statusValue'])) {
            $model->statusValue = $map['statusValue'];
        }

        return $model;
    }
}
