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
	DbName       *string `json:"DbName" xml:"DbName" require:"true"`
	FromScrollId *string `json:"FromScrollId" xml:"FromScrollId"`
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

func (s *ListImagesRequest) SetFromScrollId(v string) *ListImagesRequest {
	s.FromScrollId = &v
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
	ScrollId  *string                            `json:"ScrollId" xml:"ScrollId" require:"true"`
	ImageList []*ListImagesResponseDataImageList `json:"ImageList" xml:"ImageList" require:"true" type:"Repeated"`
}

func (s ListImagesResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListImagesResponseData) GoString() string {
	return s.String()
}

func (s *ListImagesResponseData) SetScrollId(v string) *ListImagesResponseData {
	s.ScrollId = &v
	return s
}

func (s *ListImagesResponseData) SetImageList(v []*ListImagesResponseDataImageList) *ListImagesResponseData {
	s.ImageList = v
	return s
}

type ListImagesResponseDataImageList struct {
	DataId    *string `json:"DataId" xml:"DataId" require:"true"`
	ExtraData *string `json:"ExtraData" xml:"ExtraData" require:"true"`
	ImageUrl  *string `json:"ImageUrl" xml:"ImageUrl" require:"true"`
	EntityId  *string `json:"EntityId" xml:"EntityId" require:"true"`
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

func (s *ListImagesResponseDataImageList) SetImageUrl(v string) *ListImagesResponseDataImageList {
	s.ImageUrl = &v
	return s
}

func (s *ListImagesResponseDataImageList) SetEntityId(v string) *ListImagesResponseDataImageList {
	s.EntityId = &v
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
	ImageUrl  *string `json:"ImageUrl" xml:"ImageUrl" require:"true"`
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

func (s *SearchImageResponseDataMatchList) SetImageUrl(v string) *SearchImageResponseDataMatchList {
	s.ImageUrl = &v
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
	DataId    *string `json:"DataId" xml:"DataId" require:"true"`
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

func (s *AddImageRequest) SetDataId(v string) *AddImageRequest {
	s.DataId = &v
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
	RequestId *string `json:"RequestId" xml:"RequestId" require:"true"`
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

type AddImageAdvanceRequest struct {
	ImageUrlObject io.Reader `json:"ImageUrlObject" xml:"ImageUrlObject" require:"true"`
	DbName         *string   `json:"DbName" xml:"DbName" require:"true"`
	DataId         *string   `json:"DataId" xml:"DataId" require:"true"`
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

func (s *AddImageAdvanceRequest) SetDataId(v string) *AddImageAdvanceRequest {
	s.DataId = &v
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
	DbName *string `json:"DbName" xml:"DbName" require:"true"`
	DataId *string `json:"DataId" xml:"DataId" require:"true"`
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

func (s *DeleteImageRequest) SetDataId(v string) *DeleteImageRequest {
	s.DataId = &v
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
				"Version":        "2020-03-20",
				"SignatureNonce": util.GetNonce(),
			}, query))
			if !util.IsUnset(body) {
				tmp := util.AnyifyMapValue(rpcutil.Query(body))
				request_.Body = tea.ToReader(util.ToFormString(tmp))
			}

			request_.Headers = map[string]string{
				"host":       rpcutil.GetHost("imgsearch", client.RegionId, client.Endpoint),
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

func (client *Client) ListImageDbs(request *ListImageDbsRequest, runtime *util.RuntimeOptions) (_result *ListImageDbsResponse, _err error) {
	_result = &ListImageDbsResponse{}
	_body, _err := client._request("ListImageDbs", "HTTPS", "GET", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListImages(request *ListImagesRequest, runtime *util.RuntimeOptions) (_result *ListImagesResponse, _err error) {
	_result = &ListImagesResponse{}
	_body, _err := client._request("ListImages", "HTTPS", "GET", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SearchImage(request *SearchImageRequest, runtime *util.RuntimeOptions) (_result *SearchImageResponse, _err error) {
	_result = &SearchImageResponse{}
	_body, _err := client._request("SearchImage", "HTTPS", "GET", "AK", nil, tea.ToMap(request), runtime)
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
	_result = &AddImageResponse{}
	_body, _err := client._request("AddImage", "HTTPS", "GET", "AK", nil, tea.ToMap(request), runtime)
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
	_result = &DeleteImageDbResponse{}
	_body, _err := client._request("DeleteImageDb", "HTTPS", "GET", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateImageDb(request *CreateImageDbRequest, runtime *util.RuntimeOptions) (_result *CreateImageDbResponse, _err error) {
	_result = &CreateImageDbResponse{}
	_body, _err := client._request("CreateImageDb", "HTTPS", "GET", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteImage(request *DeleteImageRequest, runtime *util.RuntimeOptions) (_result *DeleteImageResponse, _err error) {
	_result = &DeleteImageResponse{}
	_body, _err := client._request("DeleteImage", "HTTPS", "GET", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
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
