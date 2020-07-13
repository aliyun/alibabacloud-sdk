// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type DescribeDiagnosticReportListRequest struct {
	Uid          *string `json:"Uid,omitempty" xml:"Uid,omitempty"`
	AccessKey    *string `json:"accessKey,omitempty" xml:"accessKey,omitempty"`
	Signature    *string `json:"signature,omitempty" xml:"signature,omitempty"`
	Timestamp    *string `json:"timestamp,omitempty" xml:"timestamp,omitempty"`
	Context      *string `json:"__context,omitempty" xml:"__context,omitempty"`
	SkipAuth     *string `json:"skipAuth,omitempty" xml:"skipAuth,omitempty"`
	UserId       *string `json:"UserId,omitempty" xml:"UserId,omitempty"`
	DBInstanceId *string `json:"DBInstanceId,omitempty" xml:"DBInstanceId,omitempty"`
	PageNo       *string `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
	PageSize     *string `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	StartTime    *string `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime      *string `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
}

func (s DescribeDiagnosticReportListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDiagnosticReportListRequest) GoString() string {
	return s.String()
}

func (s *DescribeDiagnosticReportListRequest) SetUid(v string) *DescribeDiagnosticReportListRequest {
	s.Uid = &v
	return s
}

func (s *DescribeDiagnosticReportListRequest) SetAccessKey(v string) *DescribeDiagnosticReportListRequest {
	s.AccessKey = &v
	return s
}

func (s *DescribeDiagnosticReportListRequest) SetSignature(v string) *DescribeDiagnosticReportListRequest {
	s.Signature = &v
	return s
}

func (s *DescribeDiagnosticReportListRequest) SetTimestamp(v string) *DescribeDiagnosticReportListRequest {
	s.Timestamp = &v
	return s
}

func (s *DescribeDiagnosticReportListRequest) SetContext(v string) *DescribeDiagnosticReportListRequest {
	s.Context = &v
	return s
}

func (s *DescribeDiagnosticReportListRequest) SetSkipAuth(v string) *DescribeDiagnosticReportListRequest {
	s.SkipAuth = &v
	return s
}

func (s *DescribeDiagnosticReportListRequest) SetUserId(v string) *DescribeDiagnosticReportListRequest {
	s.UserId = &v
	return s
}

func (s *DescribeDiagnosticReportListRequest) SetDBInstanceId(v string) *DescribeDiagnosticReportListRequest {
	s.DBInstanceId = &v
	return s
}

func (s *DescribeDiagnosticReportListRequest) SetPageNo(v string) *DescribeDiagnosticReportListRequest {
	s.PageNo = &v
	return s
}

func (s *DescribeDiagnosticReportListRequest) SetPageSize(v string) *DescribeDiagnosticReportListRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeDiagnosticReportListRequest) SetStartTime(v string) *DescribeDiagnosticReportListRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeDiagnosticReportListRequest) SetEndTime(v string) *DescribeDiagnosticReportListRequest {
	s.EndTime = &v
	return s
}

type DescribeDiagnosticReportListResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *string `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Synchro   *string `json:"Synchro,omitempty" xml:"Synchro,omitempty" require:"true"`
}

func (s DescribeDiagnosticReportListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDiagnosticReportListResponse) GoString() string {
	return s.String()
}

func (s *DescribeDiagnosticReportListResponse) SetCode(v string) *DescribeDiagnosticReportListResponse {
	s.Code = &v
	return s
}

func (s *DescribeDiagnosticReportListResponse) SetData(v string) *DescribeDiagnosticReportListResponse {
	s.Data = &v
	return s
}

func (s *DescribeDiagnosticReportListResponse) SetMessage(v string) *DescribeDiagnosticReportListResponse {
	s.Message = &v
	return s
}

func (s *DescribeDiagnosticReportListResponse) SetRequestId(v string) *DescribeDiagnosticReportListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDiagnosticReportListResponse) SetSuccess(v string) *DescribeDiagnosticReportListResponse {
	s.Success = &v
	return s
}

func (s *DescribeDiagnosticReportListResponse) SetSynchro(v string) *DescribeDiagnosticReportListResponse {
	s.Synchro = &v
	return s
}

type CreateDiagnosticReportRequest struct {
	Uid          *string `json:"Uid,omitempty" xml:"Uid,omitempty"`
	AccessKey    *string `json:"accessKey,omitempty" xml:"accessKey,omitempty"`
	Signature    *string `json:"signature,omitempty" xml:"signature,omitempty"`
	Timestamp    *string `json:"timestamp,omitempty" xml:"timestamp,omitempty"`
	Context      *string `json:"__context,omitempty" xml:"__context,omitempty"`
	SkipAuth     *string `json:"skipAuth,omitempty" xml:"skipAuth,omitempty"`
	UserId       *string `json:"UserId,omitempty" xml:"UserId,omitempty"`
	DBInstanceId *string `json:"DBInstanceId,omitempty" xml:"DBInstanceId,omitempty"`
	StartTime    *string `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime      *string `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
}

func (s CreateDiagnosticReportRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateDiagnosticReportRequest) GoString() string {
	return s.String()
}

func (s *CreateDiagnosticReportRequest) SetUid(v string) *CreateDiagnosticReportRequest {
	s.Uid = &v
	return s
}

func (s *CreateDiagnosticReportRequest) SetAccessKey(v string) *CreateDiagnosticReportRequest {
	s.AccessKey = &v
	return s
}

func (s *CreateDiagnosticReportRequest) SetSignature(v string) *CreateDiagnosticReportRequest {
	s.Signature = &v
	return s
}

func (s *CreateDiagnosticReportRequest) SetTimestamp(v string) *CreateDiagnosticReportRequest {
	s.Timestamp = &v
	return s
}

func (s *CreateDiagnosticReportRequest) SetContext(v string) *CreateDiagnosticReportRequest {
	s.Context = &v
	return s
}

func (s *CreateDiagnosticReportRequest) SetSkipAuth(v string) *CreateDiagnosticReportRequest {
	s.SkipAuth = &v
	return s
}

func (s *CreateDiagnosticReportRequest) SetUserId(v string) *CreateDiagnosticReportRequest {
	s.UserId = &v
	return s
}

func (s *CreateDiagnosticReportRequest) SetDBInstanceId(v string) *CreateDiagnosticReportRequest {
	s.DBInstanceId = &v
	return s
}

func (s *CreateDiagnosticReportRequest) SetStartTime(v string) *CreateDiagnosticReportRequest {
	s.StartTime = &v
	return s
}

func (s *CreateDiagnosticReportRequest) SetEndTime(v string) *CreateDiagnosticReportRequest {
	s.EndTime = &v
	return s
}

type CreateDiagnosticReportResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *string `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Synchro   *string `json:"Synchro,omitempty" xml:"Synchro,omitempty" require:"true"`
}

func (s CreateDiagnosticReportResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateDiagnosticReportResponse) GoString() string {
	return s.String()
}

func (s *CreateDiagnosticReportResponse) SetCode(v string) *CreateDiagnosticReportResponse {
	s.Code = &v
	return s
}

func (s *CreateDiagnosticReportResponse) SetData(v string) *CreateDiagnosticReportResponse {
	s.Data = &v
	return s
}

func (s *CreateDiagnosticReportResponse) SetMessage(v string) *CreateDiagnosticReportResponse {
	s.Message = &v
	return s
}

func (s *CreateDiagnosticReportResponse) SetRequestId(v string) *CreateDiagnosticReportResponse {
	s.RequestId = &v
	return s
}

func (s *CreateDiagnosticReportResponse) SetSuccess(v string) *CreateDiagnosticReportResponse {
	s.Success = &v
	return s
}

func (s *CreateDiagnosticReportResponse) SetSynchro(v string) *CreateDiagnosticReportResponse {
	s.Synchro = &v
	return s
}

type AccessHDMInstanceRequest struct {
	Uid              *string `json:"Uid,omitempty" xml:"Uid,omitempty"`
	AccessKey        *string `json:"accessKey,omitempty" xml:"accessKey,omitempty"`
	Signature        *string `json:"signature,omitempty" xml:"signature,omitempty"`
	Timestamp        *string `json:"timestamp,omitempty" xml:"timestamp,omitempty"`
	Context          *string `json:"__context,omitempty" xml:"__context,omitempty"`
	SkipAuth         *string `json:"skipAuth,omitempty" xml:"skipAuth,omitempty"`
	UserId           *string `json:"UserId,omitempty" xml:"UserId,omitempty"`
	InstanceArea     *string `json:"InstanceArea,omitempty" xml:"InstanceArea,omitempty"`
	InstanceId       *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty"`
	Ip               *string `json:"Ip,omitempty" xml:"Ip,omitempty"`
	Port             *string `json:"Port,omitempty" xml:"Port,omitempty"`
	Engine           *string `json:"Engine,omitempty" xml:"Engine,omitempty"`
	Username         *string `json:"Username,omitempty" xml:"Username,omitempty"`
	Password         *string `json:"Password,omitempty" xml:"Password,omitempty"`
	InstanceAlias    *string `json:"InstanceAlias,omitempty" xml:"InstanceAlias,omitempty"`
	NetworkType      *string `json:"NetworkType,omitempty" xml:"NetworkType,omitempty"`
	VpcId            *string `json:"VpcId,omitempty" xml:"VpcId,omitempty"`
	Region           *string `json:"Region,omitempty" xml:"Region,omitempty"`
	CallerBid        *string `json:"CallerBid,omitempty" xml:"CallerBid,omitempty"`
	TenantId         *string `json:"TenantId,omitempty" xml:"TenantId,omitempty"`
	OwnerIdSignature *string `json:"OwnerIdSignature,omitempty" xml:"OwnerIdSignature,omitempty"`
	CallerType       *string `json:"CallerType,omitempty" xml:"CallerType,omitempty"`
	CallerUid        *string `json:"CallerUid,omitempty" xml:"CallerUid,omitempty"`
	Target           *string `json:"Target,omitempty" xml:"Target,omitempty"`
	Product          *string `json:"Product,omitempty" xml:"Product,omitempty"`
	External         *string `json:"External,omitempty" xml:"External,omitempty"`
}

func (s AccessHDMInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s AccessHDMInstanceRequest) GoString() string {
	return s.String()
}

func (s *AccessHDMInstanceRequest) SetUid(v string) *AccessHDMInstanceRequest {
	s.Uid = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetAccessKey(v string) *AccessHDMInstanceRequest {
	s.AccessKey = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetSignature(v string) *AccessHDMInstanceRequest {
	s.Signature = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetTimestamp(v string) *AccessHDMInstanceRequest {
	s.Timestamp = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetContext(v string) *AccessHDMInstanceRequest {
	s.Context = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetSkipAuth(v string) *AccessHDMInstanceRequest {
	s.SkipAuth = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetUserId(v string) *AccessHDMInstanceRequest {
	s.UserId = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetInstanceArea(v string) *AccessHDMInstanceRequest {
	s.InstanceArea = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetInstanceId(v string) *AccessHDMInstanceRequest {
	s.InstanceId = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetIp(v string) *AccessHDMInstanceRequest {
	s.Ip = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetPort(v string) *AccessHDMInstanceRequest {
	s.Port = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetEngine(v string) *AccessHDMInstanceRequest {
	s.Engine = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetUsername(v string) *AccessHDMInstanceRequest {
	s.Username = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetPassword(v string) *AccessHDMInstanceRequest {
	s.Password = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetInstanceAlias(v string) *AccessHDMInstanceRequest {
	s.InstanceAlias = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetNetworkType(v string) *AccessHDMInstanceRequest {
	s.NetworkType = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetVpcId(v string) *AccessHDMInstanceRequest {
	s.VpcId = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetRegion(v string) *AccessHDMInstanceRequest {
	s.Region = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetCallerBid(v string) *AccessHDMInstanceRequest {
	s.CallerBid = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetTenantId(v string) *AccessHDMInstanceRequest {
	s.TenantId = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetOwnerIdSignature(v string) *AccessHDMInstanceRequest {
	s.OwnerIdSignature = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetCallerType(v string) *AccessHDMInstanceRequest {
	s.CallerType = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetCallerUid(v string) *AccessHDMInstanceRequest {
	s.CallerUid = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetTarget(v string) *AccessHDMInstanceRequest {
	s.Target = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetProduct(v string) *AccessHDMInstanceRequest {
	s.Product = &v
	return s
}

func (s *AccessHDMInstanceRequest) SetExternal(v string) *AccessHDMInstanceRequest {
	s.External = &v
	return s
}

type AccessHDMInstanceResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *string `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Synchro   *string `json:"Synchro,omitempty" xml:"Synchro,omitempty" require:"true"`
}

func (s AccessHDMInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s AccessHDMInstanceResponse) GoString() string {
	return s.String()
}

func (s *AccessHDMInstanceResponse) SetCode(v string) *AccessHDMInstanceResponse {
	s.Code = &v
	return s
}

func (s *AccessHDMInstanceResponse) SetData(v string) *AccessHDMInstanceResponse {
	s.Data = &v
	return s
}

func (s *AccessHDMInstanceResponse) SetMessage(v string) *AccessHDMInstanceResponse {
	s.Message = &v
	return s
}

func (s *AccessHDMInstanceResponse) SetRequestId(v string) *AccessHDMInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *AccessHDMInstanceResponse) SetSuccess(v string) *AccessHDMInstanceResponse {
	s.Success = &v
	return s
}

func (s *AccessHDMInstanceResponse) SetSynchro(v string) *AccessHDMInstanceResponse {
	s.Synchro = &v
	return s
}

type SyncHDMAliyunResourceRequest struct {
	Uid                      *string `json:"Uid,omitempty" xml:"Uid,omitempty"`
	AccessKey                *string `json:"accessKey,omitempty" xml:"accessKey,omitempty"`
	Signature                *string `json:"signature,omitempty" xml:"signature,omitempty"`
	Timestamp                *string `json:"timestamp,omitempty" xml:"timestamp,omitempty"`
	Context                  *string `json:"__context,omitempty" xml:"__context,omitempty"`
	SkipAuth                 *string `json:"skipAuth,omitempty" xml:"skipAuth,omitempty"`
	UserId                   *string `json:"UserId,omitempty" xml:"UserId,omitempty"`
	Async                    *string `json:"Async,omitempty" xml:"Async,omitempty"`
	WaitForModifySecurityIps *string `json:"WaitForModifySecurityIps,omitempty" xml:"WaitForModifySecurityIps,omitempty"`
	ResourceTypes            *string `json:"ResourceTypes,omitempty" xml:"ResourceTypes,omitempty"`
}

func (s SyncHDMAliyunResourceRequest) String() string {
	return tea.Prettify(s)
}

func (s SyncHDMAliyunResourceRequest) GoString() string {
	return s.String()
}

func (s *SyncHDMAliyunResourceRequest) SetUid(v string) *SyncHDMAliyunResourceRequest {
	s.Uid = &v
	return s
}

func (s *SyncHDMAliyunResourceRequest) SetAccessKey(v string) *SyncHDMAliyunResourceRequest {
	s.AccessKey = &v
	return s
}

func (s *SyncHDMAliyunResourceRequest) SetSignature(v string) *SyncHDMAliyunResourceRequest {
	s.Signature = &v
	return s
}

func (s *SyncHDMAliyunResourceRequest) SetTimestamp(v string) *SyncHDMAliyunResourceRequest {
	s.Timestamp = &v
	return s
}

func (s *SyncHDMAliyunResourceRequest) SetContext(v string) *SyncHDMAliyunResourceRequest {
	s.Context = &v
	return s
}

func (s *SyncHDMAliyunResourceRequest) SetSkipAuth(v string) *SyncHDMAliyunResourceRequest {
	s.SkipAuth = &v
	return s
}

func (s *SyncHDMAliyunResourceRequest) SetUserId(v string) *SyncHDMAliyunResourceRequest {
	s.UserId = &v
	return s
}

func (s *SyncHDMAliyunResourceRequest) SetAsync(v string) *SyncHDMAliyunResourceRequest {
	s.Async = &v
	return s
}

func (s *SyncHDMAliyunResourceRequest) SetWaitForModifySecurityIps(v string) *SyncHDMAliyunResourceRequest {
	s.WaitForModifySecurityIps = &v
	return s
}

func (s *SyncHDMAliyunResourceRequest) SetResourceTypes(v string) *SyncHDMAliyunResourceRequest {
	s.ResourceTypes = &v
	return s
}

type SyncHDMAliyunResourceResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *string `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Synchro   *string `json:"Synchro,omitempty" xml:"Synchro,omitempty" require:"true"`
}

func (s SyncHDMAliyunResourceResponse) String() string {
	return tea.Prettify(s)
}

func (s SyncHDMAliyunResourceResponse) GoString() string {
	return s.String()
}

func (s *SyncHDMAliyunResourceResponse) SetCode(v string) *SyncHDMAliyunResourceResponse {
	s.Code = &v
	return s
}

func (s *SyncHDMAliyunResourceResponse) SetData(v string) *SyncHDMAliyunResourceResponse {
	s.Data = &v
	return s
}

func (s *SyncHDMAliyunResourceResponse) SetMessage(v string) *SyncHDMAliyunResourceResponse {
	s.Message = &v
	return s
}

func (s *SyncHDMAliyunResourceResponse) SetRequestId(v string) *SyncHDMAliyunResourceResponse {
	s.RequestId = &v
	return s
}

func (s *SyncHDMAliyunResourceResponse) SetSuccess(v string) *SyncHDMAliyunResourceResponse {
	s.Success = &v
	return s
}

func (s *SyncHDMAliyunResourceResponse) SetSynchro(v string) *SyncHDMAliyunResourceResponse {
	s.Synchro = &v
	return s
}

type GetHDMLastAliyunResourceSyncResultRequest struct {
	Uid       *string `json:"Uid,omitempty" xml:"Uid,omitempty"`
	AccessKey *string `json:"accessKey,omitempty" xml:"accessKey,omitempty"`
	Signature *string `json:"signature,omitempty" xml:"signature,omitempty"`
	Timestamp *string `json:"timestamp,omitempty" xml:"timestamp,omitempty"`
	Context   *string `json:"__context,omitempty" xml:"__context,omitempty"`
	SkipAuth  *string `json:"skipAuth,omitempty" xml:"skipAuth,omitempty"`
	UserId    *string `json:"UserId,omitempty" xml:"UserId,omitempty"`
}

func (s GetHDMLastAliyunResourceSyncResultRequest) String() string {
	return tea.Prettify(s)
}

func (s GetHDMLastAliyunResourceSyncResultRequest) GoString() string {
	return s.String()
}

func (s *GetHDMLastAliyunResourceSyncResultRequest) SetUid(v string) *GetHDMLastAliyunResourceSyncResultRequest {
	s.Uid = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultRequest) SetAccessKey(v string) *GetHDMLastAliyunResourceSyncResultRequest {
	s.AccessKey = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultRequest) SetSignature(v string) *GetHDMLastAliyunResourceSyncResultRequest {
	s.Signature = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultRequest) SetTimestamp(v string) *GetHDMLastAliyunResourceSyncResultRequest {
	s.Timestamp = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultRequest) SetContext(v string) *GetHDMLastAliyunResourceSyncResultRequest {
	s.Context = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultRequest) SetSkipAuth(v string) *GetHDMLastAliyunResourceSyncResultRequest {
	s.SkipAuth = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultRequest) SetUserId(v string) *GetHDMLastAliyunResourceSyncResultRequest {
	s.UserId = &v
	return s
}

type GetHDMLastAliyunResourceSyncResultResponse struct {
	Code      *string                                         `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                                         `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *string                                         `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Synchro   *string                                         `json:"Synchro,omitempty" xml:"Synchro,omitempty" require:"true"`
	Data      *GetHDMLastAliyunResourceSyncResultResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetHDMLastAliyunResourceSyncResultResponse) String() string {
	return tea.Prettify(s)
}

func (s GetHDMLastAliyunResourceSyncResultResponse) GoString() string {
	return s.String()
}

func (s *GetHDMLastAliyunResourceSyncResultResponse) SetCode(v string) *GetHDMLastAliyunResourceSyncResultResponse {
	s.Code = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultResponse) SetMessage(v string) *GetHDMLastAliyunResourceSyncResultResponse {
	s.Message = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultResponse) SetRequestId(v string) *GetHDMLastAliyunResourceSyncResultResponse {
	s.RequestId = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultResponse) SetSuccess(v string) *GetHDMLastAliyunResourceSyncResultResponse {
	s.Success = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultResponse) SetSynchro(v string) *GetHDMLastAliyunResourceSyncResultResponse {
	s.Synchro = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultResponse) SetData(v *GetHDMLastAliyunResourceSyncResultResponseData) *GetHDMLastAliyunResourceSyncResultResponse {
	s.Data = v
	return s
}

type GetHDMLastAliyunResourceSyncResultResponseData struct {
	SyncStatus *string                                                   `json:"SyncStatus,omitempty" xml:"SyncStatus,omitempty" require:"true"`
	ErrorMsg   *string                                                   `json:"ErrorMsg,omitempty" xml:"ErrorMsg,omitempty" require:"true"`
	Results    *string                                                   `json:"Results,omitempty" xml:"Results,omitempty" require:"true"`
	SubResults *GetHDMLastAliyunResourceSyncResultResponseDataSubResults `json:"SubResults,omitempty" xml:"SubResults,omitempty" require:"true" type:"Struct"`
}

func (s GetHDMLastAliyunResourceSyncResultResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetHDMLastAliyunResourceSyncResultResponseData) GoString() string {
	return s.String()
}

func (s *GetHDMLastAliyunResourceSyncResultResponseData) SetSyncStatus(v string) *GetHDMLastAliyunResourceSyncResultResponseData {
	s.SyncStatus = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultResponseData) SetErrorMsg(v string) *GetHDMLastAliyunResourceSyncResultResponseData {
	s.ErrorMsg = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultResponseData) SetResults(v string) *GetHDMLastAliyunResourceSyncResultResponseData {
	s.Results = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultResponseData) SetSubResults(v *GetHDMLastAliyunResourceSyncResultResponseDataSubResults) *GetHDMLastAliyunResourceSyncResultResponseData {
	s.SubResults = v
	return s
}

type GetHDMLastAliyunResourceSyncResultResponseDataSubResults struct {
	ResourceSyncSubResult []*GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult `json:"ResourceSyncSubResult,omitempty" xml:"ResourceSyncSubResult,omitempty" require:"true" type:"Repeated"`
}

func (s GetHDMLastAliyunResourceSyncResultResponseDataSubResults) String() string {
	return tea.Prettify(s)
}

func (s GetHDMLastAliyunResourceSyncResultResponseDataSubResults) GoString() string {
	return s.String()
}

func (s *GetHDMLastAliyunResourceSyncResultResponseDataSubResults) SetResourceSyncSubResult(v []*GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult) *GetHDMLastAliyunResourceSyncResultResponseDataSubResults {
	s.ResourceSyncSubResult = v
	return s
}

type GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult struct {
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	SyncCount    *int    `json:"SyncCount,omitempty" xml:"SyncCount,omitempty" require:"true"`
	Success      *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrMsg       *string `json:"ErrMsg,omitempty" xml:"ErrMsg,omitempty" require:"true"`
}

func (s GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult) String() string {
	return tea.Prettify(s)
}

func (s GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult) GoString() string {
	return s.String()
}

func (s *GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult) SetResourceType(v string) *GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult {
	s.ResourceType = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult) SetSyncCount(v int) *GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult {
	s.SyncCount = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult) SetSuccess(v bool) *GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult {
	s.Success = &v
	return s
}

func (s *GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult) SetErrMsg(v string) *GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult {
	s.ErrMsg = &v
	return s
}

type GetEndpointSwitchTaskRequest struct {
	Uid       *string `json:"Uid,omitempty" xml:"Uid,omitempty"`
	AccessKey *string `json:"accessKey,omitempty" xml:"accessKey,omitempty"`
	Signature *string `json:"signature,omitempty" xml:"signature,omitempty"`
	Timestamp *string `json:"timestamp,omitempty" xml:"timestamp,omitempty"`
	Context   *string `json:"__context,omitempty" xml:"__context,omitempty"`
	SkipAuth  *string `json:"skipAuth,omitempty" xml:"skipAuth,omitempty"`
	UserId    *string `json:"UserId,omitempty" xml:"UserId,omitempty"`
	TaskId    *string `json:"TaskId,omitempty" xml:"TaskId,omitempty"`
}

func (s GetEndpointSwitchTaskRequest) String() string {
	return tea.Prettify(s)
}

func (s GetEndpointSwitchTaskRequest) GoString() string {
	return s.String()
}

func (s *GetEndpointSwitchTaskRequest) SetUid(v string) *GetEndpointSwitchTaskRequest {
	s.Uid = &v
	return s
}

func (s *GetEndpointSwitchTaskRequest) SetAccessKey(v string) *GetEndpointSwitchTaskRequest {
	s.AccessKey = &v
	return s
}

func (s *GetEndpointSwitchTaskRequest) SetSignature(v string) *GetEndpointSwitchTaskRequest {
	s.Signature = &v
	return s
}

func (s *GetEndpointSwitchTaskRequest) SetTimestamp(v string) *GetEndpointSwitchTaskRequest {
	s.Timestamp = &v
	return s
}

func (s *GetEndpointSwitchTaskRequest) SetContext(v string) *GetEndpointSwitchTaskRequest {
	s.Context = &v
	return s
}

func (s *GetEndpointSwitchTaskRequest) SetSkipAuth(v string) *GetEndpointSwitchTaskRequest {
	s.SkipAuth = &v
	return s
}

func (s *GetEndpointSwitchTaskRequest) SetUserId(v string) *GetEndpointSwitchTaskRequest {
	s.UserId = &v
	return s
}

func (s *GetEndpointSwitchTaskRequest) SetTaskId(v string) *GetEndpointSwitchTaskRequest {
	s.TaskId = &v
	return s
}

type GetEndpointSwitchTaskResponse struct {
	Code      *string                            `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                            `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *string                            `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Synchro   *string                            `json:"Synchro,omitempty" xml:"Synchro,omitempty" require:"true"`
	Data      *GetEndpointSwitchTaskResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetEndpointSwitchTaskResponse) String() string {
	return tea.Prettify(s)
}

func (s GetEndpointSwitchTaskResponse) GoString() string {
	return s.String()
}

func (s *GetEndpointSwitchTaskResponse) SetCode(v string) *GetEndpointSwitchTaskResponse {
	s.Code = &v
	return s
}

func (s *GetEndpointSwitchTaskResponse) SetMessage(v string) *GetEndpointSwitchTaskResponse {
	s.Message = &v
	return s
}

func (s *GetEndpointSwitchTaskResponse) SetRequestId(v string) *GetEndpointSwitchTaskResponse {
	s.RequestId = &v
	return s
}

func (s *GetEndpointSwitchTaskResponse) SetSuccess(v string) *GetEndpointSwitchTaskResponse {
	s.Success = &v
	return s
}

func (s *GetEndpointSwitchTaskResponse) SetSynchro(v string) *GetEndpointSwitchTaskResponse {
	s.Synchro = &v
	return s
}

func (s *GetEndpointSwitchTaskResponse) SetData(v *GetEndpointSwitchTaskResponseData) *GetEndpointSwitchTaskResponse {
	s.Data = v
	return s
}

type GetEndpointSwitchTaskResponseData struct {
	AccountId *string `json:"AccountId,omitempty" xml:"AccountId,omitempty" require:"true"`
	DbLinkId  *int64  `json:"DbLinkId,omitempty" xml:"DbLinkId,omitempty" require:"true"`
	TaskId    *string `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
	Status    *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	OriUuid   *string `json:"OriUuid,omitempty" xml:"OriUuid,omitempty" require:"true"`
	Uuid      *string `json:"Uuid,omitempty" xml:"Uuid,omitempty" require:"true"`
	ErrMsg    *string `json:"ErrMsg,omitempty" xml:"ErrMsg,omitempty" require:"true"`
}

func (s GetEndpointSwitchTaskResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetEndpointSwitchTaskResponseData) GoString() string {
	return s.String()
}

func (s *GetEndpointSwitchTaskResponseData) SetAccountId(v string) *GetEndpointSwitchTaskResponseData {
	s.AccountId = &v
	return s
}

func (s *GetEndpointSwitchTaskResponseData) SetDbLinkId(v int64) *GetEndpointSwitchTaskResponseData {
	s.DbLinkId = &v
	return s
}

func (s *GetEndpointSwitchTaskResponseData) SetTaskId(v string) *GetEndpointSwitchTaskResponseData {
	s.TaskId = &v
	return s
}

func (s *GetEndpointSwitchTaskResponseData) SetStatus(v string) *GetEndpointSwitchTaskResponseData {
	s.Status = &v
	return s
}

func (s *GetEndpointSwitchTaskResponseData) SetOriUuid(v string) *GetEndpointSwitchTaskResponseData {
	s.OriUuid = &v
	return s
}

func (s *GetEndpointSwitchTaskResponseData) SetUuid(v string) *GetEndpointSwitchTaskResponseData {
	s.Uuid = &v
	return s
}

func (s *GetEndpointSwitchTaskResponseData) SetErrMsg(v string) *GetEndpointSwitchTaskResponseData {
	s.ErrMsg = &v
	return s
}

type GetHDMAliyunResourceSyncResultRequest struct {
	Uid       *string `json:"Uid,omitempty" xml:"Uid,omitempty"`
	AccessKey *string `json:"accessKey,omitempty" xml:"accessKey,omitempty"`
	Signature *string `json:"signature,omitempty" xml:"signature,omitempty"`
	Timestamp *string `json:"timestamp,omitempty" xml:"timestamp,omitempty"`
	Context   *string `json:"__context,omitempty" xml:"__context,omitempty"`
	SkipAuth  *string `json:"skipAuth,omitempty" xml:"skipAuth,omitempty"`
	UserId    *string `json:"UserId,omitempty" xml:"UserId,omitempty"`
	TaskId    *string `json:"TaskId,omitempty" xml:"TaskId,omitempty"`
}

func (s GetHDMAliyunResourceSyncResultRequest) String() string {
	return tea.Prettify(s)
}

func (s GetHDMAliyunResourceSyncResultRequest) GoString() string {
	return s.String()
}

func (s *GetHDMAliyunResourceSyncResultRequest) SetUid(v string) *GetHDMAliyunResourceSyncResultRequest {
	s.Uid = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultRequest) SetAccessKey(v string) *GetHDMAliyunResourceSyncResultRequest {
	s.AccessKey = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultRequest) SetSignature(v string) *GetHDMAliyunResourceSyncResultRequest {
	s.Signature = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultRequest) SetTimestamp(v string) *GetHDMAliyunResourceSyncResultRequest {
	s.Timestamp = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultRequest) SetContext(v string) *GetHDMAliyunResourceSyncResultRequest {
	s.Context = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultRequest) SetSkipAuth(v string) *GetHDMAliyunResourceSyncResultRequest {
	s.SkipAuth = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultRequest) SetUserId(v string) *GetHDMAliyunResourceSyncResultRequest {
	s.UserId = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultRequest) SetTaskId(v string) *GetHDMAliyunResourceSyncResultRequest {
	s.TaskId = &v
	return s
}

type GetHDMAliyunResourceSyncResultResponse struct {
	Code      *string                                     `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                                     `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *string                                     `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Synchro   *string                                     `json:"Synchro,omitempty" xml:"Synchro,omitempty" require:"true"`
	Data      *GetHDMAliyunResourceSyncResultResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetHDMAliyunResourceSyncResultResponse) String() string {
	return tea.Prettify(s)
}

func (s GetHDMAliyunResourceSyncResultResponse) GoString() string {
	return s.String()
}

func (s *GetHDMAliyunResourceSyncResultResponse) SetCode(v string) *GetHDMAliyunResourceSyncResultResponse {
	s.Code = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultResponse) SetMessage(v string) *GetHDMAliyunResourceSyncResultResponse {
	s.Message = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultResponse) SetRequestId(v string) *GetHDMAliyunResourceSyncResultResponse {
	s.RequestId = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultResponse) SetSuccess(v string) *GetHDMAliyunResourceSyncResultResponse {
	s.Success = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultResponse) SetSynchro(v string) *GetHDMAliyunResourceSyncResultResponse {
	s.Synchro = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultResponse) SetData(v *GetHDMAliyunResourceSyncResultResponseData) *GetHDMAliyunResourceSyncResultResponse {
	s.Data = v
	return s
}

type GetHDMAliyunResourceSyncResultResponseData struct {
	SyncStatus *string                                               `json:"SyncStatus,omitempty" xml:"SyncStatus,omitempty" require:"true"`
	ErrorMsg   *string                                               `json:"ErrorMsg,omitempty" xml:"ErrorMsg,omitempty" require:"true"`
	Results    *string                                               `json:"Results,omitempty" xml:"Results,omitempty" require:"true"`
	SubResults *GetHDMAliyunResourceSyncResultResponseDataSubResults `json:"SubResults,omitempty" xml:"SubResults,omitempty" require:"true" type:"Struct"`
}

func (s GetHDMAliyunResourceSyncResultResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetHDMAliyunResourceSyncResultResponseData) GoString() string {
	return s.String()
}

func (s *GetHDMAliyunResourceSyncResultResponseData) SetSyncStatus(v string) *GetHDMAliyunResourceSyncResultResponseData {
	s.SyncStatus = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultResponseData) SetErrorMsg(v string) *GetHDMAliyunResourceSyncResultResponseData {
	s.ErrorMsg = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultResponseData) SetResults(v string) *GetHDMAliyunResourceSyncResultResponseData {
	s.Results = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultResponseData) SetSubResults(v *GetHDMAliyunResourceSyncResultResponseDataSubResults) *GetHDMAliyunResourceSyncResultResponseData {
	s.SubResults = v
	return s
}

type GetHDMAliyunResourceSyncResultResponseDataSubResults struct {
	ResourceSyncSubResult []*GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult `json:"ResourceSyncSubResult,omitempty" xml:"ResourceSyncSubResult,omitempty" require:"true" type:"Repeated"`
}

func (s GetHDMAliyunResourceSyncResultResponseDataSubResults) String() string {
	return tea.Prettify(s)
}

func (s GetHDMAliyunResourceSyncResultResponseDataSubResults) GoString() string {
	return s.String()
}

func (s *GetHDMAliyunResourceSyncResultResponseDataSubResults) SetResourceSyncSubResult(v []*GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult) *GetHDMAliyunResourceSyncResultResponseDataSubResults {
	s.ResourceSyncSubResult = v
	return s
}

type GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult struct {
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	SyncCount    *int    `json:"SyncCount,omitempty" xml:"SyncCount,omitempty" require:"true"`
	Success      *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	ErrMsg       *string `json:"ErrMsg,omitempty" xml:"ErrMsg,omitempty" require:"true"`
}

func (s GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult) String() string {
	return tea.Prettify(s)
}

func (s GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult) GoString() string {
	return s.String()
}

func (s *GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult) SetResourceType(v string) *GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult {
	s.ResourceType = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult) SetSyncCount(v int) *GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult {
	s.SyncCount = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult) SetSuccess(v bool) *GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult {
	s.Success = &v
	return s
}

func (s *GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult) SetErrMsg(v string) *GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult {
	s.ErrMsg = &v
	return s
}

type AddHDMInstanceRequest struct {
	Uid           *string `json:"Uid,omitempty" xml:"Uid,omitempty"`
	AccessKey     *string `json:"accessKey,omitempty" xml:"accessKey,omitempty"`
	Signature     *string `json:"signature,omitempty" xml:"signature,omitempty"`
	Timestamp     *string `json:"timestamp,omitempty" xml:"timestamp,omitempty"`
	Context       *string `json:"__context,omitempty" xml:"__context,omitempty"`
	SkipAuth      *string `json:"skipAuth,omitempty" xml:"skipAuth,omitempty"`
	UserId        *string `json:"UserId,omitempty" xml:"UserId,omitempty"`
	InstanceArea  *string `json:"InstanceArea,omitempty" xml:"InstanceArea,omitempty"`
	InstanceId    *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty"`
	Ip            *string `json:"Ip,omitempty" xml:"Ip,omitempty"`
	Port          *string `json:"Port,omitempty" xml:"Port,omitempty"`
	Engine        *string `json:"Engine,omitempty" xml:"Engine,omitempty"`
	Username      *string `json:"Username,omitempty" xml:"Username,omitempty"`
	Password      *string `json:"Password,omitempty" xml:"Password,omitempty"`
	InstanceAlias *string `json:"InstanceAlias,omitempty" xml:"InstanceAlias,omitempty"`
	NetworkType   *string `json:"NetworkType,omitempty" xml:"NetworkType,omitempty"`
	VpcId         *string `json:"VpcId,omitempty" xml:"VpcId,omitempty"`
	Region        *string `json:"Region,omitempty" xml:"Region,omitempty"`
	FlushAccount  *string `json:"FlushAccount,omitempty" xml:"FlushAccount,omitempty"`
}

func (s AddHDMInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s AddHDMInstanceRequest) GoString() string {
	return s.String()
}

func (s *AddHDMInstanceRequest) SetUid(v string) *AddHDMInstanceRequest {
	s.Uid = &v
	return s
}

func (s *AddHDMInstanceRequest) SetAccessKey(v string) *AddHDMInstanceRequest {
	s.AccessKey = &v
	return s
}

func (s *AddHDMInstanceRequest) SetSignature(v string) *AddHDMInstanceRequest {
	s.Signature = &v
	return s
}

func (s *AddHDMInstanceRequest) SetTimestamp(v string) *AddHDMInstanceRequest {
	s.Timestamp = &v
	return s
}

func (s *AddHDMInstanceRequest) SetContext(v string) *AddHDMInstanceRequest {
	s.Context = &v
	return s
}

func (s *AddHDMInstanceRequest) SetSkipAuth(v string) *AddHDMInstanceRequest {
	s.SkipAuth = &v
	return s
}

func (s *AddHDMInstanceRequest) SetUserId(v string) *AddHDMInstanceRequest {
	s.UserId = &v
	return s
}

func (s *AddHDMInstanceRequest) SetInstanceArea(v string) *AddHDMInstanceRequest {
	s.InstanceArea = &v
	return s
}

func (s *AddHDMInstanceRequest) SetInstanceId(v string) *AddHDMInstanceRequest {
	s.InstanceId = &v
	return s
}

func (s *AddHDMInstanceRequest) SetIp(v string) *AddHDMInstanceRequest {
	s.Ip = &v
	return s
}

func (s *AddHDMInstanceRequest) SetPort(v string) *AddHDMInstanceRequest {
	s.Port = &v
	return s
}

func (s *AddHDMInstanceRequest) SetEngine(v string) *AddHDMInstanceRequest {
	s.Engine = &v
	return s
}

func (s *AddHDMInstanceRequest) SetUsername(v string) *AddHDMInstanceRequest {
	s.Username = &v
	return s
}

func (s *AddHDMInstanceRequest) SetPassword(v string) *AddHDMInstanceRequest {
	s.Password = &v
	return s
}

func (s *AddHDMInstanceRequest) SetInstanceAlias(v string) *AddHDMInstanceRequest {
	s.InstanceAlias = &v
	return s
}

func (s *AddHDMInstanceRequest) SetNetworkType(v string) *AddHDMInstanceRequest {
	s.NetworkType = &v
	return s
}

func (s *AddHDMInstanceRequest) SetVpcId(v string) *AddHDMInstanceRequest {
	s.VpcId = &v
	return s
}

func (s *AddHDMInstanceRequest) SetRegion(v string) *AddHDMInstanceRequest {
	s.Region = &v
	return s
}

func (s *AddHDMInstanceRequest) SetFlushAccount(v string) *AddHDMInstanceRequest {
	s.FlushAccount = &v
	return s
}

type AddHDMInstanceResponse struct {
	Code      *string                     `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                     `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *string                     `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Synchro   *string                     `json:"Synchro,omitempty" xml:"Synchro,omitempty" require:"true"`
	Data      *AddHDMInstanceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s AddHDMInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s AddHDMInstanceResponse) GoString() string {
	return s.String()
}

func (s *AddHDMInstanceResponse) SetCode(v string) *AddHDMInstanceResponse {
	s.Code = &v
	return s
}

func (s *AddHDMInstanceResponse) SetMessage(v string) *AddHDMInstanceResponse {
	s.Message = &v
	return s
}

func (s *AddHDMInstanceResponse) SetRequestId(v string) *AddHDMInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *AddHDMInstanceResponse) SetSuccess(v string) *AddHDMInstanceResponse {
	s.Success = &v
	return s
}

func (s *AddHDMInstanceResponse) SetSynchro(v string) *AddHDMInstanceResponse {
	s.Synchro = &v
	return s
}

func (s *AddHDMInstanceResponse) SetData(v *AddHDMInstanceResponseData) *AddHDMInstanceResponse {
	s.Data = v
	return s
}

type AddHDMInstanceResponseData struct {
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	VpcId      *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	Ip         *string `json:"Ip,omitempty" xml:"Ip,omitempty" require:"true"`
	Port       *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
	Uuid       *string `json:"Uuid,omitempty" xml:"Uuid,omitempty" require:"true"`
	Role       *string `json:"Role,omitempty" xml:"Role,omitempty" require:"true"`
	Code       *int    `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Error      *string `json:"Error,omitempty" xml:"Error,omitempty" require:"true"`
	TenantId   *string `json:"TenantId,omitempty" xml:"TenantId,omitempty" require:"true"`
	OwnerId    *string `json:"OwnerId,omitempty" xml:"OwnerId,omitempty" require:"true"`
	Token      *string `json:"Token,omitempty" xml:"Token,omitempty" require:"true"`
	CallerUid  *string `json:"CallerUid,omitempty" xml:"CallerUid,omitempty" require:"true"`
}

func (s AddHDMInstanceResponseData) String() string {
	return tea.Prettify(s)
}

func (s AddHDMInstanceResponseData) GoString() string {
	return s.String()
}

func (s *AddHDMInstanceResponseData) SetInstanceId(v string) *AddHDMInstanceResponseData {
	s.InstanceId = &v
	return s
}

func (s *AddHDMInstanceResponseData) SetVpcId(v string) *AddHDMInstanceResponseData {
	s.VpcId = &v
	return s
}

func (s *AddHDMInstanceResponseData) SetIp(v string) *AddHDMInstanceResponseData {
	s.Ip = &v
	return s
}

func (s *AddHDMInstanceResponseData) SetPort(v int) *AddHDMInstanceResponseData {
	s.Port = &v
	return s
}

func (s *AddHDMInstanceResponseData) SetUuid(v string) *AddHDMInstanceResponseData {
	s.Uuid = &v
	return s
}

func (s *AddHDMInstanceResponseData) SetRole(v string) *AddHDMInstanceResponseData {
	s.Role = &v
	return s
}

func (s *AddHDMInstanceResponseData) SetCode(v int) *AddHDMInstanceResponseData {
	s.Code = &v
	return s
}

func (s *AddHDMInstanceResponseData) SetError(v string) *AddHDMInstanceResponseData {
	s.Error = &v
	return s
}

func (s *AddHDMInstanceResponseData) SetTenantId(v string) *AddHDMInstanceResponseData {
	s.TenantId = &v
	return s
}

func (s *AddHDMInstanceResponseData) SetOwnerId(v string) *AddHDMInstanceResponseData {
	s.OwnerId = &v
	return s
}

func (s *AddHDMInstanceResponseData) SetToken(v string) *AddHDMInstanceResponseData {
	s.Token = &v
	return s
}

func (s *AddHDMInstanceResponseData) SetCallerUid(v string) *AddHDMInstanceResponseData {
	s.CallerUid = &v
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
	client.Endpoint, _err = client.GetEndpoint(tea.String("das"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) DescribeDiagnosticReportListWithOptions(request *DescribeDiagnosticReportListRequest, runtime *util.RuntimeOptions) (_result *DescribeDiagnosticReportListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDiagnosticReportListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDiagnosticReportList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDiagnosticReportList(request *DescribeDiagnosticReportListRequest) (_result *DescribeDiagnosticReportListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDiagnosticReportListResponse{}
	_body, _err := client.DescribeDiagnosticReportListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateDiagnosticReportWithOptions(request *CreateDiagnosticReportRequest, runtime *util.RuntimeOptions) (_result *CreateDiagnosticReportResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateDiagnosticReportResponse{}
	_body, _err := client.DoRequest(tea.String("CreateDiagnosticReport"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateDiagnosticReport(request *CreateDiagnosticReportRequest) (_result *CreateDiagnosticReportResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateDiagnosticReportResponse{}
	_body, _err := client.CreateDiagnosticReportWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AccessHDMInstanceWithOptions(request *AccessHDMInstanceRequest, runtime *util.RuntimeOptions) (_result *AccessHDMInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AccessHDMInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("AccessHDMInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AccessHDMInstance(request *AccessHDMInstanceRequest) (_result *AccessHDMInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AccessHDMInstanceResponse{}
	_body, _err := client.AccessHDMInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SyncHDMAliyunResourceWithOptions(request *SyncHDMAliyunResourceRequest, runtime *util.RuntimeOptions) (_result *SyncHDMAliyunResourceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SyncHDMAliyunResourceResponse{}
	_body, _err := client.DoRequest(tea.String("SyncHDMAliyunResource"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SyncHDMAliyunResource(request *SyncHDMAliyunResourceRequest) (_result *SyncHDMAliyunResourceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SyncHDMAliyunResourceResponse{}
	_body, _err := client.SyncHDMAliyunResourceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetHDMLastAliyunResourceSyncResultWithOptions(request *GetHDMLastAliyunResourceSyncResultRequest, runtime *util.RuntimeOptions) (_result *GetHDMLastAliyunResourceSyncResultResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetHDMLastAliyunResourceSyncResultResponse{}
	_body, _err := client.DoRequest(tea.String("GetHDMLastAliyunResourceSyncResult"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetHDMLastAliyunResourceSyncResult(request *GetHDMLastAliyunResourceSyncResultRequest) (_result *GetHDMLastAliyunResourceSyncResultResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetHDMLastAliyunResourceSyncResultResponse{}
	_body, _err := client.GetHDMLastAliyunResourceSyncResultWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetEndpointSwitchTaskWithOptions(request *GetEndpointSwitchTaskRequest, runtime *util.RuntimeOptions) (_result *GetEndpointSwitchTaskResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetEndpointSwitchTaskResponse{}
	_body, _err := client.DoRequest(tea.String("GetEndpointSwitchTask"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetEndpointSwitchTask(request *GetEndpointSwitchTaskRequest) (_result *GetEndpointSwitchTaskResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetEndpointSwitchTaskResponse{}
	_body, _err := client.GetEndpointSwitchTaskWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetHDMAliyunResourceSyncResultWithOptions(request *GetHDMAliyunResourceSyncResultRequest, runtime *util.RuntimeOptions) (_result *GetHDMAliyunResourceSyncResultResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetHDMAliyunResourceSyncResultResponse{}
	_body, _err := client.DoRequest(tea.String("GetHDMAliyunResourceSyncResult"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetHDMAliyunResourceSyncResult(request *GetHDMAliyunResourceSyncResultRequest) (_result *GetHDMAliyunResourceSyncResultResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetHDMAliyunResourceSyncResultResponse{}
	_body, _err := client.GetHDMAliyunResourceSyncResultWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddHDMInstanceWithOptions(request *AddHDMInstanceRequest, runtime *util.RuntimeOptions) (_result *AddHDMInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddHDMInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("AddHDMInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-01-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddHDMInstance(request *AddHDMInstanceRequest) (_result *AddHDMInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddHDMInstanceResponse{}
	_body, _err := client.AddHDMInstanceWithOptions(request, runtime)
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
