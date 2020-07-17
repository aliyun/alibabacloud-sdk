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
	JobId        *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Result       *string `json:"Result,omitempty" xml:"Result,omitempty" require:"true"`
	ErrorCode    *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
}

func (s GetAsyncJobResultResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetAsyncJobResultResponseData) GoString() string {
	return s.String()
}

func (s *GetAsyncJobResultResponseData) SetJobId(v string) *GetAsyncJobResultResponseData {
	s.JobId = &v
	return s
}

func (s *GetAsyncJobResultResponseData) SetStatus(v string) *GetAsyncJobResultResponseData {
	s.Status = &v
	return s
}

func (s *GetAsyncJobResultResponseData) SetResult(v string) *GetAsyncJobResultResponseData {
	s.Result = &v
	return s
}

func (s *GetAsyncJobResultResponseData) SetErrorCode(v string) *GetAsyncJobResultResponseData {
	s.ErrorCode = &v
	return s
}

func (s *GetAsyncJobResultResponseData) SetErrorMessage(v string) *GetAsyncJobResultResponseData {
	s.ErrorMessage = &v
	return s
}

type ImitatePhotoStyleRequest struct {
	StyleUrl *string `json:"StyleUrl,omitempty" xml:"StyleUrl,omitempty" require:"true"`
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s ImitatePhotoStyleRequest) String() string {
	return tea.Prettify(s)
}

func (s ImitatePhotoStyleRequest) GoString() string {
	return s.String()
}

func (s *ImitatePhotoStyleRequest) SetStyleUrl(v string) *ImitatePhotoStyleRequest {
	s.StyleUrl = &v
	return s
}

func (s *ImitatePhotoStyleRequest) SetImageURL(v string) *ImitatePhotoStyleRequest {
	s.ImageURL = &v
	return s
}

type ImitatePhotoStyleResponse struct {
	RequestId *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ImitatePhotoStyleResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ImitatePhotoStyleResponse) String() string {
	return tea.Prettify(s)
}

func (s ImitatePhotoStyleResponse) GoString() string {
	return s.String()
}

func (s *ImitatePhotoStyleResponse) SetRequestId(v string) *ImitatePhotoStyleResponse {
	s.RequestId = &v
	return s
}

func (s *ImitatePhotoStyleResponse) SetData(v *ImitatePhotoStyleResponseData) *ImitatePhotoStyleResponse {
	s.Data = v
	return s
}

type ImitatePhotoStyleResponseData struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s ImitatePhotoStyleResponseData) String() string {
	return tea.Prettify(s)
}

func (s ImitatePhotoStyleResponseData) GoString() string {
	return s.String()
}

func (s *ImitatePhotoStyleResponseData) SetImageURL(v string) *ImitatePhotoStyleResponseData {
	s.ImageURL = &v
	return s
}

type ImitatePhotoStyleAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
	StyleUrl       *string   `json:"StyleUrl,omitempty" xml:"StyleUrl,omitempty" require:"true"`
}

func (s ImitatePhotoStyleAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s ImitatePhotoStyleAdvanceRequest) GoString() string {
	return s.String()
}

func (s *ImitatePhotoStyleAdvanceRequest) SetImageURLObject(v io.Reader) *ImitatePhotoStyleAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *ImitatePhotoStyleAdvanceRequest) SetStyleUrl(v string) *ImitatePhotoStyleAdvanceRequest {
	s.StyleUrl = &v
	return s
}

type EnhanceImageColorRequest struct {
	ImageURL     *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	OutputFormat *string `json:"OutputFormat,omitempty" xml:"OutputFormat,omitempty" require:"true"`
	Mode         *string `json:"Mode,omitempty" xml:"Mode,omitempty" require:"true"`
}

func (s EnhanceImageColorRequest) String() string {
	return tea.Prettify(s)
}

func (s EnhanceImageColorRequest) GoString() string {
	return s.String()
}

func (s *EnhanceImageColorRequest) SetImageURL(v string) *EnhanceImageColorRequest {
	s.ImageURL = &v
	return s
}

func (s *EnhanceImageColorRequest) SetOutputFormat(v string) *EnhanceImageColorRequest {
	s.OutputFormat = &v
	return s
}

func (s *EnhanceImageColorRequest) SetMode(v string) *EnhanceImageColorRequest {
	s.Mode = &v
	return s
}

type EnhanceImageColorResponse struct {
	RequestId *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *EnhanceImageColorResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s EnhanceImageColorResponse) String() string {
	return tea.Prettify(s)
}

func (s EnhanceImageColorResponse) GoString() string {
	return s.String()
}

func (s *EnhanceImageColorResponse) SetRequestId(v string) *EnhanceImageColorResponse {
	s.RequestId = &v
	return s
}

func (s *EnhanceImageColorResponse) SetData(v *EnhanceImageColorResponseData) *EnhanceImageColorResponse {
	s.Data = v
	return s
}

type EnhanceImageColorResponseData struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s EnhanceImageColorResponseData) String() string {
	return tea.Prettify(s)
}

func (s EnhanceImageColorResponseData) GoString() string {
	return s.String()
}

func (s *EnhanceImageColorResponseData) SetImageURL(v string) *EnhanceImageColorResponseData {
	s.ImageURL = &v
	return s
}

type EnhanceImageColorAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
	OutputFormat   *string   `json:"OutputFormat,omitempty" xml:"OutputFormat,omitempty" require:"true"`
	Mode           *string   `json:"Mode,omitempty" xml:"Mode,omitempty" require:"true"`
}

func (s EnhanceImageColorAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s EnhanceImageColorAdvanceRequest) GoString() string {
	return s.String()
}

func (s *EnhanceImageColorAdvanceRequest) SetImageURLObject(v io.Reader) *EnhanceImageColorAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *EnhanceImageColorAdvanceRequest) SetOutputFormat(v string) *EnhanceImageColorAdvanceRequest {
	s.OutputFormat = &v
	return s
}

func (s *EnhanceImageColorAdvanceRequest) SetMode(v string) *EnhanceImageColorAdvanceRequest {
	s.Mode = &v
	return s
}

type RecolorHDImageRequest struct {
	Url           *string                               `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
	Mode          *string                               `json:"Mode,omitempty" xml:"Mode,omitempty"`
	RefUrl        *string                               `json:"RefUrl,omitempty" xml:"RefUrl,omitempty"`
	ColorCount    *int                                  `json:"ColorCount,omitempty" xml:"ColorCount,omitempty"`
	ColorTemplate []*RecolorHDImageRequestColorTemplate `json:"ColorTemplate,omitempty" xml:"ColorTemplate,omitempty" type:"Repeated"`
	Degree        *string                               `json:"Degree,omitempty" xml:"Degree,omitempty" require:"true"`
}

func (s RecolorHDImageRequest) String() string {
	return tea.Prettify(s)
}

func (s RecolorHDImageRequest) GoString() string {
	return s.String()
}

func (s *RecolorHDImageRequest) SetUrl(v string) *RecolorHDImageRequest {
	s.Url = &v
	return s
}

func (s *RecolorHDImageRequest) SetMode(v string) *RecolorHDImageRequest {
	s.Mode = &v
	return s
}

func (s *RecolorHDImageRequest) SetRefUrl(v string) *RecolorHDImageRequest {
	s.RefUrl = &v
	return s
}

func (s *RecolorHDImageRequest) SetColorCount(v int) *RecolorHDImageRequest {
	s.ColorCount = &v
	return s
}

func (s *RecolorHDImageRequest) SetColorTemplate(v []*RecolorHDImageRequestColorTemplate) *RecolorHDImageRequest {
	s.ColorTemplate = v
	return s
}

func (s *RecolorHDImageRequest) SetDegree(v string) *RecolorHDImageRequest {
	s.Degree = &v
	return s
}

type RecolorHDImageRequestColorTemplate struct {
	Color *string `json:"Color,omitempty" xml:"Color,omitempty"`
}

func (s RecolorHDImageRequestColorTemplate) String() string {
	return tea.Prettify(s)
}

func (s RecolorHDImageRequestColorTemplate) GoString() string {
	return s.String()
}

func (s *RecolorHDImageRequestColorTemplate) SetColor(v string) *RecolorHDImageRequestColorTemplate {
	s.Color = &v
	return s
}

type RecolorHDImageResponse struct {
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecolorHDImageResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecolorHDImageResponse) String() string {
	return tea.Prettify(s)
}

func (s RecolorHDImageResponse) GoString() string {
	return s.String()
}

func (s *RecolorHDImageResponse) SetRequestId(v string) *RecolorHDImageResponse {
	s.RequestId = &v
	return s
}

func (s *RecolorHDImageResponse) SetData(v *RecolorHDImageResponseData) *RecolorHDImageResponse {
	s.Data = v
	return s
}

type RecolorHDImageResponseData struct {
	ImageList []*string `json:"ImageList,omitempty" xml:"ImageList,omitempty" require:"true" type:"Repeated"`
}

func (s RecolorHDImageResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecolorHDImageResponseData) GoString() string {
	return s.String()
}

func (s *RecolorHDImageResponseData) SetImageList(v []*string) *RecolorHDImageResponseData {
	s.ImageList = v
	return s
}

type RecolorHDImageAdvanceRequest struct {
	UrlObject     io.Reader                                    `json:"UrlObject,omitempty" xml:"UrlObject,omitempty" require:"true"`
	Mode          *string                                      `json:"Mode,omitempty" xml:"Mode,omitempty"`
	RefUrl        *string                                      `json:"RefUrl,omitempty" xml:"RefUrl,omitempty"`
	ColorCount    *int                                         `json:"ColorCount,omitempty" xml:"ColorCount,omitempty"`
	ColorTemplate []*RecolorHDImageAdvanceRequestColorTemplate `json:"ColorTemplate,omitempty" xml:"ColorTemplate,omitempty" type:"Repeated"`
	Degree        *string                                      `json:"Degree,omitempty" xml:"Degree,omitempty" require:"true"`
}

func (s RecolorHDImageAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecolorHDImageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecolorHDImageAdvanceRequest) SetUrlObject(v io.Reader) *RecolorHDImageAdvanceRequest {
	s.UrlObject = v
	return s
}

func (s *RecolorHDImageAdvanceRequest) SetMode(v string) *RecolorHDImageAdvanceRequest {
	s.Mode = &v
	return s
}

func (s *RecolorHDImageAdvanceRequest) SetRefUrl(v string) *RecolorHDImageAdvanceRequest {
	s.RefUrl = &v
	return s
}

func (s *RecolorHDImageAdvanceRequest) SetColorCount(v int) *RecolorHDImageAdvanceRequest {
	s.ColorCount = &v
	return s
}

func (s *RecolorHDImageAdvanceRequest) SetColorTemplate(v []*RecolorHDImageAdvanceRequestColorTemplate) *RecolorHDImageAdvanceRequest {
	s.ColorTemplate = v
	return s
}

func (s *RecolorHDImageAdvanceRequest) SetDegree(v string) *RecolorHDImageAdvanceRequest {
	s.Degree = &v
	return s
}

type RecolorHDImageAdvanceRequestColorTemplate struct {
	Color *string `json:"Color,omitempty" xml:"Color,omitempty"`
}

func (s RecolorHDImageAdvanceRequestColorTemplate) String() string {
	return tea.Prettify(s)
}

func (s RecolorHDImageAdvanceRequestColorTemplate) GoString() string {
	return s.String()
}

func (s *RecolorHDImageAdvanceRequestColorTemplate) SetColor(v string) *RecolorHDImageAdvanceRequestColorTemplate {
	s.Color = &v
	return s
}

type AssessCompositionRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s AssessCompositionRequest) String() string {
	return tea.Prettify(s)
}

func (s AssessCompositionRequest) GoString() string {
	return s.String()
}

func (s *AssessCompositionRequest) SetImageURL(v string) *AssessCompositionRequest {
	s.ImageURL = &v
	return s
}

type AssessCompositionResponse struct {
	RequestId *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *AssessCompositionResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s AssessCompositionResponse) String() string {
	return tea.Prettify(s)
}

func (s AssessCompositionResponse) GoString() string {
	return s.String()
}

func (s *AssessCompositionResponse) SetRequestId(v string) *AssessCompositionResponse {
	s.RequestId = &v
	return s
}

func (s *AssessCompositionResponse) SetData(v *AssessCompositionResponseData) *AssessCompositionResponse {
	s.Data = v
	return s
}

type AssessCompositionResponseData struct {
	Score *float32 `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
}

func (s AssessCompositionResponseData) String() string {
	return tea.Prettify(s)
}

func (s AssessCompositionResponseData) GoString() string {
	return s.String()
}

func (s *AssessCompositionResponseData) SetScore(v float32) *AssessCompositionResponseData {
	s.Score = &v
	return s
}

type AssessCompositionAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s AssessCompositionAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s AssessCompositionAdvanceRequest) GoString() string {
	return s.String()
}

func (s *AssessCompositionAdvanceRequest) SetImageURLObject(v io.Reader) *AssessCompositionAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type AssessSharpnessRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s AssessSharpnessRequest) String() string {
	return tea.Prettify(s)
}

func (s AssessSharpnessRequest) GoString() string {
	return s.String()
}

func (s *AssessSharpnessRequest) SetImageURL(v string) *AssessSharpnessRequest {
	s.ImageURL = &v
	return s
}

type AssessSharpnessResponse struct {
	RequestId *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *AssessSharpnessResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s AssessSharpnessResponse) String() string {
	return tea.Prettify(s)
}

func (s AssessSharpnessResponse) GoString() string {
	return s.String()
}

func (s *AssessSharpnessResponse) SetRequestId(v string) *AssessSharpnessResponse {
	s.RequestId = &v
	return s
}

func (s *AssessSharpnessResponse) SetData(v *AssessSharpnessResponseData) *AssessSharpnessResponse {
	s.Data = v
	return s
}

type AssessSharpnessResponseData struct {
	Sharpness *float32 `json:"Sharpness,omitempty" xml:"Sharpness,omitempty" require:"true"`
}

func (s AssessSharpnessResponseData) String() string {
	return tea.Prettify(s)
}

func (s AssessSharpnessResponseData) GoString() string {
	return s.String()
}

func (s *AssessSharpnessResponseData) SetSharpness(v float32) *AssessSharpnessResponseData {
	s.Sharpness = &v
	return s
}

type AssessSharpnessAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s AssessSharpnessAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s AssessSharpnessAdvanceRequest) GoString() string {
	return s.String()
}

func (s *AssessSharpnessAdvanceRequest) SetImageURLObject(v io.Reader) *AssessSharpnessAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type AssessExposureRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s AssessExposureRequest) String() string {
	return tea.Prettify(s)
}

func (s AssessExposureRequest) GoString() string {
	return s.String()
}

func (s *AssessExposureRequest) SetImageURL(v string) *AssessExposureRequest {
	s.ImageURL = &v
	return s
}

type AssessExposureResponse struct {
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *AssessExposureResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s AssessExposureResponse) String() string {
	return tea.Prettify(s)
}

func (s AssessExposureResponse) GoString() string {
	return s.String()
}

func (s *AssessExposureResponse) SetRequestId(v string) *AssessExposureResponse {
	s.RequestId = &v
	return s
}

func (s *AssessExposureResponse) SetData(v *AssessExposureResponseData) *AssessExposureResponse {
	s.Data = v
	return s
}

type AssessExposureResponseData struct {
	Exposure *float32 `json:"Exposure,omitempty" xml:"Exposure,omitempty" require:"true"`
}

func (s AssessExposureResponseData) String() string {
	return tea.Prettify(s)
}

func (s AssessExposureResponseData) GoString() string {
	return s.String()
}

func (s *AssessExposureResponseData) SetExposure(v float32) *AssessExposureResponseData {
	s.Exposure = &v
	return s
}

type AssessExposureAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s AssessExposureAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s AssessExposureAdvanceRequest) GoString() string {
	return s.String()
}

func (s *AssessExposureAdvanceRequest) SetImageURLObject(v io.Reader) *AssessExposureAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type ImageBlindCharacterWatermarkRequest struct {
	FunctionType      *string `json:"FunctionType,omitempty" xml:"FunctionType,omitempty" require:"true"`
	Text              *string `json:"Text,omitempty" xml:"Text,omitempty"`
	WatermarkImageURL *string `json:"WatermarkImageURL,omitempty" xml:"WatermarkImageURL,omitempty"`
	OutputFileType    *string `json:"OutputFileType,omitempty" xml:"OutputFileType,omitempty"`
	QualityFactor     *int    `json:"QualityFactor,omitempty" xml:"QualityFactor,omitempty" require:"true"`
	OriginImageURL    *string `json:"OriginImageURL,omitempty" xml:"OriginImageURL,omitempty" require:"true"`
}

func (s ImageBlindCharacterWatermarkRequest) String() string {
	return tea.Prettify(s)
}

func (s ImageBlindCharacterWatermarkRequest) GoString() string {
	return s.String()
}

func (s *ImageBlindCharacterWatermarkRequest) SetFunctionType(v string) *ImageBlindCharacterWatermarkRequest {
	s.FunctionType = &v
	return s
}

func (s *ImageBlindCharacterWatermarkRequest) SetText(v string) *ImageBlindCharacterWatermarkRequest {
	s.Text = &v
	return s
}

func (s *ImageBlindCharacterWatermarkRequest) SetWatermarkImageURL(v string) *ImageBlindCharacterWatermarkRequest {
	s.WatermarkImageURL = &v
	return s
}

func (s *ImageBlindCharacterWatermarkRequest) SetOutputFileType(v string) *ImageBlindCharacterWatermarkRequest {
	s.OutputFileType = &v
	return s
}

func (s *ImageBlindCharacterWatermarkRequest) SetQualityFactor(v int) *ImageBlindCharacterWatermarkRequest {
	s.QualityFactor = &v
	return s
}

func (s *ImageBlindCharacterWatermarkRequest) SetOriginImageURL(v string) *ImageBlindCharacterWatermarkRequest {
	s.OriginImageURL = &v
	return s
}

type ImageBlindCharacterWatermarkResponse struct {
	RequestId *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ImageBlindCharacterWatermarkResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ImageBlindCharacterWatermarkResponse) String() string {
	return tea.Prettify(s)
}

func (s ImageBlindCharacterWatermarkResponse) GoString() string {
	return s.String()
}

func (s *ImageBlindCharacterWatermarkResponse) SetRequestId(v string) *ImageBlindCharacterWatermarkResponse {
	s.RequestId = &v
	return s
}

func (s *ImageBlindCharacterWatermarkResponse) SetData(v *ImageBlindCharacterWatermarkResponseData) *ImageBlindCharacterWatermarkResponse {
	s.Data = v
	return s
}

type ImageBlindCharacterWatermarkResponseData struct {
	WatermarkImageURL *string `json:"WatermarkImageURL,omitempty" xml:"WatermarkImageURL,omitempty" require:"true"`
	TextImageURL      *string `json:"TextImageURL,omitempty" xml:"TextImageURL,omitempty" require:"true"`
}

func (s ImageBlindCharacterWatermarkResponseData) String() string {
	return tea.Prettify(s)
}

func (s ImageBlindCharacterWatermarkResponseData) GoString() string {
	return s.String()
}

func (s *ImageBlindCharacterWatermarkResponseData) SetWatermarkImageURL(v string) *ImageBlindCharacterWatermarkResponseData {
	s.WatermarkImageURL = &v
	return s
}

func (s *ImageBlindCharacterWatermarkResponseData) SetTextImageURL(v string) *ImageBlindCharacterWatermarkResponseData {
	s.TextImageURL = &v
	return s
}

type ImageBlindCharacterWatermarkAdvanceRequest struct {
	OriginImageURLObject io.Reader `json:"OriginImageURLObject,omitempty" xml:"OriginImageURLObject,omitempty" require:"true"`
	FunctionType         *string   `json:"FunctionType,omitempty" xml:"FunctionType,omitempty" require:"true"`
	Text                 *string   `json:"Text,omitempty" xml:"Text,omitempty"`
	WatermarkImageURL    *string   `json:"WatermarkImageURL,omitempty" xml:"WatermarkImageURL,omitempty"`
	OutputFileType       *string   `json:"OutputFileType,omitempty" xml:"OutputFileType,omitempty"`
	QualityFactor        *int      `json:"QualityFactor,omitempty" xml:"QualityFactor,omitempty" require:"true"`
}

func (s ImageBlindCharacterWatermarkAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s ImageBlindCharacterWatermarkAdvanceRequest) GoString() string {
	return s.String()
}

func (s *ImageBlindCharacterWatermarkAdvanceRequest) SetOriginImageURLObject(v io.Reader) *ImageBlindCharacterWatermarkAdvanceRequest {
	s.OriginImageURLObject = v
	return s
}

func (s *ImageBlindCharacterWatermarkAdvanceRequest) SetFunctionType(v string) *ImageBlindCharacterWatermarkAdvanceRequest {
	s.FunctionType = &v
	return s
}

func (s *ImageBlindCharacterWatermarkAdvanceRequest) SetText(v string) *ImageBlindCharacterWatermarkAdvanceRequest {
	s.Text = &v
	return s
}

func (s *ImageBlindCharacterWatermarkAdvanceRequest) SetWatermarkImageURL(v string) *ImageBlindCharacterWatermarkAdvanceRequest {
	s.WatermarkImageURL = &v
	return s
}

func (s *ImageBlindCharacterWatermarkAdvanceRequest) SetOutputFileType(v string) *ImageBlindCharacterWatermarkAdvanceRequest {
	s.OutputFileType = &v
	return s
}

func (s *ImageBlindCharacterWatermarkAdvanceRequest) SetQualityFactor(v int) *ImageBlindCharacterWatermarkAdvanceRequest {
	s.QualityFactor = &v
	return s
}

type RemoveImageSubtitlesRequest struct {
	ImageURL *string  `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	BX       *float32 `json:"BX,omitempty" xml:"BX,omitempty"`
	BY       *float32 `json:"BY,omitempty" xml:"BY,omitempty"`
	BW       *float32 `json:"BW,omitempty" xml:"BW,omitempty"`
	BH       *float32 `json:"BH,omitempty" xml:"BH,omitempty"`
}

func (s RemoveImageSubtitlesRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveImageSubtitlesRequest) GoString() string {
	return s.String()
}

func (s *RemoveImageSubtitlesRequest) SetImageURL(v string) *RemoveImageSubtitlesRequest {
	s.ImageURL = &v
	return s
}

func (s *RemoveImageSubtitlesRequest) SetBX(v float32) *RemoveImageSubtitlesRequest {
	s.BX = &v
	return s
}

func (s *RemoveImageSubtitlesRequest) SetBY(v float32) *RemoveImageSubtitlesRequest {
	s.BY = &v
	return s
}

func (s *RemoveImageSubtitlesRequest) SetBW(v float32) *RemoveImageSubtitlesRequest {
	s.BW = &v
	return s
}

func (s *RemoveImageSubtitlesRequest) SetBH(v float32) *RemoveImageSubtitlesRequest {
	s.BH = &v
	return s
}

type RemoveImageSubtitlesResponse struct {
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RemoveImageSubtitlesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RemoveImageSubtitlesResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveImageSubtitlesResponse) GoString() string {
	return s.String()
}

func (s *RemoveImageSubtitlesResponse) SetRequestId(v string) *RemoveImageSubtitlesResponse {
	s.RequestId = &v
	return s
}

func (s *RemoveImageSubtitlesResponse) SetData(v *RemoveImageSubtitlesResponseData) *RemoveImageSubtitlesResponse {
	s.Data = v
	return s
}

type RemoveImageSubtitlesResponseData struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s RemoveImageSubtitlesResponseData) String() string {
	return tea.Prettify(s)
}

func (s RemoveImageSubtitlesResponseData) GoString() string {
	return s.String()
}

func (s *RemoveImageSubtitlesResponseData) SetImageURL(v string) *RemoveImageSubtitlesResponseData {
	s.ImageURL = &v
	return s
}

type RemoveImageSubtitlesAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
	BX             *float32  `json:"BX,omitempty" xml:"BX,omitempty"`
	BY             *float32  `json:"BY,omitempty" xml:"BY,omitempty"`
	BW             *float32  `json:"BW,omitempty" xml:"BW,omitempty"`
	BH             *float32  `json:"BH,omitempty" xml:"BH,omitempty"`
}

func (s RemoveImageSubtitlesAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveImageSubtitlesAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RemoveImageSubtitlesAdvanceRequest) SetImageURLObject(v io.Reader) *RemoveImageSubtitlesAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RemoveImageSubtitlesAdvanceRequest) SetBX(v float32) *RemoveImageSubtitlesAdvanceRequest {
	s.BX = &v
	return s
}

func (s *RemoveImageSubtitlesAdvanceRequest) SetBY(v float32) *RemoveImageSubtitlesAdvanceRequest {
	s.BY = &v
	return s
}

func (s *RemoveImageSubtitlesAdvanceRequest) SetBW(v float32) *RemoveImageSubtitlesAdvanceRequest {
	s.BW = &v
	return s
}

func (s *RemoveImageSubtitlesAdvanceRequest) SetBH(v float32) *RemoveImageSubtitlesAdvanceRequest {
	s.BH = &v
	return s
}

type RemoveImageWatermarkRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s RemoveImageWatermarkRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveImageWatermarkRequest) GoString() string {
	return s.String()
}

func (s *RemoveImageWatermarkRequest) SetImageURL(v string) *RemoveImageWatermarkRequest {
	s.ImageURL = &v
	return s
}

type RemoveImageWatermarkResponse struct {
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RemoveImageWatermarkResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RemoveImageWatermarkResponse) String() string {
	return tea.Prettify(s)
}

func (s RemoveImageWatermarkResponse) GoString() string {
	return s.String()
}

func (s *RemoveImageWatermarkResponse) SetRequestId(v string) *RemoveImageWatermarkResponse {
	s.RequestId = &v
	return s
}

func (s *RemoveImageWatermarkResponse) SetData(v *RemoveImageWatermarkResponseData) *RemoveImageWatermarkResponse {
	s.Data = v
	return s
}

type RemoveImageWatermarkResponseData struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s RemoveImageWatermarkResponseData) String() string {
	return tea.Prettify(s)
}

func (s RemoveImageWatermarkResponseData) GoString() string {
	return s.String()
}

func (s *RemoveImageWatermarkResponseData) SetImageURL(v string) *RemoveImageWatermarkResponseData {
	s.ImageURL = &v
	return s
}

type RemoveImageWatermarkAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s RemoveImageWatermarkAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RemoveImageWatermarkAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RemoveImageWatermarkAdvanceRequest) SetImageURLObject(v io.Reader) *RemoveImageWatermarkAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type ImageBlindPicWatermarkRequest struct {
	FunctionType      *string `json:"FunctionType,omitempty" xml:"FunctionType,omitempty" require:"true"`
	LogoURL           *string `json:"LogoURL,omitempty" xml:"LogoURL,omitempty"`
	WatermarkImageURL *string `json:"WatermarkImageURL,omitempty" xml:"WatermarkImageURL,omitempty"`
	OutputFileType    *string `json:"OutputFileType,omitempty" xml:"OutputFileType,omitempty"`
	QualityFactor     *int    `json:"QualityFactor,omitempty" xml:"QualityFactor,omitempty" require:"true"`
	OriginImageURL    *string `json:"OriginImageURL,omitempty" xml:"OriginImageURL,omitempty" require:"true"`
}

func (s ImageBlindPicWatermarkRequest) String() string {
	return tea.Prettify(s)
}

func (s ImageBlindPicWatermarkRequest) GoString() string {
	return s.String()
}

func (s *ImageBlindPicWatermarkRequest) SetFunctionType(v string) *ImageBlindPicWatermarkRequest {
	s.FunctionType = &v
	return s
}

func (s *ImageBlindPicWatermarkRequest) SetLogoURL(v string) *ImageBlindPicWatermarkRequest {
	s.LogoURL = &v
	return s
}

func (s *ImageBlindPicWatermarkRequest) SetWatermarkImageURL(v string) *ImageBlindPicWatermarkRequest {
	s.WatermarkImageURL = &v
	return s
}

func (s *ImageBlindPicWatermarkRequest) SetOutputFileType(v string) *ImageBlindPicWatermarkRequest {
	s.OutputFileType = &v
	return s
}

func (s *ImageBlindPicWatermarkRequest) SetQualityFactor(v int) *ImageBlindPicWatermarkRequest {
	s.QualityFactor = &v
	return s
}

func (s *ImageBlindPicWatermarkRequest) SetOriginImageURL(v string) *ImageBlindPicWatermarkRequest {
	s.OriginImageURL = &v
	return s
}

type ImageBlindPicWatermarkResponse struct {
	RequestId *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ImageBlindPicWatermarkResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ImageBlindPicWatermarkResponse) String() string {
	return tea.Prettify(s)
}

func (s ImageBlindPicWatermarkResponse) GoString() string {
	return s.String()
}

func (s *ImageBlindPicWatermarkResponse) SetRequestId(v string) *ImageBlindPicWatermarkResponse {
	s.RequestId = &v
	return s
}

func (s *ImageBlindPicWatermarkResponse) SetData(v *ImageBlindPicWatermarkResponseData) *ImageBlindPicWatermarkResponse {
	s.Data = v
	return s
}

type ImageBlindPicWatermarkResponseData struct {
	WatermarkImageURL *string `json:"WatermarkImageURL,omitempty" xml:"WatermarkImageURL,omitempty" require:"true"`
	LogoURL           *string `json:"LogoURL,omitempty" xml:"LogoURL,omitempty" require:"true"`
}

func (s ImageBlindPicWatermarkResponseData) String() string {
	return tea.Prettify(s)
}

func (s ImageBlindPicWatermarkResponseData) GoString() string {
	return s.String()
}

func (s *ImageBlindPicWatermarkResponseData) SetWatermarkImageURL(v string) *ImageBlindPicWatermarkResponseData {
	s.WatermarkImageURL = &v
	return s
}

func (s *ImageBlindPicWatermarkResponseData) SetLogoURL(v string) *ImageBlindPicWatermarkResponseData {
	s.LogoURL = &v
	return s
}

type ImageBlindPicWatermarkAdvanceRequest struct {
	OriginImageURLObject io.Reader `json:"OriginImageURLObject,omitempty" xml:"OriginImageURLObject,omitempty" require:"true"`
	FunctionType         *string   `json:"FunctionType,omitempty" xml:"FunctionType,omitempty" require:"true"`
	LogoURL              *string   `json:"LogoURL,omitempty" xml:"LogoURL,omitempty"`
	WatermarkImageURL    *string   `json:"WatermarkImageURL,omitempty" xml:"WatermarkImageURL,omitempty"`
	OutputFileType       *string   `json:"OutputFileType,omitempty" xml:"OutputFileType,omitempty"`
	QualityFactor        *int      `json:"QualityFactor,omitempty" xml:"QualityFactor,omitempty" require:"true"`
}

func (s ImageBlindPicWatermarkAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s ImageBlindPicWatermarkAdvanceRequest) GoString() string {
	return s.String()
}

func (s *ImageBlindPicWatermarkAdvanceRequest) SetOriginImageURLObject(v io.Reader) *ImageBlindPicWatermarkAdvanceRequest {
	s.OriginImageURLObject = v
	return s
}

func (s *ImageBlindPicWatermarkAdvanceRequest) SetFunctionType(v string) *ImageBlindPicWatermarkAdvanceRequest {
	s.FunctionType = &v
	return s
}

func (s *ImageBlindPicWatermarkAdvanceRequest) SetLogoURL(v string) *ImageBlindPicWatermarkAdvanceRequest {
	s.LogoURL = &v
	return s
}

func (s *ImageBlindPicWatermarkAdvanceRequest) SetWatermarkImageURL(v string) *ImageBlindPicWatermarkAdvanceRequest {
	s.WatermarkImageURL = &v
	return s
}

func (s *ImageBlindPicWatermarkAdvanceRequest) SetOutputFileType(v string) *ImageBlindPicWatermarkAdvanceRequest {
	s.OutputFileType = &v
	return s
}

func (s *ImageBlindPicWatermarkAdvanceRequest) SetQualityFactor(v int) *ImageBlindPicWatermarkAdvanceRequest {
	s.QualityFactor = &v
	return s
}

type IntelligentCompositionRequest struct {
	NumBoxes *int    `json:"NumBoxes,omitempty" xml:"NumBoxes,omitempty"`
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s IntelligentCompositionRequest) String() string {
	return tea.Prettify(s)
}

func (s IntelligentCompositionRequest) GoString() string {
	return s.String()
}

func (s *IntelligentCompositionRequest) SetNumBoxes(v int) *IntelligentCompositionRequest {
	s.NumBoxes = &v
	return s
}

func (s *IntelligentCompositionRequest) SetImageURL(v string) *IntelligentCompositionRequest {
	s.ImageURL = &v
	return s
}

type IntelligentCompositionResponse struct {
	RequestId *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *IntelligentCompositionResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s IntelligentCompositionResponse) String() string {
	return tea.Prettify(s)
}

func (s IntelligentCompositionResponse) GoString() string {
	return s.String()
}

func (s *IntelligentCompositionResponse) SetRequestId(v string) *IntelligentCompositionResponse {
	s.RequestId = &v
	return s
}

func (s *IntelligentCompositionResponse) SetData(v *IntelligentCompositionResponseData) *IntelligentCompositionResponse {
	s.Data = v
	return s
}

type IntelligentCompositionResponseData struct {
	Elements []*IntelligentCompositionResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s IntelligentCompositionResponseData) String() string {
	return tea.Prettify(s)
}

func (s IntelligentCompositionResponseData) GoString() string {
	return s.String()
}

func (s *IntelligentCompositionResponseData) SetElements(v []*IntelligentCompositionResponseDataElements) *IntelligentCompositionResponseData {
	s.Elements = v
	return s
}

type IntelligentCompositionResponseDataElements struct {
	MinX  *int     `json:"MinX,omitempty" xml:"MinX,omitempty" require:"true"`
	MinY  *int     `json:"MinY,omitempty" xml:"MinY,omitempty" require:"true"`
	MaxX  *int     `json:"MaxX,omitempty" xml:"MaxX,omitempty" require:"true"`
	MaxY  *int     `json:"MaxY,omitempty" xml:"MaxY,omitempty" require:"true"`
	Score *float32 `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
}

func (s IntelligentCompositionResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s IntelligentCompositionResponseDataElements) GoString() string {
	return s.String()
}

func (s *IntelligentCompositionResponseDataElements) SetMinX(v int) *IntelligentCompositionResponseDataElements {
	s.MinX = &v
	return s
}

func (s *IntelligentCompositionResponseDataElements) SetMinY(v int) *IntelligentCompositionResponseDataElements {
	s.MinY = &v
	return s
}

func (s *IntelligentCompositionResponseDataElements) SetMaxX(v int) *IntelligentCompositionResponseDataElements {
	s.MaxX = &v
	return s
}

func (s *IntelligentCompositionResponseDataElements) SetMaxY(v int) *IntelligentCompositionResponseDataElements {
	s.MaxY = &v
	return s
}

func (s *IntelligentCompositionResponseDataElements) SetScore(v float32) *IntelligentCompositionResponseDataElements {
	s.Score = &v
	return s
}

type IntelligentCompositionAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
	NumBoxes       *int      `json:"NumBoxes,omitempty" xml:"NumBoxes,omitempty"`
}

func (s IntelligentCompositionAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s IntelligentCompositionAdvanceRequest) GoString() string {
	return s.String()
}

func (s *IntelligentCompositionAdvanceRequest) SetImageURLObject(v io.Reader) *IntelligentCompositionAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *IntelligentCompositionAdvanceRequest) SetNumBoxes(v int) *IntelligentCompositionAdvanceRequest {
	s.NumBoxes = &v
	return s
}

type ChangeImageSizeRequest struct {
	Width  *int    `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height *int    `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Url    *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s ChangeImageSizeRequest) String() string {
	return tea.Prettify(s)
}

func (s ChangeImageSizeRequest) GoString() string {
	return s.String()
}

func (s *ChangeImageSizeRequest) SetWidth(v int) *ChangeImageSizeRequest {
	s.Width = &v
	return s
}

func (s *ChangeImageSizeRequest) SetHeight(v int) *ChangeImageSizeRequest {
	s.Height = &v
	return s
}

func (s *ChangeImageSizeRequest) SetUrl(v string) *ChangeImageSizeRequest {
	s.Url = &v
	return s
}

type ChangeImageSizeResponse struct {
	RequestId *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ChangeImageSizeResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ChangeImageSizeResponse) String() string {
	return tea.Prettify(s)
}

func (s ChangeImageSizeResponse) GoString() string {
	return s.String()
}

func (s *ChangeImageSizeResponse) SetRequestId(v string) *ChangeImageSizeResponse {
	s.RequestId = &v
	return s
}

func (s *ChangeImageSizeResponse) SetData(v *ChangeImageSizeResponseData) *ChangeImageSizeResponse {
	s.Data = v
	return s
}

type ChangeImageSizeResponseData struct {
	Url            *string                                    `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
	RetainLocation *ChangeImageSizeResponseDataRetainLocation `json:"RetainLocation,omitempty" xml:"RetainLocation,omitempty" require:"true" type:"Struct"`
}

func (s ChangeImageSizeResponseData) String() string {
	return tea.Prettify(s)
}

func (s ChangeImageSizeResponseData) GoString() string {
	return s.String()
}

func (s *ChangeImageSizeResponseData) SetUrl(v string) *ChangeImageSizeResponseData {
	s.Url = &v
	return s
}

func (s *ChangeImageSizeResponseData) SetRetainLocation(v *ChangeImageSizeResponseDataRetainLocation) *ChangeImageSizeResponseData {
	s.RetainLocation = v
	return s
}

type ChangeImageSizeResponseDataRetainLocation struct {
	X      *int `json:"X,omitempty" xml:"X,omitempty" require:"true"`
	Y      *int `json:"Y,omitempty" xml:"Y,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
}

func (s ChangeImageSizeResponseDataRetainLocation) String() string {
	return tea.Prettify(s)
}

func (s ChangeImageSizeResponseDataRetainLocation) GoString() string {
	return s.String()
}

func (s *ChangeImageSizeResponseDataRetainLocation) SetX(v int) *ChangeImageSizeResponseDataRetainLocation {
	s.X = &v
	return s
}

func (s *ChangeImageSizeResponseDataRetainLocation) SetY(v int) *ChangeImageSizeResponseDataRetainLocation {
	s.Y = &v
	return s
}

func (s *ChangeImageSizeResponseDataRetainLocation) SetWidth(v int) *ChangeImageSizeResponseDataRetainLocation {
	s.Width = &v
	return s
}

func (s *ChangeImageSizeResponseDataRetainLocation) SetHeight(v int) *ChangeImageSizeResponseDataRetainLocation {
	s.Height = &v
	return s
}

type ChangeImageSizeAdvanceRequest struct {
	UrlObject io.Reader `json:"UrlObject,omitempty" xml:"UrlObject,omitempty" require:"true"`
	Width     *int      `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height    *int      `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
}

func (s ChangeImageSizeAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s ChangeImageSizeAdvanceRequest) GoString() string {
	return s.String()
}

func (s *ChangeImageSizeAdvanceRequest) SetUrlObject(v io.Reader) *ChangeImageSizeAdvanceRequest {
	s.UrlObject = v
	return s
}

func (s *ChangeImageSizeAdvanceRequest) SetWidth(v int) *ChangeImageSizeAdvanceRequest {
	s.Width = &v
	return s
}

func (s *ChangeImageSizeAdvanceRequest) SetHeight(v int) *ChangeImageSizeAdvanceRequest {
	s.Height = &v
	return s
}

type ExtendImageStyleRequest struct {
	StyleUrl *string `json:"StyleUrl,omitempty" xml:"StyleUrl,omitempty" require:"true"`
	MajorUrl *string `json:"MajorUrl,omitempty" xml:"MajorUrl,omitempty" require:"true"`
}

func (s ExtendImageStyleRequest) String() string {
	return tea.Prettify(s)
}

func (s ExtendImageStyleRequest) GoString() string {
	return s.String()
}

func (s *ExtendImageStyleRequest) SetStyleUrl(v string) *ExtendImageStyleRequest {
	s.StyleUrl = &v
	return s
}

func (s *ExtendImageStyleRequest) SetMajorUrl(v string) *ExtendImageStyleRequest {
	s.MajorUrl = &v
	return s
}

type ExtendImageStyleResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ExtendImageStyleResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ExtendImageStyleResponse) String() string {
	return tea.Prettify(s)
}

func (s ExtendImageStyleResponse) GoString() string {
	return s.String()
}

func (s *ExtendImageStyleResponse) SetRequestId(v string) *ExtendImageStyleResponse {
	s.RequestId = &v
	return s
}

func (s *ExtendImageStyleResponse) SetData(v *ExtendImageStyleResponseData) *ExtendImageStyleResponse {
	s.Data = v
	return s
}

type ExtendImageStyleResponseData struct {
	Url      *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
	MajorUrl *string `json:"MajorUrl,omitempty" xml:"MajorUrl,omitempty" require:"true"`
}

func (s ExtendImageStyleResponseData) String() string {
	return tea.Prettify(s)
}

func (s ExtendImageStyleResponseData) GoString() string {
	return s.String()
}

func (s *ExtendImageStyleResponseData) SetUrl(v string) *ExtendImageStyleResponseData {
	s.Url = &v
	return s
}

func (s *ExtendImageStyleResponseData) SetMajorUrl(v string) *ExtendImageStyleResponseData {
	s.MajorUrl = &v
	return s
}

type MakeSuperResolutionImageRequest struct {
	Url *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s MakeSuperResolutionImageRequest) String() string {
	return tea.Prettify(s)
}

func (s MakeSuperResolutionImageRequest) GoString() string {
	return s.String()
}

func (s *MakeSuperResolutionImageRequest) SetUrl(v string) *MakeSuperResolutionImageRequest {
	s.Url = &v
	return s
}

type MakeSuperResolutionImageResponse struct {
	RequestId *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *MakeSuperResolutionImageResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s MakeSuperResolutionImageResponse) String() string {
	return tea.Prettify(s)
}

func (s MakeSuperResolutionImageResponse) GoString() string {
	return s.String()
}

func (s *MakeSuperResolutionImageResponse) SetRequestId(v string) *MakeSuperResolutionImageResponse {
	s.RequestId = &v
	return s
}

func (s *MakeSuperResolutionImageResponse) SetData(v *MakeSuperResolutionImageResponseData) *MakeSuperResolutionImageResponse {
	s.Data = v
	return s
}

type MakeSuperResolutionImageResponseData struct {
	Url *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s MakeSuperResolutionImageResponseData) String() string {
	return tea.Prettify(s)
}

func (s MakeSuperResolutionImageResponseData) GoString() string {
	return s.String()
}

func (s *MakeSuperResolutionImageResponseData) SetUrl(v string) *MakeSuperResolutionImageResponseData {
	s.Url = &v
	return s
}

type MakeSuperResolutionImageAdvanceRequest struct {
	UrlObject io.Reader `json:"UrlObject,omitempty" xml:"UrlObject,omitempty" require:"true"`
}

func (s MakeSuperResolutionImageAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s MakeSuperResolutionImageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *MakeSuperResolutionImageAdvanceRequest) SetUrlObject(v io.Reader) *MakeSuperResolutionImageAdvanceRequest {
	s.UrlObject = v
	return s
}

type RecolorImageRequest struct {
	Url           *string                             `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
	Mode          *string                             `json:"Mode,omitempty" xml:"Mode,omitempty"`
	RefUrl        *string                             `json:"RefUrl,omitempty" xml:"RefUrl,omitempty"`
	ColorCount    *int                                `json:"ColorCount,omitempty" xml:"ColorCount,omitempty"`
	ColorTemplate []*RecolorImageRequestColorTemplate `json:"ColorTemplate,omitempty" xml:"ColorTemplate,omitempty" type:"Repeated"`
}

func (s RecolorImageRequest) String() string {
	return tea.Prettify(s)
}

func (s RecolorImageRequest) GoString() string {
	return s.String()
}

func (s *RecolorImageRequest) SetUrl(v string) *RecolorImageRequest {
	s.Url = &v
	return s
}

func (s *RecolorImageRequest) SetMode(v string) *RecolorImageRequest {
	s.Mode = &v
	return s
}

func (s *RecolorImageRequest) SetRefUrl(v string) *RecolorImageRequest {
	s.RefUrl = &v
	return s
}

func (s *RecolorImageRequest) SetColorCount(v int) *RecolorImageRequest {
	s.ColorCount = &v
	return s
}

func (s *RecolorImageRequest) SetColorTemplate(v []*RecolorImageRequestColorTemplate) *RecolorImageRequest {
	s.ColorTemplate = v
	return s
}

type RecolorImageRequestColorTemplate struct {
	Color *string `json:"Color,omitempty" xml:"Color,omitempty"`
}

func (s RecolorImageRequestColorTemplate) String() string {
	return tea.Prettify(s)
}

func (s RecolorImageRequestColorTemplate) GoString() string {
	return s.String()
}

func (s *RecolorImageRequestColorTemplate) SetColor(v string) *RecolorImageRequestColorTemplate {
	s.Color = &v
	return s
}

type RecolorImageResponse struct {
	RequestId *string                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecolorImageResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecolorImageResponse) String() string {
	return tea.Prettify(s)
}

func (s RecolorImageResponse) GoString() string {
	return s.String()
}

func (s *RecolorImageResponse) SetRequestId(v string) *RecolorImageResponse {
	s.RequestId = &v
	return s
}

func (s *RecolorImageResponse) SetData(v *RecolorImageResponseData) *RecolorImageResponse {
	s.Data = v
	return s
}

type RecolorImageResponseData struct {
	ImageList []*string `json:"ImageList,omitempty" xml:"ImageList,omitempty" require:"true" type:"Repeated"`
}

func (s RecolorImageResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecolorImageResponseData) GoString() string {
	return s.String()
}

func (s *RecolorImageResponseData) SetImageList(v []*string) *RecolorImageResponseData {
	s.ImageList = v
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
	client.Endpoint, _err = client.GetEndpoint(tea.String("imageenhan"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
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
	_body, _err := client.DoRequest(tea.String("GetAsyncJobResult"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ImitatePhotoStyle(request *ImitatePhotoStyleRequest, runtime *util.RuntimeOptions) (_result *ImitatePhotoStyleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ImitatePhotoStyleResponse{}
	_body, _err := client.DoRequest(tea.String("ImitatePhotoStyle"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ImitatePhotoStyleAdvance(request *ImitatePhotoStyleAdvanceRequest, runtime *util.RuntimeOptions) (_result *ImitatePhotoStyleResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
	imitatePhotoStylereq := &ImitatePhotoStyleRequest{}
	rpcutil.Convert(request, imitatePhotoStylereq)
	imitatePhotoStylereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	imitatePhotoStyleResp, _err := client.ImitatePhotoStyle(imitatePhotoStylereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = imitatePhotoStyleResp
	return _result, _err
}

func (client *Client) EnhanceImageColor(request *EnhanceImageColorRequest, runtime *util.RuntimeOptions) (_result *EnhanceImageColorResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &EnhanceImageColorResponse{}
	_body, _err := client.DoRequest(tea.String("EnhanceImageColor"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) EnhanceImageColorAdvance(request *EnhanceImageColorAdvanceRequest, runtime *util.RuntimeOptions) (_result *EnhanceImageColorResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
	enhanceImageColorreq := &EnhanceImageColorRequest{}
	rpcutil.Convert(request, enhanceImageColorreq)
	enhanceImageColorreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	enhanceImageColorResp, _err := client.EnhanceImageColor(enhanceImageColorreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = enhanceImageColorResp
	return _result, _err
}

func (client *Client) RecolorHDImage(request *RecolorHDImageRequest, runtime *util.RuntimeOptions) (_result *RecolorHDImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecolorHDImageResponse{}
	_body, _err := client.DoRequest(tea.String("RecolorHDImage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecolorHDImageAdvance(request *RecolorHDImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecolorHDImageResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
		Content:     request.UrlObject,
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
	recolorHDImagereq := &RecolorHDImageRequest{}
	rpcutil.Convert(request, recolorHDImagereq)
	recolorHDImagereq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recolorHDImageResp, _err := client.RecolorHDImage(recolorHDImagereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recolorHDImageResp
	return _result, _err
}

func (client *Client) AssessComposition(request *AssessCompositionRequest, runtime *util.RuntimeOptions) (_result *AssessCompositionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AssessCompositionResponse{}
	_body, _err := client.DoRequest(tea.String("AssessComposition"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AssessCompositionAdvance(request *AssessCompositionAdvanceRequest, runtime *util.RuntimeOptions) (_result *AssessCompositionResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
	assessCompositionreq := &AssessCompositionRequest{}
	rpcutil.Convert(request, assessCompositionreq)
	assessCompositionreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	assessCompositionResp, _err := client.AssessComposition(assessCompositionreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = assessCompositionResp
	return _result, _err
}

func (client *Client) AssessSharpness(request *AssessSharpnessRequest, runtime *util.RuntimeOptions) (_result *AssessSharpnessResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AssessSharpnessResponse{}
	_body, _err := client.DoRequest(tea.String("AssessSharpness"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AssessSharpnessAdvance(request *AssessSharpnessAdvanceRequest, runtime *util.RuntimeOptions) (_result *AssessSharpnessResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
	assessSharpnessreq := &AssessSharpnessRequest{}
	rpcutil.Convert(request, assessSharpnessreq)
	assessSharpnessreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	assessSharpnessResp, _err := client.AssessSharpness(assessSharpnessreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = assessSharpnessResp
	return _result, _err
}

func (client *Client) AssessExposure(request *AssessExposureRequest, runtime *util.RuntimeOptions) (_result *AssessExposureResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AssessExposureResponse{}
	_body, _err := client.DoRequest(tea.String("AssessExposure"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AssessExposureAdvance(request *AssessExposureAdvanceRequest, runtime *util.RuntimeOptions) (_result *AssessExposureResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
	assessExposurereq := &AssessExposureRequest{}
	rpcutil.Convert(request, assessExposurereq)
	assessExposurereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	assessExposureResp, _err := client.AssessExposure(assessExposurereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = assessExposureResp
	return _result, _err
}

func (client *Client) ImageBlindCharacterWatermark(request *ImageBlindCharacterWatermarkRequest, runtime *util.RuntimeOptions) (_result *ImageBlindCharacterWatermarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ImageBlindCharacterWatermarkResponse{}
	_body, _err := client.DoRequest(tea.String("ImageBlindCharacterWatermark"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ImageBlindCharacterWatermarkAdvance(request *ImageBlindCharacterWatermarkAdvanceRequest, runtime *util.RuntimeOptions) (_result *ImageBlindCharacterWatermarkResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
		Content:     request.OriginImageURLObject,
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
	imageBlindCharacterWatermarkreq := &ImageBlindCharacterWatermarkRequest{}
	rpcutil.Convert(request, imageBlindCharacterWatermarkreq)
	imageBlindCharacterWatermarkreq.OriginImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	imageBlindCharacterWatermarkResp, _err := client.ImageBlindCharacterWatermark(imageBlindCharacterWatermarkreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = imageBlindCharacterWatermarkResp
	return _result, _err
}

func (client *Client) RemoveImageSubtitles(request *RemoveImageSubtitlesRequest, runtime *util.RuntimeOptions) (_result *RemoveImageSubtitlesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveImageSubtitlesResponse{}
	_body, _err := client.DoRequest(tea.String("RemoveImageSubtitles"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveImageSubtitlesAdvance(request *RemoveImageSubtitlesAdvanceRequest, runtime *util.RuntimeOptions) (_result *RemoveImageSubtitlesResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
	removeImageSubtitlesreq := &RemoveImageSubtitlesRequest{}
	rpcutil.Convert(request, removeImageSubtitlesreq)
	removeImageSubtitlesreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	removeImageSubtitlesResp, _err := client.RemoveImageSubtitles(removeImageSubtitlesreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = removeImageSubtitlesResp
	return _result, _err
}

func (client *Client) RemoveImageWatermark(request *RemoveImageWatermarkRequest, runtime *util.RuntimeOptions) (_result *RemoveImageWatermarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RemoveImageWatermarkResponse{}
	_body, _err := client.DoRequest(tea.String("RemoveImageWatermark"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveImageWatermarkAdvance(request *RemoveImageWatermarkAdvanceRequest, runtime *util.RuntimeOptions) (_result *RemoveImageWatermarkResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
	removeImageWatermarkreq := &RemoveImageWatermarkRequest{}
	rpcutil.Convert(request, removeImageWatermarkreq)
	removeImageWatermarkreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	removeImageWatermarkResp, _err := client.RemoveImageWatermark(removeImageWatermarkreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = removeImageWatermarkResp
	return _result, _err
}

func (client *Client) ImageBlindPicWatermark(request *ImageBlindPicWatermarkRequest, runtime *util.RuntimeOptions) (_result *ImageBlindPicWatermarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ImageBlindPicWatermarkResponse{}
	_body, _err := client.DoRequest(tea.String("ImageBlindPicWatermark"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ImageBlindPicWatermarkAdvance(request *ImageBlindPicWatermarkAdvanceRequest, runtime *util.RuntimeOptions) (_result *ImageBlindPicWatermarkResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
		Content:     request.OriginImageURLObject,
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
	imageBlindPicWatermarkreq := &ImageBlindPicWatermarkRequest{}
	rpcutil.Convert(request, imageBlindPicWatermarkreq)
	imageBlindPicWatermarkreq.OriginImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	imageBlindPicWatermarkResp, _err := client.ImageBlindPicWatermark(imageBlindPicWatermarkreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = imageBlindPicWatermarkResp
	return _result, _err
}

func (client *Client) IntelligentComposition(request *IntelligentCompositionRequest, runtime *util.RuntimeOptions) (_result *IntelligentCompositionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &IntelligentCompositionResponse{}
	_body, _err := client.DoRequest(tea.String("IntelligentComposition"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) IntelligentCompositionAdvance(request *IntelligentCompositionAdvanceRequest, runtime *util.RuntimeOptions) (_result *IntelligentCompositionResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
	intelligentCompositionreq := &IntelligentCompositionRequest{}
	rpcutil.Convert(request, intelligentCompositionreq)
	intelligentCompositionreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	intelligentCompositionResp, _err := client.IntelligentComposition(intelligentCompositionreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = intelligentCompositionResp
	return _result, _err
}

func (client *Client) ChangeImageSize(request *ChangeImageSizeRequest, runtime *util.RuntimeOptions) (_result *ChangeImageSizeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ChangeImageSizeResponse{}
	_body, _err := client.DoRequest(tea.String("ChangeImageSize"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ChangeImageSizeAdvance(request *ChangeImageSizeAdvanceRequest, runtime *util.RuntimeOptions) (_result *ChangeImageSizeResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
		Content:     request.UrlObject,
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
	changeImageSizereq := &ChangeImageSizeRequest{}
	rpcutil.Convert(request, changeImageSizereq)
	changeImageSizereq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	changeImageSizeResp, _err := client.ChangeImageSize(changeImageSizereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = changeImageSizeResp
	return _result, _err
}

func (client *Client) ExtendImageStyle(request *ExtendImageStyleRequest, runtime *util.RuntimeOptions) (_result *ExtendImageStyleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ExtendImageStyleResponse{}
	_body, _err := client.DoRequest(tea.String("ExtendImageStyle"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) MakeSuperResolutionImage(request *MakeSuperResolutionImageRequest, runtime *util.RuntimeOptions) (_result *MakeSuperResolutionImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &MakeSuperResolutionImageResponse{}
	_body, _err := client.DoRequest(tea.String("MakeSuperResolutionImage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) MakeSuperResolutionImageAdvance(request *MakeSuperResolutionImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *MakeSuperResolutionImageResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
		Content:     request.UrlObject,
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
	makeSuperResolutionImagereq := &MakeSuperResolutionImageRequest{}
	rpcutil.Convert(request, makeSuperResolutionImagereq)
	makeSuperResolutionImagereq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	makeSuperResolutionImageResp, _err := client.MakeSuperResolutionImage(makeSuperResolutionImagereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = makeSuperResolutionImageResp
	return _result, _err
}

func (client *Client) RecolorImage(request *RecolorImageRequest, runtime *util.RuntimeOptions) (_result *RecolorImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecolorImageResponse{}
	_body, _err := client.DoRequest(tea.String("RecolorImage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
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
