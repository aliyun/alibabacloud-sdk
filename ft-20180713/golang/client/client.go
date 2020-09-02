// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type TestFlowStrategy01Request struct {
	Names map[string]interface{} `json:"Names,omitempty" xml:"Names,omitempty"`
}

func (s TestFlowStrategy01Request) String() string {
	return tea.Prettify(s)
}

func (s TestFlowStrategy01Request) GoString() string {
	return s.String()
}

func (s *TestFlowStrategy01Request) SetNames(v map[string]interface{}) *TestFlowStrategy01Request {
	s.Names = v
	return s
}

type TestFlowStrategy01Response struct {
	RequestId *string   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	List      []*string `json:"List,omitempty" xml:"List,omitempty" require:"true" type:"Repeated"`
	Names     []*string `json:"Names,omitempty" xml:"Names,omitempty" require:"true" type:"Repeated"`
}

func (s TestFlowStrategy01Response) String() string {
	return tea.Prettify(s)
}

func (s TestFlowStrategy01Response) GoString() string {
	return s.String()
}

func (s *TestFlowStrategy01Response) SetRequestId(v string) *TestFlowStrategy01Response {
	s.RequestId = &v
	return s
}

func (s *TestFlowStrategy01Response) SetList(v []*string) *TestFlowStrategy01Response {
	s.List = v
	return s
}

func (s *TestFlowStrategy01Response) SetNames(v []*string) *TestFlowStrategy01Response {
	s.Names = v
	return s
}

type TestHttpApiRequest struct {
	StringValue  map[string]interface{} `json:"StringValue,omitempty" xml:"StringValue,omitempty"`
	DefaultValue map[string]interface{} `json:"DefaultValue,omitempty" xml:"DefaultValue,omitempty"`
	OtherParam   map[string]interface{} `json:"OtherParam,omitempty" xml:"OtherParam,omitempty"`
	BooleanParam *bool                  `json:"BooleanParam,omitempty" xml:"BooleanParam,omitempty"`
}

func (s TestHttpApiRequest) String() string {
	return tea.Prettify(s)
}

func (s TestHttpApiRequest) GoString() string {
	return s.String()
}

func (s *TestHttpApiRequest) SetStringValue(v map[string]interface{}) *TestHttpApiRequest {
	s.StringValue = v
	return s
}

func (s *TestHttpApiRequest) SetDefaultValue(v map[string]interface{}) *TestHttpApiRequest {
	s.DefaultValue = v
	return s
}

func (s *TestHttpApiRequest) SetOtherParam(v map[string]interface{}) *TestHttpApiRequest {
	s.OtherParam = v
	return s
}

func (s *TestHttpApiRequest) SetBooleanParam(v bool) *TestHttpApiRequest {
	s.BooleanParam = &v
	return s
}

type TestHttpApiResponse struct {
	Params         *string `json:"Params,omitempty" xml:"Params,omitempty" require:"true"`
	ServiceRpcSign *string `json:"ServiceRpcSign,omitempty" xml:"ServiceRpcSign,omitempty" require:"true"`
}

func (s TestHttpApiResponse) String() string {
	return tea.Prettify(s)
}

func (s TestHttpApiResponse) GoString() string {
	return s.String()
}

func (s *TestHttpApiResponse) SetParams(v string) *TestHttpApiResponse {
	s.Params = &v
	return s
}

func (s *TestHttpApiResponse) SetServiceRpcSign(v string) *TestHttpApiResponse {
	s.ServiceRpcSign = &v
	return s
}

type BatchAuditTest01Request struct {
	Name             *string `json:"Name,omitempty" xml:"Name,omitempty"`
	BatchAuditTest01 *string `json:"BatchAuditTest01,omitempty" xml:"BatchAuditTest01,omitempty"`
	Demo01           *string `json:"Demo01,omitempty" xml:"Demo01,omitempty"`
	Test010101       *bool   `json:"Test010101,omitempty" xml:"Test010101,omitempty"`
}

func (s BatchAuditTest01Request) String() string {
	return tea.Prettify(s)
}

func (s BatchAuditTest01Request) GoString() string {
	return s.String()
}

func (s *BatchAuditTest01Request) SetName(v string) *BatchAuditTest01Request {
	s.Name = &v
	return s
}

func (s *BatchAuditTest01Request) SetBatchAuditTest01(v string) *BatchAuditTest01Request {
	s.BatchAuditTest01 = &v
	return s
}

func (s *BatchAuditTest01Request) SetDemo01(v string) *BatchAuditTest01Request {
	s.Demo01 = &v
	return s
}

func (s *BatchAuditTest01Request) SetTest010101(v bool) *BatchAuditTest01Request {
	s.Test010101 = &v
	return s
}

type BatchAuditTest01Response struct {
	RequestId *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Name      *string                         `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Demo01    *BatchAuditTest01ResponseDemo01 `json:"Demo01,omitempty" xml:"Demo01,omitempty" require:"true" type:"Struct"`
}

func (s BatchAuditTest01Response) String() string {
	return tea.Prettify(s)
}

func (s BatchAuditTest01Response) GoString() string {
	return s.String()
}

func (s *BatchAuditTest01Response) SetRequestId(v string) *BatchAuditTest01Response {
	s.RequestId = &v
	return s
}

func (s *BatchAuditTest01Response) SetName(v string) *BatchAuditTest01Response {
	s.Name = &v
	return s
}

func (s *BatchAuditTest01Response) SetDemo01(v *BatchAuditTest01ResponseDemo01) *BatchAuditTest01Response {
	s.Demo01 = v
	return s
}

type BatchAuditTest01ResponseDemo01 struct {
	Demo011 *BatchAuditTest01ResponseDemo01Demo011 `json:"Demo011,omitempty" xml:"Demo011,omitempty" require:"true" type:"Struct"`
}

func (s BatchAuditTest01ResponseDemo01) String() string {
	return tea.Prettify(s)
}

func (s BatchAuditTest01ResponseDemo01) GoString() string {
	return s.String()
}

func (s *BatchAuditTest01ResponseDemo01) SetDemo011(v *BatchAuditTest01ResponseDemo01Demo011) *BatchAuditTest01ResponseDemo01 {
	s.Demo011 = v
	return s
}

type BatchAuditTest01ResponseDemo01Demo011 struct {
	Demo011 []*BatchAuditTest01ResponseDemo01Demo011Demo011 `json:"Demo011,omitempty" xml:"Demo011,omitempty" require:"true" type:"Repeated"`
}

func (s BatchAuditTest01ResponseDemo01Demo011) String() string {
	return tea.Prettify(s)
}

func (s BatchAuditTest01ResponseDemo01Demo011) GoString() string {
	return s.String()
}

func (s *BatchAuditTest01ResponseDemo01Demo011) SetDemo011(v []*BatchAuditTest01ResponseDemo01Demo011Demo011) *BatchAuditTest01ResponseDemo01Demo011 {
	s.Demo011 = v
	return s
}

type BatchAuditTest01ResponseDemo01Demo011Demo011 struct {
	Demo0111 *string `json:"Demo0111,omitempty" xml:"Demo0111,omitempty" require:"true"`
}

func (s BatchAuditTest01ResponseDemo01Demo011Demo011) String() string {
	return tea.Prettify(s)
}

func (s BatchAuditTest01ResponseDemo01Demo011Demo011) GoString() string {
	return s.String()
}

func (s *BatchAuditTest01ResponseDemo01Demo011Demo011) SetDemo0111(v string) *BatchAuditTest01ResponseDemo01Demo011Demo011 {
	s.Demo0111 = &v
	return s
}

type FtIpFlowControlRequest struct {
	Name *string `json:"Name,omitempty" xml:"Name,omitempty"`
}

func (s FtIpFlowControlRequest) String() string {
	return tea.Prettify(s)
}

func (s FtIpFlowControlRequest) GoString() string {
	return s.String()
}

func (s *FtIpFlowControlRequest) SetName(v string) *FtIpFlowControlRequest {
	s.Name = &v
	return s
}

type FtIpFlowControlResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Name      *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s FtIpFlowControlResponse) String() string {
	return tea.Prettify(s)
}

func (s FtIpFlowControlResponse) GoString() string {
	return s.String()
}

func (s *FtIpFlowControlResponse) SetRequestId(v string) *FtIpFlowControlResponse {
	s.RequestId = &v
	return s
}

func (s *FtIpFlowControlResponse) SetName(v string) *FtIpFlowControlResponse {
	s.Name = &v
	return s
}

type FtDynamicAddressDubboRequest struct {
	IntValue    *int    `json:"IntValue,omitempty" xml:"IntValue,omitempty"`
	StringValue *string `json:"StringValue,omitempty" xml:"StringValue,omitempty"`
}

func (s FtDynamicAddressDubboRequest) String() string {
	return tea.Prettify(s)
}

func (s FtDynamicAddressDubboRequest) GoString() string {
	return s.String()
}

func (s *FtDynamicAddressDubboRequest) SetIntValue(v int) *FtDynamicAddressDubboRequest {
	s.IntValue = &v
	return s
}

func (s *FtDynamicAddressDubboRequest) SetStringValue(v string) *FtDynamicAddressDubboRequest {
	s.StringValue = &v
	return s
}

type FtDynamicAddressDubboResponse struct {
	RequestId   *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StringValue *string `json:"StringValue,omitempty" xml:"StringValue,omitempty" require:"true"`
	IntValue    *int    `json:"IntValue,omitempty" xml:"IntValue,omitempty" require:"true"`
}

func (s FtDynamicAddressDubboResponse) String() string {
	return tea.Prettify(s)
}

func (s FtDynamicAddressDubboResponse) GoString() string {
	return s.String()
}

func (s *FtDynamicAddressDubboResponse) SetRequestId(v string) *FtDynamicAddressDubboResponse {
	s.RequestId = &v
	return s
}

func (s *FtDynamicAddressDubboResponse) SetStringValue(v string) *FtDynamicAddressDubboResponse {
	s.StringValue = &v
	return s
}

func (s *FtDynamicAddressDubboResponse) SetIntValue(v int) *FtDynamicAddressDubboResponse {
	s.IntValue = &v
	return s
}

type FtDynamicAddressHsfRequest struct {
}

func (s FtDynamicAddressHsfRequest) String() string {
	return tea.Prettify(s)
}

func (s FtDynamicAddressHsfRequest) GoString() string {
	return s.String()
}

type FtDynamicAddressHsfResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s FtDynamicAddressHsfResponse) String() string {
	return tea.Prettify(s)
}

func (s FtDynamicAddressHsfResponse) GoString() string {
	return s.String()
}

func (s *FtDynamicAddressHsfResponse) SetRequestId(v string) *FtDynamicAddressHsfResponse {
	s.RequestId = &v
	return s
}

type FtFlowSpecialRequest struct {
	Name *string `json:"Name,omitempty" xml:"Name,omitempty"`
}

func (s FtFlowSpecialRequest) String() string {
	return tea.Prettify(s)
}

func (s FtFlowSpecialRequest) GoString() string {
	return s.String()
}

func (s *FtFlowSpecialRequest) SetName(v string) *FtFlowSpecialRequest {
	s.Name = &v
	return s
}

type FtFlowSpecialResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Name      *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s FtFlowSpecialResponse) String() string {
	return tea.Prettify(s)
}

func (s FtFlowSpecialResponse) GoString() string {
	return s.String()
}

func (s *FtFlowSpecialResponse) SetRequestId(v string) *FtFlowSpecialResponse {
	s.RequestId = &v
	return s
}

func (s *FtFlowSpecialResponse) SetName(v string) *FtFlowSpecialResponse {
	s.Name = &v
	return s
}

type FTApiAliasApiRequest struct {
	Name *string `json:"Name,omitempty" xml:"Name,omitempty"`
}

func (s FTApiAliasApiRequest) String() string {
	return tea.Prettify(s)
}

func (s FTApiAliasApiRequest) GoString() string {
	return s.String()
}

func (s *FTApiAliasApiRequest) SetName(v string) *FTApiAliasApiRequest {
	s.Name = &v
	return s
}

type FTApiAliasApiResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Name      *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s FTApiAliasApiResponse) String() string {
	return tea.Prettify(s)
}

func (s FTApiAliasApiResponse) GoString() string {
	return s.String()
}

func (s *FTApiAliasApiResponse) SetRequestId(v string) *FTApiAliasApiResponse {
	s.RequestId = &v
	return s
}

func (s *FTApiAliasApiResponse) SetName(v string) *FTApiAliasApiResponse {
	s.Name = &v
	return s
}

type FtEagleEyeRequest struct {
	Name *string `json:"Name,omitempty" xml:"Name,omitempty"`
}

func (s FtEagleEyeRequest) String() string {
	return tea.Prettify(s)
}

func (s FtEagleEyeRequest) GoString() string {
	return s.String()
}

func (s *FtEagleEyeRequest) SetName(v string) *FtEagleEyeRequest {
	s.Name = &v
	return s
}

type FtEagleEyeResponse struct {
	RequestId       *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Name            *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	EagleEyeTraceId *string `json:"eagleEyeTraceId,omitempty" xml:"eagleEyeTraceId,omitempty" require:"true"`
}

func (s FtEagleEyeResponse) String() string {
	return tea.Prettify(s)
}

func (s FtEagleEyeResponse) GoString() string {
	return s.String()
}

func (s *FtEagleEyeResponse) SetRequestId(v string) *FtEagleEyeResponse {
	s.RequestId = &v
	return s
}

func (s *FtEagleEyeResponse) SetName(v string) *FtEagleEyeResponse {
	s.Name = &v
	return s
}

func (s *FtEagleEyeResponse) SetEagleEyeTraceId(v string) *FtEagleEyeResponse {
	s.EagleEyeTraceId = &v
	return s
}

type FtParamListRequest struct {
	Name *string                   `json:"Name,omitempty" xml:"Name,omitempty"`
	Disk []*FtParamListRequestDisk `json:"Disk,omitempty" xml:"Disk,omitempty" type:"Repeated"`
}

func (s FtParamListRequest) String() string {
	return tea.Prettify(s)
}

func (s FtParamListRequest) GoString() string {
	return s.String()
}

func (s *FtParamListRequest) SetName(v string) *FtParamListRequest {
	s.Name = &v
	return s
}

func (s *FtParamListRequest) SetDisk(v []*FtParamListRequestDisk) *FtParamListRequest {
	s.Disk = v
	return s
}

type FtParamListRequestDisk struct {
	Size []*string `json:"Size,omitempty" xml:"Size,omitempty" require:"true" type:"Repeated"`
	Type []*string `json:"Type,omitempty" xml:"Type,omitempty" require:"true" type:"Repeated"`
}

func (s FtParamListRequestDisk) String() string {
	return tea.Prettify(s)
}

func (s FtParamListRequestDisk) GoString() string {
	return s.String()
}

func (s *FtParamListRequestDisk) SetSize(v []*string) *FtParamListRequestDisk {
	s.Size = v
	return s
}

func (s *FtParamListRequestDisk) SetType(v []*string) *FtParamListRequestDisk {
	s.Type = v
	return s
}

type FtParamListResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Name      *string `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
}

func (s FtParamListResponse) String() string {
	return tea.Prettify(s)
}

func (s FtParamListResponse) GoString() string {
	return s.String()
}

func (s *FtParamListResponse) SetRequestId(v string) *FtParamListResponse {
	s.RequestId = &v
	return s
}

func (s *FtParamListResponse) SetName(v string) *FtParamListResponse {
	s.Name = &v
	return s
}

type FtGatedLaunchPolicy4Request struct {
	IsGatedLaunch *string `json:"IsGatedLaunch,omitempty" xml:"IsGatedLaunch,omitempty"`
}

func (s FtGatedLaunchPolicy4Request) String() string {
	return tea.Prettify(s)
}

func (s FtGatedLaunchPolicy4Request) GoString() string {
	return s.String()
}

func (s *FtGatedLaunchPolicy4Request) SetIsGatedLaunch(v string) *FtGatedLaunchPolicy4Request {
	s.IsGatedLaunch = &v
	return s
}

type FtGatedLaunchPolicy4Response struct {
	RequestId     *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	IsGatedLaunch *string `json:"IsGatedLaunch,omitempty" xml:"IsGatedLaunch,omitempty" require:"true"`
}

func (s FtGatedLaunchPolicy4Response) String() string {
	return tea.Prettify(s)
}

func (s FtGatedLaunchPolicy4Response) GoString() string {
	return s.String()
}

func (s *FtGatedLaunchPolicy4Response) SetRequestId(v string) *FtGatedLaunchPolicy4Response {
	s.RequestId = &v
	return s
}

func (s *FtGatedLaunchPolicy4Response) SetIsGatedLaunch(v string) *FtGatedLaunchPolicy4Response {
	s.IsGatedLaunch = &v
	return s
}

type Client struct {
	rpc.Client
}

func NewClient(config *rpc.Config) (*Client, error) {
	client := new(Client)
	err := client.Init(config)
	return client, err
}

func (client *Client) Init(config *rpc.Config) (_err error) {
	_err = client.Client.Init(config)
	if _err != nil {
		return _err
	}
	client.EndpointRule = tea.String("regional")
	client.EndpointMap = map[string]*string{
		"ap-northeast-2-pop":          tea.String("ft.aliyuncs.com"),
		"ap-south-1":                  tea.String("ft.aliyuncs.com"),
		"ap-southeast-1":              tea.String("ft.aliyuncs.com"),
		"ap-southeast-2":              tea.String("ft.aliyuncs.com"),
		"ap-southeast-3":              tea.String("ft.aliyuncs.com"),
		"ap-southeast-5":              tea.String("ft.aliyuncs.com"),
		"cn-beijing":                  tea.String("ft.aliyuncs.com"),
		"cn-beijing-finance-1":        tea.String("ft.aliyuncs.com"),
		"cn-beijing-finance-pop":      tea.String("ft.aliyuncs.com"),
		"cn-beijing-gov-1":            tea.String("ft.aliyuncs.com"),
		"cn-beijing-nu16-b01":         tea.String("ft.aliyuncs.com"),
		"cn-chengdu":                  tea.String("ft.aliyuncs.com"),
		"cn-edge-1":                   tea.String("ft.aliyuncs.com"),
		"cn-fujian":                   tea.String("ft.aliyuncs.com"),
		"cn-haidian-cm12-c01":         tea.String("ft.aliyuncs.com"),
		"cn-hangzhou-bj-b01":          tea.String("ft.aliyuncs.com"),
		"cn-hangzhou-finance":         tea.String("ft.aliyuncs.com"),
		"cn-hangzhou-internal-prod-1": tea.String("ft.aliyuncs.com"),
		"cn-hangzhou-internal-test-1": tea.String("ft.aliyuncs.com"),
		"cn-hangzhou-internal-test-2": tea.String("ft.aliyuncs.com"),
		"cn-hangzhou-internal-test-3": tea.String("ft.aliyuncs.com"),
		"cn-hangzhou-test-306":        tea.String("ft.aliyuncs.com"),
		"cn-hongkong-finance-pop":     tea.String("ft.aliyuncs.com"),
		"cn-huhehaote":                tea.String("ft.aliyuncs.com"),
		"cn-qingdao":                  tea.String("ft.aliyuncs.com"),
		"cn-qingdao-nebula":           tea.String("ft.aliyuncs.com"),
		"cn-shanghai-et15-b01":        tea.String("ft.aliyuncs.com"),
		"cn-shanghai-et2-b01":         tea.String("ft.aliyuncs.com"),
		"cn-shanghai-finance-1":       tea.String("ft.aliyuncs.com"),
		"cn-shanghai-inner":           tea.String("ft.aliyuncs.com"),
		"cn-shanghai-internal-test-1": tea.String("ft.aliyuncs.com"),
		"cn-shenzhen-finance-1":       tea.String("ft.aliyuncs.com"),
		"cn-shenzhen-inner":           tea.String("ft.aliyuncs.com"),
		"cn-shenzhen-st4-d01":         tea.String("ft.aliyuncs.com"),
		"cn-shenzhen-su18-b01":        tea.String("ft.aliyuncs.com"),
		"cn-wuhan":                    tea.String("ft.aliyuncs.com"),
		"cn-yushanfang":               tea.String("ft.aliyuncs.com"),
		"cn-zhangbei-na61-b01":        tea.String("ft.aliyuncs.com"),
		"cn-zhangjiakou-na62-a01":     tea.String("ft.aliyuncs.com"),
		"cn-zhengzhou-nebula-1":       tea.String("ft.aliyuncs.com"),
		"eu-central-1":                tea.String("ft.aliyuncs.com"),
		"eu-west-1":                   tea.String("ft.aliyuncs.com"),
		"eu-west-1-oxs":               tea.String("ft.aliyuncs.com"),
		"me-east-1":                   tea.String("ft.aliyuncs.com"),
		"rus-west-1-pop":              tea.String("ft.aliyuncs.com"),
		"us-west-1":                   tea.String("ft.aliyuncs.com"),
	}
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("ft"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) TestFlowStrategy01WithOptions(request *TestFlowStrategy01Request, runtime *util.RuntimeOptions) (_result *TestFlowStrategy01Response, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &TestFlowStrategy01Response{}
	_body, _err := client.DoRequest(tea.String("TestFlowStrategy01"), tea.String("HTTPS"), tea.String("PUT"), tea.String("2018-07-13"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TestFlowStrategy01(request *TestFlowStrategy01Request) (_result *TestFlowStrategy01Response, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &TestFlowStrategy01Response{}
	_body, _err := client.TestFlowStrategy01WithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) TestHttpApiWithOptions(request *TestHttpApiRequest, runtime *util.RuntimeOptions) (_result *TestHttpApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &TestHttpApiResponse{}
	_body, _err := client.DoRequest(tea.String("TestHttpApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-07-13"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TestHttpApi(request *TestHttpApiRequest) (_result *TestHttpApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &TestHttpApiResponse{}
	_body, _err := client.TestHttpApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) BatchAuditTest01WithOptions(request *BatchAuditTest01Request, runtime *util.RuntimeOptions) (_result *BatchAuditTest01Response, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &BatchAuditTest01Response{}
	_body, _err := client.DoRequest(tea.String("BatchAuditTest01"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-07-13"), tea.String("Anonymous"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) BatchAuditTest01(request *BatchAuditTest01Request) (_result *BatchAuditTest01Response, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &BatchAuditTest01Response{}
	_body, _err := client.BatchAuditTest01WithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) FtIpFlowControlWithOptions(request *FtIpFlowControlRequest, runtime *util.RuntimeOptions) (_result *FtIpFlowControlResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &FtIpFlowControlResponse{}
	_body, _err := client.DoRequest(tea.String("FtIpFlowControl"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-07-13"), tea.String("Anonymous"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FtIpFlowControl(request *FtIpFlowControlRequest) (_result *FtIpFlowControlResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &FtIpFlowControlResponse{}
	_body, _err := client.FtIpFlowControlWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) FtDynamicAddressDubboWithOptions(request *FtDynamicAddressDubboRequest, runtime *util.RuntimeOptions) (_result *FtDynamicAddressDubboResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &FtDynamicAddressDubboResponse{}
	_body, _err := client.DoRequest(tea.String("FtDynamicAddressDubbo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-07-13"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FtDynamicAddressDubbo(request *FtDynamicAddressDubboRequest) (_result *FtDynamicAddressDubboResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &FtDynamicAddressDubboResponse{}
	_body, _err := client.FtDynamicAddressDubboWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) FtDynamicAddressHsfWithOptions(request *FtDynamicAddressHsfRequest, runtime *util.RuntimeOptions) (_result *FtDynamicAddressHsfResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &FtDynamicAddressHsfResponse{}
	_body, _err := client.DoRequest(tea.String("FtDynamicAddressHsf"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-07-13"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FtDynamicAddressHsf(request *FtDynamicAddressHsfRequest) (_result *FtDynamicAddressHsfResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &FtDynamicAddressHsfResponse{}
	_body, _err := client.FtDynamicAddressHsfWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) FtFlowSpecialWithOptions(request *FtFlowSpecialRequest, runtime *util.RuntimeOptions) (_result *FtFlowSpecialResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &FtFlowSpecialResponse{}
	_body, _err := client.DoRequest(tea.String("FtFlowSpecial"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-07-13"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FtFlowSpecial(request *FtFlowSpecialRequest) (_result *FtFlowSpecialResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &FtFlowSpecialResponse{}
	_body, _err := client.FtFlowSpecialWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) FTApiAliasApiWithOptions(request *FTApiAliasApiRequest, runtime *util.RuntimeOptions) (_result *FTApiAliasApiResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &FTApiAliasApiResponse{}
	_body, _err := client.DoRequest(tea.String("FTApiAliasApi"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-07-13"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FTApiAliasApi(request *FTApiAliasApiRequest) (_result *FTApiAliasApiResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &FTApiAliasApiResponse{}
	_body, _err := client.FTApiAliasApiWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) FtEagleEyeWithOptions(request *FtEagleEyeRequest, runtime *util.RuntimeOptions) (_result *FtEagleEyeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &FtEagleEyeResponse{}
	_body, _err := client.DoRequest(tea.String("FtEagleEye"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-07-13"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FtEagleEye(request *FtEagleEyeRequest) (_result *FtEagleEyeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &FtEagleEyeResponse{}
	_body, _err := client.FtEagleEyeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) FtParamListWithOptions(request *FtParamListRequest, runtime *util.RuntimeOptions) (_result *FtParamListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &FtParamListResponse{}
	_body, _err := client.DoRequest(tea.String("FtParamList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-07-13"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FtParamList(request *FtParamListRequest) (_result *FtParamListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &FtParamListResponse{}
	_body, _err := client.FtParamListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) FtGatedLaunchPolicy4WithOptions(request *FtGatedLaunchPolicy4Request, runtime *util.RuntimeOptions) (_result *FtGatedLaunchPolicy4Response, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &FtGatedLaunchPolicy4Response{}
	_body, _err := client.DoRequest(tea.String("FtGatedLaunchPolicy4"), tea.String("HTTPS"), tea.String("POST"), tea.String("2018-07-13"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) FtGatedLaunchPolicy4(request *FtGatedLaunchPolicy4Request) (_result *FtGatedLaunchPolicy4Response, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &FtGatedLaunchPolicy4Response{}
	_body, _err := client.FtGatedLaunchPolicy4WithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetEndpoint(productId *string, regionId *string, endpointRule *string, network *string, suffix *string, endpointMap map[string]*string, endpoint *string) (_result *string, _err error) {
	if !tea.BoolValue(util.Empty(endpoint)) {
		_result = endpoint
		return _result, _err
	}

	if !tea.BoolValue(util.IsUnset(endpointMap)) && !tea.BoolValue(util.Empty(endpointMap[tea.StringValue(regionId)])) {
		_result = endpointMap[tea.StringValue(regionId)]
		return _result, _err
	}

	_body, _err := endpointutil.GetEndpointRules(productId, regionId, endpointRule, network, suffix)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}
