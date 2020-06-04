<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterResourcesResponseBody extends Model {
    protected $_name = [
        'instanceId' => 'instance_id',
        'resourceType' => 'resource_type',
        'resourceInfo' => 'resource_info',
        'state' => 'state',
    ];
    public function validate() {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('resourceInfo', $this->resourceInfo, true);
        Model::validateRequired('state', $this->state, true);
    }
    public function toMap() {
        $res = [];
        $res['instance_id'] = $this->instanceId;
        $res['resource_type'] = $this->resourceType;
        $res['resource_info'] = $this->resourceInfo;
        $res['state'] = $this->state;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeClusterResourcesResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['instance_id'])){
            $model->instanceId = $map['instance_id'];
        }
        if(isset($map['resource_type'])){
            $model->resourceType = $map['resource_type'];
        }
        if(isset($map['resource_info'])){
            $model->resourceInfo = $map['resource_info'];
        }
        if(isset($map['state'])){
            $model->state = $map['state'];
        }
        return $model;
    }
    /**
     * @description instance_id
     * @var string
     */
    public $instanceId;

    /**
     * @description resource_type
     * @var string
     */
    public $resourceType;

    /**
     * @description resource_info
     * @var string
     */
    public $resourceInfo;

    /**
     * @description state
     * @var string
     */
    public $state;

}
