<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\loadBalancer;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\network;
use AlibabaCloud\Tea\Model;

class spec extends Model
{
    /**
     * @var loadBalancer
     */
    public $loadBalancer;

    /**
     * @var meshConfig
     */
    public $meshConfig;

    /**
     * @var network
     */
    public $network;
    protected $_name = [
        'loadBalancer' => 'LoadBalancer',
        'meshConfig'   => 'MeshConfig',
        'network'      => 'Network',
    ];

    public function validate()
    {
        Model::validateRequired('loadBalancer', $this->loadBalancer, true);
        Model::validateRequired('meshConfig', $this->meshConfig, true);
        Model::validateRequired('network', $this->network, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancer) {
            $res['LoadBalancer'] = null !== $this->loadBalancer ? $this->loadBalancer->toMap() : null;
        }
        if (null !== $this->meshConfig) {
            $res['MeshConfig'] = null !== $this->meshConfig ? $this->meshConfig->toMap() : null;
        }
        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancer'])) {
            $model->loadBalancer = loadBalancer::fromMap($map['LoadBalancer']);
        }
        if (isset($map['MeshConfig'])) {
            $model->meshConfig = meshConfig::fromMap($map['MeshConfig']);
        }
        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        return $model;
    }
}
