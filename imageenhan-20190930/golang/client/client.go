// This file is auto-generated, don't edit it. Thanks.
package client

import (
	"encoding/json"
	"io"

	"github.com/alibabacloud-go/tea/tea"
	oss "github.com/aliyun/alibabacloud-oss-sdk/golang/client"
	common "github.com/aliyun/alibabacloud-rpc-util-sdk/golang/common"
	openplatform "github.com/aliyun/alibabacloud-sdk/openplatform-20191219/golang/client"
	"github.com/aliyun/rpc-client-go/service"
)

type Config struct {
	AccessKeyId          *string `json:"accessKeyId" xml:"accessKeyId"`
	AccessKeySecret      *string `json:"accessKeySecret" xml:"accessKeySecret"`
	Type                 *string `json:"type" xml:"type" require:"true"`
	SecurityToken        *string `json:"securityToken" xml:"securityToken" require:"true"`
	Endpoint             *string `json:"endpoint" xml:"endpoint" require:"true"`
	Protocol             *string `json:"protocol" xml:"protocol" require:"true"`
	RegionId             *string `json:"regionId" xml:"regionId" require:"true"`
	UserAgent            *string `json:"userAgent" xml:"userAgent" require:"true"`
	ReadTimeout          *int    `json:"readTimeout" xml:"readTimeout" require:"true"`
	ConnectTimeout       *int    `json:"connectTimeout" xml:"connectTimeout" require:"true"`
	LocalAddr            *string `json:"localAddr" xml:"localAddr" require:"true"`
	HttpProxy            *string `json:"httpProxy" xml:"httpProxy" require:"true"`
	HttpsProxy           *string `json:"httpsProxy" xml:"httpsProxy" require:"true"`
	NoProxy              *string `json:"noProxy" xml:"noProxy" require:"true"`
	Socks5Proxy          *string `json:"socks5Proxy" xml:"socks5Proxy" require:"true"`
	Socks5NetWork        *string `json:"socks5NetWork" xml:"socks5NetWork" require:"true"`
	MaxIdleConns         *int    `json:"maxIdleConns" xml:"maxIdleConns" require:"true"`
	EndpointType         *string `json:"endpointType" xml:"endpointType" require:"true"`
	OpenPlatformEndpoint *string `json:"openPlatformEndpoint" xml:"openPlatformEndpoint" require:"true"`
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

type RecolorImageRequest struct {
	Url           *string                             `json:"Url" xml:"Url" require:"true"`
	Mode          *string                             `json:"Mode" xml:"Mode"`
	RefUrl        *string                             `json:"RefUrl" xml:"RefUrl"`
	ColorCount    *int                                `json:"ColorCount" xml:"ColorCount"`
	ColorTemplate []*RecolorImageRequestColorTemplate `json:"ColorTemplate" xml:"ColorTemplate" type:"Repeated"`
}

func (s RecolorImageRequest) String() string {
	return service.Prettify(s)
}

func (s RecolorImageRequest) GoString() string {
	return s.String()
}

func (s *RecolorImageRequest) SetUrl(v string) *RecolorImageRequest {
	s.Url = &v
	return s
}

func (s *RecolorImageRequest) SetMode(v string) *RecolorImageRequest {
	s.Mode = &v
	return s
}

func (s *RecolorImageRequest) SetRefUrl(v string) *RecolorImageRequest {
	s.RefUrl = &v
	return s
}

func (s *RecolorImageRequest) SetColorCount(v int) *RecolorImageRequest {
	s.ColorCount = &v
	return s
}

func (s *RecolorImageRequest) SetColorTemplate(v []*RecolorImageRequestColorTemplate) *RecolorImageRequest {
	s.ColorTemplate = v
	return s
}

type RecolorImageRequestColorTemplate struct {
	Color *string `json:"Color" xml:"Color"`
}

func (s RecolorImageRequestColorTemplate) String() string {
	return service.Prettify(s)
}

func (s RecolorImageRequestColorTemplate) GoString() string {
	return s.String()
}

func (s *RecolorImageRequestColorTemplate) SetColor(v string) *RecolorImageRequestColorTemplate {
	s.Color = &v
	return s
}

type RecolorImageResponse struct {
	RequestId *string                   `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecolorImageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecolorImageResponse) String() string {
	return service.Prettify(s)
}

func (s RecolorImageResponse) GoString() string {
	return s.String()
}

func (s *RecolorImageResponse) SetRequestId(v string) *RecolorImageResponse {
	s.RequestId = &v
	return s
}

func (s *RecolorImageResponse) SetData(v *RecolorImageResponseData) *RecolorImageResponse {
	s.Data = v
	return s
}

type RecolorImageResponseData struct {
}

func (s RecolorImageResponseData) String() string {
	return service.Prettify(s)
}

func (s RecolorImageResponseData) GoString() string {
	return s.String()
}

type MakeSuperResolutionImageRequest struct {
	Url *string `json:"Url" xml:"Url" require:"true"`
}

func (s MakeSuperResolutionImageRequest) String() string {
	return service.Prettify(s)
}

func (s MakeSuperResolutionImageRequest) GoString() string {
	return s.String()
}

func (s *MakeSuperResolutionImageRequest) SetUrl(v string) *MakeSuperResolutionImageRequest {
	s.Url = &v
	return s
}

type MakeSuperResolutionImageResponse struct {
	RequestId *string                               `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *MakeSuperResolutionImageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s MakeSuperResolutionImageResponse) String() string {
	return service.Prettify(s)
}

func (s MakeSuperResolutionImageResponse) GoString() string {
	return s.String()
}

func (s *MakeSuperResolutionImageResponse) SetRequestId(v string) *MakeSuperResolutionImageResponse {
	s.RequestId = &v
	return s
}

func (s *MakeSuperResolutionImageResponse) SetData(v *MakeSuperResolutionImageResponseData) *MakeSuperResolutionImageResponse {
	s.Data = v
	return s
}

type MakeSuperResolutionImageResponseData struct {
	Url *string `json:"Url" xml:"Url" require:"true"`
}

func (s MakeSuperResolutionImageResponseData) String() string {
	return service.Prettify(s)
}

func (s MakeSuperResolutionImageResponseData) GoString() string {
	return s.String()
}

func (s *MakeSuperResolutionImageResponseData) SetUrl(v string) *MakeSuperResolutionImageResponseData {
	s.Url = &v
	return s
}

type MakeSuperResolutionImageAdvanceRequest struct {
	UrlObject io.Reader `json:"UrlObject" xml:"UrlObject" require:"true"`
}

func (s MakeSuperResolutionImageAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s MakeSuperResolutionImageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *MakeSuperResolutionImageAdvanceRequest) SetUrlObject(v io.Reader) *MakeSuperResolutionImageAdvanceRequest {
	s.UrlObject = v
	return s
}

type ExtendImageStyleRequest struct {
	StyleUrl *string `json:"StyleUrl" xml:"StyleUrl" require:"true"`
	MajorUrl *string `json:"MajorUrl" xml:"MajorUrl" require:"true"`
}

func (s ExtendImageStyleRequest) String() string {
	return service.Prettify(s)
}

func (s ExtendImageStyleRequest) GoString() string {
	return s.String()
}

func (s *ExtendImageStyleRequest) SetStyleUrl(v string) *ExtendImageStyleRequest {
	s.StyleUrl = &v
	return s
}

func (s *ExtendImageStyleRequest) SetMajorUrl(v string) *ExtendImageStyleRequest {
	s.MajorUrl = &v
	return s
}

type ExtendImageStyleResponse struct {
	RequestId *string                       `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ExtendImageStyleResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s ExtendImageStyleResponse) String() string {
	return service.Prettify(s)
}

func (s ExtendImageStyleResponse) GoString() string {
	return s.String()
}

func (s *ExtendImageStyleResponse) SetRequestId(v string) *ExtendImageStyleResponse {
	s.RequestId = &v
	return s
}

func (s *ExtendImageStyleResponse) SetData(v *ExtendImageStyleResponseData) *ExtendImageStyleResponse {
	s.Data = v
	return s
}

type ExtendImageStyleResponseData struct {
	Url      *string `json:"Url" xml:"Url" require:"true"`
	MajorUrl *string `json:"MajorUrl" xml:"MajorUrl" require:"true"`
}

func (s ExtendImageStyleResponseData) String() string {
	return service.Prettify(s)
}

func (s ExtendImageStyleResponseData) GoString() string {
	return s.String()
}

func (s *ExtendImageStyleResponseData) SetUrl(v string) *ExtendImageStyleResponseData {
	s.Url = &v
	return s
}

func (s *ExtendImageStyleResponseData) SetMajorUrl(v string) *ExtendImageStyleResponseData {
	s.MajorUrl = &v
	return s
}

type ChangeImageSizeRequest struct {
	Width  *int    `json:"Width" xml:"Width" require:"true"`
	Height *int    `json:"Height" xml:"Height" require:"true"`
	Url    *string `json:"Url" xml:"Url" require:"true"`
}

func (s ChangeImageSizeRequest) String() string {
	return service.Prettify(s)
}

func (s ChangeImageSizeRequest) GoString() string {
	return s.String()
}

func (s *ChangeImageSizeRequest) SetWidth(v int) *ChangeImageSizeRequest {
	s.Width = &v
	return s
}

func (s *ChangeImageSizeRequest) SetHeight(v int) *ChangeImageSizeRequest {
	s.Height = &v
	return s
}

func (s *ChangeImageSizeRequest) SetUrl(v string) *ChangeImageSizeRequest {
	s.Url = &v
	return s
}

type ChangeImageSizeResponse struct {
	RequestId *string                      `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ChangeImageSizeResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s ChangeImageSizeResponse) String() string {
	return service.Prettify(s)
}

func (s ChangeImageSizeResponse) GoString() string {
	return s.String()
}

func (s *ChangeImageSizeResponse) SetRequestId(v string) *ChangeImageSizeResponse {
	s.RequestId = &v
	return s
}

func (s *ChangeImageSizeResponse) SetData(v *ChangeImageSizeResponseData) *ChangeImageSizeResponse {
	s.Data = v
	return s
}

type ChangeImageSizeResponseData struct {
	Url *string `json:"Url" xml:"Url" require:"true"`
}

func (s ChangeImageSizeResponseData) String() string {
	return service.Prettify(s)
}

func (s ChangeImageSizeResponseData) GoString() string {
	return s.String()
}

func (s *ChangeImageSizeResponseData) SetUrl(v string) *ChangeImageSizeResponseData {
	s.Url = &v
	return s
}

type ChangeImageSizeAdvanceRequest struct {
	UrlObject io.Reader `json:"UrlObject" xml:"UrlObject" require:"true"`
	Width     *int      `json:"Width" xml:"Width" require:"true"`
	Height    *int      `json:"Height" xml:"Height" require:"true"`
}

func (s ChangeImageSizeAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s ChangeImageSizeAdvanceRequest) GoString() string {
	return s.String()
}

func (s *ChangeImageSizeAdvanceRequest) SetUrlObject(v io.Reader) *ChangeImageSizeAdvanceRequest {
	s.UrlObject = v
	return s
}

func (s *ChangeImageSizeAdvanceRequest) SetWidth(v int) *ChangeImageSizeAdvanceRequest {
	s.Width = &v
	return s
}

func (s *ChangeImageSizeAdvanceRequest) SetHeight(v int) *ChangeImageSizeAdvanceRequest {
	s.Height = &v
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
				"Version":          "2019-09-30",
				"SignatureMethod":  "HMAC-SHA1",
				"SignatureVersion": "1.0",
				"SignatureNonce":   common.GetNonce(),
				"AccessKeyId":      client.GetAccessKeyId(),
			}, request))
			request_.Headers = map[string]string{
				"host":       common.GetHost("imageenhan", client.RegionId, client.Endpoint),
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

func (client *Client) RecolorImage(request *RecolorImageRequest, runtime *common.RuntimeObject) (_result *RecolorImageResponse, _err error) {
	_result = &RecolorImageResponse{}
	_body, _err := client._request("RecolorImage", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) MakeSuperResolutionImage(request *MakeSuperResolutionImageRequest, runtime *common.RuntimeObject) (_result *MakeSuperResolutionImageResponse, _err error) {
	_result = &MakeSuperResolutionImageResponse{}
	_body, _err := client._request("MakeSuperResolutionImage", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) MakeSuperResolutionImageAdvance(request *MakeSuperResolutionImageAdvanceRequest, runtime *common.RuntimeObject) (_result *MakeSuperResolutionImageResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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

	str, _err := common.ReadAsString(request.UrlObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
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
	makeSuperResolutionImagereq := &MakeSuperResolutionImageRequest{}
	common.Convert(request, makeSuperResolutionImagereq)
	makeSuperResolutionImagereq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	makeSuperResolutionImageResp, _err := client.MakeSuperResolutionImage(makeSuperResolutionImagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return makeSuperResolutionImageResp, _err
}

func (client *Client) ExtendImageStyle(request *ExtendImageStyleRequest, runtime *common.RuntimeObject) (_result *ExtendImageStyleResponse, _err error) {
	_result = &ExtendImageStyleResponse{}
	_body, _err := client._request("ExtendImageStyle", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ChangeImageSize(request *ChangeImageSizeRequest, runtime *common.RuntimeObject) (_result *ChangeImageSizeResponse, _err error) {
	_result = &ChangeImageSizeResponse{}
	_body, _err := client._request("ChangeImageSize", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ChangeImageSizeAdvance(request *ChangeImageSizeAdvanceRequest, runtime *common.RuntimeObject) (_result *ChangeImageSizeResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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

	str, _err := common.ReadAsString(request.UrlObject)
	if _err != nil {
		return nil, _err
	}

	fileObj := &oss.PostObjectRequestHeaderFile{
		FileName:    authResponse.ObjectKey,
		Content:     tea.String(str),
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
	changeImageSizereq := &ChangeImageSizeRequest{}
	common.Convert(request, changeImageSizereq)
	changeImageSizereq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	changeImageSizeResp, _err := client.ChangeImageSize(changeImageSizereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return changeImageSizeResp, _err
}
