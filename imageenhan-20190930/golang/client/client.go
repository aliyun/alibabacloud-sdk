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

type ImageBlindCharacterWatermarkRequest struct {
	FunctionType      *string `json:"FunctionType" xml:"FunctionType" require:"true"`
	Text              *string `json:"Text" xml:"Text"`
	WatermarkImageURL *string `json:"WatermarkImageURL" xml:"WatermarkImageURL"`
	OutputFileType    *string `json:"OutputFileType" xml:"OutputFileType"`
	QualityFactor     *int    `json:"QualityFactor" xml:"QualityFactor" require:"true"`
	OriginImageURL    *string `json:"OriginImageURL" xml:"OriginImageURL" require:"true"`
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
	RequestId *string                                   `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ImageBlindCharacterWatermarkResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	WatermarkImageURL *string `json:"WatermarkImageURL" xml:"WatermarkImageURL" require:"true"`
	TextImageURL      *string `json:"TextImageURL" xml:"TextImageURL" require:"true"`
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
	OriginImageURLObject io.Reader `json:"OriginImageURLObject" xml:"OriginImageURLObject" require:"true"`
	FunctionType         *string   `json:"FunctionType" xml:"FunctionType" require:"true"`
	Text                 *string   `json:"Text" xml:"Text"`
	WatermarkImageURL    *string   `json:"WatermarkImageURL" xml:"WatermarkImageURL"`
	OutputFileType       *string   `json:"OutputFileType" xml:"OutputFileType"`
	QualityFactor        *int      `json:"QualityFactor" xml:"QualityFactor" require:"true"`
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
	ImageURL *string  `json:"ImageURL" xml:"ImageURL" require:"true"`
	BX       *float32 `json:"BX" xml:"BX"`
	BY       *float32 `json:"BY" xml:"BY"`
	BW       *float32 `json:"BW" xml:"BW"`
	BH       *float32 `json:"BH" xml:"BH"`
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
	RequestId *string                           `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RemoveImageSubtitlesResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	BX             *float32  `json:"BX" xml:"BX"`
	BY             *float32  `json:"BY" xml:"BY"`
	BW             *float32  `json:"BW" xml:"BW"`
	BH             *float32  `json:"BH" xml:"BH"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                           `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RemoveImageWatermarkResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	FunctionType      *string `json:"FunctionType" xml:"FunctionType" require:"true"`
	LogoURL           *string `json:"LogoURL" xml:"LogoURL"`
	WatermarkImageURL *string `json:"WatermarkImageURL" xml:"WatermarkImageURL"`
	OutputFileType    *string `json:"OutputFileType" xml:"OutputFileType"`
	QualityFactor     *int    `json:"QualityFactor" xml:"QualityFactor" require:"true"`
	OriginImageURL    *string `json:"OriginImageURL" xml:"OriginImageURL" require:"true"`
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
	RequestId *string                             `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ImageBlindPicWatermarkResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	WatermarkImageURL *string `json:"WatermarkImageURL" xml:"WatermarkImageURL" require:"true"`
	LogoURL           *string `json:"LogoURL" xml:"LogoURL" require:"true"`
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
	OriginImageURLObject io.Reader `json:"OriginImageURLObject" xml:"OriginImageURLObject" require:"true"`
	FunctionType         *string   `json:"FunctionType" xml:"FunctionType" require:"true"`
	LogoURL              *string   `json:"LogoURL" xml:"LogoURL"`
	WatermarkImageURL    *string   `json:"WatermarkImageURL" xml:"WatermarkImageURL"`
	OutputFileType       *string   `json:"OutputFileType" xml:"OutputFileType"`
	QualityFactor        *int      `json:"QualityFactor" xml:"QualityFactor" require:"true"`
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
	NumBoxes *int    `json:"NumBoxes" xml:"NumBoxes"`
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                             `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *IntelligentCompositionResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Elements []*IntelligentCompositionResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
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
	MinX  *int     `json:"MinX" xml:"MinX" require:"true"`
	MinY  *int     `json:"MinY" xml:"MinY" require:"true"`
	MaxX  *int     `json:"MaxX" xml:"MaxX" require:"true"`
	MaxY  *int     `json:"MaxY" xml:"MaxY" require:"true"`
	Score *float32 `json:"Score" xml:"Score" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	NumBoxes       *int      `json:"NumBoxes" xml:"NumBoxes"`
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
	Width  *int    `json:"Width" xml:"Width" require:"true"`
	Height *int    `json:"Height" xml:"Height" require:"true"`
	Url    *string `json:"Url" xml:"Url" require:"true"`
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
	RequestId *string                      `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ChangeImageSizeResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Url            *string                                    `json:"Url" xml:"Url" require:"true"`
	RetainLocation *ChangeImageSizeResponseDataRetainLocation `json:"RetainLocation" xml:"RetainLocation" require:"true" type:"Struct"`
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
	X      *int `json:"X" xml:"X" require:"true"`
	Y      *int `json:"Y" xml:"Y" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
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
	UrlObject io.Reader `json:"UrlObject" xml:"UrlObject" require:"true"`
	Width     *int      `json:"Width" xml:"Width" require:"true"`
	Height    *int      `json:"Height" xml:"Height" require:"true"`
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
	StyleUrl *string `json:"StyleUrl" xml:"StyleUrl" require:"true"`
	MajorUrl *string `json:"MajorUrl" xml:"MajorUrl" require:"true"`
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
	RequestId *string                       `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ExtendImageStyleResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Url      *string `json:"Url" xml:"Url" require:"true"`
	MajorUrl *string `json:"MajorUrl" xml:"MajorUrl" require:"true"`
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
	Url *string `json:"Url" xml:"Url" require:"true"`
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
	RequestId *string                               `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *MakeSuperResolutionImageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Url *string `json:"Url" xml:"Url" require:"true"`
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
	UrlObject io.Reader `json:"UrlObject" xml:"UrlObject" require:"true"`
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
	Url           *string                             `json:"Url" xml:"Url" require:"true"`
	Mode          *string                             `json:"Mode" xml:"Mode"`
	RefUrl        *string                             `json:"RefUrl" xml:"RefUrl"`
	ColorCount    *int                                `json:"ColorCount" xml:"ColorCount"`
	ColorTemplate []*RecolorImageRequestColorTemplate `json:"ColorTemplate" xml:"ColorTemplate" type:"Repeated"`
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
	Color *string `json:"Color" xml:"Color"`
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
	RequestId *string                   `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecolorImageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	ImageList []*string `json:"ImageList" xml:"ImageList" require:"true" type:"Repeated"`
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

func (client *Client) ImageBlindCharacterWatermark(request *ImageBlindCharacterWatermarkRequest, runtime *util.RuntimeOptions) (_result *ImageBlindCharacterWatermarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &ImageBlindCharacterWatermarkResponse{}
	_body, _err := client.DoRequest("ImageBlindCharacterWatermark", "HTTPS", "POST", "2019-09-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ImageBlindCharacterWatermarkAdvance(request *ImageBlindCharacterWatermarkAdvanceRequest, runtime *util.RuntimeOptions) (_result *ImageBlindCharacterWatermarkResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
		return
	}
	// Step 2: request final api
	imageBlindCharacterWatermarkreq := &ImageBlindCharacterWatermarkRequest{}
	rpcutil.Convert(request, imageBlindCharacterWatermarkreq)
	imageBlindCharacterWatermarkreq.OriginImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	imageBlindCharacterWatermarkResp, _err := client.ImageBlindCharacterWatermark(imageBlindCharacterWatermarkreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = imageBlindCharacterWatermarkResp
	return _result, _err
}

func (client *Client) RemoveImageSubtitles(request *RemoveImageSubtitlesRequest, runtime *util.RuntimeOptions) (_result *RemoveImageSubtitlesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RemoveImageSubtitlesResponse{}
	_body, _err := client.DoRequest("RemoveImageSubtitles", "HTTPS", "POST", "2019-09-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveImageSubtitlesAdvance(request *RemoveImageSubtitlesAdvanceRequest, runtime *util.RuntimeOptions) (_result *RemoveImageSubtitlesResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
	removeImageSubtitlesreq := &RemoveImageSubtitlesRequest{}
	rpcutil.Convert(request, removeImageSubtitlesreq)
	removeImageSubtitlesreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	removeImageSubtitlesResp, _err := client.RemoveImageSubtitles(removeImageSubtitlesreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = removeImageSubtitlesResp
	return _result, _err
}

func (client *Client) RemoveImageWatermark(request *RemoveImageWatermarkRequest, runtime *util.RuntimeOptions) (_result *RemoveImageWatermarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RemoveImageWatermarkResponse{}
	_body, _err := client.DoRequest("RemoveImageWatermark", "HTTPS", "POST", "2019-09-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RemoveImageWatermarkAdvance(request *RemoveImageWatermarkAdvanceRequest, runtime *util.RuntimeOptions) (_result *RemoveImageWatermarkResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
	removeImageWatermarkreq := &RemoveImageWatermarkRequest{}
	rpcutil.Convert(request, removeImageWatermarkreq)
	removeImageWatermarkreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	removeImageWatermarkResp, _err := client.RemoveImageWatermark(removeImageWatermarkreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = removeImageWatermarkResp
	return _result, _err
}

func (client *Client) ImageBlindPicWatermark(request *ImageBlindPicWatermarkRequest, runtime *util.RuntimeOptions) (_result *ImageBlindPicWatermarkResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &ImageBlindPicWatermarkResponse{}
	_body, _err := client.DoRequest("ImageBlindPicWatermark", "HTTPS", "POST", "2019-09-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ImageBlindPicWatermarkAdvance(request *ImageBlindPicWatermarkAdvanceRequest, runtime *util.RuntimeOptions) (_result *ImageBlindPicWatermarkResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
		return
	}
	// Step 2: request final api
	imageBlindPicWatermarkreq := &ImageBlindPicWatermarkRequest{}
	rpcutil.Convert(request, imageBlindPicWatermarkreq)
	imageBlindPicWatermarkreq.OriginImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	imageBlindPicWatermarkResp, _err := client.ImageBlindPicWatermark(imageBlindPicWatermarkreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = imageBlindPicWatermarkResp
	return _result, _err
}

func (client *Client) IntelligentComposition(request *IntelligentCompositionRequest, runtime *util.RuntimeOptions) (_result *IntelligentCompositionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &IntelligentCompositionResponse{}
	_body, _err := client.DoRequest("IntelligentComposition", "HTTPS", "POST", "2019-09-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) IntelligentCompositionAdvance(request *IntelligentCompositionAdvanceRequest, runtime *util.RuntimeOptions) (_result *IntelligentCompositionResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
	intelligentCompositionreq := &IntelligentCompositionRequest{}
	rpcutil.Convert(request, intelligentCompositionreq)
	intelligentCompositionreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	intelligentCompositionResp, _err := client.IntelligentComposition(intelligentCompositionreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = intelligentCompositionResp
	return _result, _err
}

func (client *Client) ChangeImageSize(request *ChangeImageSizeRequest, runtime *util.RuntimeOptions) (_result *ChangeImageSizeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &ChangeImageSizeResponse{}
	_body, _err := client.DoRequest("ChangeImageSize", "HTTPS", "POST", "2019-09-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ChangeImageSizeAdvance(request *ChangeImageSizeAdvanceRequest, runtime *util.RuntimeOptions) (_result *ChangeImageSizeResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
		return
	}
	// Step 2: request final api
	changeImageSizereq := &ChangeImageSizeRequest{}
	rpcutil.Convert(request, changeImageSizereq)
	changeImageSizereq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	changeImageSizeResp, _err := client.ChangeImageSize(changeImageSizereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = changeImageSizeResp
	return _result, _err
}

func (client *Client) ExtendImageStyle(request *ExtendImageStyleRequest, runtime *util.RuntimeOptions) (_result *ExtendImageStyleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &ExtendImageStyleResponse{}
	_body, _err := client.DoRequest("ExtendImageStyle", "HTTPS", "POST", "2019-09-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) MakeSuperResolutionImage(request *MakeSuperResolutionImageRequest, runtime *util.RuntimeOptions) (_result *MakeSuperResolutionImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &MakeSuperResolutionImageResponse{}
	_body, _err := client.DoRequest("MakeSuperResolutionImage", "HTTPS", "POST", "2019-09-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) MakeSuperResolutionImageAdvance(request *MakeSuperResolutionImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *MakeSuperResolutionImageResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
		return
	}
	// Step 2: request final api
	makeSuperResolutionImagereq := &MakeSuperResolutionImageRequest{}
	rpcutil.Convert(request, makeSuperResolutionImagereq)
	makeSuperResolutionImagereq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	makeSuperResolutionImageResp, _err := client.MakeSuperResolutionImage(makeSuperResolutionImagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = makeSuperResolutionImageResp
	return _result, _err
}

func (client *Client) RecolorImage(request *RecolorImageRequest, runtime *util.RuntimeOptions) (_result *RecolorImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &RecolorImageResponse{}
	_body, _err := client.DoRequest("RecolorImage", "HTTPS", "POST", "2019-09-30", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
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
