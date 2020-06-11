// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class RemoveClusterFromServiceMeshRequest extends $tea.Model {
  serviceMeshId: string;
  clusterId: string;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
      clusterId: 'ClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
      clusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveClusterFromServiceMeshResponse extends $tea.Model {
  requestId: string;
  code: string;
  success: string;
  message: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      success: 'Success',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      success: 'string',
      message: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddClusterIntoServiceMeshRequest extends $tea.Model {
  serviceMeshId: string;
  clusterId: string;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
      clusterId: 'ClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
      clusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddClusterIntoServiceMeshResponse extends $tea.Model {
  requestId: string;
  code: string;
  success: string;
  message: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      success: 'Success',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      success: 'string',
      message: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateIstioInjectionConfigRequest extends $tea.Model {
  serviceMeshId: string;
  namespace: string;
  enableIstioInjection: boolean;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
      namespace: 'Namespace',
      enableIstioInjection: 'EnableIstioInjection',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
      namespace: 'string',
      enableIstioInjection: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateIstioInjectionConfigResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGuestClusterAccessLogDashboardsRequest extends $tea.Model {
  k8sClusterId: string;
  static names(): { [key: string]: string } {
    return {
      k8sClusterId: 'K8sClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      k8sClusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGuestClusterAccessLogDashboardsResponse extends $tea.Model {
  requestId: string;
  k8sClusterId: string;
  dashboards: DescribeGuestClusterAccessLogDashboardsResponseDashboards[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      k8sClusterId: 'K8sClusterId',
      dashboards: 'Dashboards',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      k8sClusterId: 'string',
      dashboards: { 'type': 'array', 'itemType': DescribeGuestClusterAccessLogDashboardsResponseDashboards },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeReusableSlbRequest extends $tea.Model {
  k8sClusterId: string;
  networkType: string;
  static names(): { [key: string]: string } {
    return {
      k8sClusterId: 'K8sClusterId',
      networkType: 'NetworkType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      k8sClusterId: 'string',
      networkType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeReusableSlbResponse extends $tea.Model {
  requestId: string;
  reusableSlbList: DescribeReusableSlbResponseReusableSlbList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      reusableSlbList: 'ReusableSlbList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      reusableSlbList: { 'type': 'array', 'itemType': DescribeReusableSlbResponseReusableSlbList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterPrometheusRequest extends $tea.Model {
  serviceMeshId?: string;
  k8sClusterId?: string;
  k8sClusterRegionId?: string;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
      k8sClusterId: 'K8sClusterId',
      k8sClusterRegionId: 'K8sClusterRegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
      k8sClusterId: 'string',
      k8sClusterRegionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterPrometheusResponse extends $tea.Model {
  requestId: string;
  prometheus: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      prometheus: 'Prometheus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      prometheus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterGrafanaRequest extends $tea.Model {
  serviceMeshId?: string;
  k8sClusterId?: string;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
      k8sClusterId: 'K8sClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
      k8sClusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterGrafanaResponse extends $tea.Model {
  requestId: string;
  dashboards: DescribeClusterGrafanaResponseDashboards[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      dashboards: 'Dashboards',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      dashboards: { 'type': 'array', 'itemType': DescribeClusterGrafanaResponseDashboards },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRelatedResourcesReuseRequest extends $tea.Model {
  serviceMeshId: string;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRelatedResourcesReuseResponse extends $tea.Model {
  requestId: string;
  reuseInfo: { [key: string]: any }[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      reuseInfo: 'ReuseInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      reuseInfo: { 'type': 'array', 'itemType': { 'type': 'map', 'keyType': 'string', 'valueType': 'any' } },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsRequest extends $tea.Model {
  acceptLanguage?: string;
  static names(): { [key: string]: string } {
    return {
      acceptLanguage: 'AcceptLanguage',
    };
  }

  static types(): { [key: string]: any } {
    return {
      acceptLanguage: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponse extends $tea.Model {
  requestId: string;
  businessLocations: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      businessLocations: 'BusinessLocations',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      businessLocations: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCensRequest extends $tea.Model {
  serviceMeshId?: string;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCensResponse extends $tea.Model {
  requestId: string;
  clusters: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      clusters: 'Clusters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      clusters: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClustersInServiceMeshRequest extends $tea.Model {
  serviceMeshId?: string;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClustersInServiceMeshResponse extends $tea.Model {
  requestId: string;
  clusters: DescribeClustersInServiceMeshResponseClusters[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      clusters: 'Clusters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      clusters: { 'type': 'array', 'itemType': DescribeClustersInServiceMeshResponseClusters },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIngressGatewaysRequest extends $tea.Model {
  serviceMeshId?: string;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeIngressGatewaysResponse extends $tea.Model {
  requestId: string;
  ingressGateways: { [key: string]: any }[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      ingressGateways: 'IngressGateways',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      ingressGateways: { 'type': 'array', 'itemType': { 'type': 'map', 'keyType': 'string', 'valueType': 'any' } },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeUpgradeVersionRequest extends $tea.Model {
  serviceMeshId?: string;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeUpgradeVersionResponse extends $tea.Model {
  requestId: string;
  version: DescribeUpgradeVersionResponseVersion;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      version: 'Version',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      version: DescribeUpgradeVersionResponseVersion,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateMeshFeatureRequest extends $tea.Model {
  serviceMeshId: string;
  tracing?: boolean;
  traceSampling?: number;
  localityLoadBalancing?: boolean;
  telemetry?: boolean;
  openAgentPolicy?: boolean;
  OPALogLevel?: string;
  OPARequestCPU?: string;
  OPARequestMemory?: string;
  OPALimitCPU?: string;
  OPALimitMemory?: string;
  enableAudit?: boolean;
  auditProject?: string;
  clusterDomain?: string;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
      tracing: 'Tracing',
      traceSampling: 'TraceSampling',
      localityLoadBalancing: 'LocalityLoadBalancing',
      telemetry: 'Telemetry',
      openAgentPolicy: 'OpenAgentPolicy',
      OPALogLevel: 'OPALogLevel',
      OPARequestCPU: 'OPARequestCPU',
      OPARequestMemory: 'OPARequestMemory',
      OPALimitCPU: 'OPALimitCPU',
      OPALimitMemory: 'OPALimitMemory',
      enableAudit: 'EnableAudit',
      auditProject: 'AuditProject',
      clusterDomain: 'ClusterDomain',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
      tracing: 'boolean',
      traceSampling: 'number',
      localityLoadBalancing: 'boolean',
      telemetry: 'boolean',
      openAgentPolicy: 'boolean',
      OPALogLevel: 'string',
      OPARequestCPU: 'string',
      OPARequestMemory: 'string',
      OPALimitCPU: 'string',
      OPALimitMemory: 'string',
      enableAudit: 'boolean',
      auditProject: 'string',
      clusterDomain: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateMeshFeatureResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpgradeMeshVersionRequest extends $tea.Model {
  serviceMeshId?: string;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpgradeMeshVersionResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshesRequest extends $tea.Model {
  static names(): { [key: string]: string } {
    return {
    };
  }

  static types(): { [key: string]: any } {
    return {
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshesResponse extends $tea.Model {
  requestId: string;
  serviceMeshes: DescribeServiceMeshesResponseServiceMeshes[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      serviceMeshes: 'ServiceMeshes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      serviceMeshes: { 'type': 'array', 'itemType': DescribeServiceMeshesResponseServiceMeshes },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshDetailRequest extends $tea.Model {
  serviceMeshId: string;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshDetailResponse extends $tea.Model {
  requestId: string;
  serviceMesh: DescribeServiceMeshDetailResponseServiceMesh;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      serviceMesh: 'ServiceMesh',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      serviceMesh: DescribeServiceMeshDetailResponseServiceMesh,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshKubeconfigRequest extends $tea.Model {
  serviceMeshId: string;
  privateIpAddress?: boolean;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
      privateIpAddress: 'PrivateIpAddress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
      privateIpAddress: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshKubeconfigResponse extends $tea.Model {
  kubeconfig: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      kubeconfig: 'Kubeconfig',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      kubeconfig: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateServiceMeshRequest extends $tea.Model {
  regionId: string;
  istioVersion?: string;
  vpcId: string;
  apiServerPublicEip?: boolean;
  pilotPublicEip?: boolean;
  tracing?: boolean;
  name?: string;
  VSwitches?: string;
  traceSampling?: number;
  localityLoadBalancing?: boolean;
  telemetry?: boolean;
  openAgentPolicy?: boolean;
  OPALogLevel?: string;
  OPARequestCPU?: string;
  OPARequestMemory?: string;
  OPALimitCPU?: string;
  OPALimitMemory?: string;
  enableAudit?: boolean;
  auditProject?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      istioVersion: 'IstioVersion',
      vpcId: 'VpcId',
      apiServerPublicEip: 'ApiServerPublicEip',
      pilotPublicEip: 'PilotPublicEip',
      tracing: 'Tracing',
      name: 'Name',
      VSwitches: 'VSwitches',
      traceSampling: 'TraceSampling',
      localityLoadBalancing: 'LocalityLoadBalancing',
      telemetry: 'Telemetry',
      openAgentPolicy: 'OpenAgentPolicy',
      OPALogLevel: 'OPALogLevel',
      OPARequestCPU: 'OPARequestCPU',
      OPARequestMemory: 'OPARequestMemory',
      OPALimitCPU: 'OPALimitCPU',
      OPALimitMemory: 'OPALimitMemory',
      enableAudit: 'EnableAudit',
      auditProject: 'AuditProject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      istioVersion: 'string',
      vpcId: 'string',
      apiServerPublicEip: 'boolean',
      pilotPublicEip: 'boolean',
      tracing: 'boolean',
      name: 'string',
      VSwitches: 'string',
      traceSampling: 'number',
      localityLoadBalancing: 'boolean',
      telemetry: 'boolean',
      openAgentPolicy: 'boolean',
      OPALogLevel: 'string',
      OPARequestCPU: 'string',
      OPARequestMemory: 'string',
      OPALimitCPU: 'string',
      OPALimitMemory: 'string',
      enableAudit: 'boolean',
      auditProject: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateServiceMeshResponse extends $tea.Model {
  requestId: string;
  serviceMeshId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      serviceMeshId: 'ServiceMeshId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      serviceMeshId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteServiceMeshRequest extends $tea.Model {
  serviceMeshId: string;
  force?: boolean;
  static names(): { [key: string]: string } {
    return {
      serviceMeshId: 'ServiceMeshId',
      force: 'Force',
    };
  }

  static types(): { [key: string]: any } {
    return {
      serviceMeshId: 'string',
      force: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteServiceMeshResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGuestClusterAccessLogDashboardsResponseDashboards extends $tea.Model {
  title: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      title: 'Title',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      title: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeReusableSlbResponseReusableSlbList extends $tea.Model {
  loadBalancerId: string;
  loadBalancerName: string;
  static names(): { [key: string]: string } {
    return {
      loadBalancerId: 'LoadBalancerId',
      loadBalancerName: 'LoadBalancerName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      loadBalancerId: 'string',
      loadBalancerName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClusterGrafanaResponseDashboards extends $tea.Model {
  url: string;
  title: string;
  static names(): { [key: string]: string } {
    return {
      url: 'Url',
      title: 'Title',
    };
  }

  static types(): { [key: string]: any } {
    return {
      url: 'string',
      title: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeClustersInServiceMeshResponseClusters extends $tea.Model {
  clusterId: string;
  clusterType: string;
  creationTime: string;
  errorMessage: string;
  name: string;
  regionId: string;
  state: string;
  updateTime: string;
  version: string;
  vpcId: string;
  sgId: string;
  clusterDomain: string;
  static names(): { [key: string]: string } {
    return {
      clusterId: 'ClusterId',
      clusterType: 'ClusterType',
      creationTime: 'CreationTime',
      errorMessage: 'ErrorMessage',
      name: 'Name',
      regionId: 'RegionId',
      state: 'State',
      updateTime: 'UpdateTime',
      version: 'Version',
      vpcId: 'VpcId',
      sgId: 'SgId',
      clusterDomain: 'ClusterDomain',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clusterId: 'string',
      clusterType: 'string',
      creationTime: 'string',
      errorMessage: 'string',
      name: 'string',
      regionId: 'string',
      state: 'string',
      updateTime: 'string',
      version: 'string',
      vpcId: 'string',
      sgId: 'string',
      clusterDomain: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeUpgradeVersionResponseVersion extends $tea.Model {
  istioVersion: string;
  istioOperatorVersion: string;
  kubernetesVersion: string;
  static names(): { [key: string]: string } {
    return {
      istioVersion: 'IstioVersion',
      istioOperatorVersion: 'IstioOperatorVersion',
      kubernetesVersion: 'KubernetesVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      istioVersion: 'string',
      istioOperatorVersion: 'string',
      kubernetesVersion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshesResponseServiceMeshesEndpoints extends $tea.Model {
  intranetApiServerEndpoint: string;
  intranetPilotEndpoint: string;
  publicApiServerEndpoint: string;
  publicPilotEndpoint: string;
  reverseTunnelEndpoint: string;
  static names(): { [key: string]: string } {
    return {
      intranetApiServerEndpoint: 'IntranetApiServerEndpoint',
      intranetPilotEndpoint: 'IntranetPilotEndpoint',
      publicApiServerEndpoint: 'PublicApiServerEndpoint',
      publicPilotEndpoint: 'PublicPilotEndpoint',
      reverseTunnelEndpoint: 'ReverseTunnelEndpoint',
    };
  }

  static types(): { [key: string]: any } {
    return {
      intranetApiServerEndpoint: 'string',
      intranetPilotEndpoint: 'string',
      publicApiServerEndpoint: 'string',
      publicPilotEndpoint: 'string',
      reverseTunnelEndpoint: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo extends $tea.Model {
  creationTime: string;
  errorMessage: string;
  name: string;
  regionId: string;
  serviceMeshId: string;
  state: string;
  updateTime: string;
  version: string;
  static names(): { [key: string]: string } {
    return {
      creationTime: 'CreationTime',
      errorMessage: 'ErrorMessage',
      name: 'Name',
      regionId: 'RegionId',
      serviceMeshId: 'ServiceMeshId',
      state: 'State',
      updateTime: 'UpdateTime',
      version: 'Version',
    };
  }

  static types(): { [key: string]: any } {
    return {
      creationTime: 'string',
      errorMessage: 'string',
      name: 'string',
      regionId: 'string',
      serviceMeshId: 'string',
      state: 'string',
      updateTime: 'string',
      version: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer extends $tea.Model {
  apiServerLoadbalancerId: string;
  apiServerPublicEip: string;
  pilotPublicEip: string;
  pilotPublicLoadbalancerId: string;
  static names(): { [key: string]: string } {
    return {
      apiServerLoadbalancerId: 'ApiServerLoadbalancerId',
      apiServerPublicEip: 'ApiServerPublicEip',
      pilotPublicEip: 'PilotPublicEip',
      pilotPublicLoadbalancerId: 'PilotPublicLoadbalancerId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      apiServerLoadbalancerId: 'string',
      apiServerPublicEip: 'string',
      pilotPublicEip: 'string',
      pilotPublicLoadbalancerId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig extends $tea.Model {
  mtls: boolean;
  outboundTrafficPolicy: string;
  strictMtls: boolean;
  tracing: boolean;
  telemetry: boolean;
  static names(): { [key: string]: string } {
    return {
      mtls: 'Mtls',
      outboundTrafficPolicy: 'OutboundTrafficPolicy',
      strictMtls: 'StrictMtls',
      tracing: 'Tracing',
      telemetry: 'Telemetry',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mtls: 'boolean',
      outboundTrafficPolicy: 'string',
      strictMtls: 'boolean',
      tracing: 'boolean',
      telemetry: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshesResponseServiceMeshesSpecNetwork extends $tea.Model {
  securityGroupId: string;
  vpcId: string;
  VSwitches: string[];
  static names(): { [key: string]: string } {
    return {
      securityGroupId: 'SecurityGroupId',
      vpcId: 'VpcId',
      VSwitches: 'VSwitches',
    };
  }

  static types(): { [key: string]: any } {
    return {
      securityGroupId: 'string',
      vpcId: 'string',
      VSwitches: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshesResponseServiceMeshesSpec extends $tea.Model {
  loadBalancer: DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer;
  meshConfig: DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig;
  network: DescribeServiceMeshesResponseServiceMeshesSpecNetwork;
  static names(): { [key: string]: string } {
    return {
      loadBalancer: 'LoadBalancer',
      meshConfig: 'MeshConfig',
      network: 'Network',
    };
  }

  static types(): { [key: string]: any } {
    return {
      loadBalancer: DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer,
      meshConfig: DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig,
      network: DescribeServiceMeshesResponseServiceMeshesSpecNetwork,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshesResponseServiceMeshes extends $tea.Model {
  endpoints: DescribeServiceMeshesResponseServiceMeshesEndpoints;
  serviceMeshInfo: DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo;
  spec: DescribeServiceMeshesResponseServiceMeshesSpec;
  clusters: string[];
  static names(): { [key: string]: string } {
    return {
      endpoints: 'Endpoints',
      serviceMeshInfo: 'ServiceMeshInfo',
      spec: 'Spec',
      clusters: 'Clusters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      endpoints: DescribeServiceMeshesResponseServiceMeshesEndpoints,
      serviceMeshInfo: DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo,
      spec: DescribeServiceMeshesResponseServiceMeshesSpec,
      clusters: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshDetailResponseServiceMeshEndpoints extends $tea.Model {
  intranetApiServerEndpoint: string;
  intranetPilotEndpoint: string;
  publicApiServerEndpoint: string;
  publicPilotEndpoint: string;
  static names(): { [key: string]: string } {
    return {
      intranetApiServerEndpoint: 'IntranetApiServerEndpoint',
      intranetPilotEndpoint: 'IntranetPilotEndpoint',
      publicApiServerEndpoint: 'PublicApiServerEndpoint',
      publicPilotEndpoint: 'PublicPilotEndpoint',
    };
  }

  static types(): { [key: string]: any } {
    return {
      intranetApiServerEndpoint: 'string',
      intranetPilotEndpoint: 'string',
      publicApiServerEndpoint: 'string',
      publicPilotEndpoint: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo extends $tea.Model {
  creationTime: string;
  errorMessage: string;
  name: string;
  regionId: string;
  serviceMeshId: string;
  state: string;
  updateTime: string;
  version: string;
  static names(): { [key: string]: string } {
    return {
      creationTime: 'CreationTime',
      errorMessage: 'ErrorMessage',
      name: 'Name',
      regionId: 'RegionId',
      serviceMeshId: 'ServiceMeshId',
      state: 'State',
      updateTime: 'UpdateTime',
      version: 'Version',
    };
  }

  static types(): { [key: string]: any } {
    return {
      creationTime: 'string',
      errorMessage: 'string',
      name: 'string',
      regionId: 'string',
      serviceMeshId: 'string',
      state: 'string',
      updateTime: 'string',
      version: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer extends $tea.Model {
  apiServerLoadbalancerId: string;
  apiServerPublicEip: string;
  pilotPublicEip: string;
  pilotPublicLoadbalancerId: string;
  static names(): { [key: string]: string } {
    return {
      apiServerLoadbalancerId: 'ApiServerLoadbalancerId',
      apiServerPublicEip: 'ApiServerPublicEip',
      pilotPublicEip: 'PilotPublicEip',
      pilotPublicLoadbalancerId: 'PilotPublicLoadbalancerId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      apiServerLoadbalancerId: 'string',
      apiServerPublicEip: 'string',
      pilotPublicEip: 'string',
      pilotPublicLoadbalancerId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigPilot extends $tea.Model {
  traceSampling: number;
  static names(): { [key: string]: string } {
    return {
      traceSampling: 'TraceSampling',
    };
  }

  static types(): { [key: string]: any } {
    return {
      traceSampling: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA extends $tea.Model {
  enabled: boolean;
  logLevel: string;
  requestCPU: string;
  requestMemory: string;
  limitCPU: string;
  limitMemory: string;
  static names(): { [key: string]: string } {
    return {
      enabled: 'Enabled',
      logLevel: 'LogLevel',
      requestCPU: 'RequestCPU',
      requestMemory: 'RequestMemory',
      limitCPU: 'LimitCPU',
      limitMemory: 'LimitMemory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      enabled: 'boolean',
      logLevel: 'string',
      requestCPU: 'string',
      requestMemory: 'string',
      limitCPU: 'string',
      limitMemory: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit extends $tea.Model {
  enabled: boolean;
  project: string;
  static names(): { [key: string]: string } {
    return {
      enabled: 'Enabled',
      project: 'Project',
    };
  }

  static types(): { [key: string]: any } {
    return {
      enabled: 'boolean',
      project: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig extends $tea.Model {
  enableLocalityLB: boolean;
  telemetry: boolean;
  tracing: boolean;
  pilot: DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigPilot;
  OPA: DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA;
  audit: DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit;
  static names(): { [key: string]: string } {
    return {
      enableLocalityLB: 'EnableLocalityLB',
      telemetry: 'Telemetry',
      tracing: 'Tracing',
      pilot: 'Pilot',
      OPA: 'OPA',
      audit: 'Audit',
    };
  }

  static types(): { [key: string]: any } {
    return {
      enableLocalityLB: 'boolean',
      telemetry: 'boolean',
      tracing: 'boolean',
      pilot: DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigPilot,
      OPA: DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA,
      audit: DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshDetailResponseServiceMeshSpecNetwork extends $tea.Model {
  securityGroupId: string;
  vpcId: string;
  VSwitches: string[];
  static names(): { [key: string]: string } {
    return {
      securityGroupId: 'SecurityGroupId',
      vpcId: 'VpcId',
      VSwitches: 'VSwitches',
    };
  }

  static types(): { [key: string]: any } {
    return {
      securityGroupId: 'string',
      vpcId: 'string',
      VSwitches: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshDetailResponseServiceMeshSpec extends $tea.Model {
  loadBalancer: DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer;
  meshConfig: DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig;
  network: DescribeServiceMeshDetailResponseServiceMeshSpecNetwork;
  static names(): { [key: string]: string } {
    return {
      loadBalancer: 'LoadBalancer',
      meshConfig: 'MeshConfig',
      network: 'Network',
    };
  }

  static types(): { [key: string]: any } {
    return {
      loadBalancer: DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer,
      meshConfig: DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig,
      network: DescribeServiceMeshDetailResponseServiceMeshSpecNetwork,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeServiceMeshDetailResponseServiceMesh extends $tea.Model {
  endpoints: DescribeServiceMeshDetailResponseServiceMeshEndpoints;
  serviceMeshInfo: DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo;
  spec: DescribeServiceMeshDetailResponseServiceMeshSpec;
  clusters: string[];
  static names(): { [key: string]: string } {
    return {
      endpoints: 'Endpoints',
      serviceMeshInfo: 'ServiceMeshInfo',
      spec: 'Spec',
      clusters: 'Clusters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      endpoints: DescribeServiceMeshDetailResponseServiceMeshEndpoints,
      serviceMeshInfo: DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo,
      spec: DescribeServiceMeshDetailResponseServiceMeshSpec,
      clusters: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "central";
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("servicemesh", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async removeClusterFromServiceMeshWithOptions(request: RemoveClusterFromServiceMeshRequest, runtime: $Util.RuntimeOptions): Promise<RemoveClusterFromServiceMeshResponse> {
    Util.validateModel(request);
    return $tea.cast<RemoveClusterFromServiceMeshResponse>(await this.doRequest("RemoveClusterFromServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new RemoveClusterFromServiceMeshResponse({}));
  }

  async removeClusterFromServiceMesh(request: RemoveClusterFromServiceMeshRequest): Promise<RemoveClusterFromServiceMeshResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.removeClusterFromServiceMeshWithOptions(request, runtime);
  }

  async addClusterIntoServiceMeshWithOptions(request: AddClusterIntoServiceMeshRequest, runtime: $Util.RuntimeOptions): Promise<AddClusterIntoServiceMeshResponse> {
    Util.validateModel(request);
    return $tea.cast<AddClusterIntoServiceMeshResponse>(await this.doRequest("AddClusterIntoServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new AddClusterIntoServiceMeshResponse({}));
  }

  async addClusterIntoServiceMesh(request: AddClusterIntoServiceMeshRequest): Promise<AddClusterIntoServiceMeshResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addClusterIntoServiceMeshWithOptions(request, runtime);
  }

  async updateIstioInjectionConfigWithOptions(request: UpdateIstioInjectionConfigRequest, runtime: $Util.RuntimeOptions): Promise<UpdateIstioInjectionConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateIstioInjectionConfigResponse>(await this.doRequest("UpdateIstioInjectionConfig", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new UpdateIstioInjectionConfigResponse({}));
  }

  async updateIstioInjectionConfig(request: UpdateIstioInjectionConfigRequest): Promise<UpdateIstioInjectionConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateIstioInjectionConfigWithOptions(request, runtime);
  }

  async describeGuestClusterAccessLogDashboardsWithOptions(request: DescribeGuestClusterAccessLogDashboardsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGuestClusterAccessLogDashboardsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGuestClusterAccessLogDashboardsResponse>(await this.doRequest("DescribeGuestClusterAccessLogDashboards", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new DescribeGuestClusterAccessLogDashboardsResponse({}));
  }

  async describeGuestClusterAccessLogDashboards(request: DescribeGuestClusterAccessLogDashboardsRequest): Promise<DescribeGuestClusterAccessLogDashboardsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGuestClusterAccessLogDashboardsWithOptions(request, runtime);
  }

  async describeReusableSlbWithOptions(request: DescribeReusableSlbRequest, runtime: $Util.RuntimeOptions): Promise<DescribeReusableSlbResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeReusableSlbResponse>(await this.doRequest("DescribeReusableSlb", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new DescribeReusableSlbResponse({}));
  }

  async describeReusableSlb(request: DescribeReusableSlbRequest): Promise<DescribeReusableSlbResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeReusableSlbWithOptions(request, runtime);
  }

  async describeClusterPrometheusWithOptions(request: DescribeClusterPrometheusRequest, runtime: $Util.RuntimeOptions): Promise<DescribeClusterPrometheusResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeClusterPrometheusResponse>(await this.doRequest("DescribeClusterPrometheus", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new DescribeClusterPrometheusResponse({}));
  }

  async describeClusterPrometheus(request: DescribeClusterPrometheusRequest): Promise<DescribeClusterPrometheusResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeClusterPrometheusWithOptions(request, runtime);
  }

  async describeClusterGrafanaWithOptions(request: DescribeClusterGrafanaRequest, runtime: $Util.RuntimeOptions): Promise<DescribeClusterGrafanaResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeClusterGrafanaResponse>(await this.doRequest("DescribeClusterGrafana", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new DescribeClusterGrafanaResponse({}));
  }

  async describeClusterGrafana(request: DescribeClusterGrafanaRequest): Promise<DescribeClusterGrafanaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeClusterGrafanaWithOptions(request, runtime);
  }

  async describeRelatedResourcesReuseWithOptions(request: DescribeRelatedResourcesReuseRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRelatedResourcesReuseResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRelatedResourcesReuseResponse>(await this.doRequest("DescribeRelatedResourcesReuse", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new DescribeRelatedResourcesReuseResponse({}));
  }

  async describeRelatedResourcesReuse(request: DescribeRelatedResourcesReuseRequest): Promise<DescribeRelatedResourcesReuseResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRelatedResourcesReuseWithOptions(request, runtime);
  }

  async describeRegionsWithOptions(request: DescribeRegionsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRegionsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRegionsResponse>(await this.doRequest("DescribeRegions", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new DescribeRegionsResponse({}));
  }

  async describeRegions(request: DescribeRegionsRequest): Promise<DescribeRegionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRegionsWithOptions(request, runtime);
  }

  async describeCensWithOptions(request: DescribeCensRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCensResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCensResponse>(await this.doRequest("DescribeCens", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new DescribeCensResponse({}));
  }

  async describeCens(request: DescribeCensRequest): Promise<DescribeCensResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCensWithOptions(request, runtime);
  }

  async describeClustersInServiceMeshWithOptions(request: DescribeClustersInServiceMeshRequest, runtime: $Util.RuntimeOptions): Promise<DescribeClustersInServiceMeshResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeClustersInServiceMeshResponse>(await this.doRequest("DescribeClustersInServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new DescribeClustersInServiceMeshResponse({}));
  }

  async describeClustersInServiceMesh(request: DescribeClustersInServiceMeshRequest): Promise<DescribeClustersInServiceMeshResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeClustersInServiceMeshWithOptions(request, runtime);
  }

  async describeIngressGatewaysWithOptions(request: DescribeIngressGatewaysRequest, runtime: $Util.RuntimeOptions): Promise<DescribeIngressGatewaysResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeIngressGatewaysResponse>(await this.doRequest("DescribeIngressGateways", "HTTPS", "GET", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new DescribeIngressGatewaysResponse({}));
  }

  async describeIngressGateways(request: DescribeIngressGatewaysRequest): Promise<DescribeIngressGatewaysResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeIngressGatewaysWithOptions(request, runtime);
  }

  async describeUpgradeVersionWithOptions(request: DescribeUpgradeVersionRequest, runtime: $Util.RuntimeOptions): Promise<DescribeUpgradeVersionResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeUpgradeVersionResponse>(await this.doRequest("DescribeUpgradeVersion", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new DescribeUpgradeVersionResponse({}));
  }

  async describeUpgradeVersion(request: DescribeUpgradeVersionRequest): Promise<DescribeUpgradeVersionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeUpgradeVersionWithOptions(request, runtime);
  }

  async updateMeshFeatureWithOptions(request: UpdateMeshFeatureRequest, runtime: $Util.RuntimeOptions): Promise<UpdateMeshFeatureResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateMeshFeatureResponse>(await this.doRequest("UpdateMeshFeature", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new UpdateMeshFeatureResponse({}));
  }

  async updateMeshFeature(request: UpdateMeshFeatureRequest): Promise<UpdateMeshFeatureResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateMeshFeatureWithOptions(request, runtime);
  }

  async upgradeMeshVersionWithOptions(request: UpgradeMeshVersionRequest, runtime: $Util.RuntimeOptions): Promise<UpgradeMeshVersionResponse> {
    Util.validateModel(request);
    return $tea.cast<UpgradeMeshVersionResponse>(await this.doRequest("UpgradeMeshVersion", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new UpgradeMeshVersionResponse({}));
  }

  async upgradeMeshVersion(request: UpgradeMeshVersionRequest): Promise<UpgradeMeshVersionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.upgradeMeshVersionWithOptions(request, runtime);
  }

  async describeServiceMeshesWithOptions(request: DescribeServiceMeshesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeServiceMeshesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeServiceMeshesResponse>(await this.doRequest("DescribeServiceMeshes", "HTTPS", "GET", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new DescribeServiceMeshesResponse({}));
  }

  async describeServiceMeshes(request: DescribeServiceMeshesRequest): Promise<DescribeServiceMeshesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeServiceMeshesWithOptions(request, runtime);
  }

  async describeServiceMeshDetailWithOptions(request: DescribeServiceMeshDetailRequest, runtime: $Util.RuntimeOptions): Promise<DescribeServiceMeshDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeServiceMeshDetailResponse>(await this.doRequest("DescribeServiceMeshDetail", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new DescribeServiceMeshDetailResponse({}));
  }

  async describeServiceMeshDetail(request: DescribeServiceMeshDetailRequest): Promise<DescribeServiceMeshDetailResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeServiceMeshDetailWithOptions(request, runtime);
  }

  async describeServiceMeshKubeconfigWithOptions(request: DescribeServiceMeshKubeconfigRequest, runtime: $Util.RuntimeOptions): Promise<DescribeServiceMeshKubeconfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeServiceMeshKubeconfigResponse>(await this.doRequest("DescribeServiceMeshKubeconfig", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new DescribeServiceMeshKubeconfigResponse({}));
  }

  async describeServiceMeshKubeconfig(request: DescribeServiceMeshKubeconfigRequest): Promise<DescribeServiceMeshKubeconfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeServiceMeshKubeconfigWithOptions(request, runtime);
  }

  async createServiceMeshWithOptions(request: CreateServiceMeshRequest, runtime: $Util.RuntimeOptions): Promise<CreateServiceMeshResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateServiceMeshResponse>(await this.doRequest("CreateServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new CreateServiceMeshResponse({}));
  }

  async createServiceMesh(request: CreateServiceMeshRequest): Promise<CreateServiceMeshResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createServiceMeshWithOptions(request, runtime);
  }

  async deleteServiceMeshWithOptions(request: DeleteServiceMeshRequest, runtime: $Util.RuntimeOptions): Promise<DeleteServiceMeshResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteServiceMeshResponse>(await this.doRequest("DeleteServiceMesh", "HTTPS", "POST", "2020-01-11", "AK", null, $tea.toMap(request), runtime), new DeleteServiceMeshResponse({}));
  }

  async deleteServiceMesh(request: DeleteServiceMeshRequest): Promise<DeleteServiceMeshResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteServiceMeshWithOptions(request, runtime);
  }

  getEndpoint(productId: string, regionId: string, endpointRule: string, network: string, suffix: string, endpointMap: {[key: string ]: string}, endpoint: string): string {
    if (!Util.empty(endpoint)) {
      return endpoint;
    }

    if (!Util.isUnset(endpointMap) && !Util.empty(endpointMap[regionId])) {
      return endpointMap[regionId];
    }

    return EndpointUtil.getEndpointRules(productId, regionId, endpointRule, network, suffix);
  }

}
