<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateIstioInjectionConfigRequest extends Model
{
    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var bool
     */
    public $enableIstioInjection;
    protected $_name = [
        'serviceMeshId'        => 'ServiceMeshId',
        'namespace'            => 'Namespace',
        'enableIstioInjection' => 'EnableIstioInjection',
    ];

    public function validate()
    {
        Model::validateRequired('serviceMeshId', $this->serviceMeshId, true);
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('enableIstioInjection', $this->enableIstioInjection, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->enableIstioInjection) {
            $res['EnableIstioInjection'] = $this->enableIstioInjection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIstioInjectionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['EnableIstioInjection'])) {
            $model->enableIstioInjection = $map['EnableIstioInjection'];
        }

        return $model;
    }
}
