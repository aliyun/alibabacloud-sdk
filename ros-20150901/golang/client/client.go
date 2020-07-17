// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	roa "github.com/alibabacloud-go/tea-roa/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type CreateChangeSetRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s CreateChangeSetRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateChangeSetRequest) GoString() string {
	return s.String()
}

func (s *CreateChangeSetRequest) SetHeaders(v map[string]*string) *CreateChangeSetRequest {
	s.Headers = v
	return s
}

type CreateChangeSetResponseBody struct {
	Dummy *string `json:"Dummy,omitempty" xml:"Dummy,omitempty" require:"true"`
}

func (s CreateChangeSetResponseBody) String() string {
	return tea.Prettify(s)
}

func (s CreateChangeSetResponseBody) GoString() string {
	return s.String()
}

func (s *CreateChangeSetResponseBody) SetDummy(v string) *CreateChangeSetResponseBody {
	s.Dummy = &v
	return s
}

type CreateChangeSetResponse struct {
	Headers map[string]*string           `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *CreateChangeSetResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s CreateChangeSetResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateChangeSetResponse) GoString() string {
	return s.String()
}

func (s *CreateChangeSetResponse) SetHeaders(v map[string]*string) *CreateChangeSetResponse {
	s.Headers = v
	return s
}

func (s *CreateChangeSetResponse) SetBody(v *CreateChangeSetResponseBody) *CreateChangeSetResponse {
	s.Body = v
	return s
}

type DescribeChangeSetDetailRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeChangeSetDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeChangeSetDetailRequest) GoString() string {
	return s.String()
}

func (s *DescribeChangeSetDetailRequest) SetHeaders(v map[string]*string) *DescribeChangeSetDetailRequest {
	s.Headers = v
	return s
}

type DescribeChangeSetDetailResponseBody struct {
	Dummy *string `json:"Dummy,omitempty" xml:"Dummy,omitempty" require:"true"`
}

func (s DescribeChangeSetDetailResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeChangeSetDetailResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeChangeSetDetailResponseBody) SetDummy(v string) *DescribeChangeSetDetailResponseBody {
	s.Dummy = &v
	return s
}

type DescribeChangeSetDetailResponse struct {
	Headers map[string]*string                   `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DescribeChangeSetDetailResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeChangeSetDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeChangeSetDetailResponse) GoString() string {
	return s.String()
}

func (s *DescribeChangeSetDetailResponse) SetHeaders(v map[string]*string) *DescribeChangeSetDetailResponse {
	s.Headers = v
	return s
}

func (s *DescribeChangeSetDetailResponse) SetBody(v *DescribeChangeSetDetailResponseBody) *DescribeChangeSetDetailResponse {
	s.Body = v
	return s
}

type DescribeChangeSetsRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeChangeSetsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeChangeSetsRequest) GoString() string {
	return s.String()
}

func (s *DescribeChangeSetsRequest) SetHeaders(v map[string]*string) *DescribeChangeSetsRequest {
	s.Headers = v
	return s
}

type DescribeChangeSetsResponseBody struct {
	Dummy *string `json:"Dummy,omitempty" xml:"Dummy,omitempty" require:"true"`
}

func (s DescribeChangeSetsResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DescribeChangeSetsResponseBody) GoString() string {
	return s.String()
}

func (s *DescribeChangeSetsResponseBody) SetDummy(v string) *DescribeChangeSetsResponseBody {
	s.Dummy = &v
	return s
}

type DescribeChangeSetsResponse struct {
	Headers map[string]*string              `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DescribeChangeSetsResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DescribeChangeSetsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeChangeSetsResponse) GoString() string {
	return s.String()
}

func (s *DescribeChangeSetsResponse) SetHeaders(v map[string]*string) *DescribeChangeSetsResponse {
	s.Headers = v
	return s
}

func (s *DescribeChangeSetsResponse) SetBody(v *DescribeChangeSetsResponseBody) *DescribeChangeSetsResponse {
	s.Body = v
	return s
}

type ExecuteChangeSetRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s ExecuteChangeSetRequest) String() string {
	return tea.Prettify(s)
}

func (s ExecuteChangeSetRequest) GoString() string {
	return s.String()
}

func (s *ExecuteChangeSetRequest) SetHeaders(v map[string]*string) *ExecuteChangeSetRequest {
	s.Headers = v
	return s
}

type ExecuteChangeSetResponseBody struct {
	Dummy *string `json:"Dummy,omitempty" xml:"Dummy,omitempty" require:"true"`
}

func (s ExecuteChangeSetResponseBody) String() string {
	return tea.Prettify(s)
}

func (s ExecuteChangeSetResponseBody) GoString() string {
	return s.String()
}

func (s *ExecuteChangeSetResponseBody) SetDummy(v string) *ExecuteChangeSetResponseBody {
	s.Dummy = &v
	return s
}

type ExecuteChangeSetResponse struct {
	Headers map[string]*string            `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *ExecuteChangeSetResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s ExecuteChangeSetResponse) String() string {
	return tea.Prettify(s)
}

func (s ExecuteChangeSetResponse) GoString() string {
	return s.String()
}

func (s *ExecuteChangeSetResponse) SetHeaders(v map[string]*string) *ExecuteChangeSetResponse {
	s.Headers = v
	return s
}

func (s *ExecuteChangeSetResponse) SetBody(v *ExecuteChangeSetResponseBody) *ExecuteChangeSetResponse {
	s.Body = v
	return s
}

type DeleteChangeSetRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DeleteChangeSetRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteChangeSetRequest) GoString() string {
	return s.String()
}

func (s *DeleteChangeSetRequest) SetHeaders(v map[string]*string) *DeleteChangeSetRequest {
	s.Headers = v
	return s
}

type DeleteChangeSetResponseBody struct {
	Dummy *string `json:"Dummy,omitempty" xml:"Dummy,omitempty" require:"true"`
}

func (s DeleteChangeSetResponseBody) String() string {
	return tea.Prettify(s)
}

func (s DeleteChangeSetResponseBody) GoString() string {
	return s.String()
}

func (s *DeleteChangeSetResponseBody) SetDummy(v string) *DeleteChangeSetResponseBody {
	s.Dummy = &v
	return s
}

type DeleteChangeSetResponse struct {
	Headers map[string]*string           `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
	Body    *DeleteChangeSetResponseBody `json:"body,omitempty" xml:"body,omitempty" require:"true"`
}

func (s DeleteChangeSetResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteChangeSetResponse) GoString() string {
	return s.String()
}

func (s *DeleteChangeSetResponse) SetHeaders(v map[string]*string) *DeleteChangeSetResponse {
	s.Headers = v
	return s
}

func (s *DeleteChangeSetResponse) SetBody(v *DeleteChangeSetResponseBody) *DeleteChangeSetResponse {
	s.Body = v
	return s
}

type ContinueCreateStackRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s ContinueCreateStackRequest) String() string {
	return tea.Prettify(s)
}

func (s ContinueCreateStackRequest) GoString() string {
	return s.String()
}

func (s *ContinueCreateStackRequest) SetHeaders(v map[string]*string) *ContinueCreateStackRequest {
	s.Headers = v
	return s
}

type ContinueCreateStackResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s ContinueCreateStackResponse) String() string {
	return tea.Prettify(s)
}

func (s ContinueCreateStackResponse) GoString() string {
	return s.String()
}

func (s *ContinueCreateStackResponse) SetHeaders(v map[string]*string) *ContinueCreateStackResponse {
	s.Headers = v
	return s
}

type CancelUpdateStackRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s CancelUpdateStackRequest) String() string {
	return tea.Prettify(s)
}

func (s CancelUpdateStackRequest) GoString() string {
	return s.String()
}

func (s *CancelUpdateStackRequest) SetHeaders(v map[string]*string) *CancelUpdateStackRequest {
	s.Headers = v
	return s
}

type CancelUpdateStackResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s CancelUpdateStackResponse) String() string {
	return tea.Prettify(s)
}

func (s CancelUpdateStackResponse) GoString() string {
	return s.String()
}

func (s *CancelUpdateStackResponse) SetHeaders(v map[string]*string) *CancelUpdateStackResponse {
	s.Headers = v
	return s
}

type GetStackPolicyRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s GetStackPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s GetStackPolicyRequest) GoString() string {
	return s.String()
}

func (s *GetStackPolicyRequest) SetHeaders(v map[string]*string) *GetStackPolicyRequest {
	s.Headers = v
	return s
}

type GetStackPolicyResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s GetStackPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s GetStackPolicyResponse) GoString() string {
	return s.String()
}

func (s *GetStackPolicyResponse) SetHeaders(v map[string]*string) *GetStackPolicyResponse {
	s.Headers = v
	return s
}

type SetStackPolicyRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s SetStackPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s SetStackPolicyRequest) GoString() string {
	return s.String()
}

func (s *SetStackPolicyRequest) SetHeaders(v map[string]*string) *SetStackPolicyRequest {
	s.Headers = v
	return s
}

type SetStackPolicyResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s SetStackPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s SetStackPolicyResponse) GoString() string {
	return s.String()
}

func (s *SetStackPolicyResponse) SetHeaders(v map[string]*string) *SetStackPolicyResponse {
	s.Headers = v
	return s
}

type UpdateStackRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s UpdateStackRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateStackRequest) GoString() string {
	return s.String()
}

func (s *UpdateStackRequest) SetHeaders(v map[string]*string) *UpdateStackRequest {
	s.Headers = v
	return s
}

type UpdateStackResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s UpdateStackResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateStackResponse) GoString() string {
	return s.String()
}

func (s *UpdateStackResponse) SetHeaders(v map[string]*string) *UpdateStackResponse {
	s.Headers = v
	return s
}

type WaitConditionsQuery struct {
	Stackname *string `json:"stackname,omitempty" xml:"stackname,omitempty" require:"true"`
	Stackid   *string `json:"stackid,omitempty" xml:"stackid,omitempty" require:"true"`
	Resource  *string `json:"resource,omitempty" xml:"resource,omitempty" require:"true"`
	Expire    *string `json:"expire,omitempty" xml:"expire,omitempty" require:"true"`
	Signature *string `json:"signature,omitempty" xml:"signature,omitempty" require:"true"`
}

func (s WaitConditionsQuery) String() string {
	return tea.Prettify(s)
}

func (s WaitConditionsQuery) GoString() string {
	return s.String()
}

func (s *WaitConditionsQuery) SetStackname(v string) *WaitConditionsQuery {
	s.Stackname = &v
	return s
}

func (s *WaitConditionsQuery) SetStackid(v string) *WaitConditionsQuery {
	s.Stackid = &v
	return s
}

func (s *WaitConditionsQuery) SetResource(v string) *WaitConditionsQuery {
	s.Resource = &v
	return s
}

func (s *WaitConditionsQuery) SetExpire(v string) *WaitConditionsQuery {
	s.Expire = &v
	return s
}

func (s *WaitConditionsQuery) SetSignature(v string) *WaitConditionsQuery {
	s.Signature = &v
	return s
}

type WaitConditionsRequest struct {
	Headers map[string]*string   `json:"headers,omitempty" xml:"headers,omitempty"`
	Query   *WaitConditionsQuery `json:"query,omitempty" xml:"query,omitempty" require:"true"`
}

func (s WaitConditionsRequest) String() string {
	return tea.Prettify(s)
}

func (s WaitConditionsRequest) GoString() string {
	return s.String()
}

func (s *WaitConditionsRequest) SetHeaders(v map[string]*string) *WaitConditionsRequest {
	s.Headers = v
	return s
}

func (s *WaitConditionsRequest) SetQuery(v *WaitConditionsQuery) *WaitConditionsRequest {
	s.Query = v
	return s
}

type WaitConditionsResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s WaitConditionsResponse) String() string {
	return tea.Prettify(s)
}

func (s WaitConditionsResponse) GoString() string {
	return s.String()
}

func (s *WaitConditionsResponse) SetHeaders(v map[string]*string) *WaitConditionsResponse {
	s.Headers = v
	return s
}

type InquiryStackRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s InquiryStackRequest) String() string {
	return tea.Prettify(s)
}

func (s InquiryStackRequest) GoString() string {
	return s.String()
}

func (s *InquiryStackRequest) SetHeaders(v map[string]*string) *InquiryStackRequest {
	s.Headers = v
	return s
}

type InquiryStackResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s InquiryStackResponse) String() string {
	return tea.Prettify(s)
}

func (s InquiryStackResponse) GoString() string {
	return s.String()
}

func (s *InquiryStackResponse) SetHeaders(v map[string]*string) *InquiryStackResponse {
	s.Headers = v
	return s
}

type PreviewStackRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s PreviewStackRequest) String() string {
	return tea.Prettify(s)
}

func (s PreviewStackRequest) GoString() string {
	return s.String()
}

func (s *PreviewStackRequest) SetHeaders(v map[string]*string) *PreviewStackRequest {
	s.Headers = v
	return s
}

type PreviewStackResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s PreviewStackResponse) String() string {
	return tea.Prettify(s)
}

func (s PreviewStackResponse) GoString() string {
	return s.String()
}

func (s *PreviewStackResponse) SetHeaders(v map[string]*string) *PreviewStackResponse {
	s.Headers = v
	return s
}

type DoActionsRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DoActionsRequest) String() string {
	return tea.Prettify(s)
}

func (s DoActionsRequest) GoString() string {
	return s.String()
}

func (s *DoActionsRequest) SetHeaders(v map[string]*string) *DoActionsRequest {
	s.Headers = v
	return s
}

type DoActionsResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DoActionsResponse) String() string {
	return tea.Prettify(s)
}

func (s DoActionsResponse) GoString() string {
	return s.String()
}

func (s *DoActionsResponse) SetHeaders(v map[string]*string) *DoActionsResponse {
	s.Headers = v
	return s
}

type DescribeRegionsRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeRegionsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsRequest) GoString() string {
	return s.String()
}

func (s *DescribeRegionsRequest) SetHeaders(v map[string]*string) *DescribeRegionsRequest {
	s.Headers = v
	return s
}

type DescribeRegionsResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DescribeRegionsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsResponse) GoString() string {
	return s.String()
}

func (s *DescribeRegionsResponse) SetHeaders(v map[string]*string) *DescribeRegionsResponse {
	s.Headers = v
	return s
}

type DescribeEventsQuery struct {
	ResourceStatus *string `json:"ResourceStatus,omitempty" xml:"ResourceStatus,omitempty"`
	ResourceName   *string `json:"ResourceName,omitempty" xml:"ResourceName,omitempty"`
	ResourceType   *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeEventsQuery) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventsQuery) GoString() string {
	return s.String()
}

func (s *DescribeEventsQuery) SetResourceStatus(v string) *DescribeEventsQuery {
	s.ResourceStatus = &v
	return s
}

func (s *DescribeEventsQuery) SetResourceName(v string) *DescribeEventsQuery {
	s.ResourceName = &v
	return s
}

func (s *DescribeEventsQuery) SetResourceType(v string) *DescribeEventsQuery {
	s.ResourceType = &v
	return s
}

func (s *DescribeEventsQuery) SetPageSize(v int) *DescribeEventsQuery {
	s.PageSize = &v
	return s
}

func (s *DescribeEventsQuery) SetPageNumber(v int) *DescribeEventsQuery {
	s.PageNumber = &v
	return s
}

type DescribeEventsRequest struct {
	Headers map[string]*string   `json:"headers,omitempty" xml:"headers,omitempty"`
	Query   *DescribeEventsQuery `json:"query,omitempty" xml:"query,omitempty"`
}

func (s DescribeEventsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventsRequest) GoString() string {
	return s.String()
}

func (s *DescribeEventsRequest) SetHeaders(v map[string]*string) *DescribeEventsRequest {
	s.Headers = v
	return s
}

func (s *DescribeEventsRequest) SetQuery(v *DescribeEventsQuery) *DescribeEventsRequest {
	s.Query = v
	return s
}

type DescribeEventsResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DescribeEventsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventsResponse) GoString() string {
	return s.String()
}

func (s *DescribeEventsResponse) SetHeaders(v map[string]*string) *DescribeEventsResponse {
	s.Headers = v
	return s
}

type DeleteStackQuery struct {
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty"`
}

func (s DeleteStackQuery) String() string {
	return tea.Prettify(s)
}

func (s DeleteStackQuery) GoString() string {
	return s.String()
}

func (s *DeleteStackQuery) SetRegionId(v string) *DeleteStackQuery {
	s.RegionId = &v
	return s
}

type DeleteStackRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
	Query   *DeleteStackQuery  `json:"query,omitempty" xml:"query,omitempty"`
}

func (s DeleteStackRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteStackRequest) GoString() string {
	return s.String()
}

func (s *DeleteStackRequest) SetHeaders(v map[string]*string) *DeleteStackRequest {
	s.Headers = v
	return s
}

func (s *DeleteStackRequest) SetQuery(v *DeleteStackQuery) *DeleteStackRequest {
	s.Query = v
	return s
}

type DeleteStackResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DeleteStackResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteStackResponse) GoString() string {
	return s.String()
}

func (s *DeleteStackResponse) SetHeaders(v map[string]*string) *DeleteStackResponse {
	s.Headers = v
	return s
}

type CreateStacksRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s CreateStacksRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateStacksRequest) GoString() string {
	return s.String()
}

func (s *CreateStacksRequest) SetHeaders(v map[string]*string) *CreateStacksRequest {
	s.Headers = v
	return s
}

type CreateStacksResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s CreateStacksResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateStacksResponse) GoString() string {
	return s.String()
}

func (s *CreateStacksResponse) SetHeaders(v map[string]*string) *CreateStacksResponse {
	s.Headers = v
	return s
}

type AbandonStackRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s AbandonStackRequest) String() string {
	return tea.Prettify(s)
}

func (s AbandonStackRequest) GoString() string {
	return s.String()
}

func (s *AbandonStackRequest) SetHeaders(v map[string]*string) *AbandonStackRequest {
	s.Headers = v
	return s
}

type AbandonStackResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s AbandonStackResponse) String() string {
	return tea.Prettify(s)
}

func (s AbandonStackResponse) GoString() string {
	return s.String()
}

func (s *AbandonStackResponse) SetHeaders(v map[string]*string) *AbandonStackResponse {
	s.Headers = v
	return s
}

type DescribeResourceTypesQuery struct {
	SupportStatus *string `json:"SupportStatus,omitempty" xml:"SupportStatus,omitempty"`
}

func (s DescribeResourceTypesQuery) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourceTypesQuery) GoString() string {
	return s.String()
}

func (s *DescribeResourceTypesQuery) SetSupportStatus(v string) *DescribeResourceTypesQuery {
	s.SupportStatus = &v
	return s
}

type DescribeResourceTypesRequest struct {
	Headers map[string]*string          `json:"headers,omitempty" xml:"headers,omitempty"`
	Query   *DescribeResourceTypesQuery `json:"query,omitempty" xml:"query,omitempty"`
}

func (s DescribeResourceTypesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourceTypesRequest) GoString() string {
	return s.String()
}

func (s *DescribeResourceTypesRequest) SetHeaders(v map[string]*string) *DescribeResourceTypesRequest {
	s.Headers = v
	return s
}

func (s *DescribeResourceTypesRequest) SetQuery(v *DescribeResourceTypesQuery) *DescribeResourceTypesRequest {
	s.Query = v
	return s
}

type DescribeResourceTypesResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DescribeResourceTypesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourceTypesResponse) GoString() string {
	return s.String()
}

func (s *DescribeResourceTypesResponse) SetHeaders(v map[string]*string) *DescribeResourceTypesResponse {
	s.Headers = v
	return s
}

type DescribeResourceTypeDetailRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeResourceTypeDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourceTypeDetailRequest) GoString() string {
	return s.String()
}

func (s *DescribeResourceTypeDetailRequest) SetHeaders(v map[string]*string) *DescribeResourceTypeDetailRequest {
	s.Headers = v
	return s
}

type DescribeResourceTypeDetailResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DescribeResourceTypeDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourceTypeDetailResponse) GoString() string {
	return s.String()
}

func (s *DescribeResourceTypeDetailResponse) SetHeaders(v map[string]*string) *DescribeResourceTypeDetailResponse {
	s.Headers = v
	return s
}

type DescribeResourcesRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcesRequest) GoString() string {
	return s.String()
}

func (s *DescribeResourcesRequest) SetHeaders(v map[string]*string) *DescribeResourcesRequest {
	s.Headers = v
	return s
}

type DescribeResourcesResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DescribeResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourcesResponse) GoString() string {
	return s.String()
}

func (s *DescribeResourcesResponse) SetHeaders(v map[string]*string) *DescribeResourcesResponse {
	s.Headers = v
	return s
}

type DescribeResourceDetailRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeResourceDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourceDetailRequest) GoString() string {
	return s.String()
}

func (s *DescribeResourceDetailRequest) SetHeaders(v map[string]*string) *DescribeResourceDetailRequest {
	s.Headers = v
	return s
}

type DescribeResourceDetailResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DescribeResourceDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourceDetailResponse) GoString() string {
	return s.String()
}

func (s *DescribeResourceDetailResponse) SetHeaders(v map[string]*string) *DescribeResourceDetailResponse {
	s.Headers = v
	return s
}

type DescribeResourceTypeTemplateRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeResourceTypeTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourceTypeTemplateRequest) GoString() string {
	return s.String()
}

func (s *DescribeResourceTypeTemplateRequest) SetHeaders(v map[string]*string) *DescribeResourceTypeTemplateRequest {
	s.Headers = v
	return s
}

type DescribeResourceTypeTemplateResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DescribeResourceTypeTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeResourceTypeTemplateResponse) GoString() string {
	return s.String()
}

func (s *DescribeResourceTypeTemplateResponse) SetHeaders(v map[string]*string) *DescribeResourceTypeTemplateResponse {
	s.Headers = v
	return s
}

type DescribeStacksQuery struct {
	Status     *string `json:"Status,omitempty" xml:"Status,omitempty"`
	Name       *string `json:"Name,omitempty" xml:"Name,omitempty"`
	StackId    *string `json:"StackId,omitempty" xml:"StackId,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeStacksQuery) String() string {
	return tea.Prettify(s)
}

func (s DescribeStacksQuery) GoString() string {
	return s.String()
}

func (s *DescribeStacksQuery) SetStatus(v string) *DescribeStacksQuery {
	s.Status = &v
	return s
}

func (s *DescribeStacksQuery) SetName(v string) *DescribeStacksQuery {
	s.Name = &v
	return s
}

func (s *DescribeStacksQuery) SetStackId(v string) *DescribeStacksQuery {
	s.StackId = &v
	return s
}

func (s *DescribeStacksQuery) SetPageSize(v int) *DescribeStacksQuery {
	s.PageSize = &v
	return s
}

func (s *DescribeStacksQuery) SetPageNumber(v int) *DescribeStacksQuery {
	s.PageNumber = &v
	return s
}

type DescribeStacksRequest struct {
	Headers map[string]*string   `json:"headers,omitempty" xml:"headers,omitempty"`
	Query   *DescribeStacksQuery `json:"query,omitempty" xml:"query,omitempty"`
}

func (s DescribeStacksRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeStacksRequest) GoString() string {
	return s.String()
}

func (s *DescribeStacksRequest) SetHeaders(v map[string]*string) *DescribeStacksRequest {
	s.Headers = v
	return s
}

func (s *DescribeStacksRequest) SetQuery(v *DescribeStacksQuery) *DescribeStacksRequest {
	s.Query = v
	return s
}

type DescribeStacksResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DescribeStacksResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeStacksResponse) GoString() string {
	return s.String()
}

func (s *DescribeStacksResponse) SetHeaders(v map[string]*string) *DescribeStacksResponse {
	s.Headers = v
	return s
}

type DescribeStackDetailRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeStackDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeStackDetailRequest) GoString() string {
	return s.String()
}

func (s *DescribeStackDetailRequest) SetHeaders(v map[string]*string) *DescribeStackDetailRequest {
	s.Headers = v
	return s
}

type DescribeStackDetailResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DescribeStackDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeStackDetailResponse) GoString() string {
	return s.String()
}

func (s *DescribeStackDetailResponse) SetHeaders(v map[string]*string) *DescribeStackDetailResponse {
	s.Headers = v
	return s
}

type ValidateTemplateRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s ValidateTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s ValidateTemplateRequest) GoString() string {
	return s.String()
}

func (s *ValidateTemplateRequest) SetHeaders(v map[string]*string) *ValidateTemplateRequest {
	s.Headers = v
	return s
}

type ValidateTemplateResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s ValidateTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s ValidateTemplateResponse) GoString() string {
	return s.String()
}

func (s *ValidateTemplateResponse) SetHeaders(v map[string]*string) *ValidateTemplateResponse {
	s.Headers = v
	return s
}

type DescribeTemplateRequest struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty"`
}

func (s DescribeTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeTemplateRequest) GoString() string {
	return s.String()
}

func (s *DescribeTemplateRequest) SetHeaders(v map[string]*string) *DescribeTemplateRequest {
	s.Headers = v
	return s
}

type DescribeTemplateResponse struct {
	Headers map[string]*string `json:"headers,omitempty" xml:"headers,omitempty" require:"true"`
}

func (s DescribeTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeTemplateResponse) GoString() string {
	return s.String()
}

func (s *DescribeTemplateResponse) SetHeaders(v map[string]*string) *DescribeTemplateResponse {
	s.Headers = v
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
	client.EndpointRule = tea.String("central")
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.EndpointHost, _err = client.GetEndpoint(tea.String("ros"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.EndpointHost)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) CreateChangeSetWithOptions(request *CreateChangeSetRequest, runtime *util.RuntimeOptions) (_result *CreateChangeSetResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateChangeSetResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/changeSets"), nil, request.Headers, nil, runtime)
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

func (client *Client) DescribeChangeSetDetailWithOptions(stackName *string, stackId *string, changeSetName *string, request *DescribeChangeSetDetailRequest, runtime *util.RuntimeOptions) (_result *DescribeChangeSetDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeChangeSetDetailResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)+"/changeSets/"+tea.StringValue(changeSetName)), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeChangeSetDetail(stackName *string, stackId *string, changeSetName *string, request *DescribeChangeSetDetailRequest) (_result *DescribeChangeSetDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeChangeSetDetailResponse{}
	_body, _err := client.DescribeChangeSetDetailWithOptions(stackName, stackId, changeSetName, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeChangeSetsWithOptions(stackName *string, stackId *string, request *DescribeChangeSetsRequest, runtime *util.RuntimeOptions) (_result *DescribeChangeSetsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeChangeSetsResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)+"/changeSets"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeChangeSets(stackName *string, stackId *string, request *DescribeChangeSetsRequest) (_result *DescribeChangeSetsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeChangeSetsResponse{}
	_body, _err := client.DescribeChangeSetsWithOptions(stackName, stackId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ExecuteChangeSetWithOptions(stackName *string, stackId *string, changeSetName *string, request *ExecuteChangeSetRequest, runtime *util.RuntimeOptions) (_result *ExecuteChangeSetResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ExecuteChangeSetResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("PUT"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)+"/changeSets/"+tea.StringValue(changeSetName)+"/execute"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ExecuteChangeSet(stackName *string, stackId *string, changeSetName *string, request *ExecuteChangeSetRequest) (_result *ExecuteChangeSetResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ExecuteChangeSetResponse{}
	_body, _err := client.ExecuteChangeSetWithOptions(stackName, stackId, changeSetName, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteChangeSetWithOptions(stackName *string, stackId *string, changeSetName *string, request *DeleteChangeSetRequest, runtime *util.RuntimeOptions) (_result *DeleteChangeSetResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteChangeSetResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("DELETE"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)+"/changeSets/"+tea.StringValue(changeSetName)), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteChangeSet(stackName *string, stackId *string, changeSetName *string, request *DeleteChangeSetRequest) (_result *DeleteChangeSetResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteChangeSetResponse{}
	_body, _err := client.DeleteChangeSetWithOptions(stackName, stackId, changeSetName, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ContinueCreateStackWithOptions(stackName *string, stackId *string, request *ContinueCreateStackRequest, runtime *util.RuntimeOptions) (_result *ContinueCreateStackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ContinueCreateStackResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)+"/continue"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ContinueCreateStack(stackName *string, stackId *string, request *ContinueCreateStackRequest) (_result *ContinueCreateStackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ContinueCreateStackResponse{}
	_body, _err := client.ContinueCreateStackWithOptions(stackName, stackId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CancelUpdateStackWithOptions(stackName *string, stackId *string, request *CancelUpdateStackRequest, runtime *util.RuntimeOptions) (_result *CancelUpdateStackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CancelUpdateStackResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("PUT"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)+"/cancel"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CancelUpdateStack(stackName *string, stackId *string, request *CancelUpdateStackRequest) (_result *CancelUpdateStackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CancelUpdateStackResponse{}
	_body, _err := client.CancelUpdateStackWithOptions(stackName, stackId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetStackPolicyWithOptions(stackName *string, stackId *string, request *GetStackPolicyRequest, runtime *util.RuntimeOptions) (_result *GetStackPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetStackPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)+"/policy"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetStackPolicy(stackName *string, stackId *string, request *GetStackPolicyRequest) (_result *GetStackPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetStackPolicyResponse{}
	_body, _err := client.GetStackPolicyWithOptions(stackName, stackId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetStackPolicyWithOptions(stackName *string, stackId *string, request *SetStackPolicyRequest, runtime *util.RuntimeOptions) (_result *SetStackPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetStackPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)+"/policy"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetStackPolicy(stackName *string, stackId *string, request *SetStackPolicyRequest) (_result *SetStackPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetStackPolicyResponse{}
	_body, _err := client.SetStackPolicyWithOptions(stackName, stackId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateStackWithOptions(stackName *string, stackId *string, request *UpdateStackRequest, runtime *util.RuntimeOptions) (_result *UpdateStackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateStackResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("PUT"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateStack(stackName *string, stackId *string, request *UpdateStackRequest) (_result *UpdateStackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateStackResponse{}
	_body, _err := client.UpdateStackWithOptions(stackName, stackId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) WaitConditionsWithOptions(request *WaitConditionsRequest, runtime *util.RuntimeOptions) (_result *WaitConditionsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &WaitConditionsResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("POST"), tea.String("Anonymous"), tea.String("/waitcondition"), util.StringifyMapValue(tea.ToMap(request.Query)), request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) WaitConditions(request *WaitConditionsRequest) (_result *WaitConditionsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &WaitConditionsResponse{}
	_body, _err := client.WaitConditionsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) InquiryStackWithOptions(request *InquiryStackRequest, runtime *util.RuntimeOptions) (_result *InquiryStackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &InquiryStackResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/stacks/inquiry"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) InquiryStack(request *InquiryStackRequest) (_result *InquiryStackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &InquiryStackResponse{}
	_body, _err := client.InquiryStackWithOptions(request, runtime)
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
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/stacks/preview"), nil, request.Headers, nil, runtime)
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

func (client *Client) DoActionsWithOptions(stackName *string, stackId *string, request *DoActionsRequest, runtime *util.RuntimeOptions) (_result *DoActionsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DoActionsResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)+"/actions"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DoActions(stackName *string, stackId *string, request *DoActionsRequest) (_result *DoActionsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DoActionsResponse{}
	_body, _err := client.DoActionsWithOptions(stackName, stackId, request, runtime)
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
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/regions"), nil, request.Headers, nil, runtime)
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

func (client *Client) DescribeEventsWithOptions(stackName *string, stackId *string, request *DescribeEventsRequest, runtime *util.RuntimeOptions) (_result *DescribeEventsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeEventsResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)+"/events"), util.StringifyMapValue(tea.ToMap(request.Query)), request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeEvents(stackName *string, stackId *string, request *DescribeEventsRequest) (_result *DescribeEventsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeEventsResponse{}
	_body, _err := client.DescribeEventsWithOptions(stackName, stackId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteStackWithOptions(stackName *string, stackId *string, request *DeleteStackRequest, runtime *util.RuntimeOptions) (_result *DeleteStackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteStackResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("DELETE"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)), util.StringifyMapValue(tea.ToMap(request.Query)), request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteStack(stackName *string, stackId *string, request *DeleteStackRequest) (_result *DeleteStackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteStackResponse{}
	_body, _err := client.DeleteStackWithOptions(stackName, stackId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateStacksWithOptions(request *CreateStacksRequest, runtime *util.RuntimeOptions) (_result *CreateStacksResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateStacksResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/stacks"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateStacks(request *CreateStacksRequest) (_result *CreateStacksResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateStacksResponse{}
	_body, _err := client.CreateStacksWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AbandonStackWithOptions(stackName *string, stackId *string, request *AbandonStackRequest, runtime *util.RuntimeOptions) (_result *AbandonStackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AbandonStackResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("DELETE"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)+"/abandon"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AbandonStack(stackName *string, stackId *string, request *AbandonStackRequest) (_result *AbandonStackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AbandonStackResponse{}
	_body, _err := client.AbandonStackWithOptions(stackName, stackId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeResourceTypesWithOptions(request *DescribeResourceTypesRequest, runtime *util.RuntimeOptions) (_result *DescribeResourceTypesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeResourceTypesResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/resource_types"), util.StringifyMapValue(tea.ToMap(request.Query)), request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeResourceTypes(request *DescribeResourceTypesRequest) (_result *DescribeResourceTypesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeResourceTypesResponse{}
	_body, _err := client.DescribeResourceTypesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeResourceTypeDetailWithOptions(typeName *string, request *DescribeResourceTypeDetailRequest, runtime *util.RuntimeOptions) (_result *DescribeResourceTypeDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeResourceTypeDetailResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/resource_types/"+tea.StringValue(typeName)), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeResourceTypeDetail(typeName *string, request *DescribeResourceTypeDetailRequest) (_result *DescribeResourceTypeDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeResourceTypeDetailResponse{}
	_body, _err := client.DescribeResourceTypeDetailWithOptions(typeName, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeResourcesWithOptions(stackName *string, stackId *string, request *DescribeResourcesRequest, runtime *util.RuntimeOptions) (_result *DescribeResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)+"/resources"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeResources(stackName *string, stackId *string, request *DescribeResourcesRequest) (_result *DescribeResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeResourcesResponse{}
	_body, _err := client.DescribeResourcesWithOptions(stackName, stackId, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeResourceDetailWithOptions(stackName *string, stackId *string, resourceName *string, request *DescribeResourceDetailRequest, runtime *util.RuntimeOptions) (_result *DescribeResourceDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeResourceDetailResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)+"/resources/"+tea.StringValue(resourceName)), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeResourceDetail(stackName *string, stackId *string, resourceName *string, request *DescribeResourceDetailRequest) (_result *DescribeResourceDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeResourceDetailResponse{}
	_body, _err := client.DescribeResourceDetailWithOptions(stackName, stackId, resourceName, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeResourceTypeTemplateWithOptions(typeName *string, request *DescribeResourceTypeTemplateRequest, runtime *util.RuntimeOptions) (_result *DescribeResourceTypeTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeResourceTypeTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/resource_types/"+tea.StringValue(typeName)+"/template"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeResourceTypeTemplate(typeName *string, request *DescribeResourceTypeTemplateRequest) (_result *DescribeResourceTypeTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeResourceTypeTemplateResponse{}
	_body, _err := client.DescribeResourceTypeTemplateWithOptions(typeName, request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeStacksWithOptions(request *DescribeStacksRequest, runtime *util.RuntimeOptions) (_result *DescribeStacksResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeStacksResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/stacks"), util.StringifyMapValue(tea.ToMap(request.Query)), request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeStacks(request *DescribeStacksRequest) (_result *DescribeStacksResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeStacksResponse{}
	_body, _err := client.DescribeStacksWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeStackDetailWithOptions(stackName *string, stackId *string, request *DescribeStackDetailRequest, runtime *util.RuntimeOptions) (_result *DescribeStackDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeStackDetailResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeStackDetail(stackName *string, stackId *string, request *DescribeStackDetailRequest) (_result *DescribeStackDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeStackDetailResponse{}
	_body, _err := client.DescribeStackDetailWithOptions(stackName, stackId, request, runtime)
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
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("POST"), tea.String("AK"), tea.String("/validate"), nil, request.Headers, nil, runtime)
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

func (client *Client) DescribeTemplateWithOptions(stackName *string, stackId *string, request *DescribeTemplateRequest, runtime *util.RuntimeOptions) (_result *DescribeTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("2015-09-01"), tea.String("HTTPS"), tea.String("GET"), tea.String("AK"), tea.String("/stacks/"+tea.StringValue(stackName)+"/"+tea.StringValue(stackId)+"/template"), nil, request.Headers, nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeTemplate(stackName *string, stackId *string, request *DescribeTemplateRequest) (_result *DescribeTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeTemplateResponse{}
	_body, _err := client.DescribeTemplateWithOptions(stackName, stackId, request, runtime)
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
