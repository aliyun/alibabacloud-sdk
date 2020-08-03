<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $stackInstanceAccountId;

    /**
     * @var string
     */
    public $stackInstanceRegionId;
    protected $_name = [
        'regionId'               => 'RegionId',
        'stackGroupName'         => 'StackGroupName',
        'stackInstanceAccountId' => 'StackInstanceAccountId',
        'stackInstanceRegionId'  => 'StackInstanceRegionId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('stackGroupName', $this->stackGroupName, true);
        Model::validateRequired('stackInstanceAccountId', $this->stackInstanceAccountId, true);
        Model::validateRequired('stackInstanceRegionId', $this->stackInstanceRegionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->stackInstanceAccountId) {
            $res['StackInstanceAccountId'] = $this->stackInstanceAccountId;
        }
        if (null !== $this->stackInstanceRegionId) {
            $res['StackInstanceRegionId'] = $this->stackInstanceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['StackInstanceAccountId'])) {
            $model->stackInstanceAccountId = $map['StackInstanceAccountId'];
        }
        if (isset($map['StackInstanceRegionId'])) {
            $model->stackInstanceRegionId = $map['StackInstanceRegionId'];
        }

        return $model;
    }
}
