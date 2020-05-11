// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type GetOssStsTokenRequest struct {
}

func (s GetOssStsTokenRequest) String() string {
	return tea.Prettify(s)
}

func (s GetOssStsTokenRequest) GoString() string {
	return s.String()
}

type GetOssStsTokenResponse struct {
	RequestId *string                     `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *GetOssStsTokenResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s GetOssStsTokenResponse) String() string {
	return tea.Prettify(s)
}

func (s GetOssStsTokenResponse) GoString() string {
	return s.String()
}

func (s *GetOssStsTokenResponse) SetRequestId(v string) *GetOssStsTokenResponse {
	s.RequestId = &v
	return s
}

func (s *GetOssStsTokenResponse) SetData(v *GetOssStsTokenResponseData) *GetOssStsTokenResponse {
	s.Data = v
	return s
}

type GetOssStsTokenResponseData struct {
	AccessKeyId     *string `json:"AccessKeyId" xml:"AccessKeyId" require:"true"`
	AccessKeySecret *string `json:"AccessKeySecret" xml:"AccessKeySecret" require:"true"`
	SecurityToken   *string `json:"SecurityToken" xml:"SecurityToken" require:"true"`
	Script          *string `json:"Script" xml:"Script" require:"true"`
}

func (s GetOssStsTokenResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetOssStsTokenResponseData) GoString() string {
	return s.String()
}

func (s *GetOssStsTokenResponseData) SetAccessKeyId(v string) *GetOssStsTokenResponseData {
	s.AccessKeyId = &v
	return s
}

func (s *GetOssStsTokenResponseData) SetAccessKeySecret(v string) *GetOssStsTokenResponseData {
	s.AccessKeySecret = &v
	return s
}

func (s *GetOssStsTokenResponseData) SetSecurityToken(v string) *GetOssStsTokenResponseData {
	s.SecurityToken = &v
	return s
}

func (s *GetOssStsTokenResponseData) SetScript(v string) *GetOssStsTokenResponseData {
	s.Script = &v
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
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(client.ProductId, client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) GetOssStsTokenEx(request *GetOssStsTokenRequest, runtime *util.RuntimeOptions) (_result *GetOssStsTokenResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetOssStsTokenResponse{}
	_body, _err := client.DoRequest(tea.String("GetOssStsToken"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-04-01"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetOssStsToken(request *GetOssStsTokenRequest) (_result *GetOssStsTokenResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetOssStsTokenResponse{}
	_body, _err := client.GetOssStsTokenEx(request, runtime)
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
