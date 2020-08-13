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

type DetectKneeXRayRequest struct {
	Url        *string `json:"Url,omitempty" xml:"Url,omitempty" require:"true"`
	DataFormat *string `json:"DataFormat,omitempty" xml:"DataFormat,omitempty" require:"true"`
}

func (s DetectKneeXRayRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectKneeXRayRequest) GoString() string {
	return s.String()
}

func (s *DetectKneeXRayRequest) SetUrl(v string) *DetectKneeXRayRequest {
	s.Url = &v
	return s
}

func (s *DetectKneeXRayRequest) SetDataFormat(v string) *DetectKneeXRayRequest {
	s.DataFormat = &v
	return s
}

type DetectKneeXRayResponse struct {
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectKneeXRayResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectKneeXRayResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectKneeXRayResponse) GoString() string {
	return s.String()
}

func (s *DetectKneeXRayResponse) SetRequestId(v string) *DetectKneeXRayResponse {
	s.RequestId = &v
	return s
}

func (s *DetectKneeXRayResponse) SetData(v *DetectKneeXRayResponseData) *DetectKneeXRayResponse {
	s.Data = v
	return s
}

type DetectKneeXRayResponseData struct {
	KLDetections []*DetectKneeXRayResponseDataKLDetections `json:"KLDetections,omitempty" xml:"KLDetections,omitempty" require:"true" type:"Repeated"`
}

func (s DetectKneeXRayResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectKneeXRayResponseData) GoString() string {
	return s.String()
}

func (s *DetectKneeXRayResponseData) SetKLDetections(v []*DetectKneeXRayResponseDataKLDetections) *DetectKneeXRayResponseData {
	s.KLDetections = v
	return s
}

type DetectKneeXRayResponseDataKLDetections struct {
	Detections []*float32 `json:"Detections,omitempty" xml:"Detections,omitempty" require:"true" type:"Repeated"`
}

func (s DetectKneeXRayResponseDataKLDetections) String() string {
	return tea.Prettify(s)
}

func (s DetectKneeXRayResponseDataKLDetections) GoString() string {
	return s.String()
}

func (s *DetectKneeXRayResponseDataKLDetections) SetDetections(v []*float32) *DetectKneeXRayResponseDataKLDetections {
	s.Detections = v
	return s
}

type DetectKneeXRayAdvanceRequest struct {
	UrlObject  io.Reader `json:"UrlObject,omitempty" xml:"UrlObject,omitempty" require:"true"`
	DataFormat *string   `json:"DataFormat,omitempty" xml:"DataFormat,omitempty" require:"true"`
}

func (s DetectKneeXRayAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectKneeXRayAdvanceRequest) GoString() string {
	return s.String()
}

func (s *DetectKneeXRayAdvanceRequest) SetUrlObject(v io.Reader) *DetectKneeXRayAdvanceRequest {
	s.UrlObject = v
	return s
}

func (s *DetectKneeXRayAdvanceRequest) SetDataFormat(v string) *DetectKneeXRayAdvanceRequest {
	s.DataFormat = &v
	return s
}

type DetectSpineMRIRequest struct {
	URLList []*DetectSpineMRIRequestURLList `json:"URLList,omitempty" xml:"URLList,omitempty" require:"true" type:"Repeated"`
}

func (s DetectSpineMRIRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectSpineMRIRequest) GoString() string {
	return s.String()
}

func (s *DetectSpineMRIRequest) SetURLList(v []*DetectSpineMRIRequestURLList) *DetectSpineMRIRequest {
	s.URLList = v
	return s
}

type DetectSpineMRIRequestURLList struct {
	URL *string `json:"URL,omitempty" xml:"URL,omitempty" require:"true"`
}

func (s DetectSpineMRIRequestURLList) String() string {
	return tea.Prettify(s)
}

func (s DetectSpineMRIRequestURLList) GoString() string {
	return s.String()
}

func (s *DetectSpineMRIRequestURLList) SetURL(v string) *DetectSpineMRIRequestURLList {
	s.URL = &v
	return s
}

type DetectSpineMRIResponse struct {
	RequestId *string                     `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectSpineMRIResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectSpineMRIResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectSpineMRIResponse) GoString() string {
	return s.String()
}

func (s *DetectSpineMRIResponse) SetRequestId(v string) *DetectSpineMRIResponse {
	s.RequestId = &v
	return s
}

func (s *DetectSpineMRIResponse) SetData(v *DetectSpineMRIResponseData) *DetectSpineMRIResponse {
	s.Data = v
	return s
}

type DetectSpineMRIResponseData struct {
	Discs     []*DetectSpineMRIResponseDataDiscs     `json:"Discs,omitempty" xml:"Discs,omitempty" require:"true" type:"Repeated"`
	Vertebras []*DetectSpineMRIResponseDataVertebras `json:"Vertebras,omitempty" xml:"Vertebras,omitempty" require:"true" type:"Repeated"`
}

func (s DetectSpineMRIResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectSpineMRIResponseData) GoString() string {
	return s.String()
}

func (s *DetectSpineMRIResponseData) SetDiscs(v []*DetectSpineMRIResponseDataDiscs) *DetectSpineMRIResponseData {
	s.Discs = v
	return s
}

func (s *DetectSpineMRIResponseData) SetVertebras(v []*DetectSpineMRIResponseDataVertebras) *DetectSpineMRIResponseData {
	s.Vertebras = v
	return s
}

type DetectSpineMRIResponseDataDiscs struct {
	Disease        *string    `json:"Disease,omitempty" xml:"Disease,omitempty" require:"true"`
	Identification *string    `json:"Identification,omitempty" xml:"Identification,omitempty" require:"true"`
	Location       []*float32 `json:"Location,omitempty" xml:"Location,omitempty" require:"true" type:"Repeated"`
}

func (s DetectSpineMRIResponseDataDiscs) String() string {
	return tea.Prettify(s)
}

func (s DetectSpineMRIResponseDataDiscs) GoString() string {
	return s.String()
}

func (s *DetectSpineMRIResponseDataDiscs) SetDisease(v string) *DetectSpineMRIResponseDataDiscs {
	s.Disease = &v
	return s
}

func (s *DetectSpineMRIResponseDataDiscs) SetIdentification(v string) *DetectSpineMRIResponseDataDiscs {
	s.Identification = &v
	return s
}

func (s *DetectSpineMRIResponseDataDiscs) SetLocation(v []*float32) *DetectSpineMRIResponseDataDiscs {
	s.Location = v
	return s
}

type DetectSpineMRIResponseDataVertebras struct {
	Disease        *string    `json:"Disease,omitempty" xml:"Disease,omitempty" require:"true"`
	Identification *string    `json:"Identification,omitempty" xml:"Identification,omitempty" require:"true"`
	Location       []*float32 `json:"Location,omitempty" xml:"Location,omitempty" require:"true" type:"Repeated"`
}

func (s DetectSpineMRIResponseDataVertebras) String() string {
	return tea.Prettify(s)
}

func (s DetectSpineMRIResponseDataVertebras) GoString() string {
	return s.String()
}

func (s *DetectSpineMRIResponseDataVertebras) SetDisease(v string) *DetectSpineMRIResponseDataVertebras {
	s.Disease = &v
	return s
}

func (s *DetectSpineMRIResponseDataVertebras) SetIdentification(v string) *DetectSpineMRIResponseDataVertebras {
	s.Identification = &v
	return s
}

func (s *DetectSpineMRIResponseDataVertebras) SetLocation(v []*float32) *DetectSpineMRIResponseDataVertebras {
	s.Location = v
	return s
}

type TranslateMedRequest struct {
	FromLanguage *string `json:"FromLanguage,omitempty" xml:"FromLanguage,omitempty" require:"true"`
	ToLanguage   *string `json:"ToLanguage,omitempty" xml:"ToLanguage,omitempty" require:"true"`
	Text         *string `json:"Text,omitempty" xml:"Text,omitempty" require:"true"`
}

func (s TranslateMedRequest) String() string {
	return tea.Prettify(s)
}

func (s TranslateMedRequest) GoString() string {
	return s.String()
}

func (s *TranslateMedRequest) SetFromLanguage(v string) *TranslateMedRequest {
	s.FromLanguage = &v
	return s
}

func (s *TranslateMedRequest) SetToLanguage(v string) *TranslateMedRequest {
	s.ToLanguage = &v
	return s
}

func (s *TranslateMedRequest) SetText(v string) *TranslateMedRequest {
	s.Text = &v
	return s
}

type TranslateMedResponse struct {
	RequestId *string                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *TranslateMedResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s TranslateMedResponse) String() string {
	return tea.Prettify(s)
}

func (s TranslateMedResponse) GoString() string {
	return s.String()
}

func (s *TranslateMedResponse) SetRequestId(v string) *TranslateMedResponse {
	s.RequestId = &v
	return s
}

func (s *TranslateMedResponse) SetData(v *TranslateMedResponseData) *TranslateMedResponse {
	s.Data = v
	return s
}

type TranslateMedResponseData struct {
	Text  *string `json:"Text,omitempty" xml:"Text,omitempty" require:"true"`
	Words *int64  `json:"Words,omitempty" xml:"Words,omitempty" require:"true"`
}

func (s TranslateMedResponseData) String() string {
	return tea.Prettify(s)
}

func (s TranslateMedResponseData) GoString() string {
	return s.String()
}

func (s *TranslateMedResponseData) SetText(v string) *TranslateMedResponseData {
	s.Text = &v
	return s
}

func (s *TranslateMedResponseData) SetWords(v int64) *TranslateMedResponseData {
	s.Words = &v
	return s
}

type DetectLungNoduleRequest struct {
	URLList []*DetectLungNoduleRequestURLList `json:"URLList,omitempty" xml:"URLList,omitempty" require:"true" type:"Repeated"`
}

func (s DetectLungNoduleRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectLungNoduleRequest) GoString() string {
	return s.String()
}

func (s *DetectLungNoduleRequest) SetURLList(v []*DetectLungNoduleRequestURLList) *DetectLungNoduleRequest {
	s.URLList = v
	return s
}

type DetectLungNoduleRequestURLList struct {
	URL *string `json:"URL,omitempty" xml:"URL,omitempty" require:"true"`
}

func (s DetectLungNoduleRequestURLList) String() string {
	return tea.Prettify(s)
}

func (s DetectLungNoduleRequestURLList) GoString() string {
	return s.String()
}

func (s *DetectLungNoduleRequestURLList) SetURL(v string) *DetectLungNoduleRequestURLList {
	s.URL = &v
	return s
}

type DetectLungNoduleResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectLungNoduleResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectLungNoduleResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectLungNoduleResponse) GoString() string {
	return s.String()
}

func (s *DetectLungNoduleResponse) SetRequestId(v string) *DetectLungNoduleResponse {
	s.RequestId = &v
	return s
}

func (s *DetectLungNoduleResponse) SetData(v *DetectLungNoduleResponseData) *DetectLungNoduleResponse {
	s.Data = v
	return s
}

type DetectLungNoduleResponseData struct {
	Series []*DetectLungNoduleResponseDataSeries `json:"Series,omitempty" xml:"Series,omitempty" require:"true" type:"Repeated"`
}

func (s DetectLungNoduleResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectLungNoduleResponseData) GoString() string {
	return s.String()
}

func (s *DetectLungNoduleResponseData) SetSeries(v []*DetectLungNoduleResponseDataSeries) *DetectLungNoduleResponseData {
	s.Series = v
	return s
}

type DetectLungNoduleResponseDataSeries struct {
	SeriesInstanceUid *string                                       `json:"SeriesInstanceUid,omitempty" xml:"SeriesInstanceUid,omitempty" require:"true"`
	Elements          []*DetectLungNoduleResponseDataSeriesElements `json:"Elements,omitempty" xml:"Elements,omitempty" require:"true" type:"Repeated"`
}

func (s DetectLungNoduleResponseDataSeries) String() string {
	return tea.Prettify(s)
}

func (s DetectLungNoduleResponseDataSeries) GoString() string {
	return s.String()
}

func (s *DetectLungNoduleResponseDataSeries) SetSeriesInstanceUid(v string) *DetectLungNoduleResponseDataSeries {
	s.SeriesInstanceUid = &v
	return s
}

func (s *DetectLungNoduleResponseDataSeries) SetElements(v []*DetectLungNoduleResponseDataSeriesElements) *DetectLungNoduleResponseDataSeries {
	s.Elements = v
	return s
}

type DetectLungNoduleResponseDataSeriesElements struct {
	Category   *string  `json:"Category,omitempty" xml:"Category,omitempty" require:"true"`
	Confidence *float32 `json:"Confidence,omitempty" xml:"Confidence,omitempty" require:"true"`
	Diameter   *float32 `json:"Diameter,omitempty" xml:"Diameter,omitempty" require:"true"`
	Lobe       *string  `json:"Lobe,omitempty" xml:"Lobe,omitempty" require:"true"`
	Lung       *string  `json:"Lung,omitempty" xml:"Lung,omitempty" require:"true"`
	X          *float32 `json:"X,omitempty" xml:"X,omitempty" require:"true"`
	Z          *float32 `json:"Z,omitempty" xml:"Z,omitempty" require:"true"`
	Y          *float32 `json:"Y,omitempty" xml:"Y,omitempty" require:"true"`
}

func (s DetectLungNoduleResponseDataSeriesElements) String() string {
	return tea.Prettify(s)
}

func (s DetectLungNoduleResponseDataSeriesElements) GoString() string {
	return s.String()
}

func (s *DetectLungNoduleResponseDataSeriesElements) SetCategory(v string) *DetectLungNoduleResponseDataSeriesElements {
	s.Category = &v
	return s
}

func (s *DetectLungNoduleResponseDataSeriesElements) SetConfidence(v float32) *DetectLungNoduleResponseDataSeriesElements {
	s.Confidence = &v
	return s
}

func (s *DetectLungNoduleResponseDataSeriesElements) SetDiameter(v float32) *DetectLungNoduleResponseDataSeriesElements {
	s.Diameter = &v
	return s
}

func (s *DetectLungNoduleResponseDataSeriesElements) SetLobe(v string) *DetectLungNoduleResponseDataSeriesElements {
	s.Lobe = &v
	return s
}

func (s *DetectLungNoduleResponseDataSeriesElements) SetLung(v string) *DetectLungNoduleResponseDataSeriesElements {
	s.Lung = &v
	return s
}

func (s *DetectLungNoduleResponseDataSeriesElements) SetX(v float32) *DetectLungNoduleResponseDataSeriesElements {
	s.X = &v
	return s
}

func (s *DetectLungNoduleResponseDataSeriesElements) SetZ(v float32) *DetectLungNoduleResponseDataSeriesElements {
	s.Z = &v
	return s
}

func (s *DetectLungNoduleResponseDataSeriesElements) SetY(v float32) *DetectLungNoduleResponseDataSeriesElements {
	s.Y = &v
	return s
}

type DetectCovid19CadRequest struct {
	URLList []*DetectCovid19CadRequestURLList `json:"URLList,omitempty" xml:"URLList,omitempty" require:"true" type:"Repeated"`
}

func (s DetectCovid19CadRequest) String() string {
	return tea.Prettify(s)
}

func (s DetectCovid19CadRequest) GoString() string {
	return s.String()
}

func (s *DetectCovid19CadRequest) SetURLList(v []*DetectCovid19CadRequestURLList) *DetectCovid19CadRequest {
	s.URLList = v
	return s
}

type DetectCovid19CadRequestURLList struct {
	URL *string `json:"URL,omitempty" xml:"URL,omitempty" require:"true"`
}

func (s DetectCovid19CadRequestURLList) String() string {
	return tea.Prettify(s)
}

func (s DetectCovid19CadRequestURLList) GoString() string {
	return s.String()
}

func (s *DetectCovid19CadRequestURLList) SetURL(v string) *DetectCovid19CadRequestURLList {
	s.URL = &v
	return s
}

type DetectCovid19CadResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Data      *DetectCovid19CadResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s DetectCovid19CadResponse) String() string {
	return tea.Prettify(s)
}

func (s DetectCovid19CadResponse) GoString() string {
	return s.String()
}

func (s *DetectCovid19CadResponse) SetRequestId(v string) *DetectCovid19CadResponse {
	s.RequestId = &v
	return s
}

func (s *DetectCovid19CadResponse) SetData(v *DetectCovid19CadResponseData) *DetectCovid19CadResponse {
	s.Data = v
	return s
}

type DetectCovid19CadResponseData struct {
	NewProbability    *string `json:"NewProbability,omitempty" xml:"NewProbability,omitempty" require:"true"`
	NormalProbability *string `json:"NormalProbability,omitempty" xml:"NormalProbability,omitempty" require:"true"`
	OtherProbability  *string `json:"OtherProbability,omitempty" xml:"OtherProbability,omitempty" require:"true"`
	LesionRatio       *string `json:"LesionRatio,omitempty" xml:"LesionRatio,omitempty" require:"true"`
	Mask              *string `json:"Mask,omitempty" xml:"Mask,omitempty" require:"true"`
}

func (s DetectCovid19CadResponseData) String() string {
	return tea.Prettify(s)
}

func (s DetectCovid19CadResponseData) GoString() string {
	return s.String()
}

func (s *DetectCovid19CadResponseData) SetNewProbability(v string) *DetectCovid19CadResponseData {
	s.NewProbability = &v
	return s
}

func (s *DetectCovid19CadResponseData) SetNormalProbability(v string) *DetectCovid19CadResponseData {
	s.NormalProbability = &v
	return s
}

func (s *DetectCovid19CadResponseData) SetOtherProbability(v string) *DetectCovid19CadResponseData {
	s.OtherProbability = &v
	return s
}

func (s *DetectCovid19CadResponseData) SetLesionRatio(v string) *DetectCovid19CadResponseData {
	s.LesionRatio = &v
	return s
}

func (s *DetectCovid19CadResponseData) SetMask(v string) *DetectCovid19CadResponseData {
	s.Mask = &v
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
	client.Endpoint, _err = client.GetEndpoint(tea.String("imageprocess"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) DetectKneeXRay(request *DetectKneeXRayRequest, runtime *util.RuntimeOptions) (_result *DetectKneeXRayResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectKneeXRayResponse{}
	_body, _err := client.DoRequest(tea.String("DetectKneeXRay"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectKneeXRayAdvance(request *DetectKneeXRayAdvanceRequest, runtime *util.RuntimeOptions) (_result *DetectKneeXRayResponse, _err error) {
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
		Product:  tea.String("imageprocess"),
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
		return _result, _err
	}
	// Step 2: request final api
	detectKneeXRayreq := &DetectKneeXRayRequest{}
	rpcutil.Convert(request, detectKneeXRayreq)
	detectKneeXRayreq.Url = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	detectKneeXRayResp, _err := client.DetectKneeXRay(detectKneeXRayreq, runtime)
	if _err != nil {
		return _result, _err
	}

	_result = detectKneeXRayResp
	return _result, _err
}

func (client *Client) DetectSpineMRI(request *DetectSpineMRIRequest, runtime *util.RuntimeOptions) (_result *DetectSpineMRIResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectSpineMRIResponse{}
	_body, _err := client.DoRequest(tea.String("DetectSpineMRI"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) TranslateMed(request *TranslateMedRequest, runtime *util.RuntimeOptions) (_result *TranslateMedResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &TranslateMedResponse{}
	_body, _err := client.DoRequest(tea.String("TranslateMed"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectLungNodule(request *DetectLungNoduleRequest, runtime *util.RuntimeOptions) (_result *DetectLungNoduleResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectLungNoduleResponse{}
	_body, _err := client.DoRequest(tea.String("DetectLungNodule"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DetectCovid19Cad(request *DetectCovid19CadRequest, runtime *util.RuntimeOptions) (_result *DetectCovid19CadResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DetectCovid19CadResponse{}
	_body, _err := client.DoRequest(tea.String("DetectCovid19Cad"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
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
