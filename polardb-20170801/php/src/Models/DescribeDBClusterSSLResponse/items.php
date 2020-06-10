<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterSSLResponse;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description endpointName
     *
     * @var string
     */
    public $DBEndpointId;

    /**
     * @description sslEnabled
     *
     * @var string
     */
    public $SSLEnabled;

    /**
     * @description certCommonName
     *
     * @var string
     */
    public $SSLConnectionString;

    /**
     * @description sslExpiredTime
     *
     * @var string
     */
    public $SSLExpireTime;
    protected $_name = [
        'DBEndpointId'        => 'DBEndpointId',
        'SSLEnabled'          => 'SSLEnabled',
        'SSLConnectionString' => 'SSLConnectionString',
        'SSLExpireTime'       => 'SSLExpireTime',
    ];

    public function validate()
    {
        Model::validateRequired('DBEndpointId', $this->DBEndpointId, true);
        Model::validateRequired('SSLEnabled', $this->SSLEnabled, true);
        Model::validateRequired('SSLConnectionString', $this->SSLConnectionString, true);
        Model::validateRequired('SSLExpireTime', $this->SSLExpireTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
        }
        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }
        if (null !== $this->SSLConnectionString) {
            $res['SSLConnectionString'] = $this->SSLConnectionString;
        }
        if (null !== $this->SSLExpireTime) {
            $res['SSLExpireTime'] = $this->SSLExpireTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
        }
        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }
        if (isset($map['SSLConnectionString'])) {
            $model->SSLConnectionString = $map['SSLConnectionString'];
        }
        if (isset($map['SSLExpireTime'])) {
            $model->SSLExpireTime = $map['SSLExpireTime'];
        }

        return $model;
    }
}
