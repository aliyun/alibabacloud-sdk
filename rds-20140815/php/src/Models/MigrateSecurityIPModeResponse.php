<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class MigrateSecurityIPModeResponse extends Model
{
    /**
     * @description description: The ID of the request. ;
     *
     * @var string
     */
    public $requestId;

    /**
     * @description description: The ID of the instance. ;
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description description: The mode of the whitelist after the switch. Valid values:**safety**.;
     *
     * @var string
     */
    public $securityIPMode;
    protected $_name = [
        'requestId'      => 'RequestId',
        'DBInstanceId'   => 'DBInstanceId',
        'securityIPMode' => 'SecurityIPMode',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('securityIPMode', $this->securityIPMode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->securityIPMode) {
            $res['SecurityIPMode'] = $this->securityIPMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateSecurityIPModeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['SecurityIPMode'])) {
            $model->securityIPMode = $map['SecurityIPMode'];
        }

        return $model;
    }
}
