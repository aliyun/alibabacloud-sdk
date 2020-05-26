<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class SetDeletionProtectionRequest extends Model
{
    /**
     * @description StackId
     *
     * @var string
     */
    public $stackId;

    /**
     * @description DeletionProtection
     *
     * @var string
     */
    public $deletionProtection;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'stackId'            => 'StackId',
        'deletionProtection' => 'DeletionProtection',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('deletionProtection', $this->deletionProtection, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res                       = [];
        $res['StackId']            = $this->stackId;
        $res['DeletionProtection'] = $this->deletionProtection;
        $res['RegionId']           = $this->regionId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDeletionProtectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
