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

type SegmentFurnitureRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s SegmentFurnitureRequest) String() string {
	return tea.Prettify(s)
}

func (s SegmentFurnitureRequest) GoString() string {
	return s.String()
}

func (s *SegmentFurnitureRequest) SetImageURL(v string) *SegmentFurnitureRequest {
	s.ImageURL = &v
	return s
}

type SegmentFurnitureResponse struct {
	RequestId *string                       `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *SegmentFurnitureResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s SegmentFurnitureResponse) String() string {
	return tea.Prettify(s)
}

func (s SegmentFurnitureResponse) GoString() string {
	return s.String()
}

func (s *SegmentFurnitureResponse) SetRequestId(v string) *SegmentFurnitureResponse {
	s.RequestId = &v
	return s
}

func (s *SegmentFurnitureResponse) SetData(v *SegmentFurnitureResponseData) *SegmentFurnitureResponse {
	s.Data = v
	return s
}

type SegmentFurnitureResponseData struct {
	Elements []*SegmentFurnitureResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
}

func (s SegmentFurnitureResponseData) String() string {
	return tea.Prettify(s)
}

func (s SegmentFurnitureResponseData) GoString() string {
	return s.String()
}

func (s *SegmentFurnitureResponseData) SetElements(v []*SegmentFurnitureResponseDataElements) *SegmentFurnitureResponseData {
	s.Elements = v
	return s
}

type SegmentFurnitureResponseDataElements struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s SegmentFurnitureResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s SegmentFurnitureResponseDataElements) GoString() string {
	return s.String()
}

func (s *SegmentFurnitureResponseDataElements) SetImageURL(v string) *SegmentFurnitureResponseDataElements {
	s.ImageURL = &v
	return s
}

type SegmentFurnitureAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s SegmentFurnitureAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s SegmentFurnitureAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SegmentFurnitureAdvanceRequest) SetImageURLObject(v io.Reader) *SegmentFurnitureAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RefineMaskRequest struct {
	MaskImageURL *string `json:"MaskImageURL" xml:"MaskImageURL" require:"true"`
	ImageURL     *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RefineMaskRequest) String() string {
	return tea.Prettify(s)
}

func (s RefineMaskRequest) GoString() string {
	return s.String()
}

func (s *RefineMaskRequest) SetMaskImageURL(v string) *RefineMaskRequest {
	s.MaskImageURL = &v
	return s
}

func (s *RefineMaskRequest) SetImageURL(v string) *RefineMaskRequest {
	s.ImageURL = &v
	return s
}

type RefineMaskResponse struct {
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RefineMaskResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RefineMaskResponse) String() string {
	return tea.Prettify(s)
}

func (s RefineMaskResponse) GoString() string {
	return s.String()
}

func (s *RefineMaskResponse) SetRequestId(v string) *RefineMaskResponse {
	s.RequestId = &v
	return s
}

func (s *RefineMaskResponse) SetData(v *RefineMaskResponseData) *RefineMaskResponse {
	s.Data = v
	return s
}

type RefineMaskResponseData struct {
	Elements []*RefineMaskResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
}

func (s RefineMaskResponseData) String() string {
	return tea.Prettify(s)
}

func (s RefineMaskResponseData) GoString() string {
	return s.String()
}

func (s *RefineMaskResponseData) SetElements(v []*RefineMaskResponseDataElements) *RefineMaskResponseData {
	s.Elements = v
	return s
}

type RefineMaskResponseDataElements struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RefineMaskResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s RefineMaskResponseDataElements) GoString() string {
	return s.String()
}

func (s *RefineMaskResponseDataElements) SetImageURL(v string) *RefineMaskResponseDataElements {
	s.ImageURL = &v
	return s
}

type RefineMaskAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	MaskImageURL   *string   `json:"MaskImageURL" xml:"MaskImageURL" require:"true"`
}

func (s RefineMaskAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RefineMaskAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RefineMaskAdvanceRequest) SetImageURLObject(v io.Reader) *RefineMaskAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RefineMaskAdvanceRequest) SetMaskImageURL(v string) *RefineMaskAdvanceRequest {
	s.MaskImageURL = &v
	return s
}

type ParseFaceRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s ParseFaceRequest) String() string {
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
}

func (s SegmentCommonImageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SegmentCommonImageAdvanceRequest) SetImageURLObject(v io.Reader) *SegmentCommonImageAdvanceRequest {
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
				"host":       rpcutil.GetHost("imageseg", client.RegionId, client.Endpoint),
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

func (client *Client) SegmentFurniture(request *SegmentFurnitureRequest, runtime *util.RuntimeOptions) (_result *SegmentFurnitureResponse, _err error) {
	_result = &SegmentFurnitureResponse{}
	_body, _err := client._request("SegmentFurniture", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentFurnitureAdvance(request *SegmentFurnitureAdvanceRequest, runtime *util.RuntimeOptions) (_result *SegmentFurnitureResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentFurniturereq := &SegmentFurnitureRequest{}
	rpcutil.Convert(request, segmentFurniturereq)
	segmentFurniturereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentFurnitureResp, _err := client.SegmentFurniture(segmentFurniturereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = segmentFurnitureResp
	return _result, _err
}

func (client *Client) RefineMask(request *RefineMaskRequest, runtime *util.RuntimeOptions) (_result *RefineMaskResponse, _err error) {
	_result = &RefineMaskResponse{}
	_body, _err := client._request("RefineMask", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RefineMaskAdvance(request *RefineMaskAdvanceRequest, runtime *util.RuntimeOptions) (_result *RefineMaskResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	refineMaskreq := &RefineMaskRequest{}
	rpcutil.Convert(request, refineMaskreq)
	refineMaskreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	refineMaskResp, _err := client.RefineMask(refineMaskreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = refineMaskResp
	return _result, _err
}

func (client *Client) ParseFace(request *ParseFaceRequest, runtime *util.RuntimeOptions) (_result *ParseFaceResponse, _err error) {
	_result = &ParseFaceResponse{}
	_body, _err := client._request("ParseFace", "HTTPS", "GET", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ParseFaceAdvance(request *ParseFaceAdvanceRequest, runtime *util.RuntimeOptions) (_result *ParseFaceResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	parseFacereq := &ParseFaceRequest{}
	rpcutil.Convert(request, parseFacereq)
	parseFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	parseFaceResp, _err := client.ParseFace(parseFacereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = parseFaceResp
	return _result, _err
}

func (client *Client) SegmentVehicle(request *SegmentVehicleRequest, runtime *util.RuntimeOptions) (_result *SegmentVehicleResponse, _err error) {
	_result = &SegmentVehicleResponse{}
	_body, _err := client._request("SegmentVehicle", "HTTPS", "POST", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentVehicleAdvance(request *SegmentVehicleAdvanceRequest, runtime *util.RuntimeOptions) (_result *SegmentVehicleResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentVehiclereq := &SegmentVehicleRequest{}
	rpcutil.Convert(request, segmentVehiclereq)
	segmentVehiclereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentVehicleResp, _err := client.SegmentVehicle(segmentVehiclereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = segmentVehicleResp
	return _result, _err
}

func (client *Client) SegmentHair(request *SegmentHairRequest, runtime *util.RuntimeOptions) (_result *SegmentHairResponse, _err error) {
	_result = &SegmentHairResponse{}
	_body, _err := client._request("SegmentHair", "HTTPS", "GET", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentHairAdvance(request *SegmentHairAdvanceRequest, runtime *util.RuntimeOptions) (_result *SegmentHairResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentHairreq := &SegmentHairRequest{}
	rpcutil.Convert(request, segmentHairreq)
	segmentHairreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentHairResp, _err := client.SegmentHair(segmentHairreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = segmentHairResp
	return _result, _err
}

func (client *Client) SegmentFace(request *SegmentFaceRequest, runtime *util.RuntimeOptions) (_result *SegmentFaceResponse, _err error) {
	_result = &SegmentFaceResponse{}
	_body, _err := client._request("SegmentFace", "HTTPS", "GET", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentFaceAdvance(request *SegmentFaceAdvanceRequest, runtime *util.RuntimeOptions) (_result *SegmentFaceResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentFacereq := &SegmentFaceRequest{}
	rpcutil.Convert(request, segmentFacereq)
	segmentFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentFaceResp, _err := client.SegmentFace(segmentFacereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = segmentFaceResp
	return _result, _err
}

func (client *Client) SegmentHead(request *SegmentHeadRequest, runtime *util.RuntimeOptions) (_result *SegmentHeadResponse, _err error) {
	_result = &SegmentHeadResponse{}
	_body, _err := client._request("SegmentHead", "HTTPS", "GET", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentHeadAdvance(request *SegmentHeadAdvanceRequest, runtime *util.RuntimeOptions) (_result *SegmentHeadResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentHeadreq := &SegmentHeadRequest{}
	rpcutil.Convert(request, segmentHeadreq)
	segmentHeadreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentHeadResp, _err := client.SegmentHead(segmentHeadreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = segmentHeadResp
	return _result, _err
}

func (client *Client) SegmentCommodity(request *SegmentCommodityRequest, runtime *util.RuntimeOptions) (_result *SegmentCommodityResponse, _err error) {
	_result = &SegmentCommodityResponse{}
	_body, _err := client._request("SegmentCommodity", "HTTPS", "GET", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentCommodityAdvance(request *SegmentCommodityAdvanceRequest, runtime *util.RuntimeOptions) (_result *SegmentCommodityResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentCommodityreq := &SegmentCommodityRequest{}
	rpcutil.Convert(request, segmentCommodityreq)
	segmentCommodityreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentCommodityResp, _err := client.SegmentCommodity(segmentCommodityreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = segmentCommodityResp
	return _result, _err
}

func (client *Client) SegmentBody(request *SegmentBodyRequest, runtime *util.RuntimeOptions) (_result *SegmentBodyResponse, _err error) {
	_result = &SegmentBodyResponse{}
	_body, _err := client._request("SegmentBody", "HTTPS", "GET", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentBodyAdvance(request *SegmentBodyAdvanceRequest, runtime *util.RuntimeOptions) (_result *SegmentBodyResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentBodyreq := &SegmentBodyRequest{}
	rpcutil.Convert(request, segmentBodyreq)
	segmentBodyreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentBodyResp, _err := client.SegmentBody(segmentBodyreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = segmentBodyResp
	return _result, _err
}

func (client *Client) SegmentCommonImage(request *SegmentCommonImageRequest, runtime *util.RuntimeOptions) (_result *SegmentCommonImageResponse, _err error) {
	_result = &SegmentCommonImageResponse{}
	_body, _err := client._request("SegmentCommonImage", "HTTPS", "GET", "AK", tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentCommonImageAdvance(request *SegmentCommonImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *SegmentCommonImageResponse, _err error) {
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
		Product:  tea.String("imageseg"),
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
	segmentCommonImagereq := &SegmentCommonImageRequest{}
	rpcutil.Convert(request, segmentCommonImagereq)
	segmentCommonImagereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentCommonImageResp, _err := client.SegmentCommonImage(segmentCommonImagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = segmentCommonImageResp
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
