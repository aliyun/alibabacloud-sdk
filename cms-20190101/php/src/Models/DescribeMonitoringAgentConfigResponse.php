<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMonitoringAgentConfigResponse extends Model
{
    /**
     * @description errorCode
     *
     * @var string
     */
    public $code;

    /**
     * @description errorMessage
     *
     * @var string
     */
    public $message;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description autoInstall
     *
     * @var bool
     */
    public $autoInstall;

    /**
     * @description enableInstallAgentNewECS
     *
     * @var bool
     */
    public $enableInstallAgentNewECS;

    /**
     * @description enableActiveAlert
     *
     * @var string
     */
    public $enableActiveAlert;
    protected $_name = [
        'code'                     => 'Code',
        'message'                  => 'Message',
        'success'                  => 'Success',
        'requestId'                => 'RequestId',
        'autoInstall'              => 'AutoInstall',
        'enableInstallAgentNewECS' => 'EnableInstallAgentNewECS',
        'enableActiveAlert'        => 'EnableActiveAlert',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('autoInstall', $this->autoInstall, true);
        Model::validateRequired('enableInstallAgentNewECS', $this->enableInstallAgentNewECS, true);
        Model::validateRequired('enableActiveAlert', $this->enableActiveAlert, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->autoInstall) {
            $res['AutoInstall'] = $this->autoInstall;
        }
        if (null !== $this->enableInstallAgentNewECS) {
            $res['EnableInstallAgentNewECS'] = $this->enableInstallAgentNewECS;
        }
        if (null !== $this->enableActiveAlert) {
            $res['EnableActiveAlert'] = $this->enableActiveAlert;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitoringAgentConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AutoInstall'])) {
            $model->autoInstall = $map['AutoInstall'];
        }
        if (isset($map['EnableInstallAgentNewECS'])) {
            $model->enableInstallAgentNewECS = $map['EnableInstallAgentNewECS'];
        }
        if (isset($map['EnableActiveAlert'])) {
            $model->enableActiveAlert = $map['EnableActiveAlert'];
        }

        return $model;
    }
}
