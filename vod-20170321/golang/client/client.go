// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type ListDynamicImageRequest struct {
	VideoId *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
}

func (s ListDynamicImageRequest) String() string {
	return tea.Prettify(s)
}

func (s ListDynamicImageRequest) GoString() string {
	return s.String()
}

func (s *ListDynamicImageRequest) SetVideoId(v string) *ListDynamicImageRequest {
	s.VideoId = &v
	return s
}

type ListDynamicImageResponse struct {
	RequestId        *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DynamicImageList []*ListDynamicImageResponseDynamicImageList `json:"DynamicImageList,omitempty" xml:"DynamicImageList,omitempty" require:"true" type:"Repeated"`
}

func (s ListDynamicImageResponse) String() string {
	return tea.Prettify(s)
}

func (s ListDynamicImageResponse) GoString() string {
	return s.String()
}

func (s *ListDynamicImageResponse) SetRequestId(v string) *ListDynamicImageResponse {
	s.RequestId = &v
	return s
}

func (s *ListDynamicImageResponse) SetDynamicImageList(v []*ListDynamicImageResponseDynamicImageList) *ListDynamicImageResponse {
	s.DynamicImageList = v
	return s
}

type ListDynamicImageResponseDynamicImageList struct {
	VideoId        *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	DynamicImageId *string `json:"DynamicImageId,omitempty" xml:"DynamicImageId,omitempty" require:"true"`
	JobId          *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
	FileURL        *string `json:"FileURL,omitempty" xml:"FileURL,omitempty" require:"true"`
	Width          *string `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height         *string `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Duration       *string `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Format         *string `json:"Format,omitempty" xml:"Format,omitempty" require:"true"`
	FileSize       *string `json:"FileSize,omitempty" xml:"FileSize,omitempty" require:"true"`
	Fps            *string `json:"Fps,omitempty" xml:"Fps,omitempty" require:"true"`
	CreationTime   *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
}

func (s ListDynamicImageResponseDynamicImageList) String() string {
	return tea.Prettify(s)
}

func (s ListDynamicImageResponseDynamicImageList) GoString() string {
	return s.String()
}

func (s *ListDynamicImageResponseDynamicImageList) SetVideoId(v string) *ListDynamicImageResponseDynamicImageList {
	s.VideoId = &v
	return s
}

func (s *ListDynamicImageResponseDynamicImageList) SetDynamicImageId(v string) *ListDynamicImageResponseDynamicImageList {
	s.DynamicImageId = &v
	return s
}

func (s *ListDynamicImageResponseDynamicImageList) SetJobId(v string) *ListDynamicImageResponseDynamicImageList {
	s.JobId = &v
	return s
}

func (s *ListDynamicImageResponseDynamicImageList) SetFileURL(v string) *ListDynamicImageResponseDynamicImageList {
	s.FileURL = &v
	return s
}

func (s *ListDynamicImageResponseDynamicImageList) SetWidth(v string) *ListDynamicImageResponseDynamicImageList {
	s.Width = &v
	return s
}

func (s *ListDynamicImageResponseDynamicImageList) SetHeight(v string) *ListDynamicImageResponseDynamicImageList {
	s.Height = &v
	return s
}

func (s *ListDynamicImageResponseDynamicImageList) SetDuration(v string) *ListDynamicImageResponseDynamicImageList {
	s.Duration = &v
	return s
}

func (s *ListDynamicImageResponseDynamicImageList) SetFormat(v string) *ListDynamicImageResponseDynamicImageList {
	s.Format = &v
	return s
}

func (s *ListDynamicImageResponseDynamicImageList) SetFileSize(v string) *ListDynamicImageResponseDynamicImageList {
	s.FileSize = &v
	return s
}

func (s *ListDynamicImageResponseDynamicImageList) SetFps(v string) *ListDynamicImageResponseDynamicImageList {
	s.Fps = &v
	return s
}

func (s *ListDynamicImageResponseDynamicImageList) SetCreationTime(v string) *ListDynamicImageResponseDynamicImageList {
	s.CreationTime = &v
	return s
}

type DeleteDynamicImageRequest struct {
	VideoId         *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	DynamicImageIds *string `json:"DynamicImageIds,omitempty" xml:"DynamicImageIds,omitempty"`
}

func (s DeleteDynamicImageRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteDynamicImageRequest) GoString() string {
	return s.String()
}

func (s *DeleteDynamicImageRequest) SetVideoId(v string) *DeleteDynamicImageRequest {
	s.VideoId = &v
	return s
}

func (s *DeleteDynamicImageRequest) SetDynamicImageIds(v string) *DeleteDynamicImageRequest {
	s.DynamicImageIds = &v
	return s
}

type DeleteDynamicImageResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteDynamicImageResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteDynamicImageResponse) GoString() string {
	return s.String()
}

func (s *DeleteDynamicImageResponse) SetRequestId(v string) *DeleteDynamicImageResponse {
	s.RequestId = &v
	return s
}

type DescribeVodUserTagsRequest struct {
}

func (s DescribeVodUserTagsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodUserTagsRequest) GoString() string {
	return s.String()
}

type DescribeVodUserTagsResponse struct {
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Tags      []*DescribeVodUserTagsResponseTags `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodUserTagsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodUserTagsResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodUserTagsResponse) SetRequestId(v string) *DescribeVodUserTagsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodUserTagsResponse) SetTags(v []*DescribeVodUserTagsResponseTags) *DescribeVodUserTagsResponse {
	s.Tags = v
	return s
}

type DescribeVodUserTagsResponseTags struct {
	Key   *string   `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value []*string `json:"Value,omitempty" xml:"Value,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodUserTagsResponseTags) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodUserTagsResponseTags) GoString() string {
	return s.String()
}

func (s *DescribeVodUserTagsResponseTags) SetKey(v string) *DescribeVodUserTagsResponseTags {
	s.Key = &v
	return s
}

func (s *DescribeVodUserTagsResponseTags) SetValue(v []*string) *DescribeVodUserTagsResponseTags {
	s.Value = v
	return s
}

type DescribeVodTagResourcesRequest struct {
	ResourceId   []*string                            `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true" type:"Repeated"`
	ResourceType *string                              `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	Tag          []*DescribeVodTagResourcesRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s DescribeVodTagResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodTagResourcesRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodTagResourcesRequest) SetResourceId(v []*string) *DescribeVodTagResourcesRequest {
	s.ResourceId = v
	return s
}

func (s *DescribeVodTagResourcesRequest) SetResourceType(v string) *DescribeVodTagResourcesRequest {
	s.ResourceType = &v
	return s
}

func (s *DescribeVodTagResourcesRequest) SetTag(v []*DescribeVodTagResourcesRequestTag) *DescribeVodTagResourcesRequest {
	s.Tag = v
	return s
}

type DescribeVodTagResourcesRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s DescribeVodTagResourcesRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodTagResourcesRequestTag) GoString() string {
	return s.String()
}

func (s *DescribeVodTagResourcesRequestTag) SetKey(v string) *DescribeVodTagResourcesRequestTag {
	s.Key = &v
	return s
}

func (s *DescribeVodTagResourcesRequestTag) SetValue(v string) *DescribeVodTagResourcesRequestTag {
	s.Value = &v
	return s
}

type DescribeVodTagResourcesResponse struct {
	RequestId    *string                                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TagResources []*DescribeVodTagResourcesResponseTagResources `json:"TagResources,omitempty" xml:"TagResources,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodTagResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodTagResourcesResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodTagResourcesResponse) SetRequestId(v string) *DescribeVodTagResourcesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodTagResourcesResponse) SetTagResources(v []*DescribeVodTagResourcesResponseTagResources) *DescribeVodTagResourcesResponse {
	s.TagResources = v
	return s
}

type DescribeVodTagResourcesResponseTagResources struct {
	ResourceId *string                                           `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true"`
	Tag        []*DescribeVodTagResourcesResponseTagResourcesTag `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodTagResourcesResponseTagResources) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodTagResourcesResponseTagResources) GoString() string {
	return s.String()
}

func (s *DescribeVodTagResourcesResponseTagResources) SetResourceId(v string) *DescribeVodTagResourcesResponseTagResources {
	s.ResourceId = &v
	return s
}

func (s *DescribeVodTagResourcesResponseTagResources) SetTag(v []*DescribeVodTagResourcesResponseTagResourcesTag) *DescribeVodTagResourcesResponseTagResources {
	s.Tag = v
	return s
}

type DescribeVodTagResourcesResponseTagResourcesTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeVodTagResourcesResponseTagResourcesTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodTagResourcesResponseTagResourcesTag) GoString() string {
	return s.String()
}

func (s *DescribeVodTagResourcesResponseTagResourcesTag) SetKey(v string) *DescribeVodTagResourcesResponseTagResourcesTag {
	s.Key = &v
	return s
}

func (s *DescribeVodTagResourcesResponseTagResourcesTag) SetValue(v string) *DescribeVodTagResourcesResponseTagResourcesTag {
	s.Value = &v
	return s
}

type CreateMediaDNALibRequest struct {
	LibRegion *string `json:"LibRegion,omitempty" xml:"LibRegion,omitempty" require:"true"`
	ModelType *string `json:"ModelType,omitempty" xml:"ModelType,omitempty"`
}

func (s CreateMediaDNALibRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateMediaDNALibRequest) GoString() string {
	return s.String()
}

func (s *CreateMediaDNALibRequest) SetLibRegion(v string) *CreateMediaDNALibRequest {
	s.LibRegion = &v
	return s
}

func (s *CreateMediaDNALibRequest) SetModelType(v string) *CreateMediaDNALibRequest {
	s.ModelType = &v
	return s
}

type CreateMediaDNALibResponse struct {
	RequestId    *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AIDNALibInfo *CreateMediaDNALibResponseAIDNALibInfo `json:"AIDNALibInfo,omitempty" xml:"AIDNALibInfo,omitempty" require:"true" type:"Struct"`
}

func (s CreateMediaDNALibResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateMediaDNALibResponse) GoString() string {
	return s.String()
}

func (s *CreateMediaDNALibResponse) SetRequestId(v string) *CreateMediaDNALibResponse {
	s.RequestId = &v
	return s
}

func (s *CreateMediaDNALibResponse) SetAIDNALibInfo(v *CreateMediaDNALibResponseAIDNALibInfo) *CreateMediaDNALibResponse {
	s.AIDNALibInfo = v
	return s
}

type CreateMediaDNALibResponseAIDNALibInfo struct {
	FpDBId    *string `json:"FpDBId,omitempty" xml:"FpDBId,omitempty" require:"true"`
	ModelType *string `json:"ModelType,omitempty" xml:"ModelType,omitempty" require:"true"`
	State     *string `json:"State,omitempty" xml:"State,omitempty" require:"true"`
}

func (s CreateMediaDNALibResponseAIDNALibInfo) String() string {
	return tea.Prettify(s)
}

func (s CreateMediaDNALibResponseAIDNALibInfo) GoString() string {
	return s.String()
}

func (s *CreateMediaDNALibResponseAIDNALibInfo) SetFpDBId(v string) *CreateMediaDNALibResponseAIDNALibInfo {
	s.FpDBId = &v
	return s
}

func (s *CreateMediaDNALibResponseAIDNALibInfo) SetModelType(v string) *CreateMediaDNALibResponseAIDNALibInfo {
	s.ModelType = &v
	return s
}

func (s *CreateMediaDNALibResponseAIDNALibInfo) SetState(v string) *CreateMediaDNALibResponseAIDNALibInfo {
	s.State = &v
	return s
}

type ListMediaDNALibsRequest struct {
	LibRegion *string `json:"LibRegion,omitempty" xml:"LibRegion,omitempty" require:"true"`
}

func (s ListMediaDNALibsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListMediaDNALibsRequest) GoString() string {
	return s.String()
}

func (s *ListMediaDNALibsRequest) SetLibRegion(v string) *ListMediaDNALibsRequest {
	s.LibRegion = &v
	return s
}

type ListMediaDNALibsResponse struct {
	RequestId        *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AIDNALibInfoList *ListMediaDNALibsResponseAIDNALibInfoList `json:"AIDNALibInfoList,omitempty" xml:"AIDNALibInfoList,omitempty" require:"true" type:"Struct"`
}

func (s ListMediaDNALibsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListMediaDNALibsResponse) GoString() string {
	return s.String()
}

func (s *ListMediaDNALibsResponse) SetRequestId(v string) *ListMediaDNALibsResponse {
	s.RequestId = &v
	return s
}

func (s *ListMediaDNALibsResponse) SetAIDNALibInfoList(v *ListMediaDNALibsResponseAIDNALibInfoList) *ListMediaDNALibsResponse {
	s.AIDNALibInfoList = v
	return s
}

type ListMediaDNALibsResponseAIDNALibInfoList struct {
	AIDNALibInfo []*ListMediaDNALibsResponseAIDNALibInfoListAIDNALibInfo `json:"AIDNALibInfo,omitempty" xml:"AIDNALibInfo,omitempty" require:"true" type:"Repeated"`
}

func (s ListMediaDNALibsResponseAIDNALibInfoList) String() string {
	return tea.Prettify(s)
}

func (s ListMediaDNALibsResponseAIDNALibInfoList) GoString() string {
	return s.String()
}

func (s *ListMediaDNALibsResponseAIDNALibInfoList) SetAIDNALibInfo(v []*ListMediaDNALibsResponseAIDNALibInfoListAIDNALibInfo) *ListMediaDNALibsResponseAIDNALibInfoList {
	s.AIDNALibInfo = v
	return s
}

type ListMediaDNALibsResponseAIDNALibInfoListAIDNALibInfo struct {
	FpDBId    *string `json:"FpDBId,omitempty" xml:"FpDBId,omitempty" require:"true"`
	ModelType *string `json:"ModelType,omitempty" xml:"ModelType,omitempty" require:"true"`
	State     *string `json:"State,omitempty" xml:"State,omitempty" require:"true"`
}

func (s ListMediaDNALibsResponseAIDNALibInfoListAIDNALibInfo) String() string {
	return tea.Prettify(s)
}

func (s ListMediaDNALibsResponseAIDNALibInfoListAIDNALibInfo) GoString() string {
	return s.String()
}

func (s *ListMediaDNALibsResponseAIDNALibInfoListAIDNALibInfo) SetFpDBId(v string) *ListMediaDNALibsResponseAIDNALibInfoListAIDNALibInfo {
	s.FpDBId = &v
	return s
}

func (s *ListMediaDNALibsResponseAIDNALibInfoListAIDNALibInfo) SetModelType(v string) *ListMediaDNALibsResponseAIDNALibInfoListAIDNALibInfo {
	s.ModelType = &v
	return s
}

func (s *ListMediaDNALibsResponseAIDNALibInfoListAIDNALibInfo) SetState(v string) *ListMediaDNALibsResponseAIDNALibInfoListAIDNALibInfo {
	s.State = &v
	return s
}

type UnTagVodResourcesRequest struct {
	ResourceId   []*string `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true" type:"Repeated"`
	ResourceType *string   `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	TagKey       []*string `json:"TagKey,omitempty" xml:"TagKey,omitempty" require:"true" type:"Repeated"`
}

func (s UnTagVodResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s UnTagVodResourcesRequest) GoString() string {
	return s.String()
}

func (s *UnTagVodResourcesRequest) SetResourceId(v []*string) *UnTagVodResourcesRequest {
	s.ResourceId = v
	return s
}

func (s *UnTagVodResourcesRequest) SetResourceType(v string) *UnTagVodResourcesRequest {
	s.ResourceType = &v
	return s
}

func (s *UnTagVodResourcesRequest) SetTagKey(v []*string) *UnTagVodResourcesRequest {
	s.TagKey = v
	return s
}

type UnTagVodResourcesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UnTagVodResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s UnTagVodResourcesResponse) GoString() string {
	return s.String()
}

func (s *UnTagVodResourcesResponse) SetRequestId(v string) *UnTagVodResourcesResponse {
	s.RequestId = &v
	return s
}

type TagVodResourcesRequest struct {
	ResourceId   []*string                    `json:"ResourceId,omitempty" xml:"ResourceId,omitempty" require:"true" type:"Repeated"`
	ResourceType *string                      `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	Tag          []*TagVodResourcesRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true" type:"Repeated"`
}

func (s TagVodResourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s TagVodResourcesRequest) GoString() string {
	return s.String()
}

func (s *TagVodResourcesRequest) SetResourceId(v []*string) *TagVodResourcesRequest {
	s.ResourceId = v
	return s
}

func (s *TagVodResourcesRequest) SetResourceType(v string) *TagVodResourcesRequest {
	s.ResourceType = &v
	return s
}

func (s *TagVodResourcesRequest) SetTag(v []*TagVodResourcesRequestTag) *TagVodResourcesRequest {
	s.Tag = v
	return s
}

type TagVodResourcesRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s TagVodResourcesRequestTag) String() string {
	return tea.Prettify(s)
}

func (s TagVodResourcesRequestTag) GoString() string {
	return s.String()
}

func (s *TagVodResourcesRequestTag) SetKey(v string) *TagVodResourcesRequestTag {
	s.Key = &v
	return s
}

func (s *TagVodResourcesRequestTag) SetValue(v string) *TagVodResourcesRequestTag {
	s.Value = &v
	return s
}

type TagVodResourcesResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s TagVodResourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s TagVodResourcesResponse) GoString() string {
	return s.String()
}

func (s *TagVodResourcesResponse) SetRequestId(v string) *TagVodResourcesResponse {
	s.RequestId = &v
	return s
}

type SubmitMediaDNADeleteJobRequest struct {
	MediaId *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	FpDBId  *string `json:"FpDBId,omitempty" xml:"FpDBId,omitempty"`
}

func (s SubmitMediaDNADeleteJobRequest) String() string {
	return tea.Prettify(s)
}

func (s SubmitMediaDNADeleteJobRequest) GoString() string {
	return s.String()
}

func (s *SubmitMediaDNADeleteJobRequest) SetMediaId(v string) *SubmitMediaDNADeleteJobRequest {
	s.MediaId = &v
	return s
}

func (s *SubmitMediaDNADeleteJobRequest) SetFpDBId(v string) *SubmitMediaDNADeleteJobRequest {
	s.FpDBId = &v
	return s
}

type SubmitMediaDNADeleteJobResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MediaId   *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	JobId     *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
}

func (s SubmitMediaDNADeleteJobResponse) String() string {
	return tea.Prettify(s)
}

func (s SubmitMediaDNADeleteJobResponse) GoString() string {
	return s.String()
}

func (s *SubmitMediaDNADeleteJobResponse) SetRequestId(v string) *SubmitMediaDNADeleteJobResponse {
	s.RequestId = &v
	return s
}

func (s *SubmitMediaDNADeleteJobResponse) SetMediaId(v string) *SubmitMediaDNADeleteJobResponse {
	s.MediaId = &v
	return s
}

func (s *SubmitMediaDNADeleteJobResponse) SetJobId(v string) *SubmitMediaDNADeleteJobResponse {
	s.JobId = &v
	return s
}

type ListMediaDNADeleteJobRequest struct {
	JobIds *string `json:"JobIds,omitempty" xml:"JobIds,omitempty" require:"true"`
}

func (s ListMediaDNADeleteJobRequest) String() string {
	return tea.Prettify(s)
}

func (s ListMediaDNADeleteJobRequest) GoString() string {
	return s.String()
}

func (s *ListMediaDNADeleteJobRequest) SetJobIds(v string) *ListMediaDNADeleteJobRequest {
	s.JobIds = &v
	return s
}

type ListMediaDNADeleteJobResponse struct {
	RequestId        *string                                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AIJobList        *ListMediaDNADeleteJobResponseAIJobList        `json:"AIJobList,omitempty" xml:"AIJobList,omitempty" require:"true" type:"Struct"`
	NonExistAIJobIds *ListMediaDNADeleteJobResponseNonExistAIJobIds `json:"NonExistAIJobIds,omitempty" xml:"NonExistAIJobIds,omitempty" require:"true" type:"Struct"`
}

func (s ListMediaDNADeleteJobResponse) String() string {
	return tea.Prettify(s)
}

func (s ListMediaDNADeleteJobResponse) GoString() string {
	return s.String()
}

func (s *ListMediaDNADeleteJobResponse) SetRequestId(v string) *ListMediaDNADeleteJobResponse {
	s.RequestId = &v
	return s
}

func (s *ListMediaDNADeleteJobResponse) SetAIJobList(v *ListMediaDNADeleteJobResponseAIJobList) *ListMediaDNADeleteJobResponse {
	s.AIJobList = v
	return s
}

func (s *ListMediaDNADeleteJobResponse) SetNonExistAIJobIds(v *ListMediaDNADeleteJobResponseNonExistAIJobIds) *ListMediaDNADeleteJobResponse {
	s.NonExistAIJobIds = v
	return s
}

type ListMediaDNADeleteJobResponseAIJobList struct {
	AIJob []*ListMediaDNADeleteJobResponseAIJobListAIJob `json:"AIJob,omitempty" xml:"AIJob,omitempty" require:"true" type:"Repeated"`
}

func (s ListMediaDNADeleteJobResponseAIJobList) String() string {
	return tea.Prettify(s)
}

func (s ListMediaDNADeleteJobResponseAIJobList) GoString() string {
	return s.String()
}

func (s *ListMediaDNADeleteJobResponseAIJobList) SetAIJob(v []*ListMediaDNADeleteJobResponseAIJobListAIJob) *ListMediaDNADeleteJobResponseAIJobList {
	s.AIJob = v
	return s
}

type ListMediaDNADeleteJobResponseAIJobListAIJob struct {
	JobId   *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
	MediaId *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	Status  *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Code    *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	FpDBId  *string `json:"FpDBId,omitempty" xml:"FpDBId,omitempty" require:"true"`
}

func (s ListMediaDNADeleteJobResponseAIJobListAIJob) String() string {
	return tea.Prettify(s)
}

func (s ListMediaDNADeleteJobResponseAIJobListAIJob) GoString() string {
	return s.String()
}

func (s *ListMediaDNADeleteJobResponseAIJobListAIJob) SetJobId(v string) *ListMediaDNADeleteJobResponseAIJobListAIJob {
	s.JobId = &v
	return s
}

func (s *ListMediaDNADeleteJobResponseAIJobListAIJob) SetMediaId(v string) *ListMediaDNADeleteJobResponseAIJobListAIJob {
	s.MediaId = &v
	return s
}

func (s *ListMediaDNADeleteJobResponseAIJobListAIJob) SetStatus(v string) *ListMediaDNADeleteJobResponseAIJobListAIJob {
	s.Status = &v
	return s
}

func (s *ListMediaDNADeleteJobResponseAIJobListAIJob) SetCode(v string) *ListMediaDNADeleteJobResponseAIJobListAIJob {
	s.Code = &v
	return s
}

func (s *ListMediaDNADeleteJobResponseAIJobListAIJob) SetMessage(v string) *ListMediaDNADeleteJobResponseAIJobListAIJob {
	s.Message = &v
	return s
}

func (s *ListMediaDNADeleteJobResponseAIJobListAIJob) SetFpDBId(v string) *ListMediaDNADeleteJobResponseAIJobListAIJob {
	s.FpDBId = &v
	return s
}

type ListMediaDNADeleteJobResponseNonExistAIJobIds struct {
	String []*string `json:"String,omitempty" xml:"String,omitempty" require:"true" type:"Repeated"`
}

func (s ListMediaDNADeleteJobResponseNonExistAIJobIds) String() string {
	return tea.Prettify(s)
}

func (s ListMediaDNADeleteJobResponseNonExistAIJobIds) GoString() string {
	return s.String()
}

func (s *ListMediaDNADeleteJobResponseNonExistAIJobIds) SetString(v []*string) *ListMediaDNADeleteJobResponseNonExistAIJobIds {
	s.String = v
	return s
}

type GetMediaAuditAudioResultDetailRequest struct {
	MediaId *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	PageNo  *int    `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
}

func (s GetMediaAuditAudioResultDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditAudioResultDetailRequest) GoString() string {
	return s.String()
}

func (s *GetMediaAuditAudioResultDetailRequest) SetMediaId(v string) *GetMediaAuditAudioResultDetailRequest {
	s.MediaId = &v
	return s
}

func (s *GetMediaAuditAudioResultDetailRequest) SetPageNo(v int) *GetMediaAuditAudioResultDetailRequest {
	s.PageNo = &v
	return s
}

type GetMediaAuditAudioResultDetailResponse struct {
	RequestId                   *string                                                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MediaAuditAudioResultDetail *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail `json:"MediaAuditAudioResultDetail,omitempty" xml:"MediaAuditAudioResultDetail,omitempty" require:"true" type:"Struct"`
}

func (s GetMediaAuditAudioResultDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditAudioResultDetailResponse) GoString() string {
	return s.String()
}

func (s *GetMediaAuditAudioResultDetailResponse) SetRequestId(v string) *GetMediaAuditAudioResultDetailResponse {
	s.RequestId = &v
	return s
}

func (s *GetMediaAuditAudioResultDetailResponse) SetMediaAuditAudioResultDetail(v *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail) *GetMediaAuditAudioResultDetailResponse {
	s.MediaAuditAudioResultDetail = v
	return s
}

type GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail struct {
	Total     *int                                                                     `json:"Total,omitempty" xml:"Total,omitempty" require:"true"`
	PageTotal *int                                                                     `json:"PageTotal,omitempty" xml:"PageTotal,omitempty" require:"true"`
	List      []*GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList `json:"List,omitempty" xml:"List,omitempty" require:"true" type:"Repeated"`
}

func (s GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail) GoString() string {
	return s.String()
}

func (s *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail) SetTotal(v int) *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail {
	s.Total = &v
	return s
}

func (s *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail) SetPageTotal(v int) *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail {
	s.PageTotal = &v
	return s
}

func (s *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail) SetList(v []*GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList) *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail {
	s.List = v
	return s
}

type GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList struct {
	StartTime *int64  `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime   *int64  `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	Text      *string `json:"Text,omitempty" xml:"Text,omitempty" require:"true"`
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
}

func (s GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList) GoString() string {
	return s.String()
}

func (s *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList) SetStartTime(v int64) *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList {
	s.StartTime = &v
	return s
}

func (s *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList) SetEndTime(v int64) *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList {
	s.EndTime = &v
	return s
}

func (s *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList) SetText(v string) *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList {
	s.Text = &v
	return s
}

func (s *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList) SetLabel(v string) *GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList {
	s.Label = &v
	return s
}

type SubmitDynamicImageJobRequest struct {
	VideoId                *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	DynamicImageTemplateId *string `json:"DynamicImageTemplateId,omitempty" xml:"DynamicImageTemplateId,omitempty" require:"true"`
	OverrideParams         *string `json:"OverrideParams,omitempty" xml:"OverrideParams,omitempty"`
}

func (s SubmitDynamicImageJobRequest) String() string {
	return tea.Prettify(s)
}

func (s SubmitDynamicImageJobRequest) GoString() string {
	return s.String()
}

func (s *SubmitDynamicImageJobRequest) SetVideoId(v string) *SubmitDynamicImageJobRequest {
	s.VideoId = &v
	return s
}

func (s *SubmitDynamicImageJobRequest) SetDynamicImageTemplateId(v string) *SubmitDynamicImageJobRequest {
	s.DynamicImageTemplateId = &v
	return s
}

func (s *SubmitDynamicImageJobRequest) SetOverrideParams(v string) *SubmitDynamicImageJobRequest {
	s.OverrideParams = &v
	return s
}

type SubmitDynamicImageJobResponse struct {
	RequestId       *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DynamicImageJob *SubmitDynamicImageJobResponseDynamicImageJob `json:"DynamicImageJob,omitempty" xml:"DynamicImageJob,omitempty" require:"true" type:"Struct"`
}

func (s SubmitDynamicImageJobResponse) String() string {
	return tea.Prettify(s)
}

func (s SubmitDynamicImageJobResponse) GoString() string {
	return s.String()
}

func (s *SubmitDynamicImageJobResponse) SetRequestId(v string) *SubmitDynamicImageJobResponse {
	s.RequestId = &v
	return s
}

func (s *SubmitDynamicImageJobResponse) SetDynamicImageJob(v *SubmitDynamicImageJobResponseDynamicImageJob) *SubmitDynamicImageJobResponse {
	s.DynamicImageJob = v
	return s
}

type SubmitDynamicImageJobResponseDynamicImageJob struct {
	JobId *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
}

func (s SubmitDynamicImageJobResponseDynamicImageJob) String() string {
	return tea.Prettify(s)
}

func (s SubmitDynamicImageJobResponseDynamicImageJob) GoString() string {
	return s.String()
}

func (s *SubmitDynamicImageJobResponseDynamicImageJob) SetJobId(v string) *SubmitDynamicImageJobResponseDynamicImageJob {
	s.JobId = &v
	return s
}

type SubmitWorkflowJobRequest struct {
	WorkflowId *string `json:"WorkflowId,omitempty" xml:"WorkflowId,omitempty" require:"true"`
	MediaId    *string `json:"MediaId,omitempty" xml:"MediaId,omitempty"`
	FileUrl    *string `json:"FileUrl,omitempty" xml:"FileUrl,omitempty"`
}

func (s SubmitWorkflowJobRequest) String() string {
	return tea.Prettify(s)
}

func (s SubmitWorkflowJobRequest) GoString() string {
	return s.String()
}

func (s *SubmitWorkflowJobRequest) SetWorkflowId(v string) *SubmitWorkflowJobRequest {
	s.WorkflowId = &v
	return s
}

func (s *SubmitWorkflowJobRequest) SetMediaId(v string) *SubmitWorkflowJobRequest {
	s.MediaId = &v
	return s
}

func (s *SubmitWorkflowJobRequest) SetFileUrl(v string) *SubmitWorkflowJobRequest {
	s.FileUrl = &v
	return s
}

type SubmitWorkflowJobResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SubmitWorkflowJobResponse) String() string {
	return tea.Prettify(s)
}

func (s SubmitWorkflowJobResponse) GoString() string {
	return s.String()
}

func (s *SubmitWorkflowJobResponse) SetRequestId(v string) *SubmitWorkflowJobResponse {
	s.RequestId = &v
	return s
}

type GetAIVideoTagResultRequest struct {
	MediaId *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
}

func (s GetAIVideoTagResultRequest) String() string {
	return tea.Prettify(s)
}

func (s GetAIVideoTagResultRequest) GoString() string {
	return s.String()
}

func (s *GetAIVideoTagResultRequest) SetMediaId(v string) *GetAIVideoTagResultRequest {
	s.MediaId = &v
	return s
}

type GetAIVideoTagResultResponse struct {
	RequestId      *string                                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	VideoTagResult *GetAIVideoTagResultResponseVideoTagResult `json:"VideoTagResult,omitempty" xml:"VideoTagResult,omitempty" require:"true" type:"Struct"`
}

func (s GetAIVideoTagResultResponse) String() string {
	return tea.Prettify(s)
}

func (s GetAIVideoTagResultResponse) GoString() string {
	return s.String()
}

func (s *GetAIVideoTagResultResponse) SetRequestId(v string) *GetAIVideoTagResultResponse {
	s.RequestId = &v
	return s
}

func (s *GetAIVideoTagResultResponse) SetVideoTagResult(v *GetAIVideoTagResultResponseVideoTagResult) *GetAIVideoTagResultResponse {
	s.VideoTagResult = v
	return s
}

type GetAIVideoTagResultResponseVideoTagResult struct {
	Category []*GetAIVideoTagResultResponseVideoTagResultCategory `json:"Category,omitempty" xml:"Category,omitempty" require:"true" type:"Repeated"`
	Person   []*GetAIVideoTagResultResponseVideoTagResultPerson   `json:"Person,omitempty" xml:"Person,omitempty" require:"true" type:"Repeated"`
	Time     []*GetAIVideoTagResultResponseVideoTagResultTime     `json:"Time,omitempty" xml:"Time,omitempty" require:"true" type:"Repeated"`
	Location []*GetAIVideoTagResultResponseVideoTagResultLocation `json:"Location,omitempty" xml:"Location,omitempty" require:"true" type:"Repeated"`
	Keyword  []*GetAIVideoTagResultResponseVideoTagResultKeyword  `json:"Keyword,omitempty" xml:"Keyword,omitempty" require:"true" type:"Repeated"`
}

func (s GetAIVideoTagResultResponseVideoTagResult) String() string {
	return tea.Prettify(s)
}

func (s GetAIVideoTagResultResponseVideoTagResult) GoString() string {
	return s.String()
}

func (s *GetAIVideoTagResultResponseVideoTagResult) SetCategory(v []*GetAIVideoTagResultResponseVideoTagResultCategory) *GetAIVideoTagResultResponseVideoTagResult {
	s.Category = v
	return s
}

func (s *GetAIVideoTagResultResponseVideoTagResult) SetPerson(v []*GetAIVideoTagResultResponseVideoTagResultPerson) *GetAIVideoTagResultResponseVideoTagResult {
	s.Person = v
	return s
}

func (s *GetAIVideoTagResultResponseVideoTagResult) SetTime(v []*GetAIVideoTagResultResponseVideoTagResultTime) *GetAIVideoTagResultResponseVideoTagResult {
	s.Time = v
	return s
}

func (s *GetAIVideoTagResultResponseVideoTagResult) SetLocation(v []*GetAIVideoTagResultResponseVideoTagResultLocation) *GetAIVideoTagResultResponseVideoTagResult {
	s.Location = v
	return s
}

func (s *GetAIVideoTagResultResponseVideoTagResult) SetKeyword(v []*GetAIVideoTagResultResponseVideoTagResultKeyword) *GetAIVideoTagResultResponseVideoTagResult {
	s.Keyword = v
	return s
}

type GetAIVideoTagResultResponseVideoTagResultCategory struct {
	Tag *string `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true"`
}

func (s GetAIVideoTagResultResponseVideoTagResultCategory) String() string {
	return tea.Prettify(s)
}

func (s GetAIVideoTagResultResponseVideoTagResultCategory) GoString() string {
	return s.String()
}

func (s *GetAIVideoTagResultResponseVideoTagResultCategory) SetTag(v string) *GetAIVideoTagResultResponseVideoTagResultCategory {
	s.Tag = &v
	return s
}

type GetAIVideoTagResultResponseVideoTagResultPerson struct {
	FaceUrl *string   `json:"FaceUrl,omitempty" xml:"FaceUrl,omitempty" require:"true"`
	Tag     *string   `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true"`
	Times   []*string `json:"Times,omitempty" xml:"Times,omitempty" require:"true" type:"Repeated"`
}

func (s GetAIVideoTagResultResponseVideoTagResultPerson) String() string {
	return tea.Prettify(s)
}

func (s GetAIVideoTagResultResponseVideoTagResultPerson) GoString() string {
	return s.String()
}

func (s *GetAIVideoTagResultResponseVideoTagResultPerson) SetFaceUrl(v string) *GetAIVideoTagResultResponseVideoTagResultPerson {
	s.FaceUrl = &v
	return s
}

func (s *GetAIVideoTagResultResponseVideoTagResultPerson) SetTag(v string) *GetAIVideoTagResultResponseVideoTagResultPerson {
	s.Tag = &v
	return s
}

func (s *GetAIVideoTagResultResponseVideoTagResultPerson) SetTimes(v []*string) *GetAIVideoTagResultResponseVideoTagResultPerson {
	s.Times = v
	return s
}

type GetAIVideoTagResultResponseVideoTagResultTime struct {
	Tag   *string   `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true"`
	Times []*string `json:"Times,omitempty" xml:"Times,omitempty" require:"true" type:"Repeated"`
}

func (s GetAIVideoTagResultResponseVideoTagResultTime) String() string {
	return tea.Prettify(s)
}

func (s GetAIVideoTagResultResponseVideoTagResultTime) GoString() string {
	return s.String()
}

func (s *GetAIVideoTagResultResponseVideoTagResultTime) SetTag(v string) *GetAIVideoTagResultResponseVideoTagResultTime {
	s.Tag = &v
	return s
}

func (s *GetAIVideoTagResultResponseVideoTagResultTime) SetTimes(v []*string) *GetAIVideoTagResultResponseVideoTagResultTime {
	s.Times = v
	return s
}

type GetAIVideoTagResultResponseVideoTagResultLocation struct {
	Tag   *string   `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true"`
	Times []*string `json:"Times,omitempty" xml:"Times,omitempty" require:"true" type:"Repeated"`
}

func (s GetAIVideoTagResultResponseVideoTagResultLocation) String() string {
	return tea.Prettify(s)
}

func (s GetAIVideoTagResultResponseVideoTagResultLocation) GoString() string {
	return s.String()
}

func (s *GetAIVideoTagResultResponseVideoTagResultLocation) SetTag(v string) *GetAIVideoTagResultResponseVideoTagResultLocation {
	s.Tag = &v
	return s
}

func (s *GetAIVideoTagResultResponseVideoTagResultLocation) SetTimes(v []*string) *GetAIVideoTagResultResponseVideoTagResultLocation {
	s.Times = v
	return s
}

type GetAIVideoTagResultResponseVideoTagResultKeyword struct {
	Tag   *string   `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true"`
	Times []*string `json:"Times,omitempty" xml:"Times,omitempty" require:"true" type:"Repeated"`
}

func (s GetAIVideoTagResultResponseVideoTagResultKeyword) String() string {
	return tea.Prettify(s)
}

func (s GetAIVideoTagResultResponseVideoTagResultKeyword) GoString() string {
	return s.String()
}

func (s *GetAIVideoTagResultResponseVideoTagResultKeyword) SetTag(v string) *GetAIVideoTagResultResponseVideoTagResultKeyword {
	s.Tag = &v
	return s
}

func (s *GetAIVideoTagResultResponseVideoTagResultKeyword) SetTimes(v []*string) *GetAIVideoTagResultResponseVideoTagResultKeyword {
	s.Times = v
	return s
}

type GetUploadDetailsRequest struct {
	ResourceRealOwnerId *int64  `json:"ResourceRealOwnerId,omitempty" xml:"ResourceRealOwnerId,omitempty"`
	MediaIds            *string `json:"MediaIds,omitempty" xml:"MediaIds,omitempty" require:"true"`
	MediaType           *string `json:"MediaType,omitempty" xml:"MediaType,omitempty"`
}

func (s GetUploadDetailsRequest) String() string {
	return tea.Prettify(s)
}

func (s GetUploadDetailsRequest) GoString() string {
	return s.String()
}

func (s *GetUploadDetailsRequest) SetResourceRealOwnerId(v int64) *GetUploadDetailsRequest {
	s.ResourceRealOwnerId = &v
	return s
}

func (s *GetUploadDetailsRequest) SetMediaIds(v string) *GetUploadDetailsRequest {
	s.MediaIds = &v
	return s
}

func (s *GetUploadDetailsRequest) SetMediaType(v string) *GetUploadDetailsRequest {
	s.MediaType = &v
	return s
}

type GetUploadDetailsResponse struct {
	RequestId         *string                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	UploadDetails     []*GetUploadDetailsResponseUploadDetails `json:"UploadDetails,omitempty" xml:"UploadDetails,omitempty" require:"true" type:"Repeated"`
	NonExistMediaIds  []*string                                `json:"NonExistMediaIds,omitempty" xml:"NonExistMediaIds,omitempty" require:"true" type:"Repeated"`
	ForbiddenMediaIds []*string                                `json:"ForbiddenMediaIds,omitempty" xml:"ForbiddenMediaIds,omitempty" require:"true" type:"Repeated"`
}

func (s GetUploadDetailsResponse) String() string {
	return tea.Prettify(s)
}

func (s GetUploadDetailsResponse) GoString() string {
	return s.String()
}

func (s *GetUploadDetailsResponse) SetRequestId(v string) *GetUploadDetailsResponse {
	s.RequestId = &v
	return s
}

func (s *GetUploadDetailsResponse) SetUploadDetails(v []*GetUploadDetailsResponseUploadDetails) *GetUploadDetailsResponse {
	s.UploadDetails = v
	return s
}

func (s *GetUploadDetailsResponse) SetNonExistMediaIds(v []*string) *GetUploadDetailsResponse {
	s.NonExistMediaIds = v
	return s
}

func (s *GetUploadDetailsResponse) SetForbiddenMediaIds(v []*string) *GetUploadDetailsResponse {
	s.ForbiddenMediaIds = v
	return s
}

type GetUploadDetailsResponseUploadDetails struct {
	MediaId          *string  `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	Title            *string  `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	FileSize         *int64   `json:"FileSize,omitempty" xml:"FileSize,omitempty" require:"true"`
	Status           *string  `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	UploadStatus     *string  `json:"UploadStatus,omitempty" xml:"UploadStatus,omitempty" require:"true"`
	CreationTime     *string  `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModificationTime *string  `json:"ModificationTime,omitempty" xml:"ModificationTime,omitempty" require:"true"`
	CompletionTime   *string  `json:"CompletionTime,omitempty" xml:"CompletionTime,omitempty" require:"true"`
	UploadSize       *int64   `json:"UploadSize,omitempty" xml:"UploadSize,omitempty" require:"true"`
	UploadRatio      *float32 `json:"UploadRatio,omitempty" xml:"UploadRatio,omitempty" require:"true"`
	UploadIP         *string  `json:"UploadIP,omitempty" xml:"UploadIP,omitempty" require:"true"`
	UploadSource     *string  `json:"UploadSource,omitempty" xml:"UploadSource,omitempty" require:"true"`
	DeviceModel      *string  `json:"DeviceModel,omitempty" xml:"DeviceModel,omitempty" require:"true"`
}

func (s GetUploadDetailsResponseUploadDetails) String() string {
	return tea.Prettify(s)
}

func (s GetUploadDetailsResponseUploadDetails) GoString() string {
	return s.String()
}

func (s *GetUploadDetailsResponseUploadDetails) SetMediaId(v string) *GetUploadDetailsResponseUploadDetails {
	s.MediaId = &v
	return s
}

func (s *GetUploadDetailsResponseUploadDetails) SetTitle(v string) *GetUploadDetailsResponseUploadDetails {
	s.Title = &v
	return s
}

func (s *GetUploadDetailsResponseUploadDetails) SetFileSize(v int64) *GetUploadDetailsResponseUploadDetails {
	s.FileSize = &v
	return s
}

func (s *GetUploadDetailsResponseUploadDetails) SetStatus(v string) *GetUploadDetailsResponseUploadDetails {
	s.Status = &v
	return s
}

func (s *GetUploadDetailsResponseUploadDetails) SetUploadStatus(v string) *GetUploadDetailsResponseUploadDetails {
	s.UploadStatus = &v
	return s
}

func (s *GetUploadDetailsResponseUploadDetails) SetCreationTime(v string) *GetUploadDetailsResponseUploadDetails {
	s.CreationTime = &v
	return s
}

func (s *GetUploadDetailsResponseUploadDetails) SetModificationTime(v string) *GetUploadDetailsResponseUploadDetails {
	s.ModificationTime = &v
	return s
}

func (s *GetUploadDetailsResponseUploadDetails) SetCompletionTime(v string) *GetUploadDetailsResponseUploadDetails {
	s.CompletionTime = &v
	return s
}

func (s *GetUploadDetailsResponseUploadDetails) SetUploadSize(v int64) *GetUploadDetailsResponseUploadDetails {
	s.UploadSize = &v
	return s
}

func (s *GetUploadDetailsResponseUploadDetails) SetUploadRatio(v float32) *GetUploadDetailsResponseUploadDetails {
	s.UploadRatio = &v
	return s
}

func (s *GetUploadDetailsResponseUploadDetails) SetUploadIP(v string) *GetUploadDetailsResponseUploadDetails {
	s.UploadIP = &v
	return s
}

func (s *GetUploadDetailsResponseUploadDetails) SetUploadSource(v string) *GetUploadDetailsResponseUploadDetails {
	s.UploadSource = &v
	return s
}

func (s *GetUploadDetailsResponseUploadDetails) SetDeviceModel(v string) *GetUploadDetailsResponseUploadDetails {
	s.DeviceModel = &v
	return s
}

type DescribeVodStorageDataRequest struct {
	StartTime   *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime     *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	Region      *string `json:"Region,omitempty" xml:"Region,omitempty"`
	StorageType *string `json:"StorageType,omitempty" xml:"StorageType,omitempty"`
	Storage     *string `json:"Storage,omitempty" xml:"Storage,omitempty"`
}

func (s DescribeVodStorageDataRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodStorageDataRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodStorageDataRequest) SetStartTime(v string) *DescribeVodStorageDataRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeVodStorageDataRequest) SetEndTime(v string) *DescribeVodStorageDataRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeVodStorageDataRequest) SetRegion(v string) *DescribeVodStorageDataRequest {
	s.Region = &v
	return s
}

func (s *DescribeVodStorageDataRequest) SetStorageType(v string) *DescribeVodStorageDataRequest {
	s.StorageType = &v
	return s
}

func (s *DescribeVodStorageDataRequest) SetStorage(v string) *DescribeVodStorageDataRequest {
	s.Storage = &v
	return s
}

type DescribeVodStorageDataResponse struct {
	RequestId    *string                                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DataInterval *string                                    `json:"DataInterval,omitempty" xml:"DataInterval,omitempty" require:"true"`
	StorageData  *DescribeVodStorageDataResponseStorageData `json:"StorageData,omitempty" xml:"StorageData,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodStorageDataResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodStorageDataResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodStorageDataResponse) SetRequestId(v string) *DescribeVodStorageDataResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodStorageDataResponse) SetDataInterval(v string) *DescribeVodStorageDataResponse {
	s.DataInterval = &v
	return s
}

func (s *DescribeVodStorageDataResponse) SetStorageData(v *DescribeVodStorageDataResponseStorageData) *DescribeVodStorageDataResponse {
	s.StorageData = v
	return s
}

type DescribeVodStorageDataResponseStorageData struct {
	StorageDataItem []*DescribeVodStorageDataResponseStorageDataStorageDataItem `json:"StorageDataItem,omitempty" xml:"StorageDataItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodStorageDataResponseStorageData) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodStorageDataResponseStorageData) GoString() string {
	return s.String()
}

func (s *DescribeVodStorageDataResponseStorageData) SetStorageDataItem(v []*DescribeVodStorageDataResponseStorageDataStorageDataItem) *DescribeVodStorageDataResponseStorageData {
	s.StorageDataItem = v
	return s
}

type DescribeVodStorageDataResponseStorageDataStorageDataItem struct {
	TimeStamp          *string `json:"TimeStamp,omitempty" xml:"TimeStamp,omitempty" require:"true"`
	StorageUtilization *string `json:"StorageUtilization,omitempty" xml:"StorageUtilization,omitempty" require:"true"`
	NetworkOut         *string `json:"NetworkOut,omitempty" xml:"NetworkOut,omitempty" require:"true"`
}

func (s DescribeVodStorageDataResponseStorageDataStorageDataItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodStorageDataResponseStorageDataStorageDataItem) GoString() string {
	return s.String()
}

func (s *DescribeVodStorageDataResponseStorageDataStorageDataItem) SetTimeStamp(v string) *DescribeVodStorageDataResponseStorageDataStorageDataItem {
	s.TimeStamp = &v
	return s
}

func (s *DescribeVodStorageDataResponseStorageDataStorageDataItem) SetStorageUtilization(v string) *DescribeVodStorageDataResponseStorageDataStorageDataItem {
	s.StorageUtilization = &v
	return s
}

func (s *DescribeVodStorageDataResponseStorageDataStorageDataItem) SetNetworkOut(v string) *DescribeVodStorageDataResponseStorageDataStorageDataItem {
	s.NetworkOut = &v
	return s
}

type DescribeVodAIDataRequest struct {
	StartTime *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime   *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	Region    *string `json:"Region,omitempty" xml:"Region,omitempty"`
	AIType    *string `json:"AIType,omitempty" xml:"AIType,omitempty"`
}

func (s DescribeVodAIDataRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodAIDataRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodAIDataRequest) SetStartTime(v string) *DescribeVodAIDataRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeVodAIDataRequest) SetEndTime(v string) *DescribeVodAIDataRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeVodAIDataRequest) SetRegion(v string) *DescribeVodAIDataRequest {
	s.Region = &v
	return s
}

func (s *DescribeVodAIDataRequest) SetAIType(v string) *DescribeVodAIDataRequest {
	s.AIType = &v
	return s
}

type DescribeVodAIDataResponse struct {
	RequestId    *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DataInterval *string                          `json:"DataInterval,omitempty" xml:"DataInterval,omitempty" require:"true"`
	AIData       *DescribeVodAIDataResponseAIData `json:"AIData,omitempty" xml:"AIData,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodAIDataResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodAIDataResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodAIDataResponse) SetRequestId(v string) *DescribeVodAIDataResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodAIDataResponse) SetDataInterval(v string) *DescribeVodAIDataResponse {
	s.DataInterval = &v
	return s
}

func (s *DescribeVodAIDataResponse) SetAIData(v *DescribeVodAIDataResponseAIData) *DescribeVodAIDataResponse {
	s.AIData = v
	return s
}

type DescribeVodAIDataResponseAIData struct {
	AIDataItem []*DescribeVodAIDataResponseAIDataAIDataItem `json:"AIDataItem,omitempty" xml:"AIDataItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodAIDataResponseAIData) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodAIDataResponseAIData) GoString() string {
	return s.String()
}

func (s *DescribeVodAIDataResponseAIData) SetAIDataItem(v []*DescribeVodAIDataResponseAIDataAIDataItem) *DescribeVodAIDataResponseAIData {
	s.AIDataItem = v
	return s
}

type DescribeVodAIDataResponseAIDataAIDataItem struct {
	TimeStamp *string                                        `json:"TimeStamp,omitempty" xml:"TimeStamp,omitempty" require:"true"`
	Data      *DescribeVodAIDataResponseAIDataAIDataItemData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodAIDataResponseAIDataAIDataItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodAIDataResponseAIDataAIDataItem) GoString() string {
	return s.String()
}

func (s *DescribeVodAIDataResponseAIDataAIDataItem) SetTimeStamp(v string) *DescribeVodAIDataResponseAIDataAIDataItem {
	s.TimeStamp = &v
	return s
}

func (s *DescribeVodAIDataResponseAIDataAIDataItem) SetData(v *DescribeVodAIDataResponseAIDataAIDataItemData) *DescribeVodAIDataResponseAIDataAIDataItem {
	s.Data = v
	return s
}

type DescribeVodAIDataResponseAIDataAIDataItemData struct {
	DataItem []*DescribeVodAIDataResponseAIDataAIDataItemDataDataItem `json:"DataItem,omitempty" xml:"DataItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodAIDataResponseAIDataAIDataItemData) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodAIDataResponseAIDataAIDataItemData) GoString() string {
	return s.String()
}

func (s *DescribeVodAIDataResponseAIDataAIDataItemData) SetDataItem(v []*DescribeVodAIDataResponseAIDataAIDataItemDataDataItem) *DescribeVodAIDataResponseAIDataAIDataItemData {
	s.DataItem = v
	return s
}

type DescribeVodAIDataResponseAIDataAIDataItemDataDataItem struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeVodAIDataResponseAIDataAIDataItemDataDataItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodAIDataResponseAIDataAIDataItemDataDataItem) GoString() string {
	return s.String()
}

func (s *DescribeVodAIDataResponseAIDataAIDataItemDataDataItem) SetName(v string) *DescribeVodAIDataResponseAIDataAIDataItemDataDataItem {
	s.Name = &v
	return s
}

func (s *DescribeVodAIDataResponseAIDataAIDataItemDataDataItem) SetValue(v string) *DescribeVodAIDataResponseAIDataAIDataItemDataDataItem {
	s.Value = &v
	return s
}

type DescribeVodTranscodeDataRequest struct {
	StartTime     *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime       *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	Region        *string `json:"Region,omitempty" xml:"Region,omitempty"`
	Interval      *string `json:"Interval,omitempty" xml:"Interval,omitempty"`
	Storage       *string `json:"Storage,omitempty" xml:"Storage,omitempty"`
	Specification *string `json:"Specification,omitempty" xml:"Specification,omitempty"`
}

func (s DescribeVodTranscodeDataRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodTranscodeDataRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodTranscodeDataRequest) SetStartTime(v string) *DescribeVodTranscodeDataRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeVodTranscodeDataRequest) SetEndTime(v string) *DescribeVodTranscodeDataRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeVodTranscodeDataRequest) SetRegion(v string) *DescribeVodTranscodeDataRequest {
	s.Region = &v
	return s
}

func (s *DescribeVodTranscodeDataRequest) SetInterval(v string) *DescribeVodTranscodeDataRequest {
	s.Interval = &v
	return s
}

func (s *DescribeVodTranscodeDataRequest) SetStorage(v string) *DescribeVodTranscodeDataRequest {
	s.Storage = &v
	return s
}

func (s *DescribeVodTranscodeDataRequest) SetSpecification(v string) *DescribeVodTranscodeDataRequest {
	s.Specification = &v
	return s
}

type DescribeVodTranscodeDataResponse struct {
	RequestId     *string                                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DataInterval  *string                                        `json:"DataInterval,omitempty" xml:"DataInterval,omitempty" require:"true"`
	TranscodeData *DescribeVodTranscodeDataResponseTranscodeData `json:"TranscodeData,omitempty" xml:"TranscodeData,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodTranscodeDataResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodTranscodeDataResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodTranscodeDataResponse) SetRequestId(v string) *DescribeVodTranscodeDataResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodTranscodeDataResponse) SetDataInterval(v string) *DescribeVodTranscodeDataResponse {
	s.DataInterval = &v
	return s
}

func (s *DescribeVodTranscodeDataResponse) SetTranscodeData(v *DescribeVodTranscodeDataResponseTranscodeData) *DescribeVodTranscodeDataResponse {
	s.TranscodeData = v
	return s
}

type DescribeVodTranscodeDataResponseTranscodeData struct {
	TranscodeDataItem []*DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem `json:"TranscodeDataItem,omitempty" xml:"TranscodeDataItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodTranscodeDataResponseTranscodeData) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodTranscodeDataResponseTranscodeData) GoString() string {
	return s.String()
}

func (s *DescribeVodTranscodeDataResponseTranscodeData) SetTranscodeDataItem(v []*DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem) *DescribeVodTranscodeDataResponseTranscodeData {
	s.TranscodeDataItem = v
	return s
}

type DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem struct {
	TimeStamp *string                                                             `json:"TimeStamp,omitempty" xml:"TimeStamp,omitempty" require:"true"`
	Data      *DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem) GoString() string {
	return s.String()
}

func (s *DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem) SetTimeStamp(v string) *DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem {
	s.TimeStamp = &v
	return s
}

func (s *DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem) SetData(v *DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemData) *DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem {
	s.Data = v
	return s
}

type DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemData struct {
	DataItem []*DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem `json:"DataItem,omitempty" xml:"DataItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemData) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemData) GoString() string {
	return s.String()
}

func (s *DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemData) SetDataItem(v []*DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem) *DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemData {
	s.DataItem = v
	return s
}

type DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem struct {
	Name  *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem) GoString() string {
	return s.String()
}

func (s *DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem) SetName(v string) *DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem {
	s.Name = &v
	return s
}

func (s *DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem) SetValue(v string) *DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem {
	s.Value = &v
	return s
}

type DeleteMultipartUploadRequest struct {
	ResourceRealOwnerId *int64  `json:"ResourceRealOwnerId,omitempty" xml:"ResourceRealOwnerId,omitempty"`
	MediaId             *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	MediaType           *string `json:"MediaType,omitempty" xml:"MediaType,omitempty" require:"true"`
}

func (s DeleteMultipartUploadRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteMultipartUploadRequest) GoString() string {
	return s.String()
}

func (s *DeleteMultipartUploadRequest) SetResourceRealOwnerId(v int64) *DeleteMultipartUploadRequest {
	s.ResourceRealOwnerId = &v
	return s
}

func (s *DeleteMultipartUploadRequest) SetMediaId(v string) *DeleteMultipartUploadRequest {
	s.MediaId = &v
	return s
}

func (s *DeleteMultipartUploadRequest) SetMediaType(v string) *DeleteMultipartUploadRequest {
	s.MediaType = &v
	return s
}

type DeleteMultipartUploadResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteMultipartUploadResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteMultipartUploadResponse) GoString() string {
	return s.String()
}

func (s *DeleteMultipartUploadResponse) SetRequestId(v string) *DeleteMultipartUploadResponse {
	s.RequestId = &v
	return s
}

type GetAttachedMediaInfoRequest struct {
	MediaIds            *string `json:"MediaIds,omitempty" xml:"MediaIds,omitempty" require:"true"`
	AuthTimeout         *int64  `json:"AuthTimeout,omitempty" xml:"AuthTimeout,omitempty"`
	ResourceRealOwnerId *int64  `json:"ResourceRealOwnerId,omitempty" xml:"ResourceRealOwnerId,omitempty"`
	OutputType          *string `json:"OutputType,omitempty" xml:"OutputType,omitempty"`
}

func (s GetAttachedMediaInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s GetAttachedMediaInfoRequest) GoString() string {
	return s.String()
}

func (s *GetAttachedMediaInfoRequest) SetMediaIds(v string) *GetAttachedMediaInfoRequest {
	s.MediaIds = &v
	return s
}

func (s *GetAttachedMediaInfoRequest) SetAuthTimeout(v int64) *GetAttachedMediaInfoRequest {
	s.AuthTimeout = &v
	return s
}

func (s *GetAttachedMediaInfoRequest) SetResourceRealOwnerId(v int64) *GetAttachedMediaInfoRequest {
	s.ResourceRealOwnerId = &v
	return s
}

func (s *GetAttachedMediaInfoRequest) SetOutputType(v string) *GetAttachedMediaInfoRequest {
	s.OutputType = &v
	return s
}

type GetAttachedMediaInfoResponse struct {
	RequestId         *string                                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AttachedMediaList []*GetAttachedMediaInfoResponseAttachedMediaList `json:"AttachedMediaList,omitempty" xml:"AttachedMediaList,omitempty" require:"true" type:"Repeated"`
	NonExistMediaIds  []*string                                        `json:"NonExistMediaIds,omitempty" xml:"NonExistMediaIds,omitempty" require:"true" type:"Repeated"`
}

func (s GetAttachedMediaInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s GetAttachedMediaInfoResponse) GoString() string {
	return s.String()
}

func (s *GetAttachedMediaInfoResponse) SetRequestId(v string) *GetAttachedMediaInfoResponse {
	s.RequestId = &v
	return s
}

func (s *GetAttachedMediaInfoResponse) SetAttachedMediaList(v []*GetAttachedMediaInfoResponseAttachedMediaList) *GetAttachedMediaInfoResponse {
	s.AttachedMediaList = v
	return s
}

func (s *GetAttachedMediaInfoResponse) SetNonExistMediaIds(v []*string) *GetAttachedMediaInfoResponse {
	s.NonExistMediaIds = v
	return s
}

type GetAttachedMediaInfoResponseAttachedMediaList struct {
	MediaId          *string                                                    `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	Title            *string                                                    `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	Type             *string                                                    `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Tags             *string                                                    `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true"`
	URL              *string                                                    `json:"URL,omitempty" xml:"URL,omitempty" require:"true"`
	Description      *string                                                    `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	FileSize         *int64                                                     `json:"FileSize,omitempty" xml:"FileSize,omitempty" require:"true"`
	StorageLocation  *string                                                    `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty" require:"true"`
	CreationTime     *string                                                    `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModificationTime *string                                                    `json:"ModificationTime,omitempty" xml:"ModificationTime,omitempty" require:"true"`
	AppId            *string                                                    `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	Status           *string                                                    `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	OnlineStatus     *string                                                    `json:"OnlineStatus,omitempty" xml:"OnlineStatus,omitempty" require:"true"`
	Icon             *string                                                    `json:"Icon,omitempty" xml:"Icon,omitempty" require:"true"`
	RegionId         *string                                                    `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Categories       []*GetAttachedMediaInfoResponseAttachedMediaListCategories `json:"Categories,omitempty" xml:"Categories,omitempty" require:"true" type:"Repeated"`
}

func (s GetAttachedMediaInfoResponseAttachedMediaList) String() string {
	return tea.Prettify(s)
}

func (s GetAttachedMediaInfoResponseAttachedMediaList) GoString() string {
	return s.String()
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetMediaId(v string) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.MediaId = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetTitle(v string) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.Title = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetType(v string) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.Type = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetTags(v string) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.Tags = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetURL(v string) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.URL = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetDescription(v string) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.Description = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetFileSize(v int64) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.FileSize = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetStorageLocation(v string) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.StorageLocation = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetCreationTime(v string) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.CreationTime = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetModificationTime(v string) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.ModificationTime = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetAppId(v string) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.AppId = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetStatus(v string) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.Status = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetOnlineStatus(v string) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.OnlineStatus = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetIcon(v string) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.Icon = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetRegionId(v string) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.RegionId = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaList) SetCategories(v []*GetAttachedMediaInfoResponseAttachedMediaListCategories) *GetAttachedMediaInfoResponseAttachedMediaList {
	s.Categories = v
	return s
}

type GetAttachedMediaInfoResponseAttachedMediaListCategories struct {
	CateId   *int64  `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
	CateName *string `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	Level    *int64  `json:"Level,omitempty" xml:"Level,omitempty" require:"true"`
	ParentId *int64  `json:"ParentId,omitempty" xml:"ParentId,omitempty" require:"true"`
}

func (s GetAttachedMediaInfoResponseAttachedMediaListCategories) String() string {
	return tea.Prettify(s)
}

func (s GetAttachedMediaInfoResponseAttachedMediaListCategories) GoString() string {
	return s.String()
}

func (s *GetAttachedMediaInfoResponseAttachedMediaListCategories) SetCateId(v int64) *GetAttachedMediaInfoResponseAttachedMediaListCategories {
	s.CateId = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaListCategories) SetCateName(v string) *GetAttachedMediaInfoResponseAttachedMediaListCategories {
	s.CateName = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaListCategories) SetLevel(v int64) *GetAttachedMediaInfoResponseAttachedMediaListCategories {
	s.Level = &v
	return s
}

func (s *GetAttachedMediaInfoResponseAttachedMediaListCategories) SetParentId(v int64) *GetAttachedMediaInfoResponseAttachedMediaListCategories {
	s.ParentId = &v
	return s
}

type DeleteAttachedMediaRequest struct {
	MediaIds *string `json:"MediaIds,omitempty" xml:"MediaIds,omitempty"`
}

func (s DeleteAttachedMediaRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAttachedMediaRequest) GoString() string {
	return s.String()
}

func (s *DeleteAttachedMediaRequest) SetMediaIds(v string) *DeleteAttachedMediaRequest {
	s.MediaIds = &v
	return s
}

type DeleteAttachedMediaResponse struct {
	RequestId        *string   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NonExistMediaIds []*string `json:"NonExistMediaIds,omitempty" xml:"NonExistMediaIds,omitempty" require:"true" type:"Repeated"`
}

func (s DeleteAttachedMediaResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAttachedMediaResponse) GoString() string {
	return s.String()
}

func (s *DeleteAttachedMediaResponse) SetRequestId(v string) *DeleteAttachedMediaResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteAttachedMediaResponse) SetNonExistMediaIds(v []*string) *DeleteAttachedMediaResponse {
	s.NonExistMediaIds = v
	return s
}

type UpdateAttachedMediaInfosRequest struct {
	ResourceRealOwnerId *int64  `json:"ResourceRealOwnerId,omitempty" xml:"ResourceRealOwnerId,omitempty"`
	UpdateContent       *string `json:"UpdateContent,omitempty" xml:"UpdateContent,omitempty" require:"true"`
}

func (s UpdateAttachedMediaInfosRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateAttachedMediaInfosRequest) GoString() string {
	return s.String()
}

func (s *UpdateAttachedMediaInfosRequest) SetResourceRealOwnerId(v int64) *UpdateAttachedMediaInfosRequest {
	s.ResourceRealOwnerId = &v
	return s
}

func (s *UpdateAttachedMediaInfosRequest) SetUpdateContent(v string) *UpdateAttachedMediaInfosRequest {
	s.UpdateContent = &v
	return s
}

type UpdateAttachedMediaInfosResponse struct {
	RequestId        *string   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NonExistMediaIds []*string `json:"NonExistMediaIds,omitempty" xml:"NonExistMediaIds,omitempty" require:"true" type:"Repeated"`
}

func (s UpdateAttachedMediaInfosResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateAttachedMediaInfosResponse) GoString() string {
	return s.String()
}

func (s *UpdateAttachedMediaInfosResponse) SetRequestId(v string) *UpdateAttachedMediaInfosResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateAttachedMediaInfosResponse) SetNonExistMediaIds(v []*string) *UpdateAttachedMediaInfosResponse {
	s.NonExistMediaIds = v
	return s
}

type AttachAppPolicyToIdentityRequest struct {
	IdentityType *string `json:"IdentityType,omitempty" xml:"IdentityType,omitempty" require:"true"`
	IdentityName *string `json:"IdentityName,omitempty" xml:"IdentityName,omitempty" require:"true"`
	AppId        *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
	PolicyNames  *string `json:"PolicyNames,omitempty" xml:"PolicyNames,omitempty" require:"true"`
}

func (s AttachAppPolicyToIdentityRequest) String() string {
	return tea.Prettify(s)
}

func (s AttachAppPolicyToIdentityRequest) GoString() string {
	return s.String()
}

func (s *AttachAppPolicyToIdentityRequest) SetIdentityType(v string) *AttachAppPolicyToIdentityRequest {
	s.IdentityType = &v
	return s
}

func (s *AttachAppPolicyToIdentityRequest) SetIdentityName(v string) *AttachAppPolicyToIdentityRequest {
	s.IdentityName = &v
	return s
}

func (s *AttachAppPolicyToIdentityRequest) SetAppId(v string) *AttachAppPolicyToIdentityRequest {
	s.AppId = &v
	return s
}

func (s *AttachAppPolicyToIdentityRequest) SetPolicyNames(v string) *AttachAppPolicyToIdentityRequest {
	s.PolicyNames = &v
	return s
}

type AttachAppPolicyToIdentityResponse struct {
	RequestId           *string   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NonExistPolicyNames []*string `json:"NonExistPolicyNames,omitempty" xml:"NonExistPolicyNames,omitempty" require:"true" type:"Repeated"`
	FailedPolicyNames   []*string `json:"FailedPolicyNames,omitempty" xml:"FailedPolicyNames,omitempty" require:"true" type:"Repeated"`
}

func (s AttachAppPolicyToIdentityResponse) String() string {
	return tea.Prettify(s)
}

func (s AttachAppPolicyToIdentityResponse) GoString() string {
	return s.String()
}

func (s *AttachAppPolicyToIdentityResponse) SetRequestId(v string) *AttachAppPolicyToIdentityResponse {
	s.RequestId = &v
	return s
}

func (s *AttachAppPolicyToIdentityResponse) SetNonExistPolicyNames(v []*string) *AttachAppPolicyToIdentityResponse {
	s.NonExistPolicyNames = v
	return s
}

func (s *AttachAppPolicyToIdentityResponse) SetFailedPolicyNames(v []*string) *AttachAppPolicyToIdentityResponse {
	s.FailedPolicyNames = v
	return s
}

type DetachAppPolicyFromIdentityRequest struct {
	IdentityType *string `json:"IdentityType,omitempty" xml:"IdentityType,omitempty" require:"true"`
	IdentityName *string `json:"IdentityName,omitempty" xml:"IdentityName,omitempty" require:"true"`
	AppId        *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
	PolicyNames  *string `json:"PolicyNames,omitempty" xml:"PolicyNames,omitempty" require:"true"`
}

func (s DetachAppPolicyFromIdentityRequest) String() string {
	return tea.Prettify(s)
}

func (s DetachAppPolicyFromIdentityRequest) GoString() string {
	return s.String()
}

func (s *DetachAppPolicyFromIdentityRequest) SetIdentityType(v string) *DetachAppPolicyFromIdentityRequest {
	s.IdentityType = &v
	return s
}

func (s *DetachAppPolicyFromIdentityRequest) SetIdentityName(v string) *DetachAppPolicyFromIdentityRequest {
	s.IdentityName = &v
	return s
}

func (s *DetachAppPolicyFromIdentityRequest) SetAppId(v string) *DetachAppPolicyFromIdentityRequest {
	s.AppId = &v
	return s
}

func (s *DetachAppPolicyFromIdentityRequest) SetPolicyNames(v string) *DetachAppPolicyFromIdentityRequest {
	s.PolicyNames = &v
	return s
}

type DetachAppPolicyFromIdentityResponse struct {
	RequestId           *string   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NonExistPolicyNames []*string `json:"NonExistPolicyNames,omitempty" xml:"NonExistPolicyNames,omitempty" require:"true" type:"Repeated"`
	FailedPolicyNames   []*string `json:"FailedPolicyNames,omitempty" xml:"FailedPolicyNames,omitempty" require:"true" type:"Repeated"`
}

func (s DetachAppPolicyFromIdentityResponse) String() string {
	return tea.Prettify(s)
}

func (s DetachAppPolicyFromIdentityResponse) GoString() string {
	return s.String()
}

func (s *DetachAppPolicyFromIdentityResponse) SetRequestId(v string) *DetachAppPolicyFromIdentityResponse {
	s.RequestId = &v
	return s
}

func (s *DetachAppPolicyFromIdentityResponse) SetNonExistPolicyNames(v []*string) *DetachAppPolicyFromIdentityResponse {
	s.NonExistPolicyNames = v
	return s
}

func (s *DetachAppPolicyFromIdentityResponse) SetFailedPolicyNames(v []*string) *DetachAppPolicyFromIdentityResponse {
	s.FailedPolicyNames = v
	return s
}

type ListAppPoliciesForIdentityRequest struct {
	IdentityType *string `json:"IdentityType,omitempty" xml:"IdentityType,omitempty"`
	IdentityName *string `json:"IdentityName,omitempty" xml:"IdentityName,omitempty"`
	AppId        *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
}

func (s ListAppPoliciesForIdentityRequest) String() string {
	return tea.Prettify(s)
}

func (s ListAppPoliciesForIdentityRequest) GoString() string {
	return s.String()
}

func (s *ListAppPoliciesForIdentityRequest) SetIdentityType(v string) *ListAppPoliciesForIdentityRequest {
	s.IdentityType = &v
	return s
}

func (s *ListAppPoliciesForIdentityRequest) SetIdentityName(v string) *ListAppPoliciesForIdentityRequest {
	s.IdentityName = &v
	return s
}

func (s *ListAppPoliciesForIdentityRequest) SetAppId(v string) *ListAppPoliciesForIdentityRequest {
	s.AppId = &v
	return s
}

type ListAppPoliciesForIdentityResponse struct {
	RequestId     *string                                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AppPolicyList []*ListAppPoliciesForIdentityResponseAppPolicyList `json:"AppPolicyList,omitempty" xml:"AppPolicyList,omitempty" require:"true" type:"Repeated"`
}

func (s ListAppPoliciesForIdentityResponse) String() string {
	return tea.Prettify(s)
}

func (s ListAppPoliciesForIdentityResponse) GoString() string {
	return s.String()
}

func (s *ListAppPoliciesForIdentityResponse) SetRequestId(v string) *ListAppPoliciesForIdentityResponse {
	s.RequestId = &v
	return s
}

func (s *ListAppPoliciesForIdentityResponse) SetAppPolicyList(v []*ListAppPoliciesForIdentityResponseAppPolicyList) *ListAppPoliciesForIdentityResponse {
	s.AppPolicyList = v
	return s
}

type ListAppPoliciesForIdentityResponseAppPolicyList struct {
	AppId            *string `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	CreationTime     *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	PolicyName       *string `json:"PolicyName,omitempty" xml:"PolicyName,omitempty" require:"true"`
	PolicyType       *string `json:"PolicyType,omitempty" xml:"PolicyType,omitempty" require:"true"`
	PolicyValue      *string `json:"PolicyValue,omitempty" xml:"PolicyValue,omitempty" require:"true"`
	Description      *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	ModificationTime *string `json:"ModificationTime,omitempty" xml:"ModificationTime,omitempty" require:"true"`
}

func (s ListAppPoliciesForIdentityResponseAppPolicyList) String() string {
	return tea.Prettify(s)
}

func (s ListAppPoliciesForIdentityResponseAppPolicyList) GoString() string {
	return s.String()
}

func (s *ListAppPoliciesForIdentityResponseAppPolicyList) SetAppId(v string) *ListAppPoliciesForIdentityResponseAppPolicyList {
	s.AppId = &v
	return s
}

func (s *ListAppPoliciesForIdentityResponseAppPolicyList) SetCreationTime(v string) *ListAppPoliciesForIdentityResponseAppPolicyList {
	s.CreationTime = &v
	return s
}

func (s *ListAppPoliciesForIdentityResponseAppPolicyList) SetPolicyName(v string) *ListAppPoliciesForIdentityResponseAppPolicyList {
	s.PolicyName = &v
	return s
}

func (s *ListAppPoliciesForIdentityResponseAppPolicyList) SetPolicyType(v string) *ListAppPoliciesForIdentityResponseAppPolicyList {
	s.PolicyType = &v
	return s
}

func (s *ListAppPoliciesForIdentityResponseAppPolicyList) SetPolicyValue(v string) *ListAppPoliciesForIdentityResponseAppPolicyList {
	s.PolicyValue = &v
	return s
}

func (s *ListAppPoliciesForIdentityResponseAppPolicyList) SetDescription(v string) *ListAppPoliciesForIdentityResponseAppPolicyList {
	s.Description = &v
	return s
}

func (s *ListAppPoliciesForIdentityResponseAppPolicyList) SetModificationTime(v string) *ListAppPoliciesForIdentityResponseAppPolicyList {
	s.ModificationTime = &v
	return s
}

type CreateAppInfoRequest struct {
	AppName     *string `json:"AppName,omitempty" xml:"AppName,omitempty"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty"`
}

func (s CreateAppInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateAppInfoRequest) GoString() string {
	return s.String()
}

func (s *CreateAppInfoRequest) SetAppName(v string) *CreateAppInfoRequest {
	s.AppName = &v
	return s
}

func (s *CreateAppInfoRequest) SetDescription(v string) *CreateAppInfoRequest {
	s.Description = &v
	return s
}

type CreateAppInfoResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AppId     *string `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
}

func (s CreateAppInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateAppInfoResponse) GoString() string {
	return s.String()
}

func (s *CreateAppInfoResponse) SetRequestId(v string) *CreateAppInfoResponse {
	s.RequestId = &v
	return s
}

func (s *CreateAppInfoResponse) SetAppId(v string) *CreateAppInfoResponse {
	s.AppId = &v
	return s
}

type GetAppInfosRequest struct {
	AppIds *string `json:"AppIds,omitempty" xml:"AppIds,omitempty" require:"true"`
}

func (s GetAppInfosRequest) String() string {
	return tea.Prettify(s)
}

func (s GetAppInfosRequest) GoString() string {
	return s.String()
}

func (s *GetAppInfosRequest) SetAppIds(v string) *GetAppInfosRequest {
	s.AppIds = &v
	return s
}

type GetAppInfosResponse struct {
	RequestId      *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AppInfoList    []*GetAppInfosResponseAppInfoList `json:"AppInfoList,omitempty" xml:"AppInfoList,omitempty" require:"true" type:"Repeated"`
	NonExistAppIds []*string                         `json:"NonExistAppIds,omitempty" xml:"NonExistAppIds,omitempty" require:"true" type:"Repeated"`
}

func (s GetAppInfosResponse) String() string {
	return tea.Prettify(s)
}

func (s GetAppInfosResponse) GoString() string {
	return s.String()
}

func (s *GetAppInfosResponse) SetRequestId(v string) *GetAppInfosResponse {
	s.RequestId = &v
	return s
}

func (s *GetAppInfosResponse) SetAppInfoList(v []*GetAppInfosResponseAppInfoList) *GetAppInfosResponse {
	s.AppInfoList = v
	return s
}

func (s *GetAppInfosResponse) SetNonExistAppIds(v []*string) *GetAppInfosResponse {
	s.NonExistAppIds = v
	return s
}

type GetAppInfosResponseAppInfoList struct {
	AppId            *string `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	AppName          *string `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
	Type             *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Description      *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Status           *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	CreationTime     *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModificationTime *string `json:"ModificationTime,omitempty" xml:"ModificationTime,omitempty" require:"true"`
}

func (s GetAppInfosResponseAppInfoList) String() string {
	return tea.Prettify(s)
}

func (s GetAppInfosResponseAppInfoList) GoString() string {
	return s.String()
}

func (s *GetAppInfosResponseAppInfoList) SetAppId(v string) *GetAppInfosResponseAppInfoList {
	s.AppId = &v
	return s
}

func (s *GetAppInfosResponseAppInfoList) SetAppName(v string) *GetAppInfosResponseAppInfoList {
	s.AppName = &v
	return s
}

func (s *GetAppInfosResponseAppInfoList) SetType(v string) *GetAppInfosResponseAppInfoList {
	s.Type = &v
	return s
}

func (s *GetAppInfosResponseAppInfoList) SetDescription(v string) *GetAppInfosResponseAppInfoList {
	s.Description = &v
	return s
}

func (s *GetAppInfosResponseAppInfoList) SetStatus(v string) *GetAppInfosResponseAppInfoList {
	s.Status = &v
	return s
}

func (s *GetAppInfosResponseAppInfoList) SetCreationTime(v string) *GetAppInfosResponseAppInfoList {
	s.CreationTime = &v
	return s
}

func (s *GetAppInfosResponseAppInfoList) SetModificationTime(v string) *GetAppInfosResponseAppInfoList {
	s.ModificationTime = &v
	return s
}

type UpdateAppInfoRequest struct {
	AppId       *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
	AppName     *string `json:"AppName,omitempty" xml:"AppName,omitempty"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty"`
	Status      *string `json:"Status,omitempty" xml:"Status,omitempty"`
}

func (s UpdateAppInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateAppInfoRequest) GoString() string {
	return s.String()
}

func (s *UpdateAppInfoRequest) SetAppId(v string) *UpdateAppInfoRequest {
	s.AppId = &v
	return s
}

func (s *UpdateAppInfoRequest) SetAppName(v string) *UpdateAppInfoRequest {
	s.AppName = &v
	return s
}

func (s *UpdateAppInfoRequest) SetDescription(v string) *UpdateAppInfoRequest {
	s.Description = &v
	return s
}

func (s *UpdateAppInfoRequest) SetStatus(v string) *UpdateAppInfoRequest {
	s.Status = &v
	return s
}

type UpdateAppInfoResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateAppInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateAppInfoResponse) GoString() string {
	return s.String()
}

func (s *UpdateAppInfoResponse) SetRequestId(v string) *UpdateAppInfoResponse {
	s.RequestId = &v
	return s
}

type DeleteAppInfoRequest struct {
	AppId *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
}

func (s DeleteAppInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAppInfoRequest) GoString() string {
	return s.String()
}

func (s *DeleteAppInfoRequest) SetAppId(v string) *DeleteAppInfoRequest {
	s.AppId = &v
	return s
}

type DeleteAppInfoResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteAppInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAppInfoResponse) GoString() string {
	return s.String()
}

func (s *DeleteAppInfoResponse) SetRequestId(v string) *DeleteAppInfoResponse {
	s.RequestId = &v
	return s
}

type ListAppInfoRequest struct {
	Status   *string `json:"Status,omitempty" xml:"Status,omitempty"`
	PageNo   *int    `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
	PageSize *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s ListAppInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s ListAppInfoRequest) GoString() string {
	return s.String()
}

func (s *ListAppInfoRequest) SetStatus(v string) *ListAppInfoRequest {
	s.Status = &v
	return s
}

func (s *ListAppInfoRequest) SetPageNo(v int) *ListAppInfoRequest {
	s.PageNo = &v
	return s
}

func (s *ListAppInfoRequest) SetPageSize(v int) *ListAppInfoRequest {
	s.PageSize = &v
	return s
}

type ListAppInfoResponse struct {
	RequestId   *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Total       *int                              `json:"Total,omitempty" xml:"Total,omitempty" require:"true"`
	AppInfoList []*ListAppInfoResponseAppInfoList `json:"AppInfoList,omitempty" xml:"AppInfoList,omitempty" require:"true" type:"Repeated"`
}

func (s ListAppInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s ListAppInfoResponse) GoString() string {
	return s.String()
}

func (s *ListAppInfoResponse) SetRequestId(v string) *ListAppInfoResponse {
	s.RequestId = &v
	return s
}

func (s *ListAppInfoResponse) SetTotal(v int) *ListAppInfoResponse {
	s.Total = &v
	return s
}

func (s *ListAppInfoResponse) SetAppInfoList(v []*ListAppInfoResponseAppInfoList) *ListAppInfoResponse {
	s.AppInfoList = v
	return s
}

type ListAppInfoResponseAppInfoList struct {
	AppId            *string `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	AppName          *string `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
	Type             *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Description      *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Status           *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	CreationTime     *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModificationTime *string `json:"ModificationTime,omitempty" xml:"ModificationTime,omitempty" require:"true"`
}

func (s ListAppInfoResponseAppInfoList) String() string {
	return tea.Prettify(s)
}

func (s ListAppInfoResponseAppInfoList) GoString() string {
	return s.String()
}

func (s *ListAppInfoResponseAppInfoList) SetAppId(v string) *ListAppInfoResponseAppInfoList {
	s.AppId = &v
	return s
}

func (s *ListAppInfoResponseAppInfoList) SetAppName(v string) *ListAppInfoResponseAppInfoList {
	s.AppName = &v
	return s
}

func (s *ListAppInfoResponseAppInfoList) SetType(v string) *ListAppInfoResponseAppInfoList {
	s.Type = &v
	return s
}

func (s *ListAppInfoResponseAppInfoList) SetDescription(v string) *ListAppInfoResponseAppInfoList {
	s.Description = &v
	return s
}

func (s *ListAppInfoResponseAppInfoList) SetStatus(v string) *ListAppInfoResponseAppInfoList {
	s.Status = &v
	return s
}

func (s *ListAppInfoResponseAppInfoList) SetCreationTime(v string) *ListAppInfoResponseAppInfoList {
	s.CreationTime = &v
	return s
}

func (s *ListAppInfoResponseAppInfoList) SetModificationTime(v string) *ListAppInfoResponseAppInfoList {
	s.ModificationTime = &v
	return s
}

type MoveAppResourceRequest struct {
	TargetAppId  *string `json:"TargetAppId,omitempty" xml:"TargetAppId,omitempty" require:"true"`
	ResourceType *string `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	ResourceIds  *string `json:"ResourceIds,omitempty" xml:"ResourceIds,omitempty" require:"true"`
}

func (s MoveAppResourceRequest) String() string {
	return tea.Prettify(s)
}

func (s MoveAppResourceRequest) GoString() string {
	return s.String()
}

func (s *MoveAppResourceRequest) SetTargetAppId(v string) *MoveAppResourceRequest {
	s.TargetAppId = &v
	return s
}

func (s *MoveAppResourceRequest) SetResourceType(v string) *MoveAppResourceRequest {
	s.ResourceType = &v
	return s
}

func (s *MoveAppResourceRequest) SetResourceIds(v string) *MoveAppResourceRequest {
	s.ResourceIds = &v
	return s
}

type MoveAppResourceResponse struct {
	RequestId           *string   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NonExistResourceIds []*string `json:"NonExistResourceIds,omitempty" xml:"NonExistResourceIds,omitempty" require:"true" type:"Repeated"`
	FailedResourceIds   []*string `json:"FailedResourceIds,omitempty" xml:"FailedResourceIds,omitempty" require:"true" type:"Repeated"`
}

func (s MoveAppResourceResponse) String() string {
	return tea.Prettify(s)
}

func (s MoveAppResourceResponse) GoString() string {
	return s.String()
}

func (s *MoveAppResourceResponse) SetRequestId(v string) *MoveAppResourceResponse {
	s.RequestId = &v
	return s
}

func (s *MoveAppResourceResponse) SetNonExistResourceIds(v []*string) *MoveAppResourceResponse {
	s.NonExistResourceIds = v
	return s
}

func (s *MoveAppResourceResponse) SetFailedResourceIds(v []*string) *MoveAppResourceResponse {
	s.FailedResourceIds = v
	return s
}

type DeleteMessageCallbackRequest struct {
	ResourceRealOwnerId *int64  `json:"ResourceRealOwnerId,omitempty" xml:"ResourceRealOwnerId,omitempty"`
	AppId               *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
}

func (s DeleteMessageCallbackRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteMessageCallbackRequest) GoString() string {
	return s.String()
}

func (s *DeleteMessageCallbackRequest) SetResourceRealOwnerId(v int64) *DeleteMessageCallbackRequest {
	s.ResourceRealOwnerId = &v
	return s
}

func (s *DeleteMessageCallbackRequest) SetAppId(v string) *DeleteMessageCallbackRequest {
	s.AppId = &v
	return s
}

type DeleteMessageCallbackResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteMessageCallbackResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteMessageCallbackResponse) GoString() string {
	return s.String()
}

func (s *DeleteMessageCallbackResponse) SetRequestId(v string) *DeleteMessageCallbackResponse {
	s.RequestId = &v
	return s
}

type GetTranscodeSummaryRequest struct {
	VideoIds *string `json:"VideoIds,omitempty" xml:"VideoIds,omitempty" require:"true"`
}

func (s GetTranscodeSummaryRequest) String() string {
	return tea.Prettify(s)
}

func (s GetTranscodeSummaryRequest) GoString() string {
	return s.String()
}

func (s *GetTranscodeSummaryRequest) SetVideoIds(v string) *GetTranscodeSummaryRequest {
	s.VideoIds = &v
	return s
}

type GetTranscodeSummaryResponse struct {
	RequestId            *string                                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TranscodeSummaryList []*GetTranscodeSummaryResponseTranscodeSummaryList `json:"TranscodeSummaryList,omitempty" xml:"TranscodeSummaryList,omitempty" require:"true" type:"Repeated"`
	NonExistVideoIds     []*string                                          `json:"NonExistVideoIds,omitempty" xml:"NonExistVideoIds,omitempty" require:"true" type:"Repeated"`
}

func (s GetTranscodeSummaryResponse) String() string {
	return tea.Prettify(s)
}

func (s GetTranscodeSummaryResponse) GoString() string {
	return s.String()
}

func (s *GetTranscodeSummaryResponse) SetRequestId(v string) *GetTranscodeSummaryResponse {
	s.RequestId = &v
	return s
}

func (s *GetTranscodeSummaryResponse) SetTranscodeSummaryList(v []*GetTranscodeSummaryResponseTranscodeSummaryList) *GetTranscodeSummaryResponse {
	s.TranscodeSummaryList = v
	return s
}

func (s *GetTranscodeSummaryResponse) SetNonExistVideoIds(v []*string) *GetTranscodeSummaryResponse {
	s.NonExistVideoIds = v
	return s
}

type GetTranscodeSummaryResponseTranscodeSummaryList struct {
	VideoId                     *string                                                                       `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	TranscodeStatus             *string                                                                       `json:"TranscodeStatus,omitempty" xml:"TranscodeStatus,omitempty" require:"true"`
	CreationTime                *string                                                                       `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	CompleteTime                *string                                                                       `json:"CompleteTime,omitempty" xml:"CompleteTime,omitempty" require:"true"`
	Trigger                     *string                                                                       `json:"Trigger,omitempty" xml:"Trigger,omitempty" require:"true"`
	TranscodeTemplateGroupId    *string                                                                       `json:"TranscodeTemplateGroupId,omitempty" xml:"TranscodeTemplateGroupId,omitempty" require:"true"`
	TranscodeJobInfoSummaryList []*GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList `json:"TranscodeJobInfoSummaryList,omitempty" xml:"TranscodeJobInfoSummaryList,omitempty" require:"true" type:"Repeated"`
}

func (s GetTranscodeSummaryResponseTranscodeSummaryList) String() string {
	return tea.Prettify(s)
}

func (s GetTranscodeSummaryResponseTranscodeSummaryList) GoString() string {
	return s.String()
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryList) SetVideoId(v string) *GetTranscodeSummaryResponseTranscodeSummaryList {
	s.VideoId = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryList) SetTranscodeStatus(v string) *GetTranscodeSummaryResponseTranscodeSummaryList {
	s.TranscodeStatus = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryList) SetCreationTime(v string) *GetTranscodeSummaryResponseTranscodeSummaryList {
	s.CreationTime = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryList) SetCompleteTime(v string) *GetTranscodeSummaryResponseTranscodeSummaryList {
	s.CompleteTime = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryList) SetTrigger(v string) *GetTranscodeSummaryResponseTranscodeSummaryList {
	s.Trigger = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryList) SetTranscodeTemplateGroupId(v string) *GetTranscodeSummaryResponseTranscodeSummaryList {
	s.TranscodeTemplateGroupId = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryList) SetTranscodeJobInfoSummaryList(v []*GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) *GetTranscodeSummaryResponseTranscodeSummaryList {
	s.TranscodeJobInfoSummaryList = v
	return s
}

type GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList struct {
	TranscodeTemplateId *string   `json:"TranscodeTemplateId,omitempty" xml:"TranscodeTemplateId,omitempty" require:"true"`
	TranscodeJobStatus  *string   `json:"TranscodeJobStatus,omitempty" xml:"TranscodeJobStatus,omitempty" require:"true"`
	CreationTime        *string   `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	CompleteTime        *string   `json:"CompleteTime,omitempty" xml:"CompleteTime,omitempty" require:"true"`
	TranscodeProgress   *int64    `json:"TranscodeProgress,omitempty" xml:"TranscodeProgress,omitempty" require:"true"`
	ErrorCode           *string   `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage        *string   `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	Definition          *string   `json:"Definition,omitempty" xml:"Definition,omitempty" require:"true"`
	Encryption          *string   `json:"Encryption,omitempty" xml:"Encryption,omitempty" require:"true"`
	Width               *string   `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height              *string   `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Bitrate             *string   `json:"Bitrate,omitempty" xml:"Bitrate,omitempty" require:"true"`
	Fps                 *string   `json:"Fps,omitempty" xml:"Fps,omitempty" require:"true"`
	Format              *string   `json:"Format,omitempty" xml:"Format,omitempty" require:"true"`
	Duration            *string   `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Filesize            *int64    `json:"Filesize,omitempty" xml:"Filesize,omitempty" require:"true"`
	WatermarkIdList     []*string `json:"WatermarkIdList,omitempty" xml:"WatermarkIdList,omitempty" require:"true" type:"Repeated"`
}

func (s GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) String() string {
	return tea.Prettify(s)
}

func (s GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) GoString() string {
	return s.String()
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetTranscodeTemplateId(v string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.TranscodeTemplateId = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetTranscodeJobStatus(v string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.TranscodeJobStatus = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetCreationTime(v string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.CreationTime = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetCompleteTime(v string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.CompleteTime = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetTranscodeProgress(v int64) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.TranscodeProgress = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetErrorCode(v string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.ErrorCode = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetErrorMessage(v string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.ErrorMessage = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetDefinition(v string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.Definition = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetEncryption(v string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.Encryption = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetWidth(v string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.Width = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetHeight(v string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.Height = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetBitrate(v string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.Bitrate = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetFps(v string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.Fps = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetFormat(v string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.Format = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetDuration(v string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.Duration = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetFilesize(v int64) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.Filesize = &v
	return s
}

func (s *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList) SetWatermarkIdList(v []*string) *GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList {
	s.WatermarkIdList = v
	return s
}

type ListTranscodeTaskRequest struct {
	VideoId   *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	StartTime *string `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime   *string `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
	PageSize  *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNo    *int    `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
}

func (s ListTranscodeTaskRequest) String() string {
	return tea.Prettify(s)
}

func (s ListTranscodeTaskRequest) GoString() string {
	return s.String()
}

func (s *ListTranscodeTaskRequest) SetVideoId(v string) *ListTranscodeTaskRequest {
	s.VideoId = &v
	return s
}

func (s *ListTranscodeTaskRequest) SetStartTime(v string) *ListTranscodeTaskRequest {
	s.StartTime = &v
	return s
}

func (s *ListTranscodeTaskRequest) SetEndTime(v string) *ListTranscodeTaskRequest {
	s.EndTime = &v
	return s
}

func (s *ListTranscodeTaskRequest) SetPageSize(v int) *ListTranscodeTaskRequest {
	s.PageSize = &v
	return s
}

func (s *ListTranscodeTaskRequest) SetPageNo(v int) *ListTranscodeTaskRequest {
	s.PageNo = &v
	return s
}

type ListTranscodeTaskResponse struct {
	RequestId         *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TranscodeTaskList []*ListTranscodeTaskResponseTranscodeTaskList `json:"TranscodeTaskList,omitempty" xml:"TranscodeTaskList,omitempty" require:"true" type:"Repeated"`
}

func (s ListTranscodeTaskResponse) String() string {
	return tea.Prettify(s)
}

func (s ListTranscodeTaskResponse) GoString() string {
	return s.String()
}

func (s *ListTranscodeTaskResponse) SetRequestId(v string) *ListTranscodeTaskResponse {
	s.RequestId = &v
	return s
}

func (s *ListTranscodeTaskResponse) SetTranscodeTaskList(v []*ListTranscodeTaskResponseTranscodeTaskList) *ListTranscodeTaskResponse {
	s.TranscodeTaskList = v
	return s
}

type ListTranscodeTaskResponseTranscodeTaskList struct {
	TranscodeTaskId          *string `json:"TranscodeTaskId,omitempty" xml:"TranscodeTaskId,omitempty" require:"true"`
	VideoId                  *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	TaskStatus               *string `json:"TaskStatus,omitempty" xml:"TaskStatus,omitempty" require:"true"`
	TranscodeTemplateGroupId *string `json:"TranscodeTemplateGroupId,omitempty" xml:"TranscodeTemplateGroupId,omitempty" require:"true"`
	CreationTime             *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	CompleteTime             *string `json:"CompleteTime,omitempty" xml:"CompleteTime,omitempty" require:"true"`
	Trigger                  *string `json:"Trigger,omitempty" xml:"Trigger,omitempty" require:"true"`
}

func (s ListTranscodeTaskResponseTranscodeTaskList) String() string {
	return tea.Prettify(s)
}

func (s ListTranscodeTaskResponseTranscodeTaskList) GoString() string {
	return s.String()
}

func (s *ListTranscodeTaskResponseTranscodeTaskList) SetTranscodeTaskId(v string) *ListTranscodeTaskResponseTranscodeTaskList {
	s.TranscodeTaskId = &v
	return s
}

func (s *ListTranscodeTaskResponseTranscodeTaskList) SetVideoId(v string) *ListTranscodeTaskResponseTranscodeTaskList {
	s.VideoId = &v
	return s
}

func (s *ListTranscodeTaskResponseTranscodeTaskList) SetTaskStatus(v string) *ListTranscodeTaskResponseTranscodeTaskList {
	s.TaskStatus = &v
	return s
}

func (s *ListTranscodeTaskResponseTranscodeTaskList) SetTranscodeTemplateGroupId(v string) *ListTranscodeTaskResponseTranscodeTaskList {
	s.TranscodeTemplateGroupId = &v
	return s
}

func (s *ListTranscodeTaskResponseTranscodeTaskList) SetCreationTime(v string) *ListTranscodeTaskResponseTranscodeTaskList {
	s.CreationTime = &v
	return s
}

func (s *ListTranscodeTaskResponseTranscodeTaskList) SetCompleteTime(v string) *ListTranscodeTaskResponseTranscodeTaskList {
	s.CompleteTime = &v
	return s
}

func (s *ListTranscodeTaskResponseTranscodeTaskList) SetTrigger(v string) *ListTranscodeTaskResponseTranscodeTaskList {
	s.Trigger = &v
	return s
}

type GetTranscodeTaskRequest struct {
	TranscodeTaskId *string `json:"TranscodeTaskId,omitempty" xml:"TranscodeTaskId,omitempty" require:"true"`
}

func (s GetTranscodeTaskRequest) String() string {
	return tea.Prettify(s)
}

func (s GetTranscodeTaskRequest) GoString() string {
	return s.String()
}

func (s *GetTranscodeTaskRequest) SetTranscodeTaskId(v string) *GetTranscodeTaskRequest {
	s.TranscodeTaskId = &v
	return s
}

type GetTranscodeTaskResponse struct {
	RequestId     *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TranscodeTask *GetTranscodeTaskResponseTranscodeTask `json:"TranscodeTask,omitempty" xml:"TranscodeTask,omitempty" require:"true" type:"Struct"`
}

func (s GetTranscodeTaskResponse) String() string {
	return tea.Prettify(s)
}

func (s GetTranscodeTaskResponse) GoString() string {
	return s.String()
}

func (s *GetTranscodeTaskResponse) SetRequestId(v string) *GetTranscodeTaskResponse {
	s.RequestId = &v
	return s
}

func (s *GetTranscodeTaskResponse) SetTranscodeTask(v *GetTranscodeTaskResponseTranscodeTask) *GetTranscodeTaskResponse {
	s.TranscodeTask = v
	return s
}

type GetTranscodeTaskResponseTranscodeTask struct {
	TranscodeTaskId          *string                                                      `json:"TranscodeTaskId,omitempty" xml:"TranscodeTaskId,omitempty" require:"true"`
	VideoId                  *string                                                      `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	TaskStatus               *string                                                      `json:"TaskStatus,omitempty" xml:"TaskStatus,omitempty" require:"true"`
	CreationTime             *string                                                      `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	CompleteTime             *string                                                      `json:"CompleteTime,omitempty" xml:"CompleteTime,omitempty" require:"true"`
	Trigger                  *string                                                      `json:"Trigger,omitempty" xml:"Trigger,omitempty" require:"true"`
	TranscodeTemplateGroupId *string                                                      `json:"TranscodeTemplateGroupId,omitempty" xml:"TranscodeTemplateGroupId,omitempty" require:"true"`
	TranscodeJobInfoList     []*GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList `json:"TranscodeJobInfoList,omitempty" xml:"TranscodeJobInfoList,omitempty" require:"true" type:"Repeated"`
}

func (s GetTranscodeTaskResponseTranscodeTask) String() string {
	return tea.Prettify(s)
}

func (s GetTranscodeTaskResponseTranscodeTask) GoString() string {
	return s.String()
}

func (s *GetTranscodeTaskResponseTranscodeTask) SetTranscodeTaskId(v string) *GetTranscodeTaskResponseTranscodeTask {
	s.TranscodeTaskId = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTask) SetVideoId(v string) *GetTranscodeTaskResponseTranscodeTask {
	s.VideoId = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTask) SetTaskStatus(v string) *GetTranscodeTaskResponseTranscodeTask {
	s.TaskStatus = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTask) SetCreationTime(v string) *GetTranscodeTaskResponseTranscodeTask {
	s.CreationTime = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTask) SetCompleteTime(v string) *GetTranscodeTaskResponseTranscodeTask {
	s.CompleteTime = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTask) SetTrigger(v string) *GetTranscodeTaskResponseTranscodeTask {
	s.Trigger = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTask) SetTranscodeTemplateGroupId(v string) *GetTranscodeTaskResponseTranscodeTask {
	s.TranscodeTemplateGroupId = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTask) SetTranscodeJobInfoList(v []*GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) *GetTranscodeTaskResponseTranscodeTask {
	s.TranscodeJobInfoList = v
	return s
}

type GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList struct {
	TranscodeJobId      *string                                                              `json:"TranscodeJobId,omitempty" xml:"TranscodeJobId,omitempty" require:"true"`
	TranscodeTemplateId *string                                                              `json:"TranscodeTemplateId,omitempty" xml:"TranscodeTemplateId,omitempty" require:"true"`
	TranscodeJobStatus  *string                                                              `json:"TranscodeJobStatus,omitempty" xml:"TranscodeJobStatus,omitempty" require:"true"`
	CreationTime        *string                                                              `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	CompleteTime        *string                                                              `json:"CompleteTime,omitempty" xml:"CompleteTime,omitempty" require:"true"`
	TranscodeProgress   *int64                                                               `json:"TranscodeProgress,omitempty" xml:"TranscodeProgress,omitempty" require:"true"`
	InputFileUrl        *string                                                              `json:"InputFileUrl,omitempty" xml:"InputFileUrl,omitempty" require:"true"`
	Priority            *string                                                              `json:"Priority,omitempty" xml:"Priority,omitempty" require:"true"`
	ErrorCode           *string                                                              `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage        *string                                                              `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	Definition          *string                                                              `json:"Definition,omitempty" xml:"Definition,omitempty" require:"true"`
	OutputFile          *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile `json:"OutputFile,omitempty" xml:"OutputFile,omitempty" require:"true" type:"Struct"`
}

func (s GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) String() string {
	return tea.Prettify(s)
}

func (s GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) GoString() string {
	return s.String()
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) SetTranscodeJobId(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList {
	s.TranscodeJobId = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) SetTranscodeTemplateId(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList {
	s.TranscodeTemplateId = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) SetTranscodeJobStatus(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList {
	s.TranscodeJobStatus = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) SetCreationTime(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList {
	s.CreationTime = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) SetCompleteTime(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList {
	s.CompleteTime = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) SetTranscodeProgress(v int64) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList {
	s.TranscodeProgress = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) SetInputFileUrl(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList {
	s.InputFileUrl = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) SetPriority(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList {
	s.Priority = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) SetErrorCode(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList {
	s.ErrorCode = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) SetErrorMessage(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList {
	s.ErrorMessage = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) SetDefinition(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList {
	s.Definition = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList) SetOutputFile(v *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList {
	s.OutputFile = v
	return s
}

type GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile struct {
	Width              *string   `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height             *string   `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Bitrate            *string   `json:"Bitrate,omitempty" xml:"Bitrate,omitempty" require:"true"`
	Fps                *string   `json:"Fps,omitempty" xml:"Fps,omitempty" require:"true"`
	Format             *string   `json:"Format,omitempty" xml:"Format,omitempty" require:"true"`
	Duration           *string   `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Filesize           *int64    `json:"Filesize,omitempty" xml:"Filesize,omitempty" require:"true"`
	Encryption         *string   `json:"Encryption,omitempty" xml:"Encryption,omitempty" require:"true"`
	AudioStreamList    *string   `json:"AudioStreamList,omitempty" xml:"AudioStreamList,omitempty" require:"true"`
	VideoStreamList    *string   `json:"VideoStreamList,omitempty" xml:"VideoStreamList,omitempty" require:"true"`
	SubtitleStreamList *string   `json:"SubtitleStreamList,omitempty" xml:"SubtitleStreamList,omitempty" require:"true"`
	OutputFileUrl      *string   `json:"OutputFileUrl,omitempty" xml:"OutputFileUrl,omitempty" require:"true"`
	WatermarkIdList    []*string `json:"WatermarkIdList,omitempty" xml:"WatermarkIdList,omitempty" require:"true" type:"Repeated"`
}

func (s GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) String() string {
	return tea.Prettify(s)
}

func (s GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) GoString() string {
	return s.String()
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) SetWidth(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile {
	s.Width = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) SetHeight(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile {
	s.Height = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) SetBitrate(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile {
	s.Bitrate = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) SetFps(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile {
	s.Fps = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) SetFormat(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile {
	s.Format = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) SetDuration(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile {
	s.Duration = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) SetFilesize(v int64) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile {
	s.Filesize = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) SetEncryption(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile {
	s.Encryption = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) SetAudioStreamList(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile {
	s.AudioStreamList = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) SetVideoStreamList(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile {
	s.VideoStreamList = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) SetSubtitleStreamList(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile {
	s.SubtitleStreamList = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) SetOutputFileUrl(v string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile {
	s.OutputFileUrl = &v
	return s
}

func (s *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile) SetWatermarkIdList(v []*string) *GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile {
	s.WatermarkIdList = v
	return s
}

type GetURLUploadInfosRequest struct {
	JobIds     *string `json:"JobIds,omitempty" xml:"JobIds,omitempty"`
	UploadURLs *string `json:"UploadURLs,omitempty" xml:"UploadURLs,omitempty"`
}

func (s GetURLUploadInfosRequest) String() string {
	return tea.Prettify(s)
}

func (s GetURLUploadInfosRequest) GoString() string {
	return s.String()
}

func (s *GetURLUploadInfosRequest) SetJobIds(v string) *GetURLUploadInfosRequest {
	s.JobIds = &v
	return s
}

func (s *GetURLUploadInfosRequest) SetUploadURLs(v string) *GetURLUploadInfosRequest {
	s.UploadURLs = &v
	return s
}

type GetURLUploadInfosResponse struct {
	RequestId         *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	URLUploadInfoList []*GetURLUploadInfosResponseURLUploadInfoList `json:"URLUploadInfoList,omitempty" xml:"URLUploadInfoList,omitempty" require:"true" type:"Repeated"`
	NonExists         []*string                                     `json:"NonExists,omitempty" xml:"NonExists,omitempty" require:"true" type:"Repeated"`
}

func (s GetURLUploadInfosResponse) String() string {
	return tea.Prettify(s)
}

func (s GetURLUploadInfosResponse) GoString() string {
	return s.String()
}

func (s *GetURLUploadInfosResponse) SetRequestId(v string) *GetURLUploadInfosResponse {
	s.RequestId = &v
	return s
}

func (s *GetURLUploadInfosResponse) SetURLUploadInfoList(v []*GetURLUploadInfosResponseURLUploadInfoList) *GetURLUploadInfosResponse {
	s.URLUploadInfoList = v
	return s
}

func (s *GetURLUploadInfosResponse) SetNonExists(v []*string) *GetURLUploadInfosResponse {
	s.NonExists = v
	return s
}

type GetURLUploadInfosResponseURLUploadInfoList struct {
	JobId        *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
	UploadURL    *string `json:"UploadURL,omitempty" xml:"UploadURL,omitempty" require:"true"`
	MediaId      *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	FileSize     *string `json:"FileSize,omitempty" xml:"FileSize,omitempty" require:"true"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	UserData     *string `json:"UserData,omitempty" xml:"UserData,omitempty" require:"true"`
	ErrorCode    *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	CreationTime *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	CompleteTime *string `json:"CompleteTime,omitempty" xml:"CompleteTime,omitempty" require:"true"`
}

func (s GetURLUploadInfosResponseURLUploadInfoList) String() string {
	return tea.Prettify(s)
}

func (s GetURLUploadInfosResponseURLUploadInfoList) GoString() string {
	return s.String()
}

func (s *GetURLUploadInfosResponseURLUploadInfoList) SetJobId(v string) *GetURLUploadInfosResponseURLUploadInfoList {
	s.JobId = &v
	return s
}

func (s *GetURLUploadInfosResponseURLUploadInfoList) SetUploadURL(v string) *GetURLUploadInfosResponseURLUploadInfoList {
	s.UploadURL = &v
	return s
}

func (s *GetURLUploadInfosResponseURLUploadInfoList) SetMediaId(v string) *GetURLUploadInfosResponseURLUploadInfoList {
	s.MediaId = &v
	return s
}

func (s *GetURLUploadInfosResponseURLUploadInfoList) SetFileSize(v string) *GetURLUploadInfosResponseURLUploadInfoList {
	s.FileSize = &v
	return s
}

func (s *GetURLUploadInfosResponseURLUploadInfoList) SetStatus(v string) *GetURLUploadInfosResponseURLUploadInfoList {
	s.Status = &v
	return s
}

func (s *GetURLUploadInfosResponseURLUploadInfoList) SetUserData(v string) *GetURLUploadInfosResponseURLUploadInfoList {
	s.UserData = &v
	return s
}

func (s *GetURLUploadInfosResponseURLUploadInfoList) SetErrorCode(v string) *GetURLUploadInfosResponseURLUploadInfoList {
	s.ErrorCode = &v
	return s
}

func (s *GetURLUploadInfosResponseURLUploadInfoList) SetErrorMessage(v string) *GetURLUploadInfosResponseURLUploadInfoList {
	s.ErrorMessage = &v
	return s
}

func (s *GetURLUploadInfosResponseURLUploadInfoList) SetCreationTime(v string) *GetURLUploadInfosResponseURLUploadInfoList {
	s.CreationTime = &v
	return s
}

func (s *GetURLUploadInfosResponseURLUploadInfoList) SetCompleteTime(v string) *GetURLUploadInfosResponseURLUploadInfoList {
	s.CompleteTime = &v
	return s
}

type UpdateTranscodeTemplateGroupRequest struct {
	Name                     *string `json:"Name,omitempty" xml:"Name,omitempty"`
	TranscodeTemplateList    *string `json:"TranscodeTemplateList,omitempty" xml:"TranscodeTemplateList,omitempty"`
	Locked                   *string `json:"Locked,omitempty" xml:"Locked,omitempty"`
	TranscodeTemplateGroupId *string `json:"TranscodeTemplateGroupId,omitempty" xml:"TranscodeTemplateGroupId,omitempty" require:"true"`
}

func (s UpdateTranscodeTemplateGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateTranscodeTemplateGroupRequest) GoString() string {
	return s.String()
}

func (s *UpdateTranscodeTemplateGroupRequest) SetName(v string) *UpdateTranscodeTemplateGroupRequest {
	s.Name = &v
	return s
}

func (s *UpdateTranscodeTemplateGroupRequest) SetTranscodeTemplateList(v string) *UpdateTranscodeTemplateGroupRequest {
	s.TranscodeTemplateList = &v
	return s
}

func (s *UpdateTranscodeTemplateGroupRequest) SetLocked(v string) *UpdateTranscodeTemplateGroupRequest {
	s.Locked = &v
	return s
}

func (s *UpdateTranscodeTemplateGroupRequest) SetTranscodeTemplateGroupId(v string) *UpdateTranscodeTemplateGroupRequest {
	s.TranscodeTemplateGroupId = &v
	return s
}

type UpdateTranscodeTemplateGroupResponse struct {
	RequestId                *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TranscodeTemplateGroupId *string `json:"TranscodeTemplateGroupId,omitempty" xml:"TranscodeTemplateGroupId,omitempty" require:"true"`
}

func (s UpdateTranscodeTemplateGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateTranscodeTemplateGroupResponse) GoString() string {
	return s.String()
}

func (s *UpdateTranscodeTemplateGroupResponse) SetRequestId(v string) *UpdateTranscodeTemplateGroupResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateTranscodeTemplateGroupResponse) SetTranscodeTemplateGroupId(v string) *UpdateTranscodeTemplateGroupResponse {
	s.TranscodeTemplateGroupId = &v
	return s
}

type AddTranscodeTemplateGroupRequest struct {
	Name                     *string `json:"Name,omitempty" xml:"Name,omitempty"`
	TranscodeTemplateList    *string `json:"TranscodeTemplateList,omitempty" xml:"TranscodeTemplateList,omitempty"`
	TranscodeTemplateGroupId *string `json:"TranscodeTemplateGroupId,omitempty" xml:"TranscodeTemplateGroupId,omitempty"`
	AppId                    *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
}

func (s AddTranscodeTemplateGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s AddTranscodeTemplateGroupRequest) GoString() string {
	return s.String()
}

func (s *AddTranscodeTemplateGroupRequest) SetName(v string) *AddTranscodeTemplateGroupRequest {
	s.Name = &v
	return s
}

func (s *AddTranscodeTemplateGroupRequest) SetTranscodeTemplateList(v string) *AddTranscodeTemplateGroupRequest {
	s.TranscodeTemplateList = &v
	return s
}

func (s *AddTranscodeTemplateGroupRequest) SetTranscodeTemplateGroupId(v string) *AddTranscodeTemplateGroupRequest {
	s.TranscodeTemplateGroupId = &v
	return s
}

func (s *AddTranscodeTemplateGroupRequest) SetAppId(v string) *AddTranscodeTemplateGroupRequest {
	s.AppId = &v
	return s
}

type AddTranscodeTemplateGroupResponse struct {
	RequestId                *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TranscodeTemplateGroupId *string `json:"TranscodeTemplateGroupId,omitempty" xml:"TranscodeTemplateGroupId,omitempty" require:"true"`
}

func (s AddTranscodeTemplateGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s AddTranscodeTemplateGroupResponse) GoString() string {
	return s.String()
}

func (s *AddTranscodeTemplateGroupResponse) SetRequestId(v string) *AddTranscodeTemplateGroupResponse {
	s.RequestId = &v
	return s
}

func (s *AddTranscodeTemplateGroupResponse) SetTranscodeTemplateGroupId(v string) *AddTranscodeTemplateGroupResponse {
	s.TranscodeTemplateGroupId = &v
	return s
}

type DeleteTranscodeTemplateGroupRequest struct {
	TranscodeTemplateGroupId *string `json:"TranscodeTemplateGroupId,omitempty" xml:"TranscodeTemplateGroupId,omitempty" require:"true"`
	TranscodeTemplateIds     *string `json:"TranscodeTemplateIds,omitempty" xml:"TranscodeTemplateIds,omitempty"`
	ForceDelGroup            *string `json:"ForceDelGroup,omitempty" xml:"ForceDelGroup,omitempty"`
}

func (s DeleteTranscodeTemplateGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteTranscodeTemplateGroupRequest) GoString() string {
	return s.String()
}

func (s *DeleteTranscodeTemplateGroupRequest) SetTranscodeTemplateGroupId(v string) *DeleteTranscodeTemplateGroupRequest {
	s.TranscodeTemplateGroupId = &v
	return s
}

func (s *DeleteTranscodeTemplateGroupRequest) SetTranscodeTemplateIds(v string) *DeleteTranscodeTemplateGroupRequest {
	s.TranscodeTemplateIds = &v
	return s
}

func (s *DeleteTranscodeTemplateGroupRequest) SetForceDelGroup(v string) *DeleteTranscodeTemplateGroupRequest {
	s.ForceDelGroup = &v
	return s
}

type DeleteTranscodeTemplateGroupResponse struct {
	RequestId                    *string   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NonExistTranscodeTemplateIds []*string `json:"NonExistTranscodeTemplateIds,omitempty" xml:"NonExistTranscodeTemplateIds,omitempty" require:"true" type:"Repeated"`
}

func (s DeleteTranscodeTemplateGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteTranscodeTemplateGroupResponse) GoString() string {
	return s.String()
}

func (s *DeleteTranscodeTemplateGroupResponse) SetRequestId(v string) *DeleteTranscodeTemplateGroupResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteTranscodeTemplateGroupResponse) SetNonExistTranscodeTemplateIds(v []*string) *DeleteTranscodeTemplateGroupResponse {
	s.NonExistTranscodeTemplateIds = v
	return s
}

type GetTranscodeTemplateGroupRequest struct {
	TranscodeTemplateGroupId *string `json:"TranscodeTemplateGroupId,omitempty" xml:"TranscodeTemplateGroupId,omitempty" require:"true"`
}

func (s GetTranscodeTemplateGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s GetTranscodeTemplateGroupRequest) GoString() string {
	return s.String()
}

func (s *GetTranscodeTemplateGroupRequest) SetTranscodeTemplateGroupId(v string) *GetTranscodeTemplateGroupRequest {
	s.TranscodeTemplateGroupId = &v
	return s
}

type GetTranscodeTemplateGroupResponse struct {
	RequestId              *string                                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TranscodeTemplateGroup *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup `json:"TranscodeTemplateGroup,omitempty" xml:"TranscodeTemplateGroup,omitempty" require:"true" type:"Struct"`
}

func (s GetTranscodeTemplateGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s GetTranscodeTemplateGroupResponse) GoString() string {
	return s.String()
}

func (s *GetTranscodeTemplateGroupResponse) SetRequestId(v string) *GetTranscodeTemplateGroupResponse {
	s.RequestId = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponse) SetTranscodeTemplateGroup(v *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup) *GetTranscodeTemplateGroupResponse {
	s.TranscodeTemplateGroup = v
	return s
}

type GetTranscodeTemplateGroupResponseTranscodeTemplateGroup struct {
	CreationTime             *string                                                                         `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModifyTime               *string                                                                         `json:"ModifyTime,omitempty" xml:"ModifyTime,omitempty" require:"true"`
	Name                     *string                                                                         `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	IsDefault                *string                                                                         `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
	Locked                   *string                                                                         `json:"Locked,omitempty" xml:"Locked,omitempty" require:"true"`
	TranscodeMode            *string                                                                         `json:"TranscodeMode,omitempty" xml:"TranscodeMode,omitempty" require:"true"`
	AppId                    *string                                                                         `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	TranscodeTemplateGroupId *string                                                                         `json:"TranscodeTemplateGroupId,omitempty" xml:"TranscodeTemplateGroupId,omitempty" require:"true"`
	TranscodeTemplateList    []*GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList `json:"TranscodeTemplateList,omitempty" xml:"TranscodeTemplateList,omitempty" require:"true" type:"Repeated"`
}

func (s GetTranscodeTemplateGroupResponseTranscodeTemplateGroup) String() string {
	return tea.Prettify(s)
}

func (s GetTranscodeTemplateGroupResponseTranscodeTemplateGroup) GoString() string {
	return s.String()
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup) SetCreationTime(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup {
	s.CreationTime = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup) SetModifyTime(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup {
	s.ModifyTime = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup) SetName(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup {
	s.Name = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup) SetIsDefault(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup {
	s.IsDefault = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup) SetLocked(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup {
	s.Locked = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup) SetTranscodeMode(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup {
	s.TranscodeMode = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup) SetAppId(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup {
	s.AppId = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup) SetTranscodeTemplateGroupId(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup {
	s.TranscodeTemplateGroupId = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup) SetTranscodeTemplateList(v []*GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroup {
	s.TranscodeTemplateList = v
	return s
}

type GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList struct {
	TranscodeTemplateId  *string   `json:"TranscodeTemplateId,omitempty" xml:"TranscodeTemplateId,omitempty" require:"true"`
	Video                *string   `json:"Video,omitempty" xml:"Video,omitempty" require:"true"`
	Audio                *string   `json:"Audio,omitempty" xml:"Audio,omitempty" require:"true"`
	Container            *string   `json:"Container,omitempty" xml:"Container,omitempty" require:"true"`
	MuxConfig            *string   `json:"MuxConfig,omitempty" xml:"MuxConfig,omitempty" require:"true"`
	TransConfig          *string   `json:"TransConfig,omitempty" xml:"TransConfig,omitempty" require:"true"`
	Definition           *string   `json:"Definition,omitempty" xml:"Definition,omitempty" require:"true"`
	EncryptSetting       *string   `json:"EncryptSetting,omitempty" xml:"EncryptSetting,omitempty" require:"true"`
	PackageSetting       *string   `json:"PackageSetting,omitempty" xml:"PackageSetting,omitempty" require:"true"`
	SubtitleList         *string   `json:"SubtitleList,omitempty" xml:"SubtitleList,omitempty" require:"true"`
	OpeningList          *string   `json:"OpeningList,omitempty" xml:"OpeningList,omitempty" require:"true"`
	TailSlateList        *string   `json:"TailSlateList,omitempty" xml:"TailSlateList,omitempty" require:"true"`
	TemplateName         *string   `json:"TemplateName,omitempty" xml:"TemplateName,omitempty" require:"true"`
	TranscodeFileRegular *string   `json:"TranscodeFileRegular,omitempty" xml:"TranscodeFileRegular,omitempty" require:"true"`
	Clip                 *string   `json:"Clip,omitempty" xml:"Clip,omitempty" require:"true"`
	Rotate               *string   `json:"Rotate,omitempty" xml:"Rotate,omitempty" require:"true"`
	Type                 *string   `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	UserData             *string   `json:"UserData,omitempty" xml:"UserData,omitempty" require:"true"`
	WatermarkIds         []*string `json:"WatermarkIds,omitempty" xml:"WatermarkIds,omitempty" require:"true" type:"Repeated"`
}

func (s GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) String() string {
	return tea.Prettify(s)
}

func (s GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) GoString() string {
	return s.String()
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetTranscodeTemplateId(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.TranscodeTemplateId = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetVideo(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.Video = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetAudio(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.Audio = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetContainer(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.Container = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetMuxConfig(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.MuxConfig = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetTransConfig(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.TransConfig = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetDefinition(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.Definition = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetEncryptSetting(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.EncryptSetting = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetPackageSetting(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.PackageSetting = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetSubtitleList(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.SubtitleList = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetOpeningList(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.OpeningList = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetTailSlateList(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.TailSlateList = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetTemplateName(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.TemplateName = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetTranscodeFileRegular(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.TranscodeFileRegular = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetClip(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.Clip = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetRotate(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.Rotate = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetType(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.Type = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetUserData(v string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.UserData = &v
	return s
}

func (s *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList) SetWatermarkIds(v []*string) *GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList {
	s.WatermarkIds = v
	return s
}

type SetDefaultTranscodeTemplateGroupRequest struct {
	TranscodeTemplateGroupId *string `json:"TranscodeTemplateGroupId,omitempty" xml:"TranscodeTemplateGroupId,omitempty" require:"true"`
}

func (s SetDefaultTranscodeTemplateGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s SetDefaultTranscodeTemplateGroupRequest) GoString() string {
	return s.String()
}

func (s *SetDefaultTranscodeTemplateGroupRequest) SetTranscodeTemplateGroupId(v string) *SetDefaultTranscodeTemplateGroupRequest {
	s.TranscodeTemplateGroupId = &v
	return s
}

type SetDefaultTranscodeTemplateGroupResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetDefaultTranscodeTemplateGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s SetDefaultTranscodeTemplateGroupResponse) GoString() string {
	return s.String()
}

func (s *SetDefaultTranscodeTemplateGroupResponse) SetRequestId(v string) *SetDefaultTranscodeTemplateGroupResponse {
	s.RequestId = &v
	return s
}

type ListTranscodeTemplateGroupRequest struct {
	PageSize *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNo   *int    `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
	AppId    *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
}

func (s ListTranscodeTemplateGroupRequest) String() string {
	return tea.Prettify(s)
}

func (s ListTranscodeTemplateGroupRequest) GoString() string {
	return s.String()
}

func (s *ListTranscodeTemplateGroupRequest) SetPageSize(v int) *ListTranscodeTemplateGroupRequest {
	s.PageSize = &v
	return s
}

func (s *ListTranscodeTemplateGroupRequest) SetPageNo(v int) *ListTranscodeTemplateGroupRequest {
	s.PageNo = &v
	return s
}

func (s *ListTranscodeTemplateGroupRequest) SetAppId(v string) *ListTranscodeTemplateGroupRequest {
	s.AppId = &v
	return s
}

type ListTranscodeTemplateGroupResponse struct {
	RequestId                  *string                                                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TranscodeTemplateGroupList []*ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList `json:"TranscodeTemplateGroupList,omitempty" xml:"TranscodeTemplateGroupList,omitempty" require:"true" type:"Repeated"`
}

func (s ListTranscodeTemplateGroupResponse) String() string {
	return tea.Prettify(s)
}

func (s ListTranscodeTemplateGroupResponse) GoString() string {
	return s.String()
}

func (s *ListTranscodeTemplateGroupResponse) SetRequestId(v string) *ListTranscodeTemplateGroupResponse {
	s.RequestId = &v
	return s
}

func (s *ListTranscodeTemplateGroupResponse) SetTranscodeTemplateGroupList(v []*ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList) *ListTranscodeTemplateGroupResponse {
	s.TranscodeTemplateGroupList = v
	return s
}

type ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList struct {
	CreationTime             *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModifyTime               *string `json:"ModifyTime,omitempty" xml:"ModifyTime,omitempty" require:"true"`
	Name                     *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	IsDefault                *string `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
	Locked                   *string `json:"Locked,omitempty" xml:"Locked,omitempty" require:"true"`
	TranscodeTemplateGroupId *string `json:"TranscodeTemplateGroupId,omitempty" xml:"TranscodeTemplateGroupId,omitempty" require:"true"`
	TranscodeMode            *string `json:"TranscodeMode,omitempty" xml:"TranscodeMode,omitempty" require:"true"`
	AppId                    *string `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
}

func (s ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList) String() string {
	return tea.Prettify(s)
}

func (s ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList) GoString() string {
	return s.String()
}

func (s *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList) SetCreationTime(v string) *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList {
	s.CreationTime = &v
	return s
}

func (s *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList) SetModifyTime(v string) *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList {
	s.ModifyTime = &v
	return s
}

func (s *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList) SetName(v string) *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList {
	s.Name = &v
	return s
}

func (s *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList) SetIsDefault(v string) *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList {
	s.IsDefault = &v
	return s
}

func (s *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList) SetLocked(v string) *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList {
	s.Locked = &v
	return s
}

func (s *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList) SetTranscodeTemplateGroupId(v string) *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList {
	s.TranscodeTemplateGroupId = &v
	return s
}

func (s *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList) SetTranscodeMode(v string) *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList {
	s.TranscodeMode = &v
	return s
}

func (s *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList) SetAppId(v string) *ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList {
	s.AppId = &v
	return s
}

type GetAIMediaAuditJobRequest struct {
	JobId *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
}

func (s GetAIMediaAuditJobRequest) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobRequest) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobRequest) SetJobId(v string) *GetAIMediaAuditJobRequest {
	s.JobId = &v
	return s
}

type GetAIMediaAuditJobResponse struct {
	RequestId     *string                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MediaAuditJob *GetAIMediaAuditJobResponseMediaAuditJob `json:"MediaAuditJob,omitempty" xml:"MediaAuditJob,omitempty" require:"true" type:"Struct"`
}

func (s GetAIMediaAuditJobResponse) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponse) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponse) SetRequestId(v string) *GetAIMediaAuditJobResponse {
	s.RequestId = &v
	return s
}

func (s *GetAIMediaAuditJobResponse) SetMediaAuditJob(v *GetAIMediaAuditJobResponseMediaAuditJob) *GetAIMediaAuditJobResponse {
	s.MediaAuditJob = v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJob struct {
	JobId        *string                                      `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
	MediaId      *string                                      `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	Type         *string                                      `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Status       *string                                      `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Code         *string                                      `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message      *string                                      `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	CreationTime *string                                      `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	CompleteTime *string                                      `json:"CompleteTime,omitempty" xml:"CompleteTime,omitempty" require:"true"`
	Data         *GetAIMediaAuditJobResponseMediaAuditJobData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJob) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJob) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJob) SetJobId(v string) *GetAIMediaAuditJobResponseMediaAuditJob {
	s.JobId = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJob) SetMediaId(v string) *GetAIMediaAuditJobResponseMediaAuditJob {
	s.MediaId = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJob) SetType(v string) *GetAIMediaAuditJobResponseMediaAuditJob {
	s.Type = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJob) SetStatus(v string) *GetAIMediaAuditJobResponseMediaAuditJob {
	s.Status = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJob) SetCode(v string) *GetAIMediaAuditJobResponseMediaAuditJob {
	s.Code = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJob) SetMessage(v string) *GetAIMediaAuditJobResponseMediaAuditJob {
	s.Message = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJob) SetCreationTime(v string) *GetAIMediaAuditJobResponseMediaAuditJob {
	s.CreationTime = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJob) SetCompleteTime(v string) *GetAIMediaAuditJobResponseMediaAuditJob {
	s.CompleteTime = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJob) SetData(v *GetAIMediaAuditJobResponseMediaAuditJobData) *GetAIMediaAuditJobResponseMediaAuditJob {
	s.Data = v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobData struct {
	Suggestion      *string                                                   `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	AbnormalModules *string                                                   `json:"AbnormalModules,omitempty" xml:"AbnormalModules,omitempty" require:"true"`
	Label           *string                                                   `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	ImageResult     []*GetAIMediaAuditJobResponseMediaAuditJobDataImageResult `json:"ImageResult,omitempty" xml:"ImageResult,omitempty" require:"true" type:"Repeated"`
	TextResult      []*GetAIMediaAuditJobResponseMediaAuditJobDataTextResult  `json:"TextResult,omitempty" xml:"TextResult,omitempty" require:"true" type:"Repeated"`
	VideoResult     *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult   `json:"VideoResult,omitempty" xml:"VideoResult,omitempty" require:"true" type:"Struct"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobData) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobData) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobData) SetSuggestion(v string) *GetAIMediaAuditJobResponseMediaAuditJobData {
	s.Suggestion = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobData) SetAbnormalModules(v string) *GetAIMediaAuditJobResponseMediaAuditJobData {
	s.AbnormalModules = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobData) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobData {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobData) SetImageResult(v []*GetAIMediaAuditJobResponseMediaAuditJobDataImageResult) *GetAIMediaAuditJobResponseMediaAuditJobData {
	s.ImageResult = v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobData) SetTextResult(v []*GetAIMediaAuditJobResponseMediaAuditJobDataTextResult) *GetAIMediaAuditJobResponseMediaAuditJobData {
	s.TextResult = v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobData) SetVideoResult(v *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult) *GetAIMediaAuditJobResponseMediaAuditJobData {
	s.VideoResult = v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataImageResult struct {
	Suggestion *string                                                         `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Label      *string                                                         `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Type       *string                                                         `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Url        *string                                                         `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
	Result     []*GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult `json:"Result,omitempty" xml:"Result,omitempty" require:"true" type:"Repeated"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataImageResult) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataImageResult) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataImageResult) SetSuggestion(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataImageResult {
	s.Suggestion = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataImageResult) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataImageResult {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataImageResult) SetType(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataImageResult {
	s.Type = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataImageResult) SetUrl(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataImageResult {
	s.Url = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataImageResult) SetResult(v []*GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult) *GetAIMediaAuditJobResponseMediaAuditJobDataImageResult {
	s.Result = v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult struct {
	Suggestion *string `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Label      *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score      *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Scene      *string `json:"Scene,omitempty" xml:"Scene,omitempty" require:"true"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult) SetSuggestion(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult {
	s.Suggestion = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult) SetScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult {
	s.Score = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult) SetScene(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult {
	s.Scene = &v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataTextResult struct {
	Suggestion *string `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Label      *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score      *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Scene      *string `json:"Scene,omitempty" xml:"Scene,omitempty" require:"true"`
	Type       *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Content    *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataTextResult) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataTextResult) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataTextResult) SetSuggestion(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataTextResult {
	s.Suggestion = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataTextResult) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataTextResult {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataTextResult) SetScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataTextResult {
	s.Score = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataTextResult) SetScene(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataTextResult {
	s.Scene = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataTextResult) SetType(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataTextResult {
	s.Type = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataTextResult) SetContent(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataTextResult {
	s.Content = &v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult struct {
	Suggestion      *string                                                                `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Label           *string                                                                `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	TerrorismResult *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult `json:"TerrorismResult,omitempty" xml:"TerrorismResult,omitempty" require:"true" type:"Struct"`
	PornResult      *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult      `json:"PornResult,omitempty" xml:"PornResult,omitempty" require:"true" type:"Struct"`
	AdResult        *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult        `json:"AdResult,omitempty" xml:"AdResult,omitempty" require:"true" type:"Struct"`
	LiveResult      *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult      `json:"LiveResult,omitempty" xml:"LiveResult,omitempty" require:"true" type:"Struct"`
	LogoResult      *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult      `json:"LogoResult,omitempty" xml:"LogoResult,omitempty" require:"true" type:"Struct"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult) SetSuggestion(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult {
	s.Suggestion = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult) SetTerrorismResult(v *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult {
	s.TerrorismResult = v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult) SetPornResult(v *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult {
	s.PornResult = v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult) SetAdResult(v *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult {
	s.AdResult = v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult) SetLiveResult(v *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult {
	s.LiveResult = v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult) SetLogoResult(v *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult {
	s.LogoResult = v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult struct {
	Suggestion   *string                                                                             `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Label        *string                                                                             `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	MaxScore     *string                                                                             `json:"MaxScore,omitempty" xml:"MaxScore,omitempty" require:"true"`
	AverageScore *string                                                                             `json:"AverageScore,omitempty" xml:"AverageScore,omitempty" require:"true"`
	CounterList  []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList `json:"CounterList,omitempty" xml:"CounterList,omitempty" require:"true" type:"Repeated"`
	TopList      []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList     `json:"TopList,omitempty" xml:"TopList,omitempty" require:"true" type:"Repeated"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult) SetSuggestion(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult {
	s.Suggestion = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult) SetMaxScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult {
	s.MaxScore = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult) SetAverageScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult {
	s.AverageScore = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult) SetCounterList(v []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult {
	s.CounterList = v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult) SetTopList(v []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult {
	s.TopList = v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList struct {
	Label *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Count *int    `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList) SetCount(v int) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList {
	s.Count = &v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Url       *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList) SetScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList {
	s.Score = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList) SetTimestamp(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList {
	s.Timestamp = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList) SetUrl(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList {
	s.Url = &v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult struct {
	Suggestion   *string                                                                        `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Label        *string                                                                        `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	MaxScore     *string                                                                        `json:"MaxScore,omitempty" xml:"MaxScore,omitempty" require:"true"`
	AverageScore *string                                                                        `json:"AverageScore,omitempty" xml:"AverageScore,omitempty" require:"true"`
	CounterList  []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList `json:"CounterList,omitempty" xml:"CounterList,omitempty" require:"true" type:"Repeated"`
	TopList      []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList     `json:"TopList,omitempty" xml:"TopList,omitempty" require:"true" type:"Repeated"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult) SetSuggestion(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult {
	s.Suggestion = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult) SetMaxScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult {
	s.MaxScore = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult) SetAverageScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult {
	s.AverageScore = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult) SetCounterList(v []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult {
	s.CounterList = v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult) SetTopList(v []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult {
	s.TopList = v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList struct {
	Label *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Count *int    `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList) SetCount(v int) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList {
	s.Count = &v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Url       *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList) SetScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList {
	s.Score = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList) SetTimestamp(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList {
	s.Timestamp = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList) SetUrl(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList {
	s.Url = &v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult struct {
	Suggestion   *string                                                                      `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Label        *string                                                                      `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	MaxScore     *string                                                                      `json:"MaxScore,omitempty" xml:"MaxScore,omitempty" require:"true"`
	AverageScore *string                                                                      `json:"AverageScore,omitempty" xml:"AverageScore,omitempty" require:"true"`
	CounterList  []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList `json:"CounterList,omitempty" xml:"CounterList,omitempty" require:"true" type:"Repeated"`
	TopList      []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList     `json:"TopList,omitempty" xml:"TopList,omitempty" require:"true" type:"Repeated"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult) SetSuggestion(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult {
	s.Suggestion = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult) SetMaxScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult {
	s.MaxScore = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult) SetAverageScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult {
	s.AverageScore = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult) SetCounterList(v []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult {
	s.CounterList = v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult) SetTopList(v []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult {
	s.TopList = v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList struct {
	Label *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Count *int    `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList) SetCount(v int) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList {
	s.Count = &v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Url       *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList) SetScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList {
	s.Score = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList) SetTimestamp(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList {
	s.Timestamp = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList) SetUrl(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList {
	s.Url = &v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult struct {
	Suggestion   *string                                                                        `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Label        *string                                                                        `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	MaxScore     *string                                                                        `json:"MaxScore,omitempty" xml:"MaxScore,omitempty" require:"true"`
	AverageScore *string                                                                        `json:"AverageScore,omitempty" xml:"AverageScore,omitempty" require:"true"`
	CounterList  []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList `json:"CounterList,omitempty" xml:"CounterList,omitempty" require:"true" type:"Repeated"`
	TopList      []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList     `json:"TopList,omitempty" xml:"TopList,omitempty" require:"true" type:"Repeated"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult) SetSuggestion(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult {
	s.Suggestion = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult) SetMaxScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult {
	s.MaxScore = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult) SetAverageScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult {
	s.AverageScore = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult) SetCounterList(v []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult {
	s.CounterList = v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult) SetTopList(v []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult {
	s.TopList = v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList struct {
	Label *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Count *int    `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList) SetCount(v int) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList {
	s.Count = &v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Url       *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList) SetScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList {
	s.Score = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList) SetTimestamp(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList {
	s.Timestamp = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList) SetUrl(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList {
	s.Url = &v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult struct {
	Suggestion   *string                                                                        `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Label        *string                                                                        `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	MaxScore     *string                                                                        `json:"MaxScore,omitempty" xml:"MaxScore,omitempty" require:"true"`
	AverageScore *string                                                                        `json:"AverageScore,omitempty" xml:"AverageScore,omitempty" require:"true"`
	CounterList  []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList `json:"CounterList,omitempty" xml:"CounterList,omitempty" require:"true" type:"Repeated"`
	TopList      []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList     `json:"TopList,omitempty" xml:"TopList,omitempty" require:"true" type:"Repeated"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult) SetSuggestion(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult {
	s.Suggestion = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult) SetMaxScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult {
	s.MaxScore = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult) SetAverageScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult {
	s.AverageScore = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult) SetCounterList(v []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult {
	s.CounterList = v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult) SetTopList(v []*GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult {
	s.TopList = v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList struct {
	Label *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Count *int    `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList) SetCount(v int) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList {
	s.Count = &v
	return s
}

type GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Url       *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList) String() string {
	return tea.Prettify(s)
}

func (s GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList) GoString() string {
	return s.String()
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList) SetLabel(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList {
	s.Label = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList) SetScore(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList {
	s.Score = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList) SetTimestamp(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList {
	s.Timestamp = &v
	return s
}

func (s *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList) SetUrl(v string) *GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList {
	s.Url = &v
	return s
}

type SubmitAIMediaAuditJobRequest struct {
	MediaId    *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	TemplateId *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty"`
	UserData   *string `json:"UserData,omitempty" xml:"UserData,omitempty"`
	MediaType  *string `json:"MediaType,omitempty" xml:"MediaType,omitempty"`
}

func (s SubmitAIMediaAuditJobRequest) String() string {
	return tea.Prettify(s)
}

func (s SubmitAIMediaAuditJobRequest) GoString() string {
	return s.String()
}

func (s *SubmitAIMediaAuditJobRequest) SetMediaId(v string) *SubmitAIMediaAuditJobRequest {
	s.MediaId = &v
	return s
}

func (s *SubmitAIMediaAuditJobRequest) SetTemplateId(v string) *SubmitAIMediaAuditJobRequest {
	s.TemplateId = &v
	return s
}

func (s *SubmitAIMediaAuditJobRequest) SetUserData(v string) *SubmitAIMediaAuditJobRequest {
	s.UserData = &v
	return s
}

func (s *SubmitAIMediaAuditJobRequest) SetMediaType(v string) *SubmitAIMediaAuditJobRequest {
	s.MediaType = &v
	return s
}

type SubmitAIMediaAuditJobResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MediaId   *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	JobId     *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
}

func (s SubmitAIMediaAuditJobResponse) String() string {
	return tea.Prettify(s)
}

func (s SubmitAIMediaAuditJobResponse) GoString() string {
	return s.String()
}

func (s *SubmitAIMediaAuditJobResponse) SetRequestId(v string) *SubmitAIMediaAuditJobResponse {
	s.RequestId = &v
	return s
}

func (s *SubmitAIMediaAuditJobResponse) SetMediaId(v string) *SubmitAIMediaAuditJobResponse {
	s.MediaId = &v
	return s
}

func (s *SubmitAIMediaAuditJobResponse) SetJobId(v string) *SubmitAIMediaAuditJobResponse {
	s.JobId = &v
	return s
}

type GetMediaAuditResultRequest struct {
	MediaId             *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	ResourceRealOwnerId *int64  `json:"ResourceRealOwnerId,omitempty" xml:"ResourceRealOwnerId,omitempty"`
}

func (s GetMediaAuditResultRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultRequest) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultRequest) SetMediaId(v string) *GetMediaAuditResultRequest {
	s.MediaId = &v
	return s
}

func (s *GetMediaAuditResultRequest) SetResourceRealOwnerId(v int64) *GetMediaAuditResultRequest {
	s.ResourceRealOwnerId = &v
	return s
}

type GetMediaAuditResultResponse struct {
	RequestId        *string                                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MediaAuditResult *GetMediaAuditResultResponseMediaAuditResult `json:"MediaAuditResult,omitempty" xml:"MediaAuditResult,omitempty" require:"true" type:"Struct"`
}

func (s GetMediaAuditResultResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponse) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponse) SetRequestId(v string) *GetMediaAuditResultResponse {
	s.RequestId = &v
	return s
}

func (s *GetMediaAuditResultResponse) SetMediaAuditResult(v *GetMediaAuditResultResponseMediaAuditResult) *GetMediaAuditResultResponse {
	s.MediaAuditResult = v
	return s
}

type GetMediaAuditResultResponseMediaAuditResult struct {
	AbnormalModules *string                                                   `json:"AbnormalModules,omitempty" xml:"AbnormalModules,omitempty" require:"true"`
	Label           *string                                                   `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Suggestion      *string                                                   `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	AudioResult     []*GetMediaAuditResultResponseMediaAuditResultAudioResult `json:"AudioResult,omitempty" xml:"AudioResult,omitempty" require:"true" type:"Repeated"`
	ImageResult     []*GetMediaAuditResultResponseMediaAuditResultImageResult `json:"ImageResult,omitempty" xml:"ImageResult,omitempty" require:"true" type:"Repeated"`
	TextResult      []*GetMediaAuditResultResponseMediaAuditResultTextResult  `json:"TextResult,omitempty" xml:"TextResult,omitempty" require:"true" type:"Repeated"`
	VideoResult     *GetMediaAuditResultResponseMediaAuditResultVideoResult   `json:"VideoResult,omitempty" xml:"VideoResult,omitempty" require:"true" type:"Struct"`
}

func (s GetMediaAuditResultResponseMediaAuditResult) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResult) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResult) SetAbnormalModules(v string) *GetMediaAuditResultResponseMediaAuditResult {
	s.AbnormalModules = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResult) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResult {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResult) SetSuggestion(v string) *GetMediaAuditResultResponseMediaAuditResult {
	s.Suggestion = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResult) SetAudioResult(v []*GetMediaAuditResultResponseMediaAuditResultAudioResult) *GetMediaAuditResultResponseMediaAuditResult {
	s.AudioResult = v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResult) SetImageResult(v []*GetMediaAuditResultResponseMediaAuditResultImageResult) *GetMediaAuditResultResponseMediaAuditResult {
	s.ImageResult = v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResult) SetTextResult(v []*GetMediaAuditResultResponseMediaAuditResultTextResult) *GetMediaAuditResultResponseMediaAuditResult {
	s.TextResult = v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResult) SetVideoResult(v *GetMediaAuditResultResponseMediaAuditResultVideoResult) *GetMediaAuditResultResponseMediaAuditResult {
	s.VideoResult = v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultAudioResult struct {
	Label      *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Scene      *string `json:"Scene,omitempty" xml:"Scene,omitempty" require:"true"`
	Score      *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Suggestion *string `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
}

func (s GetMediaAuditResultResponseMediaAuditResultAudioResult) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultAudioResult) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultAudioResult) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultAudioResult {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultAudioResult) SetScene(v string) *GetMediaAuditResultResponseMediaAuditResultAudioResult {
	s.Scene = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultAudioResult) SetScore(v string) *GetMediaAuditResultResponseMediaAuditResultAudioResult {
	s.Score = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultAudioResult) SetSuggestion(v string) *GetMediaAuditResultResponseMediaAuditResultAudioResult {
	s.Suggestion = &v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultImageResult struct {
	Label      *string                                                         `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Suggestion *string                                                         `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Type       *string                                                         `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Url        *string                                                         `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
	Result     []*GetMediaAuditResultResponseMediaAuditResultImageResultResult `json:"Result,omitempty" xml:"Result,omitempty" require:"true" type:"Repeated"`
}

func (s GetMediaAuditResultResponseMediaAuditResultImageResult) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultImageResult) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultImageResult) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultImageResult {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultImageResult) SetSuggestion(v string) *GetMediaAuditResultResponseMediaAuditResultImageResult {
	s.Suggestion = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultImageResult) SetType(v string) *GetMediaAuditResultResponseMediaAuditResultImageResult {
	s.Type = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultImageResult) SetUrl(v string) *GetMediaAuditResultResponseMediaAuditResultImageResult {
	s.Url = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultImageResult) SetResult(v []*GetMediaAuditResultResponseMediaAuditResultImageResultResult) *GetMediaAuditResultResponseMediaAuditResultImageResult {
	s.Result = v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultImageResultResult struct {
	Label      *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Scene      *string `json:"Scene,omitempty" xml:"Scene,omitempty" require:"true"`
	Score      *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Suggestion *string `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
}

func (s GetMediaAuditResultResponseMediaAuditResultImageResultResult) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultImageResultResult) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultImageResultResult) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultImageResultResult {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultImageResultResult) SetScene(v string) *GetMediaAuditResultResponseMediaAuditResultImageResultResult {
	s.Scene = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultImageResultResult) SetScore(v string) *GetMediaAuditResultResponseMediaAuditResultImageResultResult {
	s.Score = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultImageResultResult) SetSuggestion(v string) *GetMediaAuditResultResponseMediaAuditResultImageResultResult {
	s.Suggestion = &v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultTextResult struct {
	Content    *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
	Label      *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Scene      *string `json:"Scene,omitempty" xml:"Scene,omitempty" require:"true"`
	Score      *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Suggestion *string `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Type       *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
}

func (s GetMediaAuditResultResponseMediaAuditResultTextResult) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultTextResult) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultTextResult) SetContent(v string) *GetMediaAuditResultResponseMediaAuditResultTextResult {
	s.Content = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultTextResult) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultTextResult {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultTextResult) SetScene(v string) *GetMediaAuditResultResponseMediaAuditResultTextResult {
	s.Scene = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultTextResult) SetScore(v string) *GetMediaAuditResultResponseMediaAuditResultTextResult {
	s.Score = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultTextResult) SetSuggestion(v string) *GetMediaAuditResultResponseMediaAuditResultTextResult {
	s.Suggestion = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultTextResult) SetType(v string) *GetMediaAuditResultResponseMediaAuditResultTextResult {
	s.Type = &v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResult struct {
	Label           *string                                                                `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Suggestion      *string                                                                `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	PornResult      *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult      `json:"PornResult,omitempty" xml:"PornResult,omitempty" require:"true" type:"Struct"`
	AdResult        *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult        `json:"AdResult,omitempty" xml:"AdResult,omitempty" require:"true" type:"Struct"`
	LogoResult      *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult      `json:"LogoResult,omitempty" xml:"LogoResult,omitempty" require:"true" type:"Struct"`
	LiveResult      *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult      `json:"LiveResult,omitempty" xml:"LiveResult,omitempty" require:"true" type:"Struct"`
	TerrorismResult *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult `json:"TerrorismResult,omitempty" xml:"TerrorismResult,omitempty" require:"true" type:"Struct"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResult) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResult) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResult) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResult {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResult) SetSuggestion(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResult {
	s.Suggestion = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResult) SetPornResult(v *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult) *GetMediaAuditResultResponseMediaAuditResultVideoResult {
	s.PornResult = v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResult) SetAdResult(v *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult) *GetMediaAuditResultResponseMediaAuditResultVideoResult {
	s.AdResult = v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResult) SetLogoResult(v *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult) *GetMediaAuditResultResponseMediaAuditResultVideoResult {
	s.LogoResult = v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResult) SetLiveResult(v *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult) *GetMediaAuditResultResponseMediaAuditResultVideoResult {
	s.LiveResult = v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResult) SetTerrorismResult(v *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult) *GetMediaAuditResultResponseMediaAuditResultVideoResult {
	s.TerrorismResult = v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult struct {
	AverageScore *string                                                                        `json:"AverageScore,omitempty" xml:"AverageScore,omitempty" require:"true"`
	Label        *string                                                                        `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	MaxScore     *string                                                                        `json:"MaxScore,omitempty" xml:"MaxScore,omitempty" require:"true"`
	Suggestion   *string                                                                        `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	CounterList  []*GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList `json:"CounterList,omitempty" xml:"CounterList,omitempty" require:"true" type:"Repeated"`
	TopList      []*GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList     `json:"TopList,omitempty" xml:"TopList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult) SetAverageScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult {
	s.AverageScore = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult) SetMaxScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult {
	s.MaxScore = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult) SetSuggestion(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult {
	s.Suggestion = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult) SetCounterList(v []*GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList) *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult {
	s.CounterList = v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult) SetTopList(v []*GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList) *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult {
	s.TopList = v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList struct {
	Count *int    `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
	Label *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList) SetCount(v int) *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList {
	s.Count = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList {
	s.Label = &v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Url       *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList) SetScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList {
	s.Score = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList) SetTimestamp(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList {
	s.Timestamp = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList) SetUrl(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList {
	s.Url = &v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult struct {
	AverageScore *string                                                                      `json:"AverageScore,omitempty" xml:"AverageScore,omitempty" require:"true"`
	Label        *string                                                                      `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	MaxScore     *string                                                                      `json:"MaxScore,omitempty" xml:"MaxScore,omitempty" require:"true"`
	Suggestion   *string                                                                      `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	CounterList  []*GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList `json:"CounterList,omitempty" xml:"CounterList,omitempty" require:"true" type:"Repeated"`
	TopList      []*GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList     `json:"TopList,omitempty" xml:"TopList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult) SetAverageScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult {
	s.AverageScore = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult) SetMaxScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult {
	s.MaxScore = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult) SetSuggestion(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult {
	s.Suggestion = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult) SetCounterList(v []*GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList) *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult {
	s.CounterList = v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult) SetTopList(v []*GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList) *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult {
	s.TopList = v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList struct {
	Count *int    `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
	Label *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList) SetCount(v int) *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList {
	s.Count = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList {
	s.Label = &v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Url       *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList) SetScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList {
	s.Score = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList) SetTimestamp(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList {
	s.Timestamp = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList) SetUrl(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList {
	s.Url = &v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult struct {
	AverageScore *string                                                                        `json:"AverageScore,omitempty" xml:"AverageScore,omitempty" require:"true"`
	Label        *string                                                                        `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	MaxScore     *string                                                                        `json:"MaxScore,omitempty" xml:"MaxScore,omitempty" require:"true"`
	Suggestion   *string                                                                        `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	CounterList  []*GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList `json:"CounterList,omitempty" xml:"CounterList,omitempty" require:"true" type:"Repeated"`
	TopList      []*GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList     `json:"TopList,omitempty" xml:"TopList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult) SetAverageScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult {
	s.AverageScore = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult) SetMaxScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult {
	s.MaxScore = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult) SetSuggestion(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult {
	s.Suggestion = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult) SetCounterList(v []*GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList) *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult {
	s.CounterList = v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult) SetTopList(v []*GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList) *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult {
	s.TopList = v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList struct {
	Count *int    `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
	Label *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList) SetCount(v int) *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList {
	s.Count = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList {
	s.Label = &v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Url       *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList) SetScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList {
	s.Score = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList) SetTimestamp(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList {
	s.Timestamp = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList) SetUrl(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList {
	s.Url = &v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult struct {
	AverageScore *string                                                                        `json:"AverageScore,omitempty" xml:"AverageScore,omitempty" require:"true"`
	Label        *string                                                                        `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	MaxScore     *string                                                                        `json:"MaxScore,omitempty" xml:"MaxScore,omitempty" require:"true"`
	Suggestion   *string                                                                        `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	CounterList  []*GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList `json:"CounterList,omitempty" xml:"CounterList,omitempty" require:"true" type:"Repeated"`
	TopList      []*GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList     `json:"TopList,omitempty" xml:"TopList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult) SetAverageScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult {
	s.AverageScore = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult) SetMaxScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult {
	s.MaxScore = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult) SetSuggestion(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult {
	s.Suggestion = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult) SetCounterList(v []*GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList) *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult {
	s.CounterList = v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult) SetTopList(v []*GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList) *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult {
	s.TopList = v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList struct {
	Count *int    `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
	Label *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList) SetCount(v int) *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList {
	s.Count = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList {
	s.Label = &v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Url       *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList) SetScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList {
	s.Score = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList) SetTimestamp(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList {
	s.Timestamp = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList) SetUrl(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList {
	s.Url = &v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult struct {
	AverageScore *string                                                                             `json:"AverageScore,omitempty" xml:"AverageScore,omitempty" require:"true"`
	Label        *string                                                                             `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	MaxScore     *string                                                                             `json:"MaxScore,omitempty" xml:"MaxScore,omitempty" require:"true"`
	Suggestion   *string                                                                             `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	CounterList  []*GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList `json:"CounterList,omitempty" xml:"CounterList,omitempty" require:"true" type:"Repeated"`
	TopList      []*GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList     `json:"TopList,omitempty" xml:"TopList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult) SetAverageScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult {
	s.AverageScore = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult) SetMaxScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult {
	s.MaxScore = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult) SetSuggestion(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult {
	s.Suggestion = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult) SetCounterList(v []*GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList) *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult {
	s.CounterList = v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult) SetTopList(v []*GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList) *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult {
	s.TopList = v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList struct {
	Count *int    `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
	Label *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList) SetCount(v int) *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList {
	s.Count = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList {
	s.Label = &v
	return s
}

type GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Url       *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList) SetLabel(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList) SetScore(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList {
	s.Score = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList) SetTimestamp(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList {
	s.Timestamp = &v
	return s
}

func (s *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList) SetUrl(v string) *GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList {
	s.Url = &v
	return s
}

type GetMediaAuditResultDetailRequest struct {
	MediaId *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	PageNo  *int    `json:"PageNo,omitempty" xml:"PageNo,omitempty" require:"true"`
}

func (s GetMediaAuditResultDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultDetailRequest) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultDetailRequest) SetMediaId(v string) *GetMediaAuditResultDetailRequest {
	s.MediaId = &v
	return s
}

func (s *GetMediaAuditResultDetailRequest) SetPageNo(v int) *GetMediaAuditResultDetailRequest {
	s.PageNo = &v
	return s
}

type GetMediaAuditResultDetailResponse struct {
	RequestId              *string                                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MediaAuditResultDetail *GetMediaAuditResultDetailResponseMediaAuditResultDetail `json:"MediaAuditResultDetail,omitempty" xml:"MediaAuditResultDetail,omitempty" require:"true" type:"Struct"`
}

func (s GetMediaAuditResultDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultDetailResponse) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultDetailResponse) SetRequestId(v string) *GetMediaAuditResultDetailResponse {
	s.RequestId = &v
	return s
}

func (s *GetMediaAuditResultDetailResponse) SetMediaAuditResultDetail(v *GetMediaAuditResultDetailResponseMediaAuditResultDetail) *GetMediaAuditResultDetailResponse {
	s.MediaAuditResultDetail = v
	return s
}

type GetMediaAuditResultDetailResponseMediaAuditResultDetail struct {
	Total *int                                                           `json:"Total,omitempty" xml:"Total,omitempty" require:"true"`
	List  []*GetMediaAuditResultDetailResponseMediaAuditResultDetailList `json:"List,omitempty" xml:"List,omitempty" require:"true" type:"Repeated"`
}

func (s GetMediaAuditResultDetailResponseMediaAuditResultDetail) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultDetailResponseMediaAuditResultDetail) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultDetailResponseMediaAuditResultDetail) SetTotal(v int) *GetMediaAuditResultDetailResponseMediaAuditResultDetail {
	s.Total = &v
	return s
}

func (s *GetMediaAuditResultDetailResponseMediaAuditResultDetail) SetList(v []*GetMediaAuditResultDetailResponseMediaAuditResultDetailList) *GetMediaAuditResultDetailResponseMediaAuditResultDetail {
	s.List = v
	return s
}

type GetMediaAuditResultDetailResponseMediaAuditResultDetailList struct {
	PornLabel      *string `json:"PornLabel,omitempty" xml:"PornLabel,omitempty" require:"true"`
	PornScore      *string `json:"PornScore,omitempty" xml:"PornScore,omitempty" require:"true"`
	TerrorismLabel *string `json:"TerrorismLabel,omitempty" xml:"TerrorismLabel,omitempty" require:"true"`
	TerrorismScore *string `json:"TerrorismScore,omitempty" xml:"TerrorismScore,omitempty" require:"true"`
	Timestamp      *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Url            *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
	AdLabel        *string `json:"AdLabel,omitempty" xml:"AdLabel,omitempty" require:"true"`
	AdScore        *string `json:"AdScore,omitempty" xml:"AdScore,omitempty" require:"true"`
	LiveLabel      *string `json:"LiveLabel,omitempty" xml:"LiveLabel,omitempty" require:"true"`
	LiveScore      *string `json:"LiveScore,omitempty" xml:"LiveScore,omitempty" require:"true"`
	LogoLabel      *string `json:"LogoLabel,omitempty" xml:"LogoLabel,omitempty" require:"true"`
	LogoScore      *string `json:"LogoScore,omitempty" xml:"LogoScore,omitempty" require:"true"`
}

func (s GetMediaAuditResultDetailResponseMediaAuditResultDetailList) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultDetailResponseMediaAuditResultDetailList) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultDetailResponseMediaAuditResultDetailList) SetPornLabel(v string) *GetMediaAuditResultDetailResponseMediaAuditResultDetailList {
	s.PornLabel = &v
	return s
}

func (s *GetMediaAuditResultDetailResponseMediaAuditResultDetailList) SetPornScore(v string) *GetMediaAuditResultDetailResponseMediaAuditResultDetailList {
	s.PornScore = &v
	return s
}

func (s *GetMediaAuditResultDetailResponseMediaAuditResultDetailList) SetTerrorismLabel(v string) *GetMediaAuditResultDetailResponseMediaAuditResultDetailList {
	s.TerrorismLabel = &v
	return s
}

func (s *GetMediaAuditResultDetailResponseMediaAuditResultDetailList) SetTerrorismScore(v string) *GetMediaAuditResultDetailResponseMediaAuditResultDetailList {
	s.TerrorismScore = &v
	return s
}

func (s *GetMediaAuditResultDetailResponseMediaAuditResultDetailList) SetTimestamp(v string) *GetMediaAuditResultDetailResponseMediaAuditResultDetailList {
	s.Timestamp = &v
	return s
}

func (s *GetMediaAuditResultDetailResponseMediaAuditResultDetailList) SetUrl(v string) *GetMediaAuditResultDetailResponseMediaAuditResultDetailList {
	s.Url = &v
	return s
}

func (s *GetMediaAuditResultDetailResponseMediaAuditResultDetailList) SetAdLabel(v string) *GetMediaAuditResultDetailResponseMediaAuditResultDetailList {
	s.AdLabel = &v
	return s
}

func (s *GetMediaAuditResultDetailResponseMediaAuditResultDetailList) SetAdScore(v string) *GetMediaAuditResultDetailResponseMediaAuditResultDetailList {
	s.AdScore = &v
	return s
}

func (s *GetMediaAuditResultDetailResponseMediaAuditResultDetailList) SetLiveLabel(v string) *GetMediaAuditResultDetailResponseMediaAuditResultDetailList {
	s.LiveLabel = &v
	return s
}

func (s *GetMediaAuditResultDetailResponseMediaAuditResultDetailList) SetLiveScore(v string) *GetMediaAuditResultDetailResponseMediaAuditResultDetailList {
	s.LiveScore = &v
	return s
}

func (s *GetMediaAuditResultDetailResponseMediaAuditResultDetailList) SetLogoLabel(v string) *GetMediaAuditResultDetailResponseMediaAuditResultDetailList {
	s.LogoLabel = &v
	return s
}

func (s *GetMediaAuditResultDetailResponseMediaAuditResultDetailList) SetLogoScore(v string) *GetMediaAuditResultDetailResponseMediaAuditResultDetailList {
	s.LogoScore = &v
	return s
}

type GetMediaAuditResultTimelineRequest struct {
	MediaId *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
}

func (s GetMediaAuditResultTimelineRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultTimelineRequest) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultTimelineRequest) SetMediaId(v string) *GetMediaAuditResultTimelineRequest {
	s.MediaId = &v
	return s
}

type GetMediaAuditResultTimelineResponse struct {
	RequestId                *string                                                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MediaAuditResultTimeline *GetMediaAuditResultTimelineResponseMediaAuditResultTimeline `json:"MediaAuditResultTimeline,omitempty" xml:"MediaAuditResultTimeline,omitempty" require:"true" type:"Struct"`
}

func (s GetMediaAuditResultTimelineResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultTimelineResponse) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultTimelineResponse) SetRequestId(v string) *GetMediaAuditResultTimelineResponse {
	s.RequestId = &v
	return s
}

func (s *GetMediaAuditResultTimelineResponse) SetMediaAuditResultTimeline(v *GetMediaAuditResultTimelineResponseMediaAuditResultTimeline) *GetMediaAuditResultTimelineResponse {
	s.MediaAuditResultTimeline = v
	return s
}

type GetMediaAuditResultTimelineResponseMediaAuditResultTimeline struct {
	Porn      []*GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn      `json:"Porn,omitempty" xml:"Porn,omitempty" require:"true" type:"Repeated"`
	Terrorism []*GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism `json:"Terrorism,omitempty" xml:"Terrorism,omitempty" require:"true" type:"Repeated"`
	Logo      []*GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo      `json:"Logo,omitempty" xml:"Logo,omitempty" require:"true" type:"Repeated"`
	Live      []*GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive      `json:"Live,omitempty" xml:"Live,omitempty" require:"true" type:"Repeated"`
	Ad        []*GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd        `json:"Ad,omitempty" xml:"Ad,omitempty" require:"true" type:"Repeated"`
}

func (s GetMediaAuditResultTimelineResponseMediaAuditResultTimeline) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultTimelineResponseMediaAuditResultTimeline) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimeline) SetPorn(v []*GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn) *GetMediaAuditResultTimelineResponseMediaAuditResultTimeline {
	s.Porn = v
	return s
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimeline) SetTerrorism(v []*GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism) *GetMediaAuditResultTimelineResponseMediaAuditResultTimeline {
	s.Terrorism = v
	return s
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimeline) SetLogo(v []*GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo) *GetMediaAuditResultTimelineResponseMediaAuditResultTimeline {
	s.Logo = v
	return s
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimeline) SetLive(v []*GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive) *GetMediaAuditResultTimelineResponseMediaAuditResultTimeline {
	s.Live = v
	return s
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimeline) SetAd(v []*GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd) *GetMediaAuditResultTimelineResponseMediaAuditResultTimeline {
	s.Ad = v
	return s
}

type GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
}

func (s GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn) SetLabel(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn) SetScore(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn {
	s.Score = &v
	return s
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn) SetTimestamp(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn {
	s.Timestamp = &v
	return s
}

type GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
}

func (s GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism) SetLabel(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism) SetScore(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism {
	s.Score = &v
	return s
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism) SetTimestamp(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism {
	s.Timestamp = &v
	return s
}

type GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
}

func (s GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo) SetLabel(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo) SetScore(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo {
	s.Score = &v
	return s
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo) SetTimestamp(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo {
	s.Timestamp = &v
	return s
}

type GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
}

func (s GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive) SetLabel(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive) SetScore(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive {
	s.Score = &v
	return s
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive) SetTimestamp(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive {
	s.Timestamp = &v
	return s
}

type GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd struct {
	Label     *string `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Score     *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Timestamp *string `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
}

func (s GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd) String() string {
	return tea.Prettify(s)
}

func (s GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd) GoString() string {
	return s.String()
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd) SetLabel(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd {
	s.Label = &v
	return s
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd) SetScore(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd {
	s.Score = &v
	return s
}

func (s *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd) SetTimestamp(v string) *GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd {
	s.Timestamp = &v
	return s
}

type AddAITemplateRequest struct {
	TemplateName   *string `json:"TemplateName,omitempty" xml:"TemplateName,omitempty" require:"true"`
	TemplateType   *string `json:"TemplateType,omitempty" xml:"TemplateType,omitempty" require:"true"`
	TemplateConfig *string `json:"TemplateConfig,omitempty" xml:"TemplateConfig,omitempty" require:"true"`
}

func (s AddAITemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s AddAITemplateRequest) GoString() string {
	return s.String()
}

func (s *AddAITemplateRequest) SetTemplateName(v string) *AddAITemplateRequest {
	s.TemplateName = &v
	return s
}

func (s *AddAITemplateRequest) SetTemplateType(v string) *AddAITemplateRequest {
	s.TemplateType = &v
	return s
}

func (s *AddAITemplateRequest) SetTemplateConfig(v string) *AddAITemplateRequest {
	s.TemplateConfig = &v
	return s
}

type AddAITemplateResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TemplateId *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
}

func (s AddAITemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s AddAITemplateResponse) GoString() string {
	return s.String()
}

func (s *AddAITemplateResponse) SetRequestId(v string) *AddAITemplateResponse {
	s.RequestId = &v
	return s
}

func (s *AddAITemplateResponse) SetTemplateId(v string) *AddAITemplateResponse {
	s.TemplateId = &v
	return s
}

type DeleteAITemplateRequest struct {
	TemplateId *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
}

func (s DeleteAITemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAITemplateRequest) GoString() string {
	return s.String()
}

func (s *DeleteAITemplateRequest) SetTemplateId(v string) *DeleteAITemplateRequest {
	s.TemplateId = &v
	return s
}

type DeleteAITemplateResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TemplateId *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
}

func (s DeleteAITemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAITemplateResponse) GoString() string {
	return s.String()
}

func (s *DeleteAITemplateResponse) SetRequestId(v string) *DeleteAITemplateResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteAITemplateResponse) SetTemplateId(v string) *DeleteAITemplateResponse {
	s.TemplateId = &v
	return s
}

type UpdateAITemplateRequest struct {
	TemplateId     *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
	TemplateName   *string `json:"TemplateName,omitempty" xml:"TemplateName,omitempty" require:"true"`
	TemplateConfig *string `json:"TemplateConfig,omitempty" xml:"TemplateConfig,omitempty" require:"true"`
}

func (s UpdateAITemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateAITemplateRequest) GoString() string {
	return s.String()
}

func (s *UpdateAITemplateRequest) SetTemplateId(v string) *UpdateAITemplateRequest {
	s.TemplateId = &v
	return s
}

func (s *UpdateAITemplateRequest) SetTemplateName(v string) *UpdateAITemplateRequest {
	s.TemplateName = &v
	return s
}

func (s *UpdateAITemplateRequest) SetTemplateConfig(v string) *UpdateAITemplateRequest {
	s.TemplateConfig = &v
	return s
}

type UpdateAITemplateResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TemplateId *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
}

func (s UpdateAITemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateAITemplateResponse) GoString() string {
	return s.String()
}

func (s *UpdateAITemplateResponse) SetRequestId(v string) *UpdateAITemplateResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateAITemplateResponse) SetTemplateId(v string) *UpdateAITemplateResponse {
	s.TemplateId = &v
	return s
}

type GetAITemplateRequest struct {
	TemplateId *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
}

func (s GetAITemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s GetAITemplateRequest) GoString() string {
	return s.String()
}

func (s *GetAITemplateRequest) SetTemplateId(v string) *GetAITemplateRequest {
	s.TemplateId = &v
	return s
}

type GetAITemplateResponse struct {
	RequestId    *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TemplateInfo *GetAITemplateResponseTemplateInfo `json:"TemplateInfo,omitempty" xml:"TemplateInfo,omitempty" require:"true" type:"Struct"`
}

func (s GetAITemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s GetAITemplateResponse) GoString() string {
	return s.String()
}

func (s *GetAITemplateResponse) SetRequestId(v string) *GetAITemplateResponse {
	s.RequestId = &v
	return s
}

func (s *GetAITemplateResponse) SetTemplateInfo(v *GetAITemplateResponseTemplateInfo) *GetAITemplateResponse {
	s.TemplateInfo = v
	return s
}

type GetAITemplateResponseTemplateInfo struct {
	TemplateId     *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
	TemplateType   *string `json:"TemplateType,omitempty" xml:"TemplateType,omitempty" require:"true"`
	TemplateName   *string `json:"TemplateName,omitempty" xml:"TemplateName,omitempty" require:"true"`
	TemplateConfig *string `json:"TemplateConfig,omitempty" xml:"TemplateConfig,omitempty" require:"true"`
	Source         *string `json:"Source,omitempty" xml:"Source,omitempty" require:"true"`
	IsDefault      *string `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
	CreationTime   *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModifyTime     *string `json:"ModifyTime,omitempty" xml:"ModifyTime,omitempty" require:"true"`
}

func (s GetAITemplateResponseTemplateInfo) String() string {
	return tea.Prettify(s)
}

func (s GetAITemplateResponseTemplateInfo) GoString() string {
	return s.String()
}

func (s *GetAITemplateResponseTemplateInfo) SetTemplateId(v string) *GetAITemplateResponseTemplateInfo {
	s.TemplateId = &v
	return s
}

func (s *GetAITemplateResponseTemplateInfo) SetTemplateType(v string) *GetAITemplateResponseTemplateInfo {
	s.TemplateType = &v
	return s
}

func (s *GetAITemplateResponseTemplateInfo) SetTemplateName(v string) *GetAITemplateResponseTemplateInfo {
	s.TemplateName = &v
	return s
}

func (s *GetAITemplateResponseTemplateInfo) SetTemplateConfig(v string) *GetAITemplateResponseTemplateInfo {
	s.TemplateConfig = &v
	return s
}

func (s *GetAITemplateResponseTemplateInfo) SetSource(v string) *GetAITemplateResponseTemplateInfo {
	s.Source = &v
	return s
}

func (s *GetAITemplateResponseTemplateInfo) SetIsDefault(v string) *GetAITemplateResponseTemplateInfo {
	s.IsDefault = &v
	return s
}

func (s *GetAITemplateResponseTemplateInfo) SetCreationTime(v string) *GetAITemplateResponseTemplateInfo {
	s.CreationTime = &v
	return s
}

func (s *GetAITemplateResponseTemplateInfo) SetModifyTime(v string) *GetAITemplateResponseTemplateInfo {
	s.ModifyTime = &v
	return s
}

type ListAITemplateRequest struct {
	TemplateType *string `json:"TemplateType,omitempty" xml:"TemplateType,omitempty" require:"true"`
}

func (s ListAITemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s ListAITemplateRequest) GoString() string {
	return s.String()
}

func (s *ListAITemplateRequest) SetTemplateType(v string) *ListAITemplateRequest {
	s.TemplateType = &v
	return s
}

type ListAITemplateResponse struct {
	RequestId        *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TemplateInfoList []*ListAITemplateResponseTemplateInfoList `json:"TemplateInfoList,omitempty" xml:"TemplateInfoList,omitempty" require:"true" type:"Repeated"`
}

func (s ListAITemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s ListAITemplateResponse) GoString() string {
	return s.String()
}

func (s *ListAITemplateResponse) SetRequestId(v string) *ListAITemplateResponse {
	s.RequestId = &v
	return s
}

func (s *ListAITemplateResponse) SetTemplateInfoList(v []*ListAITemplateResponseTemplateInfoList) *ListAITemplateResponse {
	s.TemplateInfoList = v
	return s
}

type ListAITemplateResponseTemplateInfoList struct {
	TemplateId     *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
	TemplateType   *string `json:"TemplateType,omitempty" xml:"TemplateType,omitempty" require:"true"`
	TemplateName   *string `json:"TemplateName,omitempty" xml:"TemplateName,omitempty" require:"true"`
	TemplateConfig *string `json:"TemplateConfig,omitempty" xml:"TemplateConfig,omitempty" require:"true"`
	Source         *string `json:"Source,omitempty" xml:"Source,omitempty" require:"true"`
	IsDefault      *string `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
	CreationTime   *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModifyTime     *string `json:"ModifyTime,omitempty" xml:"ModifyTime,omitempty" require:"true"`
}

func (s ListAITemplateResponseTemplateInfoList) String() string {
	return tea.Prettify(s)
}

func (s ListAITemplateResponseTemplateInfoList) GoString() string {
	return s.String()
}

func (s *ListAITemplateResponseTemplateInfoList) SetTemplateId(v string) *ListAITemplateResponseTemplateInfoList {
	s.TemplateId = &v
	return s
}

func (s *ListAITemplateResponseTemplateInfoList) SetTemplateType(v string) *ListAITemplateResponseTemplateInfoList {
	s.TemplateType = &v
	return s
}

func (s *ListAITemplateResponseTemplateInfoList) SetTemplateName(v string) *ListAITemplateResponseTemplateInfoList {
	s.TemplateName = &v
	return s
}

func (s *ListAITemplateResponseTemplateInfoList) SetTemplateConfig(v string) *ListAITemplateResponseTemplateInfoList {
	s.TemplateConfig = &v
	return s
}

func (s *ListAITemplateResponseTemplateInfoList) SetSource(v string) *ListAITemplateResponseTemplateInfoList {
	s.Source = &v
	return s
}

func (s *ListAITemplateResponseTemplateInfoList) SetIsDefault(v string) *ListAITemplateResponseTemplateInfoList {
	s.IsDefault = &v
	return s
}

func (s *ListAITemplateResponseTemplateInfoList) SetCreationTime(v string) *ListAITemplateResponseTemplateInfoList {
	s.CreationTime = &v
	return s
}

func (s *ListAITemplateResponseTemplateInfoList) SetModifyTime(v string) *ListAITemplateResponseTemplateInfoList {
	s.ModifyTime = &v
	return s
}

type GetDefaultAITemplateRequest struct {
	TemplateType *string `json:"TemplateType,omitempty" xml:"TemplateType,omitempty" require:"true"`
}

func (s GetDefaultAITemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s GetDefaultAITemplateRequest) GoString() string {
	return s.String()
}

func (s *GetDefaultAITemplateRequest) SetTemplateType(v string) *GetDefaultAITemplateRequest {
	s.TemplateType = &v
	return s
}

type GetDefaultAITemplateResponse struct {
	RequestId    *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TemplateInfo *GetDefaultAITemplateResponseTemplateInfo `json:"TemplateInfo,omitempty" xml:"TemplateInfo,omitempty" require:"true" type:"Struct"`
}

func (s GetDefaultAITemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s GetDefaultAITemplateResponse) GoString() string {
	return s.String()
}

func (s *GetDefaultAITemplateResponse) SetRequestId(v string) *GetDefaultAITemplateResponse {
	s.RequestId = &v
	return s
}

func (s *GetDefaultAITemplateResponse) SetTemplateInfo(v *GetDefaultAITemplateResponseTemplateInfo) *GetDefaultAITemplateResponse {
	s.TemplateInfo = v
	return s
}

type GetDefaultAITemplateResponseTemplateInfo struct {
	TemplateId     *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
	TemplateType   *string `json:"TemplateType,omitempty" xml:"TemplateType,omitempty" require:"true"`
	TemplateName   *string `json:"TemplateName,omitempty" xml:"TemplateName,omitempty" require:"true"`
	TemplateConfig *string `json:"TemplateConfig,omitempty" xml:"TemplateConfig,omitempty" require:"true"`
	Source         *string `json:"Source,omitempty" xml:"Source,omitempty" require:"true"`
	IsDefault      *string `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
	CreationTime   *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModifyTime     *string `json:"ModifyTime,omitempty" xml:"ModifyTime,omitempty" require:"true"`
}

func (s GetDefaultAITemplateResponseTemplateInfo) String() string {
	return tea.Prettify(s)
}

func (s GetDefaultAITemplateResponseTemplateInfo) GoString() string {
	return s.String()
}

func (s *GetDefaultAITemplateResponseTemplateInfo) SetTemplateId(v string) *GetDefaultAITemplateResponseTemplateInfo {
	s.TemplateId = &v
	return s
}

func (s *GetDefaultAITemplateResponseTemplateInfo) SetTemplateType(v string) *GetDefaultAITemplateResponseTemplateInfo {
	s.TemplateType = &v
	return s
}

func (s *GetDefaultAITemplateResponseTemplateInfo) SetTemplateName(v string) *GetDefaultAITemplateResponseTemplateInfo {
	s.TemplateName = &v
	return s
}

func (s *GetDefaultAITemplateResponseTemplateInfo) SetTemplateConfig(v string) *GetDefaultAITemplateResponseTemplateInfo {
	s.TemplateConfig = &v
	return s
}

func (s *GetDefaultAITemplateResponseTemplateInfo) SetSource(v string) *GetDefaultAITemplateResponseTemplateInfo {
	s.Source = &v
	return s
}

func (s *GetDefaultAITemplateResponseTemplateInfo) SetIsDefault(v string) *GetDefaultAITemplateResponseTemplateInfo {
	s.IsDefault = &v
	return s
}

func (s *GetDefaultAITemplateResponseTemplateInfo) SetCreationTime(v string) *GetDefaultAITemplateResponseTemplateInfo {
	s.CreationTime = &v
	return s
}

func (s *GetDefaultAITemplateResponseTemplateInfo) SetModifyTime(v string) *GetDefaultAITemplateResponseTemplateInfo {
	s.ModifyTime = &v
	return s
}

type SetDefaultAITemplateRequest struct {
	TemplateId *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
}

func (s SetDefaultAITemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s SetDefaultAITemplateRequest) GoString() string {
	return s.String()
}

func (s *SetDefaultAITemplateRequest) SetTemplateId(v string) *SetDefaultAITemplateRequest {
	s.TemplateId = &v
	return s
}

type SetDefaultAITemplateResponse struct {
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TemplateId *string `json:"TemplateId,omitempty" xml:"TemplateId,omitempty" require:"true"`
}

func (s SetDefaultAITemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s SetDefaultAITemplateResponse) GoString() string {
	return s.String()
}

func (s *SetDefaultAITemplateResponse) SetRequestId(v string) *SetDefaultAITemplateResponse {
	s.RequestId = &v
	return s
}

func (s *SetDefaultAITemplateResponse) SetTemplateId(v string) *SetDefaultAITemplateResponse {
	s.TemplateId = &v
	return s
}

type DescribeVodDomainLogRequest struct {
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	PageSize   *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber *int64  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	StartTime  *string `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime    *string `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
}

func (s DescribeVodDomainLogRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainLogRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainLogRequest) SetDomainName(v string) *DescribeVodDomainLogRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeVodDomainLogRequest) SetPageSize(v int64) *DescribeVodDomainLogRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeVodDomainLogRequest) SetPageNumber(v int64) *DescribeVodDomainLogRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeVodDomainLogRequest) SetStartTime(v string) *DescribeVodDomainLogRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeVodDomainLogRequest) SetEndTime(v string) *DescribeVodDomainLogRequest {
	s.EndTime = &v
	return s
}

type DescribeVodDomainLogResponse struct {
	RequestId        *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainLogDetails *DescribeVodDomainLogResponseDomainLogDetails `json:"DomainLogDetails,omitempty" xml:"DomainLogDetails,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodDomainLogResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainLogResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainLogResponse) SetRequestId(v string) *DescribeVodDomainLogResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodDomainLogResponse) SetDomainLogDetails(v *DescribeVodDomainLogResponseDomainLogDetails) *DescribeVodDomainLogResponse {
	s.DomainLogDetails = v
	return s
}

type DescribeVodDomainLogResponseDomainLogDetails struct {
	DomainLogDetail []*DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail `json:"DomainLogDetail,omitempty" xml:"DomainLogDetail,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodDomainLogResponseDomainLogDetails) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainLogResponseDomainLogDetails) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainLogResponseDomainLogDetails) SetDomainLogDetail(v []*DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail) *DescribeVodDomainLogResponseDomainLogDetails {
	s.DomainLogDetail = v
	return s
}

type DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail struct {
	DomainName *string                                                               `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	LogCount   *int64                                                                `json:"LogCount,omitempty" xml:"LogCount,omitempty" require:"true"`
	LogInfos   *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfos  `json:"LogInfos,omitempty" xml:"LogInfos,omitempty" require:"true" type:"Struct"`
	PageInfos  *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos `json:"PageInfos,omitempty" xml:"PageInfos,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail) SetDomainName(v string) *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail {
	s.DomainName = &v
	return s
}

func (s *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail) SetLogCount(v int64) *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail {
	s.LogCount = &v
	return s
}

func (s *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail) SetLogInfos(v *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfos) *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail {
	s.LogInfos = v
	return s
}

func (s *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail) SetPageInfos(v *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos) *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail {
	s.PageInfos = v
	return s
}

type DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfos struct {
	LogInfoDetail []*DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail `json:"LogInfoDetail,omitempty" xml:"LogInfoDetail,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfos) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfos) SetLogInfoDetail(v []*DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail) *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfos {
	s.LogInfoDetail = v
	return s
}

type DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail struct {
	LogName   *string `json:"LogName,omitempty" xml:"LogName,omitempty" require:"true"`
	LogPath   *string `json:"LogPath,omitempty" xml:"LogPath,omitempty" require:"true"`
	LogSize   *int64  `json:"LogSize,omitempty" xml:"LogSize,omitempty" require:"true"`
	StartTime *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime   *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
}

func (s DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail) SetLogName(v string) *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail {
	s.LogName = &v
	return s
}

func (s *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail) SetLogPath(v string) *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail {
	s.LogPath = &v
	return s
}

func (s *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail) SetLogSize(v int64) *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail {
	s.LogSize = &v
	return s
}

func (s *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail) SetStartTime(v string) *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail {
	s.StartTime = &v
	return s
}

func (s *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail) SetEndTime(v string) *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail {
	s.EndTime = &v
	return s
}

type DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos struct {
	PageNumber *int64 `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int64 `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Total      *int64 `json:"Total,omitempty" xml:"Total,omitempty" require:"true"`
}

func (s DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos) SetPageNumber(v int64) *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos {
	s.PageNumber = &v
	return s
}

func (s *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos) SetPageSize(v int64) *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos {
	s.PageSize = &v
	return s
}

func (s *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos) SetTotal(v int64) *DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos {
	s.Total = &v
	return s
}

type DescribeVodDomainCertificateInfoRequest struct {
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s DescribeVodDomainCertificateInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainCertificateInfoRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainCertificateInfoRequest) SetDomainName(v string) *DescribeVodDomainCertificateInfoRequest {
	s.DomainName = &v
	return s
}

type DescribeVodDomainCertificateInfoResponse struct {
	RequestId *string                                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	CertInfos *DescribeVodDomainCertificateInfoResponseCertInfos `json:"CertInfos,omitempty" xml:"CertInfos,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodDomainCertificateInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainCertificateInfoResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainCertificateInfoResponse) SetRequestId(v string) *DescribeVodDomainCertificateInfoResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodDomainCertificateInfoResponse) SetCertInfos(v *DescribeVodDomainCertificateInfoResponseCertInfos) *DescribeVodDomainCertificateInfoResponse {
	s.CertInfos = v
	return s
}

type DescribeVodDomainCertificateInfoResponseCertInfos struct {
	CertInfo []*DescribeVodDomainCertificateInfoResponseCertInfosCertInfo `json:"CertInfo,omitempty" xml:"CertInfo,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodDomainCertificateInfoResponseCertInfos) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainCertificateInfoResponseCertInfos) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainCertificateInfoResponseCertInfos) SetCertInfo(v []*DescribeVodDomainCertificateInfoResponseCertInfosCertInfo) *DescribeVodDomainCertificateInfoResponseCertInfos {
	s.CertInfo = v
	return s
}

type DescribeVodDomainCertificateInfoResponseCertInfosCertInfo struct {
	DomainName              *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	CertName                *string `json:"CertName,omitempty" xml:"CertName,omitempty" require:"true"`
	CertDomainName          *string `json:"CertDomainName,omitempty" xml:"CertDomainName,omitempty" require:"true"`
	CertExpireTime          *string `json:"CertExpireTime,omitempty" xml:"CertExpireTime,omitempty" require:"true"`
	CertLife                *string `json:"CertLife,omitempty" xml:"CertLife,omitempty" require:"true"`
	CertOrg                 *string `json:"CertOrg,omitempty" xml:"CertOrg,omitempty" require:"true"`
	CertType                *string `json:"CertType,omitempty" xml:"CertType,omitempty" require:"true"`
	ServerCertificateStatus *string `json:"ServerCertificateStatus,omitempty" xml:"ServerCertificateStatus,omitempty" require:"true"`
	Status                  *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s DescribeVodDomainCertificateInfoResponseCertInfosCertInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainCertificateInfoResponseCertInfosCertInfo) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo) SetDomainName(v string) *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo {
	s.DomainName = &v
	return s
}

func (s *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo) SetCertName(v string) *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo {
	s.CertName = &v
	return s
}

func (s *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo) SetCertDomainName(v string) *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo {
	s.CertDomainName = &v
	return s
}

func (s *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo) SetCertExpireTime(v string) *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo {
	s.CertExpireTime = &v
	return s
}

func (s *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo) SetCertLife(v string) *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo {
	s.CertLife = &v
	return s
}

func (s *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo) SetCertOrg(v string) *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo {
	s.CertOrg = &v
	return s
}

func (s *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo) SetCertType(v string) *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo {
	s.CertType = &v
	return s
}

func (s *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo) SetServerCertificateStatus(v string) *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo {
	s.ServerCertificateStatus = &v
	return s
}

func (s *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo) SetStatus(v string) *DescribeVodDomainCertificateInfoResponseCertInfosCertInfo {
	s.Status = &v
	return s
}

type DescribeVodDomainTrafficDataRequest struct {
	DomainName     *string `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
	StartTime      *string `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime        *string `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
	Interval       *string `json:"Interval,omitempty" xml:"Interval,omitempty"`
	IspNameEn      *string `json:"IspNameEn,omitempty" xml:"IspNameEn,omitempty"`
	LocationNameEn *string `json:"LocationNameEn,omitempty" xml:"LocationNameEn,omitempty"`
}

func (s DescribeVodDomainTrafficDataRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainTrafficDataRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainTrafficDataRequest) SetDomainName(v string) *DescribeVodDomainTrafficDataRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeVodDomainTrafficDataRequest) SetStartTime(v string) *DescribeVodDomainTrafficDataRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeVodDomainTrafficDataRequest) SetEndTime(v string) *DescribeVodDomainTrafficDataRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeVodDomainTrafficDataRequest) SetInterval(v string) *DescribeVodDomainTrafficDataRequest {
	s.Interval = &v
	return s
}

func (s *DescribeVodDomainTrafficDataRequest) SetIspNameEn(v string) *DescribeVodDomainTrafficDataRequest {
	s.IspNameEn = &v
	return s
}

func (s *DescribeVodDomainTrafficDataRequest) SetLocationNameEn(v string) *DescribeVodDomainTrafficDataRequest {
	s.LocationNameEn = &v
	return s
}

type DescribeVodDomainTrafficDataResponse struct {
	RequestId              *string                                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainName             *string                                                     `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	StartTime              *string                                                     `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime                *string                                                     `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	DataInterval           *string                                                     `json:"DataInterval,omitempty" xml:"DataInterval,omitempty" require:"true"`
	TrafficDataPerInterval *DescribeVodDomainTrafficDataResponseTrafficDataPerInterval `json:"TrafficDataPerInterval,omitempty" xml:"TrafficDataPerInterval,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodDomainTrafficDataResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainTrafficDataResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainTrafficDataResponse) SetRequestId(v string) *DescribeVodDomainTrafficDataResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodDomainTrafficDataResponse) SetDomainName(v string) *DescribeVodDomainTrafficDataResponse {
	s.DomainName = &v
	return s
}

func (s *DescribeVodDomainTrafficDataResponse) SetStartTime(v string) *DescribeVodDomainTrafficDataResponse {
	s.StartTime = &v
	return s
}

func (s *DescribeVodDomainTrafficDataResponse) SetEndTime(v string) *DescribeVodDomainTrafficDataResponse {
	s.EndTime = &v
	return s
}

func (s *DescribeVodDomainTrafficDataResponse) SetDataInterval(v string) *DescribeVodDomainTrafficDataResponse {
	s.DataInterval = &v
	return s
}

func (s *DescribeVodDomainTrafficDataResponse) SetTrafficDataPerInterval(v *DescribeVodDomainTrafficDataResponseTrafficDataPerInterval) *DescribeVodDomainTrafficDataResponse {
	s.TrafficDataPerInterval = v
	return s
}

type DescribeVodDomainTrafficDataResponseTrafficDataPerInterval struct {
	DataModule []*DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule `json:"DataModule,omitempty" xml:"DataModule,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodDomainTrafficDataResponseTrafficDataPerInterval) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainTrafficDataResponseTrafficDataPerInterval) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainTrafficDataResponseTrafficDataPerInterval) SetDataModule(v []*DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule) *DescribeVodDomainTrafficDataResponseTrafficDataPerInterval {
	s.DataModule = v
	return s
}

type DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule struct {
	TimeStamp          *string `json:"TimeStamp,omitempty" xml:"TimeStamp,omitempty" require:"true"`
	Value              *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	DomesticValue      *string `json:"DomesticValue,omitempty" xml:"DomesticValue,omitempty" require:"true"`
	OverseasValue      *string `json:"OverseasValue,omitempty" xml:"OverseasValue,omitempty" require:"true"`
	HttpsValue         *string `json:"HttpsValue,omitempty" xml:"HttpsValue,omitempty" require:"true"`
	HttpsDomesticValue *string `json:"HttpsDomesticValue,omitempty" xml:"HttpsDomesticValue,omitempty" require:"true"`
	HttpsOverseasValue *string `json:"HttpsOverseasValue,omitempty" xml:"HttpsOverseasValue,omitempty" require:"true"`
}

func (s DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule) SetTimeStamp(v string) *DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule {
	s.TimeStamp = &v
	return s
}

func (s *DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule) SetValue(v string) *DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule {
	s.Value = &v
	return s
}

func (s *DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule) SetDomesticValue(v string) *DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule {
	s.DomesticValue = &v
	return s
}

func (s *DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule) SetOverseasValue(v string) *DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule {
	s.OverseasValue = &v
	return s
}

func (s *DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule) SetHttpsValue(v string) *DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule {
	s.HttpsValue = &v
	return s
}

func (s *DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule) SetHttpsDomesticValue(v string) *DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule {
	s.HttpsDomesticValue = &v
	return s
}

func (s *DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule) SetHttpsOverseasValue(v string) *DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule {
	s.HttpsOverseasValue = &v
	return s
}

type DescribeVodDomainBpsDataRequest struct {
	DomainName     *string `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
	StartTime      *string `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime        *string `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
	Interval       *string `json:"Interval,omitempty" xml:"Interval,omitempty"`
	IspNameEn      *string `json:"IspNameEn,omitempty" xml:"IspNameEn,omitempty"`
	LocationNameEn *string `json:"LocationNameEn,omitempty" xml:"LocationNameEn,omitempty"`
}

func (s DescribeVodDomainBpsDataRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainBpsDataRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainBpsDataRequest) SetDomainName(v string) *DescribeVodDomainBpsDataRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeVodDomainBpsDataRequest) SetStartTime(v string) *DescribeVodDomainBpsDataRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeVodDomainBpsDataRequest) SetEndTime(v string) *DescribeVodDomainBpsDataRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeVodDomainBpsDataRequest) SetInterval(v string) *DescribeVodDomainBpsDataRequest {
	s.Interval = &v
	return s
}

func (s *DescribeVodDomainBpsDataRequest) SetIspNameEn(v string) *DescribeVodDomainBpsDataRequest {
	s.IspNameEn = &v
	return s
}

func (s *DescribeVodDomainBpsDataRequest) SetLocationNameEn(v string) *DescribeVodDomainBpsDataRequest {
	s.LocationNameEn = &v
	return s
}

type DescribeVodDomainBpsDataResponse struct {
	RequestId          *string                                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainName         *string                                             `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	StartTime          *string                                             `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime            *string                                             `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	LocationNameEn     *string                                             `json:"LocationNameEn,omitempty" xml:"LocationNameEn,omitempty" require:"true"`
	IspNameEn          *string                                             `json:"IspNameEn,omitempty" xml:"IspNameEn,omitempty" require:"true"`
	DataInterval       *string                                             `json:"DataInterval,omitempty" xml:"DataInterval,omitempty" require:"true"`
	BpsDataPerInterval *DescribeVodDomainBpsDataResponseBpsDataPerInterval `json:"BpsDataPerInterval,omitempty" xml:"BpsDataPerInterval,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodDomainBpsDataResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainBpsDataResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainBpsDataResponse) SetRequestId(v string) *DescribeVodDomainBpsDataResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodDomainBpsDataResponse) SetDomainName(v string) *DescribeVodDomainBpsDataResponse {
	s.DomainName = &v
	return s
}

func (s *DescribeVodDomainBpsDataResponse) SetStartTime(v string) *DescribeVodDomainBpsDataResponse {
	s.StartTime = &v
	return s
}

func (s *DescribeVodDomainBpsDataResponse) SetEndTime(v string) *DescribeVodDomainBpsDataResponse {
	s.EndTime = &v
	return s
}

func (s *DescribeVodDomainBpsDataResponse) SetLocationNameEn(v string) *DescribeVodDomainBpsDataResponse {
	s.LocationNameEn = &v
	return s
}

func (s *DescribeVodDomainBpsDataResponse) SetIspNameEn(v string) *DescribeVodDomainBpsDataResponse {
	s.IspNameEn = &v
	return s
}

func (s *DescribeVodDomainBpsDataResponse) SetDataInterval(v string) *DescribeVodDomainBpsDataResponse {
	s.DataInterval = &v
	return s
}

func (s *DescribeVodDomainBpsDataResponse) SetBpsDataPerInterval(v *DescribeVodDomainBpsDataResponseBpsDataPerInterval) *DescribeVodDomainBpsDataResponse {
	s.BpsDataPerInterval = v
	return s
}

type DescribeVodDomainBpsDataResponseBpsDataPerInterval struct {
	DataModule []*DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule `json:"DataModule,omitempty" xml:"DataModule,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodDomainBpsDataResponseBpsDataPerInterval) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainBpsDataResponseBpsDataPerInterval) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainBpsDataResponseBpsDataPerInterval) SetDataModule(v []*DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule) *DescribeVodDomainBpsDataResponseBpsDataPerInterval {
	s.DataModule = v
	return s
}

type DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule struct {
	TimeStamp          *string `json:"TimeStamp,omitempty" xml:"TimeStamp,omitempty" require:"true"`
	Value              *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	DomesticValue      *string `json:"DomesticValue,omitempty" xml:"DomesticValue,omitempty" require:"true"`
	OverseasValue      *string `json:"OverseasValue,omitempty" xml:"OverseasValue,omitempty" require:"true"`
	HttpsValue         *string `json:"HttpsValue,omitempty" xml:"HttpsValue,omitempty" require:"true"`
	HttpsDomesticValue *string `json:"HttpsDomesticValue,omitempty" xml:"HttpsDomesticValue,omitempty" require:"true"`
	HttpsOverseasValue *string `json:"HttpsOverseasValue,omitempty" xml:"HttpsOverseasValue,omitempty" require:"true"`
}

func (s DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule) SetTimeStamp(v string) *DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule {
	s.TimeStamp = &v
	return s
}

func (s *DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule) SetValue(v string) *DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule {
	s.Value = &v
	return s
}

func (s *DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule) SetDomesticValue(v string) *DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule {
	s.DomesticValue = &v
	return s
}

func (s *DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule) SetOverseasValue(v string) *DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule {
	s.OverseasValue = &v
	return s
}

func (s *DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule) SetHttpsValue(v string) *DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule {
	s.HttpsValue = &v
	return s
}

func (s *DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule) SetHttpsDomesticValue(v string) *DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule {
	s.HttpsDomesticValue = &v
	return s
}

func (s *DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule) SetHttpsOverseasValue(v string) *DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule {
	s.HttpsOverseasValue = &v
	return s
}

type DescribeVodDomainUsageDataRequest struct {
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
	StartTime  *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime    *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	Type       *string `json:"Type,omitempty" xml:"Type,omitempty"`
	Area       *string `json:"Area,omitempty" xml:"Area,omitempty"`
	Field      *string `json:"Field,omitempty" xml:"Field,omitempty" require:"true"`
}

func (s DescribeVodDomainUsageDataRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainUsageDataRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainUsageDataRequest) SetDomainName(v string) *DescribeVodDomainUsageDataRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeVodDomainUsageDataRequest) SetStartTime(v string) *DescribeVodDomainUsageDataRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeVodDomainUsageDataRequest) SetEndTime(v string) *DescribeVodDomainUsageDataRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeVodDomainUsageDataRequest) SetType(v string) *DescribeVodDomainUsageDataRequest {
	s.Type = &v
	return s
}

func (s *DescribeVodDomainUsageDataRequest) SetArea(v string) *DescribeVodDomainUsageDataRequest {
	s.Area = &v
	return s
}

func (s *DescribeVodDomainUsageDataRequest) SetField(v string) *DescribeVodDomainUsageDataRequest {
	s.Field = &v
	return s
}

type DescribeVodDomainUsageDataResponse struct {
	RequestId            *string                                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainName           *string                                                 `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	StartTime            *string                                                 `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime              *string                                                 `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	Type                 *string                                                 `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Area                 *string                                                 `json:"Area,omitempty" xml:"Area,omitempty" require:"true"`
	DataInterval         *string                                                 `json:"DataInterval,omitempty" xml:"DataInterval,omitempty" require:"true"`
	UsageDataPerInterval *DescribeVodDomainUsageDataResponseUsageDataPerInterval `json:"UsageDataPerInterval,omitempty" xml:"UsageDataPerInterval,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodDomainUsageDataResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainUsageDataResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainUsageDataResponse) SetRequestId(v string) *DescribeVodDomainUsageDataResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodDomainUsageDataResponse) SetDomainName(v string) *DescribeVodDomainUsageDataResponse {
	s.DomainName = &v
	return s
}

func (s *DescribeVodDomainUsageDataResponse) SetStartTime(v string) *DescribeVodDomainUsageDataResponse {
	s.StartTime = &v
	return s
}

func (s *DescribeVodDomainUsageDataResponse) SetEndTime(v string) *DescribeVodDomainUsageDataResponse {
	s.EndTime = &v
	return s
}

func (s *DescribeVodDomainUsageDataResponse) SetType(v string) *DescribeVodDomainUsageDataResponse {
	s.Type = &v
	return s
}

func (s *DescribeVodDomainUsageDataResponse) SetArea(v string) *DescribeVodDomainUsageDataResponse {
	s.Area = &v
	return s
}

func (s *DescribeVodDomainUsageDataResponse) SetDataInterval(v string) *DescribeVodDomainUsageDataResponse {
	s.DataInterval = &v
	return s
}

func (s *DescribeVodDomainUsageDataResponse) SetUsageDataPerInterval(v *DescribeVodDomainUsageDataResponseUsageDataPerInterval) *DescribeVodDomainUsageDataResponse {
	s.UsageDataPerInterval = v
	return s
}

type DescribeVodDomainUsageDataResponseUsageDataPerInterval struct {
	DataModule []*DescribeVodDomainUsageDataResponseUsageDataPerIntervalDataModule `json:"DataModule,omitempty" xml:"DataModule,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodDomainUsageDataResponseUsageDataPerInterval) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainUsageDataResponseUsageDataPerInterval) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainUsageDataResponseUsageDataPerInterval) SetDataModule(v []*DescribeVodDomainUsageDataResponseUsageDataPerIntervalDataModule) *DescribeVodDomainUsageDataResponseUsageDataPerInterval {
	s.DataModule = v
	return s
}

type DescribeVodDomainUsageDataResponseUsageDataPerIntervalDataModule struct {
	TimeStamp *string `json:"TimeStamp,omitempty" xml:"TimeStamp,omitempty" require:"true"`
	Value     *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeVodDomainUsageDataResponseUsageDataPerIntervalDataModule) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainUsageDataResponseUsageDataPerIntervalDataModule) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainUsageDataResponseUsageDataPerIntervalDataModule) SetTimeStamp(v string) *DescribeVodDomainUsageDataResponseUsageDataPerIntervalDataModule {
	s.TimeStamp = &v
	return s
}

func (s *DescribeVodDomainUsageDataResponseUsageDataPerIntervalDataModule) SetValue(v string) *DescribeVodDomainUsageDataResponseUsageDataPerIntervalDataModule {
	s.Value = &v
	return s
}

type DescribeVodCertificateListRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	DomainName    *string `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
}

func (s DescribeVodCertificateListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodCertificateListRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodCertificateListRequest) SetSecurityToken(v string) *DescribeVodCertificateListRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeVodCertificateListRequest) SetDomainName(v string) *DescribeVodCertificateListRequest {
	s.DomainName = &v
	return s
}

type DescribeVodCertificateListResponse struct {
	RequestId            *string                                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	CertificateListModel *DescribeVodCertificateListResponseCertificateListModel `json:"CertificateListModel,omitempty" xml:"CertificateListModel,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodCertificateListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodCertificateListResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodCertificateListResponse) SetRequestId(v string) *DescribeVodCertificateListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodCertificateListResponse) SetCertificateListModel(v *DescribeVodCertificateListResponseCertificateListModel) *DescribeVodCertificateListResponse {
	s.CertificateListModel = v
	return s
}

type DescribeVodCertificateListResponseCertificateListModel struct {
	Count    *int                                                            `json:"Count,omitempty" xml:"Count,omitempty" require:"true"`
	CertList *DescribeVodCertificateListResponseCertificateListModelCertList `json:"CertList,omitempty" xml:"CertList,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodCertificateListResponseCertificateListModel) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodCertificateListResponseCertificateListModel) GoString() string {
	return s.String()
}

func (s *DescribeVodCertificateListResponseCertificateListModel) SetCount(v int) *DescribeVodCertificateListResponseCertificateListModel {
	s.Count = &v
	return s
}

func (s *DescribeVodCertificateListResponseCertificateListModel) SetCertList(v *DescribeVodCertificateListResponseCertificateListModelCertList) *DescribeVodCertificateListResponseCertificateListModel {
	s.CertList = v
	return s
}

type DescribeVodCertificateListResponseCertificateListModelCertList struct {
	Cert []*DescribeVodCertificateListResponseCertificateListModelCertListCert `json:"Cert,omitempty" xml:"Cert,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodCertificateListResponseCertificateListModelCertList) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodCertificateListResponseCertificateListModelCertList) GoString() string {
	return s.String()
}

func (s *DescribeVodCertificateListResponseCertificateListModelCertList) SetCert(v []*DescribeVodCertificateListResponseCertificateListModelCertListCert) *DescribeVodCertificateListResponseCertificateListModelCertList {
	s.Cert = v
	return s
}

type DescribeVodCertificateListResponseCertificateListModelCertListCert struct {
	CertName    *string `json:"CertName,omitempty" xml:"CertName,omitempty" require:"true"`
	CertId      *int64  `json:"CertId,omitempty" xml:"CertId,omitempty" require:"true"`
	Fingerprint *string `json:"Fingerprint,omitempty" xml:"Fingerprint,omitempty" require:"true"`
	Common      *string `json:"Common,omitempty" xml:"Common,omitempty" require:"true"`
	Issuer      *string `json:"Issuer,omitempty" xml:"Issuer,omitempty" require:"true"`
	LastTime    *int64  `json:"LastTime,omitempty" xml:"LastTime,omitempty" require:"true"`
}

func (s DescribeVodCertificateListResponseCertificateListModelCertListCert) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodCertificateListResponseCertificateListModelCertListCert) GoString() string {
	return s.String()
}

func (s *DescribeVodCertificateListResponseCertificateListModelCertListCert) SetCertName(v string) *DescribeVodCertificateListResponseCertificateListModelCertListCert {
	s.CertName = &v
	return s
}

func (s *DescribeVodCertificateListResponseCertificateListModelCertListCert) SetCertId(v int64) *DescribeVodCertificateListResponseCertificateListModelCertListCert {
	s.CertId = &v
	return s
}

func (s *DescribeVodCertificateListResponseCertificateListModelCertListCert) SetFingerprint(v string) *DescribeVodCertificateListResponseCertificateListModelCertListCert {
	s.Fingerprint = &v
	return s
}

func (s *DescribeVodCertificateListResponseCertificateListModelCertListCert) SetCommon(v string) *DescribeVodCertificateListResponseCertificateListModelCertListCert {
	s.Common = &v
	return s
}

func (s *DescribeVodCertificateListResponseCertificateListModelCertListCert) SetIssuer(v string) *DescribeVodCertificateListResponseCertificateListModelCertListCert {
	s.Issuer = &v
	return s
}

func (s *DescribeVodCertificateListResponseCertificateListModelCertListCert) SetLastTime(v int64) *DescribeVodCertificateListResponseCertificateListModelCertListCert {
	s.LastTime = &v
	return s
}

type BatchStopVodDomainRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	DomainNames   *string `json:"DomainNames,omitempty" xml:"DomainNames,omitempty" require:"true"`
}

func (s BatchStopVodDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s BatchStopVodDomainRequest) GoString() string {
	return s.String()
}

func (s *BatchStopVodDomainRequest) SetSecurityToken(v string) *BatchStopVodDomainRequest {
	s.SecurityToken = &v
	return s
}

func (s *BatchStopVodDomainRequest) SetDomainNames(v string) *BatchStopVodDomainRequest {
	s.DomainNames = &v
	return s
}

type BatchStopVodDomainResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s BatchStopVodDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s BatchStopVodDomainResponse) GoString() string {
	return s.String()
}

func (s *BatchStopVodDomainResponse) SetRequestId(v string) *BatchStopVodDomainResponse {
	s.RequestId = &v
	return s
}

type DeleteVodDomainRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	DomainName    *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s DeleteVodDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteVodDomainRequest) GoString() string {
	return s.String()
}

func (s *DeleteVodDomainRequest) SetSecurityToken(v string) *DeleteVodDomainRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteVodDomainRequest) SetDomainName(v string) *DeleteVodDomainRequest {
	s.DomainName = &v
	return s
}

type DeleteVodDomainResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteVodDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteVodDomainResponse) GoString() string {
	return s.String()
}

func (s *DeleteVodDomainResponse) SetRequestId(v string) *DeleteVodDomainResponse {
	s.RequestId = &v
	return s
}

type SetVodDomainCertificateRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	DomainName    *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	CertName      *string `json:"CertName,omitempty" xml:"CertName,omitempty"`
	SSLProtocol   *string `json:"SSLProtocol,omitempty" xml:"SSLProtocol,omitempty" require:"true"`
	SSLPub        *string `json:"SSLPub,omitempty" xml:"SSLPub,omitempty"`
	SSLPri        *string `json:"SSLPri,omitempty" xml:"SSLPri,omitempty"`
	Region        *string `json:"Region,omitempty" xml:"Region,omitempty"`
}

func (s SetVodDomainCertificateRequest) String() string {
	return tea.Prettify(s)
}

func (s SetVodDomainCertificateRequest) GoString() string {
	return s.String()
}

func (s *SetVodDomainCertificateRequest) SetSecurityToken(v string) *SetVodDomainCertificateRequest {
	s.SecurityToken = &v
	return s
}

func (s *SetVodDomainCertificateRequest) SetDomainName(v string) *SetVodDomainCertificateRequest {
	s.DomainName = &v
	return s
}

func (s *SetVodDomainCertificateRequest) SetCertName(v string) *SetVodDomainCertificateRequest {
	s.CertName = &v
	return s
}

func (s *SetVodDomainCertificateRequest) SetSSLProtocol(v string) *SetVodDomainCertificateRequest {
	s.SSLProtocol = &v
	return s
}

func (s *SetVodDomainCertificateRequest) SetSSLPub(v string) *SetVodDomainCertificateRequest {
	s.SSLPub = &v
	return s
}

func (s *SetVodDomainCertificateRequest) SetSSLPri(v string) *SetVodDomainCertificateRequest {
	s.SSLPri = &v
	return s
}

func (s *SetVodDomainCertificateRequest) SetRegion(v string) *SetVodDomainCertificateRequest {
	s.Region = &v
	return s
}

type SetVodDomainCertificateResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetVodDomainCertificateResponse) String() string {
	return tea.Prettify(s)
}

func (s SetVodDomainCertificateResponse) GoString() string {
	return s.String()
}

func (s *SetVodDomainCertificateResponse) SetRequestId(v string) *SetVodDomainCertificateResponse {
	s.RequestId = &v
	return s
}

type DeleteVodSpecificConfigRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	DomainName    *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	ConfigId      *string `json:"ConfigId,omitempty" xml:"ConfigId,omitempty" require:"true"`
}

func (s DeleteVodSpecificConfigRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteVodSpecificConfigRequest) GoString() string {
	return s.String()
}

func (s *DeleteVodSpecificConfigRequest) SetSecurityToken(v string) *DeleteVodSpecificConfigRequest {
	s.SecurityToken = &v
	return s
}

func (s *DeleteVodSpecificConfigRequest) SetDomainName(v string) *DeleteVodSpecificConfigRequest {
	s.DomainName = &v
	return s
}

func (s *DeleteVodSpecificConfigRequest) SetConfigId(v string) *DeleteVodSpecificConfigRequest {
	s.ConfigId = &v
	return s
}

type DeleteVodSpecificConfigResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteVodSpecificConfigResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteVodSpecificConfigResponse) GoString() string {
	return s.String()
}

func (s *DeleteVodSpecificConfigResponse) SetRequestId(v string) *DeleteVodSpecificConfigResponse {
	s.RequestId = &v
	return s
}

type BatchSetVodDomainConfigsRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	DomainNames   *string `json:"DomainNames,omitempty" xml:"DomainNames,omitempty" require:"true"`
	Functions     *string `json:"Functions,omitempty" xml:"Functions,omitempty" require:"true"`
}

func (s BatchSetVodDomainConfigsRequest) String() string {
	return tea.Prettify(s)
}

func (s BatchSetVodDomainConfigsRequest) GoString() string {
	return s.String()
}

func (s *BatchSetVodDomainConfigsRequest) SetSecurityToken(v string) *BatchSetVodDomainConfigsRequest {
	s.SecurityToken = &v
	return s
}

func (s *BatchSetVodDomainConfigsRequest) SetDomainNames(v string) *BatchSetVodDomainConfigsRequest {
	s.DomainNames = &v
	return s
}

func (s *BatchSetVodDomainConfigsRequest) SetFunctions(v string) *BatchSetVodDomainConfigsRequest {
	s.Functions = &v
	return s
}

type BatchSetVodDomainConfigsResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s BatchSetVodDomainConfigsResponse) String() string {
	return tea.Prettify(s)
}

func (s BatchSetVodDomainConfigsResponse) GoString() string {
	return s.String()
}

func (s *BatchSetVodDomainConfigsResponse) SetRequestId(v string) *BatchSetVodDomainConfigsResponse {
	s.RequestId = &v
	return s
}

type AddVodDomainRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	DomainName    *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	Sources       *string `json:"Sources,omitempty" xml:"Sources,omitempty" require:"true"`
	CheckUrl      *string `json:"CheckUrl,omitempty" xml:"CheckUrl,omitempty"`
	Scope         *string `json:"Scope,omitempty" xml:"Scope,omitempty"`
}

func (s AddVodDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s AddVodDomainRequest) GoString() string {
	return s.String()
}

func (s *AddVodDomainRequest) SetSecurityToken(v string) *AddVodDomainRequest {
	s.SecurityToken = &v
	return s
}

func (s *AddVodDomainRequest) SetDomainName(v string) *AddVodDomainRequest {
	s.DomainName = &v
	return s
}

func (s *AddVodDomainRequest) SetSources(v string) *AddVodDomainRequest {
	s.Sources = &v
	return s
}

func (s *AddVodDomainRequest) SetCheckUrl(v string) *AddVodDomainRequest {
	s.CheckUrl = &v
	return s
}

func (s *AddVodDomainRequest) SetScope(v string) *AddVodDomainRequest {
	s.Scope = &v
	return s
}

type AddVodDomainResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s AddVodDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s AddVodDomainResponse) GoString() string {
	return s.String()
}

func (s *AddVodDomainResponse) SetRequestId(v string) *AddVodDomainResponse {
	s.RequestId = &v
	return s
}

type DescribeVodRefreshQuotaRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
}

func (s DescribeVodRefreshQuotaRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodRefreshQuotaRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodRefreshQuotaRequest) SetSecurityToken(v string) *DescribeVodRefreshQuotaRequest {
	s.SecurityToken = &v
	return s
}

type DescribeVodRefreshQuotaResponse struct {
	RequestId     *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	UrlQuota      *string `json:"UrlQuota,omitempty" xml:"UrlQuota,omitempty" require:"true"`
	DirQuota      *string `json:"DirQuota,omitempty" xml:"DirQuota,omitempty" require:"true"`
	UrlRemain     *string `json:"UrlRemain,omitempty" xml:"UrlRemain,omitempty" require:"true"`
	DirRemain     *string `json:"DirRemain,omitempty" xml:"DirRemain,omitempty" require:"true"`
	PreloadQuota  *string `json:"PreloadQuota,omitempty" xml:"PreloadQuota,omitempty" require:"true"`
	BlockQuota    *string `json:"BlockQuota,omitempty" xml:"BlockQuota,omitempty" require:"true"`
	PreloadRemain *string `json:"PreloadRemain,omitempty" xml:"PreloadRemain,omitempty" require:"true"`
	BlockRemain   *string `json:"blockRemain,omitempty" xml:"blockRemain,omitempty" require:"true"`
}

func (s DescribeVodRefreshQuotaResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodRefreshQuotaResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodRefreshQuotaResponse) SetRequestId(v string) *DescribeVodRefreshQuotaResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodRefreshQuotaResponse) SetUrlQuota(v string) *DescribeVodRefreshQuotaResponse {
	s.UrlQuota = &v
	return s
}

func (s *DescribeVodRefreshQuotaResponse) SetDirQuota(v string) *DescribeVodRefreshQuotaResponse {
	s.DirQuota = &v
	return s
}

func (s *DescribeVodRefreshQuotaResponse) SetUrlRemain(v string) *DescribeVodRefreshQuotaResponse {
	s.UrlRemain = &v
	return s
}

func (s *DescribeVodRefreshQuotaResponse) SetDirRemain(v string) *DescribeVodRefreshQuotaResponse {
	s.DirRemain = &v
	return s
}

func (s *DescribeVodRefreshQuotaResponse) SetPreloadQuota(v string) *DescribeVodRefreshQuotaResponse {
	s.PreloadQuota = &v
	return s
}

func (s *DescribeVodRefreshQuotaResponse) SetBlockQuota(v string) *DescribeVodRefreshQuotaResponse {
	s.BlockQuota = &v
	return s
}

func (s *DescribeVodRefreshQuotaResponse) SetPreloadRemain(v string) *DescribeVodRefreshQuotaResponse {
	s.PreloadRemain = &v
	return s
}

func (s *DescribeVodRefreshQuotaResponse) SetBlockRemain(v string) *DescribeVodRefreshQuotaResponse {
	s.BlockRemain = &v
	return s
}

type DescribeVodRefreshTasksRequest struct {
	SecurityToken   *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	TaskId          *string `json:"TaskId,omitempty" xml:"TaskId,omitempty"`
	ObjectPath      *string `json:"ObjectPath,omitempty" xml:"ObjectPath,omitempty"`
	PageNumber      *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	ObjectType      *string `json:"ObjectType,omitempty" xml:"ObjectType,omitempty"`
	DomainName      *string `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
	Status          *string `json:"Status,omitempty" xml:"Status,omitempty"`
	PageSize        *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	StartTime       *string `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime         *string `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
	ResourceGroupId *string `json:"ResourceGroupId,omitempty" xml:"ResourceGroupId,omitempty"`
}

func (s DescribeVodRefreshTasksRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodRefreshTasksRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodRefreshTasksRequest) SetSecurityToken(v string) *DescribeVodRefreshTasksRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeVodRefreshTasksRequest) SetTaskId(v string) *DescribeVodRefreshTasksRequest {
	s.TaskId = &v
	return s
}

func (s *DescribeVodRefreshTasksRequest) SetObjectPath(v string) *DescribeVodRefreshTasksRequest {
	s.ObjectPath = &v
	return s
}

func (s *DescribeVodRefreshTasksRequest) SetPageNumber(v int) *DescribeVodRefreshTasksRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeVodRefreshTasksRequest) SetObjectType(v string) *DescribeVodRefreshTasksRequest {
	s.ObjectType = &v
	return s
}

func (s *DescribeVodRefreshTasksRequest) SetDomainName(v string) *DescribeVodRefreshTasksRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeVodRefreshTasksRequest) SetStatus(v string) *DescribeVodRefreshTasksRequest {
	s.Status = &v
	return s
}

func (s *DescribeVodRefreshTasksRequest) SetPageSize(v int) *DescribeVodRefreshTasksRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeVodRefreshTasksRequest) SetStartTime(v string) *DescribeVodRefreshTasksRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeVodRefreshTasksRequest) SetEndTime(v string) *DescribeVodRefreshTasksRequest {
	s.EndTime = &v
	return s
}

func (s *DescribeVodRefreshTasksRequest) SetResourceGroupId(v string) *DescribeVodRefreshTasksRequest {
	s.ResourceGroupId = &v
	return s
}

type DescribeVodRefreshTasksResponse struct {
	RequestId  *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageNumber *int64                                `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int64                                `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int64                                `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Tasks      *DescribeVodRefreshTasksResponseTasks `json:"Tasks,omitempty" xml:"Tasks,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodRefreshTasksResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodRefreshTasksResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodRefreshTasksResponse) SetRequestId(v string) *DescribeVodRefreshTasksResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodRefreshTasksResponse) SetPageNumber(v int64) *DescribeVodRefreshTasksResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeVodRefreshTasksResponse) SetPageSize(v int64) *DescribeVodRefreshTasksResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeVodRefreshTasksResponse) SetTotalCount(v int64) *DescribeVodRefreshTasksResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeVodRefreshTasksResponse) SetTasks(v *DescribeVodRefreshTasksResponseTasks) *DescribeVodRefreshTasksResponse {
	s.Tasks = v
	return s
}

type DescribeVodRefreshTasksResponseTasks struct {
	Task []*DescribeVodRefreshTasksResponseTasksTask `json:"Task,omitempty" xml:"Task,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodRefreshTasksResponseTasks) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodRefreshTasksResponseTasks) GoString() string {
	return s.String()
}

func (s *DescribeVodRefreshTasksResponseTasks) SetTask(v []*DescribeVodRefreshTasksResponseTasksTask) *DescribeVodRefreshTasksResponseTasks {
	s.Task = v
	return s
}

type DescribeVodRefreshTasksResponseTasksTask struct {
	TaskId       *string `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
	ObjectPath   *string `json:"ObjectPath,omitempty" xml:"ObjectPath,omitempty" require:"true"`
	Process      *string `json:"Process,omitempty" xml:"Process,omitempty" require:"true"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	CreationTime *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	ObjectType   *string `json:"ObjectType,omitempty" xml:"ObjectType,omitempty" require:"true"`
}

func (s DescribeVodRefreshTasksResponseTasksTask) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodRefreshTasksResponseTasksTask) GoString() string {
	return s.String()
}

func (s *DescribeVodRefreshTasksResponseTasksTask) SetTaskId(v string) *DescribeVodRefreshTasksResponseTasksTask {
	s.TaskId = &v
	return s
}

func (s *DescribeVodRefreshTasksResponseTasksTask) SetObjectPath(v string) *DescribeVodRefreshTasksResponseTasksTask {
	s.ObjectPath = &v
	return s
}

func (s *DescribeVodRefreshTasksResponseTasksTask) SetProcess(v string) *DescribeVodRefreshTasksResponseTasksTask {
	s.Process = &v
	return s
}

func (s *DescribeVodRefreshTasksResponseTasksTask) SetStatus(v string) *DescribeVodRefreshTasksResponseTasksTask {
	s.Status = &v
	return s
}

func (s *DescribeVodRefreshTasksResponseTasksTask) SetCreationTime(v string) *DescribeVodRefreshTasksResponseTasksTask {
	s.CreationTime = &v
	return s
}

func (s *DescribeVodRefreshTasksResponseTasksTask) SetDescription(v string) *DescribeVodRefreshTasksResponseTasksTask {
	s.Description = &v
	return s
}

func (s *DescribeVodRefreshTasksResponseTasksTask) SetObjectType(v string) *DescribeVodRefreshTasksResponseTasksTask {
	s.ObjectType = &v
	return s
}

type DescribeVodDomainConfigsRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	DomainName    *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	FunctionNames *string `json:"FunctionNames,omitempty" xml:"FunctionNames,omitempty" require:"true"`
}

func (s DescribeVodDomainConfigsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainConfigsRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainConfigsRequest) SetSecurityToken(v string) *DescribeVodDomainConfigsRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeVodDomainConfigsRequest) SetDomainName(v string) *DescribeVodDomainConfigsRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeVodDomainConfigsRequest) SetFunctionNames(v string) *DescribeVodDomainConfigsRequest {
	s.FunctionNames = &v
	return s
}

type DescribeVodDomainConfigsResponse struct {
	RequestId     *string                                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainConfigs *DescribeVodDomainConfigsResponseDomainConfigs `json:"DomainConfigs,omitempty" xml:"DomainConfigs,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodDomainConfigsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainConfigsResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainConfigsResponse) SetRequestId(v string) *DescribeVodDomainConfigsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodDomainConfigsResponse) SetDomainConfigs(v *DescribeVodDomainConfigsResponseDomainConfigs) *DescribeVodDomainConfigsResponse {
	s.DomainConfigs = v
	return s
}

type DescribeVodDomainConfigsResponseDomainConfigs struct {
	DomainConfig []*DescribeVodDomainConfigsResponseDomainConfigsDomainConfig `json:"DomainConfig,omitempty" xml:"DomainConfig,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodDomainConfigsResponseDomainConfigs) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainConfigsResponseDomainConfigs) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainConfigsResponseDomainConfigs) SetDomainConfig(v []*DescribeVodDomainConfigsResponseDomainConfigsDomainConfig) *DescribeVodDomainConfigsResponseDomainConfigs {
	s.DomainConfig = v
	return s
}

type DescribeVodDomainConfigsResponseDomainConfigsDomainConfig struct {
	FunctionName *string                                                                `json:"FunctionName,omitempty" xml:"FunctionName,omitempty" require:"true"`
	ConfigId     *string                                                                `json:"ConfigId,omitempty" xml:"ConfigId,omitempty" require:"true"`
	Status       *string                                                                `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	FunctionArgs *DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgs `json:"FunctionArgs,omitempty" xml:"FunctionArgs,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodDomainConfigsResponseDomainConfigsDomainConfig) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainConfigsResponseDomainConfigsDomainConfig) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainConfigsResponseDomainConfigsDomainConfig) SetFunctionName(v string) *DescribeVodDomainConfigsResponseDomainConfigsDomainConfig {
	s.FunctionName = &v
	return s
}

func (s *DescribeVodDomainConfigsResponseDomainConfigsDomainConfig) SetConfigId(v string) *DescribeVodDomainConfigsResponseDomainConfigsDomainConfig {
	s.ConfigId = &v
	return s
}

func (s *DescribeVodDomainConfigsResponseDomainConfigsDomainConfig) SetStatus(v string) *DescribeVodDomainConfigsResponseDomainConfigsDomainConfig {
	s.Status = &v
	return s
}

func (s *DescribeVodDomainConfigsResponseDomainConfigsDomainConfig) SetFunctionArgs(v *DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgs) *DescribeVodDomainConfigsResponseDomainConfigsDomainConfig {
	s.FunctionArgs = v
	return s
}

type DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgs struct {
	FunctionArg []*DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg `json:"FunctionArg,omitempty" xml:"FunctionArg,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgs) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgs) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgs) SetFunctionArg(v []*DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg) *DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgs {
	s.FunctionArg = v
	return s
}

type DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg struct {
	ArgName  *string `json:"ArgName,omitempty" xml:"ArgName,omitempty" require:"true"`
	ArgValue *string `json:"ArgValue,omitempty" xml:"ArgValue,omitempty" require:"true"`
}

func (s DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg) SetArgName(v string) *DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg {
	s.ArgName = &v
	return s
}

func (s *DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg) SetArgValue(v string) *DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg {
	s.ArgValue = &v
	return s
}

type DescribeVodUserDomainsRequest struct {
	SecurityToken    *string                             `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	PageSize         *int                                `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber       *int                                `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	DomainName       *string                             `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
	DomainStatus     *string                             `json:"DomainStatus,omitempty" xml:"DomainStatus,omitempty"`
	DomainSearchType *string                             `json:"DomainSearchType,omitempty" xml:"DomainSearchType,omitempty"`
	CdnType          *string                             `json:"CdnType,omitempty" xml:"CdnType,omitempty"`
	CheckDomainShow  *bool                               `json:"CheckDomainShow,omitempty" xml:"CheckDomainShow,omitempty"`
	FuncId           *string                             `json:"FuncId,omitempty" xml:"FuncId,omitempty"`
	FuncFilter       *string                             `json:"FuncFilter,omitempty" xml:"FuncFilter,omitempty"`
	Tag              []*DescribeVodUserDomainsRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s DescribeVodUserDomainsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodUserDomainsRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodUserDomainsRequest) SetSecurityToken(v string) *DescribeVodUserDomainsRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeVodUserDomainsRequest) SetPageSize(v int) *DescribeVodUserDomainsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeVodUserDomainsRequest) SetPageNumber(v int) *DescribeVodUserDomainsRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeVodUserDomainsRequest) SetDomainName(v string) *DescribeVodUserDomainsRequest {
	s.DomainName = &v
	return s
}

func (s *DescribeVodUserDomainsRequest) SetDomainStatus(v string) *DescribeVodUserDomainsRequest {
	s.DomainStatus = &v
	return s
}

func (s *DescribeVodUserDomainsRequest) SetDomainSearchType(v string) *DescribeVodUserDomainsRequest {
	s.DomainSearchType = &v
	return s
}

func (s *DescribeVodUserDomainsRequest) SetCdnType(v string) *DescribeVodUserDomainsRequest {
	s.CdnType = &v
	return s
}

func (s *DescribeVodUserDomainsRequest) SetCheckDomainShow(v bool) *DescribeVodUserDomainsRequest {
	s.CheckDomainShow = &v
	return s
}

func (s *DescribeVodUserDomainsRequest) SetFuncId(v string) *DescribeVodUserDomainsRequest {
	s.FuncId = &v
	return s
}

func (s *DescribeVodUserDomainsRequest) SetFuncFilter(v string) *DescribeVodUserDomainsRequest {
	s.FuncFilter = &v
	return s
}

func (s *DescribeVodUserDomainsRequest) SetTag(v []*DescribeVodUserDomainsRequestTag) *DescribeVodUserDomainsRequest {
	s.Tag = v
	return s
}

type DescribeVodUserDomainsRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s DescribeVodUserDomainsRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodUserDomainsRequestTag) GoString() string {
	return s.String()
}

func (s *DescribeVodUserDomainsRequestTag) SetKey(v string) *DescribeVodUserDomainsRequestTag {
	s.Key = &v
	return s
}

func (s *DescribeVodUserDomainsRequestTag) SetValue(v string) *DescribeVodUserDomainsRequestTag {
	s.Value = &v
	return s
}

type DescribeVodUserDomainsResponse struct {
	RequestId  *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageNumber *int64                                 `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int64                                 `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int64                                 `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Domains    *DescribeVodUserDomainsResponseDomains `json:"Domains,omitempty" xml:"Domains,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodUserDomainsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodUserDomainsResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodUserDomainsResponse) SetRequestId(v string) *DescribeVodUserDomainsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodUserDomainsResponse) SetPageNumber(v int64) *DescribeVodUserDomainsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeVodUserDomainsResponse) SetPageSize(v int64) *DescribeVodUserDomainsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeVodUserDomainsResponse) SetTotalCount(v int64) *DescribeVodUserDomainsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeVodUserDomainsResponse) SetDomains(v *DescribeVodUserDomainsResponseDomains) *DescribeVodUserDomainsResponse {
	s.Domains = v
	return s
}

type DescribeVodUserDomainsResponseDomains struct {
	PageData []*DescribeVodUserDomainsResponseDomainsPageData `json:"PageData,omitempty" xml:"PageData,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodUserDomainsResponseDomains) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodUserDomainsResponseDomains) GoString() string {
	return s.String()
}

func (s *DescribeVodUserDomainsResponseDomains) SetPageData(v []*DescribeVodUserDomainsResponseDomainsPageData) *DescribeVodUserDomainsResponseDomains {
	s.PageData = v
	return s
}

type DescribeVodUserDomainsResponseDomainsPageData struct {
	DomainName   *string                                               `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	Cname        *string                                               `json:"Cname,omitempty" xml:"Cname,omitempty" require:"true"`
	CdnType      *string                                               `json:"CdnType,omitempty" xml:"CdnType,omitempty" require:"true"`
	DomainStatus *string                                               `json:"DomainStatus,omitempty" xml:"DomainStatus,omitempty" require:"true"`
	GmtCreated   *string                                               `json:"GmtCreated,omitempty" xml:"GmtCreated,omitempty" require:"true"`
	GmtModified  *string                                               `json:"GmtModified,omitempty" xml:"GmtModified,omitempty" require:"true"`
	Description  *string                                               `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	SslProtocol  *string                                               `json:"SslProtocol,omitempty" xml:"SslProtocol,omitempty" require:"true"`
	Weight       *string                                               `json:"Weight,omitempty" xml:"Weight,omitempty" require:"true"`
	Sandbox      *string                                               `json:"Sandbox,omitempty" xml:"Sandbox,omitempty" require:"true"`
	Sources      *DescribeVodUserDomainsResponseDomainsPageDataSources `json:"Sources,omitempty" xml:"Sources,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodUserDomainsResponseDomainsPageData) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodUserDomainsResponseDomainsPageData) GoString() string {
	return s.String()
}

func (s *DescribeVodUserDomainsResponseDomainsPageData) SetDomainName(v string) *DescribeVodUserDomainsResponseDomainsPageData {
	s.DomainName = &v
	return s
}

func (s *DescribeVodUserDomainsResponseDomainsPageData) SetCname(v string) *DescribeVodUserDomainsResponseDomainsPageData {
	s.Cname = &v
	return s
}

func (s *DescribeVodUserDomainsResponseDomainsPageData) SetCdnType(v string) *DescribeVodUserDomainsResponseDomainsPageData {
	s.CdnType = &v
	return s
}

func (s *DescribeVodUserDomainsResponseDomainsPageData) SetDomainStatus(v string) *DescribeVodUserDomainsResponseDomainsPageData {
	s.DomainStatus = &v
	return s
}

func (s *DescribeVodUserDomainsResponseDomainsPageData) SetGmtCreated(v string) *DescribeVodUserDomainsResponseDomainsPageData {
	s.GmtCreated = &v
	return s
}

func (s *DescribeVodUserDomainsResponseDomainsPageData) SetGmtModified(v string) *DescribeVodUserDomainsResponseDomainsPageData {
	s.GmtModified = &v
	return s
}

func (s *DescribeVodUserDomainsResponseDomainsPageData) SetDescription(v string) *DescribeVodUserDomainsResponseDomainsPageData {
	s.Description = &v
	return s
}

func (s *DescribeVodUserDomainsResponseDomainsPageData) SetSslProtocol(v string) *DescribeVodUserDomainsResponseDomainsPageData {
	s.SslProtocol = &v
	return s
}

func (s *DescribeVodUserDomainsResponseDomainsPageData) SetWeight(v string) *DescribeVodUserDomainsResponseDomainsPageData {
	s.Weight = &v
	return s
}

func (s *DescribeVodUserDomainsResponseDomainsPageData) SetSandbox(v string) *DescribeVodUserDomainsResponseDomainsPageData {
	s.Sandbox = &v
	return s
}

func (s *DescribeVodUserDomainsResponseDomainsPageData) SetSources(v *DescribeVodUserDomainsResponseDomainsPageDataSources) *DescribeVodUserDomainsResponseDomainsPageData {
	s.Sources = v
	return s
}

type DescribeVodUserDomainsResponseDomainsPageDataSources struct {
	Source []*DescribeVodUserDomainsResponseDomainsPageDataSourcesSource `json:"Source,omitempty" xml:"Source,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodUserDomainsResponseDomainsPageDataSources) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodUserDomainsResponseDomainsPageDataSources) GoString() string {
	return s.String()
}

func (s *DescribeVodUserDomainsResponseDomainsPageDataSources) SetSource(v []*DescribeVodUserDomainsResponseDomainsPageDataSourcesSource) *DescribeVodUserDomainsResponseDomainsPageDataSources {
	s.Source = v
	return s
}

type DescribeVodUserDomainsResponseDomainsPageDataSourcesSource struct {
	Type     *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Content  *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
	Port     *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
	Priority *string `json:"Priority,omitempty" xml:"Priority,omitempty" require:"true"`
}

func (s DescribeVodUserDomainsResponseDomainsPageDataSourcesSource) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodUserDomainsResponseDomainsPageDataSourcesSource) GoString() string {
	return s.String()
}

func (s *DescribeVodUserDomainsResponseDomainsPageDataSourcesSource) SetType(v string) *DescribeVodUserDomainsResponseDomainsPageDataSourcesSource {
	s.Type = &v
	return s
}

func (s *DescribeVodUserDomainsResponseDomainsPageDataSourcesSource) SetContent(v string) *DescribeVodUserDomainsResponseDomainsPageDataSourcesSource {
	s.Content = &v
	return s
}

func (s *DescribeVodUserDomainsResponseDomainsPageDataSourcesSource) SetPort(v int) *DescribeVodUserDomainsResponseDomainsPageDataSourcesSource {
	s.Port = &v
	return s
}

func (s *DescribeVodUserDomainsResponseDomainsPageDataSourcesSource) SetPriority(v string) *DescribeVodUserDomainsResponseDomainsPageDataSourcesSource {
	s.Priority = &v
	return s
}

type UpdateVodDomainRequest struct {
	SecurityToken  *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	DomainName     *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	Sources        *string `json:"Sources,omitempty" xml:"Sources,omitempty"`
	TopLevelDomain *string `json:"TopLevelDomain,omitempty" xml:"TopLevelDomain,omitempty"`
}

func (s UpdateVodDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateVodDomainRequest) GoString() string {
	return s.String()
}

func (s *UpdateVodDomainRequest) SetSecurityToken(v string) *UpdateVodDomainRequest {
	s.SecurityToken = &v
	return s
}

func (s *UpdateVodDomainRequest) SetDomainName(v string) *UpdateVodDomainRequest {
	s.DomainName = &v
	return s
}

func (s *UpdateVodDomainRequest) SetSources(v string) *UpdateVodDomainRequest {
	s.Sources = &v
	return s
}

func (s *UpdateVodDomainRequest) SetTopLevelDomain(v string) *UpdateVodDomainRequest {
	s.TopLevelDomain = &v
	return s
}

type UpdateVodDomainResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateVodDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateVodDomainResponse) GoString() string {
	return s.String()
}

func (s *UpdateVodDomainResponse) SetRequestId(v string) *UpdateVodDomainResponse {
	s.RequestId = &v
	return s
}

type RefreshVodObjectCachesRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	ObjectPath    *string `json:"ObjectPath,omitempty" xml:"ObjectPath,omitempty" require:"true"`
	ObjectType    *string `json:"ObjectType,omitempty" xml:"ObjectType,omitempty"`
}

func (s RefreshVodObjectCachesRequest) String() string {
	return tea.Prettify(s)
}

func (s RefreshVodObjectCachesRequest) GoString() string {
	return s.String()
}

func (s *RefreshVodObjectCachesRequest) SetSecurityToken(v string) *RefreshVodObjectCachesRequest {
	s.SecurityToken = &v
	return s
}

func (s *RefreshVodObjectCachesRequest) SetObjectPath(v string) *RefreshVodObjectCachesRequest {
	s.ObjectPath = &v
	return s
}

func (s *RefreshVodObjectCachesRequest) SetObjectType(v string) *RefreshVodObjectCachesRequest {
	s.ObjectType = &v
	return s
}

type RefreshVodObjectCachesResponse struct {
	RequestId     *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RefreshTaskId *string `json:"RefreshTaskId,omitempty" xml:"RefreshTaskId,omitempty" require:"true"`
}

func (s RefreshVodObjectCachesResponse) String() string {
	return tea.Prettify(s)
}

func (s RefreshVodObjectCachesResponse) GoString() string {
	return s.String()
}

func (s *RefreshVodObjectCachesResponse) SetRequestId(v string) *RefreshVodObjectCachesResponse {
	s.RequestId = &v
	return s
}

func (s *RefreshVodObjectCachesResponse) SetRefreshTaskId(v string) *RefreshVodObjectCachesResponse {
	s.RefreshTaskId = &v
	return s
}

type PreloadVodObjectCachesRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	ObjectPath    *string `json:"ObjectPath,omitempty" xml:"ObjectPath,omitempty" require:"true"`
}

func (s PreloadVodObjectCachesRequest) String() string {
	return tea.Prettify(s)
}

func (s PreloadVodObjectCachesRequest) GoString() string {
	return s.String()
}

func (s *PreloadVodObjectCachesRequest) SetSecurityToken(v string) *PreloadVodObjectCachesRequest {
	s.SecurityToken = &v
	return s
}

func (s *PreloadVodObjectCachesRequest) SetObjectPath(v string) *PreloadVodObjectCachesRequest {
	s.ObjectPath = &v
	return s
}

type PreloadVodObjectCachesResponse struct {
	RequestId     *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PreloadTaskId *string `json:"PreloadTaskId,omitempty" xml:"PreloadTaskId,omitempty" require:"true"`
}

func (s PreloadVodObjectCachesResponse) String() string {
	return tea.Prettify(s)
}

func (s PreloadVodObjectCachesResponse) GoString() string {
	return s.String()
}

func (s *PreloadVodObjectCachesResponse) SetRequestId(v string) *PreloadVodObjectCachesResponse {
	s.RequestId = &v
	return s
}

func (s *PreloadVodObjectCachesResponse) SetPreloadTaskId(v string) *PreloadVodObjectCachesResponse {
	s.PreloadTaskId = &v
	return s
}

type BatchStartVodDomainRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	DomainNames   *string `json:"DomainNames,omitempty" xml:"DomainNames,omitempty" require:"true"`
}

func (s BatchStartVodDomainRequest) String() string {
	return tea.Prettify(s)
}

func (s BatchStartVodDomainRequest) GoString() string {
	return s.String()
}

func (s *BatchStartVodDomainRequest) SetSecurityToken(v string) *BatchStartVodDomainRequest {
	s.SecurityToken = &v
	return s
}

func (s *BatchStartVodDomainRequest) SetDomainNames(v string) *BatchStartVodDomainRequest {
	s.DomainNames = &v
	return s
}

type BatchStartVodDomainResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s BatchStartVodDomainResponse) String() string {
	return tea.Prettify(s)
}

func (s BatchStartVodDomainResponse) GoString() string {
	return s.String()
}

func (s *BatchStartVodDomainResponse) SetRequestId(v string) *BatchStartVodDomainResponse {
	s.RequestId = &v
	return s
}

type DescribeVodDomainDetailRequest struct {
	SecurityToken *string `json:"SecurityToken,omitempty" xml:"SecurityToken,omitempty"`
	DomainName    *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
}

func (s DescribeVodDomainDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainDetailRequest) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainDetailRequest) SetSecurityToken(v string) *DescribeVodDomainDetailRequest {
	s.SecurityToken = &v
	return s
}

func (s *DescribeVodDomainDetailRequest) SetDomainName(v string) *DescribeVodDomainDetailRequest {
	s.DomainName = &v
	return s
}

type DescribeVodDomainDetailResponse struct {
	RequestId    *string                                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainDetail *DescribeVodDomainDetailResponseDomainDetail `json:"DomainDetail,omitempty" xml:"DomainDetail,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodDomainDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainDetailResponse) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainDetailResponse) SetRequestId(v string) *DescribeVodDomainDetailResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeVodDomainDetailResponse) SetDomainDetail(v *DescribeVodDomainDetailResponseDomainDetail) *DescribeVodDomainDetailResponse {
	s.DomainDetail = v
	return s
}

type DescribeVodDomainDetailResponseDomainDetail struct {
	GmtCreated   *string                                             `json:"GmtCreated,omitempty" xml:"GmtCreated,omitempty" require:"true"`
	GmtModified  *string                                             `json:"GmtModified,omitempty" xml:"GmtModified,omitempty" require:"true"`
	DomainStatus *string                                             `json:"DomainStatus,omitempty" xml:"DomainStatus,omitempty" require:"true"`
	Cname        *string                                             `json:"Cname,omitempty" xml:"Cname,omitempty" require:"true"`
	DomainName   *string                                             `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	Description  *string                                             `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	SSLProtocol  *string                                             `json:"SSLProtocol,omitempty" xml:"SSLProtocol,omitempty" require:"true"`
	SSLPub       *string                                             `json:"SSLPub,omitempty" xml:"SSLPub,omitempty" require:"true"`
	Scope        *string                                             `json:"Scope,omitempty" xml:"Scope,omitempty" require:"true"`
	CertName     *string                                             `json:"CertName,omitempty" xml:"CertName,omitempty" require:"true"`
	Weight       *string                                             `json:"Weight,omitempty" xml:"Weight,omitempty" require:"true"`
	Sources      *DescribeVodDomainDetailResponseDomainDetailSources `json:"Sources,omitempty" xml:"Sources,omitempty" require:"true" type:"Struct"`
}

func (s DescribeVodDomainDetailResponseDomainDetail) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainDetailResponseDomainDetail) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainDetailResponseDomainDetail) SetGmtCreated(v string) *DescribeVodDomainDetailResponseDomainDetail {
	s.GmtCreated = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetail) SetGmtModified(v string) *DescribeVodDomainDetailResponseDomainDetail {
	s.GmtModified = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetail) SetDomainStatus(v string) *DescribeVodDomainDetailResponseDomainDetail {
	s.DomainStatus = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetail) SetCname(v string) *DescribeVodDomainDetailResponseDomainDetail {
	s.Cname = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetail) SetDomainName(v string) *DescribeVodDomainDetailResponseDomainDetail {
	s.DomainName = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetail) SetDescription(v string) *DescribeVodDomainDetailResponseDomainDetail {
	s.Description = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetail) SetSSLProtocol(v string) *DescribeVodDomainDetailResponseDomainDetail {
	s.SSLProtocol = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetail) SetSSLPub(v string) *DescribeVodDomainDetailResponseDomainDetail {
	s.SSLPub = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetail) SetScope(v string) *DescribeVodDomainDetailResponseDomainDetail {
	s.Scope = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetail) SetCertName(v string) *DescribeVodDomainDetailResponseDomainDetail {
	s.CertName = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetail) SetWeight(v string) *DescribeVodDomainDetailResponseDomainDetail {
	s.Weight = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetail) SetSources(v *DescribeVodDomainDetailResponseDomainDetailSources) *DescribeVodDomainDetailResponseDomainDetail {
	s.Sources = v
	return s
}

type DescribeVodDomainDetailResponseDomainDetailSources struct {
	Source []*DescribeVodDomainDetailResponseDomainDetailSourcesSource `json:"Source,omitempty" xml:"Source,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeVodDomainDetailResponseDomainDetailSources) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainDetailResponseDomainDetailSources) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainDetailResponseDomainDetailSources) SetSource(v []*DescribeVodDomainDetailResponseDomainDetailSourcesSource) *DescribeVodDomainDetailResponseDomainDetailSources {
	s.Source = v
	return s
}

type DescribeVodDomainDetailResponseDomainDetailSourcesSource struct {
	Content  *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
	Type     *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Port     *int    `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
	Enabled  *string `json:"Enabled,omitempty" xml:"Enabled,omitempty" require:"true"`
	Priority *string `json:"Priority,omitempty" xml:"Priority,omitempty" require:"true"`
}

func (s DescribeVodDomainDetailResponseDomainDetailSourcesSource) String() string {
	return tea.Prettify(s)
}

func (s DescribeVodDomainDetailResponseDomainDetailSourcesSource) GoString() string {
	return s.String()
}

func (s *DescribeVodDomainDetailResponseDomainDetailSourcesSource) SetContent(v string) *DescribeVodDomainDetailResponseDomainDetailSourcesSource {
	s.Content = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetailSourcesSource) SetType(v string) *DescribeVodDomainDetailResponseDomainDetailSourcesSource {
	s.Type = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetailSourcesSource) SetPort(v int) *DescribeVodDomainDetailResponseDomainDetailSourcesSource {
	s.Port = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetailSourcesSource) SetEnabled(v string) *DescribeVodDomainDetailResponseDomainDetailSourcesSource {
	s.Enabled = &v
	return s
}

func (s *DescribeVodDomainDetailResponseDomainDetailSourcesSource) SetPriority(v string) *DescribeVodDomainDetailResponseDomainDetailSourcesSource {
	s.Priority = &v
	return s
}

type DeleteVodTemplateRequest struct {
	VodTemplateId *string `json:"VodTemplateId,omitempty" xml:"VodTemplateId,omitempty" require:"true"`
}

func (s DeleteVodTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteVodTemplateRequest) GoString() string {
	return s.String()
}

func (s *DeleteVodTemplateRequest) SetVodTemplateId(v string) *DeleteVodTemplateRequest {
	s.VodTemplateId = &v
	return s
}

type DeleteVodTemplateResponse struct {
	RequestId     *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	VodTemplateId *string `json:"VodTemplateId,omitempty" xml:"VodTemplateId,omitempty" require:"true"`
}

func (s DeleteVodTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteVodTemplateResponse) GoString() string {
	return s.String()
}

func (s *DeleteVodTemplateResponse) SetRequestId(v string) *DeleteVodTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteVodTemplateResponse) SetVodTemplateId(v string) *DeleteVodTemplateResponse {
	s.VodTemplateId = &v
	return s
}

type GetVodTemplateRequest struct {
	VodTemplateId *string `json:"VodTemplateId,omitempty" xml:"VodTemplateId,omitempty" require:"true"`
}

func (s GetVodTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s GetVodTemplateRequest) GoString() string {
	return s.String()
}

func (s *GetVodTemplateRequest) SetVodTemplateId(v string) *GetVodTemplateRequest {
	s.VodTemplateId = &v
	return s
}

type GetVodTemplateResponse struct {
	RequestId       *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	VodTemplateInfo *GetVodTemplateResponseVodTemplateInfo `json:"VodTemplateInfo,omitempty" xml:"VodTemplateInfo,omitempty" require:"true" type:"Struct"`
}

func (s GetVodTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s GetVodTemplateResponse) GoString() string {
	return s.String()
}

func (s *GetVodTemplateResponse) SetRequestId(v string) *GetVodTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *GetVodTemplateResponse) SetVodTemplateInfo(v *GetVodTemplateResponseVodTemplateInfo) *GetVodTemplateResponse {
	s.VodTemplateInfo = v
	return s
}

type GetVodTemplateResponseVodTemplateInfo struct {
	Name            *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	VodTemplateId   *string `json:"VodTemplateId,omitempty" xml:"VodTemplateId,omitempty" require:"true"`
	TemplateType    *string `json:"TemplateType,omitempty" xml:"TemplateType,omitempty" require:"true"`
	SubTemplateType *string `json:"SubTemplateType,omitempty" xml:"SubTemplateType,omitempty" require:"true"`
	Source          *string `json:"Source,omitempty" xml:"Source,omitempty" require:"true"`
	IsDefault       *string `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
	TemplateConfig  *string `json:"TemplateConfig,omitempty" xml:"TemplateConfig,omitempty" require:"true"`
	CreationTime    *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModifyTime      *string `json:"ModifyTime,omitempty" xml:"ModifyTime,omitempty" require:"true"`
}

func (s GetVodTemplateResponseVodTemplateInfo) String() string {
	return tea.Prettify(s)
}

func (s GetVodTemplateResponseVodTemplateInfo) GoString() string {
	return s.String()
}

func (s *GetVodTemplateResponseVodTemplateInfo) SetName(v string) *GetVodTemplateResponseVodTemplateInfo {
	s.Name = &v
	return s
}

func (s *GetVodTemplateResponseVodTemplateInfo) SetVodTemplateId(v string) *GetVodTemplateResponseVodTemplateInfo {
	s.VodTemplateId = &v
	return s
}

func (s *GetVodTemplateResponseVodTemplateInfo) SetTemplateType(v string) *GetVodTemplateResponseVodTemplateInfo {
	s.TemplateType = &v
	return s
}

func (s *GetVodTemplateResponseVodTemplateInfo) SetSubTemplateType(v string) *GetVodTemplateResponseVodTemplateInfo {
	s.SubTemplateType = &v
	return s
}

func (s *GetVodTemplateResponseVodTemplateInfo) SetSource(v string) *GetVodTemplateResponseVodTemplateInfo {
	s.Source = &v
	return s
}

func (s *GetVodTemplateResponseVodTemplateInfo) SetIsDefault(v string) *GetVodTemplateResponseVodTemplateInfo {
	s.IsDefault = &v
	return s
}

func (s *GetVodTemplateResponseVodTemplateInfo) SetTemplateConfig(v string) *GetVodTemplateResponseVodTemplateInfo {
	s.TemplateConfig = &v
	return s
}

func (s *GetVodTemplateResponseVodTemplateInfo) SetCreationTime(v string) *GetVodTemplateResponseVodTemplateInfo {
	s.CreationTime = &v
	return s
}

func (s *GetVodTemplateResponseVodTemplateInfo) SetModifyTime(v string) *GetVodTemplateResponseVodTemplateInfo {
	s.ModifyTime = &v
	return s
}

type ListVodTemplateRequest struct {
	TemplateType *string `json:"TemplateType,omitempty" xml:"TemplateType,omitempty" require:"true"`
	AppId        *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
}

func (s ListVodTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s ListVodTemplateRequest) GoString() string {
	return s.String()
}

func (s *ListVodTemplateRequest) SetTemplateType(v string) *ListVodTemplateRequest {
	s.TemplateType = &v
	return s
}

func (s *ListVodTemplateRequest) SetAppId(v string) *ListVodTemplateRequest {
	s.AppId = &v
	return s
}

type ListVodTemplateResponse struct {
	RequestId           *string                                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	VodTemplateInfoList []*ListVodTemplateResponseVodTemplateInfoList `json:"VodTemplateInfoList,omitempty" xml:"VodTemplateInfoList,omitempty" require:"true" type:"Repeated"`
}

func (s ListVodTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s ListVodTemplateResponse) GoString() string {
	return s.String()
}

func (s *ListVodTemplateResponse) SetRequestId(v string) *ListVodTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *ListVodTemplateResponse) SetVodTemplateInfoList(v []*ListVodTemplateResponseVodTemplateInfoList) *ListVodTemplateResponse {
	s.VodTemplateInfoList = v
	return s
}

type ListVodTemplateResponseVodTemplateInfoList struct {
	Name            *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	VodTemplateId   *string `json:"VodTemplateId,omitempty" xml:"VodTemplateId,omitempty" require:"true"`
	TemplateType    *string `json:"TemplateType,omitempty" xml:"TemplateType,omitempty" require:"true"`
	SubTemplateType *string `json:"SubTemplateType,omitempty" xml:"SubTemplateType,omitempty" require:"true"`
	Source          *string `json:"Source,omitempty" xml:"Source,omitempty" require:"true"`
	IsDefault       *string `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
	TemplateConfig  *string `json:"TemplateConfig,omitempty" xml:"TemplateConfig,omitempty" require:"true"`
	CreationTime    *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModifyTime      *string `json:"ModifyTime,omitempty" xml:"ModifyTime,omitempty" require:"true"`
	AppId           *string `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
}

func (s ListVodTemplateResponseVodTemplateInfoList) String() string {
	return tea.Prettify(s)
}

func (s ListVodTemplateResponseVodTemplateInfoList) GoString() string {
	return s.String()
}

func (s *ListVodTemplateResponseVodTemplateInfoList) SetName(v string) *ListVodTemplateResponseVodTemplateInfoList {
	s.Name = &v
	return s
}

func (s *ListVodTemplateResponseVodTemplateInfoList) SetVodTemplateId(v string) *ListVodTemplateResponseVodTemplateInfoList {
	s.VodTemplateId = &v
	return s
}

func (s *ListVodTemplateResponseVodTemplateInfoList) SetTemplateType(v string) *ListVodTemplateResponseVodTemplateInfoList {
	s.TemplateType = &v
	return s
}

func (s *ListVodTemplateResponseVodTemplateInfoList) SetSubTemplateType(v string) *ListVodTemplateResponseVodTemplateInfoList {
	s.SubTemplateType = &v
	return s
}

func (s *ListVodTemplateResponseVodTemplateInfoList) SetSource(v string) *ListVodTemplateResponseVodTemplateInfoList {
	s.Source = &v
	return s
}

func (s *ListVodTemplateResponseVodTemplateInfoList) SetIsDefault(v string) *ListVodTemplateResponseVodTemplateInfoList {
	s.IsDefault = &v
	return s
}

func (s *ListVodTemplateResponseVodTemplateInfoList) SetTemplateConfig(v string) *ListVodTemplateResponseVodTemplateInfoList {
	s.TemplateConfig = &v
	return s
}

func (s *ListVodTemplateResponseVodTemplateInfoList) SetCreationTime(v string) *ListVodTemplateResponseVodTemplateInfoList {
	s.CreationTime = &v
	return s
}

func (s *ListVodTemplateResponseVodTemplateInfoList) SetModifyTime(v string) *ListVodTemplateResponseVodTemplateInfoList {
	s.ModifyTime = &v
	return s
}

func (s *ListVodTemplateResponseVodTemplateInfoList) SetAppId(v string) *ListVodTemplateResponseVodTemplateInfoList {
	s.AppId = &v
	return s
}

type UpdateVodTemplateRequest struct {
	VodTemplateId  *string `json:"VodTemplateId,omitempty" xml:"VodTemplateId,omitempty" require:"true"`
	Name           *string `json:"Name,omitempty" xml:"Name,omitempty"`
	TemplateConfig *string `json:"TemplateConfig,omitempty" xml:"TemplateConfig,omitempty"`
}

func (s UpdateVodTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateVodTemplateRequest) GoString() string {
	return s.String()
}

func (s *UpdateVodTemplateRequest) SetVodTemplateId(v string) *UpdateVodTemplateRequest {
	s.VodTemplateId = &v
	return s
}

func (s *UpdateVodTemplateRequest) SetName(v string) *UpdateVodTemplateRequest {
	s.Name = &v
	return s
}

func (s *UpdateVodTemplateRequest) SetTemplateConfig(v string) *UpdateVodTemplateRequest {
	s.TemplateConfig = &v
	return s
}

type UpdateVodTemplateResponse struct {
	RequestId     *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	VodTemplateId *string `json:"VodTemplateId,omitempty" xml:"VodTemplateId,omitempty" require:"true"`
}

func (s UpdateVodTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateVodTemplateResponse) GoString() string {
	return s.String()
}

func (s *UpdateVodTemplateResponse) SetRequestId(v string) *UpdateVodTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateVodTemplateResponse) SetVodTemplateId(v string) *UpdateVodTemplateResponse {
	s.VodTemplateId = &v
	return s
}

type AddVodTemplateRequest struct {
	Name            *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	TemplateType    *string `json:"TemplateType,omitempty" xml:"TemplateType,omitempty" require:"true"`
	SubTemplateType *string `json:"SubTemplateType,omitempty" xml:"SubTemplateType,omitempty"`
	TemplateConfig  *string `json:"TemplateConfig,omitempty" xml:"TemplateConfig,omitempty" require:"true"`
	AppId           *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
}

func (s AddVodTemplateRequest) String() string {
	return tea.Prettify(s)
}

func (s AddVodTemplateRequest) GoString() string {
	return s.String()
}

func (s *AddVodTemplateRequest) SetName(v string) *AddVodTemplateRequest {
	s.Name = &v
	return s
}

func (s *AddVodTemplateRequest) SetTemplateType(v string) *AddVodTemplateRequest {
	s.TemplateType = &v
	return s
}

func (s *AddVodTemplateRequest) SetSubTemplateType(v string) *AddVodTemplateRequest {
	s.SubTemplateType = &v
	return s
}

func (s *AddVodTemplateRequest) SetTemplateConfig(v string) *AddVodTemplateRequest {
	s.TemplateConfig = &v
	return s
}

func (s *AddVodTemplateRequest) SetAppId(v string) *AddVodTemplateRequest {
	s.AppId = &v
	return s
}

type AddVodTemplateResponse struct {
	RequestId     *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	VodTemplateId *string `json:"VodTemplateId,omitempty" xml:"VodTemplateId,omitempty" require:"true"`
}

func (s AddVodTemplateResponse) String() string {
	return tea.Prettify(s)
}

func (s AddVodTemplateResponse) GoString() string {
	return s.String()
}

func (s *AddVodTemplateResponse) SetRequestId(v string) *AddVodTemplateResponse {
	s.RequestId = &v
	return s
}

func (s *AddVodTemplateResponse) SetVodTemplateId(v string) *AddVodTemplateResponse {
	s.VodTemplateId = &v
	return s
}

type CreateUploadAttachedMediaRequest struct {
	Title           *string `json:"Title,omitempty" xml:"Title,omitempty"`
	BusinessType    *string `json:"BusinessType,omitempty" xml:"BusinessType,omitempty" require:"true"`
	MediaExt        *string `json:"MediaExt,omitempty" xml:"MediaExt,omitempty"`
	FileName        *string `json:"FileName,omitempty" xml:"FileName,omitempty"`
	FileSize        *string `json:"FileSize,omitempty" xml:"FileSize,omitempty"`
	Tags            *string `json:"Tags,omitempty" xml:"Tags,omitempty"`
	CateId          *int64  `json:"CateId,omitempty" xml:"CateId,omitempty"`
	StorageLocation *string `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty"`
	Description     *string `json:"Description,omitempty" xml:"Description,omitempty"`
	UserData        *string `json:"UserData,omitempty" xml:"UserData,omitempty"`
	CateIds         *string `json:"CateIds,omitempty" xml:"CateIds,omitempty"`
	AppId           *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
	Icon            *string `json:"Icon,omitempty" xml:"Icon,omitempty"`
}

func (s CreateUploadAttachedMediaRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateUploadAttachedMediaRequest) GoString() string {
	return s.String()
}

func (s *CreateUploadAttachedMediaRequest) SetTitle(v string) *CreateUploadAttachedMediaRequest {
	s.Title = &v
	return s
}

func (s *CreateUploadAttachedMediaRequest) SetBusinessType(v string) *CreateUploadAttachedMediaRequest {
	s.BusinessType = &v
	return s
}

func (s *CreateUploadAttachedMediaRequest) SetMediaExt(v string) *CreateUploadAttachedMediaRequest {
	s.MediaExt = &v
	return s
}

func (s *CreateUploadAttachedMediaRequest) SetFileName(v string) *CreateUploadAttachedMediaRequest {
	s.FileName = &v
	return s
}

func (s *CreateUploadAttachedMediaRequest) SetFileSize(v string) *CreateUploadAttachedMediaRequest {
	s.FileSize = &v
	return s
}

func (s *CreateUploadAttachedMediaRequest) SetTags(v string) *CreateUploadAttachedMediaRequest {
	s.Tags = &v
	return s
}

func (s *CreateUploadAttachedMediaRequest) SetCateId(v int64) *CreateUploadAttachedMediaRequest {
	s.CateId = &v
	return s
}

func (s *CreateUploadAttachedMediaRequest) SetStorageLocation(v string) *CreateUploadAttachedMediaRequest {
	s.StorageLocation = &v
	return s
}

func (s *CreateUploadAttachedMediaRequest) SetDescription(v string) *CreateUploadAttachedMediaRequest {
	s.Description = &v
	return s
}

func (s *CreateUploadAttachedMediaRequest) SetUserData(v string) *CreateUploadAttachedMediaRequest {
	s.UserData = &v
	return s
}

func (s *CreateUploadAttachedMediaRequest) SetCateIds(v string) *CreateUploadAttachedMediaRequest {
	s.CateIds = &v
	return s
}

func (s *CreateUploadAttachedMediaRequest) SetAppId(v string) *CreateUploadAttachedMediaRequest {
	s.AppId = &v
	return s
}

func (s *CreateUploadAttachedMediaRequest) SetIcon(v string) *CreateUploadAttachedMediaRequest {
	s.Icon = &v
	return s
}

type CreateUploadAttachedMediaResponse struct {
	RequestId     *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MediaId       *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	MediaURL      *string `json:"MediaURL,omitempty" xml:"MediaURL,omitempty" require:"true"`
	UploadAddress *string `json:"UploadAddress,omitempty" xml:"UploadAddress,omitempty" require:"true"`
	UploadAuth    *string `json:"UploadAuth,omitempty" xml:"UploadAuth,omitempty" require:"true"`
	FileURL       *string `json:"FileURL,omitempty" xml:"FileURL,omitempty" require:"true"`
}

func (s CreateUploadAttachedMediaResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateUploadAttachedMediaResponse) GoString() string {
	return s.String()
}

func (s *CreateUploadAttachedMediaResponse) SetRequestId(v string) *CreateUploadAttachedMediaResponse {
	s.RequestId = &v
	return s
}

func (s *CreateUploadAttachedMediaResponse) SetMediaId(v string) *CreateUploadAttachedMediaResponse {
	s.MediaId = &v
	return s
}

func (s *CreateUploadAttachedMediaResponse) SetMediaURL(v string) *CreateUploadAttachedMediaResponse {
	s.MediaURL = &v
	return s
}

func (s *CreateUploadAttachedMediaResponse) SetUploadAddress(v string) *CreateUploadAttachedMediaResponse {
	s.UploadAddress = &v
	return s
}

func (s *CreateUploadAttachedMediaResponse) SetUploadAuth(v string) *CreateUploadAttachedMediaResponse {
	s.UploadAuth = &v
	return s
}

func (s *CreateUploadAttachedMediaResponse) SetFileURL(v string) *CreateUploadAttachedMediaResponse {
	s.FileURL = &v
	return s
}

type RegisterMediaRequest struct {
	RegisterMetadatas *string `json:"RegisterMetadatas,omitempty" xml:"RegisterMetadatas,omitempty" require:"true"`
	TemplateGroupId   *string `json:"TemplateGroupId,omitempty" xml:"TemplateGroupId,omitempty"`
	UserData          *string `json:"UserData,omitempty" xml:"UserData,omitempty"`
	WorkflowId        *string `json:"WorkflowId,omitempty" xml:"WorkflowId,omitempty"`
}

func (s RegisterMediaRequest) String() string {
	return tea.Prettify(s)
}

func (s RegisterMediaRequest) GoString() string {
	return s.String()
}

func (s *RegisterMediaRequest) SetRegisterMetadatas(v string) *RegisterMediaRequest {
	s.RegisterMetadatas = &v
	return s
}

func (s *RegisterMediaRequest) SetTemplateGroupId(v string) *RegisterMediaRequest {
	s.TemplateGroupId = &v
	return s
}

func (s *RegisterMediaRequest) SetUserData(v string) *RegisterMediaRequest {
	s.UserData = &v
	return s
}

func (s *RegisterMediaRequest) SetWorkflowId(v string) *RegisterMediaRequest {
	s.WorkflowId = &v
	return s
}

type RegisterMediaResponse struct {
	RequestId           *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RegisteredMediaList []*RegisterMediaResponseRegisteredMediaList `json:"RegisteredMediaList,omitempty" xml:"RegisteredMediaList,omitempty" require:"true" type:"Repeated"`
	FailedFileURLs      []*string                                   `json:"FailedFileURLs,omitempty" xml:"FailedFileURLs,omitempty" require:"true" type:"Repeated"`
}

func (s RegisterMediaResponse) String() string {
	return tea.Prettify(s)
}

func (s RegisterMediaResponse) GoString() string {
	return s.String()
}

func (s *RegisterMediaResponse) SetRequestId(v string) *RegisterMediaResponse {
	s.RequestId = &v
	return s
}

func (s *RegisterMediaResponse) SetRegisteredMediaList(v []*RegisterMediaResponseRegisteredMediaList) *RegisterMediaResponse {
	s.RegisteredMediaList = v
	return s
}

func (s *RegisterMediaResponse) SetFailedFileURLs(v []*string) *RegisterMediaResponse {
	s.FailedFileURLs = v
	return s
}

type RegisterMediaResponseRegisteredMediaList struct {
	MediaId     *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	FileURL     *string `json:"FileURL,omitempty" xml:"FileURL,omitempty" require:"true"`
	NewRegister *bool   `json:"NewRegister,omitempty" xml:"NewRegister,omitempty" require:"true"`
}

func (s RegisterMediaResponseRegisteredMediaList) String() string {
	return tea.Prettify(s)
}

func (s RegisterMediaResponseRegisteredMediaList) GoString() string {
	return s.String()
}

func (s *RegisterMediaResponseRegisteredMediaList) SetMediaId(v string) *RegisterMediaResponseRegisteredMediaList {
	s.MediaId = &v
	return s
}

func (s *RegisterMediaResponseRegisteredMediaList) SetFileURL(v string) *RegisterMediaResponseRegisteredMediaList {
	s.FileURL = &v
	return s
}

func (s *RegisterMediaResponseRegisteredMediaList) SetNewRegister(v bool) *RegisterMediaResponseRegisteredMediaList {
	s.NewRegister = &v
	return s
}

type DeleteWatermarkRequest struct {
	WatermarkId *string `json:"WatermarkId,omitempty" xml:"WatermarkId,omitempty" require:"true"`
}

func (s DeleteWatermarkRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteWatermarkRequest) GoString() string {
	return s.String()
}

func (s *DeleteWatermarkRequest) SetWatermarkId(v string) *DeleteWatermarkRequest {
	s.WatermarkId = &v
	return s
}

type DeleteWatermarkResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteWatermarkResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteWatermarkResponse) GoString() string {
	return s.String()
}

func (s *DeleteWatermarkResponse) SetRequestId(v string) *DeleteWatermarkResponse {
	s.RequestId = &v
	return s
}

type GetWatermarkRequest struct {
	WatermarkId *string `json:"WatermarkId,omitempty" xml:"WatermarkId,omitempty" require:"true"`
}

func (s GetWatermarkRequest) String() string {
	return tea.Prettify(s)
}

func (s GetWatermarkRequest) GoString() string {
	return s.String()
}

func (s *GetWatermarkRequest) SetWatermarkId(v string) *GetWatermarkRequest {
	s.WatermarkId = &v
	return s
}

type GetWatermarkResponse struct {
	RequestId     *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	WatermarkInfo *GetWatermarkResponseWatermarkInfo `json:"WatermarkInfo,omitempty" xml:"WatermarkInfo,omitempty" require:"true" type:"Struct"`
}

func (s GetWatermarkResponse) String() string {
	return tea.Prettify(s)
}

func (s GetWatermarkResponse) GoString() string {
	return s.String()
}

func (s *GetWatermarkResponse) SetRequestId(v string) *GetWatermarkResponse {
	s.RequestId = &v
	return s
}

func (s *GetWatermarkResponse) SetWatermarkInfo(v *GetWatermarkResponseWatermarkInfo) *GetWatermarkResponse {
	s.WatermarkInfo = v
	return s
}

type GetWatermarkResponseWatermarkInfo struct {
	CreationTime    *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	Type            *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	IsDefault       *string `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
	WatermarkId     *string `json:"WatermarkId,omitempty" xml:"WatermarkId,omitempty" require:"true"`
	Name            *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	FileUrl         *string `json:"FileUrl,omitempty" xml:"FileUrl,omitempty" require:"true"`
	WatermarkConfig *string `json:"WatermarkConfig,omitempty" xml:"WatermarkConfig,omitempty" require:"true"`
	AppId           *string `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
}

func (s GetWatermarkResponseWatermarkInfo) String() string {
	return tea.Prettify(s)
}

func (s GetWatermarkResponseWatermarkInfo) GoString() string {
	return s.String()
}

func (s *GetWatermarkResponseWatermarkInfo) SetCreationTime(v string) *GetWatermarkResponseWatermarkInfo {
	s.CreationTime = &v
	return s
}

func (s *GetWatermarkResponseWatermarkInfo) SetType(v string) *GetWatermarkResponseWatermarkInfo {
	s.Type = &v
	return s
}

func (s *GetWatermarkResponseWatermarkInfo) SetIsDefault(v string) *GetWatermarkResponseWatermarkInfo {
	s.IsDefault = &v
	return s
}

func (s *GetWatermarkResponseWatermarkInfo) SetWatermarkId(v string) *GetWatermarkResponseWatermarkInfo {
	s.WatermarkId = &v
	return s
}

func (s *GetWatermarkResponseWatermarkInfo) SetName(v string) *GetWatermarkResponseWatermarkInfo {
	s.Name = &v
	return s
}

func (s *GetWatermarkResponseWatermarkInfo) SetFileUrl(v string) *GetWatermarkResponseWatermarkInfo {
	s.FileUrl = &v
	return s
}

func (s *GetWatermarkResponseWatermarkInfo) SetWatermarkConfig(v string) *GetWatermarkResponseWatermarkInfo {
	s.WatermarkConfig = &v
	return s
}

func (s *GetWatermarkResponseWatermarkInfo) SetAppId(v string) *GetWatermarkResponseWatermarkInfo {
	s.AppId = &v
	return s
}

type SetDefaultWatermarkRequest struct {
	WatermarkId *string `json:"WatermarkId,omitempty" xml:"WatermarkId,omitempty" require:"true"`
}

func (s SetDefaultWatermarkRequest) String() string {
	return tea.Prettify(s)
}

func (s SetDefaultWatermarkRequest) GoString() string {
	return s.String()
}

func (s *SetDefaultWatermarkRequest) SetWatermarkId(v string) *SetDefaultWatermarkRequest {
	s.WatermarkId = &v
	return s
}

type SetDefaultWatermarkResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetDefaultWatermarkResponse) String() string {
	return tea.Prettify(s)
}

func (s SetDefaultWatermarkResponse) GoString() string {
	return s.String()
}

func (s *SetDefaultWatermarkResponse) SetRequestId(v string) *SetDefaultWatermarkResponse {
	s.RequestId = &v
	return s
}

type ListWatermarkRequest struct {
	PageSize *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNo   *int    `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
	AppId    *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
}

func (s ListWatermarkRequest) String() string {
	return tea.Prettify(s)
}

func (s ListWatermarkRequest) GoString() string {
	return s.String()
}

func (s *ListWatermarkRequest) SetPageSize(v int) *ListWatermarkRequest {
	s.PageSize = &v
	return s
}

func (s *ListWatermarkRequest) SetPageNo(v int) *ListWatermarkRequest {
	s.PageNo = &v
	return s
}

func (s *ListWatermarkRequest) SetAppId(v string) *ListWatermarkRequest {
	s.AppId = &v
	return s
}

type ListWatermarkResponse struct {
	RequestId      *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	WatermarkInfos []*ListWatermarkResponseWatermarkInfos `json:"WatermarkInfos,omitempty" xml:"WatermarkInfos,omitempty" require:"true" type:"Repeated"`
}

func (s ListWatermarkResponse) String() string {
	return tea.Prettify(s)
}

func (s ListWatermarkResponse) GoString() string {
	return s.String()
}

func (s *ListWatermarkResponse) SetRequestId(v string) *ListWatermarkResponse {
	s.RequestId = &v
	return s
}

func (s *ListWatermarkResponse) SetWatermarkInfos(v []*ListWatermarkResponseWatermarkInfos) *ListWatermarkResponse {
	s.WatermarkInfos = v
	return s
}

type ListWatermarkResponseWatermarkInfos struct {
	CreationTime    *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	Type            *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	IsDefault       *string `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
	WatermarkId     *string `json:"WatermarkId,omitempty" xml:"WatermarkId,omitempty" require:"true"`
	Name            *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	FileUrl         *string `json:"FileUrl,omitempty" xml:"FileUrl,omitempty" require:"true"`
	WatermarkConfig *string `json:"WatermarkConfig,omitempty" xml:"WatermarkConfig,omitempty" require:"true"`
	AppId           *string `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
}

func (s ListWatermarkResponseWatermarkInfos) String() string {
	return tea.Prettify(s)
}

func (s ListWatermarkResponseWatermarkInfos) GoString() string {
	return s.String()
}

func (s *ListWatermarkResponseWatermarkInfos) SetCreationTime(v string) *ListWatermarkResponseWatermarkInfos {
	s.CreationTime = &v
	return s
}

func (s *ListWatermarkResponseWatermarkInfos) SetType(v string) *ListWatermarkResponseWatermarkInfos {
	s.Type = &v
	return s
}

func (s *ListWatermarkResponseWatermarkInfos) SetIsDefault(v string) *ListWatermarkResponseWatermarkInfos {
	s.IsDefault = &v
	return s
}

func (s *ListWatermarkResponseWatermarkInfos) SetWatermarkId(v string) *ListWatermarkResponseWatermarkInfos {
	s.WatermarkId = &v
	return s
}

func (s *ListWatermarkResponseWatermarkInfos) SetName(v string) *ListWatermarkResponseWatermarkInfos {
	s.Name = &v
	return s
}

func (s *ListWatermarkResponseWatermarkInfos) SetFileUrl(v string) *ListWatermarkResponseWatermarkInfos {
	s.FileUrl = &v
	return s
}

func (s *ListWatermarkResponseWatermarkInfos) SetWatermarkConfig(v string) *ListWatermarkResponseWatermarkInfos {
	s.WatermarkConfig = &v
	return s
}

func (s *ListWatermarkResponseWatermarkInfos) SetAppId(v string) *ListWatermarkResponseWatermarkInfos {
	s.AppId = &v
	return s
}

type UpdateWatermarkRequest struct {
	Name            *string `json:"Name,omitempty" xml:"Name,omitempty"`
	WatermarkId     *string `json:"WatermarkId,omitempty" xml:"WatermarkId,omitempty" require:"true"`
	WatermarkConfig *string `json:"WatermarkConfig,omitempty" xml:"WatermarkConfig,omitempty" require:"true"`
}

func (s UpdateWatermarkRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateWatermarkRequest) GoString() string {
	return s.String()
}

func (s *UpdateWatermarkRequest) SetName(v string) *UpdateWatermarkRequest {
	s.Name = &v
	return s
}

func (s *UpdateWatermarkRequest) SetWatermarkId(v string) *UpdateWatermarkRequest {
	s.WatermarkId = &v
	return s
}

func (s *UpdateWatermarkRequest) SetWatermarkConfig(v string) *UpdateWatermarkRequest {
	s.WatermarkConfig = &v
	return s
}

type UpdateWatermarkResponse struct {
	RequestId     *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	WatermarkInfo *UpdateWatermarkResponseWatermarkInfo `json:"WatermarkInfo,omitempty" xml:"WatermarkInfo,omitempty" require:"true" type:"Struct"`
}

func (s UpdateWatermarkResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateWatermarkResponse) GoString() string {
	return s.String()
}

func (s *UpdateWatermarkResponse) SetRequestId(v string) *UpdateWatermarkResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateWatermarkResponse) SetWatermarkInfo(v *UpdateWatermarkResponseWatermarkInfo) *UpdateWatermarkResponse {
	s.WatermarkInfo = v
	return s
}

type UpdateWatermarkResponseWatermarkInfo struct {
	CreationTime    *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	Type            *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	IsDefault       *string `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
	WatermarkId     *string `json:"WatermarkId,omitempty" xml:"WatermarkId,omitempty" require:"true"`
	Name            *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	FileUrl         *string `json:"FileUrl,omitempty" xml:"FileUrl,omitempty" require:"true"`
	WatermarkConfig *string `json:"WatermarkConfig,omitempty" xml:"WatermarkConfig,omitempty" require:"true"`
}

func (s UpdateWatermarkResponseWatermarkInfo) String() string {
	return tea.Prettify(s)
}

func (s UpdateWatermarkResponseWatermarkInfo) GoString() string {
	return s.String()
}

func (s *UpdateWatermarkResponseWatermarkInfo) SetCreationTime(v string) *UpdateWatermarkResponseWatermarkInfo {
	s.CreationTime = &v
	return s
}

func (s *UpdateWatermarkResponseWatermarkInfo) SetType(v string) *UpdateWatermarkResponseWatermarkInfo {
	s.Type = &v
	return s
}

func (s *UpdateWatermarkResponseWatermarkInfo) SetIsDefault(v string) *UpdateWatermarkResponseWatermarkInfo {
	s.IsDefault = &v
	return s
}

func (s *UpdateWatermarkResponseWatermarkInfo) SetWatermarkId(v string) *UpdateWatermarkResponseWatermarkInfo {
	s.WatermarkId = &v
	return s
}

func (s *UpdateWatermarkResponseWatermarkInfo) SetName(v string) *UpdateWatermarkResponseWatermarkInfo {
	s.Name = &v
	return s
}

func (s *UpdateWatermarkResponseWatermarkInfo) SetFileUrl(v string) *UpdateWatermarkResponseWatermarkInfo {
	s.FileUrl = &v
	return s
}

func (s *UpdateWatermarkResponseWatermarkInfo) SetWatermarkConfig(v string) *UpdateWatermarkResponseWatermarkInfo {
	s.WatermarkConfig = &v
	return s
}

type AddWatermarkRequest struct {
	Type            *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Name            *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	WatermarkConfig *string `json:"WatermarkConfig,omitempty" xml:"WatermarkConfig,omitempty" require:"true"`
	FileUrl         *string `json:"FileUrl,omitempty" xml:"FileUrl,omitempty"`
	AppId           *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
}

func (s AddWatermarkRequest) String() string {
	return tea.Prettify(s)
}

func (s AddWatermarkRequest) GoString() string {
	return s.String()
}

func (s *AddWatermarkRequest) SetType(v string) *AddWatermarkRequest {
	s.Type = &v
	return s
}

func (s *AddWatermarkRequest) SetName(v string) *AddWatermarkRequest {
	s.Name = &v
	return s
}

func (s *AddWatermarkRequest) SetWatermarkConfig(v string) *AddWatermarkRequest {
	s.WatermarkConfig = &v
	return s
}

func (s *AddWatermarkRequest) SetFileUrl(v string) *AddWatermarkRequest {
	s.FileUrl = &v
	return s
}

func (s *AddWatermarkRequest) SetAppId(v string) *AddWatermarkRequest {
	s.AppId = &v
	return s
}

type AddWatermarkResponse struct {
	RequestId     *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	WatermarkInfo *AddWatermarkResponseWatermarkInfo `json:"WatermarkInfo,omitempty" xml:"WatermarkInfo,omitempty" require:"true" type:"Struct"`
}

func (s AddWatermarkResponse) String() string {
	return tea.Prettify(s)
}

func (s AddWatermarkResponse) GoString() string {
	return s.String()
}

func (s *AddWatermarkResponse) SetRequestId(v string) *AddWatermarkResponse {
	s.RequestId = &v
	return s
}

func (s *AddWatermarkResponse) SetWatermarkInfo(v *AddWatermarkResponseWatermarkInfo) *AddWatermarkResponse {
	s.WatermarkInfo = v
	return s
}

type AddWatermarkResponseWatermarkInfo struct {
	CreationTime    *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	Type            *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	IsDefault       *string `json:"IsDefault,omitempty" xml:"IsDefault,omitempty" require:"true"`
	WatermarkId     *string `json:"WatermarkId,omitempty" xml:"WatermarkId,omitempty" require:"true"`
	Name            *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	FileUrl         *string `json:"FileUrl,omitempty" xml:"FileUrl,omitempty" require:"true"`
	WatermarkConfig *string `json:"WatermarkConfig,omitempty" xml:"WatermarkConfig,omitempty" require:"true"`
}

func (s AddWatermarkResponseWatermarkInfo) String() string {
	return tea.Prettify(s)
}

func (s AddWatermarkResponseWatermarkInfo) GoString() string {
	return s.String()
}

func (s *AddWatermarkResponseWatermarkInfo) SetCreationTime(v string) *AddWatermarkResponseWatermarkInfo {
	s.CreationTime = &v
	return s
}

func (s *AddWatermarkResponseWatermarkInfo) SetType(v string) *AddWatermarkResponseWatermarkInfo {
	s.Type = &v
	return s
}

func (s *AddWatermarkResponseWatermarkInfo) SetIsDefault(v string) *AddWatermarkResponseWatermarkInfo {
	s.IsDefault = &v
	return s
}

func (s *AddWatermarkResponseWatermarkInfo) SetWatermarkId(v string) *AddWatermarkResponseWatermarkInfo {
	s.WatermarkId = &v
	return s
}

func (s *AddWatermarkResponseWatermarkInfo) SetName(v string) *AddWatermarkResponseWatermarkInfo {
	s.Name = &v
	return s
}

func (s *AddWatermarkResponseWatermarkInfo) SetFileUrl(v string) *AddWatermarkResponseWatermarkInfo {
	s.FileUrl = &v
	return s
}

func (s *AddWatermarkResponseWatermarkInfo) SetWatermarkConfig(v string) *AddWatermarkResponseWatermarkInfo {
	s.WatermarkConfig = &v
	return s
}

type GetMediaDNAResultRequest struct {
	MediaId *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
}

func (s GetMediaDNAResultRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMediaDNAResultRequest) GoString() string {
	return s.String()
}

func (s *GetMediaDNAResultRequest) SetMediaId(v string) *GetMediaDNAResultRequest {
	s.MediaId = &v
	return s
}

type GetMediaDNAResultResponse struct {
	RequestId *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DNAResult *GetMediaDNAResultResponseDNAResult `json:"DNAResult,omitempty" xml:"DNAResult,omitempty" require:"true" type:"Struct"`
}

func (s GetMediaDNAResultResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMediaDNAResultResponse) GoString() string {
	return s.String()
}

func (s *GetMediaDNAResultResponse) SetRequestId(v string) *GetMediaDNAResultResponse {
	s.RequestId = &v
	return s
}

func (s *GetMediaDNAResultResponse) SetDNAResult(v *GetMediaDNAResultResponseDNAResult) *GetMediaDNAResultResponse {
	s.DNAResult = v
	return s
}

type GetMediaDNAResultResponseDNAResult struct {
	VideoDNA []*GetMediaDNAResultResponseDNAResultVideoDNA `json:"VideoDNA,omitempty" xml:"VideoDNA,omitempty" require:"true" type:"Repeated"`
}

func (s GetMediaDNAResultResponseDNAResult) String() string {
	return tea.Prettify(s)
}

func (s GetMediaDNAResultResponseDNAResult) GoString() string {
	return s.String()
}

func (s *GetMediaDNAResultResponseDNAResult) SetVideoDNA(v []*GetMediaDNAResultResponseDNAResultVideoDNA) *GetMediaDNAResultResponseDNAResult {
	s.VideoDNA = v
	return s
}

type GetMediaDNAResultResponseDNAResultVideoDNA struct {
	PrimaryKey *string                                             `json:"PrimaryKey,omitempty" xml:"PrimaryKey,omitempty" require:"true"`
	Similarity *string                                             `json:"Similarity,omitempty" xml:"Similarity,omitempty" require:"true"`
	Detail     []*GetMediaDNAResultResponseDNAResultVideoDNADetail `json:"Detail,omitempty" xml:"Detail,omitempty" require:"true" type:"Repeated"`
}

func (s GetMediaDNAResultResponseDNAResultVideoDNA) String() string {
	return tea.Prettify(s)
}

func (s GetMediaDNAResultResponseDNAResultVideoDNA) GoString() string {
	return s.String()
}

func (s *GetMediaDNAResultResponseDNAResultVideoDNA) SetPrimaryKey(v string) *GetMediaDNAResultResponseDNAResultVideoDNA {
	s.PrimaryKey = &v
	return s
}

func (s *GetMediaDNAResultResponseDNAResultVideoDNA) SetSimilarity(v string) *GetMediaDNAResultResponseDNAResultVideoDNA {
	s.Similarity = &v
	return s
}

func (s *GetMediaDNAResultResponseDNAResultVideoDNA) SetDetail(v []*GetMediaDNAResultResponseDNAResultVideoDNADetail) *GetMediaDNAResultResponseDNAResultVideoDNA {
	s.Detail = v
	return s
}

type GetMediaDNAResultResponseDNAResultVideoDNADetail struct {
	Input       *GetMediaDNAResultResponseDNAResultVideoDNADetailInput       `json:"Input,omitempty" xml:"Input,omitempty" require:"true" type:"Struct"`
	Duplication *GetMediaDNAResultResponseDNAResultVideoDNADetailDuplication `json:"Duplication,omitempty" xml:"Duplication,omitempty" require:"true" type:"Struct"`
}

func (s GetMediaDNAResultResponseDNAResultVideoDNADetail) String() string {
	return tea.Prettify(s)
}

func (s GetMediaDNAResultResponseDNAResultVideoDNADetail) GoString() string {
	return s.String()
}

func (s *GetMediaDNAResultResponseDNAResultVideoDNADetail) SetInput(v *GetMediaDNAResultResponseDNAResultVideoDNADetailInput) *GetMediaDNAResultResponseDNAResultVideoDNADetail {
	s.Input = v
	return s
}

func (s *GetMediaDNAResultResponseDNAResultVideoDNADetail) SetDuplication(v *GetMediaDNAResultResponseDNAResultVideoDNADetailDuplication) *GetMediaDNAResultResponseDNAResultVideoDNADetail {
	s.Duplication = v
	return s
}

type GetMediaDNAResultResponseDNAResultVideoDNADetailInput struct {
	Start    *string `json:"Start,omitempty" xml:"Start,omitempty" require:"true"`
	Duration *string `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
}

func (s GetMediaDNAResultResponseDNAResultVideoDNADetailInput) String() string {
	return tea.Prettify(s)
}

func (s GetMediaDNAResultResponseDNAResultVideoDNADetailInput) GoString() string {
	return s.String()
}

func (s *GetMediaDNAResultResponseDNAResultVideoDNADetailInput) SetStart(v string) *GetMediaDNAResultResponseDNAResultVideoDNADetailInput {
	s.Start = &v
	return s
}

func (s *GetMediaDNAResultResponseDNAResultVideoDNADetailInput) SetDuration(v string) *GetMediaDNAResultResponseDNAResultVideoDNADetailInput {
	s.Duration = &v
	return s
}

type GetMediaDNAResultResponseDNAResultVideoDNADetailDuplication struct {
	Start    *string `json:"Start,omitempty" xml:"Start,omitempty" require:"true"`
	Duration *string `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
}

func (s GetMediaDNAResultResponseDNAResultVideoDNADetailDuplication) String() string {
	return tea.Prettify(s)
}

func (s GetMediaDNAResultResponseDNAResultVideoDNADetailDuplication) GoString() string {
	return s.String()
}

func (s *GetMediaDNAResultResponseDNAResultVideoDNADetailDuplication) SetStart(v string) *GetMediaDNAResultResponseDNAResultVideoDNADetailDuplication {
	s.Start = &v
	return s
}

func (s *GetMediaDNAResultResponseDNAResultVideoDNADetailDuplication) SetDuration(v string) *GetMediaDNAResultResponseDNAResultVideoDNADetailDuplication {
	s.Duration = &v
	return s
}

type DeleteMezzaninesRequest struct {
	VideoIds *string `json:"VideoIds,omitempty" xml:"VideoIds,omitempty" require:"true"`
	Force    *bool   `json:"Force,omitempty" xml:"Force,omitempty"`
}

func (s DeleteMezzaninesRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteMezzaninesRequest) GoString() string {
	return s.String()
}

func (s *DeleteMezzaninesRequest) SetVideoIds(v string) *DeleteMezzaninesRequest {
	s.VideoIds = &v
	return s
}

func (s *DeleteMezzaninesRequest) SetForce(v bool) *DeleteMezzaninesRequest {
	s.Force = &v
	return s
}

type DeleteMezzaninesResponse struct {
	RequestId            *string   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NonExistVideoIds     []*string `json:"NonExistVideoIds,omitempty" xml:"NonExistVideoIds,omitempty" require:"true" type:"Repeated"`
	UnRemoveableVideoIds []*string `json:"UnRemoveableVideoIds,omitempty" xml:"UnRemoveableVideoIds,omitempty" require:"true" type:"Repeated"`
}

func (s DeleteMezzaninesResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteMezzaninesResponse) GoString() string {
	return s.String()
}

func (s *DeleteMezzaninesResponse) SetRequestId(v string) *DeleteMezzaninesResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteMezzaninesResponse) SetNonExistVideoIds(v []*string) *DeleteMezzaninesResponse {
	s.NonExistVideoIds = v
	return s
}

func (s *DeleteMezzaninesResponse) SetUnRemoveableVideoIds(v []*string) *DeleteMezzaninesResponse {
	s.UnRemoveableVideoIds = v
	return s
}

type UpdateImageInfosRequest struct {
	ResourceRealOwnerId *int64  `json:"ResourceRealOwnerId,omitempty" xml:"ResourceRealOwnerId,omitempty"`
	UpdateContent       *string `json:"UpdateContent,omitempty" xml:"UpdateContent,omitempty" require:"true"`
}

func (s UpdateImageInfosRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateImageInfosRequest) GoString() string {
	return s.String()
}

func (s *UpdateImageInfosRequest) SetResourceRealOwnerId(v int64) *UpdateImageInfosRequest {
	s.ResourceRealOwnerId = &v
	return s
}

func (s *UpdateImageInfosRequest) SetUpdateContent(v string) *UpdateImageInfosRequest {
	s.UpdateContent = &v
	return s
}

type UpdateImageInfosResponse struct {
	RequestId        *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NonExistImageIds *UpdateImageInfosResponseNonExistImageIds `json:"NonExistImageIds,omitempty" xml:"NonExistImageIds,omitempty" require:"true" type:"Struct"`
}

func (s UpdateImageInfosResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateImageInfosResponse) GoString() string {
	return s.String()
}

func (s *UpdateImageInfosResponse) SetRequestId(v string) *UpdateImageInfosResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateImageInfosResponse) SetNonExistImageIds(v *UpdateImageInfosResponseNonExistImageIds) *UpdateImageInfosResponse {
	s.NonExistImageIds = v
	return s
}

type UpdateImageInfosResponseNonExistImageIds struct {
	ImageId []*string `json:"ImageId,omitempty" xml:"ImageId,omitempty" require:"true" type:"Repeated"`
}

func (s UpdateImageInfosResponseNonExistImageIds) String() string {
	return tea.Prettify(s)
}

func (s UpdateImageInfosResponseNonExistImageIds) GoString() string {
	return s.String()
}

func (s *UpdateImageInfosResponseNonExistImageIds) SetImageId(v []*string) *UpdateImageInfosResponseNonExistImageIds {
	s.ImageId = v
	return s
}

type DeleteImageRequest struct {
	DeleteImageType *string `json:"DeleteImageType,omitempty" xml:"DeleteImageType,omitempty" require:"true"`
	ImageURLs       *string `json:"ImageURLs,omitempty" xml:"ImageURLs,omitempty"`
	ImageIds        *string `json:"ImageIds,omitempty" xml:"ImageIds,omitempty"`
	VideoId         *string `json:"VideoId,omitempty" xml:"VideoId,omitempty"`
	ImageType       *string `json:"ImageType,omitempty" xml:"ImageType,omitempty"`
}

func (s DeleteImageRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteImageRequest) GoString() string {
	return s.String()
}

func (s *DeleteImageRequest) SetDeleteImageType(v string) *DeleteImageRequest {
	s.DeleteImageType = &v
	return s
}

func (s *DeleteImageRequest) SetImageURLs(v string) *DeleteImageRequest {
	s.ImageURLs = &v
	return s
}

func (s *DeleteImageRequest) SetImageIds(v string) *DeleteImageRequest {
	s.ImageIds = &v
	return s
}

func (s *DeleteImageRequest) SetVideoId(v string) *DeleteImageRequest {
	s.VideoId = &v
	return s
}

func (s *DeleteImageRequest) SetImageType(v string) *DeleteImageRequest {
	s.ImageType = &v
	return s
}

type DeleteImageResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteImageResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteImageResponse) GoString() string {
	return s.String()
}

func (s *DeleteImageResponse) SetRequestId(v string) *DeleteImageResponse {
	s.RequestId = &v
	return s
}

type ListAuditSecurityIpRequest struct {
	SecurityGroupName *string `json:"SecurityGroupName,omitempty" xml:"SecurityGroupName,omitempty"`
}

func (s ListAuditSecurityIpRequest) String() string {
	return tea.Prettify(s)
}

func (s ListAuditSecurityIpRequest) GoString() string {
	return s.String()
}

func (s *ListAuditSecurityIpRequest) SetSecurityGroupName(v string) *ListAuditSecurityIpRequest {
	s.SecurityGroupName = &v
	return s
}

type ListAuditSecurityIpResponse struct {
	RequestId      *string                                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	SecurityIpList []*ListAuditSecurityIpResponseSecurityIpList `json:"SecurityIpList,omitempty" xml:"SecurityIpList,omitempty" require:"true" type:"Repeated"`
}

func (s ListAuditSecurityIpResponse) String() string {
	return tea.Prettify(s)
}

func (s ListAuditSecurityIpResponse) GoString() string {
	return s.String()
}

func (s *ListAuditSecurityIpResponse) SetRequestId(v string) *ListAuditSecurityIpResponse {
	s.RequestId = &v
	return s
}

func (s *ListAuditSecurityIpResponse) SetSecurityIpList(v []*ListAuditSecurityIpResponseSecurityIpList) *ListAuditSecurityIpResponse {
	s.SecurityIpList = v
	return s
}

type ListAuditSecurityIpResponseSecurityIpList struct {
	SecurityGroupName *string `json:"SecurityGroupName,omitempty" xml:"SecurityGroupName,omitempty" require:"true"`
	Ips               *string `json:"Ips,omitempty" xml:"Ips,omitempty" require:"true"`
	CreationTime      *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModificationTime  *string `json:"ModificationTime,omitempty" xml:"ModificationTime,omitempty" require:"true"`
}

func (s ListAuditSecurityIpResponseSecurityIpList) String() string {
	return tea.Prettify(s)
}

func (s ListAuditSecurityIpResponseSecurityIpList) GoString() string {
	return s.String()
}

func (s *ListAuditSecurityIpResponseSecurityIpList) SetSecurityGroupName(v string) *ListAuditSecurityIpResponseSecurityIpList {
	s.SecurityGroupName = &v
	return s
}

func (s *ListAuditSecurityIpResponseSecurityIpList) SetIps(v string) *ListAuditSecurityIpResponseSecurityIpList {
	s.Ips = &v
	return s
}

func (s *ListAuditSecurityIpResponseSecurityIpList) SetCreationTime(v string) *ListAuditSecurityIpResponseSecurityIpList {
	s.CreationTime = &v
	return s
}

func (s *ListAuditSecurityIpResponseSecurityIpList) SetModificationTime(v string) *ListAuditSecurityIpResponseSecurityIpList {
	s.ModificationTime = &v
	return s
}

type SetAuditSecurityIpRequest struct {
	SecurityGroupName *string `json:"SecurityGroupName,omitempty" xml:"SecurityGroupName,omitempty"`
	Ips               *string `json:"Ips,omitempty" xml:"Ips,omitempty" require:"true"`
	OperateMode       *string `json:"OperateMode,omitempty" xml:"OperateMode,omitempty"`
}

func (s SetAuditSecurityIpRequest) String() string {
	return tea.Prettify(s)
}

func (s SetAuditSecurityIpRequest) GoString() string {
	return s.String()
}

func (s *SetAuditSecurityIpRequest) SetSecurityGroupName(v string) *SetAuditSecurityIpRequest {
	s.SecurityGroupName = &v
	return s
}

func (s *SetAuditSecurityIpRequest) SetIps(v string) *SetAuditSecurityIpRequest {
	s.Ips = &v
	return s
}

func (s *SetAuditSecurityIpRequest) SetOperateMode(v string) *SetAuditSecurityIpRequest {
	s.OperateMode = &v
	return s
}

type SetAuditSecurityIpResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetAuditSecurityIpResponse) String() string {
	return tea.Prettify(s)
}

func (s SetAuditSecurityIpResponse) GoString() string {
	return s.String()
}

func (s *SetAuditSecurityIpResponse) SetRequestId(v string) *SetAuditSecurityIpResponse {
	s.RequestId = &v
	return s
}

type UploadMediaByURLRequest struct {
	UploadURLs      *string `json:"UploadURLs,omitempty" xml:"UploadURLs,omitempty" require:"true"`
	TemplateGroupId *string `json:"TemplateGroupId,omitempty" xml:"TemplateGroupId,omitempty"`
	StorageLocation *string `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty"`
	UploadMetadatas *string `json:"UploadMetadatas,omitempty" xml:"UploadMetadatas,omitempty"`
	Priority        *string `json:"Priority,omitempty" xml:"Priority,omitempty"`
	MessageCallback *string `json:"MessageCallback,omitempty" xml:"MessageCallback,omitempty"`
	UserData        *string `json:"UserData,omitempty" xml:"UserData,omitempty"`
	AppId           *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
	WorkflowId      *string `json:"WorkflowId,omitempty" xml:"WorkflowId,omitempty"`
}

func (s UploadMediaByURLRequest) String() string {
	return tea.Prettify(s)
}

func (s UploadMediaByURLRequest) GoString() string {
	return s.String()
}

func (s *UploadMediaByURLRequest) SetUploadURLs(v string) *UploadMediaByURLRequest {
	s.UploadURLs = &v
	return s
}

func (s *UploadMediaByURLRequest) SetTemplateGroupId(v string) *UploadMediaByURLRequest {
	s.TemplateGroupId = &v
	return s
}

func (s *UploadMediaByURLRequest) SetStorageLocation(v string) *UploadMediaByURLRequest {
	s.StorageLocation = &v
	return s
}

func (s *UploadMediaByURLRequest) SetUploadMetadatas(v string) *UploadMediaByURLRequest {
	s.UploadMetadatas = &v
	return s
}

func (s *UploadMediaByURLRequest) SetPriority(v string) *UploadMediaByURLRequest {
	s.Priority = &v
	return s
}

func (s *UploadMediaByURLRequest) SetMessageCallback(v string) *UploadMediaByURLRequest {
	s.MessageCallback = &v
	return s
}

func (s *UploadMediaByURLRequest) SetUserData(v string) *UploadMediaByURLRequest {
	s.UserData = &v
	return s
}

func (s *UploadMediaByURLRequest) SetAppId(v string) *UploadMediaByURLRequest {
	s.AppId = &v
	return s
}

func (s *UploadMediaByURLRequest) SetWorkflowId(v string) *UploadMediaByURLRequest {
	s.WorkflowId = &v
	return s
}

type UploadMediaByURLResponse struct {
	RequestId  *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	UploadJobs []*UploadMediaByURLResponseUploadJobs `json:"UploadJobs,omitempty" xml:"UploadJobs,omitempty" require:"true" type:"Repeated"`
}

func (s UploadMediaByURLResponse) String() string {
	return tea.Prettify(s)
}

func (s UploadMediaByURLResponse) GoString() string {
	return s.String()
}

func (s *UploadMediaByURLResponse) SetRequestId(v string) *UploadMediaByURLResponse {
	s.RequestId = &v
	return s
}

func (s *UploadMediaByURLResponse) SetUploadJobs(v []*UploadMediaByURLResponseUploadJobs) *UploadMediaByURLResponse {
	s.UploadJobs = v
	return s
}

type UploadMediaByURLResponseUploadJobs struct {
	JobId     *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
	SourceURL *string `json:"SourceURL,omitempty" xml:"SourceURL,omitempty" require:"true"`
}

func (s UploadMediaByURLResponseUploadJobs) String() string {
	return tea.Prettify(s)
}

func (s UploadMediaByURLResponseUploadJobs) GoString() string {
	return s.String()
}

func (s *UploadMediaByURLResponseUploadJobs) SetJobId(v string) *UploadMediaByURLResponseUploadJobs {
	s.JobId = &v
	return s
}

func (s *UploadMediaByURLResponseUploadJobs) SetSourceURL(v string) *UploadMediaByURLResponseUploadJobs {
	s.SourceURL = &v
	return s
}

type UpdateVideoInfosRequest struct {
	UpdateContent *string `json:"UpdateContent,omitempty" xml:"UpdateContent,omitempty" require:"true"`
}

func (s UpdateVideoInfosRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateVideoInfosRequest) GoString() string {
	return s.String()
}

func (s *UpdateVideoInfosRequest) SetUpdateContent(v string) *UpdateVideoInfosRequest {
	s.UpdateContent = &v
	return s
}

type UpdateVideoInfosResponse struct {
	RequestId         *string   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NonExistVideoIds  []*string `json:"NonExistVideoIds,omitempty" xml:"NonExistVideoIds,omitempty" require:"true" type:"Repeated"`
	ForbiddenVideoIds []*string `json:"ForbiddenVideoIds,omitempty" xml:"ForbiddenVideoIds,omitempty" require:"true" type:"Repeated"`
}

func (s UpdateVideoInfosResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateVideoInfosResponse) GoString() string {
	return s.String()
}

func (s *UpdateVideoInfosResponse) SetRequestId(v string) *UpdateVideoInfosResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateVideoInfosResponse) SetNonExistVideoIds(v []*string) *UpdateVideoInfosResponse {
	s.NonExistVideoIds = v
	return s
}

func (s *UpdateVideoInfosResponse) SetForbiddenVideoIds(v []*string) *UpdateVideoInfosResponse {
	s.ForbiddenVideoIds = v
	return s
}

type SearchMediaRequest struct {
	SearchType  *string `json:"SearchType,omitempty" xml:"SearchType,omitempty"`
	Fields      *string `json:"Fields,omitempty" xml:"Fields,omitempty"`
	Match       *string `json:"Match,omitempty" xml:"Match,omitempty"`
	SortBy      *string `json:"SortBy,omitempty" xml:"SortBy,omitempty"`
	PageNo      *int    `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
	PageSize    *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	ScrollToken *string `json:"ScrollToken,omitempty" xml:"ScrollToken,omitempty"`
	SessionId   *string `json:"SessionId,omitempty" xml:"SessionId,omitempty"`
}

func (s SearchMediaRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchMediaRequest) GoString() string {
	return s.String()
}

func (s *SearchMediaRequest) SetSearchType(v string) *SearchMediaRequest {
	s.SearchType = &v
	return s
}

func (s *SearchMediaRequest) SetFields(v string) *SearchMediaRequest {
	s.Fields = &v
	return s
}

func (s *SearchMediaRequest) SetMatch(v string) *SearchMediaRequest {
	s.Match = &v
	return s
}

func (s *SearchMediaRequest) SetSortBy(v string) *SearchMediaRequest {
	s.SortBy = &v
	return s
}

func (s *SearchMediaRequest) SetPageNo(v int) *SearchMediaRequest {
	s.PageNo = &v
	return s
}

func (s *SearchMediaRequest) SetPageSize(v int) *SearchMediaRequest {
	s.PageSize = &v
	return s
}

func (s *SearchMediaRequest) SetScrollToken(v string) *SearchMediaRequest {
	s.ScrollToken = &v
	return s
}

func (s *SearchMediaRequest) SetSessionId(v string) *SearchMediaRequest {
	s.SessionId = &v
	return s
}

type SearchMediaResponse struct {
	RequestId   *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ScrollToken *string                         `json:"ScrollToken,omitempty" xml:"ScrollToken,omitempty" require:"true"`
	Total       *int64                          `json:"Total,omitempty" xml:"Total,omitempty" require:"true"`
	MediaList   []*SearchMediaResponseMediaList `json:"MediaList,omitempty" xml:"MediaList,omitempty" require:"true" type:"Repeated"`
}

func (s SearchMediaResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchMediaResponse) GoString() string {
	return s.String()
}

func (s *SearchMediaResponse) SetRequestId(v string) *SearchMediaResponse {
	s.RequestId = &v
	return s
}

func (s *SearchMediaResponse) SetScrollToken(v string) *SearchMediaResponse {
	s.ScrollToken = &v
	return s
}

func (s *SearchMediaResponse) SetTotal(v int64) *SearchMediaResponse {
	s.Total = &v
	return s
}

func (s *SearchMediaResponse) SetMediaList(v []*SearchMediaResponseMediaList) *SearchMediaResponse {
	s.MediaList = v
	return s
}

type SearchMediaResponseMediaList struct {
	MediaType     *string                                    `json:"MediaType,omitempty" xml:"MediaType,omitempty" require:"true"`
	CreationTime  *string                                    `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	MediaId       *string                                    `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	Video         *SearchMediaResponseMediaListVideo         `json:"Video,omitempty" xml:"Video,omitempty" require:"true" type:"Struct"`
	Audio         *SearchMediaResponseMediaListAudio         `json:"Audio,omitempty" xml:"Audio,omitempty" require:"true" type:"Struct"`
	Image         *SearchMediaResponseMediaListImage         `json:"Image,omitempty" xml:"Image,omitempty" require:"true" type:"Struct"`
	AttachedMedia *SearchMediaResponseMediaListAttachedMedia `json:"AttachedMedia,omitempty" xml:"AttachedMedia,omitempty" require:"true" type:"Struct"`
}

func (s SearchMediaResponseMediaList) String() string {
	return tea.Prettify(s)
}

func (s SearchMediaResponseMediaList) GoString() string {
	return s.String()
}

func (s *SearchMediaResponseMediaList) SetMediaType(v string) *SearchMediaResponseMediaList {
	s.MediaType = &v
	return s
}

func (s *SearchMediaResponseMediaList) SetCreationTime(v string) *SearchMediaResponseMediaList {
	s.CreationTime = &v
	return s
}

func (s *SearchMediaResponseMediaList) SetMediaId(v string) *SearchMediaResponseMediaList {
	s.MediaId = &v
	return s
}

func (s *SearchMediaResponseMediaList) SetVideo(v *SearchMediaResponseMediaListVideo) *SearchMediaResponseMediaList {
	s.Video = v
	return s
}

func (s *SearchMediaResponseMediaList) SetAudio(v *SearchMediaResponseMediaListAudio) *SearchMediaResponseMediaList {
	s.Audio = v
	return s
}

func (s *SearchMediaResponseMediaList) SetImage(v *SearchMediaResponseMediaListImage) *SearchMediaResponseMediaList {
	s.Image = v
	return s
}

func (s *SearchMediaResponseMediaList) SetAttachedMedia(v *SearchMediaResponseMediaListAttachedMedia) *SearchMediaResponseMediaList {
	s.AttachedMedia = v
	return s
}

type SearchMediaResponseMediaListVideo struct {
	VideoId              *string   `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	MediaSource          *string   `json:"MediaSource,omitempty" xml:"MediaSource,omitempty" require:"true"`
	MediaType            *string   `json:"MediaType,omitempty" xml:"MediaType,omitempty" require:"true"`
	Title                *string   `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	Tags                 *string   `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true"`
	Status               *string   `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Size                 *int64    `json:"Size,omitempty" xml:"Size,omitempty" require:"true"`
	Duration             *float32  `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Description          *string   `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	ModificationTime     *string   `json:"ModificationTime,omitempty" xml:"ModificationTime,omitempty" require:"true"`
	CreationTime         *string   `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	CoverURL             *string   `json:"CoverURL,omitempty" xml:"CoverURL,omitempty" require:"true"`
	CateId               *int64    `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
	CateName             *string   `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	DownloadSwitch       *string   `json:"DownloadSwitch,omitempty" xml:"DownloadSwitch,omitempty" require:"true"`
	PreprocessStatus     *string   `json:"PreprocessStatus,omitempty" xml:"PreprocessStatus,omitempty" require:"true"`
	StorageLocation      *string   `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty" require:"true"`
	RegionId             *string   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	TranscodeMode        *string   `json:"TranscodeMode,omitempty" xml:"TranscodeMode,omitempty" require:"true"`
	AuditStatus          *string   `json:"AuditStatus,omitempty" xml:"AuditStatus,omitempty" require:"true"`
	AuditAIStatus        *string   `json:"AuditAIStatus,omitempty" xml:"AuditAIStatus,omitempty" require:"true"`
	AuditManualStatus    *string   `json:"AuditManualStatus,omitempty" xml:"AuditManualStatus,omitempty" require:"true"`
	AuditAIResult        *string   `json:"AuditAIResult,omitempty" xml:"AuditAIResult,omitempty" require:"true"`
	AuditTemplateId      *string   `json:"AuditTemplateId,omitempty" xml:"AuditTemplateId,omitempty" require:"true"`
	CustomMediaInfo      *string   `json:"CustomMediaInfo,omitempty" xml:"CustomMediaInfo,omitempty" require:"true"`
	AppId                *string   `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	AuditAbnormalModules *string   `json:"AuditAbnormalModules,omitempty" xml:"AuditAbnormalModules,omitempty" require:"true"`
	AuditLabel           *string   `json:"AuditLabel,omitempty" xml:"AuditLabel,omitempty" require:"true"`
	Snapshots            []*string `json:"Snapshots,omitempty" xml:"Snapshots,omitempty" require:"true" type:"Repeated"`
	SpriteSnapshots      []*string `json:"SpriteSnapshots,omitempty" xml:"SpriteSnapshots,omitempty" require:"true" type:"Repeated"`
}

func (s SearchMediaResponseMediaListVideo) String() string {
	return tea.Prettify(s)
}

func (s SearchMediaResponseMediaListVideo) GoString() string {
	return s.String()
}

func (s *SearchMediaResponseMediaListVideo) SetVideoId(v string) *SearchMediaResponseMediaListVideo {
	s.VideoId = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetMediaSource(v string) *SearchMediaResponseMediaListVideo {
	s.MediaSource = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetMediaType(v string) *SearchMediaResponseMediaListVideo {
	s.MediaType = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetTitle(v string) *SearchMediaResponseMediaListVideo {
	s.Title = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetTags(v string) *SearchMediaResponseMediaListVideo {
	s.Tags = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetStatus(v string) *SearchMediaResponseMediaListVideo {
	s.Status = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetSize(v int64) *SearchMediaResponseMediaListVideo {
	s.Size = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetDuration(v float32) *SearchMediaResponseMediaListVideo {
	s.Duration = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetDescription(v string) *SearchMediaResponseMediaListVideo {
	s.Description = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetModificationTime(v string) *SearchMediaResponseMediaListVideo {
	s.ModificationTime = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetCreationTime(v string) *SearchMediaResponseMediaListVideo {
	s.CreationTime = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetCoverURL(v string) *SearchMediaResponseMediaListVideo {
	s.CoverURL = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetCateId(v int64) *SearchMediaResponseMediaListVideo {
	s.CateId = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetCateName(v string) *SearchMediaResponseMediaListVideo {
	s.CateName = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetDownloadSwitch(v string) *SearchMediaResponseMediaListVideo {
	s.DownloadSwitch = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetPreprocessStatus(v string) *SearchMediaResponseMediaListVideo {
	s.PreprocessStatus = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetStorageLocation(v string) *SearchMediaResponseMediaListVideo {
	s.StorageLocation = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetRegionId(v string) *SearchMediaResponseMediaListVideo {
	s.RegionId = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetTranscodeMode(v string) *SearchMediaResponseMediaListVideo {
	s.TranscodeMode = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetAuditStatus(v string) *SearchMediaResponseMediaListVideo {
	s.AuditStatus = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetAuditAIStatus(v string) *SearchMediaResponseMediaListVideo {
	s.AuditAIStatus = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetAuditManualStatus(v string) *SearchMediaResponseMediaListVideo {
	s.AuditManualStatus = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetAuditAIResult(v string) *SearchMediaResponseMediaListVideo {
	s.AuditAIResult = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetAuditTemplateId(v string) *SearchMediaResponseMediaListVideo {
	s.AuditTemplateId = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetCustomMediaInfo(v string) *SearchMediaResponseMediaListVideo {
	s.CustomMediaInfo = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetAppId(v string) *SearchMediaResponseMediaListVideo {
	s.AppId = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetAuditAbnormalModules(v string) *SearchMediaResponseMediaListVideo {
	s.AuditAbnormalModules = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetAuditLabel(v string) *SearchMediaResponseMediaListVideo {
	s.AuditLabel = &v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetSnapshots(v []*string) *SearchMediaResponseMediaListVideo {
	s.Snapshots = v
	return s
}

func (s *SearchMediaResponseMediaListVideo) SetSpriteSnapshots(v []*string) *SearchMediaResponseMediaListVideo {
	s.SpriteSnapshots = v
	return s
}

type SearchMediaResponseMediaListAudio struct {
	AudioId           *string   `json:"AudioId,omitempty" xml:"AudioId,omitempty" require:"true"`
	MediaSource       *string   `json:"MediaSource,omitempty" xml:"MediaSource,omitempty" require:"true"`
	Title             *string   `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	Tags              *string   `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true"`
	Status            *string   `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Size              *int64    `json:"Size,omitempty" xml:"Size,omitempty" require:"true"`
	Duration          *float32  `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Description       *string   `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	ModificationTime  *string   `json:"ModificationTime,omitempty" xml:"ModificationTime,omitempty" require:"true"`
	CreationTime      *string   `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	CoverURL          *string   `json:"CoverURL,omitempty" xml:"CoverURL,omitempty" require:"true"`
	CateId            *int64    `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
	CateName          *string   `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	DownloadSwitch    *string   `json:"DownloadSwitch,omitempty" xml:"DownloadSwitch,omitempty" require:"true"`
	PreprocessStatus  *string   `json:"PreprocessStatus,omitempty" xml:"PreprocessStatus,omitempty" require:"true"`
	StorageLocation   *string   `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty" require:"true"`
	RegionId          *string   `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	TranscodeMode     *string   `json:"TranscodeMode,omitempty" xml:"TranscodeMode,omitempty" require:"true"`
	AuditStatus       *string   `json:"AuditStatus,omitempty" xml:"AuditStatus,omitempty" require:"true"`
	AuditAIStatus     *string   `json:"AuditAIStatus,omitempty" xml:"AuditAIStatus,omitempty" require:"true"`
	AuditManualStatus *string   `json:"AuditManualStatus,omitempty" xml:"AuditManualStatus,omitempty" require:"true"`
	AuditAIResult     *string   `json:"AuditAIResult,omitempty" xml:"AuditAIResult,omitempty" require:"true"`
	AuditTemplateId   *string   `json:"AuditTemplateId,omitempty" xml:"AuditTemplateId,omitempty" require:"true"`
	CustomMediaInfo   *string   `json:"CustomMediaInfo,omitempty" xml:"CustomMediaInfo,omitempty" require:"true"`
	AppId             *string   `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	Snapshots         []*string `json:"Snapshots,omitempty" xml:"Snapshots,omitempty" require:"true" type:"Repeated"`
	SpriteSnapshots   []*string `json:"SpriteSnapshots,omitempty" xml:"SpriteSnapshots,omitempty" require:"true" type:"Repeated"`
}

func (s SearchMediaResponseMediaListAudio) String() string {
	return tea.Prettify(s)
}

func (s SearchMediaResponseMediaListAudio) GoString() string {
	return s.String()
}

func (s *SearchMediaResponseMediaListAudio) SetAudioId(v string) *SearchMediaResponseMediaListAudio {
	s.AudioId = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetMediaSource(v string) *SearchMediaResponseMediaListAudio {
	s.MediaSource = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetTitle(v string) *SearchMediaResponseMediaListAudio {
	s.Title = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetTags(v string) *SearchMediaResponseMediaListAudio {
	s.Tags = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetStatus(v string) *SearchMediaResponseMediaListAudio {
	s.Status = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetSize(v int64) *SearchMediaResponseMediaListAudio {
	s.Size = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetDuration(v float32) *SearchMediaResponseMediaListAudio {
	s.Duration = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetDescription(v string) *SearchMediaResponseMediaListAudio {
	s.Description = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetModificationTime(v string) *SearchMediaResponseMediaListAudio {
	s.ModificationTime = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetCreationTime(v string) *SearchMediaResponseMediaListAudio {
	s.CreationTime = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetCoverURL(v string) *SearchMediaResponseMediaListAudio {
	s.CoverURL = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetCateId(v int64) *SearchMediaResponseMediaListAudio {
	s.CateId = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetCateName(v string) *SearchMediaResponseMediaListAudio {
	s.CateName = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetDownloadSwitch(v string) *SearchMediaResponseMediaListAudio {
	s.DownloadSwitch = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetPreprocessStatus(v string) *SearchMediaResponseMediaListAudio {
	s.PreprocessStatus = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetStorageLocation(v string) *SearchMediaResponseMediaListAudio {
	s.StorageLocation = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetRegionId(v string) *SearchMediaResponseMediaListAudio {
	s.RegionId = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetTranscodeMode(v string) *SearchMediaResponseMediaListAudio {
	s.TranscodeMode = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetAuditStatus(v string) *SearchMediaResponseMediaListAudio {
	s.AuditStatus = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetAuditAIStatus(v string) *SearchMediaResponseMediaListAudio {
	s.AuditAIStatus = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetAuditManualStatus(v string) *SearchMediaResponseMediaListAudio {
	s.AuditManualStatus = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetAuditAIResult(v string) *SearchMediaResponseMediaListAudio {
	s.AuditAIResult = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetAuditTemplateId(v string) *SearchMediaResponseMediaListAudio {
	s.AuditTemplateId = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetCustomMediaInfo(v string) *SearchMediaResponseMediaListAudio {
	s.CustomMediaInfo = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetAppId(v string) *SearchMediaResponseMediaListAudio {
	s.AppId = &v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetSnapshots(v []*string) *SearchMediaResponseMediaListAudio {
	s.Snapshots = v
	return s
}

func (s *SearchMediaResponseMediaListAudio) SetSpriteSnapshots(v []*string) *SearchMediaResponseMediaListAudio {
	s.SpriteSnapshots = v
	return s
}

type SearchMediaResponseMediaListImage struct {
	Title            *string `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	ImageId          *string `json:"ImageId,omitempty" xml:"ImageId,omitempty" require:"true"`
	CateId           *int64  `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
	CateName         *string `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	Ext              *string `json:"Ext,omitempty" xml:"Ext,omitempty" require:"true"`
	CreationTime     *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModificationTime *string `json:"ModificationTime,omitempty" xml:"ModificationTime,omitempty" require:"true"`
	Tags             *string `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true"`
	Type             *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	URL              *string `json:"URL,omitempty" xml:"URL,omitempty" require:"true"`
	Status           *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Description      *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	StorageLocation  *string `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty" require:"true"`
	RegionId         *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	AppId            *string `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
}

func (s SearchMediaResponseMediaListImage) String() string {
	return tea.Prettify(s)
}

func (s SearchMediaResponseMediaListImage) GoString() string {
	return s.String()
}

func (s *SearchMediaResponseMediaListImage) SetTitle(v string) *SearchMediaResponseMediaListImage {
	s.Title = &v
	return s
}

func (s *SearchMediaResponseMediaListImage) SetImageId(v string) *SearchMediaResponseMediaListImage {
	s.ImageId = &v
	return s
}

func (s *SearchMediaResponseMediaListImage) SetCateId(v int64) *SearchMediaResponseMediaListImage {
	s.CateId = &v
	return s
}

func (s *SearchMediaResponseMediaListImage) SetCateName(v string) *SearchMediaResponseMediaListImage {
	s.CateName = &v
	return s
}

func (s *SearchMediaResponseMediaListImage) SetExt(v string) *SearchMediaResponseMediaListImage {
	s.Ext = &v
	return s
}

func (s *SearchMediaResponseMediaListImage) SetCreationTime(v string) *SearchMediaResponseMediaListImage {
	s.CreationTime = &v
	return s
}

func (s *SearchMediaResponseMediaListImage) SetModificationTime(v string) *SearchMediaResponseMediaListImage {
	s.ModificationTime = &v
	return s
}

func (s *SearchMediaResponseMediaListImage) SetTags(v string) *SearchMediaResponseMediaListImage {
	s.Tags = &v
	return s
}

func (s *SearchMediaResponseMediaListImage) SetType(v string) *SearchMediaResponseMediaListImage {
	s.Type = &v
	return s
}

func (s *SearchMediaResponseMediaListImage) SetURL(v string) *SearchMediaResponseMediaListImage {
	s.URL = &v
	return s
}

func (s *SearchMediaResponseMediaListImage) SetStatus(v string) *SearchMediaResponseMediaListImage {
	s.Status = &v
	return s
}

func (s *SearchMediaResponseMediaListImage) SetDescription(v string) *SearchMediaResponseMediaListImage {
	s.Description = &v
	return s
}

func (s *SearchMediaResponseMediaListImage) SetStorageLocation(v string) *SearchMediaResponseMediaListImage {
	s.StorageLocation = &v
	return s
}

func (s *SearchMediaResponseMediaListImage) SetRegionId(v string) *SearchMediaResponseMediaListImage {
	s.RegionId = &v
	return s
}

func (s *SearchMediaResponseMediaListImage) SetAppId(v string) *SearchMediaResponseMediaListImage {
	s.AppId = &v
	return s
}

type SearchMediaResponseMediaListAttachedMedia struct {
	Title            *string                                                `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	MediaId          *string                                                `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	Ext              *string                                                `json:"Ext,omitempty" xml:"Ext,omitempty" require:"true"`
	CreationTime     *string                                                `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModificationTime *string                                                `json:"ModificationTime,omitempty" xml:"ModificationTime,omitempty" require:"true"`
	Tags             *string                                                `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true"`
	BusinessType     *string                                                `json:"BusinessType,omitempty" xml:"BusinessType,omitempty" require:"true"`
	URL              *string                                                `json:"URL,omitempty" xml:"URL,omitempty" require:"true"`
	Status           *string                                                `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Description      *string                                                `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	StorageLocation  *string                                                `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty" require:"true"`
	RegionId         *string                                                `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	AppId            *string                                                `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	Icon             *string                                                `json:"Icon,omitempty" xml:"Icon,omitempty" require:"true"`
	OnlineStatus     *string                                                `json:"OnlineStatus,omitempty" xml:"OnlineStatus,omitempty" require:"true"`
	Categories       []*SearchMediaResponseMediaListAttachedMediaCategories `json:"Categories,omitempty" xml:"Categories,omitempty" require:"true" type:"Repeated"`
}

func (s SearchMediaResponseMediaListAttachedMedia) String() string {
	return tea.Prettify(s)
}

func (s SearchMediaResponseMediaListAttachedMedia) GoString() string {
	return s.String()
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetTitle(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.Title = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetMediaId(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.MediaId = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetExt(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.Ext = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetCreationTime(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.CreationTime = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetModificationTime(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.ModificationTime = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetTags(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.Tags = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetBusinessType(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.BusinessType = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetURL(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.URL = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetStatus(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.Status = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetDescription(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.Description = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetStorageLocation(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.StorageLocation = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetRegionId(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.RegionId = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetAppId(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.AppId = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetIcon(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.Icon = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetOnlineStatus(v string) *SearchMediaResponseMediaListAttachedMedia {
	s.OnlineStatus = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMedia) SetCategories(v []*SearchMediaResponseMediaListAttachedMediaCategories) *SearchMediaResponseMediaListAttachedMedia {
	s.Categories = v
	return s
}

type SearchMediaResponseMediaListAttachedMediaCategories struct {
	CateId   *int64  `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
	CateName *string `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	Level    *int64  `json:"Level,omitempty" xml:"Level,omitempty" require:"true"`
	ParentId *int64  `json:"ParentId,omitempty" xml:"ParentId,omitempty" require:"true"`
}

func (s SearchMediaResponseMediaListAttachedMediaCategories) String() string {
	return tea.Prettify(s)
}

func (s SearchMediaResponseMediaListAttachedMediaCategories) GoString() string {
	return s.String()
}

func (s *SearchMediaResponseMediaListAttachedMediaCategories) SetCateId(v int64) *SearchMediaResponseMediaListAttachedMediaCategories {
	s.CateId = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMediaCategories) SetCateName(v string) *SearchMediaResponseMediaListAttachedMediaCategories {
	s.CateName = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMediaCategories) SetLevel(v int64) *SearchMediaResponseMediaListAttachedMediaCategories {
	s.Level = &v
	return s
}

func (s *SearchMediaResponseMediaListAttachedMediaCategories) SetParentId(v int64) *SearchMediaResponseMediaListAttachedMediaCategories {
	s.ParentId = &v
	return s
}

type GetVideoInfosRequest struct {
	VideoIds     *string `json:"VideoIds,omitempty" xml:"VideoIds,omitempty" require:"true"`
	AdditionType *string `json:"AdditionType,omitempty" xml:"AdditionType,omitempty"`
}

func (s GetVideoInfosRequest) String() string {
	return tea.Prettify(s)
}

func (s GetVideoInfosRequest) GoString() string {
	return s.String()
}

func (s *GetVideoInfosRequest) SetVideoIds(v string) *GetVideoInfosRequest {
	s.VideoIds = &v
	return s
}

func (s *GetVideoInfosRequest) SetAdditionType(v string) *GetVideoInfosRequest {
	s.AdditionType = &v
	return s
}

type GetVideoInfosResponse struct {
	RequestId        *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	VideoList        []*GetVideoInfosResponseVideoList `json:"VideoList,omitempty" xml:"VideoList,omitempty" require:"true" type:"Repeated"`
	NonExistVideoIds []*string                         `json:"NonExistVideoIds,omitempty" xml:"NonExistVideoIds,omitempty" require:"true" type:"Repeated"`
}

func (s GetVideoInfosResponse) String() string {
	return tea.Prettify(s)
}

func (s GetVideoInfosResponse) GoString() string {
	return s.String()
}

func (s *GetVideoInfosResponse) SetRequestId(v string) *GetVideoInfosResponse {
	s.RequestId = &v
	return s
}

func (s *GetVideoInfosResponse) SetVideoList(v []*GetVideoInfosResponseVideoList) *GetVideoInfosResponse {
	s.VideoList = v
	return s
}

func (s *GetVideoInfosResponse) SetNonExistVideoIds(v []*string) *GetVideoInfosResponse {
	s.NonExistVideoIds = v
	return s
}

type GetVideoInfosResponseVideoList struct {
	VideoId          *string                                        `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	Title            *string                                        `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	Tags             *string                                        `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true"`
	Status           *string                                        `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Size             *int64                                         `json:"Size,omitempty" xml:"Size,omitempty" require:"true"`
	Duration         *float32                                       `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Description      *string                                        `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	ModificationTime *string                                        `json:"ModificationTime,omitempty" xml:"ModificationTime,omitempty" require:"true"`
	CreationTime     *string                                        `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	CoverURL         *string                                        `json:"CoverURL,omitempty" xml:"CoverURL,omitempty" require:"true"`
	CateId           *int64                                         `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
	CateName         *string                                        `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	DownloadSwitch   *string                                        `json:"DownloadSwitch,omitempty" xml:"DownloadSwitch,omitempty" require:"true"`
	TemplateGroupId  *string                                        `json:"TemplateGroupId,omitempty" xml:"TemplateGroupId,omitempty" require:"true"`
	PreprocessStatus *string                                        `json:"PreprocessStatus,omitempty" xml:"PreprocessStatus,omitempty" require:"true"`
	StorageLocation  *string                                        `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty" require:"true"`
	RegionId         *string                                        `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	CustomMediaInfo  *string                                        `json:"CustomMediaInfo,omitempty" xml:"CustomMediaInfo,omitempty" require:"true"`
	AppId            *string                                        `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	ThumbnailList    []*GetVideoInfosResponseVideoListThumbnailList `json:"ThumbnailList,omitempty" xml:"ThumbnailList,omitempty" require:"true" type:"Repeated"`
	Snapshots        []*string                                      `json:"Snapshots,omitempty" xml:"Snapshots,omitempty" require:"true" type:"Repeated"`
}

func (s GetVideoInfosResponseVideoList) String() string {
	return tea.Prettify(s)
}

func (s GetVideoInfosResponseVideoList) GoString() string {
	return s.String()
}

func (s *GetVideoInfosResponseVideoList) SetVideoId(v string) *GetVideoInfosResponseVideoList {
	s.VideoId = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetTitle(v string) *GetVideoInfosResponseVideoList {
	s.Title = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetTags(v string) *GetVideoInfosResponseVideoList {
	s.Tags = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetStatus(v string) *GetVideoInfosResponseVideoList {
	s.Status = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetSize(v int64) *GetVideoInfosResponseVideoList {
	s.Size = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetDuration(v float32) *GetVideoInfosResponseVideoList {
	s.Duration = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetDescription(v string) *GetVideoInfosResponseVideoList {
	s.Description = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetModificationTime(v string) *GetVideoInfosResponseVideoList {
	s.ModificationTime = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetCreationTime(v string) *GetVideoInfosResponseVideoList {
	s.CreationTime = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetCoverURL(v string) *GetVideoInfosResponseVideoList {
	s.CoverURL = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetCateId(v int64) *GetVideoInfosResponseVideoList {
	s.CateId = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetCateName(v string) *GetVideoInfosResponseVideoList {
	s.CateName = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetDownloadSwitch(v string) *GetVideoInfosResponseVideoList {
	s.DownloadSwitch = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetTemplateGroupId(v string) *GetVideoInfosResponseVideoList {
	s.TemplateGroupId = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetPreprocessStatus(v string) *GetVideoInfosResponseVideoList {
	s.PreprocessStatus = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetStorageLocation(v string) *GetVideoInfosResponseVideoList {
	s.StorageLocation = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetRegionId(v string) *GetVideoInfosResponseVideoList {
	s.RegionId = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetCustomMediaInfo(v string) *GetVideoInfosResponseVideoList {
	s.CustomMediaInfo = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetAppId(v string) *GetVideoInfosResponseVideoList {
	s.AppId = &v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetThumbnailList(v []*GetVideoInfosResponseVideoListThumbnailList) *GetVideoInfosResponseVideoList {
	s.ThumbnailList = v
	return s
}

func (s *GetVideoInfosResponseVideoList) SetSnapshots(v []*string) *GetVideoInfosResponseVideoList {
	s.Snapshots = v
	return s
}

type GetVideoInfosResponseVideoListThumbnailList struct {
	URL *string `json:"URL,omitempty" xml:"URL,omitempty" require:"true"`
}

func (s GetVideoInfosResponseVideoListThumbnailList) String() string {
	return tea.Prettify(s)
}

func (s GetVideoInfosResponseVideoListThumbnailList) GoString() string {
	return s.String()
}

func (s *GetVideoInfosResponseVideoListThumbnailList) SetURL(v string) *GetVideoInfosResponseVideoListThumbnailList {
	s.URL = &v
	return s
}

type SubmitPreprocessJobsRequest struct {
	VideoId        *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	PreprocessType *string `json:"PreprocessType,omitempty" xml:"PreprocessType,omitempty" require:"true"`
}

func (s SubmitPreprocessJobsRequest) String() string {
	return tea.Prettify(s)
}

func (s SubmitPreprocessJobsRequest) GoString() string {
	return s.String()
}

func (s *SubmitPreprocessJobsRequest) SetVideoId(v string) *SubmitPreprocessJobsRequest {
	s.VideoId = &v
	return s
}

func (s *SubmitPreprocessJobsRequest) SetPreprocessType(v string) *SubmitPreprocessJobsRequest {
	s.PreprocessType = &v
	return s
}

type SubmitPreprocessJobsResponse struct {
	RequestId      *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PreprocessJobs *SubmitPreprocessJobsResponsePreprocessJobs `json:"PreprocessJobs,omitempty" xml:"PreprocessJobs,omitempty" require:"true" type:"Struct"`
}

func (s SubmitPreprocessJobsResponse) String() string {
	return tea.Prettify(s)
}

func (s SubmitPreprocessJobsResponse) GoString() string {
	return s.String()
}

func (s *SubmitPreprocessJobsResponse) SetRequestId(v string) *SubmitPreprocessJobsResponse {
	s.RequestId = &v
	return s
}

func (s *SubmitPreprocessJobsResponse) SetPreprocessJobs(v *SubmitPreprocessJobsResponsePreprocessJobs) *SubmitPreprocessJobsResponse {
	s.PreprocessJobs = v
	return s
}

type SubmitPreprocessJobsResponsePreprocessJobs struct {
	PreprocessJob []*SubmitPreprocessJobsResponsePreprocessJobsPreprocessJob `json:"PreprocessJob,omitempty" xml:"PreprocessJob,omitempty" require:"true" type:"Repeated"`
}

func (s SubmitPreprocessJobsResponsePreprocessJobs) String() string {
	return tea.Prettify(s)
}

func (s SubmitPreprocessJobsResponsePreprocessJobs) GoString() string {
	return s.String()
}

func (s *SubmitPreprocessJobsResponsePreprocessJobs) SetPreprocessJob(v []*SubmitPreprocessJobsResponsePreprocessJobsPreprocessJob) *SubmitPreprocessJobsResponsePreprocessJobs {
	s.PreprocessJob = v
	return s
}

type SubmitPreprocessJobsResponsePreprocessJobsPreprocessJob struct {
	JobId *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
}

func (s SubmitPreprocessJobsResponsePreprocessJobsPreprocessJob) String() string {
	return tea.Prettify(s)
}

func (s SubmitPreprocessJobsResponsePreprocessJobsPreprocessJob) GoString() string {
	return s.String()
}

func (s *SubmitPreprocessJobsResponsePreprocessJobsPreprocessJob) SetJobId(v string) *SubmitPreprocessJobsResponsePreprocessJobsPreprocessJob {
	s.JobId = &v
	return s
}

type DescribePlayVideoStatisRequest struct {
	StartTime *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime   *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	VideoId   *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
}

func (s DescribePlayVideoStatisRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayVideoStatisRequest) GoString() string {
	return s.String()
}

func (s *DescribePlayVideoStatisRequest) SetStartTime(v string) *DescribePlayVideoStatisRequest {
	s.StartTime = &v
	return s
}

func (s *DescribePlayVideoStatisRequest) SetEndTime(v string) *DescribePlayVideoStatisRequest {
	s.EndTime = &v
	return s
}

func (s *DescribePlayVideoStatisRequest) SetVideoId(v string) *DescribePlayVideoStatisRequest {
	s.VideoId = &v
	return s
}

type DescribePlayVideoStatisResponse struct {
	RequestId              *string                                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	VideoPlayStatisDetails *DescribePlayVideoStatisResponseVideoPlayStatisDetails `json:"VideoPlayStatisDetails,omitempty" xml:"VideoPlayStatisDetails,omitempty" require:"true" type:"Struct"`
}

func (s DescribePlayVideoStatisResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayVideoStatisResponse) GoString() string {
	return s.String()
}

func (s *DescribePlayVideoStatisResponse) SetRequestId(v string) *DescribePlayVideoStatisResponse {
	s.RequestId = &v
	return s
}

func (s *DescribePlayVideoStatisResponse) SetVideoPlayStatisDetails(v *DescribePlayVideoStatisResponseVideoPlayStatisDetails) *DescribePlayVideoStatisResponse {
	s.VideoPlayStatisDetails = v
	return s
}

type DescribePlayVideoStatisResponseVideoPlayStatisDetails struct {
	VideoPlayStatisDetail []*DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail `json:"VideoPlayStatisDetail,omitempty" xml:"VideoPlayStatisDetail,omitempty" require:"true" type:"Repeated"`
}

func (s DescribePlayVideoStatisResponseVideoPlayStatisDetails) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayVideoStatisResponseVideoPlayStatisDetails) GoString() string {
	return s.String()
}

func (s *DescribePlayVideoStatisResponseVideoPlayStatisDetails) SetVideoPlayStatisDetail(v []*DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail) *DescribePlayVideoStatisResponseVideoPlayStatisDetails {
	s.VideoPlayStatisDetail = v
	return s
}

type DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail struct {
	Date         *string `json:"Date,omitempty" xml:"Date,omitempty" require:"true"`
	PlayDuration *string `json:"PlayDuration,omitempty" xml:"PlayDuration,omitempty" require:"true"`
	VV           *string `json:"VV,omitempty" xml:"VV,omitempty" require:"true"`
	UV           *string `json:"UV,omitempty" xml:"UV,omitempty" require:"true"`
	PlayRange    *string `json:"PlayRange,omitempty" xml:"PlayRange,omitempty" require:"true"`
	Title        *string `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
}

func (s DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail) GoString() string {
	return s.String()
}

func (s *DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail) SetDate(v string) *DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail {
	s.Date = &v
	return s
}

func (s *DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail) SetPlayDuration(v string) *DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail {
	s.PlayDuration = &v
	return s
}

func (s *DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail) SetVV(v string) *DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail {
	s.VV = &v
	return s
}

func (s *DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail) SetUV(v string) *DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail {
	s.UV = &v
	return s
}

func (s *DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail) SetPlayRange(v string) *DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail {
	s.PlayRange = &v
	return s
}

func (s *DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail) SetTitle(v string) *DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail {
	s.Title = &v
	return s
}

type DescribePlayUserTotalRequest struct {
	StartTime *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime   *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
}

func (s DescribePlayUserTotalRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayUserTotalRequest) GoString() string {
	return s.String()
}

func (s *DescribePlayUserTotalRequest) SetStartTime(v string) *DescribePlayUserTotalRequest {
	s.StartTime = &v
	return s
}

func (s *DescribePlayUserTotalRequest) SetEndTime(v string) *DescribePlayUserTotalRequest {
	s.EndTime = &v
	return s
}

type DescribePlayUserTotalResponse struct {
	RequestId            *string                                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	UserPlayStatisTotals *DescribePlayUserTotalResponseUserPlayStatisTotals `json:"UserPlayStatisTotals,omitempty" xml:"UserPlayStatisTotals,omitempty" require:"true" type:"Struct"`
}

func (s DescribePlayUserTotalResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayUserTotalResponse) GoString() string {
	return s.String()
}

func (s *DescribePlayUserTotalResponse) SetRequestId(v string) *DescribePlayUserTotalResponse {
	s.RequestId = &v
	return s
}

func (s *DescribePlayUserTotalResponse) SetUserPlayStatisTotals(v *DescribePlayUserTotalResponseUserPlayStatisTotals) *DescribePlayUserTotalResponse {
	s.UserPlayStatisTotals = v
	return s
}

type DescribePlayUserTotalResponseUserPlayStatisTotals struct {
	UserPlayStatisTotal []*DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal `json:"UserPlayStatisTotal,omitempty" xml:"UserPlayStatisTotal,omitempty" require:"true" type:"Repeated"`
}

func (s DescribePlayUserTotalResponseUserPlayStatisTotals) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayUserTotalResponseUserPlayStatisTotals) GoString() string {
	return s.String()
}

func (s *DescribePlayUserTotalResponseUserPlayStatisTotals) SetUserPlayStatisTotal(v []*DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal) *DescribePlayUserTotalResponseUserPlayStatisTotals {
	s.UserPlayStatisTotal = v
	return s
}

type DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal struct {
	Date         *string                                                                 `json:"Date,omitempty" xml:"Date,omitempty" require:"true"`
	PlayDuration *string                                                                 `json:"PlayDuration,omitempty" xml:"PlayDuration,omitempty" require:"true"`
	PlayRange    *string                                                                 `json:"PlayRange,omitempty" xml:"PlayRange,omitempty" require:"true"`
	VV           *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV `json:"VV,omitempty" xml:"VV,omitempty" require:"true" type:"Struct"`
	UV           *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV `json:"UV,omitempty" xml:"UV,omitempty" require:"true" type:"Struct"`
}

func (s DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal) GoString() string {
	return s.String()
}

func (s *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal) SetDate(v string) *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal {
	s.Date = &v
	return s
}

func (s *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal) SetPlayDuration(v string) *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal {
	s.PlayDuration = &v
	return s
}

func (s *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal) SetPlayRange(v string) *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal {
	s.PlayRange = &v
	return s
}

func (s *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal) SetVV(v *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV) *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal {
	s.VV = v
	return s
}

func (s *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal) SetUV(v *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV) *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal {
	s.UV = v
	return s
}

type DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV struct {
	Android *string `json:"Android,omitempty" xml:"Android,omitempty" require:"true"`
	IOS     *string `json:"iOS,omitempty" xml:"iOS,omitempty" require:"true"`
	Flash   *string `json:"Flash,omitempty" xml:"Flash,omitempty" require:"true"`
	HTML5   *string `json:"HTML5,omitempty" xml:"HTML5,omitempty" require:"true"`
}

func (s DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV) GoString() string {
	return s.String()
}

func (s *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV) SetAndroid(v string) *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV {
	s.Android = &v
	return s
}

func (s *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV) SetIOS(v string) *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV {
	s.IOS = &v
	return s
}

func (s *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV) SetFlash(v string) *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV {
	s.Flash = &v
	return s
}

func (s *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV) SetHTML5(v string) *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV {
	s.HTML5 = &v
	return s
}

type DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV struct {
	Android *string `json:"Android,omitempty" xml:"Android,omitempty" require:"true"`
	IOS     *string `json:"iOS,omitempty" xml:"iOS,omitempty" require:"true"`
	Flash   *string `json:"Flash,omitempty" xml:"Flash,omitempty" require:"true"`
	HTML5   *string `json:"HTML5,omitempty" xml:"HTML5,omitempty" require:"true"`
}

func (s DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV) GoString() string {
	return s.String()
}

func (s *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV) SetAndroid(v string) *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV {
	s.Android = &v
	return s
}

func (s *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV) SetIOS(v string) *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV {
	s.IOS = &v
	return s
}

func (s *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV) SetFlash(v string) *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV {
	s.Flash = &v
	return s
}

func (s *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV) SetHTML5(v string) *DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV {
	s.HTML5 = &v
	return s
}

type DescribePlayUserAvgRequest struct {
	StartTime *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime   *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
}

func (s DescribePlayUserAvgRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayUserAvgRequest) GoString() string {
	return s.String()
}

func (s *DescribePlayUserAvgRequest) SetStartTime(v string) *DescribePlayUserAvgRequest {
	s.StartTime = &v
	return s
}

func (s *DescribePlayUserAvgRequest) SetEndTime(v string) *DescribePlayUserAvgRequest {
	s.EndTime = &v
	return s
}

type DescribePlayUserAvgResponse struct {
	RequestId          *string                                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	UserPlayStatisAvgs *DescribePlayUserAvgResponseUserPlayStatisAvgs `json:"UserPlayStatisAvgs,omitempty" xml:"UserPlayStatisAvgs,omitempty" require:"true" type:"Struct"`
}

func (s DescribePlayUserAvgResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayUserAvgResponse) GoString() string {
	return s.String()
}

func (s *DescribePlayUserAvgResponse) SetRequestId(v string) *DescribePlayUserAvgResponse {
	s.RequestId = &v
	return s
}

func (s *DescribePlayUserAvgResponse) SetUserPlayStatisAvgs(v *DescribePlayUserAvgResponseUserPlayStatisAvgs) *DescribePlayUserAvgResponse {
	s.UserPlayStatisAvgs = v
	return s
}

type DescribePlayUserAvgResponseUserPlayStatisAvgs struct {
	UserPlayStatisAvg []*DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg `json:"UserPlayStatisAvg,omitempty" xml:"UserPlayStatisAvg,omitempty" require:"true" type:"Repeated"`
}

func (s DescribePlayUserAvgResponseUserPlayStatisAvgs) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayUserAvgResponseUserPlayStatisAvgs) GoString() string {
	return s.String()
}

func (s *DescribePlayUserAvgResponseUserPlayStatisAvgs) SetUserPlayStatisAvg(v []*DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg) *DescribePlayUserAvgResponseUserPlayStatisAvgs {
	s.UserPlayStatisAvg = v
	return s
}

type DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg struct {
	Date            *string `json:"Date,omitempty" xml:"Date,omitempty" require:"true"`
	AvgPlayDuration *string `json:"AvgPlayDuration,omitempty" xml:"AvgPlayDuration,omitempty" require:"true"`
	AvgPlayCount    *string `json:"AvgPlayCount,omitempty" xml:"AvgPlayCount,omitempty" require:"true"`
}

func (s DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg) GoString() string {
	return s.String()
}

func (s *DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg) SetDate(v string) *DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg {
	s.Date = &v
	return s
}

func (s *DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg) SetAvgPlayDuration(v string) *DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg {
	s.AvgPlayDuration = &v
	return s
}

func (s *DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg) SetAvgPlayCount(v string) *DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg {
	s.AvgPlayCount = &v
	return s
}

type DescribePlayTopVideosRequest struct {
	BizDate  *string `json:"BizDate,omitempty" xml:"BizDate,omitempty" require:"true"`
	PageNo   *int64  `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
	PageSize *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s DescribePlayTopVideosRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayTopVideosRequest) GoString() string {
	return s.String()
}

func (s *DescribePlayTopVideosRequest) SetBizDate(v string) *DescribePlayTopVideosRequest {
	s.BizDate = &v
	return s
}

func (s *DescribePlayTopVideosRequest) SetPageNo(v int64) *DescribePlayTopVideosRequest {
	s.PageNo = &v
	return s
}

func (s *DescribePlayTopVideosRequest) SetPageSize(v int64) *DescribePlayTopVideosRequest {
	s.PageSize = &v
	return s
}

type DescribePlayTopVideosResponse struct {
	RequestId     *string                                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageNo        *int64                                      `json:"PageNo,omitempty" xml:"PageNo,omitempty" require:"true"`
	PageSize      *int64                                      `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalNum      *int64                                      `json:"TotalNum,omitempty" xml:"TotalNum,omitempty" require:"true"`
	TopPlayVideos *DescribePlayTopVideosResponseTopPlayVideos `json:"TopPlayVideos,omitempty" xml:"TopPlayVideos,omitempty" require:"true" type:"Struct"`
}

func (s DescribePlayTopVideosResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayTopVideosResponse) GoString() string {
	return s.String()
}

func (s *DescribePlayTopVideosResponse) SetRequestId(v string) *DescribePlayTopVideosResponse {
	s.RequestId = &v
	return s
}

func (s *DescribePlayTopVideosResponse) SetPageNo(v int64) *DescribePlayTopVideosResponse {
	s.PageNo = &v
	return s
}

func (s *DescribePlayTopVideosResponse) SetPageSize(v int64) *DescribePlayTopVideosResponse {
	s.PageSize = &v
	return s
}

func (s *DescribePlayTopVideosResponse) SetTotalNum(v int64) *DescribePlayTopVideosResponse {
	s.TotalNum = &v
	return s
}

func (s *DescribePlayTopVideosResponse) SetTopPlayVideos(v *DescribePlayTopVideosResponseTopPlayVideos) *DescribePlayTopVideosResponse {
	s.TopPlayVideos = v
	return s
}

type DescribePlayTopVideosResponseTopPlayVideos struct {
	TopPlayVideoStatis []*DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis `json:"TopPlayVideoStatis,omitempty" xml:"TopPlayVideoStatis,omitempty" require:"true" type:"Repeated"`
}

func (s DescribePlayTopVideosResponseTopPlayVideos) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayTopVideosResponseTopPlayVideos) GoString() string {
	return s.String()
}

func (s *DescribePlayTopVideosResponseTopPlayVideos) SetTopPlayVideoStatis(v []*DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis) *DescribePlayTopVideosResponseTopPlayVideos {
	s.TopPlayVideoStatis = v
	return s
}

type DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis struct {
	PlayDuration *string `json:"PlayDuration,omitempty" xml:"PlayDuration,omitempty" require:"true"`
	VV           *string `json:"VV,omitempty" xml:"VV,omitempty" require:"true"`
	UV           *string `json:"UV,omitempty" xml:"UV,omitempty" require:"true"`
	VideoId      *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	Title        *string `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
}

func (s DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis) String() string {
	return tea.Prettify(s)
}

func (s DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis) GoString() string {
	return s.String()
}

func (s *DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis) SetPlayDuration(v string) *DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis {
	s.PlayDuration = &v
	return s
}

func (s *DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis) SetVV(v string) *DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis {
	s.VV = &v
	return s
}

func (s *DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis) SetUV(v string) *DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis {
	s.UV = &v
	return s
}

func (s *DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis) SetVideoId(v string) *DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis {
	s.VideoId = &v
	return s
}

func (s *DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis) SetTitle(v string) *DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis {
	s.Title = &v
	return s
}

type ListSnapshotsRequest struct {
	VideoId      *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	SnapshotType *string `json:"SnapshotType,omitempty" xml:"SnapshotType,omitempty"`
	AuthTimeout  *string `json:"AuthTimeout,omitempty" xml:"AuthTimeout,omitempty"`
	PageSize     *string `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNo       *string `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
}

func (s ListSnapshotsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListSnapshotsRequest) GoString() string {
	return s.String()
}

func (s *ListSnapshotsRequest) SetVideoId(v string) *ListSnapshotsRequest {
	s.VideoId = &v
	return s
}

func (s *ListSnapshotsRequest) SetSnapshotType(v string) *ListSnapshotsRequest {
	s.SnapshotType = &v
	return s
}

func (s *ListSnapshotsRequest) SetAuthTimeout(v string) *ListSnapshotsRequest {
	s.AuthTimeout = &v
	return s
}

func (s *ListSnapshotsRequest) SetPageSize(v string) *ListSnapshotsRequest {
	s.PageSize = &v
	return s
}

func (s *ListSnapshotsRequest) SetPageNo(v string) *ListSnapshotsRequest {
	s.PageNo = &v
	return s
}

type ListSnapshotsResponse struct {
	RequestId     *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MediaSnapshot *ListSnapshotsResponseMediaSnapshot `json:"MediaSnapshot,omitempty" xml:"MediaSnapshot,omitempty" require:"true" type:"Struct"`
}

func (s ListSnapshotsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListSnapshotsResponse) GoString() string {
	return s.String()
}

func (s *ListSnapshotsResponse) SetRequestId(v string) *ListSnapshotsResponse {
	s.RequestId = &v
	return s
}

func (s *ListSnapshotsResponse) SetMediaSnapshot(v *ListSnapshotsResponseMediaSnapshot) *ListSnapshotsResponse {
	s.MediaSnapshot = v
	return s
}

type ListSnapshotsResponseMediaSnapshot struct {
	Total        *int64                                       `json:"Total,omitempty" xml:"Total,omitempty" require:"true"`
	Regular      *string                                      `json:"Regular,omitempty" xml:"Regular,omitempty" require:"true"`
	CreationTime *string                                      `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	JobId        *string                                      `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
	Snapshots    *ListSnapshotsResponseMediaSnapshotSnapshots `json:"Snapshots,omitempty" xml:"Snapshots,omitempty" require:"true" type:"Struct"`
}

func (s ListSnapshotsResponseMediaSnapshot) String() string {
	return tea.Prettify(s)
}

func (s ListSnapshotsResponseMediaSnapshot) GoString() string {
	return s.String()
}

func (s *ListSnapshotsResponseMediaSnapshot) SetTotal(v int64) *ListSnapshotsResponseMediaSnapshot {
	s.Total = &v
	return s
}

func (s *ListSnapshotsResponseMediaSnapshot) SetRegular(v string) *ListSnapshotsResponseMediaSnapshot {
	s.Regular = &v
	return s
}

func (s *ListSnapshotsResponseMediaSnapshot) SetCreationTime(v string) *ListSnapshotsResponseMediaSnapshot {
	s.CreationTime = &v
	return s
}

func (s *ListSnapshotsResponseMediaSnapshot) SetJobId(v string) *ListSnapshotsResponseMediaSnapshot {
	s.JobId = &v
	return s
}

func (s *ListSnapshotsResponseMediaSnapshot) SetSnapshots(v *ListSnapshotsResponseMediaSnapshotSnapshots) *ListSnapshotsResponseMediaSnapshot {
	s.Snapshots = v
	return s
}

type ListSnapshotsResponseMediaSnapshotSnapshots struct {
	Snapshot []*ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot `json:"Snapshot,omitempty" xml:"Snapshot,omitempty" require:"true" type:"Repeated"`
}

func (s ListSnapshotsResponseMediaSnapshotSnapshots) String() string {
	return tea.Prettify(s)
}

func (s ListSnapshotsResponseMediaSnapshotSnapshots) GoString() string {
	return s.String()
}

func (s *ListSnapshotsResponseMediaSnapshotSnapshots) SetSnapshot(v []*ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot) *ListSnapshotsResponseMediaSnapshotSnapshots {
	s.Snapshot = v
	return s
}

type ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot struct {
	Index *int64  `json:"Index,omitempty" xml:"Index,omitempty" require:"true"`
	Url   *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot) String() string {
	return tea.Prettify(s)
}

func (s ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot) GoString() string {
	return s.String()
}

func (s *ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot) SetIndex(v int64) *ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot {
	s.Index = &v
	return s
}

func (s *ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot) SetUrl(v string) *ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot {
	s.Url = &v
	return s
}

type SubmitTranscodeJobsRequest struct {
	VideoId         *string `json:"VideoId,omitempty" xml:"VideoId,omitempty"`
	TemplateGroupId *string `json:"TemplateGroupId,omitempty" xml:"TemplateGroupId,omitempty" require:"true"`
	PipelineId      *string `json:"PipelineId,omitempty" xml:"PipelineId,omitempty"`
	EncryptConfig   *string `json:"EncryptConfig,omitempty" xml:"EncryptConfig,omitempty"`
	OverrideParams  *string `json:"OverrideParams,omitempty" xml:"OverrideParams,omitempty"`
	Priority        *string `json:"Priority,omitempty" xml:"Priority,omitempty"`
	UserData        *string `json:"UserData,omitempty" xml:"UserData,omitempty"`
	FileUrl         *string `json:"FileUrl,omitempty" xml:"FileUrl,omitempty"`
}

func (s SubmitTranscodeJobsRequest) String() string {
	return tea.Prettify(s)
}

func (s SubmitTranscodeJobsRequest) GoString() string {
	return s.String()
}

func (s *SubmitTranscodeJobsRequest) SetVideoId(v string) *SubmitTranscodeJobsRequest {
	s.VideoId = &v
	return s
}

func (s *SubmitTranscodeJobsRequest) SetTemplateGroupId(v string) *SubmitTranscodeJobsRequest {
	s.TemplateGroupId = &v
	return s
}

func (s *SubmitTranscodeJobsRequest) SetPipelineId(v string) *SubmitTranscodeJobsRequest {
	s.PipelineId = &v
	return s
}

func (s *SubmitTranscodeJobsRequest) SetEncryptConfig(v string) *SubmitTranscodeJobsRequest {
	s.EncryptConfig = &v
	return s
}

func (s *SubmitTranscodeJobsRequest) SetOverrideParams(v string) *SubmitTranscodeJobsRequest {
	s.OverrideParams = &v
	return s
}

func (s *SubmitTranscodeJobsRequest) SetPriority(v string) *SubmitTranscodeJobsRequest {
	s.Priority = &v
	return s
}

func (s *SubmitTranscodeJobsRequest) SetUserData(v string) *SubmitTranscodeJobsRequest {
	s.UserData = &v
	return s
}

func (s *SubmitTranscodeJobsRequest) SetFileUrl(v string) *SubmitTranscodeJobsRequest {
	s.FileUrl = &v
	return s
}

type SubmitTranscodeJobsResponse struct {
	RequestId       *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	TranscodeTaskId *string                                   `json:"TranscodeTaskId,omitempty" xml:"TranscodeTaskId,omitempty" require:"true"`
	TranscodeJobs   *SubmitTranscodeJobsResponseTranscodeJobs `json:"TranscodeJobs,omitempty" xml:"TranscodeJobs,omitempty" require:"true" type:"Struct"`
}

func (s SubmitTranscodeJobsResponse) String() string {
	return tea.Prettify(s)
}

func (s SubmitTranscodeJobsResponse) GoString() string {
	return s.String()
}

func (s *SubmitTranscodeJobsResponse) SetRequestId(v string) *SubmitTranscodeJobsResponse {
	s.RequestId = &v
	return s
}

func (s *SubmitTranscodeJobsResponse) SetTranscodeTaskId(v string) *SubmitTranscodeJobsResponse {
	s.TranscodeTaskId = &v
	return s
}

func (s *SubmitTranscodeJobsResponse) SetTranscodeJobs(v *SubmitTranscodeJobsResponseTranscodeJobs) *SubmitTranscodeJobsResponse {
	s.TranscodeJobs = v
	return s
}

type SubmitTranscodeJobsResponseTranscodeJobs struct {
	TranscodeJob []*SubmitTranscodeJobsResponseTranscodeJobsTranscodeJob `json:"TranscodeJob,omitempty" xml:"TranscodeJob,omitempty" require:"true" type:"Repeated"`
}

func (s SubmitTranscodeJobsResponseTranscodeJobs) String() string {
	return tea.Prettify(s)
}

func (s SubmitTranscodeJobsResponseTranscodeJobs) GoString() string {
	return s.String()
}

func (s *SubmitTranscodeJobsResponseTranscodeJobs) SetTranscodeJob(v []*SubmitTranscodeJobsResponseTranscodeJobsTranscodeJob) *SubmitTranscodeJobsResponseTranscodeJobs {
	s.TranscodeJob = v
	return s
}

type SubmitTranscodeJobsResponseTranscodeJobsTranscodeJob struct {
	JobId *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
}

func (s SubmitTranscodeJobsResponseTranscodeJobsTranscodeJob) String() string {
	return tea.Prettify(s)
}

func (s SubmitTranscodeJobsResponseTranscodeJobsTranscodeJob) GoString() string {
	return s.String()
}

func (s *SubmitTranscodeJobsResponseTranscodeJobsTranscodeJob) SetJobId(v string) *SubmitTranscodeJobsResponseTranscodeJobsTranscodeJob {
	s.JobId = &v
	return s
}

type ListLiveRecordVideoRequest struct {
	StreamName *string `json:"StreamName,omitempty" xml:"StreamName,omitempty"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
	AppName    *string `json:"AppName,omitempty" xml:"AppName,omitempty"`
	QueryType  *string `json:"QueryType,omitempty" xml:"QueryType,omitempty"`
	PageNo     *int    `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	SortBy     *string `json:"SortBy,omitempty" xml:"SortBy,omitempty"`
	StartTime  *string `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime    *string `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
}

func (s ListLiveRecordVideoRequest) String() string {
	return tea.Prettify(s)
}

func (s ListLiveRecordVideoRequest) GoString() string {
	return s.String()
}

func (s *ListLiveRecordVideoRequest) SetStreamName(v string) *ListLiveRecordVideoRequest {
	s.StreamName = &v
	return s
}

func (s *ListLiveRecordVideoRequest) SetDomainName(v string) *ListLiveRecordVideoRequest {
	s.DomainName = &v
	return s
}

func (s *ListLiveRecordVideoRequest) SetAppName(v string) *ListLiveRecordVideoRequest {
	s.AppName = &v
	return s
}

func (s *ListLiveRecordVideoRequest) SetQueryType(v string) *ListLiveRecordVideoRequest {
	s.QueryType = &v
	return s
}

func (s *ListLiveRecordVideoRequest) SetPageNo(v int) *ListLiveRecordVideoRequest {
	s.PageNo = &v
	return s
}

func (s *ListLiveRecordVideoRequest) SetPageSize(v int) *ListLiveRecordVideoRequest {
	s.PageSize = &v
	return s
}

func (s *ListLiveRecordVideoRequest) SetSortBy(v string) *ListLiveRecordVideoRequest {
	s.SortBy = &v
	return s
}

func (s *ListLiveRecordVideoRequest) SetStartTime(v string) *ListLiveRecordVideoRequest {
	s.StartTime = &v
	return s
}

func (s *ListLiveRecordVideoRequest) SetEndTime(v string) *ListLiveRecordVideoRequest {
	s.EndTime = &v
	return s
}

type ListLiveRecordVideoResponse struct {
	RequestId           *string                                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Total               *int                                            `json:"Total,omitempty" xml:"Total,omitempty" require:"true"`
	LiveRecordVideoList *ListLiveRecordVideoResponseLiveRecordVideoList `json:"LiveRecordVideoList,omitempty" xml:"LiveRecordVideoList,omitempty" require:"true" type:"Struct"`
}

func (s ListLiveRecordVideoResponse) String() string {
	return tea.Prettify(s)
}

func (s ListLiveRecordVideoResponse) GoString() string {
	return s.String()
}

func (s *ListLiveRecordVideoResponse) SetRequestId(v string) *ListLiveRecordVideoResponse {
	s.RequestId = &v
	return s
}

func (s *ListLiveRecordVideoResponse) SetTotal(v int) *ListLiveRecordVideoResponse {
	s.Total = &v
	return s
}

func (s *ListLiveRecordVideoResponse) SetLiveRecordVideoList(v *ListLiveRecordVideoResponseLiveRecordVideoList) *ListLiveRecordVideoResponse {
	s.LiveRecordVideoList = v
	return s
}

type ListLiveRecordVideoResponseLiveRecordVideoList struct {
	LiveRecordVideo []*ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo `json:"LiveRecordVideo,omitempty" xml:"LiveRecordVideo,omitempty" require:"true" type:"Repeated"`
}

func (s ListLiveRecordVideoResponseLiveRecordVideoList) String() string {
	return tea.Prettify(s)
}

func (s ListLiveRecordVideoResponseLiveRecordVideoList) GoString() string {
	return s.String()
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoList) SetLiveRecordVideo(v []*ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo) *ListLiveRecordVideoResponseLiveRecordVideoList {
	s.LiveRecordVideo = v
	return s
}

type ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo struct {
	StreamName      *string                                                                    `json:"StreamName,omitempty" xml:"StreamName,omitempty" require:"true"`
	DomainName      *string                                                                    `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	AppName         *string                                                                    `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
	PlaylistId      *string                                                                    `json:"PlaylistId,omitempty" xml:"PlaylistId,omitempty" require:"true"`
	RecordStartTime *string                                                                    `json:"RecordStartTime,omitempty" xml:"RecordStartTime,omitempty" require:"true"`
	RecordEndTime   *string                                                                    `json:"RecordEndTime,omitempty" xml:"RecordEndTime,omitempty" require:"true"`
	PlayInfoList    *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoList `json:"PlayInfoList,omitempty" xml:"PlayInfoList,omitempty" require:"true" type:"Struct"`
	Video           *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo        `json:"Video,omitempty" xml:"Video,omitempty" require:"true" type:"Struct"`
}

func (s ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo) String() string {
	return tea.Prettify(s)
}

func (s ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo) GoString() string {
	return s.String()
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo) SetStreamName(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo {
	s.StreamName = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo) SetDomainName(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo {
	s.DomainName = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo) SetAppName(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo {
	s.AppName = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo) SetPlaylistId(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo {
	s.PlaylistId = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo) SetRecordStartTime(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo {
	s.RecordStartTime = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo) SetRecordEndTime(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo {
	s.RecordEndTime = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo) SetPlayInfoList(v *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoList) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo {
	s.PlayInfoList = v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo) SetVideo(v *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo {
	s.Video = v
	return s
}

type ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoList struct {
	PlayInfo []*ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo `json:"PlayInfo,omitempty" xml:"PlayInfo,omitempty" require:"true" type:"Repeated"`
}

func (s ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoList) String() string {
	return tea.Prettify(s)
}

func (s ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoList) GoString() string {
	return s.String()
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoList) SetPlayInfo(v []*ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoList {
	s.PlayInfo = v
	return s
}

type ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo struct {
	Width      *int64  `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height     *int64  `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Size       *int64  `json:"Size,omitempty" xml:"Size,omitempty" require:"true"`
	PlayURL    *string `json:"PlayURL,omitempty" xml:"PlayURL,omitempty" require:"true"`
	Bitrate    *string `json:"Bitrate,omitempty" xml:"Bitrate,omitempty" require:"true"`
	Definition *string `json:"Definition,omitempty" xml:"Definition,omitempty" require:"true"`
	Duration   *string `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Format     *string `json:"Format,omitempty" xml:"Format,omitempty" require:"true"`
	Fps        *string `json:"Fps,omitempty" xml:"Fps,omitempty" require:"true"`
	Encrypt    *int64  `json:"Encrypt,omitempty" xml:"Encrypt,omitempty" require:"true"`
	Plaintext  *string `json:"Plaintext,omitempty" xml:"Plaintext,omitempty" require:"true"`
	Complexity *string `json:"Complexity,omitempty" xml:"Complexity,omitempty" require:"true"`
	StreamType *string `json:"StreamType,omitempty" xml:"StreamType,omitempty" require:"true"`
	Rand       *string `json:"Rand,omitempty" xml:"Rand,omitempty" require:"true"`
	JobId      *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
}

func (s ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) String() string {
	return tea.Prettify(s)
}

func (s ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) GoString() string {
	return s.String()
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetWidth(v int64) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.Width = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetHeight(v int64) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.Height = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetSize(v int64) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.Size = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetPlayURL(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.PlayURL = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetBitrate(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.Bitrate = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetDefinition(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.Definition = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetDuration(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.Duration = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetFormat(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.Format = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetFps(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.Fps = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetEncrypt(v int64) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.Encrypt = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetPlaintext(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.Plaintext = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetComplexity(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.Complexity = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetStreamType(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.StreamType = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetRand(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.Rand = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo) SetJobId(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo {
	s.JobId = &v
	return s
}

type ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo struct {
	VideoId         *string                                                                      `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	Title           *string                                                                      `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	Tags            *string                                                                      `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true"`
	Status          *string                                                                      `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Size            *int64                                                                       `json:"Size,omitempty" xml:"Size,omitempty" require:"true"`
	Privilege       *int                                                                         `json:"Privilege,omitempty" xml:"Privilege,omitempty" require:"true"`
	Duration        *float32                                                                     `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Description     *string                                                                      `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CustomerId      *int64                                                                       `json:"CustomerId,omitempty" xml:"CustomerId,omitempty" require:"true"`
	CreateTime      *string                                                                      `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	CreationTime    *string                                                                      `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModifyTime      *string                                                                      `json:"ModifyTime,omitempty" xml:"ModifyTime,omitempty" require:"true"`
	CoverURL        *string                                                                      `json:"CoverURL,omitempty" xml:"CoverURL,omitempty" require:"true"`
	CateId          *int                                                                         `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
	CateName        *string                                                                      `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	DownloadSwitch  *string                                                                      `json:"DownloadSwitch,omitempty" xml:"DownloadSwitch,omitempty" require:"true"`
	TemplateGroupId *string                                                                      `json:"TemplateGroupId,omitempty" xml:"TemplateGroupId,omitempty" require:"true"`
	Snapshots       *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideoSnapshots `json:"Snapshots,omitempty" xml:"Snapshots,omitempty" require:"true" type:"Struct"`
}

func (s ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) String() string {
	return tea.Prettify(s)
}

func (s ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) GoString() string {
	return s.String()
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetVideoId(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.VideoId = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetTitle(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.Title = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetTags(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.Tags = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetStatus(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.Status = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetSize(v int64) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.Size = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetPrivilege(v int) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.Privilege = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetDuration(v float32) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.Duration = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetDescription(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.Description = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetCustomerId(v int64) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.CustomerId = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetCreateTime(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.CreateTime = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetCreationTime(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.CreationTime = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetModifyTime(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.ModifyTime = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetCoverURL(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.CoverURL = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetCateId(v int) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.CateId = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetCateName(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.CateName = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetDownloadSwitch(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.DownloadSwitch = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetTemplateGroupId(v string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.TemplateGroupId = &v
	return s
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo) SetSnapshots(v *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideoSnapshots) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo {
	s.Snapshots = v
	return s
}

type ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideoSnapshots struct {
	Snapshot []*string `json:"Snapshot,omitempty" xml:"Snapshot,omitempty" require:"true" type:"Repeated"`
}

func (s ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideoSnapshots) String() string {
	return tea.Prettify(s)
}

func (s ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideoSnapshots) GoString() string {
	return s.String()
}

func (s *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideoSnapshots) SetSnapshot(v []*string) *ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideoSnapshots {
	s.Snapshot = v
	return s
}

type CreateAuditRequest struct {
	AuditContent *string `json:"AuditContent,omitempty" xml:"AuditContent,omitempty" require:"true"`
}

func (s CreateAuditRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateAuditRequest) GoString() string {
	return s.String()
}

func (s *CreateAuditRequest) SetAuditContent(v string) *CreateAuditRequest {
	s.AuditContent = &v
	return s
}

type CreateAuditResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CreateAuditResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateAuditResponse) GoString() string {
	return s.String()
}

func (s *CreateAuditResponse) SetRequestId(v string) *CreateAuditResponse {
	s.RequestId = &v
	return s
}

type GetAuditHistoryRequest struct {
	VideoId  *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	PageNo   *int64  `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
	PageSize *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	SortBy   *string `json:"SortBy,omitempty" xml:"SortBy,omitempty"`
}

func (s GetAuditHistoryRequest) String() string {
	return tea.Prettify(s)
}

func (s GetAuditHistoryRequest) GoString() string {
	return s.String()
}

func (s *GetAuditHistoryRequest) SetVideoId(v string) *GetAuditHistoryRequest {
	s.VideoId = &v
	return s
}

func (s *GetAuditHistoryRequest) SetPageNo(v int64) *GetAuditHistoryRequest {
	s.PageNo = &v
	return s
}

func (s *GetAuditHistoryRequest) SetPageSize(v int64) *GetAuditHistoryRequest {
	s.PageSize = &v
	return s
}

func (s *GetAuditHistoryRequest) SetSortBy(v string) *GetAuditHistoryRequest {
	s.SortBy = &v
	return s
}

type GetAuditHistoryResponse struct {
	RequestId *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Status    *string                             `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Total     *int64                              `json:"Total,omitempty" xml:"Total,omitempty" require:"true"`
	Histories []*GetAuditHistoryResponseHistories `json:"Histories,omitempty" xml:"Histories,omitempty" require:"true" type:"Repeated"`
}

func (s GetAuditHistoryResponse) String() string {
	return tea.Prettify(s)
}

func (s GetAuditHistoryResponse) GoString() string {
	return s.String()
}

func (s *GetAuditHistoryResponse) SetRequestId(v string) *GetAuditHistoryResponse {
	s.RequestId = &v
	return s
}

func (s *GetAuditHistoryResponse) SetStatus(v string) *GetAuditHistoryResponse {
	s.Status = &v
	return s
}

func (s *GetAuditHistoryResponse) SetTotal(v int64) *GetAuditHistoryResponse {
	s.Total = &v
	return s
}

func (s *GetAuditHistoryResponse) SetHistories(v []*GetAuditHistoryResponseHistories) *GetAuditHistoryResponse {
	s.Histories = v
	return s
}

type GetAuditHistoryResponseHistories struct {
	CreationTime *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Reason       *string `json:"Reason,omitempty" xml:"Reason,omitempty" require:"true"`
	Comment      *string `json:"Comment,omitempty" xml:"Comment,omitempty" require:"true"`
	Auditor      *string `json:"Auditor,omitempty" xml:"Auditor,omitempty" require:"true"`
}

func (s GetAuditHistoryResponseHistories) String() string {
	return tea.Prettify(s)
}

func (s GetAuditHistoryResponseHistories) GoString() string {
	return s.String()
}

func (s *GetAuditHistoryResponseHistories) SetCreationTime(v string) *GetAuditHistoryResponseHistories {
	s.CreationTime = &v
	return s
}

func (s *GetAuditHistoryResponseHistories) SetStatus(v string) *GetAuditHistoryResponseHistories {
	s.Status = &v
	return s
}

func (s *GetAuditHistoryResponseHistories) SetReason(v string) *GetAuditHistoryResponseHistories {
	s.Reason = &v
	return s
}

func (s *GetAuditHistoryResponseHistories) SetComment(v string) *GetAuditHistoryResponseHistories {
	s.Comment = &v
	return s
}

func (s *GetAuditHistoryResponseHistories) SetAuditor(v string) *GetAuditHistoryResponseHistories {
	s.Auditor = &v
	return s
}

type ListAIJobRequest struct {
	JobIds *string `json:"JobIds,omitempty" xml:"JobIds,omitempty" require:"true"`
}

func (s ListAIJobRequest) String() string {
	return tea.Prettify(s)
}

func (s ListAIJobRequest) GoString() string {
	return s.String()
}

func (s *ListAIJobRequest) SetJobIds(v string) *ListAIJobRequest {
	s.JobIds = &v
	return s
}

type ListAIJobResponse struct {
	RequestId        *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AIJobList        *ListAIJobResponseAIJobList        `json:"AIJobList,omitempty" xml:"AIJobList,omitempty" require:"true" type:"Struct"`
	NonExistAIJobIds *ListAIJobResponseNonExistAIJobIds `json:"NonExistAIJobIds,omitempty" xml:"NonExistAIJobIds,omitempty" require:"true" type:"Struct"`
}

func (s ListAIJobResponse) String() string {
	return tea.Prettify(s)
}

func (s ListAIJobResponse) GoString() string {
	return s.String()
}

func (s *ListAIJobResponse) SetRequestId(v string) *ListAIJobResponse {
	s.RequestId = &v
	return s
}

func (s *ListAIJobResponse) SetAIJobList(v *ListAIJobResponseAIJobList) *ListAIJobResponse {
	s.AIJobList = v
	return s
}

func (s *ListAIJobResponse) SetNonExistAIJobIds(v *ListAIJobResponseNonExistAIJobIds) *ListAIJobResponse {
	s.NonExistAIJobIds = v
	return s
}

type ListAIJobResponseAIJobList struct {
	AIJob []*ListAIJobResponseAIJobListAIJob `json:"AIJob,omitempty" xml:"AIJob,omitempty" require:"true" type:"Repeated"`
}

func (s ListAIJobResponseAIJobList) String() string {
	return tea.Prettify(s)
}

func (s ListAIJobResponseAIJobList) GoString() string {
	return s.String()
}

func (s *ListAIJobResponseAIJobList) SetAIJob(v []*ListAIJobResponseAIJobListAIJob) *ListAIJobResponseAIJobList {
	s.AIJob = v
	return s
}

type ListAIJobResponseAIJobListAIJob struct {
	JobId        *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
	MediaId      *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	Type         *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Code         *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message      *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	CreationTime *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	CompleteTime *string `json:"CompleteTime,omitempty" xml:"CompleteTime,omitempty" require:"true"`
	Data         *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s ListAIJobResponseAIJobListAIJob) String() string {
	return tea.Prettify(s)
}

func (s ListAIJobResponseAIJobListAIJob) GoString() string {
	return s.String()
}

func (s *ListAIJobResponseAIJobListAIJob) SetJobId(v string) *ListAIJobResponseAIJobListAIJob {
	s.JobId = &v
	return s
}

func (s *ListAIJobResponseAIJobListAIJob) SetMediaId(v string) *ListAIJobResponseAIJobListAIJob {
	s.MediaId = &v
	return s
}

func (s *ListAIJobResponseAIJobListAIJob) SetType(v string) *ListAIJobResponseAIJobListAIJob {
	s.Type = &v
	return s
}

func (s *ListAIJobResponseAIJobListAIJob) SetStatus(v string) *ListAIJobResponseAIJobListAIJob {
	s.Status = &v
	return s
}

func (s *ListAIJobResponseAIJobListAIJob) SetCode(v string) *ListAIJobResponseAIJobListAIJob {
	s.Code = &v
	return s
}

func (s *ListAIJobResponseAIJobListAIJob) SetMessage(v string) *ListAIJobResponseAIJobListAIJob {
	s.Message = &v
	return s
}

func (s *ListAIJobResponseAIJobListAIJob) SetCreationTime(v string) *ListAIJobResponseAIJobListAIJob {
	s.CreationTime = &v
	return s
}

func (s *ListAIJobResponseAIJobListAIJob) SetCompleteTime(v string) *ListAIJobResponseAIJobListAIJob {
	s.CompleteTime = &v
	return s
}

func (s *ListAIJobResponseAIJobListAIJob) SetData(v string) *ListAIJobResponseAIJobListAIJob {
	s.Data = &v
	return s
}

type ListAIJobResponseNonExistAIJobIds struct {
	String []*string `json:"String,omitempty" xml:"String,omitempty" require:"true" type:"Repeated"`
}

func (s ListAIJobResponseNonExistAIJobIds) String() string {
	return tea.Prettify(s)
}

func (s ListAIJobResponseNonExistAIJobIds) GoString() string {
	return s.String()
}

func (s *ListAIJobResponseNonExistAIJobIds) SetString(v []*string) *ListAIJobResponseNonExistAIJobIds {
	s.String = v
	return s
}

type SubmitAIJobRequest struct {
	MediaId  *string `json:"MediaId,omitempty" xml:"MediaId,omitempty"`
	Types    *string `json:"Types,omitempty" xml:"Types,omitempty"`
	Config   *string `json:"Config,omitempty" xml:"Config,omitempty"`
	UserData *string `json:"UserData,omitempty" xml:"UserData,omitempty"`
	Input    *string `json:"Input,omitempty" xml:"Input,omitempty"`
}

func (s SubmitAIJobRequest) String() string {
	return tea.Prettify(s)
}

func (s SubmitAIJobRequest) GoString() string {
	return s.String()
}

func (s *SubmitAIJobRequest) SetMediaId(v string) *SubmitAIJobRequest {
	s.MediaId = &v
	return s
}

func (s *SubmitAIJobRequest) SetTypes(v string) *SubmitAIJobRequest {
	s.Types = &v
	return s
}

func (s *SubmitAIJobRequest) SetConfig(v string) *SubmitAIJobRequest {
	s.Config = &v
	return s
}

func (s *SubmitAIJobRequest) SetUserData(v string) *SubmitAIJobRequest {
	s.UserData = &v
	return s
}

func (s *SubmitAIJobRequest) SetInput(v string) *SubmitAIJobRequest {
	s.Input = &v
	return s
}

type SubmitAIJobResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AIJobList *SubmitAIJobResponseAIJobList `json:"AIJobList,omitempty" xml:"AIJobList,omitempty" require:"true" type:"Struct"`
}

func (s SubmitAIJobResponse) String() string {
	return tea.Prettify(s)
}

func (s SubmitAIJobResponse) GoString() string {
	return s.String()
}

func (s *SubmitAIJobResponse) SetRequestId(v string) *SubmitAIJobResponse {
	s.RequestId = &v
	return s
}

func (s *SubmitAIJobResponse) SetAIJobList(v *SubmitAIJobResponseAIJobList) *SubmitAIJobResponse {
	s.AIJobList = v
	return s
}

type SubmitAIJobResponseAIJobList struct {
	AIJob []*SubmitAIJobResponseAIJobListAIJob `json:"AIJob,omitempty" xml:"AIJob,omitempty" require:"true" type:"Repeated"`
}

func (s SubmitAIJobResponseAIJobList) String() string {
	return tea.Prettify(s)
}

func (s SubmitAIJobResponseAIJobList) GoString() string {
	return s.String()
}

func (s *SubmitAIJobResponseAIJobList) SetAIJob(v []*SubmitAIJobResponseAIJobListAIJob) *SubmitAIJobResponseAIJobList {
	s.AIJob = v
	return s
}

type SubmitAIJobResponseAIJobListAIJob struct {
	JobId        *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
	Type         *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	MediaId      *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Code         *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message      *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	CreationTime *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	Data         *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s SubmitAIJobResponseAIJobListAIJob) String() string {
	return tea.Prettify(s)
}

func (s SubmitAIJobResponseAIJobListAIJob) GoString() string {
	return s.String()
}

func (s *SubmitAIJobResponseAIJobListAIJob) SetJobId(v string) *SubmitAIJobResponseAIJobListAIJob {
	s.JobId = &v
	return s
}

func (s *SubmitAIJobResponseAIJobListAIJob) SetType(v string) *SubmitAIJobResponseAIJobListAIJob {
	s.Type = &v
	return s
}

func (s *SubmitAIJobResponseAIJobListAIJob) SetMediaId(v string) *SubmitAIJobResponseAIJobListAIJob {
	s.MediaId = &v
	return s
}

func (s *SubmitAIJobResponseAIJobListAIJob) SetStatus(v string) *SubmitAIJobResponseAIJobListAIJob {
	s.Status = &v
	return s
}

func (s *SubmitAIJobResponseAIJobListAIJob) SetCode(v string) *SubmitAIJobResponseAIJobListAIJob {
	s.Code = &v
	return s
}

func (s *SubmitAIJobResponseAIJobListAIJob) SetMessage(v string) *SubmitAIJobResponseAIJobListAIJob {
	s.Message = &v
	return s
}

func (s *SubmitAIJobResponseAIJobListAIJob) SetCreationTime(v string) *SubmitAIJobResponseAIJobListAIJob {
	s.CreationTime = &v
	return s
}

func (s *SubmitAIJobResponseAIJobListAIJob) SetData(v string) *SubmitAIJobResponseAIJobListAIJob {
	s.Data = &v
	return s
}

type GetImageInfoRequest struct {
	ImageId     *string `json:"ImageId,omitempty" xml:"ImageId,omitempty" require:"true"`
	AuthTimeout *int64  `json:"AuthTimeout,omitempty" xml:"AuthTimeout,omitempty"`
	OutputType  *string `json:"OutputType,omitempty" xml:"OutputType,omitempty"`
}

func (s GetImageInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s GetImageInfoRequest) GoString() string {
	return s.String()
}

func (s *GetImageInfoRequest) SetImageId(v string) *GetImageInfoRequest {
	s.ImageId = &v
	return s
}

func (s *GetImageInfoRequest) SetAuthTimeout(v int64) *GetImageInfoRequest {
	s.AuthTimeout = &v
	return s
}

func (s *GetImageInfoRequest) SetOutputType(v string) *GetImageInfoRequest {
	s.OutputType = &v
	return s
}

type GetImageInfoResponse struct {
	RequestId *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ImageInfo *GetImageInfoResponseImageInfo `json:"ImageInfo,omitempty" xml:"ImageInfo,omitempty" require:"true" type:"Struct"`
}

func (s GetImageInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s GetImageInfoResponse) GoString() string {
	return s.String()
}

func (s *GetImageInfoResponse) SetRequestId(v string) *GetImageInfoResponse {
	s.RequestId = &v
	return s
}

func (s *GetImageInfoResponse) SetImageInfo(v *GetImageInfoResponseImageInfo) *GetImageInfoResponse {
	s.ImageInfo = v
	return s
}

type GetImageInfoResponseImageInfo struct {
	ImageId         *string                                 `json:"ImageId,omitempty" xml:"ImageId,omitempty" require:"true"`
	Title           *string                                 `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	CreationTime    *string                                 `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ImageType       *string                                 `json:"ImageType,omitempty" xml:"ImageType,omitempty" require:"true"`
	Tags            *string                                 `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true"`
	URL             *string                                 `json:"URL,omitempty" xml:"URL,omitempty" require:"true"`
	CateId          *int64                                  `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
	CateName        *string                                 `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	Description     *string                                 `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	StorageLocation *string                                 `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty" require:"true"`
	Status          *string                                 `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	AppId           *string                                 `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	RegionId        *string                                 `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	AuditStatus     *string                                 `json:"AuditStatus,omitempty" xml:"AuditStatus,omitempty" require:"true"`
	Mezzanine       *GetImageInfoResponseImageInfoMezzanine `json:"Mezzanine,omitempty" xml:"Mezzanine,omitempty" require:"true" type:"Struct"`
}

func (s GetImageInfoResponseImageInfo) String() string {
	return tea.Prettify(s)
}

func (s GetImageInfoResponseImageInfo) GoString() string {
	return s.String()
}

func (s *GetImageInfoResponseImageInfo) SetImageId(v string) *GetImageInfoResponseImageInfo {
	s.ImageId = &v
	return s
}

func (s *GetImageInfoResponseImageInfo) SetTitle(v string) *GetImageInfoResponseImageInfo {
	s.Title = &v
	return s
}

func (s *GetImageInfoResponseImageInfo) SetCreationTime(v string) *GetImageInfoResponseImageInfo {
	s.CreationTime = &v
	return s
}

func (s *GetImageInfoResponseImageInfo) SetImageType(v string) *GetImageInfoResponseImageInfo {
	s.ImageType = &v
	return s
}

func (s *GetImageInfoResponseImageInfo) SetTags(v string) *GetImageInfoResponseImageInfo {
	s.Tags = &v
	return s
}

func (s *GetImageInfoResponseImageInfo) SetURL(v string) *GetImageInfoResponseImageInfo {
	s.URL = &v
	return s
}

func (s *GetImageInfoResponseImageInfo) SetCateId(v int64) *GetImageInfoResponseImageInfo {
	s.CateId = &v
	return s
}

func (s *GetImageInfoResponseImageInfo) SetCateName(v string) *GetImageInfoResponseImageInfo {
	s.CateName = &v
	return s
}

func (s *GetImageInfoResponseImageInfo) SetDescription(v string) *GetImageInfoResponseImageInfo {
	s.Description = &v
	return s
}

func (s *GetImageInfoResponseImageInfo) SetStorageLocation(v string) *GetImageInfoResponseImageInfo {
	s.StorageLocation = &v
	return s
}

func (s *GetImageInfoResponseImageInfo) SetStatus(v string) *GetImageInfoResponseImageInfo {
	s.Status = &v
	return s
}

func (s *GetImageInfoResponseImageInfo) SetAppId(v string) *GetImageInfoResponseImageInfo {
	s.AppId = &v
	return s
}

func (s *GetImageInfoResponseImageInfo) SetRegionId(v string) *GetImageInfoResponseImageInfo {
	s.RegionId = &v
	return s
}

func (s *GetImageInfoResponseImageInfo) SetAuditStatus(v string) *GetImageInfoResponseImageInfo {
	s.AuditStatus = &v
	return s
}

func (s *GetImageInfoResponseImageInfo) SetMezzanine(v *GetImageInfoResponseImageInfoMezzanine) *GetImageInfoResponseImageInfo {
	s.Mezzanine = v
	return s
}

type GetImageInfoResponseImageInfoMezzanine struct {
	OriginalFileName *string `json:"OriginalFileName,omitempty" xml:"OriginalFileName,omitempty" require:"true"`
	FileSize         *string `json:"FileSize,omitempty" xml:"FileSize,omitempty" require:"true"`
	Width            *int    `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height           *int    `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	FileURL          *string `json:"FileURL,omitempty" xml:"FileURL,omitempty" require:"true"`
}

func (s GetImageInfoResponseImageInfoMezzanine) String() string {
	return tea.Prettify(s)
}

func (s GetImageInfoResponseImageInfoMezzanine) GoString() string {
	return s.String()
}

func (s *GetImageInfoResponseImageInfoMezzanine) SetOriginalFileName(v string) *GetImageInfoResponseImageInfoMezzanine {
	s.OriginalFileName = &v
	return s
}

func (s *GetImageInfoResponseImageInfoMezzanine) SetFileSize(v string) *GetImageInfoResponseImageInfoMezzanine {
	s.FileSize = &v
	return s
}

func (s *GetImageInfoResponseImageInfoMezzanine) SetWidth(v int) *GetImageInfoResponseImageInfoMezzanine {
	s.Width = &v
	return s
}

func (s *GetImageInfoResponseImageInfoMezzanine) SetHeight(v int) *GetImageInfoResponseImageInfoMezzanine {
	s.Height = &v
	return s
}

func (s *GetImageInfoResponseImageInfoMezzanine) SetFileURL(v string) *GetImageInfoResponseImageInfoMezzanine {
	s.FileURL = &v
	return s
}

type DeleteStreamRequest struct {
	JobIds  *string `json:"JobIds,omitempty" xml:"JobIds,omitempty" require:"true"`
	VideoId *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
}

func (s DeleteStreamRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteStreamRequest) GoString() string {
	return s.String()
}

func (s *DeleteStreamRequest) SetJobIds(v string) *DeleteStreamRequest {
	s.JobIds = &v
	return s
}

func (s *DeleteStreamRequest) SetVideoId(v string) *DeleteStreamRequest {
	s.VideoId = &v
	return s
}

type DeleteStreamResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteStreamResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteStreamResponse) GoString() string {
	return s.String()
}

func (s *DeleteStreamResponse) SetRequestId(v string) *DeleteStreamResponse {
	s.RequestId = &v
	return s
}

type SubmitSnapshotJobRequest struct {
	VideoId              *string `json:"VideoId,omitempty" xml:"VideoId,omitempty"`
	SpecifiedOffsetTime  *int64  `json:"SpecifiedOffsetTime,omitempty" xml:"SpecifiedOffsetTime,omitempty"`
	Width                *string `json:"Width,omitempty" xml:"Width,omitempty"`
	Height               *string `json:"Height,omitempty" xml:"Height,omitempty"`
	Count                *int64  `json:"Count,omitempty" xml:"Count,omitempty"`
	Interval             *int64  `json:"Interval,omitempty" xml:"Interval,omitempty"`
	SpriteSnapshotConfig *string `json:"SpriteSnapshotConfig,omitempty" xml:"SpriteSnapshotConfig,omitempty"`
	SnapshotTemplateId   *string `json:"SnapshotTemplateId,omitempty" xml:"SnapshotTemplateId,omitempty"`
	UserData             *string `json:"UserData,omitempty" xml:"UserData,omitempty"`
	FileUrl              *string `json:"FileUrl,omitempty" xml:"FileUrl,omitempty"`
}

func (s SubmitSnapshotJobRequest) String() string {
	return tea.Prettify(s)
}

func (s SubmitSnapshotJobRequest) GoString() string {
	return s.String()
}

func (s *SubmitSnapshotJobRequest) SetVideoId(v string) *SubmitSnapshotJobRequest {
	s.VideoId = &v
	return s
}

func (s *SubmitSnapshotJobRequest) SetSpecifiedOffsetTime(v int64) *SubmitSnapshotJobRequest {
	s.SpecifiedOffsetTime = &v
	return s
}

func (s *SubmitSnapshotJobRequest) SetWidth(v string) *SubmitSnapshotJobRequest {
	s.Width = &v
	return s
}

func (s *SubmitSnapshotJobRequest) SetHeight(v string) *SubmitSnapshotJobRequest {
	s.Height = &v
	return s
}

func (s *SubmitSnapshotJobRequest) SetCount(v int64) *SubmitSnapshotJobRequest {
	s.Count = &v
	return s
}

func (s *SubmitSnapshotJobRequest) SetInterval(v int64) *SubmitSnapshotJobRequest {
	s.Interval = &v
	return s
}

func (s *SubmitSnapshotJobRequest) SetSpriteSnapshotConfig(v string) *SubmitSnapshotJobRequest {
	s.SpriteSnapshotConfig = &v
	return s
}

func (s *SubmitSnapshotJobRequest) SetSnapshotTemplateId(v string) *SubmitSnapshotJobRequest {
	s.SnapshotTemplateId = &v
	return s
}

func (s *SubmitSnapshotJobRequest) SetUserData(v string) *SubmitSnapshotJobRequest {
	s.UserData = &v
	return s
}

func (s *SubmitSnapshotJobRequest) SetFileUrl(v string) *SubmitSnapshotJobRequest {
	s.FileUrl = &v
	return s
}

type SubmitSnapshotJobResponse struct {
	RequestId   *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	SnapshotJob *SubmitSnapshotJobResponseSnapshotJob `json:"SnapshotJob,omitempty" xml:"SnapshotJob,omitempty" require:"true" type:"Struct"`
}

func (s SubmitSnapshotJobResponse) String() string {
	return tea.Prettify(s)
}

func (s SubmitSnapshotJobResponse) GoString() string {
	return s.String()
}

func (s *SubmitSnapshotJobResponse) SetRequestId(v string) *SubmitSnapshotJobResponse {
	s.RequestId = &v
	return s
}

func (s *SubmitSnapshotJobResponse) SetSnapshotJob(v *SubmitSnapshotJobResponseSnapshotJob) *SubmitSnapshotJobResponse {
	s.SnapshotJob = v
	return s
}

type SubmitSnapshotJobResponseSnapshotJob struct {
	JobId *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
}

func (s SubmitSnapshotJobResponseSnapshotJob) String() string {
	return tea.Prettify(s)
}

func (s SubmitSnapshotJobResponseSnapshotJob) GoString() string {
	return s.String()
}

func (s *SubmitSnapshotJobResponseSnapshotJob) SetJobId(v string) *SubmitSnapshotJobResponseSnapshotJob {
	s.JobId = &v
	return s
}

type UpdateEditingProjectRequest struct {
	ProjectId   *string `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Title       *string `json:"Title,omitempty" xml:"Title,omitempty"`
	Timeline    *string `json:"Timeline,omitempty" xml:"Timeline,omitempty"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty"`
	CoverURL    *string `json:"CoverURL,omitempty" xml:"CoverURL,omitempty"`
}

func (s UpdateEditingProjectRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateEditingProjectRequest) GoString() string {
	return s.String()
}

func (s *UpdateEditingProjectRequest) SetProjectId(v string) *UpdateEditingProjectRequest {
	s.ProjectId = &v
	return s
}

func (s *UpdateEditingProjectRequest) SetTitle(v string) *UpdateEditingProjectRequest {
	s.Title = &v
	return s
}

func (s *UpdateEditingProjectRequest) SetTimeline(v string) *UpdateEditingProjectRequest {
	s.Timeline = &v
	return s
}

func (s *UpdateEditingProjectRequest) SetDescription(v string) *UpdateEditingProjectRequest {
	s.Description = &v
	return s
}

func (s *UpdateEditingProjectRequest) SetCoverURL(v string) *UpdateEditingProjectRequest {
	s.CoverURL = &v
	return s
}

type UpdateEditingProjectResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateEditingProjectResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateEditingProjectResponse) GoString() string {
	return s.String()
}

func (s *UpdateEditingProjectResponse) SetRequestId(v string) *UpdateEditingProjectResponse {
	s.RequestId = &v
	return s
}

type SetEditingProjectMaterialsRequest struct {
	ProjectId   *string `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	MaterialIds *string `json:"MaterialIds,omitempty" xml:"MaterialIds,omitempty" require:"true"`
}

func (s SetEditingProjectMaterialsRequest) String() string {
	return tea.Prettify(s)
}

func (s SetEditingProjectMaterialsRequest) GoString() string {
	return s.String()
}

func (s *SetEditingProjectMaterialsRequest) SetProjectId(v string) *SetEditingProjectMaterialsRequest {
	s.ProjectId = &v
	return s
}

func (s *SetEditingProjectMaterialsRequest) SetMaterialIds(v string) *SetEditingProjectMaterialsRequest {
	s.MaterialIds = &v
	return s
}

type SetEditingProjectMaterialsResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetEditingProjectMaterialsResponse) String() string {
	return tea.Prettify(s)
}

func (s SetEditingProjectMaterialsResponse) GoString() string {
	return s.String()
}

func (s *SetEditingProjectMaterialsResponse) SetRequestId(v string) *SetEditingProjectMaterialsResponse {
	s.RequestId = &v
	return s
}

type SearchEditingProjectRequest struct {
	EndTime   *string `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
	StartTime *string `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	Status    *string `json:"Status,omitempty" xml:"Status,omitempty"`
	PageNo    *int    `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
	PageSize  *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	SortBy    *string `json:"SortBy,omitempty" xml:"SortBy,omitempty"`
	Title     *string `json:"Title,omitempty" xml:"Title,omitempty"`
}

func (s SearchEditingProjectRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchEditingProjectRequest) GoString() string {
	return s.String()
}

func (s *SearchEditingProjectRequest) SetEndTime(v string) *SearchEditingProjectRequest {
	s.EndTime = &v
	return s
}

func (s *SearchEditingProjectRequest) SetStartTime(v string) *SearchEditingProjectRequest {
	s.StartTime = &v
	return s
}

func (s *SearchEditingProjectRequest) SetStatus(v string) *SearchEditingProjectRequest {
	s.Status = &v
	return s
}

func (s *SearchEditingProjectRequest) SetPageNo(v int) *SearchEditingProjectRequest {
	s.PageNo = &v
	return s
}

func (s *SearchEditingProjectRequest) SetPageSize(v int) *SearchEditingProjectRequest {
	s.PageSize = &v
	return s
}

func (s *SearchEditingProjectRequest) SetSortBy(v string) *SearchEditingProjectRequest {
	s.SortBy = &v
	return s
}

func (s *SearchEditingProjectRequest) SetTitle(v string) *SearchEditingProjectRequest {
	s.Title = &v
	return s
}

type SearchEditingProjectResponse struct {
	RequestId   *string                                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Total       *int                                     `json:"Total,omitempty" xml:"Total,omitempty" require:"true"`
	ProjectList *SearchEditingProjectResponseProjectList `json:"ProjectList,omitempty" xml:"ProjectList,omitempty" require:"true" type:"Struct"`
}

func (s SearchEditingProjectResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchEditingProjectResponse) GoString() string {
	return s.String()
}

func (s *SearchEditingProjectResponse) SetRequestId(v string) *SearchEditingProjectResponse {
	s.RequestId = &v
	return s
}

func (s *SearchEditingProjectResponse) SetTotal(v int) *SearchEditingProjectResponse {
	s.Total = &v
	return s
}

func (s *SearchEditingProjectResponse) SetProjectList(v *SearchEditingProjectResponseProjectList) *SearchEditingProjectResponse {
	s.ProjectList = v
	return s
}

type SearchEditingProjectResponseProjectList struct {
	Project []*SearchEditingProjectResponseProjectListProject `json:"Project,omitempty" xml:"Project,omitempty" require:"true" type:"Repeated"`
}

func (s SearchEditingProjectResponseProjectList) String() string {
	return tea.Prettify(s)
}

func (s SearchEditingProjectResponseProjectList) GoString() string {
	return s.String()
}

func (s *SearchEditingProjectResponseProjectList) SetProject(v []*SearchEditingProjectResponseProjectListProject) *SearchEditingProjectResponseProjectList {
	s.Project = v
	return s
}

type SearchEditingProjectResponseProjectListProject struct {
	ProjectId       *string  `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	CreationTime    *string  `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModifiedTime    *string  `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	Status          *string  `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Description     *string  `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Title           *string  `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	CoverURL        *string  `json:"CoverURL,omitempty" xml:"CoverURL,omitempty" require:"true"`
	StorageLocation *string  `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty" require:"true"`
	RegionId        *string  `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Duration        *float32 `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
}

func (s SearchEditingProjectResponseProjectListProject) String() string {
	return tea.Prettify(s)
}

func (s SearchEditingProjectResponseProjectListProject) GoString() string {
	return s.String()
}

func (s *SearchEditingProjectResponseProjectListProject) SetProjectId(v string) *SearchEditingProjectResponseProjectListProject {
	s.ProjectId = &v
	return s
}

func (s *SearchEditingProjectResponseProjectListProject) SetCreationTime(v string) *SearchEditingProjectResponseProjectListProject {
	s.CreationTime = &v
	return s
}

func (s *SearchEditingProjectResponseProjectListProject) SetModifiedTime(v string) *SearchEditingProjectResponseProjectListProject {
	s.ModifiedTime = &v
	return s
}

func (s *SearchEditingProjectResponseProjectListProject) SetStatus(v string) *SearchEditingProjectResponseProjectListProject {
	s.Status = &v
	return s
}

func (s *SearchEditingProjectResponseProjectListProject) SetDescription(v string) *SearchEditingProjectResponseProjectListProject {
	s.Description = &v
	return s
}

func (s *SearchEditingProjectResponseProjectListProject) SetTitle(v string) *SearchEditingProjectResponseProjectListProject {
	s.Title = &v
	return s
}

func (s *SearchEditingProjectResponseProjectListProject) SetCoverURL(v string) *SearchEditingProjectResponseProjectListProject {
	s.CoverURL = &v
	return s
}

func (s *SearchEditingProjectResponseProjectListProject) SetStorageLocation(v string) *SearchEditingProjectResponseProjectListProject {
	s.StorageLocation = &v
	return s
}

func (s *SearchEditingProjectResponseProjectListProject) SetRegionId(v string) *SearchEditingProjectResponseProjectListProject {
	s.RegionId = &v
	return s
}

func (s *SearchEditingProjectResponseProjectListProject) SetDuration(v float32) *SearchEditingProjectResponseProjectListProject {
	s.Duration = &v
	return s
}

type ProduceEditingProjectVideoRequest struct {
	ProjectId     *string `json:"ProjectId,omitempty" xml:"ProjectId,omitempty"`
	Timeline      *string `json:"Timeline,omitempty" xml:"Timeline,omitempty"`
	Title         *string `json:"Title,omitempty" xml:"Title,omitempty"`
	Description   *string `json:"Description,omitempty" xml:"Description,omitempty"`
	CoverURL      *string `json:"CoverURL,omitempty" xml:"CoverURL,omitempty"`
	MediaMetadata *string `json:"MediaMetadata,omitempty" xml:"MediaMetadata,omitempty"`
	ProduceConfig *string `json:"ProduceConfig,omitempty" xml:"ProduceConfig,omitempty"`
	UserData      *string `json:"UserData,omitempty" xml:"UserData,omitempty"`
}

func (s ProduceEditingProjectVideoRequest) String() string {
	return tea.Prettify(s)
}

func (s ProduceEditingProjectVideoRequest) GoString() string {
	return s.String()
}

func (s *ProduceEditingProjectVideoRequest) SetProjectId(v string) *ProduceEditingProjectVideoRequest {
	s.ProjectId = &v
	return s
}

func (s *ProduceEditingProjectVideoRequest) SetTimeline(v string) *ProduceEditingProjectVideoRequest {
	s.Timeline = &v
	return s
}

func (s *ProduceEditingProjectVideoRequest) SetTitle(v string) *ProduceEditingProjectVideoRequest {
	s.Title = &v
	return s
}

func (s *ProduceEditingProjectVideoRequest) SetDescription(v string) *ProduceEditingProjectVideoRequest {
	s.Description = &v
	return s
}

func (s *ProduceEditingProjectVideoRequest) SetCoverURL(v string) *ProduceEditingProjectVideoRequest {
	s.CoverURL = &v
	return s
}

func (s *ProduceEditingProjectVideoRequest) SetMediaMetadata(v string) *ProduceEditingProjectVideoRequest {
	s.MediaMetadata = &v
	return s
}

func (s *ProduceEditingProjectVideoRequest) SetProduceConfig(v string) *ProduceEditingProjectVideoRequest {
	s.ProduceConfig = &v
	return s
}

func (s *ProduceEditingProjectVideoRequest) SetUserData(v string) *ProduceEditingProjectVideoRequest {
	s.UserData = &v
	return s
}

type ProduceEditingProjectVideoResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MediaId   *string `json:"MediaId,omitempty" xml:"MediaId,omitempty" require:"true"`
	ProjectId *string `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
}

func (s ProduceEditingProjectVideoResponse) String() string {
	return tea.Prettify(s)
}

func (s ProduceEditingProjectVideoResponse) GoString() string {
	return s.String()
}

func (s *ProduceEditingProjectVideoResponse) SetRequestId(v string) *ProduceEditingProjectVideoResponse {
	s.RequestId = &v
	return s
}

func (s *ProduceEditingProjectVideoResponse) SetMediaId(v string) *ProduceEditingProjectVideoResponse {
	s.MediaId = &v
	return s
}

func (s *ProduceEditingProjectVideoResponse) SetProjectId(v string) *ProduceEditingProjectVideoResponse {
	s.ProjectId = &v
	return s
}

type GetEditingProjectMaterialsRequest struct {
	ProjectId    *string `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	Type         *string `json:"Type,omitempty" xml:"Type,omitempty"`
	MaterialType *string `json:"MaterialType,omitempty" xml:"MaterialType,omitempty"`
}

func (s GetEditingProjectMaterialsRequest) String() string {
	return tea.Prettify(s)
}

func (s GetEditingProjectMaterialsRequest) GoString() string {
	return s.String()
}

func (s *GetEditingProjectMaterialsRequest) SetProjectId(v string) *GetEditingProjectMaterialsRequest {
	s.ProjectId = &v
	return s
}

func (s *GetEditingProjectMaterialsRequest) SetType(v string) *GetEditingProjectMaterialsRequest {
	s.Type = &v
	return s
}

func (s *GetEditingProjectMaterialsRequest) SetMaterialType(v string) *GetEditingProjectMaterialsRequest {
	s.MaterialType = &v
	return s
}

type GetEditingProjectMaterialsResponse struct {
	RequestId    *string                                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MaterialList *GetEditingProjectMaterialsResponseMaterialList `json:"MaterialList,omitempty" xml:"MaterialList,omitempty" require:"true" type:"Struct"`
}

func (s GetEditingProjectMaterialsResponse) String() string {
	return tea.Prettify(s)
}

func (s GetEditingProjectMaterialsResponse) GoString() string {
	return s.String()
}

func (s *GetEditingProjectMaterialsResponse) SetRequestId(v string) *GetEditingProjectMaterialsResponse {
	s.RequestId = &v
	return s
}

func (s *GetEditingProjectMaterialsResponse) SetMaterialList(v *GetEditingProjectMaterialsResponseMaterialList) *GetEditingProjectMaterialsResponse {
	s.MaterialList = v
	return s
}

type GetEditingProjectMaterialsResponseMaterialList struct {
	Material []*GetEditingProjectMaterialsResponseMaterialListMaterial `json:"Material,omitempty" xml:"Material,omitempty" require:"true" type:"Repeated"`
}

func (s GetEditingProjectMaterialsResponseMaterialList) String() string {
	return tea.Prettify(s)
}

func (s GetEditingProjectMaterialsResponseMaterialList) GoString() string {
	return s.String()
}

func (s *GetEditingProjectMaterialsResponseMaterialList) SetMaterial(v []*GetEditingProjectMaterialsResponseMaterialListMaterial) *GetEditingProjectMaterialsResponseMaterialList {
	s.Material = v
	return s
}

type GetEditingProjectMaterialsResponseMaterialListMaterial struct {
	MaterialId   *string                                                          `json:"MaterialId,omitempty" xml:"MaterialId,omitempty" require:"true"`
	Title        *string                                                          `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	Tags         *string                                                          `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true"`
	Status       *string                                                          `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Size         *int64                                                           `json:"Size,omitempty" xml:"Size,omitempty" require:"true"`
	Duration     *float32                                                         `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Description  *string                                                          `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreationTime *string                                                          `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModifiedTime *string                                                          `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	CoverURL     *string                                                          `json:"CoverURL,omitempty" xml:"CoverURL,omitempty" require:"true"`
	CateId       *int                                                             `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
	CateName     *string                                                          `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	Source       *string                                                          `json:"Source,omitempty" xml:"Source,omitempty" require:"true"`
	SpriteConfig *string                                                          `json:"SpriteConfig,omitempty" xml:"SpriteConfig,omitempty" require:"true"`
	Snapshots    *GetEditingProjectMaterialsResponseMaterialListMaterialSnapshots `json:"Snapshots,omitempty" xml:"Snapshots,omitempty" require:"true" type:"Struct"`
	Sprites      *GetEditingProjectMaterialsResponseMaterialListMaterialSprites   `json:"Sprites,omitempty" xml:"Sprites,omitempty" require:"true" type:"Struct"`
}

func (s GetEditingProjectMaterialsResponseMaterialListMaterial) String() string {
	return tea.Prettify(s)
}

func (s GetEditingProjectMaterialsResponseMaterialListMaterial) GoString() string {
	return s.String()
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetMaterialId(v string) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.MaterialId = &v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetTitle(v string) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.Title = &v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetTags(v string) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.Tags = &v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetStatus(v string) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.Status = &v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetSize(v int64) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.Size = &v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetDuration(v float32) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.Duration = &v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetDescription(v string) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.Description = &v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetCreationTime(v string) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.CreationTime = &v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetModifiedTime(v string) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.ModifiedTime = &v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetCoverURL(v string) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.CoverURL = &v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetCateId(v int) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.CateId = &v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetCateName(v string) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.CateName = &v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetSource(v string) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.Source = &v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetSpriteConfig(v string) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.SpriteConfig = &v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetSnapshots(v *GetEditingProjectMaterialsResponseMaterialListMaterialSnapshots) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.Snapshots = v
	return s
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterial) SetSprites(v *GetEditingProjectMaterialsResponseMaterialListMaterialSprites) *GetEditingProjectMaterialsResponseMaterialListMaterial {
	s.Sprites = v
	return s
}

type GetEditingProjectMaterialsResponseMaterialListMaterialSnapshots struct {
	Snapshot []*string `json:"Snapshot,omitempty" xml:"Snapshot,omitempty" require:"true" type:"Repeated"`
}

func (s GetEditingProjectMaterialsResponseMaterialListMaterialSnapshots) String() string {
	return tea.Prettify(s)
}

func (s GetEditingProjectMaterialsResponseMaterialListMaterialSnapshots) GoString() string {
	return s.String()
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterialSnapshots) SetSnapshot(v []*string) *GetEditingProjectMaterialsResponseMaterialListMaterialSnapshots {
	s.Snapshot = v
	return s
}

type GetEditingProjectMaterialsResponseMaterialListMaterialSprites struct {
	Sprite []*string `json:"Sprite,omitempty" xml:"Sprite,omitempty" require:"true" type:"Repeated"`
}

func (s GetEditingProjectMaterialsResponseMaterialListMaterialSprites) String() string {
	return tea.Prettify(s)
}

func (s GetEditingProjectMaterialsResponseMaterialListMaterialSprites) GoString() string {
	return s.String()
}

func (s *GetEditingProjectMaterialsResponseMaterialListMaterialSprites) SetSprite(v []*string) *GetEditingProjectMaterialsResponseMaterialListMaterialSprites {
	s.Sprite = v
	return s
}

type GetEditingProjectRequest struct {
	ProjectId *string `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
}

func (s GetEditingProjectRequest) String() string {
	return tea.Prettify(s)
}

func (s GetEditingProjectRequest) GoString() string {
	return s.String()
}

func (s *GetEditingProjectRequest) SetProjectId(v string) *GetEditingProjectRequest {
	s.ProjectId = &v
	return s
}

type GetEditingProjectResponse struct {
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Project   *GetEditingProjectResponseProject `json:"Project,omitempty" xml:"Project,omitempty" require:"true" type:"Struct"`
}

func (s GetEditingProjectResponse) String() string {
	return tea.Prettify(s)
}

func (s GetEditingProjectResponse) GoString() string {
	return s.String()
}

func (s *GetEditingProjectResponse) SetRequestId(v string) *GetEditingProjectResponse {
	s.RequestId = &v
	return s
}

func (s *GetEditingProjectResponse) SetProject(v *GetEditingProjectResponseProject) *GetEditingProjectResponse {
	s.Project = v
	return s
}

type GetEditingProjectResponseProject struct {
	ProjectId       *string `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	CreationTime    *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModifiedTime    *string `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	Status          *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Description     *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Title           *string `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	Timeline        *string `json:"Timeline,omitempty" xml:"Timeline,omitempty" require:"true"`
	CoverURL        *string `json:"CoverURL,omitempty" xml:"CoverURL,omitempty" require:"true"`
	StorageLocation *string `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty" require:"true"`
	RegionId        *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
}

func (s GetEditingProjectResponseProject) String() string {
	return tea.Prettify(s)
}

func (s GetEditingProjectResponseProject) GoString() string {
	return s.String()
}

func (s *GetEditingProjectResponseProject) SetProjectId(v string) *GetEditingProjectResponseProject {
	s.ProjectId = &v
	return s
}

func (s *GetEditingProjectResponseProject) SetCreationTime(v string) *GetEditingProjectResponseProject {
	s.CreationTime = &v
	return s
}

func (s *GetEditingProjectResponseProject) SetModifiedTime(v string) *GetEditingProjectResponseProject {
	s.ModifiedTime = &v
	return s
}

func (s *GetEditingProjectResponseProject) SetStatus(v string) *GetEditingProjectResponseProject {
	s.Status = &v
	return s
}

func (s *GetEditingProjectResponseProject) SetDescription(v string) *GetEditingProjectResponseProject {
	s.Description = &v
	return s
}

func (s *GetEditingProjectResponseProject) SetTitle(v string) *GetEditingProjectResponseProject {
	s.Title = &v
	return s
}

func (s *GetEditingProjectResponseProject) SetTimeline(v string) *GetEditingProjectResponseProject {
	s.Timeline = &v
	return s
}

func (s *GetEditingProjectResponseProject) SetCoverURL(v string) *GetEditingProjectResponseProject {
	s.CoverURL = &v
	return s
}

func (s *GetEditingProjectResponseProject) SetStorageLocation(v string) *GetEditingProjectResponseProject {
	s.StorageLocation = &v
	return s
}

func (s *GetEditingProjectResponseProject) SetRegionId(v string) *GetEditingProjectResponseProject {
	s.RegionId = &v
	return s
}

type DeleteEditingProjectRequest struct {
	ProjectIds *string `json:"ProjectIds,omitempty" xml:"ProjectIds,omitempty" require:"true"`
}

func (s DeleteEditingProjectRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteEditingProjectRequest) GoString() string {
	return s.String()
}

func (s *DeleteEditingProjectRequest) SetProjectIds(v string) *DeleteEditingProjectRequest {
	s.ProjectIds = &v
	return s
}

type DeleteEditingProjectResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteEditingProjectResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteEditingProjectResponse) GoString() string {
	return s.String()
}

func (s *DeleteEditingProjectResponse) SetRequestId(v string) *DeleteEditingProjectResponse {
	s.RequestId = &v
	return s
}

type AddEditingProjectRequest struct {
	Title       *string `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	Description *string `json:"Description,omitempty" xml:"Description,omitempty"`
	Timeline    *string `json:"Timeline,omitempty" xml:"Timeline,omitempty"`
	CoverURL    *string `json:"CoverURL,omitempty" xml:"CoverURL,omitempty"`
	Division    *string `json:"Division,omitempty" xml:"Division,omitempty"`
}

func (s AddEditingProjectRequest) String() string {
	return tea.Prettify(s)
}

func (s AddEditingProjectRequest) GoString() string {
	return s.String()
}

func (s *AddEditingProjectRequest) SetTitle(v string) *AddEditingProjectRequest {
	s.Title = &v
	return s
}

func (s *AddEditingProjectRequest) SetDescription(v string) *AddEditingProjectRequest {
	s.Description = &v
	return s
}

func (s *AddEditingProjectRequest) SetTimeline(v string) *AddEditingProjectRequest {
	s.Timeline = &v
	return s
}

func (s *AddEditingProjectRequest) SetCoverURL(v string) *AddEditingProjectRequest {
	s.CoverURL = &v
	return s
}

func (s *AddEditingProjectRequest) SetDivision(v string) *AddEditingProjectRequest {
	s.Division = &v
	return s
}

type AddEditingProjectResponse struct {
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Project   *AddEditingProjectResponseProject `json:"Project,omitempty" xml:"Project,omitempty" require:"true" type:"Struct"`
}

func (s AddEditingProjectResponse) String() string {
	return tea.Prettify(s)
}

func (s AddEditingProjectResponse) GoString() string {
	return s.String()
}

func (s *AddEditingProjectResponse) SetRequestId(v string) *AddEditingProjectResponse {
	s.RequestId = &v
	return s
}

func (s *AddEditingProjectResponse) SetProject(v *AddEditingProjectResponseProject) *AddEditingProjectResponse {
	s.Project = v
	return s
}

type AddEditingProjectResponseProject struct {
	ProjectId    *string `json:"ProjectId,omitempty" xml:"ProjectId,omitempty" require:"true"`
	CreationTime *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModifiedTime *string `json:"ModifiedTime,omitempty" xml:"ModifiedTime,omitempty" require:"true"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Title        *string `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
}

func (s AddEditingProjectResponseProject) String() string {
	return tea.Prettify(s)
}

func (s AddEditingProjectResponseProject) GoString() string {
	return s.String()
}

func (s *AddEditingProjectResponseProject) SetProjectId(v string) *AddEditingProjectResponseProject {
	s.ProjectId = &v
	return s
}

func (s *AddEditingProjectResponseProject) SetCreationTime(v string) *AddEditingProjectResponseProject {
	s.CreationTime = &v
	return s
}

func (s *AddEditingProjectResponseProject) SetModifiedTime(v string) *AddEditingProjectResponseProject {
	s.ModifiedTime = &v
	return s
}

func (s *AddEditingProjectResponseProject) SetStatus(v string) *AddEditingProjectResponseProject {
	s.Status = &v
	return s
}

func (s *AddEditingProjectResponseProject) SetDescription(v string) *AddEditingProjectResponseProject {
	s.Description = &v
	return s
}

func (s *AddEditingProjectResponseProject) SetTitle(v string) *AddEditingProjectResponseProject {
	s.Title = &v
	return s
}

type GetMezzanineInfoRequest struct {
	VideoId        *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	AuthTimeout    *int64  `json:"AuthTimeout,omitempty" xml:"AuthTimeout,omitempty"`
	PreviewSegment *bool   `json:"PreviewSegment,omitempty" xml:"PreviewSegment,omitempty"`
	OutputType     *string `json:"OutputType,omitempty" xml:"OutputType,omitempty"`
	AdditionType   *string `json:"AdditionType,omitempty" xml:"AdditionType,omitempty"`
}

func (s GetMezzanineInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMezzanineInfoRequest) GoString() string {
	return s.String()
}

func (s *GetMezzanineInfoRequest) SetVideoId(v string) *GetMezzanineInfoRequest {
	s.VideoId = &v
	return s
}

func (s *GetMezzanineInfoRequest) SetAuthTimeout(v int64) *GetMezzanineInfoRequest {
	s.AuthTimeout = &v
	return s
}

func (s *GetMezzanineInfoRequest) SetPreviewSegment(v bool) *GetMezzanineInfoRequest {
	s.PreviewSegment = &v
	return s
}

func (s *GetMezzanineInfoRequest) SetOutputType(v string) *GetMezzanineInfoRequest {
	s.OutputType = &v
	return s
}

func (s *GetMezzanineInfoRequest) SetAdditionType(v string) *GetMezzanineInfoRequest {
	s.AdditionType = &v
	return s
}

type GetMezzanineInfoResponse struct {
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Mezzanine *GetMezzanineInfoResponseMezzanine `json:"Mezzanine,omitempty" xml:"Mezzanine,omitempty" require:"true" type:"Struct"`
}

func (s GetMezzanineInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMezzanineInfoResponse) GoString() string {
	return s.String()
}

func (s *GetMezzanineInfoResponse) SetRequestId(v string) *GetMezzanineInfoResponse {
	s.RequestId = &v
	return s
}

func (s *GetMezzanineInfoResponse) SetMezzanine(v *GetMezzanineInfoResponseMezzanine) *GetMezzanineInfoResponse {
	s.Mezzanine = v
	return s
}

type GetMezzanineInfoResponseMezzanine struct {
	VideoId          *string                                             `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	Bitrate          *string                                             `json:"Bitrate,omitempty" xml:"Bitrate,omitempty" require:"true"`
	CreationTime     *string                                             `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	Duration         *string                                             `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Fps              *string                                             `json:"Fps,omitempty" xml:"Fps,omitempty" require:"true"`
	Height           *int64                                              `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Width            *int64                                              `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Size             *int64                                              `json:"Size,omitempty" xml:"Size,omitempty" require:"true"`
	Status           *string                                             `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	FileURL          *string                                             `json:"FileURL,omitempty" xml:"FileURL,omitempty" require:"true"`
	FileName         *string                                             `json:"FileName,omitempty" xml:"FileName,omitempty" require:"true"`
	CRC64            *string                                             `json:"CRC64,omitempty" xml:"CRC64,omitempty" require:"true"`
	PreprocessStatus *string                                             `json:"PreprocessStatus,omitempty" xml:"PreprocessStatus,omitempty" require:"true"`
	OutputType       *string                                             `json:"OutputType,omitempty" xml:"OutputType,omitempty" require:"true"`
	AudioStreamList  []*GetMezzanineInfoResponseMezzanineAudioStreamList `json:"AudioStreamList,omitempty" xml:"AudioStreamList,omitempty" require:"true" type:"Repeated"`
	VideoStreamList  []*GetMezzanineInfoResponseMezzanineVideoStreamList `json:"VideoStreamList,omitempty" xml:"VideoStreamList,omitempty" require:"true" type:"Repeated"`
}

func (s GetMezzanineInfoResponseMezzanine) String() string {
	return tea.Prettify(s)
}

func (s GetMezzanineInfoResponseMezzanine) GoString() string {
	return s.String()
}

func (s *GetMezzanineInfoResponseMezzanine) SetVideoId(v string) *GetMezzanineInfoResponseMezzanine {
	s.VideoId = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetBitrate(v string) *GetMezzanineInfoResponseMezzanine {
	s.Bitrate = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetCreationTime(v string) *GetMezzanineInfoResponseMezzanine {
	s.CreationTime = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetDuration(v string) *GetMezzanineInfoResponseMezzanine {
	s.Duration = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetFps(v string) *GetMezzanineInfoResponseMezzanine {
	s.Fps = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetHeight(v int64) *GetMezzanineInfoResponseMezzanine {
	s.Height = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetWidth(v int64) *GetMezzanineInfoResponseMezzanine {
	s.Width = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetSize(v int64) *GetMezzanineInfoResponseMezzanine {
	s.Size = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetStatus(v string) *GetMezzanineInfoResponseMezzanine {
	s.Status = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetFileURL(v string) *GetMezzanineInfoResponseMezzanine {
	s.FileURL = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetFileName(v string) *GetMezzanineInfoResponseMezzanine {
	s.FileName = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetCRC64(v string) *GetMezzanineInfoResponseMezzanine {
	s.CRC64 = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetPreprocessStatus(v string) *GetMezzanineInfoResponseMezzanine {
	s.PreprocessStatus = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetOutputType(v string) *GetMezzanineInfoResponseMezzanine {
	s.OutputType = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetAudioStreamList(v []*GetMezzanineInfoResponseMezzanineAudioStreamList) *GetMezzanineInfoResponseMezzanine {
	s.AudioStreamList = v
	return s
}

func (s *GetMezzanineInfoResponseMezzanine) SetVideoStreamList(v []*GetMezzanineInfoResponseMezzanineVideoStreamList) *GetMezzanineInfoResponseMezzanine {
	s.VideoStreamList = v
	return s
}

type GetMezzanineInfoResponseMezzanineAudioStreamList struct {
	Index          *string `json:"Index,omitempty" xml:"Index,omitempty" require:"true"`
	CodecName      *string `json:"CodecName,omitempty" xml:"CodecName,omitempty" require:"true"`
	CodecLongName  *string `json:"CodecLongName,omitempty" xml:"CodecLongName,omitempty" require:"true"`
	CodecTimeBase  *string `json:"CodecTimeBase,omitempty" xml:"CodecTimeBase,omitempty" require:"true"`
	CodecTagString *string `json:"CodecTagString,omitempty" xml:"CodecTagString,omitempty" require:"true"`
	CodecTag       *string `json:"CodecTag,omitempty" xml:"CodecTag,omitempty" require:"true"`
	SampleFmt      *string `json:"SampleFmt,omitempty" xml:"SampleFmt,omitempty" require:"true"`
	SampleRate     *string `json:"SampleRate,omitempty" xml:"SampleRate,omitempty" require:"true"`
	Channels       *string `json:"Channels,omitempty" xml:"Channels,omitempty" require:"true"`
	ChannelLayout  *string `json:"ChannelLayout,omitempty" xml:"ChannelLayout,omitempty" require:"true"`
	Timebase       *string `json:"Timebase,omitempty" xml:"Timebase,omitempty" require:"true"`
	StartTime      *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	Duration       *string `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Bitrate        *string `json:"Bitrate,omitempty" xml:"Bitrate,omitempty" require:"true"`
	NumFrames      *string `json:"NumFrames,omitempty" xml:"NumFrames,omitempty" require:"true"`
	Lang           *string `json:"Lang,omitempty" xml:"Lang,omitempty" require:"true"`
}

func (s GetMezzanineInfoResponseMezzanineAudioStreamList) String() string {
	return tea.Prettify(s)
}

func (s GetMezzanineInfoResponseMezzanineAudioStreamList) GoString() string {
	return s.String()
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetIndex(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.Index = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetCodecName(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.CodecName = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetCodecLongName(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.CodecLongName = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetCodecTimeBase(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.CodecTimeBase = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetCodecTagString(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.CodecTagString = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetCodecTag(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.CodecTag = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetSampleFmt(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.SampleFmt = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetSampleRate(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.SampleRate = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetChannels(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.Channels = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetChannelLayout(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.ChannelLayout = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetTimebase(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.Timebase = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetStartTime(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.StartTime = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetDuration(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.Duration = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetBitrate(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.Bitrate = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetNumFrames(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.NumFrames = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineAudioStreamList) SetLang(v string) *GetMezzanineInfoResponseMezzanineAudioStreamList {
	s.Lang = &v
	return s
}

type GetMezzanineInfoResponseMezzanineVideoStreamList struct {
	Index          *string `json:"Index,omitempty" xml:"Index,omitempty" require:"true"`
	CodecName      *string `json:"CodecName,omitempty" xml:"CodecName,omitempty" require:"true"`
	CodecLongName  *string `json:"CodecLongName,omitempty" xml:"CodecLongName,omitempty" require:"true"`
	Profile        *string `json:"Profile,omitempty" xml:"Profile,omitempty" require:"true"`
	CodecTimeBase  *string `json:"CodecTimeBase,omitempty" xml:"CodecTimeBase,omitempty" require:"true"`
	CodecTagString *string `json:"CodecTagString,omitempty" xml:"CodecTagString,omitempty" require:"true"`
	CodecTag       *string `json:"CodecTag,omitempty" xml:"CodecTag,omitempty" require:"true"`
	Width          *string `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height         *string `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	HasBFrames     *string `json:"HasBFrames,omitempty" xml:"HasBFrames,omitempty" require:"true"`
	Sar            *string `json:"Sar,omitempty" xml:"Sar,omitempty" require:"true"`
	Dar            *string `json:"Dar,omitempty" xml:"Dar,omitempty" require:"true"`
	PixFmt         *string `json:"PixFmt,omitempty" xml:"PixFmt,omitempty" require:"true"`
	Level          *string `json:"Level,omitempty" xml:"Level,omitempty" require:"true"`
	Fps            *string `json:"Fps,omitempty" xml:"Fps,omitempty" require:"true"`
	AvgFPS         *string `json:"AvgFPS,omitempty" xml:"AvgFPS,omitempty" require:"true"`
	Timebase       *string `json:"Timebase,omitempty" xml:"Timebase,omitempty" require:"true"`
	StartTime      *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	Duration       *string `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	NumFrames      *string `json:"NumFrames,omitempty" xml:"NumFrames,omitempty" require:"true"`
	Lang           *string `json:"Lang,omitempty" xml:"Lang,omitempty" require:"true"`
	Rotate         *string `json:"Rotate,omitempty" xml:"Rotate,omitempty" require:"true"`
	Bitrate        *string `json:"Bitrate,omitempty" xml:"Bitrate,omitempty" require:"true"`
}

func (s GetMezzanineInfoResponseMezzanineVideoStreamList) String() string {
	return tea.Prettify(s)
}

func (s GetMezzanineInfoResponseMezzanineVideoStreamList) GoString() string {
	return s.String()
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetIndex(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.Index = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetCodecName(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.CodecName = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetCodecLongName(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.CodecLongName = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetProfile(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.Profile = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetCodecTimeBase(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.CodecTimeBase = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetCodecTagString(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.CodecTagString = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetCodecTag(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.CodecTag = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetWidth(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.Width = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetHeight(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.Height = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetHasBFrames(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.HasBFrames = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetSar(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.Sar = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetDar(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.Dar = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetPixFmt(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.PixFmt = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetLevel(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.Level = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetFps(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.Fps = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetAvgFPS(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.AvgFPS = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetTimebase(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.Timebase = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetStartTime(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.StartTime = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetDuration(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.Duration = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetNumFrames(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.NumFrames = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetLang(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.Lang = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetRotate(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.Rotate = &v
	return s
}

func (s *GetMezzanineInfoResponseMezzanineVideoStreamList) SetBitrate(v string) *GetMezzanineInfoResponseMezzanineVideoStreamList {
	s.Bitrate = &v
	return s
}

type UpdateCategoryRequest struct {
	CateName *string `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	CateId   *int64  `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
}

func (s UpdateCategoryRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateCategoryRequest) GoString() string {
	return s.String()
}

func (s *UpdateCategoryRequest) SetCateName(v string) *UpdateCategoryRequest {
	s.CateName = &v
	return s
}

func (s *UpdateCategoryRequest) SetCateId(v int64) *UpdateCategoryRequest {
	s.CateId = &v
	return s
}

type UpdateCategoryResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateCategoryResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateCategoryResponse) GoString() string {
	return s.String()
}

func (s *UpdateCategoryResponse) SetRequestId(v string) *UpdateCategoryResponse {
	s.RequestId = &v
	return s
}

type GetCategoriesRequest struct {
	CateId   *int64  `json:"CateId,omitempty" xml:"CateId,omitempty"`
	PageNo   *int64  `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
	PageSize *int64  `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	SortBy   *string `json:"SortBy,omitempty" xml:"SortBy,omitempty"`
	Type     *string `json:"Type,omitempty" xml:"Type,omitempty"`
}

func (s GetCategoriesRequest) String() string {
	return tea.Prettify(s)
}

func (s GetCategoriesRequest) GoString() string {
	return s.String()
}

func (s *GetCategoriesRequest) SetCateId(v int64) *GetCategoriesRequest {
	s.CateId = &v
	return s
}

func (s *GetCategoriesRequest) SetPageNo(v int64) *GetCategoriesRequest {
	s.PageNo = &v
	return s
}

func (s *GetCategoriesRequest) SetPageSize(v int64) *GetCategoriesRequest {
	s.PageSize = &v
	return s
}

func (s *GetCategoriesRequest) SetSortBy(v string) *GetCategoriesRequest {
	s.SortBy = &v
	return s
}

func (s *GetCategoriesRequest) SetType(v string) *GetCategoriesRequest {
	s.Type = &v
	return s
}

type GetCategoriesResponse struct {
	RequestId     *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	SubTotal      *int64                              `json:"SubTotal,omitempty" xml:"SubTotal,omitempty" require:"true"`
	SubCategories *GetCategoriesResponseSubCategories `json:"SubCategories,omitempty" xml:"SubCategories,omitempty" require:"true" type:"Struct"`
	Category      *GetCategoriesResponseCategory      `json:"Category,omitempty" xml:"Category,omitempty" require:"true" type:"Struct"`
}

func (s GetCategoriesResponse) String() string {
	return tea.Prettify(s)
}

func (s GetCategoriesResponse) GoString() string {
	return s.String()
}

func (s *GetCategoriesResponse) SetRequestId(v string) *GetCategoriesResponse {
	s.RequestId = &v
	return s
}

func (s *GetCategoriesResponse) SetSubTotal(v int64) *GetCategoriesResponse {
	s.SubTotal = &v
	return s
}

func (s *GetCategoriesResponse) SetSubCategories(v *GetCategoriesResponseSubCategories) *GetCategoriesResponse {
	s.SubCategories = v
	return s
}

func (s *GetCategoriesResponse) SetCategory(v *GetCategoriesResponseCategory) *GetCategoriesResponse {
	s.Category = v
	return s
}

type GetCategoriesResponseSubCategories struct {
	Category []*GetCategoriesResponseSubCategoriesCategory `json:"Category,omitempty" xml:"Category,omitempty" require:"true" type:"Repeated"`
}

func (s GetCategoriesResponseSubCategories) String() string {
	return tea.Prettify(s)
}

func (s GetCategoriesResponseSubCategories) GoString() string {
	return s.String()
}

func (s *GetCategoriesResponseSubCategories) SetCategory(v []*GetCategoriesResponseSubCategoriesCategory) *GetCategoriesResponseSubCategories {
	s.Category = v
	return s
}

type GetCategoriesResponseSubCategoriesCategory struct {
	CateId   *int64  `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
	CateName *string `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	Level    *int64  `json:"Level,omitempty" xml:"Level,omitempty" require:"true"`
	ParentId *int64  `json:"ParentId,omitempty" xml:"ParentId,omitempty" require:"true"`
	SubTotal *int64  `json:"SubTotal,omitempty" xml:"SubTotal,omitempty" require:"true"`
	Type     *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
}

func (s GetCategoriesResponseSubCategoriesCategory) String() string {
	return tea.Prettify(s)
}

func (s GetCategoriesResponseSubCategoriesCategory) GoString() string {
	return s.String()
}

func (s *GetCategoriesResponseSubCategoriesCategory) SetCateId(v int64) *GetCategoriesResponseSubCategoriesCategory {
	s.CateId = &v
	return s
}

func (s *GetCategoriesResponseSubCategoriesCategory) SetCateName(v string) *GetCategoriesResponseSubCategoriesCategory {
	s.CateName = &v
	return s
}

func (s *GetCategoriesResponseSubCategoriesCategory) SetLevel(v int64) *GetCategoriesResponseSubCategoriesCategory {
	s.Level = &v
	return s
}

func (s *GetCategoriesResponseSubCategoriesCategory) SetParentId(v int64) *GetCategoriesResponseSubCategoriesCategory {
	s.ParentId = &v
	return s
}

func (s *GetCategoriesResponseSubCategoriesCategory) SetSubTotal(v int64) *GetCategoriesResponseSubCategoriesCategory {
	s.SubTotal = &v
	return s
}

func (s *GetCategoriesResponseSubCategoriesCategory) SetType(v string) *GetCategoriesResponseSubCategoriesCategory {
	s.Type = &v
	return s
}

type GetCategoriesResponseCategory struct {
	CateId   *int64  `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
	CateName *string `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	Level    *int64  `json:"Level,omitempty" xml:"Level,omitempty" require:"true"`
	ParentId *int64  `json:"ParentId,omitempty" xml:"ParentId,omitempty" require:"true"`
	Type     *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
}

func (s GetCategoriesResponseCategory) String() string {
	return tea.Prettify(s)
}

func (s GetCategoriesResponseCategory) GoString() string {
	return s.String()
}

func (s *GetCategoriesResponseCategory) SetCateId(v int64) *GetCategoriesResponseCategory {
	s.CateId = &v
	return s
}

func (s *GetCategoriesResponseCategory) SetCateName(v string) *GetCategoriesResponseCategory {
	s.CateName = &v
	return s
}

func (s *GetCategoriesResponseCategory) SetLevel(v int64) *GetCategoriesResponseCategory {
	s.Level = &v
	return s
}

func (s *GetCategoriesResponseCategory) SetParentId(v int64) *GetCategoriesResponseCategory {
	s.ParentId = &v
	return s
}

func (s *GetCategoriesResponseCategory) SetType(v string) *GetCategoriesResponseCategory {
	s.Type = &v
	return s
}

type DeleteCategoryRequest struct {
	CateId *int64 `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
}

func (s DeleteCategoryRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteCategoryRequest) GoString() string {
	return s.String()
}

func (s *DeleteCategoryRequest) SetCateId(v int64) *DeleteCategoryRequest {
	s.CateId = &v
	return s
}

type DeleteCategoryResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteCategoryResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteCategoryResponse) GoString() string {
	return s.String()
}

func (s *DeleteCategoryResponse) SetRequestId(v string) *DeleteCategoryResponse {
	s.RequestId = &v
	return s
}

type AddCategoryRequest struct {
	CateName *string `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	ParentId *int64  `json:"ParentId,omitempty" xml:"ParentId,omitempty"`
	Type     *string `json:"Type,omitempty" xml:"Type,omitempty"`
}

func (s AddCategoryRequest) String() string {
	return tea.Prettify(s)
}

func (s AddCategoryRequest) GoString() string {
	return s.String()
}

func (s *AddCategoryRequest) SetCateName(v string) *AddCategoryRequest {
	s.CateName = &v
	return s
}

func (s *AddCategoryRequest) SetParentId(v int64) *AddCategoryRequest {
	s.ParentId = &v
	return s
}

func (s *AddCategoryRequest) SetType(v string) *AddCategoryRequest {
	s.Type = &v
	return s
}

type AddCategoryResponse struct {
	RequestId *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Category  *AddCategoryResponseCategory `json:"Category,omitempty" xml:"Category,omitempty" require:"true" type:"Struct"`
}

func (s AddCategoryResponse) String() string {
	return tea.Prettify(s)
}

func (s AddCategoryResponse) GoString() string {
	return s.String()
}

func (s *AddCategoryResponse) SetRequestId(v string) *AddCategoryResponse {
	s.RequestId = &v
	return s
}

func (s *AddCategoryResponse) SetCategory(v *AddCategoryResponseCategory) *AddCategoryResponse {
	s.Category = v
	return s
}

type AddCategoryResponseCategory struct {
	CateId   *int64  `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
	CateName *string `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	ParentId *int64  `json:"ParentId,omitempty" xml:"ParentId,omitempty" require:"true"`
	Level    *int64  `json:"Level,omitempty" xml:"Level,omitempty" require:"true"`
	Type     *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
}

func (s AddCategoryResponseCategory) String() string {
	return tea.Prettify(s)
}

func (s AddCategoryResponseCategory) GoString() string {
	return s.String()
}

func (s *AddCategoryResponseCategory) SetCateId(v int64) *AddCategoryResponseCategory {
	s.CateId = &v
	return s
}

func (s *AddCategoryResponseCategory) SetCateName(v string) *AddCategoryResponseCategory {
	s.CateName = &v
	return s
}

func (s *AddCategoryResponseCategory) SetParentId(v int64) *AddCategoryResponseCategory {
	s.ParentId = &v
	return s
}

func (s *AddCategoryResponseCategory) SetLevel(v int64) *AddCategoryResponseCategory {
	s.Level = &v
	return s
}

func (s *AddCategoryResponseCategory) SetType(v string) *AddCategoryResponseCategory {
	s.Type = &v
	return s
}

type GetPlayInfoRequest struct {
	VideoId     *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	Formats     *string `json:"Formats,omitempty" xml:"Formats,omitempty"`
	AuthTimeout *int64  `json:"AuthTimeout,omitempty" xml:"AuthTimeout,omitempty"`
	OutputType  *string `json:"OutputType,omitempty" xml:"OutputType,omitempty"`
	StreamType  *string `json:"StreamType,omitempty" xml:"StreamType,omitempty"`
	ReAuthInfo  *string `json:"ReAuthInfo,omitempty" xml:"ReAuthInfo,omitempty"`
	Definition  *string `json:"Definition,omitempty" xml:"Definition,omitempty"`
	ResultType  *string `json:"ResultType,omitempty" xml:"ResultType,omitempty"`
	PlayConfig  *string `json:"PlayConfig,omitempty" xml:"PlayConfig,omitempty"`
}

func (s GetPlayInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s GetPlayInfoRequest) GoString() string {
	return s.String()
}

func (s *GetPlayInfoRequest) SetVideoId(v string) *GetPlayInfoRequest {
	s.VideoId = &v
	return s
}

func (s *GetPlayInfoRequest) SetFormats(v string) *GetPlayInfoRequest {
	s.Formats = &v
	return s
}

func (s *GetPlayInfoRequest) SetAuthTimeout(v int64) *GetPlayInfoRequest {
	s.AuthTimeout = &v
	return s
}

func (s *GetPlayInfoRequest) SetOutputType(v string) *GetPlayInfoRequest {
	s.OutputType = &v
	return s
}

func (s *GetPlayInfoRequest) SetStreamType(v string) *GetPlayInfoRequest {
	s.StreamType = &v
	return s
}

func (s *GetPlayInfoRequest) SetReAuthInfo(v string) *GetPlayInfoRequest {
	s.ReAuthInfo = &v
	return s
}

func (s *GetPlayInfoRequest) SetDefinition(v string) *GetPlayInfoRequest {
	s.Definition = &v
	return s
}

func (s *GetPlayInfoRequest) SetResultType(v string) *GetPlayInfoRequest {
	s.ResultType = &v
	return s
}

func (s *GetPlayInfoRequest) SetPlayConfig(v string) *GetPlayInfoRequest {
	s.PlayConfig = &v
	return s
}

type GetPlayInfoResponse struct {
	RequestId    *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PlayInfoList *GetPlayInfoResponsePlayInfoList `json:"PlayInfoList,omitempty" xml:"PlayInfoList,omitempty" require:"true" type:"Struct"`
	VideoBase    *GetPlayInfoResponseVideoBase    `json:"VideoBase,omitempty" xml:"VideoBase,omitempty" require:"true" type:"Struct"`
}

func (s GetPlayInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s GetPlayInfoResponse) GoString() string {
	return s.String()
}

func (s *GetPlayInfoResponse) SetRequestId(v string) *GetPlayInfoResponse {
	s.RequestId = &v
	return s
}

func (s *GetPlayInfoResponse) SetPlayInfoList(v *GetPlayInfoResponsePlayInfoList) *GetPlayInfoResponse {
	s.PlayInfoList = v
	return s
}

func (s *GetPlayInfoResponse) SetVideoBase(v *GetPlayInfoResponseVideoBase) *GetPlayInfoResponse {
	s.VideoBase = v
	return s
}

type GetPlayInfoResponsePlayInfoList struct {
	PlayInfo []*GetPlayInfoResponsePlayInfoListPlayInfo `json:"PlayInfo,omitempty" xml:"PlayInfo,omitempty" require:"true" type:"Repeated"`
}

func (s GetPlayInfoResponsePlayInfoList) String() string {
	return tea.Prettify(s)
}

func (s GetPlayInfoResponsePlayInfoList) GoString() string {
	return s.String()
}

func (s *GetPlayInfoResponsePlayInfoList) SetPlayInfo(v []*GetPlayInfoResponsePlayInfoListPlayInfo) *GetPlayInfoResponsePlayInfoList {
	s.PlayInfo = v
	return s
}

type GetPlayInfoResponsePlayInfoListPlayInfo struct {
	Width            *int64  `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height           *int64  `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Size             *int64  `json:"Size,omitempty" xml:"Size,omitempty" require:"true"`
	PlayURL          *string `json:"PlayURL,omitempty" xml:"PlayURL,omitempty" require:"true"`
	Bitrate          *string `json:"Bitrate,omitempty" xml:"Bitrate,omitempty" require:"true"`
	Definition       *string `json:"Definition,omitempty" xml:"Definition,omitempty" require:"true"`
	Duration         *string `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Format           *string `json:"Format,omitempty" xml:"Format,omitempty" require:"true"`
	Fps              *string `json:"Fps,omitempty" xml:"Fps,omitempty" require:"true"`
	Encrypt          *int64  `json:"Encrypt,omitempty" xml:"Encrypt,omitempty" require:"true"`
	Plaintext        *string `json:"Plaintext,omitempty" xml:"Plaintext,omitempty" require:"true"`
	Complexity       *string `json:"Complexity,omitempty" xml:"Complexity,omitempty" require:"true"`
	StreamType       *string `json:"StreamType,omitempty" xml:"StreamType,omitempty" require:"true"`
	Rand             *string `json:"Rand,omitempty" xml:"Rand,omitempty" require:"true"`
	JobId            *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
	PreprocessStatus *string `json:"PreprocessStatus,omitempty" xml:"PreprocessStatus,omitempty" require:"true"`
	WatermarkId      *string `json:"WatermarkId,omitempty" xml:"WatermarkId,omitempty" require:"true"`
	Status           *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	CreationTime     *string `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	ModificationTime *string `json:"ModificationTime,omitempty" xml:"ModificationTime,omitempty" require:"true"`
	EncryptType      *string `json:"EncryptType,omitempty" xml:"EncryptType,omitempty" require:"true"`
	NarrowBandType   *string `json:"NarrowBandType,omitempty" xml:"NarrowBandType,omitempty" require:"true"`
	Specification    *string `json:"Specification,omitempty" xml:"Specification,omitempty" require:"true"`
}

func (s GetPlayInfoResponsePlayInfoListPlayInfo) String() string {
	return tea.Prettify(s)
}

func (s GetPlayInfoResponsePlayInfoListPlayInfo) GoString() string {
	return s.String()
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetWidth(v int64) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.Width = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetHeight(v int64) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.Height = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetSize(v int64) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.Size = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetPlayURL(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.PlayURL = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetBitrate(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.Bitrate = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetDefinition(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.Definition = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetDuration(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.Duration = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetFormat(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.Format = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetFps(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.Fps = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetEncrypt(v int64) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.Encrypt = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetPlaintext(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.Plaintext = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetComplexity(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.Complexity = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetStreamType(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.StreamType = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetRand(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.Rand = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetJobId(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.JobId = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetPreprocessStatus(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.PreprocessStatus = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetWatermarkId(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.WatermarkId = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetStatus(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.Status = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetCreationTime(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.CreationTime = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetModificationTime(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.ModificationTime = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetEncryptType(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.EncryptType = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetNarrowBandType(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.NarrowBandType = &v
	return s
}

func (s *GetPlayInfoResponsePlayInfoListPlayInfo) SetSpecification(v string) *GetPlayInfoResponsePlayInfoListPlayInfo {
	s.Specification = &v
	return s
}

type GetPlayInfoResponseVideoBase struct {
	OutputType    *string                                    `json:"OutputType,omitempty" xml:"OutputType,omitempty" require:"true"`
	CoverURL      *string                                    `json:"CoverURL,omitempty" xml:"CoverURL,omitempty" require:"true"`
	Duration      *string                                    `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Status        *string                                    `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Title         *string                                    `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	VideoId       *string                                    `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	MediaType     *string                                    `json:"MediaType,omitempty" xml:"MediaType,omitempty" require:"true"`
	CreationTime  *string                                    `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	TranscodeMode *string                                    `json:"TranscodeMode,omitempty" xml:"TranscodeMode,omitempty" require:"true"`
	ThumbnailList *GetPlayInfoResponseVideoBaseThumbnailList `json:"ThumbnailList,omitempty" xml:"ThumbnailList,omitempty" require:"true" type:"Struct"`
}

func (s GetPlayInfoResponseVideoBase) String() string {
	return tea.Prettify(s)
}

func (s GetPlayInfoResponseVideoBase) GoString() string {
	return s.String()
}

func (s *GetPlayInfoResponseVideoBase) SetOutputType(v string) *GetPlayInfoResponseVideoBase {
	s.OutputType = &v
	return s
}

func (s *GetPlayInfoResponseVideoBase) SetCoverURL(v string) *GetPlayInfoResponseVideoBase {
	s.CoverURL = &v
	return s
}

func (s *GetPlayInfoResponseVideoBase) SetDuration(v string) *GetPlayInfoResponseVideoBase {
	s.Duration = &v
	return s
}

func (s *GetPlayInfoResponseVideoBase) SetStatus(v string) *GetPlayInfoResponseVideoBase {
	s.Status = &v
	return s
}

func (s *GetPlayInfoResponseVideoBase) SetTitle(v string) *GetPlayInfoResponseVideoBase {
	s.Title = &v
	return s
}

func (s *GetPlayInfoResponseVideoBase) SetVideoId(v string) *GetPlayInfoResponseVideoBase {
	s.VideoId = &v
	return s
}

func (s *GetPlayInfoResponseVideoBase) SetMediaType(v string) *GetPlayInfoResponseVideoBase {
	s.MediaType = &v
	return s
}

func (s *GetPlayInfoResponseVideoBase) SetCreationTime(v string) *GetPlayInfoResponseVideoBase {
	s.CreationTime = &v
	return s
}

func (s *GetPlayInfoResponseVideoBase) SetTranscodeMode(v string) *GetPlayInfoResponseVideoBase {
	s.TranscodeMode = &v
	return s
}

func (s *GetPlayInfoResponseVideoBase) SetThumbnailList(v *GetPlayInfoResponseVideoBaseThumbnailList) *GetPlayInfoResponseVideoBase {
	s.ThumbnailList = v
	return s
}

type GetPlayInfoResponseVideoBaseThumbnailList struct {
	Thumbnail []*GetPlayInfoResponseVideoBaseThumbnailListThumbnail `json:"Thumbnail,omitempty" xml:"Thumbnail,omitempty" require:"true" type:"Repeated"`
}

func (s GetPlayInfoResponseVideoBaseThumbnailList) String() string {
	return tea.Prettify(s)
}

func (s GetPlayInfoResponseVideoBaseThumbnailList) GoString() string {
	return s.String()
}

func (s *GetPlayInfoResponseVideoBaseThumbnailList) SetThumbnail(v []*GetPlayInfoResponseVideoBaseThumbnailListThumbnail) *GetPlayInfoResponseVideoBaseThumbnailList {
	s.Thumbnail = v
	return s
}

type GetPlayInfoResponseVideoBaseThumbnailListThumbnail struct {
	URL *string `json:"URL,omitempty" xml:"URL,omitempty" require:"true"`
}

func (s GetPlayInfoResponseVideoBaseThumbnailListThumbnail) String() string {
	return tea.Prettify(s)
}

func (s GetPlayInfoResponseVideoBaseThumbnailListThumbnail) GoString() string {
	return s.String()
}

func (s *GetPlayInfoResponseVideoBaseThumbnailListThumbnail) SetURL(v string) *GetPlayInfoResponseVideoBaseThumbnailListThumbnail {
	s.URL = &v
	return s
}

type CreateUploadImageRequest struct {
	Title            *string `json:"Title,omitempty" xml:"Title,omitempty"`
	ImageType        *string `json:"ImageType,omitempty" xml:"ImageType,omitempty" require:"true"`
	ImageExt         *string `json:"ImageExt,omitempty" xml:"ImageExt,omitempty"`
	OriginalFileName *string `json:"OriginalFileName,omitempty" xml:"OriginalFileName,omitempty"`
	Tags             *string `json:"Tags,omitempty" xml:"Tags,omitempty"`
	StorageLocation  *string `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty"`
	CateId           *int64  `json:"CateId,omitempty" xml:"CateId,omitempty"`
	UserData         *string `json:"UserData,omitempty" xml:"UserData,omitempty"`
	Description      *string `json:"Description,omitempty" xml:"Description,omitempty"`
	AppId            *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
}

func (s CreateUploadImageRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateUploadImageRequest) GoString() string {
	return s.String()
}

func (s *CreateUploadImageRequest) SetTitle(v string) *CreateUploadImageRequest {
	s.Title = &v
	return s
}

func (s *CreateUploadImageRequest) SetImageType(v string) *CreateUploadImageRequest {
	s.ImageType = &v
	return s
}

func (s *CreateUploadImageRequest) SetImageExt(v string) *CreateUploadImageRequest {
	s.ImageExt = &v
	return s
}

func (s *CreateUploadImageRequest) SetOriginalFileName(v string) *CreateUploadImageRequest {
	s.OriginalFileName = &v
	return s
}

func (s *CreateUploadImageRequest) SetTags(v string) *CreateUploadImageRequest {
	s.Tags = &v
	return s
}

func (s *CreateUploadImageRequest) SetStorageLocation(v string) *CreateUploadImageRequest {
	s.StorageLocation = &v
	return s
}

func (s *CreateUploadImageRequest) SetCateId(v int64) *CreateUploadImageRequest {
	s.CateId = &v
	return s
}

func (s *CreateUploadImageRequest) SetUserData(v string) *CreateUploadImageRequest {
	s.UserData = &v
	return s
}

func (s *CreateUploadImageRequest) SetDescription(v string) *CreateUploadImageRequest {
	s.Description = &v
	return s
}

func (s *CreateUploadImageRequest) SetAppId(v string) *CreateUploadImageRequest {
	s.AppId = &v
	return s
}

type CreateUploadImageResponse struct {
	RequestId     *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ImageId       *string `json:"ImageId,omitempty" xml:"ImageId,omitempty" require:"true"`
	ImageURL      *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	UploadAddress *string `json:"UploadAddress,omitempty" xml:"UploadAddress,omitempty" require:"true"`
	UploadAuth    *string `json:"UploadAuth,omitempty" xml:"UploadAuth,omitempty" require:"true"`
	FileURL       *string `json:"FileURL,omitempty" xml:"FileURL,omitempty" require:"true"`
}

func (s CreateUploadImageResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateUploadImageResponse) GoString() string {
	return s.String()
}

func (s *CreateUploadImageResponse) SetRequestId(v string) *CreateUploadImageResponse {
	s.RequestId = &v
	return s
}

func (s *CreateUploadImageResponse) SetImageId(v string) *CreateUploadImageResponse {
	s.ImageId = &v
	return s
}

func (s *CreateUploadImageResponse) SetImageURL(v string) *CreateUploadImageResponse {
	s.ImageURL = &v
	return s
}

func (s *CreateUploadImageResponse) SetUploadAddress(v string) *CreateUploadImageResponse {
	s.UploadAddress = &v
	return s
}

func (s *CreateUploadImageResponse) SetUploadAuth(v string) *CreateUploadImageResponse {
	s.UploadAuth = &v
	return s
}

func (s *CreateUploadImageResponse) SetFileURL(v string) *CreateUploadImageResponse {
	s.FileURL = &v
	return s
}

type SetMessageCallbackRequest struct {
	CallbackType        *string `json:"CallbackType,omitempty" xml:"CallbackType,omitempty"`
	CallbackURL         *string `json:"CallbackURL,omitempty" xml:"CallbackURL,omitempty"`
	EventTypeList       *string `json:"EventTypeList,omitempty" xml:"EventTypeList,omitempty"`
	AuthSwitch          *string `json:"AuthSwitch,omitempty" xml:"AuthSwitch,omitempty"`
	AuthKey             *string `json:"AuthKey,omitempty" xml:"AuthKey,omitempty"`
	ResourceRealOwnerId *int64  `json:"ResourceRealOwnerId,omitempty" xml:"ResourceRealOwnerId,omitempty"`
	MnsEndpoint         *string `json:"MnsEndpoint,omitempty" xml:"MnsEndpoint,omitempty"`
	MnsQueueName        *string `json:"MnsQueueName,omitempty" xml:"MnsQueueName,omitempty"`
	AppId               *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
}

func (s SetMessageCallbackRequest) String() string {
	return tea.Prettify(s)
}

func (s SetMessageCallbackRequest) GoString() string {
	return s.String()
}

func (s *SetMessageCallbackRequest) SetCallbackType(v string) *SetMessageCallbackRequest {
	s.CallbackType = &v
	return s
}

func (s *SetMessageCallbackRequest) SetCallbackURL(v string) *SetMessageCallbackRequest {
	s.CallbackURL = &v
	return s
}

func (s *SetMessageCallbackRequest) SetEventTypeList(v string) *SetMessageCallbackRequest {
	s.EventTypeList = &v
	return s
}

func (s *SetMessageCallbackRequest) SetAuthSwitch(v string) *SetMessageCallbackRequest {
	s.AuthSwitch = &v
	return s
}

func (s *SetMessageCallbackRequest) SetAuthKey(v string) *SetMessageCallbackRequest {
	s.AuthKey = &v
	return s
}

func (s *SetMessageCallbackRequest) SetResourceRealOwnerId(v int64) *SetMessageCallbackRequest {
	s.ResourceRealOwnerId = &v
	return s
}

func (s *SetMessageCallbackRequest) SetMnsEndpoint(v string) *SetMessageCallbackRequest {
	s.MnsEndpoint = &v
	return s
}

func (s *SetMessageCallbackRequest) SetMnsQueueName(v string) *SetMessageCallbackRequest {
	s.MnsQueueName = &v
	return s
}

func (s *SetMessageCallbackRequest) SetAppId(v string) *SetMessageCallbackRequest {
	s.AppId = &v
	return s
}

type SetMessageCallbackResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s SetMessageCallbackResponse) String() string {
	return tea.Prettify(s)
}

func (s SetMessageCallbackResponse) GoString() string {
	return s.String()
}

func (s *SetMessageCallbackResponse) SetRequestId(v string) *SetMessageCallbackResponse {
	s.RequestId = &v
	return s
}

type GetMessageCallbackRequest struct {
	ResourceRealOwnerId *int64  `json:"ResourceRealOwnerId,omitempty" xml:"ResourceRealOwnerId,omitempty"`
	AppId               *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
}

func (s GetMessageCallbackRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMessageCallbackRequest) GoString() string {
	return s.String()
}

func (s *GetMessageCallbackRequest) SetResourceRealOwnerId(v int64) *GetMessageCallbackRequest {
	s.ResourceRealOwnerId = &v
	return s
}

func (s *GetMessageCallbackRequest) SetAppId(v string) *GetMessageCallbackRequest {
	s.AppId = &v
	return s
}

type GetMessageCallbackResponse struct {
	RequestId       *string                                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	MessageCallback *GetMessageCallbackResponseMessageCallback `json:"MessageCallback,omitempty" xml:"MessageCallback,omitempty" require:"true" type:"Struct"`
}

func (s GetMessageCallbackResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMessageCallbackResponse) GoString() string {
	return s.String()
}

func (s *GetMessageCallbackResponse) SetRequestId(v string) *GetMessageCallbackResponse {
	s.RequestId = &v
	return s
}

func (s *GetMessageCallbackResponse) SetMessageCallback(v *GetMessageCallbackResponseMessageCallback) *GetMessageCallbackResponse {
	s.MessageCallback = v
	return s
}

type GetMessageCallbackResponseMessageCallback struct {
	CallbackType  *string `json:"CallbackType,omitempty" xml:"CallbackType,omitempty" require:"true"`
	CallbackURL   *string `json:"CallbackURL,omitempty" xml:"CallbackURL,omitempty" require:"true"`
	EventTypeList *string `json:"EventTypeList,omitempty" xml:"EventTypeList,omitempty" require:"true"`
	AuthSwitch    *string `json:"AuthSwitch,omitempty" xml:"AuthSwitch,omitempty" require:"true"`
	AuthKey       *string `json:"AuthKey,omitempty" xml:"AuthKey,omitempty" require:"true"`
	MnsEndpoint   *string `json:"MnsEndpoint,omitempty" xml:"MnsEndpoint,omitempty" require:"true"`
	MnsQueueName  *string `json:"MnsQueueName,omitempty" xml:"MnsQueueName,omitempty" require:"true"`
	AppId         *string `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
}

func (s GetMessageCallbackResponseMessageCallback) String() string {
	return tea.Prettify(s)
}

func (s GetMessageCallbackResponseMessageCallback) GoString() string {
	return s.String()
}

func (s *GetMessageCallbackResponseMessageCallback) SetCallbackType(v string) *GetMessageCallbackResponseMessageCallback {
	s.CallbackType = &v
	return s
}

func (s *GetMessageCallbackResponseMessageCallback) SetCallbackURL(v string) *GetMessageCallbackResponseMessageCallback {
	s.CallbackURL = &v
	return s
}

func (s *GetMessageCallbackResponseMessageCallback) SetEventTypeList(v string) *GetMessageCallbackResponseMessageCallback {
	s.EventTypeList = &v
	return s
}

func (s *GetMessageCallbackResponseMessageCallback) SetAuthSwitch(v string) *GetMessageCallbackResponseMessageCallback {
	s.AuthSwitch = &v
	return s
}

func (s *GetMessageCallbackResponseMessageCallback) SetAuthKey(v string) *GetMessageCallbackResponseMessageCallback {
	s.AuthKey = &v
	return s
}

func (s *GetMessageCallbackResponseMessageCallback) SetMnsEndpoint(v string) *GetMessageCallbackResponseMessageCallback {
	s.MnsEndpoint = &v
	return s
}

func (s *GetMessageCallbackResponseMessageCallback) SetMnsQueueName(v string) *GetMessageCallbackResponseMessageCallback {
	s.MnsQueueName = &v
	return s
}

func (s *GetMessageCallbackResponseMessageCallback) SetAppId(v string) *GetMessageCallbackResponseMessageCallback {
	s.AppId = &v
	return s
}

type UpdateVideoInfoRequest struct {
	VideoId         *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	Title           *string `json:"Title,omitempty" xml:"Title,omitempty"`
	Tags            *string `json:"Tags,omitempty" xml:"Tags,omitempty"`
	Description     *string `json:"Description,omitempty" xml:"Description,omitempty"`
	CoverURL        *string `json:"CoverURL,omitempty" xml:"CoverURL,omitempty"`
	CateId          *int64  `json:"CateId,omitempty" xml:"CateId,omitempty"`
	CustomMediaInfo *string `json:"CustomMediaInfo,omitempty" xml:"CustomMediaInfo,omitempty"`
}

func (s UpdateVideoInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateVideoInfoRequest) GoString() string {
	return s.String()
}

func (s *UpdateVideoInfoRequest) SetVideoId(v string) *UpdateVideoInfoRequest {
	s.VideoId = &v
	return s
}

func (s *UpdateVideoInfoRequest) SetTitle(v string) *UpdateVideoInfoRequest {
	s.Title = &v
	return s
}

func (s *UpdateVideoInfoRequest) SetTags(v string) *UpdateVideoInfoRequest {
	s.Tags = &v
	return s
}

func (s *UpdateVideoInfoRequest) SetDescription(v string) *UpdateVideoInfoRequest {
	s.Description = &v
	return s
}

func (s *UpdateVideoInfoRequest) SetCoverURL(v string) *UpdateVideoInfoRequest {
	s.CoverURL = &v
	return s
}

func (s *UpdateVideoInfoRequest) SetCateId(v int64) *UpdateVideoInfoRequest {
	s.CateId = &v
	return s
}

func (s *UpdateVideoInfoRequest) SetCustomMediaInfo(v string) *UpdateVideoInfoRequest {
	s.CustomMediaInfo = &v
	return s
}

type UpdateVideoInfoResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateVideoInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateVideoInfoResponse) GoString() string {
	return s.String()
}

func (s *UpdateVideoInfoResponse) SetRequestId(v string) *UpdateVideoInfoResponse {
	s.RequestId = &v
	return s
}

type GetVideoPlayAuthRequest struct {
	VideoId         *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	AuthInfoTimeout *int64  `json:"AuthInfoTimeout,omitempty" xml:"AuthInfoTimeout,omitempty"`
	PlayConfig      *string `json:"PlayConfig,omitempty" xml:"PlayConfig,omitempty"`
}

func (s GetVideoPlayAuthRequest) String() string {
	return tea.Prettify(s)
}

func (s GetVideoPlayAuthRequest) GoString() string {
	return s.String()
}

func (s *GetVideoPlayAuthRequest) SetVideoId(v string) *GetVideoPlayAuthRequest {
	s.VideoId = &v
	return s
}

func (s *GetVideoPlayAuthRequest) SetAuthInfoTimeout(v int64) *GetVideoPlayAuthRequest {
	s.AuthInfoTimeout = &v
	return s
}

func (s *GetVideoPlayAuthRequest) SetPlayConfig(v string) *GetVideoPlayAuthRequest {
	s.PlayConfig = &v
	return s
}

type GetVideoPlayAuthResponse struct {
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PlayAuth  *string                            `json:"PlayAuth,omitempty" xml:"PlayAuth,omitempty" require:"true"`
	VideoMeta *GetVideoPlayAuthResponseVideoMeta `json:"VideoMeta,omitempty" xml:"VideoMeta,omitempty" require:"true" type:"Struct"`
}

func (s GetVideoPlayAuthResponse) String() string {
	return tea.Prettify(s)
}

func (s GetVideoPlayAuthResponse) GoString() string {
	return s.String()
}

func (s *GetVideoPlayAuthResponse) SetRequestId(v string) *GetVideoPlayAuthResponse {
	s.RequestId = &v
	return s
}

func (s *GetVideoPlayAuthResponse) SetPlayAuth(v string) *GetVideoPlayAuthResponse {
	s.PlayAuth = &v
	return s
}

func (s *GetVideoPlayAuthResponse) SetVideoMeta(v *GetVideoPlayAuthResponseVideoMeta) *GetVideoPlayAuthResponse {
	s.VideoMeta = v
	return s
}

type GetVideoPlayAuthResponseVideoMeta struct {
	CoverURL *string  `json:"CoverURL,omitempty" xml:"CoverURL,omitempty" require:"true"`
	Duration *float32 `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Status   *string  `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Title    *string  `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	VideoId  *string  `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
}

func (s GetVideoPlayAuthResponseVideoMeta) String() string {
	return tea.Prettify(s)
}

func (s GetVideoPlayAuthResponseVideoMeta) GoString() string {
	return s.String()
}

func (s *GetVideoPlayAuthResponseVideoMeta) SetCoverURL(v string) *GetVideoPlayAuthResponseVideoMeta {
	s.CoverURL = &v
	return s
}

func (s *GetVideoPlayAuthResponseVideoMeta) SetDuration(v float32) *GetVideoPlayAuthResponseVideoMeta {
	s.Duration = &v
	return s
}

func (s *GetVideoPlayAuthResponseVideoMeta) SetStatus(v string) *GetVideoPlayAuthResponseVideoMeta {
	s.Status = &v
	return s
}

func (s *GetVideoPlayAuthResponseVideoMeta) SetTitle(v string) *GetVideoPlayAuthResponseVideoMeta {
	s.Title = &v
	return s
}

func (s *GetVideoPlayAuthResponseVideoMeta) SetVideoId(v string) *GetVideoPlayAuthResponseVideoMeta {
	s.VideoId = &v
	return s
}

type GetVideoListRequest struct {
	CateId          *int64  `json:"CateId,omitempty" xml:"CateId,omitempty"`
	Status          *string `json:"Status,omitempty" xml:"Status,omitempty"`
	PageNo          *int    `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
	PageSize        *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	SortBy          *string `json:"SortBy,omitempty" xml:"SortBy,omitempty"`
	StartTime       *string `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime         *string `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
	StorageLocation *string `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty"`
}

func (s GetVideoListRequest) String() string {
	return tea.Prettify(s)
}

func (s GetVideoListRequest) GoString() string {
	return s.String()
}

func (s *GetVideoListRequest) SetCateId(v int64) *GetVideoListRequest {
	s.CateId = &v
	return s
}

func (s *GetVideoListRequest) SetStatus(v string) *GetVideoListRequest {
	s.Status = &v
	return s
}

func (s *GetVideoListRequest) SetPageNo(v int) *GetVideoListRequest {
	s.PageNo = &v
	return s
}

func (s *GetVideoListRequest) SetPageSize(v int) *GetVideoListRequest {
	s.PageSize = &v
	return s
}

func (s *GetVideoListRequest) SetSortBy(v string) *GetVideoListRequest {
	s.SortBy = &v
	return s
}

func (s *GetVideoListRequest) SetStartTime(v string) *GetVideoListRequest {
	s.StartTime = &v
	return s
}

func (s *GetVideoListRequest) SetEndTime(v string) *GetVideoListRequest {
	s.EndTime = &v
	return s
}

func (s *GetVideoListRequest) SetStorageLocation(v string) *GetVideoListRequest {
	s.StorageLocation = &v
	return s
}

type GetVideoListResponse struct {
	RequestId *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Total     *int                           `json:"Total,omitempty" xml:"Total,omitempty" require:"true"`
	VideoList *GetVideoListResponseVideoList `json:"VideoList,omitempty" xml:"VideoList,omitempty" require:"true" type:"Struct"`
}

func (s GetVideoListResponse) String() string {
	return tea.Prettify(s)
}

func (s GetVideoListResponse) GoString() string {
	return s.String()
}

func (s *GetVideoListResponse) SetRequestId(v string) *GetVideoListResponse {
	s.RequestId = &v
	return s
}

func (s *GetVideoListResponse) SetTotal(v int) *GetVideoListResponse {
	s.Total = &v
	return s
}

func (s *GetVideoListResponse) SetVideoList(v *GetVideoListResponseVideoList) *GetVideoListResponse {
	s.VideoList = v
	return s
}

type GetVideoListResponseVideoList struct {
	Video []*GetVideoListResponseVideoListVideo `json:"Video,omitempty" xml:"Video,omitempty" require:"true" type:"Repeated"`
}

func (s GetVideoListResponseVideoList) String() string {
	return tea.Prettify(s)
}

func (s GetVideoListResponseVideoList) GoString() string {
	return s.String()
}

func (s *GetVideoListResponseVideoList) SetVideo(v []*GetVideoListResponseVideoListVideo) *GetVideoListResponseVideoList {
	s.Video = v
	return s
}

type GetVideoListResponseVideoListVideo struct {
	VideoId          *string                                      `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	Title            *string                                      `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	Tags             *string                                      `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true"`
	Status           *string                                      `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Size             *int64                                       `json:"Size,omitempty" xml:"Size,omitempty" require:"true"`
	Duration         *float32                                     `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Description      *string                                      `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreateTime       *string                                      `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	ModifyTime       *string                                      `json:"ModifyTime,omitempty" xml:"ModifyTime,omitempty" require:"true"`
	ModificationTime *string                                      `json:"ModificationTime,omitempty" xml:"ModificationTime,omitempty" require:"true"`
	CreationTime     *string                                      `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	CoverURL         *string                                      `json:"CoverURL,omitempty" xml:"CoverURL,omitempty" require:"true"`
	CateId           *int64                                       `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
	CateName         *string                                      `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	StorageLocation  *string                                      `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty" require:"true"`
	AppId            *string                                      `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	Snapshots        *GetVideoListResponseVideoListVideoSnapshots `json:"Snapshots,omitempty" xml:"Snapshots,omitempty" require:"true" type:"Struct"`
}

func (s GetVideoListResponseVideoListVideo) String() string {
	return tea.Prettify(s)
}

func (s GetVideoListResponseVideoListVideo) GoString() string {
	return s.String()
}

func (s *GetVideoListResponseVideoListVideo) SetVideoId(v string) *GetVideoListResponseVideoListVideo {
	s.VideoId = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetTitle(v string) *GetVideoListResponseVideoListVideo {
	s.Title = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetTags(v string) *GetVideoListResponseVideoListVideo {
	s.Tags = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetStatus(v string) *GetVideoListResponseVideoListVideo {
	s.Status = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetSize(v int64) *GetVideoListResponseVideoListVideo {
	s.Size = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetDuration(v float32) *GetVideoListResponseVideoListVideo {
	s.Duration = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetDescription(v string) *GetVideoListResponseVideoListVideo {
	s.Description = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetCreateTime(v string) *GetVideoListResponseVideoListVideo {
	s.CreateTime = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetModifyTime(v string) *GetVideoListResponseVideoListVideo {
	s.ModifyTime = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetModificationTime(v string) *GetVideoListResponseVideoListVideo {
	s.ModificationTime = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetCreationTime(v string) *GetVideoListResponseVideoListVideo {
	s.CreationTime = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetCoverURL(v string) *GetVideoListResponseVideoListVideo {
	s.CoverURL = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetCateId(v int64) *GetVideoListResponseVideoListVideo {
	s.CateId = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetCateName(v string) *GetVideoListResponseVideoListVideo {
	s.CateName = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetStorageLocation(v string) *GetVideoListResponseVideoListVideo {
	s.StorageLocation = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetAppId(v string) *GetVideoListResponseVideoListVideo {
	s.AppId = &v
	return s
}

func (s *GetVideoListResponseVideoListVideo) SetSnapshots(v *GetVideoListResponseVideoListVideoSnapshots) *GetVideoListResponseVideoListVideo {
	s.Snapshots = v
	return s
}

type GetVideoListResponseVideoListVideoSnapshots struct {
	Snapshot []*string `json:"Snapshot,omitempty" xml:"Snapshot,omitempty" require:"true" type:"Repeated"`
}

func (s GetVideoListResponseVideoListVideoSnapshots) String() string {
	return tea.Prettify(s)
}

func (s GetVideoListResponseVideoListVideoSnapshots) GoString() string {
	return s.String()
}

func (s *GetVideoListResponseVideoListVideoSnapshots) SetSnapshot(v []*string) *GetVideoListResponseVideoListVideoSnapshots {
	s.Snapshot = v
	return s
}

type GetVideoInfoRequest struct {
	VideoId      *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	AdditionType *string `json:"AdditionType,omitempty" xml:"AdditionType,omitempty"`
}

func (s GetVideoInfoRequest) String() string {
	return tea.Prettify(s)
}

func (s GetVideoInfoRequest) GoString() string {
	return s.String()
}

func (s *GetVideoInfoRequest) SetVideoId(v string) *GetVideoInfoRequest {
	s.VideoId = &v
	return s
}

func (s *GetVideoInfoRequest) SetAdditionType(v string) *GetVideoInfoRequest {
	s.AdditionType = &v
	return s
}

type GetVideoInfoResponse struct {
	RequestId *string                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	AI        *string                    `json:"AI,omitempty" xml:"AI,omitempty" require:"true"`
	Video     *GetVideoInfoResponseVideo `json:"Video,omitempty" xml:"Video,omitempty" require:"true" type:"Struct"`
}

func (s GetVideoInfoResponse) String() string {
	return tea.Prettify(s)
}

func (s GetVideoInfoResponse) GoString() string {
	return s.String()
}

func (s *GetVideoInfoResponse) SetRequestId(v string) *GetVideoInfoResponse {
	s.RequestId = &v
	return s
}

func (s *GetVideoInfoResponse) SetAI(v string) *GetVideoInfoResponse {
	s.AI = &v
	return s
}

func (s *GetVideoInfoResponse) SetVideo(v *GetVideoInfoResponseVideo) *GetVideoInfoResponse {
	s.Video = v
	return s
}

type GetVideoInfoResponseVideo struct {
	VideoId          *string                                 `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	Title            *string                                 `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	Tags             *string                                 `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true"`
	Status           *string                                 `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Size             *int64                                  `json:"Size,omitempty" xml:"Size,omitempty" require:"true"`
	Duration         *float32                                `json:"Duration,omitempty" xml:"Duration,omitempty" require:"true"`
	Description      *string                                 `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreateTime       *string                                 `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	ModifyTime       *string                                 `json:"ModifyTime,omitempty" xml:"ModifyTime,omitempty" require:"true"`
	ModificationTime *string                                 `json:"ModificationTime,omitempty" xml:"ModificationTime,omitempty" require:"true"`
	CreationTime     *string                                 `json:"CreationTime,omitempty" xml:"CreationTime,omitempty" require:"true"`
	CoverURL         *string                                 `json:"CoverURL,omitempty" xml:"CoverURL,omitempty" require:"true"`
	CateId           *int64                                  `json:"CateId,omitempty" xml:"CateId,omitempty" require:"true"`
	CateName         *string                                 `json:"CateName,omitempty" xml:"CateName,omitempty" require:"true"`
	DownloadSwitch   *string                                 `json:"DownloadSwitch,omitempty" xml:"DownloadSwitch,omitempty" require:"true"`
	TemplateGroupId  *string                                 `json:"TemplateGroupId,omitempty" xml:"TemplateGroupId,omitempty" require:"true"`
	PreprocessStatus *string                                 `json:"PreprocessStatus,omitempty" xml:"PreprocessStatus,omitempty" require:"true"`
	StorageLocation  *string                                 `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty" require:"true"`
	RegionId         *string                                 `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	CustomMediaInfo  *string                                 `json:"CustomMediaInfo,omitempty" xml:"CustomMediaInfo,omitempty" require:"true"`
	AuditStatus      *string                                 `json:"AuditStatus,omitempty" xml:"AuditStatus,omitempty" require:"true"`
	AppId            *string                                 `json:"AppId,omitempty" xml:"AppId,omitempty" require:"true"`
	ThumbnailList    *GetVideoInfoResponseVideoThumbnailList `json:"ThumbnailList,omitempty" xml:"ThumbnailList,omitempty" require:"true" type:"Struct"`
	Snapshots        *GetVideoInfoResponseVideoSnapshots     `json:"Snapshots,omitempty" xml:"Snapshots,omitempty" require:"true" type:"Struct"`
}

func (s GetVideoInfoResponseVideo) String() string {
	return tea.Prettify(s)
}

func (s GetVideoInfoResponseVideo) GoString() string {
	return s.String()
}

func (s *GetVideoInfoResponseVideo) SetVideoId(v string) *GetVideoInfoResponseVideo {
	s.VideoId = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetTitle(v string) *GetVideoInfoResponseVideo {
	s.Title = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetTags(v string) *GetVideoInfoResponseVideo {
	s.Tags = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetStatus(v string) *GetVideoInfoResponseVideo {
	s.Status = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetSize(v int64) *GetVideoInfoResponseVideo {
	s.Size = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetDuration(v float32) *GetVideoInfoResponseVideo {
	s.Duration = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetDescription(v string) *GetVideoInfoResponseVideo {
	s.Description = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetCreateTime(v string) *GetVideoInfoResponseVideo {
	s.CreateTime = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetModifyTime(v string) *GetVideoInfoResponseVideo {
	s.ModifyTime = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetModificationTime(v string) *GetVideoInfoResponseVideo {
	s.ModificationTime = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetCreationTime(v string) *GetVideoInfoResponseVideo {
	s.CreationTime = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetCoverURL(v string) *GetVideoInfoResponseVideo {
	s.CoverURL = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetCateId(v int64) *GetVideoInfoResponseVideo {
	s.CateId = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetCateName(v string) *GetVideoInfoResponseVideo {
	s.CateName = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetDownloadSwitch(v string) *GetVideoInfoResponseVideo {
	s.DownloadSwitch = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetTemplateGroupId(v string) *GetVideoInfoResponseVideo {
	s.TemplateGroupId = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetPreprocessStatus(v string) *GetVideoInfoResponseVideo {
	s.PreprocessStatus = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetStorageLocation(v string) *GetVideoInfoResponseVideo {
	s.StorageLocation = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetRegionId(v string) *GetVideoInfoResponseVideo {
	s.RegionId = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetCustomMediaInfo(v string) *GetVideoInfoResponseVideo {
	s.CustomMediaInfo = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetAuditStatus(v string) *GetVideoInfoResponseVideo {
	s.AuditStatus = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetAppId(v string) *GetVideoInfoResponseVideo {
	s.AppId = &v
	return s
}

func (s *GetVideoInfoResponseVideo) SetThumbnailList(v *GetVideoInfoResponseVideoThumbnailList) *GetVideoInfoResponseVideo {
	s.ThumbnailList = v
	return s
}

func (s *GetVideoInfoResponseVideo) SetSnapshots(v *GetVideoInfoResponseVideoSnapshots) *GetVideoInfoResponseVideo {
	s.Snapshots = v
	return s
}

type GetVideoInfoResponseVideoThumbnailList struct {
	Thumbnail []*GetVideoInfoResponseVideoThumbnailListThumbnail `json:"Thumbnail,omitempty" xml:"Thumbnail,omitempty" require:"true" type:"Repeated"`
}

func (s GetVideoInfoResponseVideoThumbnailList) String() string {
	return tea.Prettify(s)
}

func (s GetVideoInfoResponseVideoThumbnailList) GoString() string {
	return s.String()
}

func (s *GetVideoInfoResponseVideoThumbnailList) SetThumbnail(v []*GetVideoInfoResponseVideoThumbnailListThumbnail) *GetVideoInfoResponseVideoThumbnailList {
	s.Thumbnail = v
	return s
}

type GetVideoInfoResponseVideoThumbnailListThumbnail struct {
	URL *string `json:"URL,omitempty" xml:"URL,omitempty" require:"true"`
}

func (s GetVideoInfoResponseVideoThumbnailListThumbnail) String() string {
	return tea.Prettify(s)
}

func (s GetVideoInfoResponseVideoThumbnailListThumbnail) GoString() string {
	return s.String()
}

func (s *GetVideoInfoResponseVideoThumbnailListThumbnail) SetURL(v string) *GetVideoInfoResponseVideoThumbnailListThumbnail {
	s.URL = &v
	return s
}

type GetVideoInfoResponseVideoSnapshots struct {
	Snapshot []*string `json:"Snapshot,omitempty" xml:"Snapshot,omitempty" require:"true" type:"Repeated"`
}

func (s GetVideoInfoResponseVideoSnapshots) String() string {
	return tea.Prettify(s)
}

func (s GetVideoInfoResponseVideoSnapshots) GoString() string {
	return s.String()
}

func (s *GetVideoInfoResponseVideoSnapshots) SetSnapshot(v []*string) *GetVideoInfoResponseVideoSnapshots {
	s.Snapshot = v
	return s
}

type DeleteVideoRequest struct {
	VideoIds *string `json:"VideoIds,omitempty" xml:"VideoIds,omitempty" require:"true"`
}

func (s DeleteVideoRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteVideoRequest) GoString() string {
	return s.String()
}

func (s *DeleteVideoRequest) SetVideoIds(v string) *DeleteVideoRequest {
	s.VideoIds = &v
	return s
}

type DeleteVideoResponse struct {
	RequestId         *string   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	NonExistVideoIds  []*string `json:"NonExistVideoIds,omitempty" xml:"NonExistVideoIds,omitempty" require:"true" type:"Repeated"`
	ForbiddenVideoIds []*string `json:"ForbiddenVideoIds,omitempty" xml:"ForbiddenVideoIds,omitempty" require:"true" type:"Repeated"`
}

func (s DeleteVideoResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteVideoResponse) GoString() string {
	return s.String()
}

func (s *DeleteVideoResponse) SetRequestId(v string) *DeleteVideoResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteVideoResponse) SetNonExistVideoIds(v []*string) *DeleteVideoResponse {
	s.NonExistVideoIds = v
	return s
}

func (s *DeleteVideoResponse) SetForbiddenVideoIds(v []*string) *DeleteVideoResponse {
	s.ForbiddenVideoIds = v
	return s
}

type RefreshUploadVideoRequest struct {
	VideoId *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
}

func (s RefreshUploadVideoRequest) String() string {
	return tea.Prettify(s)
}

func (s RefreshUploadVideoRequest) GoString() string {
	return s.String()
}

func (s *RefreshUploadVideoRequest) SetVideoId(v string) *RefreshUploadVideoRequest {
	s.VideoId = &v
	return s
}

type RefreshUploadVideoResponse struct {
	RequestId     *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	UploadAuth    *string `json:"UploadAuth,omitempty" xml:"UploadAuth,omitempty" require:"true"`
	UploadAddress *string `json:"UploadAddress,omitempty" xml:"UploadAddress,omitempty" require:"true"`
	VideoId       *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
}

func (s RefreshUploadVideoResponse) String() string {
	return tea.Prettify(s)
}

func (s RefreshUploadVideoResponse) GoString() string {
	return s.String()
}

func (s *RefreshUploadVideoResponse) SetRequestId(v string) *RefreshUploadVideoResponse {
	s.RequestId = &v
	return s
}

func (s *RefreshUploadVideoResponse) SetUploadAuth(v string) *RefreshUploadVideoResponse {
	s.UploadAuth = &v
	return s
}

func (s *RefreshUploadVideoResponse) SetUploadAddress(v string) *RefreshUploadVideoResponse {
	s.UploadAddress = &v
	return s
}

func (s *RefreshUploadVideoResponse) SetVideoId(v string) *RefreshUploadVideoResponse {
	s.VideoId = &v
	return s
}

type CreateUploadVideoRequest struct {
	CoverURL        *string `json:"CoverURL,omitempty" xml:"CoverURL,omitempty"`
	Description     *string `json:"Description,omitempty" xml:"Description,omitempty"`
	FileName        *string `json:"FileName,omitempty" xml:"FileName,omitempty" require:"true"`
	FileSize        *int64  `json:"FileSize,omitempty" xml:"FileSize,omitempty"`
	IP              *string `json:"IP,omitempty" xml:"IP,omitempty"`
	Title           *string `json:"Title,omitempty" xml:"Title,omitempty" require:"true"`
	CateId          *int64  `json:"CateId,omitempty" xml:"CateId,omitempty"`
	Tags            *string `json:"Tags,omitempty" xml:"Tags,omitempty"`
	TranscodeMode   *string `json:"TranscodeMode,omitempty" xml:"TranscodeMode,omitempty"`
	UserData        *string `json:"UserData,omitempty" xml:"UserData,omitempty"`
	TemplateGroupId *string `json:"TemplateGroupId,omitempty" xml:"TemplateGroupId,omitempty"`
	WorkflowId      *string `json:"WorkflowId,omitempty" xml:"WorkflowId,omitempty"`
	StorageLocation *string `json:"StorageLocation,omitempty" xml:"StorageLocation,omitempty"`
	CustomMediaInfo *string `json:"CustomMediaInfo,omitempty" xml:"CustomMediaInfo,omitempty"`
	AppId           *string `json:"AppId,omitempty" xml:"AppId,omitempty"`
}

func (s CreateUploadVideoRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateUploadVideoRequest) GoString() string {
	return s.String()
}

func (s *CreateUploadVideoRequest) SetCoverURL(v string) *CreateUploadVideoRequest {
	s.CoverURL = &v
	return s
}

func (s *CreateUploadVideoRequest) SetDescription(v string) *CreateUploadVideoRequest {
	s.Description = &v
	return s
}

func (s *CreateUploadVideoRequest) SetFileName(v string) *CreateUploadVideoRequest {
	s.FileName = &v
	return s
}

func (s *CreateUploadVideoRequest) SetFileSize(v int64) *CreateUploadVideoRequest {
	s.FileSize = &v
	return s
}

func (s *CreateUploadVideoRequest) SetIP(v string) *CreateUploadVideoRequest {
	s.IP = &v
	return s
}

func (s *CreateUploadVideoRequest) SetTitle(v string) *CreateUploadVideoRequest {
	s.Title = &v
	return s
}

func (s *CreateUploadVideoRequest) SetCateId(v int64) *CreateUploadVideoRequest {
	s.CateId = &v
	return s
}

func (s *CreateUploadVideoRequest) SetTags(v string) *CreateUploadVideoRequest {
	s.Tags = &v
	return s
}

func (s *CreateUploadVideoRequest) SetTranscodeMode(v string) *CreateUploadVideoRequest {
	s.TranscodeMode = &v
	return s
}

func (s *CreateUploadVideoRequest) SetUserData(v string) *CreateUploadVideoRequest {
	s.UserData = &v
	return s
}

func (s *CreateUploadVideoRequest) SetTemplateGroupId(v string) *CreateUploadVideoRequest {
	s.TemplateGroupId = &v
	return s
}

func (s *CreateUploadVideoRequest) SetWorkflowId(v string) *CreateUploadVideoRequest {
	s.WorkflowId = &v
	return s
}

func (s *CreateUploadVideoRequest) SetStorageLocation(v string) *CreateUploadVideoRequest {
	s.StorageLocation = &v
	return s
}

func (s *CreateUploadVideoRequest) SetCustomMediaInfo(v string) *CreateUploadVideoRequest {
	s.CustomMediaInfo = &v
	return s
}

func (s *CreateUploadVideoRequest) SetAppId(v string) *CreateUploadVideoRequest {
	s.AppId = &v
	return s
}

type CreateUploadVideoResponse struct {
	RequestId     *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	VideoId       *string `json:"VideoId,omitempty" xml:"VideoId,omitempty" require:"true"`
	UploadAddress *string `json:"UploadAddress,omitempty" xml:"UploadAddress,omitempty" require:"true"`
	UploadAuth    *string `json:"UploadAuth,omitempty" xml:"UploadAuth,omitempty" require:"true"`
}

func (s CreateUploadVideoResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateUploadVideoResponse) GoString() string {
	return s.String()
}

func (s *CreateUploadVideoResponse) SetRequestId(v string) *CreateUploadVideoResponse {
	s.RequestId = &v
	return s
}

func (s *CreateUploadVideoResponse) SetVideoId(v string) *CreateUploadVideoResponse {
	s.VideoId = &v
	return s
}

func (s *CreateUploadVideoResponse) SetUploadAddress(v string) *CreateUploadVideoResponse {
	s.UploadAddress = &v
	return s
}

func (s *CreateUploadVideoResponse) SetUploadAuth(v string) *CreateUploadVideoResponse {
	s.UploadAuth = &v
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
		"cn-beijing":                  tea.String("vod.cn-shanghai.aliyuncs.com"),
		"cn-hangzhou":                 tea.String("vod.cn-shanghai.aliyuncs.com"),
		"ap-northeast-2-pop":          tea.String("vod.aliyuncs.com"),
		"ap-southeast-2":              tea.String("vod.aliyuncs.com"),
		"ap-southeast-3":              tea.String("vod.aliyuncs.com"),
		"cn-beijing-finance-1":        tea.String("vod.aliyuncs.com"),
		"cn-beijing-finance-pop":      tea.String("vod.aliyuncs.com"),
		"cn-beijing-gov-1":            tea.String("vod.aliyuncs.com"),
		"cn-beijing-nu16-b01":         tea.String("vod.aliyuncs.com"),
		"cn-chengdu":                  tea.String("vod.aliyuncs.com"),
		"cn-edge-1":                   tea.String("vod.aliyuncs.com"),
		"cn-fujian":                   tea.String("vod.aliyuncs.com"),
		"cn-haidian-cm12-c01":         tea.String("vod.aliyuncs.com"),
		"cn-hangzhou-bj-b01":          tea.String("vod.aliyuncs.com"),
		"cn-hangzhou-finance":         tea.String("vod.aliyuncs.com"),
		"cn-hangzhou-internal-prod-1": tea.String("vod.aliyuncs.com"),
		"cn-hangzhou-internal-test-1": tea.String("vod.aliyuncs.com"),
		"cn-hangzhou-internal-test-2": tea.String("vod.aliyuncs.com"),
		"cn-hangzhou-internal-test-3": tea.String("vod.aliyuncs.com"),
		"cn-hangzhou-test-306":        tea.String("vod.aliyuncs.com"),
		"cn-hongkong-finance-pop":     tea.String("vod.aliyuncs.com"),
		"cn-huhehaote":                tea.String("vod.aliyuncs.com"),
		"cn-huhehaote-nebula-1":       tea.String("vod.aliyuncs.com"),
		"cn-qingdao":                  tea.String("vod.aliyuncs.com"),
		"cn-qingdao-nebula":           tea.String("vod.aliyuncs.com"),
		"cn-shanghai-et15-b01":        tea.String("vod.aliyuncs.com"),
		"cn-shanghai-et2-b01":         tea.String("vod.aliyuncs.com"),
		"cn-shanghai-finance-1":       tea.String("vod.aliyuncs.com"),
		"cn-shanghai-inner":           tea.String("vod.aliyuncs.com"),
		"cn-shanghai-internal-test-1": tea.String("vod.aliyuncs.com"),
		"cn-shenzhen-finance-1":       tea.String("vod.aliyuncs.com"),
		"cn-shenzhen-inner":           tea.String("vod.aliyuncs.com"),
		"cn-shenzhen-st4-d01":         tea.String("vod.aliyuncs.com"),
		"cn-shenzhen-su18-b01":        tea.String("vod.aliyuncs.com"),
		"cn-wuhan":                    tea.String("vod.aliyuncs.com"),
		"cn-wulanchabu":               tea.String("vod.aliyuncs.com"),
		"cn-yushanfang":               tea.String("vod.aliyuncs.com"),
		"cn-zhangbei-na61-b01":        tea.String("vod.aliyuncs.com"),
		"cn-zhangjiakou-na62-a01":     tea.String("vod.aliyuncs.com"),
		"cn-zhengzhou-nebula-1":       tea.String("vod.aliyuncs.com"),
		"eu-west-1-oxs":               tea.String("vod.aliyuncs.com"),
		"me-east-1":                   tea.String("vod.aliyuncs.com"),
		"rus-west-1-pop":              tea.String("vod.aliyuncs.com"),
		"us-east-1":                   tea.String("vod.aliyuncs.com"),
	}
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("vod"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) ListDynamicImageWithOptions(request *ListDynamicImageRequest, runtime *util.RuntimeOptions) (_result *ListDynamicImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListDynamicImageResponse{}
	_body, _err := client.DoRequest(tea.String("ListDynamicImage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListDynamicImage(request *ListDynamicImageRequest) (_result *ListDynamicImageResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListDynamicImageResponse{}
	_body, _err := client.ListDynamicImageWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteDynamicImageWithOptions(request *DeleteDynamicImageRequest, runtime *util.RuntimeOptions) (_result *DeleteDynamicImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteDynamicImageResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteDynamicImage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteDynamicImage(request *DeleteDynamicImageRequest) (_result *DeleteDynamicImageResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteDynamicImageResponse{}
	_body, _err := client.DeleteDynamicImageWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodUserTagsWithOptions(request *DescribeVodUserTagsRequest, runtime *util.RuntimeOptions) (_result *DescribeVodUserTagsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodUserTagsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodUserTags"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodUserTags(request *DescribeVodUserTagsRequest) (_result *DescribeVodUserTagsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodUserTagsResponse{}
	_body, _err := client.DescribeVodUserTagsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodTagResourcesWithOptions(request *DescribeVodTagResourcesRequest, runtime *util.RuntimeOptions) (_result *DescribeVodTagResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodTagResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodTagResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodTagResources(request *DescribeVodTagResourcesRequest) (_result *DescribeVodTagResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodTagResourcesResponse{}
	_body, _err := client.DescribeVodTagResourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateMediaDNALibWithOptions(request *CreateMediaDNALibRequest, runtime *util.RuntimeOptions) (_result *CreateMediaDNALibResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateMediaDNALibResponse{}
	_body, _err := client.DoRequest(tea.String("CreateMediaDNALib"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateMediaDNALib(request *CreateMediaDNALibRequest) (_result *CreateMediaDNALibResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateMediaDNALibResponse{}
	_body, _err := client.CreateMediaDNALibWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListMediaDNALibsWithOptions(request *ListMediaDNALibsRequest, runtime *util.RuntimeOptions) (_result *ListMediaDNALibsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListMediaDNALibsResponse{}
	_body, _err := client.DoRequest(tea.String("ListMediaDNALibs"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListMediaDNALibs(request *ListMediaDNALibsRequest) (_result *ListMediaDNALibsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListMediaDNALibsResponse{}
	_body, _err := client.ListMediaDNALibsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UnTagVodResourcesWithOptions(request *UnTagVodResourcesRequest, runtime *util.RuntimeOptions) (_result *UnTagVodResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UnTagVodResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("UnTagVodResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UnTagVodResources(request *UnTagVodResourcesRequest) (_result *UnTagVodResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UnTagVodResourcesResponse{}
	_body, _err := client.UnTagVodResourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) TagVodResourcesWithOptions(request *TagVodResourcesRequest, runtime *util.RuntimeOptions) (_result *TagVodResourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &TagVodResourcesResponse{}
	_body, _err := client.DoRequest(tea.String("TagVodResources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TagVodResources(request *TagVodResourcesRequest) (_result *TagVodResourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &TagVodResourcesResponse{}
	_body, _err := client.TagVodResourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SubmitMediaDNADeleteJobWithOptions(request *SubmitMediaDNADeleteJobRequest, runtime *util.RuntimeOptions) (_result *SubmitMediaDNADeleteJobResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SubmitMediaDNADeleteJobResponse{}
	_body, _err := client.DoRequest(tea.String("SubmitMediaDNADeleteJob"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SubmitMediaDNADeleteJob(request *SubmitMediaDNADeleteJobRequest) (_result *SubmitMediaDNADeleteJobResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SubmitMediaDNADeleteJobResponse{}
	_body, _err := client.SubmitMediaDNADeleteJobWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListMediaDNADeleteJobWithOptions(request *ListMediaDNADeleteJobRequest, runtime *util.RuntimeOptions) (_result *ListMediaDNADeleteJobResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListMediaDNADeleteJobResponse{}
	_body, _err := client.DoRequest(tea.String("ListMediaDNADeleteJob"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListMediaDNADeleteJob(request *ListMediaDNADeleteJobRequest) (_result *ListMediaDNADeleteJobResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListMediaDNADeleteJobResponse{}
	_body, _err := client.ListMediaDNADeleteJobWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMediaAuditAudioResultDetailWithOptions(request *GetMediaAuditAudioResultDetailRequest, runtime *util.RuntimeOptions) (_result *GetMediaAuditAudioResultDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMediaAuditAudioResultDetailResponse{}
	_body, _err := client.DoRequest(tea.String("GetMediaAuditAudioResultDetail"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMediaAuditAudioResultDetail(request *GetMediaAuditAudioResultDetailRequest) (_result *GetMediaAuditAudioResultDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMediaAuditAudioResultDetailResponse{}
	_body, _err := client.GetMediaAuditAudioResultDetailWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SubmitDynamicImageJobWithOptions(request *SubmitDynamicImageJobRequest, runtime *util.RuntimeOptions) (_result *SubmitDynamicImageJobResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SubmitDynamicImageJobResponse{}
	_body, _err := client.DoRequest(tea.String("SubmitDynamicImageJob"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SubmitDynamicImageJob(request *SubmitDynamicImageJobRequest) (_result *SubmitDynamicImageJobResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SubmitDynamicImageJobResponse{}
	_body, _err := client.SubmitDynamicImageJobWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SubmitWorkflowJobWithOptions(request *SubmitWorkflowJobRequest, runtime *util.RuntimeOptions) (_result *SubmitWorkflowJobResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SubmitWorkflowJobResponse{}
	_body, _err := client.DoRequest(tea.String("SubmitWorkflowJob"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SubmitWorkflowJob(request *SubmitWorkflowJobRequest) (_result *SubmitWorkflowJobResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SubmitWorkflowJobResponse{}
	_body, _err := client.SubmitWorkflowJobWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetAIVideoTagResultWithOptions(request *GetAIVideoTagResultRequest, runtime *util.RuntimeOptions) (_result *GetAIVideoTagResultResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetAIVideoTagResultResponse{}
	_body, _err := client.DoRequest(tea.String("GetAIVideoTagResult"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetAIVideoTagResult(request *GetAIVideoTagResultRequest) (_result *GetAIVideoTagResultResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetAIVideoTagResultResponse{}
	_body, _err := client.GetAIVideoTagResultWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetUploadDetailsWithOptions(request *GetUploadDetailsRequest, runtime *util.RuntimeOptions) (_result *GetUploadDetailsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetUploadDetailsResponse{}
	_body, _err := client.DoRequest(tea.String("GetUploadDetails"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetUploadDetails(request *GetUploadDetailsRequest) (_result *GetUploadDetailsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetUploadDetailsResponse{}
	_body, _err := client.GetUploadDetailsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodStorageDataWithOptions(request *DescribeVodStorageDataRequest, runtime *util.RuntimeOptions) (_result *DescribeVodStorageDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodStorageDataResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodStorageData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodStorageData(request *DescribeVodStorageDataRequest) (_result *DescribeVodStorageDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodStorageDataResponse{}
	_body, _err := client.DescribeVodStorageDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodAIDataWithOptions(request *DescribeVodAIDataRequest, runtime *util.RuntimeOptions) (_result *DescribeVodAIDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodAIDataResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodAIData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodAIData(request *DescribeVodAIDataRequest) (_result *DescribeVodAIDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodAIDataResponse{}
	_body, _err := client.DescribeVodAIDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodTranscodeDataWithOptions(request *DescribeVodTranscodeDataRequest, runtime *util.RuntimeOptions) (_result *DescribeVodTranscodeDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodTranscodeDataResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodTranscodeData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodTranscodeData(request *DescribeVodTranscodeDataRequest) (_result *DescribeVodTranscodeDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodTranscodeDataResponse{}
	_body, _err := client.DescribeVodTranscodeDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteMultipartUploadWithOptions(request *DeleteMultipartUploadRequest, runtime *util.RuntimeOptions) (_result *DeleteMultipartUploadResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteMultipartUploadResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteMultipartUpload"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteMultipartUpload(request *DeleteMultipartUploadRequest) (_result *DeleteMultipartUploadResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteMultipartUploadResponse{}
	_body, _err := client.DeleteMultipartUploadWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetAttachedMediaInfoWithOptions(request *GetAttachedMediaInfoRequest, runtime *util.RuntimeOptions) (_result *GetAttachedMediaInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetAttachedMediaInfoResponse{}
	_body, _err := client.DoRequest(tea.String("GetAttachedMediaInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetAttachedMediaInfo(request *GetAttachedMediaInfoRequest) (_result *GetAttachedMediaInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetAttachedMediaInfoResponse{}
	_body, _err := client.GetAttachedMediaInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAttachedMediaWithOptions(request *DeleteAttachedMediaRequest, runtime *util.RuntimeOptions) (_result *DeleteAttachedMediaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAttachedMediaResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteAttachedMedia"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteAttachedMedia(request *DeleteAttachedMediaRequest) (_result *DeleteAttachedMediaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAttachedMediaResponse{}
	_body, _err := client.DeleteAttachedMediaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateAttachedMediaInfosWithOptions(request *UpdateAttachedMediaInfosRequest, runtime *util.RuntimeOptions) (_result *UpdateAttachedMediaInfosResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateAttachedMediaInfosResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateAttachedMediaInfos"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateAttachedMediaInfos(request *UpdateAttachedMediaInfosRequest) (_result *UpdateAttachedMediaInfosResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateAttachedMediaInfosResponse{}
	_body, _err := client.UpdateAttachedMediaInfosWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AttachAppPolicyToIdentityWithOptions(request *AttachAppPolicyToIdentityRequest, runtime *util.RuntimeOptions) (_result *AttachAppPolicyToIdentityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AttachAppPolicyToIdentityResponse{}
	_body, _err := client.DoRequest(tea.String("AttachAppPolicyToIdentity"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AttachAppPolicyToIdentity(request *AttachAppPolicyToIdentityRequest) (_result *AttachAppPolicyToIdentityResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AttachAppPolicyToIdentityResponse{}
	_body, _err := client.AttachAppPolicyToIdentityWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DetachAppPolicyFromIdentityWithOptions(request *DetachAppPolicyFromIdentityRequest, runtime *util.RuntimeOptions) (_result *DetachAppPolicyFromIdentityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetachAppPolicyFromIdentityResponse{}
	_body, _err := client.DoRequest(tea.String("DetachAppPolicyFromIdentity"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetachAppPolicyFromIdentity(request *DetachAppPolicyFromIdentityRequest) (_result *DetachAppPolicyFromIdentityResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DetachAppPolicyFromIdentityResponse{}
	_body, _err := client.DetachAppPolicyFromIdentityWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListAppPoliciesForIdentityWithOptions(request *ListAppPoliciesForIdentityRequest, runtime *util.RuntimeOptions) (_result *ListAppPoliciesForIdentityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListAppPoliciesForIdentityResponse{}
	_body, _err := client.DoRequest(tea.String("ListAppPoliciesForIdentity"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListAppPoliciesForIdentity(request *ListAppPoliciesForIdentityRequest) (_result *ListAppPoliciesForIdentityResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListAppPoliciesForIdentityResponse{}
	_body, _err := client.ListAppPoliciesForIdentityWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateAppInfoWithOptions(request *CreateAppInfoRequest, runtime *util.RuntimeOptions) (_result *CreateAppInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateAppInfoResponse{}
	_body, _err := client.DoRequest(tea.String("CreateAppInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateAppInfo(request *CreateAppInfoRequest) (_result *CreateAppInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateAppInfoResponse{}
	_body, _err := client.CreateAppInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetAppInfosWithOptions(request *GetAppInfosRequest, runtime *util.RuntimeOptions) (_result *GetAppInfosResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetAppInfosResponse{}
	_body, _err := client.DoRequest(tea.String("GetAppInfos"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetAppInfos(request *GetAppInfosRequest) (_result *GetAppInfosResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetAppInfosResponse{}
	_body, _err := client.GetAppInfosWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateAppInfoWithOptions(request *UpdateAppInfoRequest, runtime *util.RuntimeOptions) (_result *UpdateAppInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateAppInfoResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateAppInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateAppInfo(request *UpdateAppInfoRequest) (_result *UpdateAppInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateAppInfoResponse{}
	_body, _err := client.UpdateAppInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAppInfoWithOptions(request *DeleteAppInfoRequest, runtime *util.RuntimeOptions) (_result *DeleteAppInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAppInfoResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteAppInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteAppInfo(request *DeleteAppInfoRequest) (_result *DeleteAppInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAppInfoResponse{}
	_body, _err := client.DeleteAppInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListAppInfoWithOptions(request *ListAppInfoRequest, runtime *util.RuntimeOptions) (_result *ListAppInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListAppInfoResponse{}
	_body, _err := client.DoRequest(tea.String("ListAppInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListAppInfo(request *ListAppInfoRequest) (_result *ListAppInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListAppInfoResponse{}
	_body, _err := client.ListAppInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) MoveAppResourceWithOptions(request *MoveAppResourceRequest, runtime *util.RuntimeOptions) (_result *MoveAppResourceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &MoveAppResourceResponse{}
	_body, _err := client.DoRequest(tea.String("MoveAppResource"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) MoveAppResource(request *MoveAppResourceRequest) (_result *MoveAppResourceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &MoveAppResourceResponse{}
	_body, _err := client.MoveAppResourceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteMessageCallbackWithOptions(request *DeleteMessageCallbackRequest, runtime *util.RuntimeOptions) (_result *DeleteMessageCallbackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteMessageCallbackResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteMessageCallback"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteMessageCallback(request *DeleteMessageCallbackRequest) (_result *DeleteMessageCallbackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteMessageCallbackResponse{}
	_body, _err := client.DeleteMessageCallbackWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetTranscodeSummaryWithOptions(request *GetTranscodeSummaryRequest, runtime *util.RuntimeOptions) (_result *GetTranscodeSummaryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetTranscodeSummaryResponse{}
	_body, _err := client.DoRequest(tea.String("GetTranscodeSummary"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetTranscodeSummary(request *GetTranscodeSummaryRequest) (_result *GetTranscodeSummaryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetTranscodeSummaryResponse{}
	_body, _err := client.GetTranscodeSummaryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListTranscodeTaskWithOptions(request *ListTranscodeTaskRequest, runtime *util.RuntimeOptions) (_result *ListTranscodeTaskResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListTranscodeTaskResponse{}
	_body, _err := client.DoRequest(tea.String("ListTranscodeTask"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListTranscodeTask(request *ListTranscodeTaskRequest) (_result *ListTranscodeTaskResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListTranscodeTaskResponse{}
	_body, _err := client.ListTranscodeTaskWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetTranscodeTaskWithOptions(request *GetTranscodeTaskRequest, runtime *util.RuntimeOptions) (_result *GetTranscodeTaskResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetTranscodeTaskResponse{}
	_body, _err := client.DoRequest(tea.String("GetTranscodeTask"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetTranscodeTask(request *GetTranscodeTaskRequest) (_result *GetTranscodeTaskResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetTranscodeTaskResponse{}
	_body, _err := client.GetTranscodeTaskWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetURLUploadInfosWithOptions(request *GetURLUploadInfosRequest, runtime *util.RuntimeOptions) (_result *GetURLUploadInfosResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetURLUploadInfosResponse{}
	_body, _err := client.DoRequest(tea.String("GetURLUploadInfos"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetURLUploadInfos(request *GetURLUploadInfosRequest) (_result *GetURLUploadInfosResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetURLUploadInfosResponse{}
	_body, _err := client.GetURLUploadInfosWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateTranscodeTemplateGroupWithOptions(request *UpdateTranscodeTemplateGroupRequest, runtime *util.RuntimeOptions) (_result *UpdateTranscodeTemplateGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateTranscodeTemplateGroupResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateTranscodeTemplateGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateTranscodeTemplateGroup(request *UpdateTranscodeTemplateGroupRequest) (_result *UpdateTranscodeTemplateGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateTranscodeTemplateGroupResponse{}
	_body, _err := client.UpdateTranscodeTemplateGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddTranscodeTemplateGroupWithOptions(request *AddTranscodeTemplateGroupRequest, runtime *util.RuntimeOptions) (_result *AddTranscodeTemplateGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddTranscodeTemplateGroupResponse{}
	_body, _err := client.DoRequest(tea.String("AddTranscodeTemplateGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddTranscodeTemplateGroup(request *AddTranscodeTemplateGroupRequest) (_result *AddTranscodeTemplateGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddTranscodeTemplateGroupResponse{}
	_body, _err := client.AddTranscodeTemplateGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteTranscodeTemplateGroupWithOptions(request *DeleteTranscodeTemplateGroupRequest, runtime *util.RuntimeOptions) (_result *DeleteTranscodeTemplateGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteTranscodeTemplateGroupResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteTranscodeTemplateGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteTranscodeTemplateGroup(request *DeleteTranscodeTemplateGroupRequest) (_result *DeleteTranscodeTemplateGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteTranscodeTemplateGroupResponse{}
	_body, _err := client.DeleteTranscodeTemplateGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetTranscodeTemplateGroupWithOptions(request *GetTranscodeTemplateGroupRequest, runtime *util.RuntimeOptions) (_result *GetTranscodeTemplateGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetTranscodeTemplateGroupResponse{}
	_body, _err := client.DoRequest(tea.String("GetTranscodeTemplateGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetTranscodeTemplateGroup(request *GetTranscodeTemplateGroupRequest) (_result *GetTranscodeTemplateGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetTranscodeTemplateGroupResponse{}
	_body, _err := client.GetTranscodeTemplateGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetDefaultTranscodeTemplateGroupWithOptions(request *SetDefaultTranscodeTemplateGroupRequest, runtime *util.RuntimeOptions) (_result *SetDefaultTranscodeTemplateGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetDefaultTranscodeTemplateGroupResponse{}
	_body, _err := client.DoRequest(tea.String("SetDefaultTranscodeTemplateGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetDefaultTranscodeTemplateGroup(request *SetDefaultTranscodeTemplateGroupRequest) (_result *SetDefaultTranscodeTemplateGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetDefaultTranscodeTemplateGroupResponse{}
	_body, _err := client.SetDefaultTranscodeTemplateGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListTranscodeTemplateGroupWithOptions(request *ListTranscodeTemplateGroupRequest, runtime *util.RuntimeOptions) (_result *ListTranscodeTemplateGroupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListTranscodeTemplateGroupResponse{}
	_body, _err := client.DoRequest(tea.String("ListTranscodeTemplateGroup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListTranscodeTemplateGroup(request *ListTranscodeTemplateGroupRequest) (_result *ListTranscodeTemplateGroupResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListTranscodeTemplateGroupResponse{}
	_body, _err := client.ListTranscodeTemplateGroupWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetAIMediaAuditJobWithOptions(request *GetAIMediaAuditJobRequest, runtime *util.RuntimeOptions) (_result *GetAIMediaAuditJobResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetAIMediaAuditJobResponse{}
	_body, _err := client.DoRequest(tea.String("GetAIMediaAuditJob"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetAIMediaAuditJob(request *GetAIMediaAuditJobRequest) (_result *GetAIMediaAuditJobResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetAIMediaAuditJobResponse{}
	_body, _err := client.GetAIMediaAuditJobWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SubmitAIMediaAuditJobWithOptions(request *SubmitAIMediaAuditJobRequest, runtime *util.RuntimeOptions) (_result *SubmitAIMediaAuditJobResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SubmitAIMediaAuditJobResponse{}
	_body, _err := client.DoRequest(tea.String("SubmitAIMediaAuditJob"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SubmitAIMediaAuditJob(request *SubmitAIMediaAuditJobRequest) (_result *SubmitAIMediaAuditJobResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SubmitAIMediaAuditJobResponse{}
	_body, _err := client.SubmitAIMediaAuditJobWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMediaAuditResultWithOptions(request *GetMediaAuditResultRequest, runtime *util.RuntimeOptions) (_result *GetMediaAuditResultResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMediaAuditResultResponse{}
	_body, _err := client.DoRequest(tea.String("GetMediaAuditResult"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMediaAuditResult(request *GetMediaAuditResultRequest) (_result *GetMediaAuditResultResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMediaAuditResultResponse{}
	_body, _err := client.GetMediaAuditResultWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMediaAuditResultDetailWithOptions(request *GetMediaAuditResultDetailRequest, runtime *util.RuntimeOptions) (_result *GetMediaAuditResultDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMediaAuditResultDetailResponse{}
	_body, _err := client.DoRequest(tea.String("GetMediaAuditResultDetail"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMediaAuditResultDetail(request *GetMediaAuditResultDetailRequest) (_result *GetMediaAuditResultDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMediaAuditResultDetailResponse{}
	_body, _err := client.GetMediaAuditResultDetailWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMediaAuditResultTimelineWithOptions(request *GetMediaAuditResultTimelineRequest, runtime *util.RuntimeOptions) (_result *GetMediaAuditResultTimelineResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMediaAuditResultTimelineResponse{}
	_body, _err := client.DoRequest(tea.String("GetMediaAuditResultTimeline"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMediaAuditResultTimeline(request *GetMediaAuditResultTimelineRequest) (_result *GetMediaAuditResultTimelineResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMediaAuditResultTimelineResponse{}
	_body, _err := client.GetMediaAuditResultTimelineWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddAITemplateWithOptions(request *AddAITemplateRequest, runtime *util.RuntimeOptions) (_result *AddAITemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddAITemplateResponse{}
	_body, _err := client.DoRequest(tea.String("AddAITemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddAITemplate(request *AddAITemplateRequest) (_result *AddAITemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddAITemplateResponse{}
	_body, _err := client.AddAITemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAITemplateWithOptions(request *DeleteAITemplateRequest, runtime *util.RuntimeOptions) (_result *DeleteAITemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAITemplateResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteAITemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteAITemplate(request *DeleteAITemplateRequest) (_result *DeleteAITemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAITemplateResponse{}
	_body, _err := client.DeleteAITemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateAITemplateWithOptions(request *UpdateAITemplateRequest, runtime *util.RuntimeOptions) (_result *UpdateAITemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateAITemplateResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateAITemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateAITemplate(request *UpdateAITemplateRequest) (_result *UpdateAITemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateAITemplateResponse{}
	_body, _err := client.UpdateAITemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetAITemplateWithOptions(request *GetAITemplateRequest, runtime *util.RuntimeOptions) (_result *GetAITemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetAITemplateResponse{}
	_body, _err := client.DoRequest(tea.String("GetAITemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetAITemplate(request *GetAITemplateRequest) (_result *GetAITemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetAITemplateResponse{}
	_body, _err := client.GetAITemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListAITemplateWithOptions(request *ListAITemplateRequest, runtime *util.RuntimeOptions) (_result *ListAITemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListAITemplateResponse{}
	_body, _err := client.DoRequest(tea.String("ListAITemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListAITemplate(request *ListAITemplateRequest) (_result *ListAITemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListAITemplateResponse{}
	_body, _err := client.ListAITemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetDefaultAITemplateWithOptions(request *GetDefaultAITemplateRequest, runtime *util.RuntimeOptions) (_result *GetDefaultAITemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetDefaultAITemplateResponse{}
	_body, _err := client.DoRequest(tea.String("GetDefaultAITemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetDefaultAITemplate(request *GetDefaultAITemplateRequest) (_result *GetDefaultAITemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetDefaultAITemplateResponse{}
	_body, _err := client.GetDefaultAITemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetDefaultAITemplateWithOptions(request *SetDefaultAITemplateRequest, runtime *util.RuntimeOptions) (_result *SetDefaultAITemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetDefaultAITemplateResponse{}
	_body, _err := client.DoRequest(tea.String("SetDefaultAITemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetDefaultAITemplate(request *SetDefaultAITemplateRequest) (_result *SetDefaultAITemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetDefaultAITemplateResponse{}
	_body, _err := client.SetDefaultAITemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodDomainLogWithOptions(request *DescribeVodDomainLogRequest, runtime *util.RuntimeOptions) (_result *DescribeVodDomainLogResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodDomainLogResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodDomainLog"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodDomainLog(request *DescribeVodDomainLogRequest) (_result *DescribeVodDomainLogResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodDomainLogResponse{}
	_body, _err := client.DescribeVodDomainLogWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodDomainCertificateInfoWithOptions(request *DescribeVodDomainCertificateInfoRequest, runtime *util.RuntimeOptions) (_result *DescribeVodDomainCertificateInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodDomainCertificateInfoResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodDomainCertificateInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodDomainCertificateInfo(request *DescribeVodDomainCertificateInfoRequest) (_result *DescribeVodDomainCertificateInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodDomainCertificateInfoResponse{}
	_body, _err := client.DescribeVodDomainCertificateInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodDomainTrafficDataWithOptions(request *DescribeVodDomainTrafficDataRequest, runtime *util.RuntimeOptions) (_result *DescribeVodDomainTrafficDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodDomainTrafficDataResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodDomainTrafficData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodDomainTrafficData(request *DescribeVodDomainTrafficDataRequest) (_result *DescribeVodDomainTrafficDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodDomainTrafficDataResponse{}
	_body, _err := client.DescribeVodDomainTrafficDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodDomainBpsDataWithOptions(request *DescribeVodDomainBpsDataRequest, runtime *util.RuntimeOptions) (_result *DescribeVodDomainBpsDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodDomainBpsDataResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodDomainBpsData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodDomainBpsData(request *DescribeVodDomainBpsDataRequest) (_result *DescribeVodDomainBpsDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodDomainBpsDataResponse{}
	_body, _err := client.DescribeVodDomainBpsDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodDomainUsageDataWithOptions(request *DescribeVodDomainUsageDataRequest, runtime *util.RuntimeOptions) (_result *DescribeVodDomainUsageDataResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodDomainUsageDataResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodDomainUsageData"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodDomainUsageData(request *DescribeVodDomainUsageDataRequest) (_result *DescribeVodDomainUsageDataResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodDomainUsageDataResponse{}
	_body, _err := client.DescribeVodDomainUsageDataWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodCertificateListWithOptions(request *DescribeVodCertificateListRequest, runtime *util.RuntimeOptions) (_result *DescribeVodCertificateListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodCertificateListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodCertificateList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodCertificateList(request *DescribeVodCertificateListRequest) (_result *DescribeVodCertificateListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodCertificateListResponse{}
	_body, _err := client.DescribeVodCertificateListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) BatchStopVodDomainWithOptions(request *BatchStopVodDomainRequest, runtime *util.RuntimeOptions) (_result *BatchStopVodDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &BatchStopVodDomainResponse{}
	_body, _err := client.DoRequest(tea.String("BatchStopVodDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) BatchStopVodDomain(request *BatchStopVodDomainRequest) (_result *BatchStopVodDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &BatchStopVodDomainResponse{}
	_body, _err := client.BatchStopVodDomainWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteVodDomainWithOptions(request *DeleteVodDomainRequest, runtime *util.RuntimeOptions) (_result *DeleteVodDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteVodDomainResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteVodDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteVodDomain(request *DeleteVodDomainRequest) (_result *DeleteVodDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteVodDomainResponse{}
	_body, _err := client.DeleteVodDomainWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetVodDomainCertificateWithOptions(request *SetVodDomainCertificateRequest, runtime *util.RuntimeOptions) (_result *SetVodDomainCertificateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetVodDomainCertificateResponse{}
	_body, _err := client.DoRequest(tea.String("SetVodDomainCertificate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetVodDomainCertificate(request *SetVodDomainCertificateRequest) (_result *SetVodDomainCertificateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetVodDomainCertificateResponse{}
	_body, _err := client.SetVodDomainCertificateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteVodSpecificConfigWithOptions(request *DeleteVodSpecificConfigRequest, runtime *util.RuntimeOptions) (_result *DeleteVodSpecificConfigResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteVodSpecificConfigResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteVodSpecificConfig"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteVodSpecificConfig(request *DeleteVodSpecificConfigRequest) (_result *DeleteVodSpecificConfigResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteVodSpecificConfigResponse{}
	_body, _err := client.DeleteVodSpecificConfigWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) BatchSetVodDomainConfigsWithOptions(request *BatchSetVodDomainConfigsRequest, runtime *util.RuntimeOptions) (_result *BatchSetVodDomainConfigsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &BatchSetVodDomainConfigsResponse{}
	_body, _err := client.DoRequest(tea.String("BatchSetVodDomainConfigs"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) BatchSetVodDomainConfigs(request *BatchSetVodDomainConfigsRequest) (_result *BatchSetVodDomainConfigsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &BatchSetVodDomainConfigsResponse{}
	_body, _err := client.BatchSetVodDomainConfigsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddVodDomainWithOptions(request *AddVodDomainRequest, runtime *util.RuntimeOptions) (_result *AddVodDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddVodDomainResponse{}
	_body, _err := client.DoRequest(tea.String("AddVodDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddVodDomain(request *AddVodDomainRequest) (_result *AddVodDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddVodDomainResponse{}
	_body, _err := client.AddVodDomainWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodRefreshQuotaWithOptions(request *DescribeVodRefreshQuotaRequest, runtime *util.RuntimeOptions) (_result *DescribeVodRefreshQuotaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodRefreshQuotaResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodRefreshQuota"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodRefreshQuota(request *DescribeVodRefreshQuotaRequest) (_result *DescribeVodRefreshQuotaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodRefreshQuotaResponse{}
	_body, _err := client.DescribeVodRefreshQuotaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodRefreshTasksWithOptions(request *DescribeVodRefreshTasksRequest, runtime *util.RuntimeOptions) (_result *DescribeVodRefreshTasksResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodRefreshTasksResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodRefreshTasks"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodRefreshTasks(request *DescribeVodRefreshTasksRequest) (_result *DescribeVodRefreshTasksResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodRefreshTasksResponse{}
	_body, _err := client.DescribeVodRefreshTasksWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodDomainConfigsWithOptions(request *DescribeVodDomainConfigsRequest, runtime *util.RuntimeOptions) (_result *DescribeVodDomainConfigsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodDomainConfigsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodDomainConfigs"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodDomainConfigs(request *DescribeVodDomainConfigsRequest) (_result *DescribeVodDomainConfigsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodDomainConfigsResponse{}
	_body, _err := client.DescribeVodDomainConfigsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodUserDomainsWithOptions(request *DescribeVodUserDomainsRequest, runtime *util.RuntimeOptions) (_result *DescribeVodUserDomainsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodUserDomainsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodUserDomains"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodUserDomains(request *DescribeVodUserDomainsRequest) (_result *DescribeVodUserDomainsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodUserDomainsResponse{}
	_body, _err := client.DescribeVodUserDomainsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateVodDomainWithOptions(request *UpdateVodDomainRequest, runtime *util.RuntimeOptions) (_result *UpdateVodDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateVodDomainResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateVodDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateVodDomain(request *UpdateVodDomainRequest) (_result *UpdateVodDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateVodDomainResponse{}
	_body, _err := client.UpdateVodDomainWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RefreshVodObjectCachesWithOptions(request *RefreshVodObjectCachesRequest, runtime *util.RuntimeOptions) (_result *RefreshVodObjectCachesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RefreshVodObjectCachesResponse{}
	_body, _err := client.DoRequest(tea.String("RefreshVodObjectCaches"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RefreshVodObjectCaches(request *RefreshVodObjectCachesRequest) (_result *RefreshVodObjectCachesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RefreshVodObjectCachesResponse{}
	_body, _err := client.RefreshVodObjectCachesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) PreloadVodObjectCachesWithOptions(request *PreloadVodObjectCachesRequest, runtime *util.RuntimeOptions) (_result *PreloadVodObjectCachesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &PreloadVodObjectCachesResponse{}
	_body, _err := client.DoRequest(tea.String("PreloadVodObjectCaches"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) PreloadVodObjectCaches(request *PreloadVodObjectCachesRequest) (_result *PreloadVodObjectCachesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &PreloadVodObjectCachesResponse{}
	_body, _err := client.PreloadVodObjectCachesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) BatchStartVodDomainWithOptions(request *BatchStartVodDomainRequest, runtime *util.RuntimeOptions) (_result *BatchStartVodDomainResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &BatchStartVodDomainResponse{}
	_body, _err := client.DoRequest(tea.String("BatchStartVodDomain"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) BatchStartVodDomain(request *BatchStartVodDomainRequest) (_result *BatchStartVodDomainResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &BatchStartVodDomainResponse{}
	_body, _err := client.BatchStartVodDomainWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeVodDomainDetailWithOptions(request *DescribeVodDomainDetailRequest, runtime *util.RuntimeOptions) (_result *DescribeVodDomainDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeVodDomainDetailResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeVodDomainDetail"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeVodDomainDetail(request *DescribeVodDomainDetailRequest) (_result *DescribeVodDomainDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeVodDomainDetailResponse{}
	_body, _err := client.DescribeVodDomainDetailWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteVodTemplateWithOptions(request *DeleteVodTemplateRequest, runtime *util.RuntimeOptions) (_result *DeleteVodTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteVodTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteVodTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteVodTemplate(request *DeleteVodTemplateRequest) (_result *DeleteVodTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteVodTemplateResponse{}
	_body, _err := client.DeleteVodTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetVodTemplateWithOptions(request *GetVodTemplateRequest, runtime *util.RuntimeOptions) (_result *GetVodTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetVodTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("GetVodTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetVodTemplate(request *GetVodTemplateRequest) (_result *GetVodTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetVodTemplateResponse{}
	_body, _err := client.GetVodTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListVodTemplateWithOptions(request *ListVodTemplateRequest, runtime *util.RuntimeOptions) (_result *ListVodTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListVodTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("ListVodTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListVodTemplate(request *ListVodTemplateRequest) (_result *ListVodTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListVodTemplateResponse{}
	_body, _err := client.ListVodTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateVodTemplateWithOptions(request *UpdateVodTemplateRequest, runtime *util.RuntimeOptions) (_result *UpdateVodTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateVodTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateVodTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateVodTemplate(request *UpdateVodTemplateRequest) (_result *UpdateVodTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateVodTemplateResponse{}
	_body, _err := client.UpdateVodTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddVodTemplateWithOptions(request *AddVodTemplateRequest, runtime *util.RuntimeOptions) (_result *AddVodTemplateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddVodTemplateResponse{}
	_body, _err := client.DoRequest(tea.String("AddVodTemplate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddVodTemplate(request *AddVodTemplateRequest) (_result *AddVodTemplateResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddVodTemplateResponse{}
	_body, _err := client.AddVodTemplateWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateUploadAttachedMediaWithOptions(request *CreateUploadAttachedMediaRequest, runtime *util.RuntimeOptions) (_result *CreateUploadAttachedMediaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateUploadAttachedMediaResponse{}
	_body, _err := client.DoRequest(tea.String("CreateUploadAttachedMedia"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateUploadAttachedMedia(request *CreateUploadAttachedMediaRequest) (_result *CreateUploadAttachedMediaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateUploadAttachedMediaResponse{}
	_body, _err := client.CreateUploadAttachedMediaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RegisterMediaWithOptions(request *RegisterMediaRequest, runtime *util.RuntimeOptions) (_result *RegisterMediaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RegisterMediaResponse{}
	_body, _err := client.DoRequest(tea.String("RegisterMedia"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RegisterMedia(request *RegisterMediaRequest) (_result *RegisterMediaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RegisterMediaResponse{}
	_body, _err := client.RegisterMediaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteWatermarkWithOptions(request *DeleteWatermarkRequest, runtime *util.RuntimeOptions) (_result *DeleteWatermarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteWatermarkResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteWatermark"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteWatermark(request *DeleteWatermarkRequest) (_result *DeleteWatermarkResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteWatermarkResponse{}
	_body, _err := client.DeleteWatermarkWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetWatermarkWithOptions(request *GetWatermarkRequest, runtime *util.RuntimeOptions) (_result *GetWatermarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetWatermarkResponse{}
	_body, _err := client.DoRequest(tea.String("GetWatermark"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetWatermark(request *GetWatermarkRequest) (_result *GetWatermarkResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetWatermarkResponse{}
	_body, _err := client.GetWatermarkWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetDefaultWatermarkWithOptions(request *SetDefaultWatermarkRequest, runtime *util.RuntimeOptions) (_result *SetDefaultWatermarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetDefaultWatermarkResponse{}
	_body, _err := client.DoRequest(tea.String("SetDefaultWatermark"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetDefaultWatermark(request *SetDefaultWatermarkRequest) (_result *SetDefaultWatermarkResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetDefaultWatermarkResponse{}
	_body, _err := client.SetDefaultWatermarkWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListWatermarkWithOptions(request *ListWatermarkRequest, runtime *util.RuntimeOptions) (_result *ListWatermarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListWatermarkResponse{}
	_body, _err := client.DoRequest(tea.String("ListWatermark"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListWatermark(request *ListWatermarkRequest) (_result *ListWatermarkResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListWatermarkResponse{}
	_body, _err := client.ListWatermarkWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateWatermarkWithOptions(request *UpdateWatermarkRequest, runtime *util.RuntimeOptions) (_result *UpdateWatermarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateWatermarkResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateWatermark"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateWatermark(request *UpdateWatermarkRequest) (_result *UpdateWatermarkResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateWatermarkResponse{}
	_body, _err := client.UpdateWatermarkWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddWatermarkWithOptions(request *AddWatermarkRequest, runtime *util.RuntimeOptions) (_result *AddWatermarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddWatermarkResponse{}
	_body, _err := client.DoRequest(tea.String("AddWatermark"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddWatermark(request *AddWatermarkRequest) (_result *AddWatermarkResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddWatermarkResponse{}
	_body, _err := client.AddWatermarkWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMediaDNAResultWithOptions(request *GetMediaDNAResultRequest, runtime *util.RuntimeOptions) (_result *GetMediaDNAResultResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMediaDNAResultResponse{}
	_body, _err := client.DoRequest(tea.String("GetMediaDNAResult"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMediaDNAResult(request *GetMediaDNAResultRequest) (_result *GetMediaDNAResultResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMediaDNAResultResponse{}
	_body, _err := client.GetMediaDNAResultWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteMezzaninesWithOptions(request *DeleteMezzaninesRequest, runtime *util.RuntimeOptions) (_result *DeleteMezzaninesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteMezzaninesResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteMezzanines"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteMezzanines(request *DeleteMezzaninesRequest) (_result *DeleteMezzaninesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteMezzaninesResponse{}
	_body, _err := client.DeleteMezzaninesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateImageInfosWithOptions(request *UpdateImageInfosRequest, runtime *util.RuntimeOptions) (_result *UpdateImageInfosResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateImageInfosResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateImageInfos"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateImageInfos(request *UpdateImageInfosRequest) (_result *UpdateImageInfosResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateImageInfosResponse{}
	_body, _err := client.UpdateImageInfosWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteImageWithOptions(request *DeleteImageRequest, runtime *util.RuntimeOptions) (_result *DeleteImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteImageResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteImage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteImage(request *DeleteImageRequest) (_result *DeleteImageResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteImageResponse{}
	_body, _err := client.DeleteImageWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListAuditSecurityIpWithOptions(request *ListAuditSecurityIpRequest, runtime *util.RuntimeOptions) (_result *ListAuditSecurityIpResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListAuditSecurityIpResponse{}
	_body, _err := client.DoRequest(tea.String("ListAuditSecurityIp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListAuditSecurityIp(request *ListAuditSecurityIpRequest) (_result *ListAuditSecurityIpResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListAuditSecurityIpResponse{}
	_body, _err := client.ListAuditSecurityIpWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetAuditSecurityIpWithOptions(request *SetAuditSecurityIpRequest, runtime *util.RuntimeOptions) (_result *SetAuditSecurityIpResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetAuditSecurityIpResponse{}
	_body, _err := client.DoRequest(tea.String("SetAuditSecurityIp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetAuditSecurityIp(request *SetAuditSecurityIpRequest) (_result *SetAuditSecurityIpResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetAuditSecurityIpResponse{}
	_body, _err := client.SetAuditSecurityIpWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UploadMediaByURLWithOptions(request *UploadMediaByURLRequest, runtime *util.RuntimeOptions) (_result *UploadMediaByURLResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UploadMediaByURLResponse{}
	_body, _err := client.DoRequest(tea.String("UploadMediaByURL"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UploadMediaByURL(request *UploadMediaByURLRequest) (_result *UploadMediaByURLResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UploadMediaByURLResponse{}
	_body, _err := client.UploadMediaByURLWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateVideoInfosWithOptions(request *UpdateVideoInfosRequest, runtime *util.RuntimeOptions) (_result *UpdateVideoInfosResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateVideoInfosResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateVideoInfos"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateVideoInfos(request *UpdateVideoInfosRequest) (_result *UpdateVideoInfosResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateVideoInfosResponse{}
	_body, _err := client.UpdateVideoInfosWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchMediaWithOptions(request *SearchMediaRequest, runtime *util.RuntimeOptions) (_result *SearchMediaResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchMediaResponse{}
	_body, _err := client.DoRequest(tea.String("SearchMedia"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchMedia(request *SearchMediaRequest) (_result *SearchMediaResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchMediaResponse{}
	_body, _err := client.SearchMediaWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetVideoInfosWithOptions(request *GetVideoInfosRequest, runtime *util.RuntimeOptions) (_result *GetVideoInfosResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetVideoInfosResponse{}
	_body, _err := client.DoRequest(tea.String("GetVideoInfos"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetVideoInfos(request *GetVideoInfosRequest) (_result *GetVideoInfosResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetVideoInfosResponse{}
	_body, _err := client.GetVideoInfosWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SubmitPreprocessJobsWithOptions(request *SubmitPreprocessJobsRequest, runtime *util.RuntimeOptions) (_result *SubmitPreprocessJobsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SubmitPreprocessJobsResponse{}
	_body, _err := client.DoRequest(tea.String("SubmitPreprocessJobs"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SubmitPreprocessJobs(request *SubmitPreprocessJobsRequest) (_result *SubmitPreprocessJobsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SubmitPreprocessJobsResponse{}
	_body, _err := client.SubmitPreprocessJobsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribePlayVideoStatisWithOptions(request *DescribePlayVideoStatisRequest, runtime *util.RuntimeOptions) (_result *DescribePlayVideoStatisResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribePlayVideoStatisResponse{}
	_body, _err := client.DoRequest(tea.String("DescribePlayVideoStatis"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribePlayVideoStatis(request *DescribePlayVideoStatisRequest) (_result *DescribePlayVideoStatisResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribePlayVideoStatisResponse{}
	_body, _err := client.DescribePlayVideoStatisWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribePlayUserTotalWithOptions(request *DescribePlayUserTotalRequest, runtime *util.RuntimeOptions) (_result *DescribePlayUserTotalResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribePlayUserTotalResponse{}
	_body, _err := client.DoRequest(tea.String("DescribePlayUserTotal"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribePlayUserTotal(request *DescribePlayUserTotalRequest) (_result *DescribePlayUserTotalResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribePlayUserTotalResponse{}
	_body, _err := client.DescribePlayUserTotalWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribePlayUserAvgWithOptions(request *DescribePlayUserAvgRequest, runtime *util.RuntimeOptions) (_result *DescribePlayUserAvgResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribePlayUserAvgResponse{}
	_body, _err := client.DoRequest(tea.String("DescribePlayUserAvg"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribePlayUserAvg(request *DescribePlayUserAvgRequest) (_result *DescribePlayUserAvgResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribePlayUserAvgResponse{}
	_body, _err := client.DescribePlayUserAvgWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribePlayTopVideosWithOptions(request *DescribePlayTopVideosRequest, runtime *util.RuntimeOptions) (_result *DescribePlayTopVideosResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribePlayTopVideosResponse{}
	_body, _err := client.DoRequest(tea.String("DescribePlayTopVideos"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribePlayTopVideos(request *DescribePlayTopVideosRequest) (_result *DescribePlayTopVideosResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribePlayTopVideosResponse{}
	_body, _err := client.DescribePlayTopVideosWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListSnapshotsWithOptions(request *ListSnapshotsRequest, runtime *util.RuntimeOptions) (_result *ListSnapshotsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListSnapshotsResponse{}
	_body, _err := client.DoRequest(tea.String("ListSnapshots"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListSnapshots(request *ListSnapshotsRequest) (_result *ListSnapshotsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListSnapshotsResponse{}
	_body, _err := client.ListSnapshotsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SubmitTranscodeJobsWithOptions(request *SubmitTranscodeJobsRequest, runtime *util.RuntimeOptions) (_result *SubmitTranscodeJobsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SubmitTranscodeJobsResponse{}
	_body, _err := client.DoRequest(tea.String("SubmitTranscodeJobs"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SubmitTranscodeJobs(request *SubmitTranscodeJobsRequest) (_result *SubmitTranscodeJobsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SubmitTranscodeJobsResponse{}
	_body, _err := client.SubmitTranscodeJobsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListLiveRecordVideoWithOptions(request *ListLiveRecordVideoRequest, runtime *util.RuntimeOptions) (_result *ListLiveRecordVideoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListLiveRecordVideoResponse{}
	_body, _err := client.DoRequest(tea.String("ListLiveRecordVideo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListLiveRecordVideo(request *ListLiveRecordVideoRequest) (_result *ListLiveRecordVideoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListLiveRecordVideoResponse{}
	_body, _err := client.ListLiveRecordVideoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateAuditWithOptions(request *CreateAuditRequest, runtime *util.RuntimeOptions) (_result *CreateAuditResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateAuditResponse{}
	_body, _err := client.DoRequest(tea.String("CreateAudit"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateAudit(request *CreateAuditRequest) (_result *CreateAuditResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateAuditResponse{}
	_body, _err := client.CreateAuditWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetAuditHistoryWithOptions(request *GetAuditHistoryRequest, runtime *util.RuntimeOptions) (_result *GetAuditHistoryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetAuditHistoryResponse{}
	_body, _err := client.DoRequest(tea.String("GetAuditHistory"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetAuditHistory(request *GetAuditHistoryRequest) (_result *GetAuditHistoryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetAuditHistoryResponse{}
	_body, _err := client.GetAuditHistoryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListAIJobWithOptions(request *ListAIJobRequest, runtime *util.RuntimeOptions) (_result *ListAIJobResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListAIJobResponse{}
	_body, _err := client.DoRequest(tea.String("ListAIJob"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListAIJob(request *ListAIJobRequest) (_result *ListAIJobResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListAIJobResponse{}
	_body, _err := client.ListAIJobWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SubmitAIJobWithOptions(request *SubmitAIJobRequest, runtime *util.RuntimeOptions) (_result *SubmitAIJobResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SubmitAIJobResponse{}
	_body, _err := client.DoRequest(tea.String("SubmitAIJob"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SubmitAIJob(request *SubmitAIJobRequest) (_result *SubmitAIJobResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SubmitAIJobResponse{}
	_body, _err := client.SubmitAIJobWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetImageInfoWithOptions(request *GetImageInfoRequest, runtime *util.RuntimeOptions) (_result *GetImageInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetImageInfoResponse{}
	_body, _err := client.DoRequest(tea.String("GetImageInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetImageInfo(request *GetImageInfoRequest) (_result *GetImageInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetImageInfoResponse{}
	_body, _err := client.GetImageInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteStreamWithOptions(request *DeleteStreamRequest, runtime *util.RuntimeOptions) (_result *DeleteStreamResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteStreamResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteStream"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteStream(request *DeleteStreamRequest) (_result *DeleteStreamResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteStreamResponse{}
	_body, _err := client.DeleteStreamWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SubmitSnapshotJobWithOptions(request *SubmitSnapshotJobRequest, runtime *util.RuntimeOptions) (_result *SubmitSnapshotJobResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SubmitSnapshotJobResponse{}
	_body, _err := client.DoRequest(tea.String("SubmitSnapshotJob"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SubmitSnapshotJob(request *SubmitSnapshotJobRequest) (_result *SubmitSnapshotJobResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SubmitSnapshotJobResponse{}
	_body, _err := client.SubmitSnapshotJobWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateEditingProjectWithOptions(request *UpdateEditingProjectRequest, runtime *util.RuntimeOptions) (_result *UpdateEditingProjectResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateEditingProjectResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateEditingProject"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateEditingProject(request *UpdateEditingProjectRequest) (_result *UpdateEditingProjectResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateEditingProjectResponse{}
	_body, _err := client.UpdateEditingProjectWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetEditingProjectMaterialsWithOptions(request *SetEditingProjectMaterialsRequest, runtime *util.RuntimeOptions) (_result *SetEditingProjectMaterialsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetEditingProjectMaterialsResponse{}
	_body, _err := client.DoRequest(tea.String("SetEditingProjectMaterials"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetEditingProjectMaterials(request *SetEditingProjectMaterialsRequest) (_result *SetEditingProjectMaterialsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetEditingProjectMaterialsResponse{}
	_body, _err := client.SetEditingProjectMaterialsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchEditingProjectWithOptions(request *SearchEditingProjectRequest, runtime *util.RuntimeOptions) (_result *SearchEditingProjectResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchEditingProjectResponse{}
	_body, _err := client.DoRequest(tea.String("SearchEditingProject"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchEditingProject(request *SearchEditingProjectRequest) (_result *SearchEditingProjectResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchEditingProjectResponse{}
	_body, _err := client.SearchEditingProjectWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ProduceEditingProjectVideoWithOptions(request *ProduceEditingProjectVideoRequest, runtime *util.RuntimeOptions) (_result *ProduceEditingProjectVideoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ProduceEditingProjectVideoResponse{}
	_body, _err := client.DoRequest(tea.String("ProduceEditingProjectVideo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ProduceEditingProjectVideo(request *ProduceEditingProjectVideoRequest) (_result *ProduceEditingProjectVideoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ProduceEditingProjectVideoResponse{}
	_body, _err := client.ProduceEditingProjectVideoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetEditingProjectMaterialsWithOptions(request *GetEditingProjectMaterialsRequest, runtime *util.RuntimeOptions) (_result *GetEditingProjectMaterialsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetEditingProjectMaterialsResponse{}
	_body, _err := client.DoRequest(tea.String("GetEditingProjectMaterials"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetEditingProjectMaterials(request *GetEditingProjectMaterialsRequest) (_result *GetEditingProjectMaterialsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetEditingProjectMaterialsResponse{}
	_body, _err := client.GetEditingProjectMaterialsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetEditingProjectWithOptions(request *GetEditingProjectRequest, runtime *util.RuntimeOptions) (_result *GetEditingProjectResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetEditingProjectResponse{}
	_body, _err := client.DoRequest(tea.String("GetEditingProject"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetEditingProject(request *GetEditingProjectRequest) (_result *GetEditingProjectResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetEditingProjectResponse{}
	_body, _err := client.GetEditingProjectWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteEditingProjectWithOptions(request *DeleteEditingProjectRequest, runtime *util.RuntimeOptions) (_result *DeleteEditingProjectResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteEditingProjectResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteEditingProject"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteEditingProject(request *DeleteEditingProjectRequest) (_result *DeleteEditingProjectResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteEditingProjectResponse{}
	_body, _err := client.DeleteEditingProjectWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddEditingProjectWithOptions(request *AddEditingProjectRequest, runtime *util.RuntimeOptions) (_result *AddEditingProjectResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddEditingProjectResponse{}
	_body, _err := client.DoRequest(tea.String("AddEditingProject"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddEditingProject(request *AddEditingProjectRequest) (_result *AddEditingProjectResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddEditingProjectResponse{}
	_body, _err := client.AddEditingProjectWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMezzanineInfoWithOptions(request *GetMezzanineInfoRequest, runtime *util.RuntimeOptions) (_result *GetMezzanineInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMezzanineInfoResponse{}
	_body, _err := client.DoRequest(tea.String("GetMezzanineInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMezzanineInfo(request *GetMezzanineInfoRequest) (_result *GetMezzanineInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMezzanineInfoResponse{}
	_body, _err := client.GetMezzanineInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateCategoryWithOptions(request *UpdateCategoryRequest, runtime *util.RuntimeOptions) (_result *UpdateCategoryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateCategoryResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateCategory"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateCategory(request *UpdateCategoryRequest) (_result *UpdateCategoryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateCategoryResponse{}
	_body, _err := client.UpdateCategoryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetCategoriesWithOptions(request *GetCategoriesRequest, runtime *util.RuntimeOptions) (_result *GetCategoriesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetCategoriesResponse{}
	_body, _err := client.DoRequest(tea.String("GetCategories"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetCategories(request *GetCategoriesRequest) (_result *GetCategoriesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetCategoriesResponse{}
	_body, _err := client.GetCategoriesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteCategoryWithOptions(request *DeleteCategoryRequest, runtime *util.RuntimeOptions) (_result *DeleteCategoryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteCategoryResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteCategory"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteCategory(request *DeleteCategoryRequest) (_result *DeleteCategoryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteCategoryResponse{}
	_body, _err := client.DeleteCategoryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddCategoryWithOptions(request *AddCategoryRequest, runtime *util.RuntimeOptions) (_result *AddCategoryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddCategoryResponse{}
	_body, _err := client.DoRequest(tea.String("AddCategory"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddCategory(request *AddCategoryRequest) (_result *AddCategoryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddCategoryResponse{}
	_body, _err := client.AddCategoryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetPlayInfoWithOptions(request *GetPlayInfoRequest, runtime *util.RuntimeOptions) (_result *GetPlayInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetPlayInfoResponse{}
	_body, _err := client.DoRequest(tea.String("GetPlayInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetPlayInfo(request *GetPlayInfoRequest) (_result *GetPlayInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetPlayInfoResponse{}
	_body, _err := client.GetPlayInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateUploadImageWithOptions(request *CreateUploadImageRequest, runtime *util.RuntimeOptions) (_result *CreateUploadImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateUploadImageResponse{}
	_body, _err := client.DoRequest(tea.String("CreateUploadImage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateUploadImage(request *CreateUploadImageRequest) (_result *CreateUploadImageResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateUploadImageResponse{}
	_body, _err := client.CreateUploadImageWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SetMessageCallbackWithOptions(request *SetMessageCallbackRequest, runtime *util.RuntimeOptions) (_result *SetMessageCallbackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SetMessageCallbackResponse{}
	_body, _err := client.DoRequest(tea.String("SetMessageCallback"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SetMessageCallback(request *SetMessageCallbackRequest) (_result *SetMessageCallbackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SetMessageCallbackResponse{}
	_body, _err := client.SetMessageCallbackWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMessageCallbackWithOptions(request *GetMessageCallbackRequest, runtime *util.RuntimeOptions) (_result *GetMessageCallbackResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMessageCallbackResponse{}
	_body, _err := client.DoRequest(tea.String("GetMessageCallback"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMessageCallback(request *GetMessageCallbackRequest) (_result *GetMessageCallbackResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMessageCallbackResponse{}
	_body, _err := client.GetMessageCallbackWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateVideoInfoWithOptions(request *UpdateVideoInfoRequest, runtime *util.RuntimeOptions) (_result *UpdateVideoInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateVideoInfoResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateVideoInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateVideoInfo(request *UpdateVideoInfoRequest) (_result *UpdateVideoInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateVideoInfoResponse{}
	_body, _err := client.UpdateVideoInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetVideoPlayAuthWithOptions(request *GetVideoPlayAuthRequest, runtime *util.RuntimeOptions) (_result *GetVideoPlayAuthResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetVideoPlayAuthResponse{}
	_body, _err := client.DoRequest(tea.String("GetVideoPlayAuth"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetVideoPlayAuth(request *GetVideoPlayAuthRequest) (_result *GetVideoPlayAuthResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetVideoPlayAuthResponse{}
	_body, _err := client.GetVideoPlayAuthWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetVideoListWithOptions(request *GetVideoListRequest, runtime *util.RuntimeOptions) (_result *GetVideoListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetVideoListResponse{}
	_body, _err := client.DoRequest(tea.String("GetVideoList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetVideoList(request *GetVideoListRequest) (_result *GetVideoListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetVideoListResponse{}
	_body, _err := client.GetVideoListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetVideoInfoWithOptions(request *GetVideoInfoRequest, runtime *util.RuntimeOptions) (_result *GetVideoInfoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetVideoInfoResponse{}
	_body, _err := client.DoRequest(tea.String("GetVideoInfo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetVideoInfo(request *GetVideoInfoRequest) (_result *GetVideoInfoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetVideoInfoResponse{}
	_body, _err := client.GetVideoInfoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteVideoWithOptions(request *DeleteVideoRequest, runtime *util.RuntimeOptions) (_result *DeleteVideoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteVideoResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteVideo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteVideo(request *DeleteVideoRequest) (_result *DeleteVideoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteVideoResponse{}
	_body, _err := client.DeleteVideoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RefreshUploadVideoWithOptions(request *RefreshUploadVideoRequest, runtime *util.RuntimeOptions) (_result *RefreshUploadVideoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RefreshUploadVideoResponse{}
	_body, _err := client.DoRequest(tea.String("RefreshUploadVideo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RefreshUploadVideo(request *RefreshUploadVideoRequest) (_result *RefreshUploadVideoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RefreshUploadVideoResponse{}
	_body, _err := client.RefreshUploadVideoWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateUploadVideoWithOptions(request *CreateUploadVideoRequest, runtime *util.RuntimeOptions) (_result *CreateUploadVideoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateUploadVideoResponse{}
	_body, _err := client.DoRequest(tea.String("CreateUploadVideo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2017-03-21"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateUploadVideo(request *CreateUploadVideoRequest) (_result *CreateUploadVideoResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateUploadVideoResponse{}
	_body, _err := client.CreateUploadVideoWithOptions(request, runtime)
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
