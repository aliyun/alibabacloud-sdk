// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type GetFaceOptionsRequest struct {
	CorpId *string `json:"CorpId" xml:"CorpId"`
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
	Code      *string                       `json:"Code" xml:"Code" require:"true"`
	Message   *string                       `json:"Message" xml:"Message" require:"true"`
	RequestId *string                       `json:"RequestId" xml:"RequestId" require:"true"`
	Data      []*GetFaceOptionsResponseData `json:"Data" xml:"Data" require:"true" type:"Repeated"`
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
	Key        *string                                 `json:"Key" xml:"Key" require:"true"`
	Name       *string                                 `json:"Name" xml:"Name" require:"true"`
	OptionList []*GetFaceOptionsResponseDataOptionList `json:"OptionList" xml:"OptionList" require:"true" type:"Repeated"`
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
	Key  *string `json:"Key" xml:"Key" require:"true"`
	Name *string `json:"Name" xml:"Name" require:"true"`
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
	CorpId *string `json:"CorpId" xml:"CorpId"`
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
	Code      *string                       `json:"Code" xml:"Code" require:"true"`
	Message   *string                       `json:"Message" xml:"Message" require:"true"`
	RequestId *string                       `json:"RequestId" xml:"RequestId" require:"true"`
	Data      []*GetBodyOptionsResponseData `json:"Data" xml:"Data" require:"true" type:"Repeated"`
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
	Key        *string                                 `json:"Key" xml:"Key" require:"true"`
	Name       *string                                 `json:"Name" xml:"Name" require:"true"`
	OptionList []*GetBodyOptionsResponseDataOptionList `json:"OptionList" xml:"OptionList" require:"true" type:"Repeated"`
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
	Key  *string `json:"Key" xml:"Key" require:"true"`
	Name *string `json:"Name" xml:"Name" require:"true"`
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
	TaskId *string `json:"TaskId" xml:"TaskId"`
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

type StopMonitorResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
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
	CorpId         *string                `json:"CorpId" xml:"CorpId" require:"true"`
	GbId           *string                `json:"GbId" xml:"GbId"`
	StartTimeStamp *int64                 `json:"StartTimeStamp" xml:"StartTimeStamp" require:"true"`
	EndTimeStamp   *int64                 `json:"EndTimeStamp" xml:"EndTimeStamp" require:"true"`
	PageNo         *int                   `json:"PageNo" xml:"PageNo" require:"true"`
	PageSize       *int                   `json:"PageSize" xml:"PageSize" require:"true"`
	OptionList     map[string]interface{} `json:"OptionList" xml:"OptionList"`
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
	Code      *string                 `json:"Code" xml:"Code" require:"true"`
	Message   *string                 `json:"Message" xml:"Message" require:"true"`
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *SearchBodyResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	PageNo     *int                             `json:"PageNo" xml:"PageNo" require:"true"`
	PageSize   *int                             `json:"PageSize" xml:"PageSize" require:"true"`
	TotalCount *int                             `json:"TotalCount" xml:"TotalCount" require:"true"`
	TotalPage  *int                             `json:"TotalPage" xml:"TotalPage" require:"true"`
	Records    []*SearchBodyResponseDataRecords `json:"Records" xml:"Records" require:"true" type:"Repeated"`
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
	GbId           *string  `json:"GbId" xml:"GbId" require:"true"`
	ImageUrl       *string  `json:"ImageUrl" xml:"ImageUrl" require:"true"`
	LeftTopX       *float32 `json:"LeftTopX" xml:"LeftTopX" require:"true"`
	LeftTopY       *float32 `json:"LeftTopY" xml:"LeftTopY" require:"true"`
	RightBottomX   *float32 `json:"RightBottomX" xml:"RightBottomX" require:"true"`
	RightBottomY   *float32 `json:"RightBottomY" xml:"RightBottomY" require:"true"`
	Score          *float32 `json:"Score" xml:"Score" require:"true"`
	TargetImageUrl *string  `json:"TargetImageUrl" xml:"TargetImageUrl" require:"true"`
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
	CorpId         *string `json:"CorpId" xml:"CorpId"`
	MonitorType    *string `json:"MonitorType" xml:"MonitorType"`
	Description    *string `json:"Description" xml:"Description"`
	BatchIndicator *int    `json:"BatchIndicator" xml:"BatchIndicator"`
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

type AddMonitorResponse struct {
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Code      *string                 `json:"Code" xml:"Code" require:"true"`
	Message   *string                 `json:"Message" xml:"Message" require:"true"`
	Data      *AddMonitorResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	TaskId *string `json:"TaskId" xml:"TaskId" require:"true"`
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
	CorpId      *string `json:"CorpId" xml:"CorpId" require:"true"`
	TaskId      *string `json:"TaskId" xml:"TaskId" require:"true"`
	MinRecordId *string `json:"MinRecordId" xml:"MinRecordId"`
	StartTime   *int64  `json:"StartTime" xml:"StartTime"`
	EndTime     *int64  `json:"EndTime" xml:"EndTime"`
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

type GetMonitorResultResponse struct {
	Code      *string                       `json:"Code" xml:"Code" require:"true"`
	Message   *string                       `json:"Message" xml:"Message" require:"true"`
	RequestId *string                       `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *GetMonitorResultResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	MaxId   *string                                `json:"MaxId" xml:"MaxId" require:"true"`
	Records []*GetMonitorResultResponseDataRecords `json:"Records" xml:"Records" require:"true" type:"Repeated"`
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
	RightBottomY  *string `json:"RightBottomY" xml:"RightBottomY" require:"true"`
	RightBottomX  *string `json:"RightBottomX" xml:"RightBottomX" require:"true"`
	LeftUpY       *string `json:"LeftUpY" xml:"LeftUpY" require:"true"`
	LeftUpX       *string `json:"LeftUpX" xml:"LeftUpX" require:"true"`
	GbId          *string `json:"GbId" xml:"GbId" require:"true"`
	Score         *string `json:"Score" xml:"Score" require:"true"`
	PicUrl        *string `json:"PicUrl" xml:"PicUrl" require:"true"`
	ShotTime      *string `json:"ShotTime" xml:"ShotTime" require:"true"`
	MonitorPicUrl *string `json:"MonitorPicUrl" xml:"MonitorPicUrl" require:"true"`
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
	CorpId               *string `json:"CorpId" xml:"CorpId"`
	TaskId               *string `json:"TaskId" xml:"TaskId"`
	RuleName             *string `json:"RuleName" xml:"RuleName"`
	DeviceOperateType    *string `json:"DeviceOperateType" xml:"DeviceOperateType"`
	DeviceList           *string `json:"DeviceList" xml:"DeviceList"`
	PicOperateType       *string `json:"PicOperateType" xml:"PicOperateType"`
	PicList              *string `json:"PicList" xml:"PicList"`
	AttributeOperateType *string `json:"AttributeOperateType" xml:"AttributeOperateType"`
	AttributeName        *string `json:"AttributeName" xml:"AttributeName"`
	AttributeValueList   *string `json:"AttributeValueList" xml:"AttributeValueList"`
	Description          *string `json:"Description" xml:"Description"`
	RuleExpression       *string `json:"RuleExpression" xml:"RuleExpression"`
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

type UpdateMonitorResponse struct {
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
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
	CorpId    *string `json:"CorpId" xml:"CorpId" require:"true"`
	GbId      *string `json:"GbId" xml:"GbId"`
	StartTime *int64  `json:"StartTime" xml:"StartTime"`
	EndTime   *int64  `json:"EndTime" xml:"EndTime"`
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
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Url       *string `json:"Url" xml:"Url" require:"true"`
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
	CommodityCode *string `json:"CommodityCode" xml:"CommodityCode"`
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
	Success *bool                     `json:"Success" xml:"Success" require:"true"`
	Data    *GetInventoryResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	ResultObject []*GetInventoryResponseDataResultObject `json:"ResultObject" xml:"ResultObject" require:"true" type:"Repeated"`
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
	BuyerId          *string `json:"BuyerId" xml:"BuyerId" require:"true"`
	CommodityCode    *string `json:"CommodityCode" xml:"CommodityCode" require:"true"`
	CurrentInventory *string `json:"CurrentInventory" xml:"CurrentInventory" require:"true"`
	ValidEndTime     *string `json:"ValidEndTime" xml:"ValidEndTime" require:"true"`
	ValidStartTime   *string `json:"ValidStartTime" xml:"ValidStartTime" require:"true"`
	InstanceId       *string `json:"InstanceId" xml:"InstanceId" require:"true"`
	InventoryId      *string `json:"InventoryId" xml:"InventoryId" require:"true"`
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
	CorpId     *string `json:"CorpId" xml:"CorpId" require:"true"`
	PicContent *string `json:"PicContent" xml:"PicContent" require:"true"`
	PicFormat  *string `json:"PicFormat" xml:"PicFormat" require:"true"`
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

type RecognizeImageResponse struct {
	Code      *string                     `json:"Code" xml:"Code" require:"true"`
	Message   *string                     `json:"Message" xml:"Message" require:"true"`
	RequestId *string                     `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeImageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	BodyList []*RecognizeImageResponseDataBodyList `json:"BodyList" xml:"BodyList" require:"true" type:"Repeated"`
	FaceList []*RecognizeImageResponseDataFaceList `json:"FaceList" xml:"FaceList" require:"true" type:"Repeated"`
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
	Feature          *string `json:"Feature" xml:"Feature" require:"true"`
	FileName         *string `json:"FileName" xml:"FileName" require:"true"`
	ImageBaseSixFour *string `json:"ImageBaseSixFour" xml:"ImageBaseSixFour" require:"true"`
	LeftTopX         *string `json:"LeftTopX" xml:"LeftTopX" require:"true"`
	LeftTopY         *string `json:"LeftTopY" xml:"LeftTopY" require:"true"`
	LocalFeature     *string `json:"LocalFeature" xml:"LocalFeature" require:"true"`
	RespiratorColor  *string `json:"RespiratorColor" xml:"RespiratorColor" require:"true"`
	RightBottomX     *string `json:"RightBottomX" xml:"RightBottomX" require:"true"`
	RightBottomY     *string `json:"RightBottomY" xml:"RightBottomY" require:"true"`
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
	Feature          *string `json:"Feature" xml:"Feature" require:"true"`
	FileName         *string `json:"FileName" xml:"FileName" require:"true"`
	ImageBaseSixFour *string `json:"ImageBaseSixFour" xml:"ImageBaseSixFour" require:"true"`
	LeftTopX         *string `json:"LeftTopX" xml:"LeftTopX" require:"true"`
	LeftTopY         *string `json:"LeftTopY" xml:"LeftTopY" require:"true"`
	LocalFeature     *string `json:"LocalFeature" xml:"LocalFeature" require:"true"`
	RespiratorColor  *string `json:"RespiratorColor" xml:"RespiratorColor" require:"true"`
	RightBottomX     *string `json:"RightBottomX" xml:"RightBottomX" require:"true"`
	RightBottomY     *string `json:"RightBottomY" xml:"RightBottomY" require:"true"`
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
	PageNumber *int `json:"PageNumber" xml:"PageNumber" require:"true"`
	PageSize   *int `json:"PageSize" xml:"PageSize" require:"true"`
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
	Code      *string                `json:"Code" xml:"Code" require:"true"`
	Message   *string                `json:"Message" xml:"Message" require:"true"`
	RequestId *string                `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ListCorpsResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	PageNumber *int                            `json:"PageNumber" xml:"PageNumber" require:"true"`
	PageSize   *int                            `json:"PageSize" xml:"PageSize" require:"true"`
	TotalCount *int                            `json:"TotalCount" xml:"TotalCount" require:"true"`
	TotalPage  *int                            `json:"TotalPage" xml:"TotalPage" require:"true"`
	Records    []*ListCorpsResponseDataRecords `json:"Records" xml:"Records" require:"true" type:"Repeated"`
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
	CorpId       *string `json:"CorpId" xml:"CorpId" require:"true"`
	CorpName     *string `json:"CorpName" xml:"CorpName" require:"true"`
	Description  *string `json:"Description" xml:"Description" require:"true"`
	CreateDate   *string `json:"CreateDate" xml:"CreateDate" require:"true"`
	ParentCorpId *string `json:"ParentCorpId" xml:"ParentCorpId" require:"true"`
	AppName      *string `json:"AppName" xml:"AppName" require:"true"`
	DeviceCount  *int    `json:"DeviceCount" xml:"DeviceCount" require:"true"`
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
	CorpId       *string `json:"CorpId" xml:"CorpId"`
	CorpName     *string `json:"CorpName" xml:"CorpName"`
	AppName      *string `json:"AppName" xml:"AppName"`
	ParentCorpId *string `json:"ParentCorpId" xml:"ParentCorpId"`
	Description  *string `json:"Description" xml:"Description"`
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
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
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
	GbId             *string `json:"GbId" xml:"GbId"`
	DeviceName       *string `json:"DeviceName" xml:"DeviceName"`
	DeviceType       *string `json:"DeviceType" xml:"DeviceType"`
	DeviceAddress    *string `json:"DeviceAddress" xml:"DeviceAddress"`
	DeviceSite       *string `json:"DeviceSite" xml:"DeviceSite"`
	DeviceDirection  *string `json:"DeviceDirection" xml:"DeviceDirection"`
	DeviceResolution *string `json:"DeviceResolution" xml:"DeviceResolution"`
	BitRate          *string `json:"BitRate" xml:"BitRate"`
	CorpId           *string `json:"CorpId" xml:"CorpId"`
	Vendor           *string `json:"Vendor" xml:"Vendor"`
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
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
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
	CorpId     *string `json:"CorpId" xml:"CorpId"`
	GbId       *string `json:"GbId" xml:"GbId"`
	DeviceName *string `json:"DeviceName" xml:"DeviceName"`
	PageNumber *int    `json:"PageNumber" xml:"PageNumber"`
	PageSize   *int    `json:"PageSize" xml:"PageSize"`
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
	Code      *string                  `json:"Code" xml:"Code" require:"true"`
	Message   *string                  `json:"Message" xml:"Message" require:"true"`
	RequestId *string                  `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ListDevicesResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	PageNumber *int                              `json:"PageNumber" xml:"PageNumber" require:"true"`
	PageSize   *int                              `json:"PageSize" xml:"PageSize" require:"true"`
	TotalCount *int                              `json:"TotalCount" xml:"TotalCount" require:"true"`
	TotalPage  *int                              `json:"TotalPage" xml:"TotalPage" require:"true"`
	Records    []*ListDevicesResponseDataRecords `json:"Records" xml:"Records" require:"true" type:"Repeated"`
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
	AccessProtocolType *string `json:"AccessProtocolType" xml:"AccessProtocolType" require:"true"`
	BitRate            *string `json:"BitRate" xml:"BitRate" require:"true"`
	CoverImageUrl      *string `json:"CoverImageUrl" xml:"CoverImageUrl" require:"true"`
	GbId               *string `json:"GbId" xml:"GbId" require:"true"`
	DeviceAddress      *string `json:"DeviceAddress" xml:"DeviceAddress" require:"true"`
	DeviceDirection    *string `json:"DeviceDirection" xml:"DeviceDirection" require:"true"`
	DeviceSite         *string `json:"DeviceSite" xml:"DeviceSite" require:"true"`
	Latitude           *string `json:"Latitude" xml:"Latitude" require:"true"`
	Longitude          *string `json:"Longitude" xml:"Longitude" require:"true"`
	DeviceName         *string `json:"DeviceName" xml:"DeviceName" require:"true"`
	Resolution         *string `json:"Resolution" xml:"Resolution" require:"true"`
	SipGBId            *string `json:"SipGBId" xml:"SipGBId" require:"true"`
	SipPassword        *string `json:"SipPassword" xml:"SipPassword" require:"true"`
	SipServerIp        *string `json:"SipServerIp" xml:"SipServerIp" require:"true"`
	SipServerPort      *string `json:"SipServerPort" xml:"SipServerPort" require:"true"`
	Status             *int    `json:"Status" xml:"Status" require:"true"`
	DeviceType         *string `json:"DeviceType" xml:"DeviceType" require:"true"`
	Vendor             *string `json:"Vendor" xml:"Vendor" require:"true"`
	CreateTime         *string `json:"CreateTime" xml:"CreateTime" require:"true"`
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
	CorpId *string `json:"CorpId" xml:"CorpId" require:"true"`
	GbId   *string `json:"GbId" xml:"GbId"`
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
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Url       *string `json:"Url" xml:"Url" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
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
	CorpId         *string                `json:"CorpId" xml:"CorpId" require:"true"`
	GbId           *string                `json:"GbId" xml:"GbId"`
	StartTimeStamp *int64                 `json:"StartTimeStamp" xml:"StartTimeStamp" require:"true"`
	EndTimeStamp   *int64                 `json:"EndTimeStamp" xml:"EndTimeStamp" require:"true"`
	PageNo         *int                   `json:"PageNo" xml:"PageNo" require:"true"`
	PageSize       *int                   `json:"PageSize" xml:"PageSize" require:"true"`
	OptionList     map[string]interface{} `json:"OptionList" xml:"OptionList"`
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
	Code      *string                 `json:"Code" xml:"Code" require:"true"`
	Message   *string                 `json:"Message" xml:"Message" require:"true"`
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *SearchFaceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	PageNo     *int                             `json:"PageNo" xml:"PageNo" require:"true"`
	PageSize   *int                             `json:"PageSize" xml:"PageSize" require:"true"`
	TotalCount *int                             `json:"TotalCount" xml:"TotalCount" require:"true"`
	TotalPage  *int                             `json:"TotalPage" xml:"TotalPage" require:"true"`
	Records    []*SearchFaceResponseDataRecords `json:"Records" xml:"Records" require:"true" type:"Repeated"`
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
	GbId           *string  `json:"GbId" xml:"GbId" require:"true"`
	ImageUrl       *string  `json:"ImageUrl" xml:"ImageUrl" require:"true"`
	LeftTopX       *float32 `json:"LeftTopX" xml:"LeftTopX" require:"true"`
	LeftTopY       *float32 `json:"LeftTopY" xml:"LeftTopY" require:"true"`
	RightBottomX   *float32 `json:"RightBottomX" xml:"RightBottomX" require:"true"`
	RightBottomY   *float32 `json:"RightBottomY" xml:"RightBottomY" require:"true"`
	Score          *float32 `json:"Score" xml:"Score" require:"true"`
	TargetImageUrl *string  `json:"TargetImageUrl" xml:"TargetImageUrl" require:"true"`
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

type AddDeviceRequest struct {
	GbId             *string `json:"GbId" xml:"GbId"`
	DeviceName       *string `json:"DeviceName" xml:"DeviceName"`
	DeviceType       *string `json:"DeviceType" xml:"DeviceType"`
	DeviceAddress    *string `json:"DeviceAddress" xml:"DeviceAddress"`
	DeviceSite       *string `json:"DeviceSite" xml:"DeviceSite"`
	DeviceDirection  *string `json:"DeviceDirection" xml:"DeviceDirection"`
	DeviceResolution *string `json:"DeviceResolution" xml:"DeviceResolution"`
	BitRate          *string `json:"BitRate" xml:"BitRate"`
	CorpId           *string `json:"CorpId" xml:"CorpId"`
	Vendor           *string `json:"Vendor" xml:"Vendor"`
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
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
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
	CorpName     *string `json:"CorpName" xml:"CorpName" require:"true"`
	AppName      *string `json:"AppName" xml:"AppName" require:"true"`
	ParentCorpId *string `json:"ParentCorpId" xml:"ParentCorpId"`
	Description  *string `json:"Description" xml:"Description"`
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
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	CorpId    *string `json:"CorpId" xml:"CorpId" require:"true"`
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
	CorpId *string `json:"CorpId" xml:"CorpId"`
	GbId   *string `json:"GbId" xml:"GbId"`
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
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Code      *string `json:"Code" xml:"Code" require:"true"`
	Data      *string `json:"Data" xml:"Data" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
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
