<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApplicationResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description appCode
     *
     * @var string
     */
    public $applicationCode;

    /**
     * @description appId
     *
     * @var int
     */
    public $applicationId;

    /**
     * @description appKey
     *
     * @var string
     */
    public $applicationKey;

    /**
     * @description appName
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description appSecret
     *
     * @var string
     */
    public $applicationSecret;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'applicationCode'   => 'ApplicationCode',
        'applicationId'     => 'ApplicationId',
        'applicationKey'    => 'ApplicationKey',
        'applicationName'   => 'ApplicationName',
        'applicationSecret' => 'ApplicationSecret',
        'projectId'         => 'ProjectId',
    ];

    public function validate()
    {
        Model::validateRequired('applicationCode', $this->applicationCode, true);
        Model::validateRequired('applicationId', $this->applicationId, true);
        Model::validateRequired('applicationKey', $this->applicationKey, true);
        Model::validateRequired('applicationName', $this->applicationName, true);
        Model::validateRequired('applicationSecret', $this->applicationSecret, true);
        Model::validateRequired('projectId', $this->projectId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->applicationKey) {
            $res['ApplicationKey'] = $this->applicationKey;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->applicationSecret) {
            $res['ApplicationSecret'] = $this->applicationSecret;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['ApplicationKey'])) {
            $model->applicationKey = $map['ApplicationKey'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ApplicationSecret'])) {
            $model->applicationSecret = $map['ApplicationSecret'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
