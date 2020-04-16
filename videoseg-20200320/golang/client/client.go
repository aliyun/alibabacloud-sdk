// This file is auto-generated, don't edit it. Thanks.
package client

import (
	openplatform "github.com/alibabacloud-go/OpenPlatform-20191219/client"
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	fileform "github.com/alibabacloud-go/tea-fileform/service"
	oss "github.com/alibabacloud-go/tea-oss-sdk/client"
	ossutil "github.com/alibabacloud-go/tea-oss-utils/service"
	rpcutil "github.com/alibabacloud-go/tea-rpc-utils/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
	"io"
)

type SegmentVideoBodyRequest struct {
	VideoUrl *string `json:"VideoUrl" xml:"VideoUrl" require:"true"`
}

func (s SegmentVideoBodyRequest) String() string {
	return tea.Prettify(s)
}

func (s SegmentVideoBodyRequest) GoString() string {
	return s.String()
}

func (s *SegmentVideoBodyRequest) SetVideoUrl(v string) *SegmentVideoBodyRequest {
	s.VideoUrl = &v
	return s
}

type SegmentVideoBodyResponse struct {
	RequestId *string                       `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *SegmentVideoBodyResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s SegmentVideoBodyResponse) String() string {
	return tea.Prettify(s)
}

func (s SegmentVideoBodyResponse) GoString() string {
	return s.String()
}

func (s *SegmentVideoBodyResponse) SetRequestId(v string) *SegmentVideoBodyResponse {
	s.RequestId = &v
	return s
}

func (s *SegmentVideoBodyResponse) SetData(v *SegmentVideoBodyResponseData) *SegmentVideoBodyResponse {
	s.Data = v
	return s
}

type SegmentVideoBodyResponseData struct {
	VideoUrl *string `json:"VideoUrl" xml:"VideoUrl" require:"true"`
}

func (s SegmentVideoBodyResponseData) String() string {
	return tea.Prettify(s)
}

func (s SegmentVideoBodyResponseData) GoString() string {
	return s.String()
}

func (s *SegmentVideoBodyResponseData) SetVideoUrl(v string) *SegmentVideoBodyResponseData {
	s.VideoUrl = &v
	return s
}

type SegmentVideoBodyAdvanceRequest struct {
	VideoUrlObject io.Reader `json:"VideoUrlObject" xml:"VideoUrlObject" require:"true"`
}

func (s SegmentVideoBodyAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s SegmentVideoBodyAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SegmentVideoBodyAdvanceRequest) SetVideoUrlObject(v io.Reader) *SegmentVideoBodyAdvanceRequest {
	s.VideoUrlObject = v
	return s
}

type GetAsyncJobResultRequest struct {
	JobId *string `json:"JobId" xml:"JobId" require:"true"`
}

func (s GetAsyncJobResultRequest) String() string {
	return tea.Prettify(s)
}

func (s GetAsyncJobResultRequest) GoString() string {
	return s.String()
}

func (s *GetAsyncJobResultRequest) SetJobId(v string) *GetAsyncJobResultRequest {
	s.JobId = &v
	return s
}

type GetAsyncJobResultResponse struct {
	RequestId *string                        `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *GetAsyncJobResultResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s GetAsyncJobResultResponse) String() string {
	return tea.Prettify(s)
}

func (s GetAsyncJobResultResponse) GoString() string {
	return s.String()
}

func (s *GetAsyncJobResultResponse) SetRequestId(v string) *GetAsyncJobResultResponse {
	s.RequestId = &v
	return s
}

func (s *GetAsyncJobResultResponse) SetData(v *GetAsyncJobResultResponseData) *GetAsyncJobResultResponse {
	s.Data = v
	return s
}

type GetAsyncJobResultResponseData struct {
	JobId        *string `json:"JobId" xml:"JobId" require:"true"`
	Status       *string `json:"Status" xml:"Status" require:"true"`
	Result       *string `json:"Result" xml:"Result" require:"true"`
	ErrorCode    *string `json:"ErrorCode" xml:"ErrorCode" require:"true"`
	ErrorMessage *string `json:"ErrorMessage" xml:"ErrorMessage" require:"true"`
}

func (s GetAsyncJobResultResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetAsyncJobResultResponseData) GoString() string {
	return s.String()
}

func (s *GetAsyncJobResultResponseData) SetJobId(v string) *GetAsyncJobResultResponseData {
	s.JobId = &v
	return s
}

func (s *GetAsyncJobResultResponseData) SetStatus(v string) *GetAsyncJobResultResponseData {
	s.Status = &v
	return s
}

func (s *GetAsyncJobResultResponseData) SetResult(v string) *GetAsyncJobResultResponseData {
	s.Result = &v
	return s
}

func (s *GetAsyncJobResultResponseData) SetErrorCode(v string) *GetAsyncJobResultResponseData {
	s.ErrorCode = &v
	return s
}

func (s *GetAsyncJobResultResponseData) SetErrorMessage(v string) *GetAsyncJobResultResponseData {
	s.ErrorMessage = &v
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
	client.EndpointRule = "regional"
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

func (client *Client) SegmentVideoBody(request *SegmentVideoBodyRequest, runtime *util.RuntimeOptions) (_result *SegmentVideoBodyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &SegmentVideoBodyResponse{}
	_body, _err := client.DoRequest("SegmentVideoBody", "HTTPS", "POST", "2020-03-20", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentVideoBodyAdvance(request *SegmentVideoBodyAdvanceRequest, runtime *util.RuntimeOptions) (_result *SegmentVideoBodyResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return nil, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return nil, _err
	}

	authConfig := &rpc.Config{
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
		Product:  tea.String("videoseg"),
		RegionId: tea.String(client.RegionId),
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
	}

	// Step 1: request OSS api to upload file
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
		Content:     request.VideoUrlObject,
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
	// Step 2: request final api
	segmentVideoBodyreq := &SegmentVideoBodyRequest{}
	rpcutil.Convert(request, segmentVideoBodyreq)
	segmentVideoBodyreq.VideoUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentVideoBodyResp, _err := client.SegmentVideoBody(segmentVideoBodyreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = segmentVideoBodyResp
	return _result, _err
}

func (client *Client) GetAsyncJobResult(request *GetAsyncJobResultRequest, runtime *util.RuntimeOptions) (_result *GetAsyncJobResultResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &GetAsyncJobResultResponse{}
	_body, _err := client.DoRequest("GetAsyncJobResult", "HTTPS", "POST", "2020-03-20", "AK", nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetEndpoint(productId string, regionId string, endpointRule string, network string, suffix string, endpointMap map[string]string, endpoint string) (_result string, _err error) {
	if !util.Empty(endpoint) {
		_result = endpoint
		return _result, _err
	}

	if !util.IsUnset(endpointMap) && !util.Empty(endpointMap[regionId]) {
		return _result, _err
	}

	_body, _err := endpointutil.GetEndpointRules(productId, regionId, endpointRule, network, suffix)
	if _err != nil {
		return "", _err
	}
	_result = _body
	return _result, _err
}
