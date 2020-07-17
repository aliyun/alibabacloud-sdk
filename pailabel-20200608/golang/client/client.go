// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type GetDatasetRequest struct {
	DatasetId *int64 `json:"DatasetId,omitempty" xml:"DatasetId,omitempty" require:"true"`
}

func (s GetDatasetRequest) String() string {
	return tea.Prettify(s)
}

func (s GetDatasetRequest) GoString() string {
	return s.String()
}

func (s *GetDatasetRequest) SetDatasetId(v int64) *GetDatasetRequest {
	s.DatasetId = &v
	return s
}

type GetDatasetResponse struct {
	RequestId *string                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrMsg    *string                 `json:"ErrMsg,omitempty" xml:"ErrMsg,omitempty" require:"true"`
	ErrCode   *int                    `json:"ErrCode,omitempty" xml:"ErrCode,omitempty" require:"true"`
	Success   *bool                   `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                 `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Data      *GetDatasetResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s GetDatasetResponse) String() string {
	return tea.Prettify(s)
}

func (s GetDatasetResponse) GoString() string {
	return s.String()
}

func (s *GetDatasetResponse) SetRequestId(v string) *GetDatasetResponse {
	s.RequestId = &v
	return s
}

func (s *GetDatasetResponse) SetErrMsg(v string) *GetDatasetResponse {
	s.ErrMsg = &v
	return s
}

func (s *GetDatasetResponse) SetErrCode(v int) *GetDatasetResponse {
	s.ErrCode = &v
	return s
}

func (s *GetDatasetResponse) SetSuccess(v bool) *GetDatasetResponse {
	s.Success = &v
	return s
}

func (s *GetDatasetResponse) SetCode(v string) *GetDatasetResponse {
	s.Code = &v
	return s
}

func (s *GetDatasetResponse) SetData(v *GetDatasetResponseData) *GetDatasetResponse {
	s.Data = v
	return s
}

type GetDatasetResponseData struct {
	Id             *int64                   `json:"Id,omitempty" xml:"Id,omitempty" require:"true"`
	UserId         *string                  `json:"UserId,omitempty" xml:"UserId,omitempty" require:"true"`
	OwnerId        *string                  `json:"OwnerId,omitempty" xml:"OwnerId,omitempty" require:"true"`
	Name           *string                  `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	StorageType    *string                  `json:"StorageType,omitempty" xml:"StorageType,omitempty" require:"true"`
	RegisterType   *string                  `json:"RegisterType,omitempty" xml:"RegisterType,omitempty" require:"true"`
	StoragePath    *string                  `json:"StoragePath,omitempty" xml:"StoragePath,omitempty" require:"true"`
	DataType       *string                  `json:"DataType,omitempty" xml:"DataType,omitempty" require:"true"`
	SourcePath     *string                  `json:"SourcePath,omitempty" xml:"SourcePath,omitempty" require:"true"`
	Status         *string                  `json:"Status,omitempty" xml:"Status,omitempty" require:"true"`
	GmtCreate      *string                  `json:"GmtCreate,omitempty" xml:"GmtCreate,omitempty" require:"true"`
	UtcCreate      *string                  `json:"UtcCreate,omitempty" xml:"UtcCreate,omitempty" require:"true"`
	GmtModified    *string                  `json:"GmtModified,omitempty" xml:"GmtModified,omitempty" require:"true"`
	UtcModified    *int64                   `json:"UtcModified,omitempty" xml:"UtcModified,omitempty" require:"true"`
	Uid            *string                  `json:"Uid,omitempty" xml:"Uid,omitempty" require:"true"`
	TaskId         *int64                   `json:"TaskId,omitempty" xml:"TaskId,omitempty" require:"true"`
	TmpDownloadUrl *string                  `json:"TmpDownloadUrl,omitempty" xml:"TmpDownloadUrl,omitempty" require:"true"`
	Tags           []map[string]interface{} `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Repeated"`
}

func (s GetDatasetResponseData) String() string {
	return tea.Prettify(s)
}

func (s GetDatasetResponseData) GoString() string {
	return s.String()
}

func (s *GetDatasetResponseData) SetId(v int64) *GetDatasetResponseData {
	s.Id = &v
	return s
}

func (s *GetDatasetResponseData) SetUserId(v string) *GetDatasetResponseData {
	s.UserId = &v
	return s
}

func (s *GetDatasetResponseData) SetOwnerId(v string) *GetDatasetResponseData {
	s.OwnerId = &v
	return s
}

func (s *GetDatasetResponseData) SetName(v string) *GetDatasetResponseData {
	s.Name = &v
	return s
}

func (s *GetDatasetResponseData) SetStorageType(v string) *GetDatasetResponseData {
	s.StorageType = &v
	return s
}

func (s *GetDatasetResponseData) SetRegisterType(v string) *GetDatasetResponseData {
	s.RegisterType = &v
	return s
}

func (s *GetDatasetResponseData) SetStoragePath(v string) *GetDatasetResponseData {
	s.StoragePath = &v
	return s
}

func (s *GetDatasetResponseData) SetDataType(v string) *GetDatasetResponseData {
	s.DataType = &v
	return s
}

func (s *GetDatasetResponseData) SetSourcePath(v string) *GetDatasetResponseData {
	s.SourcePath = &v
	return s
}

func (s *GetDatasetResponseData) SetStatus(v string) *GetDatasetResponseData {
	s.Status = &v
	return s
}

func (s *GetDatasetResponseData) SetGmtCreate(v string) *GetDatasetResponseData {
	s.GmtCreate = &v
	return s
}

func (s *GetDatasetResponseData) SetUtcCreate(v string) *GetDatasetResponseData {
	s.UtcCreate = &v
	return s
}

func (s *GetDatasetResponseData) SetGmtModified(v string) *GetDatasetResponseData {
	s.GmtModified = &v
	return s
}

func (s *GetDatasetResponseData) SetUtcModified(v int64) *GetDatasetResponseData {
	s.UtcModified = &v
	return s
}

func (s *GetDatasetResponseData) SetUid(v string) *GetDatasetResponseData {
	s.Uid = &v
	return s
}

func (s *GetDatasetResponseData) SetTaskId(v int64) *GetDatasetResponseData {
	s.TaskId = &v
	return s
}

func (s *GetDatasetResponseData) SetTmpDownloadUrl(v string) *GetDatasetResponseData {
	s.TmpDownloadUrl = &v
	return s
}

func (s *GetDatasetResponseData) SetTags(v []map[string]interface{}) *GetDatasetResponseData {
	s.Tags = v
	return s
}

type ListDatasetsRequest struct {
	PageNumber *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	PageSize   *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	NameLike   *string `json:"NameLike,omitempty" xml:"NameLike,omitempty"`
}

func (s ListDatasetsRequest) String() string {
	return tea.Prettify(s)
}

func (s ListDatasetsRequest) GoString() string {
	return s.String()
}

func (s *ListDatasetsRequest) SetPageNumber(v int) *ListDatasetsRequest {
	s.PageNumber = &v
	return s
}

func (s *ListDatasetsRequest) SetPageSize(v int) *ListDatasetsRequest {
	s.PageSize = &v
	return s
}

func (s *ListDatasetsRequest) SetNameLike(v string) *ListDatasetsRequest {
	s.NameLike = &v
	return s
}

type ListDatasetsResponse struct {
	RequestId *string                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ErrMsg    *string                   `json:"ErrMsg,omitempty" xml:"ErrMsg,omitempty" require:"true"`
	ErrCode   *int                      `json:"ErrCode,omitempty" xml:"ErrCode,omitempty" require:"true"`
	Success   *bool                     `json:"Success,omitempty" xml:"Success,omitempty" require:"true"`
	Code      *string                   `json:"Code,omitempty" xml:"Code,omitempty" require:"true"`
	Data      *ListDatasetsResponseData `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Struct"`
}

func (s ListDatasetsResponse) String() string {
	return tea.Prettify(s)
}

func (s ListDatasetsResponse) GoString() string {
	return s.String()
}

func (s *ListDatasetsResponse) SetRequestId(v string) *ListDatasetsResponse {
	s.RequestId = &v
	return s
}

func (s *ListDatasetsResponse) SetErrMsg(v string) *ListDatasetsResponse {
	s.ErrMsg = &v
	return s
}

func (s *ListDatasetsResponse) SetErrCode(v int) *ListDatasetsResponse {
	s.ErrCode = &v
	return s
}

func (s *ListDatasetsResponse) SetSuccess(v bool) *ListDatasetsResponse {
	s.Success = &v
	return s
}

func (s *ListDatasetsResponse) SetCode(v string) *ListDatasetsResponse {
	s.Code = &v
	return s
}

func (s *ListDatasetsResponse) SetData(v *ListDatasetsResponseData) *ListDatasetsResponse {
	s.Data = v
	return s
}

type ListDatasetsResponseData struct {
	PageIndex  *int                     `json:"PageIndex,omitempty" xml:"PageIndex,omitempty" require:"true"`
	PageSize   *int                     `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	TotalNum   *int                     `json:"TotalNum,omitempty" xml:"TotalNum,omitempty" require:"true"`
	TotalPages *int                     `json:"TotalPages,omitempty" xml:"TotalPages,omitempty" require:"true"`
	Data       []map[string]interface{} `json:"Data,omitempty" xml:"Data,omitempty" require:"true" type:"Repeated"`
}

func (s ListDatasetsResponseData) String() string {
	return tea.Prettify(s)
}

func (s ListDatasetsResponseData) GoString() string {
	return s.String()
}

func (s *ListDatasetsResponseData) SetPageIndex(v int) *ListDatasetsResponseData {
	s.PageIndex = &v
	return s
}

func (s *ListDatasetsResponseData) SetPageSize(v int) *ListDatasetsResponseData {
	s.PageSize = &v
	return s
}

func (s *ListDatasetsResponseData) SetTotalNum(v int) *ListDatasetsResponseData {
	s.TotalNum = &v
	return s
}

func (s *ListDatasetsResponseData) SetTotalPages(v int) *ListDatasetsResponseData {
	s.TotalPages = &v
	return s
}

func (s *ListDatasetsResponseData) SetData(v []map[string]interface{}) *ListDatasetsResponseData {
	s.Data = v
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
	client.Endpoint, _err = client.GetEndpoint(tea.String("pailabel"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) GetDatasetWithOptions(request *GetDatasetRequest, runtime *util.RuntimeOptions) (_result *GetDatasetResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &GetDatasetResponse{}
	_body, _err := client.DoRequest(tea.String("GetDataset"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-06-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) GetDataset(request *GetDatasetRequest) (_result *GetDatasetResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &GetDatasetResponse{}
	_body, _err := client.GetDatasetWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ListDatasetsWithOptions(request *ListDatasetsRequest, runtime *util.RuntimeOptions) (_result *ListDatasetsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ListDatasetsResponse{}
	_body, _err := client.DoRequest(tea.String("ListDatasets"), tea.String("HTTPS"), tea.String("POST"), tea.String("2020-06-08"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ListDatasets(request *ListDatasetsRequest) (_result *ListDatasetsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ListDatasetsResponse{}
	_body, _err := client.ListDatasetsWithOptions(request, runtime)
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
