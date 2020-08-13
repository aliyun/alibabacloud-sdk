<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class AddVmAppToMeshRequest extends Model
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
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $ips;

    /**
     * @var string
     */
    public $ports;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $annotations;

    /**
     * @var string
     */
    public $serviceAccount;

    /**
     * @var bool
     */
    public $force;
    protected $_name = [
        'serviceMeshId'  => 'ServiceMeshId',
        'namespace'      => 'Namespace',
        'serviceName'    => 'ServiceName',
        'ips'            => 'Ips',
        'ports'          => 'Ports',
        'labels'         => 'Labels',
        'annotations'    => 'Annotations',
        'serviceAccount' => 'ServiceAccount',
        'force'          => 'Force',
    ];

    public function validate()
    {
        Model::validateRequired('serviceMeshId', $this->serviceMeshId, true);
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('serviceName', $this->serviceName, true);
        Model::validateRequired('ips', $this->ips, true);
        Model::validateRequired('ports', $this->ports, true);
        Model::validateRequired('labels', $this->labels, true);
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
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }
        if (null !== $this->serviceAccount) {
            $res['ServiceAccount'] = $this->serviceAccount;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddVmAppToMeshRequest
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
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Ips'])) {
            $model->ips = $map['Ips'];
        }
        if (isset($map['Ports'])) {
            $model->ports = $map['Ports'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }
        if (isset($map['ServiceAccount'])) {
            $model->serviceAccount = $map['ServiceAccount'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        return $model;
    }
}
