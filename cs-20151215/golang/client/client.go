// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	roa "github.com/alibabacloud-go/tea-roa/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type ListTagResourcesQuery struct {
	NextToken    *string `json:"next_token,omitempty" xml:"next_token,omitempty"`
	ResourceIds  *string `json:"resource_ids,omitempty" xml:"resource_ids,omitempty"`
	Tags         *string `json:"tags,omitempty" xml:"tags,omitempty"`
	ResourceType *string `json:"resource_type,omitempty" xml:"resource_type,omitempty" require:"true"`
}

func (s ListTagResourcesQuery) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesQuery) GoString() string {
	return s.String()
}

func (s *ListTagResourcesQuery) SetNextToken(v string) *ListTagResourcesQuery {
	s.NextToken = &v
	return s
}

func (s *ListTagResourcesQuery) SetResourceIds(v string) *ListTagResourcesQuery {
	s.ResourceIds = &v
	return s
}

func (s *ListTagResourcesQuery) SetTags(v string) *ListTagResourcesQuery {
	s.Tags = &v
	return s
}

func (s *ListTagResourcesQuery) SetResourceType(v string) *ListTagResourcesQuery {
	s.ResourceType = &v
	return s
}

type ListTagResourcesRequest struct {
	Headers map[string]*string     `json:"headers,omitempty" xml:"headers,omitempty"`
	Query   *ListTagResourcesQuery `json:"query,omitempty" xml:"query,omitempty" require:"true"`
}

func (s ListTagResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesRequest) GoString() string {
	return s.String()
}

func (s *ListTagResourcesRequest) SetHeaders(v map[string]*string) *ListTagResourcesRequest {
	s.Headers = v
	return s
}

func (s *ListTagResourcesRequest) SetQuery(v *ListTagResourcesQuery) *ListTagResourcesRequest {
	s.Query = v
	return s
}

type ListTagResourcesResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s ListTagResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesResponse) GoString() string {
	return s.String()
}

func (s *ListTagResourcesResponse) SetHeaders(v map[string]*string) *ListTagResourcesResponse {
	s.Headers = v
	return s
}

type ResumeComponentUpgradeRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s ResumeComponentUpgradeRequest) String() string {
	return tea.Prettify(s)
}

func (s ResumeComponentUpgradeRequest) GoString() string {
	return s.String()
}

func (s *ResumeComponentUpgradeRequest) SetHeaders(v map[string]*string) *ResumeComponentUpgradeRequest {
	s.Headers = v
	return s
}

type ResumeComponentUpgradeResponseBody struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
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
	Headers map[string]*string                  `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *ResumeComponentUpgradeResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s ResumeComponentUpgradeResponse) String() string {
	return tea.Prettify(s)
}

func (s ResumeComponentUpgradeResponse) GoString() string {
	return s.String()
}

func (s *ResumeComponentUpgradeResponse) SetHeaders(v map[string]*string) *ResumeComponentUpgradeResponse {
	s.Headers = v
	return s
}

func (s *ResumeComponentUpgradeResponse) SetBody(v *ResumeComponentUpgradeResponseBody) *ResumeComponentUpgradeResponse {
	s.Body = v
	return s
}

type PauseComponentUpgradeRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s PauseComponentUpgradeRequest) String() string {
	return tea.Prettify(s)
}

func (s PauseComponentUpgradeRequest) GoString() string {
	return s.String()
}

func (s *PauseComponentUpgradeRequest) SetHeaders(v map[string]*string) *PauseComponentUpgradeRequest {
	s.Headers = v
	return s
}

type PauseComponentUpgradeResponseBody struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
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
	Headers map[string]*string                 `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *PauseComponentUpgradeResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s PauseComponentUpgradeResponse) String() string {
	return tea.Prettify(s)
}

func (s PauseComponentUpgradeResponse) GoString() string {
	return s.String()
}

func (s *PauseComponentUpgradeResponse) SetHeaders(v map[string]*string) *PauseComponentUpgradeResponse {
	s.Headers = v
	return s
}

func (s *PauseComponentUpgradeResponse) SetBody(v *PauseComponentUpgradeResponseBody) *PauseComponentUpgradeResponse {
	s.Body = v
	return s
}

type CancelComponentUpgradeRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s CancelComponentUpgradeRequest) String() string {
	return tea.Prettify(s)
}

func (s CancelComponentUpgradeRequest) GoString() string {
	return s.String()
}

func (s *CancelComponentUpgradeRequest) SetHeaders(v map[string]*string) *CancelComponentUpgradeRequest {
	s.Headers = v
	return s
}

type CancelComponentUpgradeResponseBody struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
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
	Headers map[string]*string                  `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *CancelComponentUpgradeResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s CancelComponentUpgradeResponse) String() string {
	return tea.Prettify(s)
}

func (s CancelComponentUpgradeResponse) GoString() string {
	return s.String()
}

func (s *CancelComponentUpgradeResponse) SetHeaders(v map[string]*string) *CancelComponentUpgradeResponse {
	s.Headers = v
	return s
}

func (s *CancelComponentUpgradeResponse) SetBody(v *CancelComponentUpgradeResponseBody) *CancelComponentUpgradeResponse {
	s.Body = v
	return s
}

type CancelWorkflowRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s CancelWorkflowRequest) String() string {
	return tea.Prettify(s)
}

func (s CancelWorkflowRequest) GoString() string {
	return s.String()
}

func (s *CancelWorkflowRequest) SetHeaders(v map[string]*string) *CancelWorkflowRequest {
	s.Headers = v
	return s
}

type CancelWorkflowResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s CancelWorkflowResponse) String() string {
	return tea.Prettify(s)
}

func (s CancelWorkflowResponse) GoString() string {
	return s.String()
}

func (s *CancelWorkflowResponse) SetHeaders(v map[string]*string) *CancelWorkflowResponse {
	s.Headers = v
	return s
}

type DescirbeWorkflowRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescirbeWorkflowRequest) String() string {
	return tea.Prettify(s)
}

func (s DescirbeWorkflowRequest) GoString() string {
	return s.String()
}

func (s *DescirbeWorkflowRequest) SetHeaders(v map[string]*string) *DescirbeWorkflowRequest {
	s.Headers = v
	return s
}

type DescirbeWorkflowResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DescirbeWorkflowResponse) String() string {
	return tea.Prettify(s)
}

func (s DescirbeWorkflowResponse) GoString() string {
	return s.String()
}

func (s *DescirbeWorkflowResponse) SetHeaders(v map[string]*string) *DescirbeWorkflowResponse {
	s.Headers = v
	return s
}

type RemoveWorkflowRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s RemoveWorkflowRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveWorkflowRequest) GoString() string {
	return s.String()
}

func (s *RemoveWorkflowRequest) SetHeaders(v map[string]*string) *RemoveWorkflowRequest {
	s.Headers = v
	return s
}

type RemoveWorkflowResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s RemoveWorkflowResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveWorkflowResponse) GoString() string {
	return s.String()
}

func (s *RemoveWorkflowResponse) SetHeaders(v map[string]*string) *RemoveWorkflowResponse {
	s.Headers = v
	return s
}

type DescribeWorkflowsRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeWorkflowsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeWorkflowsRequest) GoString() string {
	return s.String()
}

func (s *DescribeWorkflowsRequest) SetHeaders(v map[string]*string) *DescribeWorkflowsRequest {
	s.Headers = v
	return s
}

type DescribeWorkflowsResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DescribeWorkflowsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeWorkflowsResponse) GoString() string {
	return s.String()
}

func (s *DescribeWorkflowsResponse) SetHeaders(v map[string]*string) *DescribeWorkflowsResponse {
	s.Headers = v
	return s
}

type StartWorkflowRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s StartWorkflowRequest) String() string {
	return tea.Prettify(s)
}

func (s StartWorkflowRequest) GoString() string {
	return s.String()
}

func (s *StartWorkflowRequest) SetHeaders(v map[string]*string) *StartWorkflowRequest {
	s.Headers = v
	return s
}

type StartWorkflowResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s StartWorkflowResponse) String() string {
	return tea.Prettify(s)
}

func (s StartWorkflowResponse) GoString() string {
	return s.String()
}

func (s *StartWorkflowResponse) SetHeaders(v map[string]*string) *StartWorkflowResponse {
	s.Headers = v
	return s
}

type UnInstallClusterAddonsBody struct {
	Name *string `json:"name,omitempty" xml:"name,omitempty" require:"true"`
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
	Headers map[string]*string          `json:"headers,omitempty" xml:"headers,omitempty"`
	Body    *UnInstallClusterAddonsBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s UnInstallClusterAddonsRequest) String() string {
	return tea.Prettify(s)
}

func (s UnInstallClusterAddonsRequest) GoString() string {
	return s.String()
}

func (s *UnInstallClusterAddonsRequest) SetHeaders(v map[string]*string) *UnInstallClusterAddonsRequest {
	s.Headers = v
	return s
}

func (s *UnInstallClusterAddonsRequest) SetBody(v *UnInstallClusterAddonsBody) *UnInstallClusterAddonsRequest {
	s.Body = v
	return s
}

type UnInstallClusterAddonsResponseBody struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
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
	Headers map[string]*string                  `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *UnInstallClusterAddonsResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s UnInstallClusterAddonsResponse) String() string {
	return tea.Prettify(s)
}

func (s UnInstallClusterAddonsResponse) GoString() string {
	return s.String()
}

func (s *UnInstallClusterAddonsResponse) SetHeaders(v map[string]*string) *UnInstallClusterAddonsResponse {
	s.Headers = v
	return s
}

func (s *UnInstallClusterAddonsResponse) SetBody(v *UnInstallClusterAddonsResponseBody) *UnInstallClusterAddonsResponse {
	s.Body = v
	return s
}

type DescribeAddonsQuery struct {
	Region      *string `json:"region,omitempty" xml:"region,omitempty"`
	ClusterType *string `json:"cluster_type,omitempty" xml:"cluster_type,omitempty"`
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
	Headers map[string]*string   `json:"headers,omitempty" xml:"headers,omitempty"`
	Query   *DescribeAddonsQuery `json:"query,omitempty" xml:"query,omitempty"`
}

func (s DescribeAddonsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAddonsRequest) GoString() string {
	return s.String()
}

func (s *DescribeAddonsRequest) SetHeaders(v map[string]*string) *DescribeAddonsRequest {
	s.Headers = v
	return s
}

func (s *DescribeAddonsRequest) SetQuery(v *DescribeAddonsQuery) *DescribeAddonsRequest {
	s.Query = v
	return s
}

type DescribeAddonsResponseBody struct {
	ComponentGroups    []*DescribeAddonsResponseBodyComponentGroups  `json:"ComponentGroups,omitempty" xml:"ComponentGroups,omitempty" require:"true" type:"Repeated"`
	StandardComponents *DescribeAddonsResponseBodyStandardComponents `json:"StandardComponents,omitempty" xml:"StandardComponents,omitempty" require:"true" type:"Struct"`
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
	GroupName *string                                           `json:"group_name,omitempty" xml:"group_name,omitempty" require:"true"`
	Items     []*DescribeAddonsResponseBodyComponentGroupsItems `json:"items,omitempty" xml:"items,omitempty" require:"true" type:"Repeated"`
	Default   []*string                                         `json:"default,omitempty" xml:"default,omitempty" require:"true" type:"Repeated"`
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
	Name     *string `json:"name,omitempty" xml:"name,omitempty" require:"true"`
	Required *string `json:"required,omitempty" xml:"required,omitempty" require:"true"`
	Version  *string `json:"version,omitempty" xml:"version,omitempty" require:"true"`
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

func (s *DescribeAddonsResponseBodyComponentGroupsItems) SetRequired(v string) *DescribeAddonsResponseBodyComponentGroupsItems {
	s.Required = &v
	return s
}

func (s *DescribeAddonsResponseBodyComponentGroupsItems) SetVersion(v string) *DescribeAddonsResponseBodyComponentGroupsItems {
	s.Version = &v
	return s
}

type DescribeAddonsResponseBodyStandardComponents struct {
	AddonName *DescribeAddonsResponseBodyStandardComponentsAddonName `json:"addon_name,omitempty" xml:"addon_name,omitempty" require:"true" type:"Struct"`
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
	Name     *string `json:"name,omitempty" xml:"name,omitempty" require:"true"`
	Required *string `json:"required,omitempty" xml:"required,omitempty" require:"true"`
	Version  *string `json:"version,omitempty" xml:"version,omitempty" require:"true"`
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

func (s *DescribeAddonsResponseBodyStandardComponentsAddonName) SetRequired(v string) *DescribeAddonsResponseBodyStandardComponentsAddonName {
	s.Required = &v
	return s
}

func (s *DescribeAddonsResponseBodyStandardComponentsAddonName) SetVersion(v string) *DescribeAddonsResponseBodyStandardComponentsAddonName {
	s.Version = &v
	return s
}

type DescribeAddonsResponse struct {
	Headers map[string]*string          `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DescribeAddonsResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeAddonsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAddonsResponse) GoString() string {
	return s.String()
}

func (s *DescribeAddonsResponse) SetHeaders(v map[string]*string) *DescribeAddonsResponse {
	s.Headers = v
	return s
}

func (s *DescribeAddonsResponse) SetBody(v *DescribeAddonsResponseBody) *DescribeAddonsResponse {
	s.Body = v
	return s
}

type UpdateK8sClusterUserConfigExpireRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s UpdateK8sClusterUserConfigExpireRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateK8sClusterUserConfigExpireRequest) GoString() string {
	return s.String()
}

func (s *UpdateK8sClusterUserConfigExpireRequest) SetHeaders(v map[string]*string) *UpdateK8sClusterUserConfigExpireRequest {
	s.Headers = v
	return s
}

type UpdateK8sClusterUserConfigExpireResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s UpdateK8sClusterUserConfigExpireResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateK8sClusterUserConfigExpireResponse) GoString() string {
	return s.String()
}

func (s *UpdateK8sClusterUserConfigExpireResponse) SetHeaders(v map[string]*string) *UpdateK8sClusterUserConfigExpireResponse {
	s.Headers = v
	return s
}

type CancelClusterUpgradeRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s CancelClusterUpgradeRequest) String() string {
	return tea.Prettify(s)
}

func (s CancelClusterUpgradeRequest) GoString() string {
	return s.String()
}

func (s *CancelClusterUpgradeRequest) SetHeaders(v map[string]*string) *CancelClusterUpgradeRequest {
	s.Headers = v
	return s
}

type CancelClusterUpgradeResponseBody struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
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
	Headers map[string]*string                `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *CancelClusterUpgradeResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s CancelClusterUpgradeResponse) String() string {
	return tea.Prettify(s)
}

func (s CancelClusterUpgradeResponse) GoString() string {
	return s.String()
}

func (s *CancelClusterUpgradeResponse) SetHeaders(v map[string]*string) *CancelClusterUpgradeResponse {
	s.Headers = v
	return s
}

func (s *CancelClusterUpgradeResponse) SetBody(v *CancelClusterUpgradeResponseBody) *CancelClusterUpgradeResponse {
	s.Body = v
	return s
}

type DescribeUserQuotaRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeUserQuotaRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeUserQuotaRequest) GoString() string {
	return s.String()
}

func (s *DescribeUserQuotaRequest) SetHeaders(v map[string]*string) *DescribeUserQuotaRequest {
	s.Headers = v
	return s
}

type DescribeUserQuotaResponseBody struct {
	ClusterQuota    *int `json:"cluster_quota,omitempty" xml:"cluster_quota,omitempty" require:"true"`
	NodeQuota       *int `json:"node_quota,omitempty" xml:"node_quota,omitempty" require:"true"`
	AskClusterQuota *int `json:"ask_cluster_quota,omitempty" xml:"ask_cluster_quota,omitempty" require:"true"`
	AmkClusterQuota *int `json:"amk_cluster_quota,omitempty" xml:"amk_cluster_quota,omitempty" require:"true"`
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
	Headers map[string]*string             `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DescribeUserQuotaResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeUserQuotaResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeUserQuotaResponse) GoString() string {
	return s.String()
}

func (s *DescribeUserQuotaResponse) SetHeaders(v map[string]*string) *DescribeUserQuotaResponse {
	s.Headers = v
	return s
}

func (s *DescribeUserQuotaResponse) SetBody(v *DescribeUserQuotaResponseBody) *DescribeUserQuotaResponse {
	s.Body = v
	return s
}

type DescribeClusterV2UserKubeconfigQuery struct {
	PrivateIpAddress *bool `json:"PrivateIpAddress,omitempty" xml:"PrivateIpAddress,omitempty"`
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
	Headers map[string]*string                    `json:"headers,omitempty" xml:"headers,omitempty"`
	Query   *DescribeClusterV2UserKubeconfigQuery `json:"query,omitempty" xml:"query,omitempty"`
}

func (s DescribeClusterV2UserKubeconfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterV2UserKubeconfigRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterV2UserKubeconfigRequest) SetHeaders(v map[string]*string) *DescribeClusterV2UserKubeconfigRequest {
	s.Headers = v
	return s
}

func (s *DescribeClusterV2UserKubeconfigRequest) SetQuery(v *DescribeClusterV2UserKubeconfigQuery) *DescribeClusterV2UserKubeconfigRequest {
	s.Query = v
	return s
}

type DescribeClusterV2UserKubeconfigResponseBody struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
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
	Headers map[string]*string                           `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DescribeClusterV2UserKubeconfigResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeClusterV2UserKubeconfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterV2UserKubeconfigResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterV2UserKubeconfigResponse) SetHeaders(v map[string]*string) *DescribeClusterV2UserKubeconfigResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterV2UserKubeconfigResponse) SetBody(v *DescribeClusterV2UserKubeconfigResponseBody) *DescribeClusterV2UserKubeconfigResponse {
	s.Body = v
	return s
}

type RemoveClusterNodesBody struct {
	ReleaseNode *bool                          `json:"release_node,omitempty" xml:"release_node,omitempty"`
	DrainNode   *bool                          `json:"drain_node,omitempty" xml:"drain_node,omitempty"`
	Nodes       []*RemoveClusterNodesBodyNodes `json:"nodes,omitempty" xml:"nodes,omitempty" type:"Repeated"`
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
	NodeName *string `json:"node_name,omitempty" xml:"node_name,omitempty"`
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
	Headers map[string]*string      `json:"headers,omitempty" xml:"headers,omitempty"`
	Body    *RemoveClusterNodesBody `json:"body,omitempty" xml:"body,omitempty"`
}

func (s RemoveClusterNodesRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveClusterNodesRequest) GoString() string {
	return s.String()
}

func (s *RemoveClusterNodesRequest) SetHeaders(v map[string]*string) *RemoveClusterNodesRequest {
	s.Headers = v
	return s
}

func (s *RemoveClusterNodesRequest) SetBody(v *RemoveClusterNodesBody) *RemoveClusterNodesRequest {
	s.Body = v
	return s
}

type RemoveClusterNodesResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s RemoveClusterNodesResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveClusterNodesResponse) GoString() string {
	return s.String()
}

func (s *RemoveClusterNodesResponse) SetHeaders(v map[string]*string) *RemoveClusterNodesResponse {
	s.Headers = v
	return s
}

type UpgradeClusterBody struct {
	Version *string `json:"version,omitempty" xml:"version,omitempty"`
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
	Headers map[string]*string  `json:"headers,omitempty" xml:"headers,omitempty"`
	Body    *UpgradeClusterBody `json:"body,omitempty" xml:"body,omitempty"`
}

func (s UpgradeClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s UpgradeClusterRequest) GoString() string {
	return s.String()
}

func (s *UpgradeClusterRequest) SetHeaders(v map[string]*string) *UpgradeClusterRequest {
	s.Headers = v
	return s
}

func (s *UpgradeClusterRequest) SetBody(v *UpgradeClusterBody) *UpgradeClusterRequest {
	s.Body = v
	return s
}

type UpgradeClusterResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s UpgradeClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s UpgradeClusterResponse) GoString() string {
	return s.String()
}

func (s *UpgradeClusterResponse) SetHeaders(v map[string]*string) *UpgradeClusterResponse {
	s.Headers = v
	return s
}

type PauseClusterUpgradeRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s PauseClusterUpgradeRequest) String() string {
	return tea.Prettify(s)
}

func (s PauseClusterUpgradeRequest) GoString() string {
	return s.String()
}

func (s *PauseClusterUpgradeRequest) SetHeaders(v map[string]*string) *PauseClusterUpgradeRequest {
	s.Headers = v
	return s
}

type PauseClusterUpgradeResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s PauseClusterUpgradeResponse) String() string {
	return tea.Prettify(s)
}

func (s PauseClusterUpgradeResponse) GoString() string {
	return s.String()
}

func (s *PauseClusterUpgradeResponse) SetHeaders(v map[string]*string) *PauseClusterUpgradeResponse {
	s.Headers = v
	return s
}

type ResumeUpgradeClusterRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s ResumeUpgradeClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s ResumeUpgradeClusterRequest) GoString() string {
	return s.String()
}

func (s *ResumeUpgradeClusterRequest) SetHeaders(v map[string]*string) *ResumeUpgradeClusterRequest {
	s.Headers = v
	return s
}

type ResumeUpgradeClusterResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s ResumeUpgradeClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s ResumeUpgradeClusterResponse) GoString() string {
	return s.String()
}

func (s *ResumeUpgradeClusterResponse) SetHeaders(v map[string]*string) *ResumeUpgradeClusterResponse {
	s.Headers = v
	return s
}

type GetUpgradeStatusRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s GetUpgradeStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s GetUpgradeStatusRequest) GoString() string {
	return s.String()
}

func (s *GetUpgradeStatusRequest) SetHeaders(v map[string]*string) *GetUpgradeStatusRequest {
	s.Headers = v
	return s
}

type GetUpgradeStatusResponseBody struct {
	Status           *string `json:"status,omitempty" xml:"status,omitempty" require:"true"`
	PrecheckReportId *string `json:"precheck_report_id,omitempty" xml:"precheck_report_id,omitempty" require:"true"`
	UpgradeStep      *string `json:"upgrade_step,omitempty" xml:"upgrade_step,omitempty" require:"true"`
	ErrorMessage     *string `json:"error_message,omitempty" xml:"error_message,omitempty" require:"true"`
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
	Headers map[string]*string            `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *GetUpgradeStatusResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s GetUpgradeStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s GetUpgradeStatusResponse) GoString() string {
	return s.String()
}

func (s *GetUpgradeStatusResponse) SetHeaders(v map[string]*string) *GetUpgradeStatusResponse {
	s.Headers = v
	return s
}

func (s *GetUpgradeStatusResponse) SetBody(v *GetUpgradeStatusResponseBody) *GetUpgradeStatusResponse {
	s.Body = v
	return s
}

type ModifyClusterBody struct {
	DeletionProtection     *bool   `json:"deletion_protection,omitempty" xml:"deletion_protection,omitempty" require:"true"`
	IngressLoadbalancerId  *string `json:"ingress_loadbalancer_id,omitempty" xml:"ingress_loadbalancer_id,omitempty" require:"true"`
	ApiServerEip           *bool   `json:"api_server_eip,omitempty" xml:"api_server_eip,omitempty" require:"true"`
	ApiServerEipId         *string `json:"api_server_eip_id,omitempty" xml:"api_server_eip_id,omitempty" require:"true"`
	ResourceGroupId        *string `json:"resource_group_id,omitempty" xml:"resource_group_id,omitempty" require:"true"`
	IngressDomainRebinding *string `json:"ingress_domain_rebinding,omitempty" xml:"ingress_domain_rebinding,omitempty" require:"true"`
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

func (s *ModifyClusterBody) SetApiServerEip(v bool) *ModifyClusterBody {
	s.ApiServerEip = &v
	return s
}

func (s *ModifyClusterBody) SetApiServerEipId(v string) *ModifyClusterBody {
	s.ApiServerEipId = &v
	return s
}

func (s *ModifyClusterBody) SetResourceGroupId(v string) *ModifyClusterBody {
	s.ResourceGroupId = &v
	return s
}

func (s *ModifyClusterBody) SetIngressDomainRebinding(v string) *ModifyClusterBody {
	s.IngressDomainRebinding = &v
	return s
}

type ModifyClusterRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
	Body    *ModifyClusterBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s ModifyClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyClusterRequest) GoString() string {
	return s.String()
}

func (s *ModifyClusterRequest) SetHeaders(v map[string]*string) *ModifyClusterRequest {
	s.Headers = v
	return s
}

func (s *ModifyClusterRequest) SetBody(v *ModifyClusterBody) *ModifyClusterRequest {
	s.Body = v
	return s
}

type ModifyClusterResponseBody struct {
	ClusterId *string `json:"cluster_id,omitempty" xml:"cluster_id,omitempty" require:"true"`
	RequestId *string `json:"request_id,omitempty" xml:"request_id,omitempty" require:"true"`
	TaskId    *string `json:"task_id,omitempty" xml:"task_id,omitempty" require:"true"`
}

func (s ModifyClusterResponseBody) String() string {
	return tea.Prettify(s)
}

func (s ModifyClusterResponseBody) GoString() string {
	return s.String()
}

func (s *ModifyClusterResponseBody) SetClusterId(v string) *ModifyClusterResponseBody {
	s.ClusterId = &v
	return s
}

func (s *ModifyClusterResponseBody) SetRequestId(v string) *ModifyClusterResponseBody {
	s.RequestId = &v
	return s
}

func (s *ModifyClusterResponseBody) SetTaskId(v string) *ModifyClusterResponseBody {
	s.TaskId = &v
	return s
}

type ModifyClusterResponse struct {
	Headers map[string]*string         `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *ModifyClusterResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s ModifyClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyClusterResponse) GoString() string {
	return s.String()
}

func (s *ModifyClusterResponse) SetHeaders(v map[string]*string) *ModifyClusterResponse {
	s.Headers = v
	return s
}

func (s *ModifyClusterResponse) SetBody(v *ModifyClusterResponseBody) *ModifyClusterResponse {
	s.Body = v
	return s
}

type InstallClusterAddonsBody struct {
	Name     *string `json:"name,omitempty" xml:"name,omitempty"`
	Version  *string `json:"version,omitempty" xml:"version,omitempty"`
	Disabled *bool   `json:"disabled,omitempty" xml:"disabled,omitempty"`
	Required *string `json:"required,omitempty" xml:"required,omitempty"`
	Config   *string `json:"config,omitempty" xml:"config,omitempty"`
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
	Headers map[string]*string        `json:"headers,omitempty" xml:"headers,omitempty"`
	Body    *InstallClusterAddonsBody `json:"body,omitempty" xml:"body,omitempty"`
}

func (s InstallClusterAddonsRequest) String() string {
	return tea.Prettify(s)
}

func (s InstallClusterAddonsRequest) GoString() string {
	return s.String()
}

func (s *InstallClusterAddonsRequest) SetHeaders(v map[string]*string) *InstallClusterAddonsRequest {
	s.Headers = v
	return s
}

func (s *InstallClusterAddonsRequest) SetBody(v *InstallClusterAddonsBody) *InstallClusterAddonsRequest {
	s.Body = v
	return s
}

type InstallClusterAddonsResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s InstallClusterAddonsResponse) String() string {
	return tea.Prettify(s)
}

func (s InstallClusterAddonsResponse) GoString() string {
	return s.String()
}

func (s *InstallClusterAddonsResponse) SetHeaders(v map[string]*string) *InstallClusterAddonsResponse {
	s.Headers = v
	return s
}

type ModifyClusterTagsBody struct {
	Key   *string `json:"key,omitempty" xml:"key,omitempty" require:"true"`
	Value *string `json:"value,omitempty" xml:"value,omitempty" require:"true"`
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
	Headers map[string]*string     `json:"headers,omitempty" xml:"headers,omitempty"`
	Body    *ModifyClusterTagsBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s ModifyClusterTagsRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyClusterTagsRequest) GoString() string {
	return s.String()
}

func (s *ModifyClusterTagsRequest) SetHeaders(v map[string]*string) *ModifyClusterTagsRequest {
	s.Headers = v
	return s
}

func (s *ModifyClusterTagsRequest) SetBody(v *ModifyClusterTagsBody) *ModifyClusterTagsRequest {
	s.Body = v
	return s
}

type ModifyClusterTagsResponseBody struct {
	RequestId *string `json:"requestId,omitempty" xml:"requestId,omitempty" require:"true"`
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
	Headers map[string]*string             `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *ModifyClusterTagsResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s ModifyClusterTagsResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyClusterTagsResponse) GoString() string {
	return s.String()
}

func (s *ModifyClusterTagsResponse) SetHeaders(v map[string]*string) *ModifyClusterTagsResponse {
	s.Headers = v
	return s
}

func (s *ModifyClusterTagsResponse) SetBody(v *ModifyClusterTagsResponseBody) *ModifyClusterTagsResponse {
	s.Body = v
	return s
}

type DescribeExternalAgentRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeExternalAgentRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeExternalAgentRequest) GoString() string {
	return s.String()
}

func (s *DescribeExternalAgentRequest) SetHeaders(v map[string]*string) *DescribeExternalAgentRequest {
	s.Headers = v
	return s
}

type DescribeExternalAgentResponseBody struct {
	Config *string `json:"config,omitempty" xml:"config,omitempty" require:"true"`
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
	Headers map[string]*string                 `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DescribeExternalAgentResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeExternalAgentResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeExternalAgentResponse) GoString() string {
	return s.String()
}

func (s *DescribeExternalAgentResponse) SetHeaders(v map[string]*string) *DescribeExternalAgentResponse {
	s.Headers = v
	return s
}

func (s *DescribeExternalAgentResponse) SetBody(v *DescribeExternalAgentResponseBody) *DescribeExternalAgentResponse {
	s.Body = v
	return s
}

type DescribeClusterAttachScriptsBody struct {
	Options *DescribeClusterAttachScriptsBodyOptions `json:"options,omitempty" xml:"options,omitempty" type:"Struct"`
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
	FlannelIface     *string `json:"flannelIface,omitempty" xml:"flannelIface,omitempty"`
	EnableIptables   *bool   `json:"enableIptables,omitempty" xml:"enableIptables,omitempty"`
	ManageRuntime    *bool   `json:"manageRuntime,omitempty" xml:"manageRuntime,omitempty"`
	NodeNameStrategy *string `json:"nodeNameStrategy,omitempty" xml:"nodeNameStrategy,omitempty"`
	NodeName         *string `json:"nodeName,omitempty" xml:"nodeName,omitempty"`
	NodeNamePrefix   *string `json:"nodeNamePrefix,omitempty" xml:"nodeNamePrefix,omitempty"`
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
	Headers map[string]*string                `json:"headers,omitempty" xml:"headers,omitempty"`
	Body    *DescribeClusterAttachScriptsBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeClusterAttachScriptsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAttachScriptsRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterAttachScriptsRequest) SetHeaders(v map[string]*string) *DescribeClusterAttachScriptsRequest {
	s.Headers = v
	return s
}

func (s *DescribeClusterAttachScriptsRequest) SetBody(v *DescribeClusterAttachScriptsBody) *DescribeClusterAttachScriptsRequest {
	s.Body = v
	return s
}

type DescribeClusterAttachScriptsResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DescribeClusterAttachScriptsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAttachScriptsResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterAttachScriptsResponse) SetHeaders(v map[string]*string) *DescribeClusterAttachScriptsResponse {
	s.Headers = v
	return s
}

type ScaleOutClusterBody struct {
	Count                    *int                                  `json:"count,omitempty" xml:"count,omitempty" require:"true"`
	WorkerInstanceChargeType *string                               `json:"worker_instance_charge_type,omitempty" xml:"worker_instance_charge_type,omitempty"`
	WorkerPeriod             *int                                  `json:"worker_period,omitempty" xml:"worker_period,omitempty"`
	WorkerPeriodUnit         *string                               `json:"worker_period_unit,omitempty" xml:"worker_period_unit,omitempty"`
	WorkerAutoRenew          *bool                                 `json:"worker_auto_renew,omitempty" xml:"worker_auto_renew,omitempty"`
	WorkerAutoRenewPeriod    *int                                  `json:"worker_auto_renew_period,omitempty" xml:"worker_auto_renew_period,omitempty"`
	WorkerSystemDiskCategory *string                               `json:"worker_system_disk_category,omitempty" xml:"worker_system_disk_category,omitempty"`
	WorkerSystemDiskSize     *int                                  `json:"worker_system_disk_size,omitempty" xml:"worker_system_disk_size,omitempty"`
	WorkerDataDisk           *bool                                 `json:"worker_data_disk,omitempty" xml:"worker_data_disk,omitempty" require:"true"`
	KeyPair                  *string                               `json:"key_pair,omitempty" xml:"key_pair,omitempty" require:"true"`
	LoginPassword            *string                               `json:"login_password,omitempty" xml:"login_password,omitempty" require:"true"`
	CloudMonitorFlags        *bool                                 `json:"cloud_monitor_flags,omitempty" xml:"cloud_monitor_flags,omitempty"`
	CpuPolicy                *string                               `json:"cpu_policy,omitempty" xml:"cpu_policy,omitempty"`
	DisableRollback          *bool                                 `json:"disable_rollback,omitempty" xml:"disable_rollback,omitempty"`
	WorkerDataDisks          []*ScaleOutClusterBodyWorkerDataDisks `json:"worker_data_disks,omitempty" xml:"worker_data_disks,omitempty" type:"Repeated"`
	Tags                     []*ScaleOutClusterBodyTags            `json:"tags,omitempty" xml:"tags,omitempty" type:"Repeated"`
	Taints                   []*ScaleOutClusterBodyTaints          `json:"taints,omitempty" xml:"taints,omitempty" type:"Repeated"`
	VswitchIds               []*string                             `json:"vswitch_ids,omitempty" xml:"vswitch_ids,omitempty" type:"Repeated"`
	WorkerInstanceTypes      []*string                             `json:"worker_instance_types,omitempty" xml:"worker_instance_types,omitempty" type:"Repeated"`
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
	Category  *string `json:"category,omitempty" xml:"category,omitempty"`
	Size      *string `json:"size,omitempty" xml:"size,omitempty"`
	Encrypted *string `json:"encrypted,omitempty" xml:"encrypted,omitempty"`
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
	Key   *string `json:"key,omitempty" xml:"key,omitempty"`
	Value *string `json:"value,omitempty" xml:"value,omitempty"`
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
	Key    *string `json:"key,omitempty" xml:"key,omitempty"`
	Value  *string `json:"value,omitempty" xml:"value,omitempty"`
	Effect *string `json:"effect,omitempty" xml:"effect,omitempty"`
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
	Headers map[string]*string   `json:"headers,omitempty" xml:"headers,omitempty"`
	Body    *ScaleOutClusterBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s ScaleOutClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s ScaleOutClusterRequest) GoString() string {
	return s.String()
}

func (s *ScaleOutClusterRequest) SetHeaders(v map[string]*string) *ScaleOutClusterRequest {
	s.Headers = v
	return s
}

func (s *ScaleOutClusterRequest) SetBody(v *ScaleOutClusterBody) *ScaleOutClusterRequest {
	s.Body = v
	return s
}

type ScaleOutClusterResponseBody struct {
	ClusterId  *string `json:"cluster_id,omitempty" xml:"cluster_id,omitempty" require:"true"`
	RequestId  *string `json:"request_id,omitempty" xml:"request_id,omitempty" require:"true"`
	TaskId     *string `json:"task_id,omitempty" xml:"task_id,omitempty" require:"true"`
	InstanceId *string `json:"instanceId,omitempty" xml:"instanceId,omitempty" require:"true"`
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
	Headers map[string]*string           `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *ScaleOutClusterResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s ScaleOutClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s ScaleOutClusterResponse) GoString() string {
	return s.String()
}

func (s *ScaleOutClusterResponse) SetHeaders(v map[string]*string) *ScaleOutClusterResponse {
	s.Headers = v
	return s
}

func (s *ScaleOutClusterResponse) SetBody(v *ScaleOutClusterResponseBody) *ScaleOutClusterResponse {
	s.Body = v
	return s
}

type DescribeClusterResourcesRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeClusterResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterResourcesRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterResourcesRequest) SetHeaders(v map[string]*string) *DescribeClusterResourcesRequest {
	s.Headers = v
	return s
}

type DescribeClusterResourcesResponseBody struct {
	InstanceId   *string `json:"instance_id,omitempty" xml:"instance_id,omitempty" require:"true"`
	ResourceType *string `json:"resource_type,omitempty" xml:"resource_type,omitempty" require:"true"`
	ResourceInfo *string `json:"resource_info,omitempty" xml:"resource_info,omitempty" require:"true"`
	State        *string `json:"state,omitempty" xml:"state,omitempty" require:"true"`
}

func (s DescribeClusterResourcesResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterResourcesResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeClusterResourcesResponseBody) SetInstanceId(v string) *DescribeClusterResourcesResponseBody {
	s.InstanceId = &v
	return s
}

func (s *DescribeClusterResourcesResponseBody) SetResourceType(v string) *DescribeClusterResourcesResponseBody {
	s.ResourceType = &v
	return s
}

func (s *DescribeClusterResourcesResponseBody) SetResourceInfo(v string) *DescribeClusterResourcesResponseBody {
	s.ResourceInfo = &v
	return s
}

func (s *DescribeClusterResourcesResponseBody) SetState(v string) *DescribeClusterResourcesResponseBody {
	s.State = &v
	return s
}

type DescribeClusterResourcesResponse struct {
	Headers map[string]*string                      `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    []*DescribeClusterResourcesResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeClusterResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterResourcesResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterResourcesResponse) SetHeaders(v map[string]*string) *DescribeClusterResourcesResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterResourcesResponse) SetBody(v []*DescribeClusterResourcesResponseBody) *DescribeClusterResourcesResponse {
	s.Body = v
	return s
}

type UpgradeClusterAddonsBody struct {
	ComponentName *string `json:"component_name,omitempty" xml:"component_name,omitempty"`
	Version       *string `json:"version,omitempty" xml:"version,omitempty"`
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
	Headers map[string]*string        `json:"headers,omitempty" xml:"headers,omitempty"`
	Body    *UpgradeClusterAddonsBody `json:"body,omitempty" xml:"body,omitempty"`
}

func (s UpgradeClusterAddonsRequest) String() string {
	return tea.Prettify(s)
}

func (s UpgradeClusterAddonsRequest) GoString() string {
	return s.String()
}

func (s *UpgradeClusterAddonsRequest) SetHeaders(v map[string]*string) *UpgradeClusterAddonsRequest {
	s.Headers = v
	return s
}

func (s *UpgradeClusterAddonsRequest) SetBody(v *UpgradeClusterAddonsBody) *UpgradeClusterAddonsRequest {
	s.Body = v
	return s
}

type UpgradeClusterAddonsResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s UpgradeClusterAddonsResponse) String() string {
	return tea.Prettify(s)
}

func (s UpgradeClusterAddonsResponse) GoString() string {
	return s.String()
}

func (s *UpgradeClusterAddonsResponse) SetHeaders(v map[string]*string) *UpgradeClusterAddonsResponse {
	s.Headers = v
	return s
}

type DescribeClusterAddonsVersionRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeClusterAddonsVersionRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAddonsVersionRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterAddonsVersionRequest) SetHeaders(v map[string]*string) *DescribeClusterAddonsVersionRequest {
	s.Headers = v
	return s
}

type DescribeClusterAddonsVersionResponseBody struct {
	Template      *string `json:"template,omitempty" xml:"template,omitempty" require:"true"`
	NextVersion   *string `json:"next_version,omitempty" xml:"next_version,omitempty" require:"true"`
	CanUpgrade    *bool   `json:"can_upgrade,omitempty" xml:"can_upgrade,omitempty" require:"true"`
	ComponentName *string `json:"component_name,omitempty" xml:"component_name,omitempty" require:"true"`
	Version       *string `json:"version,omitempty" xml:"version,omitempty" require:"true"`
	Changed       *string `json:"changed,omitempty" xml:"changed,omitempty" require:"true"`
	Message       *string `json:"message,omitempty" xml:"message,omitempty" require:"true"`
	Required      *bool   `json:"required,omitempty" xml:"required,omitempty" require:"true"`
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
	Headers map[string]*string                        `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DescribeClusterAddonsVersionResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeClusterAddonsVersionResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAddonsVersionResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterAddonsVersionResponse) SetHeaders(v map[string]*string) *DescribeClusterAddonsVersionResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterAddonsVersionResponse) SetBody(v *DescribeClusterAddonsVersionResponseBody) *DescribeClusterAddonsVersionResponse {
	s.Body = v
	return s
}

type DescribeClusterAddonUpgradeStatusRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeClusterAddonUpgradeStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAddonUpgradeStatusRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterAddonUpgradeStatusRequest) SetHeaders(v map[string]*string) *DescribeClusterAddonUpgradeStatusRequest {
	s.Headers = v
	return s
}

type DescribeClusterAddonUpgradeStatusResponseBody struct {
	Template   *string                                                 `json:"template,omitempty" xml:"template,omitempty" require:"true"`
	CanUpgrade *bool                                                   `json:"can_upgrade,omitempty" xml:"can_upgrade,omitempty" require:"true"`
	AddonInfo  *DescribeClusterAddonUpgradeStatusResponseBodyAddonInfo `json:"addon_info,omitempty" xml:"addon_info,omitempty" require:"true" type:"Struct"`
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
	Message       *string `json:"message,omitempty" xml:"message,omitempty" require:"true"`
	Category      *string `json:"category,omitempty" xml:"category,omitempty" require:"true"`
	Yaml          *string `json:"yaml,omitempty" xml:"yaml,omitempty" require:"true"`
	ComponentName *string `json:"component_name,omitempty" xml:"component_name,omitempty" require:"true"`
	Version       *string `json:"version,omitempty" xml:"version,omitempty" require:"true"`
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
	Headers map[string]*string                             `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DescribeClusterAddonUpgradeStatusResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeClusterAddonUpgradeStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterAddonUpgradeStatusResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterAddonUpgradeStatusResponse) SetHeaders(v map[string]*string) *DescribeClusterAddonUpgradeStatusResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterAddonUpgradeStatusResponse) SetBody(v *DescribeClusterAddonUpgradeStatusResponseBody) *DescribeClusterAddonUpgradeStatusResponse {
	s.Body = v
	return s
}

type DeleteClusterNodesBody struct {
	ReleaseNode *string   `json:"release_node,omitempty" xml:"release_node,omitempty"`
	Nodes       []*string `json:"nodes,omitempty" xml:"nodes,omitempty" type:"Repeated"`
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
	Headers map[string]*string      `json:"headers,omitempty" xml:"headers,omitempty"`
	Body    *DeleteClusterNodesBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DeleteClusterNodesRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteClusterNodesRequest) GoString() string {
	return s.String()
}

func (s *DeleteClusterNodesRequest) SetHeaders(v map[string]*string) *DeleteClusterNodesRequest {
	s.Headers = v
	return s
}

func (s *DeleteClusterNodesRequest) SetBody(v *DeleteClusterNodesBody) *DeleteClusterNodesRequest {
	s.Body = v
	return s
}

type DeleteClusterNodesResponseBody struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
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
	Headers map[string]*string              `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DeleteClusterNodesResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DeleteClusterNodesResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteClusterNodesResponse) GoString() string {
	return s.String()
}

func (s *DeleteClusterNodesResponse) SetHeaders(v map[string]*string) *DeleteClusterNodesResponse {
	s.Headers = v
	return s
}

func (s *DeleteClusterNodesResponse) SetBody(v *DeleteClusterNodesResponseBody) *DeleteClusterNodesResponse {
	s.Body = v
	return s
}

type DeleteTemplateRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DeleteTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteTemplateRequest) GoString() string {
	return s.String()
}

func (s *DeleteTemplateRequest) SetHeaders(v map[string]*string) *DeleteTemplateRequest {
	s.Headers = v
	return s
}

type DeleteTemplateResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DeleteTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteTemplateResponse) GoString() string {
	return s.String()
}

func (s *DeleteTemplateResponse) SetHeaders(v map[string]*string) *DeleteTemplateResponse {
	s.Headers = v
	return s
}

type DescribeClusterUserKubeconfigQuery struct {
	PrivateIpAddress *bool `json:"PrivateIpAddress,omitempty" xml:"PrivateIpAddress,omitempty"`
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
	Headers map[string]*string                  `json:"headers,omitempty" xml:"headers,omitempty"`
	Query   *DescribeClusterUserKubeconfigQuery `json:"query,omitempty" xml:"query,omitempty"`
}

func (s DescribeClusterUserKubeconfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterUserKubeconfigRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterUserKubeconfigRequest) SetHeaders(v map[string]*string) *DescribeClusterUserKubeconfigRequest {
	s.Headers = v
	return s
}

func (s *DescribeClusterUserKubeconfigRequest) SetQuery(v *DescribeClusterUserKubeconfigQuery) *DescribeClusterUserKubeconfigRequest {
	s.Query = v
	return s
}

type DescribeClusterUserKubeconfigResponseBody struct {
	Config *string `json:"config,omitempty" xml:"config,omitempty" require:"true"`
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
	Headers map[string]*string                         `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DescribeClusterUserKubeconfigResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeClusterUserKubeconfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterUserKubeconfigResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterUserKubeconfigResponse) SetHeaders(v map[string]*string) *DescribeClusterUserKubeconfigResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterUserKubeconfigResponse) SetBody(v *DescribeClusterUserKubeconfigResponseBody) *DescribeClusterUserKubeconfigResponse {
	s.Body = v
	return s
}

type DescribeClusterNodesQuery struct {
	PageSize   *string `json:"pageSize,omitempty" xml:"pageSize,omitempty"`
	PageNumber *string `json:"pageNumber,omitempty" xml:"pageNumber,omitempty"`
	NodepoolId *string `json:"nodepool_id,omitempty" xml:"nodepool_id,omitempty"`
	State      *string `json:"state,omitempty" xml:"state,omitempty"`
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
	Headers map[string]*string         `json:"headers,omitempty" xml:"headers,omitempty"`
	Query   *DescribeClusterNodesQuery `json:"query,omitempty" xml:"query,omitempty"`
}

func (s DescribeClusterNodesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterNodesRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterNodesRequest) SetHeaders(v map[string]*string) *DescribeClusterNodesRequest {
	s.Headers = v
	return s
}

func (s *DescribeClusterNodesRequest) SetQuery(v *DescribeClusterNodesQuery) *DescribeClusterNodesRequest {
	s.Query = v
	return s
}

type DescribeClusterNodesResponseBody struct {
	Nodes []*DescribeClusterNodesResponseBodyNodes `json:"nodes,omitempty" xml:"nodes,omitempty" require:"true" type:"Repeated"`
	Page  *DescribeClusterNodesResponseBodyPage    `json:"page,omitempty" xml:"page,omitempty" require:"true" type:"Struct"`
}

func (s DescribeClusterNodesResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterNodesResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeClusterNodesResponseBody) SetNodes(v []*DescribeClusterNodesResponseBodyNodes) *DescribeClusterNodesResponseBody {
	s.Nodes = v
	return s
}

func (s *DescribeClusterNodesResponseBody) SetPage(v *DescribeClusterNodesResponseBodyPage) *DescribeClusterNodesResponseBody {
	s.Page = v
	return s
}

type DescribeClusterNodesResponseBodyNodes struct {
	InstanceType       *string   `json:"instance_type,omitempty" xml:"instance_type,omitempty" require:"true"`
	InstanceRole       *string   `json:"instance_role,omitempty" xml:"instance_role,omitempty" require:"true"`
	ExpiredTime        *string   `json:"expired_time,omitempty" xml:"expired_time,omitempty" require:"true"`
	State              *string   `json:"state,omitempty" xml:"state,omitempty" require:"true"`
	InstanceName       *string   `json:"instance_name,omitempty" xml:"instance_name,omitempty" require:"true"`
	IsAliyunNode       *bool     `json:"is_aliyun_node,omitempty" xml:"is_aliyun_node,omitempty" require:"true"`
	HostName           *string   `json:"host_name,omitempty" xml:"host_name,omitempty" require:"true"`
	ImageId            *string   `json:"image_id,omitempty" xml:"image_id,omitempty" require:"true"`
	InstanceStatus     *string   `json:"instance_status,omitempty" xml:"instance_status,omitempty" require:"true"`
	InstanceChargeType *string   `json:"instance_charge_type,omitempty" xml:"instance_charge_type,omitempty" require:"true"`
	Source             *string   `json:"source,omitempty" xml:"source,omitempty" require:"true"`
	ErrorMessage       *string   `json:"error_message,omitempty" xml:"error_message,omitempty" require:"true"`
	NodeStatus         *string   `json:"node_status,omitempty" xml:"node_status,omitempty" require:"true"`
	CreationTime       *string   `json:"creation_time,omitempty" xml:"creation_time,omitempty" require:"true"`
	NodeName           *string   `json:"node_name,omitempty" xml:"node_name,omitempty" require:"true"`
	InstanceTypeFamily *string   `json:"instance_type_family,omitempty" xml:"instance_type_family,omitempty" require:"true"`
	NodepoolId         *string   `json:"nodepool_id,omitempty" xml:"nodepool_id,omitempty" require:"true"`
	InstanceId         *string   `json:"instance_id,omitempty" xml:"instance_id,omitempty" require:"true"`
	IpAddress          []*string `json:"ip_address,omitempty" xml:"ip_address,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeClusterNodesResponseBodyNodes) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterNodesResponseBodyNodes) GoString() string {
	return s.String()
}

func (s *DescribeClusterNodesResponseBodyNodes) SetInstanceType(v string) *DescribeClusterNodesResponseBodyNodes {
	s.InstanceType = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetInstanceRole(v string) *DescribeClusterNodesResponseBodyNodes {
	s.InstanceRole = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetExpiredTime(v string) *DescribeClusterNodesResponseBodyNodes {
	s.ExpiredTime = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetState(v string) *DescribeClusterNodesResponseBodyNodes {
	s.State = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetInstanceName(v string) *DescribeClusterNodesResponseBodyNodes {
	s.InstanceName = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetIsAliyunNode(v bool) *DescribeClusterNodesResponseBodyNodes {
	s.IsAliyunNode = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetHostName(v string) *DescribeClusterNodesResponseBodyNodes {
	s.HostName = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetImageId(v string) *DescribeClusterNodesResponseBodyNodes {
	s.ImageId = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetInstanceStatus(v string) *DescribeClusterNodesResponseBodyNodes {
	s.InstanceStatus = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetInstanceChargeType(v string) *DescribeClusterNodesResponseBodyNodes {
	s.InstanceChargeType = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetSource(v string) *DescribeClusterNodesResponseBodyNodes {
	s.Source = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetErrorMessage(v string) *DescribeClusterNodesResponseBodyNodes {
	s.ErrorMessage = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetNodeStatus(v string) *DescribeClusterNodesResponseBodyNodes {
	s.NodeStatus = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetCreationTime(v string) *DescribeClusterNodesResponseBodyNodes {
	s.CreationTime = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetNodeName(v string) *DescribeClusterNodesResponseBodyNodes {
	s.NodeName = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetInstanceTypeFamily(v string) *DescribeClusterNodesResponseBodyNodes {
	s.InstanceTypeFamily = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetNodepoolId(v string) *DescribeClusterNodesResponseBodyNodes {
	s.NodepoolId = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetInstanceId(v string) *DescribeClusterNodesResponseBodyNodes {
	s.InstanceId = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyNodes) SetIpAddress(v []*string) *DescribeClusterNodesResponseBodyNodes {
	s.IpAddress = v
	return s
}

type DescribeClusterNodesResponseBodyPage struct {
	PageSize   *int `json:"page_size,omitempty" xml:"page_size,omitempty" require:"true"`
	PageNumber *int `json:"page_number,omitempty" xml:"page_number,omitempty" require:"true"`
	TotalCount *int `json:"total_count,omitempty" xml:"total_count,omitempty" require:"true"`
}

func (s DescribeClusterNodesResponseBodyPage) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterNodesResponseBodyPage) GoString() string {
	return s.String()
}

func (s *DescribeClusterNodesResponseBodyPage) SetPageSize(v int) *DescribeClusterNodesResponseBodyPage {
	s.PageSize = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyPage) SetPageNumber(v int) *DescribeClusterNodesResponseBodyPage {
	s.PageNumber = &v
	return s
}

func (s *DescribeClusterNodesResponseBodyPage) SetTotalCount(v int) *DescribeClusterNodesResponseBodyPage {
	s.TotalCount = &v
	return s
}

type DescribeClusterNodesResponse struct {
	Headers map[string]*string                `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DescribeClusterNodesResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeClusterNodesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterNodesResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterNodesResponse) SetHeaders(v map[string]*string) *DescribeClusterNodesResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterNodesResponse) SetBody(v *DescribeClusterNodesResponseBody) *DescribeClusterNodesResponse {
	s.Body = v
	return s
}

type DescribeClusterLogsRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeClusterLogsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterLogsRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterLogsRequest) SetHeaders(v map[string]*string) *DescribeClusterLogsRequest {
	s.Headers = v
	return s
}

type DescribeClusterLogsResponseBody struct {
	ClusterId  *string `json:"cluster_id,omitempty" xml:"cluster_id,omitempty" require:"true"`
	ClusterLog *string `json:"cluster_log,omitempty" xml:"cluster_log,omitempty" require:"true"`
	LogLevel   *string `json:"log_level,omitempty" xml:"log_level,omitempty" require:"true"`
	Created    *string `json:"created,omitempty" xml:"created,omitempty" require:"true"`
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
	Headers map[string]*string               `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DescribeClusterLogsResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeClusterLogsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterLogsResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterLogsResponse) SetHeaders(v map[string]*string) *DescribeClusterLogsResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterLogsResponse) SetBody(v *DescribeClusterLogsResponseBody) *DescribeClusterLogsResponse {
	s.Body = v
	return s
}

type AttachInstancesBody struct {
	FormatDisk       *bool                      `json:"format_disk,omitempty" xml:"format_disk,omitempty"`
	KeepInstanceName *bool                      `json:"keep_instance_name,omitempty" xml:"keep_instance_name,omitempty"`
	CpuPolicy        *string                    `json:"cpu_policy,omitempty" xml:"cpu_policy,omitempty"`
	KeyPair          *string                    `json:"key_pair,omitempty" xml:"key_pair,omitempty" require:"true"`
	Password         *string                    `json:"password,omitempty" xml:"password,omitempty" require:"true"`
	Tags             []*AttachInstancesBodyTags `json:"tags,omitempty" xml:"tags,omitempty" type:"Repeated"`
	Instances        []*string                  `json:"instances,omitempty" xml:"instances,omitempty" type:"Repeated"`
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
	Key   *string `json:"key,omitempty" xml:"key,omitempty"`
	Value *string `json:"value,omitempty" xml:"value,omitempty"`
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
	Headers map[string]*string   `json:"headers,omitempty" xml:"headers,omitempty"`
	Body    *AttachInstancesBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s AttachInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s AttachInstancesRequest) GoString() string {
	return s.String()
}

func (s *AttachInstancesRequest) SetHeaders(v map[string]*string) *AttachInstancesRequest {
	s.Headers = v
	return s
}

func (s *AttachInstancesRequest) SetBody(v *AttachInstancesBody) *AttachInstancesRequest {
	s.Body = v
	return s
}

type AttachInstancesResponseBody struct {
	TaskId *string                            `json:"task_id,omitempty" xml:"task_id,omitempty" require:"true"`
	List   []*AttachInstancesResponseBodyList `json:"list,omitempty" xml:"list,omitempty" require:"true" type:"Repeated"`
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
	Code       *string `json:"code,omitempty" xml:"code,omitempty" require:"true"`
	InstanceId *string `json:"instanceId,omitempty" xml:"instanceId,omitempty" require:"true"`
	Message    *string `json:"message,omitempty" xml:"message,omitempty" require:"true"`
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
	Headers map[string]*string           `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *AttachInstancesResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s AttachInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s AttachInstancesResponse) GoString() string {
	return s.String()
}

func (s *AttachInstancesResponse) SetHeaders(v map[string]*string) *AttachInstancesResponse {
	s.Headers = v
	return s
}

func (s *AttachInstancesResponse) SetBody(v *AttachInstancesResponseBody) *AttachInstancesResponse {
	s.Body = v
	return s
}

type DescribeTemplatesQuery struct {
	TemplateType *string `json:"template_type,omitempty" xml:"template_type,omitempty"`
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
	Headers map[string]*string      `json:"headers,omitempty" xml:"headers,omitempty"`
	Query   *DescribeTemplatesQuery `json:"query,omitempty" xml:"query,omitempty"`
}

func (s DescribeTemplatesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeTemplatesRequest) GoString() string {
	return s.String()
}

func (s *DescribeTemplatesRequest) SetHeaders(v map[string]*string) *DescribeTemplatesRequest {
	s.Headers = v
	return s
}

func (s *DescribeTemplatesRequest) SetQuery(v *DescribeTemplatesQuery) *DescribeTemplatesRequest {
	s.Query = v
	return s
}

type DescribeTemplatesResponseBody struct {
	Template     *string `json:"template,omitempty" xml:"template,omitempty" require:"true"`
	Acl          *string `json:"acl,omitempty" xml:"acl,omitempty" require:"true"`
	Name         *string `json:"name,omitempty" xml:"name,omitempty" require:"true"`
	Tags         *string `json:"tags,omitempty" xml:"tags,omitempty" require:"true"`
	TemplateType *string `json:"template_type,omitempty" xml:"template_type,omitempty" require:"true"`
	Description  *string `json:"description,omitempty" xml:"description,omitempty" require:"true"`
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
	Headers map[string]*string             `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DescribeTemplatesResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeTemplatesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeTemplatesResponse) GoString() string {
	return s.String()
}

func (s *DescribeTemplatesResponse) SetHeaders(v map[string]*string) *DescribeTemplatesResponse {
	s.Headers = v
	return s
}

func (s *DescribeTemplatesResponse) SetBody(v *DescribeTemplatesResponseBody) *DescribeTemplatesResponse {
	s.Body = v
	return s
}

type CreateTemplateBody struct {
	Name         *string `json:"name,omitempty" xml:"name,omitempty" require:"true"`
	Template     *string `json:"template,omitempty" xml:"template,omitempty" require:"true"`
	Tags         *string `json:"tags,omitempty" xml:"tags,omitempty"`
	TemplateType *string `json:"template_type,omitempty" xml:"template_type,omitempty"`
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
	Headers map[string]*string  `json:"headers,omitempty" xml:"headers,omitempty"`
	Body    *CreateTemplateBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s CreateTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateTemplateRequest) GoString() string {
	return s.String()
}

func (s *CreateTemplateRequest) SetHeaders(v map[string]*string) *CreateTemplateRequest {
	s.Headers = v
	return s
}

func (s *CreateTemplateRequest) SetBody(v *CreateTemplateBody) *CreateTemplateRequest {
	s.Body = v
	return s
}

type CreateTemplateResponseBody struct {
	TemplateId *string `json:"template_id,omitempty" xml:"template_id,omitempty" require:"true"`
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
	Headers map[string]*string          `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *CreateTemplateResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s CreateTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateTemplateResponse) GoString() string {
	return s.String()
}

func (s *CreateTemplateResponse) SetHeaders(v map[string]*string) *CreateTemplateResponse {
	s.Headers = v
	return s
}

func (s *CreateTemplateResponse) SetBody(v *CreateTemplateResponseBody) *CreateTemplateResponse {
	s.Body = v
	return s
}

type CreateClusterBody struct {
	ClusterType              *string                             `json:"cluster_type,omitempty" xml:"cluster_type,omitempty" require:"true"`
	Name                     *string                             `json:"name,omitempty" xml:"name,omitempty" require:"true"`
	RegionId                 *string                             `json:"region_id,omitempty" xml:"region_id,omitempty" require:"true"`
	KubernetesVersion        *string                             `json:"kubernetes_version,omitempty" xml:"kubernetes_version,omitempty"`
	SnatEntry                *bool                               `json:"snat_entry,omitempty" xml:"snat_entry,omitempty" require:"true"`
	EndpointPublicAccess     *bool                               `json:"endpoint_public_access,omitempty" xml:"endpoint_public_access,omitempty"`
	SshFlags                 *bool                               `json:"ssh_flags,omitempty" xml:"ssh_flags,omitempty"`
	CloudMonitorFlags        *bool                               `json:"cloud_monitor_flags,omitempty" xml:"cloud_monitor_flags,omitempty"`
	DeletionProtection       *bool                               `json:"deletion_protection,omitempty" xml:"deletion_protection,omitempty"`
	NodeCidrMask             *string                             `json:"node_cidr_mask,omitempty" xml:"node_cidr_mask,omitempty"`
	ProxyMode                *string                             `json:"proxy_mode,omitempty" xml:"proxy_mode,omitempty"`
	OsType                   *string                             `json:"os_type,omitempty" xml:"os_type,omitempty"`
	Platform                 *string                             `json:"platform,omitempty" xml:"platform,omitempty"`
	NodePortRange            *string                             `json:"node_port_range,omitempty" xml:"node_port_range,omitempty"`
	KeyPair                  *string                             `json:"key_pair,omitempty" xml:"key_pair,omitempty" require:"true"`
	LoginPassword            *string                             `json:"login_password,omitempty" xml:"login_password,omitempty" require:"true"`
	MasterInstanceChargeType *string                             `json:"master_instance_charge_type,omitempty" xml:"master_instance_charge_type,omitempty"`
	WorkerInstanceChargeType *string                             `json:"worker_instance_charge_type,omitempty" xml:"worker_instance_charge_type,omitempty"`
	MasterPeriod             *int                                `json:"master_period,omitempty" xml:"master_period,omitempty"`
	WorkerPeriod             *int                                `json:"worker_period,omitempty" xml:"worker_period,omitempty"`
	MasterPeriodUnit         *string                             `json:"master_period_unit,omitempty" xml:"master_period_unit,omitempty"`
	WorkerPeriodUnit         *string                             `json:"worker_period_unit,omitempty" xml:"worker_period_unit,omitempty"`
	MasterAutoRenew          *bool                               `json:"master_auto_renew,omitempty" xml:"master_auto_renew,omitempty"`
	MasterAutoRenewPeriod    *int                                `json:"master_auto_renew_period,omitempty" xml:"master_auto_renew_period,omitempty"`
	WorkerAutoRenew          *bool                               `json:"worker_auto_renew,omitempty" xml:"worker_auto_renew,omitempty"`
	WorkerAutoRenewPeriod    *int                                `json:"worker_auto_renew_period,omitempty" xml:"worker_auto_renew_period,omitempty"`
	CpuPolicy                *string                             `json:"cpu_policy,omitempty" xml:"cpu_policy,omitempty"`
	MasterCount              *int                                `json:"master_count,omitempty" xml:"master_count,omitempty"`
	MasterSystemDiskCategory *string                             `json:"master_system_disk_category,omitempty" xml:"master_system_disk_category,omitempty" require:"true"`
	MasterSystemDiskSize     *int                                `json:"master_system_disk_size,omitempty" xml:"master_system_disk_size,omitempty" require:"true"`
	Runtime                  map[string]interface{}              `json:"runtime,omitempty" xml:"runtime,omitempty"`
	NumOfNodes               *int                                `json:"num_of_nodes,omitempty" xml:"num_of_nodes,omitempty" require:"true"`
	WorkerSystemDiskCategory *string                             `json:"worker_system_disk_category,omitempty" xml:"worker_system_disk_category,omitempty" require:"true"`
	WorkerSystemDiskSize     *int                                `json:"worker_system_disk_size,omitempty" xml:"worker_system_disk_size,omitempty" require:"true"`
	WorkerDataDisk           *bool                               `json:"worker_data_disk,omitempty" xml:"worker_data_disk,omitempty"`
	Vpcid                    *string                             `json:"vpcid,omitempty" xml:"vpcid,omitempty"`
	SecurityGroupId          *string                             `json:"security_group_id,omitempty" xml:"security_group_id,omitempty"`
	ContainerCidr            *string                             `json:"container_cidr,omitempty" xml:"container_cidr,omitempty"`
	ServiceCidr              *string                             `json:"service_cidr,omitempty" xml:"service_cidr,omitempty"`
	DisableRollback          *bool                               `json:"disable_rollback,omitempty" xml:"disable_rollback,omitempty"`
	TimeoutMins              *int                                `json:"timeout_mins,omitempty" xml:"timeout_mins,omitempty"`
	Tags                     []*CreateClusterBodyTags            `json:"tags,omitempty" xml:"tags,omitempty" type:"Repeated"`
	Addons                   []*CreateClusterBodyAddons          `json:"addons,omitempty" xml:"addons,omitempty" type:"Repeated"`
	Taints                   []*CreateClusterBodyTaints          `json:"taints,omitempty" xml:"taints,omitempty" type:"Repeated"`
	WorkerDataDisks          []*CreateClusterBodyWorkerDataDisks `json:"worker_data_disks,omitempty" xml:"worker_data_disks,omitempty" type:"Repeated"`
	MasterVswitchIds         []*string                           `json:"master_vswitch_ids,omitempty" xml:"master_vswitch_ids,omitempty" type:"Repeated"`
	MasterInstanceTypes      []*string                           `json:"master_instance_types,omitempty" xml:"master_instance_types,omitempty" type:"Repeated"`
	WorkerInstanceTypes      []*string                           `json:"worker_instance_types,omitempty" xml:"worker_instance_types,omitempty" type:"Repeated"`
	WorkerVswitchIds         []*string                           `json:"worker_vswitch_ids,omitempty" xml:"worker_vswitch_ids,omitempty" type:"Repeated"`
	PodVswitchIds            []*string                           `json:"pod_vswitch_ids,omitempty" xml:"pod_vswitch_ids,omitempty" type:"Repeated"`
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

func (s *CreateClusterBody) SetPodVswitchIds(v []*string) *CreateClusterBody {
	s.PodVswitchIds = v
	return s
}

type CreateClusterBodyTags struct {
	Key   *string `json:"key,omitempty" xml:"key,omitempty"`
	Value *string `json:"value,omitempty" xml:"value,omitempty"`
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
	Name     *string `json:"name,omitempty" xml:"name,omitempty"`
	Config   *string `json:"config,omitempty" xml:"config,omitempty"`
	Disabled *bool   `json:"disabled,omitempty" xml:"disabled,omitempty"`
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

func (s *CreateClusterBodyAddons) SetDisabled(v bool) *CreateClusterBodyAddons {
	s.Disabled = &v
	return s
}

type CreateClusterBodyTaints struct {
	Key    *string `json:"key,omitempty" xml:"key,omitempty"`
	Value  *string `json:"value,omitempty" xml:"value,omitempty"`
	Effect *string `json:"effect,omitempty" xml:"effect,omitempty"`
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
	Category  *string `json:"category,omitempty" xml:"category,omitempty"`
	Size      *string `json:"size,omitempty" xml:"size,omitempty"`
	Encrypted *string `json:"encrypted,omitempty" xml:"encrypted,omitempty"`
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
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
	Body    *CreateClusterBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s CreateClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateClusterRequest) GoString() string {
	return s.String()
}

func (s *CreateClusterRequest) SetHeaders(v map[string]*string) *CreateClusterRequest {
	s.Headers = v
	return s
}

func (s *CreateClusterRequest) SetBody(v *CreateClusterBody) *CreateClusterRequest {
	s.Body = v
	return s
}

type CreateClusterResponseBody struct {
	ClusterId *string `json:"cluster_id,omitempty" xml:"cluster_id,omitempty" require:"true"`
	RequestId *string `json:"request_id,omitempty" xml:"request_id,omitempty" require:"true"`
	TaskId    *string `json:"task_id,omitempty" xml:"task_id,omitempty" require:"true"`
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
	Headers map[string]*string         `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *CreateClusterResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s CreateClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateClusterResponse) GoString() string {
	return s.String()
}

func (s *CreateClusterResponse) SetHeaders(v map[string]*string) *CreateClusterResponse {
	s.Headers = v
	return s
}

func (s *CreateClusterResponse) SetBody(v *CreateClusterResponseBody) *CreateClusterResponse {
	s.Body = v
	return s
}

type ScaleClusterRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s ScaleClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s ScaleClusterRequest) GoString() string {
	return s.String()
}

func (s *ScaleClusterRequest) SetHeaders(v map[string]*string) *ScaleClusterRequest {
	s.Headers = v
	return s
}

type ScaleClusterResponseBody struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
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
	Headers map[string]*string        `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *ScaleClusterResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s ScaleClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s ScaleClusterResponse) GoString() string {
	return s.String()
}

func (s *ScaleClusterResponse) SetHeaders(v map[string]*string) *ScaleClusterResponse {
	s.Headers = v
	return s
}

func (s *ScaleClusterResponse) SetBody(v *ScaleClusterResponseBody) *ScaleClusterResponse {
	s.Body = v
	return s
}

type DescribeClustersQuery struct {
	Name        *string `json:"name,omitempty" xml:"name,omitempty"`
	ClusterType *string `json:"clusterType,omitempty" xml:"clusterType,omitempty"`
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
	Headers map[string]*string     `json:"headers,omitempty" xml:"headers,omitempty"`
	Query   *DescribeClustersQuery `json:"query,omitempty" xml:"query,omitempty"`
}

func (s DescribeClustersRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClustersRequest) GoString() string {
	return s.String()
}

func (s *DescribeClustersRequest) SetHeaders(v map[string]*string) *DescribeClustersRequest {
	s.Headers = v
	return s
}

func (s *DescribeClustersRequest) SetQuery(v *DescribeClustersQuery) *DescribeClustersRequest {
	s.Query = v
	return s
}

type DescribeClustersResponseBody struct {
	Name                   *string                             `json:"name,omitempty" xml:"name,omitempty" require:"true"`
	ClusterId              *string                             `json:"cluster_id,omitempty" xml:"cluster_id,omitempty" require:"true"`
	RegionId               *string                             `json:"region_id,omitempty" xml:"region_id,omitempty" require:"true"`
	State                  *string                             `json:"state,omitempty" xml:"state,omitempty" require:"true"`
	ClusterType            *string                             `json:"cluster_type,omitempty" xml:"cluster_type,omitempty" require:"true"`
	CurrentVersion         *string                             `json:"current_version,omitempty" xml:"current_version,omitempty" require:"true"`
	MetaData               *string                             `json:"meta_data,omitempty" xml:"meta_data,omitempty" require:"true"`
	ResourceGroupId        *string                             `json:"resource_group_id,omitempty" xml:"resource_group_id,omitempty" require:"true"`
	VpcId                  *string                             `json:"vpc_id,omitempty" xml:"vpc_id,omitempty" require:"true"`
	VswitchId              *string                             `json:"vswitch_id,omitempty" xml:"vswitch_id,omitempty" require:"true"`
	VswitchCidr            *string                             `json:"vswitch_cidr,omitempty" xml:"vswitch_cidr,omitempty" require:"true"`
	DataDiskSize           *int                                `json:"data_disk_size,omitempty" xml:"data_disk_size,omitempty" require:"true"`
	DataDiskCategory       *string                             `json:"data_disk_category,omitempty" xml:"data_disk_category,omitempty" require:"true"`
	SecurityGroupId        *string                             `json:"security_group_id,omitempty" xml:"security_group_id,omitempty" require:"true"`
	ZoneId                 *string                             `json:"zone_id,omitempty" xml:"zone_id,omitempty" require:"true"`
	NetworkMode            *string                             `json:"network_mode,omitempty" xml:"network_mode,omitempty" require:"true"`
	MasterUrl              *string                             `json:"master_url,omitempty" xml:"master_url,omitempty" require:"true"`
	DockerVersion          *string                             `json:"docker_version,omitempty" xml:"docker_version,omitempty" require:"true"`
	DeletionProtection     *bool                               `json:"deletion_protection,omitempty" xml:"deletion_protection,omitempty" require:"true"`
	ExternalLoadbalancerId *string                             `json:"external_loadbalancer_id,omitempty" xml:"external_loadbalancer_id,omitempty" require:"true"`
	Created                *string                             `json:"created,omitempty" xml:"created,omitempty" require:"true"`
	Updated                *string                             `json:"updated,omitempty" xml:"updated,omitempty" require:"true"`
	Size                   *string                             `json:"size,omitempty" xml:"size,omitempty" require:"true"`
	Tags                   []*DescribeClustersResponseBodyTags `json:"tags,omitempty" xml:"tags,omitempty" require:"true" type:"Repeated"`
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

func (s *DescribeClustersResponseBody) SetExternalLoadbalancerId(v string) *DescribeClustersResponseBody {
	s.ExternalLoadbalancerId = &v
	return s
}

func (s *DescribeClustersResponseBody) SetCreated(v string) *DescribeClustersResponseBody {
	s.Created = &v
	return s
}

func (s *DescribeClustersResponseBody) SetUpdated(v string) *DescribeClustersResponseBody {
	s.Updated = &v
	return s
}

func (s *DescribeClustersResponseBody) SetSize(v string) *DescribeClustersResponseBody {
	s.Size = &v
	return s
}

func (s *DescribeClustersResponseBody) SetTags(v []*DescribeClustersResponseBodyTags) *DescribeClustersResponseBody {
	s.Tags = v
	return s
}

type DescribeClustersResponseBodyTags struct {
	Key   *string `json:"key,omitempty" xml:"key,omitempty" require:"true"`
	Value *string `json:"value,omitempty" xml:"value,omitempty" require:"true"`
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
	Headers map[string]*string              `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    []*DescribeClustersResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeClustersResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClustersResponse) GoString() string {
	return s.String()
}

func (s *DescribeClustersResponse) SetHeaders(v map[string]*string) *DescribeClustersResponse {
	s.Headers = v
	return s
}

func (s *DescribeClustersResponse) SetBody(v []*DescribeClustersResponseBody) *DescribeClustersResponse {
	s.Body = v
	return s
}

type DescribeClusterDetailRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeClusterDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterDetailRequest) GoString() string {
	return s.String()
}

func (s *DescribeClusterDetailRequest) SetHeaders(v map[string]*string) *DescribeClusterDetailRequest {
	s.Headers = v
	return s
}

type DescribeClusterDetailResponseBody struct {
	Name                   *string                                  `json:"name,omitempty" xml:"name,omitempty" require:"true"`
	ClusterId              *string                                  `json:"cluster_id,omitempty" xml:"cluster_id,omitempty" require:"true"`
	RegionId               *string                                  `json:"region_id,omitempty" xml:"region_id,omitempty" require:"true"`
	State                  *string                                  `json:"state,omitempty" xml:"state,omitempty" require:"true"`
	ClusterType            *string                                  `json:"cluster_type,omitempty" xml:"cluster_type,omitempty" require:"true"`
	CurrentVersion         *string                                  `json:"current_version,omitempty" xml:"current_version,omitempty" require:"true"`
	MetaData               *string                                  `json:"meta_data,omitempty" xml:"meta_data,omitempty" require:"true"`
	ResourceGroupId        *string                                  `json:"resource_group_id,omitempty" xml:"resource_group_id,omitempty" require:"true"`
	InstanceType           *string                                  `json:"instance_type,omitempty" xml:"instance_type,omitempty" require:"true"`
	VpcId                  *string                                  `json:"vpc_id,omitempty" xml:"vpc_id,omitempty" require:"true"`
	VswitchId              *string                                  `json:"vswitch_id,omitempty" xml:"vswitch_id,omitempty" require:"true"`
	VswitchCidr            *string                                  `json:"vswitch_cidr,omitempty" xml:"vswitch_cidr,omitempty" require:"true"`
	SecurityGroupId        *string                                  `json:"security_group_id,omitempty" xml:"security_group_id,omitempty" require:"true"`
	ZoneId                 *string                                  `json:"zone_id,omitempty" xml:"zone_id,omitempty" require:"true"`
	NetworkMode            *string                                  `json:"network_mode,omitempty" xml:"network_mode,omitempty" require:"true"`
	DockerVersion          *string                                  `json:"docker_version,omitempty" xml:"docker_version,omitempty" require:"true"`
	DeletionProtection     *bool                                    `json:"deletion_protection,omitempty" xml:"deletion_protection,omitempty" require:"true"`
	ExternalLoadbalancerId *string                                  `json:"external_loadbalancer_id,omitempty" xml:"external_loadbalancer_id,omitempty" require:"true"`
	Created                *string                                  `json:"created,omitempty" xml:"created,omitempty" require:"true"`
	Updated                *string                                  `json:"updated,omitempty" xml:"updated,omitempty" require:"true"`
	Size                   *int                                     `json:"size,omitempty" xml:"size,omitempty" require:"true"`
	Tags                   []*DescribeClusterDetailResponseBodyTags `json:"tags,omitempty" xml:"tags,omitempty" require:"true" type:"Repeated"`
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

func (s *DescribeClusterDetailResponseBody) SetExternalLoadbalancerId(v string) *DescribeClusterDetailResponseBody {
	s.ExternalLoadbalancerId = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetCreated(v string) *DescribeClusterDetailResponseBody {
	s.Created = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetUpdated(v string) *DescribeClusterDetailResponseBody {
	s.Updated = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetSize(v int) *DescribeClusterDetailResponseBody {
	s.Size = &v
	return s
}

func (s *DescribeClusterDetailResponseBody) SetTags(v []*DescribeClusterDetailResponseBodyTags) *DescribeClusterDetailResponseBody {
	s.Tags = v
	return s
}

type DescribeClusterDetailResponseBodyTags struct {
	Key   *string `json:"key,omitempty" xml:"key,omitempty" require:"true"`
	Value *string `json:"value,omitempty" xml:"value,omitempty" require:"true"`
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
	Headers map[string]*string                 `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DescribeClusterDetailResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeClusterDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeClusterDetailResponse) GoString() string {
	return s.String()
}

func (s *DescribeClusterDetailResponse) SetHeaders(v map[string]*string) *DescribeClusterDetailResponse {
	s.Headers = v
	return s
}

func (s *DescribeClusterDetailResponse) SetBody(v *DescribeClusterDetailResponseBody) *DescribeClusterDetailResponse {
	s.Body = v
	return s
}

type DeleteClusterRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DeleteClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteClusterRequest) GoString() string {
	return s.String()
}

func (s *DeleteClusterRequest) SetHeaders(v map[string]*string) *DeleteClusterRequest {
	s.Headers = v
	return s
}

type DeleteClusterResponseBody struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
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
	Headers map[string]*string         `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DeleteClusterResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DeleteClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteClusterResponse) GoString() string {
	return s.String()
}

func (s *DeleteClusterResponse) SetHeaders(v map[string]*string) *DeleteClusterResponse {
	s.Headers = v
	return s
}

func (s *DeleteClusterResponse) SetBody(v *DeleteClusterResponseBody) *DeleteClusterResponse {
	s.Body = v
	return s
}

type DescribeApiVersionRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeApiVersionRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiVersionRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiVersionRequest) SetHeaders(v map[string]*string) *DescribeApiVersionRequest {
	s.Headers = v
	return s
}

type DescribeApiVersionResponseBody struct {
	Version              *string `json:"version,omitempty" xml:"version,omitempty" require:"true"`
	Build                *string `json:"build,omitempty" xml:"build,omitempty" require:"true"`
	DockerVersion        *string `json:"docker_version,omitempty" xml:"docker_version,omitempty" require:"true"`
	DockerRegionVersions *string `json:"docker_region_versions,omitempty" xml:"docker_region_versions,omitempty" require:"true"`
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
	Headers map[string]*string              `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DescribeApiVersionResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeApiVersionResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiVersionResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiVersionResponse) SetHeaders(v map[string]*string) *DescribeApiVersionResponse {
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
	client.EndpointRule = tea.String("regional")
	client.EndpointMap = map[string]*string{
		"ap-northeast-2-pop":          tea.String("cs.aliyuncs.com"),
		"cn-beijing-finance-1":        tea.String("cs.aliyuncs.com"),
		"cn-beijing-finance-pop":      tea.String("cs.aliyuncs.com"),
		"cn-beijing-gov-1":            tea.String("cs.aliyuncs.com"),
		"cn-beijing-nu16-b01":         tea.String("cs.aliyuncs.com"),
		"cn-edge-1":                   tea.String("cs.aliyuncs.com"),
		"cn-fujian":                   tea.String("cs.aliyuncs.com"),
		"cn-haidian-cm12-c01":         tea.String("cs.aliyuncs.com"),
		"cn-hangzhou-bj-b01":          tea.String("cs.aliyuncs.com"),
		"cn-hangzhou-finance":         tea.String("cs.aliyuncs.com"),
		"cn-hangzhou-internal-prod-1": tea.String("cs.aliyuncs.com"),
		"cn-hangzhou-internal-test-1": tea.String("cs.aliyuncs.com"),
		"cn-hangzhou-internal-test-2": tea.String("cs.aliyuncs.com"),
		"cn-hangzhou-internal-test-3": tea.String("cs.aliyuncs.com"),
		"cn-hangzhou-test-306":        tea.String("cs.aliyuncs.com"),
		"cn-hongkong-finance-pop":     tea.String("cs.aliyuncs.com"),
		"cn-huhehaote-nebula-1":       tea.String("cs.aliyuncs.com"),
		"cn-qingdao-nebula":           tea.String("cs.aliyuncs.com"),
		"cn-shanghai-et15-b01":        tea.String("cs.aliyuncs.com"),
		"cn-shanghai-et2-b01":         tea.String("cs.aliyuncs.com"),
		"cn-shanghai-finance-1":       tea.String("cs.aliyuncs.com"),
		"cn-shanghai-inner":           tea.String("cs.aliyuncs.com"),
		"cn-shanghai-internal-test-1": tea.String("cs.aliyuncs.com"),
		"cn-shenzhen-finance-1":       tea.String("cs.aliyuncs.com"),
		"cn-shenzhen-inner":           tea.String("cs.aliyuncs.com"),
		"cn-shenzhen-st4-d01":         tea.String("cs.aliyuncs.com"),
		"cn-shenzhen-su18-b01":        tea.String("cs.aliyuncs.com"),
		"cn-wuhan":                    tea.String("cs.aliyuncs.com"),
		"cn-wulanchabu":               tea.String("cs.aliyuncs.com"),
		"cn-yushanfang":               tea.String("cs.aliyuncs.com"),
		"cn-zhangbei-na61-b01":        tea.String("cs.aliyuncs.com"),
		"cn-zhangjiakou-na62-a01":     tea.String("cs.aliyuncs.com"),
		"cn-zhengzhou-nebula-1":       tea.String("cs.aliyuncs.com"),
		"eu-west-1-oxs":               tea.String("cs.aliyuncs.com"),
		"rus-west-1-pop":              tea.String("cs.aliyuncs.com"),
	}
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.EndpointHost, _err = client.GetEndpoint(tea.String("cs"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.EndpointHost)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) ListTagResourcesWithOptions(request *ListTagResourcesRequest, runtime *util.RuntimeOptions) (_result *ListTagResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListTagResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/tags"), util.StringifyMapValue(tea.ToMap(request.Query)), request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListTagResources(request *ListTagResourcesRequest) (_result *ListTagResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListTagResourcesResponse{}
	_body, _err := client.ListTagResourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ResumeComponentUpgradeWithOptions(clusterid *string, componentid *string, request *ResumeComponentUpgradeRequest, runtime *util.RuntimeOptions) (_result *ResumeComponentUpgradeResponse, _err error) {
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
	_body, _err := client.ResumeComponentUpgradeWithOptions(clusterid, componentid, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PauseComponentUpgradeWithOptions(clusterid *string, componentid *string, request *PauseComponentUpgradeRequest, runtime *util.RuntimeOptions) (_result *PauseComponentUpgradeResponse, _err error) {
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
	_body, _err := client.PauseComponentUpgradeWithOptions(clusterid, componentid, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CancelComponentUpgradeWithOptions(clusterid *string, componentid *string, request *CancelComponentUpgradeRequest, runtime *util.RuntimeOptions) (_result *CancelComponentUpgradeResponse, _err error) {
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
	_body, _err := client.CancelComponentUpgradeWithOptions(clusterid, componentid, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CancelWorkflowWithOptions(workflowName *string, request *CancelWorkflowRequest, runtime *util.RuntimeOptions) (_result *CancelWorkflowResponse, _err error) {
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
	_body, _err := client.CancelWorkflowWithOptions(workflowName, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescirbeWorkflowWithOptions(workflowName *string, request *DescirbeWorkflowRequest, runtime *util.RuntimeOptions) (_result *DescirbeWorkflowResponse, _err error) {
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
	_body, _err := client.DescirbeWorkflowWithOptions(workflowName, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RemoveWorkflowWithOptions(workflowName *string, request *RemoveWorkflowRequest, runtime *util.RuntimeOptions) (_result *RemoveWorkflowResponse, _err error) {
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
	_body, _err := client.RemoveWorkflowWithOptions(workflowName, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeWorkflowsWithOptions(request *DescribeWorkflowsRequest, runtime *util.RuntimeOptions) (_result *DescribeWorkflowsResponse, _err error) {
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
	_body, _err := client.DescribeWorkflowsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) StartWorkflowWithOptions(request *StartWorkflowRequest, runtime *util.RuntimeOptions) (_result *StartWorkflowResponse, _err error) {
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
	_body, _err := client.StartWorkflowWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UnInstallClusterAddonsWithOptions(clusterId *string, request *UnInstallClusterAddonsRequest, runtime *util.RuntimeOptions) (_result *UnInstallClusterAddonsResponse, _err error) {
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
	_body, _err := client.UnInstallClusterAddonsWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAddonsWithOptions(request *DescribeAddonsRequest, runtime *util.RuntimeOptions) (_result *DescribeAddonsResponse, _err error) {
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
	_body, _err := client.DescribeAddonsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateK8sClusterUserConfigExpireWithOptions(clusterId *string, request *UpdateK8sClusterUserConfigExpireRequest, runtime *util.RuntimeOptions) (_result *UpdateK8sClusterUserConfigExpireResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateK8sClusterUserConfigExpireResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/k8s/"+tea.StringValue(clusterId)+"/user_config/expire"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateK8sClusterUserConfigExpire(clusterId *string, request *UpdateK8sClusterUserConfigExpireRequest) (_result *UpdateK8sClusterUserConfigExpireResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateK8sClusterUserConfigExpireResponse{}
	_body, _err := client.UpdateK8sClusterUserConfigExpireWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CancelClusterUpgradeWithOptions(clusterId *string, request *CancelClusterUpgradeRequest, runtime *util.RuntimeOptions) (_result *CancelClusterUpgradeResponse, _err error) {
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
	_body, _err := client.CancelClusterUpgradeWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeUserQuotaWithOptions(request *DescribeUserQuotaRequest, runtime *util.RuntimeOptions) (_result *DescribeUserQuotaResponse, _err error) {
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
	_body, _err := client.DescribeUserQuotaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterV2UserKubeconfigWithOptions(clusterId *string, request *DescribeClusterV2UserKubeconfigRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterV2UserKubeconfigResponse, _err error) {
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
	_body, _err := client.DescribeClusterV2UserKubeconfigWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RemoveClusterNodesWithOptions(clusterId *string, request *RemoveClusterNodesRequest, runtime *util.RuntimeOptions) (_result *RemoveClusterNodesResponse, _err error) {
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
	_body, _err := client.RemoveClusterNodesWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpgradeClusterWithOptions(clusterId *string, request *UpgradeClusterRequest, runtime *util.RuntimeOptions) (_result *UpgradeClusterResponse, _err error) {
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
	_body, _err := client.UpgradeClusterWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PauseClusterUpgradeWithOptions(clusterId *string, request *PauseClusterUpgradeRequest, runtime *util.RuntimeOptions) (_result *PauseClusterUpgradeResponse, _err error) {
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
	_body, _err := client.PauseClusterUpgradeWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ResumeUpgradeClusterWithOptions(clusterId *string, request *ResumeUpgradeClusterRequest, runtime *util.RuntimeOptions) (_result *ResumeUpgradeClusterResponse, _err error) {
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
	_body, _err := client.ResumeUpgradeClusterWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetUpgradeStatusWithOptions(clusterId *string, request *GetUpgradeStatusRequest, runtime *util.RuntimeOptions) (_result *GetUpgradeStatusResponse, _err error) {
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
	_body, _err := client.GetUpgradeStatusWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyClusterWithOptions(clusterId *string, request *ModifyClusterRequest, runtime *util.RuntimeOptions) (_result *ModifyClusterResponse, _err error) {
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
	_body, _err := client.ModifyClusterWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) InstallClusterAddonsWithOptions(clusterId *string, request *InstallClusterAddonsRequest, runtime *util.RuntimeOptions) (_result *InstallClusterAddonsResponse, _err error) {
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
	_body, _err := client.InstallClusterAddonsWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyClusterTagsWithOptions(clusterId *string, request *ModifyClusterTagsRequest, runtime *util.RuntimeOptions) (_result *ModifyClusterTagsResponse, _err error) {
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
	_body, _err := client.ModifyClusterTagsWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeExternalAgentWithOptions(clusterId *string, request *DescribeExternalAgentRequest, runtime *util.RuntimeOptions) (_result *DescribeExternalAgentResponse, _err error) {
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
	_body, _err := client.DescribeExternalAgentWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterAttachScriptsWithOptions(clusterId *string, request *DescribeClusterAttachScriptsRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterAttachScriptsResponse, _err error) {
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
	_body, _err := client.DescribeClusterAttachScriptsWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ScaleOutClusterWithOptions(clusterId *string, request *ScaleOutClusterRequest, runtime *util.RuntimeOptions) (_result *ScaleOutClusterResponse, _err error) {
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
	_body, _err := client.ScaleOutClusterWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterResourcesWithOptions(clusterId *string, request *DescribeClusterResourcesRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeClusterResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("2015-12-15"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/clusters/"+tea.StringValue(clusterId)+"/resources"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeClusterResources(clusterId *string, request *DescribeClusterResourcesRequest) (_result *DescribeClusterResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeClusterResourcesResponse{}
	_body, _err := client.DescribeClusterResourcesWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpgradeClusterAddonsWithOptions(clusterId *string, request *UpgradeClusterAddonsRequest, runtime *util.RuntimeOptions) (_result *UpgradeClusterAddonsResponse, _err error) {
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
	_body, _err := client.UpgradeClusterAddonsWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterAddonsVersionWithOptions(clusterId *string, request *DescribeClusterAddonsVersionRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterAddonsVersionResponse, _err error) {
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
	_body, _err := client.DescribeClusterAddonsVersionWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterAddonUpgradeStatusWithOptions(clusterId *string, componentId *string, request *DescribeClusterAddonUpgradeStatusRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterAddonUpgradeStatusResponse, _err error) {
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
	_body, _err := client.DescribeClusterAddonUpgradeStatusWithOptions(clusterId, componentId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteClusterNodesWithOptions(clusterId *string, request *DeleteClusterNodesRequest, runtime *util.RuntimeOptions) (_result *DeleteClusterNodesResponse, _err error) {
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
	_body, _err := client.DeleteClusterNodesWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteTemplateWithOptions(templateId *string, request *DeleteTemplateRequest, runtime *util.RuntimeOptions) (_result *DeleteTemplateResponse, _err error) {
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
	_body, _err := client.DeleteTemplateWithOptions(templateId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterUserKubeconfigWithOptions(clusterId *string, request *DescribeClusterUserKubeconfigRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterUserKubeconfigResponse, _err error) {
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
	_body, _err := client.DescribeClusterUserKubeconfigWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterNodesWithOptions(clusterId *string, request *DescribeClusterNodesRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterNodesResponse, _err error) {
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
	_body, _err := client.DescribeClusterNodesWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterLogsWithOptions(clusterId *string, request *DescribeClusterLogsRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterLogsResponse, _err error) {
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
	_body, _err := client.DescribeClusterLogsWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AttachInstancesWithOptions(clusterId *string, request *AttachInstancesRequest, runtime *util.RuntimeOptions) (_result *AttachInstancesResponse, _err error) {
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
	_body, _err := client.AttachInstancesWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeTemplatesWithOptions(request *DescribeTemplatesRequest, runtime *util.RuntimeOptions) (_result *DescribeTemplatesResponse, _err error) {
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
	_body, _err := client.DescribeTemplatesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateTemplateWithOptions(request *CreateTemplateRequest, runtime *util.RuntimeOptions) (_result *CreateTemplateResponse, _err error) {
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
	_body, _err := client.CreateTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateClusterWithOptions(request *CreateClusterRequest, runtime *util.RuntimeOptions) (_result *CreateClusterResponse, _err error) {
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
	_body, _err := client.CreateClusterWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ScaleClusterWithOptions(clusterId *string, request *ScaleClusterRequest, runtime *util.RuntimeOptions) (_result *ScaleClusterResponse, _err error) {
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
	_body, _err := client.ScaleClusterWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClustersWithOptions(request *DescribeClustersRequest, runtime *util.RuntimeOptions) (_result *DescribeClustersResponse, _err error) {
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
	_body, _err := client.DescribeClustersWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeClusterDetailWithOptions(clusterId *string, request *DescribeClusterDetailRequest, runtime *util.RuntimeOptions) (_result *DescribeClusterDetailResponse, _err error) {
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
	_body, _err := client.DescribeClusterDetailWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteClusterWithOptions(clusterId *string, request *DeleteClusterRequest, runtime *util.RuntimeOptions) (_result *DeleteClusterResponse, _err error) {
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
	_body, _err := client.DeleteClusterWithOptions(clusterId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiVersionWithOptions(request *DescribeApiVersionRequest, runtime *util.RuntimeOptions) (_result *DescribeApiVersionResponse, _err error) {
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
	_body, _err := client.DescribeApiVersionWithOptions(request, runtime)
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
