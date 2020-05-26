<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackGroupRequest extends Model
{
    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description StackGroupName
     *
     * @var string
     */
    public $stackGroupName;
    protected $_name = [
        'regionId'       => 'RegionId',
        'stackGroupName' => 'StackGroupName',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('stackGroupName', $this->stackGroupName, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['RegionId']       = $this->regionId;
        $res['StackGroupName'] = $this->stackGroupName;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackGroupRequest
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

        return $model;
    }
}
