<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponseBody\nodes;

use AlibabaCloud\SDK\CS\V20151215\Models\nodes\ipAddress;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description instance_id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description instance_role
     *
     * @var string
     */
    public $instanceRole;

    /**
     * @description instance_name
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description host_name
     *
     * @var string
     */
    public $hostName;

    /**
     * @description node_name
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description instance_type
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description instance_charge_type
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description image_id
     *
     * @var string
     */
    public $imageId;

    /**
     * @description instance_type_family
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description docker_version
     *
     * @var string
     */
    public $dockerVersion;

    /**
     * @description agent_version
     *
     * @var string
     */
    public $agentVersion;

    /**
     * @description is_leader
     *
     * @var bool
     */
    public $isLeader;

    /**
     * @description containers
     *
     * @var int
     */
    public $containers;

    /**
     * @description is_aliyun_node
     *
     * @var bool
     */
    public $isAliyunNode;

    /**
     * @description state
     *
     * @var string
     */
    public $state;

    /**
     * @description nodepool_id
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description error_message
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description ip_address
     *
     * @var nodes.ipAddress
     */
    public $ipAddress;
    protected $_name = [
        'instanceId'         => 'instance_id',
        'instanceRole'       => 'instance_role',
        'instanceName'       => 'instance_name',
        'hostName'           => 'host_name',
        'nodeName'           => 'node_name',
        'instanceType'       => 'instance_type',
        'instanceChargeType' => 'instance_charge_type',
        'imageId'            => 'image_id',
        'instanceTypeFamily' => 'instance_type_family',
        'dockerVersion'      => 'docker_version',
        'agentVersion'       => 'agent_version',
        'isLeader'           => 'is_leader',
        'containers'         => 'containers',
        'isAliyunNode'       => 'is_aliyun_node',
        'state'              => 'state',
        'nodepoolId'         => 'nodepool_id',
        'errorMessage'       => 'error_message',
        'ipAddress'          => 'ip_address',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceRole', $this->instanceRole, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('hostName', $this->hostName, true);
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('instanceChargeType', $this->instanceChargeType, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('instanceTypeFamily', $this->instanceTypeFamily, true);
        Model::validateRequired('dockerVersion', $this->dockerVersion, true);
        Model::validateRequired('agentVersion', $this->agentVersion, true);
        Model::validateRequired('isLeader', $this->isLeader, true);
        Model::validateRequired('containers', $this->containers, true);
        Model::validateRequired('isAliyunNode', $this->isAliyunNode, true);
        Model::validateRequired('state', $this->state, true);
        Model::validateRequired('nodepoolId', $this->nodepoolId, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('ipAddress', $this->ipAddress, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['instance_id']          = $this->instanceId;
        $res['instance_role']        = $this->instanceRole;
        $res['instance_name']        = $this->instanceName;
        $res['host_name']            = $this->hostName;
        $res['node_name']            = $this->nodeName;
        $res['instance_type']        = $this->instanceType;
        $res['instance_charge_type'] = $this->instanceChargeType;
        $res['image_id']             = $this->imageId;
        $res['instance_type_family'] = $this->instanceTypeFamily;
        $res['docker_version']       = $this->dockerVersion;
        $res['agent_version']        = $this->agentVersion;
        $res['is_leader']            = $this->isLeader;
        $res['containers']           = $this->containers;
        $res['is_aliyun_node']       = $this->isAliyunNode;
        $res['state']                = $this->state;
        $res['nodepool_id']          = $this->nodepoolId;
        $res['error_message']        = $this->errorMessage;
        $res['ip_address']           = null !== $this->ipAddress ? $this->ipAddress->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }
        if (isset($map['instance_role'])) {
            $model->instanceRole = $map['instance_role'];
        }
        if (isset($map['instance_name'])) {
            $model->instanceName = $map['instance_name'];
        }
        if (isset($map['host_name'])) {
            $model->hostName = $map['host_name'];
        }
        if (isset($map['node_name'])) {
            $model->nodeName = $map['node_name'];
        }
        if (isset($map['instance_type'])) {
            $model->instanceType = $map['instance_type'];
        }
        if (isset($map['instance_charge_type'])) {
            $model->instanceChargeType = $map['instance_charge_type'];
        }
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['instance_type_family'])) {
            $model->instanceTypeFamily = $map['instance_type_family'];
        }
        if (isset($map['docker_version'])) {
            $model->dockerVersion = $map['docker_version'];
        }
        if (isset($map['agent_version'])) {
            $model->agentVersion = $map['agent_version'];
        }
        if (isset($map['is_leader'])) {
            $model->isLeader = $map['is_leader'];
        }
        if (isset($map['containers'])) {
            $model->containers = $map['containers'];
        }
        if (isset($map['is_aliyun_node'])) {
            $model->isAliyunNode = $map['is_aliyun_node'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }
        if (isset($map['error_message'])) {
            $model->errorMessage = $map['error_message'];
        }
        if (isset($map['ip_address'])) {
            $model->ipAddress = ipAddress::fromMap($map['ip_address']);
        }

        return $model;
    }
}
