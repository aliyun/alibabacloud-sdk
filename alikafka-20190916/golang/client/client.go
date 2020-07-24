// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type GetAllowedIpListRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s GetAllowedIpListRequest) String() string {
	return tea.Prettify(s)
}

func (s GetAllowedIpListRequest) GoString() string {
	return s.String()
}

func (s *GetAllowedIpListRequest) SetRegionId(v string) *GetAllowedIpListRequest {
	s.RegionId = &v
	return s
}

func (s *GetAllowedIpListRequest) SetInstanceId(v string) *GetAllowedIpListRequest {
	s.InstanceId = &v
	return s
}

type GetAllowedIpListResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	// data
	AllowedList *GetAllowedIpListResponseAllowedList `json:"AllowedList,omitempty" xml:"AllowedList,omitempty" require:"true" type:"Struct"`
}

func (s GetAllowedIpListResponse) String() string {
	return tea.Prettify(s)
}

func (s GetAllowedIpListResponse) GoString() string {
	return s.String()
}

func (s *GetAllowedIpListResponse) SetSuccess(v bool) *GetAllowedIpListResponse {
	s.Success = &v
	return s
}

func (s *GetAllowedIpListResponse) SetRequestId(v string) *GetAllowedIpListResponse {
	s.RequestId = &v
	return s
}

func (s *GetAllowedIpListResponse) SetCode(v int) *GetAllowedIpListResponse {
	s.Code = &v
	return s
}

func (s *GetAllowedIpListResponse) SetMessage(v string) *GetAllowedIpListResponse {
	s.Message = &v
	return s
}

func (s *GetAllowedIpListResponse) SetAllowedList(v *GetAllowedIpListResponseAllowedList) *GetAllowedIpListResponse {
	s.AllowedList = v
	return s
}

type GetAllowedIpListResponseAllowedList struct {
	// deployType
	DeployType *int `json:"DeployType,omitempty" xml:"DeployType,omitempty" require:"true"`
	// vpcList
	VpcList []*GetAllowedIpListResponseAllowedListVpcList `json:"VpcList,omitempty" xml:"VpcList,omitempty" require:"true" type:"Repeated"`
	// internetList
	InternetList []*GetAllowedIpListResponseAllowedListInternetList `json:"InternetList,omitempty" xml:"InternetList,omitempty" require:"true" type:"Repeated"`
}

func (s GetAllowedIpListResponseAllowedList) String() string {
	return tea.Prettify(s)
}

func (s GetAllowedIpListResponseAllowedList) GoString() string {
	return s.String()
}

func (s *GetAllowedIpListResponseAllowedList) SetDeployType(v int) *GetAllowedIpListResponseAllowedList {
	s.DeployType = &v
	return s
}

func (s *GetAllowedIpListResponseAllowedList) SetVpcList(v []*GetAllowedIpListResponseAllowedListVpcList) *GetAllowedIpListResponseAllowedList {
	s.VpcList = v
	return s
}

func (s *GetAllowedIpListResponseAllowedList) SetInternetList(v []*GetAllowedIpListResponseAllowedListInternetList) *GetAllowedIpListResponseAllowedList {
	s.InternetList = v
	return s
}

type GetAllowedIpListResponseAllowedListVpcList struct {
	// portRange
	PortRange *string `json:"PortRange,omitempty" xml:"PortRange,omitempty" require:"true"`
	// whiteIPList
	AllowedIpList []*string `json:"AllowedIpList,omitempty" xml:"AllowedIpList,omitempty" require:"true" type:"Repeated"`
}

func (s GetAllowedIpListResponseAllowedListVpcList) String() string {
	return tea.Prettify(s)
}

func (s GetAllowedIpListResponseAllowedListVpcList) GoString() string {
	return s.String()
}

func (s *GetAllowedIpListResponseAllowedListVpcList) SetPortRange(v string) *GetAllowedIpListResponseAllowedListVpcList {
	s.PortRange = &v
	return s
}

func (s *GetAllowedIpListResponseAllowedListVpcList) SetAllowedIpList(v []*string) *GetAllowedIpListResponseAllowedListVpcList {
	s.AllowedIpList = v
	return s
}

type GetAllowedIpListResponseAllowedListInternetList struct {
	// portRange
	PortRange *string `json:"PortRange,omitempty" xml:"PortRange,omitempty" require:"true"`
	// whiteIPList
	AllowedIpList []*string `json:"AllowedIpList,omitempty" xml:"AllowedIpList,omitempty" require:"true" type:"Repeated"`
}

func (s GetAllowedIpListResponseAllowedListInternetList) String() string {
	return tea.Prettify(s)
}

func (s GetAllowedIpListResponseAllowedListInternetList) GoString() string {
	return s.String()
}

func (s *GetAllowedIpListResponseAllowedListInternetList) SetPortRange(v string) *GetAllowedIpListResponseAllowedListInternetList {
	s.PortRange = &v
	return s
}

func (s *GetAllowedIpListResponseAllowedListInternetList) SetAllowedIpList(v []*string) *GetAllowedIpListResponseAllowedListInternetList {
	s.AllowedIpList = v
	return s
}

type UpdateAllowedIpRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// updateType
	UpdateType *string `json:"UpdateType,omitempty" xml:"UpdateType,omitempty"`
	// portRange
	PortRange *string `json:"PortRange,omitempty" xml:"PortRange,omitempty"`
	// whiteListType
	AllowedListType *string `json:"AllowedListType,omitempty" xml:"AllowedListType,omitempty"`
	// whiteListStr
	AllowedListIp *string `json:"AllowedListIp,omitempty" xml:"AllowedListIp,omitempty"`
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty"`
}

func (s UpdateAllowedIpRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateAllowedIpRequest) GoString() string {
	return s.String()
}

func (s *UpdateAllowedIpRequest) SetRegionId(v string) *UpdateAllowedIpRequest {
	s.RegionId = &v
	return s
}

func (s *UpdateAllowedIpRequest) SetUpdateType(v string) *UpdateAllowedIpRequest {
	s.UpdateType = &v
	return s
}

func (s *UpdateAllowedIpRequest) SetPortRange(v string) *UpdateAllowedIpRequest {
	s.PortRange = &v
	return s
}

func (s *UpdateAllowedIpRequest) SetAllowedListType(v string) *UpdateAllowedIpRequest {
	s.AllowedListType = &v
	return s
}

func (s *UpdateAllowedIpRequest) SetAllowedListIp(v string) *UpdateAllowedIpRequest {
	s.AllowedListIp = &v
	return s
}

func (s *UpdateAllowedIpRequest) SetInstanceId(v string) *UpdateAllowedIpRequest {
	s.InstanceId = &v
	return s
}

type UpdateAllowedIpResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s UpdateAllowedIpResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateAllowedIpResponse) GoString() string {
	return s.String()
}

func (s *UpdateAllowedIpResponse) SetSuccess(v bool) *UpdateAllowedIpResponse {
	s.Success = &v
	return s
}

func (s *UpdateAllowedIpResponse) SetRequestId(v string) *UpdateAllowedIpResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateAllowedIpResponse) SetCode(v int) *UpdateAllowedIpResponse {
	s.Code = &v
	return s
}

func (s *UpdateAllowedIpResponse) SetMessage(v string) *UpdateAllowedIpResponse {
	s.Message = &v
	return s
}

type ModifyPartitionNumRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// topic
	Topic *string `json:"Topic,omitempty" xml:"Topic,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// partitionNum
	AddPartitionNum *int `json:"AddPartitionNum,omitempty" xml:"AddPartitionNum,omitempty" require:"true"`
}

func (s ModifyPartitionNumRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyPartitionNumRequest) GoString() string {
	return s.String()
}

func (s *ModifyPartitionNumRequest) SetInstanceId(v string) *ModifyPartitionNumRequest {
	s.InstanceId = &v
	return s
}

func (s *ModifyPartitionNumRequest) SetTopic(v string) *ModifyPartitionNumRequest {
	s.Topic = &v
	return s
}

func (s *ModifyPartitionNumRequest) SetRegionId(v string) *ModifyPartitionNumRequest {
	s.RegionId = &v
	return s
}

func (s *ModifyPartitionNumRequest) SetAddPartitionNum(v int) *ModifyPartitionNumRequest {
	s.AddPartitionNum = &v
	return s
}

type ModifyPartitionNumResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s ModifyPartitionNumResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyPartitionNumResponse) GoString() string {
	return s.String()
}

func (s *ModifyPartitionNumResponse) SetSuccess(v bool) *ModifyPartitionNumResponse {
	s.Success = &v
	return s
}

func (s *ModifyPartitionNumResponse) SetRequestId(v string) *ModifyPartitionNumResponse {
	s.RequestId = &v
	return s
}

func (s *ModifyPartitionNumResponse) SetCode(v int) *ModifyPartitionNumResponse {
	s.Code = &v
	return s
}

func (s *ModifyPartitionNumResponse) SetMessage(v string) *ModifyPartitionNumResponse {
	s.Message = &v
	return s
}

type ModifyTopicRemarkRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// topic
	Topic *string `json:"Topic,omitempty" xml:"Topic,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// remark
	Remark *string `json:"Remark,omitempty" xml:"Remark,omitempty"`
}

func (s ModifyTopicRemarkRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyTopicRemarkRequest) GoString() string {
	return s.String()
}

func (s *ModifyTopicRemarkRequest) SetInstanceId(v string) *ModifyTopicRemarkRequest {
	s.InstanceId = &v
	return s
}

func (s *ModifyTopicRemarkRequest) SetTopic(v string) *ModifyTopicRemarkRequest {
	s.Topic = &v
	return s
}

func (s *ModifyTopicRemarkRequest) SetRegionId(v string) *ModifyTopicRemarkRequest {
	s.RegionId = &v
	return s
}

func (s *ModifyTopicRemarkRequest) SetRemark(v string) *ModifyTopicRemarkRequest {
	s.Remark = &v
	return s
}

type ModifyTopicRemarkResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s ModifyTopicRemarkResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyTopicRemarkResponse) GoString() string {
	return s.String()
}

func (s *ModifyTopicRemarkResponse) SetSuccess(v bool) *ModifyTopicRemarkResponse {
	s.Success = &v
	return s
}

func (s *ModifyTopicRemarkResponse) SetRequestId(v string) *ModifyTopicRemarkResponse {
	s.RequestId = &v
	return s
}

func (s *ModifyTopicRemarkResponse) SetCode(v int) *ModifyTopicRemarkResponse {
	s.Code = &v
	return s
}

func (s *ModifyTopicRemarkResponse) SetMessage(v string) *ModifyTopicRemarkResponse {
	s.Message = &v
	return s
}

type DeleteSaslUserRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// username
	Username *string `json:"Username,omitempty" xml:"Username,omitempty" require:"true"`
	// type
	Type *string `json:"Type,omitempty" xml:"Type,omitempty"`
}

func (s DeleteSaslUserRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteSaslUserRequest) GoString() string {
	return s.String()
}

func (s *DeleteSaslUserRequest) SetRegionId(v string) *DeleteSaslUserRequest {
	s.RegionId = &v
	return s
}

func (s *DeleteSaslUserRequest) SetInstanceId(v string) *DeleteSaslUserRequest {
	s.InstanceId = &v
	return s
}

func (s *DeleteSaslUserRequest) SetUsername(v string) *DeleteSaslUserRequest {
	s.Username = &v
	return s
}

func (s *DeleteSaslUserRequest) SetType(v string) *DeleteSaslUserRequest {
	s.Type = &v
	return s
}

type DeleteSaslUserResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s DeleteSaslUserResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteSaslUserResponse) GoString() string {
	return s.String()
}

func (s *DeleteSaslUserResponse) SetRequestId(v string) *DeleteSaslUserResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteSaslUserResponse) SetSuccess(v bool) *DeleteSaslUserResponse {
	s.Success = &v
	return s
}

func (s *DeleteSaslUserResponse) SetCode(v int) *DeleteSaslUserResponse {
	s.Code = &v
	return s
}

func (s *DeleteSaslUserResponse) SetMessage(v string) *DeleteSaslUserResponse {
	s.Message = &v
	return s
}

type DescribeSaslUsersRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s DescribeSaslUsersRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSaslUsersRequest) GoString() string {
	return s.String()
}

func (s *DescribeSaslUsersRequest) SetRegionId(v string) *DescribeSaslUsersRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeSaslUsersRequest) SetInstanceId(v string) *DescribeSaslUsersRequest {
	s.InstanceId = &v
	return s
}

type DescribeSaslUsersResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	// data
	SaslUserList *DescribeSaslUsersResponseSaslUserList `json:"SaslUserList,omitempty" xml:"SaslUserList,omitempty" require:"true" type:"Struct"`
}

func (s DescribeSaslUsersResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSaslUsersResponse) GoString() string {
	return s.String()
}

func (s *DescribeSaslUsersResponse) SetRequestId(v string) *DescribeSaslUsersResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSaslUsersResponse) SetSuccess(v bool) *DescribeSaslUsersResponse {
	s.Success = &v
	return s
}

func (s *DescribeSaslUsersResponse) SetCode(v int) *DescribeSaslUsersResponse {
	s.Code = &v
	return s
}

func (s *DescribeSaslUsersResponse) SetMessage(v string) *DescribeSaslUsersResponse {
	s.Message = &v
	return s
}

func (s *DescribeSaslUsersResponse) SetSaslUserList(v *DescribeSaslUsersResponseSaslUserList) *DescribeSaslUsersResponse {
	s.SaslUserList = v
	return s
}

type DescribeSaslUsersResponseSaslUserList struct {
	// SaslUserVO
	SaslUserVO []*DescribeSaslUsersResponseSaslUserListSaslUserVO `json:"SaslUserVO,omitempty" xml:"SaslUserVO,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeSaslUsersResponseSaslUserList) String() string {
	return tea.Prettify(s)
}

func (s DescribeSaslUsersResponseSaslUserList) GoString() string {
	return s.String()
}

func (s *DescribeSaslUsersResponseSaslUserList) SetSaslUserVO(v []*DescribeSaslUsersResponseSaslUserListSaslUserVO) *DescribeSaslUsersResponseSaslUserList {
	s.SaslUserVO = v
	return s
}

type DescribeSaslUsersResponseSaslUserListSaslUserVO struct {
	// username
	Username *string `json:"Username,omitempty" xml:"Username,omitempty" require:"true"`
	// password
	Password *string `json:"Password,omitempty" xml:"Password,omitempty" require:"true"`
	// type
	Type *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
}

func (s DescribeSaslUsersResponseSaslUserListSaslUserVO) String() string {
	return tea.Prettify(s)
}

func (s DescribeSaslUsersResponseSaslUserListSaslUserVO) GoString() string {
	return s.String()
}

func (s *DescribeSaslUsersResponseSaslUserListSaslUserVO) SetUsername(v string) *DescribeSaslUsersResponseSaslUserListSaslUserVO {
	s.Username = &v
	return s
}

func (s *DescribeSaslUsersResponseSaslUserListSaslUserVO) SetPassword(v string) *DescribeSaslUsersResponseSaslUserListSaslUserVO {
	s.Password = &v
	return s
}

func (s *DescribeSaslUsersResponseSaslUserListSaslUserVO) SetType(v string) *DescribeSaslUsersResponseSaslUserListSaslUserVO {
	s.Type = &v
	return s
}

type CreateAclRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// username
	Username *string `json:"Username,omitempty" xml:"Username,omitempty" require:"true"`
	// aclResourceType
	AclResourceType *string `json:"AclResourceType,omitempty" xml:"AclResourceType,omitempty" require:"true"`
	// aclResourceName
	AclResourceName *string `json:"AclResourceName,omitempty" xml:"AclResourceName,omitempty" require:"true"`
	// aclResourcePatternType
	AclResourcePatternType *string `json:"AclResourcePatternType,omitempty" xml:"AclResourcePatternType,omitempty" require:"true"`
	// aclOperationType
	AclOperationType *string `json:"AclOperationType,omitempty" xml:"AclOperationType,omitempty" require:"true"`
}

func (s CreateAclRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateAclRequest) GoString() string {
	return s.String()
}

func (s *CreateAclRequest) SetRegionId(v string) *CreateAclRequest {
	s.RegionId = &v
	return s
}

func (s *CreateAclRequest) SetInstanceId(v string) *CreateAclRequest {
	s.InstanceId = &v
	return s
}

func (s *CreateAclRequest) SetUsername(v string) *CreateAclRequest {
	s.Username = &v
	return s
}

func (s *CreateAclRequest) SetAclResourceType(v string) *CreateAclRequest {
	s.AclResourceType = &v
	return s
}

func (s *CreateAclRequest) SetAclResourceName(v string) *CreateAclRequest {
	s.AclResourceName = &v
	return s
}

func (s *CreateAclRequest) SetAclResourcePatternType(v string) *CreateAclRequest {
	s.AclResourcePatternType = &v
	return s
}

func (s *CreateAclRequest) SetAclOperationType(v string) *CreateAclRequest {
	s.AclOperationType = &v
	return s
}

type CreateAclResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s CreateAclResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateAclResponse) GoString() string {
	return s.String()
}

func (s *CreateAclResponse) SetRequestId(v string) *CreateAclResponse {
	s.RequestId = &v
	return s
}

func (s *CreateAclResponse) SetSuccess(v bool) *CreateAclResponse {
	s.Success = &v
	return s
}

func (s *CreateAclResponse) SetCode(v int) *CreateAclResponse {
	s.Code = &v
	return s
}

func (s *CreateAclResponse) SetMessage(v string) *CreateAclResponse {
	s.Message = &v
	return s
}

type CreateSaslUserRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// username
	Username *string `json:"Username,omitempty" xml:"Username,omitempty" require:"true"`
	// password
	Password *string `json:"Password,omitempty" xml:"Password,omitempty" require:"true"`
	// type
	Type *string `json:"Type,omitempty" xml:"Type,omitempty"`
}

func (s CreateSaslUserRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateSaslUserRequest) GoString() string {
	return s.String()
}

func (s *CreateSaslUserRequest) SetRegionId(v string) *CreateSaslUserRequest {
	s.RegionId = &v
	return s
}

func (s *CreateSaslUserRequest) SetInstanceId(v string) *CreateSaslUserRequest {
	s.InstanceId = &v
	return s
}

func (s *CreateSaslUserRequest) SetUsername(v string) *CreateSaslUserRequest {
	s.Username = &v
	return s
}

func (s *CreateSaslUserRequest) SetPassword(v string) *CreateSaslUserRequest {
	s.Password = &v
	return s
}

func (s *CreateSaslUserRequest) SetType(v string) *CreateSaslUserRequest {
	s.Type = &v
	return s
}

type CreateSaslUserResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s CreateSaslUserResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateSaslUserResponse) GoString() string {
	return s.String()
}

func (s *CreateSaslUserResponse) SetRequestId(v string) *CreateSaslUserResponse {
	s.RequestId = &v
	return s
}

func (s *CreateSaslUserResponse) SetSuccess(v bool) *CreateSaslUserResponse {
	s.Success = &v
	return s
}

func (s *CreateSaslUserResponse) SetCode(v int) *CreateSaslUserResponse {
	s.Code = &v
	return s
}

func (s *CreateSaslUserResponse) SetMessage(v string) *CreateSaslUserResponse {
	s.Message = &v
	return s
}

type DeleteAclRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// username
	Username *string `json:"Username,omitempty" xml:"Username,omitempty" require:"true"`
	// aclResourceType
	AclResourceType *string `json:"AclResourceType,omitempty" xml:"AclResourceType,omitempty" require:"true"`
	// aclResourceName
	AclResourceName *string `json:"AclResourceName,omitempty" xml:"AclResourceName,omitempty" require:"true"`
	// aclResourcePatternType
	AclResourcePatternType *string `json:"AclResourcePatternType,omitempty" xml:"AclResourcePatternType,omitempty" require:"true"`
	// aclOperationType
	AclOperationType *string `json:"AclOperationType,omitempty" xml:"AclOperationType,omitempty" require:"true"`
}

func (s DeleteAclRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAclRequest) GoString() string {
	return s.String()
}

func (s *DeleteAclRequest) SetRegionId(v string) *DeleteAclRequest {
	s.RegionId = &v
	return s
}

func (s *DeleteAclRequest) SetInstanceId(v string) *DeleteAclRequest {
	s.InstanceId = &v
	return s
}

func (s *DeleteAclRequest) SetUsername(v string) *DeleteAclRequest {
	s.Username = &v
	return s
}

func (s *DeleteAclRequest) SetAclResourceType(v string) *DeleteAclRequest {
	s.AclResourceType = &v
	return s
}

func (s *DeleteAclRequest) SetAclResourceName(v string) *DeleteAclRequest {
	s.AclResourceName = &v
	return s
}

func (s *DeleteAclRequest) SetAclResourcePatternType(v string) *DeleteAclRequest {
	s.AclResourcePatternType = &v
	return s
}

func (s *DeleteAclRequest) SetAclOperationType(v string) *DeleteAclRequest {
	s.AclOperationType = &v
	return s
}

type DeleteAclResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s DeleteAclResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAclResponse) GoString() string {
	return s.String()
}

func (s *DeleteAclResponse) SetRequestId(v string) *DeleteAclResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteAclResponse) SetSuccess(v bool) *DeleteAclResponse {
	s.Success = &v
	return s
}

func (s *DeleteAclResponse) SetCode(v int) *DeleteAclResponse {
	s.Code = &v
	return s
}

func (s *DeleteAclResponse) SetMessage(v string) *DeleteAclResponse {
	s.Message = &v
	return s
}

type DescribeAclsRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// username
	Username *string `json:"Username,omitempty" xml:"Username,omitempty" require:"true"`
	// aclResourceType
	AclResourceType *string `json:"AclResourceType,omitempty" xml:"AclResourceType,omitempty" require:"true"`
	// aclResourceName
	AclResourceName *string `json:"AclResourceName,omitempty" xml:"AclResourceName,omitempty" require:"true"`
}

func (s DescribeAclsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAclsRequest) GoString() string {
	return s.String()
}

func (s *DescribeAclsRequest) SetRegionId(v string) *DescribeAclsRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeAclsRequest) SetInstanceId(v string) *DescribeAclsRequest {
	s.InstanceId = &v
	return s
}

func (s *DescribeAclsRequest) SetUsername(v string) *DescribeAclsRequest {
	s.Username = &v
	return s
}

func (s *DescribeAclsRequest) SetAclResourceType(v string) *DescribeAclsRequest {
	s.AclResourceType = &v
	return s
}

func (s *DescribeAclsRequest) SetAclResourceName(v string) *DescribeAclsRequest {
	s.AclResourceName = &v
	return s
}

type DescribeAclsResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	// data
	KafkaAclList *DescribeAclsResponseKafkaAclList `json:"KafkaAclList,omitempty" xml:"KafkaAclList,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAclsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAclsResponse) GoString() string {
	return s.String()
}

func (s *DescribeAclsResponse) SetRequestId(v string) *DescribeAclsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAclsResponse) SetSuccess(v bool) *DescribeAclsResponse {
	s.Success = &v
	return s
}

func (s *DescribeAclsResponse) SetCode(v int) *DescribeAclsResponse {
	s.Code = &v
	return s
}

func (s *DescribeAclsResponse) SetMessage(v string) *DescribeAclsResponse {
	s.Message = &v
	return s
}

func (s *DescribeAclsResponse) SetKafkaAclList(v *DescribeAclsResponseKafkaAclList) *DescribeAclsResponse {
	s.KafkaAclList = v
	return s
}

type DescribeAclsResponseKafkaAclList struct {
	// KafkaAclVO
	KafkaAclVO []*DescribeAclsResponseKafkaAclListKafkaAclVO `json:"KafkaAclVO,omitempty" xml:"KafkaAclVO,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAclsResponseKafkaAclList) String() string {
	return tea.Prettify(s)
}

func (s DescribeAclsResponseKafkaAclList) GoString() string {
	return s.String()
}

func (s *DescribeAclsResponseKafkaAclList) SetKafkaAclVO(v []*DescribeAclsResponseKafkaAclListKafkaAclVO) *DescribeAclsResponseKafkaAclList {
	s.KafkaAclVO = v
	return s
}

type DescribeAclsResponseKafkaAclListKafkaAclVO struct {
	// username
	Username *string `json:"Username,omitempty" xml:"Username,omitempty" require:"true"`
	// aclResourceType
	AclResourceType *string `json:"AclResourceType,omitempty" xml:"AclResourceType,omitempty" require:"true"`
	// aclResourceName
	AclResourceName *string `json:"AclResourceName,omitempty" xml:"AclResourceName,omitempty" require:"true"`
	// aclResourcePatternType
	AclResourcePatternType *string `json:"AclResourcePatternType,omitempty" xml:"AclResourcePatternType,omitempty" require:"true"`
	// host
	Host *string `json:"Host,omitempty" xml:"Host,omitempty" require:"true"`
	// aclOperationType
	AclOperationType *string `json:"AclOperationType,omitempty" xml:"AclOperationType,omitempty" require:"true"`
}

func (s DescribeAclsResponseKafkaAclListKafkaAclVO) String() string {
	return tea.Prettify(s)
}

func (s DescribeAclsResponseKafkaAclListKafkaAclVO) GoString() string {
	return s.String()
}

func (s *DescribeAclsResponseKafkaAclListKafkaAclVO) SetUsername(v string) *DescribeAclsResponseKafkaAclListKafkaAclVO {
	s.Username = &v
	return s
}

func (s *DescribeAclsResponseKafkaAclListKafkaAclVO) SetAclResourceType(v string) *DescribeAclsResponseKafkaAclListKafkaAclVO {
	s.AclResourceType = &v
	return s
}

func (s *DescribeAclsResponseKafkaAclListKafkaAclVO) SetAclResourceName(v string) *DescribeAclsResponseKafkaAclListKafkaAclVO {
	s.AclResourceName = &v
	return s
}

func (s *DescribeAclsResponseKafkaAclListKafkaAclVO) SetAclResourcePatternType(v string) *DescribeAclsResponseKafkaAclListKafkaAclVO {
	s.AclResourcePatternType = &v
	return s
}

func (s *DescribeAclsResponseKafkaAclListKafkaAclVO) SetHost(v string) *DescribeAclsResponseKafkaAclListKafkaAclVO {
	s.Host = &v
	return s
}

func (s *DescribeAclsResponseKafkaAclListKafkaAclVO) SetAclOperationType(v string) *DescribeAclsResponseKafkaAclListKafkaAclVO {
	s.AclOperationType = &v
	return s
}

type CreatePrePayOrderRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// topicQuota
	TopicQuota *int `json:"TopicQuota,omitempty" xml:"TopicQuota,omitempty" require:"true"`
	// diskType
	DiskType *string `json:"DiskType,omitempty" xml:"DiskType,omitempty" require:"true"`
	// diskSize
	DiskSize *int `json:"DiskSize,omitempty" xml:"DiskSize,omitempty" require:"true"`
	// deployType
	DeployType *int `json:"DeployType,omitempty" xml:"DeployType,omitempty" require:"true"`
	// ioMax
	IoMax *int `json:"IoMax,omitempty" xml:"IoMax,omitempty" require:"true"`
	// eipMax
	EipMax *int `json:"EipMax,omitempty" xml:"EipMax,omitempty"`
	// specType
	SpecType *string `json:"SpecType,omitempty" xml:"SpecType,omitempty"`
}

func (s CreatePrePayOrderRequest) String() string {
	return tea.Prettify(s)
}

func (s CreatePrePayOrderRequest) GoString() string {
	return s.String()
}

func (s *CreatePrePayOrderRequest) SetRegionId(v string) *CreatePrePayOrderRequest {
	s.RegionId = &v
	return s
}

func (s *CreatePrePayOrderRequest) SetTopicQuota(v int) *CreatePrePayOrderRequest {
	s.TopicQuota = &v
	return s
}

func (s *CreatePrePayOrderRequest) SetDiskType(v string) *CreatePrePayOrderRequest {
	s.DiskType = &v
	return s
}

func (s *CreatePrePayOrderRequest) SetDiskSize(v int) *CreatePrePayOrderRequest {
	s.DiskSize = &v
	return s
}

func (s *CreatePrePayOrderRequest) SetDeployType(v int) *CreatePrePayOrderRequest {
	s.DeployType = &v
	return s
}

func (s *CreatePrePayOrderRequest) SetIoMax(v int) *CreatePrePayOrderRequest {
	s.IoMax = &v
	return s
}

func (s *CreatePrePayOrderRequest) SetEipMax(v int) *CreatePrePayOrderRequest {
	s.EipMax = &v
	return s
}

func (s *CreatePrePayOrderRequest) SetSpecType(v string) *CreatePrePayOrderRequest {
	s.SpecType = &v
	return s
}

type CreatePrePayOrderResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	// data
	OrderId *string `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
}

func (s CreatePrePayOrderResponse) String() string {
	return tea.Prettify(s)
}

func (s CreatePrePayOrderResponse) GoString() string {
	return s.String()
}

func (s *CreatePrePayOrderResponse) SetRequestId(v string) *CreatePrePayOrderResponse {
	s.RequestId = &v
	return s
}

func (s *CreatePrePayOrderResponse) SetSuccess(v bool) *CreatePrePayOrderResponse {
	s.Success = &v
	return s
}

func (s *CreatePrePayOrderResponse) SetCode(v int) *CreatePrePayOrderResponse {
	s.Code = &v
	return s
}

func (s *CreatePrePayOrderResponse) SetMessage(v string) *CreatePrePayOrderResponse {
	s.Message = &v
	return s
}

func (s *CreatePrePayOrderResponse) SetOrderId(v string) *CreatePrePayOrderResponse {
	s.OrderId = &v
	return s
}

type UpgradePrePayOrderRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// topicQuota
	TopicQuota *int `json:"TopicQuota,omitempty" xml:"TopicQuota,omitempty" require:"true"`
	// diskSize
	DiskSize *int `json:"DiskSize,omitempty" xml:"DiskSize,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// ioMax
	IoMax *int `json:"IoMax,omitempty" xml:"IoMax,omitempty" require:"true"`
	// specType
	SpecType *string `json:"SpecType,omitempty" xml:"SpecType,omitempty"`
	// eipMax
	EipMax *int `json:"EipMax,omitempty" xml:"EipMax,omitempty"`
}

func (s UpgradePrePayOrderRequest) String() string {
	return tea.Prettify(s)
}

func (s UpgradePrePayOrderRequest) GoString() string {
	return s.String()
}

func (s *UpgradePrePayOrderRequest) SetInstanceId(v string) *UpgradePrePayOrderRequest {
	s.InstanceId = &v
	return s
}

func (s *UpgradePrePayOrderRequest) SetTopicQuota(v int) *UpgradePrePayOrderRequest {
	s.TopicQuota = &v
	return s
}

func (s *UpgradePrePayOrderRequest) SetDiskSize(v int) *UpgradePrePayOrderRequest {
	s.DiskSize = &v
	return s
}

func (s *UpgradePrePayOrderRequest) SetRegionId(v string) *UpgradePrePayOrderRequest {
	s.RegionId = &v
	return s
}

func (s *UpgradePrePayOrderRequest) SetIoMax(v int) *UpgradePrePayOrderRequest {
	s.IoMax = &v
	return s
}

func (s *UpgradePrePayOrderRequest) SetSpecType(v string) *UpgradePrePayOrderRequest {
	s.SpecType = &v
	return s
}

func (s *UpgradePrePayOrderRequest) SetEipMax(v int) *UpgradePrePayOrderRequest {
	s.EipMax = &v
	return s
}

type UpgradePrePayOrderResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s UpgradePrePayOrderResponse) String() string {
	return tea.Prettify(s)
}

func (s UpgradePrePayOrderResponse) GoString() string {
	return s.String()
}

func (s *UpgradePrePayOrderResponse) SetSuccess(v bool) *UpgradePrePayOrderResponse {
	s.Success = &v
	return s
}

func (s *UpgradePrePayOrderResponse) SetRequestId(v string) *UpgradePrePayOrderResponse {
	s.RequestId = &v
	return s
}

func (s *UpgradePrePayOrderResponse) SetCode(v int) *UpgradePrePayOrderResponse {
	s.Code = &v
	return s
}

func (s *UpgradePrePayOrderResponse) SetMessage(v string) *UpgradePrePayOrderResponse {
	s.Message = &v
	return s
}

type DeleteInstanceRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s DeleteInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteInstanceRequest) GoString() string {
	return s.String()
}

func (s *DeleteInstanceRequest) SetInstanceId(v string) *DeleteInstanceRequest {
	s.InstanceId = &v
	return s
}

func (s *DeleteInstanceRequest) SetRegionId(v string) *DeleteInstanceRequest {
	s.RegionId = &v
	return s
}

type DeleteInstanceResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s DeleteInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteInstanceResponse) GoString() string {
	return s.String()
}

func (s *DeleteInstanceResponse) SetSuccess(v bool) *DeleteInstanceResponse {
	s.Success = &v
	return s
}

func (s *DeleteInstanceResponse) SetRequestId(v string) *DeleteInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteInstanceResponse) SetCode(v int) *DeleteInstanceResponse {
	s.Code = &v
	return s
}

func (s *DeleteInstanceResponse) SetMessage(v string) *DeleteInstanceResponse {
	s.Message = &v
	return s
}

type GetMetaProductListRequest struct {
	// listNormal
	ListNormal *string `json:"ListNormal,omitempty" xml:"ListNormal,omitempty"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s GetMetaProductListRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMetaProductListRequest) GoString() string {
	return s.String()
}

func (s *GetMetaProductListRequest) SetListNormal(v string) *GetMetaProductListRequest {
	s.ListNormal = &v
	return s
}

func (s *GetMetaProductListRequest) SetRegionId(v string) *GetMetaProductListRequest {
	s.RegionId = &v
	return s
}

type GetMetaProductListResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	// data
	MetaData *GetMetaProductListResponseMetaData `json:"MetaData,omitempty" xml:"MetaData,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaProductListResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMetaProductListResponse) GoString() string {
	return s.String()
}

func (s *GetMetaProductListResponse) SetSuccess(v bool) *GetMetaProductListResponse {
	s.Success = &v
	return s
}

func (s *GetMetaProductListResponse) SetRequestId(v string) *GetMetaProductListResponse {
	s.RequestId = &v
	return s
}

func (s *GetMetaProductListResponse) SetCode(v int) *GetMetaProductListResponse {
	s.Code = &v
	return s
}

func (s *GetMetaProductListResponse) SetMessage(v string) *GetMetaProductListResponse {
	s.Message = &v
	return s
}

func (s *GetMetaProductListResponse) SetMetaData(v *GetMetaProductListResponseMetaData) *GetMetaProductListResponse {
	s.MetaData = v
	return s
}

type GetMetaProductListResponseMetaData struct {
	// enumNames
	Names map[string]interface{} `json:"Names,omitempty" xml:"Names,omitempty" require:"true"`
	// productsNormal
	ProductsNormal *GetMetaProductListResponseMetaDataProductsNormal `json:"ProductsNormal,omitempty" xml:"ProductsNormal,omitempty" require:"true" type:"Struct"`
	// productsProfessional
	ProductsProfessional *GetMetaProductListResponseMetaDataProductsProfessional `json:"ProductsProfessional,omitempty" xml:"ProductsProfessional,omitempty" require:"true" type:"Struct"`
}

func (s GetMetaProductListResponseMetaData) String() string {
	return tea.Prettify(s)
}

func (s GetMetaProductListResponseMetaData) GoString() string {
	return s.String()
}

func (s *GetMetaProductListResponseMetaData) SetNames(v map[string]interface{}) *GetMetaProductListResponseMetaData {
	s.Names = v
	return s
}

func (s *GetMetaProductListResponseMetaData) SetProductsNormal(v *GetMetaProductListResponseMetaDataProductsNormal) *GetMetaProductListResponseMetaData {
	s.ProductsNormal = v
	return s
}

func (s *GetMetaProductListResponseMetaData) SetProductsProfessional(v *GetMetaProductListResponseMetaDataProductsProfessional) *GetMetaProductListResponseMetaData {
	s.ProductsProfessional = v
	return s
}

type GetMetaProductListResponseMetaDataProductsNormal struct {
	// SpecVO
	SpecVO []*GetMetaProductListResponseMetaDataProductsNormalSpecVO `json:"SpecVO,omitempty" xml:"SpecVO,omitempty" require:"true" type:"Repeated"`
}

func (s GetMetaProductListResponseMetaDataProductsNormal) String() string {
	return tea.Prettify(s)
}

func (s GetMetaProductListResponseMetaDataProductsNormal) GoString() string {
	return s.String()
}

func (s *GetMetaProductListResponseMetaDataProductsNormal) SetSpecVO(v []*GetMetaProductListResponseMetaDataProductsNormalSpecVO) *GetMetaProductListResponseMetaDataProductsNormal {
	s.SpecVO = v
	return s
}

type GetMetaProductListResponseMetaDataProductsNormalSpecVO struct {
	// regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// specType
	SpecType *string `json:"SpecType,omitempty" xml:"SpecType,omitempty" require:"true"`
	// ioMax
	IoMax *int64 `json:"IoMax,omitempty" xml:"IoMax,omitempty" require:"true"`
	// diskType
	DiskType *string `json:"DiskType,omitempty" xml:"DiskType,omitempty" require:"true"`
	// diskSize
	DiskSize *string `json:"DiskSize,omitempty" xml:"DiskSize,omitempty" require:"true"`
	// topicQuota
	TopicQuota *string `json:"TopicQuota,omitempty" xml:"TopicQuota,omitempty" require:"true"`
	// deployType
	DeployType *string `json:"DeployType,omitempty" xml:"DeployType,omitempty" require:"true"`
}

func (s GetMetaProductListResponseMetaDataProductsNormalSpecVO) String() string {
	return tea.Prettify(s)
}

func (s GetMetaProductListResponseMetaDataProductsNormalSpecVO) GoString() string {
	return s.String()
}

func (s *GetMetaProductListResponseMetaDataProductsNormalSpecVO) SetRegionId(v string) *GetMetaProductListResponseMetaDataProductsNormalSpecVO {
	s.RegionId = &v
	return s
}

func (s *GetMetaProductListResponseMetaDataProductsNormalSpecVO) SetSpecType(v string) *GetMetaProductListResponseMetaDataProductsNormalSpecVO {
	s.SpecType = &v
	return s
}

func (s *GetMetaProductListResponseMetaDataProductsNormalSpecVO) SetIoMax(v int64) *GetMetaProductListResponseMetaDataProductsNormalSpecVO {
	s.IoMax = &v
	return s
}

func (s *GetMetaProductListResponseMetaDataProductsNormalSpecVO) SetDiskType(v string) *GetMetaProductListResponseMetaDataProductsNormalSpecVO {
	s.DiskType = &v
	return s
}

func (s *GetMetaProductListResponseMetaDataProductsNormalSpecVO) SetDiskSize(v string) *GetMetaProductListResponseMetaDataProductsNormalSpecVO {
	s.DiskSize = &v
	return s
}

func (s *GetMetaProductListResponseMetaDataProductsNormalSpecVO) SetTopicQuota(v string) *GetMetaProductListResponseMetaDataProductsNormalSpecVO {
	s.TopicQuota = &v
	return s
}

func (s *GetMetaProductListResponseMetaDataProductsNormalSpecVO) SetDeployType(v string) *GetMetaProductListResponseMetaDataProductsNormalSpecVO {
	s.DeployType = &v
	return s
}

type GetMetaProductListResponseMetaDataProductsProfessional struct {
	// SpecVO
	SpecVO []*GetMetaProductListResponseMetaDataProductsProfessionalSpecVO `json:"SpecVO,omitempty" xml:"SpecVO,omitempty" require:"true" type:"Repeated"`
}

func (s GetMetaProductListResponseMetaDataProductsProfessional) String() string {
	return tea.Prettify(s)
}

func (s GetMetaProductListResponseMetaDataProductsProfessional) GoString() string {
	return s.String()
}

func (s *GetMetaProductListResponseMetaDataProductsProfessional) SetSpecVO(v []*GetMetaProductListResponseMetaDataProductsProfessionalSpecVO) *GetMetaProductListResponseMetaDataProductsProfessional {
	s.SpecVO = v
	return s
}

type GetMetaProductListResponseMetaDataProductsProfessionalSpecVO struct {
	// regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// specType
	SpecType *string `json:"SpecType,omitempty" xml:"SpecType,omitempty" require:"true"`
	// ioMax
	IoMax *int `json:"IoMax,omitempty" xml:"IoMax,omitempty" require:"true"`
	// diskType
	DiskType *string `json:"DiskType,omitempty" xml:"DiskType,omitempty" require:"true"`
	// diskSize
	DiskSize *string `json:"DiskSize,omitempty" xml:"DiskSize,omitempty" require:"true"`
	// topicQuota
	TopicQuota *string `json:"TopicQuota,omitempty" xml:"TopicQuota,omitempty" require:"true"`
	// deployType
	DeployType *string `json:"DeployType,omitempty" xml:"DeployType,omitempty" require:"true"`
}

func (s GetMetaProductListResponseMetaDataProductsProfessionalSpecVO) String() string {
	return tea.Prettify(s)
}

func (s GetMetaProductListResponseMetaDataProductsProfessionalSpecVO) GoString() string {
	return s.String()
}

func (s *GetMetaProductListResponseMetaDataProductsProfessionalSpecVO) SetRegionId(v string) *GetMetaProductListResponseMetaDataProductsProfessionalSpecVO {
	s.RegionId = &v
	return s
}

func (s *GetMetaProductListResponseMetaDataProductsProfessionalSpecVO) SetSpecType(v string) *GetMetaProductListResponseMetaDataProductsProfessionalSpecVO {
	s.SpecType = &v
	return s
}

func (s *GetMetaProductListResponseMetaDataProductsProfessionalSpecVO) SetIoMax(v int) *GetMetaProductListResponseMetaDataProductsProfessionalSpecVO {
	s.IoMax = &v
	return s
}

func (s *GetMetaProductListResponseMetaDataProductsProfessionalSpecVO) SetDiskType(v string) *GetMetaProductListResponseMetaDataProductsProfessionalSpecVO {
	s.DiskType = &v
	return s
}

func (s *GetMetaProductListResponseMetaDataProductsProfessionalSpecVO) SetDiskSize(v string) *GetMetaProductListResponseMetaDataProductsProfessionalSpecVO {
	s.DiskSize = &v
	return s
}

func (s *GetMetaProductListResponseMetaDataProductsProfessionalSpecVO) SetTopicQuota(v string) *GetMetaProductListResponseMetaDataProductsProfessionalSpecVO {
	s.TopicQuota = &v
	return s
}

func (s *GetMetaProductListResponseMetaDataProductsProfessionalSpecVO) SetDeployType(v string) *GetMetaProductListResponseMetaDataProductsProfessionalSpecVO {
	s.DeployType = &v
	return s
}

type ConvertPostPayOrderRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// duration
	Duration *int `json:"Duration,omitempty" xml:"Duration,omitempty"`
}

func (s ConvertPostPayOrderRequest) String() string {
	return tea.Prettify(s)
}

func (s ConvertPostPayOrderRequest) GoString() string {
	return s.String()
}

func (s *ConvertPostPayOrderRequest) SetRegionId(v string) *ConvertPostPayOrderRequest {
	s.RegionId = &v
	return s
}

func (s *ConvertPostPayOrderRequest) SetInstanceId(v string) *ConvertPostPayOrderRequest {
	s.InstanceId = &v
	return s
}

func (s *ConvertPostPayOrderRequest) SetDuration(v int) *ConvertPostPayOrderRequest {
	s.Duration = &v
	return s
}

type ConvertPostPayOrderResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	// data
	OrderId *string `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
}

func (s ConvertPostPayOrderResponse) String() string {
	return tea.Prettify(s)
}

func (s ConvertPostPayOrderResponse) GoString() string {
	return s.String()
}

func (s *ConvertPostPayOrderResponse) SetRequestId(v string) *ConvertPostPayOrderResponse {
	s.RequestId = &v
	return s
}

func (s *ConvertPostPayOrderResponse) SetSuccess(v bool) *ConvertPostPayOrderResponse {
	s.Success = &v
	return s
}

func (s *ConvertPostPayOrderResponse) SetCode(v int) *ConvertPostPayOrderResponse {
	s.Code = &v
	return s
}

func (s *ConvertPostPayOrderResponse) SetMessage(v string) *ConvertPostPayOrderResponse {
	s.Message = &v
	return s
}

func (s *ConvertPostPayOrderResponse) SetOrderId(v string) *ConvertPostPayOrderResponse {
	s.OrderId = &v
	return s
}

type ListTagResourcesRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// resourceType
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	// resourceIds
	ResourceId []*string `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" type:"Repeated"`
	// tags
	Tag []*ListTagResourcesRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
	// nextToken
	NextToken *string `json:"NextToken,omitempty" xml:"NextToken,omitempty"`
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

func (s *ListTagResourcesRequest) SetResourceType(v string) *ListTagResourcesRequest {
	s.ResourceType = &v
	return s
}

func (s *ListTagResourcesRequest) SetResourceId(v []*string) *ListTagResourcesRequest {
	s.ResourceId = v
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
	// key
	Key *string `json:"Key,omitempty" xml:"Key,omitempty"`
	// value
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
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// data.nextToken
	NextToken *string `json:"NextToken,omitempty" xml:"NextToken,omitempty" require:"true"`
	// data.resources
	TagResources *ListTagResourcesResponseTagResources `json:"TagResources,omitempty" xml:"TagResources,omitempty" require:"true" type:"Struct"`
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

func (s *ListTagResourcesResponse) SetTagResources(v *ListTagResourcesResponseTagResources) *ListTagResourcesResponse {
	s.TagResources = v
	return s
}

type ListTagResourcesResponseTagResources struct {
	// TagResource
	TagResource []*ListTagResourcesResponseTagResourcesTagResource `json:"TagResource,omitempty" xml:"TagResource,omitempty" require:"true" type:"Repeated"`
}

func (s ListTagResourcesResponseTagResources) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesResponseTagResources) GoString() string {
	return s.String()
}

func (s *ListTagResourcesResponseTagResources) SetTagResource(v []*ListTagResourcesResponseTagResourcesTagResource) *ListTagResourcesResponseTagResources {
	s.TagResource = v
	return s
}

type ListTagResourcesResponseTagResourcesTagResource struct {
	// keyName
	TagKey *string `json:"TagKey,omitempty" xml:"TagKey,omitempty" require:"true"`
	// valueName
	TagValue *string `json:"TagValue,omitempty" xml:"TagValue,omitempty" require:"true"`
	// resourceType
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	// resourceId
	ResourceId *string `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true"`
}

func (s ListTagResourcesResponseTagResourcesTagResource) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesResponseTagResourcesTagResource) GoString() string {
	return s.String()
}

func (s *ListTagResourcesResponseTagResourcesTagResource) SetTagKey(v string) *ListTagResourcesResponseTagResourcesTagResource {
	s.TagKey = &v
	return s
}

func (s *ListTagResourcesResponseTagResourcesTagResource) SetTagValue(v string) *ListTagResourcesResponseTagResourcesTagResource {
	s.TagValue = &v
	return s
}

func (s *ListTagResourcesResponseTagResourcesTagResource) SetResourceType(v string) *ListTagResourcesResponseTagResourcesTagResource {
	s.ResourceType = &v
	return s
}

func (s *ListTagResourcesResponseTagResourcesTagResource) SetResourceId(v string) *ListTagResourcesResponseTagResourcesTagResource {
	s.ResourceId = &v
	return s
}

type UntagResourcesRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// resourceType
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	// resourceIds
	ResourceId []*string `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true" type:"Repeated"`
	// tagKeys
	TagKey []*string `json:"TagKey,omitempty" xml:"TagKey,omitempty" type:"Repeated"`
	// all
	All *bool `json:"All,omitempty" xml:"All,omitempty"`
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

func (s *UntagResourcesRequest) SetResourceType(v string) *UntagResourcesRequest {
	s.ResourceType = &v
	return s
}

func (s *UntagResourcesRequest) SetResourceId(v []*string) *UntagResourcesRequest {
	s.ResourceId = v
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
	// requestId
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
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// resourceType
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	// resourceIds
	ResourceId []*string `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true" type:"Repeated"`
	// tags
	Tag []*TagResourcesRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true" type:"Repeated"`
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

func (s *TagResourcesRequest) SetResourceType(v string) *TagResourcesRequest {
	s.ResourceType = &v
	return s
}

func (s *TagResourcesRequest) SetResourceId(v []*string) *TagResourcesRequest {
	s.ResourceId = v
	return s
}

func (s *TagResourcesRequest) SetTag(v []*TagResourcesRequestTag) *TagResourcesRequest {
	s.Tag = v
	return s
}

type TagResourcesRequestTag struct {
	// key
	Key *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	// value
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
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
	// requestId
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

type DescribeNodeStatusRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s DescribeNodeStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeNodeStatusRequest) GoString() string {
	return s.String()
}

func (s *DescribeNodeStatusRequest) SetRegionId(v string) *DescribeNodeStatusRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeNodeStatusRequest) SetInstanceId(v string) *DescribeNodeStatusRequest {
	s.InstanceId = &v
	return s
}

type DescribeNodeStatusResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	// data
	StatusList *DescribeNodeStatusResponseStatusList `json:"StatusList,omitempty" xml:"StatusList,omitempty" require:"true" type:"Struct"`
}

func (s DescribeNodeStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeNodeStatusResponse) GoString() string {
	return s.String()
}

func (s *DescribeNodeStatusResponse) SetRequestId(v string) *DescribeNodeStatusResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeNodeStatusResponse) SetSuccess(v bool) *DescribeNodeStatusResponse {
	s.Success = &v
	return s
}

func (s *DescribeNodeStatusResponse) SetCode(v int) *DescribeNodeStatusResponse {
	s.Code = &v
	return s
}

func (s *DescribeNodeStatusResponse) SetMessage(v string) *DescribeNodeStatusResponse {
	s.Message = &v
	return s
}

func (s *DescribeNodeStatusResponse) SetStatusList(v *DescribeNodeStatusResponseStatusList) *DescribeNodeStatusResponse {
	s.StatusList = v
	return s
}

type DescribeNodeStatusResponseStatusList struct {
	// Status
	Status []*string `json:"Status,omitempty" xml:"Status,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeNodeStatusResponseStatusList) String() string {
	return tea.Prettify(s)
}

func (s DescribeNodeStatusResponseStatusList) GoString() string {
	return s.String()
}

func (s *DescribeNodeStatusResponseStatusList) SetStatus(v []*string) *DescribeNodeStatusResponseStatusList {
	s.Status = v
	return s
}

type CreatePostPayOrderRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// topicQuota
	TopicQuota *int `json:"TopicQuota,omitempty" xml:"TopicQuota,omitempty" require:"true"`
	// diskType
	DiskType *string `json:"DiskType,omitempty" xml:"DiskType,omitempty" require:"true"`
	// diskSize
	DiskSize *int `json:"DiskSize,omitempty" xml:"DiskSize,omitempty" require:"true"`
	// deployType
	DeployType *int `json:"DeployType,omitempty" xml:"DeployType,omitempty" require:"true"`
	// ioMax
	IoMax *int `json:"IoMax,omitempty" xml:"IoMax,omitempty" require:"true"`
	// eipMax
	EipMax *int `json:"EipMax,omitempty" xml:"EipMax,omitempty"`
}

func (s CreatePostPayOrderRequest) String() string {
	return tea.Prettify(s)
}

func (s CreatePostPayOrderRequest) GoString() string {
	return s.String()
}

func (s *CreatePostPayOrderRequest) SetRegionId(v string) *CreatePostPayOrderRequest {
	s.RegionId = &v
	return s
}

func (s *CreatePostPayOrderRequest) SetTopicQuota(v int) *CreatePostPayOrderRequest {
	s.TopicQuota = &v
	return s
}

func (s *CreatePostPayOrderRequest) SetDiskType(v string) *CreatePostPayOrderRequest {
	s.DiskType = &v
	return s
}

func (s *CreatePostPayOrderRequest) SetDiskSize(v int) *CreatePostPayOrderRequest {
	s.DiskSize = &v
	return s
}

func (s *CreatePostPayOrderRequest) SetDeployType(v int) *CreatePostPayOrderRequest {
	s.DeployType = &v
	return s
}

func (s *CreatePostPayOrderRequest) SetIoMax(v int) *CreatePostPayOrderRequest {
	s.IoMax = &v
	return s
}

func (s *CreatePostPayOrderRequest) SetEipMax(v int) *CreatePostPayOrderRequest {
	s.EipMax = &v
	return s
}

type CreatePostPayOrderResponse struct {
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	// data
	OrderId *string `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
}

func (s CreatePostPayOrderResponse) String() string {
	return tea.Prettify(s)
}

func (s CreatePostPayOrderResponse) GoString() string {
	return s.String()
}

func (s *CreatePostPayOrderResponse) SetRequestId(v string) *CreatePostPayOrderResponse {
	s.RequestId = &v
	return s
}

func (s *CreatePostPayOrderResponse) SetSuccess(v bool) *CreatePostPayOrderResponse {
	s.Success = &v
	return s
}

func (s *CreatePostPayOrderResponse) SetCode(v int) *CreatePostPayOrderResponse {
	s.Code = &v
	return s
}

func (s *CreatePostPayOrderResponse) SetMessage(v string) *CreatePostPayOrderResponse {
	s.Message = &v
	return s
}

func (s *CreatePostPayOrderResponse) SetOrderId(v string) *CreatePostPayOrderResponse {
	s.OrderId = &v
	return s
}

type UpgradePostPayOrderRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// topicQuota
	TopicQuota *int `json:"TopicQuota,omitempty" xml:"TopicQuota,omitempty" require:"true"`
	// diskSize
	DiskSize *int `json:"DiskSize,omitempty" xml:"DiskSize,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// ioMax
	IoMax *int `json:"IoMax,omitempty" xml:"IoMax,omitempty" require:"true"`
	// specType
	SpecType *string `json:"SpecType,omitempty" xml:"SpecType,omitempty"`
	// eipMax
	EipMax *int `json:"EipMax,omitempty" xml:"EipMax,omitempty"`
}

func (s UpgradePostPayOrderRequest) String() string {
	return tea.Prettify(s)
}

func (s UpgradePostPayOrderRequest) GoString() string {
	return s.String()
}

func (s *UpgradePostPayOrderRequest) SetInstanceId(v string) *UpgradePostPayOrderRequest {
	s.InstanceId = &v
	return s
}

func (s *UpgradePostPayOrderRequest) SetTopicQuota(v int) *UpgradePostPayOrderRequest {
	s.TopicQuota = &v
	return s
}

func (s *UpgradePostPayOrderRequest) SetDiskSize(v int) *UpgradePostPayOrderRequest {
	s.DiskSize = &v
	return s
}

func (s *UpgradePostPayOrderRequest) SetRegionId(v string) *UpgradePostPayOrderRequest {
	s.RegionId = &v
	return s
}

func (s *UpgradePostPayOrderRequest) SetIoMax(v int) *UpgradePostPayOrderRequest {
	s.IoMax = &v
	return s
}

func (s *UpgradePostPayOrderRequest) SetSpecType(v string) *UpgradePostPayOrderRequest {
	s.SpecType = &v
	return s
}

func (s *UpgradePostPayOrderRequest) SetEipMax(v int) *UpgradePostPayOrderRequest {
	s.EipMax = &v
	return s
}

type UpgradePostPayOrderResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s UpgradePostPayOrderResponse) String() string {
	return tea.Prettify(s)
}

func (s UpgradePostPayOrderResponse) GoString() string {
	return s.String()
}

func (s *UpgradePostPayOrderResponse) SetSuccess(v bool) *UpgradePostPayOrderResponse {
	s.Success = &v
	return s
}

func (s *UpgradePostPayOrderResponse) SetRequestId(v string) *UpgradePostPayOrderResponse {
	s.RequestId = &v
	return s
}

func (s *UpgradePostPayOrderResponse) SetCode(v int) *UpgradePostPayOrderResponse {
	s.Code = &v
	return s
}

func (s *UpgradePostPayOrderResponse) SetMessage(v string) *UpgradePostPayOrderResponse {
	s.Message = &v
	return s
}

type StartInstanceRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// vpcId
	VpcId *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	// vSwitchId
	VSwitchId *string `json:"VSwitchId,omitempty" xml:"VSwitchId,omitempty" require:"true"`
	// deployModule
	DeployModule *string `json:"DeployModule,omitempty" xml:"DeployModule,omitempty"`
	// zoneId
	ZoneId *string `json:"ZoneId,omitempty" xml:"ZoneId,omitempty" require:"true"`
	// isEipInner
	IsEipInner *bool `json:"IsEipInner,omitempty" xml:"IsEipInner,omitempty"`
	// isSetUserAndPassword
	IsSetUserAndPassword *bool `json:"IsSetUserAndPassword,omitempty" xml:"IsSetUserAndPassword,omitempty"`
	// username
	Username *string `json:"Username,omitempty" xml:"Username,omitempty"`
	// password
	Password *string `json:"Password,omitempty" xml:"Password,omitempty"`
	// name
	Name *string `json:"Name,omitempty" xml:"Name,omitempty"`
	// securityGroup
	SecurityGroup *string `json:"SecurityGroup,omitempty" xml:"SecurityGroup,omitempty"`
}

func (s StartInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s StartInstanceRequest) GoString() string {
	return s.String()
}

func (s *StartInstanceRequest) SetInstanceId(v string) *StartInstanceRequest {
	s.InstanceId = &v
	return s
}

func (s *StartInstanceRequest) SetRegionId(v string) *StartInstanceRequest {
	s.RegionId = &v
	return s
}

func (s *StartInstanceRequest) SetVpcId(v string) *StartInstanceRequest {
	s.VpcId = &v
	return s
}

func (s *StartInstanceRequest) SetVSwitchId(v string) *StartInstanceRequest {
	s.VSwitchId = &v
	return s
}

func (s *StartInstanceRequest) SetDeployModule(v string) *StartInstanceRequest {
	s.DeployModule = &v
	return s
}

func (s *StartInstanceRequest) SetZoneId(v string) *StartInstanceRequest {
	s.ZoneId = &v
	return s
}

func (s *StartInstanceRequest) SetIsEipInner(v bool) *StartInstanceRequest {
	s.IsEipInner = &v
	return s
}

func (s *StartInstanceRequest) SetIsSetUserAndPassword(v bool) *StartInstanceRequest {
	s.IsSetUserAndPassword = &v
	return s
}

func (s *StartInstanceRequest) SetUsername(v string) *StartInstanceRequest {
	s.Username = &v
	return s
}

func (s *StartInstanceRequest) SetPassword(v string) *StartInstanceRequest {
	s.Password = &v
	return s
}

func (s *StartInstanceRequest) SetName(v string) *StartInstanceRequest {
	s.Name = &v
	return s
}

func (s *StartInstanceRequest) SetSecurityGroup(v string) *StartInstanceRequest {
	s.SecurityGroup = &v
	return s
}

type StartInstanceResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s StartInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s StartInstanceResponse) GoString() string {
	return s.String()
}

func (s *StartInstanceResponse) SetSuccess(v bool) *StartInstanceResponse {
	s.Success = &v
	return s
}

func (s *StartInstanceResponse) SetRequestId(v string) *StartInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *StartInstanceResponse) SetCode(v int) *StartInstanceResponse {
	s.Code = &v
	return s
}

func (s *StartInstanceResponse) SetMessage(v string) *StartInstanceResponse {
	s.Message = &v
	return s
}

type ModifyInstanceNameRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// instanceName
	InstanceName *string `json:"InstanceName,omitempty" xml:"InstanceName,omitempty" require:"true"`
}

func (s ModifyInstanceNameRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyInstanceNameRequest) GoString() string {
	return s.String()
}

func (s *ModifyInstanceNameRequest) SetInstanceId(v string) *ModifyInstanceNameRequest {
	s.InstanceId = &v
	return s
}

func (s *ModifyInstanceNameRequest) SetRegionId(v string) *ModifyInstanceNameRequest {
	s.RegionId = &v
	return s
}

func (s *ModifyInstanceNameRequest) SetInstanceName(v string) *ModifyInstanceNameRequest {
	s.InstanceName = &v
	return s
}

type ModifyInstanceNameResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s ModifyInstanceNameResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyInstanceNameResponse) GoString() string {
	return s.String()
}

func (s *ModifyInstanceNameResponse) SetSuccess(v bool) *ModifyInstanceNameResponse {
	s.Success = &v
	return s
}

func (s *ModifyInstanceNameResponse) SetRequestId(v string) *ModifyInstanceNameResponse {
	s.RequestId = &v
	return s
}

func (s *ModifyInstanceNameResponse) SetCode(v int) *ModifyInstanceNameResponse {
	s.Code = &v
	return s
}

func (s *ModifyInstanceNameResponse) SetMessage(v string) *ModifyInstanceNameResponse {
	s.Message = &v
	return s
}

type ReleaseInstanceRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// forceDeleteInstance
	ForceDeleteInstance *bool `json:"ForceDeleteInstance,omitempty" xml:"ForceDeleteInstance,omitempty"`
}

func (s ReleaseInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s ReleaseInstanceRequest) GoString() string {
	return s.String()
}

func (s *ReleaseInstanceRequest) SetInstanceId(v string) *ReleaseInstanceRequest {
	s.InstanceId = &v
	return s
}

func (s *ReleaseInstanceRequest) SetRegionId(v string) *ReleaseInstanceRequest {
	s.RegionId = &v
	return s
}

func (s *ReleaseInstanceRequest) SetForceDeleteInstance(v bool) *ReleaseInstanceRequest {
	s.ForceDeleteInstance = &v
	return s
}

type ReleaseInstanceResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s ReleaseInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s ReleaseInstanceResponse) GoString() string {
	return s.String()
}

func (s *ReleaseInstanceResponse) SetSuccess(v bool) *ReleaseInstanceResponse {
	s.Success = &v
	return s
}

func (s *ReleaseInstanceResponse) SetRequestId(v string) *ReleaseInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *ReleaseInstanceResponse) SetCode(v int) *ReleaseInstanceResponse {
	s.Code = &v
	return s
}

func (s *ReleaseInstanceResponse) SetMessage(v string) *ReleaseInstanceResponse {
	s.Message = &v
	return s
}

type CreateConsumerGroupRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// consumerId
	ConsumerId *string `json:"ConsumerId,omitempty" xml:"ConsumerId,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// remark
	Remark *string `json:"Remark,omitempty" xml:"Remark,omitempty"`
}

func (s CreateConsumerGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateConsumerGroupRequest) GoString() string {
	return s.String()
}

func (s *CreateConsumerGroupRequest) SetInstanceId(v string) *CreateConsumerGroupRequest {
	s.InstanceId = &v
	return s
}

func (s *CreateConsumerGroupRequest) SetConsumerId(v string) *CreateConsumerGroupRequest {
	s.ConsumerId = &v
	return s
}

func (s *CreateConsumerGroupRequest) SetRegionId(v string) *CreateConsumerGroupRequest {
	s.RegionId = &v
	return s
}

func (s *CreateConsumerGroupRequest) SetRemark(v string) *CreateConsumerGroupRequest {
	s.Remark = &v
	return s
}

type CreateConsumerGroupResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s CreateConsumerGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateConsumerGroupResponse) GoString() string {
	return s.String()
}

func (s *CreateConsumerGroupResponse) SetSuccess(v bool) *CreateConsumerGroupResponse {
	s.Success = &v
	return s
}

func (s *CreateConsumerGroupResponse) SetRequestId(v string) *CreateConsumerGroupResponse {
	s.RequestId = &v
	return s
}

func (s *CreateConsumerGroupResponse) SetCode(v int) *CreateConsumerGroupResponse {
	s.Code = &v
	return s
}

func (s *CreateConsumerGroupResponse) SetMessage(v string) *CreateConsumerGroupResponse {
	s.Message = &v
	return s
}

type CreateTopicRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// topic
	Topic *string `json:"Topic,omitempty" xml:"Topic,omitempty" require:"true"`
	// remark
	Remark *string `json:"Remark,omitempty" xml:"Remark,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// partitionNum
	PartitionNum *string `json:"PartitionNum,omitempty" xml:"PartitionNum,omitempty"`
}

func (s CreateTopicRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateTopicRequest) GoString() string {
	return s.String()
}

func (s *CreateTopicRequest) SetInstanceId(v string) *CreateTopicRequest {
	s.InstanceId = &v
	return s
}

func (s *CreateTopicRequest) SetTopic(v string) *CreateTopicRequest {
	s.Topic = &v
	return s
}

func (s *CreateTopicRequest) SetRemark(v string) *CreateTopicRequest {
	s.Remark = &v
	return s
}

func (s *CreateTopicRequest) SetRegionId(v string) *CreateTopicRequest {
	s.RegionId = &v
	return s
}

func (s *CreateTopicRequest) SetPartitionNum(v string) *CreateTopicRequest {
	s.PartitionNum = &v
	return s
}

type CreateTopicResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s CreateTopicResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateTopicResponse) GoString() string {
	return s.String()
}

func (s *CreateTopicResponse) SetSuccess(v bool) *CreateTopicResponse {
	s.Success = &v
	return s
}

func (s *CreateTopicResponse) SetRequestId(v string) *CreateTopicResponse {
	s.RequestId = &v
	return s
}

func (s *CreateTopicResponse) SetCode(v int) *CreateTopicResponse {
	s.Code = &v
	return s
}

func (s *CreateTopicResponse) SetMessage(v string) *CreateTopicResponse {
	s.Message = &v
	return s
}

type DeleteConsumerGroupRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// consumerId
	ConsumerId *string `json:"ConsumerId,omitempty" xml:"ConsumerId,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s DeleteConsumerGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteConsumerGroupRequest) GoString() string {
	return s.String()
}

func (s *DeleteConsumerGroupRequest) SetInstanceId(v string) *DeleteConsumerGroupRequest {
	s.InstanceId = &v
	return s
}

func (s *DeleteConsumerGroupRequest) SetConsumerId(v string) *DeleteConsumerGroupRequest {
	s.ConsumerId = &v
	return s
}

func (s *DeleteConsumerGroupRequest) SetRegionId(v string) *DeleteConsumerGroupRequest {
	s.RegionId = &v
	return s
}

type DeleteConsumerGroupResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s DeleteConsumerGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteConsumerGroupResponse) GoString() string {
	return s.String()
}

func (s *DeleteConsumerGroupResponse) SetSuccess(v bool) *DeleteConsumerGroupResponse {
	s.Success = &v
	return s
}

func (s *DeleteConsumerGroupResponse) SetRequestId(v string) *DeleteConsumerGroupResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteConsumerGroupResponse) SetCode(v int) *DeleteConsumerGroupResponse {
	s.Code = &v
	return s
}

func (s *DeleteConsumerGroupResponse) SetMessage(v string) *DeleteConsumerGroupResponse {
	s.Message = &v
	return s
}

type DeleteTopicRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// topic
	Topic *string `json:"Topic,omitempty" xml:"Topic,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s DeleteTopicRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteTopicRequest) GoString() string {
	return s.String()
}

func (s *DeleteTopicRequest) SetInstanceId(v string) *DeleteTopicRequest {
	s.InstanceId = &v
	return s
}

func (s *DeleteTopicRequest) SetTopic(v string) *DeleteTopicRequest {
	s.Topic = &v
	return s
}

func (s *DeleteTopicRequest) SetRegionId(v string) *DeleteTopicRequest {
	s.RegionId = &v
	return s
}

type DeleteTopicResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s DeleteTopicResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteTopicResponse) GoString() string {
	return s.String()
}

func (s *DeleteTopicResponse) SetSuccess(v bool) *DeleteTopicResponse {
	s.Success = &v
	return s
}

func (s *DeleteTopicResponse) SetRequestId(v string) *DeleteTopicResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteTopicResponse) SetCode(v int) *DeleteTopicResponse {
	s.Code = &v
	return s
}

func (s *DeleteTopicResponse) SetMessage(v string) *DeleteTopicResponse {
	s.Message = &v
	return s
}

type GetConsumerListRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s GetConsumerListRequest) String() string {
	return tea.Prettify(s)
}

func (s GetConsumerListRequest) GoString() string {
	return s.String()
}

func (s *GetConsumerListRequest) SetInstanceId(v string) *GetConsumerListRequest {
	s.InstanceId = &v
	return s
}

func (s *GetConsumerListRequest) SetRegionId(v string) *GetConsumerListRequest {
	s.RegionId = &v
	return s
}

type GetConsumerListResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	// data
	ConsumerList *GetConsumerListResponseConsumerList `json:"ConsumerList,omitempty" xml:"ConsumerList,omitempty" require:"true" type:"Struct"`
}

func (s GetConsumerListResponse) String() string {
	return tea.Prettify(s)
}

func (s GetConsumerListResponse) GoString() string {
	return s.String()
}

func (s *GetConsumerListResponse) SetSuccess(v bool) *GetConsumerListResponse {
	s.Success = &v
	return s
}

func (s *GetConsumerListResponse) SetRequestId(v string) *GetConsumerListResponse {
	s.RequestId = &v
	return s
}

func (s *GetConsumerListResponse) SetCode(v int) *GetConsumerListResponse {
	s.Code = &v
	return s
}

func (s *GetConsumerListResponse) SetMessage(v string) *GetConsumerListResponse {
	s.Message = &v
	return s
}

func (s *GetConsumerListResponse) SetConsumerList(v *GetConsumerListResponseConsumerList) *GetConsumerListResponse {
	s.ConsumerList = v
	return s
}

type GetConsumerListResponseConsumerList struct {
	// ConsumerVO
	ConsumerVO []*GetConsumerListResponseConsumerListConsumerVO `json:"ConsumerVO,omitempty" xml:"ConsumerVO,omitempty" require:"true" type:"Repeated"`
}

func (s GetConsumerListResponseConsumerList) String() string {
	return tea.Prettify(s)
}

func (s GetConsumerListResponseConsumerList) GoString() string {
	return s.String()
}

func (s *GetConsumerListResponseConsumerList) SetConsumerVO(v []*GetConsumerListResponseConsumerListConsumerVO) *GetConsumerListResponseConsumerList {
	s.ConsumerVO = v
	return s
}

type GetConsumerListResponseConsumerListConsumerVO struct {
	// regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// consumerId
	ConsumerId *string `json:"ConsumerId,omitempty" xml:"ConsumerId,omitempty" require:"true"`
	// tags
	Tags *GetConsumerListResponseConsumerListConsumerVOTags `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Struct"`
}

func (s GetConsumerListResponseConsumerListConsumerVO) String() string {
	return tea.Prettify(s)
}

func (s GetConsumerListResponseConsumerListConsumerVO) GoString() string {
	return s.String()
}

func (s *GetConsumerListResponseConsumerListConsumerVO) SetRegionId(v string) *GetConsumerListResponseConsumerListConsumerVO {
	s.RegionId = &v
	return s
}

func (s *GetConsumerListResponseConsumerListConsumerVO) SetInstanceId(v string) *GetConsumerListResponseConsumerListConsumerVO {
	s.InstanceId = &v
	return s
}

func (s *GetConsumerListResponseConsumerListConsumerVO) SetConsumerId(v string) *GetConsumerListResponseConsumerListConsumerVO {
	s.ConsumerId = &v
	return s
}

func (s *GetConsumerListResponseConsumerListConsumerVO) SetTags(v *GetConsumerListResponseConsumerListConsumerVOTags) *GetConsumerListResponseConsumerListConsumerVO {
	s.Tags = v
	return s
}

type GetConsumerListResponseConsumerListConsumerVOTags struct {
	// TagVO
	TagVO []*GetConsumerListResponseConsumerListConsumerVOTagsTagVO `json:"TagVO,omitempty" xml:"TagVO,omitempty" require:"true" type:"Repeated"`
}

func (s GetConsumerListResponseConsumerListConsumerVOTags) String() string {
	return tea.Prettify(s)
}

func (s GetConsumerListResponseConsumerListConsumerVOTags) GoString() string {
	return s.String()
}

func (s *GetConsumerListResponseConsumerListConsumerVOTags) SetTagVO(v []*GetConsumerListResponseConsumerListConsumerVOTagsTagVO) *GetConsumerListResponseConsumerListConsumerVOTags {
	s.TagVO = v
	return s
}

type GetConsumerListResponseConsumerListConsumerVOTagsTagVO struct {
	// key
	Key *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	// value
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s GetConsumerListResponseConsumerListConsumerVOTagsTagVO) String() string {
	return tea.Prettify(s)
}

func (s GetConsumerListResponseConsumerListConsumerVOTagsTagVO) GoString() string {
	return s.String()
}

func (s *GetConsumerListResponseConsumerListConsumerVOTagsTagVO) SetKey(v string) *GetConsumerListResponseConsumerListConsumerVOTagsTagVO {
	s.Key = &v
	return s
}

func (s *GetConsumerListResponseConsumerListConsumerVOTagsTagVO) SetValue(v string) *GetConsumerListResponseConsumerListConsumerVOTagsTagVO {
	s.Value = &v
	return s
}

type GetInstanceListRequest struct {
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// orderId
	OrderId *string `json:"OrderId,omitempty" xml:"OrderId,omitempty"`
	// instanceIds
	InstanceId []*string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" type:"Repeated"`
	// tags
	Tag []*GetInstanceListRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s GetInstanceListRequest) String() string {
	return tea.Prettify(s)
}

func (s GetInstanceListRequest) GoString() string {
	return s.String()
}

func (s *GetInstanceListRequest) SetRegionId(v string) *GetInstanceListRequest {
	s.RegionId = &v
	return s
}

func (s *GetInstanceListRequest) SetOrderId(v string) *GetInstanceListRequest {
	s.OrderId = &v
	return s
}

func (s *GetInstanceListRequest) SetInstanceId(v []*string) *GetInstanceListRequest {
	s.InstanceId = v
	return s
}

func (s *GetInstanceListRequest) SetTag(v []*GetInstanceListRequestTag) *GetInstanceListRequest {
	s.Tag = v
	return s
}

type GetInstanceListRequestTag struct {
	// key
	Key *string `json:"Key,omitempty" xml:"Key,omitempty"`
	// value
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s GetInstanceListRequestTag) String() string {
	return tea.Prettify(s)
}

func (s GetInstanceListRequestTag) GoString() string {
	return s.String()
}

func (s *GetInstanceListRequestTag) SetKey(v string) *GetInstanceListRequestTag {
	s.Key = &v
	return s
}

func (s *GetInstanceListRequestTag) SetValue(v string) *GetInstanceListRequestTag {
	s.Value = &v
	return s
}

type GetInstanceListResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	// data
	InstanceList *GetInstanceListResponseInstanceList `json:"InstanceList,omitempty" xml:"InstanceList,omitempty" require:"true" type:"Struct"`
}

func (s GetInstanceListResponse) String() string {
	return tea.Prettify(s)
}

func (s GetInstanceListResponse) GoString() string {
	return s.String()
}

func (s *GetInstanceListResponse) SetSuccess(v bool) *GetInstanceListResponse {
	s.Success = &v
	return s
}

func (s *GetInstanceListResponse) SetRequestId(v string) *GetInstanceListResponse {
	s.RequestId = &v
	return s
}

func (s *GetInstanceListResponse) SetCode(v int) *GetInstanceListResponse {
	s.Code = &v
	return s
}

func (s *GetInstanceListResponse) SetMessage(v string) *GetInstanceListResponse {
	s.Message = &v
	return s
}

func (s *GetInstanceListResponse) SetInstanceList(v *GetInstanceListResponseInstanceList) *GetInstanceListResponse {
	s.InstanceList = v
	return s
}

type GetInstanceListResponseInstanceList struct {
	// InstanceVO
	InstanceVO []*GetInstanceListResponseInstanceListInstanceVO `json:"InstanceVO,omitempty" xml:"InstanceVO,omitempty" require:"true" type:"Repeated"`
}

func (s GetInstanceListResponseInstanceList) String() string {
	return tea.Prettify(s)
}

func (s GetInstanceListResponseInstanceList) GoString() string {
	return s.String()
}

func (s *GetInstanceListResponseInstanceList) SetInstanceVO(v []*GetInstanceListResponseInstanceListInstanceVO) *GetInstanceListResponseInstanceList {
	s.InstanceVO = v
	return s
}

type GetInstanceListResponseInstanceListInstanceVO struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// serviceStatus
	ServiceStatus *int `json:"ServiceStatus,omitempty" xml:"ServiceStatus,omitempty" require:"true"`
	// vpcId
	VpcId *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	// vSwitchId
	VSwitchId *string `json:"VSwitchId,omitempty" xml:"VSwitchId,omitempty" require:"true"`
	// endPoint
	EndPoint *string `json:"EndPoint,omitempty" xml:"EndPoint,omitempty" require:"true"`
	// createTime
	CreateTime *int64 `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	// expiredTime
	ExpiredTime *int64 `json:"ExpiredTime,omitempty" xml:"ExpiredTime,omitempty" require:"true"`
	// deployType
	DeployType *int `json:"DeployType,omitempty" xml:"DeployType,omitempty" require:"true"`
	// sslEndPoint
	SslEndPoint *string `json:"SslEndPoint,omitempty" xml:"SslEndPoint,omitempty" require:"true"`
	// name
	Name *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	// ioMax
	IoMax *int `json:"IoMax,omitempty" xml:"IoMax,omitempty" require:"true"`
	// bandwidth
	EipMax *int `json:"EipMax,omitempty" xml:"EipMax,omitempty" require:"true"`
	// diskType
	DiskType *int `json:"DiskType,omitempty" xml:"DiskType,omitempty" require:"true"`
	// diskSize
	DiskSize *int `json:"DiskSize,omitempty" xml:"DiskSize,omitempty" require:"true"`
	// msgRetain
	MsgRetain *int `json:"MsgRetain,omitempty" xml:"MsgRetain,omitempty" require:"true"`
	// topicNumLimit
	TopicNumLimit *int `json:"TopicNumLimit,omitempty" xml:"TopicNumLimit,omitempty" require:"true"`
	// zoneId
	ZoneId *string `json:"ZoneId,omitempty" xml:"ZoneId,omitempty" require:"true"`
	// paidType
	PaidType *int `json:"PaidType,omitempty" xml:"PaidType,omitempty" require:"true"`
	// specType
	SpecType *string `json:"SpecType,omitempty" xml:"SpecType,omitempty" require:"true"`
	// securityGroup
	SecurityGroup *string `json:"SecurityGroup,omitempty" xml:"SecurityGroup,omitempty" require:"true"`
	// upgradeServiceDetailInfo
	UpgradeServiceDetailInfo *GetInstanceListResponseInstanceListInstanceVOUpgradeServiceDetailInfo `json:"UpgradeServiceDetailInfo,omitempty" xml:"UpgradeServiceDetailInfo,omitempty" require:"true" type:"Struct"`
	// tags
	Tags *GetInstanceListResponseInstanceListInstanceVOTags `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Struct"`
}

func (s GetInstanceListResponseInstanceListInstanceVO) String() string {
	return tea.Prettify(s)
}

func (s GetInstanceListResponseInstanceListInstanceVO) GoString() string {
	return s.String()
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetInstanceId(v string) *GetInstanceListResponseInstanceListInstanceVO {
	s.InstanceId = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetRegionId(v string) *GetInstanceListResponseInstanceListInstanceVO {
	s.RegionId = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetServiceStatus(v int) *GetInstanceListResponseInstanceListInstanceVO {
	s.ServiceStatus = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetVpcId(v string) *GetInstanceListResponseInstanceListInstanceVO {
	s.VpcId = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetVSwitchId(v string) *GetInstanceListResponseInstanceListInstanceVO {
	s.VSwitchId = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetEndPoint(v string) *GetInstanceListResponseInstanceListInstanceVO {
	s.EndPoint = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetCreateTime(v int64) *GetInstanceListResponseInstanceListInstanceVO {
	s.CreateTime = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetExpiredTime(v int64) *GetInstanceListResponseInstanceListInstanceVO {
	s.ExpiredTime = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetDeployType(v int) *GetInstanceListResponseInstanceListInstanceVO {
	s.DeployType = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetSslEndPoint(v string) *GetInstanceListResponseInstanceListInstanceVO {
	s.SslEndPoint = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetName(v string) *GetInstanceListResponseInstanceListInstanceVO {
	s.Name = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetIoMax(v int) *GetInstanceListResponseInstanceListInstanceVO {
	s.IoMax = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetEipMax(v int) *GetInstanceListResponseInstanceListInstanceVO {
	s.EipMax = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetDiskType(v int) *GetInstanceListResponseInstanceListInstanceVO {
	s.DiskType = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetDiskSize(v int) *GetInstanceListResponseInstanceListInstanceVO {
	s.DiskSize = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetMsgRetain(v int) *GetInstanceListResponseInstanceListInstanceVO {
	s.MsgRetain = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetTopicNumLimit(v int) *GetInstanceListResponseInstanceListInstanceVO {
	s.TopicNumLimit = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetZoneId(v string) *GetInstanceListResponseInstanceListInstanceVO {
	s.ZoneId = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetPaidType(v int) *GetInstanceListResponseInstanceListInstanceVO {
	s.PaidType = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetSpecType(v string) *GetInstanceListResponseInstanceListInstanceVO {
	s.SpecType = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetSecurityGroup(v string) *GetInstanceListResponseInstanceListInstanceVO {
	s.SecurityGroup = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetUpgradeServiceDetailInfo(v *GetInstanceListResponseInstanceListInstanceVOUpgradeServiceDetailInfo) *GetInstanceListResponseInstanceListInstanceVO {
	s.UpgradeServiceDetailInfo = v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVO) SetTags(v *GetInstanceListResponseInstanceListInstanceVOTags) *GetInstanceListResponseInstanceListInstanceVO {
	s.Tags = v
	return s
}

type GetInstanceListResponseInstanceListInstanceVOUpgradeServiceDetailInfo struct {
	// UpgradeServiceDetailInfoVO
	UpgradeServiceDetailInfoVO []*GetInstanceListResponseInstanceListInstanceVOUpgradeServiceDetailInfoUpgradeServiceDetailInfoVO `json:"UpgradeServiceDetailInfoVO,omitempty" xml:"UpgradeServiceDetailInfoVO,omitempty" require:"true" type:"Repeated"`
}

func (s GetInstanceListResponseInstanceListInstanceVOUpgradeServiceDetailInfo) String() string {
	return tea.Prettify(s)
}

func (s GetInstanceListResponseInstanceListInstanceVOUpgradeServiceDetailInfo) GoString() string {
	return s.String()
}

func (s *GetInstanceListResponseInstanceListInstanceVOUpgradeServiceDetailInfo) SetUpgradeServiceDetailInfoVO(v []*GetInstanceListResponseInstanceListInstanceVOUpgradeServiceDetailInfoUpgradeServiceDetailInfoVO) *GetInstanceListResponseInstanceListInstanceVOUpgradeServiceDetailInfo {
	s.UpgradeServiceDetailInfoVO = v
	return s
}

type GetInstanceListResponseInstanceListInstanceVOUpgradeServiceDetailInfoUpgradeServiceDetailInfoVO struct {
	// current2OpenSourceVersion
	Current2OpenSourceVersion *string `json:"Current2OpenSourceVersion,omitempty" xml:"Current2OpenSourceVersion,omitempty" require:"true"`
}

func (s GetInstanceListResponseInstanceListInstanceVOUpgradeServiceDetailInfoUpgradeServiceDetailInfoVO) String() string {
	return tea.Prettify(s)
}

func (s GetInstanceListResponseInstanceListInstanceVOUpgradeServiceDetailInfoUpgradeServiceDetailInfoVO) GoString() string {
	return s.String()
}

func (s *GetInstanceListResponseInstanceListInstanceVOUpgradeServiceDetailInfoUpgradeServiceDetailInfoVO) SetCurrent2OpenSourceVersion(v string) *GetInstanceListResponseInstanceListInstanceVOUpgradeServiceDetailInfoUpgradeServiceDetailInfoVO {
	s.Current2OpenSourceVersion = &v
	return s
}

type GetInstanceListResponseInstanceListInstanceVOTags struct {
	// TagVO
	TagVO []*GetInstanceListResponseInstanceListInstanceVOTagsTagVO `json:"TagVO,omitempty" xml:"TagVO,omitempty" require:"true" type:"Repeated"`
}

func (s GetInstanceListResponseInstanceListInstanceVOTags) String() string {
	return tea.Prettify(s)
}

func (s GetInstanceListResponseInstanceListInstanceVOTags) GoString() string {
	return s.String()
}

func (s *GetInstanceListResponseInstanceListInstanceVOTags) SetTagVO(v []*GetInstanceListResponseInstanceListInstanceVOTagsTagVO) *GetInstanceListResponseInstanceListInstanceVOTags {
	s.TagVO = v
	return s
}

type GetInstanceListResponseInstanceListInstanceVOTagsTagVO struct {
	// key
	Key *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	// value
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s GetInstanceListResponseInstanceListInstanceVOTagsTagVO) String() string {
	return tea.Prettify(s)
}

func (s GetInstanceListResponseInstanceListInstanceVOTagsTagVO) GoString() string {
	return s.String()
}

func (s *GetInstanceListResponseInstanceListInstanceVOTagsTagVO) SetKey(v string) *GetInstanceListResponseInstanceListInstanceVOTagsTagVO {
	s.Key = &v
	return s
}

func (s *GetInstanceListResponseInstanceListInstanceVOTagsTagVO) SetValue(v string) *GetInstanceListResponseInstanceListInstanceVOTagsTagVO {
	s.Value = &v
	return s
}

type GetConsumerProgressRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// consumerId
	ConsumerId *string `json:"ConsumerId,omitempty" xml:"ConsumerId,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s GetConsumerProgressRequest) String() string {
	return tea.Prettify(s)
}

func (s GetConsumerProgressRequest) GoString() string {
	return s.String()
}

func (s *GetConsumerProgressRequest) SetInstanceId(v string) *GetConsumerProgressRequest {
	s.InstanceId = &v
	return s
}

func (s *GetConsumerProgressRequest) SetConsumerId(v string) *GetConsumerProgressRequest {
	s.ConsumerId = &v
	return s
}

func (s *GetConsumerProgressRequest) SetRegionId(v string) *GetConsumerProgressRequest {
	s.RegionId = &v
	return s
}

type GetConsumerProgressResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	// data
	ConsumerProgress *GetConsumerProgressResponseConsumerProgress `json:"ConsumerProgress,omitempty" xml:"ConsumerProgress,omitempty" require:"true" type:"Struct"`
}

func (s GetConsumerProgressResponse) String() string {
	return tea.Prettify(s)
}

func (s GetConsumerProgressResponse) GoString() string {
	return s.String()
}

func (s *GetConsumerProgressResponse) SetSuccess(v bool) *GetConsumerProgressResponse {
	s.Success = &v
	return s
}

func (s *GetConsumerProgressResponse) SetRequestId(v string) *GetConsumerProgressResponse {
	s.RequestId = &v
	return s
}

func (s *GetConsumerProgressResponse) SetCode(v int) *GetConsumerProgressResponse {
	s.Code = &v
	return s
}

func (s *GetConsumerProgressResponse) SetMessage(v string) *GetConsumerProgressResponse {
	s.Message = &v
	return s
}

func (s *GetConsumerProgressResponse) SetConsumerProgress(v *GetConsumerProgressResponseConsumerProgress) *GetConsumerProgressResponse {
	s.ConsumerProgress = v
	return s
}

type GetConsumerProgressResponseConsumerProgress struct {
	// totalDiff
	TotalDiff *int64 `json:"TotalDiff,omitempty" xml:"TotalDiff,omitempty" require:"true"`
	// lastTimestamp
	LastTimestamp *int64 `json:"LastTimestamp,omitempty" xml:"LastTimestamp,omitempty" require:"true"`
	// progressOneTopics
	TopicList *GetConsumerProgressResponseConsumerProgressTopicList `json:"TopicList,omitempty" xml:"TopicList,omitempty" require:"true" type:"Struct"`
}

func (s GetConsumerProgressResponseConsumerProgress) String() string {
	return tea.Prettify(s)
}

func (s GetConsumerProgressResponseConsumerProgress) GoString() string {
	return s.String()
}

func (s *GetConsumerProgressResponseConsumerProgress) SetTotalDiff(v int64) *GetConsumerProgressResponseConsumerProgress {
	s.TotalDiff = &v
	return s
}

func (s *GetConsumerProgressResponseConsumerProgress) SetLastTimestamp(v int64) *GetConsumerProgressResponseConsumerProgress {
	s.LastTimestamp = &v
	return s
}

func (s *GetConsumerProgressResponseConsumerProgress) SetTopicList(v *GetConsumerProgressResponseConsumerProgressTopicList) *GetConsumerProgressResponseConsumerProgress {
	s.TopicList = v
	return s
}

type GetConsumerProgressResponseConsumerProgressTopicList struct {
	// TopicList
	TopicList []*GetConsumerProgressResponseConsumerProgressTopicListTopicList `json:"TopicList,omitempty" xml:"TopicList,omitempty" require:"true" type:"Repeated"`
}

func (s GetConsumerProgressResponseConsumerProgressTopicList) String() string {
	return tea.Prettify(s)
}

func (s GetConsumerProgressResponseConsumerProgressTopicList) GoString() string {
	return s.String()
}

func (s *GetConsumerProgressResponseConsumerProgressTopicList) SetTopicList(v []*GetConsumerProgressResponseConsumerProgressTopicListTopicList) *GetConsumerProgressResponseConsumerProgressTopicList {
	s.TopicList = v
	return s
}

type GetConsumerProgressResponseConsumerProgressTopicListTopicList struct {
	// topic
	Topic *string `json:"Topic,omitempty" xml:"Topic,omitempty" require:"true"`
	// totalDiff
	TotalDiff *int64 `json:"TotalDiff,omitempty" xml:"TotalDiff,omitempty" require:"true"`
	// lastTimestamp
	LastTimestamp *int64 `json:"LastTimestamp,omitempty" xml:"LastTimestamp,omitempty" require:"true"`
	// offsetList
	OffsetList *GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetList `json:"OffsetList,omitempty" xml:"OffsetList,omitempty" require:"true" type:"Struct"`
}

func (s GetConsumerProgressResponseConsumerProgressTopicListTopicList) String() string {
	return tea.Prettify(s)
}

func (s GetConsumerProgressResponseConsumerProgressTopicListTopicList) GoString() string {
	return s.String()
}

func (s *GetConsumerProgressResponseConsumerProgressTopicListTopicList) SetTopic(v string) *GetConsumerProgressResponseConsumerProgressTopicListTopicList {
	s.Topic = &v
	return s
}

func (s *GetConsumerProgressResponseConsumerProgressTopicListTopicList) SetTotalDiff(v int64) *GetConsumerProgressResponseConsumerProgressTopicListTopicList {
	s.TotalDiff = &v
	return s
}

func (s *GetConsumerProgressResponseConsumerProgressTopicListTopicList) SetLastTimestamp(v int64) *GetConsumerProgressResponseConsumerProgressTopicListTopicList {
	s.LastTimestamp = &v
	return s
}

func (s *GetConsumerProgressResponseConsumerProgressTopicListTopicList) SetOffsetList(v *GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetList) *GetConsumerProgressResponseConsumerProgressTopicListTopicList {
	s.OffsetList = v
	return s
}

type GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetList struct {
	// OffsetList
	OffsetList []*GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetListOffsetList `json:"OffsetList,omitempty" xml:"OffsetList,omitempty" require:"true" type:"Repeated"`
}

func (s GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetList) String() string {
	return tea.Prettify(s)
}

func (s GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetList) GoString() string {
	return s.String()
}

func (s *GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetList) SetOffsetList(v []*GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetListOffsetList) *GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetList {
	s.OffsetList = v
	return s
}

type GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetListOffsetList struct {
	// brokerOffset
	BrokerOffset *int64 `json:"BrokerOffset,omitempty" xml:"BrokerOffset,omitempty" require:"true"`
	// consumerOffset
	ConsumerOffset *int64 `json:"ConsumerOffset,omitempty" xml:"ConsumerOffset,omitempty" require:"true"`
	// lastTimestamp
	LastTimestamp *int64 `json:"LastTimestamp,omitempty" xml:"LastTimestamp,omitempty" require:"true"`
	// partition
	Partition *int `json:"Partition,omitempty" xml:"Partition,omitempty" require:"true"`
}

func (s GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetListOffsetList) String() string {
	return tea.Prettify(s)
}

func (s GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetListOffsetList) GoString() string {
	return s.String()
}

func (s *GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetListOffsetList) SetBrokerOffset(v int64) *GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetListOffsetList {
	s.BrokerOffset = &v
	return s
}

func (s *GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetListOffsetList) SetConsumerOffset(v int64) *GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetListOffsetList {
	s.ConsumerOffset = &v
	return s
}

func (s *GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetListOffsetList) SetLastTimestamp(v int64) *GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetListOffsetList {
	s.LastTimestamp = &v
	return s
}

func (s *GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetListOffsetList) SetPartition(v int) *GetConsumerProgressResponseConsumerProgressTopicListTopicListOffsetListOffsetList {
	s.Partition = &v
	return s
}

type GetTopicListRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// currentPage
	CurrentPage *string `json:"CurrentPage,omitempty" xml:"CurrentPage,omitempty"`
	// pageSize
	PageSize *string `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty"`
}

func (s GetTopicListRequest) String() string {
	return tea.Prettify(s)
}

func (s GetTopicListRequest) GoString() string {
	return s.String()
}

func (s *GetTopicListRequest) SetInstanceId(v string) *GetTopicListRequest {
	s.InstanceId = &v
	return s
}

func (s *GetTopicListRequest) SetCurrentPage(v string) *GetTopicListRequest {
	s.CurrentPage = &v
	return s
}

func (s *GetTopicListRequest) SetPageSize(v string) *GetTopicListRequest {
	s.PageSize = &v
	return s
}

func (s *GetTopicListRequest) SetRegionId(v string) *GetTopicListRequest {
	s.RegionId = &v
	return s
}

type GetTopicListResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	// total
	Total *int `json:"Total,omitempty" xml:"Total,omitempty" require:"true"`
	// pageSize
	PageSize *int `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	// currentPage
	CurrentPage *int `json:"CurrentPage,omitempty" xml:"CurrentPage,omitempty" require:"true"`
	// data
	TopicList *GetTopicListResponseTopicList `json:"TopicList,omitempty" xml:"TopicList,omitempty" require:"true" type:"Struct"`
}

func (s GetTopicListResponse) String() string {
	return tea.Prettify(s)
}

func (s GetTopicListResponse) GoString() string {
	return s.String()
}

func (s *GetTopicListResponse) SetSuccess(v bool) *GetTopicListResponse {
	s.Success = &v
	return s
}

func (s *GetTopicListResponse) SetRequestId(v string) *GetTopicListResponse {
	s.RequestId = &v
	return s
}

func (s *GetTopicListResponse) SetCode(v int) *GetTopicListResponse {
	s.Code = &v
	return s
}

func (s *GetTopicListResponse) SetMessage(v string) *GetTopicListResponse {
	s.Message = &v
	return s
}

func (s *GetTopicListResponse) SetTotal(v int) *GetTopicListResponse {
	s.Total = &v
	return s
}

func (s *GetTopicListResponse) SetPageSize(v int) *GetTopicListResponse {
	s.PageSize = &v
	return s
}

func (s *GetTopicListResponse) SetCurrentPage(v int) *GetTopicListResponse {
	s.CurrentPage = &v
	return s
}

func (s *GetTopicListResponse) SetTopicList(v *GetTopicListResponseTopicList) *GetTopicListResponse {
	s.TopicList = v
	return s
}

type GetTopicListResponseTopicList struct {
	// TopicVO
	TopicVO []*GetTopicListResponseTopicListTopicVO `json:"TopicVO,omitempty" xml:"TopicVO,omitempty" require:"true" type:"Repeated"`
}

func (s GetTopicListResponseTopicList) String() string {
	return tea.Prettify(s)
}

func (s GetTopicListResponseTopicList) GoString() string {
	return s.String()
}

func (s *GetTopicListResponseTopicList) SetTopicVO(v []*GetTopicListResponseTopicListTopicVO) *GetTopicListResponseTopicList {
	s.TopicVO = v
	return s
}

type GetTopicListResponseTopicListTopicVO struct {
	// topic
	Topic *string `json:"Topic,omitempty" xml:"Topic,omitempty" require:"true"`
	// createTime
	CreateTime *int64 `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	// remark
	Remark *string `json:"Remark,omitempty" xml:"Remark,omitempty" require:"true"`
	// status
	Status *int `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	// statusName
	StatusName *string `json:"StatusName,omitempty" xml:"StatusName,omitempty" require:"true"`
	// compactTopic
	CompactTopic *bool `json:"CompactTopic,omitempty" xml:"CompactTopic,omitempty" require:"true"`
	// localTopic
	LocalTopic *bool `json:"LocalTopic,omitempty" xml:"LocalTopic,omitempty" require:"true"`
	// partitionNum
	PartitionNum *int `json:"PartitionNum,omitempty" xml:"PartitionNum,omitempty" require:"true"`
	// tags
	Tags *GetTopicListResponseTopicListTopicVOTags `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Struct"`
}

func (s GetTopicListResponseTopicListTopicVO) String() string {
	return tea.Prettify(s)
}

func (s GetTopicListResponseTopicListTopicVO) GoString() string {
	return s.String()
}

func (s *GetTopicListResponseTopicListTopicVO) SetTopic(v string) *GetTopicListResponseTopicListTopicVO {
	s.Topic = &v
	return s
}

func (s *GetTopicListResponseTopicListTopicVO) SetCreateTime(v int64) *GetTopicListResponseTopicListTopicVO {
	s.CreateTime = &v
	return s
}

func (s *GetTopicListResponseTopicListTopicVO) SetRemark(v string) *GetTopicListResponseTopicListTopicVO {
	s.Remark = &v
	return s
}

func (s *GetTopicListResponseTopicListTopicVO) SetStatus(v int) *GetTopicListResponseTopicListTopicVO {
	s.Status = &v
	return s
}

func (s *GetTopicListResponseTopicListTopicVO) SetInstanceId(v string) *GetTopicListResponseTopicListTopicVO {
	s.InstanceId = &v
	return s
}

func (s *GetTopicListResponseTopicListTopicVO) SetRegionId(v string) *GetTopicListResponseTopicListTopicVO {
	s.RegionId = &v
	return s
}

func (s *GetTopicListResponseTopicListTopicVO) SetStatusName(v string) *GetTopicListResponseTopicListTopicVO {
	s.StatusName = &v
	return s
}

func (s *GetTopicListResponseTopicListTopicVO) SetCompactTopic(v bool) *GetTopicListResponseTopicListTopicVO {
	s.CompactTopic = &v
	return s
}

func (s *GetTopicListResponseTopicListTopicVO) SetLocalTopic(v bool) *GetTopicListResponseTopicListTopicVO {
	s.LocalTopic = &v
	return s
}

func (s *GetTopicListResponseTopicListTopicVO) SetPartitionNum(v int) *GetTopicListResponseTopicListTopicVO {
	s.PartitionNum = &v
	return s
}

func (s *GetTopicListResponseTopicListTopicVO) SetTags(v *GetTopicListResponseTopicListTopicVOTags) *GetTopicListResponseTopicListTopicVO {
	s.Tags = v
	return s
}

type GetTopicListResponseTopicListTopicVOTags struct {
	// TagVO
	TagVO []*GetTopicListResponseTopicListTopicVOTagsTagVO `json:"TagVO,omitempty" xml:"TagVO,omitempty" require:"true" type:"Repeated"`
}

func (s GetTopicListResponseTopicListTopicVOTags) String() string {
	return tea.Prettify(s)
}

func (s GetTopicListResponseTopicListTopicVOTags) GoString() string {
	return s.String()
}

func (s *GetTopicListResponseTopicListTopicVOTags) SetTagVO(v []*GetTopicListResponseTopicListTopicVOTagsTagVO) *GetTopicListResponseTopicListTopicVOTags {
	s.TagVO = v
	return s
}

type GetTopicListResponseTopicListTopicVOTagsTagVO struct {
	// key
	Key *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	// value
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s GetTopicListResponseTopicListTopicVOTagsTagVO) String() string {
	return tea.Prettify(s)
}

func (s GetTopicListResponseTopicListTopicVOTagsTagVO) GoString() string {
	return s.String()
}

func (s *GetTopicListResponseTopicListTopicVOTagsTagVO) SetKey(v string) *GetTopicListResponseTopicListTopicVOTagsTagVO {
	s.Key = &v
	return s
}

func (s *GetTopicListResponseTopicListTopicVOTagsTagVO) SetValue(v string) *GetTopicListResponseTopicListTopicVOTagsTagVO {
	s.Value = &v
	return s
}

type GetTopicStatusRequest struct {
	// instanceId
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	// topic
	Topic *string `json:"Topic,omitempty" xml:"Topic,omitempty" require:"true"`
	// _regionId
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty"`
}

func (s GetTopicStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s GetTopicStatusRequest) GoString() string {
	return s.String()
}

func (s *GetTopicStatusRequest) SetInstanceId(v string) *GetTopicStatusRequest {
	s.InstanceId = &v
	return s
}

func (s *GetTopicStatusRequest) SetTopic(v string) *GetTopicStatusRequest {
	s.Topic = &v
	return s
}

func (s *GetTopicStatusRequest) SetRegionId(v string) *GetTopicStatusRequest {
	s.RegionId = &v
	return s
}

type GetTopicStatusResponse struct {
	// success
	Success *bool `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	// requestId
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	// code
	Code *int `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	// message
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	// data
	TopicStatus *GetTopicStatusResponseTopicStatus `json:"TopicStatus,omitempty" xml:"TopicStatus,omitempty" require:"true" type:"Struct"`
}

func (s GetTopicStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s GetTopicStatusResponse) GoString() string {
	return s.String()
}

func (s *GetTopicStatusResponse) SetSuccess(v bool) *GetTopicStatusResponse {
	s.Success = &v
	return s
}

func (s *GetTopicStatusResponse) SetRequestId(v string) *GetTopicStatusResponse {
	s.RequestId = &v
	return s
}

func (s *GetTopicStatusResponse) SetCode(v int) *GetTopicStatusResponse {
	s.Code = &v
	return s
}

func (s *GetTopicStatusResponse) SetMessage(v string) *GetTopicStatusResponse {
	s.Message = &v
	return s
}

func (s *GetTopicStatusResponse) SetTopicStatus(v *GetTopicStatusResponseTopicStatus) *GetTopicStatusResponse {
	s.TopicStatus = v
	return s
}

type GetTopicStatusResponseTopicStatus struct {
	// totalCount
	TotalCount *int64 `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	// lastTimeStamp
	LastTimeStamp *int64 `json:"LastTimeStamp,omitempty" xml:"LastTimeStamp,omitempty" require:"true"`
	// offsetTable
	OffsetTable *GetTopicStatusResponseTopicStatusOffsetTable `json:"OffsetTable,omitempty" xml:"OffsetTable,omitempty" require:"true" type:"Struct"`
}

func (s GetTopicStatusResponseTopicStatus) String() string {
	return tea.Prettify(s)
}

func (s GetTopicStatusResponseTopicStatus) GoString() string {
	return s.String()
}

func (s *GetTopicStatusResponseTopicStatus) SetTotalCount(v int64) *GetTopicStatusResponseTopicStatus {
	s.TotalCount = &v
	return s
}

func (s *GetTopicStatusResponseTopicStatus) SetLastTimeStamp(v int64) *GetTopicStatusResponseTopicStatus {
	s.LastTimeStamp = &v
	return s
}

func (s *GetTopicStatusResponseTopicStatus) SetOffsetTable(v *GetTopicStatusResponseTopicStatusOffsetTable) *GetTopicStatusResponseTopicStatus {
	s.OffsetTable = v
	return s
}

type GetTopicStatusResponseTopicStatusOffsetTable struct {
	// OffsetTable
	OffsetTable []*GetTopicStatusResponseTopicStatusOffsetTableOffsetTable `json:"OffsetTable,omitempty" xml:"OffsetTable,omitempty" require:"true" type:"Repeated"`
}

func (s GetTopicStatusResponseTopicStatusOffsetTable) String() string {
	return tea.Prettify(s)
}

func (s GetTopicStatusResponseTopicStatusOffsetTable) GoString() string {
	return s.String()
}

func (s *GetTopicStatusResponseTopicStatusOffsetTable) SetOffsetTable(v []*GetTopicStatusResponseTopicStatusOffsetTableOffsetTable) *GetTopicStatusResponseTopicStatusOffsetTable {
	s.OffsetTable = v
	return s
}

type GetTopicStatusResponseTopicStatusOffsetTableOffsetTable struct {
	// minOffset
	MinOffset *int64 `json:"MinOffset,omitempty" xml:"MinOffset,omitempty" require:"true"`
	// maxOffset
	MaxOffset *int64 `json:"MaxOffset,omitempty" xml:"MaxOffset,omitempty" require:"true"`
	// lastUpdateTimestamp
	LastUpdateTimestamp *int64 `json:"LastUpdateTimestamp,omitempty" xml:"LastUpdateTimestamp,omitempty" require:"true"`
	// topic
	Topic *string `json:"Topic,omitempty" xml:"Topic,omitempty" require:"true"`
	// partition
	Partition *int `json:"Partition,omitempty" xml:"Partition,omitempty" require:"true"`
}

func (s GetTopicStatusResponseTopicStatusOffsetTableOffsetTable) String() string {
	return tea.Prettify(s)
}

func (s GetTopicStatusResponseTopicStatusOffsetTableOffsetTable) GoString() string {
	return s.String()
}

func (s *GetTopicStatusResponseTopicStatusOffsetTableOffsetTable) SetMinOffset(v int64) *GetTopicStatusResponseTopicStatusOffsetTableOffsetTable {
	s.MinOffset = &v
	return s
}

func (s *GetTopicStatusResponseTopicStatusOffsetTableOffsetTable) SetMaxOffset(v int64) *GetTopicStatusResponseTopicStatusOffsetTableOffsetTable {
	s.MaxOffset = &v
	return s
}

func (s *GetTopicStatusResponseTopicStatusOffsetTableOffsetTable) SetLastUpdateTimestamp(v int64) *GetTopicStatusResponseTopicStatusOffsetTableOffsetTable {
	s.LastUpdateTimestamp = &v
	return s
}

func (s *GetTopicStatusResponseTopicStatusOffsetTableOffsetTable) SetTopic(v string) *GetTopicStatusResponseTopicStatusOffsetTableOffsetTable {
	s.Topic = &v
	return s
}

func (s *GetTopicStatusResponseTopicStatusOffsetTableOffsetTable) SetPartition(v int) *GetTopicStatusResponseTopicStatusOffsetTableOffsetTable {
	s.Partition = &v
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
		"ap-northeast-1":        tea.String("alikafka.ap-south-1.aliyuncs.com"),
		"ap-southeast-2":        tea.String("alikafka.ap-south-1.aliyuncs.com"),
		"ap-southeast-3":        tea.String("alikafka.ap-south-1.aliyuncs.com"),
		"cn-chengdu":            tea.String("alikafka.aliyuncs.com"),
		"eu-central-1":          tea.String("alikafka.ap-south-1.aliyuncs.com"),
		"eu-west-1":             tea.String("alikafka.ap-south-1.aliyuncs.com"),
		"me-east-1":             tea.String("alikafka.ap-south-1.aliyuncs.com"),
		"us-east-1":             tea.String("alikafka.ap-south-1.aliyuncs.com"),
		"us-west-1":             tea.String("alikafka.ap-south-1.aliyuncs.com"),
		"cn-hangzhou-finance":   tea.String("alikafka.aliyuncs.com"),
		"cn-shenzhen-finance-1": tea.String("alikafka.aliyuncs.com"),
		"cn-shanghai-finance-1": tea.String("alikafka.aliyuncs.com"),
		"cn-north-2-gov-1":      tea.String("alikafka.aliyuncs.com"),
	}
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("alikafka"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) GetAllowedIpListWithOptions(request *GetAllowedIpListRequest, runtime *util.RuntimeOptions) (_result *GetAllowedIpListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetAllowedIpListResponse{}
	_body, _err := client.DoRequest(tea.String("GetAllowedIpList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetAllowedIpList(request *GetAllowedIpListRequest) (_result *GetAllowedIpListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetAllowedIpListResponse{}
	_body, _err := client.GetAllowedIpListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateAllowedIpWithOptions(request *UpdateAllowedIpRequest, runtime *util.RuntimeOptions) (_result *UpdateAllowedIpResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateAllowedIpResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateAllowedIp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateAllowedIp(request *UpdateAllowedIpRequest) (_result *UpdateAllowedIpResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateAllowedIpResponse{}
	_body, _err := client.UpdateAllowedIpWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyPartitionNumWithOptions(request *ModifyPartitionNumRequest, runtime *util.RuntimeOptions) (_result *ModifyPartitionNumResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyPartitionNumResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyPartitionNum"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyPartitionNum(request *ModifyPartitionNumRequest) (_result *ModifyPartitionNumResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyPartitionNumResponse{}
	_body, _err := client.ModifyPartitionNumWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyTopicRemarkWithOptions(request *ModifyTopicRemarkRequest, runtime *util.RuntimeOptions) (_result *ModifyTopicRemarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyTopicRemarkResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyTopicRemark"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyTopicRemark(request *ModifyTopicRemarkRequest) (_result *ModifyTopicRemarkResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyTopicRemarkResponse{}
	_body, _err := client.ModifyTopicRemarkWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteSaslUserWithOptions(request *DeleteSaslUserRequest, runtime *util.RuntimeOptions) (_result *DeleteSaslUserResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteSaslUserResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteSaslUser"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteSaslUser(request *DeleteSaslUserRequest) (_result *DeleteSaslUserResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteSaslUserResponse{}
	_body, _err := client.DeleteSaslUserWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSaslUsersWithOptions(request *DescribeSaslUsersRequest, runtime *util.RuntimeOptions) (_result *DescribeSaslUsersResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSaslUsersResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSaslUsers"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSaslUsers(request *DescribeSaslUsersRequest) (_result *DescribeSaslUsersResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSaslUsersResponse{}
	_body, _err := client.DescribeSaslUsersWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateAclWithOptions(request *CreateAclRequest, runtime *util.RuntimeOptions) (_result *CreateAclResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateAclResponse{}
	_body, _err := client.DoRequest(tea.String("CreateAcl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateAcl(request *CreateAclRequest) (_result *CreateAclResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateAclResponse{}
	_body, _err := client.CreateAclWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateSaslUserWithOptions(request *CreateSaslUserRequest, runtime *util.RuntimeOptions) (_result *CreateSaslUserResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateSaslUserResponse{}
	_body, _err := client.DoRequest(tea.String("CreateSaslUser"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateSaslUser(request *CreateSaslUserRequest) (_result *CreateSaslUserResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateSaslUserResponse{}
	_body, _err := client.CreateSaslUserWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAclWithOptions(request *DeleteAclRequest, runtime *util.RuntimeOptions) (_result *DeleteAclResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAclResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteAcl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteAcl(request *DeleteAclRequest) (_result *DeleteAclResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAclResponse{}
	_body, _err := client.DeleteAclWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAclsWithOptions(request *DescribeAclsRequest, runtime *util.RuntimeOptions) (_result *DescribeAclsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAclsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAcls"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAcls(request *DescribeAclsRequest) (_result *DescribeAclsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAclsResponse{}
	_body, _err := client.DescribeAclsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreatePrePayOrderWithOptions(request *CreatePrePayOrderRequest, runtime *util.RuntimeOptions) (_result *CreatePrePayOrderResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreatePrePayOrderResponse{}
	_body, _err := client.DoRequest(tea.String("CreatePrePayOrder"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreatePrePayOrder(request *CreatePrePayOrderRequest) (_result *CreatePrePayOrderResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreatePrePayOrderResponse{}
	_body, _err := client.CreatePrePayOrderWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpgradePrePayOrderWithOptions(request *UpgradePrePayOrderRequest, runtime *util.RuntimeOptions) (_result *UpgradePrePayOrderResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpgradePrePayOrderResponse{}
	_body, _err := client.DoRequest(tea.String("UpgradePrePayOrder"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpgradePrePayOrder(request *UpgradePrePayOrderRequest) (_result *UpgradePrePayOrderResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpgradePrePayOrderResponse{}
	_body, _err := client.UpgradePrePayOrderWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteInstanceWithOptions(request *DeleteInstanceRequest, runtime *util.RuntimeOptions) (_result *DeleteInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteInstance(request *DeleteInstanceRequest) (_result *DeleteInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteInstanceResponse{}
	_body, _err := client.DeleteInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMetaProductListWithOptions(request *GetMetaProductListRequest, runtime *util.RuntimeOptions) (_result *GetMetaProductListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMetaProductListResponse{}
	_body, _err := client.DoRequest(tea.String("GetMetaProductList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMetaProductList(request *GetMetaProductListRequest) (_result *GetMetaProductListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMetaProductListResponse{}
	_body, _err := client.GetMetaProductListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ConvertPostPayOrderWithOptions(request *ConvertPostPayOrderRequest, runtime *util.RuntimeOptions) (_result *ConvertPostPayOrderResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ConvertPostPayOrderResponse{}
	_body, _err := client.DoRequest(tea.String("ConvertPostPayOrder"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ConvertPostPayOrder(request *ConvertPostPayOrderRequest) (_result *ConvertPostPayOrderResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ConvertPostPayOrderResponse{}
	_body, _err := client.ConvertPostPayOrderWithOptions(request, runtime)
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
	_body, _err := client.DoRequest(tea.String("ListTagResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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
	_body, _err := client.DoRequest(tea.String("UntagResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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
	_body, _err := client.DoRequest(tea.String("TagResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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

func (client *Client) DescribeNodeStatusWithOptions(request *DescribeNodeStatusRequest, runtime *util.RuntimeOptions) (_result *DescribeNodeStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeNodeStatusResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeNodeStatus"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeNodeStatus(request *DescribeNodeStatusRequest) (_result *DescribeNodeStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeNodeStatusResponse{}
	_body, _err := client.DescribeNodeStatusWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreatePostPayOrderWithOptions(request *CreatePostPayOrderRequest, runtime *util.RuntimeOptions) (_result *CreatePostPayOrderResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreatePostPayOrderResponse{}
	_body, _err := client.DoRequest(tea.String("CreatePostPayOrder"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreatePostPayOrder(request *CreatePostPayOrderRequest) (_result *CreatePostPayOrderResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreatePostPayOrderResponse{}
	_body, _err := client.CreatePostPayOrderWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpgradePostPayOrderWithOptions(request *UpgradePostPayOrderRequest, runtime *util.RuntimeOptions) (_result *UpgradePostPayOrderResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpgradePostPayOrderResponse{}
	_body, _err := client.DoRequest(tea.String("UpgradePostPayOrder"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpgradePostPayOrder(request *UpgradePostPayOrderRequest) (_result *UpgradePostPayOrderResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpgradePostPayOrderResponse{}
	_body, _err := client.UpgradePostPayOrderWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) StartInstanceWithOptions(request *StartInstanceRequest, runtime *util.RuntimeOptions) (_result *StartInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &StartInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("StartInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) StartInstance(request *StartInstanceRequest) (_result *StartInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &StartInstanceResponse{}
	_body, _err := client.StartInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyInstanceNameWithOptions(request *ModifyInstanceNameRequest, runtime *util.RuntimeOptions) (_result *ModifyInstanceNameResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyInstanceNameResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyInstanceName"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyInstanceName(request *ModifyInstanceNameRequest) (_result *ModifyInstanceNameResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyInstanceNameResponse{}
	_body, _err := client.ModifyInstanceNameWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ReleaseInstanceWithOptions(request *ReleaseInstanceRequest, runtime *util.RuntimeOptions) (_result *ReleaseInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ReleaseInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("ReleaseInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ReleaseInstance(request *ReleaseInstanceRequest) (_result *ReleaseInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ReleaseInstanceResponse{}
	_body, _err := client.ReleaseInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateConsumerGroupWithOptions(request *CreateConsumerGroupRequest, runtime *util.RuntimeOptions) (_result *CreateConsumerGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateConsumerGroupResponse{}
	_body, _err := client.DoRequest(tea.String("CreateConsumerGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateConsumerGroup(request *CreateConsumerGroupRequest) (_result *CreateConsumerGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateConsumerGroupResponse{}
	_body, _err := client.CreateConsumerGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateTopicWithOptions(request *CreateTopicRequest, runtime *util.RuntimeOptions) (_result *CreateTopicResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateTopicResponse{}
	_body, _err := client.DoRequest(tea.String("CreateTopic"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateTopic(request *CreateTopicRequest) (_result *CreateTopicResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateTopicResponse{}
	_body, _err := client.CreateTopicWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteConsumerGroupWithOptions(request *DeleteConsumerGroupRequest, runtime *util.RuntimeOptions) (_result *DeleteConsumerGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteConsumerGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteConsumerGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteConsumerGroup(request *DeleteConsumerGroupRequest) (_result *DeleteConsumerGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteConsumerGroupResponse{}
	_body, _err := client.DeleteConsumerGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteTopicWithOptions(request *DeleteTopicRequest, runtime *util.RuntimeOptions) (_result *DeleteTopicResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteTopicResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteTopic"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteTopic(request *DeleteTopicRequest) (_result *DeleteTopicResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteTopicResponse{}
	_body, _err := client.DeleteTopicWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetConsumerListWithOptions(request *GetConsumerListRequest, runtime *util.RuntimeOptions) (_result *GetConsumerListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetConsumerListResponse{}
	_body, _err := client.DoRequest(tea.String("GetConsumerList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetConsumerList(request *GetConsumerListRequest) (_result *GetConsumerListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetConsumerListResponse{}
	_body, _err := client.GetConsumerListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetInstanceListWithOptions(request *GetInstanceListRequest, runtime *util.RuntimeOptions) (_result *GetInstanceListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetInstanceListResponse{}
	_body, _err := client.DoRequest(tea.String("GetInstanceList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetInstanceList(request *GetInstanceListRequest) (_result *GetInstanceListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetInstanceListResponse{}
	_body, _err := client.GetInstanceListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetConsumerProgressWithOptions(request *GetConsumerProgressRequest, runtime *util.RuntimeOptions) (_result *GetConsumerProgressResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetConsumerProgressResponse{}
	_body, _err := client.DoRequest(tea.String("GetConsumerProgress"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetConsumerProgress(request *GetConsumerProgressRequest) (_result *GetConsumerProgressResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetConsumerProgressResponse{}
	_body, _err := client.GetConsumerProgressWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetTopicListWithOptions(request *GetTopicListRequest, runtime *util.RuntimeOptions) (_result *GetTopicListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetTopicListResponse{}
	_body, _err := client.DoRequest(tea.String("GetTopicList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetTopicList(request *GetTopicListRequest) (_result *GetTopicListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetTopicListResponse{}
	_body, _err := client.GetTopicListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetTopicStatusWithOptions(request *GetTopicStatusRequest, runtime *util.RuntimeOptions) (_result *GetTopicStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetTopicStatusResponse{}
	_body, _err := client.DoRequest(tea.String("GetTopicStatus"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-16"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetTopicStatus(request *GetTopicStatusRequest) (_result *GetTopicStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetTopicStatusResponse{}
	_body, _err := client.GetTopicStatusWithOptions(request, runtime)
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
