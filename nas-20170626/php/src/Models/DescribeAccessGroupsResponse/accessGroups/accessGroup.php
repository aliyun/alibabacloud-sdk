<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessGroupsResponse\accessGroups;

use AlibabaCloud\Tea\Model;

class accessGroup extends Model
{
    /**
     * @var string
     */
    public $accessGroupName;

    /**
     * @var string
     */
    public $accessGroupType;

    /**
     * @var int
     */
    public $ruleCount;

    /**
     * @var int
     */
    public $mountTargetCount;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createTime;
    protected $_name = [
        'accessGroupName'  => 'AccessGroupName',
        'accessGroupType'  => 'AccessGroupType',
        'ruleCount'        => 'RuleCount',
        'mountTargetCount' => 'MountTargetCount',
        'description'      => 'Description',
        'createTime'       => 'CreateTime',
    ];

    public function validate()
    {
        Model::validateRequired('accessGroupName', $this->accessGroupName, true);
        Model::validateRequired('accessGroupType', $this->accessGroupType, true);
        Model::validateRequired('ruleCount', $this->ruleCount, true);
        Model::validateRequired('mountTargetCount', $this->mountTargetCount, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createTime', $this->createTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }
        if (null !== $this->accessGroupType) {
            $res['AccessGroupType'] = $this->accessGroupType;
        }
        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }
        if (null !== $this->mountTargetCount) {
            $res['MountTargetCount'] = $this->mountTargetCount;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['AccessGroupType'])) {
            $model->accessGroupType = $map['AccessGroupType'];
        }
        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }
        if (isset($map['MountTargetCount'])) {
            $model->mountTargetCount = $map['MountTargetCount'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
