// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type GetMultipleTraceRequest struct {
	RegionId *string   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	TraceIDs []*string `json:"TraceIDs,omitempty" xml:"TraceIDs,omitempty" type:"Repeated"`
}

func (s GetMultipleTraceRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMultipleTraceRequest) GoString() string {
	return s.String()
}

func (s *GetMultipleTraceRequest) SetRegionId(v string) *GetMultipleTraceRequest {
	s.RegionId = &v
	return s
}

func (s *GetMultipleTraceRequest) SetTraceIDs(v []*string) *GetMultipleTraceRequest {
	s.TraceIDs = v
	return s
}

type GetMultipleTraceResponse struct {
	RequestId           *string                                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MultiCallChainInfos []*GetMultipleTraceResponseMultiCallChainInfos `json:"MultiCallChainInfos,omitempty" xml:"MultiCallChainInfos,omitempty" require:"true" type:"Repeated"`
}

func (s GetMultipleTraceResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMultipleTraceResponse) GoString() string {
	return s.String()
}

func (s *GetMultipleTraceResponse) SetRequestId(v string) *GetMultipleTraceResponse {
	s.RequestId = &v
	return s
}

func (s *GetMultipleTraceResponse) SetMultiCallChainInfos(v []*GetMultipleTraceResponseMultiCallChainInfos) *GetMultipleTraceResponse {
	s.MultiCallChainInfos = v
	return s
}

type GetMultipleTraceResponseMultiCallChainInfos struct {
	TraceID *string                                             `json:"TraceID,omitempty" xml:"TraceID,omitempty" require:"true"`
	Spans   []*GetMultipleTraceResponseMultiCallChainInfosSpans `json:"Spans,omitempty" xml:"Spans,omitempty" require:"true" type:"Repeated"`
}

func (s GetMultipleTraceResponseMultiCallChainInfos) String() string {
	return tea.Prettify(s)
}

func (s GetMultipleTraceResponseMultiCallChainInfos) GoString() string {
	return s.String()
}

func (s *GetMultipleTraceResponseMultiCallChainInfos) SetTraceID(v string) *GetMultipleTraceResponseMultiCallChainInfos {
	s.TraceID = &v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfos) SetSpans(v []*GetMultipleTraceResponseMultiCallChainInfosSpans) *GetMultipleTraceResponseMultiCallChainInfos {
	s.Spans = v
	return s
}

type GetMultipleTraceResponseMultiCallChainInfosSpans struct {
	TraceID       *string                                                         `json:"TraceID,omitempty" xml:"TraceID,omitempty" require:"true"`
	OperationName *string                                                         `json:"OperationName,omitempty" xml:"OperationName,omitempty" require:"true"`
	Duration      *int64                                                          `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	ServiceName   *string                                                         `json:"ServiceName,omitempty" xml:"ServiceName,omitempty" require:"true"`
	ServiceIp     *string                                                         `json:"ServiceIp,omitempty" xml:"ServiceIp,omitempty" require:"true"`
	Timestamp     *int64                                                          `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	RpcId         *string                                                         `json:"RpcId,omitempty" xml:"RpcId,omitempty" require:"true"`
	ResultCode    *string                                                         `json:"ResultCode,omitempty" xml:"ResultCode,omitempty" require:"true"`
	HaveStack     *bool                                                           `json:"HaveStack,omitempty" xml:"HaveStack,omitempty" require:"true"`
	RpcType       *int                                                            `json:"RpcType,omitempty" xml:"RpcType,omitempty" require:"true"`
	TagEntryList  []*GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList `json:"TagEntryList,omitempty" xml:"TagEntryList,omitempty" require:"true" type:"Repeated"`
	LogEventList  []*GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList `json:"LogEventList,omitempty" xml:"LogEventList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMultipleTraceResponseMultiCallChainInfosSpans) String() string {
	return tea.Prettify(s)
}

func (s GetMultipleTraceResponseMultiCallChainInfosSpans) GoString() string {
	return s.String()
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpans) SetTraceID(v string) *GetMultipleTraceResponseMultiCallChainInfosSpans {
	s.TraceID = &v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpans) SetOperationName(v string) *GetMultipleTraceResponseMultiCallChainInfosSpans {
	s.OperationName = &v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpans) SetDuration(v int64) *GetMultipleTraceResponseMultiCallChainInfosSpans {
	s.Duration = &v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpans) SetServiceName(v string) *GetMultipleTraceResponseMultiCallChainInfosSpans {
	s.ServiceName = &v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpans) SetServiceIp(v string) *GetMultipleTraceResponseMultiCallChainInfosSpans {
	s.ServiceIp = &v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpans) SetTimestamp(v int64) *GetMultipleTraceResponseMultiCallChainInfosSpans {
	s.Timestamp = &v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpans) SetRpcId(v string) *GetMultipleTraceResponseMultiCallChainInfosSpans {
	s.RpcId = &v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpans) SetResultCode(v string) *GetMultipleTraceResponseMultiCallChainInfosSpans {
	s.ResultCode = &v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpans) SetHaveStack(v bool) *GetMultipleTraceResponseMultiCallChainInfosSpans {
	s.HaveStack = &v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpans) SetRpcType(v int) *GetMultipleTraceResponseMultiCallChainInfosSpans {
	s.RpcType = &v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpans) SetTagEntryList(v []*GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList) *GetMultipleTraceResponseMultiCallChainInfosSpans {
	s.TagEntryList = v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpans) SetLogEventList(v []*GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList) *GetMultipleTraceResponseMultiCallChainInfosSpans {
	s.LogEventList = v
	return s
}

type GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList) String() string {
	return tea.Prettify(s)
}

func (s GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList) GoString() string {
	return s.String()
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList) SetKey(v string) *GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList {
	s.Key = &v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList) SetValue(v string) *GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList {
	s.Value = &v
	return s
}

type GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList struct {
	Timestamp    *int64                                                                      `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	TagEntryList []*GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList `json:"TagEntryList,omitempty" xml:"TagEntryList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList) String() string {
	return tea.Prettify(s)
}

func (s GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList) GoString() string {
	return s.String()
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList) SetTimestamp(v int64) *GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList {
	s.Timestamp = &v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList) SetTagEntryList(v []*GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList) *GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList {
	s.TagEntryList = v
	return s
}

type GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList) String() string {
	return tea.Prettify(s)
}

func (s GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList) GoString() string {
	return s.String()
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList) SetKey(v string) *GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList {
	s.Key = &v
	return s
}

func (s *GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList) SetValue(v string) *GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList {
	s.Value = &v
	return s
}

type SearchTracesByPageRequest struct {
	StartTime        *int64                                       `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime          *int64                                       `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	RegionId         *string                                      `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ServiceName      *string                                      `json:"ServiceName,omitempty" xml:"ServiceName,omitempty"`
	OperationName    *string                                      `json:"OperationName,omitempty" xml:"OperationName,omitempty"`
	MinDuration      *int64                                       `json:"MinDuration,omitempty" xml:"MinDuration,omitempty"`
	ServiceIp        *string                                      `json:"ServiceIp,omitempty" xml:"ServiceIp,omitempty"`
	ExclusionFilters []*SearchTracesByPageRequestExclusionFilters `json:"ExclusionFilters,omitempty" xml:"ExclusionFilters,omitempty" type:"Repeated"`
	PageNumber       *int                                         `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize         *int                                         `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s SearchTracesByPageRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchTracesByPageRequest) GoString() string {
	return s.String()
}

func (s *SearchTracesByPageRequest) SetStartTime(v int64) *SearchTracesByPageRequest {
	s.StartTime = &v
	return s
}

func (s *SearchTracesByPageRequest) SetEndTime(v int64) *SearchTracesByPageRequest {
	s.EndTime = &v
	return s
}

func (s *SearchTracesByPageRequest) SetRegionId(v string) *SearchTracesByPageRequest {
	s.RegionId = &v
	return s
}

func (s *SearchTracesByPageRequest) SetServiceName(v string) *SearchTracesByPageRequest {
	s.ServiceName = &v
	return s
}

func (s *SearchTracesByPageRequest) SetOperationName(v string) *SearchTracesByPageRequest {
	s.OperationName = &v
	return s
}

func (s *SearchTracesByPageRequest) SetMinDuration(v int64) *SearchTracesByPageRequest {
	s.MinDuration = &v
	return s
}

func (s *SearchTracesByPageRequest) SetServiceIp(v string) *SearchTracesByPageRequest {
	s.ServiceIp = &v
	return s
}

func (s *SearchTracesByPageRequest) SetExclusionFilters(v []*SearchTracesByPageRequestExclusionFilters) *SearchTracesByPageRequest {
	s.ExclusionFilters = v
	return s
}

func (s *SearchTracesByPageRequest) SetPageNumber(v int) *SearchTracesByPageRequest {
	s.PageNumber = &v
	return s
}

func (s *SearchTracesByPageRequest) SetPageSize(v int) *SearchTracesByPageRequest {
	s.PageSize = &v
	return s
}

type SearchTracesByPageRequestExclusionFilters struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s SearchTracesByPageRequestExclusionFilters) String() string {
	return tea.Prettify(s)
}

func (s SearchTracesByPageRequestExclusionFilters) GoString() string {
	return s.String()
}

func (s *SearchTracesByPageRequestExclusionFilters) SetKey(v string) *SearchTracesByPageRequestExclusionFilters {
	s.Key = &v
	return s
}

func (s *SearchTracesByPageRequestExclusionFilters) SetValue(v string) *SearchTracesByPageRequestExclusionFilters {
	s.Value = &v
	return s
}

type SearchTracesByPageResponse struct {
	RequestId *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageBean  *SearchTracesByPageResponsePageBean `json:"PageBean,omitempty" xml:"PageBean,omitempty" require:"true" type:"Struct"`
}

func (s SearchTracesByPageResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchTracesByPageResponse) GoString() string {
	return s.String()
}

func (s *SearchTracesByPageResponse) SetRequestId(v string) *SearchTracesByPageResponse {
	s.RequestId = &v
	return s
}

func (s *SearchTracesByPageResponse) SetPageBean(v *SearchTracesByPageResponsePageBean) *SearchTracesByPageResponse {
	s.PageBean = v
	return s
}

type SearchTracesByPageResponsePageBean struct {
	Total      *int                                            `json:"Total,omitempty" xml:"Total,omitempty" require:"true"`
	PageNumber *int                                            `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                            `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TraceInfos []*SearchTracesByPageResponsePageBeanTraceInfos `json:"TraceInfos,omitempty" xml:"TraceInfos,omitempty" require:"true" type:"Repeated"`
}

func (s SearchTracesByPageResponsePageBean) String() string {
	return tea.Prettify(s)
}

func (s SearchTracesByPageResponsePageBean) GoString() string {
	return s.String()
}

func (s *SearchTracesByPageResponsePageBean) SetTotal(v int) *SearchTracesByPageResponsePageBean {
	s.Total = &v
	return s
}

func (s *SearchTracesByPageResponsePageBean) SetPageNumber(v int) *SearchTracesByPageResponsePageBean {
	s.PageNumber = &v
	return s
}

func (s *SearchTracesByPageResponsePageBean) SetPageSize(v int) *SearchTracesByPageResponsePageBean {
	s.PageSize = &v
	return s
}

func (s *SearchTracesByPageResponsePageBean) SetTraceInfos(v []*SearchTracesByPageResponsePageBeanTraceInfos) *SearchTracesByPageResponsePageBean {
	s.TraceInfos = v
	return s
}

type SearchTracesByPageResponsePageBeanTraceInfos struct {
	TraceID       *string `json:"TraceID,omitempty" xml:"TraceID,omitempty" require:"true"`
	OperationName *string `json:"OperationName,omitempty" xml:"OperationName,omitempty" require:"true"`
	ServiceName   *string `json:"ServiceName,omitempty" xml:"ServiceName,omitempty" require:"true"`
	ServiceIp     *string `json:"ServiceIp,omitempty" xml:"ServiceIp,omitempty" require:"true"`
	Duration      *int64  `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Timestamp     *int64  `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
}

func (s SearchTracesByPageResponsePageBeanTraceInfos) String() string {
	return tea.Prettify(s)
}

func (s SearchTracesByPageResponsePageBeanTraceInfos) GoString() string {
	return s.String()
}

func (s *SearchTracesByPageResponsePageBeanTraceInfos) SetTraceID(v string) *SearchTracesByPageResponsePageBeanTraceInfos {
	s.TraceID = &v
	return s
}

func (s *SearchTracesByPageResponsePageBeanTraceInfos) SetOperationName(v string) *SearchTracesByPageResponsePageBeanTraceInfos {
	s.OperationName = &v
	return s
}

func (s *SearchTracesByPageResponsePageBeanTraceInfos) SetServiceName(v string) *SearchTracesByPageResponsePageBeanTraceInfos {
	s.ServiceName = &v
	return s
}

func (s *SearchTracesByPageResponsePageBeanTraceInfos) SetServiceIp(v string) *SearchTracesByPageResponsePageBeanTraceInfos {
	s.ServiceIp = &v
	return s
}

func (s *SearchTracesByPageResponsePageBeanTraceInfos) SetDuration(v int64) *SearchTracesByPageResponsePageBeanTraceInfos {
	s.Duration = &v
	return s
}

func (s *SearchTracesByPageResponsePageBeanTraceInfos) SetTimestamp(v int64) *SearchTracesByPageResponsePageBeanTraceInfos {
	s.Timestamp = &v
	return s
}

type GetStackRequest struct {
	TraceID  *string `json:"TraceID,omitempty" xml:"TraceID,omitempty" require:"true"`
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	RpcID    *string `json:"RpcID,omitempty" xml:"RpcID,omitempty"`
}

func (s GetStackRequest) String() string {
	return tea.Prettify(s)
}

func (s GetStackRequest) GoString() string {
	return s.String()
}

func (s *GetStackRequest) SetTraceID(v string) *GetStackRequest {
	s.TraceID = &v
	return s
}

func (s *GetStackRequest) SetRegionId(v string) *GetStackRequest {
	s.RegionId = &v
	return s
}

func (s *GetStackRequest) SetRpcID(v string) *GetStackRequest {
	s.RpcID = &v
	return s
}

type GetStackResponse struct {
	RequestId *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StackInfo []*GetStackResponseStackInfo `json:"StackInfo,omitempty" xml:"StackInfo,omitempty" require:"true" type:"Repeated"`
}

func (s GetStackResponse) String() string {
	return tea.Prettify(s)
}

func (s GetStackResponse) GoString() string {
	return s.String()
}

func (s *GetStackResponse) SetRequestId(v string) *GetStackResponse {
	s.RequestId = &v
	return s
}

func (s *GetStackResponse) SetStackInfo(v []*GetStackResponseStackInfo) *GetStackResponse {
	s.StackInfo = v
	return s
}

type GetStackResponseStackInfo struct {
	StartTime   *int64                              `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	Duration    *int64                              `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	RpcId       *string                             `json:"RpcId,omitempty" xml:"RpcId,omitempty" require:"true"`
	ServiceName *string                             `json:"ServiceName,omitempty" xml:"ServiceName,omitempty" require:"true"`
	Api         *string                             `json:"Api,omitempty" xml:"Api,omitempty" require:"true"`
	Exception   *string                             `json:"Exception,omitempty" xml:"Exception,omitempty" require:"true"`
	Line        *string                             `json:"Line,omitempty" xml:"Line,omitempty" require:"true"`
	ExtInfo     []*GetStackResponseStackInfoExtInfo `json:"ExtInfo,omitempty" xml:"ExtInfo,omitempty" require:"true" type:"Repeated"`
}

func (s GetStackResponseStackInfo) String() string {
	return tea.Prettify(s)
}

func (s GetStackResponseStackInfo) GoString() string {
	return s.String()
}

func (s *GetStackResponseStackInfo) SetStartTime(v int64) *GetStackResponseStackInfo {
	s.StartTime = &v
	return s
}

func (s *GetStackResponseStackInfo) SetDuration(v int64) *GetStackResponseStackInfo {
	s.Duration = &v
	return s
}

func (s *GetStackResponseStackInfo) SetRpcId(v string) *GetStackResponseStackInfo {
	s.RpcId = &v
	return s
}

func (s *GetStackResponseStackInfo) SetServiceName(v string) *GetStackResponseStackInfo {
	s.ServiceName = &v
	return s
}

func (s *GetStackResponseStackInfo) SetApi(v string) *GetStackResponseStackInfo {
	s.Api = &v
	return s
}

func (s *GetStackResponseStackInfo) SetException(v string) *GetStackResponseStackInfo {
	s.Exception = &v
	return s
}

func (s *GetStackResponseStackInfo) SetLine(v string) *GetStackResponseStackInfo {
	s.Line = &v
	return s
}

func (s *GetStackResponseStackInfo) SetExtInfo(v []*GetStackResponseStackInfoExtInfo) *GetStackResponseStackInfo {
	s.ExtInfo = v
	return s
}

type GetStackResponseStackInfoExtInfo struct {
	Type *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Info *string `json:"Info,omitempty" xml:"Info,omitempty" require:"true"`
}

func (s GetStackResponseStackInfoExtInfo) String() string {
	return tea.Prettify(s)
}

func (s GetStackResponseStackInfoExtInfo) GoString() string {
	return s.String()
}

func (s *GetStackResponseStackInfoExtInfo) SetType(v string) *GetStackResponseStackInfoExtInfo {
	s.Type = &v
	return s
}

func (s *GetStackResponseStackInfoExtInfo) SetInfo(v string) *GetStackResponseStackInfoExtInfo {
	s.Info = &v
	return s
}

type DescribeTraceLocationRequest struct {
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty"`
}

func (s DescribeTraceLocationRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeTraceLocationRequest) GoString() string {
	return s.String()
}

func (s *DescribeTraceLocationRequest) SetRegionId(v string) *DescribeTraceLocationRequest {
	s.RegionId = &v
	return s
}

type DescribeTraceLocationResponse struct {
	RequestId     *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RegionConfigs []*DescribeTraceLocationResponseRegionConfigs `json:"RegionConfigs,omitempty" xml:"RegionConfigs,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeTraceLocationResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeTraceLocationResponse) GoString() string {
	return s.String()
}

func (s *DescribeTraceLocationResponse) SetRequestId(v string) *DescribeTraceLocationResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeTraceLocationResponse) SetRegionConfigs(v []*DescribeTraceLocationResponseRegionConfigs) *DescribeTraceLocationResponse {
	s.RegionConfigs = v
	return s
}

type DescribeTraceLocationResponseRegionConfigs struct {
	RegionNo *string `json:"RegionNo,omitempty" xml:"RegionNo,omitempty" require:"true"`
	Url      *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s DescribeTraceLocationResponseRegionConfigs) String() string {
	return tea.Prettify(s)
}

func (s DescribeTraceLocationResponseRegionConfigs) GoString() string {
	return s.String()
}

func (s *DescribeTraceLocationResponseRegionConfigs) SetRegionNo(v string) *DescribeTraceLocationResponseRegionConfigs {
	s.RegionNo = &v
	return s
}

func (s *DescribeTraceLocationResponseRegionConfigs) SetUrl(v string) *DescribeTraceLocationResponseRegionConfigs {
	s.Url = &v
	return s
}

type DeleteTraceAppRequest struct {
	AppId    *string `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Type     *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
}

func (s DeleteTraceAppRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteTraceAppRequest) GoString() string {
	return s.String()
}

func (s *DeleteTraceAppRequest) SetAppId(v string) *DeleteTraceAppRequest {
	s.AppId = &v
	return s
}

func (s *DeleteTraceAppRequest) SetRegionId(v string) *DeleteTraceAppRequest {
	s.RegionId = &v
	return s
}

func (s *DeleteTraceAppRequest) SetType(v string) *DeleteTraceAppRequest {
	s.Type = &v
	return s
}

type DeleteTraceAppResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s DeleteTraceAppResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteTraceAppResponse) GoString() string {
	return s.String()
}

func (s *DeleteTraceAppResponse) SetRequestId(v string) *DeleteTraceAppResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteTraceAppResponse) SetData(v string) *DeleteTraceAppResponse {
	s.Data = &v
	return s
}

type DescribeTraceLicenseKeyRequest struct {
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty"`
}

func (s DescribeTraceLicenseKeyRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeTraceLicenseKeyRequest) GoString() string {
	return s.String()
}

func (s *DescribeTraceLicenseKeyRequest) SetRegionId(v string) *DescribeTraceLicenseKeyRequest {
	s.RegionId = &v
	return s
}

type DescribeTraceLicenseKeyResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	LicenseKey *string `json:"LicenseKey,omitempty" xml:"LicenseKey,omitempty" require:"true"`
}

func (s DescribeTraceLicenseKeyResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeTraceLicenseKeyResponse) GoString() string {
	return s.String()
}

func (s *DescribeTraceLicenseKeyResponse) SetRequestId(v string) *DescribeTraceLicenseKeyResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeTraceLicenseKeyResponse) SetLicenseKey(v string) *DescribeTraceLicenseKeyResponse {
	s.LicenseKey = &v
	return s
}

type ConfigAppRequest struct {
	AppIds   *string `json:"AppIds,omitempty" xml:"AppIds,omitempty" require:"true"`
	Enable   *bool   `json:"Enable,omitempty" xml:"Enable,omitempty"`
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s ConfigAppRequest) String() string {
	return tea.Prettify(s)
}

func (s ConfigAppRequest) GoString() string {
	return s.String()
}

func (s *ConfigAppRequest) SetAppIds(v string) *ConfigAppRequest {
	s.AppIds = &v
	return s
}

func (s *ConfigAppRequest) SetEnable(v bool) *ConfigAppRequest {
	s.Enable = &v
	return s
}

func (s *ConfigAppRequest) SetRegionId(v string) *ConfigAppRequest {
	s.RegionId = &v
	return s
}

type ConfigAppResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s ConfigAppResponse) String() string {
	return tea.Prettify(s)
}

func (s ConfigAppResponse) GoString() string {
	return s.String()
}

func (s *ConfigAppResponse) SetRequestId(v string) *ConfigAppResponse {
	s.RequestId = &v
	return s
}

func (s *ConfigAppResponse) SetData(v string) *ConfigAppResponse {
	s.Data = &v
	return s
}

type CheckServiceLinkedRoleForDeletingRequest struct {
	RoleArn        *string `json:"RoleArn,omitempty" xml:"RoleArn,omitempty" require:"true"`
	ServiceName    *string `json:"ServiceName,omitempty" xml:"ServiceName,omitempty" require:"true"`
	SPIRegionId    *string `json:"SPIRegionId,omitempty" xml:"SPIRegionId,omitempty" require:"true"`
	DeletionTaskId *string `json:"DeletionTaskId,omitempty" xml:"DeletionTaskId,omitempty" require:"true"`
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty"`
}

func (s CheckServiceLinkedRoleForDeletingRequest) String() string {
	return tea.Prettify(s)
}

func (s CheckServiceLinkedRoleForDeletingRequest) GoString() string {
	return s.String()
}

func (s *CheckServiceLinkedRoleForDeletingRequest) SetRoleArn(v string) *CheckServiceLinkedRoleForDeletingRequest {
	s.RoleArn = &v
	return s
}

func (s *CheckServiceLinkedRoleForDeletingRequest) SetServiceName(v string) *CheckServiceLinkedRoleForDeletingRequest {
	s.ServiceName = &v
	return s
}

func (s *CheckServiceLinkedRoleForDeletingRequest) SetSPIRegionId(v string) *CheckServiceLinkedRoleForDeletingRequest {
	s.SPIRegionId = &v
	return s
}

func (s *CheckServiceLinkedRoleForDeletingRequest) SetDeletionTaskId(v string) *CheckServiceLinkedRoleForDeletingRequest {
	s.DeletionTaskId = &v
	return s
}

func (s *CheckServiceLinkedRoleForDeletingRequest) SetRegionId(v string) *CheckServiceLinkedRoleForDeletingRequest {
	s.RegionId = &v
	return s
}

type CheckServiceLinkedRoleForDeletingResponse struct {
	RequestId  *string                                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Deletable  *bool                                                  `json:"Deletable,omitempty" xml:"Deletable,omitempty" require:"true"`
	RoleUsages []*CheckServiceLinkedRoleForDeletingResponseRoleUsages `json:"RoleUsages,omitempty" xml:"RoleUsages,omitempty" require:"true" type:"Repeated"`
}

func (s CheckServiceLinkedRoleForDeletingResponse) String() string {
	return tea.Prettify(s)
}

func (s CheckServiceLinkedRoleForDeletingResponse) GoString() string {
	return s.String()
}

func (s *CheckServiceLinkedRoleForDeletingResponse) SetRequestId(v string) *CheckServiceLinkedRoleForDeletingResponse {
	s.RequestId = &v
	return s
}

func (s *CheckServiceLinkedRoleForDeletingResponse) SetDeletable(v bool) *CheckServiceLinkedRoleForDeletingResponse {
	s.Deletable = &v
	return s
}

func (s *CheckServiceLinkedRoleForDeletingResponse) SetRoleUsages(v []*CheckServiceLinkedRoleForDeletingResponseRoleUsages) *CheckServiceLinkedRoleForDeletingResponse {
	s.RoleUsages = v
	return s
}

type CheckServiceLinkedRoleForDeletingResponseRoleUsages struct {
	Region    *string   `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
	Resources []*string `json:"Resources,omitempty" xml:"Resources,omitempty" require:"true" type:"Repeated"`
}

func (s CheckServiceLinkedRoleForDeletingResponseRoleUsages) String() string {
	return tea.Prettify(s)
}

func (s CheckServiceLinkedRoleForDeletingResponseRoleUsages) GoString() string {
	return s.String()
}

func (s *CheckServiceLinkedRoleForDeletingResponseRoleUsages) SetRegion(v string) *CheckServiceLinkedRoleForDeletingResponseRoleUsages {
	s.Region = &v
	return s
}

func (s *CheckServiceLinkedRoleForDeletingResponseRoleUsages) SetResources(v []*string) *CheckServiceLinkedRoleForDeletingResponseRoleUsages {
	s.Resources = v
	return s
}

type ListDashboardsRequest struct {
	RegionId  *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ClusterId *string `json:"ClusterId,omitempty" xml:"ClusterId,omitempty" require:"true"`
}

func (s ListDashboardsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListDashboardsRequest) GoString() string {
	return s.String()
}

func (s *ListDashboardsRequest) SetRegionId(v string) *ListDashboardsRequest {
	s.RegionId = &v
	return s
}

func (s *ListDashboardsRequest) SetClusterId(v string) *ListDashboardsRequest {
	s.ClusterId = &v
	return s
}

type ListDashboardsResponse struct {
	RequestId    *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DashboardVos []*ListDashboardsResponseDashboardVos `json:"DashboardVos,omitempty" xml:"DashboardVos,omitempty" require:"true" type:"Repeated"`
}

func (s ListDashboardsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListDashboardsResponse) GoString() string {
	return s.String()
}

func (s *ListDashboardsResponse) SetRequestId(v string) *ListDashboardsResponse {
	s.RequestId = &v
	return s
}

func (s *ListDashboardsResponse) SetDashboardVos(v []*ListDashboardsResponseDashboardVos) *ListDashboardsResponse {
	s.DashboardVos = v
	return s
}

type ListDashboardsResponseDashboardVos struct {
	Id             *string   `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Uid            *string   `json:"Uid,omitempty" xml:"Uid,omitempty" require:"true"`
	Title          *string   `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	Time           *string   `json:"Time,omitempty" xml:"Time,omitempty" require:"true"`
	Url            *string   `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
	Type           *string   `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Exporter       *string   `json:"Exporter,omitempty" xml:"Exporter,omitempty" require:"true"`
	IsArmsExporter *bool     `json:"IsArmsExporter,omitempty" xml:"IsArmsExporter,omitempty" require:"true"`
	Tags           []*string `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Repeated"`
}

func (s ListDashboardsResponseDashboardVos) String() string {
	return tea.Prettify(s)
}

func (s ListDashboardsResponseDashboardVos) GoString() string {
	return s.String()
}

func (s *ListDashboardsResponseDashboardVos) SetId(v string) *ListDashboardsResponseDashboardVos {
	s.Id = &v
	return s
}

func (s *ListDashboardsResponseDashboardVos) SetUid(v string) *ListDashboardsResponseDashboardVos {
	s.Uid = &v
	return s
}

func (s *ListDashboardsResponseDashboardVos) SetTitle(v string) *ListDashboardsResponseDashboardVos {
	s.Title = &v
	return s
}

func (s *ListDashboardsResponseDashboardVos) SetTime(v string) *ListDashboardsResponseDashboardVos {
	s.Time = &v
	return s
}

func (s *ListDashboardsResponseDashboardVos) SetUrl(v string) *ListDashboardsResponseDashboardVos {
	s.Url = &v
	return s
}

func (s *ListDashboardsResponseDashboardVos) SetType(v string) *ListDashboardsResponseDashboardVos {
	s.Type = &v
	return s
}

func (s *ListDashboardsResponseDashboardVos) SetExporter(v string) *ListDashboardsResponseDashboardVos {
	s.Exporter = &v
	return s
}

func (s *ListDashboardsResponseDashboardVos) SetIsArmsExporter(v bool) *ListDashboardsResponseDashboardVos {
	s.IsArmsExporter = &v
	return s
}

func (s *ListDashboardsResponseDashboardVos) SetTags(v []*string) *ListDashboardsResponseDashboardVos {
	s.Tags = v
	return s
}

type GetConsistencySnapshotRequest struct {
	CurrentTimestamp *int64  `json:"CurrentTimestamp,omitempty" xml:"CurrentTimestamp,omitempty"`
	RegionId         *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ProxyUserId      *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	Pid              *string `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
	AppType          *string `json:"AppType,omitempty" xml:"AppType,omitempty" require:"true"`
}

func (s GetConsistencySnapshotRequest) String() string {
	return tea.Prettify(s)
}

func (s GetConsistencySnapshotRequest) GoString() string {
	return s.String()
}

func (s *GetConsistencySnapshotRequest) SetCurrentTimestamp(v int64) *GetConsistencySnapshotRequest {
	s.CurrentTimestamp = &v
	return s
}

func (s *GetConsistencySnapshotRequest) SetRegionId(v string) *GetConsistencySnapshotRequest {
	s.RegionId = &v
	return s
}

func (s *GetConsistencySnapshotRequest) SetProxyUserId(v string) *GetConsistencySnapshotRequest {
	s.ProxyUserId = &v
	return s
}

func (s *GetConsistencySnapshotRequest) SetPid(v string) *GetConsistencySnapshotRequest {
	s.Pid = &v
	return s
}

func (s *GetConsistencySnapshotRequest) SetAppType(v string) *GetConsistencySnapshotRequest {
	s.AppType = &v
	return s
}

type GetConsistencySnapshotResponse struct {
	RequestId                *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ConsistencyResultJsonStr *string `json:"ConsistencyResultJsonStr,omitempty" xml:"ConsistencyResultJsonStr,omitempty" require:"true"`
}

func (s GetConsistencySnapshotResponse) String() string {
	return tea.Prettify(s)
}

func (s GetConsistencySnapshotResponse) GoString() string {
	return s.String()
}

func (s *GetConsistencySnapshotResponse) SetRequestId(v string) *GetConsistencySnapshotResponse {
	s.RequestId = &v
	return s
}

func (s *GetConsistencySnapshotResponse) SetConsistencyResultJsonStr(v string) *GetConsistencySnapshotResponse {
	s.ConsistencyResultJsonStr = &v
	return s
}

type CheckDataConsistencyRequest struct {
	CurrentTimestamp *int64  `json:"CurrentTimestamp,omitempty" xml:"CurrentTimestamp,omitempty"`
	RegionId         *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ProxyUserId      *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	Pid              *string `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
	AppType          *string `json:"AppType,omitempty" xml:"AppType,omitempty" require:"true"`
}

func (s CheckDataConsistencyRequest) String() string {
	return tea.Prettify(s)
}

func (s CheckDataConsistencyRequest) GoString() string {
	return s.String()
}

func (s *CheckDataConsistencyRequest) SetCurrentTimestamp(v int64) *CheckDataConsistencyRequest {
	s.CurrentTimestamp = &v
	return s
}

func (s *CheckDataConsistencyRequest) SetRegionId(v string) *CheckDataConsistencyRequest {
	s.RegionId = &v
	return s
}

func (s *CheckDataConsistencyRequest) SetProxyUserId(v string) *CheckDataConsistencyRequest {
	s.ProxyUserId = &v
	return s
}

func (s *CheckDataConsistencyRequest) SetPid(v string) *CheckDataConsistencyRequest {
	s.Pid = &v
	return s
}

func (s *CheckDataConsistencyRequest) SetAppType(v string) *CheckDataConsistencyRequest {
	s.AppType = &v
	return s
}

type CheckDataConsistencyResponse struct {
	RequestId         *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	IsDataConsistency *bool   `json:"IsDataConsistency,omitempty" xml:"IsDataConsistency,omitempty" require:"true"`
}

func (s CheckDataConsistencyResponse) String() string {
	return tea.Prettify(s)
}

func (s CheckDataConsistencyResponse) GoString() string {
	return s.String()
}

func (s *CheckDataConsistencyResponse) SetRequestId(v string) *CheckDataConsistencyResponse {
	s.RequestId = &v
	return s
}

func (s *CheckDataConsistencyResponse) SetIsDataConsistency(v bool) *CheckDataConsistencyResponse {
	s.IsDataConsistency = &v
	return s
}

type AddGrafanaRequest struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ClusterId   *string `json:"ClusterId,omitempty" xml:"ClusterId,omitempty" require:"true"`
	Integration *string `json:"Integration,omitempty" xml:"Integration,omitempty" require:"true"`
}

func (s AddGrafanaRequest) String() string {
	return tea.Prettify(s)
}

func (s AddGrafanaRequest) GoString() string {
	return s.String()
}

func (s *AddGrafanaRequest) SetRegionId(v string) *AddGrafanaRequest {
	s.RegionId = &v
	return s
}

func (s *AddGrafanaRequest) SetClusterId(v string) *AddGrafanaRequest {
	s.ClusterId = &v
	return s
}

func (s *AddGrafanaRequest) SetIntegration(v string) *AddGrafanaRequest {
	s.Integration = &v
	return s
}

type AddGrafanaResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s AddGrafanaResponse) String() string {
	return tea.Prettify(s)
}

func (s AddGrafanaResponse) GoString() string {
	return s.String()
}

func (s *AddGrafanaResponse) SetRequestId(v string) *AddGrafanaResponse {
	s.RequestId = &v
	return s
}

func (s *AddGrafanaResponse) SetData(v string) *AddGrafanaResponse {
	s.Data = &v
	return s
}

type AddIntegrationRequest struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ClusterId   *string `json:"ClusterId,omitempty" xml:"ClusterId,omitempty" require:"true"`
	Integration *string `json:"Integration,omitempty" xml:"Integration,omitempty" require:"true"`
}

func (s AddIntegrationRequest) String() string {
	return tea.Prettify(s)
}

func (s AddIntegrationRequest) GoString() string {
	return s.String()
}

func (s *AddIntegrationRequest) SetRegionId(v string) *AddIntegrationRequest {
	s.RegionId = &v
	return s
}

func (s *AddIntegrationRequest) SetClusterId(v string) *AddIntegrationRequest {
	s.ClusterId = &v
	return s
}

func (s *AddIntegrationRequest) SetIntegration(v string) *AddIntegrationRequest {
	s.Integration = &v
	return s
}

type AddIntegrationResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s AddIntegrationResponse) String() string {
	return tea.Prettify(s)
}

func (s AddIntegrationResponse) GoString() string {
	return s.String()
}

func (s *AddIntegrationResponse) SetRequestId(v string) *AddIntegrationResponse {
	s.RequestId = &v
	return s
}

func (s *AddIntegrationResponse) SetData(v string) *AddIntegrationResponse {
	s.Data = &v
	return s
}

type GetTraceRequest struct {
	TraceID  *string `json:"TraceID,omitempty" xml:"TraceID,omitempty" require:"true"`
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s GetTraceRequest) String() string {
	return tea.Prettify(s)
}

func (s GetTraceRequest) GoString() string {
	return s.String()
}

func (s *GetTraceRequest) SetTraceID(v string) *GetTraceRequest {
	s.TraceID = &v
	return s
}

func (s *GetTraceRequest) SetRegionId(v string) *GetTraceRequest {
	s.RegionId = &v
	return s
}

type GetTraceResponse struct {
	RequestId *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Spans     []*GetTraceResponseSpans `json:"Spans,omitempty" xml:"Spans,omitempty" require:"true" type:"Repeated"`
}

func (s GetTraceResponse) String() string {
	return tea.Prettify(s)
}

func (s GetTraceResponse) GoString() string {
	return s.String()
}

func (s *GetTraceResponse) SetRequestId(v string) *GetTraceResponse {
	s.RequestId = &v
	return s
}

func (s *GetTraceResponse) SetSpans(v []*GetTraceResponseSpans) *GetTraceResponse {
	s.Spans = v
	return s
}

type GetTraceResponseSpans struct {
	TraceID       *string                              `json:"TraceID,omitempty" xml:"TraceID,omitempty" require:"true"`
	OperationName *string                              `json:"OperationName,omitempty" xml:"OperationName,omitempty" require:"true"`
	Duration      *int64                               `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	ServiceName   *string                              `json:"ServiceName,omitempty" xml:"ServiceName,omitempty" require:"true"`
	ServiceIp     *string                              `json:"ServiceIp,omitempty" xml:"ServiceIp,omitempty" require:"true"`
	Timestamp     *int64                               `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	RpcId         *string                              `json:"RpcId,omitempty" xml:"RpcId,omitempty" require:"true"`
	ResultCode    *string                              `json:"ResultCode,omitempty" xml:"ResultCode,omitempty" require:"true"`
	HaveStack     *bool                                `json:"HaveStack,omitempty" xml:"HaveStack,omitempty" require:"true"`
	RpcType       *int                                 `json:"RpcType,omitempty" xml:"RpcType,omitempty" require:"true"`
	TagEntryList  []*GetTraceResponseSpansTagEntryList `json:"TagEntryList,omitempty" xml:"TagEntryList,omitempty" require:"true" type:"Repeated"`
	LogEventList  []*GetTraceResponseSpansLogEventList `json:"LogEventList,omitempty" xml:"LogEventList,omitempty" require:"true" type:"Repeated"`
}

func (s GetTraceResponseSpans) String() string {
	return tea.Prettify(s)
}

func (s GetTraceResponseSpans) GoString() string {
	return s.String()
}

func (s *GetTraceResponseSpans) SetTraceID(v string) *GetTraceResponseSpans {
	s.TraceID = &v
	return s
}

func (s *GetTraceResponseSpans) SetOperationName(v string) *GetTraceResponseSpans {
	s.OperationName = &v
	return s
}

func (s *GetTraceResponseSpans) SetDuration(v int64) *GetTraceResponseSpans {
	s.Duration = &v
	return s
}

func (s *GetTraceResponseSpans) SetServiceName(v string) *GetTraceResponseSpans {
	s.ServiceName = &v
	return s
}

func (s *GetTraceResponseSpans) SetServiceIp(v string) *GetTraceResponseSpans {
	s.ServiceIp = &v
	return s
}

func (s *GetTraceResponseSpans) SetTimestamp(v int64) *GetTraceResponseSpans {
	s.Timestamp = &v
	return s
}

func (s *GetTraceResponseSpans) SetRpcId(v string) *GetTraceResponseSpans {
	s.RpcId = &v
	return s
}

func (s *GetTraceResponseSpans) SetResultCode(v string) *GetTraceResponseSpans {
	s.ResultCode = &v
	return s
}

func (s *GetTraceResponseSpans) SetHaveStack(v bool) *GetTraceResponseSpans {
	s.HaveStack = &v
	return s
}

func (s *GetTraceResponseSpans) SetRpcType(v int) *GetTraceResponseSpans {
	s.RpcType = &v
	return s
}

func (s *GetTraceResponseSpans) SetTagEntryList(v []*GetTraceResponseSpansTagEntryList) *GetTraceResponseSpans {
	s.TagEntryList = v
	return s
}

func (s *GetTraceResponseSpans) SetLogEventList(v []*GetTraceResponseSpansLogEventList) *GetTraceResponseSpans {
	s.LogEventList = v
	return s
}

type GetTraceResponseSpansTagEntryList struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s GetTraceResponseSpansTagEntryList) String() string {
	return tea.Prettify(s)
}

func (s GetTraceResponseSpansTagEntryList) GoString() string {
	return s.String()
}

func (s *GetTraceResponseSpansTagEntryList) SetKey(v string) *GetTraceResponseSpansTagEntryList {
	s.Key = &v
	return s
}

func (s *GetTraceResponseSpansTagEntryList) SetValue(v string) *GetTraceResponseSpansTagEntryList {
	s.Value = &v
	return s
}

type GetTraceResponseSpansLogEventList struct {
	Timestamp    *int64                                           `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	TagEntryList []*GetTraceResponseSpansLogEventListTagEntryList `json:"TagEntryList,omitempty" xml:"TagEntryList,omitempty" require:"true" type:"Repeated"`
}

func (s GetTraceResponseSpansLogEventList) String() string {
	return tea.Prettify(s)
}

func (s GetTraceResponseSpansLogEventList) GoString() string {
	return s.String()
}

func (s *GetTraceResponseSpansLogEventList) SetTimestamp(v int64) *GetTraceResponseSpansLogEventList {
	s.Timestamp = &v
	return s
}

func (s *GetTraceResponseSpansLogEventList) SetTagEntryList(v []*GetTraceResponseSpansLogEventListTagEntryList) *GetTraceResponseSpansLogEventList {
	s.TagEntryList = v
	return s
}

type GetTraceResponseSpansLogEventListTagEntryList struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s GetTraceResponseSpansLogEventListTagEntryList) String() string {
	return tea.Prettify(s)
}

func (s GetTraceResponseSpansLogEventListTagEntryList) GoString() string {
	return s.String()
}

func (s *GetTraceResponseSpansLogEventListTagEntryList) SetKey(v string) *GetTraceResponseSpansLogEventListTagEntryList {
	s.Key = &v
	return s
}

func (s *GetTraceResponseSpansLogEventListTagEntryList) SetValue(v string) *GetTraceResponseSpansLogEventListTagEntryList {
	s.Value = &v
	return s
}

type ListClusterFromGrafanaRequest struct {
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s ListClusterFromGrafanaRequest) String() string {
	return tea.Prettify(s)
}

func (s ListClusterFromGrafanaRequest) GoString() string {
	return s.String()
}

func (s *ListClusterFromGrafanaRequest) SetRegionId(v string) *ListClusterFromGrafanaRequest {
	s.RegionId = &v
	return s
}

type ListClusterFromGrafanaResponse struct {
	RequestId       *string                                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PromClusterList []*ListClusterFromGrafanaResponsePromClusterList `json:"PromClusterList,omitempty" xml:"PromClusterList,omitempty" require:"true" type:"Repeated"`
}

func (s ListClusterFromGrafanaResponse) String() string {
	return tea.Prettify(s)
}

func (s ListClusterFromGrafanaResponse) GoString() string {
	return s.String()
}

func (s *ListClusterFromGrafanaResponse) SetRequestId(v string) *ListClusterFromGrafanaResponse {
	s.RequestId = &v
	return s
}

func (s *ListClusterFromGrafanaResponse) SetPromClusterList(v []*ListClusterFromGrafanaResponsePromClusterList) *ListClusterFromGrafanaResponse {
	s.PromClusterList = v
	return s
}

type ListClusterFromGrafanaResponsePromClusterList struct {
	Id                    *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	ClusterId             *string `json:"ClusterId,omitempty" xml:"ClusterId,omitempty" require:"true"`
	ClusterName           *string `json:"ClusterName,omitempty" xml:"ClusterName,omitempty" require:"true"`
	AgentStatus           *string `json:"AgentStatus,omitempty" xml:"AgentStatus,omitempty" require:"true"`
	ClusterType           *string `json:"ClusterType,omitempty" xml:"ClusterType,omitempty" require:"true"`
	ControllerId          *string `json:"ControllerId,omitempty" xml:"ControllerId,omitempty" require:"true"`
	IsControllerInstalled *bool   `json:"IsControllerInstalled,omitempty" xml:"IsControllerInstalled,omitempty" require:"true"`
	UserId                *string `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	RegionId              *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	PluginsJsonArray      *string `json:"PluginsJsonArray,omitempty" xml:"PluginsJsonArray,omitempty" require:"true"`
	StateJson             *string `json:"StateJson,omitempty" xml:"StateJson,omitempty" require:"true"`
	NodeNum               *int    `json:"NodeNum,omitempty" xml:"NodeNum,omitempty" require:"true"`
	CreateTime            *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	UpdateTime            *int64  `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	LastHeartBeatTime     *int64  `json:"LastHeartBeatTime,omitempty" xml:"LastHeartBeatTime,omitempty" require:"true"`
	InstallTime           *int64  `json:"InstallTime,omitempty" xml:"InstallTime,omitempty" require:"true"`
	Extra                 *string `json:"Extra,omitempty" xml:"Extra,omitempty" require:"true"`
	Options               *string `json:"Options,omitempty" xml:"Options,omitempty" require:"true"`
}

func (s ListClusterFromGrafanaResponsePromClusterList) String() string {
	return tea.Prettify(s)
}

func (s ListClusterFromGrafanaResponsePromClusterList) GoString() string {
	return s.String()
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetId(v int64) *ListClusterFromGrafanaResponsePromClusterList {
	s.Id = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetClusterId(v string) *ListClusterFromGrafanaResponsePromClusterList {
	s.ClusterId = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetClusterName(v string) *ListClusterFromGrafanaResponsePromClusterList {
	s.ClusterName = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetAgentStatus(v string) *ListClusterFromGrafanaResponsePromClusterList {
	s.AgentStatus = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetClusterType(v string) *ListClusterFromGrafanaResponsePromClusterList {
	s.ClusterType = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetControllerId(v string) *ListClusterFromGrafanaResponsePromClusterList {
	s.ControllerId = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetIsControllerInstalled(v bool) *ListClusterFromGrafanaResponsePromClusterList {
	s.IsControllerInstalled = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetUserId(v string) *ListClusterFromGrafanaResponsePromClusterList {
	s.UserId = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetRegionId(v string) *ListClusterFromGrafanaResponsePromClusterList {
	s.RegionId = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetPluginsJsonArray(v string) *ListClusterFromGrafanaResponsePromClusterList {
	s.PluginsJsonArray = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetStateJson(v string) *ListClusterFromGrafanaResponsePromClusterList {
	s.StateJson = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetNodeNum(v int) *ListClusterFromGrafanaResponsePromClusterList {
	s.NodeNum = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetCreateTime(v int64) *ListClusterFromGrafanaResponsePromClusterList {
	s.CreateTime = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetUpdateTime(v int64) *ListClusterFromGrafanaResponsePromClusterList {
	s.UpdateTime = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetLastHeartBeatTime(v int64) *ListClusterFromGrafanaResponsePromClusterList {
	s.LastHeartBeatTime = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetInstallTime(v int64) *ListClusterFromGrafanaResponsePromClusterList {
	s.InstallTime = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetExtra(v string) *ListClusterFromGrafanaResponsePromClusterList {
	s.Extra = &v
	return s
}

func (s *ListClusterFromGrafanaResponsePromClusterList) SetOptions(v string) *ListClusterFromGrafanaResponsePromClusterList {
	s.Options = &v
	return s
}

type SearchTracesRequest struct {
	StartTime        *int64                                 `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime          *int64                                 `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	RegionId         *string                                `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ServiceName      *string                                `json:"ServiceName,omitempty" xml:"ServiceName,omitempty"`
	OperationName    *string                                `json:"OperationName,omitempty" xml:"OperationName,omitempty"`
	MinDuration      *int64                                 `json:"MinDuration,omitempty" xml:"MinDuration,omitempty"`
	Tag              []*SearchTracesRequestTag              `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
	ServiceIp        *string                                `json:"ServiceIp,omitempty" xml:"ServiceIp,omitempty"`
	ExclusionFilters []*SearchTracesRequestExclusionFilters `json:"ExclusionFilters,omitempty" xml:"ExclusionFilters,omitempty" type:"Repeated"`
}

func (s SearchTracesRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchTracesRequest) GoString() string {
	return s.String()
}

func (s *SearchTracesRequest) SetStartTime(v int64) *SearchTracesRequest {
	s.StartTime = &v
	return s
}

func (s *SearchTracesRequest) SetEndTime(v int64) *SearchTracesRequest {
	s.EndTime = &v
	return s
}

func (s *SearchTracesRequest) SetRegionId(v string) *SearchTracesRequest {
	s.RegionId = &v
	return s
}

func (s *SearchTracesRequest) SetServiceName(v string) *SearchTracesRequest {
	s.ServiceName = &v
	return s
}

func (s *SearchTracesRequest) SetOperationName(v string) *SearchTracesRequest {
	s.OperationName = &v
	return s
}

func (s *SearchTracesRequest) SetMinDuration(v int64) *SearchTracesRequest {
	s.MinDuration = &v
	return s
}

func (s *SearchTracesRequest) SetTag(v []*SearchTracesRequestTag) *SearchTracesRequest {
	s.Tag = v
	return s
}

func (s *SearchTracesRequest) SetServiceIp(v string) *SearchTracesRequest {
	s.ServiceIp = &v
	return s
}

func (s *SearchTracesRequest) SetExclusionFilters(v []*SearchTracesRequestExclusionFilters) *SearchTracesRequest {
	s.ExclusionFilters = v
	return s
}

type SearchTracesRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s SearchTracesRequestTag) String() string {
	return tea.Prettify(s)
}

func (s SearchTracesRequestTag) GoString() string {
	return s.String()
}

func (s *SearchTracesRequestTag) SetKey(v string) *SearchTracesRequestTag {
	s.Key = &v
	return s
}

func (s *SearchTracesRequestTag) SetValue(v string) *SearchTracesRequestTag {
	s.Value = &v
	return s
}

type SearchTracesRequestExclusionFilters struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s SearchTracesRequestExclusionFilters) String() string {
	return tea.Prettify(s)
}

func (s SearchTracesRequestExclusionFilters) GoString() string {
	return s.String()
}

func (s *SearchTracesRequestExclusionFilters) SetKey(v string) *SearchTracesRequestExclusionFilters {
	s.Key = &v
	return s
}

func (s *SearchTracesRequestExclusionFilters) SetValue(v string) *SearchTracesRequestExclusionFilters {
	s.Value = &v
	return s
}

type SearchTracesResponse struct {
	RequestId  *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TraceInfos []*SearchTracesResponseTraceInfos `json:"TraceInfos,omitempty" xml:"TraceInfos,omitempty" require:"true" type:"Repeated"`
}

func (s SearchTracesResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchTracesResponse) GoString() string {
	return s.String()
}

func (s *SearchTracesResponse) SetRequestId(v string) *SearchTracesResponse {
	s.RequestId = &v
	return s
}

func (s *SearchTracesResponse) SetTraceInfos(v []*SearchTracesResponseTraceInfos) *SearchTracesResponse {
	s.TraceInfos = v
	return s
}

type SearchTracesResponseTraceInfos struct {
	TraceID       *string `json:"TraceID,omitempty" xml:"TraceID,omitempty" require:"true"`
	OperationName *string `json:"OperationName,omitempty" xml:"OperationName,omitempty" require:"true"`
	ServiceName   *string `json:"ServiceName,omitempty" xml:"ServiceName,omitempty" require:"true"`
	ServiceIp     *string `json:"ServiceIp,omitempty" xml:"ServiceIp,omitempty" require:"true"`
	Duration      *int64  `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Timestamp     *int64  `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
}

func (s SearchTracesResponseTraceInfos) String() string {
	return tea.Prettify(s)
}

func (s SearchTracesResponseTraceInfos) GoString() string {
	return s.String()
}

func (s *SearchTracesResponseTraceInfos) SetTraceID(v string) *SearchTracesResponseTraceInfos {
	s.TraceID = &v
	return s
}

func (s *SearchTracesResponseTraceInfos) SetOperationName(v string) *SearchTracesResponseTraceInfos {
	s.OperationName = &v
	return s
}

func (s *SearchTracesResponseTraceInfos) SetServiceName(v string) *SearchTracesResponseTraceInfos {
	s.ServiceName = &v
	return s
}

func (s *SearchTracesResponseTraceInfos) SetServiceIp(v string) *SearchTracesResponseTraceInfos {
	s.ServiceIp = &v
	return s
}

func (s *SearchTracesResponseTraceInfos) SetDuration(v int64) *SearchTracesResponseTraceInfos {
	s.Duration = &v
	return s
}

func (s *SearchTracesResponseTraceInfos) SetTimestamp(v int64) *SearchTracesResponseTraceInfos {
	s.Timestamp = &v
	return s
}

type GetPrometheusApiTokenRequest struct {
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s GetPrometheusApiTokenRequest) String() string {
	return tea.Prettify(s)
}

func (s GetPrometheusApiTokenRequest) GoString() string {
	return s.String()
}

func (s *GetPrometheusApiTokenRequest) SetRegionId(v string) *GetPrometheusApiTokenRequest {
	s.RegionId = &v
	return s
}

type GetPrometheusApiTokenResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Token     *string `json:"Token,omitempty" xml:"Token,omitempty" require:"true"`
}

func (s GetPrometheusApiTokenResponse) String() string {
	return tea.Prettify(s)
}

func (s GetPrometheusApiTokenResponse) GoString() string {
	return s.String()
}

func (s *GetPrometheusApiTokenResponse) SetRequestId(v string) *GetPrometheusApiTokenResponse {
	s.RequestId = &v
	return s
}

func (s *GetPrometheusApiTokenResponse) SetToken(v string) *GetPrometheusApiTokenResponse {
	s.Token = &v
	return s
}

type SetRetcodeShareStatusRequest struct {
	Pid    *string `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
	Status *bool   `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s SetRetcodeShareStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s SetRetcodeShareStatusRequest) GoString() string {
	return s.String()
}

func (s *SetRetcodeShareStatusRequest) SetPid(v string) *SetRetcodeShareStatusRequest {
	s.Pid = &v
	return s
}

func (s *SetRetcodeShareStatusRequest) SetStatus(v bool) *SetRetcodeShareStatusRequest {
	s.Status = &v
	return s
}

type SetRetcodeShareStatusResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	IsSuccess *bool   `json:"IsSuccess,omitempty" xml:"IsSuccess,omitempty" require:"true"`
}

func (s SetRetcodeShareStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s SetRetcodeShareStatusResponse) GoString() string {
	return s.String()
}

func (s *SetRetcodeShareStatusResponse) SetRequestId(v string) *SetRetcodeShareStatusResponse {
	s.RequestId = &v
	return s
}

func (s *SetRetcodeShareStatusResponse) SetIsSuccess(v bool) *SetRetcodeShareStatusResponse {
	s.IsSuccess = &v
	return s
}

type GetRetcodeShareUrlRequest struct {
	Pid *string `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
}

func (s GetRetcodeShareUrlRequest) String() string {
	return tea.Prettify(s)
}

func (s GetRetcodeShareUrlRequest) GoString() string {
	return s.String()
}

func (s *GetRetcodeShareUrlRequest) SetPid(v string) *GetRetcodeShareUrlRequest {
	s.Pid = &v
	return s
}

type GetRetcodeShareUrlResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Url       *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s GetRetcodeShareUrlResponse) String() string {
	return tea.Prettify(s)
}

func (s GetRetcodeShareUrlResponse) GoString() string {
	return s.String()
}

func (s *GetRetcodeShareUrlResponse) SetRequestId(v string) *GetRetcodeShareUrlResponse {
	s.RequestId = &v
	return s
}

func (s *GetRetcodeShareUrlResponse) SetUrl(v string) *GetRetcodeShareUrlResponse {
	s.Url = &v
	return s
}

type ListPromClustersRequest struct {
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s ListPromClustersRequest) String() string {
	return tea.Prettify(s)
}

func (s ListPromClustersRequest) GoString() string {
	return s.String()
}

func (s *ListPromClustersRequest) SetRegionId(v string) *ListPromClustersRequest {
	s.RegionId = &v
	return s
}

type ListPromClustersResponse struct {
	RequestId       *string                                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PromClusterList []*ListPromClustersResponsePromClusterList `json:"PromClusterList,omitempty" xml:"PromClusterList,omitempty" require:"true" type:"Repeated"`
}

func (s ListPromClustersResponse) String() string {
	return tea.Prettify(s)
}

func (s ListPromClustersResponse) GoString() string {
	return s.String()
}

func (s *ListPromClustersResponse) SetRequestId(v string) *ListPromClustersResponse {
	s.RequestId = &v
	return s
}

func (s *ListPromClustersResponse) SetPromClusterList(v []*ListPromClustersResponsePromClusterList) *ListPromClustersResponse {
	s.PromClusterList = v
	return s
}

type ListPromClustersResponsePromClusterList struct {
	Id                    *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	ClusterId             *string `json:"ClusterId,omitempty" xml:"ClusterId,omitempty" require:"true"`
	ClusterName           *string `json:"ClusterName,omitempty" xml:"ClusterName,omitempty" require:"true"`
	AgentStatus           *string `json:"AgentStatus,omitempty" xml:"AgentStatus,omitempty" require:"true"`
	ClusterType           *string `json:"ClusterType,omitempty" xml:"ClusterType,omitempty" require:"true"`
	ControllerId          *string `json:"ControllerId,omitempty" xml:"ControllerId,omitempty" require:"true"`
	IsControllerInstalled *bool   `json:"IsControllerInstalled,omitempty" xml:"IsControllerInstalled,omitempty" require:"true"`
	UserId                *string `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	RegionId              *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	PluginsJsonArray      *string `json:"PluginsJsonArray,omitempty" xml:"PluginsJsonArray,omitempty" require:"true"`
	StateJson             *string `json:"StateJson,omitempty" xml:"StateJson,omitempty" require:"true"`
	NodeNum               *int    `json:"NodeNum,omitempty" xml:"NodeNum,omitempty" require:"true"`
	CreateTime            *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	UpdateTime            *int64  `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	LastHeartBeatTime     *int64  `json:"LastHeartBeatTime,omitempty" xml:"LastHeartBeatTime,omitempty" require:"true"`
	InstallTime           *int64  `json:"InstallTime,omitempty" xml:"InstallTime,omitempty" require:"true"`
	Extra                 *string `json:"Extra,omitempty" xml:"Extra,omitempty" require:"true"`
	Options               *string `json:"Options,omitempty" xml:"Options,omitempty" require:"true"`
}

func (s ListPromClustersResponsePromClusterList) String() string {
	return tea.Prettify(s)
}

func (s ListPromClustersResponsePromClusterList) GoString() string {
	return s.String()
}

func (s *ListPromClustersResponsePromClusterList) SetId(v int64) *ListPromClustersResponsePromClusterList {
	s.Id = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetClusterId(v string) *ListPromClustersResponsePromClusterList {
	s.ClusterId = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetClusterName(v string) *ListPromClustersResponsePromClusterList {
	s.ClusterName = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetAgentStatus(v string) *ListPromClustersResponsePromClusterList {
	s.AgentStatus = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetClusterType(v string) *ListPromClustersResponsePromClusterList {
	s.ClusterType = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetControllerId(v string) *ListPromClustersResponsePromClusterList {
	s.ControllerId = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetIsControllerInstalled(v bool) *ListPromClustersResponsePromClusterList {
	s.IsControllerInstalled = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetUserId(v string) *ListPromClustersResponsePromClusterList {
	s.UserId = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetRegionId(v string) *ListPromClustersResponsePromClusterList {
	s.RegionId = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetPluginsJsonArray(v string) *ListPromClustersResponsePromClusterList {
	s.PluginsJsonArray = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetStateJson(v string) *ListPromClustersResponsePromClusterList {
	s.StateJson = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetNodeNum(v int) *ListPromClustersResponsePromClusterList {
	s.NodeNum = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetCreateTime(v int64) *ListPromClustersResponsePromClusterList {
	s.CreateTime = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetUpdateTime(v int64) *ListPromClustersResponsePromClusterList {
	s.UpdateTime = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetLastHeartBeatTime(v int64) *ListPromClustersResponsePromClusterList {
	s.LastHeartBeatTime = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetInstallTime(v int64) *ListPromClustersResponsePromClusterList {
	s.InstallTime = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetExtra(v string) *ListPromClustersResponsePromClusterList {
	s.Extra = &v
	return s
}

func (s *ListPromClustersResponsePromClusterList) SetOptions(v string) *ListPromClustersResponsePromClusterList {
	s.Options = &v
	return s
}

type UpdateAlertRuleRequest struct {
	RegionId            *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ContactGroupIds     *string `json:"ContactGroupIds,omitempty" xml:"ContactGroupIds,omitempty"`
	IsAutoStart         *bool   `json:"IsAutoStart,omitempty" xml:"IsAutoStart,omitempty"`
	TemplageAlertConfig *string `json:"TemplageAlertConfig,omitempty" xml:"TemplageAlertConfig,omitempty" require:"true"`
	ProxyUserId         *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	AlertId             *int64  `json:"AlertId,omitempty" xml:"AlertId,omitempty" require:"true"`
}

func (s UpdateAlertRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateAlertRuleRequest) GoString() string {
	return s.String()
}

func (s *UpdateAlertRuleRequest) SetRegionId(v string) *UpdateAlertRuleRequest {
	s.RegionId = &v
	return s
}

func (s *UpdateAlertRuleRequest) SetContactGroupIds(v string) *UpdateAlertRuleRequest {
	s.ContactGroupIds = &v
	return s
}

func (s *UpdateAlertRuleRequest) SetIsAutoStart(v bool) *UpdateAlertRuleRequest {
	s.IsAutoStart = &v
	return s
}

func (s *UpdateAlertRuleRequest) SetTemplageAlertConfig(v string) *UpdateAlertRuleRequest {
	s.TemplageAlertConfig = &v
	return s
}

func (s *UpdateAlertRuleRequest) SetProxyUserId(v string) *UpdateAlertRuleRequest {
	s.ProxyUserId = &v
	return s
}

func (s *UpdateAlertRuleRequest) SetAlertId(v int64) *UpdateAlertRuleRequest {
	s.AlertId = &v
	return s
}

type UpdateAlertRuleResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	AlertId   *int64  `json:"AlertId,omitempty" xml:"AlertId,omitempty" require:"true"`
}

func (s UpdateAlertRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateAlertRuleResponse) GoString() string {
	return s.String()
}

func (s *UpdateAlertRuleResponse) SetRequestId(v string) *UpdateAlertRuleResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateAlertRuleResponse) SetData(v string) *UpdateAlertRuleResponse {
	s.Data = &v
	return s
}

func (s *UpdateAlertRuleResponse) SetAlertId(v int64) *UpdateAlertRuleResponse {
	s.AlertId = &v
	return s
}

type StartAlertRequest struct {
	AlertId     *string `json:"AlertId,omitempty" xml:"AlertId,omitempty" require:"true"`
	ProxyUserId *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s StartAlertRequest) String() string {
	return tea.Prettify(s)
}

func (s StartAlertRequest) GoString() string {
	return s.String()
}

func (s *StartAlertRequest) SetAlertId(v string) *StartAlertRequest {
	s.AlertId = &v
	return s
}

func (s *StartAlertRequest) SetProxyUserId(v string) *StartAlertRequest {
	s.ProxyUserId = &v
	return s
}

func (s *StartAlertRequest) SetRegionId(v string) *StartAlertRequest {
	s.RegionId = &v
	return s
}

type StartAlertResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	IsSuccess *bool   `json:"IsSuccess,omitempty" xml:"IsSuccess,omitempty" require:"true"`
}

func (s StartAlertResponse) String() string {
	return tea.Prettify(s)
}

func (s StartAlertResponse) GoString() string {
	return s.String()
}

func (s *StartAlertResponse) SetRequestId(v string) *StartAlertResponse {
	s.RequestId = &v
	return s
}

func (s *StartAlertResponse) SetIsSuccess(v bool) *StartAlertResponse {
	s.IsSuccess = &v
	return s
}

type StopAlertRequest struct {
	AlertId     *string `json:"AlertId,omitempty" xml:"AlertId,omitempty" require:"true"`
	ProxyUserId *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s StopAlertRequest) String() string {
	return tea.Prettify(s)
}

func (s StopAlertRequest) GoString() string {
	return s.String()
}

func (s *StopAlertRequest) SetAlertId(v string) *StopAlertRequest {
	s.AlertId = &v
	return s
}

func (s *StopAlertRequest) SetProxyUserId(v string) *StopAlertRequest {
	s.ProxyUserId = &v
	return s
}

func (s *StopAlertRequest) SetRegionId(v string) *StopAlertRequest {
	s.RegionId = &v
	return s
}

type StopAlertResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	IsSuccess *bool   `json:"IsSuccess,omitempty" xml:"IsSuccess,omitempty" require:"true"`
}

func (s StopAlertResponse) String() string {
	return tea.Prettify(s)
}

func (s StopAlertResponse) GoString() string {
	return s.String()
}

func (s *StopAlertResponse) SetRequestId(v string) *StopAlertResponse {
	s.RequestId = &v
	return s
}

func (s *StopAlertResponse) SetIsSuccess(v bool) *StopAlertResponse {
	s.IsSuccess = &v
	return s
}

type SearchEventsRequest struct {
	ProxyUserId *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	AlertId     *int64  `json:"AlertId,omitempty" xml:"AlertId,omitempty"`
	Pid         *string `json:"Pid,omitempty" xml:"Pid,omitempty"`
	CurrentPage *int    `json:"CurrentPage,omitempty" xml:"CurrentPage,omitempty"`
	PageSize    *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	AppType     *string `json:"AppType,omitempty" xml:"AppType,omitempty"`
	AlertType   *int    `json:"AlertType,omitempty" xml:"AlertType,omitempty"`
	IsTrigger   *int    `json:"IsTrigger,omitempty" xml:"IsTrigger,omitempty"`
	StartTime   *int64  `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime     *int64  `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
}

func (s SearchEventsRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchEventsRequest) GoString() string {
	return s.String()
}

func (s *SearchEventsRequest) SetProxyUserId(v string) *SearchEventsRequest {
	s.ProxyUserId = &v
	return s
}

func (s *SearchEventsRequest) SetAlertId(v int64) *SearchEventsRequest {
	s.AlertId = &v
	return s
}

func (s *SearchEventsRequest) SetPid(v string) *SearchEventsRequest {
	s.Pid = &v
	return s
}

func (s *SearchEventsRequest) SetCurrentPage(v int) *SearchEventsRequest {
	s.CurrentPage = &v
	return s
}

func (s *SearchEventsRequest) SetPageSize(v int) *SearchEventsRequest {
	s.PageSize = &v
	return s
}

func (s *SearchEventsRequest) SetRegionId(v string) *SearchEventsRequest {
	s.RegionId = &v
	return s
}

func (s *SearchEventsRequest) SetAppType(v string) *SearchEventsRequest {
	s.AppType = &v
	return s
}

func (s *SearchEventsRequest) SetAlertType(v int) *SearchEventsRequest {
	s.AlertType = &v
	return s
}

func (s *SearchEventsRequest) SetIsTrigger(v int) *SearchEventsRequest {
	s.IsTrigger = &v
	return s
}

func (s *SearchEventsRequest) SetStartTime(v int64) *SearchEventsRequest {
	s.StartTime = &v
	return s
}

func (s *SearchEventsRequest) SetEndTime(v int64) *SearchEventsRequest {
	s.EndTime = &v
	return s
}

type SearchEventsResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	IsTrigger *int                          `json:"IsTrigger,omitempty" xml:"IsTrigger,omitempty" require:"true"`
	PageBean  *SearchEventsResponsePageBean `json:"PageBean,omitempty" xml:"PageBean,omitempty" require:"true" type:"Struct"`
}

func (s SearchEventsResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchEventsResponse) GoString() string {
	return s.String()
}

func (s *SearchEventsResponse) SetRequestId(v string) *SearchEventsResponse {
	s.RequestId = &v
	return s
}

func (s *SearchEventsResponse) SetIsTrigger(v int) *SearchEventsResponse {
	s.IsTrigger = &v
	return s
}

func (s *SearchEventsResponse) SetPageBean(v *SearchEventsResponsePageBean) *SearchEventsResponse {
	s.PageBean = v
	return s
}

type SearchEventsResponsePageBean struct {
	TotalCount *int                                 `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber *int                                 `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                 `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Event      []*SearchEventsResponsePageBeanEvent `json:"Event,omitempty" xml:"Event,omitempty" require:"true" type:"Repeated"`
}

func (s SearchEventsResponsePageBean) String() string {
	return tea.Prettify(s)
}

func (s SearchEventsResponsePageBean) GoString() string {
	return s.String()
}

func (s *SearchEventsResponsePageBean) SetTotalCount(v int) *SearchEventsResponsePageBean {
	s.TotalCount = &v
	return s
}

func (s *SearchEventsResponsePageBean) SetPageNumber(v int) *SearchEventsResponsePageBean {
	s.PageNumber = &v
	return s
}

func (s *SearchEventsResponsePageBean) SetPageSize(v int) *SearchEventsResponsePageBean {
	s.PageSize = &v
	return s
}

func (s *SearchEventsResponsePageBean) SetEvent(v []*SearchEventsResponsePageBeanEvent) *SearchEventsResponsePageBean {
	s.Event = v
	return s
}

type SearchEventsResponsePageBeanEvent struct {
	Id         *int64    `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	EventTime  *int64    `json:"EventTime,omitempty" xml:"EventTime,omitempty" require:"true"`
	AlertType  *int      `json:"AlertType,omitempty" xml:"AlertType,omitempty" require:"true"`
	EventLevel *int      `json:"EventLevel,omitempty" xml:"EventLevel,omitempty" require:"true"`
	Message    *string   `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	AlertId    *int64    `json:"AlertId,omitempty" xml:"AlertId,omitempty" require:"true"`
	AlertName  *string   `json:"AlertName,omitempty" xml:"AlertName,omitempty" require:"true"`
	AlertRule  *string   `json:"AlertRule,omitempty" xml:"AlertRule,omitempty" require:"true"`
	Links      []*string `json:"Links,omitempty" xml:"Links,omitempty" require:"true" type:"Repeated"`
}

func (s SearchEventsResponsePageBeanEvent) String() string {
	return tea.Prettify(s)
}

func (s SearchEventsResponsePageBeanEvent) GoString() string {
	return s.String()
}

func (s *SearchEventsResponsePageBeanEvent) SetId(v int64) *SearchEventsResponsePageBeanEvent {
	s.Id = &v
	return s
}

func (s *SearchEventsResponsePageBeanEvent) SetEventTime(v int64) *SearchEventsResponsePageBeanEvent {
	s.EventTime = &v
	return s
}

func (s *SearchEventsResponsePageBeanEvent) SetAlertType(v int) *SearchEventsResponsePageBeanEvent {
	s.AlertType = &v
	return s
}

func (s *SearchEventsResponsePageBeanEvent) SetEventLevel(v int) *SearchEventsResponsePageBeanEvent {
	s.EventLevel = &v
	return s
}

func (s *SearchEventsResponsePageBeanEvent) SetMessage(v string) *SearchEventsResponsePageBeanEvent {
	s.Message = &v
	return s
}

func (s *SearchEventsResponsePageBeanEvent) SetAlertId(v int64) *SearchEventsResponsePageBeanEvent {
	s.AlertId = &v
	return s
}

func (s *SearchEventsResponsePageBeanEvent) SetAlertName(v string) *SearchEventsResponsePageBeanEvent {
	s.AlertName = &v
	return s
}

func (s *SearchEventsResponsePageBeanEvent) SetAlertRule(v string) *SearchEventsResponsePageBeanEvent {
	s.AlertRule = &v
	return s
}

func (s *SearchEventsResponsePageBeanEvent) SetLinks(v []*string) *SearchEventsResponsePageBeanEvent {
	s.Links = v
	return s
}

type SearchAlertHistoriesRequest struct {
	ProxyUserId *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	AlertId     *int64  `json:"AlertId,omitempty" xml:"AlertId,omitempty"`
	AlertType   *int    `json:"AlertType,omitempty" xml:"AlertType,omitempty"`
	CurrentPage *int    `json:"CurrentPage,omitempty" xml:"CurrentPage,omitempty"`
	PageSize    *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	StartTime   *int64  `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime     *int64  `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
}

func (s SearchAlertHistoriesRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertHistoriesRequest) GoString() string {
	return s.String()
}

func (s *SearchAlertHistoriesRequest) SetProxyUserId(v string) *SearchAlertHistoriesRequest {
	s.ProxyUserId = &v
	return s
}

func (s *SearchAlertHistoriesRequest) SetAlertId(v int64) *SearchAlertHistoriesRequest {
	s.AlertId = &v
	return s
}

func (s *SearchAlertHistoriesRequest) SetAlertType(v int) *SearchAlertHistoriesRequest {
	s.AlertType = &v
	return s
}

func (s *SearchAlertHistoriesRequest) SetCurrentPage(v int) *SearchAlertHistoriesRequest {
	s.CurrentPage = &v
	return s
}

func (s *SearchAlertHistoriesRequest) SetPageSize(v int) *SearchAlertHistoriesRequest {
	s.PageSize = &v
	return s
}

func (s *SearchAlertHistoriesRequest) SetRegionId(v string) *SearchAlertHistoriesRequest {
	s.RegionId = &v
	return s
}

func (s *SearchAlertHistoriesRequest) SetStartTime(v int64) *SearchAlertHistoriesRequest {
	s.StartTime = &v
	return s
}

func (s *SearchAlertHistoriesRequest) SetEndTime(v int64) *SearchAlertHistoriesRequest {
	s.EndTime = &v
	return s
}

type SearchAlertHistoriesResponse struct {
	RequestId *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageBean  *SearchAlertHistoriesResponsePageBean `json:"PageBean,omitempty" xml:"PageBean,omitempty" require:"true" type:"Struct"`
}

func (s SearchAlertHistoriesResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertHistoriesResponse) GoString() string {
	return s.String()
}

func (s *SearchAlertHistoriesResponse) SetRequestId(v string) *SearchAlertHistoriesResponse {
	s.RequestId = &v
	return s
}

func (s *SearchAlertHistoriesResponse) SetPageBean(v *SearchAlertHistoriesResponsePageBean) *SearchAlertHistoriesResponse {
	s.PageBean = v
	return s
}

type SearchAlertHistoriesResponsePageBean struct {
	TotalCount     *int                                                  `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber     *int                                                  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize       *int                                                  `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	AlarmHistories []*SearchAlertHistoriesResponsePageBeanAlarmHistories `json:"AlarmHistories,omitempty" xml:"AlarmHistories,omitempty" require:"true" type:"Repeated"`
}

func (s SearchAlertHistoriesResponsePageBean) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertHistoriesResponsePageBean) GoString() string {
	return s.String()
}

func (s *SearchAlertHistoriesResponsePageBean) SetTotalCount(v int) *SearchAlertHistoriesResponsePageBean {
	s.TotalCount = &v
	return s
}

func (s *SearchAlertHistoriesResponsePageBean) SetPageNumber(v int) *SearchAlertHistoriesResponsePageBean {
	s.PageNumber = &v
	return s
}

func (s *SearchAlertHistoriesResponsePageBean) SetPageSize(v int) *SearchAlertHistoriesResponsePageBean {
	s.PageSize = &v
	return s
}

func (s *SearchAlertHistoriesResponsePageBean) SetAlarmHistories(v []*SearchAlertHistoriesResponsePageBeanAlarmHistories) *SearchAlertHistoriesResponsePageBean {
	s.AlarmHistories = v
	return s
}

type SearchAlertHistoriesResponsePageBeanAlarmHistories struct {
	Id                *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	StrategyId        *string `json:"StrategyId,omitempty" xml:"StrategyId,omitempty" require:"true"`
	UserId            *string `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	Target            *string `json:"Target,omitempty" xml:"Target,omitempty" require:"true"`
	Phones            *string `json:"Phones,omitempty" xml:"Phones,omitempty" require:"true"`
	Emails            *string `json:"Emails,omitempty" xml:"Emails,omitempty" require:"true"`
	AlarmTime         *int64  `json:"AlarmTime,omitempty" xml:"AlarmTime,omitempty" require:"true"`
	AlarmType         *int    `json:"AlarmType,omitempty" xml:"AlarmType,omitempty" require:"true"`
	AlarmResponseCode *int    `json:"AlarmResponseCode,omitempty" xml:"AlarmResponseCode,omitempty" require:"true"`
	AlarmContent      *string `json:"AlarmContent,omitempty" xml:"AlarmContent,omitempty" require:"true"`
	AlarmSources      *string `json:"AlarmSources,omitempty" xml:"AlarmSources,omitempty" require:"true"`
}

func (s SearchAlertHistoriesResponsePageBeanAlarmHistories) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertHistoriesResponsePageBeanAlarmHistories) GoString() string {
	return s.String()
}

func (s *SearchAlertHistoriesResponsePageBeanAlarmHistories) SetId(v int64) *SearchAlertHistoriesResponsePageBeanAlarmHistories {
	s.Id = &v
	return s
}

func (s *SearchAlertHistoriesResponsePageBeanAlarmHistories) SetStrategyId(v string) *SearchAlertHistoriesResponsePageBeanAlarmHistories {
	s.StrategyId = &v
	return s
}

func (s *SearchAlertHistoriesResponsePageBeanAlarmHistories) SetUserId(v string) *SearchAlertHistoriesResponsePageBeanAlarmHistories {
	s.UserId = &v
	return s
}

func (s *SearchAlertHistoriesResponsePageBeanAlarmHistories) SetTarget(v string) *SearchAlertHistoriesResponsePageBeanAlarmHistories {
	s.Target = &v
	return s
}

func (s *SearchAlertHistoriesResponsePageBeanAlarmHistories) SetPhones(v string) *SearchAlertHistoriesResponsePageBeanAlarmHistories {
	s.Phones = &v
	return s
}

func (s *SearchAlertHistoriesResponsePageBeanAlarmHistories) SetEmails(v string) *SearchAlertHistoriesResponsePageBeanAlarmHistories {
	s.Emails = &v
	return s
}

func (s *SearchAlertHistoriesResponsePageBeanAlarmHistories) SetAlarmTime(v int64) *SearchAlertHistoriesResponsePageBeanAlarmHistories {
	s.AlarmTime = &v
	return s
}

func (s *SearchAlertHistoriesResponsePageBeanAlarmHistories) SetAlarmType(v int) *SearchAlertHistoriesResponsePageBeanAlarmHistories {
	s.AlarmType = &v
	return s
}

func (s *SearchAlertHistoriesResponsePageBeanAlarmHistories) SetAlarmResponseCode(v int) *SearchAlertHistoriesResponsePageBeanAlarmHistories {
	s.AlarmResponseCode = &v
	return s
}

func (s *SearchAlertHistoriesResponsePageBeanAlarmHistories) SetAlarmContent(v string) *SearchAlertHistoriesResponsePageBeanAlarmHistories {
	s.AlarmContent = &v
	return s
}

func (s *SearchAlertHistoriesResponsePageBeanAlarmHistories) SetAlarmSources(v string) *SearchAlertHistoriesResponsePageBeanAlarmHistories {
	s.AlarmSources = &v
	return s
}

type UpdateAlertContactRequest struct {
	ContactName         *string `json:"ContactName,omitempty" xml:"ContactName,omitempty"`
	PhoneNum            *string `json:"PhoneNum,omitempty" xml:"PhoneNum,omitempty"`
	Email               *string `json:"Email,omitempty" xml:"Email,omitempty"`
	DingRobotWebhookUrl *string `json:"DingRobotWebhookUrl,omitempty" xml:"DingRobotWebhookUrl,omitempty"`
	SystemNoc           *bool   `json:"SystemNoc,omitempty" xml:"SystemNoc,omitempty"`
	RegionId            *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ProxyUserId         *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	ContactId           *int64  `json:"ContactId,omitempty" xml:"ContactId,omitempty" require:"true"`
}

func (s UpdateAlertContactRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateAlertContactRequest) GoString() string {
	return s.String()
}

func (s *UpdateAlertContactRequest) SetContactName(v string) *UpdateAlertContactRequest {
	s.ContactName = &v
	return s
}

func (s *UpdateAlertContactRequest) SetPhoneNum(v string) *UpdateAlertContactRequest {
	s.PhoneNum = &v
	return s
}

func (s *UpdateAlertContactRequest) SetEmail(v string) *UpdateAlertContactRequest {
	s.Email = &v
	return s
}

func (s *UpdateAlertContactRequest) SetDingRobotWebhookUrl(v string) *UpdateAlertContactRequest {
	s.DingRobotWebhookUrl = &v
	return s
}

func (s *UpdateAlertContactRequest) SetSystemNoc(v bool) *UpdateAlertContactRequest {
	s.SystemNoc = &v
	return s
}

func (s *UpdateAlertContactRequest) SetRegionId(v string) *UpdateAlertContactRequest {
	s.RegionId = &v
	return s
}

func (s *UpdateAlertContactRequest) SetProxyUserId(v string) *UpdateAlertContactRequest {
	s.ProxyUserId = &v
	return s
}

func (s *UpdateAlertContactRequest) SetContactId(v int64) *UpdateAlertContactRequest {
	s.ContactId = &v
	return s
}

type UpdateAlertContactResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	IsSuccess *bool   `json:"IsSuccess,omitempty" xml:"IsSuccess,omitempty" require:"true"`
}

func (s UpdateAlertContactResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateAlertContactResponse) GoString() string {
	return s.String()
}

func (s *UpdateAlertContactResponse) SetRequestId(v string) *UpdateAlertContactResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateAlertContactResponse) SetIsSuccess(v bool) *UpdateAlertContactResponse {
	s.IsSuccess = &v
	return s
}

type DeleteAlertContactGroupRequest struct {
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ProxyUserId    *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	ContactGroupId *int64  `json:"ContactGroupId,omitempty" xml:"ContactGroupId,omitempty" require:"true"`
}

func (s DeleteAlertContactGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAlertContactGroupRequest) GoString() string {
	return s.String()
}

func (s *DeleteAlertContactGroupRequest) SetRegionId(v string) *DeleteAlertContactGroupRequest {
	s.RegionId = &v
	return s
}

func (s *DeleteAlertContactGroupRequest) SetProxyUserId(v string) *DeleteAlertContactGroupRequest {
	s.ProxyUserId = &v
	return s
}

func (s *DeleteAlertContactGroupRequest) SetContactGroupId(v int64) *DeleteAlertContactGroupRequest {
	s.ContactGroupId = &v
	return s
}

type DeleteAlertContactGroupResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	IsSuccess *bool   `json:"IsSuccess,omitempty" xml:"IsSuccess,omitempty" require:"true"`
}

func (s DeleteAlertContactGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAlertContactGroupResponse) GoString() string {
	return s.String()
}

func (s *DeleteAlertContactGroupResponse) SetRequestId(v string) *DeleteAlertContactGroupResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteAlertContactGroupResponse) SetIsSuccess(v bool) *DeleteAlertContactGroupResponse {
	s.IsSuccess = &v
	return s
}

type DeleteAlertContactRequest struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ProxyUserId *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	ContactId   *int64  `json:"ContactId,omitempty" xml:"ContactId,omitempty" require:"true"`
}

func (s DeleteAlertContactRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAlertContactRequest) GoString() string {
	return s.String()
}

func (s *DeleteAlertContactRequest) SetRegionId(v string) *DeleteAlertContactRequest {
	s.RegionId = &v
	return s
}

func (s *DeleteAlertContactRequest) SetProxyUserId(v string) *DeleteAlertContactRequest {
	s.ProxyUserId = &v
	return s
}

func (s *DeleteAlertContactRequest) SetContactId(v int64) *DeleteAlertContactRequest {
	s.ContactId = &v
	return s
}

type DeleteAlertContactResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	IsSuccess *bool   `json:"IsSuccess,omitempty" xml:"IsSuccess,omitempty" require:"true"`
}

func (s DeleteAlertContactResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAlertContactResponse) GoString() string {
	return s.String()
}

func (s *DeleteAlertContactResponse) SetRequestId(v string) *DeleteAlertContactResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteAlertContactResponse) SetIsSuccess(v bool) *DeleteAlertContactResponse {
	s.IsSuccess = &v
	return s
}

type UpdateAlertContactGroupRequest struct {
	ContactGroupName *string `json:"ContactGroupName,omitempty" xml:"ContactGroupName,omitempty" require:"true"`
	ContactIds       *string `json:"ContactIds,omitempty" xml:"ContactIds,omitempty"`
	RegionId         *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ProxyUserId      *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	ContactGroupId   *int64  `json:"ContactGroupId,omitempty" xml:"ContactGroupId,omitempty" require:"true"`
}

func (s UpdateAlertContactGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateAlertContactGroupRequest) GoString() string {
	return s.String()
}

func (s *UpdateAlertContactGroupRequest) SetContactGroupName(v string) *UpdateAlertContactGroupRequest {
	s.ContactGroupName = &v
	return s
}

func (s *UpdateAlertContactGroupRequest) SetContactIds(v string) *UpdateAlertContactGroupRequest {
	s.ContactIds = &v
	return s
}

func (s *UpdateAlertContactGroupRequest) SetRegionId(v string) *UpdateAlertContactGroupRequest {
	s.RegionId = &v
	return s
}

func (s *UpdateAlertContactGroupRequest) SetProxyUserId(v string) *UpdateAlertContactGroupRequest {
	s.ProxyUserId = &v
	return s
}

func (s *UpdateAlertContactGroupRequest) SetContactGroupId(v int64) *UpdateAlertContactGroupRequest {
	s.ContactGroupId = &v
	return s
}

type UpdateAlertContactGroupResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	IsSuccess *bool   `json:"IsSuccess,omitempty" xml:"IsSuccess,omitempty" require:"true"`
}

func (s UpdateAlertContactGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateAlertContactGroupResponse) GoString() string {
	return s.String()
}

func (s *UpdateAlertContactGroupResponse) SetRequestId(v string) *UpdateAlertContactGroupResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateAlertContactGroupResponse) SetIsSuccess(v bool) *UpdateAlertContactGroupResponse {
	s.IsSuccess = &v
	return s
}

type ImportCustomAlertRulesRequest struct {
	RegionId            *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ContactGroupIds     *string `json:"ContactGroupIds,omitempty" xml:"ContactGroupIds,omitempty"`
	IsAutoStart         *bool   `json:"IsAutoStart,omitempty" xml:"IsAutoStart,omitempty"`
	TemplageAlertConfig *string `json:"TemplageAlertConfig,omitempty" xml:"TemplageAlertConfig,omitempty"`
	ProxyUserId         *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
}

func (s ImportCustomAlertRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s ImportCustomAlertRulesRequest) GoString() string {
	return s.String()
}

func (s *ImportCustomAlertRulesRequest) SetRegionId(v string) *ImportCustomAlertRulesRequest {
	s.RegionId = &v
	return s
}

func (s *ImportCustomAlertRulesRequest) SetContactGroupIds(v string) *ImportCustomAlertRulesRequest {
	s.ContactGroupIds = &v
	return s
}

func (s *ImportCustomAlertRulesRequest) SetIsAutoStart(v bool) *ImportCustomAlertRulesRequest {
	s.IsAutoStart = &v
	return s
}

func (s *ImportCustomAlertRulesRequest) SetTemplageAlertConfig(v string) *ImportCustomAlertRulesRequest {
	s.TemplageAlertConfig = &v
	return s
}

func (s *ImportCustomAlertRulesRequest) SetProxyUserId(v string) *ImportCustomAlertRulesRequest {
	s.ProxyUserId = &v
	return s
}

type ImportCustomAlertRulesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s ImportCustomAlertRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s ImportCustomAlertRulesResponse) GoString() string {
	return s.String()
}

func (s *ImportCustomAlertRulesResponse) SetRequestId(v string) *ImportCustomAlertRulesResponse {
	s.RequestId = &v
	return s
}

func (s *ImportCustomAlertRulesResponse) SetData(v string) *ImportCustomAlertRulesResponse {
	s.Data = &v
	return s
}

type SearchAlertRulesRequest struct {
	ProxyUserId *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	Title       *string `json:"Title,omitempty" xml:"Title,omitempty"`
	Type        *string `json:"Type,omitempty" xml:"Type,omitempty"`
	CurrentPage *int    `json:"CurrentPage,omitempty" xml:"CurrentPage,omitempty"`
	PageSize    *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Pid         *string `json:"Pid,omitempty" xml:"Pid,omitempty"`
	AppType     *string `json:"AppType,omitempty" xml:"AppType,omitempty"`
}

func (s SearchAlertRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertRulesRequest) GoString() string {
	return s.String()
}

func (s *SearchAlertRulesRequest) SetProxyUserId(v string) *SearchAlertRulesRequest {
	s.ProxyUserId = &v
	return s
}

func (s *SearchAlertRulesRequest) SetTitle(v string) *SearchAlertRulesRequest {
	s.Title = &v
	return s
}

func (s *SearchAlertRulesRequest) SetType(v string) *SearchAlertRulesRequest {
	s.Type = &v
	return s
}

func (s *SearchAlertRulesRequest) SetCurrentPage(v int) *SearchAlertRulesRequest {
	s.CurrentPage = &v
	return s
}

func (s *SearchAlertRulesRequest) SetPageSize(v int) *SearchAlertRulesRequest {
	s.PageSize = &v
	return s
}

func (s *SearchAlertRulesRequest) SetRegionId(v string) *SearchAlertRulesRequest {
	s.RegionId = &v
	return s
}

func (s *SearchAlertRulesRequest) SetPid(v string) *SearchAlertRulesRequest {
	s.Pid = &v
	return s
}

func (s *SearchAlertRulesRequest) SetAppType(v string) *SearchAlertRulesRequest {
	s.AppType = &v
	return s
}

type SearchAlertRulesResponse struct {
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageBean  *SearchAlertRulesResponsePageBean `json:"PageBean,omitempty" xml:"PageBean,omitempty" require:"true" type:"Struct"`
}

func (s SearchAlertRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertRulesResponse) GoString() string {
	return s.String()
}

func (s *SearchAlertRulesResponse) SetRequestId(v string) *SearchAlertRulesResponse {
	s.RequestId = &v
	return s
}

func (s *SearchAlertRulesResponse) SetPageBean(v *SearchAlertRulesResponsePageBean) *SearchAlertRulesResponse {
	s.PageBean = v
	return s
}

type SearchAlertRulesResponsePageBean struct {
	TotalCount *int                                          `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber *int                                          `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                          `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	AlertRules []*SearchAlertRulesResponsePageBeanAlertRules `json:"AlertRules,omitempty" xml:"AlertRules,omitempty" require:"true" type:"Repeated"`
}

func (s SearchAlertRulesResponsePageBean) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertRulesResponsePageBean) GoString() string {
	return s.String()
}

func (s *SearchAlertRulesResponsePageBean) SetTotalCount(v int) *SearchAlertRulesResponsePageBean {
	s.TotalCount = &v
	return s
}

func (s *SearchAlertRulesResponsePageBean) SetPageNumber(v int) *SearchAlertRulesResponsePageBean {
	s.PageNumber = &v
	return s
}

func (s *SearchAlertRulesResponsePageBean) SetPageSize(v int) *SearchAlertRulesResponsePageBean {
	s.PageSize = &v
	return s
}

func (s *SearchAlertRulesResponsePageBean) SetAlertRules(v []*SearchAlertRulesResponsePageBeanAlertRules) *SearchAlertRulesResponsePageBean {
	s.AlertRules = v
	return s
}

type SearchAlertRulesResponsePageBeanAlertRules struct {
	AlertTitle         *string                                                 `json:"AlertTitle,omitempty" xml:"AlertTitle,omitempty" require:"true"`
	AlertLevel         *string                                                 `json:"AlertLevel,omitempty" xml:"AlertLevel,omitempty" require:"true"`
	AlertType          *int                                                    `json:"AlertType,omitempty" xml:"AlertType,omitempty" require:"true"`
	AlertVersion       *int                                                    `json:"AlertVersion,omitempty" xml:"AlertVersion,omitempty" require:"true"`
	Config             *string                                                 `json:"Config,omitempty" xml:"Config,omitempty" require:"true"`
	ContactGroupIdList *string                                                 `json:"ContactGroupIdList,omitempty" xml:"ContactGroupIdList,omitempty" require:"true"`
	CreateTime         *int64                                                  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	Id                 *int64                                                  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	RegionId           *string                                                 `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Status             *string                                                 `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	TaskId             *int64                                                  `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
	TaskStatus         *string                                                 `json:"TaskStatus,omitempty" xml:"TaskStatus,omitempty" require:"true"`
	UpdateTime         *int64                                                  `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	UserId             *string                                                 `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	AlarmContext       *SearchAlertRulesResponsePageBeanAlertRulesAlarmContext `json:"AlarmContext,omitempty" xml:"AlarmContext,omitempty" require:"true" type:"Struct"`
	AlertRule          *SearchAlertRulesResponsePageBeanAlertRulesAlertRule    `json:"AlertRule,omitempty" xml:"AlertRule,omitempty" require:"true" type:"Struct"`
	MetricParam        *SearchAlertRulesResponsePageBeanAlertRulesMetricParam  `json:"MetricParam,omitempty" xml:"MetricParam,omitempty" require:"true" type:"Struct"`
	Notice             *SearchAlertRulesResponsePageBeanAlertRulesNotice       `json:"Notice,omitempty" xml:"Notice,omitempty" require:"true" type:"Struct"`
	AlertWays          []*string                                               `json:"AlertWays,omitempty" xml:"AlertWays,omitempty" require:"true" type:"Repeated"`
}

func (s SearchAlertRulesResponsePageBeanAlertRules) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertRulesResponsePageBeanAlertRules) GoString() string {
	return s.String()
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetAlertTitle(v string) *SearchAlertRulesResponsePageBeanAlertRules {
	s.AlertTitle = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetAlertLevel(v string) *SearchAlertRulesResponsePageBeanAlertRules {
	s.AlertLevel = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetAlertType(v int) *SearchAlertRulesResponsePageBeanAlertRules {
	s.AlertType = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetAlertVersion(v int) *SearchAlertRulesResponsePageBeanAlertRules {
	s.AlertVersion = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetConfig(v string) *SearchAlertRulesResponsePageBeanAlertRules {
	s.Config = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetContactGroupIdList(v string) *SearchAlertRulesResponsePageBeanAlertRules {
	s.ContactGroupIdList = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetCreateTime(v int64) *SearchAlertRulesResponsePageBeanAlertRules {
	s.CreateTime = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetId(v int64) *SearchAlertRulesResponsePageBeanAlertRules {
	s.Id = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetRegionId(v string) *SearchAlertRulesResponsePageBeanAlertRules {
	s.RegionId = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetStatus(v string) *SearchAlertRulesResponsePageBeanAlertRules {
	s.Status = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetTaskId(v int64) *SearchAlertRulesResponsePageBeanAlertRules {
	s.TaskId = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetTaskStatus(v string) *SearchAlertRulesResponsePageBeanAlertRules {
	s.TaskStatus = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetUpdateTime(v int64) *SearchAlertRulesResponsePageBeanAlertRules {
	s.UpdateTime = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetUserId(v string) *SearchAlertRulesResponsePageBeanAlertRules {
	s.UserId = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetAlarmContext(v *SearchAlertRulesResponsePageBeanAlertRulesAlarmContext) *SearchAlertRulesResponsePageBeanAlertRules {
	s.AlarmContext = v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetAlertRule(v *SearchAlertRulesResponsePageBeanAlertRulesAlertRule) *SearchAlertRulesResponsePageBeanAlertRules {
	s.AlertRule = v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetMetricParam(v *SearchAlertRulesResponsePageBeanAlertRulesMetricParam) *SearchAlertRulesResponsePageBeanAlertRules {
	s.MetricParam = v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetNotice(v *SearchAlertRulesResponsePageBeanAlertRulesNotice) *SearchAlertRulesResponsePageBeanAlertRules {
	s.Notice = v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRules) SetAlertWays(v []*string) *SearchAlertRulesResponsePageBeanAlertRules {
	s.AlertWays = v
	return s
}

type SearchAlertRulesResponsePageBeanAlertRulesAlarmContext struct {
	AlarmContentTemplate *string `json:"AlarmContentTemplate,omitempty" xml:"AlarmContentTemplate,omitempty" require:"true"`
	AlarmContentSubTitle *string `json:"AlarmContentSubTitle,omitempty" xml:"AlarmContentSubTitle,omitempty" require:"true"`
}

func (s SearchAlertRulesResponsePageBeanAlertRulesAlarmContext) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertRulesResponsePageBeanAlertRulesAlarmContext) GoString() string {
	return s.String()
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesAlarmContext) SetAlarmContentTemplate(v string) *SearchAlertRulesResponsePageBeanAlertRulesAlarmContext {
	s.AlarmContentTemplate = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesAlarmContext) SetAlarmContentSubTitle(v string) *SearchAlertRulesResponsePageBeanAlertRulesAlarmContext {
	s.AlarmContentSubTitle = &v
	return s
}

type SearchAlertRulesResponsePageBeanAlertRulesAlertRule struct {
	Operator *string                                                     `json:"Operator,omitempty" xml:"Operator,omitempty" require:"true"`
	Rules    []*SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules `json:"Rules,omitempty" xml:"Rules,omitempty" require:"true" type:"Repeated"`
}

func (s SearchAlertRulesResponsePageBeanAlertRulesAlertRule) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertRulesResponsePageBeanAlertRulesAlertRule) GoString() string {
	return s.String()
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesAlertRule) SetOperator(v string) *SearchAlertRulesResponsePageBeanAlertRulesAlertRule {
	s.Operator = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesAlertRule) SetRules(v []*SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules) *SearchAlertRulesResponsePageBeanAlertRulesAlertRule {
	s.Rules = v
	return s
}

type SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules struct {
	Aggregates *string  `json:"Aggregates,omitempty" xml:"Aggregates,omitempty" require:"true"`
	Alias      *string  `json:"Alias,omitempty" xml:"Alias,omitempty" require:"true"`
	Measure    *string  `json:"Measure,omitempty" xml:"Measure,omitempty" require:"true"`
	NValue     *int     `json:"NValue,omitempty" xml:"NValue,omitempty" require:"true"`
	Operator   *string  `json:"Operator,omitempty" xml:"Operator,omitempty" require:"true"`
	Value      *float32 `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules) GoString() string {
	return s.String()
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules) SetAggregates(v string) *SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules {
	s.Aggregates = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules) SetAlias(v string) *SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules {
	s.Alias = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules) SetMeasure(v string) *SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules {
	s.Measure = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules) SetNValue(v int) *SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules {
	s.NValue = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules) SetOperator(v string) *SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules {
	s.Operator = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules) SetValue(v float32) *SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules {
	s.Value = &v
	return s
}

type SearchAlertRulesResponsePageBeanAlertRulesMetricParam struct {
	AppGroupId *string                                                            `json:"AppGroupId,omitempty" xml:"AppGroupId,omitempty" require:"true"`
	AppId      *string                                                            `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	Pid        *string                                                            `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
	Type       *string                                                            `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Dimensions []*SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions `json:"Dimensions,omitempty" xml:"Dimensions,omitempty" require:"true" type:"Repeated"`
}

func (s SearchAlertRulesResponsePageBeanAlertRulesMetricParam) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertRulesResponsePageBeanAlertRulesMetricParam) GoString() string {
	return s.String()
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesMetricParam) SetAppGroupId(v string) *SearchAlertRulesResponsePageBeanAlertRulesMetricParam {
	s.AppGroupId = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesMetricParam) SetAppId(v string) *SearchAlertRulesResponsePageBeanAlertRulesMetricParam {
	s.AppId = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesMetricParam) SetPid(v string) *SearchAlertRulesResponsePageBeanAlertRulesMetricParam {
	s.Pid = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesMetricParam) SetType(v string) *SearchAlertRulesResponsePageBeanAlertRulesMetricParam {
	s.Type = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesMetricParam) SetDimensions(v []*SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions) *SearchAlertRulesResponsePageBeanAlertRulesMetricParam {
	s.Dimensions = v
	return s
}

type SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Type  *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions) GoString() string {
	return s.String()
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions) SetKey(v string) *SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions {
	s.Key = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions) SetType(v string) *SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions {
	s.Type = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions) SetValue(v string) *SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions {
	s.Value = &v
	return s
}

type SearchAlertRulesResponsePageBeanAlertRulesNotice struct {
	EndTime         *int64 `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	NoticeEndTime   *int64 `json:"NoticeEndTime,omitempty" xml:"NoticeEndTime,omitempty" require:"true"`
	NoticeStartTime *int64 `json:"NoticeStartTime,omitempty" xml:"NoticeStartTime,omitempty" require:"true"`
	StartTime       *int64 `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
}

func (s SearchAlertRulesResponsePageBeanAlertRulesNotice) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertRulesResponsePageBeanAlertRulesNotice) GoString() string {
	return s.String()
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesNotice) SetEndTime(v int64) *SearchAlertRulesResponsePageBeanAlertRulesNotice {
	s.EndTime = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesNotice) SetNoticeEndTime(v int64) *SearchAlertRulesResponsePageBeanAlertRulesNotice {
	s.NoticeEndTime = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesNotice) SetNoticeStartTime(v int64) *SearchAlertRulesResponsePageBeanAlertRulesNotice {
	s.NoticeStartTime = &v
	return s
}

func (s *SearchAlertRulesResponsePageBeanAlertRulesNotice) SetStartTime(v int64) *SearchAlertRulesResponsePageBeanAlertRulesNotice {
	s.StartTime = &v
	return s
}

type DeleteAlertRulesRequest struct {
	AlertIds    *string `json:"AlertIds,omitempty" xml:"AlertIds,omitempty" require:"true"`
	ProxyUserId *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s DeleteAlertRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAlertRulesRequest) GoString() string {
	return s.String()
}

func (s *DeleteAlertRulesRequest) SetAlertIds(v string) *DeleteAlertRulesRequest {
	s.AlertIds = &v
	return s
}

func (s *DeleteAlertRulesRequest) SetProxyUserId(v string) *DeleteAlertRulesRequest {
	s.ProxyUserId = &v
	return s
}

func (s *DeleteAlertRulesRequest) SetRegionId(v string) *DeleteAlertRulesRequest {
	s.RegionId = &v
	return s
}

type DeleteAlertRulesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	IsSuccess *bool   `json:"IsSuccess,omitempty" xml:"IsSuccess,omitempty" require:"true"`
}

func (s DeleteAlertRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAlertRulesResponse) GoString() string {
	return s.String()
}

func (s *DeleteAlertRulesResponse) SetRequestId(v string) *DeleteAlertRulesResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteAlertRulesResponse) SetIsSuccess(v bool) *DeleteAlertRulesResponse {
	s.IsSuccess = &v
	return s
}

type CreateRetcodeAppRequest struct {
	RetcodeAppName *string `json:"RetcodeAppName,omitempty" xml:"RetcodeAppName,omitempty" require:"true"`
	RetcodeAppType *string `json:"RetcodeAppType,omitempty" xml:"RetcodeAppType,omitempty" require:"true"`
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s CreateRetcodeAppRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateRetcodeAppRequest) GoString() string {
	return s.String()
}

func (s *CreateRetcodeAppRequest) SetRetcodeAppName(v string) *CreateRetcodeAppRequest {
	s.RetcodeAppName = &v
	return s
}

func (s *CreateRetcodeAppRequest) SetRetcodeAppType(v string) *CreateRetcodeAppRequest {
	s.RetcodeAppType = &v
	return s
}

func (s *CreateRetcodeAppRequest) SetRegionId(v string) *CreateRetcodeAppRequest {
	s.RegionId = &v
	return s
}

type CreateRetcodeAppResponse struct {
	RequestId          *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RetcodeAppDataBean *CreateRetcodeAppResponseRetcodeAppDataBean `json:"RetcodeAppDataBean,omitempty" xml:"RetcodeAppDataBean,omitempty" require:"true" type:"Struct"`
}

func (s CreateRetcodeAppResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateRetcodeAppResponse) GoString() string {
	return s.String()
}

func (s *CreateRetcodeAppResponse) SetRequestId(v string) *CreateRetcodeAppResponse {
	s.RequestId = &v
	return s
}

func (s *CreateRetcodeAppResponse) SetRetcodeAppDataBean(v *CreateRetcodeAppResponseRetcodeAppDataBean) *CreateRetcodeAppResponse {
	s.RetcodeAppDataBean = v
	return s
}

type CreateRetcodeAppResponseRetcodeAppDataBean struct {
	AppId *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	Pid   *string `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
}

func (s CreateRetcodeAppResponseRetcodeAppDataBean) String() string {
	return tea.Prettify(s)
}

func (s CreateRetcodeAppResponseRetcodeAppDataBean) GoString() string {
	return s.String()
}

func (s *CreateRetcodeAppResponseRetcodeAppDataBean) SetAppId(v int64) *CreateRetcodeAppResponseRetcodeAppDataBean {
	s.AppId = &v
	return s
}

func (s *CreateRetcodeAppResponseRetcodeAppDataBean) SetPid(v string) *CreateRetcodeAppResponseRetcodeAppDataBean {
	s.Pid = &v
	return s
}

type DeleteRetcodeAppRequest struct {
	AppId    *string `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s DeleteRetcodeAppRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteRetcodeAppRequest) GoString() string {
	return s.String()
}

func (s *DeleteRetcodeAppRequest) SetAppId(v string) *DeleteRetcodeAppRequest {
	s.AppId = &v
	return s
}

func (s *DeleteRetcodeAppRequest) SetRegionId(v string) *DeleteRetcodeAppRequest {
	s.RegionId = &v
	return s
}

type DeleteRetcodeAppResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s DeleteRetcodeAppResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteRetcodeAppResponse) GoString() string {
	return s.String()
}

func (s *DeleteRetcodeAppResponse) SetRequestId(v string) *DeleteRetcodeAppResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteRetcodeAppResponse) SetData(v string) *DeleteRetcodeAppResponse {
	s.Data = &v
	return s
}

type QueryDatasetRequest struct {
	DatasetId     *int64                             `json:"DatasetId,omitempty" xml:"DatasetId,omitempty" require:"true"`
	IntervalInSec *int                               `json:"IntervalInSec,omitempty" xml:"IntervalInSec,omitempty" require:"true"`
	DateStr       *string                            `json:"DateStr,omitempty" xml:"DateStr,omitempty"`
	MinTime       *int64                             `json:"MinTime,omitempty" xml:"MinTime,omitempty" require:"true"`
	MaxTime       *int64                             `json:"MaxTime,omitempty" xml:"MaxTime,omitempty" require:"true"`
	IsDrillDown   *bool                              `json:"IsDrillDown,omitempty" xml:"IsDrillDown,omitempty"`
	OrderByKey    *string                            `json:"OrderByKey,omitempty" xml:"OrderByKey,omitempty"`
	Limit         *int                               `json:"Limit,omitempty" xml:"Limit,omitempty"`
	ReduceTail    *bool                              `json:"ReduceTail,omitempty" xml:"ReduceTail,omitempty"`
	HungryMode    *bool                              `json:"HungryMode,omitempty" xml:"HungryMode,omitempty"`
	Measures      []*string                          `json:"Measures,omitempty" xml:"Measures,omitempty" type:"Repeated"`
	Dimensions    []*QueryDatasetRequestDimensions   `json:"Dimensions,omitempty" xml:"Dimensions,omitempty" type:"Repeated"`
	RequiredDims  []*QueryDatasetRequestRequiredDims `json:"RequiredDims,omitempty" xml:"RequiredDims,omitempty" type:"Repeated"`
	OptionalDims  []*QueryDatasetRequestOptionalDims `json:"OptionalDims,omitempty" xml:"OptionalDims,omitempty" type:"Repeated"`
	ProxyUserId   *string                            `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
}

func (s QueryDatasetRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryDatasetRequest) GoString() string {
	return s.String()
}

func (s *QueryDatasetRequest) SetDatasetId(v int64) *QueryDatasetRequest {
	s.DatasetId = &v
	return s
}

func (s *QueryDatasetRequest) SetIntervalInSec(v int) *QueryDatasetRequest {
	s.IntervalInSec = &v
	return s
}

func (s *QueryDatasetRequest) SetDateStr(v string) *QueryDatasetRequest {
	s.DateStr = &v
	return s
}

func (s *QueryDatasetRequest) SetMinTime(v int64) *QueryDatasetRequest {
	s.MinTime = &v
	return s
}

func (s *QueryDatasetRequest) SetMaxTime(v int64) *QueryDatasetRequest {
	s.MaxTime = &v
	return s
}

func (s *QueryDatasetRequest) SetIsDrillDown(v bool) *QueryDatasetRequest {
	s.IsDrillDown = &v
	return s
}

func (s *QueryDatasetRequest) SetOrderByKey(v string) *QueryDatasetRequest {
	s.OrderByKey = &v
	return s
}

func (s *QueryDatasetRequest) SetLimit(v int) *QueryDatasetRequest {
	s.Limit = &v
	return s
}

func (s *QueryDatasetRequest) SetReduceTail(v bool) *QueryDatasetRequest {
	s.ReduceTail = &v
	return s
}

func (s *QueryDatasetRequest) SetHungryMode(v bool) *QueryDatasetRequest {
	s.HungryMode = &v
	return s
}

func (s *QueryDatasetRequest) SetMeasures(v []*string) *QueryDatasetRequest {
	s.Measures = v
	return s
}

func (s *QueryDatasetRequest) SetDimensions(v []*QueryDatasetRequestDimensions) *QueryDatasetRequest {
	s.Dimensions = v
	return s
}

func (s *QueryDatasetRequest) SetRequiredDims(v []*QueryDatasetRequestRequiredDims) *QueryDatasetRequest {
	s.RequiredDims = v
	return s
}

func (s *QueryDatasetRequest) SetOptionalDims(v []*QueryDatasetRequestOptionalDims) *QueryDatasetRequest {
	s.OptionalDims = v
	return s
}

func (s *QueryDatasetRequest) SetProxyUserId(v string) *QueryDatasetRequest {
	s.ProxyUserId = &v
	return s
}

type QueryDatasetRequestDimensions struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
	Type  *string `json:"Type,omitempty" xml:"Type,omitempty"`
}

func (s QueryDatasetRequestDimensions) String() string {
	return tea.Prettify(s)
}

func (s QueryDatasetRequestDimensions) GoString() string {
	return s.String()
}

func (s *QueryDatasetRequestDimensions) SetKey(v string) *QueryDatasetRequestDimensions {
	s.Key = &v
	return s
}

func (s *QueryDatasetRequestDimensions) SetValue(v string) *QueryDatasetRequestDimensions {
	s.Value = &v
	return s
}

func (s *QueryDatasetRequestDimensions) SetType(v string) *QueryDatasetRequestDimensions {
	s.Type = &v
	return s
}

type QueryDatasetRequestRequiredDims struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
	Type  *string `json:"Type,omitempty" xml:"Type,omitempty"`
}

func (s QueryDatasetRequestRequiredDims) String() string {
	return tea.Prettify(s)
}

func (s QueryDatasetRequestRequiredDims) GoString() string {
	return s.String()
}

func (s *QueryDatasetRequestRequiredDims) SetKey(v string) *QueryDatasetRequestRequiredDims {
	s.Key = &v
	return s
}

func (s *QueryDatasetRequestRequiredDims) SetValue(v string) *QueryDatasetRequestRequiredDims {
	s.Value = &v
	return s
}

func (s *QueryDatasetRequestRequiredDims) SetType(v string) *QueryDatasetRequestRequiredDims {
	s.Type = &v
	return s
}

type QueryDatasetRequestOptionalDims struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
	Type  *string `json:"Type,omitempty" xml:"Type,omitempty"`
}

func (s QueryDatasetRequestOptionalDims) String() string {
	return tea.Prettify(s)
}

func (s QueryDatasetRequestOptionalDims) GoString() string {
	return s.String()
}

func (s *QueryDatasetRequestOptionalDims) SetKey(v string) *QueryDatasetRequestOptionalDims {
	s.Key = &v
	return s
}

func (s *QueryDatasetRequestOptionalDims) SetValue(v string) *QueryDatasetRequestOptionalDims {
	s.Value = &v
	return s
}

func (s *QueryDatasetRequestOptionalDims) SetType(v string) *QueryDatasetRequestOptionalDims {
	s.Type = &v
	return s
}

type QueryDatasetResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s QueryDatasetResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryDatasetResponse) GoString() string {
	return s.String()
}

func (s *QueryDatasetResponse) SetRequestId(v string) *QueryDatasetResponse {
	s.RequestId = &v
	return s
}

func (s *QueryDatasetResponse) SetData(v string) *QueryDatasetResponse {
	s.Data = &v
	return s
}

type QueryMetricRequest struct {
	IntervalInSec            *int                         `json:"IntervalInSec,omitempty" xml:"IntervalInSec,omitempty"`
	StartTime                *int64                       `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime                  *int64                       `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	OrderBy                  *string                      `json:"OrderBy,omitempty" xml:"OrderBy,omitempty"`
	Limit                    *int                         `json:"Limit,omitempty" xml:"Limit,omitempty"`
	Filters                  []*QueryMetricRequestFilters `json:"Filters,omitempty" xml:"Filters,omitempty" type:"Repeated"`
	Dimensions               []*string                    `json:"Dimensions,omitempty" xml:"Dimensions,omitempty" type:"Repeated"`
	Metric                   *string                      `json:"Metric,omitempty" xml:"Metric,omitempty" require:"true"`
	Measures                 []*string                    `json:"Measures,omitempty" xml:"Measures,omitempty" require:"true" type:"Repeated"`
	Order                    *string                      `json:"Order,omitempty" xml:"Order,omitempty"`
	ProxyUserId              *string                      `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	ConsistencyDataKey       *string                      `json:"ConsistencyDataKey,omitempty" xml:"ConsistencyDataKey,omitempty"`
	ConsistencyQueryStrategy *string                      `json:"ConsistencyQueryStrategy,omitempty" xml:"ConsistencyQueryStrategy,omitempty"`
}

func (s QueryMetricRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryMetricRequest) GoString() string {
	return s.String()
}

func (s *QueryMetricRequest) SetIntervalInSec(v int) *QueryMetricRequest {
	s.IntervalInSec = &v
	return s
}

func (s *QueryMetricRequest) SetStartTime(v int64) *QueryMetricRequest {
	s.StartTime = &v
	return s
}

func (s *QueryMetricRequest) SetEndTime(v int64) *QueryMetricRequest {
	s.EndTime = &v
	return s
}

func (s *QueryMetricRequest) SetOrderBy(v string) *QueryMetricRequest {
	s.OrderBy = &v
	return s
}

func (s *QueryMetricRequest) SetLimit(v int) *QueryMetricRequest {
	s.Limit = &v
	return s
}

func (s *QueryMetricRequest) SetFilters(v []*QueryMetricRequestFilters) *QueryMetricRequest {
	s.Filters = v
	return s
}

func (s *QueryMetricRequest) SetDimensions(v []*string) *QueryMetricRequest {
	s.Dimensions = v
	return s
}

func (s *QueryMetricRequest) SetMetric(v string) *QueryMetricRequest {
	s.Metric = &v
	return s
}

func (s *QueryMetricRequest) SetMeasures(v []*string) *QueryMetricRequest {
	s.Measures = v
	return s
}

func (s *QueryMetricRequest) SetOrder(v string) *QueryMetricRequest {
	s.Order = &v
	return s
}

func (s *QueryMetricRequest) SetProxyUserId(v string) *QueryMetricRequest {
	s.ProxyUserId = &v
	return s
}

func (s *QueryMetricRequest) SetConsistencyDataKey(v string) *QueryMetricRequest {
	s.ConsistencyDataKey = &v
	return s
}

func (s *QueryMetricRequest) SetConsistencyQueryStrategy(v string) *QueryMetricRequest {
	s.ConsistencyQueryStrategy = &v
	return s
}

type QueryMetricRequestFilters struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s QueryMetricRequestFilters) String() string {
	return tea.Prettify(s)
}

func (s QueryMetricRequestFilters) GoString() string {
	return s.String()
}

func (s *QueryMetricRequestFilters) SetKey(v string) *QueryMetricRequestFilters {
	s.Key = &v
	return s
}

func (s *QueryMetricRequestFilters) SetValue(v string) *QueryMetricRequestFilters {
	s.Value = &v
	return s
}

type QueryMetricResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s QueryMetricResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryMetricResponse) GoString() string {
	return s.String()
}

func (s *QueryMetricResponse) SetRequestId(v string) *QueryMetricResponse {
	s.RequestId = &v
	return s
}

func (s *QueryMetricResponse) SetData(v string) *QueryMetricResponse {
	s.Data = &v
	return s
}

type CreateAlertContactRequest struct {
	ContactName         *string `json:"ContactName,omitempty" xml:"ContactName,omitempty"`
	PhoneNum            *string `json:"PhoneNum,omitempty" xml:"PhoneNum,omitempty"`
	Email               *string `json:"Email,omitempty" xml:"Email,omitempty"`
	DingRobotWebhookUrl *string `json:"DingRobotWebhookUrl,omitempty" xml:"DingRobotWebhookUrl,omitempty"`
	SystemNoc           *bool   `json:"SystemNoc,omitempty" xml:"SystemNoc,omitempty"`
	RegionId            *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ProxyUserId         *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
}

func (s CreateAlertContactRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateAlertContactRequest) GoString() string {
	return s.String()
}

func (s *CreateAlertContactRequest) SetContactName(v string) *CreateAlertContactRequest {
	s.ContactName = &v
	return s
}

func (s *CreateAlertContactRequest) SetPhoneNum(v string) *CreateAlertContactRequest {
	s.PhoneNum = &v
	return s
}

func (s *CreateAlertContactRequest) SetEmail(v string) *CreateAlertContactRequest {
	s.Email = &v
	return s
}

func (s *CreateAlertContactRequest) SetDingRobotWebhookUrl(v string) *CreateAlertContactRequest {
	s.DingRobotWebhookUrl = &v
	return s
}

func (s *CreateAlertContactRequest) SetSystemNoc(v bool) *CreateAlertContactRequest {
	s.SystemNoc = &v
	return s
}

func (s *CreateAlertContactRequest) SetRegionId(v string) *CreateAlertContactRequest {
	s.RegionId = &v
	return s
}

func (s *CreateAlertContactRequest) SetProxyUserId(v string) *CreateAlertContactRequest {
	s.ProxyUserId = &v
	return s
}

type CreateAlertContactResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ContactId *string `json:"ContactId,omitempty" xml:"ContactId,omitempty" require:"true"`
}

func (s CreateAlertContactResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateAlertContactResponse) GoString() string {
	return s.String()
}

func (s *CreateAlertContactResponse) SetRequestId(v string) *CreateAlertContactResponse {
	s.RequestId = &v
	return s
}

func (s *CreateAlertContactResponse) SetContactId(v string) *CreateAlertContactResponse {
	s.ContactId = &v
	return s
}

type CreateAlertContactGroupRequest struct {
	ContactGroupName *string `json:"ContactGroupName,omitempty" xml:"ContactGroupName,omitempty" require:"true"`
	ContactIds       *string `json:"ContactIds,omitempty" xml:"ContactIds,omitempty"`
	RegionId         *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ProxyUserId      *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
}

func (s CreateAlertContactGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateAlertContactGroupRequest) GoString() string {
	return s.String()
}

func (s *CreateAlertContactGroupRequest) SetContactGroupName(v string) *CreateAlertContactGroupRequest {
	s.ContactGroupName = &v
	return s
}

func (s *CreateAlertContactGroupRequest) SetContactIds(v string) *CreateAlertContactGroupRequest {
	s.ContactIds = &v
	return s
}

func (s *CreateAlertContactGroupRequest) SetRegionId(v string) *CreateAlertContactGroupRequest {
	s.RegionId = &v
	return s
}

func (s *CreateAlertContactGroupRequest) SetProxyUserId(v string) *CreateAlertContactGroupRequest {
	s.ProxyUserId = &v
	return s
}

type CreateAlertContactGroupResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ContactGroupId *string `json:"ContactGroupId,omitempty" xml:"ContactGroupId,omitempty" require:"true"`
}

func (s CreateAlertContactGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateAlertContactGroupResponse) GoString() string {
	return s.String()
}

func (s *CreateAlertContactGroupResponse) SetRequestId(v string) *CreateAlertContactGroupResponse {
	s.RequestId = &v
	return s
}

func (s *CreateAlertContactGroupResponse) SetContactGroupId(v string) *CreateAlertContactGroupResponse {
	s.ContactGroupId = &v
	return s
}

type SearchAlertContactRequest struct {
	ContactName *string `json:"ContactName,omitempty" xml:"ContactName,omitempty"`
	Phone       *string `json:"Phone,omitempty" xml:"Phone,omitempty"`
	Email       *string `json:"Email,omitempty" xml:"Email,omitempty"`
	CurrentPage *string `json:"CurrentPage,omitempty" xml:"CurrentPage,omitempty" require:"true"`
	PageSize    *string `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ProxyUserId *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
}

func (s SearchAlertContactRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertContactRequest) GoString() string {
	return s.String()
}

func (s *SearchAlertContactRequest) SetContactName(v string) *SearchAlertContactRequest {
	s.ContactName = &v
	return s
}

func (s *SearchAlertContactRequest) SetPhone(v string) *SearchAlertContactRequest {
	s.Phone = &v
	return s
}

func (s *SearchAlertContactRequest) SetEmail(v string) *SearchAlertContactRequest {
	s.Email = &v
	return s
}

func (s *SearchAlertContactRequest) SetCurrentPage(v string) *SearchAlertContactRequest {
	s.CurrentPage = &v
	return s
}

func (s *SearchAlertContactRequest) SetPageSize(v string) *SearchAlertContactRequest {
	s.PageSize = &v
	return s
}

func (s *SearchAlertContactRequest) SetRegionId(v string) *SearchAlertContactRequest {
	s.RegionId = &v
	return s
}

func (s *SearchAlertContactRequest) SetProxyUserId(v string) *SearchAlertContactRequest {
	s.ProxyUserId = &v
	return s
}

type SearchAlertContactResponse struct {
	RequestId *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageBean  *SearchAlertContactResponsePageBean `json:"PageBean,omitempty" xml:"PageBean,omitempty" require:"true" type:"Struct"`
}

func (s SearchAlertContactResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertContactResponse) GoString() string {
	return s.String()
}

func (s *SearchAlertContactResponse) SetRequestId(v string) *SearchAlertContactResponse {
	s.RequestId = &v
	return s
}

func (s *SearchAlertContactResponse) SetPageBean(v *SearchAlertContactResponsePageBean) *SearchAlertContactResponse {
	s.PageBean = v
	return s
}

type SearchAlertContactResponsePageBean struct {
	TotalCount *int                                          `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber *int                                          `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                          `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Contacts   []*SearchAlertContactResponsePageBeanContacts `json:"Contacts,omitempty" xml:"Contacts,omitempty" require:"true" type:"Repeated"`
}

func (s SearchAlertContactResponsePageBean) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertContactResponsePageBean) GoString() string {
	return s.String()
}

func (s *SearchAlertContactResponsePageBean) SetTotalCount(v int) *SearchAlertContactResponsePageBean {
	s.TotalCount = &v
	return s
}

func (s *SearchAlertContactResponsePageBean) SetPageNumber(v int) *SearchAlertContactResponsePageBean {
	s.PageNumber = &v
	return s
}

func (s *SearchAlertContactResponsePageBean) SetPageSize(v int) *SearchAlertContactResponsePageBean {
	s.PageSize = &v
	return s
}

func (s *SearchAlertContactResponsePageBean) SetContacts(v []*SearchAlertContactResponsePageBeanContacts) *SearchAlertContactResponsePageBean {
	s.Contacts = v
	return s
}

type SearchAlertContactResponsePageBeanContacts struct {
	ContactId   *int64  `json:"ContactId,omitempty" xml:"ContactId,omitempty" require:"true"`
	ContactName *string `json:"ContactName,omitempty" xml:"ContactName,omitempty" require:"true"`
	Phone       *string `json:"Phone,omitempty" xml:"Phone,omitempty" require:"true"`
	Email       *string `json:"Email,omitempty" xml:"Email,omitempty" require:"true"`
	UserId      *string `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	DingRobot   *string `json:"DingRobot,omitempty" xml:"DingRobot,omitempty" require:"true"`
	CreateTime  *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	UpdateTime  *int64  `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	SystemNoc   *bool   `json:"SystemNoc,omitempty" xml:"SystemNoc,omitempty" require:"true"`
}

func (s SearchAlertContactResponsePageBeanContacts) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertContactResponsePageBeanContacts) GoString() string {
	return s.String()
}

func (s *SearchAlertContactResponsePageBeanContacts) SetContactId(v int64) *SearchAlertContactResponsePageBeanContacts {
	s.ContactId = &v
	return s
}

func (s *SearchAlertContactResponsePageBeanContacts) SetContactName(v string) *SearchAlertContactResponsePageBeanContacts {
	s.ContactName = &v
	return s
}

func (s *SearchAlertContactResponsePageBeanContacts) SetPhone(v string) *SearchAlertContactResponsePageBeanContacts {
	s.Phone = &v
	return s
}

func (s *SearchAlertContactResponsePageBeanContacts) SetEmail(v string) *SearchAlertContactResponsePageBeanContacts {
	s.Email = &v
	return s
}

func (s *SearchAlertContactResponsePageBeanContacts) SetUserId(v string) *SearchAlertContactResponsePageBeanContacts {
	s.UserId = &v
	return s
}

func (s *SearchAlertContactResponsePageBeanContacts) SetDingRobot(v string) *SearchAlertContactResponsePageBeanContacts {
	s.DingRobot = &v
	return s
}

func (s *SearchAlertContactResponsePageBeanContacts) SetCreateTime(v int64) *SearchAlertContactResponsePageBeanContacts {
	s.CreateTime = &v
	return s
}

func (s *SearchAlertContactResponsePageBeanContacts) SetUpdateTime(v int64) *SearchAlertContactResponsePageBeanContacts {
	s.UpdateTime = &v
	return s
}

func (s *SearchAlertContactResponsePageBeanContacts) SetSystemNoc(v bool) *SearchAlertContactResponsePageBeanContacts {
	s.SystemNoc = &v
	return s
}

type SearchAlertContactGroupRequest struct {
	ContactGroupName *string `json:"ContactGroupName,omitempty" xml:"ContactGroupName,omitempty"`
	RegionId         *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ProxyUserId      *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
	ContactName      *string `json:"ContactName,omitempty" xml:"ContactName,omitempty"`
	ContactId        *int64  `json:"ContactId,omitempty" xml:"ContactId,omitempty"`
}

func (s SearchAlertContactGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertContactGroupRequest) GoString() string {
	return s.String()
}

func (s *SearchAlertContactGroupRequest) SetContactGroupName(v string) *SearchAlertContactGroupRequest {
	s.ContactGroupName = &v
	return s
}

func (s *SearchAlertContactGroupRequest) SetRegionId(v string) *SearchAlertContactGroupRequest {
	s.RegionId = &v
	return s
}

func (s *SearchAlertContactGroupRequest) SetProxyUserId(v string) *SearchAlertContactGroupRequest {
	s.ProxyUserId = &v
	return s
}

func (s *SearchAlertContactGroupRequest) SetContactName(v string) *SearchAlertContactGroupRequest {
	s.ContactName = &v
	return s
}

func (s *SearchAlertContactGroupRequest) SetContactId(v int64) *SearchAlertContactGroupRequest {
	s.ContactId = &v
	return s
}

type SearchAlertContactGroupResponse struct {
	RequestId     *string                                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ContactGroups []*SearchAlertContactGroupResponseContactGroups `json:"ContactGroups,omitempty" xml:"ContactGroups,omitempty" require:"true" type:"Repeated"`
}

func (s SearchAlertContactGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertContactGroupResponse) GoString() string {
	return s.String()
}

func (s *SearchAlertContactGroupResponse) SetRequestId(v string) *SearchAlertContactGroupResponse {
	s.RequestId = &v
	return s
}

func (s *SearchAlertContactGroupResponse) SetContactGroups(v []*SearchAlertContactGroupResponseContactGroups) *SearchAlertContactGroupResponse {
	s.ContactGroups = v
	return s
}

type SearchAlertContactGroupResponseContactGroups struct {
	ContactGroupId   *int64  `json:"ContactGroupId,omitempty" xml:"ContactGroupId,omitempty" require:"true"`
	ContactGroupName *string `json:"ContactGroupName,omitempty" xml:"ContactGroupName,omitempty" require:"true"`
	UserId           *string `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	CreateTime       *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	UpdateTime       *int64  `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
}

func (s SearchAlertContactGroupResponseContactGroups) String() string {
	return tea.Prettify(s)
}

func (s SearchAlertContactGroupResponseContactGroups) GoString() string {
	return s.String()
}

func (s *SearchAlertContactGroupResponseContactGroups) SetContactGroupId(v int64) *SearchAlertContactGroupResponseContactGroups {
	s.ContactGroupId = &v
	return s
}

func (s *SearchAlertContactGroupResponseContactGroups) SetContactGroupName(v string) *SearchAlertContactGroupResponseContactGroups {
	s.ContactGroupName = &v
	return s
}

func (s *SearchAlertContactGroupResponseContactGroups) SetUserId(v string) *SearchAlertContactGroupResponseContactGroups {
	s.UserId = &v
	return s
}

func (s *SearchAlertContactGroupResponseContactGroups) SetCreateTime(v int64) *SearchAlertContactGroupResponseContactGroups {
	s.CreateTime = &v
	return s
}

func (s *SearchAlertContactGroupResponseContactGroups) SetUpdateTime(v int64) *SearchAlertContactGroupResponseContactGroups {
	s.UpdateTime = &v
	return s
}

type ImportAppAlertRulesRequest struct {
	TemplateAlertId     *string `json:"TemplateAlertId,omitempty" xml:"TemplateAlertId,omitempty"`
	Pids                *string `json:"Pids,omitempty" xml:"Pids,omitempty" require:"true"`
	RegionId            *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ContactGroupIds     *string `json:"ContactGroupIds,omitempty" xml:"ContactGroupIds,omitempty"`
	IsAutoStart         *bool   `json:"IsAutoStart,omitempty" xml:"IsAutoStart,omitempty"`
	TemplageAlertConfig *string `json:"TemplageAlertConfig,omitempty" xml:"TemplageAlertConfig,omitempty"`
	ProxyUserId         *string `json:"ProxyUserId,omitempty" xml:"ProxyUserId,omitempty"`
}

func (s ImportAppAlertRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s ImportAppAlertRulesRequest) GoString() string {
	return s.String()
}

func (s *ImportAppAlertRulesRequest) SetTemplateAlertId(v string) *ImportAppAlertRulesRequest {
	s.TemplateAlertId = &v
	return s
}

func (s *ImportAppAlertRulesRequest) SetPids(v string) *ImportAppAlertRulesRequest {
	s.Pids = &v
	return s
}

func (s *ImportAppAlertRulesRequest) SetRegionId(v string) *ImportAppAlertRulesRequest {
	s.RegionId = &v
	return s
}

func (s *ImportAppAlertRulesRequest) SetContactGroupIds(v string) *ImportAppAlertRulesRequest {
	s.ContactGroupIds = &v
	return s
}

func (s *ImportAppAlertRulesRequest) SetIsAutoStart(v bool) *ImportAppAlertRulesRequest {
	s.IsAutoStart = &v
	return s
}

func (s *ImportAppAlertRulesRequest) SetTemplageAlertConfig(v string) *ImportAppAlertRulesRequest {
	s.TemplageAlertConfig = &v
	return s
}

func (s *ImportAppAlertRulesRequest) SetProxyUserId(v string) *ImportAppAlertRulesRequest {
	s.ProxyUserId = &v
	return s
}

type ImportAppAlertRulesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s ImportAppAlertRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s ImportAppAlertRulesResponse) GoString() string {
	return s.String()
}

func (s *ImportAppAlertRulesResponse) SetRequestId(v string) *ImportAppAlertRulesResponse {
	s.RequestId = &v
	return s
}

func (s *ImportAppAlertRulesResponse) SetData(v string) *ImportAppAlertRulesResponse {
	s.Data = &v
	return s
}

type SearchRetcodeAppByPageRequest struct {
	RetcodeAppName *string `json:"RetcodeAppName,omitempty" xml:"RetcodeAppName,omitempty"`
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s SearchRetcodeAppByPageRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchRetcodeAppByPageRequest) GoString() string {
	return s.String()
}

func (s *SearchRetcodeAppByPageRequest) SetRetcodeAppName(v string) *SearchRetcodeAppByPageRequest {
	s.RetcodeAppName = &v
	return s
}

func (s *SearchRetcodeAppByPageRequest) SetPageNumber(v int) *SearchRetcodeAppByPageRequest {
	s.PageNumber = &v
	return s
}

func (s *SearchRetcodeAppByPageRequest) SetPageSize(v int) *SearchRetcodeAppByPageRequest {
	s.PageSize = &v
	return s
}

func (s *SearchRetcodeAppByPageRequest) SetRegionId(v string) *SearchRetcodeAppByPageRequest {
	s.RegionId = &v
	return s
}

type SearchRetcodeAppByPageResponse struct {
	RequestId *string                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageBean  *SearchRetcodeAppByPageResponsePageBean `json:"PageBean,omitempty" xml:"PageBean,omitempty" require:"true" type:"Struct"`
}

func (s SearchRetcodeAppByPageResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchRetcodeAppByPageResponse) GoString() string {
	return s.String()
}

func (s *SearchRetcodeAppByPageResponse) SetRequestId(v string) *SearchRetcodeAppByPageResponse {
	s.RequestId = &v
	return s
}

func (s *SearchRetcodeAppByPageResponse) SetPageBean(v *SearchRetcodeAppByPageResponsePageBean) *SearchRetcodeAppByPageResponse {
	s.PageBean = v
	return s
}

type SearchRetcodeAppByPageResponsePageBean struct {
	TotalCount  *int                                                 `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber  *int                                                 `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize    *int                                                 `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	RetcodeApps []*SearchRetcodeAppByPageResponsePageBeanRetcodeApps `json:"RetcodeApps,omitempty" xml:"RetcodeApps,omitempty" require:"true" type:"Repeated"`
}

func (s SearchRetcodeAppByPageResponsePageBean) String() string {
	return tea.Prettify(s)
}

func (s SearchRetcodeAppByPageResponsePageBean) GoString() string {
	return s.String()
}

func (s *SearchRetcodeAppByPageResponsePageBean) SetTotalCount(v int) *SearchRetcodeAppByPageResponsePageBean {
	s.TotalCount = &v
	return s
}

func (s *SearchRetcodeAppByPageResponsePageBean) SetPageNumber(v int) *SearchRetcodeAppByPageResponsePageBean {
	s.PageNumber = &v
	return s
}

func (s *SearchRetcodeAppByPageResponsePageBean) SetPageSize(v int) *SearchRetcodeAppByPageResponsePageBean {
	s.PageSize = &v
	return s
}

func (s *SearchRetcodeAppByPageResponsePageBean) SetRetcodeApps(v []*SearchRetcodeAppByPageResponsePageBeanRetcodeApps) *SearchRetcodeAppByPageResponsePageBean {
	s.RetcodeApps = v
	return s
}

type SearchRetcodeAppByPageResponsePageBeanRetcodeApps struct {
	AppId      *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	Pid        *string `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
	AppName    *string `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
	Type       *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	UserId     *string `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	RegionId   *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	CreateTime *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	UpdateTime *int64  `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
}

func (s SearchRetcodeAppByPageResponsePageBeanRetcodeApps) String() string {
	return tea.Prettify(s)
}

func (s SearchRetcodeAppByPageResponsePageBeanRetcodeApps) GoString() string {
	return s.String()
}

func (s *SearchRetcodeAppByPageResponsePageBeanRetcodeApps) SetAppId(v int64) *SearchRetcodeAppByPageResponsePageBeanRetcodeApps {
	s.AppId = &v
	return s
}

func (s *SearchRetcodeAppByPageResponsePageBeanRetcodeApps) SetPid(v string) *SearchRetcodeAppByPageResponsePageBeanRetcodeApps {
	s.Pid = &v
	return s
}

func (s *SearchRetcodeAppByPageResponsePageBeanRetcodeApps) SetAppName(v string) *SearchRetcodeAppByPageResponsePageBeanRetcodeApps {
	s.AppName = &v
	return s
}

func (s *SearchRetcodeAppByPageResponsePageBeanRetcodeApps) SetType(v string) *SearchRetcodeAppByPageResponsePageBeanRetcodeApps {
	s.Type = &v
	return s
}

func (s *SearchRetcodeAppByPageResponsePageBeanRetcodeApps) SetUserId(v string) *SearchRetcodeAppByPageResponsePageBeanRetcodeApps {
	s.UserId = &v
	return s
}

func (s *SearchRetcodeAppByPageResponsePageBeanRetcodeApps) SetRegionId(v string) *SearchRetcodeAppByPageResponsePageBeanRetcodeApps {
	s.RegionId = &v
	return s
}

func (s *SearchRetcodeAppByPageResponsePageBeanRetcodeApps) SetCreateTime(v int64) *SearchRetcodeAppByPageResponsePageBeanRetcodeApps {
	s.CreateTime = &v
	return s
}

func (s *SearchRetcodeAppByPageResponsePageBeanRetcodeApps) SetUpdateTime(v int64) *SearchRetcodeAppByPageResponsePageBeanRetcodeApps {
	s.UpdateTime = &v
	return s
}

type SearchTraceAppByNameRequest struct {
	TraceAppName *string `json:"TraceAppName,omitempty" xml:"TraceAppName,omitempty"`
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s SearchTraceAppByNameRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchTraceAppByNameRequest) GoString() string {
	return s.String()
}

func (s *SearchTraceAppByNameRequest) SetTraceAppName(v string) *SearchTraceAppByNameRequest {
	s.TraceAppName = &v
	return s
}

func (s *SearchTraceAppByNameRequest) SetRegionId(v string) *SearchTraceAppByNameRequest {
	s.RegionId = &v
	return s
}

type SearchTraceAppByNameResponse struct {
	RequestId *string                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TraceApps []*SearchTraceAppByNameResponseTraceApps `json:"TraceApps,omitempty" xml:"TraceApps,omitempty" require:"true" type:"Repeated"`
}

func (s SearchTraceAppByNameResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchTraceAppByNameResponse) GoString() string {
	return s.String()
}

func (s *SearchTraceAppByNameResponse) SetRequestId(v string) *SearchTraceAppByNameResponse {
	s.RequestId = &v
	return s
}

func (s *SearchTraceAppByNameResponse) SetTraceApps(v []*SearchTraceAppByNameResponseTraceApps) *SearchTraceAppByNameResponse {
	s.TraceApps = v
	return s
}

type SearchTraceAppByNameResponseTraceApps struct {
	AppId      *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	Pid        *string `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
	AppName    *string `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
	Type       *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	UserId     *string `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	RegionId   *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	CreateTime *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	UpdateTime *int64  `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	Show       *bool   `json:"Show,omitempty" xml:"Show,omitempty" require:"true"`
}

func (s SearchTraceAppByNameResponseTraceApps) String() string {
	return tea.Prettify(s)
}

func (s SearchTraceAppByNameResponseTraceApps) GoString() string {
	return s.String()
}

func (s *SearchTraceAppByNameResponseTraceApps) SetAppId(v int64) *SearchTraceAppByNameResponseTraceApps {
	s.AppId = &v
	return s
}

func (s *SearchTraceAppByNameResponseTraceApps) SetPid(v string) *SearchTraceAppByNameResponseTraceApps {
	s.Pid = &v
	return s
}

func (s *SearchTraceAppByNameResponseTraceApps) SetAppName(v string) *SearchTraceAppByNameResponseTraceApps {
	s.AppName = &v
	return s
}

func (s *SearchTraceAppByNameResponseTraceApps) SetType(v string) *SearchTraceAppByNameResponseTraceApps {
	s.Type = &v
	return s
}

func (s *SearchTraceAppByNameResponseTraceApps) SetUserId(v string) *SearchTraceAppByNameResponseTraceApps {
	s.UserId = &v
	return s
}

func (s *SearchTraceAppByNameResponseTraceApps) SetRegionId(v string) *SearchTraceAppByNameResponseTraceApps {
	s.RegionId = &v
	return s
}

func (s *SearchTraceAppByNameResponseTraceApps) SetCreateTime(v int64) *SearchTraceAppByNameResponseTraceApps {
	s.CreateTime = &v
	return s
}

func (s *SearchTraceAppByNameResponseTraceApps) SetUpdateTime(v int64) *SearchTraceAppByNameResponseTraceApps {
	s.UpdateTime = &v
	return s
}

func (s *SearchTraceAppByNameResponseTraceApps) SetShow(v bool) *SearchTraceAppByNameResponseTraceApps {
	s.Show = &v
	return s
}

type SearchTraceAppByPageRequest struct {
	TraceAppName *string `json:"TraceAppName,omitempty" xml:"TraceAppName,omitempty"`
	PageNumber   *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize     *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s SearchTraceAppByPageRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchTraceAppByPageRequest) GoString() string {
	return s.String()
}

func (s *SearchTraceAppByPageRequest) SetTraceAppName(v string) *SearchTraceAppByPageRequest {
	s.TraceAppName = &v
	return s
}

func (s *SearchTraceAppByPageRequest) SetPageNumber(v int) *SearchTraceAppByPageRequest {
	s.PageNumber = &v
	return s
}

func (s *SearchTraceAppByPageRequest) SetPageSize(v int) *SearchTraceAppByPageRequest {
	s.PageSize = &v
	return s
}

func (s *SearchTraceAppByPageRequest) SetRegionId(v string) *SearchTraceAppByPageRequest {
	s.RegionId = &v
	return s
}

type SearchTraceAppByPageResponse struct {
	RequestId *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageBean  *SearchTraceAppByPageResponsePageBean `json:"PageBean,omitempty" xml:"PageBean,omitempty" require:"true" type:"Struct"`
}

func (s SearchTraceAppByPageResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchTraceAppByPageResponse) GoString() string {
	return s.String()
}

func (s *SearchTraceAppByPageResponse) SetRequestId(v string) *SearchTraceAppByPageResponse {
	s.RequestId = &v
	return s
}

func (s *SearchTraceAppByPageResponse) SetPageBean(v *SearchTraceAppByPageResponsePageBean) *SearchTraceAppByPageResponse {
	s.PageBean = v
	return s
}

type SearchTraceAppByPageResponsePageBean struct {
	TotalCount *int                                             `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber *int                                             `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                             `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TraceApps  []*SearchTraceAppByPageResponsePageBeanTraceApps `json:"TraceApps,omitempty" xml:"TraceApps,omitempty" require:"true" type:"Repeated"`
}

func (s SearchTraceAppByPageResponsePageBean) String() string {
	return tea.Prettify(s)
}

func (s SearchTraceAppByPageResponsePageBean) GoString() string {
	return s.String()
}

func (s *SearchTraceAppByPageResponsePageBean) SetTotalCount(v int) *SearchTraceAppByPageResponsePageBean {
	s.TotalCount = &v
	return s
}

func (s *SearchTraceAppByPageResponsePageBean) SetPageNumber(v int) *SearchTraceAppByPageResponsePageBean {
	s.PageNumber = &v
	return s
}

func (s *SearchTraceAppByPageResponsePageBean) SetPageSize(v int) *SearchTraceAppByPageResponsePageBean {
	s.PageSize = &v
	return s
}

func (s *SearchTraceAppByPageResponsePageBean) SetTraceApps(v []*SearchTraceAppByPageResponsePageBeanTraceApps) *SearchTraceAppByPageResponsePageBean {
	s.TraceApps = v
	return s
}

type SearchTraceAppByPageResponsePageBeanTraceApps struct {
	AppId      *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	Pid        *string `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
	AppName    *string `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
	Type       *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	UserId     *string `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	RegionId   *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	CreateTime *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	UpdateTime *int64  `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	Show       *bool   `json:"Show,omitempty" xml:"Show,omitempty" require:"true"`
}

func (s SearchTraceAppByPageResponsePageBeanTraceApps) String() string {
	return tea.Prettify(s)
}

func (s SearchTraceAppByPageResponsePageBeanTraceApps) GoString() string {
	return s.String()
}

func (s *SearchTraceAppByPageResponsePageBeanTraceApps) SetAppId(v int64) *SearchTraceAppByPageResponsePageBeanTraceApps {
	s.AppId = &v
	return s
}

func (s *SearchTraceAppByPageResponsePageBeanTraceApps) SetPid(v string) *SearchTraceAppByPageResponsePageBeanTraceApps {
	s.Pid = &v
	return s
}

func (s *SearchTraceAppByPageResponsePageBeanTraceApps) SetAppName(v string) *SearchTraceAppByPageResponsePageBeanTraceApps {
	s.AppName = &v
	return s
}

func (s *SearchTraceAppByPageResponsePageBeanTraceApps) SetType(v string) *SearchTraceAppByPageResponsePageBeanTraceApps {
	s.Type = &v
	return s
}

func (s *SearchTraceAppByPageResponsePageBeanTraceApps) SetUserId(v string) *SearchTraceAppByPageResponsePageBeanTraceApps {
	s.UserId = &v
	return s
}

func (s *SearchTraceAppByPageResponsePageBeanTraceApps) SetRegionId(v string) *SearchTraceAppByPageResponsePageBeanTraceApps {
	s.RegionId = &v
	return s
}

func (s *SearchTraceAppByPageResponsePageBeanTraceApps) SetCreateTime(v int64) *SearchTraceAppByPageResponsePageBeanTraceApps {
	s.CreateTime = &v
	return s
}

func (s *SearchTraceAppByPageResponsePageBeanTraceApps) SetUpdateTime(v int64) *SearchTraceAppByPageResponsePageBeanTraceApps {
	s.UpdateTime = &v
	return s
}

func (s *SearchTraceAppByPageResponsePageBeanTraceApps) SetShow(v bool) *SearchTraceAppByPageResponsePageBeanTraceApps {
	s.Show = &v
	return s
}

type ListRetcodeAppsRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	RegionId      *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s ListRetcodeAppsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListRetcodeAppsRequest) GoString() string {
	return s.String()
}

func (s *ListRetcodeAppsRequest) SetSecurityToken(v string) *ListRetcodeAppsRequest {
	s.SecurityToken = &v
	return s
}

func (s *ListRetcodeAppsRequest) SetRegionId(v string) *ListRetcodeAppsRequest {
	s.RegionId = &v
	return s
}

type ListRetcodeAppsResponse struct {
	RequestId   *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RetcodeApps []*ListRetcodeAppsResponseRetcodeApps `json:"RetcodeApps,omitempty" xml:"RetcodeApps,omitempty" require:"true" type:"Repeated"`
}

func (s ListRetcodeAppsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListRetcodeAppsResponse) GoString() string {
	return s.String()
}

func (s *ListRetcodeAppsResponse) SetRequestId(v string) *ListRetcodeAppsResponse {
	s.RequestId = &v
	return s
}

func (s *ListRetcodeAppsResponse) SetRetcodeApps(v []*ListRetcodeAppsResponseRetcodeApps) *ListRetcodeAppsResponse {
	s.RetcodeApps = v
	return s
}

type ListRetcodeAppsResponseRetcodeApps struct {
	AppId   *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	Pid     *string `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
	AppName *string `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
}

func (s ListRetcodeAppsResponseRetcodeApps) String() string {
	return tea.Prettify(s)
}

func (s ListRetcodeAppsResponseRetcodeApps) GoString() string {
	return s.String()
}

func (s *ListRetcodeAppsResponseRetcodeApps) SetAppId(v int64) *ListRetcodeAppsResponseRetcodeApps {
	s.AppId = &v
	return s
}

func (s *ListRetcodeAppsResponseRetcodeApps) SetPid(v string) *ListRetcodeAppsResponseRetcodeApps {
	s.Pid = &v
	return s
}

func (s *ListRetcodeAppsResponseRetcodeApps) SetAppName(v string) *ListRetcodeAppsResponseRetcodeApps {
	s.AppName = &v
	return s
}

type ListTraceAppsRequest struct {
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s ListTraceAppsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListTraceAppsRequest) GoString() string {
	return s.String()
}

func (s *ListTraceAppsRequest) SetRegionId(v string) *ListTraceAppsRequest {
	s.RegionId = &v
	return s
}

type ListTraceAppsResponse struct {
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                             `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *int                              `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                           `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	TraceApps []*ListTraceAppsResponseTraceApps `json:"TraceApps,omitempty" xml:"TraceApps,omitempty" require:"true" type:"Repeated"`
}

func (s ListTraceAppsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListTraceAppsResponse) GoString() string {
	return s.String()
}

func (s *ListTraceAppsResponse) SetRequestId(v string) *ListTraceAppsResponse {
	s.RequestId = &v
	return s
}

func (s *ListTraceAppsResponse) SetSuccess(v bool) *ListTraceAppsResponse {
	s.Success = &v
	return s
}

func (s *ListTraceAppsResponse) SetCode(v int) *ListTraceAppsResponse {
	s.Code = &v
	return s
}

func (s *ListTraceAppsResponse) SetMessage(v string) *ListTraceAppsResponse {
	s.Message = &v
	return s
}

func (s *ListTraceAppsResponse) SetTraceApps(v []*ListTraceAppsResponseTraceApps) *ListTraceAppsResponse {
	s.TraceApps = v
	return s
}

type ListTraceAppsResponseTraceApps struct {
	AppId      *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	Pid        *string `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
	AppName    *string `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
	Type       *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	UserId     *string `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	CreateTime *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	UpdateTime *int64  `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	RegionId   *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Show       *bool   `json:"Show,omitempty" xml:"Show,omitempty" require:"true"`
}

func (s ListTraceAppsResponseTraceApps) String() string {
	return tea.Prettify(s)
}

func (s ListTraceAppsResponseTraceApps) GoString() string {
	return s.String()
}

func (s *ListTraceAppsResponseTraceApps) SetAppId(v int64) *ListTraceAppsResponseTraceApps {
	s.AppId = &v
	return s
}

func (s *ListTraceAppsResponseTraceApps) SetPid(v string) *ListTraceAppsResponseTraceApps {
	s.Pid = &v
	return s
}

func (s *ListTraceAppsResponseTraceApps) SetAppName(v string) *ListTraceAppsResponseTraceApps {
	s.AppName = &v
	return s
}

func (s *ListTraceAppsResponseTraceApps) SetType(v string) *ListTraceAppsResponseTraceApps {
	s.Type = &v
	return s
}

func (s *ListTraceAppsResponseTraceApps) SetUserId(v string) *ListTraceAppsResponseTraceApps {
	s.UserId = &v
	return s
}

func (s *ListTraceAppsResponseTraceApps) SetCreateTime(v int64) *ListTraceAppsResponseTraceApps {
	s.CreateTime = &v
	return s
}

func (s *ListTraceAppsResponseTraceApps) SetUpdateTime(v int64) *ListTraceAppsResponseTraceApps {
	s.UpdateTime = &v
	return s
}

func (s *ListTraceAppsResponseTraceApps) SetRegionId(v string) *ListTraceAppsResponseTraceApps {
	s.RegionId = &v
	return s
}

func (s *ListTraceAppsResponseTraceApps) SetShow(v bool) *ListTraceAppsResponseTraceApps {
	s.Show = &v
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
	client.EndpointRule = tea.String("regional")
	client.EndpointMap = map[string]*string{
		"ap-northeast-1":        tea.String("arms.ap-southeast-1.aliyuncs.com"),
		"ap-south-1":            tea.String("arms.ap-southeast-1.aliyuncs.com"),
		"ap-southeast-2":        tea.String("arms.ap-southeast-1.aliyuncs.com"),
		"ap-southeast-3":        tea.String("arms.ap-southeast-1.aliyuncs.com"),
		"ap-southeast-5":        tea.String("arms.ap-southeast-1.aliyuncs.com"),
		"cn-chengdu":            tea.String("arms.aliyuncs.com"),
		"cn-huhehaote":          tea.String("arms.aliyuncs.com"),
		"eu-central-1":          tea.String("arms.ap-southeast-1.aliyuncs.com"),
		"eu-west-1":             tea.String("arms.ap-southeast-1.aliyuncs.com"),
		"me-east-1":             tea.String("arms.ap-southeast-1.aliyuncs.com"),
		"us-east-1":             tea.String("arms.ap-southeast-1.aliyuncs.com"),
		"cn-hangzhou-finance":   tea.String("arms.aliyuncs.com"),
		"cn-shenzhen-finance-1": tea.String("arms.aliyuncs.com"),
		"cn-shanghai-finance-1": tea.String("arms.aliyuncs.com"),
		"cn-north-2-gov-1":      tea.String("arms.aliyuncs.com"),
	}
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("arms"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) GetMultipleTraceWithOptions(request *GetMultipleTraceRequest, runtime *util.RuntimeOptions) (_result *GetMultipleTraceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMultipleTraceResponse{}
	_body, _err := client.DoRequest(tea.String("GetMultipleTrace"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMultipleTrace(request *GetMultipleTraceRequest) (_result *GetMultipleTraceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMultipleTraceResponse{}
	_body, _err := client.GetMultipleTraceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchTracesByPageWithOptions(request *SearchTracesByPageRequest, runtime *util.RuntimeOptions) (_result *SearchTracesByPageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchTracesByPageResponse{}
	_body, _err := client.DoRequest(tea.String("SearchTracesByPage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchTracesByPage(request *SearchTracesByPageRequest) (_result *SearchTracesByPageResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchTracesByPageResponse{}
	_body, _err := client.SearchTracesByPageWithOptions(request, runtime)
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
	_body, _err := client.DoRequest(tea.String("GetStack"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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

func (client *Client) DescribeTraceLocationWithOptions(request *DescribeTraceLocationRequest, runtime *util.RuntimeOptions) (_result *DescribeTraceLocationResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeTraceLocationResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeTraceLocation"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeTraceLocation(request *DescribeTraceLocationRequest) (_result *DescribeTraceLocationResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeTraceLocationResponse{}
	_body, _err := client.DescribeTraceLocationWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteTraceAppWithOptions(request *DeleteTraceAppRequest, runtime *util.RuntimeOptions) (_result *DeleteTraceAppResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteTraceAppResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteTraceApp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteTraceApp(request *DeleteTraceAppRequest) (_result *DeleteTraceAppResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteTraceAppResponse{}
	_body, _err := client.DeleteTraceAppWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeTraceLicenseKeyWithOptions(request *DescribeTraceLicenseKeyRequest, runtime *util.RuntimeOptions) (_result *DescribeTraceLicenseKeyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeTraceLicenseKeyResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeTraceLicenseKey"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeTraceLicenseKey(request *DescribeTraceLicenseKeyRequest) (_result *DescribeTraceLicenseKeyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeTraceLicenseKeyResponse{}
	_body, _err := client.DescribeTraceLicenseKeyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ConfigAppWithOptions(request *ConfigAppRequest, runtime *util.RuntimeOptions) (_result *ConfigAppResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ConfigAppResponse{}
	_body, _err := client.DoRequest(tea.String("ConfigApp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ConfigApp(request *ConfigAppRequest) (_result *ConfigAppResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ConfigAppResponse{}
	_body, _err := client.ConfigAppWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CheckServiceLinkedRoleForDeletingWithOptions(request *CheckServiceLinkedRoleForDeletingRequest, runtime *util.RuntimeOptions) (_result *CheckServiceLinkedRoleForDeletingResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CheckServiceLinkedRoleForDeletingResponse{}
	_body, _err := client.DoRequest(tea.String("CheckServiceLinkedRoleForDeleting"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CheckServiceLinkedRoleForDeleting(request *CheckServiceLinkedRoleForDeletingRequest) (_result *CheckServiceLinkedRoleForDeletingResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CheckServiceLinkedRoleForDeletingResponse{}
	_body, _err := client.CheckServiceLinkedRoleForDeletingWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListDashboardsWithOptions(request *ListDashboardsRequest, runtime *util.RuntimeOptions) (_result *ListDashboardsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListDashboardsResponse{}
	_body, _err := client.DoRequest(tea.String("ListDashboards"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListDashboards(request *ListDashboardsRequest) (_result *ListDashboardsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListDashboardsResponse{}
	_body, _err := client.ListDashboardsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetConsistencySnapshotWithOptions(request *GetConsistencySnapshotRequest, runtime *util.RuntimeOptions) (_result *GetConsistencySnapshotResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetConsistencySnapshotResponse{}
	_body, _err := client.DoRequest(tea.String("GetConsistencySnapshot"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetConsistencySnapshot(request *GetConsistencySnapshotRequest) (_result *GetConsistencySnapshotResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetConsistencySnapshotResponse{}
	_body, _err := client.GetConsistencySnapshotWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CheckDataConsistencyWithOptions(request *CheckDataConsistencyRequest, runtime *util.RuntimeOptions) (_result *CheckDataConsistencyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CheckDataConsistencyResponse{}
	_body, _err := client.DoRequest(tea.String("CheckDataConsistency"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CheckDataConsistency(request *CheckDataConsistencyRequest) (_result *CheckDataConsistencyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CheckDataConsistencyResponse{}
	_body, _err := client.CheckDataConsistencyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddGrafanaWithOptions(request *AddGrafanaRequest, runtime *util.RuntimeOptions) (_result *AddGrafanaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddGrafanaResponse{}
	_body, _err := client.DoRequest(tea.String("AddGrafana"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddGrafana(request *AddGrafanaRequest) (_result *AddGrafanaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddGrafanaResponse{}
	_body, _err := client.AddGrafanaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddIntegrationWithOptions(request *AddIntegrationRequest, runtime *util.RuntimeOptions) (_result *AddIntegrationResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddIntegrationResponse{}
	_body, _err := client.DoRequest(tea.String("AddIntegration"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddIntegration(request *AddIntegrationRequest) (_result *AddIntegrationResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddIntegrationResponse{}
	_body, _err := client.AddIntegrationWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetTraceWithOptions(request *GetTraceRequest, runtime *util.RuntimeOptions) (_result *GetTraceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetTraceResponse{}
	_body, _err := client.DoRequest(tea.String("GetTrace"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetTrace(request *GetTraceRequest) (_result *GetTraceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetTraceResponse{}
	_body, _err := client.GetTraceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListClusterFromGrafanaWithOptions(request *ListClusterFromGrafanaRequest, runtime *util.RuntimeOptions) (_result *ListClusterFromGrafanaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListClusterFromGrafanaResponse{}
	_body, _err := client.DoRequest(tea.String("ListClusterFromGrafana"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListClusterFromGrafana(request *ListClusterFromGrafanaRequest) (_result *ListClusterFromGrafanaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListClusterFromGrafanaResponse{}
	_body, _err := client.ListClusterFromGrafanaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchTracesWithOptions(request *SearchTracesRequest, runtime *util.RuntimeOptions) (_result *SearchTracesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchTracesResponse{}
	_body, _err := client.DoRequest(tea.String("SearchTraces"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchTraces(request *SearchTracesRequest) (_result *SearchTracesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchTracesResponse{}
	_body, _err := client.SearchTracesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetPrometheusApiTokenWithOptions(request *GetPrometheusApiTokenRequest, runtime *util.RuntimeOptions) (_result *GetPrometheusApiTokenResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetPrometheusApiTokenResponse{}
	_body, _err := client.DoRequest(tea.String("GetPrometheusApiToken"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetPrometheusApiToken(request *GetPrometheusApiTokenRequest) (_result *GetPrometheusApiTokenResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetPrometheusApiTokenResponse{}
	_body, _err := client.GetPrometheusApiTokenWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetRetcodeShareStatusWithOptions(request *SetRetcodeShareStatusRequest, runtime *util.RuntimeOptions) (_result *SetRetcodeShareStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetRetcodeShareStatusResponse{}
	_body, _err := client.DoRequest(tea.String("SetRetcodeShareStatus"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetRetcodeShareStatus(request *SetRetcodeShareStatusRequest) (_result *SetRetcodeShareStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetRetcodeShareStatusResponse{}
	_body, _err := client.SetRetcodeShareStatusWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetRetcodeShareUrlWithOptions(request *GetRetcodeShareUrlRequest, runtime *util.RuntimeOptions) (_result *GetRetcodeShareUrlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetRetcodeShareUrlResponse{}
	_body, _err := client.DoRequest(tea.String("GetRetcodeShareUrl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetRetcodeShareUrl(request *GetRetcodeShareUrlRequest) (_result *GetRetcodeShareUrlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetRetcodeShareUrlResponse{}
	_body, _err := client.GetRetcodeShareUrlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListPromClustersWithOptions(request *ListPromClustersRequest, runtime *util.RuntimeOptions) (_result *ListPromClustersResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListPromClustersResponse{}
	_body, _err := client.DoRequest(tea.String("ListPromClusters"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListPromClusters(request *ListPromClustersRequest) (_result *ListPromClustersResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListPromClustersResponse{}
	_body, _err := client.ListPromClustersWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateAlertRuleWithOptions(request *UpdateAlertRuleRequest, runtime *util.RuntimeOptions) (_result *UpdateAlertRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateAlertRuleResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateAlertRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateAlertRule(request *UpdateAlertRuleRequest) (_result *UpdateAlertRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateAlertRuleResponse{}
	_body, _err := client.UpdateAlertRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) StartAlertWithOptions(request *StartAlertRequest, runtime *util.RuntimeOptions) (_result *StartAlertResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &StartAlertResponse{}
	_body, _err := client.DoRequest(tea.String("StartAlert"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) StartAlert(request *StartAlertRequest) (_result *StartAlertResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &StartAlertResponse{}
	_body, _err := client.StartAlertWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) StopAlertWithOptions(request *StopAlertRequest, runtime *util.RuntimeOptions) (_result *StopAlertResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &StopAlertResponse{}
	_body, _err := client.DoRequest(tea.String("StopAlert"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) StopAlert(request *StopAlertRequest) (_result *StopAlertResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &StopAlertResponse{}
	_body, _err := client.StopAlertWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchEventsWithOptions(request *SearchEventsRequest, runtime *util.RuntimeOptions) (_result *SearchEventsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchEventsResponse{}
	_body, _err := client.DoRequest(tea.String("SearchEvents"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchEvents(request *SearchEventsRequest) (_result *SearchEventsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchEventsResponse{}
	_body, _err := client.SearchEventsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchAlertHistoriesWithOptions(request *SearchAlertHistoriesRequest, runtime *util.RuntimeOptions) (_result *SearchAlertHistoriesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchAlertHistoriesResponse{}
	_body, _err := client.DoRequest(tea.String("SearchAlertHistories"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchAlertHistories(request *SearchAlertHistoriesRequest) (_result *SearchAlertHistoriesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchAlertHistoriesResponse{}
	_body, _err := client.SearchAlertHistoriesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateAlertContactWithOptions(request *UpdateAlertContactRequest, runtime *util.RuntimeOptions) (_result *UpdateAlertContactResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateAlertContactResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateAlertContact"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateAlertContact(request *UpdateAlertContactRequest) (_result *UpdateAlertContactResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateAlertContactResponse{}
	_body, _err := client.UpdateAlertContactWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAlertContactGroupWithOptions(request *DeleteAlertContactGroupRequest, runtime *util.RuntimeOptions) (_result *DeleteAlertContactGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAlertContactGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteAlertContactGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteAlertContactGroup(request *DeleteAlertContactGroupRequest) (_result *DeleteAlertContactGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAlertContactGroupResponse{}
	_body, _err := client.DeleteAlertContactGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAlertContactWithOptions(request *DeleteAlertContactRequest, runtime *util.RuntimeOptions) (_result *DeleteAlertContactResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAlertContactResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteAlertContact"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteAlertContact(request *DeleteAlertContactRequest) (_result *DeleteAlertContactResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAlertContactResponse{}
	_body, _err := client.DeleteAlertContactWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateAlertContactGroupWithOptions(request *UpdateAlertContactGroupRequest, runtime *util.RuntimeOptions) (_result *UpdateAlertContactGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateAlertContactGroupResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateAlertContactGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateAlertContactGroup(request *UpdateAlertContactGroupRequest) (_result *UpdateAlertContactGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateAlertContactGroupResponse{}
	_body, _err := client.UpdateAlertContactGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ImportCustomAlertRulesWithOptions(request *ImportCustomAlertRulesRequest, runtime *util.RuntimeOptions) (_result *ImportCustomAlertRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ImportCustomAlertRulesResponse{}
	_body, _err := client.DoRequest(tea.String("ImportCustomAlertRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ImportCustomAlertRules(request *ImportCustomAlertRulesRequest) (_result *ImportCustomAlertRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ImportCustomAlertRulesResponse{}
	_body, _err := client.ImportCustomAlertRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchAlertRulesWithOptions(request *SearchAlertRulesRequest, runtime *util.RuntimeOptions) (_result *SearchAlertRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchAlertRulesResponse{}
	_body, _err := client.DoRequest(tea.String("SearchAlertRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchAlertRules(request *SearchAlertRulesRequest) (_result *SearchAlertRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchAlertRulesResponse{}
	_body, _err := client.SearchAlertRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAlertRulesWithOptions(request *DeleteAlertRulesRequest, runtime *util.RuntimeOptions) (_result *DeleteAlertRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAlertRulesResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteAlertRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteAlertRules(request *DeleteAlertRulesRequest) (_result *DeleteAlertRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAlertRulesResponse{}
	_body, _err := client.DeleteAlertRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateRetcodeAppWithOptions(request *CreateRetcodeAppRequest, runtime *util.RuntimeOptions) (_result *CreateRetcodeAppResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateRetcodeAppResponse{}
	_body, _err := client.DoRequest(tea.String("CreateRetcodeApp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateRetcodeApp(request *CreateRetcodeAppRequest) (_result *CreateRetcodeAppResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateRetcodeAppResponse{}
	_body, _err := client.CreateRetcodeAppWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteRetcodeAppWithOptions(request *DeleteRetcodeAppRequest, runtime *util.RuntimeOptions) (_result *DeleteRetcodeAppResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteRetcodeAppResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteRetcodeApp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteRetcodeApp(request *DeleteRetcodeAppRequest) (_result *DeleteRetcodeAppResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteRetcodeAppResponse{}
	_body, _err := client.DeleteRetcodeAppWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryDatasetWithOptions(request *QueryDatasetRequest, runtime *util.RuntimeOptions) (_result *QueryDatasetResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryDatasetResponse{}
	_body, _err := client.DoRequest(tea.String("QueryDataset"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryDataset(request *QueryDatasetRequest) (_result *QueryDatasetResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryDatasetResponse{}
	_body, _err := client.QueryDatasetWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryMetricWithOptions(request *QueryMetricRequest, runtime *util.RuntimeOptions) (_result *QueryMetricResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryMetricResponse{}
	_body, _err := client.DoRequest(tea.String("QueryMetric"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryMetric(request *QueryMetricRequest) (_result *QueryMetricResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryMetricResponse{}
	_body, _err := client.QueryMetricWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateAlertContactWithOptions(request *CreateAlertContactRequest, runtime *util.RuntimeOptions) (_result *CreateAlertContactResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateAlertContactResponse{}
	_body, _err := client.DoRequest(tea.String("CreateAlertContact"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateAlertContact(request *CreateAlertContactRequest) (_result *CreateAlertContactResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateAlertContactResponse{}
	_body, _err := client.CreateAlertContactWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateAlertContactGroupWithOptions(request *CreateAlertContactGroupRequest, runtime *util.RuntimeOptions) (_result *CreateAlertContactGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateAlertContactGroupResponse{}
	_body, _err := client.DoRequest(tea.String("CreateAlertContactGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateAlertContactGroup(request *CreateAlertContactGroupRequest) (_result *CreateAlertContactGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateAlertContactGroupResponse{}
	_body, _err := client.CreateAlertContactGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchAlertContactWithOptions(request *SearchAlertContactRequest, runtime *util.RuntimeOptions) (_result *SearchAlertContactResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchAlertContactResponse{}
	_body, _err := client.DoRequest(tea.String("SearchAlertContact"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchAlertContact(request *SearchAlertContactRequest) (_result *SearchAlertContactResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchAlertContactResponse{}
	_body, _err := client.SearchAlertContactWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchAlertContactGroupWithOptions(request *SearchAlertContactGroupRequest, runtime *util.RuntimeOptions) (_result *SearchAlertContactGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchAlertContactGroupResponse{}
	_body, _err := client.DoRequest(tea.String("SearchAlertContactGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchAlertContactGroup(request *SearchAlertContactGroupRequest) (_result *SearchAlertContactGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchAlertContactGroupResponse{}
	_body, _err := client.SearchAlertContactGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ImportAppAlertRulesWithOptions(request *ImportAppAlertRulesRequest, runtime *util.RuntimeOptions) (_result *ImportAppAlertRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ImportAppAlertRulesResponse{}
	_body, _err := client.DoRequest(tea.String("ImportAppAlertRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ImportAppAlertRules(request *ImportAppAlertRulesRequest) (_result *ImportAppAlertRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ImportAppAlertRulesResponse{}
	_body, _err := client.ImportAppAlertRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchRetcodeAppByPageWithOptions(request *SearchRetcodeAppByPageRequest, runtime *util.RuntimeOptions) (_result *SearchRetcodeAppByPageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchRetcodeAppByPageResponse{}
	_body, _err := client.DoRequest(tea.String("SearchRetcodeAppByPage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchRetcodeAppByPage(request *SearchRetcodeAppByPageRequest) (_result *SearchRetcodeAppByPageResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchRetcodeAppByPageResponse{}
	_body, _err := client.SearchRetcodeAppByPageWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchTraceAppByNameWithOptions(request *SearchTraceAppByNameRequest, runtime *util.RuntimeOptions) (_result *SearchTraceAppByNameResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchTraceAppByNameResponse{}
	_body, _err := client.DoRequest(tea.String("SearchTraceAppByName"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchTraceAppByName(request *SearchTraceAppByNameRequest) (_result *SearchTraceAppByNameResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchTraceAppByNameResponse{}
	_body, _err := client.SearchTraceAppByNameWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchTraceAppByPageWithOptions(request *SearchTraceAppByPageRequest, runtime *util.RuntimeOptions) (_result *SearchTraceAppByPageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchTraceAppByPageResponse{}
	_body, _err := client.DoRequest(tea.String("SearchTraceAppByPage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchTraceAppByPage(request *SearchTraceAppByPageRequest) (_result *SearchTraceAppByPageResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchTraceAppByPageResponse{}
	_body, _err := client.SearchTraceAppByPageWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListRetcodeAppsWithOptions(request *ListRetcodeAppsRequest, runtime *util.RuntimeOptions) (_result *ListRetcodeAppsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListRetcodeAppsResponse{}
	_body, _err := client.DoRequest(tea.String("ListRetcodeApps"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListRetcodeApps(request *ListRetcodeAppsRequest) (_result *ListRetcodeAppsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListRetcodeAppsResponse{}
	_body, _err := client.ListRetcodeAppsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListTraceAppsWithOptions(request *ListTraceAppsRequest, runtime *util.RuntimeOptions) (_result *ListTraceAppsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListTraceAppsResponse{}
	_body, _err := client.DoRequest(tea.String("ListTraceApps"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListTraceApps(request *ListTraceAppsRequest) (_result *ListTraceAppsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListTraceAppsResponse{}
	_body, _err := client.ListTraceAppsWithOptions(request, runtime)
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
