<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApplicationsResponse\data;

use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @description appId
     *
     * @var int
     */
    public $applicationId;

    /**
     * @description appName
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'applicationId'   => 'ApplicationId',
        'applicationName' => 'ApplicationName',
        'projectId'       => 'ProjectId',
    ];

    public function validate()
    {
        Model::validateRequired('applicationId', $this->applicationId, true);
        Model::validateRequired('applicationName', $this->applicationName, true);
        Model::validateRequired('projectId', $this->projectId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
