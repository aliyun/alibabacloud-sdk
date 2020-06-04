// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type ListRobotTaskCallsRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	PageNo               *int    `json:"PageNo" xml:"PageNo"`
	PageSize             *int    `json:"PageSize" xml:"PageSize"`
	TaskId               *string `json:"TaskId" xml:"TaskId"`
	DurationFrom         *string `json:"DurationFrom" xml:"DurationFrom"`
	DurationTo           *string `json:"DurationTo" xml:"DurationTo"`
	DialogCountFrom      *string `json:"DialogCountFrom" xml:"DialogCountFrom"`
	DialogCountTo        *string `json:"DialogCountTo" xml:"DialogCountTo"`
	HangupDirection      *string `json:"HangupDirection" xml:"HangupDirection"`
	CallResult           *string `json:"CallResult" xml:"CallResult"`
	Called               *string `json:"Called" xml:"Called"`
}

func (s ListRobotTaskCallsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListRobotTaskCallsRequest) GoString() string {
	return s.String()
}

func (s *ListRobotTaskCallsRequest) SetAccessKeyId(v string) *ListRobotTaskCallsRequest {
	s.AccessKeyId = &v
	return s
}

func (s *ListRobotTaskCallsRequest) SetOwnerId(v int64) *ListRobotTaskCallsRequest {
	s.OwnerId = &v
	return s
}

func (s *ListRobotTaskCallsRequest) SetResourceOwnerAccount(v string) *ListRobotTaskCallsRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *ListRobotTaskCallsRequest) SetResourceOwnerId(v int64) *ListRobotTaskCallsRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *ListRobotTaskCallsRequest) SetPageNo(v int) *ListRobotTaskCallsRequest {
	s.PageNo = &v
	return s
}

func (s *ListRobotTaskCallsRequest) SetPageSize(v int) *ListRobotTaskCallsRequest {
	s.PageSize = &v
	return s
}

func (s *ListRobotTaskCallsRequest) SetTaskId(v string) *ListRobotTaskCallsRequest {
	s.TaskId = &v
	return s
}

func (s *ListRobotTaskCallsRequest) SetDurationFrom(v string) *ListRobotTaskCallsRequest {
	s.DurationFrom = &v
	return s
}

func (s *ListRobotTaskCallsRequest) SetDurationTo(v string) *ListRobotTaskCallsRequest {
	s.DurationTo = &v
	return s
}

func (s *ListRobotTaskCallsRequest) SetDialogCountFrom(v string) *ListRobotTaskCallsRequest {
	s.DialogCountFrom = &v
	return s
}

func (s *ListRobotTaskCallsRequest) SetDialogCountTo(v string) *ListRobotTaskCallsRequest {
	s.DialogCountTo = &v
	return s
}

func (s *ListRobotTaskCallsRequest) SetHangupDirection(v string) *ListRobotTaskCallsRequest {
	s.HangupDirection = &v
	return s
}

func (s *ListRobotTaskCallsRequest) SetCallResult(v string) *ListRobotTaskCallsRequest {
	s.CallResult = &v
	return s
}

func (s *ListRobotTaskCallsRequest) SetCalled(v string) *ListRobotTaskCallsRequest {
	s.Called = &v
	return s
}

type ListRobotTaskCallsResponse struct {
	RequestId  *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data       *string `json:"Data" xml:"Data" require:"true"`
	PageSize   *string `json:"PageSize" xml:"PageSize" require:"true"`
	PageNo     *string `json:"PageNo" xml:"PageNo" require:"true"`
	TotalCount *string `json:"TotalCount" xml:"TotalCount" require:"true"`
	Code       *string `json:"Code" xml:"Code" require:"true"`
	Message    *string `json:"Message" xml:"Message" require:"true"`
}

func (s ListRobotTaskCallsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListRobotTaskCallsResponse) GoString() string {
	return s.String()
}

func (s *ListRobotTaskCallsResponse) SetRequestId(v string) *ListRobotTaskCallsResponse {
	s.RequestId = &v
	return s
}

func (s *ListRobotTaskCallsResponse) SetData(v string) *ListRobotTaskCallsResponse {
	s.Data = &v
	return s
}

func (s *ListRobotTaskCallsResponse) SetPageSize(v string) *ListRobotTaskCallsResponse {
	s.PageSize = &v
	return s
}

func (s *ListRobotTaskCallsResponse) SetPageNo(v string) *ListRobotTaskCallsResponse {
	s.PageNo = &v
	return s
}

func (s *ListRobotTaskCallsResponse) SetTotalCount(v string) *ListRobotTaskCallsResponse {
	s.TotalCount = &v
	return s
}

func (s *ListRobotTaskCallsResponse) SetCode(v string) *ListRobotTaskCallsResponse {
	s.Code = &v
	return s
}

func (s *ListRobotTaskCallsResponse) SetMessage(v string) *ListRobotTaskCallsResponse {
	s.Message = &v
	return s
}

type DoRtcNumberAuthRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	PhoneNumber          *string `json:"PhoneNumber" xml:"PhoneNumber" require:"true"`
}

func (s DoRtcNumberAuthRequest) String() string {
	return tea.Prettify(s)
}

func (s DoRtcNumberAuthRequest) GoString() string {
	return s.String()
}

func (s *DoRtcNumberAuthRequest) SetAccessKeyId(v string) *DoRtcNumberAuthRequest {
	s.AccessKeyId = &v
	return s
}

func (s *DoRtcNumberAuthRequest) SetOwnerId(v int64) *DoRtcNumberAuthRequest {
	s.OwnerId = &v
	return s
}

func (s *DoRtcNumberAuthRequest) SetResourceOwnerAccount(v string) *DoRtcNumberAuthRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *DoRtcNumberAuthRequest) SetResourceOwnerId(v int64) *DoRtcNumberAuthRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *DoRtcNumberAuthRequest) SetPhoneNumber(v string) *DoRtcNumberAuthRequest {
	s.PhoneNumber = &v
	return s
}

type DoRtcNumberAuthResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Module    *string `json:"Module" xml:"Module" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s DoRtcNumberAuthResponse) String() string {
	return tea.Prettify(s)
}

func (s DoRtcNumberAuthResponse) GoString() string {
	return s.String()
}

func (s *DoRtcNumberAuthResponse) SetRequestId(v string) *DoRtcNumberAuthResponse {
	s.RequestId = &v
	return s
}

func (s *DoRtcNumberAuthResponse) SetModule(v string) *DoRtcNumberAuthResponse {
	s.Module = &v
	return s
}

func (s *DoRtcNumberAuthResponse) SetCode(v string) *DoRtcNumberAuthResponse {
	s.Code = &v
	return s
}

func (s *DoRtcNumberAuthResponse) SetMessage(v string) *DoRtcNumberAuthResponse {
	s.Message = &v
	return s
}

type UndoRtcNumberAuthRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	PhoneNumber          *string `json:"PhoneNumber" xml:"PhoneNumber" require:"true"`
}

func (s UndoRtcNumberAuthRequest) String() string {
	return tea.Prettify(s)
}

func (s UndoRtcNumberAuthRequest) GoString() string {
	return s.String()
}

func (s *UndoRtcNumberAuthRequest) SetAccessKeyId(v string) *UndoRtcNumberAuthRequest {
	s.AccessKeyId = &v
	return s
}

func (s *UndoRtcNumberAuthRequest) SetOwnerId(v int64) *UndoRtcNumberAuthRequest {
	s.OwnerId = &v
	return s
}

func (s *UndoRtcNumberAuthRequest) SetResourceOwnerAccount(v string) *UndoRtcNumberAuthRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *UndoRtcNumberAuthRequest) SetResourceOwnerId(v int64) *UndoRtcNumberAuthRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *UndoRtcNumberAuthRequest) SetPhoneNumber(v string) *UndoRtcNumberAuthRequest {
	s.PhoneNumber = &v
	return s
}

type UndoRtcNumberAuthResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Module    *string `json:"Module" xml:"Module" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s UndoRtcNumberAuthResponse) String() string {
	return tea.Prettify(s)
}

func (s UndoRtcNumberAuthResponse) GoString() string {
	return s.String()
}

func (s *UndoRtcNumberAuthResponse) SetRequestId(v string) *UndoRtcNumberAuthResponse {
	s.RequestId = &v
	return s
}

func (s *UndoRtcNumberAuthResponse) SetModule(v string) *UndoRtcNumberAuthResponse {
	s.Module = &v
	return s
}

func (s *UndoRtcNumberAuthResponse) SetCode(v string) *UndoRtcNumberAuthResponse {
	s.Code = &v
	return s
}

func (s *UndoRtcNumberAuthResponse) SetMessage(v string) *UndoRtcNumberAuthResponse {
	s.Message = &v
	return s
}

type QueryRtcNumberAuthStatusRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	PhoneNumber          *string `json:"PhoneNumber" xml:"PhoneNumber" require:"true"`
}

func (s QueryRtcNumberAuthStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryRtcNumberAuthStatusRequest) GoString() string {
	return s.String()
}

func (s *QueryRtcNumberAuthStatusRequest) SetAccessKeyId(v string) *QueryRtcNumberAuthStatusRequest {
	s.AccessKeyId = &v
	return s
}

func (s *QueryRtcNumberAuthStatusRequest) SetOwnerId(v int64) *QueryRtcNumberAuthStatusRequest {
	s.OwnerId = &v
	return s
}

func (s *QueryRtcNumberAuthStatusRequest) SetResourceOwnerAccount(v string) *QueryRtcNumberAuthStatusRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *QueryRtcNumberAuthStatusRequest) SetResourceOwnerId(v int64) *QueryRtcNumberAuthStatusRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *QueryRtcNumberAuthStatusRequest) SetPhoneNumber(v string) *QueryRtcNumberAuthStatusRequest {
	s.PhoneNumber = &v
	return s
}

type QueryRtcNumberAuthStatusResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Module    *string `json:"Module" xml:"Module" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s QueryRtcNumberAuthStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryRtcNumberAuthStatusResponse) GoString() string {
	return s.String()
}

func (s *QueryRtcNumberAuthStatusResponse) SetRequestId(v string) *QueryRtcNumberAuthStatusResponse {
	s.RequestId = &v
	return s
}

func (s *QueryRtcNumberAuthStatusResponse) SetModule(v string) *QueryRtcNumberAuthStatusResponse {
	s.Module = &v
	return s
}

func (s *QueryRtcNumberAuthStatusResponse) SetCode(v string) *QueryRtcNumberAuthStatusResponse {
	s.Code = &v
	return s
}

func (s *QueryRtcNumberAuthStatusResponse) SetMessage(v string) *QueryRtcNumberAuthStatusResponse {
	s.Message = &v
	return s
}

type ListOrderedNumbersRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	ProdCode             *string `json:"ProdCode" xml:"ProdCode"`
}

func (s ListOrderedNumbersRequest) String() string {
	return tea.Prettify(s)
}

func (s ListOrderedNumbersRequest) GoString() string {
	return s.String()
}

func (s *ListOrderedNumbersRequest) SetAccessKeyId(v string) *ListOrderedNumbersRequest {
	s.AccessKeyId = &v
	return s
}

func (s *ListOrderedNumbersRequest) SetOwnerId(v int64) *ListOrderedNumbersRequest {
	s.OwnerId = &v
	return s
}

func (s *ListOrderedNumbersRequest) SetResourceOwnerAccount(v string) *ListOrderedNumbersRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *ListOrderedNumbersRequest) SetResourceOwnerId(v int64) *ListOrderedNumbersRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *ListOrderedNumbersRequest) SetProdCode(v string) *ListOrderedNumbersRequest {
	s.ProdCode = &v
	return s
}

type ListOrderedNumbersResponse struct {
	RequestId *string   `json:"RequestId" xml:"RequestId" require:"true"`
	Code      *string   `json:"Code" xml:"Code" require:"true"`
	Message   *string   `json:"Message" xml:"Message" require:"true"`
	Numbers   []*string `json:"Numbers" xml:"Numbers" require:"true" type:"Repeated"`
}

func (s ListOrderedNumbersResponse) String() string {
	return tea.Prettify(s)
}

func (s ListOrderedNumbersResponse) GoString() string {
	return s.String()
}

func (s *ListOrderedNumbersResponse) SetRequestId(v string) *ListOrderedNumbersResponse {
	s.RequestId = &v
	return s
}

func (s *ListOrderedNumbersResponse) SetCode(v string) *ListOrderedNumbersResponse {
	s.Code = &v
	return s
}

func (s *ListOrderedNumbersResponse) SetMessage(v string) *ListOrderedNumbersResponse {
	s.Message = &v
	return s
}

func (s *ListOrderedNumbersResponse) SetNumbers(v []*string) *ListOrderedNumbersResponse {
	s.Numbers = v
	return s
}

type StartMicroOutboundRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	ProdCode             *string `json:"ProdCode" xml:"ProdCode"`
	AccountType          *string `json:"AccountType" xml:"AccountType"`
	AccountId            *string `json:"AccountId" xml:"AccountId"`
	CommandCode          *string `json:"CommandCode" xml:"CommandCode"`
	CallingNumber        *string `json:"CallingNumber" xml:"CallingNumber"`
	CalledNumber         *string `json:"CalledNumber" xml:"CalledNumber"`
	ExtInfo              *string `json:"ExtInfo" xml:"ExtInfo"`
	AppName              *string `json:"AppName" xml:"AppName"`
}

func (s StartMicroOutboundRequest) String() string {
	return tea.Prettify(s)
}

func (s StartMicroOutboundRequest) GoString() string {
	return s.String()
}

func (s *StartMicroOutboundRequest) SetAccessKeyId(v string) *StartMicroOutboundRequest {
	s.AccessKeyId = &v
	return s
}

func (s *StartMicroOutboundRequest) SetOwnerId(v int64) *StartMicroOutboundRequest {
	s.OwnerId = &v
	return s
}

func (s *StartMicroOutboundRequest) SetResourceOwnerAccount(v string) *StartMicroOutboundRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *StartMicroOutboundRequest) SetResourceOwnerId(v int64) *StartMicroOutboundRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *StartMicroOutboundRequest) SetProdCode(v string) *StartMicroOutboundRequest {
	s.ProdCode = &v
	return s
}

func (s *StartMicroOutboundRequest) SetAccountType(v string) *StartMicroOutboundRequest {
	s.AccountType = &v
	return s
}

func (s *StartMicroOutboundRequest) SetAccountId(v string) *StartMicroOutboundRequest {
	s.AccountId = &v
	return s
}

func (s *StartMicroOutboundRequest) SetCommandCode(v string) *StartMicroOutboundRequest {
	s.CommandCode = &v
	return s
}

func (s *StartMicroOutboundRequest) SetCallingNumber(v string) *StartMicroOutboundRequest {
	s.CallingNumber = &v
	return s
}

func (s *StartMicroOutboundRequest) SetCalledNumber(v string) *StartMicroOutboundRequest {
	s.CalledNumber = &v
	return s
}

func (s *StartMicroOutboundRequest) SetExtInfo(v string) *StartMicroOutboundRequest {
	s.ExtInfo = &v
	return s
}

func (s *StartMicroOutboundRequest) SetAppName(v string) *StartMicroOutboundRequest {
	s.AppName = &v
	return s
}

type StartMicroOutboundResponse struct {
	RequestId        *string `json:"RequestId" xml:"RequestId" require:"true"`
	Code             *string `json:"Code" xml:"Code" require:"true"`
	Message          *string `json:"Message" xml:"Message" require:"true"`
	CustomerInfo     *string `json:"CustomerInfo" xml:"CustomerInfo" require:"true"`
	InvokeCmdId      *string `json:"InvokeCmdId" xml:"InvokeCmdId" require:"true"`
	InvokeCreateTime *string `json:"InvokeCreateTime" xml:"InvokeCreateTime" require:"true"`
}

func (s StartMicroOutboundResponse) String() string {
	return tea.Prettify(s)
}

func (s StartMicroOutboundResponse) GoString() string {
	return s.String()
}

func (s *StartMicroOutboundResponse) SetRequestId(v string) *StartMicroOutboundResponse {
	s.RequestId = &v
	return s
}

func (s *StartMicroOutboundResponse) SetCode(v string) *StartMicroOutboundResponse {
	s.Code = &v
	return s
}

func (s *StartMicroOutboundResponse) SetMessage(v string) *StartMicroOutboundResponse {
	s.Message = &v
	return s
}

func (s *StartMicroOutboundResponse) SetCustomerInfo(v string) *StartMicroOutboundResponse {
	s.CustomerInfo = &v
	return s
}

func (s *StartMicroOutboundResponse) SetInvokeCmdId(v string) *StartMicroOutboundResponse {
	s.InvokeCmdId = &v
	return s
}

func (s *StartMicroOutboundResponse) SetInvokeCreateTime(v string) *StartMicroOutboundResponse {
	s.InvokeCreateTime = &v
	return s
}

type ListOutboundStrategiesRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	ProdCode             *string `json:"ProdCode" xml:"ProdCode"`
	BuId                 *int64  `json:"BuId" xml:"BuId"`
	Keyword              *string `json:"Keyword" xml:"Keyword"`
}

func (s ListOutboundStrategiesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListOutboundStrategiesRequest) GoString() string {
	return s.String()
}

func (s *ListOutboundStrategiesRequest) SetAccessKeyId(v string) *ListOutboundStrategiesRequest {
	s.AccessKeyId = &v
	return s
}

func (s *ListOutboundStrategiesRequest) SetOwnerId(v int64) *ListOutboundStrategiesRequest {
	s.OwnerId = &v
	return s
}

func (s *ListOutboundStrategiesRequest) SetResourceOwnerAccount(v string) *ListOutboundStrategiesRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *ListOutboundStrategiesRequest) SetResourceOwnerId(v int64) *ListOutboundStrategiesRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *ListOutboundStrategiesRequest) SetProdCode(v string) *ListOutboundStrategiesRequest {
	s.ProdCode = &v
	return s
}

func (s *ListOutboundStrategiesRequest) SetBuId(v int64) *ListOutboundStrategiesRequest {
	s.BuId = &v
	return s
}

func (s *ListOutboundStrategiesRequest) SetKeyword(v string) *ListOutboundStrategiesRequest {
	s.Keyword = &v
	return s
}

type ListOutboundStrategiesResponse struct {
	RequestId          *string                                             `json:"RequestId" xml:"RequestId" require:"true"`
	Code               *string                                             `json:"Code" xml:"Code" require:"true"`
	Message            *string                                             `json:"Message" xml:"Message" require:"true"`
	OutboundStrategies []*ListOutboundStrategiesResponseOutboundStrategies `json:"OutboundStrategies" xml:"OutboundStrategies" require:"true" type:"Repeated"`
}

func (s ListOutboundStrategiesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListOutboundStrategiesResponse) GoString() string {
	return s.String()
}

func (s *ListOutboundStrategiesResponse) SetRequestId(v string) *ListOutboundStrategiesResponse {
	s.RequestId = &v
	return s
}

func (s *ListOutboundStrategiesResponse) SetCode(v string) *ListOutboundStrategiesResponse {
	s.Code = &v
	return s
}

func (s *ListOutboundStrategiesResponse) SetMessage(v string) *ListOutboundStrategiesResponse {
	s.Message = &v
	return s
}

func (s *ListOutboundStrategiesResponse) SetOutboundStrategies(v []*ListOutboundStrategiesResponseOutboundStrategies) *ListOutboundStrategiesResponse {
	s.OutboundStrategies = v
	return s
}

type ListOutboundStrategiesResponseOutboundStrategies struct {
	Id                 *int64  `json:"Id" xml:"Id" require:"true"`
	GmtCreateStr       *string `json:"GmtCreateStr" xml:"GmtCreateStr" require:"true"`
	GmtModifiedStr     *string `json:"GmtModifiedStr" xml:"GmtModifiedStr" require:"true"`
	CreatorId          *int64  `json:"CreatorId" xml:"CreatorId" require:"true"`
	CreatorName        *string `json:"CreatorName" xml:"CreatorName" require:"true"`
	ModifierId         *int64  `json:"ModifierId" xml:"ModifierId" require:"true"`
	ModifierName       *string `json:"ModifierName" xml:"ModifierName" require:"true"`
	BuId               *int64  `json:"BuId" xml:"BuId" require:"true"`
	DepartmentId       *int64  `json:"DepartmentId" xml:"DepartmentId" require:"true"`
	Name               *string `json:"name" xml:"name" require:"true"`
	NumType            *int    `json:"NumType" xml:"NumType" require:"true"`
	OutboundNum        *string `json:"OutboundNum" xml:"OutboundNum" require:"true"`
	RobotType          *int    `json:"RobotType" xml:"RobotType" require:"true"`
	RobotId            *string `json:"RobotId" xml:"RobotId" require:"true"`
	RobotName          *string `json:"RobotName" xml:"RobotName" require:"true"`
	ResourceAllocation *int    `json:"ResourceAllocation" xml:"ResourceAllocation" require:"true"`
	SceneName          *string `json:"SceneName" xml:"SceneName" require:"true"`
	RuleCode           *int64  `json:"RuleCode" xml:"RuleCode" require:"true"`
	Status             *int    `json:"Status" xml:"Status" require:"true"`
	ExtAttr            *string `json:"ExtAttr" xml:"ExtAttr" require:"true"`
	Process            *int    `json:"Process" xml:"Process" require:"true"`
	SuccessRate        *int    `json:"SuccessRate" xml:"SuccessRate" require:"true"`
}

func (s ListOutboundStrategiesResponseOutboundStrategies) String() string {
	return tea.Prettify(s)
}

func (s ListOutboundStrategiesResponseOutboundStrategies) GoString() string {
	return s.String()
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetId(v int64) *ListOutboundStrategiesResponseOutboundStrategies {
	s.Id = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetGmtCreateStr(v string) *ListOutboundStrategiesResponseOutboundStrategies {
	s.GmtCreateStr = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetGmtModifiedStr(v string) *ListOutboundStrategiesResponseOutboundStrategies {
	s.GmtModifiedStr = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetCreatorId(v int64) *ListOutboundStrategiesResponseOutboundStrategies {
	s.CreatorId = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetCreatorName(v string) *ListOutboundStrategiesResponseOutboundStrategies {
	s.CreatorName = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetModifierId(v int64) *ListOutboundStrategiesResponseOutboundStrategies {
	s.ModifierId = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetModifierName(v string) *ListOutboundStrategiesResponseOutboundStrategies {
	s.ModifierName = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetBuId(v int64) *ListOutboundStrategiesResponseOutboundStrategies {
	s.BuId = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetDepartmentId(v int64) *ListOutboundStrategiesResponseOutboundStrategies {
	s.DepartmentId = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetName(v string) *ListOutboundStrategiesResponseOutboundStrategies {
	s.Name = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetNumType(v int) *ListOutboundStrategiesResponseOutboundStrategies {
	s.NumType = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetOutboundNum(v string) *ListOutboundStrategiesResponseOutboundStrategies {
	s.OutboundNum = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetRobotType(v int) *ListOutboundStrategiesResponseOutboundStrategies {
	s.RobotType = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetRobotId(v string) *ListOutboundStrategiesResponseOutboundStrategies {
	s.RobotId = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetRobotName(v string) *ListOutboundStrategiesResponseOutboundStrategies {
	s.RobotName = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetResourceAllocation(v int) *ListOutboundStrategiesResponseOutboundStrategies {
	s.ResourceAllocation = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetSceneName(v string) *ListOutboundStrategiesResponseOutboundStrategies {
	s.SceneName = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetRuleCode(v int64) *ListOutboundStrategiesResponseOutboundStrategies {
	s.RuleCode = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetStatus(v int) *ListOutboundStrategiesResponseOutboundStrategies {
	s.Status = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetExtAttr(v string) *ListOutboundStrategiesResponseOutboundStrategies {
	s.ExtAttr = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetProcess(v int) *ListOutboundStrategiesResponseOutboundStrategies {
	s.Process = &v
	return s
}

func (s *ListOutboundStrategiesResponseOutboundStrategies) SetSuccessRate(v int) *ListOutboundStrategiesResponseOutboundStrategies {
	s.SuccessRate = &v
	return s
}

type DescribeRecordDataRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	ProdCode             *string `json:"ProdCode" xml:"ProdCode"`
	AccountType          *string `json:"AccountType" xml:"AccountType"`
	AccountId            *string `json:"AccountId" xml:"AccountId"`
	Acid                 *string `json:"Acid" xml:"Acid"`
	SecLevel             *int    `json:"SecLevel" xml:"SecLevel"`
}

func (s DescribeRecordDataRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeRecordDataRequest) GoString() string {
	return s.String()
}

func (s *DescribeRecordDataRequest) SetAccessKeyId(v string) *DescribeRecordDataRequest {
	s.AccessKeyId = &v
	return s
}

func (s *DescribeRecordDataRequest) SetOwnerId(v int64) *DescribeRecordDataRequest {
	s.OwnerId = &v
	return s
}

func (s *DescribeRecordDataRequest) SetResourceOwnerAccount(v string) *DescribeRecordDataRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *DescribeRecordDataRequest) SetResourceOwnerId(v int64) *DescribeRecordDataRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *DescribeRecordDataRequest) SetProdCode(v string) *DescribeRecordDataRequest {
	s.ProdCode = &v
	return s
}

func (s *DescribeRecordDataRequest) SetAccountType(v string) *DescribeRecordDataRequest {
	s.AccountType = &v
	return s
}

func (s *DescribeRecordDataRequest) SetAccountId(v string) *DescribeRecordDataRequest {
	s.AccountId = &v
	return s
}

func (s *DescribeRecordDataRequest) SetAcid(v string) *DescribeRecordDataRequest {
	s.Acid = &v
	return s
}

func (s *DescribeRecordDataRequest) SetSecLevel(v int) *DescribeRecordDataRequest {
	s.SecLevel = &v
	return s
}

type DescribeRecordDataResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	OssLink   *string `json:"OssLink" xml:"OssLink" require:"true"`
	Acid      *string `json:"Acid" xml:"Acid" require:"true"`
	AgentId   *string `json:"AgentId" xml:"AgentId" require:"true"`
}

func (s DescribeRecordDataResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeRecordDataResponse) GoString() string {
	return s.String()
}

func (s *DescribeRecordDataResponse) SetRequestId(v string) *DescribeRecordDataResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeRecordDataResponse) SetCode(v string) *DescribeRecordDataResponse {
	s.Code = &v
	return s
}

func (s *DescribeRecordDataResponse) SetMessage(v string) *DescribeRecordDataResponse {
	s.Message = &v
	return s
}

func (s *DescribeRecordDataResponse) SetOssLink(v string) *DescribeRecordDataResponse {
	s.OssLink = &v
	return s
}

func (s *DescribeRecordDataResponse) SetAcid(v string) *DescribeRecordDataResponse {
	s.Acid = &v
	return s
}

func (s *DescribeRecordDataResponse) SetAgentId(v string) *DescribeRecordDataResponse {
	s.AgentId = &v
	return s
}

type QueryVoipNumberBindInfosRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	PhoneNumber          *string `json:"PhoneNumber" xml:"PhoneNumber"`
	VoipId               *string `json:"VoipId" xml:"VoipId"`
}

func (s QueryVoipNumberBindInfosRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryVoipNumberBindInfosRequest) GoString() string {
	return s.String()
}

func (s *QueryVoipNumberBindInfosRequest) SetAccessKeyId(v string) *QueryVoipNumberBindInfosRequest {
	s.AccessKeyId = &v
	return s
}

func (s *QueryVoipNumberBindInfosRequest) SetOwnerId(v int64) *QueryVoipNumberBindInfosRequest {
	s.OwnerId = &v
	return s
}

func (s *QueryVoipNumberBindInfosRequest) SetResourceOwnerAccount(v string) *QueryVoipNumberBindInfosRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *QueryVoipNumberBindInfosRequest) SetResourceOwnerId(v int64) *QueryVoipNumberBindInfosRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *QueryVoipNumberBindInfosRequest) SetPhoneNumber(v string) *QueryVoipNumberBindInfosRequest {
	s.PhoneNumber = &v
	return s
}

func (s *QueryVoipNumberBindInfosRequest) SetVoipId(v string) *QueryVoipNumberBindInfosRequest {
	s.VoipId = &v
	return s
}

type QueryVoipNumberBindInfosResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Module    *string `json:"Module" xml:"Module" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s QueryVoipNumberBindInfosResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryVoipNumberBindInfosResponse) GoString() string {
	return s.String()
}

func (s *QueryVoipNumberBindInfosResponse) SetRequestId(v string) *QueryVoipNumberBindInfosResponse {
	s.RequestId = &v
	return s
}

func (s *QueryVoipNumberBindInfosResponse) SetModule(v string) *QueryVoipNumberBindInfosResponse {
	s.Module = &v
	return s
}

func (s *QueryVoipNumberBindInfosResponse) SetCode(v string) *QueryVoipNumberBindInfosResponse {
	s.Code = &v
	return s
}

func (s *QueryVoipNumberBindInfosResponse) SetMessage(v string) *QueryVoipNumberBindInfosResponse {
	s.Message = &v
	return s
}

type ReportVoipProblemsRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	ChannelId            *string `json:"ChannelId" xml:"ChannelId"`
	VoipId               *string `json:"VoipId" xml:"VoipId" require:"true"`
	Title                *string `json:"Title" xml:"Title" require:"true"`
	Desc                 *string `json:"Desc" xml:"Desc" require:"true"`
}

func (s ReportVoipProblemsRequest) String() string {
	return tea.Prettify(s)
}

func (s ReportVoipProblemsRequest) GoString() string {
	return s.String()
}

func (s *ReportVoipProblemsRequest) SetAccessKeyId(v string) *ReportVoipProblemsRequest {
	s.AccessKeyId = &v
	return s
}

func (s *ReportVoipProblemsRequest) SetOwnerId(v int64) *ReportVoipProblemsRequest {
	s.OwnerId = &v
	return s
}

func (s *ReportVoipProblemsRequest) SetResourceOwnerAccount(v string) *ReportVoipProblemsRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *ReportVoipProblemsRequest) SetResourceOwnerId(v int64) *ReportVoipProblemsRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *ReportVoipProblemsRequest) SetChannelId(v string) *ReportVoipProblemsRequest {
	s.ChannelId = &v
	return s
}

func (s *ReportVoipProblemsRequest) SetVoipId(v string) *ReportVoipProblemsRequest {
	s.VoipId = &v
	return s
}

func (s *ReportVoipProblemsRequest) SetTitle(v string) *ReportVoipProblemsRequest {
	s.Title = &v
	return s
}

func (s *ReportVoipProblemsRequest) SetDesc(v string) *ReportVoipProblemsRequest {
	s.Desc = &v
	return s
}

type ReportVoipProblemsResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Module    *string `json:"Module" xml:"Module" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s ReportVoipProblemsResponse) String() string {
	return tea.Prettify(s)
}

func (s ReportVoipProblemsResponse) GoString() string {
	return s.String()
}

func (s *ReportVoipProblemsResponse) SetRequestId(v string) *ReportVoipProblemsResponse {
	s.RequestId = &v
	return s
}

func (s *ReportVoipProblemsResponse) SetCode(v string) *ReportVoipProblemsResponse {
	s.Code = &v
	return s
}

func (s *ReportVoipProblemsResponse) SetModule(v string) *ReportVoipProblemsResponse {
	s.Module = &v
	return s
}

func (s *ReportVoipProblemsResponse) SetMessage(v string) *ReportVoipProblemsResponse {
	s.Message = &v
	return s
}

type UnbindNumberAndVoipIdRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	PhoneNumber          *string `json:"PhoneNumber" xml:"PhoneNumber" require:"true"`
	VoipId               *string `json:"VoipId" xml:"VoipId" require:"true"`
}

func (s UnbindNumberAndVoipIdRequest) String() string {
	return tea.Prettify(s)
}

func (s UnbindNumberAndVoipIdRequest) GoString() string {
	return s.String()
}

func (s *UnbindNumberAndVoipIdRequest) SetAccessKeyId(v string) *UnbindNumberAndVoipIdRequest {
	s.AccessKeyId = &v
	return s
}

func (s *UnbindNumberAndVoipIdRequest) SetOwnerId(v int64) *UnbindNumberAndVoipIdRequest {
	s.OwnerId = &v
	return s
}

func (s *UnbindNumberAndVoipIdRequest) SetResourceOwnerAccount(v string) *UnbindNumberAndVoipIdRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *UnbindNumberAndVoipIdRequest) SetResourceOwnerId(v int64) *UnbindNumberAndVoipIdRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *UnbindNumberAndVoipIdRequest) SetPhoneNumber(v string) *UnbindNumberAndVoipIdRequest {
	s.PhoneNumber = &v
	return s
}

func (s *UnbindNumberAndVoipIdRequest) SetVoipId(v string) *UnbindNumberAndVoipIdRequest {
	s.VoipId = &v
	return s
}

type UnbindNumberAndVoipIdResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Module    *string `json:"Module" xml:"Module" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s UnbindNumberAndVoipIdResponse) String() string {
	return tea.Prettify(s)
}

func (s UnbindNumberAndVoipIdResponse) GoString() string {
	return s.String()
}

func (s *UnbindNumberAndVoipIdResponse) SetRequestId(v string) *UnbindNumberAndVoipIdResponse {
	s.RequestId = &v
	return s
}

func (s *UnbindNumberAndVoipIdResponse) SetCode(v string) *UnbindNumberAndVoipIdResponse {
	s.Code = &v
	return s
}

func (s *UnbindNumberAndVoipIdResponse) SetModule(v string) *UnbindNumberAndVoipIdResponse {
	s.Module = &v
	return s
}

func (s *UnbindNumberAndVoipIdResponse) SetMessage(v string) *UnbindNumberAndVoipIdResponse {
	s.Message = &v
	return s
}

type BindNumberAndVoipIdRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	PhoneNumber          *string `json:"PhoneNumber" xml:"PhoneNumber" require:"true"`
	VoipId               *string `json:"VoipId" xml:"VoipId" require:"true"`
}

func (s BindNumberAndVoipIdRequest) String() string {
	return tea.Prettify(s)
}

func (s BindNumberAndVoipIdRequest) GoString() string {
	return s.String()
}

func (s *BindNumberAndVoipIdRequest) SetAccessKeyId(v string) *BindNumberAndVoipIdRequest {
	s.AccessKeyId = &v
	return s
}

func (s *BindNumberAndVoipIdRequest) SetOwnerId(v int64) *BindNumberAndVoipIdRequest {
	s.OwnerId = &v
	return s
}

func (s *BindNumberAndVoipIdRequest) SetResourceOwnerAccount(v string) *BindNumberAndVoipIdRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *BindNumberAndVoipIdRequest) SetResourceOwnerId(v int64) *BindNumberAndVoipIdRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *BindNumberAndVoipIdRequest) SetPhoneNumber(v string) *BindNumberAndVoipIdRequest {
	s.PhoneNumber = &v
	return s
}

func (s *BindNumberAndVoipIdRequest) SetVoipId(v string) *BindNumberAndVoipIdRequest {
	s.VoipId = &v
	return s
}

type BindNumberAndVoipIdResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Module    *string `json:"Module" xml:"Module" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s BindNumberAndVoipIdResponse) String() string {
	return tea.Prettify(s)
}

func (s BindNumberAndVoipIdResponse) GoString() string {
	return s.String()
}

func (s *BindNumberAndVoipIdResponse) SetRequestId(v string) *BindNumberAndVoipIdResponse {
	s.RequestId = &v
	return s
}

func (s *BindNumberAndVoipIdResponse) SetCode(v string) *BindNumberAndVoipIdResponse {
	s.Code = &v
	return s
}

func (s *BindNumberAndVoipIdResponse) SetModule(v string) *BindNumberAndVoipIdResponse {
	s.Module = &v
	return s
}

func (s *BindNumberAndVoipIdResponse) SetMessage(v string) *BindNumberAndVoipIdResponse {
	s.Message = &v
	return s
}

type CancelRobotTaskRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	TaskId               *int64  `json:"TaskId" xml:"TaskId"`
}

func (s CancelRobotTaskRequest) String() string {
	return tea.Prettify(s)
}

func (s CancelRobotTaskRequest) GoString() string {
	return s.String()
}

func (s *CancelRobotTaskRequest) SetAccessKeyId(v string) *CancelRobotTaskRequest {
	s.AccessKeyId = &v
	return s
}

func (s *CancelRobotTaskRequest) SetOwnerId(v int64) *CancelRobotTaskRequest {
	s.OwnerId = &v
	return s
}

func (s *CancelRobotTaskRequest) SetResourceOwnerAccount(v string) *CancelRobotTaskRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *CancelRobotTaskRequest) SetResourceOwnerId(v int64) *CancelRobotTaskRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *CancelRobotTaskRequest) SetTaskId(v int64) *CancelRobotTaskRequest {
	s.TaskId = &v
	return s
}

type CancelRobotTaskResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s CancelRobotTaskResponse) String() string {
	return tea.Prettify(s)
}

func (s CancelRobotTaskResponse) GoString() string {
	return s.String()
}

func (s *CancelRobotTaskResponse) SetRequestId(v string) *CancelRobotTaskResponse {
	s.RequestId = &v
	return s
}

func (s *CancelRobotTaskResponse) SetData(v string) *CancelRobotTaskResponse {
	s.Data = &v
	return s
}

func (s *CancelRobotTaskResponse) SetCode(v string) *CancelRobotTaskResponse {
	s.Code = &v
	return s
}

func (s *CancelRobotTaskResponse) SetMessage(v string) *CancelRobotTaskResponse {
	s.Message = &v
	return s
}

type UploadRobotTaskCalledFileRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	Id                   *int64  `json:"Id" xml:"Id" require:"true"`
	CalledNumber         *string `json:"CalledNumber" xml:"CalledNumber" require:"true"`
	TtsParam             *string `json:"TtsParam" xml:"TtsParam"`
	TtsParamHead         *string `json:"TtsParamHead" xml:"TtsParamHead"`
}

func (s UploadRobotTaskCalledFileRequest) String() string {
	return tea.Prettify(s)
}

func (s UploadRobotTaskCalledFileRequest) GoString() string {
	return s.String()
}

func (s *UploadRobotTaskCalledFileRequest) SetAccessKeyId(v string) *UploadRobotTaskCalledFileRequest {
	s.AccessKeyId = &v
	return s
}

func (s *UploadRobotTaskCalledFileRequest) SetOwnerId(v int64) *UploadRobotTaskCalledFileRequest {
	s.OwnerId = &v
	return s
}

func (s *UploadRobotTaskCalledFileRequest) SetResourceOwnerAccount(v string) *UploadRobotTaskCalledFileRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *UploadRobotTaskCalledFileRequest) SetResourceOwnerId(v int64) *UploadRobotTaskCalledFileRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *UploadRobotTaskCalledFileRequest) SetId(v int64) *UploadRobotTaskCalledFileRequest {
	s.Id = &v
	return s
}

func (s *UploadRobotTaskCalledFileRequest) SetCalledNumber(v string) *UploadRobotTaskCalledFileRequest {
	s.CalledNumber = &v
	return s
}

func (s *UploadRobotTaskCalledFileRequest) SetTtsParam(v string) *UploadRobotTaskCalledFileRequest {
	s.TtsParam = &v
	return s
}

func (s *UploadRobotTaskCalledFileRequest) SetTtsParamHead(v string) *UploadRobotTaskCalledFileRequest {
	s.TtsParamHead = &v
	return s
}

type UploadRobotTaskCalledFileResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s UploadRobotTaskCalledFileResponse) String() string {
	return tea.Prettify(s)
}

func (s UploadRobotTaskCalledFileResponse) GoString() string {
	return s.String()
}

func (s *UploadRobotTaskCalledFileResponse) SetRequestId(v string) *UploadRobotTaskCalledFileResponse {
	s.RequestId = &v
	return s
}

func (s *UploadRobotTaskCalledFileResponse) SetData(v string) *UploadRobotTaskCalledFileResponse {
	s.Data = &v
	return s
}

func (s *UploadRobotTaskCalledFileResponse) SetCode(v string) *UploadRobotTaskCalledFileResponse {
	s.Code = &v
	return s
}

func (s *UploadRobotTaskCalledFileResponse) SetMessage(v string) *UploadRobotTaskCalledFileResponse {
	s.Message = &v
	return s
}

type DeleteRobotTaskRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	TaskId               *int64  `json:"TaskId" xml:"TaskId" require:"true"`
}

func (s DeleteRobotTaskRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteRobotTaskRequest) GoString() string {
	return s.String()
}

func (s *DeleteRobotTaskRequest) SetAccessKeyId(v string) *DeleteRobotTaskRequest {
	s.AccessKeyId = &v
	return s
}

func (s *DeleteRobotTaskRequest) SetOwnerId(v int64) *DeleteRobotTaskRequest {
	s.OwnerId = &v
	return s
}

func (s *DeleteRobotTaskRequest) SetResourceOwnerAccount(v string) *DeleteRobotTaskRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *DeleteRobotTaskRequest) SetResourceOwnerId(v int64) *DeleteRobotTaskRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *DeleteRobotTaskRequest) SetTaskId(v int64) *DeleteRobotTaskRequest {
	s.TaskId = &v
	return s
}

type DeleteRobotTaskResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s DeleteRobotTaskResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteRobotTaskResponse) GoString() string {
	return s.String()
}

func (s *DeleteRobotTaskResponse) SetRequestId(v string) *DeleteRobotTaskResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteRobotTaskResponse) SetData(v string) *DeleteRobotTaskResponse {
	s.Data = &v
	return s
}

func (s *DeleteRobotTaskResponse) SetCode(v string) *DeleteRobotTaskResponse {
	s.Code = &v
	return s
}

func (s *DeleteRobotTaskResponse) SetMessage(v string) *DeleteRobotTaskResponse {
	s.Message = &v
	return s
}

type StopRobotTaskRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	TaskId               *int64  `json:"TaskId" xml:"TaskId" require:"true"`
}

func (s StopRobotTaskRequest) String() string {
	return tea.Prettify(s)
}

func (s StopRobotTaskRequest) GoString() string {
	return s.String()
}

func (s *StopRobotTaskRequest) SetAccessKeyId(v string) *StopRobotTaskRequest {
	s.AccessKeyId = &v
	return s
}

func (s *StopRobotTaskRequest) SetOwnerId(v int64) *StopRobotTaskRequest {
	s.OwnerId = &v
	return s
}

func (s *StopRobotTaskRequest) SetResourceOwnerAccount(v string) *StopRobotTaskRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *StopRobotTaskRequest) SetResourceOwnerId(v int64) *StopRobotTaskRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *StopRobotTaskRequest) SetTaskId(v int64) *StopRobotTaskRequest {
	s.TaskId = &v
	return s
}

type StopRobotTaskResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s StopRobotTaskResponse) String() string {
	return tea.Prettify(s)
}

func (s StopRobotTaskResponse) GoString() string {
	return s.String()
}

func (s *StopRobotTaskResponse) SetRequestId(v string) *StopRobotTaskResponse {
	s.RequestId = &v
	return s
}

func (s *StopRobotTaskResponse) SetData(v string) *StopRobotTaskResponse {
	s.Data = &v
	return s
}

func (s *StopRobotTaskResponse) SetCode(v string) *StopRobotTaskResponse {
	s.Code = &v
	return s
}

func (s *StopRobotTaskResponse) SetMessage(v string) *StopRobotTaskResponse {
	s.Message = &v
	return s
}

type QueryRobotTaskCallDetailRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	TaskId               *int64  `json:"TaskId" xml:"TaskId" require:"true"`
	Callee               *string `json:"Callee" xml:"Callee" require:"true"`
	QueryDate            *int64  `json:"QueryDate" xml:"QueryDate" require:"true"`
}

func (s QueryRobotTaskCallDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryRobotTaskCallDetailRequest) GoString() string {
	return s.String()
}

func (s *QueryRobotTaskCallDetailRequest) SetAccessKeyId(v string) *QueryRobotTaskCallDetailRequest {
	s.AccessKeyId = &v
	return s
}

func (s *QueryRobotTaskCallDetailRequest) SetOwnerId(v int64) *QueryRobotTaskCallDetailRequest {
	s.OwnerId = &v
	return s
}

func (s *QueryRobotTaskCallDetailRequest) SetResourceOwnerAccount(v string) *QueryRobotTaskCallDetailRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *QueryRobotTaskCallDetailRequest) SetResourceOwnerId(v int64) *QueryRobotTaskCallDetailRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *QueryRobotTaskCallDetailRequest) SetTaskId(v int64) *QueryRobotTaskCallDetailRequest {
	s.TaskId = &v
	return s
}

func (s *QueryRobotTaskCallDetailRequest) SetCallee(v string) *QueryRobotTaskCallDetailRequest {
	s.Callee = &v
	return s
}

func (s *QueryRobotTaskCallDetailRequest) SetQueryDate(v int64) *QueryRobotTaskCallDetailRequest {
	s.QueryDate = &v
	return s
}

type QueryRobotTaskCallDetailResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s QueryRobotTaskCallDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryRobotTaskCallDetailResponse) GoString() string {
	return s.String()
}

func (s *QueryRobotTaskCallDetailResponse) SetRequestId(v string) *QueryRobotTaskCallDetailResponse {
	s.RequestId = &v
	return s
}

func (s *QueryRobotTaskCallDetailResponse) SetData(v string) *QueryRobotTaskCallDetailResponse {
	s.Data = &v
	return s
}

func (s *QueryRobotTaskCallDetailResponse) SetCode(v string) *QueryRobotTaskCallDetailResponse {
	s.Code = &v
	return s
}

func (s *QueryRobotTaskCallDetailResponse) SetMessage(v string) *QueryRobotTaskCallDetailResponse {
	s.Message = &v
	return s
}

type QueryRobotv2AllListRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
}

func (s QueryRobotv2AllListRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryRobotv2AllListRequest) GoString() string {
	return s.String()
}

func (s *QueryRobotv2AllListRequest) SetAccessKeyId(v string) *QueryRobotv2AllListRequest {
	s.AccessKeyId = &v
	return s
}

func (s *QueryRobotv2AllListRequest) SetOwnerId(v int64) *QueryRobotv2AllListRequest {
	s.OwnerId = &v
	return s
}

func (s *QueryRobotv2AllListRequest) SetResourceOwnerAccount(v string) *QueryRobotv2AllListRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *QueryRobotv2AllListRequest) SetResourceOwnerId(v int64) *QueryRobotv2AllListRequest {
	s.ResourceOwnerId = &v
	return s
}

type QueryRobotv2AllListResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s QueryRobotv2AllListResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryRobotv2AllListResponse) GoString() string {
	return s.String()
}

func (s *QueryRobotv2AllListResponse) SetRequestId(v string) *QueryRobotv2AllListResponse {
	s.RequestId = &v
	return s
}

func (s *QueryRobotv2AllListResponse) SetData(v string) *QueryRobotv2AllListResponse {
	s.Data = &v
	return s
}

func (s *QueryRobotv2AllListResponse) SetCode(v string) *QueryRobotv2AllListResponse {
	s.Code = &v
	return s
}

func (s *QueryRobotv2AllListResponse) SetMessage(v string) *QueryRobotv2AllListResponse {
	s.Message = &v
	return s
}

type QueryRobotTaskDetailRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	Id                   *int64  `json:"Id" xml:"Id" require:"true"`
}

func (s QueryRobotTaskDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryRobotTaskDetailRequest) GoString() string {
	return s.String()
}

func (s *QueryRobotTaskDetailRequest) SetAccessKeyId(v string) *QueryRobotTaskDetailRequest {
	s.AccessKeyId = &v
	return s
}

func (s *QueryRobotTaskDetailRequest) SetOwnerId(v int64) *QueryRobotTaskDetailRequest {
	s.OwnerId = &v
	return s
}

func (s *QueryRobotTaskDetailRequest) SetResourceOwnerAccount(v string) *QueryRobotTaskDetailRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *QueryRobotTaskDetailRequest) SetResourceOwnerId(v int64) *QueryRobotTaskDetailRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *QueryRobotTaskDetailRequest) SetId(v int64) *QueryRobotTaskDetailRequest {
	s.Id = &v
	return s
}

type QueryRobotTaskDetailResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s QueryRobotTaskDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryRobotTaskDetailResponse) GoString() string {
	return s.String()
}

func (s *QueryRobotTaskDetailResponse) SetRequestId(v string) *QueryRobotTaskDetailResponse {
	s.RequestId = &v
	return s
}

func (s *QueryRobotTaskDetailResponse) SetData(v string) *QueryRobotTaskDetailResponse {
	s.Data = &v
	return s
}

func (s *QueryRobotTaskDetailResponse) SetCode(v string) *QueryRobotTaskDetailResponse {
	s.Code = &v
	return s
}

func (s *QueryRobotTaskDetailResponse) SetMessage(v string) *QueryRobotTaskDetailResponse {
	s.Message = &v
	return s
}

type QueryRobotTaskCallListRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	PageNo               *int    `json:"PageNo" xml:"PageNo"`
	PageSize             *int    `json:"PageSize" xml:"PageSize"`
	TaskId               *string `json:"TaskId" xml:"TaskId" require:"true"`
	DurationFrom         *string `json:"DurationFrom" xml:"DurationFrom"`
	DurationTo           *string `json:"DurationTo" xml:"DurationTo"`
	DialogCountFrom      *string `json:"DialogCountFrom" xml:"DialogCountFrom"`
	DialogCountTo        *string `json:"DialogCountTo" xml:"DialogCountTo"`
	HangupDirection      *string `json:"HangupDirection" xml:"HangupDirection"`
	CallResult           *string `json:"CallResult" xml:"CallResult"`
	Called               *string `json:"Called" xml:"Called"`
}

func (s QueryRobotTaskCallListRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryRobotTaskCallListRequest) GoString() string {
	return s.String()
}

func (s *QueryRobotTaskCallListRequest) SetAccessKeyId(v string) *QueryRobotTaskCallListRequest {
	s.AccessKeyId = &v
	return s
}

func (s *QueryRobotTaskCallListRequest) SetOwnerId(v int64) *QueryRobotTaskCallListRequest {
	s.OwnerId = &v
	return s
}

func (s *QueryRobotTaskCallListRequest) SetResourceOwnerAccount(v string) *QueryRobotTaskCallListRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *QueryRobotTaskCallListRequest) SetResourceOwnerId(v int64) *QueryRobotTaskCallListRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *QueryRobotTaskCallListRequest) SetPageNo(v int) *QueryRobotTaskCallListRequest {
	s.PageNo = &v
	return s
}

func (s *QueryRobotTaskCallListRequest) SetPageSize(v int) *QueryRobotTaskCallListRequest {
	s.PageSize = &v
	return s
}

func (s *QueryRobotTaskCallListRequest) SetTaskId(v string) *QueryRobotTaskCallListRequest {
	s.TaskId = &v
	return s
}

func (s *QueryRobotTaskCallListRequest) SetDurationFrom(v string) *QueryRobotTaskCallListRequest {
	s.DurationFrom = &v
	return s
}

func (s *QueryRobotTaskCallListRequest) SetDurationTo(v string) *QueryRobotTaskCallListRequest {
	s.DurationTo = &v
	return s
}

func (s *QueryRobotTaskCallListRequest) SetDialogCountFrom(v string) *QueryRobotTaskCallListRequest {
	s.DialogCountFrom = &v
	return s
}

func (s *QueryRobotTaskCallListRequest) SetDialogCountTo(v string) *QueryRobotTaskCallListRequest {
	s.DialogCountTo = &v
	return s
}

func (s *QueryRobotTaskCallListRequest) SetHangupDirection(v string) *QueryRobotTaskCallListRequest {
	s.HangupDirection = &v
	return s
}

func (s *QueryRobotTaskCallListRequest) SetCallResult(v string) *QueryRobotTaskCallListRequest {
	s.CallResult = &v
	return s
}

func (s *QueryRobotTaskCallListRequest) SetCalled(v string) *QueryRobotTaskCallListRequest {
	s.Called = &v
	return s
}

type QueryRobotTaskCallListResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s QueryRobotTaskCallListResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryRobotTaskCallListResponse) GoString() string {
	return s.String()
}

func (s *QueryRobotTaskCallListResponse) SetRequestId(v string) *QueryRobotTaskCallListResponse {
	s.RequestId = &v
	return s
}

func (s *QueryRobotTaskCallListResponse) SetData(v string) *QueryRobotTaskCallListResponse {
	s.Data = &v
	return s
}

func (s *QueryRobotTaskCallListResponse) SetCode(v string) *QueryRobotTaskCallListResponse {
	s.Code = &v
	return s
}

func (s *QueryRobotTaskCallListResponse) SetMessage(v string) *QueryRobotTaskCallListResponse {
	s.Message = &v
	return s
}

type StartRobotTaskRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	TaskId               *int64  `json:"TaskId" xml:"TaskId" require:"true"`
	ScheduleTime         *string `json:"ScheduleTime" xml:"ScheduleTime"`
}

func (s StartRobotTaskRequest) String() string {
	return tea.Prettify(s)
}

func (s StartRobotTaskRequest) GoString() string {
	return s.String()
}

func (s *StartRobotTaskRequest) SetAccessKeyId(v string) *StartRobotTaskRequest {
	s.AccessKeyId = &v
	return s
}

func (s *StartRobotTaskRequest) SetOwnerId(v int64) *StartRobotTaskRequest {
	s.OwnerId = &v
	return s
}

func (s *StartRobotTaskRequest) SetResourceOwnerAccount(v string) *StartRobotTaskRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *StartRobotTaskRequest) SetResourceOwnerId(v int64) *StartRobotTaskRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *StartRobotTaskRequest) SetTaskId(v int64) *StartRobotTaskRequest {
	s.TaskId = &v
	return s
}

func (s *StartRobotTaskRequest) SetScheduleTime(v string) *StartRobotTaskRequest {
	s.ScheduleTime = &v
	return s
}

type StartRobotTaskResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s StartRobotTaskResponse) String() string {
	return tea.Prettify(s)
}

func (s StartRobotTaskResponse) GoString() string {
	return s.String()
}

func (s *StartRobotTaskResponse) SetRequestId(v string) *StartRobotTaskResponse {
	s.RequestId = &v
	return s
}

func (s *StartRobotTaskResponse) SetData(v string) *StartRobotTaskResponse {
	s.Data = &v
	return s
}

func (s *StartRobotTaskResponse) SetCode(v string) *StartRobotTaskResponse {
	s.Code = &v
	return s
}

func (s *StartRobotTaskResponse) SetMessage(v string) *StartRobotTaskResponse {
	s.Message = &v
	return s
}

type QueryRobotTaskListRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	TaskName             *string `json:"TaskName" xml:"TaskName"`
	Status               *string `json:"Status" xml:"Status"`
	Time                 *string `json:"Time" xml:"Time"`
	PageSize             *int    `json:"PageSize" xml:"PageSize"`
	PageNo               *int    `json:"PageNo" xml:"PageNo"`
}

func (s QueryRobotTaskListRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryRobotTaskListRequest) GoString() string {
	return s.String()
}

func (s *QueryRobotTaskListRequest) SetAccessKeyId(v string) *QueryRobotTaskListRequest {
	s.AccessKeyId = &v
	return s
}

func (s *QueryRobotTaskListRequest) SetOwnerId(v int64) *QueryRobotTaskListRequest {
	s.OwnerId = &v
	return s
}

func (s *QueryRobotTaskListRequest) SetResourceOwnerAccount(v string) *QueryRobotTaskListRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *QueryRobotTaskListRequest) SetResourceOwnerId(v int64) *QueryRobotTaskListRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *QueryRobotTaskListRequest) SetTaskName(v string) *QueryRobotTaskListRequest {
	s.TaskName = &v
	return s
}

func (s *QueryRobotTaskListRequest) SetStatus(v string) *QueryRobotTaskListRequest {
	s.Status = &v
	return s
}

func (s *QueryRobotTaskListRequest) SetTime(v string) *QueryRobotTaskListRequest {
	s.Time = &v
	return s
}

func (s *QueryRobotTaskListRequest) SetPageSize(v int) *QueryRobotTaskListRequest {
	s.PageSize = &v
	return s
}

func (s *QueryRobotTaskListRequest) SetPageNo(v int) *QueryRobotTaskListRequest {
	s.PageNo = &v
	return s
}

type QueryRobotTaskListResponse struct {
	RequestId  *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data       *string `json:"Data" xml:"Data" require:"true"`
	PageSize   *string `json:"PageSize" xml:"PageSize" require:"true"`
	PageNo     *string `json:"PageNo" xml:"PageNo" require:"true"`
	TotalCount *string `json:"TotalCount" xml:"TotalCount" require:"true"`
	Code       *string `json:"Code" xml:"Code" require:"true"`
	Message    *string `json:"Message" xml:"Message" require:"true"`
}

func (s QueryRobotTaskListResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryRobotTaskListResponse) GoString() string {
	return s.String()
}

func (s *QueryRobotTaskListResponse) SetRequestId(v string) *QueryRobotTaskListResponse {
	s.RequestId = &v
	return s
}

func (s *QueryRobotTaskListResponse) SetData(v string) *QueryRobotTaskListResponse {
	s.Data = &v
	return s
}

func (s *QueryRobotTaskListResponse) SetPageSize(v string) *QueryRobotTaskListResponse {
	s.PageSize = &v
	return s
}

func (s *QueryRobotTaskListResponse) SetPageNo(v string) *QueryRobotTaskListResponse {
	s.PageNo = &v
	return s
}

func (s *QueryRobotTaskListResponse) SetTotalCount(v string) *QueryRobotTaskListResponse {
	s.TotalCount = &v
	return s
}

func (s *QueryRobotTaskListResponse) SetCode(v string) *QueryRobotTaskListResponse {
	s.Code = &v
	return s
}

func (s *QueryRobotTaskListResponse) SetMessage(v string) *QueryRobotTaskListResponse {
	s.Message = &v
	return s
}

type CreateRobotTaskRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	TaskName             *string `json:"TaskName" xml:"TaskName" require:"true"`
	DialogId             *int64  `json:"DialogId" xml:"DialogId" require:"true"`
	CorpName             *string `json:"CorpName" xml:"CorpName"`
	Caller               *string `json:"Caller" xml:"Caller" require:"true"`
	NumberStatusIdent    *bool   `json:"NumberStatusIdent" xml:"NumberStatusIdent" require:"true"`
	RetryType            *int    `json:"RetryType" xml:"RetryType" require:"true"`
	RecallStateCodes     *string `json:"RecallStateCodes" xml:"RecallStateCodes"`
	RecallTimes          *int    `json:"RecallTimes" xml:"RecallTimes"`
	RecallInterval       *int    `json:"RecallInterval" xml:"RecallInterval"`
	IsSelfLine           *bool   `json:"IsSelfLine" xml:"IsSelfLine"`
}

func (s CreateRobotTaskRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateRobotTaskRequest) GoString() string {
	return s.String()
}

func (s *CreateRobotTaskRequest) SetAccessKeyId(v string) *CreateRobotTaskRequest {
	s.AccessKeyId = &v
	return s
}

func (s *CreateRobotTaskRequest) SetOwnerId(v int64) *CreateRobotTaskRequest {
	s.OwnerId = &v
	return s
}

func (s *CreateRobotTaskRequest) SetResourceOwnerAccount(v string) *CreateRobotTaskRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *CreateRobotTaskRequest) SetResourceOwnerId(v int64) *CreateRobotTaskRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *CreateRobotTaskRequest) SetTaskName(v string) *CreateRobotTaskRequest {
	s.TaskName = &v
	return s
}

func (s *CreateRobotTaskRequest) SetDialogId(v int64) *CreateRobotTaskRequest {
	s.DialogId = &v
	return s
}

func (s *CreateRobotTaskRequest) SetCorpName(v string) *CreateRobotTaskRequest {
	s.CorpName = &v
	return s
}

func (s *CreateRobotTaskRequest) SetCaller(v string) *CreateRobotTaskRequest {
	s.Caller = &v
	return s
}

func (s *CreateRobotTaskRequest) SetNumberStatusIdent(v bool) *CreateRobotTaskRequest {
	s.NumberStatusIdent = &v
	return s
}

func (s *CreateRobotTaskRequest) SetRetryType(v int) *CreateRobotTaskRequest {
	s.RetryType = &v
	return s
}

func (s *CreateRobotTaskRequest) SetRecallStateCodes(v string) *CreateRobotTaskRequest {
	s.RecallStateCodes = &v
	return s
}

func (s *CreateRobotTaskRequest) SetRecallTimes(v int) *CreateRobotTaskRequest {
	s.RecallTimes = &v
	return s
}

func (s *CreateRobotTaskRequest) SetRecallInterval(v int) *CreateRobotTaskRequest {
	s.RecallInterval = &v
	return s
}

func (s *CreateRobotTaskRequest) SetIsSelfLine(v bool) *CreateRobotTaskRequest {
	s.IsSelfLine = &v
	return s
}

type CreateRobotTaskResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s CreateRobotTaskResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateRobotTaskResponse) GoString() string {
	return s.String()
}

func (s *CreateRobotTaskResponse) SetRequestId(v string) *CreateRobotTaskResponse {
	s.RequestId = &v
	return s
}

func (s *CreateRobotTaskResponse) SetData(v string) *CreateRobotTaskResponse {
	s.Data = &v
	return s
}

func (s *CreateRobotTaskResponse) SetCode(v string) *CreateRobotTaskResponse {
	s.Code = &v
	return s
}

func (s *CreateRobotTaskResponse) SetMessage(v string) *CreateRobotTaskResponse {
	s.Message = &v
	return s
}

type CancelOrderRobotTaskRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	TaskId               *int64  `json:"TaskId" xml:"TaskId" require:"true"`
}

func (s CancelOrderRobotTaskRequest) String() string {
	return tea.Prettify(s)
}

func (s CancelOrderRobotTaskRequest) GoString() string {
	return s.String()
}

func (s *CancelOrderRobotTaskRequest) SetAccessKeyId(v string) *CancelOrderRobotTaskRequest {
	s.AccessKeyId = &v
	return s
}

func (s *CancelOrderRobotTaskRequest) SetOwnerId(v int64) *CancelOrderRobotTaskRequest {
	s.OwnerId = &v
	return s
}

func (s *CancelOrderRobotTaskRequest) SetResourceOwnerAccount(v string) *CancelOrderRobotTaskRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *CancelOrderRobotTaskRequest) SetResourceOwnerId(v int64) *CancelOrderRobotTaskRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *CancelOrderRobotTaskRequest) SetTaskId(v int64) *CancelOrderRobotTaskRequest {
	s.TaskId = &v
	return s
}

type CancelOrderRobotTaskResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s CancelOrderRobotTaskResponse) String() string {
	return tea.Prettify(s)
}

func (s CancelOrderRobotTaskResponse) GoString() string {
	return s.String()
}

func (s *CancelOrderRobotTaskResponse) SetRequestId(v string) *CancelOrderRobotTaskResponse {
	s.RequestId = &v
	return s
}

func (s *CancelOrderRobotTaskResponse) SetData(v string) *CancelOrderRobotTaskResponse {
	s.Data = &v
	return s
}

func (s *CancelOrderRobotTaskResponse) SetCode(v string) *CancelOrderRobotTaskResponse {
	s.Code = &v
	return s
}

func (s *CancelOrderRobotTaskResponse) SetMessage(v string) *CancelOrderRobotTaskResponse {
	s.Message = &v
	return s
}

type SmartCallOperateRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	CallId               *string `json:"CallId" xml:"CallId" require:"true"`
	Command              *string `json:"Command" xml:"Command" require:"true"`
	Param                *string `json:"Param" xml:"Param"`
}

func (s SmartCallOperateRequest) String() string {
	return tea.Prettify(s)
}

func (s SmartCallOperateRequest) GoString() string {
	return s.String()
}

func (s *SmartCallOperateRequest) SetAccessKeyId(v string) *SmartCallOperateRequest {
	s.AccessKeyId = &v
	return s
}

func (s *SmartCallOperateRequest) SetOwnerId(v int64) *SmartCallOperateRequest {
	s.OwnerId = &v
	return s
}

func (s *SmartCallOperateRequest) SetResourceOwnerAccount(v string) *SmartCallOperateRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *SmartCallOperateRequest) SetResourceOwnerId(v int64) *SmartCallOperateRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *SmartCallOperateRequest) SetCallId(v string) *SmartCallOperateRequest {
	s.CallId = &v
	return s
}

func (s *SmartCallOperateRequest) SetCommand(v string) *SmartCallOperateRequest {
	s.Command = &v
	return s
}

func (s *SmartCallOperateRequest) SetParam(v string) *SmartCallOperateRequest {
	s.Param = &v
	return s
}

type SmartCallOperateResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Status    *bool   `json:"Status" xml:"Status" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s SmartCallOperateResponse) String() string {
	return tea.Prettify(s)
}

func (s SmartCallOperateResponse) GoString() string {
	return s.String()
}

func (s *SmartCallOperateResponse) SetRequestId(v string) *SmartCallOperateResponse {
	s.RequestId = &v
	return s
}

func (s *SmartCallOperateResponse) SetStatus(v bool) *SmartCallOperateResponse {
	s.Status = &v
	return s
}

func (s *SmartCallOperateResponse) SetCode(v string) *SmartCallOperateResponse {
	s.Code = &v
	return s
}

func (s *SmartCallOperateResponse) SetMessage(v string) *SmartCallOperateResponse {
	s.Message = &v
	return s
}

type QueryRobotInfoListRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	AuditStatus          *string `json:"AuditStatus" xml:"AuditStatus"`
}

func (s QueryRobotInfoListRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryRobotInfoListRequest) GoString() string {
	return s.String()
}

func (s *QueryRobotInfoListRequest) SetAccessKeyId(v string) *QueryRobotInfoListRequest {
	s.AccessKeyId = &v
	return s
}

func (s *QueryRobotInfoListRequest) SetOwnerId(v int64) *QueryRobotInfoListRequest {
	s.OwnerId = &v
	return s
}

func (s *QueryRobotInfoListRequest) SetResourceOwnerAccount(v string) *QueryRobotInfoListRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *QueryRobotInfoListRequest) SetResourceOwnerId(v int64) *QueryRobotInfoListRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *QueryRobotInfoListRequest) SetAuditStatus(v string) *QueryRobotInfoListRequest {
	s.AuditStatus = &v
	return s
}

type QueryRobotInfoListResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s QueryRobotInfoListResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryRobotInfoListResponse) GoString() string {
	return s.String()
}

func (s *QueryRobotInfoListResponse) SetRequestId(v string) *QueryRobotInfoListResponse {
	s.RequestId = &v
	return s
}

func (s *QueryRobotInfoListResponse) SetData(v string) *QueryRobotInfoListResponse {
	s.Data = &v
	return s
}

func (s *QueryRobotInfoListResponse) SetCode(v string) *QueryRobotInfoListResponse {
	s.Code = &v
	return s
}

func (s *QueryRobotInfoListResponse) SetMessage(v string) *QueryRobotInfoListResponse {
	s.Message = &v
	return s
}

type BatchRobotSmartCallRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	CalledShowNumber     *string `json:"CalledShowNumber" xml:"CalledShowNumber" require:"true"`
	CorpName             *string `json:"CorpName" xml:"CorpName"`
	CalledNumber         *string `json:"CalledNumber" xml:"CalledNumber" require:"true"`
	DialogId             *string `json:"DialogId" xml:"DialogId" require:"true"`
	EarlyMediaAsr        *bool   `json:"EarlyMediaAsr" xml:"EarlyMediaAsr"`
	TaskName             *string `json:"TaskName" xml:"TaskName" require:"true"`
	ScheduleTime         *int64  `json:"ScheduleTime" xml:"ScheduleTime"`
	ScheduleCall         *bool   `json:"ScheduleCall" xml:"ScheduleCall"`
	TtsParam             *string `json:"TtsParam" xml:"TtsParam"`
	TtsParamHead         *string `json:"TtsParamHead" xml:"TtsParamHead"`
	IsSelfLine           *bool   `json:"IsSelfLine" xml:"IsSelfLine"`
}

func (s BatchRobotSmartCallRequest) String() string {
	return tea.Prettify(s)
}

func (s BatchRobotSmartCallRequest) GoString() string {
	return s.String()
}

func (s *BatchRobotSmartCallRequest) SetAccessKeyId(v string) *BatchRobotSmartCallRequest {
	s.AccessKeyId = &v
	return s
}

func (s *BatchRobotSmartCallRequest) SetOwnerId(v int64) *BatchRobotSmartCallRequest {
	s.OwnerId = &v
	return s
}

func (s *BatchRobotSmartCallRequest) SetResourceOwnerAccount(v string) *BatchRobotSmartCallRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *BatchRobotSmartCallRequest) SetResourceOwnerId(v int64) *BatchRobotSmartCallRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *BatchRobotSmartCallRequest) SetCalledShowNumber(v string) *BatchRobotSmartCallRequest {
	s.CalledShowNumber = &v
	return s
}

func (s *BatchRobotSmartCallRequest) SetCorpName(v string) *BatchRobotSmartCallRequest {
	s.CorpName = &v
	return s
}

func (s *BatchRobotSmartCallRequest) SetCalledNumber(v string) *BatchRobotSmartCallRequest {
	s.CalledNumber = &v
	return s
}

func (s *BatchRobotSmartCallRequest) SetDialogId(v string) *BatchRobotSmartCallRequest {
	s.DialogId = &v
	return s
}

func (s *BatchRobotSmartCallRequest) SetEarlyMediaAsr(v bool) *BatchRobotSmartCallRequest {
	s.EarlyMediaAsr = &v
	return s
}

func (s *BatchRobotSmartCallRequest) SetTaskName(v string) *BatchRobotSmartCallRequest {
	s.TaskName = &v
	return s
}

func (s *BatchRobotSmartCallRequest) SetScheduleTime(v int64) *BatchRobotSmartCallRequest {
	s.ScheduleTime = &v
	return s
}

func (s *BatchRobotSmartCallRequest) SetScheduleCall(v bool) *BatchRobotSmartCallRequest {
	s.ScheduleCall = &v
	return s
}

func (s *BatchRobotSmartCallRequest) SetTtsParam(v string) *BatchRobotSmartCallRequest {
	s.TtsParam = &v
	return s
}

func (s *BatchRobotSmartCallRequest) SetTtsParamHead(v string) *BatchRobotSmartCallRequest {
	s.TtsParamHead = &v
	return s
}

func (s *BatchRobotSmartCallRequest) SetIsSelfLine(v bool) *BatchRobotSmartCallRequest {
	s.IsSelfLine = &v
	return s
}

type BatchRobotSmartCallResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	TaskId    *string `json:"TaskId" xml:"TaskId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s BatchRobotSmartCallResponse) String() string {
	return tea.Prettify(s)
}

func (s BatchRobotSmartCallResponse) GoString() string {
	return s.String()
}

func (s *BatchRobotSmartCallResponse) SetRequestId(v string) *BatchRobotSmartCallResponse {
	s.RequestId = &v
	return s
}

func (s *BatchRobotSmartCallResponse) SetTaskId(v string) *BatchRobotSmartCallResponse {
	s.TaskId = &v
	return s
}

func (s *BatchRobotSmartCallResponse) SetCode(v string) *BatchRobotSmartCallResponse {
	s.Code = &v
	return s
}

func (s *BatchRobotSmartCallResponse) SetMessage(v string) *BatchRobotSmartCallResponse {
	s.Message = &v
	return s
}

type QueryCallDetailByTaskIdRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	TaskId               *string `json:"TaskId" xml:"TaskId" require:"true"`
	QueryDate            *int64  `json:"QueryDate" xml:"QueryDate" require:"true"`
	Callee               *string `json:"Callee" xml:"Callee" require:"true"`
}

func (s QueryCallDetailByTaskIdRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryCallDetailByTaskIdRequest) GoString() string {
	return s.String()
}

func (s *QueryCallDetailByTaskIdRequest) SetAccessKeyId(v string) *QueryCallDetailByTaskIdRequest {
	s.AccessKeyId = &v
	return s
}

func (s *QueryCallDetailByTaskIdRequest) SetOwnerId(v int64) *QueryCallDetailByTaskIdRequest {
	s.OwnerId = &v
	return s
}

func (s *QueryCallDetailByTaskIdRequest) SetResourceOwnerAccount(v string) *QueryCallDetailByTaskIdRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *QueryCallDetailByTaskIdRequest) SetResourceOwnerId(v int64) *QueryCallDetailByTaskIdRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *QueryCallDetailByTaskIdRequest) SetTaskId(v string) *QueryCallDetailByTaskIdRequest {
	s.TaskId = &v
	return s
}

func (s *QueryCallDetailByTaskIdRequest) SetQueryDate(v int64) *QueryCallDetailByTaskIdRequest {
	s.QueryDate = &v
	return s
}

func (s *QueryCallDetailByTaskIdRequest) SetCallee(v string) *QueryCallDetailByTaskIdRequest {
	s.Callee = &v
	return s
}

type QueryCallDetailByTaskIdResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s QueryCallDetailByTaskIdResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryCallDetailByTaskIdResponse) GoString() string {
	return s.String()
}

func (s *QueryCallDetailByTaskIdResponse) SetRequestId(v string) *QueryCallDetailByTaskIdResponse {
	s.RequestId = &v
	return s
}

func (s *QueryCallDetailByTaskIdResponse) SetData(v string) *QueryCallDetailByTaskIdResponse {
	s.Data = &v
	return s
}

func (s *QueryCallDetailByTaskIdResponse) SetCode(v string) *QueryCallDetailByTaskIdResponse {
	s.Code = &v
	return s
}

func (s *QueryCallDetailByTaskIdResponse) SetMessage(v string) *QueryCallDetailByTaskIdResponse {
	s.Message = &v
	return s
}

type GetRtcTokenRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	UserId               *string `json:"UserId" xml:"UserId" require:"true"`
	DeviceId             *string `json:"DeviceId" xml:"DeviceId" require:"true"`
	IsCustomAccount      *bool   `json:"IsCustomAccount" xml:"IsCustomAccount"`
}

func (s GetRtcTokenRequest) String() string {
	return tea.Prettify(s)
}

func (s GetRtcTokenRequest) GoString() string {
	return s.String()
}

func (s *GetRtcTokenRequest) SetAccessKeyId(v string) *GetRtcTokenRequest {
	s.AccessKeyId = &v
	return s
}

func (s *GetRtcTokenRequest) SetOwnerId(v int64) *GetRtcTokenRequest {
	s.OwnerId = &v
	return s
}

func (s *GetRtcTokenRequest) SetResourceOwnerAccount(v string) *GetRtcTokenRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *GetRtcTokenRequest) SetResourceOwnerId(v int64) *GetRtcTokenRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *GetRtcTokenRequest) SetUserId(v string) *GetRtcTokenRequest {
	s.UserId = &v
	return s
}

func (s *GetRtcTokenRequest) SetDeviceId(v string) *GetRtcTokenRequest {
	s.DeviceId = &v
	return s
}

func (s *GetRtcTokenRequest) SetIsCustomAccount(v bool) *GetRtcTokenRequest {
	s.IsCustomAccount = &v
	return s
}

type GetRtcTokenResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Module    *string `json:"Module" xml:"Module" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s GetRtcTokenResponse) String() string {
	return tea.Prettify(s)
}

func (s GetRtcTokenResponse) GoString() string {
	return s.String()
}

func (s *GetRtcTokenResponse) SetRequestId(v string) *GetRtcTokenResponse {
	s.RequestId = &v
	return s
}

func (s *GetRtcTokenResponse) SetModule(v string) *GetRtcTokenResponse {
	s.Module = &v
	return s
}

func (s *GetRtcTokenResponse) SetCode(v string) *GetRtcTokenResponse {
	s.Code = &v
	return s
}

func (s *GetRtcTokenResponse) SetMessage(v string) *GetRtcTokenResponse {
	s.Message = &v
	return s
}

type AddRtcAccountRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	DeviceId             *string `json:"DeviceId" xml:"DeviceId"`
}

func (s AddRtcAccountRequest) String() string {
	return tea.Prettify(s)
}

func (s AddRtcAccountRequest) GoString() string {
	return s.String()
}

func (s *AddRtcAccountRequest) SetAccessKeyId(v string) *AddRtcAccountRequest {
	s.AccessKeyId = &v
	return s
}

func (s *AddRtcAccountRequest) SetOwnerId(v int64) *AddRtcAccountRequest {
	s.OwnerId = &v
	return s
}

func (s *AddRtcAccountRequest) SetResourceOwnerAccount(v string) *AddRtcAccountRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *AddRtcAccountRequest) SetResourceOwnerId(v int64) *AddRtcAccountRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *AddRtcAccountRequest) SetDeviceId(v string) *AddRtcAccountRequest {
	s.DeviceId = &v
	return s
}

type AddRtcAccountResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Module    *string `json:"Module" xml:"Module" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s AddRtcAccountResponse) String() string {
	return tea.Prettify(s)
}

func (s AddRtcAccountResponse) GoString() string {
	return s.String()
}

func (s *AddRtcAccountResponse) SetRequestId(v string) *AddRtcAccountResponse {
	s.RequestId = &v
	return s
}

func (s *AddRtcAccountResponse) SetModule(v string) *AddRtcAccountResponse {
	s.Module = &v
	return s
}

func (s *AddRtcAccountResponse) SetCode(v string) *AddRtcAccountResponse {
	s.Code = &v
	return s
}

func (s *AddRtcAccountResponse) SetMessage(v string) *AddRtcAccountResponse {
	s.Message = &v
	return s
}

type VoipAddAccountRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	DeviceId             *string `json:"DeviceId" xml:"DeviceId" require:"true"`
}

func (s VoipAddAccountRequest) String() string {
	return tea.Prettify(s)
}

func (s VoipAddAccountRequest) GoString() string {
	return s.String()
}

func (s *VoipAddAccountRequest) SetAccessKeyId(v string) *VoipAddAccountRequest {
	s.AccessKeyId = &v
	return s
}

func (s *VoipAddAccountRequest) SetOwnerId(v int64) *VoipAddAccountRequest {
	s.OwnerId = &v
	return s
}

func (s *VoipAddAccountRequest) SetResourceOwnerAccount(v string) *VoipAddAccountRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *VoipAddAccountRequest) SetResourceOwnerId(v int64) *VoipAddAccountRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *VoipAddAccountRequest) SetDeviceId(v string) *VoipAddAccountRequest {
	s.DeviceId = &v
	return s
}

type VoipAddAccountResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Module    *string `json:"Module" xml:"Module" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s VoipAddAccountResponse) String() string {
	return tea.Prettify(s)
}

func (s VoipAddAccountResponse) GoString() string {
	return s.String()
}

func (s *VoipAddAccountResponse) SetRequestId(v string) *VoipAddAccountResponse {
	s.RequestId = &v
	return s
}

func (s *VoipAddAccountResponse) SetModule(v string) *VoipAddAccountResponse {
	s.Module = &v
	return s
}

func (s *VoipAddAccountResponse) SetCode(v string) *VoipAddAccountResponse {
	s.Code = &v
	return s
}

func (s *VoipAddAccountResponse) SetMessage(v string) *VoipAddAccountResponse {
	s.Message = &v
	return s
}

type VoipGetTokenRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	VoipId               *string `json:"VoipId" xml:"VoipId" require:"true"`
	DeviceId             *string `json:"DeviceId" xml:"DeviceId" require:"true"`
	IsCustomAccount      *bool   `json:"IsCustomAccount" xml:"IsCustomAccount"`
}

func (s VoipGetTokenRequest) String() string {
	return tea.Prettify(s)
}

func (s VoipGetTokenRequest) GoString() string {
	return s.String()
}

func (s *VoipGetTokenRequest) SetAccessKeyId(v string) *VoipGetTokenRequest {
	s.AccessKeyId = &v
	return s
}

func (s *VoipGetTokenRequest) SetOwnerId(v int64) *VoipGetTokenRequest {
	s.OwnerId = &v
	return s
}

func (s *VoipGetTokenRequest) SetResourceOwnerAccount(v string) *VoipGetTokenRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *VoipGetTokenRequest) SetResourceOwnerId(v int64) *VoipGetTokenRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *VoipGetTokenRequest) SetVoipId(v string) *VoipGetTokenRequest {
	s.VoipId = &v
	return s
}

func (s *VoipGetTokenRequest) SetDeviceId(v string) *VoipGetTokenRequest {
	s.DeviceId = &v
	return s
}

func (s *VoipGetTokenRequest) SetIsCustomAccount(v bool) *VoipGetTokenRequest {
	s.IsCustomAccount = &v
	return s
}

type VoipGetTokenResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Module    *string `json:"Module" xml:"Module" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s VoipGetTokenResponse) String() string {
	return tea.Prettify(s)
}

func (s VoipGetTokenResponse) GoString() string {
	return s.String()
}

func (s *VoipGetTokenResponse) SetRequestId(v string) *VoipGetTokenResponse {
	s.RequestId = &v
	return s
}

func (s *VoipGetTokenResponse) SetModule(v string) *VoipGetTokenResponse {
	s.Module = &v
	return s
}

func (s *VoipGetTokenResponse) SetCode(v string) *VoipGetTokenResponse {
	s.Code = &v
	return s
}

func (s *VoipGetTokenResponse) SetMessage(v string) *VoipGetTokenResponse {
	s.Message = &v
	return s
}

type SmartCallRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	CalledShowNumber     *string `json:"CalledShowNumber" xml:"CalledShowNumber" require:"true"`
	CalledNumber         *string `json:"CalledNumber" xml:"CalledNumber" require:"true"`
	VoiceCode            *string `json:"VoiceCode" xml:"VoiceCode" require:"true"`
	RecordFlag           *bool   `json:"RecordFlag" xml:"RecordFlag"`
	Volume               *int    `json:"Volume" xml:"Volume"`
	Speed                *int    `json:"Speed" xml:"Speed"`
	AsrModelId           *string `json:"AsrModelId" xml:"AsrModelId"`
	PauseTime            *int    `json:"PauseTime" xml:"PauseTime"`
	MuteTime             *int    `json:"MuteTime" xml:"MuteTime"`
	ActionCodeBreak      *bool   `json:"ActionCodeBreak" xml:"ActionCodeBreak"`
	OutId                *string `json:"OutId" xml:"OutId"`
	DynamicId            *string `json:"DynamicId" xml:"DynamicId"`
	EarlyMediaAsr        *bool   `json:"EarlyMediaAsr" xml:"EarlyMediaAsr"`
	VoiceCodeParam       *string `json:"VoiceCodeParam" xml:"VoiceCodeParam"`
	SessionTimeout       *int    `json:"SessionTimeout" xml:"SessionTimeout"`
	ActionCodeTimeBreak  *int    `json:"ActionCodeTimeBreak" xml:"ActionCodeTimeBreak"`
	TtsStyle             *string `json:"TtsStyle" xml:"TtsStyle"`
	TtsVolume            *int    `json:"TtsVolume" xml:"TtsVolume"`
	TtsSpeed             *int    `json:"TtsSpeed" xml:"TtsSpeed"`
	TtsConf              *bool   `json:"TtsConf" xml:"TtsConf"`
	AsrBaseId            *string `json:"AsrBaseId" xml:"AsrBaseId"`
}

func (s SmartCallRequest) String() string {
	return tea.Prettify(s)
}

func (s SmartCallRequest) GoString() string {
	return s.String()
}

func (s *SmartCallRequest) SetAccessKeyId(v string) *SmartCallRequest {
	s.AccessKeyId = &v
	return s
}

func (s *SmartCallRequest) SetOwnerId(v int64) *SmartCallRequest {
	s.OwnerId = &v
	return s
}

func (s *SmartCallRequest) SetResourceOwnerAccount(v string) *SmartCallRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *SmartCallRequest) SetResourceOwnerId(v int64) *SmartCallRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *SmartCallRequest) SetCalledShowNumber(v string) *SmartCallRequest {
	s.CalledShowNumber = &v
	return s
}

func (s *SmartCallRequest) SetCalledNumber(v string) *SmartCallRequest {
	s.CalledNumber = &v
	return s
}

func (s *SmartCallRequest) SetVoiceCode(v string) *SmartCallRequest {
	s.VoiceCode = &v
	return s
}

func (s *SmartCallRequest) SetRecordFlag(v bool) *SmartCallRequest {
	s.RecordFlag = &v
	return s
}

func (s *SmartCallRequest) SetVolume(v int) *SmartCallRequest {
	s.Volume = &v
	return s
}

func (s *SmartCallRequest) SetSpeed(v int) *SmartCallRequest {
	s.Speed = &v
	return s
}

func (s *SmartCallRequest) SetAsrModelId(v string) *SmartCallRequest {
	s.AsrModelId = &v
	return s
}

func (s *SmartCallRequest) SetPauseTime(v int) *SmartCallRequest {
	s.PauseTime = &v
	return s
}

func (s *SmartCallRequest) SetMuteTime(v int) *SmartCallRequest {
	s.MuteTime = &v
	return s
}

func (s *SmartCallRequest) SetActionCodeBreak(v bool) *SmartCallRequest {
	s.ActionCodeBreak = &v
	return s
}

func (s *SmartCallRequest) SetOutId(v string) *SmartCallRequest {
	s.OutId = &v
	return s
}

func (s *SmartCallRequest) SetDynamicId(v string) *SmartCallRequest {
	s.DynamicId = &v
	return s
}

func (s *SmartCallRequest) SetEarlyMediaAsr(v bool) *SmartCallRequest {
	s.EarlyMediaAsr = &v
	return s
}

func (s *SmartCallRequest) SetVoiceCodeParam(v string) *SmartCallRequest {
	s.VoiceCodeParam = &v
	return s
}

func (s *SmartCallRequest) SetSessionTimeout(v int) *SmartCallRequest {
	s.SessionTimeout = &v
	return s
}

func (s *SmartCallRequest) SetActionCodeTimeBreak(v int) *SmartCallRequest {
	s.ActionCodeTimeBreak = &v
	return s
}

func (s *SmartCallRequest) SetTtsStyle(v string) *SmartCallRequest {
	s.TtsStyle = &v
	return s
}

func (s *SmartCallRequest) SetTtsVolume(v int) *SmartCallRequest {
	s.TtsVolume = &v
	return s
}

func (s *SmartCallRequest) SetTtsSpeed(v int) *SmartCallRequest {
	s.TtsSpeed = &v
	return s
}

func (s *SmartCallRequest) SetTtsConf(v bool) *SmartCallRequest {
	s.TtsConf = &v
	return s
}

func (s *SmartCallRequest) SetAsrBaseId(v string) *SmartCallRequest {
	s.AsrBaseId = &v
	return s
}

type SmartCallResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	CallId    *string `json:"CallId" xml:"CallId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s SmartCallResponse) String() string {
	return tea.Prettify(s)
}

func (s SmartCallResponse) GoString() string {
	return s.String()
}

func (s *SmartCallResponse) SetRequestId(v string) *SmartCallResponse {
	s.RequestId = &v
	return s
}

func (s *SmartCallResponse) SetCallId(v string) *SmartCallResponse {
	s.CallId = &v
	return s
}

func (s *SmartCallResponse) SetCode(v string) *SmartCallResponse {
	s.Code = &v
	return s
}

func (s *SmartCallResponse) SetMessage(v string) *SmartCallResponse {
	s.Message = &v
	return s
}

type QueryCallDetailByCallIdRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	CallId               *string `json:"CallId" xml:"CallId" require:"true"`
	ProdId               *int64  `json:"ProdId" xml:"ProdId" require:"true"`
	QueryDate            *int64  `json:"QueryDate" xml:"QueryDate" require:"true"`
}

func (s QueryCallDetailByCallIdRequest) String() string {
	return tea.Prettify(s)
}

func (s QueryCallDetailByCallIdRequest) GoString() string {
	return s.String()
}

func (s *QueryCallDetailByCallIdRequest) SetAccessKeyId(v string) *QueryCallDetailByCallIdRequest {
	s.AccessKeyId = &v
	return s
}

func (s *QueryCallDetailByCallIdRequest) SetOwnerId(v int64) *QueryCallDetailByCallIdRequest {
	s.OwnerId = &v
	return s
}

func (s *QueryCallDetailByCallIdRequest) SetResourceOwnerAccount(v string) *QueryCallDetailByCallIdRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *QueryCallDetailByCallIdRequest) SetResourceOwnerId(v int64) *QueryCallDetailByCallIdRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *QueryCallDetailByCallIdRequest) SetCallId(v string) *QueryCallDetailByCallIdRequest {
	s.CallId = &v
	return s
}

func (s *QueryCallDetailByCallIdRequest) SetProdId(v int64) *QueryCallDetailByCallIdRequest {
	s.ProdId = &v
	return s
}

func (s *QueryCallDetailByCallIdRequest) SetQueryDate(v int64) *QueryCallDetailByCallIdRequest {
	s.QueryDate = &v
	return s
}

type QueryCallDetailByCallIdResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s QueryCallDetailByCallIdResponse) String() string {
	return tea.Prettify(s)
}

func (s QueryCallDetailByCallIdResponse) GoString() string {
	return s.String()
}

func (s *QueryCallDetailByCallIdResponse) SetRequestId(v string) *QueryCallDetailByCallIdResponse {
	s.RequestId = &v
	return s
}

func (s *QueryCallDetailByCallIdResponse) SetData(v string) *QueryCallDetailByCallIdResponse {
	s.Data = &v
	return s
}

func (s *QueryCallDetailByCallIdResponse) SetCode(v string) *QueryCallDetailByCallIdResponse {
	s.Code = &v
	return s
}

func (s *QueryCallDetailByCallIdResponse) SetMessage(v string) *QueryCallDetailByCallIdResponse {
	s.Message = &v
	return s
}

type CancelCallRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	CallId               *string `json:"CallId" xml:"CallId" require:"true"`
}

func (s CancelCallRequest) String() string {
	return tea.Prettify(s)
}

func (s CancelCallRequest) GoString() string {
	return s.String()
}

func (s *CancelCallRequest) SetAccessKeyId(v string) *CancelCallRequest {
	s.AccessKeyId = &v
	return s
}

func (s *CancelCallRequest) SetOwnerId(v int64) *CancelCallRequest {
	s.OwnerId = &v
	return s
}

func (s *CancelCallRequest) SetResourceOwnerAccount(v string) *CancelCallRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *CancelCallRequest) SetResourceOwnerId(v int64) *CancelCallRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *CancelCallRequest) SetCallId(v string) *CancelCallRequest {
	s.CallId = &v
	return s
}

type CancelCallResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Status    *bool   `json:"Status" xml:"Status" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s CancelCallResponse) String() string {
	return tea.Prettify(s)
}

func (s CancelCallResponse) GoString() string {
	return s.String()
}

func (s *CancelCallResponse) SetRequestId(v string) *CancelCallResponse {
	s.RequestId = &v
	return s
}

func (s *CancelCallResponse) SetStatus(v bool) *CancelCallResponse {
	s.Status = &v
	return s
}

func (s *CancelCallResponse) SetCode(v string) *CancelCallResponse {
	s.Code = &v
	return s
}

func (s *CancelCallResponse) SetMessage(v string) *CancelCallResponse {
	s.Message = &v
	return s
}

type ClickToDialRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	CallerShowNumber     *string `json:"CallerShowNumber" xml:"CallerShowNumber" require:"true"`
	CallerNumber         *string `json:"CallerNumber" xml:"CallerNumber" require:"true"`
	CalledShowNumber     *string `json:"CalledShowNumber" xml:"CalledShowNumber" require:"true"`
	CalledNumber         *string `json:"CalledNumber" xml:"CalledNumber" require:"true"`
	RecordFlag           *bool   `json:"RecordFlag" xml:"RecordFlag"`
	AsrFlag              *bool   `json:"AsrFlag" xml:"AsrFlag"`
	SessionTimeout       *int    `json:"SessionTimeout" xml:"SessionTimeout"`
	AsrModelId           *string `json:"AsrModelId" xml:"AsrModelId"`
	OutId                *string `json:"OutId" xml:"OutId"`
}

func (s ClickToDialRequest) String() string {
	return tea.Prettify(s)
}

func (s ClickToDialRequest) GoString() string {
	return s.String()
}

func (s *ClickToDialRequest) SetAccessKeyId(v string) *ClickToDialRequest {
	s.AccessKeyId = &v
	return s
}

func (s *ClickToDialRequest) SetOwnerId(v int64) *ClickToDialRequest {
	s.OwnerId = &v
	return s
}

func (s *ClickToDialRequest) SetResourceOwnerAccount(v string) *ClickToDialRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *ClickToDialRequest) SetResourceOwnerId(v int64) *ClickToDialRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *ClickToDialRequest) SetCallerShowNumber(v string) *ClickToDialRequest {
	s.CallerShowNumber = &v
	return s
}

func (s *ClickToDialRequest) SetCallerNumber(v string) *ClickToDialRequest {
	s.CallerNumber = &v
	return s
}

func (s *ClickToDialRequest) SetCalledShowNumber(v string) *ClickToDialRequest {
	s.CalledShowNumber = &v
	return s
}

func (s *ClickToDialRequest) SetCalledNumber(v string) *ClickToDialRequest {
	s.CalledNumber = &v
	return s
}

func (s *ClickToDialRequest) SetRecordFlag(v bool) *ClickToDialRequest {
	s.RecordFlag = &v
	return s
}

func (s *ClickToDialRequest) SetAsrFlag(v bool) *ClickToDialRequest {
	s.AsrFlag = &v
	return s
}

func (s *ClickToDialRequest) SetSessionTimeout(v int) *ClickToDialRequest {
	s.SessionTimeout = &v
	return s
}

func (s *ClickToDialRequest) SetAsrModelId(v string) *ClickToDialRequest {
	s.AsrModelId = &v
	return s
}

func (s *ClickToDialRequest) SetOutId(v string) *ClickToDialRequest {
	s.OutId = &v
	return s
}

type ClickToDialResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	CallId    *string `json:"CallId" xml:"CallId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s ClickToDialResponse) String() string {
	return tea.Prettify(s)
}

func (s ClickToDialResponse) GoString() string {
	return s.String()
}

func (s *ClickToDialResponse) SetRequestId(v string) *ClickToDialResponse {
	s.RequestId = &v
	return s
}

func (s *ClickToDialResponse) SetCallId(v string) *ClickToDialResponse {
	s.CallId = &v
	return s
}

func (s *ClickToDialResponse) SetCode(v string) *ClickToDialResponse {
	s.Code = &v
	return s
}

func (s *ClickToDialResponse) SetMessage(v string) *ClickToDialResponse {
	s.Message = &v
	return s
}

type IvrCallRequest struct {
	AccessKeyId          *string                     `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64                      `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string                     `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64                      `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	CalledShowNumber     *string                     `json:"CalledShowNumber" xml:"CalledShowNumber" require:"true"`
	CalledNumber         *string                     `json:"CalledNumber" xml:"CalledNumber" require:"true"`
	StartCode            *string                     `json:"StartCode" xml:"StartCode" require:"true"`
	StartTtsParams       *string                     `json:"StartTtsParams" xml:"StartTtsParams"`
	MenuKeyMap           []*IvrCallRequestMenuKeyMap `json:"MenuKeyMap" xml:"MenuKeyMap" type:"Repeated"`
	PlayTimes            *int64                      `json:"PlayTimes" xml:"PlayTimes"`
	ByeCode              *string                     `json:"ByeCode" xml:"ByeCode"`
	ByeTtsParams         *string                     `json:"ByeTtsParams" xml:"ByeTtsParams"`
	Timeout              *int                        `json:"Timeout" xml:"Timeout"`
	OutId                *string                     `json:"OutId" xml:"OutId"`
}

func (s IvrCallRequest) String() string {
	return tea.Prettify(s)
}

func (s IvrCallRequest) GoString() string {
	return s.String()
}

func (s *IvrCallRequest) SetAccessKeyId(v string) *IvrCallRequest {
	s.AccessKeyId = &v
	return s
}

func (s *IvrCallRequest) SetOwnerId(v int64) *IvrCallRequest {
	s.OwnerId = &v
	return s
}

func (s *IvrCallRequest) SetResourceOwnerAccount(v string) *IvrCallRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *IvrCallRequest) SetResourceOwnerId(v int64) *IvrCallRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *IvrCallRequest) SetCalledShowNumber(v string) *IvrCallRequest {
	s.CalledShowNumber = &v
	return s
}

func (s *IvrCallRequest) SetCalledNumber(v string) *IvrCallRequest {
	s.CalledNumber = &v
	return s
}

func (s *IvrCallRequest) SetStartCode(v string) *IvrCallRequest {
	s.StartCode = &v
	return s
}

func (s *IvrCallRequest) SetStartTtsParams(v string) *IvrCallRequest {
	s.StartTtsParams = &v
	return s
}

func (s *IvrCallRequest) SetMenuKeyMap(v []*IvrCallRequestMenuKeyMap) *IvrCallRequest {
	s.MenuKeyMap = v
	return s
}

func (s *IvrCallRequest) SetPlayTimes(v int64) *IvrCallRequest {
	s.PlayTimes = &v
	return s
}

func (s *IvrCallRequest) SetByeCode(v string) *IvrCallRequest {
	s.ByeCode = &v
	return s
}

func (s *IvrCallRequest) SetByeTtsParams(v string) *IvrCallRequest {
	s.ByeTtsParams = &v
	return s
}

func (s *IvrCallRequest) SetTimeout(v int) *IvrCallRequest {
	s.Timeout = &v
	return s
}

func (s *IvrCallRequest) SetOutId(v string) *IvrCallRequest {
	s.OutId = &v
	return s
}

type IvrCallRequestMenuKeyMap struct {
	Key       *string `json:"Key" xml:"Key" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	TtsParams *string `json:"TtsParams" xml:"TtsParams" require:"true"`
}

func (s IvrCallRequestMenuKeyMap) String() string {
	return tea.Prettify(s)
}

func (s IvrCallRequestMenuKeyMap) GoString() string {
	return s.String()
}

func (s *IvrCallRequestMenuKeyMap) SetKey(v string) *IvrCallRequestMenuKeyMap {
	s.Key = &v
	return s
}

func (s *IvrCallRequestMenuKeyMap) SetCode(v string) *IvrCallRequestMenuKeyMap {
	s.Code = &v
	return s
}

func (s *IvrCallRequestMenuKeyMap) SetTtsParams(v string) *IvrCallRequestMenuKeyMap {
	s.TtsParams = &v
	return s
}

type IvrCallResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	CallId    *string `json:"CallId" xml:"CallId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s IvrCallResponse) String() string {
	return tea.Prettify(s)
}

func (s IvrCallResponse) GoString() string {
	return s.String()
}

func (s *IvrCallResponse) SetRequestId(v string) *IvrCallResponse {
	s.RequestId = &v
	return s
}

func (s *IvrCallResponse) SetCallId(v string) *IvrCallResponse {
	s.CallId = &v
	return s
}

func (s *IvrCallResponse) SetCode(v string) *IvrCallResponse {
	s.Code = &v
	return s
}

func (s *IvrCallResponse) SetMessage(v string) *IvrCallResponse {
	s.Message = &v
	return s
}

type SingleCallByVoiceRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	CalledShowNumber     *string `json:"CalledShowNumber" xml:"CalledShowNumber" require:"true"`
	CalledNumber         *string `json:"CalledNumber" xml:"CalledNumber" require:"true"`
	VoiceCode            *string `json:"VoiceCode" xml:"VoiceCode" require:"true"`
	PlayTimes            *int    `json:"PlayTimes" xml:"PlayTimes"`
	Volume               *int    `json:"Volume" xml:"Volume"`
	Speed                *int    `json:"Speed" xml:"Speed"`
	OutId                *string `json:"OutId" xml:"OutId"`
}

func (s SingleCallByVoiceRequest) String() string {
	return tea.Prettify(s)
}

func (s SingleCallByVoiceRequest) GoString() string {
	return s.String()
}

func (s *SingleCallByVoiceRequest) SetAccessKeyId(v string) *SingleCallByVoiceRequest {
	s.AccessKeyId = &v
	return s
}

func (s *SingleCallByVoiceRequest) SetOwnerId(v int64) *SingleCallByVoiceRequest {
	s.OwnerId = &v
	return s
}

func (s *SingleCallByVoiceRequest) SetResourceOwnerAccount(v string) *SingleCallByVoiceRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *SingleCallByVoiceRequest) SetResourceOwnerId(v int64) *SingleCallByVoiceRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *SingleCallByVoiceRequest) SetCalledShowNumber(v string) *SingleCallByVoiceRequest {
	s.CalledShowNumber = &v
	return s
}

func (s *SingleCallByVoiceRequest) SetCalledNumber(v string) *SingleCallByVoiceRequest {
	s.CalledNumber = &v
	return s
}

func (s *SingleCallByVoiceRequest) SetVoiceCode(v string) *SingleCallByVoiceRequest {
	s.VoiceCode = &v
	return s
}

func (s *SingleCallByVoiceRequest) SetPlayTimes(v int) *SingleCallByVoiceRequest {
	s.PlayTimes = &v
	return s
}

func (s *SingleCallByVoiceRequest) SetVolume(v int) *SingleCallByVoiceRequest {
	s.Volume = &v
	return s
}

func (s *SingleCallByVoiceRequest) SetSpeed(v int) *SingleCallByVoiceRequest {
	s.Speed = &v
	return s
}

func (s *SingleCallByVoiceRequest) SetOutId(v string) *SingleCallByVoiceRequest {
	s.OutId = &v
	return s
}

type SingleCallByVoiceResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	CallId    *string `json:"CallId" xml:"CallId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s SingleCallByVoiceResponse) String() string {
	return tea.Prettify(s)
}

func (s SingleCallByVoiceResponse) GoString() string {
	return s.String()
}

func (s *SingleCallByVoiceResponse) SetRequestId(v string) *SingleCallByVoiceResponse {
	s.RequestId = &v
	return s
}

func (s *SingleCallByVoiceResponse) SetCallId(v string) *SingleCallByVoiceResponse {
	s.CallId = &v
	return s
}

func (s *SingleCallByVoiceResponse) SetCode(v string) *SingleCallByVoiceResponse {
	s.Code = &v
	return s
}

func (s *SingleCallByVoiceResponse) SetMessage(v string) *SingleCallByVoiceResponse {
	s.Message = &v
	return s
}

type SingleCallByTtsRequest struct {
	AccessKeyId          *string `json:"AccessKeyId" xml:"AccessKeyId"`
	OwnerId              *int64  `json:"OwnerId" xml:"OwnerId"`
	ResourceOwnerAccount *string `json:"ResourceOwnerAccount" xml:"ResourceOwnerAccount"`
	ResourceOwnerId      *int64  `json:"ResourceOwnerId" xml:"ResourceOwnerId"`
	CalledShowNumber     *string `json:"CalledShowNumber" xml:"CalledShowNumber" require:"true"`
	CalledNumber         *string `json:"CalledNumber" xml:"CalledNumber" require:"true"`
	TtsCode              *string `json:"TtsCode" xml:"TtsCode" require:"true"`
	TtsParam             *string `json:"TtsParam" xml:"TtsParam"`
	PlayTimes            *int    `json:"PlayTimes" xml:"PlayTimes"`
	Volume               *int    `json:"Volume" xml:"Volume"`
	Speed                *int    `json:"Speed" xml:"Speed"`
	OutId                *string `json:"OutId" xml:"OutId"`
}

func (s SingleCallByTtsRequest) String() string {
	return tea.Prettify(s)
}

func (s SingleCallByTtsRequest) GoString() string {
	return s.String()
}

func (s *SingleCallByTtsRequest) SetAccessKeyId(v string) *SingleCallByTtsRequest {
	s.AccessKeyId = &v
	return s
}

func (s *SingleCallByTtsRequest) SetOwnerId(v int64) *SingleCallByTtsRequest {
	s.OwnerId = &v
	return s
}

func (s *SingleCallByTtsRequest) SetResourceOwnerAccount(v string) *SingleCallByTtsRequest {
	s.ResourceOwnerAccount = &v
	return s
}

func (s *SingleCallByTtsRequest) SetResourceOwnerId(v int64) *SingleCallByTtsRequest {
	s.ResourceOwnerId = &v
	return s
}

func (s *SingleCallByTtsRequest) SetCalledShowNumber(v string) *SingleCallByTtsRequest {
	s.CalledShowNumber = &v
	return s
}

func (s *SingleCallByTtsRequest) SetCalledNumber(v string) *SingleCallByTtsRequest {
	s.CalledNumber = &v
	return s
}

func (s *SingleCallByTtsRequest) SetTtsCode(v string) *SingleCallByTtsRequest {
	s.TtsCode = &v
	return s
}

func (s *SingleCallByTtsRequest) SetTtsParam(v string) *SingleCallByTtsRequest {
	s.TtsParam = &v
	return s
}

func (s *SingleCallByTtsRequest) SetPlayTimes(v int) *SingleCallByTtsRequest {
	s.PlayTimes = &v
	return s
}

func (s *SingleCallByTtsRequest) SetVolume(v int) *SingleCallByTtsRequest {
	s.Volume = &v
	return s
}

func (s *SingleCallByTtsRequest) SetSpeed(v int) *SingleCallByTtsRequest {
	s.Speed = &v
	return s
}

func (s *SingleCallByTtsRequest) SetOutId(v string) *SingleCallByTtsRequest {
	s.OutId = &v
	return s
}

type SingleCallByTtsResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	CallId    *string `json:"CallId" xml:"CallId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
}

func (s SingleCallByTtsResponse) String() string {
	return tea.Prettify(s)
}

func (s SingleCallByTtsResponse) GoString() string {
	return s.String()
}

func (s *SingleCallByTtsResponse) SetRequestId(v string) *SingleCallByTtsResponse {
	s.RequestId = &v
	return s
}

func (s *SingleCallByTtsResponse) SetCallId(v string) *SingleCallByTtsResponse {
	s.CallId = &v
	return s
}

func (s *SingleCallByTtsResponse) SetCode(v string) *SingleCallByTtsResponse {
	s.Code = &v
	return s
}

func (s *SingleCallByTtsResponse) SetMessage(v string) *SingleCallByTtsResponse {
	s.Message = &v
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
	client.Endpoint, _err = client.GetEndpoint(client.ProductId, client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) ListRobotTaskCallsWithOptions(request *ListRobotTaskCallsRequest, runtime *util.RuntimeOptions) (_result *ListRobotTaskCallsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListRobotTaskCallsResponse{}
	_body, _err := client.DoRequest(tea.String("ListRobotTaskCalls"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListRobotTaskCalls(request *ListRobotTaskCallsRequest) (_result *ListRobotTaskCallsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListRobotTaskCallsResponse{}
	_body, _err := client.ListRobotTaskCallsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DoRtcNumberAuthWithOptions(request *DoRtcNumberAuthRequest, runtime *util.RuntimeOptions) (_result *DoRtcNumberAuthResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DoRtcNumberAuthResponse{}
	_body, _err := client.DoRequest(tea.String("DoRtcNumberAuth"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DoRtcNumberAuth(request *DoRtcNumberAuthRequest) (_result *DoRtcNumberAuthResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DoRtcNumberAuthResponse{}
	_body, _err := client.DoRtcNumberAuthWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UndoRtcNumberAuthWithOptions(request *UndoRtcNumberAuthRequest, runtime *util.RuntimeOptions) (_result *UndoRtcNumberAuthResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UndoRtcNumberAuthResponse{}
	_body, _err := client.DoRequest(tea.String("UndoRtcNumberAuth"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UndoRtcNumberAuth(request *UndoRtcNumberAuthRequest) (_result *UndoRtcNumberAuthResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UndoRtcNumberAuthResponse{}
	_body, _err := client.UndoRtcNumberAuthWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryRtcNumberAuthStatusWithOptions(request *QueryRtcNumberAuthStatusRequest, runtime *util.RuntimeOptions) (_result *QueryRtcNumberAuthStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryRtcNumberAuthStatusResponse{}
	_body, _err := client.DoRequest(tea.String("QueryRtcNumberAuthStatus"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryRtcNumberAuthStatus(request *QueryRtcNumberAuthStatusRequest) (_result *QueryRtcNumberAuthStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryRtcNumberAuthStatusResponse{}
	_body, _err := client.QueryRtcNumberAuthStatusWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListOrderedNumbersWithOptions(request *ListOrderedNumbersRequest, runtime *util.RuntimeOptions) (_result *ListOrderedNumbersResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListOrderedNumbersResponse{}
	_body, _err := client.DoRequest(tea.String("ListOrderedNumbers"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListOrderedNumbers(request *ListOrderedNumbersRequest) (_result *ListOrderedNumbersResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListOrderedNumbersResponse{}
	_body, _err := client.ListOrderedNumbersWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) StartMicroOutboundWithOptions(request *StartMicroOutboundRequest, runtime *util.RuntimeOptions) (_result *StartMicroOutboundResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &StartMicroOutboundResponse{}
	_body, _err := client.DoRequest(tea.String("StartMicroOutbound"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) StartMicroOutbound(request *StartMicroOutboundRequest) (_result *StartMicroOutboundResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &StartMicroOutboundResponse{}
	_body, _err := client.StartMicroOutboundWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListOutboundStrategiesWithOptions(request *ListOutboundStrategiesRequest, runtime *util.RuntimeOptions) (_result *ListOutboundStrategiesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListOutboundStrategiesResponse{}
	_body, _err := client.DoRequest(tea.String("ListOutboundStrategies"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListOutboundStrategies(request *ListOutboundStrategiesRequest) (_result *ListOutboundStrategiesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListOutboundStrategiesResponse{}
	_body, _err := client.ListOutboundStrategiesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeRecordDataWithOptions(request *DescribeRecordDataRequest, runtime *util.RuntimeOptions) (_result *DescribeRecordDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeRecordDataResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeRecordData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeRecordData(request *DescribeRecordDataRequest) (_result *DescribeRecordDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeRecordDataResponse{}
	_body, _err := client.DescribeRecordDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryVoipNumberBindInfosWithOptions(request *QueryVoipNumberBindInfosRequest, runtime *util.RuntimeOptions) (_result *QueryVoipNumberBindInfosResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryVoipNumberBindInfosResponse{}
	_body, _err := client.DoRequest(tea.String("QueryVoipNumberBindInfos"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryVoipNumberBindInfos(request *QueryVoipNumberBindInfosRequest) (_result *QueryVoipNumberBindInfosResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryVoipNumberBindInfosResponse{}
	_body, _err := client.QueryVoipNumberBindInfosWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ReportVoipProblemsWithOptions(request *ReportVoipProblemsRequest, runtime *util.RuntimeOptions) (_result *ReportVoipProblemsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ReportVoipProblemsResponse{}
	_body, _err := client.DoRequest(tea.String("ReportVoipProblems"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ReportVoipProblems(request *ReportVoipProblemsRequest) (_result *ReportVoipProblemsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ReportVoipProblemsResponse{}
	_body, _err := client.ReportVoipProblemsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UnbindNumberAndVoipIdWithOptions(request *UnbindNumberAndVoipIdRequest, runtime *util.RuntimeOptions) (_result *UnbindNumberAndVoipIdResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UnbindNumberAndVoipIdResponse{}
	_body, _err := client.DoRequest(tea.String("UnbindNumberAndVoipId"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UnbindNumberAndVoipId(request *UnbindNumberAndVoipIdRequest) (_result *UnbindNumberAndVoipIdResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UnbindNumberAndVoipIdResponse{}
	_body, _err := client.UnbindNumberAndVoipIdWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) BindNumberAndVoipIdWithOptions(request *BindNumberAndVoipIdRequest, runtime *util.RuntimeOptions) (_result *BindNumberAndVoipIdResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &BindNumberAndVoipIdResponse{}
	_body, _err := client.DoRequest(tea.String("BindNumberAndVoipId"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) BindNumberAndVoipId(request *BindNumberAndVoipIdRequest) (_result *BindNumberAndVoipIdResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &BindNumberAndVoipIdResponse{}
	_body, _err := client.BindNumberAndVoipIdWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CancelRobotTaskWithOptions(request *CancelRobotTaskRequest, runtime *util.RuntimeOptions) (_result *CancelRobotTaskResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CancelRobotTaskResponse{}
	_body, _err := client.DoRequest(tea.String("CancelRobotTask"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CancelRobotTask(request *CancelRobotTaskRequest) (_result *CancelRobotTaskResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CancelRobotTaskResponse{}
	_body, _err := client.CancelRobotTaskWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UploadRobotTaskCalledFileWithOptions(request *UploadRobotTaskCalledFileRequest, runtime *util.RuntimeOptions) (_result *UploadRobotTaskCalledFileResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UploadRobotTaskCalledFileResponse{}
	_body, _err := client.DoRequest(tea.String("UploadRobotTaskCalledFile"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UploadRobotTaskCalledFile(request *UploadRobotTaskCalledFileRequest) (_result *UploadRobotTaskCalledFileResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UploadRobotTaskCalledFileResponse{}
	_body, _err := client.UploadRobotTaskCalledFileWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteRobotTaskWithOptions(request *DeleteRobotTaskRequest, runtime *util.RuntimeOptions) (_result *DeleteRobotTaskResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteRobotTaskResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteRobotTask"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteRobotTask(request *DeleteRobotTaskRequest) (_result *DeleteRobotTaskResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteRobotTaskResponse{}
	_body, _err := client.DeleteRobotTaskWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) StopRobotTaskWithOptions(request *StopRobotTaskRequest, runtime *util.RuntimeOptions) (_result *StopRobotTaskResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &StopRobotTaskResponse{}
	_body, _err := client.DoRequest(tea.String("StopRobotTask"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) StopRobotTask(request *StopRobotTaskRequest) (_result *StopRobotTaskResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &StopRobotTaskResponse{}
	_body, _err := client.StopRobotTaskWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryRobotTaskCallDetailWithOptions(request *QueryRobotTaskCallDetailRequest, runtime *util.RuntimeOptions) (_result *QueryRobotTaskCallDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryRobotTaskCallDetailResponse{}
	_body, _err := client.DoRequest(tea.String("QueryRobotTaskCallDetail"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryRobotTaskCallDetail(request *QueryRobotTaskCallDetailRequest) (_result *QueryRobotTaskCallDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryRobotTaskCallDetailResponse{}
	_body, _err := client.QueryRobotTaskCallDetailWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryRobotv2AllListWithOptions(request *QueryRobotv2AllListRequest, runtime *util.RuntimeOptions) (_result *QueryRobotv2AllListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryRobotv2AllListResponse{}
	_body, _err := client.DoRequest(tea.String("QueryRobotv2AllList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryRobotv2AllList(request *QueryRobotv2AllListRequest) (_result *QueryRobotv2AllListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryRobotv2AllListResponse{}
	_body, _err := client.QueryRobotv2AllListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryRobotTaskDetailWithOptions(request *QueryRobotTaskDetailRequest, runtime *util.RuntimeOptions) (_result *QueryRobotTaskDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryRobotTaskDetailResponse{}
	_body, _err := client.DoRequest(tea.String("QueryRobotTaskDetail"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryRobotTaskDetail(request *QueryRobotTaskDetailRequest) (_result *QueryRobotTaskDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryRobotTaskDetailResponse{}
	_body, _err := client.QueryRobotTaskDetailWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryRobotTaskCallListWithOptions(request *QueryRobotTaskCallListRequest, runtime *util.RuntimeOptions) (_result *QueryRobotTaskCallListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryRobotTaskCallListResponse{}
	_body, _err := client.DoRequest(tea.String("QueryRobotTaskCallList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryRobotTaskCallList(request *QueryRobotTaskCallListRequest) (_result *QueryRobotTaskCallListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryRobotTaskCallListResponse{}
	_body, _err := client.QueryRobotTaskCallListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) StartRobotTaskWithOptions(request *StartRobotTaskRequest, runtime *util.RuntimeOptions) (_result *StartRobotTaskResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &StartRobotTaskResponse{}
	_body, _err := client.DoRequest(tea.String("StartRobotTask"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) StartRobotTask(request *StartRobotTaskRequest) (_result *StartRobotTaskResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &StartRobotTaskResponse{}
	_body, _err := client.StartRobotTaskWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryRobotTaskListWithOptions(request *QueryRobotTaskListRequest, runtime *util.RuntimeOptions) (_result *QueryRobotTaskListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryRobotTaskListResponse{}
	_body, _err := client.DoRequest(tea.String("QueryRobotTaskList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryRobotTaskList(request *QueryRobotTaskListRequest) (_result *QueryRobotTaskListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryRobotTaskListResponse{}
	_body, _err := client.QueryRobotTaskListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateRobotTaskWithOptions(request *CreateRobotTaskRequest, runtime *util.RuntimeOptions) (_result *CreateRobotTaskResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateRobotTaskResponse{}
	_body, _err := client.DoRequest(tea.String("CreateRobotTask"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateRobotTask(request *CreateRobotTaskRequest) (_result *CreateRobotTaskResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateRobotTaskResponse{}
	_body, _err := client.CreateRobotTaskWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CancelOrderRobotTaskWithOptions(request *CancelOrderRobotTaskRequest, runtime *util.RuntimeOptions) (_result *CancelOrderRobotTaskResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CancelOrderRobotTaskResponse{}
	_body, _err := client.DoRequest(tea.String("CancelOrderRobotTask"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CancelOrderRobotTask(request *CancelOrderRobotTaskRequest) (_result *CancelOrderRobotTaskResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CancelOrderRobotTaskResponse{}
	_body, _err := client.CancelOrderRobotTaskWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SmartCallOperateWithOptions(request *SmartCallOperateRequest, runtime *util.RuntimeOptions) (_result *SmartCallOperateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SmartCallOperateResponse{}
	_body, _err := client.DoRequest(tea.String("SmartCallOperate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SmartCallOperate(request *SmartCallOperateRequest) (_result *SmartCallOperateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SmartCallOperateResponse{}
	_body, _err := client.SmartCallOperateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryRobotInfoListWithOptions(request *QueryRobotInfoListRequest, runtime *util.RuntimeOptions) (_result *QueryRobotInfoListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryRobotInfoListResponse{}
	_body, _err := client.DoRequest(tea.String("QueryRobotInfoList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryRobotInfoList(request *QueryRobotInfoListRequest) (_result *QueryRobotInfoListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryRobotInfoListResponse{}
	_body, _err := client.QueryRobotInfoListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) BatchRobotSmartCallWithOptions(request *BatchRobotSmartCallRequest, runtime *util.RuntimeOptions) (_result *BatchRobotSmartCallResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &BatchRobotSmartCallResponse{}
	_body, _err := client.DoRequest(tea.String("BatchRobotSmartCall"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) BatchRobotSmartCall(request *BatchRobotSmartCallRequest) (_result *BatchRobotSmartCallResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &BatchRobotSmartCallResponse{}
	_body, _err := client.BatchRobotSmartCallWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryCallDetailByTaskIdWithOptions(request *QueryCallDetailByTaskIdRequest, runtime *util.RuntimeOptions) (_result *QueryCallDetailByTaskIdResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryCallDetailByTaskIdResponse{}
	_body, _err := client.DoRequest(tea.String("QueryCallDetailByTaskId"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryCallDetailByTaskId(request *QueryCallDetailByTaskIdRequest) (_result *QueryCallDetailByTaskIdResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryCallDetailByTaskIdResponse{}
	_body, _err := client.QueryCallDetailByTaskIdWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetRtcTokenWithOptions(request *GetRtcTokenRequest, runtime *util.RuntimeOptions) (_result *GetRtcTokenResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetRtcTokenResponse{}
	_body, _err := client.DoRequest(tea.String("GetRtcToken"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetRtcToken(request *GetRtcTokenRequest) (_result *GetRtcTokenResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetRtcTokenResponse{}
	_body, _err := client.GetRtcTokenWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddRtcAccountWithOptions(request *AddRtcAccountRequest, runtime *util.RuntimeOptions) (_result *AddRtcAccountResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddRtcAccountResponse{}
	_body, _err := client.DoRequest(tea.String("AddRtcAccount"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddRtcAccount(request *AddRtcAccountRequest) (_result *AddRtcAccountResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddRtcAccountResponse{}
	_body, _err := client.AddRtcAccountWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) VoipAddAccountWithOptions(request *VoipAddAccountRequest, runtime *util.RuntimeOptions) (_result *VoipAddAccountResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &VoipAddAccountResponse{}
	_body, _err := client.DoRequest(tea.String("VoipAddAccount"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) VoipAddAccount(request *VoipAddAccountRequest) (_result *VoipAddAccountResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &VoipAddAccountResponse{}
	_body, _err := client.VoipAddAccountWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) VoipGetTokenWithOptions(request *VoipGetTokenRequest, runtime *util.RuntimeOptions) (_result *VoipGetTokenResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &VoipGetTokenResponse{}
	_body, _err := client.DoRequest(tea.String("VoipGetToken"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) VoipGetToken(request *VoipGetTokenRequest) (_result *VoipGetTokenResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &VoipGetTokenResponse{}
	_body, _err := client.VoipGetTokenWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SmartCallWithOptions(request *SmartCallRequest, runtime *util.RuntimeOptions) (_result *SmartCallResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SmartCallResponse{}
	_body, _err := client.DoRequest(tea.String("SmartCall"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SmartCall(request *SmartCallRequest) (_result *SmartCallResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SmartCallResponse{}
	_body, _err := client.SmartCallWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) QueryCallDetailByCallIdWithOptions(request *QueryCallDetailByCallIdRequest, runtime *util.RuntimeOptions) (_result *QueryCallDetailByCallIdResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &QueryCallDetailByCallIdResponse{}
	_body, _err := client.DoRequest(tea.String("QueryCallDetailByCallId"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) QueryCallDetailByCallId(request *QueryCallDetailByCallIdRequest) (_result *QueryCallDetailByCallIdResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &QueryCallDetailByCallIdResponse{}
	_body, _err := client.QueryCallDetailByCallIdWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CancelCallWithOptions(request *CancelCallRequest, runtime *util.RuntimeOptions) (_result *CancelCallResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CancelCallResponse{}
	_body, _err := client.DoRequest(tea.String("CancelCall"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CancelCall(request *CancelCallRequest) (_result *CancelCallResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CancelCallResponse{}
	_body, _err := client.CancelCallWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ClickToDialWithOptions(request *ClickToDialRequest, runtime *util.RuntimeOptions) (_result *ClickToDialResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ClickToDialResponse{}
	_body, _err := client.DoRequest(tea.String("ClickToDial"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ClickToDial(request *ClickToDialRequest) (_result *ClickToDialResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ClickToDialResponse{}
	_body, _err := client.ClickToDialWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) IvrCallWithOptions(request *IvrCallRequest, runtime *util.RuntimeOptions) (_result *IvrCallResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &IvrCallResponse{}
	_body, _err := client.DoRequest(tea.String("IvrCall"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) IvrCall(request *IvrCallRequest) (_result *IvrCallResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &IvrCallResponse{}
	_body, _err := client.IvrCallWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SingleCallByVoiceWithOptions(request *SingleCallByVoiceRequest, runtime *util.RuntimeOptions) (_result *SingleCallByVoiceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SingleCallByVoiceResponse{}
	_body, _err := client.DoRequest(tea.String("SingleCallByVoice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SingleCallByVoice(request *SingleCallByVoiceRequest) (_result *SingleCallByVoiceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SingleCallByVoiceResponse{}
	_body, _err := client.SingleCallByVoiceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SingleCallByTtsWithOptions(request *SingleCallByTtsRequest, runtime *util.RuntimeOptions) (_result *SingleCallByTtsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SingleCallByTtsResponse{}
	_body, _err := client.DoRequest(tea.String("SingleCallByTts"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-05-25"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SingleCallByTts(request *SingleCallByTtsRequest) (_result *SingleCallByTtsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SingleCallByTtsResponse{}
	_body, _err := client.SingleCallByTtsWithOptions(request, runtime)
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
