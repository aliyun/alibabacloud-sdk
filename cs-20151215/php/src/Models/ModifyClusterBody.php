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
     * @description resource_group_id
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'deletionProtection'    => 'deletion_protection',
        'ingressLoadbalancerId' => 'ingress_loadbalancer_id',
        'resourceGroupId'       => 'resource_group_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res                            = [];
        $res['deletion_protection']     = $this->deletionProtection;
        $res['ingress_loadbalancer_id'] = $this->ingressLoadbalancerId;
        $res['resource_group_id']       = $this->resourceGroupId;

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
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }

        return $model;
    }
}
