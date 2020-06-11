<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\endpoints;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\serviceMeshInfo;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec;
use AlibabaCloud\Tea\Model;

class serviceMesh extends Model
{
    /**
     * @description endpoints
     *
     * @var endpoints
     */
    public $endpoints;

    /**
     * @description cluster_info
     *
     * @var serviceMeshInfo
     */
    public $serviceMeshInfo;

    /**
     * @description spec
     *
     * @var spec
     */
    public $spec;

    /**
     * @description guest_clusters
     *
     * @var array
     */
    public $clusters;
    protected $_name = [
        'endpoints'       => 'Endpoints',
        'serviceMeshInfo' => 'ServiceMeshInfo',
        'spec'            => 'Spec',
        'clusters'        => 'Clusters',
    ];

    public function validate()
    {
        Model::validateRequired('endpoints', $this->endpoints, true);
        Model::validateRequired('serviceMeshInfo', $this->serviceMeshInfo, true);
        Model::validateRequired('spec', $this->spec, true);
        Model::validateRequired('clusters', $this->clusters, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toMap() : null;
        }
        if (null !== $this->serviceMeshInfo) {
            $res['ServiceMeshInfo'] = null !== $this->serviceMeshInfo ? $this->serviceMeshInfo->toMap() : null;
        }
        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toMap() : null;
        }
        if (null !== $this->clusters) {
            $res['Clusters'] = [];
            if (null !== $this->clusters) {
                $res['Clusters'] = $this->clusters;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceMesh
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
        }
        if (isset($map['ServiceMeshInfo'])) {
            $model->serviceMeshInfo = serviceMeshInfo::fromMap($map['ServiceMeshInfo']);
        }
        if (isset($map['Spec'])) {
            $model->spec = spec::fromMap($map['Spec']);
        }
        if (isset($map['Clusters'])) {
            if (!empty($map['Clusters'])) {
                $model->clusters = [];
                $model->clusters = $map['Clusters'];
            }
        }

        return $model;
    }
}
