// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type DescribeSummaryDataRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	Language      *string `json:"Language,omitempty" xml:"Language,omitempty"`
}

func (s DescribeSummaryDataRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSummaryDataRequest) GoString() string {
	return s.String()
}

func (s *DescribeSummaryDataRequest) SetSecurityToken(v string) *DescribeSummaryDataRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeSummaryDataRequest) SetLanguage(v string) *DescribeSummaryDataRequest {
	s.Language = &v
	return s
}

type DescribeSummaryDataResponse struct {
	RequestId              *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	UsageGroupNum          *int    `json:"UsageGroupNum,omitempty" xml:"UsageGroupNum,omitempty" require:"true"`
	UsageApiNum            *int    `json:"UsageApiNum,omitempty" xml:"UsageApiNum,omitempty" require:"true"`
	UsageInstanceNum       *int    `json:"UsageInstanceNum,omitempty" xml:"UsageInstanceNum,omitempty" require:"true"`
	ComeingSoonInstanceNum *int    `json:"ComeingSoonInstanceNum,omitempty" xml:"ComeingSoonInstanceNum,omitempty" require:"true"`
	Region                 *string `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
}

func (s DescribeSummaryDataResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSummaryDataResponse) GoString() string {
	return s.String()
}

func (s *DescribeSummaryDataResponse) SetRequestId(v string) *DescribeSummaryDataResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSummaryDataResponse) SetUsageGroupNum(v int) *DescribeSummaryDataResponse {
	s.UsageGroupNum = &v
	return s
}

func (s *DescribeSummaryDataResponse) SetUsageApiNum(v int) *DescribeSummaryDataResponse {
	s.UsageApiNum = &v
	return s
}

func (s *DescribeSummaryDataResponse) SetUsageInstanceNum(v int) *DescribeSummaryDataResponse {
	s.UsageInstanceNum = &v
	return s
}

func (s *DescribeSummaryDataResponse) SetComeingSoonInstanceNum(v int) *DescribeSummaryDataResponse {
	s.ComeingSoonInstanceNum = &v
	return s
}

func (s *DescribeSummaryDataResponse) SetRegion(v string) *DescribeSummaryDataResponse {
	s.Region = &v
	return s
}

type ModifyApiMarketAttributesRequest struct {
	SecurityToken      *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId            *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiId              *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	NeedCharging       *bool   `json:"NeedCharging,omitempty" xml:"NeedCharging,omitempty" require:"true"`
	MarketChargingMode *string `json:"MarketChargingMode,omitempty" xml:"MarketChargingMode,omitempty"`
}

func (s ModifyApiMarketAttributesRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyApiMarketAttributesRequest) GoString() string {
	return s.String()
}

func (s *ModifyApiMarketAttributesRequest) SetSecurityToken(v string) *ModifyApiMarketAttributesRequest {
	s.SecurityToken = &v
	return s
}

func (s *ModifyApiMarketAttributesRequest) SetGroupId(v string) *ModifyApiMarketAttributesRequest {
	s.GroupId = &v
	return s
}

func (s *ModifyApiMarketAttributesRequest) SetApiId(v string) *ModifyApiMarketAttributesRequest {
	s.ApiId = &v
	return s
}

func (s *ModifyApiMarketAttributesRequest) SetNeedCharging(v bool) *ModifyApiMarketAttributesRequest {
	s.NeedCharging = &v
	return s
}

func (s *ModifyApiMarketAttributesRequest) SetMarketChargingMode(v string) *ModifyApiMarketAttributesRequest {
	s.MarketChargingMode = &v
	return s
}

type ModifyApiMarketAttributesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyApiMarketAttributesResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyApiMarketAttributesResponse) GoString() string {
	return s.String()
}

func (s *ModifyApiMarketAttributesResponse) SetRequestId(v string) *ModifyApiMarketAttributesResponse {
	s.RequestId = &v
	return s
}

type DescribeApiMarketAttributesRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
}

func (s DescribeApiMarketAttributesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiMarketAttributesRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiMarketAttributesRequest) SetSecurityToken(v string) *DescribeApiMarketAttributesRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiMarketAttributesRequest) SetGroupId(v string) *DescribeApiMarketAttributesRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiMarketAttributesRequest) SetApiId(v string) *DescribeApiMarketAttributesRequest {
	s.ApiId = &v
	return s
}

type DescribeApiMarketAttributesResponse struct {
	RequestId          *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ApiId              *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	NeedCharging       *string `json:"NeedCharging,omitempty" xml:"NeedCharging,omitempty" require:"true"`
	MarketChargingMode *string `json:"MarketChargingMode,omitempty" xml:"MarketChargingMode,omitempty" require:"true"`
}

func (s DescribeApiMarketAttributesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiMarketAttributesResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiMarketAttributesResponse) SetRequestId(v string) *DescribeApiMarketAttributesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiMarketAttributesResponse) SetApiId(v string) *DescribeApiMarketAttributesResponse {
	s.ApiId = &v
	return s
}

func (s *DescribeApiMarketAttributesResponse) SetNeedCharging(v string) *DescribeApiMarketAttributesResponse {
	s.NeedCharging = &v
	return s
}

func (s *DescribeApiMarketAttributesResponse) SetMarketChargingMode(v string) *DescribeApiMarketAttributesResponse {
	s.MarketChargingMode = &v
	return s
}

type SetWildcardDomainPatternsRequest struct {
	SecurityToken          *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId                *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	DomainName             *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	WildcardDomainPatterns *string `json:"WildcardDomainPatterns,omitempty" xml:"WildcardDomainPatterns,omitempty"`
}

func (s SetWildcardDomainPatternsRequest) String() string {
	return tea.Prettify(s)
}

func (s SetWildcardDomainPatternsRequest) GoString() string {
	return s.String()
}

func (s *SetWildcardDomainPatternsRequest) SetSecurityToken(v string) *SetWildcardDomainPatternsRequest {
	s.SecurityToken = &v
	return s
}

func (s *SetWildcardDomainPatternsRequest) SetGroupId(v string) *SetWildcardDomainPatternsRequest {
	s.GroupId = &v
	return s
}

func (s *SetWildcardDomainPatternsRequest) SetDomainName(v string) *SetWildcardDomainPatternsRequest {
	s.DomainName = &v
	return s
}

func (s *SetWildcardDomainPatternsRequest) SetWildcardDomainPatterns(v string) *SetWildcardDomainPatternsRequest {
	s.WildcardDomainPatterns = &v
	return s
}

type SetWildcardDomainPatternsResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetWildcardDomainPatternsResponse) String() string {
	return tea.Prettify(s)
}

func (s SetWildcardDomainPatternsResponse) GoString() string {
	return s.String()
}

func (s *SetWildcardDomainPatternsResponse) SetRequestId(v string) *SetWildcardDomainPatternsResponse {
	s.RequestId = &v
	return s
}

type ModifyApiGroupVpcWhitelistRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	VpcIds        *string `json:"VpcIds,omitempty" xml:"VpcIds,omitempty" require:"true"`
}

func (s ModifyApiGroupVpcWhitelistRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyApiGroupVpcWhitelistRequest) GoString() string {
	return s.String()
}

func (s *ModifyApiGroupVpcWhitelistRequest) SetSecurityToken(v string) *ModifyApiGroupVpcWhitelistRequest {
	s.SecurityToken = &v
	return s
}

func (s *ModifyApiGroupVpcWhitelistRequest) SetGroupId(v string) *ModifyApiGroupVpcWhitelistRequest {
	s.GroupId = &v
	return s
}

func (s *ModifyApiGroupVpcWhitelistRequest) SetVpcIds(v string) *ModifyApiGroupVpcWhitelistRequest {
	s.VpcIds = &v
	return s
}

type ModifyApiGroupVpcWhitelistResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyApiGroupVpcWhitelistResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyApiGroupVpcWhitelistResponse) GoString() string {
	return s.String()
}

func (s *ModifyApiGroupVpcWhitelistResponse) SetRequestId(v string) *ModifyApiGroupVpcWhitelistResponse {
	s.RequestId = &v
	return s
}

type DescribeApiGroupVpcWhitelistRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
}

func (s DescribeApiGroupVpcWhitelistRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupVpcWhitelistRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupVpcWhitelistRequest) SetSecurityToken(v string) *DescribeApiGroupVpcWhitelistRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiGroupVpcWhitelistRequest) SetGroupId(v string) *DescribeApiGroupVpcWhitelistRequest {
	s.GroupId = &v
	return s
}

type DescribeApiGroupVpcWhitelistResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	VpcIds    *string `json:"VpcIds,omitempty" xml:"VpcIds,omitempty" require:"true"`
}

func (s DescribeApiGroupVpcWhitelistResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupVpcWhitelistResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupVpcWhitelistResponse) SetRequestId(v string) *DescribeApiGroupVpcWhitelistResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiGroupVpcWhitelistResponse) SetVpcIds(v string) *DescribeApiGroupVpcWhitelistResponse {
	s.VpcIds = &v
	return s
}

type DeleteInstanceRequest struct {
	InstanceId *string                     `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	Tag        []*DeleteInstanceRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
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

func (s *DeleteInstanceRequest) SetTag(v []*DeleteInstanceRequestTag) *DeleteInstanceRequest {
	s.Tag = v
	return s
}

type DeleteInstanceRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DeleteInstanceRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DeleteInstanceRequestTag) GoString() string {
	return s.String()
}

func (s *DeleteInstanceRequestTag) SetKey(v string) *DeleteInstanceRequestTag {
	s.Key = &v
	return s
}

func (s *DeleteInstanceRequestTag) SetValue(v string) *DeleteInstanceRequestTag {
	s.Value = &v
	return s
}

type DeleteInstanceResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteInstanceResponse) GoString() string {
	return s.String()
}

func (s *DeleteInstanceResponse) SetRequestId(v string) *DeleteInstanceResponse {
	s.RequestId = &v
	return s
}

type CreateInstanceRequest struct {
	ChargeType   *string `json:"ChargeType,omitempty" xml:"ChargeType,omitempty" require:"true"`
	InstanceName *string `json:"InstanceName,omitempty" xml:"InstanceName,omitempty" require:"true"`
	InstanceSpec *string `json:"InstanceSpec,omitempty" xml:"InstanceSpec,omitempty" require:"true"`
	ZoneId       *string `json:"ZoneId,omitempty" xml:"ZoneId,omitempty"`
	HttpsPolicy  *string `json:"HttpsPolicy,omitempty" xml:"HttpsPolicy,omitempty"`
	Duration     *int    `json:"Duration,omitempty" xml:"Duration,omitempty"`
	PricingCycle *string `json:"PricingCycle,omitempty" xml:"PricingCycle,omitempty"`
	AutoPay      *bool   `json:"AutoPay,omitempty" xml:"AutoPay,omitempty"`
	Token        *string `json:"Token,omitempty" xml:"Token,omitempty" require:"true"`
}

func (s CreateInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateInstanceRequest) GoString() string {
	return s.String()
}

func (s *CreateInstanceRequest) SetChargeType(v string) *CreateInstanceRequest {
	s.ChargeType = &v
	return s
}

func (s *CreateInstanceRequest) SetInstanceName(v string) *CreateInstanceRequest {
	s.InstanceName = &v
	return s
}

func (s *CreateInstanceRequest) SetInstanceSpec(v string) *CreateInstanceRequest {
	s.InstanceSpec = &v
	return s
}

func (s *CreateInstanceRequest) SetZoneId(v string) *CreateInstanceRequest {
	s.ZoneId = &v
	return s
}

func (s *CreateInstanceRequest) SetHttpsPolicy(v string) *CreateInstanceRequest {
	s.HttpsPolicy = &v
	return s
}

func (s *CreateInstanceRequest) SetDuration(v int) *CreateInstanceRequest {
	s.Duration = &v
	return s
}

func (s *CreateInstanceRequest) SetPricingCycle(v string) *CreateInstanceRequest {
	s.PricingCycle = &v
	return s
}

func (s *CreateInstanceRequest) SetAutoPay(v bool) *CreateInstanceRequest {
	s.AutoPay = &v
	return s
}

func (s *CreateInstanceRequest) SetToken(v string) *CreateInstanceRequest {
	s.Token = &v
	return s
}

type CreateInstanceResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
}

func (s CreateInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateInstanceResponse) GoString() string {
	return s.String()
}

func (s *CreateInstanceResponse) SetRequestId(v string) *CreateInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *CreateInstanceResponse) SetInstanceId(v string) *CreateInstanceResponse {
	s.InstanceId = &v
	return s
}

type UntagResourcesRequest struct {
	SecurityToken *string   `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	ResourceId    []*string `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true" type:"Repeated"`
	ResourceType  *string   `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	TagKey        []*string `json:"TagKey,omitempty" xml:"TagKey,omitempty" type:"Repeated"`
	All           *bool     `json:"All,omitempty" xml:"All,omitempty"`
}

func (s UntagResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s UntagResourcesRequest) GoString() string {
	return s.String()
}

func (s *UntagResourcesRequest) SetSecurityToken(v string) *UntagResourcesRequest {
	s.SecurityToken = &v
	return s
}

func (s *UntagResourcesRequest) SetResourceId(v []*string) *UntagResourcesRequest {
	s.ResourceId = v
	return s
}

func (s *UntagResourcesRequest) SetResourceType(v string) *UntagResourcesRequest {
	s.ResourceType = &v
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

type ListTagResourcesRequest struct {
	SecurityToken *string                       `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	ResourceId    []*string                     `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" type:"Repeated"`
	ResourceType  *string                       `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	NextToken     *string                       `json:"NextToken,omitempty" xml:"NextToken,omitempty"`
	Tag           []*ListTagResourcesRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s ListTagResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesRequest) GoString() string {
	return s.String()
}

func (s *ListTagResourcesRequest) SetSecurityToken(v string) *ListTagResourcesRequest {
	s.SecurityToken = &v
	return s
}

func (s *ListTagResourcesRequest) SetResourceId(v []*string) *ListTagResourcesRequest {
	s.ResourceId = v
	return s
}

func (s *ListTagResourcesRequest) SetResourceType(v string) *ListTagResourcesRequest {
	s.ResourceType = &v
	return s
}

func (s *ListTagResourcesRequest) SetNextToken(v string) *ListTagResourcesRequest {
	s.NextToken = &v
	return s
}

func (s *ListTagResourcesRequest) SetTag(v []*ListTagResourcesRequestTag) *ListTagResourcesRequest {
	s.Tag = v
	return s
}

type ListTagResourcesRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
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
	NextToken    *string                               `json:"NextToken,omitempty" xml:"NextToken,omitempty" require:"true"`
	RequestId    *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TagResources *ListTagResourcesResponseTagResources `json:"TagResources,omitempty" xml:"TagResources,omitempty" require:"true" type:"Struct"`
}

func (s ListTagResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesResponse) GoString() string {
	return s.String()
}

func (s *ListTagResourcesResponse) SetNextToken(v string) *ListTagResourcesResponse {
	s.NextToken = &v
	return s
}

func (s *ListTagResourcesResponse) SetRequestId(v string) *ListTagResourcesResponse {
	s.RequestId = &v
	return s
}

func (s *ListTagResourcesResponse) SetTagResources(v *ListTagResourcesResponseTagResources) *ListTagResourcesResponse {
	s.TagResources = v
	return s
}

type ListTagResourcesResponseTagResources struct {
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
	ResourceId   *string `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true"`
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	TagKey       *string `json:"TagKey,omitempty" xml:"TagKey,omitempty" require:"true"`
	TagValue     *string `json:"TagValue,omitempty" xml:"TagValue,omitempty" require:"true"`
}

func (s ListTagResourcesResponseTagResourcesTagResource) String() string {
	return tea.Prettify(s)
}

func (s ListTagResourcesResponseTagResourcesTagResource) GoString() string {
	return s.String()
}

func (s *ListTagResourcesResponseTagResourcesTagResource) SetResourceId(v string) *ListTagResourcesResponseTagResourcesTagResource {
	s.ResourceId = &v
	return s
}

func (s *ListTagResourcesResponseTagResourcesTagResource) SetResourceType(v string) *ListTagResourcesResponseTagResourcesTagResource {
	s.ResourceType = &v
	return s
}

func (s *ListTagResourcesResponseTagResourcesTagResource) SetTagKey(v string) *ListTagResourcesResponseTagResourcesTagResource {
	s.TagKey = &v
	return s
}

func (s *ListTagResourcesResponseTagResourcesTagResource) SetTagValue(v string) *ListTagResourcesResponseTagResourcesTagResource {
	s.TagValue = &v
	return s
}

type TagResourcesRequest struct {
	SecurityToken *string                   `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	ResourceType  *string                   `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	Tag           []*TagResourcesRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true" type:"Repeated"`
	ResourceId    []*string                 `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true" type:"Repeated"`
}

func (s TagResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s TagResourcesRequest) GoString() string {
	return s.String()
}

func (s *TagResourcesRequest) SetSecurityToken(v string) *TagResourcesRequest {
	s.SecurityToken = &v
	return s
}

func (s *TagResourcesRequest) SetResourceType(v string) *TagResourcesRequest {
	s.ResourceType = &v
	return s
}

func (s *TagResourcesRequest) SetTag(v []*TagResourcesRequestTag) *TagResourcesRequest {
	s.Tag = v
	return s
}

func (s *TagResourcesRequest) SetResourceId(v []*string) *TagResourcesRequest {
	s.ResourceId = v
	return s
}

type TagResourcesRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
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

type DescribeZonesRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	Language      *string `json:"Language,omitempty" xml:"Language,omitempty"`
}

func (s DescribeZonesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeZonesRequest) GoString() string {
	return s.String()
}

func (s *DescribeZonesRequest) SetSecurityToken(v string) *DescribeZonesRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeZonesRequest) SetLanguage(v string) *DescribeZonesRequest {
	s.Language = &v
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
	ZoneId    *string `json:"ZoneId,omitempty" xml:"ZoneId,omitempty" require:"true"`
	LocalName *string `json:"LocalName,omitempty" xml:"LocalName,omitempty" require:"true"`
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

func (s *DescribeZonesResponseZonesZone) SetLocalName(v string) *DescribeZonesResponseZonesZone {
	s.LocalName = &v
	return s
}

type ResetAppCodeRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	AppCode       *string `json:"AppCode,omitempty" xml:"AppCode,omitempty" require:"true"`
}

func (s ResetAppCodeRequest) String() string {
	return tea.Prettify(s)
}

func (s ResetAppCodeRequest) GoString() string {
	return s.String()
}

func (s *ResetAppCodeRequest) SetSecurityToken(v string) *ResetAppCodeRequest {
	s.SecurityToken = &v
	return s
}

func (s *ResetAppCodeRequest) SetAppCode(v string) *ResetAppCodeRequest {
	s.AppCode = &v
	return s
}

type ResetAppCodeResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ResetAppCodeResponse) String() string {
	return tea.Prettify(s)
}

func (s ResetAppCodeResponse) GoString() string {
	return s.String()
}

func (s *ResetAppCodeResponse) SetRequestId(v string) *ResetAppCodeResponse {
	s.RequestId = &v
	return s
}

type DescribeAppRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	AppId         *int64  `json:"AppId,omitempty" xml:"AppId,omitempty"`
}

func (s DescribeAppRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppRequest) GoString() string {
	return s.String()
}

func (s *DescribeAppRequest) SetSecurityToken(v string) *DescribeAppRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeAppRequest) SetAppId(v int64) *DescribeAppRequest {
	s.AppId = &v
	return s
}

type DescribeAppResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AppId        *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	AppName      *string `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreatedTime  *string `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	ModifiedTime *string `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
}

func (s DescribeAppResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppResponse) GoString() string {
	return s.String()
}

func (s *DescribeAppResponse) SetRequestId(v string) *DescribeAppResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAppResponse) SetAppId(v int64) *DescribeAppResponse {
	s.AppId = &v
	return s
}

func (s *DescribeAppResponse) SetAppName(v string) *DescribeAppResponse {
	s.AppName = &v
	return s
}

func (s *DescribeAppResponse) SetDescription(v string) *DescribeAppResponse {
	s.Description = &v
	return s
}

func (s *DescribeAppResponse) SetCreatedTime(v string) *DescribeAppResponse {
	s.CreatedTime = &v
	return s
}

func (s *DescribeAppResponse) SetModifiedTime(v string) *DescribeAppResponse {
	s.ModifiedTime = &v
	return s
}

type CreateModelRequest struct {
	ModelName     *string `json:"ModelName,omitempty" xml:"ModelName,omitempty" require:"true"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	Schema        *string `json:"Schema,omitempty" xml:"Schema,omitempty" require:"true"`
	Description   *string `json:"Description,omitempty" xml:"Description,omitempty"`
}

func (s CreateModelRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateModelRequest) GoString() string {
	return s.String()
}

func (s *CreateModelRequest) SetModelName(v string) *CreateModelRequest {
	s.ModelName = &v
	return s
}

func (s *CreateModelRequest) SetGroupId(v string) *CreateModelRequest {
	s.GroupId = &v
	return s
}

func (s *CreateModelRequest) SetSecurityToken(v string) *CreateModelRequest {
	s.SecurityToken = &v
	return s
}

func (s *CreateModelRequest) SetSchema(v string) *CreateModelRequest {
	s.Schema = &v
	return s
}

func (s *CreateModelRequest) SetDescription(v string) *CreateModelRequest {
	s.Description = &v
	return s
}

type CreateModelResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ModelId      *string `json:"ModelId,omitempty" xml:"ModelId,omitempty" require:"true"`
	ModelRef     *string `json:"ModelRef,omitempty" xml:"ModelRef,omitempty" require:"true"`
	ModelName    *string `json:"ModelName,omitempty" xml:"ModelName,omitempty" require:"true"`
	GroupId      *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	Schema       *string `json:"Schema,omitempty" xml:"Schema,omitempty" require:"true"`
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreatedTime  *string `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	ModifiedTime *string `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
}

func (s CreateModelResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateModelResponse) GoString() string {
	return s.String()
}

func (s *CreateModelResponse) SetRequestId(v string) *CreateModelResponse {
	s.RequestId = &v
	return s
}

func (s *CreateModelResponse) SetModelId(v string) *CreateModelResponse {
	s.ModelId = &v
	return s
}

func (s *CreateModelResponse) SetModelRef(v string) *CreateModelResponse {
	s.ModelRef = &v
	return s
}

func (s *CreateModelResponse) SetModelName(v string) *CreateModelResponse {
	s.ModelName = &v
	return s
}

func (s *CreateModelResponse) SetGroupId(v string) *CreateModelResponse {
	s.GroupId = &v
	return s
}

func (s *CreateModelResponse) SetSchema(v string) *CreateModelResponse {
	s.Schema = &v
	return s
}

func (s *CreateModelResponse) SetRegionId(v string) *CreateModelResponse {
	s.RegionId = &v
	return s
}

func (s *CreateModelResponse) SetDescription(v string) *CreateModelResponse {
	s.Description = &v
	return s
}

func (s *CreateModelResponse) SetCreatedTime(v string) *CreateModelResponse {
	s.CreatedTime = &v
	return s
}

func (s *CreateModelResponse) SetModifiedTime(v string) *CreateModelResponse {
	s.ModifiedTime = &v
	return s
}

type DeleteModelRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	ModelName     *string `json:"ModelName,omitempty" xml:"ModelName,omitempty" require:"true"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
}

func (s DeleteModelRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteModelRequest) GoString() string {
	return s.String()
}

func (s *DeleteModelRequest) SetSecurityToken(v string) *DeleteModelRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteModelRequest) SetModelName(v string) *DeleteModelRequest {
	s.ModelName = &v
	return s
}

func (s *DeleteModelRequest) SetGroupId(v string) *DeleteModelRequest {
	s.GroupId = &v
	return s
}

type DeleteModelResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteModelResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteModelResponse) GoString() string {
	return s.String()
}

func (s *DeleteModelResponse) SetRequestId(v string) *DeleteModelResponse {
	s.RequestId = &v
	return s
}

type DescribeModelsRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ModelName     *string `json:"ModelName,omitempty" xml:"ModelName,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	ModelId       *string `json:"ModelId,omitempty" xml:"ModelId,omitempty"`
}

func (s DescribeModelsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeModelsRequest) GoString() string {
	return s.String()
}

func (s *DescribeModelsRequest) SetSecurityToken(v string) *DescribeModelsRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeModelsRequest) SetGroupId(v string) *DescribeModelsRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeModelsRequest) SetModelName(v string) *DescribeModelsRequest {
	s.ModelName = &v
	return s
}

func (s *DescribeModelsRequest) SetPageSize(v int) *DescribeModelsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeModelsRequest) SetPageNumber(v int) *DescribeModelsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeModelsRequest) SetModelId(v string) *DescribeModelsRequest {
	s.ModelId = &v
	return s
}

type DescribeModelsResponse struct {
	RequestId    *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount   *int                                `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize     *int                                `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber   *int                                `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	ModelDetails *DescribeModelsResponseModelDetails `json:"ModelDetails,omitempty" xml:"ModelDetails,omitempty" require:"true" type:"Struct"`
}

func (s DescribeModelsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeModelsResponse) GoString() string {
	return s.String()
}

func (s *DescribeModelsResponse) SetRequestId(v string) *DescribeModelsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeModelsResponse) SetTotalCount(v int) *DescribeModelsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeModelsResponse) SetPageSize(v int) *DescribeModelsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeModelsResponse) SetPageNumber(v int) *DescribeModelsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeModelsResponse) SetModelDetails(v *DescribeModelsResponseModelDetails) *DescribeModelsResponse {
	s.ModelDetails = v
	return s
}

type DescribeModelsResponseModelDetails struct {
	ModelDetail []*DescribeModelsResponseModelDetailsModelDetail `json:"ModelDetail,omitempty" xml:"ModelDetail,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeModelsResponseModelDetails) String() string {
	return tea.Prettify(s)
}

func (s DescribeModelsResponseModelDetails) GoString() string {
	return s.String()
}

func (s *DescribeModelsResponseModelDetails) SetModelDetail(v []*DescribeModelsResponseModelDetailsModelDetail) *DescribeModelsResponseModelDetails {
	s.ModelDetail = v
	return s
}

type DescribeModelsResponseModelDetailsModelDetail struct {
	GroupId      *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ModelId      *string `json:"ModelId,omitempty" xml:"ModelId,omitempty" require:"true"`
	ModelName    *string `json:"ModelName,omitempty" xml:"ModelName,omitempty" require:"true"`
	Schema       *string `json:"Schema,omitempty" xml:"Schema,omitempty" require:"true"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreatedTime  *string `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	ModifiedTime *string `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	ModelRef     *string `json:"ModelRef,omitempty" xml:"ModelRef,omitempty" require:"true"`
}

func (s DescribeModelsResponseModelDetailsModelDetail) String() string {
	return tea.Prettify(s)
}

func (s DescribeModelsResponseModelDetailsModelDetail) GoString() string {
	return s.String()
}

func (s *DescribeModelsResponseModelDetailsModelDetail) SetGroupId(v string) *DescribeModelsResponseModelDetailsModelDetail {
	s.GroupId = &v
	return s
}

func (s *DescribeModelsResponseModelDetailsModelDetail) SetModelId(v string) *DescribeModelsResponseModelDetailsModelDetail {
	s.ModelId = &v
	return s
}

func (s *DescribeModelsResponseModelDetailsModelDetail) SetModelName(v string) *DescribeModelsResponseModelDetailsModelDetail {
	s.ModelName = &v
	return s
}

func (s *DescribeModelsResponseModelDetailsModelDetail) SetSchema(v string) *DescribeModelsResponseModelDetailsModelDetail {
	s.Schema = &v
	return s
}

func (s *DescribeModelsResponseModelDetailsModelDetail) SetDescription(v string) *DescribeModelsResponseModelDetailsModelDetail {
	s.Description = &v
	return s
}

func (s *DescribeModelsResponseModelDetailsModelDetail) SetCreatedTime(v string) *DescribeModelsResponseModelDetailsModelDetail {
	s.CreatedTime = &v
	return s
}

func (s *DescribeModelsResponseModelDetailsModelDetail) SetModifiedTime(v string) *DescribeModelsResponseModelDetailsModelDetail {
	s.ModifiedTime = &v
	return s
}

func (s *DescribeModelsResponseModelDetailsModelDetail) SetModelRef(v string) *DescribeModelsResponseModelDetailsModelDetail {
	s.ModelRef = &v
	return s
}

type ModifyModelRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	ModelName     *string `json:"ModelName,omitempty" xml:"ModelName,omitempty" require:"true"`
	Description   *string `json:"Description,omitempty" xml:"Description,omitempty"`
	Schema        *string `json:"Schema,omitempty" xml:"Schema,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	NewModelName  *string `json:"NewModelName,omitempty" xml:"NewModelName,omitempty"`
}

func (s ModifyModelRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyModelRequest) GoString() string {
	return s.String()
}

func (s *ModifyModelRequest) SetSecurityToken(v string) *ModifyModelRequest {
	s.SecurityToken = &v
	return s
}

func (s *ModifyModelRequest) SetModelName(v string) *ModifyModelRequest {
	s.ModelName = &v
	return s
}

func (s *ModifyModelRequest) SetDescription(v string) *ModifyModelRequest {
	s.Description = &v
	return s
}

func (s *ModifyModelRequest) SetSchema(v string) *ModifyModelRequest {
	s.Schema = &v
	return s
}

func (s *ModifyModelRequest) SetGroupId(v string) *ModifyModelRequest {
	s.GroupId = &v
	return s
}

func (s *ModifyModelRequest) SetNewModelName(v string) *ModifyModelRequest {
	s.NewModelName = &v
	return s
}

type ModifyModelResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyModelResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyModelResponse) GoString() string {
	return s.String()
}

func (s *ModifyModelResponse) SetRequestId(v string) *ModifyModelResponse {
	s.RequestId = &v
	return s
}

type CreateIntranetDomainRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
}

func (s CreateIntranetDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateIntranetDomainRequest) GoString() string {
	return s.String()
}

func (s *CreateIntranetDomainRequest) SetSecurityToken(v string) *CreateIntranetDomainRequest {
	s.SecurityToken = &v
	return s
}

func (s *CreateIntranetDomainRequest) SetGroupId(v string) *CreateIntranetDomainRequest {
	s.GroupId = &v
	return s
}

type CreateIntranetDomainResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s CreateIntranetDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateIntranetDomainResponse) GoString() string {
	return s.String()
}

func (s *CreateIntranetDomainResponse) SetRequestId(v string) *CreateIntranetDomainResponse {
	s.RequestId = &v
	return s
}

func (s *CreateIntranetDomainResponse) SetDomainName(v string) *CreateIntranetDomainResponse {
	s.DomainName = &v
	return s
}

type ImportSwaggerRequest struct {
	Overwrite       *bool                  `json:"Overwrite,omitempty" xml:"Overwrite,omitempty" require:"true"`
	GlobalCondition map[string]interface{} `json:"GlobalCondition,omitempty" xml:"GlobalCondition,omitempty"`
	DataFormat      *string                `json:"DataFormat,omitempty" xml:"DataFormat,omitempty" require:"true"`
	Data            *string                `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	GroupId         *string                `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
}

func (s ImportSwaggerRequest) String() string {
	return tea.Prettify(s)
}

func (s ImportSwaggerRequest) GoString() string {
	return s.String()
}

func (s *ImportSwaggerRequest) SetOverwrite(v bool) *ImportSwaggerRequest {
	s.Overwrite = &v
	return s
}

func (s *ImportSwaggerRequest) SetGlobalCondition(v map[string]interface{}) *ImportSwaggerRequest {
	s.GlobalCondition = v
	return s
}

func (s *ImportSwaggerRequest) SetDataFormat(v string) *ImportSwaggerRequest {
	s.DataFormat = &v
	return s
}

func (s *ImportSwaggerRequest) SetData(v string) *ImportSwaggerRequest {
	s.Data = &v
	return s
}

func (s *ImportSwaggerRequest) SetGroupId(v string) *ImportSwaggerRequest {
	s.GroupId = &v
	return s
}

type ImportSwaggerResponse struct {
	RequestId    *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success      *ImportSwaggerResponseSuccess      `json:"Success,omitempty" xml:"Success,omitempty" require:"true" type:"Struct"`
	Failed       *ImportSwaggerResponseFailed       `json:"Failed,omitempty" xml:"Failed,omitempty" require:"true" type:"Struct"`
	ModelFailed  *ImportSwaggerResponseModelFailed  `json:"ModelFailed,omitempty" xml:"ModelFailed,omitempty" require:"true" type:"Struct"`
	ModelSuccess *ImportSwaggerResponseModelSuccess `json:"ModelSuccess,omitempty" xml:"ModelSuccess,omitempty" require:"true" type:"Struct"`
}

func (s ImportSwaggerResponse) String() string {
	return tea.Prettify(s)
}

func (s ImportSwaggerResponse) GoString() string {
	return s.String()
}

func (s *ImportSwaggerResponse) SetRequestId(v string) *ImportSwaggerResponse {
	s.RequestId = &v
	return s
}

func (s *ImportSwaggerResponse) SetSuccess(v *ImportSwaggerResponseSuccess) *ImportSwaggerResponse {
	s.Success = v
	return s
}

func (s *ImportSwaggerResponse) SetFailed(v *ImportSwaggerResponseFailed) *ImportSwaggerResponse {
	s.Failed = v
	return s
}

func (s *ImportSwaggerResponse) SetModelFailed(v *ImportSwaggerResponseModelFailed) *ImportSwaggerResponse {
	s.ModelFailed = v
	return s
}

func (s *ImportSwaggerResponse) SetModelSuccess(v *ImportSwaggerResponseModelSuccess) *ImportSwaggerResponse {
	s.ModelSuccess = v
	return s
}

type ImportSwaggerResponseSuccess struct {
	ApiImportSwaggerSuccess []*ImportSwaggerResponseSuccessApiImportSwaggerSuccess `json:"ApiImportSwaggerSuccess,omitempty" xml:"ApiImportSwaggerSuccess,omitempty" require:"true" type:"Repeated"`
}

func (s ImportSwaggerResponseSuccess) String() string {
	return tea.Prettify(s)
}

func (s ImportSwaggerResponseSuccess) GoString() string {
	return s.String()
}

func (s *ImportSwaggerResponseSuccess) SetApiImportSwaggerSuccess(v []*ImportSwaggerResponseSuccessApiImportSwaggerSuccess) *ImportSwaggerResponseSuccess {
	s.ApiImportSwaggerSuccess = v
	return s
}

type ImportSwaggerResponseSuccessApiImportSwaggerSuccess struct {
	Path         *string `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
	HttpMethod   *string `json:"HttpMethod,omitempty" xml:"HttpMethod,omitempty" require:"true"`
	ApiUid       *string `json:"ApiUid,omitempty" xml:"ApiUid,omitempty" require:"true"`
	ApiOperation *string `json:"ApiOperation,omitempty" xml:"ApiOperation,omitempty" require:"true"`
}

func (s ImportSwaggerResponseSuccessApiImportSwaggerSuccess) String() string {
	return tea.Prettify(s)
}

func (s ImportSwaggerResponseSuccessApiImportSwaggerSuccess) GoString() string {
	return s.String()
}

func (s *ImportSwaggerResponseSuccessApiImportSwaggerSuccess) SetPath(v string) *ImportSwaggerResponseSuccessApiImportSwaggerSuccess {
	s.Path = &v
	return s
}

func (s *ImportSwaggerResponseSuccessApiImportSwaggerSuccess) SetHttpMethod(v string) *ImportSwaggerResponseSuccessApiImportSwaggerSuccess {
	s.HttpMethod = &v
	return s
}

func (s *ImportSwaggerResponseSuccessApiImportSwaggerSuccess) SetApiUid(v string) *ImportSwaggerResponseSuccessApiImportSwaggerSuccess {
	s.ApiUid = &v
	return s
}

func (s *ImportSwaggerResponseSuccessApiImportSwaggerSuccess) SetApiOperation(v string) *ImportSwaggerResponseSuccessApiImportSwaggerSuccess {
	s.ApiOperation = &v
	return s
}

type ImportSwaggerResponseFailed struct {
	ApiImportSwaggerFailed []*ImportSwaggerResponseFailedApiImportSwaggerFailed `json:"ApiImportSwaggerFailed,omitempty" xml:"ApiImportSwaggerFailed,omitempty" require:"true" type:"Repeated"`
}

func (s ImportSwaggerResponseFailed) String() string {
	return tea.Prettify(s)
}

func (s ImportSwaggerResponseFailed) GoString() string {
	return s.String()
}

func (s *ImportSwaggerResponseFailed) SetApiImportSwaggerFailed(v []*ImportSwaggerResponseFailedApiImportSwaggerFailed) *ImportSwaggerResponseFailed {
	s.ApiImportSwaggerFailed = v
	return s
}

type ImportSwaggerResponseFailedApiImportSwaggerFailed struct {
	Path       *string `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
	HttpMethod *string `json:"HttpMethod,omitempty" xml:"HttpMethod,omitempty" require:"true"`
	ErrorMsg   *string `json:"ErrorMsg,omitempty" xml:"ErrorMsg,omitempty" require:"true"`
}

func (s ImportSwaggerResponseFailedApiImportSwaggerFailed) String() string {
	return tea.Prettify(s)
}

func (s ImportSwaggerResponseFailedApiImportSwaggerFailed) GoString() string {
	return s.String()
}

func (s *ImportSwaggerResponseFailedApiImportSwaggerFailed) SetPath(v string) *ImportSwaggerResponseFailedApiImportSwaggerFailed {
	s.Path = &v
	return s
}

func (s *ImportSwaggerResponseFailedApiImportSwaggerFailed) SetHttpMethod(v string) *ImportSwaggerResponseFailedApiImportSwaggerFailed {
	s.HttpMethod = &v
	return s
}

func (s *ImportSwaggerResponseFailedApiImportSwaggerFailed) SetErrorMsg(v string) *ImportSwaggerResponseFailedApiImportSwaggerFailed {
	s.ErrorMsg = &v
	return s
}

type ImportSwaggerResponseModelFailed struct {
	ApiImportModelFailed []*ImportSwaggerResponseModelFailedApiImportModelFailed `json:"ApiImportModelFailed,omitempty" xml:"ApiImportModelFailed,omitempty" require:"true" type:"Repeated"`
}

func (s ImportSwaggerResponseModelFailed) String() string {
	return tea.Prettify(s)
}

func (s ImportSwaggerResponseModelFailed) GoString() string {
	return s.String()
}

func (s *ImportSwaggerResponseModelFailed) SetApiImportModelFailed(v []*ImportSwaggerResponseModelFailedApiImportModelFailed) *ImportSwaggerResponseModelFailed {
	s.ApiImportModelFailed = v
	return s
}

type ImportSwaggerResponseModelFailedApiImportModelFailed struct {
	GroupId   *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ModelName *string `json:"ModelName,omitempty" xml:"ModelName,omitempty" require:"true"`
	ErrorMsg  *string `json:"ErrorMsg,omitempty" xml:"ErrorMsg,omitempty" require:"true"`
}

func (s ImportSwaggerResponseModelFailedApiImportModelFailed) String() string {
	return tea.Prettify(s)
}

func (s ImportSwaggerResponseModelFailedApiImportModelFailed) GoString() string {
	return s.String()
}

func (s *ImportSwaggerResponseModelFailedApiImportModelFailed) SetGroupId(v string) *ImportSwaggerResponseModelFailedApiImportModelFailed {
	s.GroupId = &v
	return s
}

func (s *ImportSwaggerResponseModelFailedApiImportModelFailed) SetModelName(v string) *ImportSwaggerResponseModelFailedApiImportModelFailed {
	s.ModelName = &v
	return s
}

func (s *ImportSwaggerResponseModelFailedApiImportModelFailed) SetErrorMsg(v string) *ImportSwaggerResponseModelFailedApiImportModelFailed {
	s.ErrorMsg = &v
	return s
}

type ImportSwaggerResponseModelSuccess struct {
	ApiImportModelSuccess []*ImportSwaggerResponseModelSuccessApiImportModelSuccess `json:"ApiImportModelSuccess,omitempty" xml:"ApiImportModelSuccess,omitempty" require:"true" type:"Repeated"`
}

func (s ImportSwaggerResponseModelSuccess) String() string {
	return tea.Prettify(s)
}

func (s ImportSwaggerResponseModelSuccess) GoString() string {
	return s.String()
}

func (s *ImportSwaggerResponseModelSuccess) SetApiImportModelSuccess(v []*ImportSwaggerResponseModelSuccessApiImportModelSuccess) *ImportSwaggerResponseModelSuccess {
	s.ApiImportModelSuccess = v
	return s
}

type ImportSwaggerResponseModelSuccessApiImportModelSuccess struct {
	ModelUid       *string `json:"ModelUid,omitempty" xml:"ModelUid,omitempty" require:"true"`
	ModelOperation *string `json:"ModelOperation,omitempty" xml:"ModelOperation,omitempty" require:"true"`
	GroupId        *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ModelName      *string `json:"ModelName,omitempty" xml:"ModelName,omitempty" require:"true"`
}

func (s ImportSwaggerResponseModelSuccessApiImportModelSuccess) String() string {
	return tea.Prettify(s)
}

func (s ImportSwaggerResponseModelSuccessApiImportModelSuccess) GoString() string {
	return s.String()
}

func (s *ImportSwaggerResponseModelSuccessApiImportModelSuccess) SetModelUid(v string) *ImportSwaggerResponseModelSuccessApiImportModelSuccess {
	s.ModelUid = &v
	return s
}

func (s *ImportSwaggerResponseModelSuccessApiImportModelSuccess) SetModelOperation(v string) *ImportSwaggerResponseModelSuccessApiImportModelSuccess {
	s.ModelOperation = &v
	return s
}

func (s *ImportSwaggerResponseModelSuccessApiImportModelSuccess) SetGroupId(v string) *ImportSwaggerResponseModelSuccessApiImportModelSuccess {
	s.GroupId = &v
	return s
}

func (s *ImportSwaggerResponseModelSuccessApiImportModelSuccess) SetModelName(v string) *ImportSwaggerResponseModelSuccessApiImportModelSuccess {
	s.ModelName = &v
	return s
}

type SetIpControlApisRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	IpControlId   *string `json:"IpControlId,omitempty" xml:"IpControlId,omitempty" require:"true"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiIds        *string `json:"ApiIds,omitempty" xml:"ApiIds,omitempty" require:"true"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
}

func (s SetIpControlApisRequest) String() string {
	return tea.Prettify(s)
}

func (s SetIpControlApisRequest) GoString() string {
	return s.String()
}

func (s *SetIpControlApisRequest) SetSecurityToken(v string) *SetIpControlApisRequest {
	s.SecurityToken = &v
	return s
}

func (s *SetIpControlApisRequest) SetIpControlId(v string) *SetIpControlApisRequest {
	s.IpControlId = &v
	return s
}

func (s *SetIpControlApisRequest) SetGroupId(v string) *SetIpControlApisRequest {
	s.GroupId = &v
	return s
}

func (s *SetIpControlApisRequest) SetApiIds(v string) *SetIpControlApisRequest {
	s.ApiIds = &v
	return s
}

func (s *SetIpControlApisRequest) SetStageName(v string) *SetIpControlApisRequest {
	s.StageName = &v
	return s
}

type SetIpControlApisResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetIpControlApisResponse) String() string {
	return tea.Prettify(s)
}

func (s SetIpControlApisResponse) GoString() string {
	return s.String()
}

func (s *SetIpControlApisResponse) SetRequestId(v string) *SetIpControlApisResponse {
	s.RequestId = &v
	return s
}

type RemoveIpControlPolicyItemRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	IpControlId   *string `json:"IpControlId,omitempty" xml:"IpControlId,omitempty" require:"true"`
	PolicyItemIds *string `json:"PolicyItemIds,omitempty" xml:"PolicyItemIds,omitempty" require:"true"`
}

func (s RemoveIpControlPolicyItemRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveIpControlPolicyItemRequest) GoString() string {
	return s.String()
}

func (s *RemoveIpControlPolicyItemRequest) SetSecurityToken(v string) *RemoveIpControlPolicyItemRequest {
	s.SecurityToken = &v
	return s
}

func (s *RemoveIpControlPolicyItemRequest) SetIpControlId(v string) *RemoveIpControlPolicyItemRequest {
	s.IpControlId = &v
	return s
}

func (s *RemoveIpControlPolicyItemRequest) SetPolicyItemIds(v string) *RemoveIpControlPolicyItemRequest {
	s.PolicyItemIds = &v
	return s
}

type RemoveIpControlPolicyItemResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s RemoveIpControlPolicyItemResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveIpControlPolicyItemResponse) GoString() string {
	return s.String()
}

func (s *RemoveIpControlPolicyItemResponse) SetRequestId(v string) *RemoveIpControlPolicyItemResponse {
	s.RequestId = &v
	return s
}

type RemoveIpControlApisRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	IpControlId   *string `json:"IpControlId,omitempty" xml:"IpControlId,omitempty" require:"true"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiIds        *string `json:"ApiIds,omitempty" xml:"ApiIds,omitempty"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
}

func (s RemoveIpControlApisRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveIpControlApisRequest) GoString() string {
	return s.String()
}

func (s *RemoveIpControlApisRequest) SetSecurityToken(v string) *RemoveIpControlApisRequest {
	s.SecurityToken = &v
	return s
}

func (s *RemoveIpControlApisRequest) SetIpControlId(v string) *RemoveIpControlApisRequest {
	s.IpControlId = &v
	return s
}

func (s *RemoveIpControlApisRequest) SetGroupId(v string) *RemoveIpControlApisRequest {
	s.GroupId = &v
	return s
}

func (s *RemoveIpControlApisRequest) SetApiIds(v string) *RemoveIpControlApisRequest {
	s.ApiIds = &v
	return s
}

func (s *RemoveIpControlApisRequest) SetStageName(v string) *RemoveIpControlApisRequest {
	s.StageName = &v
	return s
}

type RemoveIpControlApisResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s RemoveIpControlApisResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveIpControlApisResponse) GoString() string {
	return s.String()
}

func (s *RemoveIpControlApisResponse) SetRequestId(v string) *RemoveIpControlApisResponse {
	s.RequestId = &v
	return s
}

type ModifyIpControlPolicyItemRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	IpControlId   *string `json:"IpControlId,omitempty" xml:"IpControlId,omitempty" require:"true"`
	PolicyItemId  *string `json:"PolicyItemId,omitempty" xml:"PolicyItemId,omitempty" require:"true"`
	AppId         *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
	CidrIp        *string `json:"CidrIp,omitempty" xml:"CidrIp,omitempty" require:"true"`
}

func (s ModifyIpControlPolicyItemRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyIpControlPolicyItemRequest) GoString() string {
	return s.String()
}

func (s *ModifyIpControlPolicyItemRequest) SetSecurityToken(v string) *ModifyIpControlPolicyItemRequest {
	s.SecurityToken = &v
	return s
}

func (s *ModifyIpControlPolicyItemRequest) SetIpControlId(v string) *ModifyIpControlPolicyItemRequest {
	s.IpControlId = &v
	return s
}

func (s *ModifyIpControlPolicyItemRequest) SetPolicyItemId(v string) *ModifyIpControlPolicyItemRequest {
	s.PolicyItemId = &v
	return s
}

func (s *ModifyIpControlPolicyItemRequest) SetAppId(v string) *ModifyIpControlPolicyItemRequest {
	s.AppId = &v
	return s
}

func (s *ModifyIpControlPolicyItemRequest) SetCidrIp(v string) *ModifyIpControlPolicyItemRequest {
	s.CidrIp = &v
	return s
}

type ModifyIpControlPolicyItemResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyIpControlPolicyItemResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyIpControlPolicyItemResponse) GoString() string {
	return s.String()
}

func (s *ModifyIpControlPolicyItemResponse) SetRequestId(v string) *ModifyIpControlPolicyItemResponse {
	s.RequestId = &v
	return s
}

type ModifyIpControlRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	IpControlId   *string `json:"IpControlId,omitempty" xml:"IpControlId,omitempty" require:"true"`
	IpControlName *string `json:"IpControlName,omitempty" xml:"IpControlName,omitempty"`
	Description   *string `json:"Description,omitempty" xml:"Description,omitempty"`
}

func (s ModifyIpControlRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyIpControlRequest) GoString() string {
	return s.String()
}

func (s *ModifyIpControlRequest) SetSecurityToken(v string) *ModifyIpControlRequest {
	s.SecurityToken = &v
	return s
}

func (s *ModifyIpControlRequest) SetIpControlId(v string) *ModifyIpControlRequest {
	s.IpControlId = &v
	return s
}

func (s *ModifyIpControlRequest) SetIpControlName(v string) *ModifyIpControlRequest {
	s.IpControlName = &v
	return s
}

func (s *ModifyIpControlRequest) SetDescription(v string) *ModifyIpControlRequest {
	s.Description = &v
	return s
}

type ModifyIpControlResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyIpControlResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyIpControlResponse) GoString() string {
	return s.String()
}

func (s *ModifyIpControlResponse) SetRequestId(v string) *ModifyIpControlResponse {
	s.RequestId = &v
	return s
}

type DescribeIpControlsRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	IpControlId   *string `json:"IpControlId,omitempty" xml:"IpControlId,omitempty"`
	IpControlName *string `json:"IpControlName,omitempty" xml:"IpControlName,omitempty"`
	IpControlType *string `json:"IpControlType,omitempty" xml:"IpControlType,omitempty"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeIpControlsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeIpControlsRequest) GoString() string {
	return s.String()
}

func (s *DescribeIpControlsRequest) SetSecurityToken(v string) *DescribeIpControlsRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeIpControlsRequest) SetIpControlId(v string) *DescribeIpControlsRequest {
	s.IpControlId = &v
	return s
}

func (s *DescribeIpControlsRequest) SetIpControlName(v string) *DescribeIpControlsRequest {
	s.IpControlName = &v
	return s
}

func (s *DescribeIpControlsRequest) SetIpControlType(v string) *DescribeIpControlsRequest {
	s.IpControlType = &v
	return s
}

func (s *DescribeIpControlsRequest) SetPageNumber(v int) *DescribeIpControlsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeIpControlsRequest) SetPageSize(v int) *DescribeIpControlsRequest {
	s.PageSize = &v
	return s
}

type DescribeIpControlsResponse struct {
	RequestId      *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount     *int                                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize       *int                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber     *int                                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	IpControlInfos *DescribeIpControlsResponseIpControlInfos `json:"IpControlInfos,omitempty" xml:"IpControlInfos,omitempty" require:"true" type:"Struct"`
}

func (s DescribeIpControlsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeIpControlsResponse) GoString() string {
	return s.String()
}

func (s *DescribeIpControlsResponse) SetRequestId(v string) *DescribeIpControlsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeIpControlsResponse) SetTotalCount(v int) *DescribeIpControlsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeIpControlsResponse) SetPageSize(v int) *DescribeIpControlsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeIpControlsResponse) SetPageNumber(v int) *DescribeIpControlsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeIpControlsResponse) SetIpControlInfos(v *DescribeIpControlsResponseIpControlInfos) *DescribeIpControlsResponse {
	s.IpControlInfos = v
	return s
}

type DescribeIpControlsResponseIpControlInfos struct {
	IpControlInfo []*DescribeIpControlsResponseIpControlInfosIpControlInfo `json:"IpControlInfo,omitempty" xml:"IpControlInfo,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeIpControlsResponseIpControlInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeIpControlsResponseIpControlInfos) GoString() string {
	return s.String()
}

func (s *DescribeIpControlsResponseIpControlInfos) SetIpControlInfo(v []*DescribeIpControlsResponseIpControlInfosIpControlInfo) *DescribeIpControlsResponseIpControlInfos {
	s.IpControlInfo = v
	return s
}

type DescribeIpControlsResponseIpControlInfosIpControlInfo struct {
	IpControlId   *string `json:"IpControlId,omitempty" xml:"IpControlId,omitempty" require:"true"`
	IpControlName *string `json:"IpControlName,omitempty" xml:"IpControlName,omitempty" require:"true"`
	IpControlType *string `json:"IpControlType,omitempty" xml:"IpControlType,omitempty" require:"true"`
	Description   *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreateTime    *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	ModifiedTime  *string `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	RegionId      *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s DescribeIpControlsResponseIpControlInfosIpControlInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeIpControlsResponseIpControlInfosIpControlInfo) GoString() string {
	return s.String()
}

func (s *DescribeIpControlsResponseIpControlInfosIpControlInfo) SetIpControlId(v string) *DescribeIpControlsResponseIpControlInfosIpControlInfo {
	s.IpControlId = &v
	return s
}

func (s *DescribeIpControlsResponseIpControlInfosIpControlInfo) SetIpControlName(v string) *DescribeIpControlsResponseIpControlInfosIpControlInfo {
	s.IpControlName = &v
	return s
}

func (s *DescribeIpControlsResponseIpControlInfosIpControlInfo) SetIpControlType(v string) *DescribeIpControlsResponseIpControlInfosIpControlInfo {
	s.IpControlType = &v
	return s
}

func (s *DescribeIpControlsResponseIpControlInfosIpControlInfo) SetDescription(v string) *DescribeIpControlsResponseIpControlInfosIpControlInfo {
	s.Description = &v
	return s
}

func (s *DescribeIpControlsResponseIpControlInfosIpControlInfo) SetCreateTime(v string) *DescribeIpControlsResponseIpControlInfosIpControlInfo {
	s.CreateTime = &v
	return s
}

func (s *DescribeIpControlsResponseIpControlInfosIpControlInfo) SetModifiedTime(v string) *DescribeIpControlsResponseIpControlInfosIpControlInfo {
	s.ModifiedTime = &v
	return s
}

func (s *DescribeIpControlsResponseIpControlInfosIpControlInfo) SetRegionId(v string) *DescribeIpControlsResponseIpControlInfosIpControlInfo {
	s.RegionId = &v
	return s
}

type DescribeIpControlPolicyItemsRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	IpControlId   *string `json:"IpControlId,omitempty" xml:"IpControlId,omitempty"`
	PolicyItemId  *string `json:"PolicyItemId,omitempty" xml:"PolicyItemId,omitempty"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeIpControlPolicyItemsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeIpControlPolicyItemsRequest) GoString() string {
	return s.String()
}

func (s *DescribeIpControlPolicyItemsRequest) SetSecurityToken(v string) *DescribeIpControlPolicyItemsRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeIpControlPolicyItemsRequest) SetIpControlId(v string) *DescribeIpControlPolicyItemsRequest {
	s.IpControlId = &v
	return s
}

func (s *DescribeIpControlPolicyItemsRequest) SetPolicyItemId(v string) *DescribeIpControlPolicyItemsRequest {
	s.PolicyItemId = &v
	return s
}

func (s *DescribeIpControlPolicyItemsRequest) SetPageNumber(v int) *DescribeIpControlPolicyItemsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeIpControlPolicyItemsRequest) SetPageSize(v int) *DescribeIpControlPolicyItemsRequest {
	s.PageSize = &v
	return s
}

type DescribeIpControlPolicyItemsResponse struct {
	RequestId            *string                                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount           *int                                                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize             *int                                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber           *int                                                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	IpControlPolicyItems *DescribeIpControlPolicyItemsResponseIpControlPolicyItems `json:"IpControlPolicyItems,omitempty" xml:"IpControlPolicyItems,omitempty" require:"true" type:"Struct"`
}

func (s DescribeIpControlPolicyItemsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeIpControlPolicyItemsResponse) GoString() string {
	return s.String()
}

func (s *DescribeIpControlPolicyItemsResponse) SetRequestId(v string) *DescribeIpControlPolicyItemsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeIpControlPolicyItemsResponse) SetTotalCount(v int) *DescribeIpControlPolicyItemsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeIpControlPolicyItemsResponse) SetPageSize(v int) *DescribeIpControlPolicyItemsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeIpControlPolicyItemsResponse) SetPageNumber(v int) *DescribeIpControlPolicyItemsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeIpControlPolicyItemsResponse) SetIpControlPolicyItems(v *DescribeIpControlPolicyItemsResponseIpControlPolicyItems) *DescribeIpControlPolicyItemsResponse {
	s.IpControlPolicyItems = v
	return s
}

type DescribeIpControlPolicyItemsResponseIpControlPolicyItems struct {
	IpControlPolicyItem []*DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem `json:"IpControlPolicyItem,omitempty" xml:"IpControlPolicyItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeIpControlPolicyItemsResponseIpControlPolicyItems) String() string {
	return tea.Prettify(s)
}

func (s DescribeIpControlPolicyItemsResponseIpControlPolicyItems) GoString() string {
	return s.String()
}

func (s *DescribeIpControlPolicyItemsResponseIpControlPolicyItems) SetIpControlPolicyItem(v []*DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem) *DescribeIpControlPolicyItemsResponseIpControlPolicyItems {
	s.IpControlPolicyItem = v
	return s
}

type DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem struct {
	AppId        *string `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	CidrIp       *string `json:"CidrIp,omitempty" xml:"CidrIp,omitempty" require:"true"`
	PolicyItemId *string `json:"PolicyItemId,omitempty" xml:"PolicyItemId,omitempty" require:"true"`
	CreateTime   *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	ModifiedTime *string `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
}

func (s DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem) GoString() string {
	return s.String()
}

func (s *DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem) SetAppId(v string) *DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem {
	s.AppId = &v
	return s
}

func (s *DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem) SetCidrIp(v string) *DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem {
	s.CidrIp = &v
	return s
}

func (s *DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem) SetPolicyItemId(v string) *DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem {
	s.PolicyItemId = &v
	return s
}

func (s *DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem) SetCreateTime(v string) *DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem {
	s.CreateTime = &v
	return s
}

func (s *DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem) SetModifiedTime(v string) *DescribeIpControlPolicyItemsResponseIpControlPolicyItemsIpControlPolicyItem {
	s.ModifiedTime = &v
	return s
}

type DescribeApisByIpControlRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	IpControlId   *string `json:"IpControlId,omitempty" xml:"IpControlId,omitempty" require:"true"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeApisByIpControlRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisByIpControlRequest) GoString() string {
	return s.String()
}

func (s *DescribeApisByIpControlRequest) SetSecurityToken(v string) *DescribeApisByIpControlRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApisByIpControlRequest) SetIpControlId(v string) *DescribeApisByIpControlRequest {
	s.IpControlId = &v
	return s
}

func (s *DescribeApisByIpControlRequest) SetPageSize(v int) *DescribeApisByIpControlRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeApisByIpControlRequest) SetPageNumber(v int) *DescribeApisByIpControlRequest {
	s.PageNumber = &v
	return s
}

type DescribeApisByIpControlResponse struct {
	RequestId  *string                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int                                     `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize   *int                                     `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                                     `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	ApiInfos   *DescribeApisByIpControlResponseApiInfos `json:"ApiInfos,omitempty" xml:"ApiInfos,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApisByIpControlResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisByIpControlResponse) GoString() string {
	return s.String()
}

func (s *DescribeApisByIpControlResponse) SetRequestId(v string) *DescribeApisByIpControlResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApisByIpControlResponse) SetTotalCount(v int) *DescribeApisByIpControlResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeApisByIpControlResponse) SetPageSize(v int) *DescribeApisByIpControlResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeApisByIpControlResponse) SetPageNumber(v int) *DescribeApisByIpControlResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeApisByIpControlResponse) SetApiInfos(v *DescribeApisByIpControlResponseApiInfos) *DescribeApisByIpControlResponse {
	s.ApiInfos = v
	return s
}

type DescribeApisByIpControlResponseApiInfos struct {
	ApiInfo []*DescribeApisByIpControlResponseApiInfosApiInfo `json:"ApiInfo,omitempty" xml:"ApiInfo,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApisByIpControlResponseApiInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisByIpControlResponseApiInfos) GoString() string {
	return s.String()
}

func (s *DescribeApisByIpControlResponseApiInfos) SetApiInfo(v []*DescribeApisByIpControlResponseApiInfosApiInfo) *DescribeApisByIpControlResponseApiInfos {
	s.ApiInfo = v
	return s
}

type DescribeApisByIpControlResponseApiInfosApiInfo struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	GroupId     *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName   *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	StageName   *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	ApiId       *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName     *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Visibility  *string `json:"Visibility,omitempty" xml:"Visibility,omitempty" require:"true"`
	BoundTime   *string `json:"BoundTime,omitempty" xml:"BoundTime,omitempty" require:"true"`
}

func (s DescribeApisByIpControlResponseApiInfosApiInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisByIpControlResponseApiInfosApiInfo) GoString() string {
	return s.String()
}

func (s *DescribeApisByIpControlResponseApiInfosApiInfo) SetRegionId(v string) *DescribeApisByIpControlResponseApiInfosApiInfo {
	s.RegionId = &v
	return s
}

func (s *DescribeApisByIpControlResponseApiInfosApiInfo) SetGroupId(v string) *DescribeApisByIpControlResponseApiInfosApiInfo {
	s.GroupId = &v
	return s
}

func (s *DescribeApisByIpControlResponseApiInfosApiInfo) SetGroupName(v string) *DescribeApisByIpControlResponseApiInfosApiInfo {
	s.GroupName = &v
	return s
}

func (s *DescribeApisByIpControlResponseApiInfosApiInfo) SetStageName(v string) *DescribeApisByIpControlResponseApiInfosApiInfo {
	s.StageName = &v
	return s
}

func (s *DescribeApisByIpControlResponseApiInfosApiInfo) SetApiId(v string) *DescribeApisByIpControlResponseApiInfosApiInfo {
	s.ApiId = &v
	return s
}

func (s *DescribeApisByIpControlResponseApiInfosApiInfo) SetApiName(v string) *DescribeApisByIpControlResponseApiInfosApiInfo {
	s.ApiName = &v
	return s
}

func (s *DescribeApisByIpControlResponseApiInfosApiInfo) SetDescription(v string) *DescribeApisByIpControlResponseApiInfosApiInfo {
	s.Description = &v
	return s
}

func (s *DescribeApisByIpControlResponseApiInfosApiInfo) SetVisibility(v string) *DescribeApisByIpControlResponseApiInfosApiInfo {
	s.Visibility = &v
	return s
}

func (s *DescribeApisByIpControlResponseApiInfosApiInfo) SetBoundTime(v string) *DescribeApisByIpControlResponseApiInfosApiInfo {
	s.BoundTime = &v
	return s
}

type DescribeApiIpControlsRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiIds        *string `json:"ApiIds,omitempty" xml:"ApiIds,omitempty"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeApiIpControlsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiIpControlsRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiIpControlsRequest) SetSecurityToken(v string) *DescribeApiIpControlsRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiIpControlsRequest) SetStageName(v string) *DescribeApiIpControlsRequest {
	s.StageName = &v
	return s
}

func (s *DescribeApiIpControlsRequest) SetGroupId(v string) *DescribeApiIpControlsRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiIpControlsRequest) SetApiIds(v string) *DescribeApiIpControlsRequest {
	s.ApiIds = &v
	return s
}

func (s *DescribeApiIpControlsRequest) SetPageNumber(v int) *DescribeApiIpControlsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeApiIpControlsRequest) SetPageSize(v int) *DescribeApiIpControlsRequest {
	s.PageSize = &v
	return s
}

type DescribeApiIpControlsResponse struct {
	RequestId     *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount    *int                                        `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize      *int                                        `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber    *int                                        `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	ApiIpControls *DescribeApiIpControlsResponseApiIpControls `json:"ApiIpControls,omitempty" xml:"ApiIpControls,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiIpControlsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiIpControlsResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiIpControlsResponse) SetRequestId(v string) *DescribeApiIpControlsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiIpControlsResponse) SetTotalCount(v int) *DescribeApiIpControlsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeApiIpControlsResponse) SetPageSize(v int) *DescribeApiIpControlsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeApiIpControlsResponse) SetPageNumber(v int) *DescribeApiIpControlsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeApiIpControlsResponse) SetApiIpControls(v *DescribeApiIpControlsResponseApiIpControls) *DescribeApiIpControlsResponse {
	s.ApiIpControls = v
	return s
}

type DescribeApiIpControlsResponseApiIpControls struct {
	ApiIpControlItem []*DescribeApiIpControlsResponseApiIpControlsApiIpControlItem `json:"ApiIpControlItem,omitempty" xml:"ApiIpControlItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiIpControlsResponseApiIpControls) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiIpControlsResponseApiIpControls) GoString() string {
	return s.String()
}

func (s *DescribeApiIpControlsResponseApiIpControls) SetApiIpControlItem(v []*DescribeApiIpControlsResponseApiIpControlsApiIpControlItem) *DescribeApiIpControlsResponseApiIpControls {
	s.ApiIpControlItem = v
	return s
}

type DescribeApiIpControlsResponseApiIpControlsApiIpControlItem struct {
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName       *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	IpControlId   *string `json:"IpControlId,omitempty" xml:"IpControlId,omitempty" require:"true"`
	IpControlName *string `json:"IpControlName,omitempty" xml:"IpControlName,omitempty" require:"true"`
	BoundTime     *string `json:"BoundTime,omitempty" xml:"BoundTime,omitempty" require:"true"`
}

func (s DescribeApiIpControlsResponseApiIpControlsApiIpControlItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiIpControlsResponseApiIpControlsApiIpControlItem) GoString() string {
	return s.String()
}

func (s *DescribeApiIpControlsResponseApiIpControlsApiIpControlItem) SetApiId(v string) *DescribeApiIpControlsResponseApiIpControlsApiIpControlItem {
	s.ApiId = &v
	return s
}

func (s *DescribeApiIpControlsResponseApiIpControlsApiIpControlItem) SetApiName(v string) *DescribeApiIpControlsResponseApiIpControlsApiIpControlItem {
	s.ApiName = &v
	return s
}

func (s *DescribeApiIpControlsResponseApiIpControlsApiIpControlItem) SetIpControlId(v string) *DescribeApiIpControlsResponseApiIpControlsApiIpControlItem {
	s.IpControlId = &v
	return s
}

func (s *DescribeApiIpControlsResponseApiIpControlsApiIpControlItem) SetIpControlName(v string) *DescribeApiIpControlsResponseApiIpControlsApiIpControlItem {
	s.IpControlName = &v
	return s
}

func (s *DescribeApiIpControlsResponseApiIpControlsApiIpControlItem) SetBoundTime(v string) *DescribeApiIpControlsResponseApiIpControlsApiIpControlItem {
	s.BoundTime = &v
	return s
}

type DeleteIpControlRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	IpControlId   *string `json:"IpControlId,omitempty" xml:"IpControlId,omitempty" require:"true"`
}

func (s DeleteIpControlRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteIpControlRequest) GoString() string {
	return s.String()
}

func (s *DeleteIpControlRequest) SetSecurityToken(v string) *DeleteIpControlRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteIpControlRequest) SetIpControlId(v string) *DeleteIpControlRequest {
	s.IpControlId = &v
	return s
}

type DeleteIpControlResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteIpControlResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteIpControlResponse) GoString() string {
	return s.String()
}

func (s *DeleteIpControlResponse) SetRequestId(v string) *DeleteIpControlResponse {
	s.RequestId = &v
	return s
}

type CreateIpControlRequest struct {
	SecurityToken    *string                                   `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	IpControlName    *string                                   `json:"IpControlName,omitempty" xml:"IpControlName,omitempty" require:"true"`
	IpControlType    *string                                   `json:"IpControlType,omitempty" xml:"IpControlType,omitempty" require:"true"`
	Description      *string                                   `json:"Description,omitempty" xml:"Description,omitempty"`
	IpControlPolicys []*CreateIpControlRequestIpControlPolicys `json:"IpControlPolicys,omitempty" xml:"IpControlPolicys,omitempty" type:"Repeated"`
}

func (s CreateIpControlRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateIpControlRequest) GoString() string {
	return s.String()
}

func (s *CreateIpControlRequest) SetSecurityToken(v string) *CreateIpControlRequest {
	s.SecurityToken = &v
	return s
}

func (s *CreateIpControlRequest) SetIpControlName(v string) *CreateIpControlRequest {
	s.IpControlName = &v
	return s
}

func (s *CreateIpControlRequest) SetIpControlType(v string) *CreateIpControlRequest {
	s.IpControlType = &v
	return s
}

func (s *CreateIpControlRequest) SetDescription(v string) *CreateIpControlRequest {
	s.Description = &v
	return s
}

func (s *CreateIpControlRequest) SetIpControlPolicys(v []*CreateIpControlRequestIpControlPolicys) *CreateIpControlRequest {
	s.IpControlPolicys = v
	return s
}

type CreateIpControlRequestIpControlPolicys struct {
	AppId  *string `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	CidrIp *string `json:"CidrIp,omitempty" xml:"CidrIp,omitempty" require:"true"`
}

func (s CreateIpControlRequestIpControlPolicys) String() string {
	return tea.Prettify(s)
}

func (s CreateIpControlRequestIpControlPolicys) GoString() string {
	return s.String()
}

func (s *CreateIpControlRequestIpControlPolicys) SetAppId(v string) *CreateIpControlRequestIpControlPolicys {
	s.AppId = &v
	return s
}

func (s *CreateIpControlRequestIpControlPolicys) SetCidrIp(v string) *CreateIpControlRequestIpControlPolicys {
	s.CidrIp = &v
	return s
}

type CreateIpControlResponse struct {
	RequestId   *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	IpControlId *string `json:"IpControlId,omitempty" xml:"IpControlId,omitempty" require:"true"`
}

func (s CreateIpControlResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateIpControlResponse) GoString() string {
	return s.String()
}

func (s *CreateIpControlResponse) SetRequestId(v string) *CreateIpControlResponse {
	s.RequestId = &v
	return s
}

func (s *CreateIpControlResponse) SetIpControlId(v string) *CreateIpControlResponse {
	s.IpControlId = &v
	return s
}

type AddIpControlPolicyItemRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	IpControlId   *string `json:"IpControlId,omitempty" xml:"IpControlId,omitempty" require:"true"`
	AppId         *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
	CidrIp        *string `json:"CidrIp,omitempty" xml:"CidrIp,omitempty" require:"true"`
}

func (s AddIpControlPolicyItemRequest) String() string {
	return tea.Prettify(s)
}

func (s AddIpControlPolicyItemRequest) GoString() string {
	return s.String()
}

func (s *AddIpControlPolicyItemRequest) SetSecurityToken(v string) *AddIpControlPolicyItemRequest {
	s.SecurityToken = &v
	return s
}

func (s *AddIpControlPolicyItemRequest) SetIpControlId(v string) *AddIpControlPolicyItemRequest {
	s.IpControlId = &v
	return s
}

func (s *AddIpControlPolicyItemRequest) SetAppId(v string) *AddIpControlPolicyItemRequest {
	s.AppId = &v
	return s
}

func (s *AddIpControlPolicyItemRequest) SetCidrIp(v string) *AddIpControlPolicyItemRequest {
	s.CidrIp = &v
	return s
}

type AddIpControlPolicyItemResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PolicyItemId *string `json:"PolicyItemId,omitempty" xml:"PolicyItemId,omitempty" require:"true"`
}

func (s AddIpControlPolicyItemResponse) String() string {
	return tea.Prettify(s)
}

func (s AddIpControlPolicyItemResponse) GoString() string {
	return s.String()
}

func (s *AddIpControlPolicyItemResponse) SetRequestId(v string) *AddIpControlPolicyItemResponse {
	s.RequestId = &v
	return s
}

func (s *AddIpControlPolicyItemResponse) SetPolicyItemId(v string) *AddIpControlPolicyItemResponse {
	s.PolicyItemId = &v
	return s
}

type ModifyLogConfigRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	SlsProject    *string `json:"SlsProject,omitempty" xml:"SlsProject,omitempty" require:"true"`
	SlsLogStore   *string `json:"SlsLogStore,omitempty" xml:"SlsLogStore,omitempty" require:"true"`
	LogType       *string `json:"LogType,omitempty" xml:"LogType,omitempty"`
}

func (s ModifyLogConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyLogConfigRequest) GoString() string {
	return s.String()
}

func (s *ModifyLogConfigRequest) SetSecurityToken(v string) *ModifyLogConfigRequest {
	s.SecurityToken = &v
	return s
}

func (s *ModifyLogConfigRequest) SetSlsProject(v string) *ModifyLogConfigRequest {
	s.SlsProject = &v
	return s
}

func (s *ModifyLogConfigRequest) SetSlsLogStore(v string) *ModifyLogConfigRequest {
	s.SlsLogStore = &v
	return s
}

func (s *ModifyLogConfigRequest) SetLogType(v string) *ModifyLogConfigRequest {
	s.LogType = &v
	return s
}

type ModifyLogConfigResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyLogConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyLogConfigResponse) GoString() string {
	return s.String()
}

func (s *ModifyLogConfigResponse) SetRequestId(v string) *ModifyLogConfigResponse {
	s.RequestId = &v
	return s
}

type DescribeLogConfigRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	LogType       *string `json:"LogType,omitempty" xml:"LogType,omitempty"`
}

func (s DescribeLogConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeLogConfigRequest) GoString() string {
	return s.String()
}

func (s *DescribeLogConfigRequest) SetSecurityToken(v string) *DescribeLogConfigRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeLogConfigRequest) SetLogType(v string) *DescribeLogConfigRequest {
	s.LogType = &v
	return s
}

type DescribeLogConfigResponse struct {
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	LogInfos  *DescribeLogConfigResponseLogInfos `json:"LogInfos,omitempty" xml:"LogInfos,omitempty" require:"true" type:"Struct"`
}

func (s DescribeLogConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeLogConfigResponse) GoString() string {
	return s.String()
}

func (s *DescribeLogConfigResponse) SetRequestId(v string) *DescribeLogConfigResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeLogConfigResponse) SetLogInfos(v *DescribeLogConfigResponseLogInfos) *DescribeLogConfigResponse {
	s.LogInfos = v
	return s
}

type DescribeLogConfigResponseLogInfos struct {
	LogInfo []*DescribeLogConfigResponseLogInfosLogInfo `json:"LogInfo,omitempty" xml:"LogInfo,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeLogConfigResponseLogInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeLogConfigResponseLogInfos) GoString() string {
	return s.String()
}

func (s *DescribeLogConfigResponseLogInfos) SetLogInfo(v []*DescribeLogConfigResponseLogInfosLogInfo) *DescribeLogConfigResponseLogInfos {
	s.LogInfo = v
	return s
}

type DescribeLogConfigResponseLogInfosLogInfo struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	SlsProject  *string `json:"SlsProject,omitempty" xml:"SlsProject,omitempty" require:"true"`
	SlsLogStore *string `json:"SlsLogStore,omitempty" xml:"SlsLogStore,omitempty" require:"true"`
	LogType     *string `json:"LogType,omitempty" xml:"LogType,omitempty" require:"true"`
}

func (s DescribeLogConfigResponseLogInfosLogInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeLogConfigResponseLogInfosLogInfo) GoString() string {
	return s.String()
}

func (s *DescribeLogConfigResponseLogInfosLogInfo) SetRegionId(v string) *DescribeLogConfigResponseLogInfosLogInfo {
	s.RegionId = &v
	return s
}

func (s *DescribeLogConfigResponseLogInfosLogInfo) SetSlsProject(v string) *DescribeLogConfigResponseLogInfosLogInfo {
	s.SlsProject = &v
	return s
}

func (s *DescribeLogConfigResponseLogInfosLogInfo) SetSlsLogStore(v string) *DescribeLogConfigResponseLogInfosLogInfo {
	s.SlsLogStore = &v
	return s
}

func (s *DescribeLogConfigResponseLogInfosLogInfo) SetLogType(v string) *DescribeLogConfigResponseLogInfosLogInfo {
	s.LogType = &v
	return s
}

type DeleteLogConfigRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	LogType       *string `json:"LogType,omitempty" xml:"LogType,omitempty"`
}

func (s DeleteLogConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteLogConfigRequest) GoString() string {
	return s.String()
}

func (s *DeleteLogConfigRequest) SetSecurityToken(v string) *DeleteLogConfigRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteLogConfigRequest) SetLogType(v string) *DeleteLogConfigRequest {
	s.LogType = &v
	return s
}

type DeleteLogConfigResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteLogConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteLogConfigResponse) GoString() string {
	return s.String()
}

func (s *DeleteLogConfigResponse) SetRequestId(v string) *DeleteLogConfigResponse {
	s.RequestId = &v
	return s
}

type CreateLogConfigRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	SlsProject    *string `json:"SlsProject,omitempty" xml:"SlsProject,omitempty" require:"true"`
	SlsLogStore   *string `json:"SlsLogStore,omitempty" xml:"SlsLogStore,omitempty" require:"true"`
	LogType       *string `json:"LogType,omitempty" xml:"LogType,omitempty"`
}

func (s CreateLogConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateLogConfigRequest) GoString() string {
	return s.String()
}

func (s *CreateLogConfigRequest) SetSecurityToken(v string) *CreateLogConfigRequest {
	s.SecurityToken = &v
	return s
}

func (s *CreateLogConfigRequest) SetSlsProject(v string) *CreateLogConfigRequest {
	s.SlsProject = &v
	return s
}

func (s *CreateLogConfigRequest) SetSlsLogStore(v string) *CreateLogConfigRequest {
	s.SlsLogStore = &v
	return s
}

func (s *CreateLogConfigRequest) SetLogType(v string) *CreateLogConfigRequest {
	s.LogType = &v
	return s
}

type CreateLogConfigResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CreateLogConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateLogConfigResponse) GoString() string {
	return s.String()
}

func (s *CreateLogConfigResponse) SetRequestId(v string) *CreateLogConfigResponse {
	s.RequestId = &v
	return s
}

type SetDomainWebSocketStatusRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	DomainName    *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	ActionValue   *string `json:"ActionValue,omitempty" xml:"ActionValue,omitempty" require:"true"`
}

func (s SetDomainWebSocketStatusRequest) String() string {
	return tea.Prettify(s)
}

func (s SetDomainWebSocketStatusRequest) GoString() string {
	return s.String()
}

func (s *SetDomainWebSocketStatusRequest) SetSecurityToken(v string) *SetDomainWebSocketStatusRequest {
	s.SecurityToken = &v
	return s
}

func (s *SetDomainWebSocketStatusRequest) SetGroupId(v string) *SetDomainWebSocketStatusRequest {
	s.GroupId = &v
	return s
}

func (s *SetDomainWebSocketStatusRequest) SetDomainName(v string) *SetDomainWebSocketStatusRequest {
	s.DomainName = &v
	return s
}

func (s *SetDomainWebSocketStatusRequest) SetActionValue(v string) *SetDomainWebSocketStatusRequest {
	s.ActionValue = &v
	return s
}

type SetDomainWebSocketStatusResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetDomainWebSocketStatusResponse) String() string {
	return tea.Prettify(s)
}

func (s SetDomainWebSocketStatusResponse) GoString() string {
	return s.String()
}

func (s *SetDomainWebSocketStatusResponse) SetRequestId(v string) *SetDomainWebSocketStatusResponse {
	s.RequestId = &v
	return s
}

type RemoveVpcAccessRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	VpcId         *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	InstanceId    *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	Port          *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
}

func (s RemoveVpcAccessRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveVpcAccessRequest) GoString() string {
	return s.String()
}

func (s *RemoveVpcAccessRequest) SetSecurityToken(v string) *RemoveVpcAccessRequest {
	s.SecurityToken = &v
	return s
}

func (s *RemoveVpcAccessRequest) SetVpcId(v string) *RemoveVpcAccessRequest {
	s.VpcId = &v
	return s
}

func (s *RemoveVpcAccessRequest) SetInstanceId(v string) *RemoveVpcAccessRequest {
	s.InstanceId = &v
	return s
}

func (s *RemoveVpcAccessRequest) SetPort(v int) *RemoveVpcAccessRequest {
	s.Port = &v
	return s
}

type RemoveVpcAccessResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s RemoveVpcAccessResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveVpcAccessResponse) GoString() string {
	return s.String()
}

func (s *RemoveVpcAccessResponse) SetRequestId(v string) *RemoveVpcAccessResponse {
	s.RequestId = &v
	return s
}

type SetVpcAccessRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	Name          *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	VpcId         *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	InstanceId    *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	Port          *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
}

func (s SetVpcAccessRequest) String() string {
	return tea.Prettify(s)
}

func (s SetVpcAccessRequest) GoString() string {
	return s.String()
}

func (s *SetVpcAccessRequest) SetSecurityToken(v string) *SetVpcAccessRequest {
	s.SecurityToken = &v
	return s
}

func (s *SetVpcAccessRequest) SetName(v string) *SetVpcAccessRequest {
	s.Name = &v
	return s
}

func (s *SetVpcAccessRequest) SetVpcId(v string) *SetVpcAccessRequest {
	s.VpcId = &v
	return s
}

func (s *SetVpcAccessRequest) SetInstanceId(v string) *SetVpcAccessRequest {
	s.InstanceId = &v
	return s
}

func (s *SetVpcAccessRequest) SetPort(v int) *SetVpcAccessRequest {
	s.Port = &v
	return s
}

type SetVpcAccessResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetVpcAccessResponse) String() string {
	return tea.Prettify(s)
}

func (s SetVpcAccessResponse) GoString() string {
	return s.String()
}

func (s *SetVpcAccessResponse) SetRequestId(v string) *SetVpcAccessResponse {
	s.RequestId = &v
	return s
}

type DescribeVpcAccessesRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	Name          *string `json:"Name,omitempty" xml:"Name,omitempty"`
}

func (s DescribeVpcAccessesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVpcAccessesRequest) GoString() string {
	return s.String()
}

func (s *DescribeVpcAccessesRequest) SetSecurityToken(v string) *DescribeVpcAccessesRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeVpcAccessesRequest) SetPageNumber(v int) *DescribeVpcAccessesRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeVpcAccessesRequest) SetPageSize(v int) *DescribeVpcAccessesRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeVpcAccessesRequest) SetName(v string) *DescribeVpcAccessesRequest {
	s.Name = &v
	return s
}

type DescribeVpcAccessesResponse struct {
	RequestId           *string                                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount          *int                                            `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize            *int                                            `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber          *int                                            `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	VpcAccessAttributes *DescribeVpcAccessesResponseVpcAccessAttributes `json:"VpcAccessAttributes,omitempty" xml:"VpcAccessAttributes,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVpcAccessesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVpcAccessesResponse) GoString() string {
	return s.String()
}

func (s *DescribeVpcAccessesResponse) SetRequestId(v string) *DescribeVpcAccessesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVpcAccessesResponse) SetTotalCount(v int) *DescribeVpcAccessesResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeVpcAccessesResponse) SetPageSize(v int) *DescribeVpcAccessesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeVpcAccessesResponse) SetPageNumber(v int) *DescribeVpcAccessesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeVpcAccessesResponse) SetVpcAccessAttributes(v *DescribeVpcAccessesResponseVpcAccessAttributes) *DescribeVpcAccessesResponse {
	s.VpcAccessAttributes = v
	return s
}

type DescribeVpcAccessesResponseVpcAccessAttributes struct {
	VpcAccessAttribute []*DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute `json:"VpcAccessAttribute,omitempty" xml:"VpcAccessAttribute,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVpcAccessesResponseVpcAccessAttributes) String() string {
	return tea.Prettify(s)
}

func (s DescribeVpcAccessesResponseVpcAccessAttributes) GoString() string {
	return s.String()
}

func (s *DescribeVpcAccessesResponseVpcAccessAttributes) SetVpcAccessAttribute(v []*DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute) *DescribeVpcAccessesResponseVpcAccessAttributes {
	s.VpcAccessAttribute = v
	return s
}

type DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute struct {
	VpcId       *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	InstanceId  *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	CreatedTime *string `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	Port        *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Name        *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute) String() string {
	return tea.Prettify(s)
}

func (s DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute) GoString() string {
	return s.String()
}

func (s *DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute) SetVpcId(v string) *DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute {
	s.VpcId = &v
	return s
}

func (s *DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute) SetInstanceId(v string) *DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute {
	s.InstanceId = &v
	return s
}

func (s *DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute) SetCreatedTime(v string) *DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute {
	s.CreatedTime = &v
	return s
}

func (s *DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute) SetPort(v int) *DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute {
	s.Port = &v
	return s
}

func (s *DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute) SetRegionId(v string) *DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute {
	s.RegionId = &v
	return s
}

func (s *DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute) SetName(v string) *DescribeVpcAccessesResponseVpcAccessAttributesVpcAccessAttribute {
	s.Name = &v
	return s
}

type ReactivateDomainRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	DomainName    *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s ReactivateDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s ReactivateDomainRequest) GoString() string {
	return s.String()
}

func (s *ReactivateDomainRequest) SetSecurityToken(v string) *ReactivateDomainRequest {
	s.SecurityToken = &v
	return s
}

func (s *ReactivateDomainRequest) SetGroupId(v string) *ReactivateDomainRequest {
	s.GroupId = &v
	return s
}

func (s *ReactivateDomainRequest) SetDomainName(v string) *ReactivateDomainRequest {
	s.DomainName = &v
	return s
}

type ReactivateDomainResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ReactivateDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s ReactivateDomainResponse) GoString() string {
	return s.String()
}

func (s *ReactivateDomainResponse) SetRequestId(v string) *ReactivateDomainResponse {
	s.RequestId = &v
	return s
}

type DescribeApiHistoriesRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty"`
	ApiName       *string `json:"ApiName,omitempty" xml:"ApiName,omitempty"`
	PageSize      *string `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber    *string `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeApiHistoriesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoriesRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoriesRequest) SetSecurityToken(v string) *DescribeApiHistoriesRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiHistoriesRequest) SetGroupId(v string) *DescribeApiHistoriesRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiHistoriesRequest) SetStageName(v string) *DescribeApiHistoriesRequest {
	s.StageName = &v
	return s
}

func (s *DescribeApiHistoriesRequest) SetApiId(v string) *DescribeApiHistoriesRequest {
	s.ApiId = &v
	return s
}

func (s *DescribeApiHistoriesRequest) SetApiName(v string) *DescribeApiHistoriesRequest {
	s.ApiName = &v
	return s
}

func (s *DescribeApiHistoriesRequest) SetPageSize(v string) *DescribeApiHistoriesRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeApiHistoriesRequest) SetPageNumber(v string) *DescribeApiHistoriesRequest {
	s.PageNumber = &v
	return s
}

type DescribeApiHistoriesResponse struct {
	RequestId   *string                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount  *int                                     `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize    *int                                     `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber  *int                                     `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	ApiHisItems *DescribeApiHistoriesResponseApiHisItems `json:"ApiHisItems,omitempty" xml:"ApiHisItems,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiHistoriesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoriesResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoriesResponse) SetRequestId(v string) *DescribeApiHistoriesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiHistoriesResponse) SetTotalCount(v int) *DescribeApiHistoriesResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeApiHistoriesResponse) SetPageSize(v int) *DescribeApiHistoriesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeApiHistoriesResponse) SetPageNumber(v int) *DescribeApiHistoriesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeApiHistoriesResponse) SetApiHisItems(v *DescribeApiHistoriesResponseApiHisItems) *DescribeApiHistoriesResponse {
	s.ApiHisItems = v
	return s
}

type DescribeApiHistoriesResponseApiHisItems struct {
	ApiHisItem []*DescribeApiHistoriesResponseApiHisItemsApiHisItem `json:"ApiHisItem,omitempty" xml:"ApiHisItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiHistoriesResponseApiHisItems) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoriesResponseApiHisItems) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoriesResponseApiHisItems) SetApiHisItem(v []*DescribeApiHistoriesResponseApiHisItemsApiHisItem) *DescribeApiHistoriesResponseApiHisItems {
	s.ApiHisItem = v
	return s
}

type DescribeApiHistoriesResponseApiHisItemsApiHisItem struct {
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ApiId          *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName        *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	GroupId        *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName      *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	StageName      *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	HistoryVersion *string `json:"HistoryVersion,omitempty" xml:"HistoryVersion,omitempty" require:"true"`
	Status         *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Description    *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	DeployedTime   *string `json:"DeployedTime,omitempty" xml:"DeployedTime,omitempty" require:"true"`
}

func (s DescribeApiHistoriesResponseApiHisItemsApiHisItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoriesResponseApiHisItemsApiHisItem) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoriesResponseApiHisItemsApiHisItem) SetRegionId(v string) *DescribeApiHistoriesResponseApiHisItemsApiHisItem {
	s.RegionId = &v
	return s
}

func (s *DescribeApiHistoriesResponseApiHisItemsApiHisItem) SetApiId(v string) *DescribeApiHistoriesResponseApiHisItemsApiHisItem {
	s.ApiId = &v
	return s
}

func (s *DescribeApiHistoriesResponseApiHisItemsApiHisItem) SetApiName(v string) *DescribeApiHistoriesResponseApiHisItemsApiHisItem {
	s.ApiName = &v
	return s
}

func (s *DescribeApiHistoriesResponseApiHisItemsApiHisItem) SetGroupId(v string) *DescribeApiHistoriesResponseApiHisItemsApiHisItem {
	s.GroupId = &v
	return s
}

func (s *DescribeApiHistoriesResponseApiHisItemsApiHisItem) SetGroupName(v string) *DescribeApiHistoriesResponseApiHisItemsApiHisItem {
	s.GroupName = &v
	return s
}

func (s *DescribeApiHistoriesResponseApiHisItemsApiHisItem) SetStageName(v string) *DescribeApiHistoriesResponseApiHisItemsApiHisItem {
	s.StageName = &v
	return s
}

func (s *DescribeApiHistoriesResponseApiHisItemsApiHisItem) SetHistoryVersion(v string) *DescribeApiHistoriesResponseApiHisItemsApiHisItem {
	s.HistoryVersion = &v
	return s
}

func (s *DescribeApiHistoriesResponseApiHisItemsApiHisItem) SetStatus(v string) *DescribeApiHistoriesResponseApiHisItemsApiHisItem {
	s.Status = &v
	return s
}

func (s *DescribeApiHistoriesResponseApiHisItemsApiHisItem) SetDescription(v string) *DescribeApiHistoriesResponseApiHisItemsApiHisItem {
	s.Description = &v
	return s
}

func (s *DescribeApiHistoriesResponseApiHisItemsApiHisItem) SetDeployedTime(v string) *DescribeApiHistoriesResponseApiHisItemsApiHisItem {
	s.DeployedTime = &v
	return s
}

type SdkGenerateByGroupRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	Language      *string `json:"Language,omitempty" xml:"Language,omitempty" require:"true"`
}

func (s SdkGenerateByGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s SdkGenerateByGroupRequest) GoString() string {
	return s.String()
}

func (s *SdkGenerateByGroupRequest) SetSecurityToken(v string) *SdkGenerateByGroupRequest {
	s.SecurityToken = &v
	return s
}

func (s *SdkGenerateByGroupRequest) SetGroupId(v string) *SdkGenerateByGroupRequest {
	s.GroupId = &v
	return s
}

func (s *SdkGenerateByGroupRequest) SetLanguage(v string) *SdkGenerateByGroupRequest {
	s.Language = &v
	return s
}

type SdkGenerateByGroupResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DownloadLink *string `json:"DownloadLink,omitempty" xml:"DownloadLink,omitempty" require:"true"`
}

func (s SdkGenerateByGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s SdkGenerateByGroupResponse) GoString() string {
	return s.String()
}

func (s *SdkGenerateByGroupResponse) SetRequestId(v string) *SdkGenerateByGroupResponse {
	s.RequestId = &v
	return s
}

func (s *SdkGenerateByGroupResponse) SetDownloadLink(v string) *SdkGenerateByGroupResponse {
	s.DownloadLink = &v
	return s
}

type SdkGenerateByAppRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	AppId         *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	Language      *string `json:"Language,omitempty" xml:"Language,omitempty" require:"true"`
}

func (s SdkGenerateByAppRequest) String() string {
	return tea.Prettify(s)
}

func (s SdkGenerateByAppRequest) GoString() string {
	return s.String()
}

func (s *SdkGenerateByAppRequest) SetSecurityToken(v string) *SdkGenerateByAppRequest {
	s.SecurityToken = &v
	return s
}

func (s *SdkGenerateByAppRequest) SetAppId(v int64) *SdkGenerateByAppRequest {
	s.AppId = &v
	return s
}

func (s *SdkGenerateByAppRequest) SetLanguage(v string) *SdkGenerateByAppRequest {
	s.Language = &v
	return s
}

type SdkGenerateByAppResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DownloadLink *string `json:"DownloadLink,omitempty" xml:"DownloadLink,omitempty" require:"true"`
}

func (s SdkGenerateByAppResponse) String() string {
	return tea.Prettify(s)
}

func (s SdkGenerateByAppResponse) GoString() string {
	return s.String()
}

func (s *SdkGenerateByAppResponse) SetRequestId(v string) *SdkGenerateByAppResponse {
	s.RequestId = &v
	return s
}

func (s *SdkGenerateByAppResponse) SetDownloadLink(v string) *SdkGenerateByAppResponse {
	s.DownloadLink = &v
	return s
}

type DescribeApisByAppRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	AppId         *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	ApiUid        *string `json:"ApiUid,omitempty" xml:"ApiUid,omitempty"`
}

func (s DescribeApisByAppRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisByAppRequest) GoString() string {
	return s.String()
}

func (s *DescribeApisByAppRequest) SetSecurityToken(v string) *DescribeApisByAppRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApisByAppRequest) SetAppId(v int64) *DescribeApisByAppRequest {
	s.AppId = &v
	return s
}

func (s *DescribeApisByAppRequest) SetPageNumber(v int) *DescribeApisByAppRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeApisByAppRequest) SetPageSize(v int) *DescribeApisByAppRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeApisByAppRequest) SetApiUid(v string) *DescribeApisByAppRequest {
	s.ApiUid = &v
	return s
}

type DescribeApisByAppResponse struct {
	RequestId           *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount          *int                                          `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize            *int                                          `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber          *int                                          `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	AppApiRelationInfos *DescribeApisByAppResponseAppApiRelationInfos `json:"AppApiRelationInfos,omitempty" xml:"AppApiRelationInfos,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApisByAppResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisByAppResponse) GoString() string {
	return s.String()
}

func (s *DescribeApisByAppResponse) SetRequestId(v string) *DescribeApisByAppResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApisByAppResponse) SetTotalCount(v int) *DescribeApisByAppResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeApisByAppResponse) SetPageSize(v int) *DescribeApisByAppResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeApisByAppResponse) SetPageNumber(v int) *DescribeApisByAppResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeApisByAppResponse) SetAppApiRelationInfos(v *DescribeApisByAppResponseAppApiRelationInfos) *DescribeApisByAppResponse {
	s.AppApiRelationInfos = v
	return s
}

type DescribeApisByAppResponseAppApiRelationInfos struct {
	AppApiRelationInfo []*DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo `json:"AppApiRelationInfo,omitempty" xml:"AppApiRelationInfo,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApisByAppResponseAppApiRelationInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisByAppResponseAppApiRelationInfos) GoString() string {
	return s.String()
}

func (s *DescribeApisByAppResponseAppApiRelationInfos) SetAppApiRelationInfo(v []*DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo) *DescribeApisByAppResponseAppApiRelationInfos {
	s.AppApiRelationInfo = v
	return s
}

type DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo struct {
	RegionId            *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	GroupId             *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName           *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	StageName           *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	Operator            *string `json:"Operator,omitempty" xml:"Operator,omitempty" require:"true"`
	ApiId               *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName             *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	AuthorizationSource *string `json:"AuthorizationSource,omitempty" xml:"AuthorizationSource,omitempty" require:"true"`
	Description         *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreatedTime         *string `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	AuthVaildTime       *string `json:"AuthVaildTime,omitempty" xml:"AuthVaildTime,omitempty" require:"true"`
}

func (s DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo) GoString() string {
	return s.String()
}

func (s *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo) SetRegionId(v string) *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo {
	s.RegionId = &v
	return s
}

func (s *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo) SetGroupId(v string) *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo {
	s.GroupId = &v
	return s
}

func (s *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo) SetGroupName(v string) *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo {
	s.GroupName = &v
	return s
}

func (s *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo) SetStageName(v string) *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo {
	s.StageName = &v
	return s
}

func (s *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo) SetOperator(v string) *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo {
	s.Operator = &v
	return s
}

func (s *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo) SetApiId(v string) *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo {
	s.ApiId = &v
	return s
}

func (s *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo) SetApiName(v string) *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo {
	s.ApiName = &v
	return s
}

func (s *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo) SetAuthorizationSource(v string) *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo {
	s.AuthorizationSource = &v
	return s
}

func (s *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo) SetDescription(v string) *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo {
	s.Description = &v
	return s
}

func (s *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo) SetCreatedTime(v string) *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo {
	s.CreatedTime = &v
	return s
}

func (s *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo) SetAuthVaildTime(v string) *DescribeApisByAppResponseAppApiRelationInfosAppApiRelationInfo {
	s.AuthVaildTime = &v
	return s
}

type DescribeApiStageRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	StageId       *string `json:"StageId,omitempty" xml:"StageId,omitempty" require:"true"`
}

func (s DescribeApiStageRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiStageRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiStageRequest) SetSecurityToken(v string) *DescribeApiStageRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiStageRequest) SetGroupId(v string) *DescribeApiStageRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiStageRequest) SetStageId(v string) *DescribeApiStageRequest {
	s.StageId = &v
	return s
}

type DescribeApiStageResponse struct {
	RequestId    *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	GroupId      *string                            `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	StageId      *string                            `json:"StageId,omitempty" xml:"StageId,omitempty" require:"true"`
	StageName    *string                            `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	Description  *string                            `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreatedTime  *string                            `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	ModifiedTime *string                            `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	Variables    *DescribeApiStageResponseVariables `json:"Variables,omitempty" xml:"Variables,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiStageResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiStageResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiStageResponse) SetRequestId(v string) *DescribeApiStageResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiStageResponse) SetGroupId(v string) *DescribeApiStageResponse {
	s.GroupId = &v
	return s
}

func (s *DescribeApiStageResponse) SetStageId(v string) *DescribeApiStageResponse {
	s.StageId = &v
	return s
}

func (s *DescribeApiStageResponse) SetStageName(v string) *DescribeApiStageResponse {
	s.StageName = &v
	return s
}

func (s *DescribeApiStageResponse) SetDescription(v string) *DescribeApiStageResponse {
	s.Description = &v
	return s
}

func (s *DescribeApiStageResponse) SetCreatedTime(v string) *DescribeApiStageResponse {
	s.CreatedTime = &v
	return s
}

func (s *DescribeApiStageResponse) SetModifiedTime(v string) *DescribeApiStageResponse {
	s.ModifiedTime = &v
	return s
}

func (s *DescribeApiStageResponse) SetVariables(v *DescribeApiStageResponseVariables) *DescribeApiStageResponse {
	s.Variables = v
	return s
}

type DescribeApiStageResponseVariables struct {
	VariableItem []*DescribeApiStageResponseVariablesVariableItem `json:"VariableItem,omitempty" xml:"VariableItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiStageResponseVariables) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiStageResponseVariables) GoString() string {
	return s.String()
}

func (s *DescribeApiStageResponseVariables) SetVariableItem(v []*DescribeApiStageResponseVariablesVariableItem) *DescribeApiStageResponseVariables {
	s.VariableItem = v
	return s
}

type DescribeApiStageResponseVariablesVariableItem struct {
	VariableName    *string                                                       `json:"VariableName,omitempty" xml:"VariableName,omitempty" require:"true"`
	VariableValue   *string                                                       `json:"VariableValue,omitempty" xml:"VariableValue,omitempty" require:"true"`
	SupportRoute    *bool                                                         `json:"SupportRoute,omitempty" xml:"SupportRoute,omitempty" require:"true"`
	StageRouteModel *DescribeApiStageResponseVariablesVariableItemStageRouteModel `json:"StageRouteModel,omitempty" xml:"StageRouteModel,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiStageResponseVariablesVariableItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiStageResponseVariablesVariableItem) GoString() string {
	return s.String()
}

func (s *DescribeApiStageResponseVariablesVariableItem) SetVariableName(v string) *DescribeApiStageResponseVariablesVariableItem {
	s.VariableName = &v
	return s
}

func (s *DescribeApiStageResponseVariablesVariableItem) SetVariableValue(v string) *DescribeApiStageResponseVariablesVariableItem {
	s.VariableValue = &v
	return s
}

func (s *DescribeApiStageResponseVariablesVariableItem) SetSupportRoute(v bool) *DescribeApiStageResponseVariablesVariableItem {
	s.SupportRoute = &v
	return s
}

func (s *DescribeApiStageResponseVariablesVariableItem) SetStageRouteModel(v *DescribeApiStageResponseVariablesVariableItemStageRouteModel) *DescribeApiStageResponseVariablesVariableItem {
	s.StageRouteModel = v
	return s
}

type DescribeApiStageResponseVariablesVariableItemStageRouteModel struct {
	ParameterCatalog     *string                                                                 `json:"ParameterCatalog,omitempty" xml:"ParameterCatalog,omitempty" require:"true"`
	ServiceParameterName *string                                                                 `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	Location             *string                                                                 `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	ParameterType        *string                                                                 `json:"ParameterType,omitempty" xml:"ParameterType,omitempty" require:"true"`
	RouteMatchSymbol     *string                                                                 `json:"RouteMatchSymbol,omitempty" xml:"RouteMatchSymbol,omitempty" require:"true"`
	RouteRules           *DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRules `json:"RouteRules,omitempty" xml:"RouteRules,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiStageResponseVariablesVariableItemStageRouteModel) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiStageResponseVariablesVariableItemStageRouteModel) GoString() string {
	return s.String()
}

func (s *DescribeApiStageResponseVariablesVariableItemStageRouteModel) SetParameterCatalog(v string) *DescribeApiStageResponseVariablesVariableItemStageRouteModel {
	s.ParameterCatalog = &v
	return s
}

func (s *DescribeApiStageResponseVariablesVariableItemStageRouteModel) SetServiceParameterName(v string) *DescribeApiStageResponseVariablesVariableItemStageRouteModel {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeApiStageResponseVariablesVariableItemStageRouteModel) SetLocation(v string) *DescribeApiStageResponseVariablesVariableItemStageRouteModel {
	s.Location = &v
	return s
}

func (s *DescribeApiStageResponseVariablesVariableItemStageRouteModel) SetParameterType(v string) *DescribeApiStageResponseVariablesVariableItemStageRouteModel {
	s.ParameterType = &v
	return s
}

func (s *DescribeApiStageResponseVariablesVariableItemStageRouteModel) SetRouteMatchSymbol(v string) *DescribeApiStageResponseVariablesVariableItemStageRouteModel {
	s.RouteMatchSymbol = &v
	return s
}

func (s *DescribeApiStageResponseVariablesVariableItemStageRouteModel) SetRouteRules(v *DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRules) *DescribeApiStageResponseVariablesVariableItemStageRouteModel {
	s.RouteRules = v
	return s
}

type DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRules struct {
	RouteRuleItem []*DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRulesRouteRuleItem `json:"RouteRuleItem,omitempty" xml:"RouteRuleItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRules) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRules) GoString() string {
	return s.String()
}

func (s *DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRules) SetRouteRuleItem(v []*DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRulesRouteRuleItem) *DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRules {
	s.RouteRuleItem = v
	return s
}

type DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRulesRouteRuleItem struct {
	MaxValue       *int64  `json:"MaxValue,omitempty" xml:"MaxValue,omitempty" require:"true"`
	MinValue       *int64  `json:"MinValue,omitempty" xml:"MinValue,omitempty" require:"true"`
	ConditionValue *string `json:"ConditionValue,omitempty" xml:"ConditionValue,omitempty" require:"true"`
	ResultValue    *string `json:"ResultValue,omitempty" xml:"ResultValue,omitempty" require:"true"`
}

func (s DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRulesRouteRuleItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRulesRouteRuleItem) GoString() string {
	return s.String()
}

func (s *DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRulesRouteRuleItem) SetMaxValue(v int64) *DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRulesRouteRuleItem {
	s.MaxValue = &v
	return s
}

func (s *DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRulesRouteRuleItem) SetMinValue(v int64) *DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRulesRouteRuleItem {
	s.MinValue = &v
	return s
}

func (s *DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRulesRouteRuleItem) SetConditionValue(v string) *DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRulesRouteRuleItem {
	s.ConditionValue = &v
	return s
}

func (s *DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRulesRouteRuleItem) SetResultValue(v string) *DescribeApiStageResponseVariablesVariableItemStageRouteModelRouteRulesRouteRuleItem {
	s.ResultValue = &v
	return s
}

type DeleteApiStageVariableRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	StageId       *string `json:"StageId,omitempty" xml:"StageId,omitempty" require:"true"`
	VariableName  *string `json:"VariableName,omitempty" xml:"VariableName,omitempty" require:"true"`
}

func (s DeleteApiStageVariableRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteApiStageVariableRequest) GoString() string {
	return s.String()
}

func (s *DeleteApiStageVariableRequest) SetSecurityToken(v string) *DeleteApiStageVariableRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteApiStageVariableRequest) SetGroupId(v string) *DeleteApiStageVariableRequest {
	s.GroupId = &v
	return s
}

func (s *DeleteApiStageVariableRequest) SetStageId(v string) *DeleteApiStageVariableRequest {
	s.StageId = &v
	return s
}

func (s *DeleteApiStageVariableRequest) SetVariableName(v string) *DeleteApiStageVariableRequest {
	s.VariableName = &v
	return s
}

type DeleteApiStageVariableResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteApiStageVariableResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteApiStageVariableResponse) GoString() string {
	return s.String()
}

func (s *DeleteApiStageVariableResponse) SetRequestId(v string) *DeleteApiStageVariableResponse {
	s.RequestId = &v
	return s
}

type CreateApiStageVariableRequest struct {
	SecurityToken   *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId         *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	StageId         *string `json:"StageId,omitempty" xml:"StageId,omitempty" require:"true"`
	VariableName    *string `json:"VariableName,omitempty" xml:"VariableName,omitempty" require:"true"`
	SupportRoute    *bool   `json:"SupportRoute,omitempty" xml:"SupportRoute,omitempty"`
	VariableValue   *string `json:"VariableValue,omitempty" xml:"VariableValue,omitempty"`
	StageRouteModel *string `json:"StageRouteModel,omitempty" xml:"StageRouteModel,omitempty"`
}

func (s CreateApiStageVariableRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateApiStageVariableRequest) GoString() string {
	return s.String()
}

func (s *CreateApiStageVariableRequest) SetSecurityToken(v string) *CreateApiStageVariableRequest {
	s.SecurityToken = &v
	return s
}

func (s *CreateApiStageVariableRequest) SetGroupId(v string) *CreateApiStageVariableRequest {
	s.GroupId = &v
	return s
}

func (s *CreateApiStageVariableRequest) SetStageId(v string) *CreateApiStageVariableRequest {
	s.StageId = &v
	return s
}

func (s *CreateApiStageVariableRequest) SetVariableName(v string) *CreateApiStageVariableRequest {
	s.VariableName = &v
	return s
}

func (s *CreateApiStageVariableRequest) SetSupportRoute(v bool) *CreateApiStageVariableRequest {
	s.SupportRoute = &v
	return s
}

func (s *CreateApiStageVariableRequest) SetVariableValue(v string) *CreateApiStageVariableRequest {
	s.VariableValue = &v
	return s
}

func (s *CreateApiStageVariableRequest) SetStageRouteModel(v string) *CreateApiStageVariableRequest {
	s.StageRouteModel = &v
	return s
}

type CreateApiStageVariableResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CreateApiStageVariableResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateApiStageVariableResponse) GoString() string {
	return s.String()
}

func (s *CreateApiStageVariableResponse) SetRequestId(v string) *CreateApiStageVariableResponse {
	s.RequestId = &v
	return s
}

type SwitchApiRequest struct {
	SecurityToken  *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId        *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	ApiId          *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	StageName      *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	Description    *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	HistoryVersion *string `json:"HistoryVersion,omitempty" xml:"HistoryVersion,omitempty" require:"true"`
}

func (s SwitchApiRequest) String() string {
	return tea.Prettify(s)
}

func (s SwitchApiRequest) GoString() string {
	return s.String()
}

func (s *SwitchApiRequest) SetSecurityToken(v string) *SwitchApiRequest {
	s.SecurityToken = &v
	return s
}

func (s *SwitchApiRequest) SetGroupId(v string) *SwitchApiRequest {
	s.GroupId = &v
	return s
}

func (s *SwitchApiRequest) SetApiId(v string) *SwitchApiRequest {
	s.ApiId = &v
	return s
}

func (s *SwitchApiRequest) SetStageName(v string) *SwitchApiRequest {
	s.StageName = &v
	return s
}

func (s *SwitchApiRequest) SetDescription(v string) *SwitchApiRequest {
	s.Description = &v
	return s
}

func (s *SwitchApiRequest) SetHistoryVersion(v string) *SwitchApiRequest {
	s.HistoryVersion = &v
	return s
}

type SwitchApiResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SwitchApiResponse) String() string {
	return tea.Prettify(s)
}

func (s SwitchApiResponse) GoString() string {
	return s.String()
}

func (s *SwitchApiResponse) SetRequestId(v string) *SwitchApiResponse {
	s.RequestId = &v
	return s
}

type SetTrafficControlApisRequest struct {
	SecurityToken    *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	TrafficControlId *string `json:"TrafficControlId,omitempty" xml:"TrafficControlId,omitempty" require:"true"`
	GroupId          *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiIds           *string `json:"ApiIds,omitempty" xml:"ApiIds,omitempty" require:"true"`
	StageName        *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
}

func (s SetTrafficControlApisRequest) String() string {
	return tea.Prettify(s)
}

func (s SetTrafficControlApisRequest) GoString() string {
	return s.String()
}

func (s *SetTrafficControlApisRequest) SetSecurityToken(v string) *SetTrafficControlApisRequest {
	s.SecurityToken = &v
	return s
}

func (s *SetTrafficControlApisRequest) SetTrafficControlId(v string) *SetTrafficControlApisRequest {
	s.TrafficControlId = &v
	return s
}

func (s *SetTrafficControlApisRequest) SetGroupId(v string) *SetTrafficControlApisRequest {
	s.GroupId = &v
	return s
}

func (s *SetTrafficControlApisRequest) SetApiIds(v string) *SetTrafficControlApisRequest {
	s.ApiIds = &v
	return s
}

func (s *SetTrafficControlApisRequest) SetStageName(v string) *SetTrafficControlApisRequest {
	s.StageName = &v
	return s
}

type SetTrafficControlApisResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetTrafficControlApisResponse) String() string {
	return tea.Prettify(s)
}

func (s SetTrafficControlApisResponse) GoString() string {
	return s.String()
}

func (s *SetTrafficControlApisResponse) SetRequestId(v string) *SetTrafficControlApisResponse {
	s.RequestId = &v
	return s
}

type SetSignatureApisRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	SignatureId   *string `json:"SignatureId,omitempty" xml:"SignatureId,omitempty" require:"true"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiIds        *string `json:"ApiIds,omitempty" xml:"ApiIds,omitempty" require:"true"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
}

func (s SetSignatureApisRequest) String() string {
	return tea.Prettify(s)
}

func (s SetSignatureApisRequest) GoString() string {
	return s.String()
}

func (s *SetSignatureApisRequest) SetSecurityToken(v string) *SetSignatureApisRequest {
	s.SecurityToken = &v
	return s
}

func (s *SetSignatureApisRequest) SetSignatureId(v string) *SetSignatureApisRequest {
	s.SignatureId = &v
	return s
}

func (s *SetSignatureApisRequest) SetGroupId(v string) *SetSignatureApisRequest {
	s.GroupId = &v
	return s
}

func (s *SetSignatureApisRequest) SetApiIds(v string) *SetSignatureApisRequest {
	s.ApiIds = &v
	return s
}

func (s *SetSignatureApisRequest) SetStageName(v string) *SetSignatureApisRequest {
	s.StageName = &v
	return s
}

type SetSignatureApisResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetSignatureApisResponse) String() string {
	return tea.Prettify(s)
}

func (s SetSignatureApisResponse) GoString() string {
	return s.String()
}

func (s *SetSignatureApisResponse) SetRequestId(v string) *SetSignatureApisResponse {
	s.RequestId = &v
	return s
}

type SetDomainCertificateRequest struct {
	SecurityToken         *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId               *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	DomainName            *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	CertificateName       *string `json:"CertificateName,omitempty" xml:"CertificateName,omitempty" require:"true"`
	CertificateBody       *string `json:"CertificateBody,omitempty" xml:"CertificateBody,omitempty"`
	CertificatePrivateKey *string `json:"CertificatePrivateKey,omitempty" xml:"CertificatePrivateKey,omitempty"`
	CaCertificateBody     *string `json:"CaCertificateBody,omitempty" xml:"CaCertificateBody,omitempty"`
}

func (s SetDomainCertificateRequest) String() string {
	return tea.Prettify(s)
}

func (s SetDomainCertificateRequest) GoString() string {
	return s.String()
}

func (s *SetDomainCertificateRequest) SetSecurityToken(v string) *SetDomainCertificateRequest {
	s.SecurityToken = &v
	return s
}

func (s *SetDomainCertificateRequest) SetGroupId(v string) *SetDomainCertificateRequest {
	s.GroupId = &v
	return s
}

func (s *SetDomainCertificateRequest) SetDomainName(v string) *SetDomainCertificateRequest {
	s.DomainName = &v
	return s
}

func (s *SetDomainCertificateRequest) SetCertificateName(v string) *SetDomainCertificateRequest {
	s.CertificateName = &v
	return s
}

func (s *SetDomainCertificateRequest) SetCertificateBody(v string) *SetDomainCertificateRequest {
	s.CertificateBody = &v
	return s
}

func (s *SetDomainCertificateRequest) SetCertificatePrivateKey(v string) *SetDomainCertificateRequest {
	s.CertificatePrivateKey = &v
	return s
}

func (s *SetDomainCertificateRequest) SetCaCertificateBody(v string) *SetDomainCertificateRequest {
	s.CaCertificateBody = &v
	return s
}

type SetDomainCertificateResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetDomainCertificateResponse) String() string {
	return tea.Prettify(s)
}

func (s SetDomainCertificateResponse) GoString() string {
	return s.String()
}

func (s *SetDomainCertificateResponse) SetRequestId(v string) *SetDomainCertificateResponse {
	s.RequestId = &v
	return s
}

type SetDomainRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	DomainName    *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	BindStageName *string `json:"BindStageName,omitempty" xml:"BindStageName,omitempty"`
	IsForce       *bool   `json:"IsForce,omitempty" xml:"IsForce,omitempty"`
}

func (s SetDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s SetDomainRequest) GoString() string {
	return s.String()
}

func (s *SetDomainRequest) SetSecurityToken(v string) *SetDomainRequest {
	s.SecurityToken = &v
	return s
}

func (s *SetDomainRequest) SetGroupId(v string) *SetDomainRequest {
	s.GroupId = &v
	return s
}

func (s *SetDomainRequest) SetDomainName(v string) *SetDomainRequest {
	s.DomainName = &v
	return s
}

func (s *SetDomainRequest) SetBindStageName(v string) *SetDomainRequest {
	s.BindStageName = &v
	return s
}

func (s *SetDomainRequest) SetIsForce(v bool) *SetDomainRequest {
	s.IsForce = &v
	return s
}

type SetDomainResponse struct {
	RequestId             *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	GroupId               *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	DomainName            *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	SubDomain             *string `json:"SubDomain,omitempty" xml:"SubDomain,omitempty" require:"true"`
	DomainBindingStatus   *string `json:"DomainBindingStatus,omitempty" xml:"DomainBindingStatus,omitempty" require:"true"`
	DomainLegalStatus     *string `json:"DomainLegalStatus,omitempty" xml:"DomainLegalStatus,omitempty" require:"true"`
	DomainWebSocketStatus *string `json:"DomainWebSocketStatus,omitempty" xml:"DomainWebSocketStatus,omitempty" require:"true"`
	DomainRemark          *string `json:"DomainRemark,omitempty" xml:"DomainRemark,omitempty" require:"true"`
}

func (s SetDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s SetDomainResponse) GoString() string {
	return s.String()
}

func (s *SetDomainResponse) SetRequestId(v string) *SetDomainResponse {
	s.RequestId = &v
	return s
}

func (s *SetDomainResponse) SetGroupId(v string) *SetDomainResponse {
	s.GroupId = &v
	return s
}

func (s *SetDomainResponse) SetDomainName(v string) *SetDomainResponse {
	s.DomainName = &v
	return s
}

func (s *SetDomainResponse) SetSubDomain(v string) *SetDomainResponse {
	s.SubDomain = &v
	return s
}

func (s *SetDomainResponse) SetDomainBindingStatus(v string) *SetDomainResponse {
	s.DomainBindingStatus = &v
	return s
}

func (s *SetDomainResponse) SetDomainLegalStatus(v string) *SetDomainResponse {
	s.DomainLegalStatus = &v
	return s
}

func (s *SetDomainResponse) SetDomainWebSocketStatus(v string) *SetDomainResponse {
	s.DomainWebSocketStatus = &v
	return s
}

func (s *SetDomainResponse) SetDomainRemark(v string) *SetDomainResponse {
	s.DomainRemark = &v
	return s
}

type SetAppsAuthoritiesRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	AppIds        *string `json:"AppIds,omitempty" xml:"AppIds,omitempty" require:"true"`
	Description   *string `json:"Description,omitempty" xml:"Description,omitempty"`
	AuthValidTime *string `json:"AuthValidTime,omitempty" xml:"AuthValidTime,omitempty"`
}

func (s SetAppsAuthoritiesRequest) String() string {
	return tea.Prettify(s)
}

func (s SetAppsAuthoritiesRequest) GoString() string {
	return s.String()
}

func (s *SetAppsAuthoritiesRequest) SetSecurityToken(v string) *SetAppsAuthoritiesRequest {
	s.SecurityToken = &v
	return s
}

func (s *SetAppsAuthoritiesRequest) SetGroupId(v string) *SetAppsAuthoritiesRequest {
	s.GroupId = &v
	return s
}

func (s *SetAppsAuthoritiesRequest) SetApiId(v string) *SetAppsAuthoritiesRequest {
	s.ApiId = &v
	return s
}

func (s *SetAppsAuthoritiesRequest) SetStageName(v string) *SetAppsAuthoritiesRequest {
	s.StageName = &v
	return s
}

func (s *SetAppsAuthoritiesRequest) SetAppIds(v string) *SetAppsAuthoritiesRequest {
	s.AppIds = &v
	return s
}

func (s *SetAppsAuthoritiesRequest) SetDescription(v string) *SetAppsAuthoritiesRequest {
	s.Description = &v
	return s
}

func (s *SetAppsAuthoritiesRequest) SetAuthValidTime(v string) *SetAppsAuthoritiesRequest {
	s.AuthValidTime = &v
	return s
}

type SetAppsAuthoritiesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetAppsAuthoritiesResponse) String() string {
	return tea.Prettify(s)
}

func (s SetAppsAuthoritiesResponse) GoString() string {
	return s.String()
}

func (s *SetAppsAuthoritiesResponse) SetRequestId(v string) *SetAppsAuthoritiesResponse {
	s.RequestId = &v
	return s
}

type SetApisAuthoritiesRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	AppId         *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	ApiIds        *string `json:"ApiIds,omitempty" xml:"ApiIds,omitempty"`
	Description   *string `json:"Description,omitempty" xml:"Description,omitempty"`
	AuthValidTime *string `json:"AuthValidTime,omitempty" xml:"AuthValidTime,omitempty"`
}

func (s SetApisAuthoritiesRequest) String() string {
	return tea.Prettify(s)
}

func (s SetApisAuthoritiesRequest) GoString() string {
	return s.String()
}

func (s *SetApisAuthoritiesRequest) SetSecurityToken(v string) *SetApisAuthoritiesRequest {
	s.SecurityToken = &v
	return s
}

func (s *SetApisAuthoritiesRequest) SetGroupId(v string) *SetApisAuthoritiesRequest {
	s.GroupId = &v
	return s
}

func (s *SetApisAuthoritiesRequest) SetAppId(v int64) *SetApisAuthoritiesRequest {
	s.AppId = &v
	return s
}

func (s *SetApisAuthoritiesRequest) SetStageName(v string) *SetApisAuthoritiesRequest {
	s.StageName = &v
	return s
}

func (s *SetApisAuthoritiesRequest) SetApiIds(v string) *SetApisAuthoritiesRequest {
	s.ApiIds = &v
	return s
}

func (s *SetApisAuthoritiesRequest) SetDescription(v string) *SetApisAuthoritiesRequest {
	s.Description = &v
	return s
}

func (s *SetApisAuthoritiesRequest) SetAuthValidTime(v string) *SetApisAuthoritiesRequest {
	s.AuthValidTime = &v
	return s
}

type SetApisAuthoritiesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetApisAuthoritiesResponse) String() string {
	return tea.Prettify(s)
}

func (s SetApisAuthoritiesResponse) GoString() string {
	return s.String()
}

func (s *SetApisAuthoritiesResponse) SetRequestId(v string) *SetApisAuthoritiesResponse {
	s.RequestId = &v
	return s
}

type ResetAppSecretRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	AppKey        *string `json:"AppKey,omitempty" xml:"AppKey,omitempty" require:"true"`
}

func (s ResetAppSecretRequest) String() string {
	return tea.Prettify(s)
}

func (s ResetAppSecretRequest) GoString() string {
	return s.String()
}

func (s *ResetAppSecretRequest) SetSecurityToken(v string) *ResetAppSecretRequest {
	s.SecurityToken = &v
	return s
}

func (s *ResetAppSecretRequest) SetAppKey(v string) *ResetAppSecretRequest {
	s.AppKey = &v
	return s
}

type ResetAppSecretResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ResetAppSecretResponse) String() string {
	return tea.Prettify(s)
}

func (s ResetAppSecretResponse) GoString() string {
	return s.String()
}

func (s *ResetAppSecretResponse) SetRequestId(v string) *ResetAppSecretResponse {
	s.RequestId = &v
	return s
}

type RemoveTrafficControlApisRequest struct {
	SecurityToken    *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	TrafficControlId *string `json:"TrafficControlId,omitempty" xml:"TrafficControlId,omitempty" require:"true"`
	GroupId          *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiIds           *string `json:"ApiIds,omitempty" xml:"ApiIds,omitempty"`
	StageName        *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
}

func (s RemoveTrafficControlApisRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveTrafficControlApisRequest) GoString() string {
	return s.String()
}

func (s *RemoveTrafficControlApisRequest) SetSecurityToken(v string) *RemoveTrafficControlApisRequest {
	s.SecurityToken = &v
	return s
}

func (s *RemoveTrafficControlApisRequest) SetTrafficControlId(v string) *RemoveTrafficControlApisRequest {
	s.TrafficControlId = &v
	return s
}

func (s *RemoveTrafficControlApisRequest) SetGroupId(v string) *RemoveTrafficControlApisRequest {
	s.GroupId = &v
	return s
}

func (s *RemoveTrafficControlApisRequest) SetApiIds(v string) *RemoveTrafficControlApisRequest {
	s.ApiIds = &v
	return s
}

func (s *RemoveTrafficControlApisRequest) SetStageName(v string) *RemoveTrafficControlApisRequest {
	s.StageName = &v
	return s
}

type RemoveTrafficControlApisResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s RemoveTrafficControlApisResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveTrafficControlApisResponse) GoString() string {
	return s.String()
}

func (s *RemoveTrafficControlApisResponse) SetRequestId(v string) *RemoveTrafficControlApisResponse {
	s.RequestId = &v
	return s
}

type RemoveSignatureApisRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	SignatureId   *string `json:"SignatureId,omitempty" xml:"SignatureId,omitempty" require:"true"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiIds        *string `json:"ApiIds,omitempty" xml:"ApiIds,omitempty"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
}

func (s RemoveSignatureApisRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveSignatureApisRequest) GoString() string {
	return s.String()
}

func (s *RemoveSignatureApisRequest) SetSecurityToken(v string) *RemoveSignatureApisRequest {
	s.SecurityToken = &v
	return s
}

func (s *RemoveSignatureApisRequest) SetSignatureId(v string) *RemoveSignatureApisRequest {
	s.SignatureId = &v
	return s
}

func (s *RemoveSignatureApisRequest) SetGroupId(v string) *RemoveSignatureApisRequest {
	s.GroupId = &v
	return s
}

func (s *RemoveSignatureApisRequest) SetApiIds(v string) *RemoveSignatureApisRequest {
	s.ApiIds = &v
	return s
}

func (s *RemoveSignatureApisRequest) SetStageName(v string) *RemoveSignatureApisRequest {
	s.StageName = &v
	return s
}

type RemoveSignatureApisResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s RemoveSignatureApisResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveSignatureApisResponse) GoString() string {
	return s.String()
}

func (s *RemoveSignatureApisResponse) SetRequestId(v string) *RemoveSignatureApisResponse {
	s.RequestId = &v
	return s
}

type RemoveAppsAuthoritiesRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	AppIds        *string `json:"AppIds,omitempty" xml:"AppIds,omitempty" require:"true"`
}

func (s RemoveAppsAuthoritiesRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveAppsAuthoritiesRequest) GoString() string {
	return s.String()
}

func (s *RemoveAppsAuthoritiesRequest) SetSecurityToken(v string) *RemoveAppsAuthoritiesRequest {
	s.SecurityToken = &v
	return s
}

func (s *RemoveAppsAuthoritiesRequest) SetGroupId(v string) *RemoveAppsAuthoritiesRequest {
	s.GroupId = &v
	return s
}

func (s *RemoveAppsAuthoritiesRequest) SetApiId(v string) *RemoveAppsAuthoritiesRequest {
	s.ApiId = &v
	return s
}

func (s *RemoveAppsAuthoritiesRequest) SetStageName(v string) *RemoveAppsAuthoritiesRequest {
	s.StageName = &v
	return s
}

func (s *RemoveAppsAuthoritiesRequest) SetAppIds(v string) *RemoveAppsAuthoritiesRequest {
	s.AppIds = &v
	return s
}

type RemoveAppsAuthoritiesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s RemoveAppsAuthoritiesResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveAppsAuthoritiesResponse) GoString() string {
	return s.String()
}

func (s *RemoveAppsAuthoritiesResponse) SetRequestId(v string) *RemoveAppsAuthoritiesResponse {
	s.RequestId = &v
	return s
}

type RemoveApisAuthoritiesRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	AppId         *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	ApiIds        *string `json:"ApiIds,omitempty" xml:"ApiIds,omitempty" require:"true"`
	Description   *string `json:"Description,omitempty" xml:"Description,omitempty"`
}

func (s RemoveApisAuthoritiesRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveApisAuthoritiesRequest) GoString() string {
	return s.String()
}

func (s *RemoveApisAuthoritiesRequest) SetSecurityToken(v string) *RemoveApisAuthoritiesRequest {
	s.SecurityToken = &v
	return s
}

func (s *RemoveApisAuthoritiesRequest) SetGroupId(v string) *RemoveApisAuthoritiesRequest {
	s.GroupId = &v
	return s
}

func (s *RemoveApisAuthoritiesRequest) SetAppId(v int64) *RemoveApisAuthoritiesRequest {
	s.AppId = &v
	return s
}

func (s *RemoveApisAuthoritiesRequest) SetStageName(v string) *RemoveApisAuthoritiesRequest {
	s.StageName = &v
	return s
}

func (s *RemoveApisAuthoritiesRequest) SetApiIds(v string) *RemoveApisAuthoritiesRequest {
	s.ApiIds = &v
	return s
}

func (s *RemoveApisAuthoritiesRequest) SetDescription(v string) *RemoveApisAuthoritiesRequest {
	s.Description = &v
	return s
}

type RemoveApisAuthoritiesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s RemoveApisAuthoritiesResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveApisAuthoritiesResponse) GoString() string {
	return s.String()
}

func (s *RemoveApisAuthoritiesResponse) SetRequestId(v string) *RemoveApisAuthoritiesResponse {
	s.RequestId = &v
	return s
}

type ModifyTrafficControlRequest struct {
	SecurityToken      *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	TrafficControlId   *string `json:"TrafficControlId,omitempty" xml:"TrafficControlId,omitempty" require:"true"`
	TrafficControlName *string `json:"TrafficControlName,omitempty" xml:"TrafficControlName,omitempty"`
	TrafficControlUnit *string `json:"TrafficControlUnit,omitempty" xml:"TrafficControlUnit,omitempty"`
	ApiDefault         *int    `json:"ApiDefault,omitempty" xml:"ApiDefault,omitempty"`
	UserDefault        *int    `json:"UserDefault,omitempty" xml:"UserDefault,omitempty"`
	AppDefault         *int    `json:"AppDefault,omitempty" xml:"AppDefault,omitempty"`
	Description        *string `json:"Description,omitempty" xml:"Description,omitempty"`
}

func (s ModifyTrafficControlRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyTrafficControlRequest) GoString() string {
	return s.String()
}

func (s *ModifyTrafficControlRequest) SetSecurityToken(v string) *ModifyTrafficControlRequest {
	s.SecurityToken = &v
	return s
}

func (s *ModifyTrafficControlRequest) SetTrafficControlId(v string) *ModifyTrafficControlRequest {
	s.TrafficControlId = &v
	return s
}

func (s *ModifyTrafficControlRequest) SetTrafficControlName(v string) *ModifyTrafficControlRequest {
	s.TrafficControlName = &v
	return s
}

func (s *ModifyTrafficControlRequest) SetTrafficControlUnit(v string) *ModifyTrafficControlRequest {
	s.TrafficControlUnit = &v
	return s
}

func (s *ModifyTrafficControlRequest) SetApiDefault(v int) *ModifyTrafficControlRequest {
	s.ApiDefault = &v
	return s
}

func (s *ModifyTrafficControlRequest) SetUserDefault(v int) *ModifyTrafficControlRequest {
	s.UserDefault = &v
	return s
}

func (s *ModifyTrafficControlRequest) SetAppDefault(v int) *ModifyTrafficControlRequest {
	s.AppDefault = &v
	return s
}

func (s *ModifyTrafficControlRequest) SetDescription(v string) *ModifyTrafficControlRequest {
	s.Description = &v
	return s
}

type ModifyTrafficControlResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyTrafficControlResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyTrafficControlResponse) GoString() string {
	return s.String()
}

func (s *ModifyTrafficControlResponse) SetRequestId(v string) *ModifyTrafficControlResponse {
	s.RequestId = &v
	return s
}

type ModifySignatureRequest struct {
	SecurityToken   *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	SignatureId     *string `json:"SignatureId,omitempty" xml:"SignatureId,omitempty" require:"true"`
	SignatureName   *string `json:"SignatureName,omitempty" xml:"SignatureName,omitempty"`
	SignatureKey    *string `json:"SignatureKey,omitempty" xml:"SignatureKey,omitempty"`
	SignatureSecret *string `json:"SignatureSecret,omitempty" xml:"SignatureSecret,omitempty"`
}

func (s ModifySignatureRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifySignatureRequest) GoString() string {
	return s.String()
}

func (s *ModifySignatureRequest) SetSecurityToken(v string) *ModifySignatureRequest {
	s.SecurityToken = &v
	return s
}

func (s *ModifySignatureRequest) SetSignatureId(v string) *ModifySignatureRequest {
	s.SignatureId = &v
	return s
}

func (s *ModifySignatureRequest) SetSignatureName(v string) *ModifySignatureRequest {
	s.SignatureName = &v
	return s
}

func (s *ModifySignatureRequest) SetSignatureKey(v string) *ModifySignatureRequest {
	s.SignatureKey = &v
	return s
}

func (s *ModifySignatureRequest) SetSignatureSecret(v string) *ModifySignatureRequest {
	s.SignatureSecret = &v
	return s
}

type ModifySignatureResponse struct {
	RequestId     *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	SignatureId   *string `json:"SignatureId,omitempty" xml:"SignatureId,omitempty" require:"true"`
	SignatureName *string `json:"SignatureName,omitempty" xml:"SignatureName,omitempty" require:"true"`
}

func (s ModifySignatureResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifySignatureResponse) GoString() string {
	return s.String()
}

func (s *ModifySignatureResponse) SetRequestId(v string) *ModifySignatureResponse {
	s.RequestId = &v
	return s
}

func (s *ModifySignatureResponse) SetSignatureId(v string) *ModifySignatureResponse {
	s.SignatureId = &v
	return s
}

func (s *ModifySignatureResponse) SetSignatureName(v string) *ModifySignatureResponse {
	s.SignatureName = &v
	return s
}

type ModifyAppRequest struct {
	SecurityToken *string                `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	AppId         *int64                 `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	AppName       *string                `json:"AppName,omitempty" xml:"AppName,omitempty"`
	Description   *string                `json:"Description,omitempty" xml:"Description,omitempty"`
	Tag           []*ModifyAppRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s ModifyAppRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyAppRequest) GoString() string {
	return s.String()
}

func (s *ModifyAppRequest) SetSecurityToken(v string) *ModifyAppRequest {
	s.SecurityToken = &v
	return s
}

func (s *ModifyAppRequest) SetAppId(v int64) *ModifyAppRequest {
	s.AppId = &v
	return s
}

func (s *ModifyAppRequest) SetAppName(v string) *ModifyAppRequest {
	s.AppName = &v
	return s
}

func (s *ModifyAppRequest) SetDescription(v string) *ModifyAppRequest {
	s.Description = &v
	return s
}

func (s *ModifyAppRequest) SetTag(v []*ModifyAppRequestTag) *ModifyAppRequest {
	s.Tag = v
	return s
}

type ModifyAppRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s ModifyAppRequestTag) String() string {
	return tea.Prettify(s)
}

func (s ModifyAppRequestTag) GoString() string {
	return s.String()
}

func (s *ModifyAppRequestTag) SetKey(v string) *ModifyAppRequestTag {
	s.Key = &v
	return s
}

func (s *ModifyAppRequestTag) SetValue(v string) *ModifyAppRequestTag {
	s.Value = &v
	return s
}

type ModifyAppResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyAppResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyAppResponse) GoString() string {
	return s.String()
}

func (s *ModifyAppResponse) SetRequestId(v string) *ModifyAppResponse {
	s.RequestId = &v
	return s
}

type ModifyApiGroupRequest struct {
	SecurityToken      *string                     `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId            *string                     `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName          *string                     `json:"GroupName,omitempty" xml:"GroupName,omitempty"`
	Description        *string                     `json:"Description,omitempty" xml:"Description,omitempty"`
	UserLogConfig      *string                     `json:"UserLogConfig,omitempty" xml:"UserLogConfig,omitempty"`
	CustomTraceConfig  *string                     `json:"CustomTraceConfig,omitempty" xml:"CustomTraceConfig,omitempty"`
	CompatibleFlags    *string                     `json:"CompatibleFlags,omitempty" xml:"CompatibleFlags,omitempty"`
	PassthroughHeaders *string                     `json:"PassthroughHeaders,omitempty" xml:"PassthroughHeaders,omitempty"`
	DefaultDomain      *string                     `json:"DefaultDomain,omitempty" xml:"DefaultDomain,omitempty"`
	RpcPattern         *string                     `json:"RpcPattern,omitempty" xml:"RpcPattern,omitempty"`
	Tag                []*ModifyApiGroupRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s ModifyApiGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyApiGroupRequest) GoString() string {
	return s.String()
}

func (s *ModifyApiGroupRequest) SetSecurityToken(v string) *ModifyApiGroupRequest {
	s.SecurityToken = &v
	return s
}

func (s *ModifyApiGroupRequest) SetGroupId(v string) *ModifyApiGroupRequest {
	s.GroupId = &v
	return s
}

func (s *ModifyApiGroupRequest) SetGroupName(v string) *ModifyApiGroupRequest {
	s.GroupName = &v
	return s
}

func (s *ModifyApiGroupRequest) SetDescription(v string) *ModifyApiGroupRequest {
	s.Description = &v
	return s
}

func (s *ModifyApiGroupRequest) SetUserLogConfig(v string) *ModifyApiGroupRequest {
	s.UserLogConfig = &v
	return s
}

func (s *ModifyApiGroupRequest) SetCustomTraceConfig(v string) *ModifyApiGroupRequest {
	s.CustomTraceConfig = &v
	return s
}

func (s *ModifyApiGroupRequest) SetCompatibleFlags(v string) *ModifyApiGroupRequest {
	s.CompatibleFlags = &v
	return s
}

func (s *ModifyApiGroupRequest) SetPassthroughHeaders(v string) *ModifyApiGroupRequest {
	s.PassthroughHeaders = &v
	return s
}

func (s *ModifyApiGroupRequest) SetDefaultDomain(v string) *ModifyApiGroupRequest {
	s.DefaultDomain = &v
	return s
}

func (s *ModifyApiGroupRequest) SetRpcPattern(v string) *ModifyApiGroupRequest {
	s.RpcPattern = &v
	return s
}

func (s *ModifyApiGroupRequest) SetTag(v []*ModifyApiGroupRequestTag) *ModifyApiGroupRequest {
	s.Tag = v
	return s
}

type ModifyApiGroupRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s ModifyApiGroupRequestTag) String() string {
	return tea.Prettify(s)
}

func (s ModifyApiGroupRequestTag) GoString() string {
	return s.String()
}

func (s *ModifyApiGroupRequestTag) SetKey(v string) *ModifyApiGroupRequestTag {
	s.Key = &v
	return s
}

func (s *ModifyApiGroupRequestTag) SetValue(v string) *ModifyApiGroupRequestTag {
	s.Value = &v
	return s
}

type ModifyApiGroupResponse struct {
	RequestId   *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	GroupId     *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName   *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	SubDomain   *string `json:"SubDomain,omitempty" xml:"SubDomain,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s ModifyApiGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyApiGroupResponse) GoString() string {
	return s.String()
}

func (s *ModifyApiGroupResponse) SetRequestId(v string) *ModifyApiGroupResponse {
	s.RequestId = &v
	return s
}

func (s *ModifyApiGroupResponse) SetGroupId(v string) *ModifyApiGroupResponse {
	s.GroupId = &v
	return s
}

func (s *ModifyApiGroupResponse) SetGroupName(v string) *ModifyApiGroupResponse {
	s.GroupName = &v
	return s
}

func (s *ModifyApiGroupResponse) SetSubDomain(v string) *ModifyApiGroupResponse {
	s.SubDomain = &v
	return s
}

func (s *ModifyApiGroupResponse) SetDescription(v string) *ModifyApiGroupResponse {
	s.Description = &v
	return s
}

type ModifyApiRequest struct {
	SecurityToken        *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId              *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	ApiId                *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName              *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	Description          *string `json:"Description,omitempty" xml:"Description,omitempty"`
	Visibility           *string `json:"Visibility,omitempty" xml:"Visibility,omitempty" require:"true"`
	AuthType             *string `json:"AuthType,omitempty" xml:"AuthType,omitempty"`
	RequestConfig        *string `json:"RequestConfig,omitempty" xml:"RequestConfig,omitempty" require:"true"`
	ServiceConfig        *string `json:"ServiceConfig,omitempty" xml:"ServiceConfig,omitempty" require:"true"`
	RequestParameters    *string `json:"RequestParameters,omitempty" xml:"RequestParameters,omitempty"`
	SystemParameters     *string `json:"SystemParameters,omitempty" xml:"SystemParameters,omitempty"`
	ConstantParameters   *string `json:"ConstantParameters,omitempty" xml:"ConstantParameters,omitempty"`
	ServiceParameters    *string `json:"ServiceParameters,omitempty" xml:"ServiceParameters,omitempty"`
	ServiceParametersMap *string `json:"ServiceParametersMap,omitempty" xml:"ServiceParametersMap,omitempty"`
	ResultType           *string `json:"ResultType,omitempty" xml:"ResultType,omitempty"`
	ResultSample         *string `json:"ResultSample,omitempty" xml:"ResultSample,omitempty"`
	FailResultSample     *string `json:"FailResultSample,omitempty" xml:"FailResultSample,omitempty"`
	ErrorCodeSamples     *string `json:"ErrorCodeSamples,omitempty" xml:"ErrorCodeSamples,omitempty"`
	ResultDescriptions   *string `json:"ResultDescriptions,omitempty" xml:"ResultDescriptions,omitempty"`
	OpenIdConnectConfig  *string `json:"OpenIdConnectConfig,omitempty" xml:"OpenIdConnectConfig,omitempty"`
	AllowSignatureMethod *string `json:"AllowSignatureMethod,omitempty" xml:"AllowSignatureMethod,omitempty"`
	WebSocketApiType     *string `json:"WebSocketApiType,omitempty" xml:"WebSocketApiType,omitempty"`
	ResultBodyModel      *string `json:"ResultBodyModel,omitempty" xml:"ResultBodyModel,omitempty"`
	ForceNonceCheck      *bool   `json:"ForceNonceCheck,omitempty" xml:"ForceNonceCheck,omitempty"`
	DisableInternet      *bool   `json:"DisableInternet,omitempty" xml:"DisableInternet,omitempty"`
	AppCodeAuthType      *string `json:"AppCodeAuthType,omitempty" xml:"AppCodeAuthType,omitempty"`
}

func (s ModifyApiRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyApiRequest) GoString() string {
	return s.String()
}

func (s *ModifyApiRequest) SetSecurityToken(v string) *ModifyApiRequest {
	s.SecurityToken = &v
	return s
}

func (s *ModifyApiRequest) SetGroupId(v string) *ModifyApiRequest {
	s.GroupId = &v
	return s
}

func (s *ModifyApiRequest) SetApiId(v string) *ModifyApiRequest {
	s.ApiId = &v
	return s
}

func (s *ModifyApiRequest) SetApiName(v string) *ModifyApiRequest {
	s.ApiName = &v
	return s
}

func (s *ModifyApiRequest) SetDescription(v string) *ModifyApiRequest {
	s.Description = &v
	return s
}

func (s *ModifyApiRequest) SetVisibility(v string) *ModifyApiRequest {
	s.Visibility = &v
	return s
}

func (s *ModifyApiRequest) SetAuthType(v string) *ModifyApiRequest {
	s.AuthType = &v
	return s
}

func (s *ModifyApiRequest) SetRequestConfig(v string) *ModifyApiRequest {
	s.RequestConfig = &v
	return s
}

func (s *ModifyApiRequest) SetServiceConfig(v string) *ModifyApiRequest {
	s.ServiceConfig = &v
	return s
}

func (s *ModifyApiRequest) SetRequestParameters(v string) *ModifyApiRequest {
	s.RequestParameters = &v
	return s
}

func (s *ModifyApiRequest) SetSystemParameters(v string) *ModifyApiRequest {
	s.SystemParameters = &v
	return s
}

func (s *ModifyApiRequest) SetConstantParameters(v string) *ModifyApiRequest {
	s.ConstantParameters = &v
	return s
}

func (s *ModifyApiRequest) SetServiceParameters(v string) *ModifyApiRequest {
	s.ServiceParameters = &v
	return s
}

func (s *ModifyApiRequest) SetServiceParametersMap(v string) *ModifyApiRequest {
	s.ServiceParametersMap = &v
	return s
}

func (s *ModifyApiRequest) SetResultType(v string) *ModifyApiRequest {
	s.ResultType = &v
	return s
}

func (s *ModifyApiRequest) SetResultSample(v string) *ModifyApiRequest {
	s.ResultSample = &v
	return s
}

func (s *ModifyApiRequest) SetFailResultSample(v string) *ModifyApiRequest {
	s.FailResultSample = &v
	return s
}

func (s *ModifyApiRequest) SetErrorCodeSamples(v string) *ModifyApiRequest {
	s.ErrorCodeSamples = &v
	return s
}

func (s *ModifyApiRequest) SetResultDescriptions(v string) *ModifyApiRequest {
	s.ResultDescriptions = &v
	return s
}

func (s *ModifyApiRequest) SetOpenIdConnectConfig(v string) *ModifyApiRequest {
	s.OpenIdConnectConfig = &v
	return s
}

func (s *ModifyApiRequest) SetAllowSignatureMethod(v string) *ModifyApiRequest {
	s.AllowSignatureMethod = &v
	return s
}

func (s *ModifyApiRequest) SetWebSocketApiType(v string) *ModifyApiRequest {
	s.WebSocketApiType = &v
	return s
}

func (s *ModifyApiRequest) SetResultBodyModel(v string) *ModifyApiRequest {
	s.ResultBodyModel = &v
	return s
}

func (s *ModifyApiRequest) SetForceNonceCheck(v bool) *ModifyApiRequest {
	s.ForceNonceCheck = &v
	return s
}

func (s *ModifyApiRequest) SetDisableInternet(v bool) *ModifyApiRequest {
	s.DisableInternet = &v
	return s
}

func (s *ModifyApiRequest) SetAppCodeAuthType(v string) *ModifyApiRequest {
	s.AppCodeAuthType = &v
	return s
}

type ModifyApiResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyApiResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyApiResponse) GoString() string {
	return s.String()
}

func (s *ModifyApiResponse) SetRequestId(v string) *ModifyApiResponse {
	s.RequestId = &v
	return s
}

type DescribeTrafficControlsByApiRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
}

func (s DescribeTrafficControlsByApiRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeTrafficControlsByApiRequest) GoString() string {
	return s.String()
}

func (s *DescribeTrafficControlsByApiRequest) SetSecurityToken(v string) *DescribeTrafficControlsByApiRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeTrafficControlsByApiRequest) SetGroupId(v string) *DescribeTrafficControlsByApiRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeTrafficControlsByApiRequest) SetApiId(v string) *DescribeTrafficControlsByApiRequest {
	s.ApiId = &v
	return s
}

func (s *DescribeTrafficControlsByApiRequest) SetStageName(v string) *DescribeTrafficControlsByApiRequest {
	s.StageName = &v
	return s
}

type DescribeTrafficControlsByApiResponse struct {
	RequestId           *string                                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TrafficControlItems *DescribeTrafficControlsByApiResponseTrafficControlItems `json:"TrafficControlItems,omitempty" xml:"TrafficControlItems,omitempty" require:"true" type:"Struct"`
}

func (s DescribeTrafficControlsByApiResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeTrafficControlsByApiResponse) GoString() string {
	return s.String()
}

func (s *DescribeTrafficControlsByApiResponse) SetRequestId(v string) *DescribeTrafficControlsByApiResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeTrafficControlsByApiResponse) SetTrafficControlItems(v *DescribeTrafficControlsByApiResponseTrafficControlItems) *DescribeTrafficControlsByApiResponse {
	s.TrafficControlItems = v
	return s
}

type DescribeTrafficControlsByApiResponseTrafficControlItems struct {
	TrafficControlItem []*DescribeTrafficControlsByApiResponseTrafficControlItemsTrafficControlItem `json:"TrafficControlItem,omitempty" xml:"TrafficControlItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeTrafficControlsByApiResponseTrafficControlItems) String() string {
	return tea.Prettify(s)
}

func (s DescribeTrafficControlsByApiResponseTrafficControlItems) GoString() string {
	return s.String()
}

func (s *DescribeTrafficControlsByApiResponseTrafficControlItems) SetTrafficControlItem(v []*DescribeTrafficControlsByApiResponseTrafficControlItemsTrafficControlItem) *DescribeTrafficControlsByApiResponseTrafficControlItems {
	s.TrafficControlItem = v
	return s
}

type DescribeTrafficControlsByApiResponseTrafficControlItemsTrafficControlItem struct {
	TrafficControlItemId   *string `json:"TrafficControlItemId,omitempty" xml:"TrafficControlItemId,omitempty" require:"true"`
	TrafficControlItemName *string `json:"TrafficControlItemName,omitempty" xml:"TrafficControlItemName,omitempty" require:"true"`
	BoundTime              *string `json:"BoundTime,omitempty" xml:"BoundTime,omitempty" require:"true"`
}

func (s DescribeTrafficControlsByApiResponseTrafficControlItemsTrafficControlItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeTrafficControlsByApiResponseTrafficControlItemsTrafficControlItem) GoString() string {
	return s.String()
}

func (s *DescribeTrafficControlsByApiResponseTrafficControlItemsTrafficControlItem) SetTrafficControlItemId(v string) *DescribeTrafficControlsByApiResponseTrafficControlItemsTrafficControlItem {
	s.TrafficControlItemId = &v
	return s
}

func (s *DescribeTrafficControlsByApiResponseTrafficControlItemsTrafficControlItem) SetTrafficControlItemName(v string) *DescribeTrafficControlsByApiResponseTrafficControlItemsTrafficControlItem {
	s.TrafficControlItemName = &v
	return s
}

func (s *DescribeTrafficControlsByApiResponseTrafficControlItemsTrafficControlItem) SetBoundTime(v string) *DescribeTrafficControlsByApiResponseTrafficControlItemsTrafficControlItem {
	s.BoundTime = &v
	return s
}

type DescribeTrafficControlsRequest struct {
	SecurityToken      *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	TrafficControlId   *string `json:"TrafficControlId,omitempty" xml:"TrafficControlId,omitempty"`
	GroupId            *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	ApiId              *string `json:"ApiId,omitempty" xml:"ApiId,omitempty"`
	StageName          *string `json:"StageName,omitempty" xml:"StageName,omitempty"`
	TrafficControlName *string `json:"TrafficControlName,omitempty" xml:"TrafficControlName,omitempty"`
	PageNumber         *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize           *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeTrafficControlsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeTrafficControlsRequest) GoString() string {
	return s.String()
}

func (s *DescribeTrafficControlsRequest) SetSecurityToken(v string) *DescribeTrafficControlsRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeTrafficControlsRequest) SetTrafficControlId(v string) *DescribeTrafficControlsRequest {
	s.TrafficControlId = &v
	return s
}

func (s *DescribeTrafficControlsRequest) SetGroupId(v string) *DescribeTrafficControlsRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeTrafficControlsRequest) SetApiId(v string) *DescribeTrafficControlsRequest {
	s.ApiId = &v
	return s
}

func (s *DescribeTrafficControlsRequest) SetStageName(v string) *DescribeTrafficControlsRequest {
	s.StageName = &v
	return s
}

func (s *DescribeTrafficControlsRequest) SetTrafficControlName(v string) *DescribeTrafficControlsRequest {
	s.TrafficControlName = &v
	return s
}

func (s *DescribeTrafficControlsRequest) SetPageNumber(v int) *DescribeTrafficControlsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeTrafficControlsRequest) SetPageSize(v int) *DescribeTrafficControlsRequest {
	s.PageSize = &v
	return s
}

type DescribeTrafficControlsResponse struct {
	RequestId       *string                                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount      *int                                            `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize        *int                                            `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber      *int                                            `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	TrafficControls *DescribeTrafficControlsResponseTrafficControls `json:"TrafficControls,omitempty" xml:"TrafficControls,omitempty" require:"true" type:"Struct"`
}

func (s DescribeTrafficControlsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeTrafficControlsResponse) GoString() string {
	return s.String()
}

func (s *DescribeTrafficControlsResponse) SetRequestId(v string) *DescribeTrafficControlsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeTrafficControlsResponse) SetTotalCount(v int) *DescribeTrafficControlsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeTrafficControlsResponse) SetPageSize(v int) *DescribeTrafficControlsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeTrafficControlsResponse) SetPageNumber(v int) *DescribeTrafficControlsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeTrafficControlsResponse) SetTrafficControls(v *DescribeTrafficControlsResponseTrafficControls) *DescribeTrafficControlsResponse {
	s.TrafficControls = v
	return s
}

type DescribeTrafficControlsResponseTrafficControls struct {
	TrafficControl []*DescribeTrafficControlsResponseTrafficControlsTrafficControl `json:"TrafficControl,omitempty" xml:"TrafficControl,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeTrafficControlsResponseTrafficControls) String() string {
	return tea.Prettify(s)
}

func (s DescribeTrafficControlsResponseTrafficControls) GoString() string {
	return s.String()
}

func (s *DescribeTrafficControlsResponseTrafficControls) SetTrafficControl(v []*DescribeTrafficControlsResponseTrafficControlsTrafficControl) *DescribeTrafficControlsResponseTrafficControls {
	s.TrafficControl = v
	return s
}

type DescribeTrafficControlsResponseTrafficControlsTrafficControl struct {
	TrafficControlId   *string                                                                      `json:"TrafficControlId,omitempty" xml:"TrafficControlId,omitempty" require:"true"`
	TrafficControlName *string                                                                      `json:"TrafficControlName,omitempty" xml:"TrafficControlName,omitempty" require:"true"`
	Description        *string                                                                      `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	TrafficControlUnit *string                                                                      `json:"TrafficControlUnit,omitempty" xml:"TrafficControlUnit,omitempty" require:"true"`
	ApiDefault         *int                                                                         `json:"ApiDefault,omitempty" xml:"ApiDefault,omitempty" require:"true"`
	UserDefault        *int                                                                         `json:"UserDefault,omitempty" xml:"UserDefault,omitempty" require:"true"`
	AppDefault         *int                                                                         `json:"AppDefault,omitempty" xml:"AppDefault,omitempty" require:"true"`
	CreatedTime        *string                                                                      `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	ModifiedTime       *string                                                                      `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	SpecialPolicies    *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPolicies `json:"SpecialPolicies,omitempty" xml:"SpecialPolicies,omitempty" require:"true" type:"Struct"`
}

func (s DescribeTrafficControlsResponseTrafficControlsTrafficControl) String() string {
	return tea.Prettify(s)
}

func (s DescribeTrafficControlsResponseTrafficControlsTrafficControl) GoString() string {
	return s.String()
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControl) SetTrafficControlId(v string) *DescribeTrafficControlsResponseTrafficControlsTrafficControl {
	s.TrafficControlId = &v
	return s
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControl) SetTrafficControlName(v string) *DescribeTrafficControlsResponseTrafficControlsTrafficControl {
	s.TrafficControlName = &v
	return s
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControl) SetDescription(v string) *DescribeTrafficControlsResponseTrafficControlsTrafficControl {
	s.Description = &v
	return s
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControl) SetTrafficControlUnit(v string) *DescribeTrafficControlsResponseTrafficControlsTrafficControl {
	s.TrafficControlUnit = &v
	return s
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControl) SetApiDefault(v int) *DescribeTrafficControlsResponseTrafficControlsTrafficControl {
	s.ApiDefault = &v
	return s
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControl) SetUserDefault(v int) *DescribeTrafficControlsResponseTrafficControlsTrafficControl {
	s.UserDefault = &v
	return s
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControl) SetAppDefault(v int) *DescribeTrafficControlsResponseTrafficControlsTrafficControl {
	s.AppDefault = &v
	return s
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControl) SetCreatedTime(v string) *DescribeTrafficControlsResponseTrafficControlsTrafficControl {
	s.CreatedTime = &v
	return s
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControl) SetModifiedTime(v string) *DescribeTrafficControlsResponseTrafficControlsTrafficControl {
	s.ModifiedTime = &v
	return s
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControl) SetSpecialPolicies(v *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPolicies) *DescribeTrafficControlsResponseTrafficControlsTrafficControl {
	s.SpecialPolicies = v
	return s
}

type DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPolicies struct {
	SpecialPolicy []*DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicy `json:"SpecialPolicy,omitempty" xml:"SpecialPolicy,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPolicies) String() string {
	return tea.Prettify(s)
}

func (s DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPolicies) GoString() string {
	return s.String()
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPolicies) SetSpecialPolicy(v []*DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicy) *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPolicies {
	s.SpecialPolicy = v
	return s
}

type DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicy struct {
	SpecialType *string                                                                                           `json:"SpecialType,omitempty" xml:"SpecialType,omitempty" require:"true"`
	Specials    *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecials `json:"Specials,omitempty" xml:"Specials,omitempty" require:"true" type:"Struct"`
}

func (s DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicy) String() string {
	return tea.Prettify(s)
}

func (s DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicy) GoString() string {
	return s.String()
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicy) SetSpecialType(v string) *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicy {
	s.SpecialType = &v
	return s
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicy) SetSpecials(v *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecials) *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicy {
	s.Specials = v
	return s
}

type DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecials struct {
	Special []*DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecialsSpecial `json:"Special,omitempty" xml:"Special,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecials) String() string {
	return tea.Prettify(s)
}

func (s DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecials) GoString() string {
	return s.String()
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecials) SetSpecial(v []*DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecialsSpecial) *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecials {
	s.Special = v
	return s
}

type DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecialsSpecial struct {
	SpecialKey   *string `json:"SpecialKey,omitempty" xml:"SpecialKey,omitempty" require:"true"`
	TrafficValue *int    `json:"TrafficValue,omitempty" xml:"TrafficValue,omitempty" require:"true"`
}

func (s DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecialsSpecial) String() string {
	return tea.Prettify(s)
}

func (s DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecialsSpecial) GoString() string {
	return s.String()
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecialsSpecial) SetSpecialKey(v string) *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecialsSpecial {
	s.SpecialKey = &v
	return s
}

func (s *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecialsSpecial) SetTrafficValue(v int) *DescribeTrafficControlsResponseTrafficControlsTrafficControlSpecialPoliciesSpecialPolicySpecialsSpecial {
	s.TrafficValue = &v
	return s
}

type DescribeSystemParametersRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
}

func (s DescribeSystemParametersRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemParametersRequest) GoString() string {
	return s.String()
}

func (s *DescribeSystemParametersRequest) SetSecurityToken(v string) *DescribeSystemParametersRequest {
	s.SecurityToken = &v
	return s
}

type DescribeSystemParametersResponse struct {
	RequestId    *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	SystemParams *DescribeSystemParametersResponseSystemParams `json:"SystemParams,omitempty" xml:"SystemParams,omitempty" require:"true" type:"Struct"`
}

func (s DescribeSystemParametersResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemParametersResponse) GoString() string {
	return s.String()
}

func (s *DescribeSystemParametersResponse) SetRequestId(v string) *DescribeSystemParametersResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSystemParametersResponse) SetSystemParams(v *DescribeSystemParametersResponseSystemParams) *DescribeSystemParametersResponse {
	s.SystemParams = v
	return s
}

type DescribeSystemParametersResponseSystemParams struct {
	SystemParamItem []*DescribeSystemParametersResponseSystemParamsSystemParamItem `json:"SystemParamItem,omitempty" xml:"SystemParamItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeSystemParametersResponseSystemParams) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemParametersResponseSystemParams) GoString() string {
	return s.String()
}

func (s *DescribeSystemParametersResponseSystemParams) SetSystemParamItem(v []*DescribeSystemParametersResponseSystemParamsSystemParamItem) *DescribeSystemParametersResponseSystemParams {
	s.SystemParamItem = v
	return s
}

type DescribeSystemParametersResponseSystemParamsSystemParamItem struct {
	ParamName   *string `json:"ParamName,omitempty" xml:"ParamName,omitempty" require:"true"`
	ParamType   *string `json:"ParamType,omitempty" xml:"ParamType,omitempty" require:"true"`
	DemoValue   *string `json:"DemoValue,omitempty" xml:"DemoValue,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeSystemParametersResponseSystemParamsSystemParamItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeSystemParametersResponseSystemParamsSystemParamItem) GoString() string {
	return s.String()
}

func (s *DescribeSystemParametersResponseSystemParamsSystemParamItem) SetParamName(v string) *DescribeSystemParametersResponseSystemParamsSystemParamItem {
	s.ParamName = &v
	return s
}

func (s *DescribeSystemParametersResponseSystemParamsSystemParamItem) SetParamType(v string) *DescribeSystemParametersResponseSystemParamsSystemParamItem {
	s.ParamType = &v
	return s
}

func (s *DescribeSystemParametersResponseSystemParamsSystemParamItem) SetDemoValue(v string) *DescribeSystemParametersResponseSystemParamsSystemParamItem {
	s.DemoValue = &v
	return s
}

func (s *DescribeSystemParametersResponseSystemParamsSystemParamItem) SetDescription(v string) *DescribeSystemParametersResponseSystemParamsSystemParamItem {
	s.Description = &v
	return s
}

type DescribeSignaturesByApiRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
}

func (s DescribeSignaturesByApiRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSignaturesByApiRequest) GoString() string {
	return s.String()
}

func (s *DescribeSignaturesByApiRequest) SetSecurityToken(v string) *DescribeSignaturesByApiRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeSignaturesByApiRequest) SetGroupId(v string) *DescribeSignaturesByApiRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeSignaturesByApiRequest) SetApiId(v string) *DescribeSignaturesByApiRequest {
	s.ApiId = &v
	return s
}

func (s *DescribeSignaturesByApiRequest) SetStageName(v string) *DescribeSignaturesByApiRequest {
	s.StageName = &v
	return s
}

type DescribeSignaturesByApiResponse struct {
	RequestId  *string                                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Signatures *DescribeSignaturesByApiResponseSignatures `json:"Signatures,omitempty" xml:"Signatures,omitempty" require:"true" type:"Struct"`
}

func (s DescribeSignaturesByApiResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSignaturesByApiResponse) GoString() string {
	return s.String()
}

func (s *DescribeSignaturesByApiResponse) SetRequestId(v string) *DescribeSignaturesByApiResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSignaturesByApiResponse) SetSignatures(v *DescribeSignaturesByApiResponseSignatures) *DescribeSignaturesByApiResponse {
	s.Signatures = v
	return s
}

type DescribeSignaturesByApiResponseSignatures struct {
	SignatureItem []*DescribeSignaturesByApiResponseSignaturesSignatureItem `json:"SignatureItem,omitempty" xml:"SignatureItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeSignaturesByApiResponseSignatures) String() string {
	return tea.Prettify(s)
}

func (s DescribeSignaturesByApiResponseSignatures) GoString() string {
	return s.String()
}

func (s *DescribeSignaturesByApiResponseSignatures) SetSignatureItem(v []*DescribeSignaturesByApiResponseSignaturesSignatureItem) *DescribeSignaturesByApiResponseSignatures {
	s.SignatureItem = v
	return s
}

type DescribeSignaturesByApiResponseSignaturesSignatureItem struct {
	SignatureId   *string `json:"SignatureId,omitempty" xml:"SignatureId,omitempty" require:"true"`
	SignatureName *string `json:"SignatureName,omitempty" xml:"SignatureName,omitempty" require:"true"`
	BoundTime     *string `json:"BoundTime,omitempty" xml:"BoundTime,omitempty" require:"true"`
}

func (s DescribeSignaturesByApiResponseSignaturesSignatureItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeSignaturesByApiResponseSignaturesSignatureItem) GoString() string {
	return s.String()
}

func (s *DescribeSignaturesByApiResponseSignaturesSignatureItem) SetSignatureId(v string) *DescribeSignaturesByApiResponseSignaturesSignatureItem {
	s.SignatureId = &v
	return s
}

func (s *DescribeSignaturesByApiResponseSignaturesSignatureItem) SetSignatureName(v string) *DescribeSignaturesByApiResponseSignaturesSignatureItem {
	s.SignatureName = &v
	return s
}

func (s *DescribeSignaturesByApiResponseSignaturesSignatureItem) SetBoundTime(v string) *DescribeSignaturesByApiResponseSignaturesSignatureItem {
	s.BoundTime = &v
	return s
}

type DescribeSignaturesRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	SignatureId   *string `json:"SignatureId,omitempty" xml:"SignatureId,omitempty"`
	SignatureName *string `json:"SignatureName,omitempty" xml:"SignatureName,omitempty"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeSignaturesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSignaturesRequest) GoString() string {
	return s.String()
}

func (s *DescribeSignaturesRequest) SetSecurityToken(v string) *DescribeSignaturesRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeSignaturesRequest) SetSignatureId(v string) *DescribeSignaturesRequest {
	s.SignatureId = &v
	return s
}

func (s *DescribeSignaturesRequest) SetSignatureName(v string) *DescribeSignaturesRequest {
	s.SignatureName = &v
	return s
}

func (s *DescribeSignaturesRequest) SetPageNumber(v int) *DescribeSignaturesRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeSignaturesRequest) SetPageSize(v int) *DescribeSignaturesRequest {
	s.PageSize = &v
	return s
}

type DescribeSignaturesResponse struct {
	RequestId      *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount     *int                                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize       *int                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber     *int                                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	SignatureInfos *DescribeSignaturesResponseSignatureInfos `json:"SignatureInfos,omitempty" xml:"SignatureInfos,omitempty" require:"true" type:"Struct"`
}

func (s DescribeSignaturesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSignaturesResponse) GoString() string {
	return s.String()
}

func (s *DescribeSignaturesResponse) SetRequestId(v string) *DescribeSignaturesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSignaturesResponse) SetTotalCount(v int) *DescribeSignaturesResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeSignaturesResponse) SetPageSize(v int) *DescribeSignaturesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeSignaturesResponse) SetPageNumber(v int) *DescribeSignaturesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeSignaturesResponse) SetSignatureInfos(v *DescribeSignaturesResponseSignatureInfos) *DescribeSignaturesResponse {
	s.SignatureInfos = v
	return s
}

type DescribeSignaturesResponseSignatureInfos struct {
	SignatureInfo []*DescribeSignaturesResponseSignatureInfosSignatureInfo `json:"SignatureInfo,omitempty" xml:"SignatureInfo,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeSignaturesResponseSignatureInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeSignaturesResponseSignatureInfos) GoString() string {
	return s.String()
}

func (s *DescribeSignaturesResponseSignatureInfos) SetSignatureInfo(v []*DescribeSignaturesResponseSignatureInfosSignatureInfo) *DescribeSignaturesResponseSignatureInfos {
	s.SignatureInfo = v
	return s
}

type DescribeSignaturesResponseSignatureInfosSignatureInfo struct {
	RegionId        *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	SignatureId     *string `json:"SignatureId,omitempty" xml:"SignatureId,omitempty" require:"true"`
	SignatureName   *string `json:"SignatureName,omitempty" xml:"SignatureName,omitempty" require:"true"`
	SignatureKey    *string `json:"SignatureKey,omitempty" xml:"SignatureKey,omitempty" require:"true"`
	SignatureSecret *string `json:"SignatureSecret,omitempty" xml:"SignatureSecret,omitempty" require:"true"`
	CreatedTime     *string `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	ModifiedTime    *string `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
}

func (s DescribeSignaturesResponseSignatureInfosSignatureInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeSignaturesResponseSignatureInfosSignatureInfo) GoString() string {
	return s.String()
}

func (s *DescribeSignaturesResponseSignatureInfosSignatureInfo) SetRegionId(v string) *DescribeSignaturesResponseSignatureInfosSignatureInfo {
	s.RegionId = &v
	return s
}

func (s *DescribeSignaturesResponseSignatureInfosSignatureInfo) SetSignatureId(v string) *DescribeSignaturesResponseSignatureInfosSignatureInfo {
	s.SignatureId = &v
	return s
}

func (s *DescribeSignaturesResponseSignatureInfosSignatureInfo) SetSignatureName(v string) *DescribeSignaturesResponseSignatureInfosSignatureInfo {
	s.SignatureName = &v
	return s
}

func (s *DescribeSignaturesResponseSignatureInfosSignatureInfo) SetSignatureKey(v string) *DescribeSignaturesResponseSignatureInfosSignatureInfo {
	s.SignatureKey = &v
	return s
}

func (s *DescribeSignaturesResponseSignatureInfosSignatureInfo) SetSignatureSecret(v string) *DescribeSignaturesResponseSignatureInfosSignatureInfo {
	s.SignatureSecret = &v
	return s
}

func (s *DescribeSignaturesResponseSignatureInfosSignatureInfo) SetCreatedTime(v string) *DescribeSignaturesResponseSignatureInfosSignatureInfo {
	s.CreatedTime = &v
	return s
}

func (s *DescribeSignaturesResponseSignatureInfosSignatureInfo) SetModifiedTime(v string) *DescribeSignaturesResponseSignatureInfosSignatureInfo {
	s.ModifiedTime = &v
	return s
}

type DescribeRegionsRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	Language      *string `json:"Language,omitempty" xml:"Language,omitempty"`
}

func (s DescribeRegionsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsRequest) GoString() string {
	return s.String()
}

func (s *DescribeRegionsRequest) SetSecurityToken(v string) *DescribeRegionsRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeRegionsRequest) SetLanguage(v string) *DescribeRegionsRequest {
	s.Language = &v
	return s
}

type DescribeRegionsResponse struct {
	RequestId *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Regions   *DescribeRegionsResponseRegions `json:"Regions,omitempty" xml:"Regions,omitempty" require:"true" type:"Struct"`
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

type DescribePurchasedApisRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty"`
	ApiName       *string `json:"ApiName,omitempty" xml:"ApiName,omitempty"`
	Visibility    *string `json:"Visibility,omitempty" xml:"Visibility,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribePurchasedApisRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribePurchasedApisRequest) GoString() string {
	return s.String()
}

func (s *DescribePurchasedApisRequest) SetSecurityToken(v string) *DescribePurchasedApisRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribePurchasedApisRequest) SetGroupId(v string) *DescribePurchasedApisRequest {
	s.GroupId = &v
	return s
}

func (s *DescribePurchasedApisRequest) SetStageName(v string) *DescribePurchasedApisRequest {
	s.StageName = &v
	return s
}

func (s *DescribePurchasedApisRequest) SetApiId(v string) *DescribePurchasedApisRequest {
	s.ApiId = &v
	return s
}

func (s *DescribePurchasedApisRequest) SetApiName(v string) *DescribePurchasedApisRequest {
	s.ApiName = &v
	return s
}

func (s *DescribePurchasedApisRequest) SetVisibility(v string) *DescribePurchasedApisRequest {
	s.Visibility = &v
	return s
}

func (s *DescribePurchasedApisRequest) SetPageSize(v int) *DescribePurchasedApisRequest {
	s.PageSize = &v
	return s
}

func (s *DescribePurchasedApisRequest) SetPageNumber(v int) *DescribePurchasedApisRequest {
	s.PageNumber = &v
	return s
}

type DescribePurchasedApisResponse struct {
	RequestId     *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount    *int                                        `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize      *int                                        `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber    *int                                        `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PurchasedApis *DescribePurchasedApisResponsePurchasedApis `json:"PurchasedApis,omitempty" xml:"PurchasedApis,omitempty" require:"true" type:"Struct"`
}

func (s DescribePurchasedApisResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribePurchasedApisResponse) GoString() string {
	return s.String()
}

func (s *DescribePurchasedApisResponse) SetRequestId(v string) *DescribePurchasedApisResponse {
	s.RequestId = &v
	return s
}

func (s *DescribePurchasedApisResponse) SetTotalCount(v int) *DescribePurchasedApisResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribePurchasedApisResponse) SetPageSize(v int) *DescribePurchasedApisResponse {
	s.PageSize = &v
	return s
}

func (s *DescribePurchasedApisResponse) SetPageNumber(v int) *DescribePurchasedApisResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribePurchasedApisResponse) SetPurchasedApis(v *DescribePurchasedApisResponsePurchasedApis) *DescribePurchasedApisResponse {
	s.PurchasedApis = v
	return s
}

type DescribePurchasedApisResponsePurchasedApis struct {
	PurchasedApi []*DescribePurchasedApisResponsePurchasedApisPurchasedApi `json:"PurchasedApi,omitempty" xml:"PurchasedApi,omitempty" require:"true" type:"Repeated"`
}

func (s DescribePurchasedApisResponsePurchasedApis) String() string {
	return tea.Prettify(s)
}

func (s DescribePurchasedApisResponsePurchasedApis) GoString() string {
	return s.String()
}

func (s *DescribePurchasedApisResponsePurchasedApis) SetPurchasedApi(v []*DescribePurchasedApisResponsePurchasedApisPurchasedApi) *DescribePurchasedApisResponsePurchasedApis {
	s.PurchasedApi = v
	return s
}

type DescribePurchasedApisResponsePurchasedApisPurchasedApi struct {
	RegionId      *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName     *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName       *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	Description   *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	PurchasedTime *string `json:"PurchasedTime,omitempty" xml:"PurchasedTime,omitempty" require:"true"`
	DeployedTime  *string `json:"DeployedTime,omitempty" xml:"DeployedTime,omitempty" require:"true"`
	ModifiedTime  *string `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	Visibility    *string `json:"Visibility,omitempty" xml:"Visibility,omitempty" require:"true"`
}

func (s DescribePurchasedApisResponsePurchasedApisPurchasedApi) String() string {
	return tea.Prettify(s)
}

func (s DescribePurchasedApisResponsePurchasedApisPurchasedApi) GoString() string {
	return s.String()
}

func (s *DescribePurchasedApisResponsePurchasedApisPurchasedApi) SetRegionId(v string) *DescribePurchasedApisResponsePurchasedApisPurchasedApi {
	s.RegionId = &v
	return s
}

func (s *DescribePurchasedApisResponsePurchasedApisPurchasedApi) SetGroupId(v string) *DescribePurchasedApisResponsePurchasedApisPurchasedApi {
	s.GroupId = &v
	return s
}

func (s *DescribePurchasedApisResponsePurchasedApisPurchasedApi) SetGroupName(v string) *DescribePurchasedApisResponsePurchasedApisPurchasedApi {
	s.GroupName = &v
	return s
}

func (s *DescribePurchasedApisResponsePurchasedApisPurchasedApi) SetApiId(v string) *DescribePurchasedApisResponsePurchasedApisPurchasedApi {
	s.ApiId = &v
	return s
}

func (s *DescribePurchasedApisResponsePurchasedApisPurchasedApi) SetApiName(v string) *DescribePurchasedApisResponsePurchasedApisPurchasedApi {
	s.ApiName = &v
	return s
}

func (s *DescribePurchasedApisResponsePurchasedApisPurchasedApi) SetStageName(v string) *DescribePurchasedApisResponsePurchasedApisPurchasedApi {
	s.StageName = &v
	return s
}

func (s *DescribePurchasedApisResponsePurchasedApisPurchasedApi) SetDescription(v string) *DescribePurchasedApisResponsePurchasedApisPurchasedApi {
	s.Description = &v
	return s
}

func (s *DescribePurchasedApisResponsePurchasedApisPurchasedApi) SetPurchasedTime(v string) *DescribePurchasedApisResponsePurchasedApisPurchasedApi {
	s.PurchasedTime = &v
	return s
}

func (s *DescribePurchasedApisResponsePurchasedApisPurchasedApi) SetDeployedTime(v string) *DescribePurchasedApisResponsePurchasedApisPurchasedApi {
	s.DeployedTime = &v
	return s
}

func (s *DescribePurchasedApisResponsePurchasedApisPurchasedApi) SetModifiedTime(v string) *DescribePurchasedApisResponsePurchasedApisPurchasedApi {
	s.ModifiedTime = &v
	return s
}

func (s *DescribePurchasedApisResponsePurchasedApisPurchasedApi) SetVisibility(v string) *DescribePurchasedApisResponsePurchasedApisPurchasedApi {
	s.Visibility = &v
	return s
}

type DescribePurchasedApiGroupsRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribePurchasedApiGroupsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribePurchasedApiGroupsRequest) GoString() string {
	return s.String()
}

func (s *DescribePurchasedApiGroupsRequest) SetSecurityToken(v string) *DescribePurchasedApiGroupsRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribePurchasedApiGroupsRequest) SetPageNumber(v int) *DescribePurchasedApiGroupsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribePurchasedApiGroupsRequest) SetPageSize(v int) *DescribePurchasedApiGroupsRequest {
	s.PageSize = &v
	return s
}

type DescribePurchasedApiGroupsResponse struct {
	RequestId                   *string                                                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount                  *int                                                           `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize                    *int                                                           `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber                  *int                                                           `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PurchasedApiGroupAttributes *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributes `json:"PurchasedApiGroupAttributes,omitempty" xml:"PurchasedApiGroupAttributes,omitempty" require:"true" type:"Struct"`
}

func (s DescribePurchasedApiGroupsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribePurchasedApiGroupsResponse) GoString() string {
	return s.String()
}

func (s *DescribePurchasedApiGroupsResponse) SetRequestId(v string) *DescribePurchasedApiGroupsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribePurchasedApiGroupsResponse) SetTotalCount(v int) *DescribePurchasedApiGroupsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribePurchasedApiGroupsResponse) SetPageSize(v int) *DescribePurchasedApiGroupsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribePurchasedApiGroupsResponse) SetPageNumber(v int) *DescribePurchasedApiGroupsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribePurchasedApiGroupsResponse) SetPurchasedApiGroupAttributes(v *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributes) *DescribePurchasedApiGroupsResponse {
	s.PurchasedApiGroupAttributes = v
	return s
}

type DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributes struct {
	PurchasedApiGroupAttribute []*DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute `json:"PurchasedApiGroupAttribute,omitempty" xml:"PurchasedApiGroupAttribute,omitempty" require:"true" type:"Repeated"`
}

func (s DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributes) String() string {
	return tea.Prettify(s)
}

func (s DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributes) GoString() string {
	return s.String()
}

func (s *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributes) SetPurchasedApiGroupAttribute(v []*DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute) *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributes {
	s.PurchasedApiGroupAttribute = v
	return s
}

type DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute struct {
	GroupId        *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName      *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	Description    *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	PurchasedTime  *string `json:"PurchasedTime,omitempty" xml:"PurchasedTime,omitempty" require:"true"`
	ExpireTime     *string `json:"ExpireTime,omitempty" xml:"ExpireTime,omitempty" require:"true"`
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	BillingType    *string `json:"BillingType,omitempty" xml:"BillingType,omitempty" require:"true"`
	InvokeTimesMax *int64  `json:"InvokeTimesMax,omitempty" xml:"InvokeTimesMax,omitempty" require:"true"`
	InvokeTimesNow *int64  `json:"InvokeTimesNow,omitempty" xml:"InvokeTimesNow,omitempty" require:"true"`
	Status         *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute) String() string {
	return tea.Prettify(s)
}

func (s DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute) GoString() string {
	return s.String()
}

func (s *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute) SetGroupId(v string) *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute {
	s.GroupId = &v
	return s
}

func (s *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute) SetGroupName(v string) *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute {
	s.GroupName = &v
	return s
}

func (s *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute) SetDescription(v string) *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute {
	s.Description = &v
	return s
}

func (s *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute) SetPurchasedTime(v string) *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute {
	s.PurchasedTime = &v
	return s
}

func (s *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute) SetExpireTime(v string) *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute {
	s.ExpireTime = &v
	return s
}

func (s *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute) SetRegionId(v string) *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute {
	s.RegionId = &v
	return s
}

func (s *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute) SetBillingType(v string) *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute {
	s.BillingType = &v
	return s
}

func (s *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute) SetInvokeTimesMax(v int64) *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute {
	s.InvokeTimesMax = &v
	return s
}

func (s *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute) SetInvokeTimesNow(v int64) *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute {
	s.InvokeTimesNow = &v
	return s
}

func (s *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute) SetStatus(v string) *DescribePurchasedApiGroupsResponsePurchasedApiGroupAttributesPurchasedApiGroupAttribute {
	s.Status = &v
	return s
}

type DescribePurchasedApiGroupRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
}

func (s DescribePurchasedApiGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribePurchasedApiGroupRequest) GoString() string {
	return s.String()
}

func (s *DescribePurchasedApiGroupRequest) SetSecurityToken(v string) *DescribePurchasedApiGroupRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribePurchasedApiGroupRequest) SetGroupId(v string) *DescribePurchasedApiGroupRequest {
	s.GroupId = &v
	return s
}

type DescribePurchasedApiGroupResponse struct {
	RequestId     *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	GroupId       *string                                   `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName     *string                                   `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	Description   *string                                   `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	PurchasedTime *string                                   `json:"PurchasedTime,omitempty" xml:"PurchasedTime,omitempty" require:"true"`
	RegionId      *string                                   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Status        *string                                   `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Domains       *DescribePurchasedApiGroupResponseDomains `json:"Domains,omitempty" xml:"Domains,omitempty" require:"true" type:"Struct"`
}

func (s DescribePurchasedApiGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribePurchasedApiGroupResponse) GoString() string {
	return s.String()
}

func (s *DescribePurchasedApiGroupResponse) SetRequestId(v string) *DescribePurchasedApiGroupResponse {
	s.RequestId = &v
	return s
}

func (s *DescribePurchasedApiGroupResponse) SetGroupId(v string) *DescribePurchasedApiGroupResponse {
	s.GroupId = &v
	return s
}

func (s *DescribePurchasedApiGroupResponse) SetGroupName(v string) *DescribePurchasedApiGroupResponse {
	s.GroupName = &v
	return s
}

func (s *DescribePurchasedApiGroupResponse) SetDescription(v string) *DescribePurchasedApiGroupResponse {
	s.Description = &v
	return s
}

func (s *DescribePurchasedApiGroupResponse) SetPurchasedTime(v string) *DescribePurchasedApiGroupResponse {
	s.PurchasedTime = &v
	return s
}

func (s *DescribePurchasedApiGroupResponse) SetRegionId(v string) *DescribePurchasedApiGroupResponse {
	s.RegionId = &v
	return s
}

func (s *DescribePurchasedApiGroupResponse) SetStatus(v string) *DescribePurchasedApiGroupResponse {
	s.Status = &v
	return s
}

func (s *DescribePurchasedApiGroupResponse) SetDomains(v *DescribePurchasedApiGroupResponseDomains) *DescribePurchasedApiGroupResponse {
	s.Domains = v
	return s
}

type DescribePurchasedApiGroupResponseDomains struct {
	DomainItem []*DescribePurchasedApiGroupResponseDomainsDomainItem `json:"DomainItem,omitempty" xml:"DomainItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribePurchasedApiGroupResponseDomains) String() string {
	return tea.Prettify(s)
}

func (s DescribePurchasedApiGroupResponseDomains) GoString() string {
	return s.String()
}

func (s *DescribePurchasedApiGroupResponseDomains) SetDomainItem(v []*DescribePurchasedApiGroupResponseDomainsDomainItem) *DescribePurchasedApiGroupResponseDomains {
	s.DomainItem = v
	return s
}

type DescribePurchasedApiGroupResponseDomainsDomainItem struct {
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s DescribePurchasedApiGroupResponseDomainsDomainItem) String() string {
	return tea.Prettify(s)
}

func (s DescribePurchasedApiGroupResponseDomainsDomainItem) GoString() string {
	return s.String()
}

func (s *DescribePurchasedApiGroupResponseDomainsDomainItem) SetDomainName(v string) *DescribePurchasedApiGroupResponseDomainsDomainItem {
	s.DomainName = &v
	return s
}

type DescribeHistoryApisRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty"`
	ApiName       *string `json:"ApiName,omitempty" xml:"ApiName,omitempty"`
	PageSize      *string `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber    *string `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeHistoryApisRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeHistoryApisRequest) GoString() string {
	return s.String()
}

func (s *DescribeHistoryApisRequest) SetSecurityToken(v string) *DescribeHistoryApisRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeHistoryApisRequest) SetGroupId(v string) *DescribeHistoryApisRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeHistoryApisRequest) SetStageName(v string) *DescribeHistoryApisRequest {
	s.StageName = &v
	return s
}

func (s *DescribeHistoryApisRequest) SetApiId(v string) *DescribeHistoryApisRequest {
	s.ApiId = &v
	return s
}

func (s *DescribeHistoryApisRequest) SetApiName(v string) *DescribeHistoryApisRequest {
	s.ApiName = &v
	return s
}

func (s *DescribeHistoryApisRequest) SetPageSize(v string) *DescribeHistoryApisRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeHistoryApisRequest) SetPageNumber(v string) *DescribeHistoryApisRequest {
	s.PageNumber = &v
	return s
}

type DescribeHistoryApisResponse struct {
	RequestId   *string                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount  *int                                    `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize    *int                                    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber  *int                                    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	ApiHisItems *DescribeHistoryApisResponseApiHisItems `json:"ApiHisItems,omitempty" xml:"ApiHisItems,omitempty" require:"true" type:"Struct"`
}

func (s DescribeHistoryApisResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeHistoryApisResponse) GoString() string {
	return s.String()
}

func (s *DescribeHistoryApisResponse) SetRequestId(v string) *DescribeHistoryApisResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeHistoryApisResponse) SetTotalCount(v int) *DescribeHistoryApisResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeHistoryApisResponse) SetPageSize(v int) *DescribeHistoryApisResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeHistoryApisResponse) SetPageNumber(v int) *DescribeHistoryApisResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeHistoryApisResponse) SetApiHisItems(v *DescribeHistoryApisResponseApiHisItems) *DescribeHistoryApisResponse {
	s.ApiHisItems = v
	return s
}

type DescribeHistoryApisResponseApiHisItems struct {
	ApiHisItem []*DescribeHistoryApisResponseApiHisItemsApiHisItem `json:"ApiHisItem,omitempty" xml:"ApiHisItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeHistoryApisResponseApiHisItems) String() string {
	return tea.Prettify(s)
}

func (s DescribeHistoryApisResponseApiHisItems) GoString() string {
	return s.String()
}

func (s *DescribeHistoryApisResponseApiHisItems) SetApiHisItem(v []*DescribeHistoryApisResponseApiHisItemsApiHisItem) *DescribeHistoryApisResponseApiHisItems {
	s.ApiHisItem = v
	return s
}

type DescribeHistoryApisResponseApiHisItemsApiHisItem struct {
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ApiId          *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName        *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	GroupId        *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName      *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	StageName      *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	HistoryVersion *string `json:"HistoryVersion,omitempty" xml:"HistoryVersion,omitempty" require:"true"`
	Status         *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Description    *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	DeployedTime   *string `json:"DeployedTime,omitempty" xml:"DeployedTime,omitempty" require:"true"`
}

func (s DescribeHistoryApisResponseApiHisItemsApiHisItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeHistoryApisResponseApiHisItemsApiHisItem) GoString() string {
	return s.String()
}

func (s *DescribeHistoryApisResponseApiHisItemsApiHisItem) SetRegionId(v string) *DescribeHistoryApisResponseApiHisItemsApiHisItem {
	s.RegionId = &v
	return s
}

func (s *DescribeHistoryApisResponseApiHisItemsApiHisItem) SetApiId(v string) *DescribeHistoryApisResponseApiHisItemsApiHisItem {
	s.ApiId = &v
	return s
}

func (s *DescribeHistoryApisResponseApiHisItemsApiHisItem) SetApiName(v string) *DescribeHistoryApisResponseApiHisItemsApiHisItem {
	s.ApiName = &v
	return s
}

func (s *DescribeHistoryApisResponseApiHisItemsApiHisItem) SetGroupId(v string) *DescribeHistoryApisResponseApiHisItemsApiHisItem {
	s.GroupId = &v
	return s
}

func (s *DescribeHistoryApisResponseApiHisItemsApiHisItem) SetGroupName(v string) *DescribeHistoryApisResponseApiHisItemsApiHisItem {
	s.GroupName = &v
	return s
}

func (s *DescribeHistoryApisResponseApiHisItemsApiHisItem) SetStageName(v string) *DescribeHistoryApisResponseApiHisItemsApiHisItem {
	s.StageName = &v
	return s
}

func (s *DescribeHistoryApisResponseApiHisItemsApiHisItem) SetHistoryVersion(v string) *DescribeHistoryApisResponseApiHisItemsApiHisItem {
	s.HistoryVersion = &v
	return s
}

func (s *DescribeHistoryApisResponseApiHisItemsApiHisItem) SetStatus(v string) *DescribeHistoryApisResponseApiHisItemsApiHisItem {
	s.Status = &v
	return s
}

func (s *DescribeHistoryApisResponseApiHisItemsApiHisItem) SetDescription(v string) *DescribeHistoryApisResponseApiHisItemsApiHisItem {
	s.Description = &v
	return s
}

func (s *DescribeHistoryApisResponseApiHisItemsApiHisItem) SetDeployedTime(v string) *DescribeHistoryApisResponseApiHisItemsApiHisItem {
	s.DeployedTime = &v
	return s
}

type DescribeDomainsResolutionRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	DomainNames   *string `json:"DomainNames,omitempty" xml:"DomainNames,omitempty" require:"true"`
}

func (s DescribeDomainsResolutionRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainsResolutionRequest) GoString() string {
	return s.String()
}

func (s *DescribeDomainsResolutionRequest) SetSecurityToken(v string) *DescribeDomainsResolutionRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeDomainsResolutionRequest) SetGroupId(v string) *DescribeDomainsResolutionRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeDomainsResolutionRequest) SetDomainNames(v string) *DescribeDomainsResolutionRequest {
	s.DomainNames = &v
	return s
}

type DescribeDomainsResolutionResponse struct {
	RequestId         *string                                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	GroupId           *string                                             `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	DomainResolutions *DescribeDomainsResolutionResponseDomainResolutions `json:"DomainResolutions,omitempty" xml:"DomainResolutions,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDomainsResolutionResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainsResolutionResponse) GoString() string {
	return s.String()
}

func (s *DescribeDomainsResolutionResponse) SetRequestId(v string) *DescribeDomainsResolutionResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDomainsResolutionResponse) SetGroupId(v string) *DescribeDomainsResolutionResponse {
	s.GroupId = &v
	return s
}

func (s *DescribeDomainsResolutionResponse) SetDomainResolutions(v *DescribeDomainsResolutionResponseDomainResolutions) *DescribeDomainsResolutionResponse {
	s.DomainResolutions = v
	return s
}

type DescribeDomainsResolutionResponseDomainResolutions struct {
	DomainResolution []*DescribeDomainsResolutionResponseDomainResolutionsDomainResolution `json:"DomainResolution,omitempty" xml:"DomainResolution,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDomainsResolutionResponseDomainResolutions) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainsResolutionResponseDomainResolutions) GoString() string {
	return s.String()
}

func (s *DescribeDomainsResolutionResponseDomainResolutions) SetDomainResolution(v []*DescribeDomainsResolutionResponseDomainResolutionsDomainResolution) *DescribeDomainsResolutionResponseDomainResolutions {
	s.DomainResolution = v
	return s
}

type DescribeDomainsResolutionResponseDomainResolutionsDomainResolution struct {
	DomainName             *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	DomainResolutionStatus *string `json:"DomainResolutionStatus,omitempty" xml:"DomainResolutionStatus,omitempty" require:"true"`
}

func (s DescribeDomainsResolutionResponseDomainResolutionsDomainResolution) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainsResolutionResponseDomainResolutionsDomainResolution) GoString() string {
	return s.String()
}

func (s *DescribeDomainsResolutionResponseDomainResolutionsDomainResolution) SetDomainName(v string) *DescribeDomainsResolutionResponseDomainResolutionsDomainResolution {
	s.DomainName = &v
	return s
}

func (s *DescribeDomainsResolutionResponseDomainResolutionsDomainResolution) SetDomainResolutionStatus(v string) *DescribeDomainsResolutionResponseDomainResolutionsDomainResolution {
	s.DomainResolutionStatus = &v
	return s
}

type DescribeDomainRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	DomainName    *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s DescribeDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainRequest) GoString() string {
	return s.String()
}

func (s *DescribeDomainRequest) SetSecurityToken(v string) *DescribeDomainRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeDomainRequest) SetGroupId(v string) *DescribeDomainRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeDomainRequest) SetDomainName(v string) *DescribeDomainRequest {
	s.DomainName = &v
	return s
}

type DescribeDomainResponse struct {
	RequestId             *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	GroupId               *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	DomainName            *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	SubDomain             *string `json:"SubDomain,omitempty" xml:"SubDomain,omitempty" require:"true"`
	CertificateId         *string `json:"CertificateId,omitempty" xml:"CertificateId,omitempty" require:"true"`
	CertificateName       *string `json:"CertificateName,omitempty" xml:"CertificateName,omitempty" require:"true"`
	CertificateBody       *string `json:"CertificateBody,omitempty" xml:"CertificateBody,omitempty" require:"true"`
	CertificatePrivateKey *string `json:"CertificatePrivateKey,omitempty" xml:"CertificatePrivateKey,omitempty" require:"true"`
	DomainBindingStatus   *string `json:"DomainBindingStatus,omitempty" xml:"DomainBindingStatus,omitempty" require:"true"`
	DomainCNAMEStatus     *string `json:"DomainCNAMEStatus,omitempty" xml:"DomainCNAMEStatus,omitempty" require:"true"`
	DomainLegalStatus     *string `json:"DomainLegalStatus,omitempty" xml:"DomainLegalStatus,omitempty" require:"true"`
	DomainWebSocketStatus *string `json:"DomainWebSocketStatus,omitempty" xml:"DomainWebSocketStatus,omitempty" require:"true"`
	DomainRemark          *string `json:"DomainRemark,omitempty" xml:"DomainRemark,omitempty" require:"true"`
}

func (s DescribeDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDomainResponse) GoString() string {
	return s.String()
}

func (s *DescribeDomainResponse) SetRequestId(v string) *DescribeDomainResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDomainResponse) SetGroupId(v string) *DescribeDomainResponse {
	s.GroupId = &v
	return s
}

func (s *DescribeDomainResponse) SetDomainName(v string) *DescribeDomainResponse {
	s.DomainName = &v
	return s
}

func (s *DescribeDomainResponse) SetSubDomain(v string) *DescribeDomainResponse {
	s.SubDomain = &v
	return s
}

func (s *DescribeDomainResponse) SetCertificateId(v string) *DescribeDomainResponse {
	s.CertificateId = &v
	return s
}

func (s *DescribeDomainResponse) SetCertificateName(v string) *DescribeDomainResponse {
	s.CertificateName = &v
	return s
}

func (s *DescribeDomainResponse) SetCertificateBody(v string) *DescribeDomainResponse {
	s.CertificateBody = &v
	return s
}

func (s *DescribeDomainResponse) SetCertificatePrivateKey(v string) *DescribeDomainResponse {
	s.CertificatePrivateKey = &v
	return s
}

func (s *DescribeDomainResponse) SetDomainBindingStatus(v string) *DescribeDomainResponse {
	s.DomainBindingStatus = &v
	return s
}

func (s *DescribeDomainResponse) SetDomainCNAMEStatus(v string) *DescribeDomainResponse {
	s.DomainCNAMEStatus = &v
	return s
}

func (s *DescribeDomainResponse) SetDomainLegalStatus(v string) *DescribeDomainResponse {
	s.DomainLegalStatus = &v
	return s
}

func (s *DescribeDomainResponse) SetDomainWebSocketStatus(v string) *DescribeDomainResponse {
	s.DomainWebSocketStatus = &v
	return s
}

func (s *DescribeDomainResponse) SetDomainRemark(v string) *DescribeDomainResponse {
	s.DomainRemark = &v
	return s
}

type DescribeDeployedApisRequest struct {
	SecurityToken *string                           `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string                           `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	StageName     *string                           `json:"StageName,omitempty" xml:"StageName,omitempty"`
	ApiId         *string                           `json:"ApiId,omitempty" xml:"ApiId,omitempty"`
	ApiName       *string                           `json:"ApiName,omitempty" xml:"ApiName,omitempty"`
	PageNumber    *int                              `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int                              `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	Tag           []*DescribeDeployedApisRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
	EnableTagAuth *bool                             `json:"EnableTagAuth,omitempty" xml:"EnableTagAuth,omitempty"`
}

func (s DescribeDeployedApisRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApisRequest) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApisRequest) SetSecurityToken(v string) *DescribeDeployedApisRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeDeployedApisRequest) SetGroupId(v string) *DescribeDeployedApisRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeDeployedApisRequest) SetStageName(v string) *DescribeDeployedApisRequest {
	s.StageName = &v
	return s
}

func (s *DescribeDeployedApisRequest) SetApiId(v string) *DescribeDeployedApisRequest {
	s.ApiId = &v
	return s
}

func (s *DescribeDeployedApisRequest) SetApiName(v string) *DescribeDeployedApisRequest {
	s.ApiName = &v
	return s
}

func (s *DescribeDeployedApisRequest) SetPageNumber(v int) *DescribeDeployedApisRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeDeployedApisRequest) SetPageSize(v int) *DescribeDeployedApisRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeDeployedApisRequest) SetTag(v []*DescribeDeployedApisRequestTag) *DescribeDeployedApisRequest {
	s.Tag = v
	return s
}

func (s *DescribeDeployedApisRequest) SetEnableTagAuth(v bool) *DescribeDeployedApisRequest {
	s.EnableTagAuth = &v
	return s
}

type DescribeDeployedApisRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeDeployedApisRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApisRequestTag) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApisRequestTag) SetKey(v string) *DescribeDeployedApisRequestTag {
	s.Key = &v
	return s
}

func (s *DescribeDeployedApisRequestTag) SetValue(v string) *DescribeDeployedApisRequestTag {
	s.Value = &v
	return s
}

type DescribeDeployedApisResponse struct {
	RequestId    *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount   *int                                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize     *int                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber   *int                                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	DeployedApis *DescribeDeployedApisResponseDeployedApis `json:"DeployedApis,omitempty" xml:"DeployedApis,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDeployedApisResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApisResponse) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApisResponse) SetRequestId(v string) *DescribeDeployedApisResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDeployedApisResponse) SetTotalCount(v int) *DescribeDeployedApisResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeDeployedApisResponse) SetPageSize(v int) *DescribeDeployedApisResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeDeployedApisResponse) SetPageNumber(v int) *DescribeDeployedApisResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeDeployedApisResponse) SetDeployedApis(v *DescribeDeployedApisResponseDeployedApis) *DescribeDeployedApisResponse {
	s.DeployedApis = v
	return s
}

type DescribeDeployedApisResponseDeployedApis struct {
	DeployedApiItem []*DescribeDeployedApisResponseDeployedApisDeployedApiItem `json:"DeployedApiItem,omitempty" xml:"DeployedApiItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDeployedApisResponseDeployedApis) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApisResponseDeployedApis) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApisResponseDeployedApis) SetDeployedApiItem(v []*DescribeDeployedApisResponseDeployedApisDeployedApiItem) *DescribeDeployedApisResponseDeployedApis {
	s.DeployedApiItem = v
	return s
}

type DescribeDeployedApisResponseDeployedApisDeployedApiItem struct {
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ApiId        *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName      *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	GroupId      *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName    *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	StageName    *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	Visibility   *string `json:"Visibility,omitempty" xml:"Visibility,omitempty" require:"true"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	DeployedTime *string `json:"DeployedTime,omitempty" xml:"DeployedTime,omitempty" require:"true"`
}

func (s DescribeDeployedApisResponseDeployedApisDeployedApiItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApisResponseDeployedApisDeployedApiItem) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApisResponseDeployedApisDeployedApiItem) SetRegionId(v string) *DescribeDeployedApisResponseDeployedApisDeployedApiItem {
	s.RegionId = &v
	return s
}

func (s *DescribeDeployedApisResponseDeployedApisDeployedApiItem) SetApiId(v string) *DescribeDeployedApisResponseDeployedApisDeployedApiItem {
	s.ApiId = &v
	return s
}

func (s *DescribeDeployedApisResponseDeployedApisDeployedApiItem) SetApiName(v string) *DescribeDeployedApisResponseDeployedApisDeployedApiItem {
	s.ApiName = &v
	return s
}

func (s *DescribeDeployedApisResponseDeployedApisDeployedApiItem) SetGroupId(v string) *DescribeDeployedApisResponseDeployedApisDeployedApiItem {
	s.GroupId = &v
	return s
}

func (s *DescribeDeployedApisResponseDeployedApisDeployedApiItem) SetGroupName(v string) *DescribeDeployedApisResponseDeployedApisDeployedApiItem {
	s.GroupName = &v
	return s
}

func (s *DescribeDeployedApisResponseDeployedApisDeployedApiItem) SetStageName(v string) *DescribeDeployedApisResponseDeployedApisDeployedApiItem {
	s.StageName = &v
	return s
}

func (s *DescribeDeployedApisResponseDeployedApisDeployedApiItem) SetVisibility(v string) *DescribeDeployedApisResponseDeployedApisDeployedApiItem {
	s.Visibility = &v
	return s
}

func (s *DescribeDeployedApisResponseDeployedApisDeployedApiItem) SetDescription(v string) *DescribeDeployedApisResponseDeployedApisDeployedApiItem {
	s.Description = &v
	return s
}

func (s *DescribeDeployedApisResponseDeployedApisDeployedApiItem) SetDeployedTime(v string) *DescribeDeployedApisResponseDeployedApisDeployedApiItem {
	s.DeployedTime = &v
	return s
}

type DescribeDeployedApiRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
}

func (s DescribeDeployedApiRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiRequest) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiRequest) SetSecurityToken(v string) *DescribeDeployedApiRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeDeployedApiRequest) SetGroupId(v string) *DescribeDeployedApiRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeDeployedApiRequest) SetApiId(v string) *DescribeDeployedApiRequest {
	s.ApiId = &v
	return s
}

func (s *DescribeDeployedApiRequest) SetStageName(v string) *DescribeDeployedApiRequest {
	s.StageName = &v
	return s
}

type DescribeDeployedApiResponse struct {
	RequestId              *string                                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RegionId               *string                                            `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	GroupId                *string                                            `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName              *string                                            `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	StageName              *string                                            `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	ApiId                  *string                                            `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName                *string                                            `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	Description            *string                                            `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Visibility             *string                                            `json:"Visibility,omitempty" xml:"Visibility,omitempty" require:"true"`
	AuthType               *string                                            `json:"AuthType,omitempty" xml:"AuthType,omitempty" require:"true"`
	ResultType             *string                                            `json:"ResultType,omitempty" xml:"ResultType,omitempty" require:"true"`
	ResultSample           *string                                            `json:"ResultSample,omitempty" xml:"ResultSample,omitempty" require:"true"`
	FailResultSample       *string                                            `json:"FailResultSample,omitempty" xml:"FailResultSample,omitempty" require:"true"`
	DeployedTime           *string                                            `json:"DeployedTime,omitempty" xml:"DeployedTime,omitempty" require:"true"`
	AllowSignatureMethod   *string                                            `json:"AllowSignatureMethod,omitempty" xml:"AllowSignatureMethod,omitempty" require:"true"`
	ResultBodyModel        *string                                            `json:"ResultBodyModel,omitempty" xml:"ResultBodyModel,omitempty" require:"true"`
	ForceNonceCheck        *bool                                              `json:"ForceNonceCheck,omitempty" xml:"ForceNonceCheck,omitempty" require:"true"`
	DisableInternet        *bool                                              `json:"DisableInternet,omitempty" xml:"DisableInternet,omitempty" require:"true"`
	ErrorCodeSamples       *DescribeDeployedApiResponseErrorCodeSamples       `json:"ErrorCodeSamples,omitempty" xml:"ErrorCodeSamples,omitempty" require:"true" type:"Struct"`
	ResultDescriptions     *DescribeDeployedApiResponseResultDescriptions     `json:"ResultDescriptions,omitempty" xml:"ResultDescriptions,omitempty" require:"true" type:"Struct"`
	SystemParameters       *DescribeDeployedApiResponseSystemParameters       `json:"SystemParameters,omitempty" xml:"SystemParameters,omitempty" require:"true" type:"Struct"`
	CustomSystemParameters *DescribeDeployedApiResponseCustomSystemParameters `json:"CustomSystemParameters,omitempty" xml:"CustomSystemParameters,omitempty" require:"true" type:"Struct"`
	ConstantParameters     *DescribeDeployedApiResponseConstantParameters     `json:"ConstantParameters,omitempty" xml:"ConstantParameters,omitempty" require:"true" type:"Struct"`
	RequestParameters      *DescribeDeployedApiResponseRequestParameters      `json:"RequestParameters,omitempty" xml:"RequestParameters,omitempty" require:"true" type:"Struct"`
	ServiceParameters      *DescribeDeployedApiResponseServiceParameters      `json:"ServiceParameters,omitempty" xml:"ServiceParameters,omitempty" require:"true" type:"Struct"`
	ServiceParametersMap   *DescribeDeployedApiResponseServiceParametersMap   `json:"ServiceParametersMap,omitempty" xml:"ServiceParametersMap,omitempty" require:"true" type:"Struct"`
	RequestConfig          *DescribeDeployedApiResponseRequestConfig          `json:"RequestConfig,omitempty" xml:"RequestConfig,omitempty" require:"true" type:"Struct"`
	ServiceConfig          *DescribeDeployedApiResponseServiceConfig          `json:"ServiceConfig,omitempty" xml:"ServiceConfig,omitempty" require:"true" type:"Struct"`
	OpenIdConnectConfig    *DescribeDeployedApiResponseOpenIdConnectConfig    `json:"OpenIdConnectConfig,omitempty" xml:"OpenIdConnectConfig,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDeployedApiResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponse) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponse) SetRequestId(v string) *DescribeDeployedApiResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetRegionId(v string) *DescribeDeployedApiResponse {
	s.RegionId = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetGroupId(v string) *DescribeDeployedApiResponse {
	s.GroupId = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetGroupName(v string) *DescribeDeployedApiResponse {
	s.GroupName = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetStageName(v string) *DescribeDeployedApiResponse {
	s.StageName = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetApiId(v string) *DescribeDeployedApiResponse {
	s.ApiId = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetApiName(v string) *DescribeDeployedApiResponse {
	s.ApiName = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetDescription(v string) *DescribeDeployedApiResponse {
	s.Description = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetVisibility(v string) *DescribeDeployedApiResponse {
	s.Visibility = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetAuthType(v string) *DescribeDeployedApiResponse {
	s.AuthType = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetResultType(v string) *DescribeDeployedApiResponse {
	s.ResultType = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetResultSample(v string) *DescribeDeployedApiResponse {
	s.ResultSample = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetFailResultSample(v string) *DescribeDeployedApiResponse {
	s.FailResultSample = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetDeployedTime(v string) *DescribeDeployedApiResponse {
	s.DeployedTime = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetAllowSignatureMethod(v string) *DescribeDeployedApiResponse {
	s.AllowSignatureMethod = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetResultBodyModel(v string) *DescribeDeployedApiResponse {
	s.ResultBodyModel = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetForceNonceCheck(v bool) *DescribeDeployedApiResponse {
	s.ForceNonceCheck = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetDisableInternet(v bool) *DescribeDeployedApiResponse {
	s.DisableInternet = &v
	return s
}

func (s *DescribeDeployedApiResponse) SetErrorCodeSamples(v *DescribeDeployedApiResponseErrorCodeSamples) *DescribeDeployedApiResponse {
	s.ErrorCodeSamples = v
	return s
}

func (s *DescribeDeployedApiResponse) SetResultDescriptions(v *DescribeDeployedApiResponseResultDescriptions) *DescribeDeployedApiResponse {
	s.ResultDescriptions = v
	return s
}

func (s *DescribeDeployedApiResponse) SetSystemParameters(v *DescribeDeployedApiResponseSystemParameters) *DescribeDeployedApiResponse {
	s.SystemParameters = v
	return s
}

func (s *DescribeDeployedApiResponse) SetCustomSystemParameters(v *DescribeDeployedApiResponseCustomSystemParameters) *DescribeDeployedApiResponse {
	s.CustomSystemParameters = v
	return s
}

func (s *DescribeDeployedApiResponse) SetConstantParameters(v *DescribeDeployedApiResponseConstantParameters) *DescribeDeployedApiResponse {
	s.ConstantParameters = v
	return s
}

func (s *DescribeDeployedApiResponse) SetRequestParameters(v *DescribeDeployedApiResponseRequestParameters) *DescribeDeployedApiResponse {
	s.RequestParameters = v
	return s
}

func (s *DescribeDeployedApiResponse) SetServiceParameters(v *DescribeDeployedApiResponseServiceParameters) *DescribeDeployedApiResponse {
	s.ServiceParameters = v
	return s
}

func (s *DescribeDeployedApiResponse) SetServiceParametersMap(v *DescribeDeployedApiResponseServiceParametersMap) *DescribeDeployedApiResponse {
	s.ServiceParametersMap = v
	return s
}

func (s *DescribeDeployedApiResponse) SetRequestConfig(v *DescribeDeployedApiResponseRequestConfig) *DescribeDeployedApiResponse {
	s.RequestConfig = v
	return s
}

func (s *DescribeDeployedApiResponse) SetServiceConfig(v *DescribeDeployedApiResponseServiceConfig) *DescribeDeployedApiResponse {
	s.ServiceConfig = v
	return s
}

func (s *DescribeDeployedApiResponse) SetOpenIdConnectConfig(v *DescribeDeployedApiResponseOpenIdConnectConfig) *DescribeDeployedApiResponse {
	s.OpenIdConnectConfig = v
	return s
}

type DescribeDeployedApiResponseErrorCodeSamples struct {
	ErrorCodeSample []*DescribeDeployedApiResponseErrorCodeSamplesErrorCodeSample `json:"ErrorCodeSample,omitempty" xml:"ErrorCodeSample,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDeployedApiResponseErrorCodeSamples) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseErrorCodeSamples) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseErrorCodeSamples) SetErrorCodeSample(v []*DescribeDeployedApiResponseErrorCodeSamplesErrorCodeSample) *DescribeDeployedApiResponseErrorCodeSamples {
	s.ErrorCodeSample = v
	return s
}

type DescribeDeployedApiResponseErrorCodeSamplesErrorCodeSample struct {
	Code        *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message     *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeDeployedApiResponseErrorCodeSamplesErrorCodeSample) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseErrorCodeSamplesErrorCodeSample) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseErrorCodeSamplesErrorCodeSample) SetCode(v string) *DescribeDeployedApiResponseErrorCodeSamplesErrorCodeSample {
	s.Code = &v
	return s
}

func (s *DescribeDeployedApiResponseErrorCodeSamplesErrorCodeSample) SetMessage(v string) *DescribeDeployedApiResponseErrorCodeSamplesErrorCodeSample {
	s.Message = &v
	return s
}

func (s *DescribeDeployedApiResponseErrorCodeSamplesErrorCodeSample) SetDescription(v string) *DescribeDeployedApiResponseErrorCodeSamplesErrorCodeSample {
	s.Description = &v
	return s
}

type DescribeDeployedApiResponseResultDescriptions struct {
	ResultDescription []*DescribeDeployedApiResponseResultDescriptionsResultDescription `json:"ResultDescription,omitempty" xml:"ResultDescription,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDeployedApiResponseResultDescriptions) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseResultDescriptions) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseResultDescriptions) SetResultDescription(v []*DescribeDeployedApiResponseResultDescriptionsResultDescription) *DescribeDeployedApiResponseResultDescriptions {
	s.ResultDescription = v
	return s
}

type DescribeDeployedApiResponseResultDescriptionsResultDescription struct {
	Id          *string `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Pid         *string `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
	HasChild    *bool   `json:"HasChild,omitempty" xml:"HasChild,omitempty" require:"true"`
	Key         *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Name        *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Mandatory   *bool   `json:"Mandatory,omitempty" xml:"Mandatory,omitempty" require:"true"`
	Type        *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeDeployedApiResponseResultDescriptionsResultDescription) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseResultDescriptionsResultDescription) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseResultDescriptionsResultDescription) SetId(v string) *DescribeDeployedApiResponseResultDescriptionsResultDescription {
	s.Id = &v
	return s
}

func (s *DescribeDeployedApiResponseResultDescriptionsResultDescription) SetPid(v string) *DescribeDeployedApiResponseResultDescriptionsResultDescription {
	s.Pid = &v
	return s
}

func (s *DescribeDeployedApiResponseResultDescriptionsResultDescription) SetHasChild(v bool) *DescribeDeployedApiResponseResultDescriptionsResultDescription {
	s.HasChild = &v
	return s
}

func (s *DescribeDeployedApiResponseResultDescriptionsResultDescription) SetKey(v string) *DescribeDeployedApiResponseResultDescriptionsResultDescription {
	s.Key = &v
	return s
}

func (s *DescribeDeployedApiResponseResultDescriptionsResultDescription) SetName(v string) *DescribeDeployedApiResponseResultDescriptionsResultDescription {
	s.Name = &v
	return s
}

func (s *DescribeDeployedApiResponseResultDescriptionsResultDescription) SetMandatory(v bool) *DescribeDeployedApiResponseResultDescriptionsResultDescription {
	s.Mandatory = &v
	return s
}

func (s *DescribeDeployedApiResponseResultDescriptionsResultDescription) SetType(v string) *DescribeDeployedApiResponseResultDescriptionsResultDescription {
	s.Type = &v
	return s
}

func (s *DescribeDeployedApiResponseResultDescriptionsResultDescription) SetDescription(v string) *DescribeDeployedApiResponseResultDescriptionsResultDescription {
	s.Description = &v
	return s
}

type DescribeDeployedApiResponseSystemParameters struct {
	SystemParameter []*DescribeDeployedApiResponseSystemParametersSystemParameter `json:"SystemParameter,omitempty" xml:"SystemParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDeployedApiResponseSystemParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseSystemParameters) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseSystemParameters) SetSystemParameter(v []*DescribeDeployedApiResponseSystemParametersSystemParameter) *DescribeDeployedApiResponseSystemParameters {
	s.SystemParameter = v
	return s
}

type DescribeDeployedApiResponseSystemParametersSystemParameter struct {
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	Location             *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	DemoValue            *string `json:"DemoValue,omitempty" xml:"DemoValue,omitempty" require:"true"`
	Description          *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeDeployedApiResponseSystemParametersSystemParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseSystemParametersSystemParameter) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseSystemParametersSystemParameter) SetParameterName(v string) *DescribeDeployedApiResponseSystemParametersSystemParameter {
	s.ParameterName = &v
	return s
}

func (s *DescribeDeployedApiResponseSystemParametersSystemParameter) SetServiceParameterName(v string) *DescribeDeployedApiResponseSystemParametersSystemParameter {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeDeployedApiResponseSystemParametersSystemParameter) SetLocation(v string) *DescribeDeployedApiResponseSystemParametersSystemParameter {
	s.Location = &v
	return s
}

func (s *DescribeDeployedApiResponseSystemParametersSystemParameter) SetDemoValue(v string) *DescribeDeployedApiResponseSystemParametersSystemParameter {
	s.DemoValue = &v
	return s
}

func (s *DescribeDeployedApiResponseSystemParametersSystemParameter) SetDescription(v string) *DescribeDeployedApiResponseSystemParametersSystemParameter {
	s.Description = &v
	return s
}

type DescribeDeployedApiResponseCustomSystemParameters struct {
	CustomSystemParameter []*DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter `json:"CustomSystemParameter,omitempty" xml:"CustomSystemParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDeployedApiResponseCustomSystemParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseCustomSystemParameters) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseCustomSystemParameters) SetCustomSystemParameter(v []*DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter) *DescribeDeployedApiResponseCustomSystemParameters {
	s.CustomSystemParameter = v
	return s
}

type DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter struct {
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	Location             *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	DemoValue            *string `json:"DemoValue,omitempty" xml:"DemoValue,omitempty" require:"true"`
	Description          *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter) SetParameterName(v string) *DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter {
	s.ParameterName = &v
	return s
}

func (s *DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter) SetServiceParameterName(v string) *DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter) SetLocation(v string) *DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter {
	s.Location = &v
	return s
}

func (s *DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter) SetDemoValue(v string) *DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter {
	s.DemoValue = &v
	return s
}

func (s *DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter) SetDescription(v string) *DescribeDeployedApiResponseCustomSystemParametersCustomSystemParameter {
	s.Description = &v
	return s
}

type DescribeDeployedApiResponseConstantParameters struct {
	ConstantParameter []*DescribeDeployedApiResponseConstantParametersConstantParameter `json:"ConstantParameter,omitempty" xml:"ConstantParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDeployedApiResponseConstantParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseConstantParameters) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseConstantParameters) SetConstantParameter(v []*DescribeDeployedApiResponseConstantParametersConstantParameter) *DescribeDeployedApiResponseConstantParameters {
	s.ConstantParameter = v
	return s
}

type DescribeDeployedApiResponseConstantParametersConstantParameter struct {
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	ConstantValue        *string `json:"ConstantValue,omitempty" xml:"ConstantValue,omitempty" require:"true"`
	Location             *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	Description          *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeDeployedApiResponseConstantParametersConstantParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseConstantParametersConstantParameter) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseConstantParametersConstantParameter) SetServiceParameterName(v string) *DescribeDeployedApiResponseConstantParametersConstantParameter {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeDeployedApiResponseConstantParametersConstantParameter) SetConstantValue(v string) *DescribeDeployedApiResponseConstantParametersConstantParameter {
	s.ConstantValue = &v
	return s
}

func (s *DescribeDeployedApiResponseConstantParametersConstantParameter) SetLocation(v string) *DescribeDeployedApiResponseConstantParametersConstantParameter {
	s.Location = &v
	return s
}

func (s *DescribeDeployedApiResponseConstantParametersConstantParameter) SetDescription(v string) *DescribeDeployedApiResponseConstantParametersConstantParameter {
	s.Description = &v
	return s
}

type DescribeDeployedApiResponseRequestParameters struct {
	RequestParameter []*DescribeDeployedApiResponseRequestParametersRequestParameter `json:"RequestParameter,omitempty" xml:"RequestParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDeployedApiResponseRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseRequestParameters) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseRequestParameters) SetRequestParameter(v []*DescribeDeployedApiResponseRequestParametersRequestParameter) *DescribeDeployedApiResponseRequestParameters {
	s.RequestParameter = v
	return s
}

type DescribeDeployedApiResponseRequestParametersRequestParameter struct {
	ApiParameterName  *string `json:"ApiParameterName,omitempty" xml:"ApiParameterName,omitempty" require:"true"`
	Location          *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	ParameterType     *string `json:"ParameterType,omitempty" xml:"ParameterType,omitempty" require:"true"`
	Required          *string `json:"Required,omitempty" xml:"Required,omitempty" require:"true"`
	DefaultValue      *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	DemoValue         *string `json:"DemoValue,omitempty" xml:"DemoValue,omitempty" require:"true"`
	MaxValue          *int64  `json:"MaxValue,omitempty" xml:"MaxValue,omitempty" require:"true"`
	MinValue          *int64  `json:"MinValue,omitempty" xml:"MinValue,omitempty" require:"true"`
	MaxLength         *int64  `json:"MaxLength,omitempty" xml:"MaxLength,omitempty" require:"true"`
	MinLength         *int64  `json:"MinLength,omitempty" xml:"MinLength,omitempty" require:"true"`
	RegularExpression *string `json:"RegularExpression,omitempty" xml:"RegularExpression,omitempty" require:"true"`
	JsonScheme        *string `json:"JsonScheme,omitempty" xml:"JsonScheme,omitempty" require:"true"`
	EnumValue         *string `json:"EnumValue,omitempty" xml:"EnumValue,omitempty" require:"true"`
	DocShow           *string `json:"DocShow,omitempty" xml:"DocShow,omitempty" require:"true"`
	DocOrder          *int    `json:"DocOrder,omitempty" xml:"DocOrder,omitempty" require:"true"`
	Description       *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	ArrayItemsType    *string `json:"ArrayItemsType,omitempty" xml:"ArrayItemsType,omitempty" require:"true"`
}

func (s DescribeDeployedApiResponseRequestParametersRequestParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseRequestParametersRequestParameter) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetApiParameterName(v string) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.ApiParameterName = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetLocation(v string) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.Location = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetParameterType(v string) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.ParameterType = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetRequired(v string) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.Required = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetDefaultValue(v string) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.DefaultValue = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetDemoValue(v string) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.DemoValue = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetMaxValue(v int64) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.MaxValue = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetMinValue(v int64) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.MinValue = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetMaxLength(v int64) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.MaxLength = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetMinLength(v int64) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.MinLength = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetRegularExpression(v string) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.RegularExpression = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetJsonScheme(v string) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.JsonScheme = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetEnumValue(v string) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.EnumValue = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetDocShow(v string) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.DocShow = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetDocOrder(v int) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.DocOrder = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetDescription(v string) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.Description = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestParametersRequestParameter) SetArrayItemsType(v string) *DescribeDeployedApiResponseRequestParametersRequestParameter {
	s.ArrayItemsType = &v
	return s
}

type DescribeDeployedApiResponseServiceParameters struct {
	ServiceParameter []*DescribeDeployedApiResponseServiceParametersServiceParameter `json:"ServiceParameter,omitempty" xml:"ServiceParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDeployedApiResponseServiceParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseServiceParameters) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseServiceParameters) SetServiceParameter(v []*DescribeDeployedApiResponseServiceParametersServiceParameter) *DescribeDeployedApiResponseServiceParameters {
	s.ServiceParameter = v
	return s
}

type DescribeDeployedApiResponseServiceParametersServiceParameter struct {
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	Location             *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	ParameterType        *string `json:"ParameterType,omitempty" xml:"ParameterType,omitempty" require:"true"`
}

func (s DescribeDeployedApiResponseServiceParametersServiceParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseServiceParametersServiceParameter) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseServiceParametersServiceParameter) SetServiceParameterName(v string) *DescribeDeployedApiResponseServiceParametersServiceParameter {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceParametersServiceParameter) SetLocation(v string) *DescribeDeployedApiResponseServiceParametersServiceParameter {
	s.Location = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceParametersServiceParameter) SetParameterType(v string) *DescribeDeployedApiResponseServiceParametersServiceParameter {
	s.ParameterType = &v
	return s
}

type DescribeDeployedApiResponseServiceParametersMap struct {
	ServiceParameterMap []*DescribeDeployedApiResponseServiceParametersMapServiceParameterMap `json:"ServiceParameterMap,omitempty" xml:"ServiceParameterMap,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDeployedApiResponseServiceParametersMap) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseServiceParametersMap) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseServiceParametersMap) SetServiceParameterMap(v []*DescribeDeployedApiResponseServiceParametersMapServiceParameterMap) *DescribeDeployedApiResponseServiceParametersMap {
	s.ServiceParameterMap = v
	return s
}

type DescribeDeployedApiResponseServiceParametersMapServiceParameterMap struct {
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	RequestParameterName *string `json:"RequestParameterName,omitempty" xml:"RequestParameterName,omitempty" require:"true"`
}

func (s DescribeDeployedApiResponseServiceParametersMapServiceParameterMap) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseServiceParametersMapServiceParameterMap) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseServiceParametersMapServiceParameterMap) SetServiceParameterName(v string) *DescribeDeployedApiResponseServiceParametersMapServiceParameterMap {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceParametersMapServiceParameterMap) SetRequestParameterName(v string) *DescribeDeployedApiResponseServiceParametersMapServiceParameterMap {
	s.RequestParameterName = &v
	return s
}

type DescribeDeployedApiResponseRequestConfig struct {
	RequestProtocol     *string `json:"RequestProtocol,omitempty" xml:"RequestProtocol,omitempty" require:"true"`
	RequestHttpMethod   *string `json:"RequestHttpMethod,omitempty" xml:"RequestHttpMethod,omitempty" require:"true"`
	RequestPath         *string `json:"RequestPath,omitempty" xml:"RequestPath,omitempty" require:"true"`
	BodyFormat          *string `json:"BodyFormat,omitempty" xml:"BodyFormat,omitempty" require:"true"`
	PostBodyDescription *string `json:"PostBodyDescription,omitempty" xml:"PostBodyDescription,omitempty" require:"true"`
	RequestMode         *string `json:"RequestMode,omitempty" xml:"RequestMode,omitempty" require:"true"`
	BodyModel           *string `json:"BodyModel,omitempty" xml:"BodyModel,omitempty" require:"true"`
}

func (s DescribeDeployedApiResponseRequestConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseRequestConfig) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseRequestConfig) SetRequestProtocol(v string) *DescribeDeployedApiResponseRequestConfig {
	s.RequestProtocol = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestConfig) SetRequestHttpMethod(v string) *DescribeDeployedApiResponseRequestConfig {
	s.RequestHttpMethod = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestConfig) SetRequestPath(v string) *DescribeDeployedApiResponseRequestConfig {
	s.RequestPath = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestConfig) SetBodyFormat(v string) *DescribeDeployedApiResponseRequestConfig {
	s.BodyFormat = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestConfig) SetPostBodyDescription(v string) *DescribeDeployedApiResponseRequestConfig {
	s.PostBodyDescription = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestConfig) SetRequestMode(v string) *DescribeDeployedApiResponseRequestConfig {
	s.RequestMode = &v
	return s
}

func (s *DescribeDeployedApiResponseRequestConfig) SetBodyModel(v string) *DescribeDeployedApiResponseRequestConfig {
	s.BodyModel = &v
	return s
}

type DescribeDeployedApiResponseServiceConfig struct {
	ServiceProtocol       *string                                                        `json:"ServiceProtocol,omitempty" xml:"ServiceProtocol,omitempty" require:"true"`
	ServiceAddress        *string                                                        `json:"ServiceAddress,omitempty" xml:"ServiceAddress,omitempty" require:"true"`
	ServiceHttpMethod     *string                                                        `json:"ServiceHttpMethod,omitempty" xml:"ServiceHttpMethod,omitempty" require:"true"`
	ServicePath           *string                                                        `json:"ServicePath,omitempty" xml:"ServicePath,omitempty" require:"true"`
	ServiceTimeout        *int                                                           `json:"ServiceTimeout,omitempty" xml:"ServiceTimeout,omitempty" require:"true"`
	Mock                  *string                                                        `json:"Mock,omitempty" xml:"Mock,omitempty" require:"true"`
	MockResult            *string                                                        `json:"MockResult,omitempty" xml:"MockResult,omitempty" require:"true"`
	ServiceVpcEnable      *string                                                        `json:"ServiceVpcEnable,omitempty" xml:"ServiceVpcEnable,omitempty" require:"true"`
	MockStatusCode        *int                                                           `json:"MockStatusCode,omitempty" xml:"MockStatusCode,omitempty" require:"true"`
	VpcId                 *string                                                        `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	MockHeaders           *DescribeDeployedApiResponseServiceConfigMockHeaders           `json:"MockHeaders,omitempty" xml:"MockHeaders,omitempty" require:"true" type:"Struct"`
	VpcConfig             *DescribeDeployedApiResponseServiceConfigVpcConfig             `json:"VpcConfig,omitempty" xml:"VpcConfig,omitempty" require:"true" type:"Struct"`
	FunctionComputeConfig *DescribeDeployedApiResponseServiceConfigFunctionComputeConfig `json:"FunctionComputeConfig,omitempty" xml:"FunctionComputeConfig,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDeployedApiResponseServiceConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseServiceConfig) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseServiceConfig) SetServiceProtocol(v string) *DescribeDeployedApiResponseServiceConfig {
	s.ServiceProtocol = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfig) SetServiceAddress(v string) *DescribeDeployedApiResponseServiceConfig {
	s.ServiceAddress = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfig) SetServiceHttpMethod(v string) *DescribeDeployedApiResponseServiceConfig {
	s.ServiceHttpMethod = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfig) SetServicePath(v string) *DescribeDeployedApiResponseServiceConfig {
	s.ServicePath = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfig) SetServiceTimeout(v int) *DescribeDeployedApiResponseServiceConfig {
	s.ServiceTimeout = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfig) SetMock(v string) *DescribeDeployedApiResponseServiceConfig {
	s.Mock = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfig) SetMockResult(v string) *DescribeDeployedApiResponseServiceConfig {
	s.MockResult = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfig) SetServiceVpcEnable(v string) *DescribeDeployedApiResponseServiceConfig {
	s.ServiceVpcEnable = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfig) SetMockStatusCode(v int) *DescribeDeployedApiResponseServiceConfig {
	s.MockStatusCode = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfig) SetVpcId(v string) *DescribeDeployedApiResponseServiceConfig {
	s.VpcId = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfig) SetMockHeaders(v *DescribeDeployedApiResponseServiceConfigMockHeaders) *DescribeDeployedApiResponseServiceConfig {
	s.MockHeaders = v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfig) SetVpcConfig(v *DescribeDeployedApiResponseServiceConfigVpcConfig) *DescribeDeployedApiResponseServiceConfig {
	s.VpcConfig = v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfig) SetFunctionComputeConfig(v *DescribeDeployedApiResponseServiceConfigFunctionComputeConfig) *DescribeDeployedApiResponseServiceConfig {
	s.FunctionComputeConfig = v
	return s
}

type DescribeDeployedApiResponseServiceConfigMockHeaders struct {
	MockHeader []*DescribeDeployedApiResponseServiceConfigMockHeadersMockHeader `json:"MockHeader,omitempty" xml:"MockHeader,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDeployedApiResponseServiceConfigMockHeaders) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseServiceConfigMockHeaders) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseServiceConfigMockHeaders) SetMockHeader(v []*DescribeDeployedApiResponseServiceConfigMockHeadersMockHeader) *DescribeDeployedApiResponseServiceConfigMockHeaders {
	s.MockHeader = v
	return s
}

type DescribeDeployedApiResponseServiceConfigMockHeadersMockHeader struct {
	HeaderName  *string `json:"HeaderName,omitempty" xml:"HeaderName,omitempty" require:"true"`
	HeaderValue *string `json:"HeaderValue,omitempty" xml:"HeaderValue,omitempty" require:"true"`
}

func (s DescribeDeployedApiResponseServiceConfigMockHeadersMockHeader) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseServiceConfigMockHeadersMockHeader) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseServiceConfigMockHeadersMockHeader) SetHeaderName(v string) *DescribeDeployedApiResponseServiceConfigMockHeadersMockHeader {
	s.HeaderName = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfigMockHeadersMockHeader) SetHeaderValue(v string) *DescribeDeployedApiResponseServiceConfigMockHeadersMockHeader {
	s.HeaderValue = &v
	return s
}

type DescribeDeployedApiResponseServiceConfigVpcConfig struct {
	Name       *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	VpcId      *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	Port       *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
}

func (s DescribeDeployedApiResponseServiceConfigVpcConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseServiceConfigVpcConfig) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseServiceConfigVpcConfig) SetName(v string) *DescribeDeployedApiResponseServiceConfigVpcConfig {
	s.Name = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfigVpcConfig) SetVpcId(v string) *DescribeDeployedApiResponseServiceConfigVpcConfig {
	s.VpcId = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfigVpcConfig) SetInstanceId(v string) *DescribeDeployedApiResponseServiceConfigVpcConfig {
	s.InstanceId = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfigVpcConfig) SetPort(v int) *DescribeDeployedApiResponseServiceConfigVpcConfig {
	s.Port = &v
	return s
}

type DescribeDeployedApiResponseServiceConfigFunctionComputeConfig struct {
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ServiceName  *string `json:"ServiceName,omitempty" xml:"ServiceName,omitempty" require:"true"`
	FunctionName *string `json:"FunctionName,omitempty" xml:"FunctionName,omitempty" require:"true"`
	RoleArn      *string `json:"RoleArn,omitempty" xml:"RoleArn,omitempty" require:"true"`
}

func (s DescribeDeployedApiResponseServiceConfigFunctionComputeConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseServiceConfigFunctionComputeConfig) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseServiceConfigFunctionComputeConfig) SetRegionId(v string) *DescribeDeployedApiResponseServiceConfigFunctionComputeConfig {
	s.RegionId = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfigFunctionComputeConfig) SetServiceName(v string) *DescribeDeployedApiResponseServiceConfigFunctionComputeConfig {
	s.ServiceName = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfigFunctionComputeConfig) SetFunctionName(v string) *DescribeDeployedApiResponseServiceConfigFunctionComputeConfig {
	s.FunctionName = &v
	return s
}

func (s *DescribeDeployedApiResponseServiceConfigFunctionComputeConfig) SetRoleArn(v string) *DescribeDeployedApiResponseServiceConfigFunctionComputeConfig {
	s.RoleArn = &v
	return s
}

type DescribeDeployedApiResponseOpenIdConnectConfig struct {
	OpenIdApiType    *string `json:"OpenIdApiType,omitempty" xml:"OpenIdApiType,omitempty" require:"true"`
	IdTokenParamName *string `json:"IdTokenParamName,omitempty" xml:"IdTokenParamName,omitempty" require:"true"`
	PublicKeyId      *string `json:"PublicKeyId,omitempty" xml:"PublicKeyId,omitempty" require:"true"`
	PublicKey        *string `json:"PublicKey,omitempty" xml:"PublicKey,omitempty" require:"true"`
}

func (s DescribeDeployedApiResponseOpenIdConnectConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeDeployedApiResponseOpenIdConnectConfig) GoString() string {
	return s.String()
}

func (s *DescribeDeployedApiResponseOpenIdConnectConfig) SetOpenIdApiType(v string) *DescribeDeployedApiResponseOpenIdConnectConfig {
	s.OpenIdApiType = &v
	return s
}

func (s *DescribeDeployedApiResponseOpenIdConnectConfig) SetIdTokenParamName(v string) *DescribeDeployedApiResponseOpenIdConnectConfig {
	s.IdTokenParamName = &v
	return s
}

func (s *DescribeDeployedApiResponseOpenIdConnectConfig) SetPublicKeyId(v string) *DescribeDeployedApiResponseOpenIdConnectConfig {
	s.PublicKeyId = &v
	return s
}

func (s *DescribeDeployedApiResponseOpenIdConnectConfig) SetPublicKey(v string) *DescribeDeployedApiResponseOpenIdConnectConfig {
	s.PublicKey = &v
	return s
}

type DescribeAuthorizedAppsRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	AppId         *int64  `json:"AppId,omitempty" xml:"AppId,omitempty"`
	AppName       *string `json:"AppName,omitempty" xml:"AppName,omitempty"`
	AppOwnerId    *int64  `json:"AppOwnerId,omitempty" xml:"AppOwnerId,omitempty"`
}

func (s DescribeAuthorizedAppsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAuthorizedAppsRequest) GoString() string {
	return s.String()
}

func (s *DescribeAuthorizedAppsRequest) SetSecurityToken(v string) *DescribeAuthorizedAppsRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeAuthorizedAppsRequest) SetGroupId(v string) *DescribeAuthorizedAppsRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeAuthorizedAppsRequest) SetStageName(v string) *DescribeAuthorizedAppsRequest {
	s.StageName = &v
	return s
}

func (s *DescribeAuthorizedAppsRequest) SetApiId(v string) *DescribeAuthorizedAppsRequest {
	s.ApiId = &v
	return s
}

func (s *DescribeAuthorizedAppsRequest) SetPageNumber(v int) *DescribeAuthorizedAppsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeAuthorizedAppsRequest) SetPageSize(v int) *DescribeAuthorizedAppsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeAuthorizedAppsRequest) SetAppId(v int64) *DescribeAuthorizedAppsRequest {
	s.AppId = &v
	return s
}

func (s *DescribeAuthorizedAppsRequest) SetAppName(v string) *DescribeAuthorizedAppsRequest {
	s.AppName = &v
	return s
}

func (s *DescribeAuthorizedAppsRequest) SetAppOwnerId(v int64) *DescribeAuthorizedAppsRequest {
	s.AppOwnerId = &v
	return s
}

type DescribeAuthorizedAppsResponse struct {
	RequestId      *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount     *int                                          `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize       *int                                          `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber     *int                                          `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	AuthorizedApps *DescribeAuthorizedAppsResponseAuthorizedApps `json:"AuthorizedApps,omitempty" xml:"AuthorizedApps,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAuthorizedAppsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAuthorizedAppsResponse) GoString() string {
	return s.String()
}

func (s *DescribeAuthorizedAppsResponse) SetRequestId(v string) *DescribeAuthorizedAppsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAuthorizedAppsResponse) SetTotalCount(v int) *DescribeAuthorizedAppsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeAuthorizedAppsResponse) SetPageSize(v int) *DescribeAuthorizedAppsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeAuthorizedAppsResponse) SetPageNumber(v int) *DescribeAuthorizedAppsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeAuthorizedAppsResponse) SetAuthorizedApps(v *DescribeAuthorizedAppsResponseAuthorizedApps) *DescribeAuthorizedAppsResponse {
	s.AuthorizedApps = v
	return s
}

type DescribeAuthorizedAppsResponseAuthorizedApps struct {
	AuthorizedApp []*DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp `json:"AuthorizedApp,omitempty" xml:"AuthorizedApp,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAuthorizedAppsResponseAuthorizedApps) String() string {
	return tea.Prettify(s)
}

func (s DescribeAuthorizedAppsResponseAuthorizedApps) GoString() string {
	return s.String()
}

func (s *DescribeAuthorizedAppsResponseAuthorizedApps) SetAuthorizedApp(v []*DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp) *DescribeAuthorizedAppsResponseAuthorizedApps {
	s.AuthorizedApp = v
	return s
}

type DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp struct {
	StageName           *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	AppId               *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	AppName             *string `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
	Operator            *string `json:"Operator,omitempty" xml:"Operator,omitempty" require:"true"`
	AuthorizationSource *string `json:"AuthorizationSource,omitempty" xml:"AuthorizationSource,omitempty" require:"true"`
	Description         *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	AuthorizedTime      *string `json:"AuthorizedTime,omitempty" xml:"AuthorizedTime,omitempty" require:"true"`
	AuthVaildTime       *string `json:"AuthVaildTime,omitempty" xml:"AuthVaildTime,omitempty" require:"true"`
}

func (s DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp) String() string {
	return tea.Prettify(s)
}

func (s DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp) GoString() string {
	return s.String()
}

func (s *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp) SetStageName(v string) *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp {
	s.StageName = &v
	return s
}

func (s *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp) SetAppId(v int64) *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp {
	s.AppId = &v
	return s
}

func (s *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp) SetAppName(v string) *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp {
	s.AppName = &v
	return s
}

func (s *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp) SetOperator(v string) *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp {
	s.Operator = &v
	return s
}

func (s *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp) SetAuthorizationSource(v string) *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp {
	s.AuthorizationSource = &v
	return s
}

func (s *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp) SetDescription(v string) *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp {
	s.Description = &v
	return s
}

func (s *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp) SetAuthorizedTime(v string) *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp {
	s.AuthorizedTime = &v
	return s
}

func (s *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp) SetAuthVaildTime(v string) *DescribeAuthorizedAppsResponseAuthorizedAppsAuthorizedApp {
	s.AuthVaildTime = &v
	return s
}

type DescribeAuthorizedApisRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	AppId         *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeAuthorizedApisRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAuthorizedApisRequest) GoString() string {
	return s.String()
}

func (s *DescribeAuthorizedApisRequest) SetSecurityToken(v string) *DescribeAuthorizedApisRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeAuthorizedApisRequest) SetAppId(v int64) *DescribeAuthorizedApisRequest {
	s.AppId = &v
	return s
}

func (s *DescribeAuthorizedApisRequest) SetPageNumber(v int) *DescribeAuthorizedApisRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeAuthorizedApisRequest) SetPageSize(v int) *DescribeAuthorizedApisRequest {
	s.PageSize = &v
	return s
}

type DescribeAuthorizedApisResponse struct {
	RequestId      *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount     *int                                          `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize       *int                                          `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber     *int                                          `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	AuthorizedApis *DescribeAuthorizedApisResponseAuthorizedApis `json:"AuthorizedApis,omitempty" xml:"AuthorizedApis,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAuthorizedApisResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAuthorizedApisResponse) GoString() string {
	return s.String()
}

func (s *DescribeAuthorizedApisResponse) SetRequestId(v string) *DescribeAuthorizedApisResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAuthorizedApisResponse) SetTotalCount(v int) *DescribeAuthorizedApisResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeAuthorizedApisResponse) SetPageSize(v int) *DescribeAuthorizedApisResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeAuthorizedApisResponse) SetPageNumber(v int) *DescribeAuthorizedApisResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeAuthorizedApisResponse) SetAuthorizedApis(v *DescribeAuthorizedApisResponseAuthorizedApis) *DescribeAuthorizedApisResponse {
	s.AuthorizedApis = v
	return s
}

type DescribeAuthorizedApisResponseAuthorizedApis struct {
	AuthorizedApi []*DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi `json:"AuthorizedApi,omitempty" xml:"AuthorizedApi,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAuthorizedApisResponseAuthorizedApis) String() string {
	return tea.Prettify(s)
}

func (s DescribeAuthorizedApisResponseAuthorizedApis) GoString() string {
	return s.String()
}

func (s *DescribeAuthorizedApisResponseAuthorizedApis) SetAuthorizedApi(v []*DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi) *DescribeAuthorizedApisResponseAuthorizedApis {
	s.AuthorizedApi = v
	return s
}

type DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi struct {
	RegionId            *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	GroupId             *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName           *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	StageName           *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	Operator            *string `json:"Operator,omitempty" xml:"Operator,omitempty" require:"true"`
	ApiId               *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName             *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	AuthorizationSource *string `json:"AuthorizationSource,omitempty" xml:"AuthorizationSource,omitempty" require:"true"`
	Description         *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	AuthorizedTime      *string `json:"AuthorizedTime,omitempty" xml:"AuthorizedTime,omitempty" require:"true"`
	AuthVaildTime       *string `json:"AuthVaildTime,omitempty" xml:"AuthVaildTime,omitempty" require:"true"`
}

func (s DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi) String() string {
	return tea.Prettify(s)
}

func (s DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi) GoString() string {
	return s.String()
}

func (s *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi) SetRegionId(v string) *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi {
	s.RegionId = &v
	return s
}

func (s *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi) SetGroupId(v string) *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi {
	s.GroupId = &v
	return s
}

func (s *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi) SetGroupName(v string) *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi {
	s.GroupName = &v
	return s
}

func (s *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi) SetStageName(v string) *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi {
	s.StageName = &v
	return s
}

func (s *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi) SetOperator(v string) *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi {
	s.Operator = &v
	return s
}

func (s *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi) SetApiId(v string) *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi {
	s.ApiId = &v
	return s
}

func (s *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi) SetApiName(v string) *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi {
	s.ApiName = &v
	return s
}

func (s *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi) SetAuthorizationSource(v string) *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi {
	s.AuthorizationSource = &v
	return s
}

func (s *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi) SetDescription(v string) *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi {
	s.Description = &v
	return s
}

func (s *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi) SetAuthorizedTime(v string) *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi {
	s.AuthorizedTime = &v
	return s
}

func (s *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi) SetAuthVaildTime(v string) *DescribeAuthorizedApisResponseAuthorizedApisAuthorizedApi {
	s.AuthVaildTime = &v
	return s
}

type DescribeAppSecurityRequest struct {
	SecurityToken *string                          `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	AppId         *int64                           `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	Tag           []*DescribeAppSecurityRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s DescribeAppSecurityRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppSecurityRequest) GoString() string {
	return s.String()
}

func (s *DescribeAppSecurityRequest) SetSecurityToken(v string) *DescribeAppSecurityRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeAppSecurityRequest) SetAppId(v int64) *DescribeAppSecurityRequest {
	s.AppId = &v
	return s
}

func (s *DescribeAppSecurityRequest) SetTag(v []*DescribeAppSecurityRequestTag) *DescribeAppSecurityRequest {
	s.Tag = v
	return s
}

type DescribeAppSecurityRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s DescribeAppSecurityRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppSecurityRequestTag) GoString() string {
	return s.String()
}

func (s *DescribeAppSecurityRequestTag) SetKey(v string) *DescribeAppSecurityRequestTag {
	s.Key = &v
	return s
}

func (s *DescribeAppSecurityRequestTag) SetValue(v string) *DescribeAppSecurityRequestTag {
	s.Value = &v
	return s
}

type DescribeAppSecurityResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AppKey       *string `json:"AppKey,omitempty" xml:"AppKey,omitempty" require:"true"`
	AppSecret    *string `json:"AppSecret,omitempty" xml:"AppSecret,omitempty" require:"true"`
	CreatedTime  *string `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	ModifiedTime *string `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	AppCode      *string `json:"AppCode,omitempty" xml:"AppCode,omitempty" require:"true"`
}

func (s DescribeAppSecurityResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppSecurityResponse) GoString() string {
	return s.String()
}

func (s *DescribeAppSecurityResponse) SetRequestId(v string) *DescribeAppSecurityResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAppSecurityResponse) SetAppKey(v string) *DescribeAppSecurityResponse {
	s.AppKey = &v
	return s
}

func (s *DescribeAppSecurityResponse) SetAppSecret(v string) *DescribeAppSecurityResponse {
	s.AppSecret = &v
	return s
}

func (s *DescribeAppSecurityResponse) SetCreatedTime(v string) *DescribeAppSecurityResponse {
	s.CreatedTime = &v
	return s
}

func (s *DescribeAppSecurityResponse) SetModifiedTime(v string) *DescribeAppSecurityResponse {
	s.ModifiedTime = &v
	return s
}

func (s *DescribeAppSecurityResponse) SetAppCode(v string) *DescribeAppSecurityResponse {
	s.AppCode = &v
	return s
}

type DescribeAppsRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	AppId         *int64  `json:"AppId,omitempty" xml:"AppId,omitempty"`
	AppOwner      *int64  `json:"AppOwner,omitempty" xml:"AppOwner,omitempty"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeAppsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppsRequest) GoString() string {
	return s.String()
}

func (s *DescribeAppsRequest) SetSecurityToken(v string) *DescribeAppsRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeAppsRequest) SetAppId(v int64) *DescribeAppsRequest {
	s.AppId = &v
	return s
}

func (s *DescribeAppsRequest) SetAppOwner(v int64) *DescribeAppsRequest {
	s.AppOwner = &v
	return s
}

func (s *DescribeAppsRequest) SetPageNumber(v int) *DescribeAppsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeAppsRequest) SetPageSize(v int) *DescribeAppsRequest {
	s.PageSize = &v
	return s
}

type DescribeAppsResponse struct {
	RequestId  *string                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int                      `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize   *int                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	Apps       *DescribeAppsResponseApps `json:"Apps,omitempty" xml:"Apps,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAppsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppsResponse) GoString() string {
	return s.String()
}

func (s *DescribeAppsResponse) SetRequestId(v string) *DescribeAppsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAppsResponse) SetTotalCount(v int) *DescribeAppsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeAppsResponse) SetPageSize(v int) *DescribeAppsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeAppsResponse) SetPageNumber(v int) *DescribeAppsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeAppsResponse) SetApps(v *DescribeAppsResponseApps) *DescribeAppsResponse {
	s.Apps = v
	return s
}

type DescribeAppsResponseApps struct {
	AppItem []*DescribeAppsResponseAppsAppItem `json:"AppItem,omitempty" xml:"AppItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAppsResponseApps) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppsResponseApps) GoString() string {
	return s.String()
}

func (s *DescribeAppsResponseApps) SetAppItem(v []*DescribeAppsResponseAppsAppItem) *DescribeAppsResponseApps {
	s.AppItem = v
	return s
}

type DescribeAppsResponseAppsAppItem struct {
	AppId       *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	AppName     *string `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeAppsResponseAppsAppItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppsResponseAppsAppItem) GoString() string {
	return s.String()
}

func (s *DescribeAppsResponseAppsAppItem) SetAppId(v int64) *DescribeAppsResponseAppsAppItem {
	s.AppId = &v
	return s
}

func (s *DescribeAppsResponseAppsAppItem) SetAppName(v string) *DescribeAppsResponseAppsAppItem {
	s.AppName = &v
	return s
}

func (s *DescribeAppsResponseAppsAppItem) SetDescription(v string) *DescribeAppsResponseAppsAppItem {
	s.Description = &v
	return s
}

type DescribeAppAttributesRequest struct {
	SecurityToken *string                            `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	AppId         *int64                             `json:"AppId,omitempty" xml:"AppId,omitempty"`
	AppName       *string                            `json:"AppName,omitempty" xml:"AppName,omitempty"`
	PageNumber    *int                               `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int                               `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	Tag           []*DescribeAppAttributesRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
	EnableTagAuth *bool                              `json:"EnableTagAuth,omitempty" xml:"EnableTagAuth,omitempty"`
}

func (s DescribeAppAttributesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppAttributesRequest) GoString() string {
	return s.String()
}

func (s *DescribeAppAttributesRequest) SetSecurityToken(v string) *DescribeAppAttributesRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeAppAttributesRequest) SetAppId(v int64) *DescribeAppAttributesRequest {
	s.AppId = &v
	return s
}

func (s *DescribeAppAttributesRequest) SetAppName(v string) *DescribeAppAttributesRequest {
	s.AppName = &v
	return s
}

func (s *DescribeAppAttributesRequest) SetPageNumber(v int) *DescribeAppAttributesRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeAppAttributesRequest) SetPageSize(v int) *DescribeAppAttributesRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeAppAttributesRequest) SetTag(v []*DescribeAppAttributesRequestTag) *DescribeAppAttributesRequest {
	s.Tag = v
	return s
}

func (s *DescribeAppAttributesRequest) SetEnableTagAuth(v bool) *DescribeAppAttributesRequest {
	s.EnableTagAuth = &v
	return s
}

type DescribeAppAttributesRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s DescribeAppAttributesRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppAttributesRequestTag) GoString() string {
	return s.String()
}

func (s *DescribeAppAttributesRequestTag) SetKey(v string) *DescribeAppAttributesRequestTag {
	s.Key = &v
	return s
}

func (s *DescribeAppAttributesRequestTag) SetValue(v string) *DescribeAppAttributesRequestTag {
	s.Value = &v
	return s
}

type DescribeAppAttributesResponse struct {
	RequestId  *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int                               `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize   *int                               `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                               `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	Apps       *DescribeAppAttributesResponseApps `json:"Apps,omitempty" xml:"Apps,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAppAttributesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppAttributesResponse) GoString() string {
	return s.String()
}

func (s *DescribeAppAttributesResponse) SetRequestId(v string) *DescribeAppAttributesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAppAttributesResponse) SetTotalCount(v int) *DescribeAppAttributesResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeAppAttributesResponse) SetPageSize(v int) *DescribeAppAttributesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeAppAttributesResponse) SetPageNumber(v int) *DescribeAppAttributesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeAppAttributesResponse) SetApps(v *DescribeAppAttributesResponseApps) *DescribeAppAttributesResponse {
	s.Apps = v
	return s
}

type DescribeAppAttributesResponseApps struct {
	AppAttribute []*DescribeAppAttributesResponseAppsAppAttribute `json:"AppAttribute,omitempty" xml:"AppAttribute,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAppAttributesResponseApps) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppAttributesResponseApps) GoString() string {
	return s.String()
}

func (s *DescribeAppAttributesResponseApps) SetAppAttribute(v []*DescribeAppAttributesResponseAppsAppAttribute) *DescribeAppAttributesResponseApps {
	s.AppAttribute = v
	return s
}

type DescribeAppAttributesResponseAppsAppAttribute struct {
	AppId        *int64                                             `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	AppName      *string                                            `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
	Description  *string                                            `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreatedTime  *string                                            `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	ModifiedTime *string                                            `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	Tags         *DescribeAppAttributesResponseAppsAppAttributeTags `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAppAttributesResponseAppsAppAttribute) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppAttributesResponseAppsAppAttribute) GoString() string {
	return s.String()
}

func (s *DescribeAppAttributesResponseAppsAppAttribute) SetAppId(v int64) *DescribeAppAttributesResponseAppsAppAttribute {
	s.AppId = &v
	return s
}

func (s *DescribeAppAttributesResponseAppsAppAttribute) SetAppName(v string) *DescribeAppAttributesResponseAppsAppAttribute {
	s.AppName = &v
	return s
}

func (s *DescribeAppAttributesResponseAppsAppAttribute) SetDescription(v string) *DescribeAppAttributesResponseAppsAppAttribute {
	s.Description = &v
	return s
}

func (s *DescribeAppAttributesResponseAppsAppAttribute) SetCreatedTime(v string) *DescribeAppAttributesResponseAppsAppAttribute {
	s.CreatedTime = &v
	return s
}

func (s *DescribeAppAttributesResponseAppsAppAttribute) SetModifiedTime(v string) *DescribeAppAttributesResponseAppsAppAttribute {
	s.ModifiedTime = &v
	return s
}

func (s *DescribeAppAttributesResponseAppsAppAttribute) SetTags(v *DescribeAppAttributesResponseAppsAppAttributeTags) *DescribeAppAttributesResponseAppsAppAttribute {
	s.Tags = v
	return s
}

type DescribeAppAttributesResponseAppsAppAttributeTags struct {
	TagInfo []*DescribeAppAttributesResponseAppsAppAttributeTagsTagInfo `json:"TagInfo,omitempty" xml:"TagInfo,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAppAttributesResponseAppsAppAttributeTags) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppAttributesResponseAppsAppAttributeTags) GoString() string {
	return s.String()
}

func (s *DescribeAppAttributesResponseAppsAppAttributeTags) SetTagInfo(v []*DescribeAppAttributesResponseAppsAppAttributeTagsTagInfo) *DescribeAppAttributesResponseAppsAppAttributeTags {
	s.TagInfo = v
	return s
}

type DescribeAppAttributesResponseAppsAppAttributeTagsTagInfo struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeAppAttributesResponseAppsAppAttributeTagsTagInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeAppAttributesResponseAppsAppAttributeTagsTagInfo) GoString() string {
	return s.String()
}

func (s *DescribeAppAttributesResponseAppsAppAttributeTagsTagInfo) SetKey(v string) *DescribeAppAttributesResponseAppsAppAttributeTagsTagInfo {
	s.Key = &v
	return s
}

func (s *DescribeAppAttributesResponseAppsAppAttributeTagsTagInfo) SetValue(v string) *DescribeAppAttributesResponseAppsAppAttributeTagsTagInfo {
	s.Value = &v
	return s
}

type DescribeApiTrafficDataRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	StartTime     *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime       *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
}

func (s DescribeApiTrafficDataRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiTrafficDataRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiTrafficDataRequest) SetSecurityToken(v string) *DescribeApiTrafficDataRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiTrafficDataRequest) SetApiId(v string) *DescribeApiTrafficDataRequest {
	s.ApiId = &v
	return s
}

func (s *DescribeApiTrafficDataRequest) SetGroupId(v string) *DescribeApiTrafficDataRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiTrafficDataRequest) SetStartTime(v string) *DescribeApiTrafficDataRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeApiTrafficDataRequest) SetEndTime(v string) *DescribeApiTrafficDataRequest {
	s.EndTime = &v
	return s
}

type DescribeApiTrafficDataResponse struct {
	RequestId     *string                                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	CallUploads   *DescribeApiTrafficDataResponseCallUploads   `json:"CallUploads,omitempty" xml:"CallUploads,omitempty" require:"true" type:"Struct"`
	CallDownloads *DescribeApiTrafficDataResponseCallDownloads `json:"CallDownloads,omitempty" xml:"CallDownloads,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiTrafficDataResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiTrafficDataResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiTrafficDataResponse) SetRequestId(v string) *DescribeApiTrafficDataResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiTrafficDataResponse) SetCallUploads(v *DescribeApiTrafficDataResponseCallUploads) *DescribeApiTrafficDataResponse {
	s.CallUploads = v
	return s
}

func (s *DescribeApiTrafficDataResponse) SetCallDownloads(v *DescribeApiTrafficDataResponseCallDownloads) *DescribeApiTrafficDataResponse {
	s.CallDownloads = v
	return s
}

type DescribeApiTrafficDataResponseCallUploads struct {
	MonitorItem []*DescribeApiTrafficDataResponseCallUploadsMonitorItem `json:"MonitorItem,omitempty" xml:"MonitorItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiTrafficDataResponseCallUploads) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiTrafficDataResponseCallUploads) GoString() string {
	return s.String()
}

func (s *DescribeApiTrafficDataResponseCallUploads) SetMonitorItem(v []*DescribeApiTrafficDataResponseCallUploadsMonitorItem) *DescribeApiTrafficDataResponseCallUploads {
	s.MonitorItem = v
	return s
}

type DescribeApiTrafficDataResponseCallUploadsMonitorItem struct {
	ItemTime  *string `json:"ItemTime,omitempty" xml:"ItemTime,omitempty" require:"true"`
	ItemValue *string `json:"ItemValue,omitempty" xml:"ItemValue,omitempty" require:"true"`
}

func (s DescribeApiTrafficDataResponseCallUploadsMonitorItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiTrafficDataResponseCallUploadsMonitorItem) GoString() string {
	return s.String()
}

func (s *DescribeApiTrafficDataResponseCallUploadsMonitorItem) SetItemTime(v string) *DescribeApiTrafficDataResponseCallUploadsMonitorItem {
	s.ItemTime = &v
	return s
}

func (s *DescribeApiTrafficDataResponseCallUploadsMonitorItem) SetItemValue(v string) *DescribeApiTrafficDataResponseCallUploadsMonitorItem {
	s.ItemValue = &v
	return s
}

type DescribeApiTrafficDataResponseCallDownloads struct {
	MonitorItem []*DescribeApiTrafficDataResponseCallDownloadsMonitorItem `json:"MonitorItem,omitempty" xml:"MonitorItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiTrafficDataResponseCallDownloads) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiTrafficDataResponseCallDownloads) GoString() string {
	return s.String()
}

func (s *DescribeApiTrafficDataResponseCallDownloads) SetMonitorItem(v []*DescribeApiTrafficDataResponseCallDownloadsMonitorItem) *DescribeApiTrafficDataResponseCallDownloads {
	s.MonitorItem = v
	return s
}

type DescribeApiTrafficDataResponseCallDownloadsMonitorItem struct {
	ItemTime  *string `json:"ItemTime,omitempty" xml:"ItemTime,omitempty" require:"true"`
	ItemValue *string `json:"ItemValue,omitempty" xml:"ItemValue,omitempty" require:"true"`
}

func (s DescribeApiTrafficDataResponseCallDownloadsMonitorItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiTrafficDataResponseCallDownloadsMonitorItem) GoString() string {
	return s.String()
}

func (s *DescribeApiTrafficDataResponseCallDownloadsMonitorItem) SetItemTime(v string) *DescribeApiTrafficDataResponseCallDownloadsMonitorItem {
	s.ItemTime = &v
	return s
}

func (s *DescribeApiTrafficDataResponseCallDownloadsMonitorItem) SetItemValue(v string) *DescribeApiTrafficDataResponseCallDownloadsMonitorItem {
	s.ItemValue = &v
	return s
}

type DescribeApiTrafficControlsRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiIds        *string `json:"ApiIds,omitempty" xml:"ApiIds,omitempty"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeApiTrafficControlsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiTrafficControlsRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiTrafficControlsRequest) SetSecurityToken(v string) *DescribeApiTrafficControlsRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiTrafficControlsRequest) SetStageName(v string) *DescribeApiTrafficControlsRequest {
	s.StageName = &v
	return s
}

func (s *DescribeApiTrafficControlsRequest) SetGroupId(v string) *DescribeApiTrafficControlsRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiTrafficControlsRequest) SetApiIds(v string) *DescribeApiTrafficControlsRequest {
	s.ApiIds = &v
	return s
}

func (s *DescribeApiTrafficControlsRequest) SetPageNumber(v int) *DescribeApiTrafficControlsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeApiTrafficControlsRequest) SetPageSize(v int) *DescribeApiTrafficControlsRequest {
	s.PageSize = &v
	return s
}

type DescribeApiTrafficControlsResponse struct {
	RequestId          *string                                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount         *int                                                  `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize           *int                                                  `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber         *int                                                  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	ApiTrafficControls *DescribeApiTrafficControlsResponseApiTrafficControls `json:"ApiTrafficControls,omitempty" xml:"ApiTrafficControls,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiTrafficControlsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiTrafficControlsResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiTrafficControlsResponse) SetRequestId(v string) *DescribeApiTrafficControlsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiTrafficControlsResponse) SetTotalCount(v int) *DescribeApiTrafficControlsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeApiTrafficControlsResponse) SetPageSize(v int) *DescribeApiTrafficControlsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeApiTrafficControlsResponse) SetPageNumber(v int) *DescribeApiTrafficControlsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeApiTrafficControlsResponse) SetApiTrafficControls(v *DescribeApiTrafficControlsResponseApiTrafficControls) *DescribeApiTrafficControlsResponse {
	s.ApiTrafficControls = v
	return s
}

type DescribeApiTrafficControlsResponseApiTrafficControls struct {
	ApiTrafficControlItem []*DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem `json:"ApiTrafficControlItem,omitempty" xml:"ApiTrafficControlItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiTrafficControlsResponseApiTrafficControls) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiTrafficControlsResponseApiTrafficControls) GoString() string {
	return s.String()
}

func (s *DescribeApiTrafficControlsResponseApiTrafficControls) SetApiTrafficControlItem(v []*DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem) *DescribeApiTrafficControlsResponseApiTrafficControls {
	s.ApiTrafficControlItem = v
	return s
}

type DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem struct {
	ApiId              *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName            *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	TrafficControlId   *string `json:"TrafficControlId,omitempty" xml:"TrafficControlId,omitempty" require:"true"`
	TrafficControlName *string `json:"TrafficControlName,omitempty" xml:"TrafficControlName,omitempty" require:"true"`
	BoundTime          *string `json:"BoundTime,omitempty" xml:"BoundTime,omitempty" require:"true"`
}

func (s DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem) GoString() string {
	return s.String()
}

func (s *DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem) SetApiId(v string) *DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem {
	s.ApiId = &v
	return s
}

func (s *DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem) SetApiName(v string) *DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem {
	s.ApiName = &v
	return s
}

func (s *DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem) SetTrafficControlId(v string) *DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem {
	s.TrafficControlId = &v
	return s
}

func (s *DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem) SetTrafficControlName(v string) *DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem {
	s.TrafficControlName = &v
	return s
}

func (s *DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem) SetBoundTime(v string) *DescribeApiTrafficControlsResponseApiTrafficControlsApiTrafficControlItem {
	s.BoundTime = &v
	return s
}

type DescribeApiSignaturesRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiIds        *string `json:"ApiIds,omitempty" xml:"ApiIds,omitempty"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribeApiSignaturesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiSignaturesRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiSignaturesRequest) SetSecurityToken(v string) *DescribeApiSignaturesRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiSignaturesRequest) SetStageName(v string) *DescribeApiSignaturesRequest {
	s.StageName = &v
	return s
}

func (s *DescribeApiSignaturesRequest) SetGroupId(v string) *DescribeApiSignaturesRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiSignaturesRequest) SetApiIds(v string) *DescribeApiSignaturesRequest {
	s.ApiIds = &v
	return s
}

func (s *DescribeApiSignaturesRequest) SetPageNumber(v int) *DescribeApiSignaturesRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeApiSignaturesRequest) SetPageSize(v int) *DescribeApiSignaturesRequest {
	s.PageSize = &v
	return s
}

type DescribeApiSignaturesResponse struct {
	RequestId     *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount    *int                                        `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize      *int                                        `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber    *int                                        `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	ApiSignatures *DescribeApiSignaturesResponseApiSignatures `json:"ApiSignatures,omitempty" xml:"ApiSignatures,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiSignaturesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiSignaturesResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiSignaturesResponse) SetRequestId(v string) *DescribeApiSignaturesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiSignaturesResponse) SetTotalCount(v int) *DescribeApiSignaturesResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeApiSignaturesResponse) SetPageSize(v int) *DescribeApiSignaturesResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeApiSignaturesResponse) SetPageNumber(v int) *DescribeApiSignaturesResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeApiSignaturesResponse) SetApiSignatures(v *DescribeApiSignaturesResponseApiSignatures) *DescribeApiSignaturesResponse {
	s.ApiSignatures = v
	return s
}

type DescribeApiSignaturesResponseApiSignatures struct {
	ApiSignatureItem []*DescribeApiSignaturesResponseApiSignaturesApiSignatureItem `json:"ApiSignatureItem,omitempty" xml:"ApiSignatureItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiSignaturesResponseApiSignatures) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiSignaturesResponseApiSignatures) GoString() string {
	return s.String()
}

func (s *DescribeApiSignaturesResponseApiSignatures) SetApiSignatureItem(v []*DescribeApiSignaturesResponseApiSignaturesApiSignatureItem) *DescribeApiSignaturesResponseApiSignatures {
	s.ApiSignatureItem = v
	return s
}

type DescribeApiSignaturesResponseApiSignaturesApiSignatureItem struct {
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName       *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	SignatureId   *string `json:"SignatureId,omitempty" xml:"SignatureId,omitempty" require:"true"`
	SignatureName *string `json:"SignatureName,omitempty" xml:"SignatureName,omitempty" require:"true"`
	BoundTime     *string `json:"BoundTime,omitempty" xml:"BoundTime,omitempty" require:"true"`
}

func (s DescribeApiSignaturesResponseApiSignaturesApiSignatureItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiSignaturesResponseApiSignaturesApiSignatureItem) GoString() string {
	return s.String()
}

func (s *DescribeApiSignaturesResponseApiSignaturesApiSignatureItem) SetApiId(v string) *DescribeApiSignaturesResponseApiSignaturesApiSignatureItem {
	s.ApiId = &v
	return s
}

func (s *DescribeApiSignaturesResponseApiSignaturesApiSignatureItem) SetApiName(v string) *DescribeApiSignaturesResponseApiSignaturesApiSignatureItem {
	s.ApiName = &v
	return s
}

func (s *DescribeApiSignaturesResponseApiSignaturesApiSignatureItem) SetSignatureId(v string) *DescribeApiSignaturesResponseApiSignaturesApiSignatureItem {
	s.SignatureId = &v
	return s
}

func (s *DescribeApiSignaturesResponseApiSignaturesApiSignatureItem) SetSignatureName(v string) *DescribeApiSignaturesResponseApiSignaturesApiSignatureItem {
	s.SignatureName = &v
	return s
}

func (s *DescribeApiSignaturesResponseApiSignaturesApiSignatureItem) SetBoundTime(v string) *DescribeApiSignaturesResponseApiSignaturesApiSignatureItem {
	s.BoundTime = &v
	return s
}

type DescribeApisByTrafficControlRequest struct {
	SecurityToken    *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	TrafficControlId *string `json:"TrafficControlId,omitempty" xml:"TrafficControlId,omitempty" require:"true"`
	PageSize         *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber       *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeApisByTrafficControlRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisByTrafficControlRequest) GoString() string {
	return s.String()
}

func (s *DescribeApisByTrafficControlRequest) SetSecurityToken(v string) *DescribeApisByTrafficControlRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApisByTrafficControlRequest) SetTrafficControlId(v string) *DescribeApisByTrafficControlRequest {
	s.TrafficControlId = &v
	return s
}

func (s *DescribeApisByTrafficControlRequest) SetPageSize(v int) *DescribeApisByTrafficControlRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeApisByTrafficControlRequest) SetPageNumber(v int) *DescribeApisByTrafficControlRequest {
	s.PageNumber = &v
	return s
}

type DescribeApisByTrafficControlResponse struct {
	RequestId  *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int                                          `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize   *int                                          `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                                          `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	ApiInfos   *DescribeApisByTrafficControlResponseApiInfos `json:"ApiInfos,omitempty" xml:"ApiInfos,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApisByTrafficControlResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisByTrafficControlResponse) GoString() string {
	return s.String()
}

func (s *DescribeApisByTrafficControlResponse) SetRequestId(v string) *DescribeApisByTrafficControlResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApisByTrafficControlResponse) SetTotalCount(v int) *DescribeApisByTrafficControlResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeApisByTrafficControlResponse) SetPageSize(v int) *DescribeApisByTrafficControlResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeApisByTrafficControlResponse) SetPageNumber(v int) *DescribeApisByTrafficControlResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeApisByTrafficControlResponse) SetApiInfos(v *DescribeApisByTrafficControlResponseApiInfos) *DescribeApisByTrafficControlResponse {
	s.ApiInfos = v
	return s
}

type DescribeApisByTrafficControlResponseApiInfos struct {
	ApiInfo []*DescribeApisByTrafficControlResponseApiInfosApiInfo `json:"ApiInfo,omitempty" xml:"ApiInfo,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApisByTrafficControlResponseApiInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisByTrafficControlResponseApiInfos) GoString() string {
	return s.String()
}

func (s *DescribeApisByTrafficControlResponseApiInfos) SetApiInfo(v []*DescribeApisByTrafficControlResponseApiInfosApiInfo) *DescribeApisByTrafficControlResponseApiInfos {
	s.ApiInfo = v
	return s
}

type DescribeApisByTrafficControlResponseApiInfosApiInfo struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	GroupId     *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName   *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	StageName   *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	ApiId       *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName     *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Visibility  *string `json:"Visibility,omitempty" xml:"Visibility,omitempty" require:"true"`
	BoundTime   *string `json:"BoundTime,omitempty" xml:"BoundTime,omitempty" require:"true"`
}

func (s DescribeApisByTrafficControlResponseApiInfosApiInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisByTrafficControlResponseApiInfosApiInfo) GoString() string {
	return s.String()
}

func (s *DescribeApisByTrafficControlResponseApiInfosApiInfo) SetRegionId(v string) *DescribeApisByTrafficControlResponseApiInfosApiInfo {
	s.RegionId = &v
	return s
}

func (s *DescribeApisByTrafficControlResponseApiInfosApiInfo) SetGroupId(v string) *DescribeApisByTrafficControlResponseApiInfosApiInfo {
	s.GroupId = &v
	return s
}

func (s *DescribeApisByTrafficControlResponseApiInfosApiInfo) SetGroupName(v string) *DescribeApisByTrafficControlResponseApiInfosApiInfo {
	s.GroupName = &v
	return s
}

func (s *DescribeApisByTrafficControlResponseApiInfosApiInfo) SetStageName(v string) *DescribeApisByTrafficControlResponseApiInfosApiInfo {
	s.StageName = &v
	return s
}

func (s *DescribeApisByTrafficControlResponseApiInfosApiInfo) SetApiId(v string) *DescribeApisByTrafficControlResponseApiInfosApiInfo {
	s.ApiId = &v
	return s
}

func (s *DescribeApisByTrafficControlResponseApiInfosApiInfo) SetApiName(v string) *DescribeApisByTrafficControlResponseApiInfosApiInfo {
	s.ApiName = &v
	return s
}

func (s *DescribeApisByTrafficControlResponseApiInfosApiInfo) SetDescription(v string) *DescribeApisByTrafficControlResponseApiInfosApiInfo {
	s.Description = &v
	return s
}

func (s *DescribeApisByTrafficControlResponseApiInfosApiInfo) SetVisibility(v string) *DescribeApisByTrafficControlResponseApiInfosApiInfo {
	s.Visibility = &v
	return s
}

func (s *DescribeApisByTrafficControlResponseApiInfosApiInfo) SetBoundTime(v string) *DescribeApisByTrafficControlResponseApiInfosApiInfo {
	s.BoundTime = &v
	return s
}

type DescribeApisBySignatureRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	SignatureId   *string `json:"SignatureId,omitempty" xml:"SignatureId,omitempty" require:"true"`
	PageSize      *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber    *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeApisBySignatureRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisBySignatureRequest) GoString() string {
	return s.String()
}

func (s *DescribeApisBySignatureRequest) SetSecurityToken(v string) *DescribeApisBySignatureRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApisBySignatureRequest) SetSignatureId(v string) *DescribeApisBySignatureRequest {
	s.SignatureId = &v
	return s
}

func (s *DescribeApisBySignatureRequest) SetPageSize(v int) *DescribeApisBySignatureRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeApisBySignatureRequest) SetPageNumber(v int) *DescribeApisBySignatureRequest {
	s.PageNumber = &v
	return s
}

type DescribeApisBySignatureResponse struct {
	RequestId  *string                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount *int                                     `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize   *int                                     `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber *int                                     `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	ApiInfos   *DescribeApisBySignatureResponseApiInfos `json:"ApiInfos,omitempty" xml:"ApiInfos,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApisBySignatureResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisBySignatureResponse) GoString() string {
	return s.String()
}

func (s *DescribeApisBySignatureResponse) SetRequestId(v string) *DescribeApisBySignatureResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApisBySignatureResponse) SetTotalCount(v int) *DescribeApisBySignatureResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeApisBySignatureResponse) SetPageSize(v int) *DescribeApisBySignatureResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeApisBySignatureResponse) SetPageNumber(v int) *DescribeApisBySignatureResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeApisBySignatureResponse) SetApiInfos(v *DescribeApisBySignatureResponseApiInfos) *DescribeApisBySignatureResponse {
	s.ApiInfos = v
	return s
}

type DescribeApisBySignatureResponseApiInfos struct {
	ApiInfo []*DescribeApisBySignatureResponseApiInfosApiInfo `json:"ApiInfo,omitempty" xml:"ApiInfo,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApisBySignatureResponseApiInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisBySignatureResponseApiInfos) GoString() string {
	return s.String()
}

func (s *DescribeApisBySignatureResponseApiInfos) SetApiInfo(v []*DescribeApisBySignatureResponseApiInfosApiInfo) *DescribeApisBySignatureResponseApiInfos {
	s.ApiInfo = v
	return s
}

type DescribeApisBySignatureResponseApiInfosApiInfo struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	GroupId     *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName   *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	StageName   *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	ApiId       *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName     *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Visibility  *string `json:"Visibility,omitempty" xml:"Visibility,omitempty" require:"true"`
	BoundTime   *string `json:"BoundTime,omitempty" xml:"BoundTime,omitempty" require:"true"`
}

func (s DescribeApisBySignatureResponseApiInfosApiInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisBySignatureResponseApiInfosApiInfo) GoString() string {
	return s.String()
}

func (s *DescribeApisBySignatureResponseApiInfosApiInfo) SetRegionId(v string) *DescribeApisBySignatureResponseApiInfosApiInfo {
	s.RegionId = &v
	return s
}

func (s *DescribeApisBySignatureResponseApiInfosApiInfo) SetGroupId(v string) *DescribeApisBySignatureResponseApiInfosApiInfo {
	s.GroupId = &v
	return s
}

func (s *DescribeApisBySignatureResponseApiInfosApiInfo) SetGroupName(v string) *DescribeApisBySignatureResponseApiInfosApiInfo {
	s.GroupName = &v
	return s
}

func (s *DescribeApisBySignatureResponseApiInfosApiInfo) SetStageName(v string) *DescribeApisBySignatureResponseApiInfosApiInfo {
	s.StageName = &v
	return s
}

func (s *DescribeApisBySignatureResponseApiInfosApiInfo) SetApiId(v string) *DescribeApisBySignatureResponseApiInfosApiInfo {
	s.ApiId = &v
	return s
}

func (s *DescribeApisBySignatureResponseApiInfosApiInfo) SetApiName(v string) *DescribeApisBySignatureResponseApiInfosApiInfo {
	s.ApiName = &v
	return s
}

func (s *DescribeApisBySignatureResponseApiInfosApiInfo) SetDescription(v string) *DescribeApisBySignatureResponseApiInfosApiInfo {
	s.Description = &v
	return s
}

func (s *DescribeApisBySignatureResponseApiInfosApiInfo) SetVisibility(v string) *DescribeApisBySignatureResponseApiInfosApiInfo {
	s.Visibility = &v
	return s
}

func (s *DescribeApisBySignatureResponseApiInfosApiInfo) SetBoundTime(v string) *DescribeApisBySignatureResponseApiInfosApiInfo {
	s.BoundTime = &v
	return s
}

type DescribeApisRequest struct {
	SecurityToken *string                   `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string                   `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	ApiId         *string                   `json:"ApiId,omitempty" xml:"ApiId,omitempty"`
	ApiName       *string                   `json:"ApiName,omitempty" xml:"ApiName,omitempty"`
	CatalogId     *string                   `json:"CatalogId,omitempty" xml:"CatalogId,omitempty"`
	Visibility    *string                   `json:"Visibility,omitempty" xml:"Visibility,omitempty"`
	PageSize      *int                      `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber    *int                      `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	EnableTagAuth *bool                     `json:"EnableTagAuth,omitempty" xml:"EnableTagAuth,omitempty"`
	Tag           []*DescribeApisRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s DescribeApisRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisRequest) GoString() string {
	return s.String()
}

func (s *DescribeApisRequest) SetSecurityToken(v string) *DescribeApisRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApisRequest) SetGroupId(v string) *DescribeApisRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApisRequest) SetApiId(v string) *DescribeApisRequest {
	s.ApiId = &v
	return s
}

func (s *DescribeApisRequest) SetApiName(v string) *DescribeApisRequest {
	s.ApiName = &v
	return s
}

func (s *DescribeApisRequest) SetCatalogId(v string) *DescribeApisRequest {
	s.CatalogId = &v
	return s
}

func (s *DescribeApisRequest) SetVisibility(v string) *DescribeApisRequest {
	s.Visibility = &v
	return s
}

func (s *DescribeApisRequest) SetPageSize(v int) *DescribeApisRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeApisRequest) SetPageNumber(v int) *DescribeApisRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeApisRequest) SetEnableTagAuth(v bool) *DescribeApisRequest {
	s.EnableTagAuth = &v
	return s
}

func (s *DescribeApisRequest) SetTag(v []*DescribeApisRequestTag) *DescribeApisRequest {
	s.Tag = v
	return s
}

type DescribeApisRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s DescribeApisRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisRequestTag) GoString() string {
	return s.String()
}

func (s *DescribeApisRequestTag) SetKey(v string) *DescribeApisRequestTag {
	s.Key = &v
	return s
}

func (s *DescribeApisRequestTag) SetValue(v string) *DescribeApisRequestTag {
	s.Value = &v
	return s
}

type DescribeApisResponse struct {
	RequestId   *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount  *int                             `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize    *int                             `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber  *int                             `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	ApiSummarys *DescribeApisResponseApiSummarys `json:"ApiSummarys,omitempty" xml:"ApiSummarys,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApisResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisResponse) GoString() string {
	return s.String()
}

func (s *DescribeApisResponse) SetRequestId(v string) *DescribeApisResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApisResponse) SetTotalCount(v int) *DescribeApisResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeApisResponse) SetPageSize(v int) *DescribeApisResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeApisResponse) SetPageNumber(v int) *DescribeApisResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeApisResponse) SetApiSummarys(v *DescribeApisResponseApiSummarys) *DescribeApisResponse {
	s.ApiSummarys = v
	return s
}

type DescribeApisResponseApiSummarys struct {
	ApiSummary []*DescribeApisResponseApiSummarysApiSummary `json:"ApiSummary,omitempty" xml:"ApiSummary,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApisResponseApiSummarys) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisResponseApiSummarys) GoString() string {
	return s.String()
}

func (s *DescribeApisResponseApiSummarys) SetApiSummary(v []*DescribeApisResponseApiSummarysApiSummary) *DescribeApisResponseApiSummarys {
	s.ApiSummary = v
	return s
}

type DescribeApisResponseApiSummarysApiSummary struct {
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	GroupId      *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName    *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	ApiId        *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName      *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	Visibility   *string `json:"Visibility,omitempty" xml:"Visibility,omitempty" require:"true"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreatedTime  *string `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	ModifiedTime *string `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
}

func (s DescribeApisResponseApiSummarysApiSummary) String() string {
	return tea.Prettify(s)
}

func (s DescribeApisResponseApiSummarysApiSummary) GoString() string {
	return s.String()
}

func (s *DescribeApisResponseApiSummarysApiSummary) SetRegionId(v string) *DescribeApisResponseApiSummarysApiSummary {
	s.RegionId = &v
	return s
}

func (s *DescribeApisResponseApiSummarysApiSummary) SetGroupId(v string) *DescribeApisResponseApiSummarysApiSummary {
	s.GroupId = &v
	return s
}

func (s *DescribeApisResponseApiSummarysApiSummary) SetGroupName(v string) *DescribeApisResponseApiSummarysApiSummary {
	s.GroupName = &v
	return s
}

func (s *DescribeApisResponseApiSummarysApiSummary) SetApiId(v string) *DescribeApisResponseApiSummarysApiSummary {
	s.ApiId = &v
	return s
}

func (s *DescribeApisResponseApiSummarysApiSummary) SetApiName(v string) *DescribeApisResponseApiSummarysApiSummary {
	s.ApiName = &v
	return s
}

func (s *DescribeApisResponseApiSummarysApiSummary) SetVisibility(v string) *DescribeApisResponseApiSummarysApiSummary {
	s.Visibility = &v
	return s
}

func (s *DescribeApisResponseApiSummarysApiSummary) SetDescription(v string) *DescribeApisResponseApiSummarysApiSummary {
	s.Description = &v
	return s
}

func (s *DescribeApisResponseApiSummarysApiSummary) SetCreatedTime(v string) *DescribeApisResponseApiSummarysApiSummary {
	s.CreatedTime = &v
	return s
}

func (s *DescribeApisResponseApiSummarysApiSummary) SetModifiedTime(v string) *DescribeApisResponseApiSummarysApiSummary {
	s.ModifiedTime = &v
	return s
}

type DescribeApiQpsDataRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	StartTime     *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime       *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
}

func (s DescribeApiQpsDataRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiQpsDataRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiQpsDataRequest) SetSecurityToken(v string) *DescribeApiQpsDataRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiQpsDataRequest) SetApiId(v string) *DescribeApiQpsDataRequest {
	s.ApiId = &v
	return s
}

func (s *DescribeApiQpsDataRequest) SetGroupId(v string) *DescribeApiQpsDataRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiQpsDataRequest) SetStartTime(v string) *DescribeApiQpsDataRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeApiQpsDataRequest) SetEndTime(v string) *DescribeApiQpsDataRequest {
	s.EndTime = &v
	return s
}

type DescribeApiQpsDataResponse struct {
	RequestId     *string                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	CallSuccesses *DescribeApiQpsDataResponseCallSuccesses `json:"CallSuccesses,omitempty" xml:"CallSuccesses,omitempty" require:"true" type:"Struct"`
	CallFails     *DescribeApiQpsDataResponseCallFails     `json:"CallFails,omitempty" xml:"CallFails,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiQpsDataResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiQpsDataResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiQpsDataResponse) SetRequestId(v string) *DescribeApiQpsDataResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiQpsDataResponse) SetCallSuccesses(v *DescribeApiQpsDataResponseCallSuccesses) *DescribeApiQpsDataResponse {
	s.CallSuccesses = v
	return s
}

func (s *DescribeApiQpsDataResponse) SetCallFails(v *DescribeApiQpsDataResponseCallFails) *DescribeApiQpsDataResponse {
	s.CallFails = v
	return s
}

type DescribeApiQpsDataResponseCallSuccesses struct {
	MonitorItem []*DescribeApiQpsDataResponseCallSuccessesMonitorItem `json:"MonitorItem,omitempty" xml:"MonitorItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiQpsDataResponseCallSuccesses) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiQpsDataResponseCallSuccesses) GoString() string {
	return s.String()
}

func (s *DescribeApiQpsDataResponseCallSuccesses) SetMonitorItem(v []*DescribeApiQpsDataResponseCallSuccessesMonitorItem) *DescribeApiQpsDataResponseCallSuccesses {
	s.MonitorItem = v
	return s
}

type DescribeApiQpsDataResponseCallSuccessesMonitorItem struct {
	ItemTime  *string `json:"ItemTime,omitempty" xml:"ItemTime,omitempty" require:"true"`
	ItemValue *string `json:"ItemValue,omitempty" xml:"ItemValue,omitempty" require:"true"`
}

func (s DescribeApiQpsDataResponseCallSuccessesMonitorItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiQpsDataResponseCallSuccessesMonitorItem) GoString() string {
	return s.String()
}

func (s *DescribeApiQpsDataResponseCallSuccessesMonitorItem) SetItemTime(v string) *DescribeApiQpsDataResponseCallSuccessesMonitorItem {
	s.ItemTime = &v
	return s
}

func (s *DescribeApiQpsDataResponseCallSuccessesMonitorItem) SetItemValue(v string) *DescribeApiQpsDataResponseCallSuccessesMonitorItem {
	s.ItemValue = &v
	return s
}

type DescribeApiQpsDataResponseCallFails struct {
	MonitorItem []*DescribeApiQpsDataResponseCallFailsMonitorItem `json:"MonitorItem,omitempty" xml:"MonitorItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiQpsDataResponseCallFails) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiQpsDataResponseCallFails) GoString() string {
	return s.String()
}

func (s *DescribeApiQpsDataResponseCallFails) SetMonitorItem(v []*DescribeApiQpsDataResponseCallFailsMonitorItem) *DescribeApiQpsDataResponseCallFails {
	s.MonitorItem = v
	return s
}

type DescribeApiQpsDataResponseCallFailsMonitorItem struct {
	ItemTime  *string `json:"ItemTime,omitempty" xml:"ItemTime,omitempty" require:"true"`
	ItemValue *string `json:"ItemValue,omitempty" xml:"ItemValue,omitempty" require:"true"`
}

func (s DescribeApiQpsDataResponseCallFailsMonitorItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiQpsDataResponseCallFailsMonitorItem) GoString() string {
	return s.String()
}

func (s *DescribeApiQpsDataResponseCallFailsMonitorItem) SetItemTime(v string) *DescribeApiQpsDataResponseCallFailsMonitorItem {
	s.ItemTime = &v
	return s
}

func (s *DescribeApiQpsDataResponseCallFailsMonitorItem) SetItemValue(v string) *DescribeApiQpsDataResponseCallFailsMonitorItem {
	s.ItemValue = &v
	return s
}

type DescribeApiLatencyDataRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	StartTime     *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime       *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
}

func (s DescribeApiLatencyDataRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiLatencyDataRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiLatencyDataRequest) SetSecurityToken(v string) *DescribeApiLatencyDataRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiLatencyDataRequest) SetApiId(v string) *DescribeApiLatencyDataRequest {
	s.ApiId = &v
	return s
}

func (s *DescribeApiLatencyDataRequest) SetGroupId(v string) *DescribeApiLatencyDataRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiLatencyDataRequest) SetStartTime(v string) *DescribeApiLatencyDataRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeApiLatencyDataRequest) SetEndTime(v string) *DescribeApiLatencyDataRequest {
	s.EndTime = &v
	return s
}

type DescribeApiLatencyDataResponse struct {
	RequestId    *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	CallLatencys *DescribeApiLatencyDataResponseCallLatencys `json:"CallLatencys,omitempty" xml:"CallLatencys,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiLatencyDataResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiLatencyDataResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiLatencyDataResponse) SetRequestId(v string) *DescribeApiLatencyDataResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiLatencyDataResponse) SetCallLatencys(v *DescribeApiLatencyDataResponseCallLatencys) *DescribeApiLatencyDataResponse {
	s.CallLatencys = v
	return s
}

type DescribeApiLatencyDataResponseCallLatencys struct {
	MonitorItem []*DescribeApiLatencyDataResponseCallLatencysMonitorItem `json:"MonitorItem,omitempty" xml:"MonitorItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiLatencyDataResponseCallLatencys) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiLatencyDataResponseCallLatencys) GoString() string {
	return s.String()
}

func (s *DescribeApiLatencyDataResponseCallLatencys) SetMonitorItem(v []*DescribeApiLatencyDataResponseCallLatencysMonitorItem) *DescribeApiLatencyDataResponseCallLatencys {
	s.MonitorItem = v
	return s
}

type DescribeApiLatencyDataResponseCallLatencysMonitorItem struct {
	ItemTime  *string `json:"ItemTime,omitempty" xml:"ItemTime,omitempty" require:"true"`
	ItemValue *string `json:"ItemValue,omitempty" xml:"ItemValue,omitempty" require:"true"`
}

func (s DescribeApiLatencyDataResponseCallLatencysMonitorItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiLatencyDataResponseCallLatencysMonitorItem) GoString() string {
	return s.String()
}

func (s *DescribeApiLatencyDataResponseCallLatencysMonitorItem) SetItemTime(v string) *DescribeApiLatencyDataResponseCallLatencysMonitorItem {
	s.ItemTime = &v
	return s
}

func (s *DescribeApiLatencyDataResponseCallLatencysMonitorItem) SetItemValue(v string) *DescribeApiLatencyDataResponseCallLatencysMonitorItem {
	s.ItemValue = &v
	return s
}

type DescribeApiHistoryRequest struct {
	SecurityToken  *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId        *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	ApiId          *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	StageName      *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	HistoryVersion *string `json:"HistoryVersion,omitempty" xml:"HistoryVersion,omitempty" require:"true"`
}

func (s DescribeApiHistoryRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryRequest) SetSecurityToken(v string) *DescribeApiHistoryRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiHistoryRequest) SetGroupId(v string) *DescribeApiHistoryRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiHistoryRequest) SetApiId(v string) *DescribeApiHistoryRequest {
	s.ApiId = &v
	return s
}

func (s *DescribeApiHistoryRequest) SetStageName(v string) *DescribeApiHistoryRequest {
	s.StageName = &v
	return s
}

func (s *DescribeApiHistoryRequest) SetHistoryVersion(v string) *DescribeApiHistoryRequest {
	s.HistoryVersion = &v
	return s
}

type DescribeApiHistoryResponse struct {
	RequestId              *string                                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RegionId               *string                                           `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	GroupId                *string                                           `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName              *string                                           `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	StageName              *string                                           `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	ApiId                  *string                                           `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName                *string                                           `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	Description            *string                                           `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	HistoryVersion         *string                                           `json:"HistoryVersion,omitempty" xml:"HistoryVersion,omitempty" require:"true"`
	Status                 *string                                           `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Visibility             *string                                           `json:"Visibility,omitempty" xml:"Visibility,omitempty" require:"true"`
	AuthType               *string                                           `json:"AuthType,omitempty" xml:"AuthType,omitempty" require:"true"`
	ResultType             *string                                           `json:"ResultType,omitempty" xml:"ResultType,omitempty" require:"true"`
	ResultSample           *string                                           `json:"ResultSample,omitempty" xml:"ResultSample,omitempty" require:"true"`
	FailResultSample       *string                                           `json:"FailResultSample,omitempty" xml:"FailResultSample,omitempty" require:"true"`
	DeployedTime           *string                                           `json:"DeployedTime,omitempty" xml:"DeployedTime,omitempty" require:"true"`
	AllowSignatureMethod   *string                                           `json:"AllowSignatureMethod,omitempty" xml:"AllowSignatureMethod,omitempty" require:"true"`
	ResultBodyModel        *string                                           `json:"ResultBodyModel,omitempty" xml:"ResultBodyModel,omitempty" require:"true"`
	ForceNonceCheck        *bool                                             `json:"ForceNonceCheck,omitempty" xml:"ForceNonceCheck,omitempty" require:"true"`
	DisableInternet        *bool                                             `json:"DisableInternet,omitempty" xml:"DisableInternet,omitempty" require:"true"`
	ErrorCodeSamples       *DescribeApiHistoryResponseErrorCodeSamples       `json:"ErrorCodeSamples,omitempty" xml:"ErrorCodeSamples,omitempty" require:"true" type:"Struct"`
	ResultDescriptions     *DescribeApiHistoryResponseResultDescriptions     `json:"ResultDescriptions,omitempty" xml:"ResultDescriptions,omitempty" require:"true" type:"Struct"`
	SystemParameters       *DescribeApiHistoryResponseSystemParameters       `json:"SystemParameters,omitempty" xml:"SystemParameters,omitempty" require:"true" type:"Struct"`
	CustomSystemParameters *DescribeApiHistoryResponseCustomSystemParameters `json:"CustomSystemParameters,omitempty" xml:"CustomSystemParameters,omitempty" require:"true" type:"Struct"`
	ConstantParameters     *DescribeApiHistoryResponseConstantParameters     `json:"ConstantParameters,omitempty" xml:"ConstantParameters,omitempty" require:"true" type:"Struct"`
	RequestParameters      *DescribeApiHistoryResponseRequestParameters      `json:"RequestParameters,omitempty" xml:"RequestParameters,omitempty" require:"true" type:"Struct"`
	ServiceParameters      *DescribeApiHistoryResponseServiceParameters      `json:"ServiceParameters,omitempty" xml:"ServiceParameters,omitempty" require:"true" type:"Struct"`
	ServiceParametersMap   *DescribeApiHistoryResponseServiceParametersMap   `json:"ServiceParametersMap,omitempty" xml:"ServiceParametersMap,omitempty" require:"true" type:"Struct"`
	RequestConfig          *DescribeApiHistoryResponseRequestConfig          `json:"RequestConfig,omitempty" xml:"RequestConfig,omitempty" require:"true" type:"Struct"`
	ServiceConfig          *DescribeApiHistoryResponseServiceConfig          `json:"ServiceConfig,omitempty" xml:"ServiceConfig,omitempty" require:"true" type:"Struct"`
	OpenIdConnectConfig    *DescribeApiHistoryResponseOpenIdConnectConfig    `json:"OpenIdConnectConfig,omitempty" xml:"OpenIdConnectConfig,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiHistoryResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponse) SetRequestId(v string) *DescribeApiHistoryResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetRegionId(v string) *DescribeApiHistoryResponse {
	s.RegionId = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetGroupId(v string) *DescribeApiHistoryResponse {
	s.GroupId = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetGroupName(v string) *DescribeApiHistoryResponse {
	s.GroupName = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetStageName(v string) *DescribeApiHistoryResponse {
	s.StageName = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetApiId(v string) *DescribeApiHistoryResponse {
	s.ApiId = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetApiName(v string) *DescribeApiHistoryResponse {
	s.ApiName = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetDescription(v string) *DescribeApiHistoryResponse {
	s.Description = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetHistoryVersion(v string) *DescribeApiHistoryResponse {
	s.HistoryVersion = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetStatus(v string) *DescribeApiHistoryResponse {
	s.Status = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetVisibility(v string) *DescribeApiHistoryResponse {
	s.Visibility = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetAuthType(v string) *DescribeApiHistoryResponse {
	s.AuthType = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetResultType(v string) *DescribeApiHistoryResponse {
	s.ResultType = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetResultSample(v string) *DescribeApiHistoryResponse {
	s.ResultSample = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetFailResultSample(v string) *DescribeApiHistoryResponse {
	s.FailResultSample = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetDeployedTime(v string) *DescribeApiHistoryResponse {
	s.DeployedTime = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetAllowSignatureMethod(v string) *DescribeApiHistoryResponse {
	s.AllowSignatureMethod = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetResultBodyModel(v string) *DescribeApiHistoryResponse {
	s.ResultBodyModel = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetForceNonceCheck(v bool) *DescribeApiHistoryResponse {
	s.ForceNonceCheck = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetDisableInternet(v bool) *DescribeApiHistoryResponse {
	s.DisableInternet = &v
	return s
}

func (s *DescribeApiHistoryResponse) SetErrorCodeSamples(v *DescribeApiHistoryResponseErrorCodeSamples) *DescribeApiHistoryResponse {
	s.ErrorCodeSamples = v
	return s
}

func (s *DescribeApiHistoryResponse) SetResultDescriptions(v *DescribeApiHistoryResponseResultDescriptions) *DescribeApiHistoryResponse {
	s.ResultDescriptions = v
	return s
}

func (s *DescribeApiHistoryResponse) SetSystemParameters(v *DescribeApiHistoryResponseSystemParameters) *DescribeApiHistoryResponse {
	s.SystemParameters = v
	return s
}

func (s *DescribeApiHistoryResponse) SetCustomSystemParameters(v *DescribeApiHistoryResponseCustomSystemParameters) *DescribeApiHistoryResponse {
	s.CustomSystemParameters = v
	return s
}

func (s *DescribeApiHistoryResponse) SetConstantParameters(v *DescribeApiHistoryResponseConstantParameters) *DescribeApiHistoryResponse {
	s.ConstantParameters = v
	return s
}

func (s *DescribeApiHistoryResponse) SetRequestParameters(v *DescribeApiHistoryResponseRequestParameters) *DescribeApiHistoryResponse {
	s.RequestParameters = v
	return s
}

func (s *DescribeApiHistoryResponse) SetServiceParameters(v *DescribeApiHistoryResponseServiceParameters) *DescribeApiHistoryResponse {
	s.ServiceParameters = v
	return s
}

func (s *DescribeApiHistoryResponse) SetServiceParametersMap(v *DescribeApiHistoryResponseServiceParametersMap) *DescribeApiHistoryResponse {
	s.ServiceParametersMap = v
	return s
}

func (s *DescribeApiHistoryResponse) SetRequestConfig(v *DescribeApiHistoryResponseRequestConfig) *DescribeApiHistoryResponse {
	s.RequestConfig = v
	return s
}

func (s *DescribeApiHistoryResponse) SetServiceConfig(v *DescribeApiHistoryResponseServiceConfig) *DescribeApiHistoryResponse {
	s.ServiceConfig = v
	return s
}

func (s *DescribeApiHistoryResponse) SetOpenIdConnectConfig(v *DescribeApiHistoryResponseOpenIdConnectConfig) *DescribeApiHistoryResponse {
	s.OpenIdConnectConfig = v
	return s
}

type DescribeApiHistoryResponseErrorCodeSamples struct {
	ErrorCodeSample []*DescribeApiHistoryResponseErrorCodeSamplesErrorCodeSample `json:"ErrorCodeSample,omitempty" xml:"ErrorCodeSample,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiHistoryResponseErrorCodeSamples) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseErrorCodeSamples) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseErrorCodeSamples) SetErrorCodeSample(v []*DescribeApiHistoryResponseErrorCodeSamplesErrorCodeSample) *DescribeApiHistoryResponseErrorCodeSamples {
	s.ErrorCodeSample = v
	return s
}

type DescribeApiHistoryResponseErrorCodeSamplesErrorCodeSample struct {
	Code        *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message     *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeApiHistoryResponseErrorCodeSamplesErrorCodeSample) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseErrorCodeSamplesErrorCodeSample) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseErrorCodeSamplesErrorCodeSample) SetCode(v string) *DescribeApiHistoryResponseErrorCodeSamplesErrorCodeSample {
	s.Code = &v
	return s
}

func (s *DescribeApiHistoryResponseErrorCodeSamplesErrorCodeSample) SetMessage(v string) *DescribeApiHistoryResponseErrorCodeSamplesErrorCodeSample {
	s.Message = &v
	return s
}

func (s *DescribeApiHistoryResponseErrorCodeSamplesErrorCodeSample) SetDescription(v string) *DescribeApiHistoryResponseErrorCodeSamplesErrorCodeSample {
	s.Description = &v
	return s
}

type DescribeApiHistoryResponseResultDescriptions struct {
	ResultDescription []*DescribeApiHistoryResponseResultDescriptionsResultDescription `json:"ResultDescription,omitempty" xml:"ResultDescription,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiHistoryResponseResultDescriptions) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseResultDescriptions) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseResultDescriptions) SetResultDescription(v []*DescribeApiHistoryResponseResultDescriptionsResultDescription) *DescribeApiHistoryResponseResultDescriptions {
	s.ResultDescription = v
	return s
}

type DescribeApiHistoryResponseResultDescriptionsResultDescription struct {
	Id          *string `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Pid         *string `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
	HasChild    *bool   `json:"HasChild,omitempty" xml:"HasChild,omitempty" require:"true"`
	Key         *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Name        *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Mandatory   *bool   `json:"Mandatory,omitempty" xml:"Mandatory,omitempty" require:"true"`
	Type        *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeApiHistoryResponseResultDescriptionsResultDescription) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseResultDescriptionsResultDescription) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseResultDescriptionsResultDescription) SetId(v string) *DescribeApiHistoryResponseResultDescriptionsResultDescription {
	s.Id = &v
	return s
}

func (s *DescribeApiHistoryResponseResultDescriptionsResultDescription) SetPid(v string) *DescribeApiHistoryResponseResultDescriptionsResultDescription {
	s.Pid = &v
	return s
}

func (s *DescribeApiHistoryResponseResultDescriptionsResultDescription) SetHasChild(v bool) *DescribeApiHistoryResponseResultDescriptionsResultDescription {
	s.HasChild = &v
	return s
}

func (s *DescribeApiHistoryResponseResultDescriptionsResultDescription) SetKey(v string) *DescribeApiHistoryResponseResultDescriptionsResultDescription {
	s.Key = &v
	return s
}

func (s *DescribeApiHistoryResponseResultDescriptionsResultDescription) SetName(v string) *DescribeApiHistoryResponseResultDescriptionsResultDescription {
	s.Name = &v
	return s
}

func (s *DescribeApiHistoryResponseResultDescriptionsResultDescription) SetMandatory(v bool) *DescribeApiHistoryResponseResultDescriptionsResultDescription {
	s.Mandatory = &v
	return s
}

func (s *DescribeApiHistoryResponseResultDescriptionsResultDescription) SetType(v string) *DescribeApiHistoryResponseResultDescriptionsResultDescription {
	s.Type = &v
	return s
}

func (s *DescribeApiHistoryResponseResultDescriptionsResultDescription) SetDescription(v string) *DescribeApiHistoryResponseResultDescriptionsResultDescription {
	s.Description = &v
	return s
}

type DescribeApiHistoryResponseSystemParameters struct {
	SystemParameter []*DescribeApiHistoryResponseSystemParametersSystemParameter `json:"SystemParameter,omitempty" xml:"SystemParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiHistoryResponseSystemParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseSystemParameters) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseSystemParameters) SetSystemParameter(v []*DescribeApiHistoryResponseSystemParametersSystemParameter) *DescribeApiHistoryResponseSystemParameters {
	s.SystemParameter = v
	return s
}

type DescribeApiHistoryResponseSystemParametersSystemParameter struct {
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	Location             *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	DemoValue            *string `json:"DemoValue,omitempty" xml:"DemoValue,omitempty" require:"true"`
	Description          *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeApiHistoryResponseSystemParametersSystemParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseSystemParametersSystemParameter) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseSystemParametersSystemParameter) SetParameterName(v string) *DescribeApiHistoryResponseSystemParametersSystemParameter {
	s.ParameterName = &v
	return s
}

func (s *DescribeApiHistoryResponseSystemParametersSystemParameter) SetServiceParameterName(v string) *DescribeApiHistoryResponseSystemParametersSystemParameter {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeApiHistoryResponseSystemParametersSystemParameter) SetLocation(v string) *DescribeApiHistoryResponseSystemParametersSystemParameter {
	s.Location = &v
	return s
}

func (s *DescribeApiHistoryResponseSystemParametersSystemParameter) SetDemoValue(v string) *DescribeApiHistoryResponseSystemParametersSystemParameter {
	s.DemoValue = &v
	return s
}

func (s *DescribeApiHistoryResponseSystemParametersSystemParameter) SetDescription(v string) *DescribeApiHistoryResponseSystemParametersSystemParameter {
	s.Description = &v
	return s
}

type DescribeApiHistoryResponseCustomSystemParameters struct {
	CustomSystemParameter []*DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter `json:"CustomSystemParameter,omitempty" xml:"CustomSystemParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiHistoryResponseCustomSystemParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseCustomSystemParameters) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseCustomSystemParameters) SetCustomSystemParameter(v []*DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter) *DescribeApiHistoryResponseCustomSystemParameters {
	s.CustomSystemParameter = v
	return s
}

type DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter struct {
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	Location             *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	DemoValue            *string `json:"DemoValue,omitempty" xml:"DemoValue,omitempty" require:"true"`
	Description          *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter) SetParameterName(v string) *DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter {
	s.ParameterName = &v
	return s
}

func (s *DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter) SetServiceParameterName(v string) *DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter) SetLocation(v string) *DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter {
	s.Location = &v
	return s
}

func (s *DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter) SetDemoValue(v string) *DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter {
	s.DemoValue = &v
	return s
}

func (s *DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter) SetDescription(v string) *DescribeApiHistoryResponseCustomSystemParametersCustomSystemParameter {
	s.Description = &v
	return s
}

type DescribeApiHistoryResponseConstantParameters struct {
	ConstantParameter []*DescribeApiHistoryResponseConstantParametersConstantParameter `json:"ConstantParameter,omitempty" xml:"ConstantParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiHistoryResponseConstantParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseConstantParameters) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseConstantParameters) SetConstantParameter(v []*DescribeApiHistoryResponseConstantParametersConstantParameter) *DescribeApiHistoryResponseConstantParameters {
	s.ConstantParameter = v
	return s
}

type DescribeApiHistoryResponseConstantParametersConstantParameter struct {
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	ConstantValue        *string `json:"ConstantValue,omitempty" xml:"ConstantValue,omitempty" require:"true"`
	Location             *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	Description          *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeApiHistoryResponseConstantParametersConstantParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseConstantParametersConstantParameter) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseConstantParametersConstantParameter) SetServiceParameterName(v string) *DescribeApiHistoryResponseConstantParametersConstantParameter {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeApiHistoryResponseConstantParametersConstantParameter) SetConstantValue(v string) *DescribeApiHistoryResponseConstantParametersConstantParameter {
	s.ConstantValue = &v
	return s
}

func (s *DescribeApiHistoryResponseConstantParametersConstantParameter) SetLocation(v string) *DescribeApiHistoryResponseConstantParametersConstantParameter {
	s.Location = &v
	return s
}

func (s *DescribeApiHistoryResponseConstantParametersConstantParameter) SetDescription(v string) *DescribeApiHistoryResponseConstantParametersConstantParameter {
	s.Description = &v
	return s
}

type DescribeApiHistoryResponseRequestParameters struct {
	RequestParameter []*DescribeApiHistoryResponseRequestParametersRequestParameter `json:"RequestParameter,omitempty" xml:"RequestParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiHistoryResponseRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseRequestParameters) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseRequestParameters) SetRequestParameter(v []*DescribeApiHistoryResponseRequestParametersRequestParameter) *DescribeApiHistoryResponseRequestParameters {
	s.RequestParameter = v
	return s
}

type DescribeApiHistoryResponseRequestParametersRequestParameter struct {
	ApiParameterName  *string `json:"ApiParameterName,omitempty" xml:"ApiParameterName,omitempty" require:"true"`
	Location          *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	ParameterType     *string `json:"ParameterType,omitempty" xml:"ParameterType,omitempty" require:"true"`
	Required          *string `json:"Required,omitempty" xml:"Required,omitempty" require:"true"`
	DefaultValue      *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	DemoValue         *string `json:"DemoValue,omitempty" xml:"DemoValue,omitempty" require:"true"`
	MaxValue          *int64  `json:"MaxValue,omitempty" xml:"MaxValue,omitempty" require:"true"`
	MinValue          *int64  `json:"MinValue,omitempty" xml:"MinValue,omitempty" require:"true"`
	MaxLength         *int64  `json:"MaxLength,omitempty" xml:"MaxLength,omitempty" require:"true"`
	MinLength         *int64  `json:"MinLength,omitempty" xml:"MinLength,omitempty" require:"true"`
	RegularExpression *string `json:"RegularExpression,omitempty" xml:"RegularExpression,omitempty" require:"true"`
	JsonScheme        *string `json:"JsonScheme,omitempty" xml:"JsonScheme,omitempty" require:"true"`
	EnumValue         *string `json:"EnumValue,omitempty" xml:"EnumValue,omitempty" require:"true"`
	DocShow           *string `json:"DocShow,omitempty" xml:"DocShow,omitempty" require:"true"`
	DocOrder          *int    `json:"DocOrder,omitempty" xml:"DocOrder,omitempty" require:"true"`
	Description       *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	ArrayItemsType    *string `json:"ArrayItemsType,omitempty" xml:"ArrayItemsType,omitempty" require:"true"`
}

func (s DescribeApiHistoryResponseRequestParametersRequestParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseRequestParametersRequestParameter) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetApiParameterName(v string) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.ApiParameterName = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetLocation(v string) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.Location = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetParameterType(v string) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.ParameterType = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetRequired(v string) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.Required = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetDefaultValue(v string) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.DefaultValue = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetDemoValue(v string) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.DemoValue = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetMaxValue(v int64) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.MaxValue = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetMinValue(v int64) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.MinValue = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetMaxLength(v int64) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.MaxLength = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetMinLength(v int64) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.MinLength = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetRegularExpression(v string) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.RegularExpression = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetJsonScheme(v string) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.JsonScheme = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetEnumValue(v string) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.EnumValue = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetDocShow(v string) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.DocShow = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetDocOrder(v int) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.DocOrder = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetDescription(v string) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.Description = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestParametersRequestParameter) SetArrayItemsType(v string) *DescribeApiHistoryResponseRequestParametersRequestParameter {
	s.ArrayItemsType = &v
	return s
}

type DescribeApiHistoryResponseServiceParameters struct {
	ServiceParameter []*DescribeApiHistoryResponseServiceParametersServiceParameter `json:"ServiceParameter,omitempty" xml:"ServiceParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiHistoryResponseServiceParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseServiceParameters) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseServiceParameters) SetServiceParameter(v []*DescribeApiHistoryResponseServiceParametersServiceParameter) *DescribeApiHistoryResponseServiceParameters {
	s.ServiceParameter = v
	return s
}

type DescribeApiHistoryResponseServiceParametersServiceParameter struct {
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	Location             *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	ParameterType        *string `json:"ParameterType,omitempty" xml:"ParameterType,omitempty" require:"true"`
}

func (s DescribeApiHistoryResponseServiceParametersServiceParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseServiceParametersServiceParameter) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseServiceParametersServiceParameter) SetServiceParameterName(v string) *DescribeApiHistoryResponseServiceParametersServiceParameter {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceParametersServiceParameter) SetLocation(v string) *DescribeApiHistoryResponseServiceParametersServiceParameter {
	s.Location = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceParametersServiceParameter) SetParameterType(v string) *DescribeApiHistoryResponseServiceParametersServiceParameter {
	s.ParameterType = &v
	return s
}

type DescribeApiHistoryResponseServiceParametersMap struct {
	ServiceParameterMap []*DescribeApiHistoryResponseServiceParametersMapServiceParameterMap `json:"ServiceParameterMap,omitempty" xml:"ServiceParameterMap,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiHistoryResponseServiceParametersMap) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseServiceParametersMap) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseServiceParametersMap) SetServiceParameterMap(v []*DescribeApiHistoryResponseServiceParametersMapServiceParameterMap) *DescribeApiHistoryResponseServiceParametersMap {
	s.ServiceParameterMap = v
	return s
}

type DescribeApiHistoryResponseServiceParametersMapServiceParameterMap struct {
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	RequestParameterName *string `json:"RequestParameterName,omitempty" xml:"RequestParameterName,omitempty" require:"true"`
}

func (s DescribeApiHistoryResponseServiceParametersMapServiceParameterMap) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseServiceParametersMapServiceParameterMap) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseServiceParametersMapServiceParameterMap) SetServiceParameterName(v string) *DescribeApiHistoryResponseServiceParametersMapServiceParameterMap {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceParametersMapServiceParameterMap) SetRequestParameterName(v string) *DescribeApiHistoryResponseServiceParametersMapServiceParameterMap {
	s.RequestParameterName = &v
	return s
}

type DescribeApiHistoryResponseRequestConfig struct {
	RequestProtocol     *string `json:"RequestProtocol,omitempty" xml:"RequestProtocol,omitempty" require:"true"`
	RequestHttpMethod   *string `json:"RequestHttpMethod,omitempty" xml:"RequestHttpMethod,omitempty" require:"true"`
	RequestPath         *string `json:"RequestPath,omitempty" xml:"RequestPath,omitempty" require:"true"`
	BodyFormat          *string `json:"BodyFormat,omitempty" xml:"BodyFormat,omitempty" require:"true"`
	PostBodyDescription *string `json:"PostBodyDescription,omitempty" xml:"PostBodyDescription,omitempty" require:"true"`
	RequestMode         *string `json:"RequestMode,omitempty" xml:"RequestMode,omitempty" require:"true"`
	BodyModel           *string `json:"BodyModel,omitempty" xml:"BodyModel,omitempty" require:"true"`
}

func (s DescribeApiHistoryResponseRequestConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseRequestConfig) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseRequestConfig) SetRequestProtocol(v string) *DescribeApiHistoryResponseRequestConfig {
	s.RequestProtocol = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestConfig) SetRequestHttpMethod(v string) *DescribeApiHistoryResponseRequestConfig {
	s.RequestHttpMethod = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestConfig) SetRequestPath(v string) *DescribeApiHistoryResponseRequestConfig {
	s.RequestPath = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestConfig) SetBodyFormat(v string) *DescribeApiHistoryResponseRequestConfig {
	s.BodyFormat = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestConfig) SetPostBodyDescription(v string) *DescribeApiHistoryResponseRequestConfig {
	s.PostBodyDescription = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestConfig) SetRequestMode(v string) *DescribeApiHistoryResponseRequestConfig {
	s.RequestMode = &v
	return s
}

func (s *DescribeApiHistoryResponseRequestConfig) SetBodyModel(v string) *DescribeApiHistoryResponseRequestConfig {
	s.BodyModel = &v
	return s
}

type DescribeApiHistoryResponseServiceConfig struct {
	ServiceProtocol       *string                                                       `json:"ServiceProtocol,omitempty" xml:"ServiceProtocol,omitempty" require:"true"`
	ServiceAddress        *string                                                       `json:"ServiceAddress,omitempty" xml:"ServiceAddress,omitempty" require:"true"`
	ServiceHttpMethod     *string                                                       `json:"ServiceHttpMethod,omitempty" xml:"ServiceHttpMethod,omitempty" require:"true"`
	ServicePath           *string                                                       `json:"ServicePath,omitempty" xml:"ServicePath,omitempty" require:"true"`
	ServiceTimeout        *int                                                          `json:"ServiceTimeout,omitempty" xml:"ServiceTimeout,omitempty" require:"true"`
	Mock                  *string                                                       `json:"Mock,omitempty" xml:"Mock,omitempty" require:"true"`
	MockResult            *string                                                       `json:"MockResult,omitempty" xml:"MockResult,omitempty" require:"true"`
	ServiceVpcEnable      *string                                                       `json:"ServiceVpcEnable,omitempty" xml:"ServiceVpcEnable,omitempty" require:"true"`
	MockStatusCode        *int                                                          `json:"MockStatusCode,omitempty" xml:"MockStatusCode,omitempty" require:"true"`
	VpcId                 *string                                                       `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	MockHeaders           *DescribeApiHistoryResponseServiceConfigMockHeaders           `json:"MockHeaders,omitempty" xml:"MockHeaders,omitempty" require:"true" type:"Struct"`
	VpcConfig             *DescribeApiHistoryResponseServiceConfigVpcConfig             `json:"VpcConfig,omitempty" xml:"VpcConfig,omitempty" require:"true" type:"Struct"`
	FunctionComputeConfig *DescribeApiHistoryResponseServiceConfigFunctionComputeConfig `json:"FunctionComputeConfig,omitempty" xml:"FunctionComputeConfig,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiHistoryResponseServiceConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseServiceConfig) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseServiceConfig) SetServiceProtocol(v string) *DescribeApiHistoryResponseServiceConfig {
	s.ServiceProtocol = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfig) SetServiceAddress(v string) *DescribeApiHistoryResponseServiceConfig {
	s.ServiceAddress = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfig) SetServiceHttpMethod(v string) *DescribeApiHistoryResponseServiceConfig {
	s.ServiceHttpMethod = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfig) SetServicePath(v string) *DescribeApiHistoryResponseServiceConfig {
	s.ServicePath = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfig) SetServiceTimeout(v int) *DescribeApiHistoryResponseServiceConfig {
	s.ServiceTimeout = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfig) SetMock(v string) *DescribeApiHistoryResponseServiceConfig {
	s.Mock = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfig) SetMockResult(v string) *DescribeApiHistoryResponseServiceConfig {
	s.MockResult = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfig) SetServiceVpcEnable(v string) *DescribeApiHistoryResponseServiceConfig {
	s.ServiceVpcEnable = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfig) SetMockStatusCode(v int) *DescribeApiHistoryResponseServiceConfig {
	s.MockStatusCode = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfig) SetVpcId(v string) *DescribeApiHistoryResponseServiceConfig {
	s.VpcId = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfig) SetMockHeaders(v *DescribeApiHistoryResponseServiceConfigMockHeaders) *DescribeApiHistoryResponseServiceConfig {
	s.MockHeaders = v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfig) SetVpcConfig(v *DescribeApiHistoryResponseServiceConfigVpcConfig) *DescribeApiHistoryResponseServiceConfig {
	s.VpcConfig = v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfig) SetFunctionComputeConfig(v *DescribeApiHistoryResponseServiceConfigFunctionComputeConfig) *DescribeApiHistoryResponseServiceConfig {
	s.FunctionComputeConfig = v
	return s
}

type DescribeApiHistoryResponseServiceConfigMockHeaders struct {
	MockHeader []*DescribeApiHistoryResponseServiceConfigMockHeadersMockHeader `json:"MockHeader,omitempty" xml:"MockHeader,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiHistoryResponseServiceConfigMockHeaders) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseServiceConfigMockHeaders) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseServiceConfigMockHeaders) SetMockHeader(v []*DescribeApiHistoryResponseServiceConfigMockHeadersMockHeader) *DescribeApiHistoryResponseServiceConfigMockHeaders {
	s.MockHeader = v
	return s
}

type DescribeApiHistoryResponseServiceConfigMockHeadersMockHeader struct {
	HeaderName  *string `json:"HeaderName,omitempty" xml:"HeaderName,omitempty" require:"true"`
	HeaderValue *string `json:"HeaderValue,omitempty" xml:"HeaderValue,omitempty" require:"true"`
}

func (s DescribeApiHistoryResponseServiceConfigMockHeadersMockHeader) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseServiceConfigMockHeadersMockHeader) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseServiceConfigMockHeadersMockHeader) SetHeaderName(v string) *DescribeApiHistoryResponseServiceConfigMockHeadersMockHeader {
	s.HeaderName = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfigMockHeadersMockHeader) SetHeaderValue(v string) *DescribeApiHistoryResponseServiceConfigMockHeadersMockHeader {
	s.HeaderValue = &v
	return s
}

type DescribeApiHistoryResponseServiceConfigVpcConfig struct {
	Name       *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	VpcId      *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	Port       *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
}

func (s DescribeApiHistoryResponseServiceConfigVpcConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseServiceConfigVpcConfig) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseServiceConfigVpcConfig) SetName(v string) *DescribeApiHistoryResponseServiceConfigVpcConfig {
	s.Name = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfigVpcConfig) SetVpcId(v string) *DescribeApiHistoryResponseServiceConfigVpcConfig {
	s.VpcId = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfigVpcConfig) SetInstanceId(v string) *DescribeApiHistoryResponseServiceConfigVpcConfig {
	s.InstanceId = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfigVpcConfig) SetPort(v int) *DescribeApiHistoryResponseServiceConfigVpcConfig {
	s.Port = &v
	return s
}

type DescribeApiHistoryResponseServiceConfigFunctionComputeConfig struct {
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ServiceName  *string `json:"ServiceName,omitempty" xml:"ServiceName,omitempty" require:"true"`
	FunctionName *string `json:"FunctionName,omitempty" xml:"FunctionName,omitempty" require:"true"`
	RoleArn      *string `json:"RoleArn,omitempty" xml:"RoleArn,omitempty" require:"true"`
}

func (s DescribeApiHistoryResponseServiceConfigFunctionComputeConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseServiceConfigFunctionComputeConfig) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseServiceConfigFunctionComputeConfig) SetRegionId(v string) *DescribeApiHistoryResponseServiceConfigFunctionComputeConfig {
	s.RegionId = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfigFunctionComputeConfig) SetServiceName(v string) *DescribeApiHistoryResponseServiceConfigFunctionComputeConfig {
	s.ServiceName = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfigFunctionComputeConfig) SetFunctionName(v string) *DescribeApiHistoryResponseServiceConfigFunctionComputeConfig {
	s.FunctionName = &v
	return s
}

func (s *DescribeApiHistoryResponseServiceConfigFunctionComputeConfig) SetRoleArn(v string) *DescribeApiHistoryResponseServiceConfigFunctionComputeConfig {
	s.RoleArn = &v
	return s
}

type DescribeApiHistoryResponseOpenIdConnectConfig struct {
	OpenIdApiType    *string `json:"OpenIdApiType,omitempty" xml:"OpenIdApiType,omitempty" require:"true"`
	IdTokenParamName *string `json:"IdTokenParamName,omitempty" xml:"IdTokenParamName,omitempty" require:"true"`
	PublicKeyId      *string `json:"PublicKeyId,omitempty" xml:"PublicKeyId,omitempty" require:"true"`
	PublicKey        *string `json:"PublicKey,omitempty" xml:"PublicKey,omitempty" require:"true"`
}

func (s DescribeApiHistoryResponseOpenIdConnectConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiHistoryResponseOpenIdConnectConfig) GoString() string {
	return s.String()
}

func (s *DescribeApiHistoryResponseOpenIdConnectConfig) SetOpenIdApiType(v string) *DescribeApiHistoryResponseOpenIdConnectConfig {
	s.OpenIdApiType = &v
	return s
}

func (s *DescribeApiHistoryResponseOpenIdConnectConfig) SetIdTokenParamName(v string) *DescribeApiHistoryResponseOpenIdConnectConfig {
	s.IdTokenParamName = &v
	return s
}

func (s *DescribeApiHistoryResponseOpenIdConnectConfig) SetPublicKeyId(v string) *DescribeApiHistoryResponseOpenIdConnectConfig {
	s.PublicKeyId = &v
	return s
}

func (s *DescribeApiHistoryResponseOpenIdConnectConfig) SetPublicKey(v string) *DescribeApiHistoryResponseOpenIdConnectConfig {
	s.PublicKey = &v
	return s
}

type DescribeApiGroupsRequest struct {
	SecurityToken *string                        `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string                        `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	GroupName     *string                        `json:"GroupName,omitempty" xml:"GroupName,omitempty"`
	PageNumber    *int                           `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize      *int                           `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	Tag           []*DescribeApiGroupsRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
	EnableTagAuth *bool                          `json:"EnableTagAuth,omitempty" xml:"EnableTagAuth,omitempty"`
	InstanceId    *string                        `json:"InstanceId,omitempty" xml:"InstanceId,omitempty"`
}

func (s DescribeApiGroupsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupsRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupsRequest) SetSecurityToken(v string) *DescribeApiGroupsRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiGroupsRequest) SetGroupId(v string) *DescribeApiGroupsRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiGroupsRequest) SetGroupName(v string) *DescribeApiGroupsRequest {
	s.GroupName = &v
	return s
}

func (s *DescribeApiGroupsRequest) SetPageNumber(v int) *DescribeApiGroupsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeApiGroupsRequest) SetPageSize(v int) *DescribeApiGroupsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeApiGroupsRequest) SetTag(v []*DescribeApiGroupsRequestTag) *DescribeApiGroupsRequest {
	s.Tag = v
	return s
}

func (s *DescribeApiGroupsRequest) SetEnableTagAuth(v bool) *DescribeApiGroupsRequest {
	s.EnableTagAuth = &v
	return s
}

func (s *DescribeApiGroupsRequest) SetInstanceId(v string) *DescribeApiGroupsRequest {
	s.InstanceId = &v
	return s
}

type DescribeApiGroupsRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s DescribeApiGroupsRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupsRequestTag) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupsRequestTag) SetKey(v string) *DescribeApiGroupsRequestTag {
	s.Key = &v
	return s
}

func (s *DescribeApiGroupsRequestTag) SetValue(v string) *DescribeApiGroupsRequestTag {
	s.Value = &v
	return s
}

type DescribeApiGroupsResponse struct {
	RequestId          *string                                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TotalCount         *int                                         `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize           *int                                         `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PageNumber         *int                                         `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	ApiGroupAttributes *DescribeApiGroupsResponseApiGroupAttributes `json:"ApiGroupAttributes,omitempty" xml:"ApiGroupAttributes,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiGroupsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupsResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupsResponse) SetRequestId(v string) *DescribeApiGroupsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiGroupsResponse) SetTotalCount(v int) *DescribeApiGroupsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeApiGroupsResponse) SetPageSize(v int) *DescribeApiGroupsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeApiGroupsResponse) SetPageNumber(v int) *DescribeApiGroupsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeApiGroupsResponse) SetApiGroupAttributes(v *DescribeApiGroupsResponseApiGroupAttributes) *DescribeApiGroupsResponse {
	s.ApiGroupAttributes = v
	return s
}

type DescribeApiGroupsResponseApiGroupAttributes struct {
	ApiGroupAttribute []*DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute `json:"ApiGroupAttribute,omitempty" xml:"ApiGroupAttribute,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiGroupsResponseApiGroupAttributes) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupsResponseApiGroupAttributes) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupsResponseApiGroupAttributes) SetApiGroupAttribute(v []*DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) *DescribeApiGroupsResponseApiGroupAttributes {
	s.ApiGroupAttribute = v
	return s
}

type DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute struct {
	GroupId       *string                                                           `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName     *string                                                           `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	SubDomain     *string                                                           `json:"SubDomain,omitempty" xml:"SubDomain,omitempty" require:"true"`
	Description   *string                                                           `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreatedTime   *string                                                           `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	ModifiedTime  *string                                                           `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	RegionId      *string                                                           `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	TrafficLimit  *int                                                              `json:"TrafficLimit,omitempty" xml:"TrafficLimit,omitempty" require:"true"`
	BillingStatus *string                                                           `json:"BillingStatus,omitempty" xml:"BillingStatus,omitempty" require:"true"`
	IllegalStatus *string                                                           `json:"IllegalStatus,omitempty" xml:"IllegalStatus,omitempty" require:"true"`
	InstanceId    *string                                                           `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	InstanceType  *string                                                           `json:"InstanceType,omitempty" xml:"InstanceType,omitempty" require:"true"`
	HttpsPolicy   *string                                                           `json:"HttpsPolicy,omitempty" xml:"HttpsPolicy,omitempty" require:"true"`
	Tags          *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTags `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) SetGroupId(v string) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute {
	s.GroupId = &v
	return s
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) SetGroupName(v string) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute {
	s.GroupName = &v
	return s
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) SetSubDomain(v string) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute {
	s.SubDomain = &v
	return s
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) SetDescription(v string) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute {
	s.Description = &v
	return s
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) SetCreatedTime(v string) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute {
	s.CreatedTime = &v
	return s
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) SetModifiedTime(v string) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute {
	s.ModifiedTime = &v
	return s
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) SetRegionId(v string) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute {
	s.RegionId = &v
	return s
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) SetTrafficLimit(v int) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute {
	s.TrafficLimit = &v
	return s
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) SetBillingStatus(v string) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute {
	s.BillingStatus = &v
	return s
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) SetIllegalStatus(v string) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute {
	s.IllegalStatus = &v
	return s
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) SetInstanceId(v string) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute {
	s.InstanceId = &v
	return s
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) SetInstanceType(v string) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute {
	s.InstanceType = &v
	return s
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) SetHttpsPolicy(v string) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute {
	s.HttpsPolicy = &v
	return s
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute) SetTags(v *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTags) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttribute {
	s.Tags = v
	return s
}

type DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTags struct {
	TagInfo []*DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTagsTagInfo `json:"TagInfo,omitempty" xml:"TagInfo,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTags) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTags) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTags) SetTagInfo(v []*DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTagsTagInfo) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTags {
	s.TagInfo = v
	return s
}

type DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTagsTagInfo struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTagsTagInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTagsTagInfo) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTagsTagInfo) SetKey(v string) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTagsTagInfo {
	s.Key = &v
	return s
}

func (s *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTagsTagInfo) SetValue(v string) *DescribeApiGroupsResponseApiGroupAttributesApiGroupAttributeTagsTagInfo {
	s.Value = &v
	return s
}

type DescribeApiGroupRequest struct {
	SecurityToken *string                       `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string                       `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	Tag           []*DescribeApiGroupRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s DescribeApiGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupRequest) SetSecurityToken(v string) *DescribeApiGroupRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiGroupRequest) SetGroupId(v string) *DescribeApiGroupRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiGroupRequest) SetTag(v []*DescribeApiGroupRequestTag) *DescribeApiGroupRequest {
	s.Tag = v
	return s
}

type DescribeApiGroupRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeApiGroupRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupRequestTag) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupRequestTag) SetKey(v string) *DescribeApiGroupRequestTag {
	s.Key = &v
	return s
}

func (s *DescribeApiGroupRequestTag) SetValue(v string) *DescribeApiGroupRequestTag {
	s.Value = &v
	return s
}

type DescribeApiGroupResponse struct {
	RequestId           *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	GroupId             *string                                `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName           *string                                `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	SubDomain           *string                                `json:"SubDomain,omitempty" xml:"SubDomain,omitempty" require:"true"`
	Description         *string                                `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreatedTime         *string                                `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	ModifiedTime        *string                                `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	RegionId            *string                                `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Status              *string                                `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	BillingStatus       *string                                `json:"BillingStatus,omitempty" xml:"BillingStatus,omitempty" require:"true"`
	IllegalStatus       *string                                `json:"IllegalStatus,omitempty" xml:"IllegalStatus,omitempty" require:"true"`
	Ipv6Status          *string                                `json:"Ipv6Status,omitempty" xml:"Ipv6Status,omitempty" require:"true"`
	TrafficLimit        *int                                   `json:"TrafficLimit,omitempty" xml:"TrafficLimit,omitempty" require:"true"`
	VpcDomain           *string                                `json:"VpcDomain,omitempty" xml:"VpcDomain,omitempty" require:"true"`
	InstanceType        *string                                `json:"InstanceType,omitempty" xml:"InstanceType,omitempty" require:"true"`
	InstanceId          *string                                `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	InstanceVipList     *string                                `json:"InstanceVipList,omitempty" xml:"InstanceVipList,omitempty" require:"true"`
	HttpsPolicy         *string                                `json:"HttpsPolicy,omitempty" xml:"HttpsPolicy,omitempty" require:"true"`
	UserLogConfig       *string                                `json:"UserLogConfig,omitempty" xml:"UserLogConfig,omitempty" require:"true"`
	CustomTraceConfig   *string                                `json:"CustomTraceConfig,omitempty" xml:"CustomTraceConfig,omitempty" require:"true"`
	PassthroughHeaders  *string                                `json:"PassthroughHeaders,omitempty" xml:"PassthroughHeaders,omitempty" require:"true"`
	RpcPattern          *string                                `json:"RpcPattern,omitempty" xml:"RpcPattern,omitempty" require:"true"`
	CompatibleFlags     *string                                `json:"CompatibleFlags,omitempty" xml:"CompatibleFlags,omitempty" require:"true"`
	ClassicVpcSubDomain *string                                `json:"ClassicVpcSubDomain,omitempty" xml:"ClassicVpcSubDomain,omitempty" require:"true"`
	CustomDomains       *DescribeApiGroupResponseCustomDomains `json:"CustomDomains,omitempty" xml:"CustomDomains,omitempty" require:"true" type:"Struct"`
	StageItems          *DescribeApiGroupResponseStageItems    `json:"StageItems,omitempty" xml:"StageItems,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupResponse) SetRequestId(v string) *DescribeApiGroupResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiGroupResponse) SetGroupId(v string) *DescribeApiGroupResponse {
	s.GroupId = &v
	return s
}

func (s *DescribeApiGroupResponse) SetGroupName(v string) *DescribeApiGroupResponse {
	s.GroupName = &v
	return s
}

func (s *DescribeApiGroupResponse) SetSubDomain(v string) *DescribeApiGroupResponse {
	s.SubDomain = &v
	return s
}

func (s *DescribeApiGroupResponse) SetDescription(v string) *DescribeApiGroupResponse {
	s.Description = &v
	return s
}

func (s *DescribeApiGroupResponse) SetCreatedTime(v string) *DescribeApiGroupResponse {
	s.CreatedTime = &v
	return s
}

func (s *DescribeApiGroupResponse) SetModifiedTime(v string) *DescribeApiGroupResponse {
	s.ModifiedTime = &v
	return s
}

func (s *DescribeApiGroupResponse) SetRegionId(v string) *DescribeApiGroupResponse {
	s.RegionId = &v
	return s
}

func (s *DescribeApiGroupResponse) SetStatus(v string) *DescribeApiGroupResponse {
	s.Status = &v
	return s
}

func (s *DescribeApiGroupResponse) SetBillingStatus(v string) *DescribeApiGroupResponse {
	s.BillingStatus = &v
	return s
}

func (s *DescribeApiGroupResponse) SetIllegalStatus(v string) *DescribeApiGroupResponse {
	s.IllegalStatus = &v
	return s
}

func (s *DescribeApiGroupResponse) SetIpv6Status(v string) *DescribeApiGroupResponse {
	s.Ipv6Status = &v
	return s
}

func (s *DescribeApiGroupResponse) SetTrafficLimit(v int) *DescribeApiGroupResponse {
	s.TrafficLimit = &v
	return s
}

func (s *DescribeApiGroupResponse) SetVpcDomain(v string) *DescribeApiGroupResponse {
	s.VpcDomain = &v
	return s
}

func (s *DescribeApiGroupResponse) SetInstanceType(v string) *DescribeApiGroupResponse {
	s.InstanceType = &v
	return s
}

func (s *DescribeApiGroupResponse) SetInstanceId(v string) *DescribeApiGroupResponse {
	s.InstanceId = &v
	return s
}

func (s *DescribeApiGroupResponse) SetInstanceVipList(v string) *DescribeApiGroupResponse {
	s.InstanceVipList = &v
	return s
}

func (s *DescribeApiGroupResponse) SetHttpsPolicy(v string) *DescribeApiGroupResponse {
	s.HttpsPolicy = &v
	return s
}

func (s *DescribeApiGroupResponse) SetUserLogConfig(v string) *DescribeApiGroupResponse {
	s.UserLogConfig = &v
	return s
}

func (s *DescribeApiGroupResponse) SetCustomTraceConfig(v string) *DescribeApiGroupResponse {
	s.CustomTraceConfig = &v
	return s
}

func (s *DescribeApiGroupResponse) SetPassthroughHeaders(v string) *DescribeApiGroupResponse {
	s.PassthroughHeaders = &v
	return s
}

func (s *DescribeApiGroupResponse) SetRpcPattern(v string) *DescribeApiGroupResponse {
	s.RpcPattern = &v
	return s
}

func (s *DescribeApiGroupResponse) SetCompatibleFlags(v string) *DescribeApiGroupResponse {
	s.CompatibleFlags = &v
	return s
}

func (s *DescribeApiGroupResponse) SetClassicVpcSubDomain(v string) *DescribeApiGroupResponse {
	s.ClassicVpcSubDomain = &v
	return s
}

func (s *DescribeApiGroupResponse) SetCustomDomains(v *DescribeApiGroupResponseCustomDomains) *DescribeApiGroupResponse {
	s.CustomDomains = v
	return s
}

func (s *DescribeApiGroupResponse) SetStageItems(v *DescribeApiGroupResponseStageItems) *DescribeApiGroupResponse {
	s.StageItems = v
	return s
}

type DescribeApiGroupResponseCustomDomains struct {
	DomainItem []*DescribeApiGroupResponseCustomDomainsDomainItem `json:"DomainItem,omitempty" xml:"DomainItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiGroupResponseCustomDomains) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupResponseCustomDomains) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupResponseCustomDomains) SetDomainItem(v []*DescribeApiGroupResponseCustomDomainsDomainItem) *DescribeApiGroupResponseCustomDomains {
	s.DomainItem = v
	return s
}

type DescribeApiGroupResponseCustomDomainsDomainItem struct {
	DomainName            *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	CertificateId         *string `json:"CertificateId,omitempty" xml:"CertificateId,omitempty" require:"true"`
	CertificateName       *string `json:"CertificateName,omitempty" xml:"CertificateName,omitempty" require:"true"`
	DomainCNAMEStatus     *string `json:"DomainCNAMEStatus,omitempty" xml:"DomainCNAMEStatus,omitempty" require:"true"`
	DomainBindingStatus   *string `json:"DomainBindingStatus,omitempty" xml:"DomainBindingStatus,omitempty" require:"true"`
	BindStageName         *string `json:"BindStageName,omitempty" xml:"BindStageName,omitempty" require:"true"`
	DomainLegalStatus     *string `json:"DomainLegalStatus,omitempty" xml:"DomainLegalStatus,omitempty" require:"true"`
	DomainWebSocketStatus *string `json:"DomainWebSocketStatus,omitempty" xml:"DomainWebSocketStatus,omitempty" require:"true"`
	DomainRemark          *string `json:"DomainRemark,omitempty" xml:"DomainRemark,omitempty" require:"true"`
}

func (s DescribeApiGroupResponseCustomDomainsDomainItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupResponseCustomDomainsDomainItem) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupResponseCustomDomainsDomainItem) SetDomainName(v string) *DescribeApiGroupResponseCustomDomainsDomainItem {
	s.DomainName = &v
	return s
}

func (s *DescribeApiGroupResponseCustomDomainsDomainItem) SetCertificateId(v string) *DescribeApiGroupResponseCustomDomainsDomainItem {
	s.CertificateId = &v
	return s
}

func (s *DescribeApiGroupResponseCustomDomainsDomainItem) SetCertificateName(v string) *DescribeApiGroupResponseCustomDomainsDomainItem {
	s.CertificateName = &v
	return s
}

func (s *DescribeApiGroupResponseCustomDomainsDomainItem) SetDomainCNAMEStatus(v string) *DescribeApiGroupResponseCustomDomainsDomainItem {
	s.DomainCNAMEStatus = &v
	return s
}

func (s *DescribeApiGroupResponseCustomDomainsDomainItem) SetDomainBindingStatus(v string) *DescribeApiGroupResponseCustomDomainsDomainItem {
	s.DomainBindingStatus = &v
	return s
}

func (s *DescribeApiGroupResponseCustomDomainsDomainItem) SetBindStageName(v string) *DescribeApiGroupResponseCustomDomainsDomainItem {
	s.BindStageName = &v
	return s
}

func (s *DescribeApiGroupResponseCustomDomainsDomainItem) SetDomainLegalStatus(v string) *DescribeApiGroupResponseCustomDomainsDomainItem {
	s.DomainLegalStatus = &v
	return s
}

func (s *DescribeApiGroupResponseCustomDomainsDomainItem) SetDomainWebSocketStatus(v string) *DescribeApiGroupResponseCustomDomainsDomainItem {
	s.DomainWebSocketStatus = &v
	return s
}

func (s *DescribeApiGroupResponseCustomDomainsDomainItem) SetDomainRemark(v string) *DescribeApiGroupResponseCustomDomainsDomainItem {
	s.DomainRemark = &v
	return s
}

type DescribeApiGroupResponseStageItems struct {
	StageInfo []*DescribeApiGroupResponseStageItemsStageInfo `json:"StageInfo,omitempty" xml:"StageInfo,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiGroupResponseStageItems) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupResponseStageItems) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupResponseStageItems) SetStageInfo(v []*DescribeApiGroupResponseStageItemsStageInfo) *DescribeApiGroupResponseStageItems {
	s.StageInfo = v
	return s
}

type DescribeApiGroupResponseStageItemsStageInfo struct {
	StageId     *string `json:"StageId,omitempty" xml:"StageId,omitempty" require:"true"`
	StageName   *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeApiGroupResponseStageItemsStageInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiGroupResponseStageItemsStageInfo) GoString() string {
	return s.String()
}

func (s *DescribeApiGroupResponseStageItemsStageInfo) SetStageId(v string) *DescribeApiGroupResponseStageItemsStageInfo {
	s.StageId = &v
	return s
}

func (s *DescribeApiGroupResponseStageItemsStageInfo) SetStageName(v string) *DescribeApiGroupResponseStageItemsStageInfo {
	s.StageName = &v
	return s
}

func (s *DescribeApiGroupResponseStageItemsStageInfo) SetDescription(v string) *DescribeApiGroupResponseStageItemsStageInfo {
	s.Description = &v
	return s
}

type DescribeApiErrorDataRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	StartTime     *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime       *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
}

func (s DescribeApiErrorDataRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiErrorDataRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiErrorDataRequest) SetSecurityToken(v string) *DescribeApiErrorDataRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiErrorDataRequest) SetApiId(v string) *DescribeApiErrorDataRequest {
	s.ApiId = &v
	return s
}

func (s *DescribeApiErrorDataRequest) SetGroupId(v string) *DescribeApiErrorDataRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiErrorDataRequest) SetStartTime(v string) *DescribeApiErrorDataRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeApiErrorDataRequest) SetEndTime(v string) *DescribeApiErrorDataRequest {
	s.EndTime = &v
	return s
}

type DescribeApiErrorDataResponse struct {
	RequestId    *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ClientErrors *DescribeApiErrorDataResponseClientErrors `json:"ClientErrors,omitempty" xml:"ClientErrors,omitempty" require:"true" type:"Struct"`
	ServerErrors *DescribeApiErrorDataResponseServerErrors `json:"ServerErrors,omitempty" xml:"ServerErrors,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiErrorDataResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiErrorDataResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiErrorDataResponse) SetRequestId(v string) *DescribeApiErrorDataResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiErrorDataResponse) SetClientErrors(v *DescribeApiErrorDataResponseClientErrors) *DescribeApiErrorDataResponse {
	s.ClientErrors = v
	return s
}

func (s *DescribeApiErrorDataResponse) SetServerErrors(v *DescribeApiErrorDataResponseServerErrors) *DescribeApiErrorDataResponse {
	s.ServerErrors = v
	return s
}

type DescribeApiErrorDataResponseClientErrors struct {
	MonitorItem []*DescribeApiErrorDataResponseClientErrorsMonitorItem `json:"MonitorItem,omitempty" xml:"MonitorItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiErrorDataResponseClientErrors) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiErrorDataResponseClientErrors) GoString() string {
	return s.String()
}

func (s *DescribeApiErrorDataResponseClientErrors) SetMonitorItem(v []*DescribeApiErrorDataResponseClientErrorsMonitorItem) *DescribeApiErrorDataResponseClientErrors {
	s.MonitorItem = v
	return s
}

type DescribeApiErrorDataResponseClientErrorsMonitorItem struct {
	ItemTime  *string `json:"ItemTime,omitempty" xml:"ItemTime,omitempty" require:"true"`
	ItemValue *string `json:"ItemValue,omitempty" xml:"ItemValue,omitempty" require:"true"`
}

func (s DescribeApiErrorDataResponseClientErrorsMonitorItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiErrorDataResponseClientErrorsMonitorItem) GoString() string {
	return s.String()
}

func (s *DescribeApiErrorDataResponseClientErrorsMonitorItem) SetItemTime(v string) *DescribeApiErrorDataResponseClientErrorsMonitorItem {
	s.ItemTime = &v
	return s
}

func (s *DescribeApiErrorDataResponseClientErrorsMonitorItem) SetItemValue(v string) *DescribeApiErrorDataResponseClientErrorsMonitorItem {
	s.ItemValue = &v
	return s
}

type DescribeApiErrorDataResponseServerErrors struct {
	MonitorItem []*DescribeApiErrorDataResponseServerErrorsMonitorItem `json:"MonitorItem,omitempty" xml:"MonitorItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiErrorDataResponseServerErrors) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiErrorDataResponseServerErrors) GoString() string {
	return s.String()
}

func (s *DescribeApiErrorDataResponseServerErrors) SetMonitorItem(v []*DescribeApiErrorDataResponseServerErrorsMonitorItem) *DescribeApiErrorDataResponseServerErrors {
	s.MonitorItem = v
	return s
}

type DescribeApiErrorDataResponseServerErrorsMonitorItem struct {
	ItemTime  *string `json:"ItemTime,omitempty" xml:"ItemTime,omitempty" require:"true"`
	ItemValue *string `json:"ItemValue,omitempty" xml:"ItemValue,omitempty" require:"true"`
}

func (s DescribeApiErrorDataResponseServerErrorsMonitorItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiErrorDataResponseServerErrorsMonitorItem) GoString() string {
	return s.String()
}

func (s *DescribeApiErrorDataResponseServerErrorsMonitorItem) SetItemTime(v string) *DescribeApiErrorDataResponseServerErrorsMonitorItem {
	s.ItemTime = &v
	return s
}

func (s *DescribeApiErrorDataResponseServerErrorsMonitorItem) SetItemValue(v string) *DescribeApiErrorDataResponseServerErrorsMonitorItem {
	s.ItemValue = &v
	return s
}

type DescribeApiDocRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
}

func (s DescribeApiDocRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiDocRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiDocRequest) SetSecurityToken(v string) *DescribeApiDocRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiDocRequest) SetGroupId(v string) *DescribeApiDocRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiDocRequest) SetStageName(v string) *DescribeApiDocRequest {
	s.StageName = &v
	return s
}

func (s *DescribeApiDocRequest) SetApiId(v string) *DescribeApiDocRequest {
	s.ApiId = &v
	return s
}

type DescribeApiDocResponse struct {
	RequestId          *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RegionId           *string                                   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	GroupId            *string                                   `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName          *string                                   `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	StageName          *string                                   `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	ApiId              *string                                   `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName            *string                                   `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	Description        *string                                   `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Visibility         *string                                   `json:"Visibility,omitempty" xml:"Visibility,omitempty" require:"true"`
	AuthType           *string                                   `json:"AuthType,omitempty" xml:"AuthType,omitempty" require:"true"`
	ResultType         *string                                   `json:"ResultType,omitempty" xml:"ResultType,omitempty" require:"true"`
	ResultSample       *string                                   `json:"ResultSample,omitempty" xml:"ResultSample,omitempty" require:"true"`
	FailResultSample   *string                                   `json:"FailResultSample,omitempty" xml:"FailResultSample,omitempty" require:"true"`
	DeployedTime       *string                                   `json:"DeployedTime,omitempty" xml:"DeployedTime,omitempty" require:"true"`
	ForceNonceCheck    *bool                                     `json:"ForceNonceCheck,omitempty" xml:"ForceNonceCheck,omitempty" require:"true"`
	DisableInternet    *bool                                     `json:"DisableInternet,omitempty" xml:"DisableInternet,omitempty" require:"true"`
	ErrorCodeSamples   *DescribeApiDocResponseErrorCodeSamples   `json:"ErrorCodeSamples,omitempty" xml:"ErrorCodeSamples,omitempty" require:"true" type:"Struct"`
	ResultDescriptions *DescribeApiDocResponseResultDescriptions `json:"ResultDescriptions,omitempty" xml:"ResultDescriptions,omitempty" require:"true" type:"Struct"`
	RequestParameters  *DescribeApiDocResponseRequestParameters  `json:"RequestParameters,omitempty" xml:"RequestParameters,omitempty" require:"true" type:"Struct"`
	RequestConfig      *DescribeApiDocResponseRequestConfig      `json:"RequestConfig,omitempty" xml:"RequestConfig,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiDocResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiDocResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiDocResponse) SetRequestId(v string) *DescribeApiDocResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiDocResponse) SetRegionId(v string) *DescribeApiDocResponse {
	s.RegionId = &v
	return s
}

func (s *DescribeApiDocResponse) SetGroupId(v string) *DescribeApiDocResponse {
	s.GroupId = &v
	return s
}

func (s *DescribeApiDocResponse) SetGroupName(v string) *DescribeApiDocResponse {
	s.GroupName = &v
	return s
}

func (s *DescribeApiDocResponse) SetStageName(v string) *DescribeApiDocResponse {
	s.StageName = &v
	return s
}

func (s *DescribeApiDocResponse) SetApiId(v string) *DescribeApiDocResponse {
	s.ApiId = &v
	return s
}

func (s *DescribeApiDocResponse) SetApiName(v string) *DescribeApiDocResponse {
	s.ApiName = &v
	return s
}

func (s *DescribeApiDocResponse) SetDescription(v string) *DescribeApiDocResponse {
	s.Description = &v
	return s
}

func (s *DescribeApiDocResponse) SetVisibility(v string) *DescribeApiDocResponse {
	s.Visibility = &v
	return s
}

func (s *DescribeApiDocResponse) SetAuthType(v string) *DescribeApiDocResponse {
	s.AuthType = &v
	return s
}

func (s *DescribeApiDocResponse) SetResultType(v string) *DescribeApiDocResponse {
	s.ResultType = &v
	return s
}

func (s *DescribeApiDocResponse) SetResultSample(v string) *DescribeApiDocResponse {
	s.ResultSample = &v
	return s
}

func (s *DescribeApiDocResponse) SetFailResultSample(v string) *DescribeApiDocResponse {
	s.FailResultSample = &v
	return s
}

func (s *DescribeApiDocResponse) SetDeployedTime(v string) *DescribeApiDocResponse {
	s.DeployedTime = &v
	return s
}

func (s *DescribeApiDocResponse) SetForceNonceCheck(v bool) *DescribeApiDocResponse {
	s.ForceNonceCheck = &v
	return s
}

func (s *DescribeApiDocResponse) SetDisableInternet(v bool) *DescribeApiDocResponse {
	s.DisableInternet = &v
	return s
}

func (s *DescribeApiDocResponse) SetErrorCodeSamples(v *DescribeApiDocResponseErrorCodeSamples) *DescribeApiDocResponse {
	s.ErrorCodeSamples = v
	return s
}

func (s *DescribeApiDocResponse) SetResultDescriptions(v *DescribeApiDocResponseResultDescriptions) *DescribeApiDocResponse {
	s.ResultDescriptions = v
	return s
}

func (s *DescribeApiDocResponse) SetRequestParameters(v *DescribeApiDocResponseRequestParameters) *DescribeApiDocResponse {
	s.RequestParameters = v
	return s
}

func (s *DescribeApiDocResponse) SetRequestConfig(v *DescribeApiDocResponseRequestConfig) *DescribeApiDocResponse {
	s.RequestConfig = v
	return s
}

type DescribeApiDocResponseErrorCodeSamples struct {
	ErrorCodeSample []*DescribeApiDocResponseErrorCodeSamplesErrorCodeSample `json:"ErrorCodeSample,omitempty" xml:"ErrorCodeSample,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiDocResponseErrorCodeSamples) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiDocResponseErrorCodeSamples) GoString() string {
	return s.String()
}

func (s *DescribeApiDocResponseErrorCodeSamples) SetErrorCodeSample(v []*DescribeApiDocResponseErrorCodeSamplesErrorCodeSample) *DescribeApiDocResponseErrorCodeSamples {
	s.ErrorCodeSample = v
	return s
}

type DescribeApiDocResponseErrorCodeSamplesErrorCodeSample struct {
	Code        *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message     *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeApiDocResponseErrorCodeSamplesErrorCodeSample) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiDocResponseErrorCodeSamplesErrorCodeSample) GoString() string {
	return s.String()
}

func (s *DescribeApiDocResponseErrorCodeSamplesErrorCodeSample) SetCode(v string) *DescribeApiDocResponseErrorCodeSamplesErrorCodeSample {
	s.Code = &v
	return s
}

func (s *DescribeApiDocResponseErrorCodeSamplesErrorCodeSample) SetMessage(v string) *DescribeApiDocResponseErrorCodeSamplesErrorCodeSample {
	s.Message = &v
	return s
}

func (s *DescribeApiDocResponseErrorCodeSamplesErrorCodeSample) SetDescription(v string) *DescribeApiDocResponseErrorCodeSamplesErrorCodeSample {
	s.Description = &v
	return s
}

type DescribeApiDocResponseResultDescriptions struct {
	ResultDescription []*DescribeApiDocResponseResultDescriptionsResultDescription `json:"ResultDescription,omitempty" xml:"ResultDescription,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiDocResponseResultDescriptions) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiDocResponseResultDescriptions) GoString() string {
	return s.String()
}

func (s *DescribeApiDocResponseResultDescriptions) SetResultDescription(v []*DescribeApiDocResponseResultDescriptionsResultDescription) *DescribeApiDocResponseResultDescriptions {
	s.ResultDescription = v
	return s
}

type DescribeApiDocResponseResultDescriptionsResultDescription struct {
	Id          *string `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Pid         *string `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
	HasChild    *bool   `json:"HasChild,omitempty" xml:"HasChild,omitempty" require:"true"`
	Key         *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Name        *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Mandatory   *bool   `json:"Mandatory,omitempty" xml:"Mandatory,omitempty" require:"true"`
	Type        *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeApiDocResponseResultDescriptionsResultDescription) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiDocResponseResultDescriptionsResultDescription) GoString() string {
	return s.String()
}

func (s *DescribeApiDocResponseResultDescriptionsResultDescription) SetId(v string) *DescribeApiDocResponseResultDescriptionsResultDescription {
	s.Id = &v
	return s
}

func (s *DescribeApiDocResponseResultDescriptionsResultDescription) SetPid(v string) *DescribeApiDocResponseResultDescriptionsResultDescription {
	s.Pid = &v
	return s
}

func (s *DescribeApiDocResponseResultDescriptionsResultDescription) SetHasChild(v bool) *DescribeApiDocResponseResultDescriptionsResultDescription {
	s.HasChild = &v
	return s
}

func (s *DescribeApiDocResponseResultDescriptionsResultDescription) SetKey(v string) *DescribeApiDocResponseResultDescriptionsResultDescription {
	s.Key = &v
	return s
}

func (s *DescribeApiDocResponseResultDescriptionsResultDescription) SetName(v string) *DescribeApiDocResponseResultDescriptionsResultDescription {
	s.Name = &v
	return s
}

func (s *DescribeApiDocResponseResultDescriptionsResultDescription) SetMandatory(v bool) *DescribeApiDocResponseResultDescriptionsResultDescription {
	s.Mandatory = &v
	return s
}

func (s *DescribeApiDocResponseResultDescriptionsResultDescription) SetType(v string) *DescribeApiDocResponseResultDescriptionsResultDescription {
	s.Type = &v
	return s
}

func (s *DescribeApiDocResponseResultDescriptionsResultDescription) SetDescription(v string) *DescribeApiDocResponseResultDescriptionsResultDescription {
	s.Description = &v
	return s
}

type DescribeApiDocResponseRequestParameters struct {
	RequestParameter []*DescribeApiDocResponseRequestParametersRequestParameter `json:"RequestParameter,omitempty" xml:"RequestParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiDocResponseRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiDocResponseRequestParameters) GoString() string {
	return s.String()
}

func (s *DescribeApiDocResponseRequestParameters) SetRequestParameter(v []*DescribeApiDocResponseRequestParametersRequestParameter) *DescribeApiDocResponseRequestParameters {
	s.RequestParameter = v
	return s
}

type DescribeApiDocResponseRequestParametersRequestParameter struct {
	ApiParameterName  *string `json:"ApiParameterName,omitempty" xml:"ApiParameterName,omitempty" require:"true"`
	Location          *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	ParameterType     *string `json:"ParameterType,omitempty" xml:"ParameterType,omitempty" require:"true"`
	Required          *string `json:"Required,omitempty" xml:"Required,omitempty" require:"true"`
	DefaultValue      *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	DemoValue         *string `json:"DemoValue,omitempty" xml:"DemoValue,omitempty" require:"true"`
	MaxValue          *int64  `json:"MaxValue,omitempty" xml:"MaxValue,omitempty" require:"true"`
	MinValue          *int64  `json:"MinValue,omitempty" xml:"MinValue,omitempty" require:"true"`
	MaxLength         *int64  `json:"MaxLength,omitempty" xml:"MaxLength,omitempty" require:"true"`
	MinLength         *int64  `json:"MinLength,omitempty" xml:"MinLength,omitempty" require:"true"`
	RegularExpression *string `json:"RegularExpression,omitempty" xml:"RegularExpression,omitempty" require:"true"`
	JsonScheme        *string `json:"JsonScheme,omitempty" xml:"JsonScheme,omitempty" require:"true"`
	EnumValue         *string `json:"EnumValue,omitempty" xml:"EnumValue,omitempty" require:"true"`
	DocShow           *string `json:"DocShow,omitempty" xml:"DocShow,omitempty" require:"true"`
	DocOrder          *int    `json:"DocOrder,omitempty" xml:"DocOrder,omitempty" require:"true"`
	Description       *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	ArrayItemsType    *string `json:"ArrayItemsType,omitempty" xml:"ArrayItemsType,omitempty" require:"true"`
}

func (s DescribeApiDocResponseRequestParametersRequestParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiDocResponseRequestParametersRequestParameter) GoString() string {
	return s.String()
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetApiParameterName(v string) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.ApiParameterName = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetLocation(v string) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.Location = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetParameterType(v string) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.ParameterType = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetRequired(v string) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.Required = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetDefaultValue(v string) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.DefaultValue = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetDemoValue(v string) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.DemoValue = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetMaxValue(v int64) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.MaxValue = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetMinValue(v int64) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.MinValue = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetMaxLength(v int64) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.MaxLength = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetMinLength(v int64) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.MinLength = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetRegularExpression(v string) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.RegularExpression = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetJsonScheme(v string) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.JsonScheme = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetEnumValue(v string) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.EnumValue = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetDocShow(v string) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.DocShow = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetDocOrder(v int) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.DocOrder = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetDescription(v string) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.Description = &v
	return s
}

func (s *DescribeApiDocResponseRequestParametersRequestParameter) SetArrayItemsType(v string) *DescribeApiDocResponseRequestParametersRequestParameter {
	s.ArrayItemsType = &v
	return s
}

type DescribeApiDocResponseRequestConfig struct {
	RequestProtocol     *string `json:"RequestProtocol,omitempty" xml:"RequestProtocol,omitempty" require:"true"`
	RequestHttpMethod   *string `json:"RequestHttpMethod,omitempty" xml:"RequestHttpMethod,omitempty" require:"true"`
	RequestPath         *string `json:"RequestPath,omitempty" xml:"RequestPath,omitempty" require:"true"`
	BodyFormat          *string `json:"BodyFormat,omitempty" xml:"BodyFormat,omitempty" require:"true"`
	PostBodyDescription *string `json:"PostBodyDescription,omitempty" xml:"PostBodyDescription,omitempty" require:"true"`
	RequestMode         *string `json:"RequestMode,omitempty" xml:"RequestMode,omitempty" require:"true"`
}

func (s DescribeApiDocResponseRequestConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiDocResponseRequestConfig) GoString() string {
	return s.String()
}

func (s *DescribeApiDocResponseRequestConfig) SetRequestProtocol(v string) *DescribeApiDocResponseRequestConfig {
	s.RequestProtocol = &v
	return s
}

func (s *DescribeApiDocResponseRequestConfig) SetRequestHttpMethod(v string) *DescribeApiDocResponseRequestConfig {
	s.RequestHttpMethod = &v
	return s
}

func (s *DescribeApiDocResponseRequestConfig) SetRequestPath(v string) *DescribeApiDocResponseRequestConfig {
	s.RequestPath = &v
	return s
}

func (s *DescribeApiDocResponseRequestConfig) SetBodyFormat(v string) *DescribeApiDocResponseRequestConfig {
	s.BodyFormat = &v
	return s
}

func (s *DescribeApiDocResponseRequestConfig) SetPostBodyDescription(v string) *DescribeApiDocResponseRequestConfig {
	s.PostBodyDescription = &v
	return s
}

func (s *DescribeApiDocResponseRequestConfig) SetRequestMode(v string) *DescribeApiDocResponseRequestConfig {
	s.RequestMode = &v
	return s
}

type DescribeApiRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
}

func (s DescribeApiRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiRequest) GoString() string {
	return s.String()
}

func (s *DescribeApiRequest) SetSecurityToken(v string) *DescribeApiRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeApiRequest) SetGroupId(v string) *DescribeApiRequest {
	s.GroupId = &v
	return s
}

func (s *DescribeApiRequest) SetApiId(v string) *DescribeApiRequest {
	s.ApiId = &v
	return s
}

type DescribeApiResponse struct {
	RequestId              *string                                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RegionId               *string                                    `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ApiId                  *string                                    `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	ApiName                *string                                    `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	GroupId                *string                                    `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName              *string                                    `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	Visibility             *string                                    `json:"Visibility,omitempty" xml:"Visibility,omitempty" require:"true"`
	AuthType               *string                                    `json:"AuthType,omitempty" xml:"AuthType,omitempty" require:"true"`
	ResultType             *string                                    `json:"ResultType,omitempty" xml:"ResultType,omitempty" require:"true"`
	ResultSample           *string                                    `json:"ResultSample,omitempty" xml:"ResultSample,omitempty" require:"true"`
	FailResultSample       *string                                    `json:"FailResultSample,omitempty" xml:"FailResultSample,omitempty" require:"true"`
	CreatedTime            *string                                    `json:"CreatedTime,omitempty" xml:"CreatedTime,omitempty" require:"true"`
	ModifiedTime           *string                                    `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	Description            *string                                    `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Mock                   *string                                    `json:"Mock,omitempty" xml:"Mock,omitempty" require:"true"`
	MockResult             *string                                    `json:"MockResult,omitempty" xml:"MockResult,omitempty" require:"true"`
	AllowSignatureMethod   *string                                    `json:"AllowSignatureMethod,omitempty" xml:"AllowSignatureMethod,omitempty" require:"true"`
	WebSocketApiType       *string                                    `json:"WebSocketApiType,omitempty" xml:"WebSocketApiType,omitempty" require:"true"`
	ResultBodyModel        *string                                    `json:"ResultBodyModel,omitempty" xml:"ResultBodyModel,omitempty" require:"true"`
	ForceNonceCheck        *bool                                      `json:"ForceNonceCheck,omitempty" xml:"ForceNonceCheck,omitempty" require:"true"`
	DisableInternet        *bool                                      `json:"DisableInternet,omitempty" xml:"DisableInternet,omitempty" require:"true"`
	AppCodeAuthType        *string                                    `json:"AppCodeAuthType,omitempty" xml:"AppCodeAuthType,omitempty" require:"true"`
	ErrorCodeSamples       *DescribeApiResponseErrorCodeSamples       `json:"ErrorCodeSamples,omitempty" xml:"ErrorCodeSamples,omitempty" require:"true" type:"Struct"`
	ResultDescriptions     *DescribeApiResponseResultDescriptions     `json:"ResultDescriptions,omitempty" xml:"ResultDescriptions,omitempty" require:"true" type:"Struct"`
	SystemParameters       *DescribeApiResponseSystemParameters       `json:"SystemParameters,omitempty" xml:"SystemParameters,omitempty" require:"true" type:"Struct"`
	CustomSystemParameters *DescribeApiResponseCustomSystemParameters `json:"CustomSystemParameters,omitempty" xml:"CustomSystemParameters,omitempty" require:"true" type:"Struct"`
	ConstantParameters     *DescribeApiResponseConstantParameters     `json:"ConstantParameters,omitempty" xml:"ConstantParameters,omitempty" require:"true" type:"Struct"`
	RequestParameters      *DescribeApiResponseRequestParameters      `json:"RequestParameters,omitempty" xml:"RequestParameters,omitempty" require:"true" type:"Struct"`
	ServiceParameters      *DescribeApiResponseServiceParameters      `json:"ServiceParameters,omitempty" xml:"ServiceParameters,omitempty" require:"true" type:"Struct"`
	ServiceParametersMap   *DescribeApiResponseServiceParametersMap   `json:"ServiceParametersMap,omitempty" xml:"ServiceParametersMap,omitempty" require:"true" type:"Struct"`
	DeployedInfos          *DescribeApiResponseDeployedInfos          `json:"DeployedInfos,omitempty" xml:"DeployedInfos,omitempty" require:"true" type:"Struct"`
	RequestConfig          *DescribeApiResponseRequestConfig          `json:"RequestConfig,omitempty" xml:"RequestConfig,omitempty" require:"true" type:"Struct"`
	ServiceConfig          *DescribeApiResponseServiceConfig          `json:"ServiceConfig,omitempty" xml:"ServiceConfig,omitempty" require:"true" type:"Struct"`
	OpenIdConnectConfig    *DescribeApiResponseOpenIdConnectConfig    `json:"OpenIdConnectConfig,omitempty" xml:"OpenIdConnectConfig,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponse) GoString() string {
	return s.String()
}

func (s *DescribeApiResponse) SetRequestId(v string) *DescribeApiResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeApiResponse) SetRegionId(v string) *DescribeApiResponse {
	s.RegionId = &v
	return s
}

func (s *DescribeApiResponse) SetApiId(v string) *DescribeApiResponse {
	s.ApiId = &v
	return s
}

func (s *DescribeApiResponse) SetApiName(v string) *DescribeApiResponse {
	s.ApiName = &v
	return s
}

func (s *DescribeApiResponse) SetGroupId(v string) *DescribeApiResponse {
	s.GroupId = &v
	return s
}

func (s *DescribeApiResponse) SetGroupName(v string) *DescribeApiResponse {
	s.GroupName = &v
	return s
}

func (s *DescribeApiResponse) SetVisibility(v string) *DescribeApiResponse {
	s.Visibility = &v
	return s
}

func (s *DescribeApiResponse) SetAuthType(v string) *DescribeApiResponse {
	s.AuthType = &v
	return s
}

func (s *DescribeApiResponse) SetResultType(v string) *DescribeApiResponse {
	s.ResultType = &v
	return s
}

func (s *DescribeApiResponse) SetResultSample(v string) *DescribeApiResponse {
	s.ResultSample = &v
	return s
}

func (s *DescribeApiResponse) SetFailResultSample(v string) *DescribeApiResponse {
	s.FailResultSample = &v
	return s
}

func (s *DescribeApiResponse) SetCreatedTime(v string) *DescribeApiResponse {
	s.CreatedTime = &v
	return s
}

func (s *DescribeApiResponse) SetModifiedTime(v string) *DescribeApiResponse {
	s.ModifiedTime = &v
	return s
}

func (s *DescribeApiResponse) SetDescription(v string) *DescribeApiResponse {
	s.Description = &v
	return s
}

func (s *DescribeApiResponse) SetMock(v string) *DescribeApiResponse {
	s.Mock = &v
	return s
}

func (s *DescribeApiResponse) SetMockResult(v string) *DescribeApiResponse {
	s.MockResult = &v
	return s
}

func (s *DescribeApiResponse) SetAllowSignatureMethod(v string) *DescribeApiResponse {
	s.AllowSignatureMethod = &v
	return s
}

func (s *DescribeApiResponse) SetWebSocketApiType(v string) *DescribeApiResponse {
	s.WebSocketApiType = &v
	return s
}

func (s *DescribeApiResponse) SetResultBodyModel(v string) *DescribeApiResponse {
	s.ResultBodyModel = &v
	return s
}

func (s *DescribeApiResponse) SetForceNonceCheck(v bool) *DescribeApiResponse {
	s.ForceNonceCheck = &v
	return s
}

func (s *DescribeApiResponse) SetDisableInternet(v bool) *DescribeApiResponse {
	s.DisableInternet = &v
	return s
}

func (s *DescribeApiResponse) SetAppCodeAuthType(v string) *DescribeApiResponse {
	s.AppCodeAuthType = &v
	return s
}

func (s *DescribeApiResponse) SetErrorCodeSamples(v *DescribeApiResponseErrorCodeSamples) *DescribeApiResponse {
	s.ErrorCodeSamples = v
	return s
}

func (s *DescribeApiResponse) SetResultDescriptions(v *DescribeApiResponseResultDescriptions) *DescribeApiResponse {
	s.ResultDescriptions = v
	return s
}

func (s *DescribeApiResponse) SetSystemParameters(v *DescribeApiResponseSystemParameters) *DescribeApiResponse {
	s.SystemParameters = v
	return s
}

func (s *DescribeApiResponse) SetCustomSystemParameters(v *DescribeApiResponseCustomSystemParameters) *DescribeApiResponse {
	s.CustomSystemParameters = v
	return s
}

func (s *DescribeApiResponse) SetConstantParameters(v *DescribeApiResponseConstantParameters) *DescribeApiResponse {
	s.ConstantParameters = v
	return s
}

func (s *DescribeApiResponse) SetRequestParameters(v *DescribeApiResponseRequestParameters) *DescribeApiResponse {
	s.RequestParameters = v
	return s
}

func (s *DescribeApiResponse) SetServiceParameters(v *DescribeApiResponseServiceParameters) *DescribeApiResponse {
	s.ServiceParameters = v
	return s
}

func (s *DescribeApiResponse) SetServiceParametersMap(v *DescribeApiResponseServiceParametersMap) *DescribeApiResponse {
	s.ServiceParametersMap = v
	return s
}

func (s *DescribeApiResponse) SetDeployedInfos(v *DescribeApiResponseDeployedInfos) *DescribeApiResponse {
	s.DeployedInfos = v
	return s
}

func (s *DescribeApiResponse) SetRequestConfig(v *DescribeApiResponseRequestConfig) *DescribeApiResponse {
	s.RequestConfig = v
	return s
}

func (s *DescribeApiResponse) SetServiceConfig(v *DescribeApiResponseServiceConfig) *DescribeApiResponse {
	s.ServiceConfig = v
	return s
}

func (s *DescribeApiResponse) SetOpenIdConnectConfig(v *DescribeApiResponseOpenIdConnectConfig) *DescribeApiResponse {
	s.OpenIdConnectConfig = v
	return s
}

type DescribeApiResponseErrorCodeSamples struct {
	ErrorCodeSample []*DescribeApiResponseErrorCodeSamplesErrorCodeSample `json:"ErrorCodeSample,omitempty" xml:"ErrorCodeSample,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiResponseErrorCodeSamples) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseErrorCodeSamples) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseErrorCodeSamples) SetErrorCodeSample(v []*DescribeApiResponseErrorCodeSamplesErrorCodeSample) *DescribeApiResponseErrorCodeSamples {
	s.ErrorCodeSample = v
	return s
}

type DescribeApiResponseErrorCodeSamplesErrorCodeSample struct {
	Code        *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message     *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Model       *string `json:"Model,omitempty" xml:"Model,omitempty" require:"true"`
}

func (s DescribeApiResponseErrorCodeSamplesErrorCodeSample) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseErrorCodeSamplesErrorCodeSample) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseErrorCodeSamplesErrorCodeSample) SetCode(v string) *DescribeApiResponseErrorCodeSamplesErrorCodeSample {
	s.Code = &v
	return s
}

func (s *DescribeApiResponseErrorCodeSamplesErrorCodeSample) SetMessage(v string) *DescribeApiResponseErrorCodeSamplesErrorCodeSample {
	s.Message = &v
	return s
}

func (s *DescribeApiResponseErrorCodeSamplesErrorCodeSample) SetDescription(v string) *DescribeApiResponseErrorCodeSamplesErrorCodeSample {
	s.Description = &v
	return s
}

func (s *DescribeApiResponseErrorCodeSamplesErrorCodeSample) SetModel(v string) *DescribeApiResponseErrorCodeSamplesErrorCodeSample {
	s.Model = &v
	return s
}

type DescribeApiResponseResultDescriptions struct {
	ResultDescription []*DescribeApiResponseResultDescriptionsResultDescription `json:"ResultDescription,omitempty" xml:"ResultDescription,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiResponseResultDescriptions) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseResultDescriptions) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseResultDescriptions) SetResultDescription(v []*DescribeApiResponseResultDescriptionsResultDescription) *DescribeApiResponseResultDescriptions {
	s.ResultDescription = v
	return s
}

type DescribeApiResponseResultDescriptionsResultDescription struct {
	Id          *string `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Pid         *string `json:"Pid,omitempty" xml:"Pid,omitempty" require:"true"`
	HasChild    *bool   `json:"HasChild,omitempty" xml:"HasChild,omitempty" require:"true"`
	Key         *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Name        *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Mandatory   *bool   `json:"Mandatory,omitempty" xml:"Mandatory,omitempty" require:"true"`
	Type        *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeApiResponseResultDescriptionsResultDescription) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseResultDescriptionsResultDescription) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseResultDescriptionsResultDescription) SetId(v string) *DescribeApiResponseResultDescriptionsResultDescription {
	s.Id = &v
	return s
}

func (s *DescribeApiResponseResultDescriptionsResultDescription) SetPid(v string) *DescribeApiResponseResultDescriptionsResultDescription {
	s.Pid = &v
	return s
}

func (s *DescribeApiResponseResultDescriptionsResultDescription) SetHasChild(v bool) *DescribeApiResponseResultDescriptionsResultDescription {
	s.HasChild = &v
	return s
}

func (s *DescribeApiResponseResultDescriptionsResultDescription) SetKey(v string) *DescribeApiResponseResultDescriptionsResultDescription {
	s.Key = &v
	return s
}

func (s *DescribeApiResponseResultDescriptionsResultDescription) SetName(v string) *DescribeApiResponseResultDescriptionsResultDescription {
	s.Name = &v
	return s
}

func (s *DescribeApiResponseResultDescriptionsResultDescription) SetMandatory(v bool) *DescribeApiResponseResultDescriptionsResultDescription {
	s.Mandatory = &v
	return s
}

func (s *DescribeApiResponseResultDescriptionsResultDescription) SetType(v string) *DescribeApiResponseResultDescriptionsResultDescription {
	s.Type = &v
	return s
}

func (s *DescribeApiResponseResultDescriptionsResultDescription) SetDescription(v string) *DescribeApiResponseResultDescriptionsResultDescription {
	s.Description = &v
	return s
}

type DescribeApiResponseSystemParameters struct {
	SystemParameter []*DescribeApiResponseSystemParametersSystemParameter `json:"SystemParameter,omitempty" xml:"SystemParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiResponseSystemParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseSystemParameters) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseSystemParameters) SetSystemParameter(v []*DescribeApiResponseSystemParametersSystemParameter) *DescribeApiResponseSystemParameters {
	s.SystemParameter = v
	return s
}

type DescribeApiResponseSystemParametersSystemParameter struct {
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	Location             *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	DemoValue            *string `json:"DemoValue,omitempty" xml:"DemoValue,omitempty" require:"true"`
	Description          *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeApiResponseSystemParametersSystemParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseSystemParametersSystemParameter) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseSystemParametersSystemParameter) SetParameterName(v string) *DescribeApiResponseSystemParametersSystemParameter {
	s.ParameterName = &v
	return s
}

func (s *DescribeApiResponseSystemParametersSystemParameter) SetServiceParameterName(v string) *DescribeApiResponseSystemParametersSystemParameter {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeApiResponseSystemParametersSystemParameter) SetLocation(v string) *DescribeApiResponseSystemParametersSystemParameter {
	s.Location = &v
	return s
}

func (s *DescribeApiResponseSystemParametersSystemParameter) SetDemoValue(v string) *DescribeApiResponseSystemParametersSystemParameter {
	s.DemoValue = &v
	return s
}

func (s *DescribeApiResponseSystemParametersSystemParameter) SetDescription(v string) *DescribeApiResponseSystemParametersSystemParameter {
	s.Description = &v
	return s
}

type DescribeApiResponseCustomSystemParameters struct {
	CustomSystemParameter []*DescribeApiResponseCustomSystemParametersCustomSystemParameter `json:"CustomSystemParameter,omitempty" xml:"CustomSystemParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiResponseCustomSystemParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseCustomSystemParameters) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseCustomSystemParameters) SetCustomSystemParameter(v []*DescribeApiResponseCustomSystemParametersCustomSystemParameter) *DescribeApiResponseCustomSystemParameters {
	s.CustomSystemParameter = v
	return s
}

type DescribeApiResponseCustomSystemParametersCustomSystemParameter struct {
	ParameterName        *string `json:"ParameterName,omitempty" xml:"ParameterName,omitempty" require:"true"`
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	Location             *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	DemoValue            *string `json:"DemoValue,omitempty" xml:"DemoValue,omitempty" require:"true"`
	Description          *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeApiResponseCustomSystemParametersCustomSystemParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseCustomSystemParametersCustomSystemParameter) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseCustomSystemParametersCustomSystemParameter) SetParameterName(v string) *DescribeApiResponseCustomSystemParametersCustomSystemParameter {
	s.ParameterName = &v
	return s
}

func (s *DescribeApiResponseCustomSystemParametersCustomSystemParameter) SetServiceParameterName(v string) *DescribeApiResponseCustomSystemParametersCustomSystemParameter {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeApiResponseCustomSystemParametersCustomSystemParameter) SetLocation(v string) *DescribeApiResponseCustomSystemParametersCustomSystemParameter {
	s.Location = &v
	return s
}

func (s *DescribeApiResponseCustomSystemParametersCustomSystemParameter) SetDemoValue(v string) *DescribeApiResponseCustomSystemParametersCustomSystemParameter {
	s.DemoValue = &v
	return s
}

func (s *DescribeApiResponseCustomSystemParametersCustomSystemParameter) SetDescription(v string) *DescribeApiResponseCustomSystemParametersCustomSystemParameter {
	s.Description = &v
	return s
}

type DescribeApiResponseConstantParameters struct {
	ConstantParameter []*DescribeApiResponseConstantParametersConstantParameter `json:"ConstantParameter,omitempty" xml:"ConstantParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiResponseConstantParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseConstantParameters) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseConstantParameters) SetConstantParameter(v []*DescribeApiResponseConstantParametersConstantParameter) *DescribeApiResponseConstantParameters {
	s.ConstantParameter = v
	return s
}

type DescribeApiResponseConstantParametersConstantParameter struct {
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	ConstantValue        *string `json:"ConstantValue,omitempty" xml:"ConstantValue,omitempty" require:"true"`
	Location             *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	Description          *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeApiResponseConstantParametersConstantParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseConstantParametersConstantParameter) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseConstantParametersConstantParameter) SetServiceParameterName(v string) *DescribeApiResponseConstantParametersConstantParameter {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeApiResponseConstantParametersConstantParameter) SetConstantValue(v string) *DescribeApiResponseConstantParametersConstantParameter {
	s.ConstantValue = &v
	return s
}

func (s *DescribeApiResponseConstantParametersConstantParameter) SetLocation(v string) *DescribeApiResponseConstantParametersConstantParameter {
	s.Location = &v
	return s
}

func (s *DescribeApiResponseConstantParametersConstantParameter) SetDescription(v string) *DescribeApiResponseConstantParametersConstantParameter {
	s.Description = &v
	return s
}

type DescribeApiResponseRequestParameters struct {
	RequestParameter []*DescribeApiResponseRequestParametersRequestParameter `json:"RequestParameter,omitempty" xml:"RequestParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiResponseRequestParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseRequestParameters) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseRequestParameters) SetRequestParameter(v []*DescribeApiResponseRequestParametersRequestParameter) *DescribeApiResponseRequestParameters {
	s.RequestParameter = v
	return s
}

type DescribeApiResponseRequestParametersRequestParameter struct {
	ApiParameterName  *string `json:"ApiParameterName,omitempty" xml:"ApiParameterName,omitempty" require:"true"`
	Location          *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	ParameterType     *string `json:"ParameterType,omitempty" xml:"ParameterType,omitempty" require:"true"`
	Required          *string `json:"Required,omitempty" xml:"Required,omitempty" require:"true"`
	DefaultValue      *string `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty" require:"true"`
	DemoValue         *string `json:"DemoValue,omitempty" xml:"DemoValue,omitempty" require:"true"`
	MaxValue          *int64  `json:"MaxValue,omitempty" xml:"MaxValue,omitempty" require:"true"`
	MinValue          *int64  `json:"MinValue,omitempty" xml:"MinValue,omitempty" require:"true"`
	MaxLength         *int64  `json:"MaxLength,omitempty" xml:"MaxLength,omitempty" require:"true"`
	MinLength         *int64  `json:"MinLength,omitempty" xml:"MinLength,omitempty" require:"true"`
	RegularExpression *string `json:"RegularExpression,omitempty" xml:"RegularExpression,omitempty" require:"true"`
	JsonScheme        *string `json:"JsonScheme,omitempty" xml:"JsonScheme,omitempty" require:"true"`
	EnumValue         *string `json:"EnumValue,omitempty" xml:"EnumValue,omitempty" require:"true"`
	DocShow           *string `json:"DocShow,omitempty" xml:"DocShow,omitempty" require:"true"`
	DocOrder          *int    `json:"DocOrder,omitempty" xml:"DocOrder,omitempty" require:"true"`
	Description       *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	ArrayItemsType    *string `json:"ArrayItemsType,omitempty" xml:"ArrayItemsType,omitempty" require:"true"`
}

func (s DescribeApiResponseRequestParametersRequestParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseRequestParametersRequestParameter) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetApiParameterName(v string) *DescribeApiResponseRequestParametersRequestParameter {
	s.ApiParameterName = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetLocation(v string) *DescribeApiResponseRequestParametersRequestParameter {
	s.Location = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetParameterType(v string) *DescribeApiResponseRequestParametersRequestParameter {
	s.ParameterType = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetRequired(v string) *DescribeApiResponseRequestParametersRequestParameter {
	s.Required = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetDefaultValue(v string) *DescribeApiResponseRequestParametersRequestParameter {
	s.DefaultValue = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetDemoValue(v string) *DescribeApiResponseRequestParametersRequestParameter {
	s.DemoValue = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetMaxValue(v int64) *DescribeApiResponseRequestParametersRequestParameter {
	s.MaxValue = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetMinValue(v int64) *DescribeApiResponseRequestParametersRequestParameter {
	s.MinValue = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetMaxLength(v int64) *DescribeApiResponseRequestParametersRequestParameter {
	s.MaxLength = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetMinLength(v int64) *DescribeApiResponseRequestParametersRequestParameter {
	s.MinLength = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetRegularExpression(v string) *DescribeApiResponseRequestParametersRequestParameter {
	s.RegularExpression = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetJsonScheme(v string) *DescribeApiResponseRequestParametersRequestParameter {
	s.JsonScheme = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetEnumValue(v string) *DescribeApiResponseRequestParametersRequestParameter {
	s.EnumValue = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetDocShow(v string) *DescribeApiResponseRequestParametersRequestParameter {
	s.DocShow = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetDocOrder(v int) *DescribeApiResponseRequestParametersRequestParameter {
	s.DocOrder = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetDescription(v string) *DescribeApiResponseRequestParametersRequestParameter {
	s.Description = &v
	return s
}

func (s *DescribeApiResponseRequestParametersRequestParameter) SetArrayItemsType(v string) *DescribeApiResponseRequestParametersRequestParameter {
	s.ArrayItemsType = &v
	return s
}

type DescribeApiResponseServiceParameters struct {
	ServiceParameter []*DescribeApiResponseServiceParametersServiceParameter `json:"ServiceParameter,omitempty" xml:"ServiceParameter,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiResponseServiceParameters) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseServiceParameters) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseServiceParameters) SetServiceParameter(v []*DescribeApiResponseServiceParametersServiceParameter) *DescribeApiResponseServiceParameters {
	s.ServiceParameter = v
	return s
}

type DescribeApiResponseServiceParametersServiceParameter struct {
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	Location             *string `json:"Location,omitempty" xml:"Location,omitempty" require:"true"`
	ParameterType        *string `json:"ParameterType,omitempty" xml:"ParameterType,omitempty" require:"true"`
}

func (s DescribeApiResponseServiceParametersServiceParameter) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseServiceParametersServiceParameter) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseServiceParametersServiceParameter) SetServiceParameterName(v string) *DescribeApiResponseServiceParametersServiceParameter {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeApiResponseServiceParametersServiceParameter) SetLocation(v string) *DescribeApiResponseServiceParametersServiceParameter {
	s.Location = &v
	return s
}

func (s *DescribeApiResponseServiceParametersServiceParameter) SetParameterType(v string) *DescribeApiResponseServiceParametersServiceParameter {
	s.ParameterType = &v
	return s
}

type DescribeApiResponseServiceParametersMap struct {
	ServiceParameterMap []*DescribeApiResponseServiceParametersMapServiceParameterMap `json:"ServiceParameterMap,omitempty" xml:"ServiceParameterMap,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiResponseServiceParametersMap) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseServiceParametersMap) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseServiceParametersMap) SetServiceParameterMap(v []*DescribeApiResponseServiceParametersMapServiceParameterMap) *DescribeApiResponseServiceParametersMap {
	s.ServiceParameterMap = v
	return s
}

type DescribeApiResponseServiceParametersMapServiceParameterMap struct {
	ServiceParameterName *string `json:"ServiceParameterName,omitempty" xml:"ServiceParameterName,omitempty" require:"true"`
	RequestParameterName *string `json:"RequestParameterName,omitempty" xml:"RequestParameterName,omitempty" require:"true"`
}

func (s DescribeApiResponseServiceParametersMapServiceParameterMap) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseServiceParametersMapServiceParameterMap) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseServiceParametersMapServiceParameterMap) SetServiceParameterName(v string) *DescribeApiResponseServiceParametersMapServiceParameterMap {
	s.ServiceParameterName = &v
	return s
}

func (s *DescribeApiResponseServiceParametersMapServiceParameterMap) SetRequestParameterName(v string) *DescribeApiResponseServiceParametersMapServiceParameterMap {
	s.RequestParameterName = &v
	return s
}

type DescribeApiResponseDeployedInfos struct {
	DeployedInfo []*DescribeApiResponseDeployedInfosDeployedInfo `json:"DeployedInfo,omitempty" xml:"DeployedInfo,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiResponseDeployedInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseDeployedInfos) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseDeployedInfos) SetDeployedInfo(v []*DescribeApiResponseDeployedInfosDeployedInfo) *DescribeApiResponseDeployedInfos {
	s.DeployedInfo = v
	return s
}

type DescribeApiResponseDeployedInfosDeployedInfo struct {
	StageName        *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	EffectiveVersion *string `json:"EffectiveVersion,omitempty" xml:"EffectiveVersion,omitempty" require:"true"`
	DeployedStatus   *string `json:"DeployedStatus,omitempty" xml:"DeployedStatus,omitempty" require:"true"`
}

func (s DescribeApiResponseDeployedInfosDeployedInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseDeployedInfosDeployedInfo) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseDeployedInfosDeployedInfo) SetStageName(v string) *DescribeApiResponseDeployedInfosDeployedInfo {
	s.StageName = &v
	return s
}

func (s *DescribeApiResponseDeployedInfosDeployedInfo) SetEffectiveVersion(v string) *DescribeApiResponseDeployedInfosDeployedInfo {
	s.EffectiveVersion = &v
	return s
}

func (s *DescribeApiResponseDeployedInfosDeployedInfo) SetDeployedStatus(v string) *DescribeApiResponseDeployedInfosDeployedInfo {
	s.DeployedStatus = &v
	return s
}

type DescribeApiResponseRequestConfig struct {
	RequestProtocol     *string `json:"RequestProtocol,omitempty" xml:"RequestProtocol,omitempty" require:"true"`
	RequestHttpMethod   *string `json:"RequestHttpMethod,omitempty" xml:"RequestHttpMethod,omitempty" require:"true"`
	RequestPath         *string `json:"RequestPath,omitempty" xml:"RequestPath,omitempty" require:"true"`
	BodyFormat          *string `json:"BodyFormat,omitempty" xml:"BodyFormat,omitempty" require:"true"`
	PostBodyDescription *string `json:"PostBodyDescription,omitempty" xml:"PostBodyDescription,omitempty" require:"true"`
	RequestMode         *string `json:"RequestMode,omitempty" xml:"RequestMode,omitempty" require:"true"`
	BodyModel           *string `json:"BodyModel,omitempty" xml:"BodyModel,omitempty" require:"true"`
}

func (s DescribeApiResponseRequestConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseRequestConfig) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseRequestConfig) SetRequestProtocol(v string) *DescribeApiResponseRequestConfig {
	s.RequestProtocol = &v
	return s
}

func (s *DescribeApiResponseRequestConfig) SetRequestHttpMethod(v string) *DescribeApiResponseRequestConfig {
	s.RequestHttpMethod = &v
	return s
}

func (s *DescribeApiResponseRequestConfig) SetRequestPath(v string) *DescribeApiResponseRequestConfig {
	s.RequestPath = &v
	return s
}

func (s *DescribeApiResponseRequestConfig) SetBodyFormat(v string) *DescribeApiResponseRequestConfig {
	s.BodyFormat = &v
	return s
}

func (s *DescribeApiResponseRequestConfig) SetPostBodyDescription(v string) *DescribeApiResponseRequestConfig {
	s.PostBodyDescription = &v
	return s
}

func (s *DescribeApiResponseRequestConfig) SetRequestMode(v string) *DescribeApiResponseRequestConfig {
	s.RequestMode = &v
	return s
}

func (s *DescribeApiResponseRequestConfig) SetBodyModel(v string) *DescribeApiResponseRequestConfig {
	s.BodyModel = &v
	return s
}

type DescribeApiResponseServiceConfig struct {
	ServiceProtocol       *string                                                `json:"ServiceProtocol,omitempty" xml:"ServiceProtocol,omitempty" require:"true"`
	ServiceAddress        *string                                                `json:"ServiceAddress,omitempty" xml:"ServiceAddress,omitempty" require:"true"`
	ServiceHttpMethod     *string                                                `json:"ServiceHttpMethod,omitempty" xml:"ServiceHttpMethod,omitempty" require:"true"`
	ServicePath           *string                                                `json:"ServicePath,omitempty" xml:"ServicePath,omitempty" require:"true"`
	ServiceTimeout        *int                                                   `json:"ServiceTimeout,omitempty" xml:"ServiceTimeout,omitempty" require:"true"`
	ContentTypeCatagory   *string                                                `json:"ContentTypeCatagory,omitempty" xml:"ContentTypeCatagory,omitempty" require:"true"`
	ContentTypeValue      *string                                                `json:"ContentTypeValue,omitempty" xml:"ContentTypeValue,omitempty" require:"true"`
	Mock                  *string                                                `json:"Mock,omitempty" xml:"Mock,omitempty" require:"true"`
	MockResult            *string                                                `json:"MockResult,omitempty" xml:"MockResult,omitempty" require:"true"`
	ServiceVpcEnable      *string                                                `json:"ServiceVpcEnable,omitempty" xml:"ServiceVpcEnable,omitempty" require:"true"`
	AoneAppName           *string                                                `json:"AoneAppName,omitempty" xml:"AoneAppName,omitempty" require:"true"`
	MockStatusCode        *int                                                   `json:"MockStatusCode,omitempty" xml:"MockStatusCode,omitempty" require:"true"`
	MockHeaders           *DescribeApiResponseServiceConfigMockHeaders           `json:"MockHeaders,omitempty" xml:"MockHeaders,omitempty" require:"true" type:"Struct"`
	VpcConfig             *DescribeApiResponseServiceConfigVpcConfig             `json:"VpcConfig,omitempty" xml:"VpcConfig,omitempty" require:"true" type:"Struct"`
	FunctionComputeConfig *DescribeApiResponseServiceConfigFunctionComputeConfig `json:"FunctionComputeConfig,omitempty" xml:"FunctionComputeConfig,omitempty" require:"true" type:"Struct"`
}

func (s DescribeApiResponseServiceConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseServiceConfig) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseServiceConfig) SetServiceProtocol(v string) *DescribeApiResponseServiceConfig {
	s.ServiceProtocol = &v
	return s
}

func (s *DescribeApiResponseServiceConfig) SetServiceAddress(v string) *DescribeApiResponseServiceConfig {
	s.ServiceAddress = &v
	return s
}

func (s *DescribeApiResponseServiceConfig) SetServiceHttpMethod(v string) *DescribeApiResponseServiceConfig {
	s.ServiceHttpMethod = &v
	return s
}

func (s *DescribeApiResponseServiceConfig) SetServicePath(v string) *DescribeApiResponseServiceConfig {
	s.ServicePath = &v
	return s
}

func (s *DescribeApiResponseServiceConfig) SetServiceTimeout(v int) *DescribeApiResponseServiceConfig {
	s.ServiceTimeout = &v
	return s
}

func (s *DescribeApiResponseServiceConfig) SetContentTypeCatagory(v string) *DescribeApiResponseServiceConfig {
	s.ContentTypeCatagory = &v
	return s
}

func (s *DescribeApiResponseServiceConfig) SetContentTypeValue(v string) *DescribeApiResponseServiceConfig {
	s.ContentTypeValue = &v
	return s
}

func (s *DescribeApiResponseServiceConfig) SetMock(v string) *DescribeApiResponseServiceConfig {
	s.Mock = &v
	return s
}

func (s *DescribeApiResponseServiceConfig) SetMockResult(v string) *DescribeApiResponseServiceConfig {
	s.MockResult = &v
	return s
}

func (s *DescribeApiResponseServiceConfig) SetServiceVpcEnable(v string) *DescribeApiResponseServiceConfig {
	s.ServiceVpcEnable = &v
	return s
}

func (s *DescribeApiResponseServiceConfig) SetAoneAppName(v string) *DescribeApiResponseServiceConfig {
	s.AoneAppName = &v
	return s
}

func (s *DescribeApiResponseServiceConfig) SetMockStatusCode(v int) *DescribeApiResponseServiceConfig {
	s.MockStatusCode = &v
	return s
}

func (s *DescribeApiResponseServiceConfig) SetMockHeaders(v *DescribeApiResponseServiceConfigMockHeaders) *DescribeApiResponseServiceConfig {
	s.MockHeaders = v
	return s
}

func (s *DescribeApiResponseServiceConfig) SetVpcConfig(v *DescribeApiResponseServiceConfigVpcConfig) *DescribeApiResponseServiceConfig {
	s.VpcConfig = v
	return s
}

func (s *DescribeApiResponseServiceConfig) SetFunctionComputeConfig(v *DescribeApiResponseServiceConfigFunctionComputeConfig) *DescribeApiResponseServiceConfig {
	s.FunctionComputeConfig = v
	return s
}

type DescribeApiResponseServiceConfigMockHeaders struct {
	MockHeader []*DescribeApiResponseServiceConfigMockHeadersMockHeader `json:"MockHeader,omitempty" xml:"MockHeader,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeApiResponseServiceConfigMockHeaders) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseServiceConfigMockHeaders) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseServiceConfigMockHeaders) SetMockHeader(v []*DescribeApiResponseServiceConfigMockHeadersMockHeader) *DescribeApiResponseServiceConfigMockHeaders {
	s.MockHeader = v
	return s
}

type DescribeApiResponseServiceConfigMockHeadersMockHeader struct {
	HeaderName  *string `json:"HeaderName,omitempty" xml:"HeaderName,omitempty" require:"true"`
	HeaderValue *string `json:"HeaderValue,omitempty" xml:"HeaderValue,omitempty" require:"true"`
}

func (s DescribeApiResponseServiceConfigMockHeadersMockHeader) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseServiceConfigMockHeadersMockHeader) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseServiceConfigMockHeadersMockHeader) SetHeaderName(v string) *DescribeApiResponseServiceConfigMockHeadersMockHeader {
	s.HeaderName = &v
	return s
}

func (s *DescribeApiResponseServiceConfigMockHeadersMockHeader) SetHeaderValue(v string) *DescribeApiResponseServiceConfigMockHeadersMockHeader {
	s.HeaderValue = &v
	return s
}

type DescribeApiResponseServiceConfigVpcConfig struct {
	Name       *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	VpcId      *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	InstanceId *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	Port       *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
}

func (s DescribeApiResponseServiceConfigVpcConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseServiceConfigVpcConfig) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseServiceConfigVpcConfig) SetName(v string) *DescribeApiResponseServiceConfigVpcConfig {
	s.Name = &v
	return s
}

func (s *DescribeApiResponseServiceConfigVpcConfig) SetVpcId(v string) *DescribeApiResponseServiceConfigVpcConfig {
	s.VpcId = &v
	return s
}

func (s *DescribeApiResponseServiceConfigVpcConfig) SetInstanceId(v string) *DescribeApiResponseServiceConfigVpcConfig {
	s.InstanceId = &v
	return s
}

func (s *DescribeApiResponseServiceConfigVpcConfig) SetPort(v int) *DescribeApiResponseServiceConfigVpcConfig {
	s.Port = &v
	return s
}

type DescribeApiResponseServiceConfigFunctionComputeConfig struct {
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ServiceName  *string `json:"ServiceName,omitempty" xml:"ServiceName,omitempty" require:"true"`
	FunctionName *string `json:"FunctionName,omitempty" xml:"FunctionName,omitempty" require:"true"`
	RoleArn      *string `json:"RoleArn,omitempty" xml:"RoleArn,omitempty" require:"true"`
}

func (s DescribeApiResponseServiceConfigFunctionComputeConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseServiceConfigFunctionComputeConfig) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseServiceConfigFunctionComputeConfig) SetRegionId(v string) *DescribeApiResponseServiceConfigFunctionComputeConfig {
	s.RegionId = &v
	return s
}

func (s *DescribeApiResponseServiceConfigFunctionComputeConfig) SetServiceName(v string) *DescribeApiResponseServiceConfigFunctionComputeConfig {
	s.ServiceName = &v
	return s
}

func (s *DescribeApiResponseServiceConfigFunctionComputeConfig) SetFunctionName(v string) *DescribeApiResponseServiceConfigFunctionComputeConfig {
	s.FunctionName = &v
	return s
}

func (s *DescribeApiResponseServiceConfigFunctionComputeConfig) SetRoleArn(v string) *DescribeApiResponseServiceConfigFunctionComputeConfig {
	s.RoleArn = &v
	return s
}

type DescribeApiResponseOpenIdConnectConfig struct {
	OpenIdApiType    *string `json:"OpenIdApiType,omitempty" xml:"OpenIdApiType,omitempty" require:"true"`
	IdTokenParamName *string `json:"IdTokenParamName,omitempty" xml:"IdTokenParamName,omitempty" require:"true"`
	PublicKeyId      *string `json:"PublicKeyId,omitempty" xml:"PublicKeyId,omitempty" require:"true"`
	PublicKey        *string `json:"PublicKey,omitempty" xml:"PublicKey,omitempty" require:"true"`
}

func (s DescribeApiResponseOpenIdConnectConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeApiResponseOpenIdConnectConfig) GoString() string {
	return s.String()
}

func (s *DescribeApiResponseOpenIdConnectConfig) SetOpenIdApiType(v string) *DescribeApiResponseOpenIdConnectConfig {
	s.OpenIdApiType = &v
	return s
}

func (s *DescribeApiResponseOpenIdConnectConfig) SetIdTokenParamName(v string) *DescribeApiResponseOpenIdConnectConfig {
	s.IdTokenParamName = &v
	return s
}

func (s *DescribeApiResponseOpenIdConnectConfig) SetPublicKeyId(v string) *DescribeApiResponseOpenIdConnectConfig {
	s.PublicKeyId = &v
	return s
}

func (s *DescribeApiResponseOpenIdConnectConfig) SetPublicKey(v string) *DescribeApiResponseOpenIdConnectConfig {
	s.PublicKey = &v
	return s
}

type DeployApiRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
	Description   *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DeployApiRequest) String() string {
	return tea.Prettify(s)
}

func (s DeployApiRequest) GoString() string {
	return s.String()
}

func (s *DeployApiRequest) SetSecurityToken(v string) *DeployApiRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeployApiRequest) SetGroupId(v string) *DeployApiRequest {
	s.GroupId = &v
	return s
}

func (s *DeployApiRequest) SetApiId(v string) *DeployApiRequest {
	s.ApiId = &v
	return s
}

func (s *DeployApiRequest) SetStageName(v string) *DeployApiRequest {
	s.StageName = &v
	return s
}

func (s *DeployApiRequest) SetDescription(v string) *DeployApiRequest {
	s.Description = &v
	return s
}

type DeployApiResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeployApiResponse) String() string {
	return tea.Prettify(s)
}

func (s DeployApiResponse) GoString() string {
	return s.String()
}

func (s *DeployApiResponse) SetRequestId(v string) *DeployApiResponse {
	s.RequestId = &v
	return s
}

type DeleteTrafficSpecialControlRequest struct {
	SecurityToken    *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	TrafficControlId *string `json:"TrafficControlId,omitempty" xml:"TrafficControlId,omitempty" require:"true"`
	SpecialType      *string `json:"SpecialType,omitempty" xml:"SpecialType,omitempty" require:"true"`
	SpecialKey       *string `json:"SpecialKey,omitempty" xml:"SpecialKey,omitempty" require:"true"`
}

func (s DeleteTrafficSpecialControlRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteTrafficSpecialControlRequest) GoString() string {
	return s.String()
}

func (s *DeleteTrafficSpecialControlRequest) SetSecurityToken(v string) *DeleteTrafficSpecialControlRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteTrafficSpecialControlRequest) SetTrafficControlId(v string) *DeleteTrafficSpecialControlRequest {
	s.TrafficControlId = &v
	return s
}

func (s *DeleteTrafficSpecialControlRequest) SetSpecialType(v string) *DeleteTrafficSpecialControlRequest {
	s.SpecialType = &v
	return s
}

func (s *DeleteTrafficSpecialControlRequest) SetSpecialKey(v string) *DeleteTrafficSpecialControlRequest {
	s.SpecialKey = &v
	return s
}

type DeleteTrafficSpecialControlResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteTrafficSpecialControlResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteTrafficSpecialControlResponse) GoString() string {
	return s.String()
}

func (s *DeleteTrafficSpecialControlResponse) SetRequestId(v string) *DeleteTrafficSpecialControlResponse {
	s.RequestId = &v
	return s
}

type DeleteTrafficControlRequest struct {
	SecurityToken    *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	TrafficControlId *string `json:"TrafficControlId,omitempty" xml:"TrafficControlId,omitempty" require:"true"`
}

func (s DeleteTrafficControlRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteTrafficControlRequest) GoString() string {
	return s.String()
}

func (s *DeleteTrafficControlRequest) SetSecurityToken(v string) *DeleteTrafficControlRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteTrafficControlRequest) SetTrafficControlId(v string) *DeleteTrafficControlRequest {
	s.TrafficControlId = &v
	return s
}

type DeleteTrafficControlResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteTrafficControlResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteTrafficControlResponse) GoString() string {
	return s.String()
}

func (s *DeleteTrafficControlResponse) SetRequestId(v string) *DeleteTrafficControlResponse {
	s.RequestId = &v
	return s
}

type DeleteSignatureRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	SignatureId   *string `json:"SignatureId,omitempty" xml:"SignatureId,omitempty" require:"true"`
}

func (s DeleteSignatureRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteSignatureRequest) GoString() string {
	return s.String()
}

func (s *DeleteSignatureRequest) SetSecurityToken(v string) *DeleteSignatureRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteSignatureRequest) SetSignatureId(v string) *DeleteSignatureRequest {
	s.SignatureId = &v
	return s
}

type DeleteSignatureResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteSignatureResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteSignatureResponse) GoString() string {
	return s.String()
}

func (s *DeleteSignatureResponse) SetRequestId(v string) *DeleteSignatureResponse {
	s.RequestId = &v
	return s
}

type DeleteDomainCertificateRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	DomainName    *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	CertificateId *string `json:"CertificateId,omitempty" xml:"CertificateId,omitempty" require:"true"`
}

func (s DeleteDomainCertificateRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteDomainCertificateRequest) GoString() string {
	return s.String()
}

func (s *DeleteDomainCertificateRequest) SetSecurityToken(v string) *DeleteDomainCertificateRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteDomainCertificateRequest) SetGroupId(v string) *DeleteDomainCertificateRequest {
	s.GroupId = &v
	return s
}

func (s *DeleteDomainCertificateRequest) SetDomainName(v string) *DeleteDomainCertificateRequest {
	s.DomainName = &v
	return s
}

func (s *DeleteDomainCertificateRequest) SetCertificateId(v string) *DeleteDomainCertificateRequest {
	s.CertificateId = &v
	return s
}

type DeleteDomainCertificateResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteDomainCertificateResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteDomainCertificateResponse) GoString() string {
	return s.String()
}

func (s *DeleteDomainCertificateResponse) SetRequestId(v string) *DeleteDomainCertificateResponse {
	s.RequestId = &v
	return s
}

type DeleteDomainRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	DomainName    *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s DeleteDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteDomainRequest) GoString() string {
	return s.String()
}

func (s *DeleteDomainRequest) SetSecurityToken(v string) *DeleteDomainRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteDomainRequest) SetGroupId(v string) *DeleteDomainRequest {
	s.GroupId = &v
	return s
}

func (s *DeleteDomainRequest) SetDomainName(v string) *DeleteDomainRequest {
	s.DomainName = &v
	return s
}

type DeleteDomainResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteDomainResponse) GoString() string {
	return s.String()
}

func (s *DeleteDomainResponse) SetRequestId(v string) *DeleteDomainResponse {
	s.RequestId = &v
	return s
}

type DeleteAppRequest struct {
	SecurityToken *string                `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	AppId         *int64                 `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	Tag           []*DeleteAppRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s DeleteAppRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAppRequest) GoString() string {
	return s.String()
}

func (s *DeleteAppRequest) SetSecurityToken(v string) *DeleteAppRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteAppRequest) SetAppId(v int64) *DeleteAppRequest {
	s.AppId = &v
	return s
}

func (s *DeleteAppRequest) SetTag(v []*DeleteAppRequestTag) *DeleteAppRequest {
	s.Tag = v
	return s
}

type DeleteAppRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s DeleteAppRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DeleteAppRequestTag) GoString() string {
	return s.String()
}

func (s *DeleteAppRequestTag) SetKey(v string) *DeleteAppRequestTag {
	s.Key = &v
	return s
}

func (s *DeleteAppRequestTag) SetValue(v string) *DeleteAppRequestTag {
	s.Value = &v
	return s
}

type DeleteAppResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteAppResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAppResponse) GoString() string {
	return s.String()
}

func (s *DeleteAppResponse) SetRequestId(v string) *DeleteAppResponse {
	s.RequestId = &v
	return s
}

type DeleteApiGroupRequest struct {
	SecurityToken *string                     `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string                     `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	Tag           []*DeleteApiGroupRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s DeleteApiGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteApiGroupRequest) GoString() string {
	return s.String()
}

func (s *DeleteApiGroupRequest) SetSecurityToken(v string) *DeleteApiGroupRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteApiGroupRequest) SetGroupId(v string) *DeleteApiGroupRequest {
	s.GroupId = &v
	return s
}

func (s *DeleteApiGroupRequest) SetTag(v []*DeleteApiGroupRequestTag) *DeleteApiGroupRequest {
	s.Tag = v
	return s
}

type DeleteApiGroupRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DeleteApiGroupRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DeleteApiGroupRequestTag) GoString() string {
	return s.String()
}

func (s *DeleteApiGroupRequestTag) SetKey(v string) *DeleteApiGroupRequestTag {
	s.Key = &v
	return s
}

func (s *DeleteApiGroupRequestTag) SetValue(v string) *DeleteApiGroupRequestTag {
	s.Value = &v
	return s
}

type DeleteApiGroupResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteApiGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteApiGroupResponse) GoString() string {
	return s.String()
}

func (s *DeleteApiGroupResponse) SetRequestId(v string) *DeleteApiGroupResponse {
	s.RequestId = &v
	return s
}

type DeleteApiRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
}

func (s DeleteApiRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteApiRequest) GoString() string {
	return s.String()
}

func (s *DeleteApiRequest) SetSecurityToken(v string) *DeleteApiRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteApiRequest) SetGroupId(v string) *DeleteApiRequest {
	s.GroupId = &v
	return s
}

func (s *DeleteApiRequest) SetApiId(v string) *DeleteApiRequest {
	s.ApiId = &v
	return s
}

type DeleteApiResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteApiResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteApiResponse) GoString() string {
	return s.String()
}

func (s *DeleteApiResponse) SetRequestId(v string) *DeleteApiResponse {
	s.RequestId = &v
	return s
}

type DeleteAllTrafficSpecialControlRequest struct {
	SecurityToken    *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	TrafficControlId *string `json:"TrafficControlId,omitempty" xml:"TrafficControlId,omitempty" require:"true"`
}

func (s DeleteAllTrafficSpecialControlRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAllTrafficSpecialControlRequest) GoString() string {
	return s.String()
}

func (s *DeleteAllTrafficSpecialControlRequest) SetSecurityToken(v string) *DeleteAllTrafficSpecialControlRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteAllTrafficSpecialControlRequest) SetTrafficControlId(v string) *DeleteAllTrafficSpecialControlRequest {
	s.TrafficControlId = &v
	return s
}

type DeleteAllTrafficSpecialControlResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteAllTrafficSpecialControlResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAllTrafficSpecialControlResponse) GoString() string {
	return s.String()
}

func (s *DeleteAllTrafficSpecialControlResponse) SetRequestId(v string) *DeleteAllTrafficSpecialControlResponse {
	s.RequestId = &v
	return s
}

type CreateTrafficControlRequest struct {
	SecurityToken      *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	TrafficControlName *string `json:"TrafficControlName,omitempty" xml:"TrafficControlName,omitempty" require:"true"`
	TrafficControlUnit *string `json:"TrafficControlUnit,omitempty" xml:"TrafficControlUnit,omitempty" require:"true"`
	ApiDefault         *int    `json:"ApiDefault,omitempty" xml:"ApiDefault,omitempty" require:"true"`
	UserDefault        *int    `json:"UserDefault,omitempty" xml:"UserDefault,omitempty"`
	AppDefault         *int    `json:"AppDefault,omitempty" xml:"AppDefault,omitempty"`
	Description        *string `json:"Description,omitempty" xml:"Description,omitempty"`
}

func (s CreateTrafficControlRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateTrafficControlRequest) GoString() string {
	return s.String()
}

func (s *CreateTrafficControlRequest) SetSecurityToken(v string) *CreateTrafficControlRequest {
	s.SecurityToken = &v
	return s
}

func (s *CreateTrafficControlRequest) SetTrafficControlName(v string) *CreateTrafficControlRequest {
	s.TrafficControlName = &v
	return s
}

func (s *CreateTrafficControlRequest) SetTrafficControlUnit(v string) *CreateTrafficControlRequest {
	s.TrafficControlUnit = &v
	return s
}

func (s *CreateTrafficControlRequest) SetApiDefault(v int) *CreateTrafficControlRequest {
	s.ApiDefault = &v
	return s
}

func (s *CreateTrafficControlRequest) SetUserDefault(v int) *CreateTrafficControlRequest {
	s.UserDefault = &v
	return s
}

func (s *CreateTrafficControlRequest) SetAppDefault(v int) *CreateTrafficControlRequest {
	s.AppDefault = &v
	return s
}

func (s *CreateTrafficControlRequest) SetDescription(v string) *CreateTrafficControlRequest {
	s.Description = &v
	return s
}

type CreateTrafficControlResponse struct {
	RequestId        *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TrafficControlId *string `json:"TrafficControlId,omitempty" xml:"TrafficControlId,omitempty" require:"true"`
}

func (s CreateTrafficControlResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateTrafficControlResponse) GoString() string {
	return s.String()
}

func (s *CreateTrafficControlResponse) SetRequestId(v string) *CreateTrafficControlResponse {
	s.RequestId = &v
	return s
}

func (s *CreateTrafficControlResponse) SetTrafficControlId(v string) *CreateTrafficControlResponse {
	s.TrafficControlId = &v
	return s
}

type CreateSignatureRequest struct {
	SecurityToken   *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	SignatureName   *string `json:"SignatureName,omitempty" xml:"SignatureName,omitempty" require:"true"`
	SignatureKey    *string `json:"SignatureKey,omitempty" xml:"SignatureKey,omitempty" require:"true"`
	SignatureSecret *string `json:"SignatureSecret,omitempty" xml:"SignatureSecret,omitempty" require:"true"`
}

func (s CreateSignatureRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateSignatureRequest) GoString() string {
	return s.String()
}

func (s *CreateSignatureRequest) SetSecurityToken(v string) *CreateSignatureRequest {
	s.SecurityToken = &v
	return s
}

func (s *CreateSignatureRequest) SetSignatureName(v string) *CreateSignatureRequest {
	s.SignatureName = &v
	return s
}

func (s *CreateSignatureRequest) SetSignatureKey(v string) *CreateSignatureRequest {
	s.SignatureKey = &v
	return s
}

func (s *CreateSignatureRequest) SetSignatureSecret(v string) *CreateSignatureRequest {
	s.SignatureSecret = &v
	return s
}

type CreateSignatureResponse struct {
	RequestId     *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	SignatureId   *string `json:"SignatureId,omitempty" xml:"SignatureId,omitempty" require:"true"`
	SignatureName *string `json:"SignatureName,omitempty" xml:"SignatureName,omitempty" require:"true"`
}

func (s CreateSignatureResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateSignatureResponse) GoString() string {
	return s.String()
}

func (s *CreateSignatureResponse) SetRequestId(v string) *CreateSignatureResponse {
	s.RequestId = &v
	return s
}

func (s *CreateSignatureResponse) SetSignatureId(v string) *CreateSignatureResponse {
	s.SignatureId = &v
	return s
}

func (s *CreateSignatureResponse) SetSignatureName(v string) *CreateSignatureResponse {
	s.SignatureName = &v
	return s
}

type CreateAppRequest struct {
	SecurityToken *string                `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	AppName       *string                `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
	Description   *string                `json:"Description,omitempty" xml:"Description,omitempty"`
	Source        *string                `json:"Source,omitempty" xml:"Source,omitempty"`
	Tag           []*CreateAppRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s CreateAppRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateAppRequest) GoString() string {
	return s.String()
}

func (s *CreateAppRequest) SetSecurityToken(v string) *CreateAppRequest {
	s.SecurityToken = &v
	return s
}

func (s *CreateAppRequest) SetAppName(v string) *CreateAppRequest {
	s.AppName = &v
	return s
}

func (s *CreateAppRequest) SetDescription(v string) *CreateAppRequest {
	s.Description = &v
	return s
}

func (s *CreateAppRequest) SetSource(v string) *CreateAppRequest {
	s.Source = &v
	return s
}

func (s *CreateAppRequest) SetTag(v []*CreateAppRequestTag) *CreateAppRequest {
	s.Tag = v
	return s
}

type CreateAppRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s CreateAppRequestTag) String() string {
	return tea.Prettify(s)
}

func (s CreateAppRequestTag) GoString() string {
	return s.String()
}

func (s *CreateAppRequestTag) SetKey(v string) *CreateAppRequestTag {
	s.Key = &v
	return s
}

func (s *CreateAppRequestTag) SetValue(v string) *CreateAppRequestTag {
	s.Value = &v
	return s
}

type CreateAppResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AppId     *int64  `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	TagStatus *bool   `json:"TagStatus,omitempty" xml:"TagStatus,omitempty" require:"true"`
}

func (s CreateAppResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateAppResponse) GoString() string {
	return s.String()
}

func (s *CreateAppResponse) SetRequestId(v string) *CreateAppResponse {
	s.RequestId = &v
	return s
}

func (s *CreateAppResponse) SetAppId(v int64) *CreateAppResponse {
	s.AppId = &v
	return s
}

func (s *CreateAppResponse) SetTagStatus(v bool) *CreateAppResponse {
	s.TagStatus = &v
	return s
}

type CreateApiGroupRequest struct {
	SecurityToken *string                     `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupName     *string                     `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	Description   *string                     `json:"Description,omitempty" xml:"Description,omitempty"`
	InstanceId    *string                     `json:"InstanceId,omitempty" xml:"InstanceId,omitempty"`
	Tag           []*CreateApiGroupRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s CreateApiGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateApiGroupRequest) GoString() string {
	return s.String()
}

func (s *CreateApiGroupRequest) SetSecurityToken(v string) *CreateApiGroupRequest {
	s.SecurityToken = &v
	return s
}

func (s *CreateApiGroupRequest) SetGroupName(v string) *CreateApiGroupRequest {
	s.GroupName = &v
	return s
}

func (s *CreateApiGroupRequest) SetDescription(v string) *CreateApiGroupRequest {
	s.Description = &v
	return s
}

func (s *CreateApiGroupRequest) SetInstanceId(v string) *CreateApiGroupRequest {
	s.InstanceId = &v
	return s
}

func (s *CreateApiGroupRequest) SetTag(v []*CreateApiGroupRequestTag) *CreateApiGroupRequest {
	s.Tag = v
	return s
}

type CreateApiGroupRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s CreateApiGroupRequestTag) String() string {
	return tea.Prettify(s)
}

func (s CreateApiGroupRequestTag) GoString() string {
	return s.String()
}

func (s *CreateApiGroupRequestTag) SetKey(v string) *CreateApiGroupRequestTag {
	s.Key = &v
	return s
}

func (s *CreateApiGroupRequestTag) SetValue(v string) *CreateApiGroupRequestTag {
	s.Value = &v
	return s
}

type CreateApiGroupResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	GroupId      *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	GroupName    *string `json:"GroupName,omitempty" xml:"GroupName,omitempty" require:"true"`
	SubDomain    *string `json:"SubDomain,omitempty" xml:"SubDomain,omitempty" require:"true"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	InstanceId   *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	InstanceType *string `json:"InstanceType,omitempty" xml:"InstanceType,omitempty" require:"true"`
	TagStatus    *bool   `json:"TagStatus,omitempty" xml:"TagStatus,omitempty" require:"true"`
}

func (s CreateApiGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateApiGroupResponse) GoString() string {
	return s.String()
}

func (s *CreateApiGroupResponse) SetRequestId(v string) *CreateApiGroupResponse {
	s.RequestId = &v
	return s
}

func (s *CreateApiGroupResponse) SetGroupId(v string) *CreateApiGroupResponse {
	s.GroupId = &v
	return s
}

func (s *CreateApiGroupResponse) SetGroupName(v string) *CreateApiGroupResponse {
	s.GroupName = &v
	return s
}

func (s *CreateApiGroupResponse) SetSubDomain(v string) *CreateApiGroupResponse {
	s.SubDomain = &v
	return s
}

func (s *CreateApiGroupResponse) SetDescription(v string) *CreateApiGroupResponse {
	s.Description = &v
	return s
}

func (s *CreateApiGroupResponse) SetInstanceId(v string) *CreateApiGroupResponse {
	s.InstanceId = &v
	return s
}

func (s *CreateApiGroupResponse) SetInstanceType(v string) *CreateApiGroupResponse {
	s.InstanceType = &v
	return s
}

func (s *CreateApiGroupResponse) SetTagStatus(v bool) *CreateApiGroupResponse {
	s.TagStatus = &v
	return s
}

type CreateApiRequest struct {
	SecurityToken        *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId              *string `json:"GroupId,omitempty" xml:"GroupId,omitempty" require:"true"`
	ApiName              *string `json:"ApiName,omitempty" xml:"ApiName,omitempty" require:"true"`
	Visibility           *string `json:"Visibility,omitempty" xml:"Visibility,omitempty" require:"true"`
	Description          *string `json:"Description,omitempty" xml:"Description,omitempty"`
	AuthType             *string `json:"AuthType,omitempty" xml:"AuthType,omitempty"`
	RequestConfig        *string `json:"RequestConfig,omitempty" xml:"RequestConfig,omitempty" require:"true"`
	ServiceConfig        *string `json:"ServiceConfig,omitempty" xml:"ServiceConfig,omitempty" require:"true"`
	RequestParameters    *string `json:"RequestParameters,omitempty" xml:"RequestParameters,omitempty"`
	SystemParameters     *string `json:"SystemParameters,omitempty" xml:"SystemParameters,omitempty"`
	ConstantParameters   *string `json:"ConstantParameters,omitempty" xml:"ConstantParameters,omitempty"`
	ServiceParameters    *string `json:"ServiceParameters,omitempty" xml:"ServiceParameters,omitempty"`
	ServiceParametersMap *string `json:"ServiceParametersMap,omitempty" xml:"ServiceParametersMap,omitempty"`
	ResultType           *string `json:"ResultType,omitempty" xml:"ResultType,omitempty"`
	ResultSample         *string `json:"ResultSample,omitempty" xml:"ResultSample,omitempty"`
	FailResultSample     *string `json:"FailResultSample,omitempty" xml:"FailResultSample,omitempty"`
	ErrorCodeSamples     *string `json:"ErrorCodeSamples,omitempty" xml:"ErrorCodeSamples,omitempty"`
	ResultDescriptions   *string `json:"ResultDescriptions,omitempty" xml:"ResultDescriptions,omitempty"`
	OpenIdConnectConfig  *string `json:"OpenIdConnectConfig,omitempty" xml:"OpenIdConnectConfig,omitempty"`
	AllowSignatureMethod *string `json:"AllowSignatureMethod,omitempty" xml:"AllowSignatureMethod,omitempty"`
	WebSocketApiType     *string `json:"WebSocketApiType,omitempty" xml:"WebSocketApiType,omitempty"`
	ResultBodyModel      *string `json:"ResultBodyModel,omitempty" xml:"ResultBodyModel,omitempty"`
	ForceNonceCheck      *bool   `json:"ForceNonceCheck,omitempty" xml:"ForceNonceCheck,omitempty"`
	DisableInternet      *bool   `json:"DisableInternet,omitempty" xml:"DisableInternet,omitempty"`
	AppCodeAuthType      *string `json:"AppCodeAuthType,omitempty" xml:"AppCodeAuthType,omitempty"`
}

func (s CreateApiRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateApiRequest) GoString() string {
	return s.String()
}

func (s *CreateApiRequest) SetSecurityToken(v string) *CreateApiRequest {
	s.SecurityToken = &v
	return s
}

func (s *CreateApiRequest) SetGroupId(v string) *CreateApiRequest {
	s.GroupId = &v
	return s
}

func (s *CreateApiRequest) SetApiName(v string) *CreateApiRequest {
	s.ApiName = &v
	return s
}

func (s *CreateApiRequest) SetVisibility(v string) *CreateApiRequest {
	s.Visibility = &v
	return s
}

func (s *CreateApiRequest) SetDescription(v string) *CreateApiRequest {
	s.Description = &v
	return s
}

func (s *CreateApiRequest) SetAuthType(v string) *CreateApiRequest {
	s.AuthType = &v
	return s
}

func (s *CreateApiRequest) SetRequestConfig(v string) *CreateApiRequest {
	s.RequestConfig = &v
	return s
}

func (s *CreateApiRequest) SetServiceConfig(v string) *CreateApiRequest {
	s.ServiceConfig = &v
	return s
}

func (s *CreateApiRequest) SetRequestParameters(v string) *CreateApiRequest {
	s.RequestParameters = &v
	return s
}

func (s *CreateApiRequest) SetSystemParameters(v string) *CreateApiRequest {
	s.SystemParameters = &v
	return s
}

func (s *CreateApiRequest) SetConstantParameters(v string) *CreateApiRequest {
	s.ConstantParameters = &v
	return s
}

func (s *CreateApiRequest) SetServiceParameters(v string) *CreateApiRequest {
	s.ServiceParameters = &v
	return s
}

func (s *CreateApiRequest) SetServiceParametersMap(v string) *CreateApiRequest {
	s.ServiceParametersMap = &v
	return s
}

func (s *CreateApiRequest) SetResultType(v string) *CreateApiRequest {
	s.ResultType = &v
	return s
}

func (s *CreateApiRequest) SetResultSample(v string) *CreateApiRequest {
	s.ResultSample = &v
	return s
}

func (s *CreateApiRequest) SetFailResultSample(v string) *CreateApiRequest {
	s.FailResultSample = &v
	return s
}

func (s *CreateApiRequest) SetErrorCodeSamples(v string) *CreateApiRequest {
	s.ErrorCodeSamples = &v
	return s
}

func (s *CreateApiRequest) SetResultDescriptions(v string) *CreateApiRequest {
	s.ResultDescriptions = &v
	return s
}

func (s *CreateApiRequest) SetOpenIdConnectConfig(v string) *CreateApiRequest {
	s.OpenIdConnectConfig = &v
	return s
}

func (s *CreateApiRequest) SetAllowSignatureMethod(v string) *CreateApiRequest {
	s.AllowSignatureMethod = &v
	return s
}

func (s *CreateApiRequest) SetWebSocketApiType(v string) *CreateApiRequest {
	s.WebSocketApiType = &v
	return s
}

func (s *CreateApiRequest) SetResultBodyModel(v string) *CreateApiRequest {
	s.ResultBodyModel = &v
	return s
}

func (s *CreateApiRequest) SetForceNonceCheck(v bool) *CreateApiRequest {
	s.ForceNonceCheck = &v
	return s
}

func (s *CreateApiRequest) SetDisableInternet(v bool) *CreateApiRequest {
	s.DisableInternet = &v
	return s
}

func (s *CreateApiRequest) SetAppCodeAuthType(v string) *CreateApiRequest {
	s.AppCodeAuthType = &v
	return s
}

type CreateApiResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ApiId     *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
}

func (s CreateApiResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateApiResponse) GoString() string {
	return s.String()
}

func (s *CreateApiResponse) SetRequestId(v string) *CreateApiResponse {
	s.RequestId = &v
	return s
}

func (s *CreateApiResponse) SetApiId(v string) *CreateApiResponse {
	s.ApiId = &v
	return s
}

type AddTrafficSpecialControlRequest struct {
	SecurityToken    *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	TrafficControlId *string `json:"TrafficControlId,omitempty" xml:"TrafficControlId,omitempty" require:"true"`
	SpecialType      *string `json:"SpecialType,omitempty" xml:"SpecialType,omitempty" require:"true"`
	SpecialKey       *string `json:"SpecialKey,omitempty" xml:"SpecialKey,omitempty" require:"true"`
	TrafficValue     *int    `json:"TrafficValue,omitempty" xml:"TrafficValue,omitempty" require:"true"`
}

func (s AddTrafficSpecialControlRequest) String() string {
	return tea.Prettify(s)
}

func (s AddTrafficSpecialControlRequest) GoString() string {
	return s.String()
}

func (s *AddTrafficSpecialControlRequest) SetSecurityToken(v string) *AddTrafficSpecialControlRequest {
	s.SecurityToken = &v
	return s
}

func (s *AddTrafficSpecialControlRequest) SetTrafficControlId(v string) *AddTrafficSpecialControlRequest {
	s.TrafficControlId = &v
	return s
}

func (s *AddTrafficSpecialControlRequest) SetSpecialType(v string) *AddTrafficSpecialControlRequest {
	s.SpecialType = &v
	return s
}

func (s *AddTrafficSpecialControlRequest) SetSpecialKey(v string) *AddTrafficSpecialControlRequest {
	s.SpecialKey = &v
	return s
}

func (s *AddTrafficSpecialControlRequest) SetTrafficValue(v int) *AddTrafficSpecialControlRequest {
	s.TrafficValue = &v
	return s
}

type AddTrafficSpecialControlResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s AddTrafficSpecialControlResponse) String() string {
	return tea.Prettify(s)
}

func (s AddTrafficSpecialControlResponse) GoString() string {
	return s.String()
}

func (s *AddTrafficSpecialControlResponse) SetRequestId(v string) *AddTrafficSpecialControlResponse {
	s.RequestId = &v
	return s
}

type AbolishApiRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	GroupId       *string `json:"GroupId,omitempty" xml:"GroupId,omitempty"`
	ApiId         *string `json:"ApiId,omitempty" xml:"ApiId,omitempty" require:"true"`
	StageName     *string `json:"StageName,omitempty" xml:"StageName,omitempty" require:"true"`
}

func (s AbolishApiRequest) String() string {
	return tea.Prettify(s)
}

func (s AbolishApiRequest) GoString() string {
	return s.String()
}

func (s *AbolishApiRequest) SetSecurityToken(v string) *AbolishApiRequest {
	s.SecurityToken = &v
	return s
}

func (s *AbolishApiRequest) SetGroupId(v string) *AbolishApiRequest {
	s.GroupId = &v
	return s
}

func (s *AbolishApiRequest) SetApiId(v string) *AbolishApiRequest {
	s.ApiId = &v
	return s
}

func (s *AbolishApiRequest) SetStageName(v string) *AbolishApiRequest {
	s.StageName = &v
	return s
}

type AbolishApiResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s AbolishApiResponse) String() string {
	return tea.Prettify(s)
}

func (s AbolishApiResponse) GoString() string {
	return s.String()
}

func (s *AbolishApiResponse) SetRequestId(v string) *AbolishApiResponse {
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
		"cn-qingdao":            tea.String("apigateway.cn-qingdao.aliyuncs.com"),
		"cn-beijing":            tea.String("apigateway.cn-beijing.aliyuncs.com"),
		"cn-chengdu":            tea.String("apigateway.cn-chengdu.aliyuncs.com"),
		"cn-zhangjiakou":        tea.String("apigateway.cn-zhangjiakou.aliyuncs.com"),
		"cn-huhehaote":          tea.String("apigateway.cn-huhehaote.aliyuncs.com"),
		"cn-hangzhou":           tea.String("apigateway.cn-hangzhou.aliyuncs.com"),
		"cn-shanghai":           tea.String("apigateway.cn-shanghai.aliyuncs.com"),
		"cn-shenzhen":           tea.String("apigateway.cn-shenzhen.aliyuncs.com"),
		"cn-hongkong":           tea.String("apigateway.cn-hongkong.aliyuncs.com"),
		"ap-southeast-1":        tea.String("apigateway.ap-southeast-1.aliyuncs.com"),
		"ap-southeast-2":        tea.String("apigateway.ap-southeast-2.aliyuncs.com"),
		"ap-southeast-3":        tea.String("apigateway.ap-southeast-3.aliyuncs.com"),
		"ap-southeast-5":        tea.String("apigateway.ap-southeast-5.aliyuncs.com"),
		"ap-northeast-1":        tea.String("apigateway.ap-northeast-1.aliyuncs.com"),
		"eu-west-1":             tea.String("apigateway.eu-west-1.aliyuncs.com"),
		"us-west-1":             tea.String("apigateway.us-west-1.aliyuncs.com"),
		"us-east-1":             tea.String("apigateway.us-east-1.aliyuncs.com"),
		"eu-central-1":          tea.String("apigateway.eu-central-1.aliyuncs.com"),
		"me-east-1":             tea.String("apigateway.me-east-1.aliyuncs.com"),
		"ap-south-1":            tea.String("apigateway.ap-south-1.aliyuncs.com"),
		"cn-north-2-gov-1":      tea.String("apigateway.cn-north-2-gov-1.aliyuncs.com"),
		"cn-hangzhou-finance":   tea.String("apigateway.aliyuncs.com"),
		"cn-shenzhen-finance-1": tea.String("apigateway.aliyuncs.com"),
		"cn-shanghai-finance-1": tea.String("apigateway.aliyuncs.com"),
	}
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("cloudapi"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) DescribeSummaryDataWithOptions(request *DescribeSummaryDataRequest, runtime *util.RuntimeOptions) (_result *DescribeSummaryDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSummaryDataResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSummaryData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSummaryData(request *DescribeSummaryDataRequest) (_result *DescribeSummaryDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSummaryDataResponse{}
	_body, _err := client.DescribeSummaryDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyApiMarketAttributesWithOptions(request *ModifyApiMarketAttributesRequest, runtime *util.RuntimeOptions) (_result *ModifyApiMarketAttributesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyApiMarketAttributesResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyApiMarketAttributes"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyApiMarketAttributes(request *ModifyApiMarketAttributesRequest) (_result *ModifyApiMarketAttributesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyApiMarketAttributesResponse{}
	_body, _err := client.ModifyApiMarketAttributesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiMarketAttributesWithOptions(request *DescribeApiMarketAttributesRequest, runtime *util.RuntimeOptions) (_result *DescribeApiMarketAttributesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiMarketAttributesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiMarketAttributes"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiMarketAttributes(request *DescribeApiMarketAttributesRequest) (_result *DescribeApiMarketAttributesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiMarketAttributesResponse{}
	_body, _err := client.DescribeApiMarketAttributesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetWildcardDomainPatternsWithOptions(request *SetWildcardDomainPatternsRequest, runtime *util.RuntimeOptions) (_result *SetWildcardDomainPatternsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetWildcardDomainPatternsResponse{}
	_body, _err := client.DoRequest(tea.String("SetWildcardDomainPatterns"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetWildcardDomainPatterns(request *SetWildcardDomainPatternsRequest) (_result *SetWildcardDomainPatternsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetWildcardDomainPatternsResponse{}
	_body, _err := client.SetWildcardDomainPatternsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyApiGroupVpcWhitelistWithOptions(request *ModifyApiGroupVpcWhitelistRequest, runtime *util.RuntimeOptions) (_result *ModifyApiGroupVpcWhitelistResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyApiGroupVpcWhitelistResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyApiGroupVpcWhitelist"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyApiGroupVpcWhitelist(request *ModifyApiGroupVpcWhitelistRequest) (_result *ModifyApiGroupVpcWhitelistResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyApiGroupVpcWhitelistResponse{}
	_body, _err := client.ModifyApiGroupVpcWhitelistWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiGroupVpcWhitelistWithOptions(request *DescribeApiGroupVpcWhitelistRequest, runtime *util.RuntimeOptions) (_result *DescribeApiGroupVpcWhitelistResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiGroupVpcWhitelistResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiGroupVpcWhitelist"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiGroupVpcWhitelist(request *DescribeApiGroupVpcWhitelistRequest) (_result *DescribeApiGroupVpcWhitelistResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiGroupVpcWhitelistResponse{}
	_body, _err := client.DescribeApiGroupVpcWhitelistWithOptions(request, runtime)
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
	_body, _err := client.DoRequest(tea.String("DeleteInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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

func (client *Client) CreateInstanceWithOptions(request *CreateInstanceRequest, runtime *util.RuntimeOptions) (_result *CreateInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("CreateInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateInstance(request *CreateInstanceRequest) (_result *CreateInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateInstanceResponse{}
	_body, _err := client.CreateInstanceWithOptions(request, runtime)
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
	_body, _err := client.DoRequest(tea.String("UntagResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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

func (client *Client) ListTagResourcesWithOptions(request *ListTagResourcesRequest, runtime *util.RuntimeOptions) (_result *ListTagResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListTagResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("ListTagResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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

func (client *Client) TagResourcesWithOptions(request *TagResourcesRequest, runtime *util.RuntimeOptions) (_result *TagResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &TagResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("TagResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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

func (client *Client) DescribeZonesWithOptions(request *DescribeZonesRequest, runtime *util.RuntimeOptions) (_result *DescribeZonesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeZonesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeZones"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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

func (client *Client) ResetAppCodeWithOptions(request *ResetAppCodeRequest, runtime *util.RuntimeOptions) (_result *ResetAppCodeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ResetAppCodeResponse{}
	_body, _err := client.DoRequest(tea.String("ResetAppCode"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ResetAppCode(request *ResetAppCodeRequest) (_result *ResetAppCodeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ResetAppCodeResponse{}
	_body, _err := client.ResetAppCodeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAppWithOptions(request *DescribeAppRequest, runtime *util.RuntimeOptions) (_result *DescribeAppResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAppResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApp(request *DescribeAppRequest) (_result *DescribeAppResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAppResponse{}
	_body, _err := client.DescribeAppWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateModelWithOptions(request *CreateModelRequest, runtime *util.RuntimeOptions) (_result *CreateModelResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateModelResponse{}
	_body, _err := client.DoRequest(tea.String("CreateModel"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateModel(request *CreateModelRequest) (_result *CreateModelResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateModelResponse{}
	_body, _err := client.CreateModelWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteModelWithOptions(request *DeleteModelRequest, runtime *util.RuntimeOptions) (_result *DeleteModelResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteModelResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteModel"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteModel(request *DeleteModelRequest) (_result *DeleteModelResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteModelResponse{}
	_body, _err := client.DeleteModelWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeModelsWithOptions(request *DescribeModelsRequest, runtime *util.RuntimeOptions) (_result *DescribeModelsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeModelsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeModels"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeModels(request *DescribeModelsRequest) (_result *DescribeModelsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeModelsResponse{}
	_body, _err := client.DescribeModelsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyModelWithOptions(request *ModifyModelRequest, runtime *util.RuntimeOptions) (_result *ModifyModelResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyModelResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyModel"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyModel(request *ModifyModelRequest) (_result *ModifyModelResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyModelResponse{}
	_body, _err := client.ModifyModelWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateIntranetDomainWithOptions(request *CreateIntranetDomainRequest, runtime *util.RuntimeOptions) (_result *CreateIntranetDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateIntranetDomainResponse{}
	_body, _err := client.DoRequest(tea.String("CreateIntranetDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateIntranetDomain(request *CreateIntranetDomainRequest) (_result *CreateIntranetDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateIntranetDomainResponse{}
	_body, _err := client.CreateIntranetDomainWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ImportSwaggerWithOptions(request *ImportSwaggerRequest, runtime *util.RuntimeOptions) (_result *ImportSwaggerResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ImportSwaggerResponse{}
	_body, _err := client.DoRequest(tea.String("ImportSwagger"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ImportSwagger(request *ImportSwaggerRequest) (_result *ImportSwaggerResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ImportSwaggerResponse{}
	_body, _err := client.ImportSwaggerWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetIpControlApisWithOptions(request *SetIpControlApisRequest, runtime *util.RuntimeOptions) (_result *SetIpControlApisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetIpControlApisResponse{}
	_body, _err := client.DoRequest(tea.String("SetIpControlApis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetIpControlApis(request *SetIpControlApisRequest) (_result *SetIpControlApisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetIpControlApisResponse{}
	_body, _err := client.SetIpControlApisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RemoveIpControlPolicyItemWithOptions(request *RemoveIpControlPolicyItemRequest, runtime *util.RuntimeOptions) (_result *RemoveIpControlPolicyItemResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveIpControlPolicyItemResponse{}
	_body, _err := client.DoRequest(tea.String("RemoveIpControlPolicyItem"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveIpControlPolicyItem(request *RemoveIpControlPolicyItemRequest) (_result *RemoveIpControlPolicyItemResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RemoveIpControlPolicyItemResponse{}
	_body, _err := client.RemoveIpControlPolicyItemWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RemoveIpControlApisWithOptions(request *RemoveIpControlApisRequest, runtime *util.RuntimeOptions) (_result *RemoveIpControlApisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveIpControlApisResponse{}
	_body, _err := client.DoRequest(tea.String("RemoveIpControlApis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveIpControlApis(request *RemoveIpControlApisRequest) (_result *RemoveIpControlApisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RemoveIpControlApisResponse{}
	_body, _err := client.RemoveIpControlApisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyIpControlPolicyItemWithOptions(request *ModifyIpControlPolicyItemRequest, runtime *util.RuntimeOptions) (_result *ModifyIpControlPolicyItemResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyIpControlPolicyItemResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyIpControlPolicyItem"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyIpControlPolicyItem(request *ModifyIpControlPolicyItemRequest) (_result *ModifyIpControlPolicyItemResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyIpControlPolicyItemResponse{}
	_body, _err := client.ModifyIpControlPolicyItemWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyIpControlWithOptions(request *ModifyIpControlRequest, runtime *util.RuntimeOptions) (_result *ModifyIpControlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyIpControlResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyIpControl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyIpControl(request *ModifyIpControlRequest) (_result *ModifyIpControlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyIpControlResponse{}
	_body, _err := client.ModifyIpControlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeIpControlsWithOptions(request *DescribeIpControlsRequest, runtime *util.RuntimeOptions) (_result *DescribeIpControlsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeIpControlsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeIpControls"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeIpControls(request *DescribeIpControlsRequest) (_result *DescribeIpControlsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeIpControlsResponse{}
	_body, _err := client.DescribeIpControlsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeIpControlPolicyItemsWithOptions(request *DescribeIpControlPolicyItemsRequest, runtime *util.RuntimeOptions) (_result *DescribeIpControlPolicyItemsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeIpControlPolicyItemsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeIpControlPolicyItems"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeIpControlPolicyItems(request *DescribeIpControlPolicyItemsRequest) (_result *DescribeIpControlPolicyItemsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeIpControlPolicyItemsResponse{}
	_body, _err := client.DescribeIpControlPolicyItemsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApisByIpControlWithOptions(request *DescribeApisByIpControlRequest, runtime *util.RuntimeOptions) (_result *DescribeApisByIpControlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApisByIpControlResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApisByIpControl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApisByIpControl(request *DescribeApisByIpControlRequest) (_result *DescribeApisByIpControlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApisByIpControlResponse{}
	_body, _err := client.DescribeApisByIpControlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiIpControlsWithOptions(request *DescribeApiIpControlsRequest, runtime *util.RuntimeOptions) (_result *DescribeApiIpControlsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiIpControlsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiIpControls"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiIpControls(request *DescribeApiIpControlsRequest) (_result *DescribeApiIpControlsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiIpControlsResponse{}
	_body, _err := client.DescribeApiIpControlsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteIpControlWithOptions(request *DeleteIpControlRequest, runtime *util.RuntimeOptions) (_result *DeleteIpControlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteIpControlResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteIpControl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteIpControl(request *DeleteIpControlRequest) (_result *DeleteIpControlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteIpControlResponse{}
	_body, _err := client.DeleteIpControlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateIpControlWithOptions(request *CreateIpControlRequest, runtime *util.RuntimeOptions) (_result *CreateIpControlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateIpControlResponse{}
	_body, _err := client.DoRequest(tea.String("CreateIpControl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateIpControl(request *CreateIpControlRequest) (_result *CreateIpControlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateIpControlResponse{}
	_body, _err := client.CreateIpControlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddIpControlPolicyItemWithOptions(request *AddIpControlPolicyItemRequest, runtime *util.RuntimeOptions) (_result *AddIpControlPolicyItemResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddIpControlPolicyItemResponse{}
	_body, _err := client.DoRequest(tea.String("AddIpControlPolicyItem"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddIpControlPolicyItem(request *AddIpControlPolicyItemRequest) (_result *AddIpControlPolicyItemResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddIpControlPolicyItemResponse{}
	_body, _err := client.AddIpControlPolicyItemWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyLogConfigWithOptions(request *ModifyLogConfigRequest, runtime *util.RuntimeOptions) (_result *ModifyLogConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyLogConfigResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyLogConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyLogConfig(request *ModifyLogConfigRequest) (_result *ModifyLogConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyLogConfigResponse{}
	_body, _err := client.ModifyLogConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeLogConfigWithOptions(request *DescribeLogConfigRequest, runtime *util.RuntimeOptions) (_result *DescribeLogConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeLogConfigResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeLogConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeLogConfig(request *DescribeLogConfigRequest) (_result *DescribeLogConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeLogConfigResponse{}
	_body, _err := client.DescribeLogConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteLogConfigWithOptions(request *DeleteLogConfigRequest, runtime *util.RuntimeOptions) (_result *DeleteLogConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteLogConfigResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteLogConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteLogConfig(request *DeleteLogConfigRequest) (_result *DeleteLogConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteLogConfigResponse{}
	_body, _err := client.DeleteLogConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateLogConfigWithOptions(request *CreateLogConfigRequest, runtime *util.RuntimeOptions) (_result *CreateLogConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateLogConfigResponse{}
	_body, _err := client.DoRequest(tea.String("CreateLogConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateLogConfig(request *CreateLogConfigRequest) (_result *CreateLogConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateLogConfigResponse{}
	_body, _err := client.CreateLogConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetDomainWebSocketStatusWithOptions(request *SetDomainWebSocketStatusRequest, runtime *util.RuntimeOptions) (_result *SetDomainWebSocketStatusResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetDomainWebSocketStatusResponse{}
	_body, _err := client.DoRequest(tea.String("SetDomainWebSocketStatus"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetDomainWebSocketStatus(request *SetDomainWebSocketStatusRequest) (_result *SetDomainWebSocketStatusResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetDomainWebSocketStatusResponse{}
	_body, _err := client.SetDomainWebSocketStatusWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RemoveVpcAccessWithOptions(request *RemoveVpcAccessRequest, runtime *util.RuntimeOptions) (_result *RemoveVpcAccessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveVpcAccessResponse{}
	_body, _err := client.DoRequest(tea.String("RemoveVpcAccess"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveVpcAccess(request *RemoveVpcAccessRequest) (_result *RemoveVpcAccessResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RemoveVpcAccessResponse{}
	_body, _err := client.RemoveVpcAccessWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetVpcAccessWithOptions(request *SetVpcAccessRequest, runtime *util.RuntimeOptions) (_result *SetVpcAccessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetVpcAccessResponse{}
	_body, _err := client.DoRequest(tea.String("SetVpcAccess"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetVpcAccess(request *SetVpcAccessRequest) (_result *SetVpcAccessResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetVpcAccessResponse{}
	_body, _err := client.SetVpcAccessWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVpcAccessesWithOptions(request *DescribeVpcAccessesRequest, runtime *util.RuntimeOptions) (_result *DescribeVpcAccessesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVpcAccessesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVpcAccesses"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVpcAccesses(request *DescribeVpcAccessesRequest) (_result *DescribeVpcAccessesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVpcAccessesResponse{}
	_body, _err := client.DescribeVpcAccessesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ReactivateDomainWithOptions(request *ReactivateDomainRequest, runtime *util.RuntimeOptions) (_result *ReactivateDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ReactivateDomainResponse{}
	_body, _err := client.DoRequest(tea.String("ReactivateDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ReactivateDomain(request *ReactivateDomainRequest) (_result *ReactivateDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ReactivateDomainResponse{}
	_body, _err := client.ReactivateDomainWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiHistoriesWithOptions(request *DescribeApiHistoriesRequest, runtime *util.RuntimeOptions) (_result *DescribeApiHistoriesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiHistoriesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiHistories"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiHistories(request *DescribeApiHistoriesRequest) (_result *DescribeApiHistoriesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiHistoriesResponse{}
	_body, _err := client.DescribeApiHistoriesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SdkGenerateByGroupWithOptions(request *SdkGenerateByGroupRequest, runtime *util.RuntimeOptions) (_result *SdkGenerateByGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SdkGenerateByGroupResponse{}
	_body, _err := client.DoRequest(tea.String("SdkGenerateByGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SdkGenerateByGroup(request *SdkGenerateByGroupRequest) (_result *SdkGenerateByGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SdkGenerateByGroupResponse{}
	_body, _err := client.SdkGenerateByGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SdkGenerateByAppWithOptions(request *SdkGenerateByAppRequest, runtime *util.RuntimeOptions) (_result *SdkGenerateByAppResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SdkGenerateByAppResponse{}
	_body, _err := client.DoRequest(tea.String("SdkGenerateByApp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SdkGenerateByApp(request *SdkGenerateByAppRequest) (_result *SdkGenerateByAppResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SdkGenerateByAppResponse{}
	_body, _err := client.SdkGenerateByAppWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApisByAppWithOptions(request *DescribeApisByAppRequest, runtime *util.RuntimeOptions) (_result *DescribeApisByAppResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApisByAppResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApisByApp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApisByApp(request *DescribeApisByAppRequest) (_result *DescribeApisByAppResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApisByAppResponse{}
	_body, _err := client.DescribeApisByAppWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiStageWithOptions(request *DescribeApiStageRequest, runtime *util.RuntimeOptions) (_result *DescribeApiStageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiStageResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiStage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiStage(request *DescribeApiStageRequest) (_result *DescribeApiStageResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiStageResponse{}
	_body, _err := client.DescribeApiStageWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteApiStageVariableWithOptions(request *DeleteApiStageVariableRequest, runtime *util.RuntimeOptions) (_result *DeleteApiStageVariableResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteApiStageVariableResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteApiStageVariable"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteApiStageVariable(request *DeleteApiStageVariableRequest) (_result *DeleteApiStageVariableResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteApiStageVariableResponse{}
	_body, _err := client.DeleteApiStageVariableWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateApiStageVariableWithOptions(request *CreateApiStageVariableRequest, runtime *util.RuntimeOptions) (_result *CreateApiStageVariableResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateApiStageVariableResponse{}
	_body, _err := client.DoRequest(tea.String("CreateApiStageVariable"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateApiStageVariable(request *CreateApiStageVariableRequest) (_result *CreateApiStageVariableResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateApiStageVariableResponse{}
	_body, _err := client.CreateApiStageVariableWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SwitchApiWithOptions(request *SwitchApiRequest, runtime *util.RuntimeOptions) (_result *SwitchApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SwitchApiResponse{}
	_body, _err := client.DoRequest(tea.String("SwitchApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SwitchApi(request *SwitchApiRequest) (_result *SwitchApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SwitchApiResponse{}
	_body, _err := client.SwitchApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetTrafficControlApisWithOptions(request *SetTrafficControlApisRequest, runtime *util.RuntimeOptions) (_result *SetTrafficControlApisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetTrafficControlApisResponse{}
	_body, _err := client.DoRequest(tea.String("SetTrafficControlApis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetTrafficControlApis(request *SetTrafficControlApisRequest) (_result *SetTrafficControlApisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetTrafficControlApisResponse{}
	_body, _err := client.SetTrafficControlApisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetSignatureApisWithOptions(request *SetSignatureApisRequest, runtime *util.RuntimeOptions) (_result *SetSignatureApisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetSignatureApisResponse{}
	_body, _err := client.DoRequest(tea.String("SetSignatureApis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetSignatureApis(request *SetSignatureApisRequest) (_result *SetSignatureApisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetSignatureApisResponse{}
	_body, _err := client.SetSignatureApisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetDomainCertificateWithOptions(request *SetDomainCertificateRequest, runtime *util.RuntimeOptions) (_result *SetDomainCertificateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetDomainCertificateResponse{}
	_body, _err := client.DoRequest(tea.String("SetDomainCertificate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetDomainCertificate(request *SetDomainCertificateRequest) (_result *SetDomainCertificateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetDomainCertificateResponse{}
	_body, _err := client.SetDomainCertificateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetDomainWithOptions(request *SetDomainRequest, runtime *util.RuntimeOptions) (_result *SetDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetDomainResponse{}
	_body, _err := client.DoRequest(tea.String("SetDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetDomain(request *SetDomainRequest) (_result *SetDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetDomainResponse{}
	_body, _err := client.SetDomainWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetAppsAuthoritiesWithOptions(request *SetAppsAuthoritiesRequest, runtime *util.RuntimeOptions) (_result *SetAppsAuthoritiesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetAppsAuthoritiesResponse{}
	_body, _err := client.DoRequest(tea.String("SetAppsAuthorities"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetAppsAuthorities(request *SetAppsAuthoritiesRequest) (_result *SetAppsAuthoritiesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetAppsAuthoritiesResponse{}
	_body, _err := client.SetAppsAuthoritiesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetApisAuthoritiesWithOptions(request *SetApisAuthoritiesRequest, runtime *util.RuntimeOptions) (_result *SetApisAuthoritiesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetApisAuthoritiesResponse{}
	_body, _err := client.DoRequest(tea.String("SetApisAuthorities"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetApisAuthorities(request *SetApisAuthoritiesRequest) (_result *SetApisAuthoritiesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetApisAuthoritiesResponse{}
	_body, _err := client.SetApisAuthoritiesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ResetAppSecretWithOptions(request *ResetAppSecretRequest, runtime *util.RuntimeOptions) (_result *ResetAppSecretResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ResetAppSecretResponse{}
	_body, _err := client.DoRequest(tea.String("ResetAppSecret"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ResetAppSecret(request *ResetAppSecretRequest) (_result *ResetAppSecretResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ResetAppSecretResponse{}
	_body, _err := client.ResetAppSecretWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RemoveTrafficControlApisWithOptions(request *RemoveTrafficControlApisRequest, runtime *util.RuntimeOptions) (_result *RemoveTrafficControlApisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveTrafficControlApisResponse{}
	_body, _err := client.DoRequest(tea.String("RemoveTrafficControlApis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveTrafficControlApis(request *RemoveTrafficControlApisRequest) (_result *RemoveTrafficControlApisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RemoveTrafficControlApisResponse{}
	_body, _err := client.RemoveTrafficControlApisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RemoveSignatureApisWithOptions(request *RemoveSignatureApisRequest, runtime *util.RuntimeOptions) (_result *RemoveSignatureApisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveSignatureApisResponse{}
	_body, _err := client.DoRequest(tea.String("RemoveSignatureApis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveSignatureApis(request *RemoveSignatureApisRequest) (_result *RemoveSignatureApisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RemoveSignatureApisResponse{}
	_body, _err := client.RemoveSignatureApisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RemoveAppsAuthoritiesWithOptions(request *RemoveAppsAuthoritiesRequest, runtime *util.RuntimeOptions) (_result *RemoveAppsAuthoritiesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveAppsAuthoritiesResponse{}
	_body, _err := client.DoRequest(tea.String("RemoveAppsAuthorities"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveAppsAuthorities(request *RemoveAppsAuthoritiesRequest) (_result *RemoveAppsAuthoritiesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RemoveAppsAuthoritiesResponse{}
	_body, _err := client.RemoveAppsAuthoritiesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RemoveApisAuthoritiesWithOptions(request *RemoveApisAuthoritiesRequest, runtime *util.RuntimeOptions) (_result *RemoveApisAuthoritiesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveApisAuthoritiesResponse{}
	_body, _err := client.DoRequest(tea.String("RemoveApisAuthorities"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveApisAuthorities(request *RemoveApisAuthoritiesRequest) (_result *RemoveApisAuthoritiesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RemoveApisAuthoritiesResponse{}
	_body, _err := client.RemoveApisAuthoritiesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyTrafficControlWithOptions(request *ModifyTrafficControlRequest, runtime *util.RuntimeOptions) (_result *ModifyTrafficControlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyTrafficControlResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyTrafficControl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyTrafficControl(request *ModifyTrafficControlRequest) (_result *ModifyTrafficControlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyTrafficControlResponse{}
	_body, _err := client.ModifyTrafficControlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifySignatureWithOptions(request *ModifySignatureRequest, runtime *util.RuntimeOptions) (_result *ModifySignatureResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifySignatureResponse{}
	_body, _err := client.DoRequest(tea.String("ModifySignature"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifySignature(request *ModifySignatureRequest) (_result *ModifySignatureResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifySignatureResponse{}
	_body, _err := client.ModifySignatureWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyAppWithOptions(request *ModifyAppRequest, runtime *util.RuntimeOptions) (_result *ModifyAppResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyAppResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyApp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyApp(request *ModifyAppRequest) (_result *ModifyAppResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyAppResponse{}
	_body, _err := client.ModifyAppWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyApiGroupWithOptions(request *ModifyApiGroupRequest, runtime *util.RuntimeOptions) (_result *ModifyApiGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyApiGroupResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyApiGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyApiGroup(request *ModifyApiGroupRequest) (_result *ModifyApiGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyApiGroupResponse{}
	_body, _err := client.ModifyApiGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyApiWithOptions(request *ModifyApiRequest, runtime *util.RuntimeOptions) (_result *ModifyApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyApiResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyApi(request *ModifyApiRequest) (_result *ModifyApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyApiResponse{}
	_body, _err := client.ModifyApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeTrafficControlsByApiWithOptions(request *DescribeTrafficControlsByApiRequest, runtime *util.RuntimeOptions) (_result *DescribeTrafficControlsByApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeTrafficControlsByApiResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeTrafficControlsByApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeTrafficControlsByApi(request *DescribeTrafficControlsByApiRequest) (_result *DescribeTrafficControlsByApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeTrafficControlsByApiResponse{}
	_body, _err := client.DescribeTrafficControlsByApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeTrafficControlsWithOptions(request *DescribeTrafficControlsRequest, runtime *util.RuntimeOptions) (_result *DescribeTrafficControlsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeTrafficControlsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeTrafficControls"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeTrafficControls(request *DescribeTrafficControlsRequest) (_result *DescribeTrafficControlsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeTrafficControlsResponse{}
	_body, _err := client.DescribeTrafficControlsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSystemParametersWithOptions(request *DescribeSystemParametersRequest, runtime *util.RuntimeOptions) (_result *DescribeSystemParametersResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSystemParametersResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSystemParameters"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSystemParameters(request *DescribeSystemParametersRequest) (_result *DescribeSystemParametersResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSystemParametersResponse{}
	_body, _err := client.DescribeSystemParametersWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSignaturesByApiWithOptions(request *DescribeSignaturesByApiRequest, runtime *util.RuntimeOptions) (_result *DescribeSignaturesByApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSignaturesByApiResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSignaturesByApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSignaturesByApi(request *DescribeSignaturesByApiRequest) (_result *DescribeSignaturesByApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSignaturesByApiResponse{}
	_body, _err := client.DescribeSignaturesByApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSignaturesWithOptions(request *DescribeSignaturesRequest, runtime *util.RuntimeOptions) (_result *DescribeSignaturesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSignaturesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSignatures"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSignatures(request *DescribeSignaturesRequest) (_result *DescribeSignaturesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSignaturesResponse{}
	_body, _err := client.DescribeSignaturesWithOptions(request, runtime)
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
	_body, _err := client.DoRequest(tea.String("DescribeRegions"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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

func (client *Client) DescribePurchasedApisWithOptions(request *DescribePurchasedApisRequest, runtime *util.RuntimeOptions) (_result *DescribePurchasedApisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribePurchasedApisResponse{}
	_body, _err := client.DoRequest(tea.String("DescribePurchasedApis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribePurchasedApis(request *DescribePurchasedApisRequest) (_result *DescribePurchasedApisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribePurchasedApisResponse{}
	_body, _err := client.DescribePurchasedApisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribePurchasedApiGroupsWithOptions(request *DescribePurchasedApiGroupsRequest, runtime *util.RuntimeOptions) (_result *DescribePurchasedApiGroupsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribePurchasedApiGroupsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribePurchasedApiGroups"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribePurchasedApiGroups(request *DescribePurchasedApiGroupsRequest) (_result *DescribePurchasedApiGroupsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribePurchasedApiGroupsResponse{}
	_body, _err := client.DescribePurchasedApiGroupsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribePurchasedApiGroupWithOptions(request *DescribePurchasedApiGroupRequest, runtime *util.RuntimeOptions) (_result *DescribePurchasedApiGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribePurchasedApiGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DescribePurchasedApiGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribePurchasedApiGroup(request *DescribePurchasedApiGroupRequest) (_result *DescribePurchasedApiGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribePurchasedApiGroupResponse{}
	_body, _err := client.DescribePurchasedApiGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeHistoryApisWithOptions(request *DescribeHistoryApisRequest, runtime *util.RuntimeOptions) (_result *DescribeHistoryApisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeHistoryApisResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeHistoryApis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeHistoryApis(request *DescribeHistoryApisRequest) (_result *DescribeHistoryApisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeHistoryApisResponse{}
	_body, _err := client.DescribeHistoryApisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDomainsResolutionWithOptions(request *DescribeDomainsResolutionRequest, runtime *util.RuntimeOptions) (_result *DescribeDomainsResolutionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDomainsResolutionResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDomainsResolution"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDomainsResolution(request *DescribeDomainsResolutionRequest) (_result *DescribeDomainsResolutionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDomainsResolutionResponse{}
	_body, _err := client.DescribeDomainsResolutionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDomainWithOptions(request *DescribeDomainRequest, runtime *util.RuntimeOptions) (_result *DescribeDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDomainResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDomain(request *DescribeDomainRequest) (_result *DescribeDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDomainResponse{}
	_body, _err := client.DescribeDomainWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDeployedApisWithOptions(request *DescribeDeployedApisRequest, runtime *util.RuntimeOptions) (_result *DescribeDeployedApisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDeployedApisResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDeployedApis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDeployedApis(request *DescribeDeployedApisRequest) (_result *DescribeDeployedApisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDeployedApisResponse{}
	_body, _err := client.DescribeDeployedApisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDeployedApiWithOptions(request *DescribeDeployedApiRequest, runtime *util.RuntimeOptions) (_result *DescribeDeployedApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDeployedApiResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDeployedApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDeployedApi(request *DescribeDeployedApiRequest) (_result *DescribeDeployedApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDeployedApiResponse{}
	_body, _err := client.DescribeDeployedApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAuthorizedAppsWithOptions(request *DescribeAuthorizedAppsRequest, runtime *util.RuntimeOptions) (_result *DescribeAuthorizedAppsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAuthorizedAppsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAuthorizedApps"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAuthorizedApps(request *DescribeAuthorizedAppsRequest) (_result *DescribeAuthorizedAppsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAuthorizedAppsResponse{}
	_body, _err := client.DescribeAuthorizedAppsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAuthorizedApisWithOptions(request *DescribeAuthorizedApisRequest, runtime *util.RuntimeOptions) (_result *DescribeAuthorizedApisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAuthorizedApisResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAuthorizedApis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAuthorizedApis(request *DescribeAuthorizedApisRequest) (_result *DescribeAuthorizedApisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAuthorizedApisResponse{}
	_body, _err := client.DescribeAuthorizedApisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAppSecurityWithOptions(request *DescribeAppSecurityRequest, runtime *util.RuntimeOptions) (_result *DescribeAppSecurityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAppSecurityResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAppSecurity"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAppSecurity(request *DescribeAppSecurityRequest) (_result *DescribeAppSecurityResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAppSecurityResponse{}
	_body, _err := client.DescribeAppSecurityWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAppsWithOptions(request *DescribeAppsRequest, runtime *util.RuntimeOptions) (_result *DescribeAppsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAppsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApps"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApps(request *DescribeAppsRequest) (_result *DescribeAppsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAppsResponse{}
	_body, _err := client.DescribeAppsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAppAttributesWithOptions(request *DescribeAppAttributesRequest, runtime *util.RuntimeOptions) (_result *DescribeAppAttributesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAppAttributesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAppAttributes"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAppAttributes(request *DescribeAppAttributesRequest) (_result *DescribeAppAttributesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAppAttributesResponse{}
	_body, _err := client.DescribeAppAttributesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiTrafficDataWithOptions(request *DescribeApiTrafficDataRequest, runtime *util.RuntimeOptions) (_result *DescribeApiTrafficDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiTrafficDataResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiTrafficData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiTrafficData(request *DescribeApiTrafficDataRequest) (_result *DescribeApiTrafficDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiTrafficDataResponse{}
	_body, _err := client.DescribeApiTrafficDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiTrafficControlsWithOptions(request *DescribeApiTrafficControlsRequest, runtime *util.RuntimeOptions) (_result *DescribeApiTrafficControlsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiTrafficControlsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiTrafficControls"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiTrafficControls(request *DescribeApiTrafficControlsRequest) (_result *DescribeApiTrafficControlsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiTrafficControlsResponse{}
	_body, _err := client.DescribeApiTrafficControlsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiSignaturesWithOptions(request *DescribeApiSignaturesRequest, runtime *util.RuntimeOptions) (_result *DescribeApiSignaturesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiSignaturesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiSignatures"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiSignatures(request *DescribeApiSignaturesRequest) (_result *DescribeApiSignaturesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiSignaturesResponse{}
	_body, _err := client.DescribeApiSignaturesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApisByTrafficControlWithOptions(request *DescribeApisByTrafficControlRequest, runtime *util.RuntimeOptions) (_result *DescribeApisByTrafficControlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApisByTrafficControlResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApisByTrafficControl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApisByTrafficControl(request *DescribeApisByTrafficControlRequest) (_result *DescribeApisByTrafficControlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApisByTrafficControlResponse{}
	_body, _err := client.DescribeApisByTrafficControlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApisBySignatureWithOptions(request *DescribeApisBySignatureRequest, runtime *util.RuntimeOptions) (_result *DescribeApisBySignatureResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApisBySignatureResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApisBySignature"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApisBySignature(request *DescribeApisBySignatureRequest) (_result *DescribeApisBySignatureResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApisBySignatureResponse{}
	_body, _err := client.DescribeApisBySignatureWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApisWithOptions(request *DescribeApisRequest, runtime *util.RuntimeOptions) (_result *DescribeApisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApisResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApis(request *DescribeApisRequest) (_result *DescribeApisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApisResponse{}
	_body, _err := client.DescribeApisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiQpsDataWithOptions(request *DescribeApiQpsDataRequest, runtime *util.RuntimeOptions) (_result *DescribeApiQpsDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiQpsDataResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiQpsData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiQpsData(request *DescribeApiQpsDataRequest) (_result *DescribeApiQpsDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiQpsDataResponse{}
	_body, _err := client.DescribeApiQpsDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiLatencyDataWithOptions(request *DescribeApiLatencyDataRequest, runtime *util.RuntimeOptions) (_result *DescribeApiLatencyDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiLatencyDataResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiLatencyData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiLatencyData(request *DescribeApiLatencyDataRequest) (_result *DescribeApiLatencyDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiLatencyDataResponse{}
	_body, _err := client.DescribeApiLatencyDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiHistoryWithOptions(request *DescribeApiHistoryRequest, runtime *util.RuntimeOptions) (_result *DescribeApiHistoryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiHistoryResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiHistory"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiHistory(request *DescribeApiHistoryRequest) (_result *DescribeApiHistoryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiHistoryResponse{}
	_body, _err := client.DescribeApiHistoryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiGroupsWithOptions(request *DescribeApiGroupsRequest, runtime *util.RuntimeOptions) (_result *DescribeApiGroupsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiGroupsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiGroups"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiGroups(request *DescribeApiGroupsRequest) (_result *DescribeApiGroupsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiGroupsResponse{}
	_body, _err := client.DescribeApiGroupsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiGroupWithOptions(request *DescribeApiGroupRequest, runtime *util.RuntimeOptions) (_result *DescribeApiGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiGroup(request *DescribeApiGroupRequest) (_result *DescribeApiGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiGroupResponse{}
	_body, _err := client.DescribeApiGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiErrorDataWithOptions(request *DescribeApiErrorDataRequest, runtime *util.RuntimeOptions) (_result *DescribeApiErrorDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiErrorDataResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiErrorData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiErrorData(request *DescribeApiErrorDataRequest) (_result *DescribeApiErrorDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiErrorDataResponse{}
	_body, _err := client.DescribeApiErrorDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiDocWithOptions(request *DescribeApiDocRequest, runtime *util.RuntimeOptions) (_result *DescribeApiDocResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiDocResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApiDoc"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApiDoc(request *DescribeApiDocRequest) (_result *DescribeApiDocResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiDocResponse{}
	_body, _err := client.DescribeApiDocWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeApiWithOptions(request *DescribeApiRequest, runtime *util.RuntimeOptions) (_result *DescribeApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeApiResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeApi(request *DescribeApiRequest) (_result *DescribeApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeApiResponse{}
	_body, _err := client.DescribeApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeployApiWithOptions(request *DeployApiRequest, runtime *util.RuntimeOptions) (_result *DeployApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeployApiResponse{}
	_body, _err := client.DoRequest(tea.String("DeployApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeployApi(request *DeployApiRequest) (_result *DeployApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeployApiResponse{}
	_body, _err := client.DeployApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteTrafficSpecialControlWithOptions(request *DeleteTrafficSpecialControlRequest, runtime *util.RuntimeOptions) (_result *DeleteTrafficSpecialControlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteTrafficSpecialControlResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteTrafficSpecialControl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteTrafficSpecialControl(request *DeleteTrafficSpecialControlRequest) (_result *DeleteTrafficSpecialControlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteTrafficSpecialControlResponse{}
	_body, _err := client.DeleteTrafficSpecialControlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteTrafficControlWithOptions(request *DeleteTrafficControlRequest, runtime *util.RuntimeOptions) (_result *DeleteTrafficControlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteTrafficControlResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteTrafficControl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteTrafficControl(request *DeleteTrafficControlRequest) (_result *DeleteTrafficControlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteTrafficControlResponse{}
	_body, _err := client.DeleteTrafficControlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteSignatureWithOptions(request *DeleteSignatureRequest, runtime *util.RuntimeOptions) (_result *DeleteSignatureResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteSignatureResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteSignature"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteSignature(request *DeleteSignatureRequest) (_result *DeleteSignatureResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteSignatureResponse{}
	_body, _err := client.DeleteSignatureWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteDomainCertificateWithOptions(request *DeleteDomainCertificateRequest, runtime *util.RuntimeOptions) (_result *DeleteDomainCertificateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteDomainCertificateResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteDomainCertificate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteDomainCertificate(request *DeleteDomainCertificateRequest) (_result *DeleteDomainCertificateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteDomainCertificateResponse{}
	_body, _err := client.DeleteDomainCertificateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteDomainWithOptions(request *DeleteDomainRequest, runtime *util.RuntimeOptions) (_result *DeleteDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteDomainResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteDomain(request *DeleteDomainRequest) (_result *DeleteDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteDomainResponse{}
	_body, _err := client.DeleteDomainWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAppWithOptions(request *DeleteAppRequest, runtime *util.RuntimeOptions) (_result *DeleteAppResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAppResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteApp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteApp(request *DeleteAppRequest) (_result *DeleteAppResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAppResponse{}
	_body, _err := client.DeleteAppWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteApiGroupWithOptions(request *DeleteApiGroupRequest, runtime *util.RuntimeOptions) (_result *DeleteApiGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteApiGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteApiGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteApiGroup(request *DeleteApiGroupRequest) (_result *DeleteApiGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteApiGroupResponse{}
	_body, _err := client.DeleteApiGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteApiWithOptions(request *DeleteApiRequest, runtime *util.RuntimeOptions) (_result *DeleteApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteApiResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteApi(request *DeleteApiRequest) (_result *DeleteApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteApiResponse{}
	_body, _err := client.DeleteApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAllTrafficSpecialControlWithOptions(request *DeleteAllTrafficSpecialControlRequest, runtime *util.RuntimeOptions) (_result *DeleteAllTrafficSpecialControlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAllTrafficSpecialControlResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteAllTrafficSpecialControl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteAllTrafficSpecialControl(request *DeleteAllTrafficSpecialControlRequest) (_result *DeleteAllTrafficSpecialControlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAllTrafficSpecialControlResponse{}
	_body, _err := client.DeleteAllTrafficSpecialControlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateTrafficControlWithOptions(request *CreateTrafficControlRequest, runtime *util.RuntimeOptions) (_result *CreateTrafficControlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateTrafficControlResponse{}
	_body, _err := client.DoRequest(tea.String("CreateTrafficControl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateTrafficControl(request *CreateTrafficControlRequest) (_result *CreateTrafficControlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateTrafficControlResponse{}
	_body, _err := client.CreateTrafficControlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateSignatureWithOptions(request *CreateSignatureRequest, runtime *util.RuntimeOptions) (_result *CreateSignatureResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateSignatureResponse{}
	_body, _err := client.DoRequest(tea.String("CreateSignature"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateSignature(request *CreateSignatureRequest) (_result *CreateSignatureResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateSignatureResponse{}
	_body, _err := client.CreateSignatureWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateAppWithOptions(request *CreateAppRequest, runtime *util.RuntimeOptions) (_result *CreateAppResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateAppResponse{}
	_body, _err := client.DoRequest(tea.String("CreateApp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateApp(request *CreateAppRequest) (_result *CreateAppResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateAppResponse{}
	_body, _err := client.CreateAppWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateApiGroupWithOptions(request *CreateApiGroupRequest, runtime *util.RuntimeOptions) (_result *CreateApiGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateApiGroupResponse{}
	_body, _err := client.DoRequest(tea.String("CreateApiGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateApiGroup(request *CreateApiGroupRequest) (_result *CreateApiGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateApiGroupResponse{}
	_body, _err := client.CreateApiGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateApiWithOptions(request *CreateApiRequest, runtime *util.RuntimeOptions) (_result *CreateApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateApiResponse{}
	_body, _err := client.DoRequest(tea.String("CreateApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateApi(request *CreateApiRequest) (_result *CreateApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateApiResponse{}
	_body, _err := client.CreateApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddTrafficSpecialControlWithOptions(request *AddTrafficSpecialControlRequest, runtime *util.RuntimeOptions) (_result *AddTrafficSpecialControlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddTrafficSpecialControlResponse{}
	_body, _err := client.DoRequest(tea.String("AddTrafficSpecialControl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddTrafficSpecialControl(request *AddTrafficSpecialControlRequest) (_result *AddTrafficSpecialControlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddTrafficSpecialControlResponse{}
	_body, _err := client.AddTrafficSpecialControlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AbolishApiWithOptions(request *AbolishApiRequest, runtime *util.RuntimeOptions) (_result *AbolishApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AbolishApiResponse{}
	_body, _err := client.DoRequest(tea.String("AbolishApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2016-07-14"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AbolishApi(request *AbolishApiRequest) (_result *AbolishApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AbolishApiResponse{}
	_body, _err := client.AbolishApiWithOptions(request, runtime)
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
