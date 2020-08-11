<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DeleteLaunchTemplateVersionRequest extends Model
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
     * @var array
     */
    public $deleteVersion;
    protected $_name = [
        'regionId'           => 'RegionId',
        'launchTemplateId'   => 'LaunchTemplateId',
        'launchTemplateName' => 'LaunchTemplateName',
        'deleteVersion'      => 'DeleteVersion',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('deleteVersion', $this->deleteVersion, true);
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
        if (null !== $this->deleteVersion) {
            $res['DeleteVersion'] = $this->deleteVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLaunchTemplateVersionRequest
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
        if (isset($map['DeleteVersion'])) {
            if (!empty($map['DeleteVersion'])) {
                $model->deleteVersion = $map['DeleteVersion'];
            }
        }

        return $model;
    }
}
