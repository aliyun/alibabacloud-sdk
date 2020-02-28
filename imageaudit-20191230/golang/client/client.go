// This file is auto-generated, don't edit it. Thanks.
package client

import (
	"encoding/json"
	"io"

	"github.com/alibabacloud-go/tea/tea"
	oss "github.com/aliyun/alibabacloud-oss-sdk/golang/client"
	common "github.com/aliyun/alibabacloud-rpc-util-sdk/golang/service"
	openplatform "github.com/aliyun/alibabacloud-sdk/openplatform-20191219/golang/client"
	"github.com/aliyun/rpc-client-go/service"
)

type Config struct {
	AccessKeyId          *string `json:"accessKeyId" xml:"accessKeyId" require:"true"`
	AccessKeySecret      *string `json:"accessKeySecret" xml:"accessKeySecret"`
	Type                 *string `json:"type" xml:"type"`
	SecurityToken        *string `json:"securityToken" xml:"securityToken"`
	Endpoint             *string `json:"endpoint" xml:"endpoint" require:"true"`
	Protocol             *string `json:"protocol" xml:"protocol"`
	RegionId             *string `json:"regionId" xml:"regionId" require:"true"`
	UserAgent            *string `json:"userAgent" xml:"userAgent"`
	ReadTimeout          *int    `json:"readTimeout" xml:"readTimeout"`
	ConnectTimeout       *int    `json:"connectTimeout" xml:"connectTimeout"`
	LocalAddr            *string `json:"localAddr" xml:"localAddr"`
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

type ScanTextRequest struct {
	Tasks  []*ScanTextRequestTasks  `json:"Tasks" xml:"Tasks" require:"true" type:"Repeated"`
	Labels []*ScanTextRequestLabels `json:"Labels" xml:"Labels" require:"true" type:"Repeated"`
}

func (s ScanTextRequest) String() string {
	return service.Prettify(s)
}

func (s ScanTextRequest) GoString() string {
	return s.String()
}

func (s *ScanTextRequest) SetTasks(v []*ScanTextRequestTasks) *ScanTextRequest {
	s.Tasks = v
	return s
}

func (s *ScanTextRequest) SetLabels(v []*ScanTextRequestLabels) *ScanTextRequest {
	s.Labels = v
	return s
}

type ScanTextRequestTasks struct {
	Content *string `json:"Content" xml:"Content" require:"true"`
}

func (s ScanTextRequestTasks) String() string {
	return service.Prettify(s)
}

func (s ScanTextRequestTasks) GoString() string {
	return s.String()
}

func (s *ScanTextRequestTasks) SetContent(v string) *ScanTextRequestTasks {
	s.Content = &v
	return s
}

type ScanTextRequestLabels struct {
	Label *string `json:"Label" xml:"Label" require:"true"`
}

func (s ScanTextRequestLabels) String() string {
	return service.Prettify(s)
}

func (s ScanTextRequestLabels) GoString() string {
	return s.String()
}

func (s *ScanTextRequestLabels) SetLabel(v string) *ScanTextRequestLabels {
	s.Label = &v
	return s
}

type ScanTextResponse struct {
	RequestId *string               `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ScanTextResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s ScanTextResponse) String() string {
	return service.Prettify(s)
}

func (s ScanTextResponse) GoString() string {
	return s.String()
}

func (s *ScanTextResponse) SetRequestId(v string) *ScanTextResponse {
	s.RequestId = &v
	return s
}

func (s *ScanTextResponse) SetData(v *ScanTextResponseData) *ScanTextResponse {
	s.Data = v
	return s
}

type ScanTextResponseData struct {
	Elements []*ScanTextResponseDataElements `json:"Elements" xml:"Elements" require:"true" type:"Repeated"`
}

func (s ScanTextResponseData) String() string {
	return service.Prettify(s)
}

func (s ScanTextResponseData) GoString() string {
	return s.String()
}

func (s *ScanTextResponseData) SetElements(v []*ScanTextResponseDataElements) *ScanTextResponseData {
	s.Elements = v
	return s
}

type ScanTextResponseDataElements struct {
	TaskId  *string                                `json:"TaskId" xml:"TaskId" require:"true"`
	Results []*ScanTextResponseDataElementsResults `json:"Results" xml:"Results" require:"true" type:"Repeated"`
}

func (s ScanTextResponseDataElements) String() string {
	return service.Prettify(s)
}

func (s ScanTextResponseDataElements) GoString() string {
	return s.String()
}

func (s *ScanTextResponseDataElements) SetTaskId(v string) *ScanTextResponseDataElements {
	s.TaskId = &v
	return s
}

func (s *ScanTextResponseDataElements) SetResults(v []*ScanTextResponseDataElementsResults) *ScanTextResponseDataElements {
	s.Results = v
	return s
}

type ScanTextResponseDataElementsResults struct {
	Label      *string                                       `json:"Label" xml:"Label" require:"true"`
	Suggestion *string                                       `json:"Suggestion" xml:"Suggestion" require:"true"`
	Rate       *float32                                      `json:"Rate" xml:"Rate" require:"true"`
	Details    []*ScanTextResponseDataElementsResultsDetails `json:"Details" xml:"Details" require:"true" type:"Repeated"`
}

func (s ScanTextResponseDataElementsResults) String() string {
	return service.Prettify(s)
}

func (s ScanTextResponseDataElementsResults) GoString() string {
	return s.String()
}

func (s *ScanTextResponseDataElementsResults) SetLabel(v string) *ScanTextResponseDataElementsResults {
	s.Label = &v
	return s
}

func (s *ScanTextResponseDataElementsResults) SetSuggestion(v string) *ScanTextResponseDataElementsResults {
	s.Suggestion = &v
	return s
}

func (s *ScanTextResponseDataElementsResults) SetRate(v float32) *ScanTextResponseDataElementsResults {
	s.Rate = &v
	return s
}

func (s *ScanTextResponseDataElementsResults) SetDetails(v []*ScanTextResponseDataElementsResultsDetails) *ScanTextResponseDataElementsResults {
	s.Details = v
	return s
}

type ScanTextResponseDataElementsResultsDetails struct {
	Label     *string                                                `json:"Label" xml:"Label" require:"true"`
	HintWords []*ScanTextResponseDataElementsResultsDetailsHintWords `json:"HintWords" xml:"HintWords" require:"true" type:"Repeated"`
}

func (s ScanTextResponseDataElementsResultsDetails) String() string {
	return service.Prettify(s)
}

func (s ScanTextResponseDataElementsResultsDetails) GoString() string {
	return s.String()
}

func (s *ScanTextResponseDataElementsResultsDetails) SetLabel(v string) *ScanTextResponseDataElementsResultsDetails {
	s.Label = &v
	return s
}

func (s *ScanTextResponseDataElementsResultsDetails) SetHintWords(v []*ScanTextResponseDataElementsResultsDetailsHintWords) *ScanTextResponseDataElementsResultsDetails {
	s.HintWords = v
	return s
}

type ScanTextResponseDataElementsResultsDetailsHintWords struct {
	Context *string `json:"Context" xml:"Context" require:"true"`
}

func (s ScanTextResponseDataElementsResultsDetailsHintWords) String() string {
	return service.Prettify(s)
}

func (s ScanTextResponseDataElementsResultsDetailsHintWords) GoString() string {
	return s.String()
}

func (s *ScanTextResponseDataElementsResultsDetailsHintWords) SetContext(v string) *ScanTextResponseDataElementsResultsDetailsHintWords {
	s.Context = &v
	return s
}

type ScanImageRequest struct {
	Task  []*ScanImageRequestTask `json:"Task" xml:"Task" require:"true" type:"Repeated"`
	Scene []*string               `json:"Scene" xml:"Scene" require:"true" type:"Repeated"`
}

func (s ScanImageRequest) String() string {
	return service.Prettify(s)
}

func (s ScanImageRequest) GoString() string {
	return s.String()
}

func (s *ScanImageRequest) SetTask(v []*ScanImageRequestTask) *ScanImageRequest {
	s.Task = v
	return s
}

func (s *ScanImageRequest) SetScene(v []*string) *ScanImageRequest {
	s.Scene = v
	return s
}

type ScanImageRequestTask struct {
	DataId               *string `json:"DataId" xml:"DataId"`
	ImageURL             *string `json:"ImageURL" xml:"ImageURL" require:"true"`
	ImageTimeMillisecond *int64  `json:"ImageTimeMillisecond" xml:"ImageTimeMillisecond"`
	Interval             *int    `json:"Interval" xml:"Interval"`
	MaxFrames            *int    `json:"MaxFrames" xml:"MaxFrames"`
}

func (s ScanImageRequestTask) String() string {
	return service.Prettify(s)
}

func (s ScanImageRequestTask) GoString() string {
	return s.String()
}

func (s *ScanImageRequestTask) SetDataId(v string) *ScanImageRequestTask {
	s.DataId = &v
	return s
}

func (s *ScanImageRequestTask) SetImageURL(v string) *ScanImageRequestTask {
	s.ImageURL = &v
	return s
}

func (s *ScanImageRequestTask) SetImageTimeMillisecond(v int64) *ScanImageRequestTask {
	s.ImageTimeMillisecond = &v
	return s
}

func (s *ScanImageRequestTask) SetInterval(v int) *ScanImageRequestTask {
	s.Interval = &v
	return s
}

func (s *ScanImageRequestTask) SetMaxFrames(v int) *ScanImageRequestTask {
	s.MaxFrames = &v
	return s
}

type ScanImageResponse struct {
	RequestId *string                `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *ScanImageResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s ScanImageResponse) String() string {
	return service.Prettify(s)
}

func (s ScanImageResponse) GoString() string {
	return s.String()
}

func (s *ScanImageResponse) SetRequestId(v string) *ScanImageResponse {
	s.RequestId = &v
	return s
}

func (s *ScanImageResponse) SetData(v *ScanImageResponseData) *ScanImageResponse {
	s.Data = v
	return s
}

type ScanImageResponseData struct {
	Results []*ScanImageResponseDataResults `json:"Results" xml:"Results" require:"true" type:"Repeated"`
}

func (s ScanImageResponseData) String() string {
	return service.Prettify(s)
}

func (s ScanImageResponseData) GoString() string {
	return s.String()
}

func (s *ScanImageResponseData) SetResults(v []*ScanImageResponseDataResults) *ScanImageResponseData {
	s.Results = v
	return s
}

type ScanImageResponseDataResults struct {
	DataId     *string                                   `json:"DataId" xml:"DataId" require:"true"`
	TaskId     *string                                   `json:"TaskId" xml:"TaskId" require:"true"`
	ImageURL   *string                                   `json:"ImageURL" xml:"ImageURL" require:"true"`
	SubResults []*ScanImageResponseDataResultsSubResults `json:"SubResults" xml:"SubResults" require:"true" type:"Repeated"`
}

func (s ScanImageResponseDataResults) String() string {
	return service.Prettify(s)
}

func (s ScanImageResponseDataResults) GoString() string {
	return s.String()
}

func (s *ScanImageResponseDataResults) SetDataId(v string) *ScanImageResponseDataResults {
	s.DataId = &v
	return s
}

func (s *ScanImageResponseDataResults) SetTaskId(v string) *ScanImageResponseDataResults {
	s.TaskId = &v
	return s
}

func (s *ScanImageResponseDataResults) SetImageURL(v string) *ScanImageResponseDataResults {
	s.ImageURL = &v
	return s
}

func (s *ScanImageResponseDataResults) SetSubResults(v []*ScanImageResponseDataResultsSubResults) *ScanImageResponseDataResults {
	s.SubResults = v
	return s
}

type ScanImageResponseDataResultsSubResults struct {
	Label               *string                                                      `json:"Label" xml:"Label" require:"true"`
	Suggestion          *string                                                      `json:"Suggestion" xml:"Suggestion" require:"true"`
	Rate                *float32                                                     `json:"Rate" xml:"Rate" require:"true"`
	Scene               *string                                                      `json:"Scene" xml:"Scene" require:"true"`
	Frames              []*ScanImageResponseDataResultsSubResultsFrames              `json:"Frames" xml:"Frames" require:"true" type:"Repeated"`
	HintWordsInfoList   []*ScanImageResponseDataResultsSubResultsHintWordsInfoList   `json:"HintWordsInfoList" xml:"HintWordsInfoList" require:"true" type:"Repeated"`
	ProgramCodeDataList []*ScanImageResponseDataResultsSubResultsProgramCodeDataList `json:"ProgramCodeDataList" xml:"ProgramCodeDataList" require:"true" type:"Repeated"`
	LogoDataList        []*ScanImageResponseDataResultsSubResultsLogoDataList        `json:"LogoDataList" xml:"LogoDataList" require:"true" type:"Repeated"`
	SfaceDataList       []*ScanImageResponseDataResultsSubResultsSfaceDataList       `json:"SfaceDataList" xml:"SfaceDataList" require:"true" type:"Repeated"`
}

func (s ScanImageResponseDataResultsSubResults) String() string {
	return service.Prettify(s)
}

func (s ScanImageResponseDataResultsSubResults) GoString() string {
	return s.String()
}

func (s *ScanImageResponseDataResultsSubResults) SetLabel(v string) *ScanImageResponseDataResultsSubResults {
	s.Label = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResults) SetSuggestion(v string) *ScanImageResponseDataResultsSubResults {
	s.Suggestion = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResults) SetRate(v float32) *ScanImageResponseDataResultsSubResults {
	s.Rate = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResults) SetScene(v string) *ScanImageResponseDataResultsSubResults {
	s.Scene = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResults) SetFrames(v []*ScanImageResponseDataResultsSubResultsFrames) *ScanImageResponseDataResultsSubResults {
	s.Frames = v
	return s
}

func (s *ScanImageResponseDataResultsSubResults) SetHintWordsInfoList(v []*ScanImageResponseDataResultsSubResultsHintWordsInfoList) *ScanImageResponseDataResultsSubResults {
	s.HintWordsInfoList = v
	return s
}

func (s *ScanImageResponseDataResultsSubResults) SetProgramCodeDataList(v []*ScanImageResponseDataResultsSubResultsProgramCodeDataList) *ScanImageResponseDataResultsSubResults {
	s.ProgramCodeDataList = v
	return s
}

func (s *ScanImageResponseDataResultsSubResults) SetLogoDataList(v []*ScanImageResponseDataResultsSubResultsLogoDataList) *ScanImageResponseDataResultsSubResults {
	s.LogoDataList = v
	return s
}

func (s *ScanImageResponseDataResultsSubResults) SetSfaceDataList(v []*ScanImageResponseDataResultsSubResultsSfaceDataList) *ScanImageResponseDataResultsSubResults {
	s.SfaceDataList = v
	return s
}

type ScanImageResponseDataResultsSubResultsFrames struct {
	Rate *float32 `json:"Rate" xml:"Rate" require:"true"`
	URL  *string  `json:"URL" xml:"URL" require:"true"`
}

func (s ScanImageResponseDataResultsSubResultsFrames) String() string {
	return service.Prettify(s)
}

func (s ScanImageResponseDataResultsSubResultsFrames) GoString() string {
	return s.String()
}

func (s *ScanImageResponseDataResultsSubResultsFrames) SetRate(v float32) *ScanImageResponseDataResultsSubResultsFrames {
	s.Rate = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsFrames) SetURL(v string) *ScanImageResponseDataResultsSubResultsFrames {
	s.URL = &v
	return s
}

type ScanImageResponseDataResultsSubResultsHintWordsInfoList struct {
	Context *string `json:"Context" xml:"Context" require:"true"`
}

func (s ScanImageResponseDataResultsSubResultsHintWordsInfoList) String() string {
	return service.Prettify(s)
}

func (s ScanImageResponseDataResultsSubResultsHintWordsInfoList) GoString() string {
	return s.String()
}

func (s *ScanImageResponseDataResultsSubResultsHintWordsInfoList) SetContext(v string) *ScanImageResponseDataResultsSubResultsHintWordsInfoList {
	s.Context = &v
	return s
}

type ScanImageResponseDataResultsSubResultsProgramCodeDataList struct {
	X      *float32 `json:"X" xml:"X" require:"true"`
	Y      *float32 `json:"Y" xml:"Y" require:"true"`
	Width  *float32 `json:"Width" xml:"Width" require:"true"`
	Height *float32 `json:"Height" xml:"Height" require:"true"`
}

func (s ScanImageResponseDataResultsSubResultsProgramCodeDataList) String() string {
	return service.Prettify(s)
}

func (s ScanImageResponseDataResultsSubResultsProgramCodeDataList) GoString() string {
	return s.String()
}

func (s *ScanImageResponseDataResultsSubResultsProgramCodeDataList) SetX(v float32) *ScanImageResponseDataResultsSubResultsProgramCodeDataList {
	s.X = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsProgramCodeDataList) SetY(v float32) *ScanImageResponseDataResultsSubResultsProgramCodeDataList {
	s.Y = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsProgramCodeDataList) SetWidth(v float32) *ScanImageResponseDataResultsSubResultsProgramCodeDataList {
	s.Width = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsProgramCodeDataList) SetHeight(v float32) *ScanImageResponseDataResultsSubResultsProgramCodeDataList {
	s.Height = &v
	return s
}

type ScanImageResponseDataResultsSubResultsLogoDataList struct {
	Type   *string  `json:"Type" xml:"Type" require:"true"`
	Name   *string  `json:"Name" xml:"Name" require:"true"`
	X      *float32 `json:"X" xml:"X" require:"true"`
	Y      *float32 `json:"Y" xml:"Y" require:"true"`
	Width  *float32 `json:"Width" xml:"Width" require:"true"`
	Height *float32 `json:"Height" xml:"Height" require:"true"`
}

func (s ScanImageResponseDataResultsSubResultsLogoDataList) String() string {
	return service.Prettify(s)
}

func (s ScanImageResponseDataResultsSubResultsLogoDataList) GoString() string {
	return s.String()
}

func (s *ScanImageResponseDataResultsSubResultsLogoDataList) SetType(v string) *ScanImageResponseDataResultsSubResultsLogoDataList {
	s.Type = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsLogoDataList) SetName(v string) *ScanImageResponseDataResultsSubResultsLogoDataList {
	s.Name = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsLogoDataList) SetX(v float32) *ScanImageResponseDataResultsSubResultsLogoDataList {
	s.X = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsLogoDataList) SetY(v float32) *ScanImageResponseDataResultsSubResultsLogoDataList {
	s.Y = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsLogoDataList) SetWidth(v float32) *ScanImageResponseDataResultsSubResultsLogoDataList {
	s.Width = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsLogoDataList) SetHeight(v float32) *ScanImageResponseDataResultsSubResultsLogoDataList {
	s.Height = &v
	return s
}

type ScanImageResponseDataResultsSubResultsSfaceDataList struct {
	X      *float32                                                    `json:"X" xml:"X" require:"true"`
	Y      *float32                                                    `json:"Y" xml:"Y" require:"true"`
	Width  *float32                                                    `json:"Width" xml:"Width" require:"true"`
	Height *float32                                                    `json:"Height" xml:"Height" require:"true"`
	Faces  []*ScanImageResponseDataResultsSubResultsSfaceDataListFaces `json:"Faces" xml:"Faces" require:"true" type:"Repeated"`
}

func (s ScanImageResponseDataResultsSubResultsSfaceDataList) String() string {
	return service.Prettify(s)
}

func (s ScanImageResponseDataResultsSubResultsSfaceDataList) GoString() string {
	return s.String()
}

func (s *ScanImageResponseDataResultsSubResultsSfaceDataList) SetX(v float32) *ScanImageResponseDataResultsSubResultsSfaceDataList {
	s.X = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsSfaceDataList) SetY(v float32) *ScanImageResponseDataResultsSubResultsSfaceDataList {
	s.Y = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsSfaceDataList) SetWidth(v float32) *ScanImageResponseDataResultsSubResultsSfaceDataList {
	s.Width = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsSfaceDataList) SetHeight(v float32) *ScanImageResponseDataResultsSubResultsSfaceDataList {
	s.Height = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsSfaceDataList) SetFaces(v []*ScanImageResponseDataResultsSubResultsSfaceDataListFaces) *ScanImageResponseDataResultsSubResultsSfaceDataList {
	s.Faces = v
	return s
}

type ScanImageResponseDataResultsSubResultsSfaceDataListFaces struct {
	Name *string  `json:"Name" xml:"Name" require:"true"`
	Rate *float32 `json:"Rate" xml:"Rate" require:"true"`
	Id   *string  `json:"Id" xml:"Id" require:"true"`
}

func (s ScanImageResponseDataResultsSubResultsSfaceDataListFaces) String() string {
	return service.Prettify(s)
}

func (s ScanImageResponseDataResultsSubResultsSfaceDataListFaces) GoString() string {
	return s.String()
}

func (s *ScanImageResponseDataResultsSubResultsSfaceDataListFaces) SetName(v string) *ScanImageResponseDataResultsSubResultsSfaceDataListFaces {
	s.Name = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsSfaceDataListFaces) SetRate(v float32) *ScanImageResponseDataResultsSubResultsSfaceDataListFaces {
	s.Rate = &v
	return s
}

func (s *ScanImageResponseDataResultsSubResultsSfaceDataListFaces) SetId(v string) *ScanImageResponseDataResultsSubResultsSfaceDataListFaces {
	s.Id = &v
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
				"host":       common.GetHost("imageaudit", client.RegionId, client.Endpoint),
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

func (client *Client) ScanText(request *ScanTextRequest, runtime *common.RuntimeObject) (_result *ScanTextResponse, _err error) {
	_result = &ScanTextResponse{}
	_body, _err := client._request("ScanText", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ScanImage(request *ScanImageRequest, runtime *common.RuntimeObject) (_result *ScanImageResponse, _err error) {
	_result = &ScanImageResponse{}
	_body, _err := client._request("ScanImage", "HTTPS", "POST", tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}
