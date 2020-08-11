<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyImageSharePermissionRequest extends Model
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
    public $addAccount;

    /**
     * @var array
     */
    public $removeAccount;

    /**
     * @var string
     */
    public $launchPermission;
    protected $_name = [
        'regionId'         => 'RegionId',
        'imageId'          => 'ImageId',
        'addAccount'       => 'AddAccount',
        'removeAccount'    => 'RemoveAccount',
        'launchPermission' => 'LaunchPermission',
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
        if (null !== $this->addAccount) {
            $res['AddAccount'] = $this->addAccount;
        }
        if (null !== $this->removeAccount) {
            $res['RemoveAccount'] = $this->removeAccount;
        }
        if (null !== $this->launchPermission) {
            $res['LaunchPermission'] = $this->launchPermission;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyImageSharePermissionRequest
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
        if (isset($map['AddAccount'])) {
            if (!empty($map['AddAccount'])) {
                $model->addAccount = $map['AddAccount'];
            }
        }
        if (isset($map['RemoveAccount'])) {
            if (!empty($map['RemoveAccount'])) {
                $model->removeAccount = $map['RemoveAccount'];
            }
        }
        if (isset($map['LaunchPermission'])) {
            $model->launchPermission = $map['LaunchPermission'];
        }

        return $model;
    }
}
