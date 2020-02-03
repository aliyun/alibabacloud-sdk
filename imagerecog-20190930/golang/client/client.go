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

type TaggingImageRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s TaggingImageRequest) String() string {
	return service.Prettify(s)
}

func (s TaggingImageRequest) GoString() string {
	return s.String()
}

func (s *TaggingImageRequest) SetImageType(v int) *TaggingImageRequest {
	s.ImageType = &v
	return s
}

func (s *TaggingImageRequest) SetImageURL(v string) *TaggingImageRequest {
	s.ImageURL = &v
	return s
}

type TaggingImageResponse struct {
	RequestId *string                   `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *TaggingImageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s TaggingImageResponse) String() string {
	return service.Prettify(s)
}

func (s TaggingImageResponse) GoString() string {
	return s.String()
}

func (s *TaggingImageResponse) SetRequestId(v string) *TaggingImageResponse {
	s.RequestId = &v
	return s
}

func (s *TaggingImageResponse) SetData(v *TaggingImageResponseData) *TaggingImageResponse {
	s.Data = v
	return s
}

type TaggingImageResponseData struct {
	Tags []*TaggingImageResponseDataTags `json:"Tags" xml:"Tags" require:"true" type:"Repeated"`
}

func (s TaggingImageResponseData) String() string {
	return service.Prettify(s)
}

func (s TaggingImageResponseData) GoString() string {
	return s.String()
}

func (s *TaggingImageResponseData) SetTags(v []*TaggingImageResponseDataTags) *TaggingImageResponseData {
	s.Tags = v
	return s
}

type TaggingImageResponseDataTags struct {
	Confidence *float32 `json:"Confidence" xml:"Confidence" require:"true"`
	Value      *string  `json:"Value" xml:"Value" require:"true"`
}

func (s TaggingImageResponseDataTags) String() string {
	return service.Prettify(s)
}

func (s TaggingImageResponseDataTags) GoString() string {
	return s.String()
}

func (s *TaggingImageResponseDataTags) SetConfidence(v float32) *TaggingImageResponseDataTags {
	s.Confidence = &v
	return s
}

func (s *TaggingImageResponseDataTags) SetValue(v string) *TaggingImageResponseDataTags {
	s.Value = &v
	return s
}

type TaggingImageAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
}

func (s TaggingImageAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s TaggingImageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *TaggingImageAdvanceRequest) SetImageURLObject(v io.Reader) *TaggingImageAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *TaggingImageAdvanceRequest) SetImageType(v int) *TaggingImageAdvanceRequest {
	s.ImageType = &v
	return s
}

type RecognizeSceneRequest struct {
	ImageType *int    `json:"ImageType" xml:"ImageType"`
	ImageURL  *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeSceneRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeSceneRequest) GoString() string {
	return s.String()
}

func (s *RecognizeSceneRequest) SetImageType(v int) *RecognizeSceneRequest {
	s.ImageType = &v
	return s
}

func (s *RecognizeSceneRequest) SetImageURL(v string) *RecognizeSceneRequest {
	s.ImageURL = &v
	return s
}

type RecognizeSceneResponse struct {
	RequestId *string                     `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeSceneResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeSceneResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeSceneResponse) GoString() string {
	return s.String()
}

func (s *RecognizeSceneResponse) SetRequestId(v string) *RecognizeSceneResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeSceneResponse) SetData(v *RecognizeSceneResponseData) *RecognizeSceneResponse {
	s.Data = v
	return s
}

type RecognizeSceneResponseData struct {
	Tags []*RecognizeSceneResponseDataTags `json:"Tags" xml:"Tags" require:"true" type:"Repeated"`
}

func (s RecognizeSceneResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeSceneResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeSceneResponseData) SetTags(v []*RecognizeSceneResponseDataTags) *RecognizeSceneResponseData {
	s.Tags = v
	return s
}

type RecognizeSceneResponseDataTags struct {
	Confidence *float32 `json:"Confidence" xml:"Confidence" require:"true"`
	Value      *string  `json:"Value" xml:"Value" require:"true"`
}

func (s RecognizeSceneResponseDataTags) String() string {
	return service.Prettify(s)
}

func (s RecognizeSceneResponseDataTags) GoString() string {
	return s.String()
}

func (s *RecognizeSceneResponseDataTags) SetConfidence(v float32) *RecognizeSceneResponseDataTags {
	s.Confidence = &v
	return s
}

func (s *RecognizeSceneResponseDataTags) SetValue(v string) *RecognizeSceneResponseDataTags {
	s.Value = &v
	return s
}

type RecognizeSceneAdvanceRequest struct {
	ImageURLObject io.Reader `json:"ImageURLObject" xml:"ImageURLObject" require:"true"`
	ImageType      *int      `json:"ImageType" xml:"ImageType"`
}

func (s RecognizeSceneAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeSceneAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeSceneAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeSceneAdvanceRequest {
	s.ImageURLObject = v
	return s
}

func (s *RecognizeSceneAdvanceRequest) SetImageType(v int) *RecognizeSceneAdvanceRequest {
	s.ImageType = &v
	return s
}

type RecognizeImageStyleRequest struct {
	Url *string `json:"Url" xml:"Url" require:"true"`
}

func (s RecognizeImageStyleRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeImageStyleRequest) GoString() string {
	return s.String()
}

func (s *RecognizeImageStyleRequest) SetUrl(v string) *RecognizeImageStyleRequest {
	s.Url = &v
	return s
}

type RecognizeImageStyleResponse struct {
	RequestId *string                          `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeImageStyleResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeImageStyleResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeImageStyleResponse) GoString() string {
	return s.String()
}

func (s *RecognizeImageStyleResponse) SetRequestId(v string) *RecognizeImageStyleResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeImageStyleResponse) SetData(v *RecognizeImageStyleResponseData) *RecognizeImageStyleResponse {
	s.Data = v
	return s
}

type RecognizeImageStyleResponseData struct {
}

func (s RecognizeImageStyleResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeImageStyleResponseData) GoString() string {
	return s.String()
}

type RecognizeImageStyleAdvanceRequest struct {
	UrlObject io.Reader `json:"UrlObject" xml:"UrlObject" require:"true"`
}

func (s RecognizeImageStyleAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeImageStyleAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeImageStyleAdvanceRequest) SetUrlObject(v io.Reader) *RecognizeImageStyleAdvanceRequest {
	s.UrlObject = v
	return s
}

type DetectImageElementsRequest struct {
	Url *string `json:"Url" xml:"Url" require:"true"`
}

func (s DetectImageElementsRequest) String() string {
	return service.Prettify(s)
}

func (s DetectImageElementsRequest) GoString() string {
	return s.String()
}

func (s *DetectImageElementsRequest) SetUrl(v string) *DetectImageElementsRequest {
	s.Url = &v
	return s
}

type DetectImageElementsResponse struct {
	RequestId *string                          `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DetectImageElementsResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s DetectImageElementsResponse) String() string {
	return service.Prettify(s)
}

func (s DetectImageElementsResponse) GoString() string {
	return s.String()
}

func (s *DetectImageElementsResponse) SetRequestId(v string) *DetectImageElementsResponse {
	s.RequestId = &v
	return s
}

func (s *DetectImageElementsResponse) SetData(v *DetectImageElementsResponseData) *DetectImageElementsResponse {
	s.Data = v
	return s
}

type DetectImageElementsResponseData struct {
	Elements []*DetectImageElementsResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
}

func (s DetectImageElementsResponseData) String() string {
	return service.Prettify(s)
}

func (s DetectImageElementsResponseData) GoString() string {
	return s.String()
}

func (s *DetectImageElementsResponseData) SetElements(v []*DetectImageElementsResponseDataElements) *DetectImageElementsResponseData {
	s.Elements = v
	return s
}

type DetectImageElementsResponseDataElements struct {
	Type   *string  `json:"Type" xml:"Type" require:"true"`
	X      *int     `json:"X" xml:"X" require:"true"`
	Y      *int     `json:"Y" xml:"Y" require:"true"`
	Width  *int     `json:"Width" xml:"Width" require:"true"`
	Height *int     `json:"Height" xml:"Height" require:"true"`
	Score  *float32 `json:"Score" xml:"Score" require:"true"`
}

func (s DetectImageElementsResponseDataElements) String() string {
	return service.Prettify(s)
}

func (s DetectImageElementsResponseDataElements) GoString() string {
	return s.String()
}

func (s *DetectImageElementsResponseDataElements) SetType(v string) *DetectImageElementsResponseDataElements {
	s.Type = &v
	return s
}

func (s *DetectImageElementsResponseDataElements) SetX(v int) *DetectImageElementsResponseDataElements {
	s.X = &v
	return s
}

func (s *DetectImageElementsResponseDataElements) SetY(v int) *DetectImageElementsResponseDataElements {
	s.Y = &v
	return s
}

func (s *DetectImageElementsResponseDataElements) SetWidth(v int) *DetectImageElementsResponseDataElements {
	s.Width = &v
	return s
}

func (s *DetectImageElementsResponseDataElements) SetHeight(v int) *DetectImageElementsResponseDataElements {
	s.Height = &v
	return s
}

func (s *DetectImageElementsResponseDataElements) SetScore(v float32) *DetectImageElementsResponseDataElements {
	s.Score = &v
	return s
}

type DetectImageElementsAdvanceRequest struct {
	UrlObject io.Reader `json:"UrlObject" xml:"UrlObject" require:"true"`
}

func (s DetectImageElementsAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s DetectImageElementsAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectImageElementsAdvanceRequest) SetUrlObject(v io.Reader) *DetectImageElementsAdvanceRequest {
	s.UrlObject = v
	return s
}

type RecognizeImageColorRequest struct {
	Url        *string `json:"Url" xml:"Url" require:"true"`
	ColorCount *int    `json:"ColorCount" xml:"ColorCount"`
}

func (s RecognizeImageColorRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeImageColorRequest) GoString() string {
	return s.String()
}

func (s *RecognizeImageColorRequest) SetUrl(v string) *RecognizeImageColorRequest {
	s.Url = &v
	return s
}

func (s *RecognizeImageColorRequest) SetColorCount(v int) *RecognizeImageColorRequest {
	s.ColorCount = &v
	return s
}

type RecognizeImageColorResponse struct {
	RequestId *string                          `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeImageColorResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeImageColorResponse) String() string {
	return service.Prettify(s)
}

func (s RecognizeImageColorResponse) GoString() string {
	return s.String()
}

func (s *RecognizeImageColorResponse) SetRequestId(v string) *RecognizeImageColorResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeImageColorResponse) SetData(v *RecognizeImageColorResponseData) *RecognizeImageColorResponse {
	s.Data = v
	return s
}

type RecognizeImageColorResponseData struct {
	ColorTemplateList []*RecognizeImageColorResponseDataColorTemplateList `json:"ColorTemplateList" xml:"ColorTemplateList" require:"true" type:"Repeated"`
}

func (s RecognizeImageColorResponseData) String() string {
	return service.Prettify(s)
}

func (s RecognizeImageColorResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeImageColorResponseData) SetColorTemplateList(v []*RecognizeImageColorResponseDataColorTemplateList) *RecognizeImageColorResponseData {
	s.ColorTemplateList = v
	return s
}

type RecognizeImageColorResponseDataColorTemplateList struct {
	Color      *string  `json:"Color" xml:"Color" require:"true"`
	Label      *string  `json:"Label" xml:"Label" require:"true"`
	Percentage *float32 `json:"Percentage" xml:"Percentage" require:"true"`
}

func (s RecognizeImageColorResponseDataColorTemplateList) String() string {
	return service.Prettify(s)
}

func (s RecognizeImageColorResponseDataColorTemplateList) GoString() string {
	return s.String()
}

func (s *RecognizeImageColorResponseDataColorTemplateList) SetColor(v string) *RecognizeImageColorResponseDataColorTemplateList {
	s.Color = &v
	return s
}

func (s *RecognizeImageColorResponseDataColorTemplateList) SetLabel(v string) *RecognizeImageColorResponseDataColorTemplateList {
	s.Label = &v
	return s
}

func (s *RecognizeImageColorResponseDataColorTemplateList) SetPercentage(v float32) *RecognizeImageColorResponseDataColorTemplateList {
	s.Percentage = &v
	return s
}

type RecognizeImageColorAdvanceRequest struct {
	UrlObject  io.Reader `json:"UrlObject" xml:"UrlObject" require:"true"`
	ColorCount *int      `json:"ColorCount" xml:"ColorCount"`
}

func (s RecognizeImageColorAdvanceRequest) String() string {
	return service.Prettify(s)
}

func (s RecognizeImageColorAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeImageColorAdvanceRequest) SetUrlObject(v io.Reader) *RecognizeImageColorAdvanceRequest {
	s.UrlObject = v
	return s
}

func (s *RecognizeImageColorAdvanceRequest) SetColorCount(v int) *RecognizeImageColorAdvanceRequest {
	s.ColorCount = &v
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
				"Version":          "2019-09-30",
				"SignatureMethod":  "HMAC-SHA1",
				"SignatureVersion": "1.0",
				"SignatureNonce":   common.GetNonce(),
				"AccessKeyId":      client.GetAccessKeyId(),
			}, request))
			request_.Headers = map[string]string{
				"host":       common.GetHost("imagerecog", client.RegionId, client.Endpoint),
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

func (client *Client) TaggingImage(request *TaggingImageRequest, runtime *common.RuntimeObject) (_result *TaggingImageResponse, _err error) {
	_result = &TaggingImageResponse{}
	_body, _err := client._request("TaggingImage", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TaggingImageAdvance(request *TaggingImageAdvanceRequest, runtime *common.RuntimeObject) (_result *TaggingImageResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	taggingImagereq := &TaggingImageRequest{}
	common.Convert(request, taggingImagereq)
	taggingImagereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	taggingImageResp, _err := client.TaggingImage(taggingImagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return taggingImageResp, _err
}

func (client *Client) RecognizeScene(request *RecognizeSceneRequest, runtime *common.RuntimeObject) (_result *RecognizeSceneResponse, _err error) {
	_result = &RecognizeSceneResponse{}
	_body, _err := client._request("RecognizeScene", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeSceneAdvance(request *RecognizeSceneAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeSceneResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	recognizeScenereq := &RecognizeSceneRequest{}
	common.Convert(request, recognizeScenereq)
	recognizeScenereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeSceneResp, _err := client.RecognizeScene(recognizeScenereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeSceneResp, _err
}

func (client *Client) RecognizeImageStyle(request *RecognizeImageStyleRequest, runtime *common.RuntimeObject) (_result *RecognizeImageStyleResponse, _err error) {
	_result = &RecognizeImageStyleResponse{}
	_body, _err := client._request("RecognizeImageStyle", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeImageStyleAdvance(request *RecognizeImageStyleAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeImageStyleResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	recognizeImageStylereq := &RecognizeImageStyleRequest{}
	common.Convert(request, recognizeImageStylereq)
	recognizeImageStylereq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeImageStyleResp, _err := client.RecognizeImageStyle(recognizeImageStylereq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeImageStyleResp, _err
}

func (client *Client) DetectImageElements(request *DetectImageElementsRequest, runtime *common.RuntimeObject) (_result *DetectImageElementsResponse, _err error) {
	_result = &DetectImageElementsResponse{}
	_body, _err := client._request("DetectImageElements", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectImageElementsAdvance(request *DetectImageElementsAdvanceRequest, runtime *common.RuntimeObject) (_result *DetectImageElementsResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	detectImageElementsreq := &DetectImageElementsRequest{}
	common.Convert(request, detectImageElementsreq)
	detectImageElementsreq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectImageElementsResp, _err := client.DetectImageElements(detectImageElementsreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return detectImageElementsResp, _err
}

func (client *Client) RecognizeImageColor(request *RecognizeImageColorRequest, runtime *common.RuntimeObject) (_result *RecognizeImageColorResponse, _err error) {
	_result = &RecognizeImageColorResponse{}
	_body, _err := client._request("RecognizeImageColor", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeImageColorAdvance(request *RecognizeImageColorAdvanceRequest, runtime *common.RuntimeObject) (_result *RecognizeImageColorResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	recognizeImageColorreq := &RecognizeImageColorRequest{}
	common.Convert(request, recognizeImageColorreq)
	recognizeImageColorreq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeImageColorResp, _err := client.RecognizeImageColor(recognizeImageColorreq, runtime)
	if _err != nil {
		return nil, _err
	}

	return recognizeImageColorResp, _err
}
