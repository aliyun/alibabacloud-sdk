<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceRamRoleResponse\instanceRamRoleSets;
use AlibabaCloud\Tea\Model;

class DescribeInstanceRamRoleResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var instanceRamRoleSets
     */
    public $instanceRamRoleSets;
    protected $_name = [
        'requestId'           => 'RequestId',
        'regionId'            => 'RegionId',
        'totalCount'          => 'TotalCount',
        'instanceRamRoleSets' => 'InstanceRamRoleSets',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('instanceRamRoleSets', $this->instanceRamRoleSets, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->instanceRamRoleSets) {
            $res['InstanceRamRoleSets'] = null !== $this->instanceRamRoleSets ? $this->instanceRamRoleSets->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceRamRoleResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['InstanceRamRoleSets'])) {
            $model->instanceRamRoleSets = instanceRamRoleSets::fromMap($map['InstanceRamRoleSets']);
        }

        return $model;
    }
}
