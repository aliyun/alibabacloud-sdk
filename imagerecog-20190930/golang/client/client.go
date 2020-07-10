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

type DetectFruitsRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s DetectFruitsRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectFruitsRequest) GoString() string {
	return s.String()
}

func (s *DetectFruitsRequest) SetImageURL(v string) *DetectFruitsRequest {
	s.ImageURL = &v
	return s
}

type DetectFruitsResponse struct {
	RequestId *string                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectFruitsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectFruitsResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectFruitsResponse) GoString() string {
	return s.String()
}

func (s *DetectFruitsResponse) SetRequestId(v string) *DetectFruitsResponse {
	s.RequestId = &v
	return s
}

func (s *DetectFruitsResponse) SetData(v *DetectFruitsResponseData) *DetectFruitsResponse {
	s.Data = v
	return s
}

type DetectFruitsResponseData struct {
	Elements []*DetectFruitsResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s DetectFruitsResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectFruitsResponseData) GoString() string {
	return s.String()
}

func (s *DetectFruitsResponseData) SetElements(v []*DetectFruitsResponseDataElements) *DetectFruitsResponseData {
	s.Elements = v
	return s
}

type DetectFruitsResponseDataElements struct {
	Name  *string    `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Score *float32   `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Box   []*float32 `json:"Box,omitempty" xml:"Box,omitempty" require:"true" type:"Repeated"`
}

func (s DetectFruitsResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s DetectFruitsResponseDataElements) GoString() string {
	return s.String()
}

func (s *DetectFruitsResponseDataElements) SetName(v string) *DetectFruitsResponseDataElements {
	s.Name = &v
	return s
}

func (s *DetectFruitsResponseDataElements) SetScore(v float32) *DetectFruitsResponseDataElements {
	s.Score = &v
	return s
}

func (s *DetectFruitsResponseDataElements) SetBox(v []*float32) *DetectFruitsResponseDataElements {
	s.Box = v
	return s
}

type DetectFruitsAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s DetectFruitsAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectFruitsAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectFruitsAdvanceRequest) SetImageURLObject(v io.Reader) *DetectFruitsAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type ClassifyingRubbishRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s ClassifyingRubbishRequest) String() string {
	return tea.Prettify(s)
}

func (s ClassifyingRubbishRequest) GoString() string {
	return s.String()
}

func (s *ClassifyingRubbishRequest) SetImageURL(v string) *ClassifyingRubbishRequest {
	s.ImageURL = &v
	return s
}

type ClassifyingRubbishResponse struct {
	RequestId *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ClassifyingRubbishResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ClassifyingRubbishResponse) String() string {
	return tea.Prettify(s)
}

func (s ClassifyingRubbishResponse) GoString() string {
	return s.String()
}

func (s *ClassifyingRubbishResponse) SetRequestId(v string) *ClassifyingRubbishResponse {
	s.RequestId = &v
	return s
}

func (s *ClassifyingRubbishResponse) SetData(v *ClassifyingRubbishResponseData) *ClassifyingRubbishResponse {
	s.Data = v
	return s
}

type ClassifyingRubbishResponseData struct {
	Sensitive *bool                                     `json:"Sensitive,omitempty" xml:"Sensitive,omitempty" require:"true"`
	Elements  []*ClassifyingRubbishResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s ClassifyingRubbishResponseData) String() string {
	return tea.Prettify(s)
}

func (s ClassifyingRubbishResponseData) GoString() string {
	return s.String()
}

func (s *ClassifyingRubbishResponseData) SetSensitive(v bool) *ClassifyingRubbishResponseData {
	s.Sensitive = &v
	return s
}

func (s *ClassifyingRubbishResponseData) SetElements(v []*ClassifyingRubbishResponseDataElements) *ClassifyingRubbishResponseData {
	s.Elements = v
	return s
}

type ClassifyingRubbishResponseDataElements struct {
	Category      *string  `json:"Category,omitempty" xml:"Category,omitempty" require:"true"`
	CategoryScore *float32 `json:"CategoryScore,omitempty" xml:"CategoryScore,omitempty" require:"true"`
	Rubbish       *string  `json:"Rubbish,omitempty" xml:"Rubbish,omitempty" require:"true"`
	RubbishScore  *float32 `json:"RubbishScore,omitempty" xml:"RubbishScore,omitempty" require:"true"`
}

func (s ClassifyingRubbishResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s ClassifyingRubbishResponseDataElements) GoString() string {
	return s.String()
}

func (s *ClassifyingRubbishResponseDataElements) SetCategory(v string) *ClassifyingRubbishResponseDataElements {
	s.Category = &v
	return s
}

func (s *ClassifyingRubbishResponseDataElements) SetCategoryScore(v float32) *ClassifyingRubbishResponseDataElements {
	s.CategoryScore = &v
	return s
}

func (s *ClassifyingRubbishResponseDataElements) SetRubbish(v string) *ClassifyingRubbishResponseDataElements {
	s.Rubbish = &v
	return s
}

func (s *ClassifyingRubbishResponseDataElements) SetRubbishScore(v float32) *ClassifyingRubbishResponseDataElements {
	s.RubbishScore = &v
	return s
}

type ClassifyingRubbishAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s ClassifyingRubbishAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s ClassifyingRubbishAdvanceRequest) GoString() string {
	return s.String()
}

func (s *ClassifyingRubbishAdvanceRequest) SetImageURLObject(v io.Reader) *ClassifyingRubbishAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeVehicleTypeRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s RecognizeVehicleTypeRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleTypeRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleTypeRequest) SetImageURL(v string) *RecognizeVehicleTypeRequest {
	s.ImageURL = &v
	return s
}

type RecognizeVehicleTypeResponse struct {
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeVehicleTypeResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeVehicleTypeResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleTypeResponse) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleTypeResponse) SetRequestId(v string) *RecognizeVehicleTypeResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeVehicleTypeResponse) SetData(v *RecognizeVehicleTypeResponseData) *RecognizeVehicleTypeResponse {
	s.Data = v
	return s
}

type RecognizeVehicleTypeResponseData struct {
	Threshold *float32                                    `json:"Threshold,omitempty" xml:"Threshold,omitempty" require:"true"`
	Elements  []*RecognizeVehicleTypeResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeVehicleTypeResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleTypeResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleTypeResponseData) SetThreshold(v float32) *RecognizeVehicleTypeResponseData {
	s.Threshold = &v
	return s
}

func (s *RecognizeVehicleTypeResponseData) SetElements(v []*RecognizeVehicleTypeResponseDataElements) *RecognizeVehicleTypeResponseData {
	s.Elements = v
	return s
}

type RecognizeVehicleTypeResponseDataElements struct {
	Name  *string  `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Score *float32 `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
}

func (s RecognizeVehicleTypeResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleTypeResponseDataElements) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleTypeResponseDataElements) SetName(v string) *RecognizeVehicleTypeResponseDataElements {
	s.Name = &v
	return s
}

func (s *RecognizeVehicleTypeResponseDataElements) SetScore(v float32) *RecognizeVehicleTypeResponseDataElements {
	s.Score = &v
	return s
}

type RecognizeVehicleTypeAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s RecognizeVehicleTypeAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleTypeAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleTypeAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeVehicleTypeAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeLogoRequest struct {
	Tasks []*RecognizeLogoRequestTasks `json:"Tasks,omitempty" xml:"Tasks,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeLogoRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLogoRequest) GoString() string {
	return s.String()
}

func (s *RecognizeLogoRequest) SetTasks(v []*RecognizeLogoRequestTasks) *RecognizeLogoRequest {
	s.Tasks = v
	return s
}

type RecognizeLogoRequestTasks struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s RecognizeLogoRequestTasks) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLogoRequestTasks) GoString() string {
	return s.String()
}

func (s *RecognizeLogoRequestTasks) SetImageURL(v string) *RecognizeLogoRequestTasks {
	s.ImageURL = &v
	return s
}

type RecognizeLogoResponse struct {
	RequestId *string                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeLogoResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeLogoResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLogoResponse) GoString() string {
	return s.String()
}

func (s *RecognizeLogoResponse) SetRequestId(v string) *RecognizeLogoResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeLogoResponse) SetData(v *RecognizeLogoResponseData) *RecognizeLogoResponse {
	s.Data = v
	return s
}

type RecognizeLogoResponseData struct {
	Elements []*RecognizeLogoResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeLogoResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLogoResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeLogoResponseData) SetElements(v []*RecognizeLogoResponseDataElements) *RecognizeLogoResponseData {
	s.Elements = v
	return s
}

type RecognizeLogoResponseDataElements struct {
	TaskId   *string                                     `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
	ImageURL *string                                     `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	Results  []*RecognizeLogoResponseDataElementsResults `json:"Results,omitempty" xml:"Results,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeLogoResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLogoResponseDataElements) GoString() string {
	return s.String()
}

func (s *RecognizeLogoResponseDataElements) SetTaskId(v string) *RecognizeLogoResponseDataElements {
	s.TaskId = &v
	return s
}

func (s *RecognizeLogoResponseDataElements) SetImageURL(v string) *RecognizeLogoResponseDataElements {
	s.ImageURL = &v
	return s
}

func (s *RecognizeLogoResponseDataElements) SetResults(v []*RecognizeLogoResponseDataElementsResults) *RecognizeLogoResponseDataElements {
	s.Results = v
	return s
}

type RecognizeLogoResponseDataElementsResults struct {
	Label      *string                                              `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Suggestion *string                                              `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Rate       *float32                                             `json:"Rate,omitempty" xml:"Rate,omitempty" require:"true"`
	LogosData  []*RecognizeLogoResponseDataElementsResultsLogosData `json:"LogosData,omitempty" xml:"LogosData,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeLogoResponseDataElementsResults) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLogoResponseDataElementsResults) GoString() string {
	return s.String()
}

func (s *RecognizeLogoResponseDataElementsResults) SetLabel(v string) *RecognizeLogoResponseDataElementsResults {
	s.Label = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResults) SetSuggestion(v string) *RecognizeLogoResponseDataElementsResults {
	s.Suggestion = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResults) SetRate(v float32) *RecognizeLogoResponseDataElementsResults {
	s.Rate = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResults) SetLogosData(v []*RecognizeLogoResponseDataElementsResultsLogosData) *RecognizeLogoResponseDataElementsResults {
	s.LogosData = v
	return s
}

type RecognizeLogoResponseDataElementsResultsLogosData struct {
	Name *string  `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Type *string  `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	X    *float32 `json:"X,omitempty" xml:"X,omitempty" require:"true"`
	Y    *float32 `json:"Y,omitempty" xml:"Y,omitempty" require:"true"`
	H    *float32 `json:"H,omitempty" xml:"H,omitempty" require:"true"`
	W    *float32 `json:"W,omitempty" xml:"W,omitempty" require:"true"`
}

func (s RecognizeLogoResponseDataElementsResultsLogosData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLogoResponseDataElementsResultsLogosData) GoString() string {
	return s.String()
}

func (s *RecognizeLogoResponseDataElementsResultsLogosData) SetName(v string) *RecognizeLogoResponseDataElementsResultsLogosData {
	s.Name = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResultsLogosData) SetType(v string) *RecognizeLogoResponseDataElementsResultsLogosData {
	s.Type = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResultsLogosData) SetX(v float32) *RecognizeLogoResponseDataElementsResultsLogosData {
	s.X = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResultsLogosData) SetY(v float32) *RecognizeLogoResponseDataElementsResultsLogosData {
	s.Y = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResultsLogosData) SetH(v float32) *RecognizeLogoResponseDataElementsResultsLogosData {
	s.H = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResultsLogosData) SetW(v float32) *RecognizeLogoResponseDataElementsResultsLogosData {
	s.W = &v
	return s
}

type TaggingImageRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s TaggingImageRequest) String() string {
	return tea.Prettify(s)
}

func (s TaggingImageRequest) GoString() string {
	return s.String()
}

func (s *TaggingImageRequest) SetImageURL(v string) *TaggingImageRequest {
	s.ImageURL = &v
	return s
}

type TaggingImageResponse struct {
	RequestId *string                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *TaggingImageResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s TaggingImageResponse) String() string {
	return tea.Prettify(s)
}

func (s TaggingImageResponse) GoString() string {
	return s.String()
}

func (s *TaggingImageResponse) SetRequestId(v string) *TaggingImageResponse {
	s.RequestId = &v
	return s
}

func (s *TaggingImageResponse) SetData(v *TaggingImageResponseData) *TaggingImageResponse {
	s.Data = v
	return s
}

type TaggingImageResponseData struct {
	Tags []*TaggingImageResponseDataTags `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Repeated"`
}

func (s TaggingImageResponseData) String() string {
	return tea.Prettify(s)
}

func (s TaggingImageResponseData) GoString() string {
	return s.String()
}

func (s *TaggingImageResponseData) SetTags(v []*TaggingImageResponseDataTags) *TaggingImageResponseData {
	s.Tags = v
	return s
}

type TaggingImageResponseDataTags struct {
	Confidence *float32 `json:"Confidence,omitempty" xml:"Confidence,omitempty" require:"true"`
	Value      *string  `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s TaggingImageResponseDataTags) String() string {
	return tea.Prettify(s)
}

func (s TaggingImageResponseDataTags) GoString() string {
	return s.String()
}

func (s *TaggingImageResponseDataTags) SetConfidence(v float32) *TaggingImageResponseDataTags {
	s.Confidence = &v
	return s
}

func (s *TaggingImageResponseDataTags) SetValue(v string) *TaggingImageResponseDataTags {
	s.Value = &v
	return s
}

type TaggingImageAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s TaggingImageAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s TaggingImageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *TaggingImageAdvanceRequest) SetImageURLObject(v io.Reader) *TaggingImageAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeSceneRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s RecognizeSceneRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeSceneRequest) GoString() string {
	return s.String()
}

func (s *RecognizeSceneRequest) SetImageURL(v string) *RecognizeSceneRequest {
	s.ImageURL = &v
	return s
}

type RecognizeSceneResponse struct {
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeSceneResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeSceneResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeSceneResponse) GoString() string {
	return s.String()
}

func (s *RecognizeSceneResponse) SetRequestId(v string) *RecognizeSceneResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeSceneResponse) SetData(v *RecognizeSceneResponseData) *RecognizeSceneResponse {
	s.Data = v
	return s
}

type RecognizeSceneResponseData struct {
	Tags []*RecognizeSceneResponseDataTags `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeSceneResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeSceneResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeSceneResponseData) SetTags(v []*RecognizeSceneResponseDataTags) *RecognizeSceneResponseData {
	s.Tags = v
	return s
}

type RecognizeSceneResponseDataTags struct {
	Confidence *float32 `json:"Confidence,omitempty" xml:"Confidence,omitempty" require:"true"`
	Value      *string  `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s RecognizeSceneResponseDataTags) String() string {
	return tea.Prettify(s)
}

func (s RecognizeSceneResponseDataTags) GoString() string {
	return s.String()
}

func (s *RecognizeSceneResponseDataTags) SetConfidence(v float32) *RecognizeSceneResponseDataTags {
	s.Confidence = &v
	return s
}

func (s *RecognizeSceneResponseDataTags) SetValue(v string) *RecognizeSceneResponseDataTags {
	s.Value = &v
	return s
}

type RecognizeSceneAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s RecognizeSceneAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeSceneAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeSceneAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeSceneAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeImageColorRequest struct {
	Url        *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
	ColorCount *int    `json:"ColorCount,omitempty" xml:"ColorCount,omitempty"`
}

func (s RecognizeImageColorRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageColorRequest) GoString() string {
	return s.String()
}

func (s *RecognizeImageColorRequest) SetUrl(v string) *RecognizeImageColorRequest {
	s.Url = &v
	return s
}

func (s *RecognizeImageColorRequest) SetColorCount(v int) *RecognizeImageColorRequest {
	s.ColorCount = &v
	return s
}

type RecognizeImageColorResponse struct {
	RequestId *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeImageColorResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeImageColorResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageColorResponse) GoString() string {
	return s.String()
}

func (s *RecognizeImageColorResponse) SetRequestId(v string) *RecognizeImageColorResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeImageColorResponse) SetData(v *RecognizeImageColorResponseData) *RecognizeImageColorResponse {
	s.Data = v
	return s
}

type RecognizeImageColorResponseData struct {
	ColorTemplateList []*RecognizeImageColorResponseDataColorTemplateList `json:"ColorTemplateList,omitempty" xml:"ColorTemplateList,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeImageColorResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageColorResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeImageColorResponseData) SetColorTemplateList(v []*RecognizeImageColorResponseDataColorTemplateList) *RecognizeImageColorResponseData {
	s.ColorTemplateList = v
	return s
}

type RecognizeImageColorResponseDataColorTemplateList struct {
	Color      *string  `json:"Color,omitempty" xml:"Color,omitempty" require:"true"`
	Label      *string  `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Percentage *float32 `json:"Percentage,omitempty" xml:"Percentage,omitempty" require:"true"`
}

func (s RecognizeImageColorResponseDataColorTemplateList) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageColorResponseDataColorTemplateList) GoString() string {
	return s.String()
}

func (s *RecognizeImageColorResponseDataColorTemplateList) SetColor(v string) *RecognizeImageColorResponseDataColorTemplateList {
	s.Color = &v
	return s
}

func (s *RecognizeImageColorResponseDataColorTemplateList) SetLabel(v string) *RecognizeImageColorResponseDataColorTemplateList {
	s.Label = &v
	return s
}

func (s *RecognizeImageColorResponseDataColorTemplateList) SetPercentage(v float32) *RecognizeImageColorResponseDataColorTemplateList {
	s.Percentage = &v
	return s
}

type RecognizeImageColorAdvanceRequest struct {
	UrlObject  io.Reader `json:"UrlObject,omitempty" xml:"UrlObject,omitempty" require:"true"`
	ColorCount *int      `json:"ColorCount,omitempty" xml:"ColorCount,omitempty"`
}

func (s RecognizeImageColorAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageColorAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeImageColorAdvanceRequest) SetUrlObject(v io.Reader) *RecognizeImageColorAdvanceRequest {
	s.UrlObject = v
	return s
}

func (s *RecognizeImageColorAdvanceRequest) SetColorCount(v int) *RecognizeImageColorAdvanceRequest {
	s.ColorCount = &v
	return s
}

type DetectImageElementsRequest struct {
	Url *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s DetectImageElementsRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectImageElementsRequest) GoString() string {
	return s.String()
}

func (s *DetectImageElementsRequest) SetUrl(v string) *DetectImageElementsRequest {
	s.Url = &v
	return s
}

type DetectImageElementsResponse struct {
	RequestId *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectImageElementsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectImageElementsResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectImageElementsResponse) GoString() string {
	return s.String()
}

func (s *DetectImageElementsResponse) SetRequestId(v string) *DetectImageElementsResponse {
	s.RequestId = &v
	return s
}

func (s *DetectImageElementsResponse) SetData(v *DetectImageElementsResponseData) *DetectImageElementsResponse {
	s.Data = v
	return s
}

type DetectImageElementsResponseData struct {
	Elements []*DetectImageElementsResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s DetectImageElementsResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectImageElementsResponseData) GoString() string {
	return s.String()
}

func (s *DetectImageElementsResponseData) SetElements(v []*DetectImageElementsResponseDataElements) *DetectImageElementsResponseData {
	s.Elements = v
	return s
}

type DetectImageElementsResponseDataElements struct {
	Type   *string  `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	X      *int     `json:"X,omitempty" xml:"X,omitempty" require:"true"`
	Y      *int     `json:"Y,omitempty" xml:"Y,omitempty" require:"true"`
	Width  *int     `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height *int     `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Score  *float32 `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
}

func (s DetectImageElementsResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s DetectImageElementsResponseDataElements) GoString() string {
	return s.String()
}

func (s *DetectImageElementsResponseDataElements) SetType(v string) *DetectImageElementsResponseDataElements {
	s.Type = &v
	return s
}

func (s *DetectImageElementsResponseDataElements) SetX(v int) *DetectImageElementsResponseDataElements {
	s.X = &v
	return s
}

func (s *DetectImageElementsResponseDataElements) SetY(v int) *DetectImageElementsResponseDataElements {
	s.Y = &v
	return s
}

func (s *DetectImageElementsResponseDataElements) SetWidth(v int) *DetectImageElementsResponseDataElements {
	s.Width = &v
	return s
}

func (s *DetectImageElementsResponseDataElements) SetHeight(v int) *DetectImageElementsResponseDataElements {
	s.Height = &v
	return s
}

func (s *DetectImageElementsResponseDataElements) SetScore(v float32) *DetectImageElementsResponseDataElements {
	s.Score = &v
	return s
}

type DetectImageElementsAdvanceRequest struct {
	UrlObject io.Reader `json:"UrlObject,omitempty" xml:"UrlObject,omitempty" require:"true"`
}

func (s DetectImageElementsAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectImageElementsAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectImageElementsAdvanceRequest) SetUrlObject(v io.Reader) *DetectImageElementsAdvanceRequest {
	s.UrlObject = v
	return s
}

type RecognizeImageStyleRequest struct {
	Url *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s RecognizeImageStyleRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageStyleRequest) GoString() string {
	return s.String()
}

func (s *RecognizeImageStyleRequest) SetUrl(v string) *RecognizeImageStyleRequest {
	s.Url = &v
	return s
}

type RecognizeImageStyleResponse struct {
	RequestId *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeImageStyleResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeImageStyleResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageStyleResponse) GoString() string {
	return s.String()
}

func (s *RecognizeImageStyleResponse) SetRequestId(v string) *RecognizeImageStyleResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeImageStyleResponse) SetData(v *RecognizeImageStyleResponseData) *RecognizeImageStyleResponse {
	s.Data = v
	return s
}

type RecognizeImageStyleResponseData struct {
	Styles []*string `json:"Styles,omitempty" xml:"Styles,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeImageStyleResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageStyleResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeImageStyleResponseData) SetStyles(v []*string) *RecognizeImageStyleResponseData {
	s.Styles = v
	return s
}

type RecognizeImageStyleAdvanceRequest struct {
	UrlObject io.Reader `json:"UrlObject,omitempty" xml:"UrlObject,omitempty" require:"true"`
}

func (s RecognizeImageStyleAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageStyleAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeImageStyleAdvanceRequest) SetUrlObject(v io.Reader) *RecognizeImageStyleAdvanceRequest {
	s.UrlObject = v
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
	client.Endpoint, _err = client.GetEndpoint(tea.String("imagerecog"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) DetectFruits(request *DetectFruitsRequest, runtime *util.RuntimeOptions) (_result *DetectFruitsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectFruitsResponse{}
	_body, _err := client.DoRequest(tea.String("DetectFruits"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectFruitsAdvance(request *DetectFruitsAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectFruitsResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	detectFruitsreq := &DetectFruitsRequest{}
	rpcutil.Convert(request, detectFruitsreq)
	detectFruitsreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectFruitsResp, _err := client.DetectFruits(detectFruitsreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectFruitsResp
	return _result, _err
}

func (client *Client) ClassifyingRubbish(request *ClassifyingRubbishRequest, runtime *util.RuntimeOptions) (_result *ClassifyingRubbishResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ClassifyingRubbishResponse{}
	_body, _err := client.DoRequest(tea.String("ClassifyingRubbish"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ClassifyingRubbishAdvance(request *ClassifyingRubbishAdvanceRequest, runtime *util.RuntimeOptions) (_result *ClassifyingRubbishResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	classifyingRubbishreq := &ClassifyingRubbishRequest{}
	rpcutil.Convert(request, classifyingRubbishreq)
	classifyingRubbishreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	classifyingRubbishResp, _err := client.ClassifyingRubbish(classifyingRubbishreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = classifyingRubbishResp
	return _result, _err
}

func (client *Client) RecognizeVehicleType(request *RecognizeVehicleTypeRequest, runtime *util.RuntimeOptions) (_result *RecognizeVehicleTypeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeVehicleTypeResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeVehicleType"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVehicleTypeAdvance(request *RecognizeVehicleTypeAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVehicleTypeResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	recognizeVehicleTypereq := &RecognizeVehicleTypeRequest{}
	rpcutil.Convert(request, recognizeVehicleTypereq)
	recognizeVehicleTypereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeVehicleTypeResp, _err := client.RecognizeVehicleType(recognizeVehicleTypereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeVehicleTypeResp
	return _result, _err
}

func (client *Client) RecognizeLogo(request *RecognizeLogoRequest, runtime *util.RuntimeOptions) (_result *RecognizeLogoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeLogoResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeLogo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TaggingImage(request *TaggingImageRequest, runtime *util.RuntimeOptions) (_result *TaggingImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &TaggingImageResponse{}
	_body, _err := client.DoRequest(tea.String("TaggingImage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TaggingImageAdvance(request *TaggingImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *TaggingImageResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	taggingImagereq := &TaggingImageRequest{}
	rpcutil.Convert(request, taggingImagereq)
	taggingImagereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	taggingImageResp, _err := client.TaggingImage(taggingImagereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = taggingImageResp
	return _result, _err
}

func (client *Client) RecognizeScene(request *RecognizeSceneRequest, runtime *util.RuntimeOptions) (_result *RecognizeSceneResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeSceneResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeScene"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeSceneAdvance(request *RecognizeSceneAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeSceneResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	recognizeScenereq := &RecognizeSceneRequest{}
	rpcutil.Convert(request, recognizeScenereq)
	recognizeScenereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeSceneResp, _err := client.RecognizeScene(recognizeScenereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeSceneResp
	return _result, _err
}

func (client *Client) RecognizeImageColor(request *RecognizeImageColorRequest, runtime *util.RuntimeOptions) (_result *RecognizeImageColorResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeImageColorResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeImageColor"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeImageColorAdvance(request *RecognizeImageColorAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeImageColorResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	recognizeImageColorreq := &RecognizeImageColorRequest{}
	rpcutil.Convert(request, recognizeImageColorreq)
	recognizeImageColorreq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeImageColorResp, _err := client.RecognizeImageColor(recognizeImageColorreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeImageColorResp
	return _result, _err
}

func (client *Client) DetectImageElements(request *DetectImageElementsRequest, runtime *util.RuntimeOptions) (_result *DetectImageElementsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectImageElementsResponse{}
	_body, _err := client.DoRequest(tea.String("DetectImageElements"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectImageElementsAdvance(request *DetectImageElementsAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectImageElementsResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	detectImageElementsreq := &DetectImageElementsRequest{}
	rpcutil.Convert(request, detectImageElementsreq)
	detectImageElementsreq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectImageElementsResp, _err := client.DetectImageElements(detectImageElementsreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectImageElementsResp
	return _result, _err
}

func (client *Client) RecognizeImageStyle(request *RecognizeImageStyleRequest, runtime *util.RuntimeOptions) (_result *RecognizeImageStyleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeImageStyleResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeImageStyle"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-09-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeImageStyleAdvance(request *RecognizeImageStyleAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeImageStyleResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	recognizeImageStylereq := &RecognizeImageStyleRequest{}
	rpcutil.Convert(request, recognizeImageStylereq)
	recognizeImageStylereq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeImageStyleResp, _err := client.RecognizeImageStyle(recognizeImageStylereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeImageStyleResp
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
