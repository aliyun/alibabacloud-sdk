<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponseBody;

use AlibabaCloud\Tea\Model;

class nodes extends Model {
    protected $_name = [
        'instanceType' => 'instance_type',
        'instanceRole' => 'instance_role',
        'expiredTime' => 'expired_time',
        'state' => 'state',
        'instanceName' => 'instance_name',
        'isAliyunNode' => 'is_aliyun_node',
        'hostName' => 'host_name',
        'imageId' => 'image_id',
        'instanceStatus' => 'instance_status',
        'instanceChargeType' => 'instance_charge_type',
        'source' => 'source',
        'errorMessage' => 'error_message',
        'nodeStatus' => 'node_status',
        'creationTime' => 'creation_time',
        'nodeName' => 'node_name',
        'instanceTypeFamily' => 'instance_type_family',
        'nodepoolId' => 'nodepool_id',
        'instanceId' => 'instance_id',
        'ipAddress' => 'ip_address',
    ];
    public function validate() {
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('instanceRole', $this->instanceRole, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('state', $this->state, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('isAliyunNode', $this->isAliyunNode, true);
        Model::validateRequired('hostName', $this->hostName, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('instanceStatus', $this->instanceStatus, true);
        Model::validateRequired('instanceChargeType', $this->instanceChargeType, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('nodeStatus', $this->nodeStatus, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('instanceTypeFamily', $this->instanceTypeFamily, true);
        Model::validateRequired('nodepoolId', $this->nodepoolId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('ipAddress', $this->ipAddress, true);
    }
    public function toMap() {
        $res = [];
        $res['instance_type'] = $this->instanceType;
        $res['instance_role'] = $this->instanceRole;
        $res['expired_time'] = $this->expiredTime;
        $res['state'] = $this->state;
        $res['instance_name'] = $this->instanceName;
        $res['is_aliyun_node'] = $this->isAliyunNode;
        $res['host_name'] = $this->hostName;
        $res['image_id'] = $this->imageId;
        $res['instance_status'] = $this->instanceStatus;
        $res['instance_charge_type'] = $this->instanceChargeType;
        $res['source'] = $this->source;
        $res['error_message'] = $this->errorMessage;
        $res['node_status'] = $this->nodeStatus;
        $res['creation_time'] = $this->creationTime;
        $res['node_name'] = $this->nodeName;
        $res['instance_type_family'] = $this->instanceTypeFamily;
        $res['nodepool_id'] = $this->nodepoolId;
        $res['instance_id'] = $this->instanceId;
        $res['ip_address'] = [];
        if(null !== $this->ipAddress){
            $res['ip_address'] = $this->ipAddress;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return nodes
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['instance_type'])){
            $model->instanceType = $map['instance_type'];
        }
        if(isset($map['instance_role'])){
            $model->instanceRole = $map['instance_role'];
        }
        if(isset($map['expired_time'])){
            $model->expiredTime = $map['expired_time'];
        }
        if(isset($map['state'])){
            $model->state = $map['state'];
        }
        if(isset($map['instance_name'])){
            $model->instanceName = $map['instance_name'];
        }
        if(isset($map['is_aliyun_node'])){
            $model->isAliyunNode = $map['is_aliyun_node'];
        }
        if(isset($map['host_name'])){
            $model->hostName = $map['host_name'];
        }
        if(isset($map['image_id'])){
            $model->imageId = $map['image_id'];
        }
        if(isset($map['instance_status'])){
            $model->instanceStatus = $map['instance_status'];
        }
        if(isset($map['instance_charge_type'])){
            $model->instanceChargeType = $map['instance_charge_type'];
        }
        if(isset($map['source'])){
            $model->source = $map['source'];
        }
        if(isset($map['error_message'])){
            $model->errorMessage = $map['error_message'];
        }
        if(isset($map['node_status'])){
            $model->nodeStatus = $map['node_status'];
        }
        if(isset($map['creation_time'])){
            $model->creationTime = $map['creation_time'];
        }
        if(isset($map['node_name'])){
            $model->nodeName = $map['node_name'];
        }
        if(isset($map['instance_type_family'])){
            $model->instanceTypeFamily = $map['instance_type_family'];
        }
        if(isset($map['nodepool_id'])){
            $model->nodepoolId = $map['nodepool_id'];
        }
        if(isset($map['instance_id'])){
            $model->instanceId = $map['instance_id'];
        }
        if(isset($map['ip_address'])){
            if(!empty($map['ip_address'])){
                $model->ipAddress = [];
                $model->ipAddress = $map['ip_address'];
            }
        }
        return $model;
    }
    /**
     * @description instance_type
     * @var string
     */
    public $instanceType;

    /**
     * @description instance_role
     * @var string
     */
    public $instanceRole;

    /**
     * @description expired_time
     * @var string
     */
    public $expiredTime;

    /**
     * @description state
     * @var string
     */
    public $state;

    /**
     * @description instance_name
     * @var string
     */
    public $instanceName;

    /**
     * @description is_aliyun_node
     * @var bool
     */
    public $isAliyunNode;

    /**
     * @description host_name
     * @var string
     */
    public $hostName;

    /**
     * @description image_id
     * @var string
     */
    public $imageId;

    /**
     * @description instance_status
     * @var string
     */
    public $instanceStatus;

    /**
     * @description instance_charge_type
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description source
     * @var string
     */
    public $source;

    /**
     * @description error_message
     * @var string
     */
    public $errorMessage;

    /**
     * @description node_status
     * @var string
     */
    public $nodeStatus;

    /**
     * @description creation_time
     * @var string
     */
    public $creationTime;

    /**
     * @description node_name
     * @var string
     */
    public $nodeName;

    /**
     * @description instance_type_family
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description nodepool_id
     * @var string
     */
    public $nodepoolId;

    /**
     * @description instance_id
     * @var string
     */
    public $instanceId;

    /**
     * @description ip_address
     * @var array
     */
    public $ipAddress;

}
