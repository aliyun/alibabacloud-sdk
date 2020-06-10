<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse\serviceConfig;

use AlibabaCloud\Tea\Model;

class vpcConfig extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description vpcId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description displayInstanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description port
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'name'       => 'Name',
        'vpcId'      => 'VpcId',
        'instanceId' => 'InstanceId',
        'port'       => 'Port',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('port', $this->port, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
