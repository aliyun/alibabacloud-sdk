// This file is auto-generated, don't edit it. Thanks.
package client

import (
	"encoding/json"

	"github.com/alibabacloud-go/tea/tea"
	common "github.com/aliyun/alibabacloud-rpc-util-sdk/golang/common"
	"github.com/aliyun/rpc-client-go/service"
)

type Config struct {
	AccessKeyId          *string `json:"accessKeyId" xml:"accessKeyId" require:"true"`
	AccessKeySecret      *string `json:"accessKeySecret" xml:"accessKeySecret" require:"true"`
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
	OpenPlatformEndpoint *int    `json:"openPlatformEndpoint" xml:"openPlatformEndpoint" require:"true"`
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

func (s *Config) SetOpenPlatformEndpoint(v int) *Config {
	s.OpenPlatformEndpoint = &v
	return s
}

type AuthorizeFileUploadRequest struct {
	Product  *string `json:"Product" xml:"Product" require:"true"`
	RegionId *string `json:"RegionId" xml:"RegionId"`
}

func (s AuthorizeFileUploadRequest) String() string {
	return service.Prettify(s)
}

func (s AuthorizeFileUploadRequest) GoString() string {
	return s.String()
}

func (s *AuthorizeFileUploadRequest) SetProduct(v string) *AuthorizeFileUploadRequest {
	s.Product = &v
	return s
}

func (s *AuthorizeFileUploadRequest) SetRegionId(v string) *AuthorizeFileUploadRequest {
	s.RegionId = &v
	return s
}

type AuthorizeFileUploadResponse struct {
	RequestId     *string `json:"RequestId" xml:"RequestId" require:"true"`
	AccessKeyId   *string `json:"AccessKeyId" xml:"AccessKeyId" require:"true"`
	EncodedPolicy *string `json:"EncodedPolicy" xml:"EncodedPolicy" require:"true"`
	Signature     *string `json:"Signature" xml:"Signature" require:"true"`
	ObjectKey     *string `json:"ObjectKey" xml:"ObjectKey" require:"true"`
	Bucket        *string `json:"Bucket" xml:"Bucket" require:"true"`
	Endpoint      *string `json:"Endpoint" xml:"Endpoint" require:"true"`
	UseAccelerate *bool   `json:"UseAccelerate" xml:"UseAccelerate" require:"true"`
}

func (s AuthorizeFileUploadResponse) String() string {
	return service.Prettify(s)
}

func (s AuthorizeFileUploadResponse) GoString() string {
	return s.String()
}

func (s *AuthorizeFileUploadResponse) SetRequestId(v string) *AuthorizeFileUploadResponse {
	s.RequestId = &v
	return s
}

func (s *AuthorizeFileUploadResponse) SetAccessKeyId(v string) *AuthorizeFileUploadResponse {
	s.AccessKeyId = &v
	return s
}

func (s *AuthorizeFileUploadResponse) SetEncodedPolicy(v string) *AuthorizeFileUploadResponse {
	s.EncodedPolicy = &v
	return s
}

func (s *AuthorizeFileUploadResponse) SetSignature(v string) *AuthorizeFileUploadResponse {
	s.Signature = &v
	return s
}

func (s *AuthorizeFileUploadResponse) SetObjectKey(v string) *AuthorizeFileUploadResponse {
	s.ObjectKey = &v
	return s
}

func (s *AuthorizeFileUploadResponse) SetBucket(v string) *AuthorizeFileUploadResponse {
	s.Bucket = &v
	return s
}

func (s *AuthorizeFileUploadResponse) SetEndpoint(v string) *AuthorizeFileUploadResponse {
	s.Endpoint = &v
	return s
}

func (s *AuthorizeFileUploadResponse) SetUseAccelerate(v bool) *AuthorizeFileUploadResponse {
	s.UseAccelerate = &v
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

func (client *Client) AuthorizeFileUpload(request *AuthorizeFileUploadRequest, runtime *common.RuntimeObject) (_result *AuthorizeFileUploadResponse, _err error) {
	_err = tea.Validate(request)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Validate(runtime)
	if _err != nil {
		return nil, _err
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

	_resp := &AuthorizeFileUploadResponse{}
	for _retryTimes := 0; tea.AllowRetry(_runtime["retry"], _retryTimes); _retryTimes++ {
		if _retryTimes > 0 {
			_backoffTime := tea.GetBackoffTime(_runtime["backoff"], _retryTimes)
			if _backoffTime > 0 {
				tea.Sleep(_backoffTime)
			}
		}

		_resp, _err = func() (*AuthorizeFileUploadResponse, error) {
			request_ := tea.NewRequest()
			request_.Protocol = client.Protocol
			request_.Method = "GET"
			request_.Pathname = "/"
			request_.Query = common.Query(tea.ToMap(map[string]interface{}{
				"Action":           "AuthorizeFileUpload",
				"Format":           "json",
				"RegionId":         client.RegionId,
				"Timestamp":        common.GetTimestamp(),
				"Version":          "2019-12-19",
				"SignatureMethod":  "HMAC-SHA1",
				"SignatureVersion": "1.0",
				"SignatureNonce":   common.GetNonce(),
				"AccessKeyId":      client.GetAccessKeyId(),
			}, request))
			request_.Headers = map[string]string{
				"host":       common.GetHost("OpenPlatform", client.RegionId, client.Endpoint),
				"user-agent": common.GetUserAgent(client.UserAgent),
			}
			request_.Query["Signature"] = common.GetSignature(request_, client.GetAccessKeySecret())
			response_, _err := tea.DoRequest(request_, _runtime)
			if _err != nil {
				return nil, _err
			}
			body, _err := client.Json(response_)
			if _err != nil {
				return nil, _err
			}

			if client.HasError(body) {
				_err = tea.NewSDKError(map[string]interface{}{
					"message": body["Message"],
					"data":    body,
					"code":    body["Code"],
				})
				return nil, _err
			}

			_result = &AuthorizeFileUploadResponse{}
			_err = tea.Convert(body, &_result)
			return _result, _err
		}()
		if !tea.Retryable(_err) {
			break
		}
	}

	return _resp, _err
}
