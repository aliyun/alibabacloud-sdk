<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkInterfacePermissionRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $networkInterfacePermissionId;

    /**
     * @var bool
     */
    public $force;
    protected $_name = [
        'regionId'                     => 'RegionId',
        'networkInterfacePermissionId' => 'NetworkInterfacePermissionId',
        'force'                        => 'Force',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('networkInterfacePermissionId', $this->networkInterfacePermissionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->networkInterfacePermissionId) {
            $res['NetworkInterfacePermissionId'] = $this->networkInterfacePermissionId;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNetworkInterfacePermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['NetworkInterfacePermissionId'])) {
            $model->networkInterfacePermissionId = $map['NetworkInterfacePermissionId'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        return $model;
    }
}
