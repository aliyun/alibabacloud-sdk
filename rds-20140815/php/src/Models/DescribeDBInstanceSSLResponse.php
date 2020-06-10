<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceSSLResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.certCommonName
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description data.sslExpiredTime
     *
     * @var string
     */
    public $SSLExpireTime;

    /**
     * @description data.sslEnabled
     *
     * @var string
     */
    public $requireUpdate;

    /**
     * @description data.requireUpdateReason
     *
     * @var string
     */
    public $requireUpdateReason;
    protected $_name = [
        'requestId'           => 'RequestId',
        'connectionString'    => 'ConnectionString',
        'SSLExpireTime'       => 'SSLExpireTime',
        'requireUpdate'       => 'RequireUpdate',
        'requireUpdateReason' => 'RequireUpdateReason',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('connectionString', $this->connectionString, true);
        Model::validateRequired('SSLExpireTime', $this->SSLExpireTime, true);
        Model::validateRequired('requireUpdate', $this->requireUpdate, true);
        Model::validateRequired('requireUpdateReason', $this->requireUpdateReason, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->SSLExpireTime) {
            $res['SSLExpireTime'] = $this->SSLExpireTime;
        }
        if (null !== $this->requireUpdate) {
            $res['RequireUpdate'] = $this->requireUpdate;
        }
        if (null !== $this->requireUpdateReason) {
            $res['RequireUpdateReason'] = $this->requireUpdateReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['SSLExpireTime'])) {
            $model->SSLExpireTime = $map['SSLExpireTime'];
        }
        if (isset($map['RequireUpdate'])) {
            $model->requireUpdate = $map['RequireUpdate'];
        }
        if (isset($map['RequireUpdateReason'])) {
            $model->requireUpdateReason = $map['RequireUpdateReason'];
        }

        return $model;
    }
}
