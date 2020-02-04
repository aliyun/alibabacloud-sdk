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

type DetectMainBodyRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s DetectMainBodyRequest) String() string {
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
	return service.Prettify(s)
}

func (s DetectMainBodyAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectMainBodyAdvanceRequest) SetImageURLObject(v io.Reader) *DetectMainBodyAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type DetectVehicleRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s DetectVehicleRequest) String() string {
	return service.Prettify(s)
}

func (s DetectVehicleRequest) GoString() string {
	return s.String()
}

func (s *DetectVehicleRequest) SetImageType(v int) *DetectVehicleRequest {
	s.ImageType = &v
	return s
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
	return service.Prettify(s)
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
	return service.Prettify(s)
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
}

func (s DetectVehicleResponseDataDetectObjectInfoList) String() string {
	return service.Prettify(s)
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

type DetectVehicleAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
}

func (s DetectVehicleAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s DetectVehicleAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectVehicleAdvanceRequest) SetImageURLObject(v io.Reader) *DetectVehicleAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *DetectVehicleAdvanceRequest) SetImageType(v int) *DetectVehicleAdvanceRequest {
	s.ImageType = &v
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
				"Version":          "2019-12-30",
				"SignatureMethod":  "HMAC-SHA1",
				"SignatureVersion": "1.0",
				"SignatureNonce":   common.GetNonce(),
				"AccessKeyId":      client.GetAccessKeyId(),
			}, request))
			request_.Headers = map[string]string{
				"host":       common.GetHost("objectdet", client.RegionId, client.Endpoint),
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

func (client *Client) DetectMainBody(request *DetectMainBodyRequest, runtime *common.RuntimeObject) (_result *DetectMainBodyResponse, _err error) {
	_result = &DetectMainBodyResponse{}
	_body, _err := client._request("DetectMainBody", "HTTPS", "GET", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectMainBodyAdvance(request *DetectMainBodyAdvanceRequest, runtime *common.RuntimeObject) (_result *DetectMainBodyResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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

	str, _err := common.ReadAsString(request.ImageURLObject)
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
	detectMainBodyreq := &DetectMainBodyRequest{}
	common.Convert(request, detectMainBodyreq)
	detectMainBodyreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectMainBodyResp, _err := client.DetectMainBody(detectMainBodyreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return detectMainBodyResp, _err
}

func (client *Client) DetectVehicle(request *DetectVehicleRequest, runtime *common.RuntimeObject) (_result *DetectVehicleResponse, _err error) {
	_result = &DetectVehicleResponse{}
	_body, _err := client._request("DetectVehicle", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectVehicleAdvance(request *DetectVehicleAdvanceRequest, runtime *common.RuntimeObject) (_result *DetectVehicleResponse, _err error) {
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
		Product:  tea.String("objectdet"),
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

	str, _err := common.ReadAsString(request.ImageURLObject)
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
	detectVehiclereq := &DetectVehicleRequest{}
	common.Convert(request, detectVehiclereq)
	detectVehiclereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectVehicleResp, _err := client.DetectVehicle(detectVehiclereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return detectVehicleResp, _err
}
