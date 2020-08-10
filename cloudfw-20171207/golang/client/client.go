// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type ModifyPolicyAdvancedConfigRequest struct {
	SourceIp       *string `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang           *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InternetSwitch *string `json:"InternetSwitch,omitempty" xml:"InternetSwitch,omitempty" require:"true"`
}

func (s ModifyPolicyAdvancedConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyPolicyAdvancedConfigRequest) GoString() string {
	return s.String()
}

func (s *ModifyPolicyAdvancedConfigRequest) SetSourceIp(v string) *ModifyPolicyAdvancedConfigRequest {
	s.SourceIp = &v
	return s
}

func (s *ModifyPolicyAdvancedConfigRequest) SetLang(v string) *ModifyPolicyAdvancedConfigRequest {
	s.Lang = &v
	return s
}

func (s *ModifyPolicyAdvancedConfigRequest) SetInternetSwitch(v string) *ModifyPolicyAdvancedConfigRequest {
	s.InternetSwitch = &v
	return s
}

type ModifyPolicyAdvancedConfigResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyPolicyAdvancedConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyPolicyAdvancedConfigResponse) GoString() string {
	return s.String()
}

func (s *ModifyPolicyAdvancedConfigResponse) SetRequestId(v string) *ModifyPolicyAdvancedConfigResponse {
	s.RequestId = &v
	return s
}

type DescribePolicyAdvancedConfigRequest struct {
	SourceIp *string `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang     *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
}

func (s DescribePolicyAdvancedConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribePolicyAdvancedConfigRequest) GoString() string {
	return s.String()
}

func (s *DescribePolicyAdvancedConfigRequest) SetSourceIp(v string) *DescribePolicyAdvancedConfigRequest {
	s.SourceIp = &v
	return s
}

func (s *DescribePolicyAdvancedConfigRequest) SetLang(v string) *DescribePolicyAdvancedConfigRequest {
	s.Lang = &v
	return s
}

type DescribePolicyAdvancedConfigResponse struct {
	RequestId      *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	InternetSwitch *string `json:"InternetSwitch,omitempty" xml:"InternetSwitch,omitempty" require:"true"`
}

func (s DescribePolicyAdvancedConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribePolicyAdvancedConfigResponse) GoString() string {
	return s.String()
}

func (s *DescribePolicyAdvancedConfigResponse) SetRequestId(v string) *DescribePolicyAdvancedConfigResponse {
	s.RequestId = &v
	return s
}

func (s *DescribePolicyAdvancedConfigResponse) SetInternetSwitch(v string) *DescribePolicyAdvancedConfigResponse {
	s.InternetSwitch = &v
	return s
}

type DescribeDomainResolveRequest struct {
	SourceIp *string `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang     *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	Domain   *string `json:"Domain,omitempty" xml:"Domain,omitempty" require:"true"`
}

func (s DescribeDomainResolveRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainResolveRequest) GoString() string {
	return s.String()
}

func (s *DescribeDomainResolveRequest) SetSourceIp(v string) *DescribeDomainResolveRequest {
	s.SourceIp = &v
	return s
}

func (s *DescribeDomainResolveRequest) SetLang(v string) *DescribeDomainResolveRequest {
	s.Lang = &v
	return s
}

func (s *DescribeDomainResolveRequest) SetDomain(v string) *DescribeDomainResolveRequest {
	s.Domain = &v
	return s
}

type DescribeDomainResolveResponse struct {
	RequestId     *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ResolveResult *DescribeDomainResolveResponseResolveResult `json:"ResolveResult,omitempty" xml:"ResolveResult,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDomainResolveResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainResolveResponse) GoString() string {
	return s.String()
}

func (s *DescribeDomainResolveResponse) SetRequestId(v string) *DescribeDomainResolveResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDomainResolveResponse) SetResolveResult(v *DescribeDomainResolveResponseResolveResult) *DescribeDomainResolveResponse {
	s.ResolveResult = v
	return s
}

type DescribeDomainResolveResponseResolveResult struct {
	IpAddrs    *string `json:"IpAddrs,omitempty" xml:"IpAddrs,omitempty" require:"true"`
	UpdateTime *int64  `json:"UpdateTime,omitempty" xml:"UpdateTime,omitempty" require:"true"`
}

func (s DescribeDomainResolveResponseResolveResult) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainResolveResponseResolveResult) GoString() string {
	return s.String()
}

func (s *DescribeDomainResolveResponseResolveResult) SetIpAddrs(v string) *DescribeDomainResolveResponseResolveResult {
	s.IpAddrs = &v
	return s
}

func (s *DescribeDomainResolveResponseResolveResult) SetUpdateTime(v int64) *DescribeDomainResolveResponseResolveResult {
	s.UpdateTime = &v
	return s
}

type DescribeVpcFirewallAclGroupListRequest struct {
	Lang                    *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	FirewallConfigureStatus *string `json:"FirewallConfigureStatus,omitempty" xml:"FirewallConfigureStatus,omitempty"`
	CurrentPage             *string `json:"CurrentPage,omitempty" xml:"CurrentPage,omitempty"`
	PageSize                *string `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeVpcFirewallAclGroupListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVpcFirewallAclGroupListRequest) GoString() string {
	return s.String()
}

func (s *DescribeVpcFirewallAclGroupListRequest) SetLang(v string) *DescribeVpcFirewallAclGroupListRequest {
	s.Lang = &v
	return s
}

func (s *DescribeVpcFirewallAclGroupListRequest) SetFirewallConfigureStatus(v string) *DescribeVpcFirewallAclGroupListRequest {
	s.FirewallConfigureStatus = &v
	return s
}

func (s *DescribeVpcFirewallAclGroupListRequest) SetCurrentPage(v string) *DescribeVpcFirewallAclGroupListRequest {
	s.CurrentPage = &v
	return s
}

func (s *DescribeVpcFirewallAclGroupListRequest) SetPageSize(v string) *DescribeVpcFirewallAclGroupListRequest {
	s.PageSize = &v
	return s
}

type DescribeVpcFirewallAclGroupListResponse struct {
	RequestId    *string                                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount   *int                                                   `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	AclGroupList []*DescribeVpcFirewallAclGroupListResponseAclGroupList `json:"AclGroupList,omitempty" xml:"AclGroupList,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVpcFirewallAclGroupListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVpcFirewallAclGroupListResponse) GoString() string {
	return s.String()
}

func (s *DescribeVpcFirewallAclGroupListResponse) SetRequestId(v string) *DescribeVpcFirewallAclGroupListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVpcFirewallAclGroupListResponse) SetTotalCount(v int) *DescribeVpcFirewallAclGroupListResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeVpcFirewallAclGroupListResponse) SetAclGroupList(v []*DescribeVpcFirewallAclGroupListResponseAclGroupList) *DescribeVpcFirewallAclGroupListResponse {
	s.AclGroupList = v
	return s
}

type DescribeVpcFirewallAclGroupListResponseAclGroupList struct {
	AclGroupId   *string `json:"AclGroupId,omitempty" xml:"AclGroupId,omitempty" require:"true"`
	AclGroupName *string `json:"AclGroupName,omitempty" xml:"AclGroupName,omitempty" require:"true"`
}

func (s DescribeVpcFirewallAclGroupListResponseAclGroupList) String() string {
	return tea.Prettify(s)
}

func (s DescribeVpcFirewallAclGroupListResponseAclGroupList) GoString() string {
	return s.String()
}

func (s *DescribeVpcFirewallAclGroupListResponseAclGroupList) SetAclGroupId(v string) *DescribeVpcFirewallAclGroupListResponseAclGroupList {
	s.AclGroupId = &v
	return s
}

func (s *DescribeVpcFirewallAclGroupListResponseAclGroupList) SetAclGroupName(v string) *DescribeVpcFirewallAclGroupListResponseAclGroupList {
	s.AclGroupName = &v
	return s
}

type ResetVpcFirewallRuleHitCountRequest struct {
	Lang    *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	AclUuid *string `json:"AclUuid,omitempty" xml:"AclUuid,omitempty" require:"true"`
}

func (s ResetVpcFirewallRuleHitCountRequest) String() string {
	return tea.Prettify(s)
}

func (s ResetVpcFirewallRuleHitCountRequest) GoString() string {
	return s.String()
}

func (s *ResetVpcFirewallRuleHitCountRequest) SetLang(v string) *ResetVpcFirewallRuleHitCountRequest {
	s.Lang = &v
	return s
}

func (s *ResetVpcFirewallRuleHitCountRequest) SetAclUuid(v string) *ResetVpcFirewallRuleHitCountRequest {
	s.AclUuid = &v
	return s
}

type ResetVpcFirewallRuleHitCountResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ResetVpcFirewallRuleHitCountResponse) String() string {
	return tea.Prettify(s)
}

func (s ResetVpcFirewallRuleHitCountResponse) GoString() string {
	return s.String()
}

func (s *ResetVpcFirewallRuleHitCountResponse) SetRequestId(v string) *ResetVpcFirewallRuleHitCountResponse {
	s.RequestId = &v
	return s
}

type ModifyVpcFirewallControlPolicyPositionRequest struct {
	Lang          *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	VpcFirewallId *string `json:"VpcFirewallId,omitempty" xml:"VpcFirewallId,omitempty" require:"true"`
	NewOrder      *string `json:"NewOrder,omitempty" xml:"NewOrder,omitempty" require:"true"`
	OldOrder      *string `json:"OldOrder,omitempty" xml:"OldOrder,omitempty" require:"true"`
}

func (s ModifyVpcFirewallControlPolicyPositionRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyVpcFirewallControlPolicyPositionRequest) GoString() string {
	return s.String()
}

func (s *ModifyVpcFirewallControlPolicyPositionRequest) SetLang(v string) *ModifyVpcFirewallControlPolicyPositionRequest {
	s.Lang = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyPositionRequest) SetVpcFirewallId(v string) *ModifyVpcFirewallControlPolicyPositionRequest {
	s.VpcFirewallId = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyPositionRequest) SetNewOrder(v string) *ModifyVpcFirewallControlPolicyPositionRequest {
	s.NewOrder = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyPositionRequest) SetOldOrder(v string) *ModifyVpcFirewallControlPolicyPositionRequest {
	s.OldOrder = &v
	return s
}

type ModifyVpcFirewallControlPolicyPositionResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyVpcFirewallControlPolicyPositionResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyVpcFirewallControlPolicyPositionResponse) GoString() string {
	return s.String()
}

func (s *ModifyVpcFirewallControlPolicyPositionResponse) SetRequestId(v string) *ModifyVpcFirewallControlPolicyPositionResponse {
	s.RequestId = &v
	return s
}

type ModifyVpcFirewallControlPolicyRequest struct {
	Lang            *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	AclAction       *string `json:"AclAction,omitempty" xml:"AclAction,omitempty" require:"true"`
	ApplicationName *string `json:"ApplicationName,omitempty" xml:"ApplicationName,omitempty" require:"true"`
	Description     *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	DestPort        *string `json:"DestPort,omitempty" xml:"DestPort,omitempty"`
	Destination     *string `json:"Destination,omitempty" xml:"Destination,omitempty" require:"true"`
	DestinationType *string `json:"DestinationType,omitempty" xml:"DestinationType,omitempty" require:"true"`
	VpcFirewallId   *string `json:"VpcFirewallId,omitempty" xml:"VpcFirewallId,omitempty" require:"true"`
	Proto           *string `json:"Proto,omitempty" xml:"Proto,omitempty" require:"true"`
	Source          *string `json:"Source,omitempty" xml:"Source,omitempty" require:"true"`
	AclUuid         *string `json:"AclUuid,omitempty" xml:"AclUuid,omitempty" require:"true"`
	SourceType      *string `json:"SourceType,omitempty" xml:"SourceType,omitempty" require:"true"`
	DestPortType    *string `json:"DestPortType,omitempty" xml:"DestPortType,omitempty"`
	DestPortGroup   *string `json:"DestPortGroup,omitempty" xml:"DestPortGroup,omitempty"`
}

func (s ModifyVpcFirewallControlPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyVpcFirewallControlPolicyRequest) GoString() string {
	return s.String()
}

func (s *ModifyVpcFirewallControlPolicyRequest) SetLang(v string) *ModifyVpcFirewallControlPolicyRequest {
	s.Lang = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyRequest) SetAclAction(v string) *ModifyVpcFirewallControlPolicyRequest {
	s.AclAction = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyRequest) SetApplicationName(v string) *ModifyVpcFirewallControlPolicyRequest {
	s.ApplicationName = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyRequest) SetDescription(v string) *ModifyVpcFirewallControlPolicyRequest {
	s.Description = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyRequest) SetDestPort(v string) *ModifyVpcFirewallControlPolicyRequest {
	s.DestPort = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyRequest) SetDestination(v string) *ModifyVpcFirewallControlPolicyRequest {
	s.Destination = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyRequest) SetDestinationType(v string) *ModifyVpcFirewallControlPolicyRequest {
	s.DestinationType = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyRequest) SetVpcFirewallId(v string) *ModifyVpcFirewallControlPolicyRequest {
	s.VpcFirewallId = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyRequest) SetProto(v string) *ModifyVpcFirewallControlPolicyRequest {
	s.Proto = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyRequest) SetSource(v string) *ModifyVpcFirewallControlPolicyRequest {
	s.Source = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyRequest) SetAclUuid(v string) *ModifyVpcFirewallControlPolicyRequest {
	s.AclUuid = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyRequest) SetSourceType(v string) *ModifyVpcFirewallControlPolicyRequest {
	s.SourceType = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyRequest) SetDestPortType(v string) *ModifyVpcFirewallControlPolicyRequest {
	s.DestPortType = &v
	return s
}

func (s *ModifyVpcFirewallControlPolicyRequest) SetDestPortGroup(v string) *ModifyVpcFirewallControlPolicyRequest {
	s.DestPortGroup = &v
	return s
}

type ModifyVpcFirewallControlPolicyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyVpcFirewallControlPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyVpcFirewallControlPolicyResponse) GoString() string {
	return s.String()
}

func (s *ModifyVpcFirewallControlPolicyResponse) SetRequestId(v string) *ModifyVpcFirewallControlPolicyResponse {
	s.RequestId = &v
	return s
}

type DescribeVpcFirewallPolicyPriorUsedRequest struct {
	Lang          *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	VpcFirewallId *string `json:"VpcFirewallId,omitempty" xml:"VpcFirewallId,omitempty" require:"true"`
}

func (s DescribeVpcFirewallPolicyPriorUsedRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVpcFirewallPolicyPriorUsedRequest) GoString() string {
	return s.String()
}

func (s *DescribeVpcFirewallPolicyPriorUsedRequest) SetLang(v string) *DescribeVpcFirewallPolicyPriorUsedRequest {
	s.Lang = &v
	return s
}

func (s *DescribeVpcFirewallPolicyPriorUsedRequest) SetVpcFirewallId(v string) *DescribeVpcFirewallPolicyPriorUsedRequest {
	s.VpcFirewallId = &v
	return s
}

type DescribeVpcFirewallPolicyPriorUsedResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Start     *int    `json:"Start,omitempty" xml:"Start,omitempty" require:"true"`
	End       *int    `json:"End,omitempty" xml:"End,omitempty" require:"true"`
}

func (s DescribeVpcFirewallPolicyPriorUsedResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVpcFirewallPolicyPriorUsedResponse) GoString() string {
	return s.String()
}

func (s *DescribeVpcFirewallPolicyPriorUsedResponse) SetRequestId(v string) *DescribeVpcFirewallPolicyPriorUsedResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVpcFirewallPolicyPriorUsedResponse) SetStart(v int) *DescribeVpcFirewallPolicyPriorUsedResponse {
	s.Start = &v
	return s
}

func (s *DescribeVpcFirewallPolicyPriorUsedResponse) SetEnd(v int) *DescribeVpcFirewallPolicyPriorUsedResponse {
	s.End = &v
	return s
}

type DescribeVpcFirewallControlPolicyRequest struct {
	Lang          *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	VpcFirewallId *string `json:"VpcFirewallId,omitempty" xml:"VpcFirewallId,omitempty" require:"true"`
	CurrentPage   *string `json:"CurrentPage,omitempty" xml:"CurrentPage,omitempty" require:"true"`
	PageSize      *string `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Source        *string `json:"Source,omitempty" xml:"Source,omitempty"`
	Destination   *string `json:"Destination,omitempty" xml:"Destination,omitempty"`
	Description   *string `json:"Description,omitempty" xml:"Description,omitempty"`
	Proto         *string `json:"Proto,omitempty" xml:"Proto,omitempty"`
	AclAction     *string `json:"AclAction,omitempty" xml:"AclAction,omitempty"`
}

func (s DescribeVpcFirewallControlPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVpcFirewallControlPolicyRequest) GoString() string {
	return s.String()
}

func (s *DescribeVpcFirewallControlPolicyRequest) SetLang(v string) *DescribeVpcFirewallControlPolicyRequest {
	s.Lang = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyRequest) SetVpcFirewallId(v string) *DescribeVpcFirewallControlPolicyRequest {
	s.VpcFirewallId = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyRequest) SetCurrentPage(v string) *DescribeVpcFirewallControlPolicyRequest {
	s.CurrentPage = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyRequest) SetPageSize(v string) *DescribeVpcFirewallControlPolicyRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyRequest) SetSource(v string) *DescribeVpcFirewallControlPolicyRequest {
	s.Source = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyRequest) SetDestination(v string) *DescribeVpcFirewallControlPolicyRequest {
	s.Destination = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyRequest) SetDescription(v string) *DescribeVpcFirewallControlPolicyRequest {
	s.Description = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyRequest) SetProto(v string) *DescribeVpcFirewallControlPolicyRequest {
	s.Proto = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyRequest) SetAclAction(v string) *DescribeVpcFirewallControlPolicyRequest {
	s.AclAction = &v
	return s
}

type DescribeVpcFirewallControlPolicyResponse struct {
	RequestId  *string                                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *string                                            `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Policys    []*DescribeVpcFirewallControlPolicyResponsePolicys `json:"Policys,omitempty" xml:"Policys,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVpcFirewallControlPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVpcFirewallControlPolicyResponse) GoString() string {
	return s.String()
}

func (s *DescribeVpcFirewallControlPolicyResponse) SetRequestId(v string) *DescribeVpcFirewallControlPolicyResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponse) SetTotalCount(v string) *DescribeVpcFirewallControlPolicyResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponse) SetPolicys(v []*DescribeVpcFirewallControlPolicyResponsePolicys) *DescribeVpcFirewallControlPolicyResponse {
	s.Policys = v
	return s
}

type DescribeVpcFirewallControlPolicyResponsePolicys struct {
	AclUuid               *string   `json:"AclUuid,omitempty" xml:"AclUuid,omitempty" require:"true"`
	Destination           *string   `json:"Destination,omitempty" xml:"Destination,omitempty" require:"true"`
	Description           *string   `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Source                *string   `json:"Source,omitempty" xml:"Source,omitempty" require:"true"`
	DestPort              *string   `json:"DestPort,omitempty" xml:"DestPort,omitempty" require:"true"`
	SourceType            *string   `json:"SourceType,omitempty" xml:"SourceType,omitempty" require:"true"`
	Proto                 *string   `json:"Proto,omitempty" xml:"Proto,omitempty" require:"true"`
	DestinationType       *string   `json:"DestinationType,omitempty" xml:"DestinationType,omitempty" require:"true"`
	AclAction             *string   `json:"AclAction,omitempty" xml:"AclAction,omitempty" require:"true"`
	ApplicationId         *string   `json:"ApplicationId,omitempty" xml:"ApplicationId,omitempty" require:"true"`
	ApplicationName       *string   `json:"ApplicationName,omitempty" xml:"ApplicationName,omitempty" require:"true"`
	Direction             *string   `json:"Direction,omitempty" xml:"Direction,omitempty" require:"true"`
	Order                 *int      `json:"Order,omitempty" xml:"Order,omitempty" require:"true"`
	HitTimes              *int      `json:"HitTimes,omitempty" xml:"HitTimes,omitempty" require:"true"`
	DestPortType          *string   `json:"DestPortType,omitempty" xml:"DestPortType,omitempty" require:"true"`
	DestPortGroup         *string   `json:"DestPortGroup,omitempty" xml:"DestPortGroup,omitempty" require:"true"`
	SourceGroupCidrs      []*string `json:"SourceGroupCidrs,omitempty" xml:"SourceGroupCidrs,omitempty" require:"true" type:"Repeated"`
	DestinationGroupCidrs []*string `json:"DestinationGroupCidrs,omitempty" xml:"DestinationGroupCidrs,omitempty" require:"true" type:"Repeated"`
	DestPortGroupPorts    []*string `json:"DestPortGroupPorts,omitempty" xml:"DestPortGroupPorts,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVpcFirewallControlPolicyResponsePolicys) String() string {
	return tea.Prettify(s)
}

func (s DescribeVpcFirewallControlPolicyResponsePolicys) GoString() string {
	return s.String()
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetAclUuid(v string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.AclUuid = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetDestination(v string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.Destination = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetDescription(v string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.Description = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetSource(v string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.Source = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetDestPort(v string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.DestPort = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetSourceType(v string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.SourceType = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetProto(v string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.Proto = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetDestinationType(v string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.DestinationType = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetAclAction(v string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.AclAction = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetApplicationId(v string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.ApplicationId = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetApplicationName(v string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.ApplicationName = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetDirection(v string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.Direction = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetOrder(v int) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.Order = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetHitTimes(v int) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.HitTimes = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetDestPortType(v string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.DestPortType = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetDestPortGroup(v string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.DestPortGroup = &v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetSourceGroupCidrs(v []*string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.SourceGroupCidrs = v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetDestinationGroupCidrs(v []*string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.DestinationGroupCidrs = v
	return s
}

func (s *DescribeVpcFirewallControlPolicyResponsePolicys) SetDestPortGroupPorts(v []*string) *DescribeVpcFirewallControlPolicyResponsePolicys {
	s.DestPortGroupPorts = v
	return s
}

type DeleteVpcFirewallControlPolicyRequest struct {
	Lang          *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	AclUuid       *string `json:"AclUuid,omitempty" xml:"AclUuid,omitempty" require:"true"`
	VpcFirewallId *string `json:"VpcFirewallId,omitempty" xml:"VpcFirewallId,omitempty" require:"true"`
}

func (s DeleteVpcFirewallControlPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteVpcFirewallControlPolicyRequest) GoString() string {
	return s.String()
}

func (s *DeleteVpcFirewallControlPolicyRequest) SetLang(v string) *DeleteVpcFirewallControlPolicyRequest {
	s.Lang = &v
	return s
}

func (s *DeleteVpcFirewallControlPolicyRequest) SetAclUuid(v string) *DeleteVpcFirewallControlPolicyRequest {
	s.AclUuid = &v
	return s
}

func (s *DeleteVpcFirewallControlPolicyRequest) SetVpcFirewallId(v string) *DeleteVpcFirewallControlPolicyRequest {
	s.VpcFirewallId = &v
	return s
}

type DeleteVpcFirewallControlPolicyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteVpcFirewallControlPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteVpcFirewallControlPolicyResponse) GoString() string {
	return s.String()
}

func (s *DeleteVpcFirewallControlPolicyResponse) SetRequestId(v string) *DeleteVpcFirewallControlPolicyResponse {
	s.RequestId = &v
	return s
}

type CreateVpcFirewallControlPolicyRequest struct {
	Lang            *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	AclAction       *string `json:"AclAction,omitempty" xml:"AclAction,omitempty" require:"true"`
	ApplicationName *string `json:"ApplicationName,omitempty" xml:"ApplicationName,omitempty" require:"true"`
	Description     *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	DestPort        *string `json:"DestPort,omitempty" xml:"DestPort,omitempty"`
	Destination     *string `json:"Destination,omitempty" xml:"Destination,omitempty" require:"true"`
	DestinationType *string `json:"DestinationType,omitempty" xml:"DestinationType,omitempty" require:"true"`
	VpcFirewallId   *string `json:"VpcFirewallId,omitempty" xml:"VpcFirewallId,omitempty" require:"true"`
	Proto           *string `json:"Proto,omitempty" xml:"Proto,omitempty" require:"true"`
	Source          *string `json:"Source,omitempty" xml:"Source,omitempty" require:"true"`
	SourceType      *string `json:"SourceType,omitempty" xml:"SourceType,omitempty" require:"true"`
	NewOrder        *string `json:"NewOrder,omitempty" xml:"NewOrder,omitempty" require:"true"`
	DestPortType    *string `json:"DestPortType,omitempty" xml:"DestPortType,omitempty"`
	DestPortGroup   *string `json:"DestPortGroup,omitempty" xml:"DestPortGroup,omitempty"`
}

func (s CreateVpcFirewallControlPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateVpcFirewallControlPolicyRequest) GoString() string {
	return s.String()
}

func (s *CreateVpcFirewallControlPolicyRequest) SetLang(v string) *CreateVpcFirewallControlPolicyRequest {
	s.Lang = &v
	return s
}

func (s *CreateVpcFirewallControlPolicyRequest) SetAclAction(v string) *CreateVpcFirewallControlPolicyRequest {
	s.AclAction = &v
	return s
}

func (s *CreateVpcFirewallControlPolicyRequest) SetApplicationName(v string) *CreateVpcFirewallControlPolicyRequest {
	s.ApplicationName = &v
	return s
}

func (s *CreateVpcFirewallControlPolicyRequest) SetDescription(v string) *CreateVpcFirewallControlPolicyRequest {
	s.Description = &v
	return s
}

func (s *CreateVpcFirewallControlPolicyRequest) SetDestPort(v string) *CreateVpcFirewallControlPolicyRequest {
	s.DestPort = &v
	return s
}

func (s *CreateVpcFirewallControlPolicyRequest) SetDestination(v string) *CreateVpcFirewallControlPolicyRequest {
	s.Destination = &v
	return s
}

func (s *CreateVpcFirewallControlPolicyRequest) SetDestinationType(v string) *CreateVpcFirewallControlPolicyRequest {
	s.DestinationType = &v
	return s
}

func (s *CreateVpcFirewallControlPolicyRequest) SetVpcFirewallId(v string) *CreateVpcFirewallControlPolicyRequest {
	s.VpcFirewallId = &v
	return s
}

func (s *CreateVpcFirewallControlPolicyRequest) SetProto(v string) *CreateVpcFirewallControlPolicyRequest {
	s.Proto = &v
	return s
}

func (s *CreateVpcFirewallControlPolicyRequest) SetSource(v string) *CreateVpcFirewallControlPolicyRequest {
	s.Source = &v
	return s
}

func (s *CreateVpcFirewallControlPolicyRequest) SetSourceType(v string) *CreateVpcFirewallControlPolicyRequest {
	s.SourceType = &v
	return s
}

func (s *CreateVpcFirewallControlPolicyRequest) SetNewOrder(v string) *CreateVpcFirewallControlPolicyRequest {
	s.NewOrder = &v
	return s
}

func (s *CreateVpcFirewallControlPolicyRequest) SetDestPortType(v string) *CreateVpcFirewallControlPolicyRequest {
	s.DestPortType = &v
	return s
}

func (s *CreateVpcFirewallControlPolicyRequest) SetDestPortGroup(v string) *CreateVpcFirewallControlPolicyRequest {
	s.DestPortGroup = &v
	return s
}

type CreateVpcFirewallControlPolicyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AclUuid   *string `json:"AclUuid,omitempty" xml:"AclUuid,omitempty" require:"true"`
}

func (s CreateVpcFirewallControlPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateVpcFirewallControlPolicyResponse) GoString() string {
	return s.String()
}

func (s *CreateVpcFirewallControlPolicyResponse) SetRequestId(v string) *CreateVpcFirewallControlPolicyResponse {
	s.RequestId = &v
	return s
}

func (s *CreateVpcFirewallControlPolicyResponse) SetAclUuid(v string) *CreateVpcFirewallControlPolicyResponse {
	s.AclUuid = &v
	return s
}

type PutEnableFwSwitchRequest struct {
	SourceIp         *string   `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang             *string   `json:"Lang,omitempty" xml:"Lang,omitempty"`
	IpaddrList       []*string `json:"IpaddrList,omitempty" xml:"IpaddrList,omitempty" type:"Repeated"`
	RegionList       []*string `json:"RegionList,omitempty" xml:"RegionList,omitempty" type:"Repeated"`
	ResourceTypeList []*string `json:"ResourceTypeList,omitempty" xml:"ResourceTypeList,omitempty" type:"Repeated"`
}

func (s PutEnableFwSwitchRequest) String() string {
	return tea.Prettify(s)
}

func (s PutEnableFwSwitchRequest) GoString() string {
	return s.String()
}

func (s *PutEnableFwSwitchRequest) SetSourceIp(v string) *PutEnableFwSwitchRequest {
	s.SourceIp = &v
	return s
}

func (s *PutEnableFwSwitchRequest) SetLang(v string) *PutEnableFwSwitchRequest {
	s.Lang = &v
	return s
}

func (s *PutEnableFwSwitchRequest) SetIpaddrList(v []*string) *PutEnableFwSwitchRequest {
	s.IpaddrList = v
	return s
}

func (s *PutEnableFwSwitchRequest) SetRegionList(v []*string) *PutEnableFwSwitchRequest {
	s.RegionList = v
	return s
}

func (s *PutEnableFwSwitchRequest) SetResourceTypeList(v []*string) *PutEnableFwSwitchRequest {
	s.ResourceTypeList = v
	return s
}

type PutEnableFwSwitchResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s PutEnableFwSwitchResponse) String() string {
	return tea.Prettify(s)
}

func (s PutEnableFwSwitchResponse) GoString() string {
	return s.String()
}

func (s *PutEnableFwSwitchResponse) SetRequestId(v string) *PutEnableFwSwitchResponse {
	s.RequestId = &v
	return s
}

type PutEnableAllFwSwitchRequest struct {
	SourceIp   *string `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty"`
}

func (s PutEnableAllFwSwitchRequest) String() string {
	return tea.Prettify(s)
}

func (s PutEnableAllFwSwitchRequest) GoString() string {
	return s.String()
}

func (s *PutEnableAllFwSwitchRequest) SetSourceIp(v string) *PutEnableAllFwSwitchRequest {
	s.SourceIp = &v
	return s
}

func (s *PutEnableAllFwSwitchRequest) SetLang(v string) *PutEnableAllFwSwitchRequest {
	s.Lang = &v
	return s
}

func (s *PutEnableAllFwSwitchRequest) SetInstanceId(v string) *PutEnableAllFwSwitchRequest {
	s.InstanceId = &v
	return s
}

type PutEnableAllFwSwitchResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s PutEnableAllFwSwitchResponse) String() string {
	return tea.Prettify(s)
}

func (s PutEnableAllFwSwitchResponse) GoString() string {
	return s.String()
}

func (s *PutEnableAllFwSwitchResponse) SetRequestId(v string) *PutEnableAllFwSwitchResponse {
	s.RequestId = &v
	return s
}

type PutDisableFwSwitchRequest struct {
	SourceIp         *string   `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang             *string   `json:"Lang,omitempty" xml:"Lang,omitempty"`
	IpaddrList       []*string `json:"IpaddrList,omitempty" xml:"IpaddrList,omitempty" type:"Repeated"`
	RegionList       []*string `json:"RegionList,omitempty" xml:"RegionList,omitempty" type:"Repeated"`
	ResourceTypeList []*string `json:"ResourceTypeList,omitempty" xml:"ResourceTypeList,omitempty" type:"Repeated"`
}

func (s PutDisableFwSwitchRequest) String() string {
	return tea.Prettify(s)
}

func (s PutDisableFwSwitchRequest) GoString() string {
	return s.String()
}

func (s *PutDisableFwSwitchRequest) SetSourceIp(v string) *PutDisableFwSwitchRequest {
	s.SourceIp = &v
	return s
}

func (s *PutDisableFwSwitchRequest) SetLang(v string) *PutDisableFwSwitchRequest {
	s.Lang = &v
	return s
}

func (s *PutDisableFwSwitchRequest) SetIpaddrList(v []*string) *PutDisableFwSwitchRequest {
	s.IpaddrList = v
	return s
}

func (s *PutDisableFwSwitchRequest) SetRegionList(v []*string) *PutDisableFwSwitchRequest {
	s.RegionList = v
	return s
}

func (s *PutDisableFwSwitchRequest) SetResourceTypeList(v []*string) *PutDisableFwSwitchRequest {
	s.ResourceTypeList = v
	return s
}

type PutDisableFwSwitchResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s PutDisableFwSwitchResponse) String() string {
	return tea.Prettify(s)
}

func (s PutDisableFwSwitchResponse) GoString() string {
	return s.String()
}

func (s *PutDisableFwSwitchResponse) SetRequestId(v string) *PutDisableFwSwitchResponse {
	s.RequestId = &v
	return s
}

type PutDisableAllFwSwitchRequest struct {
	SourceIp   *string `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang       *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty"`
}

func (s PutDisableAllFwSwitchRequest) String() string {
	return tea.Prettify(s)
}

func (s PutDisableAllFwSwitchRequest) GoString() string {
	return s.String()
}

func (s *PutDisableAllFwSwitchRequest) SetSourceIp(v string) *PutDisableAllFwSwitchRequest {
	s.SourceIp = &v
	return s
}

func (s *PutDisableAllFwSwitchRequest) SetLang(v string) *PutDisableAllFwSwitchRequest {
	s.Lang = &v
	return s
}

func (s *PutDisableAllFwSwitchRequest) SetInstanceId(v string) *PutDisableAllFwSwitchRequest {
	s.InstanceId = &v
	return s
}

type PutDisableAllFwSwitchResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s PutDisableAllFwSwitchResponse) String() string {
	return tea.Prettify(s)
}

func (s PutDisableAllFwSwitchResponse) GoString() string {
	return s.String()
}

func (s *PutDisableAllFwSwitchResponse) SetRequestId(v string) *PutDisableAllFwSwitchResponse {
	s.RequestId = &v
	return s
}

type ModifyControlPolicyPositionRequest struct {
	SourceIp  *string `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang      *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	Direction *string `json:"Direction,omitempty" xml:"Direction,omitempty" require:"true"`
	NewOrder  *string `json:"NewOrder,omitempty" xml:"NewOrder,omitempty" require:"true"`
	OldOrder  *string `json:"OldOrder,omitempty" xml:"OldOrder,omitempty" require:"true"`
}

func (s ModifyControlPolicyPositionRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyControlPolicyPositionRequest) GoString() string {
	return s.String()
}

func (s *ModifyControlPolicyPositionRequest) SetSourceIp(v string) *ModifyControlPolicyPositionRequest {
	s.SourceIp = &v
	return s
}

func (s *ModifyControlPolicyPositionRequest) SetLang(v string) *ModifyControlPolicyPositionRequest {
	s.Lang = &v
	return s
}

func (s *ModifyControlPolicyPositionRequest) SetDirection(v string) *ModifyControlPolicyPositionRequest {
	s.Direction = &v
	return s
}

func (s *ModifyControlPolicyPositionRequest) SetNewOrder(v string) *ModifyControlPolicyPositionRequest {
	s.NewOrder = &v
	return s
}

func (s *ModifyControlPolicyPositionRequest) SetOldOrder(v string) *ModifyControlPolicyPositionRequest {
	s.OldOrder = &v
	return s
}

type ModifyControlPolicyPositionResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyControlPolicyPositionResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyControlPolicyPositionResponse) GoString() string {
	return s.String()
}

func (s *ModifyControlPolicyPositionResponse) SetRequestId(v string) *ModifyControlPolicyPositionResponse {
	s.RequestId = &v
	return s
}

type ModifyControlPolicyRequest struct {
	SourceIp        *string `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang            *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	AclAction       *string `json:"AclAction,omitempty" xml:"AclAction,omitempty" require:"true"`
	ApplicationName *string `json:"ApplicationName,omitempty" xml:"ApplicationName,omitempty" require:"true"`
	Description     *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	DestPort        *string `json:"DestPort,omitempty" xml:"DestPort,omitempty"`
	Destination     *string `json:"Destination,omitempty" xml:"Destination,omitempty" require:"true"`
	DestinationType *string `json:"DestinationType,omitempty" xml:"DestinationType,omitempty" require:"true"`
	Direction       *string `json:"Direction,omitempty" xml:"Direction,omitempty" require:"true"`
	Proto           *string `json:"Proto,omitempty" xml:"Proto,omitempty" require:"true"`
	Source          *string `json:"Source,omitempty" xml:"Source,omitempty" require:"true"`
	AclUuid         *string `json:"AclUuid,omitempty" xml:"AclUuid,omitempty" require:"true"`
	SourceType      *string `json:"SourceType,omitempty" xml:"SourceType,omitempty" require:"true"`
	DestPortType    *string `json:"DestPortType,omitempty" xml:"DestPortType,omitempty"`
	DestPortGroup   *string `json:"DestPortGroup,omitempty" xml:"DestPortGroup,omitempty"`
	Release         *string `json:"Release,omitempty" xml:"Release,omitempty"`
}

func (s ModifyControlPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyControlPolicyRequest) GoString() string {
	return s.String()
}

func (s *ModifyControlPolicyRequest) SetSourceIp(v string) *ModifyControlPolicyRequest {
	s.SourceIp = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetLang(v string) *ModifyControlPolicyRequest {
	s.Lang = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetAclAction(v string) *ModifyControlPolicyRequest {
	s.AclAction = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetApplicationName(v string) *ModifyControlPolicyRequest {
	s.ApplicationName = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetDescription(v string) *ModifyControlPolicyRequest {
	s.Description = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetDestPort(v string) *ModifyControlPolicyRequest {
	s.DestPort = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetDestination(v string) *ModifyControlPolicyRequest {
	s.Destination = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetDestinationType(v string) *ModifyControlPolicyRequest {
	s.DestinationType = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetDirection(v string) *ModifyControlPolicyRequest {
	s.Direction = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetProto(v string) *ModifyControlPolicyRequest {
	s.Proto = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetSource(v string) *ModifyControlPolicyRequest {
	s.Source = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetAclUuid(v string) *ModifyControlPolicyRequest {
	s.AclUuid = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetSourceType(v string) *ModifyControlPolicyRequest {
	s.SourceType = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetDestPortType(v string) *ModifyControlPolicyRequest {
	s.DestPortType = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetDestPortGroup(v string) *ModifyControlPolicyRequest {
	s.DestPortGroup = &v
	return s
}

func (s *ModifyControlPolicyRequest) SetRelease(v string) *ModifyControlPolicyRequest {
	s.Release = &v
	return s
}

type ModifyControlPolicyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyControlPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyControlPolicyResponse) GoString() string {
	return s.String()
}

func (s *ModifyControlPolicyResponse) SetRequestId(v string) *ModifyControlPolicyResponse {
	s.RequestId = &v
	return s
}

type ModifyAddressBookRequest struct {
	SourceIp      *string                            `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang          *string                            `json:"Lang,omitempty" xml:"Lang,omitempty"`
	AddressList   *string                            `json:"AddressList,omitempty" xml:"AddressList,omitempty"`
	Description   *string                            `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	GroupName     *string                            `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	GroupUuid     *string                            `json:"GroupUuid,omitempty" xml:"GroupUuid,omitempty" require:"true"`
	AutoAddTagEcs *string                            `json:"AutoAddTagEcs,omitempty" xml:"AutoAddTagEcs,omitempty"`
	TagRelation   *string                            `json:"TagRelation,omitempty" xml:"TagRelation,omitempty"`
	TagList       []*ModifyAddressBookRequestTagList `json:"TagList,omitempty" xml:"TagList,omitempty" type:"Repeated"`
}

func (s ModifyAddressBookRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyAddressBookRequest) GoString() string {
	return s.String()
}

func (s *ModifyAddressBookRequest) SetSourceIp(v string) *ModifyAddressBookRequest {
	s.SourceIp = &v
	return s
}

func (s *ModifyAddressBookRequest) SetLang(v string) *ModifyAddressBookRequest {
	s.Lang = &v
	return s
}

func (s *ModifyAddressBookRequest) SetAddressList(v string) *ModifyAddressBookRequest {
	s.AddressList = &v
	return s
}

func (s *ModifyAddressBookRequest) SetDescription(v string) *ModifyAddressBookRequest {
	s.Description = &v
	return s
}

func (s *ModifyAddressBookRequest) SetGroupName(v string) *ModifyAddressBookRequest {
	s.GroupName = &v
	return s
}

func (s *ModifyAddressBookRequest) SetGroupUuid(v string) *ModifyAddressBookRequest {
	s.GroupUuid = &v
	return s
}

func (s *ModifyAddressBookRequest) SetAutoAddTagEcs(v string) *ModifyAddressBookRequest {
	s.AutoAddTagEcs = &v
	return s
}

func (s *ModifyAddressBookRequest) SetTagRelation(v string) *ModifyAddressBookRequest {
	s.TagRelation = &v
	return s
}

func (s *ModifyAddressBookRequest) SetTagList(v []*ModifyAddressBookRequestTagList) *ModifyAddressBookRequest {
	s.TagList = v
	return s
}

type ModifyAddressBookRequestTagList struct {
	TagKey   *string `json:"TagKey,omitempty" xml:"TagKey,omitempty" require:"true"`
	TagValue *string `json:"TagValue,omitempty" xml:"TagValue,omitempty" require:"true"`
}

func (s ModifyAddressBookRequestTagList) String() string {
	return tea.Prettify(s)
}

func (s ModifyAddressBookRequestTagList) GoString() string {
	return s.String()
}

func (s *ModifyAddressBookRequestTagList) SetTagKey(v string) *ModifyAddressBookRequestTagList {
	s.TagKey = &v
	return s
}

func (s *ModifyAddressBookRequestTagList) SetTagValue(v string) *ModifyAddressBookRequestTagList {
	s.TagValue = &v
	return s
}

type ModifyAddressBookResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyAddressBookResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyAddressBookResponse) GoString() string {
	return s.String()
}

func (s *ModifyAddressBookResponse) SetRequestId(v string) *ModifyAddressBookResponse {
	s.RequestId = &v
	return s
}

type DescribePolicyPriorUsedRequest struct {
	SourceIp  *string `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang      *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	Direction *string `json:"Direction,omitempty" xml:"Direction,omitempty" require:"true"`
}

func (s DescribePolicyPriorUsedRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribePolicyPriorUsedRequest) GoString() string {
	return s.String()
}

func (s *DescribePolicyPriorUsedRequest) SetSourceIp(v string) *DescribePolicyPriorUsedRequest {
	s.SourceIp = &v
	return s
}

func (s *DescribePolicyPriorUsedRequest) SetLang(v string) *DescribePolicyPriorUsedRequest {
	s.Lang = &v
	return s
}

func (s *DescribePolicyPriorUsedRequest) SetDirection(v string) *DescribePolicyPriorUsedRequest {
	s.Direction = &v
	return s
}

type DescribePolicyPriorUsedResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Start     *int    `json:"Start,omitempty" xml:"Start,omitempty" require:"true"`
	End       *int    `json:"End,omitempty" xml:"End,omitempty" require:"true"`
}

func (s DescribePolicyPriorUsedResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribePolicyPriorUsedResponse) GoString() string {
	return s.String()
}

func (s *DescribePolicyPriorUsedResponse) SetRequestId(v string) *DescribePolicyPriorUsedResponse {
	s.RequestId = &v
	return s
}

func (s *DescribePolicyPriorUsedResponse) SetStart(v int) *DescribePolicyPriorUsedResponse {
	s.Start = &v
	return s
}

func (s *DescribePolicyPriorUsedResponse) SetEnd(v int) *DescribePolicyPriorUsedResponse {
	s.End = &v
	return s
}

type DescribeControlPolicyRequest struct {
	SourceIp    *string `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang        *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	Direction   *string `json:"Direction,omitempty" xml:"Direction,omitempty" require:"true"`
	CurrentPage *string `json:"CurrentPage,omitempty" xml:"CurrentPage,omitempty" require:"true"`
	PageSize    *string `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Source      *string `json:"Source,omitempty" xml:"Source,omitempty"`
	Destination *string `json:"Destination,omitempty" xml:"Destination,omitempty"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty"`
	Proto       *string `json:"Proto,omitempty" xml:"Proto,omitempty"`
	AclAction   *string `json:"AclAction,omitempty" xml:"AclAction,omitempty"`
	Release     *string `json:"Release,omitempty" xml:"Release,omitempty"`
	AclUuid     *string `json:"AclUuid,omitempty" xml:"AclUuid,omitempty"`
}

func (s DescribeControlPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeControlPolicyRequest) GoString() string {
	return s.String()
}

func (s *DescribeControlPolicyRequest) SetSourceIp(v string) *DescribeControlPolicyRequest {
	s.SourceIp = &v
	return s
}

func (s *DescribeControlPolicyRequest) SetLang(v string) *DescribeControlPolicyRequest {
	s.Lang = &v
	return s
}

func (s *DescribeControlPolicyRequest) SetDirection(v string) *DescribeControlPolicyRequest {
	s.Direction = &v
	return s
}

func (s *DescribeControlPolicyRequest) SetCurrentPage(v string) *DescribeControlPolicyRequest {
	s.CurrentPage = &v
	return s
}

func (s *DescribeControlPolicyRequest) SetPageSize(v string) *DescribeControlPolicyRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeControlPolicyRequest) SetSource(v string) *DescribeControlPolicyRequest {
	s.Source = &v
	return s
}

func (s *DescribeControlPolicyRequest) SetDestination(v string) *DescribeControlPolicyRequest {
	s.Destination = &v
	return s
}

func (s *DescribeControlPolicyRequest) SetDescription(v string) *DescribeControlPolicyRequest {
	s.Description = &v
	return s
}

func (s *DescribeControlPolicyRequest) SetProto(v string) *DescribeControlPolicyRequest {
	s.Proto = &v
	return s
}

func (s *DescribeControlPolicyRequest) SetAclAction(v string) *DescribeControlPolicyRequest {
	s.AclAction = &v
	return s
}

func (s *DescribeControlPolicyRequest) SetRelease(v string) *DescribeControlPolicyRequest {
	s.Release = &v
	return s
}

func (s *DescribeControlPolicyRequest) SetAclUuid(v string) *DescribeControlPolicyRequest {
	s.AclUuid = &v
	return s
}

type DescribeControlPolicyResponse struct {
	RequestId  *string                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *string                                 `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNo     *string                                 `json:"PageNo,omitempty" xml:"PageNo,omitempty" require:"true"`
	PageSize   *string                                 `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Policys    []*DescribeControlPolicyResponsePolicys `json:"Policys,omitempty" xml:"Policys,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeControlPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeControlPolicyResponse) GoString() string {
	return s.String()
}

func (s *DescribeControlPolicyResponse) SetRequestId(v string) *DescribeControlPolicyResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeControlPolicyResponse) SetTotalCount(v string) *DescribeControlPolicyResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeControlPolicyResponse) SetPageNo(v string) *DescribeControlPolicyResponse {
	s.PageNo = &v
	return s
}

func (s *DescribeControlPolicyResponse) SetPageSize(v string) *DescribeControlPolicyResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeControlPolicyResponse) SetPolicys(v []*DescribeControlPolicyResponsePolicys) *DescribeControlPolicyResponse {
	s.Policys = v
	return s
}

type DescribeControlPolicyResponsePolicys struct {
	AclUuid               *string   `json:"AclUuid,omitempty" xml:"AclUuid,omitempty" require:"true"`
	Destination           *string   `json:"Destination,omitempty" xml:"Destination,omitempty" require:"true"`
	Description           *string   `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Source                *string   `json:"Source,omitempty" xml:"Source,omitempty" require:"true"`
	DestPort              *string   `json:"DestPort,omitempty" xml:"DestPort,omitempty" require:"true"`
	SourceType            *string   `json:"SourceType,omitempty" xml:"SourceType,omitempty" require:"true"`
	Proto                 *string   `json:"Proto,omitempty" xml:"Proto,omitempty" require:"true"`
	DestinationType       *string   `json:"DestinationType,omitempty" xml:"DestinationType,omitempty" require:"true"`
	AclAction             *string   `json:"AclAction,omitempty" xml:"AclAction,omitempty" require:"true"`
	ApplicationId         *string   `json:"ApplicationId,omitempty" xml:"ApplicationId,omitempty" require:"true"`
	ApplicationName       *string   `json:"ApplicationName,omitempty" xml:"ApplicationName,omitempty" require:"true"`
	Direction             *string   `json:"Direction,omitempty" xml:"Direction,omitempty" require:"true"`
	Order                 *int      `json:"Order,omitempty" xml:"Order,omitempty" require:"true"`
	HitTimes              *int64    `json:"HitTimes,omitempty" xml:"HitTimes,omitempty" require:"true"`
	DestPortType          *string   `json:"DestPortType,omitempty" xml:"DestPortType,omitempty" require:"true"`
	DestPortGroup         *string   `json:"DestPortGroup,omitempty" xml:"DestPortGroup,omitempty" require:"true"`
	SourceGroupType       *string   `json:"SourceGroupType,omitempty" xml:"SourceGroupType,omitempty" require:"true"`
	DestinationGroupType  *string   `json:"DestinationGroupType,omitempty" xml:"DestinationGroupType,omitempty" require:"true"`
	DnsResult             *string   `json:"DnsResult,omitempty" xml:"DnsResult,omitempty" require:"true"`
	DnsResultTime         *int64    `json:"DnsResultTime,omitempty" xml:"DnsResultTime,omitempty" require:"true"`
	Release               *string   `json:"Release,omitempty" xml:"Release,omitempty" require:"true"`
	SourceGroupCidrs      []*string `json:"SourceGroupCidrs,omitempty" xml:"SourceGroupCidrs,omitempty" require:"true" type:"Repeated"`
	DestinationGroupCidrs []*string `json:"DestinationGroupCidrs,omitempty" xml:"DestinationGroupCidrs,omitempty" require:"true" type:"Repeated"`
	DestPortGroupPorts    []*string `json:"DestPortGroupPorts,omitempty" xml:"DestPortGroupPorts,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeControlPolicyResponsePolicys) String() string {
	return tea.Prettify(s)
}

func (s DescribeControlPolicyResponsePolicys) GoString() string {
	return s.String()
}

func (s *DescribeControlPolicyResponsePolicys) SetAclUuid(v string) *DescribeControlPolicyResponsePolicys {
	s.AclUuid = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetDestination(v string) *DescribeControlPolicyResponsePolicys {
	s.Destination = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetDescription(v string) *DescribeControlPolicyResponsePolicys {
	s.Description = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetSource(v string) *DescribeControlPolicyResponsePolicys {
	s.Source = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetDestPort(v string) *DescribeControlPolicyResponsePolicys {
	s.DestPort = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetSourceType(v string) *DescribeControlPolicyResponsePolicys {
	s.SourceType = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetProto(v string) *DescribeControlPolicyResponsePolicys {
	s.Proto = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetDestinationType(v string) *DescribeControlPolicyResponsePolicys {
	s.DestinationType = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetAclAction(v string) *DescribeControlPolicyResponsePolicys {
	s.AclAction = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetApplicationId(v string) *DescribeControlPolicyResponsePolicys {
	s.ApplicationId = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetApplicationName(v string) *DescribeControlPolicyResponsePolicys {
	s.ApplicationName = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetDirection(v string) *DescribeControlPolicyResponsePolicys {
	s.Direction = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetOrder(v int) *DescribeControlPolicyResponsePolicys {
	s.Order = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetHitTimes(v int64) *DescribeControlPolicyResponsePolicys {
	s.HitTimes = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetDestPortType(v string) *DescribeControlPolicyResponsePolicys {
	s.DestPortType = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetDestPortGroup(v string) *DescribeControlPolicyResponsePolicys {
	s.DestPortGroup = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetSourceGroupType(v string) *DescribeControlPolicyResponsePolicys {
	s.SourceGroupType = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetDestinationGroupType(v string) *DescribeControlPolicyResponsePolicys {
	s.DestinationGroupType = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetDnsResult(v string) *DescribeControlPolicyResponsePolicys {
	s.DnsResult = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetDnsResultTime(v int64) *DescribeControlPolicyResponsePolicys {
	s.DnsResultTime = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetRelease(v string) *DescribeControlPolicyResponsePolicys {
	s.Release = &v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetSourceGroupCidrs(v []*string) *DescribeControlPolicyResponsePolicys {
	s.SourceGroupCidrs = v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetDestinationGroupCidrs(v []*string) *DescribeControlPolicyResponsePolicys {
	s.DestinationGroupCidrs = v
	return s
}

func (s *DescribeControlPolicyResponsePolicys) SetDestPortGroupPorts(v []*string) *DescribeControlPolicyResponsePolicys {
	s.DestPortGroupPorts = v
	return s
}

type DescribeAddressBookRequest struct {
	SourceIp    *string `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang        *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	CurrentPage *string `json:"CurrentPage,omitempty" xml:"CurrentPage,omitempty"`
	PageSize    *string `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	Query       *string `json:"Query,omitempty" xml:"Query,omitempty"`
	GroupType   *string `json:"GroupType,omitempty" xml:"GroupType,omitempty"`
	ContainPort *string `json:"ContainPort,omitempty" xml:"ContainPort,omitempty"`
}

func (s DescribeAddressBookRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAddressBookRequest) GoString() string {
	return s.String()
}

func (s *DescribeAddressBookRequest) SetSourceIp(v string) *DescribeAddressBookRequest {
	s.SourceIp = &v
	return s
}

func (s *DescribeAddressBookRequest) SetLang(v string) *DescribeAddressBookRequest {
	s.Lang = &v
	return s
}

func (s *DescribeAddressBookRequest) SetCurrentPage(v string) *DescribeAddressBookRequest {
	s.CurrentPage = &v
	return s
}

func (s *DescribeAddressBookRequest) SetPageSize(v string) *DescribeAddressBookRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeAddressBookRequest) SetQuery(v string) *DescribeAddressBookRequest {
	s.Query = &v
	return s
}

func (s *DescribeAddressBookRequest) SetGroupType(v string) *DescribeAddressBookRequest {
	s.GroupType = &v
	return s
}

func (s *DescribeAddressBookRequest) SetContainPort(v string) *DescribeAddressBookRequest {
	s.ContainPort = &v
	return s
}

type DescribeAddressBookResponse struct {
	RequestId  *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *string                            `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageNo     *string                            `json:"PageNo,omitempty" xml:"PageNo,omitempty" require:"true"`
	PageSize   *string                            `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Acls       []*DescribeAddressBookResponseAcls `json:"Acls,omitempty" xml:"Acls,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAddressBookResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAddressBookResponse) GoString() string {
	return s.String()
}

func (s *DescribeAddressBookResponse) SetRequestId(v string) *DescribeAddressBookResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAddressBookResponse) SetTotalCount(v string) *DescribeAddressBookResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeAddressBookResponse) SetPageNo(v string) *DescribeAddressBookResponse {
	s.PageNo = &v
	return s
}

func (s *DescribeAddressBookResponse) SetPageSize(v string) *DescribeAddressBookResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeAddressBookResponse) SetAcls(v []*DescribeAddressBookResponseAcls) *DescribeAddressBookResponse {
	s.Acls = v
	return s
}

type DescribeAddressBookResponseAcls struct {
	GroupName        *string                                   `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	GroupUuid        *string                                   `json:"GroupUuid,omitempty" xml:"GroupUuid,omitempty" require:"true"`
	ReferenceCount   *int                                      `json:"ReferenceCount,omitempty" xml:"ReferenceCount,omitempty" require:"true"`
	Description      *string                                   `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Global           *int                                      `json:"Global,omitempty" xml:"Global,omitempty" require:"true"`
	GroupType        *string                                   `json:"GroupType,omitempty" xml:"GroupType,omitempty" require:"true"`
	AutoAddTagEcs    *int                                      `json:"AutoAddTagEcs,omitempty" xml:"AutoAddTagEcs,omitempty" require:"true"`
	AddressListCount *int                                      `json:"AddressListCount,omitempty" xml:"AddressListCount,omitempty" require:"true"`
	TagRelation      *string                                   `json:"TagRelation,omitempty" xml:"TagRelation,omitempty" require:"true"`
	TagList          []*DescribeAddressBookResponseAclsTagList `json:"TagList,omitempty" xml:"TagList,omitempty" require:"true" type:"Repeated"`
	AddressList      []*string                                 `json:"AddressList,omitempty" xml:"AddressList,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAddressBookResponseAcls) String() string {
	return tea.Prettify(s)
}

func (s DescribeAddressBookResponseAcls) GoString() string {
	return s.String()
}

func (s *DescribeAddressBookResponseAcls) SetGroupName(v string) *DescribeAddressBookResponseAcls {
	s.GroupName = &v
	return s
}

func (s *DescribeAddressBookResponseAcls) SetGroupUuid(v string) *DescribeAddressBookResponseAcls {
	s.GroupUuid = &v
	return s
}

func (s *DescribeAddressBookResponseAcls) SetReferenceCount(v int) *DescribeAddressBookResponseAcls {
	s.ReferenceCount = &v
	return s
}

func (s *DescribeAddressBookResponseAcls) SetDescription(v string) *DescribeAddressBookResponseAcls {
	s.Description = &v
	return s
}

func (s *DescribeAddressBookResponseAcls) SetGlobal(v int) *DescribeAddressBookResponseAcls {
	s.Global = &v
	return s
}

func (s *DescribeAddressBookResponseAcls) SetGroupType(v string) *DescribeAddressBookResponseAcls {
	s.GroupType = &v
	return s
}

func (s *DescribeAddressBookResponseAcls) SetAutoAddTagEcs(v int) *DescribeAddressBookResponseAcls {
	s.AutoAddTagEcs = &v
	return s
}

func (s *DescribeAddressBookResponseAcls) SetAddressListCount(v int) *DescribeAddressBookResponseAcls {
	s.AddressListCount = &v
	return s
}

func (s *DescribeAddressBookResponseAcls) SetTagRelation(v string) *DescribeAddressBookResponseAcls {
	s.TagRelation = &v
	return s
}

func (s *DescribeAddressBookResponseAcls) SetTagList(v []*DescribeAddressBookResponseAclsTagList) *DescribeAddressBookResponseAcls {
	s.TagList = v
	return s
}

func (s *DescribeAddressBookResponseAcls) SetAddressList(v []*string) *DescribeAddressBookResponseAcls {
	s.AddressList = v
	return s
}

type DescribeAddressBookResponseAclsTagList struct {
	TagKey   *string `json:"TagKey,omitempty" xml:"TagKey,omitempty" require:"true"`
	TagValue *string `json:"TagValue,omitempty" xml:"TagValue,omitempty" require:"true"`
}

func (s DescribeAddressBookResponseAclsTagList) String() string {
	return tea.Prettify(s)
}

func (s DescribeAddressBookResponseAclsTagList) GoString() string {
	return s.String()
}

func (s *DescribeAddressBookResponseAclsTagList) SetTagKey(v string) *DescribeAddressBookResponseAclsTagList {
	s.TagKey = &v
	return s
}

func (s *DescribeAddressBookResponseAclsTagList) SetTagValue(v string) *DescribeAddressBookResponseAclsTagList {
	s.TagValue = &v
	return s
}

type DeleteControlPolicyRequest struct {
	SourceIp  *string `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang      *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	AclUuid   *string `json:"AclUuid,omitempty" xml:"AclUuid,omitempty" require:"true"`
	Direction *string `json:"Direction,omitempty" xml:"Direction,omitempty" require:"true"`
}

func (s DeleteControlPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteControlPolicyRequest) GoString() string {
	return s.String()
}

func (s *DeleteControlPolicyRequest) SetSourceIp(v string) *DeleteControlPolicyRequest {
	s.SourceIp = &v
	return s
}

func (s *DeleteControlPolicyRequest) SetLang(v string) *DeleteControlPolicyRequest {
	s.Lang = &v
	return s
}

func (s *DeleteControlPolicyRequest) SetAclUuid(v string) *DeleteControlPolicyRequest {
	s.AclUuid = &v
	return s
}

func (s *DeleteControlPolicyRequest) SetDirection(v string) *DeleteControlPolicyRequest {
	s.Direction = &v
	return s
}

type DeleteControlPolicyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteControlPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteControlPolicyResponse) GoString() string {
	return s.String()
}

func (s *DeleteControlPolicyResponse) SetRequestId(v string) *DeleteControlPolicyResponse {
	s.RequestId = &v
	return s
}

type DeleteAddressBookRequest struct {
	SourceIp  *string `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang      *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	GroupUuid *string `json:"GroupUuid,omitempty" xml:"GroupUuid,omitempty" require:"true"`
}

func (s DeleteAddressBookRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAddressBookRequest) GoString() string {
	return s.String()
}

func (s *DeleteAddressBookRequest) SetSourceIp(v string) *DeleteAddressBookRequest {
	s.SourceIp = &v
	return s
}

func (s *DeleteAddressBookRequest) SetLang(v string) *DeleteAddressBookRequest {
	s.Lang = &v
	return s
}

func (s *DeleteAddressBookRequest) SetGroupUuid(v string) *DeleteAddressBookRequest {
	s.GroupUuid = &v
	return s
}

type DeleteAddressBookResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteAddressBookResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAddressBookResponse) GoString() string {
	return s.String()
}

func (s *DeleteAddressBookResponse) SetRequestId(v string) *DeleteAddressBookResponse {
	s.RequestId = &v
	return s
}

type AddControlPolicyRequest struct {
	SourceIp        *string `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang            *string `json:"Lang,omitempty" xml:"Lang,omitempty"`
	AclAction       *string `json:"AclAction,omitempty" xml:"AclAction,omitempty" require:"true"`
	ApplicationName *string `json:"ApplicationName,omitempty" xml:"ApplicationName,omitempty" require:"true"`
	Description     *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	DestPort        *string `json:"DestPort,omitempty" xml:"DestPort,omitempty"`
	Destination     *string `json:"Destination,omitempty" xml:"Destination,omitempty" require:"true"`
	DestinationType *string `json:"DestinationType,omitempty" xml:"DestinationType,omitempty" require:"true"`
	Direction       *string `json:"Direction,omitempty" xml:"Direction,omitempty" require:"true"`
	Proto           *string `json:"Proto,omitempty" xml:"Proto,omitempty" require:"true"`
	Source          *string `json:"Source,omitempty" xml:"Source,omitempty" require:"true"`
	SourceType      *string `json:"SourceType,omitempty" xml:"SourceType,omitempty" require:"true"`
	NewOrder        *string `json:"NewOrder,omitempty" xml:"NewOrder,omitempty" require:"true"`
	DestPortType    *string `json:"DestPortType,omitempty" xml:"DestPortType,omitempty"`
	DestPortGroup   *string `json:"DestPortGroup,omitempty" xml:"DestPortGroup,omitempty"`
	Release         *string `json:"Release,omitempty" xml:"Release,omitempty"`
}

func (s AddControlPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s AddControlPolicyRequest) GoString() string {
	return s.String()
}

func (s *AddControlPolicyRequest) SetSourceIp(v string) *AddControlPolicyRequest {
	s.SourceIp = &v
	return s
}

func (s *AddControlPolicyRequest) SetLang(v string) *AddControlPolicyRequest {
	s.Lang = &v
	return s
}

func (s *AddControlPolicyRequest) SetAclAction(v string) *AddControlPolicyRequest {
	s.AclAction = &v
	return s
}

func (s *AddControlPolicyRequest) SetApplicationName(v string) *AddControlPolicyRequest {
	s.ApplicationName = &v
	return s
}

func (s *AddControlPolicyRequest) SetDescription(v string) *AddControlPolicyRequest {
	s.Description = &v
	return s
}

func (s *AddControlPolicyRequest) SetDestPort(v string) *AddControlPolicyRequest {
	s.DestPort = &v
	return s
}

func (s *AddControlPolicyRequest) SetDestination(v string) *AddControlPolicyRequest {
	s.Destination = &v
	return s
}

func (s *AddControlPolicyRequest) SetDestinationType(v string) *AddControlPolicyRequest {
	s.DestinationType = &v
	return s
}

func (s *AddControlPolicyRequest) SetDirection(v string) *AddControlPolicyRequest {
	s.Direction = &v
	return s
}

func (s *AddControlPolicyRequest) SetProto(v string) *AddControlPolicyRequest {
	s.Proto = &v
	return s
}

func (s *AddControlPolicyRequest) SetSource(v string) *AddControlPolicyRequest {
	s.Source = &v
	return s
}

func (s *AddControlPolicyRequest) SetSourceType(v string) *AddControlPolicyRequest {
	s.SourceType = &v
	return s
}

func (s *AddControlPolicyRequest) SetNewOrder(v string) *AddControlPolicyRequest {
	s.NewOrder = &v
	return s
}

func (s *AddControlPolicyRequest) SetDestPortType(v string) *AddControlPolicyRequest {
	s.DestPortType = &v
	return s
}

func (s *AddControlPolicyRequest) SetDestPortGroup(v string) *AddControlPolicyRequest {
	s.DestPortGroup = &v
	return s
}

func (s *AddControlPolicyRequest) SetRelease(v string) *AddControlPolicyRequest {
	s.Release = &v
	return s
}

type AddControlPolicyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AclUuid   *string `json:"AclUuid,omitempty" xml:"AclUuid,omitempty" require:"true"`
}

func (s AddControlPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s AddControlPolicyResponse) GoString() string {
	return s.String()
}

func (s *AddControlPolicyResponse) SetRequestId(v string) *AddControlPolicyResponse {
	s.RequestId = &v
	return s
}

func (s *AddControlPolicyResponse) SetAclUuid(v string) *AddControlPolicyResponse {
	s.AclUuid = &v
	return s
}

type AddAddressBookRequest struct {
	SourceIp      *string                         `json:"SourceIp,omitempty" xml:"SourceIp,omitempty"`
	Lang          *string                         `json:"Lang,omitempty" xml:"Lang,omitempty"`
	AddressList   *string                         `json:"AddressList,omitempty" xml:"AddressList,omitempty"`
	Description   *string                         `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	GroupName     *string                         `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	GroupType     *string                         `json:"GroupType,omitempty" xml:"GroupType,omitempty" require:"true"`
	AutoAddTagEcs *string                         `json:"AutoAddTagEcs,omitempty" xml:"AutoAddTagEcs,omitempty"`
	TagRelation   *string                         `json:"TagRelation,omitempty" xml:"TagRelation,omitempty"`
	TagList       []*AddAddressBookRequestTagList `json:"TagList,omitempty" xml:"TagList,omitempty" type:"Repeated"`
}

func (s AddAddressBookRequest) String() string {
	return tea.Prettify(s)
}

func (s AddAddressBookRequest) GoString() string {
	return s.String()
}

func (s *AddAddressBookRequest) SetSourceIp(v string) *AddAddressBookRequest {
	s.SourceIp = &v
	return s
}

func (s *AddAddressBookRequest) SetLang(v string) *AddAddressBookRequest {
	s.Lang = &v
	return s
}

func (s *AddAddressBookRequest) SetAddressList(v string) *AddAddressBookRequest {
	s.AddressList = &v
	return s
}

func (s *AddAddressBookRequest) SetDescription(v string) *AddAddressBookRequest {
	s.Description = &v
	return s
}

func (s *AddAddressBookRequest) SetGroupName(v string) *AddAddressBookRequest {
	s.GroupName = &v
	return s
}

func (s *AddAddressBookRequest) SetGroupType(v string) *AddAddressBookRequest {
	s.GroupType = &v
	return s
}

func (s *AddAddressBookRequest) SetAutoAddTagEcs(v string) *AddAddressBookRequest {
	s.AutoAddTagEcs = &v
	return s
}

func (s *AddAddressBookRequest) SetTagRelation(v string) *AddAddressBookRequest {
	s.TagRelation = &v
	return s
}

func (s *AddAddressBookRequest) SetTagList(v []*AddAddressBookRequestTagList) *AddAddressBookRequest {
	s.TagList = v
	return s
}

type AddAddressBookRequestTagList struct {
	TagKey   *string `json:"TagKey,omitempty" xml:"TagKey,omitempty" require:"true"`
	TagValue *string `json:"TagValue,omitempty" xml:"TagValue,omitempty" require:"true"`
}

func (s AddAddressBookRequestTagList) String() string {
	return tea.Prettify(s)
}

func (s AddAddressBookRequestTagList) GoString() string {
	return s.String()
}

func (s *AddAddressBookRequestTagList) SetTagKey(v string) *AddAddressBookRequestTagList {
	s.TagKey = &v
	return s
}

func (s *AddAddressBookRequestTagList) SetTagValue(v string) *AddAddressBookRequestTagList {
	s.TagValue = &v
	return s
}

type AddAddressBookResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	GroupUuid *string `json:"GroupUuid,omitempty" xml:"GroupUuid,omitempty" require:"true"`
}

func (s AddAddressBookResponse) String() string {
	return tea.Prettify(s)
}

func (s AddAddressBookResponse) GoString() string {
	return s.String()
}

func (s *AddAddressBookResponse) SetRequestId(v string) *AddAddressBookResponse {
	s.RequestId = &v
	return s
}

func (s *AddAddressBookResponse) SetGroupUuid(v string) *AddAddressBookResponse {
	s.GroupUuid = &v
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
	client.EndpointMap = map[string]*string{
		"ap-southeast-1": tea.String("cloudfw.ap-southeast-1.aliyuncs.com"),
		"cn-hangzhou":    tea.String("cloudfw.cn-hangzhou.aliyuncs.com"),
	}
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("cloudfw"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) ModifyPolicyAdvancedConfigWithOptions(request *ModifyPolicyAdvancedConfigRequest, runtime *util.RuntimeOptions) (_result *ModifyPolicyAdvancedConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyPolicyAdvancedConfigResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyPolicyAdvancedConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyPolicyAdvancedConfig(request *ModifyPolicyAdvancedConfigRequest) (_result *ModifyPolicyAdvancedConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyPolicyAdvancedConfigResponse{}
	_body, _err := client.ModifyPolicyAdvancedConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribePolicyAdvancedConfigWithOptions(request *DescribePolicyAdvancedConfigRequest, runtime *util.RuntimeOptions) (_result *DescribePolicyAdvancedConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribePolicyAdvancedConfigResponse{}
	_body, _err := client.DoRequest(tea.String("DescribePolicyAdvancedConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribePolicyAdvancedConfig(request *DescribePolicyAdvancedConfigRequest) (_result *DescribePolicyAdvancedConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribePolicyAdvancedConfigResponse{}
	_body, _err := client.DescribePolicyAdvancedConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDomainResolveWithOptions(request *DescribeDomainResolveRequest, runtime *util.RuntimeOptions) (_result *DescribeDomainResolveResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDomainResolveResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDomainResolve"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDomainResolve(request *DescribeDomainResolveRequest) (_result *DescribeDomainResolveResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDomainResolveResponse{}
	_body, _err := client.DescribeDomainResolveWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVpcFirewallAclGroupListWithOptions(request *DescribeVpcFirewallAclGroupListRequest, runtime *util.RuntimeOptions) (_result *DescribeVpcFirewallAclGroupListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVpcFirewallAclGroupListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVpcFirewallAclGroupList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVpcFirewallAclGroupList(request *DescribeVpcFirewallAclGroupListRequest) (_result *DescribeVpcFirewallAclGroupListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVpcFirewallAclGroupListResponse{}
	_body, _err := client.DescribeVpcFirewallAclGroupListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ResetVpcFirewallRuleHitCountWithOptions(request *ResetVpcFirewallRuleHitCountRequest, runtime *util.RuntimeOptions) (_result *ResetVpcFirewallRuleHitCountResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ResetVpcFirewallRuleHitCountResponse{}
	_body, _err := client.DoRequest(tea.String("ResetVpcFirewallRuleHitCount"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ResetVpcFirewallRuleHitCount(request *ResetVpcFirewallRuleHitCountRequest) (_result *ResetVpcFirewallRuleHitCountResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ResetVpcFirewallRuleHitCountResponse{}
	_body, _err := client.ResetVpcFirewallRuleHitCountWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyVpcFirewallControlPolicyPositionWithOptions(request *ModifyVpcFirewallControlPolicyPositionRequest, runtime *util.RuntimeOptions) (_result *ModifyVpcFirewallControlPolicyPositionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyVpcFirewallControlPolicyPositionResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyVpcFirewallControlPolicyPosition"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyVpcFirewallControlPolicyPosition(request *ModifyVpcFirewallControlPolicyPositionRequest) (_result *ModifyVpcFirewallControlPolicyPositionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyVpcFirewallControlPolicyPositionResponse{}
	_body, _err := client.ModifyVpcFirewallControlPolicyPositionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyVpcFirewallControlPolicyWithOptions(request *ModifyVpcFirewallControlPolicyRequest, runtime *util.RuntimeOptions) (_result *ModifyVpcFirewallControlPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyVpcFirewallControlPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyVpcFirewallControlPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyVpcFirewallControlPolicy(request *ModifyVpcFirewallControlPolicyRequest) (_result *ModifyVpcFirewallControlPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyVpcFirewallControlPolicyResponse{}
	_body, _err := client.ModifyVpcFirewallControlPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVpcFirewallPolicyPriorUsedWithOptions(request *DescribeVpcFirewallPolicyPriorUsedRequest, runtime *util.RuntimeOptions) (_result *DescribeVpcFirewallPolicyPriorUsedResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVpcFirewallPolicyPriorUsedResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVpcFirewallPolicyPriorUsed"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVpcFirewallPolicyPriorUsed(request *DescribeVpcFirewallPolicyPriorUsedRequest) (_result *DescribeVpcFirewallPolicyPriorUsedResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVpcFirewallPolicyPriorUsedResponse{}
	_body, _err := client.DescribeVpcFirewallPolicyPriorUsedWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVpcFirewallControlPolicyWithOptions(request *DescribeVpcFirewallControlPolicyRequest, runtime *util.RuntimeOptions) (_result *DescribeVpcFirewallControlPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVpcFirewallControlPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVpcFirewallControlPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVpcFirewallControlPolicy(request *DescribeVpcFirewallControlPolicyRequest) (_result *DescribeVpcFirewallControlPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVpcFirewallControlPolicyResponse{}
	_body, _err := client.DescribeVpcFirewallControlPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteVpcFirewallControlPolicyWithOptions(request *DeleteVpcFirewallControlPolicyRequest, runtime *util.RuntimeOptions) (_result *DeleteVpcFirewallControlPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteVpcFirewallControlPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteVpcFirewallControlPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteVpcFirewallControlPolicy(request *DeleteVpcFirewallControlPolicyRequest) (_result *DeleteVpcFirewallControlPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteVpcFirewallControlPolicyResponse{}
	_body, _err := client.DeleteVpcFirewallControlPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateVpcFirewallControlPolicyWithOptions(request *CreateVpcFirewallControlPolicyRequest, runtime *util.RuntimeOptions) (_result *CreateVpcFirewallControlPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateVpcFirewallControlPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("CreateVpcFirewallControlPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateVpcFirewallControlPolicy(request *CreateVpcFirewallControlPolicyRequest) (_result *CreateVpcFirewallControlPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateVpcFirewallControlPolicyResponse{}
	_body, _err := client.CreateVpcFirewallControlPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutEnableFwSwitchWithOptions(request *PutEnableFwSwitchRequest, runtime *util.RuntimeOptions) (_result *PutEnableFwSwitchResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutEnableFwSwitchResponse{}
	_body, _err := client.DoRequest(tea.String("PutEnableFwSwitch"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutEnableFwSwitch(request *PutEnableFwSwitchRequest) (_result *PutEnableFwSwitchResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutEnableFwSwitchResponse{}
	_body, _err := client.PutEnableFwSwitchWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutEnableAllFwSwitchWithOptions(request *PutEnableAllFwSwitchRequest, runtime *util.RuntimeOptions) (_result *PutEnableAllFwSwitchResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutEnableAllFwSwitchResponse{}
	_body, _err := client.DoRequest(tea.String("PutEnableAllFwSwitch"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutEnableAllFwSwitch(request *PutEnableAllFwSwitchRequest) (_result *PutEnableAllFwSwitchResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutEnableAllFwSwitchResponse{}
	_body, _err := client.PutEnableAllFwSwitchWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutDisableFwSwitchWithOptions(request *PutDisableFwSwitchRequest, runtime *util.RuntimeOptions) (_result *PutDisableFwSwitchResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutDisableFwSwitchResponse{}
	_body, _err := client.DoRequest(tea.String("PutDisableFwSwitch"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutDisableFwSwitch(request *PutDisableFwSwitchRequest) (_result *PutDisableFwSwitchResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutDisableFwSwitchResponse{}
	_body, _err := client.PutDisableFwSwitchWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PutDisableAllFwSwitchWithOptions(request *PutDisableAllFwSwitchRequest, runtime *util.RuntimeOptions) (_result *PutDisableAllFwSwitchResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PutDisableAllFwSwitchResponse{}
	_body, _err := client.DoRequest(tea.String("PutDisableAllFwSwitch"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PutDisableAllFwSwitch(request *PutDisableAllFwSwitchRequest) (_result *PutDisableAllFwSwitchResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PutDisableAllFwSwitchResponse{}
	_body, _err := client.PutDisableAllFwSwitchWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyControlPolicyPositionWithOptions(request *ModifyControlPolicyPositionRequest, runtime *util.RuntimeOptions) (_result *ModifyControlPolicyPositionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyControlPolicyPositionResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyControlPolicyPosition"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyControlPolicyPosition(request *ModifyControlPolicyPositionRequest) (_result *ModifyControlPolicyPositionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyControlPolicyPositionResponse{}
	_body, _err := client.ModifyControlPolicyPositionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyControlPolicyWithOptions(request *ModifyControlPolicyRequest, runtime *util.RuntimeOptions) (_result *ModifyControlPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyControlPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyControlPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyControlPolicy(request *ModifyControlPolicyRequest) (_result *ModifyControlPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyControlPolicyResponse{}
	_body, _err := client.ModifyControlPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyAddressBookWithOptions(request *ModifyAddressBookRequest, runtime *util.RuntimeOptions) (_result *ModifyAddressBookResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyAddressBookResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyAddressBook"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyAddressBook(request *ModifyAddressBookRequest) (_result *ModifyAddressBookResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyAddressBookResponse{}
	_body, _err := client.ModifyAddressBookWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribePolicyPriorUsedWithOptions(request *DescribePolicyPriorUsedRequest, runtime *util.RuntimeOptions) (_result *DescribePolicyPriorUsedResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribePolicyPriorUsedResponse{}
	_body, _err := client.DoRequest(tea.String("DescribePolicyPriorUsed"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribePolicyPriorUsed(request *DescribePolicyPriorUsedRequest) (_result *DescribePolicyPriorUsedResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribePolicyPriorUsedResponse{}
	_body, _err := client.DescribePolicyPriorUsedWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeControlPolicyWithOptions(request *DescribeControlPolicyRequest, runtime *util.RuntimeOptions) (_result *DescribeControlPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeControlPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeControlPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeControlPolicy(request *DescribeControlPolicyRequest) (_result *DescribeControlPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeControlPolicyResponse{}
	_body, _err := client.DescribeControlPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAddressBookWithOptions(request *DescribeAddressBookRequest, runtime *util.RuntimeOptions) (_result *DescribeAddressBookResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAddressBookResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAddressBook"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAddressBook(request *DescribeAddressBookRequest) (_result *DescribeAddressBookResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAddressBookResponse{}
	_body, _err := client.DescribeAddressBookWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteControlPolicyWithOptions(request *DeleteControlPolicyRequest, runtime *util.RuntimeOptions) (_result *DeleteControlPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteControlPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteControlPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteControlPolicy(request *DeleteControlPolicyRequest) (_result *DeleteControlPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteControlPolicyResponse{}
	_body, _err := client.DeleteControlPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAddressBookWithOptions(request *DeleteAddressBookRequest, runtime *util.RuntimeOptions) (_result *DeleteAddressBookResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAddressBookResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteAddressBook"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteAddressBook(request *DeleteAddressBookRequest) (_result *DeleteAddressBookResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAddressBookResponse{}
	_body, _err := client.DeleteAddressBookWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddControlPolicyWithOptions(request *AddControlPolicyRequest, runtime *util.RuntimeOptions) (_result *AddControlPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddControlPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("AddControlPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddControlPolicy(request *AddControlPolicyRequest) (_result *AddControlPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddControlPolicyResponse{}
	_body, _err := client.AddControlPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddAddressBookWithOptions(request *AddAddressBookRequest, runtime *util.RuntimeOptions) (_result *AddAddressBookResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddAddressBookResponse{}
	_body, _err := client.DoRequest(tea.String("AddAddressBook"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-12-07"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddAddressBook(request *AddAddressBookRequest) (_result *AddAddressBookResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddAddressBookResponse{}
	_body, _err := client.AddAddressBookWithOptions(request, runtime)
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
