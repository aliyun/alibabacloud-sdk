<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyLaunchTemplateDefaultVersionRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $launchTemplateName;

    /**
     * @var int
     */
    public $defaultVersionNumber;
    protected $_name = [
        'regionId'             => 'RegionId',
        'launchTemplateId'     => 'LaunchTemplateId',
        'launchTemplateName'   => 'LaunchTemplateName',
        'defaultVersionNumber' => 'DefaultVersionNumber',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('defaultVersionNumber', $this->defaultVersionNumber, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateName) {
            $res['LaunchTemplateName'] = $this->launchTemplateName;
        }
        if (null !== $this->defaultVersionNumber) {
            $res['DefaultVersionNumber'] = $this->defaultVersionNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLaunchTemplateDefaultVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateName'])) {
            $model->launchTemplateName = $map['LaunchTemplateName'];
        }
        if (isset($map['DefaultVersionNumber'])) {
            $model->defaultVersionNumber = $map['DefaultVersionNumber'];
        }

        return $model;
    }
}
