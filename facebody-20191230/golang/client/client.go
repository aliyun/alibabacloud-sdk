// This file is auto-generated, don't edit it. Thanks.
package client

import (
	"github.com/alibabacloud-go/tea/tea"
	oss "github.com/aliyun/alibabacloud-oss-sdk/golang/client"
	ossutil "github.com/aliyun/alibabacloud-oss-sdk/util/golang/service"
	rpcutil "github.com/aliyun/alibabacloud-rpc-util-sdk/golang/service"
	openplatform "github.com/aliyun/alibabacloud-sdk/openplatform-20191219/golang/client"
	credential "github.com/aliyun/credentials-go/credentials"
	fileform "github.com/aliyun/tea-fileform/golang/service"
	util "github.com/aliyun/tea-util/golang/service"
	"io"
)

type Config struct {
	AccessKeyId          *string `json:"accessKeyId" xml:"accessKeyId"`
	AccessKeySecret      *string `json:"accessKeySecret" xml:"accessKeySecret"`
	Type                 *string `json:"type" xml:"type"`
	SecurityToken        *string `json:"securityToken" xml:"securityToken"`
	Endpoint             *string `json:"endpoint" xml:"endpoint" require:"true"`
	Protocol             *string `json:"protocol" xml:"protocol"`
	RegionId             *string `json:"regionId" xml:"regionId" require:"true"`
	UserAgent            *string `json:"userAgent" xml:"userAgent"`
	ReadTimeout          *int    `json:"readTimeout" xml:"readTimeout"`
	ConnectTimeout       *int    `json:"connectTimeout" xml:"connectTimeout"`
	HttpProxy            *string `json:"httpProxy" xml:"httpProxy"`
	HttpsProxy           *string `json:"httpsProxy" xml:"httpsProxy"`
	NoProxy              *string `json:"noProxy" xml:"noProxy"`
	Socks5Proxy          *string `json:"socks5Proxy" xml:"socks5Proxy"`
	Socks5NetWork        *string `json:"socks5NetWork" xml:"socks5NetWork"`
	MaxIdleConns         *int    `json:"maxIdleConns" xml:"maxIdleConns"`
	EndpointType         *string `json:"endpointType" xml:"endpointType"`
	OpenPlatformEndpoint *string `json:"openPlatformEndpoint" xml:"openPlatformEndpoint"`
}

func (s Config) String() string {
	return tea.Prettify(s)
}

func (s Config) GoString() string {
	return s.String()
}

func (s *Config) SetAccessKeyId(v string) *Config {
	s.AccessKeyId = &v
	return s
}

func (s *Config) SetAccessKeySecret(v string) *Config {
	s.AccessKeySecret = &v
	return s
}

func (s *Config) SetType(v string) *Config {
	s.Type = &v
	return s
}

func (s *Config) SetSecurityToken(v string) *Config {
	s.SecurityToken = &v
	return s
}

func (s *Config) SetEndpoint(v string) *Config {
	s.Endpoint = &v
	return s
}

func (s *Config) SetProtocol(v string) *Config {
	s.Protocol = &v
	return s
}

func (s *Config) SetRegionId(v string) *Config {
	s.RegionId = &v
	return s
}

func (s *Config) SetUserAgent(v string) *Config {
	s.UserAgent = &v
	return s
}

func (s *Config) SetReadTimeout(v int) *Config {
	s.ReadTimeout = &v
	return s
}

func (s *Config) SetConnectTimeout(v int) *Config {
	s.ConnectTimeout = &v
	return s
}

func (s *Config) SetHttpProxy(v string) *Config {
	s.HttpProxy = &v
	return s
}

func (s *Config) SetHttpsProxy(v string) *Config {
	s.HttpsProxy = &v
	return s
}

func (s *Config) SetNoProxy(v string) *Config {
	s.NoProxy = &v
	return s
}

func (s *Config) SetSocks5Proxy(v string) *Config {
	s.Socks5Proxy = &v
	return s
}

func (s *Config) SetSocks5NetWork(v string) *Config {
	s.Socks5NetWork = &v
	return s
}

func (s *Config) SetMaxIdleConns(v int) *Config {
	s.MaxIdleConns = &v
	return s
}

func (s *Config) SetEndpointType(v string) *Config {
	s.EndpointType = &v
	return s
}

func (s *Config) SetOpenPlatformEndpoint(v string) *Config {
	s.OpenPlatformEndpoint = &v
	return s
}

type FaceMakeupRequest struct {
	ImageURL     *string  `json:"ImageURL" xml:"ImageURL" require:"true"`
	MakeupType   *string  `json:"MakeupType" xml:"MakeupType" require:"true"`
	ResourceType *string  `json:"ResourceType" xml:"ResourceType" require:"true"`
	Strength     *float32 `json:"Strength" xml:"Strength" require:"true"`
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
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *FaceMakeupResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	MakeupType     *string   `json:"MakeupType" xml:"MakeupType" require:"true"`
	ResourceType   *string   `json:"ResourceType" xml:"ResourceType" require:"true"`
	Strength       *float32  `json:"Strength" xml:"Strength" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                  `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *HandPostureResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Outputs    []*HandPostureResponseDataOutputs  `json:"Outputs" xml:"Outputs" require:"true" type:"Repeated"`
	MetaObject *HandPostureResponseDataMetaObject `json:"MetaObject" xml:"MetaObject" require:"true" type:"Struct"`
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
	HandCount *int                                     `json:"HandCount" xml:"HandCount" require:"true"`
	Results   []*HandPostureResponseDataOutputsResults `json:"Results" xml:"Results" require:"true" type:"Repeated"`
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
	Box   *HandPostureResponseDataOutputsResultsBox   `json:"Box" xml:"Box" require:"true" type:"Struct"`
	Hands *HandPostureResponseDataOutputsResultsHands `json:"Hands" xml:"Hands" require:"true" type:"Struct"`
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
	Confident *float32                                             `json:"Confident" xml:"Confident" require:"true"`
	Positions []*HandPostureResponseDataOutputsResultsBoxPositions `json:"Positions" xml:"Positions" require:"true" type:"Repeated"`
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
	Points []*float32 `json:"Points" xml:"Points" require:"true" type:"Repeated"`
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
	Confident *float32                                               `json:"Confident" xml:"Confident" require:"true"`
	KeyPoints []*HandPostureResponseDataOutputsResultsHandsKeyPoints `json:"KeyPoints" xml:"KeyPoints" require:"true" type:"Repeated"`
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
	Label     *string                                                         `json:"Label" xml:"Label" require:"true"`
	Positions []*HandPostureResponseDataOutputsResultsHandsKeyPointsPositions `json:"Positions" xml:"Positions" require:"true" type:"Repeated"`
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
	Points []*float32 `json:"Points" xml:"Points" require:"true" type:"Repeated"`
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
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                  `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *BodyPostureResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Outputs    []*BodyPostureResponseDataOutputs  `json:"Outputs" xml:"Outputs" require:"true" type:"Repeated"`
	MetaObject *BodyPostureResponseDataMetaObject `json:"MetaObject" xml:"MetaObject" require:"true" type:"Struct"`
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
	HumanCount *int                                     `json:"HumanCount" xml:"HumanCount" require:"true"`
	Results    []*BodyPostureResponseDataOutputsResults `json:"Results" xml:"Results" require:"true" type:"Repeated"`
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
	Bodies []*BodyPostureResponseDataOutputsResultsBodies `json:"Bodies" xml:"Bodies" require:"true" type:"Repeated"`
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
	Confident *float32                                                `json:"Confident" xml:"Confident" require:"true"`
	Label     *string                                                 `json:"Label" xml:"Label" require:"true"`
	Positions []*BodyPostureResponseDataOutputsResultsBodiesPositions `json:"Positions" xml:"Positions" require:"true" type:"Repeated"`
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
	Points []*float32 `json:"Points" xml:"Points" require:"true" type:"Repeated"`
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
	Height *int `json:"Height" xml:"Height" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                       `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DetectPedestrianResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Width    *int                                    `json:"Width" xml:"Width" require:"true"`
	Height   *int                                    `json:"Height" xml:"Height" require:"true"`
	Elements []*DetectPedestrianResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
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
	Score *float32 `json:"Score" xml:"Score" require:"true"`
	Type  *string  `json:"Type" xml:"Type" require:"true"`
	Boxes []*int   `json:"Boxes" xml:"Boxes" require:"true" type:"Repeated"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURL *string  `json:"ImageURL" xml:"ImageURL" require:"true"`
	Sharp    *float32 `json:"Sharp" xml:"Sharp" require:"true"`
	Smooth   *float32 `json:"Smooth" xml:"Smooth" require:"true"`
	White    *float32 `json:"White" xml:"White" require:"true"`
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
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *FaceBeautyResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	Sharp          *float32  `json:"Sharp" xml:"Sharp" require:"true"`
	Smooth         *float32  `json:"Smooth" xml:"Smooth" require:"true"`
	White          *float32  `json:"White" xml:"White" require:"true"`
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
	ImageURL     *string  `json:"ImageURL" xml:"ImageURL" require:"true"`
	ResourceType *string  `json:"ResourceType" xml:"ResourceType" require:"true"`
	Strength     *float32 `json:"Strength" xml:"Strength" require:"true"`
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
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *FaceFilterResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ResourceType   *string   `json:"ResourceType" xml:"ResourceType" require:"true"`
	Strength       *float32  `json:"Strength" xml:"Strength" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                  `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *EnhanceFaceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURL  *string  `json:"ImageURL" xml:"ImageURL" require:"true"`
	ShapeType *int     `json:"ShapeType" xml:"ShapeType" require:"true"`
	Strength  *float32 `json:"Strength" xml:"Strength" require:"true"`
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
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *FaceTidyupResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ShapeType      *int      `json:"ShapeType" xml:"ShapeType" require:"true"`
	Strength       *float32  `json:"Strength" xml:"Strength" require:"true"`
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
	DbName   *string `json:"DbName" xml:"DbName" require:"true"`
	ImageUrl *string `json:"ImageUrl" xml:"ImageUrl" require:"true"`
	Limit    *int    `json:"Limit" xml:"Limit" require:"true"`
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
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *SearchFaceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	MatchList []*SearchFaceResponseDataMatchList `json:"MatchList" xml:"MatchList" require:"true" type:"Repeated"`
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
	FaceItems []*SearchFaceResponseDataMatchListFaceItems `json:"FaceItems" xml:"FaceItems" require:"true" type:"Repeated"`
	Location  *SearchFaceResponseDataMatchListLocation    `json:"Location" xml:"Location" require:"true" type:"Struct"`
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
	FaceId    *string  `json:"FaceId" xml:"FaceId" require:"true"`
	Score     *float32 `json:"Score" xml:"Score" require:"true"`
	ExtraData *string  `json:"ExtraData" xml:"ExtraData" require:"true"`
	EntityId  *string  `json:"EntityId" xml:"EntityId" require:"true"`
	ImageUrl  *string  `json:"ImageUrl" xml:"ImageUrl" require:"true"`
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

func (s *SearchFaceResponseDataMatchListFaceItems) SetImageUrl(v string) *SearchFaceResponseDataMatchListFaceItems {
	s.ImageUrl = &v
	return s
}

type SearchFaceResponseDataMatchListLocation struct {
	X      *int `json:"X" xml:"X" require:"true"`
	Y      *int `json:"Y" xml:"Y" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
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
	ImageUrlObject io.Reader `json:"ImageUrlObject" xml:"ImageUrlObject" require:"true"`
	DbName         *string   `json:"DbName" xml:"DbName" require:"true"`
	Limit          *int      `json:"Limit" xml:"Limit" require:"true"`
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
	RequestId *string                  `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ListFaceDbsResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	DbList []*ListFaceDbsResponseDataDbList `json:"DbList" xml:"DbList" require:"true" type:"Repeated"`
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
	Name *string `json:"Name" xml:"Name" require:"true"`
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

type ListFacesRequest struct {
	DbName       *string `json:"DbName" xml:"DbName" require:"true"`
	FromScrollId *string `json:"FromScrollId" xml:"FromScrollId"`
}

func (s ListFacesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListFacesRequest) GoString() string {
	return s.String()
}

func (s *ListFacesRequest) SetDbName(v string) *ListFacesRequest {
	s.DbName = &v
	return s
}

func (s *ListFacesRequest) SetFromScrollId(v string) *ListFacesRequest {
	s.FromScrollId = &v
	return s
}

type ListFacesResponse struct {
	RequestId *string                `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ListFacesResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s ListFacesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListFacesResponse) GoString() string {
	return s.String()
}

func (s *ListFacesResponse) SetRequestId(v string) *ListFacesResponse {
	s.RequestId = &v
	return s
}

func (s *ListFacesResponse) SetData(v *ListFacesResponseData) *ListFacesResponse {
	s.Data = v
	return s
}

type ListFacesResponseData struct {
	ScrollId *string                          `json:"ScrollId" xml:"ScrollId" require:"true"`
	FaceList []*ListFacesResponseDataFaceList `json:"FaceList" xml:"FaceList" require:"true" type:"Repeated"`
}

func (s ListFacesResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListFacesResponseData) GoString() string {
	return s.String()
}

func (s *ListFacesResponseData) SetScrollId(v string) *ListFacesResponseData {
	s.ScrollId = &v
	return s
}

func (s *ListFacesResponseData) SetFaceList(v []*ListFacesResponseDataFaceList) *ListFacesResponseData {
	s.FaceList = v
	return s
}

type ListFacesResponseDataFaceList struct {
	FaceId    *string `json:"FaceId" xml:"FaceId" require:"true"`
	ExtraData *string `json:"ExtraData" xml:"ExtraData" require:"true"`
	EntityId  *string `json:"EntityId" xml:"EntityId" require:"true"`
	ImageUrl  *string `json:"ImageUrl" xml:"ImageUrl" require:"true"`
}

func (s ListFacesResponseDataFaceList) String() string {
	return tea.Prettify(s)
}

func (s ListFacesResponseDataFaceList) GoString() string {
	return s.String()
}

func (s *ListFacesResponseDataFaceList) SetFaceId(v string) *ListFacesResponseDataFaceList {
	s.FaceId = &v
	return s
}

func (s *ListFacesResponseDataFaceList) SetExtraData(v string) *ListFacesResponseDataFaceList {
	s.ExtraData = &v
	return s
}

func (s *ListFacesResponseDataFaceList) SetEntityId(v string) *ListFacesResponseDataFaceList {
	s.EntityId = &v
	return s
}

func (s *ListFacesResponseDataFaceList) SetImageUrl(v string) *ListFacesResponseDataFaceList {
	s.ImageUrl = &v
	return s
}

type CreateFaceDbRequest struct {
	Name *string `json:"Name" xml:"Name" require:"true"`
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
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
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
	DbName *string `json:"DbName" xml:"DbName" require:"true"`
	FaceId *string `json:"FaceId" xml:"FaceId" require:"true"`
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
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
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
	Name *string `json:"Name" xml:"Name" require:"true"`
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
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
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
	DbName    *string `json:"DbName" xml:"DbName" require:"true"`
	FaceId    *string `json:"FaceId" xml:"FaceId" require:"true"`
	ImageUrl  *string `json:"ImageUrl" xml:"ImageUrl" require:"true"`
	EntityId  *string `json:"EntityId" xml:"EntityId" require:"true"`
	ExtraData *string `json:"ExtraData" xml:"ExtraData"`
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

func (s *AddFaceRequest) SetFaceId(v string) *AddFaceRequest {
	s.FaceId = &v
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
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
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

type AddFaceAdvanceRequest struct {
	ImageUrlObject io.Reader `json:"ImageUrlObject" xml:"ImageUrlObject" require:"true"`
	DbName         *string   `json:"DbName" xml:"DbName" require:"true"`
	FaceId         *string   `json:"FaceId" xml:"FaceId" require:"true"`
	EntityId       *string   `json:"EntityId" xml:"EntityId" require:"true"`
	ExtraData      *string   `json:"ExtraData" xml:"ExtraData"`
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

func (s *AddFaceAdvanceRequest) SetFaceId(v string) *AddFaceAdvanceRequest {
	s.FaceId = &v
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                          `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeExpressionResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Elements []*RecognizeExpressionResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
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
	Expression      *string                                               `json:"Expression" xml:"Expression" require:"true"`
	FaceProbability *float32                                              `json:"FaceProbability" xml:"FaceProbability" require:"true"`
	FaceRectangle   *RecognizeExpressionResponseDataElementsFaceRectangle `json:"FaceRectangle" xml:"FaceRectangle" require:"true" type:"Struct"`
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
	Height *int `json:"Height" xml:"Height" require:"true"`
	Left   *int `json:"Left" xml:"Left" require:"true"`
	Top    *int `json:"Top" xml:"Top" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	Task []*RecognizePublicFaceRequestTask `json:"Task" xml:"Task" require:"true" type:"Repeated"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                          `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizePublicFaceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Elements []*RecognizePublicFaceResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
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
	TaskId   *string                                           `json:"TaskId" xml:"TaskId" require:"true"`
	ImageURL *string                                           `json:"ImageURL" xml:"ImageURL" require:"true"`
	Results  []*RecognizePublicFaceResponseDataElementsResults `json:"Results" xml:"Results" require:"true" type:"Repeated"`
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
	Label      *string                                                     `json:"Label" xml:"Label" require:"true"`
	Suggestion *string                                                     `json:"Suggestion" xml:"Suggestion" require:"true"`
	Rate       *float32                                                    `json:"Rate" xml:"Rate" require:"true"`
	SubResults []*RecognizePublicFaceResponseDataElementsResultsSubResults `json:"SubResults" xml:"SubResults" require:"true" type:"Repeated"`
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
	H     *float32                                                         `json:"H" xml:"H" require:"true"`
	W     *float32                                                         `json:"W" xml:"W" require:"true"`
	X     *float32                                                         `json:"X" xml:"X" require:"true"`
	Y     *float32                                                         `json:"Y" xml:"Y" require:"true"`
	Faces []*RecognizePublicFaceResponseDataElementsResultsSubResultsFaces `json:"Faces" xml:"Faces" require:"true" type:"Repeated"`
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
	Id   *string  `json:"Id" xml:"Id" require:"true"`
	Name *string  `json:"Name" xml:"Name" require:"true"`
	Rate *float32 `json:"Rate" xml:"Rate" require:"true"`
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
	Tasks []*DetectLivingFaceRequestTasks `json:"Tasks" xml:"Tasks" require:"true" type:"Repeated"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                       `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DetectLivingFaceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Elements []*DetectLivingFaceResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
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
	TaskId   *string                                        `json:"TaskId" xml:"TaskId" require:"true"`
	ImageURL *string                                        `json:"ImageURL" xml:"ImageURL" require:"true"`
	Results  []*DetectLivingFaceResponseDataElementsResults `json:"Results" xml:"Results" require:"true" type:"Repeated"`
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
	Label      *string                                              `json:"Label" xml:"Label" require:"true"`
	Suggestion *string                                              `json:"Suggestion" xml:"Suggestion" require:"true"`
	Rate       *float32                                             `json:"Rate" xml:"Rate" require:"true"`
	Frames     []*DetectLivingFaceResponseDataElementsResultsFrames `json:"Frames" xml:"Frames" require:"true" type:"Repeated"`
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
	Rate *float32 `json:"Rate" xml:"Rate" require:"true"`
	Url  *string  `json:"Url" xml:"Url" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                      `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DetectBodyCountResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	PersonNumber *int `json:"PersonNumber" xml:"PersonNumber" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DetectMaskResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Mask            *int     `json:"Mask" xml:"Mask" require:"true"`
	FaceProbability *float32 `json:"FaceProbability" xml:"FaceProbability" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                    `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeFaceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	FaceCount           *int       `json:"FaceCount" xml:"FaceCount" require:"true"`
	LandmarkCount       *int       `json:"LandmarkCount" xml:"LandmarkCount" require:"true"`
	DenseFeatureLength  *int       `json:"DenseFeatureLength" xml:"DenseFeatureLength" require:"true"`
	FaceRectangles      []*int     `json:"FaceRectangles" xml:"FaceRectangles" require:"true" type:"Repeated"`
	FaceProbabilityList []*float32 `json:"FaceProbabilityList" xml:"FaceProbabilityList" require:"true" type:"Repeated"`
	PoseList            []*float32 `json:"PoseList" xml:"PoseList" require:"true" type:"Repeated"`
	Landmarks           []*float32 `json:"Landmarks" xml:"Landmarks" require:"true" type:"Repeated"`
	Pupils              []*float32 `json:"Pupils" xml:"Pupils" require:"true" type:"Repeated"`
	GenderList          []*int     `json:"GenderList" xml:"GenderList" require:"true" type:"Repeated"`
	AgeList             []*int     `json:"AgeList" xml:"AgeList" require:"true" type:"Repeated"`
	Expressions         []*int     `json:"Expressions" xml:"Expressions" require:"true" type:"Repeated"`
	Glasses             []*int     `json:"Glasses" xml:"Glasses" require:"true" type:"Repeated"`
	DenseFeatures       []*string  `json:"DenseFeatures" xml:"DenseFeatures" require:"true" type:"Repeated"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURLA *string `json:"ImageURLA" xml:"ImageURLA" require:"true"`
	ImageURLB *string `json:"ImageURLB" xml:"ImageURLB" require:"true"`
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
	RequestId *string                  `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *CompareFaceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Confidence *float32   `json:"Confidence" xml:"Confidence" require:"true"`
	Thresholds []*float32 `json:"Thresholds" xml:"Thresholds" require:"true" type:"Repeated"`
	RectAList  []*int     `json:"RectAList" xml:"RectAList" require:"true" type:"Repeated"`
	RectBList  []*int     `json:"RectBList" xml:"RectBList" require:"true" type:"Repeated"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DetectFaceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	FaceCount           *int       `json:"FaceCount" xml:"FaceCount" require:"true"`
	LandmarkCount       *int       `json:"LandmarkCount" xml:"LandmarkCount" require:"true"`
	FaceRectangles      []*int     `json:"FaceRectangles" xml:"FaceRectangles" require:"true" type:"Repeated"`
	FaceProbabilityList []*float32 `json:"FaceProbabilityList" xml:"FaceProbabilityList" require:"true" type:"Repeated"`
	PoseList            []*float32 `json:"PoseList" xml:"PoseList" require:"true" type:"Repeated"`
	Landmarks           []*float32 `json:"Landmarks" xml:"Landmarks" require:"true" type:"Repeated"`
	Pupils              []*float32 `json:"Pupils" xml:"Pupils" require:"true" type:"Repeated"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	Endpoint             string
	RegionId             string
	Protocol             string
	UserAgent            string
	EndpointType         string
	ReadTimeout          int
	ConnectTimeout       int
	HttpProxy            string
	HttpsProxy           string
	Socks5Proxy          string
	Socks5NetWork        string
	NoProxy              string
	MaxIdleConns         int
	OpenPlatformEndpoint string
	Credential           credential.Credential
}

func NewClient(config *Config) (*Client, error) {
	client := new(Client)
	err := client.Init(config)
	return client, err
}

func (client *Client) Init(config *Config) (_err error) {
	if util.IsUnset(tea.ToMap(config)) {
		_err = tea.NewSDKError(map[string]interface{}{
			"name":    "ParameterMissing",
			"message": "'config' can not be unset",
		})
		return _err
	}

	if util.Empty(tea.StringValue(config.RegionId)) {
		_err = tea.NewSDKError(map[string]interface{}{
			"name":    "ParameterMissing",
			"message": "'config.regionId' can not be empty",
		})
		return _err
	}

	if util.Empty(tea.StringValue(config.Endpoint)) {
		_err = tea.NewSDKError(map[string]interface{}{
			"name":    "ParameterMissing",
			"message": "'config.endpoint' can not be empty",
		})
		return _err
	}

	if util.Empty(tea.StringValue(config.Type)) {
		config.Type = tea.String("access_key")
	}

	credentialConfig := &credential.Config{
		AccessKeyId:     config.AccessKeyId,
		Type:            config.Type,
		AccessKeySecret: config.AccessKeySecret,
		SecurityToken:   config.SecurityToken,
	}
	client.Credential, _err = credential.NewCredential(credentialConfig)
	if _err != nil {
		return _err
	}

	client.Endpoint = tea.StringValue(config.Endpoint)
	client.Protocol = tea.StringValue(config.Protocol)
	client.RegionId = tea.StringValue(config.RegionId)
	client.UserAgent = tea.StringValue(config.UserAgent)
	client.ReadTimeout = tea.IntValue(config.ReadTimeout)
	client.ConnectTimeout = tea.IntValue(config.ConnectTimeout)
	client.HttpProxy = tea.StringValue(config.HttpProxy)
	client.HttpsProxy = tea.StringValue(config.HttpsProxy)
	client.NoProxy = tea.StringValue(config.NoProxy)
	client.Socks5Proxy = tea.StringValue(config.Socks5Proxy)
	client.Socks5NetWork = tea.StringValue(config.Socks5NetWork)
	client.MaxIdleConns = tea.IntValue(config.MaxIdleConns)
	client.EndpointType = tea.StringValue(config.EndpointType)
	client.OpenPlatformEndpoint = tea.StringValue(config.OpenPlatformEndpoint)
	return nil
}

func (client *Client) _request(action string, protocol string, method string, authType string, query map[string]interface{}, body map[string]interface{}, runtime *util.RuntimeOptions) (_result map[string]interface{}, _err error) {
	_err = tea.Validate(runtime)
	if _err != nil {
		return nil, _err
	}
	_runtime := map[string]interface{}{
		"timeouted":      "retry",
		"readTimeout":    util.DefaultNumber(tea.IntValue(runtime.ReadTimeout), client.ReadTimeout),
		"connectTimeout": util.DefaultNumber(tea.IntValue(runtime.ConnectTimeout), client.ConnectTimeout),
		"httpProxy":      util.DefaultString(tea.StringValue(runtime.HttpProxy), client.HttpProxy),
		"httpsProxy":     util.DefaultString(tea.StringValue(runtime.HttpsProxy), client.HttpsProxy),
		"noProxy":        util.DefaultString(tea.StringValue(runtime.NoProxy), client.NoProxy),
		"maxIdleConns":   util.DefaultNumber(tea.IntValue(runtime.MaxIdleConns), client.MaxIdleConns),
		"retry": map[string]interface{}{
			"retryable":   tea.BoolValue(runtime.Autoretry),
			"maxAttempts": util.DefaultNumber(tea.IntValue(runtime.MaxAttempts), 3),
		},
		"backoff": map[string]interface{}{
			"policy": util.DefaultString(tea.StringValue(runtime.BackoffPolicy), "no"),
			"period": util.DefaultNumber(tea.IntValue(runtime.BackoffPeriod), 1),
		},
		"ignoreSSL": tea.BoolValue(runtime.IgnoreSSL),
	}

	_resp := make(map[string]interface{})
	for _retryTimes := 0; tea.AllowRetry(_runtime["retry"], _retryTimes); _retryTimes++ {
		if _retryTimes > 0 {
			_backoffTime := tea.GetBackoffTime(_runtime["backoff"], _retryTimes)
			if _backoffTime > 0 {
				tea.Sleep(_backoffTime)
			}
		}

		_resp, _err = func() (map[string]interface{}, error) {
			request_ := tea.NewRequest()
			request_.Protocol = util.DefaultString(client.Protocol, protocol)
			request_.Method = method
			request_.Pathname = "/"
			request_.Query = rpcutil.Query(tea.ToMap(map[string]interface{}{
				"Action":         action,
				"Format":         "json",
				"RegionId":       client.RegionId,
				"Timestamp":      rpcutil.GetTimestamp(),
				"Version":        "2019-12-30",
				"SignatureNonce": util.GetNonce(),
			}, query))
			if !util.IsUnset(body) {
				tmp := util.AnyifyMapValue(rpcutil.Query(body))
				request_.Body = tea.ToReader(util.ToFormString(tmp))
			}

			request_.Headers = map[string]string{
				"host":       rpcutil.GetHost("facebody", client.RegionId, client.Endpoint),
				"user-agent": client.GetUserAgent(),
			}
			if !util.EqualString(authType, "Anonymous") {
				accessKeyId, _err := client.GetAccessKeyId()
				if _err != nil {
					return nil, _err
				}

				accessKeySecret, _err := client.GetAccessKeySecret()
				if _err != nil {
					return nil, _err
				}

				request_.Query["SignatureMethod"] = "HMAC-SHA1"
				request_.Query["SignatureVersion"] = "1.0"
				request_.Query["AccessKeyId"] = accessKeyId
				request_.Query["Signature"] = rpcutil.GetSignature(request_, accessKeySecret)
			}

			response_, _err := tea.DoRequest(request_, _runtime)
			if _err != nil {
				return nil, _err
			}
			obj, _err := util.ReadAsJSON(response_.Body)
			if _err != nil {
				return nil, _err
			}

			res := util.AssertAsMap(obj)
			if util.Is4xx(response_.StatusCode) || util.Is5xx(response_.StatusCode) {
				_err = tea.NewSDKError(map[string]interface{}{
					"message": res["Message"],
					"data":    res,
					"code":    res["Code"],
				})
				return nil, _err
			}

			_result = res
			return _result, _err
		}()
		if !tea.Retryable(_err) {
			break
		}
	}

	return _resp, _err
}

func (client *Client) FaceMakeup(request *FaceMakeupRequest, runtime *util.RuntimeOptions) (_result *FaceMakeupResponse, _err error) {
	_result = &FaceMakeupResponse{}
	_body, _err := client._request("FaceMakeup", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FaceMakeupAdvance(request *FaceMakeupAdvanceRequest, runtime *util.RuntimeOptions) (_result *FaceMakeupResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
	faceMakeupreq := &FaceMakeupRequest{}
	rpcutil.Convert(request, faceMakeupreq)
	faceMakeupreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	faceMakeupResp, _err := client.FaceMakeup(faceMakeupreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = faceMakeupResp
	return _result, _err
}

func (client *Client) HandPosture(request *HandPostureRequest, runtime *util.RuntimeOptions) (_result *HandPostureResponse, _err error) {
	_result = &HandPostureResponse{}
	_body, _err := client._request("HandPosture", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) HandPostureAdvance(request *HandPostureAdvanceRequest, runtime *util.RuntimeOptions) (_result *HandPostureResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
	handPosturereq := &HandPostureRequest{}
	rpcutil.Convert(request, handPosturereq)
	handPosturereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	handPostureResp, _err := client.HandPosture(handPosturereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = handPostureResp
	return _result, _err
}

func (client *Client) BodyPosture(request *BodyPostureRequest, runtime *util.RuntimeOptions) (_result *BodyPostureResponse, _err error) {
	_result = &BodyPostureResponse{}
	_body, _err := client._request("BodyPosture", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) BodyPostureAdvance(request *BodyPostureAdvanceRequest, runtime *util.RuntimeOptions) (_result *BodyPostureResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
	bodyPosturereq := &BodyPostureRequest{}
	rpcutil.Convert(request, bodyPosturereq)
	bodyPosturereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	bodyPostureResp, _err := client.BodyPosture(bodyPosturereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = bodyPostureResp
	return _result, _err
}

func (client *Client) DetectPedestrian(request *DetectPedestrianRequest, runtime *util.RuntimeOptions) (_result *DetectPedestrianResponse, _err error) {
	_result = &DetectPedestrianResponse{}
	_body, _err := client._request("DetectPedestrian", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectPedestrianAdvance(request *DetectPedestrianAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectPedestrianResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
	detectPedestrianreq := &DetectPedestrianRequest{}
	rpcutil.Convert(request, detectPedestrianreq)
	detectPedestrianreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectPedestrianResp, _err := client.DetectPedestrian(detectPedestrianreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = detectPedestrianResp
	return _result, _err
}

func (client *Client) FaceBeauty(request *FaceBeautyRequest, runtime *util.RuntimeOptions) (_result *FaceBeautyResponse, _err error) {
	_result = &FaceBeautyResponse{}
	_body, _err := client._request("FaceBeauty", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FaceBeautyAdvance(request *FaceBeautyAdvanceRequest, runtime *util.RuntimeOptions) (_result *FaceBeautyResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
	faceBeautyreq := &FaceBeautyRequest{}
	rpcutil.Convert(request, faceBeautyreq)
	faceBeautyreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	faceBeautyResp, _err := client.FaceBeauty(faceBeautyreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = faceBeautyResp
	return _result, _err
}

func (client *Client) FaceFilter(request *FaceFilterRequest, runtime *util.RuntimeOptions) (_result *FaceFilterResponse, _err error) {
	_result = &FaceFilterResponse{}
	_body, _err := client._request("FaceFilter", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FaceFilterAdvance(request *FaceFilterAdvanceRequest, runtime *util.RuntimeOptions) (_result *FaceFilterResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
	faceFilterreq := &FaceFilterRequest{}
	rpcutil.Convert(request, faceFilterreq)
	faceFilterreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	faceFilterResp, _err := client.FaceFilter(faceFilterreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = faceFilterResp
	return _result, _err
}

func (client *Client) EnhanceFace(request *EnhanceFaceRequest, runtime *util.RuntimeOptions) (_result *EnhanceFaceResponse, _err error) {
	_result = &EnhanceFaceResponse{}
	_body, _err := client._request("EnhanceFace", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) EnhanceFaceAdvance(request *EnhanceFaceAdvanceRequest, runtime *util.RuntimeOptions) (_result *EnhanceFaceResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
	enhanceFacereq := &EnhanceFaceRequest{}
	rpcutil.Convert(request, enhanceFacereq)
	enhanceFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	enhanceFaceResp, _err := client.EnhanceFace(enhanceFacereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = enhanceFaceResp
	return _result, _err
}

func (client *Client) FaceTidyup(request *FaceTidyupRequest, runtime *util.RuntimeOptions) (_result *FaceTidyupResponse, _err error) {
	_result = &FaceTidyupResponse{}
	_body, _err := client._request("FaceTidyup", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FaceTidyupAdvance(request *FaceTidyupAdvanceRequest, runtime *util.RuntimeOptions) (_result *FaceTidyupResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
	faceTidyupreq := &FaceTidyupRequest{}
	rpcutil.Convert(request, faceTidyupreq)
	faceTidyupreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	faceTidyupResp, _err := client.FaceTidyup(faceTidyupreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = faceTidyupResp
	return _result, _err
}

func (client *Client) SearchFace(request *SearchFaceRequest, runtime *util.RuntimeOptions) (_result *SearchFaceResponse, _err error) {
	_result = &SearchFaceResponse{}
	_body, _err := client._request("SearchFace", "HTTPS", "GET", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchFaceAdvance(request *SearchFaceAdvanceRequest, runtime *util.RuntimeOptions) (_result *SearchFaceResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
		return
	}
	// Step 2: request final api
	searchFacereq := &SearchFaceRequest{}
	rpcutil.Convert(request, searchFacereq)
	searchFacereq.ImageUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	searchFaceResp, _err := client.SearchFace(searchFacereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = searchFaceResp
	return _result, _err
}

func (client *Client) ListFaceDbs(request *ListFaceDbsRequest, runtime *util.RuntimeOptions) (_result *ListFaceDbsResponse, _err error) {
	_result = &ListFaceDbsResponse{}
	_body, _err := client._request("ListFaceDbs", "HTTPS", "GET", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListFaces(request *ListFacesRequest, runtime *util.RuntimeOptions) (_result *ListFacesResponse, _err error) {
	_result = &ListFacesResponse{}
	_body, _err := client._request("ListFaces", "HTTPS", "GET", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateFaceDb(request *CreateFaceDbRequest, runtime *util.RuntimeOptions) (_result *CreateFaceDbResponse, _err error) {
	_result = &CreateFaceDbResponse{}
	_body, _err := client._request("CreateFaceDb", "HTTPS", "GET", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteFace(request *DeleteFaceRequest, runtime *util.RuntimeOptions) (_result *DeleteFaceResponse, _err error) {
	_result = &DeleteFaceResponse{}
	_body, _err := client._request("DeleteFace", "HTTPS", "GET", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteFaceDb(request *DeleteFaceDbRequest, runtime *util.RuntimeOptions) (_result *DeleteFaceDbResponse, _err error) {
	_result = &DeleteFaceDbResponse{}
	_body, _err := client._request("DeleteFaceDb", "HTTPS", "GET", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddFace(request *AddFaceRequest, runtime *util.RuntimeOptions) (_result *AddFaceResponse, _err error) {
	_result = &AddFaceResponse{}
	_body, _err := client._request("AddFace", "HTTPS", "GET", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddFaceAdvance(request *AddFaceAdvanceRequest, runtime *util.RuntimeOptions) (_result *AddFaceResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
		return
	}
	// Step 2: request final api
	addFacereq := &AddFaceRequest{}
	rpcutil.Convert(request, addFacereq)
	addFacereq.ImageUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	addFaceResp, _err := client.AddFace(addFacereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = addFaceResp
	return _result, _err
}

func (client *Client) RecognizeExpression(request *RecognizeExpressionRequest, runtime *util.RuntimeOptions) (_result *RecognizeExpressionResponse, _err error) {
	_result = &RecognizeExpressionResponse{}
	_body, _err := client._request("RecognizeExpression", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeExpressionAdvance(request *RecognizeExpressionAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeExpressionResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
	recognizeExpressionreq := &RecognizeExpressionRequest{}
	rpcutil.Convert(request, recognizeExpressionreq)
	recognizeExpressionreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeExpressionResp, _err := client.RecognizeExpression(recognizeExpressionreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeExpressionResp
	return _result, _err
}

func (client *Client) RecognizePublicFace(request *RecognizePublicFaceRequest, runtime *util.RuntimeOptions) (_result *RecognizePublicFaceResponse, _err error) {
	_result = &RecognizePublicFaceResponse{}
	_body, _err := client._request("RecognizePublicFace", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectLivingFace(request *DetectLivingFaceRequest, runtime *util.RuntimeOptions) (_result *DetectLivingFaceResponse, _err error) {
	_result = &DetectLivingFaceResponse{}
	_body, _err := client._request("DetectLivingFace", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectBodyCount(request *DetectBodyCountRequest, runtime *util.RuntimeOptions) (_result *DetectBodyCountResponse, _err error) {
	_result = &DetectBodyCountResponse{}
	_body, _err := client._request("DetectBodyCount", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectBodyCountAdvance(request *DetectBodyCountAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectBodyCountResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
	detectBodyCountreq := &DetectBodyCountRequest{}
	rpcutil.Convert(request, detectBodyCountreq)
	detectBodyCountreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectBodyCountResp, _err := client.DetectBodyCount(detectBodyCountreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = detectBodyCountResp
	return _result, _err
}

func (client *Client) DetectMask(request *DetectMaskRequest, runtime *util.RuntimeOptions) (_result *DetectMaskResponse, _err error) {
	_result = &DetectMaskResponse{}
	_body, _err := client._request("DetectMask", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectMaskAdvance(request *DetectMaskAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectMaskResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
	detectMaskreq := &DetectMaskRequest{}
	rpcutil.Convert(request, detectMaskreq)
	detectMaskreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectMaskResp, _err := client.DetectMask(detectMaskreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = detectMaskResp
	return _result, _err
}

func (client *Client) RecognizeFace(request *RecognizeFaceRequest, runtime *util.RuntimeOptions) (_result *RecognizeFaceResponse, _err error) {
	_result = &RecognizeFaceResponse{}
	_body, _err := client._request("RecognizeFace", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeFaceAdvance(request *RecognizeFaceAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeFaceResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
	recognizeFacereq := &RecognizeFaceRequest{}
	rpcutil.Convert(request, recognizeFacereq)
	recognizeFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeFaceResp, _err := client.RecognizeFace(recognizeFacereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeFaceResp
	return _result, _err
}

func (client *Client) CompareFace(request *CompareFaceRequest, runtime *util.RuntimeOptions) (_result *CompareFaceResponse, _err error) {
	_result = &CompareFaceResponse{}
	_body, _err := client._request("CompareFace", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectFace(request *DetectFaceRequest, runtime *util.RuntimeOptions) (_result *DetectFaceResponse, _err error) {
	_result = &DetectFaceResponse{}
	_body, _err := client._request("DetectFace", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectFaceAdvance(request *DetectFaceAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectFaceResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &openplatform.Config{
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
		Product:  tea.String("facebody"),
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
	detectFacereq := &DetectFaceRequest{}
	rpcutil.Convert(request, detectFacereq)
	detectFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectFaceResp, _err := client.DetectFace(detectFacereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = detectFaceResp
	return _result, _err
}

func (client *Client) GetUserAgent() (_result string) {
	userAgent := util.GetUserAgent(client.UserAgent)
	_result = userAgent
	return _result
}

func (client *Client) GetAccessKeyId() (_result string, _err error) {
	if util.IsUnset(client.Credential) {
		_result = ""
		return _result, _err
	}

	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return "", _err
	}

	_result = accessKeyId
	return _result, _err
}

func (client *Client) GetAccessKeySecret() (_result string, _err error) {
	if util.IsUnset(client.Credential) {
		_result = ""
		return _result, _err
	}

	secret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return "", _err
	}

	_result = secret
	return _result, _err
}
