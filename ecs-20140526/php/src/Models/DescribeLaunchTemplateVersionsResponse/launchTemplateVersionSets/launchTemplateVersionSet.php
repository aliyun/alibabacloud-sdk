<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponse\launchTemplateVersionSets;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponse\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData;
use AlibabaCloud\Tea\Model;

class launchTemplateVersionSet extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $launchTemplateName;

    /**
     * @var bool
     */
    public $defaultVersion;

    /**
     * @var int
     */
    public $versionNumber;

    /**
     * @var string
     */
    public $versionDescription;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var launchTemplateData
     */
    public $launchTemplateData;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'modifiedTime'       => 'ModifiedTime',
        'launchTemplateId'   => 'LaunchTemplateId',
        'launchTemplateName' => 'LaunchTemplateName',
        'defaultVersion'     => 'DefaultVersion',
        'versionNumber'      => 'VersionNumber',
        'versionDescription' => 'VersionDescription',
        'createdBy'          => 'CreatedBy',
        'launchTemplateData' => 'LaunchTemplateData',
    ];

    public function validate()
    {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('launchTemplateId', $this->launchTemplateId, true);
        Model::validateRequired('launchTemplateName', $this->launchTemplateName, true);
        Model::validateRequired('defaultVersion', $this->defaultVersion, true);
        Model::validateRequired('versionNumber', $this->versionNumber, true);
        Model::validateRequired('versionDescription', $this->versionDescription, true);
        Model::validateRequired('createdBy', $this->createdBy, true);
        Model::validateRequired('launchTemplateData', $this->launchTemplateData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateName) {
            $res['LaunchTemplateName'] = $this->launchTemplateName;
        }
        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }
        if (null !== $this->versionNumber) {
            $res['VersionNumber'] = $this->versionNumber;
        }
        if (null !== $this->versionDescription) {
            $res['VersionDescription'] = $this->versionDescription;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->launchTemplateData) {
            $res['LaunchTemplateData'] = null !== $this->launchTemplateData ? $this->launchTemplateData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateVersionSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateName'])) {
            $model->launchTemplateName = $map['LaunchTemplateName'];
        }
        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }
        if (isset($map['VersionNumber'])) {
            $model->versionNumber = $map['VersionNumber'];
        }
        if (isset($map['VersionDescription'])) {
            $model->versionDescription = $map['VersionDescription'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['LaunchTemplateData'])) {
            $model->launchTemplateData = launchTemplateData::fromMap($map['LaunchTemplateData']);
        }

        return $model;
    }
}
