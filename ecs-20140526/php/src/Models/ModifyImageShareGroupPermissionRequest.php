<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyImageShareGroupPermissionRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var array
     */
    public $addGroup;

    /**
     * @var array
     */
    public $removeGroup;
    protected $_name = [
        'regionId'    => 'RegionId',
        'imageId'     => 'ImageId',
        'addGroup'    => 'AddGroup',
        'removeGroup' => 'RemoveGroup',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('imageId', $this->imageId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->addGroup) {
            $res['AddGroup'] = $this->addGroup;
        }
        if (null !== $this->removeGroup) {
            $res['RemoveGroup'] = $this->removeGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyImageShareGroupPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['AddGroup'])) {
            if (!empty($map['AddGroup'])) {
                $model->addGroup = $map['AddGroup'];
            }
        }
        if (isset($map['RemoveGroup'])) {
            if (!empty($map['RemoveGroup'])) {
                $model->removeGroup = $map['RemoveGroup'];
            }
        }

        return $model;
    }
}
