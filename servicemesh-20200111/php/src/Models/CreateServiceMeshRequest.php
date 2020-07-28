<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceMeshRequest extends Model
{
    /**
     * @description region_id
     *
     * @var string
     */
    public $regionId;

    /**
     * @description current_version
     *
     * @var string
     */
    public $istioVersion;

    /**
     * @description vpc_id
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description api_server_public_eip
     *
     * @var bool
     */
    public $apiServerPublicEip;

    /**
     * @description pilot_public_eip
     *
     * @var bool
     */
    public $pilotPublicEip;

    /**
     * @description tracing
     *
     * @var bool
     */
    public $tracing;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description vswitch_ids
     *
     * @var string
     */
    public $vSwitches;

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
     * @description AuditProject
     *
     * @var string
     */
    public $auditProject;

    /**
     * @description proxyRequestCPU
     *
     * @var string
     */
    public $proxyRequestCPU;

    /**
     * @description proxyRequestMemory
     *
     * @var string
     */
    public $proxyRequestMemory;

    /**
     * @description proxyLimitCPU
     *
     * @var string
     */
    public $proxyLimitCPU;

    /**
     * @description proxyLimitMemory
     *
     * @var string
     */
    public $proxyLimitMemory;

    /**
     * @description includeIPRanges
     *
     * @var string
     */
    public $includeIPRanges;

    /**
     * @description excludeIPRanges
     *
     * @var string
     */
    public $excludeIPRanges;

    /**
     * @description excludeOutboundPorts
     *
     * @var string
     */
    public $excludeOutboundPorts;

    /**
     * @description excludeInboundPorts
     *
     * @var string
     */
    public $excludeInboundPorts;
    protected $_name = [
        'regionId'              => 'RegionId',
        'istioVersion'          => 'IstioVersion',
        'vpcId'                 => 'VpcId',
        'apiServerPublicEip'    => 'ApiServerPublicEip',
        'pilotPublicEip'        => 'PilotPublicEip',
        'tracing'               => 'Tracing',
        'name'                  => 'Name',
        'vSwitches'             => 'VSwitches',
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
        'proxyRequestCPU'       => 'ProxyRequestCPU',
        'proxyRequestMemory'    => 'ProxyRequestMemory',
        'proxyLimitCPU'         => 'ProxyLimitCPU',
        'proxyLimitMemory'      => 'ProxyLimitMemory',
        'includeIPRanges'       => 'IncludeIPRanges',
        'excludeIPRanges'       => 'ExcludeIPRanges',
        'excludeOutboundPorts'  => 'ExcludeOutboundPorts',
        'excludeInboundPorts'   => 'ExcludeInboundPorts',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->istioVersion) {
            $res['IstioVersion'] = $this->istioVersion;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->apiServerPublicEip) {
            $res['ApiServerPublicEip'] = $this->apiServerPublicEip;
        }
        if (null !== $this->pilotPublicEip) {
            $res['PilotPublicEip'] = $this->pilotPublicEip;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = $this->vSwitches;
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
        if (null !== $this->excludeIPRanges) {
            $res['ExcludeIPRanges'] = $this->excludeIPRanges;
        }
        if (null !== $this->excludeOutboundPorts) {
            $res['ExcludeOutboundPorts'] = $this->excludeOutboundPorts;
        }
        if (null !== $this->excludeInboundPorts) {
            $res['ExcludeInboundPorts'] = $this->excludeInboundPorts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceMeshRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['IstioVersion'])) {
            $model->istioVersion = $map['IstioVersion'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ApiServerPublicEip'])) {
            $model->apiServerPublicEip = $map['ApiServerPublicEip'];
        }
        if (isset($map['PilotPublicEip'])) {
            $model->pilotPublicEip = $map['PilotPublicEip'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VSwitches'])) {
            $model->vSwitches = $map['VSwitches'];
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
        if (isset($map['ExcludeIPRanges'])) {
            $model->excludeIPRanges = $map['ExcludeIPRanges'];
        }
        if (isset($map['ExcludeOutboundPorts'])) {
            $model->excludeOutboundPorts = $map['ExcludeOutboundPorts'];
        }
        if (isset($map['ExcludeInboundPorts'])) {
            $model->excludeInboundPorts = $map['ExcludeInboundPorts'];
        }

        return $model;
    }
}
