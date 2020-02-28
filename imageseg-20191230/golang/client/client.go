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

type ParseFaceRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s ParseFaceRequest) String() string {
	return service.Prettify(s)
}

func (s ParseFaceRequest) GoString() string {
	return s.String()
}

func (s *ParseFaceRequest) SetImageURL(v string) *ParseFaceRequest {
	s.ImageURL = &v
	return s
}

type ParseFaceResponse struct {
	RequestId *string                `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ParseFaceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s ParseFaceResponse) String() string {
	return service.Prettify(s)
}

func (s ParseFaceResponse) GoString() string {
	return s.String()
}

func (s *ParseFaceResponse) SetRequestId(v string) *ParseFaceResponse {
	s.RequestId = &v
	return s
}

func (s *ParseFaceResponse) SetData(v *ParseFaceResponseData) *ParseFaceResponse {
	s.Data = v
	return s
}

type ParseFaceResponseData struct {
	OriginImageURL *string                          `json:"OriginImageURL" xml:"OriginImageURL" require:"true"`
	Elements       []*ParseFaceResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
}

func (s ParseFaceResponseData) String() string {
	return service.Prettify(s)
}

func (s ParseFaceResponseData) GoString() string {
	return s.String()
}

func (s *ParseFaceResponseData) SetOriginImageURL(v string) *ParseFaceResponseData {
	s.OriginImageURL = &v
	return s
}

func (s *ParseFaceResponseData) SetElements(v []*ParseFaceResponseDataElements) *ParseFaceResponseData {
	s.Elements = v
	return s
}

type ParseFaceResponseDataElements struct {
	Name     *string `json:"Name" xml:"Name" require:"true"`
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s ParseFaceResponseDataElements) String() string {
	return service.Prettify(s)
}

func (s ParseFaceResponseDataElements) GoString() string {
	return s.String()
}

func (s *ParseFaceResponseDataElements) SetName(v string) *ParseFaceResponseDataElements {
	s.Name = &v
	return s
}

func (s *ParseFaceResponseDataElements) SetImageURL(v string) *ParseFaceResponseDataElements {
	s.ImageURL = &v
	return s
}

type ParseFaceAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s ParseFaceAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s ParseFaceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *ParseFaceAdvanceRequest) SetImageURLObject(v io.Reader) *ParseFaceAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type SegmentVehicleRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s SegmentVehicleRequest) String() string {
	return service.Prettify(s)
}

func (s SegmentVehicleRequest) GoString() string {
	return s.String()
}

func (s *SegmentVehicleRequest) SetImageURL(v string) *SegmentVehicleRequest {
	s.ImageURL = &v
	return s
}

type SegmentVehicleResponse struct {
	RequestId *string                     `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *SegmentVehicleResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s SegmentVehicleResponse) String() string {
	return service.Prettify(s)
}

func (s SegmentVehicleResponse) GoString() string {
	return s.String()
}

func (s *SegmentVehicleResponse) SetRequestId(v string) *SegmentVehicleResponse {
	s.RequestId = &v
	return s
}

func (s *SegmentVehicleResponse) SetData(v *SegmentVehicleResponseData) *SegmentVehicleResponse {
	s.Data = v
	return s
}

type SegmentVehicleResponseData struct {
	Elements []*SegmentVehicleResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
}

func (s SegmentVehicleResponseData) String() string {
	return service.Prettify(s)
}

func (s SegmentVehicleResponseData) GoString() string {
	return s.String()
}

func (s *SegmentVehicleResponseData) SetElements(v []*SegmentVehicleResponseDataElements) *SegmentVehicleResponseData {
	s.Elements = v
	return s
}

type SegmentVehicleResponseDataElements struct {
	OriginImageURL *string `json:"OriginImageURL" xml:"OriginImageURL" require:"true"`
	ImageURL       *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s SegmentVehicleResponseDataElements) String() string {
	return service.Prettify(s)
}

func (s SegmentVehicleResponseDataElements) GoString() string {
	return s.String()
}

func (s *SegmentVehicleResponseDataElements) SetOriginImageURL(v string) *SegmentVehicleResponseDataElements {
	s.OriginImageURL = &v
	return s
}

func (s *SegmentVehicleResponseDataElements) SetImageURL(v string) *SegmentVehicleResponseDataElements {
	s.ImageURL = &v
	return s
}

type SegmentVehicleAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s SegmentVehicleAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s SegmentVehicleAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SegmentVehicleAdvanceRequest) SetImageURLObject(v io.Reader) *SegmentVehicleAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type SegmentHairRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s SegmentHairRequest) String() string {
	return service.Prettify(s)
}

func (s SegmentHairRequest) GoString() string {
	return s.String()
}

func (s *SegmentHairRequest) SetImageURL(v string) *SegmentHairRequest {
	s.ImageURL = &v
	return s
}

type SegmentHairResponse struct {
	RequestId *string                  `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *SegmentHairResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s SegmentHairResponse) String() string {
	return service.Prettify(s)
}

func (s SegmentHairResponse) GoString() string {
	return s.String()
}

func (s *SegmentHairResponse) SetRequestId(v string) *SegmentHairResponse {
	s.RequestId = &v
	return s
}

func (s *SegmentHairResponse) SetData(v *SegmentHairResponseData) *SegmentHairResponse {
	s.Data = v
	return s
}

type SegmentHairResponseData struct {
	Elements []*SegmentHairResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
}

func (s SegmentHairResponseData) String() string {
	return service.Prettify(s)
}

func (s SegmentHairResponseData) GoString() string {
	return s.String()
}

func (s *SegmentHairResponseData) SetElements(v []*SegmentHairResponseDataElements) *SegmentHairResponseData {
	s.Elements = v
	return s
}

type SegmentHairResponseDataElements struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
	X        *int    `json:"X" xml:"X" require:"true"`
	Y        *int    `json:"Y" xml:"Y" require:"true"`
	Width    *int    `json:"Width" xml:"Width" require:"true"`
	Height   *int    `json:"Height" xml:"Height" require:"true"`
}

func (s SegmentHairResponseDataElements) String() string {
	return service.Prettify(s)
}

func (s SegmentHairResponseDataElements) GoString() string {
	return s.String()
}

func (s *SegmentHairResponseDataElements) SetImageURL(v string) *SegmentHairResponseDataElements {
	s.ImageURL = &v
	return s
}

func (s *SegmentHairResponseDataElements) SetX(v int) *SegmentHairResponseDataElements {
	s.X = &v
	return s
}

func (s *SegmentHairResponseDataElements) SetY(v int) *SegmentHairResponseDataElements {
	s.Y = &v
	return s
}

func (s *SegmentHairResponseDataElements) SetWidth(v int) *SegmentHairResponseDataElements {
	s.Width = &v
	return s
}

func (s *SegmentHairResponseDataElements) SetHeight(v int) *SegmentHairResponseDataElements {
	s.Height = &v
	return s
}

type SegmentHairAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s SegmentHairAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s SegmentHairAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SegmentHairAdvanceRequest) SetImageURLObject(v io.Reader) *SegmentHairAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type SegmentFaceRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s SegmentFaceRequest) String() string {
	return service.Prettify(s)
}

func (s SegmentFaceRequest) GoString() string {
	return s.String()
}

func (s *SegmentFaceRequest) SetImageURL(v string) *SegmentFaceRequest {
	s.ImageURL = &v
	return s
}

type SegmentFaceResponse struct {
	RequestId *string                  `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *SegmentFaceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s SegmentFaceResponse) String() string {
	return service.Prettify(s)
}

func (s SegmentFaceResponse) GoString() string {
	return s.String()
}

func (s *SegmentFaceResponse) SetRequestId(v string) *SegmentFaceResponse {
	s.RequestId = &v
	return s
}

func (s *SegmentFaceResponse) SetData(v *SegmentFaceResponseData) *SegmentFaceResponse {
	s.Data = v
	return s
}

type SegmentFaceResponseData struct {
	Elements []*SegmentFaceResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
}

func (s SegmentFaceResponseData) String() string {
	return service.Prettify(s)
}

func (s SegmentFaceResponseData) GoString() string {
	return s.String()
}

func (s *SegmentFaceResponseData) SetElements(v []*SegmentFaceResponseDataElements) *SegmentFaceResponseData {
	s.Elements = v
	return s
}

type SegmentFaceResponseDataElements struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
	X        *int    `json:"X" xml:"X" require:"true"`
	Y        *int    `json:"Y" xml:"Y" require:"true"`
	Width    *int    `json:"Width" xml:"Width" require:"true"`
	Height   *int    `json:"Height" xml:"Height" require:"true"`
}

func (s SegmentFaceResponseDataElements) String() string {
	return service.Prettify(s)
}

func (s SegmentFaceResponseDataElements) GoString() string {
	return s.String()
}

func (s *SegmentFaceResponseDataElements) SetImageURL(v string) *SegmentFaceResponseDataElements {
	s.ImageURL = &v
	return s
}

func (s *SegmentFaceResponseDataElements) SetX(v int) *SegmentFaceResponseDataElements {
	s.X = &v
	return s
}

func (s *SegmentFaceResponseDataElements) SetY(v int) *SegmentFaceResponseDataElements {
	s.Y = &v
	return s
}

func (s *SegmentFaceResponseDataElements) SetWidth(v int) *SegmentFaceResponseDataElements {
	s.Width = &v
	return s
}

func (s *SegmentFaceResponseDataElements) SetHeight(v int) *SegmentFaceResponseDataElements {
	s.Height = &v
	return s
}

type SegmentFaceAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s SegmentFaceAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s SegmentFaceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SegmentFaceAdvanceRequest) SetImageURLObject(v io.Reader) *SegmentFaceAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type SegmentHeadRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s SegmentHeadRequest) String() string {
	return service.Prettify(s)
}

func (s SegmentHeadRequest) GoString() string {
	return s.String()
}

func (s *SegmentHeadRequest) SetImageURL(v string) *SegmentHeadRequest {
	s.ImageURL = &v
	return s
}

type SegmentHeadResponse struct {
	RequestId *string                  `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *SegmentHeadResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s SegmentHeadResponse) String() string {
	return service.Prettify(s)
}

func (s SegmentHeadResponse) GoString() string {
	return s.String()
}

func (s *SegmentHeadResponse) SetRequestId(v string) *SegmentHeadResponse {
	s.RequestId = &v
	return s
}

func (s *SegmentHeadResponse) SetData(v *SegmentHeadResponseData) *SegmentHeadResponse {
	s.Data = v
	return s
}

type SegmentHeadResponseData struct {
	Elements []*SegmentHeadResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
}

func (s SegmentHeadResponseData) String() string {
	return service.Prettify(s)
}

func (s SegmentHeadResponseData) GoString() string {
	return s.String()
}

func (s *SegmentHeadResponseData) SetElements(v []*SegmentHeadResponseDataElements) *SegmentHeadResponseData {
	s.Elements = v
	return s
}

type SegmentHeadResponseDataElements struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
	X        *int    `json:"X" xml:"X" require:"true"`
	Y        *int    `json:"Y" xml:"Y" require:"true"`
	Width    *int    `json:"Width" xml:"Width" require:"true"`
	Height   *int    `json:"Height" xml:"Height" require:"true"`
}

func (s SegmentHeadResponseDataElements) String() string {
	return service.Prettify(s)
}

func (s SegmentHeadResponseDataElements) GoString() string {
	return s.String()
}

func (s *SegmentHeadResponseDataElements) SetImageURL(v string) *SegmentHeadResponseDataElements {
	s.ImageURL = &v
	return s
}

func (s *SegmentHeadResponseDataElements) SetX(v int) *SegmentHeadResponseDataElements {
	s.X = &v
	return s
}

func (s *SegmentHeadResponseDataElements) SetY(v int) *SegmentHeadResponseDataElements {
	s.Y = &v
	return s
}

func (s *SegmentHeadResponseDataElements) SetWidth(v int) *SegmentHeadResponseDataElements {
	s.Width = &v
	return s
}

func (s *SegmentHeadResponseDataElements) SetHeight(v int) *SegmentHeadResponseDataElements {
	s.Height = &v
	return s
}

type SegmentHeadAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s SegmentHeadAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s SegmentHeadAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SegmentHeadAdvanceRequest) SetImageURLObject(v io.Reader) *SegmentHeadAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type SegmentCommodityRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s SegmentCommodityRequest) String() string {
	return service.Prettify(s)
}

func (s SegmentCommodityRequest) GoString() string {
	return s.String()
}

func (s *SegmentCommodityRequest) SetImageURL(v string) *SegmentCommodityRequest {
	s.ImageURL = &v
	return s
}

type SegmentCommodityResponse struct {
	RequestId *string                       `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *SegmentCommodityResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s SegmentCommodityResponse) String() string {
	return service.Prettify(s)
}

func (s SegmentCommodityResponse) GoString() string {
	return s.String()
}

func (s *SegmentCommodityResponse) SetRequestId(v string) *SegmentCommodityResponse {
	s.RequestId = &v
	return s
}

func (s *SegmentCommodityResponse) SetData(v *SegmentCommodityResponseData) *SegmentCommodityResponse {
	s.Data = v
	return s
}

type SegmentCommodityResponseData struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s SegmentCommodityResponseData) String() string {
	return service.Prettify(s)
}

func (s SegmentCommodityResponseData) GoString() string {
	return s.String()
}

func (s *SegmentCommodityResponseData) SetImageURL(v string) *SegmentCommodityResponseData {
	s.ImageURL = &v
	return s
}

type SegmentCommodityAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s SegmentCommodityAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s SegmentCommodityAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SegmentCommodityAdvanceRequest) SetImageURLObject(v io.Reader) *SegmentCommodityAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type SegmentBodyRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s SegmentBodyRequest) String() string {
	return service.Prettify(s)
}

func (s SegmentBodyRequest) GoString() string {
	return s.String()
}

func (s *SegmentBodyRequest) SetImageURL(v string) *SegmentBodyRequest {
	s.ImageURL = &v
	return s
}

type SegmentBodyResponse struct {
	RequestId *string                  `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *SegmentBodyResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s SegmentBodyResponse) String() string {
	return service.Prettify(s)
}

func (s SegmentBodyResponse) GoString() string {
	return s.String()
}

func (s *SegmentBodyResponse) SetRequestId(v string) *SegmentBodyResponse {
	s.RequestId = &v
	return s
}

func (s *SegmentBodyResponse) SetData(v *SegmentBodyResponseData) *SegmentBodyResponse {
	s.Data = v
	return s
}

type SegmentBodyResponseData struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s SegmentBodyResponseData) String() string {
	return service.Prettify(s)
}

func (s SegmentBodyResponseData) GoString() string {
	return s.String()
}

func (s *SegmentBodyResponseData) SetImageURL(v string) *SegmentBodyResponseData {
	s.ImageURL = &v
	return s
}

type SegmentBodyAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s SegmentBodyAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s SegmentBodyAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SegmentBodyAdvanceRequest) SetImageURLObject(v io.Reader) *SegmentBodyAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type SegmentCommonImageRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s SegmentCommonImageRequest) String() string {
	return service.Prettify(s)
}

func (s SegmentCommonImageRequest) GoString() string {
	return s.String()
}

func (s *SegmentCommonImageRequest) SetImageURL(v string) *SegmentCommonImageRequest {
	s.ImageURL = &v
	return s
}

type SegmentCommonImageResponse struct {
	RequestId *string                         `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *SegmentCommonImageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s SegmentCommonImageResponse) String() string {
	return service.Prettify(s)
}

func (s SegmentCommonImageResponse) GoString() string {
	return s.String()
}

func (s *SegmentCommonImageResponse) SetRequestId(v string) *SegmentCommonImageResponse {
	s.RequestId = &v
	return s
}

func (s *SegmentCommonImageResponse) SetData(v *SegmentCommonImageResponseData) *SegmentCommonImageResponse {
	s.Data = v
	return s
}

type SegmentCommonImageResponseData struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s SegmentCommonImageResponseData) String() string {
	return service.Prettify(s)
}

func (s SegmentCommonImageResponseData) GoString() string {
	return s.String()
}

func (s *SegmentCommonImageResponseData) SetImageURL(v string) *SegmentCommonImageResponseData {
	s.ImageURL = &v
	return s
}

type SegmentCommonImageAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s SegmentCommonImageAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s SegmentCommonImageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SegmentCommonImageAdvanceRequest) SetImageURLObject(v io.Reader) *SegmentCommonImageAdvanceRequest {
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
				"host":       common.GetHost("imageseg", client.RegionId, client.Endpoint),
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

func (client *Client) ParseFace(request *ParseFaceRequest, runtime *common.RuntimeObject) (_result *ParseFaceResponse, _err error) {
	_result = &ParseFaceResponse{}
	_body, _err := client._request("ParseFace", "HTTPS", "GET", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ParseFaceAdvance(request *ParseFaceAdvanceRequest, runtime *common.RuntimeObject) (_result *ParseFaceResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	parseFacereq := &ParseFaceRequest{}
	common.Convert(request, parseFacereq)
	parseFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	parseFaceResp, _err := client.ParseFace(parseFacereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return parseFaceResp, _err
}

func (client *Client) SegmentVehicle(request *SegmentVehicleRequest, runtime *common.RuntimeObject) (_result *SegmentVehicleResponse, _err error) {
	_result = &SegmentVehicleResponse{}
	_body, _err := client._request("SegmentVehicle", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentVehicleAdvance(request *SegmentVehicleAdvanceRequest, runtime *common.RuntimeObject) (_result *SegmentVehicleResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentVehiclereq := &SegmentVehicleRequest{}
	common.Convert(request, segmentVehiclereq)
	segmentVehiclereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentVehicleResp, _err := client.SegmentVehicle(segmentVehiclereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return segmentVehicleResp, _err
}

func (client *Client) SegmentHair(request *SegmentHairRequest, runtime *common.RuntimeObject) (_result *SegmentHairResponse, _err error) {
	_result = &SegmentHairResponse{}
	_body, _err := client._request("SegmentHair", "HTTPS", "GET", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentHairAdvance(request *SegmentHairAdvanceRequest, runtime *common.RuntimeObject) (_result *SegmentHairResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentHairreq := &SegmentHairRequest{}
	common.Convert(request, segmentHairreq)
	segmentHairreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentHairResp, _err := client.SegmentHair(segmentHairreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return segmentHairResp, _err
}

func (client *Client) SegmentFace(request *SegmentFaceRequest, runtime *common.RuntimeObject) (_result *SegmentFaceResponse, _err error) {
	_result = &SegmentFaceResponse{}
	_body, _err := client._request("SegmentFace", "HTTPS", "GET", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentFaceAdvance(request *SegmentFaceAdvanceRequest, runtime *common.RuntimeObject) (_result *SegmentFaceResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentFacereq := &SegmentFaceRequest{}
	common.Convert(request, segmentFacereq)
	segmentFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentFaceResp, _err := client.SegmentFace(segmentFacereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return segmentFaceResp, _err
}

func (client *Client) SegmentHead(request *SegmentHeadRequest, runtime *common.RuntimeObject) (_result *SegmentHeadResponse, _err error) {
	_result = &SegmentHeadResponse{}
	_body, _err := client._request("SegmentHead", "HTTPS", "GET", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentHeadAdvance(request *SegmentHeadAdvanceRequest, runtime *common.RuntimeObject) (_result *SegmentHeadResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentHeadreq := &SegmentHeadRequest{}
	common.Convert(request, segmentHeadreq)
	segmentHeadreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentHeadResp, _err := client.SegmentHead(segmentHeadreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return segmentHeadResp, _err
}

func (client *Client) SegmentCommodity(request *SegmentCommodityRequest, runtime *common.RuntimeObject) (_result *SegmentCommodityResponse, _err error) {
	_result = &SegmentCommodityResponse{}
	_body, _err := client._request("SegmentCommodity", "HTTPS", "GET", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentCommodityAdvance(request *SegmentCommodityAdvanceRequest, runtime *common.RuntimeObject) (_result *SegmentCommodityResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentCommodityreq := &SegmentCommodityRequest{}
	common.Convert(request, segmentCommodityreq)
	segmentCommodityreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentCommodityResp, _err := client.SegmentCommodity(segmentCommodityreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return segmentCommodityResp, _err
}

func (client *Client) SegmentBody(request *SegmentBodyRequest, runtime *common.RuntimeObject) (_result *SegmentBodyResponse, _err error) {
	_result = &SegmentBodyResponse{}
	_body, _err := client._request("SegmentBody", "HTTPS", "GET", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentBodyAdvance(request *SegmentBodyAdvanceRequest, runtime *common.RuntimeObject) (_result *SegmentBodyResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentBodyreq := &SegmentBodyRequest{}
	common.Convert(request, segmentBodyreq)
	segmentBodyreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentBodyResp, _err := client.SegmentBody(segmentBodyreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return segmentBodyResp, _err
}

func (client *Client) SegmentCommonImage(request *SegmentCommonImageRequest, runtime *common.RuntimeObject) (_result *SegmentCommonImageResponse, _err error) {
	_result = &SegmentCommonImageResponse{}
	_body, _err := client._request("SegmentCommonImage", "HTTPS", "GET", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentCommonImageAdvance(request *SegmentCommonImageAdvanceRequest, runtime *common.RuntimeObject) (_result *SegmentCommonImageResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentCommonImagereq := &SegmentCommonImageRequest{}
	common.Convert(request, segmentCommonImagereq)
	segmentCommonImagereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentCommonImageResp, _err := client.SegmentCommonImage(segmentCommonImagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return segmentCommonImageResp, _err
}
