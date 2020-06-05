// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type GetAccessKeyLastUsedRequest struct {
	UserName        *string `json:"UserName" xml:"UserName"`
	UserAccessKeyId *string `json:"UserAccessKeyId" xml:"UserAccessKeyId"`
}

func (s GetAccessKeyLastUsedRequest) String() string {
	return tea.Prettify(s)
}

func (s GetAccessKeyLastUsedRequest) GoString() string {
	return s.String()
}

func (s *GetAccessKeyLastUsedRequest) SetUserName(v string) *GetAccessKeyLastUsedRequest {
	s.UserName = &v
	return s
}

func (s *GetAccessKeyLastUsedRequest) SetUserAccessKeyId(v string) *GetAccessKeyLastUsedRequest {
	s.UserAccessKeyId = &v
	return s
}

type GetAccessKeyLastUsedResponse struct {
	RequestId         *string                                        `json:"RequestId" xml:"RequestId" require:"true"`
	AccessKeyLastUsed *GetAccessKeyLastUsedResponseAccessKeyLastUsed `json:"AccessKeyLastUsed" xml:"AccessKeyLastUsed" require:"true" type:"Struct"`
}

func (s GetAccessKeyLastUsedResponse) String() string {
	return tea.Prettify(s)
}

func (s GetAccessKeyLastUsedResponse) GoString() string {
	return s.String()
}

func (s *GetAccessKeyLastUsedResponse) SetRequestId(v string) *GetAccessKeyLastUsedResponse {
	s.RequestId = &v
	return s
}

func (s *GetAccessKeyLastUsedResponse) SetAccessKeyLastUsed(v *GetAccessKeyLastUsedResponseAccessKeyLastUsed) *GetAccessKeyLastUsedResponse {
	s.AccessKeyLastUsed = v
	return s
}

type GetAccessKeyLastUsedResponseAccessKeyLastUsed struct {
	LastUsedDate *string `json:"LastUsedDate" xml:"LastUsedDate" require:"true"`
}

func (s GetAccessKeyLastUsedResponseAccessKeyLastUsed) String() string {
	return tea.Prettify(s)
}

func (s GetAccessKeyLastUsedResponseAccessKeyLastUsed) GoString() string {
	return s.String()
}

func (s *GetAccessKeyLastUsedResponseAccessKeyLastUsed) SetLastUsedDate(v string) *GetAccessKeyLastUsedResponseAccessKeyLastUsed {
	s.LastUsedDate = &v
	return s
}

type ChangePasswordRequest struct {
	OldPassword *string `json:"OldPassword" xml:"OldPassword"`
	NewPassword *string `json:"NewPassword" xml:"NewPassword"`
}

func (s ChangePasswordRequest) String() string {
	return tea.Prettify(s)
}

func (s ChangePasswordRequest) GoString() string {
	return s.String()
}

func (s *ChangePasswordRequest) SetOldPassword(v string) *ChangePasswordRequest {
	s.OldPassword = &v
	return s
}

func (s *ChangePasswordRequest) SetNewPassword(v string) *ChangePasswordRequest {
	s.NewPassword = &v
	return s
}

type ChangePasswordResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s ChangePasswordResponse) String() string {
	return tea.Prettify(s)
}

func (s ChangePasswordResponse) GoString() string {
	return s.String()
}

func (s *ChangePasswordResponse) SetRequestId(v string) *ChangePasswordResponse {
	s.RequestId = &v
	return s
}

type UpdateRoleRequest struct {
	RoleName                    *string `json:"RoleName" xml:"RoleName"`
	NewAssumeRolePolicyDocument *string `json:"NewAssumeRolePolicyDocument" xml:"NewAssumeRolePolicyDocument"`
	NewMaxSessionDuration       *int64  `json:"NewMaxSessionDuration" xml:"NewMaxSessionDuration"`
}

func (s UpdateRoleRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateRoleRequest) GoString() string {
	return s.String()
}

func (s *UpdateRoleRequest) SetRoleName(v string) *UpdateRoleRequest {
	s.RoleName = &v
	return s
}

func (s *UpdateRoleRequest) SetNewAssumeRolePolicyDocument(v string) *UpdateRoleRequest {
	s.NewAssumeRolePolicyDocument = &v
	return s
}

func (s *UpdateRoleRequest) SetNewMaxSessionDuration(v int64) *UpdateRoleRequest {
	s.NewMaxSessionDuration = &v
	return s
}

type UpdateRoleResponse struct {
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Role      *UpdateRoleResponseRole `json:"Role" xml:"Role" require:"true" type:"Struct"`
}

func (s UpdateRoleResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateRoleResponse) GoString() string {
	return s.String()
}

func (s *UpdateRoleResponse) SetRequestId(v string) *UpdateRoleResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateRoleResponse) SetRole(v *UpdateRoleResponseRole) *UpdateRoleResponse {
	s.Role = v
	return s
}

type UpdateRoleResponseRole struct {
	RoleId                   *string `json:"RoleId" xml:"RoleId" require:"true"`
	RoleName                 *string `json:"RoleName" xml:"RoleName" require:"true"`
	Arn                      *string `json:"Arn" xml:"Arn" require:"true"`
	Description              *string `json:"Description" xml:"Description" require:"true"`
	AssumeRolePolicyDocument *string `json:"AssumeRolePolicyDocument" xml:"AssumeRolePolicyDocument" require:"true"`
	CreateDate               *string `json:"CreateDate" xml:"CreateDate" require:"true"`
	UpdateDate               *string `json:"UpdateDate" xml:"UpdateDate" require:"true"`
	MaxSessionDuration       *int64  `json:"MaxSessionDuration" xml:"MaxSessionDuration" require:"true"`
}

func (s UpdateRoleResponseRole) String() string {
	return tea.Prettify(s)
}

func (s UpdateRoleResponseRole) GoString() string {
	return s.String()
}

func (s *UpdateRoleResponseRole) SetRoleId(v string) *UpdateRoleResponseRole {
	s.RoleId = &v
	return s
}

func (s *UpdateRoleResponseRole) SetRoleName(v string) *UpdateRoleResponseRole {
	s.RoleName = &v
	return s
}

func (s *UpdateRoleResponseRole) SetArn(v string) *UpdateRoleResponseRole {
	s.Arn = &v
	return s
}

func (s *UpdateRoleResponseRole) SetDescription(v string) *UpdateRoleResponseRole {
	s.Description = &v
	return s
}

func (s *UpdateRoleResponseRole) SetAssumeRolePolicyDocument(v string) *UpdateRoleResponseRole {
	s.AssumeRolePolicyDocument = &v
	return s
}

func (s *UpdateRoleResponseRole) SetCreateDate(v string) *UpdateRoleResponseRole {
	s.CreateDate = &v
	return s
}

func (s *UpdateRoleResponseRole) SetUpdateDate(v string) *UpdateRoleResponseRole {
	s.UpdateDate = &v
	return s
}

func (s *UpdateRoleResponseRole) SetMaxSessionDuration(v int64) *UpdateRoleResponseRole {
	s.MaxSessionDuration = &v
	return s
}

type SetSecurityPreferenceRequest struct {
	EnableSaveMFATicket         *bool   `json:"EnableSaveMFATicket" xml:"EnableSaveMFATicket"`
	AllowUserToChangePassword   *bool   `json:"AllowUserToChangePassword" xml:"AllowUserToChangePassword"`
	AllowUserToManageAccessKeys *bool   `json:"AllowUserToManageAccessKeys" xml:"AllowUserToManageAccessKeys"`
	AllowUserToManagePublicKeys *bool   `json:"AllowUserToManagePublicKeys" xml:"AllowUserToManagePublicKeys"`
	AllowUserToManageMFADevices *bool   `json:"AllowUserToManageMFADevices" xml:"AllowUserToManageMFADevices"`
	LoginSessionDuration        *int    `json:"LoginSessionDuration" xml:"LoginSessionDuration"`
	LoginNetworkMasks           *string `json:"LoginNetworkMasks" xml:"LoginNetworkMasks"`
}

func (s SetSecurityPreferenceRequest) String() string {
	return tea.Prettify(s)
}

func (s SetSecurityPreferenceRequest) GoString() string {
	return s.String()
}

func (s *SetSecurityPreferenceRequest) SetEnableSaveMFATicket(v bool) *SetSecurityPreferenceRequest {
	s.EnableSaveMFATicket = &v
	return s
}

func (s *SetSecurityPreferenceRequest) SetAllowUserToChangePassword(v bool) *SetSecurityPreferenceRequest {
	s.AllowUserToChangePassword = &v
	return s
}

func (s *SetSecurityPreferenceRequest) SetAllowUserToManageAccessKeys(v bool) *SetSecurityPreferenceRequest {
	s.AllowUserToManageAccessKeys = &v
	return s
}

func (s *SetSecurityPreferenceRequest) SetAllowUserToManagePublicKeys(v bool) *SetSecurityPreferenceRequest {
	s.AllowUserToManagePublicKeys = &v
	return s
}

func (s *SetSecurityPreferenceRequest) SetAllowUserToManageMFADevices(v bool) *SetSecurityPreferenceRequest {
	s.AllowUserToManageMFADevices = &v
	return s
}

func (s *SetSecurityPreferenceRequest) SetLoginSessionDuration(v int) *SetSecurityPreferenceRequest {
	s.LoginSessionDuration = &v
	return s
}

func (s *SetSecurityPreferenceRequest) SetLoginNetworkMasks(v string) *SetSecurityPreferenceRequest {
	s.LoginNetworkMasks = &v
	return s
}

type SetSecurityPreferenceResponse struct {
	RequestId          *string                                          `json:"RequestId" xml:"RequestId" require:"true"`
	SecurityPreference *SetSecurityPreferenceResponseSecurityPreference `json:"SecurityPreference" xml:"SecurityPreference" require:"true" type:"Struct"`
}

func (s SetSecurityPreferenceResponse) String() string {
	return tea.Prettify(s)
}

func (s SetSecurityPreferenceResponse) GoString() string {
	return s.String()
}

func (s *SetSecurityPreferenceResponse) SetRequestId(v string) *SetSecurityPreferenceResponse {
	s.RequestId = &v
	return s
}

func (s *SetSecurityPreferenceResponse) SetSecurityPreference(v *SetSecurityPreferenceResponseSecurityPreference) *SetSecurityPreferenceResponse {
	s.SecurityPreference = v
	return s
}

type SetSecurityPreferenceResponseSecurityPreference struct {
	LoginProfilePreference *SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference `json:"LoginProfilePreference" xml:"LoginProfilePreference" require:"true" type:"Struct"`
	AccessKeyPreference    *SetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference    `json:"AccessKeyPreference" xml:"AccessKeyPreference" require:"true" type:"Struct"`
	PublicKeyPreference    *SetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference    `json:"PublicKeyPreference" xml:"PublicKeyPreference" require:"true" type:"Struct"`
	MFAPreference          *SetSecurityPreferenceResponseSecurityPreferenceMFAPreference          `json:"MFAPreference" xml:"MFAPreference" require:"true" type:"Struct"`
}

func (s SetSecurityPreferenceResponseSecurityPreference) String() string {
	return tea.Prettify(s)
}

func (s SetSecurityPreferenceResponseSecurityPreference) GoString() string {
	return s.String()
}

func (s *SetSecurityPreferenceResponseSecurityPreference) SetLoginProfilePreference(v *SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference) *SetSecurityPreferenceResponseSecurityPreference {
	s.LoginProfilePreference = v
	return s
}

func (s *SetSecurityPreferenceResponseSecurityPreference) SetAccessKeyPreference(v *SetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference) *SetSecurityPreferenceResponseSecurityPreference {
	s.AccessKeyPreference = v
	return s
}

func (s *SetSecurityPreferenceResponseSecurityPreference) SetPublicKeyPreference(v *SetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference) *SetSecurityPreferenceResponseSecurityPreference {
	s.PublicKeyPreference = v
	return s
}

func (s *SetSecurityPreferenceResponseSecurityPreference) SetMFAPreference(v *SetSecurityPreferenceResponseSecurityPreferenceMFAPreference) *SetSecurityPreferenceResponseSecurityPreference {
	s.MFAPreference = v
	return s
}

type SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference struct {
	EnableSaveMFATicket       *bool   `json:"EnableSaveMFATicket" xml:"EnableSaveMFATicket" require:"true"`
	AllowUserToChangePassword *bool   `json:"AllowUserToChangePassword" xml:"AllowUserToChangePassword" require:"true"`
	LoginSessionDuration      *int    `json:"LoginSessionDuration" xml:"LoginSessionDuration" require:"true"`
	LoginNetworkMasks         *string `json:"LoginNetworkMasks" xml:"LoginNetworkMasks" require:"true"`
}

func (s SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference) String() string {
	return tea.Prettify(s)
}

func (s SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference) GoString() string {
	return s.String()
}

func (s *SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference) SetEnableSaveMFATicket(v bool) *SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference {
	s.EnableSaveMFATicket = &v
	return s
}

func (s *SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference) SetAllowUserToChangePassword(v bool) *SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference {
	s.AllowUserToChangePassword = &v
	return s
}

func (s *SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference) SetLoginSessionDuration(v int) *SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference {
	s.LoginSessionDuration = &v
	return s
}

func (s *SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference) SetLoginNetworkMasks(v string) *SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference {
	s.LoginNetworkMasks = &v
	return s
}

type SetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference struct {
	AllowUserToManageAccessKeys *bool `json:"AllowUserToManageAccessKeys" xml:"AllowUserToManageAccessKeys" require:"true"`
}

func (s SetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference) String() string {
	return tea.Prettify(s)
}

func (s SetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference) GoString() string {
	return s.String()
}

func (s *SetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference) SetAllowUserToManageAccessKeys(v bool) *SetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference {
	s.AllowUserToManageAccessKeys = &v
	return s
}

type SetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference struct {
	AllowUserToManagePublicKeys *bool `json:"AllowUserToManagePublicKeys" xml:"AllowUserToManagePublicKeys" require:"true"`
}

func (s SetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference) String() string {
	return tea.Prettify(s)
}

func (s SetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference) GoString() string {
	return s.String()
}

func (s *SetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference) SetAllowUserToManagePublicKeys(v bool) *SetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference {
	s.AllowUserToManagePublicKeys = &v
	return s
}

type SetSecurityPreferenceResponseSecurityPreferenceMFAPreference struct {
	AllowUserToManageMFADevices *bool `json:"AllowUserToManageMFADevices" xml:"AllowUserToManageMFADevices" require:"true"`
}

func (s SetSecurityPreferenceResponseSecurityPreferenceMFAPreference) String() string {
	return tea.Prettify(s)
}

func (s SetSecurityPreferenceResponseSecurityPreferenceMFAPreference) GoString() string {
	return s.String()
}

func (s *SetSecurityPreferenceResponseSecurityPreferenceMFAPreference) SetAllowUserToManageMFADevices(v bool) *SetSecurityPreferenceResponseSecurityPreferenceMFAPreference {
	s.AllowUserToManageMFADevices = &v
	return s
}

type ListRolesRequest struct {
	Marker   *string `json:"Marker" xml:"Marker"`
	MaxItems *int    `json:"MaxItems" xml:"MaxItems"`
}

func (s ListRolesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListRolesRequest) GoString() string {
	return s.String()
}

func (s *ListRolesRequest) SetMarker(v string) *ListRolesRequest {
	s.Marker = &v
	return s
}

func (s *ListRolesRequest) SetMaxItems(v int) *ListRolesRequest {
	s.MaxItems = &v
	return s
}

type ListRolesResponse struct {
	RequestId   *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	IsTruncated *bool                   `json:"IsTruncated" xml:"IsTruncated" require:"true"`
	Marker      *string                 `json:"Marker" xml:"Marker" require:"true"`
	Roles       *ListRolesResponseRoles `json:"Roles" xml:"Roles" require:"true" type:"Struct"`
}

func (s ListRolesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListRolesResponse) GoString() string {
	return s.String()
}

func (s *ListRolesResponse) SetRequestId(v string) *ListRolesResponse {
	s.RequestId = &v
	return s
}

func (s *ListRolesResponse) SetIsTruncated(v bool) *ListRolesResponse {
	s.IsTruncated = &v
	return s
}

func (s *ListRolesResponse) SetMarker(v string) *ListRolesResponse {
	s.Marker = &v
	return s
}

func (s *ListRolesResponse) SetRoles(v *ListRolesResponseRoles) *ListRolesResponse {
	s.Roles = v
	return s
}

type ListRolesResponseRoles struct {
	Role []*ListRolesResponseRolesRole `json:"Role" xml:"Role" require:"true" type:"Repeated"`
}

func (s ListRolesResponseRoles) String() string {
	return tea.Prettify(s)
}

func (s ListRolesResponseRoles) GoString() string {
	return s.String()
}

func (s *ListRolesResponseRoles) SetRole(v []*ListRolesResponseRolesRole) *ListRolesResponseRoles {
	s.Role = v
	return s
}

type ListRolesResponseRolesRole struct {
	RoleId             *string `json:"RoleId" xml:"RoleId" require:"true"`
	RoleName           *string `json:"RoleName" xml:"RoleName" require:"true"`
	Arn                *string `json:"Arn" xml:"Arn" require:"true"`
	Description        *string `json:"Description" xml:"Description" require:"true"`
	CreateDate         *string `json:"CreateDate" xml:"CreateDate" require:"true"`
	UpdateDate         *string `json:"UpdateDate" xml:"UpdateDate" require:"true"`
	MaxSessionDuration *int64  `json:"MaxSessionDuration" xml:"MaxSessionDuration" require:"true"`
}

func (s ListRolesResponseRolesRole) String() string {
	return tea.Prettify(s)
}

func (s ListRolesResponseRolesRole) GoString() string {
	return s.String()
}

func (s *ListRolesResponseRolesRole) SetRoleId(v string) *ListRolesResponseRolesRole {
	s.RoleId = &v
	return s
}

func (s *ListRolesResponseRolesRole) SetRoleName(v string) *ListRolesResponseRolesRole {
	s.RoleName = &v
	return s
}

func (s *ListRolesResponseRolesRole) SetArn(v string) *ListRolesResponseRolesRole {
	s.Arn = &v
	return s
}

func (s *ListRolesResponseRolesRole) SetDescription(v string) *ListRolesResponseRolesRole {
	s.Description = &v
	return s
}

func (s *ListRolesResponseRolesRole) SetCreateDate(v string) *ListRolesResponseRolesRole {
	s.CreateDate = &v
	return s
}

func (s *ListRolesResponseRolesRole) SetUpdateDate(v string) *ListRolesResponseRolesRole {
	s.UpdateDate = &v
	return s
}

func (s *ListRolesResponseRolesRole) SetMaxSessionDuration(v int64) *ListRolesResponseRolesRole {
	s.MaxSessionDuration = &v
	return s
}

type ListPoliciesForRoleRequest struct {
	RoleName *string `json:"RoleName" xml:"RoleName"`
}

func (s ListPoliciesForRoleRequest) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesForRoleRequest) GoString() string {
	return s.String()
}

func (s *ListPoliciesForRoleRequest) SetRoleName(v string) *ListPoliciesForRoleRequest {
	s.RoleName = &v
	return s
}

type ListPoliciesForRoleResponse struct {
	RequestId *string                              `json:"RequestId" xml:"RequestId" require:"true"`
	Policies  *ListPoliciesForRoleResponsePolicies `json:"Policies" xml:"Policies" require:"true" type:"Struct"`
}

func (s ListPoliciesForRoleResponse) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesForRoleResponse) GoString() string {
	return s.String()
}

func (s *ListPoliciesForRoleResponse) SetRequestId(v string) *ListPoliciesForRoleResponse {
	s.RequestId = &v
	return s
}

func (s *ListPoliciesForRoleResponse) SetPolicies(v *ListPoliciesForRoleResponsePolicies) *ListPoliciesForRoleResponse {
	s.Policies = v
	return s
}

type ListPoliciesForRoleResponsePolicies struct {
	Policy []*ListPoliciesForRoleResponsePoliciesPolicy `json:"Policy" xml:"Policy" require:"true" type:"Repeated"`
}

func (s ListPoliciesForRoleResponsePolicies) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesForRoleResponsePolicies) GoString() string {
	return s.String()
}

func (s *ListPoliciesForRoleResponsePolicies) SetPolicy(v []*ListPoliciesForRoleResponsePoliciesPolicy) *ListPoliciesForRoleResponsePolicies {
	s.Policy = v
	return s
}

type ListPoliciesForRoleResponsePoliciesPolicy struct {
	PolicyName     *string `json:"PolicyName" xml:"PolicyName" require:"true"`
	PolicyType     *string `json:"PolicyType" xml:"PolicyType" require:"true"`
	Description    *string `json:"Description" xml:"Description" require:"true"`
	DefaultVersion *string `json:"DefaultVersion" xml:"DefaultVersion" require:"true"`
	AttachDate     *string `json:"AttachDate" xml:"AttachDate" require:"true"`
}

func (s ListPoliciesForRoleResponsePoliciesPolicy) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesForRoleResponsePoliciesPolicy) GoString() string {
	return s.String()
}

func (s *ListPoliciesForRoleResponsePoliciesPolicy) SetPolicyName(v string) *ListPoliciesForRoleResponsePoliciesPolicy {
	s.PolicyName = &v
	return s
}

func (s *ListPoliciesForRoleResponsePoliciesPolicy) SetPolicyType(v string) *ListPoliciesForRoleResponsePoliciesPolicy {
	s.PolicyType = &v
	return s
}

func (s *ListPoliciesForRoleResponsePoliciesPolicy) SetDescription(v string) *ListPoliciesForRoleResponsePoliciesPolicy {
	s.Description = &v
	return s
}

func (s *ListPoliciesForRoleResponsePoliciesPolicy) SetDefaultVersion(v string) *ListPoliciesForRoleResponsePoliciesPolicy {
	s.DefaultVersion = &v
	return s
}

func (s *ListPoliciesForRoleResponsePoliciesPolicy) SetAttachDate(v string) *ListPoliciesForRoleResponsePoliciesPolicy {
	s.AttachDate = &v
	return s
}

type GetSecurityPreferenceRequest struct {
}

func (s GetSecurityPreferenceRequest) String() string {
	return tea.Prettify(s)
}

func (s GetSecurityPreferenceRequest) GoString() string {
	return s.String()
}

type GetSecurityPreferenceResponse struct {
	RequestId          *string                                          `json:"RequestId" xml:"RequestId" require:"true"`
	SecurityPreference *GetSecurityPreferenceResponseSecurityPreference `json:"SecurityPreference" xml:"SecurityPreference" require:"true" type:"Struct"`
}

func (s GetSecurityPreferenceResponse) String() string {
	return tea.Prettify(s)
}

func (s GetSecurityPreferenceResponse) GoString() string {
	return s.String()
}

func (s *GetSecurityPreferenceResponse) SetRequestId(v string) *GetSecurityPreferenceResponse {
	s.RequestId = &v
	return s
}

func (s *GetSecurityPreferenceResponse) SetSecurityPreference(v *GetSecurityPreferenceResponseSecurityPreference) *GetSecurityPreferenceResponse {
	s.SecurityPreference = v
	return s
}

type GetSecurityPreferenceResponseSecurityPreference struct {
	LoginProfilePreference *GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference `json:"LoginProfilePreference" xml:"LoginProfilePreference" require:"true" type:"Struct"`
	AccessKeyPreference    *GetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference    `json:"AccessKeyPreference" xml:"AccessKeyPreference" require:"true" type:"Struct"`
	PublicKeyPreference    *GetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference    `json:"PublicKeyPreference" xml:"PublicKeyPreference" require:"true" type:"Struct"`
	MFAPreference          *GetSecurityPreferenceResponseSecurityPreferenceMFAPreference          `json:"MFAPreference" xml:"MFAPreference" require:"true" type:"Struct"`
}

func (s GetSecurityPreferenceResponseSecurityPreference) String() string {
	return tea.Prettify(s)
}

func (s GetSecurityPreferenceResponseSecurityPreference) GoString() string {
	return s.String()
}

func (s *GetSecurityPreferenceResponseSecurityPreference) SetLoginProfilePreference(v *GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference) *GetSecurityPreferenceResponseSecurityPreference {
	s.LoginProfilePreference = v
	return s
}

func (s *GetSecurityPreferenceResponseSecurityPreference) SetAccessKeyPreference(v *GetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference) *GetSecurityPreferenceResponseSecurityPreference {
	s.AccessKeyPreference = v
	return s
}

func (s *GetSecurityPreferenceResponseSecurityPreference) SetPublicKeyPreference(v *GetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference) *GetSecurityPreferenceResponseSecurityPreference {
	s.PublicKeyPreference = v
	return s
}

func (s *GetSecurityPreferenceResponseSecurityPreference) SetMFAPreference(v *GetSecurityPreferenceResponseSecurityPreferenceMFAPreference) *GetSecurityPreferenceResponseSecurityPreference {
	s.MFAPreference = v
	return s
}

type GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference struct {
	EnableSaveMFATicket       *bool   `json:"EnableSaveMFATicket" xml:"EnableSaveMFATicket" require:"true"`
	AllowUserToChangePassword *bool   `json:"AllowUserToChangePassword" xml:"AllowUserToChangePassword" require:"true"`
	LoginSessionDuration      *int    `json:"LoginSessionDuration" xml:"LoginSessionDuration" require:"true"`
	LoginNetworkMasks         *string `json:"LoginNetworkMasks" xml:"LoginNetworkMasks" require:"true"`
}

func (s GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference) String() string {
	return tea.Prettify(s)
}

func (s GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference) GoString() string {
	return s.String()
}

func (s *GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference) SetEnableSaveMFATicket(v bool) *GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference {
	s.EnableSaveMFATicket = &v
	return s
}

func (s *GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference) SetAllowUserToChangePassword(v bool) *GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference {
	s.AllowUserToChangePassword = &v
	return s
}

func (s *GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference) SetLoginSessionDuration(v int) *GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference {
	s.LoginSessionDuration = &v
	return s
}

func (s *GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference) SetLoginNetworkMasks(v string) *GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference {
	s.LoginNetworkMasks = &v
	return s
}

type GetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference struct {
	AllowUserToManageAccessKeys *bool `json:"AllowUserToManageAccessKeys" xml:"AllowUserToManageAccessKeys" require:"true"`
}

func (s GetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference) String() string {
	return tea.Prettify(s)
}

func (s GetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference) GoString() string {
	return s.String()
}

func (s *GetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference) SetAllowUserToManageAccessKeys(v bool) *GetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference {
	s.AllowUserToManageAccessKeys = &v
	return s
}

type GetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference struct {
	AllowUserToManagePublicKeys *bool `json:"AllowUserToManagePublicKeys" xml:"AllowUserToManagePublicKeys" require:"true"`
}

func (s GetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference) String() string {
	return tea.Prettify(s)
}

func (s GetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference) GoString() string {
	return s.String()
}

func (s *GetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference) SetAllowUserToManagePublicKeys(v bool) *GetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference {
	s.AllowUserToManagePublicKeys = &v
	return s
}

type GetSecurityPreferenceResponseSecurityPreferenceMFAPreference struct {
	AllowUserToManageMFADevices *bool `json:"AllowUserToManageMFADevices" xml:"AllowUserToManageMFADevices" require:"true"`
}

func (s GetSecurityPreferenceResponseSecurityPreferenceMFAPreference) String() string {
	return tea.Prettify(s)
}

func (s GetSecurityPreferenceResponseSecurityPreferenceMFAPreference) GoString() string {
	return s.String()
}

func (s *GetSecurityPreferenceResponseSecurityPreferenceMFAPreference) SetAllowUserToManageMFADevices(v bool) *GetSecurityPreferenceResponseSecurityPreferenceMFAPreference {
	s.AllowUserToManageMFADevices = &v
	return s
}

type GetRoleRequest struct {
	RoleName *string `json:"RoleName" xml:"RoleName"`
}

func (s GetRoleRequest) String() string {
	return tea.Prettify(s)
}

func (s GetRoleRequest) GoString() string {
	return s.String()
}

func (s *GetRoleRequest) SetRoleName(v string) *GetRoleRequest {
	s.RoleName = &v
	return s
}

type GetRoleResponse struct {
	RequestId *string              `json:"RequestId" xml:"RequestId" require:"true"`
	Role      *GetRoleResponseRole `json:"Role" xml:"Role" require:"true" type:"Struct"`
}

func (s GetRoleResponse) String() string {
	return tea.Prettify(s)
}

func (s GetRoleResponse) GoString() string {
	return s.String()
}

func (s *GetRoleResponse) SetRequestId(v string) *GetRoleResponse {
	s.RequestId = &v
	return s
}

func (s *GetRoleResponse) SetRole(v *GetRoleResponseRole) *GetRoleResponse {
	s.Role = v
	return s
}

type GetRoleResponseRole struct {
	RoleId                   *string `json:"RoleId" xml:"RoleId" require:"true"`
	RoleName                 *string `json:"RoleName" xml:"RoleName" require:"true"`
	Arn                      *string `json:"Arn" xml:"Arn" require:"true"`
	Description              *string `json:"Description" xml:"Description" require:"true"`
	AssumeRolePolicyDocument *string `json:"AssumeRolePolicyDocument" xml:"AssumeRolePolicyDocument" require:"true"`
	CreateDate               *string `json:"CreateDate" xml:"CreateDate" require:"true"`
	UpdateDate               *string `json:"UpdateDate" xml:"UpdateDate" require:"true"`
	MaxSessionDuration       *int64  `json:"MaxSessionDuration" xml:"MaxSessionDuration" require:"true"`
}

func (s GetRoleResponseRole) String() string {
	return tea.Prettify(s)
}

func (s GetRoleResponseRole) GoString() string {
	return s.String()
}

func (s *GetRoleResponseRole) SetRoleId(v string) *GetRoleResponseRole {
	s.RoleId = &v
	return s
}

func (s *GetRoleResponseRole) SetRoleName(v string) *GetRoleResponseRole {
	s.RoleName = &v
	return s
}

func (s *GetRoleResponseRole) SetArn(v string) *GetRoleResponseRole {
	s.Arn = &v
	return s
}

func (s *GetRoleResponseRole) SetDescription(v string) *GetRoleResponseRole {
	s.Description = &v
	return s
}

func (s *GetRoleResponseRole) SetAssumeRolePolicyDocument(v string) *GetRoleResponseRole {
	s.AssumeRolePolicyDocument = &v
	return s
}

func (s *GetRoleResponseRole) SetCreateDate(v string) *GetRoleResponseRole {
	s.CreateDate = &v
	return s
}

func (s *GetRoleResponseRole) SetUpdateDate(v string) *GetRoleResponseRole {
	s.UpdateDate = &v
	return s
}

func (s *GetRoleResponseRole) SetMaxSessionDuration(v int64) *GetRoleResponseRole {
	s.MaxSessionDuration = &v
	return s
}

type DetachPolicyFromRoleRequest struct {
	PolicyType *string `json:"PolicyType" xml:"PolicyType"`
	PolicyName *string `json:"PolicyName" xml:"PolicyName"`
	RoleName   *string `json:"RoleName" xml:"RoleName"`
}

func (s DetachPolicyFromRoleRequest) String() string {
	return tea.Prettify(s)
}

func (s DetachPolicyFromRoleRequest) GoString() string {
	return s.String()
}

func (s *DetachPolicyFromRoleRequest) SetPolicyType(v string) *DetachPolicyFromRoleRequest {
	s.PolicyType = &v
	return s
}

func (s *DetachPolicyFromRoleRequest) SetPolicyName(v string) *DetachPolicyFromRoleRequest {
	s.PolicyName = &v
	return s
}

func (s *DetachPolicyFromRoleRequest) SetRoleName(v string) *DetachPolicyFromRoleRequest {
	s.RoleName = &v
	return s
}

type DetachPolicyFromRoleResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DetachPolicyFromRoleResponse) String() string {
	return tea.Prettify(s)
}

func (s DetachPolicyFromRoleResponse) GoString() string {
	return s.String()
}

func (s *DetachPolicyFromRoleResponse) SetRequestId(v string) *DetachPolicyFromRoleResponse {
	s.RequestId = &v
	return s
}

type DeleteRoleRequest struct {
	RoleName *string `json:"RoleName" xml:"RoleName"`
}

func (s DeleteRoleRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteRoleRequest) GoString() string {
	return s.String()
}

func (s *DeleteRoleRequest) SetRoleName(v string) *DeleteRoleRequest {
	s.RoleName = &v
	return s
}

type DeleteRoleResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteRoleResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteRoleResponse) GoString() string {
	return s.String()
}

func (s *DeleteRoleResponse) SetRequestId(v string) *DeleteRoleResponse {
	s.RequestId = &v
	return s
}

type CreateRoleRequest struct {
	RoleName                 *string `json:"RoleName" xml:"RoleName"`
	Description              *string `json:"Description" xml:"Description"`
	AssumeRolePolicyDocument *string `json:"AssumeRolePolicyDocument" xml:"AssumeRolePolicyDocument"`
	MaxSessionDuration       *int64  `json:"MaxSessionDuration" xml:"MaxSessionDuration"`
}

func (s CreateRoleRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateRoleRequest) GoString() string {
	return s.String()
}

func (s *CreateRoleRequest) SetRoleName(v string) *CreateRoleRequest {
	s.RoleName = &v
	return s
}

func (s *CreateRoleRequest) SetDescription(v string) *CreateRoleRequest {
	s.Description = &v
	return s
}

func (s *CreateRoleRequest) SetAssumeRolePolicyDocument(v string) *CreateRoleRequest {
	s.AssumeRolePolicyDocument = &v
	return s
}

func (s *CreateRoleRequest) SetMaxSessionDuration(v int64) *CreateRoleRequest {
	s.MaxSessionDuration = &v
	return s
}

type CreateRoleResponse struct {
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Role      *CreateRoleResponseRole `json:"Role" xml:"Role" require:"true" type:"Struct"`
}

func (s CreateRoleResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateRoleResponse) GoString() string {
	return s.String()
}

func (s *CreateRoleResponse) SetRequestId(v string) *CreateRoleResponse {
	s.RequestId = &v
	return s
}

func (s *CreateRoleResponse) SetRole(v *CreateRoleResponseRole) *CreateRoleResponse {
	s.Role = v
	return s
}

type CreateRoleResponseRole struct {
	RoleId                   *string `json:"RoleId" xml:"RoleId" require:"true"`
	RoleName                 *string `json:"RoleName" xml:"RoleName" require:"true"`
	Arn                      *string `json:"Arn" xml:"Arn" require:"true"`
	Description              *string `json:"Description" xml:"Description" require:"true"`
	AssumeRolePolicyDocument *string `json:"AssumeRolePolicyDocument" xml:"AssumeRolePolicyDocument" require:"true"`
	CreateDate               *string `json:"CreateDate" xml:"CreateDate" require:"true"`
	MaxSessionDuration       *int64  `json:"MaxSessionDuration" xml:"MaxSessionDuration" require:"true"`
}

func (s CreateRoleResponseRole) String() string {
	return tea.Prettify(s)
}

func (s CreateRoleResponseRole) GoString() string {
	return s.String()
}

func (s *CreateRoleResponseRole) SetRoleId(v string) *CreateRoleResponseRole {
	s.RoleId = &v
	return s
}

func (s *CreateRoleResponseRole) SetRoleName(v string) *CreateRoleResponseRole {
	s.RoleName = &v
	return s
}

func (s *CreateRoleResponseRole) SetArn(v string) *CreateRoleResponseRole {
	s.Arn = &v
	return s
}

func (s *CreateRoleResponseRole) SetDescription(v string) *CreateRoleResponseRole {
	s.Description = &v
	return s
}

func (s *CreateRoleResponseRole) SetAssumeRolePolicyDocument(v string) *CreateRoleResponseRole {
	s.AssumeRolePolicyDocument = &v
	return s
}

func (s *CreateRoleResponseRole) SetCreateDate(v string) *CreateRoleResponseRole {
	s.CreateDate = &v
	return s
}

func (s *CreateRoleResponseRole) SetMaxSessionDuration(v int64) *CreateRoleResponseRole {
	s.MaxSessionDuration = &v
	return s
}

type AttachPolicyToRoleRequest struct {
	PolicyType *string `json:"PolicyType" xml:"PolicyType"`
	PolicyName *string `json:"PolicyName" xml:"PolicyName"`
	RoleName   *string `json:"RoleName" xml:"RoleName"`
}

func (s AttachPolicyToRoleRequest) String() string {
	return tea.Prettify(s)
}

func (s AttachPolicyToRoleRequest) GoString() string {
	return s.String()
}

func (s *AttachPolicyToRoleRequest) SetPolicyType(v string) *AttachPolicyToRoleRequest {
	s.PolicyType = &v
	return s
}

func (s *AttachPolicyToRoleRequest) SetPolicyName(v string) *AttachPolicyToRoleRequest {
	s.PolicyName = &v
	return s
}

func (s *AttachPolicyToRoleRequest) SetRoleName(v string) *AttachPolicyToRoleRequest {
	s.RoleName = &v
	return s
}

type AttachPolicyToRoleResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s AttachPolicyToRoleResponse) String() string {
	return tea.Prettify(s)
}

func (s AttachPolicyToRoleResponse) GoString() string {
	return s.String()
}

func (s *AttachPolicyToRoleResponse) SetRequestId(v string) *AttachPolicyToRoleResponse {
	s.RequestId = &v
	return s
}

type UnbindMFADeviceRequest struct {
	UserName *string `json:"UserName" xml:"UserName"`
}

func (s UnbindMFADeviceRequest) String() string {
	return tea.Prettify(s)
}

func (s UnbindMFADeviceRequest) GoString() string {
	return s.String()
}

func (s *UnbindMFADeviceRequest) SetUserName(v string) *UnbindMFADeviceRequest {
	s.UserName = &v
	return s
}

type UnbindMFADeviceResponse struct {
	RequestId *string                           `json:"RequestId" xml:"RequestId" require:"true"`
	MFADevice *UnbindMFADeviceResponseMFADevice `json:"MFADevice" xml:"MFADevice" require:"true" type:"Struct"`
}

func (s UnbindMFADeviceResponse) String() string {
	return tea.Prettify(s)
}

func (s UnbindMFADeviceResponse) GoString() string {
	return s.String()
}

func (s *UnbindMFADeviceResponse) SetRequestId(v string) *UnbindMFADeviceResponse {
	s.RequestId = &v
	return s
}

func (s *UnbindMFADeviceResponse) SetMFADevice(v *UnbindMFADeviceResponseMFADevice) *UnbindMFADeviceResponse {
	s.MFADevice = v
	return s
}

type UnbindMFADeviceResponseMFADevice struct {
	SerialNumber *string `json:"SerialNumber" xml:"SerialNumber" require:"true"`
}

func (s UnbindMFADeviceResponseMFADevice) String() string {
	return tea.Prettify(s)
}

func (s UnbindMFADeviceResponseMFADevice) GoString() string {
	return s.String()
}

func (s *UnbindMFADeviceResponseMFADevice) SetSerialNumber(v string) *UnbindMFADeviceResponseMFADevice {
	s.SerialNumber = &v
	return s
}

type ListVirtualMFADevicesRequest struct {
}

func (s ListVirtualMFADevicesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListVirtualMFADevicesRequest) GoString() string {
	return s.String()
}

type ListVirtualMFADevicesResponse struct {
	RequestId         *string                                         `json:"RequestId" xml:"RequestId" require:"true"`
	VirtualMFADevices *ListVirtualMFADevicesResponseVirtualMFADevices `json:"VirtualMFADevices" xml:"VirtualMFADevices" require:"true" type:"Struct"`
}

func (s ListVirtualMFADevicesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListVirtualMFADevicesResponse) GoString() string {
	return s.String()
}

func (s *ListVirtualMFADevicesResponse) SetRequestId(v string) *ListVirtualMFADevicesResponse {
	s.RequestId = &v
	return s
}

func (s *ListVirtualMFADevicesResponse) SetVirtualMFADevices(v *ListVirtualMFADevicesResponseVirtualMFADevices) *ListVirtualMFADevicesResponse {
	s.VirtualMFADevices = v
	return s
}

type ListVirtualMFADevicesResponseVirtualMFADevices struct {
	VirtualMFADevice []*ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice `json:"VirtualMFADevice" xml:"VirtualMFADevice" require:"true" type:"Repeated"`
}

func (s ListVirtualMFADevicesResponseVirtualMFADevices) String() string {
	return tea.Prettify(s)
}

func (s ListVirtualMFADevicesResponseVirtualMFADevices) GoString() string {
	return s.String()
}

func (s *ListVirtualMFADevicesResponseVirtualMFADevices) SetVirtualMFADevice(v []*ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice) *ListVirtualMFADevicesResponseVirtualMFADevices {
	s.VirtualMFADevice = v
	return s
}

type ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice struct {
	SerialNumber *string                                                             `json:"SerialNumber" xml:"SerialNumber" require:"true"`
	ActivateDate *string                                                             `json:"ActivateDate" xml:"ActivateDate" require:"true"`
	User         *ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser `json:"User" xml:"User" require:"true" type:"Struct"`
}

func (s ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice) String() string {
	return tea.Prettify(s)
}

func (s ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice) GoString() string {
	return s.String()
}

func (s *ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice) SetSerialNumber(v string) *ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice {
	s.SerialNumber = &v
	return s
}

func (s *ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice) SetActivateDate(v string) *ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice {
	s.ActivateDate = &v
	return s
}

func (s *ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice) SetUser(v *ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser) *ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice {
	s.User = v
	return s
}

type ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser struct {
	UserId      *string `json:"UserId" xml:"UserId" require:"true"`
	UserName    *string `json:"UserName" xml:"UserName" require:"true"`
	DisplayName *string `json:"DisplayName" xml:"DisplayName" require:"true"`
}

func (s ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser) String() string {
	return tea.Prettify(s)
}

func (s ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser) GoString() string {
	return s.String()
}

func (s *ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser) SetUserId(v string) *ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser {
	s.UserId = &v
	return s
}

func (s *ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser) SetUserName(v string) *ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser {
	s.UserName = &v
	return s
}

func (s *ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser) SetDisplayName(v string) *ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser {
	s.DisplayName = &v
	return s
}

type GetUserMFAInfoRequest struct {
	UserName *string `json:"UserName" xml:"UserName"`
}

func (s GetUserMFAInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s GetUserMFAInfoRequest) GoString() string {
	return s.String()
}

func (s *GetUserMFAInfoRequest) SetUserName(v string) *GetUserMFAInfoRequest {
	s.UserName = &v
	return s
}

type GetUserMFAInfoResponse struct {
	RequestId *string                          `json:"RequestId" xml:"RequestId" require:"true"`
	MFADevice *GetUserMFAInfoResponseMFADevice `json:"MFADevice" xml:"MFADevice" require:"true" type:"Struct"`
}

func (s GetUserMFAInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s GetUserMFAInfoResponse) GoString() string {
	return s.String()
}

func (s *GetUserMFAInfoResponse) SetRequestId(v string) *GetUserMFAInfoResponse {
	s.RequestId = &v
	return s
}

func (s *GetUserMFAInfoResponse) SetMFADevice(v *GetUserMFAInfoResponseMFADevice) *GetUserMFAInfoResponse {
	s.MFADevice = v
	return s
}

type GetUserMFAInfoResponseMFADevice struct {
	SerialNumber *string `json:"SerialNumber" xml:"SerialNumber" require:"true"`
}

func (s GetUserMFAInfoResponseMFADevice) String() string {
	return tea.Prettify(s)
}

func (s GetUserMFAInfoResponseMFADevice) GoString() string {
	return s.String()
}

func (s *GetUserMFAInfoResponseMFADevice) SetSerialNumber(v string) *GetUserMFAInfoResponseMFADevice {
	s.SerialNumber = &v
	return s
}

type DeleteVirtualMFADeviceRequest struct {
	SerialNumber *string `json:"SerialNumber" xml:"SerialNumber"`
}

func (s DeleteVirtualMFADeviceRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteVirtualMFADeviceRequest) GoString() string {
	return s.String()
}

func (s *DeleteVirtualMFADeviceRequest) SetSerialNumber(v string) *DeleteVirtualMFADeviceRequest {
	s.SerialNumber = &v
	return s
}

type DeleteVirtualMFADeviceResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteVirtualMFADeviceResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteVirtualMFADeviceResponse) GoString() string {
	return s.String()
}

func (s *DeleteVirtualMFADeviceResponse) SetRequestId(v string) *DeleteVirtualMFADeviceResponse {
	s.RequestId = &v
	return s
}

type CreateVirtualMFADeviceRequest struct {
	VirtualMFADeviceName *string `json:"VirtualMFADeviceName" xml:"VirtualMFADeviceName"`
}

func (s CreateVirtualMFADeviceRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateVirtualMFADeviceRequest) GoString() string {
	return s.String()
}

func (s *CreateVirtualMFADeviceRequest) SetVirtualMFADeviceName(v string) *CreateVirtualMFADeviceRequest {
	s.VirtualMFADeviceName = &v
	return s
}

type CreateVirtualMFADeviceResponse struct {
	RequestId        *string                                         `json:"RequestId" xml:"RequestId" require:"true"`
	VirtualMFADevice *CreateVirtualMFADeviceResponseVirtualMFADevice `json:"VirtualMFADevice" xml:"VirtualMFADevice" require:"true" type:"Struct"`
}

func (s CreateVirtualMFADeviceResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateVirtualMFADeviceResponse) GoString() string {
	return s.String()
}

func (s *CreateVirtualMFADeviceResponse) SetRequestId(v string) *CreateVirtualMFADeviceResponse {
	s.RequestId = &v
	return s
}

func (s *CreateVirtualMFADeviceResponse) SetVirtualMFADevice(v *CreateVirtualMFADeviceResponseVirtualMFADevice) *CreateVirtualMFADeviceResponse {
	s.VirtualMFADevice = v
	return s
}

type CreateVirtualMFADeviceResponseVirtualMFADevice struct {
	SerialNumber     *string `json:"SerialNumber" xml:"SerialNumber" require:"true"`
	Base32StringSeed *string `json:"Base32StringSeed" xml:"Base32StringSeed" require:"true"`
	QRCodePNG        *string `json:"QRCodePNG" xml:"QRCodePNG" require:"true"`
}

func (s CreateVirtualMFADeviceResponseVirtualMFADevice) String() string {
	return tea.Prettify(s)
}

func (s CreateVirtualMFADeviceResponseVirtualMFADevice) GoString() string {
	return s.String()
}

func (s *CreateVirtualMFADeviceResponseVirtualMFADevice) SetSerialNumber(v string) *CreateVirtualMFADeviceResponseVirtualMFADevice {
	s.SerialNumber = &v
	return s
}

func (s *CreateVirtualMFADeviceResponseVirtualMFADevice) SetBase32StringSeed(v string) *CreateVirtualMFADeviceResponseVirtualMFADevice {
	s.Base32StringSeed = &v
	return s
}

func (s *CreateVirtualMFADeviceResponseVirtualMFADevice) SetQRCodePNG(v string) *CreateVirtualMFADeviceResponseVirtualMFADevice {
	s.QRCodePNG = &v
	return s
}

type BindMFADeviceRequest struct {
	SerialNumber        *string `json:"SerialNumber" xml:"SerialNumber"`
	UserName            *string `json:"UserName" xml:"UserName"`
	AuthenticationCode1 *string `json:"AuthenticationCode1" xml:"AuthenticationCode1"`
	AuthenticationCode2 *string `json:"AuthenticationCode2" xml:"AuthenticationCode2"`
}

func (s BindMFADeviceRequest) String() string {
	return tea.Prettify(s)
}

func (s BindMFADeviceRequest) GoString() string {
	return s.String()
}

func (s *BindMFADeviceRequest) SetSerialNumber(v string) *BindMFADeviceRequest {
	s.SerialNumber = &v
	return s
}

func (s *BindMFADeviceRequest) SetUserName(v string) *BindMFADeviceRequest {
	s.UserName = &v
	return s
}

func (s *BindMFADeviceRequest) SetAuthenticationCode1(v string) *BindMFADeviceRequest {
	s.AuthenticationCode1 = &v
	return s
}

func (s *BindMFADeviceRequest) SetAuthenticationCode2(v string) *BindMFADeviceRequest {
	s.AuthenticationCode2 = &v
	return s
}

type BindMFADeviceResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s BindMFADeviceResponse) String() string {
	return tea.Prettify(s)
}

func (s BindMFADeviceResponse) GoString() string {
	return s.String()
}

func (s *BindMFADeviceResponse) SetRequestId(v string) *BindMFADeviceResponse {
	s.RequestId = &v
	return s
}

type UpdateLoginProfileRequest struct {
	UserName              *string `json:"UserName" xml:"UserName"`
	Password              *string `json:"Password" xml:"Password"`
	PasswordResetRequired *bool   `json:"PasswordResetRequired" xml:"PasswordResetRequired"`
	MFABindRequired       *bool   `json:"MFABindRequired" xml:"MFABindRequired"`
}

func (s UpdateLoginProfileRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateLoginProfileRequest) GoString() string {
	return s.String()
}

func (s *UpdateLoginProfileRequest) SetUserName(v string) *UpdateLoginProfileRequest {
	s.UserName = &v
	return s
}

func (s *UpdateLoginProfileRequest) SetPassword(v string) *UpdateLoginProfileRequest {
	s.Password = &v
	return s
}

func (s *UpdateLoginProfileRequest) SetPasswordResetRequired(v bool) *UpdateLoginProfileRequest {
	s.PasswordResetRequired = &v
	return s
}

func (s *UpdateLoginProfileRequest) SetMFABindRequired(v bool) *UpdateLoginProfileRequest {
	s.MFABindRequired = &v
	return s
}

type UpdateLoginProfileResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s UpdateLoginProfileResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateLoginProfileResponse) GoString() string {
	return s.String()
}

func (s *UpdateLoginProfileResponse) SetRequestId(v string) *UpdateLoginProfileResponse {
	s.RequestId = &v
	return s
}

type GetLoginProfileRequest struct {
	UserName *string `json:"UserName" xml:"UserName"`
}

func (s GetLoginProfileRequest) String() string {
	return tea.Prettify(s)
}

func (s GetLoginProfileRequest) GoString() string {
	return s.String()
}

func (s *GetLoginProfileRequest) SetUserName(v string) *GetLoginProfileRequest {
	s.UserName = &v
	return s
}

type GetLoginProfileResponse struct {
	RequestId    *string                              `json:"RequestId" xml:"RequestId" require:"true"`
	LoginProfile *GetLoginProfileResponseLoginProfile `json:"LoginProfile" xml:"LoginProfile" require:"true" type:"Struct"`
}

func (s GetLoginProfileResponse) String() string {
	return tea.Prettify(s)
}

func (s GetLoginProfileResponse) GoString() string {
	return s.String()
}

func (s *GetLoginProfileResponse) SetRequestId(v string) *GetLoginProfileResponse {
	s.RequestId = &v
	return s
}

func (s *GetLoginProfileResponse) SetLoginProfile(v *GetLoginProfileResponseLoginProfile) *GetLoginProfileResponse {
	s.LoginProfile = v
	return s
}

type GetLoginProfileResponseLoginProfile struct {
	UserName              *string `json:"UserName" xml:"UserName" require:"true"`
	PasswordResetRequired *bool   `json:"PasswordResetRequired" xml:"PasswordResetRequired" require:"true"`
	MFABindRequired       *bool   `json:"MFABindRequired" xml:"MFABindRequired" require:"true"`
	CreateDate            *string `json:"CreateDate" xml:"CreateDate" require:"true"`
}

func (s GetLoginProfileResponseLoginProfile) String() string {
	return tea.Prettify(s)
}

func (s GetLoginProfileResponseLoginProfile) GoString() string {
	return s.String()
}

func (s *GetLoginProfileResponseLoginProfile) SetUserName(v string) *GetLoginProfileResponseLoginProfile {
	s.UserName = &v
	return s
}

func (s *GetLoginProfileResponseLoginProfile) SetPasswordResetRequired(v bool) *GetLoginProfileResponseLoginProfile {
	s.PasswordResetRequired = &v
	return s
}

func (s *GetLoginProfileResponseLoginProfile) SetMFABindRequired(v bool) *GetLoginProfileResponseLoginProfile {
	s.MFABindRequired = &v
	return s
}

func (s *GetLoginProfileResponseLoginProfile) SetCreateDate(v string) *GetLoginProfileResponseLoginProfile {
	s.CreateDate = &v
	return s
}

type DeleteLoginProfileRequest struct {
	UserName *string `json:"UserName" xml:"UserName"`
}

func (s DeleteLoginProfileRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteLoginProfileRequest) GoString() string {
	return s.String()
}

func (s *DeleteLoginProfileRequest) SetUserName(v string) *DeleteLoginProfileRequest {
	s.UserName = &v
	return s
}

type DeleteLoginProfileResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteLoginProfileResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteLoginProfileResponse) GoString() string {
	return s.String()
}

func (s *DeleteLoginProfileResponse) SetRequestId(v string) *DeleteLoginProfileResponse {
	s.RequestId = &v
	return s
}

type CreateLoginProfileRequest struct {
	UserName              *string `json:"UserName" xml:"UserName"`
	Password              *string `json:"Password" xml:"Password"`
	PasswordResetRequired *bool   `json:"PasswordResetRequired" xml:"PasswordResetRequired"`
	MFABindRequired       *bool   `json:"MFABindRequired" xml:"MFABindRequired"`
}

func (s CreateLoginProfileRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateLoginProfileRequest) GoString() string {
	return s.String()
}

func (s *CreateLoginProfileRequest) SetUserName(v string) *CreateLoginProfileRequest {
	s.UserName = &v
	return s
}

func (s *CreateLoginProfileRequest) SetPassword(v string) *CreateLoginProfileRequest {
	s.Password = &v
	return s
}

func (s *CreateLoginProfileRequest) SetPasswordResetRequired(v bool) *CreateLoginProfileRequest {
	s.PasswordResetRequired = &v
	return s
}

func (s *CreateLoginProfileRequest) SetMFABindRequired(v bool) *CreateLoginProfileRequest {
	s.MFABindRequired = &v
	return s
}

type CreateLoginProfileResponse struct {
	RequestId    *string                                 `json:"RequestId" xml:"RequestId" require:"true"`
	LoginProfile *CreateLoginProfileResponseLoginProfile `json:"LoginProfile" xml:"LoginProfile" require:"true" type:"Struct"`
}

func (s CreateLoginProfileResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateLoginProfileResponse) GoString() string {
	return s.String()
}

func (s *CreateLoginProfileResponse) SetRequestId(v string) *CreateLoginProfileResponse {
	s.RequestId = &v
	return s
}

func (s *CreateLoginProfileResponse) SetLoginProfile(v *CreateLoginProfileResponseLoginProfile) *CreateLoginProfileResponse {
	s.LoginProfile = v
	return s
}

type CreateLoginProfileResponseLoginProfile struct {
	UserName              *string `json:"UserName" xml:"UserName" require:"true"`
	PasswordResetRequired *bool   `json:"PasswordResetRequired" xml:"PasswordResetRequired" require:"true"`
	MFABindRequired       *bool   `json:"MFABindRequired" xml:"MFABindRequired" require:"true"`
	CreateDate            *string `json:"CreateDate" xml:"CreateDate" require:"true"`
}

func (s CreateLoginProfileResponseLoginProfile) String() string {
	return tea.Prettify(s)
}

func (s CreateLoginProfileResponseLoginProfile) GoString() string {
	return s.String()
}

func (s *CreateLoginProfileResponseLoginProfile) SetUserName(v string) *CreateLoginProfileResponseLoginProfile {
	s.UserName = &v
	return s
}

func (s *CreateLoginProfileResponseLoginProfile) SetPasswordResetRequired(v bool) *CreateLoginProfileResponseLoginProfile {
	s.PasswordResetRequired = &v
	return s
}

func (s *CreateLoginProfileResponseLoginProfile) SetMFABindRequired(v bool) *CreateLoginProfileResponseLoginProfile {
	s.MFABindRequired = &v
	return s
}

func (s *CreateLoginProfileResponseLoginProfile) SetCreateDate(v string) *CreateLoginProfileResponseLoginProfile {
	s.CreateDate = &v
	return s
}

type UpdateUserRequest struct {
	UserName       *string `json:"UserName" xml:"UserName"`
	NewUserName    *string `json:"NewUserName" xml:"NewUserName"`
	NewDisplayName *string `json:"NewDisplayName" xml:"NewDisplayName"`
	NewMobilePhone *string `json:"NewMobilePhone" xml:"NewMobilePhone"`
	NewEmail       *string `json:"NewEmail" xml:"NewEmail"`
	NewComments    *string `json:"NewComments" xml:"NewComments"`
}

func (s UpdateUserRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateUserRequest) GoString() string {
	return s.String()
}

func (s *UpdateUserRequest) SetUserName(v string) *UpdateUserRequest {
	s.UserName = &v
	return s
}

func (s *UpdateUserRequest) SetNewUserName(v string) *UpdateUserRequest {
	s.NewUserName = &v
	return s
}

func (s *UpdateUserRequest) SetNewDisplayName(v string) *UpdateUserRequest {
	s.NewDisplayName = &v
	return s
}

func (s *UpdateUserRequest) SetNewMobilePhone(v string) *UpdateUserRequest {
	s.NewMobilePhone = &v
	return s
}

func (s *UpdateUserRequest) SetNewEmail(v string) *UpdateUserRequest {
	s.NewEmail = &v
	return s
}

func (s *UpdateUserRequest) SetNewComments(v string) *UpdateUserRequest {
	s.NewComments = &v
	return s
}

type UpdateUserResponse struct {
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	User      *UpdateUserResponseUser `json:"User" xml:"User" require:"true" type:"Struct"`
}

func (s UpdateUserResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateUserResponse) GoString() string {
	return s.String()
}

func (s *UpdateUserResponse) SetRequestId(v string) *UpdateUserResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateUserResponse) SetUser(v *UpdateUserResponseUser) *UpdateUserResponse {
	s.User = v
	return s
}

type UpdateUserResponseUser struct {
	UserId      *string `json:"UserId" xml:"UserId" require:"true"`
	UserName    *string `json:"UserName" xml:"UserName" require:"true"`
	DisplayName *string `json:"DisplayName" xml:"DisplayName" require:"true"`
	MobilePhone *string `json:"MobilePhone" xml:"MobilePhone" require:"true"`
	Email       *string `json:"Email" xml:"Email" require:"true"`
	Comments    *string `json:"Comments" xml:"Comments" require:"true"`
	CreateDate  *string `json:"CreateDate" xml:"CreateDate" require:"true"`
	UpdateDate  *string `json:"UpdateDate" xml:"UpdateDate" require:"true"`
}

func (s UpdateUserResponseUser) String() string {
	return tea.Prettify(s)
}

func (s UpdateUserResponseUser) GoString() string {
	return s.String()
}

func (s *UpdateUserResponseUser) SetUserId(v string) *UpdateUserResponseUser {
	s.UserId = &v
	return s
}

func (s *UpdateUserResponseUser) SetUserName(v string) *UpdateUserResponseUser {
	s.UserName = &v
	return s
}

func (s *UpdateUserResponseUser) SetDisplayName(v string) *UpdateUserResponseUser {
	s.DisplayName = &v
	return s
}

func (s *UpdateUserResponseUser) SetMobilePhone(v string) *UpdateUserResponseUser {
	s.MobilePhone = &v
	return s
}

func (s *UpdateUserResponseUser) SetEmail(v string) *UpdateUserResponseUser {
	s.Email = &v
	return s
}

func (s *UpdateUserResponseUser) SetComments(v string) *UpdateUserResponseUser {
	s.Comments = &v
	return s
}

func (s *UpdateUserResponseUser) SetCreateDate(v string) *UpdateUserResponseUser {
	s.CreateDate = &v
	return s
}

func (s *UpdateUserResponseUser) SetUpdateDate(v string) *UpdateUserResponseUser {
	s.UpdateDate = &v
	return s
}

type ListUsersRequest struct {
	Marker   *string `json:"Marker" xml:"Marker"`
	MaxItems *int    `json:"MaxItems" xml:"MaxItems"`
}

func (s ListUsersRequest) String() string {
	return tea.Prettify(s)
}

func (s ListUsersRequest) GoString() string {
	return s.String()
}

func (s *ListUsersRequest) SetMarker(v string) *ListUsersRequest {
	s.Marker = &v
	return s
}

func (s *ListUsersRequest) SetMaxItems(v int) *ListUsersRequest {
	s.MaxItems = &v
	return s
}

type ListUsersResponse struct {
	RequestId   *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	IsTruncated *bool                   `json:"IsTruncated" xml:"IsTruncated" require:"true"`
	Marker      *string                 `json:"Marker" xml:"Marker" require:"true"`
	Users       *ListUsersResponseUsers `json:"Users" xml:"Users" require:"true" type:"Struct"`
}

func (s ListUsersResponse) String() string {
	return tea.Prettify(s)
}

func (s ListUsersResponse) GoString() string {
	return s.String()
}

func (s *ListUsersResponse) SetRequestId(v string) *ListUsersResponse {
	s.RequestId = &v
	return s
}

func (s *ListUsersResponse) SetIsTruncated(v bool) *ListUsersResponse {
	s.IsTruncated = &v
	return s
}

func (s *ListUsersResponse) SetMarker(v string) *ListUsersResponse {
	s.Marker = &v
	return s
}

func (s *ListUsersResponse) SetUsers(v *ListUsersResponseUsers) *ListUsersResponse {
	s.Users = v
	return s
}

type ListUsersResponseUsers struct {
	User []*ListUsersResponseUsersUser `json:"User" xml:"User" require:"true" type:"Repeated"`
}

func (s ListUsersResponseUsers) String() string {
	return tea.Prettify(s)
}

func (s ListUsersResponseUsers) GoString() string {
	return s.String()
}

func (s *ListUsersResponseUsers) SetUser(v []*ListUsersResponseUsersUser) *ListUsersResponseUsers {
	s.User = v
	return s
}

type ListUsersResponseUsersUser struct {
	UserId      *string `json:"UserId" xml:"UserId" require:"true"`
	UserName    *string `json:"UserName" xml:"UserName" require:"true"`
	DisplayName *string `json:"DisplayName" xml:"DisplayName" require:"true"`
	MobilePhone *string `json:"MobilePhone" xml:"MobilePhone" require:"true"`
	Email       *string `json:"Email" xml:"Email" require:"true"`
	Comments    *string `json:"Comments" xml:"Comments" require:"true"`
	CreateDate  *string `json:"CreateDate" xml:"CreateDate" require:"true"`
	UpdateDate  *string `json:"UpdateDate" xml:"UpdateDate" require:"true"`
}

func (s ListUsersResponseUsersUser) String() string {
	return tea.Prettify(s)
}

func (s ListUsersResponseUsersUser) GoString() string {
	return s.String()
}

func (s *ListUsersResponseUsersUser) SetUserId(v string) *ListUsersResponseUsersUser {
	s.UserId = &v
	return s
}

func (s *ListUsersResponseUsersUser) SetUserName(v string) *ListUsersResponseUsersUser {
	s.UserName = &v
	return s
}

func (s *ListUsersResponseUsersUser) SetDisplayName(v string) *ListUsersResponseUsersUser {
	s.DisplayName = &v
	return s
}

func (s *ListUsersResponseUsersUser) SetMobilePhone(v string) *ListUsersResponseUsersUser {
	s.MobilePhone = &v
	return s
}

func (s *ListUsersResponseUsersUser) SetEmail(v string) *ListUsersResponseUsersUser {
	s.Email = &v
	return s
}

func (s *ListUsersResponseUsersUser) SetComments(v string) *ListUsersResponseUsersUser {
	s.Comments = &v
	return s
}

func (s *ListUsersResponseUsersUser) SetCreateDate(v string) *ListUsersResponseUsersUser {
	s.CreateDate = &v
	return s
}

func (s *ListUsersResponseUsersUser) SetUpdateDate(v string) *ListUsersResponseUsersUser {
	s.UpdateDate = &v
	return s
}

type GetUserRequest struct {
	UserName *string `json:"UserName" xml:"UserName"`
}

func (s GetUserRequest) String() string {
	return tea.Prettify(s)
}

func (s GetUserRequest) GoString() string {
	return s.String()
}

func (s *GetUserRequest) SetUserName(v string) *GetUserRequest {
	s.UserName = &v
	return s
}

type GetUserResponse struct {
	RequestId *string              `json:"RequestId" xml:"RequestId" require:"true"`
	User      *GetUserResponseUser `json:"User" xml:"User" require:"true" type:"Struct"`
}

func (s GetUserResponse) String() string {
	return tea.Prettify(s)
}

func (s GetUserResponse) GoString() string {
	return s.String()
}

func (s *GetUserResponse) SetRequestId(v string) *GetUserResponse {
	s.RequestId = &v
	return s
}

func (s *GetUserResponse) SetUser(v *GetUserResponseUser) *GetUserResponse {
	s.User = v
	return s
}

type GetUserResponseUser struct {
	UserId        *string `json:"UserId" xml:"UserId" require:"true"`
	UserName      *string `json:"UserName" xml:"UserName" require:"true"`
	DisplayName   *string `json:"DisplayName" xml:"DisplayName" require:"true"`
	MobilePhone   *string `json:"MobilePhone" xml:"MobilePhone" require:"true"`
	Email         *string `json:"Email" xml:"Email" require:"true"`
	Comments      *string `json:"Comments" xml:"Comments" require:"true"`
	CreateDate    *string `json:"CreateDate" xml:"CreateDate" require:"true"`
	UpdateDate    *string `json:"UpdateDate" xml:"UpdateDate" require:"true"`
	LastLoginDate *string `json:"LastLoginDate" xml:"LastLoginDate" require:"true"`
}

func (s GetUserResponseUser) String() string {
	return tea.Prettify(s)
}

func (s GetUserResponseUser) GoString() string {
	return s.String()
}

func (s *GetUserResponseUser) SetUserId(v string) *GetUserResponseUser {
	s.UserId = &v
	return s
}

func (s *GetUserResponseUser) SetUserName(v string) *GetUserResponseUser {
	s.UserName = &v
	return s
}

func (s *GetUserResponseUser) SetDisplayName(v string) *GetUserResponseUser {
	s.DisplayName = &v
	return s
}

func (s *GetUserResponseUser) SetMobilePhone(v string) *GetUserResponseUser {
	s.MobilePhone = &v
	return s
}

func (s *GetUserResponseUser) SetEmail(v string) *GetUserResponseUser {
	s.Email = &v
	return s
}

func (s *GetUserResponseUser) SetComments(v string) *GetUserResponseUser {
	s.Comments = &v
	return s
}

func (s *GetUserResponseUser) SetCreateDate(v string) *GetUserResponseUser {
	s.CreateDate = &v
	return s
}

func (s *GetUserResponseUser) SetUpdateDate(v string) *GetUserResponseUser {
	s.UpdateDate = &v
	return s
}

func (s *GetUserResponseUser) SetLastLoginDate(v string) *GetUserResponseUser {
	s.LastLoginDate = &v
	return s
}

type DeleteUserRequest struct {
	UserName *string `json:"UserName" xml:"UserName"`
}

func (s DeleteUserRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteUserRequest) GoString() string {
	return s.String()
}

func (s *DeleteUserRequest) SetUserName(v string) *DeleteUserRequest {
	s.UserName = &v
	return s
}

type DeleteUserResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteUserResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteUserResponse) GoString() string {
	return s.String()
}

func (s *DeleteUserResponse) SetRequestId(v string) *DeleteUserResponse {
	s.RequestId = &v
	return s
}

type CreateUserRequest struct {
	UserName    *string `json:"UserName" xml:"UserName"`
	DisplayName *string `json:"DisplayName" xml:"DisplayName"`
	MobilePhone *string `json:"MobilePhone" xml:"MobilePhone"`
	Email       *string `json:"Email" xml:"Email"`
	Comments    *string `json:"Comments" xml:"Comments"`
}

func (s CreateUserRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateUserRequest) GoString() string {
	return s.String()
}

func (s *CreateUserRequest) SetUserName(v string) *CreateUserRequest {
	s.UserName = &v
	return s
}

func (s *CreateUserRequest) SetDisplayName(v string) *CreateUserRequest {
	s.DisplayName = &v
	return s
}

func (s *CreateUserRequest) SetMobilePhone(v string) *CreateUserRequest {
	s.MobilePhone = &v
	return s
}

func (s *CreateUserRequest) SetEmail(v string) *CreateUserRequest {
	s.Email = &v
	return s
}

func (s *CreateUserRequest) SetComments(v string) *CreateUserRequest {
	s.Comments = &v
	return s
}

type CreateUserResponse struct {
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	User      *CreateUserResponseUser `json:"User" xml:"User" require:"true" type:"Struct"`
}

func (s CreateUserResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateUserResponse) GoString() string {
	return s.String()
}

func (s *CreateUserResponse) SetRequestId(v string) *CreateUserResponse {
	s.RequestId = &v
	return s
}

func (s *CreateUserResponse) SetUser(v *CreateUserResponseUser) *CreateUserResponse {
	s.User = v
	return s
}

type CreateUserResponseUser struct {
	UserId      *string `json:"UserId" xml:"UserId" require:"true"`
	UserName    *string `json:"UserName" xml:"UserName" require:"true"`
	DisplayName *string `json:"DisplayName" xml:"DisplayName" require:"true"`
	MobilePhone *string `json:"MobilePhone" xml:"MobilePhone" require:"true"`
	Email       *string `json:"Email" xml:"Email" require:"true"`
	Comments    *string `json:"Comments" xml:"Comments" require:"true"`
	CreateDate  *string `json:"CreateDate" xml:"CreateDate" require:"true"`
}

func (s CreateUserResponseUser) String() string {
	return tea.Prettify(s)
}

func (s CreateUserResponseUser) GoString() string {
	return s.String()
}

func (s *CreateUserResponseUser) SetUserId(v string) *CreateUserResponseUser {
	s.UserId = &v
	return s
}

func (s *CreateUserResponseUser) SetUserName(v string) *CreateUserResponseUser {
	s.UserName = &v
	return s
}

func (s *CreateUserResponseUser) SetDisplayName(v string) *CreateUserResponseUser {
	s.DisplayName = &v
	return s
}

func (s *CreateUserResponseUser) SetMobilePhone(v string) *CreateUserResponseUser {
	s.MobilePhone = &v
	return s
}

func (s *CreateUserResponseUser) SetEmail(v string) *CreateUserResponseUser {
	s.Email = &v
	return s
}

func (s *CreateUserResponseUser) SetComments(v string) *CreateUserResponseUser {
	s.Comments = &v
	return s
}

func (s *CreateUserResponseUser) SetCreateDate(v string) *CreateUserResponseUser {
	s.CreateDate = &v
	return s
}

type UpdateAccessKeyRequest struct {
	UserName        *string `json:"UserName" xml:"UserName"`
	UserAccessKeyId *string `json:"UserAccessKeyId" xml:"UserAccessKeyId"`
	Status          *string `json:"Status" xml:"Status"`
}

func (s UpdateAccessKeyRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateAccessKeyRequest) GoString() string {
	return s.String()
}

func (s *UpdateAccessKeyRequest) SetUserName(v string) *UpdateAccessKeyRequest {
	s.UserName = &v
	return s
}

func (s *UpdateAccessKeyRequest) SetUserAccessKeyId(v string) *UpdateAccessKeyRequest {
	s.UserAccessKeyId = &v
	return s
}

func (s *UpdateAccessKeyRequest) SetStatus(v string) *UpdateAccessKeyRequest {
	s.Status = &v
	return s
}

type UpdateAccessKeyResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s UpdateAccessKeyResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateAccessKeyResponse) GoString() string {
	return s.String()
}

func (s *UpdateAccessKeyResponse) SetRequestId(v string) *UpdateAccessKeyResponse {
	s.RequestId = &v
	return s
}

type ListAccessKeysRequest struct {
	UserName *string `json:"UserName" xml:"UserName"`
}

func (s ListAccessKeysRequest) String() string {
	return tea.Prettify(s)
}

func (s ListAccessKeysRequest) GoString() string {
	return s.String()
}

func (s *ListAccessKeysRequest) SetUserName(v string) *ListAccessKeysRequest {
	s.UserName = &v
	return s
}

type ListAccessKeysResponse struct {
	RequestId  *string                           `json:"RequestId" xml:"RequestId" require:"true"`
	AccessKeys *ListAccessKeysResponseAccessKeys `json:"AccessKeys" xml:"AccessKeys" require:"true" type:"Struct"`
}

func (s ListAccessKeysResponse) String() string {
	return tea.Prettify(s)
}

func (s ListAccessKeysResponse) GoString() string {
	return s.String()
}

func (s *ListAccessKeysResponse) SetRequestId(v string) *ListAccessKeysResponse {
	s.RequestId = &v
	return s
}

func (s *ListAccessKeysResponse) SetAccessKeys(v *ListAccessKeysResponseAccessKeys) *ListAccessKeysResponse {
	s.AccessKeys = v
	return s
}

type ListAccessKeysResponseAccessKeys struct {
	AccessKey []*ListAccessKeysResponseAccessKeysAccessKey `json:"AccessKey" xml:"AccessKey" require:"true" type:"Repeated"`
}

func (s ListAccessKeysResponseAccessKeys) String() string {
	return tea.Prettify(s)
}

func (s ListAccessKeysResponseAccessKeys) GoString() string {
	return s.String()
}

func (s *ListAccessKeysResponseAccessKeys) SetAccessKey(v []*ListAccessKeysResponseAccessKeysAccessKey) *ListAccessKeysResponseAccessKeys {
	s.AccessKey = v
	return s
}

type ListAccessKeysResponseAccessKeysAccessKey struct {
	AccessKeyId *string `json:"AccessKeyId" xml:"AccessKeyId" require:"true"`
	Status      *string `json:"Status" xml:"Status" require:"true"`
	CreateDate  *string `json:"CreateDate" xml:"CreateDate" require:"true"`
}

func (s ListAccessKeysResponseAccessKeysAccessKey) String() string {
	return tea.Prettify(s)
}

func (s ListAccessKeysResponseAccessKeysAccessKey) GoString() string {
	return s.String()
}

func (s *ListAccessKeysResponseAccessKeysAccessKey) SetAccessKeyId(v string) *ListAccessKeysResponseAccessKeysAccessKey {
	s.AccessKeyId = &v
	return s
}

func (s *ListAccessKeysResponseAccessKeysAccessKey) SetStatus(v string) *ListAccessKeysResponseAccessKeysAccessKey {
	s.Status = &v
	return s
}

func (s *ListAccessKeysResponseAccessKeysAccessKey) SetCreateDate(v string) *ListAccessKeysResponseAccessKeysAccessKey {
	s.CreateDate = &v
	return s
}

type DeleteAccessKeyRequest struct {
	UserName        *string `json:"UserName" xml:"UserName"`
	UserAccessKeyId *string `json:"UserAccessKeyId" xml:"UserAccessKeyId"`
}

func (s DeleteAccessKeyRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAccessKeyRequest) GoString() string {
	return s.String()
}

func (s *DeleteAccessKeyRequest) SetUserName(v string) *DeleteAccessKeyRequest {
	s.UserName = &v
	return s
}

func (s *DeleteAccessKeyRequest) SetUserAccessKeyId(v string) *DeleteAccessKeyRequest {
	s.UserAccessKeyId = &v
	return s
}

type DeleteAccessKeyResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteAccessKeyResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAccessKeyResponse) GoString() string {
	return s.String()
}

func (s *DeleteAccessKeyResponse) SetRequestId(v string) *DeleteAccessKeyResponse {
	s.RequestId = &v
	return s
}

type CreateAccessKeyRequest struct {
	UserName *string `json:"UserName" xml:"UserName"`
}

func (s CreateAccessKeyRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateAccessKeyRequest) GoString() string {
	return s.String()
}

func (s *CreateAccessKeyRequest) SetUserName(v string) *CreateAccessKeyRequest {
	s.UserName = &v
	return s
}

type CreateAccessKeyResponse struct {
	RequestId *string                           `json:"RequestId" xml:"RequestId" require:"true"`
	AccessKey *CreateAccessKeyResponseAccessKey `json:"AccessKey" xml:"AccessKey" require:"true" type:"Struct"`
}

func (s CreateAccessKeyResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateAccessKeyResponse) GoString() string {
	return s.String()
}

func (s *CreateAccessKeyResponse) SetRequestId(v string) *CreateAccessKeyResponse {
	s.RequestId = &v
	return s
}

func (s *CreateAccessKeyResponse) SetAccessKey(v *CreateAccessKeyResponseAccessKey) *CreateAccessKeyResponse {
	s.AccessKey = v
	return s
}

type CreateAccessKeyResponseAccessKey struct {
	AccessKeyId     *string `json:"AccessKeyId" xml:"AccessKeyId" require:"true"`
	AccessKeySecret *string `json:"AccessKeySecret" xml:"AccessKeySecret" require:"true"`
	Status          *string `json:"Status" xml:"Status" require:"true"`
	CreateDate      *string `json:"CreateDate" xml:"CreateDate" require:"true"`
}

func (s CreateAccessKeyResponseAccessKey) String() string {
	return tea.Prettify(s)
}

func (s CreateAccessKeyResponseAccessKey) GoString() string {
	return s.String()
}

func (s *CreateAccessKeyResponseAccessKey) SetAccessKeyId(v string) *CreateAccessKeyResponseAccessKey {
	s.AccessKeyId = &v
	return s
}

func (s *CreateAccessKeyResponseAccessKey) SetAccessKeySecret(v string) *CreateAccessKeyResponseAccessKey {
	s.AccessKeySecret = &v
	return s
}

func (s *CreateAccessKeyResponseAccessKey) SetStatus(v string) *CreateAccessKeyResponseAccessKey {
	s.Status = &v
	return s
}

func (s *CreateAccessKeyResponseAccessKey) SetCreateDate(v string) *CreateAccessKeyResponseAccessKey {
	s.CreateDate = &v
	return s
}

type SetPasswordPolicyRequest struct {
	MinimumPasswordLength      *int  `json:"MinimumPasswordLength" xml:"MinimumPasswordLength"`
	RequireLowercaseCharacters *bool `json:"RequireLowercaseCharacters" xml:"RequireLowercaseCharacters"`
	RequireUppercaseCharacters *bool `json:"RequireUppercaseCharacters" xml:"RequireUppercaseCharacters"`
	RequireNumbers             *bool `json:"RequireNumbers" xml:"RequireNumbers"`
	RequireSymbols             *bool `json:"RequireSymbols" xml:"RequireSymbols"`
	HardExpiry                 *bool `json:"HardExpiry" xml:"HardExpiry"`
	MaxPasswordAge             *int  `json:"MaxPasswordAge" xml:"MaxPasswordAge"`
	PasswordReusePrevention    *int  `json:"PasswordReusePrevention" xml:"PasswordReusePrevention"`
	MaxLoginAttemps            *int  `json:"MaxLoginAttemps" xml:"MaxLoginAttemps"`
}

func (s SetPasswordPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s SetPasswordPolicyRequest) GoString() string {
	return s.String()
}

func (s *SetPasswordPolicyRequest) SetMinimumPasswordLength(v int) *SetPasswordPolicyRequest {
	s.MinimumPasswordLength = &v
	return s
}

func (s *SetPasswordPolicyRequest) SetRequireLowercaseCharacters(v bool) *SetPasswordPolicyRequest {
	s.RequireLowercaseCharacters = &v
	return s
}

func (s *SetPasswordPolicyRequest) SetRequireUppercaseCharacters(v bool) *SetPasswordPolicyRequest {
	s.RequireUppercaseCharacters = &v
	return s
}

func (s *SetPasswordPolicyRequest) SetRequireNumbers(v bool) *SetPasswordPolicyRequest {
	s.RequireNumbers = &v
	return s
}

func (s *SetPasswordPolicyRequest) SetRequireSymbols(v bool) *SetPasswordPolicyRequest {
	s.RequireSymbols = &v
	return s
}

func (s *SetPasswordPolicyRequest) SetHardExpiry(v bool) *SetPasswordPolicyRequest {
	s.HardExpiry = &v
	return s
}

func (s *SetPasswordPolicyRequest) SetMaxPasswordAge(v int) *SetPasswordPolicyRequest {
	s.MaxPasswordAge = &v
	return s
}

func (s *SetPasswordPolicyRequest) SetPasswordReusePrevention(v int) *SetPasswordPolicyRequest {
	s.PasswordReusePrevention = &v
	return s
}

func (s *SetPasswordPolicyRequest) SetMaxLoginAttemps(v int) *SetPasswordPolicyRequest {
	s.MaxLoginAttemps = &v
	return s
}

type SetPasswordPolicyResponse struct {
	RequestId      *string                                  `json:"RequestId" xml:"RequestId" require:"true"`
	PasswordPolicy *SetPasswordPolicyResponsePasswordPolicy `json:"PasswordPolicy" xml:"PasswordPolicy" require:"true" type:"Struct"`
}

func (s SetPasswordPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s SetPasswordPolicyResponse) GoString() string {
	return s.String()
}

func (s *SetPasswordPolicyResponse) SetRequestId(v string) *SetPasswordPolicyResponse {
	s.RequestId = &v
	return s
}

func (s *SetPasswordPolicyResponse) SetPasswordPolicy(v *SetPasswordPolicyResponsePasswordPolicy) *SetPasswordPolicyResponse {
	s.PasswordPolicy = v
	return s
}

type SetPasswordPolicyResponsePasswordPolicy struct {
	MinimumPasswordLength      *int  `json:"MinimumPasswordLength" xml:"MinimumPasswordLength" require:"true"`
	RequireLowercaseCharacters *bool `json:"RequireLowercaseCharacters" xml:"RequireLowercaseCharacters" require:"true"`
	RequireUppercaseCharacters *bool `json:"RequireUppercaseCharacters" xml:"RequireUppercaseCharacters" require:"true"`
	RequireNumbers             *bool `json:"RequireNumbers" xml:"RequireNumbers" require:"true"`
	RequireSymbols             *bool `json:"RequireSymbols" xml:"RequireSymbols" require:"true"`
	HardExpiry                 *bool `json:"HardExpiry" xml:"HardExpiry" require:"true"`
	MaxPasswordAge             *int  `json:"MaxPasswordAge" xml:"MaxPasswordAge" require:"true"`
	PasswordReusePrevention    *int  `json:"PasswordReusePrevention" xml:"PasswordReusePrevention" require:"true"`
	MaxLoginAttemps            *int  `json:"MaxLoginAttemps" xml:"MaxLoginAttemps" require:"true"`
}

func (s SetPasswordPolicyResponsePasswordPolicy) String() string {
	return tea.Prettify(s)
}

func (s SetPasswordPolicyResponsePasswordPolicy) GoString() string {
	return s.String()
}

func (s *SetPasswordPolicyResponsePasswordPolicy) SetMinimumPasswordLength(v int) *SetPasswordPolicyResponsePasswordPolicy {
	s.MinimumPasswordLength = &v
	return s
}

func (s *SetPasswordPolicyResponsePasswordPolicy) SetRequireLowercaseCharacters(v bool) *SetPasswordPolicyResponsePasswordPolicy {
	s.RequireLowercaseCharacters = &v
	return s
}

func (s *SetPasswordPolicyResponsePasswordPolicy) SetRequireUppercaseCharacters(v bool) *SetPasswordPolicyResponsePasswordPolicy {
	s.RequireUppercaseCharacters = &v
	return s
}

func (s *SetPasswordPolicyResponsePasswordPolicy) SetRequireNumbers(v bool) *SetPasswordPolicyResponsePasswordPolicy {
	s.RequireNumbers = &v
	return s
}

func (s *SetPasswordPolicyResponsePasswordPolicy) SetRequireSymbols(v bool) *SetPasswordPolicyResponsePasswordPolicy {
	s.RequireSymbols = &v
	return s
}

func (s *SetPasswordPolicyResponsePasswordPolicy) SetHardExpiry(v bool) *SetPasswordPolicyResponsePasswordPolicy {
	s.HardExpiry = &v
	return s
}

func (s *SetPasswordPolicyResponsePasswordPolicy) SetMaxPasswordAge(v int) *SetPasswordPolicyResponsePasswordPolicy {
	s.MaxPasswordAge = &v
	return s
}

func (s *SetPasswordPolicyResponsePasswordPolicy) SetPasswordReusePrevention(v int) *SetPasswordPolicyResponsePasswordPolicy {
	s.PasswordReusePrevention = &v
	return s
}

func (s *SetPasswordPolicyResponsePasswordPolicy) SetMaxLoginAttemps(v int) *SetPasswordPolicyResponsePasswordPolicy {
	s.MaxLoginAttemps = &v
	return s
}

type SetAccountAliasRequest struct {
	AccountAlias *string `json:"AccountAlias" xml:"AccountAlias"`
}

func (s SetAccountAliasRequest) String() string {
	return tea.Prettify(s)
}

func (s SetAccountAliasRequest) GoString() string {
	return s.String()
}

func (s *SetAccountAliasRequest) SetAccountAlias(v string) *SetAccountAliasRequest {
	s.AccountAlias = &v
	return s
}

type SetAccountAliasResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s SetAccountAliasResponse) String() string {
	return tea.Prettify(s)
}

func (s SetAccountAliasResponse) GoString() string {
	return s.String()
}

func (s *SetAccountAliasResponse) SetRequestId(v string) *SetAccountAliasResponse {
	s.RequestId = &v
	return s
}

type GetPasswordPolicyRequest struct {
}

func (s GetPasswordPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s GetPasswordPolicyRequest) GoString() string {
	return s.String()
}

type GetPasswordPolicyResponse struct {
	RequestId      *string                                  `json:"RequestId" xml:"RequestId" require:"true"`
	PasswordPolicy *GetPasswordPolicyResponsePasswordPolicy `json:"PasswordPolicy" xml:"PasswordPolicy" require:"true" type:"Struct"`
}

func (s GetPasswordPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s GetPasswordPolicyResponse) GoString() string {
	return s.String()
}

func (s *GetPasswordPolicyResponse) SetRequestId(v string) *GetPasswordPolicyResponse {
	s.RequestId = &v
	return s
}

func (s *GetPasswordPolicyResponse) SetPasswordPolicy(v *GetPasswordPolicyResponsePasswordPolicy) *GetPasswordPolicyResponse {
	s.PasswordPolicy = v
	return s
}

type GetPasswordPolicyResponsePasswordPolicy struct {
	MinimumPasswordLength      *int  `json:"MinimumPasswordLength" xml:"MinimumPasswordLength" require:"true"`
	RequireLowercaseCharacters *bool `json:"RequireLowercaseCharacters" xml:"RequireLowercaseCharacters" require:"true"`
	RequireUppercaseCharacters *bool `json:"RequireUppercaseCharacters" xml:"RequireUppercaseCharacters" require:"true"`
	RequireNumbers             *bool `json:"RequireNumbers" xml:"RequireNumbers" require:"true"`
	RequireSymbols             *bool `json:"RequireSymbols" xml:"RequireSymbols" require:"true"`
	HardExpiry                 *bool `json:"HardExpiry" xml:"HardExpiry" require:"true"`
	MaxPasswordAge             *int  `json:"MaxPasswordAge" xml:"MaxPasswordAge" require:"true"`
	PasswordReusePrevention    *int  `json:"PasswordReusePrevention" xml:"PasswordReusePrevention" require:"true"`
	MaxLoginAttemps            *int  `json:"MaxLoginAttemps" xml:"MaxLoginAttemps" require:"true"`
}

func (s GetPasswordPolicyResponsePasswordPolicy) String() string {
	return tea.Prettify(s)
}

func (s GetPasswordPolicyResponsePasswordPolicy) GoString() string {
	return s.String()
}

func (s *GetPasswordPolicyResponsePasswordPolicy) SetMinimumPasswordLength(v int) *GetPasswordPolicyResponsePasswordPolicy {
	s.MinimumPasswordLength = &v
	return s
}

func (s *GetPasswordPolicyResponsePasswordPolicy) SetRequireLowercaseCharacters(v bool) *GetPasswordPolicyResponsePasswordPolicy {
	s.RequireLowercaseCharacters = &v
	return s
}

func (s *GetPasswordPolicyResponsePasswordPolicy) SetRequireUppercaseCharacters(v bool) *GetPasswordPolicyResponsePasswordPolicy {
	s.RequireUppercaseCharacters = &v
	return s
}

func (s *GetPasswordPolicyResponsePasswordPolicy) SetRequireNumbers(v bool) *GetPasswordPolicyResponsePasswordPolicy {
	s.RequireNumbers = &v
	return s
}

func (s *GetPasswordPolicyResponsePasswordPolicy) SetRequireSymbols(v bool) *GetPasswordPolicyResponsePasswordPolicy {
	s.RequireSymbols = &v
	return s
}

func (s *GetPasswordPolicyResponsePasswordPolicy) SetHardExpiry(v bool) *GetPasswordPolicyResponsePasswordPolicy {
	s.HardExpiry = &v
	return s
}

func (s *GetPasswordPolicyResponsePasswordPolicy) SetMaxPasswordAge(v int) *GetPasswordPolicyResponsePasswordPolicy {
	s.MaxPasswordAge = &v
	return s
}

func (s *GetPasswordPolicyResponsePasswordPolicy) SetPasswordReusePrevention(v int) *GetPasswordPolicyResponsePasswordPolicy {
	s.PasswordReusePrevention = &v
	return s
}

func (s *GetPasswordPolicyResponsePasswordPolicy) SetMaxLoginAttemps(v int) *GetPasswordPolicyResponsePasswordPolicy {
	s.MaxLoginAttemps = &v
	return s
}

type GetAccountAliasRequest struct {
}

func (s GetAccountAliasRequest) String() string {
	return tea.Prettify(s)
}

func (s GetAccountAliasRequest) GoString() string {
	return s.String()
}

type GetAccountAliasResponse struct {
	RequestId    *string `json:"RequestId" xml:"RequestId" require:"true"`
	AccountAlias *string `json:"AccountAlias" xml:"AccountAlias" require:"true"`
}

func (s GetAccountAliasResponse) String() string {
	return tea.Prettify(s)
}

func (s GetAccountAliasResponse) GoString() string {
	return s.String()
}

func (s *GetAccountAliasResponse) SetRequestId(v string) *GetAccountAliasResponse {
	s.RequestId = &v
	return s
}

func (s *GetAccountAliasResponse) SetAccountAlias(v string) *GetAccountAliasResponse {
	s.AccountAlias = &v
	return s
}

type ClearAccountAliasRequest struct {
}

func (s ClearAccountAliasRequest) String() string {
	return tea.Prettify(s)
}

func (s ClearAccountAliasRequest) GoString() string {
	return s.String()
}

type ClearAccountAliasResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s ClearAccountAliasResponse) String() string {
	return tea.Prettify(s)
}

func (s ClearAccountAliasResponse) GoString() string {
	return s.String()
}

func (s *ClearAccountAliasResponse) SetRequestId(v string) *ClearAccountAliasResponse {
	s.RequestId = &v
	return s
}

type SetDefaultPolicyVersionRequest struct {
	PolicyName *string `json:"PolicyName" xml:"PolicyName"`
	VersionId  *string `json:"VersionId" xml:"VersionId"`
}

func (s SetDefaultPolicyVersionRequest) String() string {
	return tea.Prettify(s)
}

func (s SetDefaultPolicyVersionRequest) GoString() string {
	return s.String()
}

func (s *SetDefaultPolicyVersionRequest) SetPolicyName(v string) *SetDefaultPolicyVersionRequest {
	s.PolicyName = &v
	return s
}

func (s *SetDefaultPolicyVersionRequest) SetVersionId(v string) *SetDefaultPolicyVersionRequest {
	s.VersionId = &v
	return s
}

type SetDefaultPolicyVersionResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s SetDefaultPolicyVersionResponse) String() string {
	return tea.Prettify(s)
}

func (s SetDefaultPolicyVersionResponse) GoString() string {
	return s.String()
}

func (s *SetDefaultPolicyVersionResponse) SetRequestId(v string) *SetDefaultPolicyVersionResponse {
	s.RequestId = &v
	return s
}

type ListPolicyVersionsRequest struct {
	PolicyType *string `json:"PolicyType" xml:"PolicyType"`
	PolicyName *string `json:"PolicyName" xml:"PolicyName"`
}

func (s ListPolicyVersionsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListPolicyVersionsRequest) GoString() string {
	return s.String()
}

func (s *ListPolicyVersionsRequest) SetPolicyType(v string) *ListPolicyVersionsRequest {
	s.PolicyType = &v
	return s
}

func (s *ListPolicyVersionsRequest) SetPolicyName(v string) *ListPolicyVersionsRequest {
	s.PolicyName = &v
	return s
}

type ListPolicyVersionsResponse struct {
	RequestId      *string                                   `json:"RequestId" xml:"RequestId" require:"true"`
	PolicyVersions *ListPolicyVersionsResponsePolicyVersions `json:"PolicyVersions" xml:"PolicyVersions" require:"true" type:"Struct"`
}

func (s ListPolicyVersionsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListPolicyVersionsResponse) GoString() string {
	return s.String()
}

func (s *ListPolicyVersionsResponse) SetRequestId(v string) *ListPolicyVersionsResponse {
	s.RequestId = &v
	return s
}

func (s *ListPolicyVersionsResponse) SetPolicyVersions(v *ListPolicyVersionsResponsePolicyVersions) *ListPolicyVersionsResponse {
	s.PolicyVersions = v
	return s
}

type ListPolicyVersionsResponsePolicyVersions struct {
	PolicyVersion []*ListPolicyVersionsResponsePolicyVersionsPolicyVersion `json:"PolicyVersion" xml:"PolicyVersion" require:"true" type:"Repeated"`
}

func (s ListPolicyVersionsResponsePolicyVersions) String() string {
	return tea.Prettify(s)
}

func (s ListPolicyVersionsResponsePolicyVersions) GoString() string {
	return s.String()
}

func (s *ListPolicyVersionsResponsePolicyVersions) SetPolicyVersion(v []*ListPolicyVersionsResponsePolicyVersionsPolicyVersion) *ListPolicyVersionsResponsePolicyVersions {
	s.PolicyVersion = v
	return s
}

type ListPolicyVersionsResponsePolicyVersionsPolicyVersion struct {
	VersionId        *string `json:"VersionId" xml:"VersionId" require:"true"`
	IsDefaultVersion *bool   `json:"IsDefaultVersion" xml:"IsDefaultVersion" require:"true"`
	PolicyDocument   *string `json:"PolicyDocument" xml:"PolicyDocument" require:"true"`
	CreateDate       *string `json:"CreateDate" xml:"CreateDate" require:"true"`
}

func (s ListPolicyVersionsResponsePolicyVersionsPolicyVersion) String() string {
	return tea.Prettify(s)
}

func (s ListPolicyVersionsResponsePolicyVersionsPolicyVersion) GoString() string {
	return s.String()
}

func (s *ListPolicyVersionsResponsePolicyVersionsPolicyVersion) SetVersionId(v string) *ListPolicyVersionsResponsePolicyVersionsPolicyVersion {
	s.VersionId = &v
	return s
}

func (s *ListPolicyVersionsResponsePolicyVersionsPolicyVersion) SetIsDefaultVersion(v bool) *ListPolicyVersionsResponsePolicyVersionsPolicyVersion {
	s.IsDefaultVersion = &v
	return s
}

func (s *ListPolicyVersionsResponsePolicyVersionsPolicyVersion) SetPolicyDocument(v string) *ListPolicyVersionsResponsePolicyVersionsPolicyVersion {
	s.PolicyDocument = &v
	return s
}

func (s *ListPolicyVersionsResponsePolicyVersionsPolicyVersion) SetCreateDate(v string) *ListPolicyVersionsResponsePolicyVersionsPolicyVersion {
	s.CreateDate = &v
	return s
}

type GetPolicyVersionRequest struct {
	PolicyType *string `json:"PolicyType" xml:"PolicyType"`
	PolicyName *string `json:"PolicyName" xml:"PolicyName"`
	VersionId  *string `json:"VersionId" xml:"VersionId"`
}

func (s GetPolicyVersionRequest) String() string {
	return tea.Prettify(s)
}

func (s GetPolicyVersionRequest) GoString() string {
	return s.String()
}

func (s *GetPolicyVersionRequest) SetPolicyType(v string) *GetPolicyVersionRequest {
	s.PolicyType = &v
	return s
}

func (s *GetPolicyVersionRequest) SetPolicyName(v string) *GetPolicyVersionRequest {
	s.PolicyName = &v
	return s
}

func (s *GetPolicyVersionRequest) SetVersionId(v string) *GetPolicyVersionRequest {
	s.VersionId = &v
	return s
}

type GetPolicyVersionResponse struct {
	RequestId     *string                                `json:"RequestId" xml:"RequestId" require:"true"`
	PolicyVersion *GetPolicyVersionResponsePolicyVersion `json:"PolicyVersion" xml:"PolicyVersion" require:"true" type:"Struct"`
}

func (s GetPolicyVersionResponse) String() string {
	return tea.Prettify(s)
}

func (s GetPolicyVersionResponse) GoString() string {
	return s.String()
}

func (s *GetPolicyVersionResponse) SetRequestId(v string) *GetPolicyVersionResponse {
	s.RequestId = &v
	return s
}

func (s *GetPolicyVersionResponse) SetPolicyVersion(v *GetPolicyVersionResponsePolicyVersion) *GetPolicyVersionResponse {
	s.PolicyVersion = v
	return s
}

type GetPolicyVersionResponsePolicyVersion struct {
	VersionId        *string `json:"VersionId" xml:"VersionId" require:"true"`
	IsDefaultVersion *bool   `json:"IsDefaultVersion" xml:"IsDefaultVersion" require:"true"`
	PolicyDocument   *string `json:"PolicyDocument" xml:"PolicyDocument" require:"true"`
	CreateDate       *string `json:"CreateDate" xml:"CreateDate" require:"true"`
}

func (s GetPolicyVersionResponsePolicyVersion) String() string {
	return tea.Prettify(s)
}

func (s GetPolicyVersionResponsePolicyVersion) GoString() string {
	return s.String()
}

func (s *GetPolicyVersionResponsePolicyVersion) SetVersionId(v string) *GetPolicyVersionResponsePolicyVersion {
	s.VersionId = &v
	return s
}

func (s *GetPolicyVersionResponsePolicyVersion) SetIsDefaultVersion(v bool) *GetPolicyVersionResponsePolicyVersion {
	s.IsDefaultVersion = &v
	return s
}

func (s *GetPolicyVersionResponsePolicyVersion) SetPolicyDocument(v string) *GetPolicyVersionResponsePolicyVersion {
	s.PolicyDocument = &v
	return s
}

func (s *GetPolicyVersionResponsePolicyVersion) SetCreateDate(v string) *GetPolicyVersionResponsePolicyVersion {
	s.CreateDate = &v
	return s
}

type DeletePolicyVersionRequest struct {
	PolicyName *string `json:"PolicyName" xml:"PolicyName"`
	VersionId  *string `json:"VersionId" xml:"VersionId"`
}

func (s DeletePolicyVersionRequest) String() string {
	return tea.Prettify(s)
}

func (s DeletePolicyVersionRequest) GoString() string {
	return s.String()
}

func (s *DeletePolicyVersionRequest) SetPolicyName(v string) *DeletePolicyVersionRequest {
	s.PolicyName = &v
	return s
}

func (s *DeletePolicyVersionRequest) SetVersionId(v string) *DeletePolicyVersionRequest {
	s.VersionId = &v
	return s
}

type DeletePolicyVersionResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeletePolicyVersionResponse) String() string {
	return tea.Prettify(s)
}

func (s DeletePolicyVersionResponse) GoString() string {
	return s.String()
}

func (s *DeletePolicyVersionResponse) SetRequestId(v string) *DeletePolicyVersionResponse {
	s.RequestId = &v
	return s
}

type CreatePolicyVersionRequest struct {
	PolicyName     *string `json:"PolicyName" xml:"PolicyName"`
	PolicyDocument *string `json:"PolicyDocument" xml:"PolicyDocument"`
	SetAsDefault   *bool   `json:"SetAsDefault" xml:"SetAsDefault"`
	RotateStrategy *string `json:"RotateStrategy" xml:"RotateStrategy"`
}

func (s CreatePolicyVersionRequest) String() string {
	return tea.Prettify(s)
}

func (s CreatePolicyVersionRequest) GoString() string {
	return s.String()
}

func (s *CreatePolicyVersionRequest) SetPolicyName(v string) *CreatePolicyVersionRequest {
	s.PolicyName = &v
	return s
}

func (s *CreatePolicyVersionRequest) SetPolicyDocument(v string) *CreatePolicyVersionRequest {
	s.PolicyDocument = &v
	return s
}

func (s *CreatePolicyVersionRequest) SetSetAsDefault(v bool) *CreatePolicyVersionRequest {
	s.SetAsDefault = &v
	return s
}

func (s *CreatePolicyVersionRequest) SetRotateStrategy(v string) *CreatePolicyVersionRequest {
	s.RotateStrategy = &v
	return s
}

type CreatePolicyVersionResponse struct {
	RequestId     *string                                   `json:"RequestId" xml:"RequestId" require:"true"`
	PolicyVersion *CreatePolicyVersionResponsePolicyVersion `json:"PolicyVersion" xml:"PolicyVersion" require:"true" type:"Struct"`
}

func (s CreatePolicyVersionResponse) String() string {
	return tea.Prettify(s)
}

func (s CreatePolicyVersionResponse) GoString() string {
	return s.String()
}

func (s *CreatePolicyVersionResponse) SetRequestId(v string) *CreatePolicyVersionResponse {
	s.RequestId = &v
	return s
}

func (s *CreatePolicyVersionResponse) SetPolicyVersion(v *CreatePolicyVersionResponsePolicyVersion) *CreatePolicyVersionResponse {
	s.PolicyVersion = v
	return s
}

type CreatePolicyVersionResponsePolicyVersion struct {
	VersionId        *string `json:"VersionId" xml:"VersionId" require:"true"`
	IsDefaultVersion *bool   `json:"IsDefaultVersion" xml:"IsDefaultVersion" require:"true"`
	PolicyDocument   *string `json:"PolicyDocument" xml:"PolicyDocument" require:"true"`
	CreateDate       *string `json:"CreateDate" xml:"CreateDate" require:"true"`
}

func (s CreatePolicyVersionResponsePolicyVersion) String() string {
	return tea.Prettify(s)
}

func (s CreatePolicyVersionResponsePolicyVersion) GoString() string {
	return s.String()
}

func (s *CreatePolicyVersionResponsePolicyVersion) SetVersionId(v string) *CreatePolicyVersionResponsePolicyVersion {
	s.VersionId = &v
	return s
}

func (s *CreatePolicyVersionResponsePolicyVersion) SetIsDefaultVersion(v bool) *CreatePolicyVersionResponsePolicyVersion {
	s.IsDefaultVersion = &v
	return s
}

func (s *CreatePolicyVersionResponsePolicyVersion) SetPolicyDocument(v string) *CreatePolicyVersionResponsePolicyVersion {
	s.PolicyDocument = &v
	return s
}

func (s *CreatePolicyVersionResponsePolicyVersion) SetCreateDate(v string) *CreatePolicyVersionResponsePolicyVersion {
	s.CreateDate = &v
	return s
}

type ListPoliciesForUserRequest struct {
	UserName *string `json:"UserName" xml:"UserName"`
}

func (s ListPoliciesForUserRequest) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesForUserRequest) GoString() string {
	return s.String()
}

func (s *ListPoliciesForUserRequest) SetUserName(v string) *ListPoliciesForUserRequest {
	s.UserName = &v
	return s
}

type ListPoliciesForUserResponse struct {
	RequestId *string                              `json:"RequestId" xml:"RequestId" require:"true"`
	Policies  *ListPoliciesForUserResponsePolicies `json:"Policies" xml:"Policies" require:"true" type:"Struct"`
}

func (s ListPoliciesForUserResponse) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesForUserResponse) GoString() string {
	return s.String()
}

func (s *ListPoliciesForUserResponse) SetRequestId(v string) *ListPoliciesForUserResponse {
	s.RequestId = &v
	return s
}

func (s *ListPoliciesForUserResponse) SetPolicies(v *ListPoliciesForUserResponsePolicies) *ListPoliciesForUserResponse {
	s.Policies = v
	return s
}

type ListPoliciesForUserResponsePolicies struct {
	Policy []*ListPoliciesForUserResponsePoliciesPolicy `json:"Policy" xml:"Policy" require:"true" type:"Repeated"`
}

func (s ListPoliciesForUserResponsePolicies) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesForUserResponsePolicies) GoString() string {
	return s.String()
}

func (s *ListPoliciesForUserResponsePolicies) SetPolicy(v []*ListPoliciesForUserResponsePoliciesPolicy) *ListPoliciesForUserResponsePolicies {
	s.Policy = v
	return s
}

type ListPoliciesForUserResponsePoliciesPolicy struct {
	PolicyName     *string `json:"PolicyName" xml:"PolicyName" require:"true"`
	PolicyType     *string `json:"PolicyType" xml:"PolicyType" require:"true"`
	Description    *string `json:"Description" xml:"Description" require:"true"`
	DefaultVersion *string `json:"DefaultVersion" xml:"DefaultVersion" require:"true"`
	AttachDate     *string `json:"AttachDate" xml:"AttachDate" require:"true"`
}

func (s ListPoliciesForUserResponsePoliciesPolicy) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesForUserResponsePoliciesPolicy) GoString() string {
	return s.String()
}

func (s *ListPoliciesForUserResponsePoliciesPolicy) SetPolicyName(v string) *ListPoliciesForUserResponsePoliciesPolicy {
	s.PolicyName = &v
	return s
}

func (s *ListPoliciesForUserResponsePoliciesPolicy) SetPolicyType(v string) *ListPoliciesForUserResponsePoliciesPolicy {
	s.PolicyType = &v
	return s
}

func (s *ListPoliciesForUserResponsePoliciesPolicy) SetDescription(v string) *ListPoliciesForUserResponsePoliciesPolicy {
	s.Description = &v
	return s
}

func (s *ListPoliciesForUserResponsePoliciesPolicy) SetDefaultVersion(v string) *ListPoliciesForUserResponsePoliciesPolicy {
	s.DefaultVersion = &v
	return s
}

func (s *ListPoliciesForUserResponsePoliciesPolicy) SetAttachDate(v string) *ListPoliciesForUserResponsePoliciesPolicy {
	s.AttachDate = &v
	return s
}

type ListPoliciesForGroupRequest struct {
	GroupName *string `json:"GroupName" xml:"GroupName"`
}

func (s ListPoliciesForGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesForGroupRequest) GoString() string {
	return s.String()
}

func (s *ListPoliciesForGroupRequest) SetGroupName(v string) *ListPoliciesForGroupRequest {
	s.GroupName = &v
	return s
}

type ListPoliciesForGroupResponse struct {
	RequestId *string                               `json:"RequestId" xml:"RequestId" require:"true"`
	Policies  *ListPoliciesForGroupResponsePolicies `json:"Policies" xml:"Policies" require:"true" type:"Struct"`
}

func (s ListPoliciesForGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesForGroupResponse) GoString() string {
	return s.String()
}

func (s *ListPoliciesForGroupResponse) SetRequestId(v string) *ListPoliciesForGroupResponse {
	s.RequestId = &v
	return s
}

func (s *ListPoliciesForGroupResponse) SetPolicies(v *ListPoliciesForGroupResponsePolicies) *ListPoliciesForGroupResponse {
	s.Policies = v
	return s
}

type ListPoliciesForGroupResponsePolicies struct {
	Policy []*ListPoliciesForGroupResponsePoliciesPolicy `json:"Policy" xml:"Policy" require:"true" type:"Repeated"`
}

func (s ListPoliciesForGroupResponsePolicies) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesForGroupResponsePolicies) GoString() string {
	return s.String()
}

func (s *ListPoliciesForGroupResponsePolicies) SetPolicy(v []*ListPoliciesForGroupResponsePoliciesPolicy) *ListPoliciesForGroupResponsePolicies {
	s.Policy = v
	return s
}

type ListPoliciesForGroupResponsePoliciesPolicy struct {
	PolicyName     *string `json:"PolicyName" xml:"PolicyName" require:"true"`
	PolicyType     *string `json:"PolicyType" xml:"PolicyType" require:"true"`
	Description    *string `json:"Description" xml:"Description" require:"true"`
	DefaultVersion *string `json:"DefaultVersion" xml:"DefaultVersion" require:"true"`
	AttachDate     *string `json:"AttachDate" xml:"AttachDate" require:"true"`
}

func (s ListPoliciesForGroupResponsePoliciesPolicy) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesForGroupResponsePoliciesPolicy) GoString() string {
	return s.String()
}

func (s *ListPoliciesForGroupResponsePoliciesPolicy) SetPolicyName(v string) *ListPoliciesForGroupResponsePoliciesPolicy {
	s.PolicyName = &v
	return s
}

func (s *ListPoliciesForGroupResponsePoliciesPolicy) SetPolicyType(v string) *ListPoliciesForGroupResponsePoliciesPolicy {
	s.PolicyType = &v
	return s
}

func (s *ListPoliciesForGroupResponsePoliciesPolicy) SetDescription(v string) *ListPoliciesForGroupResponsePoliciesPolicy {
	s.Description = &v
	return s
}

func (s *ListPoliciesForGroupResponsePoliciesPolicy) SetDefaultVersion(v string) *ListPoliciesForGroupResponsePoliciesPolicy {
	s.DefaultVersion = &v
	return s
}

func (s *ListPoliciesForGroupResponsePoliciesPolicy) SetAttachDate(v string) *ListPoliciesForGroupResponsePoliciesPolicy {
	s.AttachDate = &v
	return s
}

type ListEntitiesForPolicyRequest struct {
	PolicyType *string `json:"PolicyType" xml:"PolicyType"`
	PolicyName *string `json:"PolicyName" xml:"PolicyName"`
}

func (s ListEntitiesForPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s ListEntitiesForPolicyRequest) GoString() string {
	return s.String()
}

func (s *ListEntitiesForPolicyRequest) SetPolicyType(v string) *ListEntitiesForPolicyRequest {
	s.PolicyType = &v
	return s
}

func (s *ListEntitiesForPolicyRequest) SetPolicyName(v string) *ListEntitiesForPolicyRequest {
	s.PolicyName = &v
	return s
}

type ListEntitiesForPolicyResponse struct {
	RequestId *string                              `json:"RequestId" xml:"RequestId" require:"true"`
	Groups    *ListEntitiesForPolicyResponseGroups `json:"Groups" xml:"Groups" require:"true" type:"Struct"`
	Users     *ListEntitiesForPolicyResponseUsers  `json:"Users" xml:"Users" require:"true" type:"Struct"`
	Roles     *ListEntitiesForPolicyResponseRoles  `json:"Roles" xml:"Roles" require:"true" type:"Struct"`
}

func (s ListEntitiesForPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s ListEntitiesForPolicyResponse) GoString() string {
	return s.String()
}

func (s *ListEntitiesForPolicyResponse) SetRequestId(v string) *ListEntitiesForPolicyResponse {
	s.RequestId = &v
	return s
}

func (s *ListEntitiesForPolicyResponse) SetGroups(v *ListEntitiesForPolicyResponseGroups) *ListEntitiesForPolicyResponse {
	s.Groups = v
	return s
}

func (s *ListEntitiesForPolicyResponse) SetUsers(v *ListEntitiesForPolicyResponseUsers) *ListEntitiesForPolicyResponse {
	s.Users = v
	return s
}

func (s *ListEntitiesForPolicyResponse) SetRoles(v *ListEntitiesForPolicyResponseRoles) *ListEntitiesForPolicyResponse {
	s.Roles = v
	return s
}

type ListEntitiesForPolicyResponseGroups struct {
	Group []*ListEntitiesForPolicyResponseGroupsGroup `json:"Group" xml:"Group" require:"true" type:"Repeated"`
}

func (s ListEntitiesForPolicyResponseGroups) String() string {
	return tea.Prettify(s)
}

func (s ListEntitiesForPolicyResponseGroups) GoString() string {
	return s.String()
}

func (s *ListEntitiesForPolicyResponseGroups) SetGroup(v []*ListEntitiesForPolicyResponseGroupsGroup) *ListEntitiesForPolicyResponseGroups {
	s.Group = v
	return s
}

type ListEntitiesForPolicyResponseGroupsGroup struct {
	GroupName  *string `json:"GroupName" xml:"GroupName" require:"true"`
	Comments   *string `json:"Comments" xml:"Comments" require:"true"`
	AttachDate *string `json:"AttachDate" xml:"AttachDate" require:"true"`
}

func (s ListEntitiesForPolicyResponseGroupsGroup) String() string {
	return tea.Prettify(s)
}

func (s ListEntitiesForPolicyResponseGroupsGroup) GoString() string {
	return s.String()
}

func (s *ListEntitiesForPolicyResponseGroupsGroup) SetGroupName(v string) *ListEntitiesForPolicyResponseGroupsGroup {
	s.GroupName = &v
	return s
}

func (s *ListEntitiesForPolicyResponseGroupsGroup) SetComments(v string) *ListEntitiesForPolicyResponseGroupsGroup {
	s.Comments = &v
	return s
}

func (s *ListEntitiesForPolicyResponseGroupsGroup) SetAttachDate(v string) *ListEntitiesForPolicyResponseGroupsGroup {
	s.AttachDate = &v
	return s
}

type ListEntitiesForPolicyResponseUsers struct {
	User []*ListEntitiesForPolicyResponseUsersUser `json:"User" xml:"User" require:"true" type:"Repeated"`
}

func (s ListEntitiesForPolicyResponseUsers) String() string {
	return tea.Prettify(s)
}

func (s ListEntitiesForPolicyResponseUsers) GoString() string {
	return s.String()
}

func (s *ListEntitiesForPolicyResponseUsers) SetUser(v []*ListEntitiesForPolicyResponseUsersUser) *ListEntitiesForPolicyResponseUsers {
	s.User = v
	return s
}

type ListEntitiesForPolicyResponseUsersUser struct {
	UserId      *string `json:"UserId" xml:"UserId" require:"true"`
	UserName    *string `json:"UserName" xml:"UserName" require:"true"`
	DisplayName *string `json:"DisplayName" xml:"DisplayName" require:"true"`
	AttachDate  *string `json:"AttachDate" xml:"AttachDate" require:"true"`
}

func (s ListEntitiesForPolicyResponseUsersUser) String() string {
	return tea.Prettify(s)
}

func (s ListEntitiesForPolicyResponseUsersUser) GoString() string {
	return s.String()
}

func (s *ListEntitiesForPolicyResponseUsersUser) SetUserId(v string) *ListEntitiesForPolicyResponseUsersUser {
	s.UserId = &v
	return s
}

func (s *ListEntitiesForPolicyResponseUsersUser) SetUserName(v string) *ListEntitiesForPolicyResponseUsersUser {
	s.UserName = &v
	return s
}

func (s *ListEntitiesForPolicyResponseUsersUser) SetDisplayName(v string) *ListEntitiesForPolicyResponseUsersUser {
	s.DisplayName = &v
	return s
}

func (s *ListEntitiesForPolicyResponseUsersUser) SetAttachDate(v string) *ListEntitiesForPolicyResponseUsersUser {
	s.AttachDate = &v
	return s
}

type ListEntitiesForPolicyResponseRoles struct {
	Role []*ListEntitiesForPolicyResponseRolesRole `json:"Role" xml:"Role" require:"true" type:"Repeated"`
}

func (s ListEntitiesForPolicyResponseRoles) String() string {
	return tea.Prettify(s)
}

func (s ListEntitiesForPolicyResponseRoles) GoString() string {
	return s.String()
}

func (s *ListEntitiesForPolicyResponseRoles) SetRole(v []*ListEntitiesForPolicyResponseRolesRole) *ListEntitiesForPolicyResponseRoles {
	s.Role = v
	return s
}

type ListEntitiesForPolicyResponseRolesRole struct {
	RoleId      *string `json:"RoleId" xml:"RoleId" require:"true"`
	RoleName    *string `json:"RoleName" xml:"RoleName" require:"true"`
	Arn         *string `json:"Arn" xml:"Arn" require:"true"`
	Description *string `json:"Description" xml:"Description" require:"true"`
	AttachDate  *string `json:"AttachDate" xml:"AttachDate" require:"true"`
}

func (s ListEntitiesForPolicyResponseRolesRole) String() string {
	return tea.Prettify(s)
}

func (s ListEntitiesForPolicyResponseRolesRole) GoString() string {
	return s.String()
}

func (s *ListEntitiesForPolicyResponseRolesRole) SetRoleId(v string) *ListEntitiesForPolicyResponseRolesRole {
	s.RoleId = &v
	return s
}

func (s *ListEntitiesForPolicyResponseRolesRole) SetRoleName(v string) *ListEntitiesForPolicyResponseRolesRole {
	s.RoleName = &v
	return s
}

func (s *ListEntitiesForPolicyResponseRolesRole) SetArn(v string) *ListEntitiesForPolicyResponseRolesRole {
	s.Arn = &v
	return s
}

func (s *ListEntitiesForPolicyResponseRolesRole) SetDescription(v string) *ListEntitiesForPolicyResponseRolesRole {
	s.Description = &v
	return s
}

func (s *ListEntitiesForPolicyResponseRolesRole) SetAttachDate(v string) *ListEntitiesForPolicyResponseRolesRole {
	s.AttachDate = &v
	return s
}

type DetachPolicyFromUserRequest struct {
	PolicyType *string `json:"PolicyType" xml:"PolicyType"`
	PolicyName *string `json:"PolicyName" xml:"PolicyName"`
	UserName   *string `json:"UserName" xml:"UserName"`
}

func (s DetachPolicyFromUserRequest) String() string {
	return tea.Prettify(s)
}

func (s DetachPolicyFromUserRequest) GoString() string {
	return s.String()
}

func (s *DetachPolicyFromUserRequest) SetPolicyType(v string) *DetachPolicyFromUserRequest {
	s.PolicyType = &v
	return s
}

func (s *DetachPolicyFromUserRequest) SetPolicyName(v string) *DetachPolicyFromUserRequest {
	s.PolicyName = &v
	return s
}

func (s *DetachPolicyFromUserRequest) SetUserName(v string) *DetachPolicyFromUserRequest {
	s.UserName = &v
	return s
}

type DetachPolicyFromUserResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DetachPolicyFromUserResponse) String() string {
	return tea.Prettify(s)
}

func (s DetachPolicyFromUserResponse) GoString() string {
	return s.String()
}

func (s *DetachPolicyFromUserResponse) SetRequestId(v string) *DetachPolicyFromUserResponse {
	s.RequestId = &v
	return s
}

type DetachPolicyFromGroupRequest struct {
	PolicyType *string `json:"PolicyType" xml:"PolicyType"`
	PolicyName *string `json:"PolicyName" xml:"PolicyName"`
	GroupName  *string `json:"GroupName" xml:"GroupName"`
}

func (s DetachPolicyFromGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DetachPolicyFromGroupRequest) GoString() string {
	return s.String()
}

func (s *DetachPolicyFromGroupRequest) SetPolicyType(v string) *DetachPolicyFromGroupRequest {
	s.PolicyType = &v
	return s
}

func (s *DetachPolicyFromGroupRequest) SetPolicyName(v string) *DetachPolicyFromGroupRequest {
	s.PolicyName = &v
	return s
}

func (s *DetachPolicyFromGroupRequest) SetGroupName(v string) *DetachPolicyFromGroupRequest {
	s.GroupName = &v
	return s
}

type DetachPolicyFromGroupResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DetachPolicyFromGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DetachPolicyFromGroupResponse) GoString() string {
	return s.String()
}

func (s *DetachPolicyFromGroupResponse) SetRequestId(v string) *DetachPolicyFromGroupResponse {
	s.RequestId = &v
	return s
}

type AttachPolicyToUserRequest struct {
	PolicyType *string `json:"PolicyType" xml:"PolicyType"`
	PolicyName *string `json:"PolicyName" xml:"PolicyName"`
	UserName   *string `json:"UserName" xml:"UserName"`
}

func (s AttachPolicyToUserRequest) String() string {
	return tea.Prettify(s)
}

func (s AttachPolicyToUserRequest) GoString() string {
	return s.String()
}

func (s *AttachPolicyToUserRequest) SetPolicyType(v string) *AttachPolicyToUserRequest {
	s.PolicyType = &v
	return s
}

func (s *AttachPolicyToUserRequest) SetPolicyName(v string) *AttachPolicyToUserRequest {
	s.PolicyName = &v
	return s
}

func (s *AttachPolicyToUserRequest) SetUserName(v string) *AttachPolicyToUserRequest {
	s.UserName = &v
	return s
}

type AttachPolicyToUserResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s AttachPolicyToUserResponse) String() string {
	return tea.Prettify(s)
}

func (s AttachPolicyToUserResponse) GoString() string {
	return s.String()
}

func (s *AttachPolicyToUserResponse) SetRequestId(v string) *AttachPolicyToUserResponse {
	s.RequestId = &v
	return s
}

type AttachPolicyToGroupRequest struct {
	PolicyType *string `json:"PolicyType" xml:"PolicyType"`
	PolicyName *string `json:"PolicyName" xml:"PolicyName"`
	GroupName  *string `json:"GroupName" xml:"GroupName"`
}

func (s AttachPolicyToGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s AttachPolicyToGroupRequest) GoString() string {
	return s.String()
}

func (s *AttachPolicyToGroupRequest) SetPolicyType(v string) *AttachPolicyToGroupRequest {
	s.PolicyType = &v
	return s
}

func (s *AttachPolicyToGroupRequest) SetPolicyName(v string) *AttachPolicyToGroupRequest {
	s.PolicyName = &v
	return s
}

func (s *AttachPolicyToGroupRequest) SetGroupName(v string) *AttachPolicyToGroupRequest {
	s.GroupName = &v
	return s
}

type AttachPolicyToGroupResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s AttachPolicyToGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s AttachPolicyToGroupResponse) GoString() string {
	return s.String()
}

func (s *AttachPolicyToGroupResponse) SetRequestId(v string) *AttachPolicyToGroupResponse {
	s.RequestId = &v
	return s
}

type ListPoliciesRequest struct {
	PolicyType *string `json:"PolicyType" xml:"PolicyType"`
	Marker     *string `json:"Marker" xml:"Marker"`
	MaxItems   *int    `json:"MaxItems" xml:"MaxItems"`
}

func (s ListPoliciesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesRequest) GoString() string {
	return s.String()
}

func (s *ListPoliciesRequest) SetPolicyType(v string) *ListPoliciesRequest {
	s.PolicyType = &v
	return s
}

func (s *ListPoliciesRequest) SetMarker(v string) *ListPoliciesRequest {
	s.Marker = &v
	return s
}

func (s *ListPoliciesRequest) SetMaxItems(v int) *ListPoliciesRequest {
	s.MaxItems = &v
	return s
}

type ListPoliciesResponse struct {
	RequestId   *string                       `json:"RequestId" xml:"RequestId" require:"true"`
	IsTruncated *bool                         `json:"IsTruncated" xml:"IsTruncated" require:"true"`
	Marker      *string                       `json:"Marker" xml:"Marker" require:"true"`
	Policies    *ListPoliciesResponsePolicies `json:"Policies" xml:"Policies" require:"true" type:"Struct"`
}

func (s ListPoliciesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesResponse) GoString() string {
	return s.String()
}

func (s *ListPoliciesResponse) SetRequestId(v string) *ListPoliciesResponse {
	s.RequestId = &v
	return s
}

func (s *ListPoliciesResponse) SetIsTruncated(v bool) *ListPoliciesResponse {
	s.IsTruncated = &v
	return s
}

func (s *ListPoliciesResponse) SetMarker(v string) *ListPoliciesResponse {
	s.Marker = &v
	return s
}

func (s *ListPoliciesResponse) SetPolicies(v *ListPoliciesResponsePolicies) *ListPoliciesResponse {
	s.Policies = v
	return s
}

type ListPoliciesResponsePolicies struct {
	Policy []*ListPoliciesResponsePoliciesPolicy `json:"Policy" xml:"Policy" require:"true" type:"Repeated"`
}

func (s ListPoliciesResponsePolicies) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesResponsePolicies) GoString() string {
	return s.String()
}

func (s *ListPoliciesResponsePolicies) SetPolicy(v []*ListPoliciesResponsePoliciesPolicy) *ListPoliciesResponsePolicies {
	s.Policy = v
	return s
}

type ListPoliciesResponsePoliciesPolicy struct {
	PolicyName      *string `json:"PolicyName" xml:"PolicyName" require:"true"`
	PolicyType      *string `json:"PolicyType" xml:"PolicyType" require:"true"`
	Description     *string `json:"Description" xml:"Description" require:"true"`
	DefaultVersion  *string `json:"DefaultVersion" xml:"DefaultVersion" require:"true"`
	CreateDate      *string `json:"CreateDate" xml:"CreateDate" require:"true"`
	UpdateDate      *string `json:"UpdateDate" xml:"UpdateDate" require:"true"`
	AttachmentCount *int    `json:"AttachmentCount" xml:"AttachmentCount" require:"true"`
}

func (s ListPoliciesResponsePoliciesPolicy) String() string {
	return tea.Prettify(s)
}

func (s ListPoliciesResponsePoliciesPolicy) GoString() string {
	return s.String()
}

func (s *ListPoliciesResponsePoliciesPolicy) SetPolicyName(v string) *ListPoliciesResponsePoliciesPolicy {
	s.PolicyName = &v
	return s
}

func (s *ListPoliciesResponsePoliciesPolicy) SetPolicyType(v string) *ListPoliciesResponsePoliciesPolicy {
	s.PolicyType = &v
	return s
}

func (s *ListPoliciesResponsePoliciesPolicy) SetDescription(v string) *ListPoliciesResponsePoliciesPolicy {
	s.Description = &v
	return s
}

func (s *ListPoliciesResponsePoliciesPolicy) SetDefaultVersion(v string) *ListPoliciesResponsePoliciesPolicy {
	s.DefaultVersion = &v
	return s
}

func (s *ListPoliciesResponsePoliciesPolicy) SetCreateDate(v string) *ListPoliciesResponsePoliciesPolicy {
	s.CreateDate = &v
	return s
}

func (s *ListPoliciesResponsePoliciesPolicy) SetUpdateDate(v string) *ListPoliciesResponsePoliciesPolicy {
	s.UpdateDate = &v
	return s
}

func (s *ListPoliciesResponsePoliciesPolicy) SetAttachmentCount(v int) *ListPoliciesResponsePoliciesPolicy {
	s.AttachmentCount = &v
	return s
}

type GetPolicyRequest struct {
	PolicyType *string `json:"PolicyType" xml:"PolicyType"`
	PolicyName *string `json:"PolicyName" xml:"PolicyName"`
}

func (s GetPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s GetPolicyRequest) GoString() string {
	return s.String()
}

func (s *GetPolicyRequest) SetPolicyType(v string) *GetPolicyRequest {
	s.PolicyType = &v
	return s
}

func (s *GetPolicyRequest) SetPolicyName(v string) *GetPolicyRequest {
	s.PolicyName = &v
	return s
}

type GetPolicyResponse struct {
	RequestId            *string                                `json:"RequestId" xml:"RequestId" require:"true"`
	Policy               *GetPolicyResponsePolicy               `json:"Policy" xml:"Policy" require:"true" type:"Struct"`
	DefaultPolicyVersion *GetPolicyResponseDefaultPolicyVersion `json:"DefaultPolicyVersion" xml:"DefaultPolicyVersion" require:"true" type:"Struct"`
}

func (s GetPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s GetPolicyResponse) GoString() string {
	return s.String()
}

func (s *GetPolicyResponse) SetRequestId(v string) *GetPolicyResponse {
	s.RequestId = &v
	return s
}

func (s *GetPolicyResponse) SetPolicy(v *GetPolicyResponsePolicy) *GetPolicyResponse {
	s.Policy = v
	return s
}

func (s *GetPolicyResponse) SetDefaultPolicyVersion(v *GetPolicyResponseDefaultPolicyVersion) *GetPolicyResponse {
	s.DefaultPolicyVersion = v
	return s
}

type GetPolicyResponsePolicy struct {
	PolicyName      *string `json:"PolicyName" xml:"PolicyName" require:"true"`
	PolicyType      *string `json:"PolicyType" xml:"PolicyType" require:"true"`
	Description     *string `json:"Description" xml:"Description" require:"true"`
	DefaultVersion  *string `json:"DefaultVersion" xml:"DefaultVersion" require:"true"`
	PolicyDocument  *string `json:"PolicyDocument" xml:"PolicyDocument" require:"true"`
	CreateDate      *string `json:"CreateDate" xml:"CreateDate" require:"true"`
	UpdateDate      *string `json:"UpdateDate" xml:"UpdateDate" require:"true"`
	AttachmentCount *int    `json:"AttachmentCount" xml:"AttachmentCount" require:"true"`
}

func (s GetPolicyResponsePolicy) String() string {
	return tea.Prettify(s)
}

func (s GetPolicyResponsePolicy) GoString() string {
	return s.String()
}

func (s *GetPolicyResponsePolicy) SetPolicyName(v string) *GetPolicyResponsePolicy {
	s.PolicyName = &v
	return s
}

func (s *GetPolicyResponsePolicy) SetPolicyType(v string) *GetPolicyResponsePolicy {
	s.PolicyType = &v
	return s
}

func (s *GetPolicyResponsePolicy) SetDescription(v string) *GetPolicyResponsePolicy {
	s.Description = &v
	return s
}

func (s *GetPolicyResponsePolicy) SetDefaultVersion(v string) *GetPolicyResponsePolicy {
	s.DefaultVersion = &v
	return s
}

func (s *GetPolicyResponsePolicy) SetPolicyDocument(v string) *GetPolicyResponsePolicy {
	s.PolicyDocument = &v
	return s
}

func (s *GetPolicyResponsePolicy) SetCreateDate(v string) *GetPolicyResponsePolicy {
	s.CreateDate = &v
	return s
}

func (s *GetPolicyResponsePolicy) SetUpdateDate(v string) *GetPolicyResponsePolicy {
	s.UpdateDate = &v
	return s
}

func (s *GetPolicyResponsePolicy) SetAttachmentCount(v int) *GetPolicyResponsePolicy {
	s.AttachmentCount = &v
	return s
}

type GetPolicyResponseDefaultPolicyVersion struct {
	VersionId        *string `json:"VersionId" xml:"VersionId" require:"true"`
	IsDefaultVersion *bool   `json:"IsDefaultVersion" xml:"IsDefaultVersion" require:"true"`
	PolicyDocument   *string `json:"PolicyDocument" xml:"PolicyDocument" require:"true"`
	CreateDate       *string `json:"CreateDate" xml:"CreateDate" require:"true"`
}

func (s GetPolicyResponseDefaultPolicyVersion) String() string {
	return tea.Prettify(s)
}

func (s GetPolicyResponseDefaultPolicyVersion) GoString() string {
	return s.String()
}

func (s *GetPolicyResponseDefaultPolicyVersion) SetVersionId(v string) *GetPolicyResponseDefaultPolicyVersion {
	s.VersionId = &v
	return s
}

func (s *GetPolicyResponseDefaultPolicyVersion) SetIsDefaultVersion(v bool) *GetPolicyResponseDefaultPolicyVersion {
	s.IsDefaultVersion = &v
	return s
}

func (s *GetPolicyResponseDefaultPolicyVersion) SetPolicyDocument(v string) *GetPolicyResponseDefaultPolicyVersion {
	s.PolicyDocument = &v
	return s
}

func (s *GetPolicyResponseDefaultPolicyVersion) SetCreateDate(v string) *GetPolicyResponseDefaultPolicyVersion {
	s.CreateDate = &v
	return s
}

type DeletePolicyRequest struct {
	PolicyName *string `json:"PolicyName" xml:"PolicyName"`
}

func (s DeletePolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s DeletePolicyRequest) GoString() string {
	return s.String()
}

func (s *DeletePolicyRequest) SetPolicyName(v string) *DeletePolicyRequest {
	s.PolicyName = &v
	return s
}

type DeletePolicyResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeletePolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s DeletePolicyResponse) GoString() string {
	return s.String()
}

func (s *DeletePolicyResponse) SetRequestId(v string) *DeletePolicyResponse {
	s.RequestId = &v
	return s
}

type CreatePolicyRequest struct {
	PolicyName     *string `json:"PolicyName" xml:"PolicyName"`
	Description    *string `json:"Description" xml:"Description"`
	PolicyDocument *string `json:"PolicyDocument" xml:"PolicyDocument"`
}

func (s CreatePolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s CreatePolicyRequest) GoString() string {
	return s.String()
}

func (s *CreatePolicyRequest) SetPolicyName(v string) *CreatePolicyRequest {
	s.PolicyName = &v
	return s
}

func (s *CreatePolicyRequest) SetDescription(v string) *CreatePolicyRequest {
	s.Description = &v
	return s
}

func (s *CreatePolicyRequest) SetPolicyDocument(v string) *CreatePolicyRequest {
	s.PolicyDocument = &v
	return s
}

type CreatePolicyResponse struct {
	RequestId *string                     `json:"RequestId" xml:"RequestId" require:"true"`
	Policy    *CreatePolicyResponsePolicy `json:"Policy" xml:"Policy" require:"true" type:"Struct"`
}

func (s CreatePolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s CreatePolicyResponse) GoString() string {
	return s.String()
}

func (s *CreatePolicyResponse) SetRequestId(v string) *CreatePolicyResponse {
	s.RequestId = &v
	return s
}

func (s *CreatePolicyResponse) SetPolicy(v *CreatePolicyResponsePolicy) *CreatePolicyResponse {
	s.Policy = v
	return s
}

type CreatePolicyResponsePolicy struct {
	PolicyName     *string `json:"PolicyName" xml:"PolicyName" require:"true"`
	PolicyType     *string `json:"PolicyType" xml:"PolicyType" require:"true"`
	Description    *string `json:"Description" xml:"Description" require:"true"`
	DefaultVersion *string `json:"DefaultVersion" xml:"DefaultVersion" require:"true"`
	CreateDate     *string `json:"CreateDate" xml:"CreateDate" require:"true"`
}

func (s CreatePolicyResponsePolicy) String() string {
	return tea.Prettify(s)
}

func (s CreatePolicyResponsePolicy) GoString() string {
	return s.String()
}

func (s *CreatePolicyResponsePolicy) SetPolicyName(v string) *CreatePolicyResponsePolicy {
	s.PolicyName = &v
	return s
}

func (s *CreatePolicyResponsePolicy) SetPolicyType(v string) *CreatePolicyResponsePolicy {
	s.PolicyType = &v
	return s
}

func (s *CreatePolicyResponsePolicy) SetDescription(v string) *CreatePolicyResponsePolicy {
	s.Description = &v
	return s
}

func (s *CreatePolicyResponsePolicy) SetDefaultVersion(v string) *CreatePolicyResponsePolicy {
	s.DefaultVersion = &v
	return s
}

func (s *CreatePolicyResponsePolicy) SetCreateDate(v string) *CreatePolicyResponsePolicy {
	s.CreateDate = &v
	return s
}

type RemoveUserFromGroupRequest struct {
	UserName  *string `json:"UserName" xml:"UserName"`
	GroupName *string `json:"GroupName" xml:"GroupName"`
}

func (s RemoveUserFromGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveUserFromGroupRequest) GoString() string {
	return s.String()
}

func (s *RemoveUserFromGroupRequest) SetUserName(v string) *RemoveUserFromGroupRequest {
	s.UserName = &v
	return s
}

func (s *RemoveUserFromGroupRequest) SetGroupName(v string) *RemoveUserFromGroupRequest {
	s.GroupName = &v
	return s
}

type RemoveUserFromGroupResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s RemoveUserFromGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveUserFromGroupResponse) GoString() string {
	return s.String()
}

func (s *RemoveUserFromGroupResponse) SetRequestId(v string) *RemoveUserFromGroupResponse {
	s.RequestId = &v
	return s
}

type ListUsersForGroupRequest struct {
	GroupName *string `json:"GroupName" xml:"GroupName"`
	Marker    *string `json:"Marker" xml:"Marker"`
	MaxItems  *int    `json:"MaxItems" xml:"MaxItems"`
}

func (s ListUsersForGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s ListUsersForGroupRequest) GoString() string {
	return s.String()
}

func (s *ListUsersForGroupRequest) SetGroupName(v string) *ListUsersForGroupRequest {
	s.GroupName = &v
	return s
}

func (s *ListUsersForGroupRequest) SetMarker(v string) *ListUsersForGroupRequest {
	s.Marker = &v
	return s
}

func (s *ListUsersForGroupRequest) SetMaxItems(v int) *ListUsersForGroupRequest {
	s.MaxItems = &v
	return s
}

type ListUsersForGroupResponse struct {
	RequestId   *string                         `json:"RequestId" xml:"RequestId" require:"true"`
	IsTruncated *bool                           `json:"IsTruncated" xml:"IsTruncated" require:"true"`
	Marker      *string                         `json:"Marker" xml:"Marker" require:"true"`
	Users       *ListUsersForGroupResponseUsers `json:"Users" xml:"Users" require:"true" type:"Struct"`
}

func (s ListUsersForGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s ListUsersForGroupResponse) GoString() string {
	return s.String()
}

func (s *ListUsersForGroupResponse) SetRequestId(v string) *ListUsersForGroupResponse {
	s.RequestId = &v
	return s
}

func (s *ListUsersForGroupResponse) SetIsTruncated(v bool) *ListUsersForGroupResponse {
	s.IsTruncated = &v
	return s
}

func (s *ListUsersForGroupResponse) SetMarker(v string) *ListUsersForGroupResponse {
	s.Marker = &v
	return s
}

func (s *ListUsersForGroupResponse) SetUsers(v *ListUsersForGroupResponseUsers) *ListUsersForGroupResponse {
	s.Users = v
	return s
}

type ListUsersForGroupResponseUsers struct {
	User []*ListUsersForGroupResponseUsersUser `json:"User" xml:"User" require:"true" type:"Repeated"`
}

func (s ListUsersForGroupResponseUsers) String() string {
	return tea.Prettify(s)
}

func (s ListUsersForGroupResponseUsers) GoString() string {
	return s.String()
}

func (s *ListUsersForGroupResponseUsers) SetUser(v []*ListUsersForGroupResponseUsersUser) *ListUsersForGroupResponseUsers {
	s.User = v
	return s
}

type ListUsersForGroupResponseUsersUser struct {
	UserName    *string `json:"UserName" xml:"UserName" require:"true"`
	DisplayName *string `json:"DisplayName" xml:"DisplayName" require:"true"`
	JoinDate    *string `json:"JoinDate" xml:"JoinDate" require:"true"`
}

func (s ListUsersForGroupResponseUsersUser) String() string {
	return tea.Prettify(s)
}

func (s ListUsersForGroupResponseUsersUser) GoString() string {
	return s.String()
}

func (s *ListUsersForGroupResponseUsersUser) SetUserName(v string) *ListUsersForGroupResponseUsersUser {
	s.UserName = &v
	return s
}

func (s *ListUsersForGroupResponseUsersUser) SetDisplayName(v string) *ListUsersForGroupResponseUsersUser {
	s.DisplayName = &v
	return s
}

func (s *ListUsersForGroupResponseUsersUser) SetJoinDate(v string) *ListUsersForGroupResponseUsersUser {
	s.JoinDate = &v
	return s
}

type ListGroupsForUserRequest struct {
	UserName *string `json:"UserName" xml:"UserName"`
}

func (s ListGroupsForUserRequest) String() string {
	return tea.Prettify(s)
}

func (s ListGroupsForUserRequest) GoString() string {
	return s.String()
}

func (s *ListGroupsForUserRequest) SetUserName(v string) *ListGroupsForUserRequest {
	s.UserName = &v
	return s
}

type ListGroupsForUserResponse struct {
	RequestId *string                          `json:"RequestId" xml:"RequestId" require:"true"`
	Groups    *ListGroupsForUserResponseGroups `json:"Groups" xml:"Groups" require:"true" type:"Struct"`
}

func (s ListGroupsForUserResponse) String() string {
	return tea.Prettify(s)
}

func (s ListGroupsForUserResponse) GoString() string {
	return s.String()
}

func (s *ListGroupsForUserResponse) SetRequestId(v string) *ListGroupsForUserResponse {
	s.RequestId = &v
	return s
}

func (s *ListGroupsForUserResponse) SetGroups(v *ListGroupsForUserResponseGroups) *ListGroupsForUserResponse {
	s.Groups = v
	return s
}

type ListGroupsForUserResponseGroups struct {
	Group []*ListGroupsForUserResponseGroupsGroup `json:"Group" xml:"Group" require:"true" type:"Repeated"`
}

func (s ListGroupsForUserResponseGroups) String() string {
	return tea.Prettify(s)
}

func (s ListGroupsForUserResponseGroups) GoString() string {
	return s.String()
}

func (s *ListGroupsForUserResponseGroups) SetGroup(v []*ListGroupsForUserResponseGroupsGroup) *ListGroupsForUserResponseGroups {
	s.Group = v
	return s
}

type ListGroupsForUserResponseGroupsGroup struct {
	GroupName *string `json:"GroupName" xml:"GroupName" require:"true"`
	Comments  *string `json:"Comments" xml:"Comments" require:"true"`
	JoinDate  *string `json:"JoinDate" xml:"JoinDate" require:"true"`
}

func (s ListGroupsForUserResponseGroupsGroup) String() string {
	return tea.Prettify(s)
}

func (s ListGroupsForUserResponseGroupsGroup) GoString() string {
	return s.String()
}

func (s *ListGroupsForUserResponseGroupsGroup) SetGroupName(v string) *ListGroupsForUserResponseGroupsGroup {
	s.GroupName = &v
	return s
}

func (s *ListGroupsForUserResponseGroupsGroup) SetComments(v string) *ListGroupsForUserResponseGroupsGroup {
	s.Comments = &v
	return s
}

func (s *ListGroupsForUserResponseGroupsGroup) SetJoinDate(v string) *ListGroupsForUserResponseGroupsGroup {
	s.JoinDate = &v
	return s
}

type AddUserToGroupRequest struct {
	UserName  *string `json:"UserName" xml:"UserName"`
	GroupName *string `json:"GroupName" xml:"GroupName"`
}

func (s AddUserToGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s AddUserToGroupRequest) GoString() string {
	return s.String()
}

func (s *AddUserToGroupRequest) SetUserName(v string) *AddUserToGroupRequest {
	s.UserName = &v
	return s
}

func (s *AddUserToGroupRequest) SetGroupName(v string) *AddUserToGroupRequest {
	s.GroupName = &v
	return s
}

type AddUserToGroupResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s AddUserToGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s AddUserToGroupResponse) GoString() string {
	return s.String()
}

func (s *AddUserToGroupResponse) SetRequestId(v string) *AddUserToGroupResponse {
	s.RequestId = &v
	return s
}

type UpdateGroupRequest struct {
	GroupName    *string `json:"GroupName" xml:"GroupName"`
	NewGroupName *string `json:"NewGroupName" xml:"NewGroupName"`
	NewComments  *string `json:"NewComments" xml:"NewComments"`
}

func (s UpdateGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateGroupRequest) GoString() string {
	return s.String()
}

func (s *UpdateGroupRequest) SetGroupName(v string) *UpdateGroupRequest {
	s.GroupName = &v
	return s
}

func (s *UpdateGroupRequest) SetNewGroupName(v string) *UpdateGroupRequest {
	s.NewGroupName = &v
	return s
}

func (s *UpdateGroupRequest) SetNewComments(v string) *UpdateGroupRequest {
	s.NewComments = &v
	return s
}

type UpdateGroupResponse struct {
	RequestId *string                   `json:"RequestId" xml:"RequestId" require:"true"`
	Group     *UpdateGroupResponseGroup `json:"Group" xml:"Group" require:"true" type:"Struct"`
}

func (s UpdateGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateGroupResponse) GoString() string {
	return s.String()
}

func (s *UpdateGroupResponse) SetRequestId(v string) *UpdateGroupResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateGroupResponse) SetGroup(v *UpdateGroupResponseGroup) *UpdateGroupResponse {
	s.Group = v
	return s
}

type UpdateGroupResponseGroup struct {
	GroupName  *string `json:"GroupName" xml:"GroupName" require:"true"`
	Comments   *string `json:"Comments" xml:"Comments" require:"true"`
	CreateDate *string `json:"CreateDate" xml:"CreateDate" require:"true"`
	UpdateDate *string `json:"UpdateDate" xml:"UpdateDate" require:"true"`
}

func (s UpdateGroupResponseGroup) String() string {
	return tea.Prettify(s)
}

func (s UpdateGroupResponseGroup) GoString() string {
	return s.String()
}

func (s *UpdateGroupResponseGroup) SetGroupName(v string) *UpdateGroupResponseGroup {
	s.GroupName = &v
	return s
}

func (s *UpdateGroupResponseGroup) SetComments(v string) *UpdateGroupResponseGroup {
	s.Comments = &v
	return s
}

func (s *UpdateGroupResponseGroup) SetCreateDate(v string) *UpdateGroupResponseGroup {
	s.CreateDate = &v
	return s
}

func (s *UpdateGroupResponseGroup) SetUpdateDate(v string) *UpdateGroupResponseGroup {
	s.UpdateDate = &v
	return s
}

type ListGroupsRequest struct {
	Marker   *string `json:"Marker" xml:"Marker"`
	MaxItems *int    `json:"MaxItems" xml:"MaxItems"`
}

func (s ListGroupsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListGroupsRequest) GoString() string {
	return s.String()
}

func (s *ListGroupsRequest) SetMarker(v string) *ListGroupsRequest {
	s.Marker = &v
	return s
}

func (s *ListGroupsRequest) SetMaxItems(v int) *ListGroupsRequest {
	s.MaxItems = &v
	return s
}

type ListGroupsResponse struct {
	RequestId   *string                   `json:"RequestId" xml:"RequestId" require:"true"`
	IsTruncated *bool                     `json:"IsTruncated" xml:"IsTruncated" require:"true"`
	Marker      *string                   `json:"Marker" xml:"Marker" require:"true"`
	Groups      *ListGroupsResponseGroups `json:"Groups" xml:"Groups" require:"true" type:"Struct"`
}

func (s ListGroupsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListGroupsResponse) GoString() string {
	return s.String()
}

func (s *ListGroupsResponse) SetRequestId(v string) *ListGroupsResponse {
	s.RequestId = &v
	return s
}

func (s *ListGroupsResponse) SetIsTruncated(v bool) *ListGroupsResponse {
	s.IsTruncated = &v
	return s
}

func (s *ListGroupsResponse) SetMarker(v string) *ListGroupsResponse {
	s.Marker = &v
	return s
}

func (s *ListGroupsResponse) SetGroups(v *ListGroupsResponseGroups) *ListGroupsResponse {
	s.Groups = v
	return s
}

type ListGroupsResponseGroups struct {
	Group []*ListGroupsResponseGroupsGroup `json:"Group" xml:"Group" require:"true" type:"Repeated"`
}

func (s ListGroupsResponseGroups) String() string {
	return tea.Prettify(s)
}

func (s ListGroupsResponseGroups) GoString() string {
	return s.String()
}

func (s *ListGroupsResponseGroups) SetGroup(v []*ListGroupsResponseGroupsGroup) *ListGroupsResponseGroups {
	s.Group = v
	return s
}

type ListGroupsResponseGroupsGroup struct {
	GroupName  *string `json:"GroupName" xml:"GroupName" require:"true"`
	Comments   *string `json:"Comments" xml:"Comments" require:"true"`
	CreateDate *string `json:"CreateDate" xml:"CreateDate" require:"true"`
	UpdateDate *string `json:"UpdateDate" xml:"UpdateDate" require:"true"`
}

func (s ListGroupsResponseGroupsGroup) String() string {
	return tea.Prettify(s)
}

func (s ListGroupsResponseGroupsGroup) GoString() string {
	return s.String()
}

func (s *ListGroupsResponseGroupsGroup) SetGroupName(v string) *ListGroupsResponseGroupsGroup {
	s.GroupName = &v
	return s
}

func (s *ListGroupsResponseGroupsGroup) SetComments(v string) *ListGroupsResponseGroupsGroup {
	s.Comments = &v
	return s
}

func (s *ListGroupsResponseGroupsGroup) SetCreateDate(v string) *ListGroupsResponseGroupsGroup {
	s.CreateDate = &v
	return s
}

func (s *ListGroupsResponseGroupsGroup) SetUpdateDate(v string) *ListGroupsResponseGroupsGroup {
	s.UpdateDate = &v
	return s
}

type GetGroupRequest struct {
	GroupName *string `json:"GroupName" xml:"GroupName"`
}

func (s GetGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s GetGroupRequest) GoString() string {
	return s.String()
}

func (s *GetGroupRequest) SetGroupName(v string) *GetGroupRequest {
	s.GroupName = &v
	return s
}

type GetGroupResponse struct {
	RequestId *string                `json:"RequestId" xml:"RequestId" require:"true"`
	Group     *GetGroupResponseGroup `json:"Group" xml:"Group" require:"true" type:"Struct"`
}

func (s GetGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s GetGroupResponse) GoString() string {
	return s.String()
}

func (s *GetGroupResponse) SetRequestId(v string) *GetGroupResponse {
	s.RequestId = &v
	return s
}

func (s *GetGroupResponse) SetGroup(v *GetGroupResponseGroup) *GetGroupResponse {
	s.Group = v
	return s
}

type GetGroupResponseGroup struct {
	GroupName  *string `json:"GroupName" xml:"GroupName" require:"true"`
	Comments   *string `json:"Comments" xml:"Comments" require:"true"`
	CreateDate *string `json:"CreateDate" xml:"CreateDate" require:"true"`
	UpdateDate *string `json:"UpdateDate" xml:"UpdateDate" require:"true"`
}

func (s GetGroupResponseGroup) String() string {
	return tea.Prettify(s)
}

func (s GetGroupResponseGroup) GoString() string {
	return s.String()
}

func (s *GetGroupResponseGroup) SetGroupName(v string) *GetGroupResponseGroup {
	s.GroupName = &v
	return s
}

func (s *GetGroupResponseGroup) SetComments(v string) *GetGroupResponseGroup {
	s.Comments = &v
	return s
}

func (s *GetGroupResponseGroup) SetCreateDate(v string) *GetGroupResponseGroup {
	s.CreateDate = &v
	return s
}

func (s *GetGroupResponseGroup) SetUpdateDate(v string) *GetGroupResponseGroup {
	s.UpdateDate = &v
	return s
}

type DeleteGroupRequest struct {
	GroupName *string `json:"GroupName" xml:"GroupName"`
}

func (s DeleteGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteGroupRequest) GoString() string {
	return s.String()
}

func (s *DeleteGroupRequest) SetGroupName(v string) *DeleteGroupRequest {
	s.GroupName = &v
	return s
}

type DeleteGroupResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteGroupResponse) GoString() string {
	return s.String()
}

func (s *DeleteGroupResponse) SetRequestId(v string) *DeleteGroupResponse {
	s.RequestId = &v
	return s
}

type CreateGroupRequest struct {
	GroupName *string `json:"GroupName" xml:"GroupName"`
	Comments  *string `json:"Comments" xml:"Comments"`
}

func (s CreateGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupRequest) GoString() string {
	return s.String()
}

func (s *CreateGroupRequest) SetGroupName(v string) *CreateGroupRequest {
	s.GroupName = &v
	return s
}

func (s *CreateGroupRequest) SetComments(v string) *CreateGroupRequest {
	s.Comments = &v
	return s
}

type CreateGroupResponse struct {
	RequestId *string                   `json:"RequestId" xml:"RequestId" require:"true"`
	Group     *CreateGroupResponseGroup `json:"Group" xml:"Group" require:"true" type:"Struct"`
}

func (s CreateGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupResponse) GoString() string {
	return s.String()
}

func (s *CreateGroupResponse) SetRequestId(v string) *CreateGroupResponse {
	s.RequestId = &v
	return s
}

func (s *CreateGroupResponse) SetGroup(v *CreateGroupResponseGroup) *CreateGroupResponse {
	s.Group = v
	return s
}

type CreateGroupResponseGroup struct {
	GroupName  *string `json:"GroupName" xml:"GroupName" require:"true"`
	Comments   *string `json:"Comments" xml:"Comments" require:"true"`
	CreateDate *string `json:"CreateDate" xml:"CreateDate" require:"true"`
}

func (s CreateGroupResponseGroup) String() string {
	return tea.Prettify(s)
}

func (s CreateGroupResponseGroup) GoString() string {
	return s.String()
}

func (s *CreateGroupResponseGroup) SetGroupName(v string) *CreateGroupResponseGroup {
	s.GroupName = &v
	return s
}

func (s *CreateGroupResponseGroup) SetComments(v string) *CreateGroupResponseGroup {
	s.Comments = &v
	return s
}

func (s *CreateGroupResponseGroup) SetCreateDate(v string) *CreateGroupResponseGroup {
	s.CreateDate = &v
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
	client.Endpoint, _err = client.GetEndpoint(tea.String("ram"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) GetAccessKeyLastUsedWithOptions(request *GetAccessKeyLastUsedRequest, runtime *util.RuntimeOptions) (_result *GetAccessKeyLastUsedResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetAccessKeyLastUsedResponse{}
	_body, _err := client.DoRequest(tea.String("GetAccessKeyLastUsed"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetAccessKeyLastUsed(request *GetAccessKeyLastUsedRequest) (_result *GetAccessKeyLastUsedResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetAccessKeyLastUsedResponse{}
	_body, _err := client.GetAccessKeyLastUsedWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ChangePasswordWithOptions(request *ChangePasswordRequest, runtime *util.RuntimeOptions) (_result *ChangePasswordResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ChangePasswordResponse{}
	_body, _err := client.DoRequest(tea.String("ChangePassword"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ChangePassword(request *ChangePasswordRequest) (_result *ChangePasswordResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ChangePasswordResponse{}
	_body, _err := client.ChangePasswordWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateRoleWithOptions(request *UpdateRoleRequest, runtime *util.RuntimeOptions) (_result *UpdateRoleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateRoleResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateRole"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateRole(request *UpdateRoleRequest) (_result *UpdateRoleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateRoleResponse{}
	_body, _err := client.UpdateRoleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetSecurityPreferenceWithOptions(request *SetSecurityPreferenceRequest, runtime *util.RuntimeOptions) (_result *SetSecurityPreferenceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetSecurityPreferenceResponse{}
	_body, _err := client.DoRequest(tea.String("SetSecurityPreference"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetSecurityPreference(request *SetSecurityPreferenceRequest) (_result *SetSecurityPreferenceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetSecurityPreferenceResponse{}
	_body, _err := client.SetSecurityPreferenceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListRolesWithOptions(request *ListRolesRequest, runtime *util.RuntimeOptions) (_result *ListRolesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListRolesResponse{}
	_body, _err := client.DoRequest(tea.String("ListRoles"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListRoles(request *ListRolesRequest) (_result *ListRolesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListRolesResponse{}
	_body, _err := client.ListRolesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListPoliciesForRoleWithOptions(request *ListPoliciesForRoleRequest, runtime *util.RuntimeOptions) (_result *ListPoliciesForRoleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListPoliciesForRoleResponse{}
	_body, _err := client.DoRequest(tea.String("ListPoliciesForRole"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListPoliciesForRole(request *ListPoliciesForRoleRequest) (_result *ListPoliciesForRoleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListPoliciesForRoleResponse{}
	_body, _err := client.ListPoliciesForRoleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetSecurityPreferenceWithOptions(request *GetSecurityPreferenceRequest, runtime *util.RuntimeOptions) (_result *GetSecurityPreferenceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetSecurityPreferenceResponse{}
	_body, _err := client.DoRequest(tea.String("GetSecurityPreference"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetSecurityPreference(request *GetSecurityPreferenceRequest) (_result *GetSecurityPreferenceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetSecurityPreferenceResponse{}
	_body, _err := client.GetSecurityPreferenceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetRoleWithOptions(request *GetRoleRequest, runtime *util.RuntimeOptions) (_result *GetRoleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetRoleResponse{}
	_body, _err := client.DoRequest(tea.String("GetRole"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetRole(request *GetRoleRequest) (_result *GetRoleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetRoleResponse{}
	_body, _err := client.GetRoleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DetachPolicyFromRoleWithOptions(request *DetachPolicyFromRoleRequest, runtime *util.RuntimeOptions) (_result *DetachPolicyFromRoleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetachPolicyFromRoleResponse{}
	_body, _err := client.DoRequest(tea.String("DetachPolicyFromRole"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetachPolicyFromRole(request *DetachPolicyFromRoleRequest) (_result *DetachPolicyFromRoleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DetachPolicyFromRoleResponse{}
	_body, _err := client.DetachPolicyFromRoleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteRoleWithOptions(request *DeleteRoleRequest, runtime *util.RuntimeOptions) (_result *DeleteRoleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteRoleResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteRole"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteRole(request *DeleteRoleRequest) (_result *DeleteRoleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteRoleResponse{}
	_body, _err := client.DeleteRoleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateRoleWithOptions(request *CreateRoleRequest, runtime *util.RuntimeOptions) (_result *CreateRoleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateRoleResponse{}
	_body, _err := client.DoRequest(tea.String("CreateRole"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateRole(request *CreateRoleRequest) (_result *CreateRoleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateRoleResponse{}
	_body, _err := client.CreateRoleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AttachPolicyToRoleWithOptions(request *AttachPolicyToRoleRequest, runtime *util.RuntimeOptions) (_result *AttachPolicyToRoleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AttachPolicyToRoleResponse{}
	_body, _err := client.DoRequest(tea.String("AttachPolicyToRole"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AttachPolicyToRole(request *AttachPolicyToRoleRequest) (_result *AttachPolicyToRoleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AttachPolicyToRoleResponse{}
	_body, _err := client.AttachPolicyToRoleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UnbindMFADeviceWithOptions(request *UnbindMFADeviceRequest, runtime *util.RuntimeOptions) (_result *UnbindMFADeviceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UnbindMFADeviceResponse{}
	_body, _err := client.DoRequest(tea.String("UnbindMFADevice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UnbindMFADevice(request *UnbindMFADeviceRequest) (_result *UnbindMFADeviceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UnbindMFADeviceResponse{}
	_body, _err := client.UnbindMFADeviceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListVirtualMFADevicesWithOptions(request *ListVirtualMFADevicesRequest, runtime *util.RuntimeOptions) (_result *ListVirtualMFADevicesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListVirtualMFADevicesResponse{}
	_body, _err := client.DoRequest(tea.String("ListVirtualMFADevices"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListVirtualMFADevices(request *ListVirtualMFADevicesRequest) (_result *ListVirtualMFADevicesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListVirtualMFADevicesResponse{}
	_body, _err := client.ListVirtualMFADevicesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetUserMFAInfoWithOptions(request *GetUserMFAInfoRequest, runtime *util.RuntimeOptions) (_result *GetUserMFAInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetUserMFAInfoResponse{}
	_body, _err := client.DoRequest(tea.String("GetUserMFAInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetUserMFAInfo(request *GetUserMFAInfoRequest) (_result *GetUserMFAInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetUserMFAInfoResponse{}
	_body, _err := client.GetUserMFAInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteVirtualMFADeviceWithOptions(request *DeleteVirtualMFADeviceRequest, runtime *util.RuntimeOptions) (_result *DeleteVirtualMFADeviceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteVirtualMFADeviceResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteVirtualMFADevice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteVirtualMFADevice(request *DeleteVirtualMFADeviceRequest) (_result *DeleteVirtualMFADeviceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteVirtualMFADeviceResponse{}
	_body, _err := client.DeleteVirtualMFADeviceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateVirtualMFADeviceWithOptions(request *CreateVirtualMFADeviceRequest, runtime *util.RuntimeOptions) (_result *CreateVirtualMFADeviceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateVirtualMFADeviceResponse{}
	_body, _err := client.DoRequest(tea.String("CreateVirtualMFADevice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateVirtualMFADevice(request *CreateVirtualMFADeviceRequest) (_result *CreateVirtualMFADeviceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateVirtualMFADeviceResponse{}
	_body, _err := client.CreateVirtualMFADeviceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) BindMFADeviceWithOptions(request *BindMFADeviceRequest, runtime *util.RuntimeOptions) (_result *BindMFADeviceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &BindMFADeviceResponse{}
	_body, _err := client.DoRequest(tea.String("BindMFADevice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) BindMFADevice(request *BindMFADeviceRequest) (_result *BindMFADeviceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &BindMFADeviceResponse{}
	_body, _err := client.BindMFADeviceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateLoginProfileWithOptions(request *UpdateLoginProfileRequest, runtime *util.RuntimeOptions) (_result *UpdateLoginProfileResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateLoginProfileResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateLoginProfile"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateLoginProfile(request *UpdateLoginProfileRequest) (_result *UpdateLoginProfileResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateLoginProfileResponse{}
	_body, _err := client.UpdateLoginProfileWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetLoginProfileWithOptions(request *GetLoginProfileRequest, runtime *util.RuntimeOptions) (_result *GetLoginProfileResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetLoginProfileResponse{}
	_body, _err := client.DoRequest(tea.String("GetLoginProfile"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetLoginProfile(request *GetLoginProfileRequest) (_result *GetLoginProfileResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetLoginProfileResponse{}
	_body, _err := client.GetLoginProfileWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteLoginProfileWithOptions(request *DeleteLoginProfileRequest, runtime *util.RuntimeOptions) (_result *DeleteLoginProfileResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteLoginProfileResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteLoginProfile"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteLoginProfile(request *DeleteLoginProfileRequest) (_result *DeleteLoginProfileResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteLoginProfileResponse{}
	_body, _err := client.DeleteLoginProfileWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateLoginProfileWithOptions(request *CreateLoginProfileRequest, runtime *util.RuntimeOptions) (_result *CreateLoginProfileResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateLoginProfileResponse{}
	_body, _err := client.DoRequest(tea.String("CreateLoginProfile"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateLoginProfile(request *CreateLoginProfileRequest) (_result *CreateLoginProfileResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateLoginProfileResponse{}
	_body, _err := client.CreateLoginProfileWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateUserWithOptions(request *UpdateUserRequest, runtime *util.RuntimeOptions) (_result *UpdateUserResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateUserResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateUser"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateUser(request *UpdateUserRequest) (_result *UpdateUserResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateUserResponse{}
	_body, _err := client.UpdateUserWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListUsersWithOptions(request *ListUsersRequest, runtime *util.RuntimeOptions) (_result *ListUsersResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListUsersResponse{}
	_body, _err := client.DoRequest(tea.String("ListUsers"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListUsers(request *ListUsersRequest) (_result *ListUsersResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListUsersResponse{}
	_body, _err := client.ListUsersWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetUserWithOptions(request *GetUserRequest, runtime *util.RuntimeOptions) (_result *GetUserResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetUserResponse{}
	_body, _err := client.DoRequest(tea.String("GetUser"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetUser(request *GetUserRequest) (_result *GetUserResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetUserResponse{}
	_body, _err := client.GetUserWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteUserWithOptions(request *DeleteUserRequest, runtime *util.RuntimeOptions) (_result *DeleteUserResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteUserResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteUser"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteUser(request *DeleteUserRequest) (_result *DeleteUserResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteUserResponse{}
	_body, _err := client.DeleteUserWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateUserWithOptions(request *CreateUserRequest, runtime *util.RuntimeOptions) (_result *CreateUserResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateUserResponse{}
	_body, _err := client.DoRequest(tea.String("CreateUser"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateUser(request *CreateUserRequest) (_result *CreateUserResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateUserResponse{}
	_body, _err := client.CreateUserWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateAccessKeyWithOptions(request *UpdateAccessKeyRequest, runtime *util.RuntimeOptions) (_result *UpdateAccessKeyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateAccessKeyResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateAccessKey"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateAccessKey(request *UpdateAccessKeyRequest) (_result *UpdateAccessKeyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateAccessKeyResponse{}
	_body, _err := client.UpdateAccessKeyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListAccessKeysWithOptions(request *ListAccessKeysRequest, runtime *util.RuntimeOptions) (_result *ListAccessKeysResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListAccessKeysResponse{}
	_body, _err := client.DoRequest(tea.String("ListAccessKeys"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListAccessKeys(request *ListAccessKeysRequest) (_result *ListAccessKeysResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListAccessKeysResponse{}
	_body, _err := client.ListAccessKeysWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAccessKeyWithOptions(request *DeleteAccessKeyRequest, runtime *util.RuntimeOptions) (_result *DeleteAccessKeyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAccessKeyResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteAccessKey"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteAccessKey(request *DeleteAccessKeyRequest) (_result *DeleteAccessKeyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAccessKeyResponse{}
	_body, _err := client.DeleteAccessKeyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateAccessKeyWithOptions(request *CreateAccessKeyRequest, runtime *util.RuntimeOptions) (_result *CreateAccessKeyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateAccessKeyResponse{}
	_body, _err := client.DoRequest(tea.String("CreateAccessKey"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateAccessKey(request *CreateAccessKeyRequest) (_result *CreateAccessKeyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateAccessKeyResponse{}
	_body, _err := client.CreateAccessKeyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetPasswordPolicyWithOptions(request *SetPasswordPolicyRequest, runtime *util.RuntimeOptions) (_result *SetPasswordPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetPasswordPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("SetPasswordPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetPasswordPolicy(request *SetPasswordPolicyRequest) (_result *SetPasswordPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetPasswordPolicyResponse{}
	_body, _err := client.SetPasswordPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetAccountAliasWithOptions(request *SetAccountAliasRequest, runtime *util.RuntimeOptions) (_result *SetAccountAliasResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetAccountAliasResponse{}
	_body, _err := client.DoRequest(tea.String("SetAccountAlias"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetAccountAlias(request *SetAccountAliasRequest) (_result *SetAccountAliasResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetAccountAliasResponse{}
	_body, _err := client.SetAccountAliasWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetPasswordPolicyWithOptions(request *GetPasswordPolicyRequest, runtime *util.RuntimeOptions) (_result *GetPasswordPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetPasswordPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("GetPasswordPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetPasswordPolicy(request *GetPasswordPolicyRequest) (_result *GetPasswordPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetPasswordPolicyResponse{}
	_body, _err := client.GetPasswordPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetAccountAliasWithOptions(request *GetAccountAliasRequest, runtime *util.RuntimeOptions) (_result *GetAccountAliasResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetAccountAliasResponse{}
	_body, _err := client.DoRequest(tea.String("GetAccountAlias"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetAccountAlias(request *GetAccountAliasRequest) (_result *GetAccountAliasResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetAccountAliasResponse{}
	_body, _err := client.GetAccountAliasWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ClearAccountAliasWithOptions(request *ClearAccountAliasRequest, runtime *util.RuntimeOptions) (_result *ClearAccountAliasResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ClearAccountAliasResponse{}
	_body, _err := client.DoRequest(tea.String("ClearAccountAlias"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ClearAccountAlias(request *ClearAccountAliasRequest) (_result *ClearAccountAliasResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ClearAccountAliasResponse{}
	_body, _err := client.ClearAccountAliasWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetDefaultPolicyVersionWithOptions(request *SetDefaultPolicyVersionRequest, runtime *util.RuntimeOptions) (_result *SetDefaultPolicyVersionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetDefaultPolicyVersionResponse{}
	_body, _err := client.DoRequest(tea.String("SetDefaultPolicyVersion"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetDefaultPolicyVersion(request *SetDefaultPolicyVersionRequest) (_result *SetDefaultPolicyVersionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetDefaultPolicyVersionResponse{}
	_body, _err := client.SetDefaultPolicyVersionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListPolicyVersionsWithOptions(request *ListPolicyVersionsRequest, runtime *util.RuntimeOptions) (_result *ListPolicyVersionsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListPolicyVersionsResponse{}
	_body, _err := client.DoRequest(tea.String("ListPolicyVersions"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListPolicyVersions(request *ListPolicyVersionsRequest) (_result *ListPolicyVersionsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListPolicyVersionsResponse{}
	_body, _err := client.ListPolicyVersionsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetPolicyVersionWithOptions(request *GetPolicyVersionRequest, runtime *util.RuntimeOptions) (_result *GetPolicyVersionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetPolicyVersionResponse{}
	_body, _err := client.DoRequest(tea.String("GetPolicyVersion"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetPolicyVersion(request *GetPolicyVersionRequest) (_result *GetPolicyVersionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetPolicyVersionResponse{}
	_body, _err := client.GetPolicyVersionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeletePolicyVersionWithOptions(request *DeletePolicyVersionRequest, runtime *util.RuntimeOptions) (_result *DeletePolicyVersionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeletePolicyVersionResponse{}
	_body, _err := client.DoRequest(tea.String("DeletePolicyVersion"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeletePolicyVersion(request *DeletePolicyVersionRequest) (_result *DeletePolicyVersionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeletePolicyVersionResponse{}
	_body, _err := client.DeletePolicyVersionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreatePolicyVersionWithOptions(request *CreatePolicyVersionRequest, runtime *util.RuntimeOptions) (_result *CreatePolicyVersionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreatePolicyVersionResponse{}
	_body, _err := client.DoRequest(tea.String("CreatePolicyVersion"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreatePolicyVersion(request *CreatePolicyVersionRequest) (_result *CreatePolicyVersionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreatePolicyVersionResponse{}
	_body, _err := client.CreatePolicyVersionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListPoliciesForUserWithOptions(request *ListPoliciesForUserRequest, runtime *util.RuntimeOptions) (_result *ListPoliciesForUserResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListPoliciesForUserResponse{}
	_body, _err := client.DoRequest(tea.String("ListPoliciesForUser"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListPoliciesForUser(request *ListPoliciesForUserRequest) (_result *ListPoliciesForUserResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListPoliciesForUserResponse{}
	_body, _err := client.ListPoliciesForUserWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListPoliciesForGroupWithOptions(request *ListPoliciesForGroupRequest, runtime *util.RuntimeOptions) (_result *ListPoliciesForGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListPoliciesForGroupResponse{}
	_body, _err := client.DoRequest(tea.String("ListPoliciesForGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListPoliciesForGroup(request *ListPoliciesForGroupRequest) (_result *ListPoliciesForGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListPoliciesForGroupResponse{}
	_body, _err := client.ListPoliciesForGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListEntitiesForPolicyWithOptions(request *ListEntitiesForPolicyRequest, runtime *util.RuntimeOptions) (_result *ListEntitiesForPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListEntitiesForPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("ListEntitiesForPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListEntitiesForPolicy(request *ListEntitiesForPolicyRequest) (_result *ListEntitiesForPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListEntitiesForPolicyResponse{}
	_body, _err := client.ListEntitiesForPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DetachPolicyFromUserWithOptions(request *DetachPolicyFromUserRequest, runtime *util.RuntimeOptions) (_result *DetachPolicyFromUserResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetachPolicyFromUserResponse{}
	_body, _err := client.DoRequest(tea.String("DetachPolicyFromUser"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetachPolicyFromUser(request *DetachPolicyFromUserRequest) (_result *DetachPolicyFromUserResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DetachPolicyFromUserResponse{}
	_body, _err := client.DetachPolicyFromUserWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DetachPolicyFromGroupWithOptions(request *DetachPolicyFromGroupRequest, runtime *util.RuntimeOptions) (_result *DetachPolicyFromGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetachPolicyFromGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DetachPolicyFromGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetachPolicyFromGroup(request *DetachPolicyFromGroupRequest) (_result *DetachPolicyFromGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DetachPolicyFromGroupResponse{}
	_body, _err := client.DetachPolicyFromGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AttachPolicyToUserWithOptions(request *AttachPolicyToUserRequest, runtime *util.RuntimeOptions) (_result *AttachPolicyToUserResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AttachPolicyToUserResponse{}
	_body, _err := client.DoRequest(tea.String("AttachPolicyToUser"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AttachPolicyToUser(request *AttachPolicyToUserRequest) (_result *AttachPolicyToUserResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AttachPolicyToUserResponse{}
	_body, _err := client.AttachPolicyToUserWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AttachPolicyToGroupWithOptions(request *AttachPolicyToGroupRequest, runtime *util.RuntimeOptions) (_result *AttachPolicyToGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AttachPolicyToGroupResponse{}
	_body, _err := client.DoRequest(tea.String("AttachPolicyToGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AttachPolicyToGroup(request *AttachPolicyToGroupRequest) (_result *AttachPolicyToGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AttachPolicyToGroupResponse{}
	_body, _err := client.AttachPolicyToGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListPoliciesWithOptions(request *ListPoliciesRequest, runtime *util.RuntimeOptions) (_result *ListPoliciesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListPoliciesResponse{}
	_body, _err := client.DoRequest(tea.String("ListPolicies"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListPolicies(request *ListPoliciesRequest) (_result *ListPoliciesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListPoliciesResponse{}
	_body, _err := client.ListPoliciesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetPolicyWithOptions(request *GetPolicyRequest, runtime *util.RuntimeOptions) (_result *GetPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("GetPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetPolicy(request *GetPolicyRequest) (_result *GetPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetPolicyResponse{}
	_body, _err := client.GetPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeletePolicyWithOptions(request *DeletePolicyRequest, runtime *util.RuntimeOptions) (_result *DeletePolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeletePolicyResponse{}
	_body, _err := client.DoRequest(tea.String("DeletePolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeletePolicy(request *DeletePolicyRequest) (_result *DeletePolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeletePolicyResponse{}
	_body, _err := client.DeletePolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreatePolicyWithOptions(request *CreatePolicyRequest, runtime *util.RuntimeOptions) (_result *CreatePolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreatePolicyResponse{}
	_body, _err := client.DoRequest(tea.String("CreatePolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreatePolicy(request *CreatePolicyRequest) (_result *CreatePolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreatePolicyResponse{}
	_body, _err := client.CreatePolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RemoveUserFromGroupWithOptions(request *RemoveUserFromGroupRequest, runtime *util.RuntimeOptions) (_result *RemoveUserFromGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveUserFromGroupResponse{}
	_body, _err := client.DoRequest(tea.String("RemoveUserFromGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveUserFromGroup(request *RemoveUserFromGroupRequest) (_result *RemoveUserFromGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RemoveUserFromGroupResponse{}
	_body, _err := client.RemoveUserFromGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListUsersForGroupWithOptions(request *ListUsersForGroupRequest, runtime *util.RuntimeOptions) (_result *ListUsersForGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListUsersForGroupResponse{}
	_body, _err := client.DoRequest(tea.String("ListUsersForGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListUsersForGroup(request *ListUsersForGroupRequest) (_result *ListUsersForGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListUsersForGroupResponse{}
	_body, _err := client.ListUsersForGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListGroupsForUserWithOptions(request *ListGroupsForUserRequest, runtime *util.RuntimeOptions) (_result *ListGroupsForUserResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListGroupsForUserResponse{}
	_body, _err := client.DoRequest(tea.String("ListGroupsForUser"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListGroupsForUser(request *ListGroupsForUserRequest) (_result *ListGroupsForUserResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListGroupsForUserResponse{}
	_body, _err := client.ListGroupsForUserWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddUserToGroupWithOptions(request *AddUserToGroupRequest, runtime *util.RuntimeOptions) (_result *AddUserToGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddUserToGroupResponse{}
	_body, _err := client.DoRequest(tea.String("AddUserToGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddUserToGroup(request *AddUserToGroupRequest) (_result *AddUserToGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddUserToGroupResponse{}
	_body, _err := client.AddUserToGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateGroupWithOptions(request *UpdateGroupRequest, runtime *util.RuntimeOptions) (_result *UpdateGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateGroupResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateGroup(request *UpdateGroupRequest) (_result *UpdateGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateGroupResponse{}
	_body, _err := client.UpdateGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListGroupsWithOptions(request *ListGroupsRequest, runtime *util.RuntimeOptions) (_result *ListGroupsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListGroupsResponse{}
	_body, _err := client.DoRequest(tea.String("ListGroups"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListGroups(request *ListGroupsRequest) (_result *ListGroupsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListGroupsResponse{}
	_body, _err := client.ListGroupsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetGroupWithOptions(request *GetGroupRequest, runtime *util.RuntimeOptions) (_result *GetGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetGroupResponse{}
	_body, _err := client.DoRequest(tea.String("GetGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetGroup(request *GetGroupRequest) (_result *GetGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetGroupResponse{}
	_body, _err := client.GetGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteGroupWithOptions(request *DeleteGroupRequest, runtime *util.RuntimeOptions) (_result *DeleteGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteGroup(request *DeleteGroupRequest) (_result *DeleteGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteGroupResponse{}
	_body, _err := client.DeleteGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateGroupWithOptions(request *CreateGroupRequest, runtime *util.RuntimeOptions) (_result *CreateGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateGroupResponse{}
	_body, _err := client.DoRequest(tea.String("CreateGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2015-05-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateGroup(request *CreateGroupRequest) (_result *CreateGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateGroupResponse{}
	_body, _err := client.CreateGroupWithOptions(request, runtime)
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
