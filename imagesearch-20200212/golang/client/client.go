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

type SearchImageByNameRequest struct {
	CategoryId   *int    `json:"CategoryId,omitempty" xml:"CategoryId,omitempty"`
	InstanceName *string `json:"InstanceName,omitempty" xml:"InstanceName,omitempty" require:"true"`
	ProductId    *string `json:"ProductId,omitempty" xml:"ProductId,omitempty" require:"true"`
	PicName      *string `json:"PicName,omitempty" xml:"PicName,omitempty" require:"true"`
	Num          *int    `json:"Num,omitempty" xml:"Num,omitempty"`
	Start        *int    `json:"Start,omitempty" xml:"Start,omitempty"`
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

type SearchImageByNameResponse struct {
	RequestId *string                              `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                                `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *int                                 `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Msg       *string                              `json:"Msg,omitempty" xml:"Msg,omitempty" require:"true"`
	Auctions  []*SearchImageByNameResponseAuctions `json:"Auctions,omitempty" xml:"Auctions,omitempty" require:"true" type:"Repeated"`
	Head      *SearchImageByNameResponseHead       `json:"Head,omitempty" xml:"Head,omitempty" require:"true" type:"Struct"`
	PicInfo   *SearchImageByNameResponsePicInfo    `json:"PicInfo,omitempty" xml:"PicInfo,omitempty" require:"true" type:"Struct"`
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
	CategoryId     *int    `json:"CategoryId,omitempty" xml:"CategoryId,omitempty" require:"true"`
	ProductId      *string `json:"ProductId,omitempty" xml:"ProductId,omitempty" require:"true"`
	PicName        *string `json:"PicName,omitempty" xml:"PicName,omitempty" require:"true"`
	CustomContent  *string `json:"CustomContent,omitempty" xml:"CustomContent,omitempty" require:"true"`
	SortExprValues *string `json:"SortExprValues,omitempty" xml:"SortExprValues,omitempty" require:"true"`
	IntAttr        *int    `json:"IntAttr,omitempty" xml:"IntAttr,omitempty" require:"true"`
	StrAttr        *string `json:"StrAttr,omitempty" xml:"StrAttr,omitempty" require:"true"`
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
	DocsReturn *int `json:"DocsReturn,omitempty" xml:"DocsReturn,omitempty" require:"true"`
	DocsFound  *int `json:"DocsFound,omitempty" xml:"DocsFound,omitempty" require:"true"`
	SearchTime *int `json:"SearchTime,omitempty" xml:"SearchTime,omitempty" require:"true"`
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
	CategoryId    *int                                             `json:"CategoryId,omitempty" xml:"CategoryId,omitempty" require:"true"`
	Region        *string                                          `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
	AllCategories []*SearchImageByNameResponsePicInfoAllCategories `json:"AllCategories,omitempty" xml:"AllCategories,omitempty" require:"true" type:"Repeated"`
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
	Id   *int    `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Name *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
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
	CategoryId   *int    `json:"CategoryId,omitempty" xml:"CategoryId,omitempty"`
	InstanceName *string `json:"InstanceName,omitempty" xml:"InstanceName,omitempty" require:"true"`
	PicContent   *string `json:"PicContent,omitempty" xml:"PicContent,omitempty" require:"true"`
	Crop         *bool   `json:"Crop,omitempty" xml:"Crop,omitempty"`
	Region       *string `json:"Region,omitempty" xml:"Region,omitempty"`
	Num          *int    `json:"Num,omitempty" xml:"Num,omitempty"`
	Start        *int    `json:"Start,omitempty" xml:"Start,omitempty"`
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

type SearchImageByPicResponse struct {
	RequestId *string                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                               `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *int                                `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Msg       *string                             `json:"Msg,omitempty" xml:"Msg,omitempty" require:"true"`
	Auctions  []*SearchImageByPicResponseAuctions `json:"Auctions,omitempty" xml:"Auctions,omitempty" require:"true" type:"Repeated"`
	Head      *SearchImageByPicResponseHead       `json:"Head,omitempty" xml:"Head,omitempty" require:"true" type:"Struct"`
	PicInfo   *SearchImageByPicResponsePicInfo    `json:"PicInfo,omitempty" xml:"PicInfo,omitempty" require:"true" type:"Struct"`
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
	CategoryId     *int    `json:"CategoryId,omitempty" xml:"CategoryId,omitempty" require:"true"`
	ProductId      *string `json:"ProductId,omitempty" xml:"ProductId,omitempty" require:"true"`
	PicName        *string `json:"PicName,omitempty" xml:"PicName,omitempty" require:"true"`
	CustomContent  *string `json:"CustomContent,omitempty" xml:"CustomContent,omitempty" require:"true"`
	SortExprValues *string `json:"SortExprValues,omitempty" xml:"SortExprValues,omitempty" require:"true"`
	IntAttr        *int    `json:"IntAttr,omitempty" xml:"IntAttr,omitempty" require:"true"`
	StrAttr        *string `json:"StrAttr,omitempty" xml:"StrAttr,omitempty" require:"true"`
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
	DocsReturn *int `json:"DocsReturn,omitempty" xml:"DocsReturn,omitempty" require:"true"`
	DocsFound  *int `json:"DocsFound,omitempty" xml:"DocsFound,omitempty" require:"true"`
	SearchTime *int `json:"SearchTime,omitempty" xml:"SearchTime,omitempty" require:"true"`
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
	CategoryId    *int                                            `json:"CategoryId,omitempty" xml:"CategoryId,omitempty" require:"true"`
	Region        *string                                         `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
	AllCategories []*SearchImageByPicResponsePicInfoAllCategories `json:"AllCategories,omitempty" xml:"AllCategories,omitempty" require:"true" type:"Repeated"`
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
	Id   *int    `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	Name *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
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
	PicContentObject io.Reader `json:"PicContentObject,omitempty" xml:"PicContentObject,omitempty" require:"true"`
	CategoryId       *int      `json:"CategoryId,omitempty" xml:"CategoryId,omitempty"`
	InstanceName     *string   `json:"InstanceName,omitempty" xml:"InstanceName,omitempty" require:"true"`
	Crop             *bool     `json:"Crop,omitempty" xml:"Crop,omitempty"`
	Region           *string   `json:"Region,omitempty" xml:"Region,omitempty"`
	Num              *int      `json:"Num,omitempty" xml:"Num,omitempty"`
	Start            *int      `json:"Start,omitempty" xml:"Start,omitempty"`
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

type DeleteImageRequest struct {
	InstanceName *string `json:"InstanceName,omitempty" xml:"InstanceName,omitempty" require:"true"`
	ProductId    *string `json:"ProductId,omitempty" xml:"ProductId,omitempty" require:"true"`
	PicName      *string `json:"PicName,omitempty" xml:"PicName,omitempty"`
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
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Message   *string `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Code      *int    `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
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
	InstanceName  *string `json:"InstanceName,omitempty" xml:"InstanceName,omitempty" require:"true"`
	CategoryId    *int    `json:"CategoryId,omitempty" xml:"CategoryId,omitempty"`
	ProductId     *string `json:"ProductId,omitempty" xml:"ProductId,omitempty" require:"true"`
	PicName       *string `json:"PicName,omitempty" xml:"PicName,omitempty" require:"true"`
	PicContent    *string `json:"PicContent,omitempty" xml:"PicContent,omitempty" require:"true"`
	Crop          *bool   `json:"Crop,omitempty" xml:"Crop,omitempty"`
	Region        *string `json:"Region,omitempty" xml:"Region,omitempty"`
	CustomContent *string `json:"CustomContent,omitempty" xml:"CustomContent,omitempty"`
	IntAttr       *int    `json:"IntAttr,omitempty" xml:"IntAttr,omitempty"`
	StrAttr       *string `json:"StrAttr,omitempty" xml:"StrAttr,omitempty"`
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
	RequestId *string                  `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Success   *bool                    `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Message   *string                  `json:"Message,omitempty" xml:"Message,omitempty" require:"true"`
	Code      *int                     `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	PicInfo   *AddImageResponsePicInfo `json:"PicInfo,omitempty" xml:"PicInfo,omitempty" require:"true" type:"Struct"`
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
	CategoryId *int    `json:"CategoryId,omitempty" xml:"CategoryId,omitempty" require:"true"`
	Region     *string `json:"Region,omitempty" xml:"Region,omitempty" require:"true"`
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
	PicContentObject io.Reader `json:"PicContentObject,omitempty" xml:"PicContentObject,omitempty" require:"true"`
	InstanceName     *string   `json:"InstanceName,omitempty" xml:"InstanceName,omitempty" require:"true"`
	CategoryId       *int      `json:"CategoryId,omitempty" xml:"CategoryId,omitempty"`
	ProductId        *string   `json:"ProductId,omitempty" xml:"ProductId,omitempty" require:"true"`
	PicName          *string   `json:"PicName,omitempty" xml:"PicName,omitempty" require:"true"`
	Crop             *bool     `json:"Crop,omitempty" xml:"Crop,omitempty"`
	Region           *string   `json:"Region,omitempty" xml:"Region,omitempty"`
	CustomContent    *string   `json:"CustomContent,omitempty" xml:"CustomContent,omitempty"`
	IntAttr          *int      `json:"IntAttr,omitempty" xml:"IntAttr,omitempty"`
	StrAttr          *string   `json:"StrAttr,omitempty" xml:"StrAttr,omitempty"`
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
	client.EndpointRule = tea.String("")
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("imagesearch"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) SearchImageByName(request *SearchImageByNameRequest, runtime *util.RuntimeOptions) (_result *SearchImageByNameResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchImageByNameResponse{}
	_body, _err := client.DoRequest(tea.String("SearchImageByName"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-02-12"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchImageByPic(request *SearchImageByPicRequest, runtime *util.RuntimeOptions) (_result *SearchImageByPicResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SearchImageByPicResponse{}
	_body, _err := client.DoRequest(tea.String("SearchImageByPic"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-02-12"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchImageByPicAdvance(request *SearchImageByPicAdvanceRequest, runtime *util.RuntimeOptions) (_result *SearchImageByPicResponse, _err error) {
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
		Product:  tea.String("ImageSearch"),
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
		return _result, _err
	}
	// Step 2: request final api
	searchImageByPicreq := &SearchImageByPicRequest{}
	rpcutil.Convert(request, searchImageByPicreq)
	searchImageByPicreq.PicContent = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	searchImageByPicResp, _err := client.SearchImageByPic(searchImageByPicreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = searchImageByPicResp
	return _result, _err
}

func (client *Client) DeleteImage(request *DeleteImageRequest, runtime *util.RuntimeOptions) (_result *DeleteImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteImageResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteImage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-02-12"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddImage(request *AddImageRequest, runtime *util.RuntimeOptions) (_result *AddImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AddImageResponse{}
	_body, _err := client.DoRequest(tea.String("AddImage"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-02-12"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddImageAdvance(request *AddImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *AddImageResponse, _err error) {
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
		Product:  tea.String("ImageSearch"),
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
		return _result, _err
	}
	// Step 2: request final api
	addImagereq := &AddImageRequest{}
	rpcutil.Convert(request, addImagereq)
	addImagereq.PicContent = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	addImageResp, _err := client.AddImage(addImagereq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = addImageResp
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
