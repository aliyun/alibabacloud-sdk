// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type DescribeRegionsRequest struct {
	RegionId *string `json:"RegionId,omitempty" xml:"RegionId,omitempty"`
}

func (s DescribeRegionsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsRequest) GoString() string {
	return s.String()
}

func (s *DescribeRegionsRequest) SetRegionId(v string) *DescribeRegionsRequest {
	s.RegionId = &v
	return s
}

type DescribeRegionsResponse struct {
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Regions   []*DescribeRegionsResponseRegions `json:"Regions,omitempty" xml:"Regions,omitempty" require:"true" type:"Repeated"`
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

func (s *DescribeRegionsResponse) SetRegions(v []*DescribeRegionsResponseRegions) *DescribeRegionsResponse {
	s.Regions = v
	return s
}

type DescribeRegionsResponseRegions struct {
	RegionId       *string   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	RegionEndpoint *string   `json:"RegionEndpoint,omitempty" xml:"RegionEndpoint,omitempty" require:"true"`
	Zones          []*string `json:"Zones,omitempty" xml:"Zones,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeRegionsResponseRegions) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsResponseRegions) GoString() string {
	return s.String()
}

func (s *DescribeRegionsResponseRegions) SetRegionId(v string) *DescribeRegionsResponseRegions {
	s.RegionId = &v
	return s
}

func (s *DescribeRegionsResponseRegions) SetRegionEndpoint(v string) *DescribeRegionsResponseRegions {
	s.RegionEndpoint = &v
	return s
}

func (s *DescribeRegionsResponseRegions) SetZones(v []*string) *DescribeRegionsResponseRegions {
	s.Zones = v
	return s
}

type DescribeImageCachesRequest struct {
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ImageCacheId   *string `json:"ImageCacheId,omitempty" xml:"ImageCacheId,omitempty"`
	ImageCacheName *string `json:"ImageCacheName,omitempty" xml:"ImageCacheName,omitempty"`
	SnapshotId     *string `json:"SnapshotId,omitempty" xml:"SnapshotId,omitempty"`
	Image          *string `json:"Image,omitempty" xml:"Image,omitempty"`
}

func (s DescribeImageCachesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeImageCachesRequest) GoString() string {
	return s.String()
}

func (s *DescribeImageCachesRequest) SetRegionId(v string) *DescribeImageCachesRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeImageCachesRequest) SetImageCacheId(v string) *DescribeImageCachesRequest {
	s.ImageCacheId = &v
	return s
}

func (s *DescribeImageCachesRequest) SetImageCacheName(v string) *DescribeImageCachesRequest {
	s.ImageCacheName = &v
	return s
}

func (s *DescribeImageCachesRequest) SetSnapshotId(v string) *DescribeImageCachesRequest {
	s.SnapshotId = &v
	return s
}

func (s *DescribeImageCachesRequest) SetImage(v string) *DescribeImageCachesRequest {
	s.Image = &v
	return s
}

type DescribeImageCachesResponse struct {
	RequestId   *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ImageCaches []*DescribeImageCachesResponseImageCaches `json:"ImageCaches,omitempty" xml:"ImageCaches,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeImageCachesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeImageCachesResponse) GoString() string {
	return s.String()
}

func (s *DescribeImageCachesResponse) SetRequestId(v string) *DescribeImageCachesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeImageCachesResponse) SetImageCaches(v []*DescribeImageCachesResponseImageCaches) *DescribeImageCachesResponse {
	s.ImageCaches = v
	return s
}

type DescribeImageCachesResponseImageCaches struct {
	ContainerGroupId *string                                         `json:"ContainerGroupId,omitempty" xml:"ContainerGroupId,omitempty" require:"true"`
	ImageCacheId     *string                                         `json:"ImageCacheId,omitempty" xml:"ImageCacheId,omitempty" require:"true"`
	ImageCacheName   *string                                         `json:"ImageCacheName,omitempty" xml:"ImageCacheName,omitempty" require:"true"`
	SnapshotId       *string                                         `json:"SnapshotId,omitempty" xml:"SnapshotId,omitempty" require:"true"`
	Progress         *string                                         `json:"Progress,omitempty" xml:"Progress,omitempty" require:"true"`
	Status           *string                                         `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	ExpireDateTime   *string                                         `json:"ExpireDateTime,omitempty" xml:"ExpireDateTime,omitempty" require:"true"`
	CreationTime     *string                                         `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	RegionId         *string                                         `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Events           []*DescribeImageCachesResponseImageCachesEvents `json:"Events,omitempty" xml:"Events,omitempty" require:"true" type:"Repeated"`
	Images           []*string                                       `json:"Images,omitempty" xml:"Images,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeImageCachesResponseImageCaches) String() string {
	return tea.Prettify(s)
}

func (s DescribeImageCachesResponseImageCaches) GoString() string {
	return s.String()
}

func (s *DescribeImageCachesResponseImageCaches) SetContainerGroupId(v string) *DescribeImageCachesResponseImageCaches {
	s.ContainerGroupId = &v
	return s
}

func (s *DescribeImageCachesResponseImageCaches) SetImageCacheId(v string) *DescribeImageCachesResponseImageCaches {
	s.ImageCacheId = &v
	return s
}

func (s *DescribeImageCachesResponseImageCaches) SetImageCacheName(v string) *DescribeImageCachesResponseImageCaches {
	s.ImageCacheName = &v
	return s
}

func (s *DescribeImageCachesResponseImageCaches) SetSnapshotId(v string) *DescribeImageCachesResponseImageCaches {
	s.SnapshotId = &v
	return s
}

func (s *DescribeImageCachesResponseImageCaches) SetProgress(v string) *DescribeImageCachesResponseImageCaches {
	s.Progress = &v
	return s
}

func (s *DescribeImageCachesResponseImageCaches) SetStatus(v string) *DescribeImageCachesResponseImageCaches {
	s.Status = &v
	return s
}

func (s *DescribeImageCachesResponseImageCaches) SetExpireDateTime(v string) *DescribeImageCachesResponseImageCaches {
	s.ExpireDateTime = &v
	return s
}

func (s *DescribeImageCachesResponseImageCaches) SetCreationTime(v string) *DescribeImageCachesResponseImageCaches {
	s.CreationTime = &v
	return s
}

func (s *DescribeImageCachesResponseImageCaches) SetRegionId(v string) *DescribeImageCachesResponseImageCaches {
	s.RegionId = &v
	return s
}

func (s *DescribeImageCachesResponseImageCaches) SetEvents(v []*DescribeImageCachesResponseImageCachesEvents) *DescribeImageCachesResponseImageCaches {
	s.Events = v
	return s
}

func (s *DescribeImageCachesResponseImageCaches) SetImages(v []*string) *DescribeImageCachesResponseImageCaches {
	s.Images = v
	return s
}

type DescribeImageCachesResponseImageCachesEvents struct {
	Count          *int    `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
	Type           *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Name           *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Message        *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	FirstTimestamp *string `json:"FirstTimestamp,omitempty" xml:"FirstTimestamp,omitempty" require:"true"`
	LastTimestamp  *string `json:"LastTimestamp,omitempty" xml:"LastTimestamp,omitempty" require:"true"`
}

func (s DescribeImageCachesResponseImageCachesEvents) String() string {
	return tea.Prettify(s)
}

func (s DescribeImageCachesResponseImageCachesEvents) GoString() string {
	return s.String()
}

func (s *DescribeImageCachesResponseImageCachesEvents) SetCount(v int) *DescribeImageCachesResponseImageCachesEvents {
	s.Count = &v
	return s
}

func (s *DescribeImageCachesResponseImageCachesEvents) SetType(v string) *DescribeImageCachesResponseImageCachesEvents {
	s.Type = &v
	return s
}

func (s *DescribeImageCachesResponseImageCachesEvents) SetName(v string) *DescribeImageCachesResponseImageCachesEvents {
	s.Name = &v
	return s
}

func (s *DescribeImageCachesResponseImageCachesEvents) SetMessage(v string) *DescribeImageCachesResponseImageCachesEvents {
	s.Message = &v
	return s
}

func (s *DescribeImageCachesResponseImageCachesEvents) SetFirstTimestamp(v string) *DescribeImageCachesResponseImageCachesEvents {
	s.FirstTimestamp = &v
	return s
}

func (s *DescribeImageCachesResponseImageCachesEvents) SetLastTimestamp(v string) *DescribeImageCachesResponseImageCachesEvents {
	s.LastTimestamp = &v
	return s
}

type DeleteImageCacheRequest struct {
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ImageCacheId *string `json:"ImageCacheId,omitempty" xml:"ImageCacheId,omitempty" require:"true"`
	ClientToken  *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
}

func (s DeleteImageCacheRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteImageCacheRequest) GoString() string {
	return s.String()
}

func (s *DeleteImageCacheRequest) SetRegionId(v string) *DeleteImageCacheRequest {
	s.RegionId = &v
	return s
}

func (s *DeleteImageCacheRequest) SetImageCacheId(v string) *DeleteImageCacheRequest {
	s.ImageCacheId = &v
	return s
}

func (s *DeleteImageCacheRequest) SetClientToken(v string) *DeleteImageCacheRequest {
	s.ClientToken = &v
	return s
}

type DeleteImageCacheResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteImageCacheResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteImageCacheResponse) GoString() string {
	return s.String()
}

func (s *DeleteImageCacheResponse) SetRequestId(v string) *DeleteImageCacheResponse {
	s.RequestId = &v
	return s
}

type CreateImageCacheRequest struct {
	RegionId                *string                                           `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ZoneId                  *string                                           `json:"ZoneId,omitempty" xml:"ZoneId,omitempty"`
	SecurityGroupId         *string                                           `json:"SecurityGroupId,omitempty" xml:"SecurityGroupId,omitempty" require:"true"`
	VSwitchId               *string                                           `json:"VSwitchId,omitempty" xml:"VSwitchId,omitempty" require:"true"`
	ImageCacheName          *string                                           `json:"ImageCacheName,omitempty" xml:"ImageCacheName,omitempty" require:"true"`
	ImageRegistryCredential []*CreateImageCacheRequestImageRegistryCredential `json:"ImageRegistryCredential,omitempty" xml:"ImageRegistryCredential,omitempty" type:"Repeated"`
	EipInstanceId           *string                                           `json:"EipInstanceId,omitempty" xml:"EipInstanceId,omitempty"`
	ResourceGroupId         *string                                           `json:"ResourceGroupId,omitempty" xml:"ResourceGroupId,omitempty"`
	ClientToken             *string                                           `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	Image                   []*string                                         `json:"Image,omitempty" xml:"Image,omitempty" require:"true" type:"Repeated"`
	ImageCacheSize          *int                                              `json:"ImageCacheSize,omitempty" xml:"ImageCacheSize,omitempty"`
	RetentionDays           *int                                              `json:"RetentionDays,omitempty" xml:"RetentionDays,omitempty"`
}

func (s CreateImageCacheRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateImageCacheRequest) GoString() string {
	return s.String()
}

func (s *CreateImageCacheRequest) SetRegionId(v string) *CreateImageCacheRequest {
	s.RegionId = &v
	return s
}

func (s *CreateImageCacheRequest) SetZoneId(v string) *CreateImageCacheRequest {
	s.ZoneId = &v
	return s
}

func (s *CreateImageCacheRequest) SetSecurityGroupId(v string) *CreateImageCacheRequest {
	s.SecurityGroupId = &v
	return s
}

func (s *CreateImageCacheRequest) SetVSwitchId(v string) *CreateImageCacheRequest {
	s.VSwitchId = &v
	return s
}

func (s *CreateImageCacheRequest) SetImageCacheName(v string) *CreateImageCacheRequest {
	s.ImageCacheName = &v
	return s
}

func (s *CreateImageCacheRequest) SetImageRegistryCredential(v []*CreateImageCacheRequestImageRegistryCredential) *CreateImageCacheRequest {
	s.ImageRegistryCredential = v
	return s
}

func (s *CreateImageCacheRequest) SetEipInstanceId(v string) *CreateImageCacheRequest {
	s.EipInstanceId = &v
	return s
}

func (s *CreateImageCacheRequest) SetResourceGroupId(v string) *CreateImageCacheRequest {
	s.ResourceGroupId = &v
	return s
}

func (s *CreateImageCacheRequest) SetClientToken(v string) *CreateImageCacheRequest {
	s.ClientToken = &v
	return s
}

func (s *CreateImageCacheRequest) SetImage(v []*string) *CreateImageCacheRequest {
	s.Image = v
	return s
}

func (s *CreateImageCacheRequest) SetImageCacheSize(v int) *CreateImageCacheRequest {
	s.ImageCacheSize = &v
	return s
}

func (s *CreateImageCacheRequest) SetRetentionDays(v int) *CreateImageCacheRequest {
	s.RetentionDays = &v
	return s
}

type CreateImageCacheRequestImageRegistryCredential struct {
	Server   *string `json:"Server,omitempty" xml:"Server,omitempty" require:"true"`
	UserName *string `json:"UserName,omitempty" xml:"UserName,omitempty" require:"true"`
	Password *string `json:"Password,omitempty" xml:"Password,omitempty" require:"true"`
}

func (s CreateImageCacheRequestImageRegistryCredential) String() string {
	return tea.Prettify(s)
}

func (s CreateImageCacheRequestImageRegistryCredential) GoString() string {
	return s.String()
}

func (s *CreateImageCacheRequestImageRegistryCredential) SetServer(v string) *CreateImageCacheRequestImageRegistryCredential {
	s.Server = &v
	return s
}

func (s *CreateImageCacheRequestImageRegistryCredential) SetUserName(v string) *CreateImageCacheRequestImageRegistryCredential {
	s.UserName = &v
	return s
}

func (s *CreateImageCacheRequestImageRegistryCredential) SetPassword(v string) *CreateImageCacheRequestImageRegistryCredential {
	s.Password = &v
	return s
}

type CreateImageCacheResponse struct {
	RequestId        *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ImageCacheId     *string `json:"ImageCacheId,omitempty" xml:"ImageCacheId,omitempty" require:"true"`
	ContainerGroupId *string `json:"ContainerGroupId,omitempty" xml:"ContainerGroupId,omitempty" require:"true"`
}

func (s CreateImageCacheResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateImageCacheResponse) GoString() string {
	return s.String()
}

func (s *CreateImageCacheResponse) SetRequestId(v string) *CreateImageCacheResponse {
	s.RequestId = &v
	return s
}

func (s *CreateImageCacheResponse) SetImageCacheId(v string) *CreateImageCacheResponse {
	s.ImageCacheId = &v
	return s
}

func (s *CreateImageCacheResponse) SetContainerGroupId(v string) *CreateImageCacheResponse {
	s.ContainerGroupId = &v
	return s
}

type DescribeMultiContainerGroupMetricRequest struct {
	RegionId          *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ContainerGroupIds *string `json:"ContainerGroupIds,omitempty" xml:"ContainerGroupIds,omitempty" require:"true"`
	ResourceGroupId   *string `json:"ResourceGroupId,omitempty" xml:"ResourceGroupId,omitempty"`
	MetricType        *string `json:"MetricType,omitempty" xml:"MetricType,omitempty"`
}

func (s DescribeMultiContainerGroupMetricRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricRequest) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricRequest) SetRegionId(v string) *DescribeMultiContainerGroupMetricRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricRequest) SetContainerGroupIds(v string) *DescribeMultiContainerGroupMetricRequest {
	s.ContainerGroupIds = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricRequest) SetResourceGroupId(v string) *DescribeMultiContainerGroupMetricRequest {
	s.ResourceGroupId = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricRequest) SetMetricType(v string) *DescribeMultiContainerGroupMetricRequest {
	s.MetricType = &v
	return s
}

type DescribeMultiContainerGroupMetricResponse struct {
	RequestId    *string                                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MonitorDatas []*DescribeMultiContainerGroupMetricResponseMonitorDatas `json:"MonitorDatas,omitempty" xml:"MonitorDatas,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeMultiContainerGroupMetricResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponse) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponse) SetRequestId(v string) *DescribeMultiContainerGroupMetricResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponse) SetMonitorDatas(v []*DescribeMultiContainerGroupMetricResponseMonitorDatas) *DescribeMultiContainerGroupMetricResponse {
	s.MonitorDatas = v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatas struct {
	ContainerGroupId *string                                                                `json:"ContainerGroupId,omitempty" xml:"ContainerGroupId,omitempty" require:"true"`
	Records          []*DescribeMultiContainerGroupMetricResponseMonitorDatasRecords        `json:"Records,omitempty" xml:"Records,omitempty" require:"true" type:"Repeated"`
	ContainerInfos   []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos `json:"ContainerInfos,omitempty" xml:"ContainerInfos,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatas) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatas) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatas) SetContainerGroupId(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatas {
	s.ContainerGroupId = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatas) SetRecords(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasRecords) *DescribeMultiContainerGroupMetricResponseMonitorDatas {
	s.Records = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatas) SetContainerInfos(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos) *DescribeMultiContainerGroupMetricResponseMonitorDatas {
	s.ContainerInfos = v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasRecords struct {
	Timestamp  *string                                                                   `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Containers []*DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers `json:"Containers,omitempty" xml:"Containers,omitempty" require:"true" type:"Repeated"`
	CPU        *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU          `json:"CPU,omitempty" xml:"CPU,omitempty" require:"true" type:"Struct"`
	Memory     *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory       `json:"Memory,omitempty" xml:"Memory,omitempty" require:"true" type:"Struct"`
	Network    *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetwork      `json:"Network,omitempty" xml:"Network,omitempty" require:"true" type:"Struct"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecords) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecords) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecords) SetTimestamp(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecords {
	s.Timestamp = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecords) SetContainers(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecords {
	s.Containers = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecords) SetCPU(v *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecords {
	s.CPU = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecords) SetMemory(v *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecords {
	s.Memory = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecords) SetNetwork(v *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetwork) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecords {
	s.Network = v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers struct {
	Name   *string                                                                       `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	CPU    *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU    `json:"CPU,omitempty" xml:"CPU,omitempty" require:"true" type:"Struct"`
	Memory *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory `json:"Memory,omitempty" xml:"Memory,omitempty" require:"true" type:"Struct"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers) SetName(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers {
	s.Name = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers) SetCPU(v *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers {
	s.CPU = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers) SetMemory(v *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers {
	s.Memory = v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU struct {
	Limit                *int64 `json:"Limit,omitempty" xml:"Limit,omitempty" require:"true"`
	Load                 *int64 `json:"Load,omitempty" xml:"Load,omitempty" require:"true"`
	UsageCoreNanoSeconds *int64 `json:"UsageCoreNanoSeconds,omitempty" xml:"UsageCoreNanoSeconds,omitempty" require:"true"`
	UsageNanoCores       *int64 `json:"UsageNanoCores,omitempty" xml:"UsageNanoCores,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU) SetLimit(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU {
	s.Limit = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU) SetLoad(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU {
	s.Load = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU) SetUsageCoreNanoSeconds(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU {
	s.UsageCoreNanoSeconds = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU) SetUsageNanoCores(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU {
	s.UsageNanoCores = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory struct {
	AvailableBytes *int64 `json:"AvailableBytes,omitempty" xml:"AvailableBytes,omitempty" require:"true"`
	UsageBytes     *int64 `json:"UsageBytes,omitempty" xml:"UsageBytes,omitempty" require:"true"`
	Cache          *int64 `json:"Cache,omitempty" xml:"Cache,omitempty" require:"true"`
	WorkingSet     *int64 `json:"WorkingSet,omitempty" xml:"WorkingSet,omitempty" require:"true"`
	Rss            *int64 `json:"Rss,omitempty" xml:"Rss,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory) SetAvailableBytes(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory {
	s.AvailableBytes = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory) SetUsageBytes(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory {
	s.UsageBytes = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory) SetCache(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory {
	s.Cache = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory) SetWorkingSet(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory {
	s.WorkingSet = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory) SetRss(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory {
	s.Rss = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU struct {
	Limit                *int64 `json:"Limit,omitempty" xml:"Limit,omitempty" require:"true"`
	Load                 *int64 `json:"Load,omitempty" xml:"Load,omitempty" require:"true"`
	UsageCoreNanoSeconds *int64 `json:"UsageCoreNanoSeconds,omitempty" xml:"UsageCoreNanoSeconds,omitempty" require:"true"`
	UsageNanoCores       *int64 `json:"UsageNanoCores,omitempty" xml:"UsageNanoCores,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU) SetLimit(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU {
	s.Limit = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU) SetLoad(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU {
	s.Load = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU) SetUsageCoreNanoSeconds(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU {
	s.UsageCoreNanoSeconds = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU) SetUsageNanoCores(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU {
	s.UsageNanoCores = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory struct {
	AvailableBytes *int64 `json:"AvailableBytes,omitempty" xml:"AvailableBytes,omitempty" require:"true"`
	UsageBytes     *int64 `json:"UsageBytes,omitempty" xml:"UsageBytes,omitempty" require:"true"`
	Cache          *int64 `json:"Cache,omitempty" xml:"Cache,omitempty" require:"true"`
	WorkingSet     *int64 `json:"WorkingSet,omitempty" xml:"WorkingSet,omitempty" require:"true"`
	Rss            *int64 `json:"Rss,omitempty" xml:"Rss,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory) SetAvailableBytes(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory {
	s.AvailableBytes = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory) SetUsageBytes(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory {
	s.UsageBytes = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory) SetCache(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory {
	s.Cache = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory) SetWorkingSet(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory {
	s.WorkingSet = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory) SetRss(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory {
	s.Rss = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetwork struct {
	Interfaces []*DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces `json:"Interfaces,omitempty" xml:"Interfaces,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetwork) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetwork) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetwork) SetInterfaces(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetwork {
	s.Interfaces = v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces struct {
	TxBytes  *int64  `json:"TxBytes,omitempty" xml:"TxBytes,omitempty" require:"true"`
	RxBytes  *int64  `json:"RxBytes,omitempty" xml:"RxBytes,omitempty" require:"true"`
	TxErrors *int64  `json:"TxErrors,omitempty" xml:"TxErrors,omitempty" require:"true"`
	RxErrors *int64  `json:"RxErrors,omitempty" xml:"RxErrors,omitempty" require:"true"`
	Name     *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces) SetTxBytes(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces {
	s.TxBytes = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces) SetRxBytes(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces {
	s.RxBytes = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces) SetTxErrors(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces {
	s.TxErrors = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces) SetRxErrors(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces {
	s.RxErrors = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces) SetName(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces {
	s.Name = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos struct {
	Id             *string                                                                              `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Name           *string                                                                              `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Namespace      *string                                                                              `json:"Namespace,omitempty" xml:"Namespace,omitempty" require:"true"`
	Labels         *string                                                                              `json:"Labels,omitempty" xml:"Labels,omitempty" require:"true"`
	ContainerStats []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats `json:"ContainerStats,omitempty" xml:"ContainerStats,omitempty" require:"true" type:"Repeated"`
	ContainerSpec  *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec    `json:"ContainerSpec,omitempty" xml:"ContainerSpec,omitempty" require:"true" type:"Struct"`
	Aliases        []*string                                                                            `json:"Aliases,omitempty" xml:"Aliases,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos) SetId(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos {
	s.Id = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos) SetName(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos {
	s.Name = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos) SetNamespace(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos {
	s.Namespace = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos) SetLabels(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos {
	s.Labels = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos) SetContainerStats(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos {
	s.ContainerStats = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos) SetContainerSpec(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos {
	s.ContainerSpec = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos) SetAliases(v []*string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos {
	s.Aliases = v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats struct {
	Timestamp        *string                                                                                              `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	FsStats          []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats          `json:"FsStats,omitempty" xml:"FsStats,omitempty" require:"true" type:"Repeated"`
	AcceleratorStats []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats `json:"AcceleratorStats,omitempty" xml:"AcceleratorStats,omitempty" require:"true" type:"Repeated"`
	CpuStats         *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats           `json:"CpuStats,omitempty" xml:"CpuStats,omitempty" require:"true" type:"Struct"`
	DiskIoStats      *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats        `json:"DiskIoStats,omitempty" xml:"DiskIoStats,omitempty" require:"true" type:"Struct"`
	MemoryStats      *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats        `json:"MemoryStats,omitempty" xml:"MemoryStats,omitempty" require:"true" type:"Struct"`
	NetworkStats     *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats       `json:"NetworkStats,omitempty" xml:"NetworkStats,omitempty" require:"true" type:"Struct"`
	TaskStats        *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats          `json:"TaskStats,omitempty" xml:"TaskStats,omitempty" require:"true" type:"Struct"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats) SetTimestamp(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats {
	s.Timestamp = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats) SetFsStats(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats {
	s.FsStats = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats) SetAcceleratorStats(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats {
	s.AcceleratorStats = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats) SetCpuStats(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats {
	s.CpuStats = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats) SetDiskIoStats(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats {
	s.DiskIoStats = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats) SetMemoryStats(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats {
	s.MemoryStats = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats) SetNetworkStats(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats {
	s.NetworkStats = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats) SetTaskStats(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats {
	s.TaskStats = v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats struct {
	Device          *string `json:"Device,omitempty" xml:"Device,omitempty" require:"true"`
	Type            *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Limit           *int64  `json:"Limit,omitempty" xml:"Limit,omitempty" require:"true"`
	Usage           *int64  `json:"Usage,omitempty" xml:"Usage,omitempty" require:"true"`
	BaseUsage       *int64  `json:"BaseUsage,omitempty" xml:"BaseUsage,omitempty" require:"true"`
	Available       *int64  `json:"Available,omitempty" xml:"Available,omitempty" require:"true"`
	HasInodes       *bool   `json:"HasInodes,omitempty" xml:"HasInodes,omitempty" require:"true"`
	Inodes          *int64  `json:"Inodes,omitempty" xml:"Inodes,omitempty" require:"true"`
	InodesFree      *int64  `json:"InodesFree,omitempty" xml:"InodesFree,omitempty" require:"true"`
	ReadsCompleted  *int64  `json:"ReadsCompleted,omitempty" xml:"ReadsCompleted,omitempty" require:"true"`
	ReadsMerged     *int64  `json:"ReadsMerged,omitempty" xml:"ReadsMerged,omitempty" require:"true"`
	SectorsRead     *int64  `json:"SectorsRead,omitempty" xml:"SectorsRead,omitempty" require:"true"`
	ReadTime        *int64  `json:"ReadTime,omitempty" xml:"ReadTime,omitempty" require:"true"`
	WritesCompleted *int64  `json:"WritesCompleted,omitempty" xml:"WritesCompleted,omitempty" require:"true"`
	WritesMerged    *int64  `json:"WritesMerged,omitempty" xml:"WritesMerged,omitempty" require:"true"`
	SectorsWritten  *int64  `json:"SectorsWritten,omitempty" xml:"SectorsWritten,omitempty" require:"true"`
	WriteTime       *int64  `json:"WriteTime,omitempty" xml:"WriteTime,omitempty" require:"true"`
	IoInProgress    *int64  `json:"IoInProgress,omitempty" xml:"IoInProgress,omitempty" require:"true"`
	IoTime          *int64  `json:"IoTime,omitempty" xml:"IoTime,omitempty" require:"true"`
	WeightedIoTime  *int64  `json:"WeightedIoTime,omitempty" xml:"WeightedIoTime,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetDevice(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.Device = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetType(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.Type = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetLimit(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.Limit = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetUsage(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.Usage = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetBaseUsage(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.BaseUsage = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetAvailable(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.Available = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetHasInodes(v bool) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.HasInodes = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetInodes(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.Inodes = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetInodesFree(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.InodesFree = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetReadsCompleted(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.ReadsCompleted = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetReadsMerged(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.ReadsMerged = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetSectorsRead(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.SectorsRead = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetReadTime(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.ReadTime = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetWritesCompleted(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.WritesCompleted = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetWritesMerged(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.WritesMerged = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetSectorsWritten(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.SectorsWritten = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetWriteTime(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.WriteTime = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetIoInProgress(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.IoInProgress = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetIoTime(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.IoTime = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats) SetWeightedIoTime(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats {
	s.WeightedIoTime = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats struct {
	Id          *string `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Make        *string `json:"Make,omitempty" xml:"Make,omitempty" require:"true"`
	Model       *string `json:"Model,omitempty" xml:"Model,omitempty" require:"true"`
	MemoryTotal *int64  `json:"MemoryTotal,omitempty" xml:"MemoryTotal,omitempty" require:"true"`
	MemoryUsed  *int64  `json:"MemoryUsed,omitempty" xml:"MemoryUsed,omitempty" require:"true"`
	DutyCycle   *int64  `json:"DutyCycle,omitempty" xml:"DutyCycle,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats) SetId(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats {
	s.Id = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats) SetMake(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats {
	s.Make = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats) SetModel(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats {
	s.Model = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats) SetMemoryTotal(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats {
	s.MemoryTotal = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats) SetMemoryUsed(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats {
	s.MemoryUsed = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats) SetDutyCycle(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats {
	s.DutyCycle = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats struct {
	LoadAverage *int64                                                                                             `json:"LoadAverage,omitempty" xml:"LoadAverage,omitempty" require:"true"`
	CpuUsage    *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage `json:"CpuUsage,omitempty" xml:"CpuUsage,omitempty" require:"true" type:"Struct"`
	CpuCFS      *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS   `json:"CpuCFS,omitempty" xml:"CpuCFS,omitempty" require:"true" type:"Struct"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats) SetLoadAverage(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats {
	s.LoadAverage = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats) SetCpuUsage(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats {
	s.CpuUsage = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats) SetCpuCFS(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats {
	s.CpuCFS = v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage struct {
	Total        *int64   `json:"Total,omitempty" xml:"Total,omitempty" require:"true"`
	User         *int64   `json:"User,omitempty" xml:"User,omitempty" require:"true"`
	System       *int64   `json:"System,omitempty" xml:"System,omitempty" require:"true"`
	PerCpuUsages []*int64 `json:"PerCpuUsages,omitempty" xml:"PerCpuUsages,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage) SetTotal(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage {
	s.Total = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage) SetUser(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage {
	s.User = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage) SetSystem(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage {
	s.System = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage) SetPerCpuUsages(v []*int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage {
	s.PerCpuUsages = v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS struct {
	Periods          *int64 `json:"Periods,omitempty" xml:"Periods,omitempty" require:"true"`
	ThrottledPeriods *int64 `json:"ThrottledPeriods,omitempty" xml:"ThrottledPeriods,omitempty" require:"true"`
	ThrottledTime    *int64 `json:"ThrottledTime,omitempty" xml:"ThrottledTime,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS) SetPeriods(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS {
	s.Periods = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS) SetThrottledPeriods(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS {
	s.ThrottledPeriods = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS) SetThrottledTime(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS {
	s.ThrottledTime = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats struct {
	IoServiceBytes []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes `json:"IoServiceBytes,omitempty" xml:"IoServiceBytes,omitempty" require:"true" type:"Repeated"`
	IoServiced     []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced     `json:"IoServiced,omitempty" xml:"IoServiced,omitempty" require:"true" type:"Repeated"`
	IoQueued       []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued       `json:"IoQueued,omitempty" xml:"IoQueued,omitempty" require:"true" type:"Repeated"`
	Sectors        []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors        `json:"Sectors,omitempty" xml:"Sectors,omitempty" require:"true" type:"Repeated"`
	IoServiceTime  []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime  `json:"IoServiceTime,omitempty" xml:"IoServiceTime,omitempty" require:"true" type:"Repeated"`
	IoWaitTime     []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime     `json:"IoWaitTime,omitempty" xml:"IoWaitTime,omitempty" require:"true" type:"Repeated"`
	IoMerged       []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged       `json:"IoMerged,omitempty" xml:"IoMerged,omitempty" require:"true" type:"Repeated"`
	IoTime         []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime         `json:"IoTime,omitempty" xml:"IoTime,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats) SetIoServiceBytes(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats {
	s.IoServiceBytes = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats) SetIoServiced(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats {
	s.IoServiced = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats) SetIoQueued(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats {
	s.IoQueued = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats) SetSectors(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats {
	s.Sectors = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats) SetIoServiceTime(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats {
	s.IoServiceTime = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats) SetIoWaitTime(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats {
	s.IoWaitTime = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats) SetIoMerged(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats {
	s.IoMerged = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats) SetIoTime(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats {
	s.IoTime = v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes struct {
	Device *string `json:"Device,omitempty" xml:"Device,omitempty" require:"true"`
	Major  *int64  `json:"Major,omitempty" xml:"Major,omitempty" require:"true"`
	Minor  *int64  `json:"Minor,omitempty" xml:"Minor,omitempty" require:"true"`
	Stats  *string `json:"Stats,omitempty" xml:"Stats,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes) SetDevice(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes {
	s.Device = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes) SetMajor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes {
	s.Major = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes) SetMinor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes {
	s.Minor = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes) SetStats(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes {
	s.Stats = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced struct {
	Device *string `json:"Device,omitempty" xml:"Device,omitempty" require:"true"`
	Major  *int64  `json:"Major,omitempty" xml:"Major,omitempty" require:"true"`
	Minor  *int64  `json:"Minor,omitempty" xml:"Minor,omitempty" require:"true"`
	Stats  *string `json:"Stats,omitempty" xml:"Stats,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced) SetDevice(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced {
	s.Device = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced) SetMajor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced {
	s.Major = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced) SetMinor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced {
	s.Minor = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced) SetStats(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced {
	s.Stats = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued struct {
	Device *string `json:"Device,omitempty" xml:"Device,omitempty" require:"true"`
	Major  *int64  `json:"Major,omitempty" xml:"Major,omitempty" require:"true"`
	Minor  *int64  `json:"Minor,omitempty" xml:"Minor,omitempty" require:"true"`
	Stats  *string `json:"Stats,omitempty" xml:"Stats,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued) SetDevice(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued {
	s.Device = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued) SetMajor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued {
	s.Major = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued) SetMinor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued {
	s.Minor = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued) SetStats(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued {
	s.Stats = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors struct {
	Device *string `json:"Device,omitempty" xml:"Device,omitempty" require:"true"`
	Major  *int64  `json:"Major,omitempty" xml:"Major,omitempty" require:"true"`
	Minor  *int64  `json:"Minor,omitempty" xml:"Minor,omitempty" require:"true"`
	Stats  *string `json:"Stats,omitempty" xml:"Stats,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors) SetDevice(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors {
	s.Device = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors) SetMajor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors {
	s.Major = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors) SetMinor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors {
	s.Minor = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors) SetStats(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors {
	s.Stats = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime struct {
	Device *string `json:"Device,omitempty" xml:"Device,omitempty" require:"true"`
	Major  *int64  `json:"Major,omitempty" xml:"Major,omitempty" require:"true"`
	Minor  *int64  `json:"Minor,omitempty" xml:"Minor,omitempty" require:"true"`
	Stats  *string `json:"Stats,omitempty" xml:"Stats,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime) SetDevice(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime {
	s.Device = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime) SetMajor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime {
	s.Major = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime) SetMinor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime {
	s.Minor = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime) SetStats(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime {
	s.Stats = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime struct {
	Device *string `json:"Device,omitempty" xml:"Device,omitempty" require:"true"`
	Major  *int64  `json:"Major,omitempty" xml:"Major,omitempty" require:"true"`
	Minor  *int64  `json:"Minor,omitempty" xml:"Minor,omitempty" require:"true"`
	Stats  *string `json:"Stats,omitempty" xml:"Stats,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime) SetDevice(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime {
	s.Device = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime) SetMajor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime {
	s.Major = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime) SetMinor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime {
	s.Minor = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime) SetStats(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime {
	s.Stats = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged struct {
	Device *string `json:"Device,omitempty" xml:"Device,omitempty" require:"true"`
	Major  *int64  `json:"Major,omitempty" xml:"Major,omitempty" require:"true"`
	Minor  *int64  `json:"Minor,omitempty" xml:"Minor,omitempty" require:"true"`
	Stats  *string `json:"Stats,omitempty" xml:"Stats,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged) SetDevice(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged {
	s.Device = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged) SetMajor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged {
	s.Major = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged) SetMinor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged {
	s.Minor = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged) SetStats(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged {
	s.Stats = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime struct {
	Device *string `json:"Device,omitempty" xml:"Device,omitempty" require:"true"`
	Major  *int64  `json:"Major,omitempty" xml:"Major,omitempty" require:"true"`
	Minor  *int64  `json:"Minor,omitempty" xml:"Minor,omitempty" require:"true"`
	Stats  *string `json:"Stats,omitempty" xml:"Stats,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime) SetDevice(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime {
	s.Device = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime) SetMajor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime {
	s.Major = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime) SetMinor(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime {
	s.Minor = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime) SetStats(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime {
	s.Stats = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats struct {
	Usage            *int64                                                                                                        `json:"Usage,omitempty" xml:"Usage,omitempty" require:"true"`
	MaxUsage         *int64                                                                                                        `json:"MaxUsage,omitempty" xml:"MaxUsage,omitempty" require:"true"`
	Cache            *int64                                                                                                        `json:"Cache,omitempty" xml:"Cache,omitempty" require:"true"`
	Rss              *int64                                                                                                        `json:"Rss,omitempty" xml:"Rss,omitempty" require:"true"`
	Swap             *int64                                                                                                        `json:"Swap,omitempty" xml:"Swap,omitempty" require:"true"`
	WorkingSet       *int64                                                                                                        `json:"WorkingSet,omitempty" xml:"WorkingSet,omitempty" require:"true"`
	FailCnt          *int64                                                                                                        `json:"FailCnt,omitempty" xml:"FailCnt,omitempty" require:"true"`
	ContainerData    *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData    `json:"ContainerData,omitempty" xml:"ContainerData,omitempty" require:"true" type:"Struct"`
	HierarchicalData *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData `json:"HierarchicalData,omitempty" xml:"HierarchicalData,omitempty" require:"true" type:"Struct"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats) SetUsage(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats {
	s.Usage = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats) SetMaxUsage(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats {
	s.MaxUsage = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats) SetCache(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats {
	s.Cache = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats) SetRss(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats {
	s.Rss = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats) SetSwap(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats {
	s.Swap = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats) SetWorkingSet(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats {
	s.WorkingSet = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats) SetFailCnt(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats {
	s.FailCnt = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats) SetContainerData(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats {
	s.ContainerData = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats) SetHierarchicalData(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats {
	s.HierarchicalData = v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData struct {
	PgFault    *int64 `json:"PgFault,omitempty" xml:"PgFault,omitempty" require:"true"`
	PgmajFault *int64 `json:"PgmajFault,omitempty" xml:"PgmajFault,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData) SetPgFault(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData {
	s.PgFault = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData) SetPgmajFault(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData {
	s.PgmajFault = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData struct {
	PgFault    *int64 `json:"PgFault,omitempty" xml:"PgFault,omitempty" require:"true"`
	PgmajFault *int64 `json:"PgmajFault,omitempty" xml:"PgmajFault,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData) SetPgFault(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData {
	s.PgFault = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData) SetPgmajFault(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData {
	s.PgmajFault = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats struct {
	Name           *string                                                                                                        `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	RxBytes        *int64                                                                                                         `json:"RxBytes,omitempty" xml:"RxBytes,omitempty" require:"true"`
	RxPackets      *int64                                                                                                         `json:"RxPackets,omitempty" xml:"RxPackets,omitempty" require:"true"`
	RxErrors       *int64                                                                                                         `json:"RxErrors,omitempty" xml:"RxErrors,omitempty" require:"true"`
	RxDropped      *int64                                                                                                         `json:"RxDropped,omitempty" xml:"RxDropped,omitempty" require:"true"`
	TxBytes        *int64                                                                                                         `json:"TxBytes,omitempty" xml:"TxBytes,omitempty" require:"true"`
	TxPackets      *int64                                                                                                         `json:"TxPackets,omitempty" xml:"TxPackets,omitempty" require:"true"`
	TxDropped      *int64                                                                                                         `json:"TxDropped,omitempty" xml:"TxDropped,omitempty" require:"true"`
	TxErrors       *int64                                                                                                         `json:"TxErrors,omitempty" xml:"TxErrors,omitempty" require:"true"`
	InterfaceStats []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats `json:"InterfaceStats,omitempty" xml:"InterfaceStats,omitempty" require:"true" type:"Repeated"`
	Tcp            *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp              `json:"Tcp,omitempty" xml:"Tcp,omitempty" require:"true" type:"Struct"`
	Tcp6           *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6             `json:"Tcp6,omitempty" xml:"Tcp6,omitempty" require:"true" type:"Struct"`
	Udp            *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp              `json:"Udp,omitempty" xml:"Udp,omitempty" require:"true" type:"Struct"`
	Udp6           *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6             `json:"Udp6,omitempty" xml:"Udp6,omitempty" require:"true" type:"Struct"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) SetName(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats {
	s.Name = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) SetRxBytes(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats {
	s.RxBytes = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) SetRxPackets(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats {
	s.RxPackets = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) SetRxErrors(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats {
	s.RxErrors = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) SetRxDropped(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats {
	s.RxDropped = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) SetTxBytes(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats {
	s.TxBytes = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) SetTxPackets(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats {
	s.TxPackets = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) SetTxDropped(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats {
	s.TxDropped = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) SetTxErrors(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats {
	s.TxErrors = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) SetInterfaceStats(v []*DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats {
	s.InterfaceStats = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) SetTcp(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats {
	s.Tcp = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) SetTcp6(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats {
	s.Tcp6 = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) SetUdp(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats {
	s.Udp = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats) SetUdp6(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats {
	s.Udp6 = v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats struct {
	Name      *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	RxBytes   *int64  `json:"RxBytes,omitempty" xml:"RxBytes,omitempty" require:"true"`
	RxPackets *int64  `json:"RxPackets,omitempty" xml:"RxPackets,omitempty" require:"true"`
	RxErrors  *int64  `json:"RxErrors,omitempty" xml:"RxErrors,omitempty" require:"true"`
	RxDropped *int64  `json:"RxDropped,omitempty" xml:"RxDropped,omitempty" require:"true"`
	TxBytes   *int64  `json:"TxBytes,omitempty" xml:"TxBytes,omitempty" require:"true"`
	TxPackets *int64  `json:"TxPackets,omitempty" xml:"TxPackets,omitempty" require:"true"`
	TxDropped *int64  `json:"TxDropped,omitempty" xml:"TxDropped,omitempty" require:"true"`
	TxErrors  *int64  `json:"TxErrors,omitempty" xml:"TxErrors,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats) SetName(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats {
	s.Name = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats) SetRxBytes(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats {
	s.RxBytes = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats) SetRxPackets(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats {
	s.RxPackets = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats) SetRxErrors(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats {
	s.RxErrors = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats) SetRxDropped(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats {
	s.RxDropped = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats) SetTxBytes(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats {
	s.TxBytes = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats) SetTxPackets(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats {
	s.TxPackets = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats) SetTxDropped(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats {
	s.TxDropped = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats) SetTxErrors(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats {
	s.TxErrors = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp struct {
	Established *int64 `json:"Established,omitempty" xml:"Established,omitempty" require:"true"`
	SynSent     *int64 `json:"SynSent,omitempty" xml:"SynSent,omitempty" require:"true"`
	SynRecv     *int64 `json:"SynRecv,omitempty" xml:"SynRecv,omitempty" require:"true"`
	FinWait1    *int64 `json:"FinWait1,omitempty" xml:"FinWait1,omitempty" require:"true"`
	FinWait2    *int64 `json:"FinWait2,omitempty" xml:"FinWait2,omitempty" require:"true"`
	TimeWait    *int64 `json:"TimeWait,omitempty" xml:"TimeWait,omitempty" require:"true"`
	Close       *int64 `json:"Close,omitempty" xml:"Close,omitempty" require:"true"`
	CloseWait   *int64 `json:"CloseWait,omitempty" xml:"CloseWait,omitempty" require:"true"`
	LastAck     *int64 `json:"LastAck,omitempty" xml:"LastAck,omitempty" require:"true"`
	Listen      *int64 `json:"Listen,omitempty" xml:"Listen,omitempty" require:"true"`
	Closing     *int64 `json:"Closing,omitempty" xml:"Closing,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp) SetEstablished(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp {
	s.Established = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp) SetSynSent(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp {
	s.SynSent = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp) SetSynRecv(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp {
	s.SynRecv = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp) SetFinWait1(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp {
	s.FinWait1 = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp) SetFinWait2(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp {
	s.FinWait2 = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp) SetTimeWait(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp {
	s.TimeWait = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp) SetClose(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp {
	s.Close = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp) SetCloseWait(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp {
	s.CloseWait = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp) SetLastAck(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp {
	s.LastAck = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp) SetListen(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp {
	s.Listen = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp) SetClosing(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp {
	s.Closing = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 struct {
	Established *int64 `json:"Established,omitempty" xml:"Established,omitempty" require:"true"`
	SynSent     *int64 `json:"SynSent,omitempty" xml:"SynSent,omitempty" require:"true"`
	SynRecv     *int64 `json:"SynRecv,omitempty" xml:"SynRecv,omitempty" require:"true"`
	FinWait1    *int64 `json:"FinWait1,omitempty" xml:"FinWait1,omitempty" require:"true"`
	FinWait2    *int64 `json:"FinWait2,omitempty" xml:"FinWait2,omitempty" require:"true"`
	TimeWait    *int64 `json:"TimeWait,omitempty" xml:"TimeWait,omitempty" require:"true"`
	Close       *int64 `json:"Close,omitempty" xml:"Close,omitempty" require:"true"`
	CloseWait   *int64 `json:"CloseWait,omitempty" xml:"CloseWait,omitempty" require:"true"`
	LastAck     *int64 `json:"LastAck,omitempty" xml:"LastAck,omitempty" require:"true"`
	Listen      *int64 `json:"Listen,omitempty" xml:"Listen,omitempty" require:"true"`
	Closing     *int64 `json:"Closing,omitempty" xml:"Closing,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6) SetEstablished(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 {
	s.Established = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6) SetSynSent(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 {
	s.SynSent = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6) SetSynRecv(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 {
	s.SynRecv = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6) SetFinWait1(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 {
	s.FinWait1 = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6) SetFinWait2(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 {
	s.FinWait2 = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6) SetTimeWait(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 {
	s.TimeWait = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6) SetClose(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 {
	s.Close = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6) SetCloseWait(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 {
	s.CloseWait = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6) SetLastAck(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 {
	s.LastAck = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6) SetListen(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 {
	s.Listen = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6) SetClosing(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 {
	s.Closing = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp struct {
	Listen   *int64 `json:"Listen,omitempty" xml:"Listen,omitempty" require:"true"`
	Dropped  *int64 `json:"Dropped,omitempty" xml:"Dropped,omitempty" require:"true"`
	RxQueued *int64 `json:"RxQueued,omitempty" xml:"RxQueued,omitempty" require:"true"`
	TxQueued *int64 `json:"TxQueued,omitempty" xml:"TxQueued,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp) SetListen(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp {
	s.Listen = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp) SetDropped(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp {
	s.Dropped = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp) SetRxQueued(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp {
	s.RxQueued = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp) SetTxQueued(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp {
	s.TxQueued = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6 struct {
	Listen   *int64 `json:"Listen,omitempty" xml:"Listen,omitempty" require:"true"`
	Dropped  *int64 `json:"Dropped,omitempty" xml:"Dropped,omitempty" require:"true"`
	RxQueued *int64 `json:"RxQueued,omitempty" xml:"RxQueued,omitempty" require:"true"`
	TxQueued *int64 `json:"TxQueued,omitempty" xml:"TxQueued,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6) SetListen(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6 {
	s.Listen = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6) SetDropped(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6 {
	s.Dropped = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6) SetRxQueued(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6 {
	s.RxQueued = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6) SetTxQueued(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6 {
	s.TxQueued = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats struct {
	NrSleeping        *int64 `json:"NrSleeping,omitempty" xml:"NrSleeping,omitempty" require:"true"`
	NrRunning         *int64 `json:"NrRunning,omitempty" xml:"NrRunning,omitempty" require:"true"`
	NrStopped         *int64 `json:"NrStopped,omitempty" xml:"NrStopped,omitempty" require:"true"`
	NrUninterruptible *int64 `json:"NrUninterruptible,omitempty" xml:"NrUninterruptible,omitempty" require:"true"`
	NrIoWait          *int64 `json:"NrIoWait,omitempty" xml:"NrIoWait,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats) SetNrSleeping(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats {
	s.NrSleeping = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats) SetNrRunning(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats {
	s.NrRunning = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats) SetNrStopped(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats {
	s.NrStopped = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats) SetNrUninterruptible(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats {
	s.NrUninterruptible = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats) SetNrIoWait(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats {
	s.NrIoWait = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec struct {
	CreationTime     *string                                                                                          `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	HasCpu           *bool                                                                                            `json:"HasCpu,omitempty" xml:"HasCpu,omitempty" require:"true"`
	HasMemory        *bool                                                                                            `json:"HasMemory,omitempty" xml:"HasMemory,omitempty" require:"true"`
	HasNetwork       *bool                                                                                            `json:"HasNetwork,omitempty" xml:"HasNetwork,omitempty" require:"true"`
	HasFilesystem    *bool                                                                                            `json:"HasFilesystem,omitempty" xml:"HasFilesystem,omitempty" require:"true"`
	HasDiskIo        *bool                                                                                            `json:"HasDiskIo,omitempty" xml:"HasDiskIo,omitempty" require:"true"`
	HasCustomMetrics *bool                                                                                            `json:"HasCustomMetrics,omitempty" xml:"HasCustomMetrics,omitempty" require:"true"`
	Image            *string                                                                                          `json:"Image,omitempty" xml:"Image,omitempty" require:"true"`
	Labels           *string                                                                                          `json:"Labels,omitempty" xml:"Labels,omitempty" require:"true"`
	Envs             *string                                                                                          `json:"Envs,omitempty" xml:"Envs,omitempty" require:"true"`
	ContainerCpu     *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu    `json:"ContainerCpu,omitempty" xml:"ContainerCpu,omitempty" require:"true" type:"Struct"`
	ContainerMemory  *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory `json:"ContainerMemory,omitempty" xml:"ContainerMemory,omitempty" require:"true" type:"Struct"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) SetCreationTime(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec {
	s.CreationTime = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) SetHasCpu(v bool) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec {
	s.HasCpu = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) SetHasMemory(v bool) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec {
	s.HasMemory = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) SetHasNetwork(v bool) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec {
	s.HasNetwork = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) SetHasFilesystem(v bool) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec {
	s.HasFilesystem = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) SetHasDiskIo(v bool) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec {
	s.HasDiskIo = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) SetHasCustomMetrics(v bool) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec {
	s.HasCustomMetrics = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) SetImage(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec {
	s.Image = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) SetLabels(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec {
	s.Labels = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) SetEnvs(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec {
	s.Envs = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) SetContainerCpu(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec {
	s.ContainerCpu = v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec) SetContainerMemory(v *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec {
	s.ContainerMemory = v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu struct {
	Limit    *int64  `json:"Limit,omitempty" xml:"Limit,omitempty" require:"true"`
	MaxLimit *int64  `json:"MaxLimit,omitempty" xml:"MaxLimit,omitempty" require:"true"`
	Mask     *string `json:"Mask,omitempty" xml:"Mask,omitempty" require:"true"`
	Quota    *int64  `json:"Quota,omitempty" xml:"Quota,omitempty" require:"true"`
	Period   *int64  `json:"Period,omitempty" xml:"Period,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu) SetLimit(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu {
	s.Limit = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu) SetMaxLimit(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu {
	s.MaxLimit = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu) SetMask(v string) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu {
	s.Mask = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu) SetQuota(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu {
	s.Quota = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu) SetPeriod(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu {
	s.Period = &v
	return s
}

type DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory struct {
	Limit       *int64 `json:"Limit,omitempty" xml:"Limit,omitempty" require:"true"`
	Reservation *int64 `json:"Reservation,omitempty" xml:"Reservation,omitempty" require:"true"`
	SwapLimit   *int64 `json:"SwapLimit,omitempty" xml:"SwapLimit,omitempty" require:"true"`
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory) String() string {
	return tea.Prettify(s)
}

func (s DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory) GoString() string {
	return s.String()
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory) SetLimit(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory {
	s.Limit = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory) SetReservation(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory {
	s.Reservation = &v
	return s
}

func (s *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory) SetSwapLimit(v int64) *DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory {
	s.SwapLimit = &v
	return s
}

type DescribeContainerGroupMetricRequest struct {
	RegionId         *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ContainerGroupId *string `json:"ContainerGroupId,omitempty" xml:"ContainerGroupId,omitempty" require:"true"`
	StartTime        *string `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime          *string `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
	Period           *string `json:"Period,omitempty" xml:"Period,omitempty"`
}

func (s DescribeContainerGroupMetricRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupMetricRequest) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupMetricRequest) SetRegionId(v string) *DescribeContainerGroupMetricRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeContainerGroupMetricRequest) SetContainerGroupId(v string) *DescribeContainerGroupMetricRequest {
	s.ContainerGroupId = &v
	return s
}

func (s *DescribeContainerGroupMetricRequest) SetStartTime(v string) *DescribeContainerGroupMetricRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeContainerGroupMetricRequest) SetEndTime(v string) *DescribeContainerGroupMetricRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeContainerGroupMetricRequest) SetPeriod(v string) *DescribeContainerGroupMetricRequest {
	s.Period = &v
	return s
}

type DescribeContainerGroupMetricResponse struct {
	RequestId        *string                                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ContainerGroupId *string                                        `json:"ContainerGroupId,omitempty" xml:"ContainerGroupId,omitempty" require:"true"`
	Records          []*DescribeContainerGroupMetricResponseRecords `json:"Records,omitempty" xml:"Records,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupMetricResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupMetricResponse) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupMetricResponse) SetRequestId(v string) *DescribeContainerGroupMetricResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeContainerGroupMetricResponse) SetContainerGroupId(v string) *DescribeContainerGroupMetricResponse {
	s.ContainerGroupId = &v
	return s
}

func (s *DescribeContainerGroupMetricResponse) SetRecords(v []*DescribeContainerGroupMetricResponseRecords) *DescribeContainerGroupMetricResponse {
	s.Records = v
	return s
}

type DescribeContainerGroupMetricResponseRecords struct {
	Timestamp  *string                                                  `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Containers []*DescribeContainerGroupMetricResponseRecordsContainers `json:"Containers,omitempty" xml:"Containers,omitempty" require:"true" type:"Repeated"`
	CPU        *DescribeContainerGroupMetricResponseRecordsCPU          `json:"CPU,omitempty" xml:"CPU,omitempty" require:"true" type:"Struct"`
	Memory     *DescribeContainerGroupMetricResponseRecordsMemory       `json:"Memory,omitempty" xml:"Memory,omitempty" require:"true" type:"Struct"`
	Network    *DescribeContainerGroupMetricResponseRecordsNetwork      `json:"Network,omitempty" xml:"Network,omitempty" require:"true" type:"Struct"`
}

func (s DescribeContainerGroupMetricResponseRecords) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupMetricResponseRecords) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupMetricResponseRecords) SetTimestamp(v string) *DescribeContainerGroupMetricResponseRecords {
	s.Timestamp = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecords) SetContainers(v []*DescribeContainerGroupMetricResponseRecordsContainers) *DescribeContainerGroupMetricResponseRecords {
	s.Containers = v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecords) SetCPU(v *DescribeContainerGroupMetricResponseRecordsCPU) *DescribeContainerGroupMetricResponseRecords {
	s.CPU = v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecords) SetMemory(v *DescribeContainerGroupMetricResponseRecordsMemory) *DescribeContainerGroupMetricResponseRecords {
	s.Memory = v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecords) SetNetwork(v *DescribeContainerGroupMetricResponseRecordsNetwork) *DescribeContainerGroupMetricResponseRecords {
	s.Network = v
	return s
}

type DescribeContainerGroupMetricResponseRecordsContainers struct {
	Name   *string                                                      `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	CPU    *DescribeContainerGroupMetricResponseRecordsContainersCPU    `json:"CPU,omitempty" xml:"CPU,omitempty" require:"true" type:"Struct"`
	Memory *DescribeContainerGroupMetricResponseRecordsContainersMemory `json:"Memory,omitempty" xml:"Memory,omitempty" require:"true" type:"Struct"`
}

func (s DescribeContainerGroupMetricResponseRecordsContainers) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupMetricResponseRecordsContainers) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupMetricResponseRecordsContainers) SetName(v string) *DescribeContainerGroupMetricResponseRecordsContainers {
	s.Name = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsContainers) SetCPU(v *DescribeContainerGroupMetricResponseRecordsContainersCPU) *DescribeContainerGroupMetricResponseRecordsContainers {
	s.CPU = v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsContainers) SetMemory(v *DescribeContainerGroupMetricResponseRecordsContainersMemory) *DescribeContainerGroupMetricResponseRecordsContainers {
	s.Memory = v
	return s
}

type DescribeContainerGroupMetricResponseRecordsContainersCPU struct {
	UsageNanoCores       *int64 `json:"UsageNanoCores,omitempty" xml:"UsageNanoCores,omitempty" require:"true"`
	UsageCoreNanoSeconds *int64 `json:"UsageCoreNanoSeconds,omitempty" xml:"UsageCoreNanoSeconds,omitempty" require:"true"`
	Load                 *int64 `json:"Load,omitempty" xml:"Load,omitempty" require:"true"`
	Limit                *int64 `json:"Limit,omitempty" xml:"Limit,omitempty" require:"true"`
}

func (s DescribeContainerGroupMetricResponseRecordsContainersCPU) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupMetricResponseRecordsContainersCPU) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupMetricResponseRecordsContainersCPU) SetUsageNanoCores(v int64) *DescribeContainerGroupMetricResponseRecordsContainersCPU {
	s.UsageNanoCores = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsContainersCPU) SetUsageCoreNanoSeconds(v int64) *DescribeContainerGroupMetricResponseRecordsContainersCPU {
	s.UsageCoreNanoSeconds = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsContainersCPU) SetLoad(v int64) *DescribeContainerGroupMetricResponseRecordsContainersCPU {
	s.Load = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsContainersCPU) SetLimit(v int64) *DescribeContainerGroupMetricResponseRecordsContainersCPU {
	s.Limit = &v
	return s
}

type DescribeContainerGroupMetricResponseRecordsContainersMemory struct {
	AvailableBytes *int64 `json:"AvailableBytes,omitempty" xml:"AvailableBytes,omitempty" require:"true"`
	UsageBytes     *int64 `json:"UsageBytes,omitempty" xml:"UsageBytes,omitempty" require:"true"`
	Cache          *int64 `json:"Cache,omitempty" xml:"Cache,omitempty" require:"true"`
	WorkingSet     *int64 `json:"WorkingSet,omitempty" xml:"WorkingSet,omitempty" require:"true"`
	Rss            *int64 `json:"Rss,omitempty" xml:"Rss,omitempty" require:"true"`
}

func (s DescribeContainerGroupMetricResponseRecordsContainersMemory) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupMetricResponseRecordsContainersMemory) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupMetricResponseRecordsContainersMemory) SetAvailableBytes(v int64) *DescribeContainerGroupMetricResponseRecordsContainersMemory {
	s.AvailableBytes = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsContainersMemory) SetUsageBytes(v int64) *DescribeContainerGroupMetricResponseRecordsContainersMemory {
	s.UsageBytes = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsContainersMemory) SetCache(v int64) *DescribeContainerGroupMetricResponseRecordsContainersMemory {
	s.Cache = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsContainersMemory) SetWorkingSet(v int64) *DescribeContainerGroupMetricResponseRecordsContainersMemory {
	s.WorkingSet = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsContainersMemory) SetRss(v int64) *DescribeContainerGroupMetricResponseRecordsContainersMemory {
	s.Rss = &v
	return s
}

type DescribeContainerGroupMetricResponseRecordsCPU struct {
	UsageNanoCores       *int64 `json:"UsageNanoCores,omitempty" xml:"UsageNanoCores,omitempty" require:"true"`
	UsageCoreNanoSeconds *int64 `json:"UsageCoreNanoSeconds,omitempty" xml:"UsageCoreNanoSeconds,omitempty" require:"true"`
	Load                 *int64 `json:"Load,omitempty" xml:"Load,omitempty" require:"true"`
	Limit                *int64 `json:"Limit,omitempty" xml:"Limit,omitempty" require:"true"`
}

func (s DescribeContainerGroupMetricResponseRecordsCPU) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupMetricResponseRecordsCPU) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupMetricResponseRecordsCPU) SetUsageNanoCores(v int64) *DescribeContainerGroupMetricResponseRecordsCPU {
	s.UsageNanoCores = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsCPU) SetUsageCoreNanoSeconds(v int64) *DescribeContainerGroupMetricResponseRecordsCPU {
	s.UsageCoreNanoSeconds = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsCPU) SetLoad(v int64) *DescribeContainerGroupMetricResponseRecordsCPU {
	s.Load = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsCPU) SetLimit(v int64) *DescribeContainerGroupMetricResponseRecordsCPU {
	s.Limit = &v
	return s
}

type DescribeContainerGroupMetricResponseRecordsMemory struct {
	AvailableBytes *int64 `json:"AvailableBytes,omitempty" xml:"AvailableBytes,omitempty" require:"true"`
	UsageBytes     *int64 `json:"UsageBytes,omitempty" xml:"UsageBytes,omitempty" require:"true"`
	Cache          *int64 `json:"Cache,omitempty" xml:"Cache,omitempty" require:"true"`
	WorkingSet     *int64 `json:"WorkingSet,omitempty" xml:"WorkingSet,omitempty" require:"true"`
	Rss            *int64 `json:"Rss,omitempty" xml:"Rss,omitempty" require:"true"`
}

func (s DescribeContainerGroupMetricResponseRecordsMemory) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupMetricResponseRecordsMemory) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupMetricResponseRecordsMemory) SetAvailableBytes(v int64) *DescribeContainerGroupMetricResponseRecordsMemory {
	s.AvailableBytes = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsMemory) SetUsageBytes(v int64) *DescribeContainerGroupMetricResponseRecordsMemory {
	s.UsageBytes = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsMemory) SetCache(v int64) *DescribeContainerGroupMetricResponseRecordsMemory {
	s.Cache = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsMemory) SetWorkingSet(v int64) *DescribeContainerGroupMetricResponseRecordsMemory {
	s.WorkingSet = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsMemory) SetRss(v int64) *DescribeContainerGroupMetricResponseRecordsMemory {
	s.Rss = &v
	return s
}

type DescribeContainerGroupMetricResponseRecordsNetwork struct {
	Interfaces []*DescribeContainerGroupMetricResponseRecordsNetworkInterfaces `json:"Interfaces,omitempty" xml:"Interfaces,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupMetricResponseRecordsNetwork) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupMetricResponseRecordsNetwork) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupMetricResponseRecordsNetwork) SetInterfaces(v []*DescribeContainerGroupMetricResponseRecordsNetworkInterfaces) *DescribeContainerGroupMetricResponseRecordsNetwork {
	s.Interfaces = v
	return s
}

type DescribeContainerGroupMetricResponseRecordsNetworkInterfaces struct {
	TxBytes  *int64  `json:"TxBytes,omitempty" xml:"TxBytes,omitempty" require:"true"`
	RxBytes  *int64  `json:"RxBytes,omitempty" xml:"RxBytes,omitempty" require:"true"`
	TxErrors *int64  `json:"TxErrors,omitempty" xml:"TxErrors,omitempty" require:"true"`
	RxErrors *int64  `json:"RxErrors,omitempty" xml:"RxErrors,omitempty" require:"true"`
	Name     *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s DescribeContainerGroupMetricResponseRecordsNetworkInterfaces) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupMetricResponseRecordsNetworkInterfaces) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupMetricResponseRecordsNetworkInterfaces) SetTxBytes(v int64) *DescribeContainerGroupMetricResponseRecordsNetworkInterfaces {
	s.TxBytes = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsNetworkInterfaces) SetRxBytes(v int64) *DescribeContainerGroupMetricResponseRecordsNetworkInterfaces {
	s.RxBytes = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsNetworkInterfaces) SetTxErrors(v int64) *DescribeContainerGroupMetricResponseRecordsNetworkInterfaces {
	s.TxErrors = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsNetworkInterfaces) SetRxErrors(v int64) *DescribeContainerGroupMetricResponseRecordsNetworkInterfaces {
	s.RxErrors = &v
	return s
}

func (s *DescribeContainerGroupMetricResponseRecordsNetworkInterfaces) SetName(v string) *DescribeContainerGroupMetricResponseRecordsNetworkInterfaces {
	s.Name = &v
	return s
}

type UpdateContainerGroupByTemplateRequest struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Template    *string `json:"Template,omitempty" xml:"Template,omitempty" require:"true"`
	ClientToken *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
}

func (s UpdateContainerGroupByTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupByTemplateRequest) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupByTemplateRequest) SetRegionId(v string) *UpdateContainerGroupByTemplateRequest {
	s.RegionId = &v
	return s
}

func (s *UpdateContainerGroupByTemplateRequest) SetTemplate(v string) *UpdateContainerGroupByTemplateRequest {
	s.Template = &v
	return s
}

func (s *UpdateContainerGroupByTemplateRequest) SetClientToken(v string) *UpdateContainerGroupByTemplateRequest {
	s.ClientToken = &v
	return s
}

type UpdateContainerGroupByTemplateResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateContainerGroupByTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupByTemplateResponse) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupByTemplateResponse) SetRequestId(v string) *UpdateContainerGroupByTemplateResponse {
	s.RequestId = &v
	return s
}

type CreateContainerGroupFromTemplateRequest struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Template    *string `json:"Template,omitempty" xml:"Template,omitempty" require:"true"`
	ClientToken *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
}

func (s CreateContainerGroupFromTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupFromTemplateRequest) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupFromTemplateRequest) SetRegionId(v string) *CreateContainerGroupFromTemplateRequest {
	s.RegionId = &v
	return s
}

func (s *CreateContainerGroupFromTemplateRequest) SetTemplate(v string) *CreateContainerGroupFromTemplateRequest {
	s.Template = &v
	return s
}

func (s *CreateContainerGroupFromTemplateRequest) SetClientToken(v string) *CreateContainerGroupFromTemplateRequest {
	s.ClientToken = &v
	return s
}

type CreateContainerGroupFromTemplateResponse struct {
	RequestId        *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ContainerGroupId *string `json:"ContainerGroupId,omitempty" xml:"ContainerGroupId,omitempty" require:"true"`
}

func (s CreateContainerGroupFromTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupFromTemplateResponse) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupFromTemplateResponse) SetRequestId(v string) *CreateContainerGroupFromTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *CreateContainerGroupFromTemplateResponse) SetContainerGroupId(v string) *CreateContainerGroupFromTemplateResponse {
	s.ContainerGroupId = &v
	return s
}

type ExportContainerGroupTemplateRequest struct {
	RegionId         *string `json:"RegionId,omitempty" xml:"RegionId,omitempty"`
	ContainerGroupId *string `json:"ContainerGroupId,omitempty" xml:"ContainerGroupId,omitempty"`
}

func (s ExportContainerGroupTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateRequest) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateRequest) SetRegionId(v string) *ExportContainerGroupTemplateRequest {
	s.RegionId = &v
	return s
}

func (s *ExportContainerGroupTemplateRequest) SetContainerGroupId(v string) *ExportContainerGroupTemplateRequest {
	s.ContainerGroupId = &v
	return s
}

type ExportContainerGroupTemplateResponse struct {
	RequestId *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Template  *ExportContainerGroupTemplateResponseTemplate `json:"Template,omitempty" xml:"Template,omitempty" require:"true" type:"Struct"`
}

func (s ExportContainerGroupTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponse) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponse) SetRequestId(v string) *ExportContainerGroupTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *ExportContainerGroupTemplateResponse) SetTemplate(v *ExportContainerGroupTemplateResponseTemplate) *ExportContainerGroupTemplateResponse {
	s.Template = v
	return s
}

type ExportContainerGroupTemplateResponseTemplate struct {
	RegionId           *string                                                `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ZoneId             *string                                                `json:"ZoneId,omitempty" xml:"ZoneId,omitempty" require:"true"`
	SecurityGroupId    *string                                                `json:"SecurityGroupId,omitempty" xml:"SecurityGroupId,omitempty" require:"true"`
	VSwitchId          *string                                                `json:"VSwitchId,omitempty" xml:"VSwitchId,omitempty" require:"true"`
	ResourceGroupId    *string                                                `json:"ResourceGroupId,omitempty" xml:"ResourceGroupId,omitempty" require:"true"`
	EipInstanceId      *string                                                `json:"EipInstanceId,omitempty" xml:"EipInstanceId,omitempty" require:"true"`
	ContainerGroupName *string                                                `json:"ContainerGroupName,omitempty" xml:"ContainerGroupName,omitempty" require:"true"`
	InstanceType       *string                                                `json:"InstanceType,omitempty" xml:"InstanceType,omitempty" require:"true"`
	Tags               []*ExportContainerGroupTemplateResponseTemplateTags    `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Repeated"`
	Resources          *ExportContainerGroupTemplateResponseTemplateResources `json:"Resources,omitempty" xml:"Resources,omitempty" require:"true" type:"Struct"`
	Spec               *ExportContainerGroupTemplateResponseTemplateSpec      `json:"Spec,omitempty" xml:"Spec,omitempty" require:"true" type:"Struct"`
}

func (s ExportContainerGroupTemplateResponseTemplate) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplate) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplate) SetRegionId(v string) *ExportContainerGroupTemplateResponseTemplate {
	s.RegionId = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplate) SetZoneId(v string) *ExportContainerGroupTemplateResponseTemplate {
	s.ZoneId = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplate) SetSecurityGroupId(v string) *ExportContainerGroupTemplateResponseTemplate {
	s.SecurityGroupId = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplate) SetVSwitchId(v string) *ExportContainerGroupTemplateResponseTemplate {
	s.VSwitchId = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplate) SetResourceGroupId(v string) *ExportContainerGroupTemplateResponseTemplate {
	s.ResourceGroupId = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplate) SetEipInstanceId(v string) *ExportContainerGroupTemplateResponseTemplate {
	s.EipInstanceId = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplate) SetContainerGroupName(v string) *ExportContainerGroupTemplateResponseTemplate {
	s.ContainerGroupName = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplate) SetInstanceType(v string) *ExportContainerGroupTemplateResponseTemplate {
	s.InstanceType = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplate) SetTags(v []*ExportContainerGroupTemplateResponseTemplateTags) *ExportContainerGroupTemplateResponseTemplate {
	s.Tags = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplate) SetResources(v *ExportContainerGroupTemplateResponseTemplateResources) *ExportContainerGroupTemplateResponseTemplate {
	s.Resources = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplate) SetSpec(v *ExportContainerGroupTemplateResponseTemplateSpec) *ExportContainerGroupTemplateResponseTemplate {
	s.Spec = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateTags struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateTags) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateTags) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateTags) SetKey(v string) *ExportContainerGroupTemplateResponseTemplateTags {
	s.Key = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateTags) SetValue(v string) *ExportContainerGroupTemplateResponseTemplateTags {
	s.Value = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateResources struct {
	Cpu    *float32 `json:"Cpu,omitempty" xml:"Cpu,omitempty" require:"true"`
	Memory *float32 `json:"Memory,omitempty" xml:"Memory,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateResources) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateResources) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateResources) SetCpu(v float32) *ExportContainerGroupTemplateResponseTemplateResources {
	s.Cpu = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateResources) SetMemory(v float32) *ExportContainerGroupTemplateResponseTemplateResources {
	s.Memory = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpec struct {
	RestartPolicy   *string                                                           `json:"RestartPolicy,omitempty" xml:"RestartPolicy,omitempty" require:"true"`
	DnsPolicy       *string                                                           `json:"DnsPolicy,omitempty" xml:"DnsPolicy,omitempty" require:"true"`
	Volumes         []*ExportContainerGroupTemplateResponseTemplateSpecVolumes        `json:"Volumes,omitempty" xml:"Volumes,omitempty" require:"true" type:"Repeated"`
	InitContainers  []*ExportContainerGroupTemplateResponseTemplateSpecInitContainers `json:"InitContainers,omitempty" xml:"InitContainers,omitempty" require:"true" type:"Repeated"`
	Containers      []*ExportContainerGroupTemplateResponseTemplateSpecContainers     `json:"Containers,omitempty" xml:"Containers,omitempty" require:"true" type:"Repeated"`
	DnsConfig       *ExportContainerGroupTemplateResponseTemplateSpecDnsConfig        `json:"DnsConfig,omitempty" xml:"DnsConfig,omitempty" require:"true" type:"Struct"`
	SecurityContext *ExportContainerGroupTemplateResponseTemplateSpecSecurityContext  `json:"SecurityContext,omitempty" xml:"SecurityContext,omitempty" require:"true" type:"Struct"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpec) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpec) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpec) SetRestartPolicy(v string) *ExportContainerGroupTemplateResponseTemplateSpec {
	s.RestartPolicy = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpec) SetDnsPolicy(v string) *ExportContainerGroupTemplateResponseTemplateSpec {
	s.DnsPolicy = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpec) SetVolumes(v []*ExportContainerGroupTemplateResponseTemplateSpecVolumes) *ExportContainerGroupTemplateResponseTemplateSpec {
	s.Volumes = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpec) SetInitContainers(v []*ExportContainerGroupTemplateResponseTemplateSpecInitContainers) *ExportContainerGroupTemplateResponseTemplateSpec {
	s.InitContainers = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpec) SetContainers(v []*ExportContainerGroupTemplateResponseTemplateSpecContainers) *ExportContainerGroupTemplateResponseTemplateSpec {
	s.Containers = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpec) SetDnsConfig(v *ExportContainerGroupTemplateResponseTemplateSpecDnsConfig) *ExportContainerGroupTemplateResponseTemplateSpec {
	s.DnsConfig = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpec) SetSecurityContext(v *ExportContainerGroupTemplateResponseTemplateSpecSecurityContext) *ExportContainerGroupTemplateResponseTemplateSpec {
	s.SecurityContext = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecVolumes struct {
	Name       *string                                                            `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	ConfigFile *ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile `json:"ConfigFile,omitempty" xml:"ConfigFile,omitempty" require:"true" type:"Struct"`
	EmptyDir   *ExportContainerGroupTemplateResponseTemplateSpecVolumesEmptyDir   `json:"EmptyDir,omitempty" xml:"EmptyDir,omitempty" require:"true" type:"Struct"`
	Nfs        *ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs        `json:"Nfs,omitempty" xml:"Nfs,omitempty" require:"true" type:"Struct"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecVolumes) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecVolumes) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecVolumes) SetName(v string) *ExportContainerGroupTemplateResponseTemplateSpecVolumes {
	s.Name = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecVolumes) SetConfigFile(v *ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile) *ExportContainerGroupTemplateResponseTemplateSpecVolumes {
	s.ConfigFile = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecVolumes) SetEmptyDir(v *ExportContainerGroupTemplateResponseTemplateSpecVolumesEmptyDir) *ExportContainerGroupTemplateResponseTemplateSpecVolumes {
	s.EmptyDir = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecVolumes) SetNfs(v *ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs) *ExportContainerGroupTemplateResponseTemplateSpecVolumes {
	s.Nfs = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile struct {
	DefaultMode *int                                                                      `json:"DefaultMode,omitempty" xml:"DefaultMode,omitempty" require:"true"`
	Items       []*ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Repeated"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile) SetDefaultMode(v int) *ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile {
	s.DefaultMode = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile) SetItems(v []*ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems) *ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile {
	s.Items = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems struct {
	Mode    *int    `json:"Mode,omitempty" xml:"Mode,omitempty" require:"true"`
	Path    *string `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
	Content *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems) SetMode(v int) *ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems {
	s.Mode = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems) SetPath(v string) *ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems {
	s.Path = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems) SetContent(v string) *ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems {
	s.Content = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecVolumesEmptyDir struct {
	SizeLimit *string `json:"SizeLimit,omitempty" xml:"SizeLimit,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecVolumesEmptyDir) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecVolumesEmptyDir) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecVolumesEmptyDir) SetSizeLimit(v string) *ExportContainerGroupTemplateResponseTemplateSpecVolumesEmptyDir {
	s.SizeLimit = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs struct {
	Server   *string `json:"Server,omitempty" xml:"Server,omitempty" require:"true"`
	Path     *string `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
	ReadOnly *bool   `json:"ReadOnly,omitempty" xml:"ReadOnly,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs) SetServer(v string) *ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs {
	s.Server = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs) SetPath(v string) *ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs {
	s.Path = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs) SetReadOnly(v bool) *ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs {
	s.ReadOnly = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecInitContainers struct {
	Name            *string                                                                        `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Image           *string                                                                        `json:"Image,omitempty" xml:"Image,omitempty" require:"true"`
	ImagePullPolicy *string                                                                        `json:"ImagePullPolicy,omitempty" xml:"ImagePullPolicy,omitempty" require:"true"`
	Stdin           *bool                                                                          `json:"Stdin,omitempty" xml:"Stdin,omitempty" require:"true"`
	StdinOnce       *bool                                                                          `json:"StdinOnce,omitempty" xml:"StdinOnce,omitempty" require:"true"`
	Tty             *bool                                                                          `json:"Tty,omitempty" xml:"Tty,omitempty" require:"true"`
	WorkingDir      *string                                                                        `json:"WorkingDir,omitempty" xml:"WorkingDir,omitempty" require:"true"`
	Env             []*ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv           `json:"Env,omitempty" xml:"Env,omitempty" require:"true" type:"Repeated"`
	Ports           []*ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts         `json:"Ports,omitempty" xml:"Ports,omitempty" require:"true" type:"Repeated"`
	VolumeMounts    []*ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts  `json:"VolumeMounts,omitempty" xml:"VolumeMounts,omitempty" require:"true" type:"Repeated"`
	SecurityContext *ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContext `json:"SecurityContext,omitempty" xml:"SecurityContext,omitempty" require:"true" type:"Struct"`
	Resources       *ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources       `json:"Resources,omitempty" xml:"Resources,omitempty" require:"true" type:"Struct"`
	Command         []*string                                                                      `json:"Command,omitempty" xml:"Command,omitempty" require:"true" type:"Repeated"`
	Args            []*string                                                                      `json:"Args,omitempty" xml:"Args,omitempty" require:"true" type:"Repeated"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainers) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainers) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainers) SetName(v string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainers {
	s.Name = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainers) SetImage(v string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainers {
	s.Image = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainers) SetImagePullPolicy(v string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainers {
	s.ImagePullPolicy = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainers) SetStdin(v bool) *ExportContainerGroupTemplateResponseTemplateSpecInitContainers {
	s.Stdin = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainers) SetStdinOnce(v bool) *ExportContainerGroupTemplateResponseTemplateSpecInitContainers {
	s.StdinOnce = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainers) SetTty(v bool) *ExportContainerGroupTemplateResponseTemplateSpecInitContainers {
	s.Tty = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainers) SetWorkingDir(v string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainers {
	s.WorkingDir = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainers) SetEnv(v []*ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv) *ExportContainerGroupTemplateResponseTemplateSpecInitContainers {
	s.Env = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainers) SetPorts(v []*ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts) *ExportContainerGroupTemplateResponseTemplateSpecInitContainers {
	s.Ports = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainers) SetVolumeMounts(v []*ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts) *ExportContainerGroupTemplateResponseTemplateSpecInitContainers {
	s.VolumeMounts = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainers) SetSecurityContext(v *ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContext) *ExportContainerGroupTemplateResponseTemplateSpecInitContainers {
	s.SecurityContext = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainers) SetResources(v *ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources) *ExportContainerGroupTemplateResponseTemplateSpecInitContainers {
	s.Resources = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainers) SetCommand(v []*string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainers {
	s.Command = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainers) SetArgs(v []*string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainers {
	s.Args = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv struct {
	Name      *string                                                                     `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Value     *string                                                                     `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	ValueFrom *ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFrom `json:"ValueFrom,omitempty" xml:"ValueFrom,omitempty" require:"true" type:"Struct"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv) SetName(v string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv {
	s.Name = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv) SetValue(v string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv {
	s.Value = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv) SetValueFrom(v *ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFrom) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv {
	s.ValueFrom = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFrom struct {
	FieldRef *ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFromFieldRef `json:"FieldRef,omitempty" xml:"FieldRef,omitempty" require:"true" type:"Struct"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFrom) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFrom) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFrom) SetFieldRef(v *ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFromFieldRef) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFrom {
	s.FieldRef = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFromFieldRef struct {
	FieldPath *string `json:"FieldPath,omitempty" xml:"FieldPath,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFromFieldRef) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFromFieldRef) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFromFieldRef) SetFieldPath(v string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFromFieldRef {
	s.FieldPath = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts struct {
	Name          *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Protocol      *string `json:"Protocol,omitempty" xml:"Protocol,omitempty" require:"true"`
	ContainerPort *int    `json:"ContainerPort,omitempty" xml:"ContainerPort,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts) SetName(v string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts {
	s.Name = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts) SetProtocol(v string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts {
	s.Protocol = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts) SetContainerPort(v int) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts {
	s.ContainerPort = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts struct {
	Name      *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	SubPath   *string `json:"SubPath,omitempty" xml:"SubPath,omitempty" require:"true"`
	MountPath *string `json:"MountPath,omitempty" xml:"MountPath,omitempty" require:"true"`
	ReadOnly  *bool   `json:"ReadOnly,omitempty" xml:"ReadOnly,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts) SetName(v string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts {
	s.Name = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts) SetSubPath(v string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts {
	s.SubPath = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts) SetMountPath(v string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts {
	s.MountPath = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts) SetReadOnly(v bool) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts {
	s.ReadOnly = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContext struct {
	Sysctls []*ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls `json:"Sysctls,omitempty" xml:"Sysctls,omitempty" require:"true" type:"Repeated"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContext) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContext) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContext) SetSysctls(v []*ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContext {
	s.Sysctls = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls) SetName(v string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls {
	s.Name = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls) SetValue(v string) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls {
	s.Value = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources struct {
	Cpu    *float32 `json:"Cpu,omitempty" xml:"Cpu,omitempty" require:"true"`
	Memory *float32 `json:"Memory,omitempty" xml:"Memory,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources) SetCpu(v float32) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources {
	s.Cpu = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources) SetMemory(v float32) *ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources {
	s.Memory = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainers struct {
	Name            *string                                                                    `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Image           *string                                                                    `json:"Image,omitempty" xml:"Image,omitempty" require:"true"`
	ImagePullPolicy *string                                                                    `json:"ImagePullPolicy,omitempty" xml:"ImagePullPolicy,omitempty" require:"true"`
	Stdin           *bool                                                                      `json:"Stdin,omitempty" xml:"Stdin,omitempty" require:"true"`
	StdinOnce       *bool                                                                      `json:"StdinOnce,omitempty" xml:"StdinOnce,omitempty" require:"true"`
	Tty             *bool                                                                      `json:"Tty,omitempty" xml:"Tty,omitempty" require:"true"`
	WorkingDir      *string                                                                    `json:"WorkingDir,omitempty" xml:"WorkingDir,omitempty" require:"true"`
	Env             []*ExportContainerGroupTemplateResponseTemplateSpecContainersEnv           `json:"Env,omitempty" xml:"Env,omitempty" require:"true" type:"Repeated"`
	Ports           []*ExportContainerGroupTemplateResponseTemplateSpecContainersPorts         `json:"Ports,omitempty" xml:"Ports,omitempty" require:"true" type:"Repeated"`
	VolumeMounts    []*ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts  `json:"VolumeMounts,omitempty" xml:"VolumeMounts,omitempty" require:"true" type:"Repeated"`
	SecurityContext *ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContext `json:"SecurityContext,omitempty" xml:"SecurityContext,omitempty" require:"true" type:"Struct"`
	Resources       *ExportContainerGroupTemplateResponseTemplateSpecContainersResources       `json:"Resources,omitempty" xml:"Resources,omitempty" require:"true" type:"Struct"`
	ReadinessProbe  *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe  `json:"ReadinessProbe,omitempty" xml:"ReadinessProbe,omitempty" require:"true" type:"Struct"`
	LivenessProbe   *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe   `json:"LivenessProbe,omitempty" xml:"LivenessProbe,omitempty" require:"true" type:"Struct"`
	Command         []*string                                                                  `json:"Command,omitempty" xml:"Command,omitempty" require:"true" type:"Repeated"`
	Args            []*string                                                                  `json:"Args,omitempty" xml:"Args,omitempty" require:"true" type:"Repeated"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainers) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainers) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetName(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.Name = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetImage(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.Image = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetImagePullPolicy(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.ImagePullPolicy = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetStdin(v bool) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.Stdin = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetStdinOnce(v bool) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.StdinOnce = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetTty(v bool) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.Tty = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetWorkingDir(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.WorkingDir = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetEnv(v []*ExportContainerGroupTemplateResponseTemplateSpecContainersEnv) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.Env = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetPorts(v []*ExportContainerGroupTemplateResponseTemplateSpecContainersPorts) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.Ports = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetVolumeMounts(v []*ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.VolumeMounts = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetSecurityContext(v *ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContext) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.SecurityContext = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetResources(v *ExportContainerGroupTemplateResponseTemplateSpecContainersResources) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.Resources = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetReadinessProbe(v *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.ReadinessProbe = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetLivenessProbe(v *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.LivenessProbe = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetCommand(v []*string) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.Command = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainers) SetArgs(v []*string) *ExportContainerGroupTemplateResponseTemplateSpecContainers {
	s.Args = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersEnv struct {
	Name      *string                                                                 `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Value     *string                                                                 `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	ValueFrom *ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFrom `json:"ValueFrom,omitempty" xml:"ValueFrom,omitempty" require:"true" type:"Struct"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersEnv) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersEnv) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersEnv) SetName(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainersEnv {
	s.Name = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersEnv) SetValue(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainersEnv {
	s.Value = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersEnv) SetValueFrom(v *ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFrom) *ExportContainerGroupTemplateResponseTemplateSpecContainersEnv {
	s.ValueFrom = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFrom struct {
	FieldRef *ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFromFieldRef `json:"FieldRef,omitempty" xml:"FieldRef,omitempty" require:"true" type:"Struct"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFrom) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFrom) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFrom) SetFieldRef(v *ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFromFieldRef) *ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFrom {
	s.FieldRef = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFromFieldRef struct {
	FieldPath *string `json:"FieldPath,omitempty" xml:"FieldPath,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFromFieldRef) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFromFieldRef) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFromFieldRef) SetFieldPath(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFromFieldRef {
	s.FieldPath = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersPorts struct {
	Name          *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Protocol      *string `json:"Protocol,omitempty" xml:"Protocol,omitempty" require:"true"`
	ContainerPort *int    `json:"ContainerPort,omitempty" xml:"ContainerPort,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersPorts) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersPorts) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersPorts) SetName(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainersPorts {
	s.Name = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersPorts) SetProtocol(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainersPorts {
	s.Protocol = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersPorts) SetContainerPort(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersPorts {
	s.ContainerPort = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts struct {
	Name      *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	SubPath   *string `json:"SubPath,omitempty" xml:"SubPath,omitempty" require:"true"`
	MountPath *string `json:"MountPath,omitempty" xml:"MountPath,omitempty" require:"true"`
	ReadOnly  *bool   `json:"ReadOnly,omitempty" xml:"ReadOnly,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts) SetName(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts {
	s.Name = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts) SetSubPath(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts {
	s.SubPath = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts) SetMountPath(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts {
	s.MountPath = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts) SetReadOnly(v bool) *ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts {
	s.ReadOnly = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContext struct {
	Sysctls []*ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls `json:"Sysctls,omitempty" xml:"Sysctls,omitempty" require:"true" type:"Repeated"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContext) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContext) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContext) SetSysctls(v []*ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls) *ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContext {
	s.Sysctls = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls) SetName(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls {
	s.Name = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls) SetValue(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls {
	s.Value = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersResources struct {
	Cpu    *float32 `json:"Cpu,omitempty" xml:"Cpu,omitempty" require:"true"`
	Memory *float32 `json:"Memory,omitempty" xml:"Memory,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersResources) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersResources) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersResources) SetCpu(v float32) *ExportContainerGroupTemplateResponseTemplateSpecContainersResources {
	s.Cpu = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersResources) SetMemory(v float32) *ExportContainerGroupTemplateResponseTemplateSpecContainersResources {
	s.Memory = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe struct {
	InitialDelaySeconds *int                                                                               `json:"InitialDelaySeconds,omitempty" xml:"InitialDelaySeconds,omitempty" require:"true"`
	PeriodSeconds       *int                                                                               `json:"PeriodSeconds,omitempty" xml:"PeriodSeconds,omitempty" require:"true"`
	SuccessThreshold    *int                                                                               `json:"SuccessThreshold,omitempty" xml:"SuccessThreshold,omitempty" require:"true"`
	FailureThreshold    *int                                                                               `json:"FailureThreshold,omitempty" xml:"FailureThreshold,omitempty" require:"true"`
	TimeoutSeconds      *int                                                                               `json:"TimeoutSeconds,omitempty" xml:"TimeoutSeconds,omitempty" require:"true"`
	Exec                *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeExec      `json:"Exec,omitempty" xml:"Exec,omitempty" require:"true" type:"Struct"`
	TcpSocket           *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeTcpSocket `json:"TcpSocket,omitempty" xml:"TcpSocket,omitempty" require:"true" type:"Struct"`
	HttpGet             *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet   `json:"HttpGet,omitempty" xml:"HttpGet,omitempty" require:"true" type:"Struct"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe) SetInitialDelaySeconds(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe {
	s.InitialDelaySeconds = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe) SetPeriodSeconds(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe {
	s.PeriodSeconds = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe) SetSuccessThreshold(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe {
	s.SuccessThreshold = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe) SetFailureThreshold(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe {
	s.FailureThreshold = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe) SetTimeoutSeconds(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe {
	s.TimeoutSeconds = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe) SetExec(v *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeExec) *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe {
	s.Exec = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe) SetTcpSocket(v *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeTcpSocket) *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe {
	s.TcpSocket = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe) SetHttpGet(v *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet) *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe {
	s.HttpGet = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeExec struct {
	Command []*string `json:"Command,omitempty" xml:"Command,omitempty" require:"true" type:"Repeated"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeExec) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeExec) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeExec) SetCommand(v []*string) *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeExec {
	s.Command = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeTcpSocket struct {
	Port *int `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeTcpSocket) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeTcpSocket) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeTcpSocket) SetPort(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeTcpSocket {
	s.Port = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet struct {
	Scheme *string `json:"Scheme,omitempty" xml:"Scheme,omitempty" require:"true"`
	Path   *string `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
	Port   *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet) SetScheme(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet {
	s.Scheme = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet) SetPath(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet {
	s.Path = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet) SetPort(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet {
	s.Port = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe struct {
	InitialDelaySeconds *int                                                                              `json:"InitialDelaySeconds,omitempty" xml:"InitialDelaySeconds,omitempty" require:"true"`
	PeriodSeconds       *int                                                                              `json:"PeriodSeconds,omitempty" xml:"PeriodSeconds,omitempty" require:"true"`
	SuccessThreshold    *int                                                                              `json:"SuccessThreshold,omitempty" xml:"SuccessThreshold,omitempty" require:"true"`
	FailureThreshold    *int                                                                              `json:"FailureThreshold,omitempty" xml:"FailureThreshold,omitempty" require:"true"`
	TimeoutSeconds      *int                                                                              `json:"TimeoutSeconds,omitempty" xml:"TimeoutSeconds,omitempty" require:"true"`
	Exec                *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeExec      `json:"Exec,omitempty" xml:"Exec,omitempty" require:"true" type:"Struct"`
	TcpSocket           *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeTcpSocket `json:"TcpSocket,omitempty" xml:"TcpSocket,omitempty" require:"true" type:"Struct"`
	HttpGet             *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet   `json:"HttpGet,omitempty" xml:"HttpGet,omitempty" require:"true" type:"Struct"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe) SetInitialDelaySeconds(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe {
	s.InitialDelaySeconds = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe) SetPeriodSeconds(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe {
	s.PeriodSeconds = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe) SetSuccessThreshold(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe {
	s.SuccessThreshold = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe) SetFailureThreshold(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe {
	s.FailureThreshold = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe) SetTimeoutSeconds(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe {
	s.TimeoutSeconds = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe) SetExec(v *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeExec) *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe {
	s.Exec = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe) SetTcpSocket(v *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeTcpSocket) *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe {
	s.TcpSocket = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe) SetHttpGet(v *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet) *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe {
	s.HttpGet = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeExec struct {
	Command []*string `json:"Command,omitempty" xml:"Command,omitempty" require:"true" type:"Repeated"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeExec) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeExec) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeExec) SetCommand(v []*string) *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeExec {
	s.Command = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeTcpSocket struct {
	Port *int `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeTcpSocket) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeTcpSocket) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeTcpSocket) SetPort(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeTcpSocket {
	s.Port = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet struct {
	Scheme *string `json:"Scheme,omitempty" xml:"Scheme,omitempty" require:"true"`
	Path   *string `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
	Port   *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet) SetScheme(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet {
	s.Scheme = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet) SetPath(v string) *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet {
	s.Path = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet) SetPort(v int) *ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet {
	s.Port = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecDnsConfig struct {
	Options     []*ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions `json:"Options,omitempty" xml:"Options,omitempty" require:"true" type:"Repeated"`
	NameServers []*string                                                           `json:"NameServers,omitempty" xml:"NameServers,omitempty" require:"true" type:"Repeated"`
	Searches    []*string                                                           `json:"Searches,omitempty" xml:"Searches,omitempty" require:"true" type:"Repeated"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecDnsConfig) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecDnsConfig) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecDnsConfig) SetOptions(v []*ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions) *ExportContainerGroupTemplateResponseTemplateSpecDnsConfig {
	s.Options = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecDnsConfig) SetNameServers(v []*string) *ExportContainerGroupTemplateResponseTemplateSpecDnsConfig {
	s.NameServers = v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecDnsConfig) SetSearches(v []*string) *ExportContainerGroupTemplateResponseTemplateSpecDnsConfig {
	s.Searches = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions) SetName(v string) *ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions {
	s.Name = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions) SetValue(v string) *ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions {
	s.Value = &v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecSecurityContext struct {
	Sysctls []*ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls `json:"Sysctls,omitempty" xml:"Sysctls,omitempty" require:"true" type:"Repeated"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecSecurityContext) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecSecurityContext) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecSecurityContext) SetSysctls(v []*ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls) *ExportContainerGroupTemplateResponseTemplateSpecSecurityContext {
	s.Sysctls = v
	return s
}

type ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls) String() string {
	return tea.Prettify(s)
}

func (s ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls) GoString() string {
	return s.String()
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls) SetName(v string) *ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls {
	s.Name = &v
	return s
}

func (s *ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls) SetValue(v string) *ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls {
	s.Value = &v
	return s
}

type RestartContainerGroupRequest struct {
	RegionId         *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ContainerGroupId *string `json:"ContainerGroupId,omitempty" xml:"ContainerGroupId,omitempty" require:"true"`
	ClientToken      *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
}

func (s RestartContainerGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s RestartContainerGroupRequest) GoString() string {
	return s.String()
}

func (s *RestartContainerGroupRequest) SetRegionId(v string) *RestartContainerGroupRequest {
	s.RegionId = &v
	return s
}

func (s *RestartContainerGroupRequest) SetContainerGroupId(v string) *RestartContainerGroupRequest {
	s.ContainerGroupId = &v
	return s
}

func (s *RestartContainerGroupRequest) SetClientToken(v string) *RestartContainerGroupRequest {
	s.ClientToken = &v
	return s
}

type RestartContainerGroupResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s RestartContainerGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s RestartContainerGroupResponse) GoString() string {
	return s.String()
}

func (s *RestartContainerGroupResponse) SetRequestId(v string) *RestartContainerGroupResponse {
	s.RequestId = &v
	return s
}

type UpdateContainerGroupRequest struct {
	RegionId                *string                                               `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ContainerGroupId        *string                                               `json:"ContainerGroupId,omitempty" xml:"ContainerGroupId,omitempty" require:"true"`
	RestartPolicy           *string                                               `json:"RestartPolicy,omitempty" xml:"RestartPolicy,omitempty"`
	Tag                     []*UpdateContainerGroupRequestTag                     `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
	Volume                  []*UpdateContainerGroupRequestVolume                  `json:"Volume,omitempty" xml:"Volume,omitempty" type:"Repeated"`
	DnsConfig               *UpdateContainerGroupRequestDnsConfig                 `json:"DnsConfig,omitempty" xml:"DnsConfig,omitempty" require:"true" type:"Struct"`
	Container               []*UpdateContainerGroupRequestContainer               `json:"Container,omitempty" xml:"Container,omitempty" type:"Repeated"`
	InitContainer           []*UpdateContainerGroupRequestInitContainer           `json:"InitContainer,omitempty" xml:"InitContainer,omitempty" type:"Repeated"`
	ImageRegistryCredential []*UpdateContainerGroupRequestImageRegistryCredential `json:"ImageRegistryCredential,omitempty" xml:"ImageRegistryCredential,omitempty" type:"Repeated"`
	ClientToken             *string                                               `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	Cpu                     *float32                                              `json:"Cpu,omitempty" xml:"Cpu,omitempty"`
	Memory                  *float32                                              `json:"Memory,omitempty" xml:"Memory,omitempty"`
}

func (s UpdateContainerGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequest) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequest) SetRegionId(v string) *UpdateContainerGroupRequest {
	s.RegionId = &v
	return s
}

func (s *UpdateContainerGroupRequest) SetContainerGroupId(v string) *UpdateContainerGroupRequest {
	s.ContainerGroupId = &v
	return s
}

func (s *UpdateContainerGroupRequest) SetRestartPolicy(v string) *UpdateContainerGroupRequest {
	s.RestartPolicy = &v
	return s
}

func (s *UpdateContainerGroupRequest) SetTag(v []*UpdateContainerGroupRequestTag) *UpdateContainerGroupRequest {
	s.Tag = v
	return s
}

func (s *UpdateContainerGroupRequest) SetVolume(v []*UpdateContainerGroupRequestVolume) *UpdateContainerGroupRequest {
	s.Volume = v
	return s
}

func (s *UpdateContainerGroupRequest) SetDnsConfig(v *UpdateContainerGroupRequestDnsConfig) *UpdateContainerGroupRequest {
	s.DnsConfig = v
	return s
}

func (s *UpdateContainerGroupRequest) SetContainer(v []*UpdateContainerGroupRequestContainer) *UpdateContainerGroupRequest {
	s.Container = v
	return s
}

func (s *UpdateContainerGroupRequest) SetInitContainer(v []*UpdateContainerGroupRequestInitContainer) *UpdateContainerGroupRequest {
	s.InitContainer = v
	return s
}

func (s *UpdateContainerGroupRequest) SetImageRegistryCredential(v []*UpdateContainerGroupRequestImageRegistryCredential) *UpdateContainerGroupRequest {
	s.ImageRegistryCredential = v
	return s
}

func (s *UpdateContainerGroupRequest) SetClientToken(v string) *UpdateContainerGroupRequest {
	s.ClientToken = &v
	return s
}

func (s *UpdateContainerGroupRequest) SetCpu(v float32) *UpdateContainerGroupRequest {
	s.Cpu = &v
	return s
}

func (s *UpdateContainerGroupRequest) SetMemory(v float32) *UpdateContainerGroupRequest {
	s.Memory = &v
	return s
}

type UpdateContainerGroupRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s UpdateContainerGroupRequestTag) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestTag) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestTag) SetKey(v string) *UpdateContainerGroupRequestTag {
	s.Key = &v
	return s
}

func (s *UpdateContainerGroupRequestTag) SetValue(v string) *UpdateContainerGroupRequestTag {
	s.Value = &v
	return s
}

type UpdateContainerGroupRequestVolume struct {
	Name             *string                                            `json:"Name,omitempty" xml:"Name,omitempty"`
	Type             *string                                            `json:"Type,omitempty" xml:"Type,omitempty"`
	NFSVolume        *UpdateContainerGroupRequestVolumeNFSVolume        `json:"NFSVolume,omitempty" xml:"NFSVolume,omitempty" require:"true" type:"Struct"`
	ConfigFileVolume *UpdateContainerGroupRequestVolumeConfigFileVolume `json:"ConfigFileVolume,omitempty" xml:"ConfigFileVolume,omitempty" require:"true" type:"Struct"`
	EmptyDirVolume   *UpdateContainerGroupRequestVolumeEmptyDirVolume   `json:"EmptyDirVolume,omitempty" xml:"EmptyDirVolume,omitempty" require:"true" type:"Struct"`
}

func (s UpdateContainerGroupRequestVolume) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestVolume) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestVolume) SetName(v string) *UpdateContainerGroupRequestVolume {
	s.Name = &v
	return s
}

func (s *UpdateContainerGroupRequestVolume) SetType(v string) *UpdateContainerGroupRequestVolume {
	s.Type = &v
	return s
}

func (s *UpdateContainerGroupRequestVolume) SetNFSVolume(v *UpdateContainerGroupRequestVolumeNFSVolume) *UpdateContainerGroupRequestVolume {
	s.NFSVolume = v
	return s
}

func (s *UpdateContainerGroupRequestVolume) SetConfigFileVolume(v *UpdateContainerGroupRequestVolumeConfigFileVolume) *UpdateContainerGroupRequestVolume {
	s.ConfigFileVolume = v
	return s
}

func (s *UpdateContainerGroupRequestVolume) SetEmptyDirVolume(v *UpdateContainerGroupRequestVolumeEmptyDirVolume) *UpdateContainerGroupRequestVolume {
	s.EmptyDirVolume = v
	return s
}

type UpdateContainerGroupRequestVolumeNFSVolume struct {
	Server   *string `json:"Server,omitempty" xml:"Server,omitempty"`
	Path     *string `json:"Path,omitempty" xml:"Path,omitempty"`
	ReadOnly *bool   `json:"ReadOnly,omitempty" xml:"ReadOnly,omitempty"`
}

func (s UpdateContainerGroupRequestVolumeNFSVolume) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestVolumeNFSVolume) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestVolumeNFSVolume) SetServer(v string) *UpdateContainerGroupRequestVolumeNFSVolume {
	s.Server = &v
	return s
}

func (s *UpdateContainerGroupRequestVolumeNFSVolume) SetPath(v string) *UpdateContainerGroupRequestVolumeNFSVolume {
	s.Path = &v
	return s
}

func (s *UpdateContainerGroupRequestVolumeNFSVolume) SetReadOnly(v bool) *UpdateContainerGroupRequestVolumeNFSVolume {
	s.ReadOnly = &v
	return s
}

type UpdateContainerGroupRequestVolumeConfigFileVolume struct {
	ConfigFileToPath []*UpdateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath `json:"ConfigFileToPath,omitempty" xml:"ConfigFileToPath,omitempty" require:"true" type:"Repeated"`
}

func (s UpdateContainerGroupRequestVolumeConfigFileVolume) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestVolumeConfigFileVolume) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestVolumeConfigFileVolume) SetConfigFileToPath(v []*UpdateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath) *UpdateContainerGroupRequestVolumeConfigFileVolume {
	s.ConfigFileToPath = v
	return s
}

type UpdateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath struct {
	Content *string `json:"Content,omitempty" xml:"Content,omitempty"`
	Path    *string `json:"Path,omitempty" xml:"Path,omitempty"`
}

func (s UpdateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath) SetContent(v string) *UpdateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath {
	s.Content = &v
	return s
}

func (s *UpdateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath) SetPath(v string) *UpdateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath {
	s.Path = &v
	return s
}

type UpdateContainerGroupRequestVolumeEmptyDirVolume struct {
	Medium *string `json:"Medium,omitempty" xml:"Medium,omitempty"`
}

func (s UpdateContainerGroupRequestVolumeEmptyDirVolume) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestVolumeEmptyDirVolume) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestVolumeEmptyDirVolume) SetMedium(v string) *UpdateContainerGroupRequestVolumeEmptyDirVolume {
	s.Medium = &v
	return s
}

type UpdateContainerGroupRequestDnsConfig struct {
	NameServer []*string                                     `json:"NameServer,omitempty" xml:"NameServer,omitempty" type:"Repeated"`
	Search     []*string                                     `json:"Search,omitempty" xml:"Search,omitempty" type:"Repeated"`
	Option     []*UpdateContainerGroupRequestDnsConfigOption `json:"Option,omitempty" xml:"Option,omitempty" type:"Repeated"`
}

func (s UpdateContainerGroupRequestDnsConfig) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestDnsConfig) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestDnsConfig) SetNameServer(v []*string) *UpdateContainerGroupRequestDnsConfig {
	s.NameServer = v
	return s
}

func (s *UpdateContainerGroupRequestDnsConfig) SetSearch(v []*string) *UpdateContainerGroupRequestDnsConfig {
	s.Search = v
	return s
}

func (s *UpdateContainerGroupRequestDnsConfig) SetOption(v []*UpdateContainerGroupRequestDnsConfigOption) *UpdateContainerGroupRequestDnsConfig {
	s.Option = v
	return s
}

type UpdateContainerGroupRequestDnsConfigOption struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s UpdateContainerGroupRequestDnsConfigOption) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestDnsConfigOption) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestDnsConfigOption) SetName(v string) *UpdateContainerGroupRequestDnsConfigOption {
	s.Name = &v
	return s
}

func (s *UpdateContainerGroupRequestDnsConfigOption) SetValue(v string) *UpdateContainerGroupRequestDnsConfigOption {
	s.Value = &v
	return s
}

type UpdateContainerGroupRequestContainer struct {
	Name            *string                                               `json:"Name,omitempty" xml:"Name,omitempty"`
	Image           *string                                               `json:"Image,omitempty" xml:"Image,omitempty"`
	Cpu             *float32                                              `json:"Cpu,omitempty" xml:"Cpu,omitempty"`
	Memory          *float32                                              `json:"Memory,omitempty" xml:"Memory,omitempty"`
	WorkingDir      *string                                               `json:"WorkingDir,omitempty" xml:"WorkingDir,omitempty"`
	ImagePullPolicy *string                                               `json:"ImagePullPolicy,omitempty" xml:"ImagePullPolicy,omitempty"`
	Stdin           *bool                                                 `json:"Stdin,omitempty" xml:"Stdin,omitempty"`
	StdinOnce       *bool                                                 `json:"StdinOnce,omitempty" xml:"StdinOnce,omitempty"`
	Tty             *bool                                                 `json:"Tty,omitempty" xml:"Tty,omitempty"`
	Command         []*string                                             `json:"Command,omitempty" xml:"Command,omitempty" require:"true" type:"Repeated"`
	Arg             []*string                                             `json:"Arg,omitempty" xml:"Arg,omitempty" require:"true" type:"Repeated"`
	EnvironmentVar  []*UpdateContainerGroupRequestContainerEnvironmentVar `json:"EnvironmentVar,omitempty" xml:"EnvironmentVar,omitempty" require:"true" type:"Repeated"`
	Port            []*UpdateContainerGroupRequestContainerPort           `json:"Port,omitempty" xml:"Port,omitempty" require:"true" type:"Repeated"`
	VolumeMount     []*UpdateContainerGroupRequestContainerVolumeMount    `json:"VolumeMount,omitempty" xml:"VolumeMount,omitempty" require:"true" type:"Repeated"`
	ReadinessProbe  *UpdateContainerGroupRequestContainerReadinessProbe   `json:"ReadinessProbe,omitempty" xml:"ReadinessProbe,omitempty" require:"true" type:"Struct"`
	LivenessProbe   *UpdateContainerGroupRequestContainerLivenessProbe    `json:"LivenessProbe,omitempty" xml:"LivenessProbe,omitempty" require:"true" type:"Struct"`
	SecurityContext *UpdateContainerGroupRequestContainerSecurityContext  `json:"SecurityContext,omitempty" xml:"SecurityContext,omitempty" require:"true" type:"Struct"`
	Gpu             *int                                                  `json:"Gpu,omitempty" xml:"Gpu,omitempty"`
}

func (s UpdateContainerGroupRequestContainer) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestContainer) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestContainer) SetName(v string) *UpdateContainerGroupRequestContainer {
	s.Name = &v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetImage(v string) *UpdateContainerGroupRequestContainer {
	s.Image = &v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetCpu(v float32) *UpdateContainerGroupRequestContainer {
	s.Cpu = &v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetMemory(v float32) *UpdateContainerGroupRequestContainer {
	s.Memory = &v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetWorkingDir(v string) *UpdateContainerGroupRequestContainer {
	s.WorkingDir = &v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetImagePullPolicy(v string) *UpdateContainerGroupRequestContainer {
	s.ImagePullPolicy = &v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetStdin(v bool) *UpdateContainerGroupRequestContainer {
	s.Stdin = &v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetStdinOnce(v bool) *UpdateContainerGroupRequestContainer {
	s.StdinOnce = &v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetTty(v bool) *UpdateContainerGroupRequestContainer {
	s.Tty = &v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetCommand(v []*string) *UpdateContainerGroupRequestContainer {
	s.Command = v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetArg(v []*string) *UpdateContainerGroupRequestContainer {
	s.Arg = v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetEnvironmentVar(v []*UpdateContainerGroupRequestContainerEnvironmentVar) *UpdateContainerGroupRequestContainer {
	s.EnvironmentVar = v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetPort(v []*UpdateContainerGroupRequestContainerPort) *UpdateContainerGroupRequestContainer {
	s.Port = v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetVolumeMount(v []*UpdateContainerGroupRequestContainerVolumeMount) *UpdateContainerGroupRequestContainer {
	s.VolumeMount = v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetReadinessProbe(v *UpdateContainerGroupRequestContainerReadinessProbe) *UpdateContainerGroupRequestContainer {
	s.ReadinessProbe = v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetLivenessProbe(v *UpdateContainerGroupRequestContainerLivenessProbe) *UpdateContainerGroupRequestContainer {
	s.LivenessProbe = v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetSecurityContext(v *UpdateContainerGroupRequestContainerSecurityContext) *UpdateContainerGroupRequestContainer {
	s.SecurityContext = v
	return s
}

func (s *UpdateContainerGroupRequestContainer) SetGpu(v int) *UpdateContainerGroupRequestContainer {
	s.Gpu = &v
	return s
}

type UpdateContainerGroupRequestContainerEnvironmentVar struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s UpdateContainerGroupRequestContainerEnvironmentVar) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestContainerEnvironmentVar) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestContainerEnvironmentVar) SetKey(v string) *UpdateContainerGroupRequestContainerEnvironmentVar {
	s.Key = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerEnvironmentVar) SetValue(v string) *UpdateContainerGroupRequestContainerEnvironmentVar {
	s.Value = &v
	return s
}

type UpdateContainerGroupRequestContainerPort struct {
	Protocol *string `json:"Protocol,omitempty" xml:"Protocol,omitempty"`
	Port     *int    `json:"Port,omitempty" xml:"Port,omitempty"`
}

func (s UpdateContainerGroupRequestContainerPort) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestContainerPort) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestContainerPort) SetProtocol(v string) *UpdateContainerGroupRequestContainerPort {
	s.Protocol = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerPort) SetPort(v int) *UpdateContainerGroupRequestContainerPort {
	s.Port = &v
	return s
}

type UpdateContainerGroupRequestContainerVolumeMount struct {
	Name      *string `json:"Name,omitempty" xml:"Name,omitempty"`
	MountPath *string `json:"MountPath,omitempty" xml:"MountPath,omitempty"`
	SubPath   *string `json:"SubPath,omitempty" xml:"SubPath,omitempty"`
	ReadOnly  *bool   `json:"ReadOnly,omitempty" xml:"ReadOnly,omitempty"`
}

func (s UpdateContainerGroupRequestContainerVolumeMount) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestContainerVolumeMount) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestContainerVolumeMount) SetName(v string) *UpdateContainerGroupRequestContainerVolumeMount {
	s.Name = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerVolumeMount) SetMountPath(v string) *UpdateContainerGroupRequestContainerVolumeMount {
	s.MountPath = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerVolumeMount) SetSubPath(v string) *UpdateContainerGroupRequestContainerVolumeMount {
	s.SubPath = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerVolumeMount) SetReadOnly(v bool) *UpdateContainerGroupRequestContainerVolumeMount {
	s.ReadOnly = &v
	return s
}

type UpdateContainerGroupRequestContainerReadinessProbe struct {
	TcpSocket           *UpdateContainerGroupRequestContainerReadinessProbeTcpSocket `json:"TcpSocket,omitempty" xml:"TcpSocket,omitempty" require:"true" type:"Struct"`
	Exec                *UpdateContainerGroupRequestContainerReadinessProbeExec      `json:"Exec,omitempty" xml:"Exec,omitempty" require:"true" type:"Struct"`
	HttpGet             *UpdateContainerGroupRequestContainerReadinessProbeHttpGet   `json:"HttpGet,omitempty" xml:"HttpGet,omitempty" require:"true" type:"Struct"`
	InitialDelaySeconds *int                                                         `json:"InitialDelaySeconds,omitempty" xml:"InitialDelaySeconds,omitempty"`
	PeriodSeconds       *int                                                         `json:"PeriodSeconds,omitempty" xml:"PeriodSeconds,omitempty"`
	SuccessThreshold    *int                                                         `json:"SuccessThreshold,omitempty" xml:"SuccessThreshold,omitempty"`
	FailureThreshold    *int                                                         `json:"FailureThreshold,omitempty" xml:"FailureThreshold,omitempty"`
	TimeoutSeconds      *int                                                         `json:"TimeoutSeconds,omitempty" xml:"TimeoutSeconds,omitempty"`
}

func (s UpdateContainerGroupRequestContainerReadinessProbe) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestContainerReadinessProbe) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestContainerReadinessProbe) SetTcpSocket(v *UpdateContainerGroupRequestContainerReadinessProbeTcpSocket) *UpdateContainerGroupRequestContainerReadinessProbe {
	s.TcpSocket = v
	return s
}

func (s *UpdateContainerGroupRequestContainerReadinessProbe) SetExec(v *UpdateContainerGroupRequestContainerReadinessProbeExec) *UpdateContainerGroupRequestContainerReadinessProbe {
	s.Exec = v
	return s
}

func (s *UpdateContainerGroupRequestContainerReadinessProbe) SetHttpGet(v *UpdateContainerGroupRequestContainerReadinessProbeHttpGet) *UpdateContainerGroupRequestContainerReadinessProbe {
	s.HttpGet = v
	return s
}

func (s *UpdateContainerGroupRequestContainerReadinessProbe) SetInitialDelaySeconds(v int) *UpdateContainerGroupRequestContainerReadinessProbe {
	s.InitialDelaySeconds = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerReadinessProbe) SetPeriodSeconds(v int) *UpdateContainerGroupRequestContainerReadinessProbe {
	s.PeriodSeconds = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerReadinessProbe) SetSuccessThreshold(v int) *UpdateContainerGroupRequestContainerReadinessProbe {
	s.SuccessThreshold = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerReadinessProbe) SetFailureThreshold(v int) *UpdateContainerGroupRequestContainerReadinessProbe {
	s.FailureThreshold = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerReadinessProbe) SetTimeoutSeconds(v int) *UpdateContainerGroupRequestContainerReadinessProbe {
	s.TimeoutSeconds = &v
	return s
}

type UpdateContainerGroupRequestContainerReadinessProbeTcpSocket struct {
	Port *int `json:"Port,omitempty" xml:"Port,omitempty"`
}

func (s UpdateContainerGroupRequestContainerReadinessProbeTcpSocket) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestContainerReadinessProbeTcpSocket) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestContainerReadinessProbeTcpSocket) SetPort(v int) *UpdateContainerGroupRequestContainerReadinessProbeTcpSocket {
	s.Port = &v
	return s
}

type UpdateContainerGroupRequestContainerReadinessProbeExec struct {
	Command []*string `json:"Command,omitempty" xml:"Command,omitempty" require:"true" type:"Repeated"`
}

func (s UpdateContainerGroupRequestContainerReadinessProbeExec) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestContainerReadinessProbeExec) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestContainerReadinessProbeExec) SetCommand(v []*string) *UpdateContainerGroupRequestContainerReadinessProbeExec {
	s.Command = v
	return s
}

type UpdateContainerGroupRequestContainerReadinessProbeHttpGet struct {
	Path   *string `json:"Path,omitempty" xml:"Path,omitempty"`
	Port   *int    `json:"Port,omitempty" xml:"Port,omitempty"`
	Scheme *string `json:"Scheme,omitempty" xml:"Scheme,omitempty"`
}

func (s UpdateContainerGroupRequestContainerReadinessProbeHttpGet) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestContainerReadinessProbeHttpGet) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestContainerReadinessProbeHttpGet) SetPath(v string) *UpdateContainerGroupRequestContainerReadinessProbeHttpGet {
	s.Path = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerReadinessProbeHttpGet) SetPort(v int) *UpdateContainerGroupRequestContainerReadinessProbeHttpGet {
	s.Port = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerReadinessProbeHttpGet) SetScheme(v string) *UpdateContainerGroupRequestContainerReadinessProbeHttpGet {
	s.Scheme = &v
	return s
}

type UpdateContainerGroupRequestContainerLivenessProbe struct {
	TcpSocket           *UpdateContainerGroupRequestContainerLivenessProbeTcpSocket `json:"TcpSocket,omitempty" xml:"TcpSocket,omitempty" require:"true" type:"Struct"`
	Exec                *UpdateContainerGroupRequestContainerLivenessProbeExec      `json:"Exec,omitempty" xml:"Exec,omitempty" require:"true" type:"Struct"`
	HttpGet             *UpdateContainerGroupRequestContainerLivenessProbeHttpGet   `json:"HttpGet,omitempty" xml:"HttpGet,omitempty" require:"true" type:"Struct"`
	InitialDelaySeconds *int                                                        `json:"InitialDelaySeconds,omitempty" xml:"InitialDelaySeconds,omitempty"`
	PeriodSeconds       *int                                                        `json:"PeriodSeconds,omitempty" xml:"PeriodSeconds,omitempty"`
	SuccessThreshold    *int                                                        `json:"SuccessThreshold,omitempty" xml:"SuccessThreshold,omitempty"`
	FailureThreshold    *int                                                        `json:"FailureThreshold,omitempty" xml:"FailureThreshold,omitempty" require:"true"`
	TimeoutSeconds      *int                                                        `json:"TimeoutSeconds,omitempty" xml:"TimeoutSeconds,omitempty"`
}

func (s UpdateContainerGroupRequestContainerLivenessProbe) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestContainerLivenessProbe) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestContainerLivenessProbe) SetTcpSocket(v *UpdateContainerGroupRequestContainerLivenessProbeTcpSocket) *UpdateContainerGroupRequestContainerLivenessProbe {
	s.TcpSocket = v
	return s
}

func (s *UpdateContainerGroupRequestContainerLivenessProbe) SetExec(v *UpdateContainerGroupRequestContainerLivenessProbeExec) *UpdateContainerGroupRequestContainerLivenessProbe {
	s.Exec = v
	return s
}

func (s *UpdateContainerGroupRequestContainerLivenessProbe) SetHttpGet(v *UpdateContainerGroupRequestContainerLivenessProbeHttpGet) *UpdateContainerGroupRequestContainerLivenessProbe {
	s.HttpGet = v
	return s
}

func (s *UpdateContainerGroupRequestContainerLivenessProbe) SetInitialDelaySeconds(v int) *UpdateContainerGroupRequestContainerLivenessProbe {
	s.InitialDelaySeconds = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerLivenessProbe) SetPeriodSeconds(v int) *UpdateContainerGroupRequestContainerLivenessProbe {
	s.PeriodSeconds = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerLivenessProbe) SetSuccessThreshold(v int) *UpdateContainerGroupRequestContainerLivenessProbe {
	s.SuccessThreshold = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerLivenessProbe) SetFailureThreshold(v int) *UpdateContainerGroupRequestContainerLivenessProbe {
	s.FailureThreshold = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerLivenessProbe) SetTimeoutSeconds(v int) *UpdateContainerGroupRequestContainerLivenessProbe {
	s.TimeoutSeconds = &v
	return s
}

type UpdateContainerGroupRequestContainerLivenessProbeTcpSocket struct {
	Port *int `json:"Port,omitempty" xml:"Port,omitempty"`
}

func (s UpdateContainerGroupRequestContainerLivenessProbeTcpSocket) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestContainerLivenessProbeTcpSocket) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestContainerLivenessProbeTcpSocket) SetPort(v int) *UpdateContainerGroupRequestContainerLivenessProbeTcpSocket {
	s.Port = &v
	return s
}

type UpdateContainerGroupRequestContainerLivenessProbeExec struct {
	Command []*string `json:"Command,omitempty" xml:"Command,omitempty" require:"true" type:"Repeated"`
}

func (s UpdateContainerGroupRequestContainerLivenessProbeExec) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestContainerLivenessProbeExec) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestContainerLivenessProbeExec) SetCommand(v []*string) *UpdateContainerGroupRequestContainerLivenessProbeExec {
	s.Command = v
	return s
}

type UpdateContainerGroupRequestContainerLivenessProbeHttpGet struct {
	Path   *string `json:"Path,omitempty" xml:"Path,omitempty"`
	Port   *int    `json:"Port,omitempty" xml:"Port,omitempty"`
	Scheme *string `json:"Scheme,omitempty" xml:"Scheme,omitempty"`
}

func (s UpdateContainerGroupRequestContainerLivenessProbeHttpGet) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestContainerLivenessProbeHttpGet) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestContainerLivenessProbeHttpGet) SetPath(v string) *UpdateContainerGroupRequestContainerLivenessProbeHttpGet {
	s.Path = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerLivenessProbeHttpGet) SetPort(v int) *UpdateContainerGroupRequestContainerLivenessProbeHttpGet {
	s.Port = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerLivenessProbeHttpGet) SetScheme(v string) *UpdateContainerGroupRequestContainerLivenessProbeHttpGet {
	s.Scheme = &v
	return s
}

type UpdateContainerGroupRequestContainerSecurityContext struct {
	ReadOnlyRootFilesystem *bool                                                          `json:"ReadOnlyRootFilesystem,omitempty" xml:"ReadOnlyRootFilesystem,omitempty"`
	RunAsUser              *int64                                                         `json:"RunAsUser,omitempty" xml:"RunAsUser,omitempty"`
	Capability             *UpdateContainerGroupRequestContainerSecurityContextCapability `json:"Capability,omitempty" xml:"Capability,omitempty" require:"true" type:"Struct"`
}

func (s UpdateContainerGroupRequestContainerSecurityContext) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestContainerSecurityContext) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestContainerSecurityContext) SetReadOnlyRootFilesystem(v bool) *UpdateContainerGroupRequestContainerSecurityContext {
	s.ReadOnlyRootFilesystem = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerSecurityContext) SetRunAsUser(v int64) *UpdateContainerGroupRequestContainerSecurityContext {
	s.RunAsUser = &v
	return s
}

func (s *UpdateContainerGroupRequestContainerSecurityContext) SetCapability(v *UpdateContainerGroupRequestContainerSecurityContextCapability) *UpdateContainerGroupRequestContainerSecurityContext {
	s.Capability = v
	return s
}

type UpdateContainerGroupRequestContainerSecurityContextCapability struct {
	Add []*string `json:"Add,omitempty" xml:"Add,omitempty" require:"true" type:"Repeated"`
}

func (s UpdateContainerGroupRequestContainerSecurityContextCapability) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestContainerSecurityContextCapability) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestContainerSecurityContextCapability) SetAdd(v []*string) *UpdateContainerGroupRequestContainerSecurityContextCapability {
	s.Add = v
	return s
}

type UpdateContainerGroupRequestInitContainer struct {
	Name            *string                                                   `json:"Name,omitempty" xml:"Name,omitempty"`
	Image           *string                                                   `json:"Image,omitempty" xml:"Image,omitempty"`
	Cpu             *float32                                                  `json:"Cpu,omitempty" xml:"Cpu,omitempty"`
	Memory          *float32                                                  `json:"Memory,omitempty" xml:"Memory,omitempty"`
	WorkingDir      *string                                                   `json:"WorkingDir,omitempty" xml:"WorkingDir,omitempty"`
	ImagePullPolicy *string                                                   `json:"ImagePullPolicy,omitempty" xml:"ImagePullPolicy,omitempty"`
	Stdin           *bool                                                     `json:"Stdin,omitempty" xml:"Stdin,omitempty"`
	StdinOnce       *bool                                                     `json:"StdinOnce,omitempty" xml:"StdinOnce,omitempty"`
	Tty             *bool                                                     `json:"Tty,omitempty" xml:"Tty,omitempty"`
	Command         []*string                                                 `json:"Command,omitempty" xml:"Command,omitempty" require:"true" type:"Repeated"`
	Arg             []*string                                                 `json:"Arg,omitempty" xml:"Arg,omitempty" require:"true" type:"Repeated"`
	EnvironmentVar  []*UpdateContainerGroupRequestInitContainerEnvironmentVar `json:"EnvironmentVar,omitempty" xml:"EnvironmentVar,omitempty" require:"true" type:"Repeated"`
	Port            []*UpdateContainerGroupRequestInitContainerPort           `json:"Port,omitempty" xml:"Port,omitempty" require:"true" type:"Repeated"`
	VolumeMount     []*UpdateContainerGroupRequestInitContainerVolumeMount    `json:"VolumeMount,omitempty" xml:"VolumeMount,omitempty" require:"true" type:"Repeated"`
	SecurityContext *UpdateContainerGroupRequestInitContainerSecurityContext  `json:"SecurityContext,omitempty" xml:"SecurityContext,omitempty" require:"true" type:"Struct"`
	Gpu             *int                                                      `json:"Gpu,omitempty" xml:"Gpu,omitempty"`
}

func (s UpdateContainerGroupRequestInitContainer) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestInitContainer) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestInitContainer) SetName(v string) *UpdateContainerGroupRequestInitContainer {
	s.Name = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetImage(v string) *UpdateContainerGroupRequestInitContainer {
	s.Image = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetCpu(v float32) *UpdateContainerGroupRequestInitContainer {
	s.Cpu = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetMemory(v float32) *UpdateContainerGroupRequestInitContainer {
	s.Memory = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetWorkingDir(v string) *UpdateContainerGroupRequestInitContainer {
	s.WorkingDir = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetImagePullPolicy(v string) *UpdateContainerGroupRequestInitContainer {
	s.ImagePullPolicy = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetStdin(v bool) *UpdateContainerGroupRequestInitContainer {
	s.Stdin = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetStdinOnce(v bool) *UpdateContainerGroupRequestInitContainer {
	s.StdinOnce = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetTty(v bool) *UpdateContainerGroupRequestInitContainer {
	s.Tty = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetCommand(v []*string) *UpdateContainerGroupRequestInitContainer {
	s.Command = v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetArg(v []*string) *UpdateContainerGroupRequestInitContainer {
	s.Arg = v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetEnvironmentVar(v []*UpdateContainerGroupRequestInitContainerEnvironmentVar) *UpdateContainerGroupRequestInitContainer {
	s.EnvironmentVar = v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetPort(v []*UpdateContainerGroupRequestInitContainerPort) *UpdateContainerGroupRequestInitContainer {
	s.Port = v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetVolumeMount(v []*UpdateContainerGroupRequestInitContainerVolumeMount) *UpdateContainerGroupRequestInitContainer {
	s.VolumeMount = v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetSecurityContext(v *UpdateContainerGroupRequestInitContainerSecurityContext) *UpdateContainerGroupRequestInitContainer {
	s.SecurityContext = v
	return s
}

func (s *UpdateContainerGroupRequestInitContainer) SetGpu(v int) *UpdateContainerGroupRequestInitContainer {
	s.Gpu = &v
	return s
}

type UpdateContainerGroupRequestInitContainerEnvironmentVar struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s UpdateContainerGroupRequestInitContainerEnvironmentVar) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestInitContainerEnvironmentVar) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestInitContainerEnvironmentVar) SetKey(v string) *UpdateContainerGroupRequestInitContainerEnvironmentVar {
	s.Key = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainerEnvironmentVar) SetValue(v string) *UpdateContainerGroupRequestInitContainerEnvironmentVar {
	s.Value = &v
	return s
}

type UpdateContainerGroupRequestInitContainerPort struct {
	Port     *int    `json:"Port,omitempty" xml:"Port,omitempty"`
	Protocol *string `json:"Protocol,omitempty" xml:"Protocol,omitempty" require:"true"`
}

func (s UpdateContainerGroupRequestInitContainerPort) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestInitContainerPort) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestInitContainerPort) SetPort(v int) *UpdateContainerGroupRequestInitContainerPort {
	s.Port = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainerPort) SetProtocol(v string) *UpdateContainerGroupRequestInitContainerPort {
	s.Protocol = &v
	return s
}

type UpdateContainerGroupRequestInitContainerVolumeMount struct {
	Name      *string `json:"Name,omitempty" xml:"Name,omitempty"`
	MountPath *string `json:"MountPath,omitempty" xml:"MountPath,omitempty"`
	SubPath   *string `json:"SubPath,omitempty" xml:"SubPath,omitempty"`
	ReadOnly  *bool   `json:"ReadOnly,omitempty" xml:"ReadOnly,omitempty"`
}

func (s UpdateContainerGroupRequestInitContainerVolumeMount) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestInitContainerVolumeMount) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestInitContainerVolumeMount) SetName(v string) *UpdateContainerGroupRequestInitContainerVolumeMount {
	s.Name = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainerVolumeMount) SetMountPath(v string) *UpdateContainerGroupRequestInitContainerVolumeMount {
	s.MountPath = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainerVolumeMount) SetSubPath(v string) *UpdateContainerGroupRequestInitContainerVolumeMount {
	s.SubPath = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainerVolumeMount) SetReadOnly(v bool) *UpdateContainerGroupRequestInitContainerVolumeMount {
	s.ReadOnly = &v
	return s
}

type UpdateContainerGroupRequestInitContainerSecurityContext struct {
	ReadOnlyRootFilesystem *bool                                                              `json:"ReadOnlyRootFilesystem,omitempty" xml:"ReadOnlyRootFilesystem,omitempty"`
	RunAsUser              *int64                                                             `json:"RunAsUser,omitempty" xml:"RunAsUser,omitempty"`
	Capability             *UpdateContainerGroupRequestInitContainerSecurityContextCapability `json:"Capability,omitempty" xml:"Capability,omitempty" require:"true" type:"Struct"`
}

func (s UpdateContainerGroupRequestInitContainerSecurityContext) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestInitContainerSecurityContext) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestInitContainerSecurityContext) SetReadOnlyRootFilesystem(v bool) *UpdateContainerGroupRequestInitContainerSecurityContext {
	s.ReadOnlyRootFilesystem = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainerSecurityContext) SetRunAsUser(v int64) *UpdateContainerGroupRequestInitContainerSecurityContext {
	s.RunAsUser = &v
	return s
}

func (s *UpdateContainerGroupRequestInitContainerSecurityContext) SetCapability(v *UpdateContainerGroupRequestInitContainerSecurityContextCapability) *UpdateContainerGroupRequestInitContainerSecurityContext {
	s.Capability = v
	return s
}

type UpdateContainerGroupRequestInitContainerSecurityContextCapability struct {
	Add []*string `json:"Add,omitempty" xml:"Add,omitempty" require:"true" type:"Repeated"`
}

func (s UpdateContainerGroupRequestInitContainerSecurityContextCapability) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestInitContainerSecurityContextCapability) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestInitContainerSecurityContextCapability) SetAdd(v []*string) *UpdateContainerGroupRequestInitContainerSecurityContextCapability {
	s.Add = v
	return s
}

type UpdateContainerGroupRequestImageRegistryCredential struct {
	Server   *string `json:"Server,omitempty" xml:"Server,omitempty"`
	UserName *string `json:"UserName,omitempty" xml:"UserName,omitempty"`
	Password *string `json:"Password,omitempty" xml:"Password,omitempty"`
}

func (s UpdateContainerGroupRequestImageRegistryCredential) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupRequestImageRegistryCredential) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupRequestImageRegistryCredential) SetServer(v string) *UpdateContainerGroupRequestImageRegistryCredential {
	s.Server = &v
	return s
}

func (s *UpdateContainerGroupRequestImageRegistryCredential) SetUserName(v string) *UpdateContainerGroupRequestImageRegistryCredential {
	s.UserName = &v
	return s
}

func (s *UpdateContainerGroupRequestImageRegistryCredential) SetPassword(v string) *UpdateContainerGroupRequestImageRegistryCredential {
	s.Password = &v
	return s
}

type UpdateContainerGroupResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateContainerGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateContainerGroupResponse) GoString() string {
	return s.String()
}

func (s *UpdateContainerGroupResponse) SetRequestId(v string) *UpdateContainerGroupResponse {
	s.RequestId = &v
	return s
}

type DescribeContainerGroupPriceRequest struct {
	RegionId       *string  `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Cpu            *float32 `json:"Cpu,omitempty" xml:"Cpu,omitempty"`
	Memory         *float32 `json:"Memory,omitempty" xml:"Memory,omitempty"`
	InstanceType   *string  `json:"InstanceType,omitempty" xml:"InstanceType,omitempty"`
	SpotStrategy   *string  `json:"SpotStrategy,omitempty" xml:"SpotStrategy,omitempty"`
	ZoneId         *string  `json:"ZoneId,omitempty" xml:"ZoneId,omitempty"`
	SpotPriceLimit *float32 `json:"SpotPriceLimit,omitempty" xml:"SpotPriceLimit,omitempty"`
}

func (s DescribeContainerGroupPriceRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupPriceRequest) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupPriceRequest) SetRegionId(v string) *DescribeContainerGroupPriceRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeContainerGroupPriceRequest) SetCpu(v float32) *DescribeContainerGroupPriceRequest {
	s.Cpu = &v
	return s
}

func (s *DescribeContainerGroupPriceRequest) SetMemory(v float32) *DescribeContainerGroupPriceRequest {
	s.Memory = &v
	return s
}

func (s *DescribeContainerGroupPriceRequest) SetInstanceType(v string) *DescribeContainerGroupPriceRequest {
	s.InstanceType = &v
	return s
}

func (s *DescribeContainerGroupPriceRequest) SetSpotStrategy(v string) *DescribeContainerGroupPriceRequest {
	s.SpotStrategy = &v
	return s
}

func (s *DescribeContainerGroupPriceRequest) SetZoneId(v string) *DescribeContainerGroupPriceRequest {
	s.ZoneId = &v
	return s
}

func (s *DescribeContainerGroupPriceRequest) SetSpotPriceLimit(v float32) *DescribeContainerGroupPriceRequest {
	s.SpotPriceLimit = &v
	return s
}

type DescribeContainerGroupPriceResponse struct {
	RequestId *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PriceInfo *DescribeContainerGroupPriceResponsePriceInfo `json:"PriceInfo,omitempty" xml:"PriceInfo,omitempty" require:"true" type:"Struct"`
}

func (s DescribeContainerGroupPriceResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupPriceResponse) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupPriceResponse) SetRequestId(v string) *DescribeContainerGroupPriceResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeContainerGroupPriceResponse) SetPriceInfo(v *DescribeContainerGroupPriceResponsePriceInfo) *DescribeContainerGroupPriceResponse {
	s.PriceInfo = v
	return s
}

type DescribeContainerGroupPriceResponsePriceInfo struct {
	Rules      *DescribeContainerGroupPriceResponsePriceInfoRules      `json:"Rules,omitempty" xml:"Rules,omitempty" require:"true" type:"Struct"`
	SpotPrices *DescribeContainerGroupPriceResponsePriceInfoSpotPrices `json:"SpotPrices,omitempty" xml:"SpotPrices,omitempty" require:"true" type:"Struct"`
	Price      *DescribeContainerGroupPriceResponsePriceInfoPrice      `json:"Price,omitempty" xml:"Price,omitempty" require:"true" type:"Struct"`
}

func (s DescribeContainerGroupPriceResponsePriceInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupPriceResponsePriceInfo) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupPriceResponsePriceInfo) SetRules(v *DescribeContainerGroupPriceResponsePriceInfoRules) *DescribeContainerGroupPriceResponsePriceInfo {
	s.Rules = v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfo) SetSpotPrices(v *DescribeContainerGroupPriceResponsePriceInfoSpotPrices) *DescribeContainerGroupPriceResponsePriceInfo {
	s.SpotPrices = v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfo) SetPrice(v *DescribeContainerGroupPriceResponsePriceInfoPrice) *DescribeContainerGroupPriceResponsePriceInfo {
	s.Price = v
	return s
}

type DescribeContainerGroupPriceResponsePriceInfoRules struct {
	Rule []*DescribeContainerGroupPriceResponsePriceInfoRulesRule `json:"Rule,omitempty" xml:"Rule,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupPriceResponsePriceInfoRules) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupPriceResponsePriceInfoRules) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupPriceResponsePriceInfoRules) SetRule(v []*DescribeContainerGroupPriceResponsePriceInfoRulesRule) *DescribeContainerGroupPriceResponsePriceInfoRules {
	s.Rule = v
	return s
}

type DescribeContainerGroupPriceResponsePriceInfoRulesRule struct {
	RuleId      *int64  `json:"RuleId,omitempty" xml:"RuleId,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeContainerGroupPriceResponsePriceInfoRulesRule) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupPriceResponsePriceInfoRulesRule) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupPriceResponsePriceInfoRulesRule) SetRuleId(v int64) *DescribeContainerGroupPriceResponsePriceInfoRulesRule {
	s.RuleId = &v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfoRulesRule) SetDescription(v string) *DescribeContainerGroupPriceResponsePriceInfoRulesRule {
	s.Description = &v
	return s
}

type DescribeContainerGroupPriceResponsePriceInfoSpotPrices struct {
	SpotPrice []*DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice `json:"SpotPrice,omitempty" xml:"SpotPrice,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupPriceResponsePriceInfoSpotPrices) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupPriceResponsePriceInfoSpotPrices) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupPriceResponsePriceInfoSpotPrices) SetSpotPrice(v []*DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice) *DescribeContainerGroupPriceResponsePriceInfoSpotPrices {
	s.SpotPrice = v
	return s
}

type DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice struct {
	ZoneId       *string  `json:"ZoneId,omitempty" xml:"ZoneId,omitempty" require:"true"`
	InstanceType *string  `json:"InstanceType,omitempty" xml:"InstanceType,omitempty" require:"true"`
	SpotPrice    *float32 `json:"SpotPrice,omitempty" xml:"SpotPrice,omitempty" require:"true"`
	OriginPrice  *float32 `json:"OriginPrice,omitempty" xml:"OriginPrice,omitempty" require:"true"`
}

func (s DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice) SetZoneId(v string) *DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice {
	s.ZoneId = &v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice) SetInstanceType(v string) *DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice {
	s.InstanceType = &v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice) SetSpotPrice(v float32) *DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice {
	s.SpotPrice = &v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice) SetOriginPrice(v float32) *DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice {
	s.OriginPrice = &v
	return s
}

type DescribeContainerGroupPriceResponsePriceInfoPrice struct {
	OriginalPrice *float32                                                      `json:"OriginalPrice,omitempty" xml:"OriginalPrice,omitempty" require:"true"`
	DiscountPrice *float32                                                      `json:"DiscountPrice,omitempty" xml:"DiscountPrice,omitempty" require:"true"`
	TradePrice    *float32                                                      `json:"TradePrice,omitempty" xml:"TradePrice,omitempty" require:"true"`
	Currency      *string                                                       `json:"Currency,omitempty" xml:"Currency,omitempty" require:"true"`
	DetailInfos   *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfos `json:"DetailInfos,omitempty" xml:"DetailInfos,omitempty" require:"true" type:"Struct"`
}

func (s DescribeContainerGroupPriceResponsePriceInfoPrice) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupPriceResponsePriceInfoPrice) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupPriceResponsePriceInfoPrice) SetOriginalPrice(v float32) *DescribeContainerGroupPriceResponsePriceInfoPrice {
	s.OriginalPrice = &v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfoPrice) SetDiscountPrice(v float32) *DescribeContainerGroupPriceResponsePriceInfoPrice {
	s.DiscountPrice = &v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfoPrice) SetTradePrice(v float32) *DescribeContainerGroupPriceResponsePriceInfoPrice {
	s.TradePrice = &v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfoPrice) SetCurrency(v string) *DescribeContainerGroupPriceResponsePriceInfoPrice {
	s.Currency = &v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfoPrice) SetDetailInfos(v *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfos) *DescribeContainerGroupPriceResponsePriceInfoPrice {
	s.DetailInfos = v
	return s
}

type DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfos struct {
	DetailInfo []*DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo `json:"DetailInfo,omitempty" xml:"DetailInfo,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfos) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfos) SetDetailInfo(v []*DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo) *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfos {
	s.DetailInfo = v
	return s
}

type DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo struct {
	Resource      *string                                                                      `json:"Resource,omitempty" xml:"Resource,omitempty" require:"true"`
	OriginalPrice *float32                                                                     `json:"OriginalPrice,omitempty" xml:"OriginalPrice,omitempty" require:"true"`
	DiscountPrice *float32                                                                     `json:"DiscountPrice,omitempty" xml:"DiscountPrice,omitempty" require:"true"`
	TradePrice    *float32                                                                     `json:"TradePrice,omitempty" xml:"TradePrice,omitempty" require:"true"`
	Rules         *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRules `json:"Rules,omitempty" xml:"Rules,omitempty" require:"true" type:"Struct"`
}

func (s DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo) SetResource(v string) *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo {
	s.Resource = &v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo) SetOriginalPrice(v float32) *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo {
	s.OriginalPrice = &v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo) SetDiscountPrice(v float32) *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo {
	s.DiscountPrice = &v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo) SetTradePrice(v float32) *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo {
	s.TradePrice = &v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo) SetRules(v *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRules) *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo {
	s.Rules = v
	return s
}

type DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRules struct {
	Rule []*DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule `json:"Rule,omitempty" xml:"Rule,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRules) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRules) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRules) SetRule(v []*DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule) *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRules {
	s.Rule = v
	return s
}

type DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule struct {
	RuleId      *int64  `json:"RuleId,omitempty" xml:"RuleId,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
}

func (s DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule) SetRuleId(v int64) *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule {
	s.RuleId = &v
	return s
}

func (s *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule) SetDescription(v string) *DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule {
	s.Description = &v
	return s
}

type ExecContainerCommandRequest struct {
	RegionId         *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ContainerGroupId *string `json:"ContainerGroupId,omitempty" xml:"ContainerGroupId,omitempty" require:"true"`
	ContainerName    *string `json:"ContainerName,omitempty" xml:"ContainerName,omitempty" require:"true"`
	Command          *string `json:"Command,omitempty" xml:"Command,omitempty" require:"true"`
	TTY              *bool   `json:"TTY,omitempty" xml:"TTY,omitempty"`
	Stdin            *bool   `json:"Stdin,omitempty" xml:"Stdin,omitempty"`
}

func (s ExecContainerCommandRequest) String() string {
	return tea.Prettify(s)
}

func (s ExecContainerCommandRequest) GoString() string {
	return s.String()
}

func (s *ExecContainerCommandRequest) SetRegionId(v string) *ExecContainerCommandRequest {
	s.RegionId = &v
	return s
}

func (s *ExecContainerCommandRequest) SetContainerGroupId(v string) *ExecContainerCommandRequest {
	s.ContainerGroupId = &v
	return s
}

func (s *ExecContainerCommandRequest) SetContainerName(v string) *ExecContainerCommandRequest {
	s.ContainerName = &v
	return s
}

func (s *ExecContainerCommandRequest) SetCommand(v string) *ExecContainerCommandRequest {
	s.Command = &v
	return s
}

func (s *ExecContainerCommandRequest) SetTTY(v bool) *ExecContainerCommandRequest {
	s.TTY = &v
	return s
}

func (s *ExecContainerCommandRequest) SetStdin(v bool) *ExecContainerCommandRequest {
	s.Stdin = &v
	return s
}

type ExecContainerCommandResponse struct {
	RequestId    *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	WebSocketUri *string `json:"WebSocketUri,omitempty" xml:"WebSocketUri,omitempty" require:"true"`
}

func (s ExecContainerCommandResponse) String() string {
	return tea.Prettify(s)
}

func (s ExecContainerCommandResponse) GoString() string {
	return s.String()
}

func (s *ExecContainerCommandResponse) SetRequestId(v string) *ExecContainerCommandResponse {
	s.RequestId = &v
	return s
}

func (s *ExecContainerCommandResponse) SetWebSocketUri(v string) *ExecContainerCommandResponse {
	s.WebSocketUri = &v
	return s
}

type DescribeContainerLogRequest struct {
	RegionId         *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ContainerGroupId *string `json:"ContainerGroupId,omitempty" xml:"ContainerGroupId,omitempty" require:"true"`
	ContainerName    *string `json:"ContainerName,omitempty" xml:"ContainerName,omitempty" require:"true"`
	StartTime        *string `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	Tail             *int    `json:"Tail,omitempty" xml:"Tail,omitempty"`
	LastTime         *bool   `json:"LastTime,omitempty" xml:"LastTime,omitempty"`
	SinceSeconds     *int    `json:"SinceSeconds,omitempty" xml:"SinceSeconds,omitempty"`
	LimitBytes       *int64  `json:"LimitBytes,omitempty" xml:"LimitBytes,omitempty"`
}

func (s DescribeContainerLogRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerLogRequest) GoString() string {
	return s.String()
}

func (s *DescribeContainerLogRequest) SetRegionId(v string) *DescribeContainerLogRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeContainerLogRequest) SetContainerGroupId(v string) *DescribeContainerLogRequest {
	s.ContainerGroupId = &v
	return s
}

func (s *DescribeContainerLogRequest) SetContainerName(v string) *DescribeContainerLogRequest {
	s.ContainerName = &v
	return s
}

func (s *DescribeContainerLogRequest) SetStartTime(v string) *DescribeContainerLogRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeContainerLogRequest) SetTail(v int) *DescribeContainerLogRequest {
	s.Tail = &v
	return s
}

func (s *DescribeContainerLogRequest) SetLastTime(v bool) *DescribeContainerLogRequest {
	s.LastTime = &v
	return s
}

func (s *DescribeContainerLogRequest) SetSinceSeconds(v int) *DescribeContainerLogRequest {
	s.SinceSeconds = &v
	return s
}

func (s *DescribeContainerLogRequest) SetLimitBytes(v int64) *DescribeContainerLogRequest {
	s.LimitBytes = &v
	return s
}

type DescribeContainerLogResponse struct {
	RequestId     *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ContainerName *string `json:"ContainerName,omitempty" xml:"ContainerName,omitempty" require:"true"`
	Content       *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
}

func (s DescribeContainerLogResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerLogResponse) GoString() string {
	return s.String()
}

func (s *DescribeContainerLogResponse) SetRequestId(v string) *DescribeContainerLogResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeContainerLogResponse) SetContainerName(v string) *DescribeContainerLogResponse {
	s.ContainerName = &v
	return s
}

func (s *DescribeContainerLogResponse) SetContent(v string) *DescribeContainerLogResponse {
	s.Content = &v
	return s
}

type CreateContainerGroupRequest struct {
	RegionId                      *string                                               `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ZoneId                        *string                                               `json:"ZoneId,omitempty" xml:"ZoneId,omitempty"`
	SecurityGroupId               *string                                               `json:"SecurityGroupId,omitempty" xml:"SecurityGroupId,omitempty" require:"true"`
	VSwitchId                     *string                                               `json:"VSwitchId,omitempty" xml:"VSwitchId,omitempty" require:"true"`
	ContainerGroupName            *string                                               `json:"ContainerGroupName,omitempty" xml:"ContainerGroupName,omitempty" require:"true"`
	RestartPolicy                 *string                                               `json:"RestartPolicy,omitempty" xml:"RestartPolicy,omitempty"`
	Tag                           []*CreateContainerGroupRequestTag                     `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
	ImageRegistryCredential       []*CreateContainerGroupRequestImageRegistryCredential `json:"ImageRegistryCredential,omitempty" xml:"ImageRegistryCredential,omitempty" type:"Repeated"`
	Container                     []*CreateContainerGroupRequestContainer               `json:"Container,omitempty" xml:"Container,omitempty" require:"true" type:"Repeated"`
	Volume                        []*CreateContainerGroupRequestVolume                  `json:"Volume,omitempty" xml:"Volume,omitempty" type:"Repeated"`
	EipInstanceId                 *string                                               `json:"EipInstanceId,omitempty" xml:"EipInstanceId,omitempty"`
	InitContainer                 []*CreateContainerGroupRequestInitContainer           `json:"InitContainer,omitempty" xml:"InitContainer,omitempty" type:"Repeated"`
	DnsConfig                     *CreateContainerGroupRequestDnsConfig                 `json:"DnsConfig,omitempty" xml:"DnsConfig,omitempty" require:"true" type:"Struct"`
	Cpu                           *float32                                              `json:"Cpu,omitempty" xml:"Cpu,omitempty"`
	Memory                        *float32                                              `json:"Memory,omitempty" xml:"Memory,omitempty"`
	ResourceGroupId               *string                                               `json:"ResourceGroupId,omitempty" xml:"ResourceGroupId,omitempty"`
	DnsPolicy                     *string                                               `json:"DnsPolicy,omitempty" xml:"DnsPolicy,omitempty"`
	ClientToken                   *string                                               `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	HostAliase                    []*CreateContainerGroupRequestHostAliase              `json:"HostAliase,omitempty" xml:"HostAliase,omitempty" type:"Repeated"`
	Arn                           []*CreateContainerGroupRequestArn                     `json:"Arn,omitempty" xml:"Arn,omitempty" type:"Repeated"`
	InstanceType                  *string                                               `json:"InstanceType,omitempty" xml:"InstanceType,omitempty"`
	SecurityContext               *CreateContainerGroupRequestSecurityContext           `json:"SecurityContext,omitempty" xml:"SecurityContext,omitempty" require:"true" type:"Struct"`
	SlsEnable                     *bool                                                 `json:"SlsEnable,omitempty" xml:"SlsEnable,omitempty"`
	ImageSnapshotId               *string                                               `json:"ImageSnapshotId,omitempty" xml:"ImageSnapshotId,omitempty"`
	RamRoleName                   *string                                               `json:"RamRoleName,omitempty" xml:"RamRoleName,omitempty"`
	NtpServer                     []*string                                             `json:"NtpServer,omitempty" xml:"NtpServer,omitempty" type:"Repeated"`
	TerminationGracePeriodSeconds *int64                                                `json:"TerminationGracePeriodSeconds,omitempty" xml:"TerminationGracePeriodSeconds,omitempty"`
	AutoMatchImageCache           *bool                                                 `json:"AutoMatchImageCache,omitempty" xml:"AutoMatchImageCache,omitempty"`
	Ipv6AddressCount              *int                                                  `json:"Ipv6AddressCount,omitempty" xml:"Ipv6AddressCount,omitempty"`
	ActiveDeadlineSeconds         *int64                                                `json:"ActiveDeadlineSeconds,omitempty" xml:"ActiveDeadlineSeconds,omitempty"`
	SpotStrategy                  *string                                               `json:"SpotStrategy,omitempty" xml:"SpotStrategy,omitempty"`
	SpotPriceLimit                *float32                                              `json:"SpotPriceLimit,omitempty" xml:"SpotPriceLimit,omitempty"`
	ScheduleStrategy              *string                                               `json:"ScheduleStrategy,omitempty" xml:"ScheduleStrategy,omitempty"`
	TenantVSwitchId               *string                                               `json:"TenantVSwitchId,omitempty" xml:"TenantVSwitchId,omitempty"`
	TenantSecurityGroupId         *string                                               `json:"TenantSecurityGroupId,omitempty" xml:"TenantSecurityGroupId,omitempty"`
	CorePattern                   *string                                               `json:"CorePattern,omitempty" xml:"CorePattern,omitempty"`
}

func (s CreateContainerGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequest) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequest) SetRegionId(v string) *CreateContainerGroupRequest {
	s.RegionId = &v
	return s
}

func (s *CreateContainerGroupRequest) SetZoneId(v string) *CreateContainerGroupRequest {
	s.ZoneId = &v
	return s
}

func (s *CreateContainerGroupRequest) SetSecurityGroupId(v string) *CreateContainerGroupRequest {
	s.SecurityGroupId = &v
	return s
}

func (s *CreateContainerGroupRequest) SetVSwitchId(v string) *CreateContainerGroupRequest {
	s.VSwitchId = &v
	return s
}

func (s *CreateContainerGroupRequest) SetContainerGroupName(v string) *CreateContainerGroupRequest {
	s.ContainerGroupName = &v
	return s
}

func (s *CreateContainerGroupRequest) SetRestartPolicy(v string) *CreateContainerGroupRequest {
	s.RestartPolicy = &v
	return s
}

func (s *CreateContainerGroupRequest) SetTag(v []*CreateContainerGroupRequestTag) *CreateContainerGroupRequest {
	s.Tag = v
	return s
}

func (s *CreateContainerGroupRequest) SetImageRegistryCredential(v []*CreateContainerGroupRequestImageRegistryCredential) *CreateContainerGroupRequest {
	s.ImageRegistryCredential = v
	return s
}

func (s *CreateContainerGroupRequest) SetContainer(v []*CreateContainerGroupRequestContainer) *CreateContainerGroupRequest {
	s.Container = v
	return s
}

func (s *CreateContainerGroupRequest) SetVolume(v []*CreateContainerGroupRequestVolume) *CreateContainerGroupRequest {
	s.Volume = v
	return s
}

func (s *CreateContainerGroupRequest) SetEipInstanceId(v string) *CreateContainerGroupRequest {
	s.EipInstanceId = &v
	return s
}

func (s *CreateContainerGroupRequest) SetInitContainer(v []*CreateContainerGroupRequestInitContainer) *CreateContainerGroupRequest {
	s.InitContainer = v
	return s
}

func (s *CreateContainerGroupRequest) SetDnsConfig(v *CreateContainerGroupRequestDnsConfig) *CreateContainerGroupRequest {
	s.DnsConfig = v
	return s
}

func (s *CreateContainerGroupRequest) SetCpu(v float32) *CreateContainerGroupRequest {
	s.Cpu = &v
	return s
}

func (s *CreateContainerGroupRequest) SetMemory(v float32) *CreateContainerGroupRequest {
	s.Memory = &v
	return s
}

func (s *CreateContainerGroupRequest) SetResourceGroupId(v string) *CreateContainerGroupRequest {
	s.ResourceGroupId = &v
	return s
}

func (s *CreateContainerGroupRequest) SetDnsPolicy(v string) *CreateContainerGroupRequest {
	s.DnsPolicy = &v
	return s
}

func (s *CreateContainerGroupRequest) SetClientToken(v string) *CreateContainerGroupRequest {
	s.ClientToken = &v
	return s
}

func (s *CreateContainerGroupRequest) SetHostAliase(v []*CreateContainerGroupRequestHostAliase) *CreateContainerGroupRequest {
	s.HostAliase = v
	return s
}

func (s *CreateContainerGroupRequest) SetArn(v []*CreateContainerGroupRequestArn) *CreateContainerGroupRequest {
	s.Arn = v
	return s
}

func (s *CreateContainerGroupRequest) SetInstanceType(v string) *CreateContainerGroupRequest {
	s.InstanceType = &v
	return s
}

func (s *CreateContainerGroupRequest) SetSecurityContext(v *CreateContainerGroupRequestSecurityContext) *CreateContainerGroupRequest {
	s.SecurityContext = v
	return s
}

func (s *CreateContainerGroupRequest) SetSlsEnable(v bool) *CreateContainerGroupRequest {
	s.SlsEnable = &v
	return s
}

func (s *CreateContainerGroupRequest) SetImageSnapshotId(v string) *CreateContainerGroupRequest {
	s.ImageSnapshotId = &v
	return s
}

func (s *CreateContainerGroupRequest) SetRamRoleName(v string) *CreateContainerGroupRequest {
	s.RamRoleName = &v
	return s
}

func (s *CreateContainerGroupRequest) SetNtpServer(v []*string) *CreateContainerGroupRequest {
	s.NtpServer = v
	return s
}

func (s *CreateContainerGroupRequest) SetTerminationGracePeriodSeconds(v int64) *CreateContainerGroupRequest {
	s.TerminationGracePeriodSeconds = &v
	return s
}

func (s *CreateContainerGroupRequest) SetAutoMatchImageCache(v bool) *CreateContainerGroupRequest {
	s.AutoMatchImageCache = &v
	return s
}

func (s *CreateContainerGroupRequest) SetIpv6AddressCount(v int) *CreateContainerGroupRequest {
	s.Ipv6AddressCount = &v
	return s
}

func (s *CreateContainerGroupRequest) SetActiveDeadlineSeconds(v int64) *CreateContainerGroupRequest {
	s.ActiveDeadlineSeconds = &v
	return s
}

func (s *CreateContainerGroupRequest) SetSpotStrategy(v string) *CreateContainerGroupRequest {
	s.SpotStrategy = &v
	return s
}

func (s *CreateContainerGroupRequest) SetSpotPriceLimit(v float32) *CreateContainerGroupRequest {
	s.SpotPriceLimit = &v
	return s
}

func (s *CreateContainerGroupRequest) SetScheduleStrategy(v string) *CreateContainerGroupRequest {
	s.ScheduleStrategy = &v
	return s
}

func (s *CreateContainerGroupRequest) SetTenantVSwitchId(v string) *CreateContainerGroupRequest {
	s.TenantVSwitchId = &v
	return s
}

func (s *CreateContainerGroupRequest) SetTenantSecurityGroupId(v string) *CreateContainerGroupRequest {
	s.TenantSecurityGroupId = &v
	return s
}

func (s *CreateContainerGroupRequest) SetCorePattern(v string) *CreateContainerGroupRequest {
	s.CorePattern = &v
	return s
}

type CreateContainerGroupRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s CreateContainerGroupRequestTag) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestTag) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestTag) SetKey(v string) *CreateContainerGroupRequestTag {
	s.Key = &v
	return s
}

func (s *CreateContainerGroupRequestTag) SetValue(v string) *CreateContainerGroupRequestTag {
	s.Value = &v
	return s
}

type CreateContainerGroupRequestImageRegistryCredential struct {
	Server   *string `json:"Server,omitempty" xml:"Server,omitempty" require:"true"`
	UserName *string `json:"UserName,omitempty" xml:"UserName,omitempty" require:"true"`
	Password *string `json:"Password,omitempty" xml:"Password,omitempty" require:"true"`
}

func (s CreateContainerGroupRequestImageRegistryCredential) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestImageRegistryCredential) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestImageRegistryCredential) SetServer(v string) *CreateContainerGroupRequestImageRegistryCredential {
	s.Server = &v
	return s
}

func (s *CreateContainerGroupRequestImageRegistryCredential) SetUserName(v string) *CreateContainerGroupRequestImageRegistryCredential {
	s.UserName = &v
	return s
}

func (s *CreateContainerGroupRequestImageRegistryCredential) SetPassword(v string) *CreateContainerGroupRequestImageRegistryCredential {
	s.Password = &v
	return s
}

type CreateContainerGroupRequestContainer struct {
	Image                                      *string                                                                           `json:"Image,omitempty" xml:"Image,omitempty" require:"true"`
	Name                                       *string                                                                           `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Cpu                                        *float32                                                                          `json:"Cpu,omitempty" xml:"Cpu,omitempty"`
	Memory                                     *float32                                                                          `json:"Memory,omitempty" xml:"Memory,omitempty"`
	WorkingDir                                 *string                                                                           `json:"WorkingDir,omitempty" xml:"WorkingDir,omitempty"`
	ImagePullPolicy                            *string                                                                           `json:"ImagePullPolicy,omitempty" xml:"ImagePullPolicy,omitempty"`
	Command                                    []*string                                                                         `json:"Command,omitempty" xml:"Command,omitempty" type:"Repeated"`
	Arg                                        []*string                                                                         `json:"Arg,omitempty" xml:"Arg,omitempty" type:"Repeated"`
	VolumeMount                                []*CreateContainerGroupRequestContainerVolumeMount                                `json:"VolumeMount,omitempty" xml:"VolumeMount,omitempty" type:"Repeated"`
	Port                                       []*CreateContainerGroupRequestContainerPort                                       `json:"Port,omitempty" xml:"Port,omitempty" type:"Repeated"`
	EnvironmentVar                             []*CreateContainerGroupRequestContainerEnvironmentVar                             `json:"EnvironmentVar,omitempty" xml:"EnvironmentVar,omitempty" type:"Repeated"`
	ReadinessProbe                             *CreateContainerGroupRequestContainerReadinessProbe                               `json:"ReadinessProbe,omitempty" xml:"ReadinessProbe,omitempty" require:"true" type:"Struct"`
	LivenessProbe                              *CreateContainerGroupRequestContainerLivenessProbe                                `json:"LivenessProbe,omitempty" xml:"LivenessProbe,omitempty" require:"true" type:"Struct"`
	SecurityContext                            *CreateContainerGroupRequestContainerSecurityContext                              `json:"SecurityContext,omitempty" xml:"SecurityContext,omitempty" require:"true" type:"Struct"`
	Stdin                                      *bool                                                                             `json:"Stdin,omitempty" xml:"Stdin,omitempty"`
	StdinOnce                                  *bool                                                                             `json:"StdinOnce,omitempty" xml:"StdinOnce,omitempty"`
	Tty                                        *bool                                                                             `json:"Tty,omitempty" xml:"Tty,omitempty"`
	Gpu                                        *int                                                                              `json:"Gpu,omitempty" xml:"Gpu,omitempty"`
	LifecyclePostStartHandlerHttpGetHost       *string                                                                           `json:"LifecyclePostStartHandlerHttpGetHost,omitempty" xml:"LifecyclePostStartHandlerHttpGetHost,omitempty"`
	LifecyclePostStartHandlerHttpGetPort       *int                                                                              `json:"LifecyclePostStartHandlerHttpGetPort,omitempty" xml:"LifecyclePostStartHandlerHttpGetPort,omitempty"`
	LifecyclePostStartHandlerHttpGetPath       *string                                                                           `json:"LifecyclePostStartHandlerHttpGetPath,omitempty" xml:"LifecyclePostStartHandlerHttpGetPath,omitempty"`
	LifecyclePostStartHandlerHttpGetScheme     *string                                                                           `json:"LifecyclePostStartHandlerHttpGetScheme,omitempty" xml:"LifecyclePostStartHandlerHttpGetScheme,omitempty"`
	LifecyclePostStartHandlerHttpGetHttpHeader []*CreateContainerGroupRequestContainerLifecyclePostStartHandlerHttpGetHttpHeader `json:"LifecyclePostStartHandlerHttpGetHttpHeader,omitempty" xml:"LifecyclePostStartHandlerHttpGetHttpHeader,omitempty" type:"Repeated"`
	LifecyclePostStartHandlerExec              []*string                                                                         `json:"LifecyclePostStartHandlerExec,omitempty" xml:"LifecyclePostStartHandlerExec,omitempty" type:"Repeated"`
	LifecyclePostStartHandlerTcpSocketHost     *string                                                                           `json:"LifecyclePostStartHandlerTcpSocketHost,omitempty" xml:"LifecyclePostStartHandlerTcpSocketHost,omitempty"`
	LifecyclePostStartHandlerTcpSocketPort     *int                                                                              `json:"LifecyclePostStartHandlerTcpSocketPort,omitempty" xml:"LifecyclePostStartHandlerTcpSocketPort,omitempty"`
	LifecyclePreStopHandlerHttpGetHost         *string                                                                           `json:"LifecyclePreStopHandlerHttpGetHost,omitempty" xml:"LifecyclePreStopHandlerHttpGetHost,omitempty"`
	LifecyclePreStopHandlerHttpGetPort         *int                                                                              `json:"LifecyclePreStopHandlerHttpGetPort,omitempty" xml:"LifecyclePreStopHandlerHttpGetPort,omitempty"`
	LifecyclePreStopHandlerHttpGetPath         *string                                                                           `json:"LifecyclePreStopHandlerHttpGetPath,omitempty" xml:"LifecyclePreStopHandlerHttpGetPath,omitempty"`
	LifecyclePreStopHandlerHttpGetScheme       *string                                                                           `json:"LifecyclePreStopHandlerHttpGetScheme,omitempty" xml:"LifecyclePreStopHandlerHttpGetScheme,omitempty"`
	LifecyclePreStopHandlerHttpGetHttpHeader   []*CreateContainerGroupRequestContainerLifecyclePreStopHandlerHttpGetHttpHeader   `json:"LifecyclePreStopHandlerHttpGetHttpHeader,omitempty" xml:"LifecyclePreStopHandlerHttpGetHttpHeader,omitempty" type:"Repeated"`
	LifecyclePreStopHandlerExec                []*string                                                                         `json:"LifecyclePreStopHandlerExec,omitempty" xml:"LifecyclePreStopHandlerExec,omitempty" type:"Repeated"`
	LifecyclePreStopHandlerTcpSocketHost       *string                                                                           `json:"LifecyclePreStopHandlerTcpSocketHost,omitempty" xml:"LifecyclePreStopHandlerTcpSocketHost,omitempty"`
	LifecyclePreStopHandlerTcpSocketPort       *int                                                                              `json:"LifecyclePreStopHandlerTcpSocketPort,omitempty" xml:"LifecyclePreStopHandlerTcpSocketPort,omitempty"`
	TerminationMessagePath                     *string                                                                           `json:"TerminationMessagePath,omitempty" xml:"TerminationMessagePath,omitempty"`
	TerminationMessagePolicy                   *string                                                                           `json:"TerminationMessagePolicy,omitempty" xml:"TerminationMessagePolicy,omitempty"`
}

func (s CreateContainerGroupRequestContainer) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainer) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainer) SetImage(v string) *CreateContainerGroupRequestContainer {
	s.Image = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetName(v string) *CreateContainerGroupRequestContainer {
	s.Name = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetCpu(v float32) *CreateContainerGroupRequestContainer {
	s.Cpu = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetMemory(v float32) *CreateContainerGroupRequestContainer {
	s.Memory = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetWorkingDir(v string) *CreateContainerGroupRequestContainer {
	s.WorkingDir = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetImagePullPolicy(v string) *CreateContainerGroupRequestContainer {
	s.ImagePullPolicy = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetCommand(v []*string) *CreateContainerGroupRequestContainer {
	s.Command = v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetArg(v []*string) *CreateContainerGroupRequestContainer {
	s.Arg = v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetVolumeMount(v []*CreateContainerGroupRequestContainerVolumeMount) *CreateContainerGroupRequestContainer {
	s.VolumeMount = v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetPort(v []*CreateContainerGroupRequestContainerPort) *CreateContainerGroupRequestContainer {
	s.Port = v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetEnvironmentVar(v []*CreateContainerGroupRequestContainerEnvironmentVar) *CreateContainerGroupRequestContainer {
	s.EnvironmentVar = v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetReadinessProbe(v *CreateContainerGroupRequestContainerReadinessProbe) *CreateContainerGroupRequestContainer {
	s.ReadinessProbe = v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLivenessProbe(v *CreateContainerGroupRequestContainerLivenessProbe) *CreateContainerGroupRequestContainer {
	s.LivenessProbe = v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetSecurityContext(v *CreateContainerGroupRequestContainerSecurityContext) *CreateContainerGroupRequestContainer {
	s.SecurityContext = v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetStdin(v bool) *CreateContainerGroupRequestContainer {
	s.Stdin = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetStdinOnce(v bool) *CreateContainerGroupRequestContainer {
	s.StdinOnce = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetTty(v bool) *CreateContainerGroupRequestContainer {
	s.Tty = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetGpu(v int) *CreateContainerGroupRequestContainer {
	s.Gpu = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePostStartHandlerHttpGetHost(v string) *CreateContainerGroupRequestContainer {
	s.LifecyclePostStartHandlerHttpGetHost = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePostStartHandlerHttpGetPort(v int) *CreateContainerGroupRequestContainer {
	s.LifecyclePostStartHandlerHttpGetPort = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePostStartHandlerHttpGetPath(v string) *CreateContainerGroupRequestContainer {
	s.LifecyclePostStartHandlerHttpGetPath = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePostStartHandlerHttpGetScheme(v string) *CreateContainerGroupRequestContainer {
	s.LifecyclePostStartHandlerHttpGetScheme = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePostStartHandlerHttpGetHttpHeader(v []*CreateContainerGroupRequestContainerLifecyclePostStartHandlerHttpGetHttpHeader) *CreateContainerGroupRequestContainer {
	s.LifecyclePostStartHandlerHttpGetHttpHeader = v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePostStartHandlerExec(v []*string) *CreateContainerGroupRequestContainer {
	s.LifecyclePostStartHandlerExec = v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePostStartHandlerTcpSocketHost(v string) *CreateContainerGroupRequestContainer {
	s.LifecyclePostStartHandlerTcpSocketHost = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePostStartHandlerTcpSocketPort(v int) *CreateContainerGroupRequestContainer {
	s.LifecyclePostStartHandlerTcpSocketPort = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePreStopHandlerHttpGetHost(v string) *CreateContainerGroupRequestContainer {
	s.LifecyclePreStopHandlerHttpGetHost = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePreStopHandlerHttpGetPort(v int) *CreateContainerGroupRequestContainer {
	s.LifecyclePreStopHandlerHttpGetPort = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePreStopHandlerHttpGetPath(v string) *CreateContainerGroupRequestContainer {
	s.LifecyclePreStopHandlerHttpGetPath = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePreStopHandlerHttpGetScheme(v string) *CreateContainerGroupRequestContainer {
	s.LifecyclePreStopHandlerHttpGetScheme = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePreStopHandlerHttpGetHttpHeader(v []*CreateContainerGroupRequestContainerLifecyclePreStopHandlerHttpGetHttpHeader) *CreateContainerGroupRequestContainer {
	s.LifecyclePreStopHandlerHttpGetHttpHeader = v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePreStopHandlerExec(v []*string) *CreateContainerGroupRequestContainer {
	s.LifecyclePreStopHandlerExec = v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePreStopHandlerTcpSocketHost(v string) *CreateContainerGroupRequestContainer {
	s.LifecyclePreStopHandlerTcpSocketHost = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetLifecyclePreStopHandlerTcpSocketPort(v int) *CreateContainerGroupRequestContainer {
	s.LifecyclePreStopHandlerTcpSocketPort = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetTerminationMessagePath(v string) *CreateContainerGroupRequestContainer {
	s.TerminationMessagePath = &v
	return s
}

func (s *CreateContainerGroupRequestContainer) SetTerminationMessagePolicy(v string) *CreateContainerGroupRequestContainer {
	s.TerminationMessagePolicy = &v
	return s
}

type CreateContainerGroupRequestContainerVolumeMount struct {
	MountPath *string `json:"MountPath,omitempty" xml:"MountPath,omitempty" require:"true"`
	ReadOnly  *bool   `json:"ReadOnly,omitempty" xml:"ReadOnly,omitempty" require:"true"`
	Name      *string `json:"Name,omitempty" xml:"Name,omitempty"`
	SubPath   *string `json:"SubPath,omitempty" xml:"SubPath,omitempty"`
}

func (s CreateContainerGroupRequestContainerVolumeMount) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerVolumeMount) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerVolumeMount) SetMountPath(v string) *CreateContainerGroupRequestContainerVolumeMount {
	s.MountPath = &v
	return s
}

func (s *CreateContainerGroupRequestContainerVolumeMount) SetReadOnly(v bool) *CreateContainerGroupRequestContainerVolumeMount {
	s.ReadOnly = &v
	return s
}

func (s *CreateContainerGroupRequestContainerVolumeMount) SetName(v string) *CreateContainerGroupRequestContainerVolumeMount {
	s.Name = &v
	return s
}

func (s *CreateContainerGroupRequestContainerVolumeMount) SetSubPath(v string) *CreateContainerGroupRequestContainerVolumeMount {
	s.SubPath = &v
	return s
}

type CreateContainerGroupRequestContainerPort struct {
	Protocol *string `json:"Protocol,omitempty" xml:"Protocol,omitempty" require:"true"`
	Port     *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
}

func (s CreateContainerGroupRequestContainerPort) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerPort) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerPort) SetProtocol(v string) *CreateContainerGroupRequestContainerPort {
	s.Protocol = &v
	return s
}

func (s *CreateContainerGroupRequestContainerPort) SetPort(v int) *CreateContainerGroupRequestContainerPort {
	s.Port = &v
	return s
}

type CreateContainerGroupRequestContainerEnvironmentVar struct {
	Key      *string                                                     `json:"Key,omitempty" xml:"Key,omitempty"`
	Value    *string                                                     `json:"Value,omitempty" xml:"Value,omitempty"`
	FieldRef *CreateContainerGroupRequestContainerEnvironmentVarFieldRef `json:"FieldRef,omitempty" xml:"FieldRef,omitempty" require:"true" type:"Struct"`
}

func (s CreateContainerGroupRequestContainerEnvironmentVar) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerEnvironmentVar) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerEnvironmentVar) SetKey(v string) *CreateContainerGroupRequestContainerEnvironmentVar {
	s.Key = &v
	return s
}

func (s *CreateContainerGroupRequestContainerEnvironmentVar) SetValue(v string) *CreateContainerGroupRequestContainerEnvironmentVar {
	s.Value = &v
	return s
}

func (s *CreateContainerGroupRequestContainerEnvironmentVar) SetFieldRef(v *CreateContainerGroupRequestContainerEnvironmentVarFieldRef) *CreateContainerGroupRequestContainerEnvironmentVar {
	s.FieldRef = v
	return s
}

type CreateContainerGroupRequestContainerEnvironmentVarFieldRef struct {
	FieldPath *string `json:"FieldPath,omitempty" xml:"FieldPath,omitempty"`
}

func (s CreateContainerGroupRequestContainerEnvironmentVarFieldRef) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerEnvironmentVarFieldRef) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerEnvironmentVarFieldRef) SetFieldPath(v string) *CreateContainerGroupRequestContainerEnvironmentVarFieldRef {
	s.FieldPath = &v
	return s
}

type CreateContainerGroupRequestContainerReadinessProbe struct {
	HttpGet             *CreateContainerGroupRequestContainerReadinessProbeHttpGet   `json:"HttpGet,omitempty" xml:"HttpGet,omitempty" require:"true" type:"Struct"`
	InitialDelaySeconds *int                                                         `json:"InitialDelaySeconds,omitempty" xml:"InitialDelaySeconds,omitempty"`
	PeriodSeconds       *int                                                         `json:"PeriodSeconds,omitempty" xml:"PeriodSeconds,omitempty"`
	SuccessThreshold    *int                                                         `json:"SuccessThreshold,omitempty" xml:"SuccessThreshold,omitempty"`
	FailureThreshold    *int                                                         `json:"FailureThreshold,omitempty" xml:"FailureThreshold,omitempty"`
	TimeoutSeconds      *int                                                         `json:"TimeoutSeconds,omitempty" xml:"TimeoutSeconds,omitempty"`
	Exec                *CreateContainerGroupRequestContainerReadinessProbeExec      `json:"Exec,omitempty" xml:"Exec,omitempty" require:"true" type:"Struct"`
	TcpSocket           *CreateContainerGroupRequestContainerReadinessProbeTcpSocket `json:"TcpSocket,omitempty" xml:"TcpSocket,omitempty" require:"true" type:"Struct"`
}

func (s CreateContainerGroupRequestContainerReadinessProbe) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerReadinessProbe) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerReadinessProbe) SetHttpGet(v *CreateContainerGroupRequestContainerReadinessProbeHttpGet) *CreateContainerGroupRequestContainerReadinessProbe {
	s.HttpGet = v
	return s
}

func (s *CreateContainerGroupRequestContainerReadinessProbe) SetInitialDelaySeconds(v int) *CreateContainerGroupRequestContainerReadinessProbe {
	s.InitialDelaySeconds = &v
	return s
}

func (s *CreateContainerGroupRequestContainerReadinessProbe) SetPeriodSeconds(v int) *CreateContainerGroupRequestContainerReadinessProbe {
	s.PeriodSeconds = &v
	return s
}

func (s *CreateContainerGroupRequestContainerReadinessProbe) SetSuccessThreshold(v int) *CreateContainerGroupRequestContainerReadinessProbe {
	s.SuccessThreshold = &v
	return s
}

func (s *CreateContainerGroupRequestContainerReadinessProbe) SetFailureThreshold(v int) *CreateContainerGroupRequestContainerReadinessProbe {
	s.FailureThreshold = &v
	return s
}

func (s *CreateContainerGroupRequestContainerReadinessProbe) SetTimeoutSeconds(v int) *CreateContainerGroupRequestContainerReadinessProbe {
	s.TimeoutSeconds = &v
	return s
}

func (s *CreateContainerGroupRequestContainerReadinessProbe) SetExec(v *CreateContainerGroupRequestContainerReadinessProbeExec) *CreateContainerGroupRequestContainerReadinessProbe {
	s.Exec = v
	return s
}

func (s *CreateContainerGroupRequestContainerReadinessProbe) SetTcpSocket(v *CreateContainerGroupRequestContainerReadinessProbeTcpSocket) *CreateContainerGroupRequestContainerReadinessProbe {
	s.TcpSocket = v
	return s
}

type CreateContainerGroupRequestContainerReadinessProbeHttpGet struct {
	Path   *string `json:"Path,omitempty" xml:"Path,omitempty"`
	Port   *int    `json:"Port,omitempty" xml:"Port,omitempty"`
	Scheme *string `json:"Scheme,omitempty" xml:"Scheme,omitempty"`
}

func (s CreateContainerGroupRequestContainerReadinessProbeHttpGet) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerReadinessProbeHttpGet) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerReadinessProbeHttpGet) SetPath(v string) *CreateContainerGroupRequestContainerReadinessProbeHttpGet {
	s.Path = &v
	return s
}

func (s *CreateContainerGroupRequestContainerReadinessProbeHttpGet) SetPort(v int) *CreateContainerGroupRequestContainerReadinessProbeHttpGet {
	s.Port = &v
	return s
}

func (s *CreateContainerGroupRequestContainerReadinessProbeHttpGet) SetScheme(v string) *CreateContainerGroupRequestContainerReadinessProbeHttpGet {
	s.Scheme = &v
	return s
}

type CreateContainerGroupRequestContainerReadinessProbeExec struct {
	Command []*string `json:"Command,omitempty" xml:"Command,omitempty" require:"true" type:"Repeated"`
}

func (s CreateContainerGroupRequestContainerReadinessProbeExec) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerReadinessProbeExec) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerReadinessProbeExec) SetCommand(v []*string) *CreateContainerGroupRequestContainerReadinessProbeExec {
	s.Command = v
	return s
}

type CreateContainerGroupRequestContainerReadinessProbeTcpSocket struct {
	Port *int `json:"Port,omitempty" xml:"Port,omitempty"`
}

func (s CreateContainerGroupRequestContainerReadinessProbeTcpSocket) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerReadinessProbeTcpSocket) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerReadinessProbeTcpSocket) SetPort(v int) *CreateContainerGroupRequestContainerReadinessProbeTcpSocket {
	s.Port = &v
	return s
}

type CreateContainerGroupRequestContainerLivenessProbe struct {
	HttpGet             *CreateContainerGroupRequestContainerLivenessProbeHttpGet   `json:"HttpGet,omitempty" xml:"HttpGet,omitempty" require:"true" type:"Struct"`
	InitialDelaySeconds *int                                                        `json:"InitialDelaySeconds,omitempty" xml:"InitialDelaySeconds,omitempty"`
	PeriodSeconds       *int                                                        `json:"PeriodSeconds,omitempty" xml:"PeriodSeconds,omitempty"`
	SuccessThreshold    *int                                                        `json:"SuccessThreshold,omitempty" xml:"SuccessThreshold,omitempty"`
	FailureThreshold    *int                                                        `json:"FailureThreshold,omitempty" xml:"FailureThreshold,omitempty"`
	TimeoutSeconds      *int                                                        `json:"TimeoutSeconds,omitempty" xml:"TimeoutSeconds,omitempty"`
	Exec                *CreateContainerGroupRequestContainerLivenessProbeExec      `json:"Exec,omitempty" xml:"Exec,omitempty" require:"true" type:"Struct"`
	TcpSocket           *CreateContainerGroupRequestContainerLivenessProbeTcpSocket `json:"TcpSocket,omitempty" xml:"TcpSocket,omitempty" require:"true" type:"Struct"`
}

func (s CreateContainerGroupRequestContainerLivenessProbe) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerLivenessProbe) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerLivenessProbe) SetHttpGet(v *CreateContainerGroupRequestContainerLivenessProbeHttpGet) *CreateContainerGroupRequestContainerLivenessProbe {
	s.HttpGet = v
	return s
}

func (s *CreateContainerGroupRequestContainerLivenessProbe) SetInitialDelaySeconds(v int) *CreateContainerGroupRequestContainerLivenessProbe {
	s.InitialDelaySeconds = &v
	return s
}

func (s *CreateContainerGroupRequestContainerLivenessProbe) SetPeriodSeconds(v int) *CreateContainerGroupRequestContainerLivenessProbe {
	s.PeriodSeconds = &v
	return s
}

func (s *CreateContainerGroupRequestContainerLivenessProbe) SetSuccessThreshold(v int) *CreateContainerGroupRequestContainerLivenessProbe {
	s.SuccessThreshold = &v
	return s
}

func (s *CreateContainerGroupRequestContainerLivenessProbe) SetFailureThreshold(v int) *CreateContainerGroupRequestContainerLivenessProbe {
	s.FailureThreshold = &v
	return s
}

func (s *CreateContainerGroupRequestContainerLivenessProbe) SetTimeoutSeconds(v int) *CreateContainerGroupRequestContainerLivenessProbe {
	s.TimeoutSeconds = &v
	return s
}

func (s *CreateContainerGroupRequestContainerLivenessProbe) SetExec(v *CreateContainerGroupRequestContainerLivenessProbeExec) *CreateContainerGroupRequestContainerLivenessProbe {
	s.Exec = v
	return s
}

func (s *CreateContainerGroupRequestContainerLivenessProbe) SetTcpSocket(v *CreateContainerGroupRequestContainerLivenessProbeTcpSocket) *CreateContainerGroupRequestContainerLivenessProbe {
	s.TcpSocket = v
	return s
}

type CreateContainerGroupRequestContainerLivenessProbeHttpGet struct {
	Path   *string `json:"Path,omitempty" xml:"Path,omitempty"`
	Port   *int    `json:"Port,omitempty" xml:"Port,omitempty"`
	Scheme *string `json:"Scheme,omitempty" xml:"Scheme,omitempty"`
}

func (s CreateContainerGroupRequestContainerLivenessProbeHttpGet) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerLivenessProbeHttpGet) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerLivenessProbeHttpGet) SetPath(v string) *CreateContainerGroupRequestContainerLivenessProbeHttpGet {
	s.Path = &v
	return s
}

func (s *CreateContainerGroupRequestContainerLivenessProbeHttpGet) SetPort(v int) *CreateContainerGroupRequestContainerLivenessProbeHttpGet {
	s.Port = &v
	return s
}

func (s *CreateContainerGroupRequestContainerLivenessProbeHttpGet) SetScheme(v string) *CreateContainerGroupRequestContainerLivenessProbeHttpGet {
	s.Scheme = &v
	return s
}

type CreateContainerGroupRequestContainerLivenessProbeExec struct {
	Command []*string `json:"Command,omitempty" xml:"Command,omitempty" require:"true" type:"Repeated"`
}

func (s CreateContainerGroupRequestContainerLivenessProbeExec) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerLivenessProbeExec) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerLivenessProbeExec) SetCommand(v []*string) *CreateContainerGroupRequestContainerLivenessProbeExec {
	s.Command = v
	return s
}

type CreateContainerGroupRequestContainerLivenessProbeTcpSocket struct {
	Port *int `json:"Port,omitempty" xml:"Port,omitempty"`
}

func (s CreateContainerGroupRequestContainerLivenessProbeTcpSocket) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerLivenessProbeTcpSocket) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerLivenessProbeTcpSocket) SetPort(v int) *CreateContainerGroupRequestContainerLivenessProbeTcpSocket {
	s.Port = &v
	return s
}

type CreateContainerGroupRequestContainerSecurityContext struct {
	Capability             *CreateContainerGroupRequestContainerSecurityContextCapability `json:"Capability,omitempty" xml:"Capability,omitempty" require:"true" type:"Struct"`
	ReadOnlyRootFilesystem *bool                                                          `json:"ReadOnlyRootFilesystem,omitempty" xml:"ReadOnlyRootFilesystem,omitempty"`
	RunAsUser              *int64                                                         `json:"RunAsUser,omitempty" xml:"RunAsUser,omitempty"`
}

func (s CreateContainerGroupRequestContainerSecurityContext) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerSecurityContext) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerSecurityContext) SetCapability(v *CreateContainerGroupRequestContainerSecurityContextCapability) *CreateContainerGroupRequestContainerSecurityContext {
	s.Capability = v
	return s
}

func (s *CreateContainerGroupRequestContainerSecurityContext) SetReadOnlyRootFilesystem(v bool) *CreateContainerGroupRequestContainerSecurityContext {
	s.ReadOnlyRootFilesystem = &v
	return s
}

func (s *CreateContainerGroupRequestContainerSecurityContext) SetRunAsUser(v int64) *CreateContainerGroupRequestContainerSecurityContext {
	s.RunAsUser = &v
	return s
}

type CreateContainerGroupRequestContainerSecurityContextCapability struct {
	Add []*string `json:"Add,omitempty" xml:"Add,omitempty" require:"true" type:"Repeated"`
}

func (s CreateContainerGroupRequestContainerSecurityContextCapability) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerSecurityContextCapability) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerSecurityContextCapability) SetAdd(v []*string) *CreateContainerGroupRequestContainerSecurityContextCapability {
	s.Add = v
	return s
}

type CreateContainerGroupRequestContainerLifecyclePostStartHandlerHttpGetHttpHeader struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s CreateContainerGroupRequestContainerLifecyclePostStartHandlerHttpGetHttpHeader) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerLifecyclePostStartHandlerHttpGetHttpHeader) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerLifecyclePostStartHandlerHttpGetHttpHeader) SetName(v string) *CreateContainerGroupRequestContainerLifecyclePostStartHandlerHttpGetHttpHeader {
	s.Name = &v
	return s
}

func (s *CreateContainerGroupRequestContainerLifecyclePostStartHandlerHttpGetHttpHeader) SetValue(v string) *CreateContainerGroupRequestContainerLifecyclePostStartHandlerHttpGetHttpHeader {
	s.Value = &v
	return s
}

type CreateContainerGroupRequestContainerLifecyclePreStopHandlerHttpGetHttpHeader struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s CreateContainerGroupRequestContainerLifecyclePreStopHandlerHttpGetHttpHeader) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestContainerLifecyclePreStopHandlerHttpGetHttpHeader) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestContainerLifecyclePreStopHandlerHttpGetHttpHeader) SetName(v string) *CreateContainerGroupRequestContainerLifecyclePreStopHandlerHttpGetHttpHeader {
	s.Name = &v
	return s
}

func (s *CreateContainerGroupRequestContainerLifecyclePreStopHandlerHttpGetHttpHeader) SetValue(v string) *CreateContainerGroupRequestContainerLifecyclePreStopHandlerHttpGetHttpHeader {
	s.Value = &v
	return s
}

type CreateContainerGroupRequestVolume struct {
	Name             *string                                            `json:"Name,omitempty" xml:"Name,omitempty"`
	NFSVolume        *CreateContainerGroupRequestVolumeNFSVolume        `json:"NFSVolume,omitempty" xml:"NFSVolume,omitempty" require:"true" type:"Struct"`
	ConfigFileVolume *CreateContainerGroupRequestVolumeConfigFileVolume `json:"ConfigFileVolume,omitempty" xml:"ConfigFileVolume,omitempty" require:"true" type:"Struct"`
	Type             *string                                            `json:"Type,omitempty" xml:"Type,omitempty"`
	EmptyDirVolume   *CreateContainerGroupRequestVolumeEmptyDirVolume   `json:"EmptyDirVolume,omitempty" xml:"EmptyDirVolume,omitempty" require:"true" type:"Struct"`
	DiskVolume       *CreateContainerGroupRequestVolumeDiskVolume       `json:"DiskVolume,omitempty" xml:"DiskVolume,omitempty" require:"true" type:"Struct"`
	FlexVolume       *CreateContainerGroupRequestVolumeFlexVolume       `json:"FlexVolume,omitempty" xml:"FlexVolume,omitempty" require:"true" type:"Struct"`
	HostPathVolume   *CreateContainerGroupRequestVolumeHostPathVolume   `json:"HostPathVolume,omitempty" xml:"HostPathVolume,omitempty" require:"true" type:"Struct"`
}

func (s CreateContainerGroupRequestVolume) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestVolume) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestVolume) SetName(v string) *CreateContainerGroupRequestVolume {
	s.Name = &v
	return s
}

func (s *CreateContainerGroupRequestVolume) SetNFSVolume(v *CreateContainerGroupRequestVolumeNFSVolume) *CreateContainerGroupRequestVolume {
	s.NFSVolume = v
	return s
}

func (s *CreateContainerGroupRequestVolume) SetConfigFileVolume(v *CreateContainerGroupRequestVolumeConfigFileVolume) *CreateContainerGroupRequestVolume {
	s.ConfigFileVolume = v
	return s
}

func (s *CreateContainerGroupRequestVolume) SetType(v string) *CreateContainerGroupRequestVolume {
	s.Type = &v
	return s
}

func (s *CreateContainerGroupRequestVolume) SetEmptyDirVolume(v *CreateContainerGroupRequestVolumeEmptyDirVolume) *CreateContainerGroupRequestVolume {
	s.EmptyDirVolume = v
	return s
}

func (s *CreateContainerGroupRequestVolume) SetDiskVolume(v *CreateContainerGroupRequestVolumeDiskVolume) *CreateContainerGroupRequestVolume {
	s.DiskVolume = v
	return s
}

func (s *CreateContainerGroupRequestVolume) SetFlexVolume(v *CreateContainerGroupRequestVolumeFlexVolume) *CreateContainerGroupRequestVolume {
	s.FlexVolume = v
	return s
}

func (s *CreateContainerGroupRequestVolume) SetHostPathVolume(v *CreateContainerGroupRequestVolumeHostPathVolume) *CreateContainerGroupRequestVolume {
	s.HostPathVolume = v
	return s
}

type CreateContainerGroupRequestVolumeNFSVolume struct {
	Server   *string `json:"Server,omitempty" xml:"Server,omitempty"`
	Path     *string `json:"Path,omitempty" xml:"Path,omitempty"`
	ReadOnly *bool   `json:"ReadOnly,omitempty" xml:"ReadOnly,omitempty"`
}

func (s CreateContainerGroupRequestVolumeNFSVolume) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestVolumeNFSVolume) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestVolumeNFSVolume) SetServer(v string) *CreateContainerGroupRequestVolumeNFSVolume {
	s.Server = &v
	return s
}

func (s *CreateContainerGroupRequestVolumeNFSVolume) SetPath(v string) *CreateContainerGroupRequestVolumeNFSVolume {
	s.Path = &v
	return s
}

func (s *CreateContainerGroupRequestVolumeNFSVolume) SetReadOnly(v bool) *CreateContainerGroupRequestVolumeNFSVolume {
	s.ReadOnly = &v
	return s
}

type CreateContainerGroupRequestVolumeConfigFileVolume struct {
	ConfigFileToPath []*CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath `json:"ConfigFileToPath,omitempty" xml:"ConfigFileToPath,omitempty" require:"true" type:"Repeated"`
	DefaultMode      *int                                                                 `json:"DefaultMode,omitempty" xml:"DefaultMode,omitempty"`
}

func (s CreateContainerGroupRequestVolumeConfigFileVolume) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestVolumeConfigFileVolume) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestVolumeConfigFileVolume) SetConfigFileToPath(v []*CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath) *CreateContainerGroupRequestVolumeConfigFileVolume {
	s.ConfigFileToPath = v
	return s
}

func (s *CreateContainerGroupRequestVolumeConfigFileVolume) SetDefaultMode(v int) *CreateContainerGroupRequestVolumeConfigFileVolume {
	s.DefaultMode = &v
	return s
}

type CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath struct {
	Content *string `json:"Content,omitempty" xml:"Content,omitempty"`
	Path    *string `json:"Path,omitempty" xml:"Path,omitempty"`
	Mode    *int    `json:"Mode,omitempty" xml:"Mode,omitempty"`
}

func (s CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath) SetContent(v string) *CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath {
	s.Content = &v
	return s
}

func (s *CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath) SetPath(v string) *CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath {
	s.Path = &v
	return s
}

func (s *CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath) SetMode(v int) *CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath {
	s.Mode = &v
	return s
}

type CreateContainerGroupRequestVolumeEmptyDirVolume struct {
	Medium *string `json:"Medium,omitempty" xml:"Medium,omitempty"`
}

func (s CreateContainerGroupRequestVolumeEmptyDirVolume) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestVolumeEmptyDirVolume) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestVolumeEmptyDirVolume) SetMedium(v string) *CreateContainerGroupRequestVolumeEmptyDirVolume {
	s.Medium = &v
	return s
}

type CreateContainerGroupRequestVolumeDiskVolume struct {
	DiskId   *string `json:"DiskId,omitempty" xml:"DiskId,omitempty"`
	FsType   *string `json:"FsType,omitempty" xml:"FsType,omitempty"`
	DiskSize *int    `json:"DiskSize,omitempty" xml:"DiskSize,omitempty"`
}

func (s CreateContainerGroupRequestVolumeDiskVolume) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestVolumeDiskVolume) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestVolumeDiskVolume) SetDiskId(v string) *CreateContainerGroupRequestVolumeDiskVolume {
	s.DiskId = &v
	return s
}

func (s *CreateContainerGroupRequestVolumeDiskVolume) SetFsType(v string) *CreateContainerGroupRequestVolumeDiskVolume {
	s.FsType = &v
	return s
}

func (s *CreateContainerGroupRequestVolumeDiskVolume) SetDiskSize(v int) *CreateContainerGroupRequestVolumeDiskVolume {
	s.DiskSize = &v
	return s
}

type CreateContainerGroupRequestVolumeFlexVolume struct {
	Driver  *string `json:"Driver,omitempty" xml:"Driver,omitempty"`
	FsType  *string `json:"FsType,omitempty" xml:"FsType,omitempty"`
	Options *string `json:"Options,omitempty" xml:"Options,omitempty"`
}

func (s CreateContainerGroupRequestVolumeFlexVolume) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestVolumeFlexVolume) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestVolumeFlexVolume) SetDriver(v string) *CreateContainerGroupRequestVolumeFlexVolume {
	s.Driver = &v
	return s
}

func (s *CreateContainerGroupRequestVolumeFlexVolume) SetFsType(v string) *CreateContainerGroupRequestVolumeFlexVolume {
	s.FsType = &v
	return s
}

func (s *CreateContainerGroupRequestVolumeFlexVolume) SetOptions(v string) *CreateContainerGroupRequestVolumeFlexVolume {
	s.Options = &v
	return s
}

type CreateContainerGroupRequestVolumeHostPathVolume struct {
	Type *string `json:"Type,omitempty" xml:"Type,omitempty"`
	Path *string `json:"Path,omitempty" xml:"Path,omitempty"`
}

func (s CreateContainerGroupRequestVolumeHostPathVolume) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestVolumeHostPathVolume) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestVolumeHostPathVolume) SetType(v string) *CreateContainerGroupRequestVolumeHostPathVolume {
	s.Type = &v
	return s
}

func (s *CreateContainerGroupRequestVolumeHostPathVolume) SetPath(v string) *CreateContainerGroupRequestVolumeHostPathVolume {
	s.Path = &v
	return s
}

type CreateContainerGroupRequestInitContainer struct {
	Name                     *string                                                   `json:"Name,omitempty" xml:"Name,omitempty"`
	Image                    *string                                                   `json:"Image,omitempty" xml:"Image,omitempty"`
	Cpu                      *float32                                                  `json:"Cpu,omitempty" xml:"Cpu,omitempty"`
	Memory                   *float32                                                  `json:"Memory,omitempty" xml:"Memory,omitempty"`
	WorkingDir               *string                                                   `json:"WorkingDir,omitempty" xml:"WorkingDir,omitempty"`
	ImagePullPolicy          *string                                                   `json:"ImagePullPolicy,omitempty" xml:"ImagePullPolicy,omitempty"`
	Command                  []*string                                                 `json:"Command,omitempty" xml:"Command,omitempty" require:"true" type:"Repeated"`
	Arg                      []*string                                                 `json:"Arg,omitempty" xml:"Arg,omitempty" require:"true" type:"Repeated"`
	VolumeMount              []*CreateContainerGroupRequestInitContainerVolumeMount    `json:"VolumeMount,omitempty" xml:"VolumeMount,omitempty" require:"true" type:"Repeated"`
	Port                     []*CreateContainerGroupRequestInitContainerPort           `json:"Port,omitempty" xml:"Port,omitempty" require:"true" type:"Repeated"`
	EnvironmentVar           []*CreateContainerGroupRequestInitContainerEnvironmentVar `json:"EnvironmentVar,omitempty" xml:"EnvironmentVar,omitempty" require:"true" type:"Repeated"`
	SecurityContext          *CreateContainerGroupRequestInitContainerSecurityContext  `json:"SecurityContext,omitempty" xml:"SecurityContext,omitempty" require:"true" type:"Struct"`
	Gpu                      *int                                                      `json:"Gpu,omitempty" xml:"Gpu,omitempty"`
	TerminationMessagePath   *string                                                   `json:"TerminationMessagePath,omitempty" xml:"TerminationMessagePath,omitempty"`
	TerminationMessagePolicy *string                                                   `json:"TerminationMessagePolicy,omitempty" xml:"TerminationMessagePolicy,omitempty"`
}

func (s CreateContainerGroupRequestInitContainer) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestInitContainer) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestInitContainer) SetName(v string) *CreateContainerGroupRequestInitContainer {
	s.Name = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainer) SetImage(v string) *CreateContainerGroupRequestInitContainer {
	s.Image = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainer) SetCpu(v float32) *CreateContainerGroupRequestInitContainer {
	s.Cpu = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainer) SetMemory(v float32) *CreateContainerGroupRequestInitContainer {
	s.Memory = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainer) SetWorkingDir(v string) *CreateContainerGroupRequestInitContainer {
	s.WorkingDir = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainer) SetImagePullPolicy(v string) *CreateContainerGroupRequestInitContainer {
	s.ImagePullPolicy = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainer) SetCommand(v []*string) *CreateContainerGroupRequestInitContainer {
	s.Command = v
	return s
}

func (s *CreateContainerGroupRequestInitContainer) SetArg(v []*string) *CreateContainerGroupRequestInitContainer {
	s.Arg = v
	return s
}

func (s *CreateContainerGroupRequestInitContainer) SetVolumeMount(v []*CreateContainerGroupRequestInitContainerVolumeMount) *CreateContainerGroupRequestInitContainer {
	s.VolumeMount = v
	return s
}

func (s *CreateContainerGroupRequestInitContainer) SetPort(v []*CreateContainerGroupRequestInitContainerPort) *CreateContainerGroupRequestInitContainer {
	s.Port = v
	return s
}

func (s *CreateContainerGroupRequestInitContainer) SetEnvironmentVar(v []*CreateContainerGroupRequestInitContainerEnvironmentVar) *CreateContainerGroupRequestInitContainer {
	s.EnvironmentVar = v
	return s
}

func (s *CreateContainerGroupRequestInitContainer) SetSecurityContext(v *CreateContainerGroupRequestInitContainerSecurityContext) *CreateContainerGroupRequestInitContainer {
	s.SecurityContext = v
	return s
}

func (s *CreateContainerGroupRequestInitContainer) SetGpu(v int) *CreateContainerGroupRequestInitContainer {
	s.Gpu = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainer) SetTerminationMessagePath(v string) *CreateContainerGroupRequestInitContainer {
	s.TerminationMessagePath = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainer) SetTerminationMessagePolicy(v string) *CreateContainerGroupRequestInitContainer {
	s.TerminationMessagePolicy = &v
	return s
}

type CreateContainerGroupRequestInitContainerVolumeMount struct {
	MountPath *string `json:"MountPath,omitempty" xml:"MountPath,omitempty"`
	ReadOnly  *bool   `json:"ReadOnly,omitempty" xml:"ReadOnly,omitempty"`
	Name      *string `json:"Name,omitempty" xml:"Name,omitempty"`
	SubPath   *string `json:"SubPath,omitempty" xml:"SubPath,omitempty"`
}

func (s CreateContainerGroupRequestInitContainerVolumeMount) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestInitContainerVolumeMount) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestInitContainerVolumeMount) SetMountPath(v string) *CreateContainerGroupRequestInitContainerVolumeMount {
	s.MountPath = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainerVolumeMount) SetReadOnly(v bool) *CreateContainerGroupRequestInitContainerVolumeMount {
	s.ReadOnly = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainerVolumeMount) SetName(v string) *CreateContainerGroupRequestInitContainerVolumeMount {
	s.Name = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainerVolumeMount) SetSubPath(v string) *CreateContainerGroupRequestInitContainerVolumeMount {
	s.SubPath = &v
	return s
}

type CreateContainerGroupRequestInitContainerPort struct {
	Protocol *string `json:"Protocol,omitempty" xml:"Protocol,omitempty"`
	Port     *int    `json:"Port,omitempty" xml:"Port,omitempty"`
}

func (s CreateContainerGroupRequestInitContainerPort) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestInitContainerPort) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestInitContainerPort) SetProtocol(v string) *CreateContainerGroupRequestInitContainerPort {
	s.Protocol = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainerPort) SetPort(v int) *CreateContainerGroupRequestInitContainerPort {
	s.Port = &v
	return s
}

type CreateContainerGroupRequestInitContainerEnvironmentVar struct {
	Key      *string                                                         `json:"Key,omitempty" xml:"Key,omitempty"`
	Value    *string                                                         `json:"Value,omitempty" xml:"Value,omitempty"`
	FieldRef *CreateContainerGroupRequestInitContainerEnvironmentVarFieldRef `json:"FieldRef,omitempty" xml:"FieldRef,omitempty" require:"true" type:"Struct"`
}

func (s CreateContainerGroupRequestInitContainerEnvironmentVar) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestInitContainerEnvironmentVar) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestInitContainerEnvironmentVar) SetKey(v string) *CreateContainerGroupRequestInitContainerEnvironmentVar {
	s.Key = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainerEnvironmentVar) SetValue(v string) *CreateContainerGroupRequestInitContainerEnvironmentVar {
	s.Value = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainerEnvironmentVar) SetFieldRef(v *CreateContainerGroupRequestInitContainerEnvironmentVarFieldRef) *CreateContainerGroupRequestInitContainerEnvironmentVar {
	s.FieldRef = v
	return s
}

type CreateContainerGroupRequestInitContainerEnvironmentVarFieldRef struct {
	FieldPath *string `json:"FieldPath,omitempty" xml:"FieldPath,omitempty"`
}

func (s CreateContainerGroupRequestInitContainerEnvironmentVarFieldRef) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestInitContainerEnvironmentVarFieldRef) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestInitContainerEnvironmentVarFieldRef) SetFieldPath(v string) *CreateContainerGroupRequestInitContainerEnvironmentVarFieldRef {
	s.FieldPath = &v
	return s
}

type CreateContainerGroupRequestInitContainerSecurityContext struct {
	Capability             *CreateContainerGroupRequestInitContainerSecurityContextCapability `json:"Capability,omitempty" xml:"Capability,omitempty" require:"true" type:"Struct"`
	ReadOnlyRootFilesystem *bool                                                              `json:"ReadOnlyRootFilesystem,omitempty" xml:"ReadOnlyRootFilesystem,omitempty"`
	RunAsUser              *int64                                                             `json:"RunAsUser,omitempty" xml:"RunAsUser,omitempty"`
}

func (s CreateContainerGroupRequestInitContainerSecurityContext) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestInitContainerSecurityContext) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestInitContainerSecurityContext) SetCapability(v *CreateContainerGroupRequestInitContainerSecurityContextCapability) *CreateContainerGroupRequestInitContainerSecurityContext {
	s.Capability = v
	return s
}

func (s *CreateContainerGroupRequestInitContainerSecurityContext) SetReadOnlyRootFilesystem(v bool) *CreateContainerGroupRequestInitContainerSecurityContext {
	s.ReadOnlyRootFilesystem = &v
	return s
}

func (s *CreateContainerGroupRequestInitContainerSecurityContext) SetRunAsUser(v int64) *CreateContainerGroupRequestInitContainerSecurityContext {
	s.RunAsUser = &v
	return s
}

type CreateContainerGroupRequestInitContainerSecurityContextCapability struct {
	Add []*string `json:"Add,omitempty" xml:"Add,omitempty" require:"true" type:"Repeated"`
}

func (s CreateContainerGroupRequestInitContainerSecurityContextCapability) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestInitContainerSecurityContextCapability) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestInitContainerSecurityContextCapability) SetAdd(v []*string) *CreateContainerGroupRequestInitContainerSecurityContextCapability {
	s.Add = v
	return s
}

type CreateContainerGroupRequestDnsConfig struct {
	NameServer []*string                                     `json:"NameServer,omitempty" xml:"NameServer,omitempty" type:"Repeated"`
	Search     []*string                                     `json:"Search,omitempty" xml:"Search,omitempty" type:"Repeated"`
	Option     []*CreateContainerGroupRequestDnsConfigOption `json:"Option,omitempty" xml:"Option,omitempty" type:"Repeated"`
}

func (s CreateContainerGroupRequestDnsConfig) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestDnsConfig) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestDnsConfig) SetNameServer(v []*string) *CreateContainerGroupRequestDnsConfig {
	s.NameServer = v
	return s
}

func (s *CreateContainerGroupRequestDnsConfig) SetSearch(v []*string) *CreateContainerGroupRequestDnsConfig {
	s.Search = v
	return s
}

func (s *CreateContainerGroupRequestDnsConfig) SetOption(v []*CreateContainerGroupRequestDnsConfigOption) *CreateContainerGroupRequestDnsConfig {
	s.Option = v
	return s
}

type CreateContainerGroupRequestDnsConfigOption struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s CreateContainerGroupRequestDnsConfigOption) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestDnsConfigOption) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestDnsConfigOption) SetName(v string) *CreateContainerGroupRequestDnsConfigOption {
	s.Name = &v
	return s
}

func (s *CreateContainerGroupRequestDnsConfigOption) SetValue(v string) *CreateContainerGroupRequestDnsConfigOption {
	s.Value = &v
	return s
}

type CreateContainerGroupRequestHostAliase struct {
	Ip       *string   `json:"Ip,omitempty" xml:"Ip,omitempty"`
	Hostname []*string `json:"Hostname,omitempty" xml:"Hostname,omitempty" require:"true" type:"Repeated"`
}

func (s CreateContainerGroupRequestHostAliase) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestHostAliase) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestHostAliase) SetIp(v string) *CreateContainerGroupRequestHostAliase {
	s.Ip = &v
	return s
}

func (s *CreateContainerGroupRequestHostAliase) SetHostname(v []*string) *CreateContainerGroupRequestHostAliase {
	s.Hostname = v
	return s
}

type CreateContainerGroupRequestArn struct {
	RoleArn       *string `json:"RoleArn,omitempty" xml:"RoleArn,omitempty"`
	RoleType      *string `json:"RoleType,omitempty" xml:"RoleType,omitempty"`
	AssumeRoleFor *string `json:"AssumeRoleFor,omitempty" xml:"AssumeRoleFor,omitempty"`
}

func (s CreateContainerGroupRequestArn) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestArn) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestArn) SetRoleArn(v string) *CreateContainerGroupRequestArn {
	s.RoleArn = &v
	return s
}

func (s *CreateContainerGroupRequestArn) SetRoleType(v string) *CreateContainerGroupRequestArn {
	s.RoleType = &v
	return s
}

func (s *CreateContainerGroupRequestArn) SetAssumeRoleFor(v string) *CreateContainerGroupRequestArn {
	s.AssumeRoleFor = &v
	return s
}

type CreateContainerGroupRequestSecurityContext struct {
	Sysctl []*CreateContainerGroupRequestSecurityContextSysctl `json:"Sysctl,omitempty" xml:"Sysctl,omitempty" type:"Repeated"`
}

func (s CreateContainerGroupRequestSecurityContext) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestSecurityContext) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestSecurityContext) SetSysctl(v []*CreateContainerGroupRequestSecurityContextSysctl) *CreateContainerGroupRequestSecurityContext {
	s.Sysctl = v
	return s
}

type CreateContainerGroupRequestSecurityContextSysctl struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s CreateContainerGroupRequestSecurityContextSysctl) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupRequestSecurityContextSysctl) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupRequestSecurityContextSysctl) SetName(v string) *CreateContainerGroupRequestSecurityContextSysctl {
	s.Name = &v
	return s
}

func (s *CreateContainerGroupRequestSecurityContextSysctl) SetValue(v string) *CreateContainerGroupRequestSecurityContextSysctl {
	s.Value = &v
	return s
}

type CreateContainerGroupResponse struct {
	RequestId        *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ContainerGroupId *string `json:"ContainerGroupId,omitempty" xml:"ContainerGroupId,omitempty" require:"true"`
}

func (s CreateContainerGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateContainerGroupResponse) GoString() string {
	return s.String()
}

func (s *CreateContainerGroupResponse) SetRequestId(v string) *CreateContainerGroupResponse {
	s.RequestId = &v
	return s
}

func (s *CreateContainerGroupResponse) SetContainerGroupId(v string) *CreateContainerGroupResponse {
	s.ContainerGroupId = &v
	return s
}

type DescribeContainerGroupsRequest struct {
	RegionId           *string                              `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ZoneId             *string                              `json:"ZoneId,omitempty" xml:"ZoneId,omitempty"`
	VSwitchId          *string                              `json:"VSwitchId,omitempty" xml:"VSwitchId,omitempty"`
	NextToken          *string                              `json:"NextToken,omitempty" xml:"NextToken,omitempty"`
	Limit              *int                                 `json:"Limit,omitempty" xml:"Limit,omitempty"`
	Tag                []*DescribeContainerGroupsRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
	ContainerGroupIds  *string                              `json:"ContainerGroupIds,omitempty" xml:"ContainerGroupIds,omitempty"`
	ContainerGroupName *string                              `json:"ContainerGroupName,omitempty" xml:"ContainerGroupName,omitempty"`
	Status             *string                              `json:"Status,omitempty" xml:"Status,omitempty"`
	ResourceGroupId    *string                              `json:"ResourceGroupId,omitempty" xml:"ResourceGroupId,omitempty"`
	WithEvent          *bool                                `json:"WithEvent,omitempty" xml:"WithEvent,omitempty"`
}

func (s DescribeContainerGroupsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsRequest) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsRequest) SetRegionId(v string) *DescribeContainerGroupsRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeContainerGroupsRequest) SetZoneId(v string) *DescribeContainerGroupsRequest {
	s.ZoneId = &v
	return s
}

func (s *DescribeContainerGroupsRequest) SetVSwitchId(v string) *DescribeContainerGroupsRequest {
	s.VSwitchId = &v
	return s
}

func (s *DescribeContainerGroupsRequest) SetNextToken(v string) *DescribeContainerGroupsRequest {
	s.NextToken = &v
	return s
}

func (s *DescribeContainerGroupsRequest) SetLimit(v int) *DescribeContainerGroupsRequest {
	s.Limit = &v
	return s
}

func (s *DescribeContainerGroupsRequest) SetTag(v []*DescribeContainerGroupsRequestTag) *DescribeContainerGroupsRequest {
	s.Tag = v
	return s
}

func (s *DescribeContainerGroupsRequest) SetContainerGroupIds(v string) *DescribeContainerGroupsRequest {
	s.ContainerGroupIds = &v
	return s
}

func (s *DescribeContainerGroupsRequest) SetContainerGroupName(v string) *DescribeContainerGroupsRequest {
	s.ContainerGroupName = &v
	return s
}

func (s *DescribeContainerGroupsRequest) SetStatus(v string) *DescribeContainerGroupsRequest {
	s.Status = &v
	return s
}

func (s *DescribeContainerGroupsRequest) SetResourceGroupId(v string) *DescribeContainerGroupsRequest {
	s.ResourceGroupId = &v
	return s
}

func (s *DescribeContainerGroupsRequest) SetWithEvent(v bool) *DescribeContainerGroupsRequest {
	s.WithEvent = &v
	return s
}

type DescribeContainerGroupsRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeContainerGroupsRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsRequestTag) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsRequestTag) SetKey(v string) *DescribeContainerGroupsRequestTag {
	s.Key = &v
	return s
}

func (s *DescribeContainerGroupsRequestTag) SetValue(v string) *DescribeContainerGroupsRequestTag {
	s.Value = &v
	return s
}

type DescribeContainerGroupsResponse struct {
	RequestId       *string                                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NextToken       *string                                           `json:"NextToken,omitempty" xml:"NextToken,omitempty" require:"true"`
	TotalCount      *int                                              `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	ContainerGroups []*DescribeContainerGroupsResponseContainerGroups `json:"ContainerGroups,omitempty" xml:"ContainerGroups,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponse) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponse) SetRequestId(v string) *DescribeContainerGroupsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeContainerGroupsResponse) SetNextToken(v string) *DescribeContainerGroupsResponse {
	s.NextToken = &v
	return s
}

func (s *DescribeContainerGroupsResponse) SetTotalCount(v int) *DescribeContainerGroupsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeContainerGroupsResponse) SetContainerGroups(v []*DescribeContainerGroupsResponseContainerGroups) *DescribeContainerGroupsResponse {
	s.ContainerGroups = v
	return s
}

type DescribeContainerGroupsResponseContainerGroups struct {
	ContainerGroupId      *string                                                           `json:"ContainerGroupId,omitempty" xml:"ContainerGroupId,omitempty" require:"true"`
	ContainerGroupName    *string                                                           `json:"ContainerGroupName,omitempty" xml:"ContainerGroupName,omitempty" require:"true"`
	RegionId              *string                                                           `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ZoneId                *string                                                           `json:"ZoneId,omitempty" xml:"ZoneId,omitempty" require:"true"`
	Memory                *float32                                                          `json:"Memory,omitempty" xml:"Memory,omitempty" require:"true"`
	Cpu                   *float32                                                          `json:"Cpu,omitempty" xml:"Cpu,omitempty" require:"true"`
	VSwitchId             *string                                                           `json:"VSwitchId,omitempty" xml:"VSwitchId,omitempty" require:"true"`
	SecurityGroupId       *string                                                           `json:"SecurityGroupId,omitempty" xml:"SecurityGroupId,omitempty" require:"true"`
	RestartPolicy         *string                                                           `json:"RestartPolicy,omitempty" xml:"RestartPolicy,omitempty" require:"true"`
	IntranetIp            *string                                                           `json:"IntranetIp,omitempty" xml:"IntranetIp,omitempty" require:"true"`
	Status                *string                                                           `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	InternetIp            *string                                                           `json:"InternetIp,omitempty" xml:"InternetIp,omitempty" require:"true"`
	CreationTime          *string                                                           `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	SucceededTime         *string                                                           `json:"SucceededTime,omitempty" xml:"SucceededTime,omitempty" require:"true"`
	EniInstanceId         *string                                                           `json:"EniInstanceId,omitempty" xml:"EniInstanceId,omitempty" require:"true"`
	InstanceType          *string                                                           `json:"InstanceType,omitempty" xml:"InstanceType,omitempty" require:"true"`
	ExpiredTime           *string                                                           `json:"ExpiredTime,omitempty" xml:"ExpiredTime,omitempty" require:"true"`
	FailedTime            *string                                                           `json:"FailedTime,omitempty" xml:"FailedTime,omitempty" require:"true"`
	RamRoleName           *string                                                           `json:"RamRoleName,omitempty" xml:"RamRoleName,omitempty" require:"true"`
	Ipv6Address           *string                                                           `json:"Ipv6Address,omitempty" xml:"Ipv6Address,omitempty" require:"true"`
	VpcId                 *string                                                           `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	Discount              *int                                                              `json:"Discount,omitempty" xml:"Discount,omitempty" require:"true"`
	ResourceGroupId       *string                                                           `json:"ResourceGroupId,omitempty" xml:"ResourceGroupId,omitempty" require:"true"`
	TenantEniInstanceId   *string                                                           `json:"TenantEniInstanceId,omitempty" xml:"TenantEniInstanceId,omitempty" require:"true"`
	TenantVSwitchId       *string                                                           `json:"TenantVSwitchId,omitempty" xml:"TenantVSwitchId,omitempty" require:"true"`
	TenantSecurityGroupId *string                                                           `json:"TenantSecurityGroupId,omitempty" xml:"TenantSecurityGroupId,omitempty" require:"true"`
	SpotStrategy          *string                                                           `json:"SpotStrategy,omitempty" xml:"SpotStrategy,omitempty" require:"true"`
	Tags                  []*DescribeContainerGroupsResponseContainerGroupsTags             `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Repeated"`
	Events                []*DescribeContainerGroupsResponseContainerGroupsEvents           `json:"Events,omitempty" xml:"Events,omitempty" require:"true" type:"Repeated"`
	Containers            []*DescribeContainerGroupsResponseContainerGroupsContainers       `json:"Containers,omitempty" xml:"Containers,omitempty" require:"true" type:"Repeated"`
	Volumes               []*DescribeContainerGroupsResponseContainerGroupsVolumes          `json:"Volumes,omitempty" xml:"Volumes,omitempty" require:"true" type:"Repeated"`
	InitContainers        []*DescribeContainerGroupsResponseContainerGroupsInitContainers   `json:"InitContainers,omitempty" xml:"InitContainers,omitempty" require:"true" type:"Repeated"`
	HostAliases           []*DescribeContainerGroupsResponseContainerGroupsHostAliases      `json:"HostAliases,omitempty" xml:"HostAliases,omitempty" require:"true" type:"Repeated"`
	DnsConfig             *DescribeContainerGroupsResponseContainerGroupsDnsConfig          `json:"DnsConfig,omitempty" xml:"DnsConfig,omitempty" require:"true" type:"Struct"`
	EciSecurityContext    *DescribeContainerGroupsResponseContainerGroupsEciSecurityContext `json:"EciSecurityContext,omitempty" xml:"EciSecurityContext,omitempty" require:"true" type:"Struct"`
}

func (s DescribeContainerGroupsResponseContainerGroups) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroups) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetContainerGroupId(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.ContainerGroupId = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetContainerGroupName(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.ContainerGroupName = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetRegionId(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.RegionId = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetZoneId(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.ZoneId = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetMemory(v float32) *DescribeContainerGroupsResponseContainerGroups {
	s.Memory = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetCpu(v float32) *DescribeContainerGroupsResponseContainerGroups {
	s.Cpu = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetVSwitchId(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.VSwitchId = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetSecurityGroupId(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.SecurityGroupId = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetRestartPolicy(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.RestartPolicy = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetIntranetIp(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.IntranetIp = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetStatus(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.Status = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetInternetIp(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.InternetIp = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetCreationTime(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.CreationTime = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetSucceededTime(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.SucceededTime = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetEniInstanceId(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.EniInstanceId = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetInstanceType(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.InstanceType = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetExpiredTime(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.ExpiredTime = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetFailedTime(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.FailedTime = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetRamRoleName(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.RamRoleName = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetIpv6Address(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.Ipv6Address = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetVpcId(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.VpcId = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetDiscount(v int) *DescribeContainerGroupsResponseContainerGroups {
	s.Discount = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetResourceGroupId(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.ResourceGroupId = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetTenantEniInstanceId(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.TenantEniInstanceId = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetTenantVSwitchId(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.TenantVSwitchId = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetTenantSecurityGroupId(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.TenantSecurityGroupId = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetSpotStrategy(v string) *DescribeContainerGroupsResponseContainerGroups {
	s.SpotStrategy = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetTags(v []*DescribeContainerGroupsResponseContainerGroupsTags) *DescribeContainerGroupsResponseContainerGroups {
	s.Tags = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetEvents(v []*DescribeContainerGroupsResponseContainerGroupsEvents) *DescribeContainerGroupsResponseContainerGroups {
	s.Events = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetContainers(v []*DescribeContainerGroupsResponseContainerGroupsContainers) *DescribeContainerGroupsResponseContainerGroups {
	s.Containers = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetVolumes(v []*DescribeContainerGroupsResponseContainerGroupsVolumes) *DescribeContainerGroupsResponseContainerGroups {
	s.Volumes = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetInitContainers(v []*DescribeContainerGroupsResponseContainerGroupsInitContainers) *DescribeContainerGroupsResponseContainerGroups {
	s.InitContainers = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetHostAliases(v []*DescribeContainerGroupsResponseContainerGroupsHostAliases) *DescribeContainerGroupsResponseContainerGroups {
	s.HostAliases = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetDnsConfig(v *DescribeContainerGroupsResponseContainerGroupsDnsConfig) *DescribeContainerGroupsResponseContainerGroups {
	s.DnsConfig = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroups) SetEciSecurityContext(v *DescribeContainerGroupsResponseContainerGroupsEciSecurityContext) *DescribeContainerGroupsResponseContainerGroups {
	s.EciSecurityContext = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsTags struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsTags) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsTags) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsTags) SetKey(v string) *DescribeContainerGroupsResponseContainerGroupsTags {
	s.Key = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsTags) SetValue(v string) *DescribeContainerGroupsResponseContainerGroupsTags {
	s.Value = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsEvents struct {
	Count          *int    `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
	Type           *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Name           *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Message        *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	FirstTimestamp *string `json:"FirstTimestamp,omitempty" xml:"FirstTimestamp,omitempty" require:"true"`
	LastTimestamp  *string `json:"LastTimestamp,omitempty" xml:"LastTimestamp,omitempty" require:"true"`
	Reason         *string `json:"Reason,omitempty" xml:"Reason,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsEvents) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsEvents) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsEvents) SetCount(v int) *DescribeContainerGroupsResponseContainerGroupsEvents {
	s.Count = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsEvents) SetType(v string) *DescribeContainerGroupsResponseContainerGroupsEvents {
	s.Type = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsEvents) SetName(v string) *DescribeContainerGroupsResponseContainerGroupsEvents {
	s.Name = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsEvents) SetMessage(v string) *DescribeContainerGroupsResponseContainerGroupsEvents {
	s.Message = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsEvents) SetFirstTimestamp(v string) *DescribeContainerGroupsResponseContainerGroupsEvents {
	s.FirstTimestamp = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsEvents) SetLastTimestamp(v string) *DescribeContainerGroupsResponseContainerGroupsEvents {
	s.LastTimestamp = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsEvents) SetReason(v string) *DescribeContainerGroupsResponseContainerGroupsEvents {
	s.Reason = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainers struct {
	Name            *string                                                                    `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Image           *string                                                                    `json:"Image,omitempty" xml:"Image,omitempty" require:"true"`
	Memory          *float32                                                                   `json:"Memory,omitempty" xml:"Memory,omitempty" require:"true"`
	Cpu             *float32                                                                   `json:"Cpu,omitempty" xml:"Cpu,omitempty" require:"true"`
	RestartCount    *int                                                                       `json:"RestartCount,omitempty" xml:"RestartCount,omitempty" require:"true"`
	WorkingDir      *string                                                                    `json:"WorkingDir,omitempty" xml:"WorkingDir,omitempty" require:"true"`
	ImagePullPolicy *string                                                                    `json:"ImagePullPolicy,omitempty" xml:"ImagePullPolicy,omitempty" require:"true"`
	Ready           *bool                                                                      `json:"Ready,omitempty" xml:"Ready,omitempty" require:"true"`
	Gpu             *int                                                                       `json:"Gpu,omitempty" xml:"Gpu,omitempty" require:"true"`
	Stdin           *bool                                                                      `json:"Stdin,omitempty" xml:"Stdin,omitempty" require:"true"`
	StdinOnce       *bool                                                                      `json:"StdinOnce,omitempty" xml:"StdinOnce,omitempty" require:"true"`
	Tty             *bool                                                                      `json:"Tty,omitempty" xml:"Tty,omitempty" require:"true"`
	VolumeMounts    []*DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts    `json:"VolumeMounts,omitempty" xml:"VolumeMounts,omitempty" require:"true" type:"Repeated"`
	Ports           []*DescribeContainerGroupsResponseContainerGroupsContainersPorts           `json:"Ports,omitempty" xml:"Ports,omitempty" require:"true" type:"Repeated"`
	EnvironmentVars []*DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars `json:"EnvironmentVars,omitempty" xml:"EnvironmentVars,omitempty" require:"true" type:"Repeated"`
	PreviousState   *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState     `json:"PreviousState,omitempty" xml:"PreviousState,omitempty" require:"true" type:"Struct"`
	CurrentState    *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState      `json:"CurrentState,omitempty" xml:"CurrentState,omitempty" require:"true" type:"Struct"`
	ReadinessProbe  *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe    `json:"ReadinessProbe,omitempty" xml:"ReadinessProbe,omitempty" require:"true" type:"Struct"`
	LivenessProbe   *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe     `json:"LivenessProbe,omitempty" xml:"LivenessProbe,omitempty" require:"true" type:"Struct"`
	SecurityContext *DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext   `json:"SecurityContext,omitempty" xml:"SecurityContext,omitempty" require:"true" type:"Struct"`
	Commands        []*string                                                                  `json:"Commands,omitempty" xml:"Commands,omitempty" require:"true" type:"Repeated"`
	Args            []*string                                                                  `json:"Args,omitempty" xml:"Args,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainers) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainers) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetName(v string) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.Name = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetImage(v string) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.Image = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetMemory(v float32) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.Memory = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetCpu(v float32) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.Cpu = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetRestartCount(v int) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.RestartCount = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetWorkingDir(v string) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.WorkingDir = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetImagePullPolicy(v string) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.ImagePullPolicy = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetReady(v bool) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.Ready = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetGpu(v int) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.Gpu = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetStdin(v bool) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.Stdin = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetStdinOnce(v bool) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.StdinOnce = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetTty(v bool) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.Tty = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetVolumeMounts(v []*DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.VolumeMounts = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetPorts(v []*DescribeContainerGroupsResponseContainerGroupsContainersPorts) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.Ports = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetEnvironmentVars(v []*DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.EnvironmentVars = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetPreviousState(v *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.PreviousState = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetCurrentState(v *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.CurrentState = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetReadinessProbe(v *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.ReadinessProbe = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetLivenessProbe(v *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.LivenessProbe = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetSecurityContext(v *DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.SecurityContext = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetCommands(v []*string) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.Commands = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainers) SetArgs(v []*string) *DescribeContainerGroupsResponseContainerGroupsContainers {
	s.Args = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts struct {
	Name      *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	MountPath *string `json:"MountPath,omitempty" xml:"MountPath,omitempty" require:"true"`
	ReadOnly  *bool   `json:"ReadOnly,omitempty" xml:"ReadOnly,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts) SetName(v string) *DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts {
	s.Name = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts) SetMountPath(v string) *DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts {
	s.MountPath = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts) SetReadOnly(v bool) *DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts {
	s.ReadOnly = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersPorts struct {
	Port     *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
	Protocol *string `json:"Protocol,omitempty" xml:"Protocol,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersPorts) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersPorts) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersPorts) SetPort(v int) *DescribeContainerGroupsResponseContainerGroupsContainersPorts {
	s.Port = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersPorts) SetProtocol(v string) *DescribeContainerGroupsResponseContainerGroupsContainersPorts {
	s.Protocol = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars struct {
	Key       *string                                                                           `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value     *string                                                                           `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	ValueFrom *DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFrom `json:"ValueFrom,omitempty" xml:"ValueFrom,omitempty" require:"true" type:"Struct"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars) SetKey(v string) *DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars {
	s.Key = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars) SetValue(v string) *DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars {
	s.Value = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars) SetValueFrom(v *DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFrom) *DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars {
	s.ValueFrom = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFrom struct {
	FieldRef *DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFromFieldRef `json:"FieldRef,omitempty" xml:"FieldRef,omitempty" require:"true" type:"Struct"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFrom) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFrom) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFrom) SetFieldRef(v *DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFromFieldRef) *DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFrom {
	s.FieldRef = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFromFieldRef struct {
	FieldPath *string `json:"FieldPath,omitempty" xml:"FieldPath,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFromFieldRef) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFromFieldRef) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFromFieldRef) SetFieldPath(v string) *DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFromFieldRef {
	s.FieldPath = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersPreviousState struct {
	State        *string `json:"State,omitempty" xml:"State,omitempty" require:"true"`
	DetailStatus *string `json:"DetailStatus,omitempty" xml:"DetailStatus,omitempty" require:"true"`
	ExitCode     *int    `json:"ExitCode,omitempty" xml:"ExitCode,omitempty" require:"true"`
	StartTime    *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	FinishTime   *string `json:"FinishTime,omitempty" xml:"FinishTime,omitempty" require:"true"`
	Reason       *string `json:"Reason,omitempty" xml:"Reason,omitempty" require:"true"`
	Message      *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Signal       *int    `json:"Signal,omitempty" xml:"Signal,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersPreviousState) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersPreviousState) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState) SetState(v string) *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState {
	s.State = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState) SetDetailStatus(v string) *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState {
	s.DetailStatus = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState) SetExitCode(v int) *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState {
	s.ExitCode = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState) SetStartTime(v string) *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState {
	s.StartTime = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState) SetFinishTime(v string) *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState {
	s.FinishTime = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState) SetReason(v string) *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState {
	s.Reason = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState) SetMessage(v string) *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState {
	s.Message = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState) SetSignal(v int) *DescribeContainerGroupsResponseContainerGroupsContainersPreviousState {
	s.Signal = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersCurrentState struct {
	State        *string `json:"State,omitempty" xml:"State,omitempty" require:"true"`
	DetailStatus *string `json:"DetailStatus,omitempty" xml:"DetailStatus,omitempty" require:"true"`
	ExitCode     *int    `json:"ExitCode,omitempty" xml:"ExitCode,omitempty" require:"true"`
	StartTime    *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	FinishTime   *string `json:"FinishTime,omitempty" xml:"FinishTime,omitempty" require:"true"`
	Reason       *string `json:"Reason,omitempty" xml:"Reason,omitempty" require:"true"`
	Message      *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Signal       *int    `json:"Signal,omitempty" xml:"Signal,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersCurrentState) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersCurrentState) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState) SetState(v string) *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState {
	s.State = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState) SetDetailStatus(v string) *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState {
	s.DetailStatus = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState) SetExitCode(v int) *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState {
	s.ExitCode = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState) SetStartTime(v string) *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState {
	s.StartTime = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState) SetFinishTime(v string) *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState {
	s.FinishTime = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState) SetReason(v string) *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState {
	s.Reason = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState) SetMessage(v string) *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState {
	s.Message = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState) SetSignal(v int) *DescribeContainerGroupsResponseContainerGroupsContainersCurrentState {
	s.Signal = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe struct {
	InitialDelaySeconds *int                                                                             `json:"InitialDelaySeconds,omitempty" xml:"InitialDelaySeconds,omitempty" require:"true"`
	PeriodSeconds       *int                                                                             `json:"PeriodSeconds,omitempty" xml:"PeriodSeconds,omitempty" require:"true"`
	TimeoutSeconds      *int                                                                             `json:"TimeoutSeconds,omitempty" xml:"TimeoutSeconds,omitempty" require:"true"`
	SuccessThreshold    *int                                                                             `json:"SuccessThreshold,omitempty" xml:"SuccessThreshold,omitempty" require:"true"`
	FailureThreshold    *int                                                                             `json:"FailureThreshold,omitempty" xml:"FailureThreshold,omitempty" require:"true"`
	HttpGet             *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet   `json:"HttpGet,omitempty" xml:"HttpGet,omitempty" require:"true" type:"Struct"`
	TcpSocket           *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket `json:"TcpSocket,omitempty" xml:"TcpSocket,omitempty" require:"true" type:"Struct"`
	Execs               []*string                                                                        `json:"Execs,omitempty" xml:"Execs,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe) SetInitialDelaySeconds(v int) *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe {
	s.InitialDelaySeconds = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe) SetPeriodSeconds(v int) *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe {
	s.PeriodSeconds = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe) SetTimeoutSeconds(v int) *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe {
	s.TimeoutSeconds = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe) SetSuccessThreshold(v int) *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe {
	s.SuccessThreshold = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe) SetFailureThreshold(v int) *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe {
	s.FailureThreshold = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe) SetHttpGet(v *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet) *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe {
	s.HttpGet = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe) SetTcpSocket(v *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket) *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe {
	s.TcpSocket = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe) SetExecs(v []*string) *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe {
	s.Execs = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet struct {
	Path   *string `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
	Port   *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
	Scheme *string `json:"Scheme,omitempty" xml:"Scheme,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet) SetPath(v string) *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet {
	s.Path = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet) SetPort(v int) *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet {
	s.Port = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet) SetScheme(v string) *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet {
	s.Scheme = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket struct {
	Host *string `json:"Host,omitempty" xml:"Host,omitempty" require:"true"`
	Port *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket) SetHost(v string) *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket {
	s.Host = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket) SetPort(v int) *DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket {
	s.Port = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe struct {
	InitialDelaySeconds *int                                                                            `json:"InitialDelaySeconds,omitempty" xml:"InitialDelaySeconds,omitempty" require:"true"`
	PeriodSeconds       *int                                                                            `json:"PeriodSeconds,omitempty" xml:"PeriodSeconds,omitempty" require:"true"`
	TimeoutSeconds      *int                                                                            `json:"TimeoutSeconds,omitempty" xml:"TimeoutSeconds,omitempty" require:"true"`
	SuccessThreshold    *int                                                                            `json:"SuccessThreshold,omitempty" xml:"SuccessThreshold,omitempty" require:"true"`
	FailureThreshold    *int                                                                            `json:"FailureThreshold,omitempty" xml:"FailureThreshold,omitempty" require:"true"`
	HttpGet             *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet   `json:"HttpGet,omitempty" xml:"HttpGet,omitempty" require:"true" type:"Struct"`
	TcpSocket           *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket `json:"TcpSocket,omitempty" xml:"TcpSocket,omitempty" require:"true" type:"Struct"`
	Execs               []*string                                                                       `json:"Execs,omitempty" xml:"Execs,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe) SetInitialDelaySeconds(v int) *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe {
	s.InitialDelaySeconds = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe) SetPeriodSeconds(v int) *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe {
	s.PeriodSeconds = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe) SetTimeoutSeconds(v int) *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe {
	s.TimeoutSeconds = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe) SetSuccessThreshold(v int) *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe {
	s.SuccessThreshold = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe) SetFailureThreshold(v int) *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe {
	s.FailureThreshold = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe) SetHttpGet(v *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet) *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe {
	s.HttpGet = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe) SetTcpSocket(v *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket) *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe {
	s.TcpSocket = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe) SetExecs(v []*string) *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe {
	s.Execs = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet struct {
	Path   *string `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
	Port   *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
	Scheme *string `json:"Scheme,omitempty" xml:"Scheme,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet) SetPath(v string) *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet {
	s.Path = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet) SetPort(v int) *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet {
	s.Port = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet) SetScheme(v string) *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet {
	s.Scheme = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket struct {
	Host *string `json:"Host,omitempty" xml:"Host,omitempty" require:"true"`
	Port *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket) SetHost(v string) *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket {
	s.Host = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket) SetPort(v int) *DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket {
	s.Port = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext struct {
	ReadOnlyRootFilesystem *bool                                                                              `json:"ReadOnlyRootFilesystem,omitempty" xml:"ReadOnlyRootFilesystem,omitempty" require:"true"`
	RunAsUser              *int64                                                                             `json:"RunAsUser,omitempty" xml:"RunAsUser,omitempty" require:"true"`
	Capability             *DescribeContainerGroupsResponseContainerGroupsContainersSecurityContextCapability `json:"Capability,omitempty" xml:"Capability,omitempty" require:"true" type:"Struct"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext) SetReadOnlyRootFilesystem(v bool) *DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext {
	s.ReadOnlyRootFilesystem = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext) SetRunAsUser(v int64) *DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext {
	s.RunAsUser = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext) SetCapability(v *DescribeContainerGroupsResponseContainerGroupsContainersSecurityContextCapability) *DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext {
	s.Capability = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsContainersSecurityContextCapability struct {
	Adds []*string `json:"Adds,omitempty" xml:"Adds,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersSecurityContextCapability) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsContainersSecurityContextCapability) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsContainersSecurityContextCapability) SetAdds(v []*string) *DescribeContainerGroupsResponseContainerGroupsContainersSecurityContextCapability {
	s.Adds = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsVolumes struct {
	Type                              *string                                                                                   `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Name                              *string                                                                                   `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	NFSVolumePath                     *string                                                                                   `json:"NFSVolumePath,omitempty" xml:"NFSVolumePath,omitempty" require:"true"`
	NFSVolumeServer                   *string                                                                                   `json:"NFSVolumeServer,omitempty" xml:"NFSVolumeServer,omitempty" require:"true"`
	NFSVolumeReadOnly                 *bool                                                                                     `json:"NFSVolumeReadOnly,omitempty" xml:"NFSVolumeReadOnly,omitempty" require:"true"`
	DiskVolumeDiskId                  *string                                                                                   `json:"DiskVolumeDiskId,omitempty" xml:"DiskVolumeDiskId,omitempty" require:"true"`
	DiskVolumeFsType                  *string                                                                                   `json:"DiskVolumeFsType,omitempty" xml:"DiskVolumeFsType,omitempty" require:"true"`
	FlexVolumeDriver                  *string                                                                                   `json:"FlexVolumeDriver,omitempty" xml:"FlexVolumeDriver,omitempty" require:"true"`
	FlexVolumeFsType                  *string                                                                                   `json:"FlexVolumeFsType,omitempty" xml:"FlexVolumeFsType,omitempty" require:"true"`
	FlexVolumeOptions                 *string                                                                                   `json:"FlexVolumeOptions,omitempty" xml:"FlexVolumeOptions,omitempty" require:"true"`
	ConfigFileVolumeConfigFileToPaths []*DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths `json:"ConfigFileVolumeConfigFileToPaths,omitempty" xml:"ConfigFileVolumeConfigFileToPaths,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupsResponseContainerGroupsVolumes) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsVolumes) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsVolumes) SetType(v string) *DescribeContainerGroupsResponseContainerGroupsVolumes {
	s.Type = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsVolumes) SetName(v string) *DescribeContainerGroupsResponseContainerGroupsVolumes {
	s.Name = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsVolumes) SetNFSVolumePath(v string) *DescribeContainerGroupsResponseContainerGroupsVolumes {
	s.NFSVolumePath = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsVolumes) SetNFSVolumeServer(v string) *DescribeContainerGroupsResponseContainerGroupsVolumes {
	s.NFSVolumeServer = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsVolumes) SetNFSVolumeReadOnly(v bool) *DescribeContainerGroupsResponseContainerGroupsVolumes {
	s.NFSVolumeReadOnly = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsVolumes) SetDiskVolumeDiskId(v string) *DescribeContainerGroupsResponseContainerGroupsVolumes {
	s.DiskVolumeDiskId = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsVolumes) SetDiskVolumeFsType(v string) *DescribeContainerGroupsResponseContainerGroupsVolumes {
	s.DiskVolumeFsType = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsVolumes) SetFlexVolumeDriver(v string) *DescribeContainerGroupsResponseContainerGroupsVolumes {
	s.FlexVolumeDriver = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsVolumes) SetFlexVolumeFsType(v string) *DescribeContainerGroupsResponseContainerGroupsVolumes {
	s.FlexVolumeFsType = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsVolumes) SetFlexVolumeOptions(v string) *DescribeContainerGroupsResponseContainerGroupsVolumes {
	s.FlexVolumeOptions = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsVolumes) SetConfigFileVolumeConfigFileToPaths(v []*DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths) *DescribeContainerGroupsResponseContainerGroupsVolumes {
	s.ConfigFileVolumeConfigFileToPaths = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths struct {
	Content *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
	Path    *string `json:"Path,omitempty" xml:"Path,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths) SetContent(v string) *DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths {
	s.Content = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths) SetPath(v string) *DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths {
	s.Path = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsInitContainers struct {
	Name            *string                                                                        `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Image           *string                                                                        `json:"Image,omitempty" xml:"Image,omitempty" require:"true"`
	Cpu             *float32                                                                       `json:"Cpu,omitempty" xml:"Cpu,omitempty" require:"true"`
	Memory          *float32                                                                       `json:"Memory,omitempty" xml:"Memory,omitempty" require:"true"`
	RestartCount    *int                                                                           `json:"RestartCount,omitempty" xml:"RestartCount,omitempty" require:"true"`
	WorkingDir      *string                                                                        `json:"WorkingDir,omitempty" xml:"WorkingDir,omitempty" require:"true"`
	ImagePullPolicy *string                                                                        `json:"ImagePullPolicy,omitempty" xml:"ImagePullPolicy,omitempty" require:"true"`
	Ready           *bool                                                                          `json:"Ready,omitempty" xml:"Ready,omitempty" require:"true"`
	Gpu             *int                                                                           `json:"Gpu,omitempty" xml:"Gpu,omitempty" require:"true"`
	VolumeMounts    []*DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts    `json:"VolumeMounts,omitempty" xml:"VolumeMounts,omitempty" require:"true" type:"Repeated"`
	Ports           []*DescribeContainerGroupsResponseContainerGroupsInitContainersPorts           `json:"Ports,omitempty" xml:"Ports,omitempty" require:"true" type:"Repeated"`
	EnvironmentVars []*DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars `json:"EnvironmentVars,omitempty" xml:"EnvironmentVars,omitempty" require:"true" type:"Repeated"`
	PreviousState   *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState     `json:"PreviousState,omitempty" xml:"PreviousState,omitempty" require:"true" type:"Struct"`
	CurrentState    *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState      `json:"CurrentState,omitempty" xml:"CurrentState,omitempty" require:"true" type:"Struct"`
	SecurityContext *DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext   `json:"SecurityContext,omitempty" xml:"SecurityContext,omitempty" require:"true" type:"Struct"`
	Command         []*string                                                                      `json:"Command,omitempty" xml:"Command,omitempty" require:"true" type:"Repeated"`
	Args            []*string                                                                      `json:"Args,omitempty" xml:"Args,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainers) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainers) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetName(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.Name = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetImage(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.Image = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetCpu(v float32) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.Cpu = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetMemory(v float32) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.Memory = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetRestartCount(v int) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.RestartCount = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetWorkingDir(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.WorkingDir = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetImagePullPolicy(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.ImagePullPolicy = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetReady(v bool) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.Ready = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetGpu(v int) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.Gpu = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetVolumeMounts(v []*DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.VolumeMounts = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetPorts(v []*DescribeContainerGroupsResponseContainerGroupsInitContainersPorts) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.Ports = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetEnvironmentVars(v []*DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.EnvironmentVars = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetPreviousState(v *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.PreviousState = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetCurrentState(v *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.CurrentState = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetSecurityContext(v *DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.SecurityContext = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetCommand(v []*string) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.Command = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainers) SetArgs(v []*string) *DescribeContainerGroupsResponseContainerGroupsInitContainers {
	s.Args = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts struct {
	Name      *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	MountPath *string `json:"MountPath,omitempty" xml:"MountPath,omitempty" require:"true"`
	ReadOnly  *bool   `json:"ReadOnly,omitempty" xml:"ReadOnly,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts) SetName(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts {
	s.Name = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts) SetMountPath(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts {
	s.MountPath = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts) SetReadOnly(v bool) *DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts {
	s.ReadOnly = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsInitContainersPorts struct {
	Port     *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
	Protocol *string `json:"Protocol,omitempty" xml:"Protocol,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersPorts) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersPorts) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersPorts) SetPort(v int) *DescribeContainerGroupsResponseContainerGroupsInitContainersPorts {
	s.Port = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersPorts) SetProtocol(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersPorts {
	s.Protocol = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars struct {
	Key       *string                                                                               `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value     *string                                                                               `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	ValueFrom *DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFrom `json:"ValueFrom,omitempty" xml:"ValueFrom,omitempty" require:"true" type:"Struct"`
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars) SetKey(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars {
	s.Key = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars) SetValue(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars {
	s.Value = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars) SetValueFrom(v *DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFrom) *DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars {
	s.ValueFrom = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFrom struct {
	FieldRef *DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFromFieldRef `json:"FieldRef,omitempty" xml:"FieldRef,omitempty" require:"true" type:"Struct"`
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFrom) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFrom) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFrom) SetFieldRef(v *DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFromFieldRef) *DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFrom {
	s.FieldRef = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFromFieldRef struct {
	FieldPath *string `json:"FieldPath,omitempty" xml:"FieldPath,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFromFieldRef) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFromFieldRef) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFromFieldRef) SetFieldPath(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFromFieldRef {
	s.FieldPath = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState struct {
	State        *string `json:"State,omitempty" xml:"State,omitempty" require:"true"`
	DetailStatus *string `json:"DetailStatus,omitempty" xml:"DetailStatus,omitempty" require:"true"`
	ExitCode     *int    `json:"ExitCode,omitempty" xml:"ExitCode,omitempty" require:"true"`
	StartTime    *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	FinishTime   *string `json:"FinishTime,omitempty" xml:"FinishTime,omitempty" require:"true"`
	Reason       *string `json:"Reason,omitempty" xml:"Reason,omitempty" require:"true"`
	Message      *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Signal       *int    `json:"Signal,omitempty" xml:"Signal,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState) SetState(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState {
	s.State = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState) SetDetailStatus(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState {
	s.DetailStatus = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState) SetExitCode(v int) *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState {
	s.ExitCode = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState) SetStartTime(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState {
	s.StartTime = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState) SetFinishTime(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState {
	s.FinishTime = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState) SetReason(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState {
	s.Reason = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState) SetMessage(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState {
	s.Message = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState) SetSignal(v int) *DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState {
	s.Signal = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState struct {
	State        *string `json:"State,omitempty" xml:"State,omitempty" require:"true"`
	DetailStatus *string `json:"DetailStatus,omitempty" xml:"DetailStatus,omitempty" require:"true"`
	ExitCode     *int    `json:"ExitCode,omitempty" xml:"ExitCode,omitempty" require:"true"`
	StartTime    *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	FinishTime   *string `json:"FinishTime,omitempty" xml:"FinishTime,omitempty" require:"true"`
	Reason       *string `json:"Reason,omitempty" xml:"Reason,omitempty" require:"true"`
	Message      *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Signal       *int    `json:"Signal,omitempty" xml:"Signal,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState) SetState(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState {
	s.State = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState) SetDetailStatus(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState {
	s.DetailStatus = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState) SetExitCode(v int) *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState {
	s.ExitCode = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState) SetStartTime(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState {
	s.StartTime = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState) SetFinishTime(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState {
	s.FinishTime = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState) SetReason(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState {
	s.Reason = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState) SetMessage(v string) *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState {
	s.Message = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState) SetSignal(v int) *DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState {
	s.Signal = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext struct {
	ReadOnlyRootFilesystem *bool                                                                                  `json:"ReadOnlyRootFilesystem,omitempty" xml:"ReadOnlyRootFilesystem,omitempty" require:"true"`
	RunAsUser              *int64                                                                                 `json:"RunAsUser,omitempty" xml:"RunAsUser,omitempty" require:"true"`
	Capability             *DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContextCapability `json:"Capability,omitempty" xml:"Capability,omitempty" require:"true" type:"Struct"`
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext) SetReadOnlyRootFilesystem(v bool) *DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext {
	s.ReadOnlyRootFilesystem = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext) SetRunAsUser(v int64) *DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext {
	s.RunAsUser = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext) SetCapability(v *DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContextCapability) *DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext {
	s.Capability = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContextCapability struct {
	Adds []*string `json:"Adds,omitempty" xml:"Adds,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContextCapability) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContextCapability) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContextCapability) SetAdds(v []*string) *DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContextCapability {
	s.Adds = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsHostAliases struct {
	Ip        *string   `json:"Ip,omitempty" xml:"Ip,omitempty" require:"true"`
	Hostnames []*string `json:"Hostnames,omitempty" xml:"Hostnames,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupsResponseContainerGroupsHostAliases) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsHostAliases) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsHostAliases) SetIp(v string) *DescribeContainerGroupsResponseContainerGroupsHostAliases {
	s.Ip = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsHostAliases) SetHostnames(v []*string) *DescribeContainerGroupsResponseContainerGroupsHostAliases {
	s.Hostnames = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsDnsConfig struct {
	Options     []*DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions `json:"Options,omitempty" xml:"Options,omitempty" require:"true" type:"Repeated"`
	NameServers []*string                                                         `json:"NameServers,omitempty" xml:"NameServers,omitempty" require:"true" type:"Repeated"`
	Searches    []*string                                                         `json:"Searches,omitempty" xml:"Searches,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupsResponseContainerGroupsDnsConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsDnsConfig) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsDnsConfig) SetOptions(v []*DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions) *DescribeContainerGroupsResponseContainerGroupsDnsConfig {
	s.Options = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsDnsConfig) SetNameServers(v []*string) *DescribeContainerGroupsResponseContainerGroupsDnsConfig {
	s.NameServers = v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsDnsConfig) SetSearches(v []*string) *DescribeContainerGroupsResponseContainerGroupsDnsConfig {
	s.Searches = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions) SetName(v string) *DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions {
	s.Name = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions) SetValue(v string) *DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions {
	s.Value = &v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsEciSecurityContext struct {
	Sysctls []*DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls `json:"Sysctls,omitempty" xml:"Sysctls,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeContainerGroupsResponseContainerGroupsEciSecurityContext) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsEciSecurityContext) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsEciSecurityContext) SetSysctls(v []*DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls) *DescribeContainerGroupsResponseContainerGroupsEciSecurityContext {
	s.Sysctls = v
	return s
}

type DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls) String() string {
	return tea.Prettify(s)
}

func (s DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls) GoString() string {
	return s.String()
}

func (s *DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls) SetName(v string) *DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls {
	s.Name = &v
	return s
}

func (s *DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls) SetValue(v string) *DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls {
	s.Value = &v
	return s
}

type DeleteContainerGroupRequest struct {
	RegionId         *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ContainerGroupId *string `json:"ContainerGroupId,omitempty" xml:"ContainerGroupId,omitempty" require:"true"`
	ClientToken      *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
}

func (s DeleteContainerGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteContainerGroupRequest) GoString() string {
	return s.String()
}

func (s *DeleteContainerGroupRequest) SetRegionId(v string) *DeleteContainerGroupRequest {
	s.RegionId = &v
	return s
}

func (s *DeleteContainerGroupRequest) SetContainerGroupId(v string) *DeleteContainerGroupRequest {
	s.ContainerGroupId = &v
	return s
}

func (s *DeleteContainerGroupRequest) SetClientToken(v string) *DeleteContainerGroupRequest {
	s.ClientToken = &v
	return s
}

type DeleteContainerGroupResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteContainerGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteContainerGroupResponse) GoString() string {
	return s.String()
}

func (s *DeleteContainerGroupResponse) SetRequestId(v string) *DeleteContainerGroupResponse {
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
	client.Endpoint, _err = client.GetEndpoint(tea.String("eci"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) DescribeRegionsWithOptions(request *DescribeRegionsRequest, runtime *util.RuntimeOptions) (_result *DescribeRegionsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeRegionsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeRegions"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
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

func (client *Client) DescribeImageCachesWithOptions(request *DescribeImageCachesRequest, runtime *util.RuntimeOptions) (_result *DescribeImageCachesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeImageCachesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeImageCaches"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeImageCaches(request *DescribeImageCachesRequest) (_result *DescribeImageCachesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeImageCachesResponse{}
	_body, _err := client.DescribeImageCachesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteImageCacheWithOptions(request *DeleteImageCacheRequest, runtime *util.RuntimeOptions) (_result *DeleteImageCacheResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteImageCacheResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteImageCache"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteImageCache(request *DeleteImageCacheRequest) (_result *DeleteImageCacheResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteImageCacheResponse{}
	_body, _err := client.DeleteImageCacheWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateImageCacheWithOptions(request *CreateImageCacheRequest, runtime *util.RuntimeOptions) (_result *CreateImageCacheResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateImageCacheResponse{}
	_body, _err := client.DoRequest(tea.String("CreateImageCache"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateImageCache(request *CreateImageCacheRequest) (_result *CreateImageCacheResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateImageCacheResponse{}
	_body, _err := client.CreateImageCacheWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeMultiContainerGroupMetricWithOptions(request *DescribeMultiContainerGroupMetricRequest, runtime *util.RuntimeOptions) (_result *DescribeMultiContainerGroupMetricResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeMultiContainerGroupMetricResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeMultiContainerGroupMetric"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeMultiContainerGroupMetric(request *DescribeMultiContainerGroupMetricRequest) (_result *DescribeMultiContainerGroupMetricResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeMultiContainerGroupMetricResponse{}
	_body, _err := client.DescribeMultiContainerGroupMetricWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeContainerGroupMetricWithOptions(request *DescribeContainerGroupMetricRequest, runtime *util.RuntimeOptions) (_result *DescribeContainerGroupMetricResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeContainerGroupMetricResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeContainerGroupMetric"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeContainerGroupMetric(request *DescribeContainerGroupMetricRequest) (_result *DescribeContainerGroupMetricResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeContainerGroupMetricResponse{}
	_body, _err := client.DescribeContainerGroupMetricWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateContainerGroupByTemplateWithOptions(request *UpdateContainerGroupByTemplateRequest, runtime *util.RuntimeOptions) (_result *UpdateContainerGroupByTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateContainerGroupByTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateContainerGroupByTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateContainerGroupByTemplate(request *UpdateContainerGroupByTemplateRequest) (_result *UpdateContainerGroupByTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateContainerGroupByTemplateResponse{}
	_body, _err := client.UpdateContainerGroupByTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateContainerGroupFromTemplateWithOptions(request *CreateContainerGroupFromTemplateRequest, runtime *util.RuntimeOptions) (_result *CreateContainerGroupFromTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateContainerGroupFromTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("CreateContainerGroupFromTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateContainerGroupFromTemplate(request *CreateContainerGroupFromTemplateRequest) (_result *CreateContainerGroupFromTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateContainerGroupFromTemplateResponse{}
	_body, _err := client.CreateContainerGroupFromTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ExportContainerGroupTemplateWithOptions(request *ExportContainerGroupTemplateRequest, runtime *util.RuntimeOptions) (_result *ExportContainerGroupTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ExportContainerGroupTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("ExportContainerGroupTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ExportContainerGroupTemplate(request *ExportContainerGroupTemplateRequest) (_result *ExportContainerGroupTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ExportContainerGroupTemplateResponse{}
	_body, _err := client.ExportContainerGroupTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RestartContainerGroupWithOptions(request *RestartContainerGroupRequest, runtime *util.RuntimeOptions) (_result *RestartContainerGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RestartContainerGroupResponse{}
	_body, _err := client.DoRequest(tea.String("RestartContainerGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RestartContainerGroup(request *RestartContainerGroupRequest) (_result *RestartContainerGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RestartContainerGroupResponse{}
	_body, _err := client.RestartContainerGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateContainerGroupWithOptions(request *UpdateContainerGroupRequest, runtime *util.RuntimeOptions) (_result *UpdateContainerGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateContainerGroupResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateContainerGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateContainerGroup(request *UpdateContainerGroupRequest) (_result *UpdateContainerGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateContainerGroupResponse{}
	_body, _err := client.UpdateContainerGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeContainerGroupPriceWithOptions(request *DescribeContainerGroupPriceRequest, runtime *util.RuntimeOptions) (_result *DescribeContainerGroupPriceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeContainerGroupPriceResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeContainerGroupPrice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeContainerGroupPrice(request *DescribeContainerGroupPriceRequest) (_result *DescribeContainerGroupPriceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeContainerGroupPriceResponse{}
	_body, _err := client.DescribeContainerGroupPriceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ExecContainerCommandWithOptions(request *ExecContainerCommandRequest, runtime *util.RuntimeOptions) (_result *ExecContainerCommandResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ExecContainerCommandResponse{}
	_body, _err := client.DoRequest(tea.String("ExecContainerCommand"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ExecContainerCommand(request *ExecContainerCommandRequest) (_result *ExecContainerCommandResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ExecContainerCommandResponse{}
	_body, _err := client.ExecContainerCommandWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeContainerLogWithOptions(request *DescribeContainerLogRequest, runtime *util.RuntimeOptions) (_result *DescribeContainerLogResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeContainerLogResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeContainerLog"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeContainerLog(request *DescribeContainerLogRequest) (_result *DescribeContainerLogResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeContainerLogResponse{}
	_body, _err := client.DescribeContainerLogWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateContainerGroupWithOptions(request *CreateContainerGroupRequest, runtime *util.RuntimeOptions) (_result *CreateContainerGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateContainerGroupResponse{}
	_body, _err := client.DoRequest(tea.String("CreateContainerGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateContainerGroup(request *CreateContainerGroupRequest) (_result *CreateContainerGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateContainerGroupResponse{}
	_body, _err := client.CreateContainerGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeContainerGroupsWithOptions(request *DescribeContainerGroupsRequest, runtime *util.RuntimeOptions) (_result *DescribeContainerGroupsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeContainerGroupsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeContainerGroups"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeContainerGroups(request *DescribeContainerGroupsRequest) (_result *DescribeContainerGroupsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeContainerGroupsResponse{}
	_body, _err := client.DescribeContainerGroupsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteContainerGroupWithOptions(request *DeleteContainerGroupRequest, runtime *util.RuntimeOptions) (_result *DeleteContainerGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteContainerGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteContainerGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-08-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteContainerGroup(request *DeleteContainerGroupRequest) (_result *DeleteContainerGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteContainerGroupResponse{}
	_body, _err := client.DeleteContainerGroupWithOptions(request, runtime)
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
