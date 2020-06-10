// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type DescribeExporterOutputListRequest struct {
	PageNumber *int `json:"PageNumber" xml:"PageNumber"`
	PageSize   *int `json:"PageSize" xml:"PageSize"`
}

func (s DescribeExporterOutputListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeExporterOutputListRequest) GoString() string {
	return s.String()
}

func (s *DescribeExporterOutputListRequest) SetPageNumber(v int) *DescribeExporterOutputListRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeExporterOutputListRequest) SetPageSize(v int) *DescribeExporterOutputListRequest {
	s.PageSize = &v
	return s
}

type DescribeExporterOutputListResponse struct {
	Code       *string                                       `json:"Code" xml:"Code" require:"true"`
	Message    *string                                       `json:"Message" xml:"Message" require:"true"`
	RequestId  *string                                       `json:"RequestId" xml:"RequestId" require:"true"`
	Total      *int                                          `json:"Total" xml:"Total" require:"true"`
	PageNumber *int                                          `json:"PageNumber" xml:"PageNumber" require:"true"`
	Success    *bool                                         `json:"Success" xml:"Success" require:"true"`
	Datapoints *DescribeExporterOutputListResponseDatapoints `json:"Datapoints" xml:"Datapoints" require:"true" type:"Struct"`
}

func (s DescribeExporterOutputListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeExporterOutputListResponse) GoString() string {
	return s.String()
}

func (s *DescribeExporterOutputListResponse) SetCode(v string) *DescribeExporterOutputListResponse {
	s.Code = &v
	return s
}

func (s *DescribeExporterOutputListResponse) SetMessage(v string) *DescribeExporterOutputListResponse {
	s.Message = &v
	return s
}

func (s *DescribeExporterOutputListResponse) SetRequestId(v string) *DescribeExporterOutputListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeExporterOutputListResponse) SetTotal(v int) *DescribeExporterOutputListResponse {
	s.Total = &v
	return s
}

func (s *DescribeExporterOutputListResponse) SetPageNumber(v int) *DescribeExporterOutputListResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeExporterOutputListResponse) SetSuccess(v bool) *DescribeExporterOutputListResponse {
	s.Success = &v
	return s
}

func (s *DescribeExporterOutputListResponse) SetDatapoints(v *DescribeExporterOutputListResponseDatapoints) *DescribeExporterOutputListResponse {
	s.Datapoints = v
	return s
}

type DescribeExporterOutputListResponseDatapoints struct {
	Datapoint []*DescribeExporterOutputListResponseDatapointsDatapoint `json:"Datapoint" xml:"Datapoint" require:"true" type:"Repeated"`
}

func (s DescribeExporterOutputListResponseDatapoints) String() string {
	return tea.Prettify(s)
}

func (s DescribeExporterOutputListResponseDatapoints) GoString() string {
	return s.String()
}

func (s *DescribeExporterOutputListResponseDatapoints) SetDatapoint(v []*DescribeExporterOutputListResponseDatapointsDatapoint) *DescribeExporterOutputListResponseDatapoints {
	s.Datapoint = v
	return s
}

type DescribeExporterOutputListResponseDatapointsDatapoint struct {
	DestName   *string                                                          `json:"DestName" xml:"DestName" require:"true"`
	DestType   *string                                                          `json:"DestType" xml:"DestType" require:"true"`
	CreateTime *int64                                                           `json:"CreateTime" xml:"CreateTime" require:"true"`
	ConfigJson *DescribeExporterOutputListResponseDatapointsDatapointConfigJson `json:"ConfigJson" xml:"ConfigJson" require:"true" type:"Struct"`
}

func (s DescribeExporterOutputListResponseDatapointsDatapoint) String() string {
	return tea.Prettify(s)
}

func (s DescribeExporterOutputListResponseDatapointsDatapoint) GoString() string {
	return s.String()
}

func (s *DescribeExporterOutputListResponseDatapointsDatapoint) SetDestName(v string) *DescribeExporterOutputListResponseDatapointsDatapoint {
	s.DestName = &v
	return s
}

func (s *DescribeExporterOutputListResponseDatapointsDatapoint) SetDestType(v string) *DescribeExporterOutputListResponseDatapointsDatapoint {
	s.DestType = &v
	return s
}

func (s *DescribeExporterOutputListResponseDatapointsDatapoint) SetCreateTime(v int64) *DescribeExporterOutputListResponseDatapointsDatapoint {
	s.CreateTime = &v
	return s
}

func (s *DescribeExporterOutputListResponseDatapointsDatapoint) SetConfigJson(v *DescribeExporterOutputListResponseDatapointsDatapointConfigJson) *DescribeExporterOutputListResponseDatapointsDatapoint {
	s.ConfigJson = v
	return s
}

type DescribeExporterOutputListResponseDatapointsDatapointConfigJson struct {
	Logstore *string `json:"logstore" xml:"logstore" require:"true"`
	Project  *string `json:"project" xml:"project" require:"true"`
	Endpoint *string `json:"endpoint" xml:"endpoint" require:"true"`
	As       *string `json:"as" xml:"as" require:"true"`
	Ak       *string `json:"ak" xml:"ak" require:"true"`
}

func (s DescribeExporterOutputListResponseDatapointsDatapointConfigJson) String() string {
	return tea.Prettify(s)
}

func (s DescribeExporterOutputListResponseDatapointsDatapointConfigJson) GoString() string {
	return s.String()
}

func (s *DescribeExporterOutputListResponseDatapointsDatapointConfigJson) SetLogstore(v string) *DescribeExporterOutputListResponseDatapointsDatapointConfigJson {
	s.Logstore = &v
	return s
}

func (s *DescribeExporterOutputListResponseDatapointsDatapointConfigJson) SetProject(v string) *DescribeExporterOutputListResponseDatapointsDatapointConfigJson {
	s.Project = &v
	return s
}

func (s *DescribeExporterOutputListResponseDatapointsDatapointConfigJson) SetEndpoint(v string) *DescribeExporterOutputListResponseDatapointsDatapointConfigJson {
	s.Endpoint = &v
	return s
}

func (s *DescribeExporterOutputListResponseDatapointsDatapointConfigJson) SetAs(v string) *DescribeExporterOutputListResponseDatapointsDatapointConfigJson {
	s.As = &v
	return s
}

func (s *DescribeExporterOutputListResponseDatapointsDatapointConfigJson) SetAk(v string) *DescribeExporterOutputListResponseDatapointsDatapointConfigJson {
	s.Ak = &v
	return s
}

type DeleteExporterOutputRequest struct {
	DestName *string `json:"DestName" xml:"DestName" require:"true"`
}

func (s DeleteExporterOutputRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteExporterOutputRequest) GoString() string {
	return s.String()
}

func (s *DeleteExporterOutputRequest) SetDestName(v string) *DeleteExporterOutputRequest {
	s.DestName = &v
	return s
}

type DeleteExporterOutputResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
}

func (s DeleteExporterOutputResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteExporterOutputResponse) GoString() string {
	return s.String()
}

func (s *DeleteExporterOutputResponse) SetCode(v string) *DeleteExporterOutputResponse {
	s.Code = &v
	return s
}

func (s *DeleteExporterOutputResponse) SetMessage(v string) *DeleteExporterOutputResponse {
	s.Message = &v
	return s
}

func (s *DeleteExporterOutputResponse) SetRequestId(v string) *DeleteExporterOutputResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteExporterOutputResponse) SetSuccess(v bool) *DeleteExporterOutputResponse {
	s.Success = &v
	return s
}

type PutExporterOutputRequest struct {
	DestName   *string `json:"DestName" xml:"DestName" require:"true"`
	ConfigJson *string `json:"ConfigJson" xml:"ConfigJson" require:"true"`
	Desc       *string `json:"Desc" xml:"Desc"`
	DestType   *string `json:"DestType" xml:"DestType"`
}

func (s PutExporterOutputRequest) String() string {
	return tea.Prettify(s)
}

func (s PutExporterOutputRequest) GoString() string {
	return s.String()
}

func (s *PutExporterOutputRequest) SetDestName(v string) *PutExporterOutputRequest {
	s.DestName = &v
	return s
}

func (s *PutExporterOutputRequest) SetConfigJson(v string) *PutExporterOutputRequest {
	s.ConfigJson = &v
	return s
}

func (s *PutExporterOutputRequest) SetDesc(v string) *PutExporterOutputRequest {
	s.Desc = &v
	return s
}

func (s *PutExporterOutputRequest) SetDestType(v string) *PutExporterOutputRequest {
	s.DestType = &v
	return s
}

type PutExporterOutputResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
}

func (s PutExporterOutputResponse) String() string {
	return tea.Prettify(s)
}

func (s PutExporterOutputResponse) GoString() string {
	return s.String()
}

func (s *PutExporterOutputResponse) SetCode(v string) *PutExporterOutputResponse {
	s.Code = &v
	return s
}

func (s *PutExporterOutputResponse) SetMessage(v string) *PutExporterOutputResponse {
	s.Message = &v
	return s
}

func (s *PutExporterOutputResponse) SetRequestId(v string) *PutExporterOutputResponse {
	s.RequestId = &v
	return s
}

func (s *PutExporterOutputResponse) SetSuccess(v bool) *PutExporterOutputResponse {
	s.Success = &v
	return s
}

type DescribeFolderListRequest struct {
	AppName *string `json:"AppName" xml:"AppName"`
}

func (s DescribeFolderListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeFolderListRequest) GoString() string {
	return s.String()
}

func (s *DescribeFolderListRequest) SetAppName(v string) *DescribeFolderListRequest {
	s.AppName = &v
	return s
}

type DescribeFolderListResponse struct {
	RequestId  *string                             `json:"RequestId" xml:"RequestId" require:"true"`
	Success    *bool                               `json:"Success" xml:"Success" require:"true"`
	Code       *int                                `json:"Code" xml:"Code" require:"true"`
	Message    *string                             `json:"Message" xml:"Message" require:"true"`
	PageNumber *int                                `json:"PageNumber" xml:"PageNumber" require:"true"`
	PageSize   *int                                `json:"PageSize" xml:"PageSize" require:"true"`
	Total      *int                                `json:"Total" xml:"Total" require:"true"`
	Resource   *DescribeFolderListResponseResource `json:"Resource" xml:"Resource" require:"true" type:"Struct"`
}

func (s DescribeFolderListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeFolderListResponse) GoString() string {
	return s.String()
}

func (s *DescribeFolderListResponse) SetRequestId(v string) *DescribeFolderListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeFolderListResponse) SetSuccess(v bool) *DescribeFolderListResponse {
	s.Success = &v
	return s
}

func (s *DescribeFolderListResponse) SetCode(v int) *DescribeFolderListResponse {
	s.Code = &v
	return s
}

func (s *DescribeFolderListResponse) SetMessage(v string) *DescribeFolderListResponse {
	s.Message = &v
	return s
}

func (s *DescribeFolderListResponse) SetPageNumber(v int) *DescribeFolderListResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeFolderListResponse) SetPageSize(v int) *DescribeFolderListResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeFolderListResponse) SetTotal(v int) *DescribeFolderListResponse {
	s.Total = &v
	return s
}

func (s *DescribeFolderListResponse) SetResource(v *DescribeFolderListResponseResource) *DescribeFolderListResponse {
	s.Resource = v
	return s
}

type DescribeFolderListResponseResource struct {
	Name      *string `json:"Name" xml:"Name" require:"true"`
	ServiceId *int64  `json:"ServiceId" xml:"ServiceId" require:"true"`
}

func (s DescribeFolderListResponseResource) String() string {
	return tea.Prettify(s)
}

func (s DescribeFolderListResponseResource) GoString() string {
	return s.String()
}

func (s *DescribeFolderListResponseResource) SetName(v string) *DescribeFolderListResponseResource {
	s.Name = &v
	return s
}

func (s *DescribeFolderListResponseResource) SetServiceId(v int64) *DescribeFolderListResponseResource {
	s.ServiceId = &v
	return s
}

type DeleteExporterRuleRequest struct {
	RuleName *string `json:"RuleName" xml:"RuleName" require:"true"`
}

func (s DeleteExporterRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteExporterRuleRequest) GoString() string {
	return s.String()
}

func (s *DeleteExporterRuleRequest) SetRuleName(v string) *DeleteExporterRuleRequest {
	s.RuleName = &v
	return s
}

type DeleteExporterRuleResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
}

func (s DeleteExporterRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteExporterRuleResponse) GoString() string {
	return s.String()
}

func (s *DeleteExporterRuleResponse) SetCode(v string) *DeleteExporterRuleResponse {
	s.Code = &v
	return s
}

func (s *DeleteExporterRuleResponse) SetMessage(v string) *DeleteExporterRuleResponse {
	s.Message = &v
	return s
}

func (s *DeleteExporterRuleResponse) SetRequestId(v string) *DeleteExporterRuleResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteExporterRuleResponse) SetSuccess(v bool) *DeleteExporterRuleResponse {
	s.Success = &v
	return s
}

type DescribeExporterRuleListRequest struct {
	PageNumber *int `json:"PageNumber" xml:"PageNumber"`
	PageSize   *int `json:"PageSize" xml:"PageSize"`
}

func (s DescribeExporterRuleListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeExporterRuleListRequest) GoString() string {
	return s.String()
}

func (s *DescribeExporterRuleListRequest) SetPageNumber(v int) *DescribeExporterRuleListRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeExporterRuleListRequest) SetPageSize(v int) *DescribeExporterRuleListRequest {
	s.PageSize = &v
	return s
}

type DescribeExporterRuleListResponse struct {
	Code       *string                                     `json:"Code" xml:"Code" require:"true"`
	Message    *string                                     `json:"Message" xml:"Message" require:"true"`
	RequestId  *string                                     `json:"RequestId" xml:"RequestId" require:"true"`
	Total      *int                                        `json:"Total" xml:"Total" require:"true"`
	PageNumber *int                                        `json:"PageNumber" xml:"PageNumber" require:"true"`
	Success    *bool                                       `json:"Success" xml:"Success" require:"true"`
	Datapoints *DescribeExporterRuleListResponseDatapoints `json:"Datapoints" xml:"Datapoints" require:"true" type:"Struct"`
}

func (s DescribeExporterRuleListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeExporterRuleListResponse) GoString() string {
	return s.String()
}

func (s *DescribeExporterRuleListResponse) SetCode(v string) *DescribeExporterRuleListResponse {
	s.Code = &v
	return s
}

func (s *DescribeExporterRuleListResponse) SetMessage(v string) *DescribeExporterRuleListResponse {
	s.Message = &v
	return s
}

func (s *DescribeExporterRuleListResponse) SetRequestId(v string) *DescribeExporterRuleListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeExporterRuleListResponse) SetTotal(v int) *DescribeExporterRuleListResponse {
	s.Total = &v
	return s
}

func (s *DescribeExporterRuleListResponse) SetPageNumber(v int) *DescribeExporterRuleListResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeExporterRuleListResponse) SetSuccess(v bool) *DescribeExporterRuleListResponse {
	s.Success = &v
	return s
}

func (s *DescribeExporterRuleListResponse) SetDatapoints(v *DescribeExporterRuleListResponseDatapoints) *DescribeExporterRuleListResponse {
	s.Datapoints = v
	return s
}

type DescribeExporterRuleListResponseDatapoints struct {
	Datapoint []*DescribeExporterRuleListResponseDatapointsDatapoint `json:"Datapoint" xml:"Datapoint" require:"true" type:"Repeated"`
}

func (s DescribeExporterRuleListResponseDatapoints) String() string {
	return tea.Prettify(s)
}

func (s DescribeExporterRuleListResponseDatapoints) GoString() string {
	return s.String()
}

func (s *DescribeExporterRuleListResponseDatapoints) SetDatapoint(v []*DescribeExporterRuleListResponseDatapointsDatapoint) *DescribeExporterRuleListResponseDatapoints {
	s.Datapoint = v
	return s
}

type DescribeExporterRuleListResponseDatapointsDatapoint struct {
	RuleName      *string                                                     `json:"RuleName" xml:"RuleName" require:"true"`
	Namespace     *string                                                     `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName    *string                                                     `json:"MetricName" xml:"MetricName" require:"true"`
	Enabled       *bool                                                       `json:"Enabled" xml:"Enabled" require:"true"`
	TargetWindows *string                                                     `json:"TargetWindows" xml:"TargetWindows" require:"true"`
	Describe      *string                                                     `json:"Describe" xml:"Describe" require:"true"`
	Dimension     *string                                                     `json:"Dimension" xml:"Dimension" require:"true"`
	CreateTime    *int64                                                      `json:"CreateTime" xml:"CreateTime" require:"true"`
	DstName       *DescribeExporterRuleListResponseDatapointsDatapointDstName `json:"DstName" xml:"DstName" require:"true" type:"Struct"`
}

func (s DescribeExporterRuleListResponseDatapointsDatapoint) String() string {
	return tea.Prettify(s)
}

func (s DescribeExporterRuleListResponseDatapointsDatapoint) GoString() string {
	return s.String()
}

func (s *DescribeExporterRuleListResponseDatapointsDatapoint) SetRuleName(v string) *DescribeExporterRuleListResponseDatapointsDatapoint {
	s.RuleName = &v
	return s
}

func (s *DescribeExporterRuleListResponseDatapointsDatapoint) SetNamespace(v string) *DescribeExporterRuleListResponseDatapointsDatapoint {
	s.Namespace = &v
	return s
}

func (s *DescribeExporterRuleListResponseDatapointsDatapoint) SetMetricName(v string) *DescribeExporterRuleListResponseDatapointsDatapoint {
	s.MetricName = &v
	return s
}

func (s *DescribeExporterRuleListResponseDatapointsDatapoint) SetEnabled(v bool) *DescribeExporterRuleListResponseDatapointsDatapoint {
	s.Enabled = &v
	return s
}

func (s *DescribeExporterRuleListResponseDatapointsDatapoint) SetTargetWindows(v string) *DescribeExporterRuleListResponseDatapointsDatapoint {
	s.TargetWindows = &v
	return s
}

func (s *DescribeExporterRuleListResponseDatapointsDatapoint) SetDescribe(v string) *DescribeExporterRuleListResponseDatapointsDatapoint {
	s.Describe = &v
	return s
}

func (s *DescribeExporterRuleListResponseDatapointsDatapoint) SetDimension(v string) *DescribeExporterRuleListResponseDatapointsDatapoint {
	s.Dimension = &v
	return s
}

func (s *DescribeExporterRuleListResponseDatapointsDatapoint) SetCreateTime(v int64) *DescribeExporterRuleListResponseDatapointsDatapoint {
	s.CreateTime = &v
	return s
}

func (s *DescribeExporterRuleListResponseDatapointsDatapoint) SetDstName(v *DescribeExporterRuleListResponseDatapointsDatapointDstName) *DescribeExporterRuleListResponseDatapointsDatapoint {
	s.DstName = v
	return s
}

type DescribeExporterRuleListResponseDatapointsDatapointDstName struct {
	DstName []*string `json:"DstName" xml:"DstName" require:"true" type:"Repeated"`
}

func (s DescribeExporterRuleListResponseDatapointsDatapointDstName) String() string {
	return tea.Prettify(s)
}

func (s DescribeExporterRuleListResponseDatapointsDatapointDstName) GoString() string {
	return s.String()
}

func (s *DescribeExporterRuleListResponseDatapointsDatapointDstName) SetDstName(v []*string) *DescribeExporterRuleListResponseDatapointsDatapointDstName {
	s.DstName = v
	return s
}

type PutExporterRuleRequest struct {
	RuleName      *string   `json:"RuleName" xml:"RuleName"`
	DstNames      []*string `json:"DstNames" xml:"DstNames" type:"Repeated"`
	Namespace     *string   `json:"Namespace" xml:"Namespace"`
	MetricName    *string   `json:"MetricName" xml:"MetricName"`
	TargetWindows *string   `json:"TargetWindows" xml:"TargetWindows"`
	Describe      *string   `json:"Describe" xml:"Describe"`
}

func (s PutExporterRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s PutExporterRuleRequest) GoString() string {
	return s.String()
}

func (s *PutExporterRuleRequest) SetRuleName(v string) *PutExporterRuleRequest {
	s.RuleName = &v
	return s
}

func (s *PutExporterRuleRequest) SetDstNames(v []*string) *PutExporterRuleRequest {
	s.DstNames = v
	return s
}

func (s *PutExporterRuleRequest) SetNamespace(v string) *PutExporterRuleRequest {
	s.Namespace = &v
	return s
}

func (s *PutExporterRuleRequest) SetMetricName(v string) *PutExporterRuleRequest {
	s.MetricName = &v
	return s
}

func (s *PutExporterRuleRequest) SetTargetWindows(v string) *PutExporterRuleRequest {
	s.TargetWindows = &v
	return s
}

func (s *PutExporterRuleRequest) SetDescribe(v string) *PutExporterRuleRequest {
	s.Describe = &v
	return s
}

type PutExporterRuleResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
}

func (s PutExporterRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s PutExporterRuleResponse) GoString() string {
	return s.String()
}

func (s *PutExporterRuleResponse) SetCode(v string) *PutExporterRuleResponse {
	s.Code = &v
	return s
}

func (s *PutExporterRuleResponse) SetMessage(v string) *PutExporterRuleResponse {
	s.Message = &v
	return s
}

func (s *PutExporterRuleResponse) SetRequestId(v string) *PutExporterRuleResponse {
	s.RequestId = &v
	return s
}

func (s *PutExporterRuleResponse) SetSuccess(v bool) *PutExporterRuleResponse {
	s.Success = &v
	return s
}

type DescribeDynamicTagRuleListRequest struct {
	TagKey     *string `json:"TagKey" xml:"TagKey"`
	PageNumber *string `json:"PageNumber" xml:"PageNumber"`
	PageSize   *string `json:"PageSize" xml:"PageSize"`
}

func (s DescribeDynamicTagRuleListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDynamicTagRuleListRequest) GoString() string {
	return s.String()
}

func (s *DescribeDynamicTagRuleListRequest) SetTagKey(v string) *DescribeDynamicTagRuleListRequest {
	s.TagKey = &v
	return s
}

func (s *DescribeDynamicTagRuleListRequest) SetPageNumber(v string) *DescribeDynamicTagRuleListRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeDynamicTagRuleListRequest) SetPageSize(v string) *DescribeDynamicTagRuleListRequest {
	s.PageSize = &v
	return s
}

type DescribeDynamicTagRuleListResponse struct {
	Success      *bool                                           `json:"Success" xml:"Success" require:"true"`
	Code         *string                                         `json:"Code" xml:"Code" require:"true"`
	Message      *string                                         `json:"Message" xml:"Message" require:"true"`
	RequestId    *string                                         `json:"RequestId" xml:"RequestId" require:"true"`
	Total        *int                                            `json:"Total" xml:"Total" require:"true"`
	PageNumber   *string                                         `json:"PageNumber" xml:"PageNumber" require:"true"`
	PageSize     *string                                         `json:"PageSize" xml:"PageSize" require:"true"`
	TagGroupList *DescribeDynamicTagRuleListResponseTagGroupList `json:"TagGroupList" xml:"TagGroupList" require:"true" type:"Struct"`
}

func (s DescribeDynamicTagRuleListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDynamicTagRuleListResponse) GoString() string {
	return s.String()
}

func (s *DescribeDynamicTagRuleListResponse) SetSuccess(v bool) *DescribeDynamicTagRuleListResponse {
	s.Success = &v
	return s
}

func (s *DescribeDynamicTagRuleListResponse) SetCode(v string) *DescribeDynamicTagRuleListResponse {
	s.Code = &v
	return s
}

func (s *DescribeDynamicTagRuleListResponse) SetMessage(v string) *DescribeDynamicTagRuleListResponse {
	s.Message = &v
	return s
}

func (s *DescribeDynamicTagRuleListResponse) SetRequestId(v string) *DescribeDynamicTagRuleListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDynamicTagRuleListResponse) SetTotal(v int) *DescribeDynamicTagRuleListResponse {
	s.Total = &v
	return s
}

func (s *DescribeDynamicTagRuleListResponse) SetPageNumber(v string) *DescribeDynamicTagRuleListResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeDynamicTagRuleListResponse) SetPageSize(v string) *DescribeDynamicTagRuleListResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeDynamicTagRuleListResponse) SetTagGroupList(v *DescribeDynamicTagRuleListResponseTagGroupList) *DescribeDynamicTagRuleListResponse {
	s.TagGroupList = v
	return s
}

type DescribeDynamicTagRuleListResponseTagGroupList struct {
	TagGroup []*DescribeDynamicTagRuleListResponseTagGroupListTagGroup `json:"TagGroup" xml:"TagGroup" require:"true" type:"Repeated"`
}

func (s DescribeDynamicTagRuleListResponseTagGroupList) String() string {
	return tea.Prettify(s)
}

func (s DescribeDynamicTagRuleListResponseTagGroupList) GoString() string {
	return s.String()
}

func (s *DescribeDynamicTagRuleListResponseTagGroupList) SetTagGroup(v []*DescribeDynamicTagRuleListResponseTagGroupListTagGroup) *DescribeDynamicTagRuleListResponseTagGroupList {
	s.TagGroup = v
	return s
}

type DescribeDynamicTagRuleListResponseTagGroupListTagGroup struct {
	DynamicTagRuleId           *string                                                               `json:"DynamicTagRuleId" xml:"DynamicTagRuleId" require:"true"`
	TagKey                     *string                                                               `json:"TagKey" xml:"TagKey" require:"true"`
	RegionId                   *string                                                               `json:"RegionId" xml:"RegionId" require:"true"`
	MatchExpressFilterRelation *string                                                               `json:"MatchExpressFilterRelation" xml:"MatchExpressFilterRelation" require:"true"`
	Status                     *string                                                               `json:"Status" xml:"Status" require:"true"`
	MatchExpress               *DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpress   `json:"MatchExpress" xml:"MatchExpress" require:"true" type:"Struct"`
	TemplateIdList             *DescribeDynamicTagRuleListResponseTagGroupListTagGroupTemplateIdList `json:"TemplateIdList" xml:"TemplateIdList" require:"true" type:"Struct"`
}

func (s DescribeDynamicTagRuleListResponseTagGroupListTagGroup) String() string {
	return tea.Prettify(s)
}

func (s DescribeDynamicTagRuleListResponseTagGroupListTagGroup) GoString() string {
	return s.String()
}

func (s *DescribeDynamicTagRuleListResponseTagGroupListTagGroup) SetDynamicTagRuleId(v string) *DescribeDynamicTagRuleListResponseTagGroupListTagGroup {
	s.DynamicTagRuleId = &v
	return s
}

func (s *DescribeDynamicTagRuleListResponseTagGroupListTagGroup) SetTagKey(v string) *DescribeDynamicTagRuleListResponseTagGroupListTagGroup {
	s.TagKey = &v
	return s
}

func (s *DescribeDynamicTagRuleListResponseTagGroupListTagGroup) SetRegionId(v string) *DescribeDynamicTagRuleListResponseTagGroupListTagGroup {
	s.RegionId = &v
	return s
}

func (s *DescribeDynamicTagRuleListResponseTagGroupListTagGroup) SetMatchExpressFilterRelation(v string) *DescribeDynamicTagRuleListResponseTagGroupListTagGroup {
	s.MatchExpressFilterRelation = &v
	return s
}

func (s *DescribeDynamicTagRuleListResponseTagGroupListTagGroup) SetStatus(v string) *DescribeDynamicTagRuleListResponseTagGroupListTagGroup {
	s.Status = &v
	return s
}

func (s *DescribeDynamicTagRuleListResponseTagGroupListTagGroup) SetMatchExpress(v *DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpress) *DescribeDynamicTagRuleListResponseTagGroupListTagGroup {
	s.MatchExpress = v
	return s
}

func (s *DescribeDynamicTagRuleListResponseTagGroupListTagGroup) SetTemplateIdList(v *DescribeDynamicTagRuleListResponseTagGroupListTagGroupTemplateIdList) *DescribeDynamicTagRuleListResponseTagGroupListTagGroup {
	s.TemplateIdList = v
	return s
}

type DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpress struct {
	MatchExpress []*DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress `json:"MatchExpress" xml:"MatchExpress" require:"true" type:"Repeated"`
}

func (s DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpress) String() string {
	return tea.Prettify(s)
}

func (s DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpress) GoString() string {
	return s.String()
}

func (s *DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpress) SetMatchExpress(v []*DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress) *DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpress {
	s.MatchExpress = v
	return s
}

type DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress struct {
	TagValueMatchFunction *string `json:"TagValueMatchFunction" xml:"TagValueMatchFunction" require:"true"`
	TagValue              *string `json:"TagValue" xml:"TagValue" require:"true"`
}

func (s DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress) String() string {
	return tea.Prettify(s)
}

func (s DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress) GoString() string {
	return s.String()
}

func (s *DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress) SetTagValueMatchFunction(v string) *DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress {
	s.TagValueMatchFunction = &v
	return s
}

func (s *DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress) SetTagValue(v string) *DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress {
	s.TagValue = &v
	return s
}

type DescribeDynamicTagRuleListResponseTagGroupListTagGroupTemplateIdList struct {
	TemplateIdList []*string `json:"TemplateIdList" xml:"TemplateIdList" require:"true" type:"Repeated"`
}

func (s DescribeDynamicTagRuleListResponseTagGroupListTagGroupTemplateIdList) String() string {
	return tea.Prettify(s)
}

func (s DescribeDynamicTagRuleListResponseTagGroupListTagGroupTemplateIdList) GoString() string {
	return s.String()
}

func (s *DescribeDynamicTagRuleListResponseTagGroupListTagGroupTemplateIdList) SetTemplateIdList(v []*string) *DescribeDynamicTagRuleListResponseTagGroupListTagGroupTemplateIdList {
	s.TemplateIdList = v
	return s
}

type DescribeProductResourceTagKeyListRequest struct {
	NextToken *string `json:"NextToken" xml:"NextToken"`
}

func (s DescribeProductResourceTagKeyListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeProductResourceTagKeyListRequest) GoString() string {
	return s.String()
}

func (s *DescribeProductResourceTagKeyListRequest) SetNextToken(v string) *DescribeProductResourceTagKeyListRequest {
	s.NextToken = &v
	return s
}

type DescribeProductResourceTagKeyListResponse struct {
	Code      *string                                           `json:"Code" xml:"Code" require:"true"`
	Message   *string                                           `json:"Message" xml:"Message" require:"true"`
	Success   *bool                                             `json:"Success" xml:"Success" require:"true"`
	RequestId *string                                           `json:"RequestId" xml:"RequestId" require:"true"`
	NextToken *string                                           `json:"NextToken" xml:"NextToken" require:"true"`
	TagKeys   *DescribeProductResourceTagKeyListResponseTagKeys `json:"TagKeys" xml:"TagKeys" require:"true" type:"Struct"`
}

func (s DescribeProductResourceTagKeyListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeProductResourceTagKeyListResponse) GoString() string {
	return s.String()
}

func (s *DescribeProductResourceTagKeyListResponse) SetCode(v string) *DescribeProductResourceTagKeyListResponse {
	s.Code = &v
	return s
}

func (s *DescribeProductResourceTagKeyListResponse) SetMessage(v string) *DescribeProductResourceTagKeyListResponse {
	s.Message = &v
	return s
}

func (s *DescribeProductResourceTagKeyListResponse) SetSuccess(v bool) *DescribeProductResourceTagKeyListResponse {
	s.Success = &v
	return s
}

func (s *DescribeProductResourceTagKeyListResponse) SetRequestId(v string) *DescribeProductResourceTagKeyListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeProductResourceTagKeyListResponse) SetNextToken(v string) *DescribeProductResourceTagKeyListResponse {
	s.NextToken = &v
	return s
}

func (s *DescribeProductResourceTagKeyListResponse) SetTagKeys(v *DescribeProductResourceTagKeyListResponseTagKeys) *DescribeProductResourceTagKeyListResponse {
	s.TagKeys = v
	return s
}

type DescribeProductResourceTagKeyListResponseTagKeys struct {
	TagKey []*string `json:"TagKey" xml:"TagKey" require:"true" type:"Repeated"`
}

func (s DescribeProductResourceTagKeyListResponseTagKeys) String() string {
	return tea.Prettify(s)
}

func (s DescribeProductResourceTagKeyListResponseTagKeys) GoString() string {
	return s.String()
}

func (s *DescribeProductResourceTagKeyListResponseTagKeys) SetTagKey(v []*string) *DescribeProductResourceTagKeyListResponseTagKeys {
	s.TagKey = v
	return s
}

type CreateDynamicTagGroupRequest struct {
	TagKey                     *string                                     `json:"TagKey" xml:"TagKey" require:"true"`
	EnableSubscribeEvent       *bool                                       `json:"EnableSubscribeEvent" xml:"EnableSubscribeEvent"`
	EnableInstallAgent         *bool                                       `json:"EnableInstallAgent" xml:"EnableInstallAgent"`
	RegionId                   *string                                     `json:"RegionId" xml:"RegionId" require:"true"`
	MatchExpressFilterRelation *string                                     `json:"MatchExpressFilterRelation" xml:"MatchExpressFilterRelation"`
	MatchExpress               []*CreateDynamicTagGroupRequestMatchExpress `json:"MatchExpress" xml:"MatchExpress" type:"Repeated"`
	ContactGroupList           []*string                                   `json:"ContactGroupList" xml:"ContactGroupList" require:"true" type:"Repeated"`
	TemplateIdList             []*string                                   `json:"TemplateIdList" xml:"TemplateIdList" type:"Repeated"`
}

func (s CreateDynamicTagGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateDynamicTagGroupRequest) GoString() string {
	return s.String()
}

func (s *CreateDynamicTagGroupRequest) SetTagKey(v string) *CreateDynamicTagGroupRequest {
	s.TagKey = &v
	return s
}

func (s *CreateDynamicTagGroupRequest) SetEnableSubscribeEvent(v bool) *CreateDynamicTagGroupRequest {
	s.EnableSubscribeEvent = &v
	return s
}

func (s *CreateDynamicTagGroupRequest) SetEnableInstallAgent(v bool) *CreateDynamicTagGroupRequest {
	s.EnableInstallAgent = &v
	return s
}

func (s *CreateDynamicTagGroupRequest) SetRegionId(v string) *CreateDynamicTagGroupRequest {
	s.RegionId = &v
	return s
}

func (s *CreateDynamicTagGroupRequest) SetMatchExpressFilterRelation(v string) *CreateDynamicTagGroupRequest {
	s.MatchExpressFilterRelation = &v
	return s
}

func (s *CreateDynamicTagGroupRequest) SetMatchExpress(v []*CreateDynamicTagGroupRequestMatchExpress) *CreateDynamicTagGroupRequest {
	s.MatchExpress = v
	return s
}

func (s *CreateDynamicTagGroupRequest) SetContactGroupList(v []*string) *CreateDynamicTagGroupRequest {
	s.ContactGroupList = v
	return s
}

func (s *CreateDynamicTagGroupRequest) SetTemplateIdList(v []*string) *CreateDynamicTagGroupRequest {
	s.TemplateIdList = v
	return s
}

type CreateDynamicTagGroupRequestMatchExpress struct {
	TagValueMatchFunction *string `json:"TagValueMatchFunction" xml:"TagValueMatchFunction"`
	TagValue              *string `json:"TagValue" xml:"TagValue"`
}

func (s CreateDynamicTagGroupRequestMatchExpress) String() string {
	return tea.Prettify(s)
}

func (s CreateDynamicTagGroupRequestMatchExpress) GoString() string {
	return s.String()
}

func (s *CreateDynamicTagGroupRequestMatchExpress) SetTagValueMatchFunction(v string) *CreateDynamicTagGroupRequestMatchExpress {
	s.TagValueMatchFunction = &v
	return s
}

func (s *CreateDynamicTagGroupRequestMatchExpress) SetTagValue(v string) *CreateDynamicTagGroupRequestMatchExpress {
	s.TagValue = &v
	return s
}

type CreateDynamicTagGroupResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s CreateDynamicTagGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateDynamicTagGroupResponse) GoString() string {
	return s.String()
}

func (s *CreateDynamicTagGroupResponse) SetCode(v string) *CreateDynamicTagGroupResponse {
	s.Code = &v
	return s
}

func (s *CreateDynamicTagGroupResponse) SetMessage(v string) *CreateDynamicTagGroupResponse {
	s.Message = &v
	return s
}

func (s *CreateDynamicTagGroupResponse) SetSuccess(v bool) *CreateDynamicTagGroupResponse {
	s.Success = &v
	return s
}

func (s *CreateDynamicTagGroupResponse) SetRequestId(v string) *CreateDynamicTagGroupResponse {
	s.RequestId = &v
	return s
}

type DeleteDynamicTagGroupRequest struct {
	DynamicTagRuleId *string `json:"DynamicTagRuleId" xml:"DynamicTagRuleId" require:"true"`
}

func (s DeleteDynamicTagGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteDynamicTagGroupRequest) GoString() string {
	return s.String()
}

func (s *DeleteDynamicTagGroupRequest) SetDynamicTagRuleId(v string) *DeleteDynamicTagGroupRequest {
	s.DynamicTagRuleId = &v
	return s
}

type DeleteDynamicTagGroupResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteDynamicTagGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteDynamicTagGroupResponse) GoString() string {
	return s.String()
}

func (s *DeleteDynamicTagGroupResponse) SetCode(v string) *DeleteDynamicTagGroupResponse {
	s.Code = &v
	return s
}

func (s *DeleteDynamicTagGroupResponse) SetMessage(v string) *DeleteDynamicTagGroupResponse {
	s.Message = &v
	return s
}

func (s *DeleteDynamicTagGroupResponse) SetSuccess(v bool) *DeleteDynamicTagGroupResponse {
	s.Success = &v
	return s
}

func (s *DeleteDynamicTagGroupResponse) SetRequestId(v string) *DeleteDynamicTagGroupResponse {
	s.RequestId = &v
	return s
}

type ModifyGroupMonitoringAgentProcessRequest struct {
	Id                         *string                                                `json:"Id" xml:"Id" require:"true"`
	GroupId                    *string                                                `json:"GroupId" xml:"GroupId" require:"true"`
	MatchExpressFilterRelation *string                                                `json:"MatchExpressFilterRelation" xml:"MatchExpressFilterRelation"`
	AlertConfig                []*ModifyGroupMonitoringAgentProcessRequestAlertConfig `json:"AlertConfig" xml:"AlertConfig" require:"true" type:"Repeated"`
}

func (s ModifyGroupMonitoringAgentProcessRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyGroupMonitoringAgentProcessRequest) GoString() string {
	return s.String()
}

func (s *ModifyGroupMonitoringAgentProcessRequest) SetId(v string) *ModifyGroupMonitoringAgentProcessRequest {
	s.Id = &v
	return s
}

func (s *ModifyGroupMonitoringAgentProcessRequest) SetGroupId(v string) *ModifyGroupMonitoringAgentProcessRequest {
	s.GroupId = &v
	return s
}

func (s *ModifyGroupMonitoringAgentProcessRequest) SetMatchExpressFilterRelation(v string) *ModifyGroupMonitoringAgentProcessRequest {
	s.MatchExpressFilterRelation = &v
	return s
}

func (s *ModifyGroupMonitoringAgentProcessRequest) SetAlertConfig(v []*ModifyGroupMonitoringAgentProcessRequestAlertConfig) *ModifyGroupMonitoringAgentProcessRequest {
	s.AlertConfig = v
	return s
}

type ModifyGroupMonitoringAgentProcessRequestAlertConfig struct {
	EffectiveInterval   *string `json:"EffectiveInterval" xml:"EffectiveInterval" require:"true"`
	NoEffectiveInterval *string `json:"NoEffectiveInterval" xml:"NoEffectiveInterval" require:"true"`
	SilenceTime         *string `json:"SilenceTime" xml:"SilenceTime" require:"true"`
	Webhook             *string `json:"Webhook" xml:"Webhook" require:"true"`
	EscalationsLevel    *string `json:"EscalationsLevel" xml:"EscalationsLevel" require:"true"`
	ComparisonOperator  *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Statistics          *string `json:"Statistics" xml:"Statistics" require:"true"`
	Threshold           *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times               *string `json:"Times" xml:"Times" require:"true"`
}

func (s ModifyGroupMonitoringAgentProcessRequestAlertConfig) String() string {
	return tea.Prettify(s)
}

func (s ModifyGroupMonitoringAgentProcessRequestAlertConfig) GoString() string {
	return s.String()
}

func (s *ModifyGroupMonitoringAgentProcessRequestAlertConfig) SetEffectiveInterval(v string) *ModifyGroupMonitoringAgentProcessRequestAlertConfig {
	s.EffectiveInterval = &v
	return s
}

func (s *ModifyGroupMonitoringAgentProcessRequestAlertConfig) SetNoEffectiveInterval(v string) *ModifyGroupMonitoringAgentProcessRequestAlertConfig {
	s.NoEffectiveInterval = &v
	return s
}

func (s *ModifyGroupMonitoringAgentProcessRequestAlertConfig) SetSilenceTime(v string) *ModifyGroupMonitoringAgentProcessRequestAlertConfig {
	s.SilenceTime = &v
	return s
}

func (s *ModifyGroupMonitoringAgentProcessRequestAlertConfig) SetWebhook(v string) *ModifyGroupMonitoringAgentProcessRequestAlertConfig {
	s.Webhook = &v
	return s
}

func (s *ModifyGroupMonitoringAgentProcessRequestAlertConfig) SetEscalationsLevel(v string) *ModifyGroupMonitoringAgentProcessRequestAlertConfig {
	s.EscalationsLevel = &v
	return s
}

func (s *ModifyGroupMonitoringAgentProcessRequestAlertConfig) SetComparisonOperator(v string) *ModifyGroupMonitoringAgentProcessRequestAlertConfig {
	s.ComparisonOperator = &v
	return s
}

func (s *ModifyGroupMonitoringAgentProcessRequestAlertConfig) SetStatistics(v string) *ModifyGroupMonitoringAgentProcessRequestAlertConfig {
	s.Statistics = &v
	return s
}

func (s *ModifyGroupMonitoringAgentProcessRequestAlertConfig) SetThreshold(v string) *ModifyGroupMonitoringAgentProcessRequestAlertConfig {
	s.Threshold = &v
	return s
}

func (s *ModifyGroupMonitoringAgentProcessRequestAlertConfig) SetTimes(v string) *ModifyGroupMonitoringAgentProcessRequestAlertConfig {
	s.Times = &v
	return s
}

type ModifyGroupMonitoringAgentProcessResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s ModifyGroupMonitoringAgentProcessResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyGroupMonitoringAgentProcessResponse) GoString() string {
	return s.String()
}

func (s *ModifyGroupMonitoringAgentProcessResponse) SetCode(v string) *ModifyGroupMonitoringAgentProcessResponse {
	s.Code = &v
	return s
}

func (s *ModifyGroupMonitoringAgentProcessResponse) SetMessage(v string) *ModifyGroupMonitoringAgentProcessResponse {
	s.Message = &v
	return s
}

func (s *ModifyGroupMonitoringAgentProcessResponse) SetSuccess(v bool) *ModifyGroupMonitoringAgentProcessResponse {
	s.Success = &v
	return s
}

func (s *ModifyGroupMonitoringAgentProcessResponse) SetRequestId(v string) *ModifyGroupMonitoringAgentProcessResponse {
	s.RequestId = &v
	return s
}

type DeleteGroupMonitoringAgentProcessRequest struct {
	GroupId *string `json:"GroupId" xml:"GroupId" require:"true"`
	Id      *string `json:"Id" xml:"Id"`
}

func (s DeleteGroupMonitoringAgentProcessRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteGroupMonitoringAgentProcessRequest) GoString() string {
	return s.String()
}

func (s *DeleteGroupMonitoringAgentProcessRequest) SetGroupId(v string) *DeleteGroupMonitoringAgentProcessRequest {
	s.GroupId = &v
	return s
}

func (s *DeleteGroupMonitoringAgentProcessRequest) SetId(v string) *DeleteGroupMonitoringAgentProcessRequest {
	s.Id = &v
	return s
}

type DeleteGroupMonitoringAgentProcessResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteGroupMonitoringAgentProcessResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteGroupMonitoringAgentProcessResponse) GoString() string {
	return s.String()
}

func (s *DeleteGroupMonitoringAgentProcessResponse) SetCode(v string) *DeleteGroupMonitoringAgentProcessResponse {
	s.Code = &v
	return s
}

func (s *DeleteGroupMonitoringAgentProcessResponse) SetMessage(v string) *DeleteGroupMonitoringAgentProcessResponse {
	s.Message = &v
	return s
}

func (s *DeleteGroupMonitoringAgentProcessResponse) SetSuccess(v bool) *DeleteGroupMonitoringAgentProcessResponse {
	s.Success = &v
	return s
}

func (s *DeleteGroupMonitoringAgentProcessResponse) SetRequestId(v string) *DeleteGroupMonitoringAgentProcessResponse {
	s.RequestId = &v
	return s
}

type CreateGroupMonitoringAgentProcessRequest struct {
	GroupId                    *string                                                 `json:"GroupId" xml:"GroupId" require:"true"`
	ProcessName                *string                                                 `json:"ProcessName" xml:"ProcessName"`
	MatchExpressFilterRelation *string                                                 `json:"MatchExpressFilterRelation" xml:"MatchExpressFilterRelation"`
	MatchExpress               []*CreateGroupMonitoringAgentProcessRequestMatchExpress `json:"MatchExpress" xml:"MatchExpress" type:"Repeated"`
	AlertConfig                []*CreateGroupMonitoringAgentProcessRequestAlertConfig  `json:"AlertConfig" xml:"AlertConfig" require:"true" type:"Repeated"`
}

func (s CreateGroupMonitoringAgentProcessRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupMonitoringAgentProcessRequest) GoString() string {
	return s.String()
}

func (s *CreateGroupMonitoringAgentProcessRequest) SetGroupId(v string) *CreateGroupMonitoringAgentProcessRequest {
	s.GroupId = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessRequest) SetProcessName(v string) *CreateGroupMonitoringAgentProcessRequest {
	s.ProcessName = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessRequest) SetMatchExpressFilterRelation(v string) *CreateGroupMonitoringAgentProcessRequest {
	s.MatchExpressFilterRelation = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessRequest) SetMatchExpress(v []*CreateGroupMonitoringAgentProcessRequestMatchExpress) *CreateGroupMonitoringAgentProcessRequest {
	s.MatchExpress = v
	return s
}

func (s *CreateGroupMonitoringAgentProcessRequest) SetAlertConfig(v []*CreateGroupMonitoringAgentProcessRequestAlertConfig) *CreateGroupMonitoringAgentProcessRequest {
	s.AlertConfig = v
	return s
}

type CreateGroupMonitoringAgentProcessRequestMatchExpress struct {
	Name     *string `json:"Name" xml:"Name"`
	Function *string `json:"Function" xml:"Function"`
	Value    *string `json:"Value" xml:"Value"`
}

func (s CreateGroupMonitoringAgentProcessRequestMatchExpress) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupMonitoringAgentProcessRequestMatchExpress) GoString() string {
	return s.String()
}

func (s *CreateGroupMonitoringAgentProcessRequestMatchExpress) SetName(v string) *CreateGroupMonitoringAgentProcessRequestMatchExpress {
	s.Name = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessRequestMatchExpress) SetFunction(v string) *CreateGroupMonitoringAgentProcessRequestMatchExpress {
	s.Function = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessRequestMatchExpress) SetValue(v string) *CreateGroupMonitoringAgentProcessRequestMatchExpress {
	s.Value = &v
	return s
}

type CreateGroupMonitoringAgentProcessRequestAlertConfig struct {
	EffectiveInterval   *string `json:"EffectiveInterval" xml:"EffectiveInterval" require:"true"`
	NoEffectiveInterval *string `json:"NoEffectiveInterval" xml:"NoEffectiveInterval" require:"true"`
	SilenceTime         *string `json:"SilenceTime" xml:"SilenceTime" require:"true"`
	Webhook             *string `json:"Webhook" xml:"Webhook" require:"true"`
	EscalationsLevel    *string `json:"EscalationsLevel" xml:"EscalationsLevel" require:"true"`
	ComparisonOperator  *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Statistics          *string `json:"Statistics" xml:"Statistics" require:"true"`
	Threshold           *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times               *string `json:"Times" xml:"Times" require:"true"`
}

func (s CreateGroupMonitoringAgentProcessRequestAlertConfig) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupMonitoringAgentProcessRequestAlertConfig) GoString() string {
	return s.String()
}

func (s *CreateGroupMonitoringAgentProcessRequestAlertConfig) SetEffectiveInterval(v string) *CreateGroupMonitoringAgentProcessRequestAlertConfig {
	s.EffectiveInterval = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessRequestAlertConfig) SetNoEffectiveInterval(v string) *CreateGroupMonitoringAgentProcessRequestAlertConfig {
	s.NoEffectiveInterval = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessRequestAlertConfig) SetSilenceTime(v string) *CreateGroupMonitoringAgentProcessRequestAlertConfig {
	s.SilenceTime = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessRequestAlertConfig) SetWebhook(v string) *CreateGroupMonitoringAgentProcessRequestAlertConfig {
	s.Webhook = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessRequestAlertConfig) SetEscalationsLevel(v string) *CreateGroupMonitoringAgentProcessRequestAlertConfig {
	s.EscalationsLevel = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessRequestAlertConfig) SetComparisonOperator(v string) *CreateGroupMonitoringAgentProcessRequestAlertConfig {
	s.ComparisonOperator = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessRequestAlertConfig) SetStatistics(v string) *CreateGroupMonitoringAgentProcessRequestAlertConfig {
	s.Statistics = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessRequestAlertConfig) SetThreshold(v string) *CreateGroupMonitoringAgentProcessRequestAlertConfig {
	s.Threshold = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessRequestAlertConfig) SetTimes(v string) *CreateGroupMonitoringAgentProcessRequestAlertConfig {
	s.Times = &v
	return s
}

type CreateGroupMonitoringAgentProcessResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s CreateGroupMonitoringAgentProcessResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupMonitoringAgentProcessResponse) GoString() string {
	return s.String()
}

func (s *CreateGroupMonitoringAgentProcessResponse) SetCode(v string) *CreateGroupMonitoringAgentProcessResponse {
	s.Code = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessResponse) SetMessage(v string) *CreateGroupMonitoringAgentProcessResponse {
	s.Message = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessResponse) SetSuccess(v bool) *CreateGroupMonitoringAgentProcessResponse {
	s.Success = &v
	return s
}

func (s *CreateGroupMonitoringAgentProcessResponse) SetRequestId(v string) *CreateGroupMonitoringAgentProcessResponse {
	s.RequestId = &v
	return s
}

type DescribeTagKeyListRequest struct {
	PageNumber *int `json:"PageNumber" xml:"PageNumber"`
	PageSize   *int `json:"PageSize" xml:"PageSize"`
}

func (s DescribeTagKeyListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagKeyListRequest) GoString() string {
	return s.String()
}

func (s *DescribeTagKeyListRequest) SetPageNumber(v int) *DescribeTagKeyListRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeTagKeyListRequest) SetPageSize(v int) *DescribeTagKeyListRequest {
	s.PageSize = &v
	return s
}

type DescribeTagKeyListResponse struct {
	Code      *string                            `json:"Code" xml:"Code" require:"true"`
	Message   *string                            `json:"Message" xml:"Message" require:"true"`
	Success   *bool                              `json:"Success" xml:"Success" require:"true"`
	RequestId *string                            `json:"RequestId" xml:"RequestId" require:"true"`
	TagKeys   *DescribeTagKeyListResponseTagKeys `json:"TagKeys" xml:"TagKeys" require:"true" type:"Struct"`
}

func (s DescribeTagKeyListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagKeyListResponse) GoString() string {
	return s.String()
}

func (s *DescribeTagKeyListResponse) SetCode(v string) *DescribeTagKeyListResponse {
	s.Code = &v
	return s
}

func (s *DescribeTagKeyListResponse) SetMessage(v string) *DescribeTagKeyListResponse {
	s.Message = &v
	return s
}

func (s *DescribeTagKeyListResponse) SetSuccess(v bool) *DescribeTagKeyListResponse {
	s.Success = &v
	return s
}

func (s *DescribeTagKeyListResponse) SetRequestId(v string) *DescribeTagKeyListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeTagKeyListResponse) SetTagKeys(v *DescribeTagKeyListResponseTagKeys) *DescribeTagKeyListResponse {
	s.TagKeys = v
	return s
}

type DescribeTagKeyListResponseTagKeys struct {
	TagKey []*string `json:"TagKey" xml:"TagKey" require:"true" type:"Repeated"`
}

func (s DescribeTagKeyListResponseTagKeys) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagKeyListResponseTagKeys) GoString() string {
	return s.String()
}

func (s *DescribeTagKeyListResponseTagKeys) SetTagKey(v []*string) *DescribeTagKeyListResponseTagKeys {
	s.TagKey = v
	return s
}

type DescribeTagValueListRequest struct {
	PageNumber *int    `json:"PageNumber" xml:"PageNumber"`
	PageSize   *int    `json:"PageSize" xml:"PageSize"`
	TagKey     *string `json:"TagKey" xml:"TagKey" require:"true"`
}

func (s DescribeTagValueListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagValueListRequest) GoString() string {
	return s.String()
}

func (s *DescribeTagValueListRequest) SetPageNumber(v int) *DescribeTagValueListRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeTagValueListRequest) SetPageSize(v int) *DescribeTagValueListRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeTagValueListRequest) SetTagKey(v string) *DescribeTagValueListRequest {
	s.TagKey = &v
	return s
}

type DescribeTagValueListResponse struct {
	Code      *string                                `json:"Code" xml:"Code" require:"true"`
	Message   *string                                `json:"Message" xml:"Message" require:"true"`
	Success   *bool                                  `json:"Success" xml:"Success" require:"true"`
	RequestId *string                                `json:"RequestId" xml:"RequestId" require:"true"`
	TagValues *DescribeTagValueListResponseTagValues `json:"TagValues" xml:"TagValues" require:"true" type:"Struct"`
}

func (s DescribeTagValueListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagValueListResponse) GoString() string {
	return s.String()
}

func (s *DescribeTagValueListResponse) SetCode(v string) *DescribeTagValueListResponse {
	s.Code = &v
	return s
}

func (s *DescribeTagValueListResponse) SetMessage(v string) *DescribeTagValueListResponse {
	s.Message = &v
	return s
}

func (s *DescribeTagValueListResponse) SetSuccess(v bool) *DescribeTagValueListResponse {
	s.Success = &v
	return s
}

func (s *DescribeTagValueListResponse) SetRequestId(v string) *DescribeTagValueListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeTagValueListResponse) SetTagValues(v *DescribeTagValueListResponseTagValues) *DescribeTagValueListResponse {
	s.TagValues = v
	return s
}

type DescribeTagValueListResponseTagValues struct {
	TagValue []*string `json:"TagValue" xml:"TagValue" require:"true" type:"Repeated"`
}

func (s DescribeTagValueListResponseTagValues) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagValueListResponseTagValues) GoString() string {
	return s.String()
}

func (s *DescribeTagValueListResponseTagValues) SetTagValue(v []*string) *DescribeTagValueListResponseTagValues {
	s.TagValue = v
	return s
}

type RemoveTagsRequest struct {
	Tag      []*RemoveTagsRequestTag `json:"Tag" xml:"Tag" type:"Repeated"`
	GroupIds []*string               `json:"GroupIds" xml:"GroupIds" require:"true" type:"Repeated"`
}

func (s RemoveTagsRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveTagsRequest) GoString() string {
	return s.String()
}

func (s *RemoveTagsRequest) SetTag(v []*RemoveTagsRequestTag) *RemoveTagsRequest {
	s.Tag = v
	return s
}

func (s *RemoveTagsRequest) SetGroupIds(v []*string) *RemoveTagsRequest {
	s.GroupIds = v
	return s
}

type RemoveTagsRequestTag struct {
	Key   *string `json:"Key" xml:"Key" require:"true"`
	Value *string `json:"Value" xml:"Value" require:"true"`
}

func (s RemoveTagsRequestTag) String() string {
	return tea.Prettify(s)
}

func (s RemoveTagsRequestTag) GoString() string {
	return s.String()
}

func (s *RemoveTagsRequestTag) SetKey(v string) *RemoveTagsRequestTag {
	s.Key = &v
	return s
}

func (s *RemoveTagsRequestTag) SetValue(v string) *RemoveTagsRequestTag {
	s.Value = &v
	return s
}

type RemoveTagsResponse struct {
	Code      *string                `json:"Code" xml:"Code" require:"true"`
	Message   *string                `json:"Message" xml:"Message" require:"true"`
	Success   *bool                  `json:"Success" xml:"Success" require:"true"`
	RequestId *string                `json:"RequestId" xml:"RequestId" require:"true"`
	Tag       *RemoveTagsResponseTag `json:"Tag" xml:"Tag" require:"true" type:"Struct"`
}

func (s RemoveTagsResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveTagsResponse) GoString() string {
	return s.String()
}

func (s *RemoveTagsResponse) SetCode(v string) *RemoveTagsResponse {
	s.Code = &v
	return s
}

func (s *RemoveTagsResponse) SetMessage(v string) *RemoveTagsResponse {
	s.Message = &v
	return s
}

func (s *RemoveTagsResponse) SetSuccess(v bool) *RemoveTagsResponse {
	s.Success = &v
	return s
}

func (s *RemoveTagsResponse) SetRequestId(v string) *RemoveTagsResponse {
	s.RequestId = &v
	return s
}

func (s *RemoveTagsResponse) SetTag(v *RemoveTagsResponseTag) *RemoveTagsResponse {
	s.Tag = v
	return s
}

type RemoveTagsResponseTag struct {
	Tags []*string `json:"Tags" xml:"Tags" require:"true" type:"Repeated"`
}

func (s RemoveTagsResponseTag) String() string {
	return tea.Prettify(s)
}

func (s RemoveTagsResponseTag) GoString() string {
	return s.String()
}

func (s *RemoveTagsResponseTag) SetTags(v []*string) *RemoveTagsResponseTag {
	s.Tags = v
	return s
}

type AddTagsRequest struct {
	Tag      []*AddTagsRequestTag `json:"Tag" xml:"Tag" require:"true" type:"Repeated"`
	GroupIds []*string            `json:"GroupIds" xml:"GroupIds" require:"true" type:"Repeated"`
}

func (s AddTagsRequest) String() string {
	return tea.Prettify(s)
}

func (s AddTagsRequest) GoString() string {
	return s.String()
}

func (s *AddTagsRequest) SetTag(v []*AddTagsRequestTag) *AddTagsRequest {
	s.Tag = v
	return s
}

func (s *AddTagsRequest) SetGroupIds(v []*string) *AddTagsRequest {
	s.GroupIds = v
	return s
}

type AddTagsRequestTag struct {
	Key   *string `json:"Key" xml:"Key" require:"true"`
	Value *string `json:"Value" xml:"Value" require:"true"`
}

func (s AddTagsRequestTag) String() string {
	return tea.Prettify(s)
}

func (s AddTagsRequestTag) GoString() string {
	return s.String()
}

func (s *AddTagsRequestTag) SetKey(v string) *AddTagsRequestTag {
	s.Key = &v
	return s
}

func (s *AddTagsRequestTag) SetValue(v string) *AddTagsRequestTag {
	s.Value = &v
	return s
}

type AddTagsResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s AddTagsResponse) String() string {
	return tea.Prettify(s)
}

func (s AddTagsResponse) GoString() string {
	return s.String()
}

func (s *AddTagsResponse) SetCode(v string) *AddTagsResponse {
	s.Code = &v
	return s
}

func (s *AddTagsResponse) SetMessage(v string) *AddTagsResponse {
	s.Message = &v
	return s
}

func (s *AddTagsResponse) SetSuccess(v bool) *AddTagsResponse {
	s.Success = &v
	return s
}

func (s *AddTagsResponse) SetRequestId(v string) *AddTagsResponse {
	s.RequestId = &v
	return s
}

type DescribeGroupMonitoringAgentProcessRequest struct {
	GroupId     *string `json:"GroupId" xml:"GroupId" require:"true"`
	ProcessName *string `json:"ProcessName" xml:"ProcessName"`
	PageNumber  *int    `json:"PageNumber" xml:"PageNumber"`
	PageSize    *int    `json:"PageSize" xml:"PageSize"`
}

func (s DescribeGroupMonitoringAgentProcessRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeGroupMonitoringAgentProcessRequest) GoString() string {
	return s.String()
}

func (s *DescribeGroupMonitoringAgentProcessRequest) SetGroupId(v string) *DescribeGroupMonitoringAgentProcessRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessRequest) SetProcessName(v string) *DescribeGroupMonitoringAgentProcessRequest {
	s.ProcessName = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessRequest) SetPageNumber(v int) *DescribeGroupMonitoringAgentProcessRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessRequest) SetPageSize(v int) *DescribeGroupMonitoringAgentProcessRequest {
	s.PageSize = &v
	return s
}

type DescribeGroupMonitoringAgentProcessResponse struct {
	Code       *string                                               `json:"Code" xml:"Code" require:"true"`
	Message    *string                                               `json:"Message" xml:"Message" require:"true"`
	Success    *bool                                                 `json:"Success" xml:"Success" require:"true"`
	RequestId  *string                                               `json:"RequestId" xml:"RequestId" require:"true"`
	Total      *string                                               `json:"Total" xml:"Total" require:"true"`
	PageSize   *string                                               `json:"PageSize" xml:"PageSize" require:"true"`
	PageNumber *string                                               `json:"PageNumber" xml:"PageNumber" require:"true"`
	Processes  *DescribeGroupMonitoringAgentProcessResponseProcesses `json:"Processes" xml:"Processes" require:"true" type:"Struct"`
}

func (s DescribeGroupMonitoringAgentProcessResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeGroupMonitoringAgentProcessResponse) GoString() string {
	return s.String()
}

func (s *DescribeGroupMonitoringAgentProcessResponse) SetCode(v string) *DescribeGroupMonitoringAgentProcessResponse {
	s.Code = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponse) SetMessage(v string) *DescribeGroupMonitoringAgentProcessResponse {
	s.Message = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponse) SetSuccess(v bool) *DescribeGroupMonitoringAgentProcessResponse {
	s.Success = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponse) SetRequestId(v string) *DescribeGroupMonitoringAgentProcessResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponse) SetTotal(v string) *DescribeGroupMonitoringAgentProcessResponse {
	s.Total = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponse) SetPageSize(v string) *DescribeGroupMonitoringAgentProcessResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponse) SetPageNumber(v string) *DescribeGroupMonitoringAgentProcessResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponse) SetProcesses(v *DescribeGroupMonitoringAgentProcessResponseProcesses) *DescribeGroupMonitoringAgentProcessResponse {
	s.Processes = v
	return s
}

type DescribeGroupMonitoringAgentProcessResponseProcesses struct {
	Process []*DescribeGroupMonitoringAgentProcessResponseProcessesProcess `json:"Process" xml:"Process" require:"true" type:"Repeated"`
}

func (s DescribeGroupMonitoringAgentProcessResponseProcesses) String() string {
	return tea.Prettify(s)
}

func (s DescribeGroupMonitoringAgentProcessResponseProcesses) GoString() string {
	return s.String()
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcesses) SetProcess(v []*DescribeGroupMonitoringAgentProcessResponseProcessesProcess) *DescribeGroupMonitoringAgentProcessResponseProcesses {
	s.Process = v
	return s
}

type DescribeGroupMonitoringAgentProcessResponseProcessesProcess struct {
	Id                         *string                                                                  `json:"Id" xml:"Id" require:"true"`
	GroupId                    *string                                                                  `json:"GroupId" xml:"GroupId" require:"true"`
	ProcessName                *string                                                                  `json:"ProcessName" xml:"ProcessName" require:"true"`
	MatchExpressFilterRelation *string                                                                  `json:"MatchExpressFilterRelation" xml:"MatchExpressFilterRelation" require:"true"`
	MatchExpress               *DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpress `json:"MatchExpress" xml:"MatchExpress" require:"true" type:"Struct"`
	AlertConfig                *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfig  `json:"AlertConfig" xml:"AlertConfig" require:"true" type:"Struct"`
}

func (s DescribeGroupMonitoringAgentProcessResponseProcessesProcess) String() string {
	return tea.Prettify(s)
}

func (s DescribeGroupMonitoringAgentProcessResponseProcessesProcess) GoString() string {
	return s.String()
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcess) SetId(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcess {
	s.Id = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcess) SetGroupId(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcess {
	s.GroupId = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcess) SetProcessName(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcess {
	s.ProcessName = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcess) SetMatchExpressFilterRelation(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcess {
	s.MatchExpressFilterRelation = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcess) SetMatchExpress(v *DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpress) *DescribeGroupMonitoringAgentProcessResponseProcessesProcess {
	s.MatchExpress = v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcess) SetAlertConfig(v *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfig) *DescribeGroupMonitoringAgentProcessResponseProcessesProcess {
	s.AlertConfig = v
	return s
}

type DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpress struct {
	MatchExpress []*DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress `json:"MatchExpress" xml:"MatchExpress" require:"true" type:"Repeated"`
}

func (s DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpress) String() string {
	return tea.Prettify(s)
}

func (s DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpress) GoString() string {
	return s.String()
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpress) SetMatchExpress(v []*DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress) *DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpress {
	s.MatchExpress = v
	return s
}

type DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress struct {
	Name     *string `json:"Name" xml:"Name" require:"true"`
	Function *string `json:"Function" xml:"Function" require:"true"`
	Value    *string `json:"Value" xml:"Value" require:"true"`
}

func (s DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress) String() string {
	return tea.Prettify(s)
}

func (s DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress) GoString() string {
	return s.String()
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress) SetName(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress {
	s.Name = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress) SetFunction(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress {
	s.Function = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress) SetValue(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress {
	s.Value = &v
	return s
}

type DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfig struct {
	AlertConfig []*DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig `json:"AlertConfig" xml:"AlertConfig" require:"true" type:"Repeated"`
}

func (s DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfig) GoString() string {
	return s.String()
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfig) SetAlertConfig(v []*DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig) *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfig {
	s.AlertConfig = v
	return s
}

type DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig struct {
	EffectiveInterval   *string `json:"EffectiveInterval" xml:"EffectiveInterval" require:"true"`
	NoEffectiveInterval *string `json:"NoEffectiveInterval" xml:"NoEffectiveInterval" require:"true"`
	SilenceTime         *string `json:"SilenceTime" xml:"SilenceTime" require:"true"`
	Webhook             *string `json:"Webhook" xml:"Webhook" require:"true"`
	EscalationsLevel    *string `json:"EscalationsLevel" xml:"EscalationsLevel" require:"true"`
	ComparisonOperator  *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Statistics          *string `json:"Statistics" xml:"Statistics" require:"true"`
	Threshold           *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times               *string `json:"Times" xml:"Times" require:"true"`
}

func (s DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig) GoString() string {
	return s.String()
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig) SetEffectiveInterval(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig {
	s.EffectiveInterval = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig) SetNoEffectiveInterval(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig {
	s.NoEffectiveInterval = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig) SetSilenceTime(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig {
	s.SilenceTime = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig) SetWebhook(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig {
	s.Webhook = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig) SetEscalationsLevel(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig {
	s.EscalationsLevel = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig) SetComparisonOperator(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig {
	s.ComparisonOperator = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig) SetStatistics(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig {
	s.Statistics = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig) SetThreshold(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig {
	s.Threshold = &v
	return s
}

func (s *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig) SetTimes(v string) *DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig {
	s.Times = &v
	return s
}

type PutResourceMetricRulesRequest struct {
	Rules []*PutResourceMetricRulesRequestRules `json:"Rules" xml:"Rules" require:"true" type:"Repeated"`
}

func (s PutResourceMetricRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRulesRequest) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRulesRequest) SetRules(v []*PutResourceMetricRulesRequestRules) *PutResourceMetricRulesRequest {
	s.Rules = v
	return s
}

type PutResourceMetricRulesRequestRules struct {
	RuleId              *string                                        `json:"RuleId" xml:"RuleId" require:"true"`
	RuleName            *string                                        `json:"RuleName" xml:"RuleName" require:"true"`
	Namespace           *string                                        `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName          *string                                        `json:"MetricName" xml:"MetricName" require:"true"`
	Resources           *string                                        `json:"Resources" xml:"Resources" require:"true"`
	ContactGroups       *string                                        `json:"ContactGroups" xml:"ContactGroups" require:"true"`
	Webhook             *string                                        `json:"Webhook" xml:"Webhook"`
	EffectiveInterval   *string                                        `json:"EffectiveInterval" xml:"EffectiveInterval"`
	NoEffectiveInterval *string                                        `json:"NoEffectiveInterval" xml:"NoEffectiveInterval"`
	SilenceTime         *int                                           `json:"SilenceTime" xml:"SilenceTime"`
	Period              *string                                        `json:"Period" xml:"Period"`
	Interval            *string                                        `json:"Interval" xml:"Interval"`
	EmailSubject        *string                                        `json:"EmailSubject" xml:"EmailSubject"`
	Escalations         *PutResourceMetricRulesRequestRulesEscalations `json:"Escalations" xml:"Escalations" require:"true" type:"Struct"`
}

func (s PutResourceMetricRulesRequestRules) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRulesRequestRules) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRulesRequestRules) SetRuleId(v string) *PutResourceMetricRulesRequestRules {
	s.RuleId = &v
	return s
}

func (s *PutResourceMetricRulesRequestRules) SetRuleName(v string) *PutResourceMetricRulesRequestRules {
	s.RuleName = &v
	return s
}

func (s *PutResourceMetricRulesRequestRules) SetNamespace(v string) *PutResourceMetricRulesRequestRules {
	s.Namespace = &v
	return s
}

func (s *PutResourceMetricRulesRequestRules) SetMetricName(v string) *PutResourceMetricRulesRequestRules {
	s.MetricName = &v
	return s
}

func (s *PutResourceMetricRulesRequestRules) SetResources(v string) *PutResourceMetricRulesRequestRules {
	s.Resources = &v
	return s
}

func (s *PutResourceMetricRulesRequestRules) SetContactGroups(v string) *PutResourceMetricRulesRequestRules {
	s.ContactGroups = &v
	return s
}

func (s *PutResourceMetricRulesRequestRules) SetWebhook(v string) *PutResourceMetricRulesRequestRules {
	s.Webhook = &v
	return s
}

func (s *PutResourceMetricRulesRequestRules) SetEffectiveInterval(v string) *PutResourceMetricRulesRequestRules {
	s.EffectiveInterval = &v
	return s
}

func (s *PutResourceMetricRulesRequestRules) SetNoEffectiveInterval(v string) *PutResourceMetricRulesRequestRules {
	s.NoEffectiveInterval = &v
	return s
}

func (s *PutResourceMetricRulesRequestRules) SetSilenceTime(v int) *PutResourceMetricRulesRequestRules {
	s.SilenceTime = &v
	return s
}

func (s *PutResourceMetricRulesRequestRules) SetPeriod(v string) *PutResourceMetricRulesRequestRules {
	s.Period = &v
	return s
}

func (s *PutResourceMetricRulesRequestRules) SetInterval(v string) *PutResourceMetricRulesRequestRules {
	s.Interval = &v
	return s
}

func (s *PutResourceMetricRulesRequestRules) SetEmailSubject(v string) *PutResourceMetricRulesRequestRules {
	s.EmailSubject = &v
	return s
}

func (s *PutResourceMetricRulesRequestRules) SetEscalations(v *PutResourceMetricRulesRequestRulesEscalations) *PutResourceMetricRulesRequestRules {
	s.Escalations = v
	return s
}

type PutResourceMetricRulesRequestRulesEscalations struct {
	Critical *PutResourceMetricRulesRequestRulesEscalationsCritical `json:"Critical" xml:"Critical" require:"true" type:"Struct"`
	Warn     *PutResourceMetricRulesRequestRulesEscalationsWarn     `json:"Warn" xml:"Warn" require:"true" type:"Struct"`
	Info     *PutResourceMetricRulesRequestRulesEscalationsInfo     `json:"Info" xml:"Info" require:"true" type:"Struct"`
}

func (s PutResourceMetricRulesRequestRulesEscalations) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRulesRequestRulesEscalations) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRulesRequestRulesEscalations) SetCritical(v *PutResourceMetricRulesRequestRulesEscalationsCritical) *PutResourceMetricRulesRequestRulesEscalations {
	s.Critical = v
	return s
}

func (s *PutResourceMetricRulesRequestRulesEscalations) SetWarn(v *PutResourceMetricRulesRequestRulesEscalationsWarn) *PutResourceMetricRulesRequestRulesEscalations {
	s.Warn = v
	return s
}

func (s *PutResourceMetricRulesRequestRulesEscalations) SetInfo(v *PutResourceMetricRulesRequestRulesEscalationsInfo) *PutResourceMetricRulesRequestRulesEscalations {
	s.Info = v
	return s
}

type PutResourceMetricRulesRequestRulesEscalationsCritical struct {
	Statistics         *string `json:"Statistics" xml:"Statistics"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator"`
	Threshold          *string `json:"Threshold" xml:"Threshold"`
	Times              *int    `json:"Times" xml:"Times"`
}

func (s PutResourceMetricRulesRequestRulesEscalationsCritical) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRulesRequestRulesEscalationsCritical) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRulesRequestRulesEscalationsCritical) SetStatistics(v string) *PutResourceMetricRulesRequestRulesEscalationsCritical {
	s.Statistics = &v
	return s
}

func (s *PutResourceMetricRulesRequestRulesEscalationsCritical) SetComparisonOperator(v string) *PutResourceMetricRulesRequestRulesEscalationsCritical {
	s.ComparisonOperator = &v
	return s
}

func (s *PutResourceMetricRulesRequestRulesEscalationsCritical) SetThreshold(v string) *PutResourceMetricRulesRequestRulesEscalationsCritical {
	s.Threshold = &v
	return s
}

func (s *PutResourceMetricRulesRequestRulesEscalationsCritical) SetTimes(v int) *PutResourceMetricRulesRequestRulesEscalationsCritical {
	s.Times = &v
	return s
}

type PutResourceMetricRulesRequestRulesEscalationsWarn struct {
	Statistics         *string `json:"Statistics" xml:"Statistics"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator"`
	Threshold          *string `json:"Threshold" xml:"Threshold"`
	Times              *int    `json:"Times" xml:"Times"`
}

func (s PutResourceMetricRulesRequestRulesEscalationsWarn) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRulesRequestRulesEscalationsWarn) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRulesRequestRulesEscalationsWarn) SetStatistics(v string) *PutResourceMetricRulesRequestRulesEscalationsWarn {
	s.Statistics = &v
	return s
}

func (s *PutResourceMetricRulesRequestRulesEscalationsWarn) SetComparisonOperator(v string) *PutResourceMetricRulesRequestRulesEscalationsWarn {
	s.ComparisonOperator = &v
	return s
}

func (s *PutResourceMetricRulesRequestRulesEscalationsWarn) SetThreshold(v string) *PutResourceMetricRulesRequestRulesEscalationsWarn {
	s.Threshold = &v
	return s
}

func (s *PutResourceMetricRulesRequestRulesEscalationsWarn) SetTimes(v int) *PutResourceMetricRulesRequestRulesEscalationsWarn {
	s.Times = &v
	return s
}

type PutResourceMetricRulesRequestRulesEscalationsInfo struct {
	Statistics         *string `json:"Statistics" xml:"Statistics"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator"`
	Threshold          *string `json:"Threshold" xml:"Threshold"`
	Times              *int    `json:"Times" xml:"Times"`
}

func (s PutResourceMetricRulesRequestRulesEscalationsInfo) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRulesRequestRulesEscalationsInfo) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRulesRequestRulesEscalationsInfo) SetStatistics(v string) *PutResourceMetricRulesRequestRulesEscalationsInfo {
	s.Statistics = &v
	return s
}

func (s *PutResourceMetricRulesRequestRulesEscalationsInfo) SetComparisonOperator(v string) *PutResourceMetricRulesRequestRulesEscalationsInfo {
	s.ComparisonOperator = &v
	return s
}

func (s *PutResourceMetricRulesRequestRulesEscalationsInfo) SetThreshold(v string) *PutResourceMetricRulesRequestRulesEscalationsInfo {
	s.Threshold = &v
	return s
}

func (s *PutResourceMetricRulesRequestRulesEscalationsInfo) SetTimes(v int) *PutResourceMetricRulesRequestRulesEscalationsInfo {
	s.Times = &v
	return s
}

type PutResourceMetricRulesResponse struct {
	Success          *bool                                           `json:"Success" xml:"Success" require:"true"`
	Code             *string                                         `json:"Code" xml:"Code" require:"true"`
	Message          *string                                         `json:"Message" xml:"Message" require:"true"`
	RequestId        *string                                         `json:"RequestId" xml:"RequestId" require:"true"`
	FailedListResult *PutResourceMetricRulesResponseFailedListResult `json:"FailedListResult" xml:"FailedListResult" require:"true" type:"Struct"`
}

func (s PutResourceMetricRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRulesResponse) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRulesResponse) SetSuccess(v bool) *PutResourceMetricRulesResponse {
	s.Success = &v
	return s
}

func (s *PutResourceMetricRulesResponse) SetCode(v string) *PutResourceMetricRulesResponse {
	s.Code = &v
	return s
}

func (s *PutResourceMetricRulesResponse) SetMessage(v string) *PutResourceMetricRulesResponse {
	s.Message = &v
	return s
}

func (s *PutResourceMetricRulesResponse) SetRequestId(v string) *PutResourceMetricRulesResponse {
	s.RequestId = &v
	return s
}

func (s *PutResourceMetricRulesResponse) SetFailedListResult(v *PutResourceMetricRulesResponseFailedListResult) *PutResourceMetricRulesResponse {
	s.FailedListResult = v
	return s
}

type PutResourceMetricRulesResponseFailedListResult struct {
	Target []*PutResourceMetricRulesResponseFailedListResultTarget `json:"Target" xml:"Target" require:"true" type:"Repeated"`
}

func (s PutResourceMetricRulesResponseFailedListResult) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRulesResponseFailedListResult) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRulesResponseFailedListResult) SetTarget(v []*PutResourceMetricRulesResponseFailedListResultTarget) *PutResourceMetricRulesResponseFailedListResult {
	s.Target = v
	return s
}

type PutResourceMetricRulesResponseFailedListResultTarget struct {
	RuleId *string                                                     `json:"RuleId" xml:"RuleId" require:"true"`
	Result *PutResourceMetricRulesResponseFailedListResultTargetResult `json:"Result" xml:"Result" require:"true" type:"Struct"`
}

func (s PutResourceMetricRulesResponseFailedListResultTarget) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRulesResponseFailedListResultTarget) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRulesResponseFailedListResultTarget) SetRuleId(v string) *PutResourceMetricRulesResponseFailedListResultTarget {
	s.RuleId = &v
	return s
}

func (s *PutResourceMetricRulesResponseFailedListResultTarget) SetResult(v *PutResourceMetricRulesResponseFailedListResultTargetResult) *PutResourceMetricRulesResponseFailedListResultTarget {
	s.Result = v
	return s
}

type PutResourceMetricRulesResponseFailedListResultTargetResult struct {
	Code    *string `json:"Code" xml:"Code" require:"true"`
	Message *string `json:"Message" xml:"Message" require:"true"`
	Success *bool   `json:"Success" xml:"Success" require:"true"`
}

func (s PutResourceMetricRulesResponseFailedListResultTargetResult) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRulesResponseFailedListResultTargetResult) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRulesResponseFailedListResultTargetResult) SetCode(v string) *PutResourceMetricRulesResponseFailedListResultTargetResult {
	s.Code = &v
	return s
}

func (s *PutResourceMetricRulesResponseFailedListResultTargetResult) SetMessage(v string) *PutResourceMetricRulesResponseFailedListResultTargetResult {
	s.Message = &v
	return s
}

func (s *PutResourceMetricRulesResponseFailedListResultTargetResult) SetSuccess(v bool) *PutResourceMetricRulesResponseFailedListResultTargetResult {
	s.Success = &v
	return s
}

type CreateMetricRuleResourcesRequest struct {
	RuleId    *string `json:"RuleId" xml:"RuleId"`
	Overwrite *string `json:"Overwrite" xml:"Overwrite"`
	Resources *string `json:"Resources" xml:"Resources" require:"true"`
}

func (s CreateMetricRuleResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateMetricRuleResourcesRequest) GoString() string {
	return s.String()
}

func (s *CreateMetricRuleResourcesRequest) SetRuleId(v string) *CreateMetricRuleResourcesRequest {
	s.RuleId = &v
	return s
}

func (s *CreateMetricRuleResourcesRequest) SetOverwrite(v string) *CreateMetricRuleResourcesRequest {
	s.Overwrite = &v
	return s
}

func (s *CreateMetricRuleResourcesRequest) SetResources(v string) *CreateMetricRuleResourcesRequest {
	s.Resources = &v
	return s
}

type CreateMetricRuleResourcesResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s CreateMetricRuleResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateMetricRuleResourcesResponse) GoString() string {
	return s.String()
}

func (s *CreateMetricRuleResourcesResponse) SetSuccess(v bool) *CreateMetricRuleResourcesResponse {
	s.Success = &v
	return s
}

func (s *CreateMetricRuleResourcesResponse) SetCode(v string) *CreateMetricRuleResourcesResponse {
	s.Code = &v
	return s
}

func (s *CreateMetricRuleResourcesResponse) SetMessage(v string) *CreateMetricRuleResourcesResponse {
	s.Message = &v
	return s
}

func (s *CreateMetricRuleResourcesResponse) SetRequestId(v string) *CreateMetricRuleResourcesResponse {
	s.RequestId = &v
	return s
}

type DeleteMetricRuleResourcesRequest struct {
	RuleId    *string `json:"RuleId" xml:"RuleId"`
	Resources *string `json:"Resources" xml:"Resources" require:"true"`
}

func (s DeleteMetricRuleResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteMetricRuleResourcesRequest) GoString() string {
	return s.String()
}

func (s *DeleteMetricRuleResourcesRequest) SetRuleId(v string) *DeleteMetricRuleResourcesRequest {
	s.RuleId = &v
	return s
}

func (s *DeleteMetricRuleResourcesRequest) SetResources(v string) *DeleteMetricRuleResourcesRequest {
	s.Resources = &v
	return s
}

type DeleteMetricRuleResourcesResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteMetricRuleResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteMetricRuleResourcesResponse) GoString() string {
	return s.String()
}

func (s *DeleteMetricRuleResourcesResponse) SetSuccess(v bool) *DeleteMetricRuleResourcesResponse {
	s.Success = &v
	return s
}

func (s *DeleteMetricRuleResourcesResponse) SetCode(v string) *DeleteMetricRuleResourcesResponse {
	s.Code = &v
	return s
}

func (s *DeleteMetricRuleResourcesResponse) SetMessage(v string) *DeleteMetricRuleResourcesResponse {
	s.Message = &v
	return s
}

func (s *DeleteMetricRuleResourcesResponse) SetRequestId(v string) *DeleteMetricRuleResourcesResponse {
	s.RequestId = &v
	return s
}

type DeleteMetricRuleTargetsRequest struct {
	RuleId    *string   `json:"RuleId" xml:"RuleId" require:"true"`
	TargetIds []*string `json:"TargetIds" xml:"TargetIds" type:"Repeated"`
}

func (s DeleteMetricRuleTargetsRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteMetricRuleTargetsRequest) GoString() string {
	return s.String()
}

func (s *DeleteMetricRuleTargetsRequest) SetRuleId(v string) *DeleteMetricRuleTargetsRequest {
	s.RuleId = &v
	return s
}

func (s *DeleteMetricRuleTargetsRequest) SetTargetIds(v []*string) *DeleteMetricRuleTargetsRequest {
	s.TargetIds = v
	return s
}

type DeleteMetricRuleTargetsResponse struct {
	Success   *bool                                   `json:"Success" xml:"Success" require:"true"`
	Code      *string                                 `json:"Code" xml:"Code" require:"true"`
	Message   *string                                 `json:"Message" xml:"Message" require:"true"`
	RequestId *string                                 `json:"RequestId" xml:"RequestId" require:"true"`
	FailIds   *DeleteMetricRuleTargetsResponseFailIds `json:"FailIds" xml:"FailIds" require:"true" type:"Struct"`
}

func (s DeleteMetricRuleTargetsResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteMetricRuleTargetsResponse) GoString() string {
	return s.String()
}

func (s *DeleteMetricRuleTargetsResponse) SetSuccess(v bool) *DeleteMetricRuleTargetsResponse {
	s.Success = &v
	return s
}

func (s *DeleteMetricRuleTargetsResponse) SetCode(v string) *DeleteMetricRuleTargetsResponse {
	s.Code = &v
	return s
}

func (s *DeleteMetricRuleTargetsResponse) SetMessage(v string) *DeleteMetricRuleTargetsResponse {
	s.Message = &v
	return s
}

func (s *DeleteMetricRuleTargetsResponse) SetRequestId(v string) *DeleteMetricRuleTargetsResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteMetricRuleTargetsResponse) SetFailIds(v *DeleteMetricRuleTargetsResponseFailIds) *DeleteMetricRuleTargetsResponse {
	s.FailIds = v
	return s
}

type DeleteMetricRuleTargetsResponseFailIds struct {
	TargetIds *DeleteMetricRuleTargetsResponseFailIdsTargetIds `json:"TargetIds" xml:"TargetIds" require:"true" type:"Struct"`
}

func (s DeleteMetricRuleTargetsResponseFailIds) String() string {
	return tea.Prettify(s)
}

func (s DeleteMetricRuleTargetsResponseFailIds) GoString() string {
	return s.String()
}

func (s *DeleteMetricRuleTargetsResponseFailIds) SetTargetIds(v *DeleteMetricRuleTargetsResponseFailIdsTargetIds) *DeleteMetricRuleTargetsResponseFailIds {
	s.TargetIds = v
	return s
}

type DeleteMetricRuleTargetsResponseFailIdsTargetIds struct {
	TargetId []*string `json:"TargetId" xml:"TargetId" require:"true" type:"Repeated"`
}

func (s DeleteMetricRuleTargetsResponseFailIdsTargetIds) String() string {
	return tea.Prettify(s)
}

func (s DeleteMetricRuleTargetsResponseFailIdsTargetIds) GoString() string {
	return s.String()
}

func (s *DeleteMetricRuleTargetsResponseFailIdsTargetIds) SetTargetId(v []*string) *DeleteMetricRuleTargetsResponseFailIdsTargetIds {
	s.TargetId = v
	return s
}

type PutMetricRuleTargetsRequest struct {
	RuleId  *string                               `json:"RuleId" xml:"RuleId" require:"true"`
	Targets []*PutMetricRuleTargetsRequestTargets `json:"Targets" xml:"Targets" require:"true" type:"Repeated"`
}

func (s PutMetricRuleTargetsRequest) String() string {
	return tea.Prettify(s)
}

func (s PutMetricRuleTargetsRequest) GoString() string {
	return s.String()
}

func (s *PutMetricRuleTargetsRequest) SetRuleId(v string) *PutMetricRuleTargetsRequest {
	s.RuleId = &v
	return s
}

func (s *PutMetricRuleTargetsRequest) SetTargets(v []*PutMetricRuleTargetsRequestTargets) *PutMetricRuleTargetsRequest {
	s.Targets = v
	return s
}

type PutMetricRuleTargetsRequestTargets struct {
	Id    *string `json:"Id" xml:"Id" require:"true"`
	Arn   *string `json:"Arn" xml:"Arn" require:"true"`
	Level *string `json:"Level" xml:"Level"`
}

func (s PutMetricRuleTargetsRequestTargets) String() string {
	return tea.Prettify(s)
}

func (s PutMetricRuleTargetsRequestTargets) GoString() string {
	return s.String()
}

func (s *PutMetricRuleTargetsRequestTargets) SetId(v string) *PutMetricRuleTargetsRequestTargets {
	s.Id = &v
	return s
}

func (s *PutMetricRuleTargetsRequestTargets) SetArn(v string) *PutMetricRuleTargetsRequestTargets {
	s.Arn = &v
	return s
}

func (s *PutMetricRuleTargetsRequestTargets) SetLevel(v string) *PutMetricRuleTargetsRequestTargets {
	s.Level = &v
	return s
}

type PutMetricRuleTargetsResponse struct {
	Success   *bool                                 `json:"Success" xml:"Success" require:"true"`
	Code      *string                               `json:"Code" xml:"Code" require:"true"`
	Message   *string                               `json:"Message" xml:"Message" require:"true"`
	RequestId *string                               `json:"RequestId" xml:"RequestId" require:"true"`
	FailData  *PutMetricRuleTargetsResponseFailData `json:"FailData" xml:"FailData" require:"true" type:"Struct"`
}

func (s PutMetricRuleTargetsResponse) String() string {
	return tea.Prettify(s)
}

func (s PutMetricRuleTargetsResponse) GoString() string {
	return s.String()
}

func (s *PutMetricRuleTargetsResponse) SetSuccess(v bool) *PutMetricRuleTargetsResponse {
	s.Success = &v
	return s
}

func (s *PutMetricRuleTargetsResponse) SetCode(v string) *PutMetricRuleTargetsResponse {
	s.Code = &v
	return s
}

func (s *PutMetricRuleTargetsResponse) SetMessage(v string) *PutMetricRuleTargetsResponse {
	s.Message = &v
	return s
}

func (s *PutMetricRuleTargetsResponse) SetRequestId(v string) *PutMetricRuleTargetsResponse {
	s.RequestId = &v
	return s
}

func (s *PutMetricRuleTargetsResponse) SetFailData(v *PutMetricRuleTargetsResponseFailData) *PutMetricRuleTargetsResponse {
	s.FailData = v
	return s
}

type PutMetricRuleTargetsResponseFailData struct {
	Targets *PutMetricRuleTargetsResponseFailDataTargets `json:"Targets" xml:"Targets" require:"true" type:"Struct"`
}

func (s PutMetricRuleTargetsResponseFailData) String() string {
	return tea.Prettify(s)
}

func (s PutMetricRuleTargetsResponseFailData) GoString() string {
	return s.String()
}

func (s *PutMetricRuleTargetsResponseFailData) SetTargets(v *PutMetricRuleTargetsResponseFailDataTargets) *PutMetricRuleTargetsResponseFailData {
	s.Targets = v
	return s
}

type PutMetricRuleTargetsResponseFailDataTargets struct {
	Target []*PutMetricRuleTargetsResponseFailDataTargetsTarget `json:"Target" xml:"Target" require:"true" type:"Repeated"`
}

func (s PutMetricRuleTargetsResponseFailDataTargets) String() string {
	return tea.Prettify(s)
}

func (s PutMetricRuleTargetsResponseFailDataTargets) GoString() string {
	return s.String()
}

func (s *PutMetricRuleTargetsResponseFailDataTargets) SetTarget(v []*PutMetricRuleTargetsResponseFailDataTargetsTarget) *PutMetricRuleTargetsResponseFailDataTargets {
	s.Target = v
	return s
}

type PutMetricRuleTargetsResponseFailDataTargetsTarget struct {
	Id    *string `json:"Id" xml:"Id" require:"true"`
	Arn   *string `json:"Arn" xml:"Arn" require:"true"`
	Level *string `json:"Level" xml:"Level" require:"true"`
}

func (s PutMetricRuleTargetsResponseFailDataTargetsTarget) String() string {
	return tea.Prettify(s)
}

func (s PutMetricRuleTargetsResponseFailDataTargetsTarget) GoString() string {
	return s.String()
}

func (s *PutMetricRuleTargetsResponseFailDataTargetsTarget) SetId(v string) *PutMetricRuleTargetsResponseFailDataTargetsTarget {
	s.Id = &v
	return s
}

func (s *PutMetricRuleTargetsResponseFailDataTargetsTarget) SetArn(v string) *PutMetricRuleTargetsResponseFailDataTargetsTarget {
	s.Arn = &v
	return s
}

func (s *PutMetricRuleTargetsResponseFailDataTargetsTarget) SetLevel(v string) *PutMetricRuleTargetsResponseFailDataTargetsTarget {
	s.Level = &v
	return s
}

type DescribeMetricRuleTargetsRequest struct {
	RuleId *string `json:"RuleId" xml:"RuleId" require:"true"`
}

func (s DescribeMetricRuleTargetsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTargetsRequest) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTargetsRequest) SetRuleId(v string) *DescribeMetricRuleTargetsRequest {
	s.RuleId = &v
	return s
}

type DescribeMetricRuleTargetsResponse struct {
	Code      *string                                   `json:"Code" xml:"Code" require:"true"`
	Message   *string                                   `json:"Message" xml:"Message" require:"true"`
	Success   *bool                                     `json:"Success" xml:"Success" require:"true"`
	RequestId *string                                   `json:"RequestId" xml:"RequestId" require:"true"`
	Targets   *DescribeMetricRuleTargetsResponseTargets `json:"Targets" xml:"Targets" require:"true" type:"Struct"`
}

func (s DescribeMetricRuleTargetsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTargetsResponse) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTargetsResponse) SetCode(v string) *DescribeMetricRuleTargetsResponse {
	s.Code = &v
	return s
}

func (s *DescribeMetricRuleTargetsResponse) SetMessage(v string) *DescribeMetricRuleTargetsResponse {
	s.Message = &v
	return s
}

func (s *DescribeMetricRuleTargetsResponse) SetSuccess(v bool) *DescribeMetricRuleTargetsResponse {
	s.Success = &v
	return s
}

func (s *DescribeMetricRuleTargetsResponse) SetRequestId(v string) *DescribeMetricRuleTargetsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMetricRuleTargetsResponse) SetTargets(v *DescribeMetricRuleTargetsResponseTargets) *DescribeMetricRuleTargetsResponse {
	s.Targets = v
	return s
}

type DescribeMetricRuleTargetsResponseTargets struct {
	Target []*DescribeMetricRuleTargetsResponseTargetsTarget `json:"Target" xml:"Target" require:"true" type:"Repeated"`
}

func (s DescribeMetricRuleTargetsResponseTargets) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTargetsResponseTargets) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTargetsResponseTargets) SetTarget(v []*DescribeMetricRuleTargetsResponseTargetsTarget) *DescribeMetricRuleTargetsResponseTargets {
	s.Target = v
	return s
}

type DescribeMetricRuleTargetsResponseTargetsTarget struct {
	Id    *string `json:"Id" xml:"Id" require:"true"`
	Arn   *string `json:"Arn" xml:"Arn" require:"true"`
	Level *string `json:"Level" xml:"Level" require:"true"`
}

func (s DescribeMetricRuleTargetsResponseTargetsTarget) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTargetsResponseTargetsTarget) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTargetsResponseTargetsTarget) SetId(v string) *DescribeMetricRuleTargetsResponseTargetsTarget {
	s.Id = &v
	return s
}

func (s *DescribeMetricRuleTargetsResponseTargetsTarget) SetArn(v string) *DescribeMetricRuleTargetsResponseTargetsTarget {
	s.Arn = &v
	return s
}

func (s *DescribeMetricRuleTargetsResponseTargetsTarget) SetLevel(v string) *DescribeMetricRuleTargetsResponseTargetsTarget {
	s.Level = &v
	return s
}

type ModifyMonitorGroupInstancesRequest struct {
	GroupId   *int64                                         `json:"GroupId" xml:"GroupId" require:"true"`
	Instances []*ModifyMonitorGroupInstancesRequestInstances `json:"Instances" xml:"Instances" require:"true" type:"Repeated"`
}

func (s ModifyMonitorGroupInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyMonitorGroupInstancesRequest) GoString() string {
	return s.String()
}

func (s *ModifyMonitorGroupInstancesRequest) SetGroupId(v int64) *ModifyMonitorGroupInstancesRequest {
	s.GroupId = &v
	return s
}

func (s *ModifyMonitorGroupInstancesRequest) SetInstances(v []*ModifyMonitorGroupInstancesRequestInstances) *ModifyMonitorGroupInstancesRequest {
	s.Instances = v
	return s
}

type ModifyMonitorGroupInstancesRequestInstances struct {
	Category     *string `json:"Category" xml:"Category" require:"true"`
	InstanceId   *string `json:"InstanceId" xml:"InstanceId" require:"true"`
	RegionId     *string `json:"RegionId" xml:"RegionId" require:"true"`
	InstanceName *string `json:"InstanceName" xml:"InstanceName" require:"true"`
}

func (s ModifyMonitorGroupInstancesRequestInstances) String() string {
	return tea.Prettify(s)
}

func (s ModifyMonitorGroupInstancesRequestInstances) GoString() string {
	return s.String()
}

func (s *ModifyMonitorGroupInstancesRequestInstances) SetCategory(v string) *ModifyMonitorGroupInstancesRequestInstances {
	s.Category = &v
	return s
}

func (s *ModifyMonitorGroupInstancesRequestInstances) SetInstanceId(v string) *ModifyMonitorGroupInstancesRequestInstances {
	s.InstanceId = &v
	return s
}

func (s *ModifyMonitorGroupInstancesRequestInstances) SetRegionId(v string) *ModifyMonitorGroupInstancesRequestInstances {
	s.RegionId = &v
	return s
}

func (s *ModifyMonitorGroupInstancesRequestInstances) SetInstanceName(v string) *ModifyMonitorGroupInstancesRequestInstances {
	s.InstanceName = &v
	return s
}

type ModifyMonitorGroupInstancesResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *int    `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s ModifyMonitorGroupInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyMonitorGroupInstancesResponse) GoString() string {
	return s.String()
}

func (s *ModifyMonitorGroupInstancesResponse) SetRequestId(v string) *ModifyMonitorGroupInstancesResponse {
	s.RequestId = &v
	return s
}

func (s *ModifyMonitorGroupInstancesResponse) SetSuccess(v bool) *ModifyMonitorGroupInstancesResponse {
	s.Success = &v
	return s
}

func (s *ModifyMonitorGroupInstancesResponse) SetCode(v int) *ModifyMonitorGroupInstancesResponse {
	s.Code = &v
	return s
}

func (s *ModifyMonitorGroupInstancesResponse) SetMessage(v string) *ModifyMonitorGroupInstancesResponse {
	s.Message = &v
	return s
}

type DescribeMonitoringAgentStatusesRequest struct {
	InstanceIds *string `json:"InstanceIds" xml:"InstanceIds" require:"true"`
}

func (s DescribeMonitoringAgentStatusesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentStatusesRequest) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringAgentStatusesRequest) SetInstanceIds(v string) *DescribeMonitoringAgentStatusesRequest {
	s.InstanceIds = &v
	return s
}

type DescribeMonitoringAgentStatusesResponse struct {
	Code           *string                                                `json:"Code" xml:"Code" require:"true"`
	Message        *string                                                `json:"Message" xml:"Message" require:"true"`
	Success        *bool                                                  `json:"Success" xml:"Success" require:"true"`
	RequestId      *string                                                `json:"RequestId" xml:"RequestId" require:"true"`
	NodeStatusList *DescribeMonitoringAgentStatusesResponseNodeStatusList `json:"NodeStatusList" xml:"NodeStatusList" require:"true" type:"Struct"`
}

func (s DescribeMonitoringAgentStatusesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentStatusesResponse) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringAgentStatusesResponse) SetCode(v string) *DescribeMonitoringAgentStatusesResponse {
	s.Code = &v
	return s
}

func (s *DescribeMonitoringAgentStatusesResponse) SetMessage(v string) *DescribeMonitoringAgentStatusesResponse {
	s.Message = &v
	return s
}

func (s *DescribeMonitoringAgentStatusesResponse) SetSuccess(v bool) *DescribeMonitoringAgentStatusesResponse {
	s.Success = &v
	return s
}

func (s *DescribeMonitoringAgentStatusesResponse) SetRequestId(v string) *DescribeMonitoringAgentStatusesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMonitoringAgentStatusesResponse) SetNodeStatusList(v *DescribeMonitoringAgentStatusesResponseNodeStatusList) *DescribeMonitoringAgentStatusesResponse {
	s.NodeStatusList = v
	return s
}

type DescribeMonitoringAgentStatusesResponseNodeStatusList struct {
	NodeStatus []*DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus `json:"NodeStatus" xml:"NodeStatus" require:"true" type:"Repeated"`
}

func (s DescribeMonitoringAgentStatusesResponseNodeStatusList) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentStatusesResponseNodeStatusList) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringAgentStatusesResponseNodeStatusList) SetNodeStatus(v []*DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus) *DescribeMonitoringAgentStatusesResponseNodeStatusList {
	s.NodeStatus = v
	return s
}

type DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus struct {
	InstanceId  *string `json:"InstanceId" xml:"InstanceId" require:"true"`
	AutoInstall *bool   `json:"AutoInstall" xml:"AutoInstall" require:"true"`
	Status      *string `json:"Status" xml:"Status" require:"true"`
}

func (s DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus) SetInstanceId(v string) *DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus {
	s.InstanceId = &v
	return s
}

func (s *DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus) SetAutoInstall(v bool) *DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus {
	s.AutoInstall = &v
	return s
}

func (s *DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus) SetStatus(v string) *DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus {
	s.Status = &v
	return s
}

type CreateMonitorAgentProcessRequest struct {
	ProcessName *string `json:"ProcessName" xml:"ProcessName" require:"true"`
	InstanceId  *string `json:"InstanceId" xml:"InstanceId" require:"true"`
	ProcessUser *string `json:"ProcessUser" xml:"ProcessUser"`
}

func (s CreateMonitorAgentProcessRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateMonitorAgentProcessRequest) GoString() string {
	return s.String()
}

func (s *CreateMonitorAgentProcessRequest) SetProcessName(v string) *CreateMonitorAgentProcessRequest {
	s.ProcessName = &v
	return s
}

func (s *CreateMonitorAgentProcessRequest) SetInstanceId(v string) *CreateMonitorAgentProcessRequest {
	s.InstanceId = &v
	return s
}

func (s *CreateMonitorAgentProcessRequest) SetProcessUser(v string) *CreateMonitorAgentProcessRequest {
	s.ProcessUser = &v
	return s
}

type CreateMonitorAgentProcessResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Id        *int64  `json:"Id" xml:"Id" require:"true"`
}

func (s CreateMonitorAgentProcessResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateMonitorAgentProcessResponse) GoString() string {
	return s.String()
}

func (s *CreateMonitorAgentProcessResponse) SetCode(v string) *CreateMonitorAgentProcessResponse {
	s.Code = &v
	return s
}

func (s *CreateMonitorAgentProcessResponse) SetMessage(v string) *CreateMonitorAgentProcessResponse {
	s.Message = &v
	return s
}

func (s *CreateMonitorAgentProcessResponse) SetSuccess(v bool) *CreateMonitorAgentProcessResponse {
	s.Success = &v
	return s
}

func (s *CreateMonitorAgentProcessResponse) SetRequestId(v string) *CreateMonitorAgentProcessResponse {
	s.RequestId = &v
	return s
}

func (s *CreateMonitorAgentProcessResponse) SetId(v int64) *CreateMonitorAgentProcessResponse {
	s.Id = &v
	return s
}

type DescribeAlertHistoryListRequest struct {
	RuleId     *string `json:"RuleId" xml:"RuleId"`
	RuleName   *string `json:"RuleName" xml:"RuleName"`
	Namespace  *string `json:"Namespace" xml:"Namespace"`
	MetricName *string `json:"MetricName" xml:"MetricName"`
	GroupId    *string `json:"GroupId" xml:"GroupId"`
	Status     *string `json:"Status" xml:"Status"`
	State      *string `json:"State" xml:"State"`
	Ascending  *bool   `json:"Ascending" xml:"Ascending"`
	StartTime  *string `json:"StartTime" xml:"StartTime"`
	EndTime    *string `json:"EndTime" xml:"EndTime"`
	PageSize   *int    `json:"PageSize" xml:"PageSize"`
	Page       *int    `json:"Page" xml:"Page"`
}

func (s DescribeAlertHistoryListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAlertHistoryListRequest) GoString() string {
	return s.String()
}

func (s *DescribeAlertHistoryListRequest) SetRuleId(v string) *DescribeAlertHistoryListRequest {
	s.RuleId = &v
	return s
}

func (s *DescribeAlertHistoryListRequest) SetRuleName(v string) *DescribeAlertHistoryListRequest {
	s.RuleName = &v
	return s
}

func (s *DescribeAlertHistoryListRequest) SetNamespace(v string) *DescribeAlertHistoryListRequest {
	s.Namespace = &v
	return s
}

func (s *DescribeAlertHistoryListRequest) SetMetricName(v string) *DescribeAlertHistoryListRequest {
	s.MetricName = &v
	return s
}

func (s *DescribeAlertHistoryListRequest) SetGroupId(v string) *DescribeAlertHistoryListRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeAlertHistoryListRequest) SetStatus(v string) *DescribeAlertHistoryListRequest {
	s.Status = &v
	return s
}

func (s *DescribeAlertHistoryListRequest) SetState(v string) *DescribeAlertHistoryListRequest {
	s.State = &v
	return s
}

func (s *DescribeAlertHistoryListRequest) SetAscending(v bool) *DescribeAlertHistoryListRequest {
	s.Ascending = &v
	return s
}

func (s *DescribeAlertHistoryListRequest) SetStartTime(v string) *DescribeAlertHistoryListRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeAlertHistoryListRequest) SetEndTime(v string) *DescribeAlertHistoryListRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeAlertHistoryListRequest) SetPageSize(v int) *DescribeAlertHistoryListRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeAlertHistoryListRequest) SetPage(v int) *DescribeAlertHistoryListRequest {
	s.Page = &v
	return s
}

type DescribeAlertHistoryListResponse struct {
	Success          *bool                                             `json:"Success" xml:"Success" require:"true"`
	Code             *string                                           `json:"Code" xml:"Code" require:"true"`
	Message          *string                                           `json:"Message" xml:"Message" require:"true"`
	Total            *string                                           `json:"Total" xml:"Total" require:"true"`
	RequestId        *string                                           `json:"RequestId" xml:"RequestId" require:"true"`
	AlarmHistoryList *DescribeAlertHistoryListResponseAlarmHistoryList `json:"AlarmHistoryList" xml:"AlarmHistoryList" require:"true" type:"Struct"`
}

func (s DescribeAlertHistoryListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAlertHistoryListResponse) GoString() string {
	return s.String()
}

func (s *DescribeAlertHistoryListResponse) SetSuccess(v bool) *DescribeAlertHistoryListResponse {
	s.Success = &v
	return s
}

func (s *DescribeAlertHistoryListResponse) SetCode(v string) *DescribeAlertHistoryListResponse {
	s.Code = &v
	return s
}

func (s *DescribeAlertHistoryListResponse) SetMessage(v string) *DescribeAlertHistoryListResponse {
	s.Message = &v
	return s
}

func (s *DescribeAlertHistoryListResponse) SetTotal(v string) *DescribeAlertHistoryListResponse {
	s.Total = &v
	return s
}

func (s *DescribeAlertHistoryListResponse) SetRequestId(v string) *DescribeAlertHistoryListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAlertHistoryListResponse) SetAlarmHistoryList(v *DescribeAlertHistoryListResponseAlarmHistoryList) *DescribeAlertHistoryListResponse {
	s.AlarmHistoryList = v
	return s
}

type DescribeAlertHistoryListResponseAlarmHistoryList struct {
	AlarmHistory []*DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory `json:"AlarmHistory" xml:"AlarmHistory" require:"true" type:"Repeated"`
}

func (s DescribeAlertHistoryListResponseAlarmHistoryList) String() string {
	return tea.Prettify(s)
}

func (s DescribeAlertHistoryListResponseAlarmHistoryList) GoString() string {
	return s.String()
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryList) SetAlarmHistory(v []*DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) *DescribeAlertHistoryListResponseAlarmHistoryList {
	s.AlarmHistory = v
	return s
}

type DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory struct {
	RuleId          *string                                                                    `json:"RuleId" xml:"RuleId" require:"true"`
	GroupId         *string                                                                    `json:"GroupId" xml:"GroupId" require:"true"`
	Namespace       *string                                                                    `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName      *string                                                                    `json:"MetricName" xml:"MetricName" require:"true"`
	Dimensions      *string                                                                    `json:"Dimensions" xml:"Dimensions" require:"true"`
	Expression      *string                                                                    `json:"Expression" xml:"Expression" require:"true"`
	EvaluationCount *int                                                                       `json:"EvaluationCount" xml:"EvaluationCount" require:"true"`
	Value           *string                                                                    `json:"Value" xml:"Value" require:"true"`
	AlertTime       *int64                                                                     `json:"AlertTime" xml:"AlertTime" require:"true"`
	LastTime        *int64                                                                     `json:"LastTime" xml:"LastTime" require:"true"`
	Level           *string                                                                    `json:"Level" xml:"Level" require:"true"`
	PreLevel        *string                                                                    `json:"PreLevel" xml:"PreLevel" require:"true"`
	RuleName        *string                                                                    `json:"RuleName" xml:"RuleName" require:"true"`
	State           *string                                                                    `json:"State" xml:"State" require:"true"`
	Status          *int                                                                       `json:"Status" xml:"Status" require:"true"`
	Webhooks        *string                                                                    `json:"Webhooks" xml:"Webhooks" require:"true"`
	InstanceName    *string                                                                    `json:"InstanceName" xml:"InstanceName" require:"true"`
	ContactGroups   *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactGroups `json:"ContactGroups" xml:"ContactGroups" require:"true" type:"Struct"`
	Contacts        *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContacts      `json:"Contacts" xml:"Contacts" require:"true" type:"Struct"`
	ContactALIIMs   *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactALIIMs `json:"ContactALIIMs" xml:"ContactALIIMs" require:"true" type:"Struct"`
	ContactSmses    *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactSmses  `json:"ContactSmses" xml:"ContactSmses" require:"true" type:"Struct"`
	ContactMails    *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactMails  `json:"ContactMails" xml:"ContactMails" require:"true" type:"Struct"`
}

func (s DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) String() string {
	return tea.Prettify(s)
}

func (s DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) GoString() string {
	return s.String()
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetRuleId(v string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.RuleId = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetGroupId(v string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.GroupId = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetNamespace(v string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.Namespace = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetMetricName(v string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.MetricName = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetDimensions(v string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.Dimensions = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetExpression(v string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.Expression = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetEvaluationCount(v int) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.EvaluationCount = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetValue(v string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.Value = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetAlertTime(v int64) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.AlertTime = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetLastTime(v int64) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.LastTime = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetLevel(v string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.Level = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetPreLevel(v string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.PreLevel = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetRuleName(v string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.RuleName = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetState(v string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.State = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetStatus(v int) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.Status = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetWebhooks(v string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.Webhooks = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetInstanceName(v string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.InstanceName = &v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetContactGroups(v *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactGroups) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.ContactGroups = v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetContacts(v *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContacts) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.Contacts = v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetContactALIIMs(v *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactALIIMs) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.ContactALIIMs = v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetContactSmses(v *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactSmses) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.ContactSmses = v
	return s
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory) SetContactMails(v *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactMails) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory {
	s.ContactMails = v
	return s
}

type DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactGroups struct {
	ContactGroup []*string `json:"ContactGroup" xml:"ContactGroup" require:"true" type:"Repeated"`
}

func (s DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactGroups) String() string {
	return tea.Prettify(s)
}

func (s DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactGroups) GoString() string {
	return s.String()
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactGroups) SetContactGroup(v []*string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactGroups {
	s.ContactGroup = v
	return s
}

type DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContacts struct {
	Contact []*string `json:"Contact" xml:"Contact" require:"true" type:"Repeated"`
}

func (s DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContacts) String() string {
	return tea.Prettify(s)
}

func (s DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContacts) GoString() string {
	return s.String()
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContacts) SetContact(v []*string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContacts {
	s.Contact = v
	return s
}

type DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactALIIMs struct {
	ContactALIIM []*string `json:"ContactALIIM" xml:"ContactALIIM" require:"true" type:"Repeated"`
}

func (s DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactALIIMs) String() string {
	return tea.Prettify(s)
}

func (s DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactALIIMs) GoString() string {
	return s.String()
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactALIIMs) SetContactALIIM(v []*string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactALIIMs {
	s.ContactALIIM = v
	return s
}

type DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactSmses struct {
	ContactSms []*string `json:"ContactSms" xml:"ContactSms" require:"true" type:"Repeated"`
}

func (s DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactSmses) String() string {
	return tea.Prettify(s)
}

func (s DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactSmses) GoString() string {
	return s.String()
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactSmses) SetContactSms(v []*string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactSmses {
	s.ContactSms = v
	return s
}

type DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactMails struct {
	ContactMail []*string `json:"ContactMail" xml:"ContactMail" require:"true" type:"Repeated"`
}

func (s DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactMails) String() string {
	return tea.Prettify(s)
}

func (s DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactMails) GoString() string {
	return s.String()
}

func (s *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactMails) SetContactMail(v []*string) *DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactMails {
	s.ContactMail = v
	return s
}

type DescribeAlertingMetricRuleResourcesRequest struct {
	RuleId   *string `json:"RuleId" xml:"RuleId"`
	GroupId  *string `json:"GroupId" xml:"GroupId"`
	Page     *int    `json:"Page" xml:"Page"`
	PageSize *int    `json:"PageSize" xml:"PageSize"`
}

func (s DescribeAlertingMetricRuleResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAlertingMetricRuleResourcesRequest) GoString() string {
	return s.String()
}

func (s *DescribeAlertingMetricRuleResourcesRequest) SetRuleId(v string) *DescribeAlertingMetricRuleResourcesRequest {
	s.RuleId = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesRequest) SetGroupId(v string) *DescribeAlertingMetricRuleResourcesRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesRequest) SetPage(v int) *DescribeAlertingMetricRuleResourcesRequest {
	s.Page = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesRequest) SetPageSize(v int) *DescribeAlertingMetricRuleResourcesRequest {
	s.PageSize = &v
	return s
}

type DescribeAlertingMetricRuleResourcesResponse struct {
	RequestId *string                                               `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool                                                 `json:"Success" xml:"Success" require:"true"`
	Code      *int                                                  `json:"Code" xml:"Code" require:"true"`
	Message   *string                                               `json:"Message" xml:"Message" require:"true"`
	Total     *int                                                  `json:"Total" xml:"Total" require:"true"`
	Resources *DescribeAlertingMetricRuleResourcesResponseResources `json:"Resources" xml:"Resources" require:"true" type:"Struct"`
}

func (s DescribeAlertingMetricRuleResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAlertingMetricRuleResourcesResponse) GoString() string {
	return s.String()
}

func (s *DescribeAlertingMetricRuleResourcesResponse) SetRequestId(v string) *DescribeAlertingMetricRuleResourcesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponse) SetSuccess(v bool) *DescribeAlertingMetricRuleResourcesResponse {
	s.Success = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponse) SetCode(v int) *DescribeAlertingMetricRuleResourcesResponse {
	s.Code = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponse) SetMessage(v string) *DescribeAlertingMetricRuleResourcesResponse {
	s.Message = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponse) SetTotal(v int) *DescribeAlertingMetricRuleResourcesResponse {
	s.Total = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponse) SetResources(v *DescribeAlertingMetricRuleResourcesResponseResources) *DescribeAlertingMetricRuleResourcesResponse {
	s.Resources = v
	return s
}

type DescribeAlertingMetricRuleResourcesResponseResources struct {
	Resource []*DescribeAlertingMetricRuleResourcesResponseResourcesResource `json:"Resource" xml:"Resource" require:"true" type:"Repeated"`
}

func (s DescribeAlertingMetricRuleResourcesResponseResources) String() string {
	return tea.Prettify(s)
}

func (s DescribeAlertingMetricRuleResourcesResponseResources) GoString() string {
	return s.String()
}

func (s *DescribeAlertingMetricRuleResourcesResponseResources) SetResource(v []*DescribeAlertingMetricRuleResourcesResponseResourcesResource) *DescribeAlertingMetricRuleResourcesResponseResources {
	s.Resource = v
	return s
}

type DescribeAlertingMetricRuleResourcesResponseResourcesResource struct {
	RuleId         *string `json:"RuleId" xml:"RuleId" require:"true"`
	RuleName       *string `json:"RuleName" xml:"RuleName" require:"true"`
	GroupId        *string `json:"GroupId" xml:"GroupId" require:"true"`
	Resource       *string `json:"Resource" xml:"Resource" require:"true"`
	Enable         *string `json:"Enable" xml:"Enable" require:"true"`
	LastAlertTime  *string `json:"LastAlertTime" xml:"LastAlertTime" require:"true"`
	LastModifyTime *string `json:"LastModifyTime" xml:"LastModifyTime" require:"true"`
	StartTime      *string `json:"StartTime" xml:"StartTime" require:"true"`
	MetricValues   *string `json:"MetricValues" xml:"MetricValues" require:"true"`
	RetryTimes     *string `json:"RetryTimes" xml:"RetryTimes" require:"true"`
	Threshold      *string `json:"Threshold" xml:"Threshold" require:"true"`
}

func (s DescribeAlertingMetricRuleResourcesResponseResourcesResource) String() string {
	return tea.Prettify(s)
}

func (s DescribeAlertingMetricRuleResourcesResponseResourcesResource) GoString() string {
	return s.String()
}

func (s *DescribeAlertingMetricRuleResourcesResponseResourcesResource) SetRuleId(v string) *DescribeAlertingMetricRuleResourcesResponseResourcesResource {
	s.RuleId = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponseResourcesResource) SetRuleName(v string) *DescribeAlertingMetricRuleResourcesResponseResourcesResource {
	s.RuleName = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponseResourcesResource) SetGroupId(v string) *DescribeAlertingMetricRuleResourcesResponseResourcesResource {
	s.GroupId = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponseResourcesResource) SetResource(v string) *DescribeAlertingMetricRuleResourcesResponseResourcesResource {
	s.Resource = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponseResourcesResource) SetEnable(v string) *DescribeAlertingMetricRuleResourcesResponseResourcesResource {
	s.Enable = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponseResourcesResource) SetLastAlertTime(v string) *DescribeAlertingMetricRuleResourcesResponseResourcesResource {
	s.LastAlertTime = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponseResourcesResource) SetLastModifyTime(v string) *DescribeAlertingMetricRuleResourcesResponseResourcesResource {
	s.LastModifyTime = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponseResourcesResource) SetStartTime(v string) *DescribeAlertingMetricRuleResourcesResponseResourcesResource {
	s.StartTime = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponseResourcesResource) SetMetricValues(v string) *DescribeAlertingMetricRuleResourcesResponseResourcesResource {
	s.MetricValues = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponseResourcesResource) SetRetryTimes(v string) *DescribeAlertingMetricRuleResourcesResponseResourcesResource {
	s.RetryTimes = &v
	return s
}

func (s *DescribeAlertingMetricRuleResourcesResponseResourcesResource) SetThreshold(v string) *DescribeAlertingMetricRuleResourcesResponseResourcesResource {
	s.Threshold = &v
	return s
}

type DisableActiveMetricRuleRequest struct {
	Product *string `json:"Product" xml:"Product" require:"true"`
}

func (s DisableActiveMetricRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s DisableActiveMetricRuleRequest) GoString() string {
	return s.String()
}

func (s *DisableActiveMetricRuleRequest) SetProduct(v string) *DisableActiveMetricRuleRequest {
	s.Product = &v
	return s
}

type DisableActiveMetricRuleResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s DisableActiveMetricRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s DisableActiveMetricRuleResponse) GoString() string {
	return s.String()
}

func (s *DisableActiveMetricRuleResponse) SetRequestId(v string) *DisableActiveMetricRuleResponse {
	s.RequestId = &v
	return s
}

func (s *DisableActiveMetricRuleResponse) SetSuccess(v bool) *DisableActiveMetricRuleResponse {
	s.Success = &v
	return s
}

func (s *DisableActiveMetricRuleResponse) SetCode(v string) *DisableActiveMetricRuleResponse {
	s.Code = &v
	return s
}

func (s *DisableActiveMetricRuleResponse) SetMessage(v string) *DisableActiveMetricRuleResponse {
	s.Message = &v
	return s
}

type DescribeActiveMetricRuleListRequest struct {
	Product *string `json:"Product" xml:"Product" require:"true"`
}

func (s DescribeActiveMetricRuleListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeActiveMetricRuleListRequest) GoString() string {
	return s.String()
}

func (s *DescribeActiveMetricRuleListRequest) SetProduct(v string) *DescribeActiveMetricRuleListRequest {
	s.Product = &v
	return s
}

type DescribeActiveMetricRuleListResponse struct {
	Success    *bool                                           `json:"Success" xml:"Success" require:"true"`
	Code       *string                                         `json:"Code" xml:"Code" require:"true"`
	Message    *string                                         `json:"Message" xml:"Message" require:"true"`
	RequestId  *string                                         `json:"RequestId" xml:"RequestId" require:"true"`
	Datapoints *DescribeActiveMetricRuleListResponseDatapoints `json:"Datapoints" xml:"Datapoints" require:"true" type:"Struct"`
	AlertList  *DescribeActiveMetricRuleListResponseAlertList  `json:"AlertList" xml:"AlertList" require:"true" type:"Struct"`
}

func (s DescribeActiveMetricRuleListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeActiveMetricRuleListResponse) GoString() string {
	return s.String()
}

func (s *DescribeActiveMetricRuleListResponse) SetSuccess(v bool) *DescribeActiveMetricRuleListResponse {
	s.Success = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponse) SetCode(v string) *DescribeActiveMetricRuleListResponse {
	s.Code = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponse) SetMessage(v string) *DescribeActiveMetricRuleListResponse {
	s.Message = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponse) SetRequestId(v string) *DescribeActiveMetricRuleListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponse) SetDatapoints(v *DescribeActiveMetricRuleListResponseDatapoints) *DescribeActiveMetricRuleListResponse {
	s.Datapoints = v
	return s
}

func (s *DescribeActiveMetricRuleListResponse) SetAlertList(v *DescribeActiveMetricRuleListResponseAlertList) *DescribeActiveMetricRuleListResponse {
	s.AlertList = v
	return s
}

type DescribeActiveMetricRuleListResponseDatapoints struct {
	Alarm []*DescribeActiveMetricRuleListResponseDatapointsAlarm `json:"Alarm" xml:"Alarm" require:"true" type:"Repeated"`
}

func (s DescribeActiveMetricRuleListResponseDatapoints) String() string {
	return tea.Prettify(s)
}

func (s DescribeActiveMetricRuleListResponseDatapoints) GoString() string {
	return s.String()
}

func (s *DescribeActiveMetricRuleListResponseDatapoints) SetAlarm(v []*DescribeActiveMetricRuleListResponseDatapointsAlarm) *DescribeActiveMetricRuleListResponseDatapoints {
	s.Alarm = v
	return s
}

type DescribeActiveMetricRuleListResponseDatapointsAlarm struct {
	RuleId             *string `json:"RuleId" xml:"RuleId" require:"true"`
	Namespace          *string `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName         *string `json:"MetricName" xml:"MetricName" require:"true"`
	Period             *string `json:"Period" xml:"Period" require:"true"`
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	EvaluationCount    *string `json:"EvaluationCount" xml:"EvaluationCount" require:"true"`
	StartTime          *string `json:"StartTime" xml:"StartTime" require:"true"`
	EndTime            *string `json:"EndTime" xml:"EndTime" require:"true"`
	SilenceTime        *string `json:"SilenceTime" xml:"SilenceTime" require:"true"`
	Enable             *string `json:"Enable" xml:"Enable" require:"true"`
	State              *string `json:"State" xml:"State" require:"true"`
	ContactGroups      *string `json:"ContactGroups" xml:"ContactGroups" require:"true"`
	Webhook            *string `json:"Webhook" xml:"Webhook" require:"true"`
	RuleName           *string `json:"RuleName" xml:"RuleName" require:"true"`
}

func (s DescribeActiveMetricRuleListResponseDatapointsAlarm) String() string {
	return tea.Prettify(s)
}

func (s DescribeActiveMetricRuleListResponseDatapointsAlarm) GoString() string {
	return s.String()
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetRuleId(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.RuleId = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetNamespace(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.Namespace = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetMetricName(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.MetricName = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetPeriod(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.Period = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetStatistics(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.Statistics = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetComparisonOperator(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.ComparisonOperator = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetThreshold(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.Threshold = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetEvaluationCount(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.EvaluationCount = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetStartTime(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.StartTime = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetEndTime(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.EndTime = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetSilenceTime(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.SilenceTime = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetEnable(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.Enable = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetState(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.State = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetContactGroups(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.ContactGroups = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetWebhook(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.Webhook = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseDatapointsAlarm) SetRuleName(v string) *DescribeActiveMetricRuleListResponseDatapointsAlarm {
	s.RuleName = &v
	return s
}

type DescribeActiveMetricRuleListResponseAlertList struct {
	Alert []*DescribeActiveMetricRuleListResponseAlertListAlert `json:"Alert" xml:"Alert" require:"true" type:"Repeated"`
}

func (s DescribeActiveMetricRuleListResponseAlertList) String() string {
	return tea.Prettify(s)
}

func (s DescribeActiveMetricRuleListResponseAlertList) GoString() string {
	return s.String()
}

func (s *DescribeActiveMetricRuleListResponseAlertList) SetAlert(v []*DescribeActiveMetricRuleListResponseAlertListAlert) *DescribeActiveMetricRuleListResponseAlertList {
	s.Alert = v
	return s
}

type DescribeActiveMetricRuleListResponseAlertListAlert struct {
	RuleId              *string                                                        `json:"RuleId" xml:"RuleId" require:"true"`
	Namespace           *string                                                        `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName          *string                                                        `json:"MetricName" xml:"MetricName" require:"true"`
	Period              *string                                                        `json:"Period" xml:"Period" require:"true"`
	EffectiveInterval   *string                                                        `json:"EffectiveInterval" xml:"EffectiveInterval" require:"true"`
	NoEffectiveInterval *string                                                        `json:"NoEffectiveInterval" xml:"NoEffectiveInterval" require:"true"`
	SilenceTime         *string                                                        `json:"SilenceTime" xml:"SilenceTime" require:"true"`
	EnableState         *bool                                                          `json:"EnableState" xml:"EnableState" require:"true"`
	AlertState          *string                                                        `json:"AlertState" xml:"AlertState" require:"true"`
	ContactGroups       *string                                                        `json:"ContactGroups" xml:"ContactGroups" require:"true"`
	Webhook             *string                                                        `json:"Webhook" xml:"Webhook" require:"true"`
	MailSubject         *string                                                        `json:"MailSubject" xml:"MailSubject" require:"true"`
	RuleName            *string                                                        `json:"RuleName" xml:"RuleName" require:"true"`
	Resources           *string                                                        `json:"Resources" xml:"Resources" require:"true"`
	Dimensions          *string                                                        `json:"Dimensions" xml:"Dimensions" require:"true"`
	Escalations         *DescribeActiveMetricRuleListResponseAlertListAlertEscalations `json:"Escalations" xml:"Escalations" require:"true" type:"Struct"`
}

func (s DescribeActiveMetricRuleListResponseAlertListAlert) String() string {
	return tea.Prettify(s)
}

func (s DescribeActiveMetricRuleListResponseAlertListAlert) GoString() string {
	return s.String()
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetRuleId(v string) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.RuleId = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetNamespace(v string) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.Namespace = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetMetricName(v string) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.MetricName = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetPeriod(v string) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.Period = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetEffectiveInterval(v string) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.EffectiveInterval = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetNoEffectiveInterval(v string) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.NoEffectiveInterval = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetSilenceTime(v string) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.SilenceTime = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetEnableState(v bool) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.EnableState = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetAlertState(v string) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.AlertState = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetContactGroups(v string) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.ContactGroups = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetWebhook(v string) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.Webhook = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetMailSubject(v string) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.MailSubject = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetRuleName(v string) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.RuleName = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetResources(v string) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.Resources = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetDimensions(v string) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.Dimensions = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlert) SetEscalations(v *DescribeActiveMetricRuleListResponseAlertListAlertEscalations) *DescribeActiveMetricRuleListResponseAlertListAlert {
	s.Escalations = v
	return s
}

type DescribeActiveMetricRuleListResponseAlertListAlertEscalations struct {
	Info     *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo     `json:"Info" xml:"Info" require:"true" type:"Struct"`
	Warn     *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn     `json:"Warn" xml:"Warn" require:"true" type:"Struct"`
	Critical *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical `json:"Critical" xml:"Critical" require:"true" type:"Struct"`
}

func (s DescribeActiveMetricRuleListResponseAlertListAlertEscalations) String() string {
	return tea.Prettify(s)
}

func (s DescribeActiveMetricRuleListResponseAlertListAlertEscalations) GoString() string {
	return s.String()
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalations) SetInfo(v *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo) *DescribeActiveMetricRuleListResponseAlertListAlertEscalations {
	s.Info = v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalations) SetWarn(v *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn) *DescribeActiveMetricRuleListResponseAlertListAlertEscalations {
	s.Warn = v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalations) SetCritical(v *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical) *DescribeActiveMetricRuleListResponseAlertListAlertEscalations {
	s.Critical = v
	return s
}

type DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo struct {
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *string `json:"Times" xml:"Times" require:"true"`
}

func (s DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo) GoString() string {
	return s.String()
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo) SetComparisonOperator(v string) *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo {
	s.ComparisonOperator = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo) SetStatistics(v string) *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo {
	s.Statistics = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo) SetThreshold(v string) *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo {
	s.Threshold = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo) SetTimes(v string) *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo {
	s.Times = &v
	return s
}

type DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn struct {
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *string `json:"Times" xml:"Times" require:"true"`
}

func (s DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn) String() string {
	return tea.Prettify(s)
}

func (s DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn) GoString() string {
	return s.String()
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn) SetComparisonOperator(v string) *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn {
	s.ComparisonOperator = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn) SetStatistics(v string) *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn {
	s.Statistics = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn) SetThreshold(v string) *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn {
	s.Threshold = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn) SetTimes(v string) *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn {
	s.Times = &v
	return s
}

type DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical struct {
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *string `json:"Times" xml:"Times" require:"true"`
}

func (s DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical) String() string {
	return tea.Prettify(s)
}

func (s DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical) GoString() string {
	return s.String()
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical) SetComparisonOperator(v string) *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical {
	s.ComparisonOperator = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical) SetStatistics(v string) *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical {
	s.Statistics = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical) SetThreshold(v string) *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical {
	s.Threshold = &v
	return s
}

func (s *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical) SetTimes(v string) *DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical {
	s.Times = &v
	return s
}

type DescribeProductsOfActiveMetricRuleRequest struct {
}

func (s DescribeProductsOfActiveMetricRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeProductsOfActiveMetricRuleRequest) GoString() string {
	return s.String()
}

type DescribeProductsOfActiveMetricRuleResponse struct {
	RequestId                    *string                                                                 `json:"RequestId" xml:"RequestId" require:"true"`
	Success                      *bool                                                                   `json:"Success" xml:"Success" require:"true"`
	Code                         *int                                                                    `json:"Code" xml:"Code" require:"true"`
	Message                      *string                                                                 `json:"Message" xml:"Message" require:"true"`
	Datapoints                   *string                                                                 `json:"Datapoints" xml:"Datapoints" require:"true"`
	AllProductInitMetricRuleList *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleList `json:"AllProductInitMetricRuleList" xml:"AllProductInitMetricRuleList" require:"true" type:"Struct"`
}

func (s DescribeProductsOfActiveMetricRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeProductsOfActiveMetricRuleResponse) GoString() string {
	return s.String()
}

func (s *DescribeProductsOfActiveMetricRuleResponse) SetRequestId(v string) *DescribeProductsOfActiveMetricRuleResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeProductsOfActiveMetricRuleResponse) SetSuccess(v bool) *DescribeProductsOfActiveMetricRuleResponse {
	s.Success = &v
	return s
}

func (s *DescribeProductsOfActiveMetricRuleResponse) SetCode(v int) *DescribeProductsOfActiveMetricRuleResponse {
	s.Code = &v
	return s
}

func (s *DescribeProductsOfActiveMetricRuleResponse) SetMessage(v string) *DescribeProductsOfActiveMetricRuleResponse {
	s.Message = &v
	return s
}

func (s *DescribeProductsOfActiveMetricRuleResponse) SetDatapoints(v string) *DescribeProductsOfActiveMetricRuleResponse {
	s.Datapoints = &v
	return s
}

func (s *DescribeProductsOfActiveMetricRuleResponse) SetAllProductInitMetricRuleList(v *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleList) *DescribeProductsOfActiveMetricRuleResponse {
	s.AllProductInitMetricRuleList = v
	return s
}

type DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleList struct {
	AllProductInitMetricRule []*DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule `json:"AllProductInitMetricRule" xml:"AllProductInitMetricRule" require:"true" type:"Repeated"`
}

func (s DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleList) String() string {
	return tea.Prettify(s)
}

func (s DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleList) GoString() string {
	return s.String()
}

func (s *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleList) SetAllProductInitMetricRule(v []*DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule) *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleList {
	s.AllProductInitMetricRule = v
	return s
}

type DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule struct {
	Product             *string                                                                                                            `json:"Product" xml:"Product" require:"true"`
	AlertInitConfigList *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigList `json:"AlertInitConfigList" xml:"AlertInitConfigList" require:"true" type:"Struct"`
}

func (s DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule) String() string {
	return tea.Prettify(s)
}

func (s DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule) GoString() string {
	return s.String()
}

func (s *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule) SetProduct(v string) *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule {
	s.Product = &v
	return s
}

func (s *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule) SetAlertInitConfigList(v *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigList) *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule {
	s.AlertInitConfigList = v
	return s
}

type DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigList struct {
	AlertInitConfig []*DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig `json:"AlertInitConfig" xml:"AlertInitConfig" require:"true" type:"Repeated"`
}

func (s DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigList) String() string {
	return tea.Prettify(s)
}

func (s DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigList) GoString() string {
	return s.String()
}

func (s *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigList) SetAlertInitConfig(v []*DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig) *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigList {
	s.AlertInitConfig = v
	return s
}

type DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig struct {
	Namespace       *string `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName      *string `json:"MetricName" xml:"MetricName" require:"true"`
	Statistics      *string `json:"Statistics" xml:"Statistics" require:"true"`
	EvaluationCount *string `json:"EvaluationCount" xml:"EvaluationCount" require:"true"`
	Threshold       *string `json:"Threshold" xml:"Threshold" require:"true"`
	Period          *string `json:"Period" xml:"Period" require:"true"`
}

func (s DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig) GoString() string {
	return s.String()
}

func (s *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig) SetNamespace(v string) *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig {
	s.Namespace = &v
	return s
}

func (s *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig) SetMetricName(v string) *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig {
	s.MetricName = &v
	return s
}

func (s *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig) SetStatistics(v string) *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig {
	s.Statistics = &v
	return s
}

func (s *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig) SetEvaluationCount(v string) *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig {
	s.EvaluationCount = &v
	return s
}

func (s *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig) SetThreshold(v string) *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig {
	s.Threshold = &v
	return s
}

func (s *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig) SetPeriod(v string) *DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig {
	s.Period = &v
	return s
}

type EnableActiveMetricRuleRequest struct {
	Product *string `json:"Product" xml:"Product" require:"true"`
}

func (s EnableActiveMetricRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s EnableActiveMetricRuleRequest) GoString() string {
	return s.String()
}

func (s *EnableActiveMetricRuleRequest) SetProduct(v string) *EnableActiveMetricRuleRequest {
	s.Product = &v
	return s
}

type EnableActiveMetricRuleResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s EnableActiveMetricRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s EnableActiveMetricRuleResponse) GoString() string {
	return s.String()
}

func (s *EnableActiveMetricRuleResponse) SetSuccess(v bool) *EnableActiveMetricRuleResponse {
	s.Success = &v
	return s
}

func (s *EnableActiveMetricRuleResponse) SetCode(v string) *EnableActiveMetricRuleResponse {
	s.Code = &v
	return s
}

func (s *EnableActiveMetricRuleResponse) SetMessage(v string) *EnableActiveMetricRuleResponse {
	s.Message = &v
	return s
}

func (s *EnableActiveMetricRuleResponse) SetRequestId(v string) *EnableActiveMetricRuleResponse {
	s.RequestId = &v
	return s
}

type DescribeMonitorGroupInstanceAttributeRequest struct {
	GroupId     *int64  `json:"GroupId" xml:"GroupId" require:"true"`
	PageNumber  *int    `json:"PageNumber" xml:"PageNumber"`
	PageSize    *int    `json:"PageSize" xml:"PageSize"`
	Total       *bool   `json:"Total" xml:"Total"`
	Category    *string `json:"Category" xml:"Category"`
	Keyword     *string `json:"Keyword" xml:"Keyword"`
	InstanceIds *string `json:"InstanceIds" xml:"InstanceIds"`
}

func (s DescribeMonitorGroupInstanceAttributeRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupInstanceAttributeRequest) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupInstanceAttributeRequest) SetGroupId(v int64) *DescribeMonitorGroupInstanceAttributeRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeRequest) SetPageNumber(v int) *DescribeMonitorGroupInstanceAttributeRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeRequest) SetPageSize(v int) *DescribeMonitorGroupInstanceAttributeRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeRequest) SetTotal(v bool) *DescribeMonitorGroupInstanceAttributeRequest {
	s.Total = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeRequest) SetCategory(v string) *DescribeMonitorGroupInstanceAttributeRequest {
	s.Category = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeRequest) SetKeyword(v string) *DescribeMonitorGroupInstanceAttributeRequest {
	s.Keyword = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeRequest) SetInstanceIds(v string) *DescribeMonitorGroupInstanceAttributeRequest {
	s.InstanceIds = &v
	return s
}

type DescribeMonitorGroupInstanceAttributeResponse struct {
	RequestId  *string                                                 `json:"RequestId" xml:"RequestId" require:"true"`
	Success    *bool                                                   `json:"Success" xml:"Success" require:"true"`
	Code       *int                                                    `json:"Code" xml:"Code" require:"true"`
	Message    *string                                                 `json:"Message" xml:"Message" require:"true"`
	PageNumber *int                                                    `json:"PageNumber" xml:"PageNumber" require:"true"`
	PageSize   *int                                                    `json:"PageSize" xml:"PageSize" require:"true"`
	Total      *int                                                    `json:"Total" xml:"Total" require:"true"`
	Resources  *DescribeMonitorGroupInstanceAttributeResponseResources `json:"Resources" xml:"Resources" require:"true" type:"Struct"`
}

func (s DescribeMonitorGroupInstanceAttributeResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupInstanceAttributeResponse) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupInstanceAttributeResponse) SetRequestId(v string) *DescribeMonitorGroupInstanceAttributeResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponse) SetSuccess(v bool) *DescribeMonitorGroupInstanceAttributeResponse {
	s.Success = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponse) SetCode(v int) *DescribeMonitorGroupInstanceAttributeResponse {
	s.Code = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponse) SetMessage(v string) *DescribeMonitorGroupInstanceAttributeResponse {
	s.Message = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponse) SetPageNumber(v int) *DescribeMonitorGroupInstanceAttributeResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponse) SetPageSize(v int) *DescribeMonitorGroupInstanceAttributeResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponse) SetTotal(v int) *DescribeMonitorGroupInstanceAttributeResponse {
	s.Total = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponse) SetResources(v *DescribeMonitorGroupInstanceAttributeResponseResources) *DescribeMonitorGroupInstanceAttributeResponse {
	s.Resources = v
	return s
}

type DescribeMonitorGroupInstanceAttributeResponseResources struct {
	Resource []*DescribeMonitorGroupInstanceAttributeResponseResourcesResource `json:"Resource" xml:"Resource" require:"true" type:"Repeated"`
}

func (s DescribeMonitorGroupInstanceAttributeResponseResources) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupInstanceAttributeResponseResources) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResources) SetResource(v []*DescribeMonitorGroupInstanceAttributeResponseResourcesResource) *DescribeMonitorGroupInstanceAttributeResponseResources {
	s.Resource = v
	return s
}

type DescribeMonitorGroupInstanceAttributeResponseResourcesResource struct {
	InstanceName *string                                                               `json:"InstanceName" xml:"InstanceName" require:"true"`
	InstanceId   *string                                                               `json:"InstanceId" xml:"InstanceId" require:"true"`
	Desc         *string                                                               `json:"Desc" xml:"Desc" require:"true"`
	NetworkType  *string                                                               `json:"NetworkType" xml:"NetworkType" require:"true"`
	Category     *string                                                               `json:"Category" xml:"Category" require:"true"`
	Dimension    *string                                                               `json:"Dimension" xml:"Dimension" require:"true"`
	Tags         *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTags   `json:"Tags" xml:"Tags" require:"true" type:"Struct"`
	Region       *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion `json:"Region" xml:"Region" require:"true" type:"Struct"`
	Vpc          *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc    `json:"Vpc" xml:"Vpc" require:"true" type:"Struct"`
}

func (s DescribeMonitorGroupInstanceAttributeResponseResourcesResource) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupInstanceAttributeResponseResourcesResource) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResource) SetInstanceName(v string) *DescribeMonitorGroupInstanceAttributeResponseResourcesResource {
	s.InstanceName = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResource) SetInstanceId(v string) *DescribeMonitorGroupInstanceAttributeResponseResourcesResource {
	s.InstanceId = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResource) SetDesc(v string) *DescribeMonitorGroupInstanceAttributeResponseResourcesResource {
	s.Desc = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResource) SetNetworkType(v string) *DescribeMonitorGroupInstanceAttributeResponseResourcesResource {
	s.NetworkType = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResource) SetCategory(v string) *DescribeMonitorGroupInstanceAttributeResponseResourcesResource {
	s.Category = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResource) SetDimension(v string) *DescribeMonitorGroupInstanceAttributeResponseResourcesResource {
	s.Dimension = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResource) SetTags(v *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTags) *DescribeMonitorGroupInstanceAttributeResponseResourcesResource {
	s.Tags = v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResource) SetRegion(v *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion) *DescribeMonitorGroupInstanceAttributeResponseResourcesResource {
	s.Region = v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResource) SetVpc(v *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc) *DescribeMonitorGroupInstanceAttributeResponseResourcesResource {
	s.Vpc = v
	return s
}

type DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTags struct {
	Tag []*DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag `json:"Tag" xml:"Tag" require:"true" type:"Repeated"`
}

func (s DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTags) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTags) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTags) SetTag(v []*DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag) *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTags {
	s.Tag = v
	return s
}

type DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag struct {
	Key   *string `json:"Key" xml:"Key" require:"true"`
	Value *string `json:"Value" xml:"Value" require:"true"`
}

func (s DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag) SetKey(v string) *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag {
	s.Key = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag) SetValue(v string) *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag {
	s.Value = &v
	return s
}

type DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion struct {
	RegionId         *string `json:"RegionId" xml:"RegionId" require:"true"`
	AvailabilityZone *string `json:"AvailabilityZone" xml:"AvailabilityZone" require:"true"`
}

func (s DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion) SetRegionId(v string) *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion {
	s.RegionId = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion) SetAvailabilityZone(v string) *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion {
	s.AvailabilityZone = &v
	return s
}

type DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc struct {
	VpcInstanceId     *string `json:"VpcInstanceId" xml:"VpcInstanceId" require:"true"`
	VswitchInstanceId *string `json:"VswitchInstanceId" xml:"VswitchInstanceId" require:"true"`
}

func (s DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc) SetVpcInstanceId(v string) *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc {
	s.VpcInstanceId = &v
	return s
}

func (s *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc) SetVswitchInstanceId(v string) *DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc {
	s.VswitchInstanceId = &v
	return s
}

type DescribeMonitorGroupNotifyPolicyListRequest struct {
	PolicyType *string `json:"PolicyType" xml:"PolicyType" require:"true"`
	PageNumber *int    `json:"PageNumber" xml:"PageNumber"`
	PageSize   *int    `json:"PageSize" xml:"PageSize"`
	GroupId    *string `json:"GroupId" xml:"GroupId"`
}

func (s DescribeMonitorGroupNotifyPolicyListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupNotifyPolicyListRequest) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupNotifyPolicyListRequest) SetPolicyType(v string) *DescribeMonitorGroupNotifyPolicyListRequest {
	s.PolicyType = &v
	return s
}

func (s *DescribeMonitorGroupNotifyPolicyListRequest) SetPageNumber(v int) *DescribeMonitorGroupNotifyPolicyListRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeMonitorGroupNotifyPolicyListRequest) SetPageSize(v int) *DescribeMonitorGroupNotifyPolicyListRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeMonitorGroupNotifyPolicyListRequest) SetGroupId(v string) *DescribeMonitorGroupNotifyPolicyListRequest {
	s.GroupId = &v
	return s
}

type DescribeMonitorGroupNotifyPolicyListResponse struct {
	Code             *string                                                       `json:"Code" xml:"Code" require:"true"`
	Message          *string                                                       `json:"Message" xml:"Message" require:"true"`
	Success          *string                                                       `json:"Success" xml:"Success" require:"true"`
	RequestId        *string                                                       `json:"RequestId" xml:"RequestId" require:"true"`
	Total            *int                                                          `json:"Total" xml:"Total" require:"true"`
	NotifyPolicyList *DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyList `json:"NotifyPolicyList" xml:"NotifyPolicyList" require:"true" type:"Struct"`
}

func (s DescribeMonitorGroupNotifyPolicyListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupNotifyPolicyListResponse) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupNotifyPolicyListResponse) SetCode(v string) *DescribeMonitorGroupNotifyPolicyListResponse {
	s.Code = &v
	return s
}

func (s *DescribeMonitorGroupNotifyPolicyListResponse) SetMessage(v string) *DescribeMonitorGroupNotifyPolicyListResponse {
	s.Message = &v
	return s
}

func (s *DescribeMonitorGroupNotifyPolicyListResponse) SetSuccess(v string) *DescribeMonitorGroupNotifyPolicyListResponse {
	s.Success = &v
	return s
}

func (s *DescribeMonitorGroupNotifyPolicyListResponse) SetRequestId(v string) *DescribeMonitorGroupNotifyPolicyListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMonitorGroupNotifyPolicyListResponse) SetTotal(v int) *DescribeMonitorGroupNotifyPolicyListResponse {
	s.Total = &v
	return s
}

func (s *DescribeMonitorGroupNotifyPolicyListResponse) SetNotifyPolicyList(v *DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyList) *DescribeMonitorGroupNotifyPolicyListResponse {
	s.NotifyPolicyList = v
	return s
}

type DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyList struct {
	NotifyPolicy []*DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy `json:"NotifyPolicy" xml:"NotifyPolicy" require:"true" type:"Repeated"`
}

func (s DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyList) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyList) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyList) SetNotifyPolicy(v []*DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy) *DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyList {
	s.NotifyPolicy = v
	return s
}

type DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy struct {
	Type      *string `json:"Type" xml:"Type" require:"true"`
	Id        *string `json:"Id" xml:"Id" require:"true"`
	StartTime *int64  `json:"StartTime" xml:"StartTime" require:"true"`
	EndTime   *int64  `json:"EndTime" xml:"EndTime" require:"true"`
	GroupId   *string `json:"GroupId" xml:"GroupId" require:"true"`
}

func (s DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy) SetType(v string) *DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy {
	s.Type = &v
	return s
}

func (s *DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy) SetId(v string) *DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy {
	s.Id = &v
	return s
}

func (s *DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy) SetStartTime(v int64) *DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy {
	s.StartTime = &v
	return s
}

func (s *DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy) SetEndTime(v int64) *DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy {
	s.EndTime = &v
	return s
}

func (s *DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy) SetGroupId(v string) *DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy {
	s.GroupId = &v
	return s
}

type DeleteMonitorGroupRequest struct {
	GroupId *int64 `json:"GroupId" xml:"GroupId"`
}

func (s DeleteMonitorGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteMonitorGroupRequest) GoString() string {
	return s.String()
}

func (s *DeleteMonitorGroupRequest) SetGroupId(v int64) *DeleteMonitorGroupRequest {
	s.GroupId = &v
	return s
}

type DeleteMonitorGroupResponse struct {
	RequestId *string                          `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool                            `json:"Success" xml:"Success" require:"true"`
	Code      *int                             `json:"Code" xml:"Code" require:"true"`
	Message   *string                          `json:"Message" xml:"Message" require:"true"`
	Group     *DeleteMonitorGroupResponseGroup `json:"Group" xml:"Group" require:"true" type:"Struct"`
}

func (s DeleteMonitorGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteMonitorGroupResponse) GoString() string {
	return s.String()
}

func (s *DeleteMonitorGroupResponse) SetRequestId(v string) *DeleteMonitorGroupResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteMonitorGroupResponse) SetSuccess(v bool) *DeleteMonitorGroupResponse {
	s.Success = &v
	return s
}

func (s *DeleteMonitorGroupResponse) SetCode(v int) *DeleteMonitorGroupResponse {
	s.Code = &v
	return s
}

func (s *DeleteMonitorGroupResponse) SetMessage(v string) *DeleteMonitorGroupResponse {
	s.Message = &v
	return s
}

func (s *DeleteMonitorGroupResponse) SetGroup(v *DeleteMonitorGroupResponseGroup) *DeleteMonitorGroupResponse {
	s.Group = v
	return s
}

type DeleteMonitorGroupResponseGroup struct {
	GroupName     *string                                       `json:"GroupName" xml:"GroupName" require:"true"`
	ContactGroups *DeleteMonitorGroupResponseGroupContactGroups `json:"ContactGroups" xml:"ContactGroups" require:"true" type:"Struct"`
}

func (s DeleteMonitorGroupResponseGroup) String() string {
	return tea.Prettify(s)
}

func (s DeleteMonitorGroupResponseGroup) GoString() string {
	return s.String()
}

func (s *DeleteMonitorGroupResponseGroup) SetGroupName(v string) *DeleteMonitorGroupResponseGroup {
	s.GroupName = &v
	return s
}

func (s *DeleteMonitorGroupResponseGroup) SetContactGroups(v *DeleteMonitorGroupResponseGroupContactGroups) *DeleteMonitorGroupResponseGroup {
	s.ContactGroups = v
	return s
}

type DeleteMonitorGroupResponseGroupContactGroups struct {
	ContactGroup []*DeleteMonitorGroupResponseGroupContactGroupsContactGroup `json:"ContactGroup" xml:"ContactGroup" require:"true" type:"Repeated"`
}

func (s DeleteMonitorGroupResponseGroupContactGroups) String() string {
	return tea.Prettify(s)
}

func (s DeleteMonitorGroupResponseGroupContactGroups) GoString() string {
	return s.String()
}

func (s *DeleteMonitorGroupResponseGroupContactGroups) SetContactGroup(v []*DeleteMonitorGroupResponseGroupContactGroupsContactGroup) *DeleteMonitorGroupResponseGroupContactGroups {
	s.ContactGroup = v
	return s
}

type DeleteMonitorGroupResponseGroupContactGroupsContactGroup struct {
	Name *string `json:"Name" xml:"Name" require:"true"`
}

func (s DeleteMonitorGroupResponseGroupContactGroupsContactGroup) String() string {
	return tea.Prettify(s)
}

func (s DeleteMonitorGroupResponseGroupContactGroupsContactGroup) GoString() string {
	return s.String()
}

func (s *DeleteMonitorGroupResponseGroupContactGroupsContactGroup) SetName(v string) *DeleteMonitorGroupResponseGroupContactGroupsContactGroup {
	s.Name = &v
	return s
}

type CreateMonitorGroupRequest struct {
	GroupName     *string `json:"GroupName" xml:"GroupName" require:"true"`
	ContactGroups *string `json:"ContactGroups" xml:"ContactGroups"`
}

func (s CreateMonitorGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateMonitorGroupRequest) GoString() string {
	return s.String()
}

func (s *CreateMonitorGroupRequest) SetGroupName(v string) *CreateMonitorGroupRequest {
	s.GroupName = &v
	return s
}

func (s *CreateMonitorGroupRequest) SetContactGroups(v string) *CreateMonitorGroupRequest {
	s.ContactGroups = &v
	return s
}

type CreateMonitorGroupResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *int    `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	GroupId   *int64  `json:"GroupId" xml:"GroupId" require:"true"`
}

func (s CreateMonitorGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateMonitorGroupResponse) GoString() string {
	return s.String()
}

func (s *CreateMonitorGroupResponse) SetRequestId(v string) *CreateMonitorGroupResponse {
	s.RequestId = &v
	return s
}

func (s *CreateMonitorGroupResponse) SetSuccess(v bool) *CreateMonitorGroupResponse {
	s.Success = &v
	return s
}

func (s *CreateMonitorGroupResponse) SetCode(v int) *CreateMonitorGroupResponse {
	s.Code = &v
	return s
}

func (s *CreateMonitorGroupResponse) SetMessage(v string) *CreateMonitorGroupResponse {
	s.Message = &v
	return s
}

func (s *CreateMonitorGroupResponse) SetGroupId(v int64) *CreateMonitorGroupResponse {
	s.GroupId = &v
	return s
}

type DescribeMonitorGroupsRequest struct {
	SelectContactGroups    *bool                              `json:"SelectContactGroups" xml:"SelectContactGroups"`
	PageNumber             *int                               `json:"PageNumber" xml:"PageNumber"`
	PageSize               *int                               `json:"PageSize" xml:"PageSize"`
	Keyword                *string                            `json:"Keyword" xml:"Keyword"`
	InstanceId             *string                            `json:"InstanceId" xml:"InstanceId"`
	GroupName              *string                            `json:"GroupName" xml:"GroupName"`
	IncludeTemplateHistory *bool                              `json:"IncludeTemplateHistory" xml:"IncludeTemplateHistory"`
	Tag                    []*DescribeMonitorGroupsRequestTag `json:"Tag" xml:"Tag" type:"Repeated"`
	Type                   *string                            `json:"Type" xml:"Type"`
	DynamicTagRuleId       *string                            `json:"DynamicTagRuleId" xml:"DynamicTagRuleId"`
	GroupId                *string                            `json:"GroupId" xml:"GroupId"`
	ServiceId              *string                            `json:"ServiceId" xml:"ServiceId"`
}

func (s DescribeMonitorGroupsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupsRequest) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupsRequest) SetSelectContactGroups(v bool) *DescribeMonitorGroupsRequest {
	s.SelectContactGroups = &v
	return s
}

func (s *DescribeMonitorGroupsRequest) SetPageNumber(v int) *DescribeMonitorGroupsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeMonitorGroupsRequest) SetPageSize(v int) *DescribeMonitorGroupsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeMonitorGroupsRequest) SetKeyword(v string) *DescribeMonitorGroupsRequest {
	s.Keyword = &v
	return s
}

func (s *DescribeMonitorGroupsRequest) SetInstanceId(v string) *DescribeMonitorGroupsRequest {
	s.InstanceId = &v
	return s
}

func (s *DescribeMonitorGroupsRequest) SetGroupName(v string) *DescribeMonitorGroupsRequest {
	s.GroupName = &v
	return s
}

func (s *DescribeMonitorGroupsRequest) SetIncludeTemplateHistory(v bool) *DescribeMonitorGroupsRequest {
	s.IncludeTemplateHistory = &v
	return s
}

func (s *DescribeMonitorGroupsRequest) SetTag(v []*DescribeMonitorGroupsRequestTag) *DescribeMonitorGroupsRequest {
	s.Tag = v
	return s
}

func (s *DescribeMonitorGroupsRequest) SetType(v string) *DescribeMonitorGroupsRequest {
	s.Type = &v
	return s
}

func (s *DescribeMonitorGroupsRequest) SetDynamicTagRuleId(v string) *DescribeMonitorGroupsRequest {
	s.DynamicTagRuleId = &v
	return s
}

func (s *DescribeMonitorGroupsRequest) SetGroupId(v string) *DescribeMonitorGroupsRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeMonitorGroupsRequest) SetServiceId(v string) *DescribeMonitorGroupsRequest {
	s.ServiceId = &v
	return s
}

type DescribeMonitorGroupsRequestTag struct {
	Key   *string `json:"Key" xml:"Key"`
	Value *string `json:"Value" xml:"Value"`
}

func (s DescribeMonitorGroupsRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupsRequestTag) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupsRequestTag) SetKey(v string) *DescribeMonitorGroupsRequestTag {
	s.Key = &v
	return s
}

func (s *DescribeMonitorGroupsRequestTag) SetValue(v string) *DescribeMonitorGroupsRequestTag {
	s.Value = &v
	return s
}

type DescribeMonitorGroupsResponse struct {
	RequestId  *string                                 `json:"RequestId" xml:"RequestId" require:"true"`
	Success    *bool                                   `json:"Success" xml:"Success" require:"true"`
	Code       *int                                    `json:"Code" xml:"Code" require:"true"`
	Message    *string                                 `json:"Message" xml:"Message" require:"true"`
	PageNumber *int                                    `json:"PageNumber" xml:"PageNumber" require:"true"`
	PageSize   *int                                    `json:"PageSize" xml:"PageSize" require:"true"`
	Total      *int                                    `json:"Total" xml:"Total" require:"true"`
	Resources  *DescribeMonitorGroupsResponseResources `json:"Resources" xml:"Resources" require:"true" type:"Struct"`
}

func (s DescribeMonitorGroupsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupsResponse) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupsResponse) SetRequestId(v string) *DescribeMonitorGroupsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMonitorGroupsResponse) SetSuccess(v bool) *DescribeMonitorGroupsResponse {
	s.Success = &v
	return s
}

func (s *DescribeMonitorGroupsResponse) SetCode(v int) *DescribeMonitorGroupsResponse {
	s.Code = &v
	return s
}

func (s *DescribeMonitorGroupsResponse) SetMessage(v string) *DescribeMonitorGroupsResponse {
	s.Message = &v
	return s
}

func (s *DescribeMonitorGroupsResponse) SetPageNumber(v int) *DescribeMonitorGroupsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeMonitorGroupsResponse) SetPageSize(v int) *DescribeMonitorGroupsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeMonitorGroupsResponse) SetTotal(v int) *DescribeMonitorGroupsResponse {
	s.Total = &v
	return s
}

func (s *DescribeMonitorGroupsResponse) SetResources(v *DescribeMonitorGroupsResponseResources) *DescribeMonitorGroupsResponse {
	s.Resources = v
	return s
}

type DescribeMonitorGroupsResponseResources struct {
	Resource []*DescribeMonitorGroupsResponseResourcesResource `json:"Resource" xml:"Resource" require:"true" type:"Repeated"`
}

func (s DescribeMonitorGroupsResponseResources) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupsResponseResources) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupsResponseResources) SetResource(v []*DescribeMonitorGroupsResponseResourcesResource) *DescribeMonitorGroupsResponseResources {
	s.Resource = v
	return s
}

type DescribeMonitorGroupsResponseResourcesResource struct {
	GroupId              *int64                                                       `json:"GroupId" xml:"GroupId" require:"true"`
	GroupName            *string                                                      `json:"GroupName" xml:"GroupName" require:"true"`
	ServiceId            *string                                                      `json:"ServiceId" xml:"ServiceId" require:"true"`
	Type                 *string                                                      `json:"Type" xml:"Type" require:"true"`
	GmtModified          *int64                                                       `json:"GmtModified" xml:"GmtModified" require:"true"`
	GmtCreate            *int64                                                       `json:"GmtCreate" xml:"GmtCreate" require:"true"`
	BindUrl              *string                                                      `json:"BindUrl" xml:"BindUrl" require:"true"`
	DynamicTagRuleId     *string                                                      `json:"DynamicTagRuleId" xml:"DynamicTagRuleId" require:"true"`
	GroupFounderTagKey   *string                                                      `json:"GroupFounderTagKey" xml:"GroupFounderTagKey" require:"true"`
	GroupFounderTagValue *string                                                      `json:"GroupFounderTagValue" xml:"GroupFounderTagValue" require:"true"`
	ContactGroups        *DescribeMonitorGroupsResponseResourcesResourceContactGroups `json:"ContactGroups" xml:"ContactGroups" require:"true" type:"Struct"`
	Tags                 *DescribeMonitorGroupsResponseResourcesResourceTags          `json:"Tags" xml:"Tags" require:"true" type:"Struct"`
	TemplateIds          *DescribeMonitorGroupsResponseResourcesResourceTemplateIds   `json:"TemplateIds" xml:"TemplateIds" require:"true" type:"Struct"`
}

func (s DescribeMonitorGroupsResponseResourcesResource) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupsResponseResourcesResource) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupsResponseResourcesResource) SetGroupId(v int64) *DescribeMonitorGroupsResponseResourcesResource {
	s.GroupId = &v
	return s
}

func (s *DescribeMonitorGroupsResponseResourcesResource) SetGroupName(v string) *DescribeMonitorGroupsResponseResourcesResource {
	s.GroupName = &v
	return s
}

func (s *DescribeMonitorGroupsResponseResourcesResource) SetServiceId(v string) *DescribeMonitorGroupsResponseResourcesResource {
	s.ServiceId = &v
	return s
}

func (s *DescribeMonitorGroupsResponseResourcesResource) SetType(v string) *DescribeMonitorGroupsResponseResourcesResource {
	s.Type = &v
	return s
}

func (s *DescribeMonitorGroupsResponseResourcesResource) SetGmtModified(v int64) *DescribeMonitorGroupsResponseResourcesResource {
	s.GmtModified = &v
	return s
}

func (s *DescribeMonitorGroupsResponseResourcesResource) SetGmtCreate(v int64) *DescribeMonitorGroupsResponseResourcesResource {
	s.GmtCreate = &v
	return s
}

func (s *DescribeMonitorGroupsResponseResourcesResource) SetBindUrl(v string) *DescribeMonitorGroupsResponseResourcesResource {
	s.BindUrl = &v
	return s
}

func (s *DescribeMonitorGroupsResponseResourcesResource) SetDynamicTagRuleId(v string) *DescribeMonitorGroupsResponseResourcesResource {
	s.DynamicTagRuleId = &v
	return s
}

func (s *DescribeMonitorGroupsResponseResourcesResource) SetGroupFounderTagKey(v string) *DescribeMonitorGroupsResponseResourcesResource {
	s.GroupFounderTagKey = &v
	return s
}

func (s *DescribeMonitorGroupsResponseResourcesResource) SetGroupFounderTagValue(v string) *DescribeMonitorGroupsResponseResourcesResource {
	s.GroupFounderTagValue = &v
	return s
}

func (s *DescribeMonitorGroupsResponseResourcesResource) SetContactGroups(v *DescribeMonitorGroupsResponseResourcesResourceContactGroups) *DescribeMonitorGroupsResponseResourcesResource {
	s.ContactGroups = v
	return s
}

func (s *DescribeMonitorGroupsResponseResourcesResource) SetTags(v *DescribeMonitorGroupsResponseResourcesResourceTags) *DescribeMonitorGroupsResponseResourcesResource {
	s.Tags = v
	return s
}

func (s *DescribeMonitorGroupsResponseResourcesResource) SetTemplateIds(v *DescribeMonitorGroupsResponseResourcesResourceTemplateIds) *DescribeMonitorGroupsResponseResourcesResource {
	s.TemplateIds = v
	return s
}

type DescribeMonitorGroupsResponseResourcesResourceContactGroups struct {
	ContactGroup []*DescribeMonitorGroupsResponseResourcesResourceContactGroupsContactGroup `json:"ContactGroup" xml:"ContactGroup" require:"true" type:"Repeated"`
}

func (s DescribeMonitorGroupsResponseResourcesResourceContactGroups) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupsResponseResourcesResourceContactGroups) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupsResponseResourcesResourceContactGroups) SetContactGroup(v []*DescribeMonitorGroupsResponseResourcesResourceContactGroupsContactGroup) *DescribeMonitorGroupsResponseResourcesResourceContactGroups {
	s.ContactGroup = v
	return s
}

type DescribeMonitorGroupsResponseResourcesResourceContactGroupsContactGroup struct {
	Name *string `json:"Name" xml:"Name" require:"true"`
}

func (s DescribeMonitorGroupsResponseResourcesResourceContactGroupsContactGroup) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupsResponseResourcesResourceContactGroupsContactGroup) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupsResponseResourcesResourceContactGroupsContactGroup) SetName(v string) *DescribeMonitorGroupsResponseResourcesResourceContactGroupsContactGroup {
	s.Name = &v
	return s
}

type DescribeMonitorGroupsResponseResourcesResourceTags struct {
	Tag []*DescribeMonitorGroupsResponseResourcesResourceTagsTag `json:"Tag" xml:"Tag" require:"true" type:"Repeated"`
}

func (s DescribeMonitorGroupsResponseResourcesResourceTags) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupsResponseResourcesResourceTags) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupsResponseResourcesResourceTags) SetTag(v []*DescribeMonitorGroupsResponseResourcesResourceTagsTag) *DescribeMonitorGroupsResponseResourcesResourceTags {
	s.Tag = v
	return s
}

type DescribeMonitorGroupsResponseResourcesResourceTagsTag struct {
	Key   *string `json:"Key" xml:"Key" require:"true"`
	Value *string `json:"Value" xml:"Value" require:"true"`
}

func (s DescribeMonitorGroupsResponseResourcesResourceTagsTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupsResponseResourcesResourceTagsTag) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupsResponseResourcesResourceTagsTag) SetKey(v string) *DescribeMonitorGroupsResponseResourcesResourceTagsTag {
	s.Key = &v
	return s
}

func (s *DescribeMonitorGroupsResponseResourcesResourceTagsTag) SetValue(v string) *DescribeMonitorGroupsResponseResourcesResourceTagsTag {
	s.Value = &v
	return s
}

type DescribeMonitorGroupsResponseResourcesResourceTemplateIds struct {
	TemplateId []*string `json:"TemplateId" xml:"TemplateId" require:"true" type:"Repeated"`
}

func (s DescribeMonitorGroupsResponseResourcesResourceTemplateIds) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupsResponseResourcesResourceTemplateIds) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupsResponseResourcesResourceTemplateIds) SetTemplateId(v []*string) *DescribeMonitorGroupsResponseResourcesResourceTemplateIds {
	s.TemplateId = v
	return s
}

type DeleteMonitorGroupNotifyPolicyRequest struct {
	PolicyType *string `json:"PolicyType" xml:"PolicyType" require:"true"`
	GroupId    *string `json:"GroupId" xml:"GroupId"`
}

func (s DeleteMonitorGroupNotifyPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteMonitorGroupNotifyPolicyRequest) GoString() string {
	return s.String()
}

func (s *DeleteMonitorGroupNotifyPolicyRequest) SetPolicyType(v string) *DeleteMonitorGroupNotifyPolicyRequest {
	s.PolicyType = &v
	return s
}

func (s *DeleteMonitorGroupNotifyPolicyRequest) SetGroupId(v string) *DeleteMonitorGroupNotifyPolicyRequest {
	s.GroupId = &v
	return s
}

type DeleteMonitorGroupNotifyPolicyResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *string `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Result    *int    `json:"Result" xml:"Result" require:"true"`
}

func (s DeleteMonitorGroupNotifyPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteMonitorGroupNotifyPolicyResponse) GoString() string {
	return s.String()
}

func (s *DeleteMonitorGroupNotifyPolicyResponse) SetCode(v string) *DeleteMonitorGroupNotifyPolicyResponse {
	s.Code = &v
	return s
}

func (s *DeleteMonitorGroupNotifyPolicyResponse) SetMessage(v string) *DeleteMonitorGroupNotifyPolicyResponse {
	s.Message = &v
	return s
}

func (s *DeleteMonitorGroupNotifyPolicyResponse) SetSuccess(v string) *DeleteMonitorGroupNotifyPolicyResponse {
	s.Success = &v
	return s
}

func (s *DeleteMonitorGroupNotifyPolicyResponse) SetRequestId(v string) *DeleteMonitorGroupNotifyPolicyResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteMonitorGroupNotifyPolicyResponse) SetResult(v int) *DeleteMonitorGroupNotifyPolicyResponse {
	s.Result = &v
	return s
}

type DescribeMonitorGroupDynamicRulesRequest struct {
	GroupId *int64 `json:"GroupId" xml:"GroupId" require:"true"`
}

func (s DescribeMonitorGroupDynamicRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupDynamicRulesRequest) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupDynamicRulesRequest) SetGroupId(v int64) *DescribeMonitorGroupDynamicRulesRequest {
	s.GroupId = &v
	return s
}

type DescribeMonitorGroupDynamicRulesResponse struct {
	RequestId  *string                                           `json:"RequestId" xml:"RequestId" require:"true"`
	Success    *bool                                             `json:"Success" xml:"Success" require:"true"`
	Code       *int                                              `json:"Code" xml:"Code" require:"true"`
	Message    *string                                           `json:"Message" xml:"Message" require:"true"`
	PageNumber *int                                              `json:"PageNumber" xml:"PageNumber" require:"true"`
	PageSize   *int                                              `json:"PageSize" xml:"PageSize" require:"true"`
	Total      *int                                              `json:"Total" xml:"Total" require:"true"`
	Resource   *DescribeMonitorGroupDynamicRulesResponseResource `json:"Resource" xml:"Resource" require:"true" type:"Struct"`
}

func (s DescribeMonitorGroupDynamicRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupDynamicRulesResponse) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupDynamicRulesResponse) SetRequestId(v string) *DescribeMonitorGroupDynamicRulesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMonitorGroupDynamicRulesResponse) SetSuccess(v bool) *DescribeMonitorGroupDynamicRulesResponse {
	s.Success = &v
	return s
}

func (s *DescribeMonitorGroupDynamicRulesResponse) SetCode(v int) *DescribeMonitorGroupDynamicRulesResponse {
	s.Code = &v
	return s
}

func (s *DescribeMonitorGroupDynamicRulesResponse) SetMessage(v string) *DescribeMonitorGroupDynamicRulesResponse {
	s.Message = &v
	return s
}

func (s *DescribeMonitorGroupDynamicRulesResponse) SetPageNumber(v int) *DescribeMonitorGroupDynamicRulesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeMonitorGroupDynamicRulesResponse) SetPageSize(v int) *DescribeMonitorGroupDynamicRulesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeMonitorGroupDynamicRulesResponse) SetTotal(v int) *DescribeMonitorGroupDynamicRulesResponse {
	s.Total = &v
	return s
}

func (s *DescribeMonitorGroupDynamicRulesResponse) SetResource(v *DescribeMonitorGroupDynamicRulesResponseResource) *DescribeMonitorGroupDynamicRulesResponse {
	s.Resource = v
	return s
}

type DescribeMonitorGroupDynamicRulesResponseResource struct {
	Resource []*DescribeMonitorGroupDynamicRulesResponseResourceResource `json:"Resource" xml:"Resource" require:"true" type:"Repeated"`
}

func (s DescribeMonitorGroupDynamicRulesResponseResource) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupDynamicRulesResponseResource) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupDynamicRulesResponseResource) SetResource(v []*DescribeMonitorGroupDynamicRulesResponseResourceResource) *DescribeMonitorGroupDynamicRulesResponseResource {
	s.Resource = v
	return s
}

type DescribeMonitorGroupDynamicRulesResponseResourceResource struct {
	GroupId        *int64                                                           `json:"GroupId" xml:"GroupId" require:"true"`
	Category       *string                                                          `json:"Category" xml:"Category" require:"true"`
	FilterRelation *string                                                          `json:"FilterRelation" xml:"FilterRelation" require:"true"`
	Filters        *DescribeMonitorGroupDynamicRulesResponseResourceResourceFilters `json:"Filters" xml:"Filters" require:"true" type:"Struct"`
}

func (s DescribeMonitorGroupDynamicRulesResponseResourceResource) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupDynamicRulesResponseResourceResource) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupDynamicRulesResponseResourceResource) SetGroupId(v int64) *DescribeMonitorGroupDynamicRulesResponseResourceResource {
	s.GroupId = &v
	return s
}

func (s *DescribeMonitorGroupDynamicRulesResponseResourceResource) SetCategory(v string) *DescribeMonitorGroupDynamicRulesResponseResourceResource {
	s.Category = &v
	return s
}

func (s *DescribeMonitorGroupDynamicRulesResponseResourceResource) SetFilterRelation(v string) *DescribeMonitorGroupDynamicRulesResponseResourceResource {
	s.FilterRelation = &v
	return s
}

func (s *DescribeMonitorGroupDynamicRulesResponseResourceResource) SetFilters(v *DescribeMonitorGroupDynamicRulesResponseResourceResourceFilters) *DescribeMonitorGroupDynamicRulesResponseResourceResource {
	s.Filters = v
	return s
}

type DescribeMonitorGroupDynamicRulesResponseResourceResourceFilters struct {
	Filter []*DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter `json:"Filter" xml:"Filter" require:"true" type:"Repeated"`
}

func (s DescribeMonitorGroupDynamicRulesResponseResourceResourceFilters) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupDynamicRulesResponseResourceResourceFilters) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupDynamicRulesResponseResourceResourceFilters) SetFilter(v []*DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter) *DescribeMonitorGroupDynamicRulesResponseResourceResourceFilters {
	s.Filter = v
	return s
}

type DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter struct {
	Function *string `json:"Function" xml:"Function" require:"true"`
	Name     *string `json:"Name" xml:"Name" require:"true"`
	Value    *string `json:"Value" xml:"Value" require:"true"`
}

func (s DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter) SetFunction(v string) *DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter {
	s.Function = &v
	return s
}

func (s *DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter) SetName(v string) *DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter {
	s.Name = &v
	return s
}

func (s *DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter) SetValue(v string) *DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter {
	s.Value = &v
	return s
}

type CreateMonitorGroupInstancesRequest struct {
	GroupId   *int64                                         `json:"GroupId" xml:"GroupId" require:"true"`
	Instances []*CreateMonitorGroupInstancesRequestInstances `json:"Instances" xml:"Instances" require:"true" type:"Repeated"`
}

func (s CreateMonitorGroupInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateMonitorGroupInstancesRequest) GoString() string {
	return s.String()
}

func (s *CreateMonitorGroupInstancesRequest) SetGroupId(v int64) *CreateMonitorGroupInstancesRequest {
	s.GroupId = &v
	return s
}

func (s *CreateMonitorGroupInstancesRequest) SetInstances(v []*CreateMonitorGroupInstancesRequestInstances) *CreateMonitorGroupInstancesRequest {
	s.Instances = v
	return s
}

type CreateMonitorGroupInstancesRequestInstances struct {
	Category     *string `json:"Category" xml:"Category" require:"true"`
	InstanceId   *string `json:"InstanceId" xml:"InstanceId" require:"true"`
	RegionId     *string `json:"RegionId" xml:"RegionId" require:"true"`
	InstanceName *string `json:"InstanceName" xml:"InstanceName" require:"true"`
}

func (s CreateMonitorGroupInstancesRequestInstances) String() string {
	return tea.Prettify(s)
}

func (s CreateMonitorGroupInstancesRequestInstances) GoString() string {
	return s.String()
}

func (s *CreateMonitorGroupInstancesRequestInstances) SetCategory(v string) *CreateMonitorGroupInstancesRequestInstances {
	s.Category = &v
	return s
}

func (s *CreateMonitorGroupInstancesRequestInstances) SetInstanceId(v string) *CreateMonitorGroupInstancesRequestInstances {
	s.InstanceId = &v
	return s
}

func (s *CreateMonitorGroupInstancesRequestInstances) SetRegionId(v string) *CreateMonitorGroupInstancesRequestInstances {
	s.RegionId = &v
	return s
}

func (s *CreateMonitorGroupInstancesRequestInstances) SetInstanceName(v string) *CreateMonitorGroupInstancesRequestInstances {
	s.InstanceName = &v
	return s
}

type CreateMonitorGroupInstancesResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *int    `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s CreateMonitorGroupInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateMonitorGroupInstancesResponse) GoString() string {
	return s.String()
}

func (s *CreateMonitorGroupInstancesResponse) SetRequestId(v string) *CreateMonitorGroupInstancesResponse {
	s.RequestId = &v
	return s
}

func (s *CreateMonitorGroupInstancesResponse) SetSuccess(v bool) *CreateMonitorGroupInstancesResponse {
	s.Success = &v
	return s
}

func (s *CreateMonitorGroupInstancesResponse) SetCode(v int) *CreateMonitorGroupInstancesResponse {
	s.Code = &v
	return s
}

func (s *CreateMonitorGroupInstancesResponse) SetMessage(v string) *CreateMonitorGroupInstancesResponse {
	s.Message = &v
	return s
}

type CreateMonitorGroupNotifyPolicyRequest struct {
	PolicyType *string `json:"PolicyType" xml:"PolicyType" require:"true"`
	GroupId    *string `json:"GroupId" xml:"GroupId" require:"true"`
	StartTime  *int64  `json:"StartTime" xml:"StartTime" require:"true"`
	EndTime    *int64  `json:"EndTime" xml:"EndTime" require:"true"`
}

func (s CreateMonitorGroupNotifyPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateMonitorGroupNotifyPolicyRequest) GoString() string {
	return s.String()
}

func (s *CreateMonitorGroupNotifyPolicyRequest) SetPolicyType(v string) *CreateMonitorGroupNotifyPolicyRequest {
	s.PolicyType = &v
	return s
}

func (s *CreateMonitorGroupNotifyPolicyRequest) SetGroupId(v string) *CreateMonitorGroupNotifyPolicyRequest {
	s.GroupId = &v
	return s
}

func (s *CreateMonitorGroupNotifyPolicyRequest) SetStartTime(v int64) *CreateMonitorGroupNotifyPolicyRequest {
	s.StartTime = &v
	return s
}

func (s *CreateMonitorGroupNotifyPolicyRequest) SetEndTime(v int64) *CreateMonitorGroupNotifyPolicyRequest {
	s.EndTime = &v
	return s
}

type CreateMonitorGroupNotifyPolicyResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *string `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Result    *int    `json:"Result" xml:"Result" require:"true"`
}

func (s CreateMonitorGroupNotifyPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateMonitorGroupNotifyPolicyResponse) GoString() string {
	return s.String()
}

func (s *CreateMonitorGroupNotifyPolicyResponse) SetCode(v string) *CreateMonitorGroupNotifyPolicyResponse {
	s.Code = &v
	return s
}

func (s *CreateMonitorGroupNotifyPolicyResponse) SetMessage(v string) *CreateMonitorGroupNotifyPolicyResponse {
	s.Message = &v
	return s
}

func (s *CreateMonitorGroupNotifyPolicyResponse) SetSuccess(v string) *CreateMonitorGroupNotifyPolicyResponse {
	s.Success = &v
	return s
}

func (s *CreateMonitorGroupNotifyPolicyResponse) SetRequestId(v string) *CreateMonitorGroupNotifyPolicyResponse {
	s.RequestId = &v
	return s
}

func (s *CreateMonitorGroupNotifyPolicyResponse) SetResult(v int) *CreateMonitorGroupNotifyPolicyResponse {
	s.Result = &v
	return s
}

type DeleteMonitorGroupInstancesRequest struct {
	GroupId        *int64  `json:"GroupId" xml:"GroupId" require:"true"`
	InstanceIdList *string `json:"InstanceIdList" xml:"InstanceIdList" require:"true"`
	Category       *string `json:"Category" xml:"Category" require:"true"`
}

func (s DeleteMonitorGroupInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteMonitorGroupInstancesRequest) GoString() string {
	return s.String()
}

func (s *DeleteMonitorGroupInstancesRequest) SetGroupId(v int64) *DeleteMonitorGroupInstancesRequest {
	s.GroupId = &v
	return s
}

func (s *DeleteMonitorGroupInstancesRequest) SetInstanceIdList(v string) *DeleteMonitorGroupInstancesRequest {
	s.InstanceIdList = &v
	return s
}

func (s *DeleteMonitorGroupInstancesRequest) SetCategory(v string) *DeleteMonitorGroupInstancesRequest {
	s.Category = &v
	return s
}

type DeleteMonitorGroupInstancesResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *int    `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s DeleteMonitorGroupInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteMonitorGroupInstancesResponse) GoString() string {
	return s.String()
}

func (s *DeleteMonitorGroupInstancesResponse) SetRequestId(v string) *DeleteMonitorGroupInstancesResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteMonitorGroupInstancesResponse) SetSuccess(v bool) *DeleteMonitorGroupInstancesResponse {
	s.Success = &v
	return s
}

func (s *DeleteMonitorGroupInstancesResponse) SetCode(v int) *DeleteMonitorGroupInstancesResponse {
	s.Code = &v
	return s
}

func (s *DeleteMonitorGroupInstancesResponse) SetMessage(v string) *DeleteMonitorGroupInstancesResponse {
	s.Message = &v
	return s
}

type DeleteMonitorGroupDynamicRuleRequest struct {
	GroupId  *int64  `json:"GroupId" xml:"GroupId" require:"true"`
	Category *string `json:"Category" xml:"Category" require:"true"`
}

func (s DeleteMonitorGroupDynamicRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteMonitorGroupDynamicRuleRequest) GoString() string {
	return s.String()
}

func (s *DeleteMonitorGroupDynamicRuleRequest) SetGroupId(v int64) *DeleteMonitorGroupDynamicRuleRequest {
	s.GroupId = &v
	return s
}

func (s *DeleteMonitorGroupDynamicRuleRequest) SetCategory(v string) *DeleteMonitorGroupDynamicRuleRequest {
	s.Category = &v
	return s
}

type DeleteMonitorGroupDynamicRuleResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *int    `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s DeleteMonitorGroupDynamicRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteMonitorGroupDynamicRuleResponse) GoString() string {
	return s.String()
}

func (s *DeleteMonitorGroupDynamicRuleResponse) SetRequestId(v string) *DeleteMonitorGroupDynamicRuleResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteMonitorGroupDynamicRuleResponse) SetSuccess(v bool) *DeleteMonitorGroupDynamicRuleResponse {
	s.Success = &v
	return s
}

func (s *DeleteMonitorGroupDynamicRuleResponse) SetCode(v int) *DeleteMonitorGroupDynamicRuleResponse {
	s.Code = &v
	return s
}

func (s *DeleteMonitorGroupDynamicRuleResponse) SetMessage(v string) *DeleteMonitorGroupDynamicRuleResponse {
	s.Message = &v
	return s
}

type PutMonitorGroupDynamicRuleRequest struct {
	GroupId    *int64                                         `json:"GroupId" xml:"GroupId" require:"true"`
	GroupRules []*PutMonitorGroupDynamicRuleRequestGroupRules `json:"GroupRules" xml:"GroupRules" require:"true" type:"Repeated"`
}

func (s PutMonitorGroupDynamicRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s PutMonitorGroupDynamicRuleRequest) GoString() string {
	return s.String()
}

func (s *PutMonitorGroupDynamicRuleRequest) SetGroupId(v int64) *PutMonitorGroupDynamicRuleRequest {
	s.GroupId = &v
	return s
}

func (s *PutMonitorGroupDynamicRuleRequest) SetGroupRules(v []*PutMonitorGroupDynamicRuleRequestGroupRules) *PutMonitorGroupDynamicRuleRequest {
	s.GroupRules = v
	return s
}

type PutMonitorGroupDynamicRuleRequestGroupRules struct {
	Category       *string                                               `json:"Category" xml:"Category" require:"true"`
	FilterRelation *string                                               `json:"FilterRelation" xml:"FilterRelation" require:"true"`
	Filters        []*PutMonitorGroupDynamicRuleRequestGroupRulesFilters `json:"Filters" xml:"Filters" require:"true" type:"Repeated"`
}

func (s PutMonitorGroupDynamicRuleRequestGroupRules) String() string {
	return tea.Prettify(s)
}

func (s PutMonitorGroupDynamicRuleRequestGroupRules) GoString() string {
	return s.String()
}

func (s *PutMonitorGroupDynamicRuleRequestGroupRules) SetCategory(v string) *PutMonitorGroupDynamicRuleRequestGroupRules {
	s.Category = &v
	return s
}

func (s *PutMonitorGroupDynamicRuleRequestGroupRules) SetFilterRelation(v string) *PutMonitorGroupDynamicRuleRequestGroupRules {
	s.FilterRelation = &v
	return s
}

func (s *PutMonitorGroupDynamicRuleRequestGroupRules) SetFilters(v []*PutMonitorGroupDynamicRuleRequestGroupRulesFilters) *PutMonitorGroupDynamicRuleRequestGroupRules {
	s.Filters = v
	return s
}

type PutMonitorGroupDynamicRuleRequestGroupRulesFilters struct {
	Name     *string `json:"Name" xml:"Name" require:"true"`
	Function *string `json:"Function" xml:"Function" require:"true"`
	Value    *string `json:"Value" xml:"Value" require:"true"`
}

func (s PutMonitorGroupDynamicRuleRequestGroupRulesFilters) String() string {
	return tea.Prettify(s)
}

func (s PutMonitorGroupDynamicRuleRequestGroupRulesFilters) GoString() string {
	return s.String()
}

func (s *PutMonitorGroupDynamicRuleRequestGroupRulesFilters) SetName(v string) *PutMonitorGroupDynamicRuleRequestGroupRulesFilters {
	s.Name = &v
	return s
}

func (s *PutMonitorGroupDynamicRuleRequestGroupRulesFilters) SetFunction(v string) *PutMonitorGroupDynamicRuleRequestGroupRulesFilters {
	s.Function = &v
	return s
}

func (s *PutMonitorGroupDynamicRuleRequestGroupRulesFilters) SetValue(v string) *PutMonitorGroupDynamicRuleRequestGroupRulesFilters {
	s.Value = &v
	return s
}

type PutMonitorGroupDynamicRuleResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *int    `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s PutMonitorGroupDynamicRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s PutMonitorGroupDynamicRuleResponse) GoString() string {
	return s.String()
}

func (s *PutMonitorGroupDynamicRuleResponse) SetRequestId(v string) *PutMonitorGroupDynamicRuleResponse {
	s.RequestId = &v
	return s
}

func (s *PutMonitorGroupDynamicRuleResponse) SetSuccess(v bool) *PutMonitorGroupDynamicRuleResponse {
	s.Success = &v
	return s
}

func (s *PutMonitorGroupDynamicRuleResponse) SetCode(v int) *PutMonitorGroupDynamicRuleResponse {
	s.Code = &v
	return s
}

func (s *PutMonitorGroupDynamicRuleResponse) SetMessage(v string) *PutMonitorGroupDynamicRuleResponse {
	s.Message = &v
	return s
}

type DescribeMonitorGroupInstancesRequest struct {
	PageSize    *int    `json:"PageSize" xml:"PageSize"`
	PageNumber  *int    `json:"PageNumber" xml:"PageNumber"`
	GroupId     *int64  `json:"GroupId" xml:"GroupId" require:"true"`
	Category    *string `json:"Category" xml:"Category"`
	Keyword     *string `json:"Keyword" xml:"Keyword"`
	InstanceIds *string `json:"InstanceIds" xml:"InstanceIds"`
}

func (s DescribeMonitorGroupInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupInstancesRequest) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupInstancesRequest) SetPageSize(v int) *DescribeMonitorGroupInstancesRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeMonitorGroupInstancesRequest) SetPageNumber(v int) *DescribeMonitorGroupInstancesRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeMonitorGroupInstancesRequest) SetGroupId(v int64) *DescribeMonitorGroupInstancesRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeMonitorGroupInstancesRequest) SetCategory(v string) *DescribeMonitorGroupInstancesRequest {
	s.Category = &v
	return s
}

func (s *DescribeMonitorGroupInstancesRequest) SetKeyword(v string) *DescribeMonitorGroupInstancesRequest {
	s.Keyword = &v
	return s
}

func (s *DescribeMonitorGroupInstancesRequest) SetInstanceIds(v string) *DescribeMonitorGroupInstancesRequest {
	s.InstanceIds = &v
	return s
}

type DescribeMonitorGroupInstancesResponse struct {
	RequestId  *string                                         `json:"RequestId" xml:"RequestId" require:"true"`
	Success    *bool                                           `json:"Success" xml:"Success" require:"true"`
	Code       *int                                            `json:"Code" xml:"Code" require:"true"`
	Message    *string                                         `json:"Message" xml:"Message" require:"true"`
	PageNumber *int                                            `json:"PageNumber" xml:"PageNumber" require:"true"`
	PageSize   *int                                            `json:"PageSize" xml:"PageSize" require:"true"`
	Total      *int                                            `json:"Total" xml:"Total" require:"true"`
	Resources  *DescribeMonitorGroupInstancesResponseResources `json:"Resources" xml:"Resources" require:"true" type:"Struct"`
}

func (s DescribeMonitorGroupInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupInstancesResponse) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupInstancesResponse) SetRequestId(v string) *DescribeMonitorGroupInstancesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMonitorGroupInstancesResponse) SetSuccess(v bool) *DescribeMonitorGroupInstancesResponse {
	s.Success = &v
	return s
}

func (s *DescribeMonitorGroupInstancesResponse) SetCode(v int) *DescribeMonitorGroupInstancesResponse {
	s.Code = &v
	return s
}

func (s *DescribeMonitorGroupInstancesResponse) SetMessage(v string) *DescribeMonitorGroupInstancesResponse {
	s.Message = &v
	return s
}

func (s *DescribeMonitorGroupInstancesResponse) SetPageNumber(v int) *DescribeMonitorGroupInstancesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeMonitorGroupInstancesResponse) SetPageSize(v int) *DescribeMonitorGroupInstancesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeMonitorGroupInstancesResponse) SetTotal(v int) *DescribeMonitorGroupInstancesResponse {
	s.Total = &v
	return s
}

func (s *DescribeMonitorGroupInstancesResponse) SetResources(v *DescribeMonitorGroupInstancesResponseResources) *DescribeMonitorGroupInstancesResponse {
	s.Resources = v
	return s
}

type DescribeMonitorGroupInstancesResponseResources struct {
	Resource []*DescribeMonitorGroupInstancesResponseResourcesResource `json:"Resource" xml:"Resource" require:"true" type:"Repeated"`
}

func (s DescribeMonitorGroupInstancesResponseResources) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupInstancesResponseResources) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupInstancesResponseResources) SetResource(v []*DescribeMonitorGroupInstancesResponseResourcesResource) *DescribeMonitorGroupInstancesResponseResources {
	s.Resource = v
	return s
}

type DescribeMonitorGroupInstancesResponseResourcesResource struct {
	Id           *int64  `json:"Id" xml:"Id" require:"true"`
	RegionId     *string `json:"RegionId" xml:"RegionId" require:"true"`
	InstanceId   *string `json:"InstanceId" xml:"InstanceId" require:"true"`
	Category     *string `json:"Category" xml:"Category" require:"true"`
	InstanceName *string `json:"InstanceName" xml:"InstanceName" require:"true"`
}

func (s DescribeMonitorGroupInstancesResponseResourcesResource) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupInstancesResponseResourcesResource) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupInstancesResponseResourcesResource) SetId(v int64) *DescribeMonitorGroupInstancesResponseResourcesResource {
	s.Id = &v
	return s
}

func (s *DescribeMonitorGroupInstancesResponseResourcesResource) SetRegionId(v string) *DescribeMonitorGroupInstancesResponseResourcesResource {
	s.RegionId = &v
	return s
}

func (s *DescribeMonitorGroupInstancesResponseResourcesResource) SetInstanceId(v string) *DescribeMonitorGroupInstancesResponseResourcesResource {
	s.InstanceId = &v
	return s
}

func (s *DescribeMonitorGroupInstancesResponseResourcesResource) SetCategory(v string) *DescribeMonitorGroupInstancesResponseResourcesResource {
	s.Category = &v
	return s
}

func (s *DescribeMonitorGroupInstancesResponseResourcesResource) SetInstanceName(v string) *DescribeMonitorGroupInstancesResponseResourcesResource {
	s.InstanceName = &v
	return s
}

type DescribeMonitorGroupCategoriesRequest struct {
	GroupId *int64 `json:"GroupId" xml:"GroupId" require:"true"`
}

func (s DescribeMonitorGroupCategoriesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupCategoriesRequest) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupCategoriesRequest) SetGroupId(v int64) *DescribeMonitorGroupCategoriesRequest {
	s.GroupId = &v
	return s
}

type DescribeMonitorGroupCategoriesResponse struct {
	RequestId              *string                                                       `json:"RequestId" xml:"RequestId" require:"true"`
	Success                *bool                                                         `json:"Success" xml:"Success" require:"true"`
	Code                   *int                                                          `json:"Code" xml:"Code" require:"true"`
	Message                *string                                                       `json:"Message" xml:"Message" require:"true"`
	MonitorGroupCategories *DescribeMonitorGroupCategoriesResponseMonitorGroupCategories `json:"MonitorGroupCategories" xml:"MonitorGroupCategories" require:"true" type:"Struct"`
}

func (s DescribeMonitorGroupCategoriesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupCategoriesResponse) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupCategoriesResponse) SetRequestId(v string) *DescribeMonitorGroupCategoriesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMonitorGroupCategoriesResponse) SetSuccess(v bool) *DescribeMonitorGroupCategoriesResponse {
	s.Success = &v
	return s
}

func (s *DescribeMonitorGroupCategoriesResponse) SetCode(v int) *DescribeMonitorGroupCategoriesResponse {
	s.Code = &v
	return s
}

func (s *DescribeMonitorGroupCategoriesResponse) SetMessage(v string) *DescribeMonitorGroupCategoriesResponse {
	s.Message = &v
	return s
}

func (s *DescribeMonitorGroupCategoriesResponse) SetMonitorGroupCategories(v *DescribeMonitorGroupCategoriesResponseMonitorGroupCategories) *DescribeMonitorGroupCategoriesResponse {
	s.MonitorGroupCategories = v
	return s
}

type DescribeMonitorGroupCategoriesResponseMonitorGroupCategories struct {
	GroupId              *int64                                                                            `json:"GroupId" xml:"GroupId" require:"true"`
	MonitorGroupCategory *DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategory `json:"MonitorGroupCategory" xml:"MonitorGroupCategory" require:"true" type:"Struct"`
}

func (s DescribeMonitorGroupCategoriesResponseMonitorGroupCategories) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupCategoriesResponseMonitorGroupCategories) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupCategoriesResponseMonitorGroupCategories) SetGroupId(v int64) *DescribeMonitorGroupCategoriesResponseMonitorGroupCategories {
	s.GroupId = &v
	return s
}

func (s *DescribeMonitorGroupCategoriesResponseMonitorGroupCategories) SetMonitorGroupCategory(v *DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategory) *DescribeMonitorGroupCategoriesResponseMonitorGroupCategories {
	s.MonitorGroupCategory = v
	return s
}

type DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategory struct {
	CategoryItem []*DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem `json:"CategoryItem" xml:"CategoryItem" require:"true" type:"Repeated"`
}

func (s DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategory) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategory) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategory) SetCategoryItem(v []*DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem) *DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategory {
	s.CategoryItem = v
	return s
}

type DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem struct {
	Category *string `json:"Category" xml:"Category" require:"true"`
	Count    *int    `json:"Count" xml:"Count" require:"true"`
}

func (s DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem) GoString() string {
	return s.String()
}

func (s *DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem) SetCategory(v string) *DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem {
	s.Category = &v
	return s
}

func (s *DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem) SetCount(v int) *DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem {
	s.Count = &v
	return s
}

type ModifyMonitorGroupRequest struct {
	GroupId       *string `json:"GroupId" xml:"GroupId" require:"true"`
	GroupName     *string `json:"GroupName" xml:"GroupName"`
	ContactGroups *string `json:"ContactGroups" xml:"ContactGroups"`
}

func (s ModifyMonitorGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyMonitorGroupRequest) GoString() string {
	return s.String()
}

func (s *ModifyMonitorGroupRequest) SetGroupId(v string) *ModifyMonitorGroupRequest {
	s.GroupId = &v
	return s
}

func (s *ModifyMonitorGroupRequest) SetGroupName(v string) *ModifyMonitorGroupRequest {
	s.GroupName = &v
	return s
}

func (s *ModifyMonitorGroupRequest) SetContactGroups(v string) *ModifyMonitorGroupRequest {
	s.ContactGroups = &v
	return s
}

type ModifyMonitorGroupResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *int    `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s ModifyMonitorGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyMonitorGroupResponse) GoString() string {
	return s.String()
}

func (s *ModifyMonitorGroupResponse) SetRequestId(v string) *ModifyMonitorGroupResponse {
	s.RequestId = &v
	return s
}

func (s *ModifyMonitorGroupResponse) SetSuccess(v bool) *ModifyMonitorGroupResponse {
	s.Success = &v
	return s
}

func (s *ModifyMonitorGroupResponse) SetCode(v int) *ModifyMonitorGroupResponse {
	s.Code = &v
	return s
}

func (s *ModifyMonitorGroupResponse) SetMessage(v string) *ModifyMonitorGroupResponse {
	s.Message = &v
	return s
}

type DescribeMetricRuleListRequest struct {
	MetricName  *string `json:"MetricName" xml:"MetricName"`
	EnableState *bool   `json:"EnableState" xml:"EnableState"`
	Namespace   *string `json:"Namespace" xml:"Namespace"`
	Page        *string `json:"Page" xml:"Page"`
	PageSize    *string `json:"PageSize" xml:"PageSize"`
	AlertState  *string `json:"AlertState" xml:"AlertState"`
	Dimensions  *string `json:"Dimensions" xml:"Dimensions"`
	RuleName    *string `json:"RuleName" xml:"RuleName"`
	GroupId     *string `json:"GroupId" xml:"GroupId"`
	RuleIds     *string `json:"RuleIds" xml:"RuleIds"`
}

func (s DescribeMetricRuleListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleListRequest) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleListRequest) SetMetricName(v string) *DescribeMetricRuleListRequest {
	s.MetricName = &v
	return s
}

func (s *DescribeMetricRuleListRequest) SetEnableState(v bool) *DescribeMetricRuleListRequest {
	s.EnableState = &v
	return s
}

func (s *DescribeMetricRuleListRequest) SetNamespace(v string) *DescribeMetricRuleListRequest {
	s.Namespace = &v
	return s
}

func (s *DescribeMetricRuleListRequest) SetPage(v string) *DescribeMetricRuleListRequest {
	s.Page = &v
	return s
}

func (s *DescribeMetricRuleListRequest) SetPageSize(v string) *DescribeMetricRuleListRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeMetricRuleListRequest) SetAlertState(v string) *DescribeMetricRuleListRequest {
	s.AlertState = &v
	return s
}

func (s *DescribeMetricRuleListRequest) SetDimensions(v string) *DescribeMetricRuleListRequest {
	s.Dimensions = &v
	return s
}

func (s *DescribeMetricRuleListRequest) SetRuleName(v string) *DescribeMetricRuleListRequest {
	s.RuleName = &v
	return s
}

func (s *DescribeMetricRuleListRequest) SetGroupId(v string) *DescribeMetricRuleListRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeMetricRuleListRequest) SetRuleIds(v string) *DescribeMetricRuleListRequest {
	s.RuleIds = &v
	return s
}

type DescribeMetricRuleListResponse struct {
	RequestId *string                               `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool                                 `json:"Success" xml:"Success" require:"true"`
	Code      *int                                  `json:"Code" xml:"Code" require:"true"`
	Message   *string                               `json:"Message" xml:"Message" require:"true"`
	Total     *string                               `json:"Total" xml:"Total" require:"true"`
	Alarms    *DescribeMetricRuleListResponseAlarms `json:"Alarms" xml:"Alarms" require:"true" type:"Struct"`
}

func (s DescribeMetricRuleListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleListResponse) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleListResponse) SetRequestId(v string) *DescribeMetricRuleListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMetricRuleListResponse) SetSuccess(v bool) *DescribeMetricRuleListResponse {
	s.Success = &v
	return s
}

func (s *DescribeMetricRuleListResponse) SetCode(v int) *DescribeMetricRuleListResponse {
	s.Code = &v
	return s
}

func (s *DescribeMetricRuleListResponse) SetMessage(v string) *DescribeMetricRuleListResponse {
	s.Message = &v
	return s
}

func (s *DescribeMetricRuleListResponse) SetTotal(v string) *DescribeMetricRuleListResponse {
	s.Total = &v
	return s
}

func (s *DescribeMetricRuleListResponse) SetAlarms(v *DescribeMetricRuleListResponseAlarms) *DescribeMetricRuleListResponse {
	s.Alarms = v
	return s
}

type DescribeMetricRuleListResponseAlarms struct {
	Alarm []*DescribeMetricRuleListResponseAlarmsAlarm `json:"Alarm" xml:"Alarm" require:"true" type:"Repeated"`
}

func (s DescribeMetricRuleListResponseAlarms) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleListResponseAlarms) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleListResponseAlarms) SetAlarm(v []*DescribeMetricRuleListResponseAlarmsAlarm) *DescribeMetricRuleListResponseAlarms {
	s.Alarm = v
	return s
}

type DescribeMetricRuleListResponseAlarmsAlarm struct {
	RuleId              *string                                               `json:"RuleId" xml:"RuleId" require:"true"`
	Namespace           *string                                               `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName          *string                                               `json:"MetricName" xml:"MetricName" require:"true"`
	Period              *string                                               `json:"Period" xml:"Period" require:"true"`
	EffectiveInterval   *string                                               `json:"EffectiveInterval" xml:"EffectiveInterval" require:"true"`
	NoEffectiveInterval *string                                               `json:"NoEffectiveInterval" xml:"NoEffectiveInterval" require:"true"`
	SilenceTime         *string                                               `json:"SilenceTime" xml:"SilenceTime" require:"true"`
	EnableState         *bool                                                 `json:"EnableState" xml:"EnableState" require:"true"`
	AlertState          *string                                               `json:"AlertState" xml:"AlertState" require:"true"`
	ContactGroups       *string                                               `json:"ContactGroups" xml:"ContactGroups" require:"true"`
	Webhook             *string                                               `json:"Webhook" xml:"Webhook" require:"true"`
	MailSubject         *string                                               `json:"MailSubject" xml:"MailSubject" require:"true"`
	RuleName            *string                                               `json:"RuleName" xml:"RuleName" require:"true"`
	Resources           *string                                               `json:"Resources" xml:"Resources" require:"true"`
	GroupId             *string                                               `json:"GroupId" xml:"GroupId" require:"true"`
	GroupName           *string                                               `json:"GroupName" xml:"GroupName" require:"true"`
	Dimensions          *string                                               `json:"Dimensions" xml:"Dimensions" require:"true"`
	SourceType          *string                                               `json:"SourceType" xml:"SourceType" require:"true"`
	Escalations         *DescribeMetricRuleListResponseAlarmsAlarmEscalations `json:"Escalations" xml:"Escalations" require:"true" type:"Struct"`
}

func (s DescribeMetricRuleListResponseAlarmsAlarm) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleListResponseAlarmsAlarm) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetRuleId(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.RuleId = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetNamespace(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.Namespace = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetMetricName(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.MetricName = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetPeriod(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.Period = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetEffectiveInterval(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.EffectiveInterval = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetNoEffectiveInterval(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.NoEffectiveInterval = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetSilenceTime(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.SilenceTime = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetEnableState(v bool) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.EnableState = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetAlertState(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.AlertState = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetContactGroups(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.ContactGroups = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetWebhook(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.Webhook = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetMailSubject(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.MailSubject = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetRuleName(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.RuleName = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetResources(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.Resources = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetGroupId(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.GroupId = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetGroupName(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.GroupName = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetDimensions(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.Dimensions = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetSourceType(v string) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.SourceType = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarm) SetEscalations(v *DescribeMetricRuleListResponseAlarmsAlarmEscalations) *DescribeMetricRuleListResponseAlarmsAlarm {
	s.Escalations = v
	return s
}

type DescribeMetricRuleListResponseAlarmsAlarmEscalations struct {
	Info     *DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo     `json:"Info" xml:"Info" require:"true" type:"Struct"`
	Warn     *DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn     `json:"Warn" xml:"Warn" require:"true" type:"Struct"`
	Critical *DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical `json:"Critical" xml:"Critical" require:"true" type:"Struct"`
}

func (s DescribeMetricRuleListResponseAlarmsAlarmEscalations) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleListResponseAlarmsAlarmEscalations) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalations) SetInfo(v *DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo) *DescribeMetricRuleListResponseAlarmsAlarmEscalations {
	s.Info = v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalations) SetWarn(v *DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn) *DescribeMetricRuleListResponseAlarmsAlarmEscalations {
	s.Warn = v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalations) SetCritical(v *DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical) *DescribeMetricRuleListResponseAlarmsAlarmEscalations {
	s.Critical = v
	return s
}

type DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo struct {
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *string `json:"Times" xml:"Times" require:"true"`
}

func (s DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo) SetComparisonOperator(v string) *DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo {
	s.ComparisonOperator = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo) SetStatistics(v string) *DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo {
	s.Statistics = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo) SetThreshold(v string) *DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo {
	s.Threshold = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo) SetTimes(v string) *DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo {
	s.Times = &v
	return s
}

type DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn struct {
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *string `json:"Times" xml:"Times" require:"true"`
}

func (s DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn) SetComparisonOperator(v string) *DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn {
	s.ComparisonOperator = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn) SetStatistics(v string) *DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn {
	s.Statistics = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn) SetThreshold(v string) *DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn {
	s.Threshold = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn) SetTimes(v string) *DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn {
	s.Times = &v
	return s
}

type DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical struct {
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *string `json:"Times" xml:"Times" require:"true"`
}

func (s DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical) SetComparisonOperator(v string) *DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical {
	s.ComparisonOperator = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical) SetStatistics(v string) *DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical {
	s.Statistics = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical) SetThreshold(v string) *DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical {
	s.Threshold = &v
	return s
}

func (s *DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical) SetTimes(v string) *DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical {
	s.Times = &v
	return s
}

type PutResourceMetricRuleRequest struct {
	RuleId              *string                                  `json:"RuleId" xml:"RuleId" require:"true"`
	RuleName            *string                                  `json:"RuleName" xml:"RuleName"`
	Namespace           *string                                  `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName          *string                                  `json:"MetricName" xml:"MetricName" require:"true"`
	Resources           *string                                  `json:"Resources" xml:"Resources" require:"true"`
	ContactGroups       *string                                  `json:"ContactGroups" xml:"ContactGroups" require:"true"`
	Webhook             *string                                  `json:"Webhook" xml:"Webhook"`
	EffectiveInterval   *string                                  `json:"EffectiveInterval" xml:"EffectiveInterval"`
	NoEffectiveInterval *string                                  `json:"NoEffectiveInterval" xml:"NoEffectiveInterval"`
	SilenceTime         *int                                     `json:"SilenceTime" xml:"SilenceTime"`
	Period              *string                                  `json:"Period" xml:"Period"`
	Interval            *string                                  `json:"Interval" xml:"Interval"`
	EmailSubject        *string                                  `json:"EmailSubject" xml:"EmailSubject"`
	Escalations         *PutResourceMetricRuleRequestEscalations `json:"Escalations" xml:"Escalations" require:"true" type:"Struct"`
}

func (s PutResourceMetricRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRuleRequest) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRuleRequest) SetRuleId(v string) *PutResourceMetricRuleRequest {
	s.RuleId = &v
	return s
}

func (s *PutResourceMetricRuleRequest) SetRuleName(v string) *PutResourceMetricRuleRequest {
	s.RuleName = &v
	return s
}

func (s *PutResourceMetricRuleRequest) SetNamespace(v string) *PutResourceMetricRuleRequest {
	s.Namespace = &v
	return s
}

func (s *PutResourceMetricRuleRequest) SetMetricName(v string) *PutResourceMetricRuleRequest {
	s.MetricName = &v
	return s
}

func (s *PutResourceMetricRuleRequest) SetResources(v string) *PutResourceMetricRuleRequest {
	s.Resources = &v
	return s
}

func (s *PutResourceMetricRuleRequest) SetContactGroups(v string) *PutResourceMetricRuleRequest {
	s.ContactGroups = &v
	return s
}

func (s *PutResourceMetricRuleRequest) SetWebhook(v string) *PutResourceMetricRuleRequest {
	s.Webhook = &v
	return s
}

func (s *PutResourceMetricRuleRequest) SetEffectiveInterval(v string) *PutResourceMetricRuleRequest {
	s.EffectiveInterval = &v
	return s
}

func (s *PutResourceMetricRuleRequest) SetNoEffectiveInterval(v string) *PutResourceMetricRuleRequest {
	s.NoEffectiveInterval = &v
	return s
}

func (s *PutResourceMetricRuleRequest) SetSilenceTime(v int) *PutResourceMetricRuleRequest {
	s.SilenceTime = &v
	return s
}

func (s *PutResourceMetricRuleRequest) SetPeriod(v string) *PutResourceMetricRuleRequest {
	s.Period = &v
	return s
}

func (s *PutResourceMetricRuleRequest) SetInterval(v string) *PutResourceMetricRuleRequest {
	s.Interval = &v
	return s
}

func (s *PutResourceMetricRuleRequest) SetEmailSubject(v string) *PutResourceMetricRuleRequest {
	s.EmailSubject = &v
	return s
}

func (s *PutResourceMetricRuleRequest) SetEscalations(v *PutResourceMetricRuleRequestEscalations) *PutResourceMetricRuleRequest {
	s.Escalations = v
	return s
}

type PutResourceMetricRuleRequestEscalations struct {
	Critical *PutResourceMetricRuleRequestEscalationsCritical `json:"Critical" xml:"Critical" require:"true" type:"Struct"`
	Warn     *PutResourceMetricRuleRequestEscalationsWarn     `json:"Warn" xml:"Warn" require:"true" type:"Struct"`
	Info     *PutResourceMetricRuleRequestEscalationsInfo     `json:"Info" xml:"Info" require:"true" type:"Struct"`
}

func (s PutResourceMetricRuleRequestEscalations) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRuleRequestEscalations) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRuleRequestEscalations) SetCritical(v *PutResourceMetricRuleRequestEscalationsCritical) *PutResourceMetricRuleRequestEscalations {
	s.Critical = v
	return s
}

func (s *PutResourceMetricRuleRequestEscalations) SetWarn(v *PutResourceMetricRuleRequestEscalationsWarn) *PutResourceMetricRuleRequestEscalations {
	s.Warn = v
	return s
}

func (s *PutResourceMetricRuleRequestEscalations) SetInfo(v *PutResourceMetricRuleRequestEscalationsInfo) *PutResourceMetricRuleRequestEscalations {
	s.Info = v
	return s
}

type PutResourceMetricRuleRequestEscalationsCritical struct {
	Statistics         *string `json:"Statistics" xml:"Statistics"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator"`
	Threshold          *string `json:"Threshold" xml:"Threshold"`
	Times              *int    `json:"Times" xml:"Times"`
}

func (s PutResourceMetricRuleRequestEscalationsCritical) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRuleRequestEscalationsCritical) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRuleRequestEscalationsCritical) SetStatistics(v string) *PutResourceMetricRuleRequestEscalationsCritical {
	s.Statistics = &v
	return s
}

func (s *PutResourceMetricRuleRequestEscalationsCritical) SetComparisonOperator(v string) *PutResourceMetricRuleRequestEscalationsCritical {
	s.ComparisonOperator = &v
	return s
}

func (s *PutResourceMetricRuleRequestEscalationsCritical) SetThreshold(v string) *PutResourceMetricRuleRequestEscalationsCritical {
	s.Threshold = &v
	return s
}

func (s *PutResourceMetricRuleRequestEscalationsCritical) SetTimes(v int) *PutResourceMetricRuleRequestEscalationsCritical {
	s.Times = &v
	return s
}

type PutResourceMetricRuleRequestEscalationsWarn struct {
	Statistics         *string `json:"Statistics" xml:"Statistics"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator"`
	Threshold          *string `json:"Threshold" xml:"Threshold"`
	Times              *int    `json:"Times" xml:"Times"`
}

func (s PutResourceMetricRuleRequestEscalationsWarn) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRuleRequestEscalationsWarn) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRuleRequestEscalationsWarn) SetStatistics(v string) *PutResourceMetricRuleRequestEscalationsWarn {
	s.Statistics = &v
	return s
}

func (s *PutResourceMetricRuleRequestEscalationsWarn) SetComparisonOperator(v string) *PutResourceMetricRuleRequestEscalationsWarn {
	s.ComparisonOperator = &v
	return s
}

func (s *PutResourceMetricRuleRequestEscalationsWarn) SetThreshold(v string) *PutResourceMetricRuleRequestEscalationsWarn {
	s.Threshold = &v
	return s
}

func (s *PutResourceMetricRuleRequestEscalationsWarn) SetTimes(v int) *PutResourceMetricRuleRequestEscalationsWarn {
	s.Times = &v
	return s
}

type PutResourceMetricRuleRequestEscalationsInfo struct {
	Statistics         *string `json:"Statistics" xml:"Statistics"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator"`
	Threshold          *string `json:"Threshold" xml:"Threshold"`
	Times              *int    `json:"Times" xml:"Times"`
}

func (s PutResourceMetricRuleRequestEscalationsInfo) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRuleRequestEscalationsInfo) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRuleRequestEscalationsInfo) SetStatistics(v string) *PutResourceMetricRuleRequestEscalationsInfo {
	s.Statistics = &v
	return s
}

func (s *PutResourceMetricRuleRequestEscalationsInfo) SetComparisonOperator(v string) *PutResourceMetricRuleRequestEscalationsInfo {
	s.ComparisonOperator = &v
	return s
}

func (s *PutResourceMetricRuleRequestEscalationsInfo) SetThreshold(v string) *PutResourceMetricRuleRequestEscalationsInfo {
	s.Threshold = &v
	return s
}

func (s *PutResourceMetricRuleRequestEscalationsInfo) SetTimes(v int) *PutResourceMetricRuleRequestEscalationsInfo {
	s.Times = &v
	return s
}

type PutResourceMetricRuleResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s PutResourceMetricRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s PutResourceMetricRuleResponse) GoString() string {
	return s.String()
}

func (s *PutResourceMetricRuleResponse) SetSuccess(v bool) *PutResourceMetricRuleResponse {
	s.Success = &v
	return s
}

func (s *PutResourceMetricRuleResponse) SetCode(v string) *PutResourceMetricRuleResponse {
	s.Code = &v
	return s
}

func (s *PutResourceMetricRuleResponse) SetMessage(v string) *PutResourceMetricRuleResponse {
	s.Message = &v
	return s
}

func (s *PutResourceMetricRuleResponse) SetRequestId(v string) *PutResourceMetricRuleResponse {
	s.RequestId = &v
	return s
}

type PutGroupMetricRuleRequest struct {
	GroupId             *string                               `json:"GroupId" xml:"GroupId" require:"true"`
	RuleId              *string                               `json:"RuleId" xml:"RuleId" require:"true"`
	Category            *string                               `json:"Category" xml:"Category" require:"true"`
	RuleName            *string                               `json:"RuleName" xml:"RuleName"`
	Namespace           *string                               `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName          *string                               `json:"MetricName" xml:"MetricName" require:"true"`
	Dimensions          *string                               `json:"Dimensions" xml:"Dimensions"`
	EffectiveInterval   *string                               `json:"EffectiveInterval" xml:"EffectiveInterval"`
	NoEffectiveInterval *string                               `json:"NoEffectiveInterval" xml:"NoEffectiveInterval"`
	SilenceTime         *int                                  `json:"SilenceTime" xml:"SilenceTime"`
	Period              *string                               `json:"Period" xml:"Period"`
	Interval            *string                               `json:"Interval" xml:"Interval"`
	Webhook             *string                               `json:"Webhook" xml:"Webhook"`
	EmailSubject        *string                               `json:"EmailSubject" xml:"EmailSubject"`
	Escalations         *PutGroupMetricRuleRequestEscalations `json:"Escalations" xml:"Escalations" require:"true" type:"Struct"`
}

func (s PutGroupMetricRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s PutGroupMetricRuleRequest) GoString() string {
	return s.String()
}

func (s *PutGroupMetricRuleRequest) SetGroupId(v string) *PutGroupMetricRuleRequest {
	s.GroupId = &v
	return s
}

func (s *PutGroupMetricRuleRequest) SetRuleId(v string) *PutGroupMetricRuleRequest {
	s.RuleId = &v
	return s
}

func (s *PutGroupMetricRuleRequest) SetCategory(v string) *PutGroupMetricRuleRequest {
	s.Category = &v
	return s
}

func (s *PutGroupMetricRuleRequest) SetRuleName(v string) *PutGroupMetricRuleRequest {
	s.RuleName = &v
	return s
}

func (s *PutGroupMetricRuleRequest) SetNamespace(v string) *PutGroupMetricRuleRequest {
	s.Namespace = &v
	return s
}

func (s *PutGroupMetricRuleRequest) SetMetricName(v string) *PutGroupMetricRuleRequest {
	s.MetricName = &v
	return s
}

func (s *PutGroupMetricRuleRequest) SetDimensions(v string) *PutGroupMetricRuleRequest {
	s.Dimensions = &v
	return s
}

func (s *PutGroupMetricRuleRequest) SetEffectiveInterval(v string) *PutGroupMetricRuleRequest {
	s.EffectiveInterval = &v
	return s
}

func (s *PutGroupMetricRuleRequest) SetNoEffectiveInterval(v string) *PutGroupMetricRuleRequest {
	s.NoEffectiveInterval = &v
	return s
}

func (s *PutGroupMetricRuleRequest) SetSilenceTime(v int) *PutGroupMetricRuleRequest {
	s.SilenceTime = &v
	return s
}

func (s *PutGroupMetricRuleRequest) SetPeriod(v string) *PutGroupMetricRuleRequest {
	s.Period = &v
	return s
}

func (s *PutGroupMetricRuleRequest) SetInterval(v string) *PutGroupMetricRuleRequest {
	s.Interval = &v
	return s
}

func (s *PutGroupMetricRuleRequest) SetWebhook(v string) *PutGroupMetricRuleRequest {
	s.Webhook = &v
	return s
}

func (s *PutGroupMetricRuleRequest) SetEmailSubject(v string) *PutGroupMetricRuleRequest {
	s.EmailSubject = &v
	return s
}

func (s *PutGroupMetricRuleRequest) SetEscalations(v *PutGroupMetricRuleRequestEscalations) *PutGroupMetricRuleRequest {
	s.Escalations = v
	return s
}

type PutGroupMetricRuleRequestEscalations struct {
	Critical *PutGroupMetricRuleRequestEscalationsCritical `json:"Critical" xml:"Critical" require:"true" type:"Struct"`
	Warn     *PutGroupMetricRuleRequestEscalationsWarn     `json:"Warn" xml:"Warn" require:"true" type:"Struct"`
	Info     *PutGroupMetricRuleRequestEscalationsInfo     `json:"Info" xml:"Info" require:"true" type:"Struct"`
}

func (s PutGroupMetricRuleRequestEscalations) String() string {
	return tea.Prettify(s)
}

func (s PutGroupMetricRuleRequestEscalations) GoString() string {
	return s.String()
}

func (s *PutGroupMetricRuleRequestEscalations) SetCritical(v *PutGroupMetricRuleRequestEscalationsCritical) *PutGroupMetricRuleRequestEscalations {
	s.Critical = v
	return s
}

func (s *PutGroupMetricRuleRequestEscalations) SetWarn(v *PutGroupMetricRuleRequestEscalationsWarn) *PutGroupMetricRuleRequestEscalations {
	s.Warn = v
	return s
}

func (s *PutGroupMetricRuleRequestEscalations) SetInfo(v *PutGroupMetricRuleRequestEscalationsInfo) *PutGroupMetricRuleRequestEscalations {
	s.Info = v
	return s
}

type PutGroupMetricRuleRequestEscalationsCritical struct {
	Statistics         *string `json:"Statistics" xml:"Statistics"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator"`
	Threshold          *string `json:"Threshold" xml:"Threshold"`
	Times              *int    `json:"Times" xml:"Times"`
}

func (s PutGroupMetricRuleRequestEscalationsCritical) String() string {
	return tea.Prettify(s)
}

func (s PutGroupMetricRuleRequestEscalationsCritical) GoString() string {
	return s.String()
}

func (s *PutGroupMetricRuleRequestEscalationsCritical) SetStatistics(v string) *PutGroupMetricRuleRequestEscalationsCritical {
	s.Statistics = &v
	return s
}

func (s *PutGroupMetricRuleRequestEscalationsCritical) SetComparisonOperator(v string) *PutGroupMetricRuleRequestEscalationsCritical {
	s.ComparisonOperator = &v
	return s
}

func (s *PutGroupMetricRuleRequestEscalationsCritical) SetThreshold(v string) *PutGroupMetricRuleRequestEscalationsCritical {
	s.Threshold = &v
	return s
}

func (s *PutGroupMetricRuleRequestEscalationsCritical) SetTimes(v int) *PutGroupMetricRuleRequestEscalationsCritical {
	s.Times = &v
	return s
}

type PutGroupMetricRuleRequestEscalationsWarn struct {
	Statistics         *string `json:"Statistics" xml:"Statistics"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator"`
	Threshold          *string `json:"Threshold" xml:"Threshold"`
	Times              *int    `json:"Times" xml:"Times"`
}

func (s PutGroupMetricRuleRequestEscalationsWarn) String() string {
	return tea.Prettify(s)
}

func (s PutGroupMetricRuleRequestEscalationsWarn) GoString() string {
	return s.String()
}

func (s *PutGroupMetricRuleRequestEscalationsWarn) SetStatistics(v string) *PutGroupMetricRuleRequestEscalationsWarn {
	s.Statistics = &v
	return s
}

func (s *PutGroupMetricRuleRequestEscalationsWarn) SetComparisonOperator(v string) *PutGroupMetricRuleRequestEscalationsWarn {
	s.ComparisonOperator = &v
	return s
}

func (s *PutGroupMetricRuleRequestEscalationsWarn) SetThreshold(v string) *PutGroupMetricRuleRequestEscalationsWarn {
	s.Threshold = &v
	return s
}

func (s *PutGroupMetricRuleRequestEscalationsWarn) SetTimes(v int) *PutGroupMetricRuleRequestEscalationsWarn {
	s.Times = &v
	return s
}

type PutGroupMetricRuleRequestEscalationsInfo struct {
	Statistics         *string `json:"Statistics" xml:"Statistics"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator"`
	Threshold          *string `json:"Threshold" xml:"Threshold"`
	Times              *int    `json:"Times" xml:"Times"`
}

func (s PutGroupMetricRuleRequestEscalationsInfo) String() string {
	return tea.Prettify(s)
}

func (s PutGroupMetricRuleRequestEscalationsInfo) GoString() string {
	return s.String()
}

func (s *PutGroupMetricRuleRequestEscalationsInfo) SetStatistics(v string) *PutGroupMetricRuleRequestEscalationsInfo {
	s.Statistics = &v
	return s
}

func (s *PutGroupMetricRuleRequestEscalationsInfo) SetComparisonOperator(v string) *PutGroupMetricRuleRequestEscalationsInfo {
	s.ComparisonOperator = &v
	return s
}

func (s *PutGroupMetricRuleRequestEscalationsInfo) SetThreshold(v string) *PutGroupMetricRuleRequestEscalationsInfo {
	s.Threshold = &v
	return s
}

func (s *PutGroupMetricRuleRequestEscalationsInfo) SetTimes(v int) *PutGroupMetricRuleRequestEscalationsInfo {
	s.Times = &v
	return s
}

type PutGroupMetricRuleResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s PutGroupMetricRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s PutGroupMetricRuleResponse) GoString() string {
	return s.String()
}

func (s *PutGroupMetricRuleResponse) SetSuccess(v bool) *PutGroupMetricRuleResponse {
	s.Success = &v
	return s
}

func (s *PutGroupMetricRuleResponse) SetCode(v string) *PutGroupMetricRuleResponse {
	s.Code = &v
	return s
}

func (s *PutGroupMetricRuleResponse) SetMessage(v string) *PutGroupMetricRuleResponse {
	s.Message = &v
	return s
}

func (s *PutGroupMetricRuleResponse) SetRequestId(v string) *PutGroupMetricRuleResponse {
	s.RequestId = &v
	return s
}

type EnableMetricRulesRequest struct {
	RuleId []*string `json:"RuleId" xml:"RuleId" require:"true" type:"Repeated"`
}

func (s EnableMetricRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s EnableMetricRulesRequest) GoString() string {
	return s.String()
}

func (s *EnableMetricRulesRequest) SetRuleId(v []*string) *EnableMetricRulesRequest {
	s.RuleId = v
	return s
}

type EnableMetricRulesResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s EnableMetricRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s EnableMetricRulesResponse) GoString() string {
	return s.String()
}

func (s *EnableMetricRulesResponse) SetSuccess(v bool) *EnableMetricRulesResponse {
	s.Success = &v
	return s
}

func (s *EnableMetricRulesResponse) SetCode(v string) *EnableMetricRulesResponse {
	s.Code = &v
	return s
}

func (s *EnableMetricRulesResponse) SetMessage(v string) *EnableMetricRulesResponse {
	s.Message = &v
	return s
}

func (s *EnableMetricRulesResponse) SetRequestId(v string) *EnableMetricRulesResponse {
	s.RequestId = &v
	return s
}

type DescribeMetricRuleCountRequest struct {
	Namespace  *string `json:"Namespace" xml:"Namespace"`
	MetricName *string `json:"MetricName" xml:"MetricName"`
}

func (s DescribeMetricRuleCountRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleCountRequest) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleCountRequest) SetNamespace(v string) *DescribeMetricRuleCountRequest {
	s.Namespace = &v
	return s
}

func (s *DescribeMetricRuleCountRequest) SetMetricName(v string) *DescribeMetricRuleCountRequest {
	s.MetricName = &v
	return s
}

type DescribeMetricRuleCountResponse struct {
	Success         *bool                                           `json:"Success" xml:"Success" require:"true"`
	Code            *string                                         `json:"Code" xml:"Code" require:"true"`
	Message         *string                                         `json:"Message" xml:"Message" require:"true"`
	RequestId       *string                                         `json:"RequestId" xml:"RequestId" require:"true"`
	MetricRuleCount *DescribeMetricRuleCountResponseMetricRuleCount `json:"MetricRuleCount" xml:"MetricRuleCount" require:"true" type:"Struct"`
}

func (s DescribeMetricRuleCountResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleCountResponse) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleCountResponse) SetSuccess(v bool) *DescribeMetricRuleCountResponse {
	s.Success = &v
	return s
}

func (s *DescribeMetricRuleCountResponse) SetCode(v string) *DescribeMetricRuleCountResponse {
	s.Code = &v
	return s
}

func (s *DescribeMetricRuleCountResponse) SetMessage(v string) *DescribeMetricRuleCountResponse {
	s.Message = &v
	return s
}

func (s *DescribeMetricRuleCountResponse) SetRequestId(v string) *DescribeMetricRuleCountResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMetricRuleCountResponse) SetMetricRuleCount(v *DescribeMetricRuleCountResponseMetricRuleCount) *DescribeMetricRuleCountResponse {
	s.MetricRuleCount = v
	return s
}

type DescribeMetricRuleCountResponseMetricRuleCount struct {
	Alarm   *int `json:"Alarm" xml:"Alarm" require:"true"`
	Disable *int `json:"Disable" xml:"Disable" require:"true"`
	Nodata  *int `json:"Nodata" xml:"Nodata" require:"true"`
	Ok      *int `json:"Ok" xml:"Ok" require:"true"`
	Total   *int `json:"Total" xml:"Total" require:"true"`
}

func (s DescribeMetricRuleCountResponseMetricRuleCount) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleCountResponseMetricRuleCount) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleCountResponseMetricRuleCount) SetAlarm(v int) *DescribeMetricRuleCountResponseMetricRuleCount {
	s.Alarm = &v
	return s
}

func (s *DescribeMetricRuleCountResponseMetricRuleCount) SetDisable(v int) *DescribeMetricRuleCountResponseMetricRuleCount {
	s.Disable = &v
	return s
}

func (s *DescribeMetricRuleCountResponseMetricRuleCount) SetNodata(v int) *DescribeMetricRuleCountResponseMetricRuleCount {
	s.Nodata = &v
	return s
}

func (s *DescribeMetricRuleCountResponseMetricRuleCount) SetOk(v int) *DescribeMetricRuleCountResponseMetricRuleCount {
	s.Ok = &v
	return s
}

func (s *DescribeMetricRuleCountResponseMetricRuleCount) SetTotal(v int) *DescribeMetricRuleCountResponseMetricRuleCount {
	s.Total = &v
	return s
}

type CreateGroupMetricRulesRequest struct {
	GroupId          *int64                                           `json:"GroupId" xml:"GroupId" require:"true"`
	GroupMetricRules []*CreateGroupMetricRulesRequestGroupMetricRules `json:"GroupMetricRules" xml:"GroupMetricRules" type:"Repeated"`
}

func (s CreateGroupMetricRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupMetricRulesRequest) GoString() string {
	return s.String()
}

func (s *CreateGroupMetricRulesRequest) SetGroupId(v int64) *CreateGroupMetricRulesRequest {
	s.GroupId = &v
	return s
}

func (s *CreateGroupMetricRulesRequest) SetGroupMetricRules(v []*CreateGroupMetricRulesRequestGroupMetricRules) *CreateGroupMetricRulesRequest {
	s.GroupMetricRules = v
	return s
}

type CreateGroupMetricRulesRequestGroupMetricRules struct {
	Category            *string                                                   `json:"Category" xml:"Category" require:"true"`
	RuleName            *string                                                   `json:"RuleName" xml:"RuleName" require:"true"`
	RuleId              *string                                                   `json:"RuleId" xml:"RuleId" require:"true"`
	Namespace           *string                                                   `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName          *string                                                   `json:"MetricName" xml:"MetricName" require:"true"`
	Dimensions          *string                                                   `json:"Dimensions" xml:"Dimensions"`
	EffectiveInterval   *string                                                   `json:"EffectiveInterval" xml:"EffectiveInterval"`
	NoEffectiveInterval *string                                                   `json:"NoEffectiveInterval" xml:"NoEffectiveInterval"`
	SilenceTime         *int                                                      `json:"SilenceTime" xml:"SilenceTime"`
	Period              *string                                                   `json:"Period" xml:"Period"`
	Interval            *string                                                   `json:"Interval" xml:"Interval"`
	Webhook             *string                                                   `json:"Webhook" xml:"Webhook"`
	EmailSubject        *string                                                   `json:"EmailSubject" xml:"EmailSubject"`
	Escalations         *CreateGroupMetricRulesRequestGroupMetricRulesEscalations `json:"Escalations" xml:"Escalations" require:"true" type:"Struct"`
}

func (s CreateGroupMetricRulesRequestGroupMetricRules) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupMetricRulesRequestGroupMetricRules) GoString() string {
	return s.String()
}

func (s *CreateGroupMetricRulesRequestGroupMetricRules) SetCategory(v string) *CreateGroupMetricRulesRequestGroupMetricRules {
	s.Category = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRules) SetRuleName(v string) *CreateGroupMetricRulesRequestGroupMetricRules {
	s.RuleName = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRules) SetRuleId(v string) *CreateGroupMetricRulesRequestGroupMetricRules {
	s.RuleId = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRules) SetNamespace(v string) *CreateGroupMetricRulesRequestGroupMetricRules {
	s.Namespace = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRules) SetMetricName(v string) *CreateGroupMetricRulesRequestGroupMetricRules {
	s.MetricName = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRules) SetDimensions(v string) *CreateGroupMetricRulesRequestGroupMetricRules {
	s.Dimensions = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRules) SetEffectiveInterval(v string) *CreateGroupMetricRulesRequestGroupMetricRules {
	s.EffectiveInterval = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRules) SetNoEffectiveInterval(v string) *CreateGroupMetricRulesRequestGroupMetricRules {
	s.NoEffectiveInterval = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRules) SetSilenceTime(v int) *CreateGroupMetricRulesRequestGroupMetricRules {
	s.SilenceTime = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRules) SetPeriod(v string) *CreateGroupMetricRulesRequestGroupMetricRules {
	s.Period = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRules) SetInterval(v string) *CreateGroupMetricRulesRequestGroupMetricRules {
	s.Interval = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRules) SetWebhook(v string) *CreateGroupMetricRulesRequestGroupMetricRules {
	s.Webhook = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRules) SetEmailSubject(v string) *CreateGroupMetricRulesRequestGroupMetricRules {
	s.EmailSubject = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRules) SetEscalations(v *CreateGroupMetricRulesRequestGroupMetricRulesEscalations) *CreateGroupMetricRulesRequestGroupMetricRules {
	s.Escalations = v
	return s
}

type CreateGroupMetricRulesRequestGroupMetricRulesEscalations struct {
	Critical *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical `json:"Critical" xml:"Critical" require:"true" type:"Struct"`
	Warn     *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn     `json:"Warn" xml:"Warn" require:"true" type:"Struct"`
	Info     *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo     `json:"Info" xml:"Info" require:"true" type:"Struct"`
}

func (s CreateGroupMetricRulesRequestGroupMetricRulesEscalations) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupMetricRulesRequestGroupMetricRulesEscalations) GoString() string {
	return s.String()
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalations) SetCritical(v *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical) *CreateGroupMetricRulesRequestGroupMetricRulesEscalations {
	s.Critical = v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalations) SetWarn(v *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn) *CreateGroupMetricRulesRequestGroupMetricRulesEscalations {
	s.Warn = v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalations) SetInfo(v *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo) *CreateGroupMetricRulesRequestGroupMetricRulesEscalations {
	s.Info = v
	return s
}

type CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical struct {
	Statistics         *string `json:"Statistics" xml:"Statistics"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator"`
	Threshold          *string `json:"Threshold" xml:"Threshold"`
	Times              *int    `json:"Times" xml:"Times"`
}

func (s CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical) GoString() string {
	return s.String()
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical) SetStatistics(v string) *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical {
	s.Statistics = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical) SetComparisonOperator(v string) *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical {
	s.ComparisonOperator = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical) SetThreshold(v string) *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical {
	s.Threshold = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical) SetTimes(v int) *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical {
	s.Times = &v
	return s
}

type CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn struct {
	Statistics         *string `json:"Statistics" xml:"Statistics"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator"`
	Threshold          *string `json:"Threshold" xml:"Threshold"`
	Times              *int    `json:"Times" xml:"Times"`
}

func (s CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn) GoString() string {
	return s.String()
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn) SetStatistics(v string) *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn {
	s.Statistics = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn) SetComparisonOperator(v string) *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn {
	s.ComparisonOperator = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn) SetThreshold(v string) *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn {
	s.Threshold = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn) SetTimes(v int) *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn {
	s.Times = &v
	return s
}

type CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo struct {
	Statistics         *string `json:"Statistics" xml:"Statistics"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator"`
	Threshold          *string `json:"Threshold" xml:"Threshold"`
	Times              *int    `json:"Times" xml:"Times"`
}

func (s CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo) GoString() string {
	return s.String()
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo) SetStatistics(v string) *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo {
	s.Statistics = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo) SetComparisonOperator(v string) *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo {
	s.ComparisonOperator = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo) SetThreshold(v string) *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo {
	s.Threshold = &v
	return s
}

func (s *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo) SetTimes(v int) *CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo {
	s.Times = &v
	return s
}

type CreateGroupMetricRulesResponse struct {
	RequestId *string                                  `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool                                    `json:"Success" xml:"Success" require:"true"`
	Code      *int                                     `json:"Code" xml:"Code" require:"true"`
	Message   *string                                  `json:"Message" xml:"Message" require:"true"`
	Resources *CreateGroupMetricRulesResponseResources `json:"Resources" xml:"Resources" require:"true" type:"Struct"`
}

func (s CreateGroupMetricRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupMetricRulesResponse) GoString() string {
	return s.String()
}

func (s *CreateGroupMetricRulesResponse) SetRequestId(v string) *CreateGroupMetricRulesResponse {
	s.RequestId = &v
	return s
}

func (s *CreateGroupMetricRulesResponse) SetSuccess(v bool) *CreateGroupMetricRulesResponse {
	s.Success = &v
	return s
}

func (s *CreateGroupMetricRulesResponse) SetCode(v int) *CreateGroupMetricRulesResponse {
	s.Code = &v
	return s
}

func (s *CreateGroupMetricRulesResponse) SetMessage(v string) *CreateGroupMetricRulesResponse {
	s.Message = &v
	return s
}

func (s *CreateGroupMetricRulesResponse) SetResources(v *CreateGroupMetricRulesResponseResources) *CreateGroupMetricRulesResponse {
	s.Resources = v
	return s
}

type CreateGroupMetricRulesResponseResources struct {
	AlertResult []*CreateGroupMetricRulesResponseResourcesAlertResult `json:"AlertResult" xml:"AlertResult" require:"true" type:"Repeated"`
}

func (s CreateGroupMetricRulesResponseResources) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupMetricRulesResponseResources) GoString() string {
	return s.String()
}

func (s *CreateGroupMetricRulesResponseResources) SetAlertResult(v []*CreateGroupMetricRulesResponseResourcesAlertResult) *CreateGroupMetricRulesResponseResources {
	s.AlertResult = v
	return s
}

type CreateGroupMetricRulesResponseResourcesAlertResult struct {
	RuleId   *string `json:"RuleId" xml:"RuleId" require:"true"`
	RuleName *string `json:"RuleName" xml:"RuleName" require:"true"`
	Message  *string `json:"Message" xml:"Message" require:"true"`
	Code     *int    `json:"Code" xml:"Code" require:"true"`
	Success  *bool   `json:"Success" xml:"Success" require:"true"`
}

func (s CreateGroupMetricRulesResponseResourcesAlertResult) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupMetricRulesResponseResourcesAlertResult) GoString() string {
	return s.String()
}

func (s *CreateGroupMetricRulesResponseResourcesAlertResult) SetRuleId(v string) *CreateGroupMetricRulesResponseResourcesAlertResult {
	s.RuleId = &v
	return s
}

func (s *CreateGroupMetricRulesResponseResourcesAlertResult) SetRuleName(v string) *CreateGroupMetricRulesResponseResourcesAlertResult {
	s.RuleName = &v
	return s
}

func (s *CreateGroupMetricRulesResponseResourcesAlertResult) SetMessage(v string) *CreateGroupMetricRulesResponseResourcesAlertResult {
	s.Message = &v
	return s
}

func (s *CreateGroupMetricRulesResponseResourcesAlertResult) SetCode(v int) *CreateGroupMetricRulesResponseResourcesAlertResult {
	s.Code = &v
	return s
}

func (s *CreateGroupMetricRulesResponseResourcesAlertResult) SetSuccess(v bool) *CreateGroupMetricRulesResponseResourcesAlertResult {
	s.Success = &v
	return s
}

type DisableMetricRulesRequest struct {
	RuleId []*string `json:"RuleId" xml:"RuleId" require:"true" type:"Repeated"`
}

func (s DisableMetricRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s DisableMetricRulesRequest) GoString() string {
	return s.String()
}

func (s *DisableMetricRulesRequest) SetRuleId(v []*string) *DisableMetricRulesRequest {
	s.RuleId = v
	return s
}

type DisableMetricRulesResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DisableMetricRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s DisableMetricRulesResponse) GoString() string {
	return s.String()
}

func (s *DisableMetricRulesResponse) SetSuccess(v bool) *DisableMetricRulesResponse {
	s.Success = &v
	return s
}

func (s *DisableMetricRulesResponse) SetCode(v string) *DisableMetricRulesResponse {
	s.Code = &v
	return s
}

func (s *DisableMetricRulesResponse) SetMessage(v string) *DisableMetricRulesResponse {
	s.Message = &v
	return s
}

func (s *DisableMetricRulesResponse) SetRequestId(v string) *DisableMetricRulesResponse {
	s.RequestId = &v
	return s
}

type DeleteMetricRulesRequest struct {
	Id []*string `json:"Id" xml:"Id" require:"true" type:"Repeated"`
}

func (s DeleteMetricRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteMetricRulesRequest) GoString() string {
	return s.String()
}

func (s *DeleteMetricRulesRequest) SetId(v []*string) *DeleteMetricRulesRequest {
	s.Id = v
	return s
}

type DeleteMetricRulesResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteMetricRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteMetricRulesResponse) GoString() string {
	return s.String()
}

func (s *DeleteMetricRulesResponse) SetSuccess(v bool) *DeleteMetricRulesResponse {
	s.Success = &v
	return s
}

func (s *DeleteMetricRulesResponse) SetCode(v string) *DeleteMetricRulesResponse {
	s.Code = &v
	return s
}

func (s *DeleteMetricRulesResponse) SetMessage(v string) *DeleteMetricRulesResponse {
	s.Message = &v
	return s
}

func (s *DeleteMetricRulesResponse) SetRequestId(v string) *DeleteMetricRulesResponse {
	s.RequestId = &v
	return s
}

type ModifyMetricRuleTemplateRequest struct {
	TemplateId     *int64                                           `json:"TemplateId" xml:"TemplateId" require:"true"`
	Name           *string                                          `json:"Name" xml:"Name"`
	Description    *string                                          `json:"Description" xml:"Description"`
	RestVersion    *int64                                           `json:"RestVersion" xml:"RestVersion" require:"true"`
	AlertTemplates []*ModifyMetricRuleTemplateRequestAlertTemplates `json:"AlertTemplates" xml:"AlertTemplates" type:"Repeated"`
}

func (s ModifyMetricRuleTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyMetricRuleTemplateRequest) GoString() string {
	return s.String()
}

func (s *ModifyMetricRuleTemplateRequest) SetTemplateId(v int64) *ModifyMetricRuleTemplateRequest {
	s.TemplateId = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequest) SetName(v string) *ModifyMetricRuleTemplateRequest {
	s.Name = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequest) SetDescription(v string) *ModifyMetricRuleTemplateRequest {
	s.Description = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequest) SetRestVersion(v int64) *ModifyMetricRuleTemplateRequest {
	s.RestVersion = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequest) SetAlertTemplates(v []*ModifyMetricRuleTemplateRequestAlertTemplates) *ModifyMetricRuleTemplateRequest {
	s.AlertTemplates = v
	return s
}

type ModifyMetricRuleTemplateRequestAlertTemplates struct {
	MetricName  *string                                                   `json:"MetricName" xml:"MetricName" require:"true"`
	RuleName    *string                                                   `json:"RuleName" xml:"RuleName" require:"true"`
	Category    *string                                                   `json:"Category" xml:"Category" require:"true"`
	Namespace   *string                                                   `json:"Namespace" xml:"Namespace" require:"true"`
	Period      *int                                                      `json:"Period" xml:"Period" require:"true"`
	Selector    *string                                                   `json:"Selector" xml:"Selector" require:"true"`
	Webhook     *string                                                   `json:"Webhook" xml:"Webhook" require:"true"`
	Escalations *ModifyMetricRuleTemplateRequestAlertTemplatesEscalations `json:"Escalations" xml:"Escalations" require:"true" type:"Struct"`
}

func (s ModifyMetricRuleTemplateRequestAlertTemplates) String() string {
	return tea.Prettify(s)
}

func (s ModifyMetricRuleTemplateRequestAlertTemplates) GoString() string {
	return s.String()
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplates) SetMetricName(v string) *ModifyMetricRuleTemplateRequestAlertTemplates {
	s.MetricName = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplates) SetRuleName(v string) *ModifyMetricRuleTemplateRequestAlertTemplates {
	s.RuleName = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplates) SetCategory(v string) *ModifyMetricRuleTemplateRequestAlertTemplates {
	s.Category = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplates) SetNamespace(v string) *ModifyMetricRuleTemplateRequestAlertTemplates {
	s.Namespace = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplates) SetPeriod(v int) *ModifyMetricRuleTemplateRequestAlertTemplates {
	s.Period = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplates) SetSelector(v string) *ModifyMetricRuleTemplateRequestAlertTemplates {
	s.Selector = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplates) SetWebhook(v string) *ModifyMetricRuleTemplateRequestAlertTemplates {
	s.Webhook = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplates) SetEscalations(v *ModifyMetricRuleTemplateRequestAlertTemplatesEscalations) *ModifyMetricRuleTemplateRequestAlertTemplates {
	s.Escalations = v
	return s
}

type ModifyMetricRuleTemplateRequestAlertTemplatesEscalations struct {
	Critical *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical `json:"Critical" xml:"Critical" require:"true" type:"Struct"`
	Warn     *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn     `json:"Warn" xml:"Warn" require:"true" type:"Struct"`
	Info     *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo     `json:"Info" xml:"Info" require:"true" type:"Struct"`
}

func (s ModifyMetricRuleTemplateRequestAlertTemplatesEscalations) String() string {
	return tea.Prettify(s)
}

func (s ModifyMetricRuleTemplateRequestAlertTemplatesEscalations) GoString() string {
	return s.String()
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalations) SetCritical(v *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalations {
	s.Critical = v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalations) SetWarn(v *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalations {
	s.Warn = v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalations) SetInfo(v *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalations {
	s.Info = v
	return s
}

type ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical struct {
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *int    `json:"Times" xml:"Times" require:"true"`
}

func (s ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical) String() string {
	return tea.Prettify(s)
}

func (s ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical) GoString() string {
	return s.String()
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical) SetStatistics(v string) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical {
	s.Statistics = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical) SetComparisonOperator(v string) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical {
	s.ComparisonOperator = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical) SetThreshold(v string) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical {
	s.Threshold = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical) SetTimes(v int) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical {
	s.Times = &v
	return s
}

type ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn struct {
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *int    `json:"Times" xml:"Times" require:"true"`
}

func (s ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn) String() string {
	return tea.Prettify(s)
}

func (s ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn) GoString() string {
	return s.String()
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn) SetStatistics(v string) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn {
	s.Statistics = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn) SetComparisonOperator(v string) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn {
	s.ComparisonOperator = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn) SetThreshold(v string) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn {
	s.Threshold = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn) SetTimes(v int) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn {
	s.Times = &v
	return s
}

type ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo struct {
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *int    `json:"Times" xml:"Times" require:"true"`
}

func (s ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo) String() string {
	return tea.Prettify(s)
}

func (s ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo) GoString() string {
	return s.String()
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo) SetStatistics(v string) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo {
	s.Statistics = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo) SetComparisonOperator(v string) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo {
	s.ComparisonOperator = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo) SetThreshold(v string) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo {
	s.Threshold = &v
	return s
}

func (s *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo) SetTimes(v int) *ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo {
	s.Times = &v
	return s
}

type ModifyMetricRuleTemplateResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *int    `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s ModifyMetricRuleTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyMetricRuleTemplateResponse) GoString() string {
	return s.String()
}

func (s *ModifyMetricRuleTemplateResponse) SetRequestId(v string) *ModifyMetricRuleTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *ModifyMetricRuleTemplateResponse) SetSuccess(v bool) *ModifyMetricRuleTemplateResponse {
	s.Success = &v
	return s
}

func (s *ModifyMetricRuleTemplateResponse) SetCode(v int) *ModifyMetricRuleTemplateResponse {
	s.Code = &v
	return s
}

func (s *ModifyMetricRuleTemplateResponse) SetMessage(v string) *ModifyMetricRuleTemplateResponse {
	s.Message = &v
	return s
}

type ApplyMetricRuleTemplateRequest struct {
	SilenceTime     *int64  `json:"SilenceTime" xml:"SilenceTime"`
	GroupId         *int64  `json:"GroupId" xml:"GroupId" require:"true"`
	TemplateIds     *string `json:"TemplateIds" xml:"TemplateIds" require:"true"`
	EnableStartTime *int64  `json:"EnableStartTime" xml:"EnableStartTime"`
	EnableEndTime   *int64  `json:"EnableEndTime" xml:"EnableEndTime"`
	NotifyLevel     *int64  `json:"NotifyLevel" xml:"NotifyLevel"`
	ApplyMode       *string `json:"ApplyMode" xml:"ApplyMode"`
	Webhook         *string `json:"Webhook" xml:"Webhook"`
}

func (s ApplyMetricRuleTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s ApplyMetricRuleTemplateRequest) GoString() string {
	return s.String()
}

func (s *ApplyMetricRuleTemplateRequest) SetSilenceTime(v int64) *ApplyMetricRuleTemplateRequest {
	s.SilenceTime = &v
	return s
}

func (s *ApplyMetricRuleTemplateRequest) SetGroupId(v int64) *ApplyMetricRuleTemplateRequest {
	s.GroupId = &v
	return s
}

func (s *ApplyMetricRuleTemplateRequest) SetTemplateIds(v string) *ApplyMetricRuleTemplateRequest {
	s.TemplateIds = &v
	return s
}

func (s *ApplyMetricRuleTemplateRequest) SetEnableStartTime(v int64) *ApplyMetricRuleTemplateRequest {
	s.EnableStartTime = &v
	return s
}

func (s *ApplyMetricRuleTemplateRequest) SetEnableEndTime(v int64) *ApplyMetricRuleTemplateRequest {
	s.EnableEndTime = &v
	return s
}

func (s *ApplyMetricRuleTemplateRequest) SetNotifyLevel(v int64) *ApplyMetricRuleTemplateRequest {
	s.NotifyLevel = &v
	return s
}

func (s *ApplyMetricRuleTemplateRequest) SetApplyMode(v string) *ApplyMetricRuleTemplateRequest {
	s.ApplyMode = &v
	return s
}

func (s *ApplyMetricRuleTemplateRequest) SetWebhook(v string) *ApplyMetricRuleTemplateRequest {
	s.Webhook = &v
	return s
}

type ApplyMetricRuleTemplateResponse struct {
	RequestId *string                                  `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool                                    `json:"Success" xml:"Success" require:"true"`
	Code      *int                                     `json:"Code" xml:"Code" require:"true"`
	Message   *string                                  `json:"Message" xml:"Message" require:"true"`
	Resource  *ApplyMetricRuleTemplateResponseResource `json:"Resource" xml:"Resource" require:"true" type:"Struct"`
}

func (s ApplyMetricRuleTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s ApplyMetricRuleTemplateResponse) GoString() string {
	return s.String()
}

func (s *ApplyMetricRuleTemplateResponse) SetRequestId(v string) *ApplyMetricRuleTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *ApplyMetricRuleTemplateResponse) SetSuccess(v bool) *ApplyMetricRuleTemplateResponse {
	s.Success = &v
	return s
}

func (s *ApplyMetricRuleTemplateResponse) SetCode(v int) *ApplyMetricRuleTemplateResponse {
	s.Code = &v
	return s
}

func (s *ApplyMetricRuleTemplateResponse) SetMessage(v string) *ApplyMetricRuleTemplateResponse {
	s.Message = &v
	return s
}

func (s *ApplyMetricRuleTemplateResponse) SetResource(v *ApplyMetricRuleTemplateResponseResource) *ApplyMetricRuleTemplateResponse {
	s.Resource = v
	return s
}

type ApplyMetricRuleTemplateResponseResource struct {
	GroupId      *int64                                                 `json:"GroupId" xml:"GroupId" require:"true"`
	AlertResults []*ApplyMetricRuleTemplateResponseResourceAlertResults `json:"AlertResults" xml:"AlertResults" require:"true" type:"Repeated"`
}

func (s ApplyMetricRuleTemplateResponseResource) String() string {
	return tea.Prettify(s)
}

func (s ApplyMetricRuleTemplateResponseResource) GoString() string {
	return s.String()
}

func (s *ApplyMetricRuleTemplateResponseResource) SetGroupId(v int64) *ApplyMetricRuleTemplateResponseResource {
	s.GroupId = &v
	return s
}

func (s *ApplyMetricRuleTemplateResponseResource) SetAlertResults(v []*ApplyMetricRuleTemplateResponseResourceAlertResults) *ApplyMetricRuleTemplateResponseResource {
	s.AlertResults = v
	return s
}

type ApplyMetricRuleTemplateResponseResourceAlertResults struct {
	GroupId  *int64  `json:"GroupId" xml:"GroupId" require:"true"`
	RuleId   *string `json:"RuleId" xml:"RuleId" require:"true"`
	Message  *string `json:"Message" xml:"Message" require:"true"`
	RuleName *string `json:"RuleName" xml:"RuleName" require:"true"`
	Code     *string `json:"Code" xml:"Code" require:"true"`
	Success  *bool   `json:"Success" xml:"Success" require:"true"`
}

func (s ApplyMetricRuleTemplateResponseResourceAlertResults) String() string {
	return tea.Prettify(s)
}

func (s ApplyMetricRuleTemplateResponseResourceAlertResults) GoString() string {
	return s.String()
}

func (s *ApplyMetricRuleTemplateResponseResourceAlertResults) SetGroupId(v int64) *ApplyMetricRuleTemplateResponseResourceAlertResults {
	s.GroupId = &v
	return s
}

func (s *ApplyMetricRuleTemplateResponseResourceAlertResults) SetRuleId(v string) *ApplyMetricRuleTemplateResponseResourceAlertResults {
	s.RuleId = &v
	return s
}

func (s *ApplyMetricRuleTemplateResponseResourceAlertResults) SetMessage(v string) *ApplyMetricRuleTemplateResponseResourceAlertResults {
	s.Message = &v
	return s
}

func (s *ApplyMetricRuleTemplateResponseResourceAlertResults) SetRuleName(v string) *ApplyMetricRuleTemplateResponseResourceAlertResults {
	s.RuleName = &v
	return s
}

func (s *ApplyMetricRuleTemplateResponseResourceAlertResults) SetCode(v string) *ApplyMetricRuleTemplateResponseResourceAlertResults {
	s.Code = &v
	return s
}

func (s *ApplyMetricRuleTemplateResponseResourceAlertResults) SetSuccess(v bool) *ApplyMetricRuleTemplateResponseResourceAlertResults {
	s.Success = &v
	return s
}

type DescribeMetricRuleTemplateAttributeRequest struct {
	Name       *string `json:"Name" xml:"Name"`
	TemplateId *string `json:"TemplateId" xml:"TemplateId"`
}

func (s DescribeMetricRuleTemplateAttributeRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateAttributeRequest) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateAttributeRequest) SetName(v string) *DescribeMetricRuleTemplateAttributeRequest {
	s.Name = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeRequest) SetTemplateId(v string) *DescribeMetricRuleTemplateAttributeRequest {
	s.TemplateId = &v
	return s
}

type DescribeMetricRuleTemplateAttributeResponse struct {
	RequestId *string                                              `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool                                                `json:"Success" xml:"Success" require:"true"`
	Code      *int                                                 `json:"Code" xml:"Code" require:"true"`
	Message   *string                                              `json:"Message" xml:"Message" require:"true"`
	Resource  *DescribeMetricRuleTemplateAttributeResponseResource `json:"Resource" xml:"Resource" require:"true" type:"Struct"`
}

func (s DescribeMetricRuleTemplateAttributeResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateAttributeResponse) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateAttributeResponse) SetRequestId(v string) *DescribeMetricRuleTemplateAttributeResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponse) SetSuccess(v bool) *DescribeMetricRuleTemplateAttributeResponse {
	s.Success = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponse) SetCode(v int) *DescribeMetricRuleTemplateAttributeResponse {
	s.Code = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponse) SetMessage(v string) *DescribeMetricRuleTemplateAttributeResponse {
	s.Message = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponse) SetResource(v *DescribeMetricRuleTemplateAttributeResponseResource) *DescribeMetricRuleTemplateAttributeResponse {
	s.Resource = v
	return s
}

type DescribeMetricRuleTemplateAttributeResponseResource struct {
	Name           *string                                                            `json:"Name" xml:"Name" require:"true"`
	TemplateId     *string                                                            `json:"TemplateId" xml:"TemplateId" require:"true"`
	RestVersion    *string                                                            `json:"RestVersion" xml:"RestVersion" require:"true"`
	Description    *string                                                            `json:"Description" xml:"Description" require:"true"`
	AlertTemplates *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplates `json:"AlertTemplates" xml:"AlertTemplates" require:"true" type:"Struct"`
}

func (s DescribeMetricRuleTemplateAttributeResponseResource) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateAttributeResponseResource) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateAttributeResponseResource) SetName(v string) *DescribeMetricRuleTemplateAttributeResponseResource {
	s.Name = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResource) SetTemplateId(v string) *DescribeMetricRuleTemplateAttributeResponseResource {
	s.TemplateId = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResource) SetRestVersion(v string) *DescribeMetricRuleTemplateAttributeResponseResource {
	s.RestVersion = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResource) SetDescription(v string) *DescribeMetricRuleTemplateAttributeResponseResource {
	s.Description = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResource) SetAlertTemplates(v *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplates) *DescribeMetricRuleTemplateAttributeResponseResource {
	s.AlertTemplates = v
	return s
}

type DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplates struct {
	AlertTemplate []*DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate `json:"AlertTemplate" xml:"AlertTemplate" require:"true" type:"Repeated"`
}

func (s DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplates) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplates) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplates) SetAlertTemplate(v []*DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplates {
	s.AlertTemplate = v
	return s
}

type DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate struct {
	RuleName    *string                                                                                    `json:"RuleName" xml:"RuleName" require:"true"`
	Category    *string                                                                                    `json:"Category" xml:"Category" require:"true"`
	Namespace   *string                                                                                    `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName  *string                                                                                    `json:"MetricName" xml:"MetricName" require:"true"`
	Selector    *string                                                                                    `json:"Selector" xml:"Selector" require:"true"`
	Webhook     *string                                                                                    `json:"Webhook" xml:"Webhook" require:"true"`
	Escalations *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations `json:"Escalations" xml:"Escalations" require:"true" type:"Struct"`
}

func (s DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate) SetRuleName(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate {
	s.RuleName = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate) SetCategory(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate {
	s.Category = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate) SetNamespace(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate {
	s.Namespace = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate) SetMetricName(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate {
	s.MetricName = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate) SetSelector(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate {
	s.Selector = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate) SetWebhook(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate {
	s.Webhook = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate) SetEscalations(v *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate {
	s.Escalations = v
	return s
}

type DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations struct {
	Info     *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo     `json:"Info" xml:"Info" require:"true" type:"Struct"`
	Warn     *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn     `json:"Warn" xml:"Warn" require:"true" type:"Struct"`
	Critical *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical `json:"Critical" xml:"Critical" require:"true" type:"Struct"`
}

func (s DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations) SetInfo(v *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations {
	s.Info = v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations) SetWarn(v *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations {
	s.Warn = v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations) SetCritical(v *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations {
	s.Critical = v
	return s
}

type DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo struct {
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *int    `json:"Times" xml:"Times" require:"true"`
}

func (s DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo) SetStatistics(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo {
	s.Statistics = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo) SetComparisonOperator(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo {
	s.ComparisonOperator = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo) SetThreshold(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo {
	s.Threshold = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo) SetTimes(v int) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo {
	s.Times = &v
	return s
}

type DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn struct {
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *int    `json:"Times" xml:"Times" require:"true"`
}

func (s DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn) SetStatistics(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn {
	s.Statistics = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn) SetComparisonOperator(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn {
	s.ComparisonOperator = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn) SetThreshold(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn {
	s.Threshold = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn) SetTimes(v int) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn {
	s.Times = &v
	return s
}

type DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical struct {
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *int    `json:"Times" xml:"Times" require:"true"`
}

func (s DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical) SetStatistics(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical {
	s.Statistics = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical) SetComparisonOperator(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical {
	s.ComparisonOperator = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical) SetThreshold(v string) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical {
	s.Threshold = &v
	return s
}

func (s *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical) SetTimes(v int) *DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical {
	s.Times = &v
	return s
}

type CreateMetricRuleTemplateRequest struct {
	Name           *string                                          `json:"Name" xml:"Name" require:"true"`
	Description    *string                                          `json:"Description" xml:"Description"`
	AlertTemplates []*CreateMetricRuleTemplateRequestAlertTemplates `json:"AlertTemplates" xml:"AlertTemplates" type:"Repeated"`
}

func (s CreateMetricRuleTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateMetricRuleTemplateRequest) GoString() string {
	return s.String()
}

func (s *CreateMetricRuleTemplateRequest) SetName(v string) *CreateMetricRuleTemplateRequest {
	s.Name = &v
	return s
}

func (s *CreateMetricRuleTemplateRequest) SetDescription(v string) *CreateMetricRuleTemplateRequest {
	s.Description = &v
	return s
}

func (s *CreateMetricRuleTemplateRequest) SetAlertTemplates(v []*CreateMetricRuleTemplateRequestAlertTemplates) *CreateMetricRuleTemplateRequest {
	s.AlertTemplates = v
	return s
}

type CreateMetricRuleTemplateRequestAlertTemplates struct {
	MetricName  *string                                                   `json:"MetricName" xml:"MetricName" require:"true"`
	RuleName    *string                                                   `json:"RuleName" xml:"RuleName" require:"true"`
	Category    *string                                                   `json:"Category" xml:"Category" require:"true"`
	Namespace   *string                                                   `json:"Namespace" xml:"Namespace" require:"true"`
	Period      *int                                                      `json:"Period" xml:"Period" require:"true"`
	Selector    *string                                                   `json:"Selector" xml:"Selector" require:"true"`
	Webhook     *string                                                   `json:"Webhook" xml:"Webhook" require:"true"`
	Escalations *CreateMetricRuleTemplateRequestAlertTemplatesEscalations `json:"Escalations" xml:"Escalations" require:"true" type:"Struct"`
}

func (s CreateMetricRuleTemplateRequestAlertTemplates) String() string {
	return tea.Prettify(s)
}

func (s CreateMetricRuleTemplateRequestAlertTemplates) GoString() string {
	return s.String()
}

func (s *CreateMetricRuleTemplateRequestAlertTemplates) SetMetricName(v string) *CreateMetricRuleTemplateRequestAlertTemplates {
	s.MetricName = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplates) SetRuleName(v string) *CreateMetricRuleTemplateRequestAlertTemplates {
	s.RuleName = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplates) SetCategory(v string) *CreateMetricRuleTemplateRequestAlertTemplates {
	s.Category = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplates) SetNamespace(v string) *CreateMetricRuleTemplateRequestAlertTemplates {
	s.Namespace = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplates) SetPeriod(v int) *CreateMetricRuleTemplateRequestAlertTemplates {
	s.Period = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplates) SetSelector(v string) *CreateMetricRuleTemplateRequestAlertTemplates {
	s.Selector = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplates) SetWebhook(v string) *CreateMetricRuleTemplateRequestAlertTemplates {
	s.Webhook = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplates) SetEscalations(v *CreateMetricRuleTemplateRequestAlertTemplatesEscalations) *CreateMetricRuleTemplateRequestAlertTemplates {
	s.Escalations = v
	return s
}

type CreateMetricRuleTemplateRequestAlertTemplatesEscalations struct {
	Critical *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical `json:"Critical" xml:"Critical" require:"true" type:"Struct"`
	Warn     *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn     `json:"Warn" xml:"Warn" require:"true" type:"Struct"`
	Info     *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo     `json:"Info" xml:"Info" require:"true" type:"Struct"`
}

func (s CreateMetricRuleTemplateRequestAlertTemplatesEscalations) String() string {
	return tea.Prettify(s)
}

func (s CreateMetricRuleTemplateRequestAlertTemplatesEscalations) GoString() string {
	return s.String()
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalations) SetCritical(v *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical) *CreateMetricRuleTemplateRequestAlertTemplatesEscalations {
	s.Critical = v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalations) SetWarn(v *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn) *CreateMetricRuleTemplateRequestAlertTemplatesEscalations {
	s.Warn = v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalations) SetInfo(v *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo) *CreateMetricRuleTemplateRequestAlertTemplatesEscalations {
	s.Info = v
	return s
}

type CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical struct {
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *int    `json:"Times" xml:"Times" require:"true"`
}

func (s CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical) String() string {
	return tea.Prettify(s)
}

func (s CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical) GoString() string {
	return s.String()
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical) SetStatistics(v string) *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical {
	s.Statistics = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical) SetComparisonOperator(v string) *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical {
	s.ComparisonOperator = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical) SetThreshold(v string) *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical {
	s.Threshold = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical) SetTimes(v int) *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical {
	s.Times = &v
	return s
}

type CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn struct {
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *int    `json:"Times" xml:"Times" require:"true"`
}

func (s CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn) String() string {
	return tea.Prettify(s)
}

func (s CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn) GoString() string {
	return s.String()
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn) SetStatistics(v string) *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn {
	s.Statistics = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn) SetComparisonOperator(v string) *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn {
	s.ComparisonOperator = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn) SetThreshold(v string) *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn {
	s.Threshold = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn) SetTimes(v int) *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn {
	s.Times = &v
	return s
}

type CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo struct {
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	Times              *int    `json:"Times" xml:"Times" require:"true"`
}

func (s CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo) String() string {
	return tea.Prettify(s)
}

func (s CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo) GoString() string {
	return s.String()
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo) SetStatistics(v string) *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo {
	s.Statistics = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo) SetComparisonOperator(v string) *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo {
	s.ComparisonOperator = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo) SetThreshold(v string) *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo {
	s.Threshold = &v
	return s
}

func (s *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo) SetTimes(v int) *CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo {
	s.Times = &v
	return s
}

type CreateMetricRuleTemplateResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *int    `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Id        *int64  `json:"Id" xml:"Id" require:"true"`
}

func (s CreateMetricRuleTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateMetricRuleTemplateResponse) GoString() string {
	return s.String()
}

func (s *CreateMetricRuleTemplateResponse) SetRequestId(v string) *CreateMetricRuleTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *CreateMetricRuleTemplateResponse) SetSuccess(v bool) *CreateMetricRuleTemplateResponse {
	s.Success = &v
	return s
}

func (s *CreateMetricRuleTemplateResponse) SetCode(v int) *CreateMetricRuleTemplateResponse {
	s.Code = &v
	return s
}

func (s *CreateMetricRuleTemplateResponse) SetMessage(v string) *CreateMetricRuleTemplateResponse {
	s.Message = &v
	return s
}

func (s *CreateMetricRuleTemplateResponse) SetId(v int64) *CreateMetricRuleTemplateResponse {
	s.Id = &v
	return s
}

type DeleteMetricRuleTemplateRequest struct {
	TemplateId *string `json:"TemplateId" xml:"TemplateId" require:"true"`
}

func (s DeleteMetricRuleTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteMetricRuleTemplateRequest) GoString() string {
	return s.String()
}

func (s *DeleteMetricRuleTemplateRequest) SetTemplateId(v string) *DeleteMetricRuleTemplateRequest {
	s.TemplateId = &v
	return s
}

type DeleteMetricRuleTemplateResponse struct {
	RequestId *string                                   `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool                                     `json:"Success" xml:"Success" require:"true"`
	Code      *int                                      `json:"Code" xml:"Code" require:"true"`
	Message   *string                                   `json:"Message" xml:"Message" require:"true"`
	Resource  *DeleteMetricRuleTemplateResponseResource `json:"Resource" xml:"Resource" require:"true" type:"Struct"`
}

func (s DeleteMetricRuleTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteMetricRuleTemplateResponse) GoString() string {
	return s.String()
}

func (s *DeleteMetricRuleTemplateResponse) SetRequestId(v string) *DeleteMetricRuleTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteMetricRuleTemplateResponse) SetSuccess(v bool) *DeleteMetricRuleTemplateResponse {
	s.Success = &v
	return s
}

func (s *DeleteMetricRuleTemplateResponse) SetCode(v int) *DeleteMetricRuleTemplateResponse {
	s.Code = &v
	return s
}

func (s *DeleteMetricRuleTemplateResponse) SetMessage(v string) *DeleteMetricRuleTemplateResponse {
	s.Message = &v
	return s
}

func (s *DeleteMetricRuleTemplateResponse) SetResource(v *DeleteMetricRuleTemplateResponseResource) *DeleteMetricRuleTemplateResponse {
	s.Resource = v
	return s
}

type DeleteMetricRuleTemplateResponseResource struct {
	TemplateId *string `json:"TemplateId" xml:"TemplateId" require:"true"`
}

func (s DeleteMetricRuleTemplateResponseResource) String() string {
	return tea.Prettify(s)
}

func (s DeleteMetricRuleTemplateResponseResource) GoString() string {
	return s.String()
}

func (s *DeleteMetricRuleTemplateResponseResource) SetTemplateId(v string) *DeleteMetricRuleTemplateResponseResource {
	s.TemplateId = &v
	return s
}

type DescribeMetricRuleTemplateListRequest struct {
	Name       *string `json:"Name" xml:"Name"`
	Keyword    *string `json:"Keyword" xml:"Keyword"`
	TemplateId *int64  `json:"TemplateId" xml:"TemplateId"`
	PageNumber *int64  `json:"PageNumber" xml:"PageNumber"`
	PageSize   *int64  `json:"PageSize" xml:"PageSize"`
	History    *bool   `json:"History" xml:"History"`
}

func (s DescribeMetricRuleTemplateListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateListRequest) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateListRequest) SetName(v string) *DescribeMetricRuleTemplateListRequest {
	s.Name = &v
	return s
}

func (s *DescribeMetricRuleTemplateListRequest) SetKeyword(v string) *DescribeMetricRuleTemplateListRequest {
	s.Keyword = &v
	return s
}

func (s *DescribeMetricRuleTemplateListRequest) SetTemplateId(v int64) *DescribeMetricRuleTemplateListRequest {
	s.TemplateId = &v
	return s
}

func (s *DescribeMetricRuleTemplateListRequest) SetPageNumber(v int64) *DescribeMetricRuleTemplateListRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeMetricRuleTemplateListRequest) SetPageSize(v int64) *DescribeMetricRuleTemplateListRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeMetricRuleTemplateListRequest) SetHistory(v bool) *DescribeMetricRuleTemplateListRequest {
	s.History = &v
	return s
}

type DescribeMetricRuleTemplateListResponse struct {
	RequestId *string                                          `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool                                            `json:"Success" xml:"Success" require:"true"`
	Code      *int                                             `json:"Code" xml:"Code" require:"true"`
	Message   *string                                          `json:"Message" xml:"Message" require:"true"`
	Total     *int64                                           `json:"Total" xml:"Total" require:"true"`
	Templates *DescribeMetricRuleTemplateListResponseTemplates `json:"Templates" xml:"Templates" require:"true" type:"Struct"`
}

func (s DescribeMetricRuleTemplateListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateListResponse) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateListResponse) SetRequestId(v string) *DescribeMetricRuleTemplateListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMetricRuleTemplateListResponse) SetSuccess(v bool) *DescribeMetricRuleTemplateListResponse {
	s.Success = &v
	return s
}

func (s *DescribeMetricRuleTemplateListResponse) SetCode(v int) *DescribeMetricRuleTemplateListResponse {
	s.Code = &v
	return s
}

func (s *DescribeMetricRuleTemplateListResponse) SetMessage(v string) *DescribeMetricRuleTemplateListResponse {
	s.Message = &v
	return s
}

func (s *DescribeMetricRuleTemplateListResponse) SetTotal(v int64) *DescribeMetricRuleTemplateListResponse {
	s.Total = &v
	return s
}

func (s *DescribeMetricRuleTemplateListResponse) SetTemplates(v *DescribeMetricRuleTemplateListResponseTemplates) *DescribeMetricRuleTemplateListResponse {
	s.Templates = v
	return s
}

type DescribeMetricRuleTemplateListResponseTemplates struct {
	Template []*DescribeMetricRuleTemplateListResponseTemplatesTemplate `json:"Template" xml:"Template" require:"true" type:"Repeated"`
}

func (s DescribeMetricRuleTemplateListResponseTemplates) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateListResponseTemplates) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateListResponseTemplates) SetTemplate(v []*DescribeMetricRuleTemplateListResponseTemplatesTemplate) *DescribeMetricRuleTemplateListResponseTemplates {
	s.Template = v
	return s
}

type DescribeMetricRuleTemplateListResponseTemplatesTemplate struct {
	Name           *string                                                                `json:"Name" xml:"Name" require:"true"`
	Description    *string                                                                `json:"Description" xml:"Description" require:"true"`
	RestVersion    *int64                                                                 `json:"RestVersion" xml:"RestVersion" require:"true"`
	TemplateId     *int64                                                                 `json:"TemplateId" xml:"TemplateId" require:"true"`
	GmtCreate      *int64                                                                 `json:"GmtCreate" xml:"GmtCreate" require:"true"`
	GmtModified    *int64                                                                 `json:"GmtModified" xml:"GmtModified" require:"true"`
	ApplyHistories *DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistories `json:"ApplyHistories" xml:"ApplyHistories" require:"true" type:"Struct"`
}

func (s DescribeMetricRuleTemplateListResponseTemplatesTemplate) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateListResponseTemplatesTemplate) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateListResponseTemplatesTemplate) SetName(v string) *DescribeMetricRuleTemplateListResponseTemplatesTemplate {
	s.Name = &v
	return s
}

func (s *DescribeMetricRuleTemplateListResponseTemplatesTemplate) SetDescription(v string) *DescribeMetricRuleTemplateListResponseTemplatesTemplate {
	s.Description = &v
	return s
}

func (s *DescribeMetricRuleTemplateListResponseTemplatesTemplate) SetRestVersion(v int64) *DescribeMetricRuleTemplateListResponseTemplatesTemplate {
	s.RestVersion = &v
	return s
}

func (s *DescribeMetricRuleTemplateListResponseTemplatesTemplate) SetTemplateId(v int64) *DescribeMetricRuleTemplateListResponseTemplatesTemplate {
	s.TemplateId = &v
	return s
}

func (s *DescribeMetricRuleTemplateListResponseTemplatesTemplate) SetGmtCreate(v int64) *DescribeMetricRuleTemplateListResponseTemplatesTemplate {
	s.GmtCreate = &v
	return s
}

func (s *DescribeMetricRuleTemplateListResponseTemplatesTemplate) SetGmtModified(v int64) *DescribeMetricRuleTemplateListResponseTemplatesTemplate {
	s.GmtModified = &v
	return s
}

func (s *DescribeMetricRuleTemplateListResponseTemplatesTemplate) SetApplyHistories(v *DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistories) *DescribeMetricRuleTemplateListResponseTemplatesTemplate {
	s.ApplyHistories = v
	return s
}

type DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistories struct {
	ApplyHistory []*DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory `json:"ApplyHistory" xml:"ApplyHistory" require:"true" type:"Repeated"`
}

func (s DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistories) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistories) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistories) SetApplyHistory(v []*DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory) *DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistories {
	s.ApplyHistory = v
	return s
}

type DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory struct {
	GroupId   *int64  `json:"GroupId" xml:"GroupId" require:"true"`
	GroupName *string `json:"GroupName" xml:"GroupName" require:"true"`
	ApplyTime *int64  `json:"ApplyTime" xml:"ApplyTime" require:"true"`
}

func (s DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory) GoString() string {
	return s.String()
}

func (s *DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory) SetGroupId(v int64) *DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory {
	s.GroupId = &v
	return s
}

func (s *DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory) SetGroupName(v string) *DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory {
	s.GroupName = &v
	return s
}

func (s *DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory) SetApplyTime(v int64) *DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory {
	s.ApplyTime = &v
	return s
}

type PutCustomEventRequest struct {
	EventInfo []*PutCustomEventRequestEventInfo `json:"EventInfo" xml:"EventInfo" type:"Repeated"`
}

func (s PutCustomEventRequest) String() string {
	return tea.Prettify(s)
}

func (s PutCustomEventRequest) GoString() string {
	return s.String()
}

func (s *PutCustomEventRequest) SetEventInfo(v []*PutCustomEventRequestEventInfo) *PutCustomEventRequest {
	s.EventInfo = v
	return s
}

type PutCustomEventRequestEventInfo struct {
	EventName *string `json:"EventName" xml:"EventName" require:"true"`
	Content   *string `json:"Content" xml:"Content" require:"true"`
	Time      *string `json:"Time" xml:"Time" require:"true"`
	GroupId   *string `json:"GroupId" xml:"GroupId" require:"true"`
}

func (s PutCustomEventRequestEventInfo) String() string {
	return tea.Prettify(s)
}

func (s PutCustomEventRequestEventInfo) GoString() string {
	return s.String()
}

func (s *PutCustomEventRequestEventInfo) SetEventName(v string) *PutCustomEventRequestEventInfo {
	s.EventName = &v
	return s
}

func (s *PutCustomEventRequestEventInfo) SetContent(v string) *PutCustomEventRequestEventInfo {
	s.Content = &v
	return s
}

func (s *PutCustomEventRequestEventInfo) SetTime(v string) *PutCustomEventRequestEventInfo {
	s.Time = &v
	return s
}

func (s *PutCustomEventRequestEventInfo) SetGroupId(v string) *PutCustomEventRequestEventInfo {
	s.GroupId = &v
	return s
}

type PutCustomEventResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s PutCustomEventResponse) String() string {
	return tea.Prettify(s)
}

func (s PutCustomEventResponse) GoString() string {
	return s.String()
}

func (s *PutCustomEventResponse) SetRequestId(v string) *PutCustomEventResponse {
	s.RequestId = &v
	return s
}

func (s *PutCustomEventResponse) SetCode(v string) *PutCustomEventResponse {
	s.Code = &v
	return s
}

func (s *PutCustomEventResponse) SetMessage(v string) *PutCustomEventResponse {
	s.Message = &v
	return s
}

type DescribeCustomEventCountRequest struct {
	Name           *string `json:"Name" xml:"Name"`
	Level          *string `json:"Level" xml:"Level"`
	EventId        *string `json:"EventId" xml:"EventId"`
	GroupId        *string `json:"GroupId" xml:"GroupId"`
	SearchKeywords *string `json:"SearchKeywords" xml:"SearchKeywords"`
	StartTime      *string `json:"StartTime" xml:"StartTime"`
	EndTime        *string `json:"EndTime" xml:"EndTime"`
}

func (s DescribeCustomEventCountRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomEventCountRequest) GoString() string {
	return s.String()
}

func (s *DescribeCustomEventCountRequest) SetName(v string) *DescribeCustomEventCountRequest {
	s.Name = &v
	return s
}

func (s *DescribeCustomEventCountRequest) SetLevel(v string) *DescribeCustomEventCountRequest {
	s.Level = &v
	return s
}

func (s *DescribeCustomEventCountRequest) SetEventId(v string) *DescribeCustomEventCountRequest {
	s.EventId = &v
	return s
}

func (s *DescribeCustomEventCountRequest) SetGroupId(v string) *DescribeCustomEventCountRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeCustomEventCountRequest) SetSearchKeywords(v string) *DescribeCustomEventCountRequest {
	s.SearchKeywords = &v
	return s
}

func (s *DescribeCustomEventCountRequest) SetStartTime(v string) *DescribeCustomEventCountRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeCustomEventCountRequest) SetEndTime(v string) *DescribeCustomEventCountRequest {
	s.EndTime = &v
	return s
}

type DescribeCustomEventCountResponse struct {
	Code              *string                                            `json:"Code" xml:"Code" require:"true"`
	Message           *string                                            `json:"Message" xml:"Message" require:"true"`
	RequestId         *string                                            `json:"RequestId" xml:"RequestId" require:"true"`
	Success           *bool                                              `json:"Success" xml:"Success" require:"true"`
	CustomEventCounts *DescribeCustomEventCountResponseCustomEventCounts `json:"CustomEventCounts" xml:"CustomEventCounts" require:"true" type:"Struct"`
}

func (s DescribeCustomEventCountResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomEventCountResponse) GoString() string {
	return s.String()
}

func (s *DescribeCustomEventCountResponse) SetCode(v string) *DescribeCustomEventCountResponse {
	s.Code = &v
	return s
}

func (s *DescribeCustomEventCountResponse) SetMessage(v string) *DescribeCustomEventCountResponse {
	s.Message = &v
	return s
}

func (s *DescribeCustomEventCountResponse) SetRequestId(v string) *DescribeCustomEventCountResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeCustomEventCountResponse) SetSuccess(v bool) *DescribeCustomEventCountResponse {
	s.Success = &v
	return s
}

func (s *DescribeCustomEventCountResponse) SetCustomEventCounts(v *DescribeCustomEventCountResponseCustomEventCounts) *DescribeCustomEventCountResponse {
	s.CustomEventCounts = v
	return s
}

type DescribeCustomEventCountResponseCustomEventCounts struct {
	CustomEventCount []*DescribeCustomEventCountResponseCustomEventCountsCustomEventCount `json:"CustomEventCount" xml:"CustomEventCount" require:"true" type:"Repeated"`
}

func (s DescribeCustomEventCountResponseCustomEventCounts) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomEventCountResponseCustomEventCounts) GoString() string {
	return s.String()
}

func (s *DescribeCustomEventCountResponseCustomEventCounts) SetCustomEventCount(v []*DescribeCustomEventCountResponseCustomEventCountsCustomEventCount) *DescribeCustomEventCountResponseCustomEventCounts {
	s.CustomEventCount = v
	return s
}

type DescribeCustomEventCountResponseCustomEventCountsCustomEventCount struct {
	Name *string `json:"Name" xml:"Name" require:"true"`
	Num  *int    `json:"Num" xml:"Num" require:"true"`
	Time *int64  `json:"Time" xml:"Time" require:"true"`
}

func (s DescribeCustomEventCountResponseCustomEventCountsCustomEventCount) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomEventCountResponseCustomEventCountsCustomEventCount) GoString() string {
	return s.String()
}

func (s *DescribeCustomEventCountResponseCustomEventCountsCustomEventCount) SetName(v string) *DescribeCustomEventCountResponseCustomEventCountsCustomEventCount {
	s.Name = &v
	return s
}

func (s *DescribeCustomEventCountResponseCustomEventCountsCustomEventCount) SetNum(v int) *DescribeCustomEventCountResponseCustomEventCountsCustomEventCount {
	s.Num = &v
	return s
}

func (s *DescribeCustomEventCountResponseCustomEventCountsCustomEventCount) SetTime(v int64) *DescribeCustomEventCountResponseCustomEventCountsCustomEventCount {
	s.Time = &v
	return s
}

type DescribeCustomEventAttributeRequest struct {
	Name           *string `json:"Name" xml:"Name"`
	Level          *string `json:"Level" xml:"Level"`
	EventId        *string `json:"EventId" xml:"EventId"`
	GroupId        *string `json:"GroupId" xml:"GroupId"`
	SearchKeywords *string `json:"SearchKeywords" xml:"SearchKeywords"`
	StartTime      *string `json:"StartTime" xml:"StartTime"`
	EndTime        *string `json:"EndTime" xml:"EndTime"`
	PageNumber     *int    `json:"PageNumber" xml:"PageNumber"`
	PageSize       *int    `json:"PageSize" xml:"PageSize"`
}

func (s DescribeCustomEventAttributeRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomEventAttributeRequest) GoString() string {
	return s.String()
}

func (s *DescribeCustomEventAttributeRequest) SetName(v string) *DescribeCustomEventAttributeRequest {
	s.Name = &v
	return s
}

func (s *DescribeCustomEventAttributeRequest) SetLevel(v string) *DescribeCustomEventAttributeRequest {
	s.Level = &v
	return s
}

func (s *DescribeCustomEventAttributeRequest) SetEventId(v string) *DescribeCustomEventAttributeRequest {
	s.EventId = &v
	return s
}

func (s *DescribeCustomEventAttributeRequest) SetGroupId(v string) *DescribeCustomEventAttributeRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeCustomEventAttributeRequest) SetSearchKeywords(v string) *DescribeCustomEventAttributeRequest {
	s.SearchKeywords = &v
	return s
}

func (s *DescribeCustomEventAttributeRequest) SetStartTime(v string) *DescribeCustomEventAttributeRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeCustomEventAttributeRequest) SetEndTime(v string) *DescribeCustomEventAttributeRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeCustomEventAttributeRequest) SetPageNumber(v int) *DescribeCustomEventAttributeRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeCustomEventAttributeRequest) SetPageSize(v int) *DescribeCustomEventAttributeRequest {
	s.PageSize = &v
	return s
}

type DescribeCustomEventAttributeResponse struct {
	Code         *string                                           `json:"Code" xml:"Code" require:"true"`
	Message      *string                                           `json:"Message" xml:"Message" require:"true"`
	RequestId    *string                                           `json:"RequestId" xml:"RequestId" require:"true"`
	Success      *string                                           `json:"Success" xml:"Success" require:"true"`
	CustomEvents *DescribeCustomEventAttributeResponseCustomEvents `json:"CustomEvents" xml:"CustomEvents" require:"true" type:"Struct"`
}

func (s DescribeCustomEventAttributeResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomEventAttributeResponse) GoString() string {
	return s.String()
}

func (s *DescribeCustomEventAttributeResponse) SetCode(v string) *DescribeCustomEventAttributeResponse {
	s.Code = &v
	return s
}

func (s *DescribeCustomEventAttributeResponse) SetMessage(v string) *DescribeCustomEventAttributeResponse {
	s.Message = &v
	return s
}

func (s *DescribeCustomEventAttributeResponse) SetRequestId(v string) *DescribeCustomEventAttributeResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeCustomEventAttributeResponse) SetSuccess(v string) *DescribeCustomEventAttributeResponse {
	s.Success = &v
	return s
}

func (s *DescribeCustomEventAttributeResponse) SetCustomEvents(v *DescribeCustomEventAttributeResponseCustomEvents) *DescribeCustomEventAttributeResponse {
	s.CustomEvents = v
	return s
}

type DescribeCustomEventAttributeResponseCustomEvents struct {
	CustomEvent []*DescribeCustomEventAttributeResponseCustomEventsCustomEvent `json:"CustomEvent" xml:"CustomEvent" require:"true" type:"Repeated"`
}

func (s DescribeCustomEventAttributeResponseCustomEvents) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomEventAttributeResponseCustomEvents) GoString() string {
	return s.String()
}

func (s *DescribeCustomEventAttributeResponseCustomEvents) SetCustomEvent(v []*DescribeCustomEventAttributeResponseCustomEventsCustomEvent) *DescribeCustomEventAttributeResponseCustomEvents {
	s.CustomEvent = v
	return s
}

type DescribeCustomEventAttributeResponseCustomEventsCustomEvent struct {
	Id      *string `json:"Id" xml:"Id" require:"true"`
	Content *string `json:"Content" xml:"Content" require:"true"`
	GroupId *string `json:"GroupId" xml:"GroupId" require:"true"`
	Name    *string `json:"Name" xml:"Name" require:"true"`
	Time    *string `json:"Time" xml:"Time" require:"true"`
}

func (s DescribeCustomEventAttributeResponseCustomEventsCustomEvent) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomEventAttributeResponseCustomEventsCustomEvent) GoString() string {
	return s.String()
}

func (s *DescribeCustomEventAttributeResponseCustomEventsCustomEvent) SetId(v string) *DescribeCustomEventAttributeResponseCustomEventsCustomEvent {
	s.Id = &v
	return s
}

func (s *DescribeCustomEventAttributeResponseCustomEventsCustomEvent) SetContent(v string) *DescribeCustomEventAttributeResponseCustomEventsCustomEvent {
	s.Content = &v
	return s
}

func (s *DescribeCustomEventAttributeResponseCustomEventsCustomEvent) SetGroupId(v string) *DescribeCustomEventAttributeResponseCustomEventsCustomEvent {
	s.GroupId = &v
	return s
}

func (s *DescribeCustomEventAttributeResponseCustomEventsCustomEvent) SetName(v string) *DescribeCustomEventAttributeResponseCustomEventsCustomEvent {
	s.Name = &v
	return s
}

func (s *DescribeCustomEventAttributeResponseCustomEventsCustomEvent) SetTime(v string) *DescribeCustomEventAttributeResponseCustomEventsCustomEvent {
	s.Time = &v
	return s
}

type DescribeCustomEventHistogramRequest struct {
	Name           *string `json:"Name" xml:"Name"`
	Level          *string `json:"Level" xml:"Level"`
	EventId        *string `json:"EventId" xml:"EventId"`
	GroupId        *string `json:"GroupId" xml:"GroupId"`
	SearchKeywords *string `json:"SearchKeywords" xml:"SearchKeywords"`
	StartTime      *string `json:"StartTime" xml:"StartTime"`
	EndTime        *string `json:"EndTime" xml:"EndTime"`
}

func (s DescribeCustomEventHistogramRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomEventHistogramRequest) GoString() string {
	return s.String()
}

func (s *DescribeCustomEventHistogramRequest) SetName(v string) *DescribeCustomEventHistogramRequest {
	s.Name = &v
	return s
}

func (s *DescribeCustomEventHistogramRequest) SetLevel(v string) *DescribeCustomEventHistogramRequest {
	s.Level = &v
	return s
}

func (s *DescribeCustomEventHistogramRequest) SetEventId(v string) *DescribeCustomEventHistogramRequest {
	s.EventId = &v
	return s
}

func (s *DescribeCustomEventHistogramRequest) SetGroupId(v string) *DescribeCustomEventHistogramRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeCustomEventHistogramRequest) SetSearchKeywords(v string) *DescribeCustomEventHistogramRequest {
	s.SearchKeywords = &v
	return s
}

func (s *DescribeCustomEventHistogramRequest) SetStartTime(v string) *DescribeCustomEventHistogramRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeCustomEventHistogramRequest) SetEndTime(v string) *DescribeCustomEventHistogramRequest {
	s.EndTime = &v
	return s
}

type DescribeCustomEventHistogramResponse struct {
	Code            *string                                              `json:"Code" xml:"Code" require:"true"`
	Message         *string                                              `json:"Message" xml:"Message" require:"true"`
	RequestId       *string                                              `json:"RequestId" xml:"RequestId" require:"true"`
	Success         *string                                              `json:"Success" xml:"Success" require:"true"`
	EventHistograms *DescribeCustomEventHistogramResponseEventHistograms `json:"EventHistograms" xml:"EventHistograms" require:"true" type:"Struct"`
}

func (s DescribeCustomEventHistogramResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomEventHistogramResponse) GoString() string {
	return s.String()
}

func (s *DescribeCustomEventHistogramResponse) SetCode(v string) *DescribeCustomEventHistogramResponse {
	s.Code = &v
	return s
}

func (s *DescribeCustomEventHistogramResponse) SetMessage(v string) *DescribeCustomEventHistogramResponse {
	s.Message = &v
	return s
}

func (s *DescribeCustomEventHistogramResponse) SetRequestId(v string) *DescribeCustomEventHistogramResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeCustomEventHistogramResponse) SetSuccess(v string) *DescribeCustomEventHistogramResponse {
	s.Success = &v
	return s
}

func (s *DescribeCustomEventHistogramResponse) SetEventHistograms(v *DescribeCustomEventHistogramResponseEventHistograms) *DescribeCustomEventHistogramResponse {
	s.EventHistograms = v
	return s
}

type DescribeCustomEventHistogramResponseEventHistograms struct {
	EventHistogram []*DescribeCustomEventHistogramResponseEventHistogramsEventHistogram `json:"EventHistogram" xml:"EventHistogram" require:"true" type:"Repeated"`
}

func (s DescribeCustomEventHistogramResponseEventHistograms) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomEventHistogramResponseEventHistograms) GoString() string {
	return s.String()
}

func (s *DescribeCustomEventHistogramResponseEventHistograms) SetEventHistogram(v []*DescribeCustomEventHistogramResponseEventHistogramsEventHistogram) *DescribeCustomEventHistogramResponseEventHistograms {
	s.EventHistogram = v
	return s
}

type DescribeCustomEventHistogramResponseEventHistogramsEventHistogram struct {
	Count     *int64 `json:"Count" xml:"Count" require:"true"`
	StartTime *int64 `json:"StartTime" xml:"StartTime" require:"true"`
	EndTime   *int64 `json:"EndTime" xml:"EndTime" require:"true"`
}

func (s DescribeCustomEventHistogramResponseEventHistogramsEventHistogram) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomEventHistogramResponseEventHistogramsEventHistogram) GoString() string {
	return s.String()
}

func (s *DescribeCustomEventHistogramResponseEventHistogramsEventHistogram) SetCount(v int64) *DescribeCustomEventHistogramResponseEventHistogramsEventHistogram {
	s.Count = &v
	return s
}

func (s *DescribeCustomEventHistogramResponseEventHistogramsEventHistogram) SetStartTime(v int64) *DescribeCustomEventHistogramResponseEventHistogramsEventHistogram {
	s.StartTime = &v
	return s
}

func (s *DescribeCustomEventHistogramResponseEventHistogramsEventHistogram) SetEndTime(v int64) *DescribeCustomEventHistogramResponseEventHistogramsEventHistogram {
	s.EndTime = &v
	return s
}

type DeleteCustomMetricRequest struct {
	GroupId    *string `json:"GroupId" xml:"GroupId" require:"true"`
	MetricName *string `json:"MetricName" xml:"MetricName" require:"true"`
	Md5        *string `json:"Md5" xml:"Md5"`
	UUID       *string `json:"UUID" xml:"UUID"`
}

func (s DeleteCustomMetricRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteCustomMetricRequest) GoString() string {
	return s.String()
}

func (s *DeleteCustomMetricRequest) SetGroupId(v string) *DeleteCustomMetricRequest {
	s.GroupId = &v
	return s
}

func (s *DeleteCustomMetricRequest) SetMetricName(v string) *DeleteCustomMetricRequest {
	s.MetricName = &v
	return s
}

func (s *DeleteCustomMetricRequest) SetMd5(v string) *DeleteCustomMetricRequest {
	s.Md5 = &v
	return s
}

func (s *DeleteCustomMetricRequest) SetUUID(v string) *DeleteCustomMetricRequest {
	s.UUID = &v
	return s
}

type DeleteCustomMetricResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteCustomMetricResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteCustomMetricResponse) GoString() string {
	return s.String()
}

func (s *DeleteCustomMetricResponse) SetCode(v string) *DeleteCustomMetricResponse {
	s.Code = &v
	return s
}

func (s *DeleteCustomMetricResponse) SetMessage(v string) *DeleteCustomMetricResponse {
	s.Message = &v
	return s
}

func (s *DeleteCustomMetricResponse) SetRequestId(v string) *DeleteCustomMetricResponse {
	s.RequestId = &v
	return s
}

type DescribeCustomMetricListRequest struct {
	GroupId    *string `json:"GroupId" xml:"GroupId" require:"true"`
	MetricName *string `json:"MetricName" xml:"MetricName"`
	Dimension  *string `json:"Dimension" xml:"Dimension"`
	Md5        *string `json:"Md5" xml:"Md5"`
	PageNumber *string `json:"PageNumber" xml:"PageNumber"`
	PageSize   *string `json:"PageSize" xml:"PageSize"`
}

func (s DescribeCustomMetricListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomMetricListRequest) GoString() string {
	return s.String()
}

func (s *DescribeCustomMetricListRequest) SetGroupId(v string) *DescribeCustomMetricListRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeCustomMetricListRequest) SetMetricName(v string) *DescribeCustomMetricListRequest {
	s.MetricName = &v
	return s
}

func (s *DescribeCustomMetricListRequest) SetDimension(v string) *DescribeCustomMetricListRequest {
	s.Dimension = &v
	return s
}

func (s *DescribeCustomMetricListRequest) SetMd5(v string) *DescribeCustomMetricListRequest {
	s.Md5 = &v
	return s
}

func (s *DescribeCustomMetricListRequest) SetPageNumber(v string) *DescribeCustomMetricListRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeCustomMetricListRequest) SetPageSize(v string) *DescribeCustomMetricListRequest {
	s.PageSize = &v
	return s
}

type DescribeCustomMetricListResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Result    *string `json:"Result" xml:"Result" require:"true"`
}

func (s DescribeCustomMetricListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeCustomMetricListResponse) GoString() string {
	return s.String()
}

func (s *DescribeCustomMetricListResponse) SetCode(v string) *DescribeCustomMetricListResponse {
	s.Code = &v
	return s
}

func (s *DescribeCustomMetricListResponse) SetMessage(v string) *DescribeCustomMetricListResponse {
	s.Message = &v
	return s
}

func (s *DescribeCustomMetricListResponse) SetRequestId(v string) *DescribeCustomMetricListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeCustomMetricListResponse) SetResult(v string) *DescribeCustomMetricListResponse {
	s.Result = &v
	return s
}

type PutCustomMetricRequest struct {
	MetricList []*PutCustomMetricRequestMetricList `json:"MetricList" xml:"MetricList" require:"true" type:"Repeated"`
}

func (s PutCustomMetricRequest) String() string {
	return tea.Prettify(s)
}

func (s PutCustomMetricRequest) GoString() string {
	return s.String()
}

func (s *PutCustomMetricRequest) SetMetricList(v []*PutCustomMetricRequestMetricList) *PutCustomMetricRequest {
	s.MetricList = v
	return s
}

type PutCustomMetricRequestMetricList struct {
	GroupId    *string `json:"GroupId" xml:"GroupId" require:"true"`
	MetricName *string `json:"MetricName" xml:"MetricName"`
	Dimensions *string `json:"Dimensions" xml:"Dimensions"`
	Time       *string `json:"Time" xml:"Time"`
	Type       *string `json:"Type" xml:"Type"`
	Period     *string `json:"Period" xml:"Period"`
}

func (s PutCustomMetricRequestMetricList) String() string {
	return tea.Prettify(s)
}

func (s PutCustomMetricRequestMetricList) GoString() string {
	return s.String()
}

func (s *PutCustomMetricRequestMetricList) SetGroupId(v string) *PutCustomMetricRequestMetricList {
	s.GroupId = &v
	return s
}

func (s *PutCustomMetricRequestMetricList) SetMetricName(v string) *PutCustomMetricRequestMetricList {
	s.MetricName = &v
	return s
}

func (s *PutCustomMetricRequestMetricList) SetDimensions(v string) *PutCustomMetricRequestMetricList {
	s.Dimensions = &v
	return s
}

func (s *PutCustomMetricRequestMetricList) SetTime(v string) *PutCustomMetricRequestMetricList {
	s.Time = &v
	return s
}

func (s *PutCustomMetricRequestMetricList) SetType(v string) *PutCustomMetricRequestMetricList {
	s.Type = &v
	return s
}

func (s *PutCustomMetricRequestMetricList) SetPeriod(v string) *PutCustomMetricRequestMetricList {
	s.Period = &v
	return s
}

type PutCustomMetricResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s PutCustomMetricResponse) String() string {
	return tea.Prettify(s)
}

func (s PutCustomMetricResponse) GoString() string {
	return s.String()
}

func (s *PutCustomMetricResponse) SetRequestId(v string) *PutCustomMetricResponse {
	s.RequestId = &v
	return s
}

func (s *PutCustomMetricResponse) SetCode(v string) *PutCustomMetricResponse {
	s.Code = &v
	return s
}

func (s *PutCustomMetricResponse) SetMessage(v string) *PutCustomMetricResponse {
	s.Message = &v
	return s
}

type DescribeEventRuleAttributeRequest struct {
	RuleName *string `json:"RuleName" xml:"RuleName" require:"true"`
}

func (s DescribeEventRuleAttributeRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleAttributeRequest) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleAttributeRequest) SetRuleName(v string) *DescribeEventRuleAttributeRequest {
	s.RuleName = &v
	return s
}

type DescribeEventRuleAttributeResponse struct {
	Success   *bool                                     `json:"Success" xml:"Success" require:"true"`
	Code      *string                                   `json:"Code" xml:"Code" require:"true"`
	Message   *string                                   `json:"Message" xml:"Message" require:"true"`
	RequestId *string                                   `json:"RequestId" xml:"RequestId" require:"true"`
	Result    *DescribeEventRuleAttributeResponseResult `json:"Result" xml:"Result" require:"true" type:"Struct"`
}

func (s DescribeEventRuleAttributeResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleAttributeResponse) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleAttributeResponse) SetSuccess(v bool) *DescribeEventRuleAttributeResponse {
	s.Success = &v
	return s
}

func (s *DescribeEventRuleAttributeResponse) SetCode(v string) *DescribeEventRuleAttributeResponse {
	s.Code = &v
	return s
}

func (s *DescribeEventRuleAttributeResponse) SetMessage(v string) *DescribeEventRuleAttributeResponse {
	s.Message = &v
	return s
}

func (s *DescribeEventRuleAttributeResponse) SetRequestId(v string) *DescribeEventRuleAttributeResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeEventRuleAttributeResponse) SetResult(v *DescribeEventRuleAttributeResponseResult) *DescribeEventRuleAttributeResponse {
	s.Result = v
	return s
}

type DescribeEventRuleAttributeResponseResult struct {
	Description  *string                                               `json:"Description" xml:"Description" require:"true"`
	Name         *string                                               `json:"Name" xml:"Name" require:"true"`
	EventType    *string                                               `json:"EventType" xml:"EventType" require:"true"`
	GroupId      *string                                               `json:"GroupId" xml:"GroupId" require:"true"`
	State        *string                                               `json:"State" xml:"State" require:"true"`
	EventPattern *DescribeEventRuleAttributeResponseResultEventPattern `json:"EventPattern" xml:"EventPattern" require:"true" type:"Struct"`
}

func (s DescribeEventRuleAttributeResponseResult) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleAttributeResponseResult) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleAttributeResponseResult) SetDescription(v string) *DescribeEventRuleAttributeResponseResult {
	s.Description = &v
	return s
}

func (s *DescribeEventRuleAttributeResponseResult) SetName(v string) *DescribeEventRuleAttributeResponseResult {
	s.Name = &v
	return s
}

func (s *DescribeEventRuleAttributeResponseResult) SetEventType(v string) *DescribeEventRuleAttributeResponseResult {
	s.EventType = &v
	return s
}

func (s *DescribeEventRuleAttributeResponseResult) SetGroupId(v string) *DescribeEventRuleAttributeResponseResult {
	s.GroupId = &v
	return s
}

func (s *DescribeEventRuleAttributeResponseResult) SetState(v string) *DescribeEventRuleAttributeResponseResult {
	s.State = &v
	return s
}

func (s *DescribeEventRuleAttributeResponseResult) SetEventPattern(v *DescribeEventRuleAttributeResponseResultEventPattern) *DescribeEventRuleAttributeResponseResult {
	s.EventPattern = v
	return s
}

type DescribeEventRuleAttributeResponseResultEventPattern struct {
	Product    *string                                                         `json:"Product" xml:"Product" require:"true"`
	NameList   *DescribeEventRuleAttributeResponseResultEventPatternNameList   `json:"NameList" xml:"NameList" require:"true" type:"Struct"`
	StatusList *DescribeEventRuleAttributeResponseResultEventPatternStatusList `json:"StatusList" xml:"StatusList" require:"true" type:"Struct"`
	LevelList  *DescribeEventRuleAttributeResponseResultEventPatternLevelList  `json:"LevelList" xml:"LevelList" require:"true" type:"Struct"`
}

func (s DescribeEventRuleAttributeResponseResultEventPattern) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleAttributeResponseResultEventPattern) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleAttributeResponseResultEventPattern) SetProduct(v string) *DescribeEventRuleAttributeResponseResultEventPattern {
	s.Product = &v
	return s
}

func (s *DescribeEventRuleAttributeResponseResultEventPattern) SetNameList(v *DescribeEventRuleAttributeResponseResultEventPatternNameList) *DescribeEventRuleAttributeResponseResultEventPattern {
	s.NameList = v
	return s
}

func (s *DescribeEventRuleAttributeResponseResultEventPattern) SetStatusList(v *DescribeEventRuleAttributeResponseResultEventPatternStatusList) *DescribeEventRuleAttributeResponseResultEventPattern {
	s.StatusList = v
	return s
}

func (s *DescribeEventRuleAttributeResponseResultEventPattern) SetLevelList(v *DescribeEventRuleAttributeResponseResultEventPatternLevelList) *DescribeEventRuleAttributeResponseResultEventPattern {
	s.LevelList = v
	return s
}

type DescribeEventRuleAttributeResponseResultEventPatternNameList struct {
	NameList []*string `json:"NameList" xml:"NameList" require:"true" type:"Repeated"`
}

func (s DescribeEventRuleAttributeResponseResultEventPatternNameList) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleAttributeResponseResultEventPatternNameList) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleAttributeResponseResultEventPatternNameList) SetNameList(v []*string) *DescribeEventRuleAttributeResponseResultEventPatternNameList {
	s.NameList = v
	return s
}

type DescribeEventRuleAttributeResponseResultEventPatternStatusList struct {
	StatusList []*string `json:"StatusList" xml:"StatusList" require:"true" type:"Repeated"`
}

func (s DescribeEventRuleAttributeResponseResultEventPatternStatusList) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleAttributeResponseResultEventPatternStatusList) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleAttributeResponseResultEventPatternStatusList) SetStatusList(v []*string) *DescribeEventRuleAttributeResponseResultEventPatternStatusList {
	s.StatusList = v
	return s
}

type DescribeEventRuleAttributeResponseResultEventPatternLevelList struct {
	LevelList []*string `json:"LevelList" xml:"LevelList" require:"true" type:"Repeated"`
}

func (s DescribeEventRuleAttributeResponseResultEventPatternLevelList) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleAttributeResponseResultEventPatternLevelList) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleAttributeResponseResultEventPatternLevelList) SetLevelList(v []*string) *DescribeEventRuleAttributeResponseResultEventPatternLevelList {
	s.LevelList = v
	return s
}

type DeleteContactGroupRequest struct {
	ContactGroupName *string `json:"ContactGroupName" xml:"ContactGroupName" require:"true"`
}

func (s DeleteContactGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteContactGroupRequest) GoString() string {
	return s.String()
}

func (s *DeleteContactGroupRequest) SetContactGroupName(v string) *DeleteContactGroupRequest {
	s.ContactGroupName = &v
	return s
}

type DeleteContactGroupResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteContactGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteContactGroupResponse) GoString() string {
	return s.String()
}

func (s *DeleteContactGroupResponse) SetSuccess(v bool) *DeleteContactGroupResponse {
	s.Success = &v
	return s
}

func (s *DeleteContactGroupResponse) SetCode(v string) *DeleteContactGroupResponse {
	s.Code = &v
	return s
}

func (s *DeleteContactGroupResponse) SetMessage(v string) *DeleteContactGroupResponse {
	s.Message = &v
	return s
}

func (s *DeleteContactGroupResponse) SetRequestId(v string) *DeleteContactGroupResponse {
	s.RequestId = &v
	return s
}

type DescribeContactListRequest struct {
	PageSize    *int    `json:"PageSize" xml:"PageSize"`
	PageNumber  *int    `json:"PageNumber" xml:"PageNumber"`
	ContactName *string `json:"ContactName" xml:"ContactName"`
	ChanelType  *string `json:"ChanelType" xml:"ChanelType"`
	ChanelValue *string `json:"ChanelValue" xml:"ChanelValue"`
}

func (s DescribeContactListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactListRequest) GoString() string {
	return s.String()
}

func (s *DescribeContactListRequest) SetPageSize(v int) *DescribeContactListRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeContactListRequest) SetPageNumber(v int) *DescribeContactListRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeContactListRequest) SetContactName(v string) *DescribeContactListRequest {
	s.ContactName = &v
	return s
}

func (s *DescribeContactListRequest) SetChanelType(v string) *DescribeContactListRequest {
	s.ChanelType = &v
	return s
}

func (s *DescribeContactListRequest) SetChanelValue(v string) *DescribeContactListRequest {
	s.ChanelValue = &v
	return s
}

type DescribeContactListResponse struct {
	Success   *bool                                `json:"Success" xml:"Success" require:"true"`
	Code      *string                              `json:"Code" xml:"Code" require:"true"`
	Message   *string                              `json:"Message" xml:"Message" require:"true"`
	Total     *int                                 `json:"Total" xml:"Total" require:"true"`
	RequestId *string                              `json:"RequestId" xml:"RequestId" require:"true"`
	Contacts  *DescribeContactListResponseContacts `json:"Contacts" xml:"Contacts" require:"true" type:"Struct"`
}

func (s DescribeContactListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactListResponse) GoString() string {
	return s.String()
}

func (s *DescribeContactListResponse) SetSuccess(v bool) *DescribeContactListResponse {
	s.Success = &v
	return s
}

func (s *DescribeContactListResponse) SetCode(v string) *DescribeContactListResponse {
	s.Code = &v
	return s
}

func (s *DescribeContactListResponse) SetMessage(v string) *DescribeContactListResponse {
	s.Message = &v
	return s
}

func (s *DescribeContactListResponse) SetTotal(v int) *DescribeContactListResponse {
	s.Total = &v
	return s
}

func (s *DescribeContactListResponse) SetRequestId(v string) *DescribeContactListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeContactListResponse) SetContacts(v *DescribeContactListResponseContacts) *DescribeContactListResponse {
	s.Contacts = v
	return s
}

type DescribeContactListResponseContacts struct {
	Contact []*DescribeContactListResponseContactsContact `json:"Contact" xml:"Contact" require:"true" type:"Repeated"`
}

func (s DescribeContactListResponseContacts) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactListResponseContacts) GoString() string {
	return s.String()
}

func (s *DescribeContactListResponseContacts) SetContact(v []*DescribeContactListResponseContactsContact) *DescribeContactListResponseContacts {
	s.Contact = v
	return s
}

type DescribeContactListResponseContactsContact struct {
	Name          *string                                                  `json:"Name" xml:"Name" require:"true"`
	Desc          *string                                                  `json:"Desc" xml:"Desc" require:"true"`
	CreateTime    *int64                                                   `json:"CreateTime" xml:"CreateTime" require:"true"`
	UpdateTime    *int64                                                   `json:"UpdateTime" xml:"UpdateTime" require:"true"`
	Channels      *DescribeContactListResponseContactsContactChannels      `json:"Channels" xml:"Channels" require:"true" type:"Struct"`
	ChannelsState *DescribeContactListResponseContactsContactChannelsState `json:"ChannelsState" xml:"ChannelsState" require:"true" type:"Struct"`
	ContactGroups *DescribeContactListResponseContactsContactContactGroups `json:"ContactGroups" xml:"ContactGroups" require:"true" type:"Struct"`
}

func (s DescribeContactListResponseContactsContact) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactListResponseContactsContact) GoString() string {
	return s.String()
}

func (s *DescribeContactListResponseContactsContact) SetName(v string) *DescribeContactListResponseContactsContact {
	s.Name = &v
	return s
}

func (s *DescribeContactListResponseContactsContact) SetDesc(v string) *DescribeContactListResponseContactsContact {
	s.Desc = &v
	return s
}

func (s *DescribeContactListResponseContactsContact) SetCreateTime(v int64) *DescribeContactListResponseContactsContact {
	s.CreateTime = &v
	return s
}

func (s *DescribeContactListResponseContactsContact) SetUpdateTime(v int64) *DescribeContactListResponseContactsContact {
	s.UpdateTime = &v
	return s
}

func (s *DescribeContactListResponseContactsContact) SetChannels(v *DescribeContactListResponseContactsContactChannels) *DescribeContactListResponseContactsContact {
	s.Channels = v
	return s
}

func (s *DescribeContactListResponseContactsContact) SetChannelsState(v *DescribeContactListResponseContactsContactChannelsState) *DescribeContactListResponseContactsContact {
	s.ChannelsState = v
	return s
}

func (s *DescribeContactListResponseContactsContact) SetContactGroups(v *DescribeContactListResponseContactsContactContactGroups) *DescribeContactListResponseContactsContact {
	s.ContactGroups = v
	return s
}

type DescribeContactListResponseContactsContactChannels struct {
	SMS         *string `json:"SMS" xml:"SMS" require:"true"`
	Mail        *string `json:"Mail" xml:"Mail" require:"true"`
	AliIM       *string `json:"AliIM" xml:"AliIM" require:"true"`
	DingWebHook *string `json:"DingWebHook" xml:"DingWebHook" require:"true"`
}

func (s DescribeContactListResponseContactsContactChannels) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactListResponseContactsContactChannels) GoString() string {
	return s.String()
}

func (s *DescribeContactListResponseContactsContactChannels) SetSMS(v string) *DescribeContactListResponseContactsContactChannels {
	s.SMS = &v
	return s
}

func (s *DescribeContactListResponseContactsContactChannels) SetMail(v string) *DescribeContactListResponseContactsContactChannels {
	s.Mail = &v
	return s
}

func (s *DescribeContactListResponseContactsContactChannels) SetAliIM(v string) *DescribeContactListResponseContactsContactChannels {
	s.AliIM = &v
	return s
}

func (s *DescribeContactListResponseContactsContactChannels) SetDingWebHook(v string) *DescribeContactListResponseContactsContactChannels {
	s.DingWebHook = &v
	return s
}

type DescribeContactListResponseContactsContactChannelsState struct {
	SMS         *string `json:"SMS" xml:"SMS" require:"true"`
	Mail        *string `json:"Mail" xml:"Mail" require:"true"`
	AliIM       *string `json:"AliIM" xml:"AliIM" require:"true"`
	DingWebHook *string `json:"DingWebHook" xml:"DingWebHook" require:"true"`
}

func (s DescribeContactListResponseContactsContactChannelsState) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactListResponseContactsContactChannelsState) GoString() string {
	return s.String()
}

func (s *DescribeContactListResponseContactsContactChannelsState) SetSMS(v string) *DescribeContactListResponseContactsContactChannelsState {
	s.SMS = &v
	return s
}

func (s *DescribeContactListResponseContactsContactChannelsState) SetMail(v string) *DescribeContactListResponseContactsContactChannelsState {
	s.Mail = &v
	return s
}

func (s *DescribeContactListResponseContactsContactChannelsState) SetAliIM(v string) *DescribeContactListResponseContactsContactChannelsState {
	s.AliIM = &v
	return s
}

func (s *DescribeContactListResponseContactsContactChannelsState) SetDingWebHook(v string) *DescribeContactListResponseContactsContactChannelsState {
	s.DingWebHook = &v
	return s
}

type DescribeContactListResponseContactsContactContactGroups struct {
	ContactGroup []*string `json:"ContactGroup" xml:"ContactGroup" require:"true" type:"Repeated"`
}

func (s DescribeContactListResponseContactsContactContactGroups) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactListResponseContactsContactContactGroups) GoString() string {
	return s.String()
}

func (s *DescribeContactListResponseContactsContactContactGroups) SetContactGroup(v []*string) *DescribeContactListResponseContactsContactContactGroups {
	s.ContactGroup = v
	return s
}

type DescribeContactListByContactGroupRequest struct {
	ContactGroupName *string `json:"ContactGroupName" xml:"ContactGroupName" require:"true"`
}

func (s DescribeContactListByContactGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactListByContactGroupRequest) GoString() string {
	return s.String()
}

func (s *DescribeContactListByContactGroupRequest) SetContactGroupName(v string) *DescribeContactListByContactGroupRequest {
	s.ContactGroupName = &v
	return s
}

type DescribeContactListByContactGroupResponse struct {
	Success   *bool                                              `json:"Success" xml:"Success" require:"true"`
	Code      *string                                            `json:"Code" xml:"Code" require:"true"`
	Message   *string                                            `json:"Message" xml:"Message" require:"true"`
	RequestId *string                                            `json:"RequestId" xml:"RequestId" require:"true"`
	Contacts  *DescribeContactListByContactGroupResponseContacts `json:"Contacts" xml:"Contacts" require:"true" type:"Struct"`
}

func (s DescribeContactListByContactGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactListByContactGroupResponse) GoString() string {
	return s.String()
}

func (s *DescribeContactListByContactGroupResponse) SetSuccess(v bool) *DescribeContactListByContactGroupResponse {
	s.Success = &v
	return s
}

func (s *DescribeContactListByContactGroupResponse) SetCode(v string) *DescribeContactListByContactGroupResponse {
	s.Code = &v
	return s
}

func (s *DescribeContactListByContactGroupResponse) SetMessage(v string) *DescribeContactListByContactGroupResponse {
	s.Message = &v
	return s
}

func (s *DescribeContactListByContactGroupResponse) SetRequestId(v string) *DescribeContactListByContactGroupResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeContactListByContactGroupResponse) SetContacts(v *DescribeContactListByContactGroupResponseContacts) *DescribeContactListByContactGroupResponse {
	s.Contacts = v
	return s
}

type DescribeContactListByContactGroupResponseContacts struct {
	Contact []*DescribeContactListByContactGroupResponseContactsContact `json:"Contact" xml:"Contact" require:"true" type:"Repeated"`
}

func (s DescribeContactListByContactGroupResponseContacts) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactListByContactGroupResponseContacts) GoString() string {
	return s.String()
}

func (s *DescribeContactListByContactGroupResponseContacts) SetContact(v []*DescribeContactListByContactGroupResponseContactsContact) *DescribeContactListByContactGroupResponseContacts {
	s.Contact = v
	return s
}

type DescribeContactListByContactGroupResponseContactsContact struct {
	Name       *string                                                           `json:"Name" xml:"Name" require:"true"`
	Desc       *string                                                           `json:"Desc" xml:"Desc" require:"true"`
	CreateTime *int64                                                            `json:"CreateTime" xml:"CreateTime" require:"true"`
	UpdateTime *int64                                                            `json:"UpdateTime" xml:"UpdateTime" require:"true"`
	Channels   *DescribeContactListByContactGroupResponseContactsContactChannels `json:"Channels" xml:"Channels" require:"true" type:"Struct"`
}

func (s DescribeContactListByContactGroupResponseContactsContact) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactListByContactGroupResponseContactsContact) GoString() string {
	return s.String()
}

func (s *DescribeContactListByContactGroupResponseContactsContact) SetName(v string) *DescribeContactListByContactGroupResponseContactsContact {
	s.Name = &v
	return s
}

func (s *DescribeContactListByContactGroupResponseContactsContact) SetDesc(v string) *DescribeContactListByContactGroupResponseContactsContact {
	s.Desc = &v
	return s
}

func (s *DescribeContactListByContactGroupResponseContactsContact) SetCreateTime(v int64) *DescribeContactListByContactGroupResponseContactsContact {
	s.CreateTime = &v
	return s
}

func (s *DescribeContactListByContactGroupResponseContactsContact) SetUpdateTime(v int64) *DescribeContactListByContactGroupResponseContactsContact {
	s.UpdateTime = &v
	return s
}

func (s *DescribeContactListByContactGroupResponseContactsContact) SetChannels(v *DescribeContactListByContactGroupResponseContactsContactChannels) *DescribeContactListByContactGroupResponseContactsContact {
	s.Channels = v
	return s
}

type DescribeContactListByContactGroupResponseContactsContactChannels struct {
	SMS         *string `json:"SMS" xml:"SMS" require:"true"`
	Mail        *string `json:"Mail" xml:"Mail" require:"true"`
	AliIM       *string `json:"AliIM" xml:"AliIM" require:"true"`
	DingWebHook *string `json:"DingWebHook" xml:"DingWebHook" require:"true"`
}

func (s DescribeContactListByContactGroupResponseContactsContactChannels) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactListByContactGroupResponseContactsContactChannels) GoString() string {
	return s.String()
}

func (s *DescribeContactListByContactGroupResponseContactsContactChannels) SetSMS(v string) *DescribeContactListByContactGroupResponseContactsContactChannels {
	s.SMS = &v
	return s
}

func (s *DescribeContactListByContactGroupResponseContactsContactChannels) SetMail(v string) *DescribeContactListByContactGroupResponseContactsContactChannels {
	s.Mail = &v
	return s
}

func (s *DescribeContactListByContactGroupResponseContactsContactChannels) SetAliIM(v string) *DescribeContactListByContactGroupResponseContactsContactChannels {
	s.AliIM = &v
	return s
}

func (s *DescribeContactListByContactGroupResponseContactsContactChannels) SetDingWebHook(v string) *DescribeContactListByContactGroupResponseContactsContactChannels {
	s.DingWebHook = &v
	return s
}

type DeleteContactRequest struct {
	ContactName *string `json:"ContactName" xml:"ContactName" require:"true"`
}

func (s DeleteContactRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteContactRequest) GoString() string {
	return s.String()
}

func (s *DeleteContactRequest) SetContactName(v string) *DeleteContactRequest {
	s.ContactName = &v
	return s
}

type DeleteContactResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteContactResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteContactResponse) GoString() string {
	return s.String()
}

func (s *DeleteContactResponse) SetSuccess(v bool) *DeleteContactResponse {
	s.Success = &v
	return s
}

func (s *DeleteContactResponse) SetCode(v string) *DeleteContactResponse {
	s.Code = &v
	return s
}

func (s *DeleteContactResponse) SetMessage(v string) *DeleteContactResponse {
	s.Message = &v
	return s
}

func (s *DeleteContactResponse) SetRequestId(v string) *DeleteContactResponse {
	s.RequestId = &v
	return s
}

type PutContactGroupRequest struct {
	ContactGroupName *string   `json:"ContactGroupName" xml:"ContactGroupName" require:"true"`
	Describe         *string   `json:"Describe" xml:"Describe"`
	ContactNames     []*string `json:"ContactNames" xml:"ContactNames" require:"true" type:"Repeated"`
}

func (s PutContactGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s PutContactGroupRequest) GoString() string {
	return s.String()
}

func (s *PutContactGroupRequest) SetContactGroupName(v string) *PutContactGroupRequest {
	s.ContactGroupName = &v
	return s
}

func (s *PutContactGroupRequest) SetDescribe(v string) *PutContactGroupRequest {
	s.Describe = &v
	return s
}

func (s *PutContactGroupRequest) SetContactNames(v []*string) *PutContactGroupRequest {
	s.ContactNames = v
	return s
}

type PutContactGroupResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s PutContactGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s PutContactGroupResponse) GoString() string {
	return s.String()
}

func (s *PutContactGroupResponse) SetSuccess(v bool) *PutContactGroupResponse {
	s.Success = &v
	return s
}

func (s *PutContactGroupResponse) SetCode(v string) *PutContactGroupResponse {
	s.Code = &v
	return s
}

func (s *PutContactGroupResponse) SetMessage(v string) *PutContactGroupResponse {
	s.Message = &v
	return s
}

func (s *PutContactGroupResponse) SetRequestId(v string) *PutContactGroupResponse {
	s.RequestId = &v
	return s
}

type PutContactRequest struct {
	ContactName *string                    `json:"ContactName" xml:"ContactName" require:"true"`
	Describe    *string                    `json:"Describe" xml:"Describe" require:"true"`
	Channels    *PutContactRequestChannels `json:"Channels" xml:"Channels" require:"true" type:"Struct"`
}

func (s PutContactRequest) String() string {
	return tea.Prettify(s)
}

func (s PutContactRequest) GoString() string {
	return s.String()
}

func (s *PutContactRequest) SetContactName(v string) *PutContactRequest {
	s.ContactName = &v
	return s
}

func (s *PutContactRequest) SetDescribe(v string) *PutContactRequest {
	s.Describe = &v
	return s
}

func (s *PutContactRequest) SetChannels(v *PutContactRequestChannels) *PutContactRequest {
	s.Channels = v
	return s
}

type PutContactRequestChannels struct {
	SMS         *string `json:"SMS" xml:"SMS"`
	Mail        *string `json:"Mail" xml:"Mail"`
	AliIM       *string `json:"AliIM" xml:"AliIM"`
	DingWebHook *string `json:"DingWebHook" xml:"DingWebHook"`
}

func (s PutContactRequestChannels) String() string {
	return tea.Prettify(s)
}

func (s PutContactRequestChannels) GoString() string {
	return s.String()
}

func (s *PutContactRequestChannels) SetSMS(v string) *PutContactRequestChannels {
	s.SMS = &v
	return s
}

func (s *PutContactRequestChannels) SetMail(v string) *PutContactRequestChannels {
	s.Mail = &v
	return s
}

func (s *PutContactRequestChannels) SetAliIM(v string) *PutContactRequestChannels {
	s.AliIM = &v
	return s
}

func (s *PutContactRequestChannels) SetDingWebHook(v string) *PutContactRequestChannels {
	s.DingWebHook = &v
	return s
}

type PutContactResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s PutContactResponse) String() string {
	return tea.Prettify(s)
}

func (s PutContactResponse) GoString() string {
	return s.String()
}

func (s *PutContactResponse) SetSuccess(v bool) *PutContactResponse {
	s.Success = &v
	return s
}

func (s *PutContactResponse) SetCode(v string) *PutContactResponse {
	s.Code = &v
	return s
}

func (s *PutContactResponse) SetMessage(v string) *PutContactResponse {
	s.Message = &v
	return s
}

func (s *PutContactResponse) SetRequestId(v string) *PutContactResponse {
	s.RequestId = &v
	return s
}

type DescribeContactGroupListRequest struct {
	PageSize   *int `json:"PageSize" xml:"PageSize"`
	PageNumber *int `json:"PageNumber" xml:"PageNumber"`
}

func (s DescribeContactGroupListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactGroupListRequest) GoString() string {
	return s.String()
}

func (s *DescribeContactGroupListRequest) SetPageSize(v int) *DescribeContactGroupListRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeContactGroupListRequest) SetPageNumber(v int) *DescribeContactGroupListRequest {
	s.PageNumber = &v
	return s
}

type DescribeContactGroupListResponse struct {
	Success          *bool                                             `json:"Success" xml:"Success" require:"true"`
	Code             *string                                           `json:"Code" xml:"Code" require:"true"`
	Message          *string                                           `json:"Message" xml:"Message" require:"true"`
	Total            *int                                              `json:"Total" xml:"Total" require:"true"`
	RequestId        *string                                           `json:"RequestId" xml:"RequestId" require:"true"`
	ContactGroupList *DescribeContactGroupListResponseContactGroupList `json:"ContactGroupList" xml:"ContactGroupList" require:"true" type:"Struct"`
	ContactGroups    *DescribeContactGroupListResponseContactGroups    `json:"ContactGroups" xml:"ContactGroups" require:"true" type:"Struct"`
}

func (s DescribeContactGroupListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactGroupListResponse) GoString() string {
	return s.String()
}

func (s *DescribeContactGroupListResponse) SetSuccess(v bool) *DescribeContactGroupListResponse {
	s.Success = &v
	return s
}

func (s *DescribeContactGroupListResponse) SetCode(v string) *DescribeContactGroupListResponse {
	s.Code = &v
	return s
}

func (s *DescribeContactGroupListResponse) SetMessage(v string) *DescribeContactGroupListResponse {
	s.Message = &v
	return s
}

func (s *DescribeContactGroupListResponse) SetTotal(v int) *DescribeContactGroupListResponse {
	s.Total = &v
	return s
}

func (s *DescribeContactGroupListResponse) SetRequestId(v string) *DescribeContactGroupListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeContactGroupListResponse) SetContactGroupList(v *DescribeContactGroupListResponseContactGroupList) *DescribeContactGroupListResponse {
	s.ContactGroupList = v
	return s
}

func (s *DescribeContactGroupListResponse) SetContactGroups(v *DescribeContactGroupListResponseContactGroups) *DescribeContactGroupListResponse {
	s.ContactGroups = v
	return s
}

type DescribeContactGroupListResponseContactGroupList struct {
	ContactGroup []*DescribeContactGroupListResponseContactGroupListContactGroup `json:"ContactGroup" xml:"ContactGroup" require:"true" type:"Repeated"`
}

func (s DescribeContactGroupListResponseContactGroupList) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactGroupListResponseContactGroupList) GoString() string {
	return s.String()
}

func (s *DescribeContactGroupListResponseContactGroupList) SetContactGroup(v []*DescribeContactGroupListResponseContactGroupListContactGroup) *DescribeContactGroupListResponseContactGroupList {
	s.ContactGroup = v
	return s
}

type DescribeContactGroupListResponseContactGroupListContactGroup struct {
	Name                *string                                                               `json:"Name" xml:"Name" require:"true"`
	Describe            *string                                                               `json:"Describe" xml:"Describe" require:"true"`
	CreateTime          *int64                                                                `json:"CreateTime" xml:"CreateTime" require:"true"`
	UpdateTime          *int64                                                                `json:"UpdateTime" xml:"UpdateTime" require:"true"`
	EnabledWeeklyReport *bool                                                                 `json:"EnabledWeeklyReport" xml:"EnabledWeeklyReport" require:"true"`
	EnableSubscribed    *bool                                                                 `json:"EnableSubscribed" xml:"EnableSubscribed" require:"true"`
	Contacts            *DescribeContactGroupListResponseContactGroupListContactGroupContacts `json:"Contacts" xml:"Contacts" require:"true" type:"Struct"`
}

func (s DescribeContactGroupListResponseContactGroupListContactGroup) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactGroupListResponseContactGroupListContactGroup) GoString() string {
	return s.String()
}

func (s *DescribeContactGroupListResponseContactGroupListContactGroup) SetName(v string) *DescribeContactGroupListResponseContactGroupListContactGroup {
	s.Name = &v
	return s
}

func (s *DescribeContactGroupListResponseContactGroupListContactGroup) SetDescribe(v string) *DescribeContactGroupListResponseContactGroupListContactGroup {
	s.Describe = &v
	return s
}

func (s *DescribeContactGroupListResponseContactGroupListContactGroup) SetCreateTime(v int64) *DescribeContactGroupListResponseContactGroupListContactGroup {
	s.CreateTime = &v
	return s
}

func (s *DescribeContactGroupListResponseContactGroupListContactGroup) SetUpdateTime(v int64) *DescribeContactGroupListResponseContactGroupListContactGroup {
	s.UpdateTime = &v
	return s
}

func (s *DescribeContactGroupListResponseContactGroupListContactGroup) SetEnabledWeeklyReport(v bool) *DescribeContactGroupListResponseContactGroupListContactGroup {
	s.EnabledWeeklyReport = &v
	return s
}

func (s *DescribeContactGroupListResponseContactGroupListContactGroup) SetEnableSubscribed(v bool) *DescribeContactGroupListResponseContactGroupListContactGroup {
	s.EnableSubscribed = &v
	return s
}

func (s *DescribeContactGroupListResponseContactGroupListContactGroup) SetContacts(v *DescribeContactGroupListResponseContactGroupListContactGroupContacts) *DescribeContactGroupListResponseContactGroupListContactGroup {
	s.Contacts = v
	return s
}

type DescribeContactGroupListResponseContactGroupListContactGroupContacts struct {
	Contact []*string `json:"Contact" xml:"Contact" require:"true" type:"Repeated"`
}

func (s DescribeContactGroupListResponseContactGroupListContactGroupContacts) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactGroupListResponseContactGroupListContactGroupContacts) GoString() string {
	return s.String()
}

func (s *DescribeContactGroupListResponseContactGroupListContactGroupContacts) SetContact(v []*string) *DescribeContactGroupListResponseContactGroupListContactGroupContacts {
	s.Contact = v
	return s
}

type DescribeContactGroupListResponseContactGroups struct {
	ContactGroup []*string `json:"ContactGroup" xml:"ContactGroup" require:"true" type:"Repeated"`
}

func (s DescribeContactGroupListResponseContactGroups) String() string {
	return tea.Prettify(s)
}

func (s DescribeContactGroupListResponseContactGroups) GoString() string {
	return s.String()
}

func (s *DescribeContactGroupListResponseContactGroups) SetContactGroup(v []*string) *DescribeContactGroupListResponseContactGroups {
	s.ContactGroup = v
	return s
}

type PutEventRuleTargetsRequest struct {
	RuleName          *string                                        `json:"RuleName" xml:"RuleName" require:"true"`
	FcParameters      []*PutEventRuleTargetsRequestFcParameters      `json:"FcParameters" xml:"FcParameters" type:"Repeated"`
	ContactParameters []*PutEventRuleTargetsRequestContactParameters `json:"ContactParameters" xml:"ContactParameters" type:"Repeated"`
	MnsParameters     []*PutEventRuleTargetsRequestMnsParameters     `json:"MnsParameters" xml:"MnsParameters" type:"Repeated"`
	WebhookParameters []*PutEventRuleTargetsRequestWebhookParameters `json:"WebhookParameters" xml:"WebhookParameters" type:"Repeated"`
	SlsParameters     []*PutEventRuleTargetsRequestSlsParameters     `json:"SlsParameters" xml:"SlsParameters" type:"Repeated"`
}

func (s PutEventRuleTargetsRequest) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleTargetsRequest) GoString() string {
	return s.String()
}

func (s *PutEventRuleTargetsRequest) SetRuleName(v string) *PutEventRuleTargetsRequest {
	s.RuleName = &v
	return s
}

func (s *PutEventRuleTargetsRequest) SetFcParameters(v []*PutEventRuleTargetsRequestFcParameters) *PutEventRuleTargetsRequest {
	s.FcParameters = v
	return s
}

func (s *PutEventRuleTargetsRequest) SetContactParameters(v []*PutEventRuleTargetsRequestContactParameters) *PutEventRuleTargetsRequest {
	s.ContactParameters = v
	return s
}

func (s *PutEventRuleTargetsRequest) SetMnsParameters(v []*PutEventRuleTargetsRequestMnsParameters) *PutEventRuleTargetsRequest {
	s.MnsParameters = v
	return s
}

func (s *PutEventRuleTargetsRequest) SetWebhookParameters(v []*PutEventRuleTargetsRequestWebhookParameters) *PutEventRuleTargetsRequest {
	s.WebhookParameters = v
	return s
}

func (s *PutEventRuleTargetsRequest) SetSlsParameters(v []*PutEventRuleTargetsRequestSlsParameters) *PutEventRuleTargetsRequest {
	s.SlsParameters = v
	return s
}

type PutEventRuleTargetsRequestFcParameters struct {
	Id           *string `json:"Id" xml:"Id"`
	Region       *string `json:"Region" xml:"Region"`
	ServiceName  *string `json:"ServiceName" xml:"ServiceName"`
	FunctionName *string `json:"FunctionName" xml:"FunctionName"`
}

func (s PutEventRuleTargetsRequestFcParameters) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleTargetsRequestFcParameters) GoString() string {
	return s.String()
}

func (s *PutEventRuleTargetsRequestFcParameters) SetId(v string) *PutEventRuleTargetsRequestFcParameters {
	s.Id = &v
	return s
}

func (s *PutEventRuleTargetsRequestFcParameters) SetRegion(v string) *PutEventRuleTargetsRequestFcParameters {
	s.Region = &v
	return s
}

func (s *PutEventRuleTargetsRequestFcParameters) SetServiceName(v string) *PutEventRuleTargetsRequestFcParameters {
	s.ServiceName = &v
	return s
}

func (s *PutEventRuleTargetsRequestFcParameters) SetFunctionName(v string) *PutEventRuleTargetsRequestFcParameters {
	s.FunctionName = &v
	return s
}

type PutEventRuleTargetsRequestContactParameters struct {
	Id               *string `json:"Id" xml:"Id"`
	ContactGroupName *string `json:"ContactGroupName" xml:"ContactGroupName"`
	Level            *string `json:"Level" xml:"Level"`
}

func (s PutEventRuleTargetsRequestContactParameters) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleTargetsRequestContactParameters) GoString() string {
	return s.String()
}

func (s *PutEventRuleTargetsRequestContactParameters) SetId(v string) *PutEventRuleTargetsRequestContactParameters {
	s.Id = &v
	return s
}

func (s *PutEventRuleTargetsRequestContactParameters) SetContactGroupName(v string) *PutEventRuleTargetsRequestContactParameters {
	s.ContactGroupName = &v
	return s
}

func (s *PutEventRuleTargetsRequestContactParameters) SetLevel(v string) *PutEventRuleTargetsRequestContactParameters {
	s.Level = &v
	return s
}

type PutEventRuleTargetsRequestMnsParameters struct {
	Id     *string `json:"Id" xml:"Id"`
	Region *string `json:"Region" xml:"Region"`
	Queue  *string `json:"Queue" xml:"Queue"`
}

func (s PutEventRuleTargetsRequestMnsParameters) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleTargetsRequestMnsParameters) GoString() string {
	return s.String()
}

func (s *PutEventRuleTargetsRequestMnsParameters) SetId(v string) *PutEventRuleTargetsRequestMnsParameters {
	s.Id = &v
	return s
}

func (s *PutEventRuleTargetsRequestMnsParameters) SetRegion(v string) *PutEventRuleTargetsRequestMnsParameters {
	s.Region = &v
	return s
}

func (s *PutEventRuleTargetsRequestMnsParameters) SetQueue(v string) *PutEventRuleTargetsRequestMnsParameters {
	s.Queue = &v
	return s
}

type PutEventRuleTargetsRequestWebhookParameters struct {
	Id       *string `json:"Id" xml:"Id"`
	Protocol *string `json:"Protocol" xml:"Protocol"`
	Url      *string `json:"Url" xml:"Url"`
	Method   *string `json:"Method" xml:"Method"`
}

func (s PutEventRuleTargetsRequestWebhookParameters) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleTargetsRequestWebhookParameters) GoString() string {
	return s.String()
}

func (s *PutEventRuleTargetsRequestWebhookParameters) SetId(v string) *PutEventRuleTargetsRequestWebhookParameters {
	s.Id = &v
	return s
}

func (s *PutEventRuleTargetsRequestWebhookParameters) SetProtocol(v string) *PutEventRuleTargetsRequestWebhookParameters {
	s.Protocol = &v
	return s
}

func (s *PutEventRuleTargetsRequestWebhookParameters) SetUrl(v string) *PutEventRuleTargetsRequestWebhookParameters {
	s.Url = &v
	return s
}

func (s *PutEventRuleTargetsRequestWebhookParameters) SetMethod(v string) *PutEventRuleTargetsRequestWebhookParameters {
	s.Method = &v
	return s
}

type PutEventRuleTargetsRequestSlsParameters struct {
	Id       *string `json:"Id" xml:"Id"`
	Region   *string `json:"Region" xml:"Region"`
	Project  *string `json:"Project" xml:"Project"`
	LogStore *string `json:"LogStore" xml:"LogStore"`
}

func (s PutEventRuleTargetsRequestSlsParameters) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleTargetsRequestSlsParameters) GoString() string {
	return s.String()
}

func (s *PutEventRuleTargetsRequestSlsParameters) SetId(v string) *PutEventRuleTargetsRequestSlsParameters {
	s.Id = &v
	return s
}

func (s *PutEventRuleTargetsRequestSlsParameters) SetRegion(v string) *PutEventRuleTargetsRequestSlsParameters {
	s.Region = &v
	return s
}

func (s *PutEventRuleTargetsRequestSlsParameters) SetProject(v string) *PutEventRuleTargetsRequestSlsParameters {
	s.Project = &v
	return s
}

func (s *PutEventRuleTargetsRequestSlsParameters) SetLogStore(v string) *PutEventRuleTargetsRequestSlsParameters {
	s.LogStore = &v
	return s
}

type PutEventRuleTargetsResponse struct {
	Success                 *bool                                               `json:"Success" xml:"Success" require:"true"`
	Code                    *string                                             `json:"Code" xml:"Code" require:"true"`
	Message                 *string                                             `json:"Message" xml:"Message" require:"true"`
	RequestId               *string                                             `json:"RequestId" xml:"RequestId" require:"true"`
	FailedParameterCount    *string                                             `json:"FailedParameterCount" xml:"FailedParameterCount" require:"true"`
	FailedContactParameters *PutEventRuleTargetsResponseFailedContactParameters `json:"FailedContactParameters" xml:"FailedContactParameters" require:"true" type:"Struct"`
	FailedMnsParameters     *PutEventRuleTargetsResponseFailedMnsParameters     `json:"FailedMnsParameters" xml:"FailedMnsParameters" require:"true" type:"Struct"`
	FailedFcParameters      *PutEventRuleTargetsResponseFailedFcParameters      `json:"FailedFcParameters" xml:"FailedFcParameters" require:"true" type:"Struct"`
}

func (s PutEventRuleTargetsResponse) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleTargetsResponse) GoString() string {
	return s.String()
}

func (s *PutEventRuleTargetsResponse) SetSuccess(v bool) *PutEventRuleTargetsResponse {
	s.Success = &v
	return s
}

func (s *PutEventRuleTargetsResponse) SetCode(v string) *PutEventRuleTargetsResponse {
	s.Code = &v
	return s
}

func (s *PutEventRuleTargetsResponse) SetMessage(v string) *PutEventRuleTargetsResponse {
	s.Message = &v
	return s
}

func (s *PutEventRuleTargetsResponse) SetRequestId(v string) *PutEventRuleTargetsResponse {
	s.RequestId = &v
	return s
}

func (s *PutEventRuleTargetsResponse) SetFailedParameterCount(v string) *PutEventRuleTargetsResponse {
	s.FailedParameterCount = &v
	return s
}

func (s *PutEventRuleTargetsResponse) SetFailedContactParameters(v *PutEventRuleTargetsResponseFailedContactParameters) *PutEventRuleTargetsResponse {
	s.FailedContactParameters = v
	return s
}

func (s *PutEventRuleTargetsResponse) SetFailedMnsParameters(v *PutEventRuleTargetsResponseFailedMnsParameters) *PutEventRuleTargetsResponse {
	s.FailedMnsParameters = v
	return s
}

func (s *PutEventRuleTargetsResponse) SetFailedFcParameters(v *PutEventRuleTargetsResponseFailedFcParameters) *PutEventRuleTargetsResponse {
	s.FailedFcParameters = v
	return s
}

type PutEventRuleTargetsResponseFailedContactParameters struct {
	ContactParameter []*PutEventRuleTargetsResponseFailedContactParametersContactParameter `json:"ContactParameter" xml:"ContactParameter" require:"true" type:"Repeated"`
}

func (s PutEventRuleTargetsResponseFailedContactParameters) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleTargetsResponseFailedContactParameters) GoString() string {
	return s.String()
}

func (s *PutEventRuleTargetsResponseFailedContactParameters) SetContactParameter(v []*PutEventRuleTargetsResponseFailedContactParametersContactParameter) *PutEventRuleTargetsResponseFailedContactParameters {
	s.ContactParameter = v
	return s
}

type PutEventRuleTargetsResponseFailedContactParametersContactParameter struct {
	Id               *int    `json:"Id" xml:"Id" require:"true"`
	ContactGroupName *string `json:"ContactGroupName" xml:"ContactGroupName" require:"true"`
	Level            *string `json:"Level" xml:"Level" require:"true"`
}

func (s PutEventRuleTargetsResponseFailedContactParametersContactParameter) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleTargetsResponseFailedContactParametersContactParameter) GoString() string {
	return s.String()
}

func (s *PutEventRuleTargetsResponseFailedContactParametersContactParameter) SetId(v int) *PutEventRuleTargetsResponseFailedContactParametersContactParameter {
	s.Id = &v
	return s
}

func (s *PutEventRuleTargetsResponseFailedContactParametersContactParameter) SetContactGroupName(v string) *PutEventRuleTargetsResponseFailedContactParametersContactParameter {
	s.ContactGroupName = &v
	return s
}

func (s *PutEventRuleTargetsResponseFailedContactParametersContactParameter) SetLevel(v string) *PutEventRuleTargetsResponseFailedContactParametersContactParameter {
	s.Level = &v
	return s
}

type PutEventRuleTargetsResponseFailedMnsParameters struct {
	MnsParameter []*PutEventRuleTargetsResponseFailedMnsParametersMnsParameter `json:"MnsParameter" xml:"MnsParameter" require:"true" type:"Repeated"`
}

func (s PutEventRuleTargetsResponseFailedMnsParameters) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleTargetsResponseFailedMnsParameters) GoString() string {
	return s.String()
}

func (s *PutEventRuleTargetsResponseFailedMnsParameters) SetMnsParameter(v []*PutEventRuleTargetsResponseFailedMnsParametersMnsParameter) *PutEventRuleTargetsResponseFailedMnsParameters {
	s.MnsParameter = v
	return s
}

type PutEventRuleTargetsResponseFailedMnsParametersMnsParameter struct {
	Id     *int    `json:"Id" xml:"Id" require:"true"`
	Region *string `json:"Region" xml:"Region" require:"true"`
	Queue  *string `json:"Queue" xml:"Queue" require:"true"`
}

func (s PutEventRuleTargetsResponseFailedMnsParametersMnsParameter) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleTargetsResponseFailedMnsParametersMnsParameter) GoString() string {
	return s.String()
}

func (s *PutEventRuleTargetsResponseFailedMnsParametersMnsParameter) SetId(v int) *PutEventRuleTargetsResponseFailedMnsParametersMnsParameter {
	s.Id = &v
	return s
}

func (s *PutEventRuleTargetsResponseFailedMnsParametersMnsParameter) SetRegion(v string) *PutEventRuleTargetsResponseFailedMnsParametersMnsParameter {
	s.Region = &v
	return s
}

func (s *PutEventRuleTargetsResponseFailedMnsParametersMnsParameter) SetQueue(v string) *PutEventRuleTargetsResponseFailedMnsParametersMnsParameter {
	s.Queue = &v
	return s
}

type PutEventRuleTargetsResponseFailedFcParameters struct {
	FcParameter []*PutEventRuleTargetsResponseFailedFcParametersFcParameter `json:"FcParameter" xml:"FcParameter" require:"true" type:"Repeated"`
}

func (s PutEventRuleTargetsResponseFailedFcParameters) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleTargetsResponseFailedFcParameters) GoString() string {
	return s.String()
}

func (s *PutEventRuleTargetsResponseFailedFcParameters) SetFcParameter(v []*PutEventRuleTargetsResponseFailedFcParametersFcParameter) *PutEventRuleTargetsResponseFailedFcParameters {
	s.FcParameter = v
	return s
}

type PutEventRuleTargetsResponseFailedFcParametersFcParameter struct {
	Id           *int    `json:"Id" xml:"Id" require:"true"`
	Region       *string `json:"Region" xml:"Region" require:"true"`
	ServiceName  *string `json:"ServiceName" xml:"ServiceName" require:"true"`
	FunctionName *string `json:"FunctionName" xml:"FunctionName" require:"true"`
}

func (s PutEventRuleTargetsResponseFailedFcParametersFcParameter) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleTargetsResponseFailedFcParametersFcParameter) GoString() string {
	return s.String()
}

func (s *PutEventRuleTargetsResponseFailedFcParametersFcParameter) SetId(v int) *PutEventRuleTargetsResponseFailedFcParametersFcParameter {
	s.Id = &v
	return s
}

func (s *PutEventRuleTargetsResponseFailedFcParametersFcParameter) SetRegion(v string) *PutEventRuleTargetsResponseFailedFcParametersFcParameter {
	s.Region = &v
	return s
}

func (s *PutEventRuleTargetsResponseFailedFcParametersFcParameter) SetServiceName(v string) *PutEventRuleTargetsResponseFailedFcParametersFcParameter {
	s.ServiceName = &v
	return s
}

func (s *PutEventRuleTargetsResponseFailedFcParametersFcParameter) SetFunctionName(v string) *PutEventRuleTargetsResponseFailedFcParametersFcParameter {
	s.FunctionName = &v
	return s
}

type DeleteEventRuleTargetsRequest struct {
	RuleName *string   `json:"RuleName" xml:"RuleName" require:"true"`
	Ids      []*string `json:"Ids" xml:"Ids" require:"true" type:"Repeated"`
}

func (s DeleteEventRuleTargetsRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteEventRuleTargetsRequest) GoString() string {
	return s.String()
}

func (s *DeleteEventRuleTargetsRequest) SetRuleName(v string) *DeleteEventRuleTargetsRequest {
	s.RuleName = &v
	return s
}

func (s *DeleteEventRuleTargetsRequest) SetIds(v []*string) *DeleteEventRuleTargetsRequest {
	s.Ids = v
	return s
}

type DeleteEventRuleTargetsResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteEventRuleTargetsResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteEventRuleTargetsResponse) GoString() string {
	return s.String()
}

func (s *DeleteEventRuleTargetsResponse) SetSuccess(v bool) *DeleteEventRuleTargetsResponse {
	s.Success = &v
	return s
}

func (s *DeleteEventRuleTargetsResponse) SetCode(v string) *DeleteEventRuleTargetsResponse {
	s.Code = &v
	return s
}

func (s *DeleteEventRuleTargetsResponse) SetMessage(v string) *DeleteEventRuleTargetsResponse {
	s.Message = &v
	return s
}

func (s *DeleteEventRuleTargetsResponse) SetRequestId(v string) *DeleteEventRuleTargetsResponse {
	s.RequestId = &v
	return s
}

type DisableEventRulesRequest struct {
	RuleNames []*string `json:"RuleNames" xml:"RuleNames" require:"true" type:"Repeated"`
}

func (s DisableEventRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s DisableEventRulesRequest) GoString() string {
	return s.String()
}

func (s *DisableEventRulesRequest) SetRuleNames(v []*string) *DisableEventRulesRequest {
	s.RuleNames = v
	return s
}

type DisableEventRulesResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DisableEventRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s DisableEventRulesResponse) GoString() string {
	return s.String()
}

func (s *DisableEventRulesResponse) SetSuccess(v bool) *DisableEventRulesResponse {
	s.Success = &v
	return s
}

func (s *DisableEventRulesResponse) SetCode(v string) *DisableEventRulesResponse {
	s.Code = &v
	return s
}

func (s *DisableEventRulesResponse) SetMessage(v string) *DisableEventRulesResponse {
	s.Message = &v
	return s
}

func (s *DisableEventRulesResponse) SetRequestId(v string) *DisableEventRulesResponse {
	s.RequestId = &v
	return s
}

type DescribeEventRuleTargetListRequest struct {
	RuleName *string `json:"RuleName" xml:"RuleName" require:"true"`
}

func (s DescribeEventRuleTargetListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleTargetListRequest) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleTargetListRequest) SetRuleName(v string) *DescribeEventRuleTargetListRequest {
	s.RuleName = &v
	return s
}

type DescribeEventRuleTargetListResponse struct {
	Code              *string                                               `json:"Code" xml:"Code" require:"true"`
	Message           *string                                               `json:"Message" xml:"Message" require:"true"`
	RequestId         *string                                               `json:"RequestId" xml:"RequestId" require:"true"`
	ContactParameters *DescribeEventRuleTargetListResponseContactParameters `json:"ContactParameters" xml:"ContactParameters" require:"true" type:"Struct"`
	FcParameters      *DescribeEventRuleTargetListResponseFcParameters      `json:"FcParameters" xml:"FcParameters" require:"true" type:"Struct"`
	MnsParameters     *DescribeEventRuleTargetListResponseMnsParameters     `json:"MnsParameters" xml:"MnsParameters" require:"true" type:"Struct"`
	WebhookParameters *DescribeEventRuleTargetListResponseWebhookParameters `json:"WebhookParameters" xml:"WebhookParameters" require:"true" type:"Struct"`
	SlsParameters     *DescribeEventRuleTargetListResponseSlsParameters     `json:"SlsParameters" xml:"SlsParameters" require:"true" type:"Struct"`
}

func (s DescribeEventRuleTargetListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleTargetListResponse) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleTargetListResponse) SetCode(v string) *DescribeEventRuleTargetListResponse {
	s.Code = &v
	return s
}

func (s *DescribeEventRuleTargetListResponse) SetMessage(v string) *DescribeEventRuleTargetListResponse {
	s.Message = &v
	return s
}

func (s *DescribeEventRuleTargetListResponse) SetRequestId(v string) *DescribeEventRuleTargetListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeEventRuleTargetListResponse) SetContactParameters(v *DescribeEventRuleTargetListResponseContactParameters) *DescribeEventRuleTargetListResponse {
	s.ContactParameters = v
	return s
}

func (s *DescribeEventRuleTargetListResponse) SetFcParameters(v *DescribeEventRuleTargetListResponseFcParameters) *DescribeEventRuleTargetListResponse {
	s.FcParameters = v
	return s
}

func (s *DescribeEventRuleTargetListResponse) SetMnsParameters(v *DescribeEventRuleTargetListResponseMnsParameters) *DescribeEventRuleTargetListResponse {
	s.MnsParameters = v
	return s
}

func (s *DescribeEventRuleTargetListResponse) SetWebhookParameters(v *DescribeEventRuleTargetListResponseWebhookParameters) *DescribeEventRuleTargetListResponse {
	s.WebhookParameters = v
	return s
}

func (s *DescribeEventRuleTargetListResponse) SetSlsParameters(v *DescribeEventRuleTargetListResponseSlsParameters) *DescribeEventRuleTargetListResponse {
	s.SlsParameters = v
	return s
}

type DescribeEventRuleTargetListResponseContactParameters struct {
	ContactParameter []*DescribeEventRuleTargetListResponseContactParametersContactParameter `json:"ContactParameter" xml:"ContactParameter" require:"true" type:"Repeated"`
}

func (s DescribeEventRuleTargetListResponseContactParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleTargetListResponseContactParameters) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleTargetListResponseContactParameters) SetContactParameter(v []*DescribeEventRuleTargetListResponseContactParametersContactParameter) *DescribeEventRuleTargetListResponseContactParameters {
	s.ContactParameter = v
	return s
}

type DescribeEventRuleTargetListResponseContactParametersContactParameter struct {
	ContactGroupName *string `json:"ContactGroupName" xml:"ContactGroupName" require:"true"`
	Level            *string `json:"Level" xml:"Level" require:"true"`
	Id               *string `json:"Id" xml:"Id" require:"true"`
}

func (s DescribeEventRuleTargetListResponseContactParametersContactParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleTargetListResponseContactParametersContactParameter) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleTargetListResponseContactParametersContactParameter) SetContactGroupName(v string) *DescribeEventRuleTargetListResponseContactParametersContactParameter {
	s.ContactGroupName = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseContactParametersContactParameter) SetLevel(v string) *DescribeEventRuleTargetListResponseContactParametersContactParameter {
	s.Level = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseContactParametersContactParameter) SetId(v string) *DescribeEventRuleTargetListResponseContactParametersContactParameter {
	s.Id = &v
	return s
}

type DescribeEventRuleTargetListResponseFcParameters struct {
	FCParameter []*DescribeEventRuleTargetListResponseFcParametersFCParameter `json:"FCParameter" xml:"FCParameter" require:"true" type:"Repeated"`
}

func (s DescribeEventRuleTargetListResponseFcParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleTargetListResponseFcParameters) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleTargetListResponseFcParameters) SetFCParameter(v []*DescribeEventRuleTargetListResponseFcParametersFCParameter) *DescribeEventRuleTargetListResponseFcParameters {
	s.FCParameter = v
	return s
}

type DescribeEventRuleTargetListResponseFcParametersFCParameter struct {
	Region       *string `json:"Region" xml:"Region" require:"true"`
	ServiceName  *string `json:"ServiceName" xml:"ServiceName" require:"true"`
	FunctionName *string `json:"FunctionName" xml:"FunctionName" require:"true"`
	Id           *string `json:"Id" xml:"Id" require:"true"`
	Arn          *string `json:"Arn" xml:"Arn" require:"true"`
}

func (s DescribeEventRuleTargetListResponseFcParametersFCParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleTargetListResponseFcParametersFCParameter) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleTargetListResponseFcParametersFCParameter) SetRegion(v string) *DescribeEventRuleTargetListResponseFcParametersFCParameter {
	s.Region = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseFcParametersFCParameter) SetServiceName(v string) *DescribeEventRuleTargetListResponseFcParametersFCParameter {
	s.ServiceName = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseFcParametersFCParameter) SetFunctionName(v string) *DescribeEventRuleTargetListResponseFcParametersFCParameter {
	s.FunctionName = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseFcParametersFCParameter) SetId(v string) *DescribeEventRuleTargetListResponseFcParametersFCParameter {
	s.Id = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseFcParametersFCParameter) SetArn(v string) *DescribeEventRuleTargetListResponseFcParametersFCParameter {
	s.Arn = &v
	return s
}

type DescribeEventRuleTargetListResponseMnsParameters struct {
	MnsParameter []*DescribeEventRuleTargetListResponseMnsParametersMnsParameter `json:"MnsParameter" xml:"MnsParameter" require:"true" type:"Repeated"`
}

func (s DescribeEventRuleTargetListResponseMnsParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleTargetListResponseMnsParameters) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleTargetListResponseMnsParameters) SetMnsParameter(v []*DescribeEventRuleTargetListResponseMnsParametersMnsParameter) *DescribeEventRuleTargetListResponseMnsParameters {
	s.MnsParameter = v
	return s
}

type DescribeEventRuleTargetListResponseMnsParametersMnsParameter struct {
	Region *string `json:"Region" xml:"Region" require:"true"`
	Queue  *string `json:"Queue" xml:"Queue" require:"true"`
	Id     *string `json:"Id" xml:"Id" require:"true"`
	Arn    *string `json:"Arn" xml:"Arn" require:"true"`
}

func (s DescribeEventRuleTargetListResponseMnsParametersMnsParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleTargetListResponseMnsParametersMnsParameter) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleTargetListResponseMnsParametersMnsParameter) SetRegion(v string) *DescribeEventRuleTargetListResponseMnsParametersMnsParameter {
	s.Region = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseMnsParametersMnsParameter) SetQueue(v string) *DescribeEventRuleTargetListResponseMnsParametersMnsParameter {
	s.Queue = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseMnsParametersMnsParameter) SetId(v string) *DescribeEventRuleTargetListResponseMnsParametersMnsParameter {
	s.Id = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseMnsParametersMnsParameter) SetArn(v string) *DescribeEventRuleTargetListResponseMnsParametersMnsParameter {
	s.Arn = &v
	return s
}

type DescribeEventRuleTargetListResponseWebhookParameters struct {
	WebhookParameter []*DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter `json:"WebhookParameter" xml:"WebhookParameter" require:"true" type:"Repeated"`
}

func (s DescribeEventRuleTargetListResponseWebhookParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleTargetListResponseWebhookParameters) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleTargetListResponseWebhookParameters) SetWebhookParameter(v []*DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter) *DescribeEventRuleTargetListResponseWebhookParameters {
	s.WebhookParameter = v
	return s
}

type DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter struct {
	Id       *string `json:"Id" xml:"Id" require:"true"`
	Protocol *string `json:"Protocol" xml:"Protocol" require:"true"`
	Method   *string `json:"Method" xml:"Method" require:"true"`
	Url      *string `json:"Url" xml:"Url" require:"true"`
}

func (s DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter) SetId(v string) *DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter {
	s.Id = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter) SetProtocol(v string) *DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter {
	s.Protocol = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter) SetMethod(v string) *DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter {
	s.Method = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter) SetUrl(v string) *DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter {
	s.Url = &v
	return s
}

type DescribeEventRuleTargetListResponseSlsParameters struct {
	SlsParameter []*DescribeEventRuleTargetListResponseSlsParametersSlsParameter `json:"SlsParameter" xml:"SlsParameter" require:"true" type:"Repeated"`
}

func (s DescribeEventRuleTargetListResponseSlsParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleTargetListResponseSlsParameters) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleTargetListResponseSlsParameters) SetSlsParameter(v []*DescribeEventRuleTargetListResponseSlsParametersSlsParameter) *DescribeEventRuleTargetListResponseSlsParameters {
	s.SlsParameter = v
	return s
}

type DescribeEventRuleTargetListResponseSlsParametersSlsParameter struct {
	Id       *string `json:"Id" xml:"Id" require:"true"`
	Region   *string `json:"Region" xml:"Region" require:"true"`
	Project  *string `json:"Project" xml:"Project" require:"true"`
	LogStore *string `json:"LogStore" xml:"LogStore" require:"true"`
	Arn      *string `json:"Arn" xml:"Arn" require:"true"`
}

func (s DescribeEventRuleTargetListResponseSlsParametersSlsParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleTargetListResponseSlsParametersSlsParameter) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleTargetListResponseSlsParametersSlsParameter) SetId(v string) *DescribeEventRuleTargetListResponseSlsParametersSlsParameter {
	s.Id = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseSlsParametersSlsParameter) SetRegion(v string) *DescribeEventRuleTargetListResponseSlsParametersSlsParameter {
	s.Region = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseSlsParametersSlsParameter) SetProject(v string) *DescribeEventRuleTargetListResponseSlsParametersSlsParameter {
	s.Project = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseSlsParametersSlsParameter) SetLogStore(v string) *DescribeEventRuleTargetListResponseSlsParametersSlsParameter {
	s.LogStore = &v
	return s
}

func (s *DescribeEventRuleTargetListResponseSlsParametersSlsParameter) SetArn(v string) *DescribeEventRuleTargetListResponseSlsParametersSlsParameter {
	s.Arn = &v
	return s
}

type DeleteEventRulesRequest struct {
	RuleNames []*string `json:"RuleNames" xml:"RuleNames" require:"true" type:"Repeated"`
}

func (s DeleteEventRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteEventRulesRequest) GoString() string {
	return s.String()
}

func (s *DeleteEventRulesRequest) SetRuleNames(v []*string) *DeleteEventRulesRequest {
	s.RuleNames = v
	return s
}

type DeleteEventRulesResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteEventRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteEventRulesResponse) GoString() string {
	return s.String()
}

func (s *DeleteEventRulesResponse) SetSuccess(v bool) *DeleteEventRulesResponse {
	s.Success = &v
	return s
}

func (s *DeleteEventRulesResponse) SetCode(v string) *DeleteEventRulesResponse {
	s.Code = &v
	return s
}

func (s *DeleteEventRulesResponse) SetMessage(v string) *DeleteEventRulesResponse {
	s.Message = &v
	return s
}

func (s *DeleteEventRulesResponse) SetRequestId(v string) *DeleteEventRulesResponse {
	s.RequestId = &v
	return s
}

type EnableEventRulesRequest struct {
	RuleNames []*string `json:"RuleNames" xml:"RuleNames" require:"true" type:"Repeated"`
}

func (s EnableEventRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s EnableEventRulesRequest) GoString() string {
	return s.String()
}

func (s *EnableEventRulesRequest) SetRuleNames(v []*string) *EnableEventRulesRequest {
	s.RuleNames = v
	return s
}

type EnableEventRulesResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s EnableEventRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s EnableEventRulesResponse) GoString() string {
	return s.String()
}

func (s *EnableEventRulesResponse) SetSuccess(v bool) *EnableEventRulesResponse {
	s.Success = &v
	return s
}

func (s *EnableEventRulesResponse) SetCode(v string) *EnableEventRulesResponse {
	s.Code = &v
	return s
}

func (s *EnableEventRulesResponse) SetMessage(v string) *EnableEventRulesResponse {
	s.Message = &v
	return s
}

func (s *EnableEventRulesResponse) SetRequestId(v string) *EnableEventRulesResponse {
	s.RequestId = &v
	return s
}

type PutEventRuleRequest struct {
	RuleName     *string                            `json:"RuleName" xml:"RuleName" require:"true"`
	GroupId      *string                            `json:"GroupId" xml:"GroupId"`
	EventType    *string                            `json:"EventType" xml:"EventType"`
	Description  *string                            `json:"Description" xml:"Description"`
	State        *string                            `json:"State" xml:"State"`
	EventPattern []*PutEventRuleRequestEventPattern `json:"EventPattern" xml:"EventPattern" require:"true" type:"Repeated"`
}

func (s PutEventRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleRequest) GoString() string {
	return s.String()
}

func (s *PutEventRuleRequest) SetRuleName(v string) *PutEventRuleRequest {
	s.RuleName = &v
	return s
}

func (s *PutEventRuleRequest) SetGroupId(v string) *PutEventRuleRequest {
	s.GroupId = &v
	return s
}

func (s *PutEventRuleRequest) SetEventType(v string) *PutEventRuleRequest {
	s.EventType = &v
	return s
}

func (s *PutEventRuleRequest) SetDescription(v string) *PutEventRuleRequest {
	s.Description = &v
	return s
}

func (s *PutEventRuleRequest) SetState(v string) *PutEventRuleRequest {
	s.State = &v
	return s
}

func (s *PutEventRuleRequest) SetEventPattern(v []*PutEventRuleRequestEventPattern) *PutEventRuleRequest {
	s.EventPattern = v
	return s
}

type PutEventRuleRequestEventPattern struct {
	Product       *string   `json:"Product" xml:"Product"`
	NameList      []*string `json:"NameList" xml:"NameList" require:"true" type:"Repeated"`
	StatusList    []*string `json:"StatusList" xml:"StatusList" require:"true" type:"Repeated"`
	LevelList     []*string `json:"LevelList" xml:"LevelList" require:"true" type:"Repeated"`
	EventTypeList []*string `json:"EventTypeList" xml:"EventTypeList" require:"true" type:"Repeated"`
}

func (s PutEventRuleRequestEventPattern) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleRequestEventPattern) GoString() string {
	return s.String()
}

func (s *PutEventRuleRequestEventPattern) SetProduct(v string) *PutEventRuleRequestEventPattern {
	s.Product = &v
	return s
}

func (s *PutEventRuleRequestEventPattern) SetNameList(v []*string) *PutEventRuleRequestEventPattern {
	s.NameList = v
	return s
}

func (s *PutEventRuleRequestEventPattern) SetStatusList(v []*string) *PutEventRuleRequestEventPattern {
	s.StatusList = v
	return s
}

func (s *PutEventRuleRequestEventPattern) SetLevelList(v []*string) *PutEventRuleRequestEventPattern {
	s.LevelList = v
	return s
}

func (s *PutEventRuleRequestEventPattern) SetEventTypeList(v []*string) *PutEventRuleRequestEventPattern {
	s.EventTypeList = v
	return s
}

type PutEventRuleResponse struct {
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
}

func (s PutEventRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s PutEventRuleResponse) GoString() string {
	return s.String()
}

func (s *PutEventRuleResponse) SetSuccess(v bool) *PutEventRuleResponse {
	s.Success = &v
	return s
}

func (s *PutEventRuleResponse) SetCode(v string) *PutEventRuleResponse {
	s.Code = &v
	return s
}

func (s *PutEventRuleResponse) SetMessage(v string) *PutEventRuleResponse {
	s.Message = &v
	return s
}

func (s *PutEventRuleResponse) SetRequestId(v string) *PutEventRuleResponse {
	s.RequestId = &v
	return s
}

func (s *PutEventRuleResponse) SetData(v string) *PutEventRuleResponse {
	s.Data = &v
	return s
}

type DescribeEventRuleListRequest struct {
	NamePrefix *string `json:"NamePrefix" xml:"NamePrefix"`
	PageNumber *string `json:"PageNumber" xml:"PageNumber"`
	PageSize   *string `json:"PageSize" xml:"PageSize"`
	GroupId    *string `json:"GroupId" xml:"GroupId"`
}

func (s DescribeEventRuleListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleListRequest) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleListRequest) SetNamePrefix(v string) *DescribeEventRuleListRequest {
	s.NamePrefix = &v
	return s
}

func (s *DescribeEventRuleListRequest) SetPageNumber(v string) *DescribeEventRuleListRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeEventRuleListRequest) SetPageSize(v string) *DescribeEventRuleListRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeEventRuleListRequest) SetGroupId(v string) *DescribeEventRuleListRequest {
	s.GroupId = &v
	return s
}

type DescribeEventRuleListResponse struct {
	Success    *bool                                    `json:"Success" xml:"Success" require:"true"`
	Code       *string                                  `json:"Code" xml:"Code" require:"true"`
	Message    *string                                  `json:"Message" xml:"Message" require:"true"`
	RequestId  *string                                  `json:"RequestId" xml:"RequestId" require:"true"`
	Total      *int                                     `json:"Total" xml:"Total" require:"true"`
	EventRules *DescribeEventRuleListResponseEventRules `json:"EventRules" xml:"EventRules" require:"true" type:"Struct"`
}

func (s DescribeEventRuleListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleListResponse) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleListResponse) SetSuccess(v bool) *DescribeEventRuleListResponse {
	s.Success = &v
	return s
}

func (s *DescribeEventRuleListResponse) SetCode(v string) *DescribeEventRuleListResponse {
	s.Code = &v
	return s
}

func (s *DescribeEventRuleListResponse) SetMessage(v string) *DescribeEventRuleListResponse {
	s.Message = &v
	return s
}

func (s *DescribeEventRuleListResponse) SetRequestId(v string) *DescribeEventRuleListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeEventRuleListResponse) SetTotal(v int) *DescribeEventRuleListResponse {
	s.Total = &v
	return s
}

func (s *DescribeEventRuleListResponse) SetEventRules(v *DescribeEventRuleListResponseEventRules) *DescribeEventRuleListResponse {
	s.EventRules = v
	return s
}

type DescribeEventRuleListResponseEventRules struct {
	EventRule []*DescribeEventRuleListResponseEventRulesEventRule `json:"EventRule" xml:"EventRule" require:"true" type:"Repeated"`
}

func (s DescribeEventRuleListResponseEventRules) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleListResponseEventRules) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleListResponseEventRules) SetEventRule(v []*DescribeEventRuleListResponseEventRulesEventRule) *DescribeEventRuleListResponseEventRules {
	s.EventRule = v
	return s
}

type DescribeEventRuleListResponseEventRulesEventRule struct {
	Name         *string                                                       `json:"Name" xml:"Name" require:"true"`
	GroupId      *string                                                       `json:"GroupId" xml:"GroupId" require:"true"`
	EventType    *string                                                       `json:"EventType" xml:"EventType" require:"true"`
	State        *string                                                       `json:"State" xml:"State" require:"true"`
	Description  *string                                                       `json:"Description" xml:"Description" require:"true"`
	EventPattern *DescribeEventRuleListResponseEventRulesEventRuleEventPattern `json:"EventPattern" xml:"EventPattern" require:"true" type:"Struct"`
}

func (s DescribeEventRuleListResponseEventRulesEventRule) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleListResponseEventRulesEventRule) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleListResponseEventRulesEventRule) SetName(v string) *DescribeEventRuleListResponseEventRulesEventRule {
	s.Name = &v
	return s
}

func (s *DescribeEventRuleListResponseEventRulesEventRule) SetGroupId(v string) *DescribeEventRuleListResponseEventRulesEventRule {
	s.GroupId = &v
	return s
}

func (s *DescribeEventRuleListResponseEventRulesEventRule) SetEventType(v string) *DescribeEventRuleListResponseEventRulesEventRule {
	s.EventType = &v
	return s
}

func (s *DescribeEventRuleListResponseEventRulesEventRule) SetState(v string) *DescribeEventRuleListResponseEventRulesEventRule {
	s.State = &v
	return s
}

func (s *DescribeEventRuleListResponseEventRulesEventRule) SetDescription(v string) *DescribeEventRuleListResponseEventRulesEventRule {
	s.Description = &v
	return s
}

func (s *DescribeEventRuleListResponseEventRulesEventRule) SetEventPattern(v *DescribeEventRuleListResponseEventRulesEventRuleEventPattern) *DescribeEventRuleListResponseEventRulesEventRule {
	s.EventPattern = v
	return s
}

type DescribeEventRuleListResponseEventRulesEventRuleEventPattern struct {
	EventPattern []*DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern `json:"EventPattern" xml:"EventPattern" require:"true" type:"Repeated"`
}

func (s DescribeEventRuleListResponseEventRulesEventRuleEventPattern) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleListResponseEventRulesEventRuleEventPattern) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleListResponseEventRulesEventRuleEventPattern) SetEventPattern(v []*DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern) *DescribeEventRuleListResponseEventRulesEventRuleEventPattern {
	s.EventPattern = v
	return s
}

type DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern struct {
	Product       *string                                                                                `json:"Product" xml:"Product" require:"true"`
	NameList      *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternNameList      `json:"NameList" xml:"NameList" require:"true" type:"Struct"`
	LevelList     *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternLevelList     `json:"LevelList" xml:"LevelList" require:"true" type:"Struct"`
	EventTypeList *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternEventTypeList `json:"EventTypeList" xml:"EventTypeList" require:"true" type:"Struct"`
}

func (s DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern) SetProduct(v string) *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern {
	s.Product = &v
	return s
}

func (s *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern) SetNameList(v *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternNameList) *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern {
	s.NameList = v
	return s
}

func (s *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern) SetLevelList(v *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternLevelList) *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern {
	s.LevelList = v
	return s
}

func (s *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern) SetEventTypeList(v *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternEventTypeList) *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern {
	s.EventTypeList = v
	return s
}

type DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternNameList struct {
	NameList []*string `json:"NameList" xml:"NameList" require:"true" type:"Repeated"`
}

func (s DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternNameList) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternNameList) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternNameList) SetNameList(v []*string) *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternNameList {
	s.NameList = v
	return s
}

type DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternLevelList struct {
	LevelList []*string `json:"LevelList" xml:"LevelList" require:"true" type:"Repeated"`
}

func (s DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternLevelList) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternLevelList) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternLevelList) SetLevelList(v []*string) *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternLevelList {
	s.LevelList = v
	return s
}

type DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternEventTypeList struct {
	EventTypeList []*string `json:"EventTypeList" xml:"EventTypeList" require:"true" type:"Repeated"`
}

func (s DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternEventTypeList) String() string {
	return tea.Prettify(s)
}

func (s DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternEventTypeList) GoString() string {
	return s.String()
}

func (s *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternEventTypeList) SetEventTypeList(v []*string) *DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternEventTypeList {
	s.EventTypeList = v
	return s
}

type DescribeSystemEventAttributeRequest struct {
	Product        *string `json:"Product" xml:"Product"`
	EventType      *string `json:"EventType" xml:"EventType"`
	Name           *string `json:"Name" xml:"Name"`
	Level          *string `json:"Level" xml:"Level"`
	Status         *string `json:"Status" xml:"Status"`
	GroupId        *string `json:"GroupId" xml:"GroupId"`
	SearchKeywords *string `json:"SearchKeywords" xml:"SearchKeywords"`
	StartTime      *string `json:"StartTime" xml:"StartTime"`
	EndTime        *string `json:"EndTime" xml:"EndTime"`
	PageNumber     *int    `json:"PageNumber" xml:"PageNumber"`
	PageSize       *int    `json:"PageSize" xml:"PageSize"`
}

func (s DescribeSystemEventAttributeRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventAttributeRequest) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventAttributeRequest) SetProduct(v string) *DescribeSystemEventAttributeRequest {
	s.Product = &v
	return s
}

func (s *DescribeSystemEventAttributeRequest) SetEventType(v string) *DescribeSystemEventAttributeRequest {
	s.EventType = &v
	return s
}

func (s *DescribeSystemEventAttributeRequest) SetName(v string) *DescribeSystemEventAttributeRequest {
	s.Name = &v
	return s
}

func (s *DescribeSystemEventAttributeRequest) SetLevel(v string) *DescribeSystemEventAttributeRequest {
	s.Level = &v
	return s
}

func (s *DescribeSystemEventAttributeRequest) SetStatus(v string) *DescribeSystemEventAttributeRequest {
	s.Status = &v
	return s
}

func (s *DescribeSystemEventAttributeRequest) SetGroupId(v string) *DescribeSystemEventAttributeRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeSystemEventAttributeRequest) SetSearchKeywords(v string) *DescribeSystemEventAttributeRequest {
	s.SearchKeywords = &v
	return s
}

func (s *DescribeSystemEventAttributeRequest) SetStartTime(v string) *DescribeSystemEventAttributeRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeSystemEventAttributeRequest) SetEndTime(v string) *DescribeSystemEventAttributeRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeSystemEventAttributeRequest) SetPageNumber(v int) *DescribeSystemEventAttributeRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeSystemEventAttributeRequest) SetPageSize(v int) *DescribeSystemEventAttributeRequest {
	s.PageSize = &v
	return s
}

type DescribeSystemEventAttributeResponse struct {
	Code         *string                                           `json:"Code" xml:"Code" require:"true"`
	Message      *string                                           `json:"Message" xml:"Message" require:"true"`
	RequestId    *string                                           `json:"RequestId" xml:"RequestId" require:"true"`
	Success      *string                                           `json:"Success" xml:"Success" require:"true"`
	SystemEvents *DescribeSystemEventAttributeResponseSystemEvents `json:"SystemEvents" xml:"SystemEvents" require:"true" type:"Struct"`
}

func (s DescribeSystemEventAttributeResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventAttributeResponse) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventAttributeResponse) SetCode(v string) *DescribeSystemEventAttributeResponse {
	s.Code = &v
	return s
}

func (s *DescribeSystemEventAttributeResponse) SetMessage(v string) *DescribeSystemEventAttributeResponse {
	s.Message = &v
	return s
}

func (s *DescribeSystemEventAttributeResponse) SetRequestId(v string) *DescribeSystemEventAttributeResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSystemEventAttributeResponse) SetSuccess(v string) *DescribeSystemEventAttributeResponse {
	s.Success = &v
	return s
}

func (s *DescribeSystemEventAttributeResponse) SetSystemEvents(v *DescribeSystemEventAttributeResponseSystemEvents) *DescribeSystemEventAttributeResponse {
	s.SystemEvents = v
	return s
}

type DescribeSystemEventAttributeResponseSystemEvents struct {
	SystemEvent []*DescribeSystemEventAttributeResponseSystemEventsSystemEvent `json:"SystemEvent" xml:"SystemEvent" require:"true" type:"Repeated"`
}

func (s DescribeSystemEventAttributeResponseSystemEvents) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventAttributeResponseSystemEvents) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventAttributeResponseSystemEvents) SetSystemEvent(v []*DescribeSystemEventAttributeResponseSystemEventsSystemEvent) *DescribeSystemEventAttributeResponseSystemEvents {
	s.SystemEvent = v
	return s
}

type DescribeSystemEventAttributeResponseSystemEventsSystemEvent struct {
	Content      *string `json:"Content" xml:"Content" require:"true"`
	Product      *string `json:"Product" xml:"Product" require:"true"`
	Name         *string `json:"Name" xml:"Name" require:"true"`
	GroupId      *string `json:"GroupId" xml:"GroupId" require:"true"`
	Num          *int64  `json:"Num" xml:"Num" require:"true"`
	Level        *string `json:"Level" xml:"Level" require:"true"`
	Status       *string `json:"Status" xml:"Status" require:"true"`
	ResourceId   *string `json:"ResourceId" xml:"ResourceId" require:"true"`
	RegionId     *string `json:"RegionId" xml:"RegionId" require:"true"`
	InstanceName *string `json:"InstanceName" xml:"InstanceName" require:"true"`
	Time         *int64  `json:"Time" xml:"Time" require:"true"`
}

func (s DescribeSystemEventAttributeResponseSystemEventsSystemEvent) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventAttributeResponseSystemEventsSystemEvent) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventAttributeResponseSystemEventsSystemEvent) SetContent(v string) *DescribeSystemEventAttributeResponseSystemEventsSystemEvent {
	s.Content = &v
	return s
}

func (s *DescribeSystemEventAttributeResponseSystemEventsSystemEvent) SetProduct(v string) *DescribeSystemEventAttributeResponseSystemEventsSystemEvent {
	s.Product = &v
	return s
}

func (s *DescribeSystemEventAttributeResponseSystemEventsSystemEvent) SetName(v string) *DescribeSystemEventAttributeResponseSystemEventsSystemEvent {
	s.Name = &v
	return s
}

func (s *DescribeSystemEventAttributeResponseSystemEventsSystemEvent) SetGroupId(v string) *DescribeSystemEventAttributeResponseSystemEventsSystemEvent {
	s.GroupId = &v
	return s
}

func (s *DescribeSystemEventAttributeResponseSystemEventsSystemEvent) SetNum(v int64) *DescribeSystemEventAttributeResponseSystemEventsSystemEvent {
	s.Num = &v
	return s
}

func (s *DescribeSystemEventAttributeResponseSystemEventsSystemEvent) SetLevel(v string) *DescribeSystemEventAttributeResponseSystemEventsSystemEvent {
	s.Level = &v
	return s
}

func (s *DescribeSystemEventAttributeResponseSystemEventsSystemEvent) SetStatus(v string) *DescribeSystemEventAttributeResponseSystemEventsSystemEvent {
	s.Status = &v
	return s
}

func (s *DescribeSystemEventAttributeResponseSystemEventsSystemEvent) SetResourceId(v string) *DescribeSystemEventAttributeResponseSystemEventsSystemEvent {
	s.ResourceId = &v
	return s
}

func (s *DescribeSystemEventAttributeResponseSystemEventsSystemEvent) SetRegionId(v string) *DescribeSystemEventAttributeResponseSystemEventsSystemEvent {
	s.RegionId = &v
	return s
}

func (s *DescribeSystemEventAttributeResponseSystemEventsSystemEvent) SetInstanceName(v string) *DescribeSystemEventAttributeResponseSystemEventsSystemEvent {
	s.InstanceName = &v
	return s
}

func (s *DescribeSystemEventAttributeResponseSystemEventsSystemEvent) SetTime(v int64) *DescribeSystemEventAttributeResponseSystemEventsSystemEvent {
	s.Time = &v
	return s
}

type DescribeSystemEventHistogramRequest struct {
	Product        *string `json:"Product" xml:"Product"`
	EventType      *string `json:"EventType" xml:"EventType"`
	Name           *string `json:"Name" xml:"Name"`
	Level          *string `json:"Level" xml:"Level"`
	Status         *string `json:"Status" xml:"Status"`
	GroupId        *string `json:"GroupId" xml:"GroupId"`
	SearchKeywords *string `json:"SearchKeywords" xml:"SearchKeywords"`
	StartTime      *string `json:"StartTime" xml:"StartTime"`
	EndTime        *string `json:"EndTime" xml:"EndTime"`
	PageNumber     *int    `json:"PageNumber" xml:"PageNumber"`
	PageSize       *int    `json:"PageSize" xml:"PageSize"`
}

func (s DescribeSystemEventHistogramRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventHistogramRequest) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventHistogramRequest) SetProduct(v string) *DescribeSystemEventHistogramRequest {
	s.Product = &v
	return s
}

func (s *DescribeSystemEventHistogramRequest) SetEventType(v string) *DescribeSystemEventHistogramRequest {
	s.EventType = &v
	return s
}

func (s *DescribeSystemEventHistogramRequest) SetName(v string) *DescribeSystemEventHistogramRequest {
	s.Name = &v
	return s
}

func (s *DescribeSystemEventHistogramRequest) SetLevel(v string) *DescribeSystemEventHistogramRequest {
	s.Level = &v
	return s
}

func (s *DescribeSystemEventHistogramRequest) SetStatus(v string) *DescribeSystemEventHistogramRequest {
	s.Status = &v
	return s
}

func (s *DescribeSystemEventHistogramRequest) SetGroupId(v string) *DescribeSystemEventHistogramRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeSystemEventHistogramRequest) SetSearchKeywords(v string) *DescribeSystemEventHistogramRequest {
	s.SearchKeywords = &v
	return s
}

func (s *DescribeSystemEventHistogramRequest) SetStartTime(v string) *DescribeSystemEventHistogramRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeSystemEventHistogramRequest) SetEndTime(v string) *DescribeSystemEventHistogramRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeSystemEventHistogramRequest) SetPageNumber(v int) *DescribeSystemEventHistogramRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeSystemEventHistogramRequest) SetPageSize(v int) *DescribeSystemEventHistogramRequest {
	s.PageSize = &v
	return s
}

type DescribeSystemEventHistogramResponse struct {
	Code                  *string                                                    `json:"Code" xml:"Code" require:"true"`
	Message               *string                                                    `json:"Message" xml:"Message" require:"true"`
	RequestId             *string                                                    `json:"RequestId" xml:"RequestId" require:"true"`
	Success               *string                                                    `json:"Success" xml:"Success" require:"true"`
	SystemEventHistograms *DescribeSystemEventHistogramResponseSystemEventHistograms `json:"SystemEventHistograms" xml:"SystemEventHistograms" require:"true" type:"Struct"`
}

func (s DescribeSystemEventHistogramResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventHistogramResponse) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventHistogramResponse) SetCode(v string) *DescribeSystemEventHistogramResponse {
	s.Code = &v
	return s
}

func (s *DescribeSystemEventHistogramResponse) SetMessage(v string) *DescribeSystemEventHistogramResponse {
	s.Message = &v
	return s
}

func (s *DescribeSystemEventHistogramResponse) SetRequestId(v string) *DescribeSystemEventHistogramResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSystemEventHistogramResponse) SetSuccess(v string) *DescribeSystemEventHistogramResponse {
	s.Success = &v
	return s
}

func (s *DescribeSystemEventHistogramResponse) SetSystemEventHistograms(v *DescribeSystemEventHistogramResponseSystemEventHistograms) *DescribeSystemEventHistogramResponse {
	s.SystemEventHistograms = v
	return s
}

type DescribeSystemEventHistogramResponseSystemEventHistograms struct {
	SystemEventHistogram []*DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram `json:"SystemEventHistogram" xml:"SystemEventHistogram" require:"true" type:"Repeated"`
}

func (s DescribeSystemEventHistogramResponseSystemEventHistograms) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventHistogramResponseSystemEventHistograms) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventHistogramResponseSystemEventHistograms) SetSystemEventHistogram(v []*DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram) *DescribeSystemEventHistogramResponseSystemEventHistograms {
	s.SystemEventHistogram = v
	return s
}

type DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram struct {
	Count     *int64 `json:"Count" xml:"Count" require:"true"`
	StartTime *int64 `json:"StartTime" xml:"StartTime" require:"true"`
	EndTime   *int64 `json:"EndTime" xml:"EndTime" require:"true"`
}

func (s DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram) SetCount(v int64) *DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram {
	s.Count = &v
	return s
}

func (s *DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram) SetStartTime(v int64) *DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram {
	s.StartTime = &v
	return s
}

func (s *DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram) SetEndTime(v int64) *DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram {
	s.EndTime = &v
	return s
}

type DescribeSystemEventCountRequest struct {
	Product        *string `json:"Product" xml:"Product"`
	EventType      *string `json:"EventType" xml:"EventType"`
	Name           *string `json:"Name" xml:"Name"`
	Level          *string `json:"Level" xml:"Level"`
	Status         *string `json:"Status" xml:"Status"`
	GroupId        *string `json:"GroupId" xml:"GroupId"`
	SearchKeywords *string `json:"SearchKeywords" xml:"SearchKeywords"`
	StartTime      *string `json:"StartTime" xml:"StartTime"`
	EndTime        *string `json:"EndTime" xml:"EndTime"`
}

func (s DescribeSystemEventCountRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventCountRequest) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventCountRequest) SetProduct(v string) *DescribeSystemEventCountRequest {
	s.Product = &v
	return s
}

func (s *DescribeSystemEventCountRequest) SetEventType(v string) *DescribeSystemEventCountRequest {
	s.EventType = &v
	return s
}

func (s *DescribeSystemEventCountRequest) SetName(v string) *DescribeSystemEventCountRequest {
	s.Name = &v
	return s
}

func (s *DescribeSystemEventCountRequest) SetLevel(v string) *DescribeSystemEventCountRequest {
	s.Level = &v
	return s
}

func (s *DescribeSystemEventCountRequest) SetStatus(v string) *DescribeSystemEventCountRequest {
	s.Status = &v
	return s
}

func (s *DescribeSystemEventCountRequest) SetGroupId(v string) *DescribeSystemEventCountRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeSystemEventCountRequest) SetSearchKeywords(v string) *DescribeSystemEventCountRequest {
	s.SearchKeywords = &v
	return s
}

func (s *DescribeSystemEventCountRequest) SetStartTime(v string) *DescribeSystemEventCountRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeSystemEventCountRequest) SetEndTime(v string) *DescribeSystemEventCountRequest {
	s.EndTime = &v
	return s
}

type DescribeSystemEventCountResponse struct {
	Code              *string                                            `json:"Code" xml:"Code" require:"true"`
	Message           *string                                            `json:"Message" xml:"Message" require:"true"`
	RequestId         *string                                            `json:"RequestId" xml:"RequestId" require:"true"`
	Success           *string                                            `json:"Success" xml:"Success" require:"true"`
	SystemEventCounts *DescribeSystemEventCountResponseSystemEventCounts `json:"SystemEventCounts" xml:"SystemEventCounts" require:"true" type:"Struct"`
}

func (s DescribeSystemEventCountResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventCountResponse) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventCountResponse) SetCode(v string) *DescribeSystemEventCountResponse {
	s.Code = &v
	return s
}

func (s *DescribeSystemEventCountResponse) SetMessage(v string) *DescribeSystemEventCountResponse {
	s.Message = &v
	return s
}

func (s *DescribeSystemEventCountResponse) SetRequestId(v string) *DescribeSystemEventCountResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSystemEventCountResponse) SetSuccess(v string) *DescribeSystemEventCountResponse {
	s.Success = &v
	return s
}

func (s *DescribeSystemEventCountResponse) SetSystemEventCounts(v *DescribeSystemEventCountResponseSystemEventCounts) *DescribeSystemEventCountResponse {
	s.SystemEventCounts = v
	return s
}

type DescribeSystemEventCountResponseSystemEventCounts struct {
	SystemEventCount []*DescribeSystemEventCountResponseSystemEventCountsSystemEventCount `json:"SystemEventCount" xml:"SystemEventCount" require:"true" type:"Repeated"`
}

func (s DescribeSystemEventCountResponseSystemEventCounts) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventCountResponseSystemEventCounts) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventCountResponseSystemEventCounts) SetSystemEventCount(v []*DescribeSystemEventCountResponseSystemEventCountsSystemEventCount) *DescribeSystemEventCountResponseSystemEventCounts {
	s.SystemEventCount = v
	return s
}

type DescribeSystemEventCountResponseSystemEventCountsSystemEventCount struct {
	Content      *string `json:"Content" xml:"Content" require:"true"`
	Product      *string `json:"Product" xml:"Product" require:"true"`
	Name         *string `json:"Name" xml:"Name" require:"true"`
	GroupId      *string `json:"GroupId" xml:"GroupId" require:"true"`
	Num          *int64  `json:"Num" xml:"Num" require:"true"`
	Level        *string `json:"Level" xml:"Level" require:"true"`
	Status       *string `json:"Status" xml:"Status" require:"true"`
	ResourceId   *string `json:"ResourceId" xml:"ResourceId" require:"true"`
	RegionId     *string `json:"RegionId" xml:"RegionId" require:"true"`
	InstanceName *string `json:"InstanceName" xml:"InstanceName" require:"true"`
	Time         *int64  `json:"Time" xml:"Time" require:"true"`
}

func (s DescribeSystemEventCountResponseSystemEventCountsSystemEventCount) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventCountResponseSystemEventCountsSystemEventCount) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount) SetContent(v string) *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount {
	s.Content = &v
	return s
}

func (s *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount) SetProduct(v string) *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount {
	s.Product = &v
	return s
}

func (s *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount) SetName(v string) *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount {
	s.Name = &v
	return s
}

func (s *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount) SetGroupId(v string) *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount {
	s.GroupId = &v
	return s
}

func (s *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount) SetNum(v int64) *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount {
	s.Num = &v
	return s
}

func (s *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount) SetLevel(v string) *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount {
	s.Level = &v
	return s
}

func (s *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount) SetStatus(v string) *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount {
	s.Status = &v
	return s
}

func (s *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount) SetResourceId(v string) *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount {
	s.ResourceId = &v
	return s
}

func (s *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount) SetRegionId(v string) *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount {
	s.RegionId = &v
	return s
}

func (s *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount) SetInstanceName(v string) *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount {
	s.InstanceName = &v
	return s
}

func (s *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount) SetTime(v int64) *DescribeSystemEventCountResponseSystemEventCountsSystemEventCount {
	s.Time = &v
	return s
}

type DescribeSystemEventMetaListRequest struct {
}

func (s DescribeSystemEventMetaListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventMetaListRequest) GoString() string {
	return s.String()
}

type DescribeSystemEventMetaListResponse struct {
	RequestId *string                                  `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool                                    `json:"Success" xml:"Success" require:"true"`
	Code      *int                                     `json:"Code" xml:"Code" require:"true"`
	Message   *string                                  `json:"Message" xml:"Message" require:"true"`
	Data      *DescribeSystemEventMetaListResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s DescribeSystemEventMetaListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventMetaListResponse) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventMetaListResponse) SetRequestId(v string) *DescribeSystemEventMetaListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSystemEventMetaListResponse) SetSuccess(v bool) *DescribeSystemEventMetaListResponse {
	s.Success = &v
	return s
}

func (s *DescribeSystemEventMetaListResponse) SetCode(v int) *DescribeSystemEventMetaListResponse {
	s.Code = &v
	return s
}

func (s *DescribeSystemEventMetaListResponse) SetMessage(v string) *DescribeSystemEventMetaListResponse {
	s.Message = &v
	return s
}

func (s *DescribeSystemEventMetaListResponse) SetData(v *DescribeSystemEventMetaListResponseData) *DescribeSystemEventMetaListResponse {
	s.Data = v
	return s
}

type DescribeSystemEventMetaListResponseData struct {
	Resource []*DescribeSystemEventMetaListResponseDataResource `json:"Resource" xml:"Resource" require:"true" type:"Repeated"`
}

func (s DescribeSystemEventMetaListResponseData) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventMetaListResponseData) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventMetaListResponseData) SetResource(v []*DescribeSystemEventMetaListResponseDataResource) *DescribeSystemEventMetaListResponseData {
	s.Resource = v
	return s
}

type DescribeSystemEventMetaListResponseDataResource struct {
	Product    *string `json:"Product" xml:"Product" require:"true"`
	Name       *string `json:"Name" xml:"Name" require:"true"`
	NameDesc   *string `json:"NameDesc" xml:"NameDesc" require:"true"`
	Level      *string `json:"Level" xml:"Level" require:"true"`
	Status     *string `json:"Status" xml:"Status" require:"true"`
	StatusDesc *string `json:"StatusDesc" xml:"StatusDesc" require:"true"`
	EventType  *string `json:"EventType" xml:"EventType" require:"true"`
}

func (s DescribeSystemEventMetaListResponseDataResource) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemEventMetaListResponseDataResource) GoString() string {
	return s.String()
}

func (s *DescribeSystemEventMetaListResponseDataResource) SetProduct(v string) *DescribeSystemEventMetaListResponseDataResource {
	s.Product = &v
	return s
}

func (s *DescribeSystemEventMetaListResponseDataResource) SetName(v string) *DescribeSystemEventMetaListResponseDataResource {
	s.Name = &v
	return s
}

func (s *DescribeSystemEventMetaListResponseDataResource) SetNameDesc(v string) *DescribeSystemEventMetaListResponseDataResource {
	s.NameDesc = &v
	return s
}

func (s *DescribeSystemEventMetaListResponseDataResource) SetLevel(v string) *DescribeSystemEventMetaListResponseDataResource {
	s.Level = &v
	return s
}

func (s *DescribeSystemEventMetaListResponseDataResource) SetStatus(v string) *DescribeSystemEventMetaListResponseDataResource {
	s.Status = &v
	return s
}

func (s *DescribeSystemEventMetaListResponseDataResource) SetStatusDesc(v string) *DescribeSystemEventMetaListResponseDataResource {
	s.StatusDesc = &v
	return s
}

func (s *DescribeSystemEventMetaListResponseDataResource) SetEventType(v string) *DescribeSystemEventMetaListResponseDataResource {
	s.EventType = &v
	return s
}

type DescribeMonitoringAgentProcessesRequest struct {
	InstanceId *string `json:"InstanceId" xml:"InstanceId" require:"true"`
}

func (s DescribeMonitoringAgentProcessesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentProcessesRequest) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringAgentProcessesRequest) SetInstanceId(v string) *DescribeMonitoringAgentProcessesRequest {
	s.InstanceId = &v
	return s
}

type DescribeMonitoringAgentProcessesResponse struct {
	Code          *string                                                `json:"Code" xml:"Code" require:"true"`
	Message       *string                                                `json:"Message" xml:"Message" require:"true"`
	Success       *bool                                                  `json:"Success" xml:"Success" require:"true"`
	RequestId     *string                                                `json:"RequestId" xml:"RequestId" require:"true"`
	NodeProcesses *DescribeMonitoringAgentProcessesResponseNodeProcesses `json:"NodeProcesses" xml:"NodeProcesses" require:"true" type:"Struct"`
}

func (s DescribeMonitoringAgentProcessesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentProcessesResponse) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringAgentProcessesResponse) SetCode(v string) *DescribeMonitoringAgentProcessesResponse {
	s.Code = &v
	return s
}

func (s *DescribeMonitoringAgentProcessesResponse) SetMessage(v string) *DescribeMonitoringAgentProcessesResponse {
	s.Message = &v
	return s
}

func (s *DescribeMonitoringAgentProcessesResponse) SetSuccess(v bool) *DescribeMonitoringAgentProcessesResponse {
	s.Success = &v
	return s
}

func (s *DescribeMonitoringAgentProcessesResponse) SetRequestId(v string) *DescribeMonitoringAgentProcessesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMonitoringAgentProcessesResponse) SetNodeProcesses(v *DescribeMonitoringAgentProcessesResponseNodeProcesses) *DescribeMonitoringAgentProcessesResponse {
	s.NodeProcesses = v
	return s
}

type DescribeMonitoringAgentProcessesResponseNodeProcesses struct {
	NodeProcess []*DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess `json:"NodeProcess" xml:"NodeProcess" require:"true" type:"Repeated"`
}

func (s DescribeMonitoringAgentProcessesResponseNodeProcesses) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentProcessesResponseNodeProcesses) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringAgentProcessesResponseNodeProcesses) SetNodeProcess(v []*DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess) *DescribeMonitoringAgentProcessesResponseNodeProcesses {
	s.NodeProcess = v
	return s
}

type DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess struct {
	ProcessId   *int64  `json:"ProcessId" xml:"ProcessId" require:"true"`
	InstanceId  *string `json:"InstanceId" xml:"InstanceId" require:"true"`
	ProcessName *string `json:"ProcessName" xml:"ProcessName" require:"true"`
	ProcessUser *string `json:"ProcessUser" xml:"ProcessUser" require:"true"`
	Command     *string `json:"Command" xml:"Command" require:"true"`
	GroupId     *string `json:"GroupId" xml:"GroupId" require:"true"`
}

func (s DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess) SetProcessId(v int64) *DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess {
	s.ProcessId = &v
	return s
}

func (s *DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess) SetInstanceId(v string) *DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess {
	s.InstanceId = &v
	return s
}

func (s *DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess) SetProcessName(v string) *DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess {
	s.ProcessName = &v
	return s
}

func (s *DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess) SetProcessUser(v string) *DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess {
	s.ProcessUser = &v
	return s
}

func (s *DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess) SetCommand(v string) *DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess {
	s.Command = &v
	return s
}

func (s *DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess) SetGroupId(v string) *DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess {
	s.GroupId = &v
	return s
}

type UninstallMonitoringAgentRequest struct {
	InstanceId *string `json:"InstanceId" xml:"InstanceId" require:"true"`
}

func (s UninstallMonitoringAgentRequest) String() string {
	return tea.Prettify(s)
}

func (s UninstallMonitoringAgentRequest) GoString() string {
	return s.String()
}

func (s *UninstallMonitoringAgentRequest) SetInstanceId(v string) *UninstallMonitoringAgentRequest {
	s.InstanceId = &v
	return s
}

type UninstallMonitoringAgentResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s UninstallMonitoringAgentResponse) String() string {
	return tea.Prettify(s)
}

func (s UninstallMonitoringAgentResponse) GoString() string {
	return s.String()
}

func (s *UninstallMonitoringAgentResponse) SetCode(v string) *UninstallMonitoringAgentResponse {
	s.Code = &v
	return s
}

func (s *UninstallMonitoringAgentResponse) SetMessage(v string) *UninstallMonitoringAgentResponse {
	s.Message = &v
	return s
}

func (s *UninstallMonitoringAgentResponse) SetSuccess(v bool) *UninstallMonitoringAgentResponse {
	s.Success = &v
	return s
}

func (s *UninstallMonitoringAgentResponse) SetRequestId(v string) *UninstallMonitoringAgentResponse {
	s.RequestId = &v
	return s
}

type DescribeMonitoringAgentAccessKeyRequest struct {
}

func (s DescribeMonitoringAgentAccessKeyRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentAccessKeyRequest) GoString() string {
	return s.String()
}

type DescribeMonitoringAgentAccessKeyResponse struct {
	Code      *int    `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	AccessKey *string `json:"AccessKey" xml:"AccessKey" require:"true"`
	SecretKey *string `json:"SecretKey" xml:"SecretKey" require:"true"`
}

func (s DescribeMonitoringAgentAccessKeyResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentAccessKeyResponse) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringAgentAccessKeyResponse) SetCode(v int) *DescribeMonitoringAgentAccessKeyResponse {
	s.Code = &v
	return s
}

func (s *DescribeMonitoringAgentAccessKeyResponse) SetMessage(v string) *DescribeMonitoringAgentAccessKeyResponse {
	s.Message = &v
	return s
}

func (s *DescribeMonitoringAgentAccessKeyResponse) SetSuccess(v bool) *DescribeMonitoringAgentAccessKeyResponse {
	s.Success = &v
	return s
}

func (s *DescribeMonitoringAgentAccessKeyResponse) SetRequestId(v string) *DescribeMonitoringAgentAccessKeyResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMonitoringAgentAccessKeyResponse) SetAccessKey(v string) *DescribeMonitoringAgentAccessKeyResponse {
	s.AccessKey = &v
	return s
}

func (s *DescribeMonitoringAgentAccessKeyResponse) SetSecretKey(v string) *DescribeMonitoringAgentAccessKeyResponse {
	s.SecretKey = &v
	return s
}

type InstallMonitoringAgentRequest struct {
	Force       *bool     `json:"Force" xml:"Force"`
	InstanceIds []*string `json:"InstanceIds" xml:"InstanceIds" require:"true" type:"Repeated"`
}

func (s InstallMonitoringAgentRequest) String() string {
	return tea.Prettify(s)
}

func (s InstallMonitoringAgentRequest) GoString() string {
	return s.String()
}

func (s *InstallMonitoringAgentRequest) SetForce(v bool) *InstallMonitoringAgentRequest {
	s.Force = &v
	return s
}

func (s *InstallMonitoringAgentRequest) SetInstanceIds(v []*string) *InstallMonitoringAgentRequest {
	s.InstanceIds = v
	return s
}

type InstallMonitoringAgentResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s InstallMonitoringAgentResponse) String() string {
	return tea.Prettify(s)
}

func (s InstallMonitoringAgentResponse) GoString() string {
	return s.String()
}

func (s *InstallMonitoringAgentResponse) SetCode(v string) *InstallMonitoringAgentResponse {
	s.Code = &v
	return s
}

func (s *InstallMonitoringAgentResponse) SetMessage(v string) *InstallMonitoringAgentResponse {
	s.Message = &v
	return s
}

func (s *InstallMonitoringAgentResponse) SetSuccess(v bool) *InstallMonitoringAgentResponse {
	s.Success = &v
	return s
}

func (s *InstallMonitoringAgentResponse) SetRequestId(v string) *InstallMonitoringAgentResponse {
	s.RequestId = &v
	return s
}

type SendDryRunSystemEventRequest struct {
	Product      *string `json:"Product" xml:"Product" require:"true"`
	EventName    *string `json:"EventName" xml:"EventName" require:"true"`
	GroupId      *string `json:"GroupId" xml:"GroupId"`
	EventContent *string `json:"EventContent" xml:"EventContent"`
}

func (s SendDryRunSystemEventRequest) String() string {
	return tea.Prettify(s)
}

func (s SendDryRunSystemEventRequest) GoString() string {
	return s.String()
}

func (s *SendDryRunSystemEventRequest) SetProduct(v string) *SendDryRunSystemEventRequest {
	s.Product = &v
	return s
}

func (s *SendDryRunSystemEventRequest) SetEventName(v string) *SendDryRunSystemEventRequest {
	s.EventName = &v
	return s
}

func (s *SendDryRunSystemEventRequest) SetGroupId(v string) *SendDryRunSystemEventRequest {
	s.GroupId = &v
	return s
}

func (s *SendDryRunSystemEventRequest) SetEventContent(v string) *SendDryRunSystemEventRequest {
	s.EventContent = &v
	return s
}

type SendDryRunSystemEventResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *string `json:"Success" xml:"Success" require:"true"`
}

func (s SendDryRunSystemEventResponse) String() string {
	return tea.Prettify(s)
}

func (s SendDryRunSystemEventResponse) GoString() string {
	return s.String()
}

func (s *SendDryRunSystemEventResponse) SetCode(v string) *SendDryRunSystemEventResponse {
	s.Code = &v
	return s
}

func (s *SendDryRunSystemEventResponse) SetMessage(v string) *SendDryRunSystemEventResponse {
	s.Message = &v
	return s
}

func (s *SendDryRunSystemEventResponse) SetRequestId(v string) *SendDryRunSystemEventResponse {
	s.RequestId = &v
	return s
}

func (s *SendDryRunSystemEventResponse) SetSuccess(v string) *SendDryRunSystemEventResponse {
	s.Success = &v
	return s
}

type CreateMonitoringAgentProcessRequest struct {
	ProcessName *string `json:"ProcessName" xml:"ProcessName"`
	InstanceId  *string `json:"InstanceId" xml:"InstanceId" require:"true"`
	ProcessUser *string `json:"ProcessUser" xml:"ProcessUser"`
}

func (s CreateMonitoringAgentProcessRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateMonitoringAgentProcessRequest) GoString() string {
	return s.String()
}

func (s *CreateMonitoringAgentProcessRequest) SetProcessName(v string) *CreateMonitoringAgentProcessRequest {
	s.ProcessName = &v
	return s
}

func (s *CreateMonitoringAgentProcessRequest) SetInstanceId(v string) *CreateMonitoringAgentProcessRequest {
	s.InstanceId = &v
	return s
}

func (s *CreateMonitoringAgentProcessRequest) SetProcessUser(v string) *CreateMonitoringAgentProcessRequest {
	s.ProcessUser = &v
	return s
}

type CreateMonitoringAgentProcessResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Id        *int64  `json:"Id" xml:"Id" require:"true"`
}

func (s CreateMonitoringAgentProcessResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateMonitoringAgentProcessResponse) GoString() string {
	return s.String()
}

func (s *CreateMonitoringAgentProcessResponse) SetCode(v string) *CreateMonitoringAgentProcessResponse {
	s.Code = &v
	return s
}

func (s *CreateMonitoringAgentProcessResponse) SetMessage(v string) *CreateMonitoringAgentProcessResponse {
	s.Message = &v
	return s
}

func (s *CreateMonitoringAgentProcessResponse) SetSuccess(v bool) *CreateMonitoringAgentProcessResponse {
	s.Success = &v
	return s
}

func (s *CreateMonitoringAgentProcessResponse) SetRequestId(v string) *CreateMonitoringAgentProcessResponse {
	s.RequestId = &v
	return s
}

func (s *CreateMonitoringAgentProcessResponse) SetId(v int64) *CreateMonitoringAgentProcessResponse {
	s.Id = &v
	return s
}

type DescribeMonitoringAgentConfigRequest struct {
}

func (s DescribeMonitoringAgentConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentConfigRequest) GoString() string {
	return s.String()
}

type DescribeMonitoringAgentConfigResponse struct {
	Code                     *string `json:"Code" xml:"Code" require:"true"`
	Message                  *string `json:"Message" xml:"Message" require:"true"`
	Success                  *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId                *string `json:"RequestId" xml:"RequestId" require:"true"`
	AutoInstall              *bool   `json:"AutoInstall" xml:"AutoInstall" require:"true"`
	EnableInstallAgentNewECS *bool   `json:"EnableInstallAgentNewECS" xml:"EnableInstallAgentNewECS" require:"true"`
	EnableActiveAlert        *string `json:"EnableActiveAlert" xml:"EnableActiveAlert" require:"true"`
}

func (s DescribeMonitoringAgentConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentConfigResponse) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringAgentConfigResponse) SetCode(v string) *DescribeMonitoringAgentConfigResponse {
	s.Code = &v
	return s
}

func (s *DescribeMonitoringAgentConfigResponse) SetMessage(v string) *DescribeMonitoringAgentConfigResponse {
	s.Message = &v
	return s
}

func (s *DescribeMonitoringAgentConfigResponse) SetSuccess(v bool) *DescribeMonitoringAgentConfigResponse {
	s.Success = &v
	return s
}

func (s *DescribeMonitoringAgentConfigResponse) SetRequestId(v string) *DescribeMonitoringAgentConfigResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMonitoringAgentConfigResponse) SetAutoInstall(v bool) *DescribeMonitoringAgentConfigResponse {
	s.AutoInstall = &v
	return s
}

func (s *DescribeMonitoringAgentConfigResponse) SetEnableInstallAgentNewECS(v bool) *DescribeMonitoringAgentConfigResponse {
	s.EnableInstallAgentNewECS = &v
	return s
}

func (s *DescribeMonitoringAgentConfigResponse) SetEnableActiveAlert(v string) *DescribeMonitoringAgentConfigResponse {
	s.EnableActiveAlert = &v
	return s
}

type DeleteMonitoringAgentProcessRequest struct {
	InstanceId  *string `json:"InstanceId" xml:"InstanceId" require:"true"`
	ProcessName *string `json:"ProcessName" xml:"ProcessName"`
	ProcessId   *string `json:"ProcessId" xml:"ProcessId"`
}

func (s DeleteMonitoringAgentProcessRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteMonitoringAgentProcessRequest) GoString() string {
	return s.String()
}

func (s *DeleteMonitoringAgentProcessRequest) SetInstanceId(v string) *DeleteMonitoringAgentProcessRequest {
	s.InstanceId = &v
	return s
}

func (s *DeleteMonitoringAgentProcessRequest) SetProcessName(v string) *DeleteMonitoringAgentProcessRequest {
	s.ProcessName = &v
	return s
}

func (s *DeleteMonitoringAgentProcessRequest) SetProcessId(v string) *DeleteMonitoringAgentProcessRequest {
	s.ProcessId = &v
	return s
}

type DeleteMonitoringAgentProcessResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteMonitoringAgentProcessResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteMonitoringAgentProcessResponse) GoString() string {
	return s.String()
}

func (s *DeleteMonitoringAgentProcessResponse) SetCode(v string) *DeleteMonitoringAgentProcessResponse {
	s.Code = &v
	return s
}

func (s *DeleteMonitoringAgentProcessResponse) SetMessage(v string) *DeleteMonitoringAgentProcessResponse {
	s.Message = &v
	return s
}

func (s *DeleteMonitoringAgentProcessResponse) SetSuccess(v bool) *DeleteMonitoringAgentProcessResponse {
	s.Success = &v
	return s
}

func (s *DeleteMonitoringAgentProcessResponse) SetRequestId(v string) *DeleteMonitoringAgentProcessResponse {
	s.RequestId = &v
	return s
}

type DescribeMonitoringAgentHostsRequest struct {
	KeyWord          *string `json:"KeyWord" xml:"KeyWord"`
	HostName         *string `json:"HostName" xml:"HostName"`
	InstanceIds      *string `json:"InstanceIds" xml:"InstanceIds"`
	SerialNumbers    *string `json:"SerialNumbers" xml:"SerialNumbers"`
	PageNumber       *int    `json:"PageNumber" xml:"PageNumber"`
	PageSize         *int    `json:"PageSize" xml:"PageSize"`
	InstanceRegionId *string `json:"InstanceRegionId" xml:"InstanceRegionId"`
}

func (s DescribeMonitoringAgentHostsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentHostsRequest) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringAgentHostsRequest) SetKeyWord(v string) *DescribeMonitoringAgentHostsRequest {
	s.KeyWord = &v
	return s
}

func (s *DescribeMonitoringAgentHostsRequest) SetHostName(v string) *DescribeMonitoringAgentHostsRequest {
	s.HostName = &v
	return s
}

func (s *DescribeMonitoringAgentHostsRequest) SetInstanceIds(v string) *DescribeMonitoringAgentHostsRequest {
	s.InstanceIds = &v
	return s
}

func (s *DescribeMonitoringAgentHostsRequest) SetSerialNumbers(v string) *DescribeMonitoringAgentHostsRequest {
	s.SerialNumbers = &v
	return s
}

func (s *DescribeMonitoringAgentHostsRequest) SetPageNumber(v int) *DescribeMonitoringAgentHostsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeMonitoringAgentHostsRequest) SetPageSize(v int) *DescribeMonitoringAgentHostsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeMonitoringAgentHostsRequest) SetInstanceRegionId(v string) *DescribeMonitoringAgentHostsRequest {
	s.InstanceRegionId = &v
	return s
}

type DescribeMonitoringAgentHostsResponse struct {
	Code      *string                                    `json:"Code" xml:"Code" require:"true"`
	Message   *string                                    `json:"Message" xml:"Message" require:"true"`
	Success   *bool                                      `json:"Success" xml:"Success" require:"true"`
	RequestId *string                                    `json:"RequestId" xml:"RequestId" require:"true"`
	PageTotal *int                                       `json:"PageTotal" xml:"PageTotal" require:"true"`
	Total     *int                                       `json:"Total" xml:"Total" require:"true"`
	Hosts     *DescribeMonitoringAgentHostsResponseHosts `json:"Hosts" xml:"Hosts" require:"true" type:"Struct"`
}

func (s DescribeMonitoringAgentHostsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentHostsResponse) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringAgentHostsResponse) SetCode(v string) *DescribeMonitoringAgentHostsResponse {
	s.Code = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponse) SetMessage(v string) *DescribeMonitoringAgentHostsResponse {
	s.Message = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponse) SetSuccess(v bool) *DescribeMonitoringAgentHostsResponse {
	s.Success = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponse) SetRequestId(v string) *DescribeMonitoringAgentHostsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponse) SetPageTotal(v int) *DescribeMonitoringAgentHostsResponse {
	s.PageTotal = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponse) SetTotal(v int) *DescribeMonitoringAgentHostsResponse {
	s.Total = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponse) SetHosts(v *DescribeMonitoringAgentHostsResponseHosts) *DescribeMonitoringAgentHostsResponse {
	s.Hosts = v
	return s
}

type DescribeMonitoringAgentHostsResponseHosts struct {
	Host []*DescribeMonitoringAgentHostsResponseHostsHost `json:"Host" xml:"Host" require:"true" type:"Repeated"`
}

func (s DescribeMonitoringAgentHostsResponseHosts) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentHostsResponseHosts) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringAgentHostsResponseHosts) SetHost(v []*DescribeMonitoringAgentHostsResponseHostsHost) *DescribeMonitoringAgentHostsResponseHosts {
	s.Host = v
	return s
}

type DescribeMonitoringAgentHostsResponseHostsHost struct {
	InstanceId         *string `json:"InstanceId" xml:"InstanceId" require:"true"`
	SerialNumber       *string `json:"SerialNumber" xml:"SerialNumber" require:"true"`
	HostName           *string `json:"HostName" xml:"HostName" require:"true"`
	AliUid             *int64  `json:"AliUid" xml:"AliUid" require:"true"`
	OperatingSystem    *string `json:"OperatingSystem" xml:"OperatingSystem" require:"true"`
	IpGroup            *string `json:"IpGroup" xml:"IpGroup" require:"true"`
	Region             *string `json:"Region" xml:"Region" require:"true"`
	AgentVersion       *string `json:"AgentVersion" xml:"AgentVersion" require:"true"`
	EipAddress         *string `json:"EipAddress" xml:"EipAddress" require:"true"`
	EipId              *string `json:"EipId" xml:"EipId" require:"true"`
	IsAliyunHost       *bool   `json:"isAliyunHost" xml:"isAliyunHost" require:"true"`
	NatIp              *string `json:"NatIp" xml:"NatIp" require:"true"`
	NetworkType        *string `json:"NetworkType" xml:"NetworkType" require:"true"`
	InstanceTypeFamily *string `json:"InstanceTypeFamily" xml:"InstanceTypeFamily" require:"true"`
}

func (s DescribeMonitoringAgentHostsResponseHostsHost) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringAgentHostsResponseHostsHost) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringAgentHostsResponseHostsHost) SetInstanceId(v string) *DescribeMonitoringAgentHostsResponseHostsHost {
	s.InstanceId = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponseHostsHost) SetSerialNumber(v string) *DescribeMonitoringAgentHostsResponseHostsHost {
	s.SerialNumber = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponseHostsHost) SetHostName(v string) *DescribeMonitoringAgentHostsResponseHostsHost {
	s.HostName = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponseHostsHost) SetAliUid(v int64) *DescribeMonitoringAgentHostsResponseHostsHost {
	s.AliUid = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponseHostsHost) SetOperatingSystem(v string) *DescribeMonitoringAgentHostsResponseHostsHost {
	s.OperatingSystem = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponseHostsHost) SetIpGroup(v string) *DescribeMonitoringAgentHostsResponseHostsHost {
	s.IpGroup = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponseHostsHost) SetRegion(v string) *DescribeMonitoringAgentHostsResponseHostsHost {
	s.Region = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponseHostsHost) SetAgentVersion(v string) *DescribeMonitoringAgentHostsResponseHostsHost {
	s.AgentVersion = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponseHostsHost) SetEipAddress(v string) *DescribeMonitoringAgentHostsResponseHostsHost {
	s.EipAddress = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponseHostsHost) SetEipId(v string) *DescribeMonitoringAgentHostsResponseHostsHost {
	s.EipId = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponseHostsHost) SetIsAliyunHost(v bool) *DescribeMonitoringAgentHostsResponseHostsHost {
	s.IsAliyunHost = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponseHostsHost) SetNatIp(v string) *DescribeMonitoringAgentHostsResponseHostsHost {
	s.NatIp = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponseHostsHost) SetNetworkType(v string) *DescribeMonitoringAgentHostsResponseHostsHost {
	s.NetworkType = &v
	return s
}

func (s *DescribeMonitoringAgentHostsResponseHostsHost) SetInstanceTypeFamily(v string) *DescribeMonitoringAgentHostsResponseHostsHost {
	s.InstanceTypeFamily = &v
	return s
}

type DescribeSiteMonitorDataRequest struct {
	TaskId     *string `json:"TaskId" xml:"TaskId" require:"true"`
	Type       *string `json:"Type" xml:"Type"`
	MetricName *string `json:"MetricName" xml:"MetricName" require:"true"`
	StartTime  *string `json:"StartTime" xml:"StartTime"`
	EndTime    *string `json:"EndTime" xml:"EndTime"`
	Period     *string `json:"Period" xml:"Period"`
	NextToken  *string `json:"NextToken" xml:"NextToken"`
	Length     *int    `json:"Length" xml:"Length"`
}

func (s DescribeSiteMonitorDataRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorDataRequest) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorDataRequest) SetTaskId(v string) *DescribeSiteMonitorDataRequest {
	s.TaskId = &v
	return s
}

func (s *DescribeSiteMonitorDataRequest) SetType(v string) *DescribeSiteMonitorDataRequest {
	s.Type = &v
	return s
}

func (s *DescribeSiteMonitorDataRequest) SetMetricName(v string) *DescribeSiteMonitorDataRequest {
	s.MetricName = &v
	return s
}

func (s *DescribeSiteMonitorDataRequest) SetStartTime(v string) *DescribeSiteMonitorDataRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeSiteMonitorDataRequest) SetEndTime(v string) *DescribeSiteMonitorDataRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeSiteMonitorDataRequest) SetPeriod(v string) *DescribeSiteMonitorDataRequest {
	s.Period = &v
	return s
}

func (s *DescribeSiteMonitorDataRequest) SetNextToken(v string) *DescribeSiteMonitorDataRequest {
	s.NextToken = &v
	return s
}

func (s *DescribeSiteMonitorDataRequest) SetLength(v int) *DescribeSiteMonitorDataRequest {
	s.Length = &v
	return s
}

type DescribeSiteMonitorDataResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *string `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	NextToken *string `json:"NextToken" xml:"NextToken" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
}

func (s DescribeSiteMonitorDataResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorDataResponse) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorDataResponse) SetCode(v string) *DescribeSiteMonitorDataResponse {
	s.Code = &v
	return s
}

func (s *DescribeSiteMonitorDataResponse) SetMessage(v string) *DescribeSiteMonitorDataResponse {
	s.Message = &v
	return s
}

func (s *DescribeSiteMonitorDataResponse) SetSuccess(v string) *DescribeSiteMonitorDataResponse {
	s.Success = &v
	return s
}

func (s *DescribeSiteMonitorDataResponse) SetRequestId(v string) *DescribeSiteMonitorDataResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSiteMonitorDataResponse) SetNextToken(v string) *DescribeSiteMonitorDataResponse {
	s.NextToken = &v
	return s
}

func (s *DescribeSiteMonitorDataResponse) SetData(v string) *DescribeSiteMonitorDataResponse {
	s.Data = &v
	return s
}

type ModifySiteMonitorRequest struct {
	Address     *string `json:"Address" xml:"Address"`
	TaskId      *string `json:"TaskId" xml:"TaskId" require:"true"`
	TaskName    *string `json:"TaskName" xml:"TaskName"`
	Interval    *string `json:"Interval" xml:"Interval"`
	IspCities   *string `json:"IspCities" xml:"IspCities"`
	OptionsJson *string `json:"OptionsJson" xml:"OptionsJson"`
	AlertIds    *string `json:"AlertIds" xml:"AlertIds"`
}

func (s ModifySiteMonitorRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifySiteMonitorRequest) GoString() string {
	return s.String()
}

func (s *ModifySiteMonitorRequest) SetAddress(v string) *ModifySiteMonitorRequest {
	s.Address = &v
	return s
}

func (s *ModifySiteMonitorRequest) SetTaskId(v string) *ModifySiteMonitorRequest {
	s.TaskId = &v
	return s
}

func (s *ModifySiteMonitorRequest) SetTaskName(v string) *ModifySiteMonitorRequest {
	s.TaskName = &v
	return s
}

func (s *ModifySiteMonitorRequest) SetInterval(v string) *ModifySiteMonitorRequest {
	s.Interval = &v
	return s
}

func (s *ModifySiteMonitorRequest) SetIspCities(v string) *ModifySiteMonitorRequest {
	s.IspCities = &v
	return s
}

func (s *ModifySiteMonitorRequest) SetOptionsJson(v string) *ModifySiteMonitorRequest {
	s.OptionsJson = &v
	return s
}

func (s *ModifySiteMonitorRequest) SetAlertIds(v string) *ModifySiteMonitorRequest {
	s.AlertIds = &v
	return s
}

type ModifySiteMonitorResponse struct {
	Code      *string                        `json:"Code" xml:"Code" require:"true"`
	Message   *string                        `json:"Message" xml:"Message" require:"true"`
	Success   *string                        `json:"Success" xml:"Success" require:"true"`
	RequestId *string                        `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ModifySiteMonitorResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s ModifySiteMonitorResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifySiteMonitorResponse) GoString() string {
	return s.String()
}

func (s *ModifySiteMonitorResponse) SetCode(v string) *ModifySiteMonitorResponse {
	s.Code = &v
	return s
}

func (s *ModifySiteMonitorResponse) SetMessage(v string) *ModifySiteMonitorResponse {
	s.Message = &v
	return s
}

func (s *ModifySiteMonitorResponse) SetSuccess(v string) *ModifySiteMonitorResponse {
	s.Success = &v
	return s
}

func (s *ModifySiteMonitorResponse) SetRequestId(v string) *ModifySiteMonitorResponse {
	s.RequestId = &v
	return s
}

func (s *ModifySiteMonitorResponse) SetData(v *ModifySiteMonitorResponseData) *ModifySiteMonitorResponse {
	s.Data = v
	return s
}

type ModifySiteMonitorResponseData struct {
	Count *int `json:"count" xml:"count" require:"true"`
}

func (s ModifySiteMonitorResponseData) String() string {
	return tea.Prettify(s)
}

func (s ModifySiteMonitorResponseData) GoString() string {
	return s.String()
}

func (s *ModifySiteMonitorResponseData) SetCount(v int) *ModifySiteMonitorResponseData {
	s.Count = &v
	return s
}

type DescribeSiteMonitorISPCityListRequest struct {
	Isp  *string `json:"Isp" xml:"Isp"`
	City *string `json:"City" xml:"City"`
}

func (s DescribeSiteMonitorISPCityListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorISPCityListRequest) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorISPCityListRequest) SetIsp(v string) *DescribeSiteMonitorISPCityListRequest {
	s.Isp = &v
	return s
}

func (s *DescribeSiteMonitorISPCityListRequest) SetCity(v string) *DescribeSiteMonitorISPCityListRequest {
	s.City = &v
	return s
}

type DescribeSiteMonitorISPCityListResponse struct {
	Code        *string                                            `json:"Code" xml:"Code" require:"true"`
	Message     *string                                            `json:"Message" xml:"Message" require:"true"`
	Success     *string                                            `json:"Success" xml:"Success" require:"true"`
	RequestId   *string                                            `json:"RequestId" xml:"RequestId" require:"true"`
	IspCityList *DescribeSiteMonitorISPCityListResponseIspCityList `json:"IspCityList" xml:"IspCityList" require:"true" type:"Struct"`
}

func (s DescribeSiteMonitorISPCityListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorISPCityListResponse) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorISPCityListResponse) SetCode(v string) *DescribeSiteMonitorISPCityListResponse {
	s.Code = &v
	return s
}

func (s *DescribeSiteMonitorISPCityListResponse) SetMessage(v string) *DescribeSiteMonitorISPCityListResponse {
	s.Message = &v
	return s
}

func (s *DescribeSiteMonitorISPCityListResponse) SetSuccess(v string) *DescribeSiteMonitorISPCityListResponse {
	s.Success = &v
	return s
}

func (s *DescribeSiteMonitorISPCityListResponse) SetRequestId(v string) *DescribeSiteMonitorISPCityListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSiteMonitorISPCityListResponse) SetIspCityList(v *DescribeSiteMonitorISPCityListResponseIspCityList) *DescribeSiteMonitorISPCityListResponse {
	s.IspCityList = v
	return s
}

type DescribeSiteMonitorISPCityListResponseIspCityList struct {
	IspCity []*DescribeSiteMonitorISPCityListResponseIspCityListIspCity `json:"IspCity" xml:"IspCity" require:"true" type:"Repeated"`
}

func (s DescribeSiteMonitorISPCityListResponseIspCityList) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorISPCityListResponseIspCityList) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorISPCityListResponseIspCityList) SetIspCity(v []*DescribeSiteMonitorISPCityListResponseIspCityListIspCity) *DescribeSiteMonitorISPCityListResponseIspCityList {
	s.IspCity = v
	return s
}

type DescribeSiteMonitorISPCityListResponseIspCityListIspCity struct {
	Isp      *string                                                           `json:"Isp" xml:"Isp" require:"true"`
	City     *string                                                           `json:"City" xml:"City" require:"true"`
	Region   *string                                                           `json:"Region" xml:"Region" require:"true"`
	Country  *string                                                           `json:"Country" xml:"Country" require:"true"`
	IspName  *DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName  `json:"IspName" xml:"IspName" require:"true" type:"Struct"`
	CityName *DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName `json:"CityName" xml:"CityName" require:"true" type:"Struct"`
}

func (s DescribeSiteMonitorISPCityListResponseIspCityListIspCity) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorISPCityListResponseIspCityListIspCity) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorISPCityListResponseIspCityListIspCity) SetIsp(v string) *DescribeSiteMonitorISPCityListResponseIspCityListIspCity {
	s.Isp = &v
	return s
}

func (s *DescribeSiteMonitorISPCityListResponseIspCityListIspCity) SetCity(v string) *DescribeSiteMonitorISPCityListResponseIspCityListIspCity {
	s.City = &v
	return s
}

func (s *DescribeSiteMonitorISPCityListResponseIspCityListIspCity) SetRegion(v string) *DescribeSiteMonitorISPCityListResponseIspCityListIspCity {
	s.Region = &v
	return s
}

func (s *DescribeSiteMonitorISPCityListResponseIspCityListIspCity) SetCountry(v string) *DescribeSiteMonitorISPCityListResponseIspCityListIspCity {
	s.Country = &v
	return s
}

func (s *DescribeSiteMonitorISPCityListResponseIspCityListIspCity) SetIspName(v *DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName) *DescribeSiteMonitorISPCityListResponseIspCityListIspCity {
	s.IspName = v
	return s
}

func (s *DescribeSiteMonitorISPCityListResponseIspCityListIspCity) SetCityName(v *DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName) *DescribeSiteMonitorISPCityListResponseIspCityListIspCity {
	s.CityName = v
	return s
}

type DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName struct {
	En   *string `json:"en" xml:"en" require:"true"`
	ZhCN *string `json:"zh_CN" xml:"zh_CN" require:"true"`
}

func (s DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName) SetEn(v string) *DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName {
	s.En = &v
	return s
}

func (s *DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName) SetZhCN(v string) *DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName {
	s.ZhCN = &v
	return s
}

type DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName struct {
	En   *string `json:"en" xml:"en" require:"true"`
	ZhCN *string `json:"zh_CN" xml:"zh_CN" require:"true"`
}

func (s DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName) SetEn(v string) *DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName {
	s.En = &v
	return s
}

func (s *DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName) SetZhCN(v string) *DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName {
	s.ZhCN = &v
	return s
}

type DescribeSiteMonitorQuotaRequest struct {
}

func (s DescribeSiteMonitorQuotaRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorQuotaRequest) GoString() string {
	return s.String()
}

type DescribeSiteMonitorQuotaResponse struct {
	Code      *string                               `json:"Code" xml:"Code" require:"true"`
	Message   *string                               `json:"Message" xml:"Message" require:"true"`
	Success   *string                               `json:"Success" xml:"Success" require:"true"`
	RequestId *string                               `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DescribeSiteMonitorQuotaResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s DescribeSiteMonitorQuotaResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorQuotaResponse) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorQuotaResponse) SetCode(v string) *DescribeSiteMonitorQuotaResponse {
	s.Code = &v
	return s
}

func (s *DescribeSiteMonitorQuotaResponse) SetMessage(v string) *DescribeSiteMonitorQuotaResponse {
	s.Message = &v
	return s
}

func (s *DescribeSiteMonitorQuotaResponse) SetSuccess(v string) *DescribeSiteMonitorQuotaResponse {
	s.Success = &v
	return s
}

func (s *DescribeSiteMonitorQuotaResponse) SetRequestId(v string) *DescribeSiteMonitorQuotaResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSiteMonitorQuotaResponse) SetData(v *DescribeSiteMonitorQuotaResponseData) *DescribeSiteMonitorQuotaResponse {
	s.Data = v
	return s
}

type DescribeSiteMonitorQuotaResponseData struct {
	SiteMonitorIdcQuota           *int    `json:"SiteMonitorIdcQuota" xml:"SiteMonitorIdcQuota" require:"true"`
	SiteMonitorOperatorQuotaQuota *int    `json:"SiteMonitorOperatorQuotaQuota" xml:"SiteMonitorOperatorQuotaQuota" require:"true"`
	SiteMonitorTaskQuota          *int    `json:"SiteMonitorTaskQuota" xml:"SiteMonitorTaskQuota" require:"true"`
	SiteMonitorQuotaTaskUsed      *int    `json:"SiteMonitorQuotaTaskUsed" xml:"SiteMonitorQuotaTaskUsed" require:"true"`
	SiteMonitorVersion            *string `json:"SiteMonitorVersion" xml:"SiteMonitorVersion" require:"true"`
}

func (s DescribeSiteMonitorQuotaResponseData) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorQuotaResponseData) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorQuotaResponseData) SetSiteMonitorIdcQuota(v int) *DescribeSiteMonitorQuotaResponseData {
	s.SiteMonitorIdcQuota = &v
	return s
}

func (s *DescribeSiteMonitorQuotaResponseData) SetSiteMonitorOperatorQuotaQuota(v int) *DescribeSiteMonitorQuotaResponseData {
	s.SiteMonitorOperatorQuotaQuota = &v
	return s
}

func (s *DescribeSiteMonitorQuotaResponseData) SetSiteMonitorTaskQuota(v int) *DescribeSiteMonitorQuotaResponseData {
	s.SiteMonitorTaskQuota = &v
	return s
}

func (s *DescribeSiteMonitorQuotaResponseData) SetSiteMonitorQuotaTaskUsed(v int) *DescribeSiteMonitorQuotaResponseData {
	s.SiteMonitorQuotaTaskUsed = &v
	return s
}

func (s *DescribeSiteMonitorQuotaResponseData) SetSiteMonitorVersion(v string) *DescribeSiteMonitorQuotaResponseData {
	s.SiteMonitorVersion = &v
	return s
}

type DescribeSiteMonitorStatisticsRequest struct {
	TaskId     *string `json:"TaskId" xml:"TaskId" require:"true"`
	TimeRange  *string `json:"TimeRange" xml:"TimeRange"`
	StartTime  *string `json:"StartTime" xml:"StartTime"`
	MetricName *string `json:"MetricName" xml:"MetricName" require:"true"`
}

func (s DescribeSiteMonitorStatisticsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorStatisticsRequest) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorStatisticsRequest) SetTaskId(v string) *DescribeSiteMonitorStatisticsRequest {
	s.TaskId = &v
	return s
}

func (s *DescribeSiteMonitorStatisticsRequest) SetTimeRange(v string) *DescribeSiteMonitorStatisticsRequest {
	s.TimeRange = &v
	return s
}

func (s *DescribeSiteMonitorStatisticsRequest) SetStartTime(v string) *DescribeSiteMonitorStatisticsRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeSiteMonitorStatisticsRequest) SetMetricName(v string) *DescribeSiteMonitorStatisticsRequest {
	s.MetricName = &v
	return s
}

type DescribeSiteMonitorStatisticsResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *string `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
}

func (s DescribeSiteMonitorStatisticsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorStatisticsResponse) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorStatisticsResponse) SetCode(v string) *DescribeSiteMonitorStatisticsResponse {
	s.Code = &v
	return s
}

func (s *DescribeSiteMonitorStatisticsResponse) SetMessage(v string) *DescribeSiteMonitorStatisticsResponse {
	s.Message = &v
	return s
}

func (s *DescribeSiteMonitorStatisticsResponse) SetSuccess(v string) *DescribeSiteMonitorStatisticsResponse {
	s.Success = &v
	return s
}

func (s *DescribeSiteMonitorStatisticsResponse) SetRequestId(v string) *DescribeSiteMonitorStatisticsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSiteMonitorStatisticsResponse) SetData(v string) *DescribeSiteMonitorStatisticsResponse {
	s.Data = &v
	return s
}

type EnableSiteMonitorsRequest struct {
	TaskIds *string `json:"TaskIds" xml:"TaskIds" require:"true"`
}

func (s EnableSiteMonitorsRequest) String() string {
	return tea.Prettify(s)
}

func (s EnableSiteMonitorsRequest) GoString() string {
	return s.String()
}

func (s *EnableSiteMonitorsRequest) SetTaskIds(v string) *EnableSiteMonitorsRequest {
	s.TaskIds = &v
	return s
}

type EnableSiteMonitorsResponse struct {
	Code      *string                         `json:"Code" xml:"Code" require:"true"`
	Message   *string                         `json:"Message" xml:"Message" require:"true"`
	Success   *string                         `json:"Success" xml:"Success" require:"true"`
	RequestId *string                         `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *EnableSiteMonitorsResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s EnableSiteMonitorsResponse) String() string {
	return tea.Prettify(s)
}

func (s EnableSiteMonitorsResponse) GoString() string {
	return s.String()
}

func (s *EnableSiteMonitorsResponse) SetCode(v string) *EnableSiteMonitorsResponse {
	s.Code = &v
	return s
}

func (s *EnableSiteMonitorsResponse) SetMessage(v string) *EnableSiteMonitorsResponse {
	s.Message = &v
	return s
}

func (s *EnableSiteMonitorsResponse) SetSuccess(v string) *EnableSiteMonitorsResponse {
	s.Success = &v
	return s
}

func (s *EnableSiteMonitorsResponse) SetRequestId(v string) *EnableSiteMonitorsResponse {
	s.RequestId = &v
	return s
}

func (s *EnableSiteMonitorsResponse) SetData(v *EnableSiteMonitorsResponseData) *EnableSiteMonitorsResponse {
	s.Data = v
	return s
}

type EnableSiteMonitorsResponseData struct {
	Count *int `json:"count" xml:"count" require:"true"`
}

func (s EnableSiteMonitorsResponseData) String() string {
	return tea.Prettify(s)
}

func (s EnableSiteMonitorsResponseData) GoString() string {
	return s.String()
}

func (s *EnableSiteMonitorsResponseData) SetCount(v int) *EnableSiteMonitorsResponseData {
	s.Count = &v
	return s
}

type DescribeSiteMonitorAttributeRequest struct {
	TaskId       *string `json:"TaskId" xml:"TaskId" require:"true"`
	IncludeAlert *bool   `json:"IncludeAlert" xml:"IncludeAlert"`
}

func (s DescribeSiteMonitorAttributeRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorAttributeRequest) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorAttributeRequest) SetTaskId(v string) *DescribeSiteMonitorAttributeRequest {
	s.TaskId = &v
	return s
}

func (s *DescribeSiteMonitorAttributeRequest) SetIncludeAlert(v bool) *DescribeSiteMonitorAttributeRequest {
	s.IncludeAlert = &v
	return s
}

type DescribeSiteMonitorAttributeResponse struct {
	Code         *string                                           `json:"Code" xml:"Code" require:"true"`
	Message      *string                                           `json:"Message" xml:"Message" require:"true"`
	Success      *bool                                             `json:"Success" xml:"Success" require:"true"`
	RequestId    *string                                           `json:"RequestId" xml:"RequestId" require:"true"`
	MetricRules  *DescribeSiteMonitorAttributeResponseMetricRules  `json:"MetricRules" xml:"MetricRules" require:"true" type:"Struct"`
	SiteMonitors *DescribeSiteMonitorAttributeResponseSiteMonitors `json:"SiteMonitors" xml:"SiteMonitors" require:"true" type:"Struct"`
}

func (s DescribeSiteMonitorAttributeResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorAttributeResponse) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorAttributeResponse) SetCode(v string) *DescribeSiteMonitorAttributeResponse {
	s.Code = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponse) SetMessage(v string) *DescribeSiteMonitorAttributeResponse {
	s.Message = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponse) SetSuccess(v bool) *DescribeSiteMonitorAttributeResponse {
	s.Success = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponse) SetRequestId(v string) *DescribeSiteMonitorAttributeResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponse) SetMetricRules(v *DescribeSiteMonitorAttributeResponseMetricRules) *DescribeSiteMonitorAttributeResponse {
	s.MetricRules = v
	return s
}

func (s *DescribeSiteMonitorAttributeResponse) SetSiteMonitors(v *DescribeSiteMonitorAttributeResponseSiteMonitors) *DescribeSiteMonitorAttributeResponse {
	s.SiteMonitors = v
	return s
}

type DescribeSiteMonitorAttributeResponseMetricRules struct {
	MetricRule []*DescribeSiteMonitorAttributeResponseMetricRulesMetricRule `json:"MetricRule" xml:"MetricRule" require:"true" type:"Repeated"`
}

func (s DescribeSiteMonitorAttributeResponseMetricRules) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorAttributeResponseMetricRules) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorAttributeResponseMetricRules) SetMetricRule(v []*DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) *DescribeSiteMonitorAttributeResponseMetricRules {
	s.MetricRule = v
	return s
}

type DescribeSiteMonitorAttributeResponseMetricRulesMetricRule struct {
	RuleId             *string `json:"RuleId" xml:"RuleId" require:"true"`
	RuleName           *string `json:"RuleName" xml:"RuleName" require:"true"`
	Namespace          *string `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName         *string `json:"MetricName" xml:"MetricName" require:"true"`
	OkActions          *string `json:"OkActions" xml:"OkActions" require:"true"`
	AlarmActions       *string `json:"AlarmActions" xml:"AlarmActions" require:"true"`
	Statistics         *string `json:"Statistics" xml:"Statistics" require:"true"`
	ActionEnable       *string `json:"ActionEnable" xml:"ActionEnable" require:"true"`
	Period             *string `json:"Period" xml:"Period" require:"true"`
	ComparisonOperator *string `json:"ComparisonOperator" xml:"ComparisonOperator" require:"true"`
	Threshold          *string `json:"Threshold" xml:"Threshold" require:"true"`
	EvaluationCount    *string `json:"EvaluationCount" xml:"EvaluationCount" require:"true"`
	Level              *string `json:"Level" xml:"Level" require:"true"`
	Expression         *string `json:"Expression" xml:"Expression" require:"true"`
	StateValue         *string `json:"StateValue" xml:"StateValue" require:"true"`
	Dimensions         *string `json:"Dimensions" xml:"Dimensions" require:"true"`
}

func (s DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetRuleId(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.RuleId = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetRuleName(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.RuleName = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetNamespace(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.Namespace = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetMetricName(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.MetricName = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetOkActions(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.OkActions = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetAlarmActions(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.AlarmActions = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetStatistics(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.Statistics = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetActionEnable(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.ActionEnable = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetPeriod(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.Period = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetComparisonOperator(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.ComparisonOperator = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetThreshold(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.Threshold = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetEvaluationCount(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.EvaluationCount = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetLevel(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.Level = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetExpression(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.Expression = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetStateValue(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.StateValue = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule) SetDimensions(v string) *DescribeSiteMonitorAttributeResponseMetricRulesMetricRule {
	s.Dimensions = &v
	return s
}

type DescribeSiteMonitorAttributeResponseSiteMonitors struct {
	TaskType   *string                                                     `json:"TaskType" xml:"TaskType" require:"true"`
	Address    *string                                                     `json:"Address" xml:"Address" require:"true"`
	TaskState  *string                                                     `json:"TaskState" xml:"TaskState" require:"true"`
	TaskName   *string                                                     `json:"TaskName" xml:"TaskName" require:"true"`
	Interval   *string                                                     `json:"Interval" xml:"Interval" require:"true"`
	TaskId     *string                                                     `json:"TaskId" xml:"TaskId" require:"true"`
	IspCities  *DescribeSiteMonitorAttributeResponseSiteMonitorsIspCities  `json:"IspCities" xml:"IspCities" require:"true" type:"Struct"`
	OptionJson *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson `json:"OptionJson" xml:"OptionJson" require:"true" type:"Struct"`
}

func (s DescribeSiteMonitorAttributeResponseSiteMonitors) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorAttributeResponseSiteMonitors) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitors) SetTaskType(v string) *DescribeSiteMonitorAttributeResponseSiteMonitors {
	s.TaskType = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitors) SetAddress(v string) *DescribeSiteMonitorAttributeResponseSiteMonitors {
	s.Address = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitors) SetTaskState(v string) *DescribeSiteMonitorAttributeResponseSiteMonitors {
	s.TaskState = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitors) SetTaskName(v string) *DescribeSiteMonitorAttributeResponseSiteMonitors {
	s.TaskName = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitors) SetInterval(v string) *DescribeSiteMonitorAttributeResponseSiteMonitors {
	s.Interval = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitors) SetTaskId(v string) *DescribeSiteMonitorAttributeResponseSiteMonitors {
	s.TaskId = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitors) SetIspCities(v *DescribeSiteMonitorAttributeResponseSiteMonitorsIspCities) *DescribeSiteMonitorAttributeResponseSiteMonitors {
	s.IspCities = v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitors) SetOptionJson(v *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) *DescribeSiteMonitorAttributeResponseSiteMonitors {
	s.OptionJson = v
	return s
}

type DescribeSiteMonitorAttributeResponseSiteMonitorsIspCities struct {
	IspCity []*DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity `json:"IspCity" xml:"IspCity" require:"true" type:"Repeated"`
}

func (s DescribeSiteMonitorAttributeResponseSiteMonitorsIspCities) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorAttributeResponseSiteMonitorsIspCities) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsIspCities) SetIspCity(v []*DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity) *DescribeSiteMonitorAttributeResponseSiteMonitorsIspCities {
	s.IspCity = v
	return s
}

type DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity struct {
	CityName *string `json:"CityName" xml:"CityName" require:"true"`
	IspName  *string `json:"IspName" xml:"IspName" require:"true"`
	City     *string `json:"City" xml:"City" require:"true"`
	Isp      *string `json:"Isp" xml:"Isp" require:"true"`
}

func (s DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity) SetCityName(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity {
	s.CityName = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity) SetIspName(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity {
	s.IspName = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity) SetCity(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity {
	s.City = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity) SetIsp(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity {
	s.Isp = &v
	return s
}

type DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson struct {
	DnsType         *string  `json:"dns_type" xml:"dns_type" require:"true"`
	DnsServer       *string  `json:"dns_server" xml:"dns_server" require:"true"`
	ExpectValue     *string  `json:"expect_value" xml:"expect_value" require:"true"`
	HttpMethod      *string  `json:"http_method" xml:"http_method" require:"true"`
	ResponseContent *string  `json:"response_content" xml:"response_content" require:"true"`
	MatchRule       *int     `json:"match_rule" xml:"match_rule" require:"true"`
	RequestContent  *string  `json:"request_content" xml:"request_content" require:"true"`
	Cookie          *string  `json:"cookie" xml:"cookie" require:"true"`
	Header          *string  `json:"header" xml:"header" require:"true"`
	Username        *string  `json:"username" xml:"username" require:"true"`
	Password        *string  `json:"password" xml:"password" require:"true"`
	TimeOut         *int64   `json:"time_out" xml:"time_out" require:"true"`
	PingNum         *int     `json:"ping_num" xml:"ping_num" require:"true"`
	FailureRate     *float32 `json:"failure_rate" xml:"failure_rate" require:"true"`
	RequestFormat   *string  `json:"request_format" xml:"request_format" require:"true"`
	ResponseFormat  *string  `json:"response_format" xml:"response_format" require:"true"`
	Port            *int     `json:"port" xml:"port" require:"true"`
	Authentication  *int     `json:"authentication" xml:"authentication" require:"true"`
	Traceroute      *int64   `json:"traceroute" xml:"traceroute" require:"true"`
}

func (s DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetDnsType(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.DnsType = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetDnsServer(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.DnsServer = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetExpectValue(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.ExpectValue = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetHttpMethod(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.HttpMethod = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetResponseContent(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.ResponseContent = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetMatchRule(v int) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.MatchRule = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetRequestContent(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.RequestContent = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetCookie(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.Cookie = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetHeader(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.Header = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetUsername(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.Username = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetPassword(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.Password = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetTimeOut(v int64) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.TimeOut = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetPingNum(v int) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.PingNum = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetFailureRate(v float32) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.FailureRate = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetRequestFormat(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.RequestFormat = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetResponseFormat(v string) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.ResponseFormat = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetPort(v int) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.Port = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetAuthentication(v int) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.Authentication = &v
	return s
}

func (s *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson) SetTraceroute(v int64) *DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson {
	s.Traceroute = &v
	return s
}

type DescribeSiteMonitorListRequest struct {
	TaskId   *string `json:"TaskId" xml:"TaskId"`
	TaskType *string `json:"TaskType" xml:"TaskType"`
	Keyword  *string `json:"Keyword" xml:"Keyword"`
	Page     *int    `json:"Page" xml:"Page"`
	PageSize *int    `json:"PageSize" xml:"PageSize"`
}

func (s DescribeSiteMonitorListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorListRequest) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorListRequest) SetTaskId(v string) *DescribeSiteMonitorListRequest {
	s.TaskId = &v
	return s
}

func (s *DescribeSiteMonitorListRequest) SetTaskType(v string) *DescribeSiteMonitorListRequest {
	s.TaskType = &v
	return s
}

func (s *DescribeSiteMonitorListRequest) SetKeyword(v string) *DescribeSiteMonitorListRequest {
	s.Keyword = &v
	return s
}

func (s *DescribeSiteMonitorListRequest) SetPage(v int) *DescribeSiteMonitorListRequest {
	s.Page = &v
	return s
}

func (s *DescribeSiteMonitorListRequest) SetPageSize(v int) *DescribeSiteMonitorListRequest {
	s.PageSize = &v
	return s
}

type DescribeSiteMonitorListResponse struct {
	Code         *string                                      `json:"Code" xml:"Code" require:"true"`
	Message      *string                                      `json:"Message" xml:"Message" require:"true"`
	Success      *string                                      `json:"Success" xml:"Success" require:"true"`
	RequestId    *string                                      `json:"RequestId" xml:"RequestId" require:"true"`
	PageNumber   *int                                         `json:"PageNumber" xml:"PageNumber" require:"true"`
	PageSize     *int                                         `json:"PageSize" xml:"PageSize" require:"true"`
	TotalCount   *int                                         `json:"TotalCount" xml:"TotalCount" require:"true"`
	SiteMonitors *DescribeSiteMonitorListResponseSiteMonitors `json:"SiteMonitors" xml:"SiteMonitors" require:"true" type:"Struct"`
}

func (s DescribeSiteMonitorListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorListResponse) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorListResponse) SetCode(v string) *DescribeSiteMonitorListResponse {
	s.Code = &v
	return s
}

func (s *DescribeSiteMonitorListResponse) SetMessage(v string) *DescribeSiteMonitorListResponse {
	s.Message = &v
	return s
}

func (s *DescribeSiteMonitorListResponse) SetSuccess(v string) *DescribeSiteMonitorListResponse {
	s.Success = &v
	return s
}

func (s *DescribeSiteMonitorListResponse) SetRequestId(v string) *DescribeSiteMonitorListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSiteMonitorListResponse) SetPageNumber(v int) *DescribeSiteMonitorListResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeSiteMonitorListResponse) SetPageSize(v int) *DescribeSiteMonitorListResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeSiteMonitorListResponse) SetTotalCount(v int) *DescribeSiteMonitorListResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeSiteMonitorListResponse) SetSiteMonitors(v *DescribeSiteMonitorListResponseSiteMonitors) *DescribeSiteMonitorListResponse {
	s.SiteMonitors = v
	return s
}

type DescribeSiteMonitorListResponseSiteMonitors struct {
	SiteMonitor []*DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor `json:"SiteMonitor" xml:"SiteMonitor" require:"true" type:"Repeated"`
}

func (s DescribeSiteMonitorListResponseSiteMonitors) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorListResponseSiteMonitors) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorListResponseSiteMonitors) SetSiteMonitor(v []*DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor) *DescribeSiteMonitorListResponseSiteMonitors {
	s.SiteMonitor = v
	return s
}

type DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor struct {
	TaskId      *string                                                            `json:"TaskId" xml:"TaskId" require:"true"`
	TaskType    *string                                                            `json:"TaskType" xml:"TaskType" require:"true"`
	Address     *string                                                            `json:"Address" xml:"Address" require:"true"`
	TaskState   *string                                                            `json:"TaskState" xml:"TaskState" require:"true"`
	CreateTime  *string                                                            `json:"CreateTime" xml:"CreateTime" require:"true"`
	TaskName    *string                                                            `json:"TaskName" xml:"TaskName" require:"true"`
	Interval    *string                                                            `json:"Interval" xml:"Interval" require:"true"`
	UpdateTime  *string                                                            `json:"UpdateTime" xml:"UpdateTime" require:"true"`
	OptionsJson *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson `json:"OptionsJson" xml:"OptionsJson" require:"true" type:"Struct"`
}

func (s DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor) SetTaskId(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor {
	s.TaskId = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor) SetTaskType(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor {
	s.TaskType = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor) SetAddress(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor {
	s.Address = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor) SetTaskState(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor {
	s.TaskState = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor) SetCreateTime(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor {
	s.CreateTime = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor) SetTaskName(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor {
	s.TaskName = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor) SetInterval(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor {
	s.Interval = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor) SetUpdateTime(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor {
	s.UpdateTime = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor) SetOptionsJson(v *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor {
	s.OptionsJson = v
	return s
}

type DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson struct {
	DnsType         *string  `json:"dns_type" xml:"dns_type" require:"true"`
	DnsServer       *string  `json:"dns_server" xml:"dns_server" require:"true"`
	ExpectValue     *string  `json:"expect_value" xml:"expect_value" require:"true"`
	HttpMethod      *string  `json:"http_method" xml:"http_method" require:"true"`
	ResponseContent *string  `json:"response_content" xml:"response_content" require:"true"`
	MatchRule       *int     `json:"match_rule" xml:"match_rule" require:"true"`
	RequestContent  *string  `json:"request_content" xml:"request_content" require:"true"`
	Cookie          *string  `json:"cookie" xml:"cookie" require:"true"`
	Header          *string  `json:"header" xml:"header" require:"true"`
	Username        *string  `json:"username" xml:"username" require:"true"`
	Password        *string  `json:"password" xml:"password" require:"true"`
	TimeOut         *int64   `json:"time_out" xml:"time_out" require:"true"`
	PingNum         *int     `json:"ping_num" xml:"ping_num" require:"true"`
	FailureRate     *float32 `json:"failure_rate" xml:"failure_rate" require:"true"`
	RequestFormat   *string  `json:"request_format" xml:"request_format" require:"true"`
	ResponseFormat  *string  `json:"response_format" xml:"response_format" require:"true"`
	Port            *int     `json:"port" xml:"port" require:"true"`
	Authentication  *int     `json:"authentication" xml:"authentication" require:"true"`
	Traceroute      *int64   `json:"traceroute" xml:"traceroute" require:"true"`
}

func (s DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) String() string {
	return tea.Prettify(s)
}

func (s DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) GoString() string {
	return s.String()
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetDnsType(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.DnsType = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetDnsServer(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.DnsServer = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetExpectValue(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.ExpectValue = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetHttpMethod(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.HttpMethod = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetResponseContent(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.ResponseContent = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetMatchRule(v int) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.MatchRule = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetRequestContent(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.RequestContent = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetCookie(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.Cookie = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetHeader(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.Header = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetUsername(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.Username = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetPassword(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.Password = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetTimeOut(v int64) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.TimeOut = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetPingNum(v int) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.PingNum = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetFailureRate(v float32) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.FailureRate = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetRequestFormat(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.RequestFormat = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetResponseFormat(v string) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.ResponseFormat = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetPort(v int) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.Port = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetAuthentication(v int) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.Authentication = &v
	return s
}

func (s *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson) SetTraceroute(v int64) *DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson {
	s.Traceroute = &v
	return s
}

type DeleteSiteMonitorsRequest struct {
	TaskIds        *string `json:"TaskIds" xml:"TaskIds" require:"true"`
	IsDeleteAlarms *bool   `json:"IsDeleteAlarms" xml:"IsDeleteAlarms"`
}

func (s DeleteSiteMonitorsRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteSiteMonitorsRequest) GoString() string {
	return s.String()
}

func (s *DeleteSiteMonitorsRequest) SetTaskIds(v string) *DeleteSiteMonitorsRequest {
	s.TaskIds = &v
	return s
}

func (s *DeleteSiteMonitorsRequest) SetIsDeleteAlarms(v bool) *DeleteSiteMonitorsRequest {
	s.IsDeleteAlarms = &v
	return s
}

type DeleteSiteMonitorsResponse struct {
	Code      *string                         `json:"Code" xml:"Code" require:"true"`
	Message   *string                         `json:"Message" xml:"Message" require:"true"`
	Success   *string                         `json:"Success" xml:"Success" require:"true"`
	RequestId *string                         `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DeleteSiteMonitorsResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s DeleteSiteMonitorsResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteSiteMonitorsResponse) GoString() string {
	return s.String()
}

func (s *DeleteSiteMonitorsResponse) SetCode(v string) *DeleteSiteMonitorsResponse {
	s.Code = &v
	return s
}

func (s *DeleteSiteMonitorsResponse) SetMessage(v string) *DeleteSiteMonitorsResponse {
	s.Message = &v
	return s
}

func (s *DeleteSiteMonitorsResponse) SetSuccess(v string) *DeleteSiteMonitorsResponse {
	s.Success = &v
	return s
}

func (s *DeleteSiteMonitorsResponse) SetRequestId(v string) *DeleteSiteMonitorsResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteSiteMonitorsResponse) SetData(v *DeleteSiteMonitorsResponseData) *DeleteSiteMonitorsResponse {
	s.Data = v
	return s
}

type DeleteSiteMonitorsResponseData struct {
	Count *int `json:"count" xml:"count" require:"true"`
}

func (s DeleteSiteMonitorsResponseData) String() string {
	return tea.Prettify(s)
}

func (s DeleteSiteMonitorsResponseData) GoString() string {
	return s.String()
}

func (s *DeleteSiteMonitorsResponseData) SetCount(v int) *DeleteSiteMonitorsResponseData {
	s.Count = &v
	return s
}

type DisableSiteMonitorsRequest struct {
	TaskIds *string `json:"TaskIds" xml:"TaskIds" require:"true"`
}

func (s DisableSiteMonitorsRequest) String() string {
	return tea.Prettify(s)
}

func (s DisableSiteMonitorsRequest) GoString() string {
	return s.String()
}

func (s *DisableSiteMonitorsRequest) SetTaskIds(v string) *DisableSiteMonitorsRequest {
	s.TaskIds = &v
	return s
}

type DisableSiteMonitorsResponse struct {
	Code      *string                          `json:"Code" xml:"Code" require:"true"`
	Message   *string                          `json:"Message" xml:"Message" require:"true"`
	Success   *string                          `json:"Success" xml:"Success" require:"true"`
	RequestId *string                          `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DisableSiteMonitorsResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s DisableSiteMonitorsResponse) String() string {
	return tea.Prettify(s)
}

func (s DisableSiteMonitorsResponse) GoString() string {
	return s.String()
}

func (s *DisableSiteMonitorsResponse) SetCode(v string) *DisableSiteMonitorsResponse {
	s.Code = &v
	return s
}

func (s *DisableSiteMonitorsResponse) SetMessage(v string) *DisableSiteMonitorsResponse {
	s.Message = &v
	return s
}

func (s *DisableSiteMonitorsResponse) SetSuccess(v string) *DisableSiteMonitorsResponse {
	s.Success = &v
	return s
}

func (s *DisableSiteMonitorsResponse) SetRequestId(v string) *DisableSiteMonitorsResponse {
	s.RequestId = &v
	return s
}

func (s *DisableSiteMonitorsResponse) SetData(v *DisableSiteMonitorsResponseData) *DisableSiteMonitorsResponse {
	s.Data = v
	return s
}

type DisableSiteMonitorsResponseData struct {
	Count *int `json:"count" xml:"count" require:"true"`
}

func (s DisableSiteMonitorsResponseData) String() string {
	return tea.Prettify(s)
}

func (s DisableSiteMonitorsResponseData) GoString() string {
	return s.String()
}

func (s *DisableSiteMonitorsResponseData) SetCount(v int) *DisableSiteMonitorsResponseData {
	s.Count = &v
	return s
}

type CreateSiteMonitorRequest struct {
	Address     *string `json:"Address" xml:"Address" require:"true"`
	TaskType    *string `json:"TaskType" xml:"TaskType" require:"true"`
	TaskName    *string `json:"TaskName" xml:"TaskName" require:"true"`
	Interval    *string `json:"Interval" xml:"Interval"`
	IspCities   *string `json:"IspCities" xml:"IspCities"`
	OptionsJson *string `json:"OptionsJson" xml:"OptionsJson"`
	AlertIds    *string `json:"AlertIds" xml:"AlertIds"`
}

func (s CreateSiteMonitorRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateSiteMonitorRequest) GoString() string {
	return s.String()
}

func (s *CreateSiteMonitorRequest) SetAddress(v string) *CreateSiteMonitorRequest {
	s.Address = &v
	return s
}

func (s *CreateSiteMonitorRequest) SetTaskType(v string) *CreateSiteMonitorRequest {
	s.TaskType = &v
	return s
}

func (s *CreateSiteMonitorRequest) SetTaskName(v string) *CreateSiteMonitorRequest {
	s.TaskName = &v
	return s
}

func (s *CreateSiteMonitorRequest) SetInterval(v string) *CreateSiteMonitorRequest {
	s.Interval = &v
	return s
}

func (s *CreateSiteMonitorRequest) SetIspCities(v string) *CreateSiteMonitorRequest {
	s.IspCities = &v
	return s
}

func (s *CreateSiteMonitorRequest) SetOptionsJson(v string) *CreateSiteMonitorRequest {
	s.OptionsJson = &v
	return s
}

func (s *CreateSiteMonitorRequest) SetAlertIds(v string) *CreateSiteMonitorRequest {
	s.AlertIds = &v
	return s
}

type CreateSiteMonitorResponse struct {
	Code      *string                        `json:"Code" xml:"Code" require:"true"`
	Message   *string                        `json:"Message" xml:"Message" require:"true"`
	Success   *string                        `json:"Success" xml:"Success" require:"true"`
	RequestId *string                        `json:"RequestId" xml:"RequestId" require:"true"`
	AlertRule *string                        `json:"AlertRule" xml:"AlertRule" require:"true"`
	Data      *CreateSiteMonitorResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s CreateSiteMonitorResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateSiteMonitorResponse) GoString() string {
	return s.String()
}

func (s *CreateSiteMonitorResponse) SetCode(v string) *CreateSiteMonitorResponse {
	s.Code = &v
	return s
}

func (s *CreateSiteMonitorResponse) SetMessage(v string) *CreateSiteMonitorResponse {
	s.Message = &v
	return s
}

func (s *CreateSiteMonitorResponse) SetSuccess(v string) *CreateSiteMonitorResponse {
	s.Success = &v
	return s
}

func (s *CreateSiteMonitorResponse) SetRequestId(v string) *CreateSiteMonitorResponse {
	s.RequestId = &v
	return s
}

func (s *CreateSiteMonitorResponse) SetAlertRule(v string) *CreateSiteMonitorResponse {
	s.AlertRule = &v
	return s
}

func (s *CreateSiteMonitorResponse) SetData(v *CreateSiteMonitorResponseData) *CreateSiteMonitorResponse {
	s.Data = v
	return s
}

type CreateSiteMonitorResponseData struct {
	AttachAlertResult *CreateSiteMonitorResponseDataAttachAlertResult `json:"AttachAlertResult" xml:"AttachAlertResult" require:"true" type:"Struct"`
}

func (s CreateSiteMonitorResponseData) String() string {
	return tea.Prettify(s)
}

func (s CreateSiteMonitorResponseData) GoString() string {
	return s.String()
}

func (s *CreateSiteMonitorResponseData) SetAttachAlertResult(v *CreateSiteMonitorResponseDataAttachAlertResult) *CreateSiteMonitorResponseData {
	s.AttachAlertResult = v
	return s
}

type CreateSiteMonitorResponseDataAttachAlertResult struct {
	Contact []*CreateSiteMonitorResponseDataAttachAlertResultContact `json:"Contact" xml:"Contact" require:"true" type:"Repeated"`
}

func (s CreateSiteMonitorResponseDataAttachAlertResult) String() string {
	return tea.Prettify(s)
}

func (s CreateSiteMonitorResponseDataAttachAlertResult) GoString() string {
	return s.String()
}

func (s *CreateSiteMonitorResponseDataAttachAlertResult) SetContact(v []*CreateSiteMonitorResponseDataAttachAlertResultContact) *CreateSiteMonitorResponseDataAttachAlertResult {
	s.Contact = v
	return s
}

type CreateSiteMonitorResponseDataAttachAlertResultContact struct {
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Success   *string `json:"Success" xml:"Success" require:"true"`
	RuleId    *string `json:"RuleId" xml:"RuleId" require:"true"`
}

func (s CreateSiteMonitorResponseDataAttachAlertResultContact) String() string {
	return tea.Prettify(s)
}

func (s CreateSiteMonitorResponseDataAttachAlertResultContact) GoString() string {
	return s.String()
}

func (s *CreateSiteMonitorResponseDataAttachAlertResultContact) SetMessage(v string) *CreateSiteMonitorResponseDataAttachAlertResultContact {
	s.Message = &v
	return s
}

func (s *CreateSiteMonitorResponseDataAttachAlertResultContact) SetRequestId(v string) *CreateSiteMonitorResponseDataAttachAlertResultContact {
	s.RequestId = &v
	return s
}

func (s *CreateSiteMonitorResponseDataAttachAlertResultContact) SetCode(v string) *CreateSiteMonitorResponseDataAttachAlertResultContact {
	s.Code = &v
	return s
}

func (s *CreateSiteMonitorResponseDataAttachAlertResultContact) SetSuccess(v string) *CreateSiteMonitorResponseDataAttachAlertResultContact {
	s.Success = &v
	return s
}

func (s *CreateSiteMonitorResponseDataAttachAlertResultContact) SetRuleId(v string) *CreateSiteMonitorResponseDataAttachAlertResultContact {
	s.RuleId = &v
	return s
}

type DescribeProjectMetaRequest struct {
	Labels     *string `json:"Labels" xml:"Labels"`
	PageNumber *int    `json:"PageNumber" xml:"PageNumber"`
	PageSize   *int    `json:"PageSize" xml:"PageSize"`
}

func (s DescribeProjectMetaRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeProjectMetaRequest) GoString() string {
	return s.String()
}

func (s *DescribeProjectMetaRequest) SetLabels(v string) *DescribeProjectMetaRequest {
	s.Labels = &v
	return s
}

func (s *DescribeProjectMetaRequest) SetPageNumber(v int) *DescribeProjectMetaRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeProjectMetaRequest) SetPageSize(v int) *DescribeProjectMetaRequest {
	s.PageSize = &v
	return s
}

type DescribeProjectMetaResponse struct {
	RequestId  *string                               `json:"RequestId" xml:"RequestId" require:"true"`
	Success    *bool                                 `json:"Success" xml:"Success" require:"true"`
	Code       *string                               `json:"Code" xml:"Code" require:"true"`
	Message    *string                               `json:"Message" xml:"Message" require:"true"`
	Total      *string                               `json:"Total" xml:"Total" require:"true"`
	PageNumber *string                               `json:"PageNumber" xml:"PageNumber" require:"true"`
	PageSize   *string                               `json:"PageSize" xml:"PageSize" require:"true"`
	Resources  *DescribeProjectMetaResponseResources `json:"Resources" xml:"Resources" require:"true" type:"Struct"`
}

func (s DescribeProjectMetaResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeProjectMetaResponse) GoString() string {
	return s.String()
}

func (s *DescribeProjectMetaResponse) SetRequestId(v string) *DescribeProjectMetaResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeProjectMetaResponse) SetSuccess(v bool) *DescribeProjectMetaResponse {
	s.Success = &v
	return s
}

func (s *DescribeProjectMetaResponse) SetCode(v string) *DescribeProjectMetaResponse {
	s.Code = &v
	return s
}

func (s *DescribeProjectMetaResponse) SetMessage(v string) *DescribeProjectMetaResponse {
	s.Message = &v
	return s
}

func (s *DescribeProjectMetaResponse) SetTotal(v string) *DescribeProjectMetaResponse {
	s.Total = &v
	return s
}

func (s *DescribeProjectMetaResponse) SetPageNumber(v string) *DescribeProjectMetaResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeProjectMetaResponse) SetPageSize(v string) *DescribeProjectMetaResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeProjectMetaResponse) SetResources(v *DescribeProjectMetaResponseResources) *DescribeProjectMetaResponse {
	s.Resources = v
	return s
}

type DescribeProjectMetaResponseResources struct {
	Resource []*DescribeProjectMetaResponseResourcesResource `json:"Resource" xml:"Resource" require:"true" type:"Repeated"`
}

func (s DescribeProjectMetaResponseResources) String() string {
	return tea.Prettify(s)
}

func (s DescribeProjectMetaResponseResources) GoString() string {
	return s.String()
}

func (s *DescribeProjectMetaResponseResources) SetResource(v []*DescribeProjectMetaResponseResourcesResource) *DescribeProjectMetaResponseResources {
	s.Resource = v
	return s
}

type DescribeProjectMetaResponseResourcesResource struct {
	Namespace   *string `json:"Namespace" xml:"Namespace" require:"true"`
	Description *string `json:"Description" xml:"Description" require:"true"`
	Labels      *string `json:"Labels" xml:"Labels" require:"true"`
}

func (s DescribeProjectMetaResponseResourcesResource) String() string {
	return tea.Prettify(s)
}

func (s DescribeProjectMetaResponseResourcesResource) GoString() string {
	return s.String()
}

func (s *DescribeProjectMetaResponseResourcesResource) SetNamespace(v string) *DescribeProjectMetaResponseResourcesResource {
	s.Namespace = &v
	return s
}

func (s *DescribeProjectMetaResponseResourcesResource) SetDescription(v string) *DescribeProjectMetaResponseResourcesResource {
	s.Description = &v
	return s
}

func (s *DescribeProjectMetaResponseResourcesResource) SetLabels(v string) *DescribeProjectMetaResponseResourcesResource {
	s.Labels = &v
	return s
}

type DescribeMetricListRequest struct {
	Namespace  *string `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName *string `json:"MetricName" xml:"MetricName" require:"true"`
	Period     *string `json:"Period" xml:"Period"`
	StartTime  *string `json:"StartTime" xml:"StartTime"`
	EndTime    *string `json:"EndTime" xml:"EndTime"`
	Dimensions *string `json:"Dimensions" xml:"Dimensions"`
	NextToken  *string `json:"NextToken" xml:"NextToken"`
	Length     *string `json:"Length" xml:"Length"`
	Express    *string `json:"Express" xml:"Express"`
}

func (s DescribeMetricListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricListRequest) GoString() string {
	return s.String()
}

func (s *DescribeMetricListRequest) SetNamespace(v string) *DescribeMetricListRequest {
	s.Namespace = &v
	return s
}

func (s *DescribeMetricListRequest) SetMetricName(v string) *DescribeMetricListRequest {
	s.MetricName = &v
	return s
}

func (s *DescribeMetricListRequest) SetPeriod(v string) *DescribeMetricListRequest {
	s.Period = &v
	return s
}

func (s *DescribeMetricListRequest) SetStartTime(v string) *DescribeMetricListRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeMetricListRequest) SetEndTime(v string) *DescribeMetricListRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeMetricListRequest) SetDimensions(v string) *DescribeMetricListRequest {
	s.Dimensions = &v
	return s
}

func (s *DescribeMetricListRequest) SetNextToken(v string) *DescribeMetricListRequest {
	s.NextToken = &v
	return s
}

func (s *DescribeMetricListRequest) SetLength(v string) *DescribeMetricListRequest {
	s.Length = &v
	return s
}

func (s *DescribeMetricListRequest) SetExpress(v string) *DescribeMetricListRequest {
	s.Express = &v
	return s
}

type DescribeMetricListResponse struct {
	Code       *string `json:"Code" xml:"Code" require:"true"`
	Message    *string `json:"Message" xml:"Message" require:"true"`
	RequestId  *string `json:"RequestId" xml:"RequestId" require:"true"`
	NextToken  *string `json:"NextToken" xml:"NextToken" require:"true"`
	Datapoints *string `json:"Datapoints" xml:"Datapoints" require:"true"`
	Period     *string `json:"Period" xml:"Period" require:"true"`
	Success    *bool   `json:"Success" xml:"Success" require:"true"`
}

func (s DescribeMetricListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricListResponse) GoString() string {
	return s.String()
}

func (s *DescribeMetricListResponse) SetCode(v string) *DescribeMetricListResponse {
	s.Code = &v
	return s
}

func (s *DescribeMetricListResponse) SetMessage(v string) *DescribeMetricListResponse {
	s.Message = &v
	return s
}

func (s *DescribeMetricListResponse) SetRequestId(v string) *DescribeMetricListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMetricListResponse) SetNextToken(v string) *DescribeMetricListResponse {
	s.NextToken = &v
	return s
}

func (s *DescribeMetricListResponse) SetDatapoints(v string) *DescribeMetricListResponse {
	s.Datapoints = &v
	return s
}

func (s *DescribeMetricListResponse) SetPeriod(v string) *DescribeMetricListResponse {
	s.Period = &v
	return s
}

func (s *DescribeMetricListResponse) SetSuccess(v bool) *DescribeMetricListResponse {
	s.Success = &v
	return s
}

type DescribeMetricMetaListRequest struct {
	Namespace  *string `json:"Namespace" xml:"Namespace"`
	Labels     *string `json:"Labels" xml:"Labels"`
	MetricName *string `json:"MetricName" xml:"MetricName"`
	PageNumber *int    `json:"PageNumber" xml:"PageNumber"`
	PageSize   *int    `json:"PageSize" xml:"PageSize"`
}

func (s DescribeMetricMetaListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricMetaListRequest) GoString() string {
	return s.String()
}

func (s *DescribeMetricMetaListRequest) SetNamespace(v string) *DescribeMetricMetaListRequest {
	s.Namespace = &v
	return s
}

func (s *DescribeMetricMetaListRequest) SetLabels(v string) *DescribeMetricMetaListRequest {
	s.Labels = &v
	return s
}

func (s *DescribeMetricMetaListRequest) SetMetricName(v string) *DescribeMetricMetaListRequest {
	s.MetricName = &v
	return s
}

func (s *DescribeMetricMetaListRequest) SetPageNumber(v int) *DescribeMetricMetaListRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeMetricMetaListRequest) SetPageSize(v int) *DescribeMetricMetaListRequest {
	s.PageSize = &v
	return s
}

type DescribeMetricMetaListResponse struct {
	RequestId  *string                                  `json:"RequestId" xml:"RequestId" require:"true"`
	Success    *bool                                    `json:"Success" xml:"Success" require:"true"`
	Code       *string                                  `json:"Code" xml:"Code" require:"true"`
	Message    *string                                  `json:"Message" xml:"Message" require:"true"`
	TotalCount *string                                  `json:"TotalCount" xml:"TotalCount" require:"true"`
	Resources  *DescribeMetricMetaListResponseResources `json:"Resources" xml:"Resources" require:"true" type:"Struct"`
}

func (s DescribeMetricMetaListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricMetaListResponse) GoString() string {
	return s.String()
}

func (s *DescribeMetricMetaListResponse) SetRequestId(v string) *DescribeMetricMetaListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMetricMetaListResponse) SetSuccess(v bool) *DescribeMetricMetaListResponse {
	s.Success = &v
	return s
}

func (s *DescribeMetricMetaListResponse) SetCode(v string) *DescribeMetricMetaListResponse {
	s.Code = &v
	return s
}

func (s *DescribeMetricMetaListResponse) SetMessage(v string) *DescribeMetricMetaListResponse {
	s.Message = &v
	return s
}

func (s *DescribeMetricMetaListResponse) SetTotalCount(v string) *DescribeMetricMetaListResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeMetricMetaListResponse) SetResources(v *DescribeMetricMetaListResponseResources) *DescribeMetricMetaListResponse {
	s.Resources = v
	return s
}

type DescribeMetricMetaListResponseResources struct {
	Resource []*DescribeMetricMetaListResponseResourcesResource `json:"Resource" xml:"Resource" require:"true" type:"Repeated"`
}

func (s DescribeMetricMetaListResponseResources) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricMetaListResponseResources) GoString() string {
	return s.String()
}

func (s *DescribeMetricMetaListResponseResources) SetResource(v []*DescribeMetricMetaListResponseResourcesResource) *DescribeMetricMetaListResponseResources {
	s.Resource = v
	return s
}

type DescribeMetricMetaListResponseResourcesResource struct {
	Namespace   *string `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName  *string `json:"MetricName" xml:"MetricName" require:"true"`
	Statistics  *string `json:"Statistics" xml:"Statistics" require:"true"`
	Unit        *string `json:"Unit" xml:"Unit" require:"true"`
	Description *string `json:"Description" xml:"Description" require:"true"`
	Dimensions  *string `json:"Dimensions" xml:"Dimensions" require:"true"`
	Periods     *string `json:"Periods" xml:"Periods" require:"true"`
	Labels      *string `json:"Labels" xml:"Labels" require:"true"`
}

func (s DescribeMetricMetaListResponseResourcesResource) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricMetaListResponseResourcesResource) GoString() string {
	return s.String()
}

func (s *DescribeMetricMetaListResponseResourcesResource) SetNamespace(v string) *DescribeMetricMetaListResponseResourcesResource {
	s.Namespace = &v
	return s
}

func (s *DescribeMetricMetaListResponseResourcesResource) SetMetricName(v string) *DescribeMetricMetaListResponseResourcesResource {
	s.MetricName = &v
	return s
}

func (s *DescribeMetricMetaListResponseResourcesResource) SetStatistics(v string) *DescribeMetricMetaListResponseResourcesResource {
	s.Statistics = &v
	return s
}

func (s *DescribeMetricMetaListResponseResourcesResource) SetUnit(v string) *DescribeMetricMetaListResponseResourcesResource {
	s.Unit = &v
	return s
}

func (s *DescribeMetricMetaListResponseResourcesResource) SetDescription(v string) *DescribeMetricMetaListResponseResourcesResource {
	s.Description = &v
	return s
}

func (s *DescribeMetricMetaListResponseResourcesResource) SetDimensions(v string) *DescribeMetricMetaListResponseResourcesResource {
	s.Dimensions = &v
	return s
}

func (s *DescribeMetricMetaListResponseResourcesResource) SetPeriods(v string) *DescribeMetricMetaListResponseResourcesResource {
	s.Periods = &v
	return s
}

func (s *DescribeMetricMetaListResponseResourcesResource) SetLabels(v string) *DescribeMetricMetaListResponseResourcesResource {
	s.Labels = &v
	return s
}

type DescribeMetricTopRequest struct {
	Period     *string `json:"Period" xml:"Period"`
	Namespace  *string `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName *string `json:"MetricName" xml:"MetricName" require:"true"`
	StartTime  *string `json:"StartTime" xml:"StartTime"`
	EndTime    *string `json:"EndTime" xml:"EndTime"`
	Dimensions *string `json:"Dimensions" xml:"Dimensions"`
	Orderby    *string `json:"Orderby" xml:"Orderby" require:"true"`
	OrderDesc  *string `json:"OrderDesc" xml:"OrderDesc"`
	Length     *string `json:"Length" xml:"Length"`
	Express    *string `json:"Express" xml:"Express"`
}

func (s DescribeMetricTopRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricTopRequest) GoString() string {
	return s.String()
}

func (s *DescribeMetricTopRequest) SetPeriod(v string) *DescribeMetricTopRequest {
	s.Period = &v
	return s
}

func (s *DescribeMetricTopRequest) SetNamespace(v string) *DescribeMetricTopRequest {
	s.Namespace = &v
	return s
}

func (s *DescribeMetricTopRequest) SetMetricName(v string) *DescribeMetricTopRequest {
	s.MetricName = &v
	return s
}

func (s *DescribeMetricTopRequest) SetStartTime(v string) *DescribeMetricTopRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeMetricTopRequest) SetEndTime(v string) *DescribeMetricTopRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeMetricTopRequest) SetDimensions(v string) *DescribeMetricTopRequest {
	s.Dimensions = &v
	return s
}

func (s *DescribeMetricTopRequest) SetOrderby(v string) *DescribeMetricTopRequest {
	s.Orderby = &v
	return s
}

func (s *DescribeMetricTopRequest) SetOrderDesc(v string) *DescribeMetricTopRequest {
	s.OrderDesc = &v
	return s
}

func (s *DescribeMetricTopRequest) SetLength(v string) *DescribeMetricTopRequest {
	s.Length = &v
	return s
}

func (s *DescribeMetricTopRequest) SetExpress(v string) *DescribeMetricTopRequest {
	s.Express = &v
	return s
}

type DescribeMetricTopResponse struct {
	Code       *string `json:"Code" xml:"Code" require:"true"`
	Message    *string `json:"Message" xml:"Message" require:"true"`
	RequestId  *string `json:"RequestId" xml:"RequestId" require:"true"`
	Datapoints *string `json:"Datapoints" xml:"Datapoints" require:"true"`
	Period     *string `json:"Period" xml:"Period" require:"true"`
}

func (s DescribeMetricTopResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricTopResponse) GoString() string {
	return s.String()
}

func (s *DescribeMetricTopResponse) SetCode(v string) *DescribeMetricTopResponse {
	s.Code = &v
	return s
}

func (s *DescribeMetricTopResponse) SetMessage(v string) *DescribeMetricTopResponse {
	s.Message = &v
	return s
}

func (s *DescribeMetricTopResponse) SetRequestId(v string) *DescribeMetricTopResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMetricTopResponse) SetDatapoints(v string) *DescribeMetricTopResponse {
	s.Datapoints = &v
	return s
}

func (s *DescribeMetricTopResponse) SetPeriod(v string) *DescribeMetricTopResponse {
	s.Period = &v
	return s
}

type DescribeMetricDataRequest struct {
	Namespace  *string `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName *string `json:"MetricName" xml:"MetricName" require:"true"`
	Period     *string `json:"Period" xml:"Period"`
	StartTime  *string `json:"StartTime" xml:"StartTime"`
	EndTime    *string `json:"EndTime" xml:"EndTime"`
	Dimensions *string `json:"Dimensions" xml:"Dimensions"`
	Express    *string `json:"Express" xml:"Express"`
	Length     *string `json:"Length" xml:"Length"`
}

func (s DescribeMetricDataRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricDataRequest) GoString() string {
	return s.String()
}

func (s *DescribeMetricDataRequest) SetNamespace(v string) *DescribeMetricDataRequest {
	s.Namespace = &v
	return s
}

func (s *DescribeMetricDataRequest) SetMetricName(v string) *DescribeMetricDataRequest {
	s.MetricName = &v
	return s
}

func (s *DescribeMetricDataRequest) SetPeriod(v string) *DescribeMetricDataRequest {
	s.Period = &v
	return s
}

func (s *DescribeMetricDataRequest) SetStartTime(v string) *DescribeMetricDataRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeMetricDataRequest) SetEndTime(v string) *DescribeMetricDataRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeMetricDataRequest) SetDimensions(v string) *DescribeMetricDataRequest {
	s.Dimensions = &v
	return s
}

func (s *DescribeMetricDataRequest) SetExpress(v string) *DescribeMetricDataRequest {
	s.Express = &v
	return s
}

func (s *DescribeMetricDataRequest) SetLength(v string) *DescribeMetricDataRequest {
	s.Length = &v
	return s
}

type DescribeMetricDataResponse struct {
	Code       *string `json:"Code" xml:"Code" require:"true"`
	Message    *string `json:"Message" xml:"Message" require:"true"`
	RequestId  *string `json:"RequestId" xml:"RequestId" require:"true"`
	Datapoints *string `json:"Datapoints" xml:"Datapoints" require:"true"`
	Period     *string `json:"Period" xml:"Period" require:"true"`
}

func (s DescribeMetricDataResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricDataResponse) GoString() string {
	return s.String()
}

func (s *DescribeMetricDataResponse) SetCode(v string) *DescribeMetricDataResponse {
	s.Code = &v
	return s
}

func (s *DescribeMetricDataResponse) SetMessage(v string) *DescribeMetricDataResponse {
	s.Message = &v
	return s
}

func (s *DescribeMetricDataResponse) SetRequestId(v string) *DescribeMetricDataResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMetricDataResponse) SetDatapoints(v string) *DescribeMetricDataResponse {
	s.Datapoints = &v
	return s
}

func (s *DescribeMetricDataResponse) SetPeriod(v string) *DescribeMetricDataResponse {
	s.Period = &v
	return s
}

type DescribeMetricLastRequest struct {
	Namespace  *string `json:"Namespace" xml:"Namespace" require:"true"`
	MetricName *string `json:"MetricName" xml:"MetricName" require:"true"`
	Period     *string `json:"Period" xml:"Period"`
	StartTime  *string `json:"StartTime" xml:"StartTime"`
	EndTime    *string `json:"EndTime" xml:"EndTime"`
	Dimensions *string `json:"Dimensions" xml:"Dimensions"`
	NextToken  *string `json:"NextToken" xml:"NextToken"`
	Length     *string `json:"Length" xml:"Length"`
	Express    *string `json:"Express" xml:"Express"`
}

func (s DescribeMetricLastRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricLastRequest) GoString() string {
	return s.String()
}

func (s *DescribeMetricLastRequest) SetNamespace(v string) *DescribeMetricLastRequest {
	s.Namespace = &v
	return s
}

func (s *DescribeMetricLastRequest) SetMetricName(v string) *DescribeMetricLastRequest {
	s.MetricName = &v
	return s
}

func (s *DescribeMetricLastRequest) SetPeriod(v string) *DescribeMetricLastRequest {
	s.Period = &v
	return s
}

func (s *DescribeMetricLastRequest) SetStartTime(v string) *DescribeMetricLastRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeMetricLastRequest) SetEndTime(v string) *DescribeMetricLastRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeMetricLastRequest) SetDimensions(v string) *DescribeMetricLastRequest {
	s.Dimensions = &v
	return s
}

func (s *DescribeMetricLastRequest) SetNextToken(v string) *DescribeMetricLastRequest {
	s.NextToken = &v
	return s
}

func (s *DescribeMetricLastRequest) SetLength(v string) *DescribeMetricLastRequest {
	s.Length = &v
	return s
}

func (s *DescribeMetricLastRequest) SetExpress(v string) *DescribeMetricLastRequest {
	s.Express = &v
	return s
}

type DescribeMetricLastResponse struct {
	Code       *string `json:"Code" xml:"Code" require:"true"`
	Message    *string `json:"Message" xml:"Message" require:"true"`
	RequestId  *string `json:"RequestId" xml:"RequestId" require:"true"`
	NextToken  *string `json:"NextToken" xml:"NextToken" require:"true"`
	Datapoints *string `json:"Datapoints" xml:"Datapoints" require:"true"`
	Period     *string `json:"Period" xml:"Period" require:"true"`
	Success    *bool   `json:"Success" xml:"Success" require:"true"`
}

func (s DescribeMetricLastResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMetricLastResponse) GoString() string {
	return s.String()
}

func (s *DescribeMetricLastResponse) SetCode(v string) *DescribeMetricLastResponse {
	s.Code = &v
	return s
}

func (s *DescribeMetricLastResponse) SetMessage(v string) *DescribeMetricLastResponse {
	s.Message = &v
	return s
}

func (s *DescribeMetricLastResponse) SetRequestId(v string) *DescribeMetricLastResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMetricLastResponse) SetNextToken(v string) *DescribeMetricLastResponse {
	s.NextToken = &v
	return s
}

func (s *DescribeMetricLastResponse) SetDatapoints(v string) *DescribeMetricLastResponse {
	s.Datapoints = &v
	return s
}

func (s *DescribeMetricLastResponse) SetPeriod(v string) *DescribeMetricLastResponse {
	s.Period = &v
	return s
}

func (s *DescribeMetricLastResponse) SetSuccess(v bool) *DescribeMetricLastResponse {
	s.Success = &v
	return s
}

type EnableHostAvailabilityRequest struct {
	Id []*int64 `json:"Id" xml:"Id" require:"true" type:"Repeated"`
}

func (s EnableHostAvailabilityRequest) String() string {
	return tea.Prettify(s)
}

func (s EnableHostAvailabilityRequest) GoString() string {
	return s.String()
}

func (s *EnableHostAvailabilityRequest) SetId(v []*int64) *EnableHostAvailabilityRequest {
	s.Id = v
	return s
}

type EnableHostAvailabilityResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s EnableHostAvailabilityResponse) String() string {
	return tea.Prettify(s)
}

func (s EnableHostAvailabilityResponse) GoString() string {
	return s.String()
}

func (s *EnableHostAvailabilityResponse) SetCode(v string) *EnableHostAvailabilityResponse {
	s.Code = &v
	return s
}

func (s *EnableHostAvailabilityResponse) SetMessage(v string) *EnableHostAvailabilityResponse {
	s.Message = &v
	return s
}

func (s *EnableHostAvailabilityResponse) SetSuccess(v bool) *EnableHostAvailabilityResponse {
	s.Success = &v
	return s
}

func (s *EnableHostAvailabilityResponse) SetRequestId(v string) *EnableHostAvailabilityResponse {
	s.RequestId = &v
	return s
}

type ModifyHostAvailabilityRequest struct {
	GroupId                   *int64                                                    `json:"GroupId" xml:"GroupId" require:"true"`
	Id                        *int64                                                    `json:"Id" xml:"Id" require:"true"`
	TaskName                  *string                                                   `json:"TaskName" xml:"TaskName" require:"true"`
	TaskScope                 *string                                                   `json:"TaskScope" xml:"TaskScope"`
	TaskOption                *ModifyHostAvailabilityRequestTaskOption                  `json:"TaskOption" xml:"TaskOption" require:"true" type:"Struct"`
	AlertConfig               *ModifyHostAvailabilityRequestAlertConfig                 `json:"AlertConfig" xml:"AlertConfig" require:"true" type:"Struct"`
	AlertConfigEscalationList []*ModifyHostAvailabilityRequestAlertConfigEscalationList `json:"AlertConfigEscalationList" xml:"AlertConfigEscalationList" require:"true" type:"Repeated"`
	InstanceList              []*string                                                 `json:"InstanceList" xml:"InstanceList" type:"Repeated"`
}

func (s ModifyHostAvailabilityRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyHostAvailabilityRequest) GoString() string {
	return s.String()
}

func (s *ModifyHostAvailabilityRequest) SetGroupId(v int64) *ModifyHostAvailabilityRequest {
	s.GroupId = &v
	return s
}

func (s *ModifyHostAvailabilityRequest) SetId(v int64) *ModifyHostAvailabilityRequest {
	s.Id = &v
	return s
}

func (s *ModifyHostAvailabilityRequest) SetTaskName(v string) *ModifyHostAvailabilityRequest {
	s.TaskName = &v
	return s
}

func (s *ModifyHostAvailabilityRequest) SetTaskScope(v string) *ModifyHostAvailabilityRequest {
	s.TaskScope = &v
	return s
}

func (s *ModifyHostAvailabilityRequest) SetTaskOption(v *ModifyHostAvailabilityRequestTaskOption) *ModifyHostAvailabilityRequest {
	s.TaskOption = v
	return s
}

func (s *ModifyHostAvailabilityRequest) SetAlertConfig(v *ModifyHostAvailabilityRequestAlertConfig) *ModifyHostAvailabilityRequest {
	s.AlertConfig = v
	return s
}

func (s *ModifyHostAvailabilityRequest) SetAlertConfigEscalationList(v []*ModifyHostAvailabilityRequestAlertConfigEscalationList) *ModifyHostAvailabilityRequest {
	s.AlertConfigEscalationList = v
	return s
}

func (s *ModifyHostAvailabilityRequest) SetInstanceList(v []*string) *ModifyHostAvailabilityRequest {
	s.InstanceList = v
	return s
}

type ModifyHostAvailabilityRequestTaskOption struct {
	HttpURI                  *string `json:"HttpURI" xml:"HttpURI"`
	TelnetOrPingHost         *string `json:"TelnetOrPingHost" xml:"TelnetOrPingHost"`
	HttpResponseCharset      *string `json:"HttpResponseCharset" xml:"HttpResponseCharset"`
	HttpResponseMatchContent *string `json:"HttpResponseMatchContent" xml:"HttpResponseMatchContent"`
	HttpMethod               *string `json:"HttpMethod" xml:"HttpMethod"`
	HttpNegative             *bool   `json:"HttpNegative" xml:"HttpNegative"`
}

func (s ModifyHostAvailabilityRequestTaskOption) String() string {
	return tea.Prettify(s)
}

func (s ModifyHostAvailabilityRequestTaskOption) GoString() string {
	return s.String()
}

func (s *ModifyHostAvailabilityRequestTaskOption) SetHttpURI(v string) *ModifyHostAvailabilityRequestTaskOption {
	s.HttpURI = &v
	return s
}

func (s *ModifyHostAvailabilityRequestTaskOption) SetTelnetOrPingHost(v string) *ModifyHostAvailabilityRequestTaskOption {
	s.TelnetOrPingHost = &v
	return s
}

func (s *ModifyHostAvailabilityRequestTaskOption) SetHttpResponseCharset(v string) *ModifyHostAvailabilityRequestTaskOption {
	s.HttpResponseCharset = &v
	return s
}

func (s *ModifyHostAvailabilityRequestTaskOption) SetHttpResponseMatchContent(v string) *ModifyHostAvailabilityRequestTaskOption {
	s.HttpResponseMatchContent = &v
	return s
}

func (s *ModifyHostAvailabilityRequestTaskOption) SetHttpMethod(v string) *ModifyHostAvailabilityRequestTaskOption {
	s.HttpMethod = &v
	return s
}

func (s *ModifyHostAvailabilityRequestTaskOption) SetHttpNegative(v bool) *ModifyHostAvailabilityRequestTaskOption {
	s.HttpNegative = &v
	return s
}

type ModifyHostAvailabilityRequestAlertConfig struct {
	NotifyType  *int    `json:"NotifyType" xml:"NotifyType" require:"true"`
	StartTime   *int    `json:"StartTime" xml:"StartTime"`
	EndTime     *int    `json:"EndTime" xml:"EndTime"`
	SilenceTime *int    `json:"SilenceTime" xml:"SilenceTime"`
	WebHook     *string `json:"WebHook" xml:"WebHook"`
}

func (s ModifyHostAvailabilityRequestAlertConfig) String() string {
	return tea.Prettify(s)
}

func (s ModifyHostAvailabilityRequestAlertConfig) GoString() string {
	return s.String()
}

func (s *ModifyHostAvailabilityRequestAlertConfig) SetNotifyType(v int) *ModifyHostAvailabilityRequestAlertConfig {
	s.NotifyType = &v
	return s
}

func (s *ModifyHostAvailabilityRequestAlertConfig) SetStartTime(v int) *ModifyHostAvailabilityRequestAlertConfig {
	s.StartTime = &v
	return s
}

func (s *ModifyHostAvailabilityRequestAlertConfig) SetEndTime(v int) *ModifyHostAvailabilityRequestAlertConfig {
	s.EndTime = &v
	return s
}

func (s *ModifyHostAvailabilityRequestAlertConfig) SetSilenceTime(v int) *ModifyHostAvailabilityRequestAlertConfig {
	s.SilenceTime = &v
	return s
}

func (s *ModifyHostAvailabilityRequestAlertConfig) SetWebHook(v string) *ModifyHostAvailabilityRequestAlertConfig {
	s.WebHook = &v
	return s
}

type ModifyHostAvailabilityRequestAlertConfigEscalationList struct {
	MetricName *string `json:"MetricName" xml:"MetricName" require:"true"`
	Aggregate  *string `json:"Aggregate" xml:"Aggregate" require:"true"`
	Times      *int    `json:"Times" xml:"Times" require:"true"`
	Operator   *string `json:"Operator" xml:"Operator" require:"true"`
	Value      *string `json:"Value" xml:"Value" require:"true"`
}

func (s ModifyHostAvailabilityRequestAlertConfigEscalationList) String() string {
	return tea.Prettify(s)
}

func (s ModifyHostAvailabilityRequestAlertConfigEscalationList) GoString() string {
	return s.String()
}

func (s *ModifyHostAvailabilityRequestAlertConfigEscalationList) SetMetricName(v string) *ModifyHostAvailabilityRequestAlertConfigEscalationList {
	s.MetricName = &v
	return s
}

func (s *ModifyHostAvailabilityRequestAlertConfigEscalationList) SetAggregate(v string) *ModifyHostAvailabilityRequestAlertConfigEscalationList {
	s.Aggregate = &v
	return s
}

func (s *ModifyHostAvailabilityRequestAlertConfigEscalationList) SetTimes(v int) *ModifyHostAvailabilityRequestAlertConfigEscalationList {
	s.Times = &v
	return s
}

func (s *ModifyHostAvailabilityRequestAlertConfigEscalationList) SetOperator(v string) *ModifyHostAvailabilityRequestAlertConfigEscalationList {
	s.Operator = &v
	return s
}

func (s *ModifyHostAvailabilityRequestAlertConfigEscalationList) SetValue(v string) *ModifyHostAvailabilityRequestAlertConfigEscalationList {
	s.Value = &v
	return s
}

type ModifyHostAvailabilityResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s ModifyHostAvailabilityResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyHostAvailabilityResponse) GoString() string {
	return s.String()
}

func (s *ModifyHostAvailabilityResponse) SetCode(v string) *ModifyHostAvailabilityResponse {
	s.Code = &v
	return s
}

func (s *ModifyHostAvailabilityResponse) SetMessage(v string) *ModifyHostAvailabilityResponse {
	s.Message = &v
	return s
}

func (s *ModifyHostAvailabilityResponse) SetSuccess(v bool) *ModifyHostAvailabilityResponse {
	s.Success = &v
	return s
}

func (s *ModifyHostAvailabilityResponse) SetRequestId(v string) *ModifyHostAvailabilityResponse {
	s.RequestId = &v
	return s
}

type DisableHostAvailabilityRequest struct {
	Id []*int64 `json:"Id" xml:"Id" require:"true" type:"Repeated"`
}

func (s DisableHostAvailabilityRequest) String() string {
	return tea.Prettify(s)
}

func (s DisableHostAvailabilityRequest) GoString() string {
	return s.String()
}

func (s *DisableHostAvailabilityRequest) SetId(v []*int64) *DisableHostAvailabilityRequest {
	s.Id = v
	return s
}

type DisableHostAvailabilityResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DisableHostAvailabilityResponse) String() string {
	return tea.Prettify(s)
}

func (s DisableHostAvailabilityResponse) GoString() string {
	return s.String()
}

func (s *DisableHostAvailabilityResponse) SetCode(v string) *DisableHostAvailabilityResponse {
	s.Code = &v
	return s
}

func (s *DisableHostAvailabilityResponse) SetMessage(v string) *DisableHostAvailabilityResponse {
	s.Message = &v
	return s
}

func (s *DisableHostAvailabilityResponse) SetSuccess(v bool) *DisableHostAvailabilityResponse {
	s.Success = &v
	return s
}

func (s *DisableHostAvailabilityResponse) SetRequestId(v string) *DisableHostAvailabilityResponse {
	s.RequestId = &v
	return s
}

type DescribeUnhealthyHostAvailabilityRequest struct {
	Id []*int64 `json:"Id" xml:"Id" type:"Repeated"`
}

func (s DescribeUnhealthyHostAvailabilityRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeUnhealthyHostAvailabilityRequest) GoString() string {
	return s.String()
}

func (s *DescribeUnhealthyHostAvailabilityRequest) SetId(v []*int64) *DescribeUnhealthyHostAvailabilityRequest {
	s.Id = v
	return s
}

type DescribeUnhealthyHostAvailabilityResponse struct {
	Code          *string                                                 `json:"Code" xml:"Code" require:"true"`
	Message       *string                                                 `json:"Message" xml:"Message" require:"true"`
	Success       *bool                                                   `json:"Success" xml:"Success" require:"true"`
	RequestId     *string                                                 `json:"RequestId" xml:"RequestId" require:"true"`
	UnhealthyList *DescribeUnhealthyHostAvailabilityResponseUnhealthyList `json:"UnhealthyList" xml:"UnhealthyList" require:"true" type:"Struct"`
}

func (s DescribeUnhealthyHostAvailabilityResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeUnhealthyHostAvailabilityResponse) GoString() string {
	return s.String()
}

func (s *DescribeUnhealthyHostAvailabilityResponse) SetCode(v string) *DescribeUnhealthyHostAvailabilityResponse {
	s.Code = &v
	return s
}

func (s *DescribeUnhealthyHostAvailabilityResponse) SetMessage(v string) *DescribeUnhealthyHostAvailabilityResponse {
	s.Message = &v
	return s
}

func (s *DescribeUnhealthyHostAvailabilityResponse) SetSuccess(v bool) *DescribeUnhealthyHostAvailabilityResponse {
	s.Success = &v
	return s
}

func (s *DescribeUnhealthyHostAvailabilityResponse) SetRequestId(v string) *DescribeUnhealthyHostAvailabilityResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeUnhealthyHostAvailabilityResponse) SetUnhealthyList(v *DescribeUnhealthyHostAvailabilityResponseUnhealthyList) *DescribeUnhealthyHostAvailabilityResponse {
	s.UnhealthyList = v
	return s
}

type DescribeUnhealthyHostAvailabilityResponseUnhealthyList struct {
	NodeTaskInstance []*DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance `json:"NodeTaskInstance" xml:"NodeTaskInstance" require:"true" type:"Repeated"`
}

func (s DescribeUnhealthyHostAvailabilityResponseUnhealthyList) String() string {
	return tea.Prettify(s)
}

func (s DescribeUnhealthyHostAvailabilityResponseUnhealthyList) GoString() string {
	return s.String()
}

func (s *DescribeUnhealthyHostAvailabilityResponseUnhealthyList) SetNodeTaskInstance(v []*DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance) *DescribeUnhealthyHostAvailabilityResponseUnhealthyList {
	s.NodeTaskInstance = v
	return s
}

type DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance struct {
	Id           *int64                                                                              `json:"Id" xml:"Id" require:"true"`
	InstanceList *DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstanceInstanceList `json:"InstanceList" xml:"InstanceList" require:"true" type:"Struct"`
}

func (s DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance) String() string {
	return tea.Prettify(s)
}

func (s DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance) GoString() string {
	return s.String()
}

func (s *DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance) SetId(v int64) *DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance {
	s.Id = &v
	return s
}

func (s *DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance) SetInstanceList(v *DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstanceInstanceList) *DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance {
	s.InstanceList = v
	return s
}

type DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstanceInstanceList struct {
	String []*string `json:"String" xml:"String" require:"true" type:"Repeated"`
}

func (s DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstanceInstanceList) String() string {
	return tea.Prettify(s)
}

func (s DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstanceInstanceList) GoString() string {
	return s.String()
}

func (s *DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstanceInstanceList) SetString(v []*string) *DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstanceInstanceList {
	s.String = v
	return s
}

type CreateHostAvailabilityRequest struct {
	GroupId                   *int64                                                    `json:"GroupId" xml:"GroupId" require:"true"`
	TaskName                  *string                                                   `json:"TaskName" xml:"TaskName" require:"true"`
	TaskScope                 *string                                                   `json:"TaskScope" xml:"TaskScope"`
	TaskType                  *string                                                   `json:"TaskType" xml:"TaskType" require:"true"`
	TaskOption                *CreateHostAvailabilityRequestTaskOption                  `json:"TaskOption" xml:"TaskOption" require:"true" type:"Struct"`
	AlertConfig               *CreateHostAvailabilityRequestAlertConfig                 `json:"AlertConfig" xml:"AlertConfig" require:"true" type:"Struct"`
	AlertConfigEscalationList []*CreateHostAvailabilityRequestAlertConfigEscalationList `json:"AlertConfigEscalationList" xml:"AlertConfigEscalationList" require:"true" type:"Repeated"`
	InstanceList              []*string                                                 `json:"InstanceList" xml:"InstanceList" type:"Repeated"`
}

func (s CreateHostAvailabilityRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateHostAvailabilityRequest) GoString() string {
	return s.String()
}

func (s *CreateHostAvailabilityRequest) SetGroupId(v int64) *CreateHostAvailabilityRequest {
	s.GroupId = &v
	return s
}

func (s *CreateHostAvailabilityRequest) SetTaskName(v string) *CreateHostAvailabilityRequest {
	s.TaskName = &v
	return s
}

func (s *CreateHostAvailabilityRequest) SetTaskScope(v string) *CreateHostAvailabilityRequest {
	s.TaskScope = &v
	return s
}

func (s *CreateHostAvailabilityRequest) SetTaskType(v string) *CreateHostAvailabilityRequest {
	s.TaskType = &v
	return s
}

func (s *CreateHostAvailabilityRequest) SetTaskOption(v *CreateHostAvailabilityRequestTaskOption) *CreateHostAvailabilityRequest {
	s.TaskOption = v
	return s
}

func (s *CreateHostAvailabilityRequest) SetAlertConfig(v *CreateHostAvailabilityRequestAlertConfig) *CreateHostAvailabilityRequest {
	s.AlertConfig = v
	return s
}

func (s *CreateHostAvailabilityRequest) SetAlertConfigEscalationList(v []*CreateHostAvailabilityRequestAlertConfigEscalationList) *CreateHostAvailabilityRequest {
	s.AlertConfigEscalationList = v
	return s
}

func (s *CreateHostAvailabilityRequest) SetInstanceList(v []*string) *CreateHostAvailabilityRequest {
	s.InstanceList = v
	return s
}

type CreateHostAvailabilityRequestTaskOption struct {
	HttpURI                  *string `json:"HttpURI" xml:"HttpURI"`
	TelnetOrPingHost         *string `json:"TelnetOrPingHost" xml:"TelnetOrPingHost"`
	HttpResponseCharset      *string `json:"HttpResponseCharset" xml:"HttpResponseCharset"`
	HttpResponseMatchContent *string `json:"HttpResponseMatchContent" xml:"HttpResponseMatchContent"`
	HttpMethod               *string `json:"HttpMethod" xml:"HttpMethod"`
	HttpNegative             *bool   `json:"HttpNegative" xml:"HttpNegative"`
}

func (s CreateHostAvailabilityRequestTaskOption) String() string {
	return tea.Prettify(s)
}

func (s CreateHostAvailabilityRequestTaskOption) GoString() string {
	return s.String()
}

func (s *CreateHostAvailabilityRequestTaskOption) SetHttpURI(v string) *CreateHostAvailabilityRequestTaskOption {
	s.HttpURI = &v
	return s
}

func (s *CreateHostAvailabilityRequestTaskOption) SetTelnetOrPingHost(v string) *CreateHostAvailabilityRequestTaskOption {
	s.TelnetOrPingHost = &v
	return s
}

func (s *CreateHostAvailabilityRequestTaskOption) SetHttpResponseCharset(v string) *CreateHostAvailabilityRequestTaskOption {
	s.HttpResponseCharset = &v
	return s
}

func (s *CreateHostAvailabilityRequestTaskOption) SetHttpResponseMatchContent(v string) *CreateHostAvailabilityRequestTaskOption {
	s.HttpResponseMatchContent = &v
	return s
}

func (s *CreateHostAvailabilityRequestTaskOption) SetHttpMethod(v string) *CreateHostAvailabilityRequestTaskOption {
	s.HttpMethod = &v
	return s
}

func (s *CreateHostAvailabilityRequestTaskOption) SetHttpNegative(v bool) *CreateHostAvailabilityRequestTaskOption {
	s.HttpNegative = &v
	return s
}

type CreateHostAvailabilityRequestAlertConfig struct {
	NotifyType  *int    `json:"NotifyType" xml:"NotifyType" require:"true"`
	StartTime   *int    `json:"StartTime" xml:"StartTime"`
	EndTime     *int    `json:"EndTime" xml:"EndTime"`
	SilenceTime *int    `json:"SilenceTime" xml:"SilenceTime"`
	WebHook     *string `json:"WebHook" xml:"WebHook"`
}

func (s CreateHostAvailabilityRequestAlertConfig) String() string {
	return tea.Prettify(s)
}

func (s CreateHostAvailabilityRequestAlertConfig) GoString() string {
	return s.String()
}

func (s *CreateHostAvailabilityRequestAlertConfig) SetNotifyType(v int) *CreateHostAvailabilityRequestAlertConfig {
	s.NotifyType = &v
	return s
}

func (s *CreateHostAvailabilityRequestAlertConfig) SetStartTime(v int) *CreateHostAvailabilityRequestAlertConfig {
	s.StartTime = &v
	return s
}

func (s *CreateHostAvailabilityRequestAlertConfig) SetEndTime(v int) *CreateHostAvailabilityRequestAlertConfig {
	s.EndTime = &v
	return s
}

func (s *CreateHostAvailabilityRequestAlertConfig) SetSilenceTime(v int) *CreateHostAvailabilityRequestAlertConfig {
	s.SilenceTime = &v
	return s
}

func (s *CreateHostAvailabilityRequestAlertConfig) SetWebHook(v string) *CreateHostAvailabilityRequestAlertConfig {
	s.WebHook = &v
	return s
}

type CreateHostAvailabilityRequestAlertConfigEscalationList struct {
	MetricName *string `json:"MetricName" xml:"MetricName" require:"true"`
	Aggregate  *string `json:"Aggregate" xml:"Aggregate" require:"true"`
	Times      *int    `json:"Times" xml:"Times" require:"true"`
	Operator   *string `json:"Operator" xml:"Operator" require:"true"`
	Value      *string `json:"Value" xml:"Value" require:"true"`
}

func (s CreateHostAvailabilityRequestAlertConfigEscalationList) String() string {
	return tea.Prettify(s)
}

func (s CreateHostAvailabilityRequestAlertConfigEscalationList) GoString() string {
	return s.String()
}

func (s *CreateHostAvailabilityRequestAlertConfigEscalationList) SetMetricName(v string) *CreateHostAvailabilityRequestAlertConfigEscalationList {
	s.MetricName = &v
	return s
}

func (s *CreateHostAvailabilityRequestAlertConfigEscalationList) SetAggregate(v string) *CreateHostAvailabilityRequestAlertConfigEscalationList {
	s.Aggregate = &v
	return s
}

func (s *CreateHostAvailabilityRequestAlertConfigEscalationList) SetTimes(v int) *CreateHostAvailabilityRequestAlertConfigEscalationList {
	s.Times = &v
	return s
}

func (s *CreateHostAvailabilityRequestAlertConfigEscalationList) SetOperator(v string) *CreateHostAvailabilityRequestAlertConfigEscalationList {
	s.Operator = &v
	return s
}

func (s *CreateHostAvailabilityRequestAlertConfigEscalationList) SetValue(v string) *CreateHostAvailabilityRequestAlertConfigEscalationList {
	s.Value = &v
	return s
}

type CreateHostAvailabilityResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	TaskId    *int64  `json:"TaskId" xml:"TaskId" require:"true"`
}

func (s CreateHostAvailabilityResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateHostAvailabilityResponse) GoString() string {
	return s.String()
}

func (s *CreateHostAvailabilityResponse) SetCode(v string) *CreateHostAvailabilityResponse {
	s.Code = &v
	return s
}

func (s *CreateHostAvailabilityResponse) SetMessage(v string) *CreateHostAvailabilityResponse {
	s.Message = &v
	return s
}

func (s *CreateHostAvailabilityResponse) SetSuccess(v bool) *CreateHostAvailabilityResponse {
	s.Success = &v
	return s
}

func (s *CreateHostAvailabilityResponse) SetRequestId(v string) *CreateHostAvailabilityResponse {
	s.RequestId = &v
	return s
}

func (s *CreateHostAvailabilityResponse) SetTaskId(v int64) *CreateHostAvailabilityResponse {
	s.TaskId = &v
	return s
}

type DescribeHostAvailabilityListRequest struct {
	Id         *int64  `json:"Id" xml:"Id"`
	TaskName   *string `json:"TaskName" xml:"TaskName"`
	PageNumber *int    `json:"PageNumber" xml:"PageNumber"`
	PageSize   *int    `json:"PageSize" xml:"PageSize"`
	GroupId    *int64  `json:"GroupId" xml:"GroupId"`
}

func (s DescribeHostAvailabilityListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeHostAvailabilityListRequest) GoString() string {
	return s.String()
}

func (s *DescribeHostAvailabilityListRequest) SetId(v int64) *DescribeHostAvailabilityListRequest {
	s.Id = &v
	return s
}

func (s *DescribeHostAvailabilityListRequest) SetTaskName(v string) *DescribeHostAvailabilityListRequest {
	s.TaskName = &v
	return s
}

func (s *DescribeHostAvailabilityListRequest) SetPageNumber(v int) *DescribeHostAvailabilityListRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeHostAvailabilityListRequest) SetPageSize(v int) *DescribeHostAvailabilityListRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeHostAvailabilityListRequest) SetGroupId(v int64) *DescribeHostAvailabilityListRequest {
	s.GroupId = &v
	return s
}

type DescribeHostAvailabilityListResponse struct {
	Code      *string                                       `json:"Code" xml:"Code" require:"true"`
	Message   *string                                       `json:"Message" xml:"Message" require:"true"`
	Success   *bool                                         `json:"Success" xml:"Success" require:"true"`
	RequestId *string                                       `json:"RequestId" xml:"RequestId" require:"true"`
	Total     *int                                          `json:"Total" xml:"Total" require:"true"`
	TaskList  *DescribeHostAvailabilityListResponseTaskList `json:"TaskList" xml:"TaskList" require:"true" type:"Struct"`
}

func (s DescribeHostAvailabilityListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeHostAvailabilityListResponse) GoString() string {
	return s.String()
}

func (s *DescribeHostAvailabilityListResponse) SetCode(v string) *DescribeHostAvailabilityListResponse {
	s.Code = &v
	return s
}

func (s *DescribeHostAvailabilityListResponse) SetMessage(v string) *DescribeHostAvailabilityListResponse {
	s.Message = &v
	return s
}

func (s *DescribeHostAvailabilityListResponse) SetSuccess(v bool) *DescribeHostAvailabilityListResponse {
	s.Success = &v
	return s
}

func (s *DescribeHostAvailabilityListResponse) SetRequestId(v string) *DescribeHostAvailabilityListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeHostAvailabilityListResponse) SetTotal(v int) *DescribeHostAvailabilityListResponse {
	s.Total = &v
	return s
}

func (s *DescribeHostAvailabilityListResponse) SetTaskList(v *DescribeHostAvailabilityListResponseTaskList) *DescribeHostAvailabilityListResponse {
	s.TaskList = v
	return s
}

type DescribeHostAvailabilityListResponseTaskList struct {
	NodeTaskConfig []*DescribeHostAvailabilityListResponseTaskListNodeTaskConfig `json:"NodeTaskConfig" xml:"NodeTaskConfig" require:"true" type:"Repeated"`
}

func (s DescribeHostAvailabilityListResponseTaskList) String() string {
	return tea.Prettify(s)
}

func (s DescribeHostAvailabilityListResponseTaskList) GoString() string {
	return s.String()
}

func (s *DescribeHostAvailabilityListResponseTaskList) SetNodeTaskConfig(v []*DescribeHostAvailabilityListResponseTaskListNodeTaskConfig) *DescribeHostAvailabilityListResponseTaskList {
	s.NodeTaskConfig = v
	return s
}

type DescribeHostAvailabilityListResponseTaskListNodeTaskConfig struct {
	Id          *int64                                                                 `json:"Id" xml:"Id" require:"true"`
	TaskName    *string                                                                `json:"TaskName" xml:"TaskName" require:"true"`
	TaskType    *string                                                                `json:"TaskType" xml:"TaskType" require:"true"`
	TaskScope   *string                                                                `json:"TaskScope" xml:"TaskScope" require:"true"`
	Disabled    *bool                                                                  `json:"Disabled" xml:"Disabled" require:"true"`
	GroupId     *int64                                                                 `json:"GroupId" xml:"GroupId" require:"true"`
	GroupName   *string                                                                `json:"GroupName" xml:"GroupName" require:"true"`
	TaskOption  *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption  `json:"TaskOption" xml:"TaskOption" require:"true" type:"Struct"`
	AlertConfig *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig `json:"AlertConfig" xml:"AlertConfig" require:"true" type:"Struct"`
	Instances   *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigInstances   `json:"Instances" xml:"Instances" require:"true" type:"Struct"`
}

func (s DescribeHostAvailabilityListResponseTaskListNodeTaskConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeHostAvailabilityListResponseTaskListNodeTaskConfig) GoString() string {
	return s.String()
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig) SetId(v int64) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig {
	s.Id = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig) SetTaskName(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig {
	s.TaskName = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig) SetTaskType(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig {
	s.TaskType = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig) SetTaskScope(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig {
	s.TaskScope = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig) SetDisabled(v bool) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig {
	s.Disabled = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig) SetGroupId(v int64) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig {
	s.GroupId = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig) SetGroupName(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig {
	s.GroupName = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig) SetTaskOption(v *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig {
	s.TaskOption = v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig) SetAlertConfig(v *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig {
	s.AlertConfig = v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig) SetInstances(v *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigInstances) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfig {
	s.Instances = v
	return s
}

type DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption struct {
	HttpURI             *string `json:"HttpURI" xml:"HttpURI" require:"true"`
	TelnetOrPingHost    *string `json:"TelnetOrPingHost" xml:"TelnetOrPingHost" require:"true"`
	HttpResponseCharset *string `json:"HttpResponseCharset" xml:"HttpResponseCharset" require:"true"`
	HttpKeyword         *string `json:"HttpKeyword" xml:"HttpKeyword" require:"true"`
	HttpMethod          *string `json:"HttpMethod" xml:"HttpMethod" require:"true"`
	HttpNegative        *bool   `json:"HttpNegative" xml:"HttpNegative" require:"true"`
}

func (s DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption) String() string {
	return tea.Prettify(s)
}

func (s DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption) GoString() string {
	return s.String()
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption) SetHttpURI(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption {
	s.HttpURI = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption) SetTelnetOrPingHost(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption {
	s.TelnetOrPingHost = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption) SetHttpResponseCharset(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption {
	s.HttpResponseCharset = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption) SetHttpKeyword(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption {
	s.HttpKeyword = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption) SetHttpMethod(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption {
	s.HttpMethod = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption) SetHttpNegative(v bool) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption {
	s.HttpNegative = &v
	return s
}

type DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig struct {
	NotifyType     *int                                                                                 `json:"NotifyType" xml:"NotifyType" require:"true"`
	StartTime      *int                                                                                 `json:"StartTime" xml:"StartTime" require:"true"`
	EndTime        *int                                                                                 `json:"EndTime" xml:"EndTime" require:"true"`
	SilenceTime    *int                                                                                 `json:"SilenceTime" xml:"SilenceTime" require:"true"`
	WebHook        *string                                                                              `json:"WebHook" xml:"WebHook" require:"true"`
	EscalationList *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationList `json:"EscalationList" xml:"EscalationList" require:"true" type:"Struct"`
}

func (s DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig) GoString() string {
	return s.String()
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig) SetNotifyType(v int) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig {
	s.NotifyType = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig) SetStartTime(v int) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig {
	s.StartTime = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig) SetEndTime(v int) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig {
	s.EndTime = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig) SetSilenceTime(v int) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig {
	s.SilenceTime = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig) SetWebHook(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig {
	s.WebHook = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig) SetEscalationList(v *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationList) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig {
	s.EscalationList = v
	return s
}

type DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationList struct {
	EscalationList []*DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList `json:"escalationList" xml:"escalationList" require:"true" type:"Repeated"`
}

func (s DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationList) String() string {
	return tea.Prettify(s)
}

func (s DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationList) GoString() string {
	return s.String()
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationList) SetEscalationList(v []*DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationList {
	s.EscalationList = v
	return s
}

type DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList struct {
	MetricName *string `json:"MetricName" xml:"MetricName" require:"true"`
	Aggregate  *string `json:"Aggregate" xml:"Aggregate" require:"true"`
	Operator   *string `json:"Operator" xml:"Operator" require:"true"`
	Value      *string `json:"Value" xml:"Value" require:"true"`
	Times      *string `json:"Times" xml:"Times" require:"true"`
}

func (s DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList) String() string {
	return tea.Prettify(s)
}

func (s DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList) GoString() string {
	return s.String()
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList) SetMetricName(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList {
	s.MetricName = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList) SetAggregate(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList {
	s.Aggregate = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList) SetOperator(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList {
	s.Operator = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList) SetValue(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList {
	s.Value = &v
	return s
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList) SetTimes(v string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList {
	s.Times = &v
	return s
}

type DescribeHostAvailabilityListResponseTaskListNodeTaskConfigInstances struct {
	Instance []*string `json:"Instance" xml:"Instance" require:"true" type:"Repeated"`
}

func (s DescribeHostAvailabilityListResponseTaskListNodeTaskConfigInstances) String() string {
	return tea.Prettify(s)
}

func (s DescribeHostAvailabilityListResponseTaskListNodeTaskConfigInstances) GoString() string {
	return s.String()
}

func (s *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigInstances) SetInstance(v []*string) *DescribeHostAvailabilityListResponseTaskListNodeTaskConfigInstances {
	s.Instance = v
	return s
}

type DeleteHostAvailabilityRequest struct {
	Id []*int64 `json:"Id" xml:"Id" require:"true" type:"Repeated"`
}

func (s DeleteHostAvailabilityRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteHostAvailabilityRequest) GoString() string {
	return s.String()
}

func (s *DeleteHostAvailabilityRequest) SetId(v []*int64) *DeleteHostAvailabilityRequest {
	s.Id = v
	return s
}

type DeleteHostAvailabilityResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteHostAvailabilityResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteHostAvailabilityResponse) GoString() string {
	return s.String()
}

func (s *DeleteHostAvailabilityResponse) SetCode(v string) *DeleteHostAvailabilityResponse {
	s.Code = &v
	return s
}

func (s *DeleteHostAvailabilityResponse) SetMessage(v string) *DeleteHostAvailabilityResponse {
	s.Message = &v
	return s
}

func (s *DeleteHostAvailabilityResponse) SetSuccess(v bool) *DeleteHostAvailabilityResponse {
	s.Success = &v
	return s
}

func (s *DeleteHostAvailabilityResponse) SetRequestId(v string) *DeleteHostAvailabilityResponse {
	s.RequestId = &v
	return s
}

type DescribeMonitoringConfigRequest struct {
}

func (s DescribeMonitoringConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringConfigRequest) GoString() string {
	return s.String()
}

type DescribeMonitoringConfigResponse struct {
	Code                     *string `json:"Code" xml:"Code" require:"true"`
	Message                  *string `json:"Message" xml:"Message" require:"true"`
	Success                  *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId                *string `json:"RequestId" xml:"RequestId" require:"true"`
	AutoInstall              *bool   `json:"AutoInstall" xml:"AutoInstall" require:"true"`
	EnableInstallAgentNewECS *bool   `json:"EnableInstallAgentNewECS" xml:"EnableInstallAgentNewECS" require:"true"`
}

func (s DescribeMonitoringConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMonitoringConfigResponse) GoString() string {
	return s.String()
}

func (s *DescribeMonitoringConfigResponse) SetCode(v string) *DescribeMonitoringConfigResponse {
	s.Code = &v
	return s
}

func (s *DescribeMonitoringConfigResponse) SetMessage(v string) *DescribeMonitoringConfigResponse {
	s.Message = &v
	return s
}

func (s *DescribeMonitoringConfigResponse) SetSuccess(v bool) *DescribeMonitoringConfigResponse {
	s.Success = &v
	return s
}

func (s *DescribeMonitoringConfigResponse) SetRequestId(v string) *DescribeMonitoringConfigResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMonitoringConfigResponse) SetAutoInstall(v bool) *DescribeMonitoringConfigResponse {
	s.AutoInstall = &v
	return s
}

func (s *DescribeMonitoringConfigResponse) SetEnableInstallAgentNewECS(v bool) *DescribeMonitoringConfigResponse {
	s.EnableInstallAgentNewECS = &v
	return s
}

type PutMonitoringConfigRequest struct {
	AutoInstall              *bool `json:"AutoInstall" xml:"AutoInstall"`
	EnableInstallAgentNewECS *bool `json:"EnableInstallAgentNewECS" xml:"EnableInstallAgentNewECS"`
}

func (s PutMonitoringConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s PutMonitoringConfigRequest) GoString() string {
	return s.String()
}

func (s *PutMonitoringConfigRequest) SetAutoInstall(v bool) *PutMonitoringConfigRequest {
	s.AutoInstall = &v
	return s
}

func (s *PutMonitoringConfigRequest) SetEnableInstallAgentNewECS(v bool) *PutMonitoringConfigRequest {
	s.EnableInstallAgentNewECS = &v
	return s
}

type PutMonitoringConfigResponse struct {
	Code      *int    `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s PutMonitoringConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s PutMonitoringConfigResponse) GoString() string {
	return s.String()
}

func (s *PutMonitoringConfigResponse) SetCode(v int) *PutMonitoringConfigResponse {
	s.Code = &v
	return s
}

func (s *PutMonitoringConfigResponse) SetMessage(v string) *PutMonitoringConfigResponse {
	s.Message = &v
	return s
}

func (s *PutMonitoringConfigResponse) SetSuccess(v bool) *PutMonitoringConfigResponse {
	s.Success = &v
	return s
}

func (s *PutMonitoringConfigResponse) SetRequestId(v string) *PutMonitoringConfigResponse {
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
	client.EndpointRule = tea.String("")
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("cms"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) DescribeExporterOutputListWithOptions(request *DescribeExporterOutputListRequest, runtime *util.RuntimeOptions) (_result *DescribeExporterOutputListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeExporterOutputListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeExporterOutputList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeExporterOutputList(request *DescribeExporterOutputListRequest) (_result *DescribeExporterOutputListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeExporterOutputListResponse{}
	_body, _err := client.DescribeExporterOutputListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteExporterOutputWithOptions(request *DeleteExporterOutputRequest, runtime *util.RuntimeOptions) (_result *DeleteExporterOutputResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteExporterOutputResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteExporterOutput"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteExporterOutput(request *DeleteExporterOutputRequest) (_result *DeleteExporterOutputResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteExporterOutputResponse{}
	_body, _err := client.DeleteExporterOutputWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutExporterOutputWithOptions(request *PutExporterOutputRequest, runtime *util.RuntimeOptions) (_result *PutExporterOutputResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutExporterOutputResponse{}
	_body, _err := client.DoRequest(tea.String("PutExporterOutput"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutExporterOutput(request *PutExporterOutputRequest) (_result *PutExporterOutputResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutExporterOutputResponse{}
	_body, _err := client.PutExporterOutputWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeFolderListWithOptions(request *DescribeFolderListRequest, runtime *util.RuntimeOptions) (_result *DescribeFolderListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeFolderListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeFolderList"), tea.String("HTTPS"), tea.String("GET"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeFolderList(request *DescribeFolderListRequest) (_result *DescribeFolderListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeFolderListResponse{}
	_body, _err := client.DescribeFolderListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteExporterRuleWithOptions(request *DeleteExporterRuleRequest, runtime *util.RuntimeOptions) (_result *DeleteExporterRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteExporterRuleResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteExporterRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteExporterRule(request *DeleteExporterRuleRequest) (_result *DeleteExporterRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteExporterRuleResponse{}
	_body, _err := client.DeleteExporterRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeExporterRuleListWithOptions(request *DescribeExporterRuleListRequest, runtime *util.RuntimeOptions) (_result *DescribeExporterRuleListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeExporterRuleListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeExporterRuleList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeExporterRuleList(request *DescribeExporterRuleListRequest) (_result *DescribeExporterRuleListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeExporterRuleListResponse{}
	_body, _err := client.DescribeExporterRuleListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutExporterRuleWithOptions(request *PutExporterRuleRequest, runtime *util.RuntimeOptions) (_result *PutExporterRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutExporterRuleResponse{}
	_body, _err := client.DoRequest(tea.String("PutExporterRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutExporterRule(request *PutExporterRuleRequest) (_result *PutExporterRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutExporterRuleResponse{}
	_body, _err := client.PutExporterRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDynamicTagRuleListWithOptions(request *DescribeDynamicTagRuleListRequest, runtime *util.RuntimeOptions) (_result *DescribeDynamicTagRuleListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDynamicTagRuleListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDynamicTagRuleList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDynamicTagRuleList(request *DescribeDynamicTagRuleListRequest) (_result *DescribeDynamicTagRuleListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDynamicTagRuleListResponse{}
	_body, _err := client.DescribeDynamicTagRuleListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeProductResourceTagKeyListWithOptions(request *DescribeProductResourceTagKeyListRequest, runtime *util.RuntimeOptions) (_result *DescribeProductResourceTagKeyListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeProductResourceTagKeyListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeProductResourceTagKeyList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeProductResourceTagKeyList(request *DescribeProductResourceTagKeyListRequest) (_result *DescribeProductResourceTagKeyListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeProductResourceTagKeyListResponse{}
	_body, _err := client.DescribeProductResourceTagKeyListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateDynamicTagGroupWithOptions(request *CreateDynamicTagGroupRequest, runtime *util.RuntimeOptions) (_result *CreateDynamicTagGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateDynamicTagGroupResponse{}
	_body, _err := client.DoRequest(tea.String("CreateDynamicTagGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateDynamicTagGroup(request *CreateDynamicTagGroupRequest) (_result *CreateDynamicTagGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateDynamicTagGroupResponse{}
	_body, _err := client.CreateDynamicTagGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteDynamicTagGroupWithOptions(request *DeleteDynamicTagGroupRequest, runtime *util.RuntimeOptions) (_result *DeleteDynamicTagGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteDynamicTagGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteDynamicTagGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteDynamicTagGroup(request *DeleteDynamicTagGroupRequest) (_result *DeleteDynamicTagGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteDynamicTagGroupResponse{}
	_body, _err := client.DeleteDynamicTagGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyGroupMonitoringAgentProcessWithOptions(request *ModifyGroupMonitoringAgentProcessRequest, runtime *util.RuntimeOptions) (_result *ModifyGroupMonitoringAgentProcessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyGroupMonitoringAgentProcessResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyGroupMonitoringAgentProcess"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyGroupMonitoringAgentProcess(request *ModifyGroupMonitoringAgentProcessRequest) (_result *ModifyGroupMonitoringAgentProcessResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyGroupMonitoringAgentProcessResponse{}
	_body, _err := client.ModifyGroupMonitoringAgentProcessWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteGroupMonitoringAgentProcessWithOptions(request *DeleteGroupMonitoringAgentProcessRequest, runtime *util.RuntimeOptions) (_result *DeleteGroupMonitoringAgentProcessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteGroupMonitoringAgentProcessResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteGroupMonitoringAgentProcess"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteGroupMonitoringAgentProcess(request *DeleteGroupMonitoringAgentProcessRequest) (_result *DeleteGroupMonitoringAgentProcessResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteGroupMonitoringAgentProcessResponse{}
	_body, _err := client.DeleteGroupMonitoringAgentProcessWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateGroupMonitoringAgentProcessWithOptions(request *CreateGroupMonitoringAgentProcessRequest, runtime *util.RuntimeOptions) (_result *CreateGroupMonitoringAgentProcessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateGroupMonitoringAgentProcessResponse{}
	_body, _err := client.DoRequest(tea.String("CreateGroupMonitoringAgentProcess"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateGroupMonitoringAgentProcess(request *CreateGroupMonitoringAgentProcessRequest) (_result *CreateGroupMonitoringAgentProcessResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateGroupMonitoringAgentProcessResponse{}
	_body, _err := client.CreateGroupMonitoringAgentProcessWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeTagKeyListWithOptions(request *DescribeTagKeyListRequest, runtime *util.RuntimeOptions) (_result *DescribeTagKeyListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeTagKeyListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeTagKeyList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeTagKeyList(request *DescribeTagKeyListRequest) (_result *DescribeTagKeyListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeTagKeyListResponse{}
	_body, _err := client.DescribeTagKeyListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeTagValueListWithOptions(request *DescribeTagValueListRequest, runtime *util.RuntimeOptions) (_result *DescribeTagValueListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeTagValueListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeTagValueList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeTagValueList(request *DescribeTagValueListRequest) (_result *DescribeTagValueListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeTagValueListResponse{}
	_body, _err := client.DescribeTagValueListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RemoveTagsWithOptions(request *RemoveTagsRequest, runtime *util.RuntimeOptions) (_result *RemoveTagsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveTagsResponse{}
	_body, _err := client.DoRequest(tea.String("RemoveTags"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveTags(request *RemoveTagsRequest) (_result *RemoveTagsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RemoveTagsResponse{}
	_body, _err := client.RemoveTagsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddTagsWithOptions(request *AddTagsRequest, runtime *util.RuntimeOptions) (_result *AddTagsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddTagsResponse{}
	_body, _err := client.DoRequest(tea.String("AddTags"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddTags(request *AddTagsRequest) (_result *AddTagsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddTagsResponse{}
	_body, _err := client.AddTagsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeGroupMonitoringAgentProcessWithOptions(request *DescribeGroupMonitoringAgentProcessRequest, runtime *util.RuntimeOptions) (_result *DescribeGroupMonitoringAgentProcessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeGroupMonitoringAgentProcessResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeGroupMonitoringAgentProcess"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeGroupMonitoringAgentProcess(request *DescribeGroupMonitoringAgentProcessRequest) (_result *DescribeGroupMonitoringAgentProcessResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeGroupMonitoringAgentProcessResponse{}
	_body, _err := client.DescribeGroupMonitoringAgentProcessWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutResourceMetricRulesWithOptions(request *PutResourceMetricRulesRequest, runtime *util.RuntimeOptions) (_result *PutResourceMetricRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutResourceMetricRulesResponse{}
	_body, _err := client.DoRequest(tea.String("PutResourceMetricRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutResourceMetricRules(request *PutResourceMetricRulesRequest) (_result *PutResourceMetricRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutResourceMetricRulesResponse{}
	_body, _err := client.PutResourceMetricRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateMetricRuleResourcesWithOptions(request *CreateMetricRuleResourcesRequest, runtime *util.RuntimeOptions) (_result *CreateMetricRuleResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateMetricRuleResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("CreateMetricRuleResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateMetricRuleResources(request *CreateMetricRuleResourcesRequest) (_result *CreateMetricRuleResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateMetricRuleResourcesResponse{}
	_body, _err := client.CreateMetricRuleResourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteMetricRuleResourcesWithOptions(request *DeleteMetricRuleResourcesRequest, runtime *util.RuntimeOptions) (_result *DeleteMetricRuleResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteMetricRuleResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteMetricRuleResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteMetricRuleResources(request *DeleteMetricRuleResourcesRequest) (_result *DeleteMetricRuleResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteMetricRuleResourcesResponse{}
	_body, _err := client.DeleteMetricRuleResourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteMetricRuleTargetsWithOptions(request *DeleteMetricRuleTargetsRequest, runtime *util.RuntimeOptions) (_result *DeleteMetricRuleTargetsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteMetricRuleTargetsResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteMetricRuleTargets"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteMetricRuleTargets(request *DeleteMetricRuleTargetsRequest) (_result *DeleteMetricRuleTargetsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteMetricRuleTargetsResponse{}
	_body, _err := client.DeleteMetricRuleTargetsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutMetricRuleTargetsWithOptions(request *PutMetricRuleTargetsRequest, runtime *util.RuntimeOptions) (_result *PutMetricRuleTargetsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutMetricRuleTargetsResponse{}
	_body, _err := client.DoRequest(tea.String("PutMetricRuleTargets"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutMetricRuleTargets(request *PutMetricRuleTargetsRequest) (_result *PutMetricRuleTargetsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutMetricRuleTargetsResponse{}
	_body, _err := client.PutMetricRuleTargetsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMetricRuleTargetsWithOptions(request *DescribeMetricRuleTargetsRequest, runtime *util.RuntimeOptions) (_result *DescribeMetricRuleTargetsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMetricRuleTargetsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMetricRuleTargets"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMetricRuleTargets(request *DescribeMetricRuleTargetsRequest) (_result *DescribeMetricRuleTargetsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMetricRuleTargetsResponse{}
	_body, _err := client.DescribeMetricRuleTargetsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyMonitorGroupInstancesWithOptions(request *ModifyMonitorGroupInstancesRequest, runtime *util.RuntimeOptions) (_result *ModifyMonitorGroupInstancesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyMonitorGroupInstancesResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyMonitorGroupInstances"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyMonitorGroupInstances(request *ModifyMonitorGroupInstancesRequest) (_result *ModifyMonitorGroupInstancesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyMonitorGroupInstancesResponse{}
	_body, _err := client.ModifyMonitorGroupInstancesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMonitoringAgentStatusesWithOptions(request *DescribeMonitoringAgentStatusesRequest, runtime *util.RuntimeOptions) (_result *DescribeMonitoringAgentStatusesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMonitoringAgentStatusesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMonitoringAgentStatuses"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMonitoringAgentStatuses(request *DescribeMonitoringAgentStatusesRequest) (_result *DescribeMonitoringAgentStatusesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMonitoringAgentStatusesResponse{}
	_body, _err := client.DescribeMonitoringAgentStatusesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateMonitorAgentProcessWithOptions(request *CreateMonitorAgentProcessRequest, runtime *util.RuntimeOptions) (_result *CreateMonitorAgentProcessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateMonitorAgentProcessResponse{}
	_body, _err := client.DoRequest(tea.String("CreateMonitorAgentProcess"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateMonitorAgentProcess(request *CreateMonitorAgentProcessRequest) (_result *CreateMonitorAgentProcessResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateMonitorAgentProcessResponse{}
	_body, _err := client.CreateMonitorAgentProcessWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAlertHistoryListWithOptions(request *DescribeAlertHistoryListRequest, runtime *util.RuntimeOptions) (_result *DescribeAlertHistoryListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAlertHistoryListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAlertHistoryList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAlertHistoryList(request *DescribeAlertHistoryListRequest) (_result *DescribeAlertHistoryListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAlertHistoryListResponse{}
	_body, _err := client.DescribeAlertHistoryListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAlertingMetricRuleResourcesWithOptions(request *DescribeAlertingMetricRuleResourcesRequest, runtime *util.RuntimeOptions) (_result *DescribeAlertingMetricRuleResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAlertingMetricRuleResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAlertingMetricRuleResources"), tea.String("HTTPS"), tea.String("GET"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAlertingMetricRuleResources(request *DescribeAlertingMetricRuleResourcesRequest) (_result *DescribeAlertingMetricRuleResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAlertingMetricRuleResourcesResponse{}
	_body, _err := client.DescribeAlertingMetricRuleResourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DisableActiveMetricRuleWithOptions(request *DisableActiveMetricRuleRequest, runtime *util.RuntimeOptions) (_result *DisableActiveMetricRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DisableActiveMetricRuleResponse{}
	_body, _err := client.DoRequest(tea.String("DisableActiveMetricRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DisableActiveMetricRule(request *DisableActiveMetricRuleRequest) (_result *DisableActiveMetricRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DisableActiveMetricRuleResponse{}
	_body, _err := client.DisableActiveMetricRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeActiveMetricRuleListWithOptions(request *DescribeActiveMetricRuleListRequest, runtime *util.RuntimeOptions) (_result *DescribeActiveMetricRuleListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeActiveMetricRuleListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeActiveMetricRuleList"), tea.String("HTTPS"), tea.String("GET"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeActiveMetricRuleList(request *DescribeActiveMetricRuleListRequest) (_result *DescribeActiveMetricRuleListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeActiveMetricRuleListResponse{}
	_body, _err := client.DescribeActiveMetricRuleListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeProductsOfActiveMetricRuleWithOptions(request *DescribeProductsOfActiveMetricRuleRequest, runtime *util.RuntimeOptions) (_result *DescribeProductsOfActiveMetricRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeProductsOfActiveMetricRuleResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeProductsOfActiveMetricRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeProductsOfActiveMetricRule(request *DescribeProductsOfActiveMetricRuleRequest) (_result *DescribeProductsOfActiveMetricRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeProductsOfActiveMetricRuleResponse{}
	_body, _err := client.DescribeProductsOfActiveMetricRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) EnableActiveMetricRuleWithOptions(request *EnableActiveMetricRuleRequest, runtime *util.RuntimeOptions) (_result *EnableActiveMetricRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &EnableActiveMetricRuleResponse{}
	_body, _err := client.DoRequest(tea.String("EnableActiveMetricRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) EnableActiveMetricRule(request *EnableActiveMetricRuleRequest) (_result *EnableActiveMetricRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &EnableActiveMetricRuleResponse{}
	_body, _err := client.EnableActiveMetricRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMonitorGroupInstanceAttributeWithOptions(request *DescribeMonitorGroupInstanceAttributeRequest, runtime *util.RuntimeOptions) (_result *DescribeMonitorGroupInstanceAttributeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMonitorGroupInstanceAttributeResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMonitorGroupInstanceAttribute"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMonitorGroupInstanceAttribute(request *DescribeMonitorGroupInstanceAttributeRequest) (_result *DescribeMonitorGroupInstanceAttributeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMonitorGroupInstanceAttributeResponse{}
	_body, _err := client.DescribeMonitorGroupInstanceAttributeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMonitorGroupNotifyPolicyListWithOptions(request *DescribeMonitorGroupNotifyPolicyListRequest, runtime *util.RuntimeOptions) (_result *DescribeMonitorGroupNotifyPolicyListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMonitorGroupNotifyPolicyListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMonitorGroupNotifyPolicyList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMonitorGroupNotifyPolicyList(request *DescribeMonitorGroupNotifyPolicyListRequest) (_result *DescribeMonitorGroupNotifyPolicyListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMonitorGroupNotifyPolicyListResponse{}
	_body, _err := client.DescribeMonitorGroupNotifyPolicyListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteMonitorGroupWithOptions(request *DeleteMonitorGroupRequest, runtime *util.RuntimeOptions) (_result *DeleteMonitorGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteMonitorGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteMonitorGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteMonitorGroup(request *DeleteMonitorGroupRequest) (_result *DeleteMonitorGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteMonitorGroupResponse{}
	_body, _err := client.DeleteMonitorGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateMonitorGroupWithOptions(request *CreateMonitorGroupRequest, runtime *util.RuntimeOptions) (_result *CreateMonitorGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateMonitorGroupResponse{}
	_body, _err := client.DoRequest(tea.String("CreateMonitorGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateMonitorGroup(request *CreateMonitorGroupRequest) (_result *CreateMonitorGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateMonitorGroupResponse{}
	_body, _err := client.CreateMonitorGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMonitorGroupsWithOptions(request *DescribeMonitorGroupsRequest, runtime *util.RuntimeOptions) (_result *DescribeMonitorGroupsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMonitorGroupsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMonitorGroups"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMonitorGroups(request *DescribeMonitorGroupsRequest) (_result *DescribeMonitorGroupsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMonitorGroupsResponse{}
	_body, _err := client.DescribeMonitorGroupsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteMonitorGroupNotifyPolicyWithOptions(request *DeleteMonitorGroupNotifyPolicyRequest, runtime *util.RuntimeOptions) (_result *DeleteMonitorGroupNotifyPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteMonitorGroupNotifyPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteMonitorGroupNotifyPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteMonitorGroupNotifyPolicy(request *DeleteMonitorGroupNotifyPolicyRequest) (_result *DeleteMonitorGroupNotifyPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteMonitorGroupNotifyPolicyResponse{}
	_body, _err := client.DeleteMonitorGroupNotifyPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMonitorGroupDynamicRulesWithOptions(request *DescribeMonitorGroupDynamicRulesRequest, runtime *util.RuntimeOptions) (_result *DescribeMonitorGroupDynamicRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMonitorGroupDynamicRulesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMonitorGroupDynamicRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMonitorGroupDynamicRules(request *DescribeMonitorGroupDynamicRulesRequest) (_result *DescribeMonitorGroupDynamicRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMonitorGroupDynamicRulesResponse{}
	_body, _err := client.DescribeMonitorGroupDynamicRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateMonitorGroupInstancesWithOptions(request *CreateMonitorGroupInstancesRequest, runtime *util.RuntimeOptions) (_result *CreateMonitorGroupInstancesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateMonitorGroupInstancesResponse{}
	_body, _err := client.DoRequest(tea.String("CreateMonitorGroupInstances"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateMonitorGroupInstances(request *CreateMonitorGroupInstancesRequest) (_result *CreateMonitorGroupInstancesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateMonitorGroupInstancesResponse{}
	_body, _err := client.CreateMonitorGroupInstancesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateMonitorGroupNotifyPolicyWithOptions(request *CreateMonitorGroupNotifyPolicyRequest, runtime *util.RuntimeOptions) (_result *CreateMonitorGroupNotifyPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateMonitorGroupNotifyPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("CreateMonitorGroupNotifyPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateMonitorGroupNotifyPolicy(request *CreateMonitorGroupNotifyPolicyRequest) (_result *CreateMonitorGroupNotifyPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateMonitorGroupNotifyPolicyResponse{}
	_body, _err := client.CreateMonitorGroupNotifyPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteMonitorGroupInstancesWithOptions(request *DeleteMonitorGroupInstancesRequest, runtime *util.RuntimeOptions) (_result *DeleteMonitorGroupInstancesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteMonitorGroupInstancesResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteMonitorGroupInstances"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteMonitorGroupInstances(request *DeleteMonitorGroupInstancesRequest) (_result *DeleteMonitorGroupInstancesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteMonitorGroupInstancesResponse{}
	_body, _err := client.DeleteMonitorGroupInstancesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteMonitorGroupDynamicRuleWithOptions(request *DeleteMonitorGroupDynamicRuleRequest, runtime *util.RuntimeOptions) (_result *DeleteMonitorGroupDynamicRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteMonitorGroupDynamicRuleResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteMonitorGroupDynamicRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteMonitorGroupDynamicRule(request *DeleteMonitorGroupDynamicRuleRequest) (_result *DeleteMonitorGroupDynamicRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteMonitorGroupDynamicRuleResponse{}
	_body, _err := client.DeleteMonitorGroupDynamicRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutMonitorGroupDynamicRuleWithOptions(request *PutMonitorGroupDynamicRuleRequest, runtime *util.RuntimeOptions) (_result *PutMonitorGroupDynamicRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutMonitorGroupDynamicRuleResponse{}
	_body, _err := client.DoRequest(tea.String("PutMonitorGroupDynamicRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutMonitorGroupDynamicRule(request *PutMonitorGroupDynamicRuleRequest) (_result *PutMonitorGroupDynamicRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutMonitorGroupDynamicRuleResponse{}
	_body, _err := client.PutMonitorGroupDynamicRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMonitorGroupInstancesWithOptions(request *DescribeMonitorGroupInstancesRequest, runtime *util.RuntimeOptions) (_result *DescribeMonitorGroupInstancesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMonitorGroupInstancesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMonitorGroupInstances"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMonitorGroupInstances(request *DescribeMonitorGroupInstancesRequest) (_result *DescribeMonitorGroupInstancesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMonitorGroupInstancesResponse{}
	_body, _err := client.DescribeMonitorGroupInstancesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMonitorGroupCategoriesWithOptions(request *DescribeMonitorGroupCategoriesRequest, runtime *util.RuntimeOptions) (_result *DescribeMonitorGroupCategoriesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMonitorGroupCategoriesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMonitorGroupCategories"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMonitorGroupCategories(request *DescribeMonitorGroupCategoriesRequest) (_result *DescribeMonitorGroupCategoriesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMonitorGroupCategoriesResponse{}
	_body, _err := client.DescribeMonitorGroupCategoriesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyMonitorGroupWithOptions(request *ModifyMonitorGroupRequest, runtime *util.RuntimeOptions) (_result *ModifyMonitorGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyMonitorGroupResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyMonitorGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyMonitorGroup(request *ModifyMonitorGroupRequest) (_result *ModifyMonitorGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyMonitorGroupResponse{}
	_body, _err := client.ModifyMonitorGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMetricRuleListWithOptions(request *DescribeMetricRuleListRequest, runtime *util.RuntimeOptions) (_result *DescribeMetricRuleListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMetricRuleListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMetricRuleList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMetricRuleList(request *DescribeMetricRuleListRequest) (_result *DescribeMetricRuleListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMetricRuleListResponse{}
	_body, _err := client.DescribeMetricRuleListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutResourceMetricRuleWithOptions(request *PutResourceMetricRuleRequest, runtime *util.RuntimeOptions) (_result *PutResourceMetricRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutResourceMetricRuleResponse{}
	_body, _err := client.DoRequest(tea.String("PutResourceMetricRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutResourceMetricRule(request *PutResourceMetricRuleRequest) (_result *PutResourceMetricRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutResourceMetricRuleResponse{}
	_body, _err := client.PutResourceMetricRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutGroupMetricRuleWithOptions(request *PutGroupMetricRuleRequest, runtime *util.RuntimeOptions) (_result *PutGroupMetricRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutGroupMetricRuleResponse{}
	_body, _err := client.DoRequest(tea.String("PutGroupMetricRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutGroupMetricRule(request *PutGroupMetricRuleRequest) (_result *PutGroupMetricRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutGroupMetricRuleResponse{}
	_body, _err := client.PutGroupMetricRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) EnableMetricRulesWithOptions(request *EnableMetricRulesRequest, runtime *util.RuntimeOptions) (_result *EnableMetricRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &EnableMetricRulesResponse{}
	_body, _err := client.DoRequest(tea.String("EnableMetricRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) EnableMetricRules(request *EnableMetricRulesRequest) (_result *EnableMetricRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &EnableMetricRulesResponse{}
	_body, _err := client.EnableMetricRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMetricRuleCountWithOptions(request *DescribeMetricRuleCountRequest, runtime *util.RuntimeOptions) (_result *DescribeMetricRuleCountResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMetricRuleCountResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMetricRuleCount"), tea.String("HTTPS"), tea.String("GET"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMetricRuleCount(request *DescribeMetricRuleCountRequest) (_result *DescribeMetricRuleCountResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMetricRuleCountResponse{}
	_body, _err := client.DescribeMetricRuleCountWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateGroupMetricRulesWithOptions(request *CreateGroupMetricRulesRequest, runtime *util.RuntimeOptions) (_result *CreateGroupMetricRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateGroupMetricRulesResponse{}
	_body, _err := client.DoRequest(tea.String("CreateGroupMetricRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateGroupMetricRules(request *CreateGroupMetricRulesRequest) (_result *CreateGroupMetricRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateGroupMetricRulesResponse{}
	_body, _err := client.CreateGroupMetricRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DisableMetricRulesWithOptions(request *DisableMetricRulesRequest, runtime *util.RuntimeOptions) (_result *DisableMetricRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DisableMetricRulesResponse{}
	_body, _err := client.DoRequest(tea.String("DisableMetricRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DisableMetricRules(request *DisableMetricRulesRequest) (_result *DisableMetricRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DisableMetricRulesResponse{}
	_body, _err := client.DisableMetricRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteMetricRulesWithOptions(request *DeleteMetricRulesRequest, runtime *util.RuntimeOptions) (_result *DeleteMetricRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteMetricRulesResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteMetricRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteMetricRules(request *DeleteMetricRulesRequest) (_result *DeleteMetricRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteMetricRulesResponse{}
	_body, _err := client.DeleteMetricRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyMetricRuleTemplateWithOptions(request *ModifyMetricRuleTemplateRequest, runtime *util.RuntimeOptions) (_result *ModifyMetricRuleTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyMetricRuleTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyMetricRuleTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyMetricRuleTemplate(request *ModifyMetricRuleTemplateRequest) (_result *ModifyMetricRuleTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyMetricRuleTemplateResponse{}
	_body, _err := client.ModifyMetricRuleTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ApplyMetricRuleTemplateWithOptions(request *ApplyMetricRuleTemplateRequest, runtime *util.RuntimeOptions) (_result *ApplyMetricRuleTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ApplyMetricRuleTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("ApplyMetricRuleTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ApplyMetricRuleTemplate(request *ApplyMetricRuleTemplateRequest) (_result *ApplyMetricRuleTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ApplyMetricRuleTemplateResponse{}
	_body, _err := client.ApplyMetricRuleTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMetricRuleTemplateAttributeWithOptions(request *DescribeMetricRuleTemplateAttributeRequest, runtime *util.RuntimeOptions) (_result *DescribeMetricRuleTemplateAttributeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMetricRuleTemplateAttributeResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMetricRuleTemplateAttribute"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMetricRuleTemplateAttribute(request *DescribeMetricRuleTemplateAttributeRequest) (_result *DescribeMetricRuleTemplateAttributeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMetricRuleTemplateAttributeResponse{}
	_body, _err := client.DescribeMetricRuleTemplateAttributeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateMetricRuleTemplateWithOptions(request *CreateMetricRuleTemplateRequest, runtime *util.RuntimeOptions) (_result *CreateMetricRuleTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateMetricRuleTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("CreateMetricRuleTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateMetricRuleTemplate(request *CreateMetricRuleTemplateRequest) (_result *CreateMetricRuleTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateMetricRuleTemplateResponse{}
	_body, _err := client.CreateMetricRuleTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteMetricRuleTemplateWithOptions(request *DeleteMetricRuleTemplateRequest, runtime *util.RuntimeOptions) (_result *DeleteMetricRuleTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteMetricRuleTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteMetricRuleTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteMetricRuleTemplate(request *DeleteMetricRuleTemplateRequest) (_result *DeleteMetricRuleTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteMetricRuleTemplateResponse{}
	_body, _err := client.DeleteMetricRuleTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMetricRuleTemplateListWithOptions(request *DescribeMetricRuleTemplateListRequest, runtime *util.RuntimeOptions) (_result *DescribeMetricRuleTemplateListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMetricRuleTemplateListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMetricRuleTemplateList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMetricRuleTemplateList(request *DescribeMetricRuleTemplateListRequest) (_result *DescribeMetricRuleTemplateListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMetricRuleTemplateListResponse{}
	_body, _err := client.DescribeMetricRuleTemplateListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutCustomEventWithOptions(request *PutCustomEventRequest, runtime *util.RuntimeOptions) (_result *PutCustomEventResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutCustomEventResponse{}
	_body, _err := client.DoRequest(tea.String("PutCustomEvent"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutCustomEvent(request *PutCustomEventRequest) (_result *PutCustomEventResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutCustomEventResponse{}
	_body, _err := client.PutCustomEventWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeCustomEventCountWithOptions(request *DescribeCustomEventCountRequest, runtime *util.RuntimeOptions) (_result *DescribeCustomEventCountResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeCustomEventCountResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeCustomEventCount"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeCustomEventCount(request *DescribeCustomEventCountRequest) (_result *DescribeCustomEventCountResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeCustomEventCountResponse{}
	_body, _err := client.DescribeCustomEventCountWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeCustomEventAttributeWithOptions(request *DescribeCustomEventAttributeRequest, runtime *util.RuntimeOptions) (_result *DescribeCustomEventAttributeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeCustomEventAttributeResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeCustomEventAttribute"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeCustomEventAttribute(request *DescribeCustomEventAttributeRequest) (_result *DescribeCustomEventAttributeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeCustomEventAttributeResponse{}
	_body, _err := client.DescribeCustomEventAttributeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeCustomEventHistogramWithOptions(request *DescribeCustomEventHistogramRequest, runtime *util.RuntimeOptions) (_result *DescribeCustomEventHistogramResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeCustomEventHistogramResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeCustomEventHistogram"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeCustomEventHistogram(request *DescribeCustomEventHistogramRequest) (_result *DescribeCustomEventHistogramResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeCustomEventHistogramResponse{}
	_body, _err := client.DescribeCustomEventHistogramWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteCustomMetricWithOptions(request *DeleteCustomMetricRequest, runtime *util.RuntimeOptions) (_result *DeleteCustomMetricResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteCustomMetricResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteCustomMetric"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteCustomMetric(request *DeleteCustomMetricRequest) (_result *DeleteCustomMetricResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteCustomMetricResponse{}
	_body, _err := client.DeleteCustomMetricWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeCustomMetricListWithOptions(request *DescribeCustomMetricListRequest, runtime *util.RuntimeOptions) (_result *DescribeCustomMetricListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeCustomMetricListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeCustomMetricList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeCustomMetricList(request *DescribeCustomMetricListRequest) (_result *DescribeCustomMetricListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeCustomMetricListResponse{}
	_body, _err := client.DescribeCustomMetricListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutCustomMetricWithOptions(request *PutCustomMetricRequest, runtime *util.RuntimeOptions) (_result *PutCustomMetricResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutCustomMetricResponse{}
	_body, _err := client.DoRequest(tea.String("PutCustomMetric"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutCustomMetric(request *PutCustomMetricRequest) (_result *PutCustomMetricResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutCustomMetricResponse{}
	_body, _err := client.PutCustomMetricWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeEventRuleAttributeWithOptions(request *DescribeEventRuleAttributeRequest, runtime *util.RuntimeOptions) (_result *DescribeEventRuleAttributeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeEventRuleAttributeResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeEventRuleAttribute"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeEventRuleAttribute(request *DescribeEventRuleAttributeRequest) (_result *DescribeEventRuleAttributeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeEventRuleAttributeResponse{}
	_body, _err := client.DescribeEventRuleAttributeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteContactGroupWithOptions(request *DeleteContactGroupRequest, runtime *util.RuntimeOptions) (_result *DeleteContactGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteContactGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteContactGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteContactGroup(request *DeleteContactGroupRequest) (_result *DeleteContactGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteContactGroupResponse{}
	_body, _err := client.DeleteContactGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeContactListWithOptions(request *DescribeContactListRequest, runtime *util.RuntimeOptions) (_result *DescribeContactListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeContactListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeContactList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeContactList(request *DescribeContactListRequest) (_result *DescribeContactListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeContactListResponse{}
	_body, _err := client.DescribeContactListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeContactListByContactGroupWithOptions(request *DescribeContactListByContactGroupRequest, runtime *util.RuntimeOptions) (_result *DescribeContactListByContactGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeContactListByContactGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeContactListByContactGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeContactListByContactGroup(request *DescribeContactListByContactGroupRequest) (_result *DescribeContactListByContactGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeContactListByContactGroupResponse{}
	_body, _err := client.DescribeContactListByContactGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteContactWithOptions(request *DeleteContactRequest, runtime *util.RuntimeOptions) (_result *DeleteContactResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteContactResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteContact"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteContact(request *DeleteContactRequest) (_result *DeleteContactResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteContactResponse{}
	_body, _err := client.DeleteContactWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutContactGroupWithOptions(request *PutContactGroupRequest, runtime *util.RuntimeOptions) (_result *PutContactGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutContactGroupResponse{}
	_body, _err := client.DoRequest(tea.String("PutContactGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutContactGroup(request *PutContactGroupRequest) (_result *PutContactGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutContactGroupResponse{}
	_body, _err := client.PutContactGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutContactWithOptions(request *PutContactRequest, runtime *util.RuntimeOptions) (_result *PutContactResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutContactResponse{}
	_body, _err := client.DoRequest(tea.String("PutContact"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutContact(request *PutContactRequest) (_result *PutContactResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutContactResponse{}
	_body, _err := client.PutContactWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeContactGroupListWithOptions(request *DescribeContactGroupListRequest, runtime *util.RuntimeOptions) (_result *DescribeContactGroupListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeContactGroupListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeContactGroupList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeContactGroupList(request *DescribeContactGroupListRequest) (_result *DescribeContactGroupListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeContactGroupListResponse{}
	_body, _err := client.DescribeContactGroupListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutEventRuleTargetsWithOptions(request *PutEventRuleTargetsRequest, runtime *util.RuntimeOptions) (_result *PutEventRuleTargetsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutEventRuleTargetsResponse{}
	_body, _err := client.DoRequest(tea.String("PutEventRuleTargets"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutEventRuleTargets(request *PutEventRuleTargetsRequest) (_result *PutEventRuleTargetsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutEventRuleTargetsResponse{}
	_body, _err := client.PutEventRuleTargetsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteEventRuleTargetsWithOptions(request *DeleteEventRuleTargetsRequest, runtime *util.RuntimeOptions) (_result *DeleteEventRuleTargetsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteEventRuleTargetsResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteEventRuleTargets"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteEventRuleTargets(request *DeleteEventRuleTargetsRequest) (_result *DeleteEventRuleTargetsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteEventRuleTargetsResponse{}
	_body, _err := client.DeleteEventRuleTargetsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DisableEventRulesWithOptions(request *DisableEventRulesRequest, runtime *util.RuntimeOptions) (_result *DisableEventRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DisableEventRulesResponse{}
	_body, _err := client.DoRequest(tea.String("DisableEventRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DisableEventRules(request *DisableEventRulesRequest) (_result *DisableEventRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DisableEventRulesResponse{}
	_body, _err := client.DisableEventRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeEventRuleTargetListWithOptions(request *DescribeEventRuleTargetListRequest, runtime *util.RuntimeOptions) (_result *DescribeEventRuleTargetListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeEventRuleTargetListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeEventRuleTargetList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeEventRuleTargetList(request *DescribeEventRuleTargetListRequest) (_result *DescribeEventRuleTargetListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeEventRuleTargetListResponse{}
	_body, _err := client.DescribeEventRuleTargetListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteEventRulesWithOptions(request *DeleteEventRulesRequest, runtime *util.RuntimeOptions) (_result *DeleteEventRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteEventRulesResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteEventRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteEventRules(request *DeleteEventRulesRequest) (_result *DeleteEventRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteEventRulesResponse{}
	_body, _err := client.DeleteEventRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) EnableEventRulesWithOptions(request *EnableEventRulesRequest, runtime *util.RuntimeOptions) (_result *EnableEventRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &EnableEventRulesResponse{}
	_body, _err := client.DoRequest(tea.String("EnableEventRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) EnableEventRules(request *EnableEventRulesRequest) (_result *EnableEventRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &EnableEventRulesResponse{}
	_body, _err := client.EnableEventRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutEventRuleWithOptions(request *PutEventRuleRequest, runtime *util.RuntimeOptions) (_result *PutEventRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutEventRuleResponse{}
	_body, _err := client.DoRequest(tea.String("PutEventRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutEventRule(request *PutEventRuleRequest) (_result *PutEventRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutEventRuleResponse{}
	_body, _err := client.PutEventRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeEventRuleListWithOptions(request *DescribeEventRuleListRequest, runtime *util.RuntimeOptions) (_result *DescribeEventRuleListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeEventRuleListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeEventRuleList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeEventRuleList(request *DescribeEventRuleListRequest) (_result *DescribeEventRuleListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeEventRuleListResponse{}
	_body, _err := client.DescribeEventRuleListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSystemEventAttributeWithOptions(request *DescribeSystemEventAttributeRequest, runtime *util.RuntimeOptions) (_result *DescribeSystemEventAttributeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSystemEventAttributeResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSystemEventAttribute"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSystemEventAttribute(request *DescribeSystemEventAttributeRequest) (_result *DescribeSystemEventAttributeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSystemEventAttributeResponse{}
	_body, _err := client.DescribeSystemEventAttributeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSystemEventHistogramWithOptions(request *DescribeSystemEventHistogramRequest, runtime *util.RuntimeOptions) (_result *DescribeSystemEventHistogramResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSystemEventHistogramResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSystemEventHistogram"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSystemEventHistogram(request *DescribeSystemEventHistogramRequest) (_result *DescribeSystemEventHistogramResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSystemEventHistogramResponse{}
	_body, _err := client.DescribeSystemEventHistogramWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSystemEventCountWithOptions(request *DescribeSystemEventCountRequest, runtime *util.RuntimeOptions) (_result *DescribeSystemEventCountResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSystemEventCountResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSystemEventCount"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSystemEventCount(request *DescribeSystemEventCountRequest) (_result *DescribeSystemEventCountResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSystemEventCountResponse{}
	_body, _err := client.DescribeSystemEventCountWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSystemEventMetaListWithOptions(request *DescribeSystemEventMetaListRequest, runtime *util.RuntimeOptions) (_result *DescribeSystemEventMetaListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSystemEventMetaListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSystemEventMetaList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSystemEventMetaList(request *DescribeSystemEventMetaListRequest) (_result *DescribeSystemEventMetaListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSystemEventMetaListResponse{}
	_body, _err := client.DescribeSystemEventMetaListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMonitoringAgentProcessesWithOptions(request *DescribeMonitoringAgentProcessesRequest, runtime *util.RuntimeOptions) (_result *DescribeMonitoringAgentProcessesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMonitoringAgentProcessesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMonitoringAgentProcesses"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMonitoringAgentProcesses(request *DescribeMonitoringAgentProcessesRequest) (_result *DescribeMonitoringAgentProcessesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMonitoringAgentProcessesResponse{}
	_body, _err := client.DescribeMonitoringAgentProcessesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UninstallMonitoringAgentWithOptions(request *UninstallMonitoringAgentRequest, runtime *util.RuntimeOptions) (_result *UninstallMonitoringAgentResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UninstallMonitoringAgentResponse{}
	_body, _err := client.DoRequest(tea.String("UninstallMonitoringAgent"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UninstallMonitoringAgent(request *UninstallMonitoringAgentRequest) (_result *UninstallMonitoringAgentResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UninstallMonitoringAgentResponse{}
	_body, _err := client.UninstallMonitoringAgentWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMonitoringAgentAccessKeyWithOptions(request *DescribeMonitoringAgentAccessKeyRequest, runtime *util.RuntimeOptions) (_result *DescribeMonitoringAgentAccessKeyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMonitoringAgentAccessKeyResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMonitoringAgentAccessKey"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMonitoringAgentAccessKey(request *DescribeMonitoringAgentAccessKeyRequest) (_result *DescribeMonitoringAgentAccessKeyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMonitoringAgentAccessKeyResponse{}
	_body, _err := client.DescribeMonitoringAgentAccessKeyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) InstallMonitoringAgentWithOptions(request *InstallMonitoringAgentRequest, runtime *util.RuntimeOptions) (_result *InstallMonitoringAgentResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &InstallMonitoringAgentResponse{}
	_body, _err := client.DoRequest(tea.String("InstallMonitoringAgent"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) InstallMonitoringAgent(request *InstallMonitoringAgentRequest) (_result *InstallMonitoringAgentResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &InstallMonitoringAgentResponse{}
	_body, _err := client.InstallMonitoringAgentWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SendDryRunSystemEventWithOptions(request *SendDryRunSystemEventRequest, runtime *util.RuntimeOptions) (_result *SendDryRunSystemEventResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SendDryRunSystemEventResponse{}
	_body, _err := client.DoRequest(tea.String("SendDryRunSystemEvent"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SendDryRunSystemEvent(request *SendDryRunSystemEventRequest) (_result *SendDryRunSystemEventResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SendDryRunSystemEventResponse{}
	_body, _err := client.SendDryRunSystemEventWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateMonitoringAgentProcessWithOptions(request *CreateMonitoringAgentProcessRequest, runtime *util.RuntimeOptions) (_result *CreateMonitoringAgentProcessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateMonitoringAgentProcessResponse{}
	_body, _err := client.DoRequest(tea.String("CreateMonitoringAgentProcess"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateMonitoringAgentProcess(request *CreateMonitoringAgentProcessRequest) (_result *CreateMonitoringAgentProcessResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateMonitoringAgentProcessResponse{}
	_body, _err := client.CreateMonitoringAgentProcessWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMonitoringAgentConfigWithOptions(request *DescribeMonitoringAgentConfigRequest, runtime *util.RuntimeOptions) (_result *DescribeMonitoringAgentConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMonitoringAgentConfigResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMonitoringAgentConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMonitoringAgentConfig(request *DescribeMonitoringAgentConfigRequest) (_result *DescribeMonitoringAgentConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMonitoringAgentConfigResponse{}
	_body, _err := client.DescribeMonitoringAgentConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteMonitoringAgentProcessWithOptions(request *DeleteMonitoringAgentProcessRequest, runtime *util.RuntimeOptions) (_result *DeleteMonitoringAgentProcessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteMonitoringAgentProcessResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteMonitoringAgentProcess"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteMonitoringAgentProcess(request *DeleteMonitoringAgentProcessRequest) (_result *DeleteMonitoringAgentProcessResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteMonitoringAgentProcessResponse{}
	_body, _err := client.DeleteMonitoringAgentProcessWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMonitoringAgentHostsWithOptions(request *DescribeMonitoringAgentHostsRequest, runtime *util.RuntimeOptions) (_result *DescribeMonitoringAgentHostsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMonitoringAgentHostsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMonitoringAgentHosts"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMonitoringAgentHosts(request *DescribeMonitoringAgentHostsRequest) (_result *DescribeMonitoringAgentHostsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMonitoringAgentHostsResponse{}
	_body, _err := client.DescribeMonitoringAgentHostsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSiteMonitorDataWithOptions(request *DescribeSiteMonitorDataRequest, runtime *util.RuntimeOptions) (_result *DescribeSiteMonitorDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSiteMonitorDataResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSiteMonitorData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSiteMonitorData(request *DescribeSiteMonitorDataRequest) (_result *DescribeSiteMonitorDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSiteMonitorDataResponse{}
	_body, _err := client.DescribeSiteMonitorDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifySiteMonitorWithOptions(request *ModifySiteMonitorRequest, runtime *util.RuntimeOptions) (_result *ModifySiteMonitorResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifySiteMonitorResponse{}
	_body, _err := client.DoRequest(tea.String("ModifySiteMonitor"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifySiteMonitor(request *ModifySiteMonitorRequest) (_result *ModifySiteMonitorResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifySiteMonitorResponse{}
	_body, _err := client.ModifySiteMonitorWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSiteMonitorISPCityListWithOptions(request *DescribeSiteMonitorISPCityListRequest, runtime *util.RuntimeOptions) (_result *DescribeSiteMonitorISPCityListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSiteMonitorISPCityListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSiteMonitorISPCityList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSiteMonitorISPCityList(request *DescribeSiteMonitorISPCityListRequest) (_result *DescribeSiteMonitorISPCityListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSiteMonitorISPCityListResponse{}
	_body, _err := client.DescribeSiteMonitorISPCityListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSiteMonitorQuotaWithOptions(request *DescribeSiteMonitorQuotaRequest, runtime *util.RuntimeOptions) (_result *DescribeSiteMonitorQuotaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSiteMonitorQuotaResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSiteMonitorQuota"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSiteMonitorQuota(request *DescribeSiteMonitorQuotaRequest) (_result *DescribeSiteMonitorQuotaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSiteMonitorQuotaResponse{}
	_body, _err := client.DescribeSiteMonitorQuotaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSiteMonitorStatisticsWithOptions(request *DescribeSiteMonitorStatisticsRequest, runtime *util.RuntimeOptions) (_result *DescribeSiteMonitorStatisticsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSiteMonitorStatisticsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSiteMonitorStatistics"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSiteMonitorStatistics(request *DescribeSiteMonitorStatisticsRequest) (_result *DescribeSiteMonitorStatisticsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSiteMonitorStatisticsResponse{}
	_body, _err := client.DescribeSiteMonitorStatisticsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) EnableSiteMonitorsWithOptions(request *EnableSiteMonitorsRequest, runtime *util.RuntimeOptions) (_result *EnableSiteMonitorsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &EnableSiteMonitorsResponse{}
	_body, _err := client.DoRequest(tea.String("EnableSiteMonitors"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) EnableSiteMonitors(request *EnableSiteMonitorsRequest) (_result *EnableSiteMonitorsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &EnableSiteMonitorsResponse{}
	_body, _err := client.EnableSiteMonitorsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSiteMonitorAttributeWithOptions(request *DescribeSiteMonitorAttributeRequest, runtime *util.RuntimeOptions) (_result *DescribeSiteMonitorAttributeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSiteMonitorAttributeResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSiteMonitorAttribute"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSiteMonitorAttribute(request *DescribeSiteMonitorAttributeRequest) (_result *DescribeSiteMonitorAttributeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSiteMonitorAttributeResponse{}
	_body, _err := client.DescribeSiteMonitorAttributeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSiteMonitorListWithOptions(request *DescribeSiteMonitorListRequest, runtime *util.RuntimeOptions) (_result *DescribeSiteMonitorListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSiteMonitorListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSiteMonitorList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSiteMonitorList(request *DescribeSiteMonitorListRequest) (_result *DescribeSiteMonitorListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSiteMonitorListResponse{}
	_body, _err := client.DescribeSiteMonitorListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteSiteMonitorsWithOptions(request *DeleteSiteMonitorsRequest, runtime *util.RuntimeOptions) (_result *DeleteSiteMonitorsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteSiteMonitorsResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteSiteMonitors"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteSiteMonitors(request *DeleteSiteMonitorsRequest) (_result *DeleteSiteMonitorsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteSiteMonitorsResponse{}
	_body, _err := client.DeleteSiteMonitorsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DisableSiteMonitorsWithOptions(request *DisableSiteMonitorsRequest, runtime *util.RuntimeOptions) (_result *DisableSiteMonitorsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DisableSiteMonitorsResponse{}
	_body, _err := client.DoRequest(tea.String("DisableSiteMonitors"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DisableSiteMonitors(request *DisableSiteMonitorsRequest) (_result *DisableSiteMonitorsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DisableSiteMonitorsResponse{}
	_body, _err := client.DisableSiteMonitorsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateSiteMonitorWithOptions(request *CreateSiteMonitorRequest, runtime *util.RuntimeOptions) (_result *CreateSiteMonitorResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateSiteMonitorResponse{}
	_body, _err := client.DoRequest(tea.String("CreateSiteMonitor"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateSiteMonitor(request *CreateSiteMonitorRequest) (_result *CreateSiteMonitorResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateSiteMonitorResponse{}
	_body, _err := client.CreateSiteMonitorWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeProjectMetaWithOptions(request *DescribeProjectMetaRequest, runtime *util.RuntimeOptions) (_result *DescribeProjectMetaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeProjectMetaResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeProjectMeta"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeProjectMeta(request *DescribeProjectMetaRequest) (_result *DescribeProjectMetaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeProjectMetaResponse{}
	_body, _err := client.DescribeProjectMetaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMetricListWithOptions(request *DescribeMetricListRequest, runtime *util.RuntimeOptions) (_result *DescribeMetricListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMetricListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMetricList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMetricList(request *DescribeMetricListRequest) (_result *DescribeMetricListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMetricListResponse{}
	_body, _err := client.DescribeMetricListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMetricMetaListWithOptions(request *DescribeMetricMetaListRequest, runtime *util.RuntimeOptions) (_result *DescribeMetricMetaListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMetricMetaListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMetricMetaList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMetricMetaList(request *DescribeMetricMetaListRequest) (_result *DescribeMetricMetaListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMetricMetaListResponse{}
	_body, _err := client.DescribeMetricMetaListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMetricTopWithOptions(request *DescribeMetricTopRequest, runtime *util.RuntimeOptions) (_result *DescribeMetricTopResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMetricTopResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMetricTop"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMetricTop(request *DescribeMetricTopRequest) (_result *DescribeMetricTopResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMetricTopResponse{}
	_body, _err := client.DescribeMetricTopWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMetricDataWithOptions(request *DescribeMetricDataRequest, runtime *util.RuntimeOptions) (_result *DescribeMetricDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMetricDataResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMetricData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMetricData(request *DescribeMetricDataRequest) (_result *DescribeMetricDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMetricDataResponse{}
	_body, _err := client.DescribeMetricDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMetricLastWithOptions(request *DescribeMetricLastRequest, runtime *util.RuntimeOptions) (_result *DescribeMetricLastResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMetricLastResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMetricLast"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMetricLast(request *DescribeMetricLastRequest) (_result *DescribeMetricLastResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMetricLastResponse{}
	_body, _err := client.DescribeMetricLastWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) EnableHostAvailabilityWithOptions(request *EnableHostAvailabilityRequest, runtime *util.RuntimeOptions) (_result *EnableHostAvailabilityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &EnableHostAvailabilityResponse{}
	_body, _err := client.DoRequest(tea.String("EnableHostAvailability"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) EnableHostAvailability(request *EnableHostAvailabilityRequest) (_result *EnableHostAvailabilityResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &EnableHostAvailabilityResponse{}
	_body, _err := client.EnableHostAvailabilityWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyHostAvailabilityWithOptions(request *ModifyHostAvailabilityRequest, runtime *util.RuntimeOptions) (_result *ModifyHostAvailabilityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyHostAvailabilityResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyHostAvailability"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyHostAvailability(request *ModifyHostAvailabilityRequest) (_result *ModifyHostAvailabilityResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyHostAvailabilityResponse{}
	_body, _err := client.ModifyHostAvailabilityWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DisableHostAvailabilityWithOptions(request *DisableHostAvailabilityRequest, runtime *util.RuntimeOptions) (_result *DisableHostAvailabilityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DisableHostAvailabilityResponse{}
	_body, _err := client.DoRequest(tea.String("DisableHostAvailability"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DisableHostAvailability(request *DisableHostAvailabilityRequest) (_result *DisableHostAvailabilityResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DisableHostAvailabilityResponse{}
	_body, _err := client.DisableHostAvailabilityWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeUnhealthyHostAvailabilityWithOptions(request *DescribeUnhealthyHostAvailabilityRequest, runtime *util.RuntimeOptions) (_result *DescribeUnhealthyHostAvailabilityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeUnhealthyHostAvailabilityResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeUnhealthyHostAvailability"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeUnhealthyHostAvailability(request *DescribeUnhealthyHostAvailabilityRequest) (_result *DescribeUnhealthyHostAvailabilityResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeUnhealthyHostAvailabilityResponse{}
	_body, _err := client.DescribeUnhealthyHostAvailabilityWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateHostAvailabilityWithOptions(request *CreateHostAvailabilityRequest, runtime *util.RuntimeOptions) (_result *CreateHostAvailabilityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateHostAvailabilityResponse{}
	_body, _err := client.DoRequest(tea.String("CreateHostAvailability"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateHostAvailability(request *CreateHostAvailabilityRequest) (_result *CreateHostAvailabilityResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateHostAvailabilityResponse{}
	_body, _err := client.CreateHostAvailabilityWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeHostAvailabilityListWithOptions(request *DescribeHostAvailabilityListRequest, runtime *util.RuntimeOptions) (_result *DescribeHostAvailabilityListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeHostAvailabilityListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeHostAvailabilityList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeHostAvailabilityList(request *DescribeHostAvailabilityListRequest) (_result *DescribeHostAvailabilityListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeHostAvailabilityListResponse{}
	_body, _err := client.DescribeHostAvailabilityListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteHostAvailabilityWithOptions(request *DeleteHostAvailabilityRequest, runtime *util.RuntimeOptions) (_result *DeleteHostAvailabilityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteHostAvailabilityResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteHostAvailability"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteHostAvailability(request *DeleteHostAvailabilityRequest) (_result *DeleteHostAvailabilityResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteHostAvailabilityResponse{}
	_body, _err := client.DeleteHostAvailabilityWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMonitoringConfigWithOptions(request *DescribeMonitoringConfigRequest, runtime *util.RuntimeOptions) (_result *DescribeMonitoringConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMonitoringConfigResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMonitoringConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMonitoringConfig(request *DescribeMonitoringConfigRequest) (_result *DescribeMonitoringConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMonitoringConfigResponse{}
	_body, _err := client.DescribeMonitoringConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutMonitoringConfigWithOptions(request *PutMonitoringConfigRequest, runtime *util.RuntimeOptions) (_result *PutMonitoringConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutMonitoringConfigResponse{}
	_body, _err := client.DoRequest(tea.String("PutMonitoringConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-01-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutMonitoringConfig(request *PutMonitoringConfigRequest) (_result *PutMonitoringConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutMonitoringConfigResponse{}
	_body, _err := client.PutMonitoringConfigWithOptions(request, runtime)
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
