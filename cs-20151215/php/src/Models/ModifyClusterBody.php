<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterBody extends Model {
    protected $_name = [
        'deletionProtection' => 'deletion_protection',
        'ingressLoadbalancerId' => 'ingress_loadbalancer_id',
        'apiServerEip' => 'api_server_eip',
        'apiServerEipId' => 'api_server_eip_id',
        'resourceGroupId' => 'resource_group_id',
    ];
    public function validate() {
        Model::validateRequired('deletionProtection', $this->deletionProtection, true);
        Model::validateRequired('ingressLoadbalancerId', $this->ingressLoadbalancerId, true);
        Model::validateRequired('apiServerEip', $this->apiServerEip, true);
        Model::validateRequired('apiServerEipId', $this->apiServerEipId, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
    }
    public function toMap() {
        $res = [];
        $res['deletion_protection'] = $this->deletionProtection;
        $res['ingress_loadbalancer_id'] = $this->ingressLoadbalancerId;
        $res['api_server_eip'] = $this->apiServerEip;
        $res['api_server_eip_id'] = $this->apiServerEipId;
        $res['resource_group_id'] = $this->resourceGroupId;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyClusterBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['deletion_protection'])){
            $model->deletionProtection = $map['deletion_protection'];
        }
        if(isset($map['ingress_loadbalancer_id'])){
            $model->ingressLoadbalancerId = $map['ingress_loadbalancer_id'];
        }
        if(isset($map['api_server_eip'])){
            $model->apiServerEip = $map['api_server_eip'];
        }
        if(isset($map['api_server_eip_id'])){
            $model->apiServerEipId = $map['api_server_eip_id'];
        }
        if(isset($map['resource_group_id'])){
            $model->resourceGroupId = $map['resource_group_id'];
        }
        return $model;
    }
    /**
     * @description deletion_protection
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description ingress_loadbalancer_id
     * @var string
     */
    public $ingressLoadbalancerId;

    /**
     * @description api_server_eip
     * @var bool
     */
    public $apiServerEip;

    /**
     * @description api_server_eip_id
     * @var string
     */
    public $apiServerEipId;

    /**
     * @description resource_group_id
     * @var string
     */
    public $resourceGroupId;

}
