// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Dataworks_public20200518.Models;

namespace AlibabaCloud.SDK.Dataworks_public20200518
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            this._endpointMap = new Dictionary<string, string>
            {
                {"ap-northeast-1", "dataworks.ap-northeast-1.aliyuncs.com"},
                {"ap-south-1", "dataworks.ap-south-1.aliyuncs.com"},
                {"ap-southeast-1", "dataworks.ap-southeast-1.aliyuncs.com"},
                {"ap-southeast-2", "dataworks.ap-southeast-2.aliyuncs.com"},
                {"ap-southeast-3", "dataworks.ap-southeast-3.aliyuncs.com"},
                {"ap-southeast-5", "dataworks.ap-southeast-5.aliyuncs.com"},
                {"cn-beijing", "dataworks.cn-beijing.aliyuncs.com"},
                {"cn-chengdu", "dataworks.cn-chengdu.aliyuncs.com"},
                {"cn-hangzhou", "dataworks.cn-hangzhou.aliyuncs.com"},
                {"cn-hongkong", "dataworks.cn-hongkong.aliyuncs.com"},
                {"cn-huhehaote", "dataworks.aliyuncs.com"},
                {"cn-qingdao", "dataworks.aliyuncs.com"},
                {"cn-shanghai", "dataworks.cn-shanghai.aliyuncs.com"},
                {"cn-shenzhen", "dataworks.cn-shenzhen.aliyuncs.com"},
                {"cn-zhangjiakou", "dataworks.aliyuncs.com"},
                {"eu-central-1", "dataworks.eu-central-1.aliyuncs.com"},
                {"eu-west-1", "dataworks.eu-west-1.aliyuncs.com"},
                {"me-east-1", "dataworks.me-east-1.aliyuncs.com"},
                {"us-east-1", "dataworks.us-east-1.aliyuncs.com"},
                {"us-west-1", "dataworks.us-west-1.aliyuncs.com"},
                {"cn-hangzhou-finance", "dataworks.aliyuncs.com"},
                {"cn-shenzhen-finance-1", "dataworks.aliyuncs.com"},
                {"cn-shanghai-finance-1", "dataworks.aliyuncs.com"},
                {"cn-north-2-gov-1", "dataworks.aliyuncs.com"},
            };
            CheckConfig(config);
            this._endpoint = GetEndpoint("dataworks-public", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public ListCalcEnginesResponse ListCalcEnginesWithOptions(ListCalcEnginesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListCalcEnginesResponse>(DoRequest("ListCalcEngines", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListCalcEnginesResponse> ListCalcEnginesWithOptionsAsync(ListCalcEnginesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListCalcEnginesResponse>(await DoRequestAsync("ListCalcEngines", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListCalcEnginesResponse ListCalcEngines(ListCalcEnginesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListCalcEnginesWithOptions(request, runtime);
        }

        public async Task<ListCalcEnginesResponse> ListCalcEnginesAsync(ListCalcEnginesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListCalcEnginesWithOptionsAsync(request, runtime);
        }

        public ListConnectionsResponse ListConnectionsWithOptions(ListConnectionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListConnectionsResponse>(DoRequest("ListConnections", "HTTPS", "GET", "2020-05-18", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ListConnectionsResponse> ListConnectionsWithOptionsAsync(ListConnectionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListConnectionsResponse>(await DoRequestAsync("ListConnections", "HTTPS", "GET", "2020-05-18", "AK", request.ToMap(), null, runtime));
        }

        public ListConnectionsResponse ListConnections(ListConnectionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListConnectionsWithOptions(request, runtime);
        }

        public async Task<ListConnectionsResponse> ListConnectionsAsync(ListConnectionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListConnectionsWithOptionsAsync(request, runtime);
        }

        public UpdateConnectionResponse UpdateConnectionWithOptions(UpdateConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateConnectionResponse>(DoRequest("UpdateConnection", "HTTPS", "PUT", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateConnectionResponse> UpdateConnectionWithOptionsAsync(UpdateConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateConnectionResponse>(await DoRequestAsync("UpdateConnection", "HTTPS", "PUT", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public UpdateConnectionResponse UpdateConnection(UpdateConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateConnectionWithOptions(request, runtime);
        }

        public async Task<UpdateConnectionResponse> UpdateConnectionAsync(UpdateConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateConnectionWithOptionsAsync(request, runtime);
        }

        public DeleteConnectionResponse DeleteConnectionWithOptions(DeleteConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteConnectionResponse>(DoRequest("DeleteConnection", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteConnectionResponse> DeleteConnectionWithOptionsAsync(DeleteConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteConnectionResponse>(await DoRequestAsync("DeleteConnection", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public DeleteConnectionResponse DeleteConnection(DeleteConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteConnectionWithOptions(request, runtime);
        }

        public async Task<DeleteConnectionResponse> DeleteConnectionAsync(DeleteConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteConnectionWithOptionsAsync(request, runtime);
        }

        public GetProjectDetailResponse GetProjectDetailWithOptions(GetProjectDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetProjectDetailResponse>(DoRequest("GetProjectDetail", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetProjectDetailResponse> GetProjectDetailWithOptionsAsync(GetProjectDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetProjectDetailResponse>(await DoRequestAsync("GetProjectDetail", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetProjectDetailResponse GetProjectDetail(GetProjectDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetProjectDetailWithOptions(request, runtime);
        }

        public async Task<GetProjectDetailResponse> GetProjectDetailAsync(GetProjectDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetProjectDetailWithOptionsAsync(request, runtime);
        }

        public ListResourceGroupsResponse ListResourceGroupsWithOptions(ListResourceGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListResourceGroupsResponse>(DoRequest("ListResourceGroups", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListResourceGroupsResponse> ListResourceGroupsWithOptionsAsync(ListResourceGroupsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListResourceGroupsResponse>(await DoRequestAsync("ListResourceGroups", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListResourceGroupsResponse ListResourceGroups(ListResourceGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListResourceGroupsWithOptions(request, runtime);
        }

        public async Task<ListResourceGroupsResponse> ListResourceGroupsAsync(ListResourceGroupsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListResourceGroupsWithOptionsAsync(request, runtime);
        }

        public CreateConnectionResponse CreateConnectionWithOptions(CreateConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateConnectionResponse>(DoRequest("CreateConnection", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateConnectionResponse> CreateConnectionWithOptionsAsync(CreateConnectionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateConnectionResponse>(await DoRequestAsync("CreateConnection", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CreateConnectionResponse CreateConnection(CreateConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateConnectionWithOptions(request, runtime);
        }

        public async Task<CreateConnectionResponse> CreateConnectionAsync(CreateConnectionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateConnectionWithOptionsAsync(request, runtime);
        }

        public GetDataServiceApplicationResponse GetDataServiceApplicationWithOptions(GetDataServiceApplicationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDataServiceApplicationResponse>(DoRequest("GetDataServiceApplication", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetDataServiceApplicationResponse> GetDataServiceApplicationWithOptionsAsync(GetDataServiceApplicationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDataServiceApplicationResponse>(await DoRequestAsync("GetDataServiceApplication", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetDataServiceApplicationResponse GetDataServiceApplication(GetDataServiceApplicationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetDataServiceApplicationWithOptions(request, runtime);
        }

        public async Task<GetDataServiceApplicationResponse> GetDataServiceApplicationAsync(GetDataServiceApplicationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetDataServiceApplicationWithOptionsAsync(request, runtime);
        }

        public ListDataServiceApplicationsResponse ListDataServiceApplicationsWithOptions(ListDataServiceApplicationsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDataServiceApplicationsResponse>(DoRequest("ListDataServiceApplications", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListDataServiceApplicationsResponse> ListDataServiceApplicationsWithOptionsAsync(ListDataServiceApplicationsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDataServiceApplicationsResponse>(await DoRequestAsync("ListDataServiceApplications", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListDataServiceApplicationsResponse ListDataServiceApplications(ListDataServiceApplicationsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListDataServiceApplicationsWithOptions(request, runtime);
        }

        public async Task<ListDataServiceApplicationsResponse> ListDataServiceApplicationsAsync(ListDataServiceApplicationsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListDataServiceApplicationsWithOptionsAsync(request, runtime);
        }

        public GetNodeOnBaselineResponse GetNodeOnBaselineWithOptions(GetNodeOnBaselineRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetNodeOnBaselineResponse>(DoRequest("GetNodeOnBaseline", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetNodeOnBaselineResponse> GetNodeOnBaselineWithOptionsAsync(GetNodeOnBaselineRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetNodeOnBaselineResponse>(await DoRequestAsync("GetNodeOnBaseline", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetNodeOnBaselineResponse GetNodeOnBaseline(GetNodeOnBaselineRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetNodeOnBaselineWithOptions(request, runtime);
        }

        public async Task<GetNodeOnBaselineResponse> GetNodeOnBaselineAsync(GetNodeOnBaselineRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetNodeOnBaselineWithOptionsAsync(request, runtime);
        }

        public ListBaselineConfigsResponse ListBaselineConfigsWithOptions(ListBaselineConfigsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListBaselineConfigsResponse>(DoRequest("ListBaselineConfigs", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListBaselineConfigsResponse> ListBaselineConfigsWithOptionsAsync(ListBaselineConfigsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListBaselineConfigsResponse>(await DoRequestAsync("ListBaselineConfigs", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListBaselineConfigsResponse ListBaselineConfigs(ListBaselineConfigsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListBaselineConfigsWithOptions(request, runtime);
        }

        public async Task<ListBaselineConfigsResponse> ListBaselineConfigsAsync(ListBaselineConfigsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListBaselineConfigsWithOptionsAsync(request, runtime);
        }

        public GetMetaTableChangeLogResponse GetMetaTableChangeLogWithOptions(GetMetaTableChangeLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableChangeLogResponse>(DoRequest("GetMetaTableChangeLog", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMetaTableChangeLogResponse> GetMetaTableChangeLogWithOptionsAsync(GetMetaTableChangeLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableChangeLogResponse>(await DoRequestAsync("GetMetaTableChangeLog", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetMetaTableChangeLogResponse GetMetaTableChangeLog(GetMetaTableChangeLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMetaTableChangeLogWithOptions(request, runtime);
        }

        public async Task<GetMetaTableChangeLogResponse> GetMetaTableChangeLogAsync(GetMetaTableChangeLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMetaTableChangeLogWithOptionsAsync(request, runtime);
        }

        public GetMetaTableOutputResponse GetMetaTableOutputWithOptions(GetMetaTableOutputRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableOutputResponse>(DoRequest("GetMetaTableOutput", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMetaTableOutputResponse> GetMetaTableOutputWithOptionsAsync(GetMetaTableOutputRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableOutputResponse>(await DoRequestAsync("GetMetaTableOutput", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetMetaTableOutputResponse GetMetaTableOutput(GetMetaTableOutputRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMetaTableOutputWithOptions(request, runtime);
        }

        public async Task<GetMetaTableOutputResponse> GetMetaTableOutputAsync(GetMetaTableOutputRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMetaTableOutputWithOptionsAsync(request, runtime);
        }

        public GetMetaTablePartitionResponse GetMetaTablePartitionWithOptions(GetMetaTablePartitionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTablePartitionResponse>(DoRequest("GetMetaTablePartition", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMetaTablePartitionResponse> GetMetaTablePartitionWithOptionsAsync(GetMetaTablePartitionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTablePartitionResponse>(await DoRequestAsync("GetMetaTablePartition", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetMetaTablePartitionResponse GetMetaTablePartition(GetMetaTablePartitionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMetaTablePartitionWithOptions(request, runtime);
        }

        public async Task<GetMetaTablePartitionResponse> GetMetaTablePartitionAsync(GetMetaTablePartitionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMetaTablePartitionWithOptionsAsync(request, runtime);
        }

        public GetMetaTableFullInfoResponse GetMetaTableFullInfoWithOptions(GetMetaTableFullInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableFullInfoResponse>(DoRequest("GetMetaTableFullInfo", "HTTPS", "GET", "2020-05-18", "AK", request.ToMap(), null, runtime));
        }

        public async Task<GetMetaTableFullInfoResponse> GetMetaTableFullInfoWithOptionsAsync(GetMetaTableFullInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableFullInfoResponse>(await DoRequestAsync("GetMetaTableFullInfo", "HTTPS", "GET", "2020-05-18", "AK", request.ToMap(), null, runtime));
        }

        public GetMetaTableFullInfoResponse GetMetaTableFullInfo(GetMetaTableFullInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMetaTableFullInfoWithOptions(request, runtime);
        }

        public async Task<GetMetaTableFullInfoResponse> GetMetaTableFullInfoAsync(GetMetaTableFullInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMetaTableFullInfoWithOptionsAsync(request, runtime);
        }

        public GetFileVersionResponse GetFileVersionWithOptions(GetFileVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetFileVersionResponse>(DoRequest("GetFileVersion", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetFileVersionResponse> GetFileVersionWithOptionsAsync(GetFileVersionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetFileVersionResponse>(await DoRequestAsync("GetFileVersion", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetFileVersionResponse GetFileVersion(GetFileVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetFileVersionWithOptions(request, runtime);
        }

        public async Task<GetFileVersionResponse> GetFileVersionAsync(GetFileVersionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetFileVersionWithOptionsAsync(request, runtime);
        }

        public GetMetaTableBasicInfoResponse GetMetaTableBasicInfoWithOptions(GetMetaTableBasicInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableBasicInfoResponse>(DoRequest("GetMetaTableBasicInfo", "HTTPS", "GET", "2020-05-18", "AK", request.ToMap(), null, runtime));
        }

        public async Task<GetMetaTableBasicInfoResponse> GetMetaTableBasicInfoWithOptionsAsync(GetMetaTableBasicInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableBasicInfoResponse>(await DoRequestAsync("GetMetaTableBasicInfo", "HTTPS", "GET", "2020-05-18", "AK", request.ToMap(), null, runtime));
        }

        public GetMetaTableBasicInfoResponse GetMetaTableBasicInfo(GetMetaTableBasicInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMetaTableBasicInfoWithOptions(request, runtime);
        }

        public async Task<GetMetaTableBasicInfoResponse> GetMetaTableBasicInfoAsync(GetMetaTableBasicInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMetaTableBasicInfoWithOptionsAsync(request, runtime);
        }

        public GetMetaTableColumnResponse GetMetaTableColumnWithOptions(GetMetaTableColumnRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableColumnResponse>(DoRequest("GetMetaTableColumn", "HTTPS", "GET", "2020-05-18", "AK", request.ToMap(), null, runtime));
        }

        public async Task<GetMetaTableColumnResponse> GetMetaTableColumnWithOptionsAsync(GetMetaTableColumnRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableColumnResponse>(await DoRequestAsync("GetMetaTableColumn", "HTTPS", "GET", "2020-05-18", "AK", request.ToMap(), null, runtime));
        }

        public GetMetaTableColumnResponse GetMetaTableColumn(GetMetaTableColumnRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMetaTableColumnWithOptions(request, runtime);
        }

        public async Task<GetMetaTableColumnResponse> GetMetaTableColumnAsync(GetMetaTableColumnRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMetaTableColumnWithOptionsAsync(request, runtime);
        }

        public GetMetaDBInfoResponse GetMetaDBInfoWithOptions(GetMetaDBInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaDBInfoResponse>(DoRequest("GetMetaDBInfo", "HTTPS", "GET", "2020-05-18", "AK", request.ToMap(), null, runtime));
        }

        public async Task<GetMetaDBInfoResponse> GetMetaDBInfoWithOptionsAsync(GetMetaDBInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaDBInfoResponse>(await DoRequestAsync("GetMetaDBInfo", "HTTPS", "GET", "2020-05-18", "AK", request.ToMap(), null, runtime));
        }

        public GetMetaDBInfoResponse GetMetaDBInfo(GetMetaDBInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMetaDBInfoWithOptions(request, runtime);
        }

        public async Task<GetMetaDBInfoResponse> GetMetaDBInfoAsync(GetMetaDBInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMetaDBInfoWithOptionsAsync(request, runtime);
        }

        public GetMetaCategoryResponse GetMetaCategoryWithOptions(GetMetaCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaCategoryResponse>(DoRequest("GetMetaCategory", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMetaCategoryResponse> GetMetaCategoryWithOptionsAsync(GetMetaCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaCategoryResponse>(await DoRequestAsync("GetMetaCategory", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetMetaCategoryResponse GetMetaCategory(GetMetaCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMetaCategoryWithOptions(request, runtime);
        }

        public async Task<GetMetaCategoryResponse> GetMetaCategoryAsync(GetMetaCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMetaCategoryWithOptionsAsync(request, runtime);
        }

        public ListAlertMessagesResponse ListAlertMessagesWithOptions(ListAlertMessagesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAlertMessagesResponse>(DoRequest("ListAlertMessages", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListAlertMessagesResponse> ListAlertMessagesWithOptionsAsync(ListAlertMessagesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAlertMessagesResponse>(await DoRequestAsync("ListAlertMessages", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListAlertMessagesResponse ListAlertMessages(ListAlertMessagesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListAlertMessagesWithOptions(request, runtime);
        }

        public async Task<ListAlertMessagesResponse> ListAlertMessagesAsync(ListAlertMessagesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListAlertMessagesWithOptionsAsync(request, runtime);
        }

        public GetBaselineConfigResponse GetBaselineConfigWithOptions(GetBaselineConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetBaselineConfigResponse>(DoRequest("GetBaselineConfig", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetBaselineConfigResponse> GetBaselineConfigWithOptionsAsync(GetBaselineConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetBaselineConfigResponse>(await DoRequestAsync("GetBaselineConfig", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetBaselineConfigResponse GetBaselineConfig(GetBaselineConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetBaselineConfigWithOptions(request, runtime);
        }

        public async Task<GetBaselineConfigResponse> GetBaselineConfigAsync(GetBaselineConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetBaselineConfigWithOptionsAsync(request, runtime);
        }

        public SearchMetaTablesResponse SearchMetaTablesWithOptions(SearchMetaTablesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchMetaTablesResponse>(DoRequest("SearchMetaTables", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchMetaTablesResponse> SearchMetaTablesWithOptionsAsync(SearchMetaTablesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchMetaTablesResponse>(await DoRequestAsync("SearchMetaTables", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public SearchMetaTablesResponse SearchMetaTables(SearchMetaTablesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchMetaTablesWithOptions(request, runtime);
        }

        public async Task<SearchMetaTablesResponse> SearchMetaTablesAsync(SearchMetaTablesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchMetaTablesWithOptionsAsync(request, runtime);
        }

        public CreateNodeTestResponse CreateNodeTestWithOptions(CreateNodeTestRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateNodeTestResponse>(DoRequest("CreateNodeTest", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateNodeTestResponse> CreateNodeTestWithOptionsAsync(CreateNodeTestRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateNodeTestResponse>(await DoRequestAsync("CreateNodeTest", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CreateNodeTestResponse CreateNodeTest(CreateNodeTestRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateNodeTestWithOptions(request, runtime);
        }

        public async Task<CreateNodeTestResponse> CreateNodeTestAsync(CreateNodeTestRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateNodeTestWithOptionsAsync(request, runtime);
        }

        public GetMetaTableListByCategoryResponse GetMetaTableListByCategoryWithOptions(GetMetaTableListByCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableListByCategoryResponse>(DoRequest("GetMetaTableListByCategory", "HTTPS", "GET", "2020-05-18", "AK", request.ToMap(), null, runtime));
        }

        public async Task<GetMetaTableListByCategoryResponse> GetMetaTableListByCategoryWithOptionsAsync(GetMetaTableListByCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableListByCategoryResponse>(await DoRequestAsync("GetMetaTableListByCategory", "HTTPS", "GET", "2020-05-18", "AK", request.ToMap(), null, runtime));
        }

        public GetMetaTableListByCategoryResponse GetMetaTableListByCategory(GetMetaTableListByCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMetaTableListByCategoryWithOptions(request, runtime);
        }

        public async Task<GetMetaTableListByCategoryResponse> GetMetaTableListByCategoryAsync(GetMetaTableListByCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMetaTableListByCategoryWithOptionsAsync(request, runtime);
        }

        public DeleteMetaCategoryResponse DeleteMetaCategoryWithOptions(DeleteMetaCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMetaCategoryResponse>(DoRequest("DeleteMetaCategory", "HTTPS", "GET", "2020-05-18", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DeleteMetaCategoryResponse> DeleteMetaCategoryWithOptionsAsync(DeleteMetaCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMetaCategoryResponse>(await DoRequestAsync("DeleteMetaCategory", "HTTPS", "GET", "2020-05-18", "AK", request.ToMap(), null, runtime));
        }

        public DeleteMetaCategoryResponse DeleteMetaCategory(DeleteMetaCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteMetaCategoryWithOptions(request, runtime);
        }

        public async Task<DeleteMetaCategoryResponse> DeleteMetaCategoryAsync(DeleteMetaCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteMetaCategoryWithOptionsAsync(request, runtime);
        }

        public UpdateMetaCategoryResponse UpdateMetaCategoryWithOptions(UpdateMetaCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateMetaCategoryResponse>(DoRequest("UpdateMetaCategory", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateMetaCategoryResponse> UpdateMetaCategoryWithOptionsAsync(UpdateMetaCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateMetaCategoryResponse>(await DoRequestAsync("UpdateMetaCategory", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public UpdateMetaCategoryResponse UpdateMetaCategory(UpdateMetaCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateMetaCategoryWithOptions(request, runtime);
        }

        public async Task<UpdateMetaCategoryResponse> UpdateMetaCategoryAsync(UpdateMetaCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateMetaCategoryWithOptionsAsync(request, runtime);
        }

        public CreateNodeComplementResponse CreateNodeComplementWithOptions(CreateNodeComplementRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateNodeComplementResponse>(DoRequest("CreateNodeComplement", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateNodeComplementResponse> CreateNodeComplementWithOptionsAsync(CreateNodeComplementRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateNodeComplementResponse>(await DoRequestAsync("CreateNodeComplement", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CreateNodeComplementResponse CreateNodeComplement(CreateNodeComplementRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateNodeComplementWithOptions(request, runtime);
        }

        public async Task<CreateNodeComplementResponse> CreateNodeComplementAsync(CreateNodeComplementRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateNodeComplementWithOptionsAsync(request, runtime);
        }

        public ListTopicsResponse ListTopicsWithOptions(ListTopicsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTopicsResponse>(DoRequest("ListTopics", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListTopicsResponse> ListTopicsWithOptionsAsync(ListTopicsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTopicsResponse>(await DoRequestAsync("ListTopics", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListTopicsResponse ListTopics(ListTopicsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListTopicsWithOptions(request, runtime);
        }

        public async Task<ListTopicsResponse> ListTopicsAsync(ListTopicsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListTopicsWithOptionsAsync(request, runtime);
        }

        public ListFileVersionsResponse ListFileVersionsWithOptions(ListFileVersionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListFileVersionsResponse>(DoRequest("ListFileVersions", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListFileVersionsResponse> ListFileVersionsWithOptionsAsync(ListFileVersionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListFileVersionsResponse>(await DoRequestAsync("ListFileVersions", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListFileVersionsResponse ListFileVersions(ListFileVersionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListFileVersionsWithOptions(request, runtime);
        }

        public async Task<ListFileVersionsResponse> ListFileVersionsAsync(ListFileVersionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListFileVersionsWithOptionsAsync(request, runtime);
        }

        public CreateMetaCategoryResponse CreateMetaCategoryWithOptions(CreateMetaCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMetaCategoryResponse>(DoRequest("CreateMetaCategory", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateMetaCategoryResponse> CreateMetaCategoryWithOptionsAsync(CreateMetaCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateMetaCategoryResponse>(await DoRequestAsync("CreateMetaCategory", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CreateMetaCategoryResponse CreateMetaCategory(CreateMetaCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateMetaCategoryWithOptions(request, runtime);
        }

        public async Task<CreateMetaCategoryResponse> CreateMetaCategoryAsync(CreateMetaCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateMetaCategoryWithOptionsAsync(request, runtime);
        }

        public ListNodeIOResponse ListNodeIOWithOptions(ListNodeIORequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListNodeIOResponse>(DoRequest("ListNodeIO", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListNodeIOResponse> ListNodeIOWithOptionsAsync(ListNodeIORequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListNodeIOResponse>(await DoRequestAsync("ListNodeIO", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListNodeIOResponse ListNodeIO(ListNodeIORequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListNodeIOWithOptions(request, runtime);
        }

        public async Task<ListNodeIOResponse> ListNodeIOAsync(ListNodeIORequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListNodeIOWithOptionsAsync(request, runtime);
        }

        public GetTopicInfluenceResponse GetTopicInfluenceWithOptions(GetTopicInfluenceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTopicInfluenceResponse>(DoRequest("GetTopicInfluence", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetTopicInfluenceResponse> GetTopicInfluenceWithOptionsAsync(GetTopicInfluenceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTopicInfluenceResponse>(await DoRequestAsync("GetTopicInfluence", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetTopicInfluenceResponse GetTopicInfluence(GetTopicInfluenceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetTopicInfluenceWithOptions(request, runtime);
        }

        public async Task<GetTopicInfluenceResponse> GetTopicInfluenceAsync(GetTopicInfluenceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetTopicInfluenceWithOptionsAsync(request, runtime);
        }

        public GetTopicResponse GetTopicWithOptions(GetTopicRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTopicResponse>(DoRequest("GetTopic", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetTopicResponse> GetTopicWithOptionsAsync(GetTopicRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTopicResponse>(await DoRequestAsync("GetTopic", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetTopicResponse GetTopic(GetTopicRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetTopicWithOptions(request, runtime);
        }

        public async Task<GetTopicResponse> GetTopicAsync(GetTopicRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetTopicWithOptionsAsync(request, runtime);
        }

        public DeleteFromMetaCategoryResponse DeleteFromMetaCategoryWithOptions(DeleteFromMetaCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteFromMetaCategoryResponse>(DoRequest("DeleteFromMetaCategory", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteFromMetaCategoryResponse> DeleteFromMetaCategoryWithOptionsAsync(DeleteFromMetaCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteFromMetaCategoryResponse>(await DoRequestAsync("DeleteFromMetaCategory", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public DeleteFromMetaCategoryResponse DeleteFromMetaCategory(DeleteFromMetaCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteFromMetaCategoryWithOptions(request, runtime);
        }

        public async Task<DeleteFromMetaCategoryResponse> DeleteFromMetaCategoryAsync(DeleteFromMetaCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteFromMetaCategoryWithOptionsAsync(request, runtime);
        }

        public GetNodeResponse GetNodeWithOptions(GetNodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetNodeResponse>(DoRequest("GetNode", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetNodeResponse> GetNodeWithOptionsAsync(GetNodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetNodeResponse>(await DoRequestAsync("GetNode", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetNodeResponse GetNode(GetNodeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetNodeWithOptions(request, runtime);
        }

        public async Task<GetNodeResponse> GetNodeAsync(GetNodeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetNodeWithOptionsAsync(request, runtime);
        }

        public ListNodesResponse ListNodesWithOptions(ListNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListNodesResponse>(DoRequest("ListNodes", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListNodesResponse> ListNodesWithOptionsAsync(ListNodesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListNodesResponse>(await DoRequestAsync("ListNodes", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListNodesResponse ListNodes(ListNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListNodesWithOptions(request, runtime);
        }

        public async Task<ListNodesResponse> ListNodesAsync(ListNodesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListNodesWithOptionsAsync(request, runtime);
        }

        public GetNodeCodeResponse GetNodeCodeWithOptions(GetNodeCodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetNodeCodeResponse>(DoRequest("GetNodeCode", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetNodeCodeResponse> GetNodeCodeWithOptionsAsync(GetNodeCodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetNodeCodeResponse>(await DoRequestAsync("GetNodeCode", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetNodeCodeResponse GetNodeCode(GetNodeCodeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetNodeCodeWithOptions(request, runtime);
        }

        public async Task<GetNodeCodeResponse> GetNodeCodeAsync(GetNodeCodeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetNodeCodeWithOptionsAsync(request, runtime);
        }

        public EstablishRelationTableToBusinessResponse EstablishRelationTableToBusinessWithOptions(EstablishRelationTableToBusinessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EstablishRelationTableToBusinessResponse>(DoRequest("EstablishRelationTableToBusiness", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EstablishRelationTableToBusinessResponse> EstablishRelationTableToBusinessWithOptionsAsync(EstablishRelationTableToBusinessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EstablishRelationTableToBusinessResponse>(await DoRequestAsync("EstablishRelationTableToBusiness", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public EstablishRelationTableToBusinessResponse EstablishRelationTableToBusiness(EstablishRelationTableToBusinessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EstablishRelationTableToBusinessWithOptions(request, runtime);
        }

        public async Task<EstablishRelationTableToBusinessResponse> EstablishRelationTableToBusinessAsync(EstablishRelationTableToBusinessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EstablishRelationTableToBusinessWithOptionsAsync(request, runtime);
        }

        public UpdateDataServiceApiResponse UpdateDataServiceApiWithOptions(UpdateDataServiceApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDataServiceApiResponse>(DoRequest("UpdateDataServiceApi", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateDataServiceApiResponse> UpdateDataServiceApiWithOptionsAsync(UpdateDataServiceApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateDataServiceApiResponse>(await DoRequestAsync("UpdateDataServiceApi", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public UpdateDataServiceApiResponse UpdateDataServiceApi(UpdateDataServiceApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateDataServiceApiWithOptions(request, runtime);
        }

        public async Task<UpdateDataServiceApiResponse> UpdateDataServiceApiAsync(UpdateDataServiceApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateDataServiceApiWithOptionsAsync(request, runtime);
        }

        public UpdateUdfFileResponse UpdateUdfFileWithOptions(UpdateUdfFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateUdfFileResponse>(DoRequest("UpdateUdfFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateUdfFileResponse> UpdateUdfFileWithOptionsAsync(UpdateUdfFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateUdfFileResponse>(await DoRequestAsync("UpdateUdfFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public UpdateUdfFileResponse UpdateUdfFile(UpdateUdfFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateUdfFileWithOptions(request, runtime);
        }

        public async Task<UpdateUdfFileResponse> UpdateUdfFileAsync(UpdateUdfFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateUdfFileWithOptionsAsync(request, runtime);
        }

        public CreateUdfFileResponse CreateUdfFileWithOptions(CreateUdfFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateUdfFileResponse>(DoRequest("CreateUdfFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateUdfFileResponse> CreateUdfFileWithOptionsAsync(CreateUdfFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateUdfFileResponse>(await DoRequestAsync("CreateUdfFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CreateUdfFileResponse CreateUdfFile(CreateUdfFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateUdfFileWithOptions(request, runtime);
        }

        public async Task<CreateUdfFileResponse> CreateUdfFileAsync(CreateUdfFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateUdfFileWithOptionsAsync(request, runtime);
        }

        public ListFilesResponse ListFilesWithOptions(ListFilesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListFilesResponse>(DoRequest("ListFiles", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListFilesResponse> ListFilesWithOptionsAsync(ListFilesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListFilesResponse>(await DoRequestAsync("ListFiles", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListFilesResponse ListFiles(ListFilesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListFilesWithOptions(request, runtime);
        }

        public async Task<ListFilesResponse> ListFilesAsync(ListFilesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListFilesWithOptionsAsync(request, runtime);
        }

        public ListDataServiceAuthorizedApisResponse ListDataServiceAuthorizedApisWithOptions(ListDataServiceAuthorizedApisRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDataServiceAuthorizedApisResponse>(DoRequest("ListDataServiceAuthorizedApis", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListDataServiceAuthorizedApisResponse> ListDataServiceAuthorizedApisWithOptionsAsync(ListDataServiceAuthorizedApisRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDataServiceAuthorizedApisResponse>(await DoRequestAsync("ListDataServiceAuthorizedApis", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListDataServiceAuthorizedApisResponse ListDataServiceAuthorizedApis(ListDataServiceAuthorizedApisRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListDataServiceAuthorizedApisWithOptions(request, runtime);
        }

        public async Task<ListDataServiceAuthorizedApisResponse> ListDataServiceAuthorizedApisAsync(ListDataServiceAuthorizedApisRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListDataServiceAuthorizedApisWithOptionsAsync(request, runtime);
        }

        public UpdateFileResponse UpdateFileWithOptions(UpdateFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateFileResponse>(DoRequest("UpdateFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateFileResponse> UpdateFileWithOptionsAsync(UpdateFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateFileResponse>(await DoRequestAsync("UpdateFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public UpdateFileResponse UpdateFile(UpdateFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateFileWithOptions(request, runtime);
        }

        public async Task<UpdateFileResponse> UpdateFileAsync(UpdateFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateFileWithOptionsAsync(request, runtime);
        }

        public DeleteFolderResponse DeleteFolderWithOptions(DeleteFolderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteFolderResponse>(DoRequest("DeleteFolder", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteFolderResponse> DeleteFolderWithOptionsAsync(DeleteFolderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteFolderResponse>(await DoRequestAsync("DeleteFolder", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public DeleteFolderResponse DeleteFolder(DeleteFolderRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteFolderWithOptions(request, runtime);
        }

        public async Task<DeleteFolderResponse> DeleteFolderAsync(DeleteFolderRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteFolderWithOptionsAsync(request, runtime);
        }

        public ListFoldersResponse ListFoldersWithOptions(ListFoldersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListFoldersResponse>(DoRequest("ListFolders", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListFoldersResponse> ListFoldersWithOptionsAsync(ListFoldersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListFoldersResponse>(await DoRequestAsync("ListFolders", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListFoldersResponse ListFolders(ListFoldersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListFoldersWithOptions(request, runtime);
        }

        public async Task<ListFoldersResponse> ListFoldersAsync(ListFoldersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListFoldersWithOptionsAsync(request, runtime);
        }

        public CheckMetaPartitionResponse CheckMetaPartitionWithOptions(CheckMetaPartitionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckMetaPartitionResponse>(DoRequest("CheckMetaPartition", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CheckMetaPartitionResponse> CheckMetaPartitionWithOptionsAsync(CheckMetaPartitionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckMetaPartitionResponse>(await DoRequestAsync("CheckMetaPartition", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CheckMetaPartitionResponse CheckMetaPartition(CheckMetaPartitionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CheckMetaPartitionWithOptions(request, runtime);
        }

        public async Task<CheckMetaPartitionResponse> CheckMetaPartitionAsync(CheckMetaPartitionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CheckMetaPartitionWithOptionsAsync(request, runtime);
        }

        public UpdateFolderResponse UpdateFolderWithOptions(UpdateFolderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateFolderResponse>(DoRequest("UpdateFolder", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateFolderResponse> UpdateFolderWithOptionsAsync(UpdateFolderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateFolderResponse>(await DoRequestAsync("UpdateFolder", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public UpdateFolderResponse UpdateFolder(UpdateFolderRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateFolderWithOptions(request, runtime);
        }

        public async Task<UpdateFolderResponse> UpdateFolderAsync(UpdateFolderRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateFolderWithOptionsAsync(request, runtime);
        }

        public DeleteRemindResponse DeleteRemindWithOptions(DeleteRemindRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRemindResponse>(DoRequest("DeleteRemind", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteRemindResponse> DeleteRemindWithOptionsAsync(DeleteRemindRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteRemindResponse>(await DoRequestAsync("DeleteRemind", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public DeleteRemindResponse DeleteRemind(DeleteRemindRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteRemindWithOptions(request, runtime);
        }

        public async Task<DeleteRemindResponse> DeleteRemindAsync(DeleteRemindRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteRemindWithOptionsAsync(request, runtime);
        }

        public AddToMetaCategoryResponse AddToMetaCategoryWithOptions(AddToMetaCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddToMetaCategoryResponse>(DoRequest("AddToMetaCategory", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddToMetaCategoryResponse> AddToMetaCategoryWithOptionsAsync(AddToMetaCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddToMetaCategoryResponse>(await DoRequestAsync("AddToMetaCategory", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public AddToMetaCategoryResponse AddToMetaCategory(AddToMetaCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddToMetaCategoryWithOptions(request, runtime);
        }

        public async Task<AddToMetaCategoryResponse> AddToMetaCategoryAsync(AddToMetaCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddToMetaCategoryWithOptionsAsync(request, runtime);
        }

        public ListInstancesResponse ListInstancesWithOptions(ListInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListInstancesResponse>(DoRequest("ListInstances", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListInstancesResponse> ListInstancesWithOptionsAsync(ListInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListInstancesResponse>(await DoRequestAsync("ListInstances", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListInstancesResponse ListInstances(ListInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListInstancesWithOptions(request, runtime);
        }

        public async Task<ListInstancesResponse> ListInstancesAsync(ListInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListInstancesWithOptionsAsync(request, runtime);
        }

        public SetSuccessInstanceResponse SetSuccessInstanceWithOptions(SetSuccessInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetSuccessInstanceResponse>(DoRequest("SetSuccessInstance", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetSuccessInstanceResponse> SetSuccessInstanceWithOptionsAsync(SetSuccessInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetSuccessInstanceResponse>(await DoRequestAsync("SetSuccessInstance", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public SetSuccessInstanceResponse SetSuccessInstance(SetSuccessInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetSuccessInstanceWithOptions(request, runtime);
        }

        public async Task<SetSuccessInstanceResponse> SetSuccessInstanceAsync(SetSuccessInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetSuccessInstanceWithOptionsAsync(request, runtime);
        }

        public CreateFileResponse CreateFileWithOptions(CreateFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateFileResponse>(DoRequest("CreateFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateFileResponse> CreateFileWithOptionsAsync(CreateFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateFileResponse>(await DoRequestAsync("CreateFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CreateFileResponse CreateFile(CreateFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateFileWithOptions(request, runtime);
        }

        public async Task<CreateFileResponse> CreateFileAsync(CreateFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateFileWithOptionsAsync(request, runtime);
        }

        public StopInstanceResponse StopInstanceWithOptions(StopInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopInstanceResponse>(DoRequest("StopInstance", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<StopInstanceResponse> StopInstanceWithOptionsAsync(StopInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<StopInstanceResponse>(await DoRequestAsync("StopInstance", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public StopInstanceResponse StopInstance(StopInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return StopInstanceWithOptions(request, runtime);
        }

        public async Task<StopInstanceResponse> StopInstanceAsync(StopInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await StopInstanceWithOptionsAsync(request, runtime);
        }

        public ResumeInstanceResponse ResumeInstanceWithOptions(ResumeInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResumeInstanceResponse>(DoRequest("ResumeInstance", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ResumeInstanceResponse> ResumeInstanceWithOptionsAsync(ResumeInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ResumeInstanceResponse>(await DoRequestAsync("ResumeInstance", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ResumeInstanceResponse ResumeInstance(ResumeInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ResumeInstanceWithOptions(request, runtime);
        }

        public async Task<ResumeInstanceResponse> ResumeInstanceAsync(ResumeInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ResumeInstanceWithOptionsAsync(request, runtime);
        }

        public SuspendInstanceResponse SuspendInstanceWithOptions(SuspendInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SuspendInstanceResponse>(DoRequest("SuspendInstance", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SuspendInstanceResponse> SuspendInstanceWithOptionsAsync(SuspendInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SuspendInstanceResponse>(await DoRequestAsync("SuspendInstance", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public SuspendInstanceResponse SuspendInstance(SuspendInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SuspendInstanceWithOptions(request, runtime);
        }

        public async Task<SuspendInstanceResponse> SuspendInstanceAsync(SuspendInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SuspendInstanceWithOptionsAsync(request, runtime);
        }

        public RestartInstanceResponse RestartInstanceWithOptions(RestartInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestartInstanceResponse>(DoRequest("RestartInstance", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RestartInstanceResponse> RestartInstanceWithOptionsAsync(RestartInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RestartInstanceResponse>(await DoRequestAsync("RestartInstance", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public RestartInstanceResponse RestartInstance(RestartInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RestartInstanceWithOptions(request, runtime);
        }

        public async Task<RestartInstanceResponse> RestartInstanceAsync(RestartInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RestartInstanceWithOptionsAsync(request, runtime);
        }

        public ListDataServiceApiAuthoritiesResponse ListDataServiceApiAuthoritiesWithOptions(ListDataServiceApiAuthoritiesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDataServiceApiAuthoritiesResponse>(DoRequest("ListDataServiceApiAuthorities", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListDataServiceApiAuthoritiesResponse> ListDataServiceApiAuthoritiesWithOptionsAsync(ListDataServiceApiAuthoritiesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDataServiceApiAuthoritiesResponse>(await DoRequestAsync("ListDataServiceApiAuthorities", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListDataServiceApiAuthoritiesResponse ListDataServiceApiAuthorities(ListDataServiceApiAuthoritiesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListDataServiceApiAuthoritiesWithOptions(request, runtime);
        }

        public async Task<ListDataServiceApiAuthoritiesResponse> ListDataServiceApiAuthoritiesAsync(ListDataServiceApiAuthoritiesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListDataServiceApiAuthoritiesWithOptionsAsync(request, runtime);
        }

        public ListDataServicePublishedApisResponse ListDataServicePublishedApisWithOptions(ListDataServicePublishedApisRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDataServicePublishedApisResponse>(DoRequest("ListDataServicePublishedApis", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListDataServicePublishedApisResponse> ListDataServicePublishedApisWithOptionsAsync(ListDataServicePublishedApisRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDataServicePublishedApisResponse>(await DoRequestAsync("ListDataServicePublishedApis", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListDataServicePublishedApisResponse ListDataServicePublishedApis(ListDataServicePublishedApisRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListDataServicePublishedApisWithOptions(request, runtime);
        }

        public async Task<ListDataServicePublishedApisResponse> ListDataServicePublishedApisAsync(ListDataServicePublishedApisRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListDataServicePublishedApisWithOptionsAsync(request, runtime);
        }

        public GetInstanceLogResponse GetInstanceLogWithOptions(GetInstanceLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetInstanceLogResponse>(DoRequest("GetInstanceLog", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetInstanceLogResponse> GetInstanceLogWithOptionsAsync(GetInstanceLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetInstanceLogResponse>(await DoRequestAsync("GetInstanceLog", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetInstanceLogResponse GetInstanceLog(GetInstanceLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetInstanceLogWithOptions(request, runtime);
        }

        public async Task<GetInstanceLogResponse> GetInstanceLogAsync(GetInstanceLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetInstanceLogWithOptionsAsync(request, runtime);
        }

        public CreateFolderResponse CreateFolderWithOptions(CreateFolderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateFolderResponse>(DoRequest("CreateFolder", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateFolderResponse> CreateFolderWithOptionsAsync(CreateFolderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateFolderResponse>(await DoRequestAsync("CreateFolder", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CreateFolderResponse CreateFolder(CreateFolderRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateFolderWithOptions(request, runtime);
        }

        public async Task<CreateFolderResponse> CreateFolderAsync(CreateFolderRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateFolderWithOptionsAsync(request, runtime);
        }

        public GetBusinessResponse GetBusinessWithOptions(GetBusinessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetBusinessResponse>(DoRequest("GetBusiness", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetBusinessResponse> GetBusinessWithOptionsAsync(GetBusinessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetBusinessResponse>(await DoRequestAsync("GetBusiness", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetBusinessResponse GetBusiness(GetBusinessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetBusinessWithOptions(request, runtime);
        }

        public async Task<GetBusinessResponse> GetBusinessAsync(GetBusinessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetBusinessWithOptionsAsync(request, runtime);
        }

        public GetInstanceResponse GetInstanceWithOptions(GetInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetInstanceResponse>(DoRequest("GetInstance", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetInstanceResponse> GetInstanceWithOptionsAsync(GetInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetInstanceResponse>(await DoRequestAsync("GetInstance", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetInstanceResponse GetInstance(GetInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetInstanceWithOptions(request, runtime);
        }

        public async Task<GetInstanceResponse> GetInstanceAsync(GetInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetInstanceWithOptionsAsync(request, runtime);
        }

        public GetFileResponse GetFileWithOptions(GetFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetFileResponse>(DoRequest("GetFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetFileResponse> GetFileWithOptionsAsync(GetFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetFileResponse>(await DoRequestAsync("GetFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetFileResponse GetFile(GetFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetFileWithOptions(request, runtime);
        }

        public async Task<GetFileResponse> GetFileAsync(GetFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetFileWithOptionsAsync(request, runtime);
        }

        public ListBusinessResponse ListBusinessWithOptions(ListBusinessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListBusinessResponse>(DoRequest("ListBusiness", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListBusinessResponse> ListBusinessWithOptionsAsync(ListBusinessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListBusinessResponse>(await DoRequestAsync("ListBusiness", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListBusinessResponse ListBusiness(ListBusinessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListBusinessWithOptions(request, runtime);
        }

        public async Task<ListBusinessResponse> ListBusinessAsync(ListBusinessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListBusinessWithOptionsAsync(request, runtime);
        }

        public GetMetaDBTableListResponse GetMetaDBTableListWithOptions(GetMetaDBTableListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaDBTableListResponse>(DoRequest("GetMetaDBTableList", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMetaDBTableListResponse> GetMetaDBTableListWithOptionsAsync(GetMetaDBTableListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaDBTableListResponse>(await DoRequestAsync("GetMetaDBTableList", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetMetaDBTableListResponse GetMetaDBTableList(GetMetaDBTableListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMetaDBTableListWithOptions(request, runtime);
        }

        public async Task<GetMetaDBTableListResponse> GetMetaDBTableListAsync(GetMetaDBTableListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMetaDBTableListWithOptionsAsync(request, runtime);
        }

        public CheckMetaTableResponse CheckMetaTableWithOptions(CheckMetaTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckMetaTableResponse>(DoRequest("CheckMetaTable", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CheckMetaTableResponse> CheckMetaTableWithOptionsAsync(CheckMetaTableRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CheckMetaTableResponse>(await DoRequestAsync("CheckMetaTable", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CheckMetaTableResponse CheckMetaTable(CheckMetaTableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CheckMetaTableWithOptions(request, runtime);
        }

        public async Task<CheckMetaTableResponse> CheckMetaTableAsync(CheckMetaTableRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CheckMetaTableWithOptionsAsync(request, runtime);
        }

        public GetFolderResponse GetFolderWithOptions(GetFolderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetFolderResponse>(DoRequest("GetFolder", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetFolderResponse> GetFolderWithOptionsAsync(GetFolderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetFolderResponse>(await DoRequestAsync("GetFolder", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetFolderResponse GetFolder(GetFolderRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetFolderWithOptions(request, runtime);
        }

        public async Task<GetFolderResponse> GetFolderAsync(GetFolderRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetFolderWithOptionsAsync(request, runtime);
        }

        public DeployFileResponse DeployFileWithOptions(DeployFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeployFileResponse>(DoRequest("DeployFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeployFileResponse> DeployFileWithOptionsAsync(DeployFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeployFileResponse>(await DoRequestAsync("DeployFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public DeployFileResponse DeployFile(DeployFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeployFileWithOptions(request, runtime);
        }

        public async Task<DeployFileResponse> DeployFileAsync(DeployFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeployFileWithOptionsAsync(request, runtime);
        }

        public DeleteBusinessResponse DeleteBusinessWithOptions(DeleteBusinessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBusinessResponse>(DoRequest("DeleteBusiness", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteBusinessResponse> DeleteBusinessWithOptionsAsync(DeleteBusinessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteBusinessResponse>(await DoRequestAsync("DeleteBusiness", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public DeleteBusinessResponse DeleteBusiness(DeleteBusinessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteBusinessWithOptions(request, runtime);
        }

        public async Task<DeleteBusinessResponse> DeleteBusinessAsync(DeleteBusinessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteBusinessWithOptionsAsync(request, runtime);
        }

        public DeleteFileResponse DeleteFileWithOptions(DeleteFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteFileResponse>(DoRequest("DeleteFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteFileResponse> DeleteFileWithOptionsAsync(DeleteFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteFileResponse>(await DoRequestAsync("DeleteFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public DeleteFileResponse DeleteFile(DeleteFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteFileWithOptions(request, runtime);
        }

        public async Task<DeleteFileResponse> DeleteFileAsync(DeleteFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteFileWithOptionsAsync(request, runtime);
        }

        public ListQualityRulesResponse ListQualityRulesWithOptions(ListQualityRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListQualityRulesResponse>(DoRequest("ListQualityRules", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListQualityRulesResponse> ListQualityRulesWithOptionsAsync(ListQualityRulesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListQualityRulesResponse>(await DoRequestAsync("ListQualityRules", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListQualityRulesResponse ListQualityRules(ListQualityRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListQualityRulesWithOptions(request, runtime);
        }

        public async Task<ListQualityRulesResponse> ListQualityRulesAsync(ListQualityRulesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListQualityRulesWithOptionsAsync(request, runtime);
        }

        public CreateRemindResponse CreateRemindWithOptions(CreateRemindRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRemindResponse>(DoRequest("CreateRemind", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateRemindResponse> CreateRemindWithOptionsAsync(CreateRemindRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateRemindResponse>(await DoRequestAsync("CreateRemind", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CreateRemindResponse CreateRemind(CreateRemindRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateRemindWithOptions(request, runtime);
        }

        public async Task<CreateRemindResponse> CreateRemindAsync(CreateRemindRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateRemindWithOptionsAsync(request, runtime);
        }

        public GetQualityRuleResponse GetQualityRuleWithOptions(GetQualityRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetQualityRuleResponse>(DoRequest("GetQualityRule", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetQualityRuleResponse> GetQualityRuleWithOptionsAsync(GetQualityRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetQualityRuleResponse>(await DoRequestAsync("GetQualityRule", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetQualityRuleResponse GetQualityRule(GetQualityRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetQualityRuleWithOptions(request, runtime);
        }

        public async Task<GetQualityRuleResponse> GetQualityRuleAsync(GetQualityRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetQualityRuleWithOptionsAsync(request, runtime);
        }

        public GetDeploymentResponse GetDeploymentWithOptions(GetDeploymentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDeploymentResponse>(DoRequest("GetDeployment", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetDeploymentResponse> GetDeploymentWithOptionsAsync(GetDeploymentRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDeploymentResponse>(await DoRequestAsync("GetDeployment", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetDeploymentResponse GetDeployment(GetDeploymentRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetDeploymentWithOptions(request, runtime);
        }

        public async Task<GetDeploymentResponse> GetDeploymentAsync(GetDeploymentRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetDeploymentWithOptionsAsync(request, runtime);
        }

        public UpdateRemindResponse UpdateRemindWithOptions(UpdateRemindRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateRemindResponse>(DoRequest("UpdateRemind", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateRemindResponse> UpdateRemindWithOptionsAsync(UpdateRemindRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateRemindResponse>(await DoRequestAsync("UpdateRemind", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public UpdateRemindResponse UpdateRemind(UpdateRemindRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateRemindWithOptions(request, runtime);
        }

        public async Task<UpdateRemindResponse> UpdateRemindAsync(UpdateRemindRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateRemindWithOptionsAsync(request, runtime);
        }

        public GetMetaColumnLineageResponse GetMetaColumnLineageWithOptions(GetMetaColumnLineageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaColumnLineageResponse>(DoRequest("GetMetaColumnLineage", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMetaColumnLineageResponse> GetMetaColumnLineageWithOptionsAsync(GetMetaColumnLineageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaColumnLineageResponse>(await DoRequestAsync("GetMetaColumnLineage", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetMetaColumnLineageResponse GetMetaColumnLineage(GetMetaColumnLineageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMetaColumnLineageWithOptions(request, runtime);
        }

        public async Task<GetMetaColumnLineageResponse> GetMetaColumnLineageAsync(GetMetaColumnLineageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMetaColumnLineageWithOptionsAsync(request, runtime);
        }

        public UpdateBusinessResponse UpdateBusinessWithOptions(UpdateBusinessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateBusinessResponse>(DoRequest("UpdateBusiness", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateBusinessResponse> UpdateBusinessWithOptionsAsync(UpdateBusinessRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateBusinessResponse>(await DoRequestAsync("UpdateBusiness", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public UpdateBusinessResponse UpdateBusiness(UpdateBusinessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateBusinessWithOptions(request, runtime);
        }

        public async Task<UpdateBusinessResponse> UpdateBusinessAsync(UpdateBusinessRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateBusinessWithOptionsAsync(request, runtime);
        }

        public UpdateQualityRuleResponse UpdateQualityRuleWithOptions(UpdateQualityRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateQualityRuleResponse>(DoRequest("UpdateQualityRule", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateQualityRuleResponse> UpdateQualityRuleWithOptionsAsync(UpdateQualityRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateQualityRuleResponse>(await DoRequestAsync("UpdateQualityRule", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public UpdateQualityRuleResponse UpdateQualityRule(UpdateQualityRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateQualityRuleWithOptions(request, runtime);
        }

        public async Task<UpdateQualityRuleResponse> UpdateQualityRuleAsync(UpdateQualityRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateQualityRuleWithOptionsAsync(request, runtime);
        }

        public DeleteQualityRuleResponse DeleteQualityRuleWithOptions(DeleteQualityRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteQualityRuleResponse>(DoRequest("DeleteQualityRule", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteQualityRuleResponse> DeleteQualityRuleWithOptionsAsync(DeleteQualityRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteQualityRuleResponse>(await DoRequestAsync("DeleteQualityRule", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public DeleteQualityRuleResponse DeleteQualityRule(DeleteQualityRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteQualityRuleWithOptions(request, runtime);
        }

        public async Task<DeleteQualityRuleResponse> DeleteQualityRuleAsync(DeleteQualityRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteQualityRuleWithOptionsAsync(request, runtime);
        }

        public SubmitFileResponse SubmitFileWithOptions(SubmitFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitFileResponse>(DoRequest("SubmitFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SubmitFileResponse> SubmitFileWithOptionsAsync(SubmitFileRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitFileResponse>(await DoRequestAsync("SubmitFile", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public SubmitFileResponse SubmitFile(SubmitFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SubmitFileWithOptions(request, runtime);
        }

        public async Task<SubmitFileResponse> SubmitFileAsync(SubmitFileRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SubmitFileWithOptionsAsync(request, runtime);
        }

        public GetDataServiceApiResponse GetDataServiceApiWithOptions(GetDataServiceApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDataServiceApiResponse>(DoRequest("GetDataServiceApi", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetDataServiceApiResponse> GetDataServiceApiWithOptionsAsync(GetDataServiceApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDataServiceApiResponse>(await DoRequestAsync("GetDataServiceApi", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetDataServiceApiResponse GetDataServiceApi(GetDataServiceApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetDataServiceApiWithOptions(request, runtime);
        }

        public async Task<GetDataServiceApiResponse> GetDataServiceApiAsync(GetDataServiceApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetDataServiceApiWithOptionsAsync(request, runtime);
        }

        public ListDataServiceApisResponse ListDataServiceApisWithOptions(ListDataServiceApisRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDataServiceApisResponse>(DoRequest("ListDataServiceApis", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListDataServiceApisResponse> ListDataServiceApisWithOptionsAsync(ListDataServiceApisRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListDataServiceApisResponse>(await DoRequestAsync("ListDataServiceApis", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListDataServiceApisResponse ListDataServiceApis(ListDataServiceApisRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListDataServiceApisWithOptions(request, runtime);
        }

        public async Task<ListDataServiceApisResponse> ListDataServiceApisAsync(ListDataServiceApisRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListDataServiceApisWithOptionsAsync(request, runtime);
        }

        public GetDataServicePublishedApiResponse GetDataServicePublishedApiWithOptions(GetDataServicePublishedApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDataServicePublishedApiResponse>(DoRequest("GetDataServicePublishedApi", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetDataServicePublishedApiResponse> GetDataServicePublishedApiWithOptionsAsync(GetDataServicePublishedApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDataServicePublishedApiResponse>(await DoRequestAsync("GetDataServicePublishedApi", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetDataServicePublishedApiResponse GetDataServicePublishedApi(GetDataServicePublishedApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetDataServicePublishedApiWithOptions(request, runtime);
        }

        public async Task<GetDataServicePublishedApiResponse> GetDataServicePublishedApiAsync(GetDataServicePublishedApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetDataServicePublishedApiWithOptionsAsync(request, runtime);
        }

        public GetBaselineKeyPathResponse GetBaselineKeyPathWithOptions(GetBaselineKeyPathRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetBaselineKeyPathResponse>(DoRequest("GetBaselineKeyPath", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetBaselineKeyPathResponse> GetBaselineKeyPathWithOptionsAsync(GetBaselineKeyPathRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetBaselineKeyPathResponse>(await DoRequestAsync("GetBaselineKeyPath", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetBaselineKeyPathResponse GetBaselineKeyPath(GetBaselineKeyPathRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetBaselineKeyPathWithOptions(request, runtime);
        }

        public async Task<GetBaselineKeyPathResponse> GetBaselineKeyPathAsync(GetBaselineKeyPathRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetBaselineKeyPathWithOptionsAsync(request, runtime);
        }

        public GetRemindResponse GetRemindWithOptions(GetRemindRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetRemindResponse>(DoRequest("GetRemind", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetRemindResponse> GetRemindWithOptionsAsync(GetRemindRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetRemindResponse>(await DoRequestAsync("GetRemind", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetRemindResponse GetRemind(GetRemindRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetRemindWithOptions(request, runtime);
        }

        public async Task<GetRemindResponse> GetRemindAsync(GetRemindRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetRemindWithOptionsAsync(request, runtime);
        }

        public GetMetaTableIntroWikiResponse GetMetaTableIntroWikiWithOptions(GetMetaTableIntroWikiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableIntroWikiResponse>(DoRequest("GetMetaTableIntroWiki", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMetaTableIntroWikiResponse> GetMetaTableIntroWikiWithOptionsAsync(GetMetaTableIntroWikiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableIntroWikiResponse>(await DoRequestAsync("GetMetaTableIntroWiki", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetMetaTableIntroWikiResponse GetMetaTableIntroWiki(GetMetaTableIntroWikiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMetaTableIntroWikiWithOptions(request, runtime);
        }

        public async Task<GetMetaTableIntroWikiResponse> GetMetaTableIntroWikiAsync(GetMetaTableIntroWikiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMetaTableIntroWikiWithOptionsAsync(request, runtime);
        }

        public GetBaselineStatusResponse GetBaselineStatusWithOptions(GetBaselineStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetBaselineStatusResponse>(DoRequest("GetBaselineStatus", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetBaselineStatusResponse> GetBaselineStatusWithOptionsAsync(GetBaselineStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetBaselineStatusResponse>(await DoRequestAsync("GetBaselineStatus", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetBaselineStatusResponse GetBaselineStatus(GetBaselineStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetBaselineStatusWithOptions(request, runtime);
        }

        public async Task<GetBaselineStatusResponse> GetBaselineStatusAsync(GetBaselineStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetBaselineStatusWithOptionsAsync(request, runtime);
        }

        public DeleteDataServiceApiResponse DeleteDataServiceApiWithOptions(DeleteDataServiceApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDataServiceApiResponse>(DoRequest("DeleteDataServiceApi", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteDataServiceApiResponse> DeleteDataServiceApiWithOptionsAsync(DeleteDataServiceApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteDataServiceApiResponse>(await DoRequestAsync("DeleteDataServiceApi", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public DeleteDataServiceApiResponse DeleteDataServiceApi(DeleteDataServiceApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteDataServiceApiWithOptions(request, runtime);
        }

        public async Task<DeleteDataServiceApiResponse> DeleteDataServiceApiAsync(DeleteDataServiceApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteDataServiceApiWithOptionsAsync(request, runtime);
        }

        public PublishDataServiceApiResponse PublishDataServiceApiWithOptions(PublishDataServiceApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PublishDataServiceApiResponse>(DoRequest("PublishDataServiceApi", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PublishDataServiceApiResponse> PublishDataServiceApiWithOptionsAsync(PublishDataServiceApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PublishDataServiceApiResponse>(await DoRequestAsync("PublishDataServiceApi", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public PublishDataServiceApiResponse PublishDataServiceApi(PublishDataServiceApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PublishDataServiceApiWithOptions(request, runtime);
        }

        public async Task<PublishDataServiceApiResponse> PublishDataServiceApiAsync(PublishDataServiceApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PublishDataServiceApiWithOptionsAsync(request, runtime);
        }

        public GetMetaTableLineageResponse GetMetaTableLineageWithOptions(GetMetaTableLineageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableLineageResponse>(DoRequest("GetMetaTableLineage", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMetaTableLineageResponse> GetMetaTableLineageWithOptionsAsync(GetMetaTableLineageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMetaTableLineageResponse>(await DoRequestAsync("GetMetaTableLineage", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetMetaTableLineageResponse GetMetaTableLineage(GetMetaTableLineageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMetaTableLineageWithOptions(request, runtime);
        }

        public async Task<GetMetaTableLineageResponse> GetMetaTableLineageAsync(GetMetaTableLineageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMetaTableLineageWithOptionsAsync(request, runtime);
        }

        public ListBaselineStatusesResponse ListBaselineStatusesWithOptions(ListBaselineStatusesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListBaselineStatusesResponse>(DoRequest("ListBaselineStatuses", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListBaselineStatusesResponse> ListBaselineStatusesWithOptionsAsync(ListBaselineStatusesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListBaselineStatusesResponse>(await DoRequestAsync("ListBaselineStatuses", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListBaselineStatusesResponse ListBaselineStatuses(ListBaselineStatusesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListBaselineStatusesWithOptions(request, runtime);
        }

        public async Task<ListBaselineStatusesResponse> ListBaselineStatusesAsync(ListBaselineStatusesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListBaselineStatusesWithOptionsAsync(request, runtime);
        }

        public ListRemindsResponse ListRemindsWithOptions(ListRemindsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListRemindsResponse>(DoRequest("ListReminds", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListRemindsResponse> ListRemindsWithOptionsAsync(ListRemindsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListRemindsResponse>(await DoRequestAsync("ListReminds", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public ListRemindsResponse ListReminds(ListRemindsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListRemindsWithOptions(request, runtime);
        }

        public async Task<ListRemindsResponse> ListRemindsAsync(ListRemindsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListRemindsWithOptionsAsync(request, runtime);
        }

        public DeleteQualityEntityResponse DeleteQualityEntityWithOptions(DeleteQualityEntityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteQualityEntityResponse>(DoRequest("DeleteQualityEntity", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteQualityEntityResponse> DeleteQualityEntityWithOptionsAsync(DeleteQualityEntityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteQualityEntityResponse>(await DoRequestAsync("DeleteQualityEntity", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public DeleteQualityEntityResponse DeleteQualityEntity(DeleteQualityEntityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteQualityEntityWithOptions(request, runtime);
        }

        public async Task<DeleteQualityEntityResponse> DeleteQualityEntityAsync(DeleteQualityEntityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteQualityEntityWithOptionsAsync(request, runtime);
        }

        public CreateQualityFollowerResponse CreateQualityFollowerWithOptions(CreateQualityFollowerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateQualityFollowerResponse>(DoRequest("CreateQualityFollower", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateQualityFollowerResponse> CreateQualityFollowerWithOptionsAsync(CreateQualityFollowerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateQualityFollowerResponse>(await DoRequestAsync("CreateQualityFollower", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CreateQualityFollowerResponse CreateQualityFollower(CreateQualityFollowerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateQualityFollowerWithOptions(request, runtime);
        }

        public async Task<CreateQualityFollowerResponse> CreateQualityFollowerAsync(CreateQualityFollowerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateQualityFollowerWithOptionsAsync(request, runtime);
        }

        public CreateDataServiceApiResponse CreateDataServiceApiWithOptions(CreateDataServiceApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDataServiceApiResponse>(DoRequest("CreateDataServiceApi", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateDataServiceApiResponse> CreateDataServiceApiWithOptionsAsync(CreateDataServiceApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateDataServiceApiResponse>(await DoRequestAsync("CreateDataServiceApi", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CreateDataServiceApiResponse CreateDataServiceApi(CreateDataServiceApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateDataServiceApiWithOptions(request, runtime);
        }

        public async Task<CreateDataServiceApiResponse> CreateDataServiceApiAsync(CreateDataServiceApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateDataServiceApiWithOptionsAsync(request, runtime);
        }

        public AbolishDataServiceApiResponse AbolishDataServiceApiWithOptions(AbolishDataServiceApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AbolishDataServiceApiResponse>(DoRequest("AbolishDataServiceApi", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AbolishDataServiceApiResponse> AbolishDataServiceApiWithOptionsAsync(AbolishDataServiceApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AbolishDataServiceApiResponse>(await DoRequestAsync("AbolishDataServiceApi", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public AbolishDataServiceApiResponse AbolishDataServiceApi(AbolishDataServiceApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AbolishDataServiceApiWithOptions(request, runtime);
        }

        public async Task<AbolishDataServiceApiResponse> AbolishDataServiceApiAsync(AbolishDataServiceApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AbolishDataServiceApiWithOptionsAsync(request, runtime);
        }

        public GetQualityEntityResponse GetQualityEntityWithOptions(GetQualityEntityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetQualityEntityResponse>(DoRequest("GetQualityEntity", "HTTP", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetQualityEntityResponse> GetQualityEntityWithOptionsAsync(GetQualityEntityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetQualityEntityResponse>(await DoRequestAsync("GetQualityEntity", "HTTP", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetQualityEntityResponse GetQualityEntity(GetQualityEntityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetQualityEntityWithOptions(request, runtime);
        }

        public async Task<GetQualityEntityResponse> GetQualityEntityAsync(GetQualityEntityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetQualityEntityWithOptionsAsync(request, runtime);
        }

        public GetQualityFollowerResponse GetQualityFollowerWithOptions(GetQualityFollowerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetQualityFollowerResponse>(DoRequest("GetQualityFollower", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetQualityFollowerResponse> GetQualityFollowerWithOptionsAsync(GetQualityFollowerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetQualityFollowerResponse>(await DoRequestAsync("GetQualityFollower", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public GetQualityFollowerResponse GetQualityFollower(GetQualityFollowerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetQualityFollowerWithOptions(request, runtime);
        }

        public async Task<GetQualityFollowerResponse> GetQualityFollowerAsync(GetQualityFollowerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetQualityFollowerWithOptionsAsync(request, runtime);
        }

        public DeleteQualityFollowerResponse DeleteQualityFollowerWithOptions(DeleteQualityFollowerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteQualityFollowerResponse>(DoRequest("DeleteQualityFollower", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteQualityFollowerResponse> DeleteQualityFollowerWithOptionsAsync(DeleteQualityFollowerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteQualityFollowerResponse>(await DoRequestAsync("DeleteQualityFollower", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public DeleteQualityFollowerResponse DeleteQualityFollower(DeleteQualityFollowerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteQualityFollowerWithOptions(request, runtime);
        }

        public async Task<DeleteQualityFollowerResponse> DeleteQualityFollowerAsync(DeleteQualityFollowerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteQualityFollowerWithOptionsAsync(request, runtime);
        }

        public CreateQualityEntityResponse CreateQualityEntityWithOptions(CreateQualityEntityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateQualityEntityResponse>(DoRequest("CreateQualityEntity", "HTTP", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateQualityEntityResponse> CreateQualityEntityWithOptionsAsync(CreateQualityEntityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateQualityEntityResponse>(await DoRequestAsync("CreateQualityEntity", "HTTP", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CreateQualityEntityResponse CreateQualityEntity(CreateQualityEntityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateQualityEntityWithOptions(request, runtime);
        }

        public async Task<CreateQualityEntityResponse> CreateQualityEntityAsync(CreateQualityEntityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateQualityEntityWithOptionsAsync(request, runtime);
        }

        public CreateQualityRuleResponse CreateQualityRuleWithOptions(CreateQualityRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateQualityRuleResponse>(DoRequest("CreateQualityRule", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateQualityRuleResponse> CreateQualityRuleWithOptionsAsync(CreateQualityRuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateQualityRuleResponse>(await DoRequestAsync("CreateQualityRule", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CreateQualityRuleResponse CreateQualityRule(CreateQualityRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateQualityRuleWithOptions(request, runtime);
        }

        public async Task<CreateQualityRuleResponse> CreateQualityRuleAsync(CreateQualityRuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateQualityRuleWithOptionsAsync(request, runtime);
        }

        public UpdateQualityFollowerResponse UpdateQualityFollowerWithOptions(UpdateQualityFollowerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateQualityFollowerResponse>(DoRequest("UpdateQualityFollower", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateQualityFollowerResponse> UpdateQualityFollowerWithOptionsAsync(UpdateQualityFollowerRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateQualityFollowerResponse>(await DoRequestAsync("UpdateQualityFollower", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public UpdateQualityFollowerResponse UpdateQualityFollower(UpdateQualityFollowerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateQualityFollowerWithOptions(request, runtime);
        }

        public async Task<UpdateQualityFollowerResponse> UpdateQualityFollowerAsync(UpdateQualityFollowerRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateQualityFollowerWithOptionsAsync(request, runtime);
        }

        public CreateQualityRelativeNodeResponse CreateQualityRelativeNodeWithOptions(CreateQualityRelativeNodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateQualityRelativeNodeResponse>(DoRequest("CreateQualityRelativeNode", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateQualityRelativeNodeResponse> CreateQualityRelativeNodeWithOptionsAsync(CreateQualityRelativeNodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateQualityRelativeNodeResponse>(await DoRequestAsync("CreateQualityRelativeNode", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public CreateQualityRelativeNodeResponse CreateQualityRelativeNode(CreateQualityRelativeNodeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateQualityRelativeNodeWithOptions(request, runtime);
        }

        public async Task<CreateQualityRelativeNodeResponse> CreateQualityRelativeNodeAsync(CreateQualityRelativeNodeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateQualityRelativeNodeWithOptionsAsync(request, runtime);
        }

        public DeleteQualityRelativeNodeResponse DeleteQualityRelativeNodeWithOptions(DeleteQualityRelativeNodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteQualityRelativeNodeResponse>(DoRequest("DeleteQualityRelativeNode", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteQualityRelativeNodeResponse> DeleteQualityRelativeNodeWithOptionsAsync(DeleteQualityRelativeNodeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteQualityRelativeNodeResponse>(await DoRequestAsync("DeleteQualityRelativeNode", "HTTPS", "POST", "2020-05-18", "AK", null, request.ToMap(), runtime));
        }

        public DeleteQualityRelativeNodeResponse DeleteQualityRelativeNode(DeleteQualityRelativeNodeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteQualityRelativeNodeWithOptions(request, runtime);
        }

        public async Task<DeleteQualityRelativeNodeResponse> DeleteQualityRelativeNodeAsync(DeleteQualityRelativeNodeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteQualityRelativeNodeWithOptionsAsync(request, runtime);
        }

        public string GetEndpoint(string productId, string regionId, string endpointRule, string network, string suffix, Dictionary<string, string> endpointMap, string endpoint)
        {
            if (!AlibabaCloud.TeaUtil.Common.Empty(endpoint))
            {
                return endpoint;
            }
            if (!AlibabaCloud.TeaUtil.Common.IsUnset(endpointMap) && !AlibabaCloud.TeaUtil.Common.Empty(endpointMap.Get(regionId)))
            {
                return endpointMap.Get(regionId);
            }
            return AlibabaCloud.EndpointUtil.Common.GetEndpointRules(productId, regionId, endpointRule, network, suffix);
        }

    }
}
