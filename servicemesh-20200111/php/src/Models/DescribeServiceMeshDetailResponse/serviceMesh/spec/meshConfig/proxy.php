<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class proxy extends Model
{
    /**
     * @var string
     */
    public $clusterDomain;

    /**
     * @var string
     */
    public $requestCPU;

    /**
     * @var string
     */
    public $requestMemory;

    /**
     * @var string
     */
    public $limitCPU;

    /**
     * @var string
     */
    public $limitMemory;
    protected $_name = [
        'clusterDomain' => 'ClusterDomain',
        'requestCPU'    => 'RequestCPU',
        'requestMemory' => 'RequestMemory',
        'limitCPU'      => 'LimitCPU',
        'limitMemory'   => 'LimitMemory',
    ];

    public function validate()
    {
        Model::validateRequired('clusterDomain', $this->clusterDomain, true);
        Model::validateRequired('requestCPU', $this->requestCPU, true);
        Model::validateRequired('requestMemory', $this->requestMemory, true);
        Model::validateRequired('limitCPU', $this->limitCPU, true);
        Model::validateRequired('limitMemory', $this->limitMemory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterDomain) {
            $res['ClusterDomain'] = $this->clusterDomain;
        }
        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }
        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
        }
        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proxy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterDomain'])) {
            $model->clusterDomain = $map['ClusterDomain'];
        }
        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }
        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }
        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }

        return $model;
    }
}
