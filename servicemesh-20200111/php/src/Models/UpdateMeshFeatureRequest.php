<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateMeshFeatureRequest extends Model
{
    /**
     * @description ServiceMeshId
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @description tracing
     *
     * @var bool
     */
    public $tracing;

    /**
     * @description traceSampling
     *
     * @var float
     */
    public $traceSampling;

    /**
     * @description enableLocalityLB
     *
     * @var bool
     */
    public $localityLoadBalancing;

    /**
     * @description telemetryV2
     *
     * @var bool
     */
    public $telemetry;

    /**
     * @description opaEnabled
     *
     * @var bool
     */
    public $openAgentPolicy;

    /**
     * @description opaLogLevel
     *
     * @var string
     */
    public $OPALogLevel;

    /**
     * @description opaRequestCPU
     *
     * @var string
     */
    public $OPARequestCPU;

    /**
     * @description opaRequestMemory
     *
     * @var string
     */
    public $OPARequestMemory;

    /**
     * @description opaLimitCPU
     *
     * @var string
     */
    public $OPALimitCPU;

    /**
     * @description opaLimitMemory
     *
     * @var string
     */
    public $OPALimitMemory;

    /**
     * @description enableAudit
     *
     * @var bool
     */
    public $enableAudit;

    /**
     * @description auditProject
     *
     * @var string
     */
    public $auditProject;

    /**
     * @description clusterDomain
     *
     * @var string
     */
    public $clusterDomain;
    protected $_name = [
        'serviceMeshId'         => 'ServiceMeshId',
        'tracing'               => 'Tracing',
        'traceSampling'         => 'TraceSampling',
        'localityLoadBalancing' => 'LocalityLoadBalancing',
        'telemetry'             => 'Telemetry',
        'openAgentPolicy'       => 'OpenAgentPolicy',
        'OPALogLevel'           => 'OPALogLevel',
        'OPARequestCPU'         => 'OPARequestCPU',
        'OPARequestMemory'      => 'OPARequestMemory',
        'OPALimitCPU'           => 'OPALimitCPU',
        'OPALimitMemory'        => 'OPALimitMemory',
        'enableAudit'           => 'EnableAudit',
        'auditProject'          => 'AuditProject',
        'clusterDomain'         => 'ClusterDomain',
    ];

    public function validate()
    {
        Model::validateRequired('serviceMeshId', $this->serviceMeshId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->traceSampling) {
            $res['TraceSampling'] = $this->traceSampling;
        }
        if (null !== $this->localityLoadBalancing) {
            $res['LocalityLoadBalancing'] = $this->localityLoadBalancing;
        }
        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
        }
        if (null !== $this->openAgentPolicy) {
            $res['OpenAgentPolicy'] = $this->openAgentPolicy;
        }
        if (null !== $this->OPALogLevel) {
            $res['OPALogLevel'] = $this->OPALogLevel;
        }
        if (null !== $this->OPARequestCPU) {
            $res['OPARequestCPU'] = $this->OPARequestCPU;
        }
        if (null !== $this->OPARequestMemory) {
            $res['OPARequestMemory'] = $this->OPARequestMemory;
        }
        if (null !== $this->OPALimitCPU) {
            $res['OPALimitCPU'] = $this->OPALimitCPU;
        }
        if (null !== $this->OPALimitMemory) {
            $res['OPALimitMemory'] = $this->OPALimitMemory;
        }
        if (null !== $this->enableAudit) {
            $res['EnableAudit'] = $this->enableAudit;
        }
        if (null !== $this->auditProject) {
            $res['AuditProject'] = $this->auditProject;
        }
        if (null !== $this->clusterDomain) {
            $res['ClusterDomain'] = $this->clusterDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMeshFeatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['TraceSampling'])) {
            $model->traceSampling = $map['TraceSampling'];
        }
        if (isset($map['LocalityLoadBalancing'])) {
            $model->localityLoadBalancing = $map['LocalityLoadBalancing'];
        }
        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
        }
        if (isset($map['OpenAgentPolicy'])) {
            $model->openAgentPolicy = $map['OpenAgentPolicy'];
        }
        if (isset($map['OPALogLevel'])) {
            $model->OPALogLevel = $map['OPALogLevel'];
        }
        if (isset($map['OPARequestCPU'])) {
            $model->OPARequestCPU = $map['OPARequestCPU'];
        }
        if (isset($map['OPARequestMemory'])) {
            $model->OPARequestMemory = $map['OPARequestMemory'];
        }
        if (isset($map['OPALimitCPU'])) {
            $model->OPALimitCPU = $map['OPALimitCPU'];
        }
        if (isset($map['OPALimitMemory'])) {
            $model->OPALimitMemory = $map['OPALimitMemory'];
        }
        if (isset($map['EnableAudit'])) {
            $model->enableAudit = $map['EnableAudit'];
        }
        if (isset($map['AuditProject'])) {
            $model->auditProject = $map['AuditProject'];
        }
        if (isset($map['ClusterDomain'])) {
            $model->clusterDomain = $map['ClusterDomain'];
        }

        return $model;
    }
}
