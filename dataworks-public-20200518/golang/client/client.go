// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type CreateDagComplementRequest struct {
	ProjectEnv     *string `json:"ProjectEnv,omitempty" xml:"ProjectEnv,omitempty" require:"true"`
	StartBizDate   *string `json:"StartBizDate,omitempty" xml:"StartBizDate,omitempty" require:"true"`
	Name           *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	RootNodeId     *int64  `json:"RootNodeId,omitempty" xml:"RootNodeId,omitempty" require:"true"`
	IncludeNodeIds *string `json:"IncludeNodeIds,omitempty" xml:"IncludeNodeIds,omitempty" require:"true"`
	ExcludeNodeIds *string `json:"ExcludeNodeIds,omitempty" xml:"ExcludeNodeIds,omitempty"`
	BizBeginTime   *string `json:"BizBeginTime,omitempty" xml:"BizBeginTime,omitempty"`
	BizEndTime     *string `json:"BizEndTime,omitempty" xml:"BizEndTime,omitempty"`
	Parallelism    *bool   `json:"Parallelism,omitempty" xml:"Parallelism,omitempty" require:"true"`
	EndBizDate     *string `json:"EndBizDate,omitempty" xml:"EndBizDate,omitempty" require:"true"`
	NodeParams     *string `json:"NodeParams,omitempty" xml:"NodeParams,omitempty"`
}

func (s CreateDagComplementRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateDagComplementRequest) GoString() string {
	return s.String()
}

func (s *CreateDagComplementRequest) SetProjectEnv(v string) *CreateDagComplementRequest {
	s.ProjectEnv = &v
	return s
}

func (s *CreateDagComplementRequest) SetStartBizDate(v string) *CreateDagComplementRequest {
	s.StartBizDate = &v
	return s
}

func (s *CreateDagComplementRequest) SetName(v string) *CreateDagComplementRequest {
	s.Name = &v
	return s
}

func (s *CreateDagComplementRequest) SetRootNodeId(v int64) *CreateDagComplementRequest {
	s.RootNodeId = &v
	return s
}

func (s *CreateDagComplementRequest) SetIncludeNodeIds(v string) *CreateDagComplementRequest {
	s.IncludeNodeIds = &v
	return s
}

func (s *CreateDagComplementRequest) SetExcludeNodeIds(v string) *CreateDagComplementRequest {
	s.ExcludeNodeIds = &v
	return s
}

func (s *CreateDagComplementRequest) SetBizBeginTime(v string) *CreateDagComplementRequest {
	s.BizBeginTime = &v
	return s
}

func (s *CreateDagComplementRequest) SetBizEndTime(v string) *CreateDagComplementRequest {
	s.BizEndTime = &v
	return s
}

func (s *CreateDagComplementRequest) SetParallelism(v bool) *CreateDagComplementRequest {
	s.Parallelism = &v
	return s
}

func (s *CreateDagComplementRequest) SetEndBizDate(v string) *CreateDagComplementRequest {
	s.EndBizDate = &v
	return s
}

func (s *CreateDagComplementRequest) SetNodeParams(v string) *CreateDagComplementRequest {
	s.NodeParams = &v
	return s
}

type CreateDagComplementResponse struct {
	ErrorCode      *string  `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string  `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int     `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool    `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           []*int64 `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Repeated"`
}

func (s CreateDagComplementResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateDagComplementResponse) GoString() string {
	return s.String()
}

func (s *CreateDagComplementResponse) SetErrorCode(v string) *CreateDagComplementResponse {
	s.ErrorCode = &v
	return s
}

func (s *CreateDagComplementResponse) SetErrorMessage(v string) *CreateDagComplementResponse {
	s.ErrorMessage = &v
	return s
}

func (s *CreateDagComplementResponse) SetHttpStatusCode(v int) *CreateDagComplementResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *CreateDagComplementResponse) SetRequestId(v string) *CreateDagComplementResponse {
	s.RequestId = &v
	return s
}

func (s *CreateDagComplementResponse) SetSuccess(v bool) *CreateDagComplementResponse {
	s.Success = &v
	return s
}

func (s *CreateDagComplementResponse) SetData(v []*int64) *CreateDagComplementResponse {
	s.Data = v
	return s
}

type CreateDagTestRequest struct {
	ProjectEnv *string `json:"ProjectEnv,omitempty" xml:"ProjectEnv,omitempty" require:"true"`
	Bizdate    *string `json:"Bizdate,omitempty" xml:"Bizdate,omitempty" require:"true"`
	Name       *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	NodeId     *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	NodeParams *string `json:"NodeParams,omitempty" xml:"NodeParams,omitempty"`
}

func (s CreateDagTestRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateDagTestRequest) GoString() string {
	return s.String()
}

func (s *CreateDagTestRequest) SetProjectEnv(v string) *CreateDagTestRequest {
	s.ProjectEnv = &v
	return s
}

func (s *CreateDagTestRequest) SetBizdate(v string) *CreateDagTestRequest {
	s.Bizdate = &v
	return s
}

func (s *CreateDagTestRequest) SetName(v string) *CreateDagTestRequest {
	s.Name = &v
	return s
}

func (s *CreateDagTestRequest) SetNodeId(v int64) *CreateDagTestRequest {
	s.NodeId = &v
	return s
}

func (s *CreateDagTestRequest) SetNodeParams(v string) *CreateDagTestRequest {
	s.NodeParams = &v
	return s
}

type CreateDagTestResponse struct {
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *int64  `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s CreateDagTestResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateDagTestResponse) GoString() string {
	return s.String()
}

func (s *CreateDagTestResponse) SetErrorCode(v string) *CreateDagTestResponse {
	s.ErrorCode = &v
	return s
}

func (s *CreateDagTestResponse) SetErrorMessage(v string) *CreateDagTestResponse {
	s.ErrorMessage = &v
	return s
}

func (s *CreateDagTestResponse) SetHttpStatusCode(v int) *CreateDagTestResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *CreateDagTestResponse) SetRequestId(v string) *CreateDagTestResponse {
	s.RequestId = &v
	return s
}

func (s *CreateDagTestResponse) SetSuccess(v bool) *CreateDagTestResponse {
	s.Success = &v
	return s
}

func (s *CreateDagTestResponse) SetData(v int64) *CreateDagTestResponse {
	s.Data = &v
	return s
}

type ListCalcEnginesRequest struct {
	ProjectId      *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Name           *string `json:"Name,omitempty" xml:"Name,omitempty"`
	CalcEngineType *string `json:"CalcEngineType,omitempty" xml:"CalcEngineType,omitempty" require:"true"`
	EnvType        *string `json:"EnvType,omitempty" xml:"EnvType,omitempty"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s ListCalcEnginesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListCalcEnginesRequest) GoString() string {
	return s.String()
}

func (s *ListCalcEnginesRequest) SetProjectId(v int64) *ListCalcEnginesRequest {
	s.ProjectId = &v
	return s
}

func (s *ListCalcEnginesRequest) SetName(v string) *ListCalcEnginesRequest {
	s.Name = &v
	return s
}

func (s *ListCalcEnginesRequest) SetCalcEngineType(v string) *ListCalcEnginesRequest {
	s.CalcEngineType = &v
	return s
}

func (s *ListCalcEnginesRequest) SetEnvType(v string) *ListCalcEnginesRequest {
	s.EnvType = &v
	return s
}

func (s *ListCalcEnginesRequest) SetPageSize(v int) *ListCalcEnginesRequest {
	s.PageSize = &v
	return s
}

func (s *ListCalcEnginesRequest) SetPageNumber(v int) *ListCalcEnginesRequest {
	s.PageNumber = &v
	return s
}

type ListCalcEnginesResponse struct {
	HttpStatusCode *int                         `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                        `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	RequestId      *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *ListCalcEnginesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListCalcEnginesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListCalcEnginesResponse) GoString() string {
	return s.String()
}

func (s *ListCalcEnginesResponse) SetHttpStatusCode(v int) *ListCalcEnginesResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListCalcEnginesResponse) SetSuccess(v bool) *ListCalcEnginesResponse {
	s.Success = &v
	return s
}

func (s *ListCalcEnginesResponse) SetRequestId(v string) *ListCalcEnginesResponse {
	s.RequestId = &v
	return s
}

func (s *ListCalcEnginesResponse) SetData(v *ListCalcEnginesResponseData) *ListCalcEnginesResponse {
	s.Data = v
	return s
}

type ListCalcEnginesResponseData struct {
	PageNumber  *int                                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize    *int                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount  *int                                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	CalcEngines []*ListCalcEnginesResponseDataCalcEngines `json:"CalcEngines,omitempty" xml:"CalcEngines,omitempty" require:"true" type:"Repeated"`
}

func (s ListCalcEnginesResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListCalcEnginesResponseData) GoString() string {
	return s.String()
}

func (s *ListCalcEnginesResponseData) SetPageNumber(v int) *ListCalcEnginesResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListCalcEnginesResponseData) SetPageSize(v int) *ListCalcEnginesResponseData {
	s.PageSize = &v
	return s
}

func (s *ListCalcEnginesResponseData) SetTotalCount(v int) *ListCalcEnginesResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListCalcEnginesResponseData) SetCalcEngines(v []*ListCalcEnginesResponseDataCalcEngines) *ListCalcEnginesResponseData {
	s.CalcEngines = v
	return s
}

type ListCalcEnginesResponseDataCalcEngines struct {
	CalcEngineType     *string                `json:"CalcEngineType,omitempty" xml:"CalcEngineType,omitempty" require:"true"`
	GmtCreate          *string                `json:"GmtCreate,omitempty" xml:"GmtCreate,omitempty" require:"true"`
	DwRegion           *string                `json:"DwRegion,omitempty" xml:"DwRegion,omitempty" require:"true"`
	IsDefault          *bool                  `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
	BindingProjectId   *int                   `json:"BindingProjectId,omitempty" xml:"BindingProjectId,omitempty" require:"true"`
	EnvType            *string                `json:"EnvType,omitempty" xml:"EnvType,omitempty" require:"true"`
	TenantId           *int64                 `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	Name               *string                `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	BindingProjectName *string                `json:"BindingProjectName,omitempty" xml:"BindingProjectName,omitempty" require:"true"`
	Region             *string                `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
	EngineId           *int                   `json:"EngineId,omitempty" xml:"EngineId,omitempty" require:"true"`
	EngineInfo         map[string]interface{} `json:"EngineInfo,omitempty" xml:"EngineInfo,omitempty" require:"true"`
	TaskAuthType       *string                `json:"TaskAuthType,omitempty" xml:"TaskAuthType,omitempty" require:"true"`
}

func (s ListCalcEnginesResponseDataCalcEngines) String() string {
	return tea.Prettify(s)
}

func (s ListCalcEnginesResponseDataCalcEngines) GoString() string {
	return s.String()
}

func (s *ListCalcEnginesResponseDataCalcEngines) SetCalcEngineType(v string) *ListCalcEnginesResponseDataCalcEngines {
	s.CalcEngineType = &v
	return s
}

func (s *ListCalcEnginesResponseDataCalcEngines) SetGmtCreate(v string) *ListCalcEnginesResponseDataCalcEngines {
	s.GmtCreate = &v
	return s
}

func (s *ListCalcEnginesResponseDataCalcEngines) SetDwRegion(v string) *ListCalcEnginesResponseDataCalcEngines {
	s.DwRegion = &v
	return s
}

func (s *ListCalcEnginesResponseDataCalcEngines) SetIsDefault(v bool) *ListCalcEnginesResponseDataCalcEngines {
	s.IsDefault = &v
	return s
}

func (s *ListCalcEnginesResponseDataCalcEngines) SetBindingProjectId(v int) *ListCalcEnginesResponseDataCalcEngines {
	s.BindingProjectId = &v
	return s
}

func (s *ListCalcEnginesResponseDataCalcEngines) SetEnvType(v string) *ListCalcEnginesResponseDataCalcEngines {
	s.EnvType = &v
	return s
}

func (s *ListCalcEnginesResponseDataCalcEngines) SetTenantId(v int64) *ListCalcEnginesResponseDataCalcEngines {
	s.TenantId = &v
	return s
}

func (s *ListCalcEnginesResponseDataCalcEngines) SetName(v string) *ListCalcEnginesResponseDataCalcEngines {
	s.Name = &v
	return s
}

func (s *ListCalcEnginesResponseDataCalcEngines) SetBindingProjectName(v string) *ListCalcEnginesResponseDataCalcEngines {
	s.BindingProjectName = &v
	return s
}

func (s *ListCalcEnginesResponseDataCalcEngines) SetRegion(v string) *ListCalcEnginesResponseDataCalcEngines {
	s.Region = &v
	return s
}

func (s *ListCalcEnginesResponseDataCalcEngines) SetEngineId(v int) *ListCalcEnginesResponseDataCalcEngines {
	s.EngineId = &v
	return s
}

func (s *ListCalcEnginesResponseDataCalcEngines) SetEngineInfo(v map[string]interface{}) *ListCalcEnginesResponseDataCalcEngines {
	s.EngineInfo = v
	return s
}

func (s *ListCalcEnginesResponseDataCalcEngines) SetTaskAuthType(v string) *ListCalcEnginesResponseDataCalcEngines {
	s.TaskAuthType = &v
	return s
}

type ListConnectionsRequest struct {
	ProjectId      *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Name           *string `json:"Name,omitempty" xml:"Name,omitempty"`
	ConnectionType *string `json:"ConnectionType,omitempty" xml:"ConnectionType,omitempty"`
	SubType        *string `json:"SubType,omitempty" xml:"SubType,omitempty"`
	Status         *string `json:"Status,omitempty" xml:"Status,omitempty"`
	EnvType        *int    `json:"EnvType,omitempty" xml:"EnvType,omitempty"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s ListConnectionsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListConnectionsRequest) GoString() string {
	return s.String()
}

func (s *ListConnectionsRequest) SetProjectId(v int64) *ListConnectionsRequest {
	s.ProjectId = &v
	return s
}

func (s *ListConnectionsRequest) SetName(v string) *ListConnectionsRequest {
	s.Name = &v
	return s
}

func (s *ListConnectionsRequest) SetConnectionType(v string) *ListConnectionsRequest {
	s.ConnectionType = &v
	return s
}

func (s *ListConnectionsRequest) SetSubType(v string) *ListConnectionsRequest {
	s.SubType = &v
	return s
}

func (s *ListConnectionsRequest) SetStatus(v string) *ListConnectionsRequest {
	s.Status = &v
	return s
}

func (s *ListConnectionsRequest) SetEnvType(v int) *ListConnectionsRequest {
	s.EnvType = &v
	return s
}

func (s *ListConnectionsRequest) SetPageSize(v int) *ListConnectionsRequest {
	s.PageSize = &v
	return s
}

func (s *ListConnectionsRequest) SetPageNumber(v int) *ListConnectionsRequest {
	s.PageNumber = &v
	return s
}

type ListConnectionsResponse struct {
	HttpStatusCode *int                         `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                        `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	RequestId      *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *ListConnectionsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListConnectionsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListConnectionsResponse) GoString() string {
	return s.String()
}

func (s *ListConnectionsResponse) SetHttpStatusCode(v int) *ListConnectionsResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListConnectionsResponse) SetSuccess(v bool) *ListConnectionsResponse {
	s.Success = &v
	return s
}

func (s *ListConnectionsResponse) SetRequestId(v string) *ListConnectionsResponse {
	s.RequestId = &v
	return s
}

func (s *ListConnectionsResponse) SetData(v *ListConnectionsResponseData) *ListConnectionsResponse {
	s.Data = v
	return s
}

type ListConnectionsResponseData struct {
	PageNumber  *int                                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize    *int                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount  *int                                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Connections []*ListConnectionsResponseDataConnections `json:"Connections,omitempty" xml:"Connections,omitempty" require:"true" type:"Repeated"`
}

func (s ListConnectionsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListConnectionsResponseData) GoString() string {
	return s.String()
}

func (s *ListConnectionsResponseData) SetPageNumber(v int) *ListConnectionsResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListConnectionsResponseData) SetPageSize(v int) *ListConnectionsResponseData {
	s.PageSize = &v
	return s
}

func (s *ListConnectionsResponseData) SetTotalCount(v int) *ListConnectionsResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListConnectionsResponseData) SetConnections(v []*ListConnectionsResponseDataConnections) *ListConnectionsResponseData {
	s.Connections = v
	return s
}

type ListConnectionsResponseDataConnections struct {
	Shared              *bool   `json:"Shared,omitempty" xml:"Shared,omitempty" require:"true"`
	GmtModified         *string `json:"GmtModified,omitempty" xml:"GmtModified,omitempty" require:"true"`
	ConnectStatus       *int    `json:"ConnectStatus,omitempty" xml:"ConnectStatus,omitempty" require:"true"`
	BindingCalcEngineId *int    `json:"BindingCalcEngineId,omitempty" xml:"BindingCalcEngineId,omitempty" require:"true"`
	Description         *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	ConnectionType      *string `json:"ConnectionType,omitempty" xml:"ConnectionType,omitempty" require:"true"`
	GmtCreate           *string `json:"GmtCreate,omitempty" xml:"GmtCreate,omitempty" require:"true"`
	DefaultEngine       *bool   `json:"DefaultEngine,omitempty" xml:"DefaultEngine,omitempty" require:"true"`
	Operator            *string `json:"Operator,omitempty" xml:"Operator,omitempty" require:"true"`
	Sequence            *int    `json:"Sequence,omitempty" xml:"Sequence,omitempty" require:"true"`
	EnvType             *int    `json:"EnvType,omitempty" xml:"EnvType,omitempty" require:"true"`
	TenantId            *int64  `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	Name                *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	SubType             *string `json:"SubType,omitempty" xml:"SubType,omitempty" require:"true"`
	Id                  *int    `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	ProjectId           *int    `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Status              *int    `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Content             *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
}

func (s ListConnectionsResponseDataConnections) String() string {
	return tea.Prettify(s)
}

func (s ListConnectionsResponseDataConnections) GoString() string {
	return s.String()
}

func (s *ListConnectionsResponseDataConnections) SetShared(v bool) *ListConnectionsResponseDataConnections {
	s.Shared = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetGmtModified(v string) *ListConnectionsResponseDataConnections {
	s.GmtModified = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetConnectStatus(v int) *ListConnectionsResponseDataConnections {
	s.ConnectStatus = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetBindingCalcEngineId(v int) *ListConnectionsResponseDataConnections {
	s.BindingCalcEngineId = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetDescription(v string) *ListConnectionsResponseDataConnections {
	s.Description = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetConnectionType(v string) *ListConnectionsResponseDataConnections {
	s.ConnectionType = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetGmtCreate(v string) *ListConnectionsResponseDataConnections {
	s.GmtCreate = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetDefaultEngine(v bool) *ListConnectionsResponseDataConnections {
	s.DefaultEngine = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetOperator(v string) *ListConnectionsResponseDataConnections {
	s.Operator = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetSequence(v int) *ListConnectionsResponseDataConnections {
	s.Sequence = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetEnvType(v int) *ListConnectionsResponseDataConnections {
	s.EnvType = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetTenantId(v int64) *ListConnectionsResponseDataConnections {
	s.TenantId = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetName(v string) *ListConnectionsResponseDataConnections {
	s.Name = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetSubType(v string) *ListConnectionsResponseDataConnections {
	s.SubType = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetId(v int) *ListConnectionsResponseDataConnections {
	s.Id = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetProjectId(v int) *ListConnectionsResponseDataConnections {
	s.ProjectId = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetStatus(v int) *ListConnectionsResponseDataConnections {
	s.Status = &v
	return s
}

func (s *ListConnectionsResponseDataConnections) SetContent(v string) *ListConnectionsResponseDataConnections {
	s.Content = &v
	return s
}

type UpdateConnectionRequest struct {
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty"`
	EnvType      *int    `json:"EnvType,omitempty" xml:"EnvType,omitempty"`
	Content      *string `json:"Content,omitempty" xml:"Content,omitempty"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty"`
	ConnectionId *int64  `json:"ConnectionId,omitempty" xml:"ConnectionId,omitempty" require:"true"`
}

func (s UpdateConnectionRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateConnectionRequest) GoString() string {
	return s.String()
}

func (s *UpdateConnectionRequest) SetDescription(v string) *UpdateConnectionRequest {
	s.Description = &v
	return s
}

func (s *UpdateConnectionRequest) SetEnvType(v int) *UpdateConnectionRequest {
	s.EnvType = &v
	return s
}

func (s *UpdateConnectionRequest) SetContent(v string) *UpdateConnectionRequest {
	s.Content = &v
	return s
}

func (s *UpdateConnectionRequest) SetStatus(v string) *UpdateConnectionRequest {
	s.Status = &v
	return s
}

func (s *UpdateConnectionRequest) SetConnectionId(v int64) *UpdateConnectionRequest {
	s.ConnectionId = &v
	return s
}

type UpdateConnectionResponse struct {
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	HttpStatusCode *string `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateConnectionResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateConnectionResponse) GoString() string {
	return s.String()
}

func (s *UpdateConnectionResponse) SetSuccess(v bool) *UpdateConnectionResponse {
	s.Success = &v
	return s
}

func (s *UpdateConnectionResponse) SetHttpStatusCode(v string) *UpdateConnectionResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *UpdateConnectionResponse) SetData(v bool) *UpdateConnectionResponse {
	s.Data = &v
	return s
}

func (s *UpdateConnectionResponse) SetRequestId(v string) *UpdateConnectionResponse {
	s.RequestId = &v
	return s
}

type DeleteConnectionRequest struct {
	ConnectionId *int64 `json:"ConnectionId,omitempty" xml:"ConnectionId,omitempty" require:"true"`
}

func (s DeleteConnectionRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteConnectionRequest) GoString() string {
	return s.String()
}

func (s *DeleteConnectionRequest) SetConnectionId(v int64) *DeleteConnectionRequest {
	s.ConnectionId = &v
	return s
}

type DeleteConnectionResponse struct {
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	HttpStatusCode *string `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteConnectionResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteConnectionResponse) GoString() string {
	return s.String()
}

func (s *DeleteConnectionResponse) SetSuccess(v bool) *DeleteConnectionResponse {
	s.Success = &v
	return s
}

func (s *DeleteConnectionResponse) SetHttpStatusCode(v string) *DeleteConnectionResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *DeleteConnectionResponse) SetData(v bool) *DeleteConnectionResponse {
	s.Data = &v
	return s
}

func (s *DeleteConnectionResponse) SetRequestId(v string) *DeleteConnectionResponse {
	s.RequestId = &v
	return s
}

type GetProjectDetailRequest struct {
	ProjectId *int64 `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
}

func (s GetProjectDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s GetProjectDetailRequest) GoString() string {
	return s.String()
}

func (s *GetProjectDetailRequest) SetProjectId(v int64) *GetProjectDetailRequest {
	s.ProjectId = &v
	return s
}

type GetProjectDetailResponse struct {
	HttpStatusCode *int                          `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                         `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	RequestId      *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *GetProjectDetailResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetProjectDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s GetProjectDetailResponse) GoString() string {
	return s.String()
}

func (s *GetProjectDetailResponse) SetHttpStatusCode(v int) *GetProjectDetailResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetProjectDetailResponse) SetSuccess(v bool) *GetProjectDetailResponse {
	s.Success = &v
	return s
}

func (s *GetProjectDetailResponse) SetRequestId(v string) *GetProjectDetailResponse {
	s.RequestId = &v
	return s
}

func (s *GetProjectDetailResponse) SetData(v *GetProjectDetailResponseData) *GetProjectDetailResponse {
	s.Data = v
	return s
}

type GetProjectDetailResponseData struct {
	GmtModified                      *string   `json:"GmtModified,omitempty" xml:"GmtModified,omitempty" require:"true"`
	DefaultDiResourceGroupIdentifier *string   `json:"DefaultDiResourceGroupIdentifier,omitempty" xml:"DefaultDiResourceGroupIdentifier,omitempty" require:"true"`
	IsAllowDownload                  *int      `json:"IsAllowDownload,omitempty" xml:"IsAllowDownload,omitempty" require:"true"`
	SchedulerRetryInterval           *int      `json:"SchedulerRetryInterval,omitempty" xml:"SchedulerRetryInterval,omitempty" require:"true"`
	ResidentArea                     *string   `json:"ResidentArea,omitempty" xml:"ResidentArea,omitempty" require:"true"`
	ProjectOwnerBaseId               *string   `json:"ProjectOwnerBaseId,omitempty" xml:"ProjectOwnerBaseId,omitempty" require:"true"`
	ProjectMode                      *int      `json:"ProjectMode,omitempty" xml:"ProjectMode,omitempty" require:"true"`
	GmtCreate                        *string   `json:"GmtCreate,omitempty" xml:"GmtCreate,omitempty" require:"true"`
	ProtectedMode                    *int      `json:"ProtectedMode,omitempty" xml:"ProtectedMode,omitempty" require:"true"`
	TenantId                         *int64    `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ProjectDescription               *string   `json:"ProjectDescription,omitempty" xml:"ProjectDescription,omitempty" require:"true"`
	SchedulerMaxRetryTimes           *int      `json:"SchedulerMaxRetryTimes,omitempty" xml:"SchedulerMaxRetryTimes,omitempty" require:"true"`
	ProjectName                      *string   `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	ProjectIdentifier                *string   `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty" require:"true"`
	ProjectId                        *int      `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Status                           *int      `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	DevelopmentType                  *int      `json:"DevelopmentType,omitempty" xml:"DevelopmentType,omitempty" require:"true"`
	EnvTypes                         []*string `json:"EnvTypes,omitempty" xml:"EnvTypes,omitempty" require:"true" type:"Repeated"`
}

func (s GetProjectDetailResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetProjectDetailResponseData) GoString() string {
	return s.String()
}

func (s *GetProjectDetailResponseData) SetGmtModified(v string) *GetProjectDetailResponseData {
	s.GmtModified = &v
	return s
}

func (s *GetProjectDetailResponseData) SetDefaultDiResourceGroupIdentifier(v string) *GetProjectDetailResponseData {
	s.DefaultDiResourceGroupIdentifier = &v
	return s
}

func (s *GetProjectDetailResponseData) SetIsAllowDownload(v int) *GetProjectDetailResponseData {
	s.IsAllowDownload = &v
	return s
}

func (s *GetProjectDetailResponseData) SetSchedulerRetryInterval(v int) *GetProjectDetailResponseData {
	s.SchedulerRetryInterval = &v
	return s
}

func (s *GetProjectDetailResponseData) SetResidentArea(v string) *GetProjectDetailResponseData {
	s.ResidentArea = &v
	return s
}

func (s *GetProjectDetailResponseData) SetProjectOwnerBaseId(v string) *GetProjectDetailResponseData {
	s.ProjectOwnerBaseId = &v
	return s
}

func (s *GetProjectDetailResponseData) SetProjectMode(v int) *GetProjectDetailResponseData {
	s.ProjectMode = &v
	return s
}

func (s *GetProjectDetailResponseData) SetGmtCreate(v string) *GetProjectDetailResponseData {
	s.GmtCreate = &v
	return s
}

func (s *GetProjectDetailResponseData) SetProtectedMode(v int) *GetProjectDetailResponseData {
	s.ProtectedMode = &v
	return s
}

func (s *GetProjectDetailResponseData) SetTenantId(v int64) *GetProjectDetailResponseData {
	s.TenantId = &v
	return s
}

func (s *GetProjectDetailResponseData) SetProjectDescription(v string) *GetProjectDetailResponseData {
	s.ProjectDescription = &v
	return s
}

func (s *GetProjectDetailResponseData) SetSchedulerMaxRetryTimes(v int) *GetProjectDetailResponseData {
	s.SchedulerMaxRetryTimes = &v
	return s
}

func (s *GetProjectDetailResponseData) SetProjectName(v string) *GetProjectDetailResponseData {
	s.ProjectName = &v
	return s
}

func (s *GetProjectDetailResponseData) SetProjectIdentifier(v string) *GetProjectDetailResponseData {
	s.ProjectIdentifier = &v
	return s
}

func (s *GetProjectDetailResponseData) SetProjectId(v int) *GetProjectDetailResponseData {
	s.ProjectId = &v
	return s
}

func (s *GetProjectDetailResponseData) SetStatus(v int) *GetProjectDetailResponseData {
	s.Status = &v
	return s
}

func (s *GetProjectDetailResponseData) SetDevelopmentType(v int) *GetProjectDetailResponseData {
	s.DevelopmentType = &v
	return s
}

func (s *GetProjectDetailResponseData) SetEnvTypes(v []*string) *GetProjectDetailResponseData {
	s.EnvTypes = v
	return s
}

type ListResourceGroupsRequest struct {
	ResourceGroupType *int    `json:"ResourceGroupType,omitempty" xml:"ResourceGroupType,omitempty" require:"true"`
	Keyword           *string `json:"Keyword,omitempty" xml:"Keyword,omitempty"`
}

func (s ListResourceGroupsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListResourceGroupsRequest) GoString() string {
	return s.String()
}

func (s *ListResourceGroupsRequest) SetResourceGroupType(v int) *ListResourceGroupsRequest {
	s.ResourceGroupType = &v
	return s
}

func (s *ListResourceGroupsRequest) SetKeyword(v string) *ListResourceGroupsRequest {
	s.Keyword = &v
	return s
}

type ListResourceGroupsResponse struct {
	HttpStatusCode *int                              `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                             `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	RequestId      *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           []*ListResourceGroupsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Repeated"`
}

func (s ListResourceGroupsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListResourceGroupsResponse) GoString() string {
	return s.String()
}

func (s *ListResourceGroupsResponse) SetHttpStatusCode(v int) *ListResourceGroupsResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListResourceGroupsResponse) SetSuccess(v bool) *ListResourceGroupsResponse {
	s.Success = &v
	return s
}

func (s *ListResourceGroupsResponse) SetRequestId(v string) *ListResourceGroupsResponse {
	s.RequestId = &v
	return s
}

func (s *ListResourceGroupsResponse) SetData(v []*ListResourceGroupsResponseData) *ListResourceGroupsResponse {
	s.Data = v
	return s
}

type ListResourceGroupsResponseData struct {
	Identifier        *string                `json:"Identifier,omitempty" xml:"Identifier,omitempty" require:"true"`
	Cluster           *string                `json:"Cluster,omitempty" xml:"Cluster,omitempty" require:"true"`
	BizExtKey         *string                `json:"BizExtKey,omitempty" xml:"BizExtKey,omitempty" require:"true"`
	EnableKp          *bool                  `json:"EnableKp,omitempty" xml:"EnableKp,omitempty" require:"true"`
	UpdateTime        *string                `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
	ResourceGroupType *string                `json:"ResourceGroupType,omitempty" xml:"ResourceGroupType,omitempty" require:"true"`
	Mode              *string                `json:"Mode,omitempty" xml:"Mode,omitempty" require:"true"`
	Sequence          *int                   `json:"Sequence,omitempty" xml:"Sequence,omitempty" require:"true"`
	IsDefault         *bool                  `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
	CreateTime        *string                `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	Name              *string                `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	TenantId          *int64                 `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	Id                *int64                 `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Status            *int                   `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Specs             map[string]interface{} `json:"Specs,omitempty" xml:"Specs,omitempty" require:"true"`
}

func (s ListResourceGroupsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListResourceGroupsResponseData) GoString() string {
	return s.String()
}

func (s *ListResourceGroupsResponseData) SetIdentifier(v string) *ListResourceGroupsResponseData {
	s.Identifier = &v
	return s
}

func (s *ListResourceGroupsResponseData) SetCluster(v string) *ListResourceGroupsResponseData {
	s.Cluster = &v
	return s
}

func (s *ListResourceGroupsResponseData) SetBizExtKey(v string) *ListResourceGroupsResponseData {
	s.BizExtKey = &v
	return s
}

func (s *ListResourceGroupsResponseData) SetEnableKp(v bool) *ListResourceGroupsResponseData {
	s.EnableKp = &v
	return s
}

func (s *ListResourceGroupsResponseData) SetUpdateTime(v string) *ListResourceGroupsResponseData {
	s.UpdateTime = &v
	return s
}

func (s *ListResourceGroupsResponseData) SetResourceGroupType(v string) *ListResourceGroupsResponseData {
	s.ResourceGroupType = &v
	return s
}

func (s *ListResourceGroupsResponseData) SetMode(v string) *ListResourceGroupsResponseData {
	s.Mode = &v
	return s
}

func (s *ListResourceGroupsResponseData) SetSequence(v int) *ListResourceGroupsResponseData {
	s.Sequence = &v
	return s
}

func (s *ListResourceGroupsResponseData) SetIsDefault(v bool) *ListResourceGroupsResponseData {
	s.IsDefault = &v
	return s
}

func (s *ListResourceGroupsResponseData) SetCreateTime(v string) *ListResourceGroupsResponseData {
	s.CreateTime = &v
	return s
}

func (s *ListResourceGroupsResponseData) SetName(v string) *ListResourceGroupsResponseData {
	s.Name = &v
	return s
}

func (s *ListResourceGroupsResponseData) SetTenantId(v int64) *ListResourceGroupsResponseData {
	s.TenantId = &v
	return s
}

func (s *ListResourceGroupsResponseData) SetId(v int64) *ListResourceGroupsResponseData {
	s.Id = &v
	return s
}

func (s *ListResourceGroupsResponseData) SetStatus(v int) *ListResourceGroupsResponseData {
	s.Status = &v
	return s
}

func (s *ListResourceGroupsResponseData) SetSpecs(v map[string]interface{}) *ListResourceGroupsResponseData {
	s.Specs = v
	return s
}

type CreateConnectionRequest struct {
	ProjectId      *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Name           *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Description    *string `json:"Description,omitempty" xml:"Description,omitempty"`
	ConnectionType *string `json:"ConnectionType,omitempty" xml:"ConnectionType,omitempty" require:"true"`
	SubType        *string `json:"SubType,omitempty" xml:"SubType,omitempty"`
	EnvType        *int    `json:"EnvType,omitempty" xml:"EnvType,omitempty" require:"true"`
	Content        *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
}

func (s CreateConnectionRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateConnectionRequest) GoString() string {
	return s.String()
}

func (s *CreateConnectionRequest) SetProjectId(v int64) *CreateConnectionRequest {
	s.ProjectId = &v
	return s
}

func (s *CreateConnectionRequest) SetName(v string) *CreateConnectionRequest {
	s.Name = &v
	return s
}

func (s *CreateConnectionRequest) SetDescription(v string) *CreateConnectionRequest {
	s.Description = &v
	return s
}

func (s *CreateConnectionRequest) SetConnectionType(v string) *CreateConnectionRequest {
	s.ConnectionType = &v
	return s
}

func (s *CreateConnectionRequest) SetSubType(v string) *CreateConnectionRequest {
	s.SubType = &v
	return s
}

func (s *CreateConnectionRequest) SetEnvType(v int) *CreateConnectionRequest {
	s.EnvType = &v
	return s
}

func (s *CreateConnectionRequest) SetContent(v string) *CreateConnectionRequest {
	s.Content = &v
	return s
}

type CreateConnectionResponse struct {
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	HttpStatusCode *string `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *int64  `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CreateConnectionResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateConnectionResponse) GoString() string {
	return s.String()
}

func (s *CreateConnectionResponse) SetSuccess(v bool) *CreateConnectionResponse {
	s.Success = &v
	return s
}

func (s *CreateConnectionResponse) SetHttpStatusCode(v string) *CreateConnectionResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *CreateConnectionResponse) SetData(v int64) *CreateConnectionResponse {
	s.Data = &v
	return s
}

func (s *CreateConnectionResponse) SetRequestId(v string) *CreateConnectionResponse {
	s.RequestId = &v
	return s
}

type GetDataServiceApplicationRequest struct {
	TenantId      *int64 `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ProjectId     *int64 `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	ApplicationId *int64 `json:"ApplicationId,omitempty" xml:"ApplicationId,omitempty" require:"true"`
}

func (s GetDataServiceApplicationRequest) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApplicationRequest) GoString() string {
	return s.String()
}

func (s *GetDataServiceApplicationRequest) SetTenantId(v int64) *GetDataServiceApplicationRequest {
	s.TenantId = &v
	return s
}

func (s *GetDataServiceApplicationRequest) SetProjectId(v int64) *GetDataServiceApplicationRequest {
	s.ProjectId = &v
	return s
}

func (s *GetDataServiceApplicationRequest) SetApplicationId(v int64) *GetDataServiceApplicationRequest {
	s.ApplicationId = &v
	return s
}

type GetDataServiceApplicationResponse struct {
	ErrorCode      *string                                `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                                `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                                   `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                                  `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetDataServiceApplicationResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetDataServiceApplicationResponse) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApplicationResponse) GoString() string {
	return s.String()
}

func (s *GetDataServiceApplicationResponse) SetErrorCode(v string) *GetDataServiceApplicationResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetDataServiceApplicationResponse) SetErrorMessage(v string) *GetDataServiceApplicationResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetDataServiceApplicationResponse) SetHttpStatusCode(v int) *GetDataServiceApplicationResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetDataServiceApplicationResponse) SetRequestId(v string) *GetDataServiceApplicationResponse {
	s.RequestId = &v
	return s
}

func (s *GetDataServiceApplicationResponse) SetSuccess(v bool) *GetDataServiceApplicationResponse {
	s.Success = &v
	return s
}

func (s *GetDataServiceApplicationResponse) SetData(v *GetDataServiceApplicationResponseData) *GetDataServiceApplicationResponse {
	s.Data = v
	return s
}

type GetDataServiceApplicationResponseData struct {
	ApplicationCode   *string `json:"ApplicationCode,omitempty" xml:"ApplicationCode,omitempty" require:"true"`
	ApplicationId     *int64  `json:"ApplicationId,omitempty" xml:"ApplicationId,omitempty" require:"true"`
	ApplicationKey    *string `json:"ApplicationKey,omitempty" xml:"ApplicationKey,omitempty" require:"true"`
	ApplicationName   *string `json:"ApplicationName,omitempty" xml:"ApplicationName,omitempty" require:"true"`
	ApplicationSecret *string `json:"ApplicationSecret,omitempty" xml:"ApplicationSecret,omitempty" require:"true"`
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
}

func (s GetDataServiceApplicationResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApplicationResponseData) GoString() string {
	return s.String()
}

func (s *GetDataServiceApplicationResponseData) SetApplicationCode(v string) *GetDataServiceApplicationResponseData {
	s.ApplicationCode = &v
	return s
}

func (s *GetDataServiceApplicationResponseData) SetApplicationId(v int64) *GetDataServiceApplicationResponseData {
	s.ApplicationId = &v
	return s
}

func (s *GetDataServiceApplicationResponseData) SetApplicationKey(v string) *GetDataServiceApplicationResponseData {
	s.ApplicationKey = &v
	return s
}

func (s *GetDataServiceApplicationResponseData) SetApplicationName(v string) *GetDataServiceApplicationResponseData {
	s.ApplicationName = &v
	return s
}

func (s *GetDataServiceApplicationResponseData) SetApplicationSecret(v string) *GetDataServiceApplicationResponseData {
	s.ApplicationSecret = &v
	return s
}

func (s *GetDataServiceApplicationResponseData) SetProjectId(v int64) *GetDataServiceApplicationResponseData {
	s.ProjectId = &v
	return s
}

type ListDataServiceApplicationsRequest struct {
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	ProjectIdList *string `json:"ProjectIdList,omitempty" xml:"ProjectIdList,omitempty" require:"true"`
	TenantId      *int64  `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
}

func (s ListDataServiceApplicationsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApplicationsRequest) GoString() string {
	return s.String()
}

func (s *ListDataServiceApplicationsRequest) SetPageNumber(v int) *ListDataServiceApplicationsRequest {
	s.PageNumber = &v
	return s
}

func (s *ListDataServiceApplicationsRequest) SetPageSize(v int) *ListDataServiceApplicationsRequest {
	s.PageSize = &v
	return s
}

func (s *ListDataServiceApplicationsRequest) SetProjectIdList(v string) *ListDataServiceApplicationsRequest {
	s.ProjectIdList = &v
	return s
}

func (s *ListDataServiceApplicationsRequest) SetTenantId(v int64) *ListDataServiceApplicationsRequest {
	s.TenantId = &v
	return s
}

type ListDataServiceApplicationsResponse struct {
	ErrorCode      *string                                  `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                                  `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                                     `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                                    `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *ListDataServiceApplicationsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListDataServiceApplicationsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApplicationsResponse) GoString() string {
	return s.String()
}

func (s *ListDataServiceApplicationsResponse) SetErrorCode(v string) *ListDataServiceApplicationsResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListDataServiceApplicationsResponse) SetErrorMessage(v string) *ListDataServiceApplicationsResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListDataServiceApplicationsResponse) SetHttpStatusCode(v int) *ListDataServiceApplicationsResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListDataServiceApplicationsResponse) SetRequestId(v string) *ListDataServiceApplicationsResponse {
	s.RequestId = &v
	return s
}

func (s *ListDataServiceApplicationsResponse) SetSuccess(v bool) *ListDataServiceApplicationsResponse {
	s.Success = &v
	return s
}

func (s *ListDataServiceApplicationsResponse) SetData(v *ListDataServiceApplicationsResponseData) *ListDataServiceApplicationsResponse {
	s.Data = v
	return s
}

type ListDataServiceApplicationsResponseData struct {
	PageNumber   *int                                                   `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize     *int                                                   `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount   *int                                                   `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Applications []*ListDataServiceApplicationsResponseDataApplications `json:"Applications,omitempty" xml:"Applications,omitempty" require:"true" type:"Repeated"`
}

func (s ListDataServiceApplicationsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApplicationsResponseData) GoString() string {
	return s.String()
}

func (s *ListDataServiceApplicationsResponseData) SetPageNumber(v int) *ListDataServiceApplicationsResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListDataServiceApplicationsResponseData) SetPageSize(v int) *ListDataServiceApplicationsResponseData {
	s.PageSize = &v
	return s
}

func (s *ListDataServiceApplicationsResponseData) SetTotalCount(v int) *ListDataServiceApplicationsResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListDataServiceApplicationsResponseData) SetApplications(v []*ListDataServiceApplicationsResponseDataApplications) *ListDataServiceApplicationsResponseData {
	s.Applications = v
	return s
}

type ListDataServiceApplicationsResponseDataApplications struct {
	ApplicationId   *int64  `json:"ApplicationId,omitempty" xml:"ApplicationId,omitempty" require:"true"`
	ApplicationName *string `json:"ApplicationName,omitempty" xml:"ApplicationName,omitempty" require:"true"`
	ProjectId       *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
}

func (s ListDataServiceApplicationsResponseDataApplications) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApplicationsResponseDataApplications) GoString() string {
	return s.String()
}

func (s *ListDataServiceApplicationsResponseDataApplications) SetApplicationId(v int64) *ListDataServiceApplicationsResponseDataApplications {
	s.ApplicationId = &v
	return s
}

func (s *ListDataServiceApplicationsResponseDataApplications) SetApplicationName(v string) *ListDataServiceApplicationsResponseDataApplications {
	s.ApplicationName = &v
	return s
}

func (s *ListDataServiceApplicationsResponseDataApplications) SetProjectId(v int64) *ListDataServiceApplicationsResponseDataApplications {
	s.ProjectId = &v
	return s
}

type GetNodeOnBaselineRequest struct {
	BaselineId *int64 `json:"BaselineId,omitempty" xml:"BaselineId,omitempty" require:"true"`
}

func (s GetNodeOnBaselineRequest) String() string {
	return tea.Prettify(s)
}

func (s GetNodeOnBaselineRequest) GoString() string {
	return s.String()
}

func (s *GetNodeOnBaselineRequest) SetBaselineId(v int64) *GetNodeOnBaselineRequest {
	s.BaselineId = &v
	return s
}

type GetNodeOnBaselineResponse struct {
	Success        *string                          `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                          `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                          `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                             `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           []*GetNodeOnBaselineResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Repeated"`
}

func (s GetNodeOnBaselineResponse) String() string {
	return tea.Prettify(s)
}

func (s GetNodeOnBaselineResponse) GoString() string {
	return s.String()
}

func (s *GetNodeOnBaselineResponse) SetSuccess(v string) *GetNodeOnBaselineResponse {
	s.Success = &v
	return s
}

func (s *GetNodeOnBaselineResponse) SetErrorCode(v string) *GetNodeOnBaselineResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetNodeOnBaselineResponse) SetErrorMessage(v string) *GetNodeOnBaselineResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetNodeOnBaselineResponse) SetHttpStatusCode(v int) *GetNodeOnBaselineResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetNodeOnBaselineResponse) SetRequestId(v string) *GetNodeOnBaselineResponse {
	s.RequestId = &v
	return s
}

func (s *GetNodeOnBaselineResponse) SetData(v []*GetNodeOnBaselineResponseData) *GetNodeOnBaselineResponse {
	s.Data = v
	return s
}

type GetNodeOnBaselineResponseData struct {
	NodeId    *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	NodeName  *string `json:"NodeName,omitempty" xml:"NodeName,omitempty" require:"true"`
	Owner     *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	ProjectId *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
}

func (s GetNodeOnBaselineResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetNodeOnBaselineResponseData) GoString() string {
	return s.String()
}

func (s *GetNodeOnBaselineResponseData) SetNodeId(v int64) *GetNodeOnBaselineResponseData {
	s.NodeId = &v
	return s
}

func (s *GetNodeOnBaselineResponseData) SetNodeName(v string) *GetNodeOnBaselineResponseData {
	s.NodeName = &v
	return s
}

func (s *GetNodeOnBaselineResponseData) SetOwner(v string) *GetNodeOnBaselineResponseData {
	s.Owner = &v
	return s
}

func (s *GetNodeOnBaselineResponseData) SetProjectId(v int64) *GetNodeOnBaselineResponseData {
	s.ProjectId = &v
	return s
}

type ListBaselineConfigsRequest struct {
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Owner         *string `json:"Owner,omitempty" xml:"Owner,omitempty"`
	ProjectId     *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Priority      *string `json:"Priority,omitempty" xml:"Priority,omitempty"`
	Useflag       *bool   `json:"Useflag,omitempty" xml:"Useflag,omitempty"`
	BaselineTypes *string `json:"BaselineTypes,omitempty" xml:"BaselineTypes,omitempty"`
	SearchText    *string `json:"SearchText,omitempty" xml:"SearchText,omitempty"`
}

func (s ListBaselineConfigsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListBaselineConfigsRequest) GoString() string {
	return s.String()
}

func (s *ListBaselineConfigsRequest) SetPageNumber(v int) *ListBaselineConfigsRequest {
	s.PageNumber = &v
	return s
}

func (s *ListBaselineConfigsRequest) SetPageSize(v int) *ListBaselineConfigsRequest {
	s.PageSize = &v
	return s
}

func (s *ListBaselineConfigsRequest) SetOwner(v string) *ListBaselineConfigsRequest {
	s.Owner = &v
	return s
}

func (s *ListBaselineConfigsRequest) SetProjectId(v int64) *ListBaselineConfigsRequest {
	s.ProjectId = &v
	return s
}

func (s *ListBaselineConfigsRequest) SetPriority(v string) *ListBaselineConfigsRequest {
	s.Priority = &v
	return s
}

func (s *ListBaselineConfigsRequest) SetUseflag(v bool) *ListBaselineConfigsRequest {
	s.Useflag = &v
	return s
}

func (s *ListBaselineConfigsRequest) SetBaselineTypes(v string) *ListBaselineConfigsRequest {
	s.BaselineTypes = &v
	return s
}

func (s *ListBaselineConfigsRequest) SetSearchText(v string) *ListBaselineConfigsRequest {
	s.SearchText = &v
	return s
}

type ListBaselineConfigsResponse struct {
	Success        *bool                            `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                          `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                          `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                             `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *ListBaselineConfigsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListBaselineConfigsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListBaselineConfigsResponse) GoString() string {
	return s.String()
}

func (s *ListBaselineConfigsResponse) SetSuccess(v bool) *ListBaselineConfigsResponse {
	s.Success = &v
	return s
}

func (s *ListBaselineConfigsResponse) SetErrorCode(v string) *ListBaselineConfigsResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListBaselineConfigsResponse) SetErrorMessage(v string) *ListBaselineConfigsResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListBaselineConfigsResponse) SetHttpStatusCode(v int) *ListBaselineConfigsResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListBaselineConfigsResponse) SetRequestId(v string) *ListBaselineConfigsResponse {
	s.RequestId = &v
	return s
}

func (s *ListBaselineConfigsResponse) SetData(v *ListBaselineConfigsResponseData) *ListBaselineConfigsResponse {
	s.Data = v
	return s
}

type ListBaselineConfigsResponseData struct {
	PageNumber *int                                        `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                        `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                                        `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Baselines  []*ListBaselineConfigsResponseDataBaselines `json:"Baselines,omitempty" xml:"Baselines,omitempty" require:"true" type:"Repeated"`
}

func (s ListBaselineConfigsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListBaselineConfigsResponseData) GoString() string {
	return s.String()
}

func (s *ListBaselineConfigsResponseData) SetPageNumber(v int) *ListBaselineConfigsResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListBaselineConfigsResponseData) SetPageSize(v int) *ListBaselineConfigsResponseData {
	s.PageSize = &v
	return s
}

func (s *ListBaselineConfigsResponseData) SetTotalCount(v int) *ListBaselineConfigsResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListBaselineConfigsResponseData) SetBaselines(v []*ListBaselineConfigsResponseDataBaselines) *ListBaselineConfigsResponseData {
	s.Baselines = v
	return s
}

type ListBaselineConfigsResponseDataBaselines struct {
	BaselineId    *int64  `json:"BaselineId,omitempty" xml:"BaselineId,omitempty" require:"true"`
	Priority      *int    `json:"Priority,omitempty" xml:"Priority,omitempty" require:"true"`
	BaselineName  *string `json:"BaselineName,omitempty" xml:"BaselineName,omitempty" require:"true"`
	Owner         *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	ProjectId     *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	UseFlag       *bool   `json:"UseFlag,omitempty" xml:"UseFlag,omitempty" require:"true"`
	BaselineType  *string `json:"BaselineType,omitempty" xml:"BaselineType,omitempty" require:"true"`
	ExpHour       *int    `json:"ExpHour,omitempty" xml:"ExpHour,omitempty" require:"true"`
	ExpMinu       *int    `json:"ExpMinu,omitempty" xml:"ExpMinu,omitempty" require:"true"`
	SlaHour       *int    `json:"SlaHour,omitempty" xml:"SlaHour,omitempty" require:"true"`
	SlaMinu       *int    `json:"SlaMinu,omitempty" xml:"SlaMinu,omitempty" require:"true"`
	HourExpDetail *string `json:"HourExpDetail,omitempty" xml:"HourExpDetail,omitempty" require:"true"`
	HourSlaDetail *string `json:"HourSlaDetail,omitempty" xml:"HourSlaDetail,omitempty" require:"true"`
	IsDefault     *bool   `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
}

func (s ListBaselineConfigsResponseDataBaselines) String() string {
	return tea.Prettify(s)
}

func (s ListBaselineConfigsResponseDataBaselines) GoString() string {
	return s.String()
}

func (s *ListBaselineConfigsResponseDataBaselines) SetBaselineId(v int64) *ListBaselineConfigsResponseDataBaselines {
	s.BaselineId = &v
	return s
}

func (s *ListBaselineConfigsResponseDataBaselines) SetPriority(v int) *ListBaselineConfigsResponseDataBaselines {
	s.Priority = &v
	return s
}

func (s *ListBaselineConfigsResponseDataBaselines) SetBaselineName(v string) *ListBaselineConfigsResponseDataBaselines {
	s.BaselineName = &v
	return s
}

func (s *ListBaselineConfigsResponseDataBaselines) SetOwner(v string) *ListBaselineConfigsResponseDataBaselines {
	s.Owner = &v
	return s
}

func (s *ListBaselineConfigsResponseDataBaselines) SetProjectId(v int64) *ListBaselineConfigsResponseDataBaselines {
	s.ProjectId = &v
	return s
}

func (s *ListBaselineConfigsResponseDataBaselines) SetUseFlag(v bool) *ListBaselineConfigsResponseDataBaselines {
	s.UseFlag = &v
	return s
}

func (s *ListBaselineConfigsResponseDataBaselines) SetBaselineType(v string) *ListBaselineConfigsResponseDataBaselines {
	s.BaselineType = &v
	return s
}

func (s *ListBaselineConfigsResponseDataBaselines) SetExpHour(v int) *ListBaselineConfigsResponseDataBaselines {
	s.ExpHour = &v
	return s
}

func (s *ListBaselineConfigsResponseDataBaselines) SetExpMinu(v int) *ListBaselineConfigsResponseDataBaselines {
	s.ExpMinu = &v
	return s
}

func (s *ListBaselineConfigsResponseDataBaselines) SetSlaHour(v int) *ListBaselineConfigsResponseDataBaselines {
	s.SlaHour = &v
	return s
}

func (s *ListBaselineConfigsResponseDataBaselines) SetSlaMinu(v int) *ListBaselineConfigsResponseDataBaselines {
	s.SlaMinu = &v
	return s
}

func (s *ListBaselineConfigsResponseDataBaselines) SetHourExpDetail(v string) *ListBaselineConfigsResponseDataBaselines {
	s.HourExpDetail = &v
	return s
}

func (s *ListBaselineConfigsResponseDataBaselines) SetHourSlaDetail(v string) *ListBaselineConfigsResponseDataBaselines {
	s.HourSlaDetail = &v
	return s
}

func (s *ListBaselineConfigsResponseDataBaselines) SetIsDefault(v bool) *ListBaselineConfigsResponseDataBaselines {
	s.IsDefault = &v
	return s
}

type GetMetaTableChangeLogRequest struct {
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	TableGuid  *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
	ChangeType *string `json:"ChangeType,omitempty" xml:"ChangeType,omitempty"`
	ObjectType *string `json:"ObjectType,omitempty" xml:"ObjectType,omitempty"`
	StartDate  *string `json:"StartDate,omitempty" xml:"StartDate,omitempty"`
	EndDate    *string `json:"EndDate,omitempty" xml:"EndDate,omitempty"`
}

func (s GetMetaTableChangeLogRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableChangeLogRequest) GoString() string {
	return s.String()
}

func (s *GetMetaTableChangeLogRequest) SetPageNumber(v int) *GetMetaTableChangeLogRequest {
	s.PageNumber = &v
	return s
}

func (s *GetMetaTableChangeLogRequest) SetPageSize(v int) *GetMetaTableChangeLogRequest {
	s.PageSize = &v
	return s
}

func (s *GetMetaTableChangeLogRequest) SetTableGuid(v string) *GetMetaTableChangeLogRequest {
	s.TableGuid = &v
	return s
}

func (s *GetMetaTableChangeLogRequest) SetChangeType(v string) *GetMetaTableChangeLogRequest {
	s.ChangeType = &v
	return s
}

func (s *GetMetaTableChangeLogRequest) SetObjectType(v string) *GetMetaTableChangeLogRequest {
	s.ObjectType = &v
	return s
}

func (s *GetMetaTableChangeLogRequest) SetStartDate(v string) *GetMetaTableChangeLogRequest {
	s.StartDate = &v
	return s
}

func (s *GetMetaTableChangeLogRequest) SetEndDate(v string) *GetMetaTableChangeLogRequest {
	s.EndDate = &v
	return s
}

type GetMetaTableChangeLogResponse struct {
	RequestId      *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string                            `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                            `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                               `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                              `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetMetaTableChangeLogResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaTableChangeLogResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableChangeLogResponse) GoString() string {
	return s.String()
}

func (s *GetMetaTableChangeLogResponse) SetRequestId(v string) *GetMetaTableChangeLogResponse {
	s.RequestId = &v
	return s
}

func (s *GetMetaTableChangeLogResponse) SetErrorCode(v string) *GetMetaTableChangeLogResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetMetaTableChangeLogResponse) SetErrorMessage(v string) *GetMetaTableChangeLogResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetMetaTableChangeLogResponse) SetHttpStatusCode(v int) *GetMetaTableChangeLogResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetMetaTableChangeLogResponse) SetSuccess(v bool) *GetMetaTableChangeLogResponse {
	s.Success = &v
	return s
}

func (s *GetMetaTableChangeLogResponse) SetData(v *GetMetaTableChangeLogResponseData) *GetMetaTableChangeLogResponse {
	s.Data = v
	return s
}

type GetMetaTableChangeLogResponseData struct {
	PageNumber     *int                                               `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize       *int                                               `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount     *int64                                             `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	DataEntityList []*GetMetaTableChangeLogResponseDataDataEntityList `json:"DataEntityList,omitempty" xml:"DataEntityList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMetaTableChangeLogResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableChangeLogResponseData) GoString() string {
	return s.String()
}

func (s *GetMetaTableChangeLogResponseData) SetPageNumber(v int) *GetMetaTableChangeLogResponseData {
	s.PageNumber = &v
	return s
}

func (s *GetMetaTableChangeLogResponseData) SetPageSize(v int) *GetMetaTableChangeLogResponseData {
	s.PageSize = &v
	return s
}

func (s *GetMetaTableChangeLogResponseData) SetTotalCount(v int64) *GetMetaTableChangeLogResponseData {
	s.TotalCount = &v
	return s
}

func (s *GetMetaTableChangeLogResponseData) SetDataEntityList(v []*GetMetaTableChangeLogResponseDataDataEntityList) *GetMetaTableChangeLogResponseData {
	s.DataEntityList = v
	return s
}

type GetMetaTableChangeLogResponseDataDataEntityList struct {
	CreateTime    *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	ModifiedTime  *int64  `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	ChangeType    *string `json:"ChangeType,omitempty" xml:"ChangeType,omitempty" require:"true"`
	Operator      *string `json:"Operator,omitempty" xml:"Operator,omitempty" require:"true"`
	ObjectType    *string `json:"ObjectType,omitempty" xml:"ObjectType,omitempty" require:"true"`
	ChangeContent *string `json:"ChangeContent,omitempty" xml:"ChangeContent,omitempty" require:"true"`
}

func (s GetMetaTableChangeLogResponseDataDataEntityList) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableChangeLogResponseDataDataEntityList) GoString() string {
	return s.String()
}

func (s *GetMetaTableChangeLogResponseDataDataEntityList) SetCreateTime(v int64) *GetMetaTableChangeLogResponseDataDataEntityList {
	s.CreateTime = &v
	return s
}

func (s *GetMetaTableChangeLogResponseDataDataEntityList) SetModifiedTime(v int64) *GetMetaTableChangeLogResponseDataDataEntityList {
	s.ModifiedTime = &v
	return s
}

func (s *GetMetaTableChangeLogResponseDataDataEntityList) SetChangeType(v string) *GetMetaTableChangeLogResponseDataDataEntityList {
	s.ChangeType = &v
	return s
}

func (s *GetMetaTableChangeLogResponseDataDataEntityList) SetOperator(v string) *GetMetaTableChangeLogResponseDataDataEntityList {
	s.Operator = &v
	return s
}

func (s *GetMetaTableChangeLogResponseDataDataEntityList) SetObjectType(v string) *GetMetaTableChangeLogResponseDataDataEntityList {
	s.ObjectType = &v
	return s
}

func (s *GetMetaTableChangeLogResponseDataDataEntityList) SetChangeContent(v string) *GetMetaTableChangeLogResponseDataDataEntityList {
	s.ChangeContent = &v
	return s
}

type GetMetaTableOutputRequest struct {
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	TableGuid  *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
	StartDate  *string `json:"StartDate,omitempty" xml:"StartDate,omitempty" require:"true"`
	EndDate    *string `json:"EndDate,omitempty" xml:"EndDate,omitempty" require:"true"`
}

func (s GetMetaTableOutputRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableOutputRequest) GoString() string {
	return s.String()
}

func (s *GetMetaTableOutputRequest) SetPageNumber(v int) *GetMetaTableOutputRequest {
	s.PageNumber = &v
	return s
}

func (s *GetMetaTableOutputRequest) SetPageSize(v int) *GetMetaTableOutputRequest {
	s.PageSize = &v
	return s
}

func (s *GetMetaTableOutputRequest) SetTableGuid(v string) *GetMetaTableOutputRequest {
	s.TableGuid = &v
	return s
}

func (s *GetMetaTableOutputRequest) SetStartDate(v string) *GetMetaTableOutputRequest {
	s.StartDate = &v
	return s
}

func (s *GetMetaTableOutputRequest) SetEndDate(v string) *GetMetaTableOutputRequest {
	s.EndDate = &v
	return s
}

type GetMetaTableOutputResponse struct {
	RequestId      *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string                         `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                         `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                            `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                           `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetMetaTableOutputResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaTableOutputResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableOutputResponse) GoString() string {
	return s.String()
}

func (s *GetMetaTableOutputResponse) SetRequestId(v string) *GetMetaTableOutputResponse {
	s.RequestId = &v
	return s
}

func (s *GetMetaTableOutputResponse) SetErrorCode(v string) *GetMetaTableOutputResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetMetaTableOutputResponse) SetErrorMessage(v string) *GetMetaTableOutputResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetMetaTableOutputResponse) SetHttpStatusCode(v int) *GetMetaTableOutputResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetMetaTableOutputResponse) SetSuccess(v bool) *GetMetaTableOutputResponse {
	s.Success = &v
	return s
}

func (s *GetMetaTableOutputResponse) SetData(v *GetMetaTableOutputResponseData) *GetMetaTableOutputResponse {
	s.Data = v
	return s
}

type GetMetaTableOutputResponseData struct {
	PageNumber     *int                                            `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize       *int                                            `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount     *int64                                          `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	DataEntityList []*GetMetaTableOutputResponseDataDataEntityList `json:"DataEntityList,omitempty" xml:"DataEntityList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMetaTableOutputResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableOutputResponseData) GoString() string {
	return s.String()
}

func (s *GetMetaTableOutputResponseData) SetPageNumber(v int) *GetMetaTableOutputResponseData {
	s.PageNumber = &v
	return s
}

func (s *GetMetaTableOutputResponseData) SetPageSize(v int) *GetMetaTableOutputResponseData {
	s.PageSize = &v
	return s
}

func (s *GetMetaTableOutputResponseData) SetTotalCount(v int64) *GetMetaTableOutputResponseData {
	s.TotalCount = &v
	return s
}

func (s *GetMetaTableOutputResponseData) SetDataEntityList(v []*GetMetaTableOutputResponseDataDataEntityList) *GetMetaTableOutputResponseData {
	s.DataEntityList = v
	return s
}

type GetMetaTableOutputResponseDataDataEntityList struct {
	TableGuid      *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
	TaskId         *string `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
	StartTime      *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime        *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	WaitTime       *string `json:"WaitTime,omitempty" xml:"WaitTime,omitempty" require:"true"`
	ProjectId      *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	TaskInstanceId *int64  `json:"TaskInstanceId,omitempty" xml:"TaskInstanceId,omitempty" require:"true"`
}

func (s GetMetaTableOutputResponseDataDataEntityList) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableOutputResponseDataDataEntityList) GoString() string {
	return s.String()
}

func (s *GetMetaTableOutputResponseDataDataEntityList) SetTableGuid(v string) *GetMetaTableOutputResponseDataDataEntityList {
	s.TableGuid = &v
	return s
}

func (s *GetMetaTableOutputResponseDataDataEntityList) SetTaskId(v string) *GetMetaTableOutputResponseDataDataEntityList {
	s.TaskId = &v
	return s
}

func (s *GetMetaTableOutputResponseDataDataEntityList) SetStartTime(v string) *GetMetaTableOutputResponseDataDataEntityList {
	s.StartTime = &v
	return s
}

func (s *GetMetaTableOutputResponseDataDataEntityList) SetEndTime(v string) *GetMetaTableOutputResponseDataDataEntityList {
	s.EndTime = &v
	return s
}

func (s *GetMetaTableOutputResponseDataDataEntityList) SetWaitTime(v string) *GetMetaTableOutputResponseDataDataEntityList {
	s.WaitTime = &v
	return s
}

func (s *GetMetaTableOutputResponseDataDataEntityList) SetProjectId(v int64) *GetMetaTableOutputResponseDataDataEntityList {
	s.ProjectId = &v
	return s
}

func (s *GetMetaTableOutputResponseDataDataEntityList) SetTaskInstanceId(v int64) *GetMetaTableOutputResponseDataDataEntityList {
	s.TaskInstanceId = &v
	return s
}

type GetMetaTablePartitionRequest struct {
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	TableGuid  *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
}

func (s GetMetaTablePartitionRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTablePartitionRequest) GoString() string {
	return s.String()
}

func (s *GetMetaTablePartitionRequest) SetPageNumber(v int) *GetMetaTablePartitionRequest {
	s.PageNumber = &v
	return s
}

func (s *GetMetaTablePartitionRequest) SetPageSize(v int) *GetMetaTablePartitionRequest {
	s.PageSize = &v
	return s
}

func (s *GetMetaTablePartitionRequest) SetTableGuid(v string) *GetMetaTablePartitionRequest {
	s.TableGuid = &v
	return s
}

type GetMetaTablePartitionResponse struct {
	RequestId      *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string                            `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                            `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                               `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                              `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetMetaTablePartitionResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaTablePartitionResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTablePartitionResponse) GoString() string {
	return s.String()
}

func (s *GetMetaTablePartitionResponse) SetRequestId(v string) *GetMetaTablePartitionResponse {
	s.RequestId = &v
	return s
}

func (s *GetMetaTablePartitionResponse) SetErrorCode(v string) *GetMetaTablePartitionResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetMetaTablePartitionResponse) SetErrorMessage(v string) *GetMetaTablePartitionResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetMetaTablePartitionResponse) SetHttpStatusCode(v int) *GetMetaTablePartitionResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetMetaTablePartitionResponse) SetSuccess(v bool) *GetMetaTablePartitionResponse {
	s.Success = &v
	return s
}

func (s *GetMetaTablePartitionResponse) SetData(v *GetMetaTablePartitionResponseData) *GetMetaTablePartitionResponse {
	s.Data = v
	return s
}

type GetMetaTablePartitionResponseData struct {
	PageNumber     *int                                               `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize       *int                                               `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount     *int64                                             `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	DataEntityList []*GetMetaTablePartitionResponseDataDataEntityList `json:"DataEntityList,omitempty" xml:"DataEntityList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMetaTablePartitionResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTablePartitionResponseData) GoString() string {
	return s.String()
}

func (s *GetMetaTablePartitionResponseData) SetPageNumber(v int) *GetMetaTablePartitionResponseData {
	s.PageNumber = &v
	return s
}

func (s *GetMetaTablePartitionResponseData) SetPageSize(v int) *GetMetaTablePartitionResponseData {
	s.PageSize = &v
	return s
}

func (s *GetMetaTablePartitionResponseData) SetTotalCount(v int64) *GetMetaTablePartitionResponseData {
	s.TotalCount = &v
	return s
}

func (s *GetMetaTablePartitionResponseData) SetDataEntityList(v []*GetMetaTablePartitionResponseDataDataEntityList) *GetMetaTablePartitionResponseData {
	s.DataEntityList = v
	return s
}

type GetMetaTablePartitionResponseDataDataEntityList struct {
	PartitionGuid *string `json:"PartitionGuid,omitempty" xml:"PartitionGuid,omitempty" require:"true"`
	PartitionName *string `json:"PartitionName,omitempty" xml:"PartitionName,omitempty" require:"true"`
	CreateTime    *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	DataSize      *int64  `json:"DataSize,omitempty" xml:"DataSize,omitempty" require:"true"`
	RecordCount   *int64  `json:"RecordCount,omitempty" xml:"RecordCount,omitempty" require:"true"`
	ModifiedTime  *int64  `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	TableGuid     *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
}

func (s GetMetaTablePartitionResponseDataDataEntityList) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTablePartitionResponseDataDataEntityList) GoString() string {
	return s.String()
}

func (s *GetMetaTablePartitionResponseDataDataEntityList) SetPartitionGuid(v string) *GetMetaTablePartitionResponseDataDataEntityList {
	s.PartitionGuid = &v
	return s
}

func (s *GetMetaTablePartitionResponseDataDataEntityList) SetPartitionName(v string) *GetMetaTablePartitionResponseDataDataEntityList {
	s.PartitionName = &v
	return s
}

func (s *GetMetaTablePartitionResponseDataDataEntityList) SetCreateTime(v int64) *GetMetaTablePartitionResponseDataDataEntityList {
	s.CreateTime = &v
	return s
}

func (s *GetMetaTablePartitionResponseDataDataEntityList) SetDataSize(v int64) *GetMetaTablePartitionResponseDataDataEntityList {
	s.DataSize = &v
	return s
}

func (s *GetMetaTablePartitionResponseDataDataEntityList) SetRecordCount(v int64) *GetMetaTablePartitionResponseDataDataEntityList {
	s.RecordCount = &v
	return s
}

func (s *GetMetaTablePartitionResponseDataDataEntityList) SetModifiedTime(v int64) *GetMetaTablePartitionResponseDataDataEntityList {
	s.ModifiedTime = &v
	return s
}

func (s *GetMetaTablePartitionResponseDataDataEntityList) SetTableGuid(v string) *GetMetaTablePartitionResponseDataDataEntityList {
	s.TableGuid = &v
	return s
}

type GetMetaTableFullInfoRequest struct {
	TableGuid *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
	PageNum   *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize  *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s GetMetaTableFullInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableFullInfoRequest) GoString() string {
	return s.String()
}

func (s *GetMetaTableFullInfoRequest) SetTableGuid(v string) *GetMetaTableFullInfoRequest {
	s.TableGuid = &v
	return s
}

func (s *GetMetaTableFullInfoRequest) SetPageNum(v int) *GetMetaTableFullInfoRequest {
	s.PageNum = &v
	return s
}

func (s *GetMetaTableFullInfoRequest) SetPageSize(v int) *GetMetaTableFullInfoRequest {
	s.PageSize = &v
	return s
}

type GetMetaTableFullInfoResponse struct {
	RequestId      *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string                           `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                           `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                              `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                             `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetMetaTableFullInfoResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaTableFullInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableFullInfoResponse) GoString() string {
	return s.String()
}

func (s *GetMetaTableFullInfoResponse) SetRequestId(v string) *GetMetaTableFullInfoResponse {
	s.RequestId = &v
	return s
}

func (s *GetMetaTableFullInfoResponse) SetErrorCode(v string) *GetMetaTableFullInfoResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetMetaTableFullInfoResponse) SetErrorMessage(v string) *GetMetaTableFullInfoResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetMetaTableFullInfoResponse) SetHttpStatusCode(v int) *GetMetaTableFullInfoResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetMetaTableFullInfoResponse) SetSuccess(v bool) *GetMetaTableFullInfoResponse {
	s.Success = &v
	return s
}

func (s *GetMetaTableFullInfoResponse) SetData(v *GetMetaTableFullInfoResponseData) *GetMetaTableFullInfoResponse {
	s.Data = v
	return s
}

type GetMetaTableFullInfoResponseData struct {
	TableName        *string                                       `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	TableGuid        *string                                       `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
	OwnerId          *string                                       `json:"OwnerId,omitempty" xml:"OwnerId,omitempty" require:"true"`
	TenantId         *int64                                        `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ProjectId        *int64                                        `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	CreateTime       *int64                                        `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	LastModifyTime   *int64                                        `json:"LastModifyTime,omitempty" xml:"LastModifyTime,omitempty" require:"true"`
	LifeCycle        *int                                          `json:"LifeCycle,omitempty" xml:"LifeCycle,omitempty" require:"true"`
	IsVisible        *int                                          `json:"IsVisible,omitempty" xml:"IsVisible,omitempty" require:"true"`
	ProjectName      *string                                       `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	DataSize         *int64                                        `json:"DataSize,omitempty" xml:"DataSize,omitempty" require:"true"`
	EnvType          *int                                          `json:"EnvType,omitempty" xml:"EnvType,omitempty" require:"true"`
	Comment          *string                                       `json:"Comment,omitempty" xml:"Comment,omitempty" require:"true"`
	TotalColumnCount *int64                                        `json:"TotalColumnCount,omitempty" xml:"TotalColumnCount,omitempty" require:"true"`
	LastDdlTime      *int64                                        `json:"LastDdlTime,omitempty" xml:"LastDdlTime,omitempty" require:"true"`
	LastAccessTime   *int64                                        `json:"LastAccessTime,omitempty" xml:"LastAccessTime,omitempty" require:"true"`
	ColumnList       []*GetMetaTableFullInfoResponseDataColumnList `json:"ColumnList,omitempty" xml:"ColumnList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMetaTableFullInfoResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableFullInfoResponseData) GoString() string {
	return s.String()
}

func (s *GetMetaTableFullInfoResponseData) SetTableName(v string) *GetMetaTableFullInfoResponseData {
	s.TableName = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetTableGuid(v string) *GetMetaTableFullInfoResponseData {
	s.TableGuid = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetOwnerId(v string) *GetMetaTableFullInfoResponseData {
	s.OwnerId = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetTenantId(v int64) *GetMetaTableFullInfoResponseData {
	s.TenantId = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetProjectId(v int64) *GetMetaTableFullInfoResponseData {
	s.ProjectId = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetCreateTime(v int64) *GetMetaTableFullInfoResponseData {
	s.CreateTime = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetLastModifyTime(v int64) *GetMetaTableFullInfoResponseData {
	s.LastModifyTime = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetLifeCycle(v int) *GetMetaTableFullInfoResponseData {
	s.LifeCycle = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetIsVisible(v int) *GetMetaTableFullInfoResponseData {
	s.IsVisible = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetProjectName(v string) *GetMetaTableFullInfoResponseData {
	s.ProjectName = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetDataSize(v int64) *GetMetaTableFullInfoResponseData {
	s.DataSize = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetEnvType(v int) *GetMetaTableFullInfoResponseData {
	s.EnvType = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetComment(v string) *GetMetaTableFullInfoResponseData {
	s.Comment = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetTotalColumnCount(v int64) *GetMetaTableFullInfoResponseData {
	s.TotalColumnCount = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetLastDdlTime(v int64) *GetMetaTableFullInfoResponseData {
	s.LastDdlTime = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetLastAccessTime(v int64) *GetMetaTableFullInfoResponseData {
	s.LastAccessTime = &v
	return s
}

func (s *GetMetaTableFullInfoResponseData) SetColumnList(v []*GetMetaTableFullInfoResponseDataColumnList) *GetMetaTableFullInfoResponseData {
	s.ColumnList = v
	return s
}

type GetMetaTableFullInfoResponseDataColumnList struct {
	ColumnGuid        *string `json:"ColumnGuid,omitempty" xml:"ColumnGuid,omitempty" require:"true"`
	ColumnName        *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	ColumnType        *string `json:"ColumnType,omitempty" xml:"ColumnType,omitempty" require:"true"`
	IsPrimaryKey      *bool   `json:"IsPrimaryKey,omitempty" xml:"IsPrimaryKey,omitempty" require:"true"`
	Comment           *string `json:"Comment,omitempty" xml:"Comment,omitempty" require:"true"`
	IsPartitionColumn *bool   `json:"IsPartitionColumn,omitempty" xml:"IsPartitionColumn,omitempty" require:"true"`
	IsForeignKey      *bool   `json:"IsForeignKey,omitempty" xml:"IsForeignKey,omitempty" require:"true"`
	Caption           *string `json:"Caption,omitempty" xml:"Caption,omitempty" require:"true"`
}

func (s GetMetaTableFullInfoResponseDataColumnList) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableFullInfoResponseDataColumnList) GoString() string {
	return s.String()
}

func (s *GetMetaTableFullInfoResponseDataColumnList) SetColumnGuid(v string) *GetMetaTableFullInfoResponseDataColumnList {
	s.ColumnGuid = &v
	return s
}

func (s *GetMetaTableFullInfoResponseDataColumnList) SetColumnName(v string) *GetMetaTableFullInfoResponseDataColumnList {
	s.ColumnName = &v
	return s
}

func (s *GetMetaTableFullInfoResponseDataColumnList) SetColumnType(v string) *GetMetaTableFullInfoResponseDataColumnList {
	s.ColumnType = &v
	return s
}

func (s *GetMetaTableFullInfoResponseDataColumnList) SetIsPrimaryKey(v bool) *GetMetaTableFullInfoResponseDataColumnList {
	s.IsPrimaryKey = &v
	return s
}

func (s *GetMetaTableFullInfoResponseDataColumnList) SetComment(v string) *GetMetaTableFullInfoResponseDataColumnList {
	s.Comment = &v
	return s
}

func (s *GetMetaTableFullInfoResponseDataColumnList) SetIsPartitionColumn(v bool) *GetMetaTableFullInfoResponseDataColumnList {
	s.IsPartitionColumn = &v
	return s
}

func (s *GetMetaTableFullInfoResponseDataColumnList) SetIsForeignKey(v bool) *GetMetaTableFullInfoResponseDataColumnList {
	s.IsForeignKey = &v
	return s
}

func (s *GetMetaTableFullInfoResponseDataColumnList) SetCaption(v string) *GetMetaTableFullInfoResponseDataColumnList {
	s.Caption = &v
	return s
}

type GetFileVersionRequest struct {
	FileId            *int64  `json:"FileId,omitempty" xml:"FileId,omitempty" require:"true"`
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	FileVersion       *int    `json:"FileVersion,omitempty" xml:"FileVersion,omitempty" require:"true"`
}

func (s GetFileVersionRequest) String() string {
	return tea.Prettify(s)
}

func (s GetFileVersionRequest) GoString() string {
	return s.String()
}

func (s *GetFileVersionRequest) SetFileId(v int64) *GetFileVersionRequest {
	s.FileId = &v
	return s
}

func (s *GetFileVersionRequest) SetProjectId(v int64) *GetFileVersionRequest {
	s.ProjectId = &v
	return s
}

func (s *GetFileVersionRequest) SetProjectIdentifier(v string) *GetFileVersionRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *GetFileVersionRequest) SetFileVersion(v int) *GetFileVersionRequest {
	s.FileVersion = &v
	return s
}

type GetFileVersionResponse struct {
	RequestId      *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                       `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                     `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                     `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                        `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *GetFileVersionResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetFileVersionResponse) String() string {
	return tea.Prettify(s)
}

func (s GetFileVersionResponse) GoString() string {
	return s.String()
}

func (s *GetFileVersionResponse) SetRequestId(v string) *GetFileVersionResponse {
	s.RequestId = &v
	return s
}

func (s *GetFileVersionResponse) SetSuccess(v bool) *GetFileVersionResponse {
	s.Success = &v
	return s
}

func (s *GetFileVersionResponse) SetErrorCode(v string) *GetFileVersionResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetFileVersionResponse) SetErrorMessage(v string) *GetFileVersionResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetFileVersionResponse) SetHttpStatusCode(v int) *GetFileVersionResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetFileVersionResponse) SetData(v *GetFileVersionResponseData) *GetFileVersionResponse {
	s.Data = v
	return s
}

type GetFileVersionResponseData struct {
	FileVersion         *int    `json:"FileVersion,omitempty" xml:"FileVersion,omitempty" require:"true"`
	FileContent         *string `json:"FileContent,omitempty" xml:"FileContent,omitempty" require:"true"`
	FilePropertyContent *string `json:"FilePropertyContent,omitempty" xml:"FilePropertyContent,omitempty" require:"true"`
	NodeContent         *string `json:"NodeContent,omitempty" xml:"NodeContent,omitempty" require:"true"`
	Comment             *string `json:"Comment,omitempty" xml:"Comment,omitempty" require:"true"`
	NodeId              *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	IsCurrentProd       *bool   `json:"IsCurrentProd,omitempty" xml:"IsCurrentProd,omitempty" require:"true"`
	ChangeType          *string `json:"ChangeType,omitempty" xml:"ChangeType,omitempty" require:"true"`
	Status              *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	FileName            *string `json:"FileName,omitempty" xml:"FileName,omitempty" require:"true"`
	CommitUser          *string `json:"CommitUser,omitempty" xml:"CommitUser,omitempty" require:"true"`
	CommitTime          *int64  `json:"CommitTime,omitempty" xml:"CommitTime,omitempty" require:"true"`
	UseType             *string `json:"UseType,omitempty" xml:"UseType,omitempty" require:"true"`
}

func (s GetFileVersionResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetFileVersionResponseData) GoString() string {
	return s.String()
}

func (s *GetFileVersionResponseData) SetFileVersion(v int) *GetFileVersionResponseData {
	s.FileVersion = &v
	return s
}

func (s *GetFileVersionResponseData) SetFileContent(v string) *GetFileVersionResponseData {
	s.FileContent = &v
	return s
}

func (s *GetFileVersionResponseData) SetFilePropertyContent(v string) *GetFileVersionResponseData {
	s.FilePropertyContent = &v
	return s
}

func (s *GetFileVersionResponseData) SetNodeContent(v string) *GetFileVersionResponseData {
	s.NodeContent = &v
	return s
}

func (s *GetFileVersionResponseData) SetComment(v string) *GetFileVersionResponseData {
	s.Comment = &v
	return s
}

func (s *GetFileVersionResponseData) SetNodeId(v int64) *GetFileVersionResponseData {
	s.NodeId = &v
	return s
}

func (s *GetFileVersionResponseData) SetIsCurrentProd(v bool) *GetFileVersionResponseData {
	s.IsCurrentProd = &v
	return s
}

func (s *GetFileVersionResponseData) SetChangeType(v string) *GetFileVersionResponseData {
	s.ChangeType = &v
	return s
}

func (s *GetFileVersionResponseData) SetStatus(v string) *GetFileVersionResponseData {
	s.Status = &v
	return s
}

func (s *GetFileVersionResponseData) SetFileName(v string) *GetFileVersionResponseData {
	s.FileName = &v
	return s
}

func (s *GetFileVersionResponseData) SetCommitUser(v string) *GetFileVersionResponseData {
	s.CommitUser = &v
	return s
}

func (s *GetFileVersionResponseData) SetCommitTime(v int64) *GetFileVersionResponseData {
	s.CommitTime = &v
	return s
}

func (s *GetFileVersionResponseData) SetUseType(v string) *GetFileVersionResponseData {
	s.UseType = &v
	return s
}

type GetMetaTableBasicInfoRequest struct {
	TableGuid *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
}

func (s GetMetaTableBasicInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableBasicInfoRequest) GoString() string {
	return s.String()
}

func (s *GetMetaTableBasicInfoRequest) SetTableGuid(v string) *GetMetaTableBasicInfoRequest {
	s.TableGuid = &v
	return s
}

type GetMetaTableBasicInfoResponse struct {
	RequestId      *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string                            `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                            `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                               `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                              `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetMetaTableBasicInfoResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaTableBasicInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableBasicInfoResponse) GoString() string {
	return s.String()
}

func (s *GetMetaTableBasicInfoResponse) SetRequestId(v string) *GetMetaTableBasicInfoResponse {
	s.RequestId = &v
	return s
}

func (s *GetMetaTableBasicInfoResponse) SetErrorCode(v string) *GetMetaTableBasicInfoResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetMetaTableBasicInfoResponse) SetErrorMessage(v string) *GetMetaTableBasicInfoResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetMetaTableBasicInfoResponse) SetHttpStatusCode(v int) *GetMetaTableBasicInfoResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetMetaTableBasicInfoResponse) SetSuccess(v bool) *GetMetaTableBasicInfoResponse {
	s.Success = &v
	return s
}

func (s *GetMetaTableBasicInfoResponse) SetData(v *GetMetaTableBasicInfoResponseData) *GetMetaTableBasicInfoResponse {
	s.Data = v
	return s
}

type GetMetaTableBasicInfoResponseData struct {
	TableName      *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	TableGuid      *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
	OwnerId        *string `json:"OwnerId,omitempty" xml:"OwnerId,omitempty" require:"true"`
	TenantId       *int64  `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ProjectId      *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	CreateTime     *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	LastModifyTime *int64  `json:"LastModifyTime,omitempty" xml:"LastModifyTime,omitempty" require:"true"`
	LifeCycle      *int    `json:"LifeCycle,omitempty" xml:"LifeCycle,omitempty" require:"true"`
	IsVisible      *int    `json:"IsVisible,omitempty" xml:"IsVisible,omitempty" require:"true"`
	LastDdlTime    *int64  `json:"LastDdlTime,omitempty" xml:"LastDdlTime,omitempty" require:"true"`
	LastAccessTime *int64  `json:"LastAccessTime,omitempty" xml:"LastAccessTime,omitempty" require:"true"`
	EnvType        *int    `json:"EnvType,omitempty" xml:"EnvType,omitempty" require:"true"`
	DataSize       *int64  `json:"DataSize,omitempty" xml:"DataSize,omitempty" require:"true"`
	Comment        *string `json:"Comment,omitempty" xml:"Comment,omitempty" require:"true"`
	ProjectName    *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
}

func (s GetMetaTableBasicInfoResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableBasicInfoResponseData) GoString() string {
	return s.String()
}

func (s *GetMetaTableBasicInfoResponseData) SetTableName(v string) *GetMetaTableBasicInfoResponseData {
	s.TableName = &v
	return s
}

func (s *GetMetaTableBasicInfoResponseData) SetTableGuid(v string) *GetMetaTableBasicInfoResponseData {
	s.TableGuid = &v
	return s
}

func (s *GetMetaTableBasicInfoResponseData) SetOwnerId(v string) *GetMetaTableBasicInfoResponseData {
	s.OwnerId = &v
	return s
}

func (s *GetMetaTableBasicInfoResponseData) SetTenantId(v int64) *GetMetaTableBasicInfoResponseData {
	s.TenantId = &v
	return s
}

func (s *GetMetaTableBasicInfoResponseData) SetProjectId(v int64) *GetMetaTableBasicInfoResponseData {
	s.ProjectId = &v
	return s
}

func (s *GetMetaTableBasicInfoResponseData) SetCreateTime(v int64) *GetMetaTableBasicInfoResponseData {
	s.CreateTime = &v
	return s
}

func (s *GetMetaTableBasicInfoResponseData) SetLastModifyTime(v int64) *GetMetaTableBasicInfoResponseData {
	s.LastModifyTime = &v
	return s
}

func (s *GetMetaTableBasicInfoResponseData) SetLifeCycle(v int) *GetMetaTableBasicInfoResponseData {
	s.LifeCycle = &v
	return s
}

func (s *GetMetaTableBasicInfoResponseData) SetIsVisible(v int) *GetMetaTableBasicInfoResponseData {
	s.IsVisible = &v
	return s
}

func (s *GetMetaTableBasicInfoResponseData) SetLastDdlTime(v int64) *GetMetaTableBasicInfoResponseData {
	s.LastDdlTime = &v
	return s
}

func (s *GetMetaTableBasicInfoResponseData) SetLastAccessTime(v int64) *GetMetaTableBasicInfoResponseData {
	s.LastAccessTime = &v
	return s
}

func (s *GetMetaTableBasicInfoResponseData) SetEnvType(v int) *GetMetaTableBasicInfoResponseData {
	s.EnvType = &v
	return s
}

func (s *GetMetaTableBasicInfoResponseData) SetDataSize(v int64) *GetMetaTableBasicInfoResponseData {
	s.DataSize = &v
	return s
}

func (s *GetMetaTableBasicInfoResponseData) SetComment(v string) *GetMetaTableBasicInfoResponseData {
	s.Comment = &v
	return s
}

func (s *GetMetaTableBasicInfoResponseData) SetProjectName(v string) *GetMetaTableBasicInfoResponseData {
	s.ProjectName = &v
	return s
}

type GetMetaTableColumnRequest struct {
	TableGuid *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
	PageNum   *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize  *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s GetMetaTableColumnRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableColumnRequest) GoString() string {
	return s.String()
}

func (s *GetMetaTableColumnRequest) SetTableGuid(v string) *GetMetaTableColumnRequest {
	s.TableGuid = &v
	return s
}

func (s *GetMetaTableColumnRequest) SetPageNum(v int) *GetMetaTableColumnRequest {
	s.PageNum = &v
	return s
}

func (s *GetMetaTableColumnRequest) SetPageSize(v int) *GetMetaTableColumnRequest {
	s.PageSize = &v
	return s
}

type GetMetaTableColumnResponse struct {
	RequestId      *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string                         `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                         `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                            `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                           `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetMetaTableColumnResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaTableColumnResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableColumnResponse) GoString() string {
	return s.String()
}

func (s *GetMetaTableColumnResponse) SetRequestId(v string) *GetMetaTableColumnResponse {
	s.RequestId = &v
	return s
}

func (s *GetMetaTableColumnResponse) SetErrorCode(v string) *GetMetaTableColumnResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetMetaTableColumnResponse) SetErrorMessage(v string) *GetMetaTableColumnResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetMetaTableColumnResponse) SetHttpStatusCode(v int) *GetMetaTableColumnResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetMetaTableColumnResponse) SetSuccess(v bool) *GetMetaTableColumnResponse {
	s.Success = &v
	return s
}

func (s *GetMetaTableColumnResponse) SetData(v *GetMetaTableColumnResponseData) *GetMetaTableColumnResponse {
	s.Data = v
	return s
}

type GetMetaTableColumnResponseData struct {
	TotalCount *int64                                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNum    *int                                        `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize   *int                                        `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	ColumnList []*GetMetaTableColumnResponseDataColumnList `json:"ColumnList,omitempty" xml:"ColumnList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMetaTableColumnResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableColumnResponseData) GoString() string {
	return s.String()
}

func (s *GetMetaTableColumnResponseData) SetTotalCount(v int64) *GetMetaTableColumnResponseData {
	s.TotalCount = &v
	return s
}

func (s *GetMetaTableColumnResponseData) SetPageNum(v int) *GetMetaTableColumnResponseData {
	s.PageNum = &v
	return s
}

func (s *GetMetaTableColumnResponseData) SetPageSize(v int) *GetMetaTableColumnResponseData {
	s.PageSize = &v
	return s
}

func (s *GetMetaTableColumnResponseData) SetColumnList(v []*GetMetaTableColumnResponseDataColumnList) *GetMetaTableColumnResponseData {
	s.ColumnList = v
	return s
}

type GetMetaTableColumnResponseDataColumnList struct {
	ColumnName        *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	ColumnGuid        *string `json:"ColumnGuid,omitempty" xml:"ColumnGuid,omitempty" require:"true"`
	Comment           *string `json:"Comment,omitempty" xml:"Comment,omitempty" require:"true"`
	IsPrimaryKey      *bool   `json:"IsPrimaryKey,omitempty" xml:"IsPrimaryKey,omitempty" require:"true"`
	ColumnType        *string `json:"ColumnType,omitempty" xml:"ColumnType,omitempty" require:"true"`
	IsPartitionColumn *bool   `json:"IsPartitionColumn,omitempty" xml:"IsPartitionColumn,omitempty" require:"true"`
	IsForeignKey      *bool   `json:"IsForeignKey,omitempty" xml:"IsForeignKey,omitempty" require:"true"`
	Caption           *string `json:"Caption,omitempty" xml:"Caption,omitempty" require:"true"`
}

func (s GetMetaTableColumnResponseDataColumnList) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableColumnResponseDataColumnList) GoString() string {
	return s.String()
}

func (s *GetMetaTableColumnResponseDataColumnList) SetColumnName(v string) *GetMetaTableColumnResponseDataColumnList {
	s.ColumnName = &v
	return s
}

func (s *GetMetaTableColumnResponseDataColumnList) SetColumnGuid(v string) *GetMetaTableColumnResponseDataColumnList {
	s.ColumnGuid = &v
	return s
}

func (s *GetMetaTableColumnResponseDataColumnList) SetComment(v string) *GetMetaTableColumnResponseDataColumnList {
	s.Comment = &v
	return s
}

func (s *GetMetaTableColumnResponseDataColumnList) SetIsPrimaryKey(v bool) *GetMetaTableColumnResponseDataColumnList {
	s.IsPrimaryKey = &v
	return s
}

func (s *GetMetaTableColumnResponseDataColumnList) SetColumnType(v string) *GetMetaTableColumnResponseDataColumnList {
	s.ColumnType = &v
	return s
}

func (s *GetMetaTableColumnResponseDataColumnList) SetIsPartitionColumn(v bool) *GetMetaTableColumnResponseDataColumnList {
	s.IsPartitionColumn = &v
	return s
}

func (s *GetMetaTableColumnResponseDataColumnList) SetIsForeignKey(v bool) *GetMetaTableColumnResponseDataColumnList {
	s.IsForeignKey = &v
	return s
}

func (s *GetMetaTableColumnResponseDataColumnList) SetCaption(v string) *GetMetaTableColumnResponseDataColumnList {
	s.Caption = &v
	return s
}

type GetMetaDBInfoRequest struct {
	AppGuid *string `json:"AppGuid,omitempty" xml:"AppGuid,omitempty" require:"true"`
}

func (s GetMetaDBInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMetaDBInfoRequest) GoString() string {
	return s.String()
}

func (s *GetMetaDBInfoRequest) SetAppGuid(v string) *GetMetaDBInfoRequest {
	s.AppGuid = &v
	return s
}

type GetMetaDBInfoResponse struct {
	ErrorCode      *string                    `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                    `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                       `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                      `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetMetaDBInfoResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaDBInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMetaDBInfoResponse) GoString() string {
	return s.String()
}

func (s *GetMetaDBInfoResponse) SetErrorCode(v string) *GetMetaDBInfoResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetMetaDBInfoResponse) SetErrorMessage(v string) *GetMetaDBInfoResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetMetaDBInfoResponse) SetHttpStatusCode(v int) *GetMetaDBInfoResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetMetaDBInfoResponse) SetRequestId(v string) *GetMetaDBInfoResponse {
	s.RequestId = &v
	return s
}

func (s *GetMetaDBInfoResponse) SetSuccess(v bool) *GetMetaDBInfoResponse {
	s.Success = &v
	return s
}

func (s *GetMetaDBInfoResponse) SetData(v *GetMetaDBInfoResponseData) *GetMetaDBInfoResponse {
	s.Data = v
	return s
}

type GetMetaDBInfoResponseData struct {
	AppGuid       *string `json:"AppGuid,omitempty" xml:"AppGuid,omitempty" require:"true"`
	TenantId      *int64  `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	Endpoint      *string `json:"Endpoint,omitempty" xml:"Endpoint,omitempty" require:"true"`
	ProjectId     *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	EnvType       *int    `json:"EnvType,omitempty" xml:"EnvType,omitempty" require:"true"`
	ProjectName   *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	ProjectNameCn *string `json:"ProjectNameCn,omitempty" xml:"ProjectNameCn,omitempty" require:"true"`
	CreateTime    *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	ModifyTime    *int64  `json:"ModifyTime,omitempty" xml:"ModifyTime,omitempty" require:"true"`
	OwnerId       *string `json:"OwnerId,omitempty" xml:"OwnerId,omitempty" require:"true"`
	OwnerName     *string `json:"OwnerName,omitempty" xml:"OwnerName,omitempty" require:"true"`
}

func (s GetMetaDBInfoResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetMetaDBInfoResponseData) GoString() string {
	return s.String()
}

func (s *GetMetaDBInfoResponseData) SetAppGuid(v string) *GetMetaDBInfoResponseData {
	s.AppGuid = &v
	return s
}

func (s *GetMetaDBInfoResponseData) SetTenantId(v int64) *GetMetaDBInfoResponseData {
	s.TenantId = &v
	return s
}

func (s *GetMetaDBInfoResponseData) SetEndpoint(v string) *GetMetaDBInfoResponseData {
	s.Endpoint = &v
	return s
}

func (s *GetMetaDBInfoResponseData) SetProjectId(v int64) *GetMetaDBInfoResponseData {
	s.ProjectId = &v
	return s
}

func (s *GetMetaDBInfoResponseData) SetEnvType(v int) *GetMetaDBInfoResponseData {
	s.EnvType = &v
	return s
}

func (s *GetMetaDBInfoResponseData) SetProjectName(v string) *GetMetaDBInfoResponseData {
	s.ProjectName = &v
	return s
}

func (s *GetMetaDBInfoResponseData) SetProjectNameCn(v string) *GetMetaDBInfoResponseData {
	s.ProjectNameCn = &v
	return s
}

func (s *GetMetaDBInfoResponseData) SetCreateTime(v int64) *GetMetaDBInfoResponseData {
	s.CreateTime = &v
	return s
}

func (s *GetMetaDBInfoResponseData) SetModifyTime(v int64) *GetMetaDBInfoResponseData {
	s.ModifyTime = &v
	return s
}

func (s *GetMetaDBInfoResponseData) SetOwnerId(v string) *GetMetaDBInfoResponseData {
	s.OwnerId = &v
	return s
}

func (s *GetMetaDBInfoResponseData) SetOwnerName(v string) *GetMetaDBInfoResponseData {
	s.OwnerName = &v
	return s
}

type GetMetaCategoryRequest struct {
	ParentCategoryId *int64 `json:"ParentCategoryId,omitempty" xml:"ParentCategoryId,omitempty"`
	PageNum          *int   `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize         *int   `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s GetMetaCategoryRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMetaCategoryRequest) GoString() string {
	return s.String()
}

func (s *GetMetaCategoryRequest) SetParentCategoryId(v int64) *GetMetaCategoryRequest {
	s.ParentCategoryId = &v
	return s
}

func (s *GetMetaCategoryRequest) SetPageNum(v int) *GetMetaCategoryRequest {
	s.PageNum = &v
	return s
}

func (s *GetMetaCategoryRequest) SetPageSize(v int) *GetMetaCategoryRequest {
	s.PageSize = &v
	return s
}

type GetMetaCategoryResponse struct {
	RequestId      *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string                      `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                      `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                         `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                        `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetMetaCategoryResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaCategoryResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMetaCategoryResponse) GoString() string {
	return s.String()
}

func (s *GetMetaCategoryResponse) SetRequestId(v string) *GetMetaCategoryResponse {
	s.RequestId = &v
	return s
}

func (s *GetMetaCategoryResponse) SetErrorCode(v string) *GetMetaCategoryResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetMetaCategoryResponse) SetErrorMessage(v string) *GetMetaCategoryResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetMetaCategoryResponse) SetHttpStatusCode(v int) *GetMetaCategoryResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetMetaCategoryResponse) SetSuccess(v bool) *GetMetaCategoryResponse {
	s.Success = &v
	return s
}

func (s *GetMetaCategoryResponse) SetData(v *GetMetaCategoryResponseData) *GetMetaCategoryResponse {
	s.Data = v
	return s
}

type GetMetaCategoryResponseData struct {
	PageNum        *int                                         `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize       *int                                         `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount     *int64                                       `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	DataEntityList []*GetMetaCategoryResponseDataDataEntityList `json:"DataEntityList,omitempty" xml:"DataEntityList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMetaCategoryResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetMetaCategoryResponseData) GoString() string {
	return s.String()
}

func (s *GetMetaCategoryResponseData) SetPageNum(v int) *GetMetaCategoryResponseData {
	s.PageNum = &v
	return s
}

func (s *GetMetaCategoryResponseData) SetPageSize(v int) *GetMetaCategoryResponseData {
	s.PageSize = &v
	return s
}

func (s *GetMetaCategoryResponseData) SetTotalCount(v int64) *GetMetaCategoryResponseData {
	s.TotalCount = &v
	return s
}

func (s *GetMetaCategoryResponseData) SetDataEntityList(v []*GetMetaCategoryResponseDataDataEntityList) *GetMetaCategoryResponseData {
	s.DataEntityList = v
	return s
}

type GetMetaCategoryResponseDataDataEntityList struct {
	CategoryId       *int64  `json:"CategoryId,omitempty" xml:"CategoryId,omitempty" require:"true"`
	Name             *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	CreateTime       *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	ModifiedTime     *int64  `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	Comment          *string `json:"Comment,omitempty" xml:"Comment,omitempty" require:"true"`
	OwnerId          *string `json:"OwnerId,omitempty" xml:"OwnerId,omitempty" require:"true"`
	LastOperatorId   *string `json:"LastOperatorId,omitempty" xml:"LastOperatorId,omitempty" require:"true"`
	ParentCategoryId *int64  `json:"ParentCategoryId,omitempty" xml:"ParentCategoryId,omitempty" require:"true"`
	Depth            *int    `json:"Depth,omitempty" xml:"Depth,omitempty" require:"true"`
}

func (s GetMetaCategoryResponseDataDataEntityList) String() string {
	return tea.Prettify(s)
}

func (s GetMetaCategoryResponseDataDataEntityList) GoString() string {
	return s.String()
}

func (s *GetMetaCategoryResponseDataDataEntityList) SetCategoryId(v int64) *GetMetaCategoryResponseDataDataEntityList {
	s.CategoryId = &v
	return s
}

func (s *GetMetaCategoryResponseDataDataEntityList) SetName(v string) *GetMetaCategoryResponseDataDataEntityList {
	s.Name = &v
	return s
}

func (s *GetMetaCategoryResponseDataDataEntityList) SetCreateTime(v int64) *GetMetaCategoryResponseDataDataEntityList {
	s.CreateTime = &v
	return s
}

func (s *GetMetaCategoryResponseDataDataEntityList) SetModifiedTime(v int64) *GetMetaCategoryResponseDataDataEntityList {
	s.ModifiedTime = &v
	return s
}

func (s *GetMetaCategoryResponseDataDataEntityList) SetComment(v string) *GetMetaCategoryResponseDataDataEntityList {
	s.Comment = &v
	return s
}

func (s *GetMetaCategoryResponseDataDataEntityList) SetOwnerId(v string) *GetMetaCategoryResponseDataDataEntityList {
	s.OwnerId = &v
	return s
}

func (s *GetMetaCategoryResponseDataDataEntityList) SetLastOperatorId(v string) *GetMetaCategoryResponseDataDataEntityList {
	s.LastOperatorId = &v
	return s
}

func (s *GetMetaCategoryResponseDataDataEntityList) SetParentCategoryId(v int64) *GetMetaCategoryResponseDataDataEntityList {
	s.ParentCategoryId = &v
	return s
}

func (s *GetMetaCategoryResponseDataDataEntityList) SetDepth(v int) *GetMetaCategoryResponseDataDataEntityList {
	s.Depth = &v
	return s
}

type ListAlertMessagesRequest struct {
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	BeginTime      *string `json:"BeginTime,omitempty" xml:"BeginTime,omitempty" require:"true"`
	EndTime        *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	RemindId       *int64  `json:"RemindId,omitempty" xml:"RemindId,omitempty"`
	AlertMethods   *string `json:"AlertMethods,omitempty" xml:"AlertMethods,omitempty"`
	AlertUser      *string `json:"AlertUser,omitempty" xml:"AlertUser,omitempty"`
	AlertRuleTypes *string `json:"AlertRuleTypes,omitempty" xml:"AlertRuleTypes,omitempty"`
}

func (s ListAlertMessagesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListAlertMessagesRequest) GoString() string {
	return s.String()
}

func (s *ListAlertMessagesRequest) SetPageNumber(v int) *ListAlertMessagesRequest {
	s.PageNumber = &v
	return s
}

func (s *ListAlertMessagesRequest) SetPageSize(v int) *ListAlertMessagesRequest {
	s.PageSize = &v
	return s
}

func (s *ListAlertMessagesRequest) SetBeginTime(v string) *ListAlertMessagesRequest {
	s.BeginTime = &v
	return s
}

func (s *ListAlertMessagesRequest) SetEndTime(v string) *ListAlertMessagesRequest {
	s.EndTime = &v
	return s
}

func (s *ListAlertMessagesRequest) SetRemindId(v int64) *ListAlertMessagesRequest {
	s.RemindId = &v
	return s
}

func (s *ListAlertMessagesRequest) SetAlertMethods(v string) *ListAlertMessagesRequest {
	s.AlertMethods = &v
	return s
}

func (s *ListAlertMessagesRequest) SetAlertUser(v string) *ListAlertMessagesRequest {
	s.AlertUser = &v
	return s
}

func (s *ListAlertMessagesRequest) SetAlertRuleTypes(v string) *ListAlertMessagesRequest {
	s.AlertRuleTypes = &v
	return s
}

type ListAlertMessagesResponse struct {
	Success        *bool                          `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                        `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                        `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                           `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *ListAlertMessagesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListAlertMessagesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListAlertMessagesResponse) GoString() string {
	return s.String()
}

func (s *ListAlertMessagesResponse) SetSuccess(v bool) *ListAlertMessagesResponse {
	s.Success = &v
	return s
}

func (s *ListAlertMessagesResponse) SetErrorCode(v string) *ListAlertMessagesResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListAlertMessagesResponse) SetErrorMessage(v string) *ListAlertMessagesResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListAlertMessagesResponse) SetHttpStatusCode(v int) *ListAlertMessagesResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListAlertMessagesResponse) SetRequestId(v string) *ListAlertMessagesResponse {
	s.RequestId = &v
	return s
}

func (s *ListAlertMessagesResponse) SetData(v *ListAlertMessagesResponseData) *ListAlertMessagesResponse {
	s.Data = v
	return s
}

type ListAlertMessagesResponseData struct {
	PageNumber    *string                                       `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize      *string                                       `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount    *string                                       `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	AlertMessages []*ListAlertMessagesResponseDataAlertMessages `json:"AlertMessages,omitempty" xml:"AlertMessages,omitempty" require:"true" type:"Repeated"`
}

func (s ListAlertMessagesResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListAlertMessagesResponseData) GoString() string {
	return s.String()
}

func (s *ListAlertMessagesResponseData) SetPageNumber(v string) *ListAlertMessagesResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListAlertMessagesResponseData) SetPageSize(v string) *ListAlertMessagesResponseData {
	s.PageSize = &v
	return s
}

func (s *ListAlertMessagesResponseData) SetTotalCount(v string) *ListAlertMessagesResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListAlertMessagesResponseData) SetAlertMessages(v []*ListAlertMessagesResponseDataAlertMessages) *ListAlertMessagesResponseData {
	s.AlertMessages = v
	return s
}

type ListAlertMessagesResponseDataAlertMessages struct {
	AlertId            *int64                                                 `json:"AlertId,omitempty" xml:"AlertId,omitempty" require:"true"`
	AlertTime          *int64                                                 `json:"AlertTime,omitempty" xml:"AlertTime,omitempty" require:"true"`
	Source             *string                                                `json:"Source,omitempty" xml:"Source,omitempty" require:"true"`
	RemindId           *int64                                                 `json:"RemindId,omitempty" xml:"RemindId,omitempty" require:"true"`
	RemindName         *string                                                `json:"RemindName,omitempty" xml:"RemindName,omitempty" require:"true"`
	AlertUser          *string                                                `json:"AlertUser,omitempty" xml:"AlertUser,omitempty" require:"true"`
	AlertMethod        *string                                                `json:"AlertMethod,omitempty" xml:"AlertMethod,omitempty" require:"true"`
	AlertMessageStatus *string                                                `json:"AlertMessageStatus,omitempty" xml:"AlertMessageStatus,omitempty" require:"true"`
	Content            *string                                                `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
	Instances          []*ListAlertMessagesResponseDataAlertMessagesInstances `json:"Instances,omitempty" xml:"Instances,omitempty" require:"true" type:"Repeated"`
	Topics             []*ListAlertMessagesResponseDataAlertMessagesTopics    `json:"Topics,omitempty" xml:"Topics,omitempty" require:"true" type:"Repeated"`
	Nodes              []*ListAlertMessagesResponseDataAlertMessagesNodes     `json:"Nodes,omitempty" xml:"Nodes,omitempty" require:"true" type:"Repeated"`
	SlaAlert           *ListAlertMessagesResponseDataAlertMessagesSlaAlert    `json:"SlaAlert,omitempty" xml:"SlaAlert,omitempty" require:"true" type:"Struct"`
}

func (s ListAlertMessagesResponseDataAlertMessages) String() string {
	return tea.Prettify(s)
}

func (s ListAlertMessagesResponseDataAlertMessages) GoString() string {
	return s.String()
}

func (s *ListAlertMessagesResponseDataAlertMessages) SetAlertId(v int64) *ListAlertMessagesResponseDataAlertMessages {
	s.AlertId = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessages) SetAlertTime(v int64) *ListAlertMessagesResponseDataAlertMessages {
	s.AlertTime = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessages) SetSource(v string) *ListAlertMessagesResponseDataAlertMessages {
	s.Source = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessages) SetRemindId(v int64) *ListAlertMessagesResponseDataAlertMessages {
	s.RemindId = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessages) SetRemindName(v string) *ListAlertMessagesResponseDataAlertMessages {
	s.RemindName = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessages) SetAlertUser(v string) *ListAlertMessagesResponseDataAlertMessages {
	s.AlertUser = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessages) SetAlertMethod(v string) *ListAlertMessagesResponseDataAlertMessages {
	s.AlertMethod = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessages) SetAlertMessageStatus(v string) *ListAlertMessagesResponseDataAlertMessages {
	s.AlertMessageStatus = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessages) SetContent(v string) *ListAlertMessagesResponseDataAlertMessages {
	s.Content = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessages) SetInstances(v []*ListAlertMessagesResponseDataAlertMessagesInstances) *ListAlertMessagesResponseDataAlertMessages {
	s.Instances = v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessages) SetTopics(v []*ListAlertMessagesResponseDataAlertMessagesTopics) *ListAlertMessagesResponseDataAlertMessages {
	s.Topics = v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessages) SetNodes(v []*ListAlertMessagesResponseDataAlertMessagesNodes) *ListAlertMessagesResponseDataAlertMessages {
	s.Nodes = v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessages) SetSlaAlert(v *ListAlertMessagesResponseDataAlertMessagesSlaAlert) *ListAlertMessagesResponseDataAlertMessages {
	s.SlaAlert = v
	return s
}

type ListAlertMessagesResponseDataAlertMessagesInstances struct {
	NodeId     *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	NodeName   *string `json:"NodeName,omitempty" xml:"NodeName,omitempty" require:"true"`
	ProjectId  *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Status     *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	InstanceId *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s ListAlertMessagesResponseDataAlertMessagesInstances) String() string {
	return tea.Prettify(s)
}

func (s ListAlertMessagesResponseDataAlertMessagesInstances) GoString() string {
	return s.String()
}

func (s *ListAlertMessagesResponseDataAlertMessagesInstances) SetNodeId(v int64) *ListAlertMessagesResponseDataAlertMessagesInstances {
	s.NodeId = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesInstances) SetNodeName(v string) *ListAlertMessagesResponseDataAlertMessagesInstances {
	s.NodeName = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesInstances) SetProjectId(v int64) *ListAlertMessagesResponseDataAlertMessagesInstances {
	s.ProjectId = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesInstances) SetStatus(v string) *ListAlertMessagesResponseDataAlertMessagesInstances {
	s.Status = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesInstances) SetInstanceId(v int64) *ListAlertMessagesResponseDataAlertMessagesInstances {
	s.InstanceId = &v
	return s
}

type ListAlertMessagesResponseDataAlertMessagesTopics struct {
	NodeId      *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	InstanceId  *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	TopicId     *int64  `json:"TopicId,omitempty" xml:"TopicId,omitempty" require:"true"`
	TopicName   *string `json:"TopicName,omitempty" xml:"TopicName,omitempty" require:"true"`
	TopicOwner  *string `json:"TopicOwner,omitempty" xml:"TopicOwner,omitempty" require:"true"`
	TopicStatus *string `json:"TopicStatus,omitempty" xml:"TopicStatus,omitempty" require:"true"`
}

func (s ListAlertMessagesResponseDataAlertMessagesTopics) String() string {
	return tea.Prettify(s)
}

func (s ListAlertMessagesResponseDataAlertMessagesTopics) GoString() string {
	return s.String()
}

func (s *ListAlertMessagesResponseDataAlertMessagesTopics) SetNodeId(v int64) *ListAlertMessagesResponseDataAlertMessagesTopics {
	s.NodeId = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesTopics) SetInstanceId(v int64) *ListAlertMessagesResponseDataAlertMessagesTopics {
	s.InstanceId = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesTopics) SetTopicId(v int64) *ListAlertMessagesResponseDataAlertMessagesTopics {
	s.TopicId = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesTopics) SetTopicName(v string) *ListAlertMessagesResponseDataAlertMessagesTopics {
	s.TopicName = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesTopics) SetTopicOwner(v string) *ListAlertMessagesResponseDataAlertMessagesTopics {
	s.TopicOwner = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesTopics) SetTopicStatus(v string) *ListAlertMessagesResponseDataAlertMessagesTopics {
	s.TopicStatus = &v
	return s
}

type ListAlertMessagesResponseDataAlertMessagesNodes struct {
	NodeId    *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	NodeName  *string `json:"NodeName,omitempty" xml:"NodeName,omitempty" require:"true"`
	Owner     *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	ProjectId *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
}

func (s ListAlertMessagesResponseDataAlertMessagesNodes) String() string {
	return tea.Prettify(s)
}

func (s ListAlertMessagesResponseDataAlertMessagesNodes) GoString() string {
	return s.String()
}

func (s *ListAlertMessagesResponseDataAlertMessagesNodes) SetNodeId(v int64) *ListAlertMessagesResponseDataAlertMessagesNodes {
	s.NodeId = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesNodes) SetNodeName(v string) *ListAlertMessagesResponseDataAlertMessagesNodes {
	s.NodeName = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesNodes) SetOwner(v string) *ListAlertMessagesResponseDataAlertMessagesNodes {
	s.Owner = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesNodes) SetProjectId(v int64) *ListAlertMessagesResponseDataAlertMessagesNodes {
	s.ProjectId = &v
	return s
}

type ListAlertMessagesResponseDataAlertMessagesSlaAlert struct {
	BaselineId    *int64  `json:"BaselineId,omitempty" xml:"BaselineId,omitempty" require:"true"`
	BaselineName  *string `json:"BaselineName,omitempty" xml:"BaselineName,omitempty" require:"true"`
	BaselineOwner *string `json:"BaselineOwner,omitempty" xml:"BaselineOwner,omitempty" require:"true"`
	Bizdate       *int64  `json:"Bizdate,omitempty" xml:"Bizdate,omitempty" require:"true"`
	InGroupId     *int    `json:"InGroupId,omitempty" xml:"InGroupId,omitempty" require:"true"`
	ProjectId     *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Status        *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s ListAlertMessagesResponseDataAlertMessagesSlaAlert) String() string {
	return tea.Prettify(s)
}

func (s ListAlertMessagesResponseDataAlertMessagesSlaAlert) GoString() string {
	return s.String()
}

func (s *ListAlertMessagesResponseDataAlertMessagesSlaAlert) SetBaselineId(v int64) *ListAlertMessagesResponseDataAlertMessagesSlaAlert {
	s.BaselineId = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesSlaAlert) SetBaselineName(v string) *ListAlertMessagesResponseDataAlertMessagesSlaAlert {
	s.BaselineName = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesSlaAlert) SetBaselineOwner(v string) *ListAlertMessagesResponseDataAlertMessagesSlaAlert {
	s.BaselineOwner = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesSlaAlert) SetBizdate(v int64) *ListAlertMessagesResponseDataAlertMessagesSlaAlert {
	s.Bizdate = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesSlaAlert) SetInGroupId(v int) *ListAlertMessagesResponseDataAlertMessagesSlaAlert {
	s.InGroupId = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesSlaAlert) SetProjectId(v int64) *ListAlertMessagesResponseDataAlertMessagesSlaAlert {
	s.ProjectId = &v
	return s
}

func (s *ListAlertMessagesResponseDataAlertMessagesSlaAlert) SetStatus(v string) *ListAlertMessagesResponseDataAlertMessagesSlaAlert {
	s.Status = &v
	return s
}

type GetBaselineConfigRequest struct {
	BaselineId *int64 `json:"BaselineId,omitempty" xml:"BaselineId,omitempty" require:"true"`
}

func (s GetBaselineConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s GetBaselineConfigRequest) GoString() string {
	return s.String()
}

func (s *GetBaselineConfigRequest) SetBaselineId(v int64) *GetBaselineConfigRequest {
	s.BaselineId = &v
	return s
}

type GetBaselineConfigResponse struct {
	Success        *bool                          `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                        `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                        `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                           `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *GetBaselineConfigResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetBaselineConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s GetBaselineConfigResponse) GoString() string {
	return s.String()
}

func (s *GetBaselineConfigResponse) SetSuccess(v bool) *GetBaselineConfigResponse {
	s.Success = &v
	return s
}

func (s *GetBaselineConfigResponse) SetErrorCode(v string) *GetBaselineConfigResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetBaselineConfigResponse) SetErrorMessage(v string) *GetBaselineConfigResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetBaselineConfigResponse) SetHttpStatusCode(v int) *GetBaselineConfigResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetBaselineConfigResponse) SetRequestId(v string) *GetBaselineConfigResponse {
	s.RequestId = &v
	return s
}

func (s *GetBaselineConfigResponse) SetData(v *GetBaselineConfigResponseData) *GetBaselineConfigResponse {
	s.Data = v
	return s
}

type GetBaselineConfigResponseData struct {
	BaselineId    *int64  `json:"BaselineId,omitempty" xml:"BaselineId,omitempty" require:"true"`
	Priority      *int    `json:"Priority,omitempty" xml:"Priority,omitempty" require:"true"`
	BaselineName  *string `json:"BaselineName,omitempty" xml:"BaselineName,omitempty" require:"true"`
	Owner         *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	ProjectId     *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	UseFlag       *bool   `json:"UseFlag,omitempty" xml:"UseFlag,omitempty" require:"true"`
	BaselineType  *string `json:"BaselineType,omitempty" xml:"BaselineType,omitempty" require:"true"`
	ExpHour       *int    `json:"ExpHour,omitempty" xml:"ExpHour,omitempty" require:"true"`
	ExpMinu       *int    `json:"ExpMinu,omitempty" xml:"ExpMinu,omitempty" require:"true"`
	SlaHour       *int    `json:"SlaHour,omitempty" xml:"SlaHour,omitempty" require:"true"`
	SlaMinu       *int    `json:"SlaMinu,omitempty" xml:"SlaMinu,omitempty" require:"true"`
	HourExpDetail *string `json:"HourExpDetail,omitempty" xml:"HourExpDetail,omitempty" require:"true"`
	HourSlaDetail *string `json:"HourSlaDetail,omitempty" xml:"HourSlaDetail,omitempty" require:"true"`
	IsDefault     *bool   `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
}

func (s GetBaselineConfigResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetBaselineConfigResponseData) GoString() string {
	return s.String()
}

func (s *GetBaselineConfigResponseData) SetBaselineId(v int64) *GetBaselineConfigResponseData {
	s.BaselineId = &v
	return s
}

func (s *GetBaselineConfigResponseData) SetPriority(v int) *GetBaselineConfigResponseData {
	s.Priority = &v
	return s
}

func (s *GetBaselineConfigResponseData) SetBaselineName(v string) *GetBaselineConfigResponseData {
	s.BaselineName = &v
	return s
}

func (s *GetBaselineConfigResponseData) SetOwner(v string) *GetBaselineConfigResponseData {
	s.Owner = &v
	return s
}

func (s *GetBaselineConfigResponseData) SetProjectId(v int64) *GetBaselineConfigResponseData {
	s.ProjectId = &v
	return s
}

func (s *GetBaselineConfigResponseData) SetUseFlag(v bool) *GetBaselineConfigResponseData {
	s.UseFlag = &v
	return s
}

func (s *GetBaselineConfigResponseData) SetBaselineType(v string) *GetBaselineConfigResponseData {
	s.BaselineType = &v
	return s
}

func (s *GetBaselineConfigResponseData) SetExpHour(v int) *GetBaselineConfigResponseData {
	s.ExpHour = &v
	return s
}

func (s *GetBaselineConfigResponseData) SetExpMinu(v int) *GetBaselineConfigResponseData {
	s.ExpMinu = &v
	return s
}

func (s *GetBaselineConfigResponseData) SetSlaHour(v int) *GetBaselineConfigResponseData {
	s.SlaHour = &v
	return s
}

func (s *GetBaselineConfigResponseData) SetSlaMinu(v int) *GetBaselineConfigResponseData {
	s.SlaMinu = &v
	return s
}

func (s *GetBaselineConfigResponseData) SetHourExpDetail(v string) *GetBaselineConfigResponseData {
	s.HourExpDetail = &v
	return s
}

func (s *GetBaselineConfigResponseData) SetHourSlaDetail(v string) *GetBaselineConfigResponseData {
	s.HourSlaDetail = &v
	return s
}

func (s *GetBaselineConfigResponseData) SetIsDefault(v bool) *GetBaselineConfigResponseData {
	s.IsDefault = &v
	return s
}

type SearchMetaTablesRequest struct {
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	AppGuid    *string `json:"AppGuid,omitempty" xml:"AppGuid,omitempty"`
	Keyword    *string `json:"Keyword,omitempty" xml:"Keyword,omitempty" require:"true"`
	EntityType *int    `json:"EntityType,omitempty" xml:"EntityType,omitempty"`
}

func (s SearchMetaTablesRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchMetaTablesRequest) GoString() string {
	return s.String()
}

func (s *SearchMetaTablesRequest) SetPageNumber(v int) *SearchMetaTablesRequest {
	s.PageNumber = &v
	return s
}

func (s *SearchMetaTablesRequest) SetPageSize(v int) *SearchMetaTablesRequest {
	s.PageSize = &v
	return s
}

func (s *SearchMetaTablesRequest) SetAppGuid(v string) *SearchMetaTablesRequest {
	s.AppGuid = &v
	return s
}

func (s *SearchMetaTablesRequest) SetKeyword(v string) *SearchMetaTablesRequest {
	s.Keyword = &v
	return s
}

func (s *SearchMetaTablesRequest) SetEntityType(v int) *SearchMetaTablesRequest {
	s.EntityType = &v
	return s
}

type SearchMetaTablesResponse struct {
	RequestId      *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string                       `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                       `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                          `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                         `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *SearchMetaTablesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s SearchMetaTablesResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchMetaTablesResponse) GoString() string {
	return s.String()
}

func (s *SearchMetaTablesResponse) SetRequestId(v string) *SearchMetaTablesResponse {
	s.RequestId = &v
	return s
}

func (s *SearchMetaTablesResponse) SetErrorCode(v string) *SearchMetaTablesResponse {
	s.ErrorCode = &v
	return s
}

func (s *SearchMetaTablesResponse) SetErrorMessage(v string) *SearchMetaTablesResponse {
	s.ErrorMessage = &v
	return s
}

func (s *SearchMetaTablesResponse) SetHttpStatusCode(v int) *SearchMetaTablesResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *SearchMetaTablesResponse) SetSuccess(v bool) *SearchMetaTablesResponse {
	s.Success = &v
	return s
}

func (s *SearchMetaTablesResponse) SetData(v *SearchMetaTablesResponseData) *SearchMetaTablesResponse {
	s.Data = v
	return s
}

type SearchMetaTablesResponseData struct {
	PageNumber     *int                                          `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize       *int                                          `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount     *int64                                        `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	DataEntityList []*SearchMetaTablesResponseDataDataEntityList `json:"DataEntityList,omitempty" xml:"DataEntityList,omitempty" require:"true" type:"Repeated"`
}

func (s SearchMetaTablesResponseData) String() string {
	return tea.Prettify(s)
}

func (s SearchMetaTablesResponseData) GoString() string {
	return s.String()
}

func (s *SearchMetaTablesResponseData) SetPageNumber(v int) *SearchMetaTablesResponseData {
	s.PageNumber = &v
	return s
}

func (s *SearchMetaTablesResponseData) SetPageSize(v int) *SearchMetaTablesResponseData {
	s.PageSize = &v
	return s
}

func (s *SearchMetaTablesResponseData) SetTotalCount(v int64) *SearchMetaTablesResponseData {
	s.TotalCount = &v
	return s
}

func (s *SearchMetaTablesResponseData) SetDataEntityList(v []*SearchMetaTablesResponseDataDataEntityList) *SearchMetaTablesResponseData {
	s.DataEntityList = v
	return s
}

type SearchMetaTablesResponseDataDataEntityList struct {
	TableName   *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	TableGuid   *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
	OwnerId     *string `json:"OwnerId,omitempty" xml:"OwnerId,omitempty" require:"true"`
	TenantId    *int64  `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	EnvType     *int    `json:"EnvType,omitempty" xml:"EnvType,omitempty" require:"true"`
	EntityType  *int    `json:"EntityType,omitempty" xml:"EntityType,omitempty" require:"true"`
	ProjectId   *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	ProjectName *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
}

func (s SearchMetaTablesResponseDataDataEntityList) String() string {
	return tea.Prettify(s)
}

func (s SearchMetaTablesResponseDataDataEntityList) GoString() string {
	return s.String()
}

func (s *SearchMetaTablesResponseDataDataEntityList) SetTableName(v string) *SearchMetaTablesResponseDataDataEntityList {
	s.TableName = &v
	return s
}

func (s *SearchMetaTablesResponseDataDataEntityList) SetTableGuid(v string) *SearchMetaTablesResponseDataDataEntityList {
	s.TableGuid = &v
	return s
}

func (s *SearchMetaTablesResponseDataDataEntityList) SetOwnerId(v string) *SearchMetaTablesResponseDataDataEntityList {
	s.OwnerId = &v
	return s
}

func (s *SearchMetaTablesResponseDataDataEntityList) SetTenantId(v int64) *SearchMetaTablesResponseDataDataEntityList {
	s.TenantId = &v
	return s
}

func (s *SearchMetaTablesResponseDataDataEntityList) SetEnvType(v int) *SearchMetaTablesResponseDataDataEntityList {
	s.EnvType = &v
	return s
}

func (s *SearchMetaTablesResponseDataDataEntityList) SetEntityType(v int) *SearchMetaTablesResponseDataDataEntityList {
	s.EntityType = &v
	return s
}

func (s *SearchMetaTablesResponseDataDataEntityList) SetProjectId(v int64) *SearchMetaTablesResponseDataDataEntityList {
	s.ProjectId = &v
	return s
}

func (s *SearchMetaTablesResponseDataDataEntityList) SetProjectName(v string) *SearchMetaTablesResponseDataDataEntityList {
	s.ProjectName = &v
	return s
}

type GetMetaTableListByCategoryRequest struct {
	PageNumber *int   `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int   `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	CategoryId *int64 `json:"CategoryId,omitempty" xml:"CategoryId,omitempty" require:"true"`
}

func (s GetMetaTableListByCategoryRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableListByCategoryRequest) GoString() string {
	return s.String()
}

func (s *GetMetaTableListByCategoryRequest) SetPageNumber(v int) *GetMetaTableListByCategoryRequest {
	s.PageNumber = &v
	return s
}

func (s *GetMetaTableListByCategoryRequest) SetPageSize(v int) *GetMetaTableListByCategoryRequest {
	s.PageSize = &v
	return s
}

func (s *GetMetaTableListByCategoryRequest) SetCategoryId(v int64) *GetMetaTableListByCategoryRequest {
	s.CategoryId = &v
	return s
}

type GetMetaTableListByCategoryResponse struct {
	RequestId      *string                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string                                 `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                                 `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                                    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                                   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetMetaTableListByCategoryResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaTableListByCategoryResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableListByCategoryResponse) GoString() string {
	return s.String()
}

func (s *GetMetaTableListByCategoryResponse) SetRequestId(v string) *GetMetaTableListByCategoryResponse {
	s.RequestId = &v
	return s
}

func (s *GetMetaTableListByCategoryResponse) SetErrorCode(v string) *GetMetaTableListByCategoryResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetMetaTableListByCategoryResponse) SetErrorMessage(v string) *GetMetaTableListByCategoryResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetMetaTableListByCategoryResponse) SetHttpStatusCode(v int) *GetMetaTableListByCategoryResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetMetaTableListByCategoryResponse) SetSuccess(v bool) *GetMetaTableListByCategoryResponse {
	s.Success = &v
	return s
}

func (s *GetMetaTableListByCategoryResponse) SetData(v *GetMetaTableListByCategoryResponseData) *GetMetaTableListByCategoryResponse {
	s.Data = v
	return s
}

type GetMetaTableListByCategoryResponseData struct {
	PageNumber    *int      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize      *int      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount    *int64    `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	TableGuidList []*string `json:"TableGuidList,omitempty" xml:"TableGuidList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMetaTableListByCategoryResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableListByCategoryResponseData) GoString() string {
	return s.String()
}

func (s *GetMetaTableListByCategoryResponseData) SetPageNumber(v int) *GetMetaTableListByCategoryResponseData {
	s.PageNumber = &v
	return s
}

func (s *GetMetaTableListByCategoryResponseData) SetPageSize(v int) *GetMetaTableListByCategoryResponseData {
	s.PageSize = &v
	return s
}

func (s *GetMetaTableListByCategoryResponseData) SetTotalCount(v int64) *GetMetaTableListByCategoryResponseData {
	s.TotalCount = &v
	return s
}

func (s *GetMetaTableListByCategoryResponseData) SetTableGuidList(v []*string) *GetMetaTableListByCategoryResponseData {
	s.TableGuidList = v
	return s
}

type DeleteMetaCategoryRequest struct {
	CategoryId *int64 `json:"CategoryId,omitempty" xml:"CategoryId,omitempty" require:"true"`
}

func (s DeleteMetaCategoryRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteMetaCategoryRequest) GoString() string {
	return s.String()
}

func (s *DeleteMetaCategoryRequest) SetCategoryId(v int64) *DeleteMetaCategoryRequest {
	s.CategoryId = &v
	return s
}

type DeleteMetaCategoryResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s DeleteMetaCategoryResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteMetaCategoryResponse) GoString() string {
	return s.String()
}

func (s *DeleteMetaCategoryResponse) SetRequestId(v string) *DeleteMetaCategoryResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteMetaCategoryResponse) SetErrorCode(v string) *DeleteMetaCategoryResponse {
	s.ErrorCode = &v
	return s
}

func (s *DeleteMetaCategoryResponse) SetErrorMessage(v string) *DeleteMetaCategoryResponse {
	s.ErrorMessage = &v
	return s
}

func (s *DeleteMetaCategoryResponse) SetHttpStatusCode(v int) *DeleteMetaCategoryResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *DeleteMetaCategoryResponse) SetSuccess(v bool) *DeleteMetaCategoryResponse {
	s.Success = &v
	return s
}

func (s *DeleteMetaCategoryResponse) SetData(v bool) *DeleteMetaCategoryResponse {
	s.Data = &v
	return s
}

type UpdateMetaCategoryRequest struct {
	Name       *string `json:"Name,omitempty" xml:"Name,omitempty"`
	Comment    *string `json:"Comment,omitempty" xml:"Comment,omitempty"`
	CategoryId *int64  `json:"CategoryId,omitempty" xml:"CategoryId,omitempty" require:"true"`
}

func (s UpdateMetaCategoryRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateMetaCategoryRequest) GoString() string {
	return s.String()
}

func (s *UpdateMetaCategoryRequest) SetName(v string) *UpdateMetaCategoryRequest {
	s.Name = &v
	return s
}

func (s *UpdateMetaCategoryRequest) SetComment(v string) *UpdateMetaCategoryRequest {
	s.Comment = &v
	return s
}

func (s *UpdateMetaCategoryRequest) SetCategoryId(v int64) *UpdateMetaCategoryRequest {
	s.CategoryId = &v
	return s
}

type UpdateMetaCategoryResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s UpdateMetaCategoryResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateMetaCategoryResponse) GoString() string {
	return s.String()
}

func (s *UpdateMetaCategoryResponse) SetRequestId(v string) *UpdateMetaCategoryResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateMetaCategoryResponse) SetErrorCode(v string) *UpdateMetaCategoryResponse {
	s.ErrorCode = &v
	return s
}

func (s *UpdateMetaCategoryResponse) SetErrorMessage(v string) *UpdateMetaCategoryResponse {
	s.ErrorMessage = &v
	return s
}

func (s *UpdateMetaCategoryResponse) SetHttpStatusCode(v int) *UpdateMetaCategoryResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *UpdateMetaCategoryResponse) SetSuccess(v bool) *UpdateMetaCategoryResponse {
	s.Success = &v
	return s
}

func (s *UpdateMetaCategoryResponse) SetData(v bool) *UpdateMetaCategoryResponse {
	s.Data = &v
	return s
}

type ListTopicsRequest struct {
	BeginTime     *string `json:"BeginTime,omitempty" xml:"BeginTime,omitempty" require:"true"`
	EndTime       *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	TopicTypes    *string `json:"TopicTypes,omitempty" xml:"TopicTypes,omitempty"`
	TopicStatuses *string `json:"TopicStatuses,omitempty" xml:"TopicStatuses,omitempty"`
	NodeId        *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty"`
	InstanceId    *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty"`
	Owner         *string `json:"Owner,omitempty" xml:"Owner,omitempty"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
}

func (s ListTopicsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListTopicsRequest) GoString() string {
	return s.String()
}

func (s *ListTopicsRequest) SetBeginTime(v string) *ListTopicsRequest {
	s.BeginTime = &v
	return s
}

func (s *ListTopicsRequest) SetEndTime(v string) *ListTopicsRequest {
	s.EndTime = &v
	return s
}

func (s *ListTopicsRequest) SetTopicTypes(v string) *ListTopicsRequest {
	s.TopicTypes = &v
	return s
}

func (s *ListTopicsRequest) SetTopicStatuses(v string) *ListTopicsRequest {
	s.TopicStatuses = &v
	return s
}

func (s *ListTopicsRequest) SetNodeId(v int64) *ListTopicsRequest {
	s.NodeId = &v
	return s
}

func (s *ListTopicsRequest) SetInstanceId(v int64) *ListTopicsRequest {
	s.InstanceId = &v
	return s
}

func (s *ListTopicsRequest) SetOwner(v string) *ListTopicsRequest {
	s.Owner = &v
	return s
}

func (s *ListTopicsRequest) SetPageNumber(v int) *ListTopicsRequest {
	s.PageNumber = &v
	return s
}

func (s *ListTopicsRequest) SetPageSize(v int) *ListTopicsRequest {
	s.PageSize = &v
	return s
}

type ListTopicsResponse struct {
	Success        *bool                   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                 `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                 `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *ListTopicsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListTopicsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListTopicsResponse) GoString() string {
	return s.String()
}

func (s *ListTopicsResponse) SetSuccess(v bool) *ListTopicsResponse {
	s.Success = &v
	return s
}

func (s *ListTopicsResponse) SetErrorCode(v string) *ListTopicsResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListTopicsResponse) SetErrorMessage(v string) *ListTopicsResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListTopicsResponse) SetHttpStatusCode(v int) *ListTopicsResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListTopicsResponse) SetRequestId(v string) *ListTopicsResponse {
	s.RequestId = &v
	return s
}

func (s *ListTopicsResponse) SetData(v *ListTopicsResponseData) *ListTopicsResponse {
	s.Data = v
	return s
}

type ListTopicsResponseData struct {
	PageNumber *int                            `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                            `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                            `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Topics     []*ListTopicsResponseDataTopics `json:"Topics,omitempty" xml:"Topics,omitempty" require:"true" type:"Repeated"`
}

func (s ListTopicsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListTopicsResponseData) GoString() string {
	return s.String()
}

func (s *ListTopicsResponseData) SetPageNumber(v int) *ListTopicsResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListTopicsResponseData) SetPageSize(v int) *ListTopicsResponseData {
	s.PageSize = &v
	return s
}

func (s *ListTopicsResponseData) SetTotalCount(v int) *ListTopicsResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListTopicsResponseData) SetTopics(v []*ListTopicsResponseDataTopics) *ListTopicsResponseData {
	s.Topics = v
	return s
}

type ListTopicsResponseDataTopics struct {
	TopicId     *int64  `json:"TopicId,omitempty" xml:"TopicId,omitempty" require:"true"`
	TopicName   *string `json:"TopicName,omitempty" xml:"TopicName,omitempty" require:"true"`
	TopicStatus *string `json:"TopicStatus,omitempty" xml:"TopicStatus,omitempty" require:"true"`
	TopicType   *string `json:"TopicType,omitempty" xml:"TopicType,omitempty" require:"true"`
	AddTime     *int64  `json:"AddTime,omitempty" xml:"AddTime,omitempty" require:"true"`
	HappenTime  *int64  `json:"HappenTime,omitempty" xml:"HappenTime,omitempty" require:"true"`
	FixTime     *int64  `json:"FixTime,omitempty" xml:"FixTime,omitempty" require:"true"`
	InstanceId  *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	NodeId      *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	NodeName    *string `json:"NodeName,omitempty" xml:"NodeName,omitempty" require:"true"`
	NodeOwner   *string `json:"NodeOwner,omitempty" xml:"NodeOwner,omitempty" require:"true"`
	ProjectId   *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
}

func (s ListTopicsResponseDataTopics) String() string {
	return tea.Prettify(s)
}

func (s ListTopicsResponseDataTopics) GoString() string {
	return s.String()
}

func (s *ListTopicsResponseDataTopics) SetTopicId(v int64) *ListTopicsResponseDataTopics {
	s.TopicId = &v
	return s
}

func (s *ListTopicsResponseDataTopics) SetTopicName(v string) *ListTopicsResponseDataTopics {
	s.TopicName = &v
	return s
}

func (s *ListTopicsResponseDataTopics) SetTopicStatus(v string) *ListTopicsResponseDataTopics {
	s.TopicStatus = &v
	return s
}

func (s *ListTopicsResponseDataTopics) SetTopicType(v string) *ListTopicsResponseDataTopics {
	s.TopicType = &v
	return s
}

func (s *ListTopicsResponseDataTopics) SetAddTime(v int64) *ListTopicsResponseDataTopics {
	s.AddTime = &v
	return s
}

func (s *ListTopicsResponseDataTopics) SetHappenTime(v int64) *ListTopicsResponseDataTopics {
	s.HappenTime = &v
	return s
}

func (s *ListTopicsResponseDataTopics) SetFixTime(v int64) *ListTopicsResponseDataTopics {
	s.FixTime = &v
	return s
}

func (s *ListTopicsResponseDataTopics) SetInstanceId(v int64) *ListTopicsResponseDataTopics {
	s.InstanceId = &v
	return s
}

func (s *ListTopicsResponseDataTopics) SetNodeId(v int64) *ListTopicsResponseDataTopics {
	s.NodeId = &v
	return s
}

func (s *ListTopicsResponseDataTopics) SetNodeName(v string) *ListTopicsResponseDataTopics {
	s.NodeName = &v
	return s
}

func (s *ListTopicsResponseDataTopics) SetNodeOwner(v string) *ListTopicsResponseDataTopics {
	s.NodeOwner = &v
	return s
}

func (s *ListTopicsResponseDataTopics) SetProjectId(v int64) *ListTopicsResponseDataTopics {
	s.ProjectId = &v
	return s
}

type ListFileVersionsRequest struct {
	FileId            *int64  `json:"FileId,omitempty" xml:"FileId,omitempty" require:"true"`
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	PageNumber        *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize          *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s ListFileVersionsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListFileVersionsRequest) GoString() string {
	return s.String()
}

func (s *ListFileVersionsRequest) SetFileId(v int64) *ListFileVersionsRequest {
	s.FileId = &v
	return s
}

func (s *ListFileVersionsRequest) SetProjectId(v int64) *ListFileVersionsRequest {
	s.ProjectId = &v
	return s
}

func (s *ListFileVersionsRequest) SetProjectIdentifier(v string) *ListFileVersionsRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *ListFileVersionsRequest) SetPageNumber(v int) *ListFileVersionsRequest {
	s.PageNumber = &v
	return s
}

func (s *ListFileVersionsRequest) SetPageSize(v int) *ListFileVersionsRequest {
	s.PageSize = &v
	return s
}

type ListFileVersionsResponse struct {
	RequestId      *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                         `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                       `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                       `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                          `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *ListFileVersionsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListFileVersionsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListFileVersionsResponse) GoString() string {
	return s.String()
}

func (s *ListFileVersionsResponse) SetRequestId(v string) *ListFileVersionsResponse {
	s.RequestId = &v
	return s
}

func (s *ListFileVersionsResponse) SetSuccess(v bool) *ListFileVersionsResponse {
	s.Success = &v
	return s
}

func (s *ListFileVersionsResponse) SetErrorCode(v string) *ListFileVersionsResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListFileVersionsResponse) SetErrorMessage(v string) *ListFileVersionsResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListFileVersionsResponse) SetHttpStatusCode(v int) *ListFileVersionsResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListFileVersionsResponse) SetData(v *ListFileVersionsResponseData) *ListFileVersionsResponse {
	s.Data = v
	return s
}

type ListFileVersionsResponseData struct {
	PageNumber   *int                                        `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize     *int                                        `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount   *int                                        `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	FileVersions []*ListFileVersionsResponseDataFileVersions `json:"FileVersions,omitempty" xml:"FileVersions,omitempty" require:"true" type:"Repeated"`
}

func (s ListFileVersionsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListFileVersionsResponseData) GoString() string {
	return s.String()
}

func (s *ListFileVersionsResponseData) SetPageNumber(v int) *ListFileVersionsResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListFileVersionsResponseData) SetPageSize(v int) *ListFileVersionsResponseData {
	s.PageSize = &v
	return s
}

func (s *ListFileVersionsResponseData) SetTotalCount(v int) *ListFileVersionsResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListFileVersionsResponseData) SetFileVersions(v []*ListFileVersionsResponseDataFileVersions) *ListFileVersionsResponseData {
	s.FileVersions = v
	return s
}

type ListFileVersionsResponseDataFileVersions struct {
	FileVersion         *int    `json:"FileVersion,omitempty" xml:"FileVersion,omitempty" require:"true"`
	FileContent         *string `json:"FileContent,omitempty" xml:"FileContent,omitempty" require:"true"`
	CommitTime          *int64  `json:"CommitTime,omitempty" xml:"CommitTime,omitempty" require:"true"`
	CommitUser          *string `json:"CommitUser,omitempty" xml:"CommitUser,omitempty" require:"true"`
	FileName            *string `json:"FileName,omitempty" xml:"FileName,omitempty" require:"true"`
	Status              *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	ChangeType          *string `json:"ChangeType,omitempty" xml:"ChangeType,omitempty" require:"true"`
	IsCurrentProd       *bool   `json:"IsCurrentProd,omitempty" xml:"IsCurrentProd,omitempty" require:"true"`
	NodeId              *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	Comment             *string `json:"Comment,omitempty" xml:"Comment,omitempty" require:"true"`
	NodeContent         *string `json:"NodeContent,omitempty" xml:"NodeContent,omitempty" require:"true"`
	FilePropertyContent *string `json:"FilePropertyContent,omitempty" xml:"FilePropertyContent,omitempty" require:"true"`
	UseType             *string `json:"UseType,omitempty" xml:"UseType,omitempty" require:"true"`
}

func (s ListFileVersionsResponseDataFileVersions) String() string {
	return tea.Prettify(s)
}

func (s ListFileVersionsResponseDataFileVersions) GoString() string {
	return s.String()
}

func (s *ListFileVersionsResponseDataFileVersions) SetFileVersion(v int) *ListFileVersionsResponseDataFileVersions {
	s.FileVersion = &v
	return s
}

func (s *ListFileVersionsResponseDataFileVersions) SetFileContent(v string) *ListFileVersionsResponseDataFileVersions {
	s.FileContent = &v
	return s
}

func (s *ListFileVersionsResponseDataFileVersions) SetCommitTime(v int64) *ListFileVersionsResponseDataFileVersions {
	s.CommitTime = &v
	return s
}

func (s *ListFileVersionsResponseDataFileVersions) SetCommitUser(v string) *ListFileVersionsResponseDataFileVersions {
	s.CommitUser = &v
	return s
}

func (s *ListFileVersionsResponseDataFileVersions) SetFileName(v string) *ListFileVersionsResponseDataFileVersions {
	s.FileName = &v
	return s
}

func (s *ListFileVersionsResponseDataFileVersions) SetStatus(v string) *ListFileVersionsResponseDataFileVersions {
	s.Status = &v
	return s
}

func (s *ListFileVersionsResponseDataFileVersions) SetChangeType(v string) *ListFileVersionsResponseDataFileVersions {
	s.ChangeType = &v
	return s
}

func (s *ListFileVersionsResponseDataFileVersions) SetIsCurrentProd(v bool) *ListFileVersionsResponseDataFileVersions {
	s.IsCurrentProd = &v
	return s
}

func (s *ListFileVersionsResponseDataFileVersions) SetNodeId(v int64) *ListFileVersionsResponseDataFileVersions {
	s.NodeId = &v
	return s
}

func (s *ListFileVersionsResponseDataFileVersions) SetComment(v string) *ListFileVersionsResponseDataFileVersions {
	s.Comment = &v
	return s
}

func (s *ListFileVersionsResponseDataFileVersions) SetNodeContent(v string) *ListFileVersionsResponseDataFileVersions {
	s.NodeContent = &v
	return s
}

func (s *ListFileVersionsResponseDataFileVersions) SetFilePropertyContent(v string) *ListFileVersionsResponseDataFileVersions {
	s.FilePropertyContent = &v
	return s
}

func (s *ListFileVersionsResponseDataFileVersions) SetUseType(v string) *ListFileVersionsResponseDataFileVersions {
	s.UseType = &v
	return s
}

type CreateMetaCategoryRequest struct {
	Name     *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Comment  *string `json:"Comment,omitempty" xml:"Comment,omitempty"`
	ParentId *int64  `json:"ParentId,omitempty" xml:"ParentId,omitempty"`
}

func (s CreateMetaCategoryRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateMetaCategoryRequest) GoString() string {
	return s.String()
}

func (s *CreateMetaCategoryRequest) SetName(v string) *CreateMetaCategoryRequest {
	s.Name = &v
	return s
}

func (s *CreateMetaCategoryRequest) SetComment(v string) *CreateMetaCategoryRequest {
	s.Comment = &v
	return s
}

func (s *CreateMetaCategoryRequest) SetParentId(v int64) *CreateMetaCategoryRequest {
	s.ParentId = &v
	return s
}

type CreateMetaCategoryResponse struct {
	RequestId      *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string                         `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                         `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                            `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                           `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *CreateMetaCategoryResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s CreateMetaCategoryResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateMetaCategoryResponse) GoString() string {
	return s.String()
}

func (s *CreateMetaCategoryResponse) SetRequestId(v string) *CreateMetaCategoryResponse {
	s.RequestId = &v
	return s
}

func (s *CreateMetaCategoryResponse) SetErrorCode(v string) *CreateMetaCategoryResponse {
	s.ErrorCode = &v
	return s
}

func (s *CreateMetaCategoryResponse) SetErrorMessage(v string) *CreateMetaCategoryResponse {
	s.ErrorMessage = &v
	return s
}

func (s *CreateMetaCategoryResponse) SetHttpStatusCode(v int) *CreateMetaCategoryResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *CreateMetaCategoryResponse) SetSuccess(v bool) *CreateMetaCategoryResponse {
	s.Success = &v
	return s
}

func (s *CreateMetaCategoryResponse) SetData(v *CreateMetaCategoryResponseData) *CreateMetaCategoryResponse {
	s.Data = v
	return s
}

type CreateMetaCategoryResponseData struct {
	CategoryId *int64 `json:"CategoryId,omitempty" xml:"CategoryId,omitempty" require:"true"`
}

func (s CreateMetaCategoryResponseData) String() string {
	return tea.Prettify(s)
}

func (s CreateMetaCategoryResponseData) GoString() string {
	return s.String()
}

func (s *CreateMetaCategoryResponseData) SetCategoryId(v int64) *CreateMetaCategoryResponseData {
	s.CategoryId = &v
	return s
}

type ListNodeIORequest struct {
	NodeId     *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	ProjectEnv *string `json:"ProjectEnv,omitempty" xml:"ProjectEnv,omitempty" require:"true"`
	IoType     *string `json:"IoType,omitempty" xml:"IoType,omitempty" require:"true"`
}

func (s ListNodeIORequest) String() string {
	return tea.Prettify(s)
}

func (s ListNodeIORequest) GoString() string {
	return s.String()
}

func (s *ListNodeIORequest) SetNodeId(v int64) *ListNodeIORequest {
	s.NodeId = &v
	return s
}

func (s *ListNodeIORequest) SetProjectEnv(v string) *ListNodeIORequest {
	s.ProjectEnv = &v
	return s
}

func (s *ListNodeIORequest) SetIoType(v string) *ListNodeIORequest {
	s.IoType = &v
	return s
}

type ListNodeIOResponse struct {
	Success        *bool                     `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                   `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                   `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                      `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           []*ListNodeIOResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Repeated"`
}

func (s ListNodeIOResponse) String() string {
	return tea.Prettify(s)
}

func (s ListNodeIOResponse) GoString() string {
	return s.String()
}

func (s *ListNodeIOResponse) SetSuccess(v bool) *ListNodeIOResponse {
	s.Success = &v
	return s
}

func (s *ListNodeIOResponse) SetErrorCode(v string) *ListNodeIOResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListNodeIOResponse) SetErrorMessage(v string) *ListNodeIOResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListNodeIOResponse) SetHttpStatusCode(v int) *ListNodeIOResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListNodeIOResponse) SetRequestId(v string) *ListNodeIOResponse {
	s.RequestId = &v
	return s
}

func (s *ListNodeIOResponse) SetData(v []*ListNodeIOResponseData) *ListNodeIOResponse {
	s.Data = v
	return s
}

type ListNodeIOResponseData struct {
	TableName *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s ListNodeIOResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListNodeIOResponseData) GoString() string {
	return s.String()
}

func (s *ListNodeIOResponseData) SetTableName(v string) *ListNodeIOResponseData {
	s.TableName = &v
	return s
}

func (s *ListNodeIOResponseData) SetData(v string) *ListNodeIOResponseData {
	s.Data = &v
	return s
}

type GetTopicInfluenceRequest struct {
	TopicId *int64 `json:"TopicId,omitempty" xml:"TopicId,omitempty" require:"true"`
}

func (s GetTopicInfluenceRequest) String() string {
	return tea.Prettify(s)
}

func (s GetTopicInfluenceRequest) GoString() string {
	return s.String()
}

func (s *GetTopicInfluenceRequest) SetTopicId(v int64) *GetTopicInfluenceRequest {
	s.TopicId = &v
	return s
}

type GetTopicInfluenceResponse struct {
	Success        *bool                          `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                        `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                        `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                           `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *GetTopicInfluenceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetTopicInfluenceResponse) String() string {
	return tea.Prettify(s)
}

func (s GetTopicInfluenceResponse) GoString() string {
	return s.String()
}

func (s *GetTopicInfluenceResponse) SetSuccess(v bool) *GetTopicInfluenceResponse {
	s.Success = &v
	return s
}

func (s *GetTopicInfluenceResponse) SetErrorCode(v string) *GetTopicInfluenceResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetTopicInfluenceResponse) SetErrorMessage(v string) *GetTopicInfluenceResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetTopicInfluenceResponse) SetHttpStatusCode(v int) *GetTopicInfluenceResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetTopicInfluenceResponse) SetRequestId(v string) *GetTopicInfluenceResponse {
	s.RequestId = &v
	return s
}

func (s *GetTopicInfluenceResponse) SetData(v *GetTopicInfluenceResponseData) *GetTopicInfluenceResponse {
	s.Data = v
	return s
}

type GetTopicInfluenceResponseData struct {
	TopicId    *int64                                     `json:"TopicId,omitempty" xml:"TopicId,omitempty" require:"true"`
	Influences []*GetTopicInfluenceResponseDataInfluences `json:"Influences,omitempty" xml:"Influences,omitempty" require:"true" type:"Repeated"`
}

func (s GetTopicInfluenceResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetTopicInfluenceResponseData) GoString() string {
	return s.String()
}

func (s *GetTopicInfluenceResponseData) SetTopicId(v int64) *GetTopicInfluenceResponseData {
	s.TopicId = &v
	return s
}

func (s *GetTopicInfluenceResponseData) SetInfluences(v []*GetTopicInfluenceResponseDataInfluences) *GetTopicInfluenceResponseData {
	s.Influences = v
	return s
}

type GetTopicInfluenceResponseDataInfluences struct {
	BaselineId   *int64  `json:"BaselineId,omitempty" xml:"BaselineId,omitempty" require:"true"`
	Bizdate      *int64  `json:"Bizdate,omitempty" xml:"Bizdate,omitempty" require:"true"`
	InGroupId    *int    `json:"InGroupId,omitempty" xml:"InGroupId,omitempty" require:"true"`
	BaselineName *string `json:"BaselineName,omitempty" xml:"BaselineName,omitempty" require:"true"`
	Owner        *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	ProjectId    *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Priority     *int    `json:"Priority,omitempty" xml:"Priority,omitempty" require:"true"`
	Buffer       *int64  `json:"Buffer,omitempty" xml:"Buffer,omitempty" require:"true"`
}

func (s GetTopicInfluenceResponseDataInfluences) String() string {
	return tea.Prettify(s)
}

func (s GetTopicInfluenceResponseDataInfluences) GoString() string {
	return s.String()
}

func (s *GetTopicInfluenceResponseDataInfluences) SetBaselineId(v int64) *GetTopicInfluenceResponseDataInfluences {
	s.BaselineId = &v
	return s
}

func (s *GetTopicInfluenceResponseDataInfluences) SetBizdate(v int64) *GetTopicInfluenceResponseDataInfluences {
	s.Bizdate = &v
	return s
}

func (s *GetTopicInfluenceResponseDataInfluences) SetInGroupId(v int) *GetTopicInfluenceResponseDataInfluences {
	s.InGroupId = &v
	return s
}

func (s *GetTopicInfluenceResponseDataInfluences) SetBaselineName(v string) *GetTopicInfluenceResponseDataInfluences {
	s.BaselineName = &v
	return s
}

func (s *GetTopicInfluenceResponseDataInfluences) SetOwner(v string) *GetTopicInfluenceResponseDataInfluences {
	s.Owner = &v
	return s
}

func (s *GetTopicInfluenceResponseDataInfluences) SetStatus(v string) *GetTopicInfluenceResponseDataInfluences {
	s.Status = &v
	return s
}

func (s *GetTopicInfluenceResponseDataInfluences) SetProjectId(v int64) *GetTopicInfluenceResponseDataInfluences {
	s.ProjectId = &v
	return s
}

func (s *GetTopicInfluenceResponseDataInfluences) SetPriority(v int) *GetTopicInfluenceResponseDataInfluences {
	s.Priority = &v
	return s
}

func (s *GetTopicInfluenceResponseDataInfluences) SetBuffer(v int64) *GetTopicInfluenceResponseDataInfluences {
	s.Buffer = &v
	return s
}

type GetTopicRequest struct {
	TopicId *int64 `json:"TopicId,omitempty" xml:"TopicId,omitempty" require:"true"`
}

func (s GetTopicRequest) String() string {
	return tea.Prettify(s)
}

func (s GetTopicRequest) GoString() string {
	return s.String()
}

func (s *GetTopicRequest) SetTopicId(v int64) *GetTopicRequest {
	s.TopicId = &v
	return s
}

type GetTopicResponse struct {
	Success        *bool                 `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string               `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string               `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                  `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *GetTopicResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetTopicResponse) String() string {
	return tea.Prettify(s)
}

func (s GetTopicResponse) GoString() string {
	return s.String()
}

func (s *GetTopicResponse) SetSuccess(v bool) *GetTopicResponse {
	s.Success = &v
	return s
}

func (s *GetTopicResponse) SetErrorCode(v string) *GetTopicResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetTopicResponse) SetErrorMessage(v string) *GetTopicResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetTopicResponse) SetHttpStatusCode(v int) *GetTopicResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetTopicResponse) SetRequestId(v string) *GetTopicResponse {
	s.RequestId = &v
	return s
}

func (s *GetTopicResponse) SetData(v *GetTopicResponseData) *GetTopicResponse {
	s.Data = v
	return s
}

type GetTopicResponseData struct {
	TopicId           *int64  `json:"TopicId,omitempty" xml:"TopicId,omitempty" require:"true"`
	TopicName         *string `json:"TopicName,omitempty" xml:"TopicName,omitempty" require:"true"`
	TopicStatus       *string `json:"TopicStatus,omitempty" xml:"TopicStatus,omitempty" require:"true"`
	TopicType         *string `json:"TopicType,omitempty" xml:"TopicType,omitempty" require:"true"`
	AddTime           *int64  `json:"AddTime,omitempty" xml:"AddTime,omitempty" require:"true"`
	AlertTime         *int64  `json:"AlertTime,omitempty" xml:"AlertTime,omitempty" require:"true"`
	Assigner          *string `json:"Assigner,omitempty" xml:"Assigner,omitempty" require:"true"`
	BaselineId        *int64  `json:"BaselineId,omitempty" xml:"BaselineId,omitempty" require:"true"`
	BaselineName      *string `json:"BaselineName,omitempty" xml:"BaselineName,omitempty" require:"true"`
	BaselineInGroupId *int    `json:"BaselineInGroupId,omitempty" xml:"BaselineInGroupId,omitempty" require:"true"`
	BaselineStatus    *string `json:"BaselineStatus,omitempty" xml:"BaselineStatus,omitempty" require:"true"`
	BaselineBuffer    *int64  `json:"BaselineBuffer,omitempty" xml:"BaselineBuffer,omitempty" require:"true"`
	Buffer            *int64  `json:"Buffer,omitempty" xml:"Buffer,omitempty" require:"true"`
	DealTime          *int64  `json:"DealTime,omitempty" xml:"DealTime,omitempty" require:"true"`
	DealUser          *string `json:"DealUser,omitempty" xml:"DealUser,omitempty" require:"true"`
	FixTime           *int64  `json:"FixTime,omitempty" xml:"FixTime,omitempty" require:"true"`
	HappenTime        *int64  `json:"HappenTime,omitempty" xml:"HappenTime,omitempty" require:"true"`
	InstanceId        *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	NextAlertTime     *int64  `json:"NextAlertTime,omitempty" xml:"NextAlertTime,omitempty" require:"true"`
	NodeId            *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	NodeName          *string `json:"NodeName,omitempty" xml:"NodeName,omitempty" require:"true"`
	Owner             *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
}

func (s GetTopicResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetTopicResponseData) GoString() string {
	return s.String()
}

func (s *GetTopicResponseData) SetTopicId(v int64) *GetTopicResponseData {
	s.TopicId = &v
	return s
}

func (s *GetTopicResponseData) SetTopicName(v string) *GetTopicResponseData {
	s.TopicName = &v
	return s
}

func (s *GetTopicResponseData) SetTopicStatus(v string) *GetTopicResponseData {
	s.TopicStatus = &v
	return s
}

func (s *GetTopicResponseData) SetTopicType(v string) *GetTopicResponseData {
	s.TopicType = &v
	return s
}

func (s *GetTopicResponseData) SetAddTime(v int64) *GetTopicResponseData {
	s.AddTime = &v
	return s
}

func (s *GetTopicResponseData) SetAlertTime(v int64) *GetTopicResponseData {
	s.AlertTime = &v
	return s
}

func (s *GetTopicResponseData) SetAssigner(v string) *GetTopicResponseData {
	s.Assigner = &v
	return s
}

func (s *GetTopicResponseData) SetBaselineId(v int64) *GetTopicResponseData {
	s.BaselineId = &v
	return s
}

func (s *GetTopicResponseData) SetBaselineName(v string) *GetTopicResponseData {
	s.BaselineName = &v
	return s
}

func (s *GetTopicResponseData) SetBaselineInGroupId(v int) *GetTopicResponseData {
	s.BaselineInGroupId = &v
	return s
}

func (s *GetTopicResponseData) SetBaselineStatus(v string) *GetTopicResponseData {
	s.BaselineStatus = &v
	return s
}

func (s *GetTopicResponseData) SetBaselineBuffer(v int64) *GetTopicResponseData {
	s.BaselineBuffer = &v
	return s
}

func (s *GetTopicResponseData) SetBuffer(v int64) *GetTopicResponseData {
	s.Buffer = &v
	return s
}

func (s *GetTopicResponseData) SetDealTime(v int64) *GetTopicResponseData {
	s.DealTime = &v
	return s
}

func (s *GetTopicResponseData) SetDealUser(v string) *GetTopicResponseData {
	s.DealUser = &v
	return s
}

func (s *GetTopicResponseData) SetFixTime(v int64) *GetTopicResponseData {
	s.FixTime = &v
	return s
}

func (s *GetTopicResponseData) SetHappenTime(v int64) *GetTopicResponseData {
	s.HappenTime = &v
	return s
}

func (s *GetTopicResponseData) SetInstanceId(v int64) *GetTopicResponseData {
	s.InstanceId = &v
	return s
}

func (s *GetTopicResponseData) SetNextAlertTime(v int64) *GetTopicResponseData {
	s.NextAlertTime = &v
	return s
}

func (s *GetTopicResponseData) SetNodeId(v int64) *GetTopicResponseData {
	s.NodeId = &v
	return s
}

func (s *GetTopicResponseData) SetNodeName(v string) *GetTopicResponseData {
	s.NodeName = &v
	return s
}

func (s *GetTopicResponseData) SetOwner(v string) *GetTopicResponseData {
	s.Owner = &v
	return s
}

func (s *GetTopicResponseData) SetProjectId(v int64) *GetTopicResponseData {
	s.ProjectId = &v
	return s
}

type DeleteFromMetaCategoryRequest struct {
	CategoryId *int64  `json:"CategoryId,omitempty" xml:"CategoryId,omitempty" require:"true"`
	TableGuid  *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
}

func (s DeleteFromMetaCategoryRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteFromMetaCategoryRequest) GoString() string {
	return s.String()
}

func (s *DeleteFromMetaCategoryRequest) SetCategoryId(v int64) *DeleteFromMetaCategoryRequest {
	s.CategoryId = &v
	return s
}

func (s *DeleteFromMetaCategoryRequest) SetTableGuid(v string) *DeleteFromMetaCategoryRequest {
	s.TableGuid = &v
	return s
}

type DeleteFromMetaCategoryResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s DeleteFromMetaCategoryResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteFromMetaCategoryResponse) GoString() string {
	return s.String()
}

func (s *DeleteFromMetaCategoryResponse) SetRequestId(v string) *DeleteFromMetaCategoryResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteFromMetaCategoryResponse) SetErrorCode(v string) *DeleteFromMetaCategoryResponse {
	s.ErrorCode = &v
	return s
}

func (s *DeleteFromMetaCategoryResponse) SetErrorMessage(v string) *DeleteFromMetaCategoryResponse {
	s.ErrorMessage = &v
	return s
}

func (s *DeleteFromMetaCategoryResponse) SetHttpStatusCode(v int) *DeleteFromMetaCategoryResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *DeleteFromMetaCategoryResponse) SetSuccess(v bool) *DeleteFromMetaCategoryResponse {
	s.Success = &v
	return s
}

func (s *DeleteFromMetaCategoryResponse) SetData(v bool) *DeleteFromMetaCategoryResponse {
	s.Data = &v
	return s
}

type GetNodeRequest struct {
	NodeId     *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	ProjectEnv *string `json:"ProjectEnv,omitempty" xml:"ProjectEnv,omitempty" require:"true"`
}

func (s GetNodeRequest) String() string {
	return tea.Prettify(s)
}

func (s GetNodeRequest) GoString() string {
	return s.String()
}

func (s *GetNodeRequest) SetNodeId(v int64) *GetNodeRequest {
	s.NodeId = &v
	return s
}

func (s *GetNodeRequest) SetProjectEnv(v string) *GetNodeRequest {
	s.ProjectEnv = &v
	return s
}

type GetNodeResponse struct {
	Success        *bool                `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string              `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string              `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                 `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string              `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *GetNodeResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetNodeResponse) String() string {
	return tea.Prettify(s)
}

func (s GetNodeResponse) GoString() string {
	return s.String()
}

func (s *GetNodeResponse) SetSuccess(v bool) *GetNodeResponse {
	s.Success = &v
	return s
}

func (s *GetNodeResponse) SetErrorCode(v string) *GetNodeResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetNodeResponse) SetErrorMessage(v string) *GetNodeResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetNodeResponse) SetHttpStatusCode(v int) *GetNodeResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetNodeResponse) SetRequestId(v string) *GetNodeResponse {
	s.RequestId = &v
	return s
}

func (s *GetNodeResponse) SetData(v *GetNodeResponseData) *GetNodeResponse {
	s.Data = v
	return s
}

type GetNodeResponseData struct {
	NodeId        *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	OwnerId       *string `json:"OwnerId,omitempty" xml:"OwnerId,omitempty" require:"true"`
	Description   *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	ResGroupName  *string `json:"ResGroupName,omitempty" xml:"ResGroupName,omitempty" require:"true"`
	NodeName      *string `json:"NodeName,omitempty" xml:"NodeName,omitempty" require:"true"`
	CronExpress   *string `json:"CronExpress,omitempty" xml:"CronExpress,omitempty" require:"true"`
	Repeatability *string `json:"Repeatability,omitempty" xml:"Repeatability,omitempty" require:"true"`
	ProgramType   *string `json:"ProgramType,omitempty" xml:"ProgramType,omitempty" require:"true"`
	ProjectId     *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	SchedulerType *string `json:"SchedulerType,omitempty" xml:"SchedulerType,omitempty" require:"true"`
	ParamValues   *string `json:"ParamValues,omitempty" xml:"ParamValues,omitempty" require:"true"`
}

func (s GetNodeResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetNodeResponseData) GoString() string {
	return s.String()
}

func (s *GetNodeResponseData) SetNodeId(v int64) *GetNodeResponseData {
	s.NodeId = &v
	return s
}

func (s *GetNodeResponseData) SetOwnerId(v string) *GetNodeResponseData {
	s.OwnerId = &v
	return s
}

func (s *GetNodeResponseData) SetDescription(v string) *GetNodeResponseData {
	s.Description = &v
	return s
}

func (s *GetNodeResponseData) SetResGroupName(v string) *GetNodeResponseData {
	s.ResGroupName = &v
	return s
}

func (s *GetNodeResponseData) SetNodeName(v string) *GetNodeResponseData {
	s.NodeName = &v
	return s
}

func (s *GetNodeResponseData) SetCronExpress(v string) *GetNodeResponseData {
	s.CronExpress = &v
	return s
}

func (s *GetNodeResponseData) SetRepeatability(v string) *GetNodeResponseData {
	s.Repeatability = &v
	return s
}

func (s *GetNodeResponseData) SetProgramType(v string) *GetNodeResponseData {
	s.ProgramType = &v
	return s
}

func (s *GetNodeResponseData) SetProjectId(v int64) *GetNodeResponseData {
	s.ProjectId = &v
	return s
}

func (s *GetNodeResponseData) SetSchedulerType(v string) *GetNodeResponseData {
	s.SchedulerType = &v
	return s
}

func (s *GetNodeResponseData) SetParamValues(v string) *GetNodeResponseData {
	s.ParamValues = &v
	return s
}

type ListNodesRequest struct {
	Owner       *string `json:"Owner,omitempty" xml:"Owner,omitempty"`
	BizName     *string `json:"BizName,omitempty" xml:"BizName,omitempty"`
	ProgramType *string `json:"ProgramType,omitempty" xml:"ProgramType,omitempty"`
	PageNumber  *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize    *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	ProjectId   *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	ProjectEnv  *string `json:"ProjectEnv,omitempty" xml:"ProjectEnv,omitempty" require:"true"`
	NodeName    *string `json:"NodeName,omitempty" xml:"NodeName,omitempty"`
}

func (s ListNodesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListNodesRequest) GoString() string {
	return s.String()
}

func (s *ListNodesRequest) SetOwner(v string) *ListNodesRequest {
	s.Owner = &v
	return s
}

func (s *ListNodesRequest) SetBizName(v string) *ListNodesRequest {
	s.BizName = &v
	return s
}

func (s *ListNodesRequest) SetProgramType(v string) *ListNodesRequest {
	s.ProgramType = &v
	return s
}

func (s *ListNodesRequest) SetPageNumber(v int) *ListNodesRequest {
	s.PageNumber = &v
	return s
}

func (s *ListNodesRequest) SetPageSize(v int) *ListNodesRequest {
	s.PageSize = &v
	return s
}

func (s *ListNodesRequest) SetProjectId(v int64) *ListNodesRequest {
	s.ProjectId = &v
	return s
}

func (s *ListNodesRequest) SetProjectEnv(v string) *ListNodesRequest {
	s.ProjectEnv = &v
	return s
}

func (s *ListNodesRequest) SetNodeName(v string) *ListNodesRequest {
	s.NodeName = &v
	return s
}

type ListNodesResponse struct {
	Success        *bool                  `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	HttpStatusCode *int                   `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	ErrorCode      *string                `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	RequestId      *string                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *ListNodesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListNodesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListNodesResponse) GoString() string {
	return s.String()
}

func (s *ListNodesResponse) SetSuccess(v bool) *ListNodesResponse {
	s.Success = &v
	return s
}

func (s *ListNodesResponse) SetHttpStatusCode(v int) *ListNodesResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListNodesResponse) SetErrorCode(v string) *ListNodesResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListNodesResponse) SetErrorMessage(v string) *ListNodesResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListNodesResponse) SetRequestId(v string) *ListNodesResponse {
	s.RequestId = &v
	return s
}

func (s *ListNodesResponse) SetData(v *ListNodesResponseData) *ListNodesResponse {
	s.Data = v
	return s
}

type ListNodesResponseData struct {
	PageNumber *int                          `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                          `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                          `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Nodes      []*ListNodesResponseDataNodes `json:"Nodes,omitempty" xml:"Nodes,omitempty" require:"true" type:"Repeated"`
}

func (s ListNodesResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListNodesResponseData) GoString() string {
	return s.String()
}

func (s *ListNodesResponseData) SetPageNumber(v int) *ListNodesResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListNodesResponseData) SetPageSize(v int) *ListNodesResponseData {
	s.PageSize = &v
	return s
}

func (s *ListNodesResponseData) SetTotalCount(v int) *ListNodesResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListNodesResponseData) SetNodes(v []*ListNodesResponseDataNodes) *ListNodesResponseData {
	s.Nodes = v
	return s
}

type ListNodesResponseDataNodes struct {
	NodeId        *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	NodeName      *string `json:"NodeName,omitempty" xml:"NodeName,omitempty" require:"true"`
	CronExpress   *string `json:"CronExpress,omitempty" xml:"CronExpress,omitempty" require:"true"`
	SchedulerType *string `json:"SchedulerType,omitempty" xml:"SchedulerType,omitempty" require:"true"`
	ProgramType   *string `json:"ProgramType,omitempty" xml:"ProgramType,omitempty" require:"true"`
	OwnerId       *string `json:"OwnerId,omitempty" xml:"OwnerId,omitempty" require:"true"`
	ProjectId     *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Repeatability *bool   `json:"Repeatability,omitempty" xml:"Repeatability,omitempty" require:"true"`
	ParamValues   *string `json:"ParamValues,omitempty" xml:"ParamValues,omitempty" require:"true"`
	Description   *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	ResGroupName  *string `json:"ResGroupName,omitempty" xml:"ResGroupName,omitempty" require:"true"`
}

func (s ListNodesResponseDataNodes) String() string {
	return tea.Prettify(s)
}

func (s ListNodesResponseDataNodes) GoString() string {
	return s.String()
}

func (s *ListNodesResponseDataNodes) SetNodeId(v int64) *ListNodesResponseDataNodes {
	s.NodeId = &v
	return s
}

func (s *ListNodesResponseDataNodes) SetNodeName(v string) *ListNodesResponseDataNodes {
	s.NodeName = &v
	return s
}

func (s *ListNodesResponseDataNodes) SetCronExpress(v string) *ListNodesResponseDataNodes {
	s.CronExpress = &v
	return s
}

func (s *ListNodesResponseDataNodes) SetSchedulerType(v string) *ListNodesResponseDataNodes {
	s.SchedulerType = &v
	return s
}

func (s *ListNodesResponseDataNodes) SetProgramType(v string) *ListNodesResponseDataNodes {
	s.ProgramType = &v
	return s
}

func (s *ListNodesResponseDataNodes) SetOwnerId(v string) *ListNodesResponseDataNodes {
	s.OwnerId = &v
	return s
}

func (s *ListNodesResponseDataNodes) SetProjectId(v int64) *ListNodesResponseDataNodes {
	s.ProjectId = &v
	return s
}

func (s *ListNodesResponseDataNodes) SetRepeatability(v bool) *ListNodesResponseDataNodes {
	s.Repeatability = &v
	return s
}

func (s *ListNodesResponseDataNodes) SetParamValues(v string) *ListNodesResponseDataNodes {
	s.ParamValues = &v
	return s
}

func (s *ListNodesResponseDataNodes) SetDescription(v string) *ListNodesResponseDataNodes {
	s.Description = &v
	return s
}

func (s *ListNodesResponseDataNodes) SetResGroupName(v string) *ListNodesResponseDataNodes {
	s.ResGroupName = &v
	return s
}

type GetNodeCodeRequest struct {
	NodeId     *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	ProjectEnv *string `json:"ProjectEnv,omitempty" xml:"ProjectEnv,omitempty" require:"true"`
}

func (s GetNodeCodeRequest) String() string {
	return tea.Prettify(s)
}

func (s GetNodeCodeRequest) GoString() string {
	return s.String()
}

func (s *GetNodeCodeRequest) SetNodeId(v int64) *GetNodeCodeRequest {
	s.NodeId = &v
	return s
}

func (s *GetNodeCodeRequest) SetProjectEnv(v string) *GetNodeCodeRequest {
	s.ProjectEnv = &v
	return s
}

type GetNodeCodeResponse struct {
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s GetNodeCodeResponse) String() string {
	return tea.Prettify(s)
}

func (s GetNodeCodeResponse) GoString() string {
	return s.String()
}

func (s *GetNodeCodeResponse) SetSuccess(v bool) *GetNodeCodeResponse {
	s.Success = &v
	return s
}

func (s *GetNodeCodeResponse) SetErrorCode(v string) *GetNodeCodeResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetNodeCodeResponse) SetErrorMessage(v string) *GetNodeCodeResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetNodeCodeResponse) SetHttpStatusCode(v int) *GetNodeCodeResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetNodeCodeResponse) SetRequestId(v string) *GetNodeCodeResponse {
	s.RequestId = &v
	return s
}

func (s *GetNodeCodeResponse) SetData(v string) *GetNodeCodeResponse {
	s.Data = &v
	return s
}

type EstablishRelationTableToBusinessRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	BusinessId        *string `json:"BusinessId,omitempty" xml:"BusinessId,omitempty" require:"true"`
	TableGuid         *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
	FolderId          *string `json:"FolderId,omitempty" xml:"FolderId,omitempty"`
}

func (s EstablishRelationTableToBusinessRequest) String() string {
	return tea.Prettify(s)
}

func (s EstablishRelationTableToBusinessRequest) GoString() string {
	return s.String()
}

func (s *EstablishRelationTableToBusinessRequest) SetProjectId(v int64) *EstablishRelationTableToBusinessRequest {
	s.ProjectId = &v
	return s
}

func (s *EstablishRelationTableToBusinessRequest) SetProjectIdentifier(v string) *EstablishRelationTableToBusinessRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *EstablishRelationTableToBusinessRequest) SetBusinessId(v string) *EstablishRelationTableToBusinessRequest {
	s.BusinessId = &v
	return s
}

func (s *EstablishRelationTableToBusinessRequest) SetTableGuid(v string) *EstablishRelationTableToBusinessRequest {
	s.TableGuid = &v
	return s
}

func (s *EstablishRelationTableToBusinessRequest) SetFolderId(v string) *EstablishRelationTableToBusinessRequest {
	s.FolderId = &v
	return s
}

type EstablishRelationTableToBusinessResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
}

func (s EstablishRelationTableToBusinessResponse) String() string {
	return tea.Prettify(s)
}

func (s EstablishRelationTableToBusinessResponse) GoString() string {
	return s.String()
}

func (s *EstablishRelationTableToBusinessResponse) SetRequestId(v string) *EstablishRelationTableToBusinessResponse {
	s.RequestId = &v
	return s
}

func (s *EstablishRelationTableToBusinessResponse) SetSuccess(v bool) *EstablishRelationTableToBusinessResponse {
	s.Success = &v
	return s
}

func (s *EstablishRelationTableToBusinessResponse) SetErrorCode(v string) *EstablishRelationTableToBusinessResponse {
	s.ErrorCode = &v
	return s
}

func (s *EstablishRelationTableToBusinessResponse) SetErrorMessage(v string) *EstablishRelationTableToBusinessResponse {
	s.ErrorMessage = &v
	return s
}

func (s *EstablishRelationTableToBusinessResponse) SetHttpStatusCode(v int) *EstablishRelationTableToBusinessResponse {
	s.HttpStatusCode = &v
	return s
}

type UpdateDataServiceApiRequest struct {
	TenantId            *int64  `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ProjectId           *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	ApiId               *int64  `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	RequestMethod       *int    `json:"RequestMethod,omitempty" xml:"RequestMethod,omitempty" require:"true"`
	ResponseContentType *int    `json:"ResponseContentType,omitempty" xml:"ResponseContentType,omitempty" require:"true"`
	Timeout             *int    `json:"Timeout,omitempty" xml:"Timeout,omitempty" require:"true"`
	VisibleRange        *int    `json:"VisibleRange,omitempty" xml:"VisibleRange,omitempty" require:"true"`
	Protocols           *string `json:"Protocols,omitempty" xml:"Protocols,omitempty" require:"true"`
	WizardDetails       *string `json:"WizardDetails,omitempty" xml:"WizardDetails,omitempty"`
	ScriptDetails       *string `json:"ScriptDetails,omitempty" xml:"ScriptDetails,omitempty"`
	RegistrationDetails *string `json:"RegistrationDetails,omitempty" xml:"RegistrationDetails,omitempty"`
	ApiPath             *string `json:"ApiPath,omitempty" xml:"ApiPath,omitempty" require:"true"`
	ApiDescription      *string `json:"ApiDescription,omitempty" xml:"ApiDescription,omitempty" require:"true"`
}

func (s UpdateDataServiceApiRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateDataServiceApiRequest) GoString() string {
	return s.String()
}

func (s *UpdateDataServiceApiRequest) SetTenantId(v int64) *UpdateDataServiceApiRequest {
	s.TenantId = &v
	return s
}

func (s *UpdateDataServiceApiRequest) SetProjectId(v int64) *UpdateDataServiceApiRequest {
	s.ProjectId = &v
	return s
}

func (s *UpdateDataServiceApiRequest) SetApiId(v int64) *UpdateDataServiceApiRequest {
	s.ApiId = &v
	return s
}

func (s *UpdateDataServiceApiRequest) SetRequestMethod(v int) *UpdateDataServiceApiRequest {
	s.RequestMethod = &v
	return s
}

func (s *UpdateDataServiceApiRequest) SetResponseContentType(v int) *UpdateDataServiceApiRequest {
	s.ResponseContentType = &v
	return s
}

func (s *UpdateDataServiceApiRequest) SetTimeout(v int) *UpdateDataServiceApiRequest {
	s.Timeout = &v
	return s
}

func (s *UpdateDataServiceApiRequest) SetVisibleRange(v int) *UpdateDataServiceApiRequest {
	s.VisibleRange = &v
	return s
}

func (s *UpdateDataServiceApiRequest) SetProtocols(v string) *UpdateDataServiceApiRequest {
	s.Protocols = &v
	return s
}

func (s *UpdateDataServiceApiRequest) SetWizardDetails(v string) *UpdateDataServiceApiRequest {
	s.WizardDetails = &v
	return s
}

func (s *UpdateDataServiceApiRequest) SetScriptDetails(v string) *UpdateDataServiceApiRequest {
	s.ScriptDetails = &v
	return s
}

func (s *UpdateDataServiceApiRequest) SetRegistrationDetails(v string) *UpdateDataServiceApiRequest {
	s.RegistrationDetails = &v
	return s
}

func (s *UpdateDataServiceApiRequest) SetApiPath(v string) *UpdateDataServiceApiRequest {
	s.ApiPath = &v
	return s
}

func (s *UpdateDataServiceApiRequest) SetApiDescription(v string) *UpdateDataServiceApiRequest {
	s.ApiDescription = &v
	return s
}

type UpdateDataServiceApiResponse struct {
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateDataServiceApiResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateDataServiceApiResponse) GoString() string {
	return s.String()
}

func (s *UpdateDataServiceApiResponse) SetData(v bool) *UpdateDataServiceApiResponse {
	s.Data = &v
	return s
}

func (s *UpdateDataServiceApiResponse) SetErrorCode(v string) *UpdateDataServiceApiResponse {
	s.ErrorCode = &v
	return s
}

func (s *UpdateDataServiceApiResponse) SetErrorMessage(v string) *UpdateDataServiceApiResponse {
	s.ErrorMessage = &v
	return s
}

func (s *UpdateDataServiceApiResponse) SetHttpStatusCode(v int) *UpdateDataServiceApiResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *UpdateDataServiceApiResponse) SetSuccess(v bool) *UpdateDataServiceApiResponse {
	s.Success = &v
	return s
}

func (s *UpdateDataServiceApiResponse) SetRequestId(v string) *UpdateDataServiceApiResponse {
	s.RequestId = &v
	return s
}

type UpdateUdfFileRequest struct {
	FileFolderPath       *string `json:"FileFolderPath,omitempty" xml:"FileFolderPath,omitempty"`
	ProjectId            *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	FunctionType         *string `json:"FunctionType,omitempty" xml:"FunctionType,omitempty" require:"true"`
	ClassName            *string `json:"ClassName,omitempty" xml:"ClassName,omitempty" require:"true"`
	Resources            *string `json:"Resources,omitempty" xml:"Resources,omitempty" require:"true"`
	UdfDescription       *string `json:"UdfDescription,omitempty" xml:"UdfDescription,omitempty"`
	CmdDescription       *string `json:"CmdDescription,omitempty" xml:"CmdDescription,omitempty"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty"`
	ReturnValue          *string `json:"ReturnValue,omitempty" xml:"ReturnValue,omitempty"`
	Example              *string `json:"Example,omitempty" xml:"Example,omitempty"`
	ProjectIdentifier    *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	FileId               *string `json:"FileId,omitempty" xml:"FileId,omitempty" require:"true"`
}

func (s UpdateUdfFileRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateUdfFileRequest) GoString() string {
	return s.String()
}

func (s *UpdateUdfFileRequest) SetFileFolderPath(v string) *UpdateUdfFileRequest {
	s.FileFolderPath = &v
	return s
}

func (s *UpdateUdfFileRequest) SetProjectId(v int64) *UpdateUdfFileRequest {
	s.ProjectId = &v
	return s
}

func (s *UpdateUdfFileRequest) SetFunctionType(v string) *UpdateUdfFileRequest {
	s.FunctionType = &v
	return s
}

func (s *UpdateUdfFileRequest) SetClassName(v string) *UpdateUdfFileRequest {
	s.ClassName = &v
	return s
}

func (s *UpdateUdfFileRequest) SetResources(v string) *UpdateUdfFileRequest {
	s.Resources = &v
	return s
}

func (s *UpdateUdfFileRequest) SetUdfDescription(v string) *UpdateUdfFileRequest {
	s.UdfDescription = &v
	return s
}

func (s *UpdateUdfFileRequest) SetCmdDescription(v string) *UpdateUdfFileRequest {
	s.CmdDescription = &v
	return s
}

func (s *UpdateUdfFileRequest) SetParameterDescription(v string) *UpdateUdfFileRequest {
	s.ParameterDescription = &v
	return s
}

func (s *UpdateUdfFileRequest) SetReturnValue(v string) *UpdateUdfFileRequest {
	s.ReturnValue = &v
	return s
}

func (s *UpdateUdfFileRequest) SetExample(v string) *UpdateUdfFileRequest {
	s.Example = &v
	return s
}

func (s *UpdateUdfFileRequest) SetProjectIdentifier(v string) *UpdateUdfFileRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *UpdateUdfFileRequest) SetFileId(v string) *UpdateUdfFileRequest {
	s.FileId = &v
	return s
}

type UpdateUdfFileResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
}

func (s UpdateUdfFileResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateUdfFileResponse) GoString() string {
	return s.String()
}

func (s *UpdateUdfFileResponse) SetRequestId(v string) *UpdateUdfFileResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateUdfFileResponse) SetSuccess(v bool) *UpdateUdfFileResponse {
	s.Success = &v
	return s
}

func (s *UpdateUdfFileResponse) SetErrorCode(v string) *UpdateUdfFileResponse {
	s.ErrorCode = &v
	return s
}

func (s *UpdateUdfFileResponse) SetErrorMessage(v string) *UpdateUdfFileResponse {
	s.ErrorMessage = &v
	return s
}

func (s *UpdateUdfFileResponse) SetHttpStatusCode(v int) *UpdateUdfFileResponse {
	s.HttpStatusCode = &v
	return s
}

type CreateUdfFileRequest struct {
	FileFolderPath       *string `json:"FileFolderPath,omitempty" xml:"FileFolderPath,omitempty"`
	ProjectId            *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	FileName             *string `json:"FileName,omitempty" xml:"FileName,omitempty" require:"true"`
	FunctionType         *string `json:"FunctionType,omitempty" xml:"FunctionType,omitempty" require:"true"`
	ClassName            *string `json:"ClassName,omitempty" xml:"ClassName,omitempty" require:"true"`
	Resources            *string `json:"Resources,omitempty" xml:"Resources,omitempty" require:"true"`
	UdfDescription       *string `json:"UdfDescription,omitempty" xml:"UdfDescription,omitempty"`
	CmdDescription       *string `json:"CmdDescription,omitempty" xml:"CmdDescription,omitempty"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty"`
	ReturnValue          *string `json:"ReturnValue,omitempty" xml:"ReturnValue,omitempty"`
	Example              *string `json:"Example,omitempty" xml:"Example,omitempty"`
	ProjectIdentifier    *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
}

func (s CreateUdfFileRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateUdfFileRequest) GoString() string {
	return s.String()
}

func (s *CreateUdfFileRequest) SetFileFolderPath(v string) *CreateUdfFileRequest {
	s.FileFolderPath = &v
	return s
}

func (s *CreateUdfFileRequest) SetProjectId(v int64) *CreateUdfFileRequest {
	s.ProjectId = &v
	return s
}

func (s *CreateUdfFileRequest) SetFileName(v string) *CreateUdfFileRequest {
	s.FileName = &v
	return s
}

func (s *CreateUdfFileRequest) SetFunctionType(v string) *CreateUdfFileRequest {
	s.FunctionType = &v
	return s
}

func (s *CreateUdfFileRequest) SetClassName(v string) *CreateUdfFileRequest {
	s.ClassName = &v
	return s
}

func (s *CreateUdfFileRequest) SetResources(v string) *CreateUdfFileRequest {
	s.Resources = &v
	return s
}

func (s *CreateUdfFileRequest) SetUdfDescription(v string) *CreateUdfFileRequest {
	s.UdfDescription = &v
	return s
}

func (s *CreateUdfFileRequest) SetCmdDescription(v string) *CreateUdfFileRequest {
	s.CmdDescription = &v
	return s
}

func (s *CreateUdfFileRequest) SetParameterDescription(v string) *CreateUdfFileRequest {
	s.ParameterDescription = &v
	return s
}

func (s *CreateUdfFileRequest) SetReturnValue(v string) *CreateUdfFileRequest {
	s.ReturnValue = &v
	return s
}

func (s *CreateUdfFileRequest) SetExample(v string) *CreateUdfFileRequest {
	s.Example = &v
	return s
}

func (s *CreateUdfFileRequest) SetProjectIdentifier(v string) *CreateUdfFileRequest {
	s.ProjectIdentifier = &v
	return s
}

type CreateUdfFileResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	Data           *int64  `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
}

func (s CreateUdfFileResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateUdfFileResponse) GoString() string {
	return s.String()
}

func (s *CreateUdfFileResponse) SetRequestId(v string) *CreateUdfFileResponse {
	s.RequestId = &v
	return s
}

func (s *CreateUdfFileResponse) SetSuccess(v bool) *CreateUdfFileResponse {
	s.Success = &v
	return s
}

func (s *CreateUdfFileResponse) SetErrorCode(v string) *CreateUdfFileResponse {
	s.ErrorCode = &v
	return s
}

func (s *CreateUdfFileResponse) SetErrorMessage(v string) *CreateUdfFileResponse {
	s.ErrorMessage = &v
	return s
}

func (s *CreateUdfFileResponse) SetData(v int64) *CreateUdfFileResponse {
	s.Data = &v
	return s
}

func (s *CreateUdfFileResponse) SetHttpStatusCode(v int) *CreateUdfFileResponse {
	s.HttpStatusCode = &v
	return s
}

type ListFilesRequest struct {
	FileFolderPath    *string `json:"FileFolderPath,omitempty" xml:"FileFolderPath,omitempty"`
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	Keyword           *string `json:"Keyword,omitempty" xml:"Keyword,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	PageNumber        *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize          *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	UseType           *string `json:"UseType,omitempty" xml:"UseType,omitempty"`
	FileTypes         *string `json:"FileTypes,omitempty" xml:"FileTypes,omitempty"`
	Owner             *string `json:"Owner,omitempty" xml:"Owner,omitempty"`
}

func (s ListFilesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListFilesRequest) GoString() string {
	return s.String()
}

func (s *ListFilesRequest) SetFileFolderPath(v string) *ListFilesRequest {
	s.FileFolderPath = &v
	return s
}

func (s *ListFilesRequest) SetProjectId(v int64) *ListFilesRequest {
	s.ProjectId = &v
	return s
}

func (s *ListFilesRequest) SetKeyword(v string) *ListFilesRequest {
	s.Keyword = &v
	return s
}

func (s *ListFilesRequest) SetProjectIdentifier(v string) *ListFilesRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *ListFilesRequest) SetPageNumber(v int) *ListFilesRequest {
	s.PageNumber = &v
	return s
}

func (s *ListFilesRequest) SetPageSize(v int) *ListFilesRequest {
	s.PageSize = &v
	return s
}

func (s *ListFilesRequest) SetUseType(v string) *ListFilesRequest {
	s.UseType = &v
	return s
}

func (s *ListFilesRequest) SetFileTypes(v string) *ListFilesRequest {
	s.FileTypes = &v
	return s
}

func (s *ListFilesRequest) SetOwner(v string) *ListFilesRequest {
	s.Owner = &v
	return s
}

type ListFilesResponse struct {
	RequestId      *string                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                  `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                   `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *ListFilesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListFilesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListFilesResponse) GoString() string {
	return s.String()
}

func (s *ListFilesResponse) SetRequestId(v string) *ListFilesResponse {
	s.RequestId = &v
	return s
}

func (s *ListFilesResponse) SetSuccess(v bool) *ListFilesResponse {
	s.Success = &v
	return s
}

func (s *ListFilesResponse) SetErrorCode(v string) *ListFilesResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListFilesResponse) SetErrorMessage(v string) *ListFilesResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListFilesResponse) SetHttpStatusCode(v int) *ListFilesResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListFilesResponse) SetData(v *ListFilesResponseData) *ListFilesResponse {
	s.Data = v
	return s
}

type ListFilesResponseData struct {
	PageNumber *int                          `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                          `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                          `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Files      []*ListFilesResponseDataFiles `json:"Files,omitempty" xml:"Files,omitempty" require:"true" type:"Repeated"`
}

func (s ListFilesResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListFilesResponseData) GoString() string {
	return s.String()
}

func (s *ListFilesResponseData) SetPageNumber(v int) *ListFilesResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListFilesResponseData) SetPageSize(v int) *ListFilesResponseData {
	s.PageSize = &v
	return s
}

func (s *ListFilesResponseData) SetTotalCount(v int) *ListFilesResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListFilesResponseData) SetFiles(v []*ListFilesResponseDataFiles) *ListFilesResponseData {
	s.Files = v
	return s
}

type ListFilesResponseDataFiles struct {
	ConnectionName  *string `json:"ConnectionName,omitempty" xml:"ConnectionName,omitempty" require:"true"`
	ParentId        *int64  `json:"ParentId,omitempty" xml:"ParentId,omitempty" require:"true"`
	IsMaxCompute    *bool   `json:"IsMaxCompute,omitempty" xml:"IsMaxCompute,omitempty" require:"true"`
	CreateTime      *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateUser      *string `json:"CreateUser,omitempty" xml:"CreateUser,omitempty" require:"true"`
	BizId           *int64  `json:"BizId,omitempty" xml:"BizId,omitempty" require:"true"`
	FileFolderId    *string `json:"FileFolderId,omitempty" xml:"FileFolderId,omitempty" require:"true"`
	FileName        *string `json:"FileName,omitempty" xml:"FileName,omitempty" require:"true"`
	FileType        *int    `json:"FileType,omitempty" xml:"FileType,omitempty" require:"true"`
	UseType         *string `json:"UseType,omitempty" xml:"UseType,omitempty" require:"true"`
	FileDescription *string `json:"FileDescription,omitempty" xml:"FileDescription,omitempty" require:"true"`
	Content         *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
	NodeId          *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	CurrentVersion  *int    `json:"CurrentVersion,omitempty" xml:"CurrentVersion,omitempty" require:"true"`
	Owner           *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	LastEditUser    *string `json:"LastEditUser,omitempty" xml:"LastEditUser,omitempty" require:"true"`
	LastEditTime    *int64  `json:"LastEditTime,omitempty" xml:"LastEditTime,omitempty" require:"true"`
	CommitStatus    *int    `json:"CommitStatus,omitempty" xml:"CommitStatus,omitempty" require:"true"`
}

func (s ListFilesResponseDataFiles) String() string {
	return tea.Prettify(s)
}

func (s ListFilesResponseDataFiles) GoString() string {
	return s.String()
}

func (s *ListFilesResponseDataFiles) SetConnectionName(v string) *ListFilesResponseDataFiles {
	s.ConnectionName = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetParentId(v int64) *ListFilesResponseDataFiles {
	s.ParentId = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetIsMaxCompute(v bool) *ListFilesResponseDataFiles {
	s.IsMaxCompute = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetCreateTime(v int64) *ListFilesResponseDataFiles {
	s.CreateTime = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetCreateUser(v string) *ListFilesResponseDataFiles {
	s.CreateUser = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetBizId(v int64) *ListFilesResponseDataFiles {
	s.BizId = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetFileFolderId(v string) *ListFilesResponseDataFiles {
	s.FileFolderId = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetFileName(v string) *ListFilesResponseDataFiles {
	s.FileName = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetFileType(v int) *ListFilesResponseDataFiles {
	s.FileType = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetUseType(v string) *ListFilesResponseDataFiles {
	s.UseType = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetFileDescription(v string) *ListFilesResponseDataFiles {
	s.FileDescription = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetContent(v string) *ListFilesResponseDataFiles {
	s.Content = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetNodeId(v int64) *ListFilesResponseDataFiles {
	s.NodeId = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetCurrentVersion(v int) *ListFilesResponseDataFiles {
	s.CurrentVersion = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetOwner(v string) *ListFilesResponseDataFiles {
	s.Owner = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetLastEditUser(v string) *ListFilesResponseDataFiles {
	s.LastEditUser = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetLastEditTime(v int64) *ListFilesResponseDataFiles {
	s.LastEditTime = &v
	return s
}

func (s *ListFilesResponseDataFiles) SetCommitStatus(v int) *ListFilesResponseDataFiles {
	s.CommitStatus = &v
	return s
}

type ListDataServiceAuthorizedApisRequest struct {
	ProjectId      *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	TenantId       *int64  `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ApiNameKeyword *string `json:"ApiNameKeyword,omitempty" xml:"ApiNameKeyword,omitempty"`
}

func (s ListDataServiceAuthorizedApisRequest) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceAuthorizedApisRequest) GoString() string {
	return s.String()
}

func (s *ListDataServiceAuthorizedApisRequest) SetProjectId(v int64) *ListDataServiceAuthorizedApisRequest {
	s.ProjectId = &v
	return s
}

func (s *ListDataServiceAuthorizedApisRequest) SetPageNumber(v int) *ListDataServiceAuthorizedApisRequest {
	s.PageNumber = &v
	return s
}

func (s *ListDataServiceAuthorizedApisRequest) SetPageSize(v int) *ListDataServiceAuthorizedApisRequest {
	s.PageSize = &v
	return s
}

func (s *ListDataServiceAuthorizedApisRequest) SetTenantId(v int64) *ListDataServiceAuthorizedApisRequest {
	s.TenantId = &v
	return s
}

func (s *ListDataServiceAuthorizedApisRequest) SetApiNameKeyword(v string) *ListDataServiceAuthorizedApisRequest {
	s.ApiNameKeyword = &v
	return s
}

type ListDataServiceAuthorizedApisResponse struct {
	ErrorCode      *string                                    `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                                    `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                                       `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                                      `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *ListDataServiceAuthorizedApisResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListDataServiceAuthorizedApisResponse) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceAuthorizedApisResponse) GoString() string {
	return s.String()
}

func (s *ListDataServiceAuthorizedApisResponse) SetErrorCode(v string) *ListDataServiceAuthorizedApisResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponse) SetErrorMessage(v string) *ListDataServiceAuthorizedApisResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponse) SetHttpStatusCode(v int) *ListDataServiceAuthorizedApisResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponse) SetRequestId(v string) *ListDataServiceAuthorizedApisResponse {
	s.RequestId = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponse) SetSuccess(v bool) *ListDataServiceAuthorizedApisResponse {
	s.Success = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponse) SetData(v *ListDataServiceAuthorizedApisResponseData) *ListDataServiceAuthorizedApisResponse {
	s.Data = v
	return s
}

type ListDataServiceAuthorizedApisResponseData struct {
	PageNumber        *int                                                          `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize          *int                                                          `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount        *int                                                          `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	ApiAuthorizedList []*ListDataServiceAuthorizedApisResponseDataApiAuthorizedList `json:"ApiAuthorizedList,omitempty" xml:"ApiAuthorizedList,omitempty" require:"true" type:"Repeated"`
}

func (s ListDataServiceAuthorizedApisResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceAuthorizedApisResponseData) GoString() string {
	return s.String()
}

func (s *ListDataServiceAuthorizedApisResponseData) SetPageNumber(v int) *ListDataServiceAuthorizedApisResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseData) SetPageSize(v int) *ListDataServiceAuthorizedApisResponseData {
	s.PageSize = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseData) SetTotalCount(v int) *ListDataServiceAuthorizedApisResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseData) SetApiAuthorizedList(v []*ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) *ListDataServiceAuthorizedApisResponseData {
	s.ApiAuthorizedList = v
	return s
}

type ListDataServiceAuthorizedApisResponseDataApiAuthorizedList struct {
	ApiId            *int64  `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName          *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	ApiPath          *string `json:"ApiPath,omitempty" xml:"ApiPath,omitempty" require:"true"`
	ApiStatus        *int    `json:"ApiStatus,omitempty" xml:"ApiStatus,omitempty" require:"true"`
	CreatedTime      *string `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	CreatorId        *string `json:"CreatorId,omitempty" xml:"CreatorId,omitempty" require:"true"`
	GrantCreatedTime *string `json:"GrantCreatedTime,omitempty" xml:"GrantCreatedTime,omitempty" require:"true"`
	GrantEndTime     *string `json:"GrantEndTime,omitempty" xml:"GrantEndTime,omitempty" require:"true"`
	GrantOperatorId  *string `json:"GrantOperatorId,omitempty" xml:"GrantOperatorId,omitempty" require:"true"`
	GroupId          *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ModifiedTime     *string `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	ProjectId        *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	TenantId         *int64  `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
}

func (s ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) GoString() string {
	return s.String()
}

func (s *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) SetApiId(v int64) *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList {
	s.ApiId = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) SetApiName(v string) *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList {
	s.ApiName = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) SetApiPath(v string) *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList {
	s.ApiPath = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) SetApiStatus(v int) *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList {
	s.ApiStatus = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) SetCreatedTime(v string) *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList {
	s.CreatedTime = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) SetCreatorId(v string) *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList {
	s.CreatorId = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) SetGrantCreatedTime(v string) *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList {
	s.GrantCreatedTime = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) SetGrantEndTime(v string) *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList {
	s.GrantEndTime = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) SetGrantOperatorId(v string) *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList {
	s.GrantOperatorId = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) SetGroupId(v string) *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList {
	s.GroupId = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) SetModifiedTime(v string) *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList {
	s.ModifiedTime = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) SetProjectId(v int64) *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList {
	s.ProjectId = &v
	return s
}

func (s *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList) SetTenantId(v int64) *ListDataServiceAuthorizedApisResponseDataApiAuthorizedList {
	s.TenantId = &v
	return s
}

type UpdateFileRequest struct {
	FileFolderPath          *string `json:"FileFolderPath,omitempty" xml:"FileFolderPath,omitempty"`
	ProjectId               *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	FileName                *string `json:"FileName,omitempty" xml:"FileName,omitempty"`
	FileDescription         *string `json:"FileDescription,omitempty" xml:"FileDescription,omitempty"`
	Content                 *string `json:"Content,omitempty" xml:"Content,omitempty"`
	AutoRerunTimes          *int    `json:"AutoRerunTimes,omitempty" xml:"AutoRerunTimes,omitempty"`
	AutoRerunIntervalMillis *int    `json:"AutoRerunIntervalMillis,omitempty" xml:"AutoRerunIntervalMillis,omitempty"`
	RerunMode               *string `json:"RerunMode,omitempty" xml:"RerunMode,omitempty"`
	Stop                    *bool   `json:"Stop,omitempty" xml:"Stop,omitempty"`
	ParaValue               *string `json:"ParaValue,omitempty" xml:"ParaValue,omitempty"`
	StartEffectDate         *int64  `json:"StartEffectDate,omitempty" xml:"StartEffectDate,omitempty"`
	EndEffectDate           *int64  `json:"EndEffectDate,omitempty" xml:"EndEffectDate,omitempty"`
	CronExpress             *string `json:"CronExpress,omitempty" xml:"CronExpress,omitempty"`
	CycleType               *string `json:"CycleType,omitempty" xml:"CycleType,omitempty"`
	DependentType           *string `json:"DependentType,omitempty" xml:"DependentType,omitempty"`
	DependentNodeIdList     *string `json:"DependentNodeIdList,omitempty" xml:"DependentNodeIdList,omitempty"`
	InputList               *string `json:"InputList,omitempty" xml:"InputList,omitempty"`
	ProjectIdentifier       *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	FileId                  *int64  `json:"FileId,omitempty" xml:"FileId,omitempty" require:"true"`
	OutputList              *string `json:"OutputList,omitempty" xml:"OutputList,omitempty"`
}

func (s UpdateFileRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateFileRequest) GoString() string {
	return s.String()
}

func (s *UpdateFileRequest) SetFileFolderPath(v string) *UpdateFileRequest {
	s.FileFolderPath = &v
	return s
}

func (s *UpdateFileRequest) SetProjectId(v int64) *UpdateFileRequest {
	s.ProjectId = &v
	return s
}

func (s *UpdateFileRequest) SetFileName(v string) *UpdateFileRequest {
	s.FileName = &v
	return s
}

func (s *UpdateFileRequest) SetFileDescription(v string) *UpdateFileRequest {
	s.FileDescription = &v
	return s
}

func (s *UpdateFileRequest) SetContent(v string) *UpdateFileRequest {
	s.Content = &v
	return s
}

func (s *UpdateFileRequest) SetAutoRerunTimes(v int) *UpdateFileRequest {
	s.AutoRerunTimes = &v
	return s
}

func (s *UpdateFileRequest) SetAutoRerunIntervalMillis(v int) *UpdateFileRequest {
	s.AutoRerunIntervalMillis = &v
	return s
}

func (s *UpdateFileRequest) SetRerunMode(v string) *UpdateFileRequest {
	s.RerunMode = &v
	return s
}

func (s *UpdateFileRequest) SetStop(v bool) *UpdateFileRequest {
	s.Stop = &v
	return s
}

func (s *UpdateFileRequest) SetParaValue(v string) *UpdateFileRequest {
	s.ParaValue = &v
	return s
}

func (s *UpdateFileRequest) SetStartEffectDate(v int64) *UpdateFileRequest {
	s.StartEffectDate = &v
	return s
}

func (s *UpdateFileRequest) SetEndEffectDate(v int64) *UpdateFileRequest {
	s.EndEffectDate = &v
	return s
}

func (s *UpdateFileRequest) SetCronExpress(v string) *UpdateFileRequest {
	s.CronExpress = &v
	return s
}

func (s *UpdateFileRequest) SetCycleType(v string) *UpdateFileRequest {
	s.CycleType = &v
	return s
}

func (s *UpdateFileRequest) SetDependentType(v string) *UpdateFileRequest {
	s.DependentType = &v
	return s
}

func (s *UpdateFileRequest) SetDependentNodeIdList(v string) *UpdateFileRequest {
	s.DependentNodeIdList = &v
	return s
}

func (s *UpdateFileRequest) SetInputList(v string) *UpdateFileRequest {
	s.InputList = &v
	return s
}

func (s *UpdateFileRequest) SetProjectIdentifier(v string) *UpdateFileRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *UpdateFileRequest) SetFileId(v int64) *UpdateFileRequest {
	s.FileId = &v
	return s
}

func (s *UpdateFileRequest) SetOutputList(v string) *UpdateFileRequest {
	s.OutputList = &v
	return s
}

type UpdateFileResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
}

func (s UpdateFileResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateFileResponse) GoString() string {
	return s.String()
}

func (s *UpdateFileResponse) SetRequestId(v string) *UpdateFileResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateFileResponse) SetSuccess(v bool) *UpdateFileResponse {
	s.Success = &v
	return s
}

func (s *UpdateFileResponse) SetErrorCode(v string) *UpdateFileResponse {
	s.ErrorCode = &v
	return s
}

func (s *UpdateFileResponse) SetErrorMessage(v string) *UpdateFileResponse {
	s.ErrorMessage = &v
	return s
}

func (s *UpdateFileResponse) SetHttpStatusCode(v int) *UpdateFileResponse {
	s.HttpStatusCode = &v
	return s
}

type DeleteFolderRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	FolderId          *string `json:"FolderId,omitempty" xml:"FolderId,omitempty" require:"true"`
}

func (s DeleteFolderRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteFolderRequest) GoString() string {
	return s.String()
}

func (s *DeleteFolderRequest) SetProjectId(v int64) *DeleteFolderRequest {
	s.ProjectId = &v
	return s
}

func (s *DeleteFolderRequest) SetProjectIdentifier(v string) *DeleteFolderRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *DeleteFolderRequest) SetFolderId(v string) *DeleteFolderRequest {
	s.FolderId = &v
	return s
}

type DeleteFolderResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
}

func (s DeleteFolderResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteFolderResponse) GoString() string {
	return s.String()
}

func (s *DeleteFolderResponse) SetRequestId(v string) *DeleteFolderResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteFolderResponse) SetSuccess(v bool) *DeleteFolderResponse {
	s.Success = &v
	return s
}

func (s *DeleteFolderResponse) SetErrorCode(v string) *DeleteFolderResponse {
	s.ErrorCode = &v
	return s
}

func (s *DeleteFolderResponse) SetErrorMessage(v string) *DeleteFolderResponse {
	s.ErrorMessage = &v
	return s
}

func (s *DeleteFolderResponse) SetHttpStatusCode(v int) *DeleteFolderResponse {
	s.HttpStatusCode = &v
	return s
}

type ListFoldersRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	ParentFolderPath  *string `json:"ParentFolderPath,omitempty" xml:"ParentFolderPath,omitempty" require:"true"`
	PageNumber        *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize          *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
}

func (s ListFoldersRequest) String() string {
	return tea.Prettify(s)
}

func (s ListFoldersRequest) GoString() string {
	return s.String()
}

func (s *ListFoldersRequest) SetProjectId(v int64) *ListFoldersRequest {
	s.ProjectId = &v
	return s
}

func (s *ListFoldersRequest) SetProjectIdentifier(v string) *ListFoldersRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *ListFoldersRequest) SetParentFolderPath(v string) *ListFoldersRequest {
	s.ParentFolderPath = &v
	return s
}

func (s *ListFoldersRequest) SetPageNumber(v int) *ListFoldersRequest {
	s.PageNumber = &v
	return s
}

func (s *ListFoldersRequest) SetPageSize(v int) *ListFoldersRequest {
	s.PageSize = &v
	return s
}

type ListFoldersResponse struct {
	RequestId      *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                    `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                  `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                  `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                     `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *ListFoldersResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListFoldersResponse) String() string {
	return tea.Prettify(s)
}

func (s ListFoldersResponse) GoString() string {
	return s.String()
}

func (s *ListFoldersResponse) SetRequestId(v string) *ListFoldersResponse {
	s.RequestId = &v
	return s
}

func (s *ListFoldersResponse) SetSuccess(v bool) *ListFoldersResponse {
	s.Success = &v
	return s
}

func (s *ListFoldersResponse) SetErrorCode(v string) *ListFoldersResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListFoldersResponse) SetErrorMessage(v string) *ListFoldersResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListFoldersResponse) SetHttpStatusCode(v int) *ListFoldersResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListFoldersResponse) SetData(v *ListFoldersResponseData) *ListFoldersResponse {
	s.Data = v
	return s
}

type ListFoldersResponseData struct {
	PageNumber *int                              `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                              `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                              `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Folders    []*ListFoldersResponseDataFolders `json:"Folders,omitempty" xml:"Folders,omitempty" require:"true" type:"Repeated"`
}

func (s ListFoldersResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListFoldersResponseData) GoString() string {
	return s.String()
}

func (s *ListFoldersResponseData) SetPageNumber(v int) *ListFoldersResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListFoldersResponseData) SetPageSize(v int) *ListFoldersResponseData {
	s.PageSize = &v
	return s
}

func (s *ListFoldersResponseData) SetTotalCount(v int) *ListFoldersResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListFoldersResponseData) SetFolders(v []*ListFoldersResponseDataFolders) *ListFoldersResponseData {
	s.Folders = v
	return s
}

type ListFoldersResponseDataFolders struct {
	FolderId   *string `json:"FolderId,omitempty" xml:"FolderId,omitempty" require:"true"`
	FolderPath *string `json:"FolderPath,omitempty" xml:"FolderPath,omitempty" require:"true"`
}

func (s ListFoldersResponseDataFolders) String() string {
	return tea.Prettify(s)
}

func (s ListFoldersResponseDataFolders) GoString() string {
	return s.String()
}

func (s *ListFoldersResponseDataFolders) SetFolderId(v string) *ListFoldersResponseDataFolders {
	s.FolderId = &v
	return s
}

func (s *ListFoldersResponseDataFolders) SetFolderPath(v string) *ListFoldersResponseDataFolders {
	s.FolderPath = &v
	return s
}

type CheckMetaPartitionRequest struct {
	TableGuid *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
	Partition *string `json:"Partition,omitempty" xml:"Partition,omitempty" require:"true"`
}

func (s CheckMetaPartitionRequest) String() string {
	return tea.Prettify(s)
}

func (s CheckMetaPartitionRequest) GoString() string {
	return s.String()
}

func (s *CheckMetaPartitionRequest) SetTableGuid(v string) *CheckMetaPartitionRequest {
	s.TableGuid = &v
	return s
}

func (s *CheckMetaPartitionRequest) SetPartition(v string) *CheckMetaPartitionRequest {
	s.Partition = &v
	return s
}

type CheckMetaPartitionResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s CheckMetaPartitionResponse) String() string {
	return tea.Prettify(s)
}

func (s CheckMetaPartitionResponse) GoString() string {
	return s.String()
}

func (s *CheckMetaPartitionResponse) SetRequestId(v string) *CheckMetaPartitionResponse {
	s.RequestId = &v
	return s
}

func (s *CheckMetaPartitionResponse) SetErrorCode(v string) *CheckMetaPartitionResponse {
	s.ErrorCode = &v
	return s
}

func (s *CheckMetaPartitionResponse) SetErrorMessage(v string) *CheckMetaPartitionResponse {
	s.ErrorMessage = &v
	return s
}

func (s *CheckMetaPartitionResponse) SetHttpStatusCode(v int) *CheckMetaPartitionResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *CheckMetaPartitionResponse) SetSuccess(v bool) *CheckMetaPartitionResponse {
	s.Success = &v
	return s
}

func (s *CheckMetaPartitionResponse) SetData(v bool) *CheckMetaPartitionResponse {
	s.Data = &v
	return s
}

type UpdateFolderRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	FolderId          *string `json:"FolderId,omitempty" xml:"FolderId,omitempty" require:"true"`
	FolderName        *string `json:"FolderName,omitempty" xml:"FolderName,omitempty" require:"true"`
}

func (s UpdateFolderRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateFolderRequest) GoString() string {
	return s.String()
}

func (s *UpdateFolderRequest) SetProjectId(v int64) *UpdateFolderRequest {
	s.ProjectId = &v
	return s
}

func (s *UpdateFolderRequest) SetProjectIdentifier(v string) *UpdateFolderRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *UpdateFolderRequest) SetFolderId(v string) *UpdateFolderRequest {
	s.FolderId = &v
	return s
}

func (s *UpdateFolderRequest) SetFolderName(v string) *UpdateFolderRequest {
	s.FolderName = &v
	return s
}

type UpdateFolderResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
}

func (s UpdateFolderResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateFolderResponse) GoString() string {
	return s.String()
}

func (s *UpdateFolderResponse) SetRequestId(v string) *UpdateFolderResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateFolderResponse) SetSuccess(v bool) *UpdateFolderResponse {
	s.Success = &v
	return s
}

func (s *UpdateFolderResponse) SetErrorCode(v string) *UpdateFolderResponse {
	s.ErrorCode = &v
	return s
}

func (s *UpdateFolderResponse) SetErrorMessage(v string) *UpdateFolderResponse {
	s.ErrorMessage = &v
	return s
}

func (s *UpdateFolderResponse) SetHttpStatusCode(v int) *UpdateFolderResponse {
	s.HttpStatusCode = &v
	return s
}

type DeleteRemindRequest struct {
	RemindId *int64 `json:"RemindId,omitempty" xml:"RemindId,omitempty" require:"true"`
}

func (s DeleteRemindRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteRemindRequest) GoString() string {
	return s.String()
}

func (s *DeleteRemindRequest) SetRemindId(v int64) *DeleteRemindRequest {
	s.RemindId = &v
	return s
}

type DeleteRemindResponse struct {
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s DeleteRemindResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteRemindResponse) GoString() string {
	return s.String()
}

func (s *DeleteRemindResponse) SetSuccess(v bool) *DeleteRemindResponse {
	s.Success = &v
	return s
}

func (s *DeleteRemindResponse) SetErrorCode(v string) *DeleteRemindResponse {
	s.ErrorCode = &v
	return s
}

func (s *DeleteRemindResponse) SetErrorMessage(v string) *DeleteRemindResponse {
	s.ErrorMessage = &v
	return s
}

func (s *DeleteRemindResponse) SetHttpStatusCode(v int) *DeleteRemindResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *DeleteRemindResponse) SetRequestId(v string) *DeleteRemindResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteRemindResponse) SetData(v bool) *DeleteRemindResponse {
	s.Data = &v
	return s
}

type AddToMetaCategoryRequest struct {
	CategoryId *int64  `json:"CategoryId,omitempty" xml:"CategoryId,omitempty" require:"true"`
	TableGuid  *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
}

func (s AddToMetaCategoryRequest) String() string {
	return tea.Prettify(s)
}

func (s AddToMetaCategoryRequest) GoString() string {
	return s.String()
}

func (s *AddToMetaCategoryRequest) SetCategoryId(v int64) *AddToMetaCategoryRequest {
	s.CategoryId = &v
	return s
}

func (s *AddToMetaCategoryRequest) SetTableGuid(v string) *AddToMetaCategoryRequest {
	s.TableGuid = &v
	return s
}

type AddToMetaCategoryResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s AddToMetaCategoryResponse) String() string {
	return tea.Prettify(s)
}

func (s AddToMetaCategoryResponse) GoString() string {
	return s.String()
}

func (s *AddToMetaCategoryResponse) SetRequestId(v string) *AddToMetaCategoryResponse {
	s.RequestId = &v
	return s
}

func (s *AddToMetaCategoryResponse) SetErrorCode(v string) *AddToMetaCategoryResponse {
	s.ErrorCode = &v
	return s
}

func (s *AddToMetaCategoryResponse) SetErrorMessage(v string) *AddToMetaCategoryResponse {
	s.ErrorMessage = &v
	return s
}

func (s *AddToMetaCategoryResponse) SetHttpStatusCode(v int) *AddToMetaCategoryResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *AddToMetaCategoryResponse) SetSuccess(v bool) *AddToMetaCategoryResponse {
	s.Success = &v
	return s
}

func (s *AddToMetaCategoryResponse) SetData(v bool) *AddToMetaCategoryResponse {
	s.Data = &v
	return s
}

type ListInstancesRequest struct {
	ProjectEnv  *string `json:"ProjectEnv,omitempty" xml:"ProjectEnv,omitempty" require:"true"`
	NodeId      *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty"`
	NodeName    *string `json:"NodeName,omitempty" xml:"NodeName,omitempty"`
	Owner       *string `json:"Owner,omitempty" xml:"Owner,omitempty"`
	ProjectId   *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	BizName     *string `json:"BizName,omitempty" xml:"BizName,omitempty"`
	ProgramType *string `json:"ProgramType,omitempty" xml:"ProgramType,omitempty"`
	PageNumber  *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize    *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s ListInstancesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListInstancesRequest) GoString() string {
	return s.String()
}

func (s *ListInstancesRequest) SetProjectEnv(v string) *ListInstancesRequest {
	s.ProjectEnv = &v
	return s
}

func (s *ListInstancesRequest) SetNodeId(v int64) *ListInstancesRequest {
	s.NodeId = &v
	return s
}

func (s *ListInstancesRequest) SetNodeName(v string) *ListInstancesRequest {
	s.NodeName = &v
	return s
}

func (s *ListInstancesRequest) SetOwner(v string) *ListInstancesRequest {
	s.Owner = &v
	return s
}

func (s *ListInstancesRequest) SetProjectId(v int64) *ListInstancesRequest {
	s.ProjectId = &v
	return s
}

func (s *ListInstancesRequest) SetBizName(v string) *ListInstancesRequest {
	s.BizName = &v
	return s
}

func (s *ListInstancesRequest) SetProgramType(v string) *ListInstancesRequest {
	s.ProgramType = &v
	return s
}

func (s *ListInstancesRequest) SetPageNumber(v int) *ListInstancesRequest {
	s.PageNumber = &v
	return s
}

func (s *ListInstancesRequest) SetPageSize(v int) *ListInstancesRequest {
	s.PageSize = &v
	return s
}

type ListInstancesResponse struct {
	Success        *bool                      `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	HttpStatusCode *int                       `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	ErrorCode      *string                    `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                    `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	RequestId      *string                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *ListInstancesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListInstancesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListInstancesResponse) GoString() string {
	return s.String()
}

func (s *ListInstancesResponse) SetSuccess(v bool) *ListInstancesResponse {
	s.Success = &v
	return s
}

func (s *ListInstancesResponse) SetHttpStatusCode(v int) *ListInstancesResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListInstancesResponse) SetErrorCode(v string) *ListInstancesResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListInstancesResponse) SetErrorMessage(v string) *ListInstancesResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListInstancesResponse) SetRequestId(v string) *ListInstancesResponse {
	s.RequestId = &v
	return s
}

func (s *ListInstancesResponse) SetData(v *ListInstancesResponseData) *ListInstancesResponse {
	s.Data = v
	return s
}

type ListInstancesResponseData struct {
	PageNumber *int                                  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                  `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                                  `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Instances  []*ListInstancesResponseDataInstances `json:"Instances,omitempty" xml:"Instances,omitempty" require:"true" type:"Repeated"`
}

func (s ListInstancesResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListInstancesResponseData) GoString() string {
	return s.String()
}

func (s *ListInstancesResponseData) SetPageNumber(v int) *ListInstancesResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListInstancesResponseData) SetPageSize(v int) *ListInstancesResponseData {
	s.PageSize = &v
	return s
}

func (s *ListInstancesResponseData) SetTotalCount(v int) *ListInstancesResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListInstancesResponseData) SetInstances(v []*ListInstancesResponseDataInstances) *ListInstancesResponseData {
	s.Instances = v
	return s
}

type ListInstancesResponseDataInstances struct {
	NodeId            *int    `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	InstanceId        *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	DagId             *int    `json:"DagId,omitempty" xml:"DagId,omitempty" require:"true"`
	DagType           *string `json:"DagType,omitempty" xml:"DagType,omitempty" require:"true"`
	Status            *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Bizdate           *int64  `json:"Bizdate,omitempty" xml:"Bizdate,omitempty" require:"true"`
	CycTime           *int64  `json:"CycTime,omitempty" xml:"CycTime,omitempty" require:"true"`
	CreateTime        *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	ModifyTime        *int64  `json:"ModifyTime,omitempty" xml:"ModifyTime,omitempty" require:"true"`
	NodeName          *string `json:"NodeName,omitempty" xml:"NodeName,omitempty" require:"true"`
	BeginWaitTimeTime *int64  `json:"BeginWaitTimeTime,omitempty" xml:"BeginWaitTimeTime,omitempty" require:"true"`
	BeginWaitResTime  *int64  `json:"BeginWaitResTime,omitempty" xml:"BeginWaitResTime,omitempty" require:"true"`
	BeginRunningTime  *int64  `json:"BeginRunningTime,omitempty" xml:"BeginRunningTime,omitempty" require:"true"`
	ParamValues       *string `json:"ParamValues,omitempty" xml:"ParamValues,omitempty" require:"true"`
	FinishTime        *int64  `json:"FinishTime,omitempty" xml:"FinishTime,omitempty" require:"true"`
}

func (s ListInstancesResponseDataInstances) String() string {
	return tea.Prettify(s)
}

func (s ListInstancesResponseDataInstances) GoString() string {
	return s.String()
}

func (s *ListInstancesResponseDataInstances) SetNodeId(v int) *ListInstancesResponseDataInstances {
	s.NodeId = &v
	return s
}

func (s *ListInstancesResponseDataInstances) SetInstanceId(v int64) *ListInstancesResponseDataInstances {
	s.InstanceId = &v
	return s
}

func (s *ListInstancesResponseDataInstances) SetDagId(v int) *ListInstancesResponseDataInstances {
	s.DagId = &v
	return s
}

func (s *ListInstancesResponseDataInstances) SetDagType(v string) *ListInstancesResponseDataInstances {
	s.DagType = &v
	return s
}

func (s *ListInstancesResponseDataInstances) SetStatus(v string) *ListInstancesResponseDataInstances {
	s.Status = &v
	return s
}

func (s *ListInstancesResponseDataInstances) SetBizdate(v int64) *ListInstancesResponseDataInstances {
	s.Bizdate = &v
	return s
}

func (s *ListInstancesResponseDataInstances) SetCycTime(v int64) *ListInstancesResponseDataInstances {
	s.CycTime = &v
	return s
}

func (s *ListInstancesResponseDataInstances) SetCreateTime(v int64) *ListInstancesResponseDataInstances {
	s.CreateTime = &v
	return s
}

func (s *ListInstancesResponseDataInstances) SetModifyTime(v int64) *ListInstancesResponseDataInstances {
	s.ModifyTime = &v
	return s
}

func (s *ListInstancesResponseDataInstances) SetNodeName(v string) *ListInstancesResponseDataInstances {
	s.NodeName = &v
	return s
}

func (s *ListInstancesResponseDataInstances) SetBeginWaitTimeTime(v int64) *ListInstancesResponseDataInstances {
	s.BeginWaitTimeTime = &v
	return s
}

func (s *ListInstancesResponseDataInstances) SetBeginWaitResTime(v int64) *ListInstancesResponseDataInstances {
	s.BeginWaitResTime = &v
	return s
}

func (s *ListInstancesResponseDataInstances) SetBeginRunningTime(v int64) *ListInstancesResponseDataInstances {
	s.BeginRunningTime = &v
	return s
}

func (s *ListInstancesResponseDataInstances) SetParamValues(v string) *ListInstancesResponseDataInstances {
	s.ParamValues = &v
	return s
}

func (s *ListInstancesResponseDataInstances) SetFinishTime(v int64) *ListInstancesResponseDataInstances {
	s.FinishTime = &v
	return s
}

type SetSuccessInstanceRequest struct {
	InstanceId *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	ProjectEnv *string `json:"ProjectEnv,omitempty" xml:"ProjectEnv,omitempty" require:"true"`
}

func (s SetSuccessInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s SetSuccessInstanceRequest) GoString() string {
	return s.String()
}

func (s *SetSuccessInstanceRequest) SetInstanceId(v int64) *SetSuccessInstanceRequest {
	s.InstanceId = &v
	return s
}

func (s *SetSuccessInstanceRequest) SetProjectEnv(v string) *SetSuccessInstanceRequest {
	s.ProjectEnv = &v
	return s
}

type SetSuccessInstanceResponse struct {
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s SetSuccessInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s SetSuccessInstanceResponse) GoString() string {
	return s.String()
}

func (s *SetSuccessInstanceResponse) SetErrorCode(v string) *SetSuccessInstanceResponse {
	s.ErrorCode = &v
	return s
}

func (s *SetSuccessInstanceResponse) SetErrorMessage(v string) *SetSuccessInstanceResponse {
	s.ErrorMessage = &v
	return s
}

func (s *SetSuccessInstanceResponse) SetHttpStatusCode(v int) *SetSuccessInstanceResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *SetSuccessInstanceResponse) SetRequestId(v string) *SetSuccessInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *SetSuccessInstanceResponse) SetSuccess(v bool) *SetSuccessInstanceResponse {
	s.Success = &v
	return s
}

func (s *SetSuccessInstanceResponse) SetData(v bool) *SetSuccessInstanceResponse {
	s.Data = &v
	return s
}

type CreateFileRequest struct {
	FileFolderPath          *string `json:"FileFolderPath,omitempty" xml:"FileFolderPath,omitempty"`
	ProjectId               *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	FileName                *string `json:"FileName,omitempty" xml:"FileName,omitempty" require:"true"`
	FileDescription         *string `json:"FileDescription,omitempty" xml:"FileDescription,omitempty"`
	FileType                *int    `json:"FileType,omitempty" xml:"FileType,omitempty" require:"true"`
	Owner                   *string `json:"Owner,omitempty" xml:"Owner,omitempty"`
	Content                 *string `json:"Content,omitempty" xml:"Content,omitempty"`
	AutoRerunTimes          *int    `json:"AutoRerunTimes,omitempty" xml:"AutoRerunTimes,omitempty"`
	AutoRerunIntervalMillis *int    `json:"AutoRerunIntervalMillis,omitempty" xml:"AutoRerunIntervalMillis,omitempty"`
	RerunMode               *string `json:"RerunMode,omitempty" xml:"RerunMode,omitempty"`
	Stop                    *bool   `json:"Stop,omitempty" xml:"Stop,omitempty"`
	ParaValue               *string `json:"ParaValue,omitempty" xml:"ParaValue,omitempty"`
	StartEffectDate         *int64  `json:"StartEffectDate,omitempty" xml:"StartEffectDate,omitempty"`
	EndEffectDate           *int64  `json:"EndEffectDate,omitempty" xml:"EndEffectDate,omitempty"`
	CronExpress             *string `json:"CronExpress,omitempty" xml:"CronExpress,omitempty"`
	CycleType               *string `json:"CycleType,omitempty" xml:"CycleType,omitempty"`
	DependentType           *string `json:"DependentType,omitempty" xml:"DependentType,omitempty"`
	DependentNodeIdList     *string `json:"DependentNodeIdList,omitempty" xml:"DependentNodeIdList,omitempty"`
	InputList               *string `json:"InputList,omitempty" xml:"InputList,omitempty" require:"true"`
	ProjectIdentifier       *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
}

func (s CreateFileRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateFileRequest) GoString() string {
	return s.String()
}

func (s *CreateFileRequest) SetFileFolderPath(v string) *CreateFileRequest {
	s.FileFolderPath = &v
	return s
}

func (s *CreateFileRequest) SetProjectId(v int64) *CreateFileRequest {
	s.ProjectId = &v
	return s
}

func (s *CreateFileRequest) SetFileName(v string) *CreateFileRequest {
	s.FileName = &v
	return s
}

func (s *CreateFileRequest) SetFileDescription(v string) *CreateFileRequest {
	s.FileDescription = &v
	return s
}

func (s *CreateFileRequest) SetFileType(v int) *CreateFileRequest {
	s.FileType = &v
	return s
}

func (s *CreateFileRequest) SetOwner(v string) *CreateFileRequest {
	s.Owner = &v
	return s
}

func (s *CreateFileRequest) SetContent(v string) *CreateFileRequest {
	s.Content = &v
	return s
}

func (s *CreateFileRequest) SetAutoRerunTimes(v int) *CreateFileRequest {
	s.AutoRerunTimes = &v
	return s
}

func (s *CreateFileRequest) SetAutoRerunIntervalMillis(v int) *CreateFileRequest {
	s.AutoRerunIntervalMillis = &v
	return s
}

func (s *CreateFileRequest) SetRerunMode(v string) *CreateFileRequest {
	s.RerunMode = &v
	return s
}

func (s *CreateFileRequest) SetStop(v bool) *CreateFileRequest {
	s.Stop = &v
	return s
}

func (s *CreateFileRequest) SetParaValue(v string) *CreateFileRequest {
	s.ParaValue = &v
	return s
}

func (s *CreateFileRequest) SetStartEffectDate(v int64) *CreateFileRequest {
	s.StartEffectDate = &v
	return s
}

func (s *CreateFileRequest) SetEndEffectDate(v int64) *CreateFileRequest {
	s.EndEffectDate = &v
	return s
}

func (s *CreateFileRequest) SetCronExpress(v string) *CreateFileRequest {
	s.CronExpress = &v
	return s
}

func (s *CreateFileRequest) SetCycleType(v string) *CreateFileRequest {
	s.CycleType = &v
	return s
}

func (s *CreateFileRequest) SetDependentType(v string) *CreateFileRequest {
	s.DependentType = &v
	return s
}

func (s *CreateFileRequest) SetDependentNodeIdList(v string) *CreateFileRequest {
	s.DependentNodeIdList = &v
	return s
}

func (s *CreateFileRequest) SetInputList(v string) *CreateFileRequest {
	s.InputList = &v
	return s
}

func (s *CreateFileRequest) SetProjectIdentifier(v string) *CreateFileRequest {
	s.ProjectIdentifier = &v
	return s
}

type CreateFileResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	Data           *int64  `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
}

func (s CreateFileResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateFileResponse) GoString() string {
	return s.String()
}

func (s *CreateFileResponse) SetRequestId(v string) *CreateFileResponse {
	s.RequestId = &v
	return s
}

func (s *CreateFileResponse) SetSuccess(v bool) *CreateFileResponse {
	s.Success = &v
	return s
}

func (s *CreateFileResponse) SetErrorCode(v string) *CreateFileResponse {
	s.ErrorCode = &v
	return s
}

func (s *CreateFileResponse) SetErrorMessage(v string) *CreateFileResponse {
	s.ErrorMessage = &v
	return s
}

func (s *CreateFileResponse) SetData(v int64) *CreateFileResponse {
	s.Data = &v
	return s
}

func (s *CreateFileResponse) SetHttpStatusCode(v int) *CreateFileResponse {
	s.HttpStatusCode = &v
	return s
}

type StopInstanceRequest struct {
	InstanceId *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	ProjectEnv *string `json:"ProjectEnv,omitempty" xml:"ProjectEnv,omitempty" require:"true"`
}

func (s StopInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s StopInstanceRequest) GoString() string {
	return s.String()
}

func (s *StopInstanceRequest) SetInstanceId(v int64) *StopInstanceRequest {
	s.InstanceId = &v
	return s
}

func (s *StopInstanceRequest) SetProjectEnv(v string) *StopInstanceRequest {
	s.ProjectEnv = &v
	return s
}

type StopInstanceResponse struct {
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s StopInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s StopInstanceResponse) GoString() string {
	return s.String()
}

func (s *StopInstanceResponse) SetErrorCode(v string) *StopInstanceResponse {
	s.ErrorCode = &v
	return s
}

func (s *StopInstanceResponse) SetErrorMessage(v string) *StopInstanceResponse {
	s.ErrorMessage = &v
	return s
}

func (s *StopInstanceResponse) SetHttpStatusCode(v int) *StopInstanceResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *StopInstanceResponse) SetRequestId(v string) *StopInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *StopInstanceResponse) SetSuccess(v bool) *StopInstanceResponse {
	s.Success = &v
	return s
}

func (s *StopInstanceResponse) SetData(v bool) *StopInstanceResponse {
	s.Data = &v
	return s
}

type ResumeInstanceRequest struct {
	InstanceId *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	ProjectEnv *string `json:"ProjectEnv,omitempty" xml:"ProjectEnv,omitempty" require:"true"`
}

func (s ResumeInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s ResumeInstanceRequest) GoString() string {
	return s.String()
}

func (s *ResumeInstanceRequest) SetInstanceId(v int64) *ResumeInstanceRequest {
	s.InstanceId = &v
	return s
}

func (s *ResumeInstanceRequest) SetProjectEnv(v string) *ResumeInstanceRequest {
	s.ProjectEnv = &v
	return s
}

type ResumeInstanceResponse struct {
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s ResumeInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s ResumeInstanceResponse) GoString() string {
	return s.String()
}

func (s *ResumeInstanceResponse) SetErrorCode(v string) *ResumeInstanceResponse {
	s.ErrorCode = &v
	return s
}

func (s *ResumeInstanceResponse) SetErrorMessage(v string) *ResumeInstanceResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ResumeInstanceResponse) SetHttpStatusCode(v int) *ResumeInstanceResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ResumeInstanceResponse) SetRequestId(v string) *ResumeInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *ResumeInstanceResponse) SetSuccess(v bool) *ResumeInstanceResponse {
	s.Success = &v
	return s
}

func (s *ResumeInstanceResponse) SetData(v bool) *ResumeInstanceResponse {
	s.Data = &v
	return s
}

type SuspendInstanceRequest struct {
	InstanceId *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	ProjectEnv *string `json:"ProjectEnv,omitempty" xml:"ProjectEnv,omitempty" require:"true"`
}

func (s SuspendInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s SuspendInstanceRequest) GoString() string {
	return s.String()
}

func (s *SuspendInstanceRequest) SetInstanceId(v int64) *SuspendInstanceRequest {
	s.InstanceId = &v
	return s
}

func (s *SuspendInstanceRequest) SetProjectEnv(v string) *SuspendInstanceRequest {
	s.ProjectEnv = &v
	return s
}

type SuspendInstanceResponse struct {
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s SuspendInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s SuspendInstanceResponse) GoString() string {
	return s.String()
}

func (s *SuspendInstanceResponse) SetErrorCode(v string) *SuspendInstanceResponse {
	s.ErrorCode = &v
	return s
}

func (s *SuspendInstanceResponse) SetErrorMessage(v string) *SuspendInstanceResponse {
	s.ErrorMessage = &v
	return s
}

func (s *SuspendInstanceResponse) SetHttpStatusCode(v int) *SuspendInstanceResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *SuspendInstanceResponse) SetRequestId(v string) *SuspendInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *SuspendInstanceResponse) SetSuccess(v bool) *SuspendInstanceResponse {
	s.Success = &v
	return s
}

func (s *SuspendInstanceResponse) SetData(v bool) *SuspendInstanceResponse {
	s.Data = &v
	return s
}

type RestartInstanceRequest struct {
	InstanceId *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	ProjectEnv *string `json:"ProjectEnv,omitempty" xml:"ProjectEnv,omitempty" require:"true"`
}

func (s RestartInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RestartInstanceRequest) GoString() string {
	return s.String()
}

func (s *RestartInstanceRequest) SetInstanceId(v int64) *RestartInstanceRequest {
	s.InstanceId = &v
	return s
}

func (s *RestartInstanceRequest) SetProjectEnv(v string) *RestartInstanceRequest {
	s.ProjectEnv = &v
	return s
}

type RestartInstanceResponse struct {
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s RestartInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s RestartInstanceResponse) GoString() string {
	return s.String()
}

func (s *RestartInstanceResponse) SetErrorCode(v string) *RestartInstanceResponse {
	s.ErrorCode = &v
	return s
}

func (s *RestartInstanceResponse) SetErrorMessage(v string) *RestartInstanceResponse {
	s.ErrorMessage = &v
	return s
}

func (s *RestartInstanceResponse) SetHttpStatusCode(v int) *RestartInstanceResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *RestartInstanceResponse) SetRequestId(v string) *RestartInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *RestartInstanceResponse) SetSuccess(v bool) *RestartInstanceResponse {
	s.Success = &v
	return s
}

func (s *RestartInstanceResponse) SetData(v bool) *RestartInstanceResponse {
	s.Data = &v
	return s
}

type ListDataServiceApiAuthoritiesRequest struct {
	ProjectId      *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	TenantId       *int64  `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ApiNameKeyword *string `json:"ApiNameKeyword,omitempty" xml:"ApiNameKeyword,omitempty"`
}

func (s ListDataServiceApiAuthoritiesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApiAuthoritiesRequest) GoString() string {
	return s.String()
}

func (s *ListDataServiceApiAuthoritiesRequest) SetProjectId(v int64) *ListDataServiceApiAuthoritiesRequest {
	s.ProjectId = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesRequest) SetPageNumber(v int) *ListDataServiceApiAuthoritiesRequest {
	s.PageNumber = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesRequest) SetPageSize(v int) *ListDataServiceApiAuthoritiesRequest {
	s.PageSize = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesRequest) SetTenantId(v int64) *ListDataServiceApiAuthoritiesRequest {
	s.TenantId = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesRequest) SetApiNameKeyword(v string) *ListDataServiceApiAuthoritiesRequest {
	s.ApiNameKeyword = &v
	return s
}

type ListDataServiceApiAuthoritiesResponse struct {
	ErrorCode      *string                                    `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                                    `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                                       `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                                      `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *ListDataServiceApiAuthoritiesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListDataServiceApiAuthoritiesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApiAuthoritiesResponse) GoString() string {
	return s.String()
}

func (s *ListDataServiceApiAuthoritiesResponse) SetErrorCode(v string) *ListDataServiceApiAuthoritiesResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponse) SetErrorMessage(v string) *ListDataServiceApiAuthoritiesResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponse) SetHttpStatusCode(v int) *ListDataServiceApiAuthoritiesResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponse) SetRequestId(v string) *ListDataServiceApiAuthoritiesResponse {
	s.RequestId = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponse) SetSuccess(v bool) *ListDataServiceApiAuthoritiesResponse {
	s.Success = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponse) SetData(v *ListDataServiceApiAuthoritiesResponseData) *ListDataServiceApiAuthoritiesResponse {
	s.Data = v
	return s
}

type ListDataServiceApiAuthoritiesResponseData struct {
	PageNumber           *int                                                             `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize             *int                                                             `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount           *int                                                             `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	ApiAuthorizationList []*ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList `json:"ApiAuthorizationList,omitempty" xml:"ApiAuthorizationList,omitempty" require:"true" type:"Repeated"`
}

func (s ListDataServiceApiAuthoritiesResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApiAuthoritiesResponseData) GoString() string {
	return s.String()
}

func (s *ListDataServiceApiAuthoritiesResponseData) SetPageNumber(v int) *ListDataServiceApiAuthoritiesResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseData) SetPageSize(v int) *ListDataServiceApiAuthoritiesResponseData {
	s.PageSize = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseData) SetTotalCount(v int) *ListDataServiceApiAuthoritiesResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseData) SetApiAuthorizationList(v []*ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList) *ListDataServiceApiAuthoritiesResponseData {
	s.ApiAuthorizationList = v
	return s
}

type ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList struct {
	ApiId                *int64                                                                               `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName              *string                                                                              `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	ApiPath              *string                                                                              `json:"ApiPath,omitempty" xml:"ApiPath,omitempty" require:"true"`
	ApiStatus            *int                                                                                 `json:"ApiStatus,omitempty" xml:"ApiStatus,omitempty" require:"true"`
	CreatedTime          *string                                                                              `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	CreatorId            *string                                                                              `json:"CreatorId,omitempty" xml:"CreatorId,omitempty" require:"true"`
	GroupId              *string                                                                              `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ModifiedTime         *string                                                                              `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	ProjectId            *int64                                                                               `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	TenantId             *int64                                                                               `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	AuthorizationRecords []*ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords `json:"AuthorizationRecords,omitempty" xml:"AuthorizationRecords,omitempty" require:"true" type:"Repeated"`
}

func (s ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList) GoString() string {
	return s.String()
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList) SetApiId(v int64) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList {
	s.ApiId = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList) SetApiName(v string) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList {
	s.ApiName = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList) SetApiPath(v string) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList {
	s.ApiPath = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList) SetApiStatus(v int) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList {
	s.ApiStatus = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList) SetCreatedTime(v string) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList {
	s.CreatedTime = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList) SetCreatorId(v string) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList {
	s.CreatorId = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList) SetGroupId(v string) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList {
	s.GroupId = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList) SetModifiedTime(v string) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList {
	s.ModifiedTime = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList) SetProjectId(v int64) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList {
	s.ProjectId = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList) SetTenantId(v int64) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList {
	s.TenantId = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList) SetAuthorizationRecords(v []*ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList {
	s.AuthorizationRecords = v
	return s
}

type ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords struct {
	CreatedTime *string `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	CreatorId   *string `json:"CreatorId,omitempty" xml:"CreatorId,omitempty" require:"true"`
	EndTime     *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	ProjectId   *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
}

func (s ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords) GoString() string {
	return s.String()
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords) SetCreatedTime(v string) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords {
	s.CreatedTime = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords) SetCreatorId(v string) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords {
	s.CreatorId = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords) SetEndTime(v string) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords {
	s.EndTime = &v
	return s
}

func (s *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords) SetProjectId(v int64) *ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords {
	s.ProjectId = &v
	return s
}

type ListDataServicePublishedApisRequest struct {
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	ProjectId      *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	TenantId       *int64  `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ApiNameKeyword *string `json:"ApiNameKeyword,omitempty" xml:"ApiNameKeyword,omitempty"`
	ApiPathKeyword *string `json:"ApiPathKeyword,omitempty" xml:"ApiPathKeyword,omitempty"`
	CreatorId      *string `json:"CreatorId,omitempty" xml:"CreatorId,omitempty"`
}

func (s ListDataServicePublishedApisRequest) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisRequest) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisRequest) SetPageNumber(v int) *ListDataServicePublishedApisRequest {
	s.PageNumber = &v
	return s
}

func (s *ListDataServicePublishedApisRequest) SetPageSize(v int) *ListDataServicePublishedApisRequest {
	s.PageSize = &v
	return s
}

func (s *ListDataServicePublishedApisRequest) SetProjectId(v int64) *ListDataServicePublishedApisRequest {
	s.ProjectId = &v
	return s
}

func (s *ListDataServicePublishedApisRequest) SetTenantId(v int64) *ListDataServicePublishedApisRequest {
	s.TenantId = &v
	return s
}

func (s *ListDataServicePublishedApisRequest) SetApiNameKeyword(v string) *ListDataServicePublishedApisRequest {
	s.ApiNameKeyword = &v
	return s
}

func (s *ListDataServicePublishedApisRequest) SetApiPathKeyword(v string) *ListDataServicePublishedApisRequest {
	s.ApiPathKeyword = &v
	return s
}

func (s *ListDataServicePublishedApisRequest) SetCreatorId(v string) *ListDataServicePublishedApisRequest {
	s.CreatorId = &v
	return s
}

type ListDataServicePublishedApisResponse struct {
	ErrorCode      *string                                   `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                                   `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                                      `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                                     `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *ListDataServicePublishedApisResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListDataServicePublishedApisResponse) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponse) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponse) SetErrorCode(v string) *ListDataServicePublishedApisResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListDataServicePublishedApisResponse) SetErrorMessage(v string) *ListDataServicePublishedApisResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListDataServicePublishedApisResponse) SetHttpStatusCode(v int) *ListDataServicePublishedApisResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListDataServicePublishedApisResponse) SetRequestId(v string) *ListDataServicePublishedApisResponse {
	s.RequestId = &v
	return s
}

func (s *ListDataServicePublishedApisResponse) SetSuccess(v bool) *ListDataServicePublishedApisResponse {
	s.Success = &v
	return s
}

func (s *ListDataServicePublishedApisResponse) SetData(v *ListDataServicePublishedApisResponseData) *ListDataServicePublishedApisResponse {
	s.Data = v
	return s
}

type ListDataServicePublishedApisResponseData struct {
	PageNumber *int                                            `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                            `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                                            `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Apis       []*ListDataServicePublishedApisResponseDataApis `json:"Apis,omitempty" xml:"Apis,omitempty" require:"true" type:"Repeated"`
}

func (s ListDataServicePublishedApisResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseData) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseData) SetPageNumber(v int) *ListDataServicePublishedApisResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListDataServicePublishedApisResponseData) SetPageSize(v int) *ListDataServicePublishedApisResponseData {
	s.PageSize = &v
	return s
}

func (s *ListDataServicePublishedApisResponseData) SetTotalCount(v int) *ListDataServicePublishedApisResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListDataServicePublishedApisResponseData) SetApis(v []*ListDataServicePublishedApisResponseDataApis) *ListDataServicePublishedApisResponseData {
	s.Apis = v
	return s
}

type ListDataServicePublishedApisResponseDataApis struct {
	ApiId               *int64                                                           `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiMode             *int                                                             `json:"ApiMode,omitempty" xml:"ApiMode,omitempty" require:"true"`
	ApiName             *string                                                          `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	ApiPath             *string                                                          `json:"ApiPath,omitempty" xml:"ApiPath,omitempty" require:"true"`
	CreatedTime         *string                                                          `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	CreatorId           *string                                                          `json:"CreatorId,omitempty" xml:"CreatorId,omitempty" require:"true"`
	Description         *string                                                          `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	GroupId             *string                                                          `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ModifiedTime        *string                                                          `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	OperatorId          *string                                                          `json:"OperatorId,omitempty" xml:"OperatorId,omitempty" require:"true"`
	ProjectId           *int64                                                           `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	RequestMethod       *int                                                             `json:"RequestMethod,omitempty" xml:"RequestMethod,omitempty" require:"true"`
	ResponseContentType *int                                                             `json:"ResponseContentType,omitempty" xml:"ResponseContentType,omitempty" require:"true"`
	Status              *int                                                             `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	TenantId            *int64                                                           `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	Timeout             *int                                                             `json:"Timeout,omitempty" xml:"Timeout,omitempty" require:"true"`
	VisibleRange        *int                                                             `json:"VisibleRange,omitempty" xml:"VisibleRange,omitempty" require:"true"`
	RegistrationDetails *ListDataServicePublishedApisResponseDataApisRegistrationDetails `json:"RegistrationDetails,omitempty" xml:"RegistrationDetails,omitempty" require:"true" type:"Struct"`
	ScriptDetails       *ListDataServicePublishedApisResponseDataApisScriptDetails       `json:"ScriptDetails,omitempty" xml:"ScriptDetails,omitempty" require:"true" type:"Struct"`
	WizardDetails       *ListDataServicePublishedApisResponseDataApisWizardDetails       `json:"WizardDetails,omitempty" xml:"WizardDetails,omitempty" require:"true" type:"Struct"`
	Protocols           []*int                                                           `json:"Protocols,omitempty" xml:"Protocols,omitempty" require:"true" type:"Repeated"`
}

func (s ListDataServicePublishedApisResponseDataApis) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseDataApis) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseDataApis) SetApiId(v int64) *ListDataServicePublishedApisResponseDataApis {
	s.ApiId = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetApiMode(v int) *ListDataServicePublishedApisResponseDataApis {
	s.ApiMode = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetApiName(v string) *ListDataServicePublishedApisResponseDataApis {
	s.ApiName = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetApiPath(v string) *ListDataServicePublishedApisResponseDataApis {
	s.ApiPath = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetCreatedTime(v string) *ListDataServicePublishedApisResponseDataApis {
	s.CreatedTime = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetCreatorId(v string) *ListDataServicePublishedApisResponseDataApis {
	s.CreatorId = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetDescription(v string) *ListDataServicePublishedApisResponseDataApis {
	s.Description = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetGroupId(v string) *ListDataServicePublishedApisResponseDataApis {
	s.GroupId = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetModifiedTime(v string) *ListDataServicePublishedApisResponseDataApis {
	s.ModifiedTime = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetOperatorId(v string) *ListDataServicePublishedApisResponseDataApis {
	s.OperatorId = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetProjectId(v int64) *ListDataServicePublishedApisResponseDataApis {
	s.ProjectId = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetRequestMethod(v int) *ListDataServicePublishedApisResponseDataApis {
	s.RequestMethod = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetResponseContentType(v int) *ListDataServicePublishedApisResponseDataApis {
	s.ResponseContentType = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetStatus(v int) *ListDataServicePublishedApisResponseDataApis {
	s.Status = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetTenantId(v int64) *ListDataServicePublishedApisResponseDataApis {
	s.TenantId = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetTimeout(v int) *ListDataServicePublishedApisResponseDataApis {
	s.Timeout = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetVisibleRange(v int) *ListDataServicePublishedApisResponseDataApis {
	s.VisibleRange = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetRegistrationDetails(v *ListDataServicePublishedApisResponseDataApisRegistrationDetails) *ListDataServicePublishedApisResponseDataApis {
	s.RegistrationDetails = v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetScriptDetails(v *ListDataServicePublishedApisResponseDataApisScriptDetails) *ListDataServicePublishedApisResponseDataApis {
	s.ScriptDetails = v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetWizardDetails(v *ListDataServicePublishedApisResponseDataApisWizardDetails) *ListDataServicePublishedApisResponseDataApis {
	s.WizardDetails = v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApis) SetProtocols(v []*int) *ListDataServicePublishedApisResponseDataApis {
	s.Protocols = v
	return s
}

type ListDataServicePublishedApisResponseDataApisRegistrationDetails struct {
	FailedResultSample            *string                                                                                         `json:"FailedResultSample,omitempty" xml:"FailedResultSample,omitempty" require:"true"`
	ServiceContentType            *int                                                                                            `json:"ServiceContentType,omitempty" xml:"ServiceContentType,omitempty" require:"true"`
	ServiceHost                   *string                                                                                         `json:"ServiceHost,omitempty" xml:"ServiceHost,omitempty" require:"true"`
	ServicePath                   *string                                                                                         `json:"ServicePath,omitempty" xml:"ServicePath,omitempty" require:"true"`
	ServiceRequestBodyDescription *string                                                                                         `json:"ServiceRequestBodyDescription,omitempty" xml:"ServiceRequestBodyDescription,omitempty" require:"true"`
	SuccessfulResultSample        *string                                                                                         `json:"SuccessfulResultSample,omitempty" xml:"SuccessfulResultSample,omitempty" require:"true"`
	RegistrationErrorCodes        []*ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationErrorCodes        `json:"RegistrationErrorCodes,omitempty" xml:"RegistrationErrorCodes,omitempty" require:"true" type:"Repeated"`
	RegistrationRequestParameters []*ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters `json:"RegistrationRequestParameters,omitempty" xml:"RegistrationRequestParameters,omitempty" require:"true" type:"Repeated"`
}

func (s ListDataServicePublishedApisResponseDataApisRegistrationDetails) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseDataApisRegistrationDetails) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetails) SetFailedResultSample(v string) *ListDataServicePublishedApisResponseDataApisRegistrationDetails {
	s.FailedResultSample = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetails) SetServiceContentType(v int) *ListDataServicePublishedApisResponseDataApisRegistrationDetails {
	s.ServiceContentType = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetails) SetServiceHost(v string) *ListDataServicePublishedApisResponseDataApisRegistrationDetails {
	s.ServiceHost = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetails) SetServicePath(v string) *ListDataServicePublishedApisResponseDataApisRegistrationDetails {
	s.ServicePath = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetails) SetServiceRequestBodyDescription(v string) *ListDataServicePublishedApisResponseDataApisRegistrationDetails {
	s.ServiceRequestBodyDescription = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetails) SetSuccessfulResultSample(v string) *ListDataServicePublishedApisResponseDataApisRegistrationDetails {
	s.SuccessfulResultSample = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetails) SetRegistrationErrorCodes(v []*ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationErrorCodes) *ListDataServicePublishedApisResponseDataApisRegistrationDetails {
	s.RegistrationErrorCodes = v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetails) SetRegistrationRequestParameters(v []*ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) *ListDataServicePublishedApisResponseDataApisRegistrationDetails {
	s.RegistrationRequestParameters = v
	return s
}

type ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationErrorCodes struct {
	ErrorCode     *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage  *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	ErrorSolution *string `json:"ErrorSolution,omitempty" xml:"ErrorSolution,omitempty" require:"true"`
}

func (s ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationErrorCodes) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationErrorCodes) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationErrorCodes) SetErrorCode(v string) *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationErrorCodes {
	s.ErrorCode = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationErrorCodes) SetErrorMessage(v string) *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationErrorCodes {
	s.ErrorMessage = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationErrorCodes) SetErrorSolution(v string) *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationErrorCodes {
	s.ErrorSolution = &v
	return s
}

type ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters struct {
	DefaultValue         *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	IsRequiredParameter  *bool   `json:"IsRequiredParameter,omitempty" xml:"IsRequiredParameter,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ParameterOperator    *int    `json:"ParameterOperator,omitempty" xml:"ParameterOperator,omitempty" require:"true"`
	ParameterPosition    *int    `json:"ParameterPosition,omitempty" xml:"ParameterPosition,omitempty" require:"true"`
}

func (s ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetDefaultValue(v string) *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.DefaultValue = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetExampleValue(v string) *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.ExampleValue = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetIsRequiredParameter(v bool) *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.IsRequiredParameter = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetParameterDataType(v int) *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.ParameterDataType = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetParameterDescription(v string) *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.ParameterDescription = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetParameterName(v string) *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.ParameterName = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetParameterOperator(v int) *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.ParameterOperator = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetParameterPosition(v int) *ListDataServicePublishedApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.ParameterPosition = &v
	return s
}

type ListDataServicePublishedApisResponseDataApisScriptDetails struct {
	FailedResultSample       *string                                                                              `json:"FailedResultSample,omitempty" xml:"FailedResultSample,omitempty" require:"true"`
	IsPagedResponse          *bool                                                                                `json:"IsPagedResponse,omitempty" xml:"IsPagedResponse,omitempty" require:"true"`
	Script                   *string                                                                              `json:"Script,omitempty" xml:"Script,omitempty" require:"true"`
	SuccessfulResultSample   *string                                                                              `json:"SuccessfulResultSample,omitempty" xml:"SuccessfulResultSample,omitempty" require:"true"`
	ScriptErrorCodes         []*ListDataServicePublishedApisResponseDataApisScriptDetailsScriptErrorCodes         `json:"ScriptErrorCodes,omitempty" xml:"ScriptErrorCodes,omitempty" require:"true" type:"Repeated"`
	ScriptRequestParameters  []*ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters  `json:"ScriptRequestParameters,omitempty" xml:"ScriptRequestParameters,omitempty" require:"true" type:"Repeated"`
	ScriptResponseParameters []*ListDataServicePublishedApisResponseDataApisScriptDetailsScriptResponseParameters `json:"ScriptResponseParameters,omitempty" xml:"ScriptResponseParameters,omitempty" require:"true" type:"Repeated"`
	ScriptConnection         *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptConnection           `json:"ScriptConnection,omitempty" xml:"ScriptConnection,omitempty" require:"true" type:"Struct"`
}

func (s ListDataServicePublishedApisResponseDataApisScriptDetails) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseDataApisScriptDetails) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetails) SetFailedResultSample(v string) *ListDataServicePublishedApisResponseDataApisScriptDetails {
	s.FailedResultSample = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetails) SetIsPagedResponse(v bool) *ListDataServicePublishedApisResponseDataApisScriptDetails {
	s.IsPagedResponse = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetails) SetScript(v string) *ListDataServicePublishedApisResponseDataApisScriptDetails {
	s.Script = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetails) SetSuccessfulResultSample(v string) *ListDataServicePublishedApisResponseDataApisScriptDetails {
	s.SuccessfulResultSample = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetails) SetScriptErrorCodes(v []*ListDataServicePublishedApisResponseDataApisScriptDetailsScriptErrorCodes) *ListDataServicePublishedApisResponseDataApisScriptDetails {
	s.ScriptErrorCodes = v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetails) SetScriptRequestParameters(v []*ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters) *ListDataServicePublishedApisResponseDataApisScriptDetails {
	s.ScriptRequestParameters = v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetails) SetScriptResponseParameters(v []*ListDataServicePublishedApisResponseDataApisScriptDetailsScriptResponseParameters) *ListDataServicePublishedApisResponseDataApisScriptDetails {
	s.ScriptResponseParameters = v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetails) SetScriptConnection(v *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptConnection) *ListDataServicePublishedApisResponseDataApisScriptDetails {
	s.ScriptConnection = v
	return s
}

type ListDataServicePublishedApisResponseDataApisScriptDetailsScriptErrorCodes struct {
	ErrorCode     *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage  *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	ErrorSolution *string `json:"ErrorSolution,omitempty" xml:"ErrorSolution,omitempty" require:"true"`
}

func (s ListDataServicePublishedApisResponseDataApisScriptDetailsScriptErrorCodes) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseDataApisScriptDetailsScriptErrorCodes) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptErrorCodes) SetErrorCode(v string) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptErrorCodes {
	s.ErrorCode = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptErrorCodes) SetErrorMessage(v string) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptErrorCodes {
	s.ErrorMessage = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptErrorCodes) SetErrorSolution(v string) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptErrorCodes {
	s.ErrorSolution = &v
	return s
}

type ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters struct {
	DefaultValue         *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	IsRequiredParameter  *bool   `json:"IsRequiredParameter,omitempty" xml:"IsRequiredParameter,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ParameterOperator    *int    `json:"ParameterOperator,omitempty" xml:"ParameterOperator,omitempty" require:"true"`
	ParameterPosition    *int    `json:"ParameterPosition,omitempty" xml:"ParameterPosition,omitempty" require:"true"`
}

func (s ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters) SetDefaultValue(v string) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.DefaultValue = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters) SetExampleValue(v string) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.ExampleValue = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters) SetIsRequiredParameter(v bool) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.IsRequiredParameter = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters) SetParameterDataType(v int) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.ParameterDataType = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters) SetParameterDescription(v string) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.ParameterDescription = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters) SetParameterName(v string) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.ParameterName = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters) SetParameterOperator(v int) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.ParameterOperator = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters) SetParameterPosition(v int) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.ParameterPosition = &v
	return s
}

type ListDataServicePublishedApisResponseDataApisScriptDetailsScriptResponseParameters struct {
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
}

func (s ListDataServicePublishedApisResponseDataApisScriptDetailsScriptResponseParameters) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseDataApisScriptDetailsScriptResponseParameters) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptResponseParameters) SetExampleValue(v string) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptResponseParameters {
	s.ExampleValue = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptResponseParameters) SetParameterDataType(v int) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptResponseParameters {
	s.ParameterDataType = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptResponseParameters) SetParameterDescription(v string) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptResponseParameters {
	s.ParameterDescription = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptResponseParameters) SetParameterName(v string) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptResponseParameters {
	s.ParameterName = &v
	return s
}

type ListDataServicePublishedApisResponseDataApisScriptDetailsScriptConnection struct {
	ConnectionId *int64  `json:"ConnectionId,omitempty" xml:"ConnectionId,omitempty" require:"true"`
	TableName    *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
}

func (s ListDataServicePublishedApisResponseDataApisScriptDetailsScriptConnection) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseDataApisScriptDetailsScriptConnection) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptConnection) SetConnectionId(v int64) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptConnection {
	s.ConnectionId = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptConnection) SetTableName(v string) *ListDataServicePublishedApisResponseDataApisScriptDetailsScriptConnection {
	s.TableName = &v
	return s
}

type ListDataServicePublishedApisResponseDataApisWizardDetails struct {
	FailedResultSample       *string                                                                              `json:"FailedResultSample,omitempty" xml:"FailedResultSample,omitempty" require:"true"`
	IsPagedResponse          *bool                                                                                `json:"IsPagedResponse,omitempty" xml:"IsPagedResponse,omitempty" require:"true"`
	SuccessfulResultSample   *string                                                                              `json:"SuccessfulResultSample,omitempty" xml:"SuccessfulResultSample,omitempty" require:"true"`
	WizardErrorCodes         []*ListDataServicePublishedApisResponseDataApisWizardDetailsWizardErrorCodes         `json:"WizardErrorCodes,omitempty" xml:"WizardErrorCodes,omitempty" require:"true" type:"Repeated"`
	WizardRequestParameters  []*ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters  `json:"WizardRequestParameters,omitempty" xml:"WizardRequestParameters,omitempty" require:"true" type:"Repeated"`
	WizardResponseParameters []*ListDataServicePublishedApisResponseDataApisWizardDetailsWizardResponseParameters `json:"WizardResponseParameters,omitempty" xml:"WizardResponseParameters,omitempty" require:"true" type:"Repeated"`
	WizardConnection         *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardConnection           `json:"WizardConnection,omitempty" xml:"WizardConnection,omitempty" require:"true" type:"Struct"`
}

func (s ListDataServicePublishedApisResponseDataApisWizardDetails) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseDataApisWizardDetails) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetails) SetFailedResultSample(v string) *ListDataServicePublishedApisResponseDataApisWizardDetails {
	s.FailedResultSample = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetails) SetIsPagedResponse(v bool) *ListDataServicePublishedApisResponseDataApisWizardDetails {
	s.IsPagedResponse = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetails) SetSuccessfulResultSample(v string) *ListDataServicePublishedApisResponseDataApisWizardDetails {
	s.SuccessfulResultSample = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetails) SetWizardErrorCodes(v []*ListDataServicePublishedApisResponseDataApisWizardDetailsWizardErrorCodes) *ListDataServicePublishedApisResponseDataApisWizardDetails {
	s.WizardErrorCodes = v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetails) SetWizardRequestParameters(v []*ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters) *ListDataServicePublishedApisResponseDataApisWizardDetails {
	s.WizardRequestParameters = v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetails) SetWizardResponseParameters(v []*ListDataServicePublishedApisResponseDataApisWizardDetailsWizardResponseParameters) *ListDataServicePublishedApisResponseDataApisWizardDetails {
	s.WizardResponseParameters = v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetails) SetWizardConnection(v *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardConnection) *ListDataServicePublishedApisResponseDataApisWizardDetails {
	s.WizardConnection = v
	return s
}

type ListDataServicePublishedApisResponseDataApisWizardDetailsWizardErrorCodes struct {
	ErrorCode     *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage  *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	ErrorSolution *string `json:"ErrorSolution,omitempty" xml:"ErrorSolution,omitempty" require:"true"`
}

func (s ListDataServicePublishedApisResponseDataApisWizardDetailsWizardErrorCodes) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseDataApisWizardDetailsWizardErrorCodes) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardErrorCodes) SetErrorCode(v string) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardErrorCodes {
	s.ErrorCode = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardErrorCodes) SetErrorMessage(v string) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardErrorCodes {
	s.ErrorMessage = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardErrorCodes) SetErrorSolution(v string) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardErrorCodes {
	s.ErrorSolution = &v
	return s
}

type ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters struct {
	DefaultValue         *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	IsRequiredParameter  *bool   `json:"IsRequiredParameter,omitempty" xml:"IsRequiredParameter,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ParameterOperator    *int    `json:"ParameterOperator,omitempty" xml:"ParameterOperator,omitempty" require:"true"`
	ParameterPosition    *int    `json:"ParameterPosition,omitempty" xml:"ParameterPosition,omitempty" require:"true"`
}

func (s ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters) SetDefaultValue(v string) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.DefaultValue = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters) SetExampleValue(v string) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.ExampleValue = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters) SetIsRequiredParameter(v bool) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.IsRequiredParameter = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters) SetParameterDataType(v int) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.ParameterDataType = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters) SetParameterDescription(v string) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.ParameterDescription = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters) SetParameterName(v string) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.ParameterName = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters) SetParameterOperator(v int) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.ParameterOperator = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters) SetParameterPosition(v int) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.ParameterPosition = &v
	return s
}

type ListDataServicePublishedApisResponseDataApisWizardDetailsWizardResponseParameters struct {
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
}

func (s ListDataServicePublishedApisResponseDataApisWizardDetailsWizardResponseParameters) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseDataApisWizardDetailsWizardResponseParameters) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardResponseParameters) SetExampleValue(v string) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardResponseParameters {
	s.ExampleValue = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardResponseParameters) SetParameterDataType(v int) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardResponseParameters {
	s.ParameterDataType = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardResponseParameters) SetParameterDescription(v string) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardResponseParameters {
	s.ParameterDescription = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardResponseParameters) SetParameterName(v string) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardResponseParameters {
	s.ParameterName = &v
	return s
}

type ListDataServicePublishedApisResponseDataApisWizardDetailsWizardConnection struct {
	ConnectionId *int64  `json:"ConnectionId,omitempty" xml:"ConnectionId,omitempty" require:"true"`
	TableName    *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
}

func (s ListDataServicePublishedApisResponseDataApisWizardDetailsWizardConnection) String() string {
	return tea.Prettify(s)
}

func (s ListDataServicePublishedApisResponseDataApisWizardDetailsWizardConnection) GoString() string {
	return s.String()
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardConnection) SetConnectionId(v int64) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardConnection {
	s.ConnectionId = &v
	return s
}

func (s *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardConnection) SetTableName(v string) *ListDataServicePublishedApisResponseDataApisWizardDetailsWizardConnection {
	s.TableName = &v
	return s
}

type GetInstanceLogRequest struct {
	InstanceId *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	ProjectEnv *string `json:"ProjectEnv,omitempty" xml:"ProjectEnv,omitempty" require:"true"`
}

func (s GetInstanceLogRequest) String() string {
	return tea.Prettify(s)
}

func (s GetInstanceLogRequest) GoString() string {
	return s.String()
}

func (s *GetInstanceLogRequest) SetInstanceId(v int64) *GetInstanceLogRequest {
	s.InstanceId = &v
	return s
}

func (s *GetInstanceLogRequest) SetProjectEnv(v string) *GetInstanceLogRequest {
	s.ProjectEnv = &v
	return s
}

type GetInstanceLogResponse struct {
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s GetInstanceLogResponse) String() string {
	return tea.Prettify(s)
}

func (s GetInstanceLogResponse) GoString() string {
	return s.String()
}

func (s *GetInstanceLogResponse) SetErrorCode(v string) *GetInstanceLogResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetInstanceLogResponse) SetErrorMessage(v string) *GetInstanceLogResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetInstanceLogResponse) SetHttpStatusCode(v int) *GetInstanceLogResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetInstanceLogResponse) SetRequestId(v string) *GetInstanceLogResponse {
	s.RequestId = &v
	return s
}

func (s *GetInstanceLogResponse) SetSuccess(v bool) *GetInstanceLogResponse {
	s.Success = &v
	return s
}

func (s *GetInstanceLogResponse) SetData(v string) *GetInstanceLogResponse {
	s.Data = &v
	return s
}

type CreateFolderRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	FolderPath        *string `json:"FolderPath,omitempty" xml:"FolderPath,omitempty" require:"true"`
}

func (s CreateFolderRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateFolderRequest) GoString() string {
	return s.String()
}

func (s *CreateFolderRequest) SetProjectId(v int64) *CreateFolderRequest {
	s.ProjectId = &v
	return s
}

func (s *CreateFolderRequest) SetProjectIdentifier(v string) *CreateFolderRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *CreateFolderRequest) SetFolderPath(v string) *CreateFolderRequest {
	s.FolderPath = &v
	return s
}

type CreateFolderResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	Data           *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
}

func (s CreateFolderResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateFolderResponse) GoString() string {
	return s.String()
}

func (s *CreateFolderResponse) SetRequestId(v string) *CreateFolderResponse {
	s.RequestId = &v
	return s
}

func (s *CreateFolderResponse) SetSuccess(v bool) *CreateFolderResponse {
	s.Success = &v
	return s
}

func (s *CreateFolderResponse) SetErrorCode(v string) *CreateFolderResponse {
	s.ErrorCode = &v
	return s
}

func (s *CreateFolderResponse) SetErrorMessage(v string) *CreateFolderResponse {
	s.ErrorMessage = &v
	return s
}

func (s *CreateFolderResponse) SetData(v string) *CreateFolderResponse {
	s.Data = &v
	return s
}

func (s *CreateFolderResponse) SetHttpStatusCode(v int) *CreateFolderResponse {
	s.HttpStatusCode = &v
	return s
}

type GetBusinessRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	BusinessId        *int64  `json:"BusinessId,omitempty" xml:"BusinessId,omitempty" require:"true"`
}

func (s GetBusinessRequest) String() string {
	return tea.Prettify(s)
}

func (s GetBusinessRequest) GoString() string {
	return s.String()
}

func (s *GetBusinessRequest) SetProjectId(v int64) *GetBusinessRequest {
	s.ProjectId = &v
	return s
}

func (s *GetBusinessRequest) SetProjectIdentifier(v string) *GetBusinessRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *GetBusinessRequest) SetBusinessId(v int64) *GetBusinessRequest {
	s.BusinessId = &v
	return s
}

type GetBusinessResponse struct {
	RequestId      *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                    `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                  `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                  `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                     `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *GetBusinessResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetBusinessResponse) String() string {
	return tea.Prettify(s)
}

func (s GetBusinessResponse) GoString() string {
	return s.String()
}

func (s *GetBusinessResponse) SetRequestId(v string) *GetBusinessResponse {
	s.RequestId = &v
	return s
}

func (s *GetBusinessResponse) SetSuccess(v bool) *GetBusinessResponse {
	s.Success = &v
	return s
}

func (s *GetBusinessResponse) SetErrorCode(v string) *GetBusinessResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetBusinessResponse) SetErrorMessage(v string) *GetBusinessResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetBusinessResponse) SetHttpStatusCode(v int) *GetBusinessResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetBusinessResponse) SetData(v *GetBusinessResponseData) *GetBusinessResponse {
	s.Data = v
	return s
}

type GetBusinessResponseData struct {
	BusinessId   *int64  `json:"BusinessId,omitempty" xml:"BusinessId,omitempty" require:"true"`
	BusinessName *string `json:"BusinessName,omitempty" xml:"BusinessName,omitempty" require:"true"`
	ProjectId    *string `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Owner        *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	UseType      *string `json:"UseType,omitempty" xml:"UseType,omitempty" require:"true"`
}

func (s GetBusinessResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetBusinessResponseData) GoString() string {
	return s.String()
}

func (s *GetBusinessResponseData) SetBusinessId(v int64) *GetBusinessResponseData {
	s.BusinessId = &v
	return s
}

func (s *GetBusinessResponseData) SetBusinessName(v string) *GetBusinessResponseData {
	s.BusinessName = &v
	return s
}

func (s *GetBusinessResponseData) SetProjectId(v string) *GetBusinessResponseData {
	s.ProjectId = &v
	return s
}

func (s *GetBusinessResponseData) SetOwner(v string) *GetBusinessResponseData {
	s.Owner = &v
	return s
}

func (s *GetBusinessResponseData) SetDescription(v string) *GetBusinessResponseData {
	s.Description = &v
	return s
}

func (s *GetBusinessResponseData) SetUseType(v string) *GetBusinessResponseData {
	s.UseType = &v
	return s
}

type GetInstanceRequest struct {
	InstanceId *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	ProjectEnv *string `json:"ProjectEnv,omitempty" xml:"ProjectEnv,omitempty" require:"true"`
}

func (s GetInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s GetInstanceRequest) GoString() string {
	return s.String()
}

func (s *GetInstanceRequest) SetInstanceId(v int64) *GetInstanceRequest {
	s.InstanceId = &v
	return s
}

func (s *GetInstanceRequest) SetProjectEnv(v string) *GetInstanceRequest {
	s.ProjectEnv = &v
	return s
}

type GetInstanceResponse struct {
	ErrorCode      *string                  `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                  `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                     `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                    `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetInstanceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s GetInstanceResponse) GoString() string {
	return s.String()
}

func (s *GetInstanceResponse) SetErrorCode(v string) *GetInstanceResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetInstanceResponse) SetErrorMessage(v string) *GetInstanceResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetInstanceResponse) SetHttpStatusCode(v int) *GetInstanceResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetInstanceResponse) SetRequestId(v string) *GetInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *GetInstanceResponse) SetSuccess(v bool) *GetInstanceResponse {
	s.Success = &v
	return s
}

func (s *GetInstanceResponse) SetData(v *GetInstanceResponseData) *GetInstanceResponse {
	s.Data = v
	return s
}

type GetInstanceResponseData struct {
	NodeId            *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	InstanceId        *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	DagId             *int64  `json:"DagId,omitempty" xml:"DagId,omitempty" require:"true"`
	DagType           *string `json:"DagType,omitempty" xml:"DagType,omitempty" require:"true"`
	Status            *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Bizdate           *int64  `json:"Bizdate,omitempty" xml:"Bizdate,omitempty" require:"true"`
	ParamValues       *string `json:"ParamValues,omitempty" xml:"ParamValues,omitempty" require:"true"`
	CycTime           *int64  `json:"CycTime,omitempty" xml:"CycTime,omitempty" require:"true"`
	FinishTime        *int64  `json:"FinishTime,omitempty" xml:"FinishTime,omitempty" require:"true"`
	BeginWaitTimeTime *int64  `json:"BeginWaitTimeTime,omitempty" xml:"BeginWaitTimeTime,omitempty" require:"true"`
	BeginWaitResTime  *int64  `json:"BeginWaitResTime,omitempty" xml:"BeginWaitResTime,omitempty" require:"true"`
	BeginRunningTime  *int64  `json:"BeginRunningTime,omitempty" xml:"BeginRunningTime,omitempty" require:"true"`
	CreateTime        *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	ModifyTime        *int64  `json:"ModifyTime,omitempty" xml:"ModifyTime,omitempty" require:"true"`
	NodeName          *string `json:"NodeName,omitempty" xml:"NodeName,omitempty" require:"true"`
}

func (s GetInstanceResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetInstanceResponseData) GoString() string {
	return s.String()
}

func (s *GetInstanceResponseData) SetNodeId(v int64) *GetInstanceResponseData {
	s.NodeId = &v
	return s
}

func (s *GetInstanceResponseData) SetInstanceId(v int64) *GetInstanceResponseData {
	s.InstanceId = &v
	return s
}

func (s *GetInstanceResponseData) SetDagId(v int64) *GetInstanceResponseData {
	s.DagId = &v
	return s
}

func (s *GetInstanceResponseData) SetDagType(v string) *GetInstanceResponseData {
	s.DagType = &v
	return s
}

func (s *GetInstanceResponseData) SetStatus(v string) *GetInstanceResponseData {
	s.Status = &v
	return s
}

func (s *GetInstanceResponseData) SetBizdate(v int64) *GetInstanceResponseData {
	s.Bizdate = &v
	return s
}

func (s *GetInstanceResponseData) SetParamValues(v string) *GetInstanceResponseData {
	s.ParamValues = &v
	return s
}

func (s *GetInstanceResponseData) SetCycTime(v int64) *GetInstanceResponseData {
	s.CycTime = &v
	return s
}

func (s *GetInstanceResponseData) SetFinishTime(v int64) *GetInstanceResponseData {
	s.FinishTime = &v
	return s
}

func (s *GetInstanceResponseData) SetBeginWaitTimeTime(v int64) *GetInstanceResponseData {
	s.BeginWaitTimeTime = &v
	return s
}

func (s *GetInstanceResponseData) SetBeginWaitResTime(v int64) *GetInstanceResponseData {
	s.BeginWaitResTime = &v
	return s
}

func (s *GetInstanceResponseData) SetBeginRunningTime(v int64) *GetInstanceResponseData {
	s.BeginRunningTime = &v
	return s
}

func (s *GetInstanceResponseData) SetCreateTime(v int64) *GetInstanceResponseData {
	s.CreateTime = &v
	return s
}

func (s *GetInstanceResponseData) SetModifyTime(v int64) *GetInstanceResponseData {
	s.ModifyTime = &v
	return s
}

func (s *GetInstanceResponseData) SetNodeName(v string) *GetInstanceResponseData {
	s.NodeName = &v
	return s
}

type GetFileRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	FileId            *int64  `json:"FileId,omitempty" xml:"FileId,omitempty"`
}

func (s GetFileRequest) String() string {
	return tea.Prettify(s)
}

func (s GetFileRequest) GoString() string {
	return s.String()
}

func (s *GetFileRequest) SetProjectId(v int64) *GetFileRequest {
	s.ProjectId = &v
	return s
}

func (s *GetFileRequest) SetProjectIdentifier(v string) *GetFileRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *GetFileRequest) SetFileId(v int64) *GetFileRequest {
	s.FileId = &v
	return s
}

type GetFileResponse struct {
	RequestId      *string              `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string              `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string              `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                 `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *GetFileResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetFileResponse) String() string {
	return tea.Prettify(s)
}

func (s GetFileResponse) GoString() string {
	return s.String()
}

func (s *GetFileResponse) SetRequestId(v string) *GetFileResponse {
	s.RequestId = &v
	return s
}

func (s *GetFileResponse) SetSuccess(v bool) *GetFileResponse {
	s.Success = &v
	return s
}

func (s *GetFileResponse) SetErrorCode(v string) *GetFileResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetFileResponse) SetErrorMessage(v string) *GetFileResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetFileResponse) SetHttpStatusCode(v int) *GetFileResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetFileResponse) SetData(v *GetFileResponseData) *GetFileResponse {
	s.Data = v
	return s
}

type GetFileResponseData struct {
	File              *GetFileResponseDataFile              `json:"File,omitempty" xml:"File,omitempty" require:"true" type:"Struct"`
	NodeConfiguration *GetFileResponseDataNodeConfiguration `json:"NodeConfiguration,omitempty" xml:"NodeConfiguration,omitempty" require:"true" type:"Struct"`
}

func (s GetFileResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetFileResponseData) GoString() string {
	return s.String()
}

func (s *GetFileResponseData) SetFile(v *GetFileResponseDataFile) *GetFileResponseData {
	s.File = v
	return s
}

func (s *GetFileResponseData) SetNodeConfiguration(v *GetFileResponseDataNodeConfiguration) *GetFileResponseData {
	s.NodeConfiguration = v
	return s
}

type GetFileResponseDataFile struct {
	ConnectionName  *string `json:"ConnectionName,omitempty" xml:"ConnectionName,omitempty" require:"true"`
	ParentId        *int64  `json:"ParentId,omitempty" xml:"ParentId,omitempty" require:"true"`
	IsMaxCompute    *bool   `json:"IsMaxCompute,omitempty" xml:"IsMaxCompute,omitempty" require:"true"`
	CreateTime      *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreateUser      *string `json:"CreateUser,omitempty" xml:"CreateUser,omitempty" require:"true"`
	BizId           *int64  `json:"BizId,omitempty" xml:"BizId,omitempty" require:"true"`
	FileFolderId    *string `json:"FileFolderId,omitempty" xml:"FileFolderId,omitempty" require:"true"`
	FileName        *string `json:"FileName,omitempty" xml:"FileName,omitempty" require:"true"`
	FileType        *int    `json:"FileType,omitempty" xml:"FileType,omitempty" require:"true"`
	UseType         *string `json:"UseType,omitempty" xml:"UseType,omitempty" require:"true"`
	FileDescription *string `json:"FileDescription,omitempty" xml:"FileDescription,omitempty" require:"true"`
	Content         *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
	NodeId          *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	CurrentVersion  *int    `json:"CurrentVersion,omitempty" xml:"CurrentVersion,omitempty" require:"true"`
	Owner           *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	LastEditUser    *string `json:"LastEditUser,omitempty" xml:"LastEditUser,omitempty" require:"true"`
	LastEditTime    *int64  `json:"LastEditTime,omitempty" xml:"LastEditTime,omitempty" require:"true"`
	CommitStatus    *int    `json:"CommitStatus,omitempty" xml:"CommitStatus,omitempty" require:"true"`
}

func (s GetFileResponseDataFile) String() string {
	return tea.Prettify(s)
}

func (s GetFileResponseDataFile) GoString() string {
	return s.String()
}

func (s *GetFileResponseDataFile) SetConnectionName(v string) *GetFileResponseDataFile {
	s.ConnectionName = &v
	return s
}

func (s *GetFileResponseDataFile) SetParentId(v int64) *GetFileResponseDataFile {
	s.ParentId = &v
	return s
}

func (s *GetFileResponseDataFile) SetIsMaxCompute(v bool) *GetFileResponseDataFile {
	s.IsMaxCompute = &v
	return s
}

func (s *GetFileResponseDataFile) SetCreateTime(v int64) *GetFileResponseDataFile {
	s.CreateTime = &v
	return s
}

func (s *GetFileResponseDataFile) SetCreateUser(v string) *GetFileResponseDataFile {
	s.CreateUser = &v
	return s
}

func (s *GetFileResponseDataFile) SetBizId(v int64) *GetFileResponseDataFile {
	s.BizId = &v
	return s
}

func (s *GetFileResponseDataFile) SetFileFolderId(v string) *GetFileResponseDataFile {
	s.FileFolderId = &v
	return s
}

func (s *GetFileResponseDataFile) SetFileName(v string) *GetFileResponseDataFile {
	s.FileName = &v
	return s
}

func (s *GetFileResponseDataFile) SetFileType(v int) *GetFileResponseDataFile {
	s.FileType = &v
	return s
}

func (s *GetFileResponseDataFile) SetUseType(v string) *GetFileResponseDataFile {
	s.UseType = &v
	return s
}

func (s *GetFileResponseDataFile) SetFileDescription(v string) *GetFileResponseDataFile {
	s.FileDescription = &v
	return s
}

func (s *GetFileResponseDataFile) SetContent(v string) *GetFileResponseDataFile {
	s.Content = &v
	return s
}

func (s *GetFileResponseDataFile) SetNodeId(v int64) *GetFileResponseDataFile {
	s.NodeId = &v
	return s
}

func (s *GetFileResponseDataFile) SetCurrentVersion(v int) *GetFileResponseDataFile {
	s.CurrentVersion = &v
	return s
}

func (s *GetFileResponseDataFile) SetOwner(v string) *GetFileResponseDataFile {
	s.Owner = &v
	return s
}

func (s *GetFileResponseDataFile) SetLastEditUser(v string) *GetFileResponseDataFile {
	s.LastEditUser = &v
	return s
}

func (s *GetFileResponseDataFile) SetLastEditTime(v int64) *GetFileResponseDataFile {
	s.LastEditTime = &v
	return s
}

func (s *GetFileResponseDataFile) SetCommitStatus(v int) *GetFileResponseDataFile {
	s.CommitStatus = &v
	return s
}

type GetFileResponseDataNodeConfiguration struct {
	AutoRerunTimes          *int                                              `json:"AutoRerunTimes,omitempty" xml:"AutoRerunTimes,omitempty" require:"true"`
	AutoRerunIntervalMillis *int                                              `json:"AutoRerunIntervalMillis,omitempty" xml:"AutoRerunIntervalMillis,omitempty" require:"true"`
	RerunMode               *string                                           `json:"RerunMode,omitempty" xml:"RerunMode,omitempty" require:"true"`
	Stop                    *bool                                             `json:"Stop,omitempty" xml:"Stop,omitempty" require:"true"`
	ParaValue               *string                                           `json:"ParaValue,omitempty" xml:"ParaValue,omitempty" require:"true"`
	StartEffectDate         *int64                                            `json:"StartEffectDate,omitempty" xml:"StartEffectDate,omitempty" require:"true"`
	EndEffectDate           *int64                                            `json:"EndEffectDate,omitempty" xml:"EndEffectDate,omitempty" require:"true"`
	CronExpress             *string                                           `json:"CronExpress,omitempty" xml:"CronExpress,omitempty" require:"true"`
	CycleType               *string                                           `json:"CycleType,omitempty" xml:"CycleType,omitempty" require:"true"`
	DependentType           *string                                           `json:"DependentType,omitempty" xml:"DependentType,omitempty" require:"true"`
	DependentNodeIdList     *string                                           `json:"DependentNodeIdList,omitempty" xml:"DependentNodeIdList,omitempty" require:"true"`
	InputList               []*GetFileResponseDataNodeConfigurationInputList  `json:"InputList,omitempty" xml:"InputList,omitempty" require:"true" type:"Repeated"`
	OutputList              []*GetFileResponseDataNodeConfigurationOutputList `json:"OutputList,omitempty" xml:"OutputList,omitempty" require:"true" type:"Repeated"`
}

func (s GetFileResponseDataNodeConfiguration) String() string {
	return tea.Prettify(s)
}

func (s GetFileResponseDataNodeConfiguration) GoString() string {
	return s.String()
}

func (s *GetFileResponseDataNodeConfiguration) SetAutoRerunTimes(v int) *GetFileResponseDataNodeConfiguration {
	s.AutoRerunTimes = &v
	return s
}

func (s *GetFileResponseDataNodeConfiguration) SetAutoRerunIntervalMillis(v int) *GetFileResponseDataNodeConfiguration {
	s.AutoRerunIntervalMillis = &v
	return s
}

func (s *GetFileResponseDataNodeConfiguration) SetRerunMode(v string) *GetFileResponseDataNodeConfiguration {
	s.RerunMode = &v
	return s
}

func (s *GetFileResponseDataNodeConfiguration) SetStop(v bool) *GetFileResponseDataNodeConfiguration {
	s.Stop = &v
	return s
}

func (s *GetFileResponseDataNodeConfiguration) SetParaValue(v string) *GetFileResponseDataNodeConfiguration {
	s.ParaValue = &v
	return s
}

func (s *GetFileResponseDataNodeConfiguration) SetStartEffectDate(v int64) *GetFileResponseDataNodeConfiguration {
	s.StartEffectDate = &v
	return s
}

func (s *GetFileResponseDataNodeConfiguration) SetEndEffectDate(v int64) *GetFileResponseDataNodeConfiguration {
	s.EndEffectDate = &v
	return s
}

func (s *GetFileResponseDataNodeConfiguration) SetCronExpress(v string) *GetFileResponseDataNodeConfiguration {
	s.CronExpress = &v
	return s
}

func (s *GetFileResponseDataNodeConfiguration) SetCycleType(v string) *GetFileResponseDataNodeConfiguration {
	s.CycleType = &v
	return s
}

func (s *GetFileResponseDataNodeConfiguration) SetDependentType(v string) *GetFileResponseDataNodeConfiguration {
	s.DependentType = &v
	return s
}

func (s *GetFileResponseDataNodeConfiguration) SetDependentNodeIdList(v string) *GetFileResponseDataNodeConfiguration {
	s.DependentNodeIdList = &v
	return s
}

func (s *GetFileResponseDataNodeConfiguration) SetInputList(v []*GetFileResponseDataNodeConfigurationInputList) *GetFileResponseDataNodeConfiguration {
	s.InputList = v
	return s
}

func (s *GetFileResponseDataNodeConfiguration) SetOutputList(v []*GetFileResponseDataNodeConfigurationOutputList) *GetFileResponseDataNodeConfiguration {
	s.OutputList = v
	return s
}

type GetFileResponseDataNodeConfigurationInputList struct {
	Input *string `json:"Input,omitempty" xml:"Input,omitempty" require:"true"`
}

func (s GetFileResponseDataNodeConfigurationInputList) String() string {
	return tea.Prettify(s)
}

func (s GetFileResponseDataNodeConfigurationInputList) GoString() string {
	return s.String()
}

func (s *GetFileResponseDataNodeConfigurationInputList) SetInput(v string) *GetFileResponseDataNodeConfigurationInputList {
	s.Input = &v
	return s
}

type GetFileResponseDataNodeConfigurationOutputList struct {
	Output       *string `json:"Output,omitempty" xml:"Output,omitempty" require:"true"`
	RefTableName *string `json:"RefTableName,omitempty" xml:"RefTableName,omitempty" require:"true"`
}

func (s GetFileResponseDataNodeConfigurationOutputList) String() string {
	return tea.Prettify(s)
}

func (s GetFileResponseDataNodeConfigurationOutputList) GoString() string {
	return s.String()
}

func (s *GetFileResponseDataNodeConfigurationOutputList) SetOutput(v string) *GetFileResponseDataNodeConfigurationOutputList {
	s.Output = &v
	return s
}

func (s *GetFileResponseDataNodeConfigurationOutputList) SetRefTableName(v string) *GetFileResponseDataNodeConfigurationOutputList {
	s.RefTableName = &v
	return s
}

type ListBusinessRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	PageNumber        *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize          *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Keyword           *string `json:"Keyword,omitempty" xml:"Keyword,omitempty"`
}

func (s ListBusinessRequest) String() string {
	return tea.Prettify(s)
}

func (s ListBusinessRequest) GoString() string {
	return s.String()
}

func (s *ListBusinessRequest) SetProjectId(v int64) *ListBusinessRequest {
	s.ProjectId = &v
	return s
}

func (s *ListBusinessRequest) SetProjectIdentifier(v string) *ListBusinessRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *ListBusinessRequest) SetPageNumber(v int) *ListBusinessRequest {
	s.PageNumber = &v
	return s
}

func (s *ListBusinessRequest) SetPageSize(v int) *ListBusinessRequest {
	s.PageSize = &v
	return s
}

func (s *ListBusinessRequest) SetKeyword(v string) *ListBusinessRequest {
	s.Keyword = &v
	return s
}

type ListBusinessResponse struct {
	RequestId      *string                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                     `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                   `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                   `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                      `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *ListBusinessResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListBusinessResponse) String() string {
	return tea.Prettify(s)
}

func (s ListBusinessResponse) GoString() string {
	return s.String()
}

func (s *ListBusinessResponse) SetRequestId(v string) *ListBusinessResponse {
	s.RequestId = &v
	return s
}

func (s *ListBusinessResponse) SetSuccess(v bool) *ListBusinessResponse {
	s.Success = &v
	return s
}

func (s *ListBusinessResponse) SetErrorCode(v string) *ListBusinessResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListBusinessResponse) SetErrorMessage(v string) *ListBusinessResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListBusinessResponse) SetHttpStatusCode(v int) *ListBusinessResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListBusinessResponse) SetData(v *ListBusinessResponseData) *ListBusinessResponse {
	s.Data = v
	return s
}

type ListBusinessResponseData struct {
	PageNumber *int                                `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                                `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Business   []*ListBusinessResponseDataBusiness `json:"Business,omitempty" xml:"Business,omitempty" require:"true" type:"Repeated"`
}

func (s ListBusinessResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListBusinessResponseData) GoString() string {
	return s.String()
}

func (s *ListBusinessResponseData) SetPageNumber(v int) *ListBusinessResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListBusinessResponseData) SetPageSize(v int) *ListBusinessResponseData {
	s.PageSize = &v
	return s
}

func (s *ListBusinessResponseData) SetTotalCount(v int) *ListBusinessResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListBusinessResponseData) SetBusiness(v []*ListBusinessResponseDataBusiness) *ListBusinessResponseData {
	s.Business = v
	return s
}

type ListBusinessResponseDataBusiness struct {
	BusinessId   *int64  `json:"BusinessId,omitempty" xml:"BusinessId,omitempty" require:"true"`
	BusinessName *string `json:"BusinessName,omitempty" xml:"BusinessName,omitempty" require:"true"`
	ProjectId    *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Owner        *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	UseType      *string `json:"UseType,omitempty" xml:"UseType,omitempty" require:"true"`
}

func (s ListBusinessResponseDataBusiness) String() string {
	return tea.Prettify(s)
}

func (s ListBusinessResponseDataBusiness) GoString() string {
	return s.String()
}

func (s *ListBusinessResponseDataBusiness) SetBusinessId(v int64) *ListBusinessResponseDataBusiness {
	s.BusinessId = &v
	return s
}

func (s *ListBusinessResponseDataBusiness) SetBusinessName(v string) *ListBusinessResponseDataBusiness {
	s.BusinessName = &v
	return s
}

func (s *ListBusinessResponseDataBusiness) SetProjectId(v int64) *ListBusinessResponseDataBusiness {
	s.ProjectId = &v
	return s
}

func (s *ListBusinessResponseDataBusiness) SetOwner(v string) *ListBusinessResponseDataBusiness {
	s.Owner = &v
	return s
}

func (s *ListBusinessResponseDataBusiness) SetDescription(v string) *ListBusinessResponseDataBusiness {
	s.Description = &v
	return s
}

func (s *ListBusinessResponseDataBusiness) SetUseType(v string) *ListBusinessResponseDataBusiness {
	s.UseType = &v
	return s
}

type GetMetaDBTableListRequest struct {
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	AppGuid    *string `json:"AppGuid,omitempty" xml:"AppGuid,omitempty" require:"true"`
}

func (s GetMetaDBTableListRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMetaDBTableListRequest) GoString() string {
	return s.String()
}

func (s *GetMetaDBTableListRequest) SetPageNumber(v int) *GetMetaDBTableListRequest {
	s.PageNumber = &v
	return s
}

func (s *GetMetaDBTableListRequest) SetPageSize(v int) *GetMetaDBTableListRequest {
	s.PageSize = &v
	return s
}

func (s *GetMetaDBTableListRequest) SetAppGuid(v string) *GetMetaDBTableListRequest {
	s.AppGuid = &v
	return s
}

type GetMetaDBTableListResponse struct {
	RequestId      *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string                         `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                         `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                            `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                           `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetMetaDBTableListResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaDBTableListResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMetaDBTableListResponse) GoString() string {
	return s.String()
}

func (s *GetMetaDBTableListResponse) SetRequestId(v string) *GetMetaDBTableListResponse {
	s.RequestId = &v
	return s
}

func (s *GetMetaDBTableListResponse) SetErrorCode(v string) *GetMetaDBTableListResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetMetaDBTableListResponse) SetErrorMessage(v string) *GetMetaDBTableListResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetMetaDBTableListResponse) SetHttpStatusCode(v int) *GetMetaDBTableListResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetMetaDBTableListResponse) SetSuccess(v bool) *GetMetaDBTableListResponse {
	s.Success = &v
	return s
}

func (s *GetMetaDBTableListResponse) SetData(v *GetMetaDBTableListResponseData) *GetMetaDBTableListResponse {
	s.Data = v
	return s
}

type GetMetaDBTableListResponseData struct {
	PageNumber      *int                                             `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize        *int                                             `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount      *int64                                           `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	TableEntityList []*GetMetaDBTableListResponseDataTableEntityList `json:"TableEntityList,omitempty" xml:"TableEntityList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMetaDBTableListResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetMetaDBTableListResponseData) GoString() string {
	return s.String()
}

func (s *GetMetaDBTableListResponseData) SetPageNumber(v int) *GetMetaDBTableListResponseData {
	s.PageNumber = &v
	return s
}

func (s *GetMetaDBTableListResponseData) SetPageSize(v int) *GetMetaDBTableListResponseData {
	s.PageSize = &v
	return s
}

func (s *GetMetaDBTableListResponseData) SetTotalCount(v int64) *GetMetaDBTableListResponseData {
	s.TotalCount = &v
	return s
}

func (s *GetMetaDBTableListResponseData) SetTableEntityList(v []*GetMetaDBTableListResponseDataTableEntityList) *GetMetaDBTableListResponseData {
	s.TableEntityList = v
	return s
}

type GetMetaDBTableListResponseDataTableEntityList struct {
	TableName *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	TableGuid *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
}

func (s GetMetaDBTableListResponseDataTableEntityList) String() string {
	return tea.Prettify(s)
}

func (s GetMetaDBTableListResponseDataTableEntityList) GoString() string {
	return s.String()
}

func (s *GetMetaDBTableListResponseDataTableEntityList) SetTableName(v string) *GetMetaDBTableListResponseDataTableEntityList {
	s.TableName = &v
	return s
}

func (s *GetMetaDBTableListResponseDataTableEntityList) SetTableGuid(v string) *GetMetaDBTableListResponseDataTableEntityList {
	s.TableGuid = &v
	return s
}

type CheckMetaTableRequest struct {
	TableGuid *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
}

func (s CheckMetaTableRequest) String() string {
	return tea.Prettify(s)
}

func (s CheckMetaTableRequest) GoString() string {
	return s.String()
}

func (s *CheckMetaTableRequest) SetTableGuid(v string) *CheckMetaTableRequest {
	s.TableGuid = &v
	return s
}

type CheckMetaTableResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s CheckMetaTableResponse) String() string {
	return tea.Prettify(s)
}

func (s CheckMetaTableResponse) GoString() string {
	return s.String()
}

func (s *CheckMetaTableResponse) SetRequestId(v string) *CheckMetaTableResponse {
	s.RequestId = &v
	return s
}

func (s *CheckMetaTableResponse) SetErrorCode(v string) *CheckMetaTableResponse {
	s.ErrorCode = &v
	return s
}

func (s *CheckMetaTableResponse) SetErrorMessage(v string) *CheckMetaTableResponse {
	s.ErrorMessage = &v
	return s
}

func (s *CheckMetaTableResponse) SetHttpStatusCode(v int) *CheckMetaTableResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *CheckMetaTableResponse) SetSuccess(v bool) *CheckMetaTableResponse {
	s.Success = &v
	return s
}

func (s *CheckMetaTableResponse) SetData(v bool) *CheckMetaTableResponse {
	s.Data = &v
	return s
}

type GetFolderRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	FolderId          *string `json:"FolderId,omitempty" xml:"FolderId,omitempty"`
	FolderPath        *string `json:"FolderPath,omitempty" xml:"FolderPath,omitempty"`
}

func (s GetFolderRequest) String() string {
	return tea.Prettify(s)
}

func (s GetFolderRequest) GoString() string {
	return s.String()
}

func (s *GetFolderRequest) SetProjectId(v int64) *GetFolderRequest {
	s.ProjectId = &v
	return s
}

func (s *GetFolderRequest) SetProjectIdentifier(v string) *GetFolderRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *GetFolderRequest) SetFolderId(v string) *GetFolderRequest {
	s.FolderId = &v
	return s
}

func (s *GetFolderRequest) SetFolderPath(v string) *GetFolderRequest {
	s.FolderPath = &v
	return s
}

type GetFolderResponse struct {
	RequestId      *string                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                  `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                   `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *GetFolderResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetFolderResponse) String() string {
	return tea.Prettify(s)
}

func (s GetFolderResponse) GoString() string {
	return s.String()
}

func (s *GetFolderResponse) SetRequestId(v string) *GetFolderResponse {
	s.RequestId = &v
	return s
}

func (s *GetFolderResponse) SetSuccess(v bool) *GetFolderResponse {
	s.Success = &v
	return s
}

func (s *GetFolderResponse) SetErrorCode(v string) *GetFolderResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetFolderResponse) SetErrorMessage(v string) *GetFolderResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetFolderResponse) SetHttpStatusCode(v int) *GetFolderResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetFolderResponse) SetData(v *GetFolderResponseData) *GetFolderResponse {
	s.Data = v
	return s
}

type GetFolderResponseData struct {
	FolderId   *string `json:"FolderId,omitempty" xml:"FolderId,omitempty" require:"true"`
	FolderPath *string `json:"FolderPath,omitempty" xml:"FolderPath,omitempty" require:"true"`
}

func (s GetFolderResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetFolderResponseData) GoString() string {
	return s.String()
}

func (s *GetFolderResponseData) SetFolderId(v string) *GetFolderResponseData {
	s.FolderId = &v
	return s
}

func (s *GetFolderResponseData) SetFolderPath(v string) *GetFolderResponseData {
	s.FolderPath = &v
	return s
}

type DeployFileRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	FileId            *int64  `json:"FileId,omitempty" xml:"FileId,omitempty"`
	Comment           *string `json:"Comment,omitempty" xml:"Comment,omitempty"`
	NodeId            *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty"`
}

func (s DeployFileRequest) String() string {
	return tea.Prettify(s)
}

func (s DeployFileRequest) GoString() string {
	return s.String()
}

func (s *DeployFileRequest) SetProjectId(v int64) *DeployFileRequest {
	s.ProjectId = &v
	return s
}

func (s *DeployFileRequest) SetProjectIdentifier(v string) *DeployFileRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *DeployFileRequest) SetFileId(v int64) *DeployFileRequest {
	s.FileId = &v
	return s
}

func (s *DeployFileRequest) SetComment(v string) *DeployFileRequest {
	s.Comment = &v
	return s
}

func (s *DeployFileRequest) SetNodeId(v int64) *DeployFileRequest {
	s.NodeId = &v
	return s
}

type DeployFileResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	Data           *int64  `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
}

func (s DeployFileResponse) String() string {
	return tea.Prettify(s)
}

func (s DeployFileResponse) GoString() string {
	return s.String()
}

func (s *DeployFileResponse) SetRequestId(v string) *DeployFileResponse {
	s.RequestId = &v
	return s
}

func (s *DeployFileResponse) SetSuccess(v bool) *DeployFileResponse {
	s.Success = &v
	return s
}

func (s *DeployFileResponse) SetErrorCode(v string) *DeployFileResponse {
	s.ErrorCode = &v
	return s
}

func (s *DeployFileResponse) SetErrorMessage(v string) *DeployFileResponse {
	s.ErrorMessage = &v
	return s
}

func (s *DeployFileResponse) SetData(v int64) *DeployFileResponse {
	s.Data = &v
	return s
}

func (s *DeployFileResponse) SetHttpStatusCode(v int) *DeployFileResponse {
	s.HttpStatusCode = &v
	return s
}

type DeleteBusinessRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	BusinessId        *int64  `json:"BusinessId,omitempty" xml:"BusinessId,omitempty" require:"true"`
}

func (s DeleteBusinessRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteBusinessRequest) GoString() string {
	return s.String()
}

func (s *DeleteBusinessRequest) SetProjectId(v int64) *DeleteBusinessRequest {
	s.ProjectId = &v
	return s
}

func (s *DeleteBusinessRequest) SetProjectIdentifier(v string) *DeleteBusinessRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *DeleteBusinessRequest) SetBusinessId(v int64) *DeleteBusinessRequest {
	s.BusinessId = &v
	return s
}

type DeleteBusinessResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
}

func (s DeleteBusinessResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteBusinessResponse) GoString() string {
	return s.String()
}

func (s *DeleteBusinessResponse) SetRequestId(v string) *DeleteBusinessResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteBusinessResponse) SetSuccess(v bool) *DeleteBusinessResponse {
	s.Success = &v
	return s
}

func (s *DeleteBusinessResponse) SetErrorCode(v string) *DeleteBusinessResponse {
	s.ErrorCode = &v
	return s
}

func (s *DeleteBusinessResponse) SetErrorMessage(v string) *DeleteBusinessResponse {
	s.ErrorMessage = &v
	return s
}

func (s *DeleteBusinessResponse) SetHttpStatusCode(v int) *DeleteBusinessResponse {
	s.HttpStatusCode = &v
	return s
}

type DeleteFileRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	FileId            *int64  `json:"FileId,omitempty" xml:"FileId,omitempty" require:"true"`
}

func (s DeleteFileRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteFileRequest) GoString() string {
	return s.String()
}

func (s *DeleteFileRequest) SetProjectId(v int64) *DeleteFileRequest {
	s.ProjectId = &v
	return s
}

func (s *DeleteFileRequest) SetProjectIdentifier(v string) *DeleteFileRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *DeleteFileRequest) SetFileId(v int64) *DeleteFileRequest {
	s.FileId = &v
	return s
}

type DeleteFileResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
}

func (s DeleteFileResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteFileResponse) GoString() string {
	return s.String()
}

func (s *DeleteFileResponse) SetRequestId(v string) *DeleteFileResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteFileResponse) SetSuccess(v bool) *DeleteFileResponse {
	s.Success = &v
	return s
}

func (s *DeleteFileResponse) SetErrorCode(v string) *DeleteFileResponse {
	s.ErrorCode = &v
	return s
}

func (s *DeleteFileResponse) SetErrorMessage(v string) *DeleteFileResponse {
	s.ErrorMessage = &v
	return s
}

func (s *DeleteFileResponse) SetHttpStatusCode(v int) *DeleteFileResponse {
	s.HttpStatusCode = &v
	return s
}

type ListQualityRulesRequest struct {
	ProjectName *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	EntityId    *int64  `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
	PageNumber  *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize    *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
}

func (s ListQualityRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListQualityRulesRequest) GoString() string {
	return s.String()
}

func (s *ListQualityRulesRequest) SetProjectName(v string) *ListQualityRulesRequest {
	s.ProjectName = &v
	return s
}

func (s *ListQualityRulesRequest) SetEntityId(v int64) *ListQualityRulesRequest {
	s.EntityId = &v
	return s
}

func (s *ListQualityRulesRequest) SetPageNumber(v int) *ListQualityRulesRequest {
	s.PageNumber = &v
	return s
}

func (s *ListQualityRulesRequest) SetPageSize(v int) *ListQualityRulesRequest {
	s.PageSize = &v
	return s
}

type ListQualityRulesResponse struct {
	ErrorCode      *string                       `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	Success        *bool                         `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorMessage   *string                       `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                          `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *ListQualityRulesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListQualityRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListQualityRulesResponse) GoString() string {
	return s.String()
}

func (s *ListQualityRulesResponse) SetErrorCode(v string) *ListQualityRulesResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListQualityRulesResponse) SetSuccess(v bool) *ListQualityRulesResponse {
	s.Success = &v
	return s
}

func (s *ListQualityRulesResponse) SetErrorMessage(v string) *ListQualityRulesResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListQualityRulesResponse) SetHttpStatusCode(v int) *ListQualityRulesResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListQualityRulesResponse) SetRequestId(v string) *ListQualityRulesResponse {
	s.RequestId = &v
	return s
}

func (s *ListQualityRulesResponse) SetData(v *ListQualityRulesResponseData) *ListQualityRulesResponse {
	s.Data = v
	return s
}

type ListQualityRulesResponseData struct {
	TotalCount *int64                               `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNumber *int                                 `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                 `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Rules      []*ListQualityRulesResponseDataRules `json:"Rules,omitempty" xml:"Rules,omitempty" require:"true" type:"Repeated"`
}

func (s ListQualityRulesResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListQualityRulesResponseData) GoString() string {
	return s.String()
}

func (s *ListQualityRulesResponseData) SetTotalCount(v int64) *ListQualityRulesResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListQualityRulesResponseData) SetPageNumber(v int) *ListQualityRulesResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListQualityRulesResponseData) SetPageSize(v int) *ListQualityRulesResponseData {
	s.PageSize = &v
	return s
}

func (s *ListQualityRulesResponseData) SetRules(v []*ListQualityRulesResponseDataRules) *ListQualityRulesResponseData {
	s.Rules = v
	return s
}

type ListQualityRulesResponseDataRules struct {
	ProjectName              *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	TableName                *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	Id                       *int    `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	EntityId                 *int    `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
	Property                 *string `json:"Property,omitempty" xml:"Property,omitempty" require:"true"`
	MethodId                 *int    `json:"MethodId,omitempty" xml:"MethodId,omitempty" require:"true"`
	MethodName               *string `json:"MethodName,omitempty" xml:"MethodName,omitempty" require:"true"`
	OnDuty                   *string `json:"OnDuty,omitempty" xml:"OnDuty,omitempty" require:"true"`
	RuleType                 *int    `json:"RuleType,omitempty" xml:"RuleType,omitempty" require:"true"`
	BlockType                *int    `json:"BlockType,omitempty" xml:"BlockType,omitempty" require:"true"`
	TemplateId               *int    `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
	TemplateName             *string `json:"TemplateName,omitempty" xml:"TemplateName,omitempty" require:"true"`
	RuleCheckerRelationId    *int    `json:"RuleCheckerRelationId,omitempty" xml:"RuleCheckerRelationId,omitempty" require:"true"`
	CheckerId                *int    `json:"CheckerId,omitempty" xml:"CheckerId,omitempty" require:"true"`
	FixCheck                 *bool   `json:"FixCheck,omitempty" xml:"FixCheck,omitempty" require:"true"`
	Trend                    *string `json:"Trend,omitempty" xml:"Trend,omitempty" require:"true"`
	WarningThreshold         *string `json:"WarningThreshold,omitempty" xml:"WarningThreshold,omitempty" require:"true"`
	CriticalThreshold        *string `json:"CriticalThreshold,omitempty" xml:"CriticalThreshold,omitempty" require:"true"`
	HistoryWarningThreshold  *string `json:"HistoryWarningThreshold,omitempty" xml:"HistoryWarningThreshold,omitempty" require:"true"`
	HistoryCriticalThreshold *string `json:"HistoryCriticalThreshold,omitempty" xml:"HistoryCriticalThreshold,omitempty" require:"true"`
	PropertyKey              *string `json:"PropertyKey,omitempty" xml:"PropertyKey,omitempty" require:"true"`
	MatchExpression          *string `json:"MatchExpression,omitempty" xml:"MatchExpression,omitempty" require:"true"`
	Comment                  *string `json:"Comment,omitempty" xml:"Comment,omitempty" require:"true"`
	ExpectValue              *string `json:"ExpectValue,omitempty" xml:"ExpectValue,omitempty" require:"true"`
}

func (s ListQualityRulesResponseDataRules) String() string {
	return tea.Prettify(s)
}

func (s ListQualityRulesResponseDataRules) GoString() string {
	return s.String()
}

func (s *ListQualityRulesResponseDataRules) SetProjectName(v string) *ListQualityRulesResponseDataRules {
	s.ProjectName = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetTableName(v string) *ListQualityRulesResponseDataRules {
	s.TableName = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetId(v int) *ListQualityRulesResponseDataRules {
	s.Id = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetEntityId(v int) *ListQualityRulesResponseDataRules {
	s.EntityId = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetProperty(v string) *ListQualityRulesResponseDataRules {
	s.Property = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetMethodId(v int) *ListQualityRulesResponseDataRules {
	s.MethodId = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetMethodName(v string) *ListQualityRulesResponseDataRules {
	s.MethodName = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetOnDuty(v string) *ListQualityRulesResponseDataRules {
	s.OnDuty = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetRuleType(v int) *ListQualityRulesResponseDataRules {
	s.RuleType = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetBlockType(v int) *ListQualityRulesResponseDataRules {
	s.BlockType = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetTemplateId(v int) *ListQualityRulesResponseDataRules {
	s.TemplateId = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetTemplateName(v string) *ListQualityRulesResponseDataRules {
	s.TemplateName = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetRuleCheckerRelationId(v int) *ListQualityRulesResponseDataRules {
	s.RuleCheckerRelationId = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetCheckerId(v int) *ListQualityRulesResponseDataRules {
	s.CheckerId = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetFixCheck(v bool) *ListQualityRulesResponseDataRules {
	s.FixCheck = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetTrend(v string) *ListQualityRulesResponseDataRules {
	s.Trend = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetWarningThreshold(v string) *ListQualityRulesResponseDataRules {
	s.WarningThreshold = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetCriticalThreshold(v string) *ListQualityRulesResponseDataRules {
	s.CriticalThreshold = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetHistoryWarningThreshold(v string) *ListQualityRulesResponseDataRules {
	s.HistoryWarningThreshold = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetHistoryCriticalThreshold(v string) *ListQualityRulesResponseDataRules {
	s.HistoryCriticalThreshold = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetPropertyKey(v string) *ListQualityRulesResponseDataRules {
	s.PropertyKey = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetMatchExpression(v string) *ListQualityRulesResponseDataRules {
	s.MatchExpression = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetComment(v string) *ListQualityRulesResponseDataRules {
	s.Comment = &v
	return s
}

func (s *ListQualityRulesResponseDataRules) SetExpectValue(v string) *ListQualityRulesResponseDataRules {
	s.ExpectValue = &v
	return s
}

type CreateRemindRequest struct {
	RemindName    *string `json:"RemindName,omitempty" xml:"RemindName,omitempty" require:"true"`
	DndEnd        *string `json:"DndEnd,omitempty" xml:"DndEnd,omitempty"`
	RemindUnit    *string `json:"RemindUnit,omitempty" xml:"RemindUnit,omitempty" require:"true"`
	NodeIds       *string `json:"NodeIds,omitempty" xml:"NodeIds,omitempty"`
	BaselineIds   *string `json:"BaselineIds,omitempty" xml:"BaselineIds,omitempty"`
	ProjectId     *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	BizProcessIds *string `json:"BizProcessIds,omitempty" xml:"BizProcessIds,omitempty"`
	RemindType    *string `json:"RemindType,omitempty" xml:"RemindType,omitempty" require:"true"`
	MaxAlertTimes *int    `json:"MaxAlertTimes,omitempty" xml:"MaxAlertTimes,omitempty"`
	AlertInterval *int    `json:"AlertInterval,omitempty" xml:"AlertInterval,omitempty"`
	Detail        *string `json:"Detail,omitempty" xml:"Detail,omitempty"`
	AlertUnit     *string `json:"AlertUnit,omitempty" xml:"AlertUnit,omitempty" require:"true"`
	AlertMethods  *string `json:"AlertMethods,omitempty" xml:"AlertMethods,omitempty"`
	AlertTargets  *string `json:"AlertTargets,omitempty" xml:"AlertTargets,omitempty"`
	RobotUrls     *string `json:"RobotUrls,omitempty" xml:"RobotUrls,omitempty"`
}

func (s CreateRemindRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateRemindRequest) GoString() string {
	return s.String()
}

func (s *CreateRemindRequest) SetRemindName(v string) *CreateRemindRequest {
	s.RemindName = &v
	return s
}

func (s *CreateRemindRequest) SetDndEnd(v string) *CreateRemindRequest {
	s.DndEnd = &v
	return s
}

func (s *CreateRemindRequest) SetRemindUnit(v string) *CreateRemindRequest {
	s.RemindUnit = &v
	return s
}

func (s *CreateRemindRequest) SetNodeIds(v string) *CreateRemindRequest {
	s.NodeIds = &v
	return s
}

func (s *CreateRemindRequest) SetBaselineIds(v string) *CreateRemindRequest {
	s.BaselineIds = &v
	return s
}

func (s *CreateRemindRequest) SetProjectId(v int64) *CreateRemindRequest {
	s.ProjectId = &v
	return s
}

func (s *CreateRemindRequest) SetBizProcessIds(v string) *CreateRemindRequest {
	s.BizProcessIds = &v
	return s
}

func (s *CreateRemindRequest) SetRemindType(v string) *CreateRemindRequest {
	s.RemindType = &v
	return s
}

func (s *CreateRemindRequest) SetMaxAlertTimes(v int) *CreateRemindRequest {
	s.MaxAlertTimes = &v
	return s
}

func (s *CreateRemindRequest) SetAlertInterval(v int) *CreateRemindRequest {
	s.AlertInterval = &v
	return s
}

func (s *CreateRemindRequest) SetDetail(v string) *CreateRemindRequest {
	s.Detail = &v
	return s
}

func (s *CreateRemindRequest) SetAlertUnit(v string) *CreateRemindRequest {
	s.AlertUnit = &v
	return s
}

func (s *CreateRemindRequest) SetAlertMethods(v string) *CreateRemindRequest {
	s.AlertMethods = &v
	return s
}

func (s *CreateRemindRequest) SetAlertTargets(v string) *CreateRemindRequest {
	s.AlertTargets = &v
	return s
}

func (s *CreateRemindRequest) SetRobotUrls(v string) *CreateRemindRequest {
	s.RobotUrls = &v
	return s
}

type CreateRemindResponse struct {
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *int64  `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s CreateRemindResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateRemindResponse) GoString() string {
	return s.String()
}

func (s *CreateRemindResponse) SetSuccess(v bool) *CreateRemindResponse {
	s.Success = &v
	return s
}

func (s *CreateRemindResponse) SetErrorCode(v string) *CreateRemindResponse {
	s.ErrorCode = &v
	return s
}

func (s *CreateRemindResponse) SetErrorMessage(v string) *CreateRemindResponse {
	s.ErrorMessage = &v
	return s
}

func (s *CreateRemindResponse) SetHttpStatusCode(v int) *CreateRemindResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *CreateRemindResponse) SetRequestId(v string) *CreateRemindResponse {
	s.RequestId = &v
	return s
}

func (s *CreateRemindResponse) SetData(v int64) *CreateRemindResponse {
	s.Data = &v
	return s
}

type GetQualityRuleRequest struct {
	RuleId      *int64  `json:"RuleId,omitempty" xml:"RuleId,omitempty" require:"true"`
	ProjectName *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
}

func (s GetQualityRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s GetQualityRuleRequest) GoString() string {
	return s.String()
}

func (s *GetQualityRuleRequest) SetRuleId(v int64) *GetQualityRuleRequest {
	s.RuleId = &v
	return s
}

func (s *GetQualityRuleRequest) SetProjectName(v string) *GetQualityRuleRequest {
	s.ProjectName = &v
	return s
}

type GetQualityRuleResponse struct {
	Success        *bool                       `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                     `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                     `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                        `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *GetQualityRuleResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetQualityRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s GetQualityRuleResponse) GoString() string {
	return s.String()
}

func (s *GetQualityRuleResponse) SetSuccess(v bool) *GetQualityRuleResponse {
	s.Success = &v
	return s
}

func (s *GetQualityRuleResponse) SetErrorCode(v string) *GetQualityRuleResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetQualityRuleResponse) SetErrorMessage(v string) *GetQualityRuleResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetQualityRuleResponse) SetHttpStatusCode(v int) *GetQualityRuleResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetQualityRuleResponse) SetRequestId(v string) *GetQualityRuleResponse {
	s.RequestId = &v
	return s
}

func (s *GetQualityRuleResponse) SetData(v *GetQualityRuleResponseData) *GetQualityRuleResponse {
	s.Data = v
	return s
}

type GetQualityRuleResponseData struct {
	Id                *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	EntityId          *int64  `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
	Property          *string `json:"Property,omitempty" xml:"Property,omitempty" require:"true"`
	MethodId          *int    `json:"MethodId,omitempty" xml:"MethodId,omitempty" require:"true"`
	MethodName        *string `json:"MethodName,omitempty" xml:"MethodName,omitempty" require:"true"`
	WhereCondition    *string `json:"WhereCondition,omitempty" xml:"WhereCondition,omitempty" require:"true"`
	OnDuty            *string `json:"OnDuty,omitempty" xml:"OnDuty,omitempty" require:"true"`
	RuleType          *int    `json:"RuleType,omitempty" xml:"RuleType,omitempty" require:"true"`
	BlockType         *int    `json:"BlockType,omitempty" xml:"BlockType,omitempty" require:"true"`
	TemplateId        *int    `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
	TemplateName      *string `json:"TemplateName,omitempty" xml:"TemplateName,omitempty" require:"true"`
	Comment           *string `json:"Comment,omitempty" xml:"Comment,omitempty" require:"true"`
	RuleName          *string `json:"RuleName,omitempty" xml:"RuleName,omitempty" require:"true"`
	PredictType       *int    `json:"PredictType,omitempty" xml:"PredictType,omitempty" require:"true"`
	WarningThreshold  *string `json:"WarningThreshold,omitempty" xml:"WarningThreshold,omitempty" require:"true"`
	CriticalThreshold *string `json:"CriticalThreshold,omitempty" xml:"CriticalThreshold,omitempty" require:"true"`
	Operator          *string `json:"Operator,omitempty" xml:"Operator,omitempty" require:"true"`
	ExpectValue       *string `json:"ExpectValue,omitempty" xml:"ExpectValue,omitempty" require:"true"`
	Trend             *string `json:"Trend,omitempty" xml:"Trend,omitempty" require:"true"`
	CheckerName       *string `json:"CheckerName,omitempty" xml:"CheckerName,omitempty" require:"true"`
	Checker           *int    `json:"Checker,omitempty" xml:"Checker,omitempty" require:"true"`
	FixCheck          *bool   `json:"FixCheck,omitempty" xml:"FixCheck,omitempty" require:"true"`
}

func (s GetQualityRuleResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetQualityRuleResponseData) GoString() string {
	return s.String()
}

func (s *GetQualityRuleResponseData) SetId(v int64) *GetQualityRuleResponseData {
	s.Id = &v
	return s
}

func (s *GetQualityRuleResponseData) SetEntityId(v int64) *GetQualityRuleResponseData {
	s.EntityId = &v
	return s
}

func (s *GetQualityRuleResponseData) SetProperty(v string) *GetQualityRuleResponseData {
	s.Property = &v
	return s
}

func (s *GetQualityRuleResponseData) SetMethodId(v int) *GetQualityRuleResponseData {
	s.MethodId = &v
	return s
}

func (s *GetQualityRuleResponseData) SetMethodName(v string) *GetQualityRuleResponseData {
	s.MethodName = &v
	return s
}

func (s *GetQualityRuleResponseData) SetWhereCondition(v string) *GetQualityRuleResponseData {
	s.WhereCondition = &v
	return s
}

func (s *GetQualityRuleResponseData) SetOnDuty(v string) *GetQualityRuleResponseData {
	s.OnDuty = &v
	return s
}

func (s *GetQualityRuleResponseData) SetRuleType(v int) *GetQualityRuleResponseData {
	s.RuleType = &v
	return s
}

func (s *GetQualityRuleResponseData) SetBlockType(v int) *GetQualityRuleResponseData {
	s.BlockType = &v
	return s
}

func (s *GetQualityRuleResponseData) SetTemplateId(v int) *GetQualityRuleResponseData {
	s.TemplateId = &v
	return s
}

func (s *GetQualityRuleResponseData) SetTemplateName(v string) *GetQualityRuleResponseData {
	s.TemplateName = &v
	return s
}

func (s *GetQualityRuleResponseData) SetComment(v string) *GetQualityRuleResponseData {
	s.Comment = &v
	return s
}

func (s *GetQualityRuleResponseData) SetRuleName(v string) *GetQualityRuleResponseData {
	s.RuleName = &v
	return s
}

func (s *GetQualityRuleResponseData) SetPredictType(v int) *GetQualityRuleResponseData {
	s.PredictType = &v
	return s
}

func (s *GetQualityRuleResponseData) SetWarningThreshold(v string) *GetQualityRuleResponseData {
	s.WarningThreshold = &v
	return s
}

func (s *GetQualityRuleResponseData) SetCriticalThreshold(v string) *GetQualityRuleResponseData {
	s.CriticalThreshold = &v
	return s
}

func (s *GetQualityRuleResponseData) SetOperator(v string) *GetQualityRuleResponseData {
	s.Operator = &v
	return s
}

func (s *GetQualityRuleResponseData) SetExpectValue(v string) *GetQualityRuleResponseData {
	s.ExpectValue = &v
	return s
}

func (s *GetQualityRuleResponseData) SetTrend(v string) *GetQualityRuleResponseData {
	s.Trend = &v
	return s
}

func (s *GetQualityRuleResponseData) SetCheckerName(v string) *GetQualityRuleResponseData {
	s.CheckerName = &v
	return s
}

func (s *GetQualityRuleResponseData) SetChecker(v int) *GetQualityRuleResponseData {
	s.Checker = &v
	return s
}

func (s *GetQualityRuleResponseData) SetFixCheck(v bool) *GetQualityRuleResponseData {
	s.FixCheck = &v
	return s
}

type GetDeploymentRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	DeploymentId      *int64  `json:"DeploymentId,omitempty" xml:"DeploymentId,omitempty" require:"true"`
}

func (s GetDeploymentRequest) String() string {
	return tea.Prettify(s)
}

func (s GetDeploymentRequest) GoString() string {
	return s.String()
}

func (s *GetDeploymentRequest) SetProjectId(v int64) *GetDeploymentRequest {
	s.ProjectId = &v
	return s
}

func (s *GetDeploymentRequest) SetProjectIdentifier(v string) *GetDeploymentRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *GetDeploymentRequest) SetDeploymentId(v int64) *GetDeploymentRequest {
	s.DeploymentId = &v
	return s
}

type GetDeploymentResponse struct {
	RequestId      *string                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                      `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                    `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                    `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                       `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *GetDeploymentResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetDeploymentResponse) String() string {
	return tea.Prettify(s)
}

func (s GetDeploymentResponse) GoString() string {
	return s.String()
}

func (s *GetDeploymentResponse) SetRequestId(v string) *GetDeploymentResponse {
	s.RequestId = &v
	return s
}

func (s *GetDeploymentResponse) SetSuccess(v bool) *GetDeploymentResponse {
	s.Success = &v
	return s
}

func (s *GetDeploymentResponse) SetErrorCode(v string) *GetDeploymentResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetDeploymentResponse) SetErrorMessage(v string) *GetDeploymentResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetDeploymentResponse) SetHttpStatusCode(v int) *GetDeploymentResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetDeploymentResponse) SetData(v *GetDeploymentResponseData) *GetDeploymentResponse {
	s.Data = v
	return s
}

type GetDeploymentResponseData struct {
	Deployment *GetDeploymentResponseDataDeployment `json:"Deployment,omitempty" xml:"Deployment,omitempty" require:"true" type:"Struct"`
}

func (s GetDeploymentResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetDeploymentResponseData) GoString() string {
	return s.String()
}

func (s *GetDeploymentResponseData) SetDeployment(v *GetDeploymentResponseDataDeployment) *GetDeploymentResponseData {
	s.Deployment = v
	return s
}

type GetDeploymentResponseDataDeployment struct {
	Name            *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	CreatorId       *string `json:"CreatorId,omitempty" xml:"CreatorId,omitempty" require:"true"`
	HandlerId       *string `json:"HandlerId,omitempty" xml:"HandlerId,omitempty" require:"true"`
	CreateTime      *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	ExecuteTime     *int64  `json:"ExecuteTime,omitempty" xml:"ExecuteTime,omitempty" require:"true"`
	Status          *int    `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	FromEnvironment *int    `json:"FromEnvironment,omitempty" xml:"FromEnvironment,omitempty" require:"true"`
	ToEnvironment   *int    `json:"ToEnvironment,omitempty" xml:"ToEnvironment,omitempty" require:"true"`
	ErrorMessage    *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
}

func (s GetDeploymentResponseDataDeployment) String() string {
	return tea.Prettify(s)
}

func (s GetDeploymentResponseDataDeployment) GoString() string {
	return s.String()
}

func (s *GetDeploymentResponseDataDeployment) SetName(v string) *GetDeploymentResponseDataDeployment {
	s.Name = &v
	return s
}

func (s *GetDeploymentResponseDataDeployment) SetCreatorId(v string) *GetDeploymentResponseDataDeployment {
	s.CreatorId = &v
	return s
}

func (s *GetDeploymentResponseDataDeployment) SetHandlerId(v string) *GetDeploymentResponseDataDeployment {
	s.HandlerId = &v
	return s
}

func (s *GetDeploymentResponseDataDeployment) SetCreateTime(v int64) *GetDeploymentResponseDataDeployment {
	s.CreateTime = &v
	return s
}

func (s *GetDeploymentResponseDataDeployment) SetExecuteTime(v int64) *GetDeploymentResponseDataDeployment {
	s.ExecuteTime = &v
	return s
}

func (s *GetDeploymentResponseDataDeployment) SetStatus(v int) *GetDeploymentResponseDataDeployment {
	s.Status = &v
	return s
}

func (s *GetDeploymentResponseDataDeployment) SetFromEnvironment(v int) *GetDeploymentResponseDataDeployment {
	s.FromEnvironment = &v
	return s
}

func (s *GetDeploymentResponseDataDeployment) SetToEnvironment(v int) *GetDeploymentResponseDataDeployment {
	s.ToEnvironment = &v
	return s
}

func (s *GetDeploymentResponseDataDeployment) SetErrorMessage(v string) *GetDeploymentResponseDataDeployment {
	s.ErrorMessage = &v
	return s
}

type UpdateRemindRequest struct {
	RemindId      *int64  `json:"RemindId,omitempty" xml:"RemindId,omitempty" require:"true"`
	RemindName    *string `json:"RemindName,omitempty" xml:"RemindName,omitempty"`
	DndEnd        *string `json:"DndEnd,omitempty" xml:"DndEnd,omitempty"`
	RemindUnit    *string `json:"RemindUnit,omitempty" xml:"RemindUnit,omitempty"`
	NodeIds       *string `json:"NodeIds,omitempty" xml:"NodeIds,omitempty"`
	BaselineIds   *string `json:"BaselineIds,omitempty" xml:"BaselineIds,omitempty"`
	ProjectId     *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	BizProcessIds *string `json:"BizProcessIds,omitempty" xml:"BizProcessIds,omitempty"`
	RemindType    *string `json:"RemindType,omitempty" xml:"RemindType,omitempty"`
	MaxAlertTimes *int    `json:"MaxAlertTimes,omitempty" xml:"MaxAlertTimes,omitempty"`
	AlertInterval *int    `json:"AlertInterval,omitempty" xml:"AlertInterval,omitempty"`
	Detail        *string `json:"Detail,omitempty" xml:"Detail,omitempty"`
	AlertUnit     *string `json:"AlertUnit,omitempty" xml:"AlertUnit,omitempty"`
	AlertMethods  *string `json:"AlertMethods,omitempty" xml:"AlertMethods,omitempty"`
	AlertTargets  *string `json:"AlertTargets,omitempty" xml:"AlertTargets,omitempty"`
	UseFlag       *bool   `json:"UseFlag,omitempty" xml:"UseFlag,omitempty"`
	RobotUrls     *string `json:"RobotUrls,omitempty" xml:"RobotUrls,omitempty"`
}

func (s UpdateRemindRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateRemindRequest) GoString() string {
	return s.String()
}

func (s *UpdateRemindRequest) SetRemindId(v int64) *UpdateRemindRequest {
	s.RemindId = &v
	return s
}

func (s *UpdateRemindRequest) SetRemindName(v string) *UpdateRemindRequest {
	s.RemindName = &v
	return s
}

func (s *UpdateRemindRequest) SetDndEnd(v string) *UpdateRemindRequest {
	s.DndEnd = &v
	return s
}

func (s *UpdateRemindRequest) SetRemindUnit(v string) *UpdateRemindRequest {
	s.RemindUnit = &v
	return s
}

func (s *UpdateRemindRequest) SetNodeIds(v string) *UpdateRemindRequest {
	s.NodeIds = &v
	return s
}

func (s *UpdateRemindRequest) SetBaselineIds(v string) *UpdateRemindRequest {
	s.BaselineIds = &v
	return s
}

func (s *UpdateRemindRequest) SetProjectId(v int64) *UpdateRemindRequest {
	s.ProjectId = &v
	return s
}

func (s *UpdateRemindRequest) SetBizProcessIds(v string) *UpdateRemindRequest {
	s.BizProcessIds = &v
	return s
}

func (s *UpdateRemindRequest) SetRemindType(v string) *UpdateRemindRequest {
	s.RemindType = &v
	return s
}

func (s *UpdateRemindRequest) SetMaxAlertTimes(v int) *UpdateRemindRequest {
	s.MaxAlertTimes = &v
	return s
}

func (s *UpdateRemindRequest) SetAlertInterval(v int) *UpdateRemindRequest {
	s.AlertInterval = &v
	return s
}

func (s *UpdateRemindRequest) SetDetail(v string) *UpdateRemindRequest {
	s.Detail = &v
	return s
}

func (s *UpdateRemindRequest) SetAlertUnit(v string) *UpdateRemindRequest {
	s.AlertUnit = &v
	return s
}

func (s *UpdateRemindRequest) SetAlertMethods(v string) *UpdateRemindRequest {
	s.AlertMethods = &v
	return s
}

func (s *UpdateRemindRequest) SetAlertTargets(v string) *UpdateRemindRequest {
	s.AlertTargets = &v
	return s
}

func (s *UpdateRemindRequest) SetUseFlag(v bool) *UpdateRemindRequest {
	s.UseFlag = &v
	return s
}

func (s *UpdateRemindRequest) SetRobotUrls(v string) *UpdateRemindRequest {
	s.RobotUrls = &v
	return s
}

type UpdateRemindResponse struct {
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s UpdateRemindResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateRemindResponse) GoString() string {
	return s.String()
}

func (s *UpdateRemindResponse) SetSuccess(v bool) *UpdateRemindResponse {
	s.Success = &v
	return s
}

func (s *UpdateRemindResponse) SetErrorCode(v string) *UpdateRemindResponse {
	s.ErrorCode = &v
	return s
}

func (s *UpdateRemindResponse) SetErrorMessage(v string) *UpdateRemindResponse {
	s.ErrorMessage = &v
	return s
}

func (s *UpdateRemindResponse) SetHttpStatusCode(v int) *UpdateRemindResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *UpdateRemindResponse) SetRequestId(v string) *UpdateRemindResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateRemindResponse) SetData(v bool) *UpdateRemindResponse {
	s.Data = &v
	return s
}

type GetMetaColumnLineageRequest struct {
	ColumnGuid *string `json:"ColumnGuid,omitempty" xml:"ColumnGuid,omitempty" require:"true"`
	Direction  *string `json:"Direction,omitempty" xml:"Direction,omitempty" require:"true"`
	PageNum    *int    `json:"PageNum,omitempty" xml:"PageNum,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s GetMetaColumnLineageRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMetaColumnLineageRequest) GoString() string {
	return s.String()
}

func (s *GetMetaColumnLineageRequest) SetColumnGuid(v string) *GetMetaColumnLineageRequest {
	s.ColumnGuid = &v
	return s
}

func (s *GetMetaColumnLineageRequest) SetDirection(v string) *GetMetaColumnLineageRequest {
	s.Direction = &v
	return s
}

func (s *GetMetaColumnLineageRequest) SetPageNum(v int) *GetMetaColumnLineageRequest {
	s.PageNum = &v
	return s
}

func (s *GetMetaColumnLineageRequest) SetPageSize(v int) *GetMetaColumnLineageRequest {
	s.PageSize = &v
	return s
}

type GetMetaColumnLineageResponse struct {
	RequestId      *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string                           `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                           `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                              `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                             `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetMetaColumnLineageResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaColumnLineageResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMetaColumnLineageResponse) GoString() string {
	return s.String()
}

func (s *GetMetaColumnLineageResponse) SetRequestId(v string) *GetMetaColumnLineageResponse {
	s.RequestId = &v
	return s
}

func (s *GetMetaColumnLineageResponse) SetErrorCode(v string) *GetMetaColumnLineageResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetMetaColumnLineageResponse) SetErrorMessage(v string) *GetMetaColumnLineageResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetMetaColumnLineageResponse) SetHttpStatusCode(v int) *GetMetaColumnLineageResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetMetaColumnLineageResponse) SetSuccess(v bool) *GetMetaColumnLineageResponse {
	s.Success = &v
	return s
}

func (s *GetMetaColumnLineageResponse) SetData(v *GetMetaColumnLineageResponseData) *GetMetaColumnLineageResponse {
	s.Data = v
	return s
}

type GetMetaColumnLineageResponseData struct {
	TotalCount     *int64                                            `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNum        *int                                              `json:"PageNum,omitempty" xml:"PageNum,omitempty" require:"true"`
	PageSize       *int                                              `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	DataEntityList []*GetMetaColumnLineageResponseDataDataEntityList `json:"DataEntityList,omitempty" xml:"DataEntityList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMetaColumnLineageResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetMetaColumnLineageResponseData) GoString() string {
	return s.String()
}

func (s *GetMetaColumnLineageResponseData) SetTotalCount(v int64) *GetMetaColumnLineageResponseData {
	s.TotalCount = &v
	return s
}

func (s *GetMetaColumnLineageResponseData) SetPageNum(v int) *GetMetaColumnLineageResponseData {
	s.PageNum = &v
	return s
}

func (s *GetMetaColumnLineageResponseData) SetPageSize(v int) *GetMetaColumnLineageResponseData {
	s.PageSize = &v
	return s
}

func (s *GetMetaColumnLineageResponseData) SetDataEntityList(v []*GetMetaColumnLineageResponseDataDataEntityList) *GetMetaColumnLineageResponseData {
	s.DataEntityList = v
	return s
}

type GetMetaColumnLineageResponseDataDataEntityList struct {
	ColumnName *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	ColumnGuid *string `json:"ColumnGuid,omitempty" xml:"ColumnGuid,omitempty" require:"true"`
}

func (s GetMetaColumnLineageResponseDataDataEntityList) String() string {
	return tea.Prettify(s)
}

func (s GetMetaColumnLineageResponseDataDataEntityList) GoString() string {
	return s.String()
}

func (s *GetMetaColumnLineageResponseDataDataEntityList) SetColumnName(v string) *GetMetaColumnLineageResponseDataDataEntityList {
	s.ColumnName = &v
	return s
}

func (s *GetMetaColumnLineageResponseDataDataEntityList) SetColumnGuid(v string) *GetMetaColumnLineageResponseDataDataEntityList {
	s.ColumnGuid = &v
	return s
}

type UpdateBusinessRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	BusinessName      *string `json:"BusinessName,omitempty" xml:"BusinessName,omitempty"`
	Description       *string `json:"Description,omitempty" xml:"Description,omitempty"`
	Owner             *string `json:"Owner,omitempty" xml:"Owner,omitempty"`
	BusinessId        *int64  `json:"BusinessId,omitempty" xml:"BusinessId,omitempty" require:"true"`
}

func (s UpdateBusinessRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateBusinessRequest) GoString() string {
	return s.String()
}

func (s *UpdateBusinessRequest) SetProjectId(v int64) *UpdateBusinessRequest {
	s.ProjectId = &v
	return s
}

func (s *UpdateBusinessRequest) SetProjectIdentifier(v string) *UpdateBusinessRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *UpdateBusinessRequest) SetBusinessName(v string) *UpdateBusinessRequest {
	s.BusinessName = &v
	return s
}

func (s *UpdateBusinessRequest) SetDescription(v string) *UpdateBusinessRequest {
	s.Description = &v
	return s
}

func (s *UpdateBusinessRequest) SetOwner(v string) *UpdateBusinessRequest {
	s.Owner = &v
	return s
}

func (s *UpdateBusinessRequest) SetBusinessId(v int64) *UpdateBusinessRequest {
	s.BusinessId = &v
	return s
}

type UpdateBusinessResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
}

func (s UpdateBusinessResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateBusinessResponse) GoString() string {
	return s.String()
}

func (s *UpdateBusinessResponse) SetRequestId(v string) *UpdateBusinessResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateBusinessResponse) SetSuccess(v bool) *UpdateBusinessResponse {
	s.Success = &v
	return s
}

func (s *UpdateBusinessResponse) SetErrorCode(v string) *UpdateBusinessResponse {
	s.ErrorCode = &v
	return s
}

func (s *UpdateBusinessResponse) SetErrorMessage(v string) *UpdateBusinessResponse {
	s.ErrorMessage = &v
	return s
}

func (s *UpdateBusinessResponse) SetHttpStatusCode(v int) *UpdateBusinessResponse {
	s.HttpStatusCode = &v
	return s
}

type UpdateQualityRuleRequest struct {
	BlockType         *int    `json:"BlockType,omitempty" xml:"BlockType,omitempty"`
	EntityId          *int64  `json:"EntityId,omitempty" xml:"EntityId,omitempty"`
	Comment           *string `json:"Comment,omitempty" xml:"Comment,omitempty"`
	Checker           *int    `json:"Checker,omitempty" xml:"Checker,omitempty"`
	ExpectValue       *string `json:"ExpectValue,omitempty" xml:"ExpectValue,omitempty"`
	Id                *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Trend             *string `json:"Trend,omitempty" xml:"Trend,omitempty"`
	MethodName        *string `json:"MethodName,omitempty" xml:"MethodName,omitempty"`
	Operator          *string `json:"Operator,omitempty" xml:"Operator,omitempty"`
	ProjectName       *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	Property          *string `json:"Property,omitempty" xml:"Property,omitempty"`
	PropertyType      *string `json:"PropertyType,omitempty" xml:"PropertyType,omitempty"`
	RuleType          *int    `json:"RuleType,omitempty" xml:"RuleType,omitempty"`
	WhereCondition    *string `json:"WhereCondition,omitempty" xml:"WhereCondition,omitempty"`
	CriticalThreshold *string `json:"CriticalThreshold,omitempty" xml:"CriticalThreshold,omitempty"`
	WarningThreshold  *string `json:"WarningThreshold,omitempty" xml:"WarningThreshold,omitempty"`
	TemplateId        *int    `json:"TemplateId,omitempty" xml:"TemplateId,omitempty"`
	RuleName          *string `json:"RuleName,omitempty" xml:"RuleName,omitempty"`
	PredictType       *int    `json:"PredictType,omitempty" xml:"PredictType,omitempty"`
}

func (s UpdateQualityRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateQualityRuleRequest) GoString() string {
	return s.String()
}

func (s *UpdateQualityRuleRequest) SetBlockType(v int) *UpdateQualityRuleRequest {
	s.BlockType = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetEntityId(v int64) *UpdateQualityRuleRequest {
	s.EntityId = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetComment(v string) *UpdateQualityRuleRequest {
	s.Comment = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetChecker(v int) *UpdateQualityRuleRequest {
	s.Checker = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetExpectValue(v string) *UpdateQualityRuleRequest {
	s.ExpectValue = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetId(v int64) *UpdateQualityRuleRequest {
	s.Id = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetTrend(v string) *UpdateQualityRuleRequest {
	s.Trend = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetMethodName(v string) *UpdateQualityRuleRequest {
	s.MethodName = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetOperator(v string) *UpdateQualityRuleRequest {
	s.Operator = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetProjectName(v string) *UpdateQualityRuleRequest {
	s.ProjectName = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetProperty(v string) *UpdateQualityRuleRequest {
	s.Property = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetPropertyType(v string) *UpdateQualityRuleRequest {
	s.PropertyType = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetRuleType(v int) *UpdateQualityRuleRequest {
	s.RuleType = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetWhereCondition(v string) *UpdateQualityRuleRequest {
	s.WhereCondition = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetCriticalThreshold(v string) *UpdateQualityRuleRequest {
	s.CriticalThreshold = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetWarningThreshold(v string) *UpdateQualityRuleRequest {
	s.WarningThreshold = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetTemplateId(v int) *UpdateQualityRuleRequest {
	s.TemplateId = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetRuleName(v string) *UpdateQualityRuleRequest {
	s.RuleName = &v
	return s
}

func (s *UpdateQualityRuleRequest) SetPredictType(v int) *UpdateQualityRuleRequest {
	s.PredictType = &v
	return s
}

type UpdateQualityRuleResponse struct {
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateQualityRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateQualityRuleResponse) GoString() string {
	return s.String()
}

func (s *UpdateQualityRuleResponse) SetErrorCode(v string) *UpdateQualityRuleResponse {
	s.ErrorCode = &v
	return s
}

func (s *UpdateQualityRuleResponse) SetData(v bool) *UpdateQualityRuleResponse {
	s.Data = &v
	return s
}

func (s *UpdateQualityRuleResponse) SetSuccess(v bool) *UpdateQualityRuleResponse {
	s.Success = &v
	return s
}

func (s *UpdateQualityRuleResponse) SetErrorMessage(v string) *UpdateQualityRuleResponse {
	s.ErrorMessage = &v
	return s
}

func (s *UpdateQualityRuleResponse) SetHttpStatusCode(v int) *UpdateQualityRuleResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *UpdateQualityRuleResponse) SetRequestId(v string) *UpdateQualityRuleResponse {
	s.RequestId = &v
	return s
}

type DeleteQualityRuleRequest struct {
	ProjectName *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	RuleId      *int64  `json:"RuleId,omitempty" xml:"RuleId,omitempty" require:"true"`
}

func (s DeleteQualityRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteQualityRuleRequest) GoString() string {
	return s.String()
}

func (s *DeleteQualityRuleRequest) SetProjectName(v string) *DeleteQualityRuleRequest {
	s.ProjectName = &v
	return s
}

func (s *DeleteQualityRuleRequest) SetRuleId(v int64) *DeleteQualityRuleRequest {
	s.RuleId = &v
	return s
}

type DeleteQualityRuleResponse struct {
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteQualityRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteQualityRuleResponse) GoString() string {
	return s.String()
}

func (s *DeleteQualityRuleResponse) SetErrorCode(v string) *DeleteQualityRuleResponse {
	s.ErrorCode = &v
	return s
}

func (s *DeleteQualityRuleResponse) SetData(v bool) *DeleteQualityRuleResponse {
	s.Data = &v
	return s
}

func (s *DeleteQualityRuleResponse) SetErrorMessage(v string) *DeleteQualityRuleResponse {
	s.ErrorMessage = &v
	return s
}

func (s *DeleteQualityRuleResponse) SetSuccess(v bool) *DeleteQualityRuleResponse {
	s.Success = &v
	return s
}

func (s *DeleteQualityRuleResponse) SetHttpStatusCode(v int) *DeleteQualityRuleResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *DeleteQualityRuleResponse) SetRequestId(v string) *DeleteQualityRuleResponse {
	s.RequestId = &v
	return s
}

type SubmitFileRequest struct {
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	ProjectIdentifier *string `json:"ProjectIdentifier,omitempty" xml:"ProjectIdentifier,omitempty"`
	FileId            *int64  `json:"FileId,omitempty" xml:"FileId,omitempty" require:"true"`
	Comment           *string `json:"Comment,omitempty" xml:"Comment,omitempty"`
}

func (s SubmitFileRequest) String() string {
	return tea.Prettify(s)
}

func (s SubmitFileRequest) GoString() string {
	return s.String()
}

func (s *SubmitFileRequest) SetProjectId(v int64) *SubmitFileRequest {
	s.ProjectId = &v
	return s
}

func (s *SubmitFileRequest) SetProjectIdentifier(v string) *SubmitFileRequest {
	s.ProjectIdentifier = &v
	return s
}

func (s *SubmitFileRequest) SetFileId(v int64) *SubmitFileRequest {
	s.FileId = &v
	return s
}

func (s *SubmitFileRequest) SetComment(v string) *SubmitFileRequest {
	s.Comment = &v
	return s
}

type SubmitFileResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	Data           *int64  `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
}

func (s SubmitFileResponse) String() string {
	return tea.Prettify(s)
}

func (s SubmitFileResponse) GoString() string {
	return s.String()
}

func (s *SubmitFileResponse) SetRequestId(v string) *SubmitFileResponse {
	s.RequestId = &v
	return s
}

func (s *SubmitFileResponse) SetSuccess(v bool) *SubmitFileResponse {
	s.Success = &v
	return s
}

func (s *SubmitFileResponse) SetErrorCode(v string) *SubmitFileResponse {
	s.ErrorCode = &v
	return s
}

func (s *SubmitFileResponse) SetErrorMessage(v string) *SubmitFileResponse {
	s.ErrorMessage = &v
	return s
}

func (s *SubmitFileResponse) SetData(v int64) *SubmitFileResponse {
	s.Data = &v
	return s
}

func (s *SubmitFileResponse) SetHttpStatusCode(v int) *SubmitFileResponse {
	s.HttpStatusCode = &v
	return s
}

type GetDataServiceApiRequest struct {
	TenantId  *int64 `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ProjectId *int64 `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	ApiId     *int64 `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
}

func (s GetDataServiceApiRequest) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApiRequest) GoString() string {
	return s.String()
}

func (s *GetDataServiceApiRequest) SetTenantId(v int64) *GetDataServiceApiRequest {
	s.TenantId = &v
	return s
}

func (s *GetDataServiceApiRequest) SetProjectId(v int64) *GetDataServiceApiRequest {
	s.ProjectId = &v
	return s
}

func (s *GetDataServiceApiRequest) SetApiId(v int64) *GetDataServiceApiRequest {
	s.ApiId = &v
	return s
}

type GetDataServiceApiResponse struct {
	ErrorCode      *string                        `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                        `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                           `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                          `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetDataServiceApiResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetDataServiceApiResponse) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApiResponse) GoString() string {
	return s.String()
}

func (s *GetDataServiceApiResponse) SetErrorCode(v string) *GetDataServiceApiResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetDataServiceApiResponse) SetErrorMessage(v string) *GetDataServiceApiResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetDataServiceApiResponse) SetHttpStatusCode(v int) *GetDataServiceApiResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetDataServiceApiResponse) SetRequestId(v string) *GetDataServiceApiResponse {
	s.RequestId = &v
	return s
}

func (s *GetDataServiceApiResponse) SetSuccess(v bool) *GetDataServiceApiResponse {
	s.Success = &v
	return s
}

func (s *GetDataServiceApiResponse) SetData(v *GetDataServiceApiResponseData) *GetDataServiceApiResponse {
	s.Data = v
	return s
}

type GetDataServiceApiResponseData struct {
	ApiId               *int64                                            `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiMode             *int                                              `json:"ApiMode,omitempty" xml:"ApiMode,omitempty" require:"true"`
	ApiName             *string                                           `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	ApiPath             *string                                           `json:"ApiPath,omitempty" xml:"ApiPath,omitempty" require:"true"`
	CreatedTime         *string                                           `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	CreatorId           *string                                           `json:"CreatorId,omitempty" xml:"CreatorId,omitempty" require:"true"`
	Description         *string                                           `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	GroupId             *string                                           `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ModifiedTime        *string                                           `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	OperatorId          *string                                           `json:"OperatorId,omitempty" xml:"OperatorId,omitempty" require:"true"`
	ProjectId           *int64                                            `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	RequestMethod       *int                                              `json:"RequestMethod,omitempty" xml:"RequestMethod,omitempty" require:"true"`
	ResponseContentType *int                                              `json:"ResponseContentType,omitempty" xml:"ResponseContentType,omitempty" require:"true"`
	Status              *int                                              `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	TenantId            *int64                                            `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	Timeout             *int                                              `json:"Timeout,omitempty" xml:"Timeout,omitempty" require:"true"`
	VisibleRange        *int                                              `json:"VisibleRange,omitempty" xml:"VisibleRange,omitempty" require:"true"`
	RegistrationDetails *GetDataServiceApiResponseDataRegistrationDetails `json:"RegistrationDetails,omitempty" xml:"RegistrationDetails,omitempty" require:"true" type:"Struct"`
	ScriptDetails       *GetDataServiceApiResponseDataScriptDetails       `json:"ScriptDetails,omitempty" xml:"ScriptDetails,omitempty" require:"true" type:"Struct"`
	WizardDetails       *GetDataServiceApiResponseDataWizardDetails       `json:"WizardDetails,omitempty" xml:"WizardDetails,omitempty" require:"true" type:"Struct"`
	Protocols           []*int                                            `json:"Protocols,omitempty" xml:"Protocols,omitempty" require:"true" type:"Repeated"`
}

func (s GetDataServiceApiResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApiResponseData) GoString() string {
	return s.String()
}

func (s *GetDataServiceApiResponseData) SetApiId(v int64) *GetDataServiceApiResponseData {
	s.ApiId = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetApiMode(v int) *GetDataServiceApiResponseData {
	s.ApiMode = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetApiName(v string) *GetDataServiceApiResponseData {
	s.ApiName = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetApiPath(v string) *GetDataServiceApiResponseData {
	s.ApiPath = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetCreatedTime(v string) *GetDataServiceApiResponseData {
	s.CreatedTime = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetCreatorId(v string) *GetDataServiceApiResponseData {
	s.CreatorId = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetDescription(v string) *GetDataServiceApiResponseData {
	s.Description = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetGroupId(v string) *GetDataServiceApiResponseData {
	s.GroupId = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetModifiedTime(v string) *GetDataServiceApiResponseData {
	s.ModifiedTime = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetOperatorId(v string) *GetDataServiceApiResponseData {
	s.OperatorId = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetProjectId(v int64) *GetDataServiceApiResponseData {
	s.ProjectId = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetRequestMethod(v int) *GetDataServiceApiResponseData {
	s.RequestMethod = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetResponseContentType(v int) *GetDataServiceApiResponseData {
	s.ResponseContentType = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetStatus(v int) *GetDataServiceApiResponseData {
	s.Status = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetTenantId(v int64) *GetDataServiceApiResponseData {
	s.TenantId = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetTimeout(v int) *GetDataServiceApiResponseData {
	s.Timeout = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetVisibleRange(v int) *GetDataServiceApiResponseData {
	s.VisibleRange = &v
	return s
}

func (s *GetDataServiceApiResponseData) SetRegistrationDetails(v *GetDataServiceApiResponseDataRegistrationDetails) *GetDataServiceApiResponseData {
	s.RegistrationDetails = v
	return s
}

func (s *GetDataServiceApiResponseData) SetScriptDetails(v *GetDataServiceApiResponseDataScriptDetails) *GetDataServiceApiResponseData {
	s.ScriptDetails = v
	return s
}

func (s *GetDataServiceApiResponseData) SetWizardDetails(v *GetDataServiceApiResponseDataWizardDetails) *GetDataServiceApiResponseData {
	s.WizardDetails = v
	return s
}

func (s *GetDataServiceApiResponseData) SetProtocols(v []*int) *GetDataServiceApiResponseData {
	s.Protocols = v
	return s
}

type GetDataServiceApiResponseDataRegistrationDetails struct {
	FailedResultSample            *string                                                                          `json:"FailedResultSample,omitempty" xml:"FailedResultSample,omitempty" require:"true"`
	ServiceContentType            *int                                                                             `json:"ServiceContentType,omitempty" xml:"ServiceContentType,omitempty" require:"true"`
	ServiceHost                   *string                                                                          `json:"ServiceHost,omitempty" xml:"ServiceHost,omitempty" require:"true"`
	ServicePath                   *string                                                                          `json:"ServicePath,omitempty" xml:"ServicePath,omitempty" require:"true"`
	ServiceRequestBodyDescription *string                                                                          `json:"ServiceRequestBodyDescription,omitempty" xml:"ServiceRequestBodyDescription,omitempty" require:"true"`
	SuccessfulResultSample        *string                                                                          `json:"SuccessfulResultSample,omitempty" xml:"SuccessfulResultSample,omitempty" require:"true"`
	RegistrationErrorCodes        []*GetDataServiceApiResponseDataRegistrationDetailsRegistrationErrorCodes        `json:"RegistrationErrorCodes,omitempty" xml:"RegistrationErrorCodes,omitempty" require:"true" type:"Repeated"`
	RegistrationRequestParameters []*GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters `json:"RegistrationRequestParameters,omitempty" xml:"RegistrationRequestParameters,omitempty" require:"true" type:"Repeated"`
}

func (s GetDataServiceApiResponseDataRegistrationDetails) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApiResponseDataRegistrationDetails) GoString() string {
	return s.String()
}

func (s *GetDataServiceApiResponseDataRegistrationDetails) SetFailedResultSample(v string) *GetDataServiceApiResponseDataRegistrationDetails {
	s.FailedResultSample = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetails) SetServiceContentType(v int) *GetDataServiceApiResponseDataRegistrationDetails {
	s.ServiceContentType = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetails) SetServiceHost(v string) *GetDataServiceApiResponseDataRegistrationDetails {
	s.ServiceHost = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetails) SetServicePath(v string) *GetDataServiceApiResponseDataRegistrationDetails {
	s.ServicePath = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetails) SetServiceRequestBodyDescription(v string) *GetDataServiceApiResponseDataRegistrationDetails {
	s.ServiceRequestBodyDescription = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetails) SetSuccessfulResultSample(v string) *GetDataServiceApiResponseDataRegistrationDetails {
	s.SuccessfulResultSample = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetails) SetRegistrationErrorCodes(v []*GetDataServiceApiResponseDataRegistrationDetailsRegistrationErrorCodes) *GetDataServiceApiResponseDataRegistrationDetails {
	s.RegistrationErrorCodes = v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetails) SetRegistrationRequestParameters(v []*GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters) *GetDataServiceApiResponseDataRegistrationDetails {
	s.RegistrationRequestParameters = v
	return s
}

type GetDataServiceApiResponseDataRegistrationDetailsRegistrationErrorCodes struct {
	ErrorCode     *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage  *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	ErrorSolution *string `json:"ErrorSolution,omitempty" xml:"ErrorSolution,omitempty" require:"true"`
}

func (s GetDataServiceApiResponseDataRegistrationDetailsRegistrationErrorCodes) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApiResponseDataRegistrationDetailsRegistrationErrorCodes) GoString() string {
	return s.String()
}

func (s *GetDataServiceApiResponseDataRegistrationDetailsRegistrationErrorCodes) SetErrorCode(v string) *GetDataServiceApiResponseDataRegistrationDetailsRegistrationErrorCodes {
	s.ErrorCode = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetailsRegistrationErrorCodes) SetErrorMessage(v string) *GetDataServiceApiResponseDataRegistrationDetailsRegistrationErrorCodes {
	s.ErrorMessage = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetailsRegistrationErrorCodes) SetErrorSolution(v string) *GetDataServiceApiResponseDataRegistrationDetailsRegistrationErrorCodes {
	s.ErrorSolution = &v
	return s
}

type GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters struct {
	ColumnName           *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	DefaultValue         *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	IsRequiredParameter  *bool   `json:"IsRequiredParameter,omitempty" xml:"IsRequiredParameter,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ParameterOperator    *int    `json:"ParameterOperator,omitempty" xml:"ParameterOperator,omitempty" require:"true"`
	ParameterPosition    *int    `json:"ParameterPosition,omitempty" xml:"ParameterPosition,omitempty" require:"true"`
}

func (s GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters) GoString() string {
	return s.String()
}

func (s *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetColumnName(v string) *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.ColumnName = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetDefaultValue(v string) *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.DefaultValue = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetExampleValue(v string) *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.ExampleValue = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetIsRequiredParameter(v bool) *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.IsRequiredParameter = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetParameterDataType(v int) *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.ParameterDataType = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetParameterDescription(v string) *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.ParameterDescription = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetParameterName(v string) *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.ParameterName = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetParameterOperator(v int) *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.ParameterOperator = &v
	return s
}

func (s *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetParameterPosition(v int) *GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.ParameterPosition = &v
	return s
}

type GetDataServiceApiResponseDataScriptDetails struct {
	IsPagedResponse          *bool                                                                 `json:"IsPagedResponse,omitempty" xml:"IsPagedResponse,omitempty" require:"true"`
	Script                   *string                                                               `json:"Script,omitempty" xml:"Script,omitempty" require:"true"`
	ScriptRequestParameters  []*GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters  `json:"ScriptRequestParameters,omitempty" xml:"ScriptRequestParameters,omitempty" require:"true" type:"Repeated"`
	ScriptResponseParameters []*GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters `json:"ScriptResponseParameters,omitempty" xml:"ScriptResponseParameters,omitempty" require:"true" type:"Repeated"`
	ScriptConnection         *GetDataServiceApiResponseDataScriptDetailsScriptConnection           `json:"ScriptConnection,omitempty" xml:"ScriptConnection,omitempty" require:"true" type:"Struct"`
}

func (s GetDataServiceApiResponseDataScriptDetails) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApiResponseDataScriptDetails) GoString() string {
	return s.String()
}

func (s *GetDataServiceApiResponseDataScriptDetails) SetIsPagedResponse(v bool) *GetDataServiceApiResponseDataScriptDetails {
	s.IsPagedResponse = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetails) SetScript(v string) *GetDataServiceApiResponseDataScriptDetails {
	s.Script = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetails) SetScriptRequestParameters(v []*GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters) *GetDataServiceApiResponseDataScriptDetails {
	s.ScriptRequestParameters = v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetails) SetScriptResponseParameters(v []*GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters) *GetDataServiceApiResponseDataScriptDetails {
	s.ScriptResponseParameters = v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetails) SetScriptConnection(v *GetDataServiceApiResponseDataScriptDetailsScriptConnection) *GetDataServiceApiResponseDataScriptDetails {
	s.ScriptConnection = v
	return s
}

type GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters struct {
	ColumnName           *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	DefaultValue         *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	IsRequiredParameter  *bool   `json:"IsRequiredParameter,omitempty" xml:"IsRequiredParameter,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ParameterOperator    *int    `json:"ParameterOperator,omitempty" xml:"ParameterOperator,omitempty" require:"true"`
	ParameterPosition    *int    `json:"ParameterPosition,omitempty" xml:"ParameterPosition,omitempty" require:"true"`
}

func (s GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters) GoString() string {
	return s.String()
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters) SetColumnName(v string) *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters {
	s.ColumnName = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters) SetDefaultValue(v string) *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters {
	s.DefaultValue = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters) SetExampleValue(v string) *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters {
	s.ExampleValue = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters) SetIsRequiredParameter(v bool) *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters {
	s.IsRequiredParameter = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters) SetParameterDataType(v int) *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters {
	s.ParameterDataType = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters) SetParameterDescription(v string) *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters {
	s.ParameterDescription = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters) SetParameterName(v string) *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters {
	s.ParameterName = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters) SetParameterOperator(v int) *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters {
	s.ParameterOperator = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters) SetParameterPosition(v int) *GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters {
	s.ParameterPosition = &v
	return s
}

type GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters struct {
	ColumnName           *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
}

func (s GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters) GoString() string {
	return s.String()
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters) SetColumnName(v string) *GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters {
	s.ColumnName = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters) SetExampleValue(v string) *GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters {
	s.ExampleValue = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters) SetParameterDataType(v int) *GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters {
	s.ParameterDataType = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters) SetParameterDescription(v string) *GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters {
	s.ParameterDescription = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters) SetParameterName(v string) *GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters {
	s.ParameterName = &v
	return s
}

type GetDataServiceApiResponseDataScriptDetailsScriptConnection struct {
	ConnectionId *int64  `json:"ConnectionId,omitempty" xml:"ConnectionId,omitempty" require:"true"`
	TableName    *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
}

func (s GetDataServiceApiResponseDataScriptDetailsScriptConnection) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApiResponseDataScriptDetailsScriptConnection) GoString() string {
	return s.String()
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptConnection) SetConnectionId(v int64) *GetDataServiceApiResponseDataScriptDetailsScriptConnection {
	s.ConnectionId = &v
	return s
}

func (s *GetDataServiceApiResponseDataScriptDetailsScriptConnection) SetTableName(v string) *GetDataServiceApiResponseDataScriptDetailsScriptConnection {
	s.TableName = &v
	return s
}

type GetDataServiceApiResponseDataWizardDetails struct {
	IsPagedResponse          *bool                                                                 `json:"IsPagedResponse,omitempty" xml:"IsPagedResponse,omitempty" require:"true"`
	WizardRequestParameters  []*GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters  `json:"WizardRequestParameters,omitempty" xml:"WizardRequestParameters,omitempty" require:"true" type:"Repeated"`
	WizardResponseParameters []*GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters `json:"WizardResponseParameters,omitempty" xml:"WizardResponseParameters,omitempty" require:"true" type:"Repeated"`
	WizardConnection         *GetDataServiceApiResponseDataWizardDetailsWizardConnection           `json:"WizardConnection,omitempty" xml:"WizardConnection,omitempty" require:"true" type:"Struct"`
}

func (s GetDataServiceApiResponseDataWizardDetails) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApiResponseDataWizardDetails) GoString() string {
	return s.String()
}

func (s *GetDataServiceApiResponseDataWizardDetails) SetIsPagedResponse(v bool) *GetDataServiceApiResponseDataWizardDetails {
	s.IsPagedResponse = &v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetails) SetWizardRequestParameters(v []*GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters) *GetDataServiceApiResponseDataWizardDetails {
	s.WizardRequestParameters = v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetails) SetWizardResponseParameters(v []*GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters) *GetDataServiceApiResponseDataWizardDetails {
	s.WizardResponseParameters = v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetails) SetWizardConnection(v *GetDataServiceApiResponseDataWizardDetailsWizardConnection) *GetDataServiceApiResponseDataWizardDetails {
	s.WizardConnection = v
	return s
}

type GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters struct {
	ColumnName           *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	DefaultValue         *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	IsRequiredParameter  *bool   `json:"IsRequiredParameter,omitempty" xml:"IsRequiredParameter,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ParameterOperator    *int    `json:"ParameterOperator,omitempty" xml:"ParameterOperator,omitempty" require:"true"`
	ParameterPosition    *int    `json:"ParameterPosition,omitempty" xml:"ParameterPosition,omitempty" require:"true"`
}

func (s GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters) GoString() string {
	return s.String()
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters) SetColumnName(v string) *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters {
	s.ColumnName = &v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters) SetDefaultValue(v string) *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters {
	s.DefaultValue = &v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters) SetExampleValue(v string) *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters {
	s.ExampleValue = &v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters) SetIsRequiredParameter(v bool) *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters {
	s.IsRequiredParameter = &v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters) SetParameterDataType(v int) *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters {
	s.ParameterDataType = &v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters) SetParameterDescription(v string) *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters {
	s.ParameterDescription = &v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters) SetParameterName(v string) *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters {
	s.ParameterName = &v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters) SetParameterOperator(v int) *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters {
	s.ParameterOperator = &v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters) SetParameterPosition(v int) *GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters {
	s.ParameterPosition = &v
	return s
}

type GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters struct {
	ColumnName           *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
}

func (s GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters) GoString() string {
	return s.String()
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters) SetColumnName(v string) *GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters {
	s.ColumnName = &v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters) SetExampleValue(v string) *GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters {
	s.ExampleValue = &v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters) SetParameterDataType(v int) *GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters {
	s.ParameterDataType = &v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters) SetParameterDescription(v string) *GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters {
	s.ParameterDescription = &v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters) SetParameterName(v string) *GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters {
	s.ParameterName = &v
	return s
}

type GetDataServiceApiResponseDataWizardDetailsWizardConnection struct {
	ConnectionId *int64  `json:"ConnectionId,omitempty" xml:"ConnectionId,omitempty" require:"true"`
	TableName    *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
}

func (s GetDataServiceApiResponseDataWizardDetailsWizardConnection) String() string {
	return tea.Prettify(s)
}

func (s GetDataServiceApiResponseDataWizardDetailsWizardConnection) GoString() string {
	return s.String()
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardConnection) SetConnectionId(v int64) *GetDataServiceApiResponseDataWizardDetailsWizardConnection {
	s.ConnectionId = &v
	return s
}

func (s *GetDataServiceApiResponseDataWizardDetailsWizardConnection) SetTableName(v string) *GetDataServiceApiResponseDataWizardDetailsWizardConnection {
	s.TableName = &v
	return s
}

type ListDataServiceApisRequest struct {
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	ProjectId      *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	TenantId       *int64  `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ApiNameKeyword *string `json:"ApiNameKeyword,omitempty" xml:"ApiNameKeyword,omitempty"`
	ApiPathKeyword *string `json:"ApiPathKeyword,omitempty" xml:"ApiPathKeyword,omitempty"`
	CreatorId      *string `json:"CreatorId,omitempty" xml:"CreatorId,omitempty"`
}

func (s ListDataServiceApisRequest) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisRequest) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisRequest) SetPageNumber(v int) *ListDataServiceApisRequest {
	s.PageNumber = &v
	return s
}

func (s *ListDataServiceApisRequest) SetPageSize(v int) *ListDataServiceApisRequest {
	s.PageSize = &v
	return s
}

func (s *ListDataServiceApisRequest) SetProjectId(v int64) *ListDataServiceApisRequest {
	s.ProjectId = &v
	return s
}

func (s *ListDataServiceApisRequest) SetTenantId(v int64) *ListDataServiceApisRequest {
	s.TenantId = &v
	return s
}

func (s *ListDataServiceApisRequest) SetApiNameKeyword(v string) *ListDataServiceApisRequest {
	s.ApiNameKeyword = &v
	return s
}

func (s *ListDataServiceApisRequest) SetApiPathKeyword(v string) *ListDataServiceApisRequest {
	s.ApiPathKeyword = &v
	return s
}

func (s *ListDataServiceApisRequest) SetCreatorId(v string) *ListDataServiceApisRequest {
	s.CreatorId = &v
	return s
}

type ListDataServiceApisResponse struct {
	ErrorCode      *string                          `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                          `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                             `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                            `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *ListDataServiceApisResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListDataServiceApisResponse) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisResponse) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisResponse) SetErrorCode(v string) *ListDataServiceApisResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListDataServiceApisResponse) SetErrorMessage(v string) *ListDataServiceApisResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListDataServiceApisResponse) SetHttpStatusCode(v int) *ListDataServiceApisResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListDataServiceApisResponse) SetRequestId(v string) *ListDataServiceApisResponse {
	s.RequestId = &v
	return s
}

func (s *ListDataServiceApisResponse) SetSuccess(v bool) *ListDataServiceApisResponse {
	s.Success = &v
	return s
}

func (s *ListDataServiceApisResponse) SetData(v *ListDataServiceApisResponseData) *ListDataServiceApisResponse {
	s.Data = v
	return s
}

type ListDataServiceApisResponseData struct {
	PageNumber *int                                   `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                   `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                                   `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Apis       []*ListDataServiceApisResponseDataApis `json:"Apis,omitempty" xml:"Apis,omitempty" require:"true" type:"Repeated"`
}

func (s ListDataServiceApisResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisResponseData) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisResponseData) SetPageNumber(v int) *ListDataServiceApisResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListDataServiceApisResponseData) SetPageSize(v int) *ListDataServiceApisResponseData {
	s.PageSize = &v
	return s
}

func (s *ListDataServiceApisResponseData) SetTotalCount(v int) *ListDataServiceApisResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListDataServiceApisResponseData) SetApis(v []*ListDataServiceApisResponseDataApis) *ListDataServiceApisResponseData {
	s.Apis = v
	return s
}

type ListDataServiceApisResponseDataApis struct {
	ApiId               *int64                                                  `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiMode             *int                                                    `json:"ApiMode,omitempty" xml:"ApiMode,omitempty" require:"true"`
	ApiName             *string                                                 `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	ApiPath             *string                                                 `json:"ApiPath,omitempty" xml:"ApiPath,omitempty" require:"true"`
	CreatedTime         *string                                                 `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	CreatorId           *string                                                 `json:"CreatorId,omitempty" xml:"CreatorId,omitempty" require:"true"`
	Description         *string                                                 `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	GroupId             *string                                                 `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ModifiedTime        *string                                                 `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	OperatorId          *string                                                 `json:"OperatorId,omitempty" xml:"OperatorId,omitempty" require:"true"`
	ProjectId           *int64                                                  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	RequestMethod       *int                                                    `json:"RequestMethod,omitempty" xml:"RequestMethod,omitempty" require:"true"`
	ResponseContentType *int                                                    `json:"ResponseContentType,omitempty" xml:"ResponseContentType,omitempty" require:"true"`
	Status              *int                                                    `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	TenantId            *int64                                                  `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	Timeout             *int                                                    `json:"Timeout,omitempty" xml:"Timeout,omitempty" require:"true"`
	VisibleRange        *int                                                    `json:"VisibleRange,omitempty" xml:"VisibleRange,omitempty" require:"true"`
	RegistrationDetails *ListDataServiceApisResponseDataApisRegistrationDetails `json:"RegistrationDetails,omitempty" xml:"RegistrationDetails,omitempty" require:"true" type:"Struct"`
	ScriptDetails       *ListDataServiceApisResponseDataApisScriptDetails       `json:"ScriptDetails,omitempty" xml:"ScriptDetails,omitempty" require:"true" type:"Struct"`
	WizardDetails       *ListDataServiceApisResponseDataApisWizardDetails       `json:"WizardDetails,omitempty" xml:"WizardDetails,omitempty" require:"true" type:"Struct"`
	Protocols           []*int                                                  `json:"Protocols,omitempty" xml:"Protocols,omitempty" require:"true" type:"Repeated"`
}

func (s ListDataServiceApisResponseDataApis) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisResponseDataApis) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisResponseDataApis) SetApiId(v int64) *ListDataServiceApisResponseDataApis {
	s.ApiId = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetApiMode(v int) *ListDataServiceApisResponseDataApis {
	s.ApiMode = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetApiName(v string) *ListDataServiceApisResponseDataApis {
	s.ApiName = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetApiPath(v string) *ListDataServiceApisResponseDataApis {
	s.ApiPath = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetCreatedTime(v string) *ListDataServiceApisResponseDataApis {
	s.CreatedTime = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetCreatorId(v string) *ListDataServiceApisResponseDataApis {
	s.CreatorId = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetDescription(v string) *ListDataServiceApisResponseDataApis {
	s.Description = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetGroupId(v string) *ListDataServiceApisResponseDataApis {
	s.GroupId = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetModifiedTime(v string) *ListDataServiceApisResponseDataApis {
	s.ModifiedTime = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetOperatorId(v string) *ListDataServiceApisResponseDataApis {
	s.OperatorId = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetProjectId(v int64) *ListDataServiceApisResponseDataApis {
	s.ProjectId = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetRequestMethod(v int) *ListDataServiceApisResponseDataApis {
	s.RequestMethod = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetResponseContentType(v int) *ListDataServiceApisResponseDataApis {
	s.ResponseContentType = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetStatus(v int) *ListDataServiceApisResponseDataApis {
	s.Status = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetTenantId(v int64) *ListDataServiceApisResponseDataApis {
	s.TenantId = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetTimeout(v int) *ListDataServiceApisResponseDataApis {
	s.Timeout = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetVisibleRange(v int) *ListDataServiceApisResponseDataApis {
	s.VisibleRange = &v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetRegistrationDetails(v *ListDataServiceApisResponseDataApisRegistrationDetails) *ListDataServiceApisResponseDataApis {
	s.RegistrationDetails = v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetScriptDetails(v *ListDataServiceApisResponseDataApisScriptDetails) *ListDataServiceApisResponseDataApis {
	s.ScriptDetails = v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetWizardDetails(v *ListDataServiceApisResponseDataApisWizardDetails) *ListDataServiceApisResponseDataApis {
	s.WizardDetails = v
	return s
}

func (s *ListDataServiceApisResponseDataApis) SetProtocols(v []*int) *ListDataServiceApisResponseDataApis {
	s.Protocols = v
	return s
}

type ListDataServiceApisResponseDataApisRegistrationDetails struct {
	FailedResultSample            *string                                                                                `json:"FailedResultSample,omitempty" xml:"FailedResultSample,omitempty" require:"true"`
	ServiceContentType            *int                                                                                   `json:"ServiceContentType,omitempty" xml:"ServiceContentType,omitempty" require:"true"`
	ServiceHost                   *string                                                                                `json:"ServiceHost,omitempty" xml:"ServiceHost,omitempty" require:"true"`
	ServicePath                   *string                                                                                `json:"ServicePath,omitempty" xml:"ServicePath,omitempty" require:"true"`
	ServiceRequestBodyDescription *string                                                                                `json:"ServiceRequestBodyDescription,omitempty" xml:"ServiceRequestBodyDescription,omitempty" require:"true"`
	SuccessfulResultSample        *string                                                                                `json:"SuccessfulResultSample,omitempty" xml:"SuccessfulResultSample,omitempty" require:"true"`
	RegistrationErrorCodes        []*ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationErrorCodes        `json:"RegistrationErrorCodes,omitempty" xml:"RegistrationErrorCodes,omitempty" require:"true" type:"Repeated"`
	RegistrationRequestParameters []*ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters `json:"RegistrationRequestParameters,omitempty" xml:"RegistrationRequestParameters,omitempty" require:"true" type:"Repeated"`
}

func (s ListDataServiceApisResponseDataApisRegistrationDetails) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisResponseDataApisRegistrationDetails) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetails) SetFailedResultSample(v string) *ListDataServiceApisResponseDataApisRegistrationDetails {
	s.FailedResultSample = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetails) SetServiceContentType(v int) *ListDataServiceApisResponseDataApisRegistrationDetails {
	s.ServiceContentType = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetails) SetServiceHost(v string) *ListDataServiceApisResponseDataApisRegistrationDetails {
	s.ServiceHost = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetails) SetServicePath(v string) *ListDataServiceApisResponseDataApisRegistrationDetails {
	s.ServicePath = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetails) SetServiceRequestBodyDescription(v string) *ListDataServiceApisResponseDataApisRegistrationDetails {
	s.ServiceRequestBodyDescription = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetails) SetSuccessfulResultSample(v string) *ListDataServiceApisResponseDataApisRegistrationDetails {
	s.SuccessfulResultSample = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetails) SetRegistrationErrorCodes(v []*ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationErrorCodes) *ListDataServiceApisResponseDataApisRegistrationDetails {
	s.RegistrationErrorCodes = v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetails) SetRegistrationRequestParameters(v []*ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) *ListDataServiceApisResponseDataApisRegistrationDetails {
	s.RegistrationRequestParameters = v
	return s
}

type ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationErrorCodes struct {
	ErrorCode     *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage  *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	ErrorSolution *string `json:"ErrorSolution,omitempty" xml:"ErrorSolution,omitempty" require:"true"`
}

func (s ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationErrorCodes) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationErrorCodes) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationErrorCodes) SetErrorCode(v string) *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationErrorCodes {
	s.ErrorCode = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationErrorCodes) SetErrorMessage(v string) *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationErrorCodes {
	s.ErrorMessage = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationErrorCodes) SetErrorSolution(v string) *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationErrorCodes {
	s.ErrorSolution = &v
	return s
}

type ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters struct {
	ColumnName           *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	DefaultValue         *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	IsRequiredParameter  *bool   `json:"IsRequiredParameter,omitempty" xml:"IsRequiredParameter,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ParameterOperator    *int    `json:"ParameterOperator,omitempty" xml:"ParameterOperator,omitempty" require:"true"`
	ParameterPosition    *int    `json:"ParameterPosition,omitempty" xml:"ParameterPosition,omitempty" require:"true"`
}

func (s ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetColumnName(v string) *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.ColumnName = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetDefaultValue(v string) *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.DefaultValue = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetExampleValue(v string) *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.ExampleValue = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetIsRequiredParameter(v bool) *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.IsRequiredParameter = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetParameterDataType(v int) *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.ParameterDataType = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetParameterDescription(v string) *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.ParameterDescription = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetParameterName(v string) *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.ParameterName = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetParameterOperator(v int) *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.ParameterOperator = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters) SetParameterPosition(v int) *ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters {
	s.ParameterPosition = &v
	return s
}

type ListDataServiceApisResponseDataApisScriptDetails struct {
	IsPagedResponse          *bool                                                                       `json:"IsPagedResponse,omitempty" xml:"IsPagedResponse,omitempty" require:"true"`
	Script                   *string                                                                     `json:"Script,omitempty" xml:"Script,omitempty" require:"true"`
	ScriptRequestParameters  []*ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters  `json:"ScriptRequestParameters,omitempty" xml:"ScriptRequestParameters,omitempty" require:"true" type:"Repeated"`
	ScriptResponseParameters []*ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters `json:"ScriptResponseParameters,omitempty" xml:"ScriptResponseParameters,omitempty" require:"true" type:"Repeated"`
	ScriptConnection         *ListDataServiceApisResponseDataApisScriptDetailsScriptConnection           `json:"ScriptConnection,omitempty" xml:"ScriptConnection,omitempty" require:"true" type:"Struct"`
}

func (s ListDataServiceApisResponseDataApisScriptDetails) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisResponseDataApisScriptDetails) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisResponseDataApisScriptDetails) SetIsPagedResponse(v bool) *ListDataServiceApisResponseDataApisScriptDetails {
	s.IsPagedResponse = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetails) SetScript(v string) *ListDataServiceApisResponseDataApisScriptDetails {
	s.Script = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetails) SetScriptRequestParameters(v []*ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters) *ListDataServiceApisResponseDataApisScriptDetails {
	s.ScriptRequestParameters = v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetails) SetScriptResponseParameters(v []*ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters) *ListDataServiceApisResponseDataApisScriptDetails {
	s.ScriptResponseParameters = v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetails) SetScriptConnection(v *ListDataServiceApisResponseDataApisScriptDetailsScriptConnection) *ListDataServiceApisResponseDataApisScriptDetails {
	s.ScriptConnection = v
	return s
}

type ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters struct {
	ColumnName           *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	DefaultValue         *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	IsRequiredParameter  *bool   `json:"IsRequiredParameter,omitempty" xml:"IsRequiredParameter,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ParameterOperator    *int    `json:"ParameterOperator,omitempty" xml:"ParameterOperator,omitempty" require:"true"`
	ParameterPosition    *int    `json:"ParameterPosition,omitempty" xml:"ParameterPosition,omitempty" require:"true"`
}

func (s ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters) SetColumnName(v string) *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.ColumnName = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters) SetDefaultValue(v string) *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.DefaultValue = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters) SetExampleValue(v string) *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.ExampleValue = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters) SetIsRequiredParameter(v bool) *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.IsRequiredParameter = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters) SetParameterDataType(v int) *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.ParameterDataType = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters) SetParameterDescription(v string) *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.ParameterDescription = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters) SetParameterName(v string) *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.ParameterName = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters) SetParameterOperator(v int) *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.ParameterOperator = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters) SetParameterPosition(v int) *ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters {
	s.ParameterPosition = &v
	return s
}

type ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters struct {
	ColumnName           *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
}

func (s ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters) SetColumnName(v string) *ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters {
	s.ColumnName = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters) SetExampleValue(v string) *ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters {
	s.ExampleValue = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters) SetParameterDataType(v int) *ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters {
	s.ParameterDataType = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters) SetParameterDescription(v string) *ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters {
	s.ParameterDescription = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters) SetParameterName(v string) *ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters {
	s.ParameterName = &v
	return s
}

type ListDataServiceApisResponseDataApisScriptDetailsScriptConnection struct {
	ConnectionId *int64  `json:"ConnectionId,omitempty" xml:"ConnectionId,omitempty" require:"true"`
	TableName    *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
}

func (s ListDataServiceApisResponseDataApisScriptDetailsScriptConnection) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisResponseDataApisScriptDetailsScriptConnection) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptConnection) SetConnectionId(v int64) *ListDataServiceApisResponseDataApisScriptDetailsScriptConnection {
	s.ConnectionId = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisScriptDetailsScriptConnection) SetTableName(v string) *ListDataServiceApisResponseDataApisScriptDetailsScriptConnection {
	s.TableName = &v
	return s
}

type ListDataServiceApisResponseDataApisWizardDetails struct {
	IsPagedResponse          *bool                                                                       `json:"IsPagedResponse,omitempty" xml:"IsPagedResponse,omitempty" require:"true"`
	WizardRequestParameters  []*ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters  `json:"WizardRequestParameters,omitempty" xml:"WizardRequestParameters,omitempty" require:"true" type:"Repeated"`
	WizardResponseParameters []*ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters `json:"WizardResponseParameters,omitempty" xml:"WizardResponseParameters,omitempty" require:"true" type:"Repeated"`
	WizardConnection         *ListDataServiceApisResponseDataApisWizardDetailsWizardConnection           `json:"WizardConnection,omitempty" xml:"WizardConnection,omitempty" require:"true" type:"Struct"`
}

func (s ListDataServiceApisResponseDataApisWizardDetails) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisResponseDataApisWizardDetails) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisResponseDataApisWizardDetails) SetIsPagedResponse(v bool) *ListDataServiceApisResponseDataApisWizardDetails {
	s.IsPagedResponse = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetails) SetWizardRequestParameters(v []*ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters) *ListDataServiceApisResponseDataApisWizardDetails {
	s.WizardRequestParameters = v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetails) SetWizardResponseParameters(v []*ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters) *ListDataServiceApisResponseDataApisWizardDetails {
	s.WizardResponseParameters = v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetails) SetWizardConnection(v *ListDataServiceApisResponseDataApisWizardDetailsWizardConnection) *ListDataServiceApisResponseDataApisWizardDetails {
	s.WizardConnection = v
	return s
}

type ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters struct {
	ColumnName           *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	DefaultValue         *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	IsRequiredParameter  *bool   `json:"IsRequiredParameter,omitempty" xml:"IsRequiredParameter,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ParameterOperator    *int    `json:"ParameterOperator,omitempty" xml:"ParameterOperator,omitempty" require:"true"`
	ParameterPosition    *int    `json:"ParameterPosition,omitempty" xml:"ParameterPosition,omitempty" require:"true"`
}

func (s ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters) SetColumnName(v string) *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.ColumnName = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters) SetDefaultValue(v string) *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.DefaultValue = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters) SetExampleValue(v string) *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.ExampleValue = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters) SetIsRequiredParameter(v bool) *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.IsRequiredParameter = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters) SetParameterDataType(v int) *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.ParameterDataType = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters) SetParameterDescription(v string) *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.ParameterDescription = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters) SetParameterName(v string) *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.ParameterName = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters) SetParameterOperator(v int) *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.ParameterOperator = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters) SetParameterPosition(v int) *ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters {
	s.ParameterPosition = &v
	return s
}

type ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters struct {
	ColumnName           *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
}

func (s ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters) SetColumnName(v string) *ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters {
	s.ColumnName = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters) SetExampleValue(v string) *ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters {
	s.ExampleValue = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters) SetParameterDataType(v int) *ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters {
	s.ParameterDataType = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters) SetParameterDescription(v string) *ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters {
	s.ParameterDescription = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters) SetParameterName(v string) *ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters {
	s.ParameterName = &v
	return s
}

type ListDataServiceApisResponseDataApisWizardDetailsWizardConnection struct {
	ConnectionId *int64  `json:"ConnectionId,omitempty" xml:"ConnectionId,omitempty" require:"true"`
	TableName    *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
}

func (s ListDataServiceApisResponseDataApisWizardDetailsWizardConnection) String() string {
	return tea.Prettify(s)
}

func (s ListDataServiceApisResponseDataApisWizardDetailsWizardConnection) GoString() string {
	return s.String()
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardConnection) SetConnectionId(v int64) *ListDataServiceApisResponseDataApisWizardDetailsWizardConnection {
	s.ConnectionId = &v
	return s
}

func (s *ListDataServiceApisResponseDataApisWizardDetailsWizardConnection) SetTableName(v string) *ListDataServiceApisResponseDataApisWizardDetailsWizardConnection {
	s.TableName = &v
	return s
}

type GetDataServicePublishedApiRequest struct {
	ProjectId *int64 `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	TenantId  *int64 `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ApiId     *int64 `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
}

func (s GetDataServicePublishedApiRequest) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiRequest) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiRequest) SetProjectId(v int64) *GetDataServicePublishedApiRequest {
	s.ProjectId = &v
	return s
}

func (s *GetDataServicePublishedApiRequest) SetTenantId(v int64) *GetDataServicePublishedApiRequest {
	s.TenantId = &v
	return s
}

func (s *GetDataServicePublishedApiRequest) SetApiId(v int64) *GetDataServicePublishedApiRequest {
	s.ApiId = &v
	return s
}

type GetDataServicePublishedApiResponse struct {
	ErrorCode      *string                                 `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                                 `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                                    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool                                   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetDataServicePublishedApiResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetDataServicePublishedApiResponse) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponse) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponse) SetErrorCode(v string) *GetDataServicePublishedApiResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetDataServicePublishedApiResponse) SetErrorMessage(v string) *GetDataServicePublishedApiResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetDataServicePublishedApiResponse) SetHttpStatusCode(v int) *GetDataServicePublishedApiResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetDataServicePublishedApiResponse) SetRequestId(v string) *GetDataServicePublishedApiResponse {
	s.RequestId = &v
	return s
}

func (s *GetDataServicePublishedApiResponse) SetSuccess(v bool) *GetDataServicePublishedApiResponse {
	s.Success = &v
	return s
}

func (s *GetDataServicePublishedApiResponse) SetData(v *GetDataServicePublishedApiResponseData) *GetDataServicePublishedApiResponse {
	s.Data = v
	return s
}

type GetDataServicePublishedApiResponseData struct {
	ApiId               *int64                                                     `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiMode             *int                                                       `json:"ApiMode,omitempty" xml:"ApiMode,omitempty" require:"true"`
	ApiName             *string                                                    `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	ApiPath             *string                                                    `json:"ApiPath,omitempty" xml:"ApiPath,omitempty" require:"true"`
	CreatedTime         *string                                                    `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	CreatorId           *string                                                    `json:"CreatorId,omitempty" xml:"CreatorId,omitempty" require:"true"`
	Description         *string                                                    `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	GroupId             *string                                                    `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ModifiedTime        *string                                                    `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	OperatorId          *string                                                    `json:"OperatorId,omitempty" xml:"OperatorId,omitempty" require:"true"`
	ProjectId           *int64                                                     `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	RequestMethod       *int                                                       `json:"RequestMethod,omitempty" xml:"RequestMethod,omitempty" require:"true"`
	ResponseContentType *int                                                       `json:"ResponseContentType,omitempty" xml:"ResponseContentType,omitempty" require:"true"`
	Status              *int                                                       `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	TenantId            *int64                                                     `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	Timeout             *int                                                       `json:"Timeout,omitempty" xml:"Timeout,omitempty" require:"true"`
	VisibleRange        *int                                                       `json:"VisibleRange,omitempty" xml:"VisibleRange,omitempty" require:"true"`
	RegistrationDetails *GetDataServicePublishedApiResponseDataRegistrationDetails `json:"RegistrationDetails,omitempty" xml:"RegistrationDetails,omitempty" require:"true" type:"Struct"`
	ScriptDetails       *GetDataServicePublishedApiResponseDataScriptDetails       `json:"ScriptDetails,omitempty" xml:"ScriptDetails,omitempty" require:"true" type:"Struct"`
	WizardDetails       *GetDataServicePublishedApiResponseDataWizardDetails       `json:"WizardDetails,omitempty" xml:"WizardDetails,omitempty" require:"true" type:"Struct"`
	Protocols           []*int                                                     `json:"Protocols,omitempty" xml:"Protocols,omitempty" require:"true" type:"Repeated"`
}

func (s GetDataServicePublishedApiResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponseData) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponseData) SetApiId(v int64) *GetDataServicePublishedApiResponseData {
	s.ApiId = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetApiMode(v int) *GetDataServicePublishedApiResponseData {
	s.ApiMode = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetApiName(v string) *GetDataServicePublishedApiResponseData {
	s.ApiName = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetApiPath(v string) *GetDataServicePublishedApiResponseData {
	s.ApiPath = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetCreatedTime(v string) *GetDataServicePublishedApiResponseData {
	s.CreatedTime = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetCreatorId(v string) *GetDataServicePublishedApiResponseData {
	s.CreatorId = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetDescription(v string) *GetDataServicePublishedApiResponseData {
	s.Description = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetGroupId(v string) *GetDataServicePublishedApiResponseData {
	s.GroupId = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetModifiedTime(v string) *GetDataServicePublishedApiResponseData {
	s.ModifiedTime = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetOperatorId(v string) *GetDataServicePublishedApiResponseData {
	s.OperatorId = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetProjectId(v int64) *GetDataServicePublishedApiResponseData {
	s.ProjectId = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetRequestMethod(v int) *GetDataServicePublishedApiResponseData {
	s.RequestMethod = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetResponseContentType(v int) *GetDataServicePublishedApiResponseData {
	s.ResponseContentType = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetStatus(v int) *GetDataServicePublishedApiResponseData {
	s.Status = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetTenantId(v int64) *GetDataServicePublishedApiResponseData {
	s.TenantId = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetTimeout(v int) *GetDataServicePublishedApiResponseData {
	s.Timeout = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetVisibleRange(v int) *GetDataServicePublishedApiResponseData {
	s.VisibleRange = &v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetRegistrationDetails(v *GetDataServicePublishedApiResponseDataRegistrationDetails) *GetDataServicePublishedApiResponseData {
	s.RegistrationDetails = v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetScriptDetails(v *GetDataServicePublishedApiResponseDataScriptDetails) *GetDataServicePublishedApiResponseData {
	s.ScriptDetails = v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetWizardDetails(v *GetDataServicePublishedApiResponseDataWizardDetails) *GetDataServicePublishedApiResponseData {
	s.WizardDetails = v
	return s
}

func (s *GetDataServicePublishedApiResponseData) SetProtocols(v []*int) *GetDataServicePublishedApiResponseData {
	s.Protocols = v
	return s
}

type GetDataServicePublishedApiResponseDataRegistrationDetails struct {
	FailedResultSample            *string                                                                                   `json:"FailedResultSample,omitempty" xml:"FailedResultSample,omitempty" require:"true"`
	ServiceContentType            *int                                                                                      `json:"ServiceContentType,omitempty" xml:"ServiceContentType,omitempty" require:"true"`
	ServiceHost                   *string                                                                                   `json:"ServiceHost,omitempty" xml:"ServiceHost,omitempty" require:"true"`
	ServicePath                   *string                                                                                   `json:"ServicePath,omitempty" xml:"ServicePath,omitempty" require:"true"`
	ServiceRequestBodyDescription *string                                                                                   `json:"ServiceRequestBodyDescription,omitempty" xml:"ServiceRequestBodyDescription,omitempty" require:"true"`
	SuccessfulResultSample        *string                                                                                   `json:"SuccessfulResultSample,omitempty" xml:"SuccessfulResultSample,omitempty" require:"true"`
	RegistrationErrorCodes        []*GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationErrorCodes        `json:"RegistrationErrorCodes,omitempty" xml:"RegistrationErrorCodes,omitempty" require:"true" type:"Repeated"`
	RegistrationRequestParameters []*GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters `json:"RegistrationRequestParameters,omitempty" xml:"RegistrationRequestParameters,omitempty" require:"true" type:"Repeated"`
}

func (s GetDataServicePublishedApiResponseDataRegistrationDetails) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponseDataRegistrationDetails) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetails) SetFailedResultSample(v string) *GetDataServicePublishedApiResponseDataRegistrationDetails {
	s.FailedResultSample = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetails) SetServiceContentType(v int) *GetDataServicePublishedApiResponseDataRegistrationDetails {
	s.ServiceContentType = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetails) SetServiceHost(v string) *GetDataServicePublishedApiResponseDataRegistrationDetails {
	s.ServiceHost = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetails) SetServicePath(v string) *GetDataServicePublishedApiResponseDataRegistrationDetails {
	s.ServicePath = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetails) SetServiceRequestBodyDescription(v string) *GetDataServicePublishedApiResponseDataRegistrationDetails {
	s.ServiceRequestBodyDescription = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetails) SetSuccessfulResultSample(v string) *GetDataServicePublishedApiResponseDataRegistrationDetails {
	s.SuccessfulResultSample = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetails) SetRegistrationErrorCodes(v []*GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationErrorCodes) *GetDataServicePublishedApiResponseDataRegistrationDetails {
	s.RegistrationErrorCodes = v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetails) SetRegistrationRequestParameters(v []*GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters) *GetDataServicePublishedApiResponseDataRegistrationDetails {
	s.RegistrationRequestParameters = v
	return s
}

type GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationErrorCodes struct {
	ErrorCode     *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage  *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	ErrorSolution *string `json:"ErrorSolution,omitempty" xml:"ErrorSolution,omitempty" require:"true"`
}

func (s GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationErrorCodes) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationErrorCodes) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationErrorCodes) SetErrorCode(v string) *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationErrorCodes {
	s.ErrorCode = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationErrorCodes) SetErrorMessage(v string) *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationErrorCodes {
	s.ErrorMessage = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationErrorCodes) SetErrorSolution(v string) *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationErrorCodes {
	s.ErrorSolution = &v
	return s
}

type GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters struct {
	DefaultValue         *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	IsRequiredParameter  *bool   `json:"IsRequiredParameter,omitempty" xml:"IsRequiredParameter,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ParameterOperator    *int    `json:"ParameterOperator,omitempty" xml:"ParameterOperator,omitempty" require:"true"`
	ParameterPosition    *int    `json:"ParameterPosition,omitempty" xml:"ParameterPosition,omitempty" require:"true"`
}

func (s GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetDefaultValue(v string) *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.DefaultValue = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetExampleValue(v string) *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.ExampleValue = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetIsRequiredParameter(v bool) *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.IsRequiredParameter = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetParameterDataType(v int) *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.ParameterDataType = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetParameterDescription(v string) *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.ParameterDescription = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetParameterName(v string) *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.ParameterName = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetParameterOperator(v int) *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.ParameterOperator = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters) SetParameterPosition(v int) *GetDataServicePublishedApiResponseDataRegistrationDetailsRegistrationRequestParameters {
	s.ParameterPosition = &v
	return s
}

type GetDataServicePublishedApiResponseDataScriptDetails struct {
	FailedResultSample       *string                                                                        `json:"FailedResultSample,omitempty" xml:"FailedResultSample,omitempty" require:"true"`
	IsPagedResponse          *bool                                                                          `json:"IsPagedResponse,omitempty" xml:"IsPagedResponse,omitempty" require:"true"`
	Script                   *string                                                                        `json:"Script,omitempty" xml:"Script,omitempty" require:"true"`
	SuccessfulResultSample   *string                                                                        `json:"SuccessfulResultSample,omitempty" xml:"SuccessfulResultSample,omitempty" require:"true"`
	ScriptErrorCodes         []*GetDataServicePublishedApiResponseDataScriptDetailsScriptErrorCodes         `json:"ScriptErrorCodes,omitempty" xml:"ScriptErrorCodes,omitempty" require:"true" type:"Repeated"`
	ScriptRequestParameters  []*GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters  `json:"ScriptRequestParameters,omitempty" xml:"ScriptRequestParameters,omitempty" require:"true" type:"Repeated"`
	ScriptResponseParameters []*GetDataServicePublishedApiResponseDataScriptDetailsScriptResponseParameters `json:"ScriptResponseParameters,omitempty" xml:"ScriptResponseParameters,omitempty" require:"true" type:"Repeated"`
	ScriptConnection         *GetDataServicePublishedApiResponseDataScriptDetailsScriptConnection           `json:"ScriptConnection,omitempty" xml:"ScriptConnection,omitempty" require:"true" type:"Struct"`
}

func (s GetDataServicePublishedApiResponseDataScriptDetails) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponseDataScriptDetails) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponseDataScriptDetails) SetFailedResultSample(v string) *GetDataServicePublishedApiResponseDataScriptDetails {
	s.FailedResultSample = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetails) SetIsPagedResponse(v bool) *GetDataServicePublishedApiResponseDataScriptDetails {
	s.IsPagedResponse = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetails) SetScript(v string) *GetDataServicePublishedApiResponseDataScriptDetails {
	s.Script = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetails) SetSuccessfulResultSample(v string) *GetDataServicePublishedApiResponseDataScriptDetails {
	s.SuccessfulResultSample = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetails) SetScriptErrorCodes(v []*GetDataServicePublishedApiResponseDataScriptDetailsScriptErrorCodes) *GetDataServicePublishedApiResponseDataScriptDetails {
	s.ScriptErrorCodes = v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetails) SetScriptRequestParameters(v []*GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters) *GetDataServicePublishedApiResponseDataScriptDetails {
	s.ScriptRequestParameters = v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetails) SetScriptResponseParameters(v []*GetDataServicePublishedApiResponseDataScriptDetailsScriptResponseParameters) *GetDataServicePublishedApiResponseDataScriptDetails {
	s.ScriptResponseParameters = v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetails) SetScriptConnection(v *GetDataServicePublishedApiResponseDataScriptDetailsScriptConnection) *GetDataServicePublishedApiResponseDataScriptDetails {
	s.ScriptConnection = v
	return s
}

type GetDataServicePublishedApiResponseDataScriptDetailsScriptErrorCodes struct {
	ErrorCode     *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage  *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	ErrorSolution *string `json:"ErrorSolution,omitempty" xml:"ErrorSolution,omitempty" require:"true"`
}

func (s GetDataServicePublishedApiResponseDataScriptDetailsScriptErrorCodes) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponseDataScriptDetailsScriptErrorCodes) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptErrorCodes) SetErrorCode(v string) *GetDataServicePublishedApiResponseDataScriptDetailsScriptErrorCodes {
	s.ErrorCode = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptErrorCodes) SetErrorMessage(v string) *GetDataServicePublishedApiResponseDataScriptDetailsScriptErrorCodes {
	s.ErrorMessage = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptErrorCodes) SetErrorSolution(v string) *GetDataServicePublishedApiResponseDataScriptDetailsScriptErrorCodes {
	s.ErrorSolution = &v
	return s
}

type GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters struct {
	DefaultValue         *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	IsRequiredParameter  *bool   `json:"IsRequiredParameter,omitempty" xml:"IsRequiredParameter,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ParameterOperator    *int    `json:"ParameterOperator,omitempty" xml:"ParameterOperator,omitempty" require:"true"`
	ParameterPosition    *int    `json:"ParameterPosition,omitempty" xml:"ParameterPosition,omitempty" require:"true"`
}

func (s GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters) SetDefaultValue(v string) *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters {
	s.DefaultValue = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters) SetExampleValue(v string) *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters {
	s.ExampleValue = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters) SetIsRequiredParameter(v bool) *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters {
	s.IsRequiredParameter = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters) SetParameterDataType(v int) *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters {
	s.ParameterDataType = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters) SetParameterDescription(v string) *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters {
	s.ParameterDescription = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters) SetParameterName(v string) *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters {
	s.ParameterName = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters) SetParameterOperator(v int) *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters {
	s.ParameterOperator = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters) SetParameterPosition(v int) *GetDataServicePublishedApiResponseDataScriptDetailsScriptRequestParameters {
	s.ParameterPosition = &v
	return s
}

type GetDataServicePublishedApiResponseDataScriptDetailsScriptResponseParameters struct {
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
}

func (s GetDataServicePublishedApiResponseDataScriptDetailsScriptResponseParameters) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponseDataScriptDetailsScriptResponseParameters) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptResponseParameters) SetExampleValue(v string) *GetDataServicePublishedApiResponseDataScriptDetailsScriptResponseParameters {
	s.ExampleValue = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptResponseParameters) SetParameterDataType(v int) *GetDataServicePublishedApiResponseDataScriptDetailsScriptResponseParameters {
	s.ParameterDataType = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptResponseParameters) SetParameterDescription(v string) *GetDataServicePublishedApiResponseDataScriptDetailsScriptResponseParameters {
	s.ParameterDescription = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptResponseParameters) SetParameterName(v string) *GetDataServicePublishedApiResponseDataScriptDetailsScriptResponseParameters {
	s.ParameterName = &v
	return s
}

type GetDataServicePublishedApiResponseDataScriptDetailsScriptConnection struct {
	ConnectionId *int64  `json:"ConnectionId,omitempty" xml:"ConnectionId,omitempty" require:"true"`
	TableName    *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
}

func (s GetDataServicePublishedApiResponseDataScriptDetailsScriptConnection) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponseDataScriptDetailsScriptConnection) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptConnection) SetConnectionId(v int64) *GetDataServicePublishedApiResponseDataScriptDetailsScriptConnection {
	s.ConnectionId = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataScriptDetailsScriptConnection) SetTableName(v string) *GetDataServicePublishedApiResponseDataScriptDetailsScriptConnection {
	s.TableName = &v
	return s
}

type GetDataServicePublishedApiResponseDataWizardDetails struct {
	FailedResultSample       *string                                                                        `json:"FailedResultSample,omitempty" xml:"FailedResultSample,omitempty" require:"true"`
	IsPagedResponse          *bool                                                                          `json:"IsPagedResponse,omitempty" xml:"IsPagedResponse,omitempty" require:"true"`
	SuccessfulResultSample   *string                                                                        `json:"SuccessfulResultSample,omitempty" xml:"SuccessfulResultSample,omitempty" require:"true"`
	WizardErrorCodes         []*GetDataServicePublishedApiResponseDataWizardDetailsWizardErrorCodes         `json:"WizardErrorCodes,omitempty" xml:"WizardErrorCodes,omitempty" require:"true" type:"Repeated"`
	WizardRequestParameters  []*GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters  `json:"WizardRequestParameters,omitempty" xml:"WizardRequestParameters,omitempty" require:"true" type:"Repeated"`
	WizardResponseParameters []*GetDataServicePublishedApiResponseDataWizardDetailsWizardResponseParameters `json:"WizardResponseParameters,omitempty" xml:"WizardResponseParameters,omitempty" require:"true" type:"Repeated"`
	WizardConnection         *GetDataServicePublishedApiResponseDataWizardDetailsWizardConnection           `json:"WizardConnection,omitempty" xml:"WizardConnection,omitempty" require:"true" type:"Struct"`
}

func (s GetDataServicePublishedApiResponseDataWizardDetails) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponseDataWizardDetails) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponseDataWizardDetails) SetFailedResultSample(v string) *GetDataServicePublishedApiResponseDataWizardDetails {
	s.FailedResultSample = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetails) SetIsPagedResponse(v bool) *GetDataServicePublishedApiResponseDataWizardDetails {
	s.IsPagedResponse = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetails) SetSuccessfulResultSample(v string) *GetDataServicePublishedApiResponseDataWizardDetails {
	s.SuccessfulResultSample = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetails) SetWizardErrorCodes(v []*GetDataServicePublishedApiResponseDataWizardDetailsWizardErrorCodes) *GetDataServicePublishedApiResponseDataWizardDetails {
	s.WizardErrorCodes = v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetails) SetWizardRequestParameters(v []*GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters) *GetDataServicePublishedApiResponseDataWizardDetails {
	s.WizardRequestParameters = v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetails) SetWizardResponseParameters(v []*GetDataServicePublishedApiResponseDataWizardDetailsWizardResponseParameters) *GetDataServicePublishedApiResponseDataWizardDetails {
	s.WizardResponseParameters = v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetails) SetWizardConnection(v *GetDataServicePublishedApiResponseDataWizardDetailsWizardConnection) *GetDataServicePublishedApiResponseDataWizardDetails {
	s.WizardConnection = v
	return s
}

type GetDataServicePublishedApiResponseDataWizardDetailsWizardErrorCodes struct {
	ErrorCode     *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage  *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	ErrorSolution *string `json:"ErrorSolution,omitempty" xml:"ErrorSolution,omitempty" require:"true"`
}

func (s GetDataServicePublishedApiResponseDataWizardDetailsWizardErrorCodes) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponseDataWizardDetailsWizardErrorCodes) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardErrorCodes) SetErrorCode(v string) *GetDataServicePublishedApiResponseDataWizardDetailsWizardErrorCodes {
	s.ErrorCode = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardErrorCodes) SetErrorMessage(v string) *GetDataServicePublishedApiResponseDataWizardDetailsWizardErrorCodes {
	s.ErrorMessage = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardErrorCodes) SetErrorSolution(v string) *GetDataServicePublishedApiResponseDataWizardDetailsWizardErrorCodes {
	s.ErrorSolution = &v
	return s
}

type GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters struct {
	DefaultValue         *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	IsRequiredParameter  *bool   `json:"IsRequiredParameter,omitempty" xml:"IsRequiredParameter,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ParameterOperator    *int    `json:"ParameterOperator,omitempty" xml:"ParameterOperator,omitempty" require:"true"`
	ParameterPosition    *int    `json:"ParameterPosition,omitempty" xml:"ParameterPosition,omitempty" require:"true"`
}

func (s GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters) SetDefaultValue(v string) *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters {
	s.DefaultValue = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters) SetExampleValue(v string) *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters {
	s.ExampleValue = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters) SetIsRequiredParameter(v bool) *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters {
	s.IsRequiredParameter = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters) SetParameterDataType(v int) *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters {
	s.ParameterDataType = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters) SetParameterDescription(v string) *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters {
	s.ParameterDescription = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters) SetParameterName(v string) *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters {
	s.ParameterName = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters) SetParameterOperator(v int) *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters {
	s.ParameterOperator = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters) SetParameterPosition(v int) *GetDataServicePublishedApiResponseDataWizardDetailsWizardRequestParameters {
	s.ParameterPosition = &v
	return s
}

type GetDataServicePublishedApiResponseDataWizardDetailsWizardResponseParameters struct {
	ExampleValue         *string `json:"ExampleValue,omitempty" xml:"ExampleValue,omitempty" require:"true"`
	ParameterDataType    *int    `json:"ParameterDataType,omitempty" xml:"ParameterDataType,omitempty" require:"true"`
	ParameterDescription *string `json:"ParameterDescription,omitempty" xml:"ParameterDescription,omitempty" require:"true"`
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
}

func (s GetDataServicePublishedApiResponseDataWizardDetailsWizardResponseParameters) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponseDataWizardDetailsWizardResponseParameters) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardResponseParameters) SetExampleValue(v string) *GetDataServicePublishedApiResponseDataWizardDetailsWizardResponseParameters {
	s.ExampleValue = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardResponseParameters) SetParameterDataType(v int) *GetDataServicePublishedApiResponseDataWizardDetailsWizardResponseParameters {
	s.ParameterDataType = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardResponseParameters) SetParameterDescription(v string) *GetDataServicePublishedApiResponseDataWizardDetailsWizardResponseParameters {
	s.ParameterDescription = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardResponseParameters) SetParameterName(v string) *GetDataServicePublishedApiResponseDataWizardDetailsWizardResponseParameters {
	s.ParameterName = &v
	return s
}

type GetDataServicePublishedApiResponseDataWizardDetailsWizardConnection struct {
	ConnectionId *int64  `json:"ConnectionId,omitempty" xml:"ConnectionId,omitempty" require:"true"`
	TableName    *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
}

func (s GetDataServicePublishedApiResponseDataWizardDetailsWizardConnection) String() string {
	return tea.Prettify(s)
}

func (s GetDataServicePublishedApiResponseDataWizardDetailsWizardConnection) GoString() string {
	return s.String()
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardConnection) SetConnectionId(v int64) *GetDataServicePublishedApiResponseDataWizardDetailsWizardConnection {
	s.ConnectionId = &v
	return s
}

func (s *GetDataServicePublishedApiResponseDataWizardDetailsWizardConnection) SetTableName(v string) *GetDataServicePublishedApiResponseDataWizardDetailsWizardConnection {
	s.TableName = &v
	return s
}

type GetBaselineKeyPathRequest struct {
	BaselineId *int64  `json:"BaselineId,omitempty" xml:"BaselineId,omitempty" require:"true"`
	Bizdate    *string `json:"Bizdate,omitempty" xml:"Bizdate,omitempty" require:"true"`
	InGroupId  *int    `json:"InGroupId,omitempty" xml:"InGroupId,omitempty" require:"true"`
}

func (s GetBaselineKeyPathRequest) String() string {
	return tea.Prettify(s)
}

func (s GetBaselineKeyPathRequest) GoString() string {
	return s.String()
}

func (s *GetBaselineKeyPathRequest) SetBaselineId(v int64) *GetBaselineKeyPathRequest {
	s.BaselineId = &v
	return s
}

func (s *GetBaselineKeyPathRequest) SetBizdate(v string) *GetBaselineKeyPathRequest {
	s.Bizdate = &v
	return s
}

func (s *GetBaselineKeyPathRequest) SetInGroupId(v int) *GetBaselineKeyPathRequest {
	s.InGroupId = &v
	return s
}

type GetBaselineKeyPathResponse struct {
	Success        *bool                             `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                           `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                           `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                              `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           []*GetBaselineKeyPathResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Repeated"`
}

func (s GetBaselineKeyPathResponse) String() string {
	return tea.Prettify(s)
}

func (s GetBaselineKeyPathResponse) GoString() string {
	return s.String()
}

func (s *GetBaselineKeyPathResponse) SetSuccess(v bool) *GetBaselineKeyPathResponse {
	s.Success = &v
	return s
}

func (s *GetBaselineKeyPathResponse) SetErrorCode(v string) *GetBaselineKeyPathResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetBaselineKeyPathResponse) SetErrorMessage(v string) *GetBaselineKeyPathResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetBaselineKeyPathResponse) SetHttpStatusCode(v int) *GetBaselineKeyPathResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetBaselineKeyPathResponse) SetRequestId(v string) *GetBaselineKeyPathResponse {
	s.RequestId = &v
	return s
}

func (s *GetBaselineKeyPathResponse) SetData(v []*GetBaselineKeyPathResponseData) *GetBaselineKeyPathResponse {
	s.Data = v
	return s
}

type GetBaselineKeyPathResponseData struct {
	InstanceId *int64                                  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	ProjectId  *int64                                  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	NodeId     *int64                                  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	NodeName   *string                                 `json:"NodeName,omitempty" xml:"NodeName,omitempty" require:"true"`
	Bizdate    *int64                                  `json:"Bizdate,omitempty" xml:"Bizdate,omitempty" require:"true"`
	InGroupId  *int                                    `json:"InGroupId,omitempty" xml:"InGroupId,omitempty" require:"true"`
	Owner      *string                                 `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	PrgType    *int                                    `json:"PrgType,omitempty" xml:"PrgType,omitempty" require:"true"`
	Runs       []*GetBaselineKeyPathResponseDataRuns   `json:"Runs,omitempty" xml:"Runs,omitempty" require:"true" type:"Repeated"`
	Topics     []*GetBaselineKeyPathResponseDataTopics `json:"Topics,omitempty" xml:"Topics,omitempty" require:"true" type:"Repeated"`
}

func (s GetBaselineKeyPathResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetBaselineKeyPathResponseData) GoString() string {
	return s.String()
}

func (s *GetBaselineKeyPathResponseData) SetInstanceId(v int64) *GetBaselineKeyPathResponseData {
	s.InstanceId = &v
	return s
}

func (s *GetBaselineKeyPathResponseData) SetProjectId(v int64) *GetBaselineKeyPathResponseData {
	s.ProjectId = &v
	return s
}

func (s *GetBaselineKeyPathResponseData) SetNodeId(v int64) *GetBaselineKeyPathResponseData {
	s.NodeId = &v
	return s
}

func (s *GetBaselineKeyPathResponseData) SetNodeName(v string) *GetBaselineKeyPathResponseData {
	s.NodeName = &v
	return s
}

func (s *GetBaselineKeyPathResponseData) SetBizdate(v int64) *GetBaselineKeyPathResponseData {
	s.Bizdate = &v
	return s
}

func (s *GetBaselineKeyPathResponseData) SetInGroupId(v int) *GetBaselineKeyPathResponseData {
	s.InGroupId = &v
	return s
}

func (s *GetBaselineKeyPathResponseData) SetOwner(v string) *GetBaselineKeyPathResponseData {
	s.Owner = &v
	return s
}

func (s *GetBaselineKeyPathResponseData) SetPrgType(v int) *GetBaselineKeyPathResponseData {
	s.PrgType = &v
	return s
}

func (s *GetBaselineKeyPathResponseData) SetRuns(v []*GetBaselineKeyPathResponseDataRuns) *GetBaselineKeyPathResponseData {
	s.Runs = v
	return s
}

func (s *GetBaselineKeyPathResponseData) SetTopics(v []*GetBaselineKeyPathResponseDataTopics) *GetBaselineKeyPathResponseData {
	s.Topics = v
	return s
}

type GetBaselineKeyPathResponseDataRuns struct {
	AbsTime           *int64  `json:"AbsTime,omitempty" xml:"AbsTime,omitempty" require:"true"`
	BeginCast         *int64  `json:"BeginCast,omitempty" xml:"BeginCast,omitempty" require:"true"`
	BeginRunningTime  *int64  `json:"BeginRunningTime,omitempty" xml:"BeginRunningTime,omitempty" require:"true"`
	BeginWaitResTime  *int64  `json:"BeginWaitResTime,omitempty" xml:"BeginWaitResTime,omitempty" require:"true"`
	BeginWaitTimeTime *int64  `json:"BeginWaitTimeTime,omitempty" xml:"BeginWaitTimeTime,omitempty" require:"true"`
	Bizdate           *int64  `json:"Bizdate,omitempty" xml:"Bizdate,omitempty" require:"true"`
	CycTime           *int64  `json:"CycTime,omitempty" xml:"CycTime,omitempty" require:"true"`
	EndCast           *int64  `json:"EndCast,omitempty" xml:"EndCast,omitempty" require:"true"`
	FinishTime        *int64  `json:"FinishTime,omitempty" xml:"FinishTime,omitempty" require:"true"`
	InGroupId         *int    `json:"InGroupId,omitempty" xml:"InGroupId,omitempty" require:"true"`
	InstanceId        *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	NodeId            *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	NodeName          *string `json:"NodeName,omitempty" xml:"NodeName,omitempty" require:"true"`
	Owner             *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	ProjectId         *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Status            *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s GetBaselineKeyPathResponseDataRuns) String() string {
	return tea.Prettify(s)
}

func (s GetBaselineKeyPathResponseDataRuns) GoString() string {
	return s.String()
}

func (s *GetBaselineKeyPathResponseDataRuns) SetAbsTime(v int64) *GetBaselineKeyPathResponseDataRuns {
	s.AbsTime = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetBeginCast(v int64) *GetBaselineKeyPathResponseDataRuns {
	s.BeginCast = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetBeginRunningTime(v int64) *GetBaselineKeyPathResponseDataRuns {
	s.BeginRunningTime = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetBeginWaitResTime(v int64) *GetBaselineKeyPathResponseDataRuns {
	s.BeginWaitResTime = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetBeginWaitTimeTime(v int64) *GetBaselineKeyPathResponseDataRuns {
	s.BeginWaitTimeTime = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetBizdate(v int64) *GetBaselineKeyPathResponseDataRuns {
	s.Bizdate = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetCycTime(v int64) *GetBaselineKeyPathResponseDataRuns {
	s.CycTime = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetEndCast(v int64) *GetBaselineKeyPathResponseDataRuns {
	s.EndCast = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetFinishTime(v int64) *GetBaselineKeyPathResponseDataRuns {
	s.FinishTime = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetInGroupId(v int) *GetBaselineKeyPathResponseDataRuns {
	s.InGroupId = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetInstanceId(v int64) *GetBaselineKeyPathResponseDataRuns {
	s.InstanceId = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetNodeId(v int64) *GetBaselineKeyPathResponseDataRuns {
	s.NodeId = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetNodeName(v string) *GetBaselineKeyPathResponseDataRuns {
	s.NodeName = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetOwner(v string) *GetBaselineKeyPathResponseDataRuns {
	s.Owner = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetProjectId(v int64) *GetBaselineKeyPathResponseDataRuns {
	s.ProjectId = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataRuns) SetStatus(v string) *GetBaselineKeyPathResponseDataRuns {
	s.Status = &v
	return s
}

type GetBaselineKeyPathResponseDataTopics struct {
	InstanceId *int64 `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	TopicId    *int64 `json:"TopicId,omitempty" xml:"TopicId,omitempty" require:"true"`
	TopicName  *int64 `json:"TopicName,omitempty" xml:"TopicName,omitempty" require:"true"`
	AddTime    *int64 `json:"AddTime,omitempty" xml:"AddTime,omitempty" require:"true"`
}

func (s GetBaselineKeyPathResponseDataTopics) String() string {
	return tea.Prettify(s)
}

func (s GetBaselineKeyPathResponseDataTopics) GoString() string {
	return s.String()
}

func (s *GetBaselineKeyPathResponseDataTopics) SetInstanceId(v int64) *GetBaselineKeyPathResponseDataTopics {
	s.InstanceId = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataTopics) SetTopicId(v int64) *GetBaselineKeyPathResponseDataTopics {
	s.TopicId = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataTopics) SetTopicName(v int64) *GetBaselineKeyPathResponseDataTopics {
	s.TopicName = &v
	return s
}

func (s *GetBaselineKeyPathResponseDataTopics) SetAddTime(v int64) *GetBaselineKeyPathResponseDataTopics {
	s.AddTime = &v
	return s
}

type GetRemindRequest struct {
	RemindId *int64 `json:"RemindId,omitempty" xml:"RemindId,omitempty" require:"true"`
}

func (s GetRemindRequest) String() string {
	return tea.Prettify(s)
}

func (s GetRemindRequest) GoString() string {
	return s.String()
}

func (s *GetRemindRequest) SetRemindId(v int64) *GetRemindRequest {
	s.RemindId = &v
	return s
}

type GetRemindResponse struct {
	Success        *bool                  `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                   `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *GetRemindResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetRemindResponse) String() string {
	return tea.Prettify(s)
}

func (s GetRemindResponse) GoString() string {
	return s.String()
}

func (s *GetRemindResponse) SetSuccess(v bool) *GetRemindResponse {
	s.Success = &v
	return s
}

func (s *GetRemindResponse) SetErrorCode(v string) *GetRemindResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetRemindResponse) SetErrorMessage(v string) *GetRemindResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetRemindResponse) SetHttpStatusCode(v int) *GetRemindResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetRemindResponse) SetRequestId(v string) *GetRemindResponse {
	s.RequestId = &v
	return s
}

func (s *GetRemindResponse) SetData(v *GetRemindResponseData) *GetRemindResponse {
	s.Data = v
	return s
}

type GetRemindResponseData struct {
	RemindId      *int64                               `json:"RemindId,omitempty" xml:"RemindId,omitempty" require:"true"`
	RemindName    *string                              `json:"RemindName,omitempty" xml:"RemindName,omitempty" require:"true"`
	DndStart      *string                              `json:"DndStart,omitempty" xml:"DndStart,omitempty" require:"true"`
	DndEnd        *string                              `json:"DndEnd,omitempty" xml:"DndEnd,omitempty" require:"true"`
	RemindUnit    *string                              `json:"RemindUnit,omitempty" xml:"RemindUnit,omitempty" require:"true"`
	RemindType    *string                              `json:"RemindType,omitempty" xml:"RemindType,omitempty" require:"true"`
	AlertUnit     *string                              `json:"AlertUnit,omitempty" xml:"AlertUnit,omitempty" require:"true"`
	Useflag       *bool                                `json:"Useflag,omitempty" xml:"Useflag,omitempty" require:"true"`
	Founder       *string                              `json:"Founder,omitempty" xml:"Founder,omitempty" require:"true"`
	AlertInterval *int                                 `json:"AlertInterval,omitempty" xml:"AlertInterval,omitempty" require:"true"`
	Detail        *string                              `json:"Detail,omitempty" xml:"Detail,omitempty" require:"true"`
	MaxAlertTimes *int                                 `json:"MaxAlertTimes,omitempty" xml:"MaxAlertTimes,omitempty" require:"true"`
	Robots        []*GetRemindResponseDataRobots       `json:"Robots,omitempty" xml:"Robots,omitempty" require:"true" type:"Repeated"`
	Nodes         []*GetRemindResponseDataNodes        `json:"Nodes,omitempty" xml:"Nodes,omitempty" require:"true" type:"Repeated"`
	Baselines     []*GetRemindResponseDataBaselines    `json:"Baselines,omitempty" xml:"Baselines,omitempty" require:"true" type:"Repeated"`
	Projects      []*GetRemindResponseDataProjects     `json:"Projects,omitempty" xml:"Projects,omitempty" require:"true" type:"Repeated"`
	BizProcesses  []*GetRemindResponseDataBizProcesses `json:"BizProcesses,omitempty" xml:"BizProcesses,omitempty" require:"true" type:"Repeated"`
	AlertMethods  []*string                            `json:"AlertMethods,omitempty" xml:"AlertMethods,omitempty" require:"true" type:"Repeated"`
	AlertTargets  []*string                            `json:"AlertTargets,omitempty" xml:"AlertTargets,omitempty" require:"true" type:"Repeated"`
}

func (s GetRemindResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetRemindResponseData) GoString() string {
	return s.String()
}

func (s *GetRemindResponseData) SetRemindId(v int64) *GetRemindResponseData {
	s.RemindId = &v
	return s
}

func (s *GetRemindResponseData) SetRemindName(v string) *GetRemindResponseData {
	s.RemindName = &v
	return s
}

func (s *GetRemindResponseData) SetDndStart(v string) *GetRemindResponseData {
	s.DndStart = &v
	return s
}

func (s *GetRemindResponseData) SetDndEnd(v string) *GetRemindResponseData {
	s.DndEnd = &v
	return s
}

func (s *GetRemindResponseData) SetRemindUnit(v string) *GetRemindResponseData {
	s.RemindUnit = &v
	return s
}

func (s *GetRemindResponseData) SetRemindType(v string) *GetRemindResponseData {
	s.RemindType = &v
	return s
}

func (s *GetRemindResponseData) SetAlertUnit(v string) *GetRemindResponseData {
	s.AlertUnit = &v
	return s
}

func (s *GetRemindResponseData) SetUseflag(v bool) *GetRemindResponseData {
	s.Useflag = &v
	return s
}

func (s *GetRemindResponseData) SetFounder(v string) *GetRemindResponseData {
	s.Founder = &v
	return s
}

func (s *GetRemindResponseData) SetAlertInterval(v int) *GetRemindResponseData {
	s.AlertInterval = &v
	return s
}

func (s *GetRemindResponseData) SetDetail(v string) *GetRemindResponseData {
	s.Detail = &v
	return s
}

func (s *GetRemindResponseData) SetMaxAlertTimes(v int) *GetRemindResponseData {
	s.MaxAlertTimes = &v
	return s
}

func (s *GetRemindResponseData) SetRobots(v []*GetRemindResponseDataRobots) *GetRemindResponseData {
	s.Robots = v
	return s
}

func (s *GetRemindResponseData) SetNodes(v []*GetRemindResponseDataNodes) *GetRemindResponseData {
	s.Nodes = v
	return s
}

func (s *GetRemindResponseData) SetBaselines(v []*GetRemindResponseDataBaselines) *GetRemindResponseData {
	s.Baselines = v
	return s
}

func (s *GetRemindResponseData) SetProjects(v []*GetRemindResponseDataProjects) *GetRemindResponseData {
	s.Projects = v
	return s
}

func (s *GetRemindResponseData) SetBizProcesses(v []*GetRemindResponseDataBizProcesses) *GetRemindResponseData {
	s.BizProcesses = v
	return s
}

func (s *GetRemindResponseData) SetAlertMethods(v []*string) *GetRemindResponseData {
	s.AlertMethods = v
	return s
}

func (s *GetRemindResponseData) SetAlertTargets(v []*string) *GetRemindResponseData {
	s.AlertTargets = v
	return s
}

type GetRemindResponseDataRobots struct {
	WebUrl *string `json:"WebUrl,omitempty" xml:"WebUrl,omitempty" require:"true"`
	AtAll  *bool   `json:"AtAll,omitempty" xml:"AtAll,omitempty" require:"true"`
}

func (s GetRemindResponseDataRobots) String() string {
	return tea.Prettify(s)
}

func (s GetRemindResponseDataRobots) GoString() string {
	return s.String()
}

func (s *GetRemindResponseDataRobots) SetWebUrl(v string) *GetRemindResponseDataRobots {
	s.WebUrl = &v
	return s
}

func (s *GetRemindResponseDataRobots) SetAtAll(v bool) *GetRemindResponseDataRobots {
	s.AtAll = &v
	return s
}

type GetRemindResponseDataNodes struct {
	NodeId    *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	NodeName  *string `json:"NodeName,omitempty" xml:"NodeName,omitempty" require:"true"`
	Owner     *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	ProjectId *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
}

func (s GetRemindResponseDataNodes) String() string {
	return tea.Prettify(s)
}

func (s GetRemindResponseDataNodes) GoString() string {
	return s.String()
}

func (s *GetRemindResponseDataNodes) SetNodeId(v int64) *GetRemindResponseDataNodes {
	s.NodeId = &v
	return s
}

func (s *GetRemindResponseDataNodes) SetNodeName(v string) *GetRemindResponseDataNodes {
	s.NodeName = &v
	return s
}

func (s *GetRemindResponseDataNodes) SetOwner(v string) *GetRemindResponseDataNodes {
	s.Owner = &v
	return s
}

func (s *GetRemindResponseDataNodes) SetProjectId(v int64) *GetRemindResponseDataNodes {
	s.ProjectId = &v
	return s
}

type GetRemindResponseDataBaselines struct {
	BaselineId   *int64  `json:"BaselineId,omitempty" xml:"BaselineId,omitempty" require:"true"`
	BaselineName *string `json:"BaselineName,omitempty" xml:"BaselineName,omitempty" require:"true"`
}

func (s GetRemindResponseDataBaselines) String() string {
	return tea.Prettify(s)
}

func (s GetRemindResponseDataBaselines) GoString() string {
	return s.String()
}

func (s *GetRemindResponseDataBaselines) SetBaselineId(v int64) *GetRemindResponseDataBaselines {
	s.BaselineId = &v
	return s
}

func (s *GetRemindResponseDataBaselines) SetBaselineName(v string) *GetRemindResponseDataBaselines {
	s.BaselineName = &v
	return s
}

type GetRemindResponseDataProjects struct {
	ProjectId *int64 `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
}

func (s GetRemindResponseDataProjects) String() string {
	return tea.Prettify(s)
}

func (s GetRemindResponseDataProjects) GoString() string {
	return s.String()
}

func (s *GetRemindResponseDataProjects) SetProjectId(v int64) *GetRemindResponseDataProjects {
	s.ProjectId = &v
	return s
}

type GetRemindResponseDataBizProcesses struct {
	BizId          *int64  `json:"BizId,omitempty" xml:"BizId,omitempty" require:"true"`
	BizProcessName *string `json:"BizProcessName,omitempty" xml:"BizProcessName,omitempty" require:"true"`
}

func (s GetRemindResponseDataBizProcesses) String() string {
	return tea.Prettify(s)
}

func (s GetRemindResponseDataBizProcesses) GoString() string {
	return s.String()
}

func (s *GetRemindResponseDataBizProcesses) SetBizId(v int64) *GetRemindResponseDataBizProcesses {
	s.BizId = &v
	return s
}

func (s *GetRemindResponseDataBizProcesses) SetBizProcessName(v string) *GetRemindResponseDataBizProcesses {
	s.BizProcessName = &v
	return s
}

type GetMetaTableIntroWikiRequest struct {
	TableGuid   *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
	WikiVersion *int64  `json:"WikiVersion,omitempty" xml:"WikiVersion,omitempty"`
}

func (s GetMetaTableIntroWikiRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableIntroWikiRequest) GoString() string {
	return s.String()
}

func (s *GetMetaTableIntroWikiRequest) SetTableGuid(v string) *GetMetaTableIntroWikiRequest {
	s.TableGuid = &v
	return s
}

func (s *GetMetaTableIntroWikiRequest) SetWikiVersion(v int64) *GetMetaTableIntroWikiRequest {
	s.WikiVersion = &v
	return s
}

type GetMetaTableIntroWikiResponse struct {
	RequestId      *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string                            `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                            `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                               `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                              `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetMetaTableIntroWikiResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaTableIntroWikiResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableIntroWikiResponse) GoString() string {
	return s.String()
}

func (s *GetMetaTableIntroWikiResponse) SetRequestId(v string) *GetMetaTableIntroWikiResponse {
	s.RequestId = &v
	return s
}

func (s *GetMetaTableIntroWikiResponse) SetErrorCode(v string) *GetMetaTableIntroWikiResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetMetaTableIntroWikiResponse) SetErrorMessage(v string) *GetMetaTableIntroWikiResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetMetaTableIntroWikiResponse) SetHttpStatusCode(v int) *GetMetaTableIntroWikiResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetMetaTableIntroWikiResponse) SetSuccess(v bool) *GetMetaTableIntroWikiResponse {
	s.Success = &v
	return s
}

func (s *GetMetaTableIntroWikiResponse) SetData(v *GetMetaTableIntroWikiResponseData) *GetMetaTableIntroWikiResponse {
	s.Data = v
	return s
}

type GetMetaTableIntroWikiResponseData struct {
	CreateTime   *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	ModifiedTime *int64  `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	Creator      *string `json:"Creator,omitempty" xml:"Creator,omitempty" require:"true"`
	Version      *int64  `json:"Version,omitempty" xml:"Version,omitempty" require:"true"`
	CreatorName  *string `json:"CreatorName,omitempty" xml:"CreatorName,omitempty" require:"true"`
	Content      *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
}

func (s GetMetaTableIntroWikiResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableIntroWikiResponseData) GoString() string {
	return s.String()
}

func (s *GetMetaTableIntroWikiResponseData) SetCreateTime(v int64) *GetMetaTableIntroWikiResponseData {
	s.CreateTime = &v
	return s
}

func (s *GetMetaTableIntroWikiResponseData) SetModifiedTime(v int64) *GetMetaTableIntroWikiResponseData {
	s.ModifiedTime = &v
	return s
}

func (s *GetMetaTableIntroWikiResponseData) SetCreator(v string) *GetMetaTableIntroWikiResponseData {
	s.Creator = &v
	return s
}

func (s *GetMetaTableIntroWikiResponseData) SetVersion(v int64) *GetMetaTableIntroWikiResponseData {
	s.Version = &v
	return s
}

func (s *GetMetaTableIntroWikiResponseData) SetCreatorName(v string) *GetMetaTableIntroWikiResponseData {
	s.CreatorName = &v
	return s
}

func (s *GetMetaTableIntroWikiResponseData) SetContent(v string) *GetMetaTableIntroWikiResponseData {
	s.Content = &v
	return s
}

type GetBaselineStatusRequest struct {
	BaselineId *int64  `json:"BaselineId,omitempty" xml:"BaselineId,omitempty" require:"true"`
	Bizdate    *string `json:"Bizdate,omitempty" xml:"Bizdate,omitempty" require:"true"`
	InGroupId  *int    `json:"InGroupId,omitempty" xml:"InGroupId,omitempty" require:"true"`
}

func (s GetBaselineStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s GetBaselineStatusRequest) GoString() string {
	return s.String()
}

func (s *GetBaselineStatusRequest) SetBaselineId(v int64) *GetBaselineStatusRequest {
	s.BaselineId = &v
	return s
}

func (s *GetBaselineStatusRequest) SetBizdate(v string) *GetBaselineStatusRequest {
	s.Bizdate = &v
	return s
}

func (s *GetBaselineStatusRequest) SetInGroupId(v int) *GetBaselineStatusRequest {
	s.InGroupId = &v
	return s
}

type GetBaselineStatusResponse struct {
	Success        *bool                          `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                        `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                        `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                           `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *GetBaselineStatusResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetBaselineStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s GetBaselineStatusResponse) GoString() string {
	return s.String()
}

func (s *GetBaselineStatusResponse) SetSuccess(v bool) *GetBaselineStatusResponse {
	s.Success = &v
	return s
}

func (s *GetBaselineStatusResponse) SetErrorCode(v string) *GetBaselineStatusResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetBaselineStatusResponse) SetErrorMessage(v string) *GetBaselineStatusResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetBaselineStatusResponse) SetHttpStatusCode(v int) *GetBaselineStatusResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetBaselineStatusResponse) SetRequestId(v string) *GetBaselineStatusResponse {
	s.RequestId = &v
	return s
}

func (s *GetBaselineStatusResponse) SetData(v *GetBaselineStatusResponseData) *GetBaselineStatusResponse {
	s.Data = v
	return s
}

type GetBaselineStatusResponseData struct {
	BaselineName  *string                                     `json:"BaselineName,omitempty" xml:"BaselineName,omitempty" require:"true"`
	BaselineId    *int64                                      `json:"BaselineId,omitempty" xml:"BaselineId,omitempty" require:"true"`
	Bizdate       *int64                                      `json:"Bizdate,omitempty" xml:"Bizdate,omitempty" require:"true"`
	Owner         *string                                     `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	ExpTime       *int64                                      `json:"ExpTime,omitempty" xml:"ExpTime,omitempty" require:"true"`
	FinishTime    *int64                                      `json:"FinishTime,omitempty" xml:"FinishTime,omitempty" require:"true"`
	EndCast       *int64                                      `json:"EndCast,omitempty" xml:"EndCast,omitempty" require:"true"`
	SlaTime       *int64                                      `json:"SlaTime,omitempty" xml:"SlaTime,omitempty" require:"true"`
	Priority      *int                                        `json:"Priority,omitempty" xml:"Priority,omitempty" require:"true"`
	ProjectId     *int64                                      `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Buffer        *float32                                    `json:"Buffer,omitempty" xml:"Buffer,omitempty" require:"true"`
	Status        *string                                     `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	FinishStatus  *string                                     `json:"FinishStatus,omitempty" xml:"FinishStatus,omitempty" require:"true"`
	InGroupId     *int                                        `json:"InGroupId,omitempty" xml:"InGroupId,omitempty" require:"true"`
	LastInstance  *GetBaselineStatusResponseDataLastInstance  `json:"LastInstance,omitempty" xml:"LastInstance,omitempty" require:"true" type:"Struct"`
	BlockInstance *GetBaselineStatusResponseDataBlockInstance `json:"BlockInstance,omitempty" xml:"BlockInstance,omitempty" require:"true" type:"Struct"`
}

func (s GetBaselineStatusResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetBaselineStatusResponseData) GoString() string {
	return s.String()
}

func (s *GetBaselineStatusResponseData) SetBaselineName(v string) *GetBaselineStatusResponseData {
	s.BaselineName = &v
	return s
}

func (s *GetBaselineStatusResponseData) SetBaselineId(v int64) *GetBaselineStatusResponseData {
	s.BaselineId = &v
	return s
}

func (s *GetBaselineStatusResponseData) SetBizdate(v int64) *GetBaselineStatusResponseData {
	s.Bizdate = &v
	return s
}

func (s *GetBaselineStatusResponseData) SetOwner(v string) *GetBaselineStatusResponseData {
	s.Owner = &v
	return s
}

func (s *GetBaselineStatusResponseData) SetExpTime(v int64) *GetBaselineStatusResponseData {
	s.ExpTime = &v
	return s
}

func (s *GetBaselineStatusResponseData) SetFinishTime(v int64) *GetBaselineStatusResponseData {
	s.FinishTime = &v
	return s
}

func (s *GetBaselineStatusResponseData) SetEndCast(v int64) *GetBaselineStatusResponseData {
	s.EndCast = &v
	return s
}

func (s *GetBaselineStatusResponseData) SetSlaTime(v int64) *GetBaselineStatusResponseData {
	s.SlaTime = &v
	return s
}

func (s *GetBaselineStatusResponseData) SetPriority(v int) *GetBaselineStatusResponseData {
	s.Priority = &v
	return s
}

func (s *GetBaselineStatusResponseData) SetProjectId(v int64) *GetBaselineStatusResponseData {
	s.ProjectId = &v
	return s
}

func (s *GetBaselineStatusResponseData) SetBuffer(v float32) *GetBaselineStatusResponseData {
	s.Buffer = &v
	return s
}

func (s *GetBaselineStatusResponseData) SetStatus(v string) *GetBaselineStatusResponseData {
	s.Status = &v
	return s
}

func (s *GetBaselineStatusResponseData) SetFinishStatus(v string) *GetBaselineStatusResponseData {
	s.FinishStatus = &v
	return s
}

func (s *GetBaselineStatusResponseData) SetInGroupId(v int) *GetBaselineStatusResponseData {
	s.InGroupId = &v
	return s
}

func (s *GetBaselineStatusResponseData) SetLastInstance(v *GetBaselineStatusResponseDataLastInstance) *GetBaselineStatusResponseData {
	s.LastInstance = v
	return s
}

func (s *GetBaselineStatusResponseData) SetBlockInstance(v *GetBaselineStatusResponseDataBlockInstance) *GetBaselineStatusResponseData {
	s.BlockInstance = v
	return s
}

type GetBaselineStatusResponseDataLastInstance struct {
	InstanceId *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	Status     *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	ProjectId  *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Owner      *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	NodeId     *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	FinishTime *int64  `json:"FinishTime,omitempty" xml:"FinishTime,omitempty" require:"true"`
	EndCast    *int64  `json:"EndCast,omitempty" xml:"EndCast,omitempty" require:"true"`
	NodeName   *string `json:"NodeName,omitempty" xml:"NodeName,omitempty" require:"true"`
}

func (s GetBaselineStatusResponseDataLastInstance) String() string {
	return tea.Prettify(s)
}

func (s GetBaselineStatusResponseDataLastInstance) GoString() string {
	return s.String()
}

func (s *GetBaselineStatusResponseDataLastInstance) SetInstanceId(v int64) *GetBaselineStatusResponseDataLastInstance {
	s.InstanceId = &v
	return s
}

func (s *GetBaselineStatusResponseDataLastInstance) SetStatus(v string) *GetBaselineStatusResponseDataLastInstance {
	s.Status = &v
	return s
}

func (s *GetBaselineStatusResponseDataLastInstance) SetProjectId(v int64) *GetBaselineStatusResponseDataLastInstance {
	s.ProjectId = &v
	return s
}

func (s *GetBaselineStatusResponseDataLastInstance) SetOwner(v string) *GetBaselineStatusResponseDataLastInstance {
	s.Owner = &v
	return s
}

func (s *GetBaselineStatusResponseDataLastInstance) SetNodeId(v int64) *GetBaselineStatusResponseDataLastInstance {
	s.NodeId = &v
	return s
}

func (s *GetBaselineStatusResponseDataLastInstance) SetFinishTime(v int64) *GetBaselineStatusResponseDataLastInstance {
	s.FinishTime = &v
	return s
}

func (s *GetBaselineStatusResponseDataLastInstance) SetEndCast(v int64) *GetBaselineStatusResponseDataLastInstance {
	s.EndCast = &v
	return s
}

func (s *GetBaselineStatusResponseDataLastInstance) SetNodeName(v string) *GetBaselineStatusResponseDataLastInstance {
	s.NodeName = &v
	return s
}

type GetBaselineStatusResponseDataBlockInstance struct {
	InstanceId *int64  `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	Status     *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	ProjectId  *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Owner      *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	NodeId     *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	FinishTime *int64  `json:"FinishTime,omitempty" xml:"FinishTime,omitempty" require:"true"`
	EndCast    *int64  `json:"EndCast,omitempty" xml:"EndCast,omitempty" require:"true"`
	NodeName   *string `json:"NodeName,omitempty" xml:"NodeName,omitempty" require:"true"`
}

func (s GetBaselineStatusResponseDataBlockInstance) String() string {
	return tea.Prettify(s)
}

func (s GetBaselineStatusResponseDataBlockInstance) GoString() string {
	return s.String()
}

func (s *GetBaselineStatusResponseDataBlockInstance) SetInstanceId(v int64) *GetBaselineStatusResponseDataBlockInstance {
	s.InstanceId = &v
	return s
}

func (s *GetBaselineStatusResponseDataBlockInstance) SetStatus(v string) *GetBaselineStatusResponseDataBlockInstance {
	s.Status = &v
	return s
}

func (s *GetBaselineStatusResponseDataBlockInstance) SetProjectId(v int64) *GetBaselineStatusResponseDataBlockInstance {
	s.ProjectId = &v
	return s
}

func (s *GetBaselineStatusResponseDataBlockInstance) SetOwner(v string) *GetBaselineStatusResponseDataBlockInstance {
	s.Owner = &v
	return s
}

func (s *GetBaselineStatusResponseDataBlockInstance) SetNodeId(v int64) *GetBaselineStatusResponseDataBlockInstance {
	s.NodeId = &v
	return s
}

func (s *GetBaselineStatusResponseDataBlockInstance) SetFinishTime(v int64) *GetBaselineStatusResponseDataBlockInstance {
	s.FinishTime = &v
	return s
}

func (s *GetBaselineStatusResponseDataBlockInstance) SetEndCast(v int64) *GetBaselineStatusResponseDataBlockInstance {
	s.EndCast = &v
	return s
}

func (s *GetBaselineStatusResponseDataBlockInstance) SetNodeName(v string) *GetBaselineStatusResponseDataBlockInstance {
	s.NodeName = &v
	return s
}

type DeleteDataServiceApiRequest struct {
	TenantId  *int64 `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ProjectId *int64 `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	ApiId     *int64 `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
}

func (s DeleteDataServiceApiRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteDataServiceApiRequest) GoString() string {
	return s.String()
}

func (s *DeleteDataServiceApiRequest) SetTenantId(v int64) *DeleteDataServiceApiRequest {
	s.TenantId = &v
	return s
}

func (s *DeleteDataServiceApiRequest) SetProjectId(v int64) *DeleteDataServiceApiRequest {
	s.ProjectId = &v
	return s
}

func (s *DeleteDataServiceApiRequest) SetApiId(v int64) *DeleteDataServiceApiRequest {
	s.ApiId = &v
	return s
}

type DeleteDataServiceApiResponse struct {
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
}

func (s DeleteDataServiceApiResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteDataServiceApiResponse) GoString() string {
	return s.String()
}

func (s *DeleteDataServiceApiResponse) SetData(v bool) *DeleteDataServiceApiResponse {
	s.Data = &v
	return s
}

func (s *DeleteDataServiceApiResponse) SetErrorCode(v string) *DeleteDataServiceApiResponse {
	s.ErrorCode = &v
	return s
}

func (s *DeleteDataServiceApiResponse) SetErrorMessage(v string) *DeleteDataServiceApiResponse {
	s.ErrorMessage = &v
	return s
}

func (s *DeleteDataServiceApiResponse) SetHttpStatusCode(v int) *DeleteDataServiceApiResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *DeleteDataServiceApiResponse) SetRequestId(v string) *DeleteDataServiceApiResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteDataServiceApiResponse) SetSuccess(v bool) *DeleteDataServiceApiResponse {
	s.Success = &v
	return s
}

type PublishDataServiceApiRequest struct {
	TenantId  *int64 `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ProjectId *int64 `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	ApiId     *int64 `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
}

func (s PublishDataServiceApiRequest) String() string {
	return tea.Prettify(s)
}

func (s PublishDataServiceApiRequest) GoString() string {
	return s.String()
}

func (s *PublishDataServiceApiRequest) SetTenantId(v int64) *PublishDataServiceApiRequest {
	s.TenantId = &v
	return s
}

func (s *PublishDataServiceApiRequest) SetProjectId(v int64) *PublishDataServiceApiRequest {
	s.ProjectId = &v
	return s
}

func (s *PublishDataServiceApiRequest) SetApiId(v int64) *PublishDataServiceApiRequest {
	s.ApiId = &v
	return s
}

type PublishDataServiceApiResponse struct {
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
}

func (s PublishDataServiceApiResponse) String() string {
	return tea.Prettify(s)
}

func (s PublishDataServiceApiResponse) GoString() string {
	return s.String()
}

func (s *PublishDataServiceApiResponse) SetData(v bool) *PublishDataServiceApiResponse {
	s.Data = &v
	return s
}

func (s *PublishDataServiceApiResponse) SetErrorCode(v string) *PublishDataServiceApiResponse {
	s.ErrorCode = &v
	return s
}

func (s *PublishDataServiceApiResponse) SetErrorMessage(v string) *PublishDataServiceApiResponse {
	s.ErrorMessage = &v
	return s
}

func (s *PublishDataServiceApiResponse) SetHttpStatusCode(v int) *PublishDataServiceApiResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *PublishDataServiceApiResponse) SetRequestId(v string) *PublishDataServiceApiResponse {
	s.RequestId = &v
	return s
}

func (s *PublishDataServiceApiResponse) SetSuccess(v bool) *PublishDataServiceApiResponse {
	s.Success = &v
	return s
}

type GetMetaTableLineageRequest struct {
	TableGuid      *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
	Direction      *string `json:"Direction,omitempty" xml:"Direction,omitempty" require:"true"`
	NextPrimaryKey *string `json:"NextPrimaryKey,omitempty" xml:"NextPrimaryKey,omitempty"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s GetMetaTableLineageRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableLineageRequest) GoString() string {
	return s.String()
}

func (s *GetMetaTableLineageRequest) SetTableGuid(v string) *GetMetaTableLineageRequest {
	s.TableGuid = &v
	return s
}

func (s *GetMetaTableLineageRequest) SetDirection(v string) *GetMetaTableLineageRequest {
	s.Direction = &v
	return s
}

func (s *GetMetaTableLineageRequest) SetNextPrimaryKey(v string) *GetMetaTableLineageRequest {
	s.NextPrimaryKey = &v
	return s
}

func (s *GetMetaTableLineageRequest) SetPageSize(v int) *GetMetaTableLineageRequest {
	s.PageSize = &v
	return s
}

type GetMetaTableLineageResponse struct {
	RequestId      *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrorCode      *string                          `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                          `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                             `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool                            `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *GetMetaTableLineageResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaTableLineageResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableLineageResponse) GoString() string {
	return s.String()
}

func (s *GetMetaTableLineageResponse) SetRequestId(v string) *GetMetaTableLineageResponse {
	s.RequestId = &v
	return s
}

func (s *GetMetaTableLineageResponse) SetErrorCode(v string) *GetMetaTableLineageResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetMetaTableLineageResponse) SetErrorMessage(v string) *GetMetaTableLineageResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetMetaTableLineageResponse) SetHttpStatusCode(v int) *GetMetaTableLineageResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetMetaTableLineageResponse) SetSuccess(v bool) *GetMetaTableLineageResponse {
	s.Success = &v
	return s
}

func (s *GetMetaTableLineageResponse) SetData(v *GetMetaTableLineageResponseData) *GetMetaTableLineageResponse {
	s.Data = v
	return s
}

type GetMetaTableLineageResponseData struct {
	HasNext        *bool                                            `json:"HasNext,omitempty" xml:"HasNext,omitempty" require:"true"`
	NextPrimaryKey *string                                          `json:"NextPrimaryKey,omitempty" xml:"NextPrimaryKey,omitempty" require:"true"`
	DataEntityList []*GetMetaTableLineageResponseDataDataEntityList `json:"DataEntityList,omitempty" xml:"DataEntityList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMetaTableLineageResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableLineageResponseData) GoString() string {
	return s.String()
}

func (s *GetMetaTableLineageResponseData) SetHasNext(v bool) *GetMetaTableLineageResponseData {
	s.HasNext = &v
	return s
}

func (s *GetMetaTableLineageResponseData) SetNextPrimaryKey(v string) *GetMetaTableLineageResponseData {
	s.NextPrimaryKey = &v
	return s
}

func (s *GetMetaTableLineageResponseData) SetDataEntityList(v []*GetMetaTableLineageResponseDataDataEntityList) *GetMetaTableLineageResponseData {
	s.DataEntityList = v
	return s
}

type GetMetaTableLineageResponseDataDataEntityList struct {
	TableName *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	TableGuid *string `json:"TableGuid,omitempty" xml:"TableGuid,omitempty" require:"true"`
}

func (s GetMetaTableLineageResponseDataDataEntityList) String() string {
	return tea.Prettify(s)
}

func (s GetMetaTableLineageResponseDataDataEntityList) GoString() string {
	return s.String()
}

func (s *GetMetaTableLineageResponseDataDataEntityList) SetTableName(v string) *GetMetaTableLineageResponseDataDataEntityList {
	s.TableName = &v
	return s
}

func (s *GetMetaTableLineageResponseDataDataEntityList) SetTableGuid(v string) *GetMetaTableLineageResponseDataDataEntityList {
	s.TableGuid = &v
	return s
}

type ListBaselineStatusesRequest struct {
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Bizdate       *string `json:"Bizdate,omitempty" xml:"Bizdate,omitempty" require:"true"`
	Priority      *string `json:"Priority,omitempty" xml:"Priority,omitempty"`
	SearchText    *string `json:"SearchText,omitempty" xml:"SearchText,omitempty"`
	Owner         *string `json:"Owner,omitempty" xml:"Owner,omitempty"`
	TopicId       *int64  `json:"TopicId,omitempty" xml:"TopicId,omitempty"`
	FinishStatus  *string `json:"FinishStatus,omitempty" xml:"FinishStatus,omitempty"`
	Status        *string `json:"Status,omitempty" xml:"Status,omitempty"`
	BaselineTypes *string `json:"BaselineTypes,omitempty" xml:"BaselineTypes,omitempty"`
}

func (s ListBaselineStatusesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListBaselineStatusesRequest) GoString() string {
	return s.String()
}

func (s *ListBaselineStatusesRequest) SetPageNumber(v int) *ListBaselineStatusesRequest {
	s.PageNumber = &v
	return s
}

func (s *ListBaselineStatusesRequest) SetPageSize(v int) *ListBaselineStatusesRequest {
	s.PageSize = &v
	return s
}

func (s *ListBaselineStatusesRequest) SetBizdate(v string) *ListBaselineStatusesRequest {
	s.Bizdate = &v
	return s
}

func (s *ListBaselineStatusesRequest) SetPriority(v string) *ListBaselineStatusesRequest {
	s.Priority = &v
	return s
}

func (s *ListBaselineStatusesRequest) SetSearchText(v string) *ListBaselineStatusesRequest {
	s.SearchText = &v
	return s
}

func (s *ListBaselineStatusesRequest) SetOwner(v string) *ListBaselineStatusesRequest {
	s.Owner = &v
	return s
}

func (s *ListBaselineStatusesRequest) SetTopicId(v int64) *ListBaselineStatusesRequest {
	s.TopicId = &v
	return s
}

func (s *ListBaselineStatusesRequest) SetFinishStatus(v string) *ListBaselineStatusesRequest {
	s.FinishStatus = &v
	return s
}

func (s *ListBaselineStatusesRequest) SetStatus(v string) *ListBaselineStatusesRequest {
	s.Status = &v
	return s
}

func (s *ListBaselineStatusesRequest) SetBaselineTypes(v string) *ListBaselineStatusesRequest {
	s.BaselineTypes = &v
	return s
}

type ListBaselineStatusesResponse struct {
	Success        *bool                             `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                           `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                           `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                              `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *ListBaselineStatusesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListBaselineStatusesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListBaselineStatusesResponse) GoString() string {
	return s.String()
}

func (s *ListBaselineStatusesResponse) SetSuccess(v bool) *ListBaselineStatusesResponse {
	s.Success = &v
	return s
}

func (s *ListBaselineStatusesResponse) SetErrorCode(v string) *ListBaselineStatusesResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListBaselineStatusesResponse) SetErrorMessage(v string) *ListBaselineStatusesResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListBaselineStatusesResponse) SetHttpStatusCode(v int) *ListBaselineStatusesResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListBaselineStatusesResponse) SetRequestId(v string) *ListBaselineStatusesResponse {
	s.RequestId = &v
	return s
}

func (s *ListBaselineStatusesResponse) SetData(v *ListBaselineStatusesResponseData) *ListBaselineStatusesResponse {
	s.Data = v
	return s
}

type ListBaselineStatusesResponseData struct {
	PageNumber       *int                                                `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize         *int                                                `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount       *int                                                `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	BaselineStatuses []*ListBaselineStatusesResponseDataBaselineStatuses `json:"BaselineStatuses,omitempty" xml:"BaselineStatuses,omitempty" require:"true" type:"Repeated"`
}

func (s ListBaselineStatusesResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListBaselineStatusesResponseData) GoString() string {
	return s.String()
}

func (s *ListBaselineStatusesResponseData) SetPageNumber(v int) *ListBaselineStatusesResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListBaselineStatusesResponseData) SetPageSize(v int) *ListBaselineStatusesResponseData {
	s.PageSize = &v
	return s
}

func (s *ListBaselineStatusesResponseData) SetTotalCount(v int) *ListBaselineStatusesResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListBaselineStatusesResponseData) SetBaselineStatuses(v []*ListBaselineStatusesResponseDataBaselineStatuses) *ListBaselineStatusesResponseData {
	s.BaselineStatuses = v
	return s
}

type ListBaselineStatusesResponseDataBaselineStatuses struct {
	BaselineName *string `json:"BaselineName,omitempty" xml:"BaselineName,omitempty" require:"true"`
	BaselineId   *int64  `json:"BaselineId,omitempty" xml:"BaselineId,omitempty" require:"true"`
	Bizdate      *int64  `json:"Bizdate,omitempty" xml:"Bizdate,omitempty" require:"true"`
	Owner        *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	ExpTime      *int64  `json:"ExpTime,omitempty" xml:"ExpTime,omitempty" require:"true"`
	FinishTime   *int64  `json:"FinishTime,omitempty" xml:"FinishTime,omitempty" require:"true"`
	EndCast      *int64  `json:"EndCast,omitempty" xml:"EndCast,omitempty" require:"true"`
	SlaTime      *int64  `json:"SlaTime,omitempty" xml:"SlaTime,omitempty" require:"true"`
	Priority     *int    `json:"Priority,omitempty" xml:"Priority,omitempty" require:"true"`
	ProjectId    *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Buffer       *int64  `json:"Buffer,omitempty" xml:"Buffer,omitempty" require:"true"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	FinishStatus *string `json:"FinishStatus,omitempty" xml:"FinishStatus,omitempty" require:"true"`
	InGroupId    *int    `json:"InGroupId,omitempty" xml:"InGroupId,omitempty" require:"true"`
}

func (s ListBaselineStatusesResponseDataBaselineStatuses) String() string {
	return tea.Prettify(s)
}

func (s ListBaselineStatusesResponseDataBaselineStatuses) GoString() string {
	return s.String()
}

func (s *ListBaselineStatusesResponseDataBaselineStatuses) SetBaselineName(v string) *ListBaselineStatusesResponseDataBaselineStatuses {
	s.BaselineName = &v
	return s
}

func (s *ListBaselineStatusesResponseDataBaselineStatuses) SetBaselineId(v int64) *ListBaselineStatusesResponseDataBaselineStatuses {
	s.BaselineId = &v
	return s
}

func (s *ListBaselineStatusesResponseDataBaselineStatuses) SetBizdate(v int64) *ListBaselineStatusesResponseDataBaselineStatuses {
	s.Bizdate = &v
	return s
}

func (s *ListBaselineStatusesResponseDataBaselineStatuses) SetOwner(v string) *ListBaselineStatusesResponseDataBaselineStatuses {
	s.Owner = &v
	return s
}

func (s *ListBaselineStatusesResponseDataBaselineStatuses) SetExpTime(v int64) *ListBaselineStatusesResponseDataBaselineStatuses {
	s.ExpTime = &v
	return s
}

func (s *ListBaselineStatusesResponseDataBaselineStatuses) SetFinishTime(v int64) *ListBaselineStatusesResponseDataBaselineStatuses {
	s.FinishTime = &v
	return s
}

func (s *ListBaselineStatusesResponseDataBaselineStatuses) SetEndCast(v int64) *ListBaselineStatusesResponseDataBaselineStatuses {
	s.EndCast = &v
	return s
}

func (s *ListBaselineStatusesResponseDataBaselineStatuses) SetSlaTime(v int64) *ListBaselineStatusesResponseDataBaselineStatuses {
	s.SlaTime = &v
	return s
}

func (s *ListBaselineStatusesResponseDataBaselineStatuses) SetPriority(v int) *ListBaselineStatusesResponseDataBaselineStatuses {
	s.Priority = &v
	return s
}

func (s *ListBaselineStatusesResponseDataBaselineStatuses) SetProjectId(v int64) *ListBaselineStatusesResponseDataBaselineStatuses {
	s.ProjectId = &v
	return s
}

func (s *ListBaselineStatusesResponseDataBaselineStatuses) SetBuffer(v int64) *ListBaselineStatusesResponseDataBaselineStatuses {
	s.Buffer = &v
	return s
}

func (s *ListBaselineStatusesResponseDataBaselineStatuses) SetStatus(v string) *ListBaselineStatusesResponseDataBaselineStatuses {
	s.Status = &v
	return s
}

func (s *ListBaselineStatusesResponseDataBaselineStatuses) SetFinishStatus(v string) *ListBaselineStatusesResponseDataBaselineStatuses {
	s.FinishStatus = &v
	return s
}

func (s *ListBaselineStatusesResponseDataBaselineStatuses) SetInGroupId(v int) *ListBaselineStatusesResponseDataBaselineStatuses {
	s.InGroupId = &v
	return s
}

type ListRemindsRequest struct {
	PageNumber  *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize    *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Founder     *string `json:"Founder,omitempty" xml:"Founder,omitempty"`
	NodeId      *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty"`
	RemindTypes *string `json:"RemindTypes,omitempty" xml:"RemindTypes,omitempty"`
	AlertTarget *string `json:"AlertTarget,omitempty" xml:"AlertTarget,omitempty"`
	SearchText  *string `json:"SearchText,omitempty" xml:"SearchText,omitempty"`
}

func (s ListRemindsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListRemindsRequest) GoString() string {
	return s.String()
}

func (s *ListRemindsRequest) SetPageNumber(v int) *ListRemindsRequest {
	s.PageNumber = &v
	return s
}

func (s *ListRemindsRequest) SetPageSize(v int) *ListRemindsRequest {
	s.PageSize = &v
	return s
}

func (s *ListRemindsRequest) SetFounder(v string) *ListRemindsRequest {
	s.Founder = &v
	return s
}

func (s *ListRemindsRequest) SetNodeId(v int64) *ListRemindsRequest {
	s.NodeId = &v
	return s
}

func (s *ListRemindsRequest) SetRemindTypes(v string) *ListRemindsRequest {
	s.RemindTypes = &v
	return s
}

func (s *ListRemindsRequest) SetAlertTarget(v string) *ListRemindsRequest {
	s.AlertTarget = &v
	return s
}

func (s *ListRemindsRequest) SetSearchText(v string) *ListRemindsRequest {
	s.SearchText = &v
	return s
}

type ListRemindsResponse struct {
	Success        *bool                    `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                  `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                  `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                     `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           *ListRemindsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListRemindsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListRemindsResponse) GoString() string {
	return s.String()
}

func (s *ListRemindsResponse) SetSuccess(v bool) *ListRemindsResponse {
	s.Success = &v
	return s
}

func (s *ListRemindsResponse) SetErrorCode(v string) *ListRemindsResponse {
	s.ErrorCode = &v
	return s
}

func (s *ListRemindsResponse) SetErrorMessage(v string) *ListRemindsResponse {
	s.ErrorMessage = &v
	return s
}

func (s *ListRemindsResponse) SetHttpStatusCode(v int) *ListRemindsResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *ListRemindsResponse) SetRequestId(v string) *ListRemindsResponse {
	s.RequestId = &v
	return s
}

func (s *ListRemindsResponse) SetData(v *ListRemindsResponseData) *ListRemindsResponse {
	s.Data = v
	return s
}

type ListRemindsResponseData struct {
	PageNumber *int                              `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                              `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                              `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Reminds    []*ListRemindsResponseDataReminds `json:"Reminds,omitempty" xml:"Reminds,omitempty" require:"true" type:"Repeated"`
}

func (s ListRemindsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListRemindsResponseData) GoString() string {
	return s.String()
}

func (s *ListRemindsResponseData) SetPageNumber(v int) *ListRemindsResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListRemindsResponseData) SetPageSize(v int) *ListRemindsResponseData {
	s.PageSize = &v
	return s
}

func (s *ListRemindsResponseData) SetTotalCount(v int) *ListRemindsResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListRemindsResponseData) SetReminds(v []*ListRemindsResponseDataReminds) *ListRemindsResponseData {
	s.Reminds = v
	return s
}

type ListRemindsResponseDataReminds struct {
	RemindId      *int64    `json:"RemindId,omitempty" xml:"RemindId,omitempty" require:"true"`
	RemindName    *string   `json:"RemindName,omitempty" xml:"RemindName,omitempty" require:"true"`
	DndStart      *string   `json:"DndStart,omitempty" xml:"DndStart,omitempty" require:"true"`
	DndEnd        *string   `json:"DndEnd,omitempty" xml:"DndEnd,omitempty" require:"true"`
	RemindUnit    *string   `json:"RemindUnit,omitempty" xml:"RemindUnit,omitempty" require:"true"`
	RemindType    *string   `json:"RemindType,omitempty" xml:"RemindType,omitempty" require:"true"`
	AlertUnit     *string   `json:"AlertUnit,omitempty" xml:"AlertUnit,omitempty" require:"true"`
	Useflag       *bool     `json:"Useflag,omitempty" xml:"Useflag,omitempty" require:"true"`
	Founder       *string   `json:"Founder,omitempty" xml:"Founder,omitempty" require:"true"`
	NodeIds       []*int64  `json:"NodeIds,omitempty" xml:"NodeIds,omitempty" require:"true" type:"Repeated"`
	BaselineIds   []*int64  `json:"BaselineIds,omitempty" xml:"BaselineIds,omitempty" require:"true" type:"Repeated"`
	ProjectIds    []*int64  `json:"ProjectIds,omitempty" xml:"ProjectIds,omitempty" require:"true" type:"Repeated"`
	BizProcessIds []*int64  `json:"BizProcessIds,omitempty" xml:"BizProcessIds,omitempty" require:"true" type:"Repeated"`
	AlertMethods  []*string `json:"AlertMethods,omitempty" xml:"AlertMethods,omitempty" require:"true" type:"Repeated"`
	AlertTargets  []*string `json:"AlertTargets,omitempty" xml:"AlertTargets,omitempty" require:"true" type:"Repeated"`
}

func (s ListRemindsResponseDataReminds) String() string {
	return tea.Prettify(s)
}

func (s ListRemindsResponseDataReminds) GoString() string {
	return s.String()
}

func (s *ListRemindsResponseDataReminds) SetRemindId(v int64) *ListRemindsResponseDataReminds {
	s.RemindId = &v
	return s
}

func (s *ListRemindsResponseDataReminds) SetRemindName(v string) *ListRemindsResponseDataReminds {
	s.RemindName = &v
	return s
}

func (s *ListRemindsResponseDataReminds) SetDndStart(v string) *ListRemindsResponseDataReminds {
	s.DndStart = &v
	return s
}

func (s *ListRemindsResponseDataReminds) SetDndEnd(v string) *ListRemindsResponseDataReminds {
	s.DndEnd = &v
	return s
}

func (s *ListRemindsResponseDataReminds) SetRemindUnit(v string) *ListRemindsResponseDataReminds {
	s.RemindUnit = &v
	return s
}

func (s *ListRemindsResponseDataReminds) SetRemindType(v string) *ListRemindsResponseDataReminds {
	s.RemindType = &v
	return s
}

func (s *ListRemindsResponseDataReminds) SetAlertUnit(v string) *ListRemindsResponseDataReminds {
	s.AlertUnit = &v
	return s
}

func (s *ListRemindsResponseDataReminds) SetUseflag(v bool) *ListRemindsResponseDataReminds {
	s.Useflag = &v
	return s
}

func (s *ListRemindsResponseDataReminds) SetFounder(v string) *ListRemindsResponseDataReminds {
	s.Founder = &v
	return s
}

func (s *ListRemindsResponseDataReminds) SetNodeIds(v []*int64) *ListRemindsResponseDataReminds {
	s.NodeIds = v
	return s
}

func (s *ListRemindsResponseDataReminds) SetBaselineIds(v []*int64) *ListRemindsResponseDataReminds {
	s.BaselineIds = v
	return s
}

func (s *ListRemindsResponseDataReminds) SetProjectIds(v []*int64) *ListRemindsResponseDataReminds {
	s.ProjectIds = v
	return s
}

func (s *ListRemindsResponseDataReminds) SetBizProcessIds(v []*int64) *ListRemindsResponseDataReminds {
	s.BizProcessIds = v
	return s
}

func (s *ListRemindsResponseDataReminds) SetAlertMethods(v []*string) *ListRemindsResponseDataReminds {
	s.AlertMethods = v
	return s
}

func (s *ListRemindsResponseDataReminds) SetAlertTargets(v []*string) *ListRemindsResponseDataReminds {
	s.AlertTargets = v
	return s
}

type DeleteQualityEntityRequest struct {
	EntityId    *int64  `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
	ProjectName *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	EnvType     *string `json:"EnvType,omitempty" xml:"EnvType,omitempty" require:"true"`
}

func (s DeleteQualityEntityRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteQualityEntityRequest) GoString() string {
	return s.String()
}

func (s *DeleteQualityEntityRequest) SetEntityId(v int64) *DeleteQualityEntityRequest {
	s.EntityId = &v
	return s
}

func (s *DeleteQualityEntityRequest) SetProjectName(v string) *DeleteQualityEntityRequest {
	s.ProjectName = &v
	return s
}

func (s *DeleteQualityEntityRequest) SetEnvType(v string) *DeleteQualityEntityRequest {
	s.EnvType = &v
	return s
}

type DeleteQualityEntityResponse struct {
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteQualityEntityResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteQualityEntityResponse) GoString() string {
	return s.String()
}

func (s *DeleteQualityEntityResponse) SetSuccess(v bool) *DeleteQualityEntityResponse {
	s.Success = &v
	return s
}

func (s *DeleteQualityEntityResponse) SetErrorCode(v string) *DeleteQualityEntityResponse {
	s.ErrorCode = &v
	return s
}

func (s *DeleteQualityEntityResponse) SetErrorMessage(v string) *DeleteQualityEntityResponse {
	s.ErrorMessage = &v
	return s
}

func (s *DeleteQualityEntityResponse) SetHttpStatusCode(v int) *DeleteQualityEntityResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *DeleteQualityEntityResponse) SetData(v bool) *DeleteQualityEntityResponse {
	s.Data = &v
	return s
}

func (s *DeleteQualityEntityResponse) SetRequestId(v string) *DeleteQualityEntityResponse {
	s.RequestId = &v
	return s
}

type CreateQualityFollowerRequest struct {
	ProjectName *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	Follower    *string `json:"Follower,omitempty" xml:"Follower,omitempty" require:"true"`
	AlarmMode   *int    `json:"AlarmMode,omitempty" xml:"AlarmMode,omitempty" require:"true"`
	EntityId    *int64  `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
}

func (s CreateQualityFollowerRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateQualityFollowerRequest) GoString() string {
	return s.String()
}

func (s *CreateQualityFollowerRequest) SetProjectName(v string) *CreateQualityFollowerRequest {
	s.ProjectName = &v
	return s
}

func (s *CreateQualityFollowerRequest) SetFollower(v string) *CreateQualityFollowerRequest {
	s.Follower = &v
	return s
}

func (s *CreateQualityFollowerRequest) SetAlarmMode(v int) *CreateQualityFollowerRequest {
	s.AlarmMode = &v
	return s
}

func (s *CreateQualityFollowerRequest) SetEntityId(v int64) *CreateQualityFollowerRequest {
	s.EntityId = &v
	return s
}

type CreateQualityFollowerResponse struct {
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	Data           *int    `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CreateQualityFollowerResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateQualityFollowerResponse) GoString() string {
	return s.String()
}

func (s *CreateQualityFollowerResponse) SetErrorCode(v string) *CreateQualityFollowerResponse {
	s.ErrorCode = &v
	return s
}

func (s *CreateQualityFollowerResponse) SetData(v int) *CreateQualityFollowerResponse {
	s.Data = &v
	return s
}

func (s *CreateQualityFollowerResponse) SetSuccess(v bool) *CreateQualityFollowerResponse {
	s.Success = &v
	return s
}

func (s *CreateQualityFollowerResponse) SetErrorMessage(v string) *CreateQualityFollowerResponse {
	s.ErrorMessage = &v
	return s
}

func (s *CreateQualityFollowerResponse) SetHttpStatusCode(v int) *CreateQualityFollowerResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *CreateQualityFollowerResponse) SetRequestId(v string) *CreateQualityFollowerResponse {
	s.RequestId = &v
	return s
}

type CreateDataServiceApiRequest struct {
	TenantId            *int64  `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ProjectId           *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	ApiName             *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	GroupId             *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiMode             *int    `json:"ApiMode,omitempty" xml:"ApiMode,omitempty" require:"true"`
	RequestMethod       *int    `json:"RequestMethod,omitempty" xml:"RequestMethod,omitempty" require:"true"`
	ResponseContentType *int    `json:"ResponseContentType,omitempty" xml:"ResponseContentType,omitempty" require:"true"`
	Timeout             *int    `json:"Timeout,omitempty" xml:"Timeout,omitempty" require:"true"`
	VisibleRange        *int    `json:"VisibleRange,omitempty" xml:"VisibleRange,omitempty" require:"true"`
	Protocols           *string `json:"Protocols,omitempty" xml:"Protocols,omitempty" require:"true"`
	WizardDetails       *string `json:"WizardDetails,omitempty" xml:"WizardDetails,omitempty"`
	ScriptDetails       *string `json:"ScriptDetails,omitempty" xml:"ScriptDetails,omitempty"`
	RegistrationDetails *string `json:"RegistrationDetails,omitempty" xml:"RegistrationDetails,omitempty"`
	ApiPath             *string `json:"ApiPath,omitempty" xml:"ApiPath,omitempty" require:"true"`
	ApiDescription      *string `json:"ApiDescription,omitempty" xml:"ApiDescription,omitempty" require:"true"`
}

func (s CreateDataServiceApiRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateDataServiceApiRequest) GoString() string {
	return s.String()
}

func (s *CreateDataServiceApiRequest) SetTenantId(v int64) *CreateDataServiceApiRequest {
	s.TenantId = &v
	return s
}

func (s *CreateDataServiceApiRequest) SetProjectId(v int64) *CreateDataServiceApiRequest {
	s.ProjectId = &v
	return s
}

func (s *CreateDataServiceApiRequest) SetApiName(v string) *CreateDataServiceApiRequest {
	s.ApiName = &v
	return s
}

func (s *CreateDataServiceApiRequest) SetGroupId(v string) *CreateDataServiceApiRequest {
	s.GroupId = &v
	return s
}

func (s *CreateDataServiceApiRequest) SetApiMode(v int) *CreateDataServiceApiRequest {
	s.ApiMode = &v
	return s
}

func (s *CreateDataServiceApiRequest) SetRequestMethod(v int) *CreateDataServiceApiRequest {
	s.RequestMethod = &v
	return s
}

func (s *CreateDataServiceApiRequest) SetResponseContentType(v int) *CreateDataServiceApiRequest {
	s.ResponseContentType = &v
	return s
}

func (s *CreateDataServiceApiRequest) SetTimeout(v int) *CreateDataServiceApiRequest {
	s.Timeout = &v
	return s
}

func (s *CreateDataServiceApiRequest) SetVisibleRange(v int) *CreateDataServiceApiRequest {
	s.VisibleRange = &v
	return s
}

func (s *CreateDataServiceApiRequest) SetProtocols(v string) *CreateDataServiceApiRequest {
	s.Protocols = &v
	return s
}

func (s *CreateDataServiceApiRequest) SetWizardDetails(v string) *CreateDataServiceApiRequest {
	s.WizardDetails = &v
	return s
}

func (s *CreateDataServiceApiRequest) SetScriptDetails(v string) *CreateDataServiceApiRequest {
	s.ScriptDetails = &v
	return s
}

func (s *CreateDataServiceApiRequest) SetRegistrationDetails(v string) *CreateDataServiceApiRequest {
	s.RegistrationDetails = &v
	return s
}

func (s *CreateDataServiceApiRequest) SetApiPath(v string) *CreateDataServiceApiRequest {
	s.ApiPath = &v
	return s
}

func (s *CreateDataServiceApiRequest) SetApiDescription(v string) *CreateDataServiceApiRequest {
	s.ApiDescription = &v
	return s
}

type CreateDataServiceApiResponse struct {
	Data           *int64  `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CreateDataServiceApiResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateDataServiceApiResponse) GoString() string {
	return s.String()
}

func (s *CreateDataServiceApiResponse) SetData(v int64) *CreateDataServiceApiResponse {
	s.Data = &v
	return s
}

func (s *CreateDataServiceApiResponse) SetErrorCode(v string) *CreateDataServiceApiResponse {
	s.ErrorCode = &v
	return s
}

func (s *CreateDataServiceApiResponse) SetErrorMessage(v string) *CreateDataServiceApiResponse {
	s.ErrorMessage = &v
	return s
}

func (s *CreateDataServiceApiResponse) SetHttpStatusCode(v int) *CreateDataServiceApiResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *CreateDataServiceApiResponse) SetSuccess(v bool) *CreateDataServiceApiResponse {
	s.Success = &v
	return s
}

func (s *CreateDataServiceApiResponse) SetRequestId(v string) *CreateDataServiceApiResponse {
	s.RequestId = &v
	return s
}

type AbolishDataServiceApiRequest struct {
	TenantId  *int64 `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	ProjectId *int64 `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	ApiId     *int64 `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
}

func (s AbolishDataServiceApiRequest) String() string {
	return tea.Prettify(s)
}

func (s AbolishDataServiceApiRequest) GoString() string {
	return s.String()
}

func (s *AbolishDataServiceApiRequest) SetTenantId(v int64) *AbolishDataServiceApiRequest {
	s.TenantId = &v
	return s
}

func (s *AbolishDataServiceApiRequest) SetProjectId(v int64) *AbolishDataServiceApiRequest {
	s.ProjectId = &v
	return s
}

func (s *AbolishDataServiceApiRequest) SetApiId(v int64) *AbolishDataServiceApiRequest {
	s.ApiId = &v
	return s
}

type AbolishDataServiceApiResponse struct {
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
}

func (s AbolishDataServiceApiResponse) String() string {
	return tea.Prettify(s)
}

func (s AbolishDataServiceApiResponse) GoString() string {
	return s.String()
}

func (s *AbolishDataServiceApiResponse) SetData(v bool) *AbolishDataServiceApiResponse {
	s.Data = &v
	return s
}

func (s *AbolishDataServiceApiResponse) SetErrorCode(v string) *AbolishDataServiceApiResponse {
	s.ErrorCode = &v
	return s
}

func (s *AbolishDataServiceApiResponse) SetErrorMessage(v string) *AbolishDataServiceApiResponse {
	s.ErrorMessage = &v
	return s
}

func (s *AbolishDataServiceApiResponse) SetHttpStatusCode(v int) *AbolishDataServiceApiResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *AbolishDataServiceApiResponse) SetRequestId(v string) *AbolishDataServiceApiResponse {
	s.RequestId = &v
	return s
}

func (s *AbolishDataServiceApiResponse) SetSuccess(v bool) *AbolishDataServiceApiResponse {
	s.Success = &v
	return s
}

type GetQualityEntityRequest struct {
	ProjectName     *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	TableName       *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	EnvType         *string `json:"EnvType,omitempty" xml:"EnvType,omitempty" require:"true"`
	MatchExpression *string `json:"MatchExpression,omitempty" xml:"MatchExpression,omitempty"`
}

func (s GetQualityEntityRequest) String() string {
	return tea.Prettify(s)
}

func (s GetQualityEntityRequest) GoString() string {
	return s.String()
}

func (s *GetQualityEntityRequest) SetProjectName(v string) *GetQualityEntityRequest {
	s.ProjectName = &v
	return s
}

func (s *GetQualityEntityRequest) SetTableName(v string) *GetQualityEntityRequest {
	s.TableName = &v
	return s
}

func (s *GetQualityEntityRequest) SetEnvType(v string) *GetQualityEntityRequest {
	s.EnvType = &v
	return s
}

func (s *GetQualityEntityRequest) SetMatchExpression(v string) *GetQualityEntityRequest {
	s.MatchExpression = &v
	return s
}

type GetQualityEntityResponse struct {
	Success        *bool                           `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string                         `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string                         `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                            `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           []*GetQualityEntityResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Repeated"`
}

func (s GetQualityEntityResponse) String() string {
	return tea.Prettify(s)
}

func (s GetQualityEntityResponse) GoString() string {
	return s.String()
}

func (s *GetQualityEntityResponse) SetSuccess(v bool) *GetQualityEntityResponse {
	s.Success = &v
	return s
}

func (s *GetQualityEntityResponse) SetErrorCode(v string) *GetQualityEntityResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetQualityEntityResponse) SetErrorMessage(v string) *GetQualityEntityResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetQualityEntityResponse) SetHttpStatusCode(v int) *GetQualityEntityResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetQualityEntityResponse) SetRequestId(v string) *GetQualityEntityResponse {
	s.RequestId = &v
	return s
}

func (s *GetQualityEntityResponse) SetData(v []*GetQualityEntityResponseData) *GetQualityEntityResponse {
	s.Data = v
	return s
}

type GetQualityEntityResponseData struct {
	Id              *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	ProjectName     *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	TableName       *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	EnvType         *string `json:"EnvType,omitempty" xml:"EnvType,omitempty" require:"true"`
	MatchExpression *string `json:"MatchExpression,omitempty" xml:"MatchExpression,omitempty" require:"true"`
	EntityLevel     *int    `json:"EntityLevel,omitempty" xml:"EntityLevel,omitempty" require:"true"`
	OnDuty          *string `json:"OnDuty,omitempty" xml:"OnDuty,omitempty" require:"true"`
	ModifyUser      *string `json:"ModifyUser,omitempty" xml:"ModifyUser,omitempty" require:"true"`
	CreateTime      *int64  `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	ModifyTime      *int64  `json:"ModifyTime,omitempty" xml:"ModifyTime,omitempty" require:"true"`
	Sql             *int    `json:"Sql,omitempty" xml:"Sql,omitempty" require:"true"`
	Task            *int    `json:"Task,omitempty" xml:"Task,omitempty" require:"true"`
	Followers       *string `json:"Followers,omitempty" xml:"Followers,omitempty" require:"true"`
	HasRelativeNode *bool   `json:"HasRelativeNode,omitempty" xml:"HasRelativeNode,omitempty" require:"true"`
	RelativeNode    *string `json:"RelativeNode,omitempty" xml:"RelativeNode,omitempty" require:"true"`
}

func (s GetQualityEntityResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetQualityEntityResponseData) GoString() string {
	return s.String()
}

func (s *GetQualityEntityResponseData) SetId(v int64) *GetQualityEntityResponseData {
	s.Id = &v
	return s
}

func (s *GetQualityEntityResponseData) SetProjectName(v string) *GetQualityEntityResponseData {
	s.ProjectName = &v
	return s
}

func (s *GetQualityEntityResponseData) SetTableName(v string) *GetQualityEntityResponseData {
	s.TableName = &v
	return s
}

func (s *GetQualityEntityResponseData) SetEnvType(v string) *GetQualityEntityResponseData {
	s.EnvType = &v
	return s
}

func (s *GetQualityEntityResponseData) SetMatchExpression(v string) *GetQualityEntityResponseData {
	s.MatchExpression = &v
	return s
}

func (s *GetQualityEntityResponseData) SetEntityLevel(v int) *GetQualityEntityResponseData {
	s.EntityLevel = &v
	return s
}

func (s *GetQualityEntityResponseData) SetOnDuty(v string) *GetQualityEntityResponseData {
	s.OnDuty = &v
	return s
}

func (s *GetQualityEntityResponseData) SetModifyUser(v string) *GetQualityEntityResponseData {
	s.ModifyUser = &v
	return s
}

func (s *GetQualityEntityResponseData) SetCreateTime(v int64) *GetQualityEntityResponseData {
	s.CreateTime = &v
	return s
}

func (s *GetQualityEntityResponseData) SetModifyTime(v int64) *GetQualityEntityResponseData {
	s.ModifyTime = &v
	return s
}

func (s *GetQualityEntityResponseData) SetSql(v int) *GetQualityEntityResponseData {
	s.Sql = &v
	return s
}

func (s *GetQualityEntityResponseData) SetTask(v int) *GetQualityEntityResponseData {
	s.Task = &v
	return s
}

func (s *GetQualityEntityResponseData) SetFollowers(v string) *GetQualityEntityResponseData {
	s.Followers = &v
	return s
}

func (s *GetQualityEntityResponseData) SetHasRelativeNode(v bool) *GetQualityEntityResponseData {
	s.HasRelativeNode = &v
	return s
}

func (s *GetQualityEntityResponseData) SetRelativeNode(v string) *GetQualityEntityResponseData {
	s.RelativeNode = &v
	return s
}

type GetQualityFollowerRequest struct {
	ProjectName *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	EntityId    *int64  `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
}

func (s GetQualityFollowerRequest) String() string {
	return tea.Prettify(s)
}

func (s GetQualityFollowerRequest) GoString() string {
	return s.String()
}

func (s *GetQualityFollowerRequest) SetProjectName(v string) *GetQualityFollowerRequest {
	s.ProjectName = &v
	return s
}

func (s *GetQualityFollowerRequest) SetEntityId(v int64) *GetQualityFollowerRequest {
	s.EntityId = &v
	return s
}

type GetQualityFollowerResponse struct {
	ErrorCode      *string                           `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	Success        *bool                             `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorMessage   *string                           `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int                              `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data           []*GetQualityFollowerResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Repeated"`
}

func (s GetQualityFollowerResponse) String() string {
	return tea.Prettify(s)
}

func (s GetQualityFollowerResponse) GoString() string {
	return s.String()
}

func (s *GetQualityFollowerResponse) SetErrorCode(v string) *GetQualityFollowerResponse {
	s.ErrorCode = &v
	return s
}

func (s *GetQualityFollowerResponse) SetSuccess(v bool) *GetQualityFollowerResponse {
	s.Success = &v
	return s
}

func (s *GetQualityFollowerResponse) SetErrorMessage(v string) *GetQualityFollowerResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetQualityFollowerResponse) SetHttpStatusCode(v int) *GetQualityFollowerResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *GetQualityFollowerResponse) SetRequestId(v string) *GetQualityFollowerResponse {
	s.RequestId = &v
	return s
}

func (s *GetQualityFollowerResponse) SetData(v []*GetQualityFollowerResponseData) *GetQualityFollowerResponse {
	s.Data = v
	return s
}

type GetQualityFollowerResponseData struct {
	ProjectName *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	TableName   *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	Id          *int64  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	EntityId    *string `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
	Follower    *string `json:"Follower,omitempty" xml:"Follower,omitempty" require:"true"`
	AlarmMode   *int    `json:"AlarmMode,omitempty" xml:"AlarmMode,omitempty" require:"true"`
}

func (s GetQualityFollowerResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetQualityFollowerResponseData) GoString() string {
	return s.String()
}

func (s *GetQualityFollowerResponseData) SetProjectName(v string) *GetQualityFollowerResponseData {
	s.ProjectName = &v
	return s
}

func (s *GetQualityFollowerResponseData) SetTableName(v string) *GetQualityFollowerResponseData {
	s.TableName = &v
	return s
}

func (s *GetQualityFollowerResponseData) SetId(v int64) *GetQualityFollowerResponseData {
	s.Id = &v
	return s
}

func (s *GetQualityFollowerResponseData) SetEntityId(v string) *GetQualityFollowerResponseData {
	s.EntityId = &v
	return s
}

func (s *GetQualityFollowerResponseData) SetFollower(v string) *GetQualityFollowerResponseData {
	s.Follower = &v
	return s
}

func (s *GetQualityFollowerResponseData) SetAlarmMode(v int) *GetQualityFollowerResponseData {
	s.AlarmMode = &v
	return s
}

type DeleteQualityFollowerRequest struct {
	ProjectName *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	FollowerId  *int64  `json:"FollowerId,omitempty" xml:"FollowerId,omitempty" require:"true"`
}

func (s DeleteQualityFollowerRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteQualityFollowerRequest) GoString() string {
	return s.String()
}

func (s *DeleteQualityFollowerRequest) SetProjectName(v string) *DeleteQualityFollowerRequest {
	s.ProjectName = &v
	return s
}

func (s *DeleteQualityFollowerRequest) SetFollowerId(v int64) *DeleteQualityFollowerRequest {
	s.FollowerId = &v
	return s
}

type DeleteQualityFollowerResponse struct {
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteQualityFollowerResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteQualityFollowerResponse) GoString() string {
	return s.String()
}

func (s *DeleteQualityFollowerResponse) SetErrorCode(v string) *DeleteQualityFollowerResponse {
	s.ErrorCode = &v
	return s
}

func (s *DeleteQualityFollowerResponse) SetData(v bool) *DeleteQualityFollowerResponse {
	s.Data = &v
	return s
}

func (s *DeleteQualityFollowerResponse) SetSuccess(v bool) *DeleteQualityFollowerResponse {
	s.Success = &v
	return s
}

func (s *DeleteQualityFollowerResponse) SetErrorMessage(v string) *DeleteQualityFollowerResponse {
	s.ErrorMessage = &v
	return s
}

func (s *DeleteQualityFollowerResponse) SetHttpStatusCode(v int) *DeleteQualityFollowerResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *DeleteQualityFollowerResponse) SetRequestId(v string) *DeleteQualityFollowerResponse {
	s.RequestId = &v
	return s
}

type CreateQualityEntityRequest struct {
	ProjectName     *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	TableName       *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	EnvType         *string `json:"EnvType,omitempty" xml:"EnvType,omitempty" require:"true"`
	MatchExpression *string `json:"MatchExpression,omitempty" xml:"MatchExpression,omitempty" require:"true"`
	EntityLevel     *int    `json:"EntityLevel,omitempty" xml:"EntityLevel,omitempty" require:"true"`
}

func (s CreateQualityEntityRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateQualityEntityRequest) GoString() string {
	return s.String()
}

func (s *CreateQualityEntityRequest) SetProjectName(v string) *CreateQualityEntityRequest {
	s.ProjectName = &v
	return s
}

func (s *CreateQualityEntityRequest) SetTableName(v string) *CreateQualityEntityRequest {
	s.TableName = &v
	return s
}

func (s *CreateQualityEntityRequest) SetEnvType(v string) *CreateQualityEntityRequest {
	s.EnvType = &v
	return s
}

func (s *CreateQualityEntityRequest) SetMatchExpression(v string) *CreateQualityEntityRequest {
	s.MatchExpression = &v
	return s
}

func (s *CreateQualityEntityRequest) SetEntityLevel(v int) *CreateQualityEntityRequest {
	s.EntityLevel = &v
	return s
}

type CreateQualityEntityResponse struct {
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data           *int    `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CreateQualityEntityResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateQualityEntityResponse) GoString() string {
	return s.String()
}

func (s *CreateQualityEntityResponse) SetSuccess(v bool) *CreateQualityEntityResponse {
	s.Success = &v
	return s
}

func (s *CreateQualityEntityResponse) SetData(v int) *CreateQualityEntityResponse {
	s.Data = &v
	return s
}

func (s *CreateQualityEntityResponse) SetErrorCode(v string) *CreateQualityEntityResponse {
	s.ErrorCode = &v
	return s
}

func (s *CreateQualityEntityResponse) SetErrorMessage(v string) *CreateQualityEntityResponse {
	s.ErrorMessage = &v
	return s
}

func (s *CreateQualityEntityResponse) SetHttpStatusCode(v int) *CreateQualityEntityResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *CreateQualityEntityResponse) SetRequestId(v string) *CreateQualityEntityResponse {
	s.RequestId = &v
	return s
}

type CreateQualityRuleRequest struct {
	BlockType         *int    `json:"BlockType,omitempty" xml:"BlockType,omitempty" require:"true"`
	EntityId          *int64  `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
	Comment           *string `json:"Comment,omitempty" xml:"Comment,omitempty"`
	Checker           *int    `json:"Checker,omitempty" xml:"Checker,omitempty"`
	ExpectValue       *string `json:"ExpectValue,omitempty" xml:"ExpectValue,omitempty"`
	Trend             *string `json:"Trend,omitempty" xml:"Trend,omitempty"`
	MethodName        *string `json:"MethodName,omitempty" xml:"MethodName,omitempty"`
	Operator          *string `json:"Operator,omitempty" xml:"Operator,omitempty"`
	ProjectName       *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	Property          *string `json:"Property,omitempty" xml:"Property,omitempty"`
	PropertyType      *string `json:"PropertyType,omitempty" xml:"PropertyType,omitempty"`
	RuleType          *int    `json:"RuleType,omitempty" xml:"RuleType,omitempty" require:"true"`
	WhereCondition    *string `json:"WhereCondition,omitempty" xml:"WhereCondition,omitempty"`
	CriticalThreshold *string `json:"CriticalThreshold,omitempty" xml:"CriticalThreshold,omitempty"`
	WarningThreshold  *string `json:"WarningThreshold,omitempty" xml:"WarningThreshold,omitempty"`
	TemplateId        *int    `json:"TemplateId,omitempty" xml:"TemplateId,omitempty"`
	RuleName          *string `json:"RuleName,omitempty" xml:"RuleName,omitempty" require:"true"`
	PredictType       *int    `json:"PredictType,omitempty" xml:"PredictType,omitempty" require:"true"`
}

func (s CreateQualityRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateQualityRuleRequest) GoString() string {
	return s.String()
}

func (s *CreateQualityRuleRequest) SetBlockType(v int) *CreateQualityRuleRequest {
	s.BlockType = &v
	return s
}

func (s *CreateQualityRuleRequest) SetEntityId(v int64) *CreateQualityRuleRequest {
	s.EntityId = &v
	return s
}

func (s *CreateQualityRuleRequest) SetComment(v string) *CreateQualityRuleRequest {
	s.Comment = &v
	return s
}

func (s *CreateQualityRuleRequest) SetChecker(v int) *CreateQualityRuleRequest {
	s.Checker = &v
	return s
}

func (s *CreateQualityRuleRequest) SetExpectValue(v string) *CreateQualityRuleRequest {
	s.ExpectValue = &v
	return s
}

func (s *CreateQualityRuleRequest) SetTrend(v string) *CreateQualityRuleRequest {
	s.Trend = &v
	return s
}

func (s *CreateQualityRuleRequest) SetMethodName(v string) *CreateQualityRuleRequest {
	s.MethodName = &v
	return s
}

func (s *CreateQualityRuleRequest) SetOperator(v string) *CreateQualityRuleRequest {
	s.Operator = &v
	return s
}

func (s *CreateQualityRuleRequest) SetProjectName(v string) *CreateQualityRuleRequest {
	s.ProjectName = &v
	return s
}

func (s *CreateQualityRuleRequest) SetProperty(v string) *CreateQualityRuleRequest {
	s.Property = &v
	return s
}

func (s *CreateQualityRuleRequest) SetPropertyType(v string) *CreateQualityRuleRequest {
	s.PropertyType = &v
	return s
}

func (s *CreateQualityRuleRequest) SetRuleType(v int) *CreateQualityRuleRequest {
	s.RuleType = &v
	return s
}

func (s *CreateQualityRuleRequest) SetWhereCondition(v string) *CreateQualityRuleRequest {
	s.WhereCondition = &v
	return s
}

func (s *CreateQualityRuleRequest) SetCriticalThreshold(v string) *CreateQualityRuleRequest {
	s.CriticalThreshold = &v
	return s
}

func (s *CreateQualityRuleRequest) SetWarningThreshold(v string) *CreateQualityRuleRequest {
	s.WarningThreshold = &v
	return s
}

func (s *CreateQualityRuleRequest) SetTemplateId(v int) *CreateQualityRuleRequest {
	s.TemplateId = &v
	return s
}

func (s *CreateQualityRuleRequest) SetRuleName(v string) *CreateQualityRuleRequest {
	s.RuleName = &v
	return s
}

func (s *CreateQualityRuleRequest) SetPredictType(v int) *CreateQualityRuleRequest {
	s.PredictType = &v
	return s
}

type CreateQualityRuleResponse struct {
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	Data           *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CreateQualityRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateQualityRuleResponse) GoString() string {
	return s.String()
}

func (s *CreateQualityRuleResponse) SetErrorCode(v string) *CreateQualityRuleResponse {
	s.ErrorCode = &v
	return s
}

func (s *CreateQualityRuleResponse) SetData(v string) *CreateQualityRuleResponse {
	s.Data = &v
	return s
}

func (s *CreateQualityRuleResponse) SetSuccess(v bool) *CreateQualityRuleResponse {
	s.Success = &v
	return s
}

func (s *CreateQualityRuleResponse) SetErrorMessage(v string) *CreateQualityRuleResponse {
	s.ErrorMessage = &v
	return s
}

func (s *CreateQualityRuleResponse) SetHttpStatusCode(v int) *CreateQualityRuleResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *CreateQualityRuleResponse) SetRequestId(v string) *CreateQualityRuleResponse {
	s.RequestId = &v
	return s
}

type UpdateQualityFollowerRequest struct {
	ProjectName *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	FollowerId  *int64  `json:"FollowerId,omitempty" xml:"FollowerId,omitempty" require:"true"`
	Follower    *string `json:"Follower,omitempty" xml:"Follower,omitempty" require:"true"`
	AlarmMode   *int    `json:"AlarmMode,omitempty" xml:"AlarmMode,omitempty" require:"true"`
}

func (s UpdateQualityFollowerRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateQualityFollowerRequest) GoString() string {
	return s.String()
}

func (s *UpdateQualityFollowerRequest) SetProjectName(v string) *UpdateQualityFollowerRequest {
	s.ProjectName = &v
	return s
}

func (s *UpdateQualityFollowerRequest) SetFollowerId(v int64) *UpdateQualityFollowerRequest {
	s.FollowerId = &v
	return s
}

func (s *UpdateQualityFollowerRequest) SetFollower(v string) *UpdateQualityFollowerRequest {
	s.Follower = &v
	return s
}

func (s *UpdateQualityFollowerRequest) SetAlarmMode(v int) *UpdateQualityFollowerRequest {
	s.AlarmMode = &v
	return s
}

type UpdateQualityFollowerResponse struct {
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateQualityFollowerResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateQualityFollowerResponse) GoString() string {
	return s.String()
}

func (s *UpdateQualityFollowerResponse) SetErrorCode(v string) *UpdateQualityFollowerResponse {
	s.ErrorCode = &v
	return s
}

func (s *UpdateQualityFollowerResponse) SetData(v bool) *UpdateQualityFollowerResponse {
	s.Data = &v
	return s
}

func (s *UpdateQualityFollowerResponse) SetSuccess(v bool) *UpdateQualityFollowerResponse {
	s.Success = &v
	return s
}

func (s *UpdateQualityFollowerResponse) SetErrorMessage(v string) *UpdateQualityFollowerResponse {
	s.ErrorMessage = &v
	return s
}

func (s *UpdateQualityFollowerResponse) SetHttpStatusCode(v int) *UpdateQualityFollowerResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *UpdateQualityFollowerResponse) SetRequestId(v string) *UpdateQualityFollowerResponse {
	s.RequestId = &v
	return s
}

type CreateQualityRelativeNodeRequest struct {
	EnvType               *string `json:"EnvType,omitempty" xml:"EnvType,omitempty" require:"true"`
	MatchExpression       *string `json:"MatchExpression,omitempty" xml:"MatchExpression,omitempty" require:"true"`
	NodeId                *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	ProjectId             *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	TargetNodeProjectName *string `json:"TargetNodeProjectName,omitempty" xml:"TargetNodeProjectName,omitempty" require:"true"`
	ProjectName           *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	TableName             *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	TargetNodeProjectId   *int64  `json:"TargetNodeProjectId,omitempty" xml:"TargetNodeProjectId,omitempty" require:"true"`
}

func (s CreateQualityRelativeNodeRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateQualityRelativeNodeRequest) GoString() string {
	return s.String()
}

func (s *CreateQualityRelativeNodeRequest) SetEnvType(v string) *CreateQualityRelativeNodeRequest {
	s.EnvType = &v
	return s
}

func (s *CreateQualityRelativeNodeRequest) SetMatchExpression(v string) *CreateQualityRelativeNodeRequest {
	s.MatchExpression = &v
	return s
}

func (s *CreateQualityRelativeNodeRequest) SetNodeId(v int64) *CreateQualityRelativeNodeRequest {
	s.NodeId = &v
	return s
}

func (s *CreateQualityRelativeNodeRequest) SetProjectId(v int64) *CreateQualityRelativeNodeRequest {
	s.ProjectId = &v
	return s
}

func (s *CreateQualityRelativeNodeRequest) SetTargetNodeProjectName(v string) *CreateQualityRelativeNodeRequest {
	s.TargetNodeProjectName = &v
	return s
}

func (s *CreateQualityRelativeNodeRequest) SetProjectName(v string) *CreateQualityRelativeNodeRequest {
	s.ProjectName = &v
	return s
}

func (s *CreateQualityRelativeNodeRequest) SetTableName(v string) *CreateQualityRelativeNodeRequest {
	s.TableName = &v
	return s
}

func (s *CreateQualityRelativeNodeRequest) SetTargetNodeProjectId(v int64) *CreateQualityRelativeNodeRequest {
	s.TargetNodeProjectId = &v
	return s
}

type CreateQualityRelativeNodeResponse struct {
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CreateQualityRelativeNodeResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateQualityRelativeNodeResponse) GoString() string {
	return s.String()
}

func (s *CreateQualityRelativeNodeResponse) SetSuccess(v bool) *CreateQualityRelativeNodeResponse {
	s.Success = &v
	return s
}

func (s *CreateQualityRelativeNodeResponse) SetErrorCode(v string) *CreateQualityRelativeNodeResponse {
	s.ErrorCode = &v
	return s
}

func (s *CreateQualityRelativeNodeResponse) SetErrorMessage(v string) *CreateQualityRelativeNodeResponse {
	s.ErrorMessage = &v
	return s
}

func (s *CreateQualityRelativeNodeResponse) SetHttpStatusCode(v int) *CreateQualityRelativeNodeResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *CreateQualityRelativeNodeResponse) SetData(v bool) *CreateQualityRelativeNodeResponse {
	s.Data = &v
	return s
}

func (s *CreateQualityRelativeNodeResponse) SetRequestId(v string) *CreateQualityRelativeNodeResponse {
	s.RequestId = &v
	return s
}

type DeleteQualityRelativeNodeRequest struct {
	EnvType               *string `json:"EnvType,omitempty" xml:"EnvType,omitempty" require:"true"`
	MatchExpression       *string `json:"MatchExpression,omitempty" xml:"MatchExpression,omitempty" require:"true"`
	NodeId                *int64  `json:"NodeId,omitempty" xml:"NodeId,omitempty" require:"true"`
	ProjectId             *int64  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	TargetNodeProjectName *string `json:"TargetNodeProjectName,omitempty" xml:"TargetNodeProjectName,omitempty" require:"true"`
	ProjectName           *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	TableName             *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	TargetNodeProjectId   *int64  `json:"TargetNodeProjectId,omitempty" xml:"TargetNodeProjectId,omitempty" require:"true"`
}

func (s DeleteQualityRelativeNodeRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteQualityRelativeNodeRequest) GoString() string {
	return s.String()
}

func (s *DeleteQualityRelativeNodeRequest) SetEnvType(v string) *DeleteQualityRelativeNodeRequest {
	s.EnvType = &v
	return s
}

func (s *DeleteQualityRelativeNodeRequest) SetMatchExpression(v string) *DeleteQualityRelativeNodeRequest {
	s.MatchExpression = &v
	return s
}

func (s *DeleteQualityRelativeNodeRequest) SetNodeId(v int64) *DeleteQualityRelativeNodeRequest {
	s.NodeId = &v
	return s
}

func (s *DeleteQualityRelativeNodeRequest) SetProjectId(v int64) *DeleteQualityRelativeNodeRequest {
	s.ProjectId = &v
	return s
}

func (s *DeleteQualityRelativeNodeRequest) SetTargetNodeProjectName(v string) *DeleteQualityRelativeNodeRequest {
	s.TargetNodeProjectName = &v
	return s
}

func (s *DeleteQualityRelativeNodeRequest) SetProjectName(v string) *DeleteQualityRelativeNodeRequest {
	s.ProjectName = &v
	return s
}

func (s *DeleteQualityRelativeNodeRequest) SetTableName(v string) *DeleteQualityRelativeNodeRequest {
	s.TableName = &v
	return s
}

func (s *DeleteQualityRelativeNodeRequest) SetTargetNodeProjectId(v int64) *DeleteQualityRelativeNodeRequest {
	s.TargetNodeProjectId = &v
	return s
}

type DeleteQualityRelativeNodeResponse struct {
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrorCode      *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage   *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	HttpStatusCode *int    `json:"HttpStatusCode,omitempty" xml:"HttpStatusCode,omitempty" require:"true"`
	Data           *bool   `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteQualityRelativeNodeResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteQualityRelativeNodeResponse) GoString() string {
	return s.String()
}

func (s *DeleteQualityRelativeNodeResponse) SetSuccess(v bool) *DeleteQualityRelativeNodeResponse {
	s.Success = &v
	return s
}

func (s *DeleteQualityRelativeNodeResponse) SetErrorCode(v string) *DeleteQualityRelativeNodeResponse {
	s.ErrorCode = &v
	return s
}

func (s *DeleteQualityRelativeNodeResponse) SetErrorMessage(v string) *DeleteQualityRelativeNodeResponse {
	s.ErrorMessage = &v
	return s
}

func (s *DeleteQualityRelativeNodeResponse) SetHttpStatusCode(v int) *DeleteQualityRelativeNodeResponse {
	s.HttpStatusCode = &v
	return s
}

func (s *DeleteQualityRelativeNodeResponse) SetData(v bool) *DeleteQualityRelativeNodeResponse {
	s.Data = &v
	return s
}

func (s *DeleteQualityRelativeNodeResponse) SetRequestId(v string) *DeleteQualityRelativeNodeResponse {
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
	client.EndpointRule = tea.String("regional")
	client.EndpointMap = map[string]*string{
		"ap-northeast-1":        tea.String("dataworks.ap-northeast-1.aliyuncs.com"),
		"ap-south-1":            tea.String("dataworks.ap-south-1.aliyuncs.com"),
		"ap-southeast-1":        tea.String("dataworks.ap-southeast-1.aliyuncs.com"),
		"ap-southeast-2":        tea.String("dataworks.ap-southeast-2.aliyuncs.com"),
		"ap-southeast-3":        tea.String("dataworks.ap-southeast-3.aliyuncs.com"),
		"ap-southeast-5":        tea.String("dataworks.ap-southeast-5.aliyuncs.com"),
		"cn-beijing":            tea.String("dataworks.cn-beijing.aliyuncs.com"),
		"cn-chengdu":            tea.String("dataworks.cn-chengdu.aliyuncs.com"),
		"cn-hangzhou":           tea.String("dataworks.cn-hangzhou.aliyuncs.com"),
		"cn-hongkong":           tea.String("dataworks.cn-hongkong.aliyuncs.com"),
		"cn-huhehaote":          tea.String("dataworks.aliyuncs.com"),
		"cn-qingdao":            tea.String("dataworks.aliyuncs.com"),
		"cn-shanghai":           tea.String("dataworks.cn-shanghai.aliyuncs.com"),
		"cn-shenzhen":           tea.String("dataworks.cn-shenzhen.aliyuncs.com"),
		"cn-zhangjiakou":        tea.String("dataworks.aliyuncs.com"),
		"eu-central-1":          tea.String("dataworks.eu-central-1.aliyuncs.com"),
		"eu-west-1":             tea.String("dataworks.eu-west-1.aliyuncs.com"),
		"me-east-1":             tea.String("dataworks.me-east-1.aliyuncs.com"),
		"us-east-1":             tea.String("dataworks.us-east-1.aliyuncs.com"),
		"us-west-1":             tea.String("dataworks.us-west-1.aliyuncs.com"),
		"cn-hangzhou-finance":   tea.String("dataworks.aliyuncs.com"),
		"cn-shenzhen-finance-1": tea.String("dataworks.aliyuncs.com"),
		"cn-shanghai-finance-1": tea.String("dataworks.aliyuncs.com"),
		"cn-north-2-gov-1":      tea.String("dataworks.aliyuncs.com"),
	}
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("dataworks-public"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) CreateDagComplementWithOptions(request *CreateDagComplementRequest, runtime *util.RuntimeOptions) (_result *CreateDagComplementResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateDagComplementResponse{}
	_body, _err := client.DoRequest(tea.String("CreateDagComplement"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateDagComplement(request *CreateDagComplementRequest) (_result *CreateDagComplementResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateDagComplementResponse{}
	_body, _err := client.CreateDagComplementWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateDagTestWithOptions(request *CreateDagTestRequest, runtime *util.RuntimeOptions) (_result *CreateDagTestResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateDagTestResponse{}
	_body, _err := client.DoRequest(tea.String("CreateDagTest"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateDagTest(request *CreateDagTestRequest) (_result *CreateDagTestResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateDagTestResponse{}
	_body, _err := client.CreateDagTestWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListCalcEnginesWithOptions(request *ListCalcEnginesRequest, runtime *util.RuntimeOptions) (_result *ListCalcEnginesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListCalcEnginesResponse{}
	_body, _err := client.DoRequest(tea.String("ListCalcEngines"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListCalcEngines(request *ListCalcEnginesRequest) (_result *ListCalcEnginesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListCalcEnginesResponse{}
	_body, _err := client.ListCalcEnginesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListConnectionsWithOptions(request *ListConnectionsRequest, runtime *util.RuntimeOptions) (_result *ListConnectionsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListConnectionsResponse{}
	_body, _err := client.DoRequest(tea.String("ListConnections"), tea.String("HTTPS"), tea.String("GET"), tea.String("2020-05-18"), tea.String("AK"), tea.ToMap(request), nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListConnections(request *ListConnectionsRequest) (_result *ListConnectionsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListConnectionsResponse{}
	_body, _err := client.ListConnectionsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateConnectionWithOptions(request *UpdateConnectionRequest, runtime *util.RuntimeOptions) (_result *UpdateConnectionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateConnectionResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateConnection"), tea.String("HTTPS"), tea.String("PUT"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateConnection(request *UpdateConnectionRequest) (_result *UpdateConnectionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateConnectionResponse{}
	_body, _err := client.UpdateConnectionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteConnectionWithOptions(request *DeleteConnectionRequest, runtime *util.RuntimeOptions) (_result *DeleteConnectionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteConnectionResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteConnection"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteConnection(request *DeleteConnectionRequest) (_result *DeleteConnectionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteConnectionResponse{}
	_body, _err := client.DeleteConnectionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetProjectDetailWithOptions(request *GetProjectDetailRequest, runtime *util.RuntimeOptions) (_result *GetProjectDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetProjectDetailResponse{}
	_body, _err := client.DoRequest(tea.String("GetProjectDetail"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetProjectDetail(request *GetProjectDetailRequest) (_result *GetProjectDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetProjectDetailResponse{}
	_body, _err := client.GetProjectDetailWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListResourceGroupsWithOptions(request *ListResourceGroupsRequest, runtime *util.RuntimeOptions) (_result *ListResourceGroupsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListResourceGroupsResponse{}
	_body, _err := client.DoRequest(tea.String("ListResourceGroups"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListResourceGroups(request *ListResourceGroupsRequest) (_result *ListResourceGroupsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListResourceGroupsResponse{}
	_body, _err := client.ListResourceGroupsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateConnectionWithOptions(request *CreateConnectionRequest, runtime *util.RuntimeOptions) (_result *CreateConnectionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateConnectionResponse{}
	_body, _err := client.DoRequest(tea.String("CreateConnection"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateConnection(request *CreateConnectionRequest) (_result *CreateConnectionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateConnectionResponse{}
	_body, _err := client.CreateConnectionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetDataServiceApplicationWithOptions(request *GetDataServiceApplicationRequest, runtime *util.RuntimeOptions) (_result *GetDataServiceApplicationResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetDataServiceApplicationResponse{}
	_body, _err := client.DoRequest(tea.String("GetDataServiceApplication"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetDataServiceApplication(request *GetDataServiceApplicationRequest) (_result *GetDataServiceApplicationResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetDataServiceApplicationResponse{}
	_body, _err := client.GetDataServiceApplicationWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListDataServiceApplicationsWithOptions(request *ListDataServiceApplicationsRequest, runtime *util.RuntimeOptions) (_result *ListDataServiceApplicationsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListDataServiceApplicationsResponse{}
	_body, _err := client.DoRequest(tea.String("ListDataServiceApplications"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListDataServiceApplications(request *ListDataServiceApplicationsRequest) (_result *ListDataServiceApplicationsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListDataServiceApplicationsResponse{}
	_body, _err := client.ListDataServiceApplicationsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetNodeOnBaselineWithOptions(request *GetNodeOnBaselineRequest, runtime *util.RuntimeOptions) (_result *GetNodeOnBaselineResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetNodeOnBaselineResponse{}
	_body, _err := client.DoRequest(tea.String("GetNodeOnBaseline"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetNodeOnBaseline(request *GetNodeOnBaselineRequest) (_result *GetNodeOnBaselineResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetNodeOnBaselineResponse{}
	_body, _err := client.GetNodeOnBaselineWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListBaselineConfigsWithOptions(request *ListBaselineConfigsRequest, runtime *util.RuntimeOptions) (_result *ListBaselineConfigsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListBaselineConfigsResponse{}
	_body, _err := client.DoRequest(tea.String("ListBaselineConfigs"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListBaselineConfigs(request *ListBaselineConfigsRequest) (_result *ListBaselineConfigsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListBaselineConfigsResponse{}
	_body, _err := client.ListBaselineConfigsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMetaTableChangeLogWithOptions(request *GetMetaTableChangeLogRequest, runtime *util.RuntimeOptions) (_result *GetMetaTableChangeLogResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMetaTableChangeLogResponse{}
	_body, _err := client.DoRequest(tea.String("GetMetaTableChangeLog"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMetaTableChangeLog(request *GetMetaTableChangeLogRequest) (_result *GetMetaTableChangeLogResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMetaTableChangeLogResponse{}
	_body, _err := client.GetMetaTableChangeLogWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMetaTableOutputWithOptions(request *GetMetaTableOutputRequest, runtime *util.RuntimeOptions) (_result *GetMetaTableOutputResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMetaTableOutputResponse{}
	_body, _err := client.DoRequest(tea.String("GetMetaTableOutput"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMetaTableOutput(request *GetMetaTableOutputRequest) (_result *GetMetaTableOutputResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMetaTableOutputResponse{}
	_body, _err := client.GetMetaTableOutputWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMetaTablePartitionWithOptions(request *GetMetaTablePartitionRequest, runtime *util.RuntimeOptions) (_result *GetMetaTablePartitionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMetaTablePartitionResponse{}
	_body, _err := client.DoRequest(tea.String("GetMetaTablePartition"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMetaTablePartition(request *GetMetaTablePartitionRequest) (_result *GetMetaTablePartitionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMetaTablePartitionResponse{}
	_body, _err := client.GetMetaTablePartitionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMetaTableFullInfoWithOptions(request *GetMetaTableFullInfoRequest, runtime *util.RuntimeOptions) (_result *GetMetaTableFullInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMetaTableFullInfoResponse{}
	_body, _err := client.DoRequest(tea.String("GetMetaTableFullInfo"), tea.String("HTTPS"), tea.String("GET"), tea.String("2020-05-18"), tea.String("AK"), tea.ToMap(request), nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMetaTableFullInfo(request *GetMetaTableFullInfoRequest) (_result *GetMetaTableFullInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMetaTableFullInfoResponse{}
	_body, _err := client.GetMetaTableFullInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetFileVersionWithOptions(request *GetFileVersionRequest, runtime *util.RuntimeOptions) (_result *GetFileVersionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetFileVersionResponse{}
	_body, _err := client.DoRequest(tea.String("GetFileVersion"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetFileVersion(request *GetFileVersionRequest) (_result *GetFileVersionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetFileVersionResponse{}
	_body, _err := client.GetFileVersionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMetaTableBasicInfoWithOptions(request *GetMetaTableBasicInfoRequest, runtime *util.RuntimeOptions) (_result *GetMetaTableBasicInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMetaTableBasicInfoResponse{}
	_body, _err := client.DoRequest(tea.String("GetMetaTableBasicInfo"), tea.String("HTTPS"), tea.String("GET"), tea.String("2020-05-18"), tea.String("AK"), tea.ToMap(request), nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMetaTableBasicInfo(request *GetMetaTableBasicInfoRequest) (_result *GetMetaTableBasicInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMetaTableBasicInfoResponse{}
	_body, _err := client.GetMetaTableBasicInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMetaTableColumnWithOptions(request *GetMetaTableColumnRequest, runtime *util.RuntimeOptions) (_result *GetMetaTableColumnResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMetaTableColumnResponse{}
	_body, _err := client.DoRequest(tea.String("GetMetaTableColumn"), tea.String("HTTPS"), tea.String("GET"), tea.String("2020-05-18"), tea.String("AK"), tea.ToMap(request), nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMetaTableColumn(request *GetMetaTableColumnRequest) (_result *GetMetaTableColumnResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMetaTableColumnResponse{}
	_body, _err := client.GetMetaTableColumnWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMetaDBInfoWithOptions(request *GetMetaDBInfoRequest, runtime *util.RuntimeOptions) (_result *GetMetaDBInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMetaDBInfoResponse{}
	_body, _err := client.DoRequest(tea.String("GetMetaDBInfo"), tea.String("HTTPS"), tea.String("GET"), tea.String("2020-05-18"), tea.String("AK"), tea.ToMap(request), nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMetaDBInfo(request *GetMetaDBInfoRequest) (_result *GetMetaDBInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMetaDBInfoResponse{}
	_body, _err := client.GetMetaDBInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMetaCategoryWithOptions(request *GetMetaCategoryRequest, runtime *util.RuntimeOptions) (_result *GetMetaCategoryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMetaCategoryResponse{}
	_body, _err := client.DoRequest(tea.String("GetMetaCategory"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMetaCategory(request *GetMetaCategoryRequest) (_result *GetMetaCategoryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMetaCategoryResponse{}
	_body, _err := client.GetMetaCategoryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListAlertMessagesWithOptions(request *ListAlertMessagesRequest, runtime *util.RuntimeOptions) (_result *ListAlertMessagesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListAlertMessagesResponse{}
	_body, _err := client.DoRequest(tea.String("ListAlertMessages"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListAlertMessages(request *ListAlertMessagesRequest) (_result *ListAlertMessagesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListAlertMessagesResponse{}
	_body, _err := client.ListAlertMessagesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetBaselineConfigWithOptions(request *GetBaselineConfigRequest, runtime *util.RuntimeOptions) (_result *GetBaselineConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetBaselineConfigResponse{}
	_body, _err := client.DoRequest(tea.String("GetBaselineConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetBaselineConfig(request *GetBaselineConfigRequest) (_result *GetBaselineConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetBaselineConfigResponse{}
	_body, _err := client.GetBaselineConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchMetaTablesWithOptions(request *SearchMetaTablesRequest, runtime *util.RuntimeOptions) (_result *SearchMetaTablesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchMetaTablesResponse{}
	_body, _err := client.DoRequest(tea.String("SearchMetaTables"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchMetaTables(request *SearchMetaTablesRequest) (_result *SearchMetaTablesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchMetaTablesResponse{}
	_body, _err := client.SearchMetaTablesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMetaTableListByCategoryWithOptions(request *GetMetaTableListByCategoryRequest, runtime *util.RuntimeOptions) (_result *GetMetaTableListByCategoryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMetaTableListByCategoryResponse{}
	_body, _err := client.DoRequest(tea.String("GetMetaTableListByCategory"), tea.String("HTTPS"), tea.String("GET"), tea.String("2020-05-18"), tea.String("AK"), tea.ToMap(request), nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMetaTableListByCategory(request *GetMetaTableListByCategoryRequest) (_result *GetMetaTableListByCategoryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMetaTableListByCategoryResponse{}
	_body, _err := client.GetMetaTableListByCategoryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteMetaCategoryWithOptions(request *DeleteMetaCategoryRequest, runtime *util.RuntimeOptions) (_result *DeleteMetaCategoryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteMetaCategoryResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteMetaCategory"), tea.String("HTTPS"), tea.String("GET"), tea.String("2020-05-18"), tea.String("AK"), tea.ToMap(request), nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteMetaCategory(request *DeleteMetaCategoryRequest) (_result *DeleteMetaCategoryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteMetaCategoryResponse{}
	_body, _err := client.DeleteMetaCategoryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateMetaCategoryWithOptions(request *UpdateMetaCategoryRequest, runtime *util.RuntimeOptions) (_result *UpdateMetaCategoryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateMetaCategoryResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateMetaCategory"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateMetaCategory(request *UpdateMetaCategoryRequest) (_result *UpdateMetaCategoryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateMetaCategoryResponse{}
	_body, _err := client.UpdateMetaCategoryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListTopicsWithOptions(request *ListTopicsRequest, runtime *util.RuntimeOptions) (_result *ListTopicsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListTopicsResponse{}
	_body, _err := client.DoRequest(tea.String("ListTopics"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListTopics(request *ListTopicsRequest) (_result *ListTopicsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListTopicsResponse{}
	_body, _err := client.ListTopicsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListFileVersionsWithOptions(request *ListFileVersionsRequest, runtime *util.RuntimeOptions) (_result *ListFileVersionsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListFileVersionsResponse{}
	_body, _err := client.DoRequest(tea.String("ListFileVersions"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListFileVersions(request *ListFileVersionsRequest) (_result *ListFileVersionsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListFileVersionsResponse{}
	_body, _err := client.ListFileVersionsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateMetaCategoryWithOptions(request *CreateMetaCategoryRequest, runtime *util.RuntimeOptions) (_result *CreateMetaCategoryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateMetaCategoryResponse{}
	_body, _err := client.DoRequest(tea.String("CreateMetaCategory"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateMetaCategory(request *CreateMetaCategoryRequest) (_result *CreateMetaCategoryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateMetaCategoryResponse{}
	_body, _err := client.CreateMetaCategoryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListNodeIOWithOptions(request *ListNodeIORequest, runtime *util.RuntimeOptions) (_result *ListNodeIOResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListNodeIOResponse{}
	_body, _err := client.DoRequest(tea.String("ListNodeIO"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListNodeIO(request *ListNodeIORequest) (_result *ListNodeIOResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListNodeIOResponse{}
	_body, _err := client.ListNodeIOWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetTopicInfluenceWithOptions(request *GetTopicInfluenceRequest, runtime *util.RuntimeOptions) (_result *GetTopicInfluenceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetTopicInfluenceResponse{}
	_body, _err := client.DoRequest(tea.String("GetTopicInfluence"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetTopicInfluence(request *GetTopicInfluenceRequest) (_result *GetTopicInfluenceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetTopicInfluenceResponse{}
	_body, _err := client.GetTopicInfluenceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetTopicWithOptions(request *GetTopicRequest, runtime *util.RuntimeOptions) (_result *GetTopicResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetTopicResponse{}
	_body, _err := client.DoRequest(tea.String("GetTopic"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetTopic(request *GetTopicRequest) (_result *GetTopicResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetTopicResponse{}
	_body, _err := client.GetTopicWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteFromMetaCategoryWithOptions(request *DeleteFromMetaCategoryRequest, runtime *util.RuntimeOptions) (_result *DeleteFromMetaCategoryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteFromMetaCategoryResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteFromMetaCategory"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteFromMetaCategory(request *DeleteFromMetaCategoryRequest) (_result *DeleteFromMetaCategoryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteFromMetaCategoryResponse{}
	_body, _err := client.DeleteFromMetaCategoryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetNodeWithOptions(request *GetNodeRequest, runtime *util.RuntimeOptions) (_result *GetNodeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetNodeResponse{}
	_body, _err := client.DoRequest(tea.String("GetNode"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetNode(request *GetNodeRequest) (_result *GetNodeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetNodeResponse{}
	_body, _err := client.GetNodeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListNodesWithOptions(request *ListNodesRequest, runtime *util.RuntimeOptions) (_result *ListNodesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListNodesResponse{}
	_body, _err := client.DoRequest(tea.String("ListNodes"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListNodes(request *ListNodesRequest) (_result *ListNodesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListNodesResponse{}
	_body, _err := client.ListNodesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetNodeCodeWithOptions(request *GetNodeCodeRequest, runtime *util.RuntimeOptions) (_result *GetNodeCodeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetNodeCodeResponse{}
	_body, _err := client.DoRequest(tea.String("GetNodeCode"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetNodeCode(request *GetNodeCodeRequest) (_result *GetNodeCodeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetNodeCodeResponse{}
	_body, _err := client.GetNodeCodeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) EstablishRelationTableToBusinessWithOptions(request *EstablishRelationTableToBusinessRequest, runtime *util.RuntimeOptions) (_result *EstablishRelationTableToBusinessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &EstablishRelationTableToBusinessResponse{}
	_body, _err := client.DoRequest(tea.String("EstablishRelationTableToBusiness"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) EstablishRelationTableToBusiness(request *EstablishRelationTableToBusinessRequest) (_result *EstablishRelationTableToBusinessResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &EstablishRelationTableToBusinessResponse{}
	_body, _err := client.EstablishRelationTableToBusinessWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateDataServiceApiWithOptions(request *UpdateDataServiceApiRequest, runtime *util.RuntimeOptions) (_result *UpdateDataServiceApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateDataServiceApiResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateDataServiceApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateDataServiceApi(request *UpdateDataServiceApiRequest) (_result *UpdateDataServiceApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateDataServiceApiResponse{}
	_body, _err := client.UpdateDataServiceApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateUdfFileWithOptions(request *UpdateUdfFileRequest, runtime *util.RuntimeOptions) (_result *UpdateUdfFileResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateUdfFileResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateUdfFile"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateUdfFile(request *UpdateUdfFileRequest) (_result *UpdateUdfFileResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateUdfFileResponse{}
	_body, _err := client.UpdateUdfFileWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateUdfFileWithOptions(request *CreateUdfFileRequest, runtime *util.RuntimeOptions) (_result *CreateUdfFileResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateUdfFileResponse{}
	_body, _err := client.DoRequest(tea.String("CreateUdfFile"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateUdfFile(request *CreateUdfFileRequest) (_result *CreateUdfFileResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateUdfFileResponse{}
	_body, _err := client.CreateUdfFileWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListFilesWithOptions(request *ListFilesRequest, runtime *util.RuntimeOptions) (_result *ListFilesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListFilesResponse{}
	_body, _err := client.DoRequest(tea.String("ListFiles"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListFiles(request *ListFilesRequest) (_result *ListFilesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListFilesResponse{}
	_body, _err := client.ListFilesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListDataServiceAuthorizedApisWithOptions(request *ListDataServiceAuthorizedApisRequest, runtime *util.RuntimeOptions) (_result *ListDataServiceAuthorizedApisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListDataServiceAuthorizedApisResponse{}
	_body, _err := client.DoRequest(tea.String("ListDataServiceAuthorizedApis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListDataServiceAuthorizedApis(request *ListDataServiceAuthorizedApisRequest) (_result *ListDataServiceAuthorizedApisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListDataServiceAuthorizedApisResponse{}
	_body, _err := client.ListDataServiceAuthorizedApisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateFileWithOptions(request *UpdateFileRequest, runtime *util.RuntimeOptions) (_result *UpdateFileResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateFileResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateFile"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateFile(request *UpdateFileRequest) (_result *UpdateFileResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateFileResponse{}
	_body, _err := client.UpdateFileWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteFolderWithOptions(request *DeleteFolderRequest, runtime *util.RuntimeOptions) (_result *DeleteFolderResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteFolderResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteFolder"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteFolder(request *DeleteFolderRequest) (_result *DeleteFolderResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteFolderResponse{}
	_body, _err := client.DeleteFolderWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListFoldersWithOptions(request *ListFoldersRequest, runtime *util.RuntimeOptions) (_result *ListFoldersResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListFoldersResponse{}
	_body, _err := client.DoRequest(tea.String("ListFolders"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListFolders(request *ListFoldersRequest) (_result *ListFoldersResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListFoldersResponse{}
	_body, _err := client.ListFoldersWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CheckMetaPartitionWithOptions(request *CheckMetaPartitionRequest, runtime *util.RuntimeOptions) (_result *CheckMetaPartitionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CheckMetaPartitionResponse{}
	_body, _err := client.DoRequest(tea.String("CheckMetaPartition"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CheckMetaPartition(request *CheckMetaPartitionRequest) (_result *CheckMetaPartitionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CheckMetaPartitionResponse{}
	_body, _err := client.CheckMetaPartitionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateFolderWithOptions(request *UpdateFolderRequest, runtime *util.RuntimeOptions) (_result *UpdateFolderResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateFolderResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateFolder"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateFolder(request *UpdateFolderRequest) (_result *UpdateFolderResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateFolderResponse{}
	_body, _err := client.UpdateFolderWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteRemindWithOptions(request *DeleteRemindRequest, runtime *util.RuntimeOptions) (_result *DeleteRemindResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteRemindResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteRemind"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteRemind(request *DeleteRemindRequest) (_result *DeleteRemindResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteRemindResponse{}
	_body, _err := client.DeleteRemindWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddToMetaCategoryWithOptions(request *AddToMetaCategoryRequest, runtime *util.RuntimeOptions) (_result *AddToMetaCategoryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddToMetaCategoryResponse{}
	_body, _err := client.DoRequest(tea.String("AddToMetaCategory"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddToMetaCategory(request *AddToMetaCategoryRequest) (_result *AddToMetaCategoryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddToMetaCategoryResponse{}
	_body, _err := client.AddToMetaCategoryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListInstancesWithOptions(request *ListInstancesRequest, runtime *util.RuntimeOptions) (_result *ListInstancesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListInstancesResponse{}
	_body, _err := client.DoRequest(tea.String("ListInstances"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListInstances(request *ListInstancesRequest) (_result *ListInstancesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListInstancesResponse{}
	_body, _err := client.ListInstancesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetSuccessInstanceWithOptions(request *SetSuccessInstanceRequest, runtime *util.RuntimeOptions) (_result *SetSuccessInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetSuccessInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("SetSuccessInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetSuccessInstance(request *SetSuccessInstanceRequest) (_result *SetSuccessInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetSuccessInstanceResponse{}
	_body, _err := client.SetSuccessInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateFileWithOptions(request *CreateFileRequest, runtime *util.RuntimeOptions) (_result *CreateFileResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateFileResponse{}
	_body, _err := client.DoRequest(tea.String("CreateFile"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateFile(request *CreateFileRequest) (_result *CreateFileResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateFileResponse{}
	_body, _err := client.CreateFileWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) StopInstanceWithOptions(request *StopInstanceRequest, runtime *util.RuntimeOptions) (_result *StopInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &StopInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("StopInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) StopInstance(request *StopInstanceRequest) (_result *StopInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &StopInstanceResponse{}
	_body, _err := client.StopInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ResumeInstanceWithOptions(request *ResumeInstanceRequest, runtime *util.RuntimeOptions) (_result *ResumeInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ResumeInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("ResumeInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ResumeInstance(request *ResumeInstanceRequest) (_result *ResumeInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ResumeInstanceResponse{}
	_body, _err := client.ResumeInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SuspendInstanceWithOptions(request *SuspendInstanceRequest, runtime *util.RuntimeOptions) (_result *SuspendInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SuspendInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("SuspendInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SuspendInstance(request *SuspendInstanceRequest) (_result *SuspendInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SuspendInstanceResponse{}
	_body, _err := client.SuspendInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RestartInstanceWithOptions(request *RestartInstanceRequest, runtime *util.RuntimeOptions) (_result *RestartInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RestartInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("RestartInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RestartInstance(request *RestartInstanceRequest) (_result *RestartInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RestartInstanceResponse{}
	_body, _err := client.RestartInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListDataServiceApiAuthoritiesWithOptions(request *ListDataServiceApiAuthoritiesRequest, runtime *util.RuntimeOptions) (_result *ListDataServiceApiAuthoritiesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListDataServiceApiAuthoritiesResponse{}
	_body, _err := client.DoRequest(tea.String("ListDataServiceApiAuthorities"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListDataServiceApiAuthorities(request *ListDataServiceApiAuthoritiesRequest) (_result *ListDataServiceApiAuthoritiesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListDataServiceApiAuthoritiesResponse{}
	_body, _err := client.ListDataServiceApiAuthoritiesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListDataServicePublishedApisWithOptions(request *ListDataServicePublishedApisRequest, runtime *util.RuntimeOptions) (_result *ListDataServicePublishedApisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListDataServicePublishedApisResponse{}
	_body, _err := client.DoRequest(tea.String("ListDataServicePublishedApis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListDataServicePublishedApis(request *ListDataServicePublishedApisRequest) (_result *ListDataServicePublishedApisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListDataServicePublishedApisResponse{}
	_body, _err := client.ListDataServicePublishedApisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetInstanceLogWithOptions(request *GetInstanceLogRequest, runtime *util.RuntimeOptions) (_result *GetInstanceLogResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetInstanceLogResponse{}
	_body, _err := client.DoRequest(tea.String("GetInstanceLog"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetInstanceLog(request *GetInstanceLogRequest) (_result *GetInstanceLogResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetInstanceLogResponse{}
	_body, _err := client.GetInstanceLogWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateFolderWithOptions(request *CreateFolderRequest, runtime *util.RuntimeOptions) (_result *CreateFolderResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateFolderResponse{}
	_body, _err := client.DoRequest(tea.String("CreateFolder"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateFolder(request *CreateFolderRequest) (_result *CreateFolderResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateFolderResponse{}
	_body, _err := client.CreateFolderWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetBusinessWithOptions(request *GetBusinessRequest, runtime *util.RuntimeOptions) (_result *GetBusinessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetBusinessResponse{}
	_body, _err := client.DoRequest(tea.String("GetBusiness"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetBusiness(request *GetBusinessRequest) (_result *GetBusinessResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetBusinessResponse{}
	_body, _err := client.GetBusinessWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetInstanceWithOptions(request *GetInstanceRequest, runtime *util.RuntimeOptions) (_result *GetInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("GetInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetInstance(request *GetInstanceRequest) (_result *GetInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetInstanceResponse{}
	_body, _err := client.GetInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetFileWithOptions(request *GetFileRequest, runtime *util.RuntimeOptions) (_result *GetFileResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetFileResponse{}
	_body, _err := client.DoRequest(tea.String("GetFile"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetFile(request *GetFileRequest) (_result *GetFileResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetFileResponse{}
	_body, _err := client.GetFileWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListBusinessWithOptions(request *ListBusinessRequest, runtime *util.RuntimeOptions) (_result *ListBusinessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListBusinessResponse{}
	_body, _err := client.DoRequest(tea.String("ListBusiness"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListBusiness(request *ListBusinessRequest) (_result *ListBusinessResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListBusinessResponse{}
	_body, _err := client.ListBusinessWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMetaDBTableListWithOptions(request *GetMetaDBTableListRequest, runtime *util.RuntimeOptions) (_result *GetMetaDBTableListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMetaDBTableListResponse{}
	_body, _err := client.DoRequest(tea.String("GetMetaDBTableList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMetaDBTableList(request *GetMetaDBTableListRequest) (_result *GetMetaDBTableListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMetaDBTableListResponse{}
	_body, _err := client.GetMetaDBTableListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CheckMetaTableWithOptions(request *CheckMetaTableRequest, runtime *util.RuntimeOptions) (_result *CheckMetaTableResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CheckMetaTableResponse{}
	_body, _err := client.DoRequest(tea.String("CheckMetaTable"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CheckMetaTable(request *CheckMetaTableRequest) (_result *CheckMetaTableResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CheckMetaTableResponse{}
	_body, _err := client.CheckMetaTableWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetFolderWithOptions(request *GetFolderRequest, runtime *util.RuntimeOptions) (_result *GetFolderResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetFolderResponse{}
	_body, _err := client.DoRequest(tea.String("GetFolder"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetFolder(request *GetFolderRequest) (_result *GetFolderResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetFolderResponse{}
	_body, _err := client.GetFolderWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeployFileWithOptions(request *DeployFileRequest, runtime *util.RuntimeOptions) (_result *DeployFileResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeployFileResponse{}
	_body, _err := client.DoRequest(tea.String("DeployFile"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeployFile(request *DeployFileRequest) (_result *DeployFileResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeployFileResponse{}
	_body, _err := client.DeployFileWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteBusinessWithOptions(request *DeleteBusinessRequest, runtime *util.RuntimeOptions) (_result *DeleteBusinessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteBusinessResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteBusiness"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteBusiness(request *DeleteBusinessRequest) (_result *DeleteBusinessResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteBusinessResponse{}
	_body, _err := client.DeleteBusinessWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteFileWithOptions(request *DeleteFileRequest, runtime *util.RuntimeOptions) (_result *DeleteFileResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteFileResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteFile"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteFile(request *DeleteFileRequest) (_result *DeleteFileResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteFileResponse{}
	_body, _err := client.DeleteFileWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListQualityRulesWithOptions(request *ListQualityRulesRequest, runtime *util.RuntimeOptions) (_result *ListQualityRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListQualityRulesResponse{}
	_body, _err := client.DoRequest(tea.String("ListQualityRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListQualityRules(request *ListQualityRulesRequest) (_result *ListQualityRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListQualityRulesResponse{}
	_body, _err := client.ListQualityRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateRemindWithOptions(request *CreateRemindRequest, runtime *util.RuntimeOptions) (_result *CreateRemindResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateRemindResponse{}
	_body, _err := client.DoRequest(tea.String("CreateRemind"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateRemind(request *CreateRemindRequest) (_result *CreateRemindResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateRemindResponse{}
	_body, _err := client.CreateRemindWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetQualityRuleWithOptions(request *GetQualityRuleRequest, runtime *util.RuntimeOptions) (_result *GetQualityRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetQualityRuleResponse{}
	_body, _err := client.DoRequest(tea.String("GetQualityRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetQualityRule(request *GetQualityRuleRequest) (_result *GetQualityRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetQualityRuleResponse{}
	_body, _err := client.GetQualityRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetDeploymentWithOptions(request *GetDeploymentRequest, runtime *util.RuntimeOptions) (_result *GetDeploymentResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetDeploymentResponse{}
	_body, _err := client.DoRequest(tea.String("GetDeployment"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetDeployment(request *GetDeploymentRequest) (_result *GetDeploymentResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetDeploymentResponse{}
	_body, _err := client.GetDeploymentWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateRemindWithOptions(request *UpdateRemindRequest, runtime *util.RuntimeOptions) (_result *UpdateRemindResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateRemindResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateRemind"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateRemind(request *UpdateRemindRequest) (_result *UpdateRemindResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateRemindResponse{}
	_body, _err := client.UpdateRemindWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMetaColumnLineageWithOptions(request *GetMetaColumnLineageRequest, runtime *util.RuntimeOptions) (_result *GetMetaColumnLineageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMetaColumnLineageResponse{}
	_body, _err := client.DoRequest(tea.String("GetMetaColumnLineage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMetaColumnLineage(request *GetMetaColumnLineageRequest) (_result *GetMetaColumnLineageResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMetaColumnLineageResponse{}
	_body, _err := client.GetMetaColumnLineageWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateBusinessWithOptions(request *UpdateBusinessRequest, runtime *util.RuntimeOptions) (_result *UpdateBusinessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateBusinessResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateBusiness"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateBusiness(request *UpdateBusinessRequest) (_result *UpdateBusinessResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateBusinessResponse{}
	_body, _err := client.UpdateBusinessWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateQualityRuleWithOptions(request *UpdateQualityRuleRequest, runtime *util.RuntimeOptions) (_result *UpdateQualityRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateQualityRuleResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateQualityRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateQualityRule(request *UpdateQualityRuleRequest) (_result *UpdateQualityRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateQualityRuleResponse{}
	_body, _err := client.UpdateQualityRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteQualityRuleWithOptions(request *DeleteQualityRuleRequest, runtime *util.RuntimeOptions) (_result *DeleteQualityRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteQualityRuleResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteQualityRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteQualityRule(request *DeleteQualityRuleRequest) (_result *DeleteQualityRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteQualityRuleResponse{}
	_body, _err := client.DeleteQualityRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SubmitFileWithOptions(request *SubmitFileRequest, runtime *util.RuntimeOptions) (_result *SubmitFileResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SubmitFileResponse{}
	_body, _err := client.DoRequest(tea.String("SubmitFile"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SubmitFile(request *SubmitFileRequest) (_result *SubmitFileResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SubmitFileResponse{}
	_body, _err := client.SubmitFileWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetDataServiceApiWithOptions(request *GetDataServiceApiRequest, runtime *util.RuntimeOptions) (_result *GetDataServiceApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetDataServiceApiResponse{}
	_body, _err := client.DoRequest(tea.String("GetDataServiceApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetDataServiceApi(request *GetDataServiceApiRequest) (_result *GetDataServiceApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetDataServiceApiResponse{}
	_body, _err := client.GetDataServiceApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListDataServiceApisWithOptions(request *ListDataServiceApisRequest, runtime *util.RuntimeOptions) (_result *ListDataServiceApisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListDataServiceApisResponse{}
	_body, _err := client.DoRequest(tea.String("ListDataServiceApis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListDataServiceApis(request *ListDataServiceApisRequest) (_result *ListDataServiceApisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListDataServiceApisResponse{}
	_body, _err := client.ListDataServiceApisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetDataServicePublishedApiWithOptions(request *GetDataServicePublishedApiRequest, runtime *util.RuntimeOptions) (_result *GetDataServicePublishedApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetDataServicePublishedApiResponse{}
	_body, _err := client.DoRequest(tea.String("GetDataServicePublishedApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetDataServicePublishedApi(request *GetDataServicePublishedApiRequest) (_result *GetDataServicePublishedApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetDataServicePublishedApiResponse{}
	_body, _err := client.GetDataServicePublishedApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetBaselineKeyPathWithOptions(request *GetBaselineKeyPathRequest, runtime *util.RuntimeOptions) (_result *GetBaselineKeyPathResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetBaselineKeyPathResponse{}
	_body, _err := client.DoRequest(tea.String("GetBaselineKeyPath"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetBaselineKeyPath(request *GetBaselineKeyPathRequest) (_result *GetBaselineKeyPathResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetBaselineKeyPathResponse{}
	_body, _err := client.GetBaselineKeyPathWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetRemindWithOptions(request *GetRemindRequest, runtime *util.RuntimeOptions) (_result *GetRemindResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetRemindResponse{}
	_body, _err := client.DoRequest(tea.String("GetRemind"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetRemind(request *GetRemindRequest) (_result *GetRemindResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetRemindResponse{}
	_body, _err := client.GetRemindWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMetaTableIntroWikiWithOptions(request *GetMetaTableIntroWikiRequest, runtime *util.RuntimeOptions) (_result *GetMetaTableIntroWikiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMetaTableIntroWikiResponse{}
	_body, _err := client.DoRequest(tea.String("GetMetaTableIntroWiki"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMetaTableIntroWiki(request *GetMetaTableIntroWikiRequest) (_result *GetMetaTableIntroWikiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMetaTableIntroWikiResponse{}
	_body, _err := client.GetMetaTableIntroWikiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetBaselineStatusWithOptions(request *GetBaselineStatusRequest, runtime *util.RuntimeOptions) (_result *GetBaselineStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetBaselineStatusResponse{}
	_body, _err := client.DoRequest(tea.String("GetBaselineStatus"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetBaselineStatus(request *GetBaselineStatusRequest) (_result *GetBaselineStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetBaselineStatusResponse{}
	_body, _err := client.GetBaselineStatusWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteDataServiceApiWithOptions(request *DeleteDataServiceApiRequest, runtime *util.RuntimeOptions) (_result *DeleteDataServiceApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteDataServiceApiResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteDataServiceApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteDataServiceApi(request *DeleteDataServiceApiRequest) (_result *DeleteDataServiceApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteDataServiceApiResponse{}
	_body, _err := client.DeleteDataServiceApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PublishDataServiceApiWithOptions(request *PublishDataServiceApiRequest, runtime *util.RuntimeOptions) (_result *PublishDataServiceApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PublishDataServiceApiResponse{}
	_body, _err := client.DoRequest(tea.String("PublishDataServiceApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PublishDataServiceApi(request *PublishDataServiceApiRequest) (_result *PublishDataServiceApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PublishDataServiceApiResponse{}
	_body, _err := client.PublishDataServiceApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMetaTableLineageWithOptions(request *GetMetaTableLineageRequest, runtime *util.RuntimeOptions) (_result *GetMetaTableLineageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMetaTableLineageResponse{}
	_body, _err := client.DoRequest(tea.String("GetMetaTableLineage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMetaTableLineage(request *GetMetaTableLineageRequest) (_result *GetMetaTableLineageResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMetaTableLineageResponse{}
	_body, _err := client.GetMetaTableLineageWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListBaselineStatusesWithOptions(request *ListBaselineStatusesRequest, runtime *util.RuntimeOptions) (_result *ListBaselineStatusesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListBaselineStatusesResponse{}
	_body, _err := client.DoRequest(tea.String("ListBaselineStatuses"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListBaselineStatuses(request *ListBaselineStatusesRequest) (_result *ListBaselineStatusesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListBaselineStatusesResponse{}
	_body, _err := client.ListBaselineStatusesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListRemindsWithOptions(request *ListRemindsRequest, runtime *util.RuntimeOptions) (_result *ListRemindsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListRemindsResponse{}
	_body, _err := client.DoRequest(tea.String("ListReminds"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListReminds(request *ListRemindsRequest) (_result *ListRemindsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListRemindsResponse{}
	_body, _err := client.ListRemindsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteQualityEntityWithOptions(request *DeleteQualityEntityRequest, runtime *util.RuntimeOptions) (_result *DeleteQualityEntityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteQualityEntityResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteQualityEntity"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteQualityEntity(request *DeleteQualityEntityRequest) (_result *DeleteQualityEntityResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteQualityEntityResponse{}
	_body, _err := client.DeleteQualityEntityWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateQualityFollowerWithOptions(request *CreateQualityFollowerRequest, runtime *util.RuntimeOptions) (_result *CreateQualityFollowerResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateQualityFollowerResponse{}
	_body, _err := client.DoRequest(tea.String("CreateQualityFollower"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateQualityFollower(request *CreateQualityFollowerRequest) (_result *CreateQualityFollowerResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateQualityFollowerResponse{}
	_body, _err := client.CreateQualityFollowerWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateDataServiceApiWithOptions(request *CreateDataServiceApiRequest, runtime *util.RuntimeOptions) (_result *CreateDataServiceApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateDataServiceApiResponse{}
	_body, _err := client.DoRequest(tea.String("CreateDataServiceApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateDataServiceApi(request *CreateDataServiceApiRequest) (_result *CreateDataServiceApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateDataServiceApiResponse{}
	_body, _err := client.CreateDataServiceApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AbolishDataServiceApiWithOptions(request *AbolishDataServiceApiRequest, runtime *util.RuntimeOptions) (_result *AbolishDataServiceApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AbolishDataServiceApiResponse{}
	_body, _err := client.DoRequest(tea.String("AbolishDataServiceApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AbolishDataServiceApi(request *AbolishDataServiceApiRequest) (_result *AbolishDataServiceApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AbolishDataServiceApiResponse{}
	_body, _err := client.AbolishDataServiceApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetQualityEntityWithOptions(request *GetQualityEntityRequest, runtime *util.RuntimeOptions) (_result *GetQualityEntityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetQualityEntityResponse{}
	_body, _err := client.DoRequest(tea.String("GetQualityEntity"), tea.String("HTTP"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetQualityEntity(request *GetQualityEntityRequest) (_result *GetQualityEntityResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetQualityEntityResponse{}
	_body, _err := client.GetQualityEntityWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetQualityFollowerWithOptions(request *GetQualityFollowerRequest, runtime *util.RuntimeOptions) (_result *GetQualityFollowerResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetQualityFollowerResponse{}
	_body, _err := client.DoRequest(tea.String("GetQualityFollower"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetQualityFollower(request *GetQualityFollowerRequest) (_result *GetQualityFollowerResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetQualityFollowerResponse{}
	_body, _err := client.GetQualityFollowerWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteQualityFollowerWithOptions(request *DeleteQualityFollowerRequest, runtime *util.RuntimeOptions) (_result *DeleteQualityFollowerResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteQualityFollowerResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteQualityFollower"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteQualityFollower(request *DeleteQualityFollowerRequest) (_result *DeleteQualityFollowerResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteQualityFollowerResponse{}
	_body, _err := client.DeleteQualityFollowerWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateQualityEntityWithOptions(request *CreateQualityEntityRequest, runtime *util.RuntimeOptions) (_result *CreateQualityEntityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateQualityEntityResponse{}
	_body, _err := client.DoRequest(tea.String("CreateQualityEntity"), tea.String("HTTP"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateQualityEntity(request *CreateQualityEntityRequest) (_result *CreateQualityEntityResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateQualityEntityResponse{}
	_body, _err := client.CreateQualityEntityWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateQualityRuleWithOptions(request *CreateQualityRuleRequest, runtime *util.RuntimeOptions) (_result *CreateQualityRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateQualityRuleResponse{}
	_body, _err := client.DoRequest(tea.String("CreateQualityRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateQualityRule(request *CreateQualityRuleRequest) (_result *CreateQualityRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateQualityRuleResponse{}
	_body, _err := client.CreateQualityRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateQualityFollowerWithOptions(request *UpdateQualityFollowerRequest, runtime *util.RuntimeOptions) (_result *UpdateQualityFollowerResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateQualityFollowerResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateQualityFollower"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateQualityFollower(request *UpdateQualityFollowerRequest) (_result *UpdateQualityFollowerResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateQualityFollowerResponse{}
	_body, _err := client.UpdateQualityFollowerWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateQualityRelativeNodeWithOptions(request *CreateQualityRelativeNodeRequest, runtime *util.RuntimeOptions) (_result *CreateQualityRelativeNodeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateQualityRelativeNodeResponse{}
	_body, _err := client.DoRequest(tea.String("CreateQualityRelativeNode"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateQualityRelativeNode(request *CreateQualityRelativeNodeRequest) (_result *CreateQualityRelativeNodeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateQualityRelativeNodeResponse{}
	_body, _err := client.CreateQualityRelativeNodeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteQualityRelativeNodeWithOptions(request *DeleteQualityRelativeNodeRequest, runtime *util.RuntimeOptions) (_result *DeleteQualityRelativeNodeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteQualityRelativeNodeResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteQualityRelativeNode"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-18"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteQualityRelativeNode(request *DeleteQualityRelativeNodeRequest) (_result *DeleteQualityRelativeNodeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteQualityRelativeNodeResponse{}
	_body, _err := client.DeleteQualityRelativeNodeWithOptions(request, runtime)
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
