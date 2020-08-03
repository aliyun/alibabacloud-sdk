// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type ListStackOperationRisksRequest struct {
	RegionId           *string   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackId            *string   `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	OperationType      *string   `json:"OperationType,omitempty" xml:"OperationType,omitempty"`
	ClientToken        *string   `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	RamRoleName        *string   `json:"RamRoleName,omitempty" xml:"RamRoleName,omitempty"`
	RetainAllResources *bool     `json:"RetainAllResources,omitempty" xml:"RetainAllResources,omitempty"`
	RetainResources    []*string `json:"RetainResources,omitempty" xml:"RetainResources,omitempty" type:"Repeated"`
}

func (s ListStackOperationRisksRequest) String() string {
	return tea.Prettify(s)
}

func (s ListStackOperationRisksRequest) GoString() string {
	return s.String()
}

func (s *ListStackOperationRisksRequest) SetRegionId(v string) *ListStackOperationRisksRequest {
	s.RegionId = &v
	return s
}

func (s *ListStackOperationRisksRequest) SetStackId(v string) *ListStackOperationRisksRequest {
	s.StackId = &v
	return s
}

func (s *ListStackOperationRisksRequest) SetOperationType(v string) *ListStackOperationRisksRequest {
	s.OperationType = &v
	return s
}

func (s *ListStackOperationRisksRequest) SetClientToken(v string) *ListStackOperationRisksRequest {
	s.ClientToken = &v
	return s
}

func (s *ListStackOperationRisksRequest) SetRamRoleName(v string) *ListStackOperationRisksRequest {
	s.RamRoleName = &v
	return s
}

func (s *ListStackOperationRisksRequest) SetRetainAllResources(v bool) *ListStackOperationRisksRequest {
	s.RetainAllResources = &v
	return s
}

func (s *ListStackOperationRisksRequest) SetRetainResources(v []*string) *ListStackOperationRisksRequest {
	s.RetainResources = v
	return s
}

type ListStackOperationRisksResponse struct {
	RequestId     *string                                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RiskResources []*ListStackOperationRisksResponseRiskResources `json:"RiskResources,omitempty" xml:"RiskResources,omitempty" require:"true" type:"Repeated"`
}

func (s ListStackOperationRisksResponse) String() string {
	return tea.Prettify(s)
}

func (s ListStackOperationRisksResponse) GoString() string {
	return s.String()
}

func (s *ListStackOperationRisksResponse) SetRequestId(v string) *ListStackOperationRisksResponse {
	s.RequestId = &v
	return s
}

func (s *ListStackOperationRisksResponse) SetRiskResources(v []*ListStackOperationRisksResponseRiskResources) *ListStackOperationRisksResponse {
	s.RiskResources = v
	return s
}

type ListStackOperationRisksResponseRiskResources struct {
	LogicalResourceId  *string `json:"LogicalResourceId,omitempty" xml:"LogicalResourceId,omitempty" require:"true"`
	PhysicalResourceId *string `json:"PhysicalResourceId,omitempty" xml:"PhysicalResourceId,omitempty" require:"true"`
	ResourceType       *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	Reason             *string `json:"Reason,omitempty" xml:"Reason,omitempty" require:"true"`
	RiskType           *string `json:"RiskType,omitempty" xml:"RiskType,omitempty" require:"true"`
	Code               *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message            *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId          *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ListStackOperationRisksResponseRiskResources) String() string {
	return tea.Prettify(s)
}

func (s ListStackOperationRisksResponseRiskResources) GoString() string {
	return s.String()
}

func (s *ListStackOperationRisksResponseRiskResources) SetLogicalResourceId(v string) *ListStackOperationRisksResponseRiskResources {
	s.LogicalResourceId = &v
	return s
}

func (s *ListStackOperationRisksResponseRiskResources) SetPhysicalResourceId(v string) *ListStackOperationRisksResponseRiskResources {
	s.PhysicalResourceId = &v
	return s
}

func (s *ListStackOperationRisksResponseRiskResources) SetResourceType(v string) *ListStackOperationRisksResponseRiskResources {
	s.ResourceType = &v
	return s
}

func (s *ListStackOperationRisksResponseRiskResources) SetReason(v string) *ListStackOperationRisksResponseRiskResources {
	s.Reason = &v
	return s
}

func (s *ListStackOperationRisksResponseRiskResources) SetRiskType(v string) *ListStackOperationRisksResponseRiskResources {
	s.RiskType = &v
	return s
}

func (s *ListStackOperationRisksResponseRiskResources) SetCode(v string) *ListStackOperationRisksResponseRiskResources {
	s.Code = &v
	return s
}

func (s *ListStackOperationRisksResponseRiskResources) SetMessage(v string) *ListStackOperationRisksResponseRiskResources {
	s.Message = &v
	return s
}

func (s *ListStackOperationRisksResponseRiskResources) SetRequestId(v string) *ListStackOperationRisksResponseRiskResources {
	s.RequestId = &v
	return s
}

type GetTemplateSummaryRequest struct {
	StackId      *string `json:"StackId,omitempty" xml:"StackId,omitempty"`
	TemplateBody *string `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty"`
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty"`
	TemplateId   *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty"`
	TemplateURL  *string `json:"TemplateURL,omitempty" xml:"TemplateURL,omitempty"`
	ChangeSetId  *string `json:"ChangeSetId,omitempty" xml:"ChangeSetId,omitempty"`
}

func (s GetTemplateSummaryRequest) String() string {
	return tea.Prettify(s)
}

func (s GetTemplateSummaryRequest) GoString() string {
	return s.String()
}

func (s *GetTemplateSummaryRequest) SetStackId(v string) *GetTemplateSummaryRequest {
	s.StackId = &v
	return s
}

func (s *GetTemplateSummaryRequest) SetTemplateBody(v string) *GetTemplateSummaryRequest {
	s.TemplateBody = &v
	return s
}

func (s *GetTemplateSummaryRequest) SetRegionId(v string) *GetTemplateSummaryRequest {
	s.RegionId = &v
	return s
}

func (s *GetTemplateSummaryRequest) SetTemplateId(v string) *GetTemplateSummaryRequest {
	s.TemplateId = &v
	return s
}

func (s *GetTemplateSummaryRequest) SetTemplateURL(v string) *GetTemplateSummaryRequest {
	s.TemplateURL = &v
	return s
}

func (s *GetTemplateSummaryRequest) SetChangeSetId(v string) *GetTemplateSummaryRequest {
	s.ChangeSetId = &v
	return s
}

type GetTemplateSummaryResponse struct {
	RequestId                   *string                                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Description                 *string                                                  `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Metadata                    map[string]interface{}                                   `json:"Metadata,omitempty" xml:"Metadata,omitempty" require:"true"`
	Version                     *string                                                  `json:"Version,omitempty" xml:"Version,omitempty" require:"true"`
	ResourceIdentifierSummaries []*GetTemplateSummaryResponseResourceIdentifierSummaries `json:"ResourceIdentifierSummaries,omitempty" xml:"ResourceIdentifierSummaries,omitempty" require:"true" type:"Repeated"`
	Parameters                  []map[string]interface{}                                 `json:"Parameters,omitempty" xml:"Parameters,omitempty" require:"true" type:"Repeated"`
	ResourceTypes               []*string                                                `json:"ResourceTypes,omitempty" xml:"ResourceTypes,omitempty" require:"true" type:"Repeated"`
}

func (s GetTemplateSummaryResponse) String() string {
	return tea.Prettify(s)
}

func (s GetTemplateSummaryResponse) GoString() string {
	return s.String()
}

func (s *GetTemplateSummaryResponse) SetRequestId(v string) *GetTemplateSummaryResponse {
	s.RequestId = &v
	return s
}

func (s *GetTemplateSummaryResponse) SetDescription(v string) *GetTemplateSummaryResponse {
	s.Description = &v
	return s
}

func (s *GetTemplateSummaryResponse) SetMetadata(v map[string]interface{}) *GetTemplateSummaryResponse {
	s.Metadata = v
	return s
}

func (s *GetTemplateSummaryResponse) SetVersion(v string) *GetTemplateSummaryResponse {
	s.Version = &v
	return s
}

func (s *GetTemplateSummaryResponse) SetResourceIdentifierSummaries(v []*GetTemplateSummaryResponseResourceIdentifierSummaries) *GetTemplateSummaryResponse {
	s.ResourceIdentifierSummaries = v
	return s
}

func (s *GetTemplateSummaryResponse) SetParameters(v []map[string]interface{}) *GetTemplateSummaryResponse {
	s.Parameters = v
	return s
}

func (s *GetTemplateSummaryResponse) SetResourceTypes(v []*string) *GetTemplateSummaryResponse {
	s.ResourceTypes = v
	return s
}

type GetTemplateSummaryResponseResourceIdentifierSummaries struct {
	ResourceType        *string   `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	LogicalResourceIds  []*string `json:"LogicalResourceIds,omitempty" xml:"LogicalResourceIds,omitempty" require:"true" type:"Repeated"`
	ResourceIdentifiers []*string `json:"ResourceIdentifiers,omitempty" xml:"ResourceIdentifiers,omitempty" require:"true" type:"Repeated"`
}

func (s GetTemplateSummaryResponseResourceIdentifierSummaries) String() string {
	return tea.Prettify(s)
}

func (s GetTemplateSummaryResponseResourceIdentifierSummaries) GoString() string {
	return s.String()
}

func (s *GetTemplateSummaryResponseResourceIdentifierSummaries) SetResourceType(v string) *GetTemplateSummaryResponseResourceIdentifierSummaries {
	s.ResourceType = &v
	return s
}

func (s *GetTemplateSummaryResponseResourceIdentifierSummaries) SetLogicalResourceIds(v []*string) *GetTemplateSummaryResponseResourceIdentifierSummaries {
	s.LogicalResourceIds = v
	return s
}

func (s *GetTemplateSummaryResponseResourceIdentifierSummaries) SetResourceIdentifiers(v []*string) *GetTemplateSummaryResponseResourceIdentifierSummaries {
	s.ResourceIdentifiers = v
	return s
}

type ListTagValuesRequest struct {
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	NextToken    *string `json:"NextToken,omitempty" xml:"NextToken,omitempty"`
	Key          *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
}

func (s ListTagValuesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListTagValuesRequest) GoString() string {
	return s.String()
}

func (s *ListTagValuesRequest) SetRegionId(v string) *ListTagValuesRequest {
	s.RegionId = &v
	return s
}

func (s *ListTagValuesRequest) SetResourceType(v string) *ListTagValuesRequest {
	s.ResourceType = &v
	return s
}

func (s *ListTagValuesRequest) SetNextToken(v string) *ListTagValuesRequest {
	s.NextToken = &v
	return s
}

func (s *ListTagValuesRequest) SetKey(v string) *ListTagValuesRequest {
	s.Key = &v
	return s
}

type ListTagValuesResponse struct {
	RequestId *string   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NextToken *string   `json:"NextToken,omitempty" xml:"NextToken,omitempty" require:"true"`
	Values    []*string `json:"Values,omitempty" xml:"Values,omitempty" require:"true" type:"Repeated"`
}

func (s ListTagValuesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListTagValuesResponse) GoString() string {
	return s.String()
}

func (s *ListTagValuesResponse) SetRequestId(v string) *ListTagValuesResponse {
	s.RequestId = &v
	return s
}

func (s *ListTagValuesResponse) SetNextToken(v string) *ListTagValuesResponse {
	s.NextToken = &v
	return s
}

func (s *ListTagValuesResponse) SetValues(v []*string) *ListTagValuesResponse {
	s.Values = v
	return s
}

type ListTagKeysRequest struct {
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	NextToken    *string `json:"NextToken,omitempty" xml:"NextToken,omitempty"`
}

func (s ListTagKeysRequest) String() string {
	return tea.Prettify(s)
}

func (s ListTagKeysRequest) GoString() string {
	return s.String()
}

func (s *ListTagKeysRequest) SetRegionId(v string) *ListTagKeysRequest {
	s.RegionId = &v
	return s
}

func (s *ListTagKeysRequest) SetResourceType(v string) *ListTagKeysRequest {
	s.ResourceType = &v
	return s
}

func (s *ListTagKeysRequest) SetNextToken(v string) *ListTagKeysRequest {
	s.NextToken = &v
	return s
}

type ListTagKeysResponse struct {
	RequestId *string   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NextToken *string   `json:"NextToken,omitempty" xml:"NextToken,omitempty" require:"true"`
	Keys      []*string `json:"Keys,omitempty" xml:"Keys,omitempty" require:"true" type:"Repeated"`
}

func (s ListTagKeysResponse) String() string {
	return tea.Prettify(s)
}

func (s ListTagKeysResponse) GoString() string {
	return s.String()
}

func (s *ListTagKeysResponse) SetRequestId(v string) *ListTagKeysResponse {
	s.RequestId = &v
	return s
}

func (s *ListTagKeysResponse) SetNextToken(v string) *ListTagKeysResponse {
	s.NextToken = &v
	return s
}

func (s *ListTagKeysResponse) SetKeys(v []*string) *ListTagKeysResponse {
	s.Keys = v
	return s
}

type SetDeletionProtectionRequest struct {
	StackId            *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	DeletionProtection *string `json:"DeletionProtection,omitempty" xml:"DeletionProtection,omitempty" require:"true"`
	RegionId           *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s SetDeletionProtectionRequest) String() string {
	return tea.Prettify(s)
}

func (s SetDeletionProtectionRequest) GoString() string {
	return s.String()
}

func (s *SetDeletionProtectionRequest) SetStackId(v string) *SetDeletionProtectionRequest {
	s.StackId = &v
	return s
}

func (s *SetDeletionProtectionRequest) SetDeletionProtection(v string) *SetDeletionProtectionRequest {
	s.DeletionProtection = &v
	return s
}

func (s *SetDeletionProtectionRequest) SetRegionId(v string) *SetDeletionProtectionRequest {
	s.RegionId = &v
	return s
}

type SetDeletionProtectionResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetDeletionProtectionResponse) String() string {
	return tea.Prettify(s)
}

func (s SetDeletionProtectionResponse) GoString() string {
	return s.String()
}

func (s *SetDeletionProtectionResponse) SetRequestId(v string) *SetDeletionProtectionResponse {
	s.RequestId = &v
	return s
}

type UpdateStackTemplateByResourcesRequest struct {
	StackId           *string   `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	DryRun            *bool     `json:"DryRun,omitempty" xml:"DryRun,omitempty"`
	RegionId          *string   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ClientToken       *string   `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	TemplateFormat    *string   `json:"TemplateFormat,omitempty" xml:"TemplateFormat,omitempty"`
	LogicalResourceId []*string `json:"LogicalResourceId,omitempty" xml:"LogicalResourceId,omitempty" type:"Repeated"`
}

func (s UpdateStackTemplateByResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateStackTemplateByResourcesRequest) GoString() string {
	return s.String()
}

func (s *UpdateStackTemplateByResourcesRequest) SetStackId(v string) *UpdateStackTemplateByResourcesRequest {
	s.StackId = &v
	return s
}

func (s *UpdateStackTemplateByResourcesRequest) SetDryRun(v bool) *UpdateStackTemplateByResourcesRequest {
	s.DryRun = &v
	return s
}

func (s *UpdateStackTemplateByResourcesRequest) SetRegionId(v string) *UpdateStackTemplateByResourcesRequest {
	s.RegionId = &v
	return s
}

func (s *UpdateStackTemplateByResourcesRequest) SetClientToken(v string) *UpdateStackTemplateByResourcesRequest {
	s.ClientToken = &v
	return s
}

func (s *UpdateStackTemplateByResourcesRequest) SetTemplateFormat(v string) *UpdateStackTemplateByResourcesRequest {
	s.TemplateFormat = &v
	return s
}

func (s *UpdateStackTemplateByResourcesRequest) SetLogicalResourceId(v []*string) *UpdateStackTemplateByResourcesRequest {
	s.LogicalResourceId = v
	return s
}

type UpdateStackTemplateByResourcesResponse struct {
	RequestId       *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	OldTemplateBody *string `json:"OldTemplateBody,omitempty" xml:"OldTemplateBody,omitempty" require:"true"`
	NewTemplateBody *string `json:"NewTemplateBody,omitempty" xml:"NewTemplateBody,omitempty" require:"true"`
}

func (s UpdateStackTemplateByResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateStackTemplateByResourcesResponse) GoString() string {
	return s.String()
}

func (s *UpdateStackTemplateByResourcesResponse) SetRequestId(v string) *UpdateStackTemplateByResourcesResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateStackTemplateByResourcesResponse) SetOldTemplateBody(v string) *UpdateStackTemplateByResourcesResponse {
	s.OldTemplateBody = &v
	return s
}

func (s *UpdateStackTemplateByResourcesResponse) SetNewTemplateBody(v string) *UpdateStackTemplateByResourcesResponse {
	s.NewTemplateBody = &v
	return s
}

type GetStackDriftDetectionStatusRequest struct {
	RegionId         *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	DriftDetectionId *string `json:"DriftDetectionId,omitempty" xml:"DriftDetectionId,omitempty" require:"true"`
}

func (s GetStackDriftDetectionStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s GetStackDriftDetectionStatusRequest) GoString() string {
	return s.String()
}

func (s *GetStackDriftDetectionStatusRequest) SetRegionId(v string) *GetStackDriftDetectionStatusRequest {
	s.RegionId = &v
	return s
}

func (s *GetStackDriftDetectionStatusRequest) SetDriftDetectionId(v string) *GetStackDriftDetectionStatusRequest {
	s.DriftDetectionId = &v
	return s
}

type GetStackDriftDetectionStatusResponse struct {
	RequestId                  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DriftDetectionId           *string `json:"DriftDetectionId,omitempty" xml:"DriftDetectionId,omitempty" require:"true"`
	DriftDetectionTime         *string `json:"DriftDetectionTime,omitempty" xml:"DriftDetectionTime,omitempty" require:"true"`
	DriftDetectionStatus       *string `json:"DriftDetectionStatus,omitempty" xml:"DriftDetectionStatus,omitempty" require:"true"`
	DriftDetectionStatusReason *string `json:"DriftDetectionStatusReason,omitempty" xml:"DriftDetectionStatusReason,omitempty" require:"true"`
	StackDriftStatus           *string `json:"StackDriftStatus,omitempty" xml:"StackDriftStatus,omitempty" require:"true"`
	StackId                    *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	DriftedStackResourceCount  *int    `json:"DriftedStackResourceCount,omitempty" xml:"DriftedStackResourceCount,omitempty" require:"true"`
}

func (s GetStackDriftDetectionStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s GetStackDriftDetectionStatusResponse) GoString() string {
	return s.String()
}

func (s *GetStackDriftDetectionStatusResponse) SetRequestId(v string) *GetStackDriftDetectionStatusResponse {
	s.RequestId = &v
	return s
}

func (s *GetStackDriftDetectionStatusResponse) SetDriftDetectionId(v string) *GetStackDriftDetectionStatusResponse {
	s.DriftDetectionId = &v
	return s
}

func (s *GetStackDriftDetectionStatusResponse) SetDriftDetectionTime(v string) *GetStackDriftDetectionStatusResponse {
	s.DriftDetectionTime = &v
	return s
}

func (s *GetStackDriftDetectionStatusResponse) SetDriftDetectionStatus(v string) *GetStackDriftDetectionStatusResponse {
	s.DriftDetectionStatus = &v
	return s
}

func (s *GetStackDriftDetectionStatusResponse) SetDriftDetectionStatusReason(v string) *GetStackDriftDetectionStatusResponse {
	s.DriftDetectionStatusReason = &v
	return s
}

func (s *GetStackDriftDetectionStatusResponse) SetStackDriftStatus(v string) *GetStackDriftDetectionStatusResponse {
	s.StackDriftStatus = &v
	return s
}

func (s *GetStackDriftDetectionStatusResponse) SetStackId(v string) *GetStackDriftDetectionStatusResponse {
	s.StackId = &v
	return s
}

func (s *GetStackDriftDetectionStatusResponse) SetDriftedStackResourceCount(v int) *GetStackDriftDetectionStatusResponse {
	s.DriftedStackResourceCount = &v
	return s
}

type DetectStackGroupDriftRequest struct {
	ClientToken          *string                `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	RegionId             *string                `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackGroupName       *string                `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	OperationPreferences map[string]interface{} `json:"OperationPreferences,omitempty" xml:"OperationPreferences,omitempty"`
}

func (s DetectStackGroupDriftRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectStackGroupDriftRequest) GoString() string {
	return s.String()
}

func (s *DetectStackGroupDriftRequest) SetClientToken(v string) *DetectStackGroupDriftRequest {
	s.ClientToken = &v
	return s
}

func (s *DetectStackGroupDriftRequest) SetRegionId(v string) *DetectStackGroupDriftRequest {
	s.RegionId = &v
	return s
}

func (s *DetectStackGroupDriftRequest) SetStackGroupName(v string) *DetectStackGroupDriftRequest {
	s.StackGroupName = &v
	return s
}

func (s *DetectStackGroupDriftRequest) SetOperationPreferences(v map[string]interface{}) *DetectStackGroupDriftRequest {
	s.OperationPreferences = v
	return s
}

type DetectStackGroupDriftResponse struct {
	RequestId   *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	OperationId *string `json:"OperationId,omitempty" xml:"OperationId,omitempty" require:"true"`
}

func (s DetectStackGroupDriftResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectStackGroupDriftResponse) GoString() string {
	return s.String()
}

func (s *DetectStackGroupDriftResponse) SetRequestId(v string) *DetectStackGroupDriftResponse {
	s.RequestId = &v
	return s
}

func (s *DetectStackGroupDriftResponse) SetOperationId(v string) *DetectStackGroupDriftResponse {
	s.OperationId = &v
	return s
}

type ListStackResourceDriftsRequest struct {
	StackId             *string   `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	RegionId            *string   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	MaxResults          *int64    `json:"MaxResults,omitempty" xml:"MaxResults,omitempty"`
	ResourceDriftStatus []*string `json:"ResourceDriftStatus,omitempty" xml:"ResourceDriftStatus,omitempty" type:"Repeated"`
	NextToken           *string   `json:"NextToken,omitempty" xml:"NextToken,omitempty"`
}

func (s ListStackResourceDriftsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListStackResourceDriftsRequest) GoString() string {
	return s.String()
}

func (s *ListStackResourceDriftsRequest) SetStackId(v string) *ListStackResourceDriftsRequest {
	s.StackId = &v
	return s
}

func (s *ListStackResourceDriftsRequest) SetRegionId(v string) *ListStackResourceDriftsRequest {
	s.RegionId = &v
	return s
}

func (s *ListStackResourceDriftsRequest) SetMaxResults(v int64) *ListStackResourceDriftsRequest {
	s.MaxResults = &v
	return s
}

func (s *ListStackResourceDriftsRequest) SetResourceDriftStatus(v []*string) *ListStackResourceDriftsRequest {
	s.ResourceDriftStatus = v
	return s
}

func (s *ListStackResourceDriftsRequest) SetNextToken(v string) *ListStackResourceDriftsRequest {
	s.NextToken = &v
	return s
}

type ListStackResourceDriftsResponse struct {
	RequestId      *string                                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NextToken      *string                                          `json:"NextToken,omitempty" xml:"NextToken,omitempty" require:"true"`
	ResourceDrifts []*ListStackResourceDriftsResponseResourceDrifts `json:"ResourceDrifts,omitempty" xml:"ResourceDrifts,omitempty" require:"true" type:"Repeated"`
}

func (s ListStackResourceDriftsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListStackResourceDriftsResponse) GoString() string {
	return s.String()
}

func (s *ListStackResourceDriftsResponse) SetRequestId(v string) *ListStackResourceDriftsResponse {
	s.RequestId = &v
	return s
}

func (s *ListStackResourceDriftsResponse) SetNextToken(v string) *ListStackResourceDriftsResponse {
	s.NextToken = &v
	return s
}

func (s *ListStackResourceDriftsResponse) SetResourceDrifts(v []*ListStackResourceDriftsResponseResourceDrifts) *ListStackResourceDriftsResponse {
	s.ResourceDrifts = v
	return s
}

type ListStackResourceDriftsResponseResourceDrifts struct {
	DriftDetectionTime  *string                                                             `json:"DriftDetectionTime,omitempty" xml:"DriftDetectionTime,omitempty" require:"true"`
	ResourceDriftStatus *string                                                             `json:"ResourceDriftStatus,omitempty" xml:"ResourceDriftStatus,omitempty" require:"true"`
	StackId             *string                                                             `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	ResourceType        *string                                                             `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	PhysicalResourceId  *string                                                             `json:"PhysicalResourceId,omitempty" xml:"PhysicalResourceId,omitempty" require:"true"`
	LogicalResourceId   *string                                                             `json:"LogicalResourceId,omitempty" xml:"LogicalResourceId,omitempty" require:"true"`
	ActualProperties    *string                                                             `json:"ActualProperties,omitempty" xml:"ActualProperties,omitempty" require:"true"`
	ExpectedProperties  *string                                                             `json:"ExpectedProperties,omitempty" xml:"ExpectedProperties,omitempty" require:"true"`
	PropertyDifferences []*ListStackResourceDriftsResponseResourceDriftsPropertyDifferences `json:"PropertyDifferences,omitempty" xml:"PropertyDifferences,omitempty" require:"true" type:"Repeated"`
}

func (s ListStackResourceDriftsResponseResourceDrifts) String() string {
	return tea.Prettify(s)
}

func (s ListStackResourceDriftsResponseResourceDrifts) GoString() string {
	return s.String()
}

func (s *ListStackResourceDriftsResponseResourceDrifts) SetDriftDetectionTime(v string) *ListStackResourceDriftsResponseResourceDrifts {
	s.DriftDetectionTime = &v
	return s
}

func (s *ListStackResourceDriftsResponseResourceDrifts) SetResourceDriftStatus(v string) *ListStackResourceDriftsResponseResourceDrifts {
	s.ResourceDriftStatus = &v
	return s
}

func (s *ListStackResourceDriftsResponseResourceDrifts) SetStackId(v string) *ListStackResourceDriftsResponseResourceDrifts {
	s.StackId = &v
	return s
}

func (s *ListStackResourceDriftsResponseResourceDrifts) SetResourceType(v string) *ListStackResourceDriftsResponseResourceDrifts {
	s.ResourceType = &v
	return s
}

func (s *ListStackResourceDriftsResponseResourceDrifts) SetPhysicalResourceId(v string) *ListStackResourceDriftsResponseResourceDrifts {
	s.PhysicalResourceId = &v
	return s
}

func (s *ListStackResourceDriftsResponseResourceDrifts) SetLogicalResourceId(v string) *ListStackResourceDriftsResponseResourceDrifts {
	s.LogicalResourceId = &v
	return s
}

func (s *ListStackResourceDriftsResponseResourceDrifts) SetActualProperties(v string) *ListStackResourceDriftsResponseResourceDrifts {
	s.ActualProperties = &v
	return s
}

func (s *ListStackResourceDriftsResponseResourceDrifts) SetExpectedProperties(v string) *ListStackResourceDriftsResponseResourceDrifts {
	s.ExpectedProperties = &v
	return s
}

func (s *ListStackResourceDriftsResponseResourceDrifts) SetPropertyDifferences(v []*ListStackResourceDriftsResponseResourceDriftsPropertyDifferences) *ListStackResourceDriftsResponseResourceDrifts {
	s.PropertyDifferences = v
	return s
}

type ListStackResourceDriftsResponseResourceDriftsPropertyDifferences struct {
	PropertyPath   *string `json:"PropertyPath,omitempty" xml:"PropertyPath,omitempty" require:"true"`
	ActualValue    *string `json:"ActualValue,omitempty" xml:"ActualValue,omitempty" require:"true"`
	ExpectedValue  *string `json:"ExpectedValue,omitempty" xml:"ExpectedValue,omitempty" require:"true"`
	DifferenceType *string `json:"DifferenceType,omitempty" xml:"DifferenceType,omitempty" require:"true"`
}

func (s ListStackResourceDriftsResponseResourceDriftsPropertyDifferences) String() string {
	return tea.Prettify(s)
}

func (s ListStackResourceDriftsResponseResourceDriftsPropertyDifferences) GoString() string {
	return s.String()
}

func (s *ListStackResourceDriftsResponseResourceDriftsPropertyDifferences) SetPropertyPath(v string) *ListStackResourceDriftsResponseResourceDriftsPropertyDifferences {
	s.PropertyPath = &v
	return s
}

func (s *ListStackResourceDriftsResponseResourceDriftsPropertyDifferences) SetActualValue(v string) *ListStackResourceDriftsResponseResourceDriftsPropertyDifferences {
	s.ActualValue = &v
	return s
}

func (s *ListStackResourceDriftsResponseResourceDriftsPropertyDifferences) SetExpectedValue(v string) *ListStackResourceDriftsResponseResourceDriftsPropertyDifferences {
	s.ExpectedValue = &v
	return s
}

func (s *ListStackResourceDriftsResponseResourceDriftsPropertyDifferences) SetDifferenceType(v string) *ListStackResourceDriftsResponseResourceDriftsPropertyDifferences {
	s.DifferenceType = &v
	return s
}

type DetectStackResourceDriftRequest struct {
	StackId           *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	ClientToken       *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	RegionId          *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	LogicalResourceId *string `json:"LogicalResourceId,omitempty" xml:"LogicalResourceId,omitempty" require:"true"`
}

func (s DetectStackResourceDriftRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectStackResourceDriftRequest) GoString() string {
	return s.String()
}

func (s *DetectStackResourceDriftRequest) SetStackId(v string) *DetectStackResourceDriftRequest {
	s.StackId = &v
	return s
}

func (s *DetectStackResourceDriftRequest) SetClientToken(v string) *DetectStackResourceDriftRequest {
	s.ClientToken = &v
	return s
}

func (s *DetectStackResourceDriftRequest) SetRegionId(v string) *DetectStackResourceDriftRequest {
	s.RegionId = &v
	return s
}

func (s *DetectStackResourceDriftRequest) SetLogicalResourceId(v string) *DetectStackResourceDriftRequest {
	s.LogicalResourceId = &v
	return s
}

type DetectStackResourceDriftResponse struct {
	RequestId           *string                                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DriftDetectionTime  *string                                                `json:"DriftDetectionTime,omitempty" xml:"DriftDetectionTime,omitempty" require:"true"`
	ResourceDriftStatus *string                                                `json:"ResourceDriftStatus,omitempty" xml:"ResourceDriftStatus,omitempty" require:"true"`
	StackId             *string                                                `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	ResourceType        *string                                                `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	PhysicalResourceId  *string                                                `json:"PhysicalResourceId,omitempty" xml:"PhysicalResourceId,omitempty" require:"true"`
	LogicalResourceId   *string                                                `json:"LogicalResourceId,omitempty" xml:"LogicalResourceId,omitempty" require:"true"`
	ActualProperties    *string                                                `json:"ActualProperties,omitempty" xml:"ActualProperties,omitempty" require:"true"`
	ExpectedProperties  *string                                                `json:"ExpectedProperties,omitempty" xml:"ExpectedProperties,omitempty" require:"true"`
	PropertyDifferences []*DetectStackResourceDriftResponsePropertyDifferences `json:"PropertyDifferences,omitempty" xml:"PropertyDifferences,omitempty" require:"true" type:"Repeated"`
}

func (s DetectStackResourceDriftResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectStackResourceDriftResponse) GoString() string {
	return s.String()
}

func (s *DetectStackResourceDriftResponse) SetRequestId(v string) *DetectStackResourceDriftResponse {
	s.RequestId = &v
	return s
}

func (s *DetectStackResourceDriftResponse) SetDriftDetectionTime(v string) *DetectStackResourceDriftResponse {
	s.DriftDetectionTime = &v
	return s
}

func (s *DetectStackResourceDriftResponse) SetResourceDriftStatus(v string) *DetectStackResourceDriftResponse {
	s.ResourceDriftStatus = &v
	return s
}

func (s *DetectStackResourceDriftResponse) SetStackId(v string) *DetectStackResourceDriftResponse {
	s.StackId = &v
	return s
}

func (s *DetectStackResourceDriftResponse) SetResourceType(v string) *DetectStackResourceDriftResponse {
	s.ResourceType = &v
	return s
}

func (s *DetectStackResourceDriftResponse) SetPhysicalResourceId(v string) *DetectStackResourceDriftResponse {
	s.PhysicalResourceId = &v
	return s
}

func (s *DetectStackResourceDriftResponse) SetLogicalResourceId(v string) *DetectStackResourceDriftResponse {
	s.LogicalResourceId = &v
	return s
}

func (s *DetectStackResourceDriftResponse) SetActualProperties(v string) *DetectStackResourceDriftResponse {
	s.ActualProperties = &v
	return s
}

func (s *DetectStackResourceDriftResponse) SetExpectedProperties(v string) *DetectStackResourceDriftResponse {
	s.ExpectedProperties = &v
	return s
}

func (s *DetectStackResourceDriftResponse) SetPropertyDifferences(v []*DetectStackResourceDriftResponsePropertyDifferences) *DetectStackResourceDriftResponse {
	s.PropertyDifferences = v
	return s
}

type DetectStackResourceDriftResponsePropertyDifferences struct {
	PropertyPath   *string `json:"PropertyPath,omitempty" xml:"PropertyPath,omitempty" require:"true"`
	ActualValue    *string `json:"ActualValue,omitempty" xml:"ActualValue,omitempty" require:"true"`
	ExpectedValue  *string `json:"ExpectedValue,omitempty" xml:"ExpectedValue,omitempty" require:"true"`
	DifferenceType *string `json:"DifferenceType,omitempty" xml:"DifferenceType,omitempty" require:"true"`
}

func (s DetectStackResourceDriftResponsePropertyDifferences) String() string {
	return tea.Prettify(s)
}

func (s DetectStackResourceDriftResponsePropertyDifferences) GoString() string {
	return s.String()
}

func (s *DetectStackResourceDriftResponsePropertyDifferences) SetPropertyPath(v string) *DetectStackResourceDriftResponsePropertyDifferences {
	s.PropertyPath = &v
	return s
}

func (s *DetectStackResourceDriftResponsePropertyDifferences) SetActualValue(v string) *DetectStackResourceDriftResponsePropertyDifferences {
	s.ActualValue = &v
	return s
}

func (s *DetectStackResourceDriftResponsePropertyDifferences) SetExpectedValue(v string) *DetectStackResourceDriftResponsePropertyDifferences {
	s.ExpectedValue = &v
	return s
}

func (s *DetectStackResourceDriftResponsePropertyDifferences) SetDifferenceType(v string) *DetectStackResourceDriftResponsePropertyDifferences {
	s.DifferenceType = &v
	return s
}

type DetectStackDriftRequest struct {
	StackId           *string   `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	RegionId          *string   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	LogicalResourceId []*string `json:"LogicalResourceId,omitempty" xml:"LogicalResourceId,omitempty" type:"Repeated"`
	ClientToken       *string   `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
}

func (s DetectStackDriftRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectStackDriftRequest) GoString() string {
	return s.String()
}

func (s *DetectStackDriftRequest) SetStackId(v string) *DetectStackDriftRequest {
	s.StackId = &v
	return s
}

func (s *DetectStackDriftRequest) SetRegionId(v string) *DetectStackDriftRequest {
	s.RegionId = &v
	return s
}

func (s *DetectStackDriftRequest) SetLogicalResourceId(v []*string) *DetectStackDriftRequest {
	s.LogicalResourceId = v
	return s
}

func (s *DetectStackDriftRequest) SetClientToken(v string) *DetectStackDriftRequest {
	s.ClientToken = &v
	return s
}

type DetectStackDriftResponse struct {
	RequestId        *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DriftDetectionId *string `json:"DriftDetectionId,omitempty" xml:"DriftDetectionId,omitempty" require:"true"`
}

func (s DetectStackDriftResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectStackDriftResponse) GoString() string {
	return s.String()
}

func (s *DetectStackDriftResponse) SetRequestId(v string) *DetectStackDriftResponse {
	s.RequestId = &v
	return s
}

func (s *DetectStackDriftResponse) SetDriftDetectionId(v string) *DetectStackDriftResponse {
	s.DriftDetectionId = &v
	return s
}

type UpdateStackInstancesRequest struct {
	RegionId             *string                                          `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackGroupName       *string                                          `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	ParameterOverrides   []*UpdateStackInstancesRequestParameterOverrides `json:"ParameterOverrides,omitempty" xml:"ParameterOverrides,omitempty" type:"Repeated"`
	AccountIds           map[string]interface{}                           `json:"AccountIds,omitempty" xml:"AccountIds,omitempty" require:"true"`
	RegionIds            map[string]interface{}                           `json:"RegionIds,omitempty" xml:"RegionIds,omitempty" require:"true"`
	ClientToken          *string                                          `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	OperationDescription *string                                          `json:"OperationDescription,omitempty" xml:"OperationDescription,omitempty"`
	OperationPreferences map[string]interface{}                           `json:"OperationPreferences,omitempty" xml:"OperationPreferences,omitempty"`
}

func (s UpdateStackInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateStackInstancesRequest) GoString() string {
	return s.String()
}

func (s *UpdateStackInstancesRequest) SetRegionId(v string) *UpdateStackInstancesRequest {
	s.RegionId = &v
	return s
}

func (s *UpdateStackInstancesRequest) SetStackGroupName(v string) *UpdateStackInstancesRequest {
	s.StackGroupName = &v
	return s
}

func (s *UpdateStackInstancesRequest) SetParameterOverrides(v []*UpdateStackInstancesRequestParameterOverrides) *UpdateStackInstancesRequest {
	s.ParameterOverrides = v
	return s
}

func (s *UpdateStackInstancesRequest) SetAccountIds(v map[string]interface{}) *UpdateStackInstancesRequest {
	s.AccountIds = v
	return s
}

func (s *UpdateStackInstancesRequest) SetRegionIds(v map[string]interface{}) *UpdateStackInstancesRequest {
	s.RegionIds = v
	return s
}

func (s *UpdateStackInstancesRequest) SetClientToken(v string) *UpdateStackInstancesRequest {
	s.ClientToken = &v
	return s
}

func (s *UpdateStackInstancesRequest) SetOperationDescription(v string) *UpdateStackInstancesRequest {
	s.OperationDescription = &v
	return s
}

func (s *UpdateStackInstancesRequest) SetOperationPreferences(v map[string]interface{}) *UpdateStackInstancesRequest {
	s.OperationPreferences = v
	return s
}

type UpdateStackInstancesRequestParameterOverrides struct {
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
}

func (s UpdateStackInstancesRequestParameterOverrides) String() string {
	return tea.Prettify(s)
}

func (s UpdateStackInstancesRequestParameterOverrides) GoString() string {
	return s.String()
}

func (s *UpdateStackInstancesRequestParameterOverrides) SetParameterValue(v string) *UpdateStackInstancesRequestParameterOverrides {
	s.ParameterValue = &v
	return s
}

func (s *UpdateStackInstancesRequestParameterOverrides) SetParameterKey(v string) *UpdateStackInstancesRequestParameterOverrides {
	s.ParameterKey = &v
	return s
}

type UpdateStackInstancesResponse struct {
	RequestId   *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	OperationId *string `json:"OperationId,omitempty" xml:"OperationId,omitempty" require:"true"`
}

func (s UpdateStackInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateStackInstancesResponse) GoString() string {
	return s.String()
}

func (s *UpdateStackInstancesResponse) SetRequestId(v string) *UpdateStackInstancesResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateStackInstancesResponse) SetOperationId(v string) *UpdateStackInstancesResponse {
	s.OperationId = &v
	return s
}

type ListStackGroupOperationsRequest struct {
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackGroupName *string `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	PageSize       *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber     *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s ListStackGroupOperationsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListStackGroupOperationsRequest) GoString() string {
	return s.String()
}

func (s *ListStackGroupOperationsRequest) SetRegionId(v string) *ListStackGroupOperationsRequest {
	s.RegionId = &v
	return s
}

func (s *ListStackGroupOperationsRequest) SetStackGroupName(v string) *ListStackGroupOperationsRequest {
	s.StackGroupName = &v
	return s
}

func (s *ListStackGroupOperationsRequest) SetPageSize(v int64) *ListStackGroupOperationsRequest {
	s.PageSize = &v
	return s
}

func (s *ListStackGroupOperationsRequest) SetPageNumber(v int64) *ListStackGroupOperationsRequest {
	s.PageNumber = &v
	return s
}

type ListStackGroupOperationsResponse struct {
	RequestId            *string                                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageNumber           *int                                                    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize             *int                                                    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount           *int                                                    `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	StackGroupOperations []*ListStackGroupOperationsResponseStackGroupOperations `json:"StackGroupOperations,omitempty" xml:"StackGroupOperations,omitempty" require:"true" type:"Repeated"`
}

func (s ListStackGroupOperationsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListStackGroupOperationsResponse) GoString() string {
	return s.String()
}

func (s *ListStackGroupOperationsResponse) SetRequestId(v string) *ListStackGroupOperationsResponse {
	s.RequestId = &v
	return s
}

func (s *ListStackGroupOperationsResponse) SetPageNumber(v int) *ListStackGroupOperationsResponse {
	s.PageNumber = &v
	return s
}

func (s *ListStackGroupOperationsResponse) SetPageSize(v int) *ListStackGroupOperationsResponse {
	s.PageSize = &v
	return s
}

func (s *ListStackGroupOperationsResponse) SetTotalCount(v int) *ListStackGroupOperationsResponse {
	s.TotalCount = &v
	return s
}

func (s *ListStackGroupOperationsResponse) SetStackGroupOperations(v []*ListStackGroupOperationsResponseStackGroupOperations) *ListStackGroupOperationsResponse {
	s.StackGroupOperations = v
	return s
}

type ListStackGroupOperationsResponseStackGroupOperations struct {
	StackGroupName       *string `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	StackGroupId         *string `json:"StackGroupId,omitempty" xml:"StackGroupId,omitempty" require:"true"`
	OperationId          *string `json:"OperationId,omitempty" xml:"OperationId,omitempty" require:"true"`
	OperationDescription *string `json:"OperationDescription,omitempty" xml:"OperationDescription,omitempty" require:"true"`
	CreateTime           *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	EndTime              *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	Action               *string `json:"Action,omitempty" xml:"Action,omitempty" require:"true"`
	Status               *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s ListStackGroupOperationsResponseStackGroupOperations) String() string {
	return tea.Prettify(s)
}

func (s ListStackGroupOperationsResponseStackGroupOperations) GoString() string {
	return s.String()
}

func (s *ListStackGroupOperationsResponseStackGroupOperations) SetStackGroupName(v string) *ListStackGroupOperationsResponseStackGroupOperations {
	s.StackGroupName = &v
	return s
}

func (s *ListStackGroupOperationsResponseStackGroupOperations) SetStackGroupId(v string) *ListStackGroupOperationsResponseStackGroupOperations {
	s.StackGroupId = &v
	return s
}

func (s *ListStackGroupOperationsResponseStackGroupOperations) SetOperationId(v string) *ListStackGroupOperationsResponseStackGroupOperations {
	s.OperationId = &v
	return s
}

func (s *ListStackGroupOperationsResponseStackGroupOperations) SetOperationDescription(v string) *ListStackGroupOperationsResponseStackGroupOperations {
	s.OperationDescription = &v
	return s
}

func (s *ListStackGroupOperationsResponseStackGroupOperations) SetCreateTime(v string) *ListStackGroupOperationsResponseStackGroupOperations {
	s.CreateTime = &v
	return s
}

func (s *ListStackGroupOperationsResponseStackGroupOperations) SetEndTime(v string) *ListStackGroupOperationsResponseStackGroupOperations {
	s.EndTime = &v
	return s
}

func (s *ListStackGroupOperationsResponseStackGroupOperations) SetAction(v string) *ListStackGroupOperationsResponseStackGroupOperations {
	s.Action = &v
	return s
}

func (s *ListStackGroupOperationsResponseStackGroupOperations) SetStatus(v string) *ListStackGroupOperationsResponseStackGroupOperations {
	s.Status = &v
	return s
}

type GetStackGroupRequest struct {
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackGroupName *string `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
}

func (s GetStackGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s GetStackGroupRequest) GoString() string {
	return s.String()
}

func (s *GetStackGroupRequest) SetRegionId(v string) *GetStackGroupRequest {
	s.RegionId = &v
	return s
}

func (s *GetStackGroupRequest) SetStackGroupName(v string) *GetStackGroupRequest {
	s.StackGroupName = &v
	return s
}

type GetStackGroupResponse struct {
	RequestId  *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StackGroup *GetStackGroupResponseStackGroup `json:"StackGroup,omitempty" xml:"StackGroup,omitempty" require:"true" type:"Struct"`
}

func (s GetStackGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s GetStackGroupResponse) GoString() string {
	return s.String()
}

func (s *GetStackGroupResponse) SetRequestId(v string) *GetStackGroupResponse {
	s.RequestId = &v
	return s
}

func (s *GetStackGroupResponse) SetStackGroup(v *GetStackGroupResponseStackGroup) *GetStackGroupResponse {
	s.StackGroup = v
	return s
}

type GetStackGroupResponseStackGroup struct {
	StackGroupName                 *string                                                        `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	StackGroupId                   *string                                                        `json:"StackGroupId,omitempty" xml:"StackGroupId,omitempty" require:"true"`
	Status                         *string                                                        `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Description                    *string                                                        `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	TemplateBody                   *string                                                        `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty" require:"true"`
	ExecutionRoleName              *string                                                        `json:"ExecutionRoleName,omitempty" xml:"ExecutionRoleName,omitempty" require:"true"`
	AdministrationRoleName         *string                                                        `json:"AdministrationRoleName,omitempty" xml:"AdministrationRoleName,omitempty" require:"true"`
	Parameters                     []*GetStackGroupResponseStackGroupParameters                   `json:"Parameters,omitempty" xml:"Parameters,omitempty" require:"true" type:"Repeated"`
	StackGroupDriftDetectionDetail *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail `json:"StackGroupDriftDetectionDetail,omitempty" xml:"StackGroupDriftDetectionDetail,omitempty" require:"true" type:"Struct"`
}

func (s GetStackGroupResponseStackGroup) String() string {
	return tea.Prettify(s)
}

func (s GetStackGroupResponseStackGroup) GoString() string {
	return s.String()
}

func (s *GetStackGroupResponseStackGroup) SetStackGroupName(v string) *GetStackGroupResponseStackGroup {
	s.StackGroupName = &v
	return s
}

func (s *GetStackGroupResponseStackGroup) SetStackGroupId(v string) *GetStackGroupResponseStackGroup {
	s.StackGroupId = &v
	return s
}

func (s *GetStackGroupResponseStackGroup) SetStatus(v string) *GetStackGroupResponseStackGroup {
	s.Status = &v
	return s
}

func (s *GetStackGroupResponseStackGroup) SetDescription(v string) *GetStackGroupResponseStackGroup {
	s.Description = &v
	return s
}

func (s *GetStackGroupResponseStackGroup) SetTemplateBody(v string) *GetStackGroupResponseStackGroup {
	s.TemplateBody = &v
	return s
}

func (s *GetStackGroupResponseStackGroup) SetExecutionRoleName(v string) *GetStackGroupResponseStackGroup {
	s.ExecutionRoleName = &v
	return s
}

func (s *GetStackGroupResponseStackGroup) SetAdministrationRoleName(v string) *GetStackGroupResponseStackGroup {
	s.AdministrationRoleName = &v
	return s
}

func (s *GetStackGroupResponseStackGroup) SetParameters(v []*GetStackGroupResponseStackGroupParameters) *GetStackGroupResponseStackGroup {
	s.Parameters = v
	return s
}

func (s *GetStackGroupResponseStackGroup) SetStackGroupDriftDetectionDetail(v *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail) *GetStackGroupResponseStackGroup {
	s.StackGroupDriftDetectionDetail = v
	return s
}

type GetStackGroupResponseStackGroupParameters struct {
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
}

func (s GetStackGroupResponseStackGroupParameters) String() string {
	return tea.Prettify(s)
}

func (s GetStackGroupResponseStackGroupParameters) GoString() string {
	return s.String()
}

func (s *GetStackGroupResponseStackGroupParameters) SetParameterKey(v string) *GetStackGroupResponseStackGroupParameters {
	s.ParameterKey = &v
	return s
}

func (s *GetStackGroupResponseStackGroupParameters) SetParameterValue(v string) *GetStackGroupResponseStackGroupParameters {
	s.ParameterValue = &v
	return s
}

type GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail struct {
	DriftDetectionTime            *string `json:"DriftDetectionTime,omitempty" xml:"DriftDetectionTime,omitempty" require:"true"`
	StackGroupDriftStatus         *string `json:"StackGroupDriftStatus,omitempty" xml:"StackGroupDriftStatus,omitempty" require:"true"`
	DriftDetectionStatus          *string `json:"DriftDetectionStatus,omitempty" xml:"DriftDetectionStatus,omitempty" require:"true"`
	DriftedStackInstancesCount    *int    `json:"DriftedStackInstancesCount,omitempty" xml:"DriftedStackInstancesCount,omitempty" require:"true"`
	FailedStackInstancesCount     *int    `json:"FailedStackInstancesCount,omitempty" xml:"FailedStackInstancesCount,omitempty" require:"true"`
	CancelledStackInstancesCount  *int    `json:"CancelledStackInstancesCount,omitempty" xml:"CancelledStackInstancesCount,omitempty" require:"true"`
	InProgressStackInstancesCount *int    `json:"InProgressStackInstancesCount,omitempty" xml:"InProgressStackInstancesCount,omitempty" require:"true"`
	InSyncStackInstancesCount     *int    `json:"InSyncStackInstancesCount,omitempty" xml:"InSyncStackInstancesCount,omitempty" require:"true"`
	TotalStackInstancesCount      *int    `json:"TotalStackInstancesCount,omitempty" xml:"TotalStackInstancesCount,omitempty" require:"true"`
}

func (s GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail) String() string {
	return tea.Prettify(s)
}

func (s GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail) GoString() string {
	return s.String()
}

func (s *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail) SetDriftDetectionTime(v string) *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail {
	s.DriftDetectionTime = &v
	return s
}

func (s *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail) SetStackGroupDriftStatus(v string) *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail {
	s.StackGroupDriftStatus = &v
	return s
}

func (s *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail) SetDriftDetectionStatus(v string) *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail {
	s.DriftDetectionStatus = &v
	return s
}

func (s *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail) SetDriftedStackInstancesCount(v int) *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail {
	s.DriftedStackInstancesCount = &v
	return s
}

func (s *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail) SetFailedStackInstancesCount(v int) *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail {
	s.FailedStackInstancesCount = &v
	return s
}

func (s *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail) SetCancelledStackInstancesCount(v int) *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail {
	s.CancelledStackInstancesCount = &v
	return s
}

func (s *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail) SetInProgressStackInstancesCount(v int) *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail {
	s.InProgressStackInstancesCount = &v
	return s
}

func (s *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail) SetInSyncStackInstancesCount(v int) *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail {
	s.InSyncStackInstancesCount = &v
	return s
}

func (s *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail) SetTotalStackInstancesCount(v int) *GetStackGroupResponseStackGroupStackGroupDriftDetectionDetail {
	s.TotalStackInstancesCount = &v
	return s
}

type GetStackGroupOperationRequest struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	OperationId *string `json:"OperationId,omitempty" xml:"OperationId,omitempty" require:"true"`
}

func (s GetStackGroupOperationRequest) String() string {
	return tea.Prettify(s)
}

func (s GetStackGroupOperationRequest) GoString() string {
	return s.String()
}

func (s *GetStackGroupOperationRequest) SetRegionId(v string) *GetStackGroupOperationRequest {
	s.RegionId = &v
	return s
}

func (s *GetStackGroupOperationRequest) SetOperationId(v string) *GetStackGroupOperationRequest {
	s.OperationId = &v
	return s
}

type GetStackGroupOperationResponse struct {
	RequestId           *string                                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StackGroupOperation *GetStackGroupOperationResponseStackGroupOperation `json:"StackGroupOperation,omitempty" xml:"StackGroupOperation,omitempty" require:"true" type:"Struct"`
}

func (s GetStackGroupOperationResponse) String() string {
	return tea.Prettify(s)
}

func (s GetStackGroupOperationResponse) GoString() string {
	return s.String()
}

func (s *GetStackGroupOperationResponse) SetRequestId(v string) *GetStackGroupOperationResponse {
	s.RequestId = &v
	return s
}

func (s *GetStackGroupOperationResponse) SetStackGroupOperation(v *GetStackGroupOperationResponseStackGroupOperation) *GetStackGroupOperationResponse {
	s.StackGroupOperation = v
	return s
}

type GetStackGroupOperationResponseStackGroupOperation struct {
	StackGroupName                 *string                                                                          `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	StackGroupId                   *string                                                                          `json:"StackGroupId,omitempty" xml:"StackGroupId,omitempty" require:"true"`
	OperationId                    *string                                                                          `json:"OperationId,omitempty" xml:"OperationId,omitempty" require:"true"`
	OperationDescription           *string                                                                          `json:"OperationDescription,omitempty" xml:"OperationDescription,omitempty" require:"true"`
	CreateTime                     *string                                                                          `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	EndTime                        *string                                                                          `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	Action                         *string                                                                          `json:"Action,omitempty" xml:"Action,omitempty" require:"true"`
	Status                         *string                                                                          `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	RetainStacks                   *bool                                                                            `json:"RetainStacks,omitempty" xml:"RetainStacks,omitempty" require:"true"`
	AdministratorRoleName          *string                                                                          `json:"AdministratorRoleName,omitempty" xml:"AdministratorRoleName,omitempty" require:"true"`
	ExecutionRoleName              *string                                                                          `json:"ExecutionRoleName,omitempty" xml:"ExecutionRoleName,omitempty" require:"true"`
	OperationPreferences           *GetStackGroupOperationResponseStackGroupOperationOperationPreferences           `json:"OperationPreferences,omitempty" xml:"OperationPreferences,omitempty" require:"true" type:"Struct"`
	StackGroupDriftDetectionDetail *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail `json:"StackGroupDriftDetectionDetail,omitempty" xml:"StackGroupDriftDetectionDetail,omitempty" require:"true" type:"Struct"`
}

func (s GetStackGroupOperationResponseStackGroupOperation) String() string {
	return tea.Prettify(s)
}

func (s GetStackGroupOperationResponseStackGroupOperation) GoString() string {
	return s.String()
}

func (s *GetStackGroupOperationResponseStackGroupOperation) SetStackGroupName(v string) *GetStackGroupOperationResponseStackGroupOperation {
	s.StackGroupName = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperation) SetStackGroupId(v string) *GetStackGroupOperationResponseStackGroupOperation {
	s.StackGroupId = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperation) SetOperationId(v string) *GetStackGroupOperationResponseStackGroupOperation {
	s.OperationId = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperation) SetOperationDescription(v string) *GetStackGroupOperationResponseStackGroupOperation {
	s.OperationDescription = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperation) SetCreateTime(v string) *GetStackGroupOperationResponseStackGroupOperation {
	s.CreateTime = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperation) SetEndTime(v string) *GetStackGroupOperationResponseStackGroupOperation {
	s.EndTime = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperation) SetAction(v string) *GetStackGroupOperationResponseStackGroupOperation {
	s.Action = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperation) SetStatus(v string) *GetStackGroupOperationResponseStackGroupOperation {
	s.Status = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperation) SetRetainStacks(v bool) *GetStackGroupOperationResponseStackGroupOperation {
	s.RetainStacks = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperation) SetAdministratorRoleName(v string) *GetStackGroupOperationResponseStackGroupOperation {
	s.AdministratorRoleName = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperation) SetExecutionRoleName(v string) *GetStackGroupOperationResponseStackGroupOperation {
	s.ExecutionRoleName = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperation) SetOperationPreferences(v *GetStackGroupOperationResponseStackGroupOperationOperationPreferences) *GetStackGroupOperationResponseStackGroupOperation {
	s.OperationPreferences = v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperation) SetStackGroupDriftDetectionDetail(v *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail) *GetStackGroupOperationResponseStackGroupOperation {
	s.StackGroupDriftDetectionDetail = v
	return s
}

type GetStackGroupOperationResponseStackGroupOperationOperationPreferences struct {
	FailureToleranceCount      *int      `json:"FailureToleranceCount,omitempty" xml:"FailureToleranceCount,omitempty" require:"true"`
	FailureTolerancePercentage *int      `json:"FailureTolerancePercentage,omitempty" xml:"FailureTolerancePercentage,omitempty" require:"true"`
	MaxConcurrentCount         *int      `json:"MaxConcurrentCount,omitempty" xml:"MaxConcurrentCount,omitempty" require:"true"`
	MaxConcurrentPercentage    *int      `json:"MaxConcurrentPercentage,omitempty" xml:"MaxConcurrentPercentage,omitempty" require:"true"`
	RegionIdsOrder             []*string `json:"RegionIdsOrder,omitempty" xml:"RegionIdsOrder,omitempty" require:"true" type:"Repeated"`
}

func (s GetStackGroupOperationResponseStackGroupOperationOperationPreferences) String() string {
	return tea.Prettify(s)
}

func (s GetStackGroupOperationResponseStackGroupOperationOperationPreferences) GoString() string {
	return s.String()
}

func (s *GetStackGroupOperationResponseStackGroupOperationOperationPreferences) SetFailureToleranceCount(v int) *GetStackGroupOperationResponseStackGroupOperationOperationPreferences {
	s.FailureToleranceCount = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperationOperationPreferences) SetFailureTolerancePercentage(v int) *GetStackGroupOperationResponseStackGroupOperationOperationPreferences {
	s.FailureTolerancePercentage = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperationOperationPreferences) SetMaxConcurrentCount(v int) *GetStackGroupOperationResponseStackGroupOperationOperationPreferences {
	s.MaxConcurrentCount = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperationOperationPreferences) SetMaxConcurrentPercentage(v int) *GetStackGroupOperationResponseStackGroupOperationOperationPreferences {
	s.MaxConcurrentPercentage = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperationOperationPreferences) SetRegionIdsOrder(v []*string) *GetStackGroupOperationResponseStackGroupOperationOperationPreferences {
	s.RegionIdsOrder = v
	return s
}

type GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail struct {
	DriftDetectionTime            *string `json:"DriftDetectionTime,omitempty" xml:"DriftDetectionTime,omitempty" require:"true"`
	StackGroupDriftStatus         *string `json:"StackGroupDriftStatus,omitempty" xml:"StackGroupDriftStatus,omitempty" require:"true"`
	DriftDetectionStatus          *string `json:"DriftDetectionStatus,omitempty" xml:"DriftDetectionStatus,omitempty" require:"true"`
	DriftedStackInstancesCount    *int    `json:"DriftedStackInstancesCount,omitempty" xml:"DriftedStackInstancesCount,omitempty" require:"true"`
	FailedStackInstancesCount     *int    `json:"FailedStackInstancesCount,omitempty" xml:"FailedStackInstancesCount,omitempty" require:"true"`
	CancelledStackInstancesCount  *int    `json:"CancelledStackInstancesCount,omitempty" xml:"CancelledStackInstancesCount,omitempty" require:"true"`
	InProgressStackInstancesCount *int    `json:"InProgressStackInstancesCount,omitempty" xml:"InProgressStackInstancesCount,omitempty" require:"true"`
	InSyncStackInstancesCount     *int    `json:"InSyncStackInstancesCount,omitempty" xml:"InSyncStackInstancesCount,omitempty" require:"true"`
	TotalStackInstancesCount      *int    `json:"TotalStackInstancesCount,omitempty" xml:"TotalStackInstancesCount,omitempty" require:"true"`
}

func (s GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail) String() string {
	return tea.Prettify(s)
}

func (s GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail) GoString() string {
	return s.String()
}

func (s *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail) SetDriftDetectionTime(v string) *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail {
	s.DriftDetectionTime = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail) SetStackGroupDriftStatus(v string) *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail {
	s.StackGroupDriftStatus = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail) SetDriftDetectionStatus(v string) *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail {
	s.DriftDetectionStatus = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail) SetDriftedStackInstancesCount(v int) *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail {
	s.DriftedStackInstancesCount = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail) SetFailedStackInstancesCount(v int) *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail {
	s.FailedStackInstancesCount = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail) SetCancelledStackInstancesCount(v int) *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail {
	s.CancelledStackInstancesCount = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail) SetInProgressStackInstancesCount(v int) *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail {
	s.InProgressStackInstancesCount = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail) SetInSyncStackInstancesCount(v int) *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail {
	s.InSyncStackInstancesCount = &v
	return s
}

func (s *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail) SetTotalStackInstancesCount(v int) *GetStackGroupOperationResponseStackGroupOperationStackGroupDriftDetectionDetail {
	s.TotalStackInstancesCount = &v
	return s
}

type ListStackGroupsRequest struct {
	RegionId   *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Status     *string `json:"Status,omitempty" xml:"Status,omitempty"`
	PageSize   *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s ListStackGroupsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListStackGroupsRequest) GoString() string {
	return s.String()
}

func (s *ListStackGroupsRequest) SetRegionId(v string) *ListStackGroupsRequest {
	s.RegionId = &v
	return s
}

func (s *ListStackGroupsRequest) SetStatus(v string) *ListStackGroupsRequest {
	s.Status = &v
	return s
}

func (s *ListStackGroupsRequest) SetPageSize(v int64) *ListStackGroupsRequest {
	s.PageSize = &v
	return s
}

func (s *ListStackGroupsRequest) SetPageNumber(v int64) *ListStackGroupsRequest {
	s.PageNumber = &v
	return s
}

type ListStackGroupsResponse struct {
	RequestId   *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageNumber  *int                                  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize    *int                                  `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount  *int                                  `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	StackGroups []*ListStackGroupsResponseStackGroups `json:"StackGroups,omitempty" xml:"StackGroups,omitempty" require:"true" type:"Repeated"`
}

func (s ListStackGroupsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListStackGroupsResponse) GoString() string {
	return s.String()
}

func (s *ListStackGroupsResponse) SetRequestId(v string) *ListStackGroupsResponse {
	s.RequestId = &v
	return s
}

func (s *ListStackGroupsResponse) SetPageNumber(v int) *ListStackGroupsResponse {
	s.PageNumber = &v
	return s
}

func (s *ListStackGroupsResponse) SetPageSize(v int) *ListStackGroupsResponse {
	s.PageSize = &v
	return s
}

func (s *ListStackGroupsResponse) SetTotalCount(v int) *ListStackGroupsResponse {
	s.TotalCount = &v
	return s
}

func (s *ListStackGroupsResponse) SetStackGroups(v []*ListStackGroupsResponseStackGroups) *ListStackGroupsResponse {
	s.StackGroups = v
	return s
}

type ListStackGroupsResponseStackGroups struct {
	StackGroupName        *string `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	StackGroupId          *string `json:"StackGroupId,omitempty" xml:"StackGroupId,omitempty" require:"true"`
	Status                *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Description           *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	DriftDetectionTime    *string `json:"DriftDetectionTime,omitempty" xml:"DriftDetectionTime,omitempty" require:"true"`
	StackGroupDriftStatus *string `json:"StackGroupDriftStatus,omitempty" xml:"StackGroupDriftStatus,omitempty" require:"true"`
}

func (s ListStackGroupsResponseStackGroups) String() string {
	return tea.Prettify(s)
}

func (s ListStackGroupsResponseStackGroups) GoString() string {
	return s.String()
}

func (s *ListStackGroupsResponseStackGroups) SetStackGroupName(v string) *ListStackGroupsResponseStackGroups {
	s.StackGroupName = &v
	return s
}

func (s *ListStackGroupsResponseStackGroups) SetStackGroupId(v string) *ListStackGroupsResponseStackGroups {
	s.StackGroupId = &v
	return s
}

func (s *ListStackGroupsResponseStackGroups) SetStatus(v string) *ListStackGroupsResponseStackGroups {
	s.Status = &v
	return s
}

func (s *ListStackGroupsResponseStackGroups) SetDescription(v string) *ListStackGroupsResponseStackGroups {
	s.Description = &v
	return s
}

func (s *ListStackGroupsResponseStackGroups) SetDriftDetectionTime(v string) *ListStackGroupsResponseStackGroups {
	s.DriftDetectionTime = &v
	return s
}

func (s *ListStackGroupsResponseStackGroups) SetStackGroupDriftStatus(v string) *ListStackGroupsResponseStackGroups {
	s.StackGroupDriftStatus = &v
	return s
}

type CreateStackInstancesRequest struct {
	RegionId             *string                                          `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackGroupName       *string                                          `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	ParameterOverrides   []*CreateStackInstancesRequestParameterOverrides `json:"ParameterOverrides,omitempty" xml:"ParameterOverrides,omitempty" type:"Repeated"`
	AccountIds           map[string]interface{}                           `json:"AccountIds,omitempty" xml:"AccountIds,omitempty" require:"true"`
	RegionIds            map[string]interface{}                           `json:"RegionIds,omitempty" xml:"RegionIds,omitempty" require:"true"`
	ClientToken          *string                                          `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	OperationDescription *string                                          `json:"OperationDescription,omitempty" xml:"OperationDescription,omitempty"`
	OperationPreferences map[string]interface{}                           `json:"OperationPreferences,omitempty" xml:"OperationPreferences,omitempty"`
}

func (s CreateStackInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateStackInstancesRequest) GoString() string {
	return s.String()
}

func (s *CreateStackInstancesRequest) SetRegionId(v string) *CreateStackInstancesRequest {
	s.RegionId = &v
	return s
}

func (s *CreateStackInstancesRequest) SetStackGroupName(v string) *CreateStackInstancesRequest {
	s.StackGroupName = &v
	return s
}

func (s *CreateStackInstancesRequest) SetParameterOverrides(v []*CreateStackInstancesRequestParameterOverrides) *CreateStackInstancesRequest {
	s.ParameterOverrides = v
	return s
}

func (s *CreateStackInstancesRequest) SetAccountIds(v map[string]interface{}) *CreateStackInstancesRequest {
	s.AccountIds = v
	return s
}

func (s *CreateStackInstancesRequest) SetRegionIds(v map[string]interface{}) *CreateStackInstancesRequest {
	s.RegionIds = v
	return s
}

func (s *CreateStackInstancesRequest) SetClientToken(v string) *CreateStackInstancesRequest {
	s.ClientToken = &v
	return s
}

func (s *CreateStackInstancesRequest) SetOperationDescription(v string) *CreateStackInstancesRequest {
	s.OperationDescription = &v
	return s
}

func (s *CreateStackInstancesRequest) SetOperationPreferences(v map[string]interface{}) *CreateStackInstancesRequest {
	s.OperationPreferences = v
	return s
}

type CreateStackInstancesRequestParameterOverrides struct {
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
}

func (s CreateStackInstancesRequestParameterOverrides) String() string {
	return tea.Prettify(s)
}

func (s CreateStackInstancesRequestParameterOverrides) GoString() string {
	return s.String()
}

func (s *CreateStackInstancesRequestParameterOverrides) SetParameterValue(v string) *CreateStackInstancesRequestParameterOverrides {
	s.ParameterValue = &v
	return s
}

func (s *CreateStackInstancesRequestParameterOverrides) SetParameterKey(v string) *CreateStackInstancesRequestParameterOverrides {
	s.ParameterKey = &v
	return s
}

type CreateStackInstancesResponse struct {
	RequestId   *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	OperationId *string `json:"OperationId,omitempty" xml:"OperationId,omitempty" require:"true"`
}

func (s CreateStackInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateStackInstancesResponse) GoString() string {
	return s.String()
}

func (s *CreateStackInstancesResponse) SetRequestId(v string) *CreateStackInstancesResponse {
	s.RequestId = &v
	return s
}

func (s *CreateStackInstancesResponse) SetOperationId(v string) *CreateStackInstancesResponse {
	s.OperationId = &v
	return s
}

type CreateStackGroupRequest struct {
	RegionId               *string                              `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackGroupName         *string                              `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	Description            *string                              `json:"Description,omitempty" xml:"Description,omitempty"`
	Parameters             []*CreateStackGroupRequestParameters `json:"Parameters,omitempty" xml:"Parameters,omitempty" type:"Repeated"`
	TemplateBody           *string                              `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty"`
	TemplateURL            *string                              `json:"TemplateURL,omitempty" xml:"TemplateURL,omitempty"`
	ClientToken            *string                              `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	AdministrationRoleName *string                              `json:"AdministrationRoleName,omitempty" xml:"AdministrationRoleName,omitempty"`
	ExecutionRoleName      *string                              `json:"ExecutionRoleName,omitempty" xml:"ExecutionRoleName,omitempty"`
}

func (s CreateStackGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateStackGroupRequest) GoString() string {
	return s.String()
}

func (s *CreateStackGroupRequest) SetRegionId(v string) *CreateStackGroupRequest {
	s.RegionId = &v
	return s
}

func (s *CreateStackGroupRequest) SetStackGroupName(v string) *CreateStackGroupRequest {
	s.StackGroupName = &v
	return s
}

func (s *CreateStackGroupRequest) SetDescription(v string) *CreateStackGroupRequest {
	s.Description = &v
	return s
}

func (s *CreateStackGroupRequest) SetParameters(v []*CreateStackGroupRequestParameters) *CreateStackGroupRequest {
	s.Parameters = v
	return s
}

func (s *CreateStackGroupRequest) SetTemplateBody(v string) *CreateStackGroupRequest {
	s.TemplateBody = &v
	return s
}

func (s *CreateStackGroupRequest) SetTemplateURL(v string) *CreateStackGroupRequest {
	s.TemplateURL = &v
	return s
}

func (s *CreateStackGroupRequest) SetClientToken(v string) *CreateStackGroupRequest {
	s.ClientToken = &v
	return s
}

func (s *CreateStackGroupRequest) SetAdministrationRoleName(v string) *CreateStackGroupRequest {
	s.AdministrationRoleName = &v
	return s
}

func (s *CreateStackGroupRequest) SetExecutionRoleName(v string) *CreateStackGroupRequest {
	s.ExecutionRoleName = &v
	return s
}

type CreateStackGroupRequestParameters struct {
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
}

func (s CreateStackGroupRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s CreateStackGroupRequestParameters) GoString() string {
	return s.String()
}

func (s *CreateStackGroupRequestParameters) SetParameterValue(v string) *CreateStackGroupRequestParameters {
	s.ParameterValue = &v
	return s
}

func (s *CreateStackGroupRequestParameters) SetParameterKey(v string) *CreateStackGroupRequestParameters {
	s.ParameterKey = &v
	return s
}

type CreateStackGroupResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StackGroupId *string `json:"StackGroupId,omitempty" xml:"StackGroupId,omitempty" require:"true"`
}

func (s CreateStackGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateStackGroupResponse) GoString() string {
	return s.String()
}

func (s *CreateStackGroupResponse) SetRequestId(v string) *CreateStackGroupResponse {
	s.RequestId = &v
	return s
}

func (s *CreateStackGroupResponse) SetStackGroupId(v string) *CreateStackGroupResponse {
	s.StackGroupId = &v
	return s
}

type GetStackInstanceRequest struct {
	RegionId               *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackGroupName         *string `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	StackInstanceAccountId *string `json:"StackInstanceAccountId,omitempty" xml:"StackInstanceAccountId,omitempty" require:"true"`
	StackInstanceRegionId  *string `json:"StackInstanceRegionId,omitempty" xml:"StackInstanceRegionId,omitempty" require:"true"`
}

func (s GetStackInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s GetStackInstanceRequest) GoString() string {
	return s.String()
}

func (s *GetStackInstanceRequest) SetRegionId(v string) *GetStackInstanceRequest {
	s.RegionId = &v
	return s
}

func (s *GetStackInstanceRequest) SetStackGroupName(v string) *GetStackInstanceRequest {
	s.StackGroupName = &v
	return s
}

func (s *GetStackInstanceRequest) SetStackInstanceAccountId(v string) *GetStackInstanceRequest {
	s.StackInstanceAccountId = &v
	return s
}

func (s *GetStackInstanceRequest) SetStackInstanceRegionId(v string) *GetStackInstanceRequest {
	s.StackInstanceRegionId = &v
	return s
}

type GetStackInstanceResponse struct {
	RequestId     *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StackInstance *GetStackInstanceResponseStackInstance `json:"StackInstance,omitempty" xml:"StackInstance,omitempty" require:"true" type:"Struct"`
}

func (s GetStackInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s GetStackInstanceResponse) GoString() string {
	return s.String()
}

func (s *GetStackInstanceResponse) SetRequestId(v string) *GetStackInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *GetStackInstanceResponse) SetStackInstance(v *GetStackInstanceResponseStackInstance) *GetStackInstanceResponse {
	s.StackInstance = v
	return s
}

type GetStackInstanceResponseStackInstance struct {
	StackGroupName     *string                                                    `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	StackGroupId       *string                                                    `json:"StackGroupId,omitempty" xml:"StackGroupId,omitempty" require:"true"`
	StackId            *string                                                    `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	AccountId          *string                                                    `json:"AccountId,omitempty" xml:"AccountId,omitempty" require:"true"`
	RegionId           *string                                                    `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Status             *string                                                    `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	StatusReason       *string                                                    `json:"StatusReason,omitempty" xml:"StatusReason,omitempty" require:"true"`
	StackDriftStatus   *string                                                    `json:"StackDriftStatus,omitempty" xml:"StackDriftStatus,omitempty" require:"true"`
	DriftDetectionTime *string                                                    `json:"DriftDetectionTime,omitempty" xml:"DriftDetectionTime,omitempty" require:"true"`
	ParameterOverrides []*GetStackInstanceResponseStackInstanceParameterOverrides `json:"ParameterOverrides,omitempty" xml:"ParameterOverrides,omitempty" require:"true" type:"Repeated"`
}

func (s GetStackInstanceResponseStackInstance) String() string {
	return tea.Prettify(s)
}

func (s GetStackInstanceResponseStackInstance) GoString() string {
	return s.String()
}

func (s *GetStackInstanceResponseStackInstance) SetStackGroupName(v string) *GetStackInstanceResponseStackInstance {
	s.StackGroupName = &v
	return s
}

func (s *GetStackInstanceResponseStackInstance) SetStackGroupId(v string) *GetStackInstanceResponseStackInstance {
	s.StackGroupId = &v
	return s
}

func (s *GetStackInstanceResponseStackInstance) SetStackId(v string) *GetStackInstanceResponseStackInstance {
	s.StackId = &v
	return s
}

func (s *GetStackInstanceResponseStackInstance) SetAccountId(v string) *GetStackInstanceResponseStackInstance {
	s.AccountId = &v
	return s
}

func (s *GetStackInstanceResponseStackInstance) SetRegionId(v string) *GetStackInstanceResponseStackInstance {
	s.RegionId = &v
	return s
}

func (s *GetStackInstanceResponseStackInstance) SetStatus(v string) *GetStackInstanceResponseStackInstance {
	s.Status = &v
	return s
}

func (s *GetStackInstanceResponseStackInstance) SetStatusReason(v string) *GetStackInstanceResponseStackInstance {
	s.StatusReason = &v
	return s
}

func (s *GetStackInstanceResponseStackInstance) SetStackDriftStatus(v string) *GetStackInstanceResponseStackInstance {
	s.StackDriftStatus = &v
	return s
}

func (s *GetStackInstanceResponseStackInstance) SetDriftDetectionTime(v string) *GetStackInstanceResponseStackInstance {
	s.DriftDetectionTime = &v
	return s
}

func (s *GetStackInstanceResponseStackInstance) SetParameterOverrides(v []*GetStackInstanceResponseStackInstanceParameterOverrides) *GetStackInstanceResponseStackInstance {
	s.ParameterOverrides = v
	return s
}

type GetStackInstanceResponseStackInstanceParameterOverrides struct {
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
}

func (s GetStackInstanceResponseStackInstanceParameterOverrides) String() string {
	return tea.Prettify(s)
}

func (s GetStackInstanceResponseStackInstanceParameterOverrides) GoString() string {
	return s.String()
}

func (s *GetStackInstanceResponseStackInstanceParameterOverrides) SetParameterKey(v string) *GetStackInstanceResponseStackInstanceParameterOverrides {
	s.ParameterKey = &v
	return s
}

func (s *GetStackInstanceResponseStackInstanceParameterOverrides) SetParameterValue(v string) *GetStackInstanceResponseStackInstanceParameterOverrides {
	s.ParameterValue = &v
	return s
}

type UpdateStackGroupRequest struct {
	RegionId               *string                              `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackGroupName         *string                              `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	Description            *string                              `json:"Description,omitempty" xml:"Description,omitempty"`
	Parameters             []*UpdateStackGroupRequestParameters `json:"Parameters,omitempty" xml:"Parameters,omitempty" type:"Repeated"`
	AccountIds             map[string]interface{}               `json:"AccountIds,omitempty" xml:"AccountIds,omitempty"`
	RegionIds              map[string]interface{}               `json:"RegionIds,omitempty" xml:"RegionIds,omitempty"`
	TemplateBody           *string                              `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty"`
	TemplateURL            *string                              `json:"TemplateURL,omitempty" xml:"TemplateURL,omitempty"`
	ClientToken            *string                              `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	OperationDescription   *string                              `json:"OperationDescription,omitempty" xml:"OperationDescription,omitempty"`
	OperationPreferences   map[string]interface{}               `json:"OperationPreferences,omitempty" xml:"OperationPreferences,omitempty"`
	AdministrationRoleName *string                              `json:"AdministrationRoleName,omitempty" xml:"AdministrationRoleName,omitempty"`
	ExecutionRoleName      *string                              `json:"ExecutionRoleName,omitempty" xml:"ExecutionRoleName,omitempty"`
}

func (s UpdateStackGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateStackGroupRequest) GoString() string {
	return s.String()
}

func (s *UpdateStackGroupRequest) SetRegionId(v string) *UpdateStackGroupRequest {
	s.RegionId = &v
	return s
}

func (s *UpdateStackGroupRequest) SetStackGroupName(v string) *UpdateStackGroupRequest {
	s.StackGroupName = &v
	return s
}

func (s *UpdateStackGroupRequest) SetDescription(v string) *UpdateStackGroupRequest {
	s.Description = &v
	return s
}

func (s *UpdateStackGroupRequest) SetParameters(v []*UpdateStackGroupRequestParameters) *UpdateStackGroupRequest {
	s.Parameters = v
	return s
}

func (s *UpdateStackGroupRequest) SetAccountIds(v map[string]interface{}) *UpdateStackGroupRequest {
	s.AccountIds = v
	return s
}

func (s *UpdateStackGroupRequest) SetRegionIds(v map[string]interface{}) *UpdateStackGroupRequest {
	s.RegionIds = v
	return s
}

func (s *UpdateStackGroupRequest) SetTemplateBody(v string) *UpdateStackGroupRequest {
	s.TemplateBody = &v
	return s
}

func (s *UpdateStackGroupRequest) SetTemplateURL(v string) *UpdateStackGroupRequest {
	s.TemplateURL = &v
	return s
}

func (s *UpdateStackGroupRequest) SetClientToken(v string) *UpdateStackGroupRequest {
	s.ClientToken = &v
	return s
}

func (s *UpdateStackGroupRequest) SetOperationDescription(v string) *UpdateStackGroupRequest {
	s.OperationDescription = &v
	return s
}

func (s *UpdateStackGroupRequest) SetOperationPreferences(v map[string]interface{}) *UpdateStackGroupRequest {
	s.OperationPreferences = v
	return s
}

func (s *UpdateStackGroupRequest) SetAdministrationRoleName(v string) *UpdateStackGroupRequest {
	s.AdministrationRoleName = &v
	return s
}

func (s *UpdateStackGroupRequest) SetExecutionRoleName(v string) *UpdateStackGroupRequest {
	s.ExecutionRoleName = &v
	return s
}

type UpdateStackGroupRequestParameters struct {
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
}

func (s UpdateStackGroupRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s UpdateStackGroupRequestParameters) GoString() string {
	return s.String()
}

func (s *UpdateStackGroupRequestParameters) SetParameterValue(v string) *UpdateStackGroupRequestParameters {
	s.ParameterValue = &v
	return s
}

func (s *UpdateStackGroupRequestParameters) SetParameterKey(v string) *UpdateStackGroupRequestParameters {
	s.ParameterKey = &v
	return s
}

type UpdateStackGroupResponse struct {
	RequestId   *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	OperationId *string `json:"OperationId,omitempty" xml:"OperationId,omitempty" require:"true"`
}

func (s UpdateStackGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateStackGroupResponse) GoString() string {
	return s.String()
}

func (s *UpdateStackGroupResponse) SetRequestId(v string) *UpdateStackGroupResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateStackGroupResponse) SetOperationId(v string) *UpdateStackGroupResponse {
	s.OperationId = &v
	return s
}

type ListStackInstancesRequest struct {
	RegionId               *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackGroupName         *string `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	StackInstanceAccountId *string `json:"StackInstanceAccountId,omitempty" xml:"StackInstanceAccountId,omitempty"`
	StackInstanceRegionId  *string `json:"StackInstanceRegionId,omitempty" xml:"StackInstanceRegionId,omitempty"`
	PageSize               *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber             *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s ListStackInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListStackInstancesRequest) GoString() string {
	return s.String()
}

func (s *ListStackInstancesRequest) SetRegionId(v string) *ListStackInstancesRequest {
	s.RegionId = &v
	return s
}

func (s *ListStackInstancesRequest) SetStackGroupName(v string) *ListStackInstancesRequest {
	s.StackGroupName = &v
	return s
}

func (s *ListStackInstancesRequest) SetStackInstanceAccountId(v string) *ListStackInstancesRequest {
	s.StackInstanceAccountId = &v
	return s
}

func (s *ListStackInstancesRequest) SetStackInstanceRegionId(v string) *ListStackInstancesRequest {
	s.StackInstanceRegionId = &v
	return s
}

func (s *ListStackInstancesRequest) SetPageSize(v int64) *ListStackInstancesRequest {
	s.PageSize = &v
	return s
}

func (s *ListStackInstancesRequest) SetPageNumber(v int64) *ListStackInstancesRequest {
	s.PageNumber = &v
	return s
}

type ListStackInstancesResponse struct {
	RequestId      *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageNumber     *int                                        `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize       *int                                        `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount     *int                                        `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	StackInstances []*ListStackInstancesResponseStackInstances `json:"StackInstances,omitempty" xml:"StackInstances,omitempty" require:"true" type:"Repeated"`
}

func (s ListStackInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListStackInstancesResponse) GoString() string {
	return s.String()
}

func (s *ListStackInstancesResponse) SetRequestId(v string) *ListStackInstancesResponse {
	s.RequestId = &v
	return s
}

func (s *ListStackInstancesResponse) SetPageNumber(v int) *ListStackInstancesResponse {
	s.PageNumber = &v
	return s
}

func (s *ListStackInstancesResponse) SetPageSize(v int) *ListStackInstancesResponse {
	s.PageSize = &v
	return s
}

func (s *ListStackInstancesResponse) SetTotalCount(v int) *ListStackInstancesResponse {
	s.TotalCount = &v
	return s
}

func (s *ListStackInstancesResponse) SetStackInstances(v []*ListStackInstancesResponseStackInstances) *ListStackInstancesResponse {
	s.StackInstances = v
	return s
}

type ListStackInstancesResponseStackInstances struct {
	StackGroupName     *string `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	StackGroupId       *string `json:"StackGroupId,omitempty" xml:"StackGroupId,omitempty" require:"true"`
	StackId            *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	AccountId          *string `json:"AccountId,omitempty" xml:"AccountId,omitempty" require:"true"`
	RegionId           *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Status             *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	StatusReason       *string `json:"StatusReason,omitempty" xml:"StatusReason,omitempty" require:"true"`
	StackDriftStatus   *string `json:"StackDriftStatus,omitempty" xml:"StackDriftStatus,omitempty" require:"true"`
	DriftDetectionTime *string `json:"DriftDetectionTime,omitempty" xml:"DriftDetectionTime,omitempty" require:"true"`
}

func (s ListStackInstancesResponseStackInstances) String() string {
	return tea.Prettify(s)
}

func (s ListStackInstancesResponseStackInstances) GoString() string {
	return s.String()
}

func (s *ListStackInstancesResponseStackInstances) SetStackGroupName(v string) *ListStackInstancesResponseStackInstances {
	s.StackGroupName = &v
	return s
}

func (s *ListStackInstancesResponseStackInstances) SetStackGroupId(v string) *ListStackInstancesResponseStackInstances {
	s.StackGroupId = &v
	return s
}

func (s *ListStackInstancesResponseStackInstances) SetStackId(v string) *ListStackInstancesResponseStackInstances {
	s.StackId = &v
	return s
}

func (s *ListStackInstancesResponseStackInstances) SetAccountId(v string) *ListStackInstancesResponseStackInstances {
	s.AccountId = &v
	return s
}

func (s *ListStackInstancesResponseStackInstances) SetRegionId(v string) *ListStackInstancesResponseStackInstances {
	s.RegionId = &v
	return s
}

func (s *ListStackInstancesResponseStackInstances) SetStatus(v string) *ListStackInstancesResponseStackInstances {
	s.Status = &v
	return s
}

func (s *ListStackInstancesResponseStackInstances) SetStatusReason(v string) *ListStackInstancesResponseStackInstances {
	s.StatusReason = &v
	return s
}

func (s *ListStackInstancesResponseStackInstances) SetStackDriftStatus(v string) *ListStackInstancesResponseStackInstances {
	s.StackDriftStatus = &v
	return s
}

func (s *ListStackInstancesResponseStackInstances) SetDriftDetectionTime(v string) *ListStackInstancesResponseStackInstances {
	s.DriftDetectionTime = &v
	return s
}

type ListStackGroupOperationResultsRequest struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	OperationId *string `json:"OperationId,omitempty" xml:"OperationId,omitempty" require:"true"`
	PageSize    *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber  *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s ListStackGroupOperationResultsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListStackGroupOperationResultsRequest) GoString() string {
	return s.String()
}

func (s *ListStackGroupOperationResultsRequest) SetRegionId(v string) *ListStackGroupOperationResultsRequest {
	s.RegionId = &v
	return s
}

func (s *ListStackGroupOperationResultsRequest) SetOperationId(v string) *ListStackGroupOperationResultsRequest {
	s.OperationId = &v
	return s
}

func (s *ListStackGroupOperationResultsRequest) SetPageSize(v int64) *ListStackGroupOperationResultsRequest {
	s.PageSize = &v
	return s
}

func (s *ListStackGroupOperationResultsRequest) SetPageNumber(v int64) *ListStackGroupOperationResultsRequest {
	s.PageNumber = &v
	return s
}

type ListStackGroupOperationResultsResponse struct {
	RequestId                  *string                                                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageNumber                 *int                                                                `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize                   *int                                                                `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount                 *int                                                                `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	StackGroupOperationResults []*ListStackGroupOperationResultsResponseStackGroupOperationResults `json:"StackGroupOperationResults,omitempty" xml:"StackGroupOperationResults,omitempty" require:"true" type:"Repeated"`
}

func (s ListStackGroupOperationResultsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListStackGroupOperationResultsResponse) GoString() string {
	return s.String()
}

func (s *ListStackGroupOperationResultsResponse) SetRequestId(v string) *ListStackGroupOperationResultsResponse {
	s.RequestId = &v
	return s
}

func (s *ListStackGroupOperationResultsResponse) SetPageNumber(v int) *ListStackGroupOperationResultsResponse {
	s.PageNumber = &v
	return s
}

func (s *ListStackGroupOperationResultsResponse) SetPageSize(v int) *ListStackGroupOperationResultsResponse {
	s.PageSize = &v
	return s
}

func (s *ListStackGroupOperationResultsResponse) SetTotalCount(v int) *ListStackGroupOperationResultsResponse {
	s.TotalCount = &v
	return s
}

func (s *ListStackGroupOperationResultsResponse) SetStackGroupOperationResults(v []*ListStackGroupOperationResultsResponseStackGroupOperationResults) *ListStackGroupOperationResultsResponse {
	s.StackGroupOperationResults = v
	return s
}

type ListStackGroupOperationResultsResponseStackGroupOperationResults struct {
	AccountId    *string `json:"AccountId,omitempty" xml:"AccountId,omitempty" require:"true"`
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	StatusReason *string `json:"StatusReason,omitempty" xml:"StatusReason,omitempty" require:"true"`
}

func (s ListStackGroupOperationResultsResponseStackGroupOperationResults) String() string {
	return tea.Prettify(s)
}

func (s ListStackGroupOperationResultsResponseStackGroupOperationResults) GoString() string {
	return s.String()
}

func (s *ListStackGroupOperationResultsResponseStackGroupOperationResults) SetAccountId(v string) *ListStackGroupOperationResultsResponseStackGroupOperationResults {
	s.AccountId = &v
	return s
}

func (s *ListStackGroupOperationResultsResponseStackGroupOperationResults) SetRegionId(v string) *ListStackGroupOperationResultsResponseStackGroupOperationResults {
	s.RegionId = &v
	return s
}

func (s *ListStackGroupOperationResultsResponseStackGroupOperationResults) SetStatus(v string) *ListStackGroupOperationResultsResponseStackGroupOperationResults {
	s.Status = &v
	return s
}

func (s *ListStackGroupOperationResultsResponseStackGroupOperationResults) SetStatusReason(v string) *ListStackGroupOperationResultsResponseStackGroupOperationResults {
	s.StatusReason = &v
	return s
}

type StopStackGroupOperationRequest struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	OperationId *string `json:"OperationId,omitempty" xml:"OperationId,omitempty" require:"true"`
}

func (s StopStackGroupOperationRequest) String() string {
	return tea.Prettify(s)
}

func (s StopStackGroupOperationRequest) GoString() string {
	return s.String()
}

func (s *StopStackGroupOperationRequest) SetRegionId(v string) *StopStackGroupOperationRequest {
	s.RegionId = &v
	return s
}

func (s *StopStackGroupOperationRequest) SetOperationId(v string) *StopStackGroupOperationRequest {
	s.OperationId = &v
	return s
}

type StopStackGroupOperationResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s StopStackGroupOperationResponse) String() string {
	return tea.Prettify(s)
}

func (s StopStackGroupOperationResponse) GoString() string {
	return s.String()
}

func (s *StopStackGroupOperationResponse) SetRequestId(v string) *StopStackGroupOperationResponse {
	s.RequestId = &v
	return s
}

type DeleteStackGroupRequest struct {
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackGroupName *string `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
}

func (s DeleteStackGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteStackGroupRequest) GoString() string {
	return s.String()
}

func (s *DeleteStackGroupRequest) SetRegionId(v string) *DeleteStackGroupRequest {
	s.RegionId = &v
	return s
}

func (s *DeleteStackGroupRequest) SetStackGroupName(v string) *DeleteStackGroupRequest {
	s.StackGroupName = &v
	return s
}

type DeleteStackGroupResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteStackGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteStackGroupResponse) GoString() string {
	return s.String()
}

func (s *DeleteStackGroupResponse) SetRequestId(v string) *DeleteStackGroupResponse {
	s.RequestId = &v
	return s
}

type DeleteStackInstancesRequest struct {
	RegionId             *string                `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackGroupName       *string                `json:"StackGroupName,omitempty" xml:"StackGroupName,omitempty" require:"true"`
	AccountIds           map[string]interface{} `json:"AccountIds,omitempty" xml:"AccountIds,omitempty" require:"true"`
	RegionIds            map[string]interface{} `json:"RegionIds,omitempty" xml:"RegionIds,omitempty" require:"true"`
	RetainStacks         *bool                  `json:"RetainStacks,omitempty" xml:"RetainStacks,omitempty" require:"true"`
	ClientToken          *string                `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	OperationDescription *string                `json:"OperationDescription,omitempty" xml:"OperationDescription,omitempty"`
	OperationPreferences map[string]interface{} `json:"OperationPreferences,omitempty" xml:"OperationPreferences,omitempty"`
}

func (s DeleteStackInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteStackInstancesRequest) GoString() string {
	return s.String()
}

func (s *DeleteStackInstancesRequest) SetRegionId(v string) *DeleteStackInstancesRequest {
	s.RegionId = &v
	return s
}

func (s *DeleteStackInstancesRequest) SetStackGroupName(v string) *DeleteStackInstancesRequest {
	s.StackGroupName = &v
	return s
}

func (s *DeleteStackInstancesRequest) SetAccountIds(v map[string]interface{}) *DeleteStackInstancesRequest {
	s.AccountIds = v
	return s
}

func (s *DeleteStackInstancesRequest) SetRegionIds(v map[string]interface{}) *DeleteStackInstancesRequest {
	s.RegionIds = v
	return s
}

func (s *DeleteStackInstancesRequest) SetRetainStacks(v bool) *DeleteStackInstancesRequest {
	s.RetainStacks = &v
	return s
}

func (s *DeleteStackInstancesRequest) SetClientToken(v string) *DeleteStackInstancesRequest {
	s.ClientToken = &v
	return s
}

func (s *DeleteStackInstancesRequest) SetOperationDescription(v string) *DeleteStackInstancesRequest {
	s.OperationDescription = &v
	return s
}

func (s *DeleteStackInstancesRequest) SetOperationPreferences(v map[string]interface{}) *DeleteStackInstancesRequest {
	s.OperationPreferences = v
	return s
}

type DeleteStackInstancesResponse struct {
	RequestId   *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	OperationId *string `json:"OperationId,omitempty" xml:"OperationId,omitempty" require:"true"`
}

func (s DeleteStackInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteStackInstancesResponse) GoString() string {
	return s.String()
}

func (s *DeleteStackInstancesResponse) SetRequestId(v string) *DeleteStackInstancesResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteStackInstancesResponse) SetOperationId(v string) *DeleteStackInstancesResponse {
	s.OperationId = &v
	return s
}

type ListTagResourcesRequest struct {
	RegionId     *string                       `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ResourceId   []*string                     `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" type:"Repeated"`
	ResourceType *string                       `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	Tag          []*ListTagResourcesRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
	NextToken    *string                       `json:"NextToken,omitempty" xml:"NextToken,omitempty"`
}

func (s ListTagResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesRequest) GoString() string {
	return s.String()
}

func (s *ListTagResourcesRequest) SetRegionId(v string) *ListTagResourcesRequest {
	s.RegionId = &v
	return s
}

func (s *ListTagResourcesRequest) SetResourceId(v []*string) *ListTagResourcesRequest {
	s.ResourceId = v
	return s
}

func (s *ListTagResourcesRequest) SetResourceType(v string) *ListTagResourcesRequest {
	s.ResourceType = &v
	return s
}

func (s *ListTagResourcesRequest) SetTag(v []*ListTagResourcesRequestTag) *ListTagResourcesRequest {
	s.Tag = v
	return s
}

func (s *ListTagResourcesRequest) SetNextToken(v string) *ListTagResourcesRequest {
	s.NextToken = &v
	return s
}

type ListTagResourcesRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s ListTagResourcesRequestTag) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesRequestTag) GoString() string {
	return s.String()
}

func (s *ListTagResourcesRequestTag) SetKey(v string) *ListTagResourcesRequestTag {
	s.Key = &v
	return s
}

func (s *ListTagResourcesRequestTag) SetValue(v string) *ListTagResourcesRequestTag {
	s.Value = &v
	return s
}

type ListTagResourcesResponse struct {
	RequestId    *string                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NextToken    *string                                 `json:"NextToken,omitempty" xml:"NextToken,omitempty" require:"true"`
	TagResources []*ListTagResourcesResponseTagResources `json:"TagResources,omitempty" xml:"TagResources,omitempty" require:"true" type:"Repeated"`
}

func (s ListTagResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesResponse) GoString() string {
	return s.String()
}

func (s *ListTagResourcesResponse) SetRequestId(v string) *ListTagResourcesResponse {
	s.RequestId = &v
	return s
}

func (s *ListTagResourcesResponse) SetNextToken(v string) *ListTagResourcesResponse {
	s.NextToken = &v
	return s
}

func (s *ListTagResourcesResponse) SetTagResources(v []*ListTagResourcesResponseTagResources) *ListTagResourcesResponse {
	s.TagResources = v
	return s
}

type ListTagResourcesResponseTagResources struct {
	ResourceId   *string `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true"`
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	TagKey       *string `json:"TagKey,omitempty" xml:"TagKey,omitempty" require:"true"`
	TagValue     *string `json:"TagValue,omitempty" xml:"TagValue,omitempty" require:"true"`
}

func (s ListTagResourcesResponseTagResources) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesResponseTagResources) GoString() string {
	return s.String()
}

func (s *ListTagResourcesResponseTagResources) SetResourceId(v string) *ListTagResourcesResponseTagResources {
	s.ResourceId = &v
	return s
}

func (s *ListTagResourcesResponseTagResources) SetResourceType(v string) *ListTagResourcesResponseTagResources {
	s.ResourceType = &v
	return s
}

func (s *ListTagResourcesResponseTagResources) SetTagKey(v string) *ListTagResourcesResponseTagResources {
	s.TagKey = &v
	return s
}

func (s *ListTagResourcesResponseTagResources) SetTagValue(v string) *ListTagResourcesResponseTagResources {
	s.TagValue = &v
	return s
}

type UntagResourcesRequest struct {
	RegionId     *string   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ResourceId   []*string `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true" type:"Repeated"`
	ResourceType *string   `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	TagKey       []*string `json:"TagKey,omitempty" xml:"TagKey,omitempty" type:"Repeated"`
	All          *bool     `json:"All,omitempty" xml:"All,omitempty"`
}

func (s UntagResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s UntagResourcesRequest) GoString() string {
	return s.String()
}

func (s *UntagResourcesRequest) SetRegionId(v string) *UntagResourcesRequest {
	s.RegionId = &v
	return s
}

func (s *UntagResourcesRequest) SetResourceId(v []*string) *UntagResourcesRequest {
	s.ResourceId = v
	return s
}

func (s *UntagResourcesRequest) SetResourceType(v string) *UntagResourcesRequest {
	s.ResourceType = &v
	return s
}

func (s *UntagResourcesRequest) SetTagKey(v []*string) *UntagResourcesRequest {
	s.TagKey = v
	return s
}

func (s *UntagResourcesRequest) SetAll(v bool) *UntagResourcesRequest {
	s.All = &v
	return s
}

type UntagResourcesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UntagResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s UntagResourcesResponse) GoString() string {
	return s.String()
}

func (s *UntagResourcesResponse) SetRequestId(v string) *UntagResourcesResponse {
	s.RequestId = &v
	return s
}

type TagResourcesRequest struct {
	RegionId     *string                   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ResourceId   []*string                 `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true" type:"Repeated"`
	ResourceType *string                   `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	Tag          []*TagResourcesRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true" type:"Repeated"`
}

func (s TagResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s TagResourcesRequest) GoString() string {
	return s.String()
}

func (s *TagResourcesRequest) SetRegionId(v string) *TagResourcesRequest {
	s.RegionId = &v
	return s
}

func (s *TagResourcesRequest) SetResourceId(v []*string) *TagResourcesRequest {
	s.ResourceId = v
	return s
}

func (s *TagResourcesRequest) SetResourceType(v string) *TagResourcesRequest {
	s.ResourceType = &v
	return s
}

func (s *TagResourcesRequest) SetTag(v []*TagResourcesRequestTag) *TagResourcesRequest {
	s.Tag = v
	return s
}

type TagResourcesRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s TagResourcesRequestTag) String() string {
	return tea.Prettify(s)
}

func (s TagResourcesRequestTag) GoString() string {
	return s.String()
}

func (s *TagResourcesRequestTag) SetKey(v string) *TagResourcesRequestTag {
	s.Key = &v
	return s
}

func (s *TagResourcesRequestTag) SetValue(v string) *TagResourcesRequestTag {
	s.Value = &v
	return s
}

type TagResourcesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s TagResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s TagResourcesResponse) GoString() string {
	return s.String()
}

func (s *TagResourcesResponse) SetRequestId(v string) *TagResourcesResponse {
	s.RequestId = &v
	return s
}

type DeleteTemplateRequest struct {
	TemplateId *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
}

func (s DeleteTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteTemplateRequest) GoString() string {
	return s.String()
}

func (s *DeleteTemplateRequest) SetTemplateId(v string) *DeleteTemplateRequest {
	s.TemplateId = &v
	return s
}

type DeleteTemplateResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteTemplateResponse) GoString() string {
	return s.String()
}

func (s *DeleteTemplateResponse) SetRequestId(v string) *DeleteTemplateResponse {
	s.RequestId = &v
	return s
}

type UpdateTemplateRequest struct {
	TemplateURL  *string `json:"TemplateURL,omitempty" xml:"TemplateURL,omitempty"`
	TemplateName *string `json:"TemplateName,omitempty" xml:"TemplateName,omitempty"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty"`
	TemplateBody *string `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty"`
	TemplateId   *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
}

func (s UpdateTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateTemplateRequest) GoString() string {
	return s.String()
}

func (s *UpdateTemplateRequest) SetTemplateURL(v string) *UpdateTemplateRequest {
	s.TemplateURL = &v
	return s
}

func (s *UpdateTemplateRequest) SetTemplateName(v string) *UpdateTemplateRequest {
	s.TemplateName = &v
	return s
}

func (s *UpdateTemplateRequest) SetDescription(v string) *UpdateTemplateRequest {
	s.Description = &v
	return s
}

func (s *UpdateTemplateRequest) SetTemplateBody(v string) *UpdateTemplateRequest {
	s.TemplateBody = &v
	return s
}

func (s *UpdateTemplateRequest) SetTemplateId(v string) *UpdateTemplateRequest {
	s.TemplateId = &v
	return s
}

type UpdateTemplateResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TemplateId *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
}

func (s UpdateTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateTemplateResponse) GoString() string {
	return s.String()
}

func (s *UpdateTemplateResponse) SetRequestId(v string) *UpdateTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateTemplateResponse) SetTemplateId(v string) *UpdateTemplateResponse {
	s.TemplateId = &v
	return s
}

type ListTemplatesRequest struct {
	PageNumber   *int64                     `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize     *int64                     `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	TemplateName *string                    `json:"TemplateName,omitempty" xml:"TemplateName,omitempty"`
	Tag          []*ListTemplatesRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s ListTemplatesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListTemplatesRequest) GoString() string {
	return s.String()
}

func (s *ListTemplatesRequest) SetPageNumber(v int64) *ListTemplatesRequest {
	s.PageNumber = &v
	return s
}

func (s *ListTemplatesRequest) SetPageSize(v int64) *ListTemplatesRequest {
	s.PageSize = &v
	return s
}

func (s *ListTemplatesRequest) SetTemplateName(v string) *ListTemplatesRequest {
	s.TemplateName = &v
	return s
}

func (s *ListTemplatesRequest) SetTag(v []*ListTemplatesRequestTag) *ListTemplatesRequest {
	s.Tag = v
	return s
}

type ListTemplatesRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s ListTemplatesRequestTag) String() string {
	return tea.Prettify(s)
}

func (s ListTemplatesRequestTag) GoString() string {
	return s.String()
}

func (s *ListTemplatesRequestTag) SetKey(v string) *ListTemplatesRequestTag {
	s.Key = &v
	return s
}

func (s *ListTemplatesRequestTag) SetValue(v string) *ListTemplatesRequestTag {
	s.Value = &v
	return s
}

type ListTemplatesResponse struct {
	PageNumber *int                              `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                              `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	RequestId  *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int                              `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Templates  []*ListTemplatesResponseTemplates `json:"Templates,omitempty" xml:"Templates,omitempty" require:"true" type:"Repeated"`
}

func (s ListTemplatesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListTemplatesResponse) GoString() string {
	return s.String()
}

func (s *ListTemplatesResponse) SetPageNumber(v int) *ListTemplatesResponse {
	s.PageNumber = &v
	return s
}

func (s *ListTemplatesResponse) SetPageSize(v int) *ListTemplatesResponse {
	s.PageSize = &v
	return s
}

func (s *ListTemplatesResponse) SetRequestId(v string) *ListTemplatesResponse {
	s.RequestId = &v
	return s
}

func (s *ListTemplatesResponse) SetTotalCount(v int) *ListTemplatesResponse {
	s.TotalCount = &v
	return s
}

func (s *ListTemplatesResponse) SetTemplates(v []*ListTemplatesResponseTemplates) *ListTemplatesResponse {
	s.Templates = v
	return s
}

type ListTemplatesResponseTemplates struct {
	CreateTime   *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	TemplateId   *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
	TemplateName *string `json:"TemplateName,omitempty" xml:"TemplateName,omitempty" require:"true"`
	UpdateTime   *string `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
}

func (s ListTemplatesResponseTemplates) String() string {
	return tea.Prettify(s)
}

func (s ListTemplatesResponseTemplates) GoString() string {
	return s.String()
}

func (s *ListTemplatesResponseTemplates) SetCreateTime(v string) *ListTemplatesResponseTemplates {
	s.CreateTime = &v
	return s
}

func (s *ListTemplatesResponseTemplates) SetDescription(v string) *ListTemplatesResponseTemplates {
	s.Description = &v
	return s
}

func (s *ListTemplatesResponseTemplates) SetTemplateId(v string) *ListTemplatesResponseTemplates {
	s.TemplateId = &v
	return s
}

func (s *ListTemplatesResponseTemplates) SetTemplateName(v string) *ListTemplatesResponseTemplates {
	s.TemplateName = &v
	return s
}

func (s *ListTemplatesResponseTemplates) SetUpdateTime(v string) *ListTemplatesResponseTemplates {
	s.UpdateTime = &v
	return s
}

type CreateTemplateRequest struct {
	TemplateURL  *string `json:"TemplateURL,omitempty" xml:"TemplateURL,omitempty"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty"`
	TemplateBody *string `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty"`
	TemplateName *string `json:"TemplateName,omitempty" xml:"TemplateName,omitempty" require:"true"`
}

func (s CreateTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateTemplateRequest) GoString() string {
	return s.String()
}

func (s *CreateTemplateRequest) SetTemplateURL(v string) *CreateTemplateRequest {
	s.TemplateURL = &v
	return s
}

func (s *CreateTemplateRequest) SetDescription(v string) *CreateTemplateRequest {
	s.Description = &v
	return s
}

func (s *CreateTemplateRequest) SetTemplateBody(v string) *CreateTemplateRequest {
	s.TemplateBody = &v
	return s
}

func (s *CreateTemplateRequest) SetTemplateName(v string) *CreateTemplateRequest {
	s.TemplateName = &v
	return s
}

type CreateTemplateResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TemplateId *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
}

func (s CreateTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateTemplateResponse) GoString() string {
	return s.String()
}

func (s *CreateTemplateResponse) SetRequestId(v string) *CreateTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *CreateTemplateResponse) SetTemplateId(v string) *CreateTemplateResponse {
	s.TemplateId = &v
	return s
}

type CreateStackRequest struct {
	DisableRollback    *bool                           `json:"DisableRollback,omitempty" xml:"DisableRollback,omitempty"`
	TemplateBody       *string                         `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty"`
	Parameters         []*CreateStackRequestParameters `json:"Parameters,omitempty" xml:"Parameters,omitempty" type:"Repeated"`
	StackPolicyURL     *string                         `json:"StackPolicyURL,omitempty" xml:"StackPolicyURL,omitempty"`
	TimeoutInMinutes   *int64                          `json:"TimeoutInMinutes,omitempty" xml:"TimeoutInMinutes,omitempty"`
	StackPolicyBody    *string                         `json:"StackPolicyBody,omitempty" xml:"StackPolicyBody,omitempty"`
	StackName          *string                         `json:"StackName,omitempty" xml:"StackName,omitempty" require:"true"`
	RegionId           *string                         `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ClientToken        *string                         `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	TemplateURL        *string                         `json:"TemplateURL,omitempty" xml:"TemplateURL,omitempty"`
	NotificationURLs   []*string                       `json:"NotificationURLs,omitempty" xml:"NotificationURLs,omitempty" type:"Repeated"`
	RamRoleName        *string                         `json:"RamRoleName,omitempty" xml:"RamRoleName,omitempty"`
	DeletionProtection *string                         `json:"DeletionProtection,omitempty" xml:"DeletionProtection,omitempty"`
}

func (s CreateStackRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateStackRequest) GoString() string {
	return s.String()
}

func (s *CreateStackRequest) SetDisableRollback(v bool) *CreateStackRequest {
	s.DisableRollback = &v
	return s
}

func (s *CreateStackRequest) SetTemplateBody(v string) *CreateStackRequest {
	s.TemplateBody = &v
	return s
}

func (s *CreateStackRequest) SetParameters(v []*CreateStackRequestParameters) *CreateStackRequest {
	s.Parameters = v
	return s
}

func (s *CreateStackRequest) SetStackPolicyURL(v string) *CreateStackRequest {
	s.StackPolicyURL = &v
	return s
}

func (s *CreateStackRequest) SetTimeoutInMinutes(v int64) *CreateStackRequest {
	s.TimeoutInMinutes = &v
	return s
}

func (s *CreateStackRequest) SetStackPolicyBody(v string) *CreateStackRequest {
	s.StackPolicyBody = &v
	return s
}

func (s *CreateStackRequest) SetStackName(v string) *CreateStackRequest {
	s.StackName = &v
	return s
}

func (s *CreateStackRequest) SetRegionId(v string) *CreateStackRequest {
	s.RegionId = &v
	return s
}

func (s *CreateStackRequest) SetClientToken(v string) *CreateStackRequest {
	s.ClientToken = &v
	return s
}

func (s *CreateStackRequest) SetTemplateURL(v string) *CreateStackRequest {
	s.TemplateURL = &v
	return s
}

func (s *CreateStackRequest) SetNotificationURLs(v []*string) *CreateStackRequest {
	s.NotificationURLs = v
	return s
}

func (s *CreateStackRequest) SetRamRoleName(v string) *CreateStackRequest {
	s.RamRoleName = &v
	return s
}

func (s *CreateStackRequest) SetDeletionProtection(v string) *CreateStackRequest {
	s.DeletionProtection = &v
	return s
}

type CreateStackRequestParameters struct {
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
}

func (s CreateStackRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s CreateStackRequestParameters) GoString() string {
	return s.String()
}

func (s *CreateStackRequestParameters) SetParameterValue(v string) *CreateStackRequestParameters {
	s.ParameterValue = &v
	return s
}

func (s *CreateStackRequestParameters) SetParameterKey(v string) *CreateStackRequestParameters {
	s.ParameterKey = &v
	return s
}

type CreateStackResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StackId   *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
}

func (s CreateStackResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateStackResponse) GoString() string {
	return s.String()
}

func (s *CreateStackResponse) SetRequestId(v string) *CreateStackResponse {
	s.RequestId = &v
	return s
}

func (s *CreateStackResponse) SetStackId(v string) *CreateStackResponse {
	s.StackId = &v
	return s
}

type GetStackRequest struct {
	StackId     *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ClientToken *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
}

func (s GetStackRequest) String() string {
	return tea.Prettify(s)
}

func (s GetStackRequest) GoString() string {
	return s.String()
}

func (s *GetStackRequest) SetStackId(v string) *GetStackRequest {
	s.StackId = &v
	return s
}

func (s *GetStackRequest) SetRegionId(v string) *GetStackRequest {
	s.RegionId = &v
	return s
}

func (s *GetStackRequest) SetClientToken(v string) *GetStackRequest {
	s.ClientToken = &v
	return s
}

type GetStackResponse struct {
	CreateTime          *string                       `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	Description         *string                       `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	DisableRollback     *bool                         `json:"DisableRollback,omitempty" xml:"DisableRollback,omitempty" require:"true"`
	RegionId            *string                       `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	RequestId           *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StackId             *string                       `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	StackName           *string                       `json:"StackName,omitempty" xml:"StackName,omitempty" require:"true"`
	Status              *string                       `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	StatusReason        *string                       `json:"StatusReason,omitempty" xml:"StatusReason,omitempty" require:"true"`
	TemplateDescription *string                       `json:"TemplateDescription,omitempty" xml:"TemplateDescription,omitempty" require:"true"`
	TimeoutInMinutes    *int                          `json:"TimeoutInMinutes,omitempty" xml:"TimeoutInMinutes,omitempty" require:"true"`
	UpdateTime          *string                       `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	ParentStackId       *string                       `json:"ParentStackId,omitempty" xml:"ParentStackId,omitempty" require:"true"`
	StackDriftStatus    *string                       `json:"StackDriftStatus,omitempty" xml:"StackDriftStatus,omitempty" require:"true"`
	DriftDetectionTime  *string                       `json:"DriftDetectionTime,omitempty" xml:"DriftDetectionTime,omitempty" require:"true"`
	RamRoleName         *string                       `json:"RamRoleName,omitempty" xml:"RamRoleName,omitempty" require:"true"`
	DeletionProtection  *string                       `json:"DeletionProtection,omitempty" xml:"DeletionProtection,omitempty" require:"true"`
	RootStackId         *string                       `json:"RootStackId,omitempty" xml:"RootStackId,omitempty" require:"true"`
	StackType           *string                       `json:"StackType,omitempty" xml:"StackType,omitempty" require:"true"`
	Parameters          []*GetStackResponseParameters `json:"Parameters,omitempty" xml:"Parameters,omitempty" require:"true" type:"Repeated"`
	Outputs             []map[string]interface{}      `json:"Outputs,omitempty" xml:"Outputs,omitempty" require:"true" type:"Repeated"`
	NotificationURLs    []*string                     `json:"NotificationURLs,omitempty" xml:"NotificationURLs,omitempty" require:"true" type:"Repeated"`
}

func (s GetStackResponse) String() string {
	return tea.Prettify(s)
}

func (s GetStackResponse) GoString() string {
	return s.String()
}

func (s *GetStackResponse) SetCreateTime(v string) *GetStackResponse {
	s.CreateTime = &v
	return s
}

func (s *GetStackResponse) SetDescription(v string) *GetStackResponse {
	s.Description = &v
	return s
}

func (s *GetStackResponse) SetDisableRollback(v bool) *GetStackResponse {
	s.DisableRollback = &v
	return s
}

func (s *GetStackResponse) SetRegionId(v string) *GetStackResponse {
	s.RegionId = &v
	return s
}

func (s *GetStackResponse) SetRequestId(v string) *GetStackResponse {
	s.RequestId = &v
	return s
}

func (s *GetStackResponse) SetStackId(v string) *GetStackResponse {
	s.StackId = &v
	return s
}

func (s *GetStackResponse) SetStackName(v string) *GetStackResponse {
	s.StackName = &v
	return s
}

func (s *GetStackResponse) SetStatus(v string) *GetStackResponse {
	s.Status = &v
	return s
}

func (s *GetStackResponse) SetStatusReason(v string) *GetStackResponse {
	s.StatusReason = &v
	return s
}

func (s *GetStackResponse) SetTemplateDescription(v string) *GetStackResponse {
	s.TemplateDescription = &v
	return s
}

func (s *GetStackResponse) SetTimeoutInMinutes(v int) *GetStackResponse {
	s.TimeoutInMinutes = &v
	return s
}

func (s *GetStackResponse) SetUpdateTime(v string) *GetStackResponse {
	s.UpdateTime = &v
	return s
}

func (s *GetStackResponse) SetParentStackId(v string) *GetStackResponse {
	s.ParentStackId = &v
	return s
}

func (s *GetStackResponse) SetStackDriftStatus(v string) *GetStackResponse {
	s.StackDriftStatus = &v
	return s
}

func (s *GetStackResponse) SetDriftDetectionTime(v string) *GetStackResponse {
	s.DriftDetectionTime = &v
	return s
}

func (s *GetStackResponse) SetRamRoleName(v string) *GetStackResponse {
	s.RamRoleName = &v
	return s
}

func (s *GetStackResponse) SetDeletionProtection(v string) *GetStackResponse {
	s.DeletionProtection = &v
	return s
}

func (s *GetStackResponse) SetRootStackId(v string) *GetStackResponse {
	s.RootStackId = &v
	return s
}

func (s *GetStackResponse) SetStackType(v string) *GetStackResponse {
	s.StackType = &v
	return s
}

func (s *GetStackResponse) SetParameters(v []*GetStackResponseParameters) *GetStackResponse {
	s.Parameters = v
	return s
}

func (s *GetStackResponse) SetOutputs(v []map[string]interface{}) *GetStackResponse {
	s.Outputs = v
	return s
}

func (s *GetStackResponse) SetNotificationURLs(v []*string) *GetStackResponse {
	s.NotificationURLs = v
	return s
}

type GetStackResponseParameters struct {
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
}

func (s GetStackResponseParameters) String() string {
	return tea.Prettify(s)
}

func (s GetStackResponseParameters) GoString() string {
	return s.String()
}

func (s *GetStackResponseParameters) SetParameterKey(v string) *GetStackResponseParameters {
	s.ParameterKey = &v
	return s
}

func (s *GetStackResponseParameters) SetParameterValue(v string) *GetStackResponseParameters {
	s.ParameterValue = &v
	return s
}

type DeleteStackRequest struct {
	StackId            *string   `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	RetainAllResources *bool     `json:"RetainAllResources,omitempty" xml:"RetainAllResources,omitempty"`
	RegionId           *string   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	RetainResources    []*string `json:"RetainResources,omitempty" xml:"RetainResources,omitempty" type:"Repeated"`
	RamRoleName        *string   `json:"RamRoleName,omitempty" xml:"RamRoleName,omitempty"`
}

func (s DeleteStackRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteStackRequest) GoString() string {
	return s.String()
}

func (s *DeleteStackRequest) SetStackId(v string) *DeleteStackRequest {
	s.StackId = &v
	return s
}

func (s *DeleteStackRequest) SetRetainAllResources(v bool) *DeleteStackRequest {
	s.RetainAllResources = &v
	return s
}

func (s *DeleteStackRequest) SetRegionId(v string) *DeleteStackRequest {
	s.RegionId = &v
	return s
}

func (s *DeleteStackRequest) SetRetainResources(v []*string) *DeleteStackRequest {
	s.RetainResources = v
	return s
}

func (s *DeleteStackRequest) SetRamRoleName(v string) *DeleteStackRequest {
	s.RamRoleName = &v
	return s
}

type DeleteStackResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteStackResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteStackResponse) GoString() string {
	return s.String()
}

func (s *DeleteStackResponse) SetRequestId(v string) *DeleteStackResponse {
	s.RequestId = &v
	return s
}

type UpdateStackRequest struct {
	StackId                     *string                         `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	ClientToken                 *string                         `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	StackPolicyDuringUpdateBody *string                         `json:"StackPolicyDuringUpdateBody,omitempty" xml:"StackPolicyDuringUpdateBody,omitempty"`
	TimeoutInMinutes            *int64                          `json:"TimeoutInMinutes,omitempty" xml:"TimeoutInMinutes,omitempty"`
	TemplateBody                *string                         `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty"`
	Parameters                  []*UpdateStackRequestParameters `json:"Parameters,omitempty" xml:"Parameters,omitempty" type:"Repeated"`
	StackPolicyURL              *string                         `json:"StackPolicyURL,omitempty" xml:"StackPolicyURL,omitempty"`
	StackPolicyDuringUpdateURL  *string                         `json:"StackPolicyDuringUpdateURL,omitempty" xml:"StackPolicyDuringUpdateURL,omitempty"`
	StackPolicyBody             *string                         `json:"StackPolicyBody,omitempty" xml:"StackPolicyBody,omitempty"`
	UsePreviousParameters       *bool                           `json:"UsePreviousParameters,omitempty" xml:"UsePreviousParameters,omitempty"`
	RegionId                    *string                         `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	DisableRollback             *bool                           `json:"DisableRollback,omitempty" xml:"DisableRollback,omitempty"`
	TemplateURL                 *string                         `json:"TemplateURL,omitempty" xml:"TemplateURL,omitempty"`
	RamRoleName                 *string                         `json:"RamRoleName,omitempty" xml:"RamRoleName,omitempty"`
	ReplacementOption           *string                         `json:"ReplacementOption,omitempty" xml:"ReplacementOption,omitempty"`
}

func (s UpdateStackRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateStackRequest) GoString() string {
	return s.String()
}

func (s *UpdateStackRequest) SetStackId(v string) *UpdateStackRequest {
	s.StackId = &v
	return s
}

func (s *UpdateStackRequest) SetClientToken(v string) *UpdateStackRequest {
	s.ClientToken = &v
	return s
}

func (s *UpdateStackRequest) SetStackPolicyDuringUpdateBody(v string) *UpdateStackRequest {
	s.StackPolicyDuringUpdateBody = &v
	return s
}

func (s *UpdateStackRequest) SetTimeoutInMinutes(v int64) *UpdateStackRequest {
	s.TimeoutInMinutes = &v
	return s
}

func (s *UpdateStackRequest) SetTemplateBody(v string) *UpdateStackRequest {
	s.TemplateBody = &v
	return s
}

func (s *UpdateStackRequest) SetParameters(v []*UpdateStackRequestParameters) *UpdateStackRequest {
	s.Parameters = v
	return s
}

func (s *UpdateStackRequest) SetStackPolicyURL(v string) *UpdateStackRequest {
	s.StackPolicyURL = &v
	return s
}

func (s *UpdateStackRequest) SetStackPolicyDuringUpdateURL(v string) *UpdateStackRequest {
	s.StackPolicyDuringUpdateURL = &v
	return s
}

func (s *UpdateStackRequest) SetStackPolicyBody(v string) *UpdateStackRequest {
	s.StackPolicyBody = &v
	return s
}

func (s *UpdateStackRequest) SetUsePreviousParameters(v bool) *UpdateStackRequest {
	s.UsePreviousParameters = &v
	return s
}

func (s *UpdateStackRequest) SetRegionId(v string) *UpdateStackRequest {
	s.RegionId = &v
	return s
}

func (s *UpdateStackRequest) SetDisableRollback(v bool) *UpdateStackRequest {
	s.DisableRollback = &v
	return s
}

func (s *UpdateStackRequest) SetTemplateURL(v string) *UpdateStackRequest {
	s.TemplateURL = &v
	return s
}

func (s *UpdateStackRequest) SetRamRoleName(v string) *UpdateStackRequest {
	s.RamRoleName = &v
	return s
}

func (s *UpdateStackRequest) SetReplacementOption(v string) *UpdateStackRequest {
	s.ReplacementOption = &v
	return s
}

type UpdateStackRequestParameters struct {
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
}

func (s UpdateStackRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s UpdateStackRequestParameters) GoString() string {
	return s.String()
}

func (s *UpdateStackRequestParameters) SetParameterValue(v string) *UpdateStackRequestParameters {
	s.ParameterValue = &v
	return s
}

func (s *UpdateStackRequestParameters) SetParameterKey(v string) *UpdateStackRequestParameters {
	s.ParameterKey = &v
	return s
}

type UpdateStackResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StackId   *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
}

func (s UpdateStackResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateStackResponse) GoString() string {
	return s.String()
}

func (s *UpdateStackResponse) SetRequestId(v string) *UpdateStackResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateStackResponse) SetStackId(v string) *UpdateStackResponse {
	s.StackId = &v
	return s
}

type ListStacksRequest struct {
	Status          []*string               `json:"Status,omitempty" xml:"Status,omitempty" type:"Repeated"`
	PageSize        *int64                  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	ParentStackId   *string                 `json:"ParentStackId,omitempty" xml:"ParentStackId,omitempty"`
	RegionId        *string                 `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackName       []*string               `json:"StackName,omitempty" xml:"StackName,omitempty" type:"Repeated"`
	PageNumber      *int64                  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	ShowNestedStack *bool                   `json:"ShowNestedStack,omitempty" xml:"ShowNestedStack,omitempty"`
	Tag             []*ListStacksRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
	StackId         *string                 `json:"StackId,omitempty" xml:"StackId,omitempty"`
}

func (s ListStacksRequest) String() string {
	return tea.Prettify(s)
}

func (s ListStacksRequest) GoString() string {
	return s.String()
}

func (s *ListStacksRequest) SetStatus(v []*string) *ListStacksRequest {
	s.Status = v
	return s
}

func (s *ListStacksRequest) SetPageSize(v int64) *ListStacksRequest {
	s.PageSize = &v
	return s
}

func (s *ListStacksRequest) SetParentStackId(v string) *ListStacksRequest {
	s.ParentStackId = &v
	return s
}

func (s *ListStacksRequest) SetRegionId(v string) *ListStacksRequest {
	s.RegionId = &v
	return s
}

func (s *ListStacksRequest) SetStackName(v []*string) *ListStacksRequest {
	s.StackName = v
	return s
}

func (s *ListStacksRequest) SetPageNumber(v int64) *ListStacksRequest {
	s.PageNumber = &v
	return s
}

func (s *ListStacksRequest) SetShowNestedStack(v bool) *ListStacksRequest {
	s.ShowNestedStack = &v
	return s
}

func (s *ListStacksRequest) SetTag(v []*ListStacksRequestTag) *ListStacksRequest {
	s.Tag = v
	return s
}

func (s *ListStacksRequest) SetStackId(v string) *ListStacksRequest {
	s.StackId = &v
	return s
}

type ListStacksRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s ListStacksRequestTag) String() string {
	return tea.Prettify(s)
}

func (s ListStacksRequestTag) GoString() string {
	return s.String()
}

func (s *ListStacksRequestTag) SetKey(v string) *ListStacksRequestTag {
	s.Key = &v
	return s
}

func (s *ListStacksRequestTag) SetValue(v string) *ListStacksRequestTag {
	s.Value = &v
	return s
}

type ListStacksResponse struct {
	PageNumber *int                        `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                        `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	RequestId  *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int                        `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Stacks     []*ListStacksResponseStacks `json:"Stacks,omitempty" xml:"Stacks,omitempty" require:"true" type:"Repeated"`
}

func (s ListStacksResponse) String() string {
	return tea.Prettify(s)
}

func (s ListStacksResponse) GoString() string {
	return s.String()
}

func (s *ListStacksResponse) SetPageNumber(v int) *ListStacksResponse {
	s.PageNumber = &v
	return s
}

func (s *ListStacksResponse) SetPageSize(v int) *ListStacksResponse {
	s.PageSize = &v
	return s
}

func (s *ListStacksResponse) SetRequestId(v string) *ListStacksResponse {
	s.RequestId = &v
	return s
}

func (s *ListStacksResponse) SetTotalCount(v int) *ListStacksResponse {
	s.TotalCount = &v
	return s
}

func (s *ListStacksResponse) SetStacks(v []*ListStacksResponseStacks) *ListStacksResponse {
	s.Stacks = v
	return s
}

type ListStacksResponseStacks struct {
	CreateTime         *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	DisableRollback    *bool   `json:"DisableRollback,omitempty" xml:"DisableRollback,omitempty" require:"true"`
	RegionId           *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackId            *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	StackName          *string `json:"StackName,omitempty" xml:"StackName,omitempty" require:"true"`
	Status             *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	StatusReason       *string `json:"StatusReason,omitempty" xml:"StatusReason,omitempty" require:"true"`
	TimeoutInMinutes   *int    `json:"TimeoutInMinutes,omitempty" xml:"TimeoutInMinutes,omitempty" require:"true"`
	ParentStackId      *string `json:"ParentStackId,omitempty" xml:"ParentStackId,omitempty" require:"true"`
	UpdateTime         *string `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	StackDriftStatus   *string `json:"StackDriftStatus,omitempty" xml:"StackDriftStatus,omitempty" require:"true"`
	DriftDetectionTime *string `json:"DriftDetectionTime,omitempty" xml:"DriftDetectionTime,omitempty" require:"true"`
}

func (s ListStacksResponseStacks) String() string {
	return tea.Prettify(s)
}

func (s ListStacksResponseStacks) GoString() string {
	return s.String()
}

func (s *ListStacksResponseStacks) SetCreateTime(v string) *ListStacksResponseStacks {
	s.CreateTime = &v
	return s
}

func (s *ListStacksResponseStacks) SetDisableRollback(v bool) *ListStacksResponseStacks {
	s.DisableRollback = &v
	return s
}

func (s *ListStacksResponseStacks) SetRegionId(v string) *ListStacksResponseStacks {
	s.RegionId = &v
	return s
}

func (s *ListStacksResponseStacks) SetStackId(v string) *ListStacksResponseStacks {
	s.StackId = &v
	return s
}

func (s *ListStacksResponseStacks) SetStackName(v string) *ListStacksResponseStacks {
	s.StackName = &v
	return s
}

func (s *ListStacksResponseStacks) SetStatus(v string) *ListStacksResponseStacks {
	s.Status = &v
	return s
}

func (s *ListStacksResponseStacks) SetStatusReason(v string) *ListStacksResponseStacks {
	s.StatusReason = &v
	return s
}

func (s *ListStacksResponseStacks) SetTimeoutInMinutes(v int) *ListStacksResponseStacks {
	s.TimeoutInMinutes = &v
	return s
}

func (s *ListStacksResponseStacks) SetParentStackId(v string) *ListStacksResponseStacks {
	s.ParentStackId = &v
	return s
}

func (s *ListStacksResponseStacks) SetUpdateTime(v string) *ListStacksResponseStacks {
	s.UpdateTime = &v
	return s
}

func (s *ListStacksResponseStacks) SetStackDriftStatus(v string) *ListStacksResponseStacks {
	s.StackDriftStatus = &v
	return s
}

func (s *ListStacksResponseStacks) SetDriftDetectionTime(v string) *ListStacksResponseStacks {
	s.DriftDetectionTime = &v
	return s
}

type PreviewStackRequest struct {
	DisableRollback  *bool                            `json:"DisableRollback,omitempty" xml:"DisableRollback,omitempty"`
	TimeoutInMinutes *int64                           `json:"TimeoutInMinutes,omitempty" xml:"TimeoutInMinutes,omitempty"`
	Parameters       []*PreviewStackRequestParameters `json:"Parameters,omitempty" xml:"Parameters,omitempty" type:"Repeated"`
	TemplateBody     *string                          `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty"`
	StackPolicyURL   *string                          `json:"StackPolicyURL,omitempty" xml:"StackPolicyURL,omitempty"`
	RegionId         *string                          `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackPolicyBody  *string                          `json:"StackPolicyBody,omitempty" xml:"StackPolicyBody,omitempty"`
	StackName        *string                          `json:"StackName,omitempty" xml:"StackName,omitempty" require:"true"`
	ClientToken      *string                          `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	TemplateURL      *string                          `json:"TemplateURL,omitempty" xml:"TemplateURL,omitempty"`
}

func (s PreviewStackRequest) String() string {
	return tea.Prettify(s)
}

func (s PreviewStackRequest) GoString() string {
	return s.String()
}

func (s *PreviewStackRequest) SetDisableRollback(v bool) *PreviewStackRequest {
	s.DisableRollback = &v
	return s
}

func (s *PreviewStackRequest) SetTimeoutInMinutes(v int64) *PreviewStackRequest {
	s.TimeoutInMinutes = &v
	return s
}

func (s *PreviewStackRequest) SetParameters(v []*PreviewStackRequestParameters) *PreviewStackRequest {
	s.Parameters = v
	return s
}

func (s *PreviewStackRequest) SetTemplateBody(v string) *PreviewStackRequest {
	s.TemplateBody = &v
	return s
}

func (s *PreviewStackRequest) SetStackPolicyURL(v string) *PreviewStackRequest {
	s.StackPolicyURL = &v
	return s
}

func (s *PreviewStackRequest) SetRegionId(v string) *PreviewStackRequest {
	s.RegionId = &v
	return s
}

func (s *PreviewStackRequest) SetStackPolicyBody(v string) *PreviewStackRequest {
	s.StackPolicyBody = &v
	return s
}

func (s *PreviewStackRequest) SetStackName(v string) *PreviewStackRequest {
	s.StackName = &v
	return s
}

func (s *PreviewStackRequest) SetClientToken(v string) *PreviewStackRequest {
	s.ClientToken = &v
	return s
}

func (s *PreviewStackRequest) SetTemplateURL(v string) *PreviewStackRequest {
	s.TemplateURL = &v
	return s
}

type PreviewStackRequestParameters struct {
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
}

func (s PreviewStackRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s PreviewStackRequestParameters) GoString() string {
	return s.String()
}

func (s *PreviewStackRequestParameters) SetParameterValue(v string) *PreviewStackRequestParameters {
	s.ParameterValue = &v
	return s
}

func (s *PreviewStackRequestParameters) SetParameterKey(v string) *PreviewStackRequestParameters {
	s.ParameterKey = &v
	return s
}

type PreviewStackResponse struct {
	RequestId *string                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Stack     *PreviewStackResponseStack `json:"Stack,omitempty" xml:"Stack,omitempty" require:"true" type:"Struct"`
}

func (s PreviewStackResponse) String() string {
	return tea.Prettify(s)
}

func (s PreviewStackResponse) GoString() string {
	return s.String()
}

func (s *PreviewStackResponse) SetRequestId(v string) *PreviewStackResponse {
	s.RequestId = &v
	return s
}

func (s *PreviewStackResponse) SetStack(v *PreviewStackResponseStack) *PreviewStackResponse {
	s.Stack = v
	return s
}

type PreviewStackResponseStack struct {
	Description         *string                                `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	DisableRollback     *bool                                  `json:"DisableRollback,omitempty" xml:"DisableRollback,omitempty" require:"true"`
	RegionId            *string                                `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackName           *string                                `json:"StackName,omitempty" xml:"StackName,omitempty" require:"true"`
	StackPolicyBody     map[string]interface{}                 `json:"StackPolicyBody,omitempty" xml:"StackPolicyBody,omitempty" require:"true"`
	TemplateDescription *string                                `json:"TemplateDescription,omitempty" xml:"TemplateDescription,omitempty" require:"true"`
	TimeoutInMinutes    *int                                   `json:"TimeoutInMinutes,omitempty" xml:"TimeoutInMinutes,omitempty" require:"true"`
	Parameters          []*PreviewStackResponseStackParameters `json:"Parameters,omitempty" xml:"Parameters,omitempty" require:"true" type:"Repeated"`
	Resources           []*PreviewStackResponseStackResources  `json:"Resources,omitempty" xml:"Resources,omitempty" require:"true" type:"Repeated"`
}

func (s PreviewStackResponseStack) String() string {
	return tea.Prettify(s)
}

func (s PreviewStackResponseStack) GoString() string {
	return s.String()
}

func (s *PreviewStackResponseStack) SetDescription(v string) *PreviewStackResponseStack {
	s.Description = &v
	return s
}

func (s *PreviewStackResponseStack) SetDisableRollback(v bool) *PreviewStackResponseStack {
	s.DisableRollback = &v
	return s
}

func (s *PreviewStackResponseStack) SetRegionId(v string) *PreviewStackResponseStack {
	s.RegionId = &v
	return s
}

func (s *PreviewStackResponseStack) SetStackName(v string) *PreviewStackResponseStack {
	s.StackName = &v
	return s
}

func (s *PreviewStackResponseStack) SetStackPolicyBody(v map[string]interface{}) *PreviewStackResponseStack {
	s.StackPolicyBody = v
	return s
}

func (s *PreviewStackResponseStack) SetTemplateDescription(v string) *PreviewStackResponseStack {
	s.TemplateDescription = &v
	return s
}

func (s *PreviewStackResponseStack) SetTimeoutInMinutes(v int) *PreviewStackResponseStack {
	s.TimeoutInMinutes = &v
	return s
}

func (s *PreviewStackResponseStack) SetParameters(v []*PreviewStackResponseStackParameters) *PreviewStackResponseStack {
	s.Parameters = v
	return s
}

func (s *PreviewStackResponseStack) SetResources(v []*PreviewStackResponseStackResources) *PreviewStackResponseStack {
	s.Resources = v
	return s
}

type PreviewStackResponseStackParameters struct {
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
}

func (s PreviewStackResponseStackParameters) String() string {
	return tea.Prettify(s)
}

func (s PreviewStackResponseStackParameters) GoString() string {
	return s.String()
}

func (s *PreviewStackResponseStackParameters) SetParameterKey(v string) *PreviewStackResponseStackParameters {
	s.ParameterKey = &v
	return s
}

func (s *PreviewStackResponseStackParameters) SetParameterValue(v string) *PreviewStackResponseStackParameters {
	s.ParameterValue = &v
	return s
}

type PreviewStackResponseStackResources struct {
	Description       *string                `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	LogicalResourceId *string                `json:"LogicalResourceId,omitempty" xml:"LogicalResourceId,omitempty" require:"true"`
	Properties        map[string]interface{} `json:"Properties,omitempty" xml:"Properties,omitempty" require:"true"`
	ResourceType      *string                `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	Stack             map[string]interface{} `json:"Stack,omitempty" xml:"Stack,omitempty" require:"true"`
	RequiredBy        []*string              `json:"RequiredBy,omitempty" xml:"RequiredBy,omitempty" require:"true" type:"Repeated"`
}

func (s PreviewStackResponseStackResources) String() string {
	return tea.Prettify(s)
}

func (s PreviewStackResponseStackResources) GoString() string {
	return s.String()
}

func (s *PreviewStackResponseStackResources) SetDescription(v string) *PreviewStackResponseStackResources {
	s.Description = &v
	return s
}

func (s *PreviewStackResponseStackResources) SetLogicalResourceId(v string) *PreviewStackResponseStackResources {
	s.LogicalResourceId = &v
	return s
}

func (s *PreviewStackResponseStackResources) SetProperties(v map[string]interface{}) *PreviewStackResponseStackResources {
	s.Properties = v
	return s
}

func (s *PreviewStackResponseStackResources) SetResourceType(v string) *PreviewStackResponseStackResources {
	s.ResourceType = &v
	return s
}

func (s *PreviewStackResponseStackResources) SetStack(v map[string]interface{}) *PreviewStackResponseStackResources {
	s.Stack = v
	return s
}

func (s *PreviewStackResponseStackResources) SetRequiredBy(v []*string) *PreviewStackResponseStackResources {
	s.RequiredBy = v
	return s
}

type GetTemplateEstimateCostRequest struct {
	TemplateURL  *string                                     `json:"TemplateURL,omitempty" xml:"TemplateURL,omitempty"`
	RegionId     *string                                     `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Parameters   []*GetTemplateEstimateCostRequestParameters `json:"Parameters,omitempty" xml:"Parameters,omitempty" type:"Repeated"`
	TemplateBody *string                                     `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty"`
	ClientToken  *string                                     `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
}

func (s GetTemplateEstimateCostRequest) String() string {
	return tea.Prettify(s)
}

func (s GetTemplateEstimateCostRequest) GoString() string {
	return s.String()
}

func (s *GetTemplateEstimateCostRequest) SetTemplateURL(v string) *GetTemplateEstimateCostRequest {
	s.TemplateURL = &v
	return s
}

func (s *GetTemplateEstimateCostRequest) SetRegionId(v string) *GetTemplateEstimateCostRequest {
	s.RegionId = &v
	return s
}

func (s *GetTemplateEstimateCostRequest) SetParameters(v []*GetTemplateEstimateCostRequestParameters) *GetTemplateEstimateCostRequest {
	s.Parameters = v
	return s
}

func (s *GetTemplateEstimateCostRequest) SetTemplateBody(v string) *GetTemplateEstimateCostRequest {
	s.TemplateBody = &v
	return s
}

func (s *GetTemplateEstimateCostRequest) SetClientToken(v string) *GetTemplateEstimateCostRequest {
	s.ClientToken = &v
	return s
}

type GetTemplateEstimateCostRequestParameters struct {
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
}

func (s GetTemplateEstimateCostRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s GetTemplateEstimateCostRequestParameters) GoString() string {
	return s.String()
}

func (s *GetTemplateEstimateCostRequestParameters) SetParameterValue(v string) *GetTemplateEstimateCostRequestParameters {
	s.ParameterValue = &v
	return s
}

func (s *GetTemplateEstimateCostRequestParameters) SetParameterKey(v string) *GetTemplateEstimateCostRequestParameters {
	s.ParameterKey = &v
	return s
}

type GetTemplateEstimateCostResponse struct {
	RequestId *string                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Resources map[string]interface{} `json:"Resources,omitempty" xml:"Resources,omitempty" require:"true"`
}

func (s GetTemplateEstimateCostResponse) String() string {
	return tea.Prettify(s)
}

func (s GetTemplateEstimateCostResponse) GoString() string {
	return s.String()
}

func (s *GetTemplateEstimateCostResponse) SetRequestId(v string) *GetTemplateEstimateCostResponse {
	s.RequestId = &v
	return s
}

func (s *GetTemplateEstimateCostResponse) SetResources(v map[string]interface{}) *GetTemplateEstimateCostResponse {
	s.Resources = v
	return s
}

type CancelUpdateStackRequest struct {
	StackId    *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	RegionId   *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	CancelType *string `json:"CancelType,omitempty" xml:"CancelType,omitempty"`
}

func (s CancelUpdateStackRequest) String() string {
	return tea.Prettify(s)
}

func (s CancelUpdateStackRequest) GoString() string {
	return s.String()
}

func (s *CancelUpdateStackRequest) SetStackId(v string) *CancelUpdateStackRequest {
	s.StackId = &v
	return s
}

func (s *CancelUpdateStackRequest) SetRegionId(v string) *CancelUpdateStackRequest {
	s.RegionId = &v
	return s
}

func (s *CancelUpdateStackRequest) SetCancelType(v string) *CancelUpdateStackRequest {
	s.CancelType = &v
	return s
}

type CancelUpdateStackResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CancelUpdateStackResponse) String() string {
	return tea.Prettify(s)
}

func (s CancelUpdateStackResponse) GoString() string {
	return s.String()
}

func (s *CancelUpdateStackResponse) SetRequestId(v string) *CancelUpdateStackResponse {
	s.RequestId = &v
	return s
}

type ContinueCreateStackRequest struct {
	StackId             *string                                 `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	RecreatingResources []*string                               `json:"RecreatingResources,omitempty" xml:"RecreatingResources,omitempty" type:"Repeated"`
	RegionId            *string                                 `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	RamRoleName         *string                                 `json:"RamRoleName,omitempty" xml:"RamRoleName,omitempty"`
	Mode                *string                                 `json:"Mode,omitempty" xml:"Mode,omitempty"`
	TemplateBody        *string                                 `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty"`
	TemplateURL         *string                                 `json:"TemplateURL,omitempty" xml:"TemplateURL,omitempty"`
	Parameters          []*ContinueCreateStackRequestParameters `json:"Parameters,omitempty" xml:"Parameters,omitempty" type:"Repeated"`
	DryRun              *bool                                   `json:"DryRun,omitempty" xml:"DryRun,omitempty"`
}

func (s ContinueCreateStackRequest) String() string {
	return tea.Prettify(s)
}

func (s ContinueCreateStackRequest) GoString() string {
	return s.String()
}

func (s *ContinueCreateStackRequest) SetStackId(v string) *ContinueCreateStackRequest {
	s.StackId = &v
	return s
}

func (s *ContinueCreateStackRequest) SetRecreatingResources(v []*string) *ContinueCreateStackRequest {
	s.RecreatingResources = v
	return s
}

func (s *ContinueCreateStackRequest) SetRegionId(v string) *ContinueCreateStackRequest {
	s.RegionId = &v
	return s
}

func (s *ContinueCreateStackRequest) SetRamRoleName(v string) *ContinueCreateStackRequest {
	s.RamRoleName = &v
	return s
}

func (s *ContinueCreateStackRequest) SetMode(v string) *ContinueCreateStackRequest {
	s.Mode = &v
	return s
}

func (s *ContinueCreateStackRequest) SetTemplateBody(v string) *ContinueCreateStackRequest {
	s.TemplateBody = &v
	return s
}

func (s *ContinueCreateStackRequest) SetTemplateURL(v string) *ContinueCreateStackRequest {
	s.TemplateURL = &v
	return s
}

func (s *ContinueCreateStackRequest) SetParameters(v []*ContinueCreateStackRequestParameters) *ContinueCreateStackRequest {
	s.Parameters = v
	return s
}

func (s *ContinueCreateStackRequest) SetDryRun(v bool) *ContinueCreateStackRequest {
	s.DryRun = &v
	return s
}

type ContinueCreateStackRequestParameters struct {
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
}

func (s ContinueCreateStackRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s ContinueCreateStackRequestParameters) GoString() string {
	return s.String()
}

func (s *ContinueCreateStackRequestParameters) SetParameterKey(v string) *ContinueCreateStackRequestParameters {
	s.ParameterKey = &v
	return s
}

func (s *ContinueCreateStackRequestParameters) SetParameterValue(v string) *ContinueCreateStackRequestParameters {
	s.ParameterValue = &v
	return s
}

type ContinueCreateStackResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StackId   *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
}

func (s ContinueCreateStackResponse) String() string {
	return tea.Prettify(s)
}

func (s ContinueCreateStackResponse) GoString() string {
	return s.String()
}

func (s *ContinueCreateStackResponse) SetRequestId(v string) *ContinueCreateStackResponse {
	s.RequestId = &v
	return s
}

func (s *ContinueCreateStackResponse) SetStackId(v string) *ContinueCreateStackResponse {
	s.StackId = &v
	return s
}

type SetStackPolicyRequest struct {
	StackId         *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	RegionId        *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackPolicyBody *string `json:"StackPolicyBody,omitempty" xml:"StackPolicyBody,omitempty"`
	StackPolicyURL  *string `json:"StackPolicyURL,omitempty" xml:"StackPolicyURL,omitempty"`
}

func (s SetStackPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s SetStackPolicyRequest) GoString() string {
	return s.String()
}

func (s *SetStackPolicyRequest) SetStackId(v string) *SetStackPolicyRequest {
	s.StackId = &v
	return s
}

func (s *SetStackPolicyRequest) SetRegionId(v string) *SetStackPolicyRequest {
	s.RegionId = &v
	return s
}

func (s *SetStackPolicyRequest) SetStackPolicyBody(v string) *SetStackPolicyRequest {
	s.StackPolicyBody = &v
	return s
}

func (s *SetStackPolicyRequest) SetStackPolicyURL(v string) *SetStackPolicyRequest {
	s.StackPolicyURL = &v
	return s
}

type SetStackPolicyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetStackPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s SetStackPolicyResponse) GoString() string {
	return s.String()
}

func (s *SetStackPolicyResponse) SetRequestId(v string) *SetStackPolicyResponse {
	s.RequestId = &v
	return s
}

type GetStackPolicyRequest struct {
	StackId  *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s GetStackPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s GetStackPolicyRequest) GoString() string {
	return s.String()
}

func (s *GetStackPolicyRequest) SetStackId(v string) *GetStackPolicyRequest {
	s.StackId = &v
	return s
}

func (s *GetStackPolicyRequest) SetRegionId(v string) *GetStackPolicyRequest {
	s.RegionId = &v
	return s
}

type GetStackPolicyResponse struct {
	RequestId       *string                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StackPolicyBody map[string]interface{} `json:"StackPolicyBody,omitempty" xml:"StackPolicyBody,omitempty" require:"true"`
}

func (s GetStackPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s GetStackPolicyResponse) GoString() string {
	return s.String()
}

func (s *GetStackPolicyResponse) SetRequestId(v string) *GetStackPolicyResponse {
	s.RequestId = &v
	return s
}

func (s *GetStackPolicyResponse) SetStackPolicyBody(v map[string]interface{}) *GetStackPolicyResponse {
	s.StackPolicyBody = v
	return s
}

type ValidateTemplateRequest struct {
	TemplateURL  *string `json:"TemplateURL,omitempty" xml:"TemplateURL,omitempty"`
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty"`
	TemplateBody *string `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty"`
}

func (s ValidateTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s ValidateTemplateRequest) GoString() string {
	return s.String()
}

func (s *ValidateTemplateRequest) SetTemplateURL(v string) *ValidateTemplateRequest {
	s.TemplateURL = &v
	return s
}

func (s *ValidateTemplateRequest) SetRegionId(v string) *ValidateTemplateRequest {
	s.RegionId = &v
	return s
}

func (s *ValidateTemplateRequest) SetTemplateBody(v string) *ValidateTemplateRequest {
	s.TemplateBody = &v
	return s
}

type ValidateTemplateResponse struct {
	Description *string                  `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	RequestId   *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Parameters  []map[string]interface{} `json:"Parameters,omitempty" xml:"Parameters,omitempty" require:"true" type:"Repeated"`
}

func (s ValidateTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s ValidateTemplateResponse) GoString() string {
	return s.String()
}

func (s *ValidateTemplateResponse) SetDescription(v string) *ValidateTemplateResponse {
	s.Description = &v
	return s
}

func (s *ValidateTemplateResponse) SetRequestId(v string) *ValidateTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *ValidateTemplateResponse) SetParameters(v []map[string]interface{}) *ValidateTemplateResponse {
	s.Parameters = v
	return s
}

type GetTemplateRequest struct {
	StackId     *string `json:"StackId,omitempty" xml:"StackId,omitempty"`
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty"`
	ChangeSetId *string `json:"ChangeSetId,omitempty" xml:"ChangeSetId,omitempty"`
	TemplateId  *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty"`
}

func (s GetTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s GetTemplateRequest) GoString() string {
	return s.String()
}

func (s *GetTemplateRequest) SetStackId(v string) *GetTemplateRequest {
	s.StackId = &v
	return s
}

func (s *GetTemplateRequest) SetRegionId(v string) *GetTemplateRequest {
	s.RegionId = &v
	return s
}

func (s *GetTemplateRequest) SetChangeSetId(v string) *GetTemplateRequest {
	s.ChangeSetId = &v
	return s
}

func (s *GetTemplateRequest) SetTemplateId(v string) *GetTemplateRequest {
	s.TemplateId = &v
	return s
}

type GetTemplateResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TemplateBody *string `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty" require:"true"`
}

func (s GetTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s GetTemplateResponse) GoString() string {
	return s.String()
}

func (s *GetTemplateResponse) SetRequestId(v string) *GetTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *GetTemplateResponse) SetTemplateBody(v string) *GetTemplateResponse {
	s.TemplateBody = &v
	return s
}

type GetChangeSetRequest struct {
	ShowTemplate *bool   `json:"ShowTemplate,omitempty" xml:"ShowTemplate,omitempty"`
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ChangeSetId  *string `json:"ChangeSetId,omitempty" xml:"ChangeSetId,omitempty" require:"true"`
}

func (s GetChangeSetRequest) String() string {
	return tea.Prettify(s)
}

func (s GetChangeSetRequest) GoString() string {
	return s.String()
}

func (s *GetChangeSetRequest) SetShowTemplate(v bool) *GetChangeSetRequest {
	s.ShowTemplate = &v
	return s
}

func (s *GetChangeSetRequest) SetRegionId(v string) *GetChangeSetRequest {
	s.RegionId = &v
	return s
}

func (s *GetChangeSetRequest) SetChangeSetId(v string) *GetChangeSetRequest {
	s.ChangeSetId = &v
	return s
}

type GetChangeSetResponse struct {
	ChangeSetId      *string                           `json:"ChangeSetId,omitempty" xml:"ChangeSetId,omitempty" require:"true"`
	ChangeSetName    *string                           `json:"ChangeSetName,omitempty" xml:"ChangeSetName,omitempty" require:"true"`
	ChangeSetType    *string                           `json:"ChangeSetType,omitempty" xml:"ChangeSetType,omitempty" require:"true"`
	CreateTime       *string                           `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	Description      *string                           `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	DisableRollback  *bool                             `json:"DisableRollback,omitempty" xml:"DisableRollback,omitempty" require:"true"`
	ExecutionStatus  *string                           `json:"ExecutionStatus,omitempty" xml:"ExecutionStatus,omitempty" require:"true"`
	RegionId         *string                           `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	RequestId        *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StackId          *string                           `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	StackName        *string                           `json:"StackName,omitempty" xml:"StackName,omitempty" require:"true"`
	Status           *string                           `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	TemplateBody     *string                           `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty" require:"true"`
	TimeoutInMinutes *int                              `json:"TimeoutInMinutes,omitempty" xml:"TimeoutInMinutes,omitempty" require:"true"`
	StatusReason     *string                           `json:"StatusReason,omitempty" xml:"StatusReason,omitempty" require:"true"`
	Parameters       []*GetChangeSetResponseParameters `json:"Parameters,omitempty" xml:"Parameters,omitempty" require:"true" type:"Repeated"`
	Changes          []map[string]interface{}          `json:"Changes,omitempty" xml:"Changes,omitempty" require:"true" type:"Repeated"`
}

func (s GetChangeSetResponse) String() string {
	return tea.Prettify(s)
}

func (s GetChangeSetResponse) GoString() string {
	return s.String()
}

func (s *GetChangeSetResponse) SetChangeSetId(v string) *GetChangeSetResponse {
	s.ChangeSetId = &v
	return s
}

func (s *GetChangeSetResponse) SetChangeSetName(v string) *GetChangeSetResponse {
	s.ChangeSetName = &v
	return s
}

func (s *GetChangeSetResponse) SetChangeSetType(v string) *GetChangeSetResponse {
	s.ChangeSetType = &v
	return s
}

func (s *GetChangeSetResponse) SetCreateTime(v string) *GetChangeSetResponse {
	s.CreateTime = &v
	return s
}

func (s *GetChangeSetResponse) SetDescription(v string) *GetChangeSetResponse {
	s.Description = &v
	return s
}

func (s *GetChangeSetResponse) SetDisableRollback(v bool) *GetChangeSetResponse {
	s.DisableRollback = &v
	return s
}

func (s *GetChangeSetResponse) SetExecutionStatus(v string) *GetChangeSetResponse {
	s.ExecutionStatus = &v
	return s
}

func (s *GetChangeSetResponse) SetRegionId(v string) *GetChangeSetResponse {
	s.RegionId = &v
	return s
}

func (s *GetChangeSetResponse) SetRequestId(v string) *GetChangeSetResponse {
	s.RequestId = &v
	return s
}

func (s *GetChangeSetResponse) SetStackId(v string) *GetChangeSetResponse {
	s.StackId = &v
	return s
}

func (s *GetChangeSetResponse) SetStackName(v string) *GetChangeSetResponse {
	s.StackName = &v
	return s
}

func (s *GetChangeSetResponse) SetStatus(v string) *GetChangeSetResponse {
	s.Status = &v
	return s
}

func (s *GetChangeSetResponse) SetTemplateBody(v string) *GetChangeSetResponse {
	s.TemplateBody = &v
	return s
}

func (s *GetChangeSetResponse) SetTimeoutInMinutes(v int) *GetChangeSetResponse {
	s.TimeoutInMinutes = &v
	return s
}

func (s *GetChangeSetResponse) SetStatusReason(v string) *GetChangeSetResponse {
	s.StatusReason = &v
	return s
}

func (s *GetChangeSetResponse) SetParameters(v []*GetChangeSetResponseParameters) *GetChangeSetResponse {
	s.Parameters = v
	return s
}

func (s *GetChangeSetResponse) SetChanges(v []map[string]interface{}) *GetChangeSetResponse {
	s.Changes = v
	return s
}

type GetChangeSetResponseParameters struct {
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
}

func (s GetChangeSetResponseParameters) String() string {
	return tea.Prettify(s)
}

func (s GetChangeSetResponseParameters) GoString() string {
	return s.String()
}

func (s *GetChangeSetResponseParameters) SetParameterKey(v string) *GetChangeSetResponseParameters {
	s.ParameterKey = &v
	return s
}

func (s *GetChangeSetResponseParameters) SetParameterValue(v string) *GetChangeSetResponseParameters {
	s.ParameterValue = &v
	return s
}

type ListChangeSetsRequest struct {
	StackId         *string   `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	Status          []*string `json:"Status,omitempty" xml:"Status,omitempty" type:"Repeated"`
	ChangeSetName   []*string `json:"ChangeSetName,omitempty" xml:"ChangeSetName,omitempty" type:"Repeated"`
	PageSize        *int64    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	RegionId        *string   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	PageNumber      *int64    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	ExecutionStatus []*string `json:"ExecutionStatus,omitempty" xml:"ExecutionStatus,omitempty" type:"Repeated"`
	ChangeSetId     *string   `json:"ChangeSetId,omitempty" xml:"ChangeSetId,omitempty"`
}

func (s ListChangeSetsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListChangeSetsRequest) GoString() string {
	return s.String()
}

func (s *ListChangeSetsRequest) SetStackId(v string) *ListChangeSetsRequest {
	s.StackId = &v
	return s
}

func (s *ListChangeSetsRequest) SetStatus(v []*string) *ListChangeSetsRequest {
	s.Status = v
	return s
}

func (s *ListChangeSetsRequest) SetChangeSetName(v []*string) *ListChangeSetsRequest {
	s.ChangeSetName = v
	return s
}

func (s *ListChangeSetsRequest) SetPageSize(v int64) *ListChangeSetsRequest {
	s.PageSize = &v
	return s
}

func (s *ListChangeSetsRequest) SetRegionId(v string) *ListChangeSetsRequest {
	s.RegionId = &v
	return s
}

func (s *ListChangeSetsRequest) SetPageNumber(v int64) *ListChangeSetsRequest {
	s.PageNumber = &v
	return s
}

func (s *ListChangeSetsRequest) SetExecutionStatus(v []*string) *ListChangeSetsRequest {
	s.ExecutionStatus = v
	return s
}

func (s *ListChangeSetsRequest) SetChangeSetId(v string) *ListChangeSetsRequest {
	s.ChangeSetId = &v
	return s
}

type ListChangeSetsResponse struct {
	PageNumber *int                                `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	RequestId  *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int                                `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	ChangeSets []*ListChangeSetsResponseChangeSets `json:"ChangeSets,omitempty" xml:"ChangeSets,omitempty" require:"true" type:"Repeated"`
}

func (s ListChangeSetsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListChangeSetsResponse) GoString() string {
	return s.String()
}

func (s *ListChangeSetsResponse) SetPageNumber(v int) *ListChangeSetsResponse {
	s.PageNumber = &v
	return s
}

func (s *ListChangeSetsResponse) SetPageSize(v int) *ListChangeSetsResponse {
	s.PageSize = &v
	return s
}

func (s *ListChangeSetsResponse) SetRequestId(v string) *ListChangeSetsResponse {
	s.RequestId = &v
	return s
}

func (s *ListChangeSetsResponse) SetTotalCount(v int) *ListChangeSetsResponse {
	s.TotalCount = &v
	return s
}

func (s *ListChangeSetsResponse) SetChangeSets(v []*ListChangeSetsResponseChangeSets) *ListChangeSetsResponse {
	s.ChangeSets = v
	return s
}

type ListChangeSetsResponseChangeSets struct {
	ChangeSetId     *string `json:"ChangeSetId,omitempty" xml:"ChangeSetId,omitempty" require:"true"`
	ChangeSetName   *string `json:"ChangeSetName,omitempty" xml:"ChangeSetName,omitempty" require:"true"`
	ChangeSetType   *string `json:"ChangeSetType,omitempty" xml:"ChangeSetType,omitempty" require:"true"`
	CreateTime      *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	Description     *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	ExecutionStatus *string `json:"ExecutionStatus,omitempty" xml:"ExecutionStatus,omitempty" require:"true"`
	RegionId        *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StackId         *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	StackName       *string `json:"StackName,omitempty" xml:"StackName,omitempty" require:"true"`
	Status          *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	StatusReason    *string `json:"StatusReason,omitempty" xml:"StatusReason,omitempty" require:"true"`
}

func (s ListChangeSetsResponseChangeSets) String() string {
	return tea.Prettify(s)
}

func (s ListChangeSetsResponseChangeSets) GoString() string {
	return s.String()
}

func (s *ListChangeSetsResponseChangeSets) SetChangeSetId(v string) *ListChangeSetsResponseChangeSets {
	s.ChangeSetId = &v
	return s
}

func (s *ListChangeSetsResponseChangeSets) SetChangeSetName(v string) *ListChangeSetsResponseChangeSets {
	s.ChangeSetName = &v
	return s
}

func (s *ListChangeSetsResponseChangeSets) SetChangeSetType(v string) *ListChangeSetsResponseChangeSets {
	s.ChangeSetType = &v
	return s
}

func (s *ListChangeSetsResponseChangeSets) SetCreateTime(v string) *ListChangeSetsResponseChangeSets {
	s.CreateTime = &v
	return s
}

func (s *ListChangeSetsResponseChangeSets) SetDescription(v string) *ListChangeSetsResponseChangeSets {
	s.Description = &v
	return s
}

func (s *ListChangeSetsResponseChangeSets) SetExecutionStatus(v string) *ListChangeSetsResponseChangeSets {
	s.ExecutionStatus = &v
	return s
}

func (s *ListChangeSetsResponseChangeSets) SetRegionId(v string) *ListChangeSetsResponseChangeSets {
	s.RegionId = &v
	return s
}

func (s *ListChangeSetsResponseChangeSets) SetStackId(v string) *ListChangeSetsResponseChangeSets {
	s.StackId = &v
	return s
}

func (s *ListChangeSetsResponseChangeSets) SetStackName(v string) *ListChangeSetsResponseChangeSets {
	s.StackName = &v
	return s
}

func (s *ListChangeSetsResponseChangeSets) SetStatus(v string) *ListChangeSetsResponseChangeSets {
	s.Status = &v
	return s
}

func (s *ListChangeSetsResponseChangeSets) SetStatusReason(v string) *ListChangeSetsResponseChangeSets {
	s.StatusReason = &v
	return s
}

type ExecuteChangeSetRequest struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ChangeSetId *string `json:"ChangeSetId,omitempty" xml:"ChangeSetId,omitempty" require:"true"`
}

func (s ExecuteChangeSetRequest) String() string {
	return tea.Prettify(s)
}

func (s ExecuteChangeSetRequest) GoString() string {
	return s.String()
}

func (s *ExecuteChangeSetRequest) SetRegionId(v string) *ExecuteChangeSetRequest {
	s.RegionId = &v
	return s
}

func (s *ExecuteChangeSetRequest) SetChangeSetId(v string) *ExecuteChangeSetRequest {
	s.ChangeSetId = &v
	return s
}

type ExecuteChangeSetResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ExecuteChangeSetResponse) String() string {
	return tea.Prettify(s)
}

func (s ExecuteChangeSetResponse) GoString() string {
	return s.String()
}

func (s *ExecuteChangeSetResponse) SetRequestId(v string) *ExecuteChangeSetResponse {
	s.RequestId = &v
	return s
}

type DeleteChangeSetRequest struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ChangeSetId *string `json:"ChangeSetId,omitempty" xml:"ChangeSetId,omitempty" require:"true"`
}

func (s DeleteChangeSetRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteChangeSetRequest) GoString() string {
	return s.String()
}

func (s *DeleteChangeSetRequest) SetRegionId(v string) *DeleteChangeSetRequest {
	s.RegionId = &v
	return s
}

func (s *DeleteChangeSetRequest) SetChangeSetId(v string) *DeleteChangeSetRequest {
	s.ChangeSetId = &v
	return s
}

type DeleteChangeSetResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteChangeSetResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteChangeSetResponse) GoString() string {
	return s.String()
}

func (s *DeleteChangeSetResponse) SetRequestId(v string) *DeleteChangeSetResponse {
	s.RequestId = &v
	return s
}

type ListStackEventsRequest struct {
	StackId           *string   `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	Status            []*string `json:"Status,omitempty" xml:"Status,omitempty" type:"Repeated"`
	PageSize          *int64    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	ResourceType      []*string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" type:"Repeated"`
	RegionId          *string   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	PageNumber        *int64    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	LogicalResourceId []*string `json:"LogicalResourceId,omitempty" xml:"LogicalResourceId,omitempty" type:"Repeated"`
}

func (s ListStackEventsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListStackEventsRequest) GoString() string {
	return s.String()
}

func (s *ListStackEventsRequest) SetStackId(v string) *ListStackEventsRequest {
	s.StackId = &v
	return s
}

func (s *ListStackEventsRequest) SetStatus(v []*string) *ListStackEventsRequest {
	s.Status = v
	return s
}

func (s *ListStackEventsRequest) SetPageSize(v int64) *ListStackEventsRequest {
	s.PageSize = &v
	return s
}

func (s *ListStackEventsRequest) SetResourceType(v []*string) *ListStackEventsRequest {
	s.ResourceType = v
	return s
}

func (s *ListStackEventsRequest) SetRegionId(v string) *ListStackEventsRequest {
	s.RegionId = &v
	return s
}

func (s *ListStackEventsRequest) SetPageNumber(v int64) *ListStackEventsRequest {
	s.PageNumber = &v
	return s
}

func (s *ListStackEventsRequest) SetLogicalResourceId(v []*string) *ListStackEventsRequest {
	s.LogicalResourceId = v
	return s
}

type ListStackEventsResponse struct {
	PageNumber *int                             `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                             `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	RequestId  *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int                             `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Events     []*ListStackEventsResponseEvents `json:"Events,omitempty" xml:"Events,omitempty" require:"true" type:"Repeated"`
}

func (s ListStackEventsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListStackEventsResponse) GoString() string {
	return s.String()
}

func (s *ListStackEventsResponse) SetPageNumber(v int) *ListStackEventsResponse {
	s.PageNumber = &v
	return s
}

func (s *ListStackEventsResponse) SetPageSize(v int) *ListStackEventsResponse {
	s.PageSize = &v
	return s
}

func (s *ListStackEventsResponse) SetRequestId(v string) *ListStackEventsResponse {
	s.RequestId = &v
	return s
}

func (s *ListStackEventsResponse) SetTotalCount(v int) *ListStackEventsResponse {
	s.TotalCount = &v
	return s
}

func (s *ListStackEventsResponse) SetEvents(v []*ListStackEventsResponseEvents) *ListStackEventsResponse {
	s.Events = v
	return s
}

type ListStackEventsResponseEvents struct {
	CreateTime         *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	EventId            *string `json:"EventId,omitempty" xml:"EventId,omitempty" require:"true"`
	LogicalResourceId  *string `json:"LogicalResourceId,omitempty" xml:"LogicalResourceId,omitempty" require:"true"`
	PhysicalResourceId *string `json:"PhysicalResourceId,omitempty" xml:"PhysicalResourceId,omitempty" require:"true"`
	ResourceType       *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	StackId            *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	StackName          *string `json:"StackName,omitempty" xml:"StackName,omitempty" require:"true"`
	Status             *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	StatusReason       *string `json:"StatusReason,omitempty" xml:"StatusReason,omitempty" require:"true"`
}

func (s ListStackEventsResponseEvents) String() string {
	return tea.Prettify(s)
}

func (s ListStackEventsResponseEvents) GoString() string {
	return s.String()
}

func (s *ListStackEventsResponseEvents) SetCreateTime(v string) *ListStackEventsResponseEvents {
	s.CreateTime = &v
	return s
}

func (s *ListStackEventsResponseEvents) SetEventId(v string) *ListStackEventsResponseEvents {
	s.EventId = &v
	return s
}

func (s *ListStackEventsResponseEvents) SetLogicalResourceId(v string) *ListStackEventsResponseEvents {
	s.LogicalResourceId = &v
	return s
}

func (s *ListStackEventsResponseEvents) SetPhysicalResourceId(v string) *ListStackEventsResponseEvents {
	s.PhysicalResourceId = &v
	return s
}

func (s *ListStackEventsResponseEvents) SetResourceType(v string) *ListStackEventsResponseEvents {
	s.ResourceType = &v
	return s
}

func (s *ListStackEventsResponseEvents) SetStackId(v string) *ListStackEventsResponseEvents {
	s.StackId = &v
	return s
}

func (s *ListStackEventsResponseEvents) SetStackName(v string) *ListStackEventsResponseEvents {
	s.StackName = &v
	return s
}

func (s *ListStackEventsResponseEvents) SetStatus(v string) *ListStackEventsResponseEvents {
	s.Status = &v
	return s
}

func (s *ListStackEventsResponseEvents) SetStatusReason(v string) *ListStackEventsResponseEvents {
	s.StatusReason = &v
	return s
}

type ListStackResourcesRequest struct {
	StackId  *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s ListStackResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListStackResourcesRequest) GoString() string {
	return s.String()
}

func (s *ListStackResourcesRequest) SetStackId(v string) *ListStackResourcesRequest {
	s.StackId = &v
	return s
}

func (s *ListStackResourcesRequest) SetRegionId(v string) *ListStackResourcesRequest {
	s.RegionId = &v
	return s
}

type ListStackResourcesResponse struct {
	RequestId *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Resources []*ListStackResourcesResponseResources `json:"Resources,omitempty" xml:"Resources,omitempty" require:"true" type:"Repeated"`
}

func (s ListStackResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListStackResourcesResponse) GoString() string {
	return s.String()
}

func (s *ListStackResourcesResponse) SetRequestId(v string) *ListStackResourcesResponse {
	s.RequestId = &v
	return s
}

func (s *ListStackResourcesResponse) SetResources(v []*ListStackResourcesResponseResources) *ListStackResourcesResponse {
	s.Resources = v
	return s
}

type ListStackResourcesResponseResources struct {
	CreateTime          *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	LogicalResourceId   *string `json:"LogicalResourceId,omitempty" xml:"LogicalResourceId,omitempty" require:"true"`
	PhysicalResourceId  *string `json:"PhysicalResourceId,omitempty" xml:"PhysicalResourceId,omitempty" require:"true"`
	ResourceType        *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	StackId             *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	StackName           *string `json:"StackName,omitempty" xml:"StackName,omitempty" require:"true"`
	Status              *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	StatusReason        *string `json:"StatusReason,omitempty" xml:"StatusReason,omitempty" require:"true"`
	UpdateTime          *string `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	ResourceDriftStatus *string `json:"ResourceDriftStatus,omitempty" xml:"ResourceDriftStatus,omitempty" require:"true"`
	DriftDetectionTime  *string `json:"DriftDetectionTime,omitempty" xml:"DriftDetectionTime,omitempty" require:"true"`
}

func (s ListStackResourcesResponseResources) String() string {
	return tea.Prettify(s)
}

func (s ListStackResourcesResponseResources) GoString() string {
	return s.String()
}

func (s *ListStackResourcesResponseResources) SetCreateTime(v string) *ListStackResourcesResponseResources {
	s.CreateTime = &v
	return s
}

func (s *ListStackResourcesResponseResources) SetLogicalResourceId(v string) *ListStackResourcesResponseResources {
	s.LogicalResourceId = &v
	return s
}

func (s *ListStackResourcesResponseResources) SetPhysicalResourceId(v string) *ListStackResourcesResponseResources {
	s.PhysicalResourceId = &v
	return s
}

func (s *ListStackResourcesResponseResources) SetResourceType(v string) *ListStackResourcesResponseResources {
	s.ResourceType = &v
	return s
}

func (s *ListStackResourcesResponseResources) SetStackId(v string) *ListStackResourcesResponseResources {
	s.StackId = &v
	return s
}

func (s *ListStackResourcesResponseResources) SetStackName(v string) *ListStackResourcesResponseResources {
	s.StackName = &v
	return s
}

func (s *ListStackResourcesResponseResources) SetStatus(v string) *ListStackResourcesResponseResources {
	s.Status = &v
	return s
}

func (s *ListStackResourcesResponseResources) SetStatusReason(v string) *ListStackResourcesResponseResources {
	s.StatusReason = &v
	return s
}

func (s *ListStackResourcesResponseResources) SetUpdateTime(v string) *ListStackResourcesResponseResources {
	s.UpdateTime = &v
	return s
}

func (s *ListStackResourcesResponseResources) SetResourceDriftStatus(v string) *ListStackResourcesResponseResources {
	s.ResourceDriftStatus = &v
	return s
}

func (s *ListStackResourcesResponseResources) SetDriftDetectionTime(v string) *ListStackResourcesResponseResources {
	s.DriftDetectionTime = &v
	return s
}

type GetStackResourceRequest struct {
	StackId                *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	ClientToken            *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	RegionId               *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ShowResourceAttributes *bool   `json:"ShowResourceAttributes,omitempty" xml:"ShowResourceAttributes,omitempty"`
	LogicalResourceId      *string `json:"LogicalResourceId,omitempty" xml:"LogicalResourceId,omitempty" require:"true"`
}

func (s GetStackResourceRequest) String() string {
	return tea.Prettify(s)
}

func (s GetStackResourceRequest) GoString() string {
	return s.String()
}

func (s *GetStackResourceRequest) SetStackId(v string) *GetStackResourceRequest {
	s.StackId = &v
	return s
}

func (s *GetStackResourceRequest) SetClientToken(v string) *GetStackResourceRequest {
	s.ClientToken = &v
	return s
}

func (s *GetStackResourceRequest) SetRegionId(v string) *GetStackResourceRequest {
	s.RegionId = &v
	return s
}

func (s *GetStackResourceRequest) SetShowResourceAttributes(v bool) *GetStackResourceRequest {
	s.ShowResourceAttributes = &v
	return s
}

func (s *GetStackResourceRequest) SetLogicalResourceId(v string) *GetStackResourceRequest {
	s.LogicalResourceId = &v
	return s
}

type GetStackResourceResponse struct {
	CreateTime          *string                  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	Description         *string                  `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	LogicalResourceId   *string                  `json:"LogicalResourceId,omitempty" xml:"LogicalResourceId,omitempty" require:"true"`
	Metadata            map[string]interface{}   `json:"Metadata,omitempty" xml:"Metadata,omitempty" require:"true"`
	PhysicalResourceId  *string                  `json:"PhysicalResourceId,omitempty" xml:"PhysicalResourceId,omitempty" require:"true"`
	RequestId           *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ResourceType        *string                  `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	StackId             *string                  `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	StackName           *string                  `json:"StackName,omitempty" xml:"StackName,omitempty" require:"true"`
	Status              *string                  `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	StatusReason        *string                  `json:"StatusReason,omitempty" xml:"StatusReason,omitempty" require:"true"`
	UpdateTime          *string                  `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	ResourceDriftStatus *string                  `json:"ResourceDriftStatus,omitempty" xml:"ResourceDriftStatus,omitempty" require:"true"`
	DriftDetectionTime  *string                  `json:"DriftDetectionTime,omitempty" xml:"DriftDetectionTime,omitempty" require:"true"`
	ResourceAttributes  []map[string]interface{} `json:"ResourceAttributes,omitempty" xml:"ResourceAttributes,omitempty" require:"true" type:"Repeated"`
}

func (s GetStackResourceResponse) String() string {
	return tea.Prettify(s)
}

func (s GetStackResourceResponse) GoString() string {
	return s.String()
}

func (s *GetStackResourceResponse) SetCreateTime(v string) *GetStackResourceResponse {
	s.CreateTime = &v
	return s
}

func (s *GetStackResourceResponse) SetDescription(v string) *GetStackResourceResponse {
	s.Description = &v
	return s
}

func (s *GetStackResourceResponse) SetLogicalResourceId(v string) *GetStackResourceResponse {
	s.LogicalResourceId = &v
	return s
}

func (s *GetStackResourceResponse) SetMetadata(v map[string]interface{}) *GetStackResourceResponse {
	s.Metadata = v
	return s
}

func (s *GetStackResourceResponse) SetPhysicalResourceId(v string) *GetStackResourceResponse {
	s.PhysicalResourceId = &v
	return s
}

func (s *GetStackResourceResponse) SetRequestId(v string) *GetStackResourceResponse {
	s.RequestId = &v
	return s
}

func (s *GetStackResourceResponse) SetResourceType(v string) *GetStackResourceResponse {
	s.ResourceType = &v
	return s
}

func (s *GetStackResourceResponse) SetStackId(v string) *GetStackResourceResponse {
	s.StackId = &v
	return s
}

func (s *GetStackResourceResponse) SetStackName(v string) *GetStackResourceResponse {
	s.StackName = &v
	return s
}

func (s *GetStackResourceResponse) SetStatus(v string) *GetStackResourceResponse {
	s.Status = &v
	return s
}

func (s *GetStackResourceResponse) SetStatusReason(v string) *GetStackResourceResponse {
	s.StatusReason = &v
	return s
}

func (s *GetStackResourceResponse) SetUpdateTime(v string) *GetStackResourceResponse {
	s.UpdateTime = &v
	return s
}

func (s *GetStackResourceResponse) SetResourceDriftStatus(v string) *GetStackResourceResponse {
	s.ResourceDriftStatus = &v
	return s
}

func (s *GetStackResourceResponse) SetDriftDetectionTime(v string) *GetStackResourceResponse {
	s.DriftDetectionTime = &v
	return s
}

func (s *GetStackResourceResponse) SetResourceAttributes(v []map[string]interface{}) *GetStackResourceResponse {
	s.ResourceAttributes = v
	return s
}

type GetResourceTypeTemplateRequest struct {
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
}

func (s GetResourceTypeTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s GetResourceTypeTemplateRequest) GoString() string {
	return s.String()
}

func (s *GetResourceTypeTemplateRequest) SetResourceType(v string) *GetResourceTypeTemplateRequest {
	s.ResourceType = &v
	return s
}

type GetResourceTypeTemplateResponse struct {
	RequestId    *string                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TemplateBody map[string]interface{} `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty" require:"true"`
}

func (s GetResourceTypeTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s GetResourceTypeTemplateResponse) GoString() string {
	return s.String()
}

func (s *GetResourceTypeTemplateResponse) SetRequestId(v string) *GetResourceTypeTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *GetResourceTypeTemplateResponse) SetTemplateBody(v map[string]interface{}) *GetResourceTypeTemplateResponse {
	s.TemplateBody = v
	return s
}

type GetResourceTypeRequest struct {
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
}

func (s GetResourceTypeRequest) String() string {
	return tea.Prettify(s)
}

func (s GetResourceTypeRequest) GoString() string {
	return s.String()
}

func (s *GetResourceTypeRequest) SetResourceType(v string) *GetResourceTypeRequest {
	s.ResourceType = &v
	return s
}

type GetResourceTypeResponse struct {
	Attributes            map[string]interface{} `json:"Attributes,omitempty" xml:"Attributes,omitempty" require:"true"`
	Properties            map[string]interface{} `json:"Properties,omitempty" xml:"Properties,omitempty" require:"true"`
	RequestId             *string                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ResourceType          *string                `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	SupportDriftDetection *bool                  `json:"SupportDriftDetection,omitempty" xml:"SupportDriftDetection,omitempty" require:"true"`
}

func (s GetResourceTypeResponse) String() string {
	return tea.Prettify(s)
}

func (s GetResourceTypeResponse) GoString() string {
	return s.String()
}

func (s *GetResourceTypeResponse) SetAttributes(v map[string]interface{}) *GetResourceTypeResponse {
	s.Attributes = v
	return s
}

func (s *GetResourceTypeResponse) SetProperties(v map[string]interface{}) *GetResourceTypeResponse {
	s.Properties = v
	return s
}

func (s *GetResourceTypeResponse) SetRequestId(v string) *GetResourceTypeResponse {
	s.RequestId = &v
	return s
}

func (s *GetResourceTypeResponse) SetResourceType(v string) *GetResourceTypeResponse {
	s.ResourceType = &v
	return s
}

func (s *GetResourceTypeResponse) SetSupportDriftDetection(v bool) *GetResourceTypeResponse {
	s.SupportDriftDetection = &v
	return s
}

type ListResourceTypesRequest struct {
}

func (s ListResourceTypesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListResourceTypesRequest) GoString() string {
	return s.String()
}

type ListResourceTypesResponse struct {
	RequestId     *string   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ResourceTypes []*string `json:"ResourceTypes,omitempty" xml:"ResourceTypes,omitempty" require:"true" type:"Repeated"`
}

func (s ListResourceTypesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListResourceTypesResponse) GoString() string {
	return s.String()
}

func (s *ListResourceTypesResponse) SetRequestId(v string) *ListResourceTypesResponse {
	s.RequestId = &v
	return s
}

func (s *ListResourceTypesResponse) SetResourceTypes(v []*string) *ListResourceTypesResponse {
	s.ResourceTypes = v
	return s
}

type SignalResourceRequest struct {
	StackId           *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
	Status            *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	RegionId          *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	UniqueId          *string `json:"UniqueId,omitempty" xml:"UniqueId,omitempty" require:"true"`
	ClientToken       *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	LogicalResourceId *string `json:"LogicalResourceId,omitempty" xml:"LogicalResourceId,omitempty" require:"true"`
}

func (s SignalResourceRequest) String() string {
	return tea.Prettify(s)
}

func (s SignalResourceRequest) GoString() string {
	return s.String()
}

func (s *SignalResourceRequest) SetStackId(v string) *SignalResourceRequest {
	s.StackId = &v
	return s
}

func (s *SignalResourceRequest) SetStatus(v string) *SignalResourceRequest {
	s.Status = &v
	return s
}

func (s *SignalResourceRequest) SetRegionId(v string) *SignalResourceRequest {
	s.RegionId = &v
	return s
}

func (s *SignalResourceRequest) SetUniqueId(v string) *SignalResourceRequest {
	s.UniqueId = &v
	return s
}

func (s *SignalResourceRequest) SetClientToken(v string) *SignalResourceRequest {
	s.ClientToken = &v
	return s
}

func (s *SignalResourceRequest) SetLogicalResourceId(v string) *SignalResourceRequest {
	s.LogicalResourceId = &v
	return s
}

type SignalResourceResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SignalResourceResponse) String() string {
	return tea.Prettify(s)
}

func (s SignalResourceResponse) GoString() string {
	return s.String()
}

func (s *SignalResourceResponse) SetRequestId(v string) *SignalResourceResponse {
	s.RequestId = &v
	return s
}

type DescribeRegionsRequest struct {
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
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Regions   []*DescribeRegionsResponseRegions `json:"Regions,omitempty" xml:"Regions,omitempty" require:"true" type:"Repeated"`
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

func (s *DescribeRegionsResponse) SetRegions(v []*DescribeRegionsResponseRegions) *DescribeRegionsResponse {
	s.Regions = v
	return s
}

type DescribeRegionsResponseRegions struct {
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	LocalName      *string `json:"LocalName,omitempty" xml:"LocalName,omitempty" require:"true"`
	RegionEndpoint *string `json:"RegionEndpoint,omitempty" xml:"RegionEndpoint,omitempty" require:"true"`
}

func (s DescribeRegionsResponseRegions) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsResponseRegions) GoString() string {
	return s.String()
}

func (s *DescribeRegionsResponseRegions) SetRegionId(v string) *DescribeRegionsResponseRegions {
	s.RegionId = &v
	return s
}

func (s *DescribeRegionsResponseRegions) SetLocalName(v string) *DescribeRegionsResponseRegions {
	s.LocalName = &v
	return s
}

func (s *DescribeRegionsResponseRegions) SetRegionEndpoint(v string) *DescribeRegionsResponseRegions {
	s.RegionEndpoint = &v
	return s
}

type CreateChangeSetRequest struct {
	StackId                     *string                                    `json:"StackId,omitempty" xml:"StackId,omitempty"`
	Parameters                  []*CreateChangeSetRequestParameters        `json:"Parameters,omitempty" xml:"Parameters,omitempty" type:"Repeated"`
	StackPolicyURL              *string                                    `json:"StackPolicyURL,omitempty" xml:"StackPolicyURL,omitempty"`
	StackPolicyBody             *string                                    `json:"StackPolicyBody,omitempty" xml:"StackPolicyBody,omitempty"`
	StackName                   *string                                    `json:"StackName,omitempty" xml:"StackName,omitempty"`
	UsePreviousParameters       *bool                                      `json:"UsePreviousParameters,omitempty" xml:"UsePreviousParameters,omitempty"`
	ChangeSetType               *string                                    `json:"ChangeSetType,omitempty" xml:"ChangeSetType,omitempty"`
	Description                 *string                                    `json:"Description,omitempty" xml:"Description,omitempty"`
	RegionId                    *string                                    `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ClientToken                 *string                                    `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	TemplateURL                 *string                                    `json:"TemplateURL,omitempty" xml:"TemplateURL,omitempty"`
	StackPolicyDuringUpdateURL  *string                                    `json:"StackPolicyDuringUpdateURL,omitempty" xml:"StackPolicyDuringUpdateURL,omitempty"`
	TemplateBody                *string                                    `json:"TemplateBody,omitempty" xml:"TemplateBody,omitempty"`
	TimeoutInMinutes            *int64                                     `json:"TimeoutInMinutes,omitempty" xml:"TimeoutInMinutes,omitempty"`
	DisableRollback             *bool                                      `json:"DisableRollback,omitempty" xml:"DisableRollback,omitempty"`
	ChangeSetName               *string                                    `json:"ChangeSetName,omitempty" xml:"ChangeSetName,omitempty" require:"true"`
	StackPolicyDuringUpdateBody *string                                    `json:"StackPolicyDuringUpdateBody,omitempty" xml:"StackPolicyDuringUpdateBody,omitempty"`
	NotificationURLs            []*string                                  `json:"NotificationURLs,omitempty" xml:"NotificationURLs,omitempty" type:"Repeated"`
	RamRoleName                 *string                                    `json:"RamRoleName,omitempty" xml:"RamRoleName,omitempty"`
	ReplacementOption           *string                                    `json:"ReplacementOption,omitempty" xml:"ReplacementOption,omitempty"`
	ResourcesToImport           []*CreateChangeSetRequestResourcesToImport `json:"ResourcesToImport,omitempty" xml:"ResourcesToImport,omitempty" type:"Repeated"`
}

func (s CreateChangeSetRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateChangeSetRequest) GoString() string {
	return s.String()
}

func (s *CreateChangeSetRequest) SetStackId(v string) *CreateChangeSetRequest {
	s.StackId = &v
	return s
}

func (s *CreateChangeSetRequest) SetParameters(v []*CreateChangeSetRequestParameters) *CreateChangeSetRequest {
	s.Parameters = v
	return s
}

func (s *CreateChangeSetRequest) SetStackPolicyURL(v string) *CreateChangeSetRequest {
	s.StackPolicyURL = &v
	return s
}

func (s *CreateChangeSetRequest) SetStackPolicyBody(v string) *CreateChangeSetRequest {
	s.StackPolicyBody = &v
	return s
}

func (s *CreateChangeSetRequest) SetStackName(v string) *CreateChangeSetRequest {
	s.StackName = &v
	return s
}

func (s *CreateChangeSetRequest) SetUsePreviousParameters(v bool) *CreateChangeSetRequest {
	s.UsePreviousParameters = &v
	return s
}

func (s *CreateChangeSetRequest) SetChangeSetType(v string) *CreateChangeSetRequest {
	s.ChangeSetType = &v
	return s
}

func (s *CreateChangeSetRequest) SetDescription(v string) *CreateChangeSetRequest {
	s.Description = &v
	return s
}

func (s *CreateChangeSetRequest) SetRegionId(v string) *CreateChangeSetRequest {
	s.RegionId = &v
	return s
}

func (s *CreateChangeSetRequest) SetClientToken(v string) *CreateChangeSetRequest {
	s.ClientToken = &v
	return s
}

func (s *CreateChangeSetRequest) SetTemplateURL(v string) *CreateChangeSetRequest {
	s.TemplateURL = &v
	return s
}

func (s *CreateChangeSetRequest) SetStackPolicyDuringUpdateURL(v string) *CreateChangeSetRequest {
	s.StackPolicyDuringUpdateURL = &v
	return s
}

func (s *CreateChangeSetRequest) SetTemplateBody(v string) *CreateChangeSetRequest {
	s.TemplateBody = &v
	return s
}

func (s *CreateChangeSetRequest) SetTimeoutInMinutes(v int64) *CreateChangeSetRequest {
	s.TimeoutInMinutes = &v
	return s
}

func (s *CreateChangeSetRequest) SetDisableRollback(v bool) *CreateChangeSetRequest {
	s.DisableRollback = &v
	return s
}

func (s *CreateChangeSetRequest) SetChangeSetName(v string) *CreateChangeSetRequest {
	s.ChangeSetName = &v
	return s
}

func (s *CreateChangeSetRequest) SetStackPolicyDuringUpdateBody(v string) *CreateChangeSetRequest {
	s.StackPolicyDuringUpdateBody = &v
	return s
}

func (s *CreateChangeSetRequest) SetNotificationURLs(v []*string) *CreateChangeSetRequest {
	s.NotificationURLs = v
	return s
}

func (s *CreateChangeSetRequest) SetRamRoleName(v string) *CreateChangeSetRequest {
	s.RamRoleName = &v
	return s
}

func (s *CreateChangeSetRequest) SetReplacementOption(v string) *CreateChangeSetRequest {
	s.ReplacementOption = &v
	return s
}

func (s *CreateChangeSetRequest) SetResourcesToImport(v []*CreateChangeSetRequestResourcesToImport) *CreateChangeSetRequest {
	s.ResourcesToImport = v
	return s
}

type CreateChangeSetRequestParameters struct {
	ParameterValue *string `json:"ParameterValue,omitempty" xml:"ParameterValue,omitempty" require:"true"`
	ParameterKey   *string `json:"ParameterKey,omitempty" xml:"ParameterKey,omitempty" require:"true"`
}

func (s CreateChangeSetRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s CreateChangeSetRequestParameters) GoString() string {
	return s.String()
}

func (s *CreateChangeSetRequestParameters) SetParameterValue(v string) *CreateChangeSetRequestParameters {
	s.ParameterValue = &v
	return s
}

func (s *CreateChangeSetRequestParameters) SetParameterKey(v string) *CreateChangeSetRequestParameters {
	s.ParameterKey = &v
	return s
}

type CreateChangeSetRequestResourcesToImport struct {
	LogicalResourceId  *string `json:"LogicalResourceId,omitempty" xml:"LogicalResourceId,omitempty" require:"true"`
	ResourceType       *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	ResourceIdentifier *string `json:"ResourceIdentifier,omitempty" xml:"ResourceIdentifier,omitempty" require:"true"`
}

func (s CreateChangeSetRequestResourcesToImport) String() string {
	return tea.Prettify(s)
}

func (s CreateChangeSetRequestResourcesToImport) GoString() string {
	return s.String()
}

func (s *CreateChangeSetRequestResourcesToImport) SetLogicalResourceId(v string) *CreateChangeSetRequestResourcesToImport {
	s.LogicalResourceId = &v
	return s
}

func (s *CreateChangeSetRequestResourcesToImport) SetResourceType(v string) *CreateChangeSetRequestResourcesToImport {
	s.ResourceType = &v
	return s
}

func (s *CreateChangeSetRequestResourcesToImport) SetResourceIdentifier(v string) *CreateChangeSetRequestResourcesToImport {
	s.ResourceIdentifier = &v
	return s
}

type CreateChangeSetResponse struct {
	ChangeSetId *string `json:"ChangeSetId,omitempty" xml:"ChangeSetId,omitempty" require:"true"`
	RequestId   *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StackId     *string `json:"StackId,omitempty" xml:"StackId,omitempty" require:"true"`
}

func (s CreateChangeSetResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateChangeSetResponse) GoString() string {
	return s.String()
}

func (s *CreateChangeSetResponse) SetChangeSetId(v string) *CreateChangeSetResponse {
	s.ChangeSetId = &v
	return s
}

func (s *CreateChangeSetResponse) SetRequestId(v string) *CreateChangeSetResponse {
	s.RequestId = &v
	return s
}

func (s *CreateChangeSetResponse) SetStackId(v string) *CreateChangeSetResponse {
	s.StackId = &v
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
	client.Endpoint, _err = client.GetEndpoint(tea.String("ros"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) ListStackOperationRisksWithOptions(request *ListStackOperationRisksRequest, runtime *util.RuntimeOptions) (_result *ListStackOperationRisksResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListStackOperationRisksResponse{}
	_body, _err := client.DoRequest(tea.String("ListStackOperationRisks"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListStackOperationRisks(request *ListStackOperationRisksRequest) (_result *ListStackOperationRisksResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListStackOperationRisksResponse{}
	_body, _err := client.ListStackOperationRisksWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetTemplateSummaryWithOptions(request *GetTemplateSummaryRequest, runtime *util.RuntimeOptions) (_result *GetTemplateSummaryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetTemplateSummaryResponse{}
	_body, _err := client.DoRequest(tea.String("GetTemplateSummary"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetTemplateSummary(request *GetTemplateSummaryRequest) (_result *GetTemplateSummaryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetTemplateSummaryResponse{}
	_body, _err := client.GetTemplateSummaryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListTagValuesWithOptions(request *ListTagValuesRequest, runtime *util.RuntimeOptions) (_result *ListTagValuesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListTagValuesResponse{}
	_body, _err := client.DoRequest(tea.String("ListTagValues"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListTagValues(request *ListTagValuesRequest) (_result *ListTagValuesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListTagValuesResponse{}
	_body, _err := client.ListTagValuesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListTagKeysWithOptions(request *ListTagKeysRequest, runtime *util.RuntimeOptions) (_result *ListTagKeysResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListTagKeysResponse{}
	_body, _err := client.DoRequest(tea.String("ListTagKeys"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListTagKeys(request *ListTagKeysRequest) (_result *ListTagKeysResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListTagKeysResponse{}
	_body, _err := client.ListTagKeysWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetDeletionProtectionWithOptions(request *SetDeletionProtectionRequest, runtime *util.RuntimeOptions) (_result *SetDeletionProtectionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetDeletionProtectionResponse{}
	_body, _err := client.DoRequest(tea.String("SetDeletionProtection"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetDeletionProtection(request *SetDeletionProtectionRequest) (_result *SetDeletionProtectionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetDeletionProtectionResponse{}
	_body, _err := client.SetDeletionProtectionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateStackTemplateByResourcesWithOptions(request *UpdateStackTemplateByResourcesRequest, runtime *util.RuntimeOptions) (_result *UpdateStackTemplateByResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateStackTemplateByResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateStackTemplateByResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateStackTemplateByResources(request *UpdateStackTemplateByResourcesRequest) (_result *UpdateStackTemplateByResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateStackTemplateByResourcesResponse{}
	_body, _err := client.UpdateStackTemplateByResourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetStackDriftDetectionStatusWithOptions(request *GetStackDriftDetectionStatusRequest, runtime *util.RuntimeOptions) (_result *GetStackDriftDetectionStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetStackDriftDetectionStatusResponse{}
	_body, _err := client.DoRequest(tea.String("GetStackDriftDetectionStatus"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetStackDriftDetectionStatus(request *GetStackDriftDetectionStatusRequest) (_result *GetStackDriftDetectionStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetStackDriftDetectionStatusResponse{}
	_body, _err := client.GetStackDriftDetectionStatusWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DetectStackGroupDriftWithOptions(request *DetectStackGroupDriftRequest, runtime *util.RuntimeOptions) (_result *DetectStackGroupDriftResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectStackGroupDriftResponse{}
	_body, _err := client.DoRequest(tea.String("DetectStackGroupDrift"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectStackGroupDrift(request *DetectStackGroupDriftRequest) (_result *DetectStackGroupDriftResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DetectStackGroupDriftResponse{}
	_body, _err := client.DetectStackGroupDriftWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListStackResourceDriftsWithOptions(request *ListStackResourceDriftsRequest, runtime *util.RuntimeOptions) (_result *ListStackResourceDriftsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListStackResourceDriftsResponse{}
	_body, _err := client.DoRequest(tea.String("ListStackResourceDrifts"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListStackResourceDrifts(request *ListStackResourceDriftsRequest) (_result *ListStackResourceDriftsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListStackResourceDriftsResponse{}
	_body, _err := client.ListStackResourceDriftsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DetectStackResourceDriftWithOptions(request *DetectStackResourceDriftRequest, runtime *util.RuntimeOptions) (_result *DetectStackResourceDriftResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectStackResourceDriftResponse{}
	_body, _err := client.DoRequest(tea.String("DetectStackResourceDrift"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectStackResourceDrift(request *DetectStackResourceDriftRequest) (_result *DetectStackResourceDriftResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DetectStackResourceDriftResponse{}
	_body, _err := client.DetectStackResourceDriftWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DetectStackDriftWithOptions(request *DetectStackDriftRequest, runtime *util.RuntimeOptions) (_result *DetectStackDriftResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectStackDriftResponse{}
	_body, _err := client.DoRequest(tea.String("DetectStackDrift"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectStackDrift(request *DetectStackDriftRequest) (_result *DetectStackDriftResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DetectStackDriftResponse{}
	_body, _err := client.DetectStackDriftWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateStackInstancesWithOptions(request *UpdateStackInstancesRequest, runtime *util.RuntimeOptions) (_result *UpdateStackInstancesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateStackInstancesResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateStackInstances"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateStackInstances(request *UpdateStackInstancesRequest) (_result *UpdateStackInstancesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateStackInstancesResponse{}
	_body, _err := client.UpdateStackInstancesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListStackGroupOperationsWithOptions(request *ListStackGroupOperationsRequest, runtime *util.RuntimeOptions) (_result *ListStackGroupOperationsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListStackGroupOperationsResponse{}
	_body, _err := client.DoRequest(tea.String("ListStackGroupOperations"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListStackGroupOperations(request *ListStackGroupOperationsRequest) (_result *ListStackGroupOperationsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListStackGroupOperationsResponse{}
	_body, _err := client.ListStackGroupOperationsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetStackGroupWithOptions(request *GetStackGroupRequest, runtime *util.RuntimeOptions) (_result *GetStackGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetStackGroupResponse{}
	_body, _err := client.DoRequest(tea.String("GetStackGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetStackGroup(request *GetStackGroupRequest) (_result *GetStackGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetStackGroupResponse{}
	_body, _err := client.GetStackGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetStackGroupOperationWithOptions(request *GetStackGroupOperationRequest, runtime *util.RuntimeOptions) (_result *GetStackGroupOperationResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetStackGroupOperationResponse{}
	_body, _err := client.DoRequest(tea.String("GetStackGroupOperation"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetStackGroupOperation(request *GetStackGroupOperationRequest) (_result *GetStackGroupOperationResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetStackGroupOperationResponse{}
	_body, _err := client.GetStackGroupOperationWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListStackGroupsWithOptions(request *ListStackGroupsRequest, runtime *util.RuntimeOptions) (_result *ListStackGroupsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListStackGroupsResponse{}
	_body, _err := client.DoRequest(tea.String("ListStackGroups"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListStackGroups(request *ListStackGroupsRequest) (_result *ListStackGroupsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListStackGroupsResponse{}
	_body, _err := client.ListStackGroupsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateStackInstancesWithOptions(request *CreateStackInstancesRequest, runtime *util.RuntimeOptions) (_result *CreateStackInstancesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateStackInstancesResponse{}
	_body, _err := client.DoRequest(tea.String("CreateStackInstances"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateStackInstances(request *CreateStackInstancesRequest) (_result *CreateStackInstancesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateStackInstancesResponse{}
	_body, _err := client.CreateStackInstancesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateStackGroupWithOptions(request *CreateStackGroupRequest, runtime *util.RuntimeOptions) (_result *CreateStackGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateStackGroupResponse{}
	_body, _err := client.DoRequest(tea.String("CreateStackGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateStackGroup(request *CreateStackGroupRequest) (_result *CreateStackGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateStackGroupResponse{}
	_body, _err := client.CreateStackGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetStackInstanceWithOptions(request *GetStackInstanceRequest, runtime *util.RuntimeOptions) (_result *GetStackInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetStackInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("GetStackInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetStackInstance(request *GetStackInstanceRequest) (_result *GetStackInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetStackInstanceResponse{}
	_body, _err := client.GetStackInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateStackGroupWithOptions(request *UpdateStackGroupRequest, runtime *util.RuntimeOptions) (_result *UpdateStackGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateStackGroupResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateStackGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateStackGroup(request *UpdateStackGroupRequest) (_result *UpdateStackGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateStackGroupResponse{}
	_body, _err := client.UpdateStackGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListStackInstancesWithOptions(request *ListStackInstancesRequest, runtime *util.RuntimeOptions) (_result *ListStackInstancesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListStackInstancesResponse{}
	_body, _err := client.DoRequest(tea.String("ListStackInstances"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListStackInstances(request *ListStackInstancesRequest) (_result *ListStackInstancesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListStackInstancesResponse{}
	_body, _err := client.ListStackInstancesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListStackGroupOperationResultsWithOptions(request *ListStackGroupOperationResultsRequest, runtime *util.RuntimeOptions) (_result *ListStackGroupOperationResultsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListStackGroupOperationResultsResponse{}
	_body, _err := client.DoRequest(tea.String("ListStackGroupOperationResults"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListStackGroupOperationResults(request *ListStackGroupOperationResultsRequest) (_result *ListStackGroupOperationResultsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListStackGroupOperationResultsResponse{}
	_body, _err := client.ListStackGroupOperationResultsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) StopStackGroupOperationWithOptions(request *StopStackGroupOperationRequest, runtime *util.RuntimeOptions) (_result *StopStackGroupOperationResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &StopStackGroupOperationResponse{}
	_body, _err := client.DoRequest(tea.String("StopStackGroupOperation"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) StopStackGroupOperation(request *StopStackGroupOperationRequest) (_result *StopStackGroupOperationResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &StopStackGroupOperationResponse{}
	_body, _err := client.StopStackGroupOperationWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteStackGroupWithOptions(request *DeleteStackGroupRequest, runtime *util.RuntimeOptions) (_result *DeleteStackGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteStackGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteStackGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteStackGroup(request *DeleteStackGroupRequest) (_result *DeleteStackGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteStackGroupResponse{}
	_body, _err := client.DeleteStackGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteStackInstancesWithOptions(request *DeleteStackInstancesRequest, runtime *util.RuntimeOptions) (_result *DeleteStackInstancesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteStackInstancesResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteStackInstances"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteStackInstances(request *DeleteStackInstancesRequest) (_result *DeleteStackInstancesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteStackInstancesResponse{}
	_body, _err := client.DeleteStackInstancesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListTagResourcesWithOptions(request *ListTagResourcesRequest, runtime *util.RuntimeOptions) (_result *ListTagResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListTagResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("ListTagResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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

func (client *Client) UntagResourcesWithOptions(request *UntagResourcesRequest, runtime *util.RuntimeOptions) (_result *UntagResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UntagResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("UntagResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UntagResources(request *UntagResourcesRequest) (_result *UntagResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UntagResourcesResponse{}
	_body, _err := client.UntagResourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) TagResourcesWithOptions(request *TagResourcesRequest, runtime *util.RuntimeOptions) (_result *TagResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &TagResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("TagResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TagResources(request *TagResourcesRequest) (_result *TagResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &TagResourcesResponse{}
	_body, _err := client.TagResourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteTemplateWithOptions(request *DeleteTemplateRequest, runtime *util.RuntimeOptions) (_result *DeleteTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteTemplate(request *DeleteTemplateRequest) (_result *DeleteTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteTemplateResponse{}
	_body, _err := client.DeleteTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateTemplateWithOptions(request *UpdateTemplateRequest, runtime *util.RuntimeOptions) (_result *UpdateTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateTemplate(request *UpdateTemplateRequest) (_result *UpdateTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateTemplateResponse{}
	_body, _err := client.UpdateTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListTemplatesWithOptions(request *ListTemplatesRequest, runtime *util.RuntimeOptions) (_result *ListTemplatesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListTemplatesResponse{}
	_body, _err := client.DoRequest(tea.String("ListTemplates"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListTemplates(request *ListTemplatesRequest) (_result *ListTemplatesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListTemplatesResponse{}
	_body, _err := client.ListTemplatesWithOptions(request, runtime)
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
	_body, _err := client.DoRequest(tea.String("CreateTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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

func (client *Client) CreateStackWithOptions(request *CreateStackRequest, runtime *util.RuntimeOptions) (_result *CreateStackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateStackResponse{}
	_body, _err := client.DoRequest(tea.String("CreateStack"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateStack(request *CreateStackRequest) (_result *CreateStackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateStackResponse{}
	_body, _err := client.CreateStackWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetStackWithOptions(request *GetStackRequest, runtime *util.RuntimeOptions) (_result *GetStackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetStackResponse{}
	_body, _err := client.DoRequest(tea.String("GetStack"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetStack(request *GetStackRequest) (_result *GetStackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetStackResponse{}
	_body, _err := client.GetStackWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteStackWithOptions(request *DeleteStackRequest, runtime *util.RuntimeOptions) (_result *DeleteStackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteStackResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteStack"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteStack(request *DeleteStackRequest) (_result *DeleteStackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteStackResponse{}
	_body, _err := client.DeleteStackWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateStackWithOptions(request *UpdateStackRequest, runtime *util.RuntimeOptions) (_result *UpdateStackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateStackResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateStack"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateStack(request *UpdateStackRequest) (_result *UpdateStackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateStackResponse{}
	_body, _err := client.UpdateStackWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListStacksWithOptions(request *ListStacksRequest, runtime *util.RuntimeOptions) (_result *ListStacksResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListStacksResponse{}
	_body, _err := client.DoRequest(tea.String("ListStacks"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListStacks(request *ListStacksRequest) (_result *ListStacksResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListStacksResponse{}
	_body, _err := client.ListStacksWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PreviewStackWithOptions(request *PreviewStackRequest, runtime *util.RuntimeOptions) (_result *PreviewStackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PreviewStackResponse{}
	_body, _err := client.DoRequest(tea.String("PreviewStack"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PreviewStack(request *PreviewStackRequest) (_result *PreviewStackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PreviewStackResponse{}
	_body, _err := client.PreviewStackWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetTemplateEstimateCostWithOptions(request *GetTemplateEstimateCostRequest, runtime *util.RuntimeOptions) (_result *GetTemplateEstimateCostResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetTemplateEstimateCostResponse{}
	_body, _err := client.DoRequest(tea.String("GetTemplateEstimateCost"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetTemplateEstimateCost(request *GetTemplateEstimateCostRequest) (_result *GetTemplateEstimateCostResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetTemplateEstimateCostResponse{}
	_body, _err := client.GetTemplateEstimateCostWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CancelUpdateStackWithOptions(request *CancelUpdateStackRequest, runtime *util.RuntimeOptions) (_result *CancelUpdateStackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CancelUpdateStackResponse{}
	_body, _err := client.DoRequest(tea.String("CancelUpdateStack"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CancelUpdateStack(request *CancelUpdateStackRequest) (_result *CancelUpdateStackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CancelUpdateStackResponse{}
	_body, _err := client.CancelUpdateStackWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ContinueCreateStackWithOptions(request *ContinueCreateStackRequest, runtime *util.RuntimeOptions) (_result *ContinueCreateStackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ContinueCreateStackResponse{}
	_body, _err := client.DoRequest(tea.String("ContinueCreateStack"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ContinueCreateStack(request *ContinueCreateStackRequest) (_result *ContinueCreateStackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ContinueCreateStackResponse{}
	_body, _err := client.ContinueCreateStackWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetStackPolicyWithOptions(request *SetStackPolicyRequest, runtime *util.RuntimeOptions) (_result *SetStackPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetStackPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("SetStackPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetStackPolicy(request *SetStackPolicyRequest) (_result *SetStackPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetStackPolicyResponse{}
	_body, _err := client.SetStackPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetStackPolicyWithOptions(request *GetStackPolicyRequest, runtime *util.RuntimeOptions) (_result *GetStackPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetStackPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("GetStackPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetStackPolicy(request *GetStackPolicyRequest) (_result *GetStackPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetStackPolicyResponse{}
	_body, _err := client.GetStackPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ValidateTemplateWithOptions(request *ValidateTemplateRequest, runtime *util.RuntimeOptions) (_result *ValidateTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ValidateTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("ValidateTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ValidateTemplate(request *ValidateTemplateRequest) (_result *ValidateTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ValidateTemplateResponse{}
	_body, _err := client.ValidateTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetTemplateWithOptions(request *GetTemplateRequest, runtime *util.RuntimeOptions) (_result *GetTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("GetTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetTemplate(request *GetTemplateRequest) (_result *GetTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetTemplateResponse{}
	_body, _err := client.GetTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetChangeSetWithOptions(request *GetChangeSetRequest, runtime *util.RuntimeOptions) (_result *GetChangeSetResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetChangeSetResponse{}
	_body, _err := client.DoRequest(tea.String("GetChangeSet"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetChangeSet(request *GetChangeSetRequest) (_result *GetChangeSetResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetChangeSetResponse{}
	_body, _err := client.GetChangeSetWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListChangeSetsWithOptions(request *ListChangeSetsRequest, runtime *util.RuntimeOptions) (_result *ListChangeSetsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListChangeSetsResponse{}
	_body, _err := client.DoRequest(tea.String("ListChangeSets"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListChangeSets(request *ListChangeSetsRequest) (_result *ListChangeSetsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListChangeSetsResponse{}
	_body, _err := client.ListChangeSetsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ExecuteChangeSetWithOptions(request *ExecuteChangeSetRequest, runtime *util.RuntimeOptions) (_result *ExecuteChangeSetResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ExecuteChangeSetResponse{}
	_body, _err := client.DoRequest(tea.String("ExecuteChangeSet"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ExecuteChangeSet(request *ExecuteChangeSetRequest) (_result *ExecuteChangeSetResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ExecuteChangeSetResponse{}
	_body, _err := client.ExecuteChangeSetWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteChangeSetWithOptions(request *DeleteChangeSetRequest, runtime *util.RuntimeOptions) (_result *DeleteChangeSetResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteChangeSetResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteChangeSet"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteChangeSet(request *DeleteChangeSetRequest) (_result *DeleteChangeSetResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteChangeSetResponse{}
	_body, _err := client.DeleteChangeSetWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListStackEventsWithOptions(request *ListStackEventsRequest, runtime *util.RuntimeOptions) (_result *ListStackEventsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListStackEventsResponse{}
	_body, _err := client.DoRequest(tea.String("ListStackEvents"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListStackEvents(request *ListStackEventsRequest) (_result *ListStackEventsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListStackEventsResponse{}
	_body, _err := client.ListStackEventsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListStackResourcesWithOptions(request *ListStackResourcesRequest, runtime *util.RuntimeOptions) (_result *ListStackResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListStackResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("ListStackResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListStackResources(request *ListStackResourcesRequest) (_result *ListStackResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListStackResourcesResponse{}
	_body, _err := client.ListStackResourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetStackResourceWithOptions(request *GetStackResourceRequest, runtime *util.RuntimeOptions) (_result *GetStackResourceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetStackResourceResponse{}
	_body, _err := client.DoRequest(tea.String("GetStackResource"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetStackResource(request *GetStackResourceRequest) (_result *GetStackResourceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetStackResourceResponse{}
	_body, _err := client.GetStackResourceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetResourceTypeTemplateWithOptions(request *GetResourceTypeTemplateRequest, runtime *util.RuntimeOptions) (_result *GetResourceTypeTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetResourceTypeTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("GetResourceTypeTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetResourceTypeTemplate(request *GetResourceTypeTemplateRequest) (_result *GetResourceTypeTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetResourceTypeTemplateResponse{}
	_body, _err := client.GetResourceTypeTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetResourceTypeWithOptions(request *GetResourceTypeRequest, runtime *util.RuntimeOptions) (_result *GetResourceTypeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetResourceTypeResponse{}
	_body, _err := client.DoRequest(tea.String("GetResourceType"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetResourceType(request *GetResourceTypeRequest) (_result *GetResourceTypeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetResourceTypeResponse{}
	_body, _err := client.GetResourceTypeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListResourceTypesWithOptions(request *ListResourceTypesRequest, runtime *util.RuntimeOptions) (_result *ListResourceTypesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListResourceTypesResponse{}
	_body, _err := client.DoRequest(tea.String("ListResourceTypes"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListResourceTypes(request *ListResourceTypesRequest) (_result *ListResourceTypesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListResourceTypesResponse{}
	_body, _err := client.ListResourceTypesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SignalResourceWithOptions(request *SignalResourceRequest, runtime *util.RuntimeOptions) (_result *SignalResourceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SignalResourceResponse{}
	_body, _err := client.DoRequest(tea.String("SignalResource"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SignalResource(request *SignalResourceRequest) (_result *SignalResourceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SignalResourceResponse{}
	_body, _err := client.SignalResourceWithOptions(request, runtime)
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
	_body, _err := client.DoRequest(tea.String("DescribeRegions"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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

func (client *Client) CreateChangeSetWithOptions(request *CreateChangeSetRequest, runtime *util.RuntimeOptions) (_result *CreateChangeSetResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateChangeSetResponse{}
	_body, _err := client.DoRequest(tea.String("CreateChangeSet"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-10"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateChangeSet(request *CreateChangeSetRequest) (_result *CreateChangeSetResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateChangeSetResponse{}
	_body, _err := client.CreateChangeSetWithOptions(request, runtime)
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
