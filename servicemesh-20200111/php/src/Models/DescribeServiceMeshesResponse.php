<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponse\serviceMeshes;
use AlibabaCloud\Tea\Model;

class DescribeServiceMeshesResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description service_meshes
     *
     * @var array
     */
    public $serviceMeshes;
    protected $_name = [
        'requestId'     => 'RequestId',
        'serviceMeshes' => 'ServiceMeshes',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('serviceMeshes', $this->serviceMeshes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceMeshes) {
            $res['ServiceMeshes'] = [];
            if (null !== $this->serviceMeshes && \is_array($this->serviceMeshes)) {
                $n = 0;
                foreach ($this->serviceMeshes as $item) {
                    $res['ServiceMeshes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceMeshes'])) {
            if (!empty($map['ServiceMeshes'])) {
                $model->serviceMeshes = [];
                $n                    = 0;
                foreach ($map['ServiceMeshes'] as $item) {
                    $model->serviceMeshes[$n++] = null !== $item ? serviceMeshes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
