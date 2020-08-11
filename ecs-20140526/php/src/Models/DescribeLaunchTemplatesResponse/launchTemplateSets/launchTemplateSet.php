<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesResponse\launchTemplateSets;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesResponse\launchTemplateSets\launchTemplateSet\tags;
use AlibabaCloud\Tea\Model;

class launchTemplateSet extends Model
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
     * @var int
     */
    public $defaultVersionNumber;

    /**
     * @var int
     */
    public $latestVersionNumber;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'createTime'           => 'CreateTime',
        'modifiedTime'         => 'ModifiedTime',
        'launchTemplateId'     => 'LaunchTemplateId',
        'launchTemplateName'   => 'LaunchTemplateName',
        'defaultVersionNumber' => 'DefaultVersionNumber',
        'latestVersionNumber'  => 'LatestVersionNumber',
        'createdBy'            => 'CreatedBy',
        'resourceGroupId'      => 'ResourceGroupId',
        'tags'                 => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('launchTemplateId', $this->launchTemplateId, true);
        Model::validateRequired('launchTemplateName', $this->launchTemplateName, true);
        Model::validateRequired('defaultVersionNumber', $this->defaultVersionNumber, true);
        Model::validateRequired('latestVersionNumber', $this->latestVersionNumber, true);
        Model::validateRequired('createdBy', $this->createdBy, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('tags', $this->tags, true);
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
        if (null !== $this->defaultVersionNumber) {
            $res['DefaultVersionNumber'] = $this->defaultVersionNumber;
        }
        if (null !== $this->latestVersionNumber) {
            $res['LatestVersionNumber'] = $this->latestVersionNumber;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateSet
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
        if (isset($map['DefaultVersionNumber'])) {
            $model->defaultVersionNumber = $map['DefaultVersionNumber'];
        }
        if (isset($map['LatestVersionNumber'])) {
            $model->latestVersionNumber = $map['LatestVersionNumber'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
