// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	openplatform "github.com/alibabacloud-go/openplatform-20191219/client"
	fileform "github.com/alibabacloud-go/tea-fileform/service"
	oss "github.com/alibabacloud-go/tea-oss-sdk/client"
	ossutil "github.com/alibabacloud-go/tea-oss-utils/service"
	rpcutil "github.com/alibabacloud-go/tea-rpc-utils/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
	"io"
)

type SegmentHalfBodyRequest struct {
	VideoUrl *string `json:"VideoUrl,omitempty" xml:"VideoUrl,omitempty" require:"true"`
}

func (s SegmentHalfBodyRequest) String() string {
	return tea.Prettify(s)
}

func (s SegmentHalfBodyRequest) GoString() string {
	return s.String()
}

func (s *SegmentHalfBodyRequest) SetVideoUrl(v string) *SegmentHalfBodyRequest {
	s.VideoUrl = &v
	return s
}

type SegmentHalfBodyResponse struct {
	RequestId *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *SegmentHalfBodyResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s SegmentHalfBodyResponse) String() string {
	return tea.Prettify(s)
}

func (s SegmentHalfBodyResponse) GoString() string {
	return s.String()
}

func (s *SegmentHalfBodyResponse) SetRequestId(v string) *SegmentHalfBodyResponse {
	s.RequestId = &v
	return s
}

func (s *SegmentHalfBodyResponse) SetData(v *SegmentHalfBodyResponseData) *SegmentHalfBodyResponse {
	s.Data = v
	return s
}

type SegmentHalfBodyResponseData struct {
	VideoUrl *string `json:"VideoUrl,omitempty" xml:"VideoUrl,omitempty" require:"true"`
}

func (s SegmentHalfBodyResponseData) String() string {
	return tea.Prettify(s)
}

func (s SegmentHalfBodyResponseData) GoString() string {
	return s.String()
}

func (s *SegmentHalfBodyResponseData) SetVideoUrl(v string) *SegmentHalfBodyResponseData {
	s.VideoUrl = &v
	return s
}

type SegmentHalfBodyAdvanceRequest struct {
	VideoUrlObject io.Reader `json:"VideoUrlObject,omitempty" xml:"VideoUrlObject,omitempty" require:"true"`
}

func (s SegmentHalfBodyAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s SegmentHalfBodyAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SegmentHalfBodyAdvanceRequest) SetVideoUrlObject(v io.Reader) *SegmentHalfBodyAdvanceRequest {
	s.VideoUrlObject = v
	return s
}

type SegmentVideoBodyRequest struct {
	VideoUrl *string `json:"VideoUrl,omitempty" xml:"VideoUrl,omitempty" require:"true"`
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
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *SegmentVideoBodyResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	VideoUrl *string `json:"VideoUrl,omitempty" xml:"VideoUrl,omitempty" require:"true"`
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
	VideoUrlObject io.Reader `json:"VideoUrlObject,omitempty" xml:"VideoUrlObject,omitempty" require:"true"`
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
	JobId *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
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
	RequestId *string                        `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *GetAsyncJobResultResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
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
	JobId        *string `json:"JobId,omitempty" xml:"JobId,omitempty" require:"true"`
	Status       *string `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	Result       *string `json:"Result,omitempty" xml:"Result,omitempty" require:"true"`
	ErrorCode    *string `json:"ErrorCode,omitempty" xml:"ErrorCode,omitempty" require:"true"`
	ErrorMessage *string `json:"ErrorMessage,omitempty" xml:"ErrorMessage,omitempty" require:"true"`
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
	client.EndpointRule = tea.String("regional")
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("videoseg"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) SegmentHalfBody(request *SegmentHalfBodyRequest, runtime *util.RuntimeOptions) (_result *SegmentHalfBodyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SegmentHalfBodyResponse{}
	_body, _err := client.DoRequest(tea.String("SegmentHalfBody"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentHalfBodyAdvance(request *SegmentHalfBodyAdvanceRequest, runtime *util.RuntimeOptions) (_result *SegmentHalfBodyResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("videoseg"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	segmentHalfBodyreq := &SegmentHalfBodyRequest{}
	rpcutil.Convert(request, segmentHalfBodyreq)
	segmentHalfBodyreq.VideoUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentHalfBodyResp, _err := client.SegmentHalfBody(segmentHalfBodyreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = segmentHalfBodyResp
	return _result, _err
}

func (client *Client) SegmentVideoBody(request *SegmentVideoBodyRequest, runtime *util.RuntimeOptions) (_result *SegmentVideoBodyResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &SegmentVideoBodyResponse{}
	_body, _err := client.DoRequest(tea.String("SegmentVideoBody"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SegmentVideoBodyAdvance(request *SegmentVideoBodyAdvanceRequest, runtime *util.RuntimeOptions) (_result *SegmentVideoBodyResponse, _err error) {
	// Step 0: init client
	accessKeyId, _err := client.Credential.GetAccessKeyId()
	if _err != nil {
		return _result, _err
	}

	accessKeySecret, _err := client.Credential.GetAccessKeySecret()
	if _err != nil {
		return _result, _err
	}

	authConfig := &rpc.Config{
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return _result, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("videoseg"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUploadWithOptions(authRequest, runtime)
	if _err != nil {
		return _result, _err
	}

	// Step 1: request OSS api to upload file
	ossConfig := &oss.Config{
		AccessKeyId:     authResponse.AccessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        rpcutil.GetEndpoint(authResponse.Endpoint, authResponse.UseAccelerate, client.EndpointType),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	ossClient, _err := oss.NewClient(ossConfig)
	if _err != nil {
		return _result, _err
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
		return _result, _err
	}
	// Step 2: request final api
	segmentVideoBodyreq := &SegmentVideoBodyRequest{}
	rpcutil.Convert(request, segmentVideoBodyreq)
	segmentVideoBodyreq.VideoUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	segmentVideoBodyResp, _err := client.SegmentVideoBody(segmentVideoBodyreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = segmentVideoBodyResp
	return _result, _err
}

func (client *Client) GetAsyncJobResult(request *GetAsyncJobResultRequest, runtime *util.RuntimeOptions) (_result *GetAsyncJobResultResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetAsyncJobResultResponse{}
	_body, _err := client.DoRequest(tea.String("GetAsyncJobResult"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
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
