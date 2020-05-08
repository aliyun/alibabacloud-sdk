// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	roa "github.com/alibabacloud-go/tea-roa/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type ResumeComponentUpgradeRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s ResumeComponentUpgradeRequest) String() string {
	return tea.Prettify(s)
}

func (s ResumeComponentUpgradeRequest) GoString() string {
	return s.String()
}

func (s *ResumeComponentUpgradeRequest) SetHeaders(v map[string]string) *ResumeComponentUpgradeRequest {
	s.Headers = v
	return s
}

type ResumeComponentUpgradeResponseBody struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s ResumeComponentUpgradeResponseBody) String() string {
	return tea.Prettify(s)
}

func (s ResumeComponentUpgradeResponseBody) GoString() string {
	return s.String()
}

func (s *ResumeComponentUpgradeResponseBody) SetRequestId(v string) *ResumeComponentUpgradeResponseBody {
	s.RequestId = &v
	return s
}

type ResumeComponentUpgradeResponse struct {
	Headers map[string]string                   `json:"headers" xml:"headers" require:"true"`
	Body    *ResumeComponentUpgradeResponseBody `json:"body" xml:"body" require:"true"`
}

func (s ResumeComponentUpgradeResponse) String() string {
	return tea.Prettify(s)
}

func (s ResumeComponentUpgradeResponse) GoString() string {
	return s.String()
}

func (s *ResumeComponentUpgradeResponse) SetHeaders(v map[string]string) *ResumeComponentUpgradeResponse {
	s.Headers = v
	return s
}

func (s *ResumeComponentUpgradeResponse) SetBody(v *ResumeComponentUpgradeResponseBody) *ResumeComponentUpgradeResponse {
	s.Body = v
	return s
}

type PauseComponentUpgradeRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s PauseComponentUpgradeRequest) String() string {
	return tea.Prettify(s)
}

func (s PauseComponentUpgradeRequest) GoString() string {
	return s.String()
}

func (s *PauseComponentUpgradeRequest) SetHeaders(v map[string]string) *PauseComponentUpgradeRequest {
	s.Headers = v
	return s
}

type PauseComponentUpgradeResponseBody struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s PauseComponentUpgradeResponseBody) String() string {
	return tea.Prettify(s)
}

func (s PauseComponentUpgradeResponseBody) GoString() string {
	return s.String()
}

func (s *PauseComponentUpgradeResponseBody) SetRequestId(v string) *PauseComponentUpgradeResponseBody {
	s.RequestId = &v
	return s
}

type PauseComponentUpgradeResponse struct {
	Headers map[string]string                  `json:"headers" xml:"headers" require:"true"`
	Body    *PauseComponentUpgradeResponseBody `json:"body" xml:"body" require:"true"`
}

func (s PauseComponentUpgradeResponse) String() string {
	return tea.Prettify(s)
}

func (s PauseComponentUpgradeResponse) GoString() string {
	return s.String()
}

func (s *PauseComponentUpgradeResponse) SetHeaders(v map[string]string) *PauseComponentUpgradeResponse {
	s.Headers = v
	return s
}

func (s *PauseComponentUpgradeResponse) SetBody(v *PauseComponentUpgradeResponseBody) *PauseComponentUpgradeResponse {
	s.Body = v
	return s
}

type CancelComponentUpgradeRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s CancelComponentUpgradeRequest) String() string {
	return tea.Prettify(s)
}

func (s CancelComponentUpgradeRequest) GoString() string {
	return s.String()
}

func (s *CancelComponentUpgradeRequest) SetHeaders(v map[string]string) *CancelComponentUpgradeRequest {
	s.Headers = v
	return s
}

type CancelComponentUpgradeResponseBody struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s CancelComponentUpgradeResponseBody) String() string {
	return tea.Prettify(s)
}

func (s CancelComponentUpgradeResponseBody) GoString() string {
	return s.String()
}

func (s *CancelComponentUpgradeResponseBody) SetRequestId(v string) *CancelComponentUpgradeResponseBody {
	s.RequestId = &v
	return s
}

type CancelComponentUpgradeResponse struct {
	Headers map[string]string                   `json:"headers" xml:"headers" require:"true"`
	Body    *CancelComponentUpgradeResponseBody `json:"body" xml:"body" require:"true"`
}

func (s CancelComponentUpgradeResponse) String() string {
	return tea.Prettify(s)
}

func (s CancelComponentUpgradeResponse) GoString() string {
	return s.String()
}

func (s *CancelComponentUpgradeResponse) SetHeaders(v map[string]string) *CancelComponentUpgradeResponse {
	s.Headers = v
	return s
}

func (s *CancelComponentUpgradeResponse) SetBody(v *CancelComponentUpgradeResponseBody) *CancelComponentUpgradeResponse {
	s.Body = v
	return s
}

type CancelWorkflowRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s CancelWorkflowRequest) String() string {
	return tea.Prettify(s)
}

func (s CancelWorkflowRequest) GoString() string {
	return s.String()
}

func (s *CancelWorkflowRequest) SetHeaders(v map[string]string) *CancelWorkflowRequest {
	s.Headers = v
	return s
}

type CancelWorkflowResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s CancelWorkflowResponse) String() string {
	return tea.Prettify(s)
}

func (s CancelWorkflowResponse) GoString() string {
	return s.String()
}

func (s *CancelWorkflowResponse) SetHeaders(v map[string]string) *CancelWorkflowResponse {
	s.Headers = v
	return s
}

type DescirbeWorkflowRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s DescirbeWorkflowRequest) String() string {
	return tea.Prettify(s)
}

func (s DescirbeWorkflowRequest) GoString() string {
	return s.String()
}

func (s *DescirbeWorkflowRequest) SetHeaders(v map[string]string) *DescirbeWorkflowRequest {
	s.Headers = v
	return s
}

type DescirbeWorkflowResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s DescirbeWorkflowResponse) String() string {
	return tea.Prettify(s)
}

func (s DescirbeWorkflowResponse) GoString() string {
	return s.String()
}

func (s *DescirbeWorkflowResponse) SetHeaders(v map[string]string) *DescirbeWorkflowResponse {
	s.Headers = v
	return s
}

type RemoveWorkflowRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s RemoveWorkflowRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveWorkflowRequest) GoString() string {
	return s.String()
}

func (s *RemoveWorkflowRequest) SetHeaders(v map[string]string) *RemoveWorkflowRequest {
	s.Headers = v
	return s
}

type RemoveWorkflowResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s RemoveWorkflowResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveWorkflowResponse) GoString() string {
	return s.String()
}

func (s *RemoveWorkflowResponse) SetHeaders(v map[string]string) *RemoveWorkflowResponse {
	s.Headers = v
	return s
}

type DescribeWorkflowsRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s DescribeWorkflowsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeWorkflowsRequest) GoString() string {
	return s.String()
}

func (s *DescribeWorkflowsRequest) SetHeaders(v map[string]string) *DescribeWorkflowsRequest {
	s.Headers = v
	return s
}

type DescribeWorkflowsResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s DescribeWorkflowsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeWorkflowsResponse) GoString() string {
	return s.String()
}

func (s *DescribeWorkflowsResponse) SetHeaders(v map[string]string) *DescribeWorkflowsResponse {
	s.Headers = v
	return s
}

type StartWorkflowRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s StartWorkflowRequest) String() string {
	return tea.Prettify(s)
}

func (s StartWorkflowRequest) GoString() string {
	return s.String()
}

func (s *StartWorkflowRequest) SetHeaders(v map[string]string) *StartWorkflowRequest {
	s.Headers = v
	return s
}

type StartWorkflowResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s StartWorkflowResponse) String() string {
	return tea.Prettify(s)
}

func (s StartWorkflowResponse) GoString() string {
	return s.String()
}

func (s *StartWorkflowResponse) SetHeaders(v map[string]string) *StartWorkflowResponse {
	s.Headers = v
	return s
}

type CreateServiceMeshRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s CreateServiceMeshRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateServiceMeshRequest) GoString() string {
	return s.String()
}

func (s *CreateServiceMeshRequest) SetHeaders(v map[string]string) *CreateServiceMeshRequest {
	s.Headers = v
	return s
}

type CreateServiceMeshResponseBody struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s CreateServiceMeshResponseBody) String() string {
	return tea.Prettify(s)
}

func (s CreateServiceMeshResponseBody) GoString() string {
	return s.String()
}

func (s *CreateServiceMeshResponseBody) SetRequestId(v string) *CreateServiceMeshResponseBody {
	s.RequestId = &v
	return s
}

type CreateServiceMeshResponse struct {
	Headers map[string]string              `json:"headers" xml:"headers" require:"true"`
	Body    *CreateServiceMeshResponseBody `json:"body" xml:"body" require:"true"`
}

func (s CreateServiceMeshResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateServiceMeshResponse) GoString() string {
	return s.String()
}

func (s *CreateServiceMeshResponse) SetHeaders(v map[string]string) *CreateServiceMeshResponse {
	s.Headers = v
	return s
}

func (s *CreateServiceMeshResponse) SetBody(v *CreateServiceMeshResponseBody) *CreateServiceMeshResponse {
	s.Body = v
	return s
}

type ServiceMeshAddClusterRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s ServiceMeshAddClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s ServiceMeshAddClusterRequest) GoString() string {
	return s.String()
}

func (s *ServiceMeshAddClusterRequest) SetHeaders(v map[string]string) *ServiceMeshAddClusterRequest {
	s.Headers = v
	return s
}

type ServiceMeshAddClusterResponseBody struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s ServiceMeshAddClusterResponseBody) String() string {
	return tea.Prettify(s)
}

func (s ServiceMeshAddClusterResponseBody) GoString() string {
	return s.String()
}

func (s *ServiceMeshAddClusterResponseBody) SetRequestId(v string) *ServiceMeshAddClusterResponseBody {
	s.RequestId = &v
	return s
}

type ServiceMeshAddClusterResponse struct {
	Headers map[string]string                  `json:"headers" xml:"headers" require:"true"`
	Body    *ServiceMeshAddClusterResponseBody `json:"body" xml:"body" require:"true"`
}

func (s ServiceMeshAddClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s ServiceMeshAddClusterResponse) GoString() string {
	return s.String()
}

func (s *ServiceMeshAddClusterResponse) SetHeaders(v map[string]string) *ServiceMeshAddClusterResponse {
	s.Headers = v
	return s
}

func (s *ServiceMeshAddClusterResponse) SetBody(v *ServiceMeshAddClusterResponseBody) *ServiceMeshAddClusterResponse {
	s.Body = v
	return s
}

type ServiceMeshRemoveClusterRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s ServiceMeshRemoveClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s ServiceMeshRemoveClusterRequest) GoString() string {
	return s.String()
}

func (s *ServiceMeshRemoveClusterRequest) SetHeaders(v map[string]string) *ServiceMeshRemoveClusterRequest {
	s.Headers = v
	return s
}

type ServiceMeshRemoveClusterResponseBody struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s ServiceMeshRemoveClusterResponseBody) String() string {
	return tea.Prettify(s)
}

func (s ServiceMeshRemoveClusterResponseBody) GoString() string {
	return s.String()
}

func (s *ServiceMeshRemoveClusterResponseBody) SetRequestId(v string) *ServiceMeshRemoveClusterResponseBody {
	s.RequestId = &v
	return s
}

type ServiceMeshRemoveClusterResponse struct {
	Headers map[string]string                     `json:"headers" xml:"headers" require:"true"`
	Body    *ServiceMeshRemoveClusterResponseBody `json:"body" xml:"body" require:"true"`
}

func (s ServiceMeshRemoveClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s ServiceMeshRemoveClusterResponse) GoString() string {
	return s.String()
}

func (s *ServiceMeshRemoveClusterResponse) SetHeaders(v map[string]string) *ServiceMeshRemoveClusterResponse {
	s.Headers = v
	return s
}

func (s *ServiceMeshRemoveClusterResponse) SetBody(v *ServiceMeshRemoveClusterResponseBody) *ServiceMeshRemoveClusterResponse {
	s.Body = v
	return s
}

type UpdateServiceMeshRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s UpdateServiceMeshRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateServiceMeshRequest) GoString() string {
	return s.String()
}

func (s *UpdateServiceMeshRequest) SetHeaders(v map[string]string) *UpdateServiceMeshRequest {
	s.Headers = v
	return s
}

type UpdateServiceMeshResponseBody struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s UpdateServiceMeshResponseBody) String() string {
	return tea.Prettify(s)
}

func (s UpdateServiceMeshResponseBody) GoString() string {
	return s.String()
}

func (s *UpdateServiceMeshResponseBody) SetRequestId(v string) *UpdateServiceMeshResponseBody {
	s.RequestId = &v
	return s
}

type UpdateServiceMeshResponse struct {
	Headers map[string]string              `json:"headers" xml:"headers" require:"true"`
	Body    *UpdateServiceMeshResponseBody `json:"body" xml:"body" require:"true"`
}

func (s UpdateServiceMeshResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateServiceMeshResponse) GoString() string {
	return s.String()
}

func (s *UpdateServiceMeshResponse) SetHeaders(v map[string]string) *UpdateServiceMeshResponse {
	s.Headers = v
	return s
}

func (s *UpdateServiceMeshResponse) SetBody(v *UpdateServiceMeshResponseBody) *UpdateServiceMeshResponse {
	s.Body = v
	return s
}

type ServiceMeshApiServerRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s ServiceMeshApiServerRequest) String() string {
	return tea.Prettify(s)
}

func (s ServiceMeshApiServerRequest) GoString() string {
	return s.String()
}

func (s *ServiceMeshApiServerRequest) SetHeaders(v map[string]string) *ServiceMeshApiServerRequest {
	s.Headers = v
	return s
}

type ServiceMeshApiServerResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s ServiceMeshApiServerResponse) String() string {
	return tea.Prettify(s)
}

func (s ServiceMeshApiServerResponse) GoString() string {
	return s.String()
}

func (s *ServiceMeshApiServerResponse) SetHeaders(v map[string]string) *ServiceMeshApiServerResponse {
	s.Headers = v
	return s
}

type UnInstallClusterAddonsBody struct {
	Name *string `json:"name" xml:"name" require:"true"`
}

func (s UnInstallClusterAddonsBody) String() string {
	return tea.Prettify(s)
}

func (s UnInstallClusterAddonsBody) GoString() string {
	return s.String()
}

func (s *UnInstallClusterAddonsBody) SetName(v string) *UnInstallClusterAddonsBody {
	s.Name = &v
	return s
}

type UnInstallClusterAddonsRequest struct {
	Headers map[string]string           `json:"headers" xml:"headers"`
	Body    *UnInstallClusterAddonsBody `json:"body" xml:"body" require:"true"`
}

func (s UnInstallClusterAddonsRequest) String() string {
	return tea.Prettify(s)
}

func (s UnInstallClusterAddonsRequest) GoString() string {
	return s.String()
}

func (s *UnInstallClusterAddonsRequest) SetHeaders(v map[string]string) *UnInstallClusterAddonsRequest {
	s.Headers = v
	return s
}

func (s *UnInstallClusterAddonsRequest) SetBody(v *UnInstallClusterAddonsBody) *UnInstallClusterAddonsRequest {
	s.Body = v
	return s
}

type UnInstallClusterAddonsResponseBody struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s UnInstallClusterAddonsResponseBody) String() string {
	return tea.Prettify(s)
}

func (s UnInstallClusterAddonsResponseBody) GoString() string {
	return s.String()
}

func (s *UnInstallClusterAddonsResponseBody) SetRequestId(v string) *UnInstallClusterAddonsResponseBody {
	s.RequestId = &v
	return s
}

type UnInstallClusterAddonsResponse struct {
	Headers map[string]string                   `json:"headers" xml:"headers" require:"true"`
	Body    *UnInstallClusterAddonsResponseBody `json:"body" xml:"body" require:"true"`
}

func (s UnInstallClusterAddonsResponse) String() string {
	return tea.Prettify(s)
}

func (s UnInstallClusterAddonsResponse) GoString() string {
	return s.String()
}

func (s *UnInstallClusterAddonsResponse) SetHeaders(v map[string]string) *UnInstallClusterAddonsResponse {
	s.Headers = v
	return s
}

func (s *UnInstallClusterAddonsResponse) SetBody(v *UnInstallClusterAddonsResponseBody) *UnInstallClusterAddonsResponse {
	s.Body = v
	return s
}

type DescribeAddonsQuery struct {
	Region      *string `json:"region" xml:"region"`
	ClusterType *string `json:"cluster_type" xml:"cluster_type"`
}

func (s DescribeAddonsQuery) String() string {
	return tea.Prettify(s)
}

func (s DescribeAddonsQuery) GoString() string {
	return s.String()
}

func (s *DescribeAddonsQuery) SetRegion(v string) *DescribeAddonsQuery {
	s.Region = &v
	return s
}

func (s *DescribeAddonsQuery) SetClusterType(v string) *DescribeAddonsQuery {
	s.ClusterType = &v
	return s
}

type DescribeAddonsRequest struct {
	Headers map[string]string    `json:"headers" xml:"headers"`
	Query   *DescribeAddonsQuery `json:"query" xml:"query"`
}

func (s DescribeAddonsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAddonsRequest) GoString() string {
	return s.String()
}

func (s *DescribeAddonsRequest) SetHeaders(v map[string]string) *DescribeAddonsRequest {
	s.Headers = v
	return s
}

func (s *DescribeAddonsRequest) SetQuery(v *DescribeAddonsQuery) *DescribeAddonsRequest {
	s.Query = v
	return s
}

type DescribeAddonsResponseBody struct {
	ComponentGroups    []*DescribeAddonsResponseBodyComponentGroups  `json:"ComponentGroups" xml:"ComponentGroups" require:"true" type:"Repeated"`
	StandardComponents *DescribeAddonsResponseBodyStandardComponents `json:"StandardComponents" xml:"StandardComponents" require:"true" type:"Struct"`
}

func (s DescribeAddonsResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeAddonsResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeAddonsResponseBody) SetComponentGroups(v []*DescribeAddonsResponseBodyComponentGroups) *DescribeAddonsResponseBody {
	s.ComponentGroups = v
	return s
}

func (s *DescribeAddonsResponseBody) SetStandardComponents(v *DescribeAddonsResponseBodyStandardComponents) *DescribeAddonsResponseBody {
	s.StandardComponents = v
	return s
}

type DescribeAddonsResponseBodyComponentGroups struct {
	GroupName *string                                           `json:"group_name" xml:"group_name" require:"true"`
	Items     []*DescribeAddonsResponseBodyComponentGroupsItems `json:"items" xml:"items" require:"true" type:"Repeated"`
	Default   []*string                                         `json:"default" xml:"default" require:"true" type:"Repeated"`
}

func (s DescribeAddonsResponseBodyComponentGroups) String() string {
	return tea.Prettify(s)
}

func (s DescribeAddonsResponseBodyComponentGroups) GoString() string {
	return s.String()
}

func (s *DescribeAddonsResponseBodyComponentGroups) SetGroupName(v string) *DescribeAddonsResponseBodyComponentGroups {
	s.GroupName = &v
	return s
}

func (s *DescribeAddonsResponseBodyComponentGroups) SetItems(v []*DescribeAddonsResponseBodyComponentGroupsItems) *DescribeAddonsResponseBodyComponentGroups {
	s.Items = v
	return s
}

func (s *DescribeAddonsResponseBodyComponentGroups) SetDefault(v []*string) *DescribeAddonsResponseBodyComponentGroups {
	s.Default = v
	return s
}

type DescribeAddonsResponseBodyComponentGroupsItems struct {
	Name     *string `json:"name" xml:"name" require:"true"`
	Config   *string `json:"config" xml:"config" require:"true"`
	Required *string `json:"required" xml:"required" require:"true"`
	Disabled *bool   `json:"disabled" xml:"disabled" require:"true"`
	Version  *string `json:"version" xml:"version" require:"true"`
}

func (s DescribeAddonsResponseBodyComponentGroupsItems) String() string {
	return tea.Prettify(s)
}

func (s DescribeAddonsResponseBodyComponentGroupsItems) GoString() string {
	return s.String()
}

func (s *DescribeAddonsResponseBodyComponentGroupsItems) SetName(v string) *DescribeAddonsResponseBodyComponentGroupsItems {
	s.Name = &v
	return s
}

func (s *DescribeAddonsResponseBodyComponentGroupsItems) SetConfig(v string) *DescribeAddonsResponseBodyComponentGroupsItems {
	s.Config = &v
	return s
}

func (s *DescribeAddonsResponseBodyComponentGroupsItems) SetRequired(v string) *DescribeAddonsResponseBodyComponentGroupsItems {
	s.Required = &v
	return s
}

func (s *DescribeAddonsResponseBodyComponentGroupsItems) SetDisabled(v bool) *DescribeAddonsResponseBodyComponentGroupsItems {
	s.Disabled = &v
	return s
}

func (s *DescribeAddonsResponseBodyComponentGroupsItems) SetVersion(v string) *DescribeAddonsResponseBodyComponentGroupsItems {
	s.Version = &v
	return s
}

type DescribeAddonsResponseBodyStandardComponents struct {
	AddonName *DescribeAddonsResponseBodyStandardComponentsAddonName `json:"addon_name" xml:"addon_name" require:"true" type:"Struct"`
}

func (s DescribeAddonsResponseBodyStandardComponents) String() string {
	return tea.Prettify(s)
}

func (s DescribeAddonsResponseBodyStandardComponents) GoString() string {
	return s.String()
}

func (s *DescribeAddonsResponseBodyStandardComponents) SetAddonName(v *DescribeAddonsResponseBodyStandardComponentsAddonName) *DescribeAddonsResponseBodyStandardComponents {
	s.AddonName = v
	return s
}

type DescribeAddonsResponseBodyStandardComponentsAddonName struct {
	Name     *string `json:"name" xml:"name" require:"true"`
	Config   *string `json:"config" xml:"config" require:"true"`
	Required *string `json:"required" xml:"required" require:"true"`
	Disabled *bool   `json:"disabled" xml:"disabled" require:"true"`
	Version  *string `json:"version" xml:"version" require:"true"`
}

func (s DescribeAddonsResponseBodyStandardComponentsAddonName) String() string {
	return tea.Prettify(s)
}

func (s DescribeAddonsResponseBodyStandardComponentsAddonName) GoString() string {
	return s.String()
}

func (s *DescribeAddonsResponseBodyStandardComponentsAddonName) SetName(v string) *DescribeAddonsResponseBodyStandardComponentsAddonName {
	s.Name = &v
	return s
}

func (s *DescribeAddonsResponseBodyStandardComponentsAddonName) SetConfig(v string) *DescribeAddonsResponseBodyStandardComponentsAddonName {
	s.Config = &v
	return s
}

func (s *DescribeAddonsResponseBodyStandardComponentsAddonName) SetRequired(v string) *DescribeAddonsResponseBodyStandardComponentsAddonName {
	s.Required = &v
	return s
}

func (s *DescribeAddonsResponseBodyStandardComponentsAddonName) SetDisabled(v bool) *DescribeAddonsResponseBodyStandardComponentsAddonName {
	s.Disabled = &v
	return s
}

func (s *DescribeAddonsResponseBodyStandardComponentsAddonName) SetVersion(v string) *DescribeAddonsResponseBodyStandardComponentsAddonName {
	s.Version = &v
	return s
}

type DescribeAddonsResponse struct {
	Headers map[string]string           `json:"headers" xml:"headers" require:"true"`
	Body    *DescribeAddonsResponseBody `json:"body" xml:"body" require:"true"`
}

func (s DescribeAddonsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAddonsResponse) GoString() string {
	return s.String()
}

func (s *DescribeAddonsResponse) SetHeaders(v map[string]string) *DescribeAddonsResponse {
	s.Headers = v
	return s
}

func (s *DescribeAddonsResponse) SetBody(v *DescribeAddonsResponseBody) *DescribeAddonsResponse {
	s.Body = v
	return s
}

type CancelClusterUpgradeRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s CancelClusterUpgradeRequest) String() string {
	return tea.Prettify(s)
}

func (s CancelClusterUpgradeRequest) GoString() string {
	return s.String()
}

func (s *CancelClusterUpgradeRequest) SetHeaders(v map[string]string) *CancelClusterUpgradeRequest {
	s.Headers = v
	return s
}

type CancelClusterUpgradeResponseBody struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s CancelClusterUpgradeResponseBody) String() string {
	return tea.Prettify(s)
}

func (s CancelClusterUpgradeResponseBody) GoString() string {
	return s.String()
}

func (s *CancelClusterUpgradeResponseBody) SetRequestId(v string) *CancelClusterUpgradeResponseBody {
	s.RequestId = &v
	return s
}

type CancelClusterUpgradeResponse struct {
	Headers map[string]string                 `json:"headers" xml:"headers" require:"true"`
	Body    *CancelClusterUpgradeResponseBody `json:"body" xml:"body" require:"true"`
}

func (s CancelClusterUpgradeResponse) String() string {
	return tea.Prettify(s)
}

func (s CancelClusterUpgradeResponse) GoString() string {
	return s.String()
}

func (s *CancelClusterUpgradeResponse) SetHeaders(v map[string]string) *CancelClusterUpgradeResponse {
	s.Headers = v
	return s
}

func (s *CancelClusterUpgradeResponse) SetBody(v *CancelClusterUpgradeResponseBody) *CancelClusterUpgradeResponse {
	s.Body = v
	return s
}

type DescribeUserQuotaRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s DescribeUserQuotaRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeUserQuotaRequest) GoString() string {
	return s.String()
}

func (s *DescribeUserQuotaRequest) SetHeaders(v map[string]string) *DescribeUserQuotaRequest {
	s.Headers = v
	return s
}

type DescribeUserQuotaResponseBody struct {
	ClusterQuota    *int `json:"cluster_quota" xml:"cluster_quota" require:"true"`
	NodeQuota       *int `json:"node_quota" xml:"node_quota" require:"true"`
	AskClusterQuota *int `json:"ask_cluster_quota" xml:"ask_cluster_quota" require:"true"`
	AmkClusterQuota *int `json:"amk_cluster_quota" xml:"amk_cluster_quota" require:"true"`
}

func (s DescribeUserQuotaResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeUserQuotaResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeUserQuotaResponseBody) SetClusterQuota(v int) *DescribeUserQuotaResponseBody {
	s.ClusterQuota = &v
	return s
}

func (s *DescribeUserQuotaResponseBody) SetNodeQuota(v int) *DescribeUserQuotaResponseBody {
	s.NodeQuota = &v
	return s
}

func (s *DescribeUserQuotaResponseBody) SetAskClusterQuota(v int) *DescribeUserQuotaResponseBody {
	s.AskClusterQuota = &v
	return s
}

func (s *DescribeUserQuotaResponseBody) SetAmkClusterQuota(v int) *DescribeUserQuotaResponseBody {
	s.AmkClusterQuota = &v
	return s
}

type DescribeUserQuotaResponse struct {
	Headers map[string]string              `json:"headers" xml:"headers" require:"true"`
	Body    *DescribeUserQuotaResponseBody `json:"body" xml:"body" require:"true"`
}

func (s DescribeUserQuotaResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeUserQuotaResponse) GoString() string {
	return s.String()
}

func (s *DescribeUserQuotaResponse) SetHeaders(v map[string]string) *DescribeUserQuotaResponse {
	s.Headers = v
	return s
}

func (s *DescribeUserQuotaResponse) SetBody(v *DescribeUserQuotaResponseBody) *DescribeUserQuotaResponse {
	s.Body = v
	return s
}

type DescribeClusterV2UserKubeconfigQuery struct {
	PrivateIpAddress *bool `json:"PrivateIpAddress" xml:"PrivateIpAddress"`
}

func (s DescribeClusterV2UserKubeconfigQuery) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterV2UserKubeconfigQuery) GoString() string {
	return s.String()
}

func (s *DescribeClusterV2UserKubeconfigQuery) SetPrivateIpAddress(v bool) *DescribeClusterV2UserKubeconfigQuery {
	s.PrivateIpAddress = &v
	return s
}

type DescribeClusterV2UserKubeconfigRequest struct {
	Headers map[string]string                     `json:"headers" xml:"headers"`
	Query   *DescribeClusterV2UserKubeconfigQuery `json:"query" xml:"query"`
}

func (s DescribeClusterV2UserKubeconfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterV2UserKubeconfigRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterV2UserKubeconfigRequest) SetHeaders(v map[string]string) *DescribeClusterV2UserKubeconfigRequest {
	s.Headers = v
	return s
}

func (s *DescribeClusterV2UserKubeconfigRequest) SetQuery(v *DescribeClusterV2UserKubeconfigQuery) *DescribeClusterV2UserKubeconfigRequest {
	s.Query = v
	return s
}

type DescribeClusterV2UserKubeconfigResponseBody struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DescribeClusterV2UserKubeconfigResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterV2UserKubeconfigResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeClusterV2UserKubeconfigResponseBody) SetRequestId(v string) *DescribeClusterV2UserKubeconfigResponseBody {
	s.RequestId = &v
	return s
}

type DescribeClusterV2UserKubeconfigResponse struct {
	Headers map[string]string                            `json:"headers" xml:"headers" require:"true"`
	Body    *DescribeClusterV2UserKubeconfigResponseBody `json:"body" xml:"body" require:"true"`
}

func (s DescribeClusterV2UserKubeconfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterV2UserKubeconfigResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterV2UserKubeconfigResponse) SetHeaders(v map[string]string) *DescribeClusterV2UserKubeconfigResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterV2UserKubeconfigResponse) SetBody(v *DescribeClusterV2UserKubeconfigResponseBody) *DescribeClusterV2UserKubeconfigResponse {
	s.Body = v
	return s
}

type RemoveClusterNodesBody struct {
	ReleaseNode *bool                          `json:"release_node" xml:"release_node"`
	DrainNode   *bool                          `json:"drain_node" xml:"drain_node"`
	Nodes       []*RemoveClusterNodesBodyNodes `json:"nodes" xml:"nodes" require:"true" type:"Repeated"`
}

func (s RemoveClusterNodesBody) String() string {
	return tea.Prettify(s)
}

func (s RemoveClusterNodesBody) GoString() string {
	return s.String()
}

func (s *RemoveClusterNodesBody) SetReleaseNode(v bool) *RemoveClusterNodesBody {
	s.ReleaseNode = &v
	return s
}

func (s *RemoveClusterNodesBody) SetDrainNode(v bool) *RemoveClusterNodesBody {
	s.DrainNode = &v
	return s
}

func (s *RemoveClusterNodesBody) SetNodes(v []*RemoveClusterNodesBodyNodes) *RemoveClusterNodesBody {
	s.Nodes = v
	return s
}

type RemoveClusterNodesBodyNodes struct {
	NodeName *string `json:"node_name" xml:"node_name"`
}

func (s RemoveClusterNodesBodyNodes) String() string {
	return tea.Prettify(s)
}

func (s RemoveClusterNodesBodyNodes) GoString() string {
	return s.String()
}

func (s *RemoveClusterNodesBodyNodes) SetNodeName(v string) *RemoveClusterNodesBodyNodes {
	s.NodeName = &v
	return s
}

type RemoveClusterNodesRequest struct {
	Headers map[string]string       `json:"headers" xml:"headers"`
	Body    *RemoveClusterNodesBody `json:"body" xml:"body"`
}

func (s RemoveClusterNodesRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveClusterNodesRequest) GoString() string {
	return s.String()
}

func (s *RemoveClusterNodesRequest) SetHeaders(v map[string]string) *RemoveClusterNodesRequest {
	s.Headers = v
	return s
}

func (s *RemoveClusterNodesRequest) SetBody(v *RemoveClusterNodesBody) *RemoveClusterNodesRequest {
	s.Body = v
	return s
}

type RemoveClusterNodesResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s RemoveClusterNodesResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveClusterNodesResponse) GoString() string {
	return s.String()
}

func (s *RemoveClusterNodesResponse) SetHeaders(v map[string]string) *RemoveClusterNodesResponse {
	s.Headers = v
	return s
}

type UpgradeClusterBody struct {
	Version *string `json:"version" xml:"version"`
}

func (s UpgradeClusterBody) String() string {
	return tea.Prettify(s)
}

func (s UpgradeClusterBody) GoString() string {
	return s.String()
}

func (s *UpgradeClusterBody) SetVersion(v string) *UpgradeClusterBody {
	s.Version = &v
	return s
}

type UpgradeClusterRequest struct {
	Headers map[string]string   `json:"headers" xml:"headers"`
	Body    *UpgradeClusterBody `json:"body" xml:"body"`
}

func (s UpgradeClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s UpgradeClusterRequest) GoString() string {
	return s.String()
}

func (s *UpgradeClusterRequest) SetHeaders(v map[string]string) *UpgradeClusterRequest {
	s.Headers = v
	return s
}

func (s *UpgradeClusterRequest) SetBody(v *UpgradeClusterBody) *UpgradeClusterRequest {
	s.Body = v
	return s
}

type UpgradeClusterResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s UpgradeClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s UpgradeClusterResponse) GoString() string {
	return s.String()
}

func (s *UpgradeClusterResponse) SetHeaders(v map[string]string) *UpgradeClusterResponse {
	s.Headers = v
	return s
}

type PauseClusterUpgradeRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s PauseClusterUpgradeRequest) String() string {
	return tea.Prettify(s)
}

func (s PauseClusterUpgradeRequest) GoString() string {
	return s.String()
}

func (s *PauseClusterUpgradeRequest) SetHeaders(v map[string]string) *PauseClusterUpgradeRequest {
	s.Headers = v
	return s
}

type PauseClusterUpgradeResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s PauseClusterUpgradeResponse) String() string {
	return tea.Prettify(s)
}

func (s PauseClusterUpgradeResponse) GoString() string {
	return s.String()
}

func (s *PauseClusterUpgradeResponse) SetHeaders(v map[string]string) *PauseClusterUpgradeResponse {
	s.Headers = v
	return s
}

type ResumeUpgradeClusterRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s ResumeUpgradeClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s ResumeUpgradeClusterRequest) GoString() string {
	return s.String()
}

func (s *ResumeUpgradeClusterRequest) SetHeaders(v map[string]string) *ResumeUpgradeClusterRequest {
	s.Headers = v
	return s
}

type ResumeUpgradeClusterResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s ResumeUpgradeClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s ResumeUpgradeClusterResponse) GoString() string {
	return s.String()
}

func (s *ResumeUpgradeClusterResponse) SetHeaders(v map[string]string) *ResumeUpgradeClusterResponse {
	s.Headers = v
	return s
}

type GetUpgradeStatusRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s GetUpgradeStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s GetUpgradeStatusRequest) GoString() string {
	return s.String()
}

func (s *GetUpgradeStatusRequest) SetHeaders(v map[string]string) *GetUpgradeStatusRequest {
	s.Headers = v
	return s
}

type GetUpgradeStatusResponseBody struct {
	Status           *string `json:"status" xml:"status" require:"true"`
	PrecheckReportId *string `json:"precheck_report_id" xml:"precheck_report_id" require:"true"`
	UpgradeStep      *string `json:"upgrade_step" xml:"upgrade_step" require:"true"`
	ErrorMessage     *string `json:"error_message" xml:"error_message" require:"true"`
}

func (s GetUpgradeStatusResponseBody) String() string {
	return tea.Prettify(s)
}

func (s GetUpgradeStatusResponseBody) GoString() string {
	return s.String()
}

func (s *GetUpgradeStatusResponseBody) SetStatus(v string) *GetUpgradeStatusResponseBody {
	s.Status = &v
	return s
}

func (s *GetUpgradeStatusResponseBody) SetPrecheckReportId(v string) *GetUpgradeStatusResponseBody {
	s.PrecheckReportId = &v
	return s
}

func (s *GetUpgradeStatusResponseBody) SetUpgradeStep(v string) *GetUpgradeStatusResponseBody {
	s.UpgradeStep = &v
	return s
}

func (s *GetUpgradeStatusResponseBody) SetErrorMessage(v string) *GetUpgradeStatusResponseBody {
	s.ErrorMessage = &v
	return s
}

type GetUpgradeStatusResponse struct {
	Headers map[string]string             `json:"headers" xml:"headers" require:"true"`
	Body    *GetUpgradeStatusResponseBody `json:"body" xml:"body" require:"true"`
}

func (s GetUpgradeStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s GetUpgradeStatusResponse) GoString() string {
	return s.String()
}

func (s *GetUpgradeStatusResponse) SetHeaders(v map[string]string) *GetUpgradeStatusResponse {
	s.Headers = v
	return s
}

func (s *GetUpgradeStatusResponse) SetBody(v *GetUpgradeStatusResponseBody) *GetUpgradeStatusResponse {
	s.Body = v
	return s
}

type ModifyClusterBody struct {
	DeletionProtection    *bool   `json:"deletion_protection" xml:"deletion_protection"`
	IngressLoadbalancerId *string `json:"ingress_loadbalancer_id" xml:"ingress_loadbalancer_id"`
	ResourceGroupId       *string `json:"resource_group_id" xml:"resource_group_id"`
}

func (s ModifyClusterBody) String() string {
	return tea.Prettify(s)
}

func (s ModifyClusterBody) GoString() string {
	return s.String()
}

func (s *ModifyClusterBody) SetDeletionProtection(v bool) *ModifyClusterBody {
	s.DeletionProtection = &v
	return s
}

func (s *ModifyClusterBody) SetIngressLoadbalancerId(v string) *ModifyClusterBody {
	s.IngressLoadbalancerId = &v
	return s
}

func (s *ModifyClusterBody) SetResourceGroupId(v string) *ModifyClusterBody {
	s.ResourceGroupId = &v
	return s
}

type ModifyClusterRequest struct {
	Headers map[string]string  `json:"headers" xml:"headers"`
	Body    *ModifyClusterBody `json:"body" xml:"body"`
}

func (s ModifyClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyClusterRequest) GoString() string {
	return s.String()
}

func (s *ModifyClusterRequest) SetHeaders(v map[string]string) *ModifyClusterRequest {
	s.Headers = v
	return s
}

func (s *ModifyClusterRequest) SetBody(v *ModifyClusterBody) *ModifyClusterRequest {
	s.Body = v
	return s
}

type ModifyClusterResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s ModifyClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyClusterResponse) GoString() string {
	return s.String()
}

func (s *ModifyClusterResponse) SetHeaders(v map[string]string) *ModifyClusterResponse {
	s.Headers = v
	return s
}

type InstallClusterAddonsBody struct {
	Name     *string `json:"name" xml:"name"`
	Version  *string `json:"version" xml:"version"`
	Disabled *bool   `json:"disabled" xml:"disabled"`
	Required *string `json:"required" xml:"required"`
	Config   *string `json:"config" xml:"config"`
}

func (s InstallClusterAddonsBody) String() string {
	return tea.Prettify(s)
}

func (s InstallClusterAddonsBody) GoString() string {
	return s.String()
}

func (s *InstallClusterAddonsBody) SetName(v string) *InstallClusterAddonsBody {
	s.Name = &v
	return s
}

func (s *InstallClusterAddonsBody) SetVersion(v string) *InstallClusterAddonsBody {
	s.Version = &v
	return s
}

func (s *InstallClusterAddonsBody) SetDisabled(v bool) *InstallClusterAddonsBody {
	s.Disabled = &v
	return s
}

func (s *InstallClusterAddonsBody) SetRequired(v string) *InstallClusterAddonsBody {
	s.Required = &v
	return s
}

func (s *InstallClusterAddonsBody) SetConfig(v string) *InstallClusterAddonsBody {
	s.Config = &v
	return s
}

type InstallClusterAddonsRequest struct {
	Headers map[string]string         `json:"headers" xml:"headers"`
	Body    *InstallClusterAddonsBody `json:"body" xml:"body"`
}

func (s InstallClusterAddonsRequest) String() string {
	return tea.Prettify(s)
}

func (s InstallClusterAddonsRequest) GoString() string {
	return s.String()
}

func (s *InstallClusterAddonsRequest) SetHeaders(v map[string]string) *InstallClusterAddonsRequest {
	s.Headers = v
	return s
}

func (s *InstallClusterAddonsRequest) SetBody(v *InstallClusterAddonsBody) *InstallClusterAddonsRequest {
	s.Body = v
	return s
}

type InstallClusterAddonsResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s InstallClusterAddonsResponse) String() string {
	return tea.Prettify(s)
}

func (s InstallClusterAddonsResponse) GoString() string {
	return s.String()
}

func (s *InstallClusterAddonsResponse) SetHeaders(v map[string]string) *InstallClusterAddonsResponse {
	s.Headers = v
	return s
}

type DeleteTriggerHookRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s DeleteTriggerHookRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteTriggerHookRequest) GoString() string {
	return s.String()
}

func (s *DeleteTriggerHookRequest) SetHeaders(v map[string]string) *DeleteTriggerHookRequest {
	s.Headers = v
	return s
}

type DeleteTriggerHookResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s DeleteTriggerHookResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteTriggerHookResponse) GoString() string {
	return s.String()
}

func (s *DeleteTriggerHookResponse) SetHeaders(v map[string]string) *DeleteTriggerHookResponse {
	s.Headers = v
	return s
}

type ModifyClusterTagsBody struct {
	Key   *string `json:"key" xml:"key" require:"true"`
	Value *string `json:"value" xml:"value" require:"true"`
}

func (s ModifyClusterTagsBody) String() string {
	return tea.Prettify(s)
}

func (s ModifyClusterTagsBody) GoString() string {
	return s.String()
}

func (s *ModifyClusterTagsBody) SetKey(v string) *ModifyClusterTagsBody {
	s.Key = &v
	return s
}

func (s *ModifyClusterTagsBody) SetValue(v string) *ModifyClusterTagsBody {
	s.Value = &v
	return s
}

type ModifyClusterTagsRequest struct {
	Headers map[string]string      `json:"headers" xml:"headers"`
	Body    *ModifyClusterTagsBody `json:"body" xml:"body" require:"true"`
}

func (s ModifyClusterTagsRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyClusterTagsRequest) GoString() string {
	return s.String()
}

func (s *ModifyClusterTagsRequest) SetHeaders(v map[string]string) *ModifyClusterTagsRequest {
	s.Headers = v
	return s
}

func (s *ModifyClusterTagsRequest) SetBody(v *ModifyClusterTagsBody) *ModifyClusterTagsRequest {
	s.Body = v
	return s
}

type ModifyClusterTagsResponseBody struct {
	RequestId *string `json:"requestId" xml:"requestId" require:"true"`
}

func (s ModifyClusterTagsResponseBody) String() string {
	return tea.Prettify(s)
}

func (s ModifyClusterTagsResponseBody) GoString() string {
	return s.String()
}

func (s *ModifyClusterTagsResponseBody) SetRequestId(v string) *ModifyClusterTagsResponseBody {
	s.RequestId = &v
	return s
}

type ModifyClusterTagsResponse struct {
	Headers map[string]string              `json:"headers" xml:"headers" require:"true"`
	Body    *ModifyClusterTagsResponseBody `json:"body" xml:"body" require:"true"`
}

func (s ModifyClusterTagsResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyClusterTagsResponse) GoString() string {
	return s.String()
}

func (s *ModifyClusterTagsResponse) SetHeaders(v map[string]string) *ModifyClusterTagsResponse {
	s.Headers = v
	return s
}

func (s *ModifyClusterTagsResponse) SetBody(v *ModifyClusterTagsResponseBody) *ModifyClusterTagsResponse {
	s.Body = v
	return s
}

type DescribeExternalAgentRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s DescribeExternalAgentRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeExternalAgentRequest) GoString() string {
	return s.String()
}

func (s *DescribeExternalAgentRequest) SetHeaders(v map[string]string) *DescribeExternalAgentRequest {
	s.Headers = v
	return s
}

type DescribeExternalAgentResponseBody struct {
	Config *string `json:"config" xml:"config" require:"true"`
}

func (s DescribeExternalAgentResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeExternalAgentResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeExternalAgentResponseBody) SetConfig(v string) *DescribeExternalAgentResponseBody {
	s.Config = &v
	return s
}

type DescribeExternalAgentResponse struct {
	Headers map[string]string                  `json:"headers" xml:"headers" require:"true"`
	Body    *DescribeExternalAgentResponseBody `json:"body" xml:"body" require:"true"`
}

func (s DescribeExternalAgentResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeExternalAgentResponse) GoString() string {
	return s.String()
}

func (s *DescribeExternalAgentResponse) SetHeaders(v map[string]string) *DescribeExternalAgentResponse {
	s.Headers = v
	return s
}

func (s *DescribeExternalAgentResponse) SetBody(v *DescribeExternalAgentResponseBody) *DescribeExternalAgentResponse {
	s.Body = v
	return s
}

type DescribeClusterAttachScriptsBody struct {
	Options *DescribeClusterAttachScriptsBodyOptions `json:"options" xml:"options" require:"true" type:"Struct"`
}

func (s DescribeClusterAttachScriptsBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAttachScriptsBody) GoString() string {
	return s.String()
}

func (s *DescribeClusterAttachScriptsBody) SetOptions(v *DescribeClusterAttachScriptsBodyOptions) *DescribeClusterAttachScriptsBody {
	s.Options = v
	return s
}

type DescribeClusterAttachScriptsBodyOptions struct {
	FlannelIface     *string `json:"flannelIface" xml:"flannelIface"`
	EnableIptables   *bool   `json:"enableIptables" xml:"enableIptables"`
	ManageRuntime    *bool   `json:"manageRuntime" xml:"manageRuntime"`
	NodeNameStrategy *string `json:"nodeNameStrategy" xml:"nodeNameStrategy"`
	NodeName         *string `json:"nodeName" xml:"nodeName"`
	NodeNamePrefix   *string `json:"nodeNamePrefix" xml:"nodeNamePrefix"`
}

func (s DescribeClusterAttachScriptsBodyOptions) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAttachScriptsBodyOptions) GoString() string {
	return s.String()
}

func (s *DescribeClusterAttachScriptsBodyOptions) SetFlannelIface(v string) *DescribeClusterAttachScriptsBodyOptions {
	s.FlannelIface = &v
	return s
}

func (s *DescribeClusterAttachScriptsBodyOptions) SetEnableIptables(v bool) *DescribeClusterAttachScriptsBodyOptions {
	s.EnableIptables = &v
	return s
}

func (s *DescribeClusterAttachScriptsBodyOptions) SetManageRuntime(v bool) *DescribeClusterAttachScriptsBodyOptions {
	s.ManageRuntime = &v
	return s
}

func (s *DescribeClusterAttachScriptsBodyOptions) SetNodeNameStrategy(v string) *DescribeClusterAttachScriptsBodyOptions {
	s.NodeNameStrategy = &v
	return s
}

func (s *DescribeClusterAttachScriptsBodyOptions) SetNodeName(v string) *DescribeClusterAttachScriptsBodyOptions {
	s.NodeName = &v
	return s
}

func (s *DescribeClusterAttachScriptsBodyOptions) SetNodeNamePrefix(v string) *DescribeClusterAttachScriptsBodyOptions {
	s.NodeNamePrefix = &v
	return s
}

type DescribeClusterAttachScriptsRequest struct {
	Headers map[string]string                 `json:"headers" xml:"headers"`
	Body    *DescribeClusterAttachScriptsBody `json:"body" xml:"body" require:"true"`
}

func (s DescribeClusterAttachScriptsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAttachScriptsRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterAttachScriptsRequest) SetHeaders(v map[string]string) *DescribeClusterAttachScriptsRequest {
	s.Headers = v
	return s
}

func (s *DescribeClusterAttachScriptsRequest) SetBody(v *DescribeClusterAttachScriptsBody) *DescribeClusterAttachScriptsRequest {
	s.Body = v
	return s
}

type DescribeClusterAttachScriptsResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s DescribeClusterAttachScriptsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAttachScriptsResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterAttachScriptsResponse) SetHeaders(v map[string]string) *DescribeClusterAttachScriptsResponse {
	s.Headers = v
	return s
}

type ScaleOutClusterBody struct {
	Count                    *int                                  `json:"count" xml:"count" require:"true"`
	WorkerInstanceChargeType *string                               `json:"worker_instance_charge_type" xml:"worker_instance_charge_type"`
	WorkerPeriod             *int                                  `json:"worker_period" xml:"worker_period"`
	WorkerPeriodUnit         *string                               `json:"worker_period_unit" xml:"worker_period_unit"`
	WorkerAutoRenew          *bool                                 `json:"worker_auto_renew" xml:"worker_auto_renew"`
	WorkerAutoRenewPeriod    *int                                  `json:"worker_auto_renew_period" xml:"worker_auto_renew_period"`
	WorkerSystemDiskCategory *string                               `json:"worker_system_disk_category" xml:"worker_system_disk_category"`
	WorkerSystemDiskSize     *int                                  `json:"worker_system_disk_size" xml:"worker_system_disk_size"`
	WorkerDataDisk           *bool                                 `json:"worker_data_disk" xml:"worker_data_disk" require:"true"`
	KeyPair                  *string                               `json:"key_pair" xml:"key_pair" require:"true"`
	LoginPassword            *string                               `json:"login_password" xml:"login_password" require:"true"`
	CloudMonitorFlags        *bool                                 `json:"cloud_monitor_flags" xml:"cloud_monitor_flags"`
	CpuPolicy                *string                               `json:"cpu_policy" xml:"cpu_policy"`
	DisableRollback          *bool                                 `json:"disable_rollback" xml:"disable_rollback"`
	WorkerDataDisks          []*ScaleOutClusterBodyWorkerDataDisks `json:"worker_data_disks" xml:"worker_data_disks" require:"true" type:"Repeated"`
	Tags                     []*ScaleOutClusterBodyTags            `json:"tags" xml:"tags" require:"true" type:"Repeated"`
	Taints                   []*ScaleOutClusterBodyTaints          `json:"taints" xml:"taints" require:"true" type:"Repeated"`
	VswitchIds               []*string                             `json:"vswitch_ids" xml:"vswitch_ids" require:"true" type:"Repeated"`
	WorkerInstanceTypes      []*string                             `json:"worker_instance_types" xml:"worker_instance_types" require:"true" type:"Repeated"`
}

func (s ScaleOutClusterBody) String() string {
	return tea.Prettify(s)
}

func (s ScaleOutClusterBody) GoString() string {
	return s.String()
}

func (s *ScaleOutClusterBody) SetCount(v int) *ScaleOutClusterBody {
	s.Count = &v
	return s
}

func (s *ScaleOutClusterBody) SetWorkerInstanceChargeType(v string) *ScaleOutClusterBody {
	s.WorkerInstanceChargeType = &v
	return s
}

func (s *ScaleOutClusterBody) SetWorkerPeriod(v int) *ScaleOutClusterBody {
	s.WorkerPeriod = &v
	return s
}

func (s *ScaleOutClusterBody) SetWorkerPeriodUnit(v string) *ScaleOutClusterBody {
	s.WorkerPeriodUnit = &v
	return s
}

func (s *ScaleOutClusterBody) SetWorkerAutoRenew(v bool) *ScaleOutClusterBody {
	s.WorkerAutoRenew = &v
	return s
}

func (s *ScaleOutClusterBody) SetWorkerAutoRenewPeriod(v int) *ScaleOutClusterBody {
	s.WorkerAutoRenewPeriod = &v
	return s
}

func (s *ScaleOutClusterBody) SetWorkerSystemDiskCategory(v string) *ScaleOutClusterBody {
	s.WorkerSystemDiskCategory = &v
	return s
}

func (s *ScaleOutClusterBody) SetWorkerSystemDiskSize(v int) *ScaleOutClusterBody {
	s.WorkerSystemDiskSize = &v
	return s
}

func (s *ScaleOutClusterBody) SetWorkerDataDisk(v bool) *ScaleOutClusterBody {
	s.WorkerDataDisk = &v
	return s
}

func (s *ScaleOutClusterBody) SetKeyPair(v string) *ScaleOutClusterBody {
	s.KeyPair = &v
	return s
}

func (s *ScaleOutClusterBody) SetLoginPassword(v string) *ScaleOutClusterBody {
	s.LoginPassword = &v
	return s
}

func (s *ScaleOutClusterBody) SetCloudMonitorFlags(v bool) *ScaleOutClusterBody {
	s.CloudMonitorFlags = &v
	return s
}

func (s *ScaleOutClusterBody) SetCpuPolicy(v string) *ScaleOutClusterBody {
	s.CpuPolicy = &v
	return s
}

func (s *ScaleOutClusterBody) SetDisableRollback(v bool) *ScaleOutClusterBody {
	s.DisableRollback = &v
	return s
}

func (s *ScaleOutClusterBody) SetWorkerDataDisks(v []*ScaleOutClusterBodyWorkerDataDisks) *ScaleOutClusterBody {
	s.WorkerDataDisks = v
	return s
}

func (s *ScaleOutClusterBody) SetTags(v []*ScaleOutClusterBodyTags) *ScaleOutClusterBody {
	s.Tags = v
	return s
}

func (s *ScaleOutClusterBody) SetTaints(v []*ScaleOutClusterBodyTaints) *ScaleOutClusterBody {
	s.Taints = v
	return s
}

func (s *ScaleOutClusterBody) SetVswitchIds(v []*string) *ScaleOutClusterBody {
	s.VswitchIds = v
	return s
}

func (s *ScaleOutClusterBody) SetWorkerInstanceTypes(v []*string) *ScaleOutClusterBody {
	s.WorkerInstanceTypes = v
	return s
}

type ScaleOutClusterBodyWorkerDataDisks struct {
	Category  *string `json:"category" xml:"category"`
	Size      *string `json:"size" xml:"size"`
	Encrypted *string `json:"encrypted" xml:"encrypted"`
}

func (s ScaleOutClusterBodyWorkerDataDisks) String() string {
	return tea.Prettify(s)
}

func (s ScaleOutClusterBodyWorkerDataDisks) GoString() string {
	return s.String()
}

func (s *ScaleOutClusterBodyWorkerDataDisks) SetCategory(v string) *ScaleOutClusterBodyWorkerDataDisks {
	s.Category = &v
	return s
}

func (s *ScaleOutClusterBodyWorkerDataDisks) SetSize(v string) *ScaleOutClusterBodyWorkerDataDisks {
	s.Size = &v
	return s
}

func (s *ScaleOutClusterBodyWorkerDataDisks) SetEncrypted(v string) *ScaleOutClusterBodyWorkerDataDisks {
	s.Encrypted = &v
	return s
}

type ScaleOutClusterBodyTags struct {
	Key   *string `json:"key" xml:"key"`
	Value *string `json:"value" xml:"value"`
}

func (s ScaleOutClusterBodyTags) String() string {
	return tea.Prettify(s)
}

func (s ScaleOutClusterBodyTags) GoString() string {
	return s.String()
}

func (s *ScaleOutClusterBodyTags) SetKey(v string) *ScaleOutClusterBodyTags {
	s.Key = &v
	return s
}

func (s *ScaleOutClusterBodyTags) SetValue(v string) *ScaleOutClusterBodyTags {
	s.Value = &v
	return s
}

type ScaleOutClusterBodyTaints struct {
	Key    *string `json:"key" xml:"key"`
	Value  *string `json:"value" xml:"value"`
	Effect *string `json:"effect" xml:"effect"`
}

func (s ScaleOutClusterBodyTaints) String() string {
	return tea.Prettify(s)
}

func (s ScaleOutClusterBodyTaints) GoString() string {
	return s.String()
}

func (s *ScaleOutClusterBodyTaints) SetKey(v string) *ScaleOutClusterBodyTaints {
	s.Key = &v
	return s
}

func (s *ScaleOutClusterBodyTaints) SetValue(v string) *ScaleOutClusterBodyTaints {
	s.Value = &v
	return s
}

func (s *ScaleOutClusterBodyTaints) SetEffect(v string) *ScaleOutClusterBodyTaints {
	s.Effect = &v
	return s
}

type ScaleOutClusterRequest struct {
	Headers map[string]string    `json:"headers" xml:"headers"`
	Body    *ScaleOutClusterBody `json:"body" xml:"body" require:"true"`
}

func (s ScaleOutClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s ScaleOutClusterRequest) GoString() string {
	return s.String()
}

func (s *ScaleOutClusterRequest) SetHeaders(v map[string]string) *ScaleOutClusterRequest {
	s.Headers = v
	return s
}

func (s *ScaleOutClusterRequest) SetBody(v *ScaleOutClusterBody) *ScaleOutClusterRequest {
	s.Body = v
	return s
}

type ScaleOutClusterResponseBody struct {
	ClusterId  *string `json:"cluster_id" xml:"cluster_id" require:"true"`
	RequestId  *string `json:"request_id" xml:"request_id" require:"true"`
	TaskId     *string `json:"task_id" xml:"task_id" require:"true"`
	InstanceId *string `json:"instanceId" xml:"instanceId" require:"true"`
}

func (s ScaleOutClusterResponseBody) String() string {
	return tea.Prettify(s)
}

func (s ScaleOutClusterResponseBody) GoString() string {
	return s.String()
}

func (s *ScaleOutClusterResponseBody) SetClusterId(v string) *ScaleOutClusterResponseBody {
	s.ClusterId = &v
	return s
}

func (s *ScaleOutClusterResponseBody) SetRequestId(v string) *ScaleOutClusterResponseBody {
	s.RequestId = &v
	return s
}

func (s *ScaleOutClusterResponseBody) SetTaskId(v string) *ScaleOutClusterResponseBody {
	s.TaskId = &v
	return s
}

func (s *ScaleOutClusterResponseBody) SetInstanceId(v string) *ScaleOutClusterResponseBody {
	s.InstanceId = &v
	return s
}

type ScaleOutClusterResponse struct {
	Headers map[string]string            `json:"headers" xml:"headers" require:"true"`
	Body    *ScaleOutClusterResponseBody `json:"body" xml:"body" require:"true"`
}

func (s ScaleOutClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s ScaleOutClusterResponse) GoString() string {
	return s.String()
}

func (s *ScaleOutClusterResponse) SetHeaders(v map[string]string) *ScaleOutClusterResponse {
	s.Headers = v
	return s
}

func (s *ScaleOutClusterResponse) SetBody(v *ScaleOutClusterResponseBody) *ScaleOutClusterResponse {
	s.Body = v
	return s
}

type CreateTriggerHookBody struct {
	RegionId   *string `json:"region_id" xml:"region_id"`
	ClusterId  *string `json:"cluster_id" xml:"cluster_id"`
	ProjectId  *string `json:"project_id" xml:"project_id"`
	Action     *string `json:"action" xml:"action"`
	TriggerUrl *string `json:"trigger_url" xml:"trigger_url"`
}

func (s CreateTriggerHookBody) String() string {
	return tea.Prettify(s)
}

func (s CreateTriggerHookBody) GoString() string {
	return s.String()
}

func (s *CreateTriggerHookBody) SetRegionId(v string) *CreateTriggerHookBody {
	s.RegionId = &v
	return s
}

func (s *CreateTriggerHookBody) SetClusterId(v string) *CreateTriggerHookBody {
	s.ClusterId = &v
	return s
}

func (s *CreateTriggerHookBody) SetProjectId(v string) *CreateTriggerHookBody {
	s.ProjectId = &v
	return s
}

func (s *CreateTriggerHookBody) SetAction(v string) *CreateTriggerHookBody {
	s.Action = &v
	return s
}

func (s *CreateTriggerHookBody) SetTriggerUrl(v string) *CreateTriggerHookBody {
	s.TriggerUrl = &v
	return s
}

type CreateTriggerHookRequest struct {
	Headers map[string]string      `json:"headers" xml:"headers"`
	Body    *CreateTriggerHookBody `json:"body" xml:"body"`
}

func (s CreateTriggerHookRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateTriggerHookRequest) GoString() string {
	return s.String()
}

func (s *CreateTriggerHookRequest) SetHeaders(v map[string]string) *CreateTriggerHookRequest {
	s.Headers = v
	return s
}

func (s *CreateTriggerHookRequest) SetBody(v *CreateTriggerHookBody) *CreateTriggerHookRequest {
	s.Body = v
	return s
}

type CreateTriggerHookResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s CreateTriggerHookResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateTriggerHookResponse) GoString() string {
	return s.String()
}

func (s *CreateTriggerHookResponse) SetHeaders(v map[string]string) *CreateTriggerHookResponse {
	s.Headers = v
	return s
}

type UpgradeClusterAddonsBody struct {
	ComponentName *string `json:"component_name" xml:"component_name"`
	Version       *string `json:"version" xml:"version"`
}

func (s UpgradeClusterAddonsBody) String() string {
	return tea.Prettify(s)
}

func (s UpgradeClusterAddonsBody) GoString() string {
	return s.String()
}

func (s *UpgradeClusterAddonsBody) SetComponentName(v string) *UpgradeClusterAddonsBody {
	s.ComponentName = &v
	return s
}

func (s *UpgradeClusterAddonsBody) SetVersion(v string) *UpgradeClusterAddonsBody {
	s.Version = &v
	return s
}

type UpgradeClusterAddonsRequest struct {
	Headers map[string]string         `json:"headers" xml:"headers"`
	Body    *UpgradeClusterAddonsBody `json:"body" xml:"body"`
}

func (s UpgradeClusterAddonsRequest) String() string {
	return tea.Prettify(s)
}

func (s UpgradeClusterAddonsRequest) GoString() string {
	return s.String()
}

func (s *UpgradeClusterAddonsRequest) SetHeaders(v map[string]string) *UpgradeClusterAddonsRequest {
	s.Headers = v
	return s
}

func (s *UpgradeClusterAddonsRequest) SetBody(v *UpgradeClusterAddonsBody) *UpgradeClusterAddonsRequest {
	s.Body = v
	return s
}

type UpgradeClusterAddonsResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s UpgradeClusterAddonsResponse) String() string {
	return tea.Prettify(s)
}

func (s UpgradeClusterAddonsResponse) GoString() string {
	return s.String()
}

func (s *UpgradeClusterAddonsResponse) SetHeaders(v map[string]string) *UpgradeClusterAddonsResponse {
	s.Headers = v
	return s
}

type DescribeClusterAddonsVersionRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s DescribeClusterAddonsVersionRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAddonsVersionRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterAddonsVersionRequest) SetHeaders(v map[string]string) *DescribeClusterAddonsVersionRequest {
	s.Headers = v
	return s
}

type DescribeClusterAddonsVersionResponseBody struct {
	Template      *string `json:"template" xml:"template" require:"true"`
	NextVersion   *string `json:"next_version" xml:"next_version" require:"true"`
	CanUpgrade    *bool   `json:"can_upgrade" xml:"can_upgrade" require:"true"`
	ComponentName *string `json:"component_name" xml:"component_name" require:"true"`
	Version       *string `json:"version" xml:"version" require:"true"`
	Changed       *string `json:"changed" xml:"changed" require:"true"`
	Message       *string `json:"message" xml:"message" require:"true"`
	Required      *bool   `json:"required" xml:"required" require:"true"`
}

func (s DescribeClusterAddonsVersionResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAddonsVersionResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeClusterAddonsVersionResponseBody) SetTemplate(v string) *DescribeClusterAddonsVersionResponseBody {
	s.Template = &v
	return s
}

func (s *DescribeClusterAddonsVersionResponseBody) SetNextVersion(v string) *DescribeClusterAddonsVersionResponseBody {
	s.NextVersion = &v
	return s
}

func (s *DescribeClusterAddonsVersionResponseBody) SetCanUpgrade(v bool) *DescribeClusterAddonsVersionResponseBody {
	s.CanUpgrade = &v
	return s
}

func (s *DescribeClusterAddonsVersionResponseBody) SetComponentName(v string) *DescribeClusterAddonsVersionResponseBody {
	s.ComponentName = &v
	return s
}

func (s *DescribeClusterAddonsVersionResponseBody) SetVersion(v string) *DescribeClusterAddonsVersionResponseBody {
	s.Version = &v
	return s
}

func (s *DescribeClusterAddonsVersionResponseBody) SetChanged(v string) *DescribeClusterAddonsVersionResponseBody {
	s.Changed = &v
	return s
}

func (s *DescribeClusterAddonsVersionResponseBody) SetMessage(v string) *DescribeClusterAddonsVersionResponseBody {
	s.Message = &v
	return s
}

func (s *DescribeClusterAddonsVersionResponseBody) SetRequired(v bool) *DescribeClusterAddonsVersionResponseBody {
	s.Required = &v
	return s
}

type DescribeClusterAddonsVersionResponse struct {
	Headers map[string]string                         `json:"headers" xml:"headers" require:"true"`
	Body    *DescribeClusterAddonsVersionResponseBody `json:"body" xml:"body" require:"true"`
}

func (s DescribeClusterAddonsVersionResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAddonsVersionResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterAddonsVersionResponse) SetHeaders(v map[string]string) *DescribeClusterAddonsVersionResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterAddonsVersionResponse) SetBody(v *DescribeClusterAddonsVersionResponseBody) *DescribeClusterAddonsVersionResponse {
	s.Body = v
	return s
}

type DescribeClusterAddonUpgradeStatusRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s DescribeClusterAddonUpgradeStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAddonUpgradeStatusRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterAddonUpgradeStatusRequest) SetHeaders(v map[string]string) *DescribeClusterAddonUpgradeStatusRequest {
	s.Headers = v
	return s
}

type DescribeClusterAddonUpgradeStatusResponseBody struct {
	Template   *string                                                 `json:"template" xml:"template" require:"true"`
	CanUpgrade *bool                                                   `json:"can_upgrade" xml:"can_upgrade" require:"true"`
	AddonInfo  *DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo `json:"addon_info" xml:"addon_info" require:"true" type:"Struct"`
}

func (s DescribeClusterAddonUpgradeStatusResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAddonUpgradeStatusResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeClusterAddonUpgradeStatusResponseBody) SetTemplate(v string) *DescribeClusterAddonUpgradeStatusResponseBody {
	s.Template = &v
	return s
}

func (s *DescribeClusterAddonUpgradeStatusResponseBody) SetCanUpgrade(v bool) *DescribeClusterAddonUpgradeStatusResponseBody {
	s.CanUpgrade = &v
	return s
}

func (s *DescribeClusterAddonUpgradeStatusResponseBody) SetAddonInfo(v *DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo) *DescribeClusterAddonUpgradeStatusResponseBody {
	s.AddonInfo = v
	return s
}

type DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo struct {
	Message       *string `json:"message" xml:"message" require:"true"`
	Category      *string `json:"category" xml:"category" require:"true"`
	Yaml          *string `json:"yaml" xml:"yaml" require:"true"`
	ComponentName *string `json:"component_name" xml:"component_name" require:"true"`
	Version       *string `json:"version" xml:"version" require:"true"`
}

func (s DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo) GoString() string {
	return s.String()
}

func (s *DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo) SetMessage(v string) *DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo {
	s.Message = &v
	return s
}

func (s *DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo) SetCategory(v string) *DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo {
	s.Category = &v
	return s
}

func (s *DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo) SetYaml(v string) *DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo {
	s.Yaml = &v
	return s
}

func (s *DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo) SetComponentName(v string) *DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo {
	s.ComponentName = &v
	return s
}

func (s *DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo) SetVersion(v string) *DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo {
	s.Version = &v
	return s
}

type DescribeClusterAddonUpgradeStatusResponse struct {
	Headers map[string]string                              `json:"headers" xml:"headers" require:"true"`
	Body    *DescribeClusterAddonUpgradeStatusResponseBody `json:"body" xml:"body" require:"true"`
}

func (s DescribeClusterAddonUpgradeStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAddonUpgradeStatusResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterAddonUpgradeStatusResponse) SetHeaders(v map[string]string) *DescribeClusterAddonUpgradeStatusResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterAddonUpgradeStatusResponse) SetBody(v *DescribeClusterAddonUpgradeStatusResponseBody) *DescribeClusterAddonUpgradeStatusResponse {
	s.Body = v
	return s
}

type DeleteClusterNodesBody struct {
	ReleaseNode *string   `json:"release_node" xml:"release_node"`
	Nodes       []*string `json:"nodes" xml:"nodes" require:"true" type:"Repeated"`
}

func (s DeleteClusterNodesBody) String() string {
	return tea.Prettify(s)
}

func (s DeleteClusterNodesBody) GoString() string {
	return s.String()
}

func (s *DeleteClusterNodesBody) SetReleaseNode(v string) *DeleteClusterNodesBody {
	s.ReleaseNode = &v
	return s
}

func (s *DeleteClusterNodesBody) SetNodes(v []*string) *DeleteClusterNodesBody {
	s.Nodes = v
	return s
}

type DeleteClusterNodesRequest struct {
	Headers map[string]string       `json:"headers" xml:"headers"`
	Body    *DeleteClusterNodesBody `json:"body" xml:"body" require:"true"`
}

func (s DeleteClusterNodesRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteClusterNodesRequest) GoString() string {
	return s.String()
}

func (s *DeleteClusterNodesRequest) SetHeaders(v map[string]string) *DeleteClusterNodesRequest {
	s.Headers = v
	return s
}

func (s *DeleteClusterNodesRequest) SetBody(v *DeleteClusterNodesBody) *DeleteClusterNodesRequest {
	s.Body = v
	return s
}

type DeleteClusterNodesResponseBody struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteClusterNodesResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DeleteClusterNodesResponseBody) GoString() string {
	return s.String()
}

func (s *DeleteClusterNodesResponseBody) SetRequestId(v string) *DeleteClusterNodesResponseBody {
	s.RequestId = &v
	return s
}

type DeleteClusterNodesResponse struct {
	Headers map[string]string               `json:"headers" xml:"headers" require:"true"`
	Body    *DeleteClusterNodesResponseBody `json:"body" xml:"body" require:"true"`
}

func (s DeleteClusterNodesResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteClusterNodesResponse) GoString() string {
	return s.String()
}

func (s *DeleteClusterNodesResponse) SetHeaders(v map[string]string) *DeleteClusterNodesResponse {
	s.Headers = v
	return s
}

func (s *DeleteClusterNodesResponse) SetBody(v *DeleteClusterNodesResponseBody) *DeleteClusterNodesResponse {
	s.Body = v
	return s
}

type DeleteTemplateRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s DeleteTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteTemplateRequest) GoString() string {
	return s.String()
}

func (s *DeleteTemplateRequest) SetHeaders(v map[string]string) *DeleteTemplateRequest {
	s.Headers = v
	return s
}

type DeleteTemplateResponse struct {
	Headers map[string]string `json:"headers" xml:"headers" require:"true"`
}

func (s DeleteTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteTemplateResponse) GoString() string {
	return s.String()
}

func (s *DeleteTemplateResponse) SetHeaders(v map[string]string) *DeleteTemplateResponse {
	s.Headers = v
	return s
}

type DescribeClusterUserKubeconfigQuery struct {
	PrivateIpAddress *bool `json:"PrivateIpAddress" xml:"PrivateIpAddress"`
}

func (s DescribeClusterUserKubeconfigQuery) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterUserKubeconfigQuery) GoString() string {
	return s.String()
}

func (s *DescribeClusterUserKubeconfigQuery) SetPrivateIpAddress(v bool) *DescribeClusterUserKubeconfigQuery {
	s.PrivateIpAddress = &v
	return s
}

type DescribeClusterUserKubeconfigRequest struct {
	Headers map[string]string                   `json:"headers" xml:"headers"`
	Query   *DescribeClusterUserKubeconfigQuery `json:"query" xml:"query"`
}

func (s DescribeClusterUserKubeconfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterUserKubeconfigRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterUserKubeconfigRequest) SetHeaders(v map[string]string) *DescribeClusterUserKubeconfigRequest {
	s.Headers = v
	return s
}

func (s *DescribeClusterUserKubeconfigRequest) SetQuery(v *DescribeClusterUserKubeconfigQuery) *DescribeClusterUserKubeconfigRequest {
	s.Query = v
	return s
}

type DescribeClusterUserKubeconfigResponseBody struct {
	Config *string `json:"config" xml:"config" require:"true"`
}

func (s DescribeClusterUserKubeconfigResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterUserKubeconfigResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeClusterUserKubeconfigResponseBody) SetConfig(v string) *DescribeClusterUserKubeconfigResponseBody {
	s.Config = &v
	return s
}

type DescribeClusterUserKubeconfigResponse struct {
	Headers map[string]string                          `json:"headers" xml:"headers" require:"true"`
	Body    *DescribeClusterUserKubeconfigResponseBody `json:"body" xml:"body" require:"true"`
}

func (s DescribeClusterUserKubeconfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterUserKubeconfigResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterUserKubeconfigResponse) SetHeaders(v map[string]string) *DescribeClusterUserKubeconfigResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterUserKubeconfigResponse) SetBody(v *DescribeClusterUserKubeconfigResponseBody) *DescribeClusterUserKubeconfigResponse {
	s.Body = v
	return s
}

type DescribeClusterNodesQuery struct {
	PageSize   *string `json:"pageSize" xml:"pageSize"`
	PageNumber *string `json:"pageNumber" xml:"pageNumber"`
	NodepoolId *string `json:"nodepool_id" xml:"nodepool_id"`
	State      *string `json:"state" xml:"state"`
}

func (s DescribeClusterNodesQuery) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterNodesQuery) GoString() string {
	return s.String()
}

func (s *DescribeClusterNodesQuery) SetPageSize(v string) *DescribeClusterNodesQuery {
	s.PageSize = &v
	return s
}

func (s *DescribeClusterNodesQuery) SetPageNumber(v string) *DescribeClusterNodesQuery {
	s.PageNumber = &v
	return s
}

func (s *DescribeClusterNodesQuery) SetNodepoolId(v string) *DescribeClusterNodesQuery {
	s.NodepoolId = &v
	return s
}

func (s *DescribeClusterNodesQuery) SetState(v string) *DescribeClusterNodesQuery {
	s.State = &v
	return s
}

type DescribeClusterNodesRequest struct {
	Headers map[string]string          `json:"headers" xml:"headers"`
	Query   *DescribeClusterNodesQuery `json:"query" xml:"query"`
}

func (s DescribeClusterNodesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterNodesRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterNodesRequest) SetHeaders(v map[string]string) *DescribeClusterNodesRequest {
	s.Headers = v
	return s
}

func (s *DescribeClusterNodesRequest) SetQuery(v *DescribeClusterNodesQuery) *DescribeClusterNodesRequest {
	s.Query = v
	return s
}

type DescribeClusterNodesResponseBody struct {
	Nodes *DescribeClusterNodesResponseBodyNodes `json:"nodes" xml:"nodes" require:"true" type:"Struct"`
	Page  *DescribeClusterNodesResponseBodyPage  `json:"page" xml:"page" require:"true" type:"Struct"`
}

func (s DescribeClusterNodesResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterNodesResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeClusterNodesResponseBody) SetNodes(v *DescribeClusterNodesResponseBodyNodes) *DescribeClusterNodesResponseBody {
	s.Nodes = v
	return s
}

func (s *DescribeClusterNodesResponseBody) SetPage(v *DescribeClusterNodesResponseBodyPage) *DescribeClusterNodesResponseBody {
	s.Page = v
	return s
}

type DescribeClusterNodesResponseBodyNodes struct {
	Nodes []*DescribeClusterNodesResponseBodyNodesNodes `json:"nodes" xml:"nodes" require:"true" type:"Repeated"`
}

func (s DescribeClusterNodesResponseBodyNodes) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterNodesResponseBodyNodes) GoString() string {
	return s.String()
}

func (s *DescribeClusterNodesResponseBodyNodes) SetNodes(v []*DescribeClusterNodesResponseBodyNodesNodes) *DescribeClusterNodesResponseBodyNodes {
	s.Nodes = v
	return s
}

type DescribeClusterNodesResponseBodyNodesNodes struct {
	InstanceId         *string                                              `json:"instance_id" xml:"instance_id" require:"true"`
	InstanceRole       *string                                              `json:"instance_role" xml:"instance_role" require:"true"`
	InstanceName       *string                                              `json:"instance_name" xml:"instance_name" require:"true"`
	HostName           *string                                              `json:"host_name" xml:"host_name" require:"true"`
	NodeName           *string                                              `json:"node_name" xml:"node_name" require:"true"`
	InstanceType       *string                                              `json:"instance_type" xml:"instance_type" require:"true"`
	InstanceChargeType *string                                              `json:"instance_charge_type" xml:"instance_charge_type" require:"true"`
	ImageId            *string                                              `json:"image_id" xml:"image_id" require:"true"`
	InstanceTypeFamily *string                                              `json:"instance_type_family" xml:"instance_type_family" require:"true"`
	DockerVersion      *string                                              `json:"docker_version" xml:"docker_version" require:"true"`
	AgentVersion       *string                                              `json:"agent_version" xml:"agent_version" require:"true"`
	IsLeader           *bool                                                `json:"is_leader" xml:"is_leader" require:"true"`
	Containers         *int                                                 `json:"containers" xml:"containers" require:"true"`
	IsAliyunNode       *bool                                                `json:"is_aliyun_node" xml:"is_aliyun_node" require:"true"`
	State              *string                                              `json:"state" xml:"state" require:"true"`
	NodepoolId         *string                                              `json:"nodepool_id" xml:"nodepool_id" require:"true"`
	ErrorMessage       *string                                              `json:"error_message" xml:"error_message" require:"true"`
	IpAddress          *DescribeClusterNodesResponseBodyNodesNodesIpAddress `json:"ip_address" xml:"ip_address" require:"true" type:"Struct"`
}

func (s DescribeClusterNodesResponseBodyNodesNodes) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterNodesResponseBodyNodesNodes) GoString() string {
	return s.String()
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetInstanceId(v string) *DescribeClusterNodesResponseBodyNodesNodes {
	s.InstanceId = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetInstanceRole(v string) *DescribeClusterNodesResponseBodyNodesNodes {
	s.InstanceRole = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetInstanceName(v string) *DescribeClusterNodesResponseBodyNodesNodes {
	s.InstanceName = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetHostName(v string) *DescribeClusterNodesResponseBodyNodesNodes {
	s.HostName = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetNodeName(v string) *DescribeClusterNodesResponseBodyNodesNodes {
	s.NodeName = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetInstanceType(v string) *DescribeClusterNodesResponseBodyNodesNodes {
	s.InstanceType = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetInstanceChargeType(v string) *DescribeClusterNodesResponseBodyNodesNodes {
	s.InstanceChargeType = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetImageId(v string) *DescribeClusterNodesResponseBodyNodesNodes {
	s.ImageId = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetInstanceTypeFamily(v string) *DescribeClusterNodesResponseBodyNodesNodes {
	s.InstanceTypeFamily = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetDockerVersion(v string) *DescribeClusterNodesResponseBodyNodesNodes {
	s.DockerVersion = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetAgentVersion(v string) *DescribeClusterNodesResponseBodyNodesNodes {
	s.AgentVersion = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetIsLeader(v bool) *DescribeClusterNodesResponseBodyNodesNodes {
	s.IsLeader = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetContainers(v int) *DescribeClusterNodesResponseBodyNodesNodes {
	s.Containers = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetIsAliyunNode(v bool) *DescribeClusterNodesResponseBodyNodesNodes {
	s.IsAliyunNode = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetState(v string) *DescribeClusterNodesResponseBodyNodesNodes {
	s.State = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetNodepoolId(v string) *DescribeClusterNodesResponseBodyNodesNodes {
	s.NodepoolId = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetErrorMessage(v string) *DescribeClusterNodesResponseBodyNodesNodes {
	s.ErrorMessage = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodesNodes) SetIpAddress(v *DescribeClusterNodesResponseBodyNodesNodesIpAddress) *DescribeClusterNodesResponseBodyNodesNodes {
	s.IpAddress = v
	return s
}

type DescribeClusterNodesResponseBodyNodesNodesIpAddress struct {
	Ip []*string `json:"ip" xml:"ip" require:"true" type:"Repeated"`
}

func (s DescribeClusterNodesResponseBodyNodesNodesIpAddress) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterNodesResponseBodyNodesNodesIpAddress) GoString() string {
	return s.String()
}

func (s *DescribeClusterNodesResponseBodyNodesNodesIpAddress) SetIp(v []*string) *DescribeClusterNodesResponseBodyNodesNodesIpAddress {
	s.Ip = v
	return s
}

type DescribeClusterNodesResponseBodyPage struct {
	TotalCount *int `json:"total_count" xml:"total_count" require:"true"`
	PageNumber *int `json:"page_number" xml:"page_number" require:"true"`
	PageSize   *int `json:"page_size" xml:"page_size" require:"true"`
}

func (s DescribeClusterNodesResponseBodyPage) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterNodesResponseBodyPage) GoString() string {
	return s.String()
}

func (s *DescribeClusterNodesResponseBodyPage) SetTotalCount(v int) *DescribeClusterNodesResponseBodyPage {
	s.TotalCount = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyPage) SetPageNumber(v int) *DescribeClusterNodesResponseBodyPage {
	s.PageNumber = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyPage) SetPageSize(v int) *DescribeClusterNodesResponseBodyPage {
	s.PageSize = &v
	return s
}

type DescribeClusterNodesResponse struct {
	Headers map[string]string                 `json:"headers" xml:"headers" require:"true"`
	Body    *DescribeClusterNodesResponseBody `json:"body" xml:"body" require:"true"`
}

func (s DescribeClusterNodesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterNodesResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterNodesResponse) SetHeaders(v map[string]string) *DescribeClusterNodesResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterNodesResponse) SetBody(v *DescribeClusterNodesResponseBody) *DescribeClusterNodesResponse {
	s.Body = v
	return s
}

type DescribeClusterLogsRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s DescribeClusterLogsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterLogsRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterLogsRequest) SetHeaders(v map[string]string) *DescribeClusterLogsRequest {
	s.Headers = v
	return s
}

type DescribeClusterLogsResponseBody struct {
	ClusterId  *string `json:"cluster_id" xml:"cluster_id" require:"true"`
	ClusterLog *string `json:"cluster_log" xml:"cluster_log" require:"true"`
	LogLevel   *string `json:"log_level" xml:"log_level" require:"true"`
	Created    *string `json:"created" xml:"created" require:"true"`
}

func (s DescribeClusterLogsResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterLogsResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeClusterLogsResponseBody) SetClusterId(v string) *DescribeClusterLogsResponseBody {
	s.ClusterId = &v
	return s
}

func (s *DescribeClusterLogsResponseBody) SetClusterLog(v string) *DescribeClusterLogsResponseBody {
	s.ClusterLog = &v
	return s
}

func (s *DescribeClusterLogsResponseBody) SetLogLevel(v string) *DescribeClusterLogsResponseBody {
	s.LogLevel = &v
	return s
}

func (s *DescribeClusterLogsResponseBody) SetCreated(v string) *DescribeClusterLogsResponseBody {
	s.Created = &v
	return s
}

type DescribeClusterLogsResponse struct {
	Headers map[string]string                `json:"headers" xml:"headers" require:"true"`
	Body    *DescribeClusterLogsResponseBody `json:"body" xml:"body" require:"true"`
}

func (s DescribeClusterLogsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterLogsResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterLogsResponse) SetHeaders(v map[string]string) *DescribeClusterLogsResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterLogsResponse) SetBody(v *DescribeClusterLogsResponseBody) *DescribeClusterLogsResponse {
	s.Body = v
	return s
}

type AttachInstancesBody struct {
	FormatDisk       *bool                      `json:"format_disk" xml:"format_disk"`
	KeepInstanceName *bool                      `json:"keep_instance_name" xml:"keep_instance_name"`
	CpuPolicy        *string                    `json:"cpu_policy" xml:"cpu_policy"`
	KeyPair          *string                    `json:"key_pair" xml:"key_pair" require:"true"`
	Password         *string                    `json:"password" xml:"password" require:"true"`
	Tags             []*AttachInstancesBodyTags `json:"tags" xml:"tags" require:"true" type:"Repeated"`
	Instances        []*string                  `json:"instances" xml:"instances" require:"true" type:"Repeated"`
}

func (s AttachInstancesBody) String() string {
	return tea.Prettify(s)
}

func (s AttachInstancesBody) GoString() string {
	return s.String()
}

func (s *AttachInstancesBody) SetFormatDisk(v bool) *AttachInstancesBody {
	s.FormatDisk = &v
	return s
}

func (s *AttachInstancesBody) SetKeepInstanceName(v bool) *AttachInstancesBody {
	s.KeepInstanceName = &v
	return s
}

func (s *AttachInstancesBody) SetCpuPolicy(v string) *AttachInstancesBody {
	s.CpuPolicy = &v
	return s
}

func (s *AttachInstancesBody) SetKeyPair(v string) *AttachInstancesBody {
	s.KeyPair = &v
	return s
}

func (s *AttachInstancesBody) SetPassword(v string) *AttachInstancesBody {
	s.Password = &v
	return s
}

func (s *AttachInstancesBody) SetTags(v []*AttachInstancesBodyTags) *AttachInstancesBody {
	s.Tags = v
	return s
}

func (s *AttachInstancesBody) SetInstances(v []*string) *AttachInstancesBody {
	s.Instances = v
	return s
}

type AttachInstancesBodyTags struct {
	Key   *string `json:"key" xml:"key"`
	Value *string `json:"value" xml:"value"`
}

func (s AttachInstancesBodyTags) String() string {
	return tea.Prettify(s)
}

func (s AttachInstancesBodyTags) GoString() string {
	return s.String()
}

func (s *AttachInstancesBodyTags) SetKey(v string) *AttachInstancesBodyTags {
	s.Key = &v
	return s
}

func (s *AttachInstancesBodyTags) SetValue(v string) *AttachInstancesBodyTags {
	s.Value = &v
	return s
}

type AttachInstancesRequest struct {
	Headers map[string]string    `json:"headers" xml:"headers"`
	Body    *AttachInstancesBody `json:"body" xml:"body" require:"true"`
}

func (s AttachInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s AttachInstancesRequest) GoString() string {
	return s.String()
}

func (s *AttachInstancesRequest) SetHeaders(v map[string]string) *AttachInstancesRequest {
	s.Headers = v
	return s
}

func (s *AttachInstancesRequest) SetBody(v *AttachInstancesBody) *AttachInstancesRequest {
	s.Body = v
	return s
}

type AttachInstancesResponseBody struct {
	TaskId *string                            `json:"task_id" xml:"task_id" require:"true"`
	List   []*AttachInstancesResponseBodyList `json:"list" xml:"list" require:"true" type:"Repeated"`
}

func (s AttachInstancesResponseBody) String() string {
	return tea.Prettify(s)
}

func (s AttachInstancesResponseBody) GoString() string {
	return s.String()
}

func (s *AttachInstancesResponseBody) SetTaskId(v string) *AttachInstancesResponseBody {
	s.TaskId = &v
	return s
}

func (s *AttachInstancesResponseBody) SetList(v []*AttachInstancesResponseBodyList) *AttachInstancesResponseBody {
	s.List = v
	return s
}

type AttachInstancesResponseBodyList struct {
	Code       *string `json:"code" xml:"code" require:"true"`
	InstanceId *string `json:"instanceId" xml:"instanceId" require:"true"`
	Message    *string `json:"message" xml:"message" require:"true"`
}

func (s AttachInstancesResponseBodyList) String() string {
	return tea.Prettify(s)
}

func (s AttachInstancesResponseBodyList) GoString() string {
	return s.String()
}

func (s *AttachInstancesResponseBodyList) SetCode(v string) *AttachInstancesResponseBodyList {
	s.Code = &v
	return s
}

func (s *AttachInstancesResponseBodyList) SetInstanceId(v string) *AttachInstancesResponseBodyList {
	s.InstanceId = &v
	return s
}

func (s *AttachInstancesResponseBodyList) SetMessage(v string) *AttachInstancesResponseBodyList {
	s.Message = &v
	return s
}

type AttachInstancesResponse struct {
	Headers map[string]string            `json:"headers" xml:"headers" require:"true"`
	Body    *AttachInstancesResponseBody `json:"body" xml:"body" require:"true"`
}

func (s AttachInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s AttachInstancesResponse) GoString() string {
	return s.String()
}

func (s *AttachInstancesResponse) SetHeaders(v map[string]string) *AttachInstancesResponse {
	s.Headers = v
	return s
}

func (s *AttachInstancesResponse) SetBody(v *AttachInstancesResponseBody) *AttachInstancesResponse {
	s.Body = v
	return s
}

type DescribeTemplatesQuery struct {
	TemplateType *string `json:"template_type" xml:"template_type"`
}

func (s DescribeTemplatesQuery) String() string {
	return tea.Prettify(s)
}

func (s DescribeTemplatesQuery) GoString() string {
	return s.String()
}

func (s *DescribeTemplatesQuery) SetTemplateType(v string) *DescribeTemplatesQuery {
	s.TemplateType = &v
	return s
}

type DescribeTemplatesRequest struct {
	Headers map[string]string       `json:"headers" xml:"headers"`
	Query   *DescribeTemplatesQuery `json:"query" xml:"query"`
}

func (s DescribeTemplatesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeTemplatesRequest) GoString() string {
	return s.String()
}

func (s *DescribeTemplatesRequest) SetHeaders(v map[string]string) *DescribeTemplatesRequest {
	s.Headers = v
	return s
}

func (s *DescribeTemplatesRequest) SetQuery(v *DescribeTemplatesQuery) *DescribeTemplatesRequest {
	s.Query = v
	return s
}

type DescribeTemplatesResponseBody struct {
	Template     *string `json:"template" xml:"template" require:"true"`
	Acl          *string `json:"acl" xml:"acl" require:"true"`
	Name         *string `json:"name" xml:"name" require:"true"`
	Tags         *string `json:"tags" xml:"tags" require:"true"`
	TemplateType *string `json:"template_type" xml:"template_type" require:"true"`
	Description  *string `json:"description" xml:"description" require:"true"`
}

func (s DescribeTemplatesResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeTemplatesResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeTemplatesResponseBody) SetTemplate(v string) *DescribeTemplatesResponseBody {
	s.Template = &v
	return s
}

func (s *DescribeTemplatesResponseBody) SetAcl(v string) *DescribeTemplatesResponseBody {
	s.Acl = &v
	return s
}

func (s *DescribeTemplatesResponseBody) SetName(v string) *DescribeTemplatesResponseBody {
	s.Name = &v
	return s
}

func (s *DescribeTemplatesResponseBody) SetTags(v string) *DescribeTemplatesResponseBody {
	s.Tags = &v
	return s
}

func (s *DescribeTemplatesResponseBody) SetTemplateType(v string) *DescribeTemplatesResponseBody {
	s.TemplateType = &v
	return s
}

func (s *DescribeTemplatesResponseBody) SetDescription(v string) *DescribeTemplatesResponseBody {
	s.Description = &v
	return s
}

type DescribeTemplatesResponse struct {
	Headers map[string]string              `json:"headers" xml:"headers" require:"true"`
	Body    *DescribeTemplatesResponseBody `json:"body" xml:"body" require:"true"`
}

func (s DescribeTemplatesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeTemplatesResponse) GoString() string {
	return s.String()
}

func (s *DescribeTemplatesResponse) SetHeaders(v map[string]string) *DescribeTemplatesResponse {
	s.Headers = v
	return s
}

func (s *DescribeTemplatesResponse) SetBody(v *DescribeTemplatesResponseBody) *DescribeTemplatesResponse {
	s.Body = v
	return s
}

type CreateTemplateBody struct {
	Name         *string `json:"name" xml:"name" require:"true"`
	Template     *string `json:"template" xml:"template" require:"true"`
	Tags         *string `json:"tags" xml:"tags"`
	TemplateType *string `json:"template_type" xml:"template_type"`
}

func (s CreateTemplateBody) String() string {
	return tea.Prettify(s)
}

func (s CreateTemplateBody) GoString() string {
	return s.String()
}

func (s *CreateTemplateBody) SetName(v string) *CreateTemplateBody {
	s.Name = &v
	return s
}

func (s *CreateTemplateBody) SetTemplate(v string) *CreateTemplateBody {
	s.Template = &v
	return s
}

func (s *CreateTemplateBody) SetTags(v string) *CreateTemplateBody {
	s.Tags = &v
	return s
}

func (s *CreateTemplateBody) SetTemplateType(v string) *CreateTemplateBody {
	s.TemplateType = &v
	return s
}

type CreateTemplateRequest struct {
	Headers map[string]string   `json:"headers" xml:"headers"`
	Body    *CreateTemplateBody `json:"body" xml:"body" require:"true"`
}

func (s CreateTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateTemplateRequest) GoString() string {
	return s.String()
}

func (s *CreateTemplateRequest) SetHeaders(v map[string]string) *CreateTemplateRequest {
	s.Headers = v
	return s
}

func (s *CreateTemplateRequest) SetBody(v *CreateTemplateBody) *CreateTemplateRequest {
	s.Body = v
	return s
}

type CreateTemplateResponseBody struct {
	TemplateId *string `json:"template_id" xml:"template_id" require:"true"`
}

func (s CreateTemplateResponseBody) String() string {
	return tea.Prettify(s)
}

func (s CreateTemplateResponseBody) GoString() string {
	return s.String()
}

func (s *CreateTemplateResponseBody) SetTemplateId(v string) *CreateTemplateResponseBody {
	s.TemplateId = &v
	return s
}

type CreateTemplateResponse struct {
	Headers map[string]string           `json:"headers" xml:"headers" require:"true"`
	Body    *CreateTemplateResponseBody `json:"body" xml:"body" require:"true"`
}

func (s CreateTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateTemplateResponse) GoString() string {
	return s.String()
}

func (s *CreateTemplateResponse) SetHeaders(v map[string]string) *CreateTemplateResponse {
	s.Headers = v
	return s
}

func (s *CreateTemplateResponse) SetBody(v *CreateTemplateResponseBody) *CreateTemplateResponse {
	s.Body = v
	return s
}

type CreateClusterBody struct {
	ClusterType              *string                             `json:"cluster_type" xml:"cluster_type" require:"true"`
	Name                     *string                             `json:"name" xml:"name" require:"true"`
	RegionId                 *string                             `json:"region_id" xml:"region_id" require:"true"`
	KubernetesVersion        *string                             `json:"kubernetes_version" xml:"kubernetes_version"`
	SnatEntry                *bool                               `json:"snat_entry" xml:"snat_entry" require:"true"`
	EndpointPublicAccess     *bool                               `json:"endpoint_public_access" xml:"endpoint_public_access"`
	SshFlags                 *bool                               `json:"ssh_flags" xml:"ssh_flags"`
	CloudMonitorFlags        *bool                               `json:"cloud_monitor_flags" xml:"cloud_monitor_flags"`
	DeletionProtection       *bool                               `json:"deletion_protection" xml:"deletion_protection"`
	NodeCidrMask             *string                             `json:"node_cidr_mask" xml:"node_cidr_mask"`
	ProxyMode                *string                             `json:"proxy_mode" xml:"proxy_mode"`
	OsType                   *string                             `json:"os_type" xml:"os_type"`
	Platform                 *string                             `json:"platform" xml:"platform"`
	NodePortRange            *string                             `json:"node_port_range" xml:"node_port_range"`
	KeyPair                  *string                             `json:"key_pair" xml:"key_pair" require:"true"`
	LoginPassword            *string                             `json:"login_password" xml:"login_password" require:"true"`
	MasterInstanceChargeType *string                             `json:"master_instance_charge_type" xml:"master_instance_charge_type"`
	WorkerInstanceChargeType *string                             `json:"worker_instance_charge_type" xml:"worker_instance_charge_type"`
	MasterPeriod             *int                                `json:"master_period" xml:"master_period"`
	WorkerPeriod             *int                                `json:"worker_period" xml:"worker_period"`
	MasterPeriodUnit         *string                             `json:"master_period_unit" xml:"master_period_unit"`
	WorkerPeriodUnit         *string                             `json:"worker_period_unit" xml:"worker_period_unit"`
	MasterAutoRenew          *bool                               `json:"master_auto_renew" xml:"master_auto_renew"`
	MasterAutoRenewPeriod    *int                                `json:"master_auto_renew_period" xml:"master_auto_renew_period"`
	WorkerAutoRenew          *bool                               `json:"worker_auto_renew" xml:"worker_auto_renew"`
	WorkerAutoRenewPeriod    *int                                `json:"worker_auto_renew_period" xml:"worker_auto_renew_period"`
	CpuPolicy                *string                             `json:"cpu_policy" xml:"cpu_policy"`
	MasterCount              *int                                `json:"master_count" xml:"master_count"`
	MasterSystemDiskCategory *string                             `json:"master_system_disk_category" xml:"master_system_disk_category" require:"true"`
	MasterSystemDiskSize     *int                                `json:"master_system_disk_size" xml:"master_system_disk_size" require:"true"`
	Runtime                  map[string]interface{}              `json:"runtime" xml:"runtime"`
	NumOfNodes               *int                                `json:"num_of_nodes" xml:"num_of_nodes" require:"true"`
	WorkerSystemDiskCategory *string                             `json:"worker_system_disk_category" xml:"worker_system_disk_category" require:"true"`
	WorkerSystemDiskSize     *int                                `json:"worker_system_disk_size" xml:"worker_system_disk_size" require:"true"`
	WorkerDataDisk           *bool                               `json:"worker_data_disk" xml:"worker_data_disk"`
	Vpcid                    *string                             `json:"vpcid" xml:"vpcid"`
	SecurityGroupId          *string                             `json:"security_group_id" xml:"security_group_id"`
	ContainerCidr            *string                             `json:"container_cidr" xml:"container_cidr"`
	ServiceCidr              *string                             `json:"service_cidr" xml:"service_cidr"`
	DisableRollback          *bool                               `json:"disable_rollback" xml:"disable_rollback"`
	TimeoutMins              *int                                `json:"timeout_mins" xml:"timeout_mins"`
	Tags                     []*CreateClusterBodyTags            `json:"tags" xml:"tags" require:"true" type:"Repeated"`
	Addons                   []*CreateClusterBodyAddons          `json:"addons" xml:"addons" require:"true" type:"Repeated"`
	Taints                   []*CreateClusterBodyTaints          `json:"taints" xml:"taints" require:"true" type:"Repeated"`
	WorkerDataDisks          []*CreateClusterBodyWorkerDataDisks `json:"worker_data_disks" xml:"worker_data_disks" require:"true" type:"Repeated"`
	MasterVswitchIds         []*string                           `json:"master_vswitch_ids" xml:"master_vswitch_ids" require:"true" type:"Repeated"`
	MasterInstanceTypes      []*string                           `json:"master_instance_types" xml:"master_instance_types" require:"true" type:"Repeated"`
	WorkerInstanceTypes      []*string                           `json:"worker_instance_types" xml:"worker_instance_types" require:"true" type:"Repeated"`
	WorkerVswitchIds         []*string                           `json:"worker_vswitch_ids" xml:"worker_vswitch_ids" require:"true" type:"Repeated"`
}

func (s CreateClusterBody) String() string {
	return tea.Prettify(s)
}

func (s CreateClusterBody) GoString() string {
	return s.String()
}

func (s *CreateClusterBody) SetClusterType(v string) *CreateClusterBody {
	s.ClusterType = &v
	return s
}

func (s *CreateClusterBody) SetName(v string) *CreateClusterBody {
	s.Name = &v
	return s
}

func (s *CreateClusterBody) SetRegionId(v string) *CreateClusterBody {
	s.RegionId = &v
	return s
}

func (s *CreateClusterBody) SetKubernetesVersion(v string) *CreateClusterBody {
	s.KubernetesVersion = &v
	return s
}

func (s *CreateClusterBody) SetSnatEntry(v bool) *CreateClusterBody {
	s.SnatEntry = &v
	return s
}

func (s *CreateClusterBody) SetEndpointPublicAccess(v bool) *CreateClusterBody {
	s.EndpointPublicAccess = &v
	return s
}

func (s *CreateClusterBody) SetSshFlags(v bool) *CreateClusterBody {
	s.SshFlags = &v
	return s
}

func (s *CreateClusterBody) SetCloudMonitorFlags(v bool) *CreateClusterBody {
	s.CloudMonitorFlags = &v
	return s
}

func (s *CreateClusterBody) SetDeletionProtection(v bool) *CreateClusterBody {
	s.DeletionProtection = &v
	return s
}

func (s *CreateClusterBody) SetNodeCidrMask(v string) *CreateClusterBody {
	s.NodeCidrMask = &v
	return s
}

func (s *CreateClusterBody) SetProxyMode(v string) *CreateClusterBody {
	s.ProxyMode = &v
	return s
}

func (s *CreateClusterBody) SetOsType(v string) *CreateClusterBody {
	s.OsType = &v
	return s
}

func (s *CreateClusterBody) SetPlatform(v string) *CreateClusterBody {
	s.Platform = &v
	return s
}

func (s *CreateClusterBody) SetNodePortRange(v string) *CreateClusterBody {
	s.NodePortRange = &v
	return s
}

func (s *CreateClusterBody) SetKeyPair(v string) *CreateClusterBody {
	s.KeyPair = &v
	return s
}

func (s *CreateClusterBody) SetLoginPassword(v string) *CreateClusterBody {
	s.LoginPassword = &v
	return s
}

func (s *CreateClusterBody) SetMasterInstanceChargeType(v string) *CreateClusterBody {
	s.MasterInstanceChargeType = &v
	return s
}

func (s *CreateClusterBody) SetWorkerInstanceChargeType(v string) *CreateClusterBody {
	s.WorkerInstanceChargeType = &v
	return s
}

func (s *CreateClusterBody) SetMasterPeriod(v int) *CreateClusterBody {
	s.MasterPeriod = &v
	return s
}

func (s *CreateClusterBody) SetWorkerPeriod(v int) *CreateClusterBody {
	s.WorkerPeriod = &v
	return s
}

func (s *CreateClusterBody) SetMasterPeriodUnit(v string) *CreateClusterBody {
	s.MasterPeriodUnit = &v
	return s
}

func (s *CreateClusterBody) SetWorkerPeriodUnit(v string) *CreateClusterBody {
	s.WorkerPeriodUnit = &v
	return s
}

func (s *CreateClusterBody) SetMasterAutoRenew(v bool) *CreateClusterBody {
	s.MasterAutoRenew = &v
	return s
}

func (s *CreateClusterBody) SetMasterAutoRenewPeriod(v int) *CreateClusterBody {
	s.MasterAutoRenewPeriod = &v
	return s
}

func (s *CreateClusterBody) SetWorkerAutoRenew(v bool) *CreateClusterBody {
	s.WorkerAutoRenew = &v
	return s
}

func (s *CreateClusterBody) SetWorkerAutoRenewPeriod(v int) *CreateClusterBody {
	s.WorkerAutoRenewPeriod = &v
	return s
}

func (s *CreateClusterBody) SetCpuPolicy(v string) *CreateClusterBody {
	s.CpuPolicy = &v
	return s
}

func (s *CreateClusterBody) SetMasterCount(v int) *CreateClusterBody {
	s.MasterCount = &v
	return s
}

func (s *CreateClusterBody) SetMasterSystemDiskCategory(v string) *CreateClusterBody {
	s.MasterSystemDiskCategory = &v
	return s
}

func (s *CreateClusterBody) SetMasterSystemDiskSize(v int) *CreateClusterBody {
	s.MasterSystemDiskSize = &v
	return s
}

func (s *CreateClusterBody) SetRuntime(v map[string]interface{}) *CreateClusterBody {
	s.Runtime = v
	return s
}

func (s *CreateClusterBody) SetNumOfNodes(v int) *CreateClusterBody {
	s.NumOfNodes = &v
	return s
}

func (s *CreateClusterBody) SetWorkerSystemDiskCategory(v string) *CreateClusterBody {
	s.WorkerSystemDiskCategory = &v
	return s
}

func (s *CreateClusterBody) SetWorkerSystemDiskSize(v int) *CreateClusterBody {
	s.WorkerSystemDiskSize = &v
	return s
}

func (s *CreateClusterBody) SetWorkerDataDisk(v bool) *CreateClusterBody {
	s.WorkerDataDisk = &v
	return s
}

func (s *CreateClusterBody) SetVpcid(v string) *CreateClusterBody {
	s.Vpcid = &v
	return s
}

func (s *CreateClusterBody) SetSecurityGroupId(v string) *CreateClusterBody {
	s.SecurityGroupId = &v
	return s
}

func (s *CreateClusterBody) SetContainerCidr(v string) *CreateClusterBody {
	s.ContainerCidr = &v
	return s
}

func (s *CreateClusterBody) SetServiceCidr(v string) *CreateClusterBody {
	s.ServiceCidr = &v
	return s
}

func (s *CreateClusterBody) SetDisableRollback(v bool) *CreateClusterBody {
	s.DisableRollback = &v
	return s
}

func (s *CreateClusterBody) SetTimeoutMins(v int) *CreateClusterBody {
	s.TimeoutMins = &v
	return s
}

func (s *CreateClusterBody) SetTags(v []*CreateClusterBodyTags) *CreateClusterBody {
	s.Tags = v
	return s
}

func (s *CreateClusterBody) SetAddons(v []*CreateClusterBodyAddons) *CreateClusterBody {
	s.Addons = v
	return s
}

func (s *CreateClusterBody) SetTaints(v []*CreateClusterBodyTaints) *CreateClusterBody {
	s.Taints = v
	return s
}

func (s *CreateClusterBody) SetWorkerDataDisks(v []*CreateClusterBodyWorkerDataDisks) *CreateClusterBody {
	s.WorkerDataDisks = v
	return s
}

func (s *CreateClusterBody) SetMasterVswitchIds(v []*string) *CreateClusterBody {
	s.MasterVswitchIds = v
	return s
}

func (s *CreateClusterBody) SetMasterInstanceTypes(v []*string) *CreateClusterBody {
	s.MasterInstanceTypes = v
	return s
}

func (s *CreateClusterBody) SetWorkerInstanceTypes(v []*string) *CreateClusterBody {
	s.WorkerInstanceTypes = v
	return s
}

func (s *CreateClusterBody) SetWorkerVswitchIds(v []*string) *CreateClusterBody {
	s.WorkerVswitchIds = v
	return s
}

type CreateClusterBodyTags struct {
	Key   *string `json:"key" xml:"key"`
	Value *string `json:"value" xml:"value"`
}

func (s CreateClusterBodyTags) String() string {
	return tea.Prettify(s)
}

func (s CreateClusterBodyTags) GoString() string {
	return s.String()
}

func (s *CreateClusterBodyTags) SetKey(v string) *CreateClusterBodyTags {
	s.Key = &v
	return s
}

func (s *CreateClusterBodyTags) SetValue(v string) *CreateClusterBodyTags {
	s.Value = &v
	return s
}

type CreateClusterBodyAddons struct {
	Name   *string `json:"name" xml:"name"`
	Config *string `json:"config" xml:"config"`
}

func (s CreateClusterBodyAddons) String() string {
	return tea.Prettify(s)
}

func (s CreateClusterBodyAddons) GoString() string {
	return s.String()
}

func (s *CreateClusterBodyAddons) SetName(v string) *CreateClusterBodyAddons {
	s.Name = &v
	return s
}

func (s *CreateClusterBodyAddons) SetConfig(v string) *CreateClusterBodyAddons {
	s.Config = &v
	return s
}

type CreateClusterBodyTaints struct {
	Key    *string `json:"key" xml:"key"`
	Value  *string `json:"value" xml:"value"`
	Effect *string `json:"effect" xml:"effect"`
}

func (s CreateClusterBodyTaints) String() string {
	return tea.Prettify(s)
}

func (s CreateClusterBodyTaints) GoString() string {
	return s.String()
}

func (s *CreateClusterBodyTaints) SetKey(v string) *CreateClusterBodyTaints {
	s.Key = &v
	return s
}

func (s *CreateClusterBodyTaints) SetValue(v string) *CreateClusterBodyTaints {
	s.Value = &v
	return s
}

func (s *CreateClusterBodyTaints) SetEffect(v string) *CreateClusterBodyTaints {
	s.Effect = &v
	return s
}

type CreateClusterBodyWorkerDataDisks struct {
	Category  *string `json:"category" xml:"category"`
	Size      *string `json:"size" xml:"size"`
	Encrypted *string `json:"encrypted" xml:"encrypted"`
}

func (s CreateClusterBodyWorkerDataDisks) String() string {
	return tea.Prettify(s)
}

func (s CreateClusterBodyWorkerDataDisks) GoString() string {
	return s.String()
}

func (s *CreateClusterBodyWorkerDataDisks) SetCategory(v string) *CreateClusterBodyWorkerDataDisks {
	s.Category = &v
	return s
}

func (s *CreateClusterBodyWorkerDataDisks) SetSize(v string) *CreateClusterBodyWorkerDataDisks {
	s.Size = &v
	return s
}

func (s *CreateClusterBodyWorkerDataDisks) SetEncrypted(v string) *CreateClusterBodyWorkerDataDisks {
	s.Encrypted = &v
	return s
}

type CreateClusterRequest struct {
	Headers map[string]string  `json:"headers" xml:"headers"`
	Body    *CreateClusterBody `json:"body" xml:"body" require:"true"`
}

func (s CreateClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateClusterRequest) GoString() string {
	return s.String()
}

func (s *CreateClusterRequest) SetHeaders(v map[string]string) *CreateClusterRequest {
	s.Headers = v
	return s
}

func (s *CreateClusterRequest) SetBody(v *CreateClusterBody) *CreateClusterRequest {
	s.Body = v
	return s
}

type CreateClusterResponseBody struct {
	ClusterId *string `json:"cluster_id" xml:"cluster_id" require:"true"`
	RequestId *string `json:"request_id" xml:"request_id" require:"true"`
	TaskId    *string `json:"task_id" xml:"task_id" require:"true"`
}

func (s CreateClusterResponseBody) String() string {
	return tea.Prettify(s)
}

func (s CreateClusterResponseBody) GoString() string {
	return s.String()
}

func (s *CreateClusterResponseBody) SetClusterId(v string) *CreateClusterResponseBody {
	s.ClusterId = &v
	return s
}

func (s *CreateClusterResponseBody) SetRequestId(v string) *CreateClusterResponseBody {
	s.RequestId = &v
	return s
}

func (s *CreateClusterResponseBody) SetTaskId(v string) *CreateClusterResponseBody {
	s.TaskId = &v
	return s
}

type CreateClusterResponse struct {
	Headers map[string]string          `json:"headers" xml:"headers" require:"true"`
	Body    *CreateClusterResponseBody `json:"body" xml:"body" require:"true"`
}

func (s CreateClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateClusterResponse) GoString() string {
	return s.String()
}

func (s *CreateClusterResponse) SetHeaders(v map[string]string) *CreateClusterResponse {
	s.Headers = v
	return s
}

func (s *CreateClusterResponse) SetBody(v *CreateClusterResponseBody) *CreateClusterResponse {
	s.Body = v
	return s
}

type ScaleClusterRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s ScaleClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s ScaleClusterRequest) GoString() string {
	return s.String()
}

func (s *ScaleClusterRequest) SetHeaders(v map[string]string) *ScaleClusterRequest {
	s.Headers = v
	return s
}

type ScaleClusterResponseBody struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s ScaleClusterResponseBody) String() string {
	return tea.Prettify(s)
}

func (s ScaleClusterResponseBody) GoString() string {
	return s.String()
}

func (s *ScaleClusterResponseBody) SetRequestId(v string) *ScaleClusterResponseBody {
	s.RequestId = &v
	return s
}

type ScaleClusterResponse struct {
	Headers map[string]string         `json:"headers" xml:"headers" require:"true"`
	Body    *ScaleClusterResponseBody `json:"body" xml:"body" require:"true"`
}

func (s ScaleClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s ScaleClusterResponse) GoString() string {
	return s.String()
}

func (s *ScaleClusterResponse) SetHeaders(v map[string]string) *ScaleClusterResponse {
	s.Headers = v
	return s
}

func (s *ScaleClusterResponse) SetBody(v *ScaleClusterResponseBody) *ScaleClusterResponse {
	s.Body = v
	return s
}

type DescribeClustersQuery struct {
	Name        *string `json:"name" xml:"name"`
	ClusterType *string `json:"clusterType" xml:"clusterType"`
}

func (s DescribeClustersQuery) String() string {
	return tea.Prettify(s)
}

func (s DescribeClustersQuery) GoString() string {
	return s.String()
}

func (s *DescribeClustersQuery) SetName(v string) *DescribeClustersQuery {
	s.Name = &v
	return s
}

func (s *DescribeClustersQuery) SetClusterType(v string) *DescribeClustersQuery {
	s.ClusterType = &v
	return s
}

type DescribeClustersRequest struct {
	Headers map[string]string      `json:"headers" xml:"headers"`
	Query   *DescribeClustersQuery `json:"query" xml:"query"`
}

func (s DescribeClustersRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClustersRequest) GoString() string {
	return s.String()
}

func (s *DescribeClustersRequest) SetHeaders(v map[string]string) *DescribeClustersRequest {
	s.Headers = v
	return s
}

func (s *DescribeClustersRequest) SetQuery(v *DescribeClustersQuery) *DescribeClustersRequest {
	s.Query = v
	return s
}

type DescribeClustersResponseBody struct {
	Name               *string                             `json:"name" xml:"name" require:"true"`
	ClusterId          *string                             `json:"cluster_id" xml:"cluster_id" require:"true"`
	RegionId           *string                             `json:"region_id" xml:"region_id" require:"true"`
	State              *string                             `json:"state" xml:"state" require:"true"`
	ClusterType        *string                             `json:"cluster_type" xml:"cluster_type" require:"true"`
	CurrentVersion     *string                             `json:"current_version" xml:"current_version" require:"true"`
	MetaData           *string                             `json:"meta_data" xml:"meta_data" require:"true"`
	ResourceGroupId    *string                             `json:"resource_group_id" xml:"resource_group_id" require:"true"`
	VpcId              *string                             `json:"vpc_id" xml:"vpc_id" require:"true"`
	VswitchId          *string                             `json:"vswitch_id" xml:"vswitch_id" require:"true"`
	VswitchCidr        *string                             `json:"vswitch_cidr" xml:"vswitch_cidr" require:"true"`
	DataDiskSize       *int                                `json:"data_disk_size" xml:"data_disk_size" require:"true"`
	DataDiskCategory   *string                             `json:"data_disk_category" xml:"data_disk_category" require:"true"`
	SecurityGroupId    *string                             `json:"security_group_id" xml:"security_group_id" require:"true"`
	ZoneId             *string                             `json:"zone_id" xml:"zone_id" require:"true"`
	NetworkMode        *string                             `json:"network_mode" xml:"network_mode" require:"true"`
	MasterUrl          *string                             `json:"master_url" xml:"master_url" require:"true"`
	DockerVersion      *string                             `json:"docker_version" xml:"docker_version" require:"true"`
	DeletionProtection *bool                               `json:"deletion_protection" xml:"deletion_protection" require:"true"`
	Tags               []*DescribeClustersResponseBodyTags `json:"tags" xml:"tags" require:"true" type:"Repeated"`
}

func (s DescribeClustersResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeClustersResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeClustersResponseBody) SetName(v string) *DescribeClustersResponseBody {
	s.Name = &v
	return s
}

func (s *DescribeClustersResponseBody) SetClusterId(v string) *DescribeClustersResponseBody {
	s.ClusterId = &v
	return s
}

func (s *DescribeClustersResponseBody) SetRegionId(v string) *DescribeClustersResponseBody {
	s.RegionId = &v
	return s
}

func (s *DescribeClustersResponseBody) SetState(v string) *DescribeClustersResponseBody {
	s.State = &v
	return s
}

func (s *DescribeClustersResponseBody) SetClusterType(v string) *DescribeClustersResponseBody {
	s.ClusterType = &v
	return s
}

func (s *DescribeClustersResponseBody) SetCurrentVersion(v string) *DescribeClustersResponseBody {
	s.CurrentVersion = &v
	return s
}

func (s *DescribeClustersResponseBody) SetMetaData(v string) *DescribeClustersResponseBody {
	s.MetaData = &v
	return s
}

func (s *DescribeClustersResponseBody) SetResourceGroupId(v string) *DescribeClustersResponseBody {
	s.ResourceGroupId = &v
	return s
}

func (s *DescribeClustersResponseBody) SetVpcId(v string) *DescribeClustersResponseBody {
	s.VpcId = &v
	return s
}

func (s *DescribeClustersResponseBody) SetVswitchId(v string) *DescribeClustersResponseBody {
	s.VswitchId = &v
	return s
}

func (s *DescribeClustersResponseBody) SetVswitchCidr(v string) *DescribeClustersResponseBody {
	s.VswitchCidr = &v
	return s
}

func (s *DescribeClustersResponseBody) SetDataDiskSize(v int) *DescribeClustersResponseBody {
	s.DataDiskSize = &v
	return s
}

func (s *DescribeClustersResponseBody) SetDataDiskCategory(v string) *DescribeClustersResponseBody {
	s.DataDiskCategory = &v
	return s
}

func (s *DescribeClustersResponseBody) SetSecurityGroupId(v string) *DescribeClustersResponseBody {
	s.SecurityGroupId = &v
	return s
}

func (s *DescribeClustersResponseBody) SetZoneId(v string) *DescribeClustersResponseBody {
	s.ZoneId = &v
	return s
}

func (s *DescribeClustersResponseBody) SetNetworkMode(v string) *DescribeClustersResponseBody {
	s.NetworkMode = &v
	return s
}

func (s *DescribeClustersResponseBody) SetMasterUrl(v string) *DescribeClustersResponseBody {
	s.MasterUrl = &v
	return s
}

func (s *DescribeClustersResponseBody) SetDockerVersion(v string) *DescribeClustersResponseBody {
	s.DockerVersion = &v
	return s
}

func (s *DescribeClustersResponseBody) SetDeletionProtection(v bool) *DescribeClustersResponseBody {
	s.DeletionProtection = &v
	return s
}

func (s *DescribeClustersResponseBody) SetTags(v []*DescribeClustersResponseBodyTags) *DescribeClustersResponseBody {
	s.Tags = v
	return s
}

type DescribeClustersResponseBodyTags struct {
	Key   *string `json:"key" xml:"key" require:"true"`
	Value *string `json:"value" xml:"value" require:"true"`
}

func (s DescribeClustersResponseBodyTags) String() string {
	return tea.Prettify(s)
}

func (s DescribeClustersResponseBodyTags) GoString() string {
	return s.String()
}

func (s *DescribeClustersResponseBodyTags) SetKey(v string) *DescribeClustersResponseBodyTags {
	s.Key = &v
	return s
}

func (s *DescribeClustersResponseBodyTags) SetValue(v string) *DescribeClustersResponseBodyTags {
	s.Value = &v
	return s
}

type DescribeClustersResponse struct {
	Headers map[string]string               `json:"headers" xml:"headers" require:"true"`
	Body    []*DescribeClustersResponseBody `json:"body" xml:"body" require:"true" type:"Repeated"`
}

func (s DescribeClustersResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClustersResponse) GoString() string {
	return s.String()
}

func (s *DescribeClustersResponse) SetHeaders(v map[string]string) *DescribeClustersResponse {
	s.Headers = v
	return s
}

func (s *DescribeClustersResponse) SetBody(v []*DescribeClustersResponseBody) *DescribeClustersResponse {
	s.Body = v
	return s
}

type DescribeClusterDetailRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s DescribeClusterDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterDetailRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterDetailRequest) SetHeaders(v map[string]string) *DescribeClusterDetailRequest {
	s.Headers = v
	return s
}

type DescribeClusterDetailResponseBody struct {
	Name               *string                                  `json:"name" xml:"name" require:"true"`
	ClusterId          *string                                  `json:"cluster_id" xml:"cluster_id" require:"true"`
	RegionId           *string                                  `json:"region_id" xml:"region_id" require:"true"`
	State              *string                                  `json:"state" xml:"state" require:"true"`
	ClusterType        *string                                  `json:"cluster_type" xml:"cluster_type" require:"true"`
	CurrentVersion     *string                                  `json:"current_version" xml:"current_version" require:"true"`
	MetaData           *string                                  `json:"meta_data" xml:"meta_data" require:"true"`
	ResourceGroupId    *string                                  `json:"resource_group_id" xml:"resource_group_id" require:"true"`
	InstanceType       *string                                  `json:"instance_type" xml:"instance_type" require:"true"`
	VpcId              *string                                  `json:"vpc_id" xml:"vpc_id" require:"true"`
	VswitchId          *string                                  `json:"vswitch_id" xml:"vswitch_id" require:"true"`
	VswitchCidr        *string                                  `json:"vswitch_cidr" xml:"vswitch_cidr" require:"true"`
	DataDiskSize       *int                                     `json:"data_disk_size" xml:"data_disk_size" require:"true"`
	DataDiskCategory   *string                                  `json:"data_disk_category" xml:"data_disk_category" require:"true"`
	SecurityGroupId    *string                                  `json:"security_group_id" xml:"security_group_id" require:"true"`
	ZoneId             *string                                  `json:"zone_id" xml:"zone_id" require:"true"`
	NetworkMode        *string                                  `json:"network_mode" xml:"network_mode" require:"true"`
	DockerVersion      *string                                  `json:"docker_version" xml:"docker_version" require:"true"`
	DeletionProtection *bool                                    `json:"deletion_protection" xml:"deletion_protection" require:"true"`
	Tags               []*DescribeClusterDetailResponseBodyTags `json:"tags" xml:"tags" require:"true" type:"Repeated"`
}

func (s DescribeClusterDetailResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterDetailResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeClusterDetailResponseBody) SetName(v string) *DescribeClusterDetailResponseBody {
	s.Name = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetClusterId(v string) *DescribeClusterDetailResponseBody {
	s.ClusterId = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetRegionId(v string) *DescribeClusterDetailResponseBody {
	s.RegionId = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetState(v string) *DescribeClusterDetailResponseBody {
	s.State = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetClusterType(v string) *DescribeClusterDetailResponseBody {
	s.ClusterType = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetCurrentVersion(v string) *DescribeClusterDetailResponseBody {
	s.CurrentVersion = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetMetaData(v string) *DescribeClusterDetailResponseBody {
	s.MetaData = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetResourceGroupId(v string) *DescribeClusterDetailResponseBody {
	s.ResourceGroupId = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetInstanceType(v string) *DescribeClusterDetailResponseBody {
	s.InstanceType = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetVpcId(v string) *DescribeClusterDetailResponseBody {
	s.VpcId = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetVswitchId(v string) *DescribeClusterDetailResponseBody {
	s.VswitchId = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetVswitchCidr(v string) *DescribeClusterDetailResponseBody {
	s.VswitchCidr = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetDataDiskSize(v int) *DescribeClusterDetailResponseBody {
	s.DataDiskSize = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetDataDiskCategory(v string) *DescribeClusterDetailResponseBody {
	s.DataDiskCategory = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetSecurityGroupId(v string) *DescribeClusterDetailResponseBody {
	s.SecurityGroupId = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetZoneId(v string) *DescribeClusterDetailResponseBody {
	s.ZoneId = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetNetworkMode(v string) *DescribeClusterDetailResponseBody {
	s.NetworkMode = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetDockerVersion(v string) *DescribeClusterDetailResponseBody {
	s.DockerVersion = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetDeletionProtection(v bool) *DescribeClusterDetailResponseBody {
	s.DeletionProtection = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetTags(v []*DescribeClusterDetailResponseBodyTags) *DescribeClusterDetailResponseBody {
	s.Tags = v
	return s
}

type DescribeClusterDetailResponseBodyTags struct {
	Key   *string `json:"key" xml:"key" require:"true"`
	Value *string `json:"value" xml:"value" require:"true"`
}

func (s DescribeClusterDetailResponseBodyTags) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterDetailResponseBodyTags) GoString() string {
	return s.String()
}

func (s *DescribeClusterDetailResponseBodyTags) SetKey(v string) *DescribeClusterDetailResponseBodyTags {
	s.Key = &v
	return s
}

func (s *DescribeClusterDetailResponseBodyTags) SetValue(v string) *DescribeClusterDetailResponseBodyTags {
	s.Value = &v
	return s
}

type DescribeClusterDetailResponse struct {
	Headers map[string]string                  `json:"headers" xml:"headers" require:"true"`
	Body    *DescribeClusterDetailResponseBody `json:"body" xml:"body" require:"true"`
}

func (s DescribeClusterDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterDetailResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterDetailResponse) SetHeaders(v map[string]string) *DescribeClusterDetailResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterDetailResponse) SetBody(v *DescribeClusterDetailResponseBody) *DescribeClusterDetailResponse {
	s.Body = v
	return s
}

type DeleteClusterRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s DeleteClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteClusterRequest) GoString() string {
	return s.String()
}

func (s *DeleteClusterRequest) SetHeaders(v map[string]string) *DeleteClusterRequest {
	s.Headers = v
	return s
}

type DeleteClusterResponseBody struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteClusterResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DeleteClusterResponseBody) GoString() string {
	return s.String()
}

func (s *DeleteClusterResponseBody) SetRequestId(v string) *DeleteClusterResponseBody {
	s.RequestId = &v
	return s
}

type DeleteClusterResponse struct {
	Headers map[string]string          `json:"headers" xml:"headers" require:"true"`
	Body    *DeleteClusterResponseBody `json:"body" xml:"body" require:"true"`
}

func (s DeleteClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteClusterResponse) GoString() string {
	return s.String()
}

func (s *DeleteClusterResponse) SetHeaders(v map[string]string) *DeleteClusterResponse {
	s.Headers = v
	return s
}

func (s *DeleteClusterResponse) SetBody(v *DeleteClusterResponseBody) *DeleteClusterResponse {
	s.Body = v
	return s
}

type DescribeApiVersionRequest struct {
	Headers map[string]string `json:"headers" xml:"headers"`
}

func (s DescribeApiVersionRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiVersionRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiVersionRequest) SetHeaders(v map[string]string) *DescribeApiVersionRequest {
	s.Headers = v
	return s
}

type DescribeApiVersionResponseBody struct {
	Version              *string `json:"version" xml:"version" require:"true"`
	Build                *string `json:"build" xml:"build" require:"true"`
	DockerVersion        *string `json:"docker_version" xml:"docker_version" require:"true"`
	DockerRegionVersions *string `json:"docker_region_versions" xml:"docker_region_versions" require:"true"`
}

func (s DescribeApiVersionResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiVersionResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeApiVersionResponseBody) SetVersion(v string) *DescribeApiVersionResponseBody {
	s.Version = &v
	return s
}

func (s *DescribeApiVersionResponseBody) SetBuild(v string) *DescribeApiVersionResponseBody {
	s.Build = &v
	return s
}

func (s *DescribeApiVersionResponseBody) SetDockerVersion(v string) *DescribeApiVersionResponseBody {
	s.DockerVersion = &v
	return s
}

func (s *DescribeApiVersionResponseBody) SetDockerRegionVersions(v string) *DescribeApiVersionResponseBody {
	s.DockerRegionVersions = &v
	return s
}

type DescribeApiVersionResponse struct {
	Headers map[string]string               `json:"headers" xml:"headers" require:"true"`
	Body    *DescribeApiVersionResponseBody `json:"body" xml:"body" require:"true"`
}

func (s DescribeApiVersionResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiVersionResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiVersionResponse) SetHeaders(v map[string]string) *DescribeApiVersionResponse {
	s.Headers = v
	return s
}

func (s *DescribeApiVersionResponse) SetBody(v *DescribeApiVersionResponseBody) *DescribeApiVersionResponse {
	s.Body = v
	return s
}

type Client struct {
	roa.Client
}

func NewClient(config *roa.Config) (*Client, error) {
	client := new(Client)
	err := client.Init(config)
	return client, err
}

func (client *Client) Init(config *roa.Config) (_err error) {
	_err = client.Client.Init(config)
	if _err != nil {
		return _err
	}
	client.EndpointRule = tea.String("")
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.EndpointHost, _err = client.GetEndpoint(client.ProductId, client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.EndpointHost)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) ResumeComponentUpgradeEx(clusterid *string, componentid *string, request *ResumeComponentUpgradeRequest, runtime *util.RuntimeOptions) (_result *ResumeComponentUpgradeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ResumeComponentUpgradeResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterid)+"/components/"+tea.StringValue(componentid)+"/resume"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ResumeComponentUpgrade(clusterid *string, componentid *string, request *ResumeComponentUpgradeRequest) (_result *ResumeComponentUpgradeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ResumeComponentUpgradeResponse{}
	_body, _err := client.ResumeComponentUpgradeEx(clusterid, componentid, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PauseComponentUpgradeEx(clusterid *string, componentid *string, request *PauseComponentUpgradeRequest, runtime *util.RuntimeOptions) (_result *PauseComponentUpgradeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PauseComponentUpgradeResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterid)+"/components/"+tea.StringValue(componentid)+"/pause"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PauseComponentUpgrade(clusterid *string, componentid *string, request *PauseComponentUpgradeRequest) (_result *PauseComponentUpgradeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PauseComponentUpgradeResponse{}
	_body, _err := client.PauseComponentUpgradeEx(clusterid, componentid, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CancelComponentUpgradeEx(clusterid *string, componentid *string, request *CancelComponentUpgradeRequest, runtime *util.RuntimeOptions) (_result *CancelComponentUpgradeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CancelComponentUpgradeResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterid)+"/components/"+tea.StringValue(componentid)+"/cancel"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CancelComponentUpgrade(clusterid *string, componentid *string, request *CancelComponentUpgradeRequest) (_result *CancelComponentUpgradeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CancelComponentUpgradeResponse{}
	_body, _err := client.CancelComponentUpgradeEx(clusterid, componentid, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CancelWorkflowEx(workflowName *string, request *CancelWorkflowRequest, runtime *util.RuntimeOptions) (_result *CancelWorkflowResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CancelWorkflowResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("PUT"), tea.String("AK"), tea.String("/gs/workflow/"+tea.StringValue(workflowName)), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CancelWorkflow(workflowName *string, request *CancelWorkflowRequest) (_result *CancelWorkflowResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CancelWorkflowResponse{}
	_body, _err := client.CancelWorkflowEx(workflowName, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescirbeWorkflowEx(workflowName *string, request *DescirbeWorkflowRequest, runtime *util.RuntimeOptions) (_result *DescirbeWorkflowResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescirbeWorkflowResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/gs/workflow/"+tea.StringValue(workflowName)), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescirbeWorkflow(workflowName *string, request *DescirbeWorkflowRequest) (_result *DescirbeWorkflowResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescirbeWorkflowResponse{}
	_body, _err := client.DescirbeWorkflowEx(workflowName, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RemoveWorkflowEx(workflowName *string, request *RemoveWorkflowRequest, runtime *util.RuntimeOptions) (_result *RemoveWorkflowResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveWorkflowResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("DELETE"), tea.String("AK"), tea.String("/gs/workflow/"+tea.StringValue(workflowName)), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveWorkflow(workflowName *string, request *RemoveWorkflowRequest) (_result *RemoveWorkflowResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RemoveWorkflowResponse{}
	_body, _err := client.RemoveWorkflowEx(workflowName, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeWorkflowsEx(request *DescribeWorkflowsRequest, runtime *util.RuntimeOptions) (_result *DescribeWorkflowsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeWorkflowsResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/gs/workflows"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeWorkflows(request *DescribeWorkflowsRequest) (_result *DescribeWorkflowsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeWorkflowsResponse{}
	_body, _err := client.DescribeWorkflowsEx(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) StartWorkflowEx(request *StartWorkflowRequest, runtime *util.RuntimeOptions) (_result *StartWorkflowResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &StartWorkflowResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/gs/workflow"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) StartWorkflow(request *StartWorkflowRequest) (_result *StartWorkflowResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &StartWorkflowResponse{}
	_body, _err := client.StartWorkflowEx(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateServiceMeshEx(request *CreateServiceMeshRequest, runtime *util.RuntimeOptions) (_result *CreateServiceMeshResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateServiceMeshResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/servicemesh"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateServiceMesh(request *CreateServiceMeshRequest) (_result *CreateServiceMeshResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateServiceMeshResponse{}
	_body, _err := client.CreateServiceMeshEx(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ServiceMeshAddClusterEx(serviceMeshId *string, request *ServiceMeshAddClusterRequest, runtime *util.RuntimeOptions) (_result *ServiceMeshAddClusterResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ServiceMeshAddClusterResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("PUT"), tea.String("AK"), tea.String("/servicemesh/"+tea.StringValue(serviceMeshId)+"/add/clusters"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ServiceMeshAddCluster(serviceMeshId *string, request *ServiceMeshAddClusterRequest) (_result *ServiceMeshAddClusterResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ServiceMeshAddClusterResponse{}
	_body, _err := client.ServiceMeshAddClusterEx(serviceMeshId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ServiceMeshRemoveClusterEx(serviceMeshId *string, request *ServiceMeshRemoveClusterRequest, runtime *util.RuntimeOptions) (_result *ServiceMeshRemoveClusterResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ServiceMeshRemoveClusterResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("PUT"), tea.String("AK"), tea.String("/servicemesh/"+tea.StringValue(serviceMeshId)+"/remove/clusters"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ServiceMeshRemoveCluster(serviceMeshId *string, request *ServiceMeshRemoveClusterRequest) (_result *ServiceMeshRemoveClusterResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ServiceMeshRemoveClusterResponse{}
	_body, _err := client.ServiceMeshRemoveClusterEx(serviceMeshId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateServiceMeshEx(serviceMeshId *string, request *UpdateServiceMeshRequest, runtime *util.RuntimeOptions) (_result *UpdateServiceMeshResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateServiceMeshResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("PUT"), tea.String("AK"), tea.String("/servicemesh/"+tea.StringValue(serviceMeshId)), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateServiceMesh(serviceMeshId *string, request *UpdateServiceMeshRequest) (_result *UpdateServiceMeshResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateServiceMeshResponse{}
	_body, _err := client.UpdateServiceMeshEx(serviceMeshId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ServiceMeshApiServerEx(serviceMeshId *string, request *ServiceMeshApiServerRequest, runtime *util.RuntimeOptions) (_result *ServiceMeshApiServerResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ServiceMeshApiServerResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/servicemesh/"+tea.StringValue(serviceMeshId)+"/api_proxy"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ServiceMeshApiServer(serviceMeshId *string, request *ServiceMeshApiServerRequest) (_result *ServiceMeshApiServerResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ServiceMeshApiServerResponse{}
	_body, _err := client.ServiceMeshApiServerEx(serviceMeshId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UnInstallClusterAddonsEx(clusterId *string, request *UnInstallClusterAddonsRequest, runtime *util.RuntimeOptions) (_result *UnInstallClusterAddonsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UnInstallClusterAddonsResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)+"/components/uninstall"), nil, request.Headers, tea.ToMap(request.Body), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UnInstallClusterAddons(clusterId *string, request *UnInstallClusterAddonsRequest) (_result *UnInstallClusterAddonsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UnInstallClusterAddonsResponse{}
	_body, _err := client.UnInstallClusterAddonsEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAddonsEx(request *DescribeAddonsRequest, runtime *util.RuntimeOptions) (_result *DescribeAddonsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAddonsResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/clusters/components/metadata"), util.StringifyMapValue(tea.ToMap(request.Query)), request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAddons(request *DescribeAddonsRequest) (_result *DescribeAddonsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAddonsResponse{}
	_body, _err := client.DescribeAddonsEx(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CancelClusterUpgradeEx(clusterId *string, request *CancelClusterUpgradeRequest, runtime *util.RuntimeOptions) (_result *CancelClusterUpgradeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CancelClusterUpgradeResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/api/v2/clusters/"+tea.StringValue(clusterId)+"/upgrade/cancel"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CancelClusterUpgrade(clusterId *string, request *CancelClusterUpgradeRequest) (_result *CancelClusterUpgradeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CancelClusterUpgradeResponse{}
	_body, _err := client.CancelClusterUpgradeEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeUserQuotaEx(request *DescribeUserQuotaRequest, runtime *util.RuntimeOptions) (_result *DescribeUserQuotaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeUserQuotaResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/quota"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeUserQuota(request *DescribeUserQuotaRequest) (_result *DescribeUserQuotaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeUserQuotaResponse{}
	_body, _err := client.DescribeUserQuotaEx(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterV2UserKubeconfigEx(clusterId *string, request *DescribeClusterV2UserKubeconfigRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterV2UserKubeconfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeClusterV2UserKubeconfigResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/api/v2/k8s/"+tea.StringValue(clusterId)+"/user_config"), util.StringifyMapValue(tea.ToMap(request.Query)), request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeClusterV2UserKubeconfig(clusterId *string, request *DescribeClusterV2UserKubeconfigRequest) (_result *DescribeClusterV2UserKubeconfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeClusterV2UserKubeconfigResponse{}
	_body, _err := client.DescribeClusterV2UserKubeconfigEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RemoveClusterNodesEx(clusterId *string, request *RemoveClusterNodesRequest, runtime *util.RuntimeOptions) (_result *RemoveClusterNodesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveClusterNodesResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/api/v2/clusters/"+tea.StringValue(clusterId)+"/nodes/remove"), nil, request.Headers, tea.ToMap(request.Body), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveClusterNodes(clusterId *string, request *RemoveClusterNodesRequest) (_result *RemoveClusterNodesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RemoveClusterNodesResponse{}
	_body, _err := client.RemoveClusterNodesEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpgradeClusterEx(clusterId *string, request *UpgradeClusterRequest, runtime *util.RuntimeOptions) (_result *UpgradeClusterResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpgradeClusterResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/api/v2/clusters/"+tea.StringValue(clusterId)+"/upgrade"), nil, request.Headers, tea.ToMap(request.Body), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpgradeCluster(clusterId *string, request *UpgradeClusterRequest) (_result *UpgradeClusterResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpgradeClusterResponse{}
	_body, _err := client.UpgradeClusterEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PauseClusterUpgradeEx(clusterId *string, request *PauseClusterUpgradeRequest, runtime *util.RuntimeOptions) (_result *PauseClusterUpgradeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PauseClusterUpgradeResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/api/v2/clusters/"+tea.StringValue(clusterId)+"/upgrade/pause"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PauseClusterUpgrade(clusterId *string, request *PauseClusterUpgradeRequest) (_result *PauseClusterUpgradeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PauseClusterUpgradeResponse{}
	_body, _err := client.PauseClusterUpgradeEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ResumeUpgradeClusterEx(clusterId *string, request *ResumeUpgradeClusterRequest, runtime *util.RuntimeOptions) (_result *ResumeUpgradeClusterResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ResumeUpgradeClusterResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/api/v2/clusters/"+tea.StringValue(clusterId)+"/upgrade/resume"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ResumeUpgradeCluster(clusterId *string, request *ResumeUpgradeClusterRequest) (_result *ResumeUpgradeClusterResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ResumeUpgradeClusterResponse{}
	_body, _err := client.ResumeUpgradeClusterEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetUpgradeStatusEx(clusterId *string, request *GetUpgradeStatusRequest, runtime *util.RuntimeOptions) (_result *GetUpgradeStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetUpgradeStatusResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/api/v2/clusters/"+tea.StringValue(clusterId)+"/upgrade/status"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetUpgradeStatus(clusterId *string, request *GetUpgradeStatusRequest) (_result *GetUpgradeStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetUpgradeStatusResponse{}
	_body, _err := client.GetUpgradeStatusEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyClusterEx(clusterId *string, request *ModifyClusterRequest, runtime *util.RuntimeOptions) (_result *ModifyClusterResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyClusterResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("PUT"), tea.String("AK"), tea.String("/api/v2/clusters/"+tea.StringValue(clusterId)), nil, request.Headers, tea.ToMap(request.Body), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyCluster(clusterId *string, request *ModifyClusterRequest) (_result *ModifyClusterResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyClusterResponse{}
	_body, _err := client.ModifyClusterEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) InstallClusterAddonsEx(clusterId *string, request *InstallClusterAddonsRequest, runtime *util.RuntimeOptions) (_result *InstallClusterAddonsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &InstallClusterAddonsResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)+"/components/install"), nil, request.Headers, tea.ToMap(request.Body), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) InstallClusterAddons(clusterId *string, request *InstallClusterAddonsRequest) (_result *InstallClusterAddonsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &InstallClusterAddonsResponse{}
	_body, _err := client.InstallClusterAddonsEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteTriggerHookEx(request *DeleteTriggerHookRequest, runtime *util.RuntimeOptions) (_result *DeleteTriggerHookResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteTriggerHookResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/api/v2/hook/trigger"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteTriggerHook(request *DeleteTriggerHookRequest) (_result *DeleteTriggerHookResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteTriggerHookResponse{}
	_body, _err := client.DeleteTriggerHookEx(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyClusterTagsEx(clusterId *string, request *ModifyClusterTagsRequest, runtime *util.RuntimeOptions) (_result *ModifyClusterTagsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyClusterTagsResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)+"/tags"), nil, request.Headers, tea.ToMap(request.Body), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyClusterTags(clusterId *string, request *ModifyClusterTagsRequest) (_result *ModifyClusterTagsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyClusterTagsResponse{}
	_body, _err := client.ModifyClusterTagsEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeExternalAgentEx(clusterId *string, request *DescribeExternalAgentRequest, runtime *util.RuntimeOptions) (_result *DescribeExternalAgentResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeExternalAgentResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/k8s/"+tea.StringValue(clusterId)+"/external/agent/deployment"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeExternalAgent(clusterId *string, request *DescribeExternalAgentRequest) (_result *DescribeExternalAgentResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeExternalAgentResponse{}
	_body, _err := client.DescribeExternalAgentEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterAttachScriptsEx(clusterId *string, request *DescribeClusterAttachScriptsRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterAttachScriptsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeClusterAttachScriptsResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)+"/attachscript"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeClusterAttachScripts(clusterId *string, request *DescribeClusterAttachScriptsRequest) (_result *DescribeClusterAttachScriptsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeClusterAttachScriptsResponse{}
	_body, _err := client.DescribeClusterAttachScriptsEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ScaleOutClusterEx(clusterId *string, request *ScaleOutClusterRequest, runtime *util.RuntimeOptions) (_result *ScaleOutClusterResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ScaleOutClusterResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/api/v2/clusters/"+tea.StringValue(clusterId)), nil, request.Headers, tea.ToMap(request.Body), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ScaleOutCluster(clusterId *string, request *ScaleOutClusterRequest) (_result *ScaleOutClusterResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ScaleOutClusterResponse{}
	_body, _err := client.ScaleOutClusterEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateTriggerHookEx(request *CreateTriggerHookRequest, runtime *util.RuntimeOptions) (_result *CreateTriggerHookResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateTriggerHookResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("PUT"), tea.String("AK"), tea.String("/hook/trigger"), nil, request.Headers, tea.ToMap(request.Body), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateTriggerHook(request *CreateTriggerHookRequest) (_result *CreateTriggerHookResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateTriggerHookResponse{}
	_body, _err := client.CreateTriggerHookEx(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpgradeClusterAddonsEx(clusterId *string, request *UpgradeClusterAddonsRequest, runtime *util.RuntimeOptions) (_result *UpgradeClusterAddonsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpgradeClusterAddonsResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)+"/components/upgrade"), nil, request.Headers, tea.ToMap(request.Body), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpgradeClusterAddons(clusterId *string, request *UpgradeClusterAddonsRequest) (_result *UpgradeClusterAddonsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpgradeClusterAddonsResponse{}
	_body, _err := client.UpgradeClusterAddonsEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterAddonsVersionEx(clusterId *string, request *DescribeClusterAddonsVersionRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterAddonsVersionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeClusterAddonsVersionResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)+"/components/version"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeClusterAddonsVersion(clusterId *string, request *DescribeClusterAddonsVersionRequest) (_result *DescribeClusterAddonsVersionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeClusterAddonsVersionResponse{}
	_body, _err := client.DescribeClusterAddonsVersionEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterAddonUpgradeStatusEx(clusterId *string, componentId *string, request *DescribeClusterAddonUpgradeStatusRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterAddonUpgradeStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeClusterAddonUpgradeStatusResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)+"/components/"+tea.StringValue(componentId)+"/upgradestatus"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeClusterAddonUpgradeStatus(clusterId *string, componentId *string, request *DescribeClusterAddonUpgradeStatusRequest) (_result *DescribeClusterAddonUpgradeStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeClusterAddonUpgradeStatusResponse{}
	_body, _err := client.DescribeClusterAddonUpgradeStatusEx(clusterId, componentId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteClusterNodesEx(clusterId *string, request *DeleteClusterNodesRequest, runtime *util.RuntimeOptions) (_result *DeleteClusterNodesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteClusterNodesResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)+"/nodes"), nil, request.Headers, tea.ToMap(request.Body), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteClusterNodes(clusterId *string, request *DeleteClusterNodesRequest) (_result *DeleteClusterNodesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteClusterNodesResponse{}
	_body, _err := client.DeleteClusterNodesEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteTemplateEx(templateId *string, request *DeleteTemplateRequest, runtime *util.RuntimeOptions) (_result *DeleteTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("DELETE"), tea.String("AK"), tea.String("/templates/"+tea.StringValue(templateId)), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteTemplate(templateId *string, request *DeleteTemplateRequest) (_result *DeleteTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteTemplateResponse{}
	_body, _err := client.DeleteTemplateEx(templateId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterUserKubeconfigEx(clusterId *string, request *DescribeClusterUserKubeconfigRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterUserKubeconfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeClusterUserKubeconfigResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/k8s/"+tea.StringValue(clusterId)+"/user_config"), util.StringifyMapValue(tea.ToMap(request.Query)), request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeClusterUserKubeconfig(clusterId *string, request *DescribeClusterUserKubeconfigRequest) (_result *DescribeClusterUserKubeconfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeClusterUserKubeconfigResponse{}
	_body, _err := client.DescribeClusterUserKubeconfigEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterNodesEx(clusterId *string, request *DescribeClusterNodesRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterNodesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeClusterNodesResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)+"/nodes"), util.StringifyMapValue(tea.ToMap(request.Query)), request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeClusterNodes(clusterId *string, request *DescribeClusterNodesRequest) (_result *DescribeClusterNodesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeClusterNodesResponse{}
	_body, _err := client.DescribeClusterNodesEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterLogsEx(clusterId *string, request *DescribeClusterLogsRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterLogsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeClusterLogsResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)+"/logs"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeClusterLogs(clusterId *string, request *DescribeClusterLogsRequest) (_result *DescribeClusterLogsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeClusterLogsResponse{}
	_body, _err := client.DescribeClusterLogsEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AttachInstancesEx(clusterId *string, request *AttachInstancesRequest, runtime *util.RuntimeOptions) (_result *AttachInstancesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AttachInstancesResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)+"/attach"), nil, request.Headers, tea.ToMap(request.Body), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AttachInstances(clusterId *string, request *AttachInstancesRequest) (_result *AttachInstancesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AttachInstancesResponse{}
	_body, _err := client.AttachInstancesEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeTemplatesEx(request *DescribeTemplatesRequest, runtime *util.RuntimeOptions) (_result *DescribeTemplatesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeTemplatesResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/templates"), util.StringifyMapValue(tea.ToMap(request.Query)), request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeTemplates(request *DescribeTemplatesRequest) (_result *DescribeTemplatesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeTemplatesResponse{}
	_body, _err := client.DescribeTemplatesEx(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateTemplateEx(request *CreateTemplateRequest, runtime *util.RuntimeOptions) (_result *CreateTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/templates"), nil, request.Headers, tea.ToMap(request.Body), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateTemplate(request *CreateTemplateRequest) (_result *CreateTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateTemplateResponse{}
	_body, _err := client.CreateTemplateEx(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateClusterEx(request *CreateClusterRequest, runtime *util.RuntimeOptions) (_result *CreateClusterResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateClusterResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/clusters"), nil, request.Headers, tea.ToMap(request.Body), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateCluster(request *CreateClusterRequest) (_result *CreateClusterResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateClusterResponse{}
	_body, _err := client.CreateClusterEx(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ScaleClusterEx(clusterId *string, request *ScaleClusterRequest, runtime *util.RuntimeOptions) (_result *ScaleClusterResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ScaleClusterResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("PUT"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ScaleCluster(clusterId *string, request *ScaleClusterRequest) (_result *ScaleClusterResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ScaleClusterResponse{}
	_body, _err := client.ScaleClusterEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClustersEx(request *DescribeClustersRequest, runtime *util.RuntimeOptions) (_result *DescribeClustersResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeClustersResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/clusters"), util.StringifyMapValue(tea.ToMap(request.Query)), request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeClusters(request *DescribeClustersRequest) (_result *DescribeClustersResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeClustersResponse{}
	_body, _err := client.DescribeClustersEx(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterDetailEx(clusterId *string, request *DescribeClusterDetailRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeClusterDetailResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeClusterDetail(clusterId *string, request *DescribeClusterDetailRequest) (_result *DescribeClusterDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeClusterDetailResponse{}
	_body, _err := client.DescribeClusterDetailEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteClusterEx(clusterId *string, request *DeleteClusterRequest, runtime *util.RuntimeOptions) (_result *DeleteClusterResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteClusterResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("DELETE"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteCluster(clusterId *string, request *DeleteClusterRequest) (_result *DeleteClusterResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteClusterResponse{}
	_body, _err := client.DeleteClusterEx(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiVersionEx(request *DescribeApiVersionRequest, runtime *util.RuntimeOptions) (_result *DescribeApiVersionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiVersionResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/version"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiVersion(request *DescribeApiVersionRequest) (_result *DescribeApiVersionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiVersionResponse{}
	_body, _err := client.DescribeApiVersionEx(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetEndpoint(productId *string, regionId *string, endpointRule *string, network *string, suffix *string, endpointMap map[string]string, endpoint *string) (_result *string, _err error) {
	if !tea.BoolValue(util.Empty(endpoint)) {
		_result = endpoint
		return _result, _err
	}

	if !tea.BoolValue(util.IsUnset(endpointMap)) && !tea.BoolValue(util.Empty(tea.String(endpointMap[tea.StringValue(regionId)]))) {
		_result = tea.String(endpointMap[tea.StringValue(regionId)])
		return _result, _err
	}

	_body, _err := endpointutil.GetEndpointRules(productId, regionId, endpointRule, network, suffix)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}
