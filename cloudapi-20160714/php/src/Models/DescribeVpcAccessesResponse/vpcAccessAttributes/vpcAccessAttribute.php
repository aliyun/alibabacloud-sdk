<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVpcAccessesResponse\vpcAccessAttributes;

use AlibabaCloud\Tea\Model;

class vpcAccessAttribute extends Model
{
    /**
     * @description vpcId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description port
     *
     * @var int
     */
    public $port;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'vpcId'       => 'VpcId',
        'instanceId'  => 'InstanceId',
        'createdTime' => 'CreatedTime',
        'port'        => 'Port',
        'regionId'    => 'RegionId',
        'name'        => 'Name',
    ];

    public function validate()
    {
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('name', $this->name, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcAccessAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
