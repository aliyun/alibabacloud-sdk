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

type RecognizeLogoRequest struct {
	Tasks []*RecognizeLogoRequestTasks `json:"Tasks" xml:"Tasks" require:"true" type:"Repeated"`
}

func (s RecognizeLogoRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLogoRequest) GoString() string {
	return s.String()
}

func (s *RecognizeLogoRequest) SetTasks(v []*RecognizeLogoRequestTasks) *RecognizeLogoRequest {
	s.Tasks = v
	return s
}

type RecognizeLogoRequestTasks struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeLogoRequestTasks) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLogoRequestTasks) GoString() string {
	return s.String()
}

func (s *RecognizeLogoRequestTasks) SetImageURL(v string) *RecognizeLogoRequestTasks {
	s.ImageURL = &v
	return s
}

type RecognizeLogoResponse struct {
	RequestId *string                    `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *RecognizeLogoResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s RecognizeLogoResponse) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLogoResponse) GoString() string {
	return s.String()
}

func (s *RecognizeLogoResponse) SetRequestId(v string) *RecognizeLogoResponse {
	s.RequestId = &v
	return s
}

func (s *RecognizeLogoResponse) SetData(v *RecognizeLogoResponseData) *RecognizeLogoResponse {
	s.Data = v
	return s
}

type RecognizeLogoResponseData struct {
	Elements []*RecognizeLogoResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
}

func (s RecognizeLogoResponseData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLogoResponseData) GoString() string {
	return s.String()
}

func (s *RecognizeLogoResponseData) SetElements(v []*RecognizeLogoResponseDataElements) *RecognizeLogoResponseData {
	s.Elements = v
	return s
}

type RecognizeLogoResponseDataElements struct {
	TaskId   *string                                     `json:"TaskId" xml:"TaskId" require:"true"`
	ImageURL *string                                     `json:"ImageURL" xml:"ImageURL" require:"true"`
	Results  []*RecognizeLogoResponseDataElementsResults `json:"Results" xml:"Results" require:"true" type:"Repeated"`
}

func (s RecognizeLogoResponseDataElements) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLogoResponseDataElements) GoString() string {
	return s.String()
}

func (s *RecognizeLogoResponseDataElements) SetTaskId(v string) *RecognizeLogoResponseDataElements {
	s.TaskId = &v
	return s
}

func (s *RecognizeLogoResponseDataElements) SetImageURL(v string) *RecognizeLogoResponseDataElements {
	s.ImageURL = &v
	return s
}

func (s *RecognizeLogoResponseDataElements) SetResults(v []*RecognizeLogoResponseDataElementsResults) *RecognizeLogoResponseDataElements {
	s.Results = v
	return s
}

type RecognizeLogoResponseDataElementsResults struct {
	Label      *string                                              `json:"Label" xml:"Label" require:"true"`
	Suggestion *string                                              `json:"Suggestion" xml:"Suggestion" require:"true"`
	Rate       *float32                                             `json:"Rate" xml:"Rate" require:"true"`
	LogosData  []*RecognizeLogoResponseDataElementsResultsLogosData `json:"LogosData" xml:"LogosData" require:"true" type:"Repeated"`
}

func (s RecognizeLogoResponseDataElementsResults) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLogoResponseDataElementsResults) GoString() string {
	return s.String()
}

func (s *RecognizeLogoResponseDataElementsResults) SetLabel(v string) *RecognizeLogoResponseDataElementsResults {
	s.Label = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResults) SetSuggestion(v string) *RecognizeLogoResponseDataElementsResults {
	s.Suggestion = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResults) SetRate(v float32) *RecognizeLogoResponseDataElementsResults {
	s.Rate = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResults) SetLogosData(v []*RecognizeLogoResponseDataElementsResultsLogosData) *RecognizeLogoResponseDataElementsResults {
	s.LogosData = v
	return s
}

type RecognizeLogoResponseDataElementsResultsLogosData struct {
	Name *string  `json:"Name" xml:"Name" require:"true"`
	Type *string  `json:"Type" xml:"Type" require:"true"`
	X    *float32 `json:"X" xml:"X" require:"true"`
	Y    *float32 `json:"Y" xml:"Y" require:"true"`
	H    *float32 `json:"H" xml:"H" require:"true"`
	W    *float32 `json:"W" xml:"W" require:"true"`
}

func (s RecognizeLogoResponseDataElementsResultsLogosData) String() string {
	return tea.Prettify(s)
}

func (s RecognizeLogoResponseDataElementsResultsLogosData) GoString() string {
	return s.String()
}

func (s *RecognizeLogoResponseDataElementsResultsLogosData) SetName(v string) *RecognizeLogoResponseDataElementsResultsLogosData {
	s.Name = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResultsLogosData) SetType(v string) *RecognizeLogoResponseDataElementsResultsLogosData {
	s.Type = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResultsLogosData) SetX(v float32) *RecognizeLogoResponseDataElementsResultsLogosData {
	s.X = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResultsLogosData) SetY(v float32) *RecognizeLogoResponseDataElementsResultsLogosData {
	s.Y = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResultsLogosData) SetH(v float32) *RecognizeLogoResponseDataElementsResultsLogosData {
	s.H = &v
	return s
}

func (s *RecognizeLogoResponseDataElementsResultsLogosData) SetW(v float32) *RecognizeLogoResponseDataElementsResultsLogosData {
	s.W = &v
	return s
}

type TaggingImageRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s TaggingImageRequest) String() string {
	return tea.Prettify(s)
}

func (s TaggingImageRequest) GoString() string {
	return s.String()
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
}

func (s TaggingImageAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s TaggingImageAdvanceRequest) GoString() string {
	return s.String()
}

func (s *TaggingImageAdvanceRequest) SetImageURLObject(v io.Reader) *TaggingImageAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeSceneRequest struct {
	ImageURL *string `json:"ImageURL" xml:"ImageURL" require:"true"`
}

func (s RecognizeSceneRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeSceneRequest) GoString() string {
	return s.String()
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
}

func (s RecognizeSceneAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeSceneAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeSceneAdvanceRequest) SetImageURLObject(v io.Reader) *RecognizeSceneAdvanceRequest {
	s.ImageURLObject = v
	return s
}

type RecognizeImageColorRequest struct {
	Url        *string `json:"Url" xml:"Url" require:"true"`
	ColorCount *int    `json:"ColorCount" xml:"ColorCount"`
}

func (s RecognizeImageColorRequest) String() string {
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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

type DetectImageElementsRequest struct {
	Url *string `json:"Url" xml:"Url" require:"true"`
}

func (s DetectImageElementsRequest) String() string {
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
}

func (s DetectImageElementsAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectImageElementsAdvanceRequest) SetUrlObject(v io.Reader) *DetectImageElementsAdvanceRequest {
	s.UrlObject = v
	return s
}

type RecognizeImageStyleRequest struct {
	Url *string `json:"Url" xml:"Url" require:"true"`
}

func (s RecognizeImageStyleRequest) String() string {
	return tea.Prettify(s)
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
	return tea.Prettify(s)
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
	return tea.Prettify(s)
}

func (s RecognizeImageStyleResponseData) GoString() string {
	return s.String()
}

type RecognizeImageStyleAdvanceRequest struct {
	UrlObject io.Reader `json:"UrlObject" xml:"UrlObject" require:"true"`
}

func (s RecognizeImageStyleAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s RecognizeImageStyleAdvanceRequest) GoString() string {
	return s.String()
}

func (s *RecognizeImageStyleAdvanceRequest) SetUrlObject(v io.Reader) *RecognizeImageStyleAdvanceRequest {
	s.UrlObject = v
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
				return make(map[string]interface{}), _err
			}

			accessKeySecret, _err := client.GetAccessKeySecret()
			if _err != nil {
				return make(map[string]interface{}), _err
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
				"host":       rpcutil.GetHost("imagerecog", client.RegionId, client.Endpoint),
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
			if util.Is4xx(response_.StatusCode) || util.Is5xx(response_.StatusCode) {
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

func (client *Client) RecognizeLogo(request *RecognizeLogoRequest, runtime *util.RuntimeOptions) (_result *RecognizeLogoResponse, _err error) {
	_result = &RecognizeLogoResponse{}
	_body, _err := client._request("RecognizeLogo", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TaggingImage(request *TaggingImageRequest, runtime *util.RuntimeOptions) (_result *TaggingImageResponse, _err error) {
	_result = &TaggingImageResponse{}
	_body, _err := client._request("TaggingImage", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TaggingImageAdvance(request *TaggingImageAdvanceRequest, runtime *util.RuntimeOptions) (_result *TaggingImageResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	taggingImagereq := &TaggingImageRequest{}
	rpcutil.Convert(request, taggingImagereq)
	taggingImagereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	taggingImageResp, _err := client.TaggingImage(taggingImagereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = taggingImageResp
	return _result, _err
}

func (client *Client) RecognizeScene(request *RecognizeSceneRequest, runtime *util.RuntimeOptions) (_result *RecognizeSceneResponse, _err error) {
	_result = &RecognizeSceneResponse{}
	_body, _err := client._request("RecognizeScene", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeSceneAdvance(request *RecognizeSceneAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeSceneResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	recognizeScenereq := &RecognizeSceneRequest{}
	rpcutil.Convert(request, recognizeScenereq)
	recognizeScenereq.ImageURL = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeSceneResp, _err := client.RecognizeScene(recognizeScenereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeSceneResp
	return _result, _err
}

func (client *Client) RecognizeImageColor(request *RecognizeImageColorRequest, runtime *util.RuntimeOptions) (_result *RecognizeImageColorResponse, _err error) {
	_result = &RecognizeImageColorResponse{}
	_body, _err := client._request("RecognizeImageColor", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeImageColorAdvance(request *RecognizeImageColorAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeImageColorResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	recognizeImageColorreq := &RecognizeImageColorRequest{}
	rpcutil.Convert(request, recognizeImageColorreq)
	recognizeImageColorreq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeImageColorResp, _err := client.RecognizeImageColor(recognizeImageColorreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeImageColorResp
	return _result, _err
}

func (client *Client) DetectImageElements(request *DetectImageElementsRequest, runtime *util.RuntimeOptions) (_result *DetectImageElementsResponse, _err error) {
	_result = &DetectImageElementsResponse{}
	_body, _err := client._request("DetectImageElements", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectImageElementsAdvance(request *DetectImageElementsAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectImageElementsResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	detectImageElementsreq := &DetectImageElementsRequest{}
	rpcutil.Convert(request, detectImageElementsreq)
	detectImageElementsreq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectImageElementsResp, _err := client.DetectImageElements(detectImageElementsreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = detectImageElementsResp
	return _result, _err
}

func (client *Client) RecognizeImageStyle(request *RecognizeImageStyleRequest, runtime *util.RuntimeOptions) (_result *RecognizeImageStyleResponse, _err error) {
	_result = &RecognizeImageStyleResponse{}
	_body, _err := client._request("RecognizeImageStyle", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) RecognizeImageStyleAdvance(request *RecognizeImageStyleAdvanceRequest, runtime *util.RuntimeOptions) (_result *RecognizeImageStyleResponse, _err error) {
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
		Product:  tea.String("imagerecog"),
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
	recognizeImageStylereq := &RecognizeImageStyleRequest{}
	rpcutil.Convert(request, recognizeImageStylereq)
	recognizeImageStylereq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	recognizeImageStyleResp, _err := client.RecognizeImageStyle(recognizeImageStylereq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = recognizeImageStyleResp
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
