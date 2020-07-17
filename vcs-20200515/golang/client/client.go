// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type ListBodyAlgorithmResultsRequest struct {
	CorpId        *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	AlgorithmType *string `json:"AlgorithmType,omitempty" xml:"AlgorithmType,omitempty" require:"true"`
	DataSourceId  *string `json:"DataSourceId,omitempty" xml:"DataSourceId,omitempty"`
	StartTime     *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime       *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	PageNumber    *string `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize      *string `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	CapStyle      *string `json:"CapStyle,omitempty" xml:"CapStyle,omitempty"`
}

func (s ListBodyAlgorithmResultsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListBodyAlgorithmResultsRequest) GoString() string {
	return s.String()
}

func (s *ListBodyAlgorithmResultsRequest) SetCorpId(v string) *ListBodyAlgorithmResultsRequest {
	s.CorpId = &v
	return s
}

func (s *ListBodyAlgorithmResultsRequest) SetAlgorithmType(v string) *ListBodyAlgorithmResultsRequest {
	s.AlgorithmType = &v
	return s
}

func (s *ListBodyAlgorithmResultsRequest) SetDataSourceId(v string) *ListBodyAlgorithmResultsRequest {
	s.DataSourceId = &v
	return s
}

func (s *ListBodyAlgorithmResultsRequest) SetStartTime(v string) *ListBodyAlgorithmResultsRequest {
	s.StartTime = &v
	return s
}

func (s *ListBodyAlgorithmResultsRequest) SetEndTime(v string) *ListBodyAlgorithmResultsRequest {
	s.EndTime = &v
	return s
}

func (s *ListBodyAlgorithmResultsRequest) SetPageNumber(v string) *ListBodyAlgorithmResultsRequest {
	s.PageNumber = &v
	return s
}

func (s *ListBodyAlgorithmResultsRequest) SetPageSize(v string) *ListBodyAlgorithmResultsRequest {
	s.PageSize = &v
	return s
}

func (s *ListBodyAlgorithmResultsRequest) SetCapStyle(v string) *ListBodyAlgorithmResultsRequest {
	s.CapStyle = &v
	return s
}

type ListBodyAlgorithmResultsResponse struct {
	Code      *string                               `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                               `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ListBodyAlgorithmResultsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListBodyAlgorithmResultsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListBodyAlgorithmResultsResponse) GoString() string {
	return s.String()
}

func (s *ListBodyAlgorithmResultsResponse) SetCode(v string) *ListBodyAlgorithmResultsResponse {
	s.Code = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponse) SetMessage(v string) *ListBodyAlgorithmResultsResponse {
	s.Message = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponse) SetRequestId(v string) *ListBodyAlgorithmResultsResponse {
	s.RequestId = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponse) SetData(v *ListBodyAlgorithmResultsResponseData) *ListBodyAlgorithmResultsResponse {
	s.Data = v
	return s
}

type ListBodyAlgorithmResultsResponseData struct {
	PageNumber *int                                           `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                           `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                                           `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	TotalPage  *int                                           `json:"TotalPage,omitempty" xml:"TotalPage,omitempty" require:"true"`
	Records    []*ListBodyAlgorithmResultsResponseDataRecords `json:"Records,omitempty" xml:"Records,omitempty" require:"true" type:"Repeated"`
}

func (s ListBodyAlgorithmResultsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListBodyAlgorithmResultsResponseData) GoString() string {
	return s.String()
}

func (s *ListBodyAlgorithmResultsResponseData) SetPageNumber(v int) *ListBodyAlgorithmResultsResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseData) SetPageSize(v int) *ListBodyAlgorithmResultsResponseData {
	s.PageSize = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseData) SetTotalCount(v int) *ListBodyAlgorithmResultsResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseData) SetTotalPage(v int) *ListBodyAlgorithmResultsResponseData {
	s.TotalPage = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseData) SetRecords(v []*ListBodyAlgorithmResultsResponseDataRecords) *ListBodyAlgorithmResultsResponseData {
	s.Records = v
	return s
}

type ListBodyAlgorithmResultsResponseDataRecords struct {
	CapStyle         *string  `json:"CapStyle,omitempty" xml:"CapStyle,omitempty" require:"true"`
	CorpId           *string  `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	DataSourceId     *string  `json:"DataSourceId,omitempty" xml:"DataSourceId,omitempty" require:"true"`
	PersonId         *string  `json:"PersonId,omitempty" xml:"PersonId,omitempty" require:"true"`
	GenderCode       *string  `json:"GenderCode,omitempty" xml:"GenderCode,omitempty" require:"true"`
	HairStyle        *string  `json:"HairStyle,omitempty" xml:"HairStyle,omitempty" require:"true"`
	LeftTopX         *float32 `json:"LeftTopX,omitempty" xml:"LeftTopX,omitempty" require:"true"`
	LeftTopY         *float32 `json:"LeftTopY,omitempty" xml:"LeftTopY,omitempty" require:"true"`
	MaxAge           *string  `json:"MaxAge,omitempty" xml:"MaxAge,omitempty" require:"true"`
	MinAge           *string  `json:"MinAge,omitempty" xml:"MinAge,omitempty" require:"true"`
	PicUrlPath       *string  `json:"PicUrlPath,omitempty" xml:"PicUrlPath,omitempty" require:"true"`
	RightBottomX     *float32 `json:"RightBottomX,omitempty" xml:"RightBottomX,omitempty" require:"true"`
	RightBottomY     *float32 `json:"RightBottomY,omitempty" xml:"RightBottomY,omitempty" require:"true"`
	ShotTime         *string  `json:"ShotTime,omitempty" xml:"ShotTime,omitempty" require:"true"`
	TargetPicUrlPath *string  `json:"TargetPicUrlPath,omitempty" xml:"TargetPicUrlPath,omitempty" require:"true"`
	CoatLength       *string  `json:"CoatLength,omitempty" xml:"CoatLength,omitempty" require:"true"`
	CoatStyle        *string  `json:"CoatStyle,omitempty" xml:"CoatStyle,omitempty" require:"true"`
	TrousersLength   *string  `json:"TrousersLength,omitempty" xml:"TrousersLength,omitempty" require:"true"`
	TrousersStyle    *string  `json:"TrousersStyle,omitempty" xml:"TrousersStyle,omitempty" require:"true"`
	CoatColor        *string  `json:"CoatColor,omitempty" xml:"CoatColor,omitempty" require:"true"`
	TrousersColor    *string  `json:"TrousersColor,omitempty" xml:"TrousersColor,omitempty" require:"true"`
}

func (s ListBodyAlgorithmResultsResponseDataRecords) String() string {
	return tea.Prettify(s)
}

func (s ListBodyAlgorithmResultsResponseDataRecords) GoString() string {
	return s.String()
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetCapStyle(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.CapStyle = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetCorpId(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.CorpId = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetDataSourceId(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.DataSourceId = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetPersonId(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.PersonId = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetGenderCode(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.GenderCode = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetHairStyle(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.HairStyle = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetLeftTopX(v float32) *ListBodyAlgorithmResultsResponseDataRecords {
	s.LeftTopX = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetLeftTopY(v float32) *ListBodyAlgorithmResultsResponseDataRecords {
	s.LeftTopY = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetMaxAge(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.MaxAge = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetMinAge(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.MinAge = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetPicUrlPath(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.PicUrlPath = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetRightBottomX(v float32) *ListBodyAlgorithmResultsResponseDataRecords {
	s.RightBottomX = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetRightBottomY(v float32) *ListBodyAlgorithmResultsResponseDataRecords {
	s.RightBottomY = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetShotTime(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.ShotTime = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetTargetPicUrlPath(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.TargetPicUrlPath = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetCoatLength(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.CoatLength = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetCoatStyle(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.CoatStyle = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetTrousersLength(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.TrousersLength = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetTrousersStyle(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.TrousersStyle = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetCoatColor(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.CoatColor = &v
	return s
}

func (s *ListBodyAlgorithmResultsResponseDataRecords) SetTrousersColor(v string) *ListBodyAlgorithmResultsResponseDataRecords {
	s.TrousersColor = &v
	return s
}

type AddDataSourceRequest struct {
	CorpId         *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	DataSourceName *string `json:"DataSourceName,omitempty" xml:"DataSourceName,omitempty" require:"true"`
	DataSourceType *string `json:"DataSourceType,omitempty" xml:"DataSourceType,omitempty" require:"true"`
	Description    *string `json:"Description,omitempty" xml:"Description,omitempty"`
}

func (s AddDataSourceRequest) String() string {
	return tea.Prettify(s)
}

func (s AddDataSourceRequest) GoString() string {
	return s.String()
}

func (s *AddDataSourceRequest) SetCorpId(v string) *AddDataSourceRequest {
	s.CorpId = &v
	return s
}

func (s *AddDataSourceRequest) SetDataSourceName(v string) *AddDataSourceRequest {
	s.DataSourceName = &v
	return s
}

func (s *AddDataSourceRequest) SetDataSourceType(v string) *AddDataSourceRequest {
	s.DataSourceType = &v
	return s
}

func (s *AddDataSourceRequest) SetDescription(v string) *AddDataSourceRequest {
	s.Description = &v
	return s
}

type AddDataSourceResponse struct {
	Code    *string                    `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message *string                    `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data    *AddDataSourceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s AddDataSourceResponse) String() string {
	return tea.Prettify(s)
}

func (s AddDataSourceResponse) GoString() string {
	return s.String()
}

func (s *AddDataSourceResponse) SetCode(v string) *AddDataSourceResponse {
	s.Code = &v
	return s
}

func (s *AddDataSourceResponse) SetMessage(v string) *AddDataSourceResponse {
	s.Message = &v
	return s
}

func (s *AddDataSourceResponse) SetData(v *AddDataSourceResponseData) *AddDataSourceResponse {
	s.Data = v
	return s
}

type AddDataSourceResponseData struct {
	DataSourceId *string `json:"DataSourceId,omitempty" xml:"DataSourceId,omitempty" require:"true"`
	KafkaTopic   *string `json:"KafkaTopic,omitempty" xml:"KafkaTopic,omitempty" require:"true"`
	OssPath      *string `json:"OssPath,omitempty" xml:"OssPath,omitempty" require:"true"`
}

func (s AddDataSourceResponseData) String() string {
	return tea.Prettify(s)
}

func (s AddDataSourceResponseData) GoString() string {
	return s.String()
}

func (s *AddDataSourceResponseData) SetDataSourceId(v string) *AddDataSourceResponseData {
	s.DataSourceId = &v
	return s
}

func (s *AddDataSourceResponseData) SetKafkaTopic(v string) *AddDataSourceResponseData {
	s.KafkaTopic = &v
	return s
}

func (s *AddDataSourceResponseData) SetOssPath(v string) *AddDataSourceResponseData {
	s.OssPath = &v
	return s
}

type GetVideoComposeResultRequest struct {
	CorpId        *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	TaskRequestId *string `json:"TaskRequestId,omitempty" xml:"TaskRequestId,omitempty" require:"true"`
}

func (s GetVideoComposeResultRequest) String() string {
	return tea.Prettify(s)
}

func (s GetVideoComposeResultRequest) GoString() string {
	return s.String()
}

func (s *GetVideoComposeResultRequest) SetCorpId(v string) *GetVideoComposeResultRequest {
	s.CorpId = &v
	return s
}

func (s *GetVideoComposeResultRequest) SetTaskRequestId(v string) *GetVideoComposeResultRequest {
	s.TaskRequestId = &v
	return s
}

type GetVideoComposeResultResponse struct {
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	VideoUrl  *string `json:"VideoUrl,omitempty" xml:"VideoUrl,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Status    *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
}

func (s GetVideoComposeResultResponse) String() string {
	return tea.Prettify(s)
}

func (s GetVideoComposeResultResponse) GoString() string {
	return s.String()
}

func (s *GetVideoComposeResultResponse) SetMessage(v string) *GetVideoComposeResultResponse {
	s.Message = &v
	return s
}

func (s *GetVideoComposeResultResponse) SetRequestId(v string) *GetVideoComposeResultResponse {
	s.RequestId = &v
	return s
}

func (s *GetVideoComposeResultResponse) SetVideoUrl(v string) *GetVideoComposeResultResponse {
	s.VideoUrl = &v
	return s
}

func (s *GetVideoComposeResultResponse) SetCode(v string) *GetVideoComposeResultResponse {
	s.Code = &v
	return s
}

func (s *GetVideoComposeResultResponse) SetStatus(v string) *GetVideoComposeResultResponse {
	s.Status = &v
	return s
}

type CreateVideoComposeTaskRequest struct {
	CorpId          *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	BucketName      *string `json:"BucketName,omitempty" xml:"BucketName,omitempty" require:"true"`
	DomainName      *string `json:"DomainName,omitempty" xml:"DomainName,omitempty"`
	ImageFileNames  *string `json:"ImageFileNames,omitempty" xml:"ImageFileNames,omitempty" require:"true"`
	AudioFileName   *string `json:"AudioFileName,omitempty" xml:"AudioFileName,omitempty" require:"true"`
	ImageParameters *string `json:"ImageParameters,omitempty" xml:"ImageParameters,omitempty" require:"true"`
	VideoFormat     *string `json:"VideoFormat,omitempty" xml:"VideoFormat,omitempty"`
	VideoFrameRate  *int    `json:"VideoFrameRate,omitempty" xml:"VideoFrameRate,omitempty"`
}

func (s CreateVideoComposeTaskRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateVideoComposeTaskRequest) GoString() string {
	return s.String()
}

func (s *CreateVideoComposeTaskRequest) SetCorpId(v string) *CreateVideoComposeTaskRequest {
	s.CorpId = &v
	return s
}

func (s *CreateVideoComposeTaskRequest) SetBucketName(v string) *CreateVideoComposeTaskRequest {
	s.BucketName = &v
	return s
}

func (s *CreateVideoComposeTaskRequest) SetDomainName(v string) *CreateVideoComposeTaskRequest {
	s.DomainName = &v
	return s
}

func (s *CreateVideoComposeTaskRequest) SetImageFileNames(v string) *CreateVideoComposeTaskRequest {
	s.ImageFileNames = &v
	return s
}

func (s *CreateVideoComposeTaskRequest) SetAudioFileName(v string) *CreateVideoComposeTaskRequest {
	s.AudioFileName = &v
	return s
}

func (s *CreateVideoComposeTaskRequest) SetImageParameters(v string) *CreateVideoComposeTaskRequest {
	s.ImageParameters = &v
	return s
}

func (s *CreateVideoComposeTaskRequest) SetVideoFormat(v string) *CreateVideoComposeTaskRequest {
	s.VideoFormat = &v
	return s
}

func (s *CreateVideoComposeTaskRequest) SetVideoFrameRate(v int) *CreateVideoComposeTaskRequest {
	s.VideoFrameRate = &v
	return s
}

type CreateVideoComposeTaskResponse struct {
	Code       *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message    *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId  *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DomainName *string `json:"DomainName,omitempty" xml:"DomainName,omitempty" require:"true"`
	BucketName *string `json:"BucketName,omitempty" xml:"BucketName,omitempty" require:"true"`
}

func (s CreateVideoComposeTaskResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateVideoComposeTaskResponse) GoString() string {
	return s.String()
}

func (s *CreateVideoComposeTaskResponse) SetCode(v string) *CreateVideoComposeTaskResponse {
	s.Code = &v
	return s
}

func (s *CreateVideoComposeTaskResponse) SetMessage(v string) *CreateVideoComposeTaskResponse {
	s.Message = &v
	return s
}

func (s *CreateVideoComposeTaskResponse) SetRequestId(v string) *CreateVideoComposeTaskResponse {
	s.RequestId = &v
	return s
}

func (s *CreateVideoComposeTaskResponse) SetDomainName(v string) *CreateVideoComposeTaskResponse {
	s.DomainName = &v
	return s
}

func (s *CreateVideoComposeTaskResponse) SetBucketName(v string) *CreateVideoComposeTaskResponse {
	s.BucketName = &v
	return s
}

type DeleteDataSourceRequest struct {
	CorpId       *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	DataSourceId *string `json:"DataSourceId,omitempty" xml:"DataSourceId,omitempty" require:"true"`
}

func (s DeleteDataSourceRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteDataSourceRequest) GoString() string {
	return s.String()
}

func (s *DeleteDataSourceRequest) SetCorpId(v string) *DeleteDataSourceRequest {
	s.CorpId = &v
	return s
}

func (s *DeleteDataSourceRequest) SetDataSourceId(v string) *DeleteDataSourceRequest {
	s.DataSourceId = &v
	return s
}

type DeleteDataSourceResponse struct {
	Code    *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Data    *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Message *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s DeleteDataSourceResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteDataSourceResponse) GoString() string {
	return s.String()
}

func (s *DeleteDataSourceResponse) SetCode(v string) *DeleteDataSourceResponse {
	s.Code = &v
	return s
}

func (s *DeleteDataSourceResponse) SetData(v string) *DeleteDataSourceResponse {
	s.Data = &v
	return s
}

func (s *DeleteDataSourceResponse) SetMessage(v string) *DeleteDataSourceResponse {
	s.Message = &v
	return s
}

type UploadFileRequest struct {
	FileType      *string `json:"FileType,omitempty" xml:"FileType,omitempty" require:"true"`
	MD5           *string `json:"MD5,omitempty" xml:"MD5,omitempty"`
	CorpId        *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	FileContent   *string `json:"FileContent,omitempty" xml:"FileContent,omitempty"`
	FileName      *string `json:"FileName,omitempty" xml:"FileName,omitempty" require:"true"`
	FileAliasName *string `json:"FileAliasName,omitempty" xml:"FileAliasName,omitempty"`
	DataSourceId  *string `json:"DataSourceId,omitempty" xml:"DataSourceId,omitempty" require:"true"`
	FilePath      *string `json:"FilePath,omitempty" xml:"FilePath,omitempty"`
}

func (s UploadFileRequest) String() string {
	return tea.Prettify(s)
}

func (s UploadFileRequest) GoString() string {
	return s.String()
}

func (s *UploadFileRequest) SetFileType(v string) *UploadFileRequest {
	s.FileType = &v
	return s
}

func (s *UploadFileRequest) SetMD5(v string) *UploadFileRequest {
	s.MD5 = &v
	return s
}

func (s *UploadFileRequest) SetCorpId(v string) *UploadFileRequest {
	s.CorpId = &v
	return s
}

func (s *UploadFileRequest) SetFileContent(v string) *UploadFileRequest {
	s.FileContent = &v
	return s
}

func (s *UploadFileRequest) SetFileName(v string) *UploadFileRequest {
	s.FileName = &v
	return s
}

func (s *UploadFileRequest) SetFileAliasName(v string) *UploadFileRequest {
	s.FileAliasName = &v
	return s
}

func (s *UploadFileRequest) SetDataSourceId(v string) *UploadFileRequest {
	s.DataSourceId = &v
	return s
}

func (s *UploadFileRequest) SetFilePath(v string) *UploadFileRequest {
	s.FilePath = &v
	return s
}

type UploadFileResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UploadFileResponse) String() string {
	return tea.Prettify(s)
}

func (s UploadFileResponse) GoString() string {
	return s.String()
}

func (s *UploadFileResponse) SetCode(v string) *UploadFileResponse {
	s.Code = &v
	return s
}

func (s *UploadFileResponse) SetData(v string) *UploadFileResponse {
	s.Data = &v
	return s
}

func (s *UploadFileResponse) SetMessage(v string) *UploadFileResponse {
	s.Message = &v
	return s
}

func (s *UploadFileResponse) SetRequestId(v string) *UploadFileResponse {
	s.RequestId = &v
	return s
}

type ListEventAlgorithmResultsRequest struct {
	CorpId       *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	EventType    *string `json:"EventType,omitempty" xml:"EventType,omitempty" require:"true"`
	DataSourceId *string `json:"DataSourceId,omitempty" xml:"DataSourceId,omitempty"`
	StartTime    *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime      *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	PageNumber   *string `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize     *string `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
}

func (s ListEventAlgorithmResultsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListEventAlgorithmResultsRequest) GoString() string {
	return s.String()
}

func (s *ListEventAlgorithmResultsRequest) SetCorpId(v string) *ListEventAlgorithmResultsRequest {
	s.CorpId = &v
	return s
}

func (s *ListEventAlgorithmResultsRequest) SetEventType(v string) *ListEventAlgorithmResultsRequest {
	s.EventType = &v
	return s
}

func (s *ListEventAlgorithmResultsRequest) SetDataSourceId(v string) *ListEventAlgorithmResultsRequest {
	s.DataSourceId = &v
	return s
}

func (s *ListEventAlgorithmResultsRequest) SetStartTime(v string) *ListEventAlgorithmResultsRequest {
	s.StartTime = &v
	return s
}

func (s *ListEventAlgorithmResultsRequest) SetEndTime(v string) *ListEventAlgorithmResultsRequest {
	s.EndTime = &v
	return s
}

func (s *ListEventAlgorithmResultsRequest) SetPageNumber(v string) *ListEventAlgorithmResultsRequest {
	s.PageNumber = &v
	return s
}

func (s *ListEventAlgorithmResultsRequest) SetPageSize(v string) *ListEventAlgorithmResultsRequest {
	s.PageSize = &v
	return s
}

type ListEventAlgorithmResultsResponse struct {
	Code      *string                                `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                                `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ListEventAlgorithmResultsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListEventAlgorithmResultsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListEventAlgorithmResultsResponse) GoString() string {
	return s.String()
}

func (s *ListEventAlgorithmResultsResponse) SetCode(v string) *ListEventAlgorithmResultsResponse {
	s.Code = &v
	return s
}

func (s *ListEventAlgorithmResultsResponse) SetMessage(v string) *ListEventAlgorithmResultsResponse {
	s.Message = &v
	return s
}

func (s *ListEventAlgorithmResultsResponse) SetRequestId(v string) *ListEventAlgorithmResultsResponse {
	s.RequestId = &v
	return s
}

func (s *ListEventAlgorithmResultsResponse) SetData(v *ListEventAlgorithmResultsResponseData) *ListEventAlgorithmResultsResponse {
	s.Data = v
	return s
}

type ListEventAlgorithmResultsResponseData struct {
	PageNumber *int                                            `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                            `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                                            `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	TotalPage  *int                                            `json:"TotalPage,omitempty" xml:"TotalPage,omitempty" require:"true"`
	Records    []*ListEventAlgorithmResultsResponseDataRecords `json:"Records,omitempty" xml:"Records,omitempty" require:"true" type:"Repeated"`
}

func (s ListEventAlgorithmResultsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListEventAlgorithmResultsResponseData) GoString() string {
	return s.String()
}

func (s *ListEventAlgorithmResultsResponseData) SetPageNumber(v int) *ListEventAlgorithmResultsResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListEventAlgorithmResultsResponseData) SetPageSize(v int) *ListEventAlgorithmResultsResponseData {
	s.PageSize = &v
	return s
}

func (s *ListEventAlgorithmResultsResponseData) SetTotalCount(v int) *ListEventAlgorithmResultsResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListEventAlgorithmResultsResponseData) SetTotalPage(v int) *ListEventAlgorithmResultsResponseData {
	s.TotalPage = &v
	return s
}

func (s *ListEventAlgorithmResultsResponseData) SetRecords(v []*ListEventAlgorithmResultsResponseDataRecords) *ListEventAlgorithmResultsResponseData {
	s.Records = v
	return s
}

type ListEventAlgorithmResultsResponseDataRecords struct {
	CapStyle         *string `json:"CapStyle,omitempty" xml:"CapStyle,omitempty" require:"true"`
	CorpId           *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	DataSourceId     *string `json:"DataSourceId,omitempty" xml:"DataSourceId,omitempty" require:"true"`
	EventType        *string `json:"EventType,omitempty" xml:"EventType,omitempty" require:"true"`
	FaceCount        *string `json:"FaceCount,omitempty" xml:"FaceCount,omitempty" require:"true"`
	PicUrlPath       *string `json:"PicUrlPath,omitempty" xml:"PicUrlPath,omitempty" require:"true"`
	ShotTime         *string `json:"ShotTime,omitempty" xml:"ShotTime,omitempty" require:"true"`
	TargetPicUrlPath *string `json:"TargetPicUrlPath,omitempty" xml:"TargetPicUrlPath,omitempty" require:"true"`
}

func (s ListEventAlgorithmResultsResponseDataRecords) String() string {
	return tea.Prettify(s)
}

func (s ListEventAlgorithmResultsResponseDataRecords) GoString() string {
	return s.String()
}

func (s *ListEventAlgorithmResultsResponseDataRecords) SetCapStyle(v string) *ListEventAlgorithmResultsResponseDataRecords {
	s.CapStyle = &v
	return s
}

func (s *ListEventAlgorithmResultsResponseDataRecords) SetCorpId(v string) *ListEventAlgorithmResultsResponseDataRecords {
	s.CorpId = &v
	return s
}

func (s *ListEventAlgorithmResultsResponseDataRecords) SetDataSourceId(v string) *ListEventAlgorithmResultsResponseDataRecords {
	s.DataSourceId = &v
	return s
}

func (s *ListEventAlgorithmResultsResponseDataRecords) SetEventType(v string) *ListEventAlgorithmResultsResponseDataRecords {
	s.EventType = &v
	return s
}

func (s *ListEventAlgorithmResultsResponseDataRecords) SetFaceCount(v string) *ListEventAlgorithmResultsResponseDataRecords {
	s.FaceCount = &v
	return s
}

func (s *ListEventAlgorithmResultsResponseDataRecords) SetPicUrlPath(v string) *ListEventAlgorithmResultsResponseDataRecords {
	s.PicUrlPath = &v
	return s
}

func (s *ListEventAlgorithmResultsResponseDataRecords) SetShotTime(v string) *ListEventAlgorithmResultsResponseDataRecords {
	s.ShotTime = &v
	return s
}

func (s *ListEventAlgorithmResultsResponseDataRecords) SetTargetPicUrlPath(v string) *ListEventAlgorithmResultsResponseDataRecords {
	s.TargetPicUrlPath = &v
	return s
}

type DeleteVideoSummaryTaskRequest struct {
	CorpId *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	TaskId *string `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
}

func (s DeleteVideoSummaryTaskRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteVideoSummaryTaskRequest) GoString() string {
	return s.String()
}

func (s *DeleteVideoSummaryTaskRequest) SetCorpId(v string) *DeleteVideoSummaryTaskRequest {
	s.CorpId = &v
	return s
}

func (s *DeleteVideoSummaryTaskRequest) SetTaskId(v string) *DeleteVideoSummaryTaskRequest {
	s.TaskId = &v
	return s
}

type DeleteVideoSummaryTaskResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteVideoSummaryTaskResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteVideoSummaryTaskResponse) GoString() string {
	return s.String()
}

func (s *DeleteVideoSummaryTaskResponse) SetCode(v string) *DeleteVideoSummaryTaskResponse {
	s.Code = &v
	return s
}

func (s *DeleteVideoSummaryTaskResponse) SetData(v string) *DeleteVideoSummaryTaskResponse {
	s.Data = &v
	return s
}

func (s *DeleteVideoSummaryTaskResponse) SetMessage(v string) *DeleteVideoSummaryTaskResponse {
	s.Message = &v
	return s
}

func (s *DeleteVideoSummaryTaskResponse) SetRequestId(v string) *DeleteVideoSummaryTaskResponse {
	s.RequestId = &v
	return s
}

type GetVideoSummaryTaskResultRequest struct {
	CorpId *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	TaskId *string `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
}

func (s GetVideoSummaryTaskResultRequest) String() string {
	return tea.Prettify(s)
}

func (s GetVideoSummaryTaskResultRequest) GoString() string {
	return s.String()
}

func (s *GetVideoSummaryTaskResultRequest) SetCorpId(v string) *GetVideoSummaryTaskResultRequest {
	s.CorpId = &v
	return s
}

func (s *GetVideoSummaryTaskResultRequest) SetTaskId(v string) *GetVideoSummaryTaskResultRequest {
	s.TaskId = &v
	return s
}

type GetVideoSummaryTaskResultResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s GetVideoSummaryTaskResultResponse) String() string {
	return tea.Prettify(s)
}

func (s GetVideoSummaryTaskResultResponse) GoString() string {
	return s.String()
}

func (s *GetVideoSummaryTaskResultResponse) SetCode(v string) *GetVideoSummaryTaskResultResponse {
	s.Code = &v
	return s
}

func (s *GetVideoSummaryTaskResultResponse) SetData(v string) *GetVideoSummaryTaskResultResponse {
	s.Data = &v
	return s
}

func (s *GetVideoSummaryTaskResultResponse) SetMessage(v string) *GetVideoSummaryTaskResultResponse {
	s.Message = &v
	return s
}

func (s *GetVideoSummaryTaskResultResponse) SetRequestId(v string) *GetVideoSummaryTaskResultResponse {
	s.RequestId = &v
	return s
}

type CreateVideoSummaryTaskRequest struct {
	CorpId           *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	DeviceId         *string `json:"DeviceId,omitempty" xml:"DeviceId,omitempty" require:"true"`
	StartTimeStamp   *string `json:"StartTimeStamp,omitempty" xml:"StartTimeStamp,omitempty" require:"true"`
	EndTimeStamp     *string `json:"EndTimeStamp,omitempty" xml:"EndTimeStamp,omitempty" require:"true"`
	OptionList       *string `json:"OptionList,omitempty" xml:"OptionList,omitempty"`
	LiveVideoSummary *string `json:"LiveVideoSummary,omitempty" xml:"LiveVideoSummary,omitempty"`
}

func (s CreateVideoSummaryTaskRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateVideoSummaryTaskRequest) GoString() string {
	return s.String()
}

func (s *CreateVideoSummaryTaskRequest) SetCorpId(v string) *CreateVideoSummaryTaskRequest {
	s.CorpId = &v
	return s
}

func (s *CreateVideoSummaryTaskRequest) SetDeviceId(v string) *CreateVideoSummaryTaskRequest {
	s.DeviceId = &v
	return s
}

func (s *CreateVideoSummaryTaskRequest) SetStartTimeStamp(v string) *CreateVideoSummaryTaskRequest {
	s.StartTimeStamp = &v
	return s
}

func (s *CreateVideoSummaryTaskRequest) SetEndTimeStamp(v string) *CreateVideoSummaryTaskRequest {
	s.EndTimeStamp = &v
	return s
}

func (s *CreateVideoSummaryTaskRequest) SetOptionList(v string) *CreateVideoSummaryTaskRequest {
	s.OptionList = &v
	return s
}

func (s *CreateVideoSummaryTaskRequest) SetLiveVideoSummary(v string) *CreateVideoSummaryTaskRequest {
	s.LiveVideoSummary = &v
	return s
}

type CreateVideoSummaryTaskResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s CreateVideoSummaryTaskResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateVideoSummaryTaskResponse) GoString() string {
	return s.String()
}

func (s *CreateVideoSummaryTaskResponse) SetCode(v string) *CreateVideoSummaryTaskResponse {
	s.Code = &v
	return s
}

func (s *CreateVideoSummaryTaskResponse) SetMessage(v string) *CreateVideoSummaryTaskResponse {
	s.Message = &v
	return s
}

func (s *CreateVideoSummaryTaskResponse) SetRequestId(v string) *CreateVideoSummaryTaskResponse {
	s.RequestId = &v
	return s
}

func (s *CreateVideoSummaryTaskResponse) SetData(v string) *CreateVideoSummaryTaskResponse {
	s.Data = &v
	return s
}

type ListMotorAlgorithmResultsRequest struct {
	CorpId        *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	AlgorithmType *string `json:"AlgorithmType,omitempty" xml:"AlgorithmType,omitempty" require:"true"`
	DataSourceId  *string `json:"DataSourceId,omitempty" xml:"DataSourceId,omitempty"`
	StartTime     *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime       *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	PageNumber    *string `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize      *string `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	PlateNumber   *string `json:"PlateNumber,omitempty" xml:"PlateNumber,omitempty"`
}

func (s ListMotorAlgorithmResultsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListMotorAlgorithmResultsRequest) GoString() string {
	return s.String()
}

func (s *ListMotorAlgorithmResultsRequest) SetCorpId(v string) *ListMotorAlgorithmResultsRequest {
	s.CorpId = &v
	return s
}

func (s *ListMotorAlgorithmResultsRequest) SetAlgorithmType(v string) *ListMotorAlgorithmResultsRequest {
	s.AlgorithmType = &v
	return s
}

func (s *ListMotorAlgorithmResultsRequest) SetDataSourceId(v string) *ListMotorAlgorithmResultsRequest {
	s.DataSourceId = &v
	return s
}

func (s *ListMotorAlgorithmResultsRequest) SetStartTime(v string) *ListMotorAlgorithmResultsRequest {
	s.StartTime = &v
	return s
}

func (s *ListMotorAlgorithmResultsRequest) SetEndTime(v string) *ListMotorAlgorithmResultsRequest {
	s.EndTime = &v
	return s
}

func (s *ListMotorAlgorithmResultsRequest) SetPageNumber(v string) *ListMotorAlgorithmResultsRequest {
	s.PageNumber = &v
	return s
}

func (s *ListMotorAlgorithmResultsRequest) SetPageSize(v string) *ListMotorAlgorithmResultsRequest {
	s.PageSize = &v
	return s
}

func (s *ListMotorAlgorithmResultsRequest) SetPlateNumber(v string) *ListMotorAlgorithmResultsRequest {
	s.PlateNumber = &v
	return s
}

type ListMotorAlgorithmResultsResponse struct {
	Code      *string                                `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                                `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ListMotorAlgorithmResultsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListMotorAlgorithmResultsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListMotorAlgorithmResultsResponse) GoString() string {
	return s.String()
}

func (s *ListMotorAlgorithmResultsResponse) SetCode(v string) *ListMotorAlgorithmResultsResponse {
	s.Code = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponse) SetMessage(v string) *ListMotorAlgorithmResultsResponse {
	s.Message = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponse) SetRequestId(v string) *ListMotorAlgorithmResultsResponse {
	s.RequestId = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponse) SetData(v *ListMotorAlgorithmResultsResponseData) *ListMotorAlgorithmResultsResponse {
	s.Data = v
	return s
}

type ListMotorAlgorithmResultsResponseData struct {
	PageNumber *int                                            `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                            `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                                            `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	TotalPage  *int                                            `json:"TotalPage,omitempty" xml:"TotalPage,omitempty" require:"true"`
	Records    []*ListMotorAlgorithmResultsResponseDataRecords `json:"Records,omitempty" xml:"Records,omitempty" require:"true" type:"Repeated"`
}

func (s ListMotorAlgorithmResultsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListMotorAlgorithmResultsResponseData) GoString() string {
	return s.String()
}

func (s *ListMotorAlgorithmResultsResponseData) SetPageNumber(v int) *ListMotorAlgorithmResultsResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseData) SetPageSize(v int) *ListMotorAlgorithmResultsResponseData {
	s.PageSize = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseData) SetTotalCount(v int) *ListMotorAlgorithmResultsResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseData) SetTotalPage(v int) *ListMotorAlgorithmResultsResponseData {
	s.TotalPage = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseData) SetRecords(v []*ListMotorAlgorithmResultsResponseDataRecords) *ListMotorAlgorithmResultsResponseData {
	s.Records = v
	return s
}

type ListMotorAlgorithmResultsResponseDataRecords struct {
	CorpId           *string  `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	DataSourceId     *string  `json:"DataSourceId,omitempty" xml:"DataSourceId,omitempty" require:"true"`
	LeftTopX         *float32 `json:"LeftTopX,omitempty" xml:"LeftTopX,omitempty" require:"true"`
	LeftTopY         *float32 `json:"LeftTopY,omitempty" xml:"LeftTopY,omitempty" require:"true"`
	MotorId          *string  `json:"MotorId,omitempty" xml:"MotorId,omitempty" require:"true"`
	PicUrlPath       *string  `json:"PicUrlPath,omitempty" xml:"PicUrlPath,omitempty" require:"true"`
	PlateNumber      *string  `json:"PlateNumber,omitempty" xml:"PlateNumber,omitempty" require:"true"`
	RightBottomX     *float32 `json:"RightBottomX,omitempty" xml:"RightBottomX,omitempty" require:"true"`
	RightBottomY     *float32 `json:"RightBottomY,omitempty" xml:"RightBottomY,omitempty" require:"true"`
	ShotTime         *string  `json:"ShotTime,omitempty" xml:"ShotTime,omitempty" require:"true"`
	TargetPicUrlPath *string  `json:"TargetPicUrlPath,omitempty" xml:"TargetPicUrlPath,omitempty" require:"true"`
	MotorStyle       *string  `json:"MotorStyle,omitempty" xml:"MotorStyle,omitempty" require:"true"`
	MotorModel       *string  `json:"MotorModel,omitempty" xml:"MotorModel,omitempty" require:"true"`
}

func (s ListMotorAlgorithmResultsResponseDataRecords) String() string {
	return tea.Prettify(s)
}

func (s ListMotorAlgorithmResultsResponseDataRecords) GoString() string {
	return s.String()
}

func (s *ListMotorAlgorithmResultsResponseDataRecords) SetCorpId(v string) *ListMotorAlgorithmResultsResponseDataRecords {
	s.CorpId = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseDataRecords) SetDataSourceId(v string) *ListMotorAlgorithmResultsResponseDataRecords {
	s.DataSourceId = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseDataRecords) SetLeftTopX(v float32) *ListMotorAlgorithmResultsResponseDataRecords {
	s.LeftTopX = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseDataRecords) SetLeftTopY(v float32) *ListMotorAlgorithmResultsResponseDataRecords {
	s.LeftTopY = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseDataRecords) SetMotorId(v string) *ListMotorAlgorithmResultsResponseDataRecords {
	s.MotorId = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseDataRecords) SetPicUrlPath(v string) *ListMotorAlgorithmResultsResponseDataRecords {
	s.PicUrlPath = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseDataRecords) SetPlateNumber(v string) *ListMotorAlgorithmResultsResponseDataRecords {
	s.PlateNumber = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseDataRecords) SetRightBottomX(v float32) *ListMotorAlgorithmResultsResponseDataRecords {
	s.RightBottomX = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseDataRecords) SetRightBottomY(v float32) *ListMotorAlgorithmResultsResponseDataRecords {
	s.RightBottomY = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseDataRecords) SetShotTime(v string) *ListMotorAlgorithmResultsResponseDataRecords {
	s.ShotTime = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseDataRecords) SetTargetPicUrlPath(v string) *ListMotorAlgorithmResultsResponseDataRecords {
	s.TargetPicUrlPath = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseDataRecords) SetMotorStyle(v string) *ListMotorAlgorithmResultsResponseDataRecords {
	s.MotorStyle = &v
	return s
}

func (s *ListMotorAlgorithmResultsResponseDataRecords) SetMotorModel(v string) *ListMotorAlgorithmResultsResponseDataRecords {
	s.MotorModel = &v
	return s
}

type ListFaceAlgorithmResultsRequest struct {
	CorpId        *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	AlgorithmType *string `json:"AlgorithmType,omitempty" xml:"AlgorithmType,omitempty" require:"true"`
	DataSourceId  *string `json:"DataSourceId,omitempty" xml:"DataSourceId,omitempty"`
	StartTime     *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime       *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	PageNumber    *string `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize      *string `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
}

func (s ListFaceAlgorithmResultsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListFaceAlgorithmResultsRequest) GoString() string {
	return s.String()
}

func (s *ListFaceAlgorithmResultsRequest) SetCorpId(v string) *ListFaceAlgorithmResultsRequest {
	s.CorpId = &v
	return s
}

func (s *ListFaceAlgorithmResultsRequest) SetAlgorithmType(v string) *ListFaceAlgorithmResultsRequest {
	s.AlgorithmType = &v
	return s
}

func (s *ListFaceAlgorithmResultsRequest) SetDataSourceId(v string) *ListFaceAlgorithmResultsRequest {
	s.DataSourceId = &v
	return s
}

func (s *ListFaceAlgorithmResultsRequest) SetStartTime(v string) *ListFaceAlgorithmResultsRequest {
	s.StartTime = &v
	return s
}

func (s *ListFaceAlgorithmResultsRequest) SetEndTime(v string) *ListFaceAlgorithmResultsRequest {
	s.EndTime = &v
	return s
}

func (s *ListFaceAlgorithmResultsRequest) SetPageNumber(v string) *ListFaceAlgorithmResultsRequest {
	s.PageNumber = &v
	return s
}

func (s *ListFaceAlgorithmResultsRequest) SetPageSize(v string) *ListFaceAlgorithmResultsRequest {
	s.PageSize = &v
	return s
}

type ListFaceAlgorithmResultsResponse struct {
	Code      *string                               `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                               `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ListFaceAlgorithmResultsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListFaceAlgorithmResultsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListFaceAlgorithmResultsResponse) GoString() string {
	return s.String()
}

func (s *ListFaceAlgorithmResultsResponse) SetCode(v string) *ListFaceAlgorithmResultsResponse {
	s.Code = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponse) SetMessage(v string) *ListFaceAlgorithmResultsResponse {
	s.Message = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponse) SetRequestId(v string) *ListFaceAlgorithmResultsResponse {
	s.RequestId = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponse) SetData(v *ListFaceAlgorithmResultsResponseData) *ListFaceAlgorithmResultsResponse {
	s.Data = v
	return s
}

type ListFaceAlgorithmResultsResponseData struct {
	PageNumber *int                                           `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                                           `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                                           `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	TotalPage  *int                                           `json:"TotalPage,omitempty" xml:"TotalPage,omitempty" require:"true"`
	Records    []*ListFaceAlgorithmResultsResponseDataRecords `json:"Records,omitempty" xml:"Records,omitempty" require:"true" type:"Repeated"`
}

func (s ListFaceAlgorithmResultsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListFaceAlgorithmResultsResponseData) GoString() string {
	return s.String()
}

func (s *ListFaceAlgorithmResultsResponseData) SetPageNumber(v int) *ListFaceAlgorithmResultsResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseData) SetPageSize(v int) *ListFaceAlgorithmResultsResponseData {
	s.PageSize = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseData) SetTotalCount(v int) *ListFaceAlgorithmResultsResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseData) SetTotalPage(v int) *ListFaceAlgorithmResultsResponseData {
	s.TotalPage = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseData) SetRecords(v []*ListFaceAlgorithmResultsResponseDataRecords) *ListFaceAlgorithmResultsResponseData {
	s.Records = v
	return s
}

type ListFaceAlgorithmResultsResponseDataRecords struct {
	FaceId           *string  `json:"FaceId,omitempty" xml:"FaceId,omitempty" require:"true"`
	CorpId           *string  `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	DataSourceId     *string  `json:"DataSourceId,omitempty" xml:"DataSourceId,omitempty" require:"true"`
	ShotTime         *string  `json:"ShotTime,omitempty" xml:"ShotTime,omitempty" require:"true"`
	GenderCode       *string  `json:"GenderCode,omitempty" xml:"GenderCode,omitempty" require:"true"`
	MinAge           *string  `json:"MinAge,omitempty" xml:"MinAge,omitempty" require:"true"`
	MaxAge           *string  `json:"MaxAge,omitempty" xml:"MaxAge,omitempty" require:"true"`
	CapStyle         *string  `json:"CapStyle,omitempty" xml:"CapStyle,omitempty" require:"true"`
	HairStyle        *string  `json:"HairStyle,omitempty" xml:"HairStyle,omitempty" require:"true"`
	LeftTopX         *float32 `json:"LeftTopX,omitempty" xml:"LeftTopX,omitempty" require:"true"`
	LeftTopY         *float32 `json:"LeftTopY,omitempty" xml:"LeftTopY,omitempty" require:"true"`
	RightBottomX     *float32 `json:"RightBottomX,omitempty" xml:"RightBottomX,omitempty" require:"true"`
	RightBottomY     *float32 `json:"RightBottomY,omitempty" xml:"RightBottomY,omitempty" require:"true"`
	PicUrlPath       *string  `json:"PicUrlPath,omitempty" xml:"PicUrlPath,omitempty" require:"true"`
	TargetPicUrlPath *string  `json:"TargetPicUrlPath,omitempty" xml:"TargetPicUrlPath,omitempty" require:"true"`
}

func (s ListFaceAlgorithmResultsResponseDataRecords) String() string {
	return tea.Prettify(s)
}

func (s ListFaceAlgorithmResultsResponseDataRecords) GoString() string {
	return s.String()
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetFaceId(v string) *ListFaceAlgorithmResultsResponseDataRecords {
	s.FaceId = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetCorpId(v string) *ListFaceAlgorithmResultsResponseDataRecords {
	s.CorpId = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetDataSourceId(v string) *ListFaceAlgorithmResultsResponseDataRecords {
	s.DataSourceId = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetShotTime(v string) *ListFaceAlgorithmResultsResponseDataRecords {
	s.ShotTime = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetGenderCode(v string) *ListFaceAlgorithmResultsResponseDataRecords {
	s.GenderCode = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetMinAge(v string) *ListFaceAlgorithmResultsResponseDataRecords {
	s.MinAge = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetMaxAge(v string) *ListFaceAlgorithmResultsResponseDataRecords {
	s.MaxAge = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetCapStyle(v string) *ListFaceAlgorithmResultsResponseDataRecords {
	s.CapStyle = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetHairStyle(v string) *ListFaceAlgorithmResultsResponseDataRecords {
	s.HairStyle = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetLeftTopX(v float32) *ListFaceAlgorithmResultsResponseDataRecords {
	s.LeftTopX = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetLeftTopY(v float32) *ListFaceAlgorithmResultsResponseDataRecords {
	s.LeftTopY = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetRightBottomX(v float32) *ListFaceAlgorithmResultsResponseDataRecords {
	s.RightBottomX = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetRightBottomY(v float32) *ListFaceAlgorithmResultsResponseDataRecords {
	s.RightBottomY = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetPicUrlPath(v string) *ListFaceAlgorithmResultsResponseDataRecords {
	s.PicUrlPath = &v
	return s
}

func (s *ListFaceAlgorithmResultsResponseDataRecords) SetTargetPicUrlPath(v string) *ListFaceAlgorithmResultsResponseDataRecords {
	s.TargetPicUrlPath = &v
	return s
}

type ListMetricsRequest struct {
	CorpId        *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	TagCode       *string `json:"TagCode,omitempty" xml:"TagCode,omitempty" require:"true"`
	AggregateType *string `json:"AggregateType,omitempty" xml:"AggregateType,omitempty" require:"true"`
	StartTime     *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime       *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	PageNumber    *string `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize      *string `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
}

func (s ListMetricsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListMetricsRequest) GoString() string {
	return s.String()
}

func (s *ListMetricsRequest) SetCorpId(v string) *ListMetricsRequest {
	s.CorpId = &v
	return s
}

func (s *ListMetricsRequest) SetTagCode(v string) *ListMetricsRequest {
	s.TagCode = &v
	return s
}

func (s *ListMetricsRequest) SetAggregateType(v string) *ListMetricsRequest {
	s.AggregateType = &v
	return s
}

func (s *ListMetricsRequest) SetStartTime(v string) *ListMetricsRequest {
	s.StartTime = &v
	return s
}

func (s *ListMetricsRequest) SetEndTime(v string) *ListMetricsRequest {
	s.EndTime = &v
	return s
}

func (s *ListMetricsRequest) SetPageNumber(v string) *ListMetricsRequest {
	s.PageNumber = &v
	return s
}

func (s *ListMetricsRequest) SetPageSize(v string) *ListMetricsRequest {
	s.PageSize = &v
	return s
}

type ListMetricsResponse struct {
	Code      *string                  `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                  `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ListMetricsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListMetricsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListMetricsResponse) GoString() string {
	return s.String()
}

func (s *ListMetricsResponse) SetCode(v string) *ListMetricsResponse {
	s.Code = &v
	return s
}

func (s *ListMetricsResponse) SetMessage(v string) *ListMetricsResponse {
	s.Message = &v
	return s
}

func (s *ListMetricsResponse) SetRequestId(v string) *ListMetricsResponse {
	s.RequestId = &v
	return s
}

func (s *ListMetricsResponse) SetData(v *ListMetricsResponseData) *ListMetricsResponse {
	s.Data = v
	return s
}

type ListMetricsResponseData struct {
	PageNumber *int                              `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                              `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                              `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	TotalPage  *int                              `json:"TotalPage,omitempty" xml:"TotalPage,omitempty" require:"true"`
	Records    []*ListMetricsResponseDataRecords `json:"Records,omitempty" xml:"Records,omitempty" require:"true" type:"Repeated"`
}

func (s ListMetricsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListMetricsResponseData) GoString() string {
	return s.String()
}

func (s *ListMetricsResponseData) SetPageNumber(v int) *ListMetricsResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListMetricsResponseData) SetPageSize(v int) *ListMetricsResponseData {
	s.PageSize = &v
	return s
}

func (s *ListMetricsResponseData) SetTotalCount(v int) *ListMetricsResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListMetricsResponseData) SetTotalPage(v int) *ListMetricsResponseData {
	s.TotalPage = &v
	return s
}

func (s *ListMetricsResponseData) SetRecords(v []*ListMetricsResponseDataRecords) *ListMetricsResponseData {
	s.Records = v
	return s
}

type ListMetricsResponseDataRecords struct {
	DateTime  *string `json:"DateTime,omitempty" xml:"DateTime,omitempty" require:"true"`
	TagCode   *string `json:"TagCode,omitempty" xml:"TagCode,omitempty" require:"true"`
	TagValue  *string `json:"TagValue,omitempty" xml:"TagValue,omitempty" require:"true"`
	TagMetric *string `json:"TagMetric,omitempty" xml:"TagMetric,omitempty" require:"true"`
}

func (s ListMetricsResponseDataRecords) String() string {
	return tea.Prettify(s)
}

func (s ListMetricsResponseDataRecords) GoString() string {
	return s.String()
}

func (s *ListMetricsResponseDataRecords) SetDateTime(v string) *ListMetricsResponseDataRecords {
	s.DateTime = &v
	return s
}

func (s *ListMetricsResponseDataRecords) SetTagCode(v string) *ListMetricsResponseDataRecords {
	s.TagCode = &v
	return s
}

func (s *ListMetricsResponseDataRecords) SetTagValue(v string) *ListMetricsResponseDataRecords {
	s.TagValue = &v
	return s
}

func (s *ListMetricsResponseDataRecords) SetTagMetric(v string) *ListMetricsResponseDataRecords {
	s.TagMetric = &v
	return s
}

type DeleteRecordsRequest struct {
	CorpId        *string `json:"CorpId,omitempty" xml:"CorpId,omitempty"`
	AlgorithmType *string `json:"AlgorithmType,omitempty" xml:"AlgorithmType,omitempty"`
	AttributeName *string `json:"AttributeName,omitempty" xml:"AttributeName,omitempty"`
	OperatorType  *string `json:"OperatorType,omitempty" xml:"OperatorType,omitempty"`
	Value         *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s DeleteRecordsRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteRecordsRequest) GoString() string {
	return s.String()
}

func (s *DeleteRecordsRequest) SetCorpId(v string) *DeleteRecordsRequest {
	s.CorpId = &v
	return s
}

func (s *DeleteRecordsRequest) SetAlgorithmType(v string) *DeleteRecordsRequest {
	s.AlgorithmType = &v
	return s
}

func (s *DeleteRecordsRequest) SetAttributeName(v string) *DeleteRecordsRequest {
	s.AttributeName = &v
	return s
}

func (s *DeleteRecordsRequest) SetOperatorType(v string) *DeleteRecordsRequest {
	s.OperatorType = &v
	return s
}

func (s *DeleteRecordsRequest) SetValue(v string) *DeleteRecordsRequest {
	s.Value = &v
	return s
}

type DeleteRecordsResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s DeleteRecordsResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteRecordsResponse) GoString() string {
	return s.String()
}

func (s *DeleteRecordsResponse) SetCode(v string) *DeleteRecordsResponse {
	s.Code = &v
	return s
}

func (s *DeleteRecordsResponse) SetMessage(v string) *DeleteRecordsResponse {
	s.Message = &v
	return s
}

func (s *DeleteRecordsResponse) SetRequestId(v string) *DeleteRecordsResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteRecordsResponse) SetData(v string) *DeleteRecordsResponse {
	s.Data = &v
	return s
}

type RecognizeFaceQualityRequest struct {
	CorpId     *string `json:"CorpId,omitempty" xml:"CorpId,omitempty"`
	PicContent *string `json:"PicContent,omitempty" xml:"PicContent,omitempty"`
	PicFormat  *string `json:"PicFormat,omitempty" xml:"PicFormat,omitempty"`
	PicUrl     *string `json:"PicUrl,omitempty" xml:"PicUrl,omitempty"`
}

func (s RecognizeFaceQualityRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeFaceQualityRequest) GoString() string {
	return s.String()
}

func (s *RecognizeFaceQualityRequest) SetCorpId(v string) *RecognizeFaceQualityRequest {
	s.CorpId = &v
	return s
}

func (s *RecognizeFaceQualityRequest) SetPicContent(v string) *RecognizeFaceQualityRequest {
	s.PicContent = &v
	return s
}

func (s *RecognizeFaceQualityRequest) SetPicFormat(v string) *RecognizeFaceQualityRequest {
	s.PicFormat = &v
	return s
}

func (s *RecognizeFaceQualityRequest) SetPicUrl(v string) *RecognizeFaceQualityRequest {
	s.PicUrl = &v
	return s
}

type RecognizeFaceQualityResponse struct {
	Code      *string                           `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                           `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeFaceQualityResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeFaceQualityResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeFaceQualityResponse) GoString() string {
	return s.String()
}

func (s *RecognizeFaceQualityResponse) SetCode(v string) *RecognizeFaceQualityResponse {
	s.Code = &v
	return s
}

func (s *RecognizeFaceQualityResponse) SetMessage(v string) *RecognizeFaceQualityResponse {
	s.Message = &v
	return s
}

func (s *RecognizeFaceQualityResponse) SetRequestId(v string) *RecognizeFaceQualityResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeFaceQualityResponse) SetData(v *RecognizeFaceQualityResponseData) *RecognizeFaceQualityResponse {
	s.Data = v
	return s
}

type RecognizeFaceQualityResponseData struct {
	QualityScore *string                                     `json:"QualityScore,omitempty" xml:"QualityScore,omitempty" require:"true"`
	Description  *string                                     `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	Attributes   *RecognizeFaceQualityResponseDataAttributes `json:"Attributes,omitempty" xml:"Attributes,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeFaceQualityResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeFaceQualityResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeFaceQualityResponseData) SetQualityScore(v string) *RecognizeFaceQualityResponseData {
	s.QualityScore = &v
	return s
}

func (s *RecognizeFaceQualityResponseData) SetDescription(v string) *RecognizeFaceQualityResponseData {
	s.Description = &v
	return s
}

func (s *RecognizeFaceQualityResponseData) SetAttributes(v *RecognizeFaceQualityResponseDataAttributes) *RecognizeFaceQualityResponseData {
	s.Attributes = v
	return s
}

type RecognizeFaceQualityResponseDataAttributes struct {
	LeftTopX               *int    `json:"LeftTopX,omitempty" xml:"LeftTopX,omitempty" require:"true"`
	LeftTopY               *int    `json:"LeftTopY,omitempty" xml:"LeftTopY,omitempty" require:"true"`
	RightBottomX           *int    `json:"RightBottomX,omitempty" xml:"RightBottomX,omitempty" require:"true"`
	RightBottomY           *int    `json:"RightBottomY,omitempty" xml:"RightBottomY,omitempty" require:"true"`
	TargetImageStoragePath *string `json:"TargetImageStoragePath,omitempty" xml:"TargetImageStoragePath,omitempty" require:"true"`
	FaceStyle              *string `json:"FaceStyle,omitempty" xml:"FaceStyle,omitempty" require:"true"`
	FaceQuality            *string `json:"FaceQuality,omitempty" xml:"FaceQuality,omitempty" require:"true"`
	FaceScore              *string `json:"FaceScore,omitempty" xml:"FaceScore,omitempty" require:"true"`
}

func (s RecognizeFaceQualityResponseDataAttributes) String() string {
	return tea.Prettify(s)
}

func (s RecognizeFaceQualityResponseDataAttributes) GoString() string {
	return s.String()
}

func (s *RecognizeFaceQualityResponseDataAttributes) SetLeftTopX(v int) *RecognizeFaceQualityResponseDataAttributes {
	s.LeftTopX = &v
	return s
}

func (s *RecognizeFaceQualityResponseDataAttributes) SetLeftTopY(v int) *RecognizeFaceQualityResponseDataAttributes {
	s.LeftTopY = &v
	return s
}

func (s *RecognizeFaceQualityResponseDataAttributes) SetRightBottomX(v int) *RecognizeFaceQualityResponseDataAttributes {
	s.RightBottomX = &v
	return s
}

func (s *RecognizeFaceQualityResponseDataAttributes) SetRightBottomY(v int) *RecognizeFaceQualityResponseDataAttributes {
	s.RightBottomY = &v
	return s
}

func (s *RecognizeFaceQualityResponseDataAttributes) SetTargetImageStoragePath(v string) *RecognizeFaceQualityResponseDataAttributes {
	s.TargetImageStoragePath = &v
	return s
}

func (s *RecognizeFaceQualityResponseDataAttributes) SetFaceStyle(v string) *RecognizeFaceQualityResponseDataAttributes {
	s.FaceStyle = &v
	return s
}

func (s *RecognizeFaceQualityResponseDataAttributes) SetFaceQuality(v string) *RecognizeFaceQualityResponseDataAttributes {
	s.FaceQuality = &v
	return s
}

func (s *RecognizeFaceQualityResponseDataAttributes) SetFaceScore(v string) *RecognizeFaceQualityResponseDataAttributes {
	s.FaceScore = &v
	return s
}

type ListPersonsRequest struct {
	CorpId   *string `json:"CorpId,omitempty" xml:"CorpId,omitempty"`
	PageNo   *string `json:"PageNo,omitempty" xml:"PageNo,omitempty"`
	PageSize *string `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s ListPersonsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListPersonsRequest) GoString() string {
	return s.String()
}

func (s *ListPersonsRequest) SetCorpId(v string) *ListPersonsRequest {
	s.CorpId = &v
	return s
}

func (s *ListPersonsRequest) SetPageNo(v string) *ListPersonsRequest {
	s.PageNo = &v
	return s
}

func (s *ListPersonsRequest) SetPageSize(v string) *ListPersonsRequest {
	s.PageSize = &v
	return s
}

type ListPersonsResponse struct {
	Code      *string                  `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                  `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ListPersonsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListPersonsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListPersonsResponse) GoString() string {
	return s.String()
}

func (s *ListPersonsResponse) SetCode(v string) *ListPersonsResponse {
	s.Code = &v
	return s
}

func (s *ListPersonsResponse) SetMessage(v string) *ListPersonsResponse {
	s.Message = &v
	return s
}

func (s *ListPersonsResponse) SetRequestId(v string) *ListPersonsResponse {
	s.RequestId = &v
	return s
}

func (s *ListPersonsResponse) SetData(v *ListPersonsResponseData) *ListPersonsResponse {
	s.Data = v
	return s
}

type ListPersonsResponseData struct {
	PageNo     *string                           `json:"PageNo,omitempty" xml:"PageNo,omitempty" require:"true"`
	PageSize   *string                           `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *string                           `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	TotalPage  *string                           `json:"TotalPage,omitempty" xml:"TotalPage,omitempty" require:"true"`
	Records    []*ListPersonsResponseDataRecords `json:"Records,omitempty" xml:"Records,omitempty" require:"true" type:"Repeated"`
}

func (s ListPersonsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListPersonsResponseData) GoString() string {
	return s.String()
}

func (s *ListPersonsResponseData) SetPageNo(v string) *ListPersonsResponseData {
	s.PageNo = &v
	return s
}

func (s *ListPersonsResponseData) SetPageSize(v string) *ListPersonsResponseData {
	s.PageSize = &v
	return s
}

func (s *ListPersonsResponseData) SetTotalCount(v string) *ListPersonsResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListPersonsResponseData) SetTotalPage(v string) *ListPersonsResponseData {
	s.TotalPage = &v
	return s
}

func (s *ListPersonsResponseData) SetRecords(v []*ListPersonsResponseDataRecords) *ListPersonsResponseData {
	s.Records = v
	return s
}

type ListPersonsResponseDataRecords struct {
	FirstAppearTime *string                                  `json:"FirstAppearTime,omitempty" xml:"FirstAppearTime,omitempty" require:"true"`
	PersonId        *string                                  `json:"PersonId,omitempty" xml:"PersonId,omitempty" require:"true"`
	PicUrl          *string                                  `json:"PicUrl,omitempty" xml:"PicUrl,omitempty" require:"true"`
	TagList         []*ListPersonsResponseDataRecordsTagList `json:"TagList,omitempty" xml:"TagList,omitempty" require:"true" type:"Repeated"`
}

func (s ListPersonsResponseDataRecords) String() string {
	return tea.Prettify(s)
}

func (s ListPersonsResponseDataRecords) GoString() string {
	return s.String()
}

func (s *ListPersonsResponseDataRecords) SetFirstAppearTime(v string) *ListPersonsResponseDataRecords {
	s.FirstAppearTime = &v
	return s
}

func (s *ListPersonsResponseDataRecords) SetPersonId(v string) *ListPersonsResponseDataRecords {
	s.PersonId = &v
	return s
}

func (s *ListPersonsResponseDataRecords) SetPicUrl(v string) *ListPersonsResponseDataRecords {
	s.PicUrl = &v
	return s
}

func (s *ListPersonsResponseDataRecords) SetTagList(v []*ListPersonsResponseDataRecordsTagList) *ListPersonsResponseDataRecords {
	s.TagList = v
	return s
}

type ListPersonsResponseDataRecordsTagList struct {
	TagCode    *string `json:"TagCode,omitempty" xml:"TagCode,omitempty" require:"true"`
	TagName    *string `json:"TagName,omitempty" xml:"TagName,omitempty" require:"true"`
	TagValue   *string `json:"TagValue,omitempty" xml:"TagValue,omitempty" require:"true"`
	TagValueId *string `json:"TagValueId,omitempty" xml:"TagValueId,omitempty" require:"true"`
}

func (s ListPersonsResponseDataRecordsTagList) String() string {
	return tea.Prettify(s)
}

func (s ListPersonsResponseDataRecordsTagList) GoString() string {
	return s.String()
}

func (s *ListPersonsResponseDataRecordsTagList) SetTagCode(v string) *ListPersonsResponseDataRecordsTagList {
	s.TagCode = &v
	return s
}

func (s *ListPersonsResponseDataRecordsTagList) SetTagName(v string) *ListPersonsResponseDataRecordsTagList {
	s.TagName = &v
	return s
}

func (s *ListPersonsResponseDataRecordsTagList) SetTagValue(v string) *ListPersonsResponseDataRecordsTagList {
	s.TagValue = &v
	return s
}

func (s *ListPersonsResponseDataRecordsTagList) SetTagValueId(v string) *ListPersonsResponseDataRecordsTagList {
	s.TagValueId = &v
	return s
}

type GetPersonDetailRequest struct {
	CorpId   *string `json:"CorpId,omitempty" xml:"CorpId,omitempty"`
	PersonID *string `json:"PersonID,omitempty" xml:"PersonID,omitempty"`
}

func (s GetPersonDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s GetPersonDetailRequest) GoString() string {
	return s.String()
}

func (s *GetPersonDetailRequest) SetCorpId(v string) *GetPersonDetailRequest {
	s.CorpId = &v
	return s
}

func (s *GetPersonDetailRequest) SetPersonID(v string) *GetPersonDetailRequest {
	s.PersonID = &v
	return s
}

type GetPersonDetailResponse struct {
	Code      *string                      `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                      `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *GetPersonDetailResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetPersonDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s GetPersonDetailResponse) GoString() string {
	return s.String()
}

func (s *GetPersonDetailResponse) SetCode(v string) *GetPersonDetailResponse {
	s.Code = &v
	return s
}

func (s *GetPersonDetailResponse) SetMessage(v string) *GetPersonDetailResponse {
	s.Message = &v
	return s
}

func (s *GetPersonDetailResponse) SetRequestId(v string) *GetPersonDetailResponse {
	s.RequestId = &v
	return s
}

func (s *GetPersonDetailResponse) SetData(v *GetPersonDetailResponseData) *GetPersonDetailResponse {
	s.Data = v
	return s
}

type GetPersonDetailResponseData struct {
	PicUrl   *string                               `json:"PicUrl,omitempty" xml:"PicUrl,omitempty" require:"true"`
	PersonId *string                               `json:"PersonId,omitempty" xml:"PersonId,omitempty" require:"true"`
	TagList  []*GetPersonDetailResponseDataTagList `json:"TagList,omitempty" xml:"TagList,omitempty" require:"true" type:"Repeated"`
}

func (s GetPersonDetailResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetPersonDetailResponseData) GoString() string {
	return s.String()
}

func (s *GetPersonDetailResponseData) SetPicUrl(v string) *GetPersonDetailResponseData {
	s.PicUrl = &v
	return s
}

func (s *GetPersonDetailResponseData) SetPersonId(v string) *GetPersonDetailResponseData {
	s.PersonId = &v
	return s
}

func (s *GetPersonDetailResponseData) SetTagList(v []*GetPersonDetailResponseDataTagList) *GetPersonDetailResponseData {
	s.TagList = v
	return s
}

type GetPersonDetailResponseDataTagList struct {
	TagCode    *string `json:"TagCode,omitempty" xml:"TagCode,omitempty" require:"true"`
	TagName    *string `json:"TagName,omitempty" xml:"TagName,omitempty" require:"true"`
	TagValue   *string `json:"TagValue,omitempty" xml:"TagValue,omitempty" require:"true"`
	TagValueId *string `json:"TagValueId,omitempty" xml:"TagValueId,omitempty" require:"true"`
}

func (s GetPersonDetailResponseDataTagList) String() string {
	return tea.Prettify(s)
}

func (s GetPersonDetailResponseDataTagList) GoString() string {
	return s.String()
}

func (s *GetPersonDetailResponseDataTagList) SetTagCode(v string) *GetPersonDetailResponseDataTagList {
	s.TagCode = &v
	return s
}

func (s *GetPersonDetailResponseDataTagList) SetTagName(v string) *GetPersonDetailResponseDataTagList {
	s.TagName = &v
	return s
}

func (s *GetPersonDetailResponseDataTagList) SetTagValue(v string) *GetPersonDetailResponseDataTagList {
	s.TagValue = &v
	return s
}

func (s *GetPersonDetailResponseDataTagList) SetTagValueId(v string) *GetPersonDetailResponseDataTagList {
	s.TagValueId = &v
	return s
}

type GetFaceOptionsRequest struct {
	CorpId *string `json:"CorpId,omitempty" xml:"CorpId,omitempty"`
}

func (s GetFaceOptionsRequest) String() string {
	return tea.Prettify(s)
}

func (s GetFaceOptionsRequest) GoString() string {
	return s.String()
}

func (s *GetFaceOptionsRequest) SetCorpId(v string) *GetFaceOptionsRequest {
	s.CorpId = &v
	return s
}

type GetFaceOptionsResponse struct {
	Code      *string                       `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                       `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      []*GetFaceOptionsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Repeated"`
}

func (s GetFaceOptionsResponse) String() string {
	return tea.Prettify(s)
}

func (s GetFaceOptionsResponse) GoString() string {
	return s.String()
}

func (s *GetFaceOptionsResponse) SetCode(v string) *GetFaceOptionsResponse {
	s.Code = &v
	return s
}

func (s *GetFaceOptionsResponse) SetMessage(v string) *GetFaceOptionsResponse {
	s.Message = &v
	return s
}

func (s *GetFaceOptionsResponse) SetRequestId(v string) *GetFaceOptionsResponse {
	s.RequestId = &v
	return s
}

func (s *GetFaceOptionsResponse) SetData(v []*GetFaceOptionsResponseData) *GetFaceOptionsResponse {
	s.Data = v
	return s
}

type GetFaceOptionsResponseData struct {
	Key        *string                                 `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Name       *string                                 `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	OptionList []*GetFaceOptionsResponseDataOptionList `json:"OptionList,omitempty" xml:"OptionList,omitempty" require:"true" type:"Repeated"`
}

func (s GetFaceOptionsResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetFaceOptionsResponseData) GoString() string {
	return s.String()
}

func (s *GetFaceOptionsResponseData) SetKey(v string) *GetFaceOptionsResponseData {
	s.Key = &v
	return s
}

func (s *GetFaceOptionsResponseData) SetName(v string) *GetFaceOptionsResponseData {
	s.Name = &v
	return s
}

func (s *GetFaceOptionsResponseData) SetOptionList(v []*GetFaceOptionsResponseDataOptionList) *GetFaceOptionsResponseData {
	s.OptionList = v
	return s
}

type GetFaceOptionsResponseDataOptionList struct {
	Key  *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Name *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s GetFaceOptionsResponseDataOptionList) String() string {
	return tea.Prettify(s)
}

func (s GetFaceOptionsResponseDataOptionList) GoString() string {
	return s.String()
}

func (s *GetFaceOptionsResponseDataOptionList) SetKey(v string) *GetFaceOptionsResponseDataOptionList {
	s.Key = &v
	return s
}

func (s *GetFaceOptionsResponseDataOptionList) SetName(v string) *GetFaceOptionsResponseDataOptionList {
	s.Name = &v
	return s
}

type GetBodyOptionsRequest struct {
	CorpId *string `json:"CorpId,omitempty" xml:"CorpId,omitempty"`
}

func (s GetBodyOptionsRequest) String() string {
	return tea.Prettify(s)
}

func (s GetBodyOptionsRequest) GoString() string {
	return s.String()
}

func (s *GetBodyOptionsRequest) SetCorpId(v string) *GetBodyOptionsRequest {
	s.CorpId = &v
	return s
}

type GetBodyOptionsResponse struct {
	Code      *string                       `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                       `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      []*GetBodyOptionsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Repeated"`
}

func (s GetBodyOptionsResponse) String() string {
	return tea.Prettify(s)
}

func (s GetBodyOptionsResponse) GoString() string {
	return s.String()
}

func (s *GetBodyOptionsResponse) SetCode(v string) *GetBodyOptionsResponse {
	s.Code = &v
	return s
}

func (s *GetBodyOptionsResponse) SetMessage(v string) *GetBodyOptionsResponse {
	s.Message = &v
	return s
}

func (s *GetBodyOptionsResponse) SetRequestId(v string) *GetBodyOptionsResponse {
	s.RequestId = &v
	return s
}

func (s *GetBodyOptionsResponse) SetData(v []*GetBodyOptionsResponseData) *GetBodyOptionsResponse {
	s.Data = v
	return s
}

type GetBodyOptionsResponseData struct {
	Key        *string                                 `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Name       *string                                 `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	OptionList []*GetBodyOptionsResponseDataOptionList `json:"OptionList,omitempty" xml:"OptionList,omitempty" require:"true" type:"Repeated"`
}

func (s GetBodyOptionsResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetBodyOptionsResponseData) GoString() string {
	return s.String()
}

func (s *GetBodyOptionsResponseData) SetKey(v string) *GetBodyOptionsResponseData {
	s.Key = &v
	return s
}

func (s *GetBodyOptionsResponseData) SetName(v string) *GetBodyOptionsResponseData {
	s.Name = &v
	return s
}

func (s *GetBodyOptionsResponseData) SetOptionList(v []*GetBodyOptionsResponseDataOptionList) *GetBodyOptionsResponseData {
	s.OptionList = v
	return s
}

type GetBodyOptionsResponseDataOptionList struct {
	Key  *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Name *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s GetBodyOptionsResponseDataOptionList) String() string {
	return tea.Prettify(s)
}

func (s GetBodyOptionsResponseDataOptionList) GoString() string {
	return s.String()
}

func (s *GetBodyOptionsResponseDataOptionList) SetKey(v string) *GetBodyOptionsResponseDataOptionList {
	s.Key = &v
	return s
}

func (s *GetBodyOptionsResponseDataOptionList) SetName(v string) *GetBodyOptionsResponseDataOptionList {
	s.Name = &v
	return s
}

type StopMonitorRequest struct {
	TaskId          *string `json:"TaskId,omitempty" xml:"TaskId,omitempty"`
	AlgorithmVendor *string `json:"AlgorithmVendor,omitempty" xml:"AlgorithmVendor,omitempty"`
}

func (s StopMonitorRequest) String() string {
	return tea.Prettify(s)
}

func (s StopMonitorRequest) GoString() string {
	return s.String()
}

func (s *StopMonitorRequest) SetTaskId(v string) *StopMonitorRequest {
	s.TaskId = &v
	return s
}

func (s *StopMonitorRequest) SetAlgorithmVendor(v string) *StopMonitorRequest {
	s.AlgorithmVendor = &v
	return s
}

type StopMonitorResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s StopMonitorResponse) String() string {
	return tea.Prettify(s)
}

func (s StopMonitorResponse) GoString() string {
	return s.String()
}

func (s *StopMonitorResponse) SetCode(v string) *StopMonitorResponse {
	s.Code = &v
	return s
}

func (s *StopMonitorResponse) SetData(v string) *StopMonitorResponse {
	s.Data = &v
	return s
}

func (s *StopMonitorResponse) SetMessage(v string) *StopMonitorResponse {
	s.Message = &v
	return s
}

func (s *StopMonitorResponse) SetRequestId(v string) *StopMonitorResponse {
	s.RequestId = &v
	return s
}

type SearchBodyRequest struct {
	CorpId         *string                `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	GbId           *string                `json:"GbId,omitempty" xml:"GbId,omitempty"`
	StartTimeStamp *int64                 `json:"StartTimeStamp,omitempty" xml:"StartTimeStamp,omitempty" require:"true"`
	EndTimeStamp   *int64                 `json:"EndTimeStamp,omitempty" xml:"EndTimeStamp,omitempty" require:"true"`
	PageNo         *int                   `json:"PageNo,omitempty" xml:"PageNo,omitempty" require:"true"`
	PageSize       *int                   `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	OptionList     map[string]interface{} `json:"OptionList,omitempty" xml:"OptionList,omitempty"`
}

func (s SearchBodyRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchBodyRequest) GoString() string {
	return s.String()
}

func (s *SearchBodyRequest) SetCorpId(v string) *SearchBodyRequest {
	s.CorpId = &v
	return s
}

func (s *SearchBodyRequest) SetGbId(v string) *SearchBodyRequest {
	s.GbId = &v
	return s
}

func (s *SearchBodyRequest) SetStartTimeStamp(v int64) *SearchBodyRequest {
	s.StartTimeStamp = &v
	return s
}

func (s *SearchBodyRequest) SetEndTimeStamp(v int64) *SearchBodyRequest {
	s.EndTimeStamp = &v
	return s
}

func (s *SearchBodyRequest) SetPageNo(v int) *SearchBodyRequest {
	s.PageNo = &v
	return s
}

func (s *SearchBodyRequest) SetPageSize(v int) *SearchBodyRequest {
	s.PageSize = &v
	return s
}

func (s *SearchBodyRequest) SetOptionList(v map[string]interface{}) *SearchBodyRequest {
	s.OptionList = v
	return s
}

type SearchBodyResponse struct {
	Code      *string                 `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                 `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *SearchBodyResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s SearchBodyResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchBodyResponse) GoString() string {
	return s.String()
}

func (s *SearchBodyResponse) SetCode(v string) *SearchBodyResponse {
	s.Code = &v
	return s
}

func (s *SearchBodyResponse) SetMessage(v string) *SearchBodyResponse {
	s.Message = &v
	return s
}

func (s *SearchBodyResponse) SetRequestId(v string) *SearchBodyResponse {
	s.RequestId = &v
	return s
}

func (s *SearchBodyResponse) SetData(v *SearchBodyResponseData) *SearchBodyResponse {
	s.Data = v
	return s
}

type SearchBodyResponseData struct {
	PageNo     *int                             `json:"PageNo,omitempty" xml:"PageNo,omitempty" require:"true"`
	PageSize   *int                             `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                             `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	TotalPage  *int                             `json:"TotalPage,omitempty" xml:"TotalPage,omitempty" require:"true"`
	Records    []*SearchBodyResponseDataRecords `json:"Records,omitempty" xml:"Records,omitempty" require:"true" type:"Repeated"`
}

func (s SearchBodyResponseData) String() string {
	return tea.Prettify(s)
}

func (s SearchBodyResponseData) GoString() string {
	return s.String()
}

func (s *SearchBodyResponseData) SetPageNo(v int) *SearchBodyResponseData {
	s.PageNo = &v
	return s
}

func (s *SearchBodyResponseData) SetPageSize(v int) *SearchBodyResponseData {
	s.PageSize = &v
	return s
}

func (s *SearchBodyResponseData) SetTotalCount(v int) *SearchBodyResponseData {
	s.TotalCount = &v
	return s
}

func (s *SearchBodyResponseData) SetTotalPage(v int) *SearchBodyResponseData {
	s.TotalPage = &v
	return s
}

func (s *SearchBodyResponseData) SetRecords(v []*SearchBodyResponseDataRecords) *SearchBodyResponseData {
	s.Records = v
	return s
}

type SearchBodyResponseDataRecords struct {
	GbId           *string  `json:"GbId,omitempty" xml:"GbId,omitempty" require:"true"`
	ImageUrl       *string  `json:"ImageUrl,omitempty" xml:"ImageUrl,omitempty" require:"true"`
	LeftTopX       *float32 `json:"LeftTopX,omitempty" xml:"LeftTopX,omitempty" require:"true"`
	LeftTopY       *float32 `json:"LeftTopY,omitempty" xml:"LeftTopY,omitempty" require:"true"`
	RightBottomX   *float32 `json:"RightBottomX,omitempty" xml:"RightBottomX,omitempty" require:"true"`
	RightBottomY   *float32 `json:"RightBottomY,omitempty" xml:"RightBottomY,omitempty" require:"true"`
	Score          *float32 `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	TargetImageUrl *string  `json:"TargetImageUrl,omitempty" xml:"TargetImageUrl,omitempty" require:"true"`
}

func (s SearchBodyResponseDataRecords) String() string {
	return tea.Prettify(s)
}

func (s SearchBodyResponseDataRecords) GoString() string {
	return s.String()
}

func (s *SearchBodyResponseDataRecords) SetGbId(v string) *SearchBodyResponseDataRecords {
	s.GbId = &v
	return s
}

func (s *SearchBodyResponseDataRecords) SetImageUrl(v string) *SearchBodyResponseDataRecords {
	s.ImageUrl = &v
	return s
}

func (s *SearchBodyResponseDataRecords) SetLeftTopX(v float32) *SearchBodyResponseDataRecords {
	s.LeftTopX = &v
	return s
}

func (s *SearchBodyResponseDataRecords) SetLeftTopY(v float32) *SearchBodyResponseDataRecords {
	s.LeftTopY = &v
	return s
}

func (s *SearchBodyResponseDataRecords) SetRightBottomX(v float32) *SearchBodyResponseDataRecords {
	s.RightBottomX = &v
	return s
}

func (s *SearchBodyResponseDataRecords) SetRightBottomY(v float32) *SearchBodyResponseDataRecords {
	s.RightBottomY = &v
	return s
}

func (s *SearchBodyResponseDataRecords) SetScore(v float32) *SearchBodyResponseDataRecords {
	s.Score = &v
	return s
}

func (s *SearchBodyResponseDataRecords) SetTargetImageUrl(v string) *SearchBodyResponseDataRecords {
	s.TargetImageUrl = &v
	return s
}

type AddMonitorRequest struct {
	CorpId          *string `json:"CorpId,omitempty" xml:"CorpId,omitempty"`
	MonitorType     *string `json:"MonitorType,omitempty" xml:"MonitorType,omitempty"`
	Description     *string `json:"Description,omitempty" xml:"Description,omitempty"`
	BatchIndicator  *int    `json:"BatchIndicator,omitempty" xml:"BatchIndicator,omitempty"`
	AlgorithmVendor *string `json:"AlgorithmVendor,omitempty" xml:"AlgorithmVendor,omitempty"`
}

func (s AddMonitorRequest) String() string {
	return tea.Prettify(s)
}

func (s AddMonitorRequest) GoString() string {
	return s.String()
}

func (s *AddMonitorRequest) SetCorpId(v string) *AddMonitorRequest {
	s.CorpId = &v
	return s
}

func (s *AddMonitorRequest) SetMonitorType(v string) *AddMonitorRequest {
	s.MonitorType = &v
	return s
}

func (s *AddMonitorRequest) SetDescription(v string) *AddMonitorRequest {
	s.Description = &v
	return s
}

func (s *AddMonitorRequest) SetBatchIndicator(v int) *AddMonitorRequest {
	s.BatchIndicator = &v
	return s
}

func (s *AddMonitorRequest) SetAlgorithmVendor(v string) *AddMonitorRequest {
	s.AlgorithmVendor = &v
	return s
}

type AddMonitorResponse struct {
	RequestId *string                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Code      *string                 `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                 `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Data      *AddMonitorResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s AddMonitorResponse) String() string {
	return tea.Prettify(s)
}

func (s AddMonitorResponse) GoString() string {
	return s.String()
}

func (s *AddMonitorResponse) SetRequestId(v string) *AddMonitorResponse {
	s.RequestId = &v
	return s
}

func (s *AddMonitorResponse) SetCode(v string) *AddMonitorResponse {
	s.Code = &v
	return s
}

func (s *AddMonitorResponse) SetMessage(v string) *AddMonitorResponse {
	s.Message = &v
	return s
}

func (s *AddMonitorResponse) SetData(v *AddMonitorResponseData) *AddMonitorResponse {
	s.Data = v
	return s
}

type AddMonitorResponseData struct {
	TaskId *string `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
}

func (s AddMonitorResponseData) String() string {
	return tea.Prettify(s)
}

func (s AddMonitorResponseData) GoString() string {
	return s.String()
}

func (s *AddMonitorResponseData) SetTaskId(v string) *AddMonitorResponseData {
	s.TaskId = &v
	return s
}

type GetMonitorResultRequest struct {
	CorpId          *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	TaskId          *string `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
	MinRecordId     *string `json:"MinRecordId,omitempty" xml:"MinRecordId,omitempty"`
	StartTime       *int64  `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime         *int64  `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
	AlgorithmVendor *string `json:"AlgorithmVendor,omitempty" xml:"AlgorithmVendor,omitempty"`
}

func (s GetMonitorResultRequest) String() string {
	return tea.Prettify(s)
}

func (s GetMonitorResultRequest) GoString() string {
	return s.String()
}

func (s *GetMonitorResultRequest) SetCorpId(v string) *GetMonitorResultRequest {
	s.CorpId = &v
	return s
}

func (s *GetMonitorResultRequest) SetTaskId(v string) *GetMonitorResultRequest {
	s.TaskId = &v
	return s
}

func (s *GetMonitorResultRequest) SetMinRecordId(v string) *GetMonitorResultRequest {
	s.MinRecordId = &v
	return s
}

func (s *GetMonitorResultRequest) SetStartTime(v int64) *GetMonitorResultRequest {
	s.StartTime = &v
	return s
}

func (s *GetMonitorResultRequest) SetEndTime(v int64) *GetMonitorResultRequest {
	s.EndTime = &v
	return s
}

func (s *GetMonitorResultRequest) SetAlgorithmVendor(v string) *GetMonitorResultRequest {
	s.AlgorithmVendor = &v
	return s
}

type GetMonitorResultResponse struct {
	Code      *string                       `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                       `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *GetMonitorResultResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetMonitorResultResponse) String() string {
	return tea.Prettify(s)
}

func (s GetMonitorResultResponse) GoString() string {
	return s.String()
}

func (s *GetMonitorResultResponse) SetCode(v string) *GetMonitorResultResponse {
	s.Code = &v
	return s
}

func (s *GetMonitorResultResponse) SetMessage(v string) *GetMonitorResultResponse {
	s.Message = &v
	return s
}

func (s *GetMonitorResultResponse) SetRequestId(v string) *GetMonitorResultResponse {
	s.RequestId = &v
	return s
}

func (s *GetMonitorResultResponse) SetData(v *GetMonitorResultResponseData) *GetMonitorResultResponse {
	s.Data = v
	return s
}

type GetMonitorResultResponseData struct {
	MaxId   *string                                `json:"MaxId,omitempty" xml:"MaxId,omitempty" require:"true"`
	Records []*GetMonitorResultResponseDataRecords `json:"Records,omitempty" xml:"Records,omitempty" require:"true" type:"Repeated"`
}

func (s GetMonitorResultResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetMonitorResultResponseData) GoString() string {
	return s.String()
}

func (s *GetMonitorResultResponseData) SetMaxId(v string) *GetMonitorResultResponseData {
	s.MaxId = &v
	return s
}

func (s *GetMonitorResultResponseData) SetRecords(v []*GetMonitorResultResponseDataRecords) *GetMonitorResultResponseData {
	s.Records = v
	return s
}

type GetMonitorResultResponseDataRecords struct {
	RightBottomY  *string `json:"RightBottomY,omitempty" xml:"RightBottomY,omitempty" require:"true"`
	RightBottomX  *string `json:"RightBottomX,omitempty" xml:"RightBottomX,omitempty" require:"true"`
	LeftUpY       *string `json:"LeftUpY,omitempty" xml:"LeftUpY,omitempty" require:"true"`
	LeftUpX       *string `json:"LeftUpX,omitempty" xml:"LeftUpX,omitempty" require:"true"`
	GbId          *string `json:"GbId,omitempty" xml:"GbId,omitempty" require:"true"`
	Score         *string `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	PicUrl        *string `json:"PicUrl,omitempty" xml:"PicUrl,omitempty" require:"true"`
	ShotTime      *string `json:"ShotTime,omitempty" xml:"ShotTime,omitempty" require:"true"`
	MonitorPicUrl *string `json:"MonitorPicUrl,omitempty" xml:"MonitorPicUrl,omitempty" require:"true"`
}

func (s GetMonitorResultResponseDataRecords) String() string {
	return tea.Prettify(s)
}

func (s GetMonitorResultResponseDataRecords) GoString() string {
	return s.String()
}

func (s *GetMonitorResultResponseDataRecords) SetRightBottomY(v string) *GetMonitorResultResponseDataRecords {
	s.RightBottomY = &v
	return s
}

func (s *GetMonitorResultResponseDataRecords) SetRightBottomX(v string) *GetMonitorResultResponseDataRecords {
	s.RightBottomX = &v
	return s
}

func (s *GetMonitorResultResponseDataRecords) SetLeftUpY(v string) *GetMonitorResultResponseDataRecords {
	s.LeftUpY = &v
	return s
}

func (s *GetMonitorResultResponseDataRecords) SetLeftUpX(v string) *GetMonitorResultResponseDataRecords {
	s.LeftUpX = &v
	return s
}

func (s *GetMonitorResultResponseDataRecords) SetGbId(v string) *GetMonitorResultResponseDataRecords {
	s.GbId = &v
	return s
}

func (s *GetMonitorResultResponseDataRecords) SetScore(v string) *GetMonitorResultResponseDataRecords {
	s.Score = &v
	return s
}

func (s *GetMonitorResultResponseDataRecords) SetPicUrl(v string) *GetMonitorResultResponseDataRecords {
	s.PicUrl = &v
	return s
}

func (s *GetMonitorResultResponseDataRecords) SetShotTime(v string) *GetMonitorResultResponseDataRecords {
	s.ShotTime = &v
	return s
}

func (s *GetMonitorResultResponseDataRecords) SetMonitorPicUrl(v string) *GetMonitorResultResponseDataRecords {
	s.MonitorPicUrl = &v
	return s
}

type UpdateMonitorRequest struct {
	CorpId               *string `json:"CorpId,omitempty" xml:"CorpId,omitempty"`
	TaskId               *string `json:"TaskId,omitempty" xml:"TaskId,omitempty"`
	RuleName             *string `json:"RuleName,omitempty" xml:"RuleName,omitempty"`
	DeviceOperateType    *string `json:"DeviceOperateType,omitempty" xml:"DeviceOperateType,omitempty"`
	DeviceList           *string `json:"DeviceList,omitempty" xml:"DeviceList,omitempty"`
	PicOperateType       *string `json:"PicOperateType,omitempty" xml:"PicOperateType,omitempty"`
	PicList              *string `json:"PicList,omitempty" xml:"PicList,omitempty"`
	AttributeOperateType *string `json:"AttributeOperateType,omitempty" xml:"AttributeOperateType,omitempty"`
	AttributeName        *string `json:"AttributeName,omitempty" xml:"AttributeName,omitempty"`
	AttributeValueList   *string `json:"AttributeValueList,omitempty" xml:"AttributeValueList,omitempty"`
	Description          *string `json:"Description,omitempty" xml:"Description,omitempty"`
	RuleExpression       *string `json:"RuleExpression,omitempty" xml:"RuleExpression,omitempty"`
	AlgorithmVendor      *string `json:"AlgorithmVendor,omitempty" xml:"AlgorithmVendor,omitempty"`
}

func (s UpdateMonitorRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateMonitorRequest) GoString() string {
	return s.String()
}

func (s *UpdateMonitorRequest) SetCorpId(v string) *UpdateMonitorRequest {
	s.CorpId = &v
	return s
}

func (s *UpdateMonitorRequest) SetTaskId(v string) *UpdateMonitorRequest {
	s.TaskId = &v
	return s
}

func (s *UpdateMonitorRequest) SetRuleName(v string) *UpdateMonitorRequest {
	s.RuleName = &v
	return s
}

func (s *UpdateMonitorRequest) SetDeviceOperateType(v string) *UpdateMonitorRequest {
	s.DeviceOperateType = &v
	return s
}

func (s *UpdateMonitorRequest) SetDeviceList(v string) *UpdateMonitorRequest {
	s.DeviceList = &v
	return s
}

func (s *UpdateMonitorRequest) SetPicOperateType(v string) *UpdateMonitorRequest {
	s.PicOperateType = &v
	return s
}

func (s *UpdateMonitorRequest) SetPicList(v string) *UpdateMonitorRequest {
	s.PicList = &v
	return s
}

func (s *UpdateMonitorRequest) SetAttributeOperateType(v string) *UpdateMonitorRequest {
	s.AttributeOperateType = &v
	return s
}

func (s *UpdateMonitorRequest) SetAttributeName(v string) *UpdateMonitorRequest {
	s.AttributeName = &v
	return s
}

func (s *UpdateMonitorRequest) SetAttributeValueList(v string) *UpdateMonitorRequest {
	s.AttributeValueList = &v
	return s
}

func (s *UpdateMonitorRequest) SetDescription(v string) *UpdateMonitorRequest {
	s.Description = &v
	return s
}

func (s *UpdateMonitorRequest) SetRuleExpression(v string) *UpdateMonitorRequest {
	s.RuleExpression = &v
	return s
}

func (s *UpdateMonitorRequest) SetAlgorithmVendor(v string) *UpdateMonitorRequest {
	s.AlgorithmVendor = &v
	return s
}

type UpdateMonitorResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateMonitorResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateMonitorResponse) GoString() string {
	return s.String()
}

func (s *UpdateMonitorResponse) SetCode(v string) *UpdateMonitorResponse {
	s.Code = &v
	return s
}

func (s *UpdateMonitorResponse) SetData(v string) *UpdateMonitorResponse {
	s.Data = &v
	return s
}

func (s *UpdateMonitorResponse) SetMessage(v string) *UpdateMonitorResponse {
	s.Message = &v
	return s
}

func (s *UpdateMonitorResponse) SetRequestId(v string) *UpdateMonitorResponse {
	s.RequestId = &v
	return s
}

type GetDeviceVideoUrlRequest struct {
	CorpId    *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	GbId      *string `json:"GbId,omitempty" xml:"GbId,omitempty"`
	StartTime *int64  `json:"StartTime,omitempty" xml:"StartTime,omitempty"`
	EndTime   *int64  `json:"EndTime,omitempty" xml:"EndTime,omitempty"`
}

func (s GetDeviceVideoUrlRequest) String() string {
	return tea.Prettify(s)
}

func (s GetDeviceVideoUrlRequest) GoString() string {
	return s.String()
}

func (s *GetDeviceVideoUrlRequest) SetCorpId(v string) *GetDeviceVideoUrlRequest {
	s.CorpId = &v
	return s
}

func (s *GetDeviceVideoUrlRequest) SetGbId(v string) *GetDeviceVideoUrlRequest {
	s.GbId = &v
	return s
}

func (s *GetDeviceVideoUrlRequest) SetStartTime(v int64) *GetDeviceVideoUrlRequest {
	s.StartTime = &v
	return s
}

func (s *GetDeviceVideoUrlRequest) SetEndTime(v int64) *GetDeviceVideoUrlRequest {
	s.EndTime = &v
	return s
}

type GetDeviceVideoUrlResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Url       *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s GetDeviceVideoUrlResponse) String() string {
	return tea.Prettify(s)
}

func (s GetDeviceVideoUrlResponse) GoString() string {
	return s.String()
}

func (s *GetDeviceVideoUrlResponse) SetCode(v string) *GetDeviceVideoUrlResponse {
	s.Code = &v
	return s
}

func (s *GetDeviceVideoUrlResponse) SetMessage(v string) *GetDeviceVideoUrlResponse {
	s.Message = &v
	return s
}

func (s *GetDeviceVideoUrlResponse) SetRequestId(v string) *GetDeviceVideoUrlResponse {
	s.RequestId = &v
	return s
}

func (s *GetDeviceVideoUrlResponse) SetUrl(v string) *GetDeviceVideoUrlResponse {
	s.Url = &v
	return s
}

type GetInventoryRequest struct {
	CommodityCode *string `json:"CommodityCode,omitempty" xml:"CommodityCode,omitempty"`
}

func (s GetInventoryRequest) String() string {
	return tea.Prettify(s)
}

func (s GetInventoryRequest) GoString() string {
	return s.String()
}

func (s *GetInventoryRequest) SetCommodityCode(v string) *GetInventoryRequest {
	s.CommodityCode = &v
	return s
}

type GetInventoryResponse struct {
	Success *bool                     `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data    *GetInventoryResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetInventoryResponse) String() string {
	return tea.Prettify(s)
}

func (s GetInventoryResponse) GoString() string {
	return s.String()
}

func (s *GetInventoryResponse) SetSuccess(v bool) *GetInventoryResponse {
	s.Success = &v
	return s
}

func (s *GetInventoryResponse) SetData(v *GetInventoryResponseData) *GetInventoryResponse {
	s.Data = v
	return s
}

type GetInventoryResponseData struct {
	ResultObject []*GetInventoryResponseDataResultObject `json:"ResultObject,omitempty" xml:"ResultObject,omitempty" require:"true" type:"Repeated"`
}

func (s GetInventoryResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetInventoryResponseData) GoString() string {
	return s.String()
}

func (s *GetInventoryResponseData) SetResultObject(v []*GetInventoryResponseDataResultObject) *GetInventoryResponseData {
	s.ResultObject = v
	return s
}

type GetInventoryResponseDataResultObject struct {
	BuyerId          *string `json:"BuyerId,omitempty" xml:"BuyerId,omitempty" require:"true"`
	CommodityCode    *string `json:"CommodityCode,omitempty" xml:"CommodityCode,omitempty" require:"true"`
	CurrentInventory *string `json:"CurrentInventory,omitempty" xml:"CurrentInventory,omitempty" require:"true"`
	ValidEndTime     *string `json:"ValidEndTime,omitempty" xml:"ValidEndTime,omitempty" require:"true"`
	ValidStartTime   *string `json:"ValidStartTime,omitempty" xml:"ValidStartTime,omitempty" require:"true"`
	InstanceId       *string `json:"InstanceId,omitempty" xml:"InstanceId,omitempty" require:"true"`
	InventoryId      *string `json:"InventoryId,omitempty" xml:"InventoryId,omitempty" require:"true"`
}

func (s GetInventoryResponseDataResultObject) String() string {
	return tea.Prettify(s)
}

func (s GetInventoryResponseDataResultObject) GoString() string {
	return s.String()
}

func (s *GetInventoryResponseDataResultObject) SetBuyerId(v string) *GetInventoryResponseDataResultObject {
	s.BuyerId = &v
	return s
}

func (s *GetInventoryResponseDataResultObject) SetCommodityCode(v string) *GetInventoryResponseDataResultObject {
	s.CommodityCode = &v
	return s
}

func (s *GetInventoryResponseDataResultObject) SetCurrentInventory(v string) *GetInventoryResponseDataResultObject {
	s.CurrentInventory = &v
	return s
}

func (s *GetInventoryResponseDataResultObject) SetValidEndTime(v string) *GetInventoryResponseDataResultObject {
	s.ValidEndTime = &v
	return s
}

func (s *GetInventoryResponseDataResultObject) SetValidStartTime(v string) *GetInventoryResponseDataResultObject {
	s.ValidStartTime = &v
	return s
}

func (s *GetInventoryResponseDataResultObject) SetInstanceId(v string) *GetInventoryResponseDataResultObject {
	s.InstanceId = &v
	return s
}

func (s *GetInventoryResponseDataResultObject) SetInventoryId(v string) *GetInventoryResponseDataResultObject {
	s.InventoryId = &v
	return s
}

type RecognizeImageRequest struct {
	CorpId     *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	PicContent *string `json:"PicContent,omitempty" xml:"PicContent,omitempty"`
	PicFormat  *string `json:"PicFormat,omitempty" xml:"PicFormat,omitempty" require:"true"`
	PicUrl     *string `json:"PicUrl,omitempty" xml:"PicUrl,omitempty"`
}

func (s RecognizeImageRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageRequest) GoString() string {
	return s.String()
}

func (s *RecognizeImageRequest) SetCorpId(v string) *RecognizeImageRequest {
	s.CorpId = &v
	return s
}

func (s *RecognizeImageRequest) SetPicContent(v string) *RecognizeImageRequest {
	s.PicContent = &v
	return s
}

func (s *RecognizeImageRequest) SetPicFormat(v string) *RecognizeImageRequest {
	s.PicFormat = &v
	return s
}

func (s *RecognizeImageRequest) SetPicUrl(v string) *RecognizeImageRequest {
	s.PicUrl = &v
	return s
}

type RecognizeImageResponse struct {
	Code      *string                     `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                     `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeImageResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeImageResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageResponse) GoString() string {
	return s.String()
}

func (s *RecognizeImageResponse) SetCode(v string) *RecognizeImageResponse {
	s.Code = &v
	return s
}

func (s *RecognizeImageResponse) SetMessage(v string) *RecognizeImageResponse {
	s.Message = &v
	return s
}

func (s *RecognizeImageResponse) SetRequestId(v string) *RecognizeImageResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeImageResponse) SetData(v *RecognizeImageResponseData) *RecognizeImageResponse {
	s.Data = v
	return s
}

type RecognizeImageResponseData struct {
	BodyList []*RecognizeImageResponseDataBodyList `json:"BodyList,omitempty" xml:"BodyList,omitempty" require:"true" type:"Repeated"`
	FaceList []*RecognizeImageResponseDataFaceList `json:"FaceList,omitempty" xml:"FaceList,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeImageResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeImageResponseData) SetBodyList(v []*RecognizeImageResponseDataBodyList) *RecognizeImageResponseData {
	s.BodyList = v
	return s
}

func (s *RecognizeImageResponseData) SetFaceList(v []*RecognizeImageResponseDataFaceList) *RecognizeImageResponseData {
	s.FaceList = v
	return s
}

type RecognizeImageResponseDataBodyList struct {
	Feature          *string `json:"Feature,omitempty" xml:"Feature,omitempty" require:"true"`
	FileName         *string `json:"FileName,omitempty" xml:"FileName,omitempty" require:"true"`
	ImageBaseSixFour *string `json:"ImageBaseSixFour,omitempty" xml:"ImageBaseSixFour,omitempty" require:"true"`
	LeftTopX         *string `json:"LeftTopX,omitempty" xml:"LeftTopX,omitempty" require:"true"`
	LeftTopY         *string `json:"LeftTopY,omitempty" xml:"LeftTopY,omitempty" require:"true"`
	LocalFeature     *string `json:"LocalFeature,omitempty" xml:"LocalFeature,omitempty" require:"true"`
	RespiratorColor  *string `json:"RespiratorColor,omitempty" xml:"RespiratorColor,omitempty" require:"true"`
	RightBottomX     *string `json:"RightBottomX,omitempty" xml:"RightBottomX,omitempty" require:"true"`
	RightBottomY     *string `json:"RightBottomY,omitempty" xml:"RightBottomY,omitempty" require:"true"`
}

func (s RecognizeImageResponseDataBodyList) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageResponseDataBodyList) GoString() string {
	return s.String()
}

func (s *RecognizeImageResponseDataBodyList) SetFeature(v string) *RecognizeImageResponseDataBodyList {
	s.Feature = &v
	return s
}

func (s *RecognizeImageResponseDataBodyList) SetFileName(v string) *RecognizeImageResponseDataBodyList {
	s.FileName = &v
	return s
}

func (s *RecognizeImageResponseDataBodyList) SetImageBaseSixFour(v string) *RecognizeImageResponseDataBodyList {
	s.ImageBaseSixFour = &v
	return s
}

func (s *RecognizeImageResponseDataBodyList) SetLeftTopX(v string) *RecognizeImageResponseDataBodyList {
	s.LeftTopX = &v
	return s
}

func (s *RecognizeImageResponseDataBodyList) SetLeftTopY(v string) *RecognizeImageResponseDataBodyList {
	s.LeftTopY = &v
	return s
}

func (s *RecognizeImageResponseDataBodyList) SetLocalFeature(v string) *RecognizeImageResponseDataBodyList {
	s.LocalFeature = &v
	return s
}

func (s *RecognizeImageResponseDataBodyList) SetRespiratorColor(v string) *RecognizeImageResponseDataBodyList {
	s.RespiratorColor = &v
	return s
}

func (s *RecognizeImageResponseDataBodyList) SetRightBottomX(v string) *RecognizeImageResponseDataBodyList {
	s.RightBottomX = &v
	return s
}

func (s *RecognizeImageResponseDataBodyList) SetRightBottomY(v string) *RecognizeImageResponseDataBodyList {
	s.RightBottomY = &v
	return s
}

type RecognizeImageResponseDataFaceList struct {
	Feature          *string `json:"Feature,omitempty" xml:"Feature,omitempty" require:"true"`
	FileName         *string `json:"FileName,omitempty" xml:"FileName,omitempty" require:"true"`
	ImageBaseSixFour *string `json:"ImageBaseSixFour,omitempty" xml:"ImageBaseSixFour,omitempty" require:"true"`
	LeftTopX         *string `json:"LeftTopX,omitempty" xml:"LeftTopX,omitempty" require:"true"`
	LeftTopY         *string `json:"LeftTopY,omitempty" xml:"LeftTopY,omitempty" require:"true"`
	LocalFeature     *string `json:"LocalFeature,omitempty" xml:"LocalFeature,omitempty" require:"true"`
	RespiratorColor  *string `json:"RespiratorColor,omitempty" xml:"RespiratorColor,omitempty" require:"true"`
	RightBottomX     *string `json:"RightBottomX,omitempty" xml:"RightBottomX,omitempty" require:"true"`
	RightBottomY     *string `json:"RightBottomY,omitempty" xml:"RightBottomY,omitempty" require:"true"`
}

func (s RecognizeImageResponseDataFaceList) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageResponseDataFaceList) GoString() string {
	return s.String()
}

func (s *RecognizeImageResponseDataFaceList) SetFeature(v string) *RecognizeImageResponseDataFaceList {
	s.Feature = &v
	return s
}

func (s *RecognizeImageResponseDataFaceList) SetFileName(v string) *RecognizeImageResponseDataFaceList {
	s.FileName = &v
	return s
}

func (s *RecognizeImageResponseDataFaceList) SetImageBaseSixFour(v string) *RecognizeImageResponseDataFaceList {
	s.ImageBaseSixFour = &v
	return s
}

func (s *RecognizeImageResponseDataFaceList) SetLeftTopX(v string) *RecognizeImageResponseDataFaceList {
	s.LeftTopX = &v
	return s
}

func (s *RecognizeImageResponseDataFaceList) SetLeftTopY(v string) *RecognizeImageResponseDataFaceList {
	s.LeftTopY = &v
	return s
}

func (s *RecognizeImageResponseDataFaceList) SetLocalFeature(v string) *RecognizeImageResponseDataFaceList {
	s.LocalFeature = &v
	return s
}

func (s *RecognizeImageResponseDataFaceList) SetRespiratorColor(v string) *RecognizeImageResponseDataFaceList {
	s.RespiratorColor = &v
	return s
}

func (s *RecognizeImageResponseDataFaceList) SetRightBottomX(v string) *RecognizeImageResponseDataFaceList {
	s.RightBottomX = &v
	return s
}

func (s *RecognizeImageResponseDataFaceList) SetRightBottomY(v string) *RecognizeImageResponseDataFaceList {
	s.RightBottomY = &v
	return s
}

type ListCorpsRequest struct {
	PageNumber *int `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
}

func (s ListCorpsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListCorpsRequest) GoString() string {
	return s.String()
}

func (s *ListCorpsRequest) SetPageNumber(v int) *ListCorpsRequest {
	s.PageNumber = &v
	return s
}

func (s *ListCorpsRequest) SetPageSize(v int) *ListCorpsRequest {
	s.PageSize = &v
	return s
}

type ListCorpsResponse struct {
	Code      *string                `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ListCorpsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListCorpsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListCorpsResponse) GoString() string {
	return s.String()
}

func (s *ListCorpsResponse) SetCode(v string) *ListCorpsResponse {
	s.Code = &v
	return s
}

func (s *ListCorpsResponse) SetMessage(v string) *ListCorpsResponse {
	s.Message = &v
	return s
}

func (s *ListCorpsResponse) SetRequestId(v string) *ListCorpsResponse {
	s.RequestId = &v
	return s
}

func (s *ListCorpsResponse) SetData(v *ListCorpsResponseData) *ListCorpsResponse {
	s.Data = v
	return s
}

type ListCorpsResponseData struct {
	PageNumber *int                            `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                            `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                            `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	TotalPage  *int                            `json:"TotalPage,omitempty" xml:"TotalPage,omitempty" require:"true"`
	Records    []*ListCorpsResponseDataRecords `json:"Records,omitempty" xml:"Records,omitempty" require:"true" type:"Repeated"`
}

func (s ListCorpsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListCorpsResponseData) GoString() string {
	return s.String()
}

func (s *ListCorpsResponseData) SetPageNumber(v int) *ListCorpsResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListCorpsResponseData) SetPageSize(v int) *ListCorpsResponseData {
	s.PageSize = &v
	return s
}

func (s *ListCorpsResponseData) SetTotalCount(v int) *ListCorpsResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListCorpsResponseData) SetTotalPage(v int) *ListCorpsResponseData {
	s.TotalPage = &v
	return s
}

func (s *ListCorpsResponseData) SetRecords(v []*ListCorpsResponseDataRecords) *ListCorpsResponseData {
	s.Records = v
	return s
}

type ListCorpsResponseDataRecords struct {
	CorpId       *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	CorpName     *string `json:"CorpName,omitempty" xml:"CorpName,omitempty" require:"true"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	CreateDate   *string `json:"CreateDate,omitempty" xml:"CreateDate,omitempty" require:"true"`
	ParentCorpId *string `json:"ParentCorpId,omitempty" xml:"ParentCorpId,omitempty" require:"true"`
	AppName      *string `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
	DeviceCount  *int    `json:"DeviceCount,omitempty" xml:"DeviceCount,omitempty" require:"true"`
}

func (s ListCorpsResponseDataRecords) String() string {
	return tea.Prettify(s)
}

func (s ListCorpsResponseDataRecords) GoString() string {
	return s.String()
}

func (s *ListCorpsResponseDataRecords) SetCorpId(v string) *ListCorpsResponseDataRecords {
	s.CorpId = &v
	return s
}

func (s *ListCorpsResponseDataRecords) SetCorpName(v string) *ListCorpsResponseDataRecords {
	s.CorpName = &v
	return s
}

func (s *ListCorpsResponseDataRecords) SetDescription(v string) *ListCorpsResponseDataRecords {
	s.Description = &v
	return s
}

func (s *ListCorpsResponseDataRecords) SetCreateDate(v string) *ListCorpsResponseDataRecords {
	s.CreateDate = &v
	return s
}

func (s *ListCorpsResponseDataRecords) SetParentCorpId(v string) *ListCorpsResponseDataRecords {
	s.ParentCorpId = &v
	return s
}

func (s *ListCorpsResponseDataRecords) SetAppName(v string) *ListCorpsResponseDataRecords {
	s.AppName = &v
	return s
}

func (s *ListCorpsResponseDataRecords) SetDeviceCount(v int) *ListCorpsResponseDataRecords {
	s.DeviceCount = &v
	return s
}

type UpdateCorpRequest struct {
	CorpId       *string `json:"CorpId,omitempty" xml:"CorpId,omitempty"`
	CorpName     *string `json:"CorpName,omitempty" xml:"CorpName,omitempty"`
	AppName      *string `json:"AppName,omitempty" xml:"AppName,omitempty"`
	ParentCorpId *string `json:"ParentCorpId,omitempty" xml:"ParentCorpId,omitempty"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty"`
}

func (s UpdateCorpRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateCorpRequest) GoString() string {
	return s.String()
}

func (s *UpdateCorpRequest) SetCorpId(v string) *UpdateCorpRequest {
	s.CorpId = &v
	return s
}

func (s *UpdateCorpRequest) SetCorpName(v string) *UpdateCorpRequest {
	s.CorpName = &v
	return s
}

func (s *UpdateCorpRequest) SetAppName(v string) *UpdateCorpRequest {
	s.AppName = &v
	return s
}

func (s *UpdateCorpRequest) SetParentCorpId(v string) *UpdateCorpRequest {
	s.ParentCorpId = &v
	return s
}

func (s *UpdateCorpRequest) SetDescription(v string) *UpdateCorpRequest {
	s.Description = &v
	return s
}

type UpdateCorpResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s UpdateCorpResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateCorpResponse) GoString() string {
	return s.String()
}

func (s *UpdateCorpResponse) SetCode(v string) *UpdateCorpResponse {
	s.Code = &v
	return s
}

func (s *UpdateCorpResponse) SetMessage(v string) *UpdateCorpResponse {
	s.Message = &v
	return s
}

func (s *UpdateCorpResponse) SetRequestId(v string) *UpdateCorpResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateCorpResponse) SetData(v string) *UpdateCorpResponse {
	s.Data = &v
	return s
}

type UpdateDeviceRequest struct {
	GbId             *string `json:"GbId,omitempty" xml:"GbId,omitempty"`
	DeviceName       *string `json:"DeviceName,omitempty" xml:"DeviceName,omitempty"`
	DeviceType       *string `json:"DeviceType,omitempty" xml:"DeviceType,omitempty"`
	DeviceAddress    *string `json:"DeviceAddress,omitempty" xml:"DeviceAddress,omitempty"`
	DeviceSite       *string `json:"DeviceSite,omitempty" xml:"DeviceSite,omitempty"`
	DeviceDirection  *string `json:"DeviceDirection,omitempty" xml:"DeviceDirection,omitempty"`
	DeviceResolution *string `json:"DeviceResolution,omitempty" xml:"DeviceResolution,omitempty"`
	BitRate          *string `json:"BitRate,omitempty" xml:"BitRate,omitempty"`
	CorpId           *string `json:"CorpId,omitempty" xml:"CorpId,omitempty"`
	Vendor           *string `json:"Vendor,omitempty" xml:"Vendor,omitempty"`
}

func (s UpdateDeviceRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateDeviceRequest) GoString() string {
	return s.String()
}

func (s *UpdateDeviceRequest) SetGbId(v string) *UpdateDeviceRequest {
	s.GbId = &v
	return s
}

func (s *UpdateDeviceRequest) SetDeviceName(v string) *UpdateDeviceRequest {
	s.DeviceName = &v
	return s
}

func (s *UpdateDeviceRequest) SetDeviceType(v string) *UpdateDeviceRequest {
	s.DeviceType = &v
	return s
}

func (s *UpdateDeviceRequest) SetDeviceAddress(v string) *UpdateDeviceRequest {
	s.DeviceAddress = &v
	return s
}

func (s *UpdateDeviceRequest) SetDeviceSite(v string) *UpdateDeviceRequest {
	s.DeviceSite = &v
	return s
}

func (s *UpdateDeviceRequest) SetDeviceDirection(v string) *UpdateDeviceRequest {
	s.DeviceDirection = &v
	return s
}

func (s *UpdateDeviceRequest) SetDeviceResolution(v string) *UpdateDeviceRequest {
	s.DeviceResolution = &v
	return s
}

func (s *UpdateDeviceRequest) SetBitRate(v string) *UpdateDeviceRequest {
	s.BitRate = &v
	return s
}

func (s *UpdateDeviceRequest) SetCorpId(v string) *UpdateDeviceRequest {
	s.CorpId = &v
	return s
}

func (s *UpdateDeviceRequest) SetVendor(v string) *UpdateDeviceRequest {
	s.Vendor = &v
	return s
}

type UpdateDeviceResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s UpdateDeviceResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateDeviceResponse) GoString() string {
	return s.String()
}

func (s *UpdateDeviceResponse) SetCode(v string) *UpdateDeviceResponse {
	s.Code = &v
	return s
}

func (s *UpdateDeviceResponse) SetMessage(v string) *UpdateDeviceResponse {
	s.Message = &v
	return s
}

func (s *UpdateDeviceResponse) SetRequestId(v string) *UpdateDeviceResponse {
	s.RequestId = &v
	return s
}

func (s *UpdateDeviceResponse) SetData(v string) *UpdateDeviceResponse {
	s.Data = &v
	return s
}

type ListDevicesRequest struct {
	CorpId     *string `json:"CorpId,omitempty" xml:"CorpId,omitempty"`
	GbId       *string `json:"GbId,omitempty" xml:"GbId,omitempty"`
	DeviceName *string `json:"DeviceName,omitempty" xml:"DeviceName,omitempty"`
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
}

func (s ListDevicesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListDevicesRequest) GoString() string {
	return s.String()
}

func (s *ListDevicesRequest) SetCorpId(v string) *ListDevicesRequest {
	s.CorpId = &v
	return s
}

func (s *ListDevicesRequest) SetGbId(v string) *ListDevicesRequest {
	s.GbId = &v
	return s
}

func (s *ListDevicesRequest) SetDeviceName(v string) *ListDevicesRequest {
	s.DeviceName = &v
	return s
}

func (s *ListDevicesRequest) SetPageNumber(v int) *ListDevicesRequest {
	s.PageNumber = &v
	return s
}

func (s *ListDevicesRequest) SetPageSize(v int) *ListDevicesRequest {
	s.PageSize = &v
	return s
}

type ListDevicesResponse struct {
	Code      *string                  `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                  `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ListDevicesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListDevicesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListDevicesResponse) GoString() string {
	return s.String()
}

func (s *ListDevicesResponse) SetCode(v string) *ListDevicesResponse {
	s.Code = &v
	return s
}

func (s *ListDevicesResponse) SetMessage(v string) *ListDevicesResponse {
	s.Message = &v
	return s
}

func (s *ListDevicesResponse) SetRequestId(v string) *ListDevicesResponse {
	s.RequestId = &v
	return s
}

func (s *ListDevicesResponse) SetData(v *ListDevicesResponseData) *ListDevicesResponse {
	s.Data = v
	return s
}

type ListDevicesResponseData struct {
	PageNumber *int                              `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int                              `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                              `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	TotalPage  *int                              `json:"TotalPage,omitempty" xml:"TotalPage,omitempty" require:"true"`
	Records    []*ListDevicesResponseDataRecords `json:"Records,omitempty" xml:"Records,omitempty" require:"true" type:"Repeated"`
}

func (s ListDevicesResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListDevicesResponseData) GoString() string {
	return s.String()
}

func (s *ListDevicesResponseData) SetPageNumber(v int) *ListDevicesResponseData {
	s.PageNumber = &v
	return s
}

func (s *ListDevicesResponseData) SetPageSize(v int) *ListDevicesResponseData {
	s.PageSize = &v
	return s
}

func (s *ListDevicesResponseData) SetTotalCount(v int) *ListDevicesResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListDevicesResponseData) SetTotalPage(v int) *ListDevicesResponseData {
	s.TotalPage = &v
	return s
}

func (s *ListDevicesResponseData) SetRecords(v []*ListDevicesResponseDataRecords) *ListDevicesResponseData {
	s.Records = v
	return s
}

type ListDevicesResponseDataRecords struct {
	AccessProtocolType *string `json:"AccessProtocolType,omitempty" xml:"AccessProtocolType,omitempty" require:"true"`
	BitRate            *string `json:"BitRate,omitempty" xml:"BitRate,omitempty" require:"true"`
	CoverImageUrl      *string `json:"CoverImageUrl,omitempty" xml:"CoverImageUrl,omitempty" require:"true"`
	GbId               *string `json:"GbId,omitempty" xml:"GbId,omitempty" require:"true"`
	DeviceAddress      *string `json:"DeviceAddress,omitempty" xml:"DeviceAddress,omitempty" require:"true"`
	DeviceDirection    *string `json:"DeviceDirection,omitempty" xml:"DeviceDirection,omitempty" require:"true"`
	DeviceSite         *string `json:"DeviceSite,omitempty" xml:"DeviceSite,omitempty" require:"true"`
	Latitude           *string `json:"Latitude,omitempty" xml:"Latitude,omitempty" require:"true"`
	Longitude          *string `json:"Longitude,omitempty" xml:"Longitude,omitempty" require:"true"`
	DeviceName         *string `json:"DeviceName,omitempty" xml:"DeviceName,omitempty" require:"true"`
	Resolution         *string `json:"Resolution,omitempty" xml:"Resolution,omitempty" require:"true"`
	SipGBId            *string `json:"SipGBId,omitempty" xml:"SipGBId,omitempty" require:"true"`
	SipPassword        *string `json:"SipPassword,omitempty" xml:"SipPassword,omitempty" require:"true"`
	SipServerIp        *string `json:"SipServerIp,omitempty" xml:"SipServerIp,omitempty" require:"true"`
	SipServerPort      *string `json:"SipServerPort,omitempty" xml:"SipServerPort,omitempty" require:"true"`
	Status             *int    `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	DeviceType         *string `json:"DeviceType,omitempty" xml:"DeviceType,omitempty" require:"true"`
	Vendor             *string `json:"Vendor,omitempty" xml:"Vendor,omitempty" require:"true"`
	CreateTime         *string `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
}

func (s ListDevicesResponseDataRecords) String() string {
	return tea.Prettify(s)
}

func (s ListDevicesResponseDataRecords) GoString() string {
	return s.String()
}

func (s *ListDevicesResponseDataRecords) SetAccessProtocolType(v string) *ListDevicesResponseDataRecords {
	s.AccessProtocolType = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetBitRate(v string) *ListDevicesResponseDataRecords {
	s.BitRate = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetCoverImageUrl(v string) *ListDevicesResponseDataRecords {
	s.CoverImageUrl = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetGbId(v string) *ListDevicesResponseDataRecords {
	s.GbId = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetDeviceAddress(v string) *ListDevicesResponseDataRecords {
	s.DeviceAddress = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetDeviceDirection(v string) *ListDevicesResponseDataRecords {
	s.DeviceDirection = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetDeviceSite(v string) *ListDevicesResponseDataRecords {
	s.DeviceSite = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetLatitude(v string) *ListDevicesResponseDataRecords {
	s.Latitude = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetLongitude(v string) *ListDevicesResponseDataRecords {
	s.Longitude = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetDeviceName(v string) *ListDevicesResponseDataRecords {
	s.DeviceName = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetResolution(v string) *ListDevicesResponseDataRecords {
	s.Resolution = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetSipGBId(v string) *ListDevicesResponseDataRecords {
	s.SipGBId = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetSipPassword(v string) *ListDevicesResponseDataRecords {
	s.SipPassword = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetSipServerIp(v string) *ListDevicesResponseDataRecords {
	s.SipServerIp = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetSipServerPort(v string) *ListDevicesResponseDataRecords {
	s.SipServerPort = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetStatus(v int) *ListDevicesResponseDataRecords {
	s.Status = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetDeviceType(v string) *ListDevicesResponseDataRecords {
	s.DeviceType = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetVendor(v string) *ListDevicesResponseDataRecords {
	s.Vendor = &v
	return s
}

func (s *ListDevicesResponseDataRecords) SetCreateTime(v string) *ListDevicesResponseDataRecords {
	s.CreateTime = &v
	return s
}

type GetDeviceLiveUrlRequest struct {
	CorpId *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	GbId   *string `json:"GbId,omitempty" xml:"GbId,omitempty"`
}

func (s GetDeviceLiveUrlRequest) String() string {
	return tea.Prettify(s)
}

func (s GetDeviceLiveUrlRequest) GoString() string {
	return s.String()
}

func (s *GetDeviceLiveUrlRequest) SetCorpId(v string) *GetDeviceLiveUrlRequest {
	s.CorpId = &v
	return s
}

func (s *GetDeviceLiveUrlRequest) SetGbId(v string) *GetDeviceLiveUrlRequest {
	s.GbId = &v
	return s
}

type GetDeviceLiveUrlResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Url       *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s GetDeviceLiveUrlResponse) String() string {
	return tea.Prettify(s)
}

func (s GetDeviceLiveUrlResponse) GoString() string {
	return s.String()
}

func (s *GetDeviceLiveUrlResponse) SetCode(v string) *GetDeviceLiveUrlResponse {
	s.Code = &v
	return s
}

func (s *GetDeviceLiveUrlResponse) SetUrl(v string) *GetDeviceLiveUrlResponse {
	s.Url = &v
	return s
}

func (s *GetDeviceLiveUrlResponse) SetMessage(v string) *GetDeviceLiveUrlResponse {
	s.Message = &v
	return s
}

func (s *GetDeviceLiveUrlResponse) SetRequestId(v string) *GetDeviceLiveUrlResponse {
	s.RequestId = &v
	return s
}

type SearchFaceRequest struct {
	CorpId         *string                `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
	GbId           *string                `json:"GbId,omitempty" xml:"GbId,omitempty"`
	StartTimeStamp *int64                 `json:"StartTimeStamp,omitempty" xml:"StartTimeStamp,omitempty" require:"true"`
	EndTimeStamp   *int64                 `json:"EndTimeStamp,omitempty" xml:"EndTimeStamp,omitempty" require:"true"`
	PageNo         *int                   `json:"PageNo,omitempty" xml:"PageNo,omitempty" require:"true"`
	PageSize       *int                   `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	OptionList     map[string]interface{} `json:"OptionList,omitempty" xml:"OptionList,omitempty"`
}

func (s SearchFaceRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchFaceRequest) GoString() string {
	return s.String()
}

func (s *SearchFaceRequest) SetCorpId(v string) *SearchFaceRequest {
	s.CorpId = &v
	return s
}

func (s *SearchFaceRequest) SetGbId(v string) *SearchFaceRequest {
	s.GbId = &v
	return s
}

func (s *SearchFaceRequest) SetStartTimeStamp(v int64) *SearchFaceRequest {
	s.StartTimeStamp = &v
	return s
}

func (s *SearchFaceRequest) SetEndTimeStamp(v int64) *SearchFaceRequest {
	s.EndTimeStamp = &v
	return s
}

func (s *SearchFaceRequest) SetPageNo(v int) *SearchFaceRequest {
	s.PageNo = &v
	return s
}

func (s *SearchFaceRequest) SetPageSize(v int) *SearchFaceRequest {
	s.PageSize = &v
	return s
}

func (s *SearchFaceRequest) SetOptionList(v map[string]interface{}) *SearchFaceRequest {
	s.OptionList = v
	return s
}

type SearchFaceResponse struct {
	Code      *string                 `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string                 `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *SearchFaceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s SearchFaceResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchFaceResponse) GoString() string {
	return s.String()
}

func (s *SearchFaceResponse) SetCode(v string) *SearchFaceResponse {
	s.Code = &v
	return s
}

func (s *SearchFaceResponse) SetMessage(v string) *SearchFaceResponse {
	s.Message = &v
	return s
}

func (s *SearchFaceResponse) SetRequestId(v string) *SearchFaceResponse {
	s.RequestId = &v
	return s
}

func (s *SearchFaceResponse) SetData(v *SearchFaceResponseData) *SearchFaceResponse {
	s.Data = v
	return s
}

type SearchFaceResponseData struct {
	PageNo     *int                             `json:"PageNo,omitempty" xml:"PageNo,omitempty" require:"true"`
	PageSize   *int                             `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalCount *int                             `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	TotalPage  *int                             `json:"TotalPage,omitempty" xml:"TotalPage,omitempty" require:"true"`
	Records    []*SearchFaceResponseDataRecords `json:"Records,omitempty" xml:"Records,omitempty" require:"true" type:"Repeated"`
}

func (s SearchFaceResponseData) String() string {
	return tea.Prettify(s)
}

func (s SearchFaceResponseData) GoString() string {
	return s.String()
}

func (s *SearchFaceResponseData) SetPageNo(v int) *SearchFaceResponseData {
	s.PageNo = &v
	return s
}

func (s *SearchFaceResponseData) SetPageSize(v int) *SearchFaceResponseData {
	s.PageSize = &v
	return s
}

func (s *SearchFaceResponseData) SetTotalCount(v int) *SearchFaceResponseData {
	s.TotalCount = &v
	return s
}

func (s *SearchFaceResponseData) SetTotalPage(v int) *SearchFaceResponseData {
	s.TotalPage = &v
	return s
}

func (s *SearchFaceResponseData) SetRecords(v []*SearchFaceResponseDataRecords) *SearchFaceResponseData {
	s.Records = v
	return s
}

type SearchFaceResponseDataRecords struct {
	GbId            *string  `json:"GbId,omitempty" xml:"GbId,omitempty" require:"true"`
	ImageUrl        *string  `json:"ImageUrl,omitempty" xml:"ImageUrl,omitempty" require:"true"`
	LeftTopX        *float32 `json:"LeftTopX,omitempty" xml:"LeftTopX,omitempty" require:"true"`
	LeftTopY        *float32 `json:"LeftTopY,omitempty" xml:"LeftTopY,omitempty" require:"true"`
	RightBottomX    *float32 `json:"RightBottomX,omitempty" xml:"RightBottomX,omitempty" require:"true"`
	RightBottomY    *float32 `json:"RightBottomY,omitempty" xml:"RightBottomY,omitempty" require:"true"`
	Score           *float32 `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	TargetImageUrl  *string  `json:"TargetImageUrl,omitempty" xml:"TargetImageUrl,omitempty" require:"true"`
	MatchSuggestion *string  `json:"MatchSuggestion,omitempty" xml:"MatchSuggestion,omitempty" require:"true"`
}

func (s SearchFaceResponseDataRecords) String() string {
	return tea.Prettify(s)
}

func (s SearchFaceResponseDataRecords) GoString() string {
	return s.String()
}

func (s *SearchFaceResponseDataRecords) SetGbId(v string) *SearchFaceResponseDataRecords {
	s.GbId = &v
	return s
}

func (s *SearchFaceResponseDataRecords) SetImageUrl(v string) *SearchFaceResponseDataRecords {
	s.ImageUrl = &v
	return s
}

func (s *SearchFaceResponseDataRecords) SetLeftTopX(v float32) *SearchFaceResponseDataRecords {
	s.LeftTopX = &v
	return s
}

func (s *SearchFaceResponseDataRecords) SetLeftTopY(v float32) *SearchFaceResponseDataRecords {
	s.LeftTopY = &v
	return s
}

func (s *SearchFaceResponseDataRecords) SetRightBottomX(v float32) *SearchFaceResponseDataRecords {
	s.RightBottomX = &v
	return s
}

func (s *SearchFaceResponseDataRecords) SetRightBottomY(v float32) *SearchFaceResponseDataRecords {
	s.RightBottomY = &v
	return s
}

func (s *SearchFaceResponseDataRecords) SetScore(v float32) *SearchFaceResponseDataRecords {
	s.Score = &v
	return s
}

func (s *SearchFaceResponseDataRecords) SetTargetImageUrl(v string) *SearchFaceResponseDataRecords {
	s.TargetImageUrl = &v
	return s
}

func (s *SearchFaceResponseDataRecords) SetMatchSuggestion(v string) *SearchFaceResponseDataRecords {
	s.MatchSuggestion = &v
	return s
}

type AddDeviceRequest struct {
	GbId             *string `json:"GbId,omitempty" xml:"GbId,omitempty"`
	DeviceName       *string `json:"DeviceName,omitempty" xml:"DeviceName,omitempty"`
	DeviceType       *string `json:"DeviceType,omitempty" xml:"DeviceType,omitempty"`
	DeviceAddress    *string `json:"DeviceAddress,omitempty" xml:"DeviceAddress,omitempty"`
	DeviceSite       *string `json:"DeviceSite,omitempty" xml:"DeviceSite,omitempty"`
	DeviceDirection  *string `json:"DeviceDirection,omitempty" xml:"DeviceDirection,omitempty"`
	DeviceResolution *string `json:"DeviceResolution,omitempty" xml:"DeviceResolution,omitempty"`
	BitRate          *string `json:"BitRate,omitempty" xml:"BitRate,omitempty"`
	CorpId           *string `json:"CorpId,omitempty" xml:"CorpId,omitempty"`
	Vendor           *string `json:"Vendor,omitempty" xml:"Vendor,omitempty"`
}

func (s AddDeviceRequest) String() string {
	return tea.Prettify(s)
}

func (s AddDeviceRequest) GoString() string {
	return s.String()
}

func (s *AddDeviceRequest) SetGbId(v string) *AddDeviceRequest {
	s.GbId = &v
	return s
}

func (s *AddDeviceRequest) SetDeviceName(v string) *AddDeviceRequest {
	s.DeviceName = &v
	return s
}

func (s *AddDeviceRequest) SetDeviceType(v string) *AddDeviceRequest {
	s.DeviceType = &v
	return s
}

func (s *AddDeviceRequest) SetDeviceAddress(v string) *AddDeviceRequest {
	s.DeviceAddress = &v
	return s
}

func (s *AddDeviceRequest) SetDeviceSite(v string) *AddDeviceRequest {
	s.DeviceSite = &v
	return s
}

func (s *AddDeviceRequest) SetDeviceDirection(v string) *AddDeviceRequest {
	s.DeviceDirection = &v
	return s
}

func (s *AddDeviceRequest) SetDeviceResolution(v string) *AddDeviceRequest {
	s.DeviceResolution = &v
	return s
}

func (s *AddDeviceRequest) SetBitRate(v string) *AddDeviceRequest {
	s.BitRate = &v
	return s
}

func (s *AddDeviceRequest) SetCorpId(v string) *AddDeviceRequest {
	s.CorpId = &v
	return s
}

func (s *AddDeviceRequest) SetVendor(v string) *AddDeviceRequest {
	s.Vendor = &v
	return s
}

type AddDeviceResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
}

func (s AddDeviceResponse) String() string {
	return tea.Prettify(s)
}

func (s AddDeviceResponse) GoString() string {
	return s.String()
}

func (s *AddDeviceResponse) SetCode(v string) *AddDeviceResponse {
	s.Code = &v
	return s
}

func (s *AddDeviceResponse) SetMessage(v string) *AddDeviceResponse {
	s.Message = &v
	return s
}

func (s *AddDeviceResponse) SetRequestId(v string) *AddDeviceResponse {
	s.RequestId = &v
	return s
}

func (s *AddDeviceResponse) SetData(v string) *AddDeviceResponse {
	s.Data = &v
	return s
}

type CreateCorpRequest struct {
	CorpName     *string `json:"CorpName,omitempty" xml:"CorpName,omitempty" require:"true"`
	AppName      *string `json:"AppName,omitempty" xml:"AppName,omitempty" require:"true"`
	ParentCorpId *string `json:"ParentCorpId,omitempty" xml:"ParentCorpId,omitempty"`
	Description  *string `json:"Description,omitempty" xml:"Description,omitempty"`
}

func (s CreateCorpRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateCorpRequest) GoString() string {
	return s.String()
}

func (s *CreateCorpRequest) SetCorpName(v string) *CreateCorpRequest {
	s.CorpName = &v
	return s
}

func (s *CreateCorpRequest) SetAppName(v string) *CreateCorpRequest {
	s.AppName = &v
	return s
}

func (s *CreateCorpRequest) SetParentCorpId(v string) *CreateCorpRequest {
	s.ParentCorpId = &v
	return s
}

func (s *CreateCorpRequest) SetDescription(v string) *CreateCorpRequest {
	s.Description = &v
	return s
}

type CreateCorpResponse struct {
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	CorpId    *string `json:"CorpId,omitempty" xml:"CorpId,omitempty" require:"true"`
}

func (s CreateCorpResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateCorpResponse) GoString() string {
	return s.String()
}

func (s *CreateCorpResponse) SetCode(v string) *CreateCorpResponse {
	s.Code = &v
	return s
}

func (s *CreateCorpResponse) SetMessage(v string) *CreateCorpResponse {
	s.Message = &v
	return s
}

func (s *CreateCorpResponse) SetRequestId(v string) *CreateCorpResponse {
	s.RequestId = &v
	return s
}

func (s *CreateCorpResponse) SetCorpId(v string) *CreateCorpResponse {
	s.CorpId = &v
	return s
}

type DeleteDeviceRequest struct {
	CorpId *string `json:"CorpId,omitempty" xml:"CorpId,omitempty"`
	GbId   *string `json:"GbId,omitempty" xml:"GbId,omitempty"`
}

func (s DeleteDeviceRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteDeviceRequest) GoString() string {
	return s.String()
}

func (s *DeleteDeviceRequest) SetCorpId(v string) *DeleteDeviceRequest {
	s.CorpId = &v
	return s
}

func (s *DeleteDeviceRequest) SetGbId(v string) *DeleteDeviceRequest {
	s.GbId = &v
	return s
}

type DeleteDeviceResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Code      *string `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Data      *string `json:"Data,omitempty" xml:"Data,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
}

func (s DeleteDeviceResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteDeviceResponse) GoString() string {
	return s.String()
}

func (s *DeleteDeviceResponse) SetRequestId(v string) *DeleteDeviceResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteDeviceResponse) SetCode(v string) *DeleteDeviceResponse {
	s.Code = &v
	return s
}

func (s *DeleteDeviceResponse) SetData(v string) *DeleteDeviceResponse {
	s.Data = &v
	return s
}

func (s *DeleteDeviceResponse) SetMessage(v string) *DeleteDeviceResponse {
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
	client.EndpointRule = tea.String("regional")
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("vcs"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) ListBodyAlgorithmResultsWithOptions(request *ListBodyAlgorithmResultsRequest, runtime *util.RuntimeOptions) (_result *ListBodyAlgorithmResultsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListBodyAlgorithmResultsResponse{}
	_body, _err := client.DoRequest(tea.String("ListBodyAlgorithmResults"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListBodyAlgorithmResults(request *ListBodyAlgorithmResultsRequest) (_result *ListBodyAlgorithmResultsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListBodyAlgorithmResultsResponse{}
	_body, _err := client.ListBodyAlgorithmResultsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddDataSourceWithOptions(request *AddDataSourceRequest, runtime *util.RuntimeOptions) (_result *AddDataSourceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddDataSourceResponse{}
	_body, _err := client.DoRequest(tea.String("AddDataSource"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddDataSource(request *AddDataSourceRequest) (_result *AddDataSourceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddDataSourceResponse{}
	_body, _err := client.AddDataSourceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetVideoComposeResultWithOptions(request *GetVideoComposeResultRequest, runtime *util.RuntimeOptions) (_result *GetVideoComposeResultResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetVideoComposeResultResponse{}
	_body, _err := client.DoRequest(tea.String("GetVideoComposeResult"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetVideoComposeResult(request *GetVideoComposeResultRequest) (_result *GetVideoComposeResultResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetVideoComposeResultResponse{}
	_body, _err := client.GetVideoComposeResultWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateVideoComposeTaskWithOptions(request *CreateVideoComposeTaskRequest, runtime *util.RuntimeOptions) (_result *CreateVideoComposeTaskResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateVideoComposeTaskResponse{}
	_body, _err := client.DoRequest(tea.String("CreateVideoComposeTask"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateVideoComposeTask(request *CreateVideoComposeTaskRequest) (_result *CreateVideoComposeTaskResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateVideoComposeTaskResponse{}
	_body, _err := client.CreateVideoComposeTaskWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteDataSourceWithOptions(request *DeleteDataSourceRequest, runtime *util.RuntimeOptions) (_result *DeleteDataSourceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteDataSourceResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteDataSource"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteDataSource(request *DeleteDataSourceRequest) (_result *DeleteDataSourceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteDataSourceResponse{}
	_body, _err := client.DeleteDataSourceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UploadFileWithOptions(request *UploadFileRequest, runtime *util.RuntimeOptions) (_result *UploadFileResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UploadFileResponse{}
	_body, _err := client.DoRequest(tea.String("UploadFile"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UploadFile(request *UploadFileRequest) (_result *UploadFileResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UploadFileResponse{}
	_body, _err := client.UploadFileWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListEventAlgorithmResultsWithOptions(request *ListEventAlgorithmResultsRequest, runtime *util.RuntimeOptions) (_result *ListEventAlgorithmResultsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListEventAlgorithmResultsResponse{}
	_body, _err := client.DoRequest(tea.String("ListEventAlgorithmResults"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListEventAlgorithmResults(request *ListEventAlgorithmResultsRequest) (_result *ListEventAlgorithmResultsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListEventAlgorithmResultsResponse{}
	_body, _err := client.ListEventAlgorithmResultsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteVideoSummaryTaskWithOptions(request *DeleteVideoSummaryTaskRequest, runtime *util.RuntimeOptions) (_result *DeleteVideoSummaryTaskResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteVideoSummaryTaskResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteVideoSummaryTask"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteVideoSummaryTask(request *DeleteVideoSummaryTaskRequest) (_result *DeleteVideoSummaryTaskResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteVideoSummaryTaskResponse{}
	_body, _err := client.DeleteVideoSummaryTaskWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetVideoSummaryTaskResultWithOptions(request *GetVideoSummaryTaskResultRequest, runtime *util.RuntimeOptions) (_result *GetVideoSummaryTaskResultResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetVideoSummaryTaskResultResponse{}
	_body, _err := client.DoRequest(tea.String("GetVideoSummaryTaskResult"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetVideoSummaryTaskResult(request *GetVideoSummaryTaskResultRequest) (_result *GetVideoSummaryTaskResultResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetVideoSummaryTaskResultResponse{}
	_body, _err := client.GetVideoSummaryTaskResultWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateVideoSummaryTaskWithOptions(request *CreateVideoSummaryTaskRequest, runtime *util.RuntimeOptions) (_result *CreateVideoSummaryTaskResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateVideoSummaryTaskResponse{}
	_body, _err := client.DoRequest(tea.String("CreateVideoSummaryTask"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateVideoSummaryTask(request *CreateVideoSummaryTaskRequest) (_result *CreateVideoSummaryTaskResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateVideoSummaryTaskResponse{}
	_body, _err := client.CreateVideoSummaryTaskWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListMotorAlgorithmResultsWithOptions(request *ListMotorAlgorithmResultsRequest, runtime *util.RuntimeOptions) (_result *ListMotorAlgorithmResultsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListMotorAlgorithmResultsResponse{}
	_body, _err := client.DoRequest(tea.String("ListMotorAlgorithmResults"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListMotorAlgorithmResults(request *ListMotorAlgorithmResultsRequest) (_result *ListMotorAlgorithmResultsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListMotorAlgorithmResultsResponse{}
	_body, _err := client.ListMotorAlgorithmResultsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListFaceAlgorithmResultsWithOptions(request *ListFaceAlgorithmResultsRequest, runtime *util.RuntimeOptions) (_result *ListFaceAlgorithmResultsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListFaceAlgorithmResultsResponse{}
	_body, _err := client.DoRequest(tea.String("ListFaceAlgorithmResults"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListFaceAlgorithmResults(request *ListFaceAlgorithmResultsRequest) (_result *ListFaceAlgorithmResultsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListFaceAlgorithmResultsResponse{}
	_body, _err := client.ListFaceAlgorithmResultsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListMetricsWithOptions(request *ListMetricsRequest, runtime *util.RuntimeOptions) (_result *ListMetricsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListMetricsResponse{}
	_body, _err := client.DoRequest(tea.String("ListMetrics"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListMetrics(request *ListMetricsRequest) (_result *ListMetricsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListMetricsResponse{}
	_body, _err := client.ListMetricsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteRecordsWithOptions(request *DeleteRecordsRequest, runtime *util.RuntimeOptions) (_result *DeleteRecordsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteRecordsResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteRecords"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteRecords(request *DeleteRecordsRequest) (_result *DeleteRecordsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteRecordsResponse{}
	_body, _err := client.DeleteRecordsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RecognizeFaceQualityWithOptions(request *RecognizeFaceQualityRequest, runtime *util.RuntimeOptions) (_result *RecognizeFaceQualityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeFaceQualityResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeFaceQuality"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeFaceQuality(request *RecognizeFaceQualityRequest) (_result *RecognizeFaceQualityResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RecognizeFaceQualityResponse{}
	_body, _err := client.RecognizeFaceQualityWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListPersonsWithOptions(request *ListPersonsRequest, runtime *util.RuntimeOptions) (_result *ListPersonsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListPersonsResponse{}
	_body, _err := client.DoRequest(tea.String("ListPersons"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListPersons(request *ListPersonsRequest) (_result *ListPersonsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListPersonsResponse{}
	_body, _err := client.ListPersonsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetPersonDetailWithOptions(request *GetPersonDetailRequest, runtime *util.RuntimeOptions) (_result *GetPersonDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetPersonDetailResponse{}
	_body, _err := client.DoRequest(tea.String("GetPersonDetail"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetPersonDetail(request *GetPersonDetailRequest) (_result *GetPersonDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetPersonDetailResponse{}
	_body, _err := client.GetPersonDetailWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetFaceOptionsWithOptions(request *GetFaceOptionsRequest, runtime *util.RuntimeOptions) (_result *GetFaceOptionsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetFaceOptionsResponse{}
	_body, _err := client.DoRequest(tea.String("GetFaceOptions"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetFaceOptions(request *GetFaceOptionsRequest) (_result *GetFaceOptionsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetFaceOptionsResponse{}
	_body, _err := client.GetFaceOptionsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetBodyOptionsWithOptions(request *GetBodyOptionsRequest, runtime *util.RuntimeOptions) (_result *GetBodyOptionsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetBodyOptionsResponse{}
	_body, _err := client.DoRequest(tea.String("GetBodyOptions"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetBodyOptions(request *GetBodyOptionsRequest) (_result *GetBodyOptionsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetBodyOptionsResponse{}
	_body, _err := client.GetBodyOptionsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) StopMonitorWithOptions(request *StopMonitorRequest, runtime *util.RuntimeOptions) (_result *StopMonitorResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &StopMonitorResponse{}
	_body, _err := client.DoRequest(tea.String("StopMonitor"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) StopMonitor(request *StopMonitorRequest) (_result *StopMonitorResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &StopMonitorResponse{}
	_body, _err := client.StopMonitorWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchBodyWithOptions(request *SearchBodyRequest, runtime *util.RuntimeOptions) (_result *SearchBodyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchBodyResponse{}
	_body, _err := client.DoRequest(tea.String("SearchBody"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchBody(request *SearchBodyRequest) (_result *SearchBodyResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchBodyResponse{}
	_body, _err := client.SearchBodyWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddMonitorWithOptions(request *AddMonitorRequest, runtime *util.RuntimeOptions) (_result *AddMonitorResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddMonitorResponse{}
	_body, _err := client.DoRequest(tea.String("AddMonitor"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddMonitor(request *AddMonitorRequest) (_result *AddMonitorResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddMonitorResponse{}
	_body, _err := client.AddMonitorWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetMonitorResultWithOptions(request *GetMonitorResultRequest, runtime *util.RuntimeOptions) (_result *GetMonitorResultResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetMonitorResultResponse{}
	_body, _err := client.DoRequest(tea.String("GetMonitorResult"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetMonitorResult(request *GetMonitorResultRequest) (_result *GetMonitorResultResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetMonitorResultResponse{}
	_body, _err := client.GetMonitorResultWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateMonitorWithOptions(request *UpdateMonitorRequest, runtime *util.RuntimeOptions) (_result *UpdateMonitorResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateMonitorResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateMonitor"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateMonitor(request *UpdateMonitorRequest) (_result *UpdateMonitorResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateMonitorResponse{}
	_body, _err := client.UpdateMonitorWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetDeviceVideoUrlWithOptions(request *GetDeviceVideoUrlRequest, runtime *util.RuntimeOptions) (_result *GetDeviceVideoUrlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetDeviceVideoUrlResponse{}
	_body, _err := client.DoRequest(tea.String("GetDeviceVideoUrl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetDeviceVideoUrl(request *GetDeviceVideoUrlRequest) (_result *GetDeviceVideoUrlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetDeviceVideoUrlResponse{}
	_body, _err := client.GetDeviceVideoUrlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetInventoryWithOptions(request *GetInventoryRequest, runtime *util.RuntimeOptions) (_result *GetInventoryResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetInventoryResponse{}
	_body, _err := client.DoRequest(tea.String("GetInventory"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetInventory(request *GetInventoryRequest) (_result *GetInventoryResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetInventoryResponse{}
	_body, _err := client.GetInventoryWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) RecognizeImageWithOptions(request *RecognizeImageRequest, runtime *util.RuntimeOptions) (_result *RecognizeImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeImageResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeImage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeImage(request *RecognizeImageRequest) (_result *RecognizeImageResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &RecognizeImageResponse{}
	_body, _err := client.RecognizeImageWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListCorpsWithOptions(request *ListCorpsRequest, runtime *util.RuntimeOptions) (_result *ListCorpsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListCorpsResponse{}
	_body, _err := client.DoRequest(tea.String("ListCorps"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK,APP"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListCorps(request *ListCorpsRequest) (_result *ListCorpsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListCorpsResponse{}
	_body, _err := client.ListCorpsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateCorpWithOptions(request *UpdateCorpRequest, runtime *util.RuntimeOptions) (_result *UpdateCorpResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateCorpResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateCorp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateCorp(request *UpdateCorpRequest) (_result *UpdateCorpResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateCorpResponse{}
	_body, _err := client.UpdateCorpWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) UpdateDeviceWithOptions(request *UpdateDeviceRequest, runtime *util.RuntimeOptions) (_result *UpdateDeviceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateDeviceResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateDevice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateDevice(request *UpdateDeviceRequest) (_result *UpdateDeviceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &UpdateDeviceResponse{}
	_body, _err := client.UpdateDeviceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListDevicesWithOptions(request *ListDevicesRequest, runtime *util.RuntimeOptions) (_result *ListDevicesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListDevicesResponse{}
	_body, _err := client.DoRequest(tea.String("ListDevices"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListDevices(request *ListDevicesRequest) (_result *ListDevicesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListDevicesResponse{}
	_body, _err := client.ListDevicesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetDeviceLiveUrlWithOptions(request *GetDeviceLiveUrlRequest, runtime *util.RuntimeOptions) (_result *GetDeviceLiveUrlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetDeviceLiveUrlResponse{}
	_body, _err := client.DoRequest(tea.String("GetDeviceLiveUrl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetDeviceLiveUrl(request *GetDeviceLiveUrlRequest) (_result *GetDeviceLiveUrlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetDeviceLiveUrlResponse{}
	_body, _err := client.GetDeviceLiveUrlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) SearchFaceWithOptions(request *SearchFaceRequest, runtime *util.RuntimeOptions) (_result *SearchFaceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchFaceResponse{}
	_body, _err := client.DoRequest(tea.String("SearchFace"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchFace(request *SearchFaceRequest) (_result *SearchFaceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &SearchFaceResponse{}
	_body, _err := client.SearchFaceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AddDeviceWithOptions(request *AddDeviceRequest, runtime *util.RuntimeOptions) (_result *AddDeviceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddDeviceResponse{}
	_body, _err := client.DoRequest(tea.String("AddDevice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddDevice(request *AddDeviceRequest) (_result *AddDeviceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AddDeviceResponse{}
	_body, _err := client.AddDeviceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateCorpWithOptions(request *CreateCorpRequest, runtime *util.RuntimeOptions) (_result *CreateCorpResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateCorpResponse{}
	_body, _err := client.DoRequest(tea.String("CreateCorp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateCorp(request *CreateCorpRequest) (_result *CreateCorpResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateCorpResponse{}
	_body, _err := client.CreateCorpWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteDeviceWithOptions(request *DeleteDeviceRequest, runtime *util.RuntimeOptions) (_result *DeleteDeviceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteDeviceResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteDevice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-05-15"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteDevice(request *DeleteDeviceRequest) (_result *DeleteDeviceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteDeviceResponse{}
	_body, _err := client.DeleteDeviceWithOptions(request, runtime)
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
