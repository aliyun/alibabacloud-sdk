// This file is auto-generated, don't edit it. Thanks.
package client

import (
	"github.com/alibabacloud-go/tea/tea"
	oss "github.com/aliyun/alibabacloud-oss-sdk/golang/client"
	ossutil "github.com/aliyun/alibabacloud-oss-sdk/util/golang/service"
	rpcutil "github.com/aliyun/alibabacloud-rpc-util-sdk/golang/service"
	openplatform "github.com/aliyun/alibabacloud-sdk/openplatform-20191219/golang/client"
	endpointutil "github.com/aliyun/endpoint-util/golang/service"
	fileform "github.com/aliyun/tea-fileform/golang/service"
	rpc "github.com/aliyun/tea-rpc/golang/client"
	util "github.com/aliyun/tea-util/golang/service"
	"io"
)

type ListImageDbsRequest struct {
}

func (s ListImageDbsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListImageDbsRequest) GoString() string {
	return s.String()
}

type ListImageDbsResponse struct {
	RequestId *string                   `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ListImageDbsResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s ListImageDbsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListImageDbsResponse) GoString() string {
	return s.String()
}

func (s *ListImageDbsResponse) SetRequestId(v string) *ListImageDbsResponse {
	s.RequestId = &v
	return s
}

func (s *ListImageDbsResponse) SetData(v *ListImageDbsResponseData) *ListImageDbsResponse {
	s.Data = v
	return s
}

type ListImageDbsResponseData struct {
	DbList []*ListImageDbsResponseDataDbList `json:"DbList" xml:"DbList" require:"true" type:"Repeated"`
}

func (s ListImageDbsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListImageDbsResponseData) GoString() string {
	return s.String()
}

func (s *ListImageDbsResponseData) SetDbList(v []*ListImageDbsResponseDataDbList) *ListImageDbsResponseData {
	s.DbList = v
	return s
}

type ListImageDbsResponseDataDbList struct {
	Name *string `json:"Name" xml:"Name" require:"true"`
}

func (s ListImageDbsResponseDataDbList) String() string {
	return tea.Prettify(s)
}

func (s ListImageDbsResponseDataDbList) GoString() string {
	return s.String()
}

func (s *ListImageDbsResponseDataDbList) SetName(v string) *ListImageDbsResponseDataDbList {
	s.Name = &v
	return s
}

type ListImagesRequest struct {
	DbName         *string `json:"DbName" xml:"DbName" require:"true"`
	Token          *string `json:"Token" xml:"Token"`
	Offset         *int    `json:"Offset" xml:"Offset"`
	Limit          *int    `json:"Limit" xml:"Limit"`
	Order          *string `json:"Order" xml:"Order"`
	EntityIdPrefix *string `json:"EntityIdPrefix" xml:"EntityIdPrefix"`
}

func (s ListImagesRequest) String() string {
	return tea.Prettify(s)
}

func (s ListImagesRequest) GoString() string {
	return s.String()
}

func (s *ListImagesRequest) SetDbName(v string) *ListImagesRequest {
	s.DbName = &v
	return s
}

func (s *ListImagesRequest) SetToken(v string) *ListImagesRequest {
	s.Token = &v
	return s
}

func (s *ListImagesRequest) SetOffset(v int) *ListImagesRequest {
	s.Offset = &v
	return s
}

func (s *ListImagesRequest) SetLimit(v int) *ListImagesRequest {
	s.Limit = &v
	return s
}

func (s *ListImagesRequest) SetOrder(v string) *ListImagesRequest {
	s.Order = &v
	return s
}

func (s *ListImagesRequest) SetEntityIdPrefix(v string) *ListImagesRequest {
	s.EntityIdPrefix = &v
	return s
}

type ListImagesResponse struct {
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ListImagesResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s ListImagesResponse) String() string {
	return tea.Prettify(s)
}

func (s ListImagesResponse) GoString() string {
	return s.String()
}

func (s *ListImagesResponse) SetRequestId(v string) *ListImagesResponse {
	s.RequestId = &v
	return s
}

func (s *ListImagesResponse) SetData(v *ListImagesResponseData) *ListImagesResponse {
	s.Data = v
	return s
}

type ListImagesResponseData struct {
	Token      *string                            `json:"Token" xml:"Token" require:"true"`
	TotalCount *int                               `json:"TotalCount" xml:"TotalCount" require:"true"`
	ImageList  []*ListImagesResponseDataImageList `json:"ImageList" xml:"ImageList" require:"true" type:"Repeated"`
}

func (s ListImagesResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListImagesResponseData) GoString() string {
	return s.String()
}

func (s *ListImagesResponseData) SetToken(v string) *ListImagesResponseData {
	s.Token = &v
	return s
}

func (s *ListImagesResponseData) SetTotalCount(v int) *ListImagesResponseData {
	s.TotalCount = &v
	return s
}

func (s *ListImagesResponseData) SetImageList(v []*ListImagesResponseDataImageList) *ListImagesResponseData {
	s.ImageList = v
	return s
}

type ListImagesResponseDataImageList struct {
	DataId    *string `json:"DataId" xml:"DataId" require:"true"`
	ExtraData *string `json:"ExtraData" xml:"ExtraData" require:"true"`
	EntityId  *string `json:"EntityId" xml:"EntityId" require:"true"`
	UpdatedAt *int64  `json:"UpdatedAt" xml:"UpdatedAt" require:"true"`
	CreatedAt *int64  `json:"CreatedAt" xml:"CreatedAt" require:"true"`
}

func (s ListImagesResponseDataImageList) String() string {
	return tea.Prettify(s)
}

func (s ListImagesResponseDataImageList) GoString() string {
	return s.String()
}

func (s *ListImagesResponseDataImageList) SetDataId(v string) *ListImagesResponseDataImageList {
	s.DataId = &v
	return s
}

func (s *ListImagesResponseDataImageList) SetExtraData(v string) *ListImagesResponseDataImageList {
	s.ExtraData = &v
	return s
}

func (s *ListImagesResponseDataImageList) SetEntityId(v string) *ListImagesResponseDataImageList {
	s.EntityId = &v
	return s
}

func (s *ListImagesResponseDataImageList) SetUpdatedAt(v int64) *ListImagesResponseDataImageList {
	s.UpdatedAt = &v
	return s
}

func (s *ListImagesResponseDataImageList) SetCreatedAt(v int64) *ListImagesResponseDataImageList {
	s.CreatedAt = &v
	return s
}

type SearchImageRequest struct {
	DbName   *string `json:"DbName" xml:"DbName" require:"true"`
	ImageUrl *string `json:"ImageUrl" xml:"ImageUrl" require:"true"`
	Limit    *int    `json:"Limit" xml:"Limit" require:"true"`
}

func (s SearchImageRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchImageRequest) GoString() string {
	return s.String()
}

func (s *SearchImageRequest) SetDbName(v string) *SearchImageRequest {
	s.DbName = &v
	return s
}

func (s *SearchImageRequest) SetImageUrl(v string) *SearchImageRequest {
	s.ImageUrl = &v
	return s
}

func (s *SearchImageRequest) SetLimit(v int) *SearchImageRequest {
	s.Limit = &v
	return s
}

type SearchImageResponse struct {
	RequestId *string                  `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *SearchImageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s SearchImageResponse) String() string {
	return tea.Prettify(s)
}

func (s SearchImageResponse) GoString() string {
	return s.String()
}

func (s *SearchImageResponse) SetRequestId(v string) *SearchImageResponse {
	s.RequestId = &v
	return s
}

func (s *SearchImageResponse) SetData(v *SearchImageResponseData) *SearchImageResponse {
	s.Data = v
	return s
}

type SearchImageResponseData struct {
	MatchList []*SearchImageResponseDataMatchList `json:"MatchList" xml:"MatchList" require:"true" type:"Repeated"`
}

func (s SearchImageResponseData) String() string {
	return tea.Prettify(s)
}

func (s SearchImageResponseData) GoString() string {
	return s.String()
}

func (s *SearchImageResponseData) SetMatchList(v []*SearchImageResponseDataMatchList) *SearchImageResponseData {
	s.MatchList = v
	return s
}

type SearchImageResponseDataMatchList struct {
	DataId    *string `json:"DataId" xml:"DataId" require:"true"`
	ExtraData *string `json:"ExtraData" xml:"ExtraData" require:"true"`
	EntityId  *string `json:"EntityId" xml:"EntityId" require:"true"`
}

func (s SearchImageResponseDataMatchList) String() string {
	return tea.Prettify(s)
}

func (s SearchImageResponseDataMatchList) GoString() string {
	return s.String()
}

func (s *SearchImageResponseDataMatchList) SetDataId(v string) *SearchImageResponseDataMatchList {
	s.DataId = &v
	return s
}

func (s *SearchImageResponseDataMatchList) SetExtraData(v string) *SearchImageResponseDataMatchList {
	s.ExtraData = &v
	return s
}

func (s *SearchImageResponseDataMatchList) SetEntityId(v string) *SearchImageResponseDataMatchList {
	s.EntityId = &v
	return s
}

type SearchImageAdvanceRequest struct {
	ImageUrlObject io.Reader `json:"ImageUrlObject" xml:"ImageUrlObject" require:"true"`
	DbName         *string   `json:"DbName" xml:"DbName" require:"true"`
	Limit          *int      `json:"Limit" xml:"Limit" require:"true"`
}

func (s SearchImageAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s SearchImageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SearchImageAdvanceRequest) SetImageUrlObject(v io.Reader) *SearchImageAdvanceRequest {
	s.ImageUrlObject = v
	return s
}

func (s *SearchImageAdvanceRequest) SetDbName(v string) *SearchImageAdvanceRequest {
	s.DbName = &v
	return s
}

func (s *SearchImageAdvanceRequest) SetLimit(v int) *SearchImageAdvanceRequest {
	s.Limit = &v
	return s
}

type AddImageRequest struct {
	DbName    *string `json:"DbName" xml:"DbName" require:"true"`
	ImageUrl  *string `json:"ImageUrl" xml:"ImageUrl" require:"true"`
	ExtraData *string `json:"ExtraData" xml:"ExtraData"`
	EntityId  *string `json:"EntityId" xml:"EntityId" require:"true"`
}

func (s AddImageRequest) String() string {
	return tea.Prettify(s)
}

func (s AddImageRequest) GoString() string {
	return s.String()
}

func (s *AddImageRequest) SetDbName(v string) *AddImageRequest {
	s.DbName = &v
	return s
}

func (s *AddImageRequest) SetImageUrl(v string) *AddImageRequest {
	s.ImageUrl = &v
	return s
}

func (s *AddImageRequest) SetExtraData(v string) *AddImageRequest {
	s.ExtraData = &v
	return s
}

func (s *AddImageRequest) SetEntityId(v string) *AddImageRequest {
	s.EntityId = &v
	return s
}

type AddImageResponse struct {
	RequestId *string               `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *AddImageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
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

func (s *AddImageResponse) SetData(v *AddImageResponseData) *AddImageResponse {
	s.Data = v
	return s
}

type AddImageResponseData struct {
	DataId *string `json:"DataId" xml:"DataId" require:"true"`
}

func (s AddImageResponseData) String() string {
	return tea.Prettify(s)
}

func (s AddImageResponseData) GoString() string {
	return s.String()
}

func (s *AddImageResponseData) SetDataId(v string) *AddImageResponseData {
	s.DataId = &v
	return s
}

type AddImageAdvanceRequest struct {
	ImageUrlObject io.Reader `json:"ImageUrlObject" xml:"ImageUrlObject" require:"true"`
	DbName         *string   `json:"DbName" xml:"DbName" require:"true"`
	ExtraData      *string   `json:"ExtraData" xml:"ExtraData"`
	EntityId       *string   `json:"EntityId" xml:"EntityId" require:"true"`
}

func (s AddImageAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s AddImageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *AddImageAdvanceRequest) SetImageUrlObject(v io.Reader) *AddImageAdvanceRequest {
	s.ImageUrlObject = v
	return s
}

func (s *AddImageAdvanceRequest) SetDbName(v string) *AddImageAdvanceRequest {
	s.DbName = &v
	return s
}

func (s *AddImageAdvanceRequest) SetExtraData(v string) *AddImageAdvanceRequest {
	s.ExtraData = &v
	return s
}

func (s *AddImageAdvanceRequest) SetEntityId(v string) *AddImageAdvanceRequest {
	s.EntityId = &v
	return s
}

type DeleteImageDbRequest struct {
	Name *string `json:"Name" xml:"Name" require:"true"`
}

func (s DeleteImageDbRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteImageDbRequest) GoString() string {
	return s.String()
}

func (s *DeleteImageDbRequest) SetName(v string) *DeleteImageDbRequest {
	s.Name = &v
	return s
}

type DeleteImageDbResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s DeleteImageDbResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteImageDbResponse) GoString() string {
	return s.String()
}

func (s *DeleteImageDbResponse) SetRequestId(v string) *DeleteImageDbResponse {
	s.RequestId = &v
	return s
}

type CreateImageDbRequest struct {
	Name *string `json:"Name" xml:"Name" require:"true"`
}

func (s CreateImageDbRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateImageDbRequest) GoString() string {
	return s.String()
}

func (s *CreateImageDbRequest) SetName(v string) *CreateImageDbRequest {
	s.Name = &v
	return s
}

type CreateImageDbResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
}

func (s CreateImageDbResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateImageDbResponse) GoString() string {
	return s.String()
}

func (s *CreateImageDbResponse) SetRequestId(v string) *CreateImageDbResponse {
	s.RequestId = &v
	return s
}

type DeleteImageRequest struct {
	DbName   *string `json:"DbName" xml:"DbName" require:"true"`
	EntityId *string `json:"EntityId" xml:"EntityId" require:"true"`
}

func (s DeleteImageRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteImageRequest) GoString() string {
	return s.String()
}

func (s *DeleteImageRequest) SetDbName(v string) *DeleteImageRequest {
	s.DbName = &v
	return s
}

func (s *DeleteImageRequest) SetEntityId(v string) *DeleteImageRequest {
	s.EntityId = &v
	return s
}

type DeleteImageResponse struct {
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
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
	client.EndpointRule = "regional"
	_err = client.CheckConfig(config)
	if _err != nil {
		return
	}
	client.Endpoint, _err = client.GetEndpoint(client.ProductId, client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) ListImageDbs(request *ListImageDbsRequest, runtime *util.RuntimeOptions) (_result *ListImageDbsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &ListImageDbsResponse{}
	_body, _err := client.DoRequest("ListImageDbs", "HTTPS", "GET", "2020-03-20", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListImages(request *ListImagesRequest, runtime *util.RuntimeOptions) (_result *ListImagesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &ListImagesResponse{}
	_body, _err := client.DoRequest("ListImages", "HTTPS", "GET", "2020-03-20", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchImage(request *SearchImageRequest, runtime *util.RuntimeOptions) (_result *SearchImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &SearchImageResponse{}
	_body, _err := client.DoRequest("SearchImage", "HTTPS", "GET", "2020-03-20", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchImageAdvance(request *SearchImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *SearchImageResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
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
		Product:  tea.String("imgsearch"),
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
	searchImagereq := &SearchImageRequest{}
	rpcutil.Convert(request, searchImagereq)
	searchImagereq.ImageUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	searchImageResp, _err := client.SearchImage(searchImagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = searchImageResp
	return _result, _err
}

func (client *Client) AddImage(request *AddImageRequest, runtime *util.RuntimeOptions) (_result *AddImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &AddImageResponse{}
	_body, _err := client.DoRequest("AddImage", "HTTPS", "GET", "2020-03-20", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AddImageAdvance(request *AddImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *AddImageResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
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
		Product:  tea.String("imgsearch"),
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
	addImagereq := &AddImageRequest{}
	rpcutil.Convert(request, addImagereq)
	addImagereq.ImageUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	addImageResp, _err := client.AddImage(addImagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = addImageResp
	return _result, _err
}

func (client *Client) DeleteImageDb(request *DeleteImageDbRequest, runtime *util.RuntimeOptions) (_result *DeleteImageDbResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &DeleteImageDbResponse{}
	_body, _err := client.DoRequest("DeleteImageDb", "HTTPS", "GET", "2020-03-20", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateImageDb(request *CreateImageDbRequest, runtime *util.RuntimeOptions) (_result *CreateImageDbResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &CreateImageDbResponse{}
	_body, _err := client.DoRequest("CreateImageDb", "HTTPS", "GET", "2020-03-20", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteImage(request *DeleteImageRequest, runtime *util.RuntimeOptions) (_result *DeleteImageResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &DeleteImageResponse{}
	_body, _err := client.DoRequest("DeleteImage", "HTTPS", "GET", "2020-03-20", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetEndpoint(productId string, regionId string, endpointRule string, network string, suffix string, endpointMap map[string]string, endpoint string) (_result string, _err error) {
	if !util.Empty(endpoint) {
		_result = endpoint
		return _result, _err
	}

	if !util.Empty(endpointMap[regionId]) {
		return _result, _err
	}

	_body, _err := endpointutil.GetEndpointRules(productId, regionId, endpointRule, network, suffix)
	if _err != nil {
		return "", _err
	}
	_result = _body
	return _result, _err
}
