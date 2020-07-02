// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

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

func (client *Client) DetectLungNoduleWithOptions(request *DetectLungNoduleRequest, runtime *util.RuntimeOptions) (_result *DetectLungNoduleResponse, _err error) {
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

func (client *Client) DetectLungNodule(request *DetectLungNoduleRequest) (_result *DetectLungNoduleResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DetectLungNoduleResponse{}
	_body, _err := client.DetectLungNoduleWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DetectCovid19CadWithOptions(request *DetectCovid19CadRequest, runtime *util.RuntimeOptions) (_result *DetectCovid19CadResponse, _err error) {
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

func (client *Client) DetectCovid19Cad(request *DetectCovid19CadRequest) (_result *DetectCovid19CadResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DetectCovid19CadResponse{}
	_body, _err := client.DetectCovid19CadWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetAsyncJobResultWithOptions(request *GetAsyncJobResultRequest, runtime *util.RuntimeOptions) (_result *GetAsyncJobResultResponse, _err error) {
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

func (client *Client) GetAsyncJobResult(request *GetAsyncJobResultRequest) (_result *GetAsyncJobResultResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetAsyncJobResultResponse{}
	_body, _err := client.GetAsyncJobResultWithOptions(request, runtime)
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
