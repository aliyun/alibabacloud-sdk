<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteQualityFollowerRequest extends Model
{
    /**
     * @description projectName
     *
     * @var string
     */
    public $projectName;

    /**
     * @description followerId
     *
     * @var int
     */
    public $followerId;
    protected $_name = [
        'projectName' => 'ProjectName',
        'followerId'  => 'FollowerId',
    ];

    public function validate()
    {
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('followerId', $this->followerId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->followerId) {
            $res['FollowerId'] = $this->followerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteQualityFollowerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['FollowerId'])) {
            $model->followerId = $map['FollowerId'];
        }

        return $model;
    }
}
