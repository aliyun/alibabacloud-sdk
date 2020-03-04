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

type SearchImageByNameRequest struct {
	CategoryId   *int    `json:"CategoryId" xml:"CategoryId"`
	InstanceName *string `json:"InstanceName" xml:"InstanceName" require:"true"`
	ProductId    *string `json:"ProductId" xml:"ProductId" require:"true"`
	PicName      *string `json:"PicName" xml:"PicName" require:"true"`
	Num          *int    `json:"Num" xml:"Num"`
	Start        *int    `json:"Start" xml:"Start"`
	Filter       *string `json:"Filter" xml:"Filter"`
}

func (s SearchImageByNameRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchImageByNameRequest) GoString() string {
	return s.String()
}

func (s *SearchImageByNameRequest) SetCategoryId(v int) *SearchImageByNameRequest {
	s.CategoryId = &v
	return s
}

func (s *SearchImageByNameRequest) SetInstanceName(v string) *SearchImageByNameRequest {
	s.InstanceName = &v
	return s
}

func (s *SearchImageByNameRequest) SetProductId(v string) *SearchImageByNameRequest {
	s.ProductId = &v
	return s
}

func (s *SearchImageByNameRequest) SetPicName(v string) *SearchImageByNameRequest {
	s.PicName = &v
	return s
}

func (s *SearchImageByNameRequest) SetNum(v int) *SearchImageByNameRequest {
	s.Num = &v
	return s
}

func (s *SearchImageByNameRequest) SetStart(v int) *SearchImageByNameRequest {
	s.Start = &v
	return s
}

func (s *SearchImageByNameRequest) SetFilter(v string) *SearchImageByNameRequest {
	s.Filter = &v
	return s
}

type SearchImageByNameResponse struct {
	RequestId *string                              `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool                                `json:"Success" xml:"Success" require:"true"`
	Code      *int                                 `json:"Code" xml:"Code" require:"true"`
	Msg       *string                              `json:"Msg" xml:"Msg" require:"true"`
	Auctions  []*SearchImageByNameResponseAuctions `json:"Auctions" xml:"Auctions" require:"true" type:"Repeated"`
	Head      *SearchImageByNameResponseHead       `json:"Head" xml:"Head" require:"true" type:"Struct"`
	PicInfo   *SearchImageByNameResponsePicInfo    `json:"PicInfo" xml:"PicInfo" require:"true" type:"Struct"`
}

func (s SearchImageByNameResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchImageByNameResponse) GoString() string {
	return s.String()
}

func (s *SearchImageByNameResponse) SetRequestId(v string) *SearchImageByNameResponse {
	s.RequestId = &v
	return s
}

func (s *SearchImageByNameResponse) SetSuccess(v bool) *SearchImageByNameResponse {
	s.Success = &v
	return s
}

func (s *SearchImageByNameResponse) SetCode(v int) *SearchImageByNameResponse {
	s.Code = &v
	return s
}

func (s *SearchImageByNameResponse) SetMsg(v string) *SearchImageByNameResponse {
	s.Msg = &v
	return s
}

func (s *SearchImageByNameResponse) SetAuctions(v []*SearchImageByNameResponseAuctions) *SearchImageByNameResponse {
	s.Auctions = v
	return s
}

func (s *SearchImageByNameResponse) SetHead(v *SearchImageByNameResponseHead) *SearchImageByNameResponse {
	s.Head = v
	return s
}

func (s *SearchImageByNameResponse) SetPicInfo(v *SearchImageByNameResponsePicInfo) *SearchImageByNameResponse {
	s.PicInfo = v
	return s
}

type SearchImageByNameResponseAuctions struct {
	CategoryId     *int    `json:"CategoryId" xml:"CategoryId" require:"true"`
	ProductId      *string `json:"ProductId" xml:"ProductId" require:"true"`
	PicName        *string `json:"PicName" xml:"PicName" require:"true"`
	CustomContent  *string `json:"CustomContent" xml:"CustomContent" require:"true"`
	SortExprValues *string `json:"SortExprValues" xml:"SortExprValues" require:"true"`
	IntAttr        *int    `json:"IntAttr" xml:"IntAttr" require:"true"`
	StrAttr        *string `json:"StrAttr" xml:"StrAttr" require:"true"`
}

func (s SearchImageByNameResponseAuctions) String() string {
	return tea.Prettify(s)
}

func (s SearchImageByNameResponseAuctions) GoString() string {
	return s.String()
}

func (s *SearchImageByNameResponseAuctions) SetCategoryId(v int) *SearchImageByNameResponseAuctions {
	s.CategoryId = &v
	return s
}

func (s *SearchImageByNameResponseAuctions) SetProductId(v string) *SearchImageByNameResponseAuctions {
	s.ProductId = &v
	return s
}

func (s *SearchImageByNameResponseAuctions) SetPicName(v string) *SearchImageByNameResponseAuctions {
	s.PicName = &v
	return s
}

func (s *SearchImageByNameResponseAuctions) SetCustomContent(v string) *SearchImageByNameResponseAuctions {
	s.CustomContent = &v
	return s
}

func (s *SearchImageByNameResponseAuctions) SetSortExprValues(v string) *SearchImageByNameResponseAuctions {
	s.SortExprValues = &v
	return s
}

func (s *SearchImageByNameResponseAuctions) SetIntAttr(v int) *SearchImageByNameResponseAuctions {
	s.IntAttr = &v
	return s
}

func (s *SearchImageByNameResponseAuctions) SetStrAttr(v string) *SearchImageByNameResponseAuctions {
	s.StrAttr = &v
	return s
}

type SearchImageByNameResponseHead struct {
	DocsReturn *int `json:"DocsReturn" xml:"DocsReturn" require:"true"`
	DocsFound  *int `json:"DocsFound" xml:"DocsFound" require:"true"`
	SearchTime *int `json:"SearchTime" xml:"SearchTime" require:"true"`
}

func (s SearchImageByNameResponseHead) String() string {
	return tea.Prettify(s)
}

func (s SearchImageByNameResponseHead) GoString() string {
	return s.String()
}

func (s *SearchImageByNameResponseHead) SetDocsReturn(v int) *SearchImageByNameResponseHead {
	s.DocsReturn = &v
	return s
}

func (s *SearchImageByNameResponseHead) SetDocsFound(v int) *SearchImageByNameResponseHead {
	s.DocsFound = &v
	return s
}

func (s *SearchImageByNameResponseHead) SetSearchTime(v int) *SearchImageByNameResponseHead {
	s.SearchTime = &v
	return s
}

type SearchImageByNameResponsePicInfo struct {
	CategoryId    *int                                             `json:"CategoryId" xml:"CategoryId" require:"true"`
	Region        *string                                          `json:"Region" xml:"Region" require:"true"`
	AllCategories []*SearchImageByNameResponsePicInfoAllCategories `json:"AllCategories" xml:"AllCategories" require:"true" type:"Repeated"`
}

func (s SearchImageByNameResponsePicInfo) String() string {
	return tea.Prettify(s)
}

func (s SearchImageByNameResponsePicInfo) GoString() string {
	return s.String()
}

func (s *SearchImageByNameResponsePicInfo) SetCategoryId(v int) *SearchImageByNameResponsePicInfo {
	s.CategoryId = &v
	return s
}

func (s *SearchImageByNameResponsePicInfo) SetRegion(v string) *SearchImageByNameResponsePicInfo {
	s.Region = &v
	return s
}

func (s *SearchImageByNameResponsePicInfo) SetAllCategories(v []*SearchImageByNameResponsePicInfoAllCategories) *SearchImageByNameResponsePicInfo {
	s.AllCategories = v
	return s
}

type SearchImageByNameResponsePicInfoAllCategories struct {
	Id   *int    `json:"Id" xml:"Id" require:"true"`
	Name *string `json:"Name" xml:"Name" require:"true"`
}

func (s SearchImageByNameResponsePicInfoAllCategories) String() string {
	return tea.Prettify(s)
}

func (s SearchImageByNameResponsePicInfoAllCategories) GoString() string {
	return s.String()
}

func (s *SearchImageByNameResponsePicInfoAllCategories) SetId(v int) *SearchImageByNameResponsePicInfoAllCategories {
	s.Id = &v
	return s
}

func (s *SearchImageByNameResponsePicInfoAllCategories) SetName(v string) *SearchImageByNameResponsePicInfoAllCategories {
	s.Name = &v
	return s
}

type SearchImageByPicRequest struct {
	CategoryId   *int    `json:"CategoryId" xml:"CategoryId"`
	InstanceName *string `json:"InstanceName" xml:"InstanceName" require:"true"`
	PicContent   *string `json:"PicContent" xml:"PicContent" require:"true"`
	Crop         *bool   `json:"Crop" xml:"Crop"`
	Region       *string `json:"Region" xml:"Region"`
	Num          *int    `json:"Num" xml:"Num"`
	Start        *int    `json:"Start" xml:"Start"`
	Filter       *string `json:"Filter" xml:"Filter"`
}

func (s SearchImageByPicRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchImageByPicRequest) GoString() string {
	return s.String()
}

func (s *SearchImageByPicRequest) SetCategoryId(v int) *SearchImageByPicRequest {
	s.CategoryId = &v
	return s
}

func (s *SearchImageByPicRequest) SetInstanceName(v string) *SearchImageByPicRequest {
	s.InstanceName = &v
	return s
}

func (s *SearchImageByPicRequest) SetPicContent(v string) *SearchImageByPicRequest {
	s.PicContent = &v
	return s
}

func (s *SearchImageByPicRequest) SetCrop(v bool) *SearchImageByPicRequest {
	s.Crop = &v
	return s
}

func (s *SearchImageByPicRequest) SetRegion(v string) *SearchImageByPicRequest {
	s.Region = &v
	return s
}

func (s *SearchImageByPicRequest) SetNum(v int) *SearchImageByPicRequest {
	s.Num = &v
	return s
}

func (s *SearchImageByPicRequest) SetStart(v int) *SearchImageByPicRequest {
	s.Start = &v
	return s
}

func (s *SearchImageByPicRequest) SetFilter(v string) *SearchImageByPicRequest {
	s.Filter = &v
	return s
}

type SearchImageByPicResponse struct {
	RequestId *string                             `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool                               `json:"Success" xml:"Success" require:"true"`
	Code      *int                                `json:"Code" xml:"Code" require:"true"`
	Msg       *string                             `json:"Msg" xml:"Msg" require:"true"`
	Auctions  []*SearchImageByPicResponseAuctions `json:"Auctions" xml:"Auctions" require:"true" type:"Repeated"`
	Head      *SearchImageByPicResponseHead       `json:"Head" xml:"Head" require:"true" type:"Struct"`
	PicInfo   *SearchImageByPicResponsePicInfo    `json:"PicInfo" xml:"PicInfo" require:"true" type:"Struct"`
}

func (s SearchImageByPicResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchImageByPicResponse) GoString() string {
	return s.String()
}

func (s *SearchImageByPicResponse) SetRequestId(v string) *SearchImageByPicResponse {
	s.RequestId = &v
	return s
}

func (s *SearchImageByPicResponse) SetSuccess(v bool) *SearchImageByPicResponse {
	s.Success = &v
	return s
}

func (s *SearchImageByPicResponse) SetCode(v int) *SearchImageByPicResponse {
	s.Code = &v
	return s
}

func (s *SearchImageByPicResponse) SetMsg(v string) *SearchImageByPicResponse {
	s.Msg = &v
	return s
}

func (s *SearchImageByPicResponse) SetAuctions(v []*SearchImageByPicResponseAuctions) *SearchImageByPicResponse {
	s.Auctions = v
	return s
}

func (s *SearchImageByPicResponse) SetHead(v *SearchImageByPicResponseHead) *SearchImageByPicResponse {
	s.Head = v
	return s
}

func (s *SearchImageByPicResponse) SetPicInfo(v *SearchImageByPicResponsePicInfo) *SearchImageByPicResponse {
	s.PicInfo = v
	return s
}

type SearchImageByPicResponseAuctions struct {
	CategoryId     *int    `json:"CategoryId" xml:"CategoryId" require:"true"`
	ProductId      *string `json:"ProductId" xml:"ProductId" require:"true"`
	PicName        *string `json:"PicName" xml:"PicName" require:"true"`
	CustomContent  *string `json:"CustomContent" xml:"CustomContent" require:"true"`
	SortExprValues *string `json:"SortExprValues" xml:"SortExprValues" require:"true"`
	IntAttr        *int    `json:"IntAttr" xml:"IntAttr" require:"true"`
	StrAttr        *string `json:"StrAttr" xml:"StrAttr" require:"true"`
}

func (s SearchImageByPicResponseAuctions) String() string {
	return tea.Prettify(s)
}

func (s SearchImageByPicResponseAuctions) GoString() string {
	return s.String()
}

func (s *SearchImageByPicResponseAuctions) SetCategoryId(v int) *SearchImageByPicResponseAuctions {
	s.CategoryId = &v
	return s
}

func (s *SearchImageByPicResponseAuctions) SetProductId(v string) *SearchImageByPicResponseAuctions {
	s.ProductId = &v
	return s
}

func (s *SearchImageByPicResponseAuctions) SetPicName(v string) *SearchImageByPicResponseAuctions {
	s.PicName = &v
	return s
}

func (s *SearchImageByPicResponseAuctions) SetCustomContent(v string) *SearchImageByPicResponseAuctions {
	s.CustomContent = &v
	return s
}

func (s *SearchImageByPicResponseAuctions) SetSortExprValues(v string) *SearchImageByPicResponseAuctions {
	s.SortExprValues = &v
	return s
}

func (s *SearchImageByPicResponseAuctions) SetIntAttr(v int) *SearchImageByPicResponseAuctions {
	s.IntAttr = &v
	return s
}

func (s *SearchImageByPicResponseAuctions) SetStrAttr(v string) *SearchImageByPicResponseAuctions {
	s.StrAttr = &v
	return s
}

type SearchImageByPicResponseHead struct {
	DocsReturn *int `json:"DocsReturn" xml:"DocsReturn" require:"true"`
	DocsFound  *int `json:"DocsFound" xml:"DocsFound" require:"true"`
	SearchTime *int `json:"SearchTime" xml:"SearchTime" require:"true"`
}

func (s SearchImageByPicResponseHead) String() string {
	return tea.Prettify(s)
}

func (s SearchImageByPicResponseHead) GoString() string {
	return s.String()
}

func (s *SearchImageByPicResponseHead) SetDocsReturn(v int) *SearchImageByPicResponseHead {
	s.DocsReturn = &v
	return s
}

func (s *SearchImageByPicResponseHead) SetDocsFound(v int) *SearchImageByPicResponseHead {
	s.DocsFound = &v
	return s
}

func (s *SearchImageByPicResponseHead) SetSearchTime(v int) *SearchImageByPicResponseHead {
	s.SearchTime = &v
	return s
}

type SearchImageByPicResponsePicInfo struct {
	CategoryId    *int                                            `json:"CategoryId" xml:"CategoryId" require:"true"`
	Region        *string                                         `json:"Region" xml:"Region" require:"true"`
	AllCategories []*SearchImageByPicResponsePicInfoAllCategories `json:"AllCategories" xml:"AllCategories" require:"true" type:"Repeated"`
}

func (s SearchImageByPicResponsePicInfo) String() string {
	return tea.Prettify(s)
}

func (s SearchImageByPicResponsePicInfo) GoString() string {
	return s.String()
}

func (s *SearchImageByPicResponsePicInfo) SetCategoryId(v int) *SearchImageByPicResponsePicInfo {
	s.CategoryId = &v
	return s
}

func (s *SearchImageByPicResponsePicInfo) SetRegion(v string) *SearchImageByPicResponsePicInfo {
	s.Region = &v
	return s
}

func (s *SearchImageByPicResponsePicInfo) SetAllCategories(v []*SearchImageByPicResponsePicInfoAllCategories) *SearchImageByPicResponsePicInfo {
	s.AllCategories = v
	return s
}

type SearchImageByPicResponsePicInfoAllCategories struct {
	Id   *int    `json:"Id" xml:"Id" require:"true"`
	Name *string `json:"Name" xml:"Name" require:"true"`
}

func (s SearchImageByPicResponsePicInfoAllCategories) String() string {
	return tea.Prettify(s)
}

func (s SearchImageByPicResponsePicInfoAllCategories) GoString() string {
	return s.String()
}

func (s *SearchImageByPicResponsePicInfoAllCategories) SetId(v int) *SearchImageByPicResponsePicInfoAllCategories {
	s.Id = &v
	return s
}

func (s *SearchImageByPicResponsePicInfoAllCategories) SetName(v string) *SearchImageByPicResponsePicInfoAllCategories {
	s.Name = &v
	return s
}

type SearchImageByPicAdvanceRequest struct {
	PicContentObject io.Reader `json:"PicContentObject" xml:"PicContentObject" require:"true"`
	CategoryId       *int      `json:"CategoryId" xml:"CategoryId"`
	InstanceName     *string   `json:"InstanceName" xml:"InstanceName" require:"true"`
	Crop             *bool     `json:"Crop" xml:"Crop"`
	Region           *string   `json:"Region" xml:"Region"`
	Num              *int      `json:"Num" xml:"Num"`
	Start            *int      `json:"Start" xml:"Start"`
	Filter           *string   `json:"Filter" xml:"Filter"`
}

func (s SearchImageByPicAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchImageByPicAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SearchImageByPicAdvanceRequest) SetPicContentObject(v io.Reader) *SearchImageByPicAdvanceRequest {
	s.PicContentObject = v
	return s
}

func (s *SearchImageByPicAdvanceRequest) SetCategoryId(v int) *SearchImageByPicAdvanceRequest {
	s.CategoryId = &v
	return s
}

func (s *SearchImageByPicAdvanceRequest) SetInstanceName(v string) *SearchImageByPicAdvanceRequest {
	s.InstanceName = &v
	return s
}

func (s *SearchImageByPicAdvanceRequest) SetCrop(v bool) *SearchImageByPicAdvanceRequest {
	s.Crop = &v
	return s
}

func (s *SearchImageByPicAdvanceRequest) SetRegion(v string) *SearchImageByPicAdvanceRequest {
	s.Region = &v
	return s
}

func (s *SearchImageByPicAdvanceRequest) SetNum(v int) *SearchImageByPicAdvanceRequest {
	s.Num = &v
	return s
}

func (s *SearchImageByPicAdvanceRequest) SetStart(v int) *SearchImageByPicAdvanceRequest {
	s.Start = &v
	return s
}

func (s *SearchImageByPicAdvanceRequest) SetFilter(v string) *SearchImageByPicAdvanceRequest {
	s.Filter = &v
	return s
}

type DeleteImageRequest struct {
	InstanceName *string `json:"InstanceName" xml:"InstanceName" require:"true"`
	ProductId    *string `json:"ProductId" xml:"ProductId" require:"true"`
	PicName      *string `json:"PicName" xml:"PicName"`
}

func (s DeleteImageRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteImageRequest) GoString() string {
	return s.String()
}

func (s *DeleteImageRequest) SetInstanceName(v string) *DeleteImageRequest {
	s.InstanceName = &v
	return s
}

func (s *DeleteImageRequest) SetProductId(v string) *DeleteImageRequest {
	s.ProductId = &v
	return s
}

func (s *DeleteImageRequest) SetPicName(v string) *DeleteImageRequest {
	s.PicName = &v
	return s
}

type DeleteImageResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool   `json:"Success" xml:"Success" require:"true"`
	Message   *string `json:"Message" xml:"Message" require:"true"`
	Code      *int    `json:"Code" xml:"Code" require:"true"`
}

func (s DeleteImageResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteImageResponse) GoString() string {
	return s.String()
}

func (s *DeleteImageResponse) SetRequestId(v string) *DeleteImageResponse {
	s.RequestId = &v
	return s
}

func (s *DeleteImageResponse) SetSuccess(v bool) *DeleteImageResponse {
	s.Success = &v
	return s
}

func (s *DeleteImageResponse) SetMessage(v string) *DeleteImageResponse {
	s.Message = &v
	return s
}

func (s *DeleteImageResponse) SetCode(v int) *DeleteImageResponse {
	s.Code = &v
	return s
}

type AddImageRequest struct {
	InstanceName  *string `json:"InstanceName" xml:"InstanceName" require:"true"`
	CategoryId    *int    `json:"CategoryId" xml:"CategoryId"`
	ProductId     *string `json:"ProductId" xml:"ProductId" require:"true"`
	PicName       *string `json:"PicName" xml:"PicName" require:"true"`
	PicContent    *string `json:"PicContent" xml:"PicContent" require:"true"`
	Crop          *bool   `json:"Crop" xml:"Crop"`
	Region        *string `json:"Region" xml:"Region"`
	CustomContent *string `json:"CustomContent" xml:"CustomContent"`
	IntAttr       *int    `json:"IntAttr" xml:"IntAttr"`
	StrAttr       *string `json:"StrAttr" xml:"StrAttr"`
}

func (s AddImageRequest) String() string {
	return tea.Prettify(s)
}

func (s AddImageRequest) GoString() string {
	return s.String()
}

func (s *AddImageRequest) SetInstanceName(v string) *AddImageRequest {
	s.InstanceName = &v
	return s
}

func (s *AddImageRequest) SetCategoryId(v int) *AddImageRequest {
	s.CategoryId = &v
	return s
}

func (s *AddImageRequest) SetProductId(v string) *AddImageRequest {
	s.ProductId = &v
	return s
}

func (s *AddImageRequest) SetPicName(v string) *AddImageRequest {
	s.PicName = &v
	return s
}

func (s *AddImageRequest) SetPicContent(v string) *AddImageRequest {
	s.PicContent = &v
	return s
}

func (s *AddImageRequest) SetCrop(v bool) *AddImageRequest {
	s.Crop = &v
	return s
}

func (s *AddImageRequest) SetRegion(v string) *AddImageRequest {
	s.Region = &v
	return s
}

func (s *AddImageRequest) SetCustomContent(v string) *AddImageRequest {
	s.CustomContent = &v
	return s
}

func (s *AddImageRequest) SetIntAttr(v int) *AddImageRequest {
	s.IntAttr = &v
	return s
}

func (s *AddImageRequest) SetStrAttr(v string) *AddImageRequest {
	s.StrAttr = &v
	return s
}

type AddImageResponse struct {
	RequestId *string                  `json:"RequestId" xml:"RequestId" require:"true"`
	Success   *bool                    `json:"Success" xml:"Success" require:"true"`
	Message   *string                  `json:"Message" xml:"Message" require:"true"`
	Code      *int                     `json:"Code" xml:"Code" require:"true"`
	PicInfo   *AddImageResponsePicInfo `json:"PicInfo" xml:"PicInfo" require:"true" type:"Struct"`
}

func (s AddImageResponse) String() string {
	return tea.Prettify(s)
}

func (s AddImageResponse) GoString() string {
	return s.String()
}

func (s *AddImageResponse) SetRequestId(v string) *AddImageResponse {
	s.RequestId = &v
	return s
}

func (s *AddImageResponse) SetSuccess(v bool) *AddImageResponse {
	s.Success = &v
	return s
}

func (s *AddImageResponse) SetMessage(v string) *AddImageResponse {
	s.Message = &v
	return s
}

func (s *AddImageResponse) SetCode(v int) *AddImageResponse {
	s.Code = &v
	return s
}

func (s *AddImageResponse) SetPicInfo(v *AddImageResponsePicInfo) *AddImageResponse {
	s.PicInfo = v
	return s
}

type AddImageResponsePicInfo struct {
	CategoryId *int    `json:"CategoryId" xml:"CategoryId" require:"true"`
	Region     *string `json:"Region" xml:"Region" require:"true"`
}

func (s AddImageResponsePicInfo) String() string {
	return tea.Prettify(s)
}

func (s AddImageResponsePicInfo) GoString() string {
	return s.String()
}

func (s *AddImageResponsePicInfo) SetCategoryId(v int) *AddImageResponsePicInfo {
	s.CategoryId = &v
	return s
}

func (s *AddImageResponsePicInfo) SetRegion(v string) *AddImageResponsePicInfo {
	s.Region = &v
	return s
}

type AddImageAdvanceRequest struct {
	PicContentObject io.Reader `json:"PicContentObject" xml:"PicContentObject" require:"true"`
	InstanceName     *string   `json:"InstanceName" xml:"InstanceName" require:"true"`
	CategoryId       *int      `json:"CategoryId" xml:"CategoryId"`
	ProductId        *string   `json:"ProductId" xml:"ProductId" require:"true"`
	PicName          *string   `json:"PicName" xml:"PicName" require:"true"`
	Crop             *bool     `json:"Crop" xml:"Crop"`
	Region           *string   `json:"Region" xml:"Region"`
	CustomContent    *string   `json:"CustomContent" xml:"CustomContent"`
	IntAttr          *int      `json:"IntAttr" xml:"IntAttr"`
	StrAttr          *string   `json:"StrAttr" xml:"StrAttr"`
}

func (s AddImageAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s AddImageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *AddImageAdvanceRequest) SetPicContentObject(v io.Reader) *AddImageAdvanceRequest {
	s.PicContentObject = v
	return s
}

func (s *AddImageAdvanceRequest) SetInstanceName(v string) *AddImageAdvanceRequest {
	s.InstanceName = &v
	return s
}

func (s *AddImageAdvanceRequest) SetCategoryId(v int) *AddImageAdvanceRequest {
	s.CategoryId = &v
	return s
}

func (s *AddImageAdvanceRequest) SetProductId(v string) *AddImageAdvanceRequest {
	s.ProductId = &v
	return s
}

func (s *AddImageAdvanceRequest) SetPicName(v string) *AddImageAdvanceRequest {
	s.PicName = &v
	return s
}

func (s *AddImageAdvanceRequest) SetCrop(v bool) *AddImageAdvanceRequest {
	s.Crop = &v
	return s
}

func (s *AddImageAdvanceRequest) SetRegion(v string) *AddImageAdvanceRequest {
	s.Region = &v
	return s
}

func (s *AddImageAdvanceRequest) SetCustomContent(v string) *AddImageAdvanceRequest {
	s.CustomContent = &v
	return s
}

func (s *AddImageAdvanceRequest) SetIntAttr(v int) *AddImageAdvanceRequest {
	s.IntAttr = &v
	return s
}

func (s *AddImageAdvanceRequest) SetStrAttr(v string) *AddImageAdvanceRequest {
	s.StrAttr = &v
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
	err := client.init(config)
	return client, err
}

func (client *Client) init(config *Config) (_err error) {
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

func (client *Client) _request(action string, protocol string, method string, request map[string]interface{}, runtime *util.RuntimeOptions) (_result map[string]interface{}, _err error) {
	_err = tea.Validate(runtime)
	if _err != nil {
		return make(map[string]interface{}), _err
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
			accessKeyId, _err := client.GetAccessKeyId()
			if _err != nil {
				return make(map[string]interface{}), _err
			}

			accessKeySecret, _err := client.GetAccessKeySecret()
			if _err != nil {
				return make(map[string]interface{}), _err
			}

			request_.Query = rpcutil.Query(tea.ToMap(map[string]interface{}{
				"Action":           action,
				"Format":           "json",
				"RegionId":         client.RegionId,
				"Timestamp":        rpcutil.GetTimestamp(),
				"Version":          "2020-02-12",
				"SignatureMethod":  "HMAC-SHA1",
				"SignatureVersion": "1.0",
				"SignatureNonce":   util.GetNonce(),
				"AccessKeyId":      accessKeyId,
			}, request))
			request_.Headers = map[string]string{
				"host":       rpcutil.GetHost("ImageSearch", client.RegionId, client.Endpoint),
				"user-agent": client.GetUserAgent(),
			}
			request_.Query["Signature"] = rpcutil.GetSignature(request_, accessKeySecret)
			response_, _err := tea.DoRequest(request_, _runtime)
			if _err != nil {
				return make(map[string]interface{}), _err
			}
			obj, _err := util.ReadAsJSON(response_.Body)
			if _err != nil {
				return make(map[string]interface{}), _err
			}

			body := util.AssertAsMap(obj)
			if util.Is4xx(response_.StatusCode) || util.Is5xx(response_.StatusCode) {
				_err = tea.NewSDKError(map[string]interface{}{
					"message": body["Message"],
					"data":    body,
					"code":    body["Code"],
				})
				return make(map[string]interface{}), _err
			}

			_result = body
			return _result, _err
		}()
		if !tea.Retryable(_err) {
			break
		}
	}

	return _resp, _err
}

func (client *Client) SearchImageByName(request *SearchImageByNameRequest, runtime *util.RuntimeOptions) (_result *SearchImageByNameResponse, _err error) {
	_result = &SearchImageByNameResponse{}
	_body, _err := client._request("SearchImageByName", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchImageByPic(request *SearchImageByPicRequest, runtime *util.RuntimeOptions) (_result *SearchImageByPicResponse, _err error) {
	_result = &SearchImageByPicResponse{}
	_body, _err := client._request("SearchImageByPic", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchImageByPicAdvance(request *SearchImageByPicAdvanceRequest, runtime *util.RuntimeOptions) (_result *SearchImageByPicResponse, _err error) {
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
		Product:  tea.String("ImageSearch"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

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
		Content:     request.PicContentObject,
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
	searchImageByPicreq := &SearchImageByPicRequest{}
	rpcutil.Convert(request, searchImageByPicreq)
	searchImageByPicreq.PicContent = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	searchImageByPicResp, _err := client.SearchImageByPic(searchImageByPicreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = searchImageByPicResp
	return _result, _err
}

func (client *Client) DeleteImage(request *DeleteImageRequest, runtime *util.RuntimeOptions) (_result *DeleteImageResponse, _err error) {
	_result = &DeleteImageResponse{}
	_body, _err := client._request("DeleteImage", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddImage(request *AddImageRequest, runtime *util.RuntimeOptions) (_result *AddImageResponse, _err error) {
	_result = &AddImageResponse{}
	_body, _err := client._request("AddImage", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddImageAdvance(request *AddImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *AddImageResponse, _err error) {
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
		Product:  tea.String("ImageSearch"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

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
		Content:     request.PicContentObject,
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
	addImagereq := &AddImageRequest{}
	rpcutil.Convert(request, addImagereq)
	addImagereq.PicContent = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	addImageResp, _err := client.AddImage(addImagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = addImageResp
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
