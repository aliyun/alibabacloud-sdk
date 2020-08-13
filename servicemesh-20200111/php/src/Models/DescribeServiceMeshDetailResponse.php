<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh;
use AlibabaCloud\Tea\Model;

class DescribeServiceMeshDetailResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceMesh
     */
    public $serviceMesh;
    protected $_name = [
        'requestId'   => 'RequestId',
        'serviceMesh' => 'ServiceMesh',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('serviceMesh', $this->serviceMesh, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceMesh) {
            $res['ServiceMesh'] = null !== $this->serviceMesh ? $this->serviceMesh->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshDetailResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceMesh'])) {
            $model->serviceMesh = serviceMesh::fromMap($map['ServiceMesh']);
        }

        return $model;
    }
}
