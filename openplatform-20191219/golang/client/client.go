// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

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
	UseAccelerate *bool   `json:"UseAccelerate" xml:"UseAccelerate" require:"true"`
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

func (s *AuthorizeFileUploadResponse) SetUseAccelerate(v bool) *AuthorizeFileUploadResponse {
	s.UseAccelerate = &v
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
	client.EndpointRule = tea.String("")
	_err = client.CheckConfig(config)
	if _err != nil {
		return
	}
	client.Endpoint, _err = client.GetEndpoint(client.ProductId, client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) AuthorizeFileUpload(request *AuthorizeFileUploadRequest, runtime *util.RuntimeOptions) (_result *AuthorizeFileUploadResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &AuthorizeFileUploadResponse{}
	_body, _err := client.DoRequest(tea.String("AuthorizeFileUpload"), tea.String("HTTPS"), tea.String("GET"), tea.String("2019-12-19"), tea.String("AK"), tea.ToMap(request), nil, runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetEndpoint(productId *string, regionId *string, endpointRule *string, network *string, suffix *string, endpointMap map[string]string, endpoint *string) (_result *string, _err error) {
	if !tea.BoolValue(util.Empty(endpoint)) {
		_result = endpoint
		return _result, _err
	}

	if !tea.BoolValue(util.Empty(tea.String(endpointMap[tea.StringValue(regionId)]))) {
		_result = tea.String(endpointMap[tea.StringValue(regionId)])
		return _result, _err
	}

	_body, _err := endpointutil.GetEndpointRules(productId, regionId, endpointRule, network, suffix)
	if _err != nil {
		return tea.String(""), _err
	}
	_result = _body
	return _result, _err
}
