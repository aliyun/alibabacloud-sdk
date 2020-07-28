// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type GetRegisteredServiceEndpointsRequest struct {
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
	// namespace
	Namespace *string `json:"Namespace,omitempty" xml:"Namespace,omitempty" require:"true"`
	// name
	Name *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s GetRegisteredServiceEndpointsRequest) String() string {
	return tea.Prettify(s)
}

func (s GetRegisteredServiceEndpointsRequest) GoString() string {
	return s.String()
}

func (s *GetRegisteredServiceEndpointsRequest) SetServiceMeshId(v string) *GetRegisteredServiceEndpointsRequest {
	s.ServiceMeshId = &v
	return s
}

func (s *GetRegisteredServiceEndpointsRequest) SetNamespace(v string) *GetRegisteredServiceEndpointsRequest {
	s.Namespace = &v
	return s
}

func (s *GetRegisteredServiceEndpointsRequest) SetName(v string) *GetRegisteredServiceEndpointsRequest {
	s.Name = &v
	return s
}

type GetRegisteredServiceEndpointsResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// serviceEndpoints
	ServiceEndpoints []*GetRegisteredServiceEndpointsResponseServiceEndpoints `json:"ServiceEndpoints,omitempty" xml:"ServiceEndpoints,omitempty" require:"true" type:"Repeated"`
}

func (s GetRegisteredServiceEndpointsResponse) String() string {
	return tea.Prettify(s)
}

func (s GetRegisteredServiceEndpointsResponse) GoString() string {
	return s.String()
}

func (s *GetRegisteredServiceEndpointsResponse) SetRequestId(v string) *GetRegisteredServiceEndpointsResponse {
	s.RequestId = &v
	return s
}

func (s *GetRegisteredServiceEndpointsResponse) SetServiceEndpoints(v []*GetRegisteredServiceEndpointsResponseServiceEndpoints) *GetRegisteredServiceEndpointsResponse {
	s.ServiceEndpoints = v
	return s
}

type GetRegisteredServiceEndpointsResponseServiceEndpoints struct {
	// address
	Address *string `json:"Address,omitempty" xml:"Address,omitempty" require:"true"`
	// clusterId
	ClusterId *string `json:"ClusterId,omitempty" xml:"ClusterId,omitempty" require:"true"`
}

func (s GetRegisteredServiceEndpointsResponseServiceEndpoints) String() string {
	return tea.Prettify(s)
}

func (s GetRegisteredServiceEndpointsResponseServiceEndpoints) GoString() string {
	return s.String()
}

func (s *GetRegisteredServiceEndpointsResponseServiceEndpoints) SetAddress(v string) *GetRegisteredServiceEndpointsResponseServiceEndpoints {
	s.Address = &v
	return s
}

func (s *GetRegisteredServiceEndpointsResponseServiceEndpoints) SetClusterId(v string) *GetRegisteredServiceEndpointsResponseServiceEndpoints {
	s.ClusterId = &v
	return s
}

type GetServiceMeshSlbRequest struct {
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
}

func (s GetServiceMeshSlbRequest) String() string {
	return tea.Prettify(s)
}

func (s GetServiceMeshSlbRequest) GoString() string {
	return s.String()
}

func (s *GetServiceMeshSlbRequest) SetServiceMeshId(v string) *GetServiceMeshSlbRequest {
	s.ServiceMeshId = &v
	return s
}

type GetServiceMeshSlbResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// data
	Data []*GetServiceMeshSlbResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Repeated"`
}

func (s GetServiceMeshSlbResponse) String() string {
	return tea.Prettify(s)
}

func (s GetServiceMeshSlbResponse) GoString() string {
	return s.String()
}

func (s *GetServiceMeshSlbResponse) SetRequestId(v string) *GetServiceMeshSlbResponse {
	s.RequestId = &v
	return s
}

func (s *GetServiceMeshSlbResponse) SetData(v []*GetServiceMeshSlbResponseData) *GetServiceMeshSlbResponse {
	s.Data = v
	return s
}

type GetServiceMeshSlbResponseData struct {
	// loadBalancerId
	LoadBalancerId *string `json:"LoadBalancerId,omitempty" xml:"LoadBalancerId,omitempty" require:"true"`
	// status
	Status *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	// serverHealthStatus
	ServerHealthStatus *string `json:"ServerHealthStatus,omitempty" xml:"ServerHealthStatus,omitempty" require:"true"`
}

func (s GetServiceMeshSlbResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetServiceMeshSlbResponseData) GoString() string {
	return s.String()
}

func (s *GetServiceMeshSlbResponseData) SetLoadBalancerId(v string) *GetServiceMeshSlbResponseData {
	s.LoadBalancerId = &v
	return s
}

func (s *GetServiceMeshSlbResponseData) SetStatus(v string) *GetServiceMeshSlbResponseData {
	s.Status = &v
	return s
}

func (s *GetServiceMeshSlbResponseData) SetServerHealthStatus(v string) *GetServiceMeshSlbResponseData {
	s.ServerHealthStatus = &v
	return s
}

type GetRegisteredServicesRequest struct {
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
	// namespace
	Namespace *string `json:"Namespace,omitempty" xml:"Namespace,omitempty" require:"true"`
}

func (s GetRegisteredServicesRequest) String() string {
	return tea.Prettify(s)
}

func (s GetRegisteredServicesRequest) GoString() string {
	return s.String()
}

func (s *GetRegisteredServicesRequest) SetServiceMeshId(v string) *GetRegisteredServicesRequest {
	s.ServiceMeshId = &v
	return s
}

func (s *GetRegisteredServicesRequest) SetNamespace(v string) *GetRegisteredServicesRequest {
	s.Namespace = &v
	return s
}

type GetRegisteredServicesResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// services
	Services []*string `json:"Services,omitempty" xml:"Services,omitempty" require:"true" type:"Repeated"`
}

func (s GetRegisteredServicesResponse) String() string {
	return tea.Prettify(s)
}

func (s GetRegisteredServicesResponse) GoString() string {
	return s.String()
}

func (s *GetRegisteredServicesResponse) SetRequestId(v string) *GetRegisteredServicesResponse {
	s.RequestId = &v
	return s
}

func (s *GetRegisteredServicesResponse) SetServices(v []*string) *GetRegisteredServicesResponse {
	s.Services = v
	return s
}

type GetDiagnosisRequest struct {
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
}

func (s GetDiagnosisRequest) String() string {
	return tea.Prettify(s)
}

func (s GetDiagnosisRequest) GoString() string {
	return s.String()
}

func (s *GetDiagnosisRequest) SetServiceMeshId(v string) *GetDiagnosisRequest {
	s.ServiceMeshId = &v
	return s
}

type GetDiagnosisResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// result
	Result *string `json:"Result,omitempty" xml:"Result,omitempty" require:"true"`
}

func (s GetDiagnosisResponse) String() string {
	return tea.Prettify(s)
}

func (s GetDiagnosisResponse) GoString() string {
	return s.String()
}

func (s *GetDiagnosisResponse) SetRequestId(v string) *GetDiagnosisResponse {
	s.RequestId = &v
	return s
}

func (s *GetDiagnosisResponse) SetResult(v string) *GetDiagnosisResponse {
	s.Result = &v
	return s
}

type GetRegisteredServiceNamespacesRequest struct {
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
}

func (s GetRegisteredServiceNamespacesRequest) String() string {
	return tea.Prettify(s)
}

func (s GetRegisteredServiceNamespacesRequest) GoString() string {
	return s.String()
}

func (s *GetRegisteredServiceNamespacesRequest) SetServiceMeshId(v string) *GetRegisteredServiceNamespacesRequest {
	s.ServiceMeshId = &v
	return s
}

type GetRegisteredServiceNamespacesResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// namespaces
	Namespaces []*string `json:"Namespaces,omitempty" xml:"Namespaces,omitempty" require:"true" type:"Repeated"`
}

func (s GetRegisteredServiceNamespacesResponse) String() string {
	return tea.Prettify(s)
}

func (s GetRegisteredServiceNamespacesResponse) GoString() string {
	return s.String()
}

func (s *GetRegisteredServiceNamespacesResponse) SetRequestId(v string) *GetRegisteredServiceNamespacesResponse {
	s.RequestId = &v
	return s
}

func (s *GetRegisteredServiceNamespacesResponse) SetNamespaces(v []*string) *GetRegisteredServiceNamespacesResponse {
	s.Namespaces = v
	return s
}

type RunDiagnosisRequest struct {
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
}

func (s RunDiagnosisRequest) String() string {
	return tea.Prettify(s)
}

func (s RunDiagnosisRequest) GoString() string {
	return s.String()
}

func (s *RunDiagnosisRequest) SetServiceMeshId(v string) *RunDiagnosisRequest {
	s.ServiceMeshId = &v
	return s
}

type RunDiagnosisResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// result
	Result *string `json:"Result,omitempty" xml:"Result,omitempty" require:"true"`
}

func (s RunDiagnosisResponse) String() string {
	return tea.Prettify(s)
}

func (s RunDiagnosisResponse) GoString() string {
	return s.String()
}

func (s *RunDiagnosisResponse) SetRequestId(v string) *RunDiagnosisResponse {
	s.RequestId = &v
	return s
}

func (s *RunDiagnosisResponse) SetResult(v string) *RunDiagnosisResponse {
	s.Result = &v
	return s
}

type RemoveClusterFromServiceMeshRequest struct {
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
	// cluster_id
	ClusterId *string `json:"ClusterId,omitempty" xml:"ClusterId,omitempty" require:"true"`
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
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
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
	// cluster_id
	ClusterId *string `json:"ClusterId,omitempty" xml:"ClusterId,omitempty" require:"true"`
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
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
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
	// namespace
	Namespace *string `json:"Namespace,omitempty" xml:"Namespace,omitempty" require:"true"`
	// enableIstioInjection
	EnableIstioInjection *bool `json:"EnableIstioInjection,omitempty" xml:"EnableIstioInjection,omitempty" require:"true"`
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
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
	// k8sClusterId
	K8sClusterId *string `json:"K8sClusterId,omitempty" xml:"K8sClusterId,omitempty" require:"true"`
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// k8sClusterId
	K8sClusterId *string `json:"K8sClusterId,omitempty" xml:"K8sClusterId,omitempty" require:"true"`
	// dashboards
	Dashboards []*DescribeGuestClusterAccessLogDashboardsResponseDashboards `json:"Dashboards,omitempty" xml:"Dashboards,omitempty" require:"true" type:"Repeated"`
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
	// title
	Title *string `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	// url
	Url *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
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
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty"`
	// k8sClusterId
	K8sClusterId *string `json:"K8sClusterId,omitempty" xml:"K8sClusterId,omitempty"`
	// k8sClusterRegionId
	K8sClusterRegionId *string `json:"K8sClusterRegionId,omitempty" xml:"K8sClusterRegionId,omitempty"`
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// prometheus
	Prometheus *string `json:"Prometheus,omitempty" xml:"Prometheus,omitempty" require:"true"`
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
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty"`
	// k8sClusterId
	K8sClusterId *string `json:"K8sClusterId,omitempty" xml:"K8sClusterId,omitempty"`
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// dashboards
	Dashboards []*DescribeClusterGrafanaResponseDashboards `json:"Dashboards,omitempty" xml:"Dashboards,omitempty" require:"true" type:"Repeated"`
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
	// url
	Url *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
	// title
	Title *string `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
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
	// acceptLanguage
	AcceptLanguage *string `json:"AcceptLanguage,omitempty" xml:"AcceptLanguage,omitempty"`
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// BusinessLocations
	BusinessLocations *string `json:"BusinessLocations,omitempty" xml:"BusinessLocations,omitempty" require:"true"`
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
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty"`
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// clusters
	Clusters []*string `json:"Clusters,omitempty" xml:"Clusters,omitempty" require:"true" type:"Repeated"`
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
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty"`
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
	// RequestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// clusters
	Clusters []*DescribeClustersInServiceMeshResponseClusters `json:"Clusters,omitempty" xml:"Clusters,omitempty" require:"true" type:"Repeated"`
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
	// cluster_id
	ClusterId *string `json:"ClusterId,omitempty" xml:"ClusterId,omitempty" require:"true"`
	// cluster_type
	ClusterType *string `json:"ClusterType,omitempty" xml:"ClusterType,omitempty" require:"true"`
	// created
	CreationTime *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	// errMsg
	ErrorMessage *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	// name
	Name *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	// region_id
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// state
	State *string `json:"State,omitempty" xml:"State,omitempty" require:"true"`
	// updated
	UpdateTime *string `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	// current_version
	Version *string `json:"Version,omitempty" xml:"Version,omitempty" require:"true"`
	// vpc_id
	VpcId *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	// security_group_id
	SgId *string `json:"SgId,omitempty" xml:"SgId,omitempty" require:"true"`
	// cluster_domain
	ClusterDomain *string `json:"ClusterDomain,omitempty" xml:"ClusterDomain,omitempty" require:"true"`
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
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty"`
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// ingressgateways
	IngressGateways []map[string]interface{} `json:"IngressGateways,omitempty" xml:"IngressGateways,omitempty" require:"true" type:"Repeated"`
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
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty"`
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// data
	Version *DescribeUpgradeVersionResponseVersion `json:"Version,omitempty" xml:"Version,omitempty" require:"true" type:"Struct"`
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
	// istio_version
	IstioVersion *string `json:"IstioVersion,omitempty" xml:"IstioVersion,omitempty" require:"true"`
	// istio_operator_version
	IstioOperatorVersion *string `json:"IstioOperatorVersion,omitempty" xml:"IstioOperatorVersion,omitempty" require:"true"`
	// kubernetes_version
	KubernetesVersion *string `json:"KubernetesVersion,omitempty" xml:"KubernetesVersion,omitempty" require:"true"`
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
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
	// tracing
	Tracing *bool `json:"Tracing,omitempty" xml:"Tracing,omitempty"`
	// traceSampling
	TraceSampling *float32 `json:"TraceSampling,omitempty" xml:"TraceSampling,omitempty"`
	// enableLocalityLB
	LocalityLoadBalancing *bool `json:"LocalityLoadBalancing,omitempty" xml:"LocalityLoadBalancing,omitempty"`
	// telemetryV2
	Telemetry *bool `json:"Telemetry,omitempty" xml:"Telemetry,omitempty"`
	// opaEnabled
	OpenAgentPolicy *bool `json:"OpenAgentPolicy,omitempty" xml:"OpenAgentPolicy,omitempty"`
	// opaLogLevel
	OPALogLevel *string `json:"OPALogLevel,omitempty" xml:"OPALogLevel,omitempty"`
	// opaRequestCPU
	OPARequestCPU *string `json:"OPARequestCPU,omitempty" xml:"OPARequestCPU,omitempty"`
	// opaRequestMemory
	OPARequestMemory *string `json:"OPARequestMemory,omitempty" xml:"OPARequestMemory,omitempty"`
	// opaLimitCPU
	OPALimitCPU *string `json:"OPALimitCPU,omitempty" xml:"OPALimitCPU,omitempty"`
	// opaLimitMemory
	OPALimitMemory *string `json:"OPALimitMemory,omitempty" xml:"OPALimitMemory,omitempty"`
	// enableAudit
	EnableAudit *bool `json:"EnableAudit,omitempty" xml:"EnableAudit,omitempty"`
	// auditProject
	AuditProject *string `json:"AuditProject,omitempty" xml:"AuditProject,omitempty"`
	// clusterDomain
	ClusterDomain *string `json:"ClusterDomain,omitempty" xml:"ClusterDomain,omitempty"`
	// customizedZipkin
	CustomizedZipkin *bool `json:"CustomizedZipkin,omitempty" xml:"CustomizedZipkin,omitempty"`
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

func (s *UpdateMeshFeatureRequest) SetCustomizedZipkin(v bool) *UpdateMeshFeatureRequest {
	s.CustomizedZipkin = &v
	return s
}

type UpdateMeshFeatureResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
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
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty"`
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// service_meshes
	ServiceMeshes []*DescribeServiceMeshesResponseServiceMeshes `json:"ServiceMeshes,omitempty" xml:"ServiceMeshes,omitempty" require:"true" type:"Repeated"`
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
	// endpoints
	Endpoints *DescribeServiceMeshesResponseServiceMeshesEndpoints `json:"Endpoints,omitempty" xml:"Endpoints,omitempty" require:"true" type:"Struct"`
	// cluster_info
	ServiceMeshInfo *DescribeServiceMeshesResponseServiceMeshesServiceMeshInfo `json:"ServiceMeshInfo,omitempty" xml:"ServiceMeshInfo,omitempty" require:"true" type:"Struct"`
	// spec
	Spec *DescribeServiceMeshesResponseServiceMeshesSpec `json:"Spec,omitempty" xml:"Spec,omitempty" require:"true" type:"Struct"`
	// guest_clusters
	Clusters []*string `json:"Clusters,omitempty" xml:"Clusters,omitempty" require:"true" type:"Repeated"`
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
	// intranet_api_server_endpoint
	IntranetApiServerEndpoint *string `json:"IntranetApiServerEndpoint,omitempty" xml:"IntranetApiServerEndpoint,omitempty" require:"true"`
	// intranet_pilot_endpoint
	IntranetPilotEndpoint *string `json:"IntranetPilotEndpoint,omitempty" xml:"IntranetPilotEndpoint,omitempty" require:"true"`
	// public_api_server_endpoint
	PublicApiServerEndpoint *string `json:"PublicApiServerEndpoint,omitempty" xml:"PublicApiServerEndpoint,omitempty" require:"true"`
	// public_pilot_endpoint
	PublicPilotEndpoint *string `json:"PublicPilotEndpoint,omitempty" xml:"PublicPilotEndpoint,omitempty" require:"true"`
	// reverse_tunnel_endpoint
	ReverseTunnelEndpoint *string `json:"ReverseTunnelEndpoint,omitempty" xml:"ReverseTunnelEndpoint,omitempty" require:"true"`
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
	// created
	CreationTime *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	// errMsg
	ErrorMessage *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	// name
	Name *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	// region_id
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// cluster_id
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
	// state
	State *string `json:"State,omitempty" xml:"State,omitempty" require:"true"`
	// updated
	UpdateTime *string `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	// current_version
	Version *string `json:"Version,omitempty" xml:"Version,omitempty" require:"true"`
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
	// load_balancer
	LoadBalancer *DescribeServiceMeshesResponseServiceMeshesSpecLoadBalancer `json:"LoadBalancer,omitempty" xml:"LoadBalancer,omitempty" require:"true" type:"Struct"`
	// mesh_config
	MeshConfig *DescribeServiceMeshesResponseServiceMeshesSpecMeshConfig `json:"MeshConfig,omitempty" xml:"MeshConfig,omitempty" require:"true" type:"Struct"`
	// network
	Network *DescribeServiceMeshesResponseServiceMeshesSpecNetwork `json:"Network,omitempty" xml:"Network,omitempty" require:"true" type:"Struct"`
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
	// api_server_load_balancer_id
	ApiServerLoadbalancerId *string `json:"ApiServerLoadbalancerId,omitempty" xml:"ApiServerLoadbalancerId,omitempty" require:"true"`
	// api_server_public_eip
	ApiServerPublicEip *bool `json:"ApiServerPublicEip,omitempty" xml:"ApiServerPublicEip,omitempty" require:"true"`
	// pilot_public_eip
	PilotPublicEip *bool `json:"PilotPublicEip,omitempty" xml:"PilotPublicEip,omitempty" require:"true"`
	// pilot_load_balancer_id
	PilotPublicLoadbalancerId *string `json:"PilotPublicLoadbalancerId,omitempty" xml:"PilotPublicLoadbalancerId,omitempty" require:"true"`
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
	// mtls
	Mtls *bool `json:"Mtls,omitempty" xml:"Mtls,omitempty" require:"true"`
	// outbound_traffic_policy
	OutboundTrafficPolicy *string `json:"OutboundTrafficPolicy,omitempty" xml:"OutboundTrafficPolicy,omitempty" require:"true"`
	// mtls_strict
	StrictMtls *bool `json:"StrictMtls,omitempty" xml:"StrictMtls,omitempty" require:"true"`
	// tracing
	Tracing *bool `json:"Tracing,omitempty" xml:"Tracing,omitempty" require:"true"`
	// telemetry_v2
	Telemetry *bool `json:"Telemetry,omitempty" xml:"Telemetry,omitempty" require:"true"`
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
	// security_group_id
	SecurityGroupId *string `json:"SecurityGroupId,omitempty" xml:"SecurityGroupId,omitempty" require:"true"`
	// vpc_id
	VpcId *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	// vswitch_ids
	VSwitches []*string `json:"VSwitches,omitempty" xml:"VSwitches,omitempty" require:"true" type:"Repeated"`
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
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// data
	ServiceMesh *DescribeServiceMeshDetailResponseServiceMesh `json:"ServiceMesh,omitempty" xml:"ServiceMesh,omitempty" require:"true" type:"Struct"`
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
	// endpoints
	Endpoints *DescribeServiceMeshDetailResponseServiceMeshEndpoints `json:"Endpoints,omitempty" xml:"Endpoints,omitempty" require:"true" type:"Struct"`
	// cluster_info
	ServiceMeshInfo *DescribeServiceMeshDetailResponseServiceMeshServiceMeshInfo `json:"ServiceMeshInfo,omitempty" xml:"ServiceMeshInfo,omitempty" require:"true" type:"Struct"`
	// spec
	Spec *DescribeServiceMeshDetailResponseServiceMeshSpec `json:"Spec,omitempty" xml:"Spec,omitempty" require:"true" type:"Struct"`
	// guest_clusters
	Clusters []*string `json:"Clusters,omitempty" xml:"Clusters,omitempty" require:"true" type:"Repeated"`
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
	// intranet_api_server_endpoint
	IntranetApiServerEndpoint *string `json:"IntranetApiServerEndpoint,omitempty" xml:"IntranetApiServerEndpoint,omitempty" require:"true"`
	// intranet_pilot_endpoint
	IntranetPilotEndpoint *string `json:"IntranetPilotEndpoint,omitempty" xml:"IntranetPilotEndpoint,omitempty" require:"true"`
	// public_api_server_endpoint
	PublicApiServerEndpoint *string `json:"PublicApiServerEndpoint,omitempty" xml:"PublicApiServerEndpoint,omitempty" require:"true"`
	// public_pilot_endpoint
	PublicPilotEndpoint *string `json:"PublicPilotEndpoint,omitempty" xml:"PublicPilotEndpoint,omitempty" require:"true"`
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
	// created
	CreationTime *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	// errMsg
	ErrorMessage *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	// name
	Name *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	// region_id
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// cluster_id
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
	// state
	State *string `json:"State,omitempty" xml:"State,omitempty" require:"true"`
	// updated
	UpdateTime *string `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	// current_version
	Version *string `json:"Version,omitempty" xml:"Version,omitempty" require:"true"`
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
	// load_balancer
	LoadBalancer *DescribeServiceMeshDetailResponseServiceMeshSpecLoadBalancer `json:"LoadBalancer,omitempty" xml:"LoadBalancer,omitempty" require:"true" type:"Struct"`
	// mesh_config
	MeshConfig *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig `json:"MeshConfig,omitempty" xml:"MeshConfig,omitempty" require:"true" type:"Struct"`
	// network
	Network *DescribeServiceMeshDetailResponseServiceMeshSpecNetwork `json:"Network,omitempty" xml:"Network,omitempty" require:"true" type:"Struct"`
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
	// api_server_load_balancer_id
	ApiServerLoadbalancerId *string `json:"ApiServerLoadbalancerId,omitempty" xml:"ApiServerLoadbalancerId,omitempty" require:"true"`
	// api_server_public_eip
	ApiServerPublicEip *bool `json:"ApiServerPublicEip,omitempty" xml:"ApiServerPublicEip,omitempty" require:"true"`
	// pilot_public_eip
	PilotPublicEip *bool `json:"PilotPublicEip,omitempty" xml:"PilotPublicEip,omitempty" require:"true"`
	// pilot_load_balancer_id
	PilotPublicLoadbalancerId *string `json:"PilotPublicLoadbalancerId,omitempty" xml:"PilotPublicLoadbalancerId,omitempty" require:"true"`
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
	// enable_localitylb
	EnableLocalityLB *bool `json:"EnableLocalityLB,omitempty" xml:"EnableLocalityLB,omitempty" require:"true"`
	// telemetry_v2
	Telemetry *bool `json:"Telemetry,omitempty" xml:"Telemetry,omitempty" require:"true"`
	// tracing
	Tracing *bool `json:"Tracing,omitempty" xml:"Tracing,omitempty" require:"true"`
	// customizedZipkin
	CustomizedZipkin *bool `json:"CustomizedZipkin,omitempty" xml:"CustomizedZipkin,omitempty" require:"true"`
	// pilot
	Pilot *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigPilot `json:"Pilot,omitempty" xml:"Pilot,omitempty" require:"true" type:"Struct"`
	// opa
	OPA *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigOPA `json:"OPA,omitempty" xml:"OPA,omitempty" require:"true" type:"Struct"`
	// audit
	Audit *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfigAudit `json:"Audit,omitempty" xml:"Audit,omitempty" require:"true" type:"Struct"`
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

func (s *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig) SetCustomizedZipkin(v bool) *DescribeServiceMeshDetailResponseServiceMeshSpecMeshConfig {
	s.CustomizedZipkin = &v
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
	// traceSampling
	TraceSampling *float32 `json:"TraceSampling,omitempty" xml:"TraceSampling,omitempty" require:"true"`
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
	// enabled
	Enabled *bool `json:"Enabled,omitempty" xml:"Enabled,omitempty" require:"true"`
	// logLevel
	LogLevel *string `json:"LogLevel,omitempty" xml:"LogLevel,omitempty" require:"true"`
	// requestCPU
	RequestCPU *string `json:"RequestCPU,omitempty" xml:"RequestCPU,omitempty" require:"true"`
	// requestMemory
	RequestMemory *string `json:"RequestMemory,omitempty" xml:"RequestMemory,omitempty" require:"true"`
	// limitCPU
	LimitCPU *string `json:"LimitCPU,omitempty" xml:"LimitCPU,omitempty" require:"true"`
	// limitMemory
	LimitMemory *string `json:"LimitMemory,omitempty" xml:"LimitMemory,omitempty" require:"true"`
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
	// enabled
	Enabled *bool `json:"Enabled,omitempty" xml:"Enabled,omitempty" require:"true"`
	// project
	Project *string `json:"Project,omitempty" xml:"Project,omitempty" require:"true"`
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
	// security_group_id
	SecurityGroupId *string `json:"SecurityGroupId,omitempty" xml:"SecurityGroupId,omitempty" require:"true"`
	// vpc_id
	VpcId *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	// vswitch_ids
	VSwitches []*string `json:"VSwitches,omitempty" xml:"VSwitches,omitempty" require:"true" type:"Repeated"`
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
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
	// PrivateIpAddress
	PrivateIpAddress *bool `json:"PrivateIpAddress,omitempty" xml:"PrivateIpAddress,omitempty"`
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
	// config
	Kubeconfig *string `json:"Kubeconfig,omitempty" xml:"Kubeconfig,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
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
	// region_id
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// current_version
	IstioVersion *string `json:"IstioVersion,omitempty" xml:"IstioVersion,omitempty"`
	// vpc_id
	VpcId *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	// api_server_public_eip
	ApiServerPublicEip *bool `json:"ApiServerPublicEip,omitempty" xml:"ApiServerPublicEip,omitempty"`
	// pilot_public_eip
	PilotPublicEip *bool `json:"PilotPublicEip,omitempty" xml:"PilotPublicEip,omitempty"`
	// tracing
	Tracing *bool `json:"Tracing,omitempty" xml:"Tracing,omitempty"`
	// name
	Name *string `json:"Name,omitempty" xml:"Name,omitempty"`
	// vswitch_ids
	VSwitches *string `json:"VSwitches,omitempty" xml:"VSwitches,omitempty"`
	// traceSampling
	TraceSampling *float32 `json:"TraceSampling,omitempty" xml:"TraceSampling,omitempty"`
	// enableLocalityLB
	LocalityLoadBalancing *bool `json:"LocalityLoadBalancing,omitempty" xml:"LocalityLoadBalancing,omitempty"`
	// telemetryV2
	Telemetry *bool `json:"Telemetry,omitempty" xml:"Telemetry,omitempty"`
	// opaEnabled
	OpenAgentPolicy *bool `json:"OpenAgentPolicy,omitempty" xml:"OpenAgentPolicy,omitempty"`
	// opaLogLevel
	OPALogLevel *string `json:"OPALogLevel,omitempty" xml:"OPALogLevel,omitempty"`
	// opaRequestCPU
	OPARequestCPU *string `json:"OPARequestCPU,omitempty" xml:"OPARequestCPU,omitempty"`
	// opaRequestMemory
	OPARequestMemory *string `json:"OPARequestMemory,omitempty" xml:"OPARequestMemory,omitempty"`
	// opaLimitCPU
	OPALimitCPU *string `json:"OPALimitCPU,omitempty" xml:"OPALimitCPU,omitempty"`
	// opaLimitMemory
	OPALimitMemory *string `json:"OPALimitMemory,omitempty" xml:"OPALimitMemory,omitempty"`
	// enableAudit
	EnableAudit *bool `json:"EnableAudit,omitempty" xml:"EnableAudit,omitempty"`
	// AuditProject
	AuditProject *string `json:"AuditProject,omitempty" xml:"AuditProject,omitempty"`
	// proxyRequestCPU
	ProxyRequestCPU *string `json:"ProxyRequestCPU,omitempty" xml:"ProxyRequestCPU,omitempty"`
	// proxyRequestMemory
	ProxyRequestMemory *string `json:"ProxyRequestMemory,omitempty" xml:"ProxyRequestMemory,omitempty"`
	// proxyLimitCPU
	ProxyLimitCPU *string `json:"ProxyLimitCPU,omitempty" xml:"ProxyLimitCPU,omitempty"`
	// proxyLimitMemory
	ProxyLimitMemory *string `json:"ProxyLimitMemory,omitempty" xml:"ProxyLimitMemory,omitempty"`
	// includeIPRanges
	IncludeIPRanges *string `json:"IncludeIPRanges,omitempty" xml:"IncludeIPRanges,omitempty"`
	// excludeIPRanges
	ExcludeIPRanges *string `json:"ExcludeIPRanges,omitempty" xml:"ExcludeIPRanges,omitempty"`
	// excludeOutboundPorts
	ExcludeOutboundPorts *string `json:"ExcludeOutboundPorts,omitempty" xml:"ExcludeOutboundPorts,omitempty"`
	// excludeInboundPorts
	ExcludeInboundPorts *string `json:"ExcludeInboundPorts,omitempty" xml:"ExcludeInboundPorts,omitempty"`
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

func (s *CreateServiceMeshRequest) SetProxyRequestCPU(v string) *CreateServiceMeshRequest {
	s.ProxyRequestCPU = &v
	return s
}

func (s *CreateServiceMeshRequest) SetProxyRequestMemory(v string) *CreateServiceMeshRequest {
	s.ProxyRequestMemory = &v
	return s
}

func (s *CreateServiceMeshRequest) SetProxyLimitCPU(v string) *CreateServiceMeshRequest {
	s.ProxyLimitCPU = &v
	return s
}

func (s *CreateServiceMeshRequest) SetProxyLimitMemory(v string) *CreateServiceMeshRequest {
	s.ProxyLimitMemory = &v
	return s
}

func (s *CreateServiceMeshRequest) SetIncludeIPRanges(v string) *CreateServiceMeshRequest {
	s.IncludeIPRanges = &v
	return s
}

func (s *CreateServiceMeshRequest) SetExcludeIPRanges(v string) *CreateServiceMeshRequest {
	s.ExcludeIPRanges = &v
	return s
}

func (s *CreateServiceMeshRequest) SetExcludeOutboundPorts(v string) *CreateServiceMeshRequest {
	s.ExcludeOutboundPorts = &v
	return s
}

func (s *CreateServiceMeshRequest) SetExcludeInboundPorts(v string) *CreateServiceMeshRequest {
	s.ExcludeInboundPorts = &v
	return s
}

type CreateServiceMeshResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// servicemesh_id
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
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
	// ServiceMeshId
	ServiceMeshId *string `json:"ServiceMeshId,omitempty" xml:"ServiceMeshId,omitempty" require:"true"`
	// force
	Force *bool `json:"Force,omitempty" xml:"Force,omitempty"`
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
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

func (client *Client) GetRegisteredServiceEndpointsWithOptions(request *GetRegisteredServiceEndpointsRequest, runtime *util.RuntimeOptions) (_result *GetRegisteredServiceEndpointsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetRegisteredServiceEndpointsResponse{}
	_body, _err := client.DoRequest(tea.String("GetRegisteredServiceEndpoints"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetRegisteredServiceEndpoints(request *GetRegisteredServiceEndpointsRequest) (_result *GetRegisteredServiceEndpointsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetRegisteredServiceEndpointsResponse{}
	_body, _err := client.GetRegisteredServiceEndpointsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetServiceMeshSlbWithOptions(request *GetServiceMeshSlbRequest, runtime *util.RuntimeOptions) (_result *GetServiceMeshSlbResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetServiceMeshSlbResponse{}
	_body, _err := client.DoRequest(tea.String("GetServiceMeshSlb"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetServiceMeshSlb(request *GetServiceMeshSlbRequest) (_result *GetServiceMeshSlbResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetServiceMeshSlbResponse{}
	_body, _err := client.GetServiceMeshSlbWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetRegisteredServicesWithOptions(request *GetRegisteredServicesRequest, runtime *util.RuntimeOptions) (_result *GetRegisteredServicesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetRegisteredServicesResponse{}
	_body, _err := client.DoRequest(tea.String("GetRegisteredServices"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetRegisteredServices(request *GetRegisteredServicesRequest) (_result *GetRegisteredServicesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetRegisteredServicesResponse{}
	_body, _err := client.GetRegisteredServicesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetDiagnosisWithOptions(request *GetDiagnosisRequest, runtime *util.RuntimeOptions) (_result *GetDiagnosisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetDiagnosisResponse{}
	_body, _err := client.DoRequest(tea.String("GetDiagnosis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetDiagnosis(request *GetDiagnosisRequest) (_result *GetDiagnosisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetDiagnosisResponse{}
	_body, _err := client.GetDiagnosisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetRegisteredServiceNamespacesWithOptions(request *GetRegisteredServiceNamespacesRequest, runtime *util.RuntimeOptions) (_result *GetRegisteredServiceNamespacesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetRegisteredServiceNamespacesResponse{}
	_body, _err := client.DoRequest(tea.String("GetRegisteredServiceNamespaces"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetRegisteredServiceNamespaces(request *GetRegisteredServiceNamespacesRequest) (_result *GetRegisteredServiceNamespacesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetRegisteredServiceNamespacesResponse{}
	_body, _err := client.GetRegisteredServiceNamespacesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RunDiagnosisWithOptions(request *RunDiagnosisRequest, runtime *util.RuntimeOptions) (_result *RunDiagnosisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RunDiagnosisResponse{}
	_body, _err := client.DoRequest(tea.String("RunDiagnosis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RunDiagnosis(request *RunDiagnosisRequest) (_result *RunDiagnosisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RunDiagnosisResponse{}
	_body, _err := client.RunDiagnosisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
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
