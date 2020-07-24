<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterBody extends Model
{
    /**
     * @description deletion_protection
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description ingress_loadbalancer_id
     *
     * @var string
     */
    public $ingressLoadbalancerId;

    /**
     * @description api_server_eip
     *
     * @var bool
     */
    public $apiServerEip;

    /**
     * @description api_server_eip_id
     *
     * @var string
     */
    public $apiServerEipId;

    /**
     * @description resource_group_id
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description ingress_domain_rebinding
     *
     * @var string
     */
    public $ingressDomainRebinding;
    protected $_name = [
        'deletionProtection'     => 'deletion_protection',
        'ingressLoadbalancerId'  => 'ingress_loadbalancer_id',
        'apiServerEip'           => 'api_server_eip',
        'apiServerEipId'         => 'api_server_eip_id',
        'resourceGroupId'        => 'resource_group_id',
        'ingressDomainRebinding' => 'ingress_domain_rebinding',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletionProtection) {
            $res['deletion_protection'] = $this->deletionProtection;
        }
        if (null !== $this->ingressLoadbalancerId) {
            $res['ingress_loadbalancer_id'] = $this->ingressLoadbalancerId;
        }
        if (null !== $this->apiServerEip) {
            $res['api_server_eip'] = $this->apiServerEip;
        }
        if (null !== $this->apiServerEipId) {
            $res['api_server_eip_id'] = $this->apiServerEipId;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }
        if (null !== $this->ingressDomainRebinding) {
            $res['ingress_domain_rebinding'] = $this->ingressDomainRebinding;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deletion_protection'])) {
            $model->deletionProtection = $map['deletion_protection'];
        }
        if (isset($map['ingress_loadbalancer_id'])) {
            $model->ingressLoadbalancerId = $map['ingress_loadbalancer_id'];
        }
        if (isset($map['api_server_eip'])) {
            $model->apiServerEip = $map['api_server_eip'];
        }
        if (isset($map['api_server_eip_id'])) {
            $model->apiServerEipId = $map['api_server_eip_id'];
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }
        if (isset($map['ingress_domain_rebinding'])) {
            $model->ingressDomainRebinding = $map['ingress_domain_rebinding'];
        }

        return $model;
    }
}
