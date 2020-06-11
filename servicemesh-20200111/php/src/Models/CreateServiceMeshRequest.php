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
    public $VSwitches;

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
    protected $_name = [
        'regionId'              => 'RegionId',
        'istioVersion'          => 'IstioVersion',
        'vpcId'                 => 'VpcId',
        'apiServerPublicEip'    => 'ApiServerPublicEip',
        'pilotPublicEip'        => 'PilotPublicEip',
        'tracing'               => 'Tracing',
        'name'                  => 'Name',
        'VSwitches'             => 'VSwitches',
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
        if (null !== $this->VSwitches) {
            $res['VSwitches'] = $this->VSwitches;
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
            $model->VSwitches = $map['VSwitches'];
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

        return $model;
    }
}
