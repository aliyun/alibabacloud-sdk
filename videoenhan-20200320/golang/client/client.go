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

type SuperResolveVideoRequest struct {
	VideoUrl *string `json:"VideoUrl" xml:"VideoUrl" require:"true"`
	BitRate  *int    `json:"BitRate" xml:"BitRate"`
}

func (s SuperResolveVideoRequest) String() string {
	return tea.Prettify(s)
}

func (s SuperResolveVideoRequest) GoString() string {
	return s.String()
}

func (s *SuperResolveVideoRequest) SetVideoUrl(v string) *SuperResolveVideoRequest {
	s.VideoUrl = &v
	return s
}

func (s *SuperResolveVideoRequest) SetBitRate(v int) *SuperResolveVideoRequest {
	s.BitRate = &v
	return s
}

type SuperResolveVideoResponse struct {
	RequestId *string                        `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *SuperResolveVideoResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s SuperResolveVideoResponse) String() string {
	return tea.Prettify(s)
}

func (s SuperResolveVideoResponse) GoString() string {
	return s.String()
}

func (s *SuperResolveVideoResponse) SetRequestId(v string) *SuperResolveVideoResponse {
	s.RequestId = &v
	return s
}

func (s *SuperResolveVideoResponse) SetData(v *SuperResolveVideoResponseData) *SuperResolveVideoResponse {
	s.Data = v
	return s
}

type SuperResolveVideoResponseData struct {
	VideoUrl *string `json:"VideoUrl" xml:"VideoUrl" require:"true"`
}

func (s SuperResolveVideoResponseData) String() string {
	return tea.Prettify(s)
}

func (s SuperResolveVideoResponseData) GoString() string {
	return s.String()
}

func (s *SuperResolveVideoResponseData) SetVideoUrl(v string) *SuperResolveVideoResponseData {
	s.VideoUrl = &v
	return s
}

type SuperResolveVideoAdvanceRequest struct {
	VideoUrlObject io.Reader `json:"VideoUrlObject" xml:"VideoUrlObject" require:"true"`
	BitRate        *int      `json:"BitRate" xml:"BitRate"`
}

func (s SuperResolveVideoAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s SuperResolveVideoAdvanceRequest) GoString() string {
	return s.String()
}

func (s *SuperResolveVideoAdvanceRequest) SetVideoUrlObject(v io.Reader) *SuperResolveVideoAdvanceRequest {
	s.VideoUrlObject = v
	return s
}

func (s *SuperResolveVideoAdvanceRequest) SetBitRate(v int) *SuperResolveVideoAdvanceRequest {
	s.BitRate = &v
	return s
}

type EraseVideoLogoRequest struct {
	VideoUrl *string                       `json:"VideoUrl" xml:"VideoUrl" require:"true"`
	Boxes    []*EraseVideoLogoRequestBoxes `json:"Boxes" xml:"Boxes" type:"Repeated"`
}

func (s EraseVideoLogoRequest) String() string {
	return tea.Prettify(s)
}

func (s EraseVideoLogoRequest) GoString() string {
	return s.String()
}

func (s *EraseVideoLogoRequest) SetVideoUrl(v string) *EraseVideoLogoRequest {
	s.VideoUrl = &v
	return s
}

func (s *EraseVideoLogoRequest) SetBoxes(v []*EraseVideoLogoRequestBoxes) *EraseVideoLogoRequest {
	s.Boxes = v
	return s
}

type EraseVideoLogoRequestBoxes struct {
	H *float32 `json:"H" xml:"H"`
	W *float32 `json:"W" xml:"W"`
	X *float32 `json:"X" xml:"X"`
	Y *float32 `json:"Y" xml:"Y"`
}

func (s EraseVideoLogoRequestBoxes) String() string {
	return tea.Prettify(s)
}

func (s EraseVideoLogoRequestBoxes) GoString() string {
	return s.String()
}

func (s *EraseVideoLogoRequestBoxes) SetH(v float32) *EraseVideoLogoRequestBoxes {
	s.H = &v
	return s
}

func (s *EraseVideoLogoRequestBoxes) SetW(v float32) *EraseVideoLogoRequestBoxes {
	s.W = &v
	return s
}

func (s *EraseVideoLogoRequestBoxes) SetX(v float32) *EraseVideoLogoRequestBoxes {
	s.X = &v
	return s
}

func (s *EraseVideoLogoRequestBoxes) SetY(v float32) *EraseVideoLogoRequestBoxes {
	s.Y = &v
	return s
}

type EraseVideoLogoResponse struct {
	RequestId *string                     `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *EraseVideoLogoResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s EraseVideoLogoResponse) String() string {
	return tea.Prettify(s)
}

func (s EraseVideoLogoResponse) GoString() string {
	return s.String()
}

func (s *EraseVideoLogoResponse) SetRequestId(v string) *EraseVideoLogoResponse {
	s.RequestId = &v
	return s
}

func (s *EraseVideoLogoResponse) SetData(v *EraseVideoLogoResponseData) *EraseVideoLogoResponse {
	s.Data = v
	return s
}

type EraseVideoLogoResponseData struct {
	VideoUrl *string `json:"VideoUrl" xml:"VideoUrl" require:"true"`
}

func (s EraseVideoLogoResponseData) String() string {
	return tea.Prettify(s)
}

func (s EraseVideoLogoResponseData) GoString() string {
	return s.String()
}

func (s *EraseVideoLogoResponseData) SetVideoUrl(v string) *EraseVideoLogoResponseData {
	s.VideoUrl = &v
	return s
}

type EraseVideoLogoAdvanceRequest struct {
	VideoUrlObject io.Reader                            `json:"VideoUrlObject" xml:"VideoUrlObject" require:"true"`
	Boxes          []*EraseVideoLogoAdvanceRequestBoxes `json:"Boxes" xml:"Boxes" type:"Repeated"`
}

func (s EraseVideoLogoAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s EraseVideoLogoAdvanceRequest) GoString() string {
	return s.String()
}

func (s *EraseVideoLogoAdvanceRequest) SetVideoUrlObject(v io.Reader) *EraseVideoLogoAdvanceRequest {
	s.VideoUrlObject = v
	return s
}

func (s *EraseVideoLogoAdvanceRequest) SetBoxes(v []*EraseVideoLogoAdvanceRequestBoxes) *EraseVideoLogoAdvanceRequest {
	s.Boxes = v
	return s
}

type EraseVideoLogoAdvanceRequestBoxes struct {
	H *float32 `json:"H" xml:"H"`
	W *float32 `json:"W" xml:"W"`
	X *float32 `json:"X" xml:"X"`
	Y *float32 `json:"Y" xml:"Y"`
}

func (s EraseVideoLogoAdvanceRequestBoxes) String() string {
	return tea.Prettify(s)
}

func (s EraseVideoLogoAdvanceRequestBoxes) GoString() string {
	return s.String()
}

func (s *EraseVideoLogoAdvanceRequestBoxes) SetH(v float32) *EraseVideoLogoAdvanceRequestBoxes {
	s.H = &v
	return s
}

func (s *EraseVideoLogoAdvanceRequestBoxes) SetW(v float32) *EraseVideoLogoAdvanceRequestBoxes {
	s.W = &v
	return s
}

func (s *EraseVideoLogoAdvanceRequestBoxes) SetX(v float32) *EraseVideoLogoAdvanceRequestBoxes {
	s.X = &v
	return s
}

func (s *EraseVideoLogoAdvanceRequestBoxes) SetY(v float32) *EraseVideoLogoAdvanceRequestBoxes {
	s.Y = &v
	return s
}

type EraseVideoSubtitlesRequest struct {
	VideoUrl *string  `json:"VideoUrl" xml:"VideoUrl" require:"true"`
	BX       *float32 `json:"BX" xml:"BX"`
	BY       *float32 `json:"BY" xml:"BY"`
	BW       *float32 `json:"BW" xml:"BW"`
	BH       *float32 `json:"BH" xml:"BH"`
}

func (s EraseVideoSubtitlesRequest) String() string {
	return tea.Prettify(s)
}

func (s EraseVideoSubtitlesRequest) GoString() string {
	return s.String()
}

func (s *EraseVideoSubtitlesRequest) SetVideoUrl(v string) *EraseVideoSubtitlesRequest {
	s.VideoUrl = &v
	return s
}

func (s *EraseVideoSubtitlesRequest) SetBX(v float32) *EraseVideoSubtitlesRequest {
	s.BX = &v
	return s
}

func (s *EraseVideoSubtitlesRequest) SetBY(v float32) *EraseVideoSubtitlesRequest {
	s.BY = &v
	return s
}

func (s *EraseVideoSubtitlesRequest) SetBW(v float32) *EraseVideoSubtitlesRequest {
	s.BW = &v
	return s
}

func (s *EraseVideoSubtitlesRequest) SetBH(v float32) *EraseVideoSubtitlesRequest {
	s.BH = &v
	return s
}

type EraseVideoSubtitlesResponse struct {
	RequestId *string                          `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *EraseVideoSubtitlesResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s EraseVideoSubtitlesResponse) String() string {
	return tea.Prettify(s)
}

func (s EraseVideoSubtitlesResponse) GoString() string {
	return s.String()
}

func (s *EraseVideoSubtitlesResponse) SetRequestId(v string) *EraseVideoSubtitlesResponse {
	s.RequestId = &v
	return s
}

func (s *EraseVideoSubtitlesResponse) SetData(v *EraseVideoSubtitlesResponseData) *EraseVideoSubtitlesResponse {
	s.Data = v
	return s
}

type EraseVideoSubtitlesResponseData struct {
	VideoUrl *string `json:"VideoUrl" xml:"VideoUrl" require:"true"`
}

func (s EraseVideoSubtitlesResponseData) String() string {
	return tea.Prettify(s)
}

func (s EraseVideoSubtitlesResponseData) GoString() string {
	return s.String()
}

func (s *EraseVideoSubtitlesResponseData) SetVideoUrl(v string) *EraseVideoSubtitlesResponseData {
	s.VideoUrl = &v
	return s
}

type EraseVideoSubtitlesAdvanceRequest struct {
	VideoUrlObject io.Reader `json:"VideoUrlObject" xml:"VideoUrlObject" require:"true"`
	BX             *float32  `json:"BX" xml:"BX"`
	BY             *float32  `json:"BY" xml:"BY"`
	BW             *float32  `json:"BW" xml:"BW"`
	BH             *float32  `json:"BH" xml:"BH"`
}

func (s EraseVideoSubtitlesAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s EraseVideoSubtitlesAdvanceRequest) GoString() string {
	return s.String()
}

func (s *EraseVideoSubtitlesAdvanceRequest) SetVideoUrlObject(v io.Reader) *EraseVideoSubtitlesAdvanceRequest {
	s.VideoUrlObject = v
	return s
}

func (s *EraseVideoSubtitlesAdvanceRequest) SetBX(v float32) *EraseVideoSubtitlesAdvanceRequest {
	s.BX = &v
	return s
}

func (s *EraseVideoSubtitlesAdvanceRequest) SetBY(v float32) *EraseVideoSubtitlesAdvanceRequest {
	s.BY = &v
	return s
}

func (s *EraseVideoSubtitlesAdvanceRequest) SetBW(v float32) *EraseVideoSubtitlesAdvanceRequest {
	s.BW = &v
	return s
}

func (s *EraseVideoSubtitlesAdvanceRequest) SetBH(v float32) *EraseVideoSubtitlesAdvanceRequest {
	s.BH = &v
	return s
}

type AbstractEcommerceVideoRequest struct {
	VideoUrl *string  `json:"VideoUrl" xml:"VideoUrl" require:"true"`
	Duration *float32 `json:"Duration" xml:"Duration" require:"true"`
	Width    *int     `json:"Width" xml:"Width"`
	Height   *int     `json:"Height" xml:"Height"`
}

func (s AbstractEcommerceVideoRequest) String() string {
	return tea.Prettify(s)
}

func (s AbstractEcommerceVideoRequest) GoString() string {
	return s.String()
}

func (s *AbstractEcommerceVideoRequest) SetVideoUrl(v string) *AbstractEcommerceVideoRequest {
	s.VideoUrl = &v
	return s
}

func (s *AbstractEcommerceVideoRequest) SetDuration(v float32) *AbstractEcommerceVideoRequest {
	s.Duration = &v
	return s
}

func (s *AbstractEcommerceVideoRequest) SetWidth(v int) *AbstractEcommerceVideoRequest {
	s.Width = &v
	return s
}

func (s *AbstractEcommerceVideoRequest) SetHeight(v int) *AbstractEcommerceVideoRequest {
	s.Height = &v
	return s
}

type AbstractEcommerceVideoResponse struct {
	RequestId *string                             `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *AbstractEcommerceVideoResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s AbstractEcommerceVideoResponse) String() string {
	return tea.Prettify(s)
}

func (s AbstractEcommerceVideoResponse) GoString() string {
	return s.String()
}

func (s *AbstractEcommerceVideoResponse) SetRequestId(v string) *AbstractEcommerceVideoResponse {
	s.RequestId = &v
	return s
}

func (s *AbstractEcommerceVideoResponse) SetData(v *AbstractEcommerceVideoResponseData) *AbstractEcommerceVideoResponse {
	s.Data = v
	return s
}

type AbstractEcommerceVideoResponseData struct {
	VideoUrl      *string `json:"VideoUrl" xml:"VideoUrl" require:"true"`
	VideoCoverUrl *string `json:"VideoCoverUrl" xml:"VideoCoverUrl" require:"true"`
}

func (s AbstractEcommerceVideoResponseData) String() string {
	return tea.Prettify(s)
}

func (s AbstractEcommerceVideoResponseData) GoString() string {
	return s.String()
}

func (s *AbstractEcommerceVideoResponseData) SetVideoUrl(v string) *AbstractEcommerceVideoResponseData {
	s.VideoUrl = &v
	return s
}

func (s *AbstractEcommerceVideoResponseData) SetVideoCoverUrl(v string) *AbstractEcommerceVideoResponseData {
	s.VideoCoverUrl = &v
	return s
}

type AbstractEcommerceVideoAdvanceRequest struct {
	VideoUrlObject io.Reader `json:"VideoUrlObject" xml:"VideoUrlObject" require:"true"`
	Duration       *float32  `json:"Duration" xml:"Duration" require:"true"`
	Width          *int      `json:"Width" xml:"Width"`
	Height         *int      `json:"Height" xml:"Height"`
}

func (s AbstractEcommerceVideoAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s AbstractEcommerceVideoAdvanceRequest) GoString() string {
	return s.String()
}

func (s *AbstractEcommerceVideoAdvanceRequest) SetVideoUrlObject(v io.Reader) *AbstractEcommerceVideoAdvanceRequest {
	s.VideoUrlObject = v
	return s
}

func (s *AbstractEcommerceVideoAdvanceRequest) SetDuration(v float32) *AbstractEcommerceVideoAdvanceRequest {
	s.Duration = &v
	return s
}

func (s *AbstractEcommerceVideoAdvanceRequest) SetWidth(v int) *AbstractEcommerceVideoAdvanceRequest {
	s.Width = &v
	return s
}

func (s *AbstractEcommerceVideoAdvanceRequest) SetHeight(v int) *AbstractEcommerceVideoAdvanceRequest {
	s.Height = &v
	return s
}

type AbstractFilmVideoRequest struct {
	VideoUrl *string `json:"VideoUrl" xml:"VideoUrl" require:"true"`
	Length   *int    `json:"Length" xml:"Length" require:"true"`
}

func (s AbstractFilmVideoRequest) String() string {
	return tea.Prettify(s)
}

func (s AbstractFilmVideoRequest) GoString() string {
	return s.String()
}

func (s *AbstractFilmVideoRequest) SetVideoUrl(v string) *AbstractFilmVideoRequest {
	s.VideoUrl = &v
	return s
}

func (s *AbstractFilmVideoRequest) SetLength(v int) *AbstractFilmVideoRequest {
	s.Length = &v
	return s
}

type AbstractFilmVideoResponse struct {
	RequestId *string                        `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *AbstractFilmVideoResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s AbstractFilmVideoResponse) String() string {
	return tea.Prettify(s)
}

func (s AbstractFilmVideoResponse) GoString() string {
	return s.String()
}

func (s *AbstractFilmVideoResponse) SetRequestId(v string) *AbstractFilmVideoResponse {
	s.RequestId = &v
	return s
}

func (s *AbstractFilmVideoResponse) SetData(v *AbstractFilmVideoResponseData) *AbstractFilmVideoResponse {
	s.Data = v
	return s
}

type AbstractFilmVideoResponseData struct {
	VideoUrl *string `json:"VideoUrl" xml:"VideoUrl" require:"true"`
}

func (s AbstractFilmVideoResponseData) String() string {
	return tea.Prettify(s)
}

func (s AbstractFilmVideoResponseData) GoString() string {
	return s.String()
}

func (s *AbstractFilmVideoResponseData) SetVideoUrl(v string) *AbstractFilmVideoResponseData {
	s.VideoUrl = &v
	return s
}

type AbstractFilmVideoAdvanceRequest struct {
	VideoUrlObject io.Reader `json:"VideoUrlObject" xml:"VideoUrlObject" require:"true"`
	Length         *int      `json:"Length" xml:"Length" require:"true"`
}

func (s AbstractFilmVideoAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s AbstractFilmVideoAdvanceRequest) GoString() string {
	return s.String()
}

func (s *AbstractFilmVideoAdvanceRequest) SetVideoUrlObject(v io.Reader) *AbstractFilmVideoAdvanceRequest {
	s.VideoUrlObject = v
	return s
}

func (s *AbstractFilmVideoAdvanceRequest) SetLength(v int) *AbstractFilmVideoAdvanceRequest {
	s.Length = &v
	return s
}

type AdjustVideoColorRequest struct {
	VideoUrl     *string `json:"VideoUrl" xml:"VideoUrl" require:"true"`
	VideoBitrate *string `json:"VideoBitrate" xml:"VideoBitrate"`
	VideoCodec   *string `json:"VideoCodec" xml:"VideoCodec"`
	VideoFormat  *string `json:"VideoFormat" xml:"VideoFormat"`
	Mode         *string `json:"Mode" xml:"Mode" require:"true"`
}

func (s AdjustVideoColorRequest) String() string {
	return tea.Prettify(s)
}

func (s AdjustVideoColorRequest) GoString() string {
	return s.String()
}

func (s *AdjustVideoColorRequest) SetVideoUrl(v string) *AdjustVideoColorRequest {
	s.VideoUrl = &v
	return s
}

func (s *AdjustVideoColorRequest) SetVideoBitrate(v string) *AdjustVideoColorRequest {
	s.VideoBitrate = &v
	return s
}

func (s *AdjustVideoColorRequest) SetVideoCodec(v string) *AdjustVideoColorRequest {
	s.VideoCodec = &v
	return s
}

func (s *AdjustVideoColorRequest) SetVideoFormat(v string) *AdjustVideoColorRequest {
	s.VideoFormat = &v
	return s
}

func (s *AdjustVideoColorRequest) SetMode(v string) *AdjustVideoColorRequest {
	s.Mode = &v
	return s
}

type AdjustVideoColorResponse struct {
	RequestId *string                       `json:"RequestId" xml:"RequestId" require:"true"`
	Data      *AdjustVideoColorResponseData `json:"Data" xml:"Data" require:"true" type:"Struct"`
}

func (s AdjustVideoColorResponse) String() string {
	return tea.Prettify(s)
}

func (s AdjustVideoColorResponse) GoString() string {
	return s.String()
}

func (s *AdjustVideoColorResponse) SetRequestId(v string) *AdjustVideoColorResponse {
	s.RequestId = &v
	return s
}

func (s *AdjustVideoColorResponse) SetData(v *AdjustVideoColorResponseData) *AdjustVideoColorResponse {
	s.Data = v
	return s
}

type AdjustVideoColorResponseData struct {
	VideoUrl *string `json:"VideoUrl" xml:"VideoUrl" require:"true"`
}

func (s AdjustVideoColorResponseData) String() string {
	return tea.Prettify(s)
}

func (s AdjustVideoColorResponseData) GoString() string {
	return s.String()
}

func (s *AdjustVideoColorResponseData) SetVideoUrl(v string) *AdjustVideoColorResponseData {
	s.VideoUrl = &v
	return s
}

type AdjustVideoColorAdvanceRequest struct {
	VideoUrlObject io.Reader `json:"VideoUrlObject" xml:"VideoUrlObject" require:"true"`
	VideoBitrate   *string   `json:"VideoBitrate" xml:"VideoBitrate"`
	VideoCodec     *string   `json:"VideoCodec" xml:"VideoCodec"`
	VideoFormat    *string   `json:"VideoFormat" xml:"VideoFormat"`
	Mode           *string   `json:"Mode" xml:"Mode" require:"true"`
}

func (s AdjustVideoColorAdvanceRequest) String() string {
	return tea.Prettify(s)
}

func (s AdjustVideoColorAdvanceRequest) GoString() string {
	return s.String()
}

func (s *AdjustVideoColorAdvanceRequest) SetVideoUrlObject(v io.Reader) *AdjustVideoColorAdvanceRequest {
	s.VideoUrlObject = v
	return s
}

func (s *AdjustVideoColorAdvanceRequest) SetVideoBitrate(v string) *AdjustVideoColorAdvanceRequest {
	s.VideoBitrate = &v
	return s
}

func (s *AdjustVideoColorAdvanceRequest) SetVideoCodec(v string) *AdjustVideoColorAdvanceRequest {
	s.VideoCodec = &v
	return s
}

func (s *AdjustVideoColorAdvanceRequest) SetVideoFormat(v string) *AdjustVideoColorAdvanceRequest {
	s.VideoFormat = &v
	return s
}

func (s *AdjustVideoColorAdvanceRequest) SetMode(v string) *AdjustVideoColorAdvanceRequest {
	s.Mode = &v
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
		return
	}
	client.Endpoint, _err = client.GetEndpoint(client.ProductId, client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) GetAsyncJobResult(request *GetAsyncJobResultRequest, runtime *util.RuntimeOptions) (_result *GetAsyncJobResultResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &GetAsyncJobResultResponse{}
	_body, _err := client.DoRequest(tea.String("GetAsyncJobResult"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SuperResolveVideo(request *SuperResolveVideoRequest, runtime *util.RuntimeOptions) (_result *SuperResolveVideoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &SuperResolveVideoResponse{}
	_body, _err := client.DoRequest(tea.String("SuperResolveVideo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) SuperResolveVideoAdvance(request *SuperResolveVideoAdvanceRequest, runtime *util.RuntimeOptions) (_result *SuperResolveVideoResponse, _err error) {
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
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("videoenhan"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
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
	superResolveVideoreq := &SuperResolveVideoRequest{}
	rpcutil.Convert(request, superResolveVideoreq)
	superResolveVideoreq.VideoUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	superResolveVideoResp, _err := client.SuperResolveVideo(superResolveVideoreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = superResolveVideoResp
	return _result, _err
}

func (client *Client) EraseVideoLogo(request *EraseVideoLogoRequest, runtime *util.RuntimeOptions) (_result *EraseVideoLogoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &EraseVideoLogoResponse{}
	_body, _err := client.DoRequest(tea.String("EraseVideoLogo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) EraseVideoLogoAdvance(request *EraseVideoLogoAdvanceRequest, runtime *util.RuntimeOptions) (_result *EraseVideoLogoResponse, _err error) {
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
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("videoenhan"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
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
	eraseVideoLogoreq := &EraseVideoLogoRequest{}
	rpcutil.Convert(request, eraseVideoLogoreq)
	eraseVideoLogoreq.VideoUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	eraseVideoLogoResp, _err := client.EraseVideoLogo(eraseVideoLogoreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = eraseVideoLogoResp
	return _result, _err
}

func (client *Client) EraseVideoSubtitles(request *EraseVideoSubtitlesRequest, runtime *util.RuntimeOptions) (_result *EraseVideoSubtitlesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &EraseVideoSubtitlesResponse{}
	_body, _err := client.DoRequest(tea.String("EraseVideoSubtitles"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) EraseVideoSubtitlesAdvance(request *EraseVideoSubtitlesAdvanceRequest, runtime *util.RuntimeOptions) (_result *EraseVideoSubtitlesResponse, _err error) {
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
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("videoenhan"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
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
	eraseVideoSubtitlesreq := &EraseVideoSubtitlesRequest{}
	rpcutil.Convert(request, eraseVideoSubtitlesreq)
	eraseVideoSubtitlesreq.VideoUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	eraseVideoSubtitlesResp, _err := client.EraseVideoSubtitles(eraseVideoSubtitlesreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = eraseVideoSubtitlesResp
	return _result, _err
}

func (client *Client) AbstractEcommerceVideo(request *AbstractEcommerceVideoRequest, runtime *util.RuntimeOptions) (_result *AbstractEcommerceVideoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &AbstractEcommerceVideoResponse{}
	_body, _err := client.DoRequest(tea.String("AbstractEcommerceVideo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AbstractEcommerceVideoAdvance(request *AbstractEcommerceVideoAdvanceRequest, runtime *util.RuntimeOptions) (_result *AbstractEcommerceVideoResponse, _err error) {
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
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("videoenhan"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
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
	abstractEcommerceVideoreq := &AbstractEcommerceVideoRequest{}
	rpcutil.Convert(request, abstractEcommerceVideoreq)
	abstractEcommerceVideoreq.VideoUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	abstractEcommerceVideoResp, _err := client.AbstractEcommerceVideo(abstractEcommerceVideoreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = abstractEcommerceVideoResp
	return _result, _err
}

func (client *Client) AbstractFilmVideo(request *AbstractFilmVideoRequest, runtime *util.RuntimeOptions) (_result *AbstractFilmVideoResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &AbstractFilmVideoResponse{}
	_body, _err := client.DoRequest(tea.String("AbstractFilmVideo"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AbstractFilmVideoAdvance(request *AbstractFilmVideoAdvanceRequest, runtime *util.RuntimeOptions) (_result *AbstractFilmVideoResponse, _err error) {
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
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("videoenhan"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
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
	abstractFilmVideoreq := &AbstractFilmVideoRequest{}
	rpcutil.Convert(request, abstractFilmVideoreq)
	abstractFilmVideoreq.VideoUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	abstractFilmVideoResp, _err := client.AbstractFilmVideo(abstractFilmVideoreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = abstractFilmVideoResp
	return _result, _err
}

func (client *Client) AdjustVideoColor(request *AdjustVideoColorRequest, runtime *util.RuntimeOptions) (_result *AdjustVideoColorResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return
	}
	_result = &AdjustVideoColorResponse{}
	_body, _err := client.DoRequest(tea.String("AdjustVideoColor"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-03-20"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return nil, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AdjustVideoColorAdvance(request *AdjustVideoColorAdvanceRequest, runtime *util.RuntimeOptions) (_result *AdjustVideoColorResponse, _err error) {
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
		AccessKeyId:     accessKeyId,
		AccessKeySecret: accessKeySecret,
		Type:            tea.String("access_key"),
		Endpoint:        tea.String("openplatform.aliyuncs.com"),
		Protocol:        client.Protocol,
		RegionId:        client.RegionId,
	}
	authClient, _err := openplatform.NewClient(authConfig)
	if _err != nil {
		return nil, _err
	}

	authRequest := &openplatform.AuthorizeFileUploadRequest{
		Product:  tea.String("videoenhan"),
		RegionId: client.RegionId,
	}
	authResponse, _err := authClient.AuthorizeFileUpload(authRequest, runtime)
	if _err != nil {
		return nil, _err
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
	adjustVideoColorreq := &AdjustVideoColorRequest{}
	rpcutil.Convert(request, adjustVideoColorreq)
	adjustVideoColorreq.VideoUrl = tea.String("http://" + tea.StringValue(authResponse.Bucket) + "." + tea.StringValue(authResponse.Endpoint) + "/" + tea.StringValue(authResponse.ObjectKey))
	adjustVideoColorResp, _err := client.AdjustVideoColor(adjustVideoColorreq, runtime)
	if _err != nil {
		return nil, _err
	}

	_result = adjustVideoColorResp
	return _result, _err
}

func (client *Client) GetEndpoint(productId *string, regionId *string, endpointRule *string, network *string, suffix *string, endpointMap map[string]string, endpoint *string) (_result *string, _err error) {
	if !tea.BoolValue(util.Empty(endpoint)) {
		_result = endpoint
		return _result, _err
	}

	if !tea.BoolValue(util.IsUnset(endpointMap)) && !tea.BoolValue(util.Empty(tea.String(endpointMap[tea.StringValue(regionId)]))) {
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
