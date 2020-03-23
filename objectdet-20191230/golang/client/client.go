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

type DetectTransparentImageRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                             `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DetectTransparentImageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Elements []*DetectTransparentImageResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
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
	TransparentImage *int `json:"TransparentImage" xml:"TransparentImage" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                   `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DetectObjectResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Width    *int                                `json:"Width" xml:"Width" require:"true"`
	Height   *int                                `json:"Height" xml:"Height" require:"true"`
	Elements []*DetectObjectResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
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
	Score *float32 `json:"Score" xml:"Score" require:"true"`
	Type  *string  `json:"Type" xml:"Type" require:"true"`
	Boxes []*int   `json:"Boxes" xml:"Boxes" require:"true" type:"Repeated"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                           `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DetectWhiteBaseImageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Elements []*DetectWhiteBaseImageResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
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
	WhiteBase *int `json:"WhiteBase" xml:"WhiteBase" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                               `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ClassifyVehicleInsuranceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Threshold *float32                                      `json:"Threshold" xml:"Threshold" require:"true"`
	Labels    []*ClassifyVehicleInsuranceResponseDataLabels `json:"Labels" xml:"Labels" require:"true" type:"Repeated"`
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
	Score *float32 `json:"Score" xml:"Score" require:"true"`
	Name  *string  `json:"Name" xml:"Name" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                                `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeVehicleDashboardResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Elements []*RecognizeVehicleDashboardResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
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
	Score     *float32   `json:"Score" xml:"Score" require:"true"`
	ClassName *string    `json:"ClassName" xml:"ClassName" require:"true"`
	Label     *string    `json:"Label" xml:"Label" require:"true"`
	Boxes     []*float32 `json:"Boxes" xml:"Boxes" require:"true" type:"Repeated"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                             `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeVehicleDamageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Elements []*RecognizeVehicleDamageResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
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
	Score  *float32   `json:"Score" xml:"Score" require:"true"`
	Type   *string    `json:"Type" xml:"Type" require:"true"`
	Scores []*float32 `json:"Scores" xml:"Scores" require:"true" type:"Repeated"`
	Boxes  []*int     `json:"Boxes" xml:"Boxes" require:"true" type:"Repeated"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                            `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeVehiclePartsResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Elements     []*RecognizeVehiclePartsResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
	OriginShapes []*int                                       `json:"OriginShapes" xml:"OriginShapes" require:"true" type:"Repeated"`
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
	Score *float32 `json:"Score" xml:"Score" require:"true"`
	Type  *string  `json:"Type" xml:"Type" require:"true"`
	Boxes []*int   `json:"Boxes" xml:"Boxes" require:"true" type:"Repeated"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                    `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DetectVehicleResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Width                *int                                             `json:"Width" xml:"Width" require:"true"`
	Height               *int                                             `json:"Height" xml:"Height" require:"true"`
	DetectObjectInfoList []*DetectVehicleResponseDataDetectObjectInfoList `json:"DetectObjectInfoList" xml:"DetectObjectInfoList" require:"true" type:"Repeated"`
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
	Score *float32 `json:"Score" xml:"Score" require:"true"`
	Type  *string  `json:"Type" xml:"Type" require:"true"`
	Id    *int     `json:"Id" xml:"Id" require:"true"`
	Boxes []*int   `json:"Boxes" xml:"Boxes" require:"true" type:"Repeated"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
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
	RequestId *string                     `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DetectMainBodyResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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
	Location *DetectMainBodyResponseDataLocation `json:"Location" xml:"Location" require:"true" type:"Struct"`
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
	X      *int `json:"X" xml:"X" require:"true"`
	Y      *int `json:"Y" xml:"Y" require:"true"`
	Width  *int `json:"Width" xml:"Width" require:"true"`
	Height *int `json:"Height" xml:"Height" require:"true"`
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
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
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
				"host":       rpcutil.GetHost("objectdet", client.RegionId, client.Endpoint),
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

func (client *Client) DetectTransparentImage(request *DetectTransparentImageRequest, runtime *util.RuntimeOptions) (_result *DetectTransparentImageResponse, _err error) {
	_result = &DetectTransparentImageResponse{}
	_body, _err := client._request("DetectTransparentImage", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectTransparentImageAdvance(request *DetectTransparentImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectTransparentImageResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	detectTransparentImagereq := &DetectTransparentImageRequest{}
	rpcutil.Convert(request, detectTransparentImagereq)
	detectTransparentImagereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectTransparentImageResp, _err := client.DetectTransparentImage(detectTransparentImagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = detectTransparentImageResp
	return _result, _err
}

func (client *Client) DetectObject(request *DetectObjectRequest, runtime *util.RuntimeOptions) (_result *DetectObjectResponse, _err error) {
	_result = &DetectObjectResponse{}
	_body, _err := client._request("DetectObject", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectObjectAdvance(request *DetectObjectAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectObjectResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	detectObjectreq := &DetectObjectRequest{}
	rpcutil.Convert(request, detectObjectreq)
	detectObjectreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectObjectResp, _err := client.DetectObject(detectObjectreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = detectObjectResp
	return _result, _err
}

func (client *Client) DetectWhiteBaseImage(request *DetectWhiteBaseImageRequest, runtime *util.RuntimeOptions) (_result *DetectWhiteBaseImageResponse, _err error) {
	_result = &DetectWhiteBaseImageResponse{}
	_body, _err := client._request("DetectWhiteBaseImage", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectWhiteBaseImageAdvance(request *DetectWhiteBaseImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectWhiteBaseImageResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	detectWhiteBaseImagereq := &DetectWhiteBaseImageRequest{}
	rpcutil.Convert(request, detectWhiteBaseImagereq)
	detectWhiteBaseImagereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectWhiteBaseImageResp, _err := client.DetectWhiteBaseImage(detectWhiteBaseImagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = detectWhiteBaseImageResp
	return _result, _err
}

func (client *Client) ClassifyVehicleInsurance(request *ClassifyVehicleInsuranceRequest, runtime *util.RuntimeOptions) (_result *ClassifyVehicleInsuranceResponse, _err error) {
	_result = &ClassifyVehicleInsuranceResponse{}
	_body, _err := client._request("ClassifyVehicleInsurance", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ClassifyVehicleInsuranceAdvance(request *ClassifyVehicleInsuranceAdvanceRequest, runtime *util.RuntimeOptions) (_result *ClassifyVehicleInsuranceResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	classifyVehicleInsurancereq := &ClassifyVehicleInsuranceRequest{}
	rpcutil.Convert(request, classifyVehicleInsurancereq)
	classifyVehicleInsurancereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	classifyVehicleInsuranceResp, _err := client.ClassifyVehicleInsurance(classifyVehicleInsurancereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = classifyVehicleInsuranceResp
	return _result, _err
}

func (client *Client) RecognizeVehicleDashboard(request *RecognizeVehicleDashboardRequest, runtime *util.RuntimeOptions) (_result *RecognizeVehicleDashboardResponse, _err error) {
	_result = &RecognizeVehicleDashboardResponse{}
	_body, _err := client._request("RecognizeVehicleDashboard", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVehicleDashboardAdvance(request *RecognizeVehicleDashboardAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVehicleDashboardResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	recognizeVehicleDashboardreq := &RecognizeVehicleDashboardRequest{}
	rpcutil.Convert(request, recognizeVehicleDashboardreq)
	recognizeVehicleDashboardreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeVehicleDashboardResp, _err := client.RecognizeVehicleDashboard(recognizeVehicleDashboardreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeVehicleDashboardResp
	return _result, _err
}

func (client *Client) RecognizeVehicleDamage(request *RecognizeVehicleDamageRequest, runtime *util.RuntimeOptions) (_result *RecognizeVehicleDamageResponse, _err error) {
	_result = &RecognizeVehicleDamageResponse{}
	_body, _err := client._request("RecognizeVehicleDamage", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVehicleDamageAdvance(request *RecognizeVehicleDamageAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVehicleDamageResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	recognizeVehicleDamagereq := &RecognizeVehicleDamageRequest{}
	rpcutil.Convert(request, recognizeVehicleDamagereq)
	recognizeVehicleDamagereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeVehicleDamageResp, _err := client.RecognizeVehicleDamage(recognizeVehicleDamagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeVehicleDamageResp
	return _result, _err
}

func (client *Client) RecognizeVehicleParts(request *RecognizeVehiclePartsRequest, runtime *util.RuntimeOptions) (_result *RecognizeVehiclePartsResponse, _err error) {
	_result = &RecognizeVehiclePartsResponse{}
	_body, _err := client._request("RecognizeVehicleParts", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeVehiclePartsAdvance(request *RecognizeVehiclePartsAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeVehiclePartsResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	recognizeVehiclePartsreq := &RecognizeVehiclePartsRequest{}
	rpcutil.Convert(request, recognizeVehiclePartsreq)
	recognizeVehiclePartsreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeVehiclePartsResp, _err := client.RecognizeVehicleParts(recognizeVehiclePartsreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeVehiclePartsResp
	return _result, _err
}

func (client *Client) DetectVehicle(request *DetectVehicleRequest, runtime *util.RuntimeOptions) (_result *DetectVehicleResponse, _err error) {
	_result = &DetectVehicleResponse{}
	_body, _err := client._request("DetectVehicle", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectVehicleAdvance(request *DetectVehicleAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectVehicleResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	detectVehiclereq := &DetectVehicleRequest{}
	rpcutil.Convert(request, detectVehiclereq)
	detectVehiclereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectVehicleResp, _err := client.DetectVehicle(detectVehiclereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = detectVehicleResp
	return _result, _err
}

func (client *Client) DetectMainBody(request *DetectMainBodyRequest, runtime *util.RuntimeOptions) (_result *DetectMainBodyResponse, _err error) {
	_result = &DetectMainBodyResponse{}
	_body, _err := client._request("DetectMainBody", "HTTPS", "GET", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectMainBodyAdvance(request *DetectMainBodyAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectMainBodyResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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
	detectMainBodyreq := &DetectMainBodyRequest{}
	rpcutil.Convert(request, detectMainBodyreq)
	detectMainBodyreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectMainBodyResp, _err := client.DetectMainBody(detectMainBodyreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = detectMainBodyResp
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
