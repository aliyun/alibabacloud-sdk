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

type DetectVideoShotRequest struct {
	VideoUrl *string `json:"VideoUrl" xml:"VideoUrl" require:"true"`
}

func (s DetectVideoShotRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectVideoShotRequest) GoString() string {
	return s.String()
}

func (s *DetectVideoShotRequest) SetVideoUrl(v string) *DetectVideoShotRequest {
	s.VideoUrl = &v
	return s
}

type DetectVideoShotResponse struct {
	RequestId *string                      `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *DetectVideoShotResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s DetectVideoShotResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectVideoShotResponse) GoString() string {
	return s.String()
}

func (s *DetectVideoShotResponse) SetRequestId(v string) *DetectVideoShotResponse {
	s.RequestId = &v
	return s
}

func (s *DetectVideoShotResponse) SetData(v *DetectVideoShotResponseData) *DetectVideoShotResponse {
	s.Data = v
	return s
}

type DetectVideoShotResponseData struct {
	ShotFrameIds []*int `json:"ShotFrameIds" xml:"ShotFrameIds" require:"true" type:"Repeated"`
}

func (s DetectVideoShotResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectVideoShotResponseData) GoString() string {
	return s.String()
}

func (s *DetectVideoShotResponseData) SetShotFrameIds(v []*int) *DetectVideoShotResponseData {
	s.ShotFrameIds = v
	return s
}

type DetectVideoShotAdvanceRequest struct {
	VideoUrlObject io.Reader `json:"VideoUrlObject" xml:"VideoUrlObject" require:"true"`
}

func (s DetectVideoShotAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectVideoShotAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectVideoShotAdvanceRequest) SetVideoUrlObject(v io.Reader) *DetectVideoShotAdvanceRequest {
	s.VideoUrlObject = v
	return s
}

type GenerateVideoCoverRequest struct {
	VideoUrl *string `json:"VideoUrl" xml:"VideoUrl" require:"true"`
	IsGif    *bool   `json:"IsGif" xml:"IsGif" require:"true"`
}

func (s GenerateVideoCoverRequest) String() string {
	return tea.Prettify(s)
}

func (s GenerateVideoCoverRequest) GoString() string {
	return s.String()
}

func (s *GenerateVideoCoverRequest) SetVideoUrl(v string) *GenerateVideoCoverRequest {
	s.VideoUrl = &v
	return s
}

func (s *GenerateVideoCoverRequest) SetIsGif(v bool) *GenerateVideoCoverRequest {
	s.IsGif = &v
	return s
}

type GenerateVideoCoverResponse struct {
	RequestId *string                         `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *GenerateVideoCoverResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s GenerateVideoCoverResponse) String() string {
	return tea.Prettify(s)
}

func (s GenerateVideoCoverResponse) GoString() string {
	return s.String()
}

func (s *GenerateVideoCoverResponse) SetRequestId(v string) *GenerateVideoCoverResponse {
	s.RequestId = &v
	return s
}

func (s *GenerateVideoCoverResponse) SetData(v *GenerateVideoCoverResponseData) *GenerateVideoCoverResponse {
	s.Data = v
	return s
}

type GenerateVideoCoverResponseData struct {
	Outputs []*GenerateVideoCoverResponseDataOutputs `json:"Outputs" xml:"Outputs" require:"true" type:"Repeated"`
}

func (s GenerateVideoCoverResponseData) String() string {
	return tea.Prettify(s)
}

func (s GenerateVideoCoverResponseData) GoString() string {
	return s.String()
}

func (s *GenerateVideoCoverResponseData) SetOutputs(v []*GenerateVideoCoverResponseDataOutputs) *GenerateVideoCoverResponseData {
	s.Outputs = v
	return s
}

type GenerateVideoCoverResponseDataOutputs struct {
	ImageURL   *string  `json:"ImageURL" xml:"ImageURL" require:"true"`
	Confidence *float32 `json:"Confidence" xml:"Confidence" require:"true"`
}

func (s GenerateVideoCoverResponseDataOutputs) String() string {
	return tea.Prettify(s)
}

func (s GenerateVideoCoverResponseDataOutputs) GoString() string {
	return s.String()
}

func (s *GenerateVideoCoverResponseDataOutputs) SetImageURL(v string) *GenerateVideoCoverResponseDataOutputs {
	s.ImageURL = &v
	return s
}

func (s *GenerateVideoCoverResponseDataOutputs) SetConfidence(v float32) *GenerateVideoCoverResponseDataOutputs {
	s.Confidence = &v
	return s
}

type GenerateVideoCoverAdvanceRequest struct {
	VideoUrlObject io.Reader `json:"VideoUrlObject" xml:"VideoUrlObject" require:"true"`
	IsGif          *bool     `json:"IsGif" xml:"IsGif" require:"true"`
}

func (s GenerateVideoCoverAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s GenerateVideoCoverAdvanceRequest) GoString() string {
	return s.String()
}

func (s *GenerateVideoCoverAdvanceRequest) SetVideoUrlObject(v io.Reader) *GenerateVideoCoverAdvanceRequest {
	s.VideoUrlObject = v
	return s
}

func (s *GenerateVideoCoverAdvanceRequest) SetIsGif(v bool) *GenerateVideoCoverAdvanceRequest {
	s.IsGif = &v
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

func (client *Client) DetectVideoShot(request *DetectVideoShotRequest, runtime *util.RuntimeOptions) (_result *DetectVideoShotResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectVideoShotResponse{}
	_body, _err := client.DoRequest(tea.String("DetectVideoShot"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectVideoShotAdvance(request *DetectVideoShotAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectVideoShotResponse, _err error) {
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
		Product:  tea.String("videorecog"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
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
	detectVideoShotreq := &DetectVideoShotRequest{}
	rpcutil.Convert(request, detectVideoShotreq)
	detectVideoShotreq.VideoUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectVideoShotResp, _err := client.DetectVideoShot(detectVideoShotreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectVideoShotResp
	return _result, _err
}

func (client *Client) GenerateVideoCover(request *GenerateVideoCoverRequest, runtime *util.RuntimeOptions) (_result *GenerateVideoCoverResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GenerateVideoCoverResponse{}
	_body, _err := client.DoRequest(tea.String("GenerateVideoCover"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GenerateVideoCoverAdvance(request *GenerateVideoCoverAdvanceRequest, runtime *util.RuntimeOptions) (_result *GenerateVideoCoverResponse, _err error) {
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
		Product:  tea.String("videorecog"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
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
	generateVideoCoverreq := &GenerateVideoCoverRequest{}
	rpcutil.Convert(request, generateVideoCoverreq)
	generateVideoCoverreq.VideoUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	generateVideoCoverResp, _err := client.GenerateVideoCover(generateVideoCoverreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = generateVideoCoverResp
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
