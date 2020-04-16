// This file is auto-generated, don't edit it. Thanks.
package client

import (
	openplatform "github.com/alibabacloud-go/OpenPlatform-20191219/client"
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	fileform "github.com/alibabacloud-go/tea-fileform/service"
	oss "github.com/alibabacloud-go/tea-oss-sdk/client"
	ossutil "github.com/alibabacloud-go/tea-oss-utils/service"
	rpcutil "github.com/alibabacloud-go/tea-rpc-utils/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
	"io"
)

type GetAsyncJobResultRequest struct {
	JobId *string `json:"JobId" xml:"JobId" require:"true"`
}

func (s GetAsyncJobResultRequest) String() string {
	return tea.Prettify(s)
}

func (s GetAsyncJobResultRequest) GoString() string {
	return s.String()
}

func (s *GetAsyncJobResultRequest) SetJobId(v string) *GetAsyncJobResultRequest {
	s.JobId = &v
	return s
}

type GetAsyncJobResultResponse struct {
	RequestId *string                        `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *GetAsyncJobResultResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s GetAsyncJobResultResponse) String() string {
	return tea.Prettify(s)
}

func (s GetAsyncJobResultResponse) GoString() string {
	return s.String()
}

func (s *GetAsyncJobResultResponse) SetRequestId(v string) *GetAsyncJobResultResponse {
	s.RequestId = &v
	return s
}

func (s *GetAsyncJobResultResponse) SetData(v *GetAsyncJobResultResponseData) *GetAsyncJobResultResponse {
	s.Data = v
	return s
}

type GetAsyncJobResultResponseData struct {
	ErrorCode    *string `json:"ErrorCode" xml:"ErrorCode" require:"true"`
	ErrorMessage *string `json:"ErrorMessage" xml:"ErrorMessage" require:"true"`
	JobId        *string `json:"JobId" xml:"JobId" require:"true"`
	Result       *string `json:"Result" xml:"Result" require:"true"`
	Status       *string `json:"Status" xml:"Status" require:"true"`
}

func (s GetAsyncJobResultResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetAsyncJobResultResponseData) GoString() string {
	return s.String()
}

func (s *GetAsyncJobResultResponseData) SetErrorCode(v string) *GetAsyncJobResultResponseData {
	s.ErrorCode = &v
	return s
}

func (s *GetAsyncJobResultResponseData) SetErrorMessage(v string) *GetAsyncJobResultResponseData {
	s.ErrorMessage = &v
	return s
}

func (s *GetAsyncJobResultResponseData) SetJobId(v string) *GetAsyncJobResultResponseData {
	s.JobId = &v
	return s
}

func (s *GetAsyncJobResultResponseData) SetResult(v string) *GetAsyncJobResultResponseData {
	s.Result = &v
	return s
}

func (s *GetAsyncJobResultResponseData) SetStatus(v string) *GetAsyncJobResultResponseData {
	s.Status = &v
	return s
}

type TrimDocumentRequest struct {
	FileURL    *string `json:"FileURL" xml:"FileURL" require:"true"`
	FileType   *string `json:"FileType" xml:"FileType" require:"true"`
	OutputType *string `json:"OutputType" xml:"OutputType" require:"true"`
}

func (s TrimDocumentRequest) String() string {
	return tea.Prettify(s)
}

func (s TrimDocumentRequest) GoString() string {
	return s.String()
}

func (s *TrimDocumentRequest) SetFileURL(v string) *TrimDocumentRequest {
	s.FileURL = &v
	return s
}

func (s *TrimDocumentRequest) SetFileType(v string) *TrimDocumentRequest {
	s.FileType = &v
	return s
}

func (s *TrimDocumentRequest) SetOutputType(v string) *TrimDocumentRequest {
	s.OutputType = &v
	return s
}

type TrimDocumentResponse struct {
	RequestId *string                   `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *TrimDocumentResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s TrimDocumentResponse) String() string {
	return tea.Prettify(s)
}

func (s TrimDocumentResponse) GoString() string {
	return s.String()
}

func (s *TrimDocumentResponse) SetRequestId(v string) *TrimDocumentResponse {
	s.RequestId = &v
	return s
}

func (s *TrimDocumentResponse) SetData(v *TrimDocumentResponseData) *TrimDocumentResponse {
	s.Data = v
	return s
}

type TrimDocumentResponseData struct {
	Content *string `json:"Content" xml:"Content" require:"true"`
}

func (s TrimDocumentResponseData) String() string {
	return tea.Prettify(s)
}

func (s TrimDocumentResponseData) GoString() string {
	return s.String()
}

func (s *TrimDocumentResponseData) SetContent(v string) *TrimDocumentResponseData {
	s.Content = &v
	return s
}

type TrimDocumentAdvanceRequest struct {
	FileURLObject io.Reader `json:"FileURLObject" xml:"FileURLObject" require:"true"`
	FileType      *string   `json:"FileType" xml:"FileType" require:"true"`
	OutputType    *string   `json:"OutputType" xml:"OutputType" require:"true"`
}

func (s TrimDocumentAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s TrimDocumentAdvanceRequest) GoString() string {
	return s.String()
}

func (s *TrimDocumentAdvanceRequest) SetFileURLObject(v io.Reader) *TrimDocumentAdvanceRequest {
	s.FileURLObject = v
	return s
}

func (s *TrimDocumentAdvanceRequest) SetFileType(v string) *TrimDocumentAdvanceRequest {
	s.FileType = &v
	return s
}

func (s *TrimDocumentAdvanceRequest) SetOutputType(v string) *TrimDocumentAdvanceRequest {
	s.OutputType = &v
	return s
}

type RecognizeChinapassportRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeChinapassportRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeChinapassportRequest) GoString() string {
	return s.String()
}

func (s *RecognizeChinapassportRequest) SetImageURL(v string) *RecognizeChinapassportRequest {
	s.ImageURL = &v
	return s
}

type RecognizeChinapassportResponse struct {
	RequestId *string                             `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeChinapassportResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeChinapassportResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeChinapassportResponse) GoString() string {
	return s.String()
}

func (s *RecognizeChinapassportResponse) SetRequestId(v string) *RecognizeChinapassportResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeChinapassportResponse) SetData(v *RecognizeChinapassportResponseData) *RecognizeChinapassportResponse {
	s.Data = v
	return s
}

type RecognizeChinapassportResponseData struct {
	Authority      *string `json:"Authority" xml:"Authority" require:"true"`
	BirthDate      *string `json:"BirthDate" xml:"BirthDate" require:"true"`
	BirthDay       *string `json:"BirthDay" xml:"BirthDay" require:"true"`
	BirthPlace     *string `json:"BirthPlace" xml:"BirthPlace" require:"true"`
	BirthPlaceRaw  *string `json:"BirthPlaceRaw" xml:"BirthPlaceRaw" require:"true"`
	Country        *string `json:"Country" xml:"Country" require:"true"`
	ExpiryDate     *string `json:"ExpiryDate" xml:"ExpiryDate" require:"true"`
	ExpiryDay      *string `json:"ExpiryDay" xml:"ExpiryDay" require:"true"`
	IssueDate      *string `json:"IssueDate" xml:"IssueDate" require:"true"`
	IssuePlace     *string `json:"IssuePlace" xml:"IssuePlace" require:"true"`
	IssuePlaceRaw  *string `json:"IssuePlaceRaw" xml:"IssuePlaceRaw" require:"true"`
	LineZero       *string `json:"LineZero" xml:"LineZero" require:"true"`
	LineOne        *string `json:"LineOne" xml:"LineOne" require:"true"`
	Name           *string `json:"Name" xml:"Name" require:"true"`
	NameChinese    *string `json:"NameChinese" xml:"NameChinese" require:"true"`
	NameChineseRaw *string `json:"NameChineseRaw" xml:"NameChineseRaw" require:"true"`
	PassportNo     *string `json:"PassportNo" xml:"PassportNo" require:"true"`
	PersonId       *string `json:"PersonId" xml:"PersonId" require:"true"`
	Sex            *string `json:"Sex" xml:"Sex" require:"true"`
	SourceCountry  *string `json:"SourceCountry" xml:"SourceCountry" require:"true"`
	Success        *bool   `json:"Success" xml:"Success" require:"true"`
	Type           *string `json:"Type" xml:"Type" require:"true"`
}

func (s RecognizeChinapassportResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeChinapassportResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeChinapassportResponseData) SetAuthority(v string) *RecognizeChinapassportResponseData {
	s.Authority = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetBirthDate(v string) *RecognizeChinapassportResponseData {
	s.BirthDate = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetBirthDay(v string) *RecognizeChinapassportResponseData {
	s.BirthDay = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetBirthPlace(v string) *RecognizeChinapassportResponseData {
	s.BirthPlace = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetBirthPlaceRaw(v string) *RecognizeChinapassportResponseData {
	s.BirthPlaceRaw = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetCountry(v string) *RecognizeChinapassportResponseData {
	s.Country = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetExpiryDate(v string) *RecognizeChinapassportResponseData {
	s.ExpiryDate = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetExpiryDay(v string) *RecognizeChinapassportResponseData {
	s.ExpiryDay = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetIssueDate(v string) *RecognizeChinapassportResponseData {
	s.IssueDate = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetIssuePlace(v string) *RecognizeChinapassportResponseData {
	s.IssuePlace = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetIssuePlaceRaw(v string) *RecognizeChinapassportResponseData {
	s.IssuePlaceRaw = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetLineZero(v string) *RecognizeChinapassportResponseData {
	s.LineZero = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetLineOne(v string) *RecognizeChinapassportResponseData {
	s.LineOne = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetName(v string) *RecognizeChinapassportResponseData {
	s.Name = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetNameChinese(v string) *RecognizeChinapassportResponseData {
	s.NameChinese = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetNameChineseRaw(v string) *RecognizeChinapassportResponseData {
	s.NameChineseRaw = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetPassportNo(v string) *RecognizeChinapassportResponseData {
	s.PassportNo = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetPersonId(v string) *RecognizeChinapassportResponseData {
	s.PersonId = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetSex(v string) *RecognizeChinapassportResponseData {
	s.Sex = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetSourceCountry(v string) *RecognizeChinapassportResponseData {
	s.SourceCountry = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetSuccess(v bool) *RecognizeChinapassportResponseData {
	s.Success = &v
	return s
}

func (s *RecognizeChinapassportResponseData) SetType(v string) *RecognizeChinapassportResponseData {
	s.Type = &v
	return s
}

type RecognizeChinapassportAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s RecognizeChinapassportAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeChinapassportAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeChinapassportAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeChinapassportAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeVerificationcodeRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeVerificationcodeRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVerificationcodeRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVerificationcodeRequest) SetImageURL(v string) *RecognizeVerificationcodeRequest {
	s.ImageURL = &v
	return s
}

type RecognizeVerificationcodeResponse struct {
	RequestId *string                                `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeVerificationcodeResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeVerificationcodeResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVerificationcodeResponse) GoString() string {
	return s.String()
}

func (s *RecognizeVerificationcodeResponse) SetRequestId(v string) *RecognizeVerificationcodeResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeVerificationcodeResponse) SetData(v *RecognizeVerificationcodeResponseData) *RecognizeVerificationcodeResponse {
	s.Data = v
	return s
}

type RecognizeVerificationcodeResponseData struct {
	Content *string `json:"Content" xml:"Content" require:"true"`
}

func (s RecognizeVerificationcodeResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVerificationcodeResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeVerificationcodeResponseData) SetContent(v string) *RecognizeVerificationcodeResponseData {
	s.Content = &v
	return s
}

type RecognizeVerificationcodeAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s RecognizeVerificationcodeAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVerificationcodeAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVerificationcodeAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeVerificationcodeAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizePassportMRZRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizePassportMRZRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizePassportMRZRequest) GoString() string {
	return s.String()
}

func (s *RecognizePassportMRZRequest) SetImageURL(v string) *RecognizePassportMRZRequest {
	s.ImageURL = &v
	return s
}

type RecognizePassportMRZResponse struct {
	RequestId *string                           `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizePassportMRZResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizePassportMRZResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizePassportMRZResponse) GoString() string {
	return s.String()
}

func (s *RecognizePassportMRZResponse) SetRequestId(v string) *RecognizePassportMRZResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizePassportMRZResponse) SetData(v *RecognizePassportMRZResponseData) *RecognizePassportMRZResponse {
	s.Data = v
	return s
}

type RecognizePassportMRZResponseData struct {
	Regions []*RecognizePassportMRZResponseDataRegions `json:"Regions" xml:"Regions" require:"true" type:"Repeated"`
}

func (s RecognizePassportMRZResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizePassportMRZResponseData) GoString() string {
	return s.String()
}

func (s *RecognizePassportMRZResponseData) SetRegions(v []*RecognizePassportMRZResponseDataRegions) *RecognizePassportMRZResponseData {
	s.Regions = v
	return s
}

type RecognizePassportMRZResponseDataRegions struct {
	Name             *string    `json:"Name" xml:"Name" require:"true"`
	RecognitionScore *float32   `json:"RecognitionScore" xml:"RecognitionScore" require:"true"`
	Content          *string    `json:"Content" xml:"Content" require:"true"`
	DetectionScore   *float32   `json:"DetectionScore" xml:"DetectionScore" require:"true"`
	BandBoxes        []*float32 `json:"BandBoxes" xml:"BandBoxes" require:"true" type:"Repeated"`
}

func (s RecognizePassportMRZResponseDataRegions) String() string {
	return tea.Prettify(s)
}

func (s RecognizePassportMRZResponseDataRegions) GoString() string {
	return s.String()
}

func (s *RecognizePassportMRZResponseDataRegions) SetName(v string) *RecognizePassportMRZResponseDataRegions {
	s.Name = &v
	return s
}

func (s *RecognizePassportMRZResponseDataRegions) SetRecognitionScore(v float32) *RecognizePassportMRZResponseDataRegions {
	s.RecognitionScore = &v
	return s
}

func (s *RecognizePassportMRZResponseDataRegions) SetContent(v string) *RecognizePassportMRZResponseDataRegions {
	s.Content = &v
	return s
}

func (s *RecognizePassportMRZResponseDataRegions) SetDetectionScore(v float32) *RecognizePassportMRZResponseDataRegions {
	s.DetectionScore = &v
	return s
}

func (s *RecognizePassportMRZResponseDataRegions) SetBandBoxes(v []*float32) *RecognizePassportMRZResponseDataRegions {
	s.BandBoxes = v
	return s
}

type RecognizePassportMRZAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s RecognizePassportMRZAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizePassportMRZAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizePassportMRZAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizePassportMRZAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeTakeoutOrderRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeTakeoutOrderRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTakeoutOrderRequest) GoString() string {
	return s.String()
}

func (s *RecognizeTakeoutOrderRequest) SetImageURL(v string) *RecognizeTakeoutOrderRequest {
	s.ImageURL = &v
	return s
}

type RecognizeTakeoutOrderResponse struct {
	RequestId *string                            `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeTakeoutOrderResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeTakeoutOrderResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTakeoutOrderResponse) GoString() string {
	return s.String()
}

func (s *RecognizeTakeoutOrderResponse) SetRequestId(v string) *RecognizeTakeoutOrderResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeTakeoutOrderResponse) SetData(v *RecognizeTakeoutOrderResponseData) *RecognizeTakeoutOrderResponse {
	s.Data = v
	return s
}

type RecognizeTakeoutOrderResponseData struct {
	Elements []*RecognizeTakeoutOrderResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
}

func (s RecognizeTakeoutOrderResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTakeoutOrderResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeTakeoutOrderResponseData) SetElements(v []*RecognizeTakeoutOrderResponseDataElements) *RecognizeTakeoutOrderResponseData {
	s.Elements = v
	return s
}

type RecognizeTakeoutOrderResponseDataElements struct {
	Score *float32 `json:"Score" xml:"Score" require:"true"`
	Name  *string  `json:"Name" xml:"Name" require:"true"`
	Value *string  `json:"Value" xml:"Value" require:"true"`
	Boxes []*int   `json:"Boxes" xml:"Boxes" require:"true" type:"Repeated"`
}

func (s RecognizeTakeoutOrderResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTakeoutOrderResponseDataElements) GoString() string {
	return s.String()
}

func (s *RecognizeTakeoutOrderResponseDataElements) SetScore(v float32) *RecognizeTakeoutOrderResponseDataElements {
	s.Score = &v
	return s
}

func (s *RecognizeTakeoutOrderResponseDataElements) SetName(v string) *RecognizeTakeoutOrderResponseDataElements {
	s.Name = &v
	return s
}

func (s *RecognizeTakeoutOrderResponseDataElements) SetValue(v string) *RecognizeTakeoutOrderResponseDataElements {
	s.Value = &v
	return s
}

func (s *RecognizeTakeoutOrderResponseDataElements) SetBoxes(v []*int) *RecognizeTakeoutOrderResponseDataElements {
	s.Boxes = v
	return s
}

type RecognizeTakeoutOrderAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s RecognizeTakeoutOrderAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTakeoutOrderAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeTakeoutOrderAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeTakeoutOrderAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeQrCodeRequest struct {
	Tasks []*RecognizeQrCodeRequestTasks `json:"Tasks" xml:"Tasks" require:"true" type:"Repeated"`
}

func (s RecognizeQrCodeRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeQrCodeRequest) GoString() string {
	return s.String()
}

func (s *RecognizeQrCodeRequest) SetTasks(v []*RecognizeQrCodeRequestTasks) *RecognizeQrCodeRequest {
	s.Tasks = v
	return s
}

type RecognizeQrCodeRequestTasks struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeQrCodeRequestTasks) String() string {
	return tea.Prettify(s)
}

func (s RecognizeQrCodeRequestTasks) GoString() string {
	return s.String()
}

func (s *RecognizeQrCodeRequestTasks) SetImageURL(v string) *RecognizeQrCodeRequestTasks {
	s.ImageURL = &v
	return s
}

type RecognizeQrCodeResponse struct {
	RequestId *string                      `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeQrCodeResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeQrCodeResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeQrCodeResponse) GoString() string {
	return s.String()
}

func (s *RecognizeQrCodeResponse) SetRequestId(v string) *RecognizeQrCodeResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeQrCodeResponse) SetData(v *RecognizeQrCodeResponseData) *RecognizeQrCodeResponse {
	s.Data = v
	return s
}

type RecognizeQrCodeResponseData struct {
	Elements []*RecognizeQrCodeResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
}

func (s RecognizeQrCodeResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeQrCodeResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeQrCodeResponseData) SetElements(v []*RecognizeQrCodeResponseDataElements) *RecognizeQrCodeResponseData {
	s.Elements = v
	return s
}

type RecognizeQrCodeResponseDataElements struct {
	TaskId   *string                                       `json:"TaskId" xml:"TaskId" require:"true"`
	ImageURL *string                                       `json:"ImageURL" xml:"ImageURL" require:"true"`
	Results  []*RecognizeQrCodeResponseDataElementsResults `json:"Results" xml:"Results" require:"true" type:"Repeated"`
}

func (s RecognizeQrCodeResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s RecognizeQrCodeResponseDataElements) GoString() string {
	return s.String()
}

func (s *RecognizeQrCodeResponseDataElements) SetTaskId(v string) *RecognizeQrCodeResponseDataElements {
	s.TaskId = &v
	return s
}

func (s *RecognizeQrCodeResponseDataElements) SetImageURL(v string) *RecognizeQrCodeResponseDataElements {
	s.ImageURL = &v
	return s
}

func (s *RecognizeQrCodeResponseDataElements) SetResults(v []*RecognizeQrCodeResponseDataElementsResults) *RecognizeQrCodeResponseDataElements {
	s.Results = v
	return s
}

type RecognizeQrCodeResponseDataElementsResults struct {
	Label       *string   `json:"Label" xml:"Label" require:"true"`
	Suggestion  *string   `json:"Suggestion" xml:"Suggestion" require:"true"`
	Rate        *float32  `json:"Rate" xml:"Rate" require:"true"`
	QrCodesData []*string `json:"QrCodesData" xml:"QrCodesData" require:"true" type:"Repeated"`
}

func (s RecognizeQrCodeResponseDataElementsResults) String() string {
	return tea.Prettify(s)
}

func (s RecognizeQrCodeResponseDataElementsResults) GoString() string {
	return s.String()
}

func (s *RecognizeQrCodeResponseDataElementsResults) SetLabel(v string) *RecognizeQrCodeResponseDataElementsResults {
	s.Label = &v
	return s
}

func (s *RecognizeQrCodeResponseDataElementsResults) SetSuggestion(v string) *RecognizeQrCodeResponseDataElementsResults {
	s.Suggestion = &v
	return s
}

func (s *RecognizeQrCodeResponseDataElementsResults) SetRate(v float32) *RecognizeQrCodeResponseDataElementsResults {
	s.Rate = &v
	return s
}

func (s *RecognizeQrCodeResponseDataElementsResults) SetQrCodesData(v []*string) *RecognizeQrCodeResponseDataElementsResults {
	s.QrCodesData = v
	return s
}

type RecognizeVATInvoiceRequest struct {
	FileURL  *string `json:"FileURL" xml:"FileURL" require:"true"`
	FileType *string `json:"FileType" xml:"FileType" require:"true"`
}

func (s RecognizeVATInvoiceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVATInvoiceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVATInvoiceRequest) SetFileURL(v string) *RecognizeVATInvoiceRequest {
	s.FileURL = &v
	return s
}

func (s *RecognizeVATInvoiceRequest) SetFileType(v string) *RecognizeVATInvoiceRequest {
	s.FileType = &v
	return s
}

type RecognizeVATInvoiceResponse struct {
	RequestId *string                          `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeVATInvoiceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeVATInvoiceResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVATInvoiceResponse) GoString() string {
	return s.String()
}

func (s *RecognizeVATInvoiceResponse) SetRequestId(v string) *RecognizeVATInvoiceResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeVATInvoiceResponse) SetData(v *RecognizeVATInvoiceResponseData) *RecognizeVATInvoiceResponse {
	s.Data = v
	return s
}

type RecognizeVATInvoiceResponseData struct {
	Content *RecognizeVATInvoiceResponseDataContent `json:"Content" xml:"Content" require:"true" type:"Struct"`
	Box     *RecognizeVATInvoiceResponseDataBox     `json:"Box" xml:"Box" require:"true" type:"Struct"`
}

func (s RecognizeVATInvoiceResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVATInvoiceResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeVATInvoiceResponseData) SetContent(v *RecognizeVATInvoiceResponseDataContent) *RecognizeVATInvoiceResponseData {
	s.Content = v
	return s
}

func (s *RecognizeVATInvoiceResponseData) SetBox(v *RecognizeVATInvoiceResponseDataBox) *RecognizeVATInvoiceResponseData {
	s.Box = v
	return s
}

type RecognizeVATInvoiceResponseDataContent struct {
	InvoiceCode      *string `json:"InvoiceCode" xml:"InvoiceCode" require:"true"`
	InvoiceNo        *string `json:"InvoiceNo" xml:"InvoiceNo" require:"true"`
	InvoiceDate      *string `json:"InvoiceDate" xml:"InvoiceDate" require:"true"`
	AntiFakeCode     *string `json:"AntiFakeCode" xml:"AntiFakeCode" require:"true"`
	PayerName        *string `json:"PayerName" xml:"PayerName" require:"true"`
	PayerRegisterNo  *string `json:"PayerRegisterNo" xml:"PayerRegisterNo" require:"true"`
	PayerAddress     *string `json:"PayerAddress" xml:"PayerAddress" require:"true"`
	PayerBankName    *string `json:"PayerBankName" xml:"PayerBankName" require:"true"`
	WithoutTaxAmount *string `json:"WithoutTaxAmount" xml:"WithoutTaxAmount" require:"true"`
	TaxAmount        *string `json:"TaxAmount" xml:"TaxAmount" require:"true"`
	SumAmount        *string `json:"SumAmount" xml:"SumAmount" require:"true"`
	InvoiceAmount    *string `json:"InvoiceAmount" xml:"InvoiceAmount" require:"true"`
	PayeeName        *string `json:"PayeeName" xml:"PayeeName" require:"true"`
	PayeeRegisterNo  *string `json:"PayeeRegisterNo" xml:"PayeeRegisterNo" require:"true"`
	PayeeAddress     *string `json:"PayeeAddress" xml:"PayeeAddress" require:"true"`
	PayeeBankName    *string `json:"PayeeBankName" xml:"PayeeBankName" require:"true"`
	Payee            *string `json:"Payee" xml:"Payee" require:"true"`
	Checker          *string `json:"Checker" xml:"Checker" require:"true"`
	Clerk            *string `json:"Clerk" xml:"Clerk" require:"true"`
}

func (s RecognizeVATInvoiceResponseDataContent) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVATInvoiceResponseDataContent) GoString() string {
	return s.String()
}

func (s *RecognizeVATInvoiceResponseDataContent) SetInvoiceCode(v string) *RecognizeVATInvoiceResponseDataContent {
	s.InvoiceCode = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetInvoiceNo(v string) *RecognizeVATInvoiceResponseDataContent {
	s.InvoiceNo = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetInvoiceDate(v string) *RecognizeVATInvoiceResponseDataContent {
	s.InvoiceDate = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetAntiFakeCode(v string) *RecognizeVATInvoiceResponseDataContent {
	s.AntiFakeCode = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetPayerName(v string) *RecognizeVATInvoiceResponseDataContent {
	s.PayerName = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetPayerRegisterNo(v string) *RecognizeVATInvoiceResponseDataContent {
	s.PayerRegisterNo = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetPayerAddress(v string) *RecognizeVATInvoiceResponseDataContent {
	s.PayerAddress = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetPayerBankName(v string) *RecognizeVATInvoiceResponseDataContent {
	s.PayerBankName = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetWithoutTaxAmount(v string) *RecognizeVATInvoiceResponseDataContent {
	s.WithoutTaxAmount = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetTaxAmount(v string) *RecognizeVATInvoiceResponseDataContent {
	s.TaxAmount = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetSumAmount(v string) *RecognizeVATInvoiceResponseDataContent {
	s.SumAmount = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetInvoiceAmount(v string) *RecognizeVATInvoiceResponseDataContent {
	s.InvoiceAmount = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetPayeeName(v string) *RecognizeVATInvoiceResponseDataContent {
	s.PayeeName = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetPayeeRegisterNo(v string) *RecognizeVATInvoiceResponseDataContent {
	s.PayeeRegisterNo = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetPayeeAddress(v string) *RecognizeVATInvoiceResponseDataContent {
	s.PayeeAddress = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetPayeeBankName(v string) *RecognizeVATInvoiceResponseDataContent {
	s.PayeeBankName = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetPayee(v string) *RecognizeVATInvoiceResponseDataContent {
	s.Payee = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetChecker(v string) *RecognizeVATInvoiceResponseDataContent {
	s.Checker = &v
	return s
}

func (s *RecognizeVATInvoiceResponseDataContent) SetClerk(v string) *RecognizeVATInvoiceResponseDataContent {
	s.Clerk = &v
	return s
}

type RecognizeVATInvoiceResponseDataBox struct {
	InvoiceCodes      []*float32 `json:"InvoiceCodes" xml:"InvoiceCodes" require:"true" type:"Repeated"`
	InvoiceNoes       []*float32 `json:"InvoiceNoes" xml:"InvoiceNoes" require:"true" type:"Repeated"`
	InvoiceDates      []*float32 `json:"InvoiceDates" xml:"InvoiceDates" require:"true" type:"Repeated"`
	InvoiceFakeCodes  []*float32 `json:"InvoiceFakeCodes" xml:"InvoiceFakeCodes" require:"true" type:"Repeated"`
	PayerNames        []*float32 `json:"PayerNames" xml:"PayerNames" require:"true" type:"Repeated"`
	PayerRegisterNoes []*float32 `json:"PayerRegisterNoes" xml:"PayerRegisterNoes" require:"true" type:"Repeated"`
	PayerAddresses    []*float32 `json:"PayerAddresses" xml:"PayerAddresses" require:"true" type:"Repeated"`
	PayerBankNames    []*float32 `json:"PayerBankNames" xml:"PayerBankNames" require:"true" type:"Repeated"`
	WithoutTaxAmounts []*float32 `json:"WithoutTaxAmounts" xml:"WithoutTaxAmounts" require:"true" type:"Repeated"`
	TaxAmounts        []*float32 `json:"TaxAmounts" xml:"TaxAmounts" require:"true" type:"Repeated"`
	SumAmounts        []*float32 `json:"SumAmounts" xml:"SumAmounts" require:"true" type:"Repeated"`
	InvoiceAmounts    []*float32 `json:"InvoiceAmounts" xml:"InvoiceAmounts" require:"true" type:"Repeated"`
	PayeeNames        []*float32 `json:"PayeeNames" xml:"PayeeNames" require:"true" type:"Repeated"`
	PayeeRegisterNoes []*float32 `json:"PayeeRegisterNoes" xml:"PayeeRegisterNoes" require:"true" type:"Repeated"`
	PayeeAddresses    []*float32 `json:"PayeeAddresses" xml:"PayeeAddresses" require:"true" type:"Repeated"`
	PayeeBankNames    []*float32 `json:"PayeeBankNames" xml:"PayeeBankNames" require:"true" type:"Repeated"`
	Payees            []*float32 `json:"Payees" xml:"Payees" require:"true" type:"Repeated"`
	Checkers          []*float32 `json:"Checkers" xml:"Checkers" require:"true" type:"Repeated"`
	Clerks            []*float32 `json:"Clerks" xml:"Clerks" require:"true" type:"Repeated"`
}

func (s RecognizeVATInvoiceResponseDataBox) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVATInvoiceResponseDataBox) GoString() string {
	return s.String()
}

func (s *RecognizeVATInvoiceResponseDataBox) SetInvoiceCodes(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.InvoiceCodes = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetInvoiceNoes(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.InvoiceNoes = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetInvoiceDates(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.InvoiceDates = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetInvoiceFakeCodes(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.InvoiceFakeCodes = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetPayerNames(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.PayerNames = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetPayerRegisterNoes(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.PayerRegisterNoes = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetPayerAddresses(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.PayerAddresses = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetPayerBankNames(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.PayerBankNames = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetWithoutTaxAmounts(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.WithoutTaxAmounts = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetTaxAmounts(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.TaxAmounts = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetSumAmounts(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.SumAmounts = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetInvoiceAmounts(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.InvoiceAmounts = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetPayeeNames(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.PayeeNames = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetPayeeRegisterNoes(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.PayeeRegisterNoes = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetPayeeAddresses(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.PayeeAddresses = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetPayeeBankNames(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.PayeeBankNames = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetPayees(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.Payees = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetCheckers(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.Checkers = v
	return s
}

func (s *RecognizeVATInvoiceResponseDataBox) SetClerks(v []*float32) *RecognizeVATInvoiceResponseDataBox {
	s.Clerks = v
	return s
}

type RecognizeVATInvoiceAdvanceRequest struct {
	FileURLObject io.Reader `json:"FileURLObject" xml:"FileURLObject" require:"true"`
	FileType      *string   `json:"FileType" xml:"FileType" require:"true"`
}

func (s RecognizeVATInvoiceAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVATInvoiceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVATInvoiceAdvanceRequest) SetFileURLObject(v io.Reader) *RecognizeVATInvoiceAdvanceRequest {
	s.FileURLObject = v
	return s
}

func (s *RecognizeVATInvoiceAdvanceRequest) SetFileType(v string) *RecognizeVATInvoiceAdvanceRequest {
	s.FileType = &v
	return s
}

type RecognizeCharacterRequest struct {
	ImageURL          *string `json:"ImageURL" xml:"ImageURL" require:"true"`
	MinHeight         *int    `json:"MinHeight" xml:"MinHeight" require:"true"`
	OutputProbability *bool   `json:"OutputProbability" xml:"OutputProbability" require:"true"`
}

func (s RecognizeCharacterRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeCharacterRequest) GoString() string {
	return s.String()
}

func (s *RecognizeCharacterRequest) SetImageURL(v string) *RecognizeCharacterRequest {
	s.ImageURL = &v
	return s
}

func (s *RecognizeCharacterRequest) SetMinHeight(v int) *RecognizeCharacterRequest {
	s.MinHeight = &v
	return s
}

func (s *RecognizeCharacterRequest) SetOutputProbability(v bool) *RecognizeCharacterRequest {
	s.OutputProbability = &v
	return s
}

type RecognizeCharacterResponse struct {
	RequestId *string                         `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeCharacterResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeCharacterResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeCharacterResponse) GoString() string {
	return s.String()
}

func (s *RecognizeCharacterResponse) SetRequestId(v string) *RecognizeCharacterResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeCharacterResponse) SetData(v *RecognizeCharacterResponseData) *RecognizeCharacterResponse {
	s.Data = v
	return s
}

type RecognizeCharacterResponseData struct {
	Results []*RecognizeCharacterResponseDataResults `json:"Results" xml:"Results" require:"true" type:"Repeated"`
}

func (s RecognizeCharacterResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeCharacterResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeCharacterResponseData) SetResults(v []*RecognizeCharacterResponseDataResults) *RecognizeCharacterResponseData {
	s.Results = v
	return s
}

type RecognizeCharacterResponseDataResults struct {
	Probability    *float32                                             `json:"Probability" xml:"Probability" require:"true"`
	Text           *string                                              `json:"Text" xml:"Text" require:"true"`
	TextRectangles *RecognizeCharacterResponseDataResultsTextRectangles `json:"TextRectangles" xml:"TextRectangles" require:"true" type:"Struct"`
}

func (s RecognizeCharacterResponseDataResults) String() string {
	return tea.Prettify(s)
}

func (s RecognizeCharacterResponseDataResults) GoString() string {
	return s.String()
}

func (s *RecognizeCharacterResponseDataResults) SetProbability(v float32) *RecognizeCharacterResponseDataResults {
	s.Probability = &v
	return s
}

func (s *RecognizeCharacterResponseDataResults) SetText(v string) *RecognizeCharacterResponseDataResults {
	s.Text = &v
	return s
}

func (s *RecognizeCharacterResponseDataResults) SetTextRectangles(v *RecognizeCharacterResponseDataResultsTextRectangles) *RecognizeCharacterResponseDataResults {
	s.TextRectangles = v
	return s
}

type RecognizeCharacterResponseDataResultsTextRectangles struct {
	Angle  *int `json:"Angle" xml:"Angle" require:"true"`
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
}

func (s RecognizeCharacterResponseDataResultsTextRectangles) String() string {
	return tea.Prettify(s)
}

func (s RecognizeCharacterResponseDataResultsTextRectangles) GoString() string {
	return s.String()
}

func (s *RecognizeCharacterResponseDataResultsTextRectangles) SetAngle(v int) *RecognizeCharacterResponseDataResultsTextRectangles {
	s.Angle = &v
	return s
}

func (s *RecognizeCharacterResponseDataResultsTextRectangles) SetLeft(v int) *RecognizeCharacterResponseDataResultsTextRectangles {
	s.Left = &v
	return s
}

func (s *RecognizeCharacterResponseDataResultsTextRectangles) SetTop(v int) *RecognizeCharacterResponseDataResultsTextRectangles {
	s.Top = &v
	return s
}

func (s *RecognizeCharacterResponseDataResultsTextRectangles) SetWidth(v int) *RecognizeCharacterResponseDataResultsTextRectangles {
	s.Width = &v
	return s
}

func (s *RecognizeCharacterResponseDataResultsTextRectangles) SetHeight(v int) *RecognizeCharacterResponseDataResultsTextRectangles {
	s.Height = &v
	return s
}

type RecognizeCharacterAdvanceRequest struct {
	ImageURLObject    io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	MinHeight         *int      `json:"MinHeight" xml:"MinHeight" require:"true"`
	OutputProbability *bool     `json:"OutputProbability" xml:"OutputProbability" require:"true"`
}

func (s RecognizeCharacterAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeCharacterAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeCharacterAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeCharacterAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeCharacterAdvanceRequest) SetMinHeight(v int) *RecognizeCharacterAdvanceRequest {
	s.MinHeight = &v
	return s
}

func (s *RecognizeCharacterAdvanceRequest) SetOutputProbability(v bool) *RecognizeCharacterAdvanceRequest {
	s.OutputProbability = &v
	return s
}

type RecognizeTaxiInvoiceRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeTaxiInvoiceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTaxiInvoiceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceRequest) SetImageURL(v string) *RecognizeTaxiInvoiceRequest {
	s.ImageURL = &v
	return s
}

type RecognizeTaxiInvoiceResponse struct {
	RequestId *string                           `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeTaxiInvoiceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeTaxiInvoiceResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponse) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponse) SetRequestId(v string) *RecognizeTaxiInvoiceResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponse) SetData(v *RecognizeTaxiInvoiceResponseData) *RecognizeTaxiInvoiceResponse {
	s.Data = v
	return s
}

type RecognizeTaxiInvoiceResponseData struct {
	Invoices []*RecognizeTaxiInvoiceResponseDataInvoices `json:"Invoices" xml:"Invoices" require:"true" type:"Repeated"`
}

func (s RecognizeTaxiInvoiceResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponseData) SetInvoices(v []*RecognizeTaxiInvoiceResponseDataInvoices) *RecognizeTaxiInvoiceResponseData {
	s.Invoices = v
	return s
}

type RecognizeTaxiInvoiceResponseDataInvoices struct {
	RotateType *int                                                `json:"RotateType" xml:"RotateType" require:"true"`
	Items      []*RecognizeTaxiInvoiceResponseDataInvoicesItems    `json:"Items" xml:"Items" require:"true" type:"Repeated"`
	InvoiceRoi *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi `json:"InvoiceRoi" xml:"InvoiceRoi" require:"true" type:"Struct"`
}

func (s RecognizeTaxiInvoiceResponseDataInvoices) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponseDataInvoices) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponseDataInvoices) SetRotateType(v int) *RecognizeTaxiInvoiceResponseDataInvoices {
	s.RotateType = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoices) SetItems(v []*RecognizeTaxiInvoiceResponseDataInvoicesItems) *RecognizeTaxiInvoiceResponseDataInvoices {
	s.Items = v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoices) SetInvoiceRoi(v *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi) *RecognizeTaxiInvoiceResponseDataInvoices {
	s.InvoiceRoi = v
	return s
}

type RecognizeTaxiInvoiceResponseDataInvoicesItems struct {
	Text    *string                                               `json:"Text" xml:"Text" require:"true"`
	ItemRoi *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi `json:"ItemRoi" xml:"ItemRoi" require:"true" type:"Struct"`
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItems) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItems) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItems) SetText(v string) *RecognizeTaxiInvoiceResponseDataInvoicesItems {
	s.Text = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItems) SetItemRoi(v *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi) *RecognizeTaxiInvoiceResponseDataInvoicesItems {
	s.ItemRoi = v
	return s
}

type RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi struct {
	Angle  *float32                                                    `json:"Angle" xml:"Angle" require:"true"`
	Center *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter `json:"Center" xml:"Center" require:"true" type:"Struct"`
	Size   *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize   `json:"Size" xml:"Size" require:"true" type:"Struct"`
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi) SetAngle(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi {
	s.Angle = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi) SetCenter(v *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter) *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi {
	s.Center = v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi) SetSize(v *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize) *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi {
	s.Size = v
	return s
}

type RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter struct {
	X *float32 `json:"X" xml:"X" require:"true"`
	Y *float32 `json:"Y" xml:"Y" require:"true"`
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter) SetX(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter {
	s.X = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter) SetY(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter {
	s.Y = &v
	return s
}

type RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize struct {
	H *float32 `json:"H" xml:"H" require:"true"`
	W *float32 `json:"W" xml:"W" require:"true"`
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize) SetH(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize {
	s.H = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize) SetW(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize {
	s.W = &v
	return s
}

type RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi struct {
	H *float32 `json:"H" xml:"H" require:"true"`
	W *float32 `json:"W" xml:"W" require:"true"`
	X *float32 `json:"X" xml:"X" require:"true"`
	Y *float32 `json:"Y" xml:"Y" require:"true"`
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi) SetH(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi {
	s.H = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi) SetW(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi {
	s.W = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi) SetX(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi {
	s.X = &v
	return s
}

func (s *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi) SetY(v float32) *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi {
	s.Y = &v
	return s
}

type RecognizeTaxiInvoiceAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s RecognizeTaxiInvoiceAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTaxiInvoiceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeTaxiInvoiceAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeTaxiInvoiceAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeIdentityCardRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
	Side     *string `json:"Side" xml:"Side" require:"true"`
}

func (s RecognizeIdentityCardRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeIdentityCardRequest) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardRequest) SetImageURL(v string) *RecognizeIdentityCardRequest {
	s.ImageURL = &v
	return s
}

func (s *RecognizeIdentityCardRequest) SetSide(v string) *RecognizeIdentityCardRequest {
	s.Side = &v
	return s
}

type RecognizeIdentityCardResponse struct {
	RequestId *string                            `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeIdentityCardResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeIdentityCardResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeIdentityCardResponse) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponse) SetRequestId(v string) *RecognizeIdentityCardResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeIdentityCardResponse) SetData(v *RecognizeIdentityCardResponseData) *RecognizeIdentityCardResponse {
	s.Data = v
	return s
}

type RecognizeIdentityCardResponseData struct {
	FrontResult *RecognizeIdentityCardResponseDataFrontResult `json:"FrontResult" xml:"FrontResult" require:"true" type:"Struct"`
	BackResult  *RecognizeIdentityCardResponseDataBackResult  `json:"BackResult" xml:"BackResult" require:"true" type:"Struct"`
}

func (s RecognizeIdentityCardResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeIdentityCardResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseData) SetFrontResult(v *RecognizeIdentityCardResponseDataFrontResult) *RecognizeIdentityCardResponseData {
	s.FrontResult = v
	return s
}

func (s *RecognizeIdentityCardResponseData) SetBackResult(v *RecognizeIdentityCardResponseDataBackResult) *RecognizeIdentityCardResponseData {
	s.BackResult = v
	return s
}

type RecognizeIdentityCardResponseDataFrontResult struct {
	Address          *string                                                         `json:"Address" xml:"Address" require:"true"`
	Name             *string                                                         `json:"Name" xml:"Name" require:"true"`
	Nationality      *string                                                         `json:"Nationality" xml:"Nationality" require:"true"`
	IDNumber         *string                                                         `json:"IDNumber" xml:"IDNumber" require:"true"`
	Gender           *string                                                         `json:"Gender" xml:"Gender" require:"true"`
	BirthDate        *string                                                         `json:"BirthDate" xml:"BirthDate" require:"true"`
	CardAreas        []*RecognizeIdentityCardResponseDataFrontResultCardAreas        `json:"CardAreas" xml:"CardAreas" require:"true" type:"Repeated"`
	FaceRectVertices []*RecognizeIdentityCardResponseDataFrontResultFaceRectVertices `json:"FaceRectVertices" xml:"FaceRectVertices" require:"true" type:"Repeated"`
	FaceRectangle    *RecognizeIdentityCardResponseDataFrontResultFaceRectangle      `json:"FaceRectangle" xml:"FaceRectangle" require:"true" type:"Struct"`
}

func (s RecognizeIdentityCardResponseDataFrontResult) String() string {
	return tea.Prettify(s)
}

func (s RecognizeIdentityCardResponseDataFrontResult) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetAddress(v string) *RecognizeIdentityCardResponseDataFrontResult {
	s.Address = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetName(v string) *RecognizeIdentityCardResponseDataFrontResult {
	s.Name = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetNationality(v string) *RecognizeIdentityCardResponseDataFrontResult {
	s.Nationality = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetIDNumber(v string) *RecognizeIdentityCardResponseDataFrontResult {
	s.IDNumber = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetGender(v string) *RecognizeIdentityCardResponseDataFrontResult {
	s.Gender = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetBirthDate(v string) *RecognizeIdentityCardResponseDataFrontResult {
	s.BirthDate = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetCardAreas(v []*RecognizeIdentityCardResponseDataFrontResultCardAreas) *RecognizeIdentityCardResponseDataFrontResult {
	s.CardAreas = v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetFaceRectVertices(v []*RecognizeIdentityCardResponseDataFrontResultFaceRectVertices) *RecognizeIdentityCardResponseDataFrontResult {
	s.FaceRectVertices = v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResult) SetFaceRectangle(v *RecognizeIdentityCardResponseDataFrontResultFaceRectangle) *RecognizeIdentityCardResponseDataFrontResult {
	s.FaceRectangle = v
	return s
}

type RecognizeIdentityCardResponseDataFrontResultCardAreas struct {
	X *float32 `json:"X" xml:"X" require:"true"`
	Y *float32 `json:"Y" xml:"Y" require:"true"`
}

func (s RecognizeIdentityCardResponseDataFrontResultCardAreas) String() string {
	return tea.Prettify(s)
}

func (s RecognizeIdentityCardResponseDataFrontResultCardAreas) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseDataFrontResultCardAreas) SetX(v float32) *RecognizeIdentityCardResponseDataFrontResultCardAreas {
	s.X = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResultCardAreas) SetY(v float32) *RecognizeIdentityCardResponseDataFrontResultCardAreas {
	s.Y = &v
	return s
}

type RecognizeIdentityCardResponseDataFrontResultFaceRectVertices struct {
	X *float32 `json:"X" xml:"X" require:"true"`
	Y *float32 `json:"Y" xml:"Y" require:"true"`
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectVertices) String() string {
	return tea.Prettify(s)
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectVertices) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectVertices) SetX(v float32) *RecognizeIdentityCardResponseDataFrontResultFaceRectVertices {
	s.X = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectVertices) SetY(v float32) *RecognizeIdentityCardResponseDataFrontResultFaceRectVertices {
	s.Y = &v
	return s
}

type RecognizeIdentityCardResponseDataFrontResultFaceRectangle struct {
	Angle  *float32                                                         `json:"Angle" xml:"Angle" require:"true"`
	Center *RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter `json:"Center" xml:"Center" require:"true" type:"Struct"`
	Size   *RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize   `json:"Size" xml:"Size" require:"true" type:"Struct"`
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectangle) String() string {
	return tea.Prettify(s)
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectangle) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectangle) SetAngle(v float32) *RecognizeIdentityCardResponseDataFrontResultFaceRectangle {
	s.Angle = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectangle) SetCenter(v *RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter) *RecognizeIdentityCardResponseDataFrontResultFaceRectangle {
	s.Center = v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectangle) SetSize(v *RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize) *RecognizeIdentityCardResponseDataFrontResultFaceRectangle {
	s.Size = v
	return s
}

type RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter struct {
	X *float32 `json:"X" xml:"X" require:"true"`
	Y *float32 `json:"Y" xml:"Y" require:"true"`
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter) String() string {
	return tea.Prettify(s)
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter) SetX(v float32) *RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter {
	s.X = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter) SetY(v float32) *RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter {
	s.Y = &v
	return s
}

type RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize struct {
	Height *float32 `json:"Height" xml:"Height" require:"true"`
	Width  *float32 `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize) String() string {
	return tea.Prettify(s)
}

func (s RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize) SetHeight(v float32) *RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize {
	s.Height = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize) SetWidth(v float32) *RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize {
	s.Width = &v
	return s
}

type RecognizeIdentityCardResponseDataBackResult struct {
	StartDate *string `json:"StartDate" xml:"StartDate" require:"true"`
	EndDate   *string `json:"EndDate" xml:"EndDate" require:"true"`
	Issue     *string `json:"Issue" xml:"Issue" require:"true"`
}

func (s RecognizeIdentityCardResponseDataBackResult) String() string {
	return tea.Prettify(s)
}

func (s RecognizeIdentityCardResponseDataBackResult) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardResponseDataBackResult) SetStartDate(v string) *RecognizeIdentityCardResponseDataBackResult {
	s.StartDate = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataBackResult) SetEndDate(v string) *RecognizeIdentityCardResponseDataBackResult {
	s.EndDate = &v
	return s
}

func (s *RecognizeIdentityCardResponseDataBackResult) SetIssue(v string) *RecognizeIdentityCardResponseDataBackResult {
	s.Issue = &v
	return s
}

type RecognizeIdentityCardAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	Side           *string   `json:"Side" xml:"Side" require:"true"`
}

func (s RecognizeIdentityCardAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeIdentityCardAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeIdentityCardAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeIdentityCardAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeIdentityCardAdvanceRequest) SetSide(v string) *RecognizeIdentityCardAdvanceRequest {
	s.Side = &v
	return s
}

type RecognizeLicensePlateRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeLicensePlateRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLicensePlateRequest) GoString() string {
	return s.String()
}

func (s *RecognizeLicensePlateRequest) SetImageURL(v string) *RecognizeLicensePlateRequest {
	s.ImageURL = &v
	return s
}

type RecognizeLicensePlateResponse struct {
	RequestId *string                            `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeLicensePlateResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeLicensePlateResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLicensePlateResponse) GoString() string {
	return s.String()
}

func (s *RecognizeLicensePlateResponse) SetRequestId(v string) *RecognizeLicensePlateResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeLicensePlateResponse) SetData(v *RecognizeLicensePlateResponseData) *RecognizeLicensePlateResponse {
	s.Data = v
	return s
}

type RecognizeLicensePlateResponseData struct {
	Plates []*RecognizeLicensePlateResponseDataPlates `json:"Plates" xml:"Plates" require:"true" type:"Repeated"`
}

func (s RecognizeLicensePlateResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLicensePlateResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeLicensePlateResponseData) SetPlates(v []*RecognizeLicensePlateResponseDataPlates) *RecognizeLicensePlateResponseData {
	s.Plates = v
	return s
}

type RecognizeLicensePlateResponseDataPlates struct {
	Confidence          *float32                                    `json:"Confidence" xml:"Confidence" require:"true"`
	PlateNumber         *string                                     `json:"PlateNumber" xml:"PlateNumber" require:"true"`
	PlateType           *string                                     `json:"PlateType" xml:"PlateType" require:"true"`
	PlateTypeConfidence *float32                                    `json:"PlateTypeConfidence" xml:"PlateTypeConfidence" require:"true"`
	Roi                 *RecognizeLicensePlateResponseDataPlatesRoi `json:"Roi" xml:"Roi" require:"true" type:"Struct"`
}

func (s RecognizeLicensePlateResponseDataPlates) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLicensePlateResponseDataPlates) GoString() string {
	return s.String()
}

func (s *RecognizeLicensePlateResponseDataPlates) SetConfidence(v float32) *RecognizeLicensePlateResponseDataPlates {
	s.Confidence = &v
	return s
}

func (s *RecognizeLicensePlateResponseDataPlates) SetPlateNumber(v string) *RecognizeLicensePlateResponseDataPlates {
	s.PlateNumber = &v
	return s
}

func (s *RecognizeLicensePlateResponseDataPlates) SetPlateType(v string) *RecognizeLicensePlateResponseDataPlates {
	s.PlateType = &v
	return s
}

func (s *RecognizeLicensePlateResponseDataPlates) SetPlateTypeConfidence(v float32) *RecognizeLicensePlateResponseDataPlates {
	s.PlateTypeConfidence = &v
	return s
}

func (s *RecognizeLicensePlateResponseDataPlates) SetRoi(v *RecognizeLicensePlateResponseDataPlatesRoi) *RecognizeLicensePlateResponseDataPlates {
	s.Roi = v
	return s
}

type RecognizeLicensePlateResponseDataPlatesRoi struct {
	H *int `json:"H" xml:"H" require:"true"`
	W *int `json:"W" xml:"W" require:"true"`
	X *int `json:"X" xml:"X" require:"true"`
	Y *int `json:"Y" xml:"Y" require:"true"`
}

func (s RecognizeLicensePlateResponseDataPlatesRoi) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLicensePlateResponseDataPlatesRoi) GoString() string {
	return s.String()
}

func (s *RecognizeLicensePlateResponseDataPlatesRoi) SetH(v int) *RecognizeLicensePlateResponseDataPlatesRoi {
	s.H = &v
	return s
}

func (s *RecognizeLicensePlateResponseDataPlatesRoi) SetW(v int) *RecognizeLicensePlateResponseDataPlatesRoi {
	s.W = &v
	return s
}

func (s *RecognizeLicensePlateResponseDataPlatesRoi) SetX(v int) *RecognizeLicensePlateResponseDataPlatesRoi {
	s.X = &v
	return s
}

func (s *RecognizeLicensePlateResponseDataPlatesRoi) SetY(v int) *RecognizeLicensePlateResponseDataPlatesRoi {
	s.Y = &v
	return s
}

type RecognizeLicensePlateAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s RecognizeLicensePlateAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLicensePlateAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeLicensePlateAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeLicensePlateAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeTableRequest struct {
	ImageURL        *string `json:"ImageURL" xml:"ImageURL" require:"true"`
	OutputFormat    *string `json:"OutputFormat" xml:"OutputFormat" require:"true"`
	UseFinanceModel *bool   `json:"UseFinanceModel" xml:"UseFinanceModel" require:"true"`
	AssureDirection *bool   `json:"AssureDirection" xml:"AssureDirection" require:"true"`
	HasLine         *bool   `json:"HasLine" xml:"HasLine" require:"true"`
	SkipDetection   *bool   `json:"SkipDetection" xml:"SkipDetection" require:"true"`
}

func (s RecognizeTableRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTableRequest) GoString() string {
	return s.String()
}

func (s *RecognizeTableRequest) SetImageURL(v string) *RecognizeTableRequest {
	s.ImageURL = &v
	return s
}

func (s *RecognizeTableRequest) SetOutputFormat(v string) *RecognizeTableRequest {
	s.OutputFormat = &v
	return s
}

func (s *RecognizeTableRequest) SetUseFinanceModel(v bool) *RecognizeTableRequest {
	s.UseFinanceModel = &v
	return s
}

func (s *RecognizeTableRequest) SetAssureDirection(v bool) *RecognizeTableRequest {
	s.AssureDirection = &v
	return s
}

func (s *RecognizeTableRequest) SetHasLine(v bool) *RecognizeTableRequest {
	s.HasLine = &v
	return s
}

func (s *RecognizeTableRequest) SetSkipDetection(v bool) *RecognizeTableRequest {
	s.SkipDetection = &v
	return s
}

type RecognizeTableResponse struct {
	RequestId *string                     `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeTableResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeTableResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTableResponse) GoString() string {
	return s.String()
}

func (s *RecognizeTableResponse) SetRequestId(v string) *RecognizeTableResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeTableResponse) SetData(v *RecognizeTableResponseData) *RecognizeTableResponse {
	s.Data = v
	return s
}

type RecognizeTableResponseData struct {
	FileContent *string                             `json:"FileContent" xml:"FileContent" require:"true"`
	Tables      []*RecognizeTableResponseDataTables `json:"Tables" xml:"Tables" require:"true" type:"Repeated"`
}

func (s RecognizeTableResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTableResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeTableResponseData) SetFileContent(v string) *RecognizeTableResponseData {
	s.FileContent = &v
	return s
}

func (s *RecognizeTableResponseData) SetTables(v []*RecognizeTableResponseDataTables) *RecognizeTableResponseData {
	s.Tables = v
	return s
}

type RecognizeTableResponseDataTables struct {
	Head      *string                                      `json:"Head" xml:"Head" require:"true"`
	Tail      *string                                      `json:"Tail" xml:"Tail" require:"true"`
	TableRows []*RecognizeTableResponseDataTablesTableRows `json:"TableRows" xml:"TableRows" require:"true" type:"Repeated"`
}

func (s RecognizeTableResponseDataTables) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTableResponseDataTables) GoString() string {
	return s.String()
}

func (s *RecognizeTableResponseDataTables) SetHead(v string) *RecognizeTableResponseDataTables {
	s.Head = &v
	return s
}

func (s *RecognizeTableResponseDataTables) SetTail(v string) *RecognizeTableResponseDataTables {
	s.Tail = &v
	return s
}

func (s *RecognizeTableResponseDataTables) SetTableRows(v []*RecognizeTableResponseDataTablesTableRows) *RecognizeTableResponseDataTables {
	s.TableRows = v
	return s
}

type RecognizeTableResponseDataTablesTableRows struct {
	TableColumns []*RecognizeTableResponseDataTablesTableRowsTableColumns `json:"TableColumns" xml:"TableColumns" require:"true" type:"Repeated"`
}

func (s RecognizeTableResponseDataTablesTableRows) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTableResponseDataTablesTableRows) GoString() string {
	return s.String()
}

func (s *RecognizeTableResponseDataTablesTableRows) SetTableColumns(v []*RecognizeTableResponseDataTablesTableRowsTableColumns) *RecognizeTableResponseDataTablesTableRows {
	s.TableColumns = v
	return s
}

type RecognizeTableResponseDataTablesTableRowsTableColumns struct {
	StartColumn *int      `json:"StartColumn" xml:"StartColumn" require:"true"`
	StartRow    *int      `json:"StartRow" xml:"StartRow" require:"true"`
	EndColumn   *int      `json:"EndColumn" xml:"EndColumn" require:"true"`
	EndRow      *int      `json:"EndRow" xml:"EndRow" require:"true"`
	Height      *int      `json:"Height" xml:"Height" require:"true"`
	Width       *int      `json:"Width" xml:"Width" require:"true"`
	Texts       []*string `json:"Texts" xml:"Texts" require:"true" type:"Repeated"`
}

func (s RecognizeTableResponseDataTablesTableRowsTableColumns) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTableResponseDataTablesTableRowsTableColumns) GoString() string {
	return s.String()
}

func (s *RecognizeTableResponseDataTablesTableRowsTableColumns) SetStartColumn(v int) *RecognizeTableResponseDataTablesTableRowsTableColumns {
	s.StartColumn = &v
	return s
}

func (s *RecognizeTableResponseDataTablesTableRowsTableColumns) SetStartRow(v int) *RecognizeTableResponseDataTablesTableRowsTableColumns {
	s.StartRow = &v
	return s
}

func (s *RecognizeTableResponseDataTablesTableRowsTableColumns) SetEndColumn(v int) *RecognizeTableResponseDataTablesTableRowsTableColumns {
	s.EndColumn = &v
	return s
}

func (s *RecognizeTableResponseDataTablesTableRowsTableColumns) SetEndRow(v int) *RecognizeTableResponseDataTablesTableRowsTableColumns {
	s.EndRow = &v
	return s
}

func (s *RecognizeTableResponseDataTablesTableRowsTableColumns) SetHeight(v int) *RecognizeTableResponseDataTablesTableRowsTableColumns {
	s.Height = &v
	return s
}

func (s *RecognizeTableResponseDataTablesTableRowsTableColumns) SetWidth(v int) *RecognizeTableResponseDataTablesTableRowsTableColumns {
	s.Width = &v
	return s
}

func (s *RecognizeTableResponseDataTablesTableRowsTableColumns) SetTexts(v []*string) *RecognizeTableResponseDataTablesTableRowsTableColumns {
	s.Texts = v
	return s
}

type RecognizeTableAdvanceRequest struct {
	ImageURLObject  io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	OutputFormat    *string   `json:"OutputFormat" xml:"OutputFormat" require:"true"`
	UseFinanceModel *bool     `json:"UseFinanceModel" xml:"UseFinanceModel" require:"true"`
	AssureDirection *bool     `json:"AssureDirection" xml:"AssureDirection" require:"true"`
	HasLine         *bool     `json:"HasLine" xml:"HasLine" require:"true"`
	SkipDetection   *bool     `json:"SkipDetection" xml:"SkipDetection" require:"true"`
}

func (s RecognizeTableAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTableAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeTableAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeTableAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeTableAdvanceRequest) SetOutputFormat(v string) *RecognizeTableAdvanceRequest {
	s.OutputFormat = &v
	return s
}

func (s *RecognizeTableAdvanceRequest) SetUseFinanceModel(v bool) *RecognizeTableAdvanceRequest {
	s.UseFinanceModel = &v
	return s
}

func (s *RecognizeTableAdvanceRequest) SetAssureDirection(v bool) *RecognizeTableAdvanceRequest {
	s.AssureDirection = &v
	return s
}

func (s *RecognizeTableAdvanceRequest) SetHasLine(v bool) *RecognizeTableAdvanceRequest {
	s.HasLine = &v
	return s
}

func (s *RecognizeTableAdvanceRequest) SetSkipDetection(v bool) *RecognizeTableAdvanceRequest {
	s.SkipDetection = &v
	return s
}

type RecognizeDrivingLicenseRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
	Side     *string `json:"Side" xml:"Side" require:"true"`
}

func (s RecognizeDrivingLicenseRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeDrivingLicenseRequest) GoString() string {
	return s.String()
}

func (s *RecognizeDrivingLicenseRequest) SetImageURL(v string) *RecognizeDrivingLicenseRequest {
	s.ImageURL = &v
	return s
}

func (s *RecognizeDrivingLicenseRequest) SetSide(v string) *RecognizeDrivingLicenseRequest {
	s.Side = &v
	return s
}

type RecognizeDrivingLicenseResponse struct {
	RequestId *string                              `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeDrivingLicenseResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeDrivingLicenseResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeDrivingLicenseResponse) GoString() string {
	return s.String()
}

func (s *RecognizeDrivingLicenseResponse) SetRequestId(v string) *RecognizeDrivingLicenseResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeDrivingLicenseResponse) SetData(v *RecognizeDrivingLicenseResponseData) *RecognizeDrivingLicenseResponse {
	s.Data = v
	return s
}

type RecognizeDrivingLicenseResponseData struct {
	FaceResult *RecognizeDrivingLicenseResponseDataFaceResult `json:"FaceResult" xml:"FaceResult" require:"true" type:"Struct"`
	BackResult *RecognizeDrivingLicenseResponseDataBackResult `json:"BackResult" xml:"BackResult" require:"true" type:"Struct"`
}

func (s RecognizeDrivingLicenseResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeDrivingLicenseResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeDrivingLicenseResponseData) SetFaceResult(v *RecognizeDrivingLicenseResponseDataFaceResult) *RecognizeDrivingLicenseResponseData {
	s.FaceResult = v
	return s
}

func (s *RecognizeDrivingLicenseResponseData) SetBackResult(v *RecognizeDrivingLicenseResponseDataBackResult) *RecognizeDrivingLicenseResponseData {
	s.BackResult = v
	return s
}

type RecognizeDrivingLicenseResponseDataFaceResult struct {
	PlateNumber  *string `json:"PlateNumber" xml:"PlateNumber" require:"true"`
	VehicleType  *string `json:"VehicleType" xml:"VehicleType" require:"true"`
	Owner        *string `json:"Owner" xml:"Owner" require:"true"`
	UseCharacter *string `json:"UseCharacter" xml:"UseCharacter" require:"true"`
	Address      *string `json:"Address" xml:"Address" require:"true"`
	Model        *string `json:"Model" xml:"Model" require:"true"`
	Vin          *string `json:"Vin" xml:"Vin" require:"true"`
	EngineNumber *string `json:"EngineNumber" xml:"EngineNumber" require:"true"`
	RegisterDate *string `json:"RegisterDate" xml:"RegisterDate" require:"true"`
	IssueDate    *string `json:"IssueDate" xml:"IssueDate" require:"true"`
}

func (s RecognizeDrivingLicenseResponseDataFaceResult) String() string {
	return tea.Prettify(s)
}

func (s RecognizeDrivingLicenseResponseDataFaceResult) GoString() string {
	return s.String()
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetPlateNumber(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.PlateNumber = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetVehicleType(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.VehicleType = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetOwner(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.Owner = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetUseCharacter(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.UseCharacter = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetAddress(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.Address = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetModel(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.Model = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetVin(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.Vin = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetEngineNumber(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.EngineNumber = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetRegisterDate(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.RegisterDate = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataFaceResult) SetIssueDate(v string) *RecognizeDrivingLicenseResponseDataFaceResult {
	s.IssueDate = &v
	return s
}

type RecognizeDrivingLicenseResponseDataBackResult struct {
	ApprovedPassengerCapacity *string `json:"ApprovedPassengerCapacity" xml:"ApprovedPassengerCapacity" require:"true"`
	ApprovedLoad              *string `json:"ApprovedLoad" xml:"ApprovedLoad" require:"true"`
	FileNumber                *string `json:"FileNumber" xml:"FileNumber" require:"true"`
	GrossMass                 *string `json:"GrossMass" xml:"GrossMass" require:"true"`
	EnergyType                *string `json:"EnergyType" xml:"EnergyType" require:"true"`
	InspectionRecord          *string `json:"InspectionRecord" xml:"InspectionRecord" require:"true"`
	OverallDimension          *string `json:"OverallDimension" xml:"OverallDimension" require:"true"`
	TractionMass              *string `json:"TractionMass" xml:"TractionMass" require:"true"`
	UnladenMass               *string `json:"UnladenMass" xml:"UnladenMass" require:"true"`
	PlateNumber               *string `json:"PlateNumber" xml:"PlateNumber" require:"true"`
}

func (s RecognizeDrivingLicenseResponseDataBackResult) String() string {
	return tea.Prettify(s)
}

func (s RecognizeDrivingLicenseResponseDataBackResult) GoString() string {
	return s.String()
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetApprovedPassengerCapacity(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.ApprovedPassengerCapacity = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetApprovedLoad(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.ApprovedLoad = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetFileNumber(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.FileNumber = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetGrossMass(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.GrossMass = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetEnergyType(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.EnergyType = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetInspectionRecord(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.InspectionRecord = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetOverallDimension(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.OverallDimension = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetTractionMass(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.TractionMass = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetUnladenMass(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.UnladenMass = &v
	return s
}

func (s *RecognizeDrivingLicenseResponseDataBackResult) SetPlateNumber(v string) *RecognizeDrivingLicenseResponseDataBackResult {
	s.PlateNumber = &v
	return s
}

type RecognizeDrivingLicenseAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	Side           *string   `json:"Side" xml:"Side" require:"true"`
}

func (s RecognizeDrivingLicenseAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeDrivingLicenseAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeDrivingLicenseAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeDrivingLicenseAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeDrivingLicenseAdvanceRequest) SetSide(v string) *RecognizeDrivingLicenseAdvanceRequest {
	s.Side = &v
	return s
}

type RecognizeBankCardRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeBankCardRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBankCardRequest) GoString() string {
	return s.String()
}

func (s *RecognizeBankCardRequest) SetImageURL(v string) *RecognizeBankCardRequest {
	s.ImageURL = &v
	return s
}

type RecognizeBankCardResponse struct {
	RequestId *string                        `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeBankCardResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeBankCardResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBankCardResponse) GoString() string {
	return s.String()
}

func (s *RecognizeBankCardResponse) SetRequestId(v string) *RecognizeBankCardResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeBankCardResponse) SetData(v *RecognizeBankCardResponseData) *RecognizeBankCardResponse {
	s.Data = v
	return s
}

type RecognizeBankCardResponseData struct {
	BankName   *string `json:"BankName" xml:"BankName" require:"true"`
	CardNumber *string `json:"CardNumber" xml:"CardNumber" require:"true"`
	ValidDate  *string `json:"ValidDate" xml:"ValidDate" require:"true"`
}

func (s RecognizeBankCardResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBankCardResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeBankCardResponseData) SetBankName(v string) *RecognizeBankCardResponseData {
	s.BankName = &v
	return s
}

func (s *RecognizeBankCardResponseData) SetCardNumber(v string) *RecognizeBankCardResponseData {
	s.CardNumber = &v
	return s
}

func (s *RecognizeBankCardResponseData) SetValidDate(v string) *RecognizeBankCardResponseData {
	s.ValidDate = &v
	return s
}

type RecognizeBankCardAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s RecognizeBankCardAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBankCardAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeBankCardAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeBankCardAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeTrainTicketRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeTrainTicketRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTrainTicketRequest) GoString() string {
	return s.String()
}

func (s *RecognizeTrainTicketRequest) SetImageURL(v string) *RecognizeTrainTicketRequest {
	s.ImageURL = &v
	return s
}

type RecognizeTrainTicketResponse struct {
	RequestId *string                           `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeTrainTicketResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeTrainTicketResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTrainTicketResponse) GoString() string {
	return s.String()
}

func (s *RecognizeTrainTicketResponse) SetRequestId(v string) *RecognizeTrainTicketResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeTrainTicketResponse) SetData(v *RecognizeTrainTicketResponseData) *RecognizeTrainTicketResponse {
	s.Data = v
	return s
}

type RecognizeTrainTicketResponseData struct {
	Date             *string  `json:"Date" xml:"Date" require:"true"`
	Destination      *string  `json:"Destination" xml:"Destination" require:"true"`
	Level            *string  `json:"Level" xml:"Level" require:"true"`
	Number           *string  `json:"Number" xml:"Number" require:"true"`
	Name             *string  `json:"Name" xml:"Name" require:"true"`
	DepartureStation *string  `json:"DepartureStation" xml:"DepartureStation" require:"true"`
	Seat             *string  `json:"Seat" xml:"Seat" require:"true"`
	Price            *float32 `json:"Price" xml:"Price" require:"true"`
}

func (s RecognizeTrainTicketResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTrainTicketResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeTrainTicketResponseData) SetDate(v string) *RecognizeTrainTicketResponseData {
	s.Date = &v
	return s
}

func (s *RecognizeTrainTicketResponseData) SetDestination(v string) *RecognizeTrainTicketResponseData {
	s.Destination = &v
	return s
}

func (s *RecognizeTrainTicketResponseData) SetLevel(v string) *RecognizeTrainTicketResponseData {
	s.Level = &v
	return s
}

func (s *RecognizeTrainTicketResponseData) SetNumber(v string) *RecognizeTrainTicketResponseData {
	s.Number = &v
	return s
}

func (s *RecognizeTrainTicketResponseData) SetName(v string) *RecognizeTrainTicketResponseData {
	s.Name = &v
	return s
}

func (s *RecognizeTrainTicketResponseData) SetDepartureStation(v string) *RecognizeTrainTicketResponseData {
	s.DepartureStation = &v
	return s
}

func (s *RecognizeTrainTicketResponseData) SetSeat(v string) *RecognizeTrainTicketResponseData {
	s.Seat = &v
	return s
}

func (s *RecognizeTrainTicketResponseData) SetPrice(v float32) *RecognizeTrainTicketResponseData {
	s.Price = &v
	return s
}

type RecognizeTrainTicketAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s RecognizeTrainTicketAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeTrainTicketAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeTrainTicketAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeTrainTicketAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeDriverLicenseRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
	Side     *string `json:"Side" xml:"Side" require:"true"`
}

func (s RecognizeDriverLicenseRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeDriverLicenseRequest) GoString() string {
	return s.String()
}

func (s *RecognizeDriverLicenseRequest) SetImageURL(v string) *RecognizeDriverLicenseRequest {
	s.ImageURL = &v
	return s
}

func (s *RecognizeDriverLicenseRequest) SetSide(v string) *RecognizeDriverLicenseRequest {
	s.Side = &v
	return s
}

type RecognizeDriverLicenseResponse struct {
	RequestId *string                             `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeDriverLicenseResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeDriverLicenseResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeDriverLicenseResponse) GoString() string {
	return s.String()
}

func (s *RecognizeDriverLicenseResponse) SetRequestId(v string) *RecognizeDriverLicenseResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeDriverLicenseResponse) SetData(v *RecognizeDriverLicenseResponseData) *RecognizeDriverLicenseResponse {
	s.Data = v
	return s
}

type RecognizeDriverLicenseResponseData struct {
	FaceResult *RecognizeDriverLicenseResponseDataFaceResult `json:"FaceResult" xml:"FaceResult" require:"true" type:"Struct"`
	BackResult *RecognizeDriverLicenseResponseDataBackResult `json:"BackResult" xml:"BackResult" require:"true" type:"Struct"`
}

func (s RecognizeDriverLicenseResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeDriverLicenseResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeDriverLicenseResponseData) SetFaceResult(v *RecognizeDriverLicenseResponseDataFaceResult) *RecognizeDriverLicenseResponseData {
	s.FaceResult = v
	return s
}

func (s *RecognizeDriverLicenseResponseData) SetBackResult(v *RecognizeDriverLicenseResponseDataBackResult) *RecognizeDriverLicenseResponseData {
	s.BackResult = v
	return s
}

type RecognizeDriverLicenseResponseDataFaceResult struct {
	Name          *string `json:"Name" xml:"Name" require:"true"`
	LicenseNumber *string `json:"LicenseNumber" xml:"LicenseNumber" require:"true"`
	VehicleType   *string `json:"VehicleType" xml:"VehicleType" require:"true"`
	StartDate     *string `json:"StartDate" xml:"StartDate" require:"true"`
	EndDate       *string `json:"EndDate" xml:"EndDate" require:"true"`
	IssueDate     *string `json:"IssueDate" xml:"IssueDate" require:"true"`
	Address       *string `json:"Address" xml:"Address" require:"true"`
	Gender        *string `json:"Gender" xml:"Gender" require:"true"`
}

func (s RecognizeDriverLicenseResponseDataFaceResult) String() string {
	return tea.Prettify(s)
}

func (s RecognizeDriverLicenseResponseDataFaceResult) GoString() string {
	return s.String()
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetName(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.Name = &v
	return s
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetLicenseNumber(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.LicenseNumber = &v
	return s
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetVehicleType(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.VehicleType = &v
	return s
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetStartDate(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.StartDate = &v
	return s
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetEndDate(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.EndDate = &v
	return s
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetIssueDate(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.IssueDate = &v
	return s
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetAddress(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.Address = &v
	return s
}

func (s *RecognizeDriverLicenseResponseDataFaceResult) SetGender(v string) *RecognizeDriverLicenseResponseDataFaceResult {
	s.Gender = &v
	return s
}

type RecognizeDriverLicenseResponseDataBackResult struct {
	ArchiveNumber *string `json:"ArchiveNumber" xml:"ArchiveNumber" require:"true"`
}

func (s RecognizeDriverLicenseResponseDataBackResult) String() string {
	return tea.Prettify(s)
}

func (s RecognizeDriverLicenseResponseDataBackResult) GoString() string {
	return s.String()
}

func (s *RecognizeDriverLicenseResponseDataBackResult) SetArchiveNumber(v string) *RecognizeDriverLicenseResponseDataBackResult {
	s.ArchiveNumber = &v
	return s
}

type RecognizeDriverLicenseAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	Side           *string   `json:"Side" xml:"Side" require:"true"`
}

func (s RecognizeDriverLicenseAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeDriverLicenseAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeDriverLicenseAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeDriverLicenseAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeDriverLicenseAdvanceRequest) SetSide(v string) *RecognizeDriverLicenseAdvanceRequest {
	s.Side = &v
	return s
}

type RecognizeAccountPageRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeAccountPageRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeAccountPageRequest) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageRequest) SetImageURL(v string) *RecognizeAccountPageRequest {
	s.ImageURL = &v
	return s
}

type RecognizeAccountPageResponse struct {
	RequestId *string                           `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeAccountPageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeAccountPageResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeAccountPageResponse) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageResponse) SetRequestId(v string) *RecognizeAccountPageResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeAccountPageResponse) SetData(v *RecognizeAccountPageResponseData) *RecognizeAccountPageResponse {
	s.Data = v
	return s
}

type RecognizeAccountPageResponseData struct {
	Angle               *float32                                               `json:"Angle" xml:"Angle" require:"true"`
	Name                *string                                                `json:"Name" xml:"Name" require:"true"`
	Gender              *string                                                `json:"Gender" xml:"Gender" require:"true"`
	Relation            *string                                                `json:"Relation" xml:"Relation" require:"true"`
	BirthPlace          *string                                                `json:"BirthPlace" xml:"BirthPlace" require:"true"`
	Nationality         *string                                                `json:"Nationality" xml:"Nationality" require:"true"`
	NativePlace         *string                                                `json:"NativePlace" xml:"NativePlace" require:"true"`
	BirthDate           *string                                                `json:"BirthDate" xml:"BirthDate" require:"true"`
	IDNumber            *string                                                `json:"IDNumber" xml:"IDNumber" require:"true"`
	InvalidStampAreas   []*RecognizeAccountPageResponseDataInvalidStampAreas   `json:"InvalidStampAreas" xml:"InvalidStampAreas" require:"true" type:"Repeated"`
	UndertakeStampAreas []*RecognizeAccountPageResponseDataUndertakeStampAreas `json:"UndertakeStampAreas" xml:"UndertakeStampAreas" require:"true" type:"Repeated"`
	RegisterStampAreas  []*RecognizeAccountPageResponseDataRegisterStampAreas  `json:"RegisterStampAreas" xml:"RegisterStampAreas" require:"true" type:"Repeated"`
	OtherStampAreas     []*RecognizeAccountPageResponseDataOtherStampAreas     `json:"OtherStampAreas" xml:"OtherStampAreas" require:"true" type:"Repeated"`
	TitleArea           *RecognizeAccountPageResponseDataTitleArea             `json:"TitleArea" xml:"TitleArea" require:"true" type:"Struct"`
}

func (s RecognizeAccountPageResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeAccountPageResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageResponseData) SetAngle(v float32) *RecognizeAccountPageResponseData {
	s.Angle = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetName(v string) *RecognizeAccountPageResponseData {
	s.Name = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetGender(v string) *RecognizeAccountPageResponseData {
	s.Gender = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetRelation(v string) *RecognizeAccountPageResponseData {
	s.Relation = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetBirthPlace(v string) *RecognizeAccountPageResponseData {
	s.BirthPlace = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetNationality(v string) *RecognizeAccountPageResponseData {
	s.Nationality = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetNativePlace(v string) *RecognizeAccountPageResponseData {
	s.NativePlace = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetBirthDate(v string) *RecognizeAccountPageResponseData {
	s.BirthDate = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetIDNumber(v string) *RecognizeAccountPageResponseData {
	s.IDNumber = &v
	return s
}

func (s *RecognizeAccountPageResponseData) SetInvalidStampAreas(v []*RecognizeAccountPageResponseDataInvalidStampAreas) *RecognizeAccountPageResponseData {
	s.InvalidStampAreas = v
	return s
}

func (s *RecognizeAccountPageResponseData) SetUndertakeStampAreas(v []*RecognizeAccountPageResponseDataUndertakeStampAreas) *RecognizeAccountPageResponseData {
	s.UndertakeStampAreas = v
	return s
}

func (s *RecognizeAccountPageResponseData) SetRegisterStampAreas(v []*RecognizeAccountPageResponseDataRegisterStampAreas) *RecognizeAccountPageResponseData {
	s.RegisterStampAreas = v
	return s
}

func (s *RecognizeAccountPageResponseData) SetOtherStampAreas(v []*RecognizeAccountPageResponseDataOtherStampAreas) *RecognizeAccountPageResponseData {
	s.OtherStampAreas = v
	return s
}

func (s *RecognizeAccountPageResponseData) SetTitleArea(v *RecognizeAccountPageResponseDataTitleArea) *RecognizeAccountPageResponseData {
	s.TitleArea = v
	return s
}

type RecognizeAccountPageResponseDataInvalidStampAreas struct {
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeAccountPageResponseDataInvalidStampAreas) String() string {
	return tea.Prettify(s)
}

func (s RecognizeAccountPageResponseDataInvalidStampAreas) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageResponseDataInvalidStampAreas) SetLeft(v int) *RecognizeAccountPageResponseDataInvalidStampAreas {
	s.Left = &v
	return s
}

func (s *RecognizeAccountPageResponseDataInvalidStampAreas) SetTop(v int) *RecognizeAccountPageResponseDataInvalidStampAreas {
	s.Top = &v
	return s
}

func (s *RecognizeAccountPageResponseDataInvalidStampAreas) SetHeight(v int) *RecognizeAccountPageResponseDataInvalidStampAreas {
	s.Height = &v
	return s
}

func (s *RecognizeAccountPageResponseDataInvalidStampAreas) SetWidth(v int) *RecognizeAccountPageResponseDataInvalidStampAreas {
	s.Width = &v
	return s
}

type RecognizeAccountPageResponseDataUndertakeStampAreas struct {
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeAccountPageResponseDataUndertakeStampAreas) String() string {
	return tea.Prettify(s)
}

func (s RecognizeAccountPageResponseDataUndertakeStampAreas) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageResponseDataUndertakeStampAreas) SetLeft(v int) *RecognizeAccountPageResponseDataUndertakeStampAreas {
	s.Left = &v
	return s
}

func (s *RecognizeAccountPageResponseDataUndertakeStampAreas) SetTop(v int) *RecognizeAccountPageResponseDataUndertakeStampAreas {
	s.Top = &v
	return s
}

func (s *RecognizeAccountPageResponseDataUndertakeStampAreas) SetHeight(v int) *RecognizeAccountPageResponseDataUndertakeStampAreas {
	s.Height = &v
	return s
}

func (s *RecognizeAccountPageResponseDataUndertakeStampAreas) SetWidth(v int) *RecognizeAccountPageResponseDataUndertakeStampAreas {
	s.Width = &v
	return s
}

type RecognizeAccountPageResponseDataRegisterStampAreas struct {
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeAccountPageResponseDataRegisterStampAreas) String() string {
	return tea.Prettify(s)
}

func (s RecognizeAccountPageResponseDataRegisterStampAreas) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageResponseDataRegisterStampAreas) SetLeft(v int) *RecognizeAccountPageResponseDataRegisterStampAreas {
	s.Left = &v
	return s
}

func (s *RecognizeAccountPageResponseDataRegisterStampAreas) SetTop(v int) *RecognizeAccountPageResponseDataRegisterStampAreas {
	s.Top = &v
	return s
}

func (s *RecognizeAccountPageResponseDataRegisterStampAreas) SetHeight(v int) *RecognizeAccountPageResponseDataRegisterStampAreas {
	s.Height = &v
	return s
}

func (s *RecognizeAccountPageResponseDataRegisterStampAreas) SetWidth(v int) *RecognizeAccountPageResponseDataRegisterStampAreas {
	s.Width = &v
	return s
}

type RecognizeAccountPageResponseDataOtherStampAreas struct {
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeAccountPageResponseDataOtherStampAreas) String() string {
	return tea.Prettify(s)
}

func (s RecognizeAccountPageResponseDataOtherStampAreas) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageResponseDataOtherStampAreas) SetLeft(v int) *RecognizeAccountPageResponseDataOtherStampAreas {
	s.Left = &v
	return s
}

func (s *RecognizeAccountPageResponseDataOtherStampAreas) SetTop(v int) *RecognizeAccountPageResponseDataOtherStampAreas {
	s.Top = &v
	return s
}

func (s *RecognizeAccountPageResponseDataOtherStampAreas) SetHeight(v int) *RecognizeAccountPageResponseDataOtherStampAreas {
	s.Height = &v
	return s
}

func (s *RecognizeAccountPageResponseDataOtherStampAreas) SetWidth(v int) *RecognizeAccountPageResponseDataOtherStampAreas {
	s.Width = &v
	return s
}

type RecognizeAccountPageResponseDataTitleArea struct {
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeAccountPageResponseDataTitleArea) String() string {
	return tea.Prettify(s)
}

func (s RecognizeAccountPageResponseDataTitleArea) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageResponseDataTitleArea) SetLeft(v int) *RecognizeAccountPageResponseDataTitleArea {
	s.Left = &v
	return s
}

func (s *RecognizeAccountPageResponseDataTitleArea) SetTop(v int) *RecognizeAccountPageResponseDataTitleArea {
	s.Top = &v
	return s
}

func (s *RecognizeAccountPageResponseDataTitleArea) SetHeight(v int) *RecognizeAccountPageResponseDataTitleArea {
	s.Height = &v
	return s
}

func (s *RecognizeAccountPageResponseDataTitleArea) SetWidth(v int) *RecognizeAccountPageResponseDataTitleArea {
	s.Width = &v
	return s
}

type RecognizeAccountPageAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s RecognizeAccountPageAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeAccountPageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeAccountPageAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeAccountPageAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeStampRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeStampRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeStampRequest) GoString() string {
	return s.String()
}

func (s *RecognizeStampRequest) SetImageURL(v string) *RecognizeStampRequest {
	s.ImageURL = &v
	return s
}

type RecognizeStampResponse struct {
	RequestId *string                     `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeStampResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeStampResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeStampResponse) GoString() string {
	return s.String()
}

func (s *RecognizeStampResponse) SetRequestId(v string) *RecognizeStampResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeStampResponse) SetData(v *RecognizeStampResponseData) *RecognizeStampResponse {
	s.Data = v
	return s
}

type RecognizeStampResponseData struct {
	Results []*RecognizeStampResponseDataResults `json:"Results" xml:"Results" require:"true" type:"Repeated"`
}

func (s RecognizeStampResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeStampResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeStampResponseData) SetResults(v []*RecognizeStampResponseDataResults) *RecognizeStampResponseData {
	s.Results = v
	return s
}

type RecognizeStampResponseDataResults struct {
	GeneralText []*RecognizeStampResponseDataResultsGeneralText `json:"GeneralText" xml:"GeneralText" require:"true" type:"Repeated"`
	Roi         *RecognizeStampResponseDataResultsRoi           `json:"Roi" xml:"Roi" require:"true" type:"Struct"`
	Text        *RecognizeStampResponseDataResultsText          `json:"Text" xml:"Text" require:"true" type:"Struct"`
}

func (s RecognizeStampResponseDataResults) String() string {
	return tea.Prettify(s)
}

func (s RecognizeStampResponseDataResults) GoString() string {
	return s.String()
}

func (s *RecognizeStampResponseDataResults) SetGeneralText(v []*RecognizeStampResponseDataResultsGeneralText) *RecognizeStampResponseDataResults {
	s.GeneralText = v
	return s
}

func (s *RecognizeStampResponseDataResults) SetRoi(v *RecognizeStampResponseDataResultsRoi) *RecognizeStampResponseDataResults {
	s.Roi = v
	return s
}

func (s *RecognizeStampResponseDataResults) SetText(v *RecognizeStampResponseDataResultsText) *RecognizeStampResponseDataResults {
	s.Text = v
	return s
}

type RecognizeStampResponseDataResultsGeneralText struct {
	Content    *string  `json:"Content" xml:"Content" require:"true"`
	Confidence *float32 `json:"Confidence" xml:"Confidence" require:"true"`
}

func (s RecognizeStampResponseDataResultsGeneralText) String() string {
	return tea.Prettify(s)
}

func (s RecognizeStampResponseDataResultsGeneralText) GoString() string {
	return s.String()
}

func (s *RecognizeStampResponseDataResultsGeneralText) SetContent(v string) *RecognizeStampResponseDataResultsGeneralText {
	s.Content = &v
	return s
}

func (s *RecognizeStampResponseDataResultsGeneralText) SetConfidence(v float32) *RecognizeStampResponseDataResultsGeneralText {
	s.Confidence = &v
	return s
}

type RecognizeStampResponseDataResultsRoi struct {
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
}

func (s RecognizeStampResponseDataResultsRoi) String() string {
	return tea.Prettify(s)
}

func (s RecognizeStampResponseDataResultsRoi) GoString() string {
	return s.String()
}

func (s *RecognizeStampResponseDataResultsRoi) SetLeft(v int) *RecognizeStampResponseDataResultsRoi {
	s.Left = &v
	return s
}

func (s *RecognizeStampResponseDataResultsRoi) SetTop(v int) *RecognizeStampResponseDataResultsRoi {
	s.Top = &v
	return s
}

func (s *RecognizeStampResponseDataResultsRoi) SetWidth(v int) *RecognizeStampResponseDataResultsRoi {
	s.Width = &v
	return s
}

func (s *RecognizeStampResponseDataResultsRoi) SetHeight(v int) *RecognizeStampResponseDataResultsRoi {
	s.Height = &v
	return s
}

type RecognizeStampResponseDataResultsText struct {
	Content    *string  `json:"Content" xml:"Content" require:"true"`
	Confidence *float32 `json:"Confidence" xml:"Confidence" require:"true"`
}

func (s RecognizeStampResponseDataResultsText) String() string {
	return tea.Prettify(s)
}

func (s RecognizeStampResponseDataResultsText) GoString() string {
	return s.String()
}

func (s *RecognizeStampResponseDataResultsText) SetContent(v string) *RecognizeStampResponseDataResultsText {
	s.Content = &v
	return s
}

func (s *RecognizeStampResponseDataResultsText) SetConfidence(v float32) *RecognizeStampResponseDataResultsText {
	s.Confidence = &v
	return s
}

type RecognizeStampAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s RecognizeStampAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeStampAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeStampAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeStampAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeBusinessCardRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeBusinessCardRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBusinessCardRequest) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessCardRequest) SetImageURL(v string) *RecognizeBusinessCardRequest {
	s.ImageURL = &v
	return s
}

type RecognizeBusinessCardResponse struct {
	RequestId *string                            `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeBusinessCardResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeBusinessCardResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBusinessCardResponse) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessCardResponse) SetRequestId(v string) *RecognizeBusinessCardResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeBusinessCardResponse) SetData(v *RecognizeBusinessCardResponseData) *RecognizeBusinessCardResponse {
	s.Data = v
	return s
}

type RecognizeBusinessCardResponseData struct {
	Name               *string   `json:"Name" xml:"Name" require:"true"`
	Companies          []*string `json:"Companies" xml:"Companies" require:"true" type:"Repeated"`
	Departments        []*string `json:"Departments" xml:"Departments" require:"true" type:"Repeated"`
	Titles             []*string `json:"Titles" xml:"Titles" require:"true" type:"Repeated"`
	CellPhoneNumbers   []*string `json:"CellPhoneNumbers" xml:"CellPhoneNumbers" require:"true" type:"Repeated"`
	OfficePhoneNumbers []*string `json:"OfficePhoneNumbers" xml:"OfficePhoneNumbers" require:"true" type:"Repeated"`
	Addresses          []*string `json:"Addresses" xml:"Addresses" require:"true" type:"Repeated"`
	Emails             []*string `json:"Emails" xml:"Emails" require:"true" type:"Repeated"`
}

func (s RecognizeBusinessCardResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBusinessCardResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessCardResponseData) SetName(v string) *RecognizeBusinessCardResponseData {
	s.Name = &v
	return s
}

func (s *RecognizeBusinessCardResponseData) SetCompanies(v []*string) *RecognizeBusinessCardResponseData {
	s.Companies = v
	return s
}

func (s *RecognizeBusinessCardResponseData) SetDepartments(v []*string) *RecognizeBusinessCardResponseData {
	s.Departments = v
	return s
}

func (s *RecognizeBusinessCardResponseData) SetTitles(v []*string) *RecognizeBusinessCardResponseData {
	s.Titles = v
	return s
}

func (s *RecognizeBusinessCardResponseData) SetCellPhoneNumbers(v []*string) *RecognizeBusinessCardResponseData {
	s.CellPhoneNumbers = v
	return s
}

func (s *RecognizeBusinessCardResponseData) SetOfficePhoneNumbers(v []*string) *RecognizeBusinessCardResponseData {
	s.OfficePhoneNumbers = v
	return s
}

func (s *RecognizeBusinessCardResponseData) SetAddresses(v []*string) *RecognizeBusinessCardResponseData {
	s.Addresses = v
	return s
}

func (s *RecognizeBusinessCardResponseData) SetEmails(v []*string) *RecognizeBusinessCardResponseData {
	s.Emails = v
	return s
}

type RecognizeBusinessCardAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s RecognizeBusinessCardAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBusinessCardAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessCardAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeBusinessCardAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeVINCodeRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeVINCodeRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVINCodeRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVINCodeRequest) SetImageURL(v string) *RecognizeVINCodeRequest {
	s.ImageURL = &v
	return s
}

type RecognizeVINCodeResponse struct {
	RequestId *string                       `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeVINCodeResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeVINCodeResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVINCodeResponse) GoString() string {
	return s.String()
}

func (s *RecognizeVINCodeResponse) SetRequestId(v string) *RecognizeVINCodeResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeVINCodeResponse) SetData(v *RecognizeVINCodeResponseData) *RecognizeVINCodeResponse {
	s.Data = v
	return s
}

type RecognizeVINCodeResponseData struct {
	VinCode *string `json:"VinCode" xml:"VinCode" require:"true"`
}

func (s RecognizeVINCodeResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVINCodeResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeVINCodeResponseData) SetVinCode(v string) *RecognizeVINCodeResponseData {
	s.VinCode = &v
	return s
}

type RecognizeVINCodeAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s RecognizeVINCodeAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVINCodeAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVINCodeAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeVINCodeAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeBusinessLicenseRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeBusinessLicenseRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBusinessLicenseRequest) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseRequest) SetImageURL(v string) *RecognizeBusinessLicenseRequest {
	s.ImageURL = &v
	return s
}

type RecognizeBusinessLicenseResponse struct {
	RequestId *string                               `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeBusinessLicenseResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeBusinessLicenseResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBusinessLicenseResponse) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseResponse) SetRequestId(v string) *RecognizeBusinessLicenseResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeBusinessLicenseResponse) SetData(v *RecognizeBusinessLicenseResponseData) *RecognizeBusinessLicenseResponse {
	s.Data = v
	return s
}

type RecognizeBusinessLicenseResponseData struct {
	Angle          *string                                     `json:"Angle" xml:"Angle" require:"true"`
	RegisterNumber *string                                     `json:"RegisterNumber" xml:"RegisterNumber" require:"true"`
	Name           *string                                     `json:"Name" xml:"Name" require:"true"`
	Type           *string                                     `json:"Type" xml:"Type" require:"true"`
	LegalPerson    *string                                     `json:"LegalPerson" xml:"LegalPerson" require:"true"`
	EstablishDate  *string                                     `json:"EstablishDate" xml:"EstablishDate" require:"true"`
	ValidPeriod    *string                                     `json:"ValidPeriod" xml:"ValidPeriod" require:"true"`
	Address        *string                                     `json:"Address" xml:"Address" require:"true"`
	Capital        *string                                     `json:"Capital" xml:"Capital" require:"true"`
	Business       *string                                     `json:"Business" xml:"Business" require:"true"`
	Emblem         *RecognizeBusinessLicenseResponseDataEmblem `json:"Emblem" xml:"Emblem" require:"true" type:"Struct"`
	Title          *RecognizeBusinessLicenseResponseDataTitle  `json:"Title" xml:"Title" require:"true" type:"Struct"`
	Stamp          *RecognizeBusinessLicenseResponseDataStamp  `json:"Stamp" xml:"Stamp" require:"true" type:"Struct"`
	QRCode         *RecognizeBusinessLicenseResponseDataQRCode `json:"QRCode" xml:"QRCode" require:"true" type:"Struct"`
}

func (s RecognizeBusinessLicenseResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBusinessLicenseResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseResponseData) SetAngle(v string) *RecognizeBusinessLicenseResponseData {
	s.Angle = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetRegisterNumber(v string) *RecognizeBusinessLicenseResponseData {
	s.RegisterNumber = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetName(v string) *RecognizeBusinessLicenseResponseData {
	s.Name = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetType(v string) *RecognizeBusinessLicenseResponseData {
	s.Type = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetLegalPerson(v string) *RecognizeBusinessLicenseResponseData {
	s.LegalPerson = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetEstablishDate(v string) *RecognizeBusinessLicenseResponseData {
	s.EstablishDate = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetValidPeriod(v string) *RecognizeBusinessLicenseResponseData {
	s.ValidPeriod = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetAddress(v string) *RecognizeBusinessLicenseResponseData {
	s.Address = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetCapital(v string) *RecognizeBusinessLicenseResponseData {
	s.Capital = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetBusiness(v string) *RecognizeBusinessLicenseResponseData {
	s.Business = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetEmblem(v *RecognizeBusinessLicenseResponseDataEmblem) *RecognizeBusinessLicenseResponseData {
	s.Emblem = v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetTitle(v *RecognizeBusinessLicenseResponseDataTitle) *RecognizeBusinessLicenseResponseData {
	s.Title = v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetStamp(v *RecognizeBusinessLicenseResponseDataStamp) *RecognizeBusinessLicenseResponseData {
	s.Stamp = v
	return s
}

func (s *RecognizeBusinessLicenseResponseData) SetQRCode(v *RecognizeBusinessLicenseResponseDataQRCode) *RecognizeBusinessLicenseResponseData {
	s.QRCode = v
	return s
}

type RecognizeBusinessLicenseResponseDataEmblem struct {
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeBusinessLicenseResponseDataEmblem) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBusinessLicenseResponseDataEmblem) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseResponseDataEmblem) SetTop(v int) *RecognizeBusinessLicenseResponseDataEmblem {
	s.Top = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataEmblem) SetLeft(v int) *RecognizeBusinessLicenseResponseDataEmblem {
	s.Left = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataEmblem) SetHeight(v int) *RecognizeBusinessLicenseResponseDataEmblem {
	s.Height = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataEmblem) SetWidth(v int) *RecognizeBusinessLicenseResponseDataEmblem {
	s.Width = &v
	return s
}

type RecognizeBusinessLicenseResponseDataTitle struct {
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeBusinessLicenseResponseDataTitle) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBusinessLicenseResponseDataTitle) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseResponseDataTitle) SetTop(v int) *RecognizeBusinessLicenseResponseDataTitle {
	s.Top = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataTitle) SetLeft(v int) *RecognizeBusinessLicenseResponseDataTitle {
	s.Left = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataTitle) SetHeight(v int) *RecognizeBusinessLicenseResponseDataTitle {
	s.Height = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataTitle) SetWidth(v int) *RecognizeBusinessLicenseResponseDataTitle {
	s.Width = &v
	return s
}

type RecognizeBusinessLicenseResponseDataStamp struct {
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeBusinessLicenseResponseDataStamp) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBusinessLicenseResponseDataStamp) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseResponseDataStamp) SetTop(v int) *RecognizeBusinessLicenseResponseDataStamp {
	s.Top = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataStamp) SetLeft(v int) *RecognizeBusinessLicenseResponseDataStamp {
	s.Left = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataStamp) SetHeight(v int) *RecognizeBusinessLicenseResponseDataStamp {
	s.Height = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataStamp) SetWidth(v int) *RecognizeBusinessLicenseResponseDataStamp {
	s.Width = &v
	return s
}

type RecognizeBusinessLicenseResponseDataQRCode struct {
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
}

func (s RecognizeBusinessLicenseResponseDataQRCode) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBusinessLicenseResponseDataQRCode) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseResponseDataQRCode) SetTop(v int) *RecognizeBusinessLicenseResponseDataQRCode {
	s.Top = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataQRCode) SetLeft(v int) *RecognizeBusinessLicenseResponseDataQRCode {
	s.Left = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataQRCode) SetHeight(v int) *RecognizeBusinessLicenseResponseDataQRCode {
	s.Height = &v
	return s
}

func (s *RecognizeBusinessLicenseResponseDataQRCode) SetWidth(v int) *RecognizeBusinessLicenseResponseDataQRCode {
	s.Width = &v
	return s
}

type RecognizeBusinessLicenseAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s RecognizeBusinessLicenseAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeBusinessLicenseAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeBusinessLicenseAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeBusinessLicenseAdvanceRequest {
	s.ImageURLObject = v
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
	client.EndpointRule = "regional"
	_err = client.CheckConfig(config)
	if _err != nil {
		return
	}
	client.Endpoint, _err = client.GetEndpoint(client.ProductId, client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) GetAsyncJobResult(request *GetAsyncJobResultRequest, runtime *util.RuntimeOptions) (_result *GetAsyncJobResultResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &GetAsyncJobResultResponse{}
	_body, _err := client.DoRequest("GetAsyncJobResult", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TrimDocument(request *TrimDocumentRequest, runtime *util.RuntimeOptions) (_result *TrimDocumentResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &TrimDocumentResponse{}
	_body, _err := client.DoRequest("TrimDocument", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TrimDocumentAdvance(request *TrimDocumentAdvanceRequest, runtime *util.RuntimeOptions) (_result *TrimDocumentResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.FileURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	trimDocumentreq := &TrimDocumentRequest{}
	rpcutil.Convert(request, trimDocumentreq)
	trimDocumentreq.FileURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	trimDocumentResp, _err := client.TrimDocument(trimDocumentreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = trimDocumentResp
	return _result, _err
}

func (client *Client) RecognizeChinapassport(request *RecognizeChinapassportRequest, runtime *util.RuntimeOptions) (_result *RecognizeChinapassportResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeChinapassportResponse{}
	_body, _err := client.DoRequest("RecognizeChinapassport", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeChinapassportAdvance(request *RecognizeChinapassportAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeChinapassportResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeChinapassportreq := &RecognizeChinapassportRequest{}
	rpcutil.Convert(request, recognizeChinapassportreq)
	recognizeChinapassportreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeChinapassportResp, _err := client.RecognizeChinapassport(recognizeChinapassportreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeChinapassportResp
	return _result, _err
}

func (client *Client) RecognizeVerificationcode(request *RecognizeVerificationcodeRequest, runtime *util.RuntimeOptions) (_result *RecognizeVerificationcodeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeVerificationcodeResponse{}
	_body, _err := client.DoRequest("RecognizeVerificationcode", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVerificationcodeAdvance(request *RecognizeVerificationcodeAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVerificationcodeResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeVerificationcodereq := &RecognizeVerificationcodeRequest{}
	rpcutil.Convert(request, recognizeVerificationcodereq)
	recognizeVerificationcodereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeVerificationcodeResp, _err := client.RecognizeVerificationcode(recognizeVerificationcodereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeVerificationcodeResp
	return _result, _err
}

func (client *Client) RecognizePassportMRZ(request *RecognizePassportMRZRequest, runtime *util.RuntimeOptions) (_result *RecognizePassportMRZResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizePassportMRZResponse{}
	_body, _err := client.DoRequest("RecognizePassportMRZ", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizePassportMRZAdvance(request *RecognizePassportMRZAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizePassportMRZResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizePassportMRZreq := &RecognizePassportMRZRequest{}
	rpcutil.Convert(request, recognizePassportMRZreq)
	recognizePassportMRZreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizePassportMRZResp, _err := client.RecognizePassportMRZ(recognizePassportMRZreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizePassportMRZResp
	return _result, _err
}

func (client *Client) RecognizeTakeoutOrder(request *RecognizeTakeoutOrderRequest, runtime *util.RuntimeOptions) (_result *RecognizeTakeoutOrderResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeTakeoutOrderResponse{}
	_body, _err := client.DoRequest("RecognizeTakeoutOrder", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeTakeoutOrderAdvance(request *RecognizeTakeoutOrderAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeTakeoutOrderResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeTakeoutOrderreq := &RecognizeTakeoutOrderRequest{}
	rpcutil.Convert(request, recognizeTakeoutOrderreq)
	recognizeTakeoutOrderreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeTakeoutOrderResp, _err := client.RecognizeTakeoutOrder(recognizeTakeoutOrderreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeTakeoutOrderResp
	return _result, _err
}

func (client *Client) RecognizeQrCode(request *RecognizeQrCodeRequest, runtime *util.RuntimeOptions) (_result *RecognizeQrCodeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeQrCodeResponse{}
	_body, _err := client.DoRequest("RecognizeQrCode", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVATInvoice(request *RecognizeVATInvoiceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVATInvoiceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeVATInvoiceResponse{}
	_body, _err := client.DoRequest("RecognizeVATInvoice", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVATInvoiceAdvance(request *RecognizeVATInvoiceAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVATInvoiceResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.FileURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeVATInvoicereq := &RecognizeVATInvoiceRequest{}
	rpcutil.Convert(request, recognizeVATInvoicereq)
	recognizeVATInvoicereq.FileURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeVATInvoiceResp, _err := client.RecognizeVATInvoice(recognizeVATInvoicereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeVATInvoiceResp
	return _result, _err
}

func (client *Client) RecognizeCharacter(request *RecognizeCharacterRequest, runtime *util.RuntimeOptions) (_result *RecognizeCharacterResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeCharacterResponse{}
	_body, _err := client.DoRequest("RecognizeCharacter", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeCharacterAdvance(request *RecognizeCharacterAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeCharacterResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeCharacterreq := &RecognizeCharacterRequest{}
	rpcutil.Convert(request, recognizeCharacterreq)
	recognizeCharacterreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeCharacterResp, _err := client.RecognizeCharacter(recognizeCharacterreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeCharacterResp
	return _result, _err
}

func (client *Client) RecognizeTaxiInvoice(request *RecognizeTaxiInvoiceRequest, runtime *util.RuntimeOptions) (_result *RecognizeTaxiInvoiceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeTaxiInvoiceResponse{}
	_body, _err := client.DoRequest("RecognizeTaxiInvoice", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeTaxiInvoiceAdvance(request *RecognizeTaxiInvoiceAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeTaxiInvoiceResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeTaxiInvoicereq := &RecognizeTaxiInvoiceRequest{}
	rpcutil.Convert(request, recognizeTaxiInvoicereq)
	recognizeTaxiInvoicereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeTaxiInvoiceResp, _err := client.RecognizeTaxiInvoice(recognizeTaxiInvoicereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeTaxiInvoiceResp
	return _result, _err
}

func (client *Client) RecognizeIdentityCard(request *RecognizeIdentityCardRequest, runtime *util.RuntimeOptions) (_result *RecognizeIdentityCardResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeIdentityCardResponse{}
	_body, _err := client.DoRequest("RecognizeIdentityCard", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeIdentityCardAdvance(request *RecognizeIdentityCardAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeIdentityCardResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeIdentityCardreq := &RecognizeIdentityCardRequest{}
	rpcutil.Convert(request, recognizeIdentityCardreq)
	recognizeIdentityCardreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeIdentityCardResp, _err := client.RecognizeIdentityCard(recognizeIdentityCardreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeIdentityCardResp
	return _result, _err
}

func (client *Client) RecognizeLicensePlate(request *RecognizeLicensePlateRequest, runtime *util.RuntimeOptions) (_result *RecognizeLicensePlateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeLicensePlateResponse{}
	_body, _err := client.DoRequest("RecognizeLicensePlate", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeLicensePlateAdvance(request *RecognizeLicensePlateAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeLicensePlateResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeLicensePlatereq := &RecognizeLicensePlateRequest{}
	rpcutil.Convert(request, recognizeLicensePlatereq)
	recognizeLicensePlatereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeLicensePlateResp, _err := client.RecognizeLicensePlate(recognizeLicensePlatereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeLicensePlateResp
	return _result, _err
}

func (client *Client) RecognizeTable(request *RecognizeTableRequest, runtime *util.RuntimeOptions) (_result *RecognizeTableResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeTableResponse{}
	_body, _err := client.DoRequest("RecognizeTable", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeTableAdvance(request *RecognizeTableAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeTableResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeTablereq := &RecognizeTableRequest{}
	rpcutil.Convert(request, recognizeTablereq)
	recognizeTablereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeTableResp, _err := client.RecognizeTable(recognizeTablereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeTableResp
	return _result, _err
}

func (client *Client) RecognizeDrivingLicense(request *RecognizeDrivingLicenseRequest, runtime *util.RuntimeOptions) (_result *RecognizeDrivingLicenseResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeDrivingLicenseResponse{}
	_body, _err := client.DoRequest("RecognizeDrivingLicense", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeDrivingLicenseAdvance(request *RecognizeDrivingLicenseAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeDrivingLicenseResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeDrivingLicensereq := &RecognizeDrivingLicenseRequest{}
	rpcutil.Convert(request, recognizeDrivingLicensereq)
	recognizeDrivingLicensereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeDrivingLicenseResp, _err := client.RecognizeDrivingLicense(recognizeDrivingLicensereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeDrivingLicenseResp
	return _result, _err
}

func (client *Client) RecognizeBankCard(request *RecognizeBankCardRequest, runtime *util.RuntimeOptions) (_result *RecognizeBankCardResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeBankCardResponse{}
	_body, _err := client.DoRequest("RecognizeBankCard", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeBankCardAdvance(request *RecognizeBankCardAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeBankCardResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeBankCardreq := &RecognizeBankCardRequest{}
	rpcutil.Convert(request, recognizeBankCardreq)
	recognizeBankCardreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeBankCardResp, _err := client.RecognizeBankCard(recognizeBankCardreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeBankCardResp
	return _result, _err
}

func (client *Client) RecognizeTrainTicket(request *RecognizeTrainTicketRequest, runtime *util.RuntimeOptions) (_result *RecognizeTrainTicketResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeTrainTicketResponse{}
	_body, _err := client.DoRequest("RecognizeTrainTicket", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeTrainTicketAdvance(request *RecognizeTrainTicketAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeTrainTicketResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeTrainTicketreq := &RecognizeTrainTicketRequest{}
	rpcutil.Convert(request, recognizeTrainTicketreq)
	recognizeTrainTicketreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeTrainTicketResp, _err := client.RecognizeTrainTicket(recognizeTrainTicketreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeTrainTicketResp
	return _result, _err
}

func (client *Client) RecognizeDriverLicense(request *RecognizeDriverLicenseRequest, runtime *util.RuntimeOptions) (_result *RecognizeDriverLicenseResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeDriverLicenseResponse{}
	_body, _err := client.DoRequest("RecognizeDriverLicense", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeDriverLicenseAdvance(request *RecognizeDriverLicenseAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeDriverLicenseResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeDriverLicensereq := &RecognizeDriverLicenseRequest{}
	rpcutil.Convert(request, recognizeDriverLicensereq)
	recognizeDriverLicensereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeDriverLicenseResp, _err := client.RecognizeDriverLicense(recognizeDriverLicensereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeDriverLicenseResp
	return _result, _err
}

func (client *Client) RecognizeAccountPage(request *RecognizeAccountPageRequest, runtime *util.RuntimeOptions) (_result *RecognizeAccountPageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeAccountPageResponse{}
	_body, _err := client.DoRequest("RecognizeAccountPage", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeAccountPageAdvance(request *RecognizeAccountPageAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeAccountPageResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeAccountPagereq := &RecognizeAccountPageRequest{}
	rpcutil.Convert(request, recognizeAccountPagereq)
	recognizeAccountPagereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeAccountPageResp, _err := client.RecognizeAccountPage(recognizeAccountPagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeAccountPageResp
	return _result, _err
}

func (client *Client) RecognizeStamp(request *RecognizeStampRequest, runtime *util.RuntimeOptions) (_result *RecognizeStampResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeStampResponse{}
	_body, _err := client.DoRequest("RecognizeStamp", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeStampAdvance(request *RecognizeStampAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeStampResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeStampreq := &RecognizeStampRequest{}
	rpcutil.Convert(request, recognizeStampreq)
	recognizeStampreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeStampResp, _err := client.RecognizeStamp(recognizeStampreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeStampResp
	return _result, _err
}

func (client *Client) RecognizeBusinessCard(request *RecognizeBusinessCardRequest, runtime *util.RuntimeOptions) (_result *RecognizeBusinessCardResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeBusinessCardResponse{}
	_body, _err := client.DoRequest("RecognizeBusinessCard", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeBusinessCardAdvance(request *RecognizeBusinessCardAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeBusinessCardResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeBusinessCardreq := &RecognizeBusinessCardRequest{}
	rpcutil.Convert(request, recognizeBusinessCardreq)
	recognizeBusinessCardreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeBusinessCardResp, _err := client.RecognizeBusinessCard(recognizeBusinessCardreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeBusinessCardResp
	return _result, _err
}

func (client *Client) RecognizeVINCode(request *RecognizeVINCodeRequest, runtime *util.RuntimeOptions) (_result *RecognizeVINCodeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeVINCodeResponse{}
	_body, _err := client.DoRequest("RecognizeVINCode", "HTTPS", "POST", "2019-12-30", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVINCodeAdvance(request *RecognizeVINCodeAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVINCodeResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeVINCodereq := &RecognizeVINCodeRequest{}
	rpcutil.Convert(request, recognizeVINCodereq)
	recognizeVINCodereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeVINCodeResp, _err := client.RecognizeVINCode(recognizeVINCodereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeVINCodeResp
	return _result, _err
}

func (client *Client) RecognizeBusinessLicense(request *RecognizeBusinessLicenseRequest, runtime *util.RuntimeOptions) (_result *RecognizeBusinessLicenseResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecognizeBusinessLicenseResponse{}
	_body, _err := client.DoRequest("RecognizeBusinessLicense", "HTTPS", "POST", "2019-12-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeBusinessLicenseAdvance(request *RecognizeBusinessLicenseAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeBusinessLicenseResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     tea.String(accessKeyId),
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(accessKeySecret),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(rpcutil.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &fileform.FileField{
		Filename:    authResponse.ObjectKey,
		Content:     request.ImageURLObject,
		ContentType: tea.String(""),
	}
	ossHeader := &oss.PostObjectRequestHeader{
		AccessKeyId:         authResponse.AccessKeyId,
		Policy:              authResponse.EncodedPolicy,
		Signature:           authResponse.Signature,
		Key:                 authResponse.ObjectKey,
		File:                fileObj,
		SuccessActionStatus: tea.String("201"),
	}
	uploadRequest := &oss.PostObjectRequest{
		BucketName: authResponse.Bucket,
		Header:     ossHeader,
	}
	ossRuntime := &ossutil.RuntimeOptions{}
	rpcutil.Convert(runtime, ossRuntime)
	_, _err = ossClient.PostObject(uploadRequest, ossRuntime)
	if _err != nil {
		return
	}
	// Step 2: request final api
	recognizeBusinessLicensereq := &RecognizeBusinessLicenseRequest{}
	rpcutil.Convert(request, recognizeBusinessLicensereq)
	recognizeBusinessLicensereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeBusinessLicenseResp, _err := client.RecognizeBusinessLicense(recognizeBusinessLicensereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeBusinessLicenseResp
	return _result, _err
}

func (client *Client) GetEndpoint(productId string, regionId string, endpointRule string, network string, suffix string, endpointMap map[string]string, endpoint string) (_result string, _err error) {
	if !util.Empty(endpoint) {
		_result = endpoint
		return _result, _err
	}

	if !util.IsUnset(endpointMap) && !util.Empty(endpointMap[regionId]) {
		return _result, _err
	}

	_body, _err := endpointutil.GetEndpointRules(productId, regionId, endpointRule, network, suffix)
	if _err != nil {
		return "", _err
	}
	_result = _body
	return _result, _err
}
