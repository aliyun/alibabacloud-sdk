<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesResponse\data\apiAuthorizationList;

use AlibabaCloud\Tea\Model;

class authorizationRecords extends Model
{
    /**
     * @description createTime
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description creator
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description endTime
     *
     * @var string
     */
    public $endTime;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'creatorId'   => 'CreatorId',
        'endTime'     => 'EndTime',
        'projectId'   => 'ProjectId',
    ];

    public function validate()
    {
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('creatorId', $this->creatorId, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('projectId', $this->projectId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizationRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
