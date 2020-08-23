// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type DeleteLifecyclePolicyRequest struct {
	FileSystemId        *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	LifecyclePolicyName *string `json:"LifecyclePolicyName,omitempty" xml:"LifecyclePolicyName,omitempty" require:"true"`
}

func (s DeleteLifecyclePolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteLifecyclePolicyRequest) GoString() string {
	return s.String()
}

func (s *DeleteLifecyclePolicyRequest) SetFileSystemId(v string) *DeleteLifecyclePolicyRequest {
	s.FileSystemId = &v
	return s
}

func (s *DeleteLifecyclePolicyRequest) SetLifecyclePolicyName(v string) *DeleteLifecyclePolicyRequest {
	s.LifecyclePolicyName = &v
	return s
}

type DeleteLifecyclePolicyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
}

func (s DeleteLifecyclePolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteLifecyclePolicyResponse) GoString() string {
	return s.String()
}

func (s *DeleteLifecyclePolicyResponse) SetRequestId(v string) *DeleteLifecyclePolicyResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteLifecyclePolicyResponse) SetSuccess(v bool) *DeleteLifecyclePolicyResponse {
	s.Success = &v
	return s
}

type UpgradeFileSystemRequest struct {
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	Capacity     *int64  `json:"Capacity,omitempty" xml:"Capacity,omitempty" require:"true"`
	DryRun       *bool   `json:"DryRun,omitempty" xml:"DryRun,omitempty"`
	ClientToken  *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
}

func (s UpgradeFileSystemRequest) String() string {
	return tea.Prettify(s)
}

func (s UpgradeFileSystemRequest) GoString() string {
	return s.String()
}

func (s *UpgradeFileSystemRequest) SetFileSystemId(v string) *UpgradeFileSystemRequest {
	s.FileSystemId = &v
	return s
}

func (s *UpgradeFileSystemRequest) SetCapacity(v int64) *UpgradeFileSystemRequest {
	s.Capacity = &v
	return s
}

func (s *UpgradeFileSystemRequest) SetDryRun(v bool) *UpgradeFileSystemRequest {
	s.DryRun = &v
	return s
}

func (s *UpgradeFileSystemRequest) SetClientToken(v string) *UpgradeFileSystemRequest {
	s.ClientToken = &v
	return s
}

type UpgradeFileSystemResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpgradeFileSystemResponse) String() string {
	return tea.Prettify(s)
}

func (s UpgradeFileSystemResponse) GoString() string {
	return s.String()
}

func (s *UpgradeFileSystemResponse) SetRequestId(v string) *UpgradeFileSystemResponse {
	s.RequestId = &v
	return s
}

type ModifyLifecyclePolicyRequest struct {
	FileSystemId        *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	LifecyclePolicyName *string `json:"LifecyclePolicyName,omitempty" xml:"LifecyclePolicyName,omitempty" require:"true"`
	Path                *string `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
	LifecycleRuleName   *string `json:"LifecycleRuleName,omitempty" xml:"LifecycleRuleName,omitempty" require:"true"`
	StorageType         *string `json:"StorageType,omitempty" xml:"StorageType,omitempty" require:"true"`
}

func (s ModifyLifecyclePolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyLifecyclePolicyRequest) GoString() string {
	return s.String()
}

func (s *ModifyLifecyclePolicyRequest) SetFileSystemId(v string) *ModifyLifecyclePolicyRequest {
	s.FileSystemId = &v
	return s
}

func (s *ModifyLifecyclePolicyRequest) SetLifecyclePolicyName(v string) *ModifyLifecyclePolicyRequest {
	s.LifecyclePolicyName = &v
	return s
}

func (s *ModifyLifecyclePolicyRequest) SetPath(v string) *ModifyLifecyclePolicyRequest {
	s.Path = &v
	return s
}

func (s *ModifyLifecyclePolicyRequest) SetLifecycleRuleName(v string) *ModifyLifecyclePolicyRequest {
	s.LifecycleRuleName = &v
	return s
}

func (s *ModifyLifecyclePolicyRequest) SetStorageType(v string) *ModifyLifecyclePolicyRequest {
	s.StorageType = &v
	return s
}

type ModifyLifecyclePolicyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
}

func (s ModifyLifecyclePolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyLifecyclePolicyResponse) GoString() string {
	return s.String()
}

func (s *ModifyLifecyclePolicyResponse) SetRequestId(v string) *ModifyLifecyclePolicyResponse {
	s.RequestId = &v
	return s
}

func (s *ModifyLifecyclePolicyResponse) SetSuccess(v bool) *ModifyLifecyclePolicyResponse {
	s.Success = &v
	return s
}

type CreateLifecyclePolicyRequest struct {
	FileSystemId        *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	LifecyclePolicyName *string `json:"LifecyclePolicyName,omitempty" xml:"LifecyclePolicyName,omitempty" require:"true"`
	Path                *string `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
	LifecycleRuleName   *string `json:"LifecycleRuleName,omitempty" xml:"LifecycleRuleName,omitempty" require:"true"`
	StorageType         *string `json:"StorageType,omitempty" xml:"StorageType,omitempty" require:"true"`
}

func (s CreateLifecyclePolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateLifecyclePolicyRequest) GoString() string {
	return s.String()
}

func (s *CreateLifecyclePolicyRequest) SetFileSystemId(v string) *CreateLifecyclePolicyRequest {
	s.FileSystemId = &v
	return s
}

func (s *CreateLifecyclePolicyRequest) SetLifecyclePolicyName(v string) *CreateLifecyclePolicyRequest {
	s.LifecyclePolicyName = &v
	return s
}

func (s *CreateLifecyclePolicyRequest) SetPath(v string) *CreateLifecyclePolicyRequest {
	s.Path = &v
	return s
}

func (s *CreateLifecyclePolicyRequest) SetLifecycleRuleName(v string) *CreateLifecyclePolicyRequest {
	s.LifecycleRuleName = &v
	return s
}

func (s *CreateLifecyclePolicyRequest) SetStorageType(v string) *CreateLifecyclePolicyRequest {
	s.StorageType = &v
	return s
}

type CreateLifecyclePolicyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
}

func (s CreateLifecyclePolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateLifecyclePolicyResponse) GoString() string {
	return s.String()
}

func (s *CreateLifecyclePolicyResponse) SetRequestId(v string) *CreateLifecyclePolicyResponse {
	s.RequestId = &v
	return s
}

func (s *CreateLifecyclePolicyResponse) SetSuccess(v bool) *CreateLifecyclePolicyResponse {
	s.Success = &v
	return s
}

type DescribeLifecyclePoliciesRequest struct {
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty"`
	PageSize     *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber   *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeLifecyclePoliciesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeLifecyclePoliciesRequest) GoString() string {
	return s.String()
}

func (s *DescribeLifecyclePoliciesRequest) SetFileSystemId(v string) *DescribeLifecyclePoliciesRequest {
	s.FileSystemId = &v
	return s
}

func (s *DescribeLifecyclePoliciesRequest) SetPageSize(v int) *DescribeLifecyclePoliciesRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeLifecyclePoliciesRequest) SetPageNumber(v int) *DescribeLifecyclePoliciesRequest {
	s.PageNumber = &v
	return s
}

type DescribeLifecyclePoliciesResponse struct {
	RequestId         *string                                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount        *int                                                  `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize          *int                                                  `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber        *int                                                  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	LifecyclePolicies []*DescribeLifecyclePoliciesResponseLifecyclePolicies `json:"LifecyclePolicies,omitempty" xml:"LifecyclePolicies,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeLifecyclePoliciesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeLifecyclePoliciesResponse) GoString() string {
	return s.String()
}

func (s *DescribeLifecyclePoliciesResponse) SetRequestId(v string) *DescribeLifecyclePoliciesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeLifecyclePoliciesResponse) SetTotalCount(v int) *DescribeLifecyclePoliciesResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeLifecyclePoliciesResponse) SetPageSize(v int) *DescribeLifecyclePoliciesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeLifecyclePoliciesResponse) SetPageNumber(v int) *DescribeLifecyclePoliciesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeLifecyclePoliciesResponse) SetLifecyclePolicies(v []*DescribeLifecyclePoliciesResponseLifecyclePolicies) *DescribeLifecyclePoliciesResponse {
	s.LifecyclePolicies = v
	return s
}

type DescribeLifecyclePoliciesResponseLifecyclePolicies struct {
	FileSystemId        *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	LifecyclePolicyName *string `json:"LifecyclePolicyName,omitempty" xml:"LifecyclePolicyName,omitempty" require:"true"`
	Path                *string `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
	LifecycleRuleName   *string `json:"LifecycleRuleName,omitempty" xml:"LifecycleRuleName,omitempty" require:"true"`
	StorageType         *string `json:"StorageType,omitempty" xml:"StorageType,omitempty" require:"true"`
	CreateTime          *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
}

func (s DescribeLifecyclePoliciesResponseLifecyclePolicies) String() string {
	return tea.Prettify(s)
}

func (s DescribeLifecyclePoliciesResponseLifecyclePolicies) GoString() string {
	return s.String()
}

func (s *DescribeLifecyclePoliciesResponseLifecyclePolicies) SetFileSystemId(v string) *DescribeLifecyclePoliciesResponseLifecyclePolicies {
	s.FileSystemId = &v
	return s
}

func (s *DescribeLifecyclePoliciesResponseLifecyclePolicies) SetLifecyclePolicyName(v string) *DescribeLifecyclePoliciesResponseLifecyclePolicies {
	s.LifecyclePolicyName = &v
	return s
}

func (s *DescribeLifecyclePoliciesResponseLifecyclePolicies) SetPath(v string) *DescribeLifecyclePoliciesResponseLifecyclePolicies {
	s.Path = &v
	return s
}

func (s *DescribeLifecyclePoliciesResponseLifecyclePolicies) SetLifecycleRuleName(v string) *DescribeLifecyclePoliciesResponseLifecyclePolicies {
	s.LifecycleRuleName = &v
	return s
}

func (s *DescribeLifecyclePoliciesResponseLifecyclePolicies) SetStorageType(v string) *DescribeLifecyclePoliciesResponseLifecyclePolicies {
	s.StorageType = &v
	return s
}

func (s *DescribeLifecyclePoliciesResponseLifecyclePolicies) SetCreateTime(v string) *DescribeLifecyclePoliciesResponseLifecyclePolicies {
	s.CreateTime = &v
	return s
}

type DescribeDirQuotasRequest struct {
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	Path         *string `json:"Path,omitempty" xml:"Path,omitempty"`
	PageSize     *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber   *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeDirQuotasRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDirQuotasRequest) GoString() string {
	return s.String()
}

func (s *DescribeDirQuotasRequest) SetFileSystemId(v string) *DescribeDirQuotasRequest {
	s.FileSystemId = &v
	return s
}

func (s *DescribeDirQuotasRequest) SetPath(v string) *DescribeDirQuotasRequest {
	s.Path = &v
	return s
}

func (s *DescribeDirQuotasRequest) SetPageSize(v int) *DescribeDirQuotasRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeDirQuotasRequest) SetPageNumber(v int) *DescribeDirQuotasRequest {
	s.PageNumber = &v
	return s
}

type DescribeDirQuotasResponse struct {
	RequestId     *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount    *int                                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize      *int                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber    *int                                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	DirQuotaInfos []*DescribeDirQuotasResponseDirQuotaInfos `json:"DirQuotaInfos,omitempty" xml:"DirQuotaInfos,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDirQuotasResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDirQuotasResponse) GoString() string {
	return s.String()
}

func (s *DescribeDirQuotasResponse) SetRequestId(v string) *DescribeDirQuotasResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDirQuotasResponse) SetTotalCount(v int) *DescribeDirQuotasResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeDirQuotasResponse) SetPageSize(v int) *DescribeDirQuotasResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeDirQuotasResponse) SetPageNumber(v int) *DescribeDirQuotasResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeDirQuotasResponse) SetDirQuotaInfos(v []*DescribeDirQuotasResponseDirQuotaInfos) *DescribeDirQuotasResponse {
	s.DirQuotaInfos = v
	return s
}

type DescribeDirQuotasResponseDirQuotaInfos struct {
	Path           *string                                                 `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
	DirInode       *string                                                 `json:"DirInode,omitempty" xml:"DirInode,omitempty" require:"true"`
	Status         *string                                                 `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	UserQuotaInfos []*DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos `json:"UserQuotaInfos,omitempty" xml:"UserQuotaInfos,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDirQuotasResponseDirQuotaInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeDirQuotasResponseDirQuotaInfos) GoString() string {
	return s.String()
}

func (s *DescribeDirQuotasResponseDirQuotaInfos) SetPath(v string) *DescribeDirQuotasResponseDirQuotaInfos {
	s.Path = &v
	return s
}

func (s *DescribeDirQuotasResponseDirQuotaInfos) SetDirInode(v string) *DescribeDirQuotasResponseDirQuotaInfos {
	s.DirInode = &v
	return s
}

func (s *DescribeDirQuotasResponseDirQuotaInfos) SetStatus(v string) *DescribeDirQuotasResponseDirQuotaInfos {
	s.Status = &v
	return s
}

func (s *DescribeDirQuotasResponseDirQuotaInfos) SetUserQuotaInfos(v []*DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos) *DescribeDirQuotasResponseDirQuotaInfos {
	s.UserQuotaInfos = v
	return s
}

type DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos struct {
	UserType       *string `json:"UserType,omitempty" xml:"UserType,omitempty" require:"true"`
	UserId         *string `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	QuotaType      *string `json:"QuotaType,omitempty" xml:"QuotaType,omitempty" require:"true"`
	SizeLimit      *int64  `json:"SizeLimit,omitempty" xml:"SizeLimit,omitempty" require:"true"`
	SizeReal       *int64  `json:"SizeReal,omitempty" xml:"SizeReal,omitempty" require:"true"`
	FileCountLimit *int64  `json:"FileCountLimit,omitempty" xml:"FileCountLimit,omitempty" require:"true"`
	FileCountReal  *int64  `json:"FileCountReal,omitempty" xml:"FileCountReal,omitempty" require:"true"`
}

func (s DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos) GoString() string {
	return s.String()
}

func (s *DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos) SetUserType(v string) *DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos {
	s.UserType = &v
	return s
}

func (s *DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos) SetUserId(v string) *DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos {
	s.UserId = &v
	return s
}

func (s *DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos) SetQuotaType(v string) *DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos {
	s.QuotaType = &v
	return s
}

func (s *DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos) SetSizeLimit(v int64) *DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos {
	s.SizeLimit = &v
	return s
}

func (s *DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos) SetSizeReal(v int64) *DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos {
	s.SizeReal = &v
	return s
}

func (s *DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos) SetFileCountLimit(v int64) *DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos {
	s.FileCountLimit = &v
	return s
}

func (s *DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos) SetFileCountReal(v int64) *DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos {
	s.FileCountReal = &v
	return s
}

type SetDirQuotaRequest struct {
	FileSystemId   *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	Path           *string `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
	QuotaType      *string `json:"QuotaType,omitempty" xml:"QuotaType,omitempty" require:"true"`
	UserType       *string `json:"UserType,omitempty" xml:"UserType,omitempty" require:"true"`
	UserId         *string `json:"UserId,omitempty" xml:"UserId,omitempty"`
	SizeLimit      *int64  `json:"SizeLimit,omitempty" xml:"SizeLimit,omitempty"`
	FileCountLimit *int64  `json:"FileCountLimit,omitempty" xml:"FileCountLimit,omitempty"`
}

func (s SetDirQuotaRequest) String() string {
	return tea.Prettify(s)
}

func (s SetDirQuotaRequest) GoString() string {
	return s.String()
}

func (s *SetDirQuotaRequest) SetFileSystemId(v string) *SetDirQuotaRequest {
	s.FileSystemId = &v
	return s
}

func (s *SetDirQuotaRequest) SetPath(v string) *SetDirQuotaRequest {
	s.Path = &v
	return s
}

func (s *SetDirQuotaRequest) SetQuotaType(v string) *SetDirQuotaRequest {
	s.QuotaType = &v
	return s
}

func (s *SetDirQuotaRequest) SetUserType(v string) *SetDirQuotaRequest {
	s.UserType = &v
	return s
}

func (s *SetDirQuotaRequest) SetUserId(v string) *SetDirQuotaRequest {
	s.UserId = &v
	return s
}

func (s *SetDirQuotaRequest) SetSizeLimit(v int64) *SetDirQuotaRequest {
	s.SizeLimit = &v
	return s
}

func (s *SetDirQuotaRequest) SetFileCountLimit(v int64) *SetDirQuotaRequest {
	s.FileCountLimit = &v
	return s
}

type SetDirQuotaResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
}

func (s SetDirQuotaResponse) String() string {
	return tea.Prettify(s)
}

func (s SetDirQuotaResponse) GoString() string {
	return s.String()
}

func (s *SetDirQuotaResponse) SetRequestId(v string) *SetDirQuotaResponse {
	s.RequestId = &v
	return s
}

func (s *SetDirQuotaResponse) SetSuccess(v bool) *SetDirQuotaResponse {
	s.Success = &v
	return s
}

type CancelDirQuotaRequest struct {
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	Path         *string `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
	UserType     *string `json:"UserType,omitempty" xml:"UserType,omitempty" require:"true"`
	UserId       *string `json:"UserId,omitempty" xml:"UserId,omitempty"`
}

func (s CancelDirQuotaRequest) String() string {
	return tea.Prettify(s)
}

func (s CancelDirQuotaRequest) GoString() string {
	return s.String()
}

func (s *CancelDirQuotaRequest) SetFileSystemId(v string) *CancelDirQuotaRequest {
	s.FileSystemId = &v
	return s
}

func (s *CancelDirQuotaRequest) SetPath(v string) *CancelDirQuotaRequest {
	s.Path = &v
	return s
}

func (s *CancelDirQuotaRequest) SetUserType(v string) *CancelDirQuotaRequest {
	s.UserType = &v
	return s
}

func (s *CancelDirQuotaRequest) SetUserId(v string) *CancelDirQuotaRequest {
	s.UserId = &v
	return s
}

type CancelDirQuotaResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
}

func (s CancelDirQuotaResponse) String() string {
	return tea.Prettify(s)
}

func (s CancelDirQuotaResponse) GoString() string {
	return s.String()
}

func (s *CancelDirQuotaResponse) SetRequestId(v string) *CancelDirQuotaResponse {
	s.RequestId = &v
	return s
}

func (s *CancelDirQuotaResponse) SetSuccess(v bool) *CancelDirQuotaResponse {
	s.Success = &v
	return s
}

type DescribeStoragePackagesRequest struct {
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	UseUTCDateTime *bool   `json:"UseUTCDateTime,omitempty" xml:"UseUTCDateTime,omitempty"`
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeStoragePackagesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeStoragePackagesRequest) GoString() string {
	return s.String()
}

func (s *DescribeStoragePackagesRequest) SetRegionId(v string) *DescribeStoragePackagesRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeStoragePackagesRequest) SetPageSize(v int) *DescribeStoragePackagesRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeStoragePackagesRequest) SetUseUTCDateTime(v bool) *DescribeStoragePackagesRequest {
	s.UseUTCDateTime = &v
	return s
}

func (s *DescribeStoragePackagesRequest) SetPageNumber(v int) *DescribeStoragePackagesRequest {
	s.PageNumber = &v
	return s
}

type DescribeStoragePackagesResponse struct {
	RequestId  *string                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int                                     `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize   *int                                     `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                                     `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	Packages   *DescribeStoragePackagesResponsePackages `json:"Packages,omitempty" xml:"Packages,omitempty" require:"true" type:"Struct"`
}

func (s DescribeStoragePackagesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeStoragePackagesResponse) GoString() string {
	return s.String()
}

func (s *DescribeStoragePackagesResponse) SetRequestId(v string) *DescribeStoragePackagesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeStoragePackagesResponse) SetTotalCount(v int) *DescribeStoragePackagesResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeStoragePackagesResponse) SetPageSize(v int) *DescribeStoragePackagesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeStoragePackagesResponse) SetPageNumber(v int) *DescribeStoragePackagesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeStoragePackagesResponse) SetPackages(v *DescribeStoragePackagesResponsePackages) *DescribeStoragePackagesResponse {
	s.Packages = v
	return s
}

type DescribeStoragePackagesResponsePackages struct {
	Package []*DescribeStoragePackagesResponsePackagesPackage `json:"Package,omitempty" xml:"Package,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeStoragePackagesResponsePackages) String() string {
	return tea.Prettify(s)
}

func (s DescribeStoragePackagesResponsePackages) GoString() string {
	return s.String()
}

func (s *DescribeStoragePackagesResponsePackages) SetPackage(v []*DescribeStoragePackagesResponsePackagesPackage) *DescribeStoragePackagesResponsePackages {
	s.Package = v
	return s
}

type DescribeStoragePackagesResponsePackagesPackage struct {
	StartTime    *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	StorageType  *string `json:"StorageType,omitempty" xml:"StorageType,omitempty" require:"true"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	PackageId    *string `json:"PackageId,omitempty" xml:"PackageId,omitempty" require:"true"`
	ExpiredTime  *string `json:"ExpiredTime,omitempty" xml:"ExpiredTime,omitempty" require:"true"`
	Size         *int64  `json:"Size,omitempty" xml:"Size,omitempty" require:"true"`
}

func (s DescribeStoragePackagesResponsePackagesPackage) String() string {
	return tea.Prettify(s)
}

func (s DescribeStoragePackagesResponsePackagesPackage) GoString() string {
	return s.String()
}

func (s *DescribeStoragePackagesResponsePackagesPackage) SetStartTime(v string) *DescribeStoragePackagesResponsePackagesPackage {
	s.StartTime = &v
	return s
}

func (s *DescribeStoragePackagesResponsePackagesPackage) SetStorageType(v string) *DescribeStoragePackagesResponsePackagesPackage {
	s.StorageType = &v
	return s
}

func (s *DescribeStoragePackagesResponsePackagesPackage) SetStatus(v string) *DescribeStoragePackagesResponsePackagesPackage {
	s.Status = &v
	return s
}

func (s *DescribeStoragePackagesResponsePackagesPackage) SetFileSystemId(v string) *DescribeStoragePackagesResponsePackagesPackage {
	s.FileSystemId = &v
	return s
}

func (s *DescribeStoragePackagesResponsePackagesPackage) SetPackageId(v string) *DescribeStoragePackagesResponsePackagesPackage {
	s.PackageId = &v
	return s
}

func (s *DescribeStoragePackagesResponsePackagesPackage) SetExpiredTime(v string) *DescribeStoragePackagesResponsePackagesPackage {
	s.ExpiredTime = &v
	return s
}

func (s *DescribeStoragePackagesResponsePackagesPackage) SetSize(v int64) *DescribeStoragePackagesResponsePackagesPackage {
	s.Size = &v
	return s
}

type DescribeFileSystemStatisticsRequest struct {
	PageSize   *int `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber *int `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeFileSystemStatisticsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeFileSystemStatisticsRequest) GoString() string {
	return s.String()
}

func (s *DescribeFileSystemStatisticsRequest) SetPageSize(v int) *DescribeFileSystemStatisticsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeFileSystemStatisticsRequest) SetPageNumber(v int) *DescribeFileSystemStatisticsRequest {
	s.PageNumber = &v
	return s
}

type DescribeFileSystemStatisticsResponse struct {
	RequestId            *string                                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount           *int                                                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize             *int                                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber           *int                                                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	FileSystemStatistics *DescribeFileSystemStatisticsResponseFileSystemStatistics `json:"FileSystemStatistics,omitempty" xml:"FileSystemStatistics,omitempty" require:"true" type:"Struct"`
}

func (s DescribeFileSystemStatisticsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeFileSystemStatisticsResponse) GoString() string {
	return s.String()
}

func (s *DescribeFileSystemStatisticsResponse) SetRequestId(v string) *DescribeFileSystemStatisticsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeFileSystemStatisticsResponse) SetTotalCount(v int) *DescribeFileSystemStatisticsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeFileSystemStatisticsResponse) SetPageSize(v int) *DescribeFileSystemStatisticsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeFileSystemStatisticsResponse) SetPageNumber(v int) *DescribeFileSystemStatisticsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeFileSystemStatisticsResponse) SetFileSystemStatistics(v *DescribeFileSystemStatisticsResponseFileSystemStatistics) *DescribeFileSystemStatisticsResponse {
	s.FileSystemStatistics = v
	return s
}

type DescribeFileSystemStatisticsResponseFileSystemStatistics struct {
	FileSystemStatistic []*DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic `json:"FileSystemStatistic,omitempty" xml:"FileSystemStatistic,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeFileSystemStatisticsResponseFileSystemStatistics) String() string {
	return tea.Prettify(s)
}

func (s DescribeFileSystemStatisticsResponseFileSystemStatistics) GoString() string {
	return s.String()
}

func (s *DescribeFileSystemStatisticsResponseFileSystemStatistics) SetFileSystemStatistic(v []*DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic) *DescribeFileSystemStatisticsResponseFileSystemStatistics {
	s.FileSystemStatistic = v
	return s
}

type DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic struct {
	FileSystemType *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty" require:"true"`
	TotalCount     *int    `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	MeteredSize    *int64  `json:"MeteredSize,omitempty" xml:"MeteredSize,omitempty" require:"true"`
	ExpiredCount   *int    `json:"ExpiredCount,omitempty" xml:"ExpiredCount,omitempty" require:"true"`
	ExpiringCount  *int    `json:"ExpiringCount,omitempty" xml:"ExpiringCount,omitempty" require:"true"`
}

func (s DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic) String() string {
	return tea.Prettify(s)
}

func (s DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic) GoString() string {
	return s.String()
}

func (s *DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic) SetFileSystemType(v string) *DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic {
	s.FileSystemType = &v
	return s
}

func (s *DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic) SetTotalCount(v int) *DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic {
	s.TotalCount = &v
	return s
}

func (s *DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic) SetMeteredSize(v int64) *DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic {
	s.MeteredSize = &v
	return s
}

func (s *DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic) SetExpiredCount(v int) *DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic {
	s.ExpiredCount = &v
	return s
}

func (s *DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic) SetExpiringCount(v int) *DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic {
	s.ExpiringCount = &v
	return s
}

type DescribeLogAnalysisRequest struct {
	RegionId   *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeLogAnalysisRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeLogAnalysisRequest) GoString() string {
	return s.String()
}

func (s *DescribeLogAnalysisRequest) SetRegionId(v string) *DescribeLogAnalysisRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeLogAnalysisRequest) SetPageSize(v int) *DescribeLogAnalysisRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeLogAnalysisRequest) SetPageNumber(v int) *DescribeLogAnalysisRequest {
	s.PageNumber = &v
	return s
}

type DescribeLogAnalysisResponse struct {
	RequestId  *string                              `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Code       *string                              `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	TotalCount *int                                 `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize   *int                                 `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                                 `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	Analyses   *DescribeLogAnalysisResponseAnalyses `json:"Analyses,omitempty" xml:"Analyses,omitempty" require:"true" type:"Struct"`
}

func (s DescribeLogAnalysisResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeLogAnalysisResponse) GoString() string {
	return s.String()
}

func (s *DescribeLogAnalysisResponse) SetRequestId(v string) *DescribeLogAnalysisResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeLogAnalysisResponse) SetCode(v string) *DescribeLogAnalysisResponse {
	s.Code = &v
	return s
}

func (s *DescribeLogAnalysisResponse) SetTotalCount(v int) *DescribeLogAnalysisResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeLogAnalysisResponse) SetPageSize(v int) *DescribeLogAnalysisResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeLogAnalysisResponse) SetPageNumber(v int) *DescribeLogAnalysisResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeLogAnalysisResponse) SetAnalyses(v *DescribeLogAnalysisResponseAnalyses) *DescribeLogAnalysisResponse {
	s.Analyses = v
	return s
}

type DescribeLogAnalysisResponseAnalyses struct {
	Analysis []*DescribeLogAnalysisResponseAnalysesAnalysis `json:"Analysis,omitempty" xml:"Analysis,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeLogAnalysisResponseAnalyses) String() string {
	return tea.Prettify(s)
}

func (s DescribeLogAnalysisResponseAnalyses) GoString() string {
	return s.String()
}

func (s *DescribeLogAnalysisResponseAnalyses) SetAnalysis(v []*DescribeLogAnalysisResponseAnalysesAnalysis) *DescribeLogAnalysisResponseAnalyses {
	s.Analysis = v
	return s
}

type DescribeLogAnalysisResponseAnalysesAnalysis struct {
	MetaKey   *string                                               `json:"MetaKey,omitempty" xml:"MetaKey,omitempty" require:"true"`
	MetaValue *DescribeLogAnalysisResponseAnalysesAnalysisMetaValue `json:"MetaValue,omitempty" xml:"MetaValue,omitempty" require:"true" type:"Struct"`
}

func (s DescribeLogAnalysisResponseAnalysesAnalysis) String() string {
	return tea.Prettify(s)
}

func (s DescribeLogAnalysisResponseAnalysesAnalysis) GoString() string {
	return s.String()
}

func (s *DescribeLogAnalysisResponseAnalysesAnalysis) SetMetaKey(v string) *DescribeLogAnalysisResponseAnalysesAnalysis {
	s.MetaKey = &v
	return s
}

func (s *DescribeLogAnalysisResponseAnalysesAnalysis) SetMetaValue(v *DescribeLogAnalysisResponseAnalysesAnalysisMetaValue) *DescribeLogAnalysisResponseAnalysesAnalysis {
	s.MetaValue = v
	return s
}

type DescribeLogAnalysisResponseAnalysesAnalysisMetaValue struct {
	Logstore *string `json:"Logstore,omitempty" xml:"Logstore,omitempty" require:"true"`
	Region   *string `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
	Project  *string `json:"Project,omitempty" xml:"Project,omitempty" require:"true"`
	RoleArn  *string `json:"RoleArn,omitempty" xml:"RoleArn,omitempty" require:"true"`
}

func (s DescribeLogAnalysisResponseAnalysesAnalysisMetaValue) String() string {
	return tea.Prettify(s)
}

func (s DescribeLogAnalysisResponseAnalysesAnalysisMetaValue) GoString() string {
	return s.String()
}

func (s *DescribeLogAnalysisResponseAnalysesAnalysisMetaValue) SetLogstore(v string) *DescribeLogAnalysisResponseAnalysesAnalysisMetaValue {
	s.Logstore = &v
	return s
}

func (s *DescribeLogAnalysisResponseAnalysesAnalysisMetaValue) SetRegion(v string) *DescribeLogAnalysisResponseAnalysesAnalysisMetaValue {
	s.Region = &v
	return s
}

func (s *DescribeLogAnalysisResponseAnalysesAnalysisMetaValue) SetProject(v string) *DescribeLogAnalysisResponseAnalysesAnalysisMetaValue {
	s.Project = &v
	return s
}

func (s *DescribeLogAnalysisResponseAnalysesAnalysisMetaValue) SetRoleArn(v string) *DescribeLogAnalysisResponseAnalysesAnalysisMetaValue {
	s.RoleArn = &v
	return s
}

type DescribeMountedClientsRequest struct {
	RegionId          *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	PageSize          *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	FileSystemId      *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	ClientIP          *string `json:"ClientIP,omitempty" xml:"ClientIP,omitempty"`
	MountTargetDomain *string `json:"MountTargetDomain,omitempty" xml:"MountTargetDomain,omitempty" require:"true"`
	PageNumber        *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeMountedClientsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMountedClientsRequest) GoString() string {
	return s.String()
}

func (s *DescribeMountedClientsRequest) SetRegionId(v string) *DescribeMountedClientsRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeMountedClientsRequest) SetPageSize(v int) *DescribeMountedClientsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeMountedClientsRequest) SetFileSystemId(v string) *DescribeMountedClientsRequest {
	s.FileSystemId = &v
	return s
}

func (s *DescribeMountedClientsRequest) SetClientIP(v string) *DescribeMountedClientsRequest {
	s.ClientIP = &v
	return s
}

func (s *DescribeMountedClientsRequest) SetMountTargetDomain(v string) *DescribeMountedClientsRequest {
	s.MountTargetDomain = &v
	return s
}

func (s *DescribeMountedClientsRequest) SetPageNumber(v int) *DescribeMountedClientsRequest {
	s.PageNumber = &v
	return s
}

type DescribeMountedClientsResponse struct {
	RequestId  *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int                                   `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize   *int                                   `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                                   `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	Clients    *DescribeMountedClientsResponseClients `json:"Clients,omitempty" xml:"Clients,omitempty" require:"true" type:"Struct"`
}

func (s DescribeMountedClientsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMountedClientsResponse) GoString() string {
	return s.String()
}

func (s *DescribeMountedClientsResponse) SetRequestId(v string) *DescribeMountedClientsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMountedClientsResponse) SetTotalCount(v int) *DescribeMountedClientsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeMountedClientsResponse) SetPageSize(v int) *DescribeMountedClientsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeMountedClientsResponse) SetPageNumber(v int) *DescribeMountedClientsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeMountedClientsResponse) SetClients(v *DescribeMountedClientsResponseClients) *DescribeMountedClientsResponse {
	s.Clients = v
	return s
}

type DescribeMountedClientsResponseClients struct {
	Client []*DescribeMountedClientsResponseClientsClient `json:"Client,omitempty" xml:"Client,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeMountedClientsResponseClients) String() string {
	return tea.Prettify(s)
}

func (s DescribeMountedClientsResponseClients) GoString() string {
	return s.String()
}

func (s *DescribeMountedClientsResponseClients) SetClient(v []*DescribeMountedClientsResponseClientsClient) *DescribeMountedClientsResponseClients {
	s.Client = v
	return s
}

type DescribeMountedClientsResponseClientsClient struct {
	ClientIP *string `json:"ClientIP,omitempty" xml:"ClientIP,omitempty" require:"true"`
}

func (s DescribeMountedClientsResponseClientsClient) String() string {
	return tea.Prettify(s)
}

func (s DescribeMountedClientsResponseClientsClient) GoString() string {
	return s.String()
}

func (s *DescribeMountedClientsResponseClientsClient) SetClientIP(v string) *DescribeMountedClientsResponseClientsClient {
	s.ClientIP = &v
	return s
}

type DescribeAutoSnapshotTasksRequest struct {
	FileSystemIds         *string `json:"FileSystemIds,omitempty" xml:"FileSystemIds,omitempty"`
	AutoSnapshotPolicyIds *string `json:"AutoSnapshotPolicyIds,omitempty" xml:"AutoSnapshotPolicyIds,omitempty"`
	FileSystemType        *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty" require:"true"`
	PageSize              *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber            *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeAutoSnapshotTasksRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAutoSnapshotTasksRequest) GoString() string {
	return s.String()
}

func (s *DescribeAutoSnapshotTasksRequest) SetFileSystemIds(v string) *DescribeAutoSnapshotTasksRequest {
	s.FileSystemIds = &v
	return s
}

func (s *DescribeAutoSnapshotTasksRequest) SetAutoSnapshotPolicyIds(v string) *DescribeAutoSnapshotTasksRequest {
	s.AutoSnapshotPolicyIds = &v
	return s
}

func (s *DescribeAutoSnapshotTasksRequest) SetFileSystemType(v string) *DescribeAutoSnapshotTasksRequest {
	s.FileSystemType = &v
	return s
}

func (s *DescribeAutoSnapshotTasksRequest) SetPageSize(v int) *DescribeAutoSnapshotTasksRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeAutoSnapshotTasksRequest) SetPageNumber(v int) *DescribeAutoSnapshotTasksRequest {
	s.PageNumber = &v
	return s
}

type DescribeAutoSnapshotTasksResponse struct {
	RequestId         *string                                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount        *int                                                `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize          *int                                                `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber        *int                                                `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	AutoSnapshotTasks *DescribeAutoSnapshotTasksResponseAutoSnapshotTasks `json:"AutoSnapshotTasks,omitempty" xml:"AutoSnapshotTasks,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAutoSnapshotTasksResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAutoSnapshotTasksResponse) GoString() string {
	return s.String()
}

func (s *DescribeAutoSnapshotTasksResponse) SetRequestId(v string) *DescribeAutoSnapshotTasksResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAutoSnapshotTasksResponse) SetTotalCount(v int) *DescribeAutoSnapshotTasksResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeAutoSnapshotTasksResponse) SetPageSize(v int) *DescribeAutoSnapshotTasksResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeAutoSnapshotTasksResponse) SetPageNumber(v int) *DescribeAutoSnapshotTasksResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeAutoSnapshotTasksResponse) SetAutoSnapshotTasks(v *DescribeAutoSnapshotTasksResponseAutoSnapshotTasks) *DescribeAutoSnapshotTasksResponse {
	s.AutoSnapshotTasks = v
	return s
}

type DescribeAutoSnapshotTasksResponseAutoSnapshotTasks struct {
	AutoSnapshotTask []*DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask `json:"AutoSnapshotTask,omitempty" xml:"AutoSnapshotTask,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAutoSnapshotTasksResponseAutoSnapshotTasks) String() string {
	return tea.Prettify(s)
}

func (s DescribeAutoSnapshotTasksResponseAutoSnapshotTasks) GoString() string {
	return s.String()
}

func (s *DescribeAutoSnapshotTasksResponseAutoSnapshotTasks) SetAutoSnapshotTask(v []*DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask) *DescribeAutoSnapshotTasksResponseAutoSnapshotTasks {
	s.AutoSnapshotTask = v
	return s
}

type DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask struct {
	SourceFileSystemId   *string `json:"SourceFileSystemId,omitempty" xml:"SourceFileSystemId,omitempty" require:"true"`
	AutoSnapshotPolicyId *string `json:"AutoSnapshotPolicyId,omitempty" xml:"AutoSnapshotPolicyId,omitempty" require:"true"`
}

func (s DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask) String() string {
	return tea.Prettify(s)
}

func (s DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask) GoString() string {
	return s.String()
}

func (s *DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask) SetSourceFileSystemId(v string) *DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask {
	s.SourceFileSystemId = &v
	return s
}

func (s *DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask) SetAutoSnapshotPolicyId(v string) *DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask {
	s.AutoSnapshotPolicyId = &v
	return s
}

type RemoveClientFromBlackListRequest struct {
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	ClientIP     *string `json:"ClientIP,omitempty" xml:"ClientIP,omitempty" require:"true"`
	ClientToken  *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty" require:"true"`
}

func (s RemoveClientFromBlackListRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveClientFromBlackListRequest) GoString() string {
	return s.String()
}

func (s *RemoveClientFromBlackListRequest) SetRegionId(v string) *RemoveClientFromBlackListRequest {
	s.RegionId = &v
	return s
}

func (s *RemoveClientFromBlackListRequest) SetFileSystemId(v string) *RemoveClientFromBlackListRequest {
	s.FileSystemId = &v
	return s
}

func (s *RemoveClientFromBlackListRequest) SetClientIP(v string) *RemoveClientFromBlackListRequest {
	s.ClientIP = &v
	return s
}

func (s *RemoveClientFromBlackListRequest) SetClientToken(v string) *RemoveClientFromBlackListRequest {
	s.ClientToken = &v
	return s
}

type RemoveClientFromBlackListResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s RemoveClientFromBlackListResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveClientFromBlackListResponse) GoString() string {
	return s.String()
}

func (s *RemoveClientFromBlackListResponse) SetRequestId(v string) *RemoveClientFromBlackListResponse {
	s.RequestId = &v
	return s
}

type DescribeBlackListClientsRequest struct {
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	ClientIP     *string `json:"ClientIP,omitempty" xml:"ClientIP,omitempty"`
}

func (s DescribeBlackListClientsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeBlackListClientsRequest) GoString() string {
	return s.String()
}

func (s *DescribeBlackListClientsRequest) SetRegionId(v string) *DescribeBlackListClientsRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeBlackListClientsRequest) SetFileSystemId(v string) *DescribeBlackListClientsRequest {
	s.FileSystemId = &v
	return s
}

func (s *DescribeBlackListClientsRequest) SetClientIP(v string) *DescribeBlackListClientsRequest {
	s.ClientIP = &v
	return s
}

type DescribeBlackListClientsResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Clients   *string `json:"Clients,omitempty" xml:"Clients,omitempty" require:"true"`
}

func (s DescribeBlackListClientsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeBlackListClientsResponse) GoString() string {
	return s.String()
}

func (s *DescribeBlackListClientsResponse) SetRequestId(v string) *DescribeBlackListClientsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeBlackListClientsResponse) SetClients(v string) *DescribeBlackListClientsResponse {
	s.Clients = &v
	return s
}

type AddClientToBlackListRequest struct {
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	ClientIP     *string `json:"ClientIP,omitempty" xml:"ClientIP,omitempty" require:"true"`
	ClientToken  *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty" require:"true"`
}

func (s AddClientToBlackListRequest) String() string {
	return tea.Prettify(s)
}

func (s AddClientToBlackListRequest) GoString() string {
	return s.String()
}

func (s *AddClientToBlackListRequest) SetRegionId(v string) *AddClientToBlackListRequest {
	s.RegionId = &v
	return s
}

func (s *AddClientToBlackListRequest) SetFileSystemId(v string) *AddClientToBlackListRequest {
	s.FileSystemId = &v
	return s
}

func (s *AddClientToBlackListRequest) SetClientIP(v string) *AddClientToBlackListRequest {
	s.ClientIP = &v
	return s
}

func (s *AddClientToBlackListRequest) SetClientToken(v string) *AddClientToBlackListRequest {
	s.ClientToken = &v
	return s
}

type AddClientToBlackListResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s AddClientToBlackListResponse) String() string {
	return tea.Prettify(s)
}

func (s AddClientToBlackListResponse) GoString() string {
	return s.String()
}

func (s *AddClientToBlackListResponse) SetRequestId(v string) *AddClientToBlackListResponse {
	s.RequestId = &v
	return s
}

type DescribeLDAPConfigRequest struct {
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
}

func (s DescribeLDAPConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeLDAPConfigRequest) GoString() string {
	return s.String()
}

func (s *DescribeLDAPConfigRequest) SetFileSystemId(v string) *DescribeLDAPConfigRequest {
	s.FileSystemId = &v
	return s
}

type DescribeLDAPConfigResponse struct {
	RequestId *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Ldap      *DescribeLDAPConfigResponseLdap `json:"Ldap,omitempty" xml:"Ldap,omitempty" require:"true" type:"Struct"`
}

func (s DescribeLDAPConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeLDAPConfigResponse) GoString() string {
	return s.String()
}

func (s *DescribeLDAPConfigResponse) SetRequestId(v string) *DescribeLDAPConfigResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeLDAPConfigResponse) SetLdap(v *DescribeLDAPConfigResponseLdap) *DescribeLDAPConfigResponse {
	s.Ldap = v
	return s
}

type DescribeLDAPConfigResponseLdap struct {
	BindDN     *string `json:"BindDN,omitempty" xml:"BindDN,omitempty" require:"true"`
	URI        *string `json:"URI,omitempty" xml:"URI,omitempty" require:"true"`
	SearchBase *string `json:"SearchBase,omitempty" xml:"SearchBase,omitempty" require:"true"`
}

func (s DescribeLDAPConfigResponseLdap) String() string {
	return tea.Prettify(s)
}

func (s DescribeLDAPConfigResponseLdap) GoString() string {
	return s.String()
}

func (s *DescribeLDAPConfigResponseLdap) SetBindDN(v string) *DescribeLDAPConfigResponseLdap {
	s.BindDN = &v
	return s
}

func (s *DescribeLDAPConfigResponseLdap) SetURI(v string) *DescribeLDAPConfigResponseLdap {
	s.URI = &v
	return s
}

func (s *DescribeLDAPConfigResponseLdap) SetSearchBase(v string) *DescribeLDAPConfigResponseLdap {
	s.SearchBase = &v
	return s
}

type ModifyLDAPConfigRequest struct {
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	URI          *string `json:"URI,omitempty" xml:"URI,omitempty" require:"true"`
	BindDN       *string `json:"BindDN,omitempty" xml:"BindDN,omitempty"`
	SearchBase   *string `json:"SearchBase,omitempty" xml:"SearchBase,omitempty" require:"true"`
}

func (s ModifyLDAPConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyLDAPConfigRequest) GoString() string {
	return s.String()
}

func (s *ModifyLDAPConfigRequest) SetFileSystemId(v string) *ModifyLDAPConfigRequest {
	s.FileSystemId = &v
	return s
}

func (s *ModifyLDAPConfigRequest) SetURI(v string) *ModifyLDAPConfigRequest {
	s.URI = &v
	return s
}

func (s *ModifyLDAPConfigRequest) SetBindDN(v string) *ModifyLDAPConfigRequest {
	s.BindDN = &v
	return s
}

func (s *ModifyLDAPConfigRequest) SetSearchBase(v string) *ModifyLDAPConfigRequest {
	s.SearchBase = &v
	return s
}

type ModifyLDAPConfigResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyLDAPConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyLDAPConfigResponse) GoString() string {
	return s.String()
}

func (s *ModifyLDAPConfigResponse) SetRequestId(v string) *ModifyLDAPConfigResponse {
	s.RequestId = &v
	return s
}

type CreateLDAPConfigRequest struct {
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	URI          *string `json:"URI,omitempty" xml:"URI,omitempty" require:"true"`
	BindDN       *string `json:"BindDN,omitempty" xml:"BindDN,omitempty"`
	SearchBase   *string `json:"SearchBase,omitempty" xml:"SearchBase,omitempty" require:"true"`
}

func (s CreateLDAPConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateLDAPConfigRequest) GoString() string {
	return s.String()
}

func (s *CreateLDAPConfigRequest) SetFileSystemId(v string) *CreateLDAPConfigRequest {
	s.FileSystemId = &v
	return s
}

func (s *CreateLDAPConfigRequest) SetURI(v string) *CreateLDAPConfigRequest {
	s.URI = &v
	return s
}

func (s *CreateLDAPConfigRequest) SetBindDN(v string) *CreateLDAPConfigRequest {
	s.BindDN = &v
	return s
}

func (s *CreateLDAPConfigRequest) SetSearchBase(v string) *CreateLDAPConfigRequest {
	s.SearchBase = &v
	return s
}

type CreateLDAPConfigResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CreateLDAPConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateLDAPConfigResponse) GoString() string {
	return s.String()
}

func (s *CreateLDAPConfigResponse) SetRequestId(v string) *CreateLDAPConfigResponse {
	s.RequestId = &v
	return s
}

type DeleteLDAPConfigRequest struct {
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
}

func (s DeleteLDAPConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteLDAPConfigRequest) GoString() string {
	return s.String()
}

func (s *DeleteLDAPConfigRequest) SetFileSystemId(v string) *DeleteLDAPConfigRequest {
	s.FileSystemId = &v
	return s
}

type DeleteLDAPConfigResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteLDAPConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteLDAPConfigResponse) GoString() string {
	return s.String()
}

func (s *DeleteLDAPConfigResponse) SetRequestId(v string) *DeleteLDAPConfigResponse {
	s.RequestId = &v
	return s
}

type DescribeTagsRequest struct {
	FileSystemId *string                   `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty"`
	PageSize     *int                      `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber   *int                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	Tag          []*DescribeTagsRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s DescribeTagsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagsRequest) GoString() string {
	return s.String()
}

func (s *DescribeTagsRequest) SetFileSystemId(v string) *DescribeTagsRequest {
	s.FileSystemId = &v
	return s
}

func (s *DescribeTagsRequest) SetPageSize(v int) *DescribeTagsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeTagsRequest) SetPageNumber(v int) *DescribeTagsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeTagsRequest) SetTag(v []*DescribeTagsRequestTag) *DescribeTagsRequest {
	s.Tag = v
	return s
}

type DescribeTagsRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s DescribeTagsRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagsRequestTag) GoString() string {
	return s.String()
}

func (s *DescribeTagsRequestTag) SetKey(v string) *DescribeTagsRequestTag {
	s.Key = &v
	return s
}

func (s *DescribeTagsRequestTag) SetValue(v string) *DescribeTagsRequestTag {
	s.Value = &v
	return s
}

type DescribeTagsResponse struct {
	RequestId  *string                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize   *int                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	Tags       *DescribeTagsResponseTags `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Struct"`
}

func (s DescribeTagsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagsResponse) GoString() string {
	return s.String()
}

func (s *DescribeTagsResponse) SetRequestId(v string) *DescribeTagsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeTagsResponse) SetTotalCount(v int) *DescribeTagsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeTagsResponse) SetPageSize(v int) *DescribeTagsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeTagsResponse) SetPageNumber(v int) *DescribeTagsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeTagsResponse) SetTags(v *DescribeTagsResponseTags) *DescribeTagsResponse {
	s.Tags = v
	return s
}

type DescribeTagsResponseTags struct {
	Tag []*DescribeTagsResponseTagsTag `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeTagsResponseTags) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagsResponseTags) GoString() string {
	return s.String()
}

func (s *DescribeTagsResponseTags) SetTag(v []*DescribeTagsResponseTagsTag) *DescribeTagsResponseTags {
	s.Tag = v
	return s
}

type DescribeTagsResponseTagsTag struct {
	Key           *string                                   `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value         *string                                   `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	FileSystemIds *DescribeTagsResponseTagsTagFileSystemIds `json:"FileSystemIds,omitempty" xml:"FileSystemIds,omitempty" require:"true" type:"Struct"`
}

func (s DescribeTagsResponseTagsTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagsResponseTagsTag) GoString() string {
	return s.String()
}

func (s *DescribeTagsResponseTagsTag) SetKey(v string) *DescribeTagsResponseTagsTag {
	s.Key = &v
	return s
}

func (s *DescribeTagsResponseTagsTag) SetValue(v string) *DescribeTagsResponseTagsTag {
	s.Value = &v
	return s
}

func (s *DescribeTagsResponseTagsTag) SetFileSystemIds(v *DescribeTagsResponseTagsTagFileSystemIds) *DescribeTagsResponseTagsTag {
	s.FileSystemIds = v
	return s
}

type DescribeTagsResponseTagsTagFileSystemIds struct {
	// FileSystemId
	FileSystemId []*string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeTagsResponseTagsTagFileSystemIds) String() string {
	return tea.Prettify(s)
}

func (s DescribeTagsResponseTagsTagFileSystemIds) GoString() string {
	return s.String()
}

func (s *DescribeTagsResponseTagsTagFileSystemIds) SetFileSystemId(v []*string) *DescribeTagsResponseTagsTagFileSystemIds {
	s.FileSystemId = v
	return s
}

type RemoveTagsRequest struct {
	FileSystemId *string                 `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	Tag          []*RemoveTagsRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true" type:"Repeated"`
}

func (s RemoveTagsRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveTagsRequest) GoString() string {
	return s.String()
}

func (s *RemoveTagsRequest) SetFileSystemId(v string) *RemoveTagsRequest {
	s.FileSystemId = &v
	return s
}

func (s *RemoveTagsRequest) SetTag(v []*RemoveTagsRequestTag) *RemoveTagsRequest {
	s.Tag = v
	return s
}

type RemoveTagsRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
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
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s RemoveTagsResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveTagsResponse) GoString() string {
	return s.String()
}

func (s *RemoveTagsResponse) SetRequestId(v string) *RemoveTagsResponse {
	s.RequestId = &v
	return s
}

type AddTagsRequest struct {
	FileSystemId *string              `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	Tag          []*AddTagsRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true" type:"Repeated"`
}

func (s AddTagsRequest) String() string {
	return tea.Prettify(s)
}

func (s AddTagsRequest) GoString() string {
	return s.String()
}

func (s *AddTagsRequest) SetFileSystemId(v string) *AddTagsRequest {
	s.FileSystemId = &v
	return s
}

func (s *AddTagsRequest) SetTag(v []*AddTagsRequestTag) *AddTagsRequest {
	s.Tag = v
	return s
}

type AddTagsRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
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
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s AddTagsResponse) String() string {
	return tea.Prettify(s)
}

func (s AddTagsResponse) GoString() string {
	return s.String()
}

func (s *AddTagsResponse) SetRequestId(v string) *AddTagsResponse {
	s.RequestId = &v
	return s
}

type ResetFileSystemRequest struct {
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	SnapshotId   *string `json:"SnapshotId,omitempty" xml:"SnapshotId,omitempty" require:"true"`
}

func (s ResetFileSystemRequest) String() string {
	return tea.Prettify(s)
}

func (s ResetFileSystemRequest) GoString() string {
	return s.String()
}

func (s *ResetFileSystemRequest) SetFileSystemId(v string) *ResetFileSystemRequest {
	s.FileSystemId = &v
	return s
}

func (s *ResetFileSystemRequest) SetSnapshotId(v string) *ResetFileSystemRequest {
	s.SnapshotId = &v
	return s
}

type ResetFileSystemResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ResetFileSystemResponse) String() string {
	return tea.Prettify(s)
}

func (s ResetFileSystemResponse) GoString() string {
	return s.String()
}

func (s *ResetFileSystemResponse) SetRequestId(v string) *ResetFileSystemResponse {
	s.RequestId = &v
	return s
}

type CreateAutoSnapshotPolicyRequest struct {
	RepeatWeekdays         *string `json:"RepeatWeekdays,omitempty" xml:"RepeatWeekdays,omitempty" require:"true"`
	TimePoints             *string `json:"TimePoints,omitempty" xml:"TimePoints,omitempty" require:"true"`
	RetentionDays          *int    `json:"RetentionDays,omitempty" xml:"RetentionDays,omitempty"`
	AutoSnapshotPolicyName *string `json:"AutoSnapshotPolicyName,omitempty" xml:"AutoSnapshotPolicyName,omitempty"`
	FileSystemType         *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty" require:"true"`
}

func (s CreateAutoSnapshotPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateAutoSnapshotPolicyRequest) GoString() string {
	return s.String()
}

func (s *CreateAutoSnapshotPolicyRequest) SetRepeatWeekdays(v string) *CreateAutoSnapshotPolicyRequest {
	s.RepeatWeekdays = &v
	return s
}

func (s *CreateAutoSnapshotPolicyRequest) SetTimePoints(v string) *CreateAutoSnapshotPolicyRequest {
	s.TimePoints = &v
	return s
}

func (s *CreateAutoSnapshotPolicyRequest) SetRetentionDays(v int) *CreateAutoSnapshotPolicyRequest {
	s.RetentionDays = &v
	return s
}

func (s *CreateAutoSnapshotPolicyRequest) SetAutoSnapshotPolicyName(v string) *CreateAutoSnapshotPolicyRequest {
	s.AutoSnapshotPolicyName = &v
	return s
}

func (s *CreateAutoSnapshotPolicyRequest) SetFileSystemType(v string) *CreateAutoSnapshotPolicyRequest {
	s.FileSystemType = &v
	return s
}

type CreateAutoSnapshotPolicyResponse struct {
	RequestId            *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AutoSnapshotPolicyId *string `json:"AutoSnapshotPolicyId,omitempty" xml:"AutoSnapshotPolicyId,omitempty" require:"true"`
}

func (s CreateAutoSnapshotPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateAutoSnapshotPolicyResponse) GoString() string {
	return s.String()
}

func (s *CreateAutoSnapshotPolicyResponse) SetRequestId(v string) *CreateAutoSnapshotPolicyResponse {
	s.RequestId = &v
	return s
}

func (s *CreateAutoSnapshotPolicyResponse) SetAutoSnapshotPolicyId(v string) *CreateAutoSnapshotPolicyResponse {
	s.AutoSnapshotPolicyId = &v
	return s
}

type DescribeAutoSnapshotPoliciesRequest struct {
	AutoSnapshotPolicyId *string `json:"AutoSnapshotPolicyId,omitempty" xml:"AutoSnapshotPolicyId,omitempty"`
	PageSize             *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber           *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	FileSystemType       *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty" require:"true"`
}

func (s DescribeAutoSnapshotPoliciesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAutoSnapshotPoliciesRequest) GoString() string {
	return s.String()
}

func (s *DescribeAutoSnapshotPoliciesRequest) SetAutoSnapshotPolicyId(v string) *DescribeAutoSnapshotPoliciesRequest {
	s.AutoSnapshotPolicyId = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesRequest) SetPageSize(v int) *DescribeAutoSnapshotPoliciesRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesRequest) SetPageNumber(v int) *DescribeAutoSnapshotPoliciesRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesRequest) SetFileSystemType(v string) *DescribeAutoSnapshotPoliciesRequest {
	s.FileSystemType = &v
	return s
}

type DescribeAutoSnapshotPoliciesResponse struct {
	RequestId            *string                                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount           *int                                                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize             *int                                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber           *int                                                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	AutoSnapshotPolicies *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies `json:"AutoSnapshotPolicies,omitempty" xml:"AutoSnapshotPolicies,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAutoSnapshotPoliciesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAutoSnapshotPoliciesResponse) GoString() string {
	return s.String()
}

func (s *DescribeAutoSnapshotPoliciesResponse) SetRequestId(v string) *DescribeAutoSnapshotPoliciesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesResponse) SetTotalCount(v int) *DescribeAutoSnapshotPoliciesResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesResponse) SetPageSize(v int) *DescribeAutoSnapshotPoliciesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesResponse) SetPageNumber(v int) *DescribeAutoSnapshotPoliciesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesResponse) SetAutoSnapshotPolicies(v *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies) *DescribeAutoSnapshotPoliciesResponse {
	s.AutoSnapshotPolicies = v
	return s
}

type DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies struct {
	AutoSnapshotPolicy []*DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy `json:"AutoSnapshotPolicy,omitempty" xml:"AutoSnapshotPolicy,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies) String() string {
	return tea.Prettify(s)
}

func (s DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies) GoString() string {
	return s.String()
}

func (s *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies) SetAutoSnapshotPolicy(v []*DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy) *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies {
	s.AutoSnapshotPolicy = v
	return s
}

type DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy struct {
	AutoSnapshotPolicyId   *string `json:"AutoSnapshotPolicyId,omitempty" xml:"AutoSnapshotPolicyId,omitempty" require:"true"`
	AutoSnapshotPolicyName *string `json:"AutoSnapshotPolicyName,omitempty" xml:"AutoSnapshotPolicyName,omitempty" require:"true"`
	CreateTime             *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	FileSystemNums         *int    `json:"FileSystemNums,omitempty" xml:"FileSystemNums,omitempty" require:"true"`
	RegionId               *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	RepeatWeekdays         *string `json:"RepeatWeekdays,omitempty" xml:"RepeatWeekdays,omitempty" require:"true"`
	RetentionDays          *int    `json:"RetentionDays,omitempty" xml:"RetentionDays,omitempty" require:"true"`
	Status                 *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	TimePoints             *string `json:"TimePoints,omitempty" xml:"TimePoints,omitempty" require:"true"`
}

func (s DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy) String() string {
	return tea.Prettify(s)
}

func (s DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy) GoString() string {
	return s.String()
}

func (s *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy) SetAutoSnapshotPolicyId(v string) *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy {
	s.AutoSnapshotPolicyId = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy) SetAutoSnapshotPolicyName(v string) *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy {
	s.AutoSnapshotPolicyName = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy) SetCreateTime(v string) *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy {
	s.CreateTime = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy) SetFileSystemNums(v int) *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy {
	s.FileSystemNums = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy) SetRegionId(v string) *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy {
	s.RegionId = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy) SetRepeatWeekdays(v string) *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy {
	s.RepeatWeekdays = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy) SetRetentionDays(v int) *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy {
	s.RetentionDays = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy) SetStatus(v string) *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy {
	s.Status = &v
	return s
}

func (s *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy) SetTimePoints(v string) *DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy {
	s.TimePoints = &v
	return s
}

type CancelAutoSnapshotPolicyRequest struct {
	FileSystemIds *string `json:"FileSystemIds,omitempty" xml:"FileSystemIds,omitempty" require:"true"`
}

func (s CancelAutoSnapshotPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s CancelAutoSnapshotPolicyRequest) GoString() string {
	return s.String()
}

func (s *CancelAutoSnapshotPolicyRequest) SetFileSystemIds(v string) *CancelAutoSnapshotPolicyRequest {
	s.FileSystemIds = &v
	return s
}

type CancelAutoSnapshotPolicyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CancelAutoSnapshotPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s CancelAutoSnapshotPolicyResponse) GoString() string {
	return s.String()
}

func (s *CancelAutoSnapshotPolicyResponse) SetRequestId(v string) *CancelAutoSnapshotPolicyResponse {
	s.RequestId = &v
	return s
}

type ApplyAutoSnapshotPolicyRequest struct {
	AutoSnapshotPolicyId *string `json:"AutoSnapshotPolicyId,omitempty" xml:"AutoSnapshotPolicyId,omitempty" require:"true"`
	FileSystemIds        *string `json:"FileSystemIds,omitempty" xml:"FileSystemIds,omitempty" require:"true"`
}

func (s ApplyAutoSnapshotPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s ApplyAutoSnapshotPolicyRequest) GoString() string {
	return s.String()
}

func (s *ApplyAutoSnapshotPolicyRequest) SetAutoSnapshotPolicyId(v string) *ApplyAutoSnapshotPolicyRequest {
	s.AutoSnapshotPolicyId = &v
	return s
}

func (s *ApplyAutoSnapshotPolicyRequest) SetFileSystemIds(v string) *ApplyAutoSnapshotPolicyRequest {
	s.FileSystemIds = &v
	return s
}

type ApplyAutoSnapshotPolicyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ApplyAutoSnapshotPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s ApplyAutoSnapshotPolicyResponse) GoString() string {
	return s.String()
}

func (s *ApplyAutoSnapshotPolicyResponse) SetRequestId(v string) *ApplyAutoSnapshotPolicyResponse {
	s.RequestId = &v
	return s
}

type ModifyAutoSnapshotPolicyRequest struct {
	AutoSnapshotPolicyId   *string `json:"AutoSnapshotPolicyId,omitempty" xml:"AutoSnapshotPolicyId,omitempty" require:"true"`
	AutoSnapshotPolicyName *string `json:"AutoSnapshotPolicyName,omitempty" xml:"AutoSnapshotPolicyName,omitempty"`
	RepeatWeekdays         *string `json:"RepeatWeekdays,omitempty" xml:"RepeatWeekdays,omitempty"`
	RetentionDays          *int    `json:"RetentionDays,omitempty" xml:"RetentionDays,omitempty"`
	TimePoints             *string `json:"TimePoints,omitempty" xml:"TimePoints,omitempty"`
}

func (s ModifyAutoSnapshotPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyAutoSnapshotPolicyRequest) GoString() string {
	return s.String()
}

func (s *ModifyAutoSnapshotPolicyRequest) SetAutoSnapshotPolicyId(v string) *ModifyAutoSnapshotPolicyRequest {
	s.AutoSnapshotPolicyId = &v
	return s
}

func (s *ModifyAutoSnapshotPolicyRequest) SetAutoSnapshotPolicyName(v string) *ModifyAutoSnapshotPolicyRequest {
	s.AutoSnapshotPolicyName = &v
	return s
}

func (s *ModifyAutoSnapshotPolicyRequest) SetRepeatWeekdays(v string) *ModifyAutoSnapshotPolicyRequest {
	s.RepeatWeekdays = &v
	return s
}

func (s *ModifyAutoSnapshotPolicyRequest) SetRetentionDays(v int) *ModifyAutoSnapshotPolicyRequest {
	s.RetentionDays = &v
	return s
}

func (s *ModifyAutoSnapshotPolicyRequest) SetTimePoints(v string) *ModifyAutoSnapshotPolicyRequest {
	s.TimePoints = &v
	return s
}

type ModifyAutoSnapshotPolicyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyAutoSnapshotPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyAutoSnapshotPolicyResponse) GoString() string {
	return s.String()
}

func (s *ModifyAutoSnapshotPolicyResponse) SetRequestId(v string) *ModifyAutoSnapshotPolicyResponse {
	s.RequestId = &v
	return s
}

type DeleteAutoSnapshotPolicyRequest struct {
	AutoSnapshotPolicyId *string `json:"AutoSnapshotPolicyId,omitempty" xml:"AutoSnapshotPolicyId,omitempty" require:"true"`
}

func (s DeleteAutoSnapshotPolicyRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAutoSnapshotPolicyRequest) GoString() string {
	return s.String()
}

func (s *DeleteAutoSnapshotPolicyRequest) SetAutoSnapshotPolicyId(v string) *DeleteAutoSnapshotPolicyRequest {
	s.AutoSnapshotPolicyId = &v
	return s
}

type DeleteAutoSnapshotPolicyResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteAutoSnapshotPolicyResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAutoSnapshotPolicyResponse) GoString() string {
	return s.String()
}

func (s *DeleteAutoSnapshotPolicyResponse) SetRequestId(v string) *DeleteAutoSnapshotPolicyResponse {
	s.RequestId = &v
	return s
}

type DeleteSnapshotRequest struct {
	SnapshotId *string `json:"SnapshotId,omitempty" xml:"SnapshotId,omitempty" require:"true"`
}

func (s DeleteSnapshotRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteSnapshotRequest) GoString() string {
	return s.String()
}

func (s *DeleteSnapshotRequest) SetSnapshotId(v string) *DeleteSnapshotRequest {
	s.SnapshotId = &v
	return s
}

type DeleteSnapshotResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteSnapshotResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteSnapshotResponse) GoString() string {
	return s.String()
}

func (s *DeleteSnapshotResponse) SetRequestId(v string) *DeleteSnapshotResponse {
	s.RequestId = &v
	return s
}

type CreateSnapshotRequest struct {
	FileSystemId  *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	SnapshotName  *string `json:"SnapshotName,omitempty" xml:"SnapshotName,omitempty"`
	Description   *string `json:"Description,omitempty" xml:"Description,omitempty"`
	RetentionDays *int    `json:"RetentionDays,omitempty" xml:"RetentionDays,omitempty"`
}

func (s CreateSnapshotRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateSnapshotRequest) GoString() string {
	return s.String()
}

func (s *CreateSnapshotRequest) SetFileSystemId(v string) *CreateSnapshotRequest {
	s.FileSystemId = &v
	return s
}

func (s *CreateSnapshotRequest) SetSnapshotName(v string) *CreateSnapshotRequest {
	s.SnapshotName = &v
	return s
}

func (s *CreateSnapshotRequest) SetDescription(v string) *CreateSnapshotRequest {
	s.Description = &v
	return s
}

func (s *CreateSnapshotRequest) SetRetentionDays(v int) *CreateSnapshotRequest {
	s.RetentionDays = &v
	return s
}

type CreateSnapshotResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	SnapshotId *string `json:"SnapshotId,omitempty" xml:"SnapshotId,omitempty" require:"true"`
}

func (s CreateSnapshotResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateSnapshotResponse) GoString() string {
	return s.String()
}

func (s *CreateSnapshotResponse) SetRequestId(v string) *CreateSnapshotResponse {
	s.RequestId = &v
	return s
}

func (s *CreateSnapshotResponse) SetSnapshotId(v string) *CreateSnapshotResponse {
	s.SnapshotId = &v
	return s
}

type DescribeSnapshotsRequest struct {
	FileSystemType *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty" require:"true"`
	FileSystemId   *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty"`
	SnapshotIds    *string `json:"SnapshotIds,omitempty" xml:"SnapshotIds,omitempty"`
	SnapshotName   *string `json:"SnapshotName,omitempty" xml:"SnapshotName,omitempty"`
	SnapshotType   *string `json:"SnapshotType,omitempty" xml:"SnapshotType,omitempty"`
	Status         *string `json:"Status,omitempty" xml:"Status,omitempty"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeSnapshotsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSnapshotsRequest) GoString() string {
	return s.String()
}

func (s *DescribeSnapshotsRequest) SetFileSystemType(v string) *DescribeSnapshotsRequest {
	s.FileSystemType = &v
	return s
}

func (s *DescribeSnapshotsRequest) SetFileSystemId(v string) *DescribeSnapshotsRequest {
	s.FileSystemId = &v
	return s
}

func (s *DescribeSnapshotsRequest) SetSnapshotIds(v string) *DescribeSnapshotsRequest {
	s.SnapshotIds = &v
	return s
}

func (s *DescribeSnapshotsRequest) SetSnapshotName(v string) *DescribeSnapshotsRequest {
	s.SnapshotName = &v
	return s
}

func (s *DescribeSnapshotsRequest) SetSnapshotType(v string) *DescribeSnapshotsRequest {
	s.SnapshotType = &v
	return s
}

func (s *DescribeSnapshotsRequest) SetStatus(v string) *DescribeSnapshotsRequest {
	s.Status = &v
	return s
}

func (s *DescribeSnapshotsRequest) SetPageSize(v int) *DescribeSnapshotsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeSnapshotsRequest) SetPageNumber(v int) *DescribeSnapshotsRequest {
	s.PageNumber = &v
	return s
}

type DescribeSnapshotsResponse struct {
	RequestId  *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int                                `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize   *int                                `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                                `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	Snapshots  *DescribeSnapshotsResponseSnapshots `json:"Snapshots,omitempty" xml:"Snapshots,omitempty" require:"true" type:"Struct"`
}

func (s DescribeSnapshotsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSnapshotsResponse) GoString() string {
	return s.String()
}

func (s *DescribeSnapshotsResponse) SetRequestId(v string) *DescribeSnapshotsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSnapshotsResponse) SetTotalCount(v int) *DescribeSnapshotsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeSnapshotsResponse) SetPageSize(v int) *DescribeSnapshotsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeSnapshotsResponse) SetPageNumber(v int) *DescribeSnapshotsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeSnapshotsResponse) SetSnapshots(v *DescribeSnapshotsResponseSnapshots) *DescribeSnapshotsResponse {
	s.Snapshots = v
	return s
}

type DescribeSnapshotsResponseSnapshots struct {
	Snapshot []*DescribeSnapshotsResponseSnapshotsSnapshot `json:"Snapshot,omitempty" xml:"Snapshot,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeSnapshotsResponseSnapshots) String() string {
	return tea.Prettify(s)
}

func (s DescribeSnapshotsResponseSnapshots) GoString() string {
	return s.String()
}

func (s *DescribeSnapshotsResponseSnapshots) SetSnapshot(v []*DescribeSnapshotsResponseSnapshotsSnapshot) *DescribeSnapshotsResponseSnapshots {
	s.Snapshot = v
	return s
}

type DescribeSnapshotsResponseSnapshotsSnapshot struct {
	CreateTime              *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	Description             *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Progress                *string `json:"Progress,omitempty" xml:"Progress,omitempty" require:"true"`
	RemainTime              *int    `json:"RemainTime,omitempty" xml:"RemainTime,omitempty" require:"true"`
	RetentionDays           *int    `json:"RetentionDays,omitempty" xml:"RetentionDays,omitempty" require:"true"`
	SnapshotId              *string `json:"SnapshotId,omitempty" xml:"SnapshotId,omitempty" require:"true"`
	SnapshotName            *string `json:"SnapshotName,omitempty" xml:"SnapshotName,omitempty" require:"true"`
	SourceFileSystemId      *string `json:"SourceFileSystemId,omitempty" xml:"SourceFileSystemId,omitempty" require:"true"`
	SourceFileSystemSize    *int64  `json:"SourceFileSystemSize,omitempty" xml:"SourceFileSystemSize,omitempty" require:"true"`
	Status                  *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	EncryptType             *int    `json:"EncryptType,omitempty" xml:"EncryptType,omitempty" require:"true"`
	SourceFileSystemVersion *string `json:"SourceFileSystemVersion,omitempty" xml:"SourceFileSystemVersion,omitempty" require:"true"`
}

func (s DescribeSnapshotsResponseSnapshotsSnapshot) String() string {
	return tea.Prettify(s)
}

func (s DescribeSnapshotsResponseSnapshotsSnapshot) GoString() string {
	return s.String()
}

func (s *DescribeSnapshotsResponseSnapshotsSnapshot) SetCreateTime(v string) *DescribeSnapshotsResponseSnapshotsSnapshot {
	s.CreateTime = &v
	return s
}

func (s *DescribeSnapshotsResponseSnapshotsSnapshot) SetDescription(v string) *DescribeSnapshotsResponseSnapshotsSnapshot {
	s.Description = &v
	return s
}

func (s *DescribeSnapshotsResponseSnapshotsSnapshot) SetProgress(v string) *DescribeSnapshotsResponseSnapshotsSnapshot {
	s.Progress = &v
	return s
}

func (s *DescribeSnapshotsResponseSnapshotsSnapshot) SetRemainTime(v int) *DescribeSnapshotsResponseSnapshotsSnapshot {
	s.RemainTime = &v
	return s
}

func (s *DescribeSnapshotsResponseSnapshotsSnapshot) SetRetentionDays(v int) *DescribeSnapshotsResponseSnapshotsSnapshot {
	s.RetentionDays = &v
	return s
}

func (s *DescribeSnapshotsResponseSnapshotsSnapshot) SetSnapshotId(v string) *DescribeSnapshotsResponseSnapshotsSnapshot {
	s.SnapshotId = &v
	return s
}

func (s *DescribeSnapshotsResponseSnapshotsSnapshot) SetSnapshotName(v string) *DescribeSnapshotsResponseSnapshotsSnapshot {
	s.SnapshotName = &v
	return s
}

func (s *DescribeSnapshotsResponseSnapshotsSnapshot) SetSourceFileSystemId(v string) *DescribeSnapshotsResponseSnapshotsSnapshot {
	s.SourceFileSystemId = &v
	return s
}

func (s *DescribeSnapshotsResponseSnapshotsSnapshot) SetSourceFileSystemSize(v int64) *DescribeSnapshotsResponseSnapshotsSnapshot {
	s.SourceFileSystemSize = &v
	return s
}

func (s *DescribeSnapshotsResponseSnapshotsSnapshot) SetStatus(v string) *DescribeSnapshotsResponseSnapshotsSnapshot {
	s.Status = &v
	return s
}

func (s *DescribeSnapshotsResponseSnapshotsSnapshot) SetEncryptType(v int) *DescribeSnapshotsResponseSnapshotsSnapshot {
	s.EncryptType = &v
	return s
}

func (s *DescribeSnapshotsResponseSnapshotsSnapshot) SetSourceFileSystemVersion(v string) *DescribeSnapshotsResponseSnapshotsSnapshot {
	s.SourceFileSystemVersion = &v
	return s
}

type DescribeZonesRequest struct {
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s DescribeZonesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeZonesRequest) GoString() string {
	return s.String()
}

func (s *DescribeZonesRequest) SetRegionId(v string) *DescribeZonesRequest {
	s.RegionId = &v
	return s
}

type DescribeZonesResponse struct {
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Zones     *DescribeZonesResponseZones `json:"Zones,omitempty" xml:"Zones,omitempty" require:"true" type:"Struct"`
}

func (s DescribeZonesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeZonesResponse) GoString() string {
	return s.String()
}

func (s *DescribeZonesResponse) SetRequestId(v string) *DescribeZonesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeZonesResponse) SetZones(v *DescribeZonesResponseZones) *DescribeZonesResponse {
	s.Zones = v
	return s
}

type DescribeZonesResponseZones struct {
	Zone []*DescribeZonesResponseZonesZone `json:"Zone,omitempty" xml:"Zone,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeZonesResponseZones) String() string {
	return tea.Prettify(s)
}

func (s DescribeZonesResponseZones) GoString() string {
	return s.String()
}

func (s *DescribeZonesResponseZones) SetZone(v []*DescribeZonesResponseZonesZone) *DescribeZonesResponseZones {
	s.Zone = v
	return s
}

type DescribeZonesResponseZonesZone struct {
	ZoneId      *string                                    `json:"ZoneId,omitempty" xml:"ZoneId,omitempty" require:"true"`
	Capacity    *DescribeZonesResponseZonesZoneCapacity    `json:"Capacity,omitempty" xml:"Capacity,omitempty" require:"true" type:"Struct"`
	Performance *DescribeZonesResponseZonesZonePerformance `json:"Performance,omitempty" xml:"Performance,omitempty" require:"true" type:"Struct"`
}

func (s DescribeZonesResponseZonesZone) String() string {
	return tea.Prettify(s)
}

func (s DescribeZonesResponseZonesZone) GoString() string {
	return s.String()
}

func (s *DescribeZonesResponseZonesZone) SetZoneId(v string) *DescribeZonesResponseZonesZone {
	s.ZoneId = &v
	return s
}

func (s *DescribeZonesResponseZonesZone) SetCapacity(v *DescribeZonesResponseZonesZoneCapacity) *DescribeZonesResponseZonesZone {
	s.Capacity = v
	return s
}

func (s *DescribeZonesResponseZonesZone) SetPerformance(v *DescribeZonesResponseZonesZonePerformance) *DescribeZonesResponseZonesZone {
	s.Performance = v
	return s
}

type DescribeZonesResponseZonesZoneCapacity struct {
	// Protocol
	Protocol []*string `json:"Protocol,omitempty" xml:"Protocol,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeZonesResponseZonesZoneCapacity) String() string {
	return tea.Prettify(s)
}

func (s DescribeZonesResponseZonesZoneCapacity) GoString() string {
	return s.String()
}

func (s *DescribeZonesResponseZonesZoneCapacity) SetProtocol(v []*string) *DescribeZonesResponseZonesZoneCapacity {
	s.Protocol = v
	return s
}

type DescribeZonesResponseZonesZonePerformance struct {
	// Protocol
	Protocol []*string `json:"Protocol,omitempty" xml:"Protocol,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeZonesResponseZonesZonePerformance) String() string {
	return tea.Prettify(s)
}

func (s DescribeZonesResponseZonesZonePerformance) GoString() string {
	return s.String()
}

func (s *DescribeZonesResponseZonesZonePerformance) SetProtocol(v []*string) *DescribeZonesResponseZonesZonePerformance {
	s.Protocol = v
	return s
}

type CreateAccessGroupRequest struct {
	AccessGroupName *string `json:"AccessGroupName,omitempty" xml:"AccessGroupName,omitempty" require:"true"`
	AccessGroupType *string `json:"AccessGroupType,omitempty" xml:"AccessGroupType,omitempty" require:"true"`
	Description     *string `json:"Description,omitempty" xml:"Description,omitempty"`
	FileSystemType  *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty"`
}

func (s CreateAccessGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateAccessGroupRequest) GoString() string {
	return s.String()
}

func (s *CreateAccessGroupRequest) SetAccessGroupName(v string) *CreateAccessGroupRequest {
	s.AccessGroupName = &v
	return s
}

func (s *CreateAccessGroupRequest) SetAccessGroupType(v string) *CreateAccessGroupRequest {
	s.AccessGroupType = &v
	return s
}

func (s *CreateAccessGroupRequest) SetDescription(v string) *CreateAccessGroupRequest {
	s.Description = &v
	return s
}

func (s *CreateAccessGroupRequest) SetFileSystemType(v string) *CreateAccessGroupRequest {
	s.FileSystemType = &v
	return s
}

type CreateAccessGroupResponse struct {
	RequestId       *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AccessGroupName *string `json:"AccessGroupName,omitempty" xml:"AccessGroupName,omitempty" require:"true"`
}

func (s CreateAccessGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateAccessGroupResponse) GoString() string {
	return s.String()
}

func (s *CreateAccessGroupResponse) SetRequestId(v string) *CreateAccessGroupResponse {
	s.RequestId = &v
	return s
}

func (s *CreateAccessGroupResponse) SetAccessGroupName(v string) *CreateAccessGroupResponse {
	s.AccessGroupName = &v
	return s
}

type CreateMountTargetRequest struct {
	FileSystemId    *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	AccessGroupName *string `json:"AccessGroupName,omitempty" xml:"AccessGroupName,omitempty" require:"true"`
	NetworkType     *string `json:"NetworkType,omitempty" xml:"NetworkType,omitempty" require:"true"`
	VpcId           *string `json:"VpcId,omitempty" xml:"VpcId,omitempty"`
	VSwitchId       *string `json:"VSwitchId,omitempty" xml:"VSwitchId,omitempty"`
	SecurityGroupId *string `json:"SecurityGroupId,omitempty" xml:"SecurityGroupId,omitempty"`
}

func (s CreateMountTargetRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateMountTargetRequest) GoString() string {
	return s.String()
}

func (s *CreateMountTargetRequest) SetFileSystemId(v string) *CreateMountTargetRequest {
	s.FileSystemId = &v
	return s
}

func (s *CreateMountTargetRequest) SetAccessGroupName(v string) *CreateMountTargetRequest {
	s.AccessGroupName = &v
	return s
}

func (s *CreateMountTargetRequest) SetNetworkType(v string) *CreateMountTargetRequest {
	s.NetworkType = &v
	return s
}

func (s *CreateMountTargetRequest) SetVpcId(v string) *CreateMountTargetRequest {
	s.VpcId = &v
	return s
}

func (s *CreateMountTargetRequest) SetVSwitchId(v string) *CreateMountTargetRequest {
	s.VSwitchId = &v
	return s
}

func (s *CreateMountTargetRequest) SetSecurityGroupId(v string) *CreateMountTargetRequest {
	s.SecurityGroupId = &v
	return s
}

type CreateMountTargetResponse struct {
	RequestId         *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MountTargetDomain *string `json:"MountTargetDomain,omitempty" xml:"MountTargetDomain,omitempty" require:"true"`
}

func (s CreateMountTargetResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateMountTargetResponse) GoString() string {
	return s.String()
}

func (s *CreateMountTargetResponse) SetRequestId(v string) *CreateMountTargetResponse {
	s.RequestId = &v
	return s
}

func (s *CreateMountTargetResponse) SetMountTargetDomain(v string) *CreateMountTargetResponse {
	s.MountTargetDomain = &v
	return s
}

type CreateFileSystemRequest struct {
	FileSystemType *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty"`
	ChargeType     *string `json:"ChargeType,omitempty" xml:"ChargeType,omitempty"`
	Duration       *int    `json:"Duration,omitempty" xml:"Duration,omitempty"`
	Capacity       *int64  `json:"Capacity,omitempty" xml:"Capacity,omitempty"`
	Bandwidth      *int64  `json:"Bandwidth,omitempty" xml:"Bandwidth,omitempty"`
	StorageType    *string `json:"StorageType,omitempty" xml:"StorageType,omitempty" require:"true"`
	ZoneId         *string `json:"ZoneId,omitempty" xml:"ZoneId,omitempty"`
	ProtocolType   *string `json:"ProtocolType,omitempty" xml:"ProtocolType,omitempty" require:"true"`
	EncryptType    *int    `json:"EncryptType,omitempty" xml:"EncryptType,omitempty"`
	SnapshotId     *string `json:"SnapshotId,omitempty" xml:"SnapshotId,omitempty"`
	VpcId          *string `json:"VpcId,omitempty" xml:"VpcId,omitempty"`
	VSwitchId      *string `json:"VSwitchId,omitempty" xml:"VSwitchId,omitempty"`
	Description    *string `json:"Description,omitempty" xml:"Description,omitempty"`
	ClientToken    *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	DryRun         *bool   `json:"DryRun,omitempty" xml:"DryRun,omitempty"`
}

func (s CreateFileSystemRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateFileSystemRequest) GoString() string {
	return s.String()
}

func (s *CreateFileSystemRequest) SetFileSystemType(v string) *CreateFileSystemRequest {
	s.FileSystemType = &v
	return s
}

func (s *CreateFileSystemRequest) SetChargeType(v string) *CreateFileSystemRequest {
	s.ChargeType = &v
	return s
}

func (s *CreateFileSystemRequest) SetDuration(v int) *CreateFileSystemRequest {
	s.Duration = &v
	return s
}

func (s *CreateFileSystemRequest) SetCapacity(v int64) *CreateFileSystemRequest {
	s.Capacity = &v
	return s
}

func (s *CreateFileSystemRequest) SetBandwidth(v int64) *CreateFileSystemRequest {
	s.Bandwidth = &v
	return s
}

func (s *CreateFileSystemRequest) SetStorageType(v string) *CreateFileSystemRequest {
	s.StorageType = &v
	return s
}

func (s *CreateFileSystemRequest) SetZoneId(v string) *CreateFileSystemRequest {
	s.ZoneId = &v
	return s
}

func (s *CreateFileSystemRequest) SetProtocolType(v string) *CreateFileSystemRequest {
	s.ProtocolType = &v
	return s
}

func (s *CreateFileSystemRequest) SetEncryptType(v int) *CreateFileSystemRequest {
	s.EncryptType = &v
	return s
}

func (s *CreateFileSystemRequest) SetSnapshotId(v string) *CreateFileSystemRequest {
	s.SnapshotId = &v
	return s
}

func (s *CreateFileSystemRequest) SetVpcId(v string) *CreateFileSystemRequest {
	s.VpcId = &v
	return s
}

func (s *CreateFileSystemRequest) SetVSwitchId(v string) *CreateFileSystemRequest {
	s.VSwitchId = &v
	return s
}

func (s *CreateFileSystemRequest) SetDescription(v string) *CreateFileSystemRequest {
	s.Description = &v
	return s
}

func (s *CreateFileSystemRequest) SetClientToken(v string) *CreateFileSystemRequest {
	s.ClientToken = &v
	return s
}

func (s *CreateFileSystemRequest) SetDryRun(v bool) *CreateFileSystemRequest {
	s.DryRun = &v
	return s
}

type CreateFileSystemResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
}

func (s CreateFileSystemResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateFileSystemResponse) GoString() string {
	return s.String()
}

func (s *CreateFileSystemResponse) SetRequestId(v string) *CreateFileSystemResponse {
	s.RequestId = &v
	return s
}

func (s *CreateFileSystemResponse) SetFileSystemId(v string) *CreateFileSystemResponse {
	s.FileSystemId = &v
	return s
}

type CreateAccessRuleRequest struct {
	AccessGroupName *string `json:"AccessGroupName,omitempty" xml:"AccessGroupName,omitempty" require:"true"`
	SourceCidrIp    *string `json:"SourceCidrIp,omitempty" xml:"SourceCidrIp,omitempty" require:"true"`
	RWAccessType    *string `json:"RWAccessType,omitempty" xml:"RWAccessType,omitempty"`
	UserAccessType  *string `json:"UserAccessType,omitempty" xml:"UserAccessType,omitempty"`
	Priority        *int    `json:"Priority,omitempty" xml:"Priority,omitempty"`
	FileSystemType  *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty"`
}

func (s CreateAccessRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateAccessRuleRequest) GoString() string {
	return s.String()
}

func (s *CreateAccessRuleRequest) SetAccessGroupName(v string) *CreateAccessRuleRequest {
	s.AccessGroupName = &v
	return s
}

func (s *CreateAccessRuleRequest) SetSourceCidrIp(v string) *CreateAccessRuleRequest {
	s.SourceCidrIp = &v
	return s
}

func (s *CreateAccessRuleRequest) SetRWAccessType(v string) *CreateAccessRuleRequest {
	s.RWAccessType = &v
	return s
}

func (s *CreateAccessRuleRequest) SetUserAccessType(v string) *CreateAccessRuleRequest {
	s.UserAccessType = &v
	return s
}

func (s *CreateAccessRuleRequest) SetPriority(v int) *CreateAccessRuleRequest {
	s.Priority = &v
	return s
}

func (s *CreateAccessRuleRequest) SetFileSystemType(v string) *CreateAccessRuleRequest {
	s.FileSystemType = &v
	return s
}

type CreateAccessRuleResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AccessRuleId *string `json:"AccessRuleId,omitempty" xml:"AccessRuleId,omitempty" require:"true"`
}

func (s CreateAccessRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateAccessRuleResponse) GoString() string {
	return s.String()
}

func (s *CreateAccessRuleResponse) SetRequestId(v string) *CreateAccessRuleResponse {
	s.RequestId = &v
	return s
}

func (s *CreateAccessRuleResponse) SetAccessRuleId(v string) *CreateAccessRuleResponse {
	s.AccessRuleId = &v
	return s
}

type DescribeAccessRulesRequest struct {
	AccessGroupName *string `json:"AccessGroupName,omitempty" xml:"AccessGroupName,omitempty" require:"true"`
	AccessRuleId    *string `json:"AccessRuleId,omitempty" xml:"AccessRuleId,omitempty"`
	PageSize        *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber      *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	FileSystemType  *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty"`
}

func (s DescribeAccessRulesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAccessRulesRequest) GoString() string {
	return s.String()
}

func (s *DescribeAccessRulesRequest) SetAccessGroupName(v string) *DescribeAccessRulesRequest {
	s.AccessGroupName = &v
	return s
}

func (s *DescribeAccessRulesRequest) SetAccessRuleId(v string) *DescribeAccessRulesRequest {
	s.AccessRuleId = &v
	return s
}

func (s *DescribeAccessRulesRequest) SetPageSize(v int) *DescribeAccessRulesRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeAccessRulesRequest) SetPageNumber(v int) *DescribeAccessRulesRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeAccessRulesRequest) SetFileSystemType(v string) *DescribeAccessRulesRequest {
	s.FileSystemType = &v
	return s
}

type DescribeAccessRulesResponse struct {
	RequestId   *string                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount  *int                                    `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize    *int                                    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber  *int                                    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	AccessRules *DescribeAccessRulesResponseAccessRules `json:"AccessRules,omitempty" xml:"AccessRules,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAccessRulesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAccessRulesResponse) GoString() string {
	return s.String()
}

func (s *DescribeAccessRulesResponse) SetRequestId(v string) *DescribeAccessRulesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAccessRulesResponse) SetTotalCount(v int) *DescribeAccessRulesResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeAccessRulesResponse) SetPageSize(v int) *DescribeAccessRulesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeAccessRulesResponse) SetPageNumber(v int) *DescribeAccessRulesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeAccessRulesResponse) SetAccessRules(v *DescribeAccessRulesResponseAccessRules) *DescribeAccessRulesResponse {
	s.AccessRules = v
	return s
}

type DescribeAccessRulesResponseAccessRules struct {
	AccessRule []*DescribeAccessRulesResponseAccessRulesAccessRule `json:"AccessRule,omitempty" xml:"AccessRule,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAccessRulesResponseAccessRules) String() string {
	return tea.Prettify(s)
}

func (s DescribeAccessRulesResponseAccessRules) GoString() string {
	return s.String()
}

func (s *DescribeAccessRulesResponseAccessRules) SetAccessRule(v []*DescribeAccessRulesResponseAccessRulesAccessRule) *DescribeAccessRulesResponseAccessRules {
	s.AccessRule = v
	return s
}

type DescribeAccessRulesResponseAccessRulesAccessRule struct {
	SourceCidrIp *string `json:"SourceCidrIp,omitempty" xml:"SourceCidrIp,omitempty" require:"true"`
	Priority     *int    `json:"Priority,omitempty" xml:"Priority,omitempty" require:"true"`
	AccessRuleId *string `json:"AccessRuleId,omitempty" xml:"AccessRuleId,omitempty" require:"true"`
	RWAccess     *string `json:"RWAccess,omitempty" xml:"RWAccess,omitempty" require:"true"`
	UserAccess   *string `json:"UserAccess,omitempty" xml:"UserAccess,omitempty" require:"true"`
}

func (s DescribeAccessRulesResponseAccessRulesAccessRule) String() string {
	return tea.Prettify(s)
}

func (s DescribeAccessRulesResponseAccessRulesAccessRule) GoString() string {
	return s.String()
}

func (s *DescribeAccessRulesResponseAccessRulesAccessRule) SetSourceCidrIp(v string) *DescribeAccessRulesResponseAccessRulesAccessRule {
	s.SourceCidrIp = &v
	return s
}

func (s *DescribeAccessRulesResponseAccessRulesAccessRule) SetPriority(v int) *DescribeAccessRulesResponseAccessRulesAccessRule {
	s.Priority = &v
	return s
}

func (s *DescribeAccessRulesResponseAccessRulesAccessRule) SetAccessRuleId(v string) *DescribeAccessRulesResponseAccessRulesAccessRule {
	s.AccessRuleId = &v
	return s
}

func (s *DescribeAccessRulesResponseAccessRulesAccessRule) SetRWAccess(v string) *DescribeAccessRulesResponseAccessRulesAccessRule {
	s.RWAccess = &v
	return s
}

func (s *DescribeAccessRulesResponseAccessRulesAccessRule) SetUserAccess(v string) *DescribeAccessRulesResponseAccessRulesAccessRule {
	s.UserAccess = &v
	return s
}

type DescribeAccessGroupsRequest struct {
	AccessGroupName *string `json:"AccessGroupName,omitempty" xml:"AccessGroupName,omitempty"`
	PageSize        *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber      *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	UseUTCDateTime  *bool   `json:"UseUTCDateTime,omitempty" xml:"UseUTCDateTime,omitempty"`
	FileSystemType  *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty"`
}

func (s DescribeAccessGroupsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAccessGroupsRequest) GoString() string {
	return s.String()
}

func (s *DescribeAccessGroupsRequest) SetAccessGroupName(v string) *DescribeAccessGroupsRequest {
	s.AccessGroupName = &v
	return s
}

func (s *DescribeAccessGroupsRequest) SetPageSize(v int) *DescribeAccessGroupsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeAccessGroupsRequest) SetPageNumber(v int) *DescribeAccessGroupsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeAccessGroupsRequest) SetUseUTCDateTime(v bool) *DescribeAccessGroupsRequest {
	s.UseUTCDateTime = &v
	return s
}

func (s *DescribeAccessGroupsRequest) SetFileSystemType(v string) *DescribeAccessGroupsRequest {
	s.FileSystemType = &v
	return s
}

type DescribeAccessGroupsResponse struct {
	RequestId    *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount   *int                                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize     *int                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber   *int                                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	AccessGroups *DescribeAccessGroupsResponseAccessGroups `json:"AccessGroups,omitempty" xml:"AccessGroups,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAccessGroupsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAccessGroupsResponse) GoString() string {
	return s.String()
}

func (s *DescribeAccessGroupsResponse) SetRequestId(v string) *DescribeAccessGroupsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAccessGroupsResponse) SetTotalCount(v int) *DescribeAccessGroupsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeAccessGroupsResponse) SetPageSize(v int) *DescribeAccessGroupsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeAccessGroupsResponse) SetPageNumber(v int) *DescribeAccessGroupsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeAccessGroupsResponse) SetAccessGroups(v *DescribeAccessGroupsResponseAccessGroups) *DescribeAccessGroupsResponse {
	s.AccessGroups = v
	return s
}

type DescribeAccessGroupsResponseAccessGroups struct {
	AccessGroup []*DescribeAccessGroupsResponseAccessGroupsAccessGroup `json:"AccessGroup,omitempty" xml:"AccessGroup,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAccessGroupsResponseAccessGroups) String() string {
	return tea.Prettify(s)
}

func (s DescribeAccessGroupsResponseAccessGroups) GoString() string {
	return s.String()
}

func (s *DescribeAccessGroupsResponseAccessGroups) SetAccessGroup(v []*DescribeAccessGroupsResponseAccessGroupsAccessGroup) *DescribeAccessGroupsResponseAccessGroups {
	s.AccessGroup = v
	return s
}

type DescribeAccessGroupsResponseAccessGroupsAccessGroup struct {
	AccessGroupName  *string `json:"AccessGroupName,omitempty" xml:"AccessGroupName,omitempty" require:"true"`
	AccessGroupType  *string `json:"AccessGroupType,omitempty" xml:"AccessGroupType,omitempty" require:"true"`
	RuleCount        *int    `json:"RuleCount,omitempty" xml:"RuleCount,omitempty" require:"true"`
	MountTargetCount *int    `json:"MountTargetCount,omitempty" xml:"MountTargetCount,omitempty" require:"true"`
	Description      *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreateTime       *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
}

func (s DescribeAccessGroupsResponseAccessGroupsAccessGroup) String() string {
	return tea.Prettify(s)
}

func (s DescribeAccessGroupsResponseAccessGroupsAccessGroup) GoString() string {
	return s.String()
}

func (s *DescribeAccessGroupsResponseAccessGroupsAccessGroup) SetAccessGroupName(v string) *DescribeAccessGroupsResponseAccessGroupsAccessGroup {
	s.AccessGroupName = &v
	return s
}

func (s *DescribeAccessGroupsResponseAccessGroupsAccessGroup) SetAccessGroupType(v string) *DescribeAccessGroupsResponseAccessGroupsAccessGroup {
	s.AccessGroupType = &v
	return s
}

func (s *DescribeAccessGroupsResponseAccessGroupsAccessGroup) SetRuleCount(v int) *DescribeAccessGroupsResponseAccessGroupsAccessGroup {
	s.RuleCount = &v
	return s
}

func (s *DescribeAccessGroupsResponseAccessGroupsAccessGroup) SetMountTargetCount(v int) *DescribeAccessGroupsResponseAccessGroupsAccessGroup {
	s.MountTargetCount = &v
	return s
}

func (s *DescribeAccessGroupsResponseAccessGroupsAccessGroup) SetDescription(v string) *DescribeAccessGroupsResponseAccessGroupsAccessGroup {
	s.Description = &v
	return s
}

func (s *DescribeAccessGroupsResponseAccessGroupsAccessGroup) SetCreateTime(v string) *DescribeAccessGroupsResponseAccessGroupsAccessGroup {
	s.CreateTime = &v
	return s
}

type DeleteMountTargetRequest struct {
	FileSystemId      *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	MountTargetDomain *string `json:"MountTargetDomain,omitempty" xml:"MountTargetDomain,omitempty" require:"true"`
}

func (s DeleteMountTargetRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteMountTargetRequest) GoString() string {
	return s.String()
}

func (s *DeleteMountTargetRequest) SetFileSystemId(v string) *DeleteMountTargetRequest {
	s.FileSystemId = &v
	return s
}

func (s *DeleteMountTargetRequest) SetMountTargetDomain(v string) *DeleteMountTargetRequest {
	s.MountTargetDomain = &v
	return s
}

type DeleteMountTargetResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteMountTargetResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteMountTargetResponse) GoString() string {
	return s.String()
}

func (s *DeleteMountTargetResponse) SetRequestId(v string) *DeleteMountTargetResponse {
	s.RequestId = &v
	return s
}

type DeleteFileSystemRequest struct {
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
}

func (s DeleteFileSystemRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteFileSystemRequest) GoString() string {
	return s.String()
}

func (s *DeleteFileSystemRequest) SetFileSystemId(v string) *DeleteFileSystemRequest {
	s.FileSystemId = &v
	return s
}

type DeleteFileSystemResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteFileSystemResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteFileSystemResponse) GoString() string {
	return s.String()
}

func (s *DeleteFileSystemResponse) SetRequestId(v string) *DeleteFileSystemResponse {
	s.RequestId = &v
	return s
}

type DeleteAccessRuleRequest struct {
	AccessGroupName *string `json:"AccessGroupName,omitempty" xml:"AccessGroupName,omitempty" require:"true"`
	AccessRuleId    *string `json:"AccessRuleId,omitempty" xml:"AccessRuleId,omitempty" require:"true"`
	FileSystemType  *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty"`
}

func (s DeleteAccessRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAccessRuleRequest) GoString() string {
	return s.String()
}

func (s *DeleteAccessRuleRequest) SetAccessGroupName(v string) *DeleteAccessRuleRequest {
	s.AccessGroupName = &v
	return s
}

func (s *DeleteAccessRuleRequest) SetAccessRuleId(v string) *DeleteAccessRuleRequest {
	s.AccessRuleId = &v
	return s
}

func (s *DeleteAccessRuleRequest) SetFileSystemType(v string) *DeleteAccessRuleRequest {
	s.FileSystemType = &v
	return s
}

type DeleteAccessRuleResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteAccessRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAccessRuleResponse) GoString() string {
	return s.String()
}

func (s *DeleteAccessRuleResponse) SetRequestId(v string) *DeleteAccessRuleResponse {
	s.RequestId = &v
	return s
}

type DeleteAccessGroupRequest struct {
	AccessGroupName *string `json:"AccessGroupName,omitempty" xml:"AccessGroupName,omitempty" require:"true"`
	FileSystemType  *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty"`
}

func (s DeleteAccessGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAccessGroupRequest) GoString() string {
	return s.String()
}

func (s *DeleteAccessGroupRequest) SetAccessGroupName(v string) *DeleteAccessGroupRequest {
	s.AccessGroupName = &v
	return s
}

func (s *DeleteAccessGroupRequest) SetFileSystemType(v string) *DeleteAccessGroupRequest {
	s.FileSystemType = &v
	return s
}

type DeleteAccessGroupResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteAccessGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAccessGroupResponse) GoString() string {
	return s.String()
}

func (s *DeleteAccessGroupResponse) SetRequestId(v string) *DeleteAccessGroupResponse {
	s.RequestId = &v
	return s
}

type ModifyAccessRuleRequest struct {
	AccessGroupName *string `json:"AccessGroupName,omitempty" xml:"AccessGroupName,omitempty" require:"true"`
	AccessRuleId    *string `json:"AccessRuleId,omitempty" xml:"AccessRuleId,omitempty" require:"true"`
	SourceCidrIp    *string `json:"SourceCidrIp,omitempty" xml:"SourceCidrIp,omitempty"`
	RWAccessType    *string `json:"RWAccessType,omitempty" xml:"RWAccessType,omitempty"`
	UserAccessType  *string `json:"UserAccessType,omitempty" xml:"UserAccessType,omitempty"`
	Priority        *int    `json:"Priority,omitempty" xml:"Priority,omitempty"`
	FileSystemType  *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty"`
}

func (s ModifyAccessRuleRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyAccessRuleRequest) GoString() string {
	return s.String()
}

func (s *ModifyAccessRuleRequest) SetAccessGroupName(v string) *ModifyAccessRuleRequest {
	s.AccessGroupName = &v
	return s
}

func (s *ModifyAccessRuleRequest) SetAccessRuleId(v string) *ModifyAccessRuleRequest {
	s.AccessRuleId = &v
	return s
}

func (s *ModifyAccessRuleRequest) SetSourceCidrIp(v string) *ModifyAccessRuleRequest {
	s.SourceCidrIp = &v
	return s
}

func (s *ModifyAccessRuleRequest) SetRWAccessType(v string) *ModifyAccessRuleRequest {
	s.RWAccessType = &v
	return s
}

func (s *ModifyAccessRuleRequest) SetUserAccessType(v string) *ModifyAccessRuleRequest {
	s.UserAccessType = &v
	return s
}

func (s *ModifyAccessRuleRequest) SetPriority(v int) *ModifyAccessRuleRequest {
	s.Priority = &v
	return s
}

func (s *ModifyAccessRuleRequest) SetFileSystemType(v string) *ModifyAccessRuleRequest {
	s.FileSystemType = &v
	return s
}

type ModifyAccessRuleResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyAccessRuleResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyAccessRuleResponse) GoString() string {
	return s.String()
}

func (s *ModifyAccessRuleResponse) SetRequestId(v string) *ModifyAccessRuleResponse {
	s.RequestId = &v
	return s
}

type ModifyAccessGroupRequest struct {
	AccessGroupName *string `json:"AccessGroupName,omitempty" xml:"AccessGroupName,omitempty" require:"true"`
	Description     *string `json:"Description,omitempty" xml:"Description,omitempty"`
	FileSystemType  *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty"`
}

func (s ModifyAccessGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyAccessGroupRequest) GoString() string {
	return s.String()
}

func (s *ModifyAccessGroupRequest) SetAccessGroupName(v string) *ModifyAccessGroupRequest {
	s.AccessGroupName = &v
	return s
}

func (s *ModifyAccessGroupRequest) SetDescription(v string) *ModifyAccessGroupRequest {
	s.Description = &v
	return s
}

func (s *ModifyAccessGroupRequest) SetFileSystemType(v string) *ModifyAccessGroupRequest {
	s.FileSystemType = &v
	return s
}

type ModifyAccessGroupResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyAccessGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyAccessGroupResponse) GoString() string {
	return s.String()
}

func (s *ModifyAccessGroupResponse) SetRequestId(v string) *ModifyAccessGroupResponse {
	s.RequestId = &v
	return s
}

type DescribeRegionsRequest struct {
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	FileSystemType *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty"`
}

func (s DescribeRegionsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsRequest) GoString() string {
	return s.String()
}

func (s *DescribeRegionsRequest) SetPageSize(v int) *DescribeRegionsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeRegionsRequest) SetPageNumber(v int) *DescribeRegionsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeRegionsRequest) SetFileSystemType(v string) *DescribeRegionsRequest {
	s.FileSystemType = &v
	return s
}

type DescribeRegionsResponse struct {
	RequestId  *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int                            `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize   *int                            `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                            `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	Regions    *DescribeRegionsResponseRegions `json:"Regions,omitempty" xml:"Regions,omitempty" require:"true" type:"Struct"`
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

func (s *DescribeRegionsResponse) SetTotalCount(v int) *DescribeRegionsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeRegionsResponse) SetPageSize(v int) *DescribeRegionsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeRegionsResponse) SetPageNumber(v int) *DescribeRegionsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeRegionsResponse) SetRegions(v *DescribeRegionsResponseRegions) *DescribeRegionsResponse {
	s.Regions = v
	return s
}

type DescribeRegionsResponseRegions struct {
	Region []*DescribeRegionsResponseRegionsRegion `json:"Region,omitempty" xml:"Region,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeRegionsResponseRegions) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsResponseRegions) GoString() string {
	return s.String()
}

func (s *DescribeRegionsResponseRegions) SetRegion(v []*DescribeRegionsResponseRegionsRegion) *DescribeRegionsResponseRegions {
	s.Region = v
	return s
}

type DescribeRegionsResponseRegionsRegion struct {
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	LocalName      *string `json:"LocalName,omitempty" xml:"LocalName,omitempty" require:"true"`
	RegionEndpoint *string `json:"RegionEndpoint,omitempty" xml:"RegionEndpoint,omitempty" require:"true"`
}

func (s DescribeRegionsResponseRegionsRegion) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsResponseRegionsRegion) GoString() string {
	return s.String()
}

func (s *DescribeRegionsResponseRegionsRegion) SetRegionId(v string) *DescribeRegionsResponseRegionsRegion {
	s.RegionId = &v
	return s
}

func (s *DescribeRegionsResponseRegionsRegion) SetLocalName(v string) *DescribeRegionsResponseRegionsRegion {
	s.LocalName = &v
	return s
}

func (s *DescribeRegionsResponseRegionsRegion) SetRegionEndpoint(v string) *DescribeRegionsResponseRegionsRegion {
	s.RegionEndpoint = &v
	return s
}

type DescribeMountTargetsRequest struct {
	FileSystemId      *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	MountTargetDomain *string `json:"MountTargetDomain,omitempty" xml:"MountTargetDomain,omitempty"`
	PageSize          *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber        *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeMountTargetsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMountTargetsRequest) GoString() string {
	return s.String()
}

func (s *DescribeMountTargetsRequest) SetFileSystemId(v string) *DescribeMountTargetsRequest {
	s.FileSystemId = &v
	return s
}

func (s *DescribeMountTargetsRequest) SetMountTargetDomain(v string) *DescribeMountTargetsRequest {
	s.MountTargetDomain = &v
	return s
}

func (s *DescribeMountTargetsRequest) SetPageSize(v int) *DescribeMountTargetsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeMountTargetsRequest) SetPageNumber(v int) *DescribeMountTargetsRequest {
	s.PageNumber = &v
	return s
}

type DescribeMountTargetsResponse struct {
	RequestId    *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount   *int                                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize     *int                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber   *int                                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	MountTargets *DescribeMountTargetsResponseMountTargets `json:"MountTargets,omitempty" xml:"MountTargets,omitempty" require:"true" type:"Struct"`
}

func (s DescribeMountTargetsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMountTargetsResponse) GoString() string {
	return s.String()
}

func (s *DescribeMountTargetsResponse) SetRequestId(v string) *DescribeMountTargetsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMountTargetsResponse) SetTotalCount(v int) *DescribeMountTargetsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeMountTargetsResponse) SetPageSize(v int) *DescribeMountTargetsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeMountTargetsResponse) SetPageNumber(v int) *DescribeMountTargetsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeMountTargetsResponse) SetMountTargets(v *DescribeMountTargetsResponseMountTargets) *DescribeMountTargetsResponse {
	s.MountTargets = v
	return s
}

type DescribeMountTargetsResponseMountTargets struct {
	MountTarget []*DescribeMountTargetsResponseMountTargetsMountTarget `json:"MountTarget,omitempty" xml:"MountTarget,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeMountTargetsResponseMountTargets) String() string {
	return tea.Prettify(s)
}

func (s DescribeMountTargetsResponseMountTargets) GoString() string {
	return s.String()
}

func (s *DescribeMountTargetsResponseMountTargets) SetMountTarget(v []*DescribeMountTargetsResponseMountTargetsMountTarget) *DescribeMountTargetsResponseMountTargets {
	s.MountTarget = v
	return s
}

type DescribeMountTargetsResponseMountTargetsMountTarget struct {
	MountTargetDomain *string `json:"MountTargetDomain,omitempty" xml:"MountTargetDomain,omitempty" require:"true"`
	NetworkType       *string `json:"NetworkType,omitempty" xml:"NetworkType,omitempty" require:"true"`
	VpcId             *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	VswId             *string `json:"VswId,omitempty" xml:"VswId,omitempty" require:"true"`
	AccessGroup       *string `json:"AccessGroup,omitempty" xml:"AccessGroup,omitempty" require:"true"`
	Status            *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s DescribeMountTargetsResponseMountTargetsMountTarget) String() string {
	return tea.Prettify(s)
}

func (s DescribeMountTargetsResponseMountTargetsMountTarget) GoString() string {
	return s.String()
}

func (s *DescribeMountTargetsResponseMountTargetsMountTarget) SetMountTargetDomain(v string) *DescribeMountTargetsResponseMountTargetsMountTarget {
	s.MountTargetDomain = &v
	return s
}

func (s *DescribeMountTargetsResponseMountTargetsMountTarget) SetNetworkType(v string) *DescribeMountTargetsResponseMountTargetsMountTarget {
	s.NetworkType = &v
	return s
}

func (s *DescribeMountTargetsResponseMountTargetsMountTarget) SetVpcId(v string) *DescribeMountTargetsResponseMountTargetsMountTarget {
	s.VpcId = &v
	return s
}

func (s *DescribeMountTargetsResponseMountTargetsMountTarget) SetVswId(v string) *DescribeMountTargetsResponseMountTargetsMountTarget {
	s.VswId = &v
	return s
}

func (s *DescribeMountTargetsResponseMountTargetsMountTarget) SetAccessGroup(v string) *DescribeMountTargetsResponseMountTargetsMountTarget {
	s.AccessGroup = &v
	return s
}

func (s *DescribeMountTargetsResponseMountTargetsMountTarget) SetStatus(v string) *DescribeMountTargetsResponseMountTargetsMountTarget {
	s.Status = &v
	return s
}

type DescribeFileSystemsRequest struct {
	FileSystemId   *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty"`
	FileSystemType *string `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty"`
	VpcId          *string `json:"VpcId,omitempty" xml:"VpcId,omitempty"`
	PageSize       *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber     *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeFileSystemsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeFileSystemsRequest) GoString() string {
	return s.String()
}

func (s *DescribeFileSystemsRequest) SetFileSystemId(v string) *DescribeFileSystemsRequest {
	s.FileSystemId = &v
	return s
}

func (s *DescribeFileSystemsRequest) SetFileSystemType(v string) *DescribeFileSystemsRequest {
	s.FileSystemType = &v
	return s
}

func (s *DescribeFileSystemsRequest) SetVpcId(v string) *DescribeFileSystemsRequest {
	s.VpcId = &v
	return s
}

func (s *DescribeFileSystemsRequest) SetPageSize(v int) *DescribeFileSystemsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeFileSystemsRequest) SetPageNumber(v int) *DescribeFileSystemsRequest {
	s.PageNumber = &v
	return s
}

type DescribeFileSystemsResponse struct {
	RequestId   *string                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount  *int                                    `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize    *int                                    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber  *int                                    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	FileSystems *DescribeFileSystemsResponseFileSystems `json:"FileSystems,omitempty" xml:"FileSystems,omitempty" require:"true" type:"Struct"`
}

func (s DescribeFileSystemsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeFileSystemsResponse) GoString() string {
	return s.String()
}

func (s *DescribeFileSystemsResponse) SetRequestId(v string) *DescribeFileSystemsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeFileSystemsResponse) SetTotalCount(v int) *DescribeFileSystemsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeFileSystemsResponse) SetPageSize(v int) *DescribeFileSystemsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeFileSystemsResponse) SetPageNumber(v int) *DescribeFileSystemsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeFileSystemsResponse) SetFileSystems(v *DescribeFileSystemsResponseFileSystems) *DescribeFileSystemsResponse {
	s.FileSystems = v
	return s
}

type DescribeFileSystemsResponseFileSystems struct {
	FileSystem []*DescribeFileSystemsResponseFileSystemsFileSystem `json:"FileSystem,omitempty" xml:"FileSystem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeFileSystemsResponseFileSystems) String() string {
	return tea.Prettify(s)
}

func (s DescribeFileSystemsResponseFileSystems) GoString() string {
	return s.String()
}

func (s *DescribeFileSystemsResponseFileSystems) SetFileSystem(v []*DescribeFileSystemsResponseFileSystemsFileSystem) *DescribeFileSystemsResponseFileSystems {
	s.FileSystem = v
	return s
}

type DescribeFileSystemsResponseFileSystemsFileSystem struct {
	FileSystemId          *string                                                            `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	Description           *string                                                            `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreateTime            *string                                                            `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	ExpiredTime           *string                                                            `json:"ExpiredTime,omitempty" xml:"ExpiredTime,omitempty" require:"true"`
	RegionId              *string                                                            `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ZoneId                *string                                                            `json:"ZoneId,omitempty" xml:"ZoneId,omitempty" require:"true"`
	ProtocolType          *string                                                            `json:"ProtocolType,omitempty" xml:"ProtocolType,omitempty" require:"true"`
	StorageType           *string                                                            `json:"StorageType,omitempty" xml:"StorageType,omitempty" require:"true"`
	FileSystemType        *string                                                            `json:"FileSystemType,omitempty" xml:"FileSystemType,omitempty" require:"true"`
	EncryptType           *int                                                               `json:"EncryptType,omitempty" xml:"EncryptType,omitempty" require:"true"`
	MeteredSize           *int64                                                             `json:"MeteredSize,omitempty" xml:"MeteredSize,omitempty" require:"true"`
	MeteredIASize         *int64                                                             `json:"MeteredIASize,omitempty" xml:"MeteredIASize,omitempty" require:"true"`
	Bandwidth             *int64                                                             `json:"Bandwidth,omitempty" xml:"Bandwidth,omitempty" require:"true"`
	Capacity              *int64                                                             `json:"Capacity,omitempty" xml:"Capacity,omitempty" require:"true"`
	AutoSnapshotPolicyId  *string                                                            `json:"AutoSnapshotPolicyId,omitempty" xml:"AutoSnapshotPolicyId,omitempty" require:"true"`
	Status                *string                                                            `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	ChargeType            *string                                                            `json:"ChargeType,omitempty" xml:"ChargeType,omitempty" require:"true"`
	MountTargetCountLimit *int64                                                             `json:"MountTargetCountLimit,omitempty" xml:"MountTargetCountLimit,omitempty" require:"true"`
	NasNamespaceId        *string                                                            `json:"NasNamespaceId,omitempty" xml:"NasNamespaceId,omitempty" require:"true"`
	KMSKeyId              *string                                                            `json:"KMSKeyId,omitempty" xml:"KMSKeyId,omitempty" require:"true"`
	Version               *string                                                            `json:"Version,omitempty" xml:"Version,omitempty" require:"true"`
	MountTargets          *DescribeFileSystemsResponseFileSystemsFileSystemMountTargets      `json:"MountTargets,omitempty" xml:"MountTargets,omitempty" require:"true" type:"Struct"`
	Packages              *DescribeFileSystemsResponseFileSystemsFileSystemPackages          `json:"Packages,omitempty" xml:"Packages,omitempty" require:"true" type:"Struct"`
	Ldap                  *DescribeFileSystemsResponseFileSystemsFileSystemLdap              `json:"Ldap,omitempty" xml:"Ldap,omitempty" require:"true" type:"Struct"`
	SupportedFeatures     *DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures `json:"SupportedFeatures,omitempty" xml:"SupportedFeatures,omitempty" require:"true" type:"Struct"`
}

func (s DescribeFileSystemsResponseFileSystemsFileSystem) String() string {
	return tea.Prettify(s)
}

func (s DescribeFileSystemsResponseFileSystemsFileSystem) GoString() string {
	return s.String()
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetFileSystemId(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.FileSystemId = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetDescription(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.Description = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetCreateTime(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.CreateTime = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetExpiredTime(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.ExpiredTime = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetRegionId(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.RegionId = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetZoneId(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.ZoneId = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetProtocolType(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.ProtocolType = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetStorageType(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.StorageType = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetFileSystemType(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.FileSystemType = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetEncryptType(v int) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.EncryptType = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetMeteredSize(v int64) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.MeteredSize = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetMeteredIASize(v int64) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.MeteredIASize = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetBandwidth(v int64) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.Bandwidth = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetCapacity(v int64) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.Capacity = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetAutoSnapshotPolicyId(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.AutoSnapshotPolicyId = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetStatus(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.Status = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetChargeType(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.ChargeType = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetMountTargetCountLimit(v int64) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.MountTargetCountLimit = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetNasNamespaceId(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.NasNamespaceId = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetKMSKeyId(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.KMSKeyId = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetVersion(v string) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.Version = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetMountTargets(v *DescribeFileSystemsResponseFileSystemsFileSystemMountTargets) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.MountTargets = v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetPackages(v *DescribeFileSystemsResponseFileSystemsFileSystemPackages) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.Packages = v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetLdap(v *DescribeFileSystemsResponseFileSystemsFileSystemLdap) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.Ldap = v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystem) SetSupportedFeatures(v *DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures) *DescribeFileSystemsResponseFileSystemsFileSystem {
	s.SupportedFeatures = v
	return s
}

type DescribeFileSystemsResponseFileSystemsFileSystemMountTargets struct {
	MountTarget []*DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget `json:"MountTarget,omitempty" xml:"MountTarget,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeFileSystemsResponseFileSystemsFileSystemMountTargets) String() string {
	return tea.Prettify(s)
}

func (s DescribeFileSystemsResponseFileSystemsFileSystemMountTargets) GoString() string {
	return s.String()
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemMountTargets) SetMountTarget(v []*DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget) *DescribeFileSystemsResponseFileSystemsFileSystemMountTargets {
	s.MountTarget = v
	return s
}

type DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget struct {
	MountTargetDomain *string `json:"MountTargetDomain,omitempty" xml:"MountTargetDomain,omitempty" require:"true"`
	NetworkType       *string `json:"NetworkType,omitempty" xml:"NetworkType,omitempty" require:"true"`
	VpcId             *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	VswId             *string `json:"VswId,omitempty" xml:"VswId,omitempty" require:"true"`
	AccessGroupName   *string `json:"AccessGroupName,omitempty" xml:"AccessGroupName,omitempty" require:"true"`
	Status            *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget) String() string {
	return tea.Prettify(s)
}

func (s DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget) GoString() string {
	return s.String()
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget) SetMountTargetDomain(v string) *DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget {
	s.MountTargetDomain = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget) SetNetworkType(v string) *DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget {
	s.NetworkType = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget) SetVpcId(v string) *DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget {
	s.VpcId = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget) SetVswId(v string) *DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget {
	s.VswId = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget) SetAccessGroupName(v string) *DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget {
	s.AccessGroupName = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget) SetStatus(v string) *DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget {
	s.Status = &v
	return s
}

type DescribeFileSystemsResponseFileSystemsFileSystemPackages struct {
	Package []*DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage `json:"Package,omitempty" xml:"Package,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeFileSystemsResponseFileSystemsFileSystemPackages) String() string {
	return tea.Prettify(s)
}

func (s DescribeFileSystemsResponseFileSystemsFileSystemPackages) GoString() string {
	return s.String()
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemPackages) SetPackage(v []*DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage) *DescribeFileSystemsResponseFileSystemsFileSystemPackages {
	s.Package = v
	return s
}

type DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage struct {
	PackageId   *string `json:"PackageId,omitempty" xml:"PackageId,omitempty" require:"true"`
	PackageType *string `json:"PackageType,omitempty" xml:"PackageType,omitempty" require:"true"`
	Size        *int64  `json:"Size,omitempty" xml:"Size,omitempty" require:"true"`
	StartTime   *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	ExpiredTime *string `json:"ExpiredTime,omitempty" xml:"ExpiredTime,omitempty" require:"true"`
}

func (s DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage) String() string {
	return tea.Prettify(s)
}

func (s DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage) GoString() string {
	return s.String()
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage) SetPackageId(v string) *DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage {
	s.PackageId = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage) SetPackageType(v string) *DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage {
	s.PackageType = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage) SetSize(v int64) *DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage {
	s.Size = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage) SetStartTime(v string) *DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage {
	s.StartTime = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage) SetExpiredTime(v string) *DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage {
	s.ExpiredTime = &v
	return s
}

type DescribeFileSystemsResponseFileSystemsFileSystemLdap struct {
	BindDN     *string `json:"BindDN,omitempty" xml:"BindDN,omitempty" require:"true"`
	URI        *string `json:"URI,omitempty" xml:"URI,omitempty" require:"true"`
	SearchBase *string `json:"SearchBase,omitempty" xml:"SearchBase,omitempty" require:"true"`
}

func (s DescribeFileSystemsResponseFileSystemsFileSystemLdap) String() string {
	return tea.Prettify(s)
}

func (s DescribeFileSystemsResponseFileSystemsFileSystemLdap) GoString() string {
	return s.String()
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemLdap) SetBindDN(v string) *DescribeFileSystemsResponseFileSystemsFileSystemLdap {
	s.BindDN = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemLdap) SetURI(v string) *DescribeFileSystemsResponseFileSystemsFileSystemLdap {
	s.URI = &v
	return s
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemLdap) SetSearchBase(v string) *DescribeFileSystemsResponseFileSystemsFileSystemLdap {
	s.SearchBase = &v
	return s
}

type DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures struct {
	// SupportedFeature
	SupportedFeature []*string `json:"SupportedFeature,omitempty" xml:"SupportedFeature,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures) String() string {
	return tea.Prettify(s)
}

func (s DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures) GoString() string {
	return s.String()
}

func (s *DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures) SetSupportedFeature(v []*string) *DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures {
	s.SupportedFeature = v
	return s
}

type ModifyMountTargetRequest struct {
	FileSystemId      *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	MountTargetDomain *string `json:"MountTargetDomain,omitempty" xml:"MountTargetDomain,omitempty" require:"true"`
	AccessGroupName   *string `json:"AccessGroupName,omitempty" xml:"AccessGroupName,omitempty"`
	Status            *string `json:"Status,omitempty" xml:"Status,omitempty"`
}

func (s ModifyMountTargetRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyMountTargetRequest) GoString() string {
	return s.String()
}

func (s *ModifyMountTargetRequest) SetFileSystemId(v string) *ModifyMountTargetRequest {
	s.FileSystemId = &v
	return s
}

func (s *ModifyMountTargetRequest) SetMountTargetDomain(v string) *ModifyMountTargetRequest {
	s.MountTargetDomain = &v
	return s
}

func (s *ModifyMountTargetRequest) SetAccessGroupName(v string) *ModifyMountTargetRequest {
	s.AccessGroupName = &v
	return s
}

func (s *ModifyMountTargetRequest) SetStatus(v string) *ModifyMountTargetRequest {
	s.Status = &v
	return s
}

type ModifyMountTargetResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyMountTargetResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyMountTargetResponse) GoString() string {
	return s.String()
}

func (s *ModifyMountTargetResponse) SetRequestId(v string) *ModifyMountTargetResponse {
	s.RequestId = &v
	return s
}

type ModifyFileSystemRequest struct {
	FileSystemId *string `json:"FileSystemId,omitempty" xml:"FileSystemId,omitempty" require:"true"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty"`
}

func (s ModifyFileSystemRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyFileSystemRequest) GoString() string {
	return s.String()
}

func (s *ModifyFileSystemRequest) SetFileSystemId(v string) *ModifyFileSystemRequest {
	s.FileSystemId = &v
	return s
}

func (s *ModifyFileSystemRequest) SetDescription(v string) *ModifyFileSystemRequest {
	s.Description = &v
	return s
}

type ModifyFileSystemResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyFileSystemResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyFileSystemResponse) GoString() string {
	return s.String()
}

func (s *ModifyFileSystemResponse) SetRequestId(v string) *ModifyFileSystemResponse {
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
		"cn-chengdu":          tea.String("nas.aliyuncs.com"),
		"me-east-1":           tea.String("nas.ap-northeast-1.aliyuncs.com"),
		"cn-hangzhou-finance": tea.String("nas.aliyuncs.com"),
	}
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("nas"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) DeleteLifecyclePolicyWithOptions(request *DeleteLifecyclePolicyRequest, runtime *util.RuntimeOptions) (_result *DeleteLifecyclePolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteLifecyclePolicyResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteLifecyclePolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteLifecyclePolicy(request *DeleteLifecyclePolicyRequest) (_result *DeleteLifecyclePolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteLifecyclePolicyResponse{}
	_body, _err := client.DeleteLifecyclePolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpgradeFileSystemWithOptions(request *UpgradeFileSystemRequest, runtime *util.RuntimeOptions) (_result *UpgradeFileSystemResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpgradeFileSystemResponse{}
	_body, _err := client.DoRequest(tea.String("UpgradeFileSystem"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpgradeFileSystem(request *UpgradeFileSystemRequest) (_result *UpgradeFileSystemResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpgradeFileSystemResponse{}
	_body, _err := client.UpgradeFileSystemWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyLifecyclePolicyWithOptions(request *ModifyLifecyclePolicyRequest, runtime *util.RuntimeOptions) (_result *ModifyLifecyclePolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyLifecyclePolicyResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyLifecyclePolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyLifecyclePolicy(request *ModifyLifecyclePolicyRequest) (_result *ModifyLifecyclePolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyLifecyclePolicyResponse{}
	_body, _err := client.ModifyLifecyclePolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateLifecyclePolicyWithOptions(request *CreateLifecyclePolicyRequest, runtime *util.RuntimeOptions) (_result *CreateLifecyclePolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateLifecyclePolicyResponse{}
	_body, _err := client.DoRequest(tea.String("CreateLifecyclePolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateLifecyclePolicy(request *CreateLifecyclePolicyRequest) (_result *CreateLifecyclePolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateLifecyclePolicyResponse{}
	_body, _err := client.CreateLifecyclePolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeLifecyclePoliciesWithOptions(request *DescribeLifecyclePoliciesRequest, runtime *util.RuntimeOptions) (_result *DescribeLifecyclePoliciesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeLifecyclePoliciesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeLifecyclePolicies"), tea.String("HTTPS"), tea.String("GET"), tea.String("2017-06-26"), tea.String("AK"), tea.ToMap(request), nil, runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeLifecyclePolicies(request *DescribeLifecyclePoliciesRequest) (_result *DescribeLifecyclePoliciesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeLifecyclePoliciesResponse{}
	_body, _err := client.DescribeLifecyclePoliciesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDirQuotasWithOptions(request *DescribeDirQuotasRequest, runtime *util.RuntimeOptions) (_result *DescribeDirQuotasResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDirQuotasResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDirQuotas"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDirQuotas(request *DescribeDirQuotasRequest) (_result *DescribeDirQuotasResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDirQuotasResponse{}
	_body, _err := client.DescribeDirQuotasWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetDirQuotaWithOptions(request *SetDirQuotaRequest, runtime *util.RuntimeOptions) (_result *SetDirQuotaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetDirQuotaResponse{}
	_body, _err := client.DoRequest(tea.String("SetDirQuota"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetDirQuota(request *SetDirQuotaRequest) (_result *SetDirQuotaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetDirQuotaResponse{}
	_body, _err := client.SetDirQuotaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CancelDirQuotaWithOptions(request *CancelDirQuotaRequest, runtime *util.RuntimeOptions) (_result *CancelDirQuotaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CancelDirQuotaResponse{}
	_body, _err := client.DoRequest(tea.String("CancelDirQuota"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CancelDirQuota(request *CancelDirQuotaRequest) (_result *CancelDirQuotaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CancelDirQuotaResponse{}
	_body, _err := client.CancelDirQuotaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeStoragePackagesWithOptions(request *DescribeStoragePackagesRequest, runtime *util.RuntimeOptions) (_result *DescribeStoragePackagesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeStoragePackagesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeStoragePackages"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeStoragePackages(request *DescribeStoragePackagesRequest) (_result *DescribeStoragePackagesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeStoragePackagesResponse{}
	_body, _err := client.DescribeStoragePackagesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeFileSystemStatisticsWithOptions(request *DescribeFileSystemStatisticsRequest, runtime *util.RuntimeOptions) (_result *DescribeFileSystemStatisticsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeFileSystemStatisticsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeFileSystemStatistics"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeFileSystemStatistics(request *DescribeFileSystemStatisticsRequest) (_result *DescribeFileSystemStatisticsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeFileSystemStatisticsResponse{}
	_body, _err := client.DescribeFileSystemStatisticsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeLogAnalysisWithOptions(request *DescribeLogAnalysisRequest, runtime *util.RuntimeOptions) (_result *DescribeLogAnalysisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeLogAnalysisResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeLogAnalysis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeLogAnalysis(request *DescribeLogAnalysisRequest) (_result *DescribeLogAnalysisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeLogAnalysisResponse{}
	_body, _err := client.DescribeLogAnalysisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMountedClientsWithOptions(request *DescribeMountedClientsRequest, runtime *util.RuntimeOptions) (_result *DescribeMountedClientsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMountedClientsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMountedClients"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMountedClients(request *DescribeMountedClientsRequest) (_result *DescribeMountedClientsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMountedClientsResponse{}
	_body, _err := client.DescribeMountedClientsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAutoSnapshotTasksWithOptions(request *DescribeAutoSnapshotTasksRequest, runtime *util.RuntimeOptions) (_result *DescribeAutoSnapshotTasksResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAutoSnapshotTasksResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAutoSnapshotTasks"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAutoSnapshotTasks(request *DescribeAutoSnapshotTasksRequest) (_result *DescribeAutoSnapshotTasksResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAutoSnapshotTasksResponse{}
	_body, _err := client.DescribeAutoSnapshotTasksWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RemoveClientFromBlackListWithOptions(request *RemoveClientFromBlackListRequest, runtime *util.RuntimeOptions) (_result *RemoveClientFromBlackListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveClientFromBlackListResponse{}
	_body, _err := client.DoRequest(tea.String("RemoveClientFromBlackList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveClientFromBlackList(request *RemoveClientFromBlackListRequest) (_result *RemoveClientFromBlackListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RemoveClientFromBlackListResponse{}
	_body, _err := client.RemoveClientFromBlackListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeBlackListClientsWithOptions(request *DescribeBlackListClientsRequest, runtime *util.RuntimeOptions) (_result *DescribeBlackListClientsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeBlackListClientsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeBlackListClients"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeBlackListClients(request *DescribeBlackListClientsRequest) (_result *DescribeBlackListClientsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeBlackListClientsResponse{}
	_body, _err := client.DescribeBlackListClientsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddClientToBlackListWithOptions(request *AddClientToBlackListRequest, runtime *util.RuntimeOptions) (_result *AddClientToBlackListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddClientToBlackListResponse{}
	_body, _err := client.DoRequest(tea.String("AddClientToBlackList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddClientToBlackList(request *AddClientToBlackListRequest) (_result *AddClientToBlackListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddClientToBlackListResponse{}
	_body, _err := client.AddClientToBlackListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeLDAPConfigWithOptions(request *DescribeLDAPConfigRequest, runtime *util.RuntimeOptions) (_result *DescribeLDAPConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeLDAPConfigResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeLDAPConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeLDAPConfig(request *DescribeLDAPConfigRequest) (_result *DescribeLDAPConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeLDAPConfigResponse{}
	_body, _err := client.DescribeLDAPConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyLDAPConfigWithOptions(request *ModifyLDAPConfigRequest, runtime *util.RuntimeOptions) (_result *ModifyLDAPConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyLDAPConfigResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyLDAPConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyLDAPConfig(request *ModifyLDAPConfigRequest) (_result *ModifyLDAPConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyLDAPConfigResponse{}
	_body, _err := client.ModifyLDAPConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateLDAPConfigWithOptions(request *CreateLDAPConfigRequest, runtime *util.RuntimeOptions) (_result *CreateLDAPConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateLDAPConfigResponse{}
	_body, _err := client.DoRequest(tea.String("CreateLDAPConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateLDAPConfig(request *CreateLDAPConfigRequest) (_result *CreateLDAPConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateLDAPConfigResponse{}
	_body, _err := client.CreateLDAPConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteLDAPConfigWithOptions(request *DeleteLDAPConfigRequest, runtime *util.RuntimeOptions) (_result *DeleteLDAPConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteLDAPConfigResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteLDAPConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteLDAPConfig(request *DeleteLDAPConfigRequest) (_result *DeleteLDAPConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteLDAPConfigResponse{}
	_body, _err := client.DeleteLDAPConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeTagsWithOptions(request *DescribeTagsRequest, runtime *util.RuntimeOptions) (_result *DescribeTagsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeTagsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeTags"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeTags(request *DescribeTagsRequest) (_result *DescribeTagsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeTagsResponse{}
	_body, _err := client.DescribeTagsWithOptions(request, runtime)
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
	_body, _err := client.DoRequest(tea.String("RemoveTags"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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
	_body, _err := client.DoRequest(tea.String("AddTags"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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

func (client *Client) ResetFileSystemWithOptions(request *ResetFileSystemRequest, runtime *util.RuntimeOptions) (_result *ResetFileSystemResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ResetFileSystemResponse{}
	_body, _err := client.DoRequest(tea.String("ResetFileSystem"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ResetFileSystem(request *ResetFileSystemRequest) (_result *ResetFileSystemResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ResetFileSystemResponse{}
	_body, _err := client.ResetFileSystemWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateAutoSnapshotPolicyWithOptions(request *CreateAutoSnapshotPolicyRequest, runtime *util.RuntimeOptions) (_result *CreateAutoSnapshotPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateAutoSnapshotPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("CreateAutoSnapshotPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateAutoSnapshotPolicy(request *CreateAutoSnapshotPolicyRequest) (_result *CreateAutoSnapshotPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateAutoSnapshotPolicyResponse{}
	_body, _err := client.CreateAutoSnapshotPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAutoSnapshotPoliciesWithOptions(request *DescribeAutoSnapshotPoliciesRequest, runtime *util.RuntimeOptions) (_result *DescribeAutoSnapshotPoliciesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAutoSnapshotPoliciesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAutoSnapshotPolicies"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAutoSnapshotPolicies(request *DescribeAutoSnapshotPoliciesRequest) (_result *DescribeAutoSnapshotPoliciesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAutoSnapshotPoliciesResponse{}
	_body, _err := client.DescribeAutoSnapshotPoliciesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CancelAutoSnapshotPolicyWithOptions(request *CancelAutoSnapshotPolicyRequest, runtime *util.RuntimeOptions) (_result *CancelAutoSnapshotPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CancelAutoSnapshotPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("CancelAutoSnapshotPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CancelAutoSnapshotPolicy(request *CancelAutoSnapshotPolicyRequest) (_result *CancelAutoSnapshotPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CancelAutoSnapshotPolicyResponse{}
	_body, _err := client.CancelAutoSnapshotPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ApplyAutoSnapshotPolicyWithOptions(request *ApplyAutoSnapshotPolicyRequest, runtime *util.RuntimeOptions) (_result *ApplyAutoSnapshotPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ApplyAutoSnapshotPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("ApplyAutoSnapshotPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ApplyAutoSnapshotPolicy(request *ApplyAutoSnapshotPolicyRequest) (_result *ApplyAutoSnapshotPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ApplyAutoSnapshotPolicyResponse{}
	_body, _err := client.ApplyAutoSnapshotPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyAutoSnapshotPolicyWithOptions(request *ModifyAutoSnapshotPolicyRequest, runtime *util.RuntimeOptions) (_result *ModifyAutoSnapshotPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyAutoSnapshotPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyAutoSnapshotPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyAutoSnapshotPolicy(request *ModifyAutoSnapshotPolicyRequest) (_result *ModifyAutoSnapshotPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyAutoSnapshotPolicyResponse{}
	_body, _err := client.ModifyAutoSnapshotPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAutoSnapshotPolicyWithOptions(request *DeleteAutoSnapshotPolicyRequest, runtime *util.RuntimeOptions) (_result *DeleteAutoSnapshotPolicyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAutoSnapshotPolicyResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteAutoSnapshotPolicy"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteAutoSnapshotPolicy(request *DeleteAutoSnapshotPolicyRequest) (_result *DeleteAutoSnapshotPolicyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAutoSnapshotPolicyResponse{}
	_body, _err := client.DeleteAutoSnapshotPolicyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteSnapshotWithOptions(request *DeleteSnapshotRequest, runtime *util.RuntimeOptions) (_result *DeleteSnapshotResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteSnapshotResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteSnapshot"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteSnapshot(request *DeleteSnapshotRequest) (_result *DeleteSnapshotResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteSnapshotResponse{}
	_body, _err := client.DeleteSnapshotWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateSnapshotWithOptions(request *CreateSnapshotRequest, runtime *util.RuntimeOptions) (_result *CreateSnapshotResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateSnapshotResponse{}
	_body, _err := client.DoRequest(tea.String("CreateSnapshot"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateSnapshot(request *CreateSnapshotRequest) (_result *CreateSnapshotResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateSnapshotResponse{}
	_body, _err := client.CreateSnapshotWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSnapshotsWithOptions(request *DescribeSnapshotsRequest, runtime *util.RuntimeOptions) (_result *DescribeSnapshotsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSnapshotsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSnapshots"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSnapshots(request *DescribeSnapshotsRequest) (_result *DescribeSnapshotsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSnapshotsResponse{}
	_body, _err := client.DescribeSnapshotsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeZonesWithOptions(request *DescribeZonesRequest, runtime *util.RuntimeOptions) (_result *DescribeZonesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeZonesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeZones"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeZones(request *DescribeZonesRequest) (_result *DescribeZonesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeZonesResponse{}
	_body, _err := client.DescribeZonesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateAccessGroupWithOptions(request *CreateAccessGroupRequest, runtime *util.RuntimeOptions) (_result *CreateAccessGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateAccessGroupResponse{}
	_body, _err := client.DoRequest(tea.String("CreateAccessGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateAccessGroup(request *CreateAccessGroupRequest) (_result *CreateAccessGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateAccessGroupResponse{}
	_body, _err := client.CreateAccessGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateMountTargetWithOptions(request *CreateMountTargetRequest, runtime *util.RuntimeOptions) (_result *CreateMountTargetResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateMountTargetResponse{}
	_body, _err := client.DoRequest(tea.String("CreateMountTarget"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateMountTarget(request *CreateMountTargetRequest) (_result *CreateMountTargetResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateMountTargetResponse{}
	_body, _err := client.CreateMountTargetWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateFileSystemWithOptions(request *CreateFileSystemRequest, runtime *util.RuntimeOptions) (_result *CreateFileSystemResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateFileSystemResponse{}
	_body, _err := client.DoRequest(tea.String("CreateFileSystem"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateFileSystem(request *CreateFileSystemRequest) (_result *CreateFileSystemResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateFileSystemResponse{}
	_body, _err := client.CreateFileSystemWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateAccessRuleWithOptions(request *CreateAccessRuleRequest, runtime *util.RuntimeOptions) (_result *CreateAccessRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateAccessRuleResponse{}
	_body, _err := client.DoRequest(tea.String("CreateAccessRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateAccessRule(request *CreateAccessRuleRequest) (_result *CreateAccessRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateAccessRuleResponse{}
	_body, _err := client.CreateAccessRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAccessRulesWithOptions(request *DescribeAccessRulesRequest, runtime *util.RuntimeOptions) (_result *DescribeAccessRulesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAccessRulesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAccessRules"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAccessRules(request *DescribeAccessRulesRequest) (_result *DescribeAccessRulesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAccessRulesResponse{}
	_body, _err := client.DescribeAccessRulesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAccessGroupsWithOptions(request *DescribeAccessGroupsRequest, runtime *util.RuntimeOptions) (_result *DescribeAccessGroupsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAccessGroupsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAccessGroups"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAccessGroups(request *DescribeAccessGroupsRequest) (_result *DescribeAccessGroupsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAccessGroupsResponse{}
	_body, _err := client.DescribeAccessGroupsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteMountTargetWithOptions(request *DeleteMountTargetRequest, runtime *util.RuntimeOptions) (_result *DeleteMountTargetResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteMountTargetResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteMountTarget"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteMountTarget(request *DeleteMountTargetRequest) (_result *DeleteMountTargetResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteMountTargetResponse{}
	_body, _err := client.DeleteMountTargetWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteFileSystemWithOptions(request *DeleteFileSystemRequest, runtime *util.RuntimeOptions) (_result *DeleteFileSystemResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteFileSystemResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteFileSystem"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteFileSystem(request *DeleteFileSystemRequest) (_result *DeleteFileSystemResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteFileSystemResponse{}
	_body, _err := client.DeleteFileSystemWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAccessRuleWithOptions(request *DeleteAccessRuleRequest, runtime *util.RuntimeOptions) (_result *DeleteAccessRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAccessRuleResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteAccessRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteAccessRule(request *DeleteAccessRuleRequest) (_result *DeleteAccessRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAccessRuleResponse{}
	_body, _err := client.DeleteAccessRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAccessGroupWithOptions(request *DeleteAccessGroupRequest, runtime *util.RuntimeOptions) (_result *DeleteAccessGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAccessGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteAccessGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteAccessGroup(request *DeleteAccessGroupRequest) (_result *DeleteAccessGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAccessGroupResponse{}
	_body, _err := client.DeleteAccessGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyAccessRuleWithOptions(request *ModifyAccessRuleRequest, runtime *util.RuntimeOptions) (_result *ModifyAccessRuleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyAccessRuleResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyAccessRule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyAccessRule(request *ModifyAccessRuleRequest) (_result *ModifyAccessRuleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyAccessRuleResponse{}
	_body, _err := client.ModifyAccessRuleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyAccessGroupWithOptions(request *ModifyAccessGroupRequest, runtime *util.RuntimeOptions) (_result *ModifyAccessGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyAccessGroupResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyAccessGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyAccessGroup(request *ModifyAccessGroupRequest) (_result *ModifyAccessGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyAccessGroupResponse{}
	_body, _err := client.ModifyAccessGroupWithOptions(request, runtime)
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
	_body, _err := client.DoRequest(tea.String("DescribeRegions"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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

func (client *Client) DescribeMountTargetsWithOptions(request *DescribeMountTargetsRequest, runtime *util.RuntimeOptions) (_result *DescribeMountTargetsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMountTargetsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMountTargets"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMountTargets(request *DescribeMountTargetsRequest) (_result *DescribeMountTargetsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMountTargetsResponse{}
	_body, _err := client.DescribeMountTargetsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeFileSystemsWithOptions(request *DescribeFileSystemsRequest, runtime *util.RuntimeOptions) (_result *DescribeFileSystemsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeFileSystemsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeFileSystems"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeFileSystems(request *DescribeFileSystemsRequest) (_result *DescribeFileSystemsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeFileSystemsResponse{}
	_body, _err := client.DescribeFileSystemsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyMountTargetWithOptions(request *ModifyMountTargetRequest, runtime *util.RuntimeOptions) (_result *ModifyMountTargetResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyMountTargetResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyMountTarget"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyMountTarget(request *ModifyMountTargetRequest) (_result *ModifyMountTargetResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyMountTargetResponse{}
	_body, _err := client.ModifyMountTargetWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyFileSystemWithOptions(request *ModifyFileSystemRequest, runtime *util.RuntimeOptions) (_result *ModifyFileSystemResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyFileSystemResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyFileSystem"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-06-26"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyFileSystem(request *ModifyFileSystemRequest) (_result *ModifyFileSystemResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyFileSystemResponse{}
	_body, _err := client.ModifyFileSystemWithOptions(request, runtime)
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
