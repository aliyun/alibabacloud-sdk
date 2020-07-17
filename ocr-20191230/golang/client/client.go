// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	openplatform "github.com/alibabacloud-go/openplatform-20191219/client"
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
	JobId *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
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
	RequestId *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *GetAsyncJobResultResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	ErrorCode    *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	JobId        *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
	Result       *string `json:"Result,omitempty" xml:"Result,omitempty" require:"true"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
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
	FileURL    *string `json:"FileURL,omitempty" xml:"FileURL,omitempty" require:"true"`
	FileType   *string `json:"FileType,omitempty" xml:"FileType,omitempty" require:"true"`
	OutputType *string `json:"OutputType,omitempty" xml:"OutputType,omitempty" require:"true"`
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
	RequestId *string                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *TrimDocumentResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Content *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
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
	FileURLObject io.Reader `json:"FileURLObject,omitempty" xml:"FileURLObject,omitempty" require:"true"`
	FileType      *string   `json:"FileType,omitempty" xml:"FileType,omitempty" require:"true"`
	OutputType    *string   `json:"OutputType,omitempty" xml:"OutputType,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
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
	RequestId *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeChinapassportResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Authority      *string `json:"Authority,omitempty" xml:"Authority,omitempty" require:"true"`
	BirthDate      *string `json:"BirthDate,omitempty" xml:"BirthDate,omitempty" require:"true"`
	BirthDay       *string `json:"BirthDay,omitempty" xml:"BirthDay,omitempty" require:"true"`
	BirthPlace     *string `json:"BirthPlace,omitempty" xml:"BirthPlace,omitempty" require:"true"`
	BirthPlaceRaw  *string `json:"BirthPlaceRaw,omitempty" xml:"BirthPlaceRaw,omitempty" require:"true"`
	Country        *string `json:"Country,omitempty" xml:"Country,omitempty" require:"true"`
	ExpiryDate     *string `json:"ExpiryDate,omitempty" xml:"ExpiryDate,omitempty" require:"true"`
	ExpiryDay      *string `json:"ExpiryDay,omitempty" xml:"ExpiryDay,omitempty" require:"true"`
	IssueDate      *string `json:"IssueDate,omitempty" xml:"IssueDate,omitempty" require:"true"`
	IssuePlace     *string `json:"IssuePlace,omitempty" xml:"IssuePlace,omitempty" require:"true"`
	IssuePlaceRaw  *string `json:"IssuePlaceRaw,omitempty" xml:"IssuePlaceRaw,omitempty" require:"true"`
	LineZero       *string `json:"LineZero,omitempty" xml:"LineZero,omitempty" require:"true"`
	LineOne        *string `json:"LineOne,omitempty" xml:"LineOne,omitempty" require:"true"`
	Name           *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	NameChinese    *string `json:"NameChinese,omitempty" xml:"NameChinese,omitempty" require:"true"`
	NameChineseRaw *string `json:"NameChineseRaw,omitempty" xml:"NameChineseRaw,omitempty" require:"true"`
	PassportNo     *string `json:"PassportNo,omitempty" xml:"PassportNo,omitempty" require:"true"`
	PersonId       *string `json:"PersonId,omitempty" xml:"PersonId,omitempty" require:"true"`
	Sex            *string `json:"Sex,omitempty" xml:"Sex,omitempty" require:"true"`
	SourceCountry  *string `json:"SourceCountry,omitempty" xml:"SourceCountry,omitempty" require:"true"`
	Success        *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Type           *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
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
	RequestId *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeVerificationcodeResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Content *string `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
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
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizePassportMRZResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Regions []*RecognizePassportMRZResponseDataRegions `json:"Regions,omitempty" xml:"Regions,omitempty" require:"true" type:"Repeated"`
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
	Name             *string    `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	RecognitionScore *float32   `json:"RecognitionScore,omitempty" xml:"RecognitionScore,omitempty" require:"true"`
	Content          *string    `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
	DetectionScore   *float32   `json:"DetectionScore,omitempty" xml:"DetectionScore,omitempty" require:"true"`
	BandBoxes        []*float32 `json:"BandBoxes,omitempty" xml:"BandBoxes,omitempty" require:"true" type:"Repeated"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
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
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeTakeoutOrderResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Elements []*RecognizeTakeoutOrderResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
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
	Score *float32 `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Name  *string  `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Value *string  `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
	Boxes []*int   `json:"Boxes,omitempty" xml:"Boxes,omitempty" require:"true" type:"Repeated"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
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
	Tasks []*RecognizeQrCodeRequestTasks `json:"Tasks,omitempty" xml:"Tasks,omitempty" require:"true" type:"Repeated"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
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
	RequestId *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeQrCodeResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Elements []*RecognizeQrCodeResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
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
	TaskId   *string                                       `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
	ImageURL *string                                       `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	Results  []*RecognizeQrCodeResponseDataElementsResults `json:"Results,omitempty" xml:"Results,omitempty" require:"true" type:"Repeated"`
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
	Label       *string   `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Suggestion  *string   `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Rate        *float32  `json:"Rate,omitempty" xml:"Rate,omitempty" require:"true"`
	QrCodesData []*string `json:"QrCodesData,omitempty" xml:"QrCodesData,omitempty" require:"true" type:"Repeated"`
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
	FileURL  *string `json:"FileURL,omitempty" xml:"FileURL,omitempty" require:"true"`
	FileType *string `json:"FileType,omitempty" xml:"FileType,omitempty" require:"true"`
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
	RequestId *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeVATInvoiceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Content *RecognizeVATInvoiceResponseDataContent `json:"Content,omitempty" xml:"Content,omitempty" require:"true" type:"Struct"`
	Box     *RecognizeVATInvoiceResponseDataBox     `json:"Box,omitempty" xml:"Box,omitempty" require:"true" type:"Struct"`
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
	InvoiceCode      *string `json:"InvoiceCode,omitempty" xml:"InvoiceCode,omitempty" require:"true"`
	InvoiceNo        *string `json:"InvoiceNo,omitempty" xml:"InvoiceNo,omitempty" require:"true"`
	InvoiceDate      *string `json:"InvoiceDate,omitempty" xml:"InvoiceDate,omitempty" require:"true"`
	AntiFakeCode     *string `json:"AntiFakeCode,omitempty" xml:"AntiFakeCode,omitempty" require:"true"`
	PayerName        *string `json:"PayerName,omitempty" xml:"PayerName,omitempty" require:"true"`
	PayerRegisterNo  *string `json:"PayerRegisterNo,omitempty" xml:"PayerRegisterNo,omitempty" require:"true"`
	PayerAddress     *string `json:"PayerAddress,omitempty" xml:"PayerAddress,omitempty" require:"true"`
	PayerBankName    *string `json:"PayerBankName,omitempty" xml:"PayerBankName,omitempty" require:"true"`
	WithoutTaxAmount *string `json:"WithoutTaxAmount,omitempty" xml:"WithoutTaxAmount,omitempty" require:"true"`
	TaxAmount        *string `json:"TaxAmount,omitempty" xml:"TaxAmount,omitempty" require:"true"`
	SumAmount        *string `json:"SumAmount,omitempty" xml:"SumAmount,omitempty" require:"true"`
	InvoiceAmount    *string `json:"InvoiceAmount,omitempty" xml:"InvoiceAmount,omitempty" require:"true"`
	PayeeName        *string `json:"PayeeName,omitempty" xml:"PayeeName,omitempty" require:"true"`
	PayeeRegisterNo  *string `json:"PayeeRegisterNo,omitempty" xml:"PayeeRegisterNo,omitempty" require:"true"`
	PayeeAddress     *string `json:"PayeeAddress,omitempty" xml:"PayeeAddress,omitempty" require:"true"`
	PayeeBankName    *string `json:"PayeeBankName,omitempty" xml:"PayeeBankName,omitempty" require:"true"`
	Payee            *string `json:"Payee,omitempty" xml:"Payee,omitempty" require:"true"`
	Checker          *string `json:"Checker,omitempty" xml:"Checker,omitempty" require:"true"`
	Clerk            *string `json:"Clerk,omitempty" xml:"Clerk,omitempty" require:"true"`
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
	InvoiceCodes      []*float32 `json:"InvoiceCodes,omitempty" xml:"InvoiceCodes,omitempty" require:"true" type:"Repeated"`
	InvoiceNoes       []*float32 `json:"InvoiceNoes,omitempty" xml:"InvoiceNoes,omitempty" require:"true" type:"Repeated"`
	InvoiceDates      []*float32 `json:"InvoiceDates,omitempty" xml:"InvoiceDates,omitempty" require:"true" type:"Repeated"`
	InvoiceFakeCodes  []*float32 `json:"InvoiceFakeCodes,omitempty" xml:"InvoiceFakeCodes,omitempty" require:"true" type:"Repeated"`
	PayerNames        []*float32 `json:"PayerNames,omitempty" xml:"PayerNames,omitempty" require:"true" type:"Repeated"`
	PayerRegisterNoes []*float32 `json:"PayerRegisterNoes,omitempty" xml:"PayerRegisterNoes,omitempty" require:"true" type:"Repeated"`
	PayerAddresses    []*float32 `json:"PayerAddresses,omitempty" xml:"PayerAddresses,omitempty" require:"true" type:"Repeated"`
	PayerBankNames    []*float32 `json:"PayerBankNames,omitempty" xml:"PayerBankNames,omitempty" require:"true" type:"Repeated"`
	WithoutTaxAmounts []*float32 `json:"WithoutTaxAmounts,omitempty" xml:"WithoutTaxAmounts,omitempty" require:"true" type:"Repeated"`
	TaxAmounts        []*float32 `json:"TaxAmounts,omitempty" xml:"TaxAmounts,omitempty" require:"true" type:"Repeated"`
	SumAmounts        []*float32 `json:"SumAmounts,omitempty" xml:"SumAmounts,omitempty" require:"true" type:"Repeated"`
	InvoiceAmounts    []*float32 `json:"InvoiceAmounts,omitempty" xml:"InvoiceAmounts,omitempty" require:"true" type:"Repeated"`
	PayeeNames        []*float32 `json:"PayeeNames,omitempty" xml:"PayeeNames,omitempty" require:"true" type:"Repeated"`
	PayeeRegisterNoes []*float32 `json:"PayeeRegisterNoes,omitempty" xml:"PayeeRegisterNoes,omitempty" require:"true" type:"Repeated"`
	PayeeAddresses    []*float32 `json:"PayeeAddresses,omitempty" xml:"PayeeAddresses,omitempty" require:"true" type:"Repeated"`
	PayeeBankNames    []*float32 `json:"PayeeBankNames,omitempty" xml:"PayeeBankNames,omitempty" require:"true" type:"Repeated"`
	Payees            []*float32 `json:"Payees,omitempty" xml:"Payees,omitempty" require:"true" type:"Repeated"`
	Checkers          []*float32 `json:"Checkers,omitempty" xml:"Checkers,omitempty" require:"true" type:"Repeated"`
	Clerks            []*float32 `json:"Clerks,omitempty" xml:"Clerks,omitempty" require:"true" type:"Repeated"`
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
	FileURLObject io.Reader `json:"FileURLObject,omitempty" xml:"FileURLObject,omitempty" require:"true"`
	FileType      *string   `json:"FileType,omitempty" xml:"FileType,omitempty" require:"true"`
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
	ImageURL          *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	MinHeight         *int    `json:"MinHeight,omitempty" xml:"MinHeight,omitempty" require:"true"`
	OutputProbability *bool   `json:"OutputProbability,omitempty" xml:"OutputProbability,omitempty" require:"true"`
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
	RequestId *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeCharacterResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Results []*RecognizeCharacterResponseDataResults `json:"Results,omitempty" xml:"Results,omitempty" require:"true" type:"Repeated"`
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
	Probability    *float32                                             `json:"Probability,omitempty" xml:"Probability,omitempty" require:"true"`
	Text           *string                                              `json:"Text,omitempty" xml:"Text,omitempty" require:"true"`
	TextRectangles *RecognizeCharacterResponseDataResultsTextRectangles `json:"TextRectangles,omitempty" xml:"TextRectangles,omitempty" require:"true" type:"Struct"`
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
	Angle  *int `json:"Angle,omitempty" xml:"Angle,omitempty" require:"true"`
	Left   *int `json:"Left,omitempty" xml:"Left,omitempty" require:"true"`
	Top    *int `json:"Top,omitempty" xml:"Top,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
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
	ImageURLObject    io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
	MinHeight         *int      `json:"MinHeight,omitempty" xml:"MinHeight,omitempty" require:"true"`
	OutputProbability *bool     `json:"OutputProbability,omitempty" xml:"OutputProbability,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
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
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeTaxiInvoiceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Invoices []*RecognizeTaxiInvoiceResponseDataInvoices `json:"Invoices,omitempty" xml:"Invoices,omitempty" require:"true" type:"Repeated"`
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
	RotateType *int                                                `json:"RotateType,omitempty" xml:"RotateType,omitempty" require:"true"`
	Items      []*RecognizeTaxiInvoiceResponseDataInvoicesItems    `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Repeated"`
	InvoiceRoi *RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi `json:"InvoiceRoi,omitempty" xml:"InvoiceRoi,omitempty" require:"true" type:"Struct"`
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
	Text    *string                                               `json:"Text,omitempty" xml:"Text,omitempty" require:"true"`
	ItemRoi *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi `json:"ItemRoi,omitempty" xml:"ItemRoi,omitempty" require:"true" type:"Struct"`
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
	Angle  *float32                                                    `json:"Angle,omitempty" xml:"Angle,omitempty" require:"true"`
	Center *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter `json:"Center,omitempty" xml:"Center,omitempty" require:"true" type:"Struct"`
	Size   *RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize   `json:"Size,omitempty" xml:"Size,omitempty" require:"true" type:"Struct"`
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
	X *float32 `json:"X,omitempty" xml:"X,omitempty" require:"true"`
	Y *float32 `json:"Y,omitempty" xml:"Y,omitempty" require:"true"`
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
	H *float32 `json:"H,omitempty" xml:"H,omitempty" require:"true"`
	W *float32 `json:"W,omitempty" xml:"W,omitempty" require:"true"`
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
	H *float32 `json:"H,omitempty" xml:"H,omitempty" require:"true"`
	W *float32 `json:"W,omitempty" xml:"W,omitempty" require:"true"`
	X *float32 `json:"X,omitempty" xml:"X,omitempty" require:"true"`
	Y *float32 `json:"Y,omitempty" xml:"Y,omitempty" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	Side     *string `json:"Side,omitempty" xml:"Side,omitempty" require:"true"`
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
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeIdentityCardResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	FrontResult *RecognizeIdentityCardResponseDataFrontResult `json:"FrontResult,omitempty" xml:"FrontResult,omitempty" require:"true" type:"Struct"`
	BackResult  *RecognizeIdentityCardResponseDataBackResult  `json:"BackResult,omitempty" xml:"BackResult,omitempty" require:"true" type:"Struct"`
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
	Address          *string                                                         `json:"Address,omitempty" xml:"Address,omitempty" require:"true"`
	Name             *string                                                         `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Nationality      *string                                                         `json:"Nationality,omitempty" xml:"Nationality,omitempty" require:"true"`
	IDNumber         *string                                                         `json:"IDNumber,omitempty" xml:"IDNumber,omitempty" require:"true"`
	Gender           *string                                                         `json:"Gender,omitempty" xml:"Gender,omitempty" require:"true"`
	BirthDate        *string                                                         `json:"BirthDate,omitempty" xml:"BirthDate,omitempty" require:"true"`
	CardAreas        []*RecognizeIdentityCardResponseDataFrontResultCardAreas        `json:"CardAreas,omitempty" xml:"CardAreas,omitempty" require:"true" type:"Repeated"`
	FaceRectVertices []*RecognizeIdentityCardResponseDataFrontResultFaceRectVertices `json:"FaceRectVertices,omitempty" xml:"FaceRectVertices,omitempty" require:"true" type:"Repeated"`
	FaceRectangle    *RecognizeIdentityCardResponseDataFrontResultFaceRectangle      `json:"FaceRectangle,omitempty" xml:"FaceRectangle,omitempty" require:"true" type:"Struct"`
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
	X *float32 `json:"X,omitempty" xml:"X,omitempty" require:"true"`
	Y *float32 `json:"Y,omitempty" xml:"Y,omitempty" require:"true"`
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
	X *float32 `json:"X,omitempty" xml:"X,omitempty" require:"true"`
	Y *float32 `json:"Y,omitempty" xml:"Y,omitempty" require:"true"`
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
	Angle  *float32                                                         `json:"Angle,omitempty" xml:"Angle,omitempty" require:"true"`
	Center *RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter `json:"Center,omitempty" xml:"Center,omitempty" require:"true" type:"Struct"`
	Size   *RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize   `json:"Size,omitempty" xml:"Size,omitempty" require:"true" type:"Struct"`
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
	X *float32 `json:"X,omitempty" xml:"X,omitempty" require:"true"`
	Y *float32 `json:"Y,omitempty" xml:"Y,omitempty" require:"true"`
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
	Height *float32 `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Width  *float32 `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
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
	StartDate *string `json:"StartDate,omitempty" xml:"StartDate,omitempty" require:"true"`
	EndDate   *string `json:"EndDate,omitempty" xml:"EndDate,omitempty" require:"true"`
	Issue     *string `json:"Issue,omitempty" xml:"Issue,omitempty" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
	Side           *string   `json:"Side,omitempty" xml:"Side,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
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
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeLicensePlateResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Plates []*RecognizeLicensePlateResponseDataPlates `json:"Plates,omitempty" xml:"Plates,omitempty" require:"true" type:"Repeated"`
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
	Confidence          *float32                                    `json:"Confidence,omitempty" xml:"Confidence,omitempty" require:"true"`
	PlateNumber         *string                                     `json:"PlateNumber,omitempty" xml:"PlateNumber,omitempty" require:"true"`
	PlateType           *string                                     `json:"PlateType,omitempty" xml:"PlateType,omitempty" require:"true"`
	PlateTypeConfidence *float32                                    `json:"PlateTypeConfidence,omitempty" xml:"PlateTypeConfidence,omitempty" require:"true"`
	Roi                 *RecognizeLicensePlateResponseDataPlatesRoi `json:"Roi,omitempty" xml:"Roi,omitempty" require:"true" type:"Struct"`
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
	H *int `json:"H,omitempty" xml:"H,omitempty" require:"true"`
	W *int `json:"W,omitempty" xml:"W,omitempty" require:"true"`
	X *int `json:"X,omitempty" xml:"X,omitempty" require:"true"`
	Y *int `json:"Y,omitempty" xml:"Y,omitempty" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
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
	ImageURL        *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	OutputFormat    *string `json:"OutputFormat,omitempty" xml:"OutputFormat,omitempty" require:"true"`
	UseFinanceModel *bool   `json:"UseFinanceModel,omitempty" xml:"UseFinanceModel,omitempty" require:"true"`
	AssureDirection *bool   `json:"AssureDirection,omitempty" xml:"AssureDirection,omitempty" require:"true"`
	HasLine         *bool   `json:"HasLine,omitempty" xml:"HasLine,omitempty" require:"true"`
	SkipDetection   *bool   `json:"SkipDetection,omitempty" xml:"SkipDetection,omitempty" require:"true"`
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
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeTableResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	FileContent *string                             `json:"FileContent,omitempty" xml:"FileContent,omitempty" require:"true"`
	Tables      []*RecognizeTableResponseDataTables `json:"Tables,omitempty" xml:"Tables,omitempty" require:"true" type:"Repeated"`
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
	Head      *string                                      `json:"Head,omitempty" xml:"Head,omitempty" require:"true"`
	Tail      *string                                      `json:"Tail,omitempty" xml:"Tail,omitempty" require:"true"`
	TableRows []*RecognizeTableResponseDataTablesTableRows `json:"TableRows,omitempty" xml:"TableRows,omitempty" require:"true" type:"Repeated"`
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
	TableColumns []*RecognizeTableResponseDataTablesTableRowsTableColumns `json:"TableColumns,omitempty" xml:"TableColumns,omitempty" require:"true" type:"Repeated"`
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
	StartColumn *int      `json:"StartColumn,omitempty" xml:"StartColumn,omitempty" require:"true"`
	StartRow    *int      `json:"StartRow,omitempty" xml:"StartRow,omitempty" require:"true"`
	EndColumn   *int      `json:"EndColumn,omitempty" xml:"EndColumn,omitempty" require:"true"`
	EndRow      *int      `json:"EndRow,omitempty" xml:"EndRow,omitempty" require:"true"`
	Height      *int      `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Width       *int      `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Texts       []*string `json:"Texts,omitempty" xml:"Texts,omitempty" require:"true" type:"Repeated"`
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
	ImageURLObject  io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
	OutputFormat    *string   `json:"OutputFormat,omitempty" xml:"OutputFormat,omitempty" require:"true"`
	UseFinanceModel *bool     `json:"UseFinanceModel,omitempty" xml:"UseFinanceModel,omitempty" require:"true"`
	AssureDirection *bool     `json:"AssureDirection,omitempty" xml:"AssureDirection,omitempty" require:"true"`
	HasLine         *bool     `json:"HasLine,omitempty" xml:"HasLine,omitempty" require:"true"`
	SkipDetection   *bool     `json:"SkipDetection,omitempty" xml:"SkipDetection,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	Side     *string `json:"Side,omitempty" xml:"Side,omitempty" require:"true"`
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
	RequestId *string                              `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeDrivingLicenseResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	FaceResult *RecognizeDrivingLicenseResponseDataFaceResult `json:"FaceResult,omitempty" xml:"FaceResult,omitempty" require:"true" type:"Struct"`
	BackResult *RecognizeDrivingLicenseResponseDataBackResult `json:"BackResult,omitempty" xml:"BackResult,omitempty" require:"true" type:"Struct"`
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
	PlateNumber  *string `json:"PlateNumber,omitempty" xml:"PlateNumber,omitempty" require:"true"`
	VehicleType  *string `json:"VehicleType,omitempty" xml:"VehicleType,omitempty" require:"true"`
	Owner        *string `json:"Owner,omitempty" xml:"Owner,omitempty" require:"true"`
	UseCharacter *string `json:"UseCharacter,omitempty" xml:"UseCharacter,omitempty" require:"true"`
	Address      *string `json:"Address,omitempty" xml:"Address,omitempty" require:"true"`
	Model        *string `json:"Model,omitempty" xml:"Model,omitempty" require:"true"`
	Vin          *string `json:"Vin,omitempty" xml:"Vin,omitempty" require:"true"`
	EngineNumber *string `json:"EngineNumber,omitempty" xml:"EngineNumber,omitempty" require:"true"`
	RegisterDate *string `json:"RegisterDate,omitempty" xml:"RegisterDate,omitempty" require:"true"`
	IssueDate    *string `json:"IssueDate,omitempty" xml:"IssueDate,omitempty" require:"true"`
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
	ApprovedPassengerCapacity *string `json:"ApprovedPassengerCapacity,omitempty" xml:"ApprovedPassengerCapacity,omitempty" require:"true"`
	ApprovedLoad              *string `json:"ApprovedLoad,omitempty" xml:"ApprovedLoad,omitempty" require:"true"`
	FileNumber                *string `json:"FileNumber,omitempty" xml:"FileNumber,omitempty" require:"true"`
	GrossMass                 *string `json:"GrossMass,omitempty" xml:"GrossMass,omitempty" require:"true"`
	EnergyType                *string `json:"EnergyType,omitempty" xml:"EnergyType,omitempty" require:"true"`
	InspectionRecord          *string `json:"InspectionRecord,omitempty" xml:"InspectionRecord,omitempty" require:"true"`
	OverallDimension          *string `json:"OverallDimension,omitempty" xml:"OverallDimension,omitempty" require:"true"`
	TractionMass              *string `json:"TractionMass,omitempty" xml:"TractionMass,omitempty" require:"true"`
	UnladenMass               *string `json:"UnladenMass,omitempty" xml:"UnladenMass,omitempty" require:"true"`
	PlateNumber               *string `json:"PlateNumber,omitempty" xml:"PlateNumber,omitempty" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
	Side           *string   `json:"Side,omitempty" xml:"Side,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
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
	RequestId *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeBankCardResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	BankName   *string `json:"BankName,omitempty" xml:"BankName,omitempty" require:"true"`
	CardNumber *string `json:"CardNumber,omitempty" xml:"CardNumber,omitempty" require:"true"`
	ValidDate  *string `json:"ValidDate,omitempty" xml:"ValidDate,omitempty" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
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
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeTrainTicketResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Date             *string  `json:"Date,omitempty" xml:"Date,omitempty" require:"true"`
	Destination      *string  `json:"Destination,omitempty" xml:"Destination,omitempty" require:"true"`
	Level            *string  `json:"Level,omitempty" xml:"Level,omitempty" require:"true"`
	Number           *string  `json:"Number,omitempty" xml:"Number,omitempty" require:"true"`
	Name             *string  `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	DepartureStation *string  `json:"DepartureStation,omitempty" xml:"DepartureStation,omitempty" require:"true"`
	Seat             *string  `json:"Seat,omitempty" xml:"Seat,omitempty" require:"true"`
	Price            *float32 `json:"Price,omitempty" xml:"Price,omitempty" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	Side     *string `json:"Side,omitempty" xml:"Side,omitempty" require:"true"`
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
	RequestId *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeDriverLicenseResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	FaceResult *RecognizeDriverLicenseResponseDataFaceResult `json:"FaceResult,omitempty" xml:"FaceResult,omitempty" require:"true" type:"Struct"`
	BackResult *RecognizeDriverLicenseResponseDataBackResult `json:"BackResult,omitempty" xml:"BackResult,omitempty" require:"true" type:"Struct"`
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
	Name          *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	LicenseNumber *string `json:"LicenseNumber,omitempty" xml:"LicenseNumber,omitempty" require:"true"`
	VehicleType   *string `json:"VehicleType,omitempty" xml:"VehicleType,omitempty" require:"true"`
	StartDate     *string `json:"StartDate,omitempty" xml:"StartDate,omitempty" require:"true"`
	EndDate       *string `json:"EndDate,omitempty" xml:"EndDate,omitempty" require:"true"`
	IssueDate     *string `json:"IssueDate,omitempty" xml:"IssueDate,omitempty" require:"true"`
	Address       *string `json:"Address,omitempty" xml:"Address,omitempty" require:"true"`
	Gender        *string `json:"Gender,omitempty" xml:"Gender,omitempty" require:"true"`
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
	ArchiveNumber *string `json:"ArchiveNumber,omitempty" xml:"ArchiveNumber,omitempty" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
	Side           *string   `json:"Side,omitempty" xml:"Side,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
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
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeAccountPageResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Angle               *float32                                               `json:"Angle,omitempty" xml:"Angle,omitempty" require:"true"`
	Name                *string                                                `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Gender              *string                                                `json:"Gender,omitempty" xml:"Gender,omitempty" require:"true"`
	Relation            *string                                                `json:"Relation,omitempty" xml:"Relation,omitempty" require:"true"`
	BirthPlace          *string                                                `json:"BirthPlace,omitempty" xml:"BirthPlace,omitempty" require:"true"`
	Nationality         *string                                                `json:"Nationality,omitempty" xml:"Nationality,omitempty" require:"true"`
	NativePlace         *string                                                `json:"NativePlace,omitempty" xml:"NativePlace,omitempty" require:"true"`
	BirthDate           *string                                                `json:"BirthDate,omitempty" xml:"BirthDate,omitempty" require:"true"`
	IDNumber            *string                                                `json:"IDNumber,omitempty" xml:"IDNumber,omitempty" require:"true"`
	InvalidStampAreas   []*RecognizeAccountPageResponseDataInvalidStampAreas   `json:"InvalidStampAreas,omitempty" xml:"InvalidStampAreas,omitempty" require:"true" type:"Repeated"`
	UndertakeStampAreas []*RecognizeAccountPageResponseDataUndertakeStampAreas `json:"UndertakeStampAreas,omitempty" xml:"UndertakeStampAreas,omitempty" require:"true" type:"Repeated"`
	RegisterStampAreas  []*RecognizeAccountPageResponseDataRegisterStampAreas  `json:"RegisterStampAreas,omitempty" xml:"RegisterStampAreas,omitempty" require:"true" type:"Repeated"`
	OtherStampAreas     []*RecognizeAccountPageResponseDataOtherStampAreas     `json:"OtherStampAreas,omitempty" xml:"OtherStampAreas,omitempty" require:"true" type:"Repeated"`
	TitleArea           *RecognizeAccountPageResponseDataTitleArea             `json:"TitleArea,omitempty" xml:"TitleArea,omitempty" require:"true" type:"Struct"`
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
	Left   *int `json:"Left,omitempty" xml:"Left,omitempty" require:"true"`
	Top    *int `json:"Top,omitempty" xml:"Top,omitempty" require:"true"`
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
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
	Left   *int `json:"Left,omitempty" xml:"Left,omitempty" require:"true"`
	Top    *int `json:"Top,omitempty" xml:"Top,omitempty" require:"true"`
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
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
	Left   *int `json:"Left,omitempty" xml:"Left,omitempty" require:"true"`
	Top    *int `json:"Top,omitempty" xml:"Top,omitempty" require:"true"`
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
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
	Left   *int `json:"Left,omitempty" xml:"Left,omitempty" require:"true"`
	Top    *int `json:"Top,omitempty" xml:"Top,omitempty" require:"true"`
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
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
	Left   *int `json:"Left,omitempty" xml:"Left,omitempty" require:"true"`
	Top    *int `json:"Top,omitempty" xml:"Top,omitempty" require:"true"`
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
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
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeStampResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Results []*RecognizeStampResponseDataResults `json:"Results,omitempty" xml:"Results,omitempty" require:"true" type:"Repeated"`
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
	GeneralText []*RecognizeStampResponseDataResultsGeneralText `json:"GeneralText,omitempty" xml:"GeneralText,omitempty" require:"true" type:"Repeated"`
	Roi         *RecognizeStampResponseDataResultsRoi           `json:"Roi,omitempty" xml:"Roi,omitempty" require:"true" type:"Struct"`
	Text        *RecognizeStampResponseDataResultsText          `json:"Text,omitempty" xml:"Text,omitempty" require:"true" type:"Struct"`
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
	Content    *string  `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
	Confidence *float32 `json:"Confidence,omitempty" xml:"Confidence,omitempty" require:"true"`
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
	Left   *int `json:"Left,omitempty" xml:"Left,omitempty" require:"true"`
	Top    *int `json:"Top,omitempty" xml:"Top,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
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
	Content    *string  `json:"Content,omitempty" xml:"Content,omitempty" require:"true"`
	Confidence *float32 `json:"Confidence,omitempty" xml:"Confidence,omitempty" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
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
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeBusinessCardResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Name               *string   `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Companies          []*string `json:"Companies,omitempty" xml:"Companies,omitempty" require:"true" type:"Repeated"`
	Departments        []*string `json:"Departments,omitempty" xml:"Departments,omitempty" require:"true" type:"Repeated"`
	Titles             []*string `json:"Titles,omitempty" xml:"Titles,omitempty" require:"true" type:"Repeated"`
	CellPhoneNumbers   []*string `json:"CellPhoneNumbers,omitempty" xml:"CellPhoneNumbers,omitempty" require:"true" type:"Repeated"`
	OfficePhoneNumbers []*string `json:"OfficePhoneNumbers,omitempty" xml:"OfficePhoneNumbers,omitempty" require:"true" type:"Repeated"`
	Addresses          []*string `json:"Addresses,omitempty" xml:"Addresses,omitempty" require:"true" type:"Repeated"`
	Emails             []*string `json:"Emails,omitempty" xml:"Emails,omitempty" require:"true" type:"Repeated"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
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
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeVINCodeResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	VinCode *string `json:"VinCode,omitempty" xml:"VinCode,omitempty" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
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
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
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
	RequestId *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeBusinessLicenseResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	Angle          *string                                     `json:"Angle,omitempty" xml:"Angle,omitempty" require:"true"`
	RegisterNumber *string                                     `json:"RegisterNumber,omitempty" xml:"RegisterNumber,omitempty" require:"true"`
	Name           *string                                     `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Type           *string                                     `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	LegalPerson    *string                                     `json:"LegalPerson,omitempty" xml:"LegalPerson,omitempty" require:"true"`
	EstablishDate  *string                                     `json:"EstablishDate,omitempty" xml:"EstablishDate,omitempty" require:"true"`
	ValidPeriod    *string                                     `json:"ValidPeriod,omitempty" xml:"ValidPeriod,omitempty" require:"true"`
	Address        *string                                     `json:"Address,omitempty" xml:"Address,omitempty" require:"true"`
	Capital        *string                                     `json:"Capital,omitempty" xml:"Capital,omitempty" require:"true"`
	Business       *string                                     `json:"Business,omitempty" xml:"Business,omitempty" require:"true"`
	Emblem         *RecognizeBusinessLicenseResponseDataEmblem `json:"Emblem,omitempty" xml:"Emblem,omitempty" require:"true" type:"Struct"`
	Title          *RecognizeBusinessLicenseResponseDataTitle  `json:"Title,omitempty" xml:"Title,omitempty" require:"true" type:"Struct"`
	Stamp          *RecognizeBusinessLicenseResponseDataStamp  `json:"Stamp,omitempty" xml:"Stamp,omitempty" require:"true" type:"Struct"`
	QRCode         *RecognizeBusinessLicenseResponseDataQRCode `json:"QRCode,omitempty" xml:"QRCode,omitempty" require:"true" type:"Struct"`
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
	Top    *int `json:"Top,omitempty" xml:"Top,omitempty" require:"true"`
	Left   *int `json:"Left,omitempty" xml:"Left,omitempty" require:"true"`
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
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
	Top    *int `json:"Top,omitempty" xml:"Top,omitempty" require:"true"`
	Left   *int `json:"Left,omitempty" xml:"Left,omitempty" require:"true"`
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
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
	Top    *int `json:"Top,omitempty" xml:"Top,omitempty" require:"true"`
	Left   *int `json:"Left,omitempty" xml:"Left,omitempty" require:"true"`
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
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
	Top    *int `json:"Top,omitempty" xml:"Top,omitempty" require:"true"`
	Left   *int `json:"Left,omitempty" xml:"Left,omitempty" require:"true"`
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
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
	client.EndpointRule = tea.String("regional")
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("ocr"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) GetAsyncJobResult(request *GetAsyncJobResultRequest, runtime *util.RuntimeOptions) (_result *GetAsyncJobResultResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetAsyncJobResultResponse{}
	_body, _err := client.DoRequest(tea.String("GetAsyncJobResult"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TrimDocument(request *TrimDocumentRequest, runtime *util.RuntimeOptions) (_result *TrimDocumentResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &TrimDocumentResponse{}
	_body, _err := client.DoRequest(tea.String("TrimDocument"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TrimDocumentAdvance(request *TrimDocumentAdvanceRequest, runtime *util.RuntimeOptions) (_result *TrimDocumentResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	trimDocumentreq := &TrimDocumentRequest{}
	rpcutil.Convert(request, trimDocumentreq)
	trimDocumentreq.FileURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	trimDocumentResp, _err := client.TrimDocument(trimDocumentreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = trimDocumentResp
	return _result, _err
}

func (client *Client) RecognizeChinapassport(request *RecognizeChinapassportRequest, runtime *util.RuntimeOptions) (_result *RecognizeChinapassportResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeChinapassportResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeChinapassport"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeChinapassportAdvance(request *RecognizeChinapassportAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeChinapassportResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeChinapassportreq := &RecognizeChinapassportRequest{}
	rpcutil.Convert(request, recognizeChinapassportreq)
	recognizeChinapassportreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeChinapassportResp, _err := client.RecognizeChinapassport(recognizeChinapassportreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeChinapassportResp
	return _result, _err
}

func (client *Client) RecognizeVerificationcode(request *RecognizeVerificationcodeRequest, runtime *util.RuntimeOptions) (_result *RecognizeVerificationcodeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeVerificationcodeResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeVerificationcode"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVerificationcodeAdvance(request *RecognizeVerificationcodeAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVerificationcodeResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeVerificationcodereq := &RecognizeVerificationcodeRequest{}
	rpcutil.Convert(request, recognizeVerificationcodereq)
	recognizeVerificationcodereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeVerificationcodeResp, _err := client.RecognizeVerificationcode(recognizeVerificationcodereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeVerificationcodeResp
	return _result, _err
}

func (client *Client) RecognizePassportMRZ(request *RecognizePassportMRZRequest, runtime *util.RuntimeOptions) (_result *RecognizePassportMRZResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizePassportMRZResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizePassportMRZ"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizePassportMRZAdvance(request *RecognizePassportMRZAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizePassportMRZResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizePassportMRZreq := &RecognizePassportMRZRequest{}
	rpcutil.Convert(request, recognizePassportMRZreq)
	recognizePassportMRZreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizePassportMRZResp, _err := client.RecognizePassportMRZ(recognizePassportMRZreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizePassportMRZResp
	return _result, _err
}

func (client *Client) RecognizeTakeoutOrder(request *RecognizeTakeoutOrderRequest, runtime *util.RuntimeOptions) (_result *RecognizeTakeoutOrderResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeTakeoutOrderResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeTakeoutOrder"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeTakeoutOrderAdvance(request *RecognizeTakeoutOrderAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeTakeoutOrderResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeTakeoutOrderreq := &RecognizeTakeoutOrderRequest{}
	rpcutil.Convert(request, recognizeTakeoutOrderreq)
	recognizeTakeoutOrderreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeTakeoutOrderResp, _err := client.RecognizeTakeoutOrder(recognizeTakeoutOrderreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeTakeoutOrderResp
	return _result, _err
}

func (client *Client) RecognizeQrCode(request *RecognizeQrCodeRequest, runtime *util.RuntimeOptions) (_result *RecognizeQrCodeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeQrCodeResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeQrCode"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVATInvoice(request *RecognizeVATInvoiceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVATInvoiceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeVATInvoiceResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeVATInvoice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVATInvoiceAdvance(request *RecognizeVATInvoiceAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVATInvoiceResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeVATInvoicereq := &RecognizeVATInvoiceRequest{}
	rpcutil.Convert(request, recognizeVATInvoicereq)
	recognizeVATInvoicereq.FileURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeVATInvoiceResp, _err := client.RecognizeVATInvoice(recognizeVATInvoicereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeVATInvoiceResp
	return _result, _err
}

func (client *Client) RecognizeCharacter(request *RecognizeCharacterRequest, runtime *util.RuntimeOptions) (_result *RecognizeCharacterResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeCharacterResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeCharacter"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeCharacterAdvance(request *RecognizeCharacterAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeCharacterResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeCharacterreq := &RecognizeCharacterRequest{}
	rpcutil.Convert(request, recognizeCharacterreq)
	recognizeCharacterreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeCharacterResp, _err := client.RecognizeCharacter(recognizeCharacterreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeCharacterResp
	return _result, _err
}

func (client *Client) RecognizeTaxiInvoice(request *RecognizeTaxiInvoiceRequest, runtime *util.RuntimeOptions) (_result *RecognizeTaxiInvoiceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeTaxiInvoiceResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeTaxiInvoice"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeTaxiInvoiceAdvance(request *RecognizeTaxiInvoiceAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeTaxiInvoiceResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeTaxiInvoicereq := &RecognizeTaxiInvoiceRequest{}
	rpcutil.Convert(request, recognizeTaxiInvoicereq)
	recognizeTaxiInvoicereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeTaxiInvoiceResp, _err := client.RecognizeTaxiInvoice(recognizeTaxiInvoicereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeTaxiInvoiceResp
	return _result, _err
}

func (client *Client) RecognizeIdentityCard(request *RecognizeIdentityCardRequest, runtime *util.RuntimeOptions) (_result *RecognizeIdentityCardResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeIdentityCardResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeIdentityCard"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeIdentityCardAdvance(request *RecognizeIdentityCardAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeIdentityCardResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeIdentityCardreq := &RecognizeIdentityCardRequest{}
	rpcutil.Convert(request, recognizeIdentityCardreq)
	recognizeIdentityCardreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeIdentityCardResp, _err := client.RecognizeIdentityCard(recognizeIdentityCardreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeIdentityCardResp
	return _result, _err
}

func (client *Client) RecognizeLicensePlate(request *RecognizeLicensePlateRequest, runtime *util.RuntimeOptions) (_result *RecognizeLicensePlateResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeLicensePlateResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeLicensePlate"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeLicensePlateAdvance(request *RecognizeLicensePlateAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeLicensePlateResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeLicensePlatereq := &RecognizeLicensePlateRequest{}
	rpcutil.Convert(request, recognizeLicensePlatereq)
	recognizeLicensePlatereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeLicensePlateResp, _err := client.RecognizeLicensePlate(recognizeLicensePlatereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeLicensePlateResp
	return _result, _err
}

func (client *Client) RecognizeTable(request *RecognizeTableRequest, runtime *util.RuntimeOptions) (_result *RecognizeTableResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeTableResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeTable"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeTableAdvance(request *RecognizeTableAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeTableResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeTablereq := &RecognizeTableRequest{}
	rpcutil.Convert(request, recognizeTablereq)
	recognizeTablereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeTableResp, _err := client.RecognizeTable(recognizeTablereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeTableResp
	return _result, _err
}

func (client *Client) RecognizeDrivingLicense(request *RecognizeDrivingLicenseRequest, runtime *util.RuntimeOptions) (_result *RecognizeDrivingLicenseResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeDrivingLicenseResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeDrivingLicense"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeDrivingLicenseAdvance(request *RecognizeDrivingLicenseAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeDrivingLicenseResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeDrivingLicensereq := &RecognizeDrivingLicenseRequest{}
	rpcutil.Convert(request, recognizeDrivingLicensereq)
	recognizeDrivingLicensereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeDrivingLicenseResp, _err := client.RecognizeDrivingLicense(recognizeDrivingLicensereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeDrivingLicenseResp
	return _result, _err
}

func (client *Client) RecognizeBankCard(request *RecognizeBankCardRequest, runtime *util.RuntimeOptions) (_result *RecognizeBankCardResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeBankCardResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeBankCard"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeBankCardAdvance(request *RecognizeBankCardAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeBankCardResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeBankCardreq := &RecognizeBankCardRequest{}
	rpcutil.Convert(request, recognizeBankCardreq)
	recognizeBankCardreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeBankCardResp, _err := client.RecognizeBankCard(recognizeBankCardreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeBankCardResp
	return _result, _err
}

func (client *Client) RecognizeTrainTicket(request *RecognizeTrainTicketRequest, runtime *util.RuntimeOptions) (_result *RecognizeTrainTicketResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeTrainTicketResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeTrainTicket"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeTrainTicketAdvance(request *RecognizeTrainTicketAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeTrainTicketResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeTrainTicketreq := &RecognizeTrainTicketRequest{}
	rpcutil.Convert(request, recognizeTrainTicketreq)
	recognizeTrainTicketreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeTrainTicketResp, _err := client.RecognizeTrainTicket(recognizeTrainTicketreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeTrainTicketResp
	return _result, _err
}

func (client *Client) RecognizeDriverLicense(request *RecognizeDriverLicenseRequest, runtime *util.RuntimeOptions) (_result *RecognizeDriverLicenseResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeDriverLicenseResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeDriverLicense"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeDriverLicenseAdvance(request *RecognizeDriverLicenseAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeDriverLicenseResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeDriverLicensereq := &RecognizeDriverLicenseRequest{}
	rpcutil.Convert(request, recognizeDriverLicensereq)
	recognizeDriverLicensereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeDriverLicenseResp, _err := client.RecognizeDriverLicense(recognizeDriverLicensereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeDriverLicenseResp
	return _result, _err
}

func (client *Client) RecognizeAccountPage(request *RecognizeAccountPageRequest, runtime *util.RuntimeOptions) (_result *RecognizeAccountPageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeAccountPageResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeAccountPage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeAccountPageAdvance(request *RecognizeAccountPageAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeAccountPageResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeAccountPagereq := &RecognizeAccountPageRequest{}
	rpcutil.Convert(request, recognizeAccountPagereq)
	recognizeAccountPagereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeAccountPageResp, _err := client.RecognizeAccountPage(recognizeAccountPagereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeAccountPageResp
	return _result, _err
}

func (client *Client) RecognizeStamp(request *RecognizeStampRequest, runtime *util.RuntimeOptions) (_result *RecognizeStampResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeStampResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeStamp"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeStampAdvance(request *RecognizeStampAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeStampResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeStampreq := &RecognizeStampRequest{}
	rpcutil.Convert(request, recognizeStampreq)
	recognizeStampreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeStampResp, _err := client.RecognizeStamp(recognizeStampreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeStampResp
	return _result, _err
}

func (client *Client) RecognizeBusinessCard(request *RecognizeBusinessCardRequest, runtime *util.RuntimeOptions) (_result *RecognizeBusinessCardResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeBusinessCardResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeBusinessCard"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeBusinessCardAdvance(request *RecognizeBusinessCardAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeBusinessCardResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeBusinessCardreq := &RecognizeBusinessCardRequest{}
	rpcutil.Convert(request, recognizeBusinessCardreq)
	recognizeBusinessCardreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeBusinessCardResp, _err := client.RecognizeBusinessCard(recognizeBusinessCardreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeBusinessCardResp
	return _result, _err
}

func (client *Client) RecognizeVINCode(request *RecognizeVINCodeRequest, runtime *util.RuntimeOptions) (_result *RecognizeVINCodeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeVINCodeResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeVINCode"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVINCodeAdvance(request *RecognizeVINCodeAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVINCodeResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeVINCodereq := &RecognizeVINCodeRequest{}
	rpcutil.Convert(request, recognizeVINCodereq)
	recognizeVINCodereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeVINCodeResp, _err := client.RecognizeVINCode(recognizeVINCodereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeVINCodeResp
	return _result, _err
}

func (client *Client) RecognizeBusinessLicense(request *RecognizeBusinessLicenseRequest, runtime *util.RuntimeOptions) (_result *RecognizeBusinessLicenseResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeBusinessLicenseResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeBusinessLicense"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeBusinessLicenseAdvance(request *RecognizeBusinessLicenseAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeBusinessLicenseResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("ocr"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	recognizeBusinessLicensereq := &RecognizeBusinessLicenseRequest{}
	rpcutil.Convert(request, recognizeBusinessLicensereq)
	recognizeBusinessLicensereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeBusinessLicenseResp, _err := client.RecognizeBusinessLicense(recognizeBusinessLicensereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeBusinessLicenseResp
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
