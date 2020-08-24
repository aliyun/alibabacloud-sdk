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

type DetectIPCPedestrianRequest struct {
	ImageData *string `json:"ImageData,omitempty" xml:"ImageData,omitempty"`
	Width     *int    `json:"Width,omitempty" xml:"Width,omitempty"`
	Height    *int    `json:"Height,omitempty" xml:"Height,omitempty"`
}

func (s DetectIPCPedestrianRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectIPCPedestrianRequest) GoString() string {
	return s.String()
}

func (s *DetectIPCPedestrianRequest) SetImageData(v string) *DetectIPCPedestrianRequest {
	s.ImageData = &v
	return s
}

func (s *DetectIPCPedestrianRequest) SetWidth(v int) *DetectIPCPedestrianRequest {
	s.Width = &v
	return s
}

func (s *DetectIPCPedestrianRequest) SetHeight(v int) *DetectIPCPedestrianRequest {
	s.Height = &v
	return s
}

type DetectIPCPedestrianResponse struct {
	RequestId *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectIPCPedestrianResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectIPCPedestrianResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectIPCPedestrianResponse) GoString() string {
	return s.String()
}

func (s *DetectIPCPedestrianResponse) SetRequestId(v string) *DetectIPCPedestrianResponse {
	s.RequestId = &v
	return s
}

func (s *DetectIPCPedestrianResponse) SetData(v *DetectIPCPedestrianResponseData) *DetectIPCPedestrianResponse {
	s.Data = v
	return s
}

type DetectIPCPedestrianResponseData struct {
	ImageInfoList []*DetectIPCPedestrianResponseDataImageInfoList `json:"ImageInfoList,omitempty" xml:"ImageInfoList,omitempty" require:"true" type:"Repeated"`
}

func (s DetectIPCPedestrianResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectIPCPedestrianResponseData) GoString() string {
	return s.String()
}

func (s *DetectIPCPedestrianResponseData) SetImageInfoList(v []*DetectIPCPedestrianResponseDataImageInfoList) *DetectIPCPedestrianResponseData {
	s.ImageInfoList = v
	return s
}

type DetectIPCPedestrianResponseDataImageInfoList struct {
	ErrorCode    *string                                                 `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage *string                                                 `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	DataId       *string                                                 `json:"DataId,omitempty" xml:"DataId,omitempty" require:"true"`
	Elements     []*DetectIPCPedestrianResponseDataImageInfoListElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s DetectIPCPedestrianResponseDataImageInfoList) String() string {
	return tea.Prettify(s)
}

func (s DetectIPCPedestrianResponseDataImageInfoList) GoString() string {
	return s.String()
}

func (s *DetectIPCPedestrianResponseDataImageInfoList) SetErrorCode(v string) *DetectIPCPedestrianResponseDataImageInfoList {
	s.ErrorCode = &v
	return s
}

func (s *DetectIPCPedestrianResponseDataImageInfoList) SetErrorMessage(v string) *DetectIPCPedestrianResponseDataImageInfoList {
	s.ErrorMessage = &v
	return s
}

func (s *DetectIPCPedestrianResponseDataImageInfoList) SetDataId(v string) *DetectIPCPedestrianResponseDataImageInfoList {
	s.DataId = &v
	return s
}

func (s *DetectIPCPedestrianResponseDataImageInfoList) SetElements(v []*DetectIPCPedestrianResponseDataImageInfoListElements) *DetectIPCPedestrianResponseDataImageInfoList {
	s.Elements = v
	return s
}

type DetectIPCPedestrianResponseDataImageInfoListElements struct {
	Score *float32 `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Boxes []*int   `json:"Boxes,omitempty" xml:"Boxes,omitempty" require:"true" type:"Repeated"`
}

func (s DetectIPCPedestrianResponseDataImageInfoListElements) String() string {
	return tea.Prettify(s)
}

func (s DetectIPCPedestrianResponseDataImageInfoListElements) GoString() string {
	return s.String()
}

func (s *DetectIPCPedestrianResponseDataImageInfoListElements) SetScore(v float32) *DetectIPCPedestrianResponseDataImageInfoListElements {
	s.Score = &v
	return s
}

func (s *DetectIPCPedestrianResponseDataImageInfoListElements) SetBoxes(v []*int) *DetectIPCPedestrianResponseDataImageInfoListElements {
	s.Boxes = v
	return s
}

type BlurFaceRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s BlurFaceRequest) String() string {
	return tea.Prettify(s)
}

func (s BlurFaceRequest) GoString() string {
	return s.String()
}

func (s *BlurFaceRequest) SetImageURL(v string) *BlurFaceRequest {
	s.ImageURL = &v
	return s
}

type BlurFaceResponse struct {
	RequestId *string               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *BlurFaceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s BlurFaceResponse) String() string {
	return tea.Prettify(s)
}

func (s BlurFaceResponse) GoString() string {
	return s.String()
}

func (s *BlurFaceResponse) SetRequestId(v string) *BlurFaceResponse {
	s.RequestId = &v
	return s
}

func (s *BlurFaceResponse) SetData(v *BlurFaceResponseData) *BlurFaceResponse {
	s.Data = v
	return s
}

type BlurFaceResponseData struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s BlurFaceResponseData) String() string {
	return tea.Prettify(s)
}

func (s BlurFaceResponseData) GoString() string {
	return s.String()
}

func (s *BlurFaceResponseData) SetImageURL(v string) *BlurFaceResponseData {
	s.ImageURL = &v
	return s
}

type BlurFaceAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s BlurFaceAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s BlurFaceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *BlurFaceAdvanceRequest) SetImageURLObject(v io.Reader) *BlurFaceAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type ExtractPedestrianFeatureAttributeRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s ExtractPedestrianFeatureAttributeRequest) String() string {
	return tea.Prettify(s)
}

func (s ExtractPedestrianFeatureAttributeRequest) GoString() string {
	return s.String()
}

func (s *ExtractPedestrianFeatureAttributeRequest) SetImageURL(v string) *ExtractPedestrianFeatureAttributeRequest {
	s.ImageURL = &v
	return s
}

type ExtractPedestrianFeatureAttributeResponse struct {
	RequestId *string                                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ExtractPedestrianFeatureAttributeResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ExtractPedestrianFeatureAttributeResponse) String() string {
	return tea.Prettify(s)
}

func (s ExtractPedestrianFeatureAttributeResponse) GoString() string {
	return s.String()
}

func (s *ExtractPedestrianFeatureAttributeResponse) SetRequestId(v string) *ExtractPedestrianFeatureAttributeResponse {
	s.RequestId = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponse) SetData(v *ExtractPedestrianFeatureAttributeResponseData) *ExtractPedestrianFeatureAttributeResponse {
	s.Data = v
	return s
}

type ExtractPedestrianFeatureAttributeResponseData struct {
	ObjType         *string  `json:"ObjType,omitempty" xml:"ObjType,omitempty" require:"true"`
	ObjTypeScore    *float32 `json:"ObjTypeScore,omitempty" xml:"ObjTypeScore,omitempty" require:"true"`
	Feature         *string  `json:"Feature,omitempty" xml:"Feature,omitempty" require:"true"`
	QualityScore    *float32 `json:"QualityScore,omitempty" xml:"QualityScore,omitempty" require:"true"`
	UpperColor      *string  `json:"UpperColor,omitempty" xml:"UpperColor,omitempty" require:"true"`
	UpperColorScore *float32 `json:"UpperColorScore,omitempty" xml:"UpperColorScore,omitempty" require:"true"`
	UpperType       *string  `json:"UpperType,omitempty" xml:"UpperType,omitempty" require:"true"`
	UpperTypeScore  *float32 `json:"UpperTypeScore,omitempty" xml:"UpperTypeScore,omitempty" require:"true"`
	LowerColor      *string  `json:"LowerColor,omitempty" xml:"LowerColor,omitempty" require:"true"`
	LowerColorScore *float32 `json:"LowerColorScore,omitempty" xml:"LowerColorScore,omitempty" require:"true"`
	LowerType       *string  `json:"LowerType,omitempty" xml:"LowerType,omitempty" require:"true"`
	LowerTypeScore  *float32 `json:"LowerTypeScore,omitempty" xml:"LowerTypeScore,omitempty" require:"true"`
	Gender          *string  `json:"Gender,omitempty" xml:"Gender,omitempty" require:"true"`
	GenderScore     *float32 `json:"GenderScore,omitempty" xml:"GenderScore,omitempty" require:"true"`
	Hair            *string  `json:"Hair,omitempty" xml:"Hair,omitempty" require:"true"`
	HairScore       *float32 `json:"HairScore,omitempty" xml:"HairScore,omitempty" require:"true"`
	Age             *string  `json:"Age,omitempty" xml:"Age,omitempty" require:"true"`
	AgeScore        *float32 `json:"AgeScore,omitempty" xml:"AgeScore,omitempty" require:"true"`
}

func (s ExtractPedestrianFeatureAttributeResponseData) String() string {
	return tea.Prettify(s)
}

func (s ExtractPedestrianFeatureAttributeResponseData) GoString() string {
	return s.String()
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetObjType(v string) *ExtractPedestrianFeatureAttributeResponseData {
	s.ObjType = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetObjTypeScore(v float32) *ExtractPedestrianFeatureAttributeResponseData {
	s.ObjTypeScore = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetFeature(v string) *ExtractPedestrianFeatureAttributeResponseData {
	s.Feature = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetQualityScore(v float32) *ExtractPedestrianFeatureAttributeResponseData {
	s.QualityScore = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetUpperColor(v string) *ExtractPedestrianFeatureAttributeResponseData {
	s.UpperColor = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetUpperColorScore(v float32) *ExtractPedestrianFeatureAttributeResponseData {
	s.UpperColorScore = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetUpperType(v string) *ExtractPedestrianFeatureAttributeResponseData {
	s.UpperType = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetUpperTypeScore(v float32) *ExtractPedestrianFeatureAttributeResponseData {
	s.UpperTypeScore = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetLowerColor(v string) *ExtractPedestrianFeatureAttributeResponseData {
	s.LowerColor = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetLowerColorScore(v float32) *ExtractPedestrianFeatureAttributeResponseData {
	s.LowerColorScore = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetLowerType(v string) *ExtractPedestrianFeatureAttributeResponseData {
	s.LowerType = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetLowerTypeScore(v float32) *ExtractPedestrianFeatureAttributeResponseData {
	s.LowerTypeScore = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetGender(v string) *ExtractPedestrianFeatureAttributeResponseData {
	s.Gender = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetGenderScore(v float32) *ExtractPedestrianFeatureAttributeResponseData {
	s.GenderScore = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetHair(v string) *ExtractPedestrianFeatureAttributeResponseData {
	s.Hair = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetHairScore(v float32) *ExtractPedestrianFeatureAttributeResponseData {
	s.HairScore = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetAge(v string) *ExtractPedestrianFeatureAttributeResponseData {
	s.Age = &v
	return s
}

func (s *ExtractPedestrianFeatureAttributeResponseData) SetAgeScore(v float32) *ExtractPedestrianFeatureAttributeResponseData {
	s.AgeScore = &v
	return s
}

type ExtractPedestrianFeatureAttributeAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s ExtractPedestrianFeatureAttributeAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s ExtractPedestrianFeatureAttributeAdvanceRequest) GoString() string {
	return s.String()
}

func (s *ExtractPedestrianFeatureAttributeAdvanceRequest) SetImageURLObject(v io.Reader) *ExtractPedestrianFeatureAttributeAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type DetectCelebrityRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s DetectCelebrityRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectCelebrityRequest) GoString() string {
	return s.String()
}

func (s *DetectCelebrityRequest) SetImageURL(v string) *DetectCelebrityRequest {
	s.ImageURL = &v
	return s
}

type DetectCelebrityResponse struct {
	RequestId *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectCelebrityResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectCelebrityResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectCelebrityResponse) GoString() string {
	return s.String()
}

func (s *DetectCelebrityResponse) SetRequestId(v string) *DetectCelebrityResponse {
	s.RequestId = &v
	return s
}

func (s *DetectCelebrityResponse) SetData(v *DetectCelebrityResponseData) *DetectCelebrityResponse {
	s.Data = v
	return s
}

type DetectCelebrityResponseData struct {
	Width                *int                                               `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height               *int                                               `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	FaceRecognizeResults []*DetectCelebrityResponseDataFaceRecognizeResults `json:"FaceRecognizeResults,omitempty" xml:"FaceRecognizeResults,omitempty" require:"true" type:"Repeated"`
}

func (s DetectCelebrityResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectCelebrityResponseData) GoString() string {
	return s.String()
}

func (s *DetectCelebrityResponseData) SetWidth(v int) *DetectCelebrityResponseData {
	s.Width = &v
	return s
}

func (s *DetectCelebrityResponseData) SetHeight(v int) *DetectCelebrityResponseData {
	s.Height = &v
	return s
}

func (s *DetectCelebrityResponseData) SetFaceRecognizeResults(v []*DetectCelebrityResponseDataFaceRecognizeResults) *DetectCelebrityResponseData {
	s.FaceRecognizeResults = v
	return s
}

type DetectCelebrityResponseDataFaceRecognizeResults struct {
	Name      *string    `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	FaceBoxes []*float32 `json:"FaceBoxes,omitempty" xml:"FaceBoxes,omitempty" require:"true" type:"Repeated"`
}

func (s DetectCelebrityResponseDataFaceRecognizeResults) String() string {
	return tea.Prettify(s)
}

func (s DetectCelebrityResponseDataFaceRecognizeResults) GoString() string {
	return s.String()
}

func (s *DetectCelebrityResponseDataFaceRecognizeResults) SetName(v string) *DetectCelebrityResponseDataFaceRecognizeResults {
	s.Name = &v
	return s
}

func (s *DetectCelebrityResponseDataFaceRecognizeResults) SetFaceBoxes(v []*float32) *DetectCelebrityResponseDataFaceRecognizeResults {
	s.FaceBoxes = v
	return s
}

type DetectCelebrityAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s DetectCelebrityAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectCelebrityAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectCelebrityAdvanceRequest) SetImageURLObject(v io.Reader) *DetectCelebrityAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type VerifyFaceMaskRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	RefUrl   *string `json:"RefUrl,omitempty" xml:"RefUrl,omitempty" require:"true"`
}

func (s VerifyFaceMaskRequest) String() string {
	return tea.Prettify(s)
}

func (s VerifyFaceMaskRequest) GoString() string {
	return s.String()
}

func (s *VerifyFaceMaskRequest) SetImageURL(v string) *VerifyFaceMaskRequest {
	s.ImageURL = &v
	return s
}

func (s *VerifyFaceMaskRequest) SetRefUrl(v string) *VerifyFaceMaskRequest {
	s.RefUrl = &v
	return s
}

type VerifyFaceMaskResponse struct {
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *VerifyFaceMaskResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s VerifyFaceMaskResponse) String() string {
	return tea.Prettify(s)
}

func (s VerifyFaceMaskResponse) GoString() string {
	return s.String()
}

func (s *VerifyFaceMaskResponse) SetRequestId(v string) *VerifyFaceMaskResponse {
	s.RequestId = &v
	return s
}

func (s *VerifyFaceMaskResponse) SetData(v *VerifyFaceMaskResponseData) *VerifyFaceMaskResponse {
	s.Data = v
	return s
}

type VerifyFaceMaskResponseData struct {
	Confidence   *float32   `json:"Confidence,omitempty" xml:"Confidence,omitempty" require:"true"`
	Mask         *int       `json:"Mask,omitempty" xml:"Mask,omitempty" require:"true"`
	MaskRef      *int       `json:"MaskRef,omitempty" xml:"MaskRef,omitempty" require:"true"`
	Rectangle    []*int     `json:"Rectangle,omitempty" xml:"Rectangle,omitempty" require:"true" type:"Repeated"`
	RectangleRef []*int     `json:"RectangleRef,omitempty" xml:"RectangleRef,omitempty" require:"true" type:"Repeated"`
	Thresholds   []*float32 `json:"Thresholds,omitempty" xml:"Thresholds,omitempty" require:"true" type:"Repeated"`
}

func (s VerifyFaceMaskResponseData) String() string {
	return tea.Prettify(s)
}

func (s VerifyFaceMaskResponseData) GoString() string {
	return s.String()
}

func (s *VerifyFaceMaskResponseData) SetConfidence(v float32) *VerifyFaceMaskResponseData {
	s.Confidence = &v
	return s
}

func (s *VerifyFaceMaskResponseData) SetMask(v int) *VerifyFaceMaskResponseData {
	s.Mask = &v
	return s
}

func (s *VerifyFaceMaskResponseData) SetMaskRef(v int) *VerifyFaceMaskResponseData {
	s.MaskRef = &v
	return s
}

func (s *VerifyFaceMaskResponseData) SetRectangle(v []*int) *VerifyFaceMaskResponseData {
	s.Rectangle = v
	return s
}

func (s *VerifyFaceMaskResponseData) SetRectangleRef(v []*int) *VerifyFaceMaskResponseData {
	s.RectangleRef = v
	return s
}

func (s *VerifyFaceMaskResponseData) SetThresholds(v []*float32) *VerifyFaceMaskResponseData {
	s.Thresholds = v
	return s
}

type VerifyFaceMaskAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
	RefUrl         *string   `json:"RefUrl,omitempty" xml:"RefUrl,omitempty" require:"true"`
}

func (s VerifyFaceMaskAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s VerifyFaceMaskAdvanceRequest) GoString() string {
	return s.String()
}

func (s *VerifyFaceMaskAdvanceRequest) SetImageURLObject(v io.Reader) *VerifyFaceMaskAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *VerifyFaceMaskAdvanceRequest) SetRefUrl(v string) *VerifyFaceMaskAdvanceRequest {
	s.RefUrl = &v
	return s
}

type RecognizeActionRequest struct {
	URLList  []*RecognizeActionRequestURLList `json:"URLList,omitempty" xml:"URLList,omitempty" type:"Repeated"`
	Type     *int                             `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	VideoUrl *string                          `json:"VideoUrl,omitempty" xml:"VideoUrl,omitempty"`
}

func (s RecognizeActionRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeActionRequest) GoString() string {
	return s.String()
}

func (s *RecognizeActionRequest) SetURLList(v []*RecognizeActionRequestURLList) *RecognizeActionRequest {
	s.URLList = v
	return s
}

func (s *RecognizeActionRequest) SetType(v int) *RecognizeActionRequest {
	s.Type = &v
	return s
}

func (s *RecognizeActionRequest) SetVideoUrl(v string) *RecognizeActionRequest {
	s.VideoUrl = &v
	return s
}

type RecognizeActionRequestURLList struct {
	URL *string `json:"URL,omitempty" xml:"URL,omitempty"`
}

func (s RecognizeActionRequestURLList) String() string {
	return tea.Prettify(s)
}

func (s RecognizeActionRequestURLList) GoString() string {
	return s.String()
}

func (s *RecognizeActionRequestURLList) SetURL(v string) *RecognizeActionRequestURLList {
	s.URL = &v
	return s
}

type RecognizeActionResponse struct {
	RequestId *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeActionResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeActionResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeActionResponse) GoString() string {
	return s.String()
}

func (s *RecognizeActionResponse) SetRequestId(v string) *RecognizeActionResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeActionResponse) SetData(v *RecognizeActionResponseData) *RecognizeActionResponse {
	s.Data = v
	return s
}

type RecognizeActionResponseData struct {
	Elements []*RecognizeActionResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeActionResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeActionResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeActionResponseData) SetElements(v []*RecognizeActionResponseDataElements) *RecognizeActionResponseData {
	s.Elements = v
	return s
}

type RecognizeActionResponseDataElements struct {
	Timestamp *int                                        `json:"Timestamp,omitempty" xml:"Timestamp,omitempty" require:"true"`
	Boxes     []*RecognizeActionResponseDataElementsBoxes `json:"Boxes,omitempty" xml:"Boxes,omitempty" require:"true" type:"Repeated"`
	Scores    []*float32                                  `json:"Scores,omitempty" xml:"Scores,omitempty" require:"true" type:"Repeated"`
	Labels    []*string                                   `json:"Labels,omitempty" xml:"Labels,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeActionResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s RecognizeActionResponseDataElements) GoString() string {
	return s.String()
}

func (s *RecognizeActionResponseDataElements) SetTimestamp(v int) *RecognizeActionResponseDataElements {
	s.Timestamp = &v
	return s
}

func (s *RecognizeActionResponseDataElements) SetBoxes(v []*RecognizeActionResponseDataElementsBoxes) *RecognizeActionResponseDataElements {
	s.Boxes = v
	return s
}

func (s *RecognizeActionResponseDataElements) SetScores(v []*float32) *RecognizeActionResponseDataElements {
	s.Scores = v
	return s
}

func (s *RecognizeActionResponseDataElements) SetLabels(v []*string) *RecognizeActionResponseDataElements {
	s.Labels = v
	return s
}

type RecognizeActionResponseDataElementsBoxes struct {
	Box []*int `json:"Box,omitempty" xml:"Box,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeActionResponseDataElementsBoxes) String() string {
	return tea.Prettify(s)
}

func (s RecognizeActionResponseDataElementsBoxes) GoString() string {
	return s.String()
}

func (s *RecognizeActionResponseDataElementsBoxes) SetBox(v []*int) *RecognizeActionResponseDataElementsBoxes {
	s.Box = v
	return s
}

type DetectVideoLivingFaceRequest struct {
	VideoUrl *string `json:"VideoUrl,omitempty" xml:"VideoUrl,omitempty" require:"true"`
}

func (s DetectVideoLivingFaceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectVideoLivingFaceRequest) GoString() string {
	return s.String()
}

func (s *DetectVideoLivingFaceRequest) SetVideoUrl(v string) *DetectVideoLivingFaceRequest {
	s.VideoUrl = &v
	return s
}

type DetectVideoLivingFaceResponse struct {
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectVideoLivingFaceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectVideoLivingFaceResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectVideoLivingFaceResponse) GoString() string {
	return s.String()
}

func (s *DetectVideoLivingFaceResponse) SetRequestId(v string) *DetectVideoLivingFaceResponse {
	s.RequestId = &v
	return s
}

func (s *DetectVideoLivingFaceResponse) SetData(v *DetectVideoLivingFaceResponseData) *DetectVideoLivingFaceResponse {
	s.Data = v
	return s
}

type DetectVideoLivingFaceResponseData struct {
	Elements []*DetectVideoLivingFaceResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s DetectVideoLivingFaceResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectVideoLivingFaceResponseData) GoString() string {
	return s.String()
}

func (s *DetectVideoLivingFaceResponseData) SetElements(v []*DetectVideoLivingFaceResponseDataElements) *DetectVideoLivingFaceResponseData {
	s.Elements = v
	return s
}

type DetectVideoLivingFaceResponseDataElements struct {
	LiveConfidence *float32 `json:"LiveConfidence,omitempty" xml:"LiveConfidence,omitempty" require:"true"`
	FaceConfidence *float32 `json:"FaceConfidence,omitempty" xml:"FaceConfidence,omitempty" require:"true"`
	Rect           []*int   `json:"Rect,omitempty" xml:"Rect,omitempty" require:"true" type:"Repeated"`
}

func (s DetectVideoLivingFaceResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s DetectVideoLivingFaceResponseDataElements) GoString() string {
	return s.String()
}

func (s *DetectVideoLivingFaceResponseDataElements) SetLiveConfidence(v float32) *DetectVideoLivingFaceResponseDataElements {
	s.LiveConfidence = &v
	return s
}

func (s *DetectVideoLivingFaceResponseDataElements) SetFaceConfidence(v float32) *DetectVideoLivingFaceResponseDataElements {
	s.FaceConfidence = &v
	return s
}

func (s *DetectVideoLivingFaceResponseDataElements) SetRect(v []*int) *DetectVideoLivingFaceResponseDataElements {
	s.Rect = v
	return s
}

type DetectVideoLivingFaceAdvanceRequest struct {
	VideoUrlObject io.Reader `json:"VideoUrlObject,omitempty" xml:"VideoUrlObject,omitempty" require:"true"`
}

func (s DetectVideoLivingFaceAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectVideoLivingFaceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectVideoLivingFaceAdvanceRequest) SetVideoUrlObject(v io.Reader) *DetectVideoLivingFaceAdvanceRequest {
	s.VideoUrlObject = v
	return s
}

type SwapFacialFeaturesRequest struct {
	SourceImageURL *string `json:"SourceImageURL,omitempty" xml:"SourceImageURL,omitempty" require:"true"`
	EditPart       *string `json:"EditPart,omitempty" xml:"EditPart,omitempty" require:"true"`
	TargetImageURL *string `json:"TargetImageURL,omitempty" xml:"TargetImageURL,omitempty" require:"true"`
}

func (s SwapFacialFeaturesRequest) String() string {
	return tea.Prettify(s)
}

func (s SwapFacialFeaturesRequest) GoString() string {
	return s.String()
}

func (s *SwapFacialFeaturesRequest) SetSourceImageURL(v string) *SwapFacialFeaturesRequest {
	s.SourceImageURL = &v
	return s
}

func (s *SwapFacialFeaturesRequest) SetEditPart(v string) *SwapFacialFeaturesRequest {
	s.EditPart = &v
	return s
}

func (s *SwapFacialFeaturesRequest) SetTargetImageURL(v string) *SwapFacialFeaturesRequest {
	s.TargetImageURL = &v
	return s
}

type SwapFacialFeaturesResponse struct {
	RequestId *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *SwapFacialFeaturesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s SwapFacialFeaturesResponse) String() string {
	return tea.Prettify(s)
}

func (s SwapFacialFeaturesResponse) GoString() string {
	return s.String()
}

func (s *SwapFacialFeaturesResponse) SetRequestId(v string) *SwapFacialFeaturesResponse {
	s.RequestId = &v
	return s
}

func (s *SwapFacialFeaturesResponse) SetData(v *SwapFacialFeaturesResponseData) *SwapFacialFeaturesResponse {
	s.Data = v
	return s
}

type SwapFacialFeaturesResponseData struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s SwapFacialFeaturesResponseData) String() string {
	return tea.Prettify(s)
}

func (s SwapFacialFeaturesResponseData) GoString() string {
	return s.String()
}

func (s *SwapFacialFeaturesResponseData) SetImageURL(v string) *SwapFacialFeaturesResponseData {
	s.ImageURL = &v
	return s
}

type SwapFacialFeaturesAdvanceRequest struct {
	SourceImageURLObject io.Reader `json:"SourceImageURLObject,omitempty" xml:"SourceImageURLObject,omitempty" require:"true"`
	EditPart             *string   `json:"EditPart,omitempty" xml:"EditPart,omitempty" require:"true"`
	TargetImageURL       *string   `json:"TargetImageURL,omitempty" xml:"TargetImageURL,omitempty" require:"true"`
}

func (s SwapFacialFeaturesAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s SwapFacialFeaturesAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SwapFacialFeaturesAdvanceRequest) SetSourceImageURLObject(v io.Reader) *SwapFacialFeaturesAdvanceRequest {
	s.SourceImageURLObject = v
	return s
}

func (s *SwapFacialFeaturesAdvanceRequest) SetEditPart(v string) *SwapFacialFeaturesAdvanceRequest {
	s.EditPart = &v
	return s
}

func (s *SwapFacialFeaturesAdvanceRequest) SetTargetImageURL(v string) *SwapFacialFeaturesAdvanceRequest {
	s.TargetImageURL = &v
	return s
}

type AddFaceEntityRequest struct {
	DbName   *string `json:"DbName,omitempty" xml:"DbName,omitempty" require:"true"`
	EntityId *string `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
	Labels   *string `json:"Labels,omitempty" xml:"Labels,omitempty"`
}

func (s AddFaceEntityRequest) String() string {
	return tea.Prettify(s)
}

func (s AddFaceEntityRequest) GoString() string {
	return s.String()
}

func (s *AddFaceEntityRequest) SetDbName(v string) *AddFaceEntityRequest {
	s.DbName = &v
	return s
}

func (s *AddFaceEntityRequest) SetEntityId(v string) *AddFaceEntityRequest {
	s.EntityId = &v
	return s
}

func (s *AddFaceEntityRequest) SetLabels(v string) *AddFaceEntityRequest {
	s.Labels = &v
	return s
}

type AddFaceEntityResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s AddFaceEntityResponse) String() string {
	return tea.Prettify(s)
}

func (s AddFaceEntityResponse) GoString() string {
	return s.String()
}

func (s *AddFaceEntityResponse) SetRequestId(v string) *AddFaceEntityResponse {
	s.RequestId = &v
	return s
}

type DeleteFaceEntityRequest struct {
	DbName   *string `json:"DbName,omitempty" xml:"DbName,omitempty" require:"true"`
	EntityId *string `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
}

func (s DeleteFaceEntityRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteFaceEntityRequest) GoString() string {
	return s.String()
}

func (s *DeleteFaceEntityRequest) SetDbName(v string) *DeleteFaceEntityRequest {
	s.DbName = &v
	return s
}

func (s *DeleteFaceEntityRequest) SetEntityId(v string) *DeleteFaceEntityRequest {
	s.EntityId = &v
	return s
}

type DeleteFaceEntityResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteFaceEntityResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteFaceEntityResponse) GoString() string {
	return s.String()
}

func (s *DeleteFaceEntityResponse) SetRequestId(v string) *DeleteFaceEntityResponse {
	s.RequestId = &v
	return s
}

type ListFaceEntitiesRequest struct {
	DbName         *string `json:"DbName,omitempty" xml:"DbName,omitempty" require:"true"`
	Offset         *int    `json:"Offset,omitempty" xml:"Offset,omitempty"`
	Limit          *int    `json:"Limit,omitempty" xml:"Limit,omitempty"`
	Token          *string `json:"Token,omitempty" xml:"Token,omitempty"`
	Labels         *string `json:"Labels,omitempty" xml:"Labels,omitempty"`
	EntityIdPrefix *string `json:"EntityIdPrefix,omitempty" xml:"EntityIdPrefix,omitempty"`
	Order          *string `json:"Order,omitempty" xml:"Order,omitempty"`
}

func (s ListFaceEntitiesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListFaceEntitiesRequest) GoString() string {
	return s.String()
}

func (s *ListFaceEntitiesRequest) SetDbName(v string) *ListFaceEntitiesRequest {
	s.DbName = &v
	return s
}

func (s *ListFaceEntitiesRequest) SetOffset(v int) *ListFaceEntitiesRequest {
	s.Offset = &v
	return s
}

func (s *ListFaceEntitiesRequest) SetLimit(v int) *ListFaceEntitiesRequest {
	s.Limit = &v
	return s
}

func (s *ListFaceEntitiesRequest) SetToken(v string) *ListFaceEntitiesRequest {
	s.Token = &v
	return s
}

func (s *ListFaceEntitiesRequest) SetLabels(v string) *ListFaceEntitiesRequest {
	s.Labels = &v
	return s
}

func (s *ListFaceEntitiesRequest) SetEntityIdPrefix(v string) *ListFaceEntitiesRequest {
	s.EntityIdPrefix = &v
	return s
}

func (s *ListFaceEntitiesRequest) SetOrder(v string) *ListFaceEntitiesRequest {
	s.Order = &v
	return s
}

type ListFaceEntitiesResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ListFaceEntitiesResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListFaceEntitiesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListFaceEntitiesResponse) GoString() string {
	return s.String()
}

func (s *ListFaceEntitiesResponse) SetRequestId(v string) *ListFaceEntitiesResponse {
	s.RequestId = &v
	return s
}

func (s *ListFaceEntitiesResponse) SetData(v *ListFaceEntitiesResponseData) *ListFaceEntitiesResponse {
	s.Data = v
	return s
}

type ListFaceEntitiesResponseData struct {
	Token      *string                                 `json:"Token,omitempty" xml:"Token,omitempty" require:"true"`
	TotalCount *int                                    `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	Entities   []*ListFaceEntitiesResponseDataEntities `json:"Entities,omitempty" xml:"Entities,omitempty" require:"true" type:"Repeated"`
}

func (s ListFaceEntitiesResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListFaceEntitiesResponseData) GoString() string {
	return s.String()
}

func (s *ListFaceEntitiesResponseData) SetToken(v string) *ListFaceEntitiesResponseData {
	s.Token = &v
	return s
}

func (s *ListFaceEntitiesResponseData) SetTotalCount(v int) *ListFaceEntitiesResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListFaceEntitiesResponseData) SetEntities(v []*ListFaceEntitiesResponseDataEntities) *ListFaceEntitiesResponseData {
	s.Entities = v
	return s
}

type ListFaceEntitiesResponseDataEntities struct {
	DbName    *string `json:"DbName,omitempty" xml:"DbName,omitempty" require:"true"`
	EntityId  *string `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
	FaceCount *int    `json:"FaceCount,omitempty" xml:"FaceCount,omitempty" require:"true"`
	Labels    *string `json:"Labels,omitempty" xml:"Labels,omitempty" require:"true"`
	CreatedAt *int64  `json:"CreatedAt,omitempty" xml:"CreatedAt,omitempty" require:"true"`
	UpdatedAt *int64  `json:"UpdatedAt,omitempty" xml:"UpdatedAt,omitempty" require:"true"`
}

func (s ListFaceEntitiesResponseDataEntities) String() string {
	return tea.Prettify(s)
}

func (s ListFaceEntitiesResponseDataEntities) GoString() string {
	return s.String()
}

func (s *ListFaceEntitiesResponseDataEntities) SetDbName(v string) *ListFaceEntitiesResponseDataEntities {
	s.DbName = &v
	return s
}

func (s *ListFaceEntitiesResponseDataEntities) SetEntityId(v string) *ListFaceEntitiesResponseDataEntities {
	s.EntityId = &v
	return s
}

func (s *ListFaceEntitiesResponseDataEntities) SetFaceCount(v int) *ListFaceEntitiesResponseDataEntities {
	s.FaceCount = &v
	return s
}

func (s *ListFaceEntitiesResponseDataEntities) SetLabels(v string) *ListFaceEntitiesResponseDataEntities {
	s.Labels = &v
	return s
}

func (s *ListFaceEntitiesResponseDataEntities) SetCreatedAt(v int64) *ListFaceEntitiesResponseDataEntities {
	s.CreatedAt = &v
	return s
}

func (s *ListFaceEntitiesResponseDataEntities) SetUpdatedAt(v int64) *ListFaceEntitiesResponseDataEntities {
	s.UpdatedAt = &v
	return s
}

type GetFaceEntityRequest struct {
	DbName   *string `json:"DbName,omitempty" xml:"DbName,omitempty" require:"true"`
	EntityId *string `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
}

func (s GetFaceEntityRequest) String() string {
	return tea.Prettify(s)
}

func (s GetFaceEntityRequest) GoString() string {
	return s.String()
}

func (s *GetFaceEntityRequest) SetDbName(v string) *GetFaceEntityRequest {
	s.DbName = &v
	return s
}

func (s *GetFaceEntityRequest) SetEntityId(v string) *GetFaceEntityRequest {
	s.EntityId = &v
	return s
}

type GetFaceEntityResponse struct {
	RequestId *string                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *GetFaceEntityResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetFaceEntityResponse) String() string {
	return tea.Prettify(s)
}

func (s GetFaceEntityResponse) GoString() string {
	return s.String()
}

func (s *GetFaceEntityResponse) SetRequestId(v string) *GetFaceEntityResponse {
	s.RequestId = &v
	return s
}

func (s *GetFaceEntityResponse) SetData(v *GetFaceEntityResponseData) *GetFaceEntityResponse {
	s.Data = v
	return s
}

type GetFaceEntityResponseData struct {
	DbName   *string                           `json:"DbName,omitempty" xml:"DbName,omitempty" require:"true"`
	EntityId *string                           `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
	Labels   *string                           `json:"Labels,omitempty" xml:"Labels,omitempty" require:"true"`
	Faces    []*GetFaceEntityResponseDataFaces `json:"Faces,omitempty" xml:"Faces,omitempty" require:"true" type:"Repeated"`
}

func (s GetFaceEntityResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetFaceEntityResponseData) GoString() string {
	return s.String()
}

func (s *GetFaceEntityResponseData) SetDbName(v string) *GetFaceEntityResponseData {
	s.DbName = &v
	return s
}

func (s *GetFaceEntityResponseData) SetEntityId(v string) *GetFaceEntityResponseData {
	s.EntityId = &v
	return s
}

func (s *GetFaceEntityResponseData) SetLabels(v string) *GetFaceEntityResponseData {
	s.Labels = &v
	return s
}

func (s *GetFaceEntityResponseData) SetFaces(v []*GetFaceEntityResponseDataFaces) *GetFaceEntityResponseData {
	s.Faces = v
	return s
}

type GetFaceEntityResponseDataFaces struct {
	FaceId *string `json:"FaceId,omitempty" xml:"FaceId,omitempty" require:"true"`
}

func (s GetFaceEntityResponseDataFaces) String() string {
	return tea.Prettify(s)
}

func (s GetFaceEntityResponseDataFaces) GoString() string {
	return s.String()
}

func (s *GetFaceEntityResponseDataFaces) SetFaceId(v string) *GetFaceEntityResponseDataFaces {
	s.FaceId = &v
	return s
}

type UpdateFaceEntityRequest struct {
	DbName   *string `json:"DbName,omitempty" xml:"DbName,omitempty" require:"true"`
	EntityId *string `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
	Labels   *string `json:"Labels,omitempty" xml:"Labels,omitempty"`
}

func (s UpdateFaceEntityRequest) String() string {
	return tea.Prettify(s)
}

func (s UpdateFaceEntityRequest) GoString() string {
	return s.String()
}

func (s *UpdateFaceEntityRequest) SetDbName(v string) *UpdateFaceEntityRequest {
	s.DbName = &v
	return s
}

func (s *UpdateFaceEntityRequest) SetEntityId(v string) *UpdateFaceEntityRequest {
	s.EntityId = &v
	return s
}

func (s *UpdateFaceEntityRequest) SetLabels(v string) *UpdateFaceEntityRequest {
	s.Labels = &v
	return s
}

type UpdateFaceEntityResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s UpdateFaceEntityResponse) String() string {
	return tea.Prettify(s)
}

func (s UpdateFaceEntityResponse) GoString() string {
	return s.String()
}

func (s *UpdateFaceEntityResponse) SetRequestId(v string) *UpdateFaceEntityResponse {
	s.RequestId = &v
	return s
}

type FaceMakeupRequest struct {
	ImageURL     *string  `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	MakeupType   *string  `json:"MakeupType,omitempty" xml:"MakeupType,omitempty" require:"true"`
	ResourceType *string  `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	Strength     *float32 `json:"Strength,omitempty" xml:"Strength,omitempty" require:"true"`
}

func (s FaceMakeupRequest) String() string {
	return tea.Prettify(s)
}

func (s FaceMakeupRequest) GoString() string {
	return s.String()
}

func (s *FaceMakeupRequest) SetImageURL(v string) *FaceMakeupRequest {
	s.ImageURL = &v
	return s
}

func (s *FaceMakeupRequest) SetMakeupType(v string) *FaceMakeupRequest {
	s.MakeupType = &v
	return s
}

func (s *FaceMakeupRequest) SetResourceType(v string) *FaceMakeupRequest {
	s.ResourceType = &v
	return s
}

func (s *FaceMakeupRequest) SetStrength(v float32) *FaceMakeupRequest {
	s.Strength = &v
	return s
}

type FaceMakeupResponse struct {
	RequestId *string                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *FaceMakeupResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s FaceMakeupResponse) String() string {
	return tea.Prettify(s)
}

func (s FaceMakeupResponse) GoString() string {
	return s.String()
}

func (s *FaceMakeupResponse) SetRequestId(v string) *FaceMakeupResponse {
	s.RequestId = &v
	return s
}

func (s *FaceMakeupResponse) SetData(v *FaceMakeupResponseData) *FaceMakeupResponse {
	s.Data = v
	return s
}

type FaceMakeupResponseData struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s FaceMakeupResponseData) String() string {
	return tea.Prettify(s)
}

func (s FaceMakeupResponseData) GoString() string {
	return s.String()
}

func (s *FaceMakeupResponseData) SetImageURL(v string) *FaceMakeupResponseData {
	s.ImageURL = &v
	return s
}

type FaceMakeupAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
	MakeupType     *string   `json:"MakeupType,omitempty" xml:"MakeupType,omitempty" require:"true"`
	ResourceType   *string   `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	Strength       *float32  `json:"Strength,omitempty" xml:"Strength,omitempty" require:"true"`
}

func (s FaceMakeupAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s FaceMakeupAdvanceRequest) GoString() string {
	return s.String()
}

func (s *FaceMakeupAdvanceRequest) SetImageURLObject(v io.Reader) *FaceMakeupAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *FaceMakeupAdvanceRequest) SetMakeupType(v string) *FaceMakeupAdvanceRequest {
	s.MakeupType = &v
	return s
}

func (s *FaceMakeupAdvanceRequest) SetResourceType(v string) *FaceMakeupAdvanceRequest {
	s.ResourceType = &v
	return s
}

func (s *FaceMakeupAdvanceRequest) SetStrength(v float32) *FaceMakeupAdvanceRequest {
	s.Strength = &v
	return s
}

type HandPostureRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s HandPostureRequest) String() string {
	return tea.Prettify(s)
}

func (s HandPostureRequest) GoString() string {
	return s.String()
}

func (s *HandPostureRequest) SetImageURL(v string) *HandPostureRequest {
	s.ImageURL = &v
	return s
}

type HandPostureResponse struct {
	RequestId *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *HandPostureResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s HandPostureResponse) String() string {
	return tea.Prettify(s)
}

func (s HandPostureResponse) GoString() string {
	return s.String()
}

func (s *HandPostureResponse) SetRequestId(v string) *HandPostureResponse {
	s.RequestId = &v
	return s
}

func (s *HandPostureResponse) SetData(v *HandPostureResponseData) *HandPostureResponse {
	s.Data = v
	return s
}

type HandPostureResponseData struct {
	Outputs    []*HandPostureResponseDataOutputs  `json:"Outputs,omitempty" xml:"Outputs,omitempty" require:"true" type:"Repeated"`
	MetaObject *HandPostureResponseDataMetaObject `json:"MetaObject,omitempty" xml:"MetaObject,omitempty" require:"true" type:"Struct"`
}

func (s HandPostureResponseData) String() string {
	return tea.Prettify(s)
}

func (s HandPostureResponseData) GoString() string {
	return s.String()
}

func (s *HandPostureResponseData) SetOutputs(v []*HandPostureResponseDataOutputs) *HandPostureResponseData {
	s.Outputs = v
	return s
}

func (s *HandPostureResponseData) SetMetaObject(v *HandPostureResponseDataMetaObject) *HandPostureResponseData {
	s.MetaObject = v
	return s
}

type HandPostureResponseDataOutputs struct {
	HandCount *int                                     `json:"HandCount,omitempty" xml:"HandCount,omitempty" require:"true"`
	Results   []*HandPostureResponseDataOutputsResults `json:"Results,omitempty" xml:"Results,omitempty" require:"true" type:"Repeated"`
}

func (s HandPostureResponseDataOutputs) String() string {
	return tea.Prettify(s)
}

func (s HandPostureResponseDataOutputs) GoString() string {
	return s.String()
}

func (s *HandPostureResponseDataOutputs) SetHandCount(v int) *HandPostureResponseDataOutputs {
	s.HandCount = &v
	return s
}

func (s *HandPostureResponseDataOutputs) SetResults(v []*HandPostureResponseDataOutputsResults) *HandPostureResponseDataOutputs {
	s.Results = v
	return s
}

type HandPostureResponseDataOutputsResults struct {
	Box   *HandPostureResponseDataOutputsResultsBox   `json:"Box,omitempty" xml:"Box,omitempty" require:"true" type:"Struct"`
	Hands *HandPostureResponseDataOutputsResultsHands `json:"Hands,omitempty" xml:"Hands,omitempty" require:"true" type:"Struct"`
}

func (s HandPostureResponseDataOutputsResults) String() string {
	return tea.Prettify(s)
}

func (s HandPostureResponseDataOutputsResults) GoString() string {
	return s.String()
}

func (s *HandPostureResponseDataOutputsResults) SetBox(v *HandPostureResponseDataOutputsResultsBox) *HandPostureResponseDataOutputsResults {
	s.Box = v
	return s
}

func (s *HandPostureResponseDataOutputsResults) SetHands(v *HandPostureResponseDataOutputsResultsHands) *HandPostureResponseDataOutputsResults {
	s.Hands = v
	return s
}

type HandPostureResponseDataOutputsResultsBox struct {
	Confident *float32                                             `json:"Confident,omitempty" xml:"Confident,omitempty" require:"true"`
	Positions []*HandPostureResponseDataOutputsResultsBoxPositions `json:"Positions,omitempty" xml:"Positions,omitempty" require:"true" type:"Repeated"`
}

func (s HandPostureResponseDataOutputsResultsBox) String() string {
	return tea.Prettify(s)
}

func (s HandPostureResponseDataOutputsResultsBox) GoString() string {
	return s.String()
}

func (s *HandPostureResponseDataOutputsResultsBox) SetConfident(v float32) *HandPostureResponseDataOutputsResultsBox {
	s.Confident = &v
	return s
}

func (s *HandPostureResponseDataOutputsResultsBox) SetPositions(v []*HandPostureResponseDataOutputsResultsBoxPositions) *HandPostureResponseDataOutputsResultsBox {
	s.Positions = v
	return s
}

type HandPostureResponseDataOutputsResultsBoxPositions struct {
	Points []*float32 `json:"Points,omitempty" xml:"Points,omitempty" require:"true" type:"Repeated"`
}

func (s HandPostureResponseDataOutputsResultsBoxPositions) String() string {
	return tea.Prettify(s)
}

func (s HandPostureResponseDataOutputsResultsBoxPositions) GoString() string {
	return s.String()
}

func (s *HandPostureResponseDataOutputsResultsBoxPositions) SetPoints(v []*float32) *HandPostureResponseDataOutputsResultsBoxPositions {
	s.Points = v
	return s
}

type HandPostureResponseDataOutputsResultsHands struct {
	Confident *float32                                               `json:"Confident,omitempty" xml:"Confident,omitempty" require:"true"`
	KeyPoints []*HandPostureResponseDataOutputsResultsHandsKeyPoints `json:"KeyPoints,omitempty" xml:"KeyPoints,omitempty" require:"true" type:"Repeated"`
}

func (s HandPostureResponseDataOutputsResultsHands) String() string {
	return tea.Prettify(s)
}

func (s HandPostureResponseDataOutputsResultsHands) GoString() string {
	return s.String()
}

func (s *HandPostureResponseDataOutputsResultsHands) SetConfident(v float32) *HandPostureResponseDataOutputsResultsHands {
	s.Confident = &v
	return s
}

func (s *HandPostureResponseDataOutputsResultsHands) SetKeyPoints(v []*HandPostureResponseDataOutputsResultsHandsKeyPoints) *HandPostureResponseDataOutputsResultsHands {
	s.KeyPoints = v
	return s
}

type HandPostureResponseDataOutputsResultsHandsKeyPoints struct {
	Label     *string                                                         `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Positions []*HandPostureResponseDataOutputsResultsHandsKeyPointsPositions `json:"Positions,omitempty" xml:"Positions,omitempty" require:"true" type:"Repeated"`
}

func (s HandPostureResponseDataOutputsResultsHandsKeyPoints) String() string {
	return tea.Prettify(s)
}

func (s HandPostureResponseDataOutputsResultsHandsKeyPoints) GoString() string {
	return s.String()
}

func (s *HandPostureResponseDataOutputsResultsHandsKeyPoints) SetLabel(v string) *HandPostureResponseDataOutputsResultsHandsKeyPoints {
	s.Label = &v
	return s
}

func (s *HandPostureResponseDataOutputsResultsHandsKeyPoints) SetPositions(v []*HandPostureResponseDataOutputsResultsHandsKeyPointsPositions) *HandPostureResponseDataOutputsResultsHandsKeyPoints {
	s.Positions = v
	return s
}

type HandPostureResponseDataOutputsResultsHandsKeyPointsPositions struct {
	Points []*float32 `json:"Points,omitempty" xml:"Points,omitempty" require:"true" type:"Repeated"`
}

func (s HandPostureResponseDataOutputsResultsHandsKeyPointsPositions) String() string {
	return tea.Prettify(s)
}

func (s HandPostureResponseDataOutputsResultsHandsKeyPointsPositions) GoString() string {
	return s.String()
}

func (s *HandPostureResponseDataOutputsResultsHandsKeyPointsPositions) SetPoints(v []*float32) *HandPostureResponseDataOutputsResultsHandsKeyPointsPositions {
	s.Points = v
	return s
}

type HandPostureResponseDataMetaObject struct {
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
}

func (s HandPostureResponseDataMetaObject) String() string {
	return tea.Prettify(s)
}

func (s HandPostureResponseDataMetaObject) GoString() string {
	return s.String()
}

func (s *HandPostureResponseDataMetaObject) SetHeight(v int) *HandPostureResponseDataMetaObject {
	s.Height = &v
	return s
}

func (s *HandPostureResponseDataMetaObject) SetWidth(v int) *HandPostureResponseDataMetaObject {
	s.Width = &v
	return s
}

type HandPostureAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s HandPostureAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s HandPostureAdvanceRequest) GoString() string {
	return s.String()
}

func (s *HandPostureAdvanceRequest) SetImageURLObject(v io.Reader) *HandPostureAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type BodyPostureRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s BodyPostureRequest) String() string {
	return tea.Prettify(s)
}

func (s BodyPostureRequest) GoString() string {
	return s.String()
}

func (s *BodyPostureRequest) SetImageURL(v string) *BodyPostureRequest {
	s.ImageURL = &v
	return s
}

type BodyPostureResponse struct {
	RequestId *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *BodyPostureResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s BodyPostureResponse) String() string {
	return tea.Prettify(s)
}

func (s BodyPostureResponse) GoString() string {
	return s.String()
}

func (s *BodyPostureResponse) SetRequestId(v string) *BodyPostureResponse {
	s.RequestId = &v
	return s
}

func (s *BodyPostureResponse) SetData(v *BodyPostureResponseData) *BodyPostureResponse {
	s.Data = v
	return s
}

type BodyPostureResponseData struct {
	Outputs    []*BodyPostureResponseDataOutputs  `json:"Outputs,omitempty" xml:"Outputs,omitempty" require:"true" type:"Repeated"`
	MetaObject *BodyPostureResponseDataMetaObject `json:"MetaObject,omitempty" xml:"MetaObject,omitempty" require:"true" type:"Struct"`
}

func (s BodyPostureResponseData) String() string {
	return tea.Prettify(s)
}

func (s BodyPostureResponseData) GoString() string {
	return s.String()
}

func (s *BodyPostureResponseData) SetOutputs(v []*BodyPostureResponseDataOutputs) *BodyPostureResponseData {
	s.Outputs = v
	return s
}

func (s *BodyPostureResponseData) SetMetaObject(v *BodyPostureResponseDataMetaObject) *BodyPostureResponseData {
	s.MetaObject = v
	return s
}

type BodyPostureResponseDataOutputs struct {
	HumanCount *int                                     `json:"HumanCount,omitempty" xml:"HumanCount,omitempty" require:"true"`
	Results    []*BodyPostureResponseDataOutputsResults `json:"Results,omitempty" xml:"Results,omitempty" require:"true" type:"Repeated"`
}

func (s BodyPostureResponseDataOutputs) String() string {
	return tea.Prettify(s)
}

func (s BodyPostureResponseDataOutputs) GoString() string {
	return s.String()
}

func (s *BodyPostureResponseDataOutputs) SetHumanCount(v int) *BodyPostureResponseDataOutputs {
	s.HumanCount = &v
	return s
}

func (s *BodyPostureResponseDataOutputs) SetResults(v []*BodyPostureResponseDataOutputsResults) *BodyPostureResponseDataOutputs {
	s.Results = v
	return s
}

type BodyPostureResponseDataOutputsResults struct {
	Bodies []*BodyPostureResponseDataOutputsResultsBodies `json:"Bodies,omitempty" xml:"Bodies,omitempty" require:"true" type:"Repeated"`
}

func (s BodyPostureResponseDataOutputsResults) String() string {
	return tea.Prettify(s)
}

func (s BodyPostureResponseDataOutputsResults) GoString() string {
	return s.String()
}

func (s *BodyPostureResponseDataOutputsResults) SetBodies(v []*BodyPostureResponseDataOutputsResultsBodies) *BodyPostureResponseDataOutputsResults {
	s.Bodies = v
	return s
}

type BodyPostureResponseDataOutputsResultsBodies struct {
	Confident *float32                                                `json:"Confident,omitempty" xml:"Confident,omitempty" require:"true"`
	Label     *string                                                 `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Positions []*BodyPostureResponseDataOutputsResultsBodiesPositions `json:"Positions,omitempty" xml:"Positions,omitempty" require:"true" type:"Repeated"`
}

func (s BodyPostureResponseDataOutputsResultsBodies) String() string {
	return tea.Prettify(s)
}

func (s BodyPostureResponseDataOutputsResultsBodies) GoString() string {
	return s.String()
}

func (s *BodyPostureResponseDataOutputsResultsBodies) SetConfident(v float32) *BodyPostureResponseDataOutputsResultsBodies {
	s.Confident = &v
	return s
}

func (s *BodyPostureResponseDataOutputsResultsBodies) SetLabel(v string) *BodyPostureResponseDataOutputsResultsBodies {
	s.Label = &v
	return s
}

func (s *BodyPostureResponseDataOutputsResultsBodies) SetPositions(v []*BodyPostureResponseDataOutputsResultsBodiesPositions) *BodyPostureResponseDataOutputsResultsBodies {
	s.Positions = v
	return s
}

type BodyPostureResponseDataOutputsResultsBodiesPositions struct {
	Points []*float32 `json:"Points,omitempty" xml:"Points,omitempty" require:"true" type:"Repeated"`
}

func (s BodyPostureResponseDataOutputsResultsBodiesPositions) String() string {
	return tea.Prettify(s)
}

func (s BodyPostureResponseDataOutputsResultsBodiesPositions) GoString() string {
	return s.String()
}

func (s *BodyPostureResponseDataOutputsResultsBodiesPositions) SetPoints(v []*float32) *BodyPostureResponseDataOutputsResultsBodiesPositions {
	s.Points = v
	return s
}

type BodyPostureResponseDataMetaObject struct {
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
}

func (s BodyPostureResponseDataMetaObject) String() string {
	return tea.Prettify(s)
}

func (s BodyPostureResponseDataMetaObject) GoString() string {
	return s.String()
}

func (s *BodyPostureResponseDataMetaObject) SetHeight(v int) *BodyPostureResponseDataMetaObject {
	s.Height = &v
	return s
}

func (s *BodyPostureResponseDataMetaObject) SetWidth(v int) *BodyPostureResponseDataMetaObject {
	s.Width = &v
	return s
}

type BodyPostureAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s BodyPostureAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s BodyPostureAdvanceRequest) GoString() string {
	return s.String()
}

func (s *BodyPostureAdvanceRequest) SetImageURLObject(v io.Reader) *BodyPostureAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type DetectPedestrianRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s DetectPedestrianRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectPedestrianRequest) GoString() string {
	return s.String()
}

func (s *DetectPedestrianRequest) SetImageURL(v string) *DetectPedestrianRequest {
	s.ImageURL = &v
	return s
}

type DetectPedestrianResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectPedestrianResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectPedestrianResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectPedestrianResponse) GoString() string {
	return s.String()
}

func (s *DetectPedestrianResponse) SetRequestId(v string) *DetectPedestrianResponse {
	s.RequestId = &v
	return s
}

func (s *DetectPedestrianResponse) SetData(v *DetectPedestrianResponseData) *DetectPedestrianResponse {
	s.Data = v
	return s
}

type DetectPedestrianResponseData struct {
	Width    *int                                    `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height   *int                                    `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Elements []*DetectPedestrianResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s DetectPedestrianResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectPedestrianResponseData) GoString() string {
	return s.String()
}

func (s *DetectPedestrianResponseData) SetWidth(v int) *DetectPedestrianResponseData {
	s.Width = &v
	return s
}

func (s *DetectPedestrianResponseData) SetHeight(v int) *DetectPedestrianResponseData {
	s.Height = &v
	return s
}

func (s *DetectPedestrianResponseData) SetElements(v []*DetectPedestrianResponseDataElements) *DetectPedestrianResponseData {
	s.Elements = v
	return s
}

type DetectPedestrianResponseDataElements struct {
	Score *float32 `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Type  *string  `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Boxes []*int   `json:"Boxes,omitempty" xml:"Boxes,omitempty" require:"true" type:"Repeated"`
}

func (s DetectPedestrianResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s DetectPedestrianResponseDataElements) GoString() string {
	return s.String()
}

func (s *DetectPedestrianResponseDataElements) SetScore(v float32) *DetectPedestrianResponseDataElements {
	s.Score = &v
	return s
}

func (s *DetectPedestrianResponseDataElements) SetType(v string) *DetectPedestrianResponseDataElements {
	s.Type = &v
	return s
}

func (s *DetectPedestrianResponseDataElements) SetBoxes(v []*int) *DetectPedestrianResponseDataElements {
	s.Boxes = v
	return s
}

type DetectPedestrianAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s DetectPedestrianAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectPedestrianAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectPedestrianAdvanceRequest) SetImageURLObject(v io.Reader) *DetectPedestrianAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type FaceBeautyRequest struct {
	ImageURL *string  `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	Sharp    *float32 `json:"Sharp,omitempty" xml:"Sharp,omitempty" require:"true"`
	Smooth   *float32 `json:"Smooth,omitempty" xml:"Smooth,omitempty" require:"true"`
	White    *float32 `json:"White,omitempty" xml:"White,omitempty" require:"true"`
}

func (s FaceBeautyRequest) String() string {
	return tea.Prettify(s)
}

func (s FaceBeautyRequest) GoString() string {
	return s.String()
}

func (s *FaceBeautyRequest) SetImageURL(v string) *FaceBeautyRequest {
	s.ImageURL = &v
	return s
}

func (s *FaceBeautyRequest) SetSharp(v float32) *FaceBeautyRequest {
	s.Sharp = &v
	return s
}

func (s *FaceBeautyRequest) SetSmooth(v float32) *FaceBeautyRequest {
	s.Smooth = &v
	return s
}

func (s *FaceBeautyRequest) SetWhite(v float32) *FaceBeautyRequest {
	s.White = &v
	return s
}

type FaceBeautyResponse struct {
	RequestId *string                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *FaceBeautyResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s FaceBeautyResponse) String() string {
	return tea.Prettify(s)
}

func (s FaceBeautyResponse) GoString() string {
	return s.String()
}

func (s *FaceBeautyResponse) SetRequestId(v string) *FaceBeautyResponse {
	s.RequestId = &v
	return s
}

func (s *FaceBeautyResponse) SetData(v *FaceBeautyResponseData) *FaceBeautyResponse {
	s.Data = v
	return s
}

type FaceBeautyResponseData struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s FaceBeautyResponseData) String() string {
	return tea.Prettify(s)
}

func (s FaceBeautyResponseData) GoString() string {
	return s.String()
}

func (s *FaceBeautyResponseData) SetImageURL(v string) *FaceBeautyResponseData {
	s.ImageURL = &v
	return s
}

type FaceBeautyAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
	Sharp          *float32  `json:"Sharp,omitempty" xml:"Sharp,omitempty" require:"true"`
	Smooth         *float32  `json:"Smooth,omitempty" xml:"Smooth,omitempty" require:"true"`
	White          *float32  `json:"White,omitempty" xml:"White,omitempty" require:"true"`
}

func (s FaceBeautyAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s FaceBeautyAdvanceRequest) GoString() string {
	return s.String()
}

func (s *FaceBeautyAdvanceRequest) SetImageURLObject(v io.Reader) *FaceBeautyAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *FaceBeautyAdvanceRequest) SetSharp(v float32) *FaceBeautyAdvanceRequest {
	s.Sharp = &v
	return s
}

func (s *FaceBeautyAdvanceRequest) SetSmooth(v float32) *FaceBeautyAdvanceRequest {
	s.Smooth = &v
	return s
}

func (s *FaceBeautyAdvanceRequest) SetWhite(v float32) *FaceBeautyAdvanceRequest {
	s.White = &v
	return s
}

type FaceFilterRequest struct {
	ImageURL     *string  `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	ResourceType *string  `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	Strength     *float32 `json:"Strength,omitempty" xml:"Strength,omitempty" require:"true"`
}

func (s FaceFilterRequest) String() string {
	return tea.Prettify(s)
}

func (s FaceFilterRequest) GoString() string {
	return s.String()
}

func (s *FaceFilterRequest) SetImageURL(v string) *FaceFilterRequest {
	s.ImageURL = &v
	return s
}

func (s *FaceFilterRequest) SetResourceType(v string) *FaceFilterRequest {
	s.ResourceType = &v
	return s
}

func (s *FaceFilterRequest) SetStrength(v float32) *FaceFilterRequest {
	s.Strength = &v
	return s
}

type FaceFilterResponse struct {
	RequestId *string                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *FaceFilterResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s FaceFilterResponse) String() string {
	return tea.Prettify(s)
}

func (s FaceFilterResponse) GoString() string {
	return s.String()
}

func (s *FaceFilterResponse) SetRequestId(v string) *FaceFilterResponse {
	s.RequestId = &v
	return s
}

func (s *FaceFilterResponse) SetData(v *FaceFilterResponseData) *FaceFilterResponse {
	s.Data = v
	return s
}

type FaceFilterResponseData struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s FaceFilterResponseData) String() string {
	return tea.Prettify(s)
}

func (s FaceFilterResponseData) GoString() string {
	return s.String()
}

func (s *FaceFilterResponseData) SetImageURL(v string) *FaceFilterResponseData {
	s.ImageURL = &v
	return s
}

type FaceFilterAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
	ResourceType   *string   `json:"ResourceType,omitempty" xml:"ResourceType,omitempty" require:"true"`
	Strength       *float32  `json:"Strength,omitempty" xml:"Strength,omitempty" require:"true"`
}

func (s FaceFilterAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s FaceFilterAdvanceRequest) GoString() string {
	return s.String()
}

func (s *FaceFilterAdvanceRequest) SetImageURLObject(v io.Reader) *FaceFilterAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *FaceFilterAdvanceRequest) SetResourceType(v string) *FaceFilterAdvanceRequest {
	s.ResourceType = &v
	return s
}

func (s *FaceFilterAdvanceRequest) SetStrength(v float32) *FaceFilterAdvanceRequest {
	s.Strength = &v
	return s
}

type EnhanceFaceRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s EnhanceFaceRequest) String() string {
	return tea.Prettify(s)
}

func (s EnhanceFaceRequest) GoString() string {
	return s.String()
}

func (s *EnhanceFaceRequest) SetImageURL(v string) *EnhanceFaceRequest {
	s.ImageURL = &v
	return s
}

type EnhanceFaceResponse struct {
	RequestId *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *EnhanceFaceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s EnhanceFaceResponse) String() string {
	return tea.Prettify(s)
}

func (s EnhanceFaceResponse) GoString() string {
	return s.String()
}

func (s *EnhanceFaceResponse) SetRequestId(v string) *EnhanceFaceResponse {
	s.RequestId = &v
	return s
}

func (s *EnhanceFaceResponse) SetData(v *EnhanceFaceResponseData) *EnhanceFaceResponse {
	s.Data = v
	return s
}

type EnhanceFaceResponseData struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s EnhanceFaceResponseData) String() string {
	return tea.Prettify(s)
}

func (s EnhanceFaceResponseData) GoString() string {
	return s.String()
}

func (s *EnhanceFaceResponseData) SetImageURL(v string) *EnhanceFaceResponseData {
	s.ImageURL = &v
	return s
}

type EnhanceFaceAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s EnhanceFaceAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s EnhanceFaceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *EnhanceFaceAdvanceRequest) SetImageURLObject(v io.Reader) *EnhanceFaceAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type FaceTidyupRequest struct {
	ImageURL  *string  `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	ShapeType *int     `json:"ShapeType,omitempty" xml:"ShapeType,omitempty" require:"true"`
	Strength  *float32 `json:"Strength,omitempty" xml:"Strength,omitempty" require:"true"`
}

func (s FaceTidyupRequest) String() string {
	return tea.Prettify(s)
}

func (s FaceTidyupRequest) GoString() string {
	return s.String()
}

func (s *FaceTidyupRequest) SetImageURL(v string) *FaceTidyupRequest {
	s.ImageURL = &v
	return s
}

func (s *FaceTidyupRequest) SetShapeType(v int) *FaceTidyupRequest {
	s.ShapeType = &v
	return s
}

func (s *FaceTidyupRequest) SetStrength(v float32) *FaceTidyupRequest {
	s.Strength = &v
	return s
}

type FaceTidyupResponse struct {
	RequestId *string                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *FaceTidyupResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s FaceTidyupResponse) String() string {
	return tea.Prettify(s)
}

func (s FaceTidyupResponse) GoString() string {
	return s.String()
}

func (s *FaceTidyupResponse) SetRequestId(v string) *FaceTidyupResponse {
	s.RequestId = &v
	return s
}

func (s *FaceTidyupResponse) SetData(v *FaceTidyupResponseData) *FaceTidyupResponse {
	s.Data = v
	return s
}

type FaceTidyupResponseData struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s FaceTidyupResponseData) String() string {
	return tea.Prettify(s)
}

func (s FaceTidyupResponseData) GoString() string {
	return s.String()
}

func (s *FaceTidyupResponseData) SetImageURL(v string) *FaceTidyupResponseData {
	s.ImageURL = &v
	return s
}

type FaceTidyupAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
	ShapeType      *int      `json:"ShapeType,omitempty" xml:"ShapeType,omitempty" require:"true"`
	Strength       *float32  `json:"Strength,omitempty" xml:"Strength,omitempty" require:"true"`
}

func (s FaceTidyupAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s FaceTidyupAdvanceRequest) GoString() string {
	return s.String()
}

func (s *FaceTidyupAdvanceRequest) SetImageURLObject(v io.Reader) *FaceTidyupAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *FaceTidyupAdvanceRequest) SetShapeType(v int) *FaceTidyupAdvanceRequest {
	s.ShapeType = &v
	return s
}

func (s *FaceTidyupAdvanceRequest) SetStrength(v float32) *FaceTidyupAdvanceRequest {
	s.Strength = &v
	return s
}

type SearchFaceRequest struct {
	DbName   *string `json:"DbName,omitempty" xml:"DbName,omitempty" require:"true"`
	ImageUrl *string `json:"ImageUrl,omitempty" xml:"ImageUrl,omitempty" require:"true"`
	Limit    *int    `json:"Limit,omitempty" xml:"Limit,omitempty" require:"true"`
}

func (s SearchFaceRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchFaceRequest) GoString() string {
	return s.String()
}

func (s *SearchFaceRequest) SetDbName(v string) *SearchFaceRequest {
	s.DbName = &v
	return s
}

func (s *SearchFaceRequest) SetImageUrl(v string) *SearchFaceRequest {
	s.ImageUrl = &v
	return s
}

func (s *SearchFaceRequest) SetLimit(v int) *SearchFaceRequest {
	s.Limit = &v
	return s
}

type SearchFaceResponse struct {
	RequestId *string                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *SearchFaceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s SearchFaceResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchFaceResponse) GoString() string {
	return s.String()
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
	MatchList []*SearchFaceResponseDataMatchList `json:"MatchList,omitempty" xml:"MatchList,omitempty" require:"true" type:"Repeated"`
}

func (s SearchFaceResponseData) String() string {
	return tea.Prettify(s)
}

func (s SearchFaceResponseData) GoString() string {
	return s.String()
}

func (s *SearchFaceResponseData) SetMatchList(v []*SearchFaceResponseDataMatchList) *SearchFaceResponseData {
	s.MatchList = v
	return s
}

type SearchFaceResponseDataMatchList struct {
	FaceItems []*SearchFaceResponseDataMatchListFaceItems `json:"FaceItems,omitempty" xml:"FaceItems,omitempty" require:"true" type:"Repeated"`
	Location  *SearchFaceResponseDataMatchListLocation    `json:"Location,omitempty" xml:"Location,omitempty" require:"true" type:"Struct"`
}

func (s SearchFaceResponseDataMatchList) String() string {
	return tea.Prettify(s)
}

func (s SearchFaceResponseDataMatchList) GoString() string {
	return s.String()
}

func (s *SearchFaceResponseDataMatchList) SetFaceItems(v []*SearchFaceResponseDataMatchListFaceItems) *SearchFaceResponseDataMatchList {
	s.FaceItems = v
	return s
}

func (s *SearchFaceResponseDataMatchList) SetLocation(v *SearchFaceResponseDataMatchListLocation) *SearchFaceResponseDataMatchList {
	s.Location = v
	return s
}

type SearchFaceResponseDataMatchListFaceItems struct {
	FaceId    *string  `json:"FaceId,omitempty" xml:"FaceId,omitempty" require:"true"`
	Score     *float32 `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	ExtraData *string  `json:"ExtraData,omitempty" xml:"ExtraData,omitempty" require:"true"`
	EntityId  *string  `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
}

func (s SearchFaceResponseDataMatchListFaceItems) String() string {
	return tea.Prettify(s)
}

func (s SearchFaceResponseDataMatchListFaceItems) GoString() string {
	return s.String()
}

func (s *SearchFaceResponseDataMatchListFaceItems) SetFaceId(v string) *SearchFaceResponseDataMatchListFaceItems {
	s.FaceId = &v
	return s
}

func (s *SearchFaceResponseDataMatchListFaceItems) SetScore(v float32) *SearchFaceResponseDataMatchListFaceItems {
	s.Score = &v
	return s
}

func (s *SearchFaceResponseDataMatchListFaceItems) SetExtraData(v string) *SearchFaceResponseDataMatchListFaceItems {
	s.ExtraData = &v
	return s
}

func (s *SearchFaceResponseDataMatchListFaceItems) SetEntityId(v string) *SearchFaceResponseDataMatchListFaceItems {
	s.EntityId = &v
	return s
}

type SearchFaceResponseDataMatchListLocation struct {
	X      *int `json:"X,omitempty" xml:"X,omitempty" require:"true"`
	Y      *int `json:"Y,omitempty" xml:"Y,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
}

func (s SearchFaceResponseDataMatchListLocation) String() string {
	return tea.Prettify(s)
}

func (s SearchFaceResponseDataMatchListLocation) GoString() string {
	return s.String()
}

func (s *SearchFaceResponseDataMatchListLocation) SetX(v int) *SearchFaceResponseDataMatchListLocation {
	s.X = &v
	return s
}

func (s *SearchFaceResponseDataMatchListLocation) SetY(v int) *SearchFaceResponseDataMatchListLocation {
	s.Y = &v
	return s
}

func (s *SearchFaceResponseDataMatchListLocation) SetWidth(v int) *SearchFaceResponseDataMatchListLocation {
	s.Width = &v
	return s
}

func (s *SearchFaceResponseDataMatchListLocation) SetHeight(v int) *SearchFaceResponseDataMatchListLocation {
	s.Height = &v
	return s
}

type SearchFaceAdvanceRequest struct {
	ImageUrlObject io.Reader `json:"ImageUrlObject,omitempty" xml:"ImageUrlObject,omitempty" require:"true"`
	DbName         *string   `json:"DbName,omitempty" xml:"DbName,omitempty" require:"true"`
	Limit          *int      `json:"Limit,omitempty" xml:"Limit,omitempty" require:"true"`
}

func (s SearchFaceAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchFaceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SearchFaceAdvanceRequest) SetImageUrlObject(v io.Reader) *SearchFaceAdvanceRequest {
	s.ImageUrlObject = v
	return s
}

func (s *SearchFaceAdvanceRequest) SetDbName(v string) *SearchFaceAdvanceRequest {
	s.DbName = &v
	return s
}

func (s *SearchFaceAdvanceRequest) SetLimit(v int) *SearchFaceAdvanceRequest {
	s.Limit = &v
	return s
}

type ListFaceDbsRequest struct {
}

func (s ListFaceDbsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListFaceDbsRequest) GoString() string {
	return s.String()
}

type ListFaceDbsResponse struct {
	RequestId *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ListFaceDbsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListFaceDbsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListFaceDbsResponse) GoString() string {
	return s.String()
}

func (s *ListFaceDbsResponse) SetRequestId(v string) *ListFaceDbsResponse {
	s.RequestId = &v
	return s
}

func (s *ListFaceDbsResponse) SetData(v *ListFaceDbsResponseData) *ListFaceDbsResponse {
	s.Data = v
	return s
}

type ListFaceDbsResponseData struct {
	DbList []*ListFaceDbsResponseDataDbList `json:"DbList,omitempty" xml:"DbList,omitempty" require:"true" type:"Repeated"`
}

func (s ListFaceDbsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListFaceDbsResponseData) GoString() string {
	return s.String()
}

func (s *ListFaceDbsResponseData) SetDbList(v []*ListFaceDbsResponseDataDbList) *ListFaceDbsResponseData {
	s.DbList = v
	return s
}

type ListFaceDbsResponseDataDbList struct {
	Name *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s ListFaceDbsResponseDataDbList) String() string {
	return tea.Prettify(s)
}

func (s ListFaceDbsResponseDataDbList) GoString() string {
	return s.String()
}

func (s *ListFaceDbsResponseDataDbList) SetName(v string) *ListFaceDbsResponseDataDbList {
	s.Name = &v
	return s
}

type CreateFaceDbRequest struct {
	Name *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s CreateFaceDbRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateFaceDbRequest) GoString() string {
	return s.String()
}

func (s *CreateFaceDbRequest) SetName(v string) *CreateFaceDbRequest {
	s.Name = &v
	return s
}

type CreateFaceDbResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CreateFaceDbResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateFaceDbResponse) GoString() string {
	return s.String()
}

func (s *CreateFaceDbResponse) SetRequestId(v string) *CreateFaceDbResponse {
	s.RequestId = &v
	return s
}

type DeleteFaceRequest struct {
	DbName *string `json:"DbName,omitempty" xml:"DbName,omitempty" require:"true"`
	FaceId *string `json:"FaceId,omitempty" xml:"FaceId,omitempty" require:"true"`
}

func (s DeleteFaceRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteFaceRequest) GoString() string {
	return s.String()
}

func (s *DeleteFaceRequest) SetDbName(v string) *DeleteFaceRequest {
	s.DbName = &v
	return s
}

func (s *DeleteFaceRequest) SetFaceId(v string) *DeleteFaceRequest {
	s.FaceId = &v
	return s
}

type DeleteFaceResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteFaceResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteFaceResponse) GoString() string {
	return s.String()
}

func (s *DeleteFaceResponse) SetRequestId(v string) *DeleteFaceResponse {
	s.RequestId = &v
	return s
}

type DeleteFaceDbRequest struct {
	Name *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s DeleteFaceDbRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteFaceDbRequest) GoString() string {
	return s.String()
}

func (s *DeleteFaceDbRequest) SetName(v string) *DeleteFaceDbRequest {
	s.Name = &v
	return s
}

type DeleteFaceDbResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteFaceDbResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteFaceDbResponse) GoString() string {
	return s.String()
}

func (s *DeleteFaceDbResponse) SetRequestId(v string) *DeleteFaceDbResponse {
	s.RequestId = &v
	return s
}

type AddFaceRequest struct {
	DbName    *string `json:"DbName,omitempty" xml:"DbName,omitempty" require:"true"`
	ImageUrl  *string `json:"ImageUrl,omitempty" xml:"ImageUrl,omitempty" require:"true"`
	EntityId  *string `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
	ExtraData *string `json:"ExtraData,omitempty" xml:"ExtraData,omitempty"`
}

func (s AddFaceRequest) String() string {
	return tea.Prettify(s)
}

func (s AddFaceRequest) GoString() string {
	return s.String()
}

func (s *AddFaceRequest) SetDbName(v string) *AddFaceRequest {
	s.DbName = &v
	return s
}

func (s *AddFaceRequest) SetImageUrl(v string) *AddFaceRequest {
	s.ImageUrl = &v
	return s
}

func (s *AddFaceRequest) SetEntityId(v string) *AddFaceRequest {
	s.EntityId = &v
	return s
}

func (s *AddFaceRequest) SetExtraData(v string) *AddFaceRequest {
	s.ExtraData = &v
	return s
}

type AddFaceResponse struct {
	RequestId *string              `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *AddFaceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s AddFaceResponse) String() string {
	return tea.Prettify(s)
}

func (s AddFaceResponse) GoString() string {
	return s.String()
}

func (s *AddFaceResponse) SetRequestId(v string) *AddFaceResponse {
	s.RequestId = &v
	return s
}

func (s *AddFaceResponse) SetData(v *AddFaceResponseData) *AddFaceResponse {
	s.Data = v
	return s
}

type AddFaceResponseData struct {
	FaceId *string `json:"FaceId,omitempty" xml:"FaceId,omitempty" require:"true"`
}

func (s AddFaceResponseData) String() string {
	return tea.Prettify(s)
}

func (s AddFaceResponseData) GoString() string {
	return s.String()
}

func (s *AddFaceResponseData) SetFaceId(v string) *AddFaceResponseData {
	s.FaceId = &v
	return s
}

type AddFaceAdvanceRequest struct {
	ImageUrlObject io.Reader `json:"ImageUrlObject,omitempty" xml:"ImageUrlObject,omitempty" require:"true"`
	DbName         *string   `json:"DbName,omitempty" xml:"DbName,omitempty" require:"true"`
	EntityId       *string   `json:"EntityId,omitempty" xml:"EntityId,omitempty" require:"true"`
	ExtraData      *string   `json:"ExtraData,omitempty" xml:"ExtraData,omitempty"`
}

func (s AddFaceAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s AddFaceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *AddFaceAdvanceRequest) SetImageUrlObject(v io.Reader) *AddFaceAdvanceRequest {
	s.ImageUrlObject = v
	return s
}

func (s *AddFaceAdvanceRequest) SetDbName(v string) *AddFaceAdvanceRequest {
	s.DbName = &v
	return s
}

func (s *AddFaceAdvanceRequest) SetEntityId(v string) *AddFaceAdvanceRequest {
	s.EntityId = &v
	return s
}

func (s *AddFaceAdvanceRequest) SetExtraData(v string) *AddFaceAdvanceRequest {
	s.ExtraData = &v
	return s
}

type RecognizeExpressionRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s RecognizeExpressionRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeExpressionRequest) GoString() string {
	return s.String()
}

func (s *RecognizeExpressionRequest) SetImageURL(v string) *RecognizeExpressionRequest {
	s.ImageURL = &v
	return s
}

type RecognizeExpressionResponse struct {
	RequestId *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeExpressionResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeExpressionResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeExpressionResponse) GoString() string {
	return s.String()
}

func (s *RecognizeExpressionResponse) SetRequestId(v string) *RecognizeExpressionResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeExpressionResponse) SetData(v *RecognizeExpressionResponseData) *RecognizeExpressionResponse {
	s.Data = v
	return s
}

type RecognizeExpressionResponseData struct {
	Elements []*RecognizeExpressionResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeExpressionResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeExpressionResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeExpressionResponseData) SetElements(v []*RecognizeExpressionResponseDataElements) *RecognizeExpressionResponseData {
	s.Elements = v
	return s
}

type RecognizeExpressionResponseDataElements struct {
	Expression      *string                                               `json:"Expression,omitempty" xml:"Expression,omitempty" require:"true"`
	FaceProbability *float32                                              `json:"FaceProbability,omitempty" xml:"FaceProbability,omitempty" require:"true"`
	FaceRectangle   *RecognizeExpressionResponseDataElementsFaceRectangle `json:"FaceRectangle,omitempty" xml:"FaceRectangle,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeExpressionResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s RecognizeExpressionResponseDataElements) GoString() string {
	return s.String()
}

func (s *RecognizeExpressionResponseDataElements) SetExpression(v string) *RecognizeExpressionResponseDataElements {
	s.Expression = &v
	return s
}

func (s *RecognizeExpressionResponseDataElements) SetFaceProbability(v float32) *RecognizeExpressionResponseDataElements {
	s.FaceProbability = &v
	return s
}

func (s *RecognizeExpressionResponseDataElements) SetFaceRectangle(v *RecognizeExpressionResponseDataElementsFaceRectangle) *RecognizeExpressionResponseDataElements {
	s.FaceRectangle = v
	return s
}

type RecognizeExpressionResponseDataElementsFaceRectangle struct {
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Left   *int `json:"Left,omitempty" xml:"Left,omitempty" require:"true"`
	Top    *int `json:"Top,omitempty" xml:"Top,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
}

func (s RecognizeExpressionResponseDataElementsFaceRectangle) String() string {
	return tea.Prettify(s)
}

func (s RecognizeExpressionResponseDataElementsFaceRectangle) GoString() string {
	return s.String()
}

func (s *RecognizeExpressionResponseDataElementsFaceRectangle) SetHeight(v int) *RecognizeExpressionResponseDataElementsFaceRectangle {
	s.Height = &v
	return s
}

func (s *RecognizeExpressionResponseDataElementsFaceRectangle) SetLeft(v int) *RecognizeExpressionResponseDataElementsFaceRectangle {
	s.Left = &v
	return s
}

func (s *RecognizeExpressionResponseDataElementsFaceRectangle) SetTop(v int) *RecognizeExpressionResponseDataElementsFaceRectangle {
	s.Top = &v
	return s
}

func (s *RecognizeExpressionResponseDataElementsFaceRectangle) SetWidth(v int) *RecognizeExpressionResponseDataElementsFaceRectangle {
	s.Width = &v
	return s
}

type RecognizeExpressionAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s RecognizeExpressionAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeExpressionAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeExpressionAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeExpressionAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizePublicFaceRequest struct {
	Task []*RecognizePublicFaceRequestTask `json:"Task,omitempty" xml:"Task,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizePublicFaceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizePublicFaceRequest) GoString() string {
	return s.String()
}

func (s *RecognizePublicFaceRequest) SetTask(v []*RecognizePublicFaceRequestTask) *RecognizePublicFaceRequest {
	s.Task = v
	return s
}

type RecognizePublicFaceRequestTask struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s RecognizePublicFaceRequestTask) String() string {
	return tea.Prettify(s)
}

func (s RecognizePublicFaceRequestTask) GoString() string {
	return s.String()
}

func (s *RecognizePublicFaceRequestTask) SetImageURL(v string) *RecognizePublicFaceRequestTask {
	s.ImageURL = &v
	return s
}

type RecognizePublicFaceResponse struct {
	RequestId *string                          `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizePublicFaceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecognizePublicFaceResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizePublicFaceResponse) GoString() string {
	return s.String()
}

func (s *RecognizePublicFaceResponse) SetRequestId(v string) *RecognizePublicFaceResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizePublicFaceResponse) SetData(v *RecognizePublicFaceResponseData) *RecognizePublicFaceResponse {
	s.Data = v
	return s
}

type RecognizePublicFaceResponseData struct {
	Elements []*RecognizePublicFaceResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizePublicFaceResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizePublicFaceResponseData) GoString() string {
	return s.String()
}

func (s *RecognizePublicFaceResponseData) SetElements(v []*RecognizePublicFaceResponseDataElements) *RecognizePublicFaceResponseData {
	s.Elements = v
	return s
}

type RecognizePublicFaceResponseDataElements struct {
	TaskId   *string                                           `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
	ImageURL *string                                           `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	Results  []*RecognizePublicFaceResponseDataElementsResults `json:"Results,omitempty" xml:"Results,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizePublicFaceResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s RecognizePublicFaceResponseDataElements) GoString() string {
	return s.String()
}

func (s *RecognizePublicFaceResponseDataElements) SetTaskId(v string) *RecognizePublicFaceResponseDataElements {
	s.TaskId = &v
	return s
}

func (s *RecognizePublicFaceResponseDataElements) SetImageURL(v string) *RecognizePublicFaceResponseDataElements {
	s.ImageURL = &v
	return s
}

func (s *RecognizePublicFaceResponseDataElements) SetResults(v []*RecognizePublicFaceResponseDataElementsResults) *RecognizePublicFaceResponseDataElements {
	s.Results = v
	return s
}

type RecognizePublicFaceResponseDataElementsResults struct {
	Label      *string                                                     `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Suggestion *string                                                     `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Rate       *float32                                                    `json:"Rate,omitempty" xml:"Rate,omitempty" require:"true"`
	SubResults []*RecognizePublicFaceResponseDataElementsResultsSubResults `json:"SubResults,omitempty" xml:"SubResults,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizePublicFaceResponseDataElementsResults) String() string {
	return tea.Prettify(s)
}

func (s RecognizePublicFaceResponseDataElementsResults) GoString() string {
	return s.String()
}

func (s *RecognizePublicFaceResponseDataElementsResults) SetLabel(v string) *RecognizePublicFaceResponseDataElementsResults {
	s.Label = &v
	return s
}

func (s *RecognizePublicFaceResponseDataElementsResults) SetSuggestion(v string) *RecognizePublicFaceResponseDataElementsResults {
	s.Suggestion = &v
	return s
}

func (s *RecognizePublicFaceResponseDataElementsResults) SetRate(v float32) *RecognizePublicFaceResponseDataElementsResults {
	s.Rate = &v
	return s
}

func (s *RecognizePublicFaceResponseDataElementsResults) SetSubResults(v []*RecognizePublicFaceResponseDataElementsResultsSubResults) *RecognizePublicFaceResponseDataElementsResults {
	s.SubResults = v
	return s
}

type RecognizePublicFaceResponseDataElementsResultsSubResults struct {
	H     *float32                                                         `json:"H,omitempty" xml:"H,omitempty" require:"true"`
	W     *float32                                                         `json:"W,omitempty" xml:"W,omitempty" require:"true"`
	X     *float32                                                         `json:"X,omitempty" xml:"X,omitempty" require:"true"`
	Y     *float32                                                         `json:"Y,omitempty" xml:"Y,omitempty" require:"true"`
	Faces []*RecognizePublicFaceResponseDataElementsResultsSubResultsFaces `json:"Faces,omitempty" xml:"Faces,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizePublicFaceResponseDataElementsResultsSubResults) String() string {
	return tea.Prettify(s)
}

func (s RecognizePublicFaceResponseDataElementsResultsSubResults) GoString() string {
	return s.String()
}

func (s *RecognizePublicFaceResponseDataElementsResultsSubResults) SetH(v float32) *RecognizePublicFaceResponseDataElementsResultsSubResults {
	s.H = &v
	return s
}

func (s *RecognizePublicFaceResponseDataElementsResultsSubResults) SetW(v float32) *RecognizePublicFaceResponseDataElementsResultsSubResults {
	s.W = &v
	return s
}

func (s *RecognizePublicFaceResponseDataElementsResultsSubResults) SetX(v float32) *RecognizePublicFaceResponseDataElementsResultsSubResults {
	s.X = &v
	return s
}

func (s *RecognizePublicFaceResponseDataElementsResultsSubResults) SetY(v float32) *RecognizePublicFaceResponseDataElementsResultsSubResults {
	s.Y = &v
	return s
}

func (s *RecognizePublicFaceResponseDataElementsResultsSubResults) SetFaces(v []*RecognizePublicFaceResponseDataElementsResultsSubResultsFaces) *RecognizePublicFaceResponseDataElementsResultsSubResults {
	s.Faces = v
	return s
}

type RecognizePublicFaceResponseDataElementsResultsSubResultsFaces struct {
	Id   *string  `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Name *string  `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Rate *float32 `json:"Rate,omitempty" xml:"Rate,omitempty" require:"true"`
}

func (s RecognizePublicFaceResponseDataElementsResultsSubResultsFaces) String() string {
	return tea.Prettify(s)
}

func (s RecognizePublicFaceResponseDataElementsResultsSubResultsFaces) GoString() string {
	return s.String()
}

func (s *RecognizePublicFaceResponseDataElementsResultsSubResultsFaces) SetId(v string) *RecognizePublicFaceResponseDataElementsResultsSubResultsFaces {
	s.Id = &v
	return s
}

func (s *RecognizePublicFaceResponseDataElementsResultsSubResultsFaces) SetName(v string) *RecognizePublicFaceResponseDataElementsResultsSubResultsFaces {
	s.Name = &v
	return s
}

func (s *RecognizePublicFaceResponseDataElementsResultsSubResultsFaces) SetRate(v float32) *RecognizePublicFaceResponseDataElementsResultsSubResultsFaces {
	s.Rate = &v
	return s
}

type DetectLivingFaceRequest struct {
	Tasks []*DetectLivingFaceRequestTasks `json:"Tasks,omitempty" xml:"Tasks,omitempty" require:"true" type:"Repeated"`
}

func (s DetectLivingFaceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectLivingFaceRequest) GoString() string {
	return s.String()
}

func (s *DetectLivingFaceRequest) SetTasks(v []*DetectLivingFaceRequestTasks) *DetectLivingFaceRequest {
	s.Tasks = v
	return s
}

type DetectLivingFaceRequestTasks struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s DetectLivingFaceRequestTasks) String() string {
	return tea.Prettify(s)
}

func (s DetectLivingFaceRequestTasks) GoString() string {
	return s.String()
}

func (s *DetectLivingFaceRequestTasks) SetImageURL(v string) *DetectLivingFaceRequestTasks {
	s.ImageURL = &v
	return s
}

type DetectLivingFaceResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectLivingFaceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectLivingFaceResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectLivingFaceResponse) GoString() string {
	return s.String()
}

func (s *DetectLivingFaceResponse) SetRequestId(v string) *DetectLivingFaceResponse {
	s.RequestId = &v
	return s
}

func (s *DetectLivingFaceResponse) SetData(v *DetectLivingFaceResponseData) *DetectLivingFaceResponse {
	s.Data = v
	return s
}

type DetectLivingFaceResponseData struct {
	Elements []*DetectLivingFaceResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s DetectLivingFaceResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectLivingFaceResponseData) GoString() string {
	return s.String()
}

func (s *DetectLivingFaceResponseData) SetElements(v []*DetectLivingFaceResponseDataElements) *DetectLivingFaceResponseData {
	s.Elements = v
	return s
}

type DetectLivingFaceResponseDataElements struct {
	TaskId   *string                                        `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
	ImageURL *string                                        `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
	Results  []*DetectLivingFaceResponseDataElementsResults `json:"Results,omitempty" xml:"Results,omitempty" require:"true" type:"Repeated"`
}

func (s DetectLivingFaceResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s DetectLivingFaceResponseDataElements) GoString() string {
	return s.String()
}

func (s *DetectLivingFaceResponseDataElements) SetTaskId(v string) *DetectLivingFaceResponseDataElements {
	s.TaskId = &v
	return s
}

func (s *DetectLivingFaceResponseDataElements) SetImageURL(v string) *DetectLivingFaceResponseDataElements {
	s.ImageURL = &v
	return s
}

func (s *DetectLivingFaceResponseDataElements) SetResults(v []*DetectLivingFaceResponseDataElementsResults) *DetectLivingFaceResponseDataElements {
	s.Results = v
	return s
}

type DetectLivingFaceResponseDataElementsResults struct {
	Label      *string                                              `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Suggestion *string                                              `json:"Suggestion,omitempty" xml:"Suggestion,omitempty" require:"true"`
	Rate       *float32                                             `json:"Rate,omitempty" xml:"Rate,omitempty" require:"true"`
	Frames     []*DetectLivingFaceResponseDataElementsResultsFrames `json:"Frames,omitempty" xml:"Frames,omitempty" require:"true" type:"Repeated"`
}

func (s DetectLivingFaceResponseDataElementsResults) String() string {
	return tea.Prettify(s)
}

func (s DetectLivingFaceResponseDataElementsResults) GoString() string {
	return s.String()
}

func (s *DetectLivingFaceResponseDataElementsResults) SetLabel(v string) *DetectLivingFaceResponseDataElementsResults {
	s.Label = &v
	return s
}

func (s *DetectLivingFaceResponseDataElementsResults) SetSuggestion(v string) *DetectLivingFaceResponseDataElementsResults {
	s.Suggestion = &v
	return s
}

func (s *DetectLivingFaceResponseDataElementsResults) SetRate(v float32) *DetectLivingFaceResponseDataElementsResults {
	s.Rate = &v
	return s
}

func (s *DetectLivingFaceResponseDataElementsResults) SetFrames(v []*DetectLivingFaceResponseDataElementsResultsFrames) *DetectLivingFaceResponseDataElementsResults {
	s.Frames = v
	return s
}

type DetectLivingFaceResponseDataElementsResultsFrames struct {
	Rate *float32 `json:"Rate,omitempty" xml:"Rate,omitempty" require:"true"`
	Url  *string  `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
}

func (s DetectLivingFaceResponseDataElementsResultsFrames) String() string {
	return tea.Prettify(s)
}

func (s DetectLivingFaceResponseDataElementsResultsFrames) GoString() string {
	return s.String()
}

func (s *DetectLivingFaceResponseDataElementsResultsFrames) SetRate(v float32) *DetectLivingFaceResponseDataElementsResultsFrames {
	s.Rate = &v
	return s
}

func (s *DetectLivingFaceResponseDataElementsResultsFrames) SetUrl(v string) *DetectLivingFaceResponseDataElementsResultsFrames {
	s.Url = &v
	return s
}

type DetectBodyCountRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s DetectBodyCountRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectBodyCountRequest) GoString() string {
	return s.String()
}

func (s *DetectBodyCountRequest) SetImageURL(v string) *DetectBodyCountRequest {
	s.ImageURL = &v
	return s
}

type DetectBodyCountResponse struct {
	RequestId *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectBodyCountResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectBodyCountResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectBodyCountResponse) GoString() string {
	return s.String()
}

func (s *DetectBodyCountResponse) SetRequestId(v string) *DetectBodyCountResponse {
	s.RequestId = &v
	return s
}

func (s *DetectBodyCountResponse) SetData(v *DetectBodyCountResponseData) *DetectBodyCountResponse {
	s.Data = v
	return s
}

type DetectBodyCountResponseData struct {
	PersonNumber *int `json:"PersonNumber,omitempty" xml:"PersonNumber,omitempty" require:"true"`
}

func (s DetectBodyCountResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectBodyCountResponseData) GoString() string {
	return s.String()
}

func (s *DetectBodyCountResponseData) SetPersonNumber(v int) *DetectBodyCountResponseData {
	s.PersonNumber = &v
	return s
}

type DetectBodyCountAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s DetectBodyCountAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectBodyCountAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectBodyCountAdvanceRequest) SetImageURLObject(v io.Reader) *DetectBodyCountAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type DetectMaskRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s DetectMaskRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectMaskRequest) GoString() string {
	return s.String()
}

func (s *DetectMaskRequest) SetImageURL(v string) *DetectMaskRequest {
	s.ImageURL = &v
	return s
}

type DetectMaskResponse struct {
	RequestId *string                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectMaskResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectMaskResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectMaskResponse) GoString() string {
	return s.String()
}

func (s *DetectMaskResponse) SetRequestId(v string) *DetectMaskResponse {
	s.RequestId = &v
	return s
}

func (s *DetectMaskResponse) SetData(v *DetectMaskResponseData) *DetectMaskResponse {
	s.Data = v
	return s
}

type DetectMaskResponseData struct {
	Mask            *int     `json:"Mask,omitempty" xml:"Mask,omitempty" require:"true"`
	FaceProbability *float32 `json:"FaceProbability,omitempty" xml:"FaceProbability,omitempty" require:"true"`
}

func (s DetectMaskResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectMaskResponseData) GoString() string {
	return s.String()
}

func (s *DetectMaskResponseData) SetMask(v int) *DetectMaskResponseData {
	s.Mask = &v
	return s
}

func (s *DetectMaskResponseData) SetFaceProbability(v float32) *DetectMaskResponseData {
	s.FaceProbability = &v
	return s
}

type DetectMaskAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s DetectMaskAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectMaskAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectMaskAdvanceRequest) SetImageURLObject(v io.Reader) *DetectMaskAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeFaceRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s RecognizeFaceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeFaceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeFaceRequest) SetImageURL(v string) *RecognizeFaceRequest {
	s.ImageURL = &v
	return s
}

type RecognizeFaceResponse struct {
	RequestId *string                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeFaceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeFaceResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeFaceResponse) GoString() string {
	return s.String()
}

func (s *RecognizeFaceResponse) SetRequestId(v string) *RecognizeFaceResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeFaceResponse) SetData(v *RecognizeFaceResponseData) *RecognizeFaceResponse {
	s.Data = v
	return s
}

type RecognizeFaceResponseData struct {
	FaceCount           *int       `json:"FaceCount,omitempty" xml:"FaceCount,omitempty" require:"true"`
	LandmarkCount       *int       `json:"LandmarkCount,omitempty" xml:"LandmarkCount,omitempty" require:"true"`
	DenseFeatureLength  *int       `json:"DenseFeatureLength,omitempty" xml:"DenseFeatureLength,omitempty" require:"true"`
	FaceRectangles      []*int     `json:"FaceRectangles,omitempty" xml:"FaceRectangles,omitempty" require:"true" type:"Repeated"`
	FaceProbabilityList []*float32 `json:"FaceProbabilityList,omitempty" xml:"FaceProbabilityList,omitempty" require:"true" type:"Repeated"`
	PoseList            []*float32 `json:"PoseList,omitempty" xml:"PoseList,omitempty" require:"true" type:"Repeated"`
	Landmarks           []*float32 `json:"Landmarks,omitempty" xml:"Landmarks,omitempty" require:"true" type:"Repeated"`
	Pupils              []*float32 `json:"Pupils,omitempty" xml:"Pupils,omitempty" require:"true" type:"Repeated"`
	GenderList          []*int     `json:"GenderList,omitempty" xml:"GenderList,omitempty" require:"true" type:"Repeated"`
	AgeList             []*int     `json:"AgeList,omitempty" xml:"AgeList,omitempty" require:"true" type:"Repeated"`
	Expressions         []*int     `json:"Expressions,omitempty" xml:"Expressions,omitempty" require:"true" type:"Repeated"`
	Glasses             []*int     `json:"Glasses,omitempty" xml:"Glasses,omitempty" require:"true" type:"Repeated"`
	DenseFeatures       []*string  `json:"DenseFeatures,omitempty" xml:"DenseFeatures,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeFaceResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeFaceResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeFaceResponseData) SetFaceCount(v int) *RecognizeFaceResponseData {
	s.FaceCount = &v
	return s
}

func (s *RecognizeFaceResponseData) SetLandmarkCount(v int) *RecognizeFaceResponseData {
	s.LandmarkCount = &v
	return s
}

func (s *RecognizeFaceResponseData) SetDenseFeatureLength(v int) *RecognizeFaceResponseData {
	s.DenseFeatureLength = &v
	return s
}

func (s *RecognizeFaceResponseData) SetFaceRectangles(v []*int) *RecognizeFaceResponseData {
	s.FaceRectangles = v
	return s
}

func (s *RecognizeFaceResponseData) SetFaceProbabilityList(v []*float32) *RecognizeFaceResponseData {
	s.FaceProbabilityList = v
	return s
}

func (s *RecognizeFaceResponseData) SetPoseList(v []*float32) *RecognizeFaceResponseData {
	s.PoseList = v
	return s
}

func (s *RecognizeFaceResponseData) SetLandmarks(v []*float32) *RecognizeFaceResponseData {
	s.Landmarks = v
	return s
}

func (s *RecognizeFaceResponseData) SetPupils(v []*float32) *RecognizeFaceResponseData {
	s.Pupils = v
	return s
}

func (s *RecognizeFaceResponseData) SetGenderList(v []*int) *RecognizeFaceResponseData {
	s.GenderList = v
	return s
}

func (s *RecognizeFaceResponseData) SetAgeList(v []*int) *RecognizeFaceResponseData {
	s.AgeList = v
	return s
}

func (s *RecognizeFaceResponseData) SetExpressions(v []*int) *RecognizeFaceResponseData {
	s.Expressions = v
	return s
}

func (s *RecognizeFaceResponseData) SetGlasses(v []*int) *RecognizeFaceResponseData {
	s.Glasses = v
	return s
}

func (s *RecognizeFaceResponseData) SetDenseFeatures(v []*string) *RecognizeFaceResponseData {
	s.DenseFeatures = v
	return s
}

type RecognizeFaceAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s RecognizeFaceAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeFaceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeFaceAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeFaceAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type CompareFaceRequest struct {
	ImageURLA *string `json:"ImageURLA,omitempty" xml:"ImageURLA,omitempty" require:"true"`
	ImageURLB *string `json:"ImageURLB,omitempty" xml:"ImageURLB,omitempty" require:"true"`
}

func (s CompareFaceRequest) String() string {
	return tea.Prettify(s)
}

func (s CompareFaceRequest) GoString() string {
	return s.String()
}

func (s *CompareFaceRequest) SetImageURLA(v string) *CompareFaceRequest {
	s.ImageURLA = &v
	return s
}

func (s *CompareFaceRequest) SetImageURLB(v string) *CompareFaceRequest {
	s.ImageURLB = &v
	return s
}

type CompareFaceResponse struct {
	RequestId *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *CompareFaceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s CompareFaceResponse) String() string {
	return tea.Prettify(s)
}

func (s CompareFaceResponse) GoString() string {
	return s.String()
}

func (s *CompareFaceResponse) SetRequestId(v string) *CompareFaceResponse {
	s.RequestId = &v
	return s
}

func (s *CompareFaceResponse) SetData(v *CompareFaceResponseData) *CompareFaceResponse {
	s.Data = v
	return s
}

type CompareFaceResponseData struct {
	Confidence *float32   `json:"Confidence,omitempty" xml:"Confidence,omitempty" require:"true"`
	Thresholds []*float32 `json:"Thresholds,omitempty" xml:"Thresholds,omitempty" require:"true" type:"Repeated"`
	RectAList  []*int     `json:"RectAList,omitempty" xml:"RectAList,omitempty" require:"true" type:"Repeated"`
	RectBList  []*int     `json:"RectBList,omitempty" xml:"RectBList,omitempty" require:"true" type:"Repeated"`
}

func (s CompareFaceResponseData) String() string {
	return tea.Prettify(s)
}

func (s CompareFaceResponseData) GoString() string {
	return s.String()
}

func (s *CompareFaceResponseData) SetConfidence(v float32) *CompareFaceResponseData {
	s.Confidence = &v
	return s
}

func (s *CompareFaceResponseData) SetThresholds(v []*float32) *CompareFaceResponseData {
	s.Thresholds = v
	return s
}

func (s *CompareFaceResponseData) SetRectAList(v []*int) *CompareFaceResponseData {
	s.RectAList = v
	return s
}

func (s *CompareFaceResponseData) SetRectBList(v []*int) *CompareFaceResponseData {
	s.RectBList = v
	return s
}

type DetectFaceRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s DetectFaceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectFaceRequest) GoString() string {
	return s.String()
}

func (s *DetectFaceRequest) SetImageURL(v string) *DetectFaceRequest {
	s.ImageURL = &v
	return s
}

type DetectFaceResponse struct {
	RequestId *string                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectFaceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectFaceResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectFaceResponse) GoString() string {
	return s.String()
}

func (s *DetectFaceResponse) SetRequestId(v string) *DetectFaceResponse {
	s.RequestId = &v
	return s
}

func (s *DetectFaceResponse) SetData(v *DetectFaceResponseData) *DetectFaceResponse {
	s.Data = v
	return s
}

type DetectFaceResponseData struct {
	FaceCount           *int       `json:"FaceCount,omitempty" xml:"FaceCount,omitempty" require:"true"`
	LandmarkCount       *int       `json:"LandmarkCount,omitempty" xml:"LandmarkCount,omitempty" require:"true"`
	FaceRectangles      []*int     `json:"FaceRectangles,omitempty" xml:"FaceRectangles,omitempty" require:"true" type:"Repeated"`
	FaceProbabilityList []*float32 `json:"FaceProbabilityList,omitempty" xml:"FaceProbabilityList,omitempty" require:"true" type:"Repeated"`
	PoseList            []*float32 `json:"PoseList,omitempty" xml:"PoseList,omitempty" require:"true" type:"Repeated"`
	Landmarks           []*float32 `json:"Landmarks,omitempty" xml:"Landmarks,omitempty" require:"true" type:"Repeated"`
	Pupils              []*float32 `json:"Pupils,omitempty" xml:"Pupils,omitempty" require:"true" type:"Repeated"`
}

func (s DetectFaceResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectFaceResponseData) GoString() string {
	return s.String()
}

func (s *DetectFaceResponseData) SetFaceCount(v int) *DetectFaceResponseData {
	s.FaceCount = &v
	return s
}

func (s *DetectFaceResponseData) SetLandmarkCount(v int) *DetectFaceResponseData {
	s.LandmarkCount = &v
	return s
}

func (s *DetectFaceResponseData) SetFaceRectangles(v []*int) *DetectFaceResponseData {
	s.FaceRectangles = v
	return s
}

func (s *DetectFaceResponseData) SetFaceProbabilityList(v []*float32) *DetectFaceResponseData {
	s.FaceProbabilityList = v
	return s
}

func (s *DetectFaceResponseData) SetPoseList(v []*float32) *DetectFaceResponseData {
	s.PoseList = v
	return s
}

func (s *DetectFaceResponseData) SetLandmarks(v []*float32) *DetectFaceResponseData {
	s.Landmarks = v
	return s
}

func (s *DetectFaceResponseData) SetPupils(v []*float32) *DetectFaceResponseData {
	s.Pupils = v
	return s
}

type DetectFaceAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s DetectFaceAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectFaceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectFaceAdvanceRequest) SetImageURLObject(v io.Reader) *DetectFaceAdvanceRequest {
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
	client.Endpoint, _err = client.GetEndpoint(tea.String("facebody"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) DetectIPCPedestrian(request *DetectIPCPedestrianRequest, runtime *util.RuntimeOptions) (_result *DetectIPCPedestrianResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectIPCPedestrianResponse{}
	_body, _err := client.DoRequest(tea.String("DetectIPCPedestrian"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) BlurFace(request *BlurFaceRequest, runtime *util.RuntimeOptions) (_result *BlurFaceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &BlurFaceResponse{}
	_body, _err := client.DoRequest(tea.String("BlurFace"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) BlurFaceAdvance(request *BlurFaceAdvanceRequest, runtime *util.RuntimeOptions) (_result *BlurFaceResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	blurFacereq := &BlurFaceRequest{}
	rpcutil.Convert(request, blurFacereq)
	blurFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	blurFaceResp, _err := client.BlurFace(blurFacereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = blurFaceResp
	return _result, _err
}

func (client *Client) ExtractPedestrianFeatureAttribute(request *ExtractPedestrianFeatureAttributeRequest, runtime *util.RuntimeOptions) (_result *ExtractPedestrianFeatureAttributeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ExtractPedestrianFeatureAttributeResponse{}
	_body, _err := client.DoRequest(tea.String("ExtractPedestrianFeatureAttribute"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ExtractPedestrianFeatureAttributeAdvance(request *ExtractPedestrianFeatureAttributeAdvanceRequest, runtime *util.RuntimeOptions) (_result *ExtractPedestrianFeatureAttributeResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	extractPedestrianFeatureAttributereq := &ExtractPedestrianFeatureAttributeRequest{}
	rpcutil.Convert(request, extractPedestrianFeatureAttributereq)
	extractPedestrianFeatureAttributereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	extractPedestrianFeatureAttributeResp, _err := client.ExtractPedestrianFeatureAttribute(extractPedestrianFeatureAttributereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = extractPedestrianFeatureAttributeResp
	return _result, _err
}

func (client *Client) DetectCelebrity(request *DetectCelebrityRequest, runtime *util.RuntimeOptions) (_result *DetectCelebrityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectCelebrityResponse{}
	_body, _err := client.DoRequest(tea.String("DetectCelebrity"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectCelebrityAdvance(request *DetectCelebrityAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectCelebrityResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	detectCelebrityreq := &DetectCelebrityRequest{}
	rpcutil.Convert(request, detectCelebrityreq)
	detectCelebrityreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectCelebrityResp, _err := client.DetectCelebrity(detectCelebrityreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectCelebrityResp
	return _result, _err
}

func (client *Client) VerifyFaceMask(request *VerifyFaceMaskRequest, runtime *util.RuntimeOptions) (_result *VerifyFaceMaskResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &VerifyFaceMaskResponse{}
	_body, _err := client.DoRequest(tea.String("VerifyFaceMask"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) VerifyFaceMaskAdvance(request *VerifyFaceMaskAdvanceRequest, runtime *util.RuntimeOptions) (_result *VerifyFaceMaskResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	verifyFaceMaskreq := &VerifyFaceMaskRequest{}
	rpcutil.Convert(request, verifyFaceMaskreq)
	verifyFaceMaskreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	verifyFaceMaskResp, _err := client.VerifyFaceMask(verifyFaceMaskreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = verifyFaceMaskResp
	return _result, _err
}

func (client *Client) RecognizeAction(request *RecognizeActionRequest, runtime *util.RuntimeOptions) (_result *RecognizeActionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeActionResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeAction"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectVideoLivingFace(request *DetectVideoLivingFaceRequest, runtime *util.RuntimeOptions) (_result *DetectVideoLivingFaceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectVideoLivingFaceResponse{}
	_body, _err := client.DoRequest(tea.String("DetectVideoLivingFace"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectVideoLivingFaceAdvance(request *DetectVideoLivingFaceAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectVideoLivingFaceResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
		Content:     request.VideoUrlObject,
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
	detectVideoLivingFacereq := &DetectVideoLivingFaceRequest{}
	rpcutil.Convert(request, detectVideoLivingFacereq)
	detectVideoLivingFacereq.VideoUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectVideoLivingFaceResp, _err := client.DetectVideoLivingFace(detectVideoLivingFacereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectVideoLivingFaceResp
	return _result, _err
}

func (client *Client) SwapFacialFeatures(request *SwapFacialFeaturesRequest, runtime *util.RuntimeOptions) (_result *SwapFacialFeaturesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SwapFacialFeaturesResponse{}
	_body, _err := client.DoRequest(tea.String("SwapFacialFeatures"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SwapFacialFeaturesAdvance(request *SwapFacialFeaturesAdvanceRequest, runtime *util.RuntimeOptions) (_result *SwapFacialFeaturesResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
		Content:     request.SourceImageURLObject,
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
	swapFacialFeaturesreq := &SwapFacialFeaturesRequest{}
	rpcutil.Convert(request, swapFacialFeaturesreq)
	swapFacialFeaturesreq.SourceImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	swapFacialFeaturesResp, _err := client.SwapFacialFeatures(swapFacialFeaturesreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = swapFacialFeaturesResp
	return _result, _err
}

func (client *Client) AddFaceEntity(request *AddFaceEntityRequest, runtime *util.RuntimeOptions) (_result *AddFaceEntityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddFaceEntityResponse{}
	_body, _err := client.DoRequest(tea.String("AddFaceEntity"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteFaceEntity(request *DeleteFaceEntityRequest, runtime *util.RuntimeOptions) (_result *DeleteFaceEntityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteFaceEntityResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteFaceEntity"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListFaceEntities(request *ListFaceEntitiesRequest, runtime *util.RuntimeOptions) (_result *ListFaceEntitiesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListFaceEntitiesResponse{}
	_body, _err := client.DoRequest(tea.String("ListFaceEntities"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetFaceEntity(request *GetFaceEntityRequest, runtime *util.RuntimeOptions) (_result *GetFaceEntityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetFaceEntityResponse{}
	_body, _err := client.DoRequest(tea.String("GetFaceEntity"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) UpdateFaceEntity(request *UpdateFaceEntityRequest, runtime *util.RuntimeOptions) (_result *UpdateFaceEntityResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &UpdateFaceEntityResponse{}
	_body, _err := client.DoRequest(tea.String("UpdateFaceEntity"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FaceMakeup(request *FaceMakeupRequest, runtime *util.RuntimeOptions) (_result *FaceMakeupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &FaceMakeupResponse{}
	_body, _err := client.DoRequest(tea.String("FaceMakeup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FaceMakeupAdvance(request *FaceMakeupAdvanceRequest, runtime *util.RuntimeOptions) (_result *FaceMakeupResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	faceMakeupreq := &FaceMakeupRequest{}
	rpcutil.Convert(request, faceMakeupreq)
	faceMakeupreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	faceMakeupResp, _err := client.FaceMakeup(faceMakeupreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = faceMakeupResp
	return _result, _err
}

func (client *Client) HandPosture(request *HandPostureRequest, runtime *util.RuntimeOptions) (_result *HandPostureResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &HandPostureResponse{}
	_body, _err := client.DoRequest(tea.String("HandPosture"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) HandPostureAdvance(request *HandPostureAdvanceRequest, runtime *util.RuntimeOptions) (_result *HandPostureResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	handPosturereq := &HandPostureRequest{}
	rpcutil.Convert(request, handPosturereq)
	handPosturereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	handPostureResp, _err := client.HandPosture(handPosturereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = handPostureResp
	return _result, _err
}

func (client *Client) BodyPosture(request *BodyPostureRequest, runtime *util.RuntimeOptions) (_result *BodyPostureResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &BodyPostureResponse{}
	_body, _err := client.DoRequest(tea.String("BodyPosture"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) BodyPostureAdvance(request *BodyPostureAdvanceRequest, runtime *util.RuntimeOptions) (_result *BodyPostureResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	bodyPosturereq := &BodyPostureRequest{}
	rpcutil.Convert(request, bodyPosturereq)
	bodyPosturereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	bodyPostureResp, _err := client.BodyPosture(bodyPosturereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = bodyPostureResp
	return _result, _err
}

func (client *Client) DetectPedestrian(request *DetectPedestrianRequest, runtime *util.RuntimeOptions) (_result *DetectPedestrianResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectPedestrianResponse{}
	_body, _err := client.DoRequest(tea.String("DetectPedestrian"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectPedestrianAdvance(request *DetectPedestrianAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectPedestrianResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	detectPedestrianreq := &DetectPedestrianRequest{}
	rpcutil.Convert(request, detectPedestrianreq)
	detectPedestrianreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectPedestrianResp, _err := client.DetectPedestrian(detectPedestrianreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectPedestrianResp
	return _result, _err
}

func (client *Client) FaceBeauty(request *FaceBeautyRequest, runtime *util.RuntimeOptions) (_result *FaceBeautyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &FaceBeautyResponse{}
	_body, _err := client.DoRequest(tea.String("FaceBeauty"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FaceBeautyAdvance(request *FaceBeautyAdvanceRequest, runtime *util.RuntimeOptions) (_result *FaceBeautyResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	faceBeautyreq := &FaceBeautyRequest{}
	rpcutil.Convert(request, faceBeautyreq)
	faceBeautyreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	faceBeautyResp, _err := client.FaceBeauty(faceBeautyreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = faceBeautyResp
	return _result, _err
}

func (client *Client) FaceFilter(request *FaceFilterRequest, runtime *util.RuntimeOptions) (_result *FaceFilterResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &FaceFilterResponse{}
	_body, _err := client.DoRequest(tea.String("FaceFilter"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FaceFilterAdvance(request *FaceFilterAdvanceRequest, runtime *util.RuntimeOptions) (_result *FaceFilterResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	faceFilterreq := &FaceFilterRequest{}
	rpcutil.Convert(request, faceFilterreq)
	faceFilterreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	faceFilterResp, _err := client.FaceFilter(faceFilterreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = faceFilterResp
	return _result, _err
}

func (client *Client) EnhanceFace(request *EnhanceFaceRequest, runtime *util.RuntimeOptions) (_result *EnhanceFaceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &EnhanceFaceResponse{}
	_body, _err := client.DoRequest(tea.String("EnhanceFace"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) EnhanceFaceAdvance(request *EnhanceFaceAdvanceRequest, runtime *util.RuntimeOptions) (_result *EnhanceFaceResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	enhanceFacereq := &EnhanceFaceRequest{}
	rpcutil.Convert(request, enhanceFacereq)
	enhanceFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	enhanceFaceResp, _err := client.EnhanceFace(enhanceFacereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = enhanceFaceResp
	return _result, _err
}

func (client *Client) FaceTidyup(request *FaceTidyupRequest, runtime *util.RuntimeOptions) (_result *FaceTidyupResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &FaceTidyupResponse{}
	_body, _err := client.DoRequest(tea.String("FaceTidyup"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FaceTidyupAdvance(request *FaceTidyupAdvanceRequest, runtime *util.RuntimeOptions) (_result *FaceTidyupResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	faceTidyupreq := &FaceTidyupRequest{}
	rpcutil.Convert(request, faceTidyupreq)
	faceTidyupreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	faceTidyupResp, _err := client.FaceTidyup(faceTidyupreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = faceTidyupResp
	return _result, _err
}

func (client *Client) SearchFace(request *SearchFaceRequest, runtime *util.RuntimeOptions) (_result *SearchFaceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchFaceResponse{}
	_body, _err := client.DoRequest(tea.String("SearchFace"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchFaceAdvance(request *SearchFaceAdvanceRequest, runtime *util.RuntimeOptions) (_result *SearchFaceResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
		Content:     request.ImageUrlObject,
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
	searchFacereq := &SearchFaceRequest{}
	rpcutil.Convert(request, searchFacereq)
	searchFacereq.ImageUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	searchFaceResp, _err := client.SearchFace(searchFacereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = searchFaceResp
	return _result, _err
}

func (client *Client) ListFaceDbs(request *ListFaceDbsRequest, runtime *util.RuntimeOptions) (_result *ListFaceDbsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListFaceDbsResponse{}
	_body, _err := client.DoRequest(tea.String("ListFaceDbs"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateFaceDb(request *CreateFaceDbRequest, runtime *util.RuntimeOptions) (_result *CreateFaceDbResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateFaceDbResponse{}
	_body, _err := client.DoRequest(tea.String("CreateFaceDb"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteFace(request *DeleteFaceRequest, runtime *util.RuntimeOptions) (_result *DeleteFaceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteFaceResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteFace"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteFaceDb(request *DeleteFaceDbRequest, runtime *util.RuntimeOptions) (_result *DeleteFaceDbResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteFaceDbResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteFaceDb"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddFace(request *AddFaceRequest, runtime *util.RuntimeOptions) (_result *AddFaceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddFaceResponse{}
	_body, _err := client.DoRequest(tea.String("AddFace"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddFaceAdvance(request *AddFaceAdvanceRequest, runtime *util.RuntimeOptions) (_result *AddFaceResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
		Content:     request.ImageUrlObject,
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
	addFacereq := &AddFaceRequest{}
	rpcutil.Convert(request, addFacereq)
	addFacereq.ImageUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	addFaceResp, _err := client.AddFace(addFacereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = addFaceResp
	return _result, _err
}

func (client *Client) RecognizeExpression(request *RecognizeExpressionRequest, runtime *util.RuntimeOptions) (_result *RecognizeExpressionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeExpressionResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeExpression"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeExpressionAdvance(request *RecognizeExpressionAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeExpressionResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	recognizeExpressionreq := &RecognizeExpressionRequest{}
	rpcutil.Convert(request, recognizeExpressionreq)
	recognizeExpressionreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeExpressionResp, _err := client.RecognizeExpression(recognizeExpressionreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeExpressionResp
	return _result, _err
}

func (client *Client) RecognizePublicFace(request *RecognizePublicFaceRequest, runtime *util.RuntimeOptions) (_result *RecognizePublicFaceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizePublicFaceResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizePublicFace"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectLivingFace(request *DetectLivingFaceRequest, runtime *util.RuntimeOptions) (_result *DetectLivingFaceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectLivingFaceResponse{}
	_body, _err := client.DoRequest(tea.String("DetectLivingFace"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectBodyCount(request *DetectBodyCountRequest, runtime *util.RuntimeOptions) (_result *DetectBodyCountResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectBodyCountResponse{}
	_body, _err := client.DoRequest(tea.String("DetectBodyCount"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectBodyCountAdvance(request *DetectBodyCountAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectBodyCountResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	detectBodyCountreq := &DetectBodyCountRequest{}
	rpcutil.Convert(request, detectBodyCountreq)
	detectBodyCountreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectBodyCountResp, _err := client.DetectBodyCount(detectBodyCountreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectBodyCountResp
	return _result, _err
}

func (client *Client) DetectMask(request *DetectMaskRequest, runtime *util.RuntimeOptions) (_result *DetectMaskResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectMaskResponse{}
	_body, _err := client.DoRequest(tea.String("DetectMask"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectMaskAdvance(request *DetectMaskAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectMaskResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	detectMaskreq := &DetectMaskRequest{}
	rpcutil.Convert(request, detectMaskreq)
	detectMaskreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectMaskResp, _err := client.DetectMask(detectMaskreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectMaskResp
	return _result, _err
}

func (client *Client) RecognizeFace(request *RecognizeFaceRequest, runtime *util.RuntimeOptions) (_result *RecognizeFaceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeFaceResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeFace"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeFaceAdvance(request *RecognizeFaceAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeFaceResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	recognizeFacereq := &RecognizeFaceRequest{}
	rpcutil.Convert(request, recognizeFacereq)
	recognizeFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeFaceResp, _err := client.RecognizeFace(recognizeFacereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeFaceResp
	return _result, _err
}

func (client *Client) CompareFace(request *CompareFaceRequest, runtime *util.RuntimeOptions) (_result *CompareFaceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CompareFaceResponse{}
	_body, _err := client.DoRequest(tea.String("CompareFace"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectFace(request *DetectFaceRequest, runtime *util.RuntimeOptions) (_result *DetectFaceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectFaceResponse{}
	_body, _err := client.DoRequest(tea.String("DetectFace"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectFaceAdvance(request *DetectFaceAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectFaceResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	detectFacereq := &DetectFaceRequest{}
	rpcutil.Convert(request, detectFacereq)
	detectFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectFaceResp, _err := client.DetectFace(detectFacereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectFaceResp
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
