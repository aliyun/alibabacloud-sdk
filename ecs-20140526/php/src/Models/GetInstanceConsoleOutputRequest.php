<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceConsoleOutputRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $removeSymbols;
    protected $_name = [
        'regionId'      => 'RegionId',
        'instanceId'    => 'InstanceId',
        'removeSymbols' => 'RemoveSymbols',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->removeSymbols) {
            $res['RemoveSymbols'] = $this->removeSymbols;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceConsoleOutputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RemoveSymbols'])) {
            $model->removeSymbols = $map['RemoveSymbols'];
        }

        return $model;
    }
}
