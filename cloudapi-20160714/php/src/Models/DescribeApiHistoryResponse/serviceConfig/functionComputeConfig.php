<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse\serviceConfig;

use AlibabaCloud\Tea\Model;

class functionComputeConfig extends Model
{
    /**
     * @description fcRegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description serviceName
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description functionName
     *
     * @var string
     */
    public $functionName;

    /**
     * @description roleArn
     *
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'regionId'     => 'RegionId',
        'serviceName'  => 'ServiceName',
        'functionName' => 'FunctionName',
        'roleArn'      => 'RoleArn',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('serviceName', $this->serviceName, true);
        Model::validateRequired('functionName', $this->functionName, true);
        Model::validateRequired('roleArn', $this->roleArn, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return functionComputeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        return $model;
    }
}
