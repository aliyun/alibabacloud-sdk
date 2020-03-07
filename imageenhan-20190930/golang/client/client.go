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

type IntelligentCompositionRequest struct {
	NumBoxes *int    `json:"NumBoxes" xml:"NumBoxes"`
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s IntelligentCompositionRequest) String() string {
	return tea.Prettify(s)
}

func (s IntelligentCompositionRequest) GoString() string {
	return s.String()
}

func (s *IntelligentCompositionRequest) SetNumBoxes(v int) *IntelligentCompositionRequest {
	s.NumBoxes = &v
	return s
}

func (s *IntelligentCompositionRequest) SetImageURL(v string) *IntelligentCompositionRequest {
	s.ImageURL = &v
	return s
}

type IntelligentCompositionResponse struct {
	RequestId *string                             `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *IntelligentCompositionResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s IntelligentCompositionResponse) String() string {
	return tea.Prettify(s)
}

func (s IntelligentCompositionResponse) GoString() string {
	return s.String()
}

func (s *IntelligentCompositionResponse) SetRequestId(v string) *IntelligentCompositionResponse {
	s.RequestId = &v
	return s
}

func (s *IntelligentCompositionResponse) SetData(v *IntelligentCompositionResponseData) *IntelligentCompositionResponse {
	s.Data = v
	return s
}

type IntelligentCompositionResponseData struct {
	Elements []*IntelligentCompositionResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
}

func (s IntelligentCompositionResponseData) String() string {
	return tea.Prettify(s)
}

func (s IntelligentCompositionResponseData) GoString() string {
	return s.String()
}

func (s *IntelligentCompositionResponseData) SetElements(v []*IntelligentCompositionResponseDataElements) *IntelligentCompositionResponseData {
	s.Elements = v
	return s
}

type IntelligentCompositionResponseDataElements struct {
	MinX  *int     `json:"MinX" xml:"MinX" require:"true"`
	MinY  *int     `json:"MinY" xml:"MinY" require:"true"`
	MaxX  *int     `json:"MaxX" xml:"MaxX" require:"true"`
	MaxY  *int     `json:"MaxY" xml:"MaxY" require:"true"`
	Score *float32 `json:"Score" xml:"Score" require:"true"`
}

func (s IntelligentCompositionResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s IntelligentCompositionResponseDataElements) GoString() string {
	return s.String()
}

func (s *IntelligentCompositionResponseDataElements) SetMinX(v int) *IntelligentCompositionResponseDataElements {
	s.MinX = &v
	return s
}

func (s *IntelligentCompositionResponseDataElements) SetMinY(v int) *IntelligentCompositionResponseDataElements {
	s.MinY = &v
	return s
}

func (s *IntelligentCompositionResponseDataElements) SetMaxX(v int) *IntelligentCompositionResponseDataElements {
	s.MaxX = &v
	return s
}

func (s *IntelligentCompositionResponseDataElements) SetMaxY(v int) *IntelligentCompositionResponseDataElements {
	s.MaxY = &v
	return s
}

func (s *IntelligentCompositionResponseDataElements) SetScore(v float32) *IntelligentCompositionResponseDataElements {
	s.Score = &v
	return s
}

type IntelligentCompositionAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	NumBoxes       *int      `json:"NumBoxes" xml:"NumBoxes"`
}

func (s IntelligentCompositionAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s IntelligentCompositionAdvanceRequest) GoString() string {
	return s.String()
}

func (s *IntelligentCompositionAdvanceRequest) SetImageURLObject(v io.Reader) *IntelligentCompositionAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *IntelligentCompositionAdvanceRequest) SetNumBoxes(v int) *IntelligentCompositionAdvanceRequest {
	s.NumBoxes = &v
	return s
}

type ChangeImageSizeRequest struct {
	Width  *int    `json:"Width" xml:"Width" require:"true"`
	Height *int    `json:"Height" xml:"Height" require:"true"`
	Url    *string `json:"Url" xml:"Url" require:"true"`
}

func (s ChangeImageSizeRequest) String() string {
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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

type ExtendImageStyleRequest struct {
	StyleUrl *string `json:"StyleUrl" xml:"StyleUrl" require:"true"`
	MajorUrl *string `json:"MajorUrl" xml:"MajorUrl" require:"true"`
}

func (s ExtendImageStyleRequest) String() string {
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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

type MakeSuperResolutionImageRequest struct {
	Url *string `json:"Url" xml:"Url" require:"true"`
}

func (s MakeSuperResolutionImageRequest) String() string {
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
}

func (s MakeSuperResolutionImageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *MakeSuperResolutionImageAdvanceRequest) SetUrlObject(v io.Reader) *MakeSuperResolutionImageAdvanceRequest {
	s.UrlObject = v
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	ImageList []*RecolorImageResponseDataImageList `json:"ImageList" xml:"ImageList" require:"true" type:"Repeated"`
}

func (s RecolorImageResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecolorImageResponseData) GoString() string {
	return s.String()
}

func (s *RecolorImageResponseData) SetImageList(v []*RecolorImageResponseDataImageList) *RecolorImageResponseData {
	s.ImageList = v
	return s
}

type RecolorImageResponseDataImageList struct {
	ImageList *string `json:"ImageList" xml:"ImageList" require:"true"`
}

func (s RecolorImageResponseDataImageList) String() string {
	return tea.Prettify(s)
}

func (s RecolorImageResponseDataImageList) GoString() string {
	return s.String()
}

func (s *RecolorImageResponseDataImageList) SetImageList(v string) *RecolorImageResponseDataImageList {
	s.ImageList = &v
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
			accessKeyId, _err := client.GetAccessKeyId()
			if _err != nil {
				return nil, _err
			}

			accessKeySecret, _err := client.GetAccessKeySecret()
			if _err != nil {
				return nil, _err
			}

			request_.Query = rpcutil.Query(tea.ToMap(map[string]interface{}{
				"Action":           action,
				"Format":           "json",
				"RegionId":         client.RegionId,
				"Timestamp":        rpcutil.GetTimestamp(),
				"Version":          "2019-09-30",
				"SignatureMethod":  "HMAC-SHA1",
				"SignatureVersion": "1.0",
				"SignatureNonce":   util.GetNonce(),
				"AccessKeyId":      accessKeyId,
			}, request))
			request_.Headers = map[string]string{
				"host":       rpcutil.GetHost("imageenhan", client.RegionId, client.Endpoint),
				"user-agent": client.GetUserAgent(),
			}
			request_.Query["Signature"] = rpcutil.GetSignature(request_, accessKeySecret)
			response_, _err := tea.DoRequest(request_, _runtime)
			if _err != nil {
				return nil, _err
			}
			obj, _err := util.ReadAsJSON(response_.Body)
			if _err != nil {
				return nil, _err
			}

			body := util.AssertAsMap(obj)
			if util.Is4xx(response_.StatusCode) || util.Is5xx(response_.StatusCode) {
				_err = tea.NewSDKError(map[string]interface{}{
					"message": body["Message"],
					"data":    body,
					"code":    body["Code"],
				})
				return nil, _err
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

func (client *Client) IntelligentComposition(request *IntelligentCompositionRequest, runtime *util.RuntimeOptions) (_result *IntelligentCompositionResponse, _err error) {
	_result = &IntelligentCompositionResponse{}
	_body, _err := client._request("IntelligentComposition", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) IntelligentCompositionAdvance(request *IntelligentCompositionAdvanceRequest, runtime *util.RuntimeOptions) (_result *IntelligentCompositionResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
	intelligentCompositionreq := &IntelligentCompositionRequest{}
	rpcutil.Convert(request, intelligentCompositionreq)
	intelligentCompositionreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	intelligentCompositionResp, _err := client.IntelligentComposition(intelligentCompositionreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = intelligentCompositionResp
	return _result, _err
}

func (client *Client) ChangeImageSize(request *ChangeImageSizeRequest, runtime *util.RuntimeOptions) (_result *ChangeImageSizeResponse, _err error) {
	_result = &ChangeImageSizeResponse{}
	_body, _err := client._request("ChangeImageSize", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ChangeImageSizeAdvance(request *ChangeImageSizeAdvanceRequest, runtime *util.RuntimeOptions) (_result *ChangeImageSizeResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
		Content:     request.UrlObject,
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
	changeImageSizereq := &ChangeImageSizeRequest{}
	rpcutil.Convert(request, changeImageSizereq)
	changeImageSizereq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	changeImageSizeResp, _err := client.ChangeImageSize(changeImageSizereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = changeImageSizeResp
	return _result, _err
}

func (client *Client) ExtendImageStyle(request *ExtendImageStyleRequest, runtime *util.RuntimeOptions) (_result *ExtendImageStyleResponse, _err error) {
	_result = &ExtendImageStyleResponse{}
	_body, _err := client._request("ExtendImageStyle", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) MakeSuperResolutionImage(request *MakeSuperResolutionImageRequest, runtime *util.RuntimeOptions) (_result *MakeSuperResolutionImageResponse, _err error) {
	_result = &MakeSuperResolutionImageResponse{}
	_body, _err := client._request("MakeSuperResolutionImage", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) MakeSuperResolutionImageAdvance(request *MakeSuperResolutionImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *MakeSuperResolutionImageResponse, _err error) {
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
		Product:  tea.String("imageenhan"),
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
		Content:     request.UrlObject,
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
	makeSuperResolutionImagereq := &MakeSuperResolutionImageRequest{}
	rpcutil.Convert(request, makeSuperResolutionImagereq)
	makeSuperResolutionImagereq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	makeSuperResolutionImageResp, _err := client.MakeSuperResolutionImage(makeSuperResolutionImagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = makeSuperResolutionImageResp
	return _result, _err
}

func (client *Client) RecolorImage(request *RecolorImageRequest, runtime *util.RuntimeOptions) (_result *RecolorImageResponse, _err error) {
	_result = &RecolorImageResponse{}
	_body, _err := client._request("RecolorImage", "HTTPS", "POST", tea.ToMap(request), runtime)
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
