<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigResponse\hostInstanceInfos;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceHAConfigResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceName
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description data.syncMode
     *
     * @var string
     */
    public $syncMode;

    /**
     * @description data.haMode
     *
     * @var string
     */
    public $HAMode;

    /**
     * @description data.hostInstanceInfos
     *
     * @var hostInstanceInfos
     */
    public $hostInstanceInfos;
    protected $_name = [
        'requestId'         => 'RequestId',
        'DBInstanceId'      => 'DBInstanceId',
        'syncMode'          => 'SyncMode',
        'HAMode'            => 'HAMode',
        'hostInstanceInfos' => 'HostInstanceInfos',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('syncMode', $this->syncMode, true);
        Model::validateRequired('HAMode', $this->HAMode, true);
        Model::validateRequired('hostInstanceInfos', $this->hostInstanceInfos, true);
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
        if (null !== $this->syncMode) {
            $res['SyncMode'] = $this->syncMode;
        }
        if (null !== $this->HAMode) {
            $res['HAMode'] = $this->HAMode;
        }
        if (null !== $this->hostInstanceInfos) {
            $res['HostInstanceInfos'] = null !== $this->hostInstanceInfos ? $this->hostInstanceInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceHAConfigResponse
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
        if (isset($map['SyncMode'])) {
            $model->syncMode = $map['SyncMode'];
        }
        if (isset($map['HAMode'])) {
            $model->HAMode = $map['HAMode'];
        }
        if (isset($map['HostInstanceInfos'])) {
            $model->hostInstanceInfos = hostInstanceInfos::fromMap($map['HostInstanceInfos']);
        }

        return $model;
    }
}
