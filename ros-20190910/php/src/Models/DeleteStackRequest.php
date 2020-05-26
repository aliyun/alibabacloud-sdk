<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DeleteStackRequest extends Model
{
    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

    /**
     * @description RetainAllResources
     *
     * @var bool
     */
    public $retainAllResources;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description RetainResources
     *
     * @var array
     */
    public $retainResources;

    /**
     * @description RoleName
     *
     * @var string
     */
    public $ramRoleName;
    protected $_name = [
        'stackId'            => 'StackId',
        'retainAllResources' => 'RetainAllResources',
        'regionId'           => 'RegionId',
        'retainResources'    => 'RetainResources',
        'ramRoleName'        => 'RamRoleName',
    ];

    public function validate()
    {
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res                       = [];
        $res['StackId']            = $this->stackId;
        $res['RetainAllResources'] = $this->retainAllResources;
        $res['RegionId']           = $this->regionId;
        $res['RetainResources']    = [];
        if (null !== $this->retainResources) {
            $res['RetainResources'] = $this->retainResources;
        }
        $res['RamRoleName'] = $this->ramRoleName;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['RetainAllResources'])) {
            $model->retainAllResources = $map['RetainAllResources'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RetainResources'])) {
            if (!empty($map['RetainResources'])) {
                $model->retainResources = [];
                $model->retainResources = $map['RetainResources'];
            }
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }

        return $model;
    }
}
