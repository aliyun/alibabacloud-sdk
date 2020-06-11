<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec;

use AlibabaCloud\Tea\Model;

class loadBalancer extends Model
{
    /**
     * @description api_server_load_balancer_id
     *
     * @var string
     */
    public $apiServerLoadbalancerId;

    /**
     * @description api_server_public_eip
     *
     * @var string
     */
    public $apiServerPublicEip;

    /**
     * @description pilot_public_eip
     *
     * @var string
     */
    public $pilotPublicEip;

    /**
     * @description pilot_load_balancer_id
     *
     * @var string
     */
    public $pilotPublicLoadbalancerId;
    protected $_name = [
        'apiServerLoadbalancerId'   => 'ApiServerLoadbalancerId',
        'apiServerPublicEip'        => 'ApiServerPublicEip',
        'pilotPublicEip'            => 'PilotPublicEip',
        'pilotPublicLoadbalancerId' => 'PilotPublicLoadbalancerId',
    ];

    public function validate()
    {
        Model::validateRequired('apiServerLoadbalancerId', $this->apiServerLoadbalancerId, true);
        Model::validateRequired('apiServerPublicEip', $this->apiServerPublicEip, true);
        Model::validateRequired('pilotPublicEip', $this->pilotPublicEip, true);
        Model::validateRequired('pilotPublicLoadbalancerId', $this->pilotPublicLoadbalancerId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiServerLoadbalancerId) {
            $res['ApiServerLoadbalancerId'] = $this->apiServerLoadbalancerId;
        }
        if (null !== $this->apiServerPublicEip) {
            $res['ApiServerPublicEip'] = $this->apiServerPublicEip;
        }
        if (null !== $this->pilotPublicEip) {
            $res['PilotPublicEip'] = $this->pilotPublicEip;
        }
        if (null !== $this->pilotPublicLoadbalancerId) {
            $res['PilotPublicLoadbalancerId'] = $this->pilotPublicLoadbalancerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiServerLoadbalancerId'])) {
            $model->apiServerLoadbalancerId = $map['ApiServerLoadbalancerId'];
        }
        if (isset($map['ApiServerPublicEip'])) {
            $model->apiServerPublicEip = $map['ApiServerPublicEip'];
        }
        if (isset($map['PilotPublicEip'])) {
            $model->pilotPublicEip = $map['PilotPublicEip'];
        }
        if (isset($map['PilotPublicLoadbalancerId'])) {
            $model->pilotPublicLoadbalancerId = $map['PilotPublicLoadbalancerId'];
        }

        return $model;
    }
}
