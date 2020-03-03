// This file is auto-generated, don't edit it. Thanks.
package client

import (
	"github.com/alibabacloud-go/tea/tea"
	rpcutil "github.com/aliyun/alibabacloud-rpc-util-sdk/golang/service"
	credential "github.com/aliyun/credentials-go/credentials"
	util "github.com/aliyun/tea-util/golang/service"
)

type Config struct {
	AccessKeyId     *string `json:"accessKeyId" xml:"accessKeyId"`
	AccessKeySecret *string `json:"accessKeySecret" xml:"accessKeySecret"`
	Type            *string `json:"credential type" xml:"credential type"`
	SecurityToken   *string `json:"securityToken" xml:"securityToken"`
	Endpoint        *string `json:"endpoint" xml:"endpoint" require:"true"`
	Protocol        *string `json:"protocol" xml:"protocol"`
	RegionId        *string `json:"regionId" xml:"regionId" require:"true"`
	ReadTimeout     *int    `json:"read timeout" xml:"read timeout"`
	ConnectTimeout  *int    `json:"connect timeout" xml:"connect timeout"`
	HttpProxy       *string `json:"http proxy" xml:"http proxy"`
	HttpsProxy      *string `json:"https proxy" xml:"https proxy"`
	Socks5Proxy     *string `json:"socks5 proxy" xml:"socks5 proxy"`
	Socks5NetWork   *string `json:"socks5 NetWork" xml:"socks5 NetWork"`
	NoProxy         *string `json:"no proxy" xml:"no proxy"`
	UserAgent       *string `json:"userAgent" xml:"userAgent"`
	MaxIdleConns    *int    `json:"maxIdleConns" xml:"maxIdleConns"`
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

func (s *Config) SetSocks5Proxy(v string) *Config {
	s.Socks5Proxy = &v
	return s
}

func (s *Config) SetSocks5NetWork(v string) *Config {
	s.Socks5NetWork = &v
	return s
}

func (s *Config) SetNoProxy(v string) *Config {
	s.NoProxy = &v
	return s
}

func (s *Config) SetUserAgent(v string) *Config {
	s.UserAgent = &v
	return s
}

func (s *Config) SetMaxIdleConns(v int) *Config {
	s.MaxIdleConns = &v
	return s
}

type AuthorizeFileUploadRequest struct {
	Product  *string `json:"Product" xml:"Product" require:"true"`
	RegionId *string `json:"RegionId" xml:"RegionId"`
}

func (s AuthorizeFileUploadRequest) String() string {
	return tea.Prettify(s)
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
	AccessKeyId   *string `json:"AccessKeyId" xml:"AccessKeyId" require:"true"`
	Bucket        *string `json:"Bucket" xml:"Bucket" require:"true"`
	EncodedPolicy *string `json:"EncodedPolicy" xml:"EncodedPolicy" require:"true"`
	Endpoint      *string `json:"Endpoint" xml:"Endpoint" require:"true"`
	ObjectKey     *string `json:"ObjectKey" xml:"ObjectKey" require:"true"`
	RequestId     *string `json:"RequestId" xml:"RequestId" require:"true"`
	Signature     *string `json:"Signature" xml:"Signature" require:"true"`
	UseAccelerate *string `json:"UseAccelerate" xml:"UseAccelerate" require:"true"`
}

func (s AuthorizeFileUploadResponse) String() string {
	return tea.Prettify(s)
}

func (s AuthorizeFileUploadResponse) GoString() string {
	return s.String()
}

func (s *AuthorizeFileUploadResponse) SetAccessKeyId(v string) *AuthorizeFileUploadResponse {
	s.AccessKeyId = &v
	return s
}

func (s *AuthorizeFileUploadResponse) SetBucket(v string) *AuthorizeFileUploadResponse {
	s.Bucket = &v
	return s
}

func (s *AuthorizeFileUploadResponse) SetEncodedPolicy(v string) *AuthorizeFileUploadResponse {
	s.EncodedPolicy = &v
	return s
}

func (s *AuthorizeFileUploadResponse) SetEndpoint(v string) *AuthorizeFileUploadResponse {
	s.Endpoint = &v
	return s
}

func (s *AuthorizeFileUploadResponse) SetObjectKey(v string) *AuthorizeFileUploadResponse {
	s.ObjectKey = &v
	return s
}

func (s *AuthorizeFileUploadResponse) SetRequestId(v string) *AuthorizeFileUploadResponse {
	s.RequestId = &v
	return s
}

func (s *AuthorizeFileUploadResponse) SetSignature(v string) *AuthorizeFileUploadResponse {
	s.Signature = &v
	return s
}

func (s *AuthorizeFileUploadResponse) SetUseAccelerate(v string) *AuthorizeFileUploadResponse {
	s.UseAccelerate = &v
	return s
}

type Client struct {
	Endpoint       string
	RegionId       string
	Protocol       string
	UserAgent      string
	ReadTimeout    int
	ConnectTimeout int
	HttpProxy      string
	HttpsProxy     string
	NoProxy        string
	Socks5Proxy    string
	Socks5NetWork  string
	MaxIdleConns   int
	Credential     credential.Credential
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

	if util.Empty(tea.StringValue(config.Endpoint)) {
		_err = tea.NewSDKError(map[string]interface{}{
			"name":    "ParameterMissing",
			"message": "'config.endpoint' can not be empty",
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
			"maxAttempts": util.DefaultNumber(tea.IntValue(runtime.MaxAttempts), 2),
		},
		"backoff": map[string]interface{}{
			"policy": util.DefaultString(tea.StringValue(runtime.BackoffPolicy), "no"),
			"period": util.DefaultNumber(tea.IntValue(runtime.BackoffPeriod), 0),
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
			accessKeyId, _err := client.GetAccessKeyId()
			if _err != nil {
				return make(map[string]interface{}), _err
			}

			accessKeySecret, _err := client.GetAccessKeySecret()
			if _err != nil {
				return make(map[string]interface{}), _err
			}

			request_.Protocol = util.DefaultString(client.Protocol, protocol)
			request_.Method = method
			request_.Pathname = "/"
			request_.Query = rpcutil.Query(tea.ToMap(map[string]interface{}{
				"Action":           action,
				"Format":           "json",
				"RegionId":         client.RegionId,
				"Timestamp":        rpcutil.GetTimestamp(),
				"Version":          "2019-12-19",
				"SignatureMethod":  "HMAC-SHA1",
				"SignatureVersion": "1.0",
				"SignatureNonce":   util.GetNonce(),
				"AccessKeyId":      accessKeyId,
			}, request))
			request_.Headers = map[string]string{
				"host":       rpcutil.GetHost("OpenPlatform", client.RegionId, client.Endpoint),
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
			if rpcutil.HasError(body) {
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

func (client *Client) AuthorizeFileUpload(request *AuthorizeFileUploadRequest, runtime *util.RuntimeOptions) (_result *AuthorizeFileUploadResponse, _err error) {
	_result = &AuthorizeFileUploadResponse{}
	_body, _err := client._request("AuthorizeFileUpload", "HTTPS", "GET", tea.ToMap(request), runtime)
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
