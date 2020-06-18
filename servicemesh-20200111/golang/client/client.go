// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type RemoveClusterFromServiceMeshRequest struct {
	ServiceMeshId *string `json:"ServiceMeshId" xml:"ServiceMeshId" require:"true"`
	ClusterId     *string `json:"ClusterId" xml:"ClusterId" require:"true"`
}

func (s RemoveClusterFromServiceMeshRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveClusterFromServiceMeshRequest) GoString() string {
	return s.String()
}

func (s *RemoveClusterFromServiceMeshRequest) SetServiceMeshId(v string) *RemoveClusterFromServiceMeshRequest {
	s.ServiceMeshId = &v
	return s
}

func (s *RemoveClusterFromServiceMeshRequest) SetClusterId(v string) *RemoveClusterFromServiceMeshRequest {
	s.ClusterId = &v
	return s
}

type RemoveClusterFromServiceMeshResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s RemoveClusterFromServiceMeshResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveClusterFromServiceMeshResponse) GoString() string {
	return s.String()
}

func (s *RemoveClusterFromServiceMeshResponse) SetRequestId(v string) *RemoveClusterFromServiceMeshResponse {
	s.RequestId = &v
	return s
}

func (s *RemoveClusterFromServiceMeshResponse) SetCode(v string) *RemoveClusterFromServiceMeshResponse {
	s.Code = &v
	return s
}

func (s *RemoveClusterFromServiceMeshResponse) SetMessage(v string) *RemoveClusterFromServiceMeshResponse {
	s.Message = &v
	return s
}

type AddClusterIntoServiceMeshRequest struct {
	ServiceMeshId *string `json:"ServiceMeshId" xml:"ServiceMeshId" require:"true"`
	ClusterId     *string `json:"ClusterId" xml:"ClusterId" require:"true"`
}

func (s AddClusterIntoServiceMeshRequest) String() string {
	return tea.Prettify(s)
}

func (s AddClusterIntoServiceMeshRequest) GoString() string {
	return s.String()
}

func (s *AddClusterIntoServiceMeshRequest) SetServiceMeshId(v string) *AddClusterIntoServiceMeshRequest {
	s.ServiceMeshId = &v
	return s
}

func (s *AddClusterIntoServiceMeshRequest) SetClusterId(v string) *AddClusterIntoServiceMeshRequest {
	s.ClusterId = &v
	return s
}

type AddClusterIntoServiceMeshResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s AddClusterIntoServiceMeshResponse) String() string {
	return tea.Prettify(s)
}

func (s AddClusterIntoServiceMeshResponse) GoString() string {
	return s.String()
}

func (s *AddClusterIntoServiceMeshResponse) SetRequestId(v string) *AddClusterIntoServiceMeshResponse {
	s.RequestId = &v
	return s
}

func (s *AddClusterIntoServiceMeshResponse) SetCode(v string) *AddClusterIntoServiceMeshResponse {
	s.Code = &v
	return s
}

func (s *AddClusterIntoServiceMeshResponse) SetMessage(v string) *AddClusterIntoServiceMeshResponse {
	s.Message = &v
	return s
}

type UpdateIstioInjectionConfigRequest struct {
	ServiceMeshId        *string `json:"ServiceMeshId" xml:"ServiceMeshId" require:"true"`
	Namespace            *string `json:"Namespace" xml:"Namespace" require:"true"`
	EnableIstioInjection *bool   `json:"EnableIstioInjection" xml:"EnableIstioInjection" require:"true"`
}

func (s UpdateIstioInjectionConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateIstioInjectionConfigRequest) GoString() string {
	return s.String()
}

func (s *UpdateIstioInjectionConfigRequest) SetServiceMeshId(v string) *UpdateIstioInjectionConfigRequest {
	s.ServiceMeshId = &v
	return s
}

func (s *UpdateIstioInjectionConfigRequest) SetNamespace(v string) *UpdateIstioInjectionConfigRequest {
	s.Namespace = &v
	return s
}

func (s *UpdateIstioInjectionConfigRequest) SetEnableIstioInjection(v bool) *UpdateIstioInjectionConfigRequest {
	s.EnableIstioInjection = &v
	return s
}

type UpdateIstioInjectionConfigResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s UpdateIstioInjectionConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateIstioInjectionConfigResponse) GoString() string {
	return s.String()
}

func (s *UpdateIstioInjectionConfigResponse) SetRequestId(v string) *UpdateIstioInjectionConfigResponse {
	s.RequestId = &v
	return s
}

type DescribeGuestClusterAccessLogDashboardsRequest struct {
	K8sClusterId *string `json:"K8sClusterId" xml:"K8sClusterId" require:"true"`
}

func (s DescribeGuestClusterAccessLogDashboardsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGuestClusterAccessLogDashboardsRequest) GoString() string {
	return s.String()
}

func (s *DescribeGuestClusterAccessLogDashboardsRequest) SetK8sClusterId(v string) *DescribeGuestClusterAccessLogDashboardsRequest {
	s.K8sClusterId = &v
	return s
}

type DescribeGuestClusterAccessLogDashboardsResponse struct {
	RequestId    *string                                                      `json:"RequestId" xml:"RequestId" require:"true"`
	K8sClusterId *string                                                      `json:"K8sClusterId" xml:"K8sClusterId" require:"true"`
	Dashboards   []*DescribeGuestClusterAccessLogDashboardsResponseDashboards `json:"Dashboards" xml:"Dashboards" require:"true" type:"Repeated"`
}

func (s DescribeGuestClusterAccessLogDashboardsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGuestClusterAccessLogDashboardsResponse) GoString() string {
	return s.String()
}

func (s *DescribeGuestClusterAccessLogDashboardsResponse) SetRequestId(v string) *DescribeGuestClusterAccessLogDashboardsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGuestClusterAccessLogDashboardsResponse) SetK8sClusterId(v string) *DescribeGuestClusterAccessLogDashboardsResponse {
	s.K8sClusterId = &v
	return s
}

func (s *DescribeGuestClusterAccessLogDashboardsResponse) SetDashboards(v []*DescribeGuestClusterAccessLogDashboardsResponseDashboards) *DescribeGuestClusterAccessLogDashboardsResponse {
	s.Dashboards = v
	return s
}

type DescribeGuestClusterAccessLogDashboardsResponseDashboards struct {
	Title *string `json:"Title" xml:"Title" require:"true"`
	Url   *string `json:"Url" xml:"Url" require:"true"`
}

func (s DescribeGuestClusterAccessLogDashboardsResponseDashboards) String() string {
	return tea.Prettify(s)
}

func (s DescribeGuestClusterAccessLogDashboardsResponseDashboards) GoString() string {
	return s.String()
}

func (s *DescribeGuestClusterAccessLogDashboardsResponseDashboards) SetTitle(v string) *DescribeGuestClusterAccessLogDashboardsResponseDashboards {
	s.Title = &v
	return s
}

func (s *DescribeGuestClusterAccessLogDashboardsResponseDashboards) SetUrl(v string) *DescribeGuestClusterAccessLogDashboardsResponseDashboards {
	s.Url = &v
	return s
}

type DescribeClusterPrometheusRequest struct {
	ServiceMeshId      *string `json:"ServiceMeshId" xml:"ServiceMeshId"`
	K8sClusterId       *string `json:"K8sClusterId" xml:"K8sClusterId"`
	K8sClusterRegionId *string `json:"K8sClusterRegionId" xml:"K8sClusterRegionId"`
}

func (s DescribeClusterPrometheusRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterPrometheusRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterPrometheusRequest) SetServiceMeshId(v string) *DescribeClusterPrometheusRequest {
	s.ServiceMeshId = &v
	return s
}

func (s *DescribeClusterPrometheusRequest) SetK8sClusterId(v string) *DescribeClusterPrometheusRequest {
	s.K8sClusterId = &v
	return s
}

func (s *DescribeClusterPrometheusRequest) SetK8sClusterRegionId(v string) *DescribeClusterPrometheusRequest {
	s.K8sClusterRegionId = &v
	return s
}

type DescribeClusterPrometheusResponse struct {
	RequestId  *string `json:"RequestId" xml:"RequestId" require:"true"`
	Prometheus *string `json:"Prometheus" xml:"Prometheus" require:"true"`
}

func (s DescribeClusterPrometheusResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterPrometheusResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterPrometheusResponse) SetRequestId(v string) *DescribeClusterPrometheusResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeClusterPrometheusResponse) SetPrometheus(v string) *DescribeClusterPrometheusResponse {
	s.Prometheus = &v
	return s
}

type DescribeClusterGrafanaRequest struct {
	ServiceMeshId *string `json:"ServiceMeshId" xml:"ServiceMeshId"`
	K8sClusterId  *string `json:"K8sClusterId" xml:"K8sClusterId"`
}

func (s DescribeClusterGrafanaRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterGrafanaRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterGrafanaRequest) SetServiceMeshId(v string) *DescribeClusterGrafanaRequest {
	s.ServiceMeshId = &v
	return s
}

func (s *DescribeClusterGrafanaRequest) SetK8sClusterId(v string) *DescribeClusterGrafanaRequest {
	s.K8sClusterId = &v
	return s
}

type DescribeClusterGrafanaResponse struct {
	RequestId  *string                                     `json:"RequestId" xml:"RequestId" require:"true"`
	Dashboards []*DescribeClusterGrafanaResponseDashboards `json:"Dashboards" xml:"Dashboards" require:"true" type:"Repeated"`
}

func (s DescribeClusterGrafanaResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterGrafanaResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterGrafanaResponse) SetRequestId(v string) *DescribeClusterGrafanaResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeClusterGrafanaResponse) SetDashboards(v []*DescribeClusterGrafanaResponseDashboards) *DescribeClusterGrafanaResponse {
	s.Dashboards = v
	return s
}

type DescribeClusterGrafanaResponseDashboards struct {
	Url   *string `json:"Url" xml:"Url" require:"true"`
	Title *string `json:"Title" xml:"Title" require:"true"`
}

func (s DescribeClusterGrafanaResponseDashboards) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterGrafanaResponseDashboards) GoString() string {
	return s.String()
}

func (s *DescribeClusterGrafanaResponseDashboards) SetUrl(v string) *DescribeClusterGrafanaResponseDashboards {
	s.Url = &v
	return s
}

func (s *DescribeClusterGrafanaResponseDashboards) SetTitle(v string) *DescribeClusterGrafanaResponseDashboards {
	s.Title = &v
	return s
}

type DescribeRegionsRequest struct {
	AcceptLanguage *string `json:"AcceptLanguage" xml:"AcceptLanguage"`
}

func (s DescribeRegionsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsRequest) GoString() string {
	return s.String()
}

func (s *DescribeRegionsRequest) SetAcceptLanguage(v string) *DescribeRegionsRequest {
	s.AcceptLanguage = &v
	return s
}

type DescribeRegionsResponse struct {
	RequestId         *string `json:"RequestId" xml:"RequestId" require:"true"`
	BusinessLocations *string `json:"BusinessLocations" xml:"BusinessLocations" require:"true"`
}

func (s DescribeRegionsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsResponse) GoString() string {
	return s.String()
}

func (s *DescribeRegionsResponse) SetRequestId(v string) *DescribeRegionsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeRegionsResponse) SetBusinessLocations(v string) *DescribeRegionsResponse {
	s.BusinessLocations = &v
	return s
}

type DescribeCensRequest struct {
	ServiceMeshId *string `json:"ServiceMeshId" xml:"ServiceMeshId"`
}

func (s DescribeCensRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeCensRequest) GoString() string {
	return s.String()
}

func (s *DescribeCensRequest) SetServiceMeshId(v string) *DescribeCensRequest {
	s.ServiceMeshId = &v
	return s
}

type DescribeCensResponse struct {
	RequestId *string   `json:"RequestId" xml:"RequestId" require:"true"`
	Clusters  []*string `json:"Clusters" xml:"Clusters" require:"true" type:"Repeated"`
}

func (s DescribeCensResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeCensResponse) GoString() string {
	return s.String()
}

func (s *DescribeCensResponse) SetRequestId(v string) *DescribeCensResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeCensResponse) SetClusters(v []*string) *DescribeCensResponse {
	s.Clusters = v
	return s
}

type DescribeClustersInServiceMeshRequest struct {
	ServiceMeshId *string `json:"ServiceMeshId" xml:"ServiceMeshId"`
}

func (s DescribeClustersInServiceMeshRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClustersInServiceMeshRequest) GoString() string {
	return s.String()
}

func (s *DescribeClustersInServiceMeshRequest) SetServiceMeshId(v string) *DescribeClustersInServiceMeshRequest {
	s.ServiceMeshId = &v
	return s
}

type DescribeClustersInServiceMeshResponse struct {
	RequestId *string                                          `json:"RequestId" xml:"RequestId" require:"true"`
	Clusters  []*DescribeClustersInServiceMeshResponseClusters `json:"Clusters" xml:"Clusters" require:"true" type:"Repeated"`
}

func (s DescribeClustersInServiceMeshResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClustersInServiceMeshResponse) GoString() string {
	return s.String()
}

func (s *DescribeClustersInServiceMeshResponse) SetRequestId(v string) *DescribeClustersInServiceMeshResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeClustersInServiceMeshResponse) SetClusters(v []*DescribeClustersInServiceMeshResponseClusters) *DescribeClustersInServiceMeshResponse {
	s.Clusters = v
	return s
}

type DescribeClustersInServiceMeshResponseClusters struct {
	ClusterId     *string `json:"ClusterId" xml:"ClusterId" require:"true"`
	ClusterType   *string `json:"ClusterType" xml:"ClusterType" require:"true"`
	CreationTime  *string `json:"CreationTime" xml:"CreationTime" require:"true"`
	ErrorMessage  *string `json:"ErrorMessage" xml:"ErrorMessage" require:"true"`
	Name          *string `json:"Name" xml:"Name" require:"true"`
	RegionId      *string `json:"RegionId" xml:"RegionId" require:"true"`
	State         *string `json:"State" xml:"State" require:"true"`
	UpdateTime    *string `json:"UpdateTime" xml:"UpdateTime" require:"true"`
	Version       *string `json:"Version" xml:"Version" require:"true"`
	VpcId         *string `json:"VpcId" xml:"VpcId" require:"true"`
	SgId          *string `json:"SgId" xml:"SgId" require:"true"`
	ClusterDomain *string `json:"ClusterDomain" xml:"ClusterDomain" require:"true"`
}

func (s DescribeClustersInServiceMeshResponseClusters) String() string {
	return tea.Prettify(s)
}

func (s DescribeClustersInServiceMeshResponseClusters) GoString() string {
	return s.String()
}

func (s *DescribeClustersInServiceMeshResponseClusters) SetClusterId(v string) *DescribeClustersInServiceMeshResponseClusters {
	s.ClusterId = &v
	return s
}

func (s *DescribeClustersInServiceMeshResponseClusters) SetClusterType(v string) *DescribeClustersInServiceMeshResponseClusters {
	s.ClusterType = &v
	return s
}

func (s *DescribeClustersInServiceMeshResponseClusters) SetCreationTime(v string) *DescribeClustersInServiceMeshResponseClusters {
	s.CreationTime = &v
	return s
}

func (s *DescribeClustersInServiceMeshResponseClusters) SetErrorMessage(v string) *DescribeClustersInServiceMeshResponseClusters {
	s.ErrorMessage = &v
	return s
}

func (s *DescribeClustersInServiceMeshResponseClusters) SetName(v string) *DescribeClustersInServiceMeshResponseClusters {
	s.Name = &v
	return s
}

func (s *DescribeClustersInServiceMeshResponseClusters) SetRegionId(v string) *DescribeClustersInServiceMeshResponseClusters {
	s.RegionId = &v
	return s
}

func (s *DescribeClustersInServiceMeshResponseClusters) SetState(v string) *DescribeClustersInServiceMeshResponseClusters {
	s.State = &v
	return s
}

func (s *DescribeClustersInServiceMeshResponseClusters) SetUpdateTime(v string) *DescribeClustersInServiceMeshResponseClusters {
	s.UpdateTime = &v
	return s
}

func (s *DescribeClustersInServiceMeshResponseClusters) SetVersion(v string) *DescribeClustersInServiceMeshResponseClusters {
	s.Version = &v
	return s
}

func (s *DescribeClustersInServiceMeshResponseClusters) SetVpcId(v string) *DescribeClustersInServiceMeshResponseClusters {
	s.VpcId = &v
	return s
}

func (s *DescribeClustersInServiceMeshResponseClusters) SetSgId(v string) *DescribeClustersInServiceMeshResponseClusters {
	s.SgId = &v
	return s
}

func (s *DescribeClustersInServiceMeshResponseClusters) SetClusterDomain(v string) *DescribeClustersInServiceMeshResponseClusters {
	s.ClusterDomain = &v
	return s
}

type DescribeIngressGatewaysRequest struct {
	ServiceMeshId *string `json:"ServiceMeshId" xml:"ServiceMeshId"`
}

func (s DescribeIngressGatewaysRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeIngressGatewaysRequest) GoString() string {
	return s.String()
}

func (s *DescribeIngressGatewaysRequest) SetServiceMeshId(v string) *DescribeIngressGatewaysRequest {
	s.ServiceMeshId = &v
	return s
}

type DescribeIngressGatewaysResponse struct {
	RequestId       *string                  `json:"RequestId" xml:"RequestId" require:"true"`
	IngressGateways []map[string]interface{} `json:"IngressGateways" xml:"IngressGateways" require:"true" type:"Repeated"`
}

func (s DescribeIngressGatewaysResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeIngressGatewaysResponse) GoString() string {
	return s.String()
}

func (s *DescribeIngressGatewaysResponse) SetRequestId(v string) *DescribeIngressGatewaysResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeIngressGatewaysResponse) SetIngressGateways(v []map[string]interface{}) *DescribeIngressGatewaysResponse {
	s.IngressGateways = v
	return s
}

type DescribeUpgradeVersionRequest struct {
	ServiceMeshId *string `json:"ServiceMeshId" xml:"ServiceMeshId"`
}

func (s DescribeUpgradeVersionRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeUpgradeVersionRequest) GoString() string {
	return s.String()
}

func (s *DescribeUpgradeVersionRequest) SetServiceMeshId(v string) *DescribeUpgradeVersionRequest {
	s.ServiceMeshId = &v
	return s
}

type DescribeUpgradeVersionResponse struct {
	RequestId *string                                `json:"RequestId" xml:"RequestId" require:"true"`
	Version   *DescribeUpgradeVersionResponseVersion `json:"Version" xml:"Version" require:"true" type:"Struct"`
}

func (s DescribeUpgradeVersionResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeUpgradeVersionResponse) GoString() string {
	return s.String()
}

func (s *DescribeUpgradeVersionResponse) SetRequestId(v string) *DescribeUpgradeVersionResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeUpgradeVersionResponse) SetVersion(v *DescribeUpgradeVersionResponseVersion) *DescribeUpgradeVersionResponse {
	s.Version = v
	return s
}

type DescribeUpgradeVersionResponseVersion struct {
	IstioVersion         *string `json:"IstioVersion" xml:"IstioVersion" require:"true"`
	IstioOperatorVersion *string `json:"IstioOperatorVersion" xml:"IstioOperatorVersion" require:"true"`
	KubernetesVersion    *string `json:"KubernetesVersion" xml:"KubernetesVersion" require:"true"`
}

func (s DescribeUpgradeVersionResponseVersion) String() string {
	return tea.Prettify(s)
}

func (s DescribeUpgradeVersionResponseVersion) GoString() string {
	return s.String()
}

func (s *DescribeUpgradeVersionResponseVersion) SetIstioVersion(v string) *DescribeUpgradeVersionResponseVersion {
	s.IstioVersion = &v
	return s
}

func (s *DescribeUpgradeVersionResponseVersion) SetIstioOperatorVersion(v string) *DescribeUpgradeVersionResponseVersion {
	s.IstioOperatorVersion = &v
	return s
}

func (s *DescribeUpgradeVersionResponseVersion) SetKubernetesVersion(v string) *DescribeUpgradeVersionResponseVersion {
	s.KubernetesVersion = &v
	return s
}

type UpdateMeshFeatureRequest struct {
	ServiceMeshId         *string  `json:"ServiceMeshId" xml:"ServiceMeshId" require:"true"`
	Tracing               *bool    `json:"Tracing" xml:"Tracing"`
	TraceSampling         *float32 `json:"TraceSampling" xml:"TraceSampling"`
	LocalityLoadBalancing *bool    `json:"LocalityLoadBalancing" xml:"LocalityLoadBalancing"`
	Telemetry             *bool    `json:"Telemetry" xml:"Telemetry"`
	OpenAgentPolicy       *bool    `json:"OpenAgentPolicy" xml:"OpenAgentPolicy"`
	OPALogLevel           *string  `json:"OPALogLevel" xml:"OPALogLevel"`
	OPARequestCPU         *string  `json:"OPARequestCPU" xml:"OPARequestCPU"`
	OPARequestMemory      *string  `json:"OPARequestMemory" xml:"OPARequestMemory"`
	OPALimitCPU           *string  `json:"OPALimitCPU" xml:"OPALimitCPU"`
	OPALimitMemory        *string  `json:"OPALimitMemory" xml:"OPALimitMemory"`
	EnableAudit           *bool    `json:"EnableAudit" xml:"EnableAudit"`
	AuditProject          *string  `json:"AuditProject" xml:"AuditProject"`
	ClusterDomain         *string  `json:"ClusterDomain" xml:"ClusterDomain"`
}

func (s UpdateMeshFeatureRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateMeshFeatureRequest) GoString() string {
	return s.String()
}

func (s *UpdateMeshFeatureRequest) SetServiceMeshId(v string) *UpdateMeshFeatureRequest {
	s.ServiceMeshId = &v
	return s
}

func (s *UpdateMeshFeatureRequest) SetTracing(v bool) *UpdateMeshFeatureRequest {
	s.Tracing = &v
	return s
}

func (s *UpdateMeshFeatureRequest) SetTraceSampling(v float32) *UpdateMeshFeatureRequest {
	s.TraceSampling = &v
	return s
}

func (s *UpdateMeshFeatureRequest) SetLocalityLoadBalancing(v bool) *UpdateMeshFeatureRequest {
	s.LocalityLoadBalancing = &v
	return s
}

func (s *UpdateMeshFeatureRequest) SetTelemetry(v bool) *UpdateMeshFeatureRequest {
	s.Telemetry = &v
	return s
}

func (s *UpdateMeshFeatureRequest) SetOpenAgentPolicy(v bool) *UpdateMeshFeatureRequest {
	s.OpenAgentPolicy = &v
	return s
}

func (s *UpdateMeshFeatureRequest) SetOPALogLevel(v string) *UpdateMeshFeatureRequest {
	s.OPALogLevel = &v
	return s
}

func (s *UpdateMeshFeatureRequest) SetOPARequestCPU(v string) *UpdateMeshFeatureRequest {
	s.OPARequestCPU = &v
	return s
}

func (s *UpdateMeshFeatureRequest) SetOPARequestMemory(v string) *UpdateMeshFeatureRequest {
	s.OPARequestMemory = &v
	return s
}

func (s *UpdateMeshFeatureRequest) SetOPALimitCPU(v string) *UpdateMeshFeatureRequest {
	s.OPALimitCPU = &v
	return s
}

func (s *UpdateMeshFeatureRequest) SetOPALimitMemory(v string) *UpdateMeshFeatureRequest {
	s.OPALimitMemory = &v
	return s
}

func (s *UpdateMeshFeatureRequest) SetEnableAudit(v bool) *UpdateMeshFeatureRequest {
	s.EnableAudit = &v
	return s
}

func (s *UpdateMeshFeatureRequest) SetAuditProject(v string) *UpdateMeshFeatureRequest {
	s.AuditProject = &v
	return s
}

func (s *UpdateMeshFeatureRequest) SetClusterDomain(v string) *UpdateMeshFeatureRequest {
	s.ClusterDomain = &v
	return s
}

type UpdateMeshFeatureResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s UpdateMeshFeatureResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateMeshFeatureResponse) GoString() string {
	return s.String()
}

func (s *UpdateMeshFeatureResponse) SetRequestId(v string) *UpdateMeshFeatureResponse {
	s.RequestId = &v
	return s
}

type UpgradeMeshVersionRequest struct {
	ServiceMeshId *string `json:"ServiceMeshId" xml:"ServiceMeshId"`
}

func (s UpgradeMeshVersionRequest) String() string {
	return tea.Prettify(s)
}

func (s UpgradeMeshVersionRequest) GoString() string {
	return s.String()
}

func (s *UpgradeMeshVersionRequest) SetServiceMeshId(v string) *UpgradeMeshVersionRequest {
	s.ServiceMeshId = &v
	return s
}

type UpgradeMeshVersionResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s UpgradeMeshVersionResponse) String() string {
	return tea.Prettify(s)
}

func (s UpgradeMeshVersionResponse) GoString() string {
	return s.String()
}

func (s *UpgradeMeshVersionResponse) SetRequestId(v string) *UpgradeMeshVersionResponse {
	s.RequestId = &v
	return s
}

type DescribeServiceMeshesRequest struct {
}

func (s DescribeServiceMeshesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshesRequest) GoString() string {
	return s.String()
}

type DescribeServiceMeshesResponse struct {
	RequestId     *string                                       `json:"RequestId" xml:"RequestId" require:"true"`
	ServiceMeshes []*DescribeServiceMeshesResponseServiceMeshes `json:"ServiceMeshes" xml:"ServiceMeshes" require:"true" type:"Repeated"`
}

func (s DescribeServiceMeshesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshesResponse) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshesResponse) SetRequestId(v string) *DescribeServiceMeshesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeServiceMeshesResponse) SetServiceMeshes(v []*DescribeServiceMeshesResponseServiceMeshes) *DescribeServiceMeshesResponse {
	s.ServiceMeshes = v
	return s
}

type DescribeServiceMeshesResponseServiceMeshes struct {
	Endpoints       *DescribeServiceMeshesResponseServiceMeshesEndpoints       `json:"Endpoints" xml:"Endpoints" require:"true" type:"Struct"`
	ServiceMeshInfo *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo `json:"ServiceMeshInfo" xml:"ServiceMeshInfo" require:"true" type:"Struct"`
	Spec            *DescribeServiceMeshesResponseServiceMeshesSpec            `json:"Spec" xml:"Spec" require:"true" type:"Struct"`
	Clusters        []*string                                                  `json:"Clusters" xml:"Clusters" require:"true" type:"Repeated"`
}

func (s DescribeServiceMeshesResponseServiceMeshes) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshesResponseServiceMeshes) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshesResponseServiceMeshes) SetEndpoints(v *DescribeServiceMeshesResponseServiceMeshesEndpoints) *DescribeServiceMeshesResponseServiceMeshes {
	s.Endpoints = v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshes) SetServiceMeshInfo(v *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo) *DescribeServiceMeshesResponseServiceMeshes {
	s.ServiceMeshInfo = v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshes) SetSpec(v *DescribeServiceMeshesResponseServiceMeshesSpec) *DescribeServiceMeshesResponseServiceMeshes {
	s.Spec = v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshes) SetClusters(v []*string) *DescribeServiceMeshesResponseServiceMeshes {
	s.Clusters = v
	return s
}

type DescribeServiceMeshesResponseServiceMeshesEndpoints struct {
	IntranetApiServerEndpoint *string `json:"IntranetApiServerEndpoint" xml:"IntranetApiServerEndpoint" require:"true"`
	IntranetPilotEndpoint     *string `json:"IntranetPilotEndpoint" xml:"IntranetPilotEndpoint" require:"true"`
	PublicApiServerEndpoint   *string `json:"PublicApiServerEndpoint" xml:"PublicApiServerEndpoint" require:"true"`
	PublicPilotEndpoint       *string `json:"PublicPilotEndpoint" xml:"PublicPilotEndpoint" require:"true"`
	ReverseTunnelEndpoint     *string `json:"ReverseTunnelEndpoint" xml:"ReverseTunnelEndpoint" require:"true"`
}

func (s DescribeServiceMeshesResponseServiceMeshesEndpoints) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshesResponseServiceMeshesEndpoints) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshesResponseServiceMeshesEndpoints) SetIntranetApiServerEndpoint(v string) *DescribeServiceMeshesResponseServiceMeshesEndpoints {
	s.IntranetApiServerEndpoint = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesEndpoints) SetIntranetPilotEndpoint(v string) *DescribeServiceMeshesResponseServiceMeshesEndpoints {
	s.IntranetPilotEndpoint = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesEndpoints) SetPublicApiServerEndpoint(v string) *DescribeServiceMeshesResponseServiceMeshesEndpoints {
	s.PublicApiServerEndpoint = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesEndpoints) SetPublicPilotEndpoint(v string) *DescribeServiceMeshesResponseServiceMeshesEndpoints {
	s.PublicPilotEndpoint = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesEndpoints) SetReverseTunnelEndpoint(v string) *DescribeServiceMeshesResponseServiceMeshesEndpoints {
	s.ReverseTunnelEndpoint = &v
	return s
}

type DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo struct {
	CreationTime  *string `json:"CreationTime" xml:"CreationTime" require:"true"`
	ErrorMessage  *string `json:"ErrorMessage" xml:"ErrorMessage" require:"true"`
	Name          *string `json:"Name" xml:"Name" require:"true"`
	RegionId      *string `json:"RegionId" xml:"RegionId" require:"true"`
	ServiceMeshId *string `json:"ServiceMeshId" xml:"ServiceMeshId" require:"true"`
	State         *string `json:"State" xml:"State" require:"true"`
	UpdateTime    *string `json:"UpdateTime" xml:"UpdateTime" require:"true"`
	Version       *string `json:"Version" xml:"Version" require:"true"`
}

func (s DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo) SetCreationTime(v string) *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo {
	s.CreationTime = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo) SetErrorMessage(v string) *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo {
	s.ErrorMessage = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo) SetName(v string) *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo {
	s.Name = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo) SetRegionId(v string) *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo {
	s.RegionId = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo) SetServiceMeshId(v string) *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo {
	s.ServiceMeshId = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo) SetState(v string) *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo {
	s.State = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo) SetUpdateTime(v string) *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo {
	s.UpdateTime = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo) SetVersion(v string) *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo {
	s.Version = &v
	return s
}

type DescribeServiceMeshesResponseServiceMeshesSpec struct {
	LoadBalancer *DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer `json:"LoadBalancer" xml:"LoadBalancer" require:"true" type:"Struct"`
	MeshConfig   *DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig   `json:"MeshConfig" xml:"MeshConfig" require:"true" type:"Struct"`
	Network      *DescribeServiceMeshesResponseServiceMeshesSpecNetwork      `json:"Network" xml:"Network" require:"true" type:"Struct"`
}

func (s DescribeServiceMeshesResponseServiceMeshesSpec) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshesResponseServiceMeshesSpec) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpec) SetLoadBalancer(v *DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer) *DescribeServiceMeshesResponseServiceMeshesSpec {
	s.LoadBalancer = v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpec) SetMeshConfig(v *DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig) *DescribeServiceMeshesResponseServiceMeshesSpec {
	s.MeshConfig = v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpec) SetNetwork(v *DescribeServiceMeshesResponseServiceMeshesSpecNetwork) *DescribeServiceMeshesResponseServiceMeshesSpec {
	s.Network = v
	return s
}

type DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer struct {
	ApiServerLoadbalancerId   *string `json:"ApiServerLoadbalancerId" xml:"ApiServerLoadbalancerId" require:"true"`
	ApiServerPublicEip        *bool   `json:"ApiServerPublicEip" xml:"ApiServerPublicEip" require:"true"`
	PilotPublicEip            *bool   `json:"PilotPublicEip" xml:"PilotPublicEip" require:"true"`
	PilotPublicLoadbalancerId *string `json:"PilotPublicLoadbalancerId" xml:"PilotPublicLoadbalancerId" require:"true"`
}

func (s DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer) SetApiServerLoadbalancerId(v string) *DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer {
	s.ApiServerLoadbalancerId = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer) SetApiServerPublicEip(v bool) *DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer {
	s.ApiServerPublicEip = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer) SetPilotPublicEip(v bool) *DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer {
	s.PilotPublicEip = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer) SetPilotPublicLoadbalancerId(v string) *DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer {
	s.PilotPublicLoadbalancerId = &v
	return s
}

type DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig struct {
	Mtls                  *bool   `json:"Mtls" xml:"Mtls" require:"true"`
	OutboundTrafficPolicy *string `json:"OutboundTrafficPolicy" xml:"OutboundTrafficPolicy" require:"true"`
	StrictMtls            *bool   `json:"StrictMtls" xml:"StrictMtls" require:"true"`
	Tracing               *bool   `json:"Tracing" xml:"Tracing" require:"true"`
	Telemetry             *bool   `json:"Telemetry" xml:"Telemetry" require:"true"`
}

func (s DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig) SetMtls(v bool) *DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig {
	s.Mtls = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig) SetOutboundTrafficPolicy(v string) *DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig {
	s.OutboundTrafficPolicy = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig) SetStrictMtls(v bool) *DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig {
	s.StrictMtls = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig) SetTracing(v bool) *DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig {
	s.Tracing = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig) SetTelemetry(v bool) *DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig {
	s.Telemetry = &v
	return s
}

type DescribeServiceMeshesResponseServiceMeshesSpecNetwork struct {
	SecurityGroupId *string   `json:"SecurityGroupId" xml:"SecurityGroupId" require:"true"`
	VpcId           *string   `json:"VpcId" xml:"VpcId" require:"true"`
	VSwitches       []*string `json:"VSwitches" xml:"VSwitches" require:"true" type:"Repeated"`
}

func (s DescribeServiceMeshesResponseServiceMeshesSpecNetwork) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshesResponseServiceMeshesSpecNetwork) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpecNetwork) SetSecurityGroupId(v string) *DescribeServiceMeshesResponseServiceMeshesSpecNetwork {
	s.SecurityGroupId = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpecNetwork) SetVpcId(v string) *DescribeServiceMeshesResponseServiceMeshesSpecNetwork {
	s.VpcId = &v
	return s
}

func (s *DescribeServiceMeshesResponseServiceMeshesSpecNetwork) SetVSwitches(v []*string) *DescribeServiceMeshesResponseServiceMeshesSpecNetwork {
	s.VSwitches = v
	return s
}

type DescribeServiceMeshDetailRequest struct {
	ServiceMeshId *string `json:"ServiceMeshId" xml:"ServiceMeshId" require:"true"`
}

func (s DescribeServiceMeshDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshDetailRequest) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshDetailRequest) SetServiceMeshId(v string) *DescribeServiceMeshDetailRequest {
	s.ServiceMeshId = &v
	return s
}

type DescribeServiceMeshDetailResponse struct {
	RequestId   *string                                       `json:"RequestId" xml:"RequestId" require:"true"`
	ServiceMesh *DescribeServiceMeshDetailResponseServiceMesh `json:"ServiceMesh" xml:"ServiceMesh" require:"true" type:"Struct"`
}

func (s DescribeServiceMeshDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshDetailResponse) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshDetailResponse) SetRequestId(v string) *DescribeServiceMeshDetailResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeServiceMeshDetailResponse) SetServiceMesh(v *DescribeServiceMeshDetailResponseServiceMesh) *DescribeServiceMeshDetailResponse {
	s.ServiceMesh = v
	return s
}

type DescribeServiceMeshDetailResponseServiceMesh struct {
	Endpoints       *DescribeServiceMeshDetailResponseServiceMeshEndpoints       `json:"Endpoints" xml:"Endpoints" require:"true" type:"Struct"`
	ServiceMeshInfo *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo `json:"ServiceMeshInfo" xml:"ServiceMeshInfo" require:"true" type:"Struct"`
	Spec            *DescribeServiceMeshDetailResponseServiceMeshSpec            `json:"Spec" xml:"Spec" require:"true" type:"Struct"`
	Clusters        []*string                                                    `json:"Clusters" xml:"Clusters" require:"true" type:"Repeated"`
}

func (s DescribeServiceMeshDetailResponseServiceMesh) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshDetailResponseServiceMesh) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshDetailResponseServiceMesh) SetEndpoints(v *DescribeServiceMeshDetailResponseServiceMeshEndpoints) *DescribeServiceMeshDetailResponseServiceMesh {
	s.Endpoints = v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMesh) SetServiceMeshInfo(v *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo) *DescribeServiceMeshDetailResponseServiceMesh {
	s.ServiceMeshInfo = v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMesh) SetSpec(v *DescribeServiceMeshDetailResponseServiceMeshSpec) *DescribeServiceMeshDetailResponseServiceMesh {
	s.Spec = v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMesh) SetClusters(v []*string) *DescribeServiceMeshDetailResponseServiceMesh {
	s.Clusters = v
	return s
}

type DescribeServiceMeshDetailResponseServiceMeshEndpoints struct {
	IntranetApiServerEndpoint *string `json:"IntranetApiServerEndpoint" xml:"IntranetApiServerEndpoint" require:"true"`
	IntranetPilotEndpoint     *string `json:"IntranetPilotEndpoint" xml:"IntranetPilotEndpoint" require:"true"`
	PublicApiServerEndpoint   *string `json:"PublicApiServerEndpoint" xml:"PublicApiServerEndpoint" require:"true"`
	PublicPilotEndpoint       *string `json:"PublicPilotEndpoint" xml:"PublicPilotEndpoint" require:"true"`
}

func (s DescribeServiceMeshDetailResponseServiceMeshEndpoints) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshDetailResponseServiceMeshEndpoints) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshDetailResponseServiceMeshEndpoints) SetIntranetApiServerEndpoint(v string) *DescribeServiceMeshDetailResponseServiceMeshEndpoints {
	s.IntranetApiServerEndpoint = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshEndpoints) SetIntranetPilotEndpoint(v string) *DescribeServiceMeshDetailResponseServiceMeshEndpoints {
	s.IntranetPilotEndpoint = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshEndpoints) SetPublicApiServerEndpoint(v string) *DescribeServiceMeshDetailResponseServiceMeshEndpoints {
	s.PublicApiServerEndpoint = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshEndpoints) SetPublicPilotEndpoint(v string) *DescribeServiceMeshDetailResponseServiceMeshEndpoints {
	s.PublicPilotEndpoint = &v
	return s
}

type DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo struct {
	CreationTime  *string `json:"CreationTime" xml:"CreationTime" require:"true"`
	ErrorMessage  *string `json:"ErrorMessage" xml:"ErrorMessage" require:"true"`
	Name          *string `json:"Name" xml:"Name" require:"true"`
	RegionId      *string `json:"RegionId" xml:"RegionId" require:"true"`
	ServiceMeshId *string `json:"ServiceMeshId" xml:"ServiceMeshId" require:"true"`
	State         *string `json:"State" xml:"State" require:"true"`
	UpdateTime    *string `json:"UpdateTime" xml:"UpdateTime" require:"true"`
	Version       *string `json:"Version" xml:"Version" require:"true"`
}

func (s DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo) SetCreationTime(v string) *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo {
	s.CreationTime = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo) SetErrorMessage(v string) *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo {
	s.ErrorMessage = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo) SetName(v string) *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo {
	s.Name = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo) SetRegionId(v string) *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo {
	s.RegionId = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo) SetServiceMeshId(v string) *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo {
	s.ServiceMeshId = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo) SetState(v string) *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo {
	s.State = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo) SetUpdateTime(v string) *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo {
	s.UpdateTime = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo) SetVersion(v string) *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo {
	s.Version = &v
	return s
}

type DescribeServiceMeshDetailResponseServiceMeshSpec struct {
	LoadBalancer *DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer `json:"LoadBalancer" xml:"LoadBalancer" require:"true" type:"Struct"`
	MeshConfig   *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig   `json:"MeshConfig" xml:"MeshConfig" require:"true" type:"Struct"`
	Network      *DescribeServiceMeshDetailResponseServiceMeshSpecNetwork      `json:"Network" xml:"Network" require:"true" type:"Struct"`
}

func (s DescribeServiceMeshDetailResponseServiceMeshSpec) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshDetailResponseServiceMeshSpec) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpec) SetLoadBalancer(v *DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer) *DescribeServiceMeshDetailResponseServiceMeshSpec {
	s.LoadBalancer = v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpec) SetMeshConfig(v *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig) *DescribeServiceMeshDetailResponseServiceMeshSpec {
	s.MeshConfig = v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpec) SetNetwork(v *DescribeServiceMeshDetailResponseServiceMeshSpecNetwork) *DescribeServiceMeshDetailResponseServiceMeshSpec {
	s.Network = v
	return s
}

type DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer struct {
	ApiServerLoadbalancerId   *string `json:"ApiServerLoadbalancerId" xml:"ApiServerLoadbalancerId" require:"true"`
	ApiServerPublicEip        *bool   `json:"ApiServerPublicEip" xml:"ApiServerPublicEip" require:"true"`
	PilotPublicEip            *bool   `json:"PilotPublicEip" xml:"PilotPublicEip" require:"true"`
	PilotPublicLoadbalancerId *string `json:"PilotPublicLoadbalancerId" xml:"PilotPublicLoadbalancerId" require:"true"`
}

func (s DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer) SetApiServerLoadbalancerId(v string) *DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer {
	s.ApiServerLoadbalancerId = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer) SetApiServerPublicEip(v bool) *DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer {
	s.ApiServerPublicEip = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer) SetPilotPublicEip(v bool) *DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer {
	s.PilotPublicEip = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer) SetPilotPublicLoadbalancerId(v string) *DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer {
	s.PilotPublicLoadbalancerId = &v
	return s
}

type DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig struct {
	EnableLocalityLB *bool                                                            `json:"EnableLocalityLB" xml:"EnableLocalityLB" require:"true"`
	Telemetry        *bool                                                            `json:"Telemetry" xml:"Telemetry" require:"true"`
	Tracing          *bool                                                            `json:"Tracing" xml:"Tracing" require:"true"`
	Pilot            *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigPilot `json:"Pilot" xml:"Pilot" require:"true" type:"Struct"`
	OPA              *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA   `json:"OPA" xml:"OPA" require:"true" type:"Struct"`
	Audit            *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit `json:"Audit" xml:"Audit" require:"true" type:"Struct"`
}

func (s DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig) SetEnableLocalityLB(v bool) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig {
	s.EnableLocalityLB = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig) SetTelemetry(v bool) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig {
	s.Telemetry = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig) SetTracing(v bool) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig {
	s.Tracing = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig) SetPilot(v *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigPilot) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig {
	s.Pilot = v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig) SetOPA(v *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig {
	s.OPA = v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig) SetAudit(v *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig {
	s.Audit = v
	return s
}

type DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigPilot struct {
	TraceSampling *float32 `json:"TraceSampling" xml:"TraceSampling" require:"true"`
}

func (s DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigPilot) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigPilot) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigPilot) SetTraceSampling(v float32) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigPilot {
	s.TraceSampling = &v
	return s
}

type DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA struct {
	Enabled       *bool   `json:"Enabled" xml:"Enabled" require:"true"`
	LogLevel      *string `json:"LogLevel" xml:"LogLevel" require:"true"`
	RequestCPU    *string `json:"RequestCPU" xml:"RequestCPU" require:"true"`
	RequestMemory *string `json:"RequestMemory" xml:"RequestMemory" require:"true"`
	LimitCPU      *string `json:"LimitCPU" xml:"LimitCPU" require:"true"`
	LimitMemory   *string `json:"LimitMemory" xml:"LimitMemory" require:"true"`
}

func (s DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA) SetEnabled(v bool) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA {
	s.Enabled = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA) SetLogLevel(v string) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA {
	s.LogLevel = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA) SetRequestCPU(v string) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA {
	s.RequestCPU = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA) SetRequestMemory(v string) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA {
	s.RequestMemory = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA) SetLimitCPU(v string) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA {
	s.LimitCPU = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA) SetLimitMemory(v string) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA {
	s.LimitMemory = &v
	return s
}

type DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit struct {
	Enabled *bool   `json:"Enabled" xml:"Enabled" require:"true"`
	Project *string `json:"Project" xml:"Project" require:"true"`
}

func (s DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit) SetEnabled(v bool) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit {
	s.Enabled = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit) SetProject(v string) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit {
	s.Project = &v
	return s
}

type DescribeServiceMeshDetailResponseServiceMeshSpecNetwork struct {
	SecurityGroupId *string   `json:"SecurityGroupId" xml:"SecurityGroupId" require:"true"`
	VpcId           *string   `json:"VpcId" xml:"VpcId" require:"true"`
	VSwitches       []*string `json:"VSwitches" xml:"VSwitches" require:"true" type:"Repeated"`
}

func (s DescribeServiceMeshDetailResponseServiceMeshSpecNetwork) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshDetailResponseServiceMeshSpecNetwork) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecNetwork) SetSecurityGroupId(v string) *DescribeServiceMeshDetailResponseServiceMeshSpecNetwork {
	s.SecurityGroupId = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecNetwork) SetVpcId(v string) *DescribeServiceMeshDetailResponseServiceMeshSpecNetwork {
	s.VpcId = &v
	return s
}

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecNetwork) SetVSwitches(v []*string) *DescribeServiceMeshDetailResponseServiceMeshSpecNetwork {
	s.VSwitches = v
	return s
}

type DescribeServiceMeshKubeconfigRequest struct {
	ServiceMeshId    *string `json:"ServiceMeshId" xml:"ServiceMeshId" require:"true"`
	PrivateIpAddress *bool   `json:"PrivateIpAddress" xml:"PrivateIpAddress"`
}

func (s DescribeServiceMeshKubeconfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshKubeconfigRequest) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshKubeconfigRequest) SetServiceMeshId(v string) *DescribeServiceMeshKubeconfigRequest {
	s.ServiceMeshId = &v
	return s
}

func (s *DescribeServiceMeshKubeconfigRequest) SetPrivateIpAddress(v bool) *DescribeServiceMeshKubeconfigRequest {
	s.PrivateIpAddress = &v
	return s
}

type DescribeServiceMeshKubeconfigResponse struct {
	Kubeconfig *string `json:"Kubeconfig" xml:"Kubeconfig" require:"true"`
	RequestId  *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DescribeServiceMeshKubeconfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeServiceMeshKubeconfigResponse) GoString() string {
	return s.String()
}

func (s *DescribeServiceMeshKubeconfigResponse) SetKubeconfig(v string) *DescribeServiceMeshKubeconfigResponse {
	s.Kubeconfig = &v
	return s
}

func (s *DescribeServiceMeshKubeconfigResponse) SetRequestId(v string) *DescribeServiceMeshKubeconfigResponse {
	s.RequestId = &v
	return s
}

type CreateServiceMeshRequest struct {
	RegionId              *string  `json:"RegionId" xml:"RegionId" require:"true"`
	IstioVersion          *string  `json:"IstioVersion" xml:"IstioVersion"`
	VpcId                 *string  `json:"VpcId" xml:"VpcId" require:"true"`
	ApiServerPublicEip    *bool    `json:"ApiServerPublicEip" xml:"ApiServerPublicEip"`
	PilotPublicEip        *bool    `json:"PilotPublicEip" xml:"PilotPublicEip"`
	Tracing               *bool    `json:"Tracing" xml:"Tracing"`
	Name                  *string  `json:"Name" xml:"Name"`
	VSwitches             *string  `json:"VSwitches" xml:"VSwitches"`
	TraceSampling         *float32 `json:"TraceSampling" xml:"TraceSampling"`
	LocalityLoadBalancing *bool    `json:"LocalityLoadBalancing" xml:"LocalityLoadBalancing"`
	Telemetry             *bool    `json:"Telemetry" xml:"Telemetry"`
	OpenAgentPolicy       *bool    `json:"OpenAgentPolicy" xml:"OpenAgentPolicy"`
	OPALogLevel           *string  `json:"OPALogLevel" xml:"OPALogLevel"`
	OPARequestCPU         *string  `json:"OPARequestCPU" xml:"OPARequestCPU"`
	OPARequestMemory      *string  `json:"OPARequestMemory" xml:"OPARequestMemory"`
	OPALimitCPU           *string  `json:"OPALimitCPU" xml:"OPALimitCPU"`
	OPALimitMemory        *string  `json:"OPALimitMemory" xml:"OPALimitMemory"`
	EnableAudit           *bool    `json:"EnableAudit" xml:"EnableAudit"`
	AuditProject          *string  `json:"AuditProject" xml:"AuditProject"`
}

func (s CreateServiceMeshRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateServiceMeshRequest) GoString() string {
	return s.String()
}

func (s *CreateServiceMeshRequest) SetRegionId(v string) *CreateServiceMeshRequest {
	s.RegionId = &v
	return s
}

func (s *CreateServiceMeshRequest) SetIstioVersion(v string) *CreateServiceMeshRequest {
	s.IstioVersion = &v
	return s
}

func (s *CreateServiceMeshRequest) SetVpcId(v string) *CreateServiceMeshRequest {
	s.VpcId = &v
	return s
}

func (s *CreateServiceMeshRequest) SetApiServerPublicEip(v bool) *CreateServiceMeshRequest {
	s.ApiServerPublicEip = &v
	return s
}

func (s *CreateServiceMeshRequest) SetPilotPublicEip(v bool) *CreateServiceMeshRequest {
	s.PilotPublicEip = &v
	return s
}

func (s *CreateServiceMeshRequest) SetTracing(v bool) *CreateServiceMeshRequest {
	s.Tracing = &v
	return s
}

func (s *CreateServiceMeshRequest) SetName(v string) *CreateServiceMeshRequest {
	s.Name = &v
	return s
}

func (s *CreateServiceMeshRequest) SetVSwitches(v string) *CreateServiceMeshRequest {
	s.VSwitches = &v
	return s
}

func (s *CreateServiceMeshRequest) SetTraceSampling(v float32) *CreateServiceMeshRequest {
	s.TraceSampling = &v
	return s
}

func (s *CreateServiceMeshRequest) SetLocalityLoadBalancing(v bool) *CreateServiceMeshRequest {
	s.LocalityLoadBalancing = &v
	return s
}

func (s *CreateServiceMeshRequest) SetTelemetry(v bool) *CreateServiceMeshRequest {
	s.Telemetry = &v
	return s
}

func (s *CreateServiceMeshRequest) SetOpenAgentPolicy(v bool) *CreateServiceMeshRequest {
	s.OpenAgentPolicy = &v
	return s
}

func (s *CreateServiceMeshRequest) SetOPALogLevel(v string) *CreateServiceMeshRequest {
	s.OPALogLevel = &v
	return s
}

func (s *CreateServiceMeshRequest) SetOPARequestCPU(v string) *CreateServiceMeshRequest {
	s.OPARequestCPU = &v
	return s
}

func (s *CreateServiceMeshRequest) SetOPARequestMemory(v string) *CreateServiceMeshRequest {
	s.OPARequestMemory = &v
	return s
}

func (s *CreateServiceMeshRequest) SetOPALimitCPU(v string) *CreateServiceMeshRequest {
	s.OPALimitCPU = &v
	return s
}

func (s *CreateServiceMeshRequest) SetOPALimitMemory(v string) *CreateServiceMeshRequest {
	s.OPALimitMemory = &v
	return s
}

func (s *CreateServiceMeshRequest) SetEnableAudit(v bool) *CreateServiceMeshRequest {
	s.EnableAudit = &v
	return s
}

func (s *CreateServiceMeshRequest) SetAuditProject(v string) *CreateServiceMeshRequest {
	s.AuditProject = &v
	return s
}

type CreateServiceMeshResponse struct {
	RequestId     *string `json:"RequestId" xml:"RequestId" require:"true"`
	ServiceMeshId *string `json:"ServiceMeshId" xml:"ServiceMeshId" require:"true"`
}

func (s CreateServiceMeshResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateServiceMeshResponse) GoString() string {
	return s.String()
}

func (s *CreateServiceMeshResponse) SetRequestId(v string) *CreateServiceMeshResponse {
	s.RequestId = &v
	return s
}

func (s *CreateServiceMeshResponse) SetServiceMeshId(v string) *CreateServiceMeshResponse {
	s.ServiceMeshId = &v
	return s
}

type DeleteServiceMeshRequest struct {
	ServiceMeshId *string `json:"ServiceMeshId" xml:"ServiceMeshId" require:"true"`
	Force         *bool   `json:"Force" xml:"Force"`
}

func (s DeleteServiceMeshRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteServiceMeshRequest) GoString() string {
	return s.String()
}

func (s *DeleteServiceMeshRequest) SetServiceMeshId(v string) *DeleteServiceMeshRequest {
	s.ServiceMeshId = &v
	return s
}

func (s *DeleteServiceMeshRequest) SetForce(v bool) *DeleteServiceMeshRequest {
	s.Force = &v
	return s
}

type DeleteServiceMeshResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteServiceMeshResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteServiceMeshResponse) GoString() string {
	return s.String()
}

func (s *DeleteServiceMeshResponse) SetRequestId(v string) *DeleteServiceMeshResponse {
	s.RequestId = &v
	return s
}

type Client struct {
	rpc.Client
}

func NewClient(config *rpc.Config) (*Client, error) {
	client := new(Client)
	err := client.Init(config)
	return client, err
}

func (client *Client) Init(config *rpc.Config) (_err error) {
	_err = client.Client.Init(config)
	if _err != nil {
		return _err
	}
	client.EndpointRule = tea.String("central")
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("servicemesh"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) RemoveClusterFromServiceMeshWithOptions(request *RemoveClusterFromServiceMeshRequest, runtime *util.RuntimeOptions) (_result *RemoveClusterFromServiceMeshResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveClusterFromServiceMeshResponse{}
	_body, _err := client.DoRequest(tea.String("RemoveClusterFromServiceMesh"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveClusterFromServiceMesh(request *RemoveClusterFromServiceMeshRequest) (_result *RemoveClusterFromServiceMeshResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RemoveClusterFromServiceMeshResponse{}
	_body, _err := client.RemoveClusterFromServiceMeshWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddClusterIntoServiceMeshWithOptions(request *AddClusterIntoServiceMeshRequest, runtime *util.RuntimeOptions) (_result *AddClusterIntoServiceMeshResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddClusterIntoServiceMeshResponse{}
	_body, _err := client.DoRequest(tea.String("AddClusterIntoServiceMesh"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddClusterIntoServiceMesh(request *AddClusterIntoServiceMeshRequest) (_result *AddClusterIntoServiceMeshResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddClusterIntoServiceMeshResponse{}
	_body, _err := client.AddClusterIntoServiceMeshWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateIstioInjectionConfigWithOptions(request *UpdateIstioInjectionConfigRequest, runtime *util.RuntimeOptions) (_result *UpdateIstioInjectionConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateIstioInjectionConfigResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateIstioInjectionConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateIstioInjectionConfig(request *UpdateIstioInjectionConfigRequest) (_result *UpdateIstioInjectionConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateIstioInjectionConfigResponse{}
	_body, _err := client.UpdateIstioInjectionConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGuestClusterAccessLogDashboardsWithOptions(request *DescribeGuestClusterAccessLogDashboardsRequest, runtime *util.RuntimeOptions) (_result *DescribeGuestClusterAccessLogDashboardsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGuestClusterAccessLogDashboardsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGuestClusterAccessLogDashboards"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGuestClusterAccessLogDashboards(request *DescribeGuestClusterAccessLogDashboardsRequest) (_result *DescribeGuestClusterAccessLogDashboardsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGuestClusterAccessLogDashboardsResponse{}
	_body, _err := client.DescribeGuestClusterAccessLogDashboardsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterPrometheusWithOptions(request *DescribeClusterPrometheusRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterPrometheusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeClusterPrometheusResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeClusterPrometheus"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeClusterPrometheus(request *DescribeClusterPrometheusRequest) (_result *DescribeClusterPrometheusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeClusterPrometheusResponse{}
	_body, _err := client.DescribeClusterPrometheusWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterGrafanaWithOptions(request *DescribeClusterGrafanaRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterGrafanaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeClusterGrafanaResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeClusterGrafana"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeClusterGrafana(request *DescribeClusterGrafanaRequest) (_result *DescribeClusterGrafanaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeClusterGrafanaResponse{}
	_body, _err := client.DescribeClusterGrafanaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeRegionsWithOptions(request *DescribeRegionsRequest, runtime *util.RuntimeOptions) (_result *DescribeRegionsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeRegionsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeRegions"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeRegions(request *DescribeRegionsRequest) (_result *DescribeRegionsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeRegionsResponse{}
	_body, _err := client.DescribeRegionsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeCensWithOptions(request *DescribeCensRequest, runtime *util.RuntimeOptions) (_result *DescribeCensResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeCensResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeCens"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeCens(request *DescribeCensRequest) (_result *DescribeCensResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeCensResponse{}
	_body, _err := client.DescribeCensWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClustersInServiceMeshWithOptions(request *DescribeClustersInServiceMeshRequest, runtime *util.RuntimeOptions) (_result *DescribeClustersInServiceMeshResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeClustersInServiceMeshResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeClustersInServiceMesh"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeClustersInServiceMesh(request *DescribeClustersInServiceMeshRequest) (_result *DescribeClustersInServiceMeshResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeClustersInServiceMeshResponse{}
	_body, _err := client.DescribeClustersInServiceMeshWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeIngressGatewaysWithOptions(request *DescribeIngressGatewaysRequest, runtime *util.RuntimeOptions) (_result *DescribeIngressGatewaysResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeIngressGatewaysResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeIngressGateways"), tea.String("HTTPS"), tea.String("GET"), tea.String("2020-01-11"), tea.String("AK"), tea.ToMap(request), nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeIngressGateways(request *DescribeIngressGatewaysRequest) (_result *DescribeIngressGatewaysResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeIngressGatewaysResponse{}
	_body, _err := client.DescribeIngressGatewaysWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeUpgradeVersionWithOptions(request *DescribeUpgradeVersionRequest, runtime *util.RuntimeOptions) (_result *DescribeUpgradeVersionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeUpgradeVersionResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeUpgradeVersion"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeUpgradeVersion(request *DescribeUpgradeVersionRequest) (_result *DescribeUpgradeVersionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeUpgradeVersionResponse{}
	_body, _err := client.DescribeUpgradeVersionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateMeshFeatureWithOptions(request *UpdateMeshFeatureRequest, runtime *util.RuntimeOptions) (_result *UpdateMeshFeatureResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateMeshFeatureResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateMeshFeature"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateMeshFeature(request *UpdateMeshFeatureRequest) (_result *UpdateMeshFeatureResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateMeshFeatureResponse{}
	_body, _err := client.UpdateMeshFeatureWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpgradeMeshVersionWithOptions(request *UpgradeMeshVersionRequest, runtime *util.RuntimeOptions) (_result *UpgradeMeshVersionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpgradeMeshVersionResponse{}
	_body, _err := client.DoRequest(tea.String("UpgradeMeshVersion"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpgradeMeshVersion(request *UpgradeMeshVersionRequest) (_result *UpgradeMeshVersionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpgradeMeshVersionResponse{}
	_body, _err := client.UpgradeMeshVersionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeServiceMeshesWithOptions(request *DescribeServiceMeshesRequest, runtime *util.RuntimeOptions) (_result *DescribeServiceMeshesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeServiceMeshesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeServiceMeshes"), tea.String("HTTPS"), tea.String("GET"), tea.String("2020-01-11"), tea.String("AK"), tea.ToMap(request), nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeServiceMeshes(request *DescribeServiceMeshesRequest) (_result *DescribeServiceMeshesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeServiceMeshesResponse{}
	_body, _err := client.DescribeServiceMeshesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeServiceMeshDetailWithOptions(request *DescribeServiceMeshDetailRequest, runtime *util.RuntimeOptions) (_result *DescribeServiceMeshDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeServiceMeshDetailResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeServiceMeshDetail"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeServiceMeshDetail(request *DescribeServiceMeshDetailRequest) (_result *DescribeServiceMeshDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeServiceMeshDetailResponse{}
	_body, _err := client.DescribeServiceMeshDetailWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeServiceMeshKubeconfigWithOptions(request *DescribeServiceMeshKubeconfigRequest, runtime *util.RuntimeOptions) (_result *DescribeServiceMeshKubeconfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeServiceMeshKubeconfigResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeServiceMeshKubeconfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeServiceMeshKubeconfig(request *DescribeServiceMeshKubeconfigRequest) (_result *DescribeServiceMeshKubeconfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeServiceMeshKubeconfigResponse{}
	_body, _err := client.DescribeServiceMeshKubeconfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateServiceMeshWithOptions(request *CreateServiceMeshRequest, runtime *util.RuntimeOptions) (_result *CreateServiceMeshResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateServiceMeshResponse{}
	_body, _err := client.DoRequest(tea.String("CreateServiceMesh"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateServiceMesh(request *CreateServiceMeshRequest) (_result *CreateServiceMeshResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateServiceMeshResponse{}
	_body, _err := client.CreateServiceMeshWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteServiceMeshWithOptions(request *DeleteServiceMeshRequest, runtime *util.RuntimeOptions) (_result *DeleteServiceMeshResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteServiceMeshResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteServiceMesh"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteServiceMesh(request *DeleteServiceMeshRequest) (_result *DeleteServiceMeshResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteServiceMeshResponse{}
	_body, _err := client.DeleteServiceMeshWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetEndpoint(productId *string, regionId *string, endpointRule *string, network *string, suffix *string, endpointMap map[string]*string, endpoint *string) (_result *string, _err error) {
	if !tea.BoolValue(util.Empty(endpoint)) {
		_result = endpoint
		return _result, _err
	}

	if !tea.BoolValue(util.IsUnset(endpointMap)) && !tea.BoolValue(util.Empty(endpointMap[tea.StringValue(regionId)])) {
		_result = endpointMap[tea.StringValue(regionId)]
		return _result, _err
	}

	_body, _err := endpointutil.GetEndpointRules(productId, regionId, endpointRule, network, suffix)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}
