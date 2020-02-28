// This file is auto-generated, don't edit it. Thanks.
package client

import (
	"encoding/json"
	"io"

	"github.com/alibabacloud-go/tea/tea"
	oss "github.com/aliyun/alibabacloud-oss-sdk/golang/client"
	common "github.com/aliyun/alibabacloud-rpc-util-sdk/golang/service"
	openplatform "github.com/aliyun/alibabacloud-sdk/openplatform-20191219/golang/client"
	"github.com/aliyun/rpc-client-go/service"
)

type Config struct {
	AccessKeyId          *string `json:"accessKeyId" xml:"accessKeyId" require:"true"`
	AccessKeySecret      *string `json:"accessKeySecret" xml:"accessKeySecret"`
	Type                 *string `json:"type" xml:"type"`
	SecurityToken        *string `json:"securityToken" xml:"securityToken"`
	Endpoint             *string `json:"endpoint" xml:"endpoint" require:"true"`
	Protocol             *string `json:"protocol" xml:"protocol"`
	RegionId             *string `json:"regionId" xml:"regionId" require:"true"`
	UserAgent            *string `json:"userAgent" xml:"userAgent"`
	ReadTimeout          *int    `json:"readTimeout" xml:"readTimeout"`
	ConnectTimeout       *int    `json:"connectTimeout" xml:"connectTimeout"`
	LocalAddr            *string `json:"localAddr" xml:"localAddr"`
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
	return service.Prettify(s)
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

func (s *Config) SetLocalAddr(v string) *Config {
	s.LocalAddr = &v
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

type RecognizeExpressionRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeExpressionRequest) String() string {
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	FaceCount          *int `json:"FaceCount" xml:"FaceCount" require:"true"`
	LandmarkCount      *int `json:"LandmarkCount" xml:"LandmarkCount" require:"true"`
	DenseFeatureLength *int `json:"DenseFeatureLength" xml:"DenseFeatureLength" require:"true"`
}

func (s RecognizeFaceResponseData) String() string {
	return service.Prettify(s)
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

type RecognizeFaceAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s RecognizeFaceAdvanceRequest) String() string {
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	Confidence *float32 `json:"Confidence" xml:"Confidence" require:"true"`
}

func (s CompareFaceResponseData) String() string {
	return service.Prettify(s)
}

func (s CompareFaceResponseData) GoString() string {
	return s.String()
}

func (s *CompareFaceResponseData) SetConfidence(v float32) *CompareFaceResponseData {
	s.Confidence = &v
	return s
}

type DetectFaceRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s DetectFaceRequest) String() string {
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	FaceCount     *int `json:"FaceCount" xml:"FaceCount" require:"true"`
	LandmarkCount *int `json:"LandmarkCount" xml:"LandmarkCount" require:"true"`
}

func (s DetectFaceResponseData) String() string {
	return service.Prettify(s)
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

type DetectFaceAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s DetectFaceAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s DetectFaceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectFaceAdvanceRequest) SetImageURLObject(v io.Reader) *DetectFaceAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type Client struct {
	service.BaseClient
}

func NewClient(config *Config) (*Client, error) {
	client := &Client{}
	input := make(map[string]interface{})
	byt, _ := json.Marshal(config)
	err := json.Unmarshal(byt, &input)
	if err != nil {
		return nil, err
	}
	err = client.InitClient(input)
	if err != nil {
		return nil, err
	}
	return client, nil
}

func (client *Client) _request(action string, protocol string, method string, request map[string]interface{}, runtime *common.RuntimeObject) (_result map[string]interface{}, _err error) {
	_err = tea.Validate(runtime)
	if _err != nil {
		return make(map[string]interface{}), _err
	}
	_runtime := map[string]interface{}{
		"timeouted":      "retry",
		"readTimeout":    common.DefaultNumber(tea.IntValue(runtime.ReadTimeout), client.ReadTimeout),
		"connectTimeout": common.DefaultNumber(tea.IntValue(runtime.ConnectTimeout), client.ConnectTimeout),
		"httpProxy":      common.Default(tea.StringValue(runtime.HttpProxy), client.HttpProxy),
		"httpsProxy":     common.Default(tea.StringValue(runtime.HttpsProxy), client.HttpsProxy),
		"noProxy":        common.Default(tea.StringValue(runtime.NoProxy), client.NoProxy),
		"maxIdleConns":   common.DefaultNumber(tea.IntValue(runtime.MaxIdleConns), client.MaxIdleConns),
		"retry": map[string]interface{}{
			"retryable":   tea.BoolValue(runtime.Autoretry),
			"maxAttempts": common.DefaultNumber(tea.IntValue(runtime.MaxAttempts), 3),
		},
		"backoff": map[string]interface{}{
			"policy": common.Default(tea.StringValue(runtime.BackoffPolicy), "no"),
			"period": common.DefaultNumber(tea.IntValue(runtime.BackoffPeriod), 1),
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
			request_.Protocol = common.Default(client.Protocol, protocol)
			request_.Method = method
			request_.Pathname = "/"
			request_.Query = common.Query(tea.ToMap(map[string]interface{}{
				"Action":           action,
				"Format":           "json",
				"RegionId":         client.RegionId,
				"Timestamp":        common.GetTimestamp(),
				"Date":             common.GetTimestamp(),
				"Version":          "2019-12-30",
				"SignatureMethod":  "HMAC-SHA1",
				"SignatureVersion": "1.0",
				"SignatureNonce":   common.GetNonce(),
				"AccessKeyId":      client.GetAccessKeyId(),
			}, request))
			request_.Headers = map[string]string{
				"host":       common.GetHost("facebody", client.RegionId, client.Endpoint),
				"user-agent": common.GetUserAgent(client.UserAgent),
			}
			request_.Query["Signature"] = common.GetSignature(request_, client.GetAccessKeySecret())
			response_, _err := tea.DoRequest(request_, _runtime)
			if _err != nil {
				return make(map[string]interface{}), _err
			}
			body, _err := common.Json(response_)
			if _err != nil {
				return make(map[string]interface{}), _err
			}

			if common.HasError(body) {
				_err = tea.NewSDKError(map[string]interface{}{
					"message": body["Message"],
					"data":    body,
					"code":    body["Code"],
				})
				return make(map[string]interface{}), _err
			}

			return body, _err
		}()
		if !tea.Retryable(_err) {
			break
		}
	}

	return _resp, _err
}

func (client *Client) RecognizeExpression(request *RecognizeExpressionRequest, runtime *common.RuntimeObject) (_result *RecognizeExpressionResponse, _err error) {
	_result = &RecognizeExpressionResponse{}
	_body, _err := client._request("RecognizeExpression", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeExpressionAdvance(request *RecognizeExpressionAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeExpressionResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
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

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
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
	ossClient.PostObject(uploadRequest, runtime)
	recognizeExpressionreq := &RecognizeExpressionRequest{}
	common.Convert(request, recognizeExpressionreq)
	recognizeExpressionreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeExpressionResp, _err := client.RecognizeExpression(recognizeExpressionreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeExpressionResp, _err
}

func (client *Client) RecognizePublicFace(request *RecognizePublicFaceRequest, runtime *common.RuntimeObject) (_result *RecognizePublicFaceResponse, _err error) {
	_result = &RecognizePublicFaceResponse{}
	_body, _err := client._request("RecognizePublicFace", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectLivingFace(request *DetectLivingFaceRequest, runtime *common.RuntimeObject) (_result *DetectLivingFaceResponse, _err error) {
	_result = &DetectLivingFaceResponse{}
	_body, _err := client._request("DetectLivingFace", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectBodyCount(request *DetectBodyCountRequest, runtime *common.RuntimeObject) (_result *DetectBodyCountResponse, _err error) {
	_result = &DetectBodyCountResponse{}
	_body, _err := client._request("DetectBodyCount", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectBodyCountAdvance(request *DetectBodyCountAdvanceRequest, runtime *common.RuntimeObject) (_result *DetectBodyCountResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
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

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
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
	ossClient.PostObject(uploadRequest, runtime)
	detectBodyCountreq := &DetectBodyCountRequest{}
	common.Convert(request, detectBodyCountreq)
	detectBodyCountreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectBodyCountResp, _err := client.DetectBodyCount(detectBodyCountreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return detectBodyCountResp, _err
}

func (client *Client) DetectMask(request *DetectMaskRequest, runtime *common.RuntimeObject) (_result *DetectMaskResponse, _err error) {
	_result = &DetectMaskResponse{}
	_body, _err := client._request("DetectMask", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectMaskAdvance(request *DetectMaskAdvanceRequest, runtime *common.RuntimeObject) (_result *DetectMaskResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
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

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
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
	ossClient.PostObject(uploadRequest, runtime)
	detectMaskreq := &DetectMaskRequest{}
	common.Convert(request, detectMaskreq)
	detectMaskreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectMaskResp, _err := client.DetectMask(detectMaskreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return detectMaskResp, _err
}

func (client *Client) RecognizeFace(request *RecognizeFaceRequest, runtime *common.RuntimeObject) (_result *RecognizeFaceResponse, _err error) {
	_result = &RecognizeFaceResponse{}
	_body, _err := client._request("RecognizeFace", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeFaceAdvance(request *RecognizeFaceAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeFaceResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
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

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
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
	ossClient.PostObject(uploadRequest, runtime)
	recognizeFacereq := &RecognizeFaceRequest{}
	common.Convert(request, recognizeFacereq)
	recognizeFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeFaceResp, _err := client.RecognizeFace(recognizeFacereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeFaceResp, _err
}

func (client *Client) CompareFace(request *CompareFaceRequest, runtime *common.RuntimeObject) (_result *CompareFaceResponse, _err error) {
	_result = &CompareFaceResponse{}
	_body, _err := client._request("CompareFace", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectFace(request *DetectFaceRequest, runtime *common.RuntimeObject) (_result *DetectFaceResponse, _err error) {
	_result = &DetectFaceResponse{}
	_body, _err := client._request("DetectFace", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectFaceAdvance(request *DetectFaceAdvanceRequest, runtime *common.RuntimeObject) (_result *DetectFaceResponse, _err error) {
	authConfig := &openplatform.Config{
		AccessKeyId:     tea.String(client.GetAccessKeyId()),
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
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

	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: tea.String(client.GetAccessKeySecret()),
		Type:            tea.String("access_key"),
		Endpoint:        tea.String(common.GetEndpoint(tea.StringValue(authResponse.Endpoint), tea.BoolValue(authResponse.UseAccelerate), client.EndpointType)),
		Protocol:        tea.String(client.Protocol),
		RegionId:        tea.String(client.RegionId),
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
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
	ossClient.PostObject(uploadRequest, runtime)
	detectFacereq := &DetectFaceRequest{}
	common.Convert(request, detectFacereq)
	detectFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectFaceResp, _err := client.DetectFace(detectFacereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return detectFaceResp, _err
}
