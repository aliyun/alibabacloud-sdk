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

type DetectMaskRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s DetectMaskRequest) String() string {
	return service.Prettify(s)
}

func (s DetectMaskRequest) GoString() string {
	return s.String()
}

func (s *DetectMaskRequest) SetImageURL(v string) *DetectMaskRequest {
	s.ImageURL = &v
	return s
}

type DetectMaskResponse struct {
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DetectMaskResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s DetectMaskResponse) String() string {
	return service.Prettify(s)
}

func (s DetectMaskResponse) GoString() string {
	return s.String()
}

func (s *DetectMaskResponse) SetRequestId(v string) *DetectMaskResponse {
	s.RequestId = &v
	return s
}

func (s *DetectMaskResponse) SetData(v *DetectMaskResponseData) *DetectMaskResponse {
	s.Data = v
	return s
}

type DetectMaskResponseData struct {
	Mask            *int     `json:"Mask" xml:"Mask" require:"true"`
	FaceProbability *float32 `json:"FaceProbability" xml:"FaceProbability" require:"true"`
}

func (s DetectMaskResponseData) String() string {
	return service.Prettify(s)
}

func (s DetectMaskResponseData) GoString() string {
	return s.String()
}

func (s *DetectMaskResponseData) SetMask(v int) *DetectMaskResponseData {
	s.Mask = &v
	return s
}

func (s *DetectMaskResponseData) SetFaceProbability(v float32) *DetectMaskResponseData {
	s.FaceProbability = &v
	return s
}

type DetectMaskAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
}

func (s DetectMaskAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s DetectMaskAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectMaskAdvanceRequest) SetImageURLObject(v io.Reader) *DetectMaskAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeFaceRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeFaceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeFaceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeFaceRequest) SetImageType(v int) *RecognizeFaceRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeFaceRequest) SetImageURL(v string) *RecognizeFaceRequest {
	s.ImageURL = &v
	return s
}

type RecognizeFaceResponse struct {
	RequestId *string                    `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeFaceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeFaceResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeFaceResponse) GoString() string {
	return s.String()
}

func (s *RecognizeFaceResponse) SetRequestId(v string) *RecognizeFaceResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeFaceResponse) SetData(v *RecognizeFaceResponseData) *RecognizeFaceResponse {
	s.Data = v
	return s
}

type RecognizeFaceResponseData struct {
	FaceCount          *int `json:"FaceCount" xml:"FaceCount" require:"true"`
	LandmarkCount      *int `json:"LandmarkCount" xml:"LandmarkCount" require:"true"`
	DenseFeatureLength *int `json:"DenseFeatureLength" xml:"DenseFeatureLength" require:"true"`
}

func (s RecognizeFaceResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeFaceResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeFaceResponseData) SetFaceCount(v int) *RecognizeFaceResponseData {
	s.FaceCount = &v
	return s
}

func (s *RecognizeFaceResponseData) SetLandmarkCount(v int) *RecognizeFaceResponseData {
	s.LandmarkCount = &v
	return s
}

func (s *RecognizeFaceResponseData) SetDenseFeatureLength(v int) *RecognizeFaceResponseData {
	s.DenseFeatureLength = &v
	return s
}

type RecognizeFaceAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
}

func (s RecognizeFaceAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeFaceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeFaceAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeFaceAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeFaceAdvanceRequest) SetImageType(v int) *RecognizeFaceAdvanceRequest {
	s.ImageType = &v
	return s
}

type CompareFaceRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURLA *string `json:"ImageURLA" xml:"ImageURLA" require:"true"`
	ImageURLB *string `json:"ImageURLB" xml:"ImageURLB" require:"true"`
}

func (s CompareFaceRequest) String() string {
	return service.Prettify(s)
}

func (s CompareFaceRequest) GoString() string {
	return s.String()
}

func (s *CompareFaceRequest) SetImageType(v int) *CompareFaceRequest {
	s.ImageType = &v
	return s
}

func (s *CompareFaceRequest) SetImageURLA(v string) *CompareFaceRequest {
	s.ImageURLA = &v
	return s
}

func (s *CompareFaceRequest) SetImageURLB(v string) *CompareFaceRequest {
	s.ImageURLB = &v
	return s
}

type CompareFaceResponse struct {
	RequestId *string                  `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *CompareFaceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s CompareFaceResponse) String() string {
	return service.Prettify(s)
}

func (s CompareFaceResponse) GoString() string {
	return s.String()
}

func (s *CompareFaceResponse) SetRequestId(v string) *CompareFaceResponse {
	s.RequestId = &v
	return s
}

func (s *CompareFaceResponse) SetData(v *CompareFaceResponseData) *CompareFaceResponse {
	s.Data = v
	return s
}

type CompareFaceResponseData struct {
	Confidence *float32 `json:"Confidence" xml:"Confidence" require:"true"`
}

func (s CompareFaceResponseData) String() string {
	return service.Prettify(s)
}

func (s CompareFaceResponseData) GoString() string {
	return s.String()
}

func (s *CompareFaceResponseData) SetConfidence(v float32) *CompareFaceResponseData {
	s.Confidence = &v
	return s
}

type DetectFaceRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s DetectFaceRequest) String() string {
	return service.Prettify(s)
}

func (s DetectFaceRequest) GoString() string {
	return s.String()
}

func (s *DetectFaceRequest) SetImageType(v int) *DetectFaceRequest {
	s.ImageType = &v
	return s
}

func (s *DetectFaceRequest) SetImageURL(v string) *DetectFaceRequest {
	s.ImageURL = &v
	return s
}

type DetectFaceResponse struct {
	RequestId *string                 `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DetectFaceResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s DetectFaceResponse) String() string {
	return service.Prettify(s)
}

func (s DetectFaceResponse) GoString() string {
	return s.String()
}

func (s *DetectFaceResponse) SetRequestId(v string) *DetectFaceResponse {
	s.RequestId = &v
	return s
}

func (s *DetectFaceResponse) SetData(v *DetectFaceResponseData) *DetectFaceResponse {
	s.Data = v
	return s
}

type DetectFaceResponseData struct {
	FaceCount     *int `json:"FaceCount" xml:"FaceCount" require:"true"`
	LandmarkCount *int `json:"LandmarkCount" xml:"LandmarkCount" require:"true"`
}

func (s DetectFaceResponseData) String() string {
	return service.Prettify(s)
}

func (s DetectFaceResponseData) GoString() string {
	return s.String()
}

func (s *DetectFaceResponseData) SetFaceCount(v int) *DetectFaceResponseData {
	s.FaceCount = &v
	return s
}

func (s *DetectFaceResponseData) SetLandmarkCount(v int) *DetectFaceResponseData {
	s.LandmarkCount = &v
	return s
}

type DetectFaceAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
}

func (s DetectFaceAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s DetectFaceAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectFaceAdvanceRequest) SetImageURLObject(v io.Reader) *DetectFaceAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *DetectFaceAdvanceRequest) SetImageType(v int) *DetectFaceAdvanceRequest {
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
				"Date":             common.GetTimestamp(),
				"Version":          "2019-12-30",
				"SignatureMethod":  "HMAC-SHA1",
				"SignatureVersion": "1.0",
				"SignatureNonce":   common.GetNonce(),
				"AccessKeyId":      client.GetAccessKeyId(),
			}, request))
			request_.Headers = map[string]string{
				"host":       common.GetHost("facebody", client.RegionId, client.Endpoint),
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

func (client *Client) DetectMask(request *DetectMaskRequest, runtime *common.RuntimeObject) (_result *DetectMaskResponse, _err error) {
	_result = &DetectMaskResponse{}
	_body, _err := client._request("DetectMask", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectMaskAdvance(request *DetectMaskAdvanceRequest, runtime *common.RuntimeObject) (_result *DetectMaskResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	detectMaskreq := &DetectMaskRequest{}
	common.Convert(request, detectMaskreq)
	detectMaskreq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectMaskResp, _err := client.DetectMask(detectMaskreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return detectMaskResp, _err
}

func (client *Client) RecognizeFace(request *RecognizeFaceRequest, runtime *common.RuntimeObject) (_result *RecognizeFaceResponse, _err error) {
	_result = &RecognizeFaceResponse{}
	_body, _err := client._request("RecognizeFace", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeFaceAdvance(request *RecognizeFaceAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeFaceResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	recognizeFacereq := &RecognizeFaceRequest{}
	common.Convert(request, recognizeFacereq)
	recognizeFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeFaceResp, _err := client.RecognizeFace(recognizeFacereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeFaceResp, _err
}

func (client *Client) CompareFace(request *CompareFaceRequest, runtime *common.RuntimeObject) (_result *CompareFaceResponse, _err error) {
	_result = &CompareFaceResponse{}
	_body, _err := client._request("CompareFace", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectFace(request *DetectFaceRequest, runtime *common.RuntimeObject) (_result *DetectFaceResponse, _err error) {
	_result = &DetectFaceResponse{}
	_body, _err := client._request("DetectFace", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectFaceAdvance(request *DetectFaceAdvanceRequest, runtime *common.RuntimeObject) (_result *DetectFaceResponse, _err error) {
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
		Product:  tea.String("facebody"),
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
	detectFacereq := &DetectFaceRequest{}
	common.Convert(request, detectFacereq)
	detectFacereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectFaceResp, _err := client.DetectFace(detectFacereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return detectFaceResp, _err
}
