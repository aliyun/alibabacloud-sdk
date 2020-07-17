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

type GenerateVehicleRepairPlanRequest struct {
	DamageImageList []*GenerateVehicleRepairPlanRequestDamageImageList `json:"DamageImageList,omitempty" xml:"DamageImageList,omitempty" require:"true" type:"Repeated"`
}

func (s GenerateVehicleRepairPlanRequest) String() string {
	return tea.Prettify(s)
}

func (s GenerateVehicleRepairPlanRequest) GoString() string {
	return s.String()
}

func (s *GenerateVehicleRepairPlanRequest) SetDamageImageList(v []*GenerateVehicleRepairPlanRequestDamageImageList) *GenerateVehicleRepairPlanRequest {
	s.DamageImageList = v
	return s
}

type GenerateVehicleRepairPlanRequestDamageImageList struct {
	ImageUrl        *string `json:"ImageUrl,omitempty" xml:"ImageUrl,omitempty" require:"true"`
	CreateTimeStamp *string `json:"CreateTimeStamp,omitempty" xml:"CreateTimeStamp,omitempty" require:"true"`
}

func (s GenerateVehicleRepairPlanRequestDamageImageList) String() string {
	return tea.Prettify(s)
}

func (s GenerateVehicleRepairPlanRequestDamageImageList) GoString() string {
	return s.String()
}

func (s *GenerateVehicleRepairPlanRequestDamageImageList) SetImageUrl(v string) *GenerateVehicleRepairPlanRequestDamageImageList {
	s.ImageUrl = &v
	return s
}

func (s *GenerateVehicleRepairPlanRequestDamageImageList) SetCreateTimeStamp(v string) *GenerateVehicleRepairPlanRequestDamageImageList {
	s.CreateTimeStamp = &v
	return s
}

type GenerateVehicleRepairPlanResponse struct {
	RequestId    *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	HttpCode     *int                                   `json:"HttpCode,omitempty" xml:"HttpCode,omitempty" require:"true"`
	Code         *string                                `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	ErrorMessage *string                                `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	Success      *bool                                  `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Data         *GenerateVehicleRepairPlanResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GenerateVehicleRepairPlanResponse) String() string {
	return tea.Prettify(s)
}

func (s GenerateVehicleRepairPlanResponse) GoString() string {
	return s.String()
}

func (s *GenerateVehicleRepairPlanResponse) SetRequestId(v string) *GenerateVehicleRepairPlanResponse {
	s.RequestId = &v
	return s
}

func (s *GenerateVehicleRepairPlanResponse) SetHttpCode(v int) *GenerateVehicleRepairPlanResponse {
	s.HttpCode = &v
	return s
}

func (s *GenerateVehicleRepairPlanResponse) SetCode(v string) *GenerateVehicleRepairPlanResponse {
	s.Code = &v
	return s
}

func (s *GenerateVehicleRepairPlanResponse) SetErrorMessage(v string) *GenerateVehicleRepairPlanResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GenerateVehicleRepairPlanResponse) SetSuccess(v bool) *GenerateVehicleRepairPlanResponse {
	s.Success = &v
	return s
}

func (s *GenerateVehicleRepairPlanResponse) SetData(v *GenerateVehicleRepairPlanResponseData) *GenerateVehicleRepairPlanResponse {
	s.Data = v
	return s
}

type GenerateVehicleRepairPlanResponseData struct {
	TaskId *string `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
}

func (s GenerateVehicleRepairPlanResponseData) String() string {
	return tea.Prettify(s)
}

func (s GenerateVehicleRepairPlanResponseData) GoString() string {
	return s.String()
}

func (s *GenerateVehicleRepairPlanResponseData) SetTaskId(v string) *GenerateVehicleRepairPlanResponseData {
	s.TaskId = &v
	return s
}

type GetVehicleRepairPlanRequest struct {
	TaskId         *string `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
	CarNumberImage *string `json:"CarNumberImage,omitempty" xml:"CarNumberImage,omitempty"`
	VinCodeImage   *string `json:"VinCodeImage,omitempty" xml:"VinCodeImage,omitempty"`
}

func (s GetVehicleRepairPlanRequest) String() string {
	return tea.Prettify(s)
}

func (s GetVehicleRepairPlanRequest) GoString() string {
	return s.String()
}

func (s *GetVehicleRepairPlanRequest) SetTaskId(v string) *GetVehicleRepairPlanRequest {
	s.TaskId = &v
	return s
}

func (s *GetVehicleRepairPlanRequest) SetCarNumberImage(v string) *GetVehicleRepairPlanRequest {
	s.CarNumberImage = &v
	return s
}

func (s *GetVehicleRepairPlanRequest) SetVinCodeImage(v string) *GetVehicleRepairPlanRequest {
	s.VinCodeImage = &v
	return s
}

type GetVehicleRepairPlanResponse struct {
	RequestId    *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Code         *string                           `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	ErrorMessage *string                           `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
	Success      *bool                             `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	HttpCode     *int                              `json:"HttpCode,omitempty" xml:"HttpCode,omitempty" require:"true"`
	Data         *GetVehicleRepairPlanResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetVehicleRepairPlanResponse) String() string {
	return tea.Prettify(s)
}

func (s GetVehicleRepairPlanResponse) GoString() string {
	return s.String()
}

func (s *GetVehicleRepairPlanResponse) SetRequestId(v string) *GetVehicleRepairPlanResponse {
	s.RequestId = &v
	return s
}

func (s *GetVehicleRepairPlanResponse) SetCode(v string) *GetVehicleRepairPlanResponse {
	s.Code = &v
	return s
}

func (s *GetVehicleRepairPlanResponse) SetErrorMessage(v string) *GetVehicleRepairPlanResponse {
	s.ErrorMessage = &v
	return s
}

func (s *GetVehicleRepairPlanResponse) SetSuccess(v bool) *GetVehicleRepairPlanResponse {
	s.Success = &v
	return s
}

func (s *GetVehicleRepairPlanResponse) SetHttpCode(v int) *GetVehicleRepairPlanResponse {
	s.HttpCode = &v
	return s
}

func (s *GetVehicleRepairPlanResponse) SetData(v *GetVehicleRepairPlanResponseData) *GetVehicleRepairPlanResponse {
	s.Data = v
	return s
}

type GetVehicleRepairPlanResponseData struct {
	FrameNo     *string                                        `json:"FrameNo,omitempty" xml:"FrameNo,omitempty" require:"true"`
	RepairParts []*GetVehicleRepairPlanResponseDataRepairParts `json:"RepairParts,omitempty" xml:"RepairParts,omitempty" require:"true" type:"Repeated"`
}

func (s GetVehicleRepairPlanResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetVehicleRepairPlanResponseData) GoString() string {
	return s.String()
}

func (s *GetVehicleRepairPlanResponseData) SetFrameNo(v string) *GetVehicleRepairPlanResponseData {
	s.FrameNo = &v
	return s
}

func (s *GetVehicleRepairPlanResponseData) SetRepairParts(v []*GetVehicleRepairPlanResponseDataRepairParts) *GetVehicleRepairPlanResponseData {
	s.RepairParts = v
	return s
}

type GetVehicleRepairPlanResponseDataRepairParts struct {
	GarageType           *string `json:"GarageType,omitempty" xml:"GarageType,omitempty" require:"true"`
	OeMatch              *bool   `json:"OeMatch,omitempty" xml:"OeMatch,omitempty" require:"true"`
	OutStandardPartsId   *string `json:"OutStandardPartsId,omitempty" xml:"OutStandardPartsId,omitempty" require:"true"`
	OutStandardPartsName *string `json:"OutStandardPartsName,omitempty" xml:"OutStandardPartsName,omitempty" require:"true"`
	PartNameMatch        *bool   `json:"PartNameMatch,omitempty" xml:"PartNameMatch,omitempty" require:"true"`
	PartsStdCode         *string `json:"PartsStdCode,omitempty" xml:"PartsStdCode,omitempty" require:"true"`
	PartsStdName         *string `json:"PartsStdName,omitempty" xml:"PartsStdName,omitempty" require:"true"`
	RelationType         *string `json:"RelationType,omitempty" xml:"RelationType,omitempty" require:"true"`
	RepairFee            *string `json:"RepairFee,omitempty" xml:"RepairFee,omitempty" require:"true"`
	RepairType           *string `json:"RepairType,omitempty" xml:"RepairType,omitempty" require:"true"`
	RepairTypeName       *string `json:"RepairTypeName,omitempty" xml:"RepairTypeName,omitempty" require:"true"`
}

func (s GetVehicleRepairPlanResponseDataRepairParts) String() string {
	return tea.Prettify(s)
}

func (s GetVehicleRepairPlanResponseDataRepairParts) GoString() string {
	return s.String()
}

func (s *GetVehicleRepairPlanResponseDataRepairParts) SetGarageType(v string) *GetVehicleRepairPlanResponseDataRepairParts {
	s.GarageType = &v
	return s
}

func (s *GetVehicleRepairPlanResponseDataRepairParts) SetOeMatch(v bool) *GetVehicleRepairPlanResponseDataRepairParts {
	s.OeMatch = &v
	return s
}

func (s *GetVehicleRepairPlanResponseDataRepairParts) SetOutStandardPartsId(v string) *GetVehicleRepairPlanResponseDataRepairParts {
	s.OutStandardPartsId = &v
	return s
}

func (s *GetVehicleRepairPlanResponseDataRepairParts) SetOutStandardPartsName(v string) *GetVehicleRepairPlanResponseDataRepairParts {
	s.OutStandardPartsName = &v
	return s
}

func (s *GetVehicleRepairPlanResponseDataRepairParts) SetPartNameMatch(v bool) *GetVehicleRepairPlanResponseDataRepairParts {
	s.PartNameMatch = &v
	return s
}

func (s *GetVehicleRepairPlanResponseDataRepairParts) SetPartsStdCode(v string) *GetVehicleRepairPlanResponseDataRepairParts {
	s.PartsStdCode = &v
	return s
}

func (s *GetVehicleRepairPlanResponseDataRepairParts) SetPartsStdName(v string) *GetVehicleRepairPlanResponseDataRepairParts {
	s.PartsStdName = &v
	return s
}

func (s *GetVehicleRepairPlanResponseDataRepairParts) SetRelationType(v string) *GetVehicleRepairPlanResponseDataRepairParts {
	s.RelationType = &v
	return s
}

func (s *GetVehicleRepairPlanResponseDataRepairParts) SetRepairFee(v string) *GetVehicleRepairPlanResponseDataRepairParts {
	s.RepairFee = &v
	return s
}

func (s *GetVehicleRepairPlanResponseDataRepairParts) SetRepairType(v string) *GetVehicleRepairPlanResponseDataRepairParts {
	s.RepairType = &v
	return s
}

func (s *GetVehicleRepairPlanResponseDataRepairParts) SetRepairTypeName(v string) *GetVehicleRepairPlanResponseDataRepairParts {
	s.RepairTypeName = &v
	return s
}

type DetectTransparentImageRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s DetectTransparentImageRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectTransparentImageRequest) GoString() string {
	return s.String()
}

func (s *DetectTransparentImageRequest) SetImageURL(v string) *DetectTransparentImageRequest {
	s.ImageURL = &v
	return s
}

type DetectTransparentImageResponse struct {
	RequestId *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectTransparentImageResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectTransparentImageResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectTransparentImageResponse) GoString() string {
	return s.String()
}

func (s *DetectTransparentImageResponse) SetRequestId(v string) *DetectTransparentImageResponse {
	s.RequestId = &v
	return s
}

func (s *DetectTransparentImageResponse) SetData(v *DetectTransparentImageResponseData) *DetectTransparentImageResponse {
	s.Data = v
	return s
}

type DetectTransparentImageResponseData struct {
	Elements []*DetectTransparentImageResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s DetectTransparentImageResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectTransparentImageResponseData) GoString() string {
	return s.String()
}

func (s *DetectTransparentImageResponseData) SetElements(v []*DetectTransparentImageResponseDataElements) *DetectTransparentImageResponseData {
	s.Elements = v
	return s
}

type DetectTransparentImageResponseDataElements struct {
	TransparentImage *int `json:"TransparentImage,omitempty" xml:"TransparentImage,omitempty" require:"true"`
}

func (s DetectTransparentImageResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s DetectTransparentImageResponseDataElements) GoString() string {
	return s.String()
}

func (s *DetectTransparentImageResponseDataElements) SetTransparentImage(v int) *DetectTransparentImageResponseDataElements {
	s.TransparentImage = &v
	return s
}

type DetectTransparentImageAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s DetectTransparentImageAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectTransparentImageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectTransparentImageAdvanceRequest) SetImageURLObject(v io.Reader) *DetectTransparentImageAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type DetectObjectRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s DetectObjectRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectObjectRequest) GoString() string {
	return s.String()
}

func (s *DetectObjectRequest) SetImageURL(v string) *DetectObjectRequest {
	s.ImageURL = &v
	return s
}

type DetectObjectResponse struct {
	RequestId *string                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectObjectResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectObjectResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectObjectResponse) GoString() string {
	return s.String()
}

func (s *DetectObjectResponse) SetRequestId(v string) *DetectObjectResponse {
	s.RequestId = &v
	return s
}

func (s *DetectObjectResponse) SetData(v *DetectObjectResponseData) *DetectObjectResponse {
	s.Data = v
	return s
}

type DetectObjectResponseData struct {
	Width    *int                                `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height   *int                                `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	Elements []*DetectObjectResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s DetectObjectResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectObjectResponseData) GoString() string {
	return s.String()
}

func (s *DetectObjectResponseData) SetWidth(v int) *DetectObjectResponseData {
	s.Width = &v
	return s
}

func (s *DetectObjectResponseData) SetHeight(v int) *DetectObjectResponseData {
	s.Height = &v
	return s
}

func (s *DetectObjectResponseData) SetElements(v []*DetectObjectResponseDataElements) *DetectObjectResponseData {
	s.Elements = v
	return s
}

type DetectObjectResponseDataElements struct {
	Score *float32 `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Type  *string  `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Boxes []*int   `json:"Boxes,omitempty" xml:"Boxes,omitempty" require:"true" type:"Repeated"`
}

func (s DetectObjectResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s DetectObjectResponseDataElements) GoString() string {
	return s.String()
}

func (s *DetectObjectResponseDataElements) SetScore(v float32) *DetectObjectResponseDataElements {
	s.Score = &v
	return s
}

func (s *DetectObjectResponseDataElements) SetType(v string) *DetectObjectResponseDataElements {
	s.Type = &v
	return s
}

func (s *DetectObjectResponseDataElements) SetBoxes(v []*int) *DetectObjectResponseDataElements {
	s.Boxes = v
	return s
}

type DetectObjectAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s DetectObjectAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectObjectAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectObjectAdvanceRequest) SetImageURLObject(v io.Reader) *DetectObjectAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type DetectWhiteBaseImageRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s DetectWhiteBaseImageRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectWhiteBaseImageRequest) GoString() string {
	return s.String()
}

func (s *DetectWhiteBaseImageRequest) SetImageURL(v string) *DetectWhiteBaseImageRequest {
	s.ImageURL = &v
	return s
}

type DetectWhiteBaseImageResponse struct {
	RequestId *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectWhiteBaseImageResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectWhiteBaseImageResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectWhiteBaseImageResponse) GoString() string {
	return s.String()
}

func (s *DetectWhiteBaseImageResponse) SetRequestId(v string) *DetectWhiteBaseImageResponse {
	s.RequestId = &v
	return s
}

func (s *DetectWhiteBaseImageResponse) SetData(v *DetectWhiteBaseImageResponseData) *DetectWhiteBaseImageResponse {
	s.Data = v
	return s
}

type DetectWhiteBaseImageResponseData struct {
	Elements []*DetectWhiteBaseImageResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s DetectWhiteBaseImageResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectWhiteBaseImageResponseData) GoString() string {
	return s.String()
}

func (s *DetectWhiteBaseImageResponseData) SetElements(v []*DetectWhiteBaseImageResponseDataElements) *DetectWhiteBaseImageResponseData {
	s.Elements = v
	return s
}

type DetectWhiteBaseImageResponseDataElements struct {
	WhiteBase *int `json:"WhiteBase,omitempty" xml:"WhiteBase,omitempty" require:"true"`
}

func (s DetectWhiteBaseImageResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s DetectWhiteBaseImageResponseDataElements) GoString() string {
	return s.String()
}

func (s *DetectWhiteBaseImageResponseDataElements) SetWhiteBase(v int) *DetectWhiteBaseImageResponseDataElements {
	s.WhiteBase = &v
	return s
}

type DetectWhiteBaseImageAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s DetectWhiteBaseImageAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectWhiteBaseImageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectWhiteBaseImageAdvanceRequest) SetImageURLObject(v io.Reader) *DetectWhiteBaseImageAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type ClassifyVehicleInsuranceRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s ClassifyVehicleInsuranceRequest) String() string {
	return tea.Prettify(s)
}

func (s ClassifyVehicleInsuranceRequest) GoString() string {
	return s.String()
}

func (s *ClassifyVehicleInsuranceRequest) SetImageURL(v string) *ClassifyVehicleInsuranceRequest {
	s.ImageURL = &v
	return s
}

type ClassifyVehicleInsuranceResponse struct {
	RequestId *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *ClassifyVehicleInsuranceResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ClassifyVehicleInsuranceResponse) String() string {
	return tea.Prettify(s)
}

func (s ClassifyVehicleInsuranceResponse) GoString() string {
	return s.String()
}

func (s *ClassifyVehicleInsuranceResponse) SetRequestId(v string) *ClassifyVehicleInsuranceResponse {
	s.RequestId = &v
	return s
}

func (s *ClassifyVehicleInsuranceResponse) SetData(v *ClassifyVehicleInsuranceResponseData) *ClassifyVehicleInsuranceResponse {
	s.Data = v
	return s
}

type ClassifyVehicleInsuranceResponseData struct {
	Threshold *float32                                      `json:"Threshold,omitempty" xml:"Threshold,omitempty" require:"true"`
	Labels    []*ClassifyVehicleInsuranceResponseDataLabels `json:"Labels,omitempty" xml:"Labels,omitempty" require:"true" type:"Repeated"`
}

func (s ClassifyVehicleInsuranceResponseData) String() string {
	return tea.Prettify(s)
}

func (s ClassifyVehicleInsuranceResponseData) GoString() string {
	return s.String()
}

func (s *ClassifyVehicleInsuranceResponseData) SetThreshold(v float32) *ClassifyVehicleInsuranceResponseData {
	s.Threshold = &v
	return s
}

func (s *ClassifyVehicleInsuranceResponseData) SetLabels(v []*ClassifyVehicleInsuranceResponseDataLabels) *ClassifyVehicleInsuranceResponseData {
	s.Labels = v
	return s
}

type ClassifyVehicleInsuranceResponseDataLabels struct {
	Score *float32 `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Name  *string  `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s ClassifyVehicleInsuranceResponseDataLabels) String() string {
	return tea.Prettify(s)
}

func (s ClassifyVehicleInsuranceResponseDataLabels) GoString() string {
	return s.String()
}

func (s *ClassifyVehicleInsuranceResponseDataLabels) SetScore(v float32) *ClassifyVehicleInsuranceResponseDataLabels {
	s.Score = &v
	return s
}

func (s *ClassifyVehicleInsuranceResponseDataLabels) SetName(v string) *ClassifyVehicleInsuranceResponseDataLabels {
	s.Name = &v
	return s
}

type ClassifyVehicleInsuranceAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s ClassifyVehicleInsuranceAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s ClassifyVehicleInsuranceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *ClassifyVehicleInsuranceAdvanceRequest) SetImageURLObject(v io.Reader) *ClassifyVehicleInsuranceAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeVehicleDashboardRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s RecognizeVehicleDashboardRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleDashboardRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleDashboardRequest) SetImageURL(v string) *RecognizeVehicleDashboardRequest {
	s.ImageURL = &v
	return s
}

type RecognizeVehicleDashboardResponse struct {
	RequestId *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeVehicleDashboardResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeVehicleDashboardResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleDashboardResponse) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleDashboardResponse) SetRequestId(v string) *RecognizeVehicleDashboardResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeVehicleDashboardResponse) SetData(v *RecognizeVehicleDashboardResponseData) *RecognizeVehicleDashboardResponse {
	s.Data = v
	return s
}

type RecognizeVehicleDashboardResponseData struct {
	Elements []*RecognizeVehicleDashboardResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeVehicleDashboardResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleDashboardResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleDashboardResponseData) SetElements(v []*RecognizeVehicleDashboardResponseDataElements) *RecognizeVehicleDashboardResponseData {
	s.Elements = v
	return s
}

type RecognizeVehicleDashboardResponseDataElements struct {
	Score     *float32   `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	ClassName *string    `json:"ClassName,omitempty" xml:"ClassName,omitempty" require:"true"`
	Label     *string    `json:"Label,omitempty" xml:"Label,omitempty" require:"true"`
	Boxes     []*float32 `json:"Boxes,omitempty" xml:"Boxes,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeVehicleDashboardResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleDashboardResponseDataElements) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleDashboardResponseDataElements) SetScore(v float32) *RecognizeVehicleDashboardResponseDataElements {
	s.Score = &v
	return s
}

func (s *RecognizeVehicleDashboardResponseDataElements) SetClassName(v string) *RecognizeVehicleDashboardResponseDataElements {
	s.ClassName = &v
	return s
}

func (s *RecognizeVehicleDashboardResponseDataElements) SetLabel(v string) *RecognizeVehicleDashboardResponseDataElements {
	s.Label = &v
	return s
}

func (s *RecognizeVehicleDashboardResponseDataElements) SetBoxes(v []*float32) *RecognizeVehicleDashboardResponseDataElements {
	s.Boxes = v
	return s
}

type RecognizeVehicleDashboardAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s RecognizeVehicleDashboardAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleDashboardAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleDashboardAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeVehicleDashboardAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeVehicleDamageRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s RecognizeVehicleDamageRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleDamageRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleDamageRequest) SetImageURL(v string) *RecognizeVehicleDamageRequest {
	s.ImageURL = &v
	return s
}

type RecognizeVehicleDamageResponse struct {
	RequestId *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeVehicleDamageResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeVehicleDamageResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleDamageResponse) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleDamageResponse) SetRequestId(v string) *RecognizeVehicleDamageResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeVehicleDamageResponse) SetData(v *RecognizeVehicleDamageResponseData) *RecognizeVehicleDamageResponse {
	s.Data = v
	return s
}

type RecognizeVehicleDamageResponseData struct {
	Elements []*RecognizeVehicleDamageResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeVehicleDamageResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleDamageResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleDamageResponseData) SetElements(v []*RecognizeVehicleDamageResponseDataElements) *RecognizeVehicleDamageResponseData {
	s.Elements = v
	return s
}

type RecognizeVehicleDamageResponseDataElements struct {
	Score  *float32   `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Type   *string    `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Scores []*float32 `json:"Scores,omitempty" xml:"Scores,omitempty" require:"true" type:"Repeated"`
	Boxes  []*int     `json:"Boxes,omitempty" xml:"Boxes,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeVehicleDamageResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleDamageResponseDataElements) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleDamageResponseDataElements) SetScore(v float32) *RecognizeVehicleDamageResponseDataElements {
	s.Score = &v
	return s
}

func (s *RecognizeVehicleDamageResponseDataElements) SetType(v string) *RecognizeVehicleDamageResponseDataElements {
	s.Type = &v
	return s
}

func (s *RecognizeVehicleDamageResponseDataElements) SetScores(v []*float32) *RecognizeVehicleDamageResponseDataElements {
	s.Scores = v
	return s
}

func (s *RecognizeVehicleDamageResponseDataElements) SetBoxes(v []*int) *RecognizeVehicleDamageResponseDataElements {
	s.Boxes = v
	return s
}

type RecognizeVehicleDamageAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s RecognizeVehicleDamageAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehicleDamageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVehicleDamageAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeVehicleDamageAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeVehiclePartsRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s RecognizeVehiclePartsRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehiclePartsRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVehiclePartsRequest) SetImageURL(v string) *RecognizeVehiclePartsRequest {
	s.ImageURL = &v
	return s
}

type RecognizeVehiclePartsResponse struct {
	RequestId *string                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *RecognizeVehiclePartsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s RecognizeVehiclePartsResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehiclePartsResponse) GoString() string {
	return s.String()
}

func (s *RecognizeVehiclePartsResponse) SetRequestId(v string) *RecognizeVehiclePartsResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeVehiclePartsResponse) SetData(v *RecognizeVehiclePartsResponseData) *RecognizeVehiclePartsResponse {
	s.Data = v
	return s
}

type RecognizeVehiclePartsResponseData struct {
	Elements     []*RecognizeVehiclePartsResponseDataElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
	OriginShapes []*int                                       `json:"OriginShapes,omitempty" xml:"OriginShapes,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeVehiclePartsResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehiclePartsResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeVehiclePartsResponseData) SetElements(v []*RecognizeVehiclePartsResponseDataElements) *RecognizeVehiclePartsResponseData {
	s.Elements = v
	return s
}

func (s *RecognizeVehiclePartsResponseData) SetOriginShapes(v []*int) *RecognizeVehiclePartsResponseData {
	s.OriginShapes = v
	return s
}

type RecognizeVehiclePartsResponseDataElements struct {
	Score *float32 `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Type  *string  `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Boxes []*int   `json:"Boxes,omitempty" xml:"Boxes,omitempty" require:"true" type:"Repeated"`
}

func (s RecognizeVehiclePartsResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehiclePartsResponseDataElements) GoString() string {
	return s.String()
}

func (s *RecognizeVehiclePartsResponseDataElements) SetScore(v float32) *RecognizeVehiclePartsResponseDataElements {
	s.Score = &v
	return s
}

func (s *RecognizeVehiclePartsResponseDataElements) SetType(v string) *RecognizeVehiclePartsResponseDataElements {
	s.Type = &v
	return s
}

func (s *RecognizeVehiclePartsResponseDataElements) SetBoxes(v []*int) *RecognizeVehiclePartsResponseDataElements {
	s.Boxes = v
	return s
}

type RecognizeVehiclePartsAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s RecognizeVehiclePartsAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeVehiclePartsAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeVehiclePartsAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeVehiclePartsAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type DetectVehicleRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s DetectVehicleRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectVehicleRequest) GoString() string {
	return s.String()
}

func (s *DetectVehicleRequest) SetImageURL(v string) *DetectVehicleRequest {
	s.ImageURL = &v
	return s
}

type DetectVehicleResponse struct {
	RequestId *string                    `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectVehicleResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectVehicleResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectVehicleResponse) GoString() string {
	return s.String()
}

func (s *DetectVehicleResponse) SetRequestId(v string) *DetectVehicleResponse {
	s.RequestId = &v
	return s
}

func (s *DetectVehicleResponse) SetData(v *DetectVehicleResponseData) *DetectVehicleResponse {
	s.Data = v
	return s
}

type DetectVehicleResponseData struct {
	Width                *int                                             `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height               *int                                             `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
	DetectObjectInfoList []*DetectVehicleResponseDataDetectObjectInfoList `json:"DetectObjectInfoList,omitempty" xml:"DetectObjectInfoList,omitempty" require:"true" type:"Repeated"`
}

func (s DetectVehicleResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectVehicleResponseData) GoString() string {
	return s.String()
}

func (s *DetectVehicleResponseData) SetWidth(v int) *DetectVehicleResponseData {
	s.Width = &v
	return s
}

func (s *DetectVehicleResponseData) SetHeight(v int) *DetectVehicleResponseData {
	s.Height = &v
	return s
}

func (s *DetectVehicleResponseData) SetDetectObjectInfoList(v []*DetectVehicleResponseDataDetectObjectInfoList) *DetectVehicleResponseData {
	s.DetectObjectInfoList = v
	return s
}

type DetectVehicleResponseDataDetectObjectInfoList struct {
	Score *float32 `json:"Score,omitempty" xml:"Score,omitempty" require:"true"`
	Type  *string  `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	Id    *int     `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Boxes []*int   `json:"Boxes,omitempty" xml:"Boxes,omitempty" require:"true" type:"Repeated"`
}

func (s DetectVehicleResponseDataDetectObjectInfoList) String() string {
	return tea.Prettify(s)
}

func (s DetectVehicleResponseDataDetectObjectInfoList) GoString() string {
	return s.String()
}

func (s *DetectVehicleResponseDataDetectObjectInfoList) SetScore(v float32) *DetectVehicleResponseDataDetectObjectInfoList {
	s.Score = &v
	return s
}

func (s *DetectVehicleResponseDataDetectObjectInfoList) SetType(v string) *DetectVehicleResponseDataDetectObjectInfoList {
	s.Type = &v
	return s
}

func (s *DetectVehicleResponseDataDetectObjectInfoList) SetId(v int) *DetectVehicleResponseDataDetectObjectInfoList {
	s.Id = &v
	return s
}

func (s *DetectVehicleResponseDataDetectObjectInfoList) SetBoxes(v []*int) *DetectVehicleResponseDataDetectObjectInfoList {
	s.Boxes = v
	return s
}

type DetectVehicleAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s DetectVehicleAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectVehicleAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectVehicleAdvanceRequest) SetImageURLObject(v io.Reader) *DetectVehicleAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type DetectMainBodyRequest struct {
	ImageURL *string `json:"ImageURL,omitempty" xml:"ImageURL,omitempty" require:"true"`
}

func (s DetectMainBodyRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectMainBodyRequest) GoString() string {
	return s.String()
}

func (s *DetectMainBodyRequest) SetImageURL(v string) *DetectMainBodyRequest {
	s.ImageURL = &v
	return s
}

type DetectMainBodyResponse struct {
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectMainBodyResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectMainBodyResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectMainBodyResponse) GoString() string {
	return s.String()
}

func (s *DetectMainBodyResponse) SetRequestId(v string) *DetectMainBodyResponse {
	s.RequestId = &v
	return s
}

func (s *DetectMainBodyResponse) SetData(v *DetectMainBodyResponseData) *DetectMainBodyResponse {
	s.Data = v
	return s
}

type DetectMainBodyResponseData struct {
	Location *DetectMainBodyResponseDataLocation `json:"Location,omitempty" xml:"Location,omitempty" require:"true" type:"Struct"`
}

func (s DetectMainBodyResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectMainBodyResponseData) GoString() string {
	return s.String()
}

func (s *DetectMainBodyResponseData) SetLocation(v *DetectMainBodyResponseDataLocation) *DetectMainBodyResponseData {
	s.Location = v
	return s
}

type DetectMainBodyResponseDataLocation struct {
	X      *int `json:"X,omitempty" xml:"X,omitempty" require:"true"`
	Y      *int `json:"Y,omitempty" xml:"Y,omitempty" require:"true"`
	Width  *int `json:"Width,omitempty" xml:"Width,omitempty" require:"true"`
	Height *int `json:"Height,omitempty" xml:"Height,omitempty" require:"true"`
}

func (s DetectMainBodyResponseDataLocation) String() string {
	return tea.Prettify(s)
}

func (s DetectMainBodyResponseDataLocation) GoString() string {
	return s.String()
}

func (s *DetectMainBodyResponseDataLocation) SetX(v int) *DetectMainBodyResponseDataLocation {
	s.X = &v
	return s
}

func (s *DetectMainBodyResponseDataLocation) SetY(v int) *DetectMainBodyResponseDataLocation {
	s.Y = &v
	return s
}

func (s *DetectMainBodyResponseDataLocation) SetWidth(v int) *DetectMainBodyResponseDataLocation {
	s.Width = &v
	return s
}

func (s *DetectMainBodyResponseDataLocation) SetHeight(v int) *DetectMainBodyResponseDataLocation {
	s.Height = &v
	return s
}

type DetectMainBodyAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject,omitempty" xml:"ImageURLObject,omitempty" require:"true"`
}

func (s DetectMainBodyAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectMainBodyAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectMainBodyAdvanceRequest) SetImageURLObject(v io.Reader) *DetectMainBodyAdvanceRequest {
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
	client.Endpoint, _err = client.GetEndpoint(tea.String("objectdet"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) GenerateVehicleRepairPlan(request *GenerateVehicleRepairPlanRequest, runtime *util.RuntimeOptions) (_result *GenerateVehicleRepairPlanResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GenerateVehicleRepairPlanResponse{}
	_body, _err := client.DoRequest(tea.String("GenerateVehicleRepairPlan"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetVehicleRepairPlan(request *GetVehicleRepairPlanRequest, runtime *util.RuntimeOptions) (_result *GetVehicleRepairPlanResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetVehicleRepairPlanResponse{}
	_body, _err := client.DoRequest(tea.String("GetVehicleRepairPlan"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectTransparentImage(request *DetectTransparentImageRequest, runtime *util.RuntimeOptions) (_result *DetectTransparentImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectTransparentImageResponse{}
	_body, _err := client.DoRequest(tea.String("DetectTransparentImage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectTransparentImageAdvance(request *DetectTransparentImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectTransparentImageResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	detectTransparentImagereq := &DetectTransparentImageRequest{}
	rpcutil.Convert(request, detectTransparentImagereq)
	detectTransparentImagereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectTransparentImageResp, _err := client.DetectTransparentImage(detectTransparentImagereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectTransparentImageResp
	return _result, _err
}

func (client *Client) DetectObject(request *DetectObjectRequest, runtime *util.RuntimeOptions) (_result *DetectObjectResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectObjectResponse{}
	_body, _err := client.DoRequest(tea.String("DetectObject"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectObjectAdvance(request *DetectObjectAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectObjectResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	detectObjectreq := &DetectObjectRequest{}
	rpcutil.Convert(request, detectObjectreq)
	detectObjectreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectObjectResp, _err := client.DetectObject(detectObjectreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectObjectResp
	return _result, _err
}

func (client *Client) DetectWhiteBaseImage(request *DetectWhiteBaseImageRequest, runtime *util.RuntimeOptions) (_result *DetectWhiteBaseImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectWhiteBaseImageResponse{}
	_body, _err := client.DoRequest(tea.String("DetectWhiteBaseImage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectWhiteBaseImageAdvance(request *DetectWhiteBaseImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectWhiteBaseImageResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	detectWhiteBaseImagereq := &DetectWhiteBaseImageRequest{}
	rpcutil.Convert(request, detectWhiteBaseImagereq)
	detectWhiteBaseImagereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectWhiteBaseImageResp, _err := client.DetectWhiteBaseImage(detectWhiteBaseImagereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectWhiteBaseImageResp
	return _result, _err
}

func (client *Client) ClassifyVehicleInsurance(request *ClassifyVehicleInsuranceRequest, runtime *util.RuntimeOptions) (_result *ClassifyVehicleInsuranceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ClassifyVehicleInsuranceResponse{}
	_body, _err := client.DoRequest(tea.String("ClassifyVehicleInsurance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ClassifyVehicleInsuranceAdvance(request *ClassifyVehicleInsuranceAdvanceRequest, runtime *util.RuntimeOptions) (_result *ClassifyVehicleInsuranceResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	classifyVehicleInsurancereq := &ClassifyVehicleInsuranceRequest{}
	rpcutil.Convert(request, classifyVehicleInsurancereq)
	classifyVehicleInsurancereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	classifyVehicleInsuranceResp, _err := client.ClassifyVehicleInsurance(classifyVehicleInsurancereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = classifyVehicleInsuranceResp
	return _result, _err
}

func (client *Client) RecognizeVehicleDashboard(request *RecognizeVehicleDashboardRequest, runtime *util.RuntimeOptions) (_result *RecognizeVehicleDashboardResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeVehicleDashboardResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeVehicleDashboard"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVehicleDashboardAdvance(request *RecognizeVehicleDashboardAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVehicleDashboardResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	recognizeVehicleDashboardreq := &RecognizeVehicleDashboardRequest{}
	rpcutil.Convert(request, recognizeVehicleDashboardreq)
	recognizeVehicleDashboardreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeVehicleDashboardResp, _err := client.RecognizeVehicleDashboard(recognizeVehicleDashboardreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeVehicleDashboardResp
	return _result, _err
}

func (client *Client) RecognizeVehicleDamage(request *RecognizeVehicleDamageRequest, runtime *util.RuntimeOptions) (_result *RecognizeVehicleDamageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeVehicleDamageResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeVehicleDamage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVehicleDamageAdvance(request *RecognizeVehicleDamageAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVehicleDamageResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	recognizeVehicleDamagereq := &RecognizeVehicleDamageRequest{}
	rpcutil.Convert(request, recognizeVehicleDamagereq)
	recognizeVehicleDamagereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeVehicleDamageResp, _err := client.RecognizeVehicleDamage(recognizeVehicleDamagereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeVehicleDamageResp
	return _result, _err
}

func (client *Client) RecognizeVehicleParts(request *RecognizeVehiclePartsRequest, runtime *util.RuntimeOptions) (_result *RecognizeVehiclePartsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &RecognizeVehiclePartsResponse{}
	_body, _err := client.DoRequest(tea.String("RecognizeVehicleParts"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVehiclePartsAdvance(request *RecognizeVehiclePartsAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVehiclePartsResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	recognizeVehiclePartsreq := &RecognizeVehiclePartsRequest{}
	rpcutil.Convert(request, recognizeVehiclePartsreq)
	recognizeVehiclePartsreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeVehiclePartsResp, _err := client.RecognizeVehicleParts(recognizeVehiclePartsreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = recognizeVehiclePartsResp
	return _result, _err
}

func (client *Client) DetectVehicle(request *DetectVehicleRequest, runtime *util.RuntimeOptions) (_result *DetectVehicleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectVehicleResponse{}
	_body, _err := client.DoRequest(tea.String("DetectVehicle"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectVehicleAdvance(request *DetectVehicleAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectVehicleResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	detectVehiclereq := &DetectVehicleRequest{}
	rpcutil.Convert(request, detectVehiclereq)
	detectVehiclereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectVehicleResp, _err := client.DetectVehicle(detectVehiclereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectVehicleResp
	return _result, _err
}

func (client *Client) DetectMainBody(request *DetectMainBodyRequest, runtime *util.RuntimeOptions) (_result *DetectMainBodyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectMainBodyResponse{}
	_body, _err := client.DoRequest(tea.String("DetectMainBody"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-12-30"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectMainBodyAdvance(request *DetectMainBodyAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectMainBodyResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	detectMainBodyreq := &DetectMainBodyRequest{}
	rpcutil.Convert(request, detectMainBodyreq)
	detectMainBodyreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectMainBodyResp, _err := client.DetectMainBody(detectMainBodyreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectMainBodyResp
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
