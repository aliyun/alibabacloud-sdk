<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateMeshFeatureRequest extends Model
{
    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var bool
     */
    public $tracing;

    /**
     * @var float
     */
    public $traceSampling;

    /**
     * @var bool
     */
    public $localityLoadBalancing;

    /**
     * @var bool
     */
    public $telemetry;

    /**
     * @var bool
     */
    public $openAgentPolicy;

    /**
     * @var string
     */
    public $OPALogLevel;

    /**
     * @var string
     */
    public $OPARequestCPU;

    /**
     * @var string
     */
    public $OPARequestMemory;

    /**
     * @var string
     */
    public $OPALimitCPU;

    /**
     * @var string
     */
    public $OPALimitMemory;

    /**
     * @var bool
     */
    public $enableAudit;

    /**
     * @var string
     */
    public $auditProject;

    /**
     * @var string
     */
    public $clusterDomain;

    /**
     * @var bool
     */
    public $customizedZipkin;

    /**
     * @var string
     */
    public $outboundTrafficPolicy;

    /**
     * @var string
     */
    public $proxyRequestCPU;

    /**
     * @var string
     */
    public $proxyRequestMemory;

    /**
     * @var string
     */
    public $proxyLimitCPU;

    /**
     * @var string
     */
    public $proxyLimitMemory;

    /**
     * @var string
     */
    public $includeIPRanges;
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
        'customizedZipkin'      => 'CustomizedZipkin',
        'outboundTrafficPolicy' => 'OutboundTrafficPolicy',
        'proxyRequestCPU'       => 'ProxyRequestCPU',
        'proxyRequestMemory'    => 'ProxyRequestMemory',
        'proxyLimitCPU'         => 'ProxyLimitCPU',
        'proxyLimitMemory'      => 'ProxyLimitMemory',
        'includeIPRanges'       => 'IncludeIPRanges',
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
        if (null !== $this->customizedZipkin) {
            $res['CustomizedZipkin'] = $this->customizedZipkin;
        }
        if (null !== $this->outboundTrafficPolicy) {
            $res['OutboundTrafficPolicy'] = $this->outboundTrafficPolicy;
        }
        if (null !== $this->proxyRequestCPU) {
            $res['ProxyRequestCPU'] = $this->proxyRequestCPU;
        }
        if (null !== $this->proxyRequestMemory) {
            $res['ProxyRequestMemory'] = $this->proxyRequestMemory;
        }
        if (null !== $this->proxyLimitCPU) {
            $res['ProxyLimitCPU'] = $this->proxyLimitCPU;
        }
        if (null !== $this->proxyLimitMemory) {
            $res['ProxyLimitMemory'] = $this->proxyLimitMemory;
        }
        if (null !== $this->includeIPRanges) {
            $res['IncludeIPRanges'] = $this->includeIPRanges;
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
        if (isset($map['CustomizedZipkin'])) {
            $model->customizedZipkin = $map['CustomizedZipkin'];
        }
        if (isset($map['OutboundTrafficPolicy'])) {
            $model->outboundTrafficPolicy = $map['OutboundTrafficPolicy'];
        }
        if (isset($map['ProxyRequestCPU'])) {
            $model->proxyRequestCPU = $map['ProxyRequestCPU'];
        }
        if (isset($map['ProxyRequestMemory'])) {
            $model->proxyRequestMemory = $map['ProxyRequestMemory'];
        }
        if (isset($map['ProxyLimitCPU'])) {
            $model->proxyLimitCPU = $map['ProxyLimitCPU'];
        }
        if (isset($map['ProxyLimitMemory'])) {
            $model->proxyLimitMemory = $map['ProxyLimitMemory'];
        }
        if (isset($map['IncludeIPRanges'])) {
            $model->includeIPRanges = $map['IncludeIPRanges'];
        }

        return $model;
    }
}
